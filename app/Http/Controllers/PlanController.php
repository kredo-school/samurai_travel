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
    
    private $place;
    private $user;
    private $keyword;
    private $place_image;
    private $place_keyword;

    // define the constructor
    public function __construct(Place $place, User $user, Keyword $keyword, PlaceImage $place_image, PlaceKeyword $place_keyword)
    {
        $this->place = $place;
        $this->user = $user;
        $this->keyword = $keyword;
        $this->place_image = $place_image;
        $this->place_keyword = $place_keyword;
        
    }

    public function ShowPlanInfo()
    {   
        # get the data from table
        $all_places = Place::all();  //to get location name, adress
        $all_place_image = PlaceImage::all();   //to get image and description
        $all_place_keyword = PlaceKeyword::all(); //to get the keyword
    
        $place_for_plan = [];

        foreach($all_places as $place){
            if($this->place->favorite()){
                $place_for_plan[] = $place;
            }
        }
            
        return view('users.plans.show')->with('place', $place);
        // ->with('place_image', $place_image);
        
    }

    

}