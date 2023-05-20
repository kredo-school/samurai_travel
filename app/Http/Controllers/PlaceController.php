<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Placeimage;
use App\Models\PlaceKeywords;
use App\Models\placeAffiliateSites;

class PlaceController extends Controller
{
    private $place;

    public function __construct(Place $place)
    {
        $this->place = $place;
    }

    public function index($id)
    {
        $place = $this->place->findOrFail($id);

        # Retrieve the opening and ending time(00:00 - 00:00) from timestamp.
        $opening_time  = date('H:i', strtotime($place->opening_time));
        $place->opening_time = $opening_time;
        $ending_time  = date('H:i', strtotime($place->ending_time));
        $place->ending_time = $ending_time;

        return view('users.place_details.show')
            ->with('place', $place);
            // ->with('place_img', $place_img);

    }

    public function getSubImage()
    {        
        # Retrieve the sub-images from the Place_image table to which place_id is equal.
        $place_img = $this->place_img->all();
        $sub_img = [];


    }

    public function get(Type $var = null)
    {
        # Retrieve the Site name, Site URL and Lodging Fees from place_affiliate_sites table.
    }
   
}

# Display the Google maps and addresses of the places from Google API.
# -> no need