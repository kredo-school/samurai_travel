<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_26_Kyoto_Seeder extends Seeder
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
                'id' => 1113,
                'code' => '261009',
                'prefecture_id' => 26,
                'name_en' => 'Kyoto-shi',
                'name_jp' => '京都市',
            ],
            [
                'id' => 1114,
                'code' => '262013',
                'prefecture_id' => 26,
                'name_en' => 'Fukuchiyama-shi',
                'name_jp' => '福知山市',
            ],
            [
                'id' => 1115,
                'code' => '262021',
                'prefecture_id' => 26,
                'name_en' => 'Miyazaki-shi',
                'name_jp' => '舞鶴市',
            ],
            [
                'id' => 1116,
                'code' => '262030',
                'prefecture_id' => 26,
                'name_en' => 'Ayabe-shi',
                'name_jp' => '綾部市',
            ],
            [
                'id' => 1117,
                'code' => '262048',
                'prefecture_id' => 26,
                'name_en' => 'Uji-shi',
                'name_jp' => '宇治市',
            ],
            [
                'id' => 1118,
                'code' => '262056',
                'prefecture_id' => 26,
                'name_en' => 'Miyazu-shi',
                'name_jp' => '宮津市',
            ],
            [
                'id' => 1119,
                'code' => '262064',
                'prefecture_id' => 26,
                'name_en' => 'Kameoka-shi',
                'name_jp' => '亀岡市',
            ],
            [
                'id' => 1120,
                'code' => '262072',
                'prefecture_id' => 26,
                'name_en' => 'Joyo-shi',
                'name_jp' => '城陽市',
            ],
            [
                'id' => 1121,
                'code' => '262081',
                'prefecture_id' => 26,
                'name_en' => 'Muko-shi',
                'name_jp' => '向日市',
            ],
            [
                'id' => 1122,
                'code' => '262099',
                'prefecture_id' => 26,
                'name_en' => 'Nagaokakyo-shi',
                'name_jp' => '長岡京市',
            ],
            [
                'id' => 1123,
                'code' => '262102',
                'prefecture_id' => 26,
                'name_en' => 'Yawata-shi',
                'name_jp' => '八幡市',
            ],
            [
                'id' => 1124,
                'code' => '262111',
                'prefecture_id' => 26,
                'name_en' => 'Kyotanabe-shi',
                'name_jp' => '京田辺市',
            ],
            [
                'id' => 1125,
                'code' => '262129',
                'prefecture_id' => 26,
                'name_en' => 'Kyotango-shi',
                'name_jp' => '京丹後市',
            ],
            [
                'id' => 1126,
                'code' => '262137',
                'prefecture_id' => 26,
                'name_en' => 'Nantan-shi',
                'name_jp' => '南丹市',
            ],
            [
                'id' => 1127,
                'code' => '262145',
                'prefecture_id' => 26,
                'name_en' => 'Kizugawashi',
                'name_jp' => '木津川市',
            ],
            [
                'id' => 1128,
                'code' => '263036',
                'prefecture_id' => 26,
                'name_en' => 'Oyamazaki-cho',
                'name_jp' => '大山崎町',
            ],
            [
                'id' => 1129,
                'code' => '263222',
                'prefecture_id' => 26,
                'name_en' => 'Kumiyama-cho',
                'name_jp' => '久御山町',
            ],
            [
                'id' => 1130,
                'code' => '263435',
                'prefecture_id' => 26,
                'name_en' => 'Ide-cho',
                'name_jp' => '井手町',
            ],
            [
                'id' => 1131,
                'code' => '263443',
                'prefecture_id' => 26,
                'name_en' => 'Ujitawara-cho',
                'name_jp' => '宇治田原町',
            ],
            [
                'id' => 1132,
                'code' => '263648',
                'prefecture_id' => 26,
                'name_en' => 'Kasagi-cho',
                'name_jp' => '笠置町',
            ],
            [
                'id' => 1133,
                'code' => '263656',
                'prefecture_id' => 26,
                'name_en' => 'Wazuka-cho',
                'name_jp' => '和束町',
            ],
            [
                'id' => 1134,
                'code' => '263664',
                'prefecture_id' => 26,
                'name_en' => 'Seika-cho',
                'name_jp' => '精華町',
            ],
            [
                'id' => 1135,
                'code' => '263672',
                'prefecture_id' => 26,
                'name_en' => 'Minamiyamashiro-mura',
                'name_jp' => '南山城村',
            ],
            [
                'id' => 1136,
                'code' => '264075',
                'prefecture_id' => 26,
                'name_en' => 'Kyotamba-cho',
                'name_jp' => '京丹波町',
            ],
            [
                'id' => 1137,
                'code' => '264636',
                'prefecture_id' => 26,
                'name_en' => 'Ine-cho',
                'name_jp' => '伊根町',
            ],
            [
                'id' => 1138,
                'code' => '264652',
                'prefecture_id' => 26,
                'name_en' => 'Yosano-cho',
                'name_jp' => '与謝野町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
