<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Genre;
use App\Models\Place;
use App\Models\Keyword;
use App\Models\Interest;
use App\Models\Question;
use App\Models\PlanDetail;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class SuggestPlansController extends Controller
{
    const DEFAULT_SPEND_TIME = 90;
    const MOVE_TIME = 30;
    const START_TIME = '09:00';
    const RANDOM_MIN_NUMBER = 1;
    const RANDOM_MAX_NUMBER = 3;
    const RANDOM_CRITERIA_NUMBER = 2;

    public function index(Request $request)
    {
        if (is_null($request->input('question_id'))) {
            session(['question_no' => 1]);
            session()->forget('answers');
        } else {
            session(['question_no' => session('question_no') + 1]);
            // Dont include on select result
            $question_id = $request->input('question_id');
        }

        if (!empty($request->input('answer'))) {
            session(['answers.question_'.$question_id.'.question_id' => $question_id]);
            
            foreach ($request->input('answer') as $answer) {
                session()->push('answers.question_'.$question_id.'.answer_id', $answer);
            }
        }

        $interest = new Interest();
        $interest_data = $interest->selectRandomInterest();

        // Whether to use interest
        if (is_null($interest_data)) {
            $is_use_interest = false;
        } else {
            $r_use_interest_num = mt_rand(self::RANDOM_MIN_NUMBER, self::RANDOM_MAX_NUMBER);
            $is_use_interest = self::isLessThanNumber($r_use_interest_num);
        }

        // Whether to use keyword
        $r_use_keyword_num = mt_rand(self::RANDOM_MIN_NUMBER, self::RANDOM_MAX_NUMBER);
        $is_use_keyword = self::isLessThanNumber($r_use_keyword_num);

        $question = new Question();
        // Search by interested keyword
        if ($is_use_interest && $is_use_keyword) {
            $question_data = $question->selectRandomQuestionByKeyword($interest_data);

        // Search by interested Genre
        } elseif ($is_use_interest && !$is_use_keyword) {
            $genre = new Genre();
            $interested_genre = $genre->selectRandomInterestGenre($interest_data);
            $question_data = $question->selectRandomQuestionByGenre($interested_genre);
        }
        // Search Random or if above select question is null
        if (empty($question_data)) $question_data = $question->selectRandomQuestion();

        return view('users.suggest-plans.questions')
                    ->with('question', $question_data);
    }

    private function isLessThanNumber ($random_num)
    {
        $result = ($random_num <= self::RANDOM_CRITERIA_NUMBER) ? true : false;
        return $result;
    }

    public function createPlan (Request $request)
    {
        if (is_null($request->input('question_id'))) {
            $request = new Request();
        } else {
            // Dont include on select result
            $question_id = $request->input('question_id');

            if (!empty($request->input('answer'))) {
                session(['answers.question_'.$question_id.'.question_id' => $question_id]);
                foreach ($request->input('answer') as $answer) {
                    session()->push('answers.question_'.$question_id.'.answer_id', $answer);
                }
            }
        }

        $keyword = new Keyword();
        $keyword_list = $keyword->selectKeywordBySessionAnswers();

        
        $place = new Place();
        $target_prefecture_id = $place->selectTargetPrefectureByKeywords($keyword_list);
        
        $plan_detail = new PlanDetail();
        $plan_details = $plan_detail->createPlanDetail($target_prefecture_id, $keyword_list);

        $arrival_times = $this->setSpendTime($plan_details);
        foreach ($plan_details as $place) {
            $gm_plan[] = $place->address. ' '. $place->city_name_en. ' '. $place->prefecture_name_en. ' '. $place->name_en;
        }

        session(['plan_details' => $plan_details]);
        session(['arrival_times' => $arrival_times]);
        session(['move_time' => self::MOVE_TIME]);
        session(['target_prefecture_id' => $target_prefecture_id]);

        return view('users.suggest-plans.plan_detail')
            ->with('plan_details', $plan_details)
            ->with('arrival_times', $arrival_times)
            ->with('move_time', self::MOVE_TIME)
            ->with('gm_plan', $gm_plan);
    }

    public function editPlan()
    {
        $plan_details = session('plan_details');
        $arrival_times = session('arrival_times');
        $target_prefecture_id = session('target_prefecture_id');

        $place = new Place();
        $place_list = $place->selectByPrefecture($target_prefecture_id);

        $session_plan = [];
        foreach ($plan_details as $key => $place) {
            $session_plan[$key] =  $place->id;
        }
        session(['session_plan' => $session_plan]);

        return view('users.suggest-plans.edit.plan_detail')
                    ->with('plan_details', $plan_details)
                    ->with('arrival_times', $arrival_times)
                    ->with('move_time', self::MOVE_TIME)
                    ->with('place_list', $place_list);
    }

    public function storePlan(Request $request)
    {
        $requests = $request->all();
        $place_ids = [];
        foreach ($requests as $key => $request) {
            if ($key === '_token') {
                continue;
            }
            $place_ids[] = $request;
        }

        $plan = new Plan();
        $saved_plan = $plan->storePlan();
        $plan_id = $saved_plan->id;

        $plan_detail = new PlanDetail();
        $result = $plan_detail->storePlanDetail($plan_id, $place_ids, null);

        if ($result) {
            session()->forget('plan_details');
            session()->forget('target_prefecture_id');
            session()->forget('arrival_times');

            return redirect()->route('my_page');
        } else {
            return redirect()->back();
        }
    }

    private function setSpendTime($plan_details)
    {
        $arrival_times = [self::START_TIME];
        $index = 0;
        foreach ($plan_details as $place) {
            if (is_null($place->spend_time)) {
                $arrival_times[] = $this->plusArrivalTime($arrival_times[$index], self::DEFAULT_SPEND_TIME, self::MOVE_TIME);
            } else {
                $arrival_times[] = $this->plusArrivalTime($arrival_times[$index], $place->spend_time, self::MOVE_TIME);
            }
            $index++;
        }

        return $arrival_times;
    }

    private function plusArrivalTime($base_time, $add_time, $move_time = null)
    {
        list($hours, $minutes) = explode(':', $base_time);
        $hours = intval($hours);
        $minutes = intval($minutes);

        if (!is_null($move_time)) {
            $add_time += $move_time;
        }
        
        $minutes += $add_time;

        if ($minutes >= 60) {
            $hours += floor($minutes / 60);
            $minutes = $minutes % 60;
        }

        $result_time = sprintf('%02d:%02d', $hours, $minutes);
        return $result_time;
    }

    public function searchPlaces()
    {
        $target_prefecture_id = session('target_prefecture_id');
        $place = new Place();
        $place_list = $place->selectByPrefecture($target_prefecture_id);
        $asset_path = asset('storage/sample/');

        $response = [
            'data' => $place_list,
            'asset_path' => $asset_path,
            'message' => 'Success',
        ];

        return response()->json($response);
    }
}
