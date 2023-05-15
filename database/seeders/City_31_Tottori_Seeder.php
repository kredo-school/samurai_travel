<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_31_Tottori_Seeder extends Seeder
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
                'id' => 1297,
                'code' => '312011',
                'prefecture_id' => 31,
                'name_en' => 'Tottorishi',
                'name_jp' => '鳥取市',
            ],
            [
                'id' => 1298,
                'code' => '312029',
                'prefecture_id' => 31,
                'name_en' => 'Yonagoshi',
                'name_jp' => '米子市',
            ],
            [
                'id' => 1299,
                'code' => '312037',
                'prefecture_id' => 31,
                'name_en' => 'Kurayoshi Shi',
                'name_jp' => '倉吉市',
            ],
            [
                'id' => 1300,
                'code' => '312045',
                'prefecture_id' => 31,
                'name_en' => 'Sakaiminato Shi',
                'name_jp' => '境港市',
            ],
            [
                'id' => 1301,
                'code' => '313025',
                'prefecture_id' => 31,
                'name_en' => 'Iwami Cho',
                'name_jp' => '岩美町',
            ],
            [
                'id' => 1302,
                'code' => '313254',
                'prefecture_id' => 31,
                'name_en' => 'Wakasa Cho',
                'name_jp' => '若桜町',
            ],
            [
                'id' => 1303,
                'code' => '313289',
                'prefecture_id' => 31,
                'name_en' => 'Chizu Cho',
                'name_jp' => '智頭町',
            ],
            [
                'id' => 1304,
                'code' => '313297',
                'prefecture_id' => 31,
                'name_en' => 'Yazu Cho',
                'name_jp' => '八頭町',
            ],
            [
                'id' => 1305,
                'code' => '313645',
                'prefecture_id' => 31,
                'name_en' => 'Misasa Cho',
                'name_jp' => '三朝町',
            ],
            [
                'id' => 1306,
                'code' => '313700',
                'prefecture_id' => 31,
                'name_en' => 'Yurihama Cho',
                'name_jp' => '湯梨浜町',
            ],
            [
                'id' => 1307,
                'code' => '313718',
                'prefecture_id' => 31,
                'name_en' => 'Kotoura Cho',
                'name_jp' => '琴浦町',
            ],
            [
                'id' => 1308,
                'code' => '313726',
                'prefecture_id' => 31,
                'name_en' => 'Hokuei Cho',
                'name_jp' => '北栄町',
            ],
            [
                'id' => 1309,
                'code' => '313840',
                'prefecture_id' => 31,
                'name_en' => 'Hiezu Son',
                'name_jp' => '日吉津村',
            ],
            [
                'id' => 1310,
                'code' => '313866',
                'prefecture_id' => 31,
                'name_en' => 'Daisen Cho',
                'name_jp' => '大山町',
            ],
            [
                'id' => 1311,
                'code' => '313891',
                'prefecture_id' => 31,
                'name_en' => 'Nambu Cho',
                'name_jp' => '南部町',
            ],
            [
                'id' => 1312,
                'code' => '313904',
                'prefecture_id' => 31,
                'name_en' => 'Houki Cho',
                'name_jp' => '伯耆町',
            ],
            [
                'id' => 1313,
                'code' => '314013',
                'prefecture_id' => 31,
                'name_en' => 'Nichinan Cho',
                'name_jp' => '日南町',
            ],
            [
                'id' => 1314,
                'code' => '314021',
                'prefecture_id' => 31,
                'name_en' => 'Hino Cho',
                'name_jp' => '日野町',
            ],
            [
                'id' => 1315,
                'code' => '314030',
                'prefecture_id' => 31,
                'name_en' => 'Koufu Cho',
                'name_jp' => '江府町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
