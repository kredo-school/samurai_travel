<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_10_Gunma_Seeder extends Seeder
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
                'id' => 486,
                'code' => '102016',
                'prefecture_id' => 10,
                'name_en' => 'Maebashi-shi',
                'name_jp' => '前橋市',
            ],
            [
                'id' => 487,
                'code' => '102024',
                'prefecture_id' => 10,
                'name_en' => 'Takasaki-shi',
                'name_jp' => '高崎市',
            ],
            [
                'id' => 488,
                'code' => '102032',
                'prefecture_id' => 10,
                'name_en' => 'Kiryu-shi',
                'name_jp' => '桐生市',
            ],
            [
                'id' => 489,
                'code' => '102041',
                'prefecture_id' => 10,
                'name_en' => 'Isesaki-shi',
                'name_jp' => '伊勢崎市',
            ],
            [
                'id' => 490,
                'code' => '102059',
                'prefecture_id' => 10,
                'name_en' => 'Ota-shi',
                'name_jp' => '太田市',
            ],
            [
                'id' => 491,
                'code' => '102067',
                'prefecture_id' => 10,
                'name_en' => 'Numata-shi',
                'name_jp' => '沼田市',
            ],
            [
                'id' => 492,
                'code' => '102075',
                'prefecture_id' => 10,
                'name_en' => 'Tatebayashi-shi',
                'name_jp' => '館林市',
            ],
            [
                'id' => 493,
                'code' => '102083',
                'prefecture_id' => 10,
                'name_en' => 'Shibukawa-shi',
                'name_jp' => '渋川市',
            ],
            [
                'id' => 494,
                'code' => '102091',
                'prefecture_id' => 10,
                'name_en' => 'Fujioka-shi',
                'name_jp' => '藤岡市',
            ],
            [
                'id' => 495,
                'code' => '102105',
                'prefecture_id' => 10,
                'name_en' => 'Tomioka-shi',
                'name_jp' => '富岡市',
            ],
            [
                'id' => 496,
                'code' => '102113',
                'prefecture_id' => 10,
                'name_en' => 'Annaka-shi',
                'name_jp' => '安中市',
            ],
            [
                'id' => 497,
                'code' => '102121',
                'prefecture_id' => 10,
                'name_en' => 'Midori-shi',
                'name_jp' => 'みどり市',
            ],
            [
                'id' => 498,
                'code' => '103446',
                'prefecture_id' => 10,
                'name_en' => 'Shinto-mura',
                'name_jp' => '榛東村',
            ],
            [
                'id' => 499,
                'code' => '103454',
                'prefecture_id' => 10,
                'name_en' => 'Yoshii-machi',
                'name_jp' => '吉岡町',
            ],
            [
                'id' => 500,
                'code' => '103667',
                'prefecture_id' => 10,
                'name_en' => 'Ueno-mura',
                'name_jp' => '上野村',
            ],
            [
                'id' => 501,
                'code' => '103675',
                'prefecture_id' => 10,
                'name_en' => 'Kanna-machi',
                'name_jp' => '神流町',
            ],
            [
                'id' => 502,
                'code' => '103829',
                'prefecture_id' => 10,
                'name_en' => 'Shimonita-machi',
                'name_jp' => '下仁田町',
            ],
            [
                'id' => 503,
                'code' => '103837',
                'prefecture_id' => 10,
                'name_en' => 'Nanmoku-mura',
                'name_jp' => '南牧村',
            ],
            [
                'id' => 504,
                'code' => '103845',
                'prefecture_id' => 10,
                'name_en' => 'Kanra-machi',
                'name_jp' => '甘楽町',
            ],
            [
                'id' => 505,
                'code' => '104213',
                'prefecture_id' => 10,
                'name_en' => 'Nakanojo-machi',
                'name_jp' => '中之条町',
            ],
            [
                'id' => 506,
                'code' => '104248',
                'prefecture_id' => 10,
                'name_en' => 'Naganohara-machi',
                'name_jp' => '長野原町',
            ],
            [
                'id' => 507,
                'code' => '104256',
                'prefecture_id' => 10,
                'name_en' => 'Tsumagoi-mura',
                'name_jp' => '嬬恋村',
            ],
            [
                'id' => 508,
                'code' => '104264',
                'prefecture_id' => 10,
                'name_en' => 'Kusatsu-machi',
                'name_jp' => '草津町',
            ],
            [
                'id' => 509,
                'code' => '104281',
                'prefecture_id' => 10,
                'name_en' => 'Takayama-mura',
                'name_jp' => '高山村',
            ],
            [
                'id' => 510,
                'code' => '104299',
                'prefecture_id' => 10,
                'name_en' => 'Higashiagatsuma-machi',
                'name_jp' => '東吾妻町',
            ],
            [
                'id' => 511,
                'code' => '104434',
                'prefecture_id' => 10,
                'name_en' => 'Katashina-mura',
                'name_jp' => '片品村',
            ],
            [
                'id' => 512,
                'code' => '104442',
                'prefecture_id' => 10,
                'name_en' => 'Kawaba-mura',
                'name_jp' => '川場村',
            ],
            [
                'id' => 513,
                'code' => '104485',
                'prefecture_id' => 10,
                'name_en' => 'Showa-mura',
                'name_jp' => '昭和村',
            ],
            [
                'id' => 514,
                'code' => '104493',
                'prefecture_id' => 10,
                'name_en' => 'Minakami-machi',
                'name_jp' => 'みなかみ町',
            ],
            [
                'id' => 515,
                'code' => '104647',
                'prefecture_id' => 10,
                'name_en' => 'Tamamura-machi',
                'name_jp' => '玉村町',
            ],
            [
                'id' => 516,
                'code' => '105210',
                'prefecture_id' => 10,
                'name_en' => 'Itakura-machi',
                'name_jp' => '板倉町',
            ],
            [
                'id' => 517,
                'code' => '105228',
                'prefecture_id' => 10,
                'name_en' => 'Meiwa-machi',
                'name_jp' => '明和町',
            ],
            [
                'id' => 518,
                'code' => '105236',
                'prefecture_id' => 10,
                'name_en' => 'Chiyoda-machi',
                'name_jp' => '千代田町',
            ],
            [
                'id' => 519,
                'code' => '105244',
                'prefecture_id' => 10,
                'name_en' => 'Oizumi-machi',
                'name_jp' => '大泉町',
            ],
            [
                'id' => 520,
                'code' => '105252',
                'prefecture_id' => 10,
                'name_en' => 'Oura-machi',
                'name_jp' => '邑楽町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
