<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_32_Shimane_Seeder extends Seeder
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
                'code' => '322016',
                'prefecture_id' => 32,
                'name_en' => 'Matsue-shi',
                'name_jp' => '松江市',
            ],
            [
                'code' => '322024',
                'prefecture_id' => 32,
                'name_en' => 'Hamada-shi',
                'name_jp' => '浜田市',
            ],
            [
                'code' => '322032',
                'prefecture_id' => 32,
                'name_en' => 'Izumo-shi',
                'name_jp' => '出雲市',
            ],
            [
                'code' => '322041',
                'prefecture_id' => 32,
                'name_en' => 'Masuda-shi',
                'name_jp' => '益田市',
            ],
            [
                'code' => '322059',
                'prefecture_id' => 32,
                'name_en' => 'Oda-shi',
                'name_jp' => '大田市',
            ],
            [
                'code' => '322067',
                'prefecture_id' => 32,
                'name_en' => 'Yasugi-shi',
                'name_jp' => '安来市',
            ],
            [
                'code' => '322075',
                'prefecture_id' => 32,
                'name_en' => 'Gotsu-shi',
                'name_jp' => '江津市',
            ],
            [
                'code' => '322091',
                'prefecture_id' => 32,
                'name_en' => 'Unnan-shi',
                'name_jp' => '雲南市',
            ],
            [
                'code' => '323438',
                'prefecture_id' => 32,
                'name_en' => 'Okuizumo-cho',
                'name_jp' => '奥出雲町',
            ],
            [
                'code' => '323861',
                'prefecture_id' => 32,
                'name_en' => 'Iinan-cho',
                'name_jp' => '飯南町',
            ],
            [
                'code' => '324418',
                'prefecture_id' => 32,
                'name_en' => 'Kawamoto-machi',
                'name_jp' => '川本町',
            ],
            [
                'code' => '324485',
                'prefecture_id' => 32,
                'name_en' => 'Misato-cho',
                'name_jp' => '美郷町',
            ],
            [
                'code' => '324493',
                'prefecture_id' => 32,
                'name_en' => 'Oonan-cho',
                'name_jp' => '邑南町',
            ],
            [
                'code' => '325015',
                'prefecture_id' => 32,
                'name_en' => 'Tsuwano-cho',
                'name_jp' => '津和野町',
            ],
            [
                'code' => '325058',
                'prefecture_id' => 32,
                'name_en' => 'Yoshika-cho',
                'name_jp' => '吉賀町',
            ],
            [
                'code' => '325252',
                'prefecture_id' => 32,
                'name_en' => 'Amagi-cho',
                'name_jp' => '海士町',
            ],
            [
                'code' => '325261',
                'prefecture_id' => 32,
                'name_en' => 'Nishinoshima-cho',
                'name_jp' => '西ノ島町',
            ],
            [
                'code' => '325279',
                'prefecture_id' => 32,
                'name_en' => 'Chibu-mura',
                'name_jp' => '知夫村',
            ],
            [
                'code' => '325287',
                'prefecture_id' => 32,
                'name_en' => 'Okinoshima-cho',
                'name_jp' => '隠岐の島町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
