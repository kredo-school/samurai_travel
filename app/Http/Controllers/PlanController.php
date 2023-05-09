<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\User;
use App\Models\Keyword;

class PlanController extends Controller


{
    // define private properties
    const LOCAL_STORAGE_FOLDER =  'public/images/';
    private $place;
    private $user;
    private $keyword;

    // define the constructor

    public function __construct(Place $place, User $user, Keyword $keyword)
    {
        $this->place = $place;
        $this->user = $user;
        $this->keyword = $keyword;
    }

    // Show the plan dashboard

    

    public function index()
    {
        // $all_places = $this->place->get(5);
        // $suggested_plan = $this->getSuggestedPlaces();

        // $home_plans = [];

        // foreach($all_places as $place){
        //     if($place->$keyword->isLiked())
        //     $home_places[] = $place;{

        //     }
        // }
        
        return view('users.plans.contents.show');
        // ->with('home_places', $home_places)
        // ->with('suggested_places', $suggested_places);
    }

        

    // public function getSuggestedPlaces(){
    //     $all_places = $this->place->all();
    //     $suggested_plans = [];


    // }

    

    public function showLocation($id){
        $place = $this->place->findOrFail($id);
        return view('users.plans.contents.show')
        ->with('place', $place);
    }
}