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
                'id' => 1266,
                'code' => '302015',
                'prefecture_id' => 30,
                'name_en' => 'Wakayamashi',
                'name_jp' => '和歌山市',
            ],
            [
                'id' => 1267,
                'code' => '302023',
                'prefecture_id' => 30,
                'name_en' => 'Kainan-shi',
                'name_jp' => '海南市',
            ],
            [
                'id' => 1268,
                'code' => '302031',
                'prefecture_id' => 30,
                'name_en' => 'Hashimoto-shi',
                'name_jp' => '橋本市',
            ],
            [
                'id' => 1269,
                'code' => '302040',
                'prefecture_id' => 30,
                'name_en' => 'Arida-shi',
                'name_jp' => '有田市',
            ],
            [
                'id' => 1270,
                'code' => '302058',
                'prefecture_id' => 30,
                'name_en' => 'Gobō-shi',
                'name_jp' => '御坊市',
            ],
            [
                'id' => 1271,
                'code' => '302066',
                'prefecture_id' => 30,
                'name_en' => 'Tanabe-shi',
                'name_jp' => '田辺市',
            ],
            [
                'id' => 1272,
                'code' => '302074',
                'prefecture_id' => 30,
                'name_en' => 'Shingū-shi',
                'name_jp' => '新宮市',
            ],
            [
                'id' => 1273,
                'code' => '302082',
                'prefecture_id' => 30,
                'name_en' => 'Kinokawa-shi',
                'name_jp' => '紀の川市',
            ],
            [
                'id' => 1274,
                'code' => '302091',
                'prefecture_id' => 30,
                'name_en' => 'Iwade-shi',
                'name_jp' => '岩出市',
            ],
            [
                'id' => 1275,
                'code' => '303046',
                'prefecture_id' => 30,
                'name_en' => 'Kimino-chō',
                'name_jp' => '紀美野町',
            ],
            [
                'id' => 1276,
                'code' => '303411',
                'prefecture_id' => 30,
                'name_en' => 'Katsuragi-chō',
                'name_jp' => 'かつらぎ町',
            ],
            [
                'id' => 1277,
                'code' => '303437',
                'prefecture_id' => 30,
                'name_en' => 'Kudoyama-chō',
                'name_jp' => '九度山町',
            ],
            [
                'id' => 1278,
                'code' => '303445',
                'prefecture_id' => 30,
                'name_en' => 'Kōya-chō',
                'name_jp' => '高野町',
            ],
            [
                'id' => 1279,
                'code' => '303615',
                'prefecture_id' => 30,
                'name_en' => 'Yuasa-chō',
                'name_jp' => '湯浅町',
            ],
            [
                'id' => 1280,
                'code' => '303623',
                'prefecture_id' => 30,
                'name_en' => 'Hirogawa-chō',
                'name_jp' => '広川町',
            ],
            [
                'id' => 1281,
                'code' => '303666',
                'prefecture_id' => 30,
                'name_en' => 'Aridagawa-chō',
                'name_jp' => '有田川町',
            ],
            [
                'id' => 1282,
                'code' => '303810',
                'prefecture_id' => 30,
                'name_en' => 'Mihama-chō',
                'name_jp' => '美浜町',
            ],
            [
                'id' => 1283,
                'code' => '303828',
                'prefecture_id' => 30,
                'name_en' => 'Hidakagawa-chō',
                'name_jp' => '日高町',
            ],
            [
                'id' => 1284,
                'code' => '303836',
                'prefecture_id' => 30,
                'name_en' => 'Yura-chō',
                'name_jp' => '由良町',
            ],
            [
                'id' => 1285,
                'code' => '303909',
                'prefecture_id' => 30,
                'name_en' => 'Inami-chō',
                'name_jp' => '印南町',
            ],
            [
                'id' => 1286,
                'code' => '303917',
                'prefecture_id' => 30,
                'name_en' => 'Minabe-chō',
                'name_jp' => 'みなべ町',
            ],
            [
                'id' => 1287,
                'code' => '303925',
                'prefecture_id' => 30,
                'name_en' => 'Hidakagawa-gawa-chō',
                'name_jp' => '日高川町',
            ],
            [
                'id' => 1288,
                'code' => '304018',
                'prefecture_id' => 30,
                'name_en' => 'Shirahama-chō',
                'name_jp' => '白浜町',
            ],
            [
                'id' => 1289,
                'code' => '304042',
                'prefecture_id' => 30,
                'name_en' => 'Kamitonoda-chō',
                'name_jp' => '上富田町',
            ],
            [
                'id' => 1290,
                'code' => '304069',
                'prefecture_id' => 30,
                'name_en' => 'Susami-chō',
                'name_jp' => 'すさみ町',
            ],
            [
                'id' => 1291,
                'code' => '304212',
                'prefecture_id' => 30,
                'name_en' => 'Nachikatsuura-chō',
                'name_jp' => '那智勝浦町',
            ],
            [
                'id' => 1292,
                'code' => '304221',
                'prefecture_id' => 30,
                'name_en' => 'Taiji-chō',
                'name_jp' => '太地町',
            ],
            [
                'id' => 1293,
                'code' => '304247',
                'prefecture_id' => 30,
                'name_en' => 'Kozagawa-chō',
                'name_jp' => '古座川町',
            ],
            [
                'id' => 1294,
                'code' => '304271',
                'prefecture_id' => 30,
                'name_en' => 'Kitayamamura',
                'name_jp' => '北山村',
            ],
            [
                'id' => 1295,
                'code' => '304280',
                'prefecture_id' => 30,
                'name_en' => 'Kushimoto-chō',
                'name_jp' => '串本町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
