<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_18_Fukui_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'cities';

        $data = [
            [
                'code' => '182010',
                'prefecture_id' => 18,
                'name_en' => 'Fukuishi',
                'name_jp' => '福井市',
            ],
            [
                'code' => '182028',
                'prefecture_id' => 18,
                'name_en' => 'Tsurugashi',
                'name_jp' => '敦賀市',
            ],
            [
                'code' => '182044',
                'prefecture_id' => 18,
                'name_en' => 'Obamashi',
                'name_jp' => '小浜市',
            ],
            [
                'code' => '182052',
                'prefecture_id' => 18,
                'name_en' => 'Oonoshi',
                'name_jp' => '大野市',
            ],
            [
                'code' => '182061',
                'prefecture_id' => 18,
                'name_en' => 'Katsuyamashi',
                'name_jp' => '勝山市',
            ],
            [
                'code' => '182079',
                'prefecture_id' => 18,
                'name_en' => 'Sabaeshi',
                'name_jp' => '鯖江市',
            ],
            [
                'code' => '182087',
                'prefecture_id' => 18,
                'name_en' => 'Awarashi',
                'name_jp' => 'あわら市',
            ],
            [
                'code' => '182095',
                'prefecture_id' => 18,
                'name_en' => 'Etizenshi',
                'name_jp' => '越前市',
            ],
            [
                'code' => '182109',
                'prefecture_id' => 18,
                'name_en' => 'Sakai-shi',
                'name_jp' => '坂井市',
            ],
            [
                'code' => '183229',
                'prefecture_id' => 18,
                'name_en' => 'Eiheiji-cho',
                'name_jp' => '永平寺町',
            ],
            [
                'code' => '183822',
                'prefecture_id' => 18,
                'name_en' => 'Ikeda-cho',
                'name_jp' => '池田町',
            ],
            [
                'code' => '184047',
                'prefecture_id' => 18,
                'name_en' => 'Minami Etizen-cho',
                'name_jp' => '南越前町',
            ],
            [
                'code' => '184233',
                'prefecture_id' => 18,
                'name_en' => 'Etizen-cho',
                'name_jp' => '越前町',
            ],
            [
                'code' => '184420',
                'prefecture_id' => 18,
                'name_en' => 'Mihamacho',
                'name_jp' => '美浜町',
            ],
            [
                'code' => '184811',
                'prefecture_id' => 18,
                'name_en' => 'Takahamacho',
                'name_jp' => '高浜町',
            ],
            [
                'code' => '184837',
                'prefecture_id' => 18,
                'name_en' => 'Ooicho',
                'name_jp' => 'おおい町',
            ],
            [
                'code' => '185019',
                'prefecture_id' => 18,
                'name_en' => 'Wakasacho',
                'name_jp' => '若狭町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
