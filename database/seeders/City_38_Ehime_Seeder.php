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
                'code' => '382019',
                'prefecture_id' => 38,
                'name_en' => 'Matsuyama-shi',
                'name_jp' => '松山市',
            ],
            [
                'code' => '382027',
                'prefecture_id' => 38,
                'name_en' => 'Imabari-shi',
                'name_jp' => '今治市',
            ],
            [
                'code' => '382035',
                'prefecture_id' => 38,
                'name_en' => 'Uwajima-shi',
                'name_jp' => '宇和島市',
            ],
            [
                'code' => '382043',
                'prefecture_id' => 38,
                'name_en' => 'Yawatahama-shi',
                'name_jp' => '八幡浜市',
            ],
            [
                'code' => '382051',
                'prefecture_id' => 38,
                'name_en' => 'Niihama-shi',
                'name_jp' => '新居浜市',
            ],
            [
                'code' => '382060',
                'prefecture_id' => 38,
                'name_en' => 'Saijō-shi',
                'name_jp' => '西条市',
            ],
            [
                'code' => '382078',
                'prefecture_id' => 38,
                'name_en' => 'Ōzu-shi',
                'name_jp' => '大洲市',
            ],
            [
                'code' => '382108',
                'prefecture_id' => 38,
                'name_en' => 'Iyoshi-chō',
                'name_jp' => '伊予市',
            ],
            [
                'code' => '382132',
                'prefecture_id' => 38,
                'name_en' => 'Shikoku-chūō-ōsaka-shi',
                'name_jp' => '四国中央市',
            ],
            [
                'code' => '382141',
                'prefecture_id' => 38,
                'name_en' => 'Seiyō-shi',
                'name_jp' => '西予市',
            ],
            [
                'code' => '382159',
                'prefecture_id' => 38,
                'name_en' => 'Tōon-shi',
                'name_jp' => '東温市',
            ],
            [
                'code' => '383562',
                'prefecture_id' => 38,
                'name_en' => 'Kamijima-chō',
                'name_jp' => '上島町',
            ],
            [
                'code' => '383864',
                'prefecture_id' => 38,
                'name_en' => 'Kumakōgen-chō',
                'name_jp' => '久万高原町',
            ],
            [
                'code' => '384011',
                'prefecture_id' => 38,
                'name_en' => 'Masaki-chō',
                'name_jp' => '松前町',
            ],
            [
                'code' => '384020',
                'prefecture_id' => 38,
                'name_en' => 'Tobe-chō',
                'name_jp' => '砥部町',
            ],
            [
                'code' => '384224',
                'prefecture_id' => 38,
                'name_en' => 'Uchiko-chō',
                'name_jp' => '内子町',
            ],
            [
                'code' => '384429',
                'prefecture_id' => 38,
                'name_en' => 'Ikata-chō',
                'name_jp' => '伊方町',
            ],
            [
                'code' => '384844',
                'prefecture_id' => 38,
                'name_en' => 'Matsuno-chō',
                'name_jp' => '松野町',
            ],
            [
                'code' => '384887',
                'prefecture_id' => 38,
                'name_en' => 'Kihoku-chō',
                'name_jp' => '鬼北町',
            ],
            [
                'code' => '385069',
                'prefecture_id' => 38,
                'name_en' => 'Ainan-chō',
                'name_jp' => '愛南町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
