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

        # Retrieve the sub-images from the Place_image table.
        $sub_imgs = DB::table('place_images')->where('place_id', $id)->get();

        # Retrive the recommendation
        $recommend_places = $this->getRecommendPlace($place);
        $affiliates = $this->getAffiliate($id);
       
        return view('users.place_details.show')
            ->with('place', $place)
            ->with('sub_imgs', $sub_imgs)
            ->with('recommend_places', $recommend_places)
            ->with('affiliates', $affiliates);
    }

    public function getRecommendPlace(Place $place)
    {   
        # place_keyword tableから$idとplace_idが等しいデータを抽出
        $place_keywords = $place->placeKeyword;
        if(!$place_keywords){
            $recommend_place = [];
        }
        else{
            $keyword_id_list = [];
            $keyword_id_list = $place_keywords->pluck('keyword_id')->unique()->toArray();
            $all_target_data = [];
            $all_target_data = PlaceKeyword::whereIn('keyword_id', $keyword_id_list)->where('place_id', '<>', $place->id)->get();
    
            $place_id_list = $all_target_data->pluck('place_id')->unique()->toArray();
            $target_place_id = array_unique($place_id_list);
            $num_element = count($target_place_id);
    
            if($num_element < 4 ){
                $recommend_place = DB::table('places')->whereIn('id', $target_place_id)->get();
            }
            else{
                $rand_samplings = array_rand($target_place_id, 4);
                foreach($rand_samplings as $rand_sampling_id)
                {
                    $recommend_place_id[] = $target_place_id[$rand_sampling_id];
                }
                $recommend_place = DB::table('places')->whereIn('id', $recommend_place_id)->get();
            }
    
        }       
        return $recommend_place;
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


    // Commented out as not currently used
    // public function getRecommend($id){

    //     # Retrieve the sub-images from the Place_image table.
    //     $sub_imgs = DB::table('place_images')->where('place_id', $id)->get();

    //     # Retrive the recommendation
    //     $recommend_places = $this->getRecommendPlace($id);
    //     $affiliates = $this->getAffiliate($id);
    //     return view('users.place_details.show')
    //     ->with('place', $place)
    //     ->with('sub_imgs', $sub_imgs)
    //     ->with('recommend_places', $recommend_places)
    //     ->with('affiliates', $affiliates);
    // }
}

