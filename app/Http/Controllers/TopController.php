<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $place_list = [
            ['place_id' => 1, 'name_en' => 'Universal Studios Japan', 'prefecture_name_en' => 'Osaka', 'city_name_en' => 'Osaka-shi', 'address' => '2-1-33 Sakurajima Konohana-ku'],
            ['place_id' => 2, 'name_en' => 'Abeno Harukas', 'prefecture_name_en' => 'Osaka', 'city_name_en' => 'Osaka-shi', 'address' => '1-1-43 Abenosuji Abeno-ku'],
            ['place_id' => 3, 'name_en' => 'Osaksa Aquarium', 'prefecture_name_en' => 'Osaka', 'city_name_en' => 'Osaka-shi', 'address' => '1-1-10 Kaigandori Minato-ku'],
            ['place_id' => 4, 'name_en' => 'Grand Front Osaka', 'prefecture_name_en' => 'Osaka', 'city_name_en' => 'Osaka-shi', 'address' => 'Ofukacho Kita-ku'],
        ];

        foreach ($place_list as $place) {
            $gm_plan[] = $place['address']. ' '. $place['city_name_en']. ' '. $place['prefecture_name_en']. ' '. $place['name_en'];
        }

        return view('users.top')
                ->with('gm_plan', $gm_plan);
    }
}
