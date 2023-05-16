<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\User;
use App\Models\Keyword;
use App\Models\PlaceImage;
use App\Models\PlaceKeyword;

use Illuminate\Support\Facades\DB;

class PlanController extends Controller


{
    // define private properties
    const LOCAL_STORAGE_FOLDER =  'public/images/';

    
                
    // }

    # to show the place which has the keyword registered as 'interest' by Auth User

    public function showPlanInfo(){
    $all_places = Place::all();  //to get location name, adress
    $all_place_image = PlaceImage::all();   //to get image and description
    $all_place_keyword = PlaceKeyword::all(); //to get the place_keyword
    $all_keyword = Keyword::all(); //to get the keyword


    $place_for_plan = [];

    $count = 0;
    foreach($all_places as $place){
        print "!!!!!!!!!!!!!!!!!!!!!!! <br/>";
        $s_count = (string) $count;
        print "count: $s_count <br/>";
        $count++;

        $s_place = (string) $place;
        print "s_place: $s_place <br/>";

        // キーワードに紐づく場所を追加
        // もしお気に入りなら場所を追加

            if($place->favorited()){
                $PlaceKeyWord   = PlaceKeyword::select('keyword_id')->where('place_id', '=', $place->id)->get();
                $s_PlaceKeyWord = (string) $PlaceKeyWord;
                print "s_PlaceKeyWord: $s_PlaceKeyWord <br/>";

                $id_PlaceKeyWord = $PlaceKeyWord[0]->keyword_id;
                $s_id_PlaceKeyWord = (string) $id_PlaceKeyWord;
                print "s_id_PlaceKeyWord: $s_id_PlaceKeyWord <br/>";

                $PlaceIds   = PlaceKeyword::select('place_id')->where('keyword_id', '=', $PlaceKeyWord[0]->keyword_id)->get();
                $s_PlaceIds = (string) $PlaceIds;
                print "s_PlaceIds: $s_PlaceIds <br/>";

                foreach($PlaceIds as $PlaceId){
                    $get_place   = Place::select('*')->where('id', '=', $PlaceId->place_id)->get();
                    $s_get_place = (string) $get_place;
                    print "s_get_place: $s_get_place <br/>";
                    $place_for_plan[] = $get_place[0];
                }
                
                $place_for_plan[] = $place;
                $str_pfm = implode(",", $place_for_plan);
                print "str_pfm: $str_pfm <br/>";
            }
        
    }
    return view('users.plans.show')
        ->with('place_for_plan' , $place_for_plan);
}
    

}