<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_25_Shiga_Seeder extends Seeder
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
                'id' => 1093,
                'code' => '252018',
                'prefecture_id' => 25,
                'name_en' => 'Ootsu-shi',
                'name_jp' => '大津市',
            ],
            [
                'id' => 1094,
                'code' => '252026',
                'prefecture_id' => 25,
                'name_en' => 'Hikone-shi',
                'name_jp' => '彦根市',
            ],
            [
                'id' => 1095,
                'code' => '252034',
                'prefecture_id' => 25,
                'name_en' => 'Nagahama-shi',
                'name_jp' => '長浜市',
            ],
            [
                'id' => 1096,
                'code' => '252042',
                'prefecture_id' => 25,
                'name_en' => 'Oumi-hachiman-shi',
                'name_jp' => '近江八幡市',
            ],
            [
                'id' => 1097,
                'code' => '252069',
                'prefecture_id' => 25,
                'name_en' => 'Kusatsu-shi',
                'name_jp' => '草津市',
            ],
            [
                'id' => 1098,
                'code' => '252077',
                'prefecture_id' => 25,
                'name_en' => 'Moriyama-shi',
                'name_jp' => '守山市',
            ],
            [
                'id' => 1099,
                'code' => '252085',
                'prefecture_id' => 25,
                'name_en' => 'Ritto-shi',
                'name_jp' => '栗東市',
            ],
            [
                'id' => 1100,
                'code' => '252093',
                'prefecture_id' => 25,
                'name_en' => 'Koka-shi',
                'name_jp' => '甲賀市',
            ],
            [
                'id' => 1101,
                'code' => '252107',
                'prefecture_id' => 25,
                'name_en' => 'Yasu-shi',
                'name_jp' => '野洲市',
            ],
            [
                'id' => 1102,
                'code' => '252115',
                'prefecture_id' => 25,
                'name_en' => 'Konan-shi',
                'name_jp' => '湖南市',
            ],
            [
                'id' => 1103,
                'code' => '252123',
                'prefecture_id' => 25,
                'name_en' => 'Takashima-shi',
                'name_jp' => '高島市',
            ],
            [
                'id' => 1104,
                'code' => '252131',
                'prefecture_id' => 25,
                'name_en' => 'Higashiomi-shi',
                'name_jp' => '東近江市',
            ],
            [
                'id' => 1105,
                'code' => '252140',
                'prefecture_id' => 25,
                'name_en' => 'Maibara-shi',
                'name_jp' => '米原市',
            ],
            [
                'id' => 1106,
                'code' => '253839',
                'prefecture_id' => 25,
                'name_en' => 'Hino-cho',
                'name_jp' => '日野町',
            ],
            [
                'id' => 1107,
                'code' => '253847',
                'prefecture_id' => 25,
                'name_en' => 'Ryuo-cho',
                'name_jp' => '竜王町',
            ],
            [
                'id' => 1108,
                'code' => '254258',
                'prefecture_id' => 25,
                'name_en' => 'Aisho-cho',
                'name_jp' => '愛荘町',
            ],
            [
                'id' => 1109,
                'code' => '254410',
                'prefecture_id' => 25,
                'name_en' => 'Toyosato-cho',
                'name_jp' => '豊郷町',
            ],
            [
                'id' => 1110,
                'code' => '254428',
                'prefecture_id' => 25,
                'name_en' => 'Koura-cho',
                'name_jp' => '甲良町',
            ],
            [
                'id' => 1111,
                'code' => '254436',
                'prefecture_id' => 25,
                'name_en' => 'Taga-cho',
                'name_jp' => '多賀町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
