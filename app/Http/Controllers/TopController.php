<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use DateTime;
use App\Models\Plan;
use App\Models\Place;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        # Recommend things
        $plan = Plan::where('user_type', 'admin')->latest('updated_at')->first();
        $hotels = Place::where('place_category', 'hotel')->latest('updated_at')->take(4)->get();
        $restaurants = Place::where('place_category', 'restaurant')->latest('updated_at')->take(4)->get();
        $activities = Place::where('place_category', 'activity')->latest('updated_at')->take(4)->get();
        $spots = Place::where('place_category', 'spot')->latest('updated_at')->take(4)->get();

        $transfer_minute = 30;
        $interval = CarbonInterval::minutes($transfer_minute);    // Create a 30-minute interval
        $start_time = '9:00 AM';
        $arrival_time = Carbon::parse($start_time);    // Set the start time
        $pre_day = 0;
        $top_plan = [];
        $place_list = [];
        $day_places = [];
        $gm_plan = [];

        if ($plan) {
            // plan title for top page
            $top_plan['id'] = $plan->id;
            $top_plan['title'] = $plan->title;

            foreach ($plan->planDetailsSorted as $planDetail) {
                // get arrival time
                if ($planDetail->sort_no === 1) {
                    $arrival_time = Carbon::parse($start_time);    // Set the start time
                } else {
                    $arrival_time->add($interval);
                }

                $tmp_place = [
                    'place_id' => $planDetail->place->id,
                    'name_en' => $planDetail->place->name_en,
                    'prefecture_name_en' => $planDetail->place->prefecture->name_en,
                    'city_name_en' => $planDetail->place->city->name_en,
                    'address' => $planDetail->place->address,
                    'image' => $planDetail->place->image,
                    'description' => $planDetail->place->description,
                    'arrival_time' => $arrival_time->format('g:i A'),
                ];

                // for google map
                $place_list[] = $tmp_place;

                // first place of day
                if ($pre_day !== $planDetail->day) {
                    if ($pre_day !== 0) {
                        // add places of day
                        $top_plan['days'][] = $day_places;
                    }
                    // reset
                    $day_places = [];
                }
                // add place to places of day
                $day_places[] = $tmp_place;

                // save day
                $pre_day = $planDetail->day;
            }
            // add places of day
            $top_plan['days'][] = $day_places;

            // for google map
            foreach ($place_list as $place) {
                $gm_plan[] = $place['address']. ' '. $place['city_name_en']. ' '. $place['prefecture_name_en']. ' '. $place['name_en'];
            }
        }


        return view(
            'users.top',
            compact(
                'gm_plan',
                'top_plan',
                'transfer_minute',
                'hotels',
                'restaurants',
                'activities',
                'spots',
            )
        );
    }
}
