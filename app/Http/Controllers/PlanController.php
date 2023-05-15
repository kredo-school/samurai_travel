<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\User;
use App\Models\Keyword;
use App\Models\PlaceImage;
use App\Models\PlaceKeyword;



class PlanController extends Controller


{
    // define private properties
    const LOCAL_STORAGE_FOLDER =  'public/images/';

    public function ShowPlanInfo()
    {   
        # get the data from table
        $all_places = Place::all();  //to get location name, adress
        $all_place_image = PlaceImage::all();   //to get image and description
        $all_place_keyword = PlaceKeyword::all(); //to get the keyword
    
        $place_for_plan = [];

        foreach($all_places->take(6) as $place){
            if($place->favorite()){
                $place_for_plan[] = $place;
            }
        }
            
        return view('users.plans.show')
        ->with('place_for_plan' , $place_for_plan);
    }

    

}