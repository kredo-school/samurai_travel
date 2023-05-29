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

class PlanController extends Controller


{
    // define private properties
    const LOCAL_STORAGE_FOLDER =  'public/images/';
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

            // $i = 1;
            // $nextDestinationTime = null;
        
        // Use this for displaying the time 
        // foreach ($places as $place) {
        //     $times = [];
        //     if($i == 1){
        //         $times[] = date('H:i', strtotime('09:00'));
        //         $nextDestinationTime = strtotime('+' . $place->spend_time . ' minutes', strtotime('9:00'));    
        //     }else{
        //         $times[] = date('H:i', $nextDestinationTime);
        //         $nextDestinationTime = strtotime('+' . $place->spend_time . ' minutes', $nextDestinationTime);
        //     }
        
        //     $place->times = $times;
        //     $i++;
        // }
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

                // $i = 1;
                // $nextDestinationTime = null;
            
            // Use this for displaying the time 
            // foreach ($places as $place) {
            //     $times = [];
            //     if($i == 1){
            //         $times[] = date('H:i', strtotime('09:00'));
            //         $nextDestinationTime = strtotime('+' . $place->spend_time . ' minutes', strtotime('9:00'));    
            //     }else{
            //         $times[] = date('H:i', $nextDestinationTime);
            //         $nextDestinationTime = strtotime('+' . $place->spend_time . ' minutes', $nextDestinationTime);
            //     }
            
            //     $place->times = $times;
            //     $i++;
            // }
                return view('users.plans.plan-details', [        
                    'plans' => $plans, 
                    'places' => $places,
                    'plan_details' => $plan_details,
                    'placeForPlanGroups' => $placeForPlanGroups,
                    'recommended_plans'=>$recommended_plans_test
                ]); 
            }

        
    

    }