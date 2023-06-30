<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Interest;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\User;
use App\Models\Keyword;
use App\Models\PlaceImage;
use App\Models\PlaceKeyword;
use App\Models\Plan;
use App\Models\PlanDetail;
use App\Models\PlanFavorite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class PlanController extends Controller


{
    // define private properties
    const LOCAL_STORAGE_FOLDER =  'public/images/';
    protected $fillable = ['title', 'user_id', 'user_type'];
    private $plan;
    private $place;
    private $keyword;
    private $plan_detail;
    private $place_image;

    public function __construct(Plan $plan, Place $place, PlanDetail $plan_detail, PlaceImage $place_image)
    {
        $this->plan = $plan;
        $this->place = $place;
        $this->plan_detail = $plan_detail;
        $this->place_image = $place_image;
    }
    
    ## ログイン後にマイプランを表示させるときに使用 (to show the myplan for logged-in users)
    # to show the place which has the keyword registered as 'interest' by Auth User

    public function showMyPlan()
    {      
        // [step1] add favorite
        $favoritePlaces = Auth::user()->placeFavorites;

        // [step2] get the interested keywords
        $interestedKeywords = Auth::user()->interestedKeywords;
        
        $interestedPlaces = collect([]);
        foreach($interestedKeywords as $keyword) {
            $interestedPlaces = $interestedPlaces->merge($keyword->interestedPlaces);
        }

        $interestedPlaces = $favoritePlaces->merge($interestedPlaces)->unique('id');

        $interestedPlacesGroups = $interestedPlaces->chunk(6);
        $number_of_days = count($interestedPlacesGroups);

        return view('users.myplans.myplan', [
            // 'plan' => $plan, //pass the retrieved plan object
            // 'place' => $this->place,
            'day' => $number_of_days,
            'interested_places_groups' => $interestedPlacesGroups 
        ]);
    }

    // function for displaying Admin user's recommend plan
    // 管理者のおすすめプランを表示させる
    public function showRecommendPlan($id){

        $recommended_plans = Plan::where('user_type', '=' , 'admin')->take(3)->get();
        
        

        $places= [];
        $plan_details = null;

        foreach ($recommended_plans as $recommended_plan){
            $placeIds= PlanDetail::select('place_id')->where('plan_id', '=', $recommended_plan->id)->get();
            $places = Place::whereIn('id', $placeIds)->get();
            $plan_details = PlanDetail::where('plan_id', $recommended_plan->id)->first();     
        }

        $placeForPlanGroups = $places;

            return view('users.plans.contents.recommend', [        
                'recommended_plans' => $recommended_plans, 
                'places' => $places,
                'plan_details' => $plan_details,
                'placeForPlanGroups' => $placeForPlanGroups,
            ]); 
        }
    

        // ゲストユーザを対象に表示させるプラン詳細画面
        // To Show the plan details for guest user
        public function showPlan($id){
                $plans = $this->plan->findOrFail($id);
                $placeIds= PlanDetail::select('place_id')->where('plan_id', '=', $plans->id)->get();
                $places = Place::whereIn('id', $placeIds)->get();
                $plan_details = PlanDetail::where('plan_id', $plans->id)->first(); 

                $placeForPlanGroups = $places;

            //testing
            $recommended_plans_test = Plan::where('user_type', '=' , 'admin')->take(3)->get();
        
            
            $plan = $plans;

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
                }

                    // add place to places of day
                    $day_places[] = $tmp_place;
                }

                // for google map
                foreach ($place_list as $place) {
                    $gm_plan[] = $place['address']. ' '. $place['city_name_en']. ' '. $place['prefecture_name_en']. ' '. $place['name_en'];
                }

                return view('users.plans.plan-details', [        
                    'plans' => $plans, 
                    'places' => $places,
                    'plan_details' => $plan_details,
                    'placeForPlanGroups' => $placeForPlanGroups,
                    'recommended_plans'=>$recommended_plans_test,
                    'gm_plan' => $gm_plan
                ]); 
            }

    }