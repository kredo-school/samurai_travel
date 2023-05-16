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
                'id' => 1365,
                'code' => '341002',
                'prefecture_id' => 34,
                'name_en' => 'Hiroshima-shi',
                'name_jp' => '広島市',
            ],
            [
                'id' => 1366,
                'code' => '342025',
                'prefecture_id' => 34,
                'name_en' => 'Kure-shi',
                'name_jp' => '呉市',
            ],
            [
                'id' => 1367,
                'code' => '342033',
                'prefecture_id' => 34,
                'name_en' => 'Takehara-shi',
                'name_jp' => '竹原市',
            ],
            [
                'id' => 1368,
                'code' => '342041',
                'prefecture_id' => 34,
                'name_en' => 'Mihara-shi',
                'name_jp' => '三原市',
            ],
            [
                'id' => 1369,
                'code' => '342050',
                'prefecture_id' => 34,
                'name_en' => 'Onomichi-shi',
                'name_jp' => '尾道市',
            ],
            [
                'id' => 1370,
                'code' => '342076',
                'prefecture_id' => 34,
                'name_en' => 'Fukuyama-shi',
                'name_jp' => '福山市',
            ],
            [
                'id' => 1371,
                'code' => '342084',
                'prefecture_id' => 34,
                'name_en' => 'Fuchu-cho',
                'name_jp' => '府中市',
            ],
            [
                'id' => 1372,
                'code' => '342092',
                'prefecture_id' => 34,
                'name_en' => 'Miyoshi-shi',
                'name_jp' => '三次市',
            ],
            [
                'id' => 1373,
                'code' => '342106',
                'prefecture_id' => 34,
                'name_en' => 'Shobara-shi',
                'name_jp' => '庄原市',
            ],
            [
                'id' => 1374,
                'code' => '342114',
                'prefecture_id' => 34,
                'name_en' => 'Otake-shi',
                'name_jp' => '大竹市',
            ],
            [
                'id' => 1375,
                'code' => '342122',
                'prefecture_id' => 34,
                'name_en' => 'Higashihiroshima-shi',
                'name_jp' => '東広島市',
            ],
            [
                'id' => 1376,
                'code' => '342131',
                'prefecture_id' => 34,
                'name_en' => 'Hatsukaichi-shi',
                'name_jp' => '廿日市市',
            ],
            [
                'id' => 1377,
                'code' => '342149',
                'prefecture_id' => 34,
                'name_en' => 'Akita-kata-shi',
                'name_jp' => '安芸高田市',
            ],
            [
                'id' => 1378,
                'code' => '342157',
                'prefecture_id' => 34,
                'name_en' => 'Etajima-shi',
                'name_jp' => '江田島市',
            ],
            [
                'id' => 1379,
                'code' => '343021',
                'prefecture_id' => 34,
                'name_en' => 'Fuchu-cho',
                'name_jp' => '府中町',
            ],
            [
                'id' => 1380,
                'code' => '343048',
                'prefecture_id' => 34,
                'name_en' => 'Kaita-cho',
                'name_jp' => '海田町',
            ],
            [
                'id' => 1381,
                'code' => '343072',
                'prefecture_id' => 34,
                'name_en' => 'Kumano-cho',
                'name_jp' => '熊野町',
            ],
            [
                'id' => 1382,
                'code' => '343099',
                'prefecture_id' => 34,
                'name_en' => 'Saka-cho',
                'name_jp' => '坂町',
            ],
            [
                'id' => 1383,
                'code' => '343684',
                'prefecture_id' => 34,
                'name_en' => 'Aki-ota-cho',
                'name_jp' => '安芸太田町',
            ],
            [
                'id' => 1384,
                'code' => '343692',
                'prefecture_id' => 34,
                'name_en' => 'Kitahiroshima-cho',
                'name_jp' => '北広島町',
            ],
            [
                'id' => 1385,
                'code' => '344311',
                'prefecture_id' => 34,
                'name_en' => 'Osakikamijima-cho',
                'name_jp' => '大崎上島町',
            ],
            [
                'id' => 1386,
                'code' => '344621',
                'prefecture_id' => 34,
                'name_en' => 'Seracho',
                'name_jp' => '世羅町',
            ],
            [
                'id' => 1387,
                'code' => '345458',
                'prefecture_id' => 34,
                'name_en' => 'Jinsekikogen-cho',
                'name_jp' => '神石高原町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
