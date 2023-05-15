<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\PlaceImage;

use Illuminate\Http\Request;




class PlaceController extends Controller
{
    #Define private properties
    private $place;
    private $place_image;

    #Define the constructor
    public function __construct(Place $place, PlaceImage $place_image){
        $this->place = $place;
        $this->place_image = $place_image;
        
    }
}
