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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        return view('users.plans.show', [
            'plan' => $this->plan,
            'place' => $this->place,
            'interested_places' => $interestedPlaces
        ]);
    }

    public function up()
    {
        $plan = new Plan();
        $userId = Auth::user()->id;
        $interestedPlaces = [];

        // Create a new plan and retriece its ID
        $plan = DB::table('plans')->insertGetId([
            'user_id' => $userId,
            'user_div' => 1,
            'title' => 'Test Plan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Assuming you have the plan ID available
        $planId = $plan;
        $day = 1; //specify the day for ID available
        $sortNo = 1; //specofy the sort number for the plan 

        foreach($interestedPlaces as $place){
            DB::table('plan_details')->insert([
                'plan_id'   => $planId,
                'day'       => $day,
                'place_id'  => $place->id,
                'created_at'=> now(),
                'updated_at'=> now(),
            ]);
            $sortNo++; //Increment the sort number for the next place in the plan
        }

        $this->plan->save();
        return redirect()->back();
        
    }

    // public function edit(){
        //option
    // }

    public function destroy($id){
        $plan = $this->plan->findOrFail($id);
        $plan->forceDelete();
        return redirect()->back();
    }




}