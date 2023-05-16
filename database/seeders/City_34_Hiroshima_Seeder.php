<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_34_Hiroshima_Seeder extends Seeder
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
                'code' => '341002',
                'prefecture_id' => 34,
                'name_en' => 'Hiroshima-shi',
                'name_jp' => '広島市',
            ],
            [
                'code' => '342025',
                'prefecture_id' => 34,
                'name_en' => 'Kure-shi',
                'name_jp' => '呉市',
            ],
            [
                'code' => '342033',
                'prefecture_id' => 34,
                'name_en' => 'Takehara-shi',
                'name_jp' => '竹原市',
            ],
            [
                'code' => '342041',
                'prefecture_id' => 34,
                'name_en' => 'Mihara-shi',
                'name_jp' => '三原市',
            ],
            [
                'code' => '342050',
                'prefecture_id' => 34,
                'name_en' => 'Onomichi-shi',
                'name_jp' => '尾道市',
            ],
            [
                'code' => '342076',
                'prefecture_id' => 34,
                'name_en' => 'Fukuyama-shi',
                'name_jp' => '福山市',
            ],
            [
                'code' => '342084',
                'prefecture_id' => 34,
                'name_en' => 'Fuchu-cho',
                'name_jp' => '府中市',
            ],
            [
                'code' => '342092',
                'prefecture_id' => 34,
                'name_en' => 'Miyoshi-shi',
                'name_jp' => '三次市',
            ],
            [
                'code' => '342106',
                'prefecture_id' => 34,
                'name_en' => 'Shobara-shi',
                'name_jp' => '庄原市',
            ],
            [
                'code' => '342114',
                'prefecture_id' => 34,
                'name_en' => 'Otake-shi',
                'name_jp' => '大竹市',
            ],
            [
                'code' => '342122',
                'prefecture_id' => 34,
                'name_en' => 'Higashihiroshima-shi',
                'name_jp' => '東広島市',
            ],
            [
                'code' => '342131',
                'prefecture_id' => 34,
                'name_en' => 'Hatsukaichi-shi',
                'name_jp' => '廿日市市',
            ],
            [
                'code' => '342149',
                'prefecture_id' => 34,
                'name_en' => 'Akita-kata-shi',
                'name_jp' => '安芸高田市',
            ],
            [
                'code' => '342157',
                'prefecture_id' => 34,
                'name_en' => 'Etajima-shi',
                'name_jp' => '江田島市',
            ],
            [
                'code' => '343021',
                'prefecture_id' => 34,
                'name_en' => 'Fuchu-cho',
                'name_jp' => '府中町',
            ],
            [
                'code' => '343048',
                'prefecture_id' => 34,
                'name_en' => 'Kaita-cho',
                'name_jp' => '海田町',
            ],
            [
                'code' => '343072',
                'prefecture_id' => 34,
                'name_en' => 'Kumano-cho',
                'name_jp' => '熊野町',
            ],
            [
                'code' => '343099',
                'prefecture_id' => 34,
                'name_en' => 'Saka-cho',
                'name_jp' => '坂町',
            ],
            [
                'code' => '343684',
                'prefecture_id' => 34,
                'name_en' => 'Aki-ota-cho',
                'name_jp' => '安芸太田町',
            ],
            [
                'code' => '343692',
                'prefecture_id' => 34,
                'name_en' => 'Kitahiroshima-cho',
                'name_jp' => '北広島町',
            ],
            [
                'code' => '344311',
                'prefecture_id' => 34,
                'name_en' => 'Osakikamijima-cho',
                'name_jp' => '大崎上島町',
            ],
            [
                'code' => '344621',
                'prefecture_id' => 34,
                'name_en' => 'Seracho',
                'name_jp' => '世羅町',
            ],
            [
                'code' => '345458',
                'prefecture_id' => 34,
                'name_en' => 'Jinsekikogen-cho',
                'name_jp' => '神石高原町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
