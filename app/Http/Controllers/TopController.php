<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Prefecture;
use App\Models\City;



class TopController extends Controller
{
    public function index()
    {
        $place_list = [
            ['place_id' => 1, 'name_en' => 'Universal Studios Japan', 'prefecture_name_en' => 'Osaka', 'city_name_en' => 'Osaka-shi', 'address' => '2-1-33 Sakurajima Konohana-ku'],
            ['place_id' => 2, 'name_en' => 'Abeno Harukas', 'prefecture_name_en' => 'Osaka', 'city_name_en' => 'Osaka-shi', 'address' => '1-1-43 Abenosuji Abeno-ku'],
            ['place_id' => 3, 'name_en' => 'Osaka Aquarium', 'prefecture_name_en' => 'Osaka', 'city_name_en' => 'Osaka-shi', 'address' => '1-1-10 Kaigandori Minato-ku'],
            ['place_id' => 4, 'name_en' => 'Grand Front Osaka', 'prefecture_name_en' => 'Osaka', 'city_name_en' => 'Osaka-shi', 'address' => 'Ofukacho Kita-ku'],
        ];

        foreach ($place_list as $place) {
            $gm_plan[] = $place['address']. ' '. $place['city_name_en']. ' '. $place['prefecture_name_en']. ' '. $place['name_en'];
        }

        $top_hotel = $this->getTopHotel();
        $sub_hotels = $this->getSubHotels();

        return view('users.top')
            ->with('top_hotel', $top_hotel)
            ->with('sub_hotels', $sub_hotels)
            ->with('gm_plan', $gm_plan);
    }

    function getSubHotels() {
        // $hotels = DB::table('places')
        //     ->where('place_category','hotel' )
        //     ->latest($column = 'updated_at')
        //     ->with('prefencure')
        //     ->take(4)->get();
        // $top_hotel = [];

        // foreach($hotels as $hotel){
        //         $top_hotel[] = $hotel;
                
        // }

        $hotels = DB::table('places')
        ->where('place_category','hotel' )
        ->latest($column = 'updated_at')->take(4)->get();

        $hotel_info= [];

        foreach($hotels as $hotel){
            $hash = [];
            $prefecture = DB::table('prefectures')->where('id', $hotel->prefecture_id)->first();
            $city = DB::table('cities')->where('id', $hotel->city_id)->first();

            $hash = [
                'hotel' => $hotel,
                'prefecture' => $prefecture->name_en,
                'city' => $city->name_en,
            ];
            
            $hotel_info[] = $hash;
            // dd($hotel_prefecture);
        }

        return $hotel_info;
    }

    public function getTopHotel(){
        $main = DB::table('places')
            ->where('place_category','hotel' )
            ->latest($column = 'updated_at')
            ->first();
        return $main;
    }

    // public function getSubHotels(){

        // $i = 3;

        // $sub = DB::table('places')
        // ->where('place_category','hotel' )
        // ->latest($column = 'updated_at')
        // ->take(4)->get();

        // unset($sub[0]);
        // $sub = array_values($sub);

        // dd($sub_hotel);
        // return $sub_hotel;
    // }

}
