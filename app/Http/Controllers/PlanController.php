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

    public function __construct(Plan $plan, Place $place)
    {
        $this->plan = $plan;
        $this->place = $place;
    }


    // }

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
        $plan = new Plan();
        $plan->user_id = Auth::user()->id;
        $plan->user_div = 1;
        $plan->title = 'Test Plan'; // Modify the title accordingly
        $plan->save();

        //[step4] save the plan details
        $sortNo = 1; // Initialize the sort number
        foreach($interestedPlaces as $place) {
            DB::table('plan_details')->insert([
                'plan_id' => $plan->id,
                'day' => 1, // Specify the day for ID available
                'place_id' => $place->id,
                'sort_no' => $sortNo, // Assign the sort number
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $sortNo++; // Increment the sort number for the next place in the plan
        }
        // Retrieve the plan from the 'plans' table using its ID
        $plan = Plan::find($plan->id);

        return view('users.plans.show', [
            'plan' => $plan, //pass the retrieved plan object
            'place' => $this->place,
            'interested_places' => $interestedPlaces->take(6), // Limit the collection to six items
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

    
    return redirect()->back()->with('success', 'Added as my favorite plan!');;

        
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
        $adminPlans = Plan::where('user_div', 'admin')->get();

        return view('users.plans.contents.recommend', ['adminPlans' => $adminPlans]);

    }



}