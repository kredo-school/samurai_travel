<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_38_Ehime_Seeder extends Seeder
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
                'id' => 1452,
                'code' => '382019',
                'prefecture_id' => 38,
                'name_en' => 'Matsuyama-shi',
                'name_jp' => '松山市',
            ],
            [
                'id' => 1453,
                'code' => '382027',
                'prefecture_id' => 38,
                'name_en' => 'Imabari-shi',
                'name_jp' => '今治市',
            ],
            [
                'id' => 1454,
                'code' => '382035',
                'prefecture_id' => 38,
                'name_en' => 'Uwajima-shi',
                'name_jp' => '宇和島市',
            ],
            [
                'id' => 1455,
                'code' => '382043',
                'prefecture_id' => 38,
                'name_en' => 'Yawatahama-shi',
                'name_jp' => '八幡浜市',
            ],
            [
                'id' => 1456,
                'code' => '382051',
                'prefecture_id' => 38,
                'name_en' => 'Niihama-shi',
                'name_jp' => '新居浜市',
            ],
            [
                'id' => 1457,
                'code' => '382060',
                'prefecture_id' => 38,
                'name_en' => 'Saijō-shi',
                'name_jp' => '西条市',
            ],
            [
                'id' => 1458,
                'code' => '382078',
                'prefecture_id' => 38,
                'name_en' => 'Ōzu-shi',
                'name_jp' => '大洲市',
            ],
            [
                'id' => 1459,
                'code' => '382108',
                'prefecture_id' => 38,
                'name_en' => 'Iyoshi-chō',
                'name_jp' => '伊予市',
            ],
            [
                'id' => 1460,
                'code' => '382132',
                'prefecture_id' => 38,
                'name_en' => 'Shikoku-chūō-ōsaka-shi',
                'name_jp' => '四国中央市',
            ],
            [
                'id' => 1461,
                'code' => '382141',
                'prefecture_id' => 38,
                'name_en' => 'Seiyō-shi',
                'name_jp' => '西予市',
            ],
            [
                'id' => 1462,
                'code' => '382159',
                'prefecture_id' => 38,
                'name_en' => 'Tōon-shi',
                'name_jp' => '東温市',
            ],
            [
                'id' => 1463,
                'code' => '383562',
                'prefecture_id' => 38,
                'name_en' => 'Kamijima-chō',
                'name_jp' => '上島町',
            ],
            [
                'id' => 1464,
                'code' => '383864',
                'prefecture_id' => 38,
                'name_en' => 'Kumakōgen-chō',
                'name_jp' => '久万高原町',
            ],
            [
                'id' => 1465,
                'code' => '384011',
                'prefecture_id' => 38,
                'name_en' => 'Masaki-chō',
                'name_jp' => '松前町',
            ],
            [
                'id' => 1466,
                'code' => '384020',
                'prefecture_id' => 38,
                'name_en' => 'Tobe-chō',
                'name_jp' => '砥部町',
            ],
            [
                'id' => 1467,
                'code' => '384224',
                'prefecture_id' => 38,
                'name_en' => 'Uchiko-chō',
                'name_jp' => '内子町',
            ],
            [
                'id' => 1468,
                'code' => '384429',
                'prefecture_id' => 38,
                'name_en' => 'Ikata-chō',
                'name_jp' => '伊方町',
            ],
            [
                'id' => 1469,
                'code' => '384844',
                'prefecture_id' => 38,
                'name_en' => 'Matsuno-chō',
                'name_jp' => '松野町',
            ],
            [
                'id' => 1470,
                'code' => '384887',
                'prefecture_id' => 38,
                'name_en' => 'Kihoku-chō',
                'name_jp' => '鬼北町',
            ],
            [
                'id' => 1471,
                'code' => '385069',
                'prefecture_id' => 38,
                'name_en' => 'Ainan-chō',
                'name_jp' => '愛南町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
