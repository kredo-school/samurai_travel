<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\PlaceImage;
use App\Models\PlaceKeyword;
use App\Models\PlaceAffiliateSite;

class PlaceController extends Controller
{
    private $place;
    private $place_img;

    public function __construct(Place $place, PlaceImage $place_img, PlaceKeyword $place_keywords)
    {
        $this->place = $place;
        $this->place_img = $place_img;
    }

    public function index($id)
    {
        $place = $this->place->findOrFail($id);

        # Retrieve the opening and ending time(00:00 - 00:00) from timestamp.
        // $opening_time  = date('H:i', strtotime($place->opening_time));
        // $place->opening_time = $opening_time;
        // $ending_time  = date('H:i', strtotime($place->ending_time));
        // $place->ending_time = $ending_time;

        # Retrieve the sub-images from the Place_image table.
        $sub_imgs = DB::table('place_images')->where('place_id', $id)->get();

        # Retrive the recommendation
        $recommend_places = $this->getRecommendPlace($id);
        $affiliates = $this->getAffiliate($id);
       
        return view('users.place_details.show')
            ->with('place', $place)
            ->with('sub_imgs', $sub_imgs)
            ->with('recommend_places', $recommend_places)
            ->with('affiliates', $affiliates);
    }

    public function getRecommendPlace($id)
    {       
        $place_keywords = DB::table('place_keywords')->where('place_id', $id)->get();
        $tmp = [];

        foreach($place_keywords as $place_keyword){
                $tmp[] = $place_keyword->keyword_id;
        }

        $target = DB::table('place_keywords')->whereIn('keyword_id', $tmp)->where('place_id', '<>', $id)->get();

        $places = [];
        for($i = 1; $i < 5; $i++)
        {
            $random_num = rand(0, $target->count()-1);
            $record = $target[$random_num];
            $place = DB::table('places')->where('id', $record->place_id)->first();
            $places[] =$place;
        }
        return $places;
    }

    public function getAffiliate($id)
    {
        # Retrieve the Site name, Site URL and Lodging Fees from place_affiliate_sites table.
        $affiliates = DB::table('place_affiliate_sites')->where('place_id', $id)->get();
        $data = [];

        foreach($affiliates as $affiliate){
            $hash = [];
            $x = DB::table('affiliate_sites')->where('id', $affiliate->affiliate_id)->first();

            $hash = [
                'affiliate' => $x,
                'price' => $affiliate->price,
            ];
            $data[] = $hash;
        }

        return $data;
    }
}

# Display the Google maps and addresses of the places from Google API.
# -> no need
