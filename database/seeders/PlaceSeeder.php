<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert temporary data for display check
        
        DB::table('places')->insert([
            [
                'name_en' => 'Asakusa Temple',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
            [
                'name_en' => 'Tokyo eel restaurant',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
            [
                'name_en' => 'Tokyo Railway Museum',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
            [
                'name_en' => 'Meiji jingu',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
            [
                'name_en' => 'Tokyo Sushi restaurant',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
            [
                'name_en' => 'Tokyo Ryokan',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
            [
                'name_en' => 'Kabuki theatre',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
            
            [
                'name_en' => 'Soba restaurant',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
            [
                'name_en' => 'TOkyo Conferrence Centre',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
        
            [
                'name_en' => 'Tokyo station',
                'area_id' => '3',
                'prefecture_id' => '13',
                'city_id' => '631'
            ],
            [
                'name_en' => 'Ohara',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'kyoto sushi',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Gion',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Maiko cafe',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Obanzai restaurant',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Shukubo',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Fushimi',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Matcha cafe',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Rurikouin temple',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Higashiyama',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Kyoto onsen ryokan',
                'area_id' => '5',
                'prefecture_id' => '26',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Osaka castle',
                'area_id' => '5',
                'prefecture_id' => '27',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Osaka Okonomiyaki restaurant',
                'area_id' => '5',
                'prefecture_id' => '27',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Sennichimae Shopping street',
                'area_id' => '5',
                'prefecture_id' => '27',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Dotonbori',
                'area_id' => '5',
                'prefecture_id' => '27',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Kanidoraku',
                'area_id' => '5',
                'prefecture_id' => '27',
                'city_id' => '1000'
            ],
            [
                'name_en' => 'Osaka Ryokan',
                'area_id' => '5',
                'prefecture_id' => '27',
                'city_id' => '1000'
            ]

        ]);
        
        

        
    }
}
