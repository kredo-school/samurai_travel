<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\Answer;
use App\Models\Keyword;
use App\Models\Interest;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class SuggestPlansController extends Controller
{
    public function index(Request $request)
    {
        if (is_null($request->input('question_id'))) {
            // $request = new Request();
            session(['question_no' => 1]);
            session()->forget('answers');
        } else {
            session(['question_no' => session('question_no') + 1]);

            // Dont include on select result
            $question_id = $request->input('question_id');
            dump($request->input('answer'));

            if (!empty($request->input('answer'))) {
                foreach ($request->input('answer') as $answer) {
                    session()->push('answers.question_'.$question_id.'.answer', $answer);
                }
            }
        }

        $interest = new Interest();
        $interest_data = $interest->selectRandomInterest();

        // Whether to use interest
        if (is_null($interest_data)) {
            $is_use_interest = false;
        } else {
            $r_use_interest_num = mt_rand(1, 3);
            if ($r_use_interest_num == 1 || $r_use_interest_num == 2) {
                $is_use_interest = true;
            } else {
                $is_use_interest = false;
            }
        }

        // Whether to use keyword
        $r_use_keyword_num = mt_rand(1, 3);
        if ($r_use_keyword_num == 1 || $r_use_keyword_num == 2) {
            $is_use_keyword = true;
        } else {
            $is_use_keyword = false;
        }

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

    public function createPlan (Request $request)
    {
        if (is_null($request->input('question_id'))) {
            $request = new Request();
        } else {
            // Dont include on select result
            $question_id = $request->input('question_id');
            dump($request->input('answer'));

            if (!empty($request->input('answer'))) {
                foreach ($request->input('answer') as $answer) {
                    session()->push('answers.question_'.$question_id.'.answer', $answer);
                }
            }
        }


        $keyword = new Keyword();
        $keywords = $keyword->selectKeywordBySessionAnswers();


        return view('users.suggest-plans.plan_detail');
    }
}
