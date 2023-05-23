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
    
    ## ログイン後にプランを表示させるときに使う
    # to show the place which has the keyword registered as 'interest' by Auth User

    public function showPlanInfo()
    {      
        // [step1] add favorite
        // place being marked as favorite by the login user
        $favoritePlaces = Auth::user()->placeFavorites;

        // [step2] get the interested keywords
        $interestedKeywords = Auth::user()->interestedKeywords;
        
        $interestedPlaces = collect([]);
        foreach($interestedKeywords as $keyword) {
            $interestedPlaces = $interestedPlaces->merge($keyword->interestedPlaces);
        }

        $interestedPlaces = $favoritePlaces->merge($interestedPlaces)->unique('id');
        
        //[step3] save the plan
        // $plan = new Plan();
        // $plan->user_id = Auth::user()->id;
        // $plan->user_type = 'user';
        // $plan->title = 'Test Plan'; // Modify the title accordingly
        // $plan->save();

        //[step4] save the plan details
        // $day = 1; // Initialize the day

        // foreach($interestedPlaces as $place) {
        //     DB::table('plan_details')->insert([
        //         'plan_id' => $plan->id,
        //         'day' => 1, // Specify the day for ID available
        //         'place_id' => $place->id,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
                
        // }

        // Retrieve the plan from the 'plans' table using its ID
        // $plan = Plan::find($plan->id);

        
        $interestedPlacesGroups = $interestedPlaces->chunk(6);
        $number_of_days = count($interestedPlacesGroups);


        return view('users.plans.show', [
            // 'plan' => $plan, //pass the retrieved plan object
            // 'place' => $this->place,
            'day' => $number_of_days,
            'interested_places_groups' => $interestedPlacesGroups 
        ]);

    }

    public function favorite($planId)
    {
        $user = Auth::user();

        // Check if the user has already favorited the plan
        $existingFavorite = PlanFavorite::where('user_id', $user->id)
        ->where('plan_id', $planId)
        ->first();

    if ($existingFavorite) {
        // Plan is already favorited by the user
        // implement the logic for unfavoriting here 
    } else {
        // Plan is not favorited by the user, so insert it into the plan_favorites table
        $favorite = new PlanFavorite();
        $favorite->user_id = $user->id;
        $favorite->plan_id = $planId;
        $favorite->save();    
    }

    return redirect()->back()->with('success', 'Added as my plan!');

    }

    // public function edit(){
        //option
    // }

    public function destroy($id){
        $plan = $this->plan->findOrFail($id);
        $plan->forceDelete();
        return redirect()->back();
    }

    // function for displaying Admin user's recommend plan
    public function showRecommendPlan(){
        
        //retrieve the plans created by admin users
        $adminPlans = [];
        $adminPlans = Plan::where('user_type', 'admin')->get();
        
        return view('users.plans.contents.recommend', ['adminPlans' => $adminPlans]);

    }

    ## ログイン前に表示させるプラン詳細画面
    public function showPlan($id){
        $plans = $this->plan->findOrFail($id);
        $placeIds= PlanDetail::select('place_id')->where('plan_id', '=', $plans->id)->get();
        $places = Place::whereIn('id', $placeIds)->get();
        $plan_details = PlanDetail::where('plan_id', $plans->id)->first(); 

        $placesGroups = $places;
        $number_of_days = count($placesGroups);
        

        foreach ($places as $place) {
            $startTime = strtotime('09:00');
            $endTime = strtotime('24:00');
            $times = [];
            while ($startTime <= $endTime) {
                $times[] = date('H:i', $startTime);
                $startTime = strtotime('+' . $place->spend_time . ' minutes', $startTime);
            }
        
            $place->times = $times;
        }
            return view('users.plans.plan-details', [        
                'plans' => $plans, 
                'places' => $places,
                'plan_details' => $plan_details,
                'day' => $number_of_days,
                'places_groups' => $placesGroups
                
            ]); 
        }
    }



