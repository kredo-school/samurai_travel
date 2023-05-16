<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_30_Wakayama_Seeder extends Seeder
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
                'code' => '302015',
                'prefecture_id' => 30,
                'name_en' => 'Wakayamashi',
                'name_jp' => '和歌山市',
            ],
            [
                'code' => '302023',
                'prefecture_id' => 30,
                'name_en' => 'Kainan-shi',
                'name_jp' => '海南市',
            ],
            [
                'code' => '302031',
                'prefecture_id' => 30,
                'name_en' => 'Hashimoto-shi',
                'name_jp' => '橋本市',
            ],
            [
                'code' => '302040',
                'prefecture_id' => 30,
                'name_en' => 'Arida-shi',
                'name_jp' => '有田市',
            ],
            [
                'code' => '302058',
                'prefecture_id' => 30,
                'name_en' => 'Gobō-shi',
                'name_jp' => '御坊市',
            ],
            [
                'code' => '302066',
                'prefecture_id' => 30,
                'name_en' => 'Tanabe-shi',
                'name_jp' => '田辺市',
            ],
            [
                'code' => '302074',
                'prefecture_id' => 30,
                'name_en' => 'Shingū-shi',
                'name_jp' => '新宮市',
            ],
            [
                'code' => '302082',
                'prefecture_id' => 30,
                'name_en' => 'Kinokawa-shi',
                'name_jp' => '紀の川市',
            ],
            [
                'code' => '302091',
                'prefecture_id' => 30,
                'name_en' => 'Iwade-shi',
                'name_jp' => '岩出市',
            ],
            [
                'code' => '303046',
                'prefecture_id' => 30,
                'name_en' => 'Kimino-chō',
                'name_jp' => '紀美野町',
            ],
            [
                'code' => '303411',
                'prefecture_id' => 30,
                'name_en' => 'Katsuragi-chō',
                'name_jp' => 'かつらぎ町',
            ],
            [
                'code' => '303437',
                'prefecture_id' => 30,
                'name_en' => 'Kudoyama-chō',
                'name_jp' => '九度山町',
            ],
            [
                'code' => '303445',
                'prefecture_id' => 30,
                'name_en' => 'Kōya-chō',
                'name_jp' => '高野町',
            ],
            [
                'code' => '303615',
                'prefecture_id' => 30,
                'name_en' => 'Yuasa-chō',
                'name_jp' => '湯浅町',
            ],
            [
                'code' => '303623',
                'prefecture_id' => 30,
                'name_en' => 'Hirogawa-chō',
                'name_jp' => '広川町',
            ],
            [
                'code' => '303666',
                'prefecture_id' => 30,
                'name_en' => 'Aridagawa-chō',
                'name_jp' => '有田川町',
            ],
            [
                'code' => '303810',
                'prefecture_id' => 30,
                'name_en' => 'Mihama-chō',
                'name_jp' => '美浜町',
            ],
            [
                'code' => '303828',
                'prefecture_id' => 30,
                'name_en' => 'Hidakagawa-chō',
                'name_jp' => '日高町',
            ],
            [
                'code' => '303836',
                'prefecture_id' => 30,
                'name_en' => 'Yura-chō',
                'name_jp' => '由良町',
            ],
            [
                'code' => '303909',
                'prefecture_id' => 30,
                'name_en' => 'Inami-chō',
                'name_jp' => '印南町',
            ],
            [
                'code' => '303917',
                'prefecture_id' => 30,
                'name_en' => 'Minabe-chō',
                'name_jp' => 'みなべ町',
            ],
            [
                'code' => '303925',
                'prefecture_id' => 30,
                'name_en' => 'Hidakagawa-gawa-chō',
                'name_jp' => '日高川町',
            ],
            [
                'code' => '304018',
                'prefecture_id' => 30,
                'name_en' => 'Shirahama-chō',
                'name_jp' => '白浜町',
            ],
            [
                'code' => '304042',
                'prefecture_id' => 30,
                'name_en' => 'Kamitonoda-chō',
                'name_jp' => '上富田町',
            ],
            [
                'code' => '304069',
                'prefecture_id' => 30,
                'name_en' => 'Susami-chō',
                'name_jp' => 'すさみ町',
            ],
            [
                'code' => '304212',
                'prefecture_id' => 30,
                'name_en' => 'Nachikatsuura-chō',
                'name_jp' => '那智勝浦町',
            ],
            [
                'code' => '304221',
                'prefecture_id' => 30,
                'name_en' => 'Taiji-chō',
                'name_jp' => '太地町',
            ],
            [
                'code' => '304247',
                'prefecture_id' => 30,
                'name_en' => 'Kozagawa-chō',
                'name_jp' => '古座川町',
            ],
            [
                'code' => '304271',
                'prefecture_id' => 30,
                'name_en' => 'Kitayamamura',
                'name_jp' => '北山村',
            ],
            [
                'code' => '304280',
                'prefecture_id' => 30,
                'name_en' => 'Kushimoto-chō',
                'name_jp' => '串本町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
