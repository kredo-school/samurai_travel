<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_35_Yamaguchi_Seeder extends Seeder
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
                'id' => 1389,
                'code' => '352012',
                'prefecture_id' => 35,
                'name_en' => 'Shimonoseki-shi',
                'name_jp' => '下関市',
            ],
            [
                'id' => 1390,
                'code' => '352021',
                'prefecture_id' => 35,
                'name_en' => 'Ube-shi',
                'name_jp' => '宇部市',
            ],
            [
                'id' => 1391,
                'code' => '352039',
                'prefecture_id' => 35,
                'name_en' => 'Yamaguchi-shi',
                'name_jp' => '山口市',
            ],
            [
                'id' => 1392,
                'code' => '352047',
                'prefecture_id' => 35,
                'name_en' => 'Hagi-shi',
                'name_jp' => '萩市',
            ],
            [
                'id' => 1393,
                'code' => '352063',
                'prefecture_id' => 35,
                'name_en' => 'Hofu-shi',
                'name_jp' => '防府市',
            ],
            [
                'id' => 1394,
                'code' => '352071',
                'prefecture_id' => 35,
                'name_en' => 'Kudamatsu-shi',
                'name_jp' => '下松市',
            ],
            [
                'id' => 1395,
                'code' => '352080',
                'prefecture_id' => 35,
                'name_en' => 'Iwakuni-shi',
                'name_jp' => '岩国市',
            ],
            [
                'id' => 1396,
                'code' => '352101',
                'prefecture_id' => 35,
                'name_en' => 'Hikari-shi',
                'name_jp' => '光市',
            ],
            [
                'id' => 1397,
                'code' => '352110',
                'prefecture_id' => 35,
                'name_en' => 'Nagato-shi',
                'name_jp' => '長門市',
            ],
            [
                'id' => 1398,
                'code' => '352128',
                'prefecture_id' => 35,
                'name_en' => 'Yanai-shi',
                'name_jp' => '柳井市',
            ],
            [
                'id' => 1399,
                'code' => '352136',
                'prefecture_id' => 35,
                'name_en' => 'Mine-shi',
                'name_jp' => '美祢市',
            ],
            [
                'id' => 1400,
                'code' => '352152',
                'prefecture_id' => 35,
                'name_en' => 'Shunan-shi',
                'name_jp' => '周南市',
            ],
            [
                'id' => 1401,
                'code' => '352161',
                'prefecture_id' => 35,
                'name_en' => 'Sanyo-Onoda-shi',
                'name_jp' => '山陽小野田市',
            ],
            [
                'id' => 1402,
                'code' => '353051',
                'prefecture_id' => 35,
                'name_en' => 'Suou-Oshima-cho',
                'name_jp' => '周防大島町',
            ],
            [
                'id' => 1403,
                'code' => '353213',
                'prefecture_id' => 35,
                'name_en' => 'Waki-cho',
                'name_jp' => '和木町',
            ],
            [
                'id' => 1404,
                'code' => '353418',
                'prefecture_id' => 35,
                'name_en' => 'Kaminoseki-cho',
                'name_jp' => '上関町',
            ],
            [
                'id' => 1405,
                'code' => '353434',
                'prefecture_id' => 35,
                'name_en' => 'Tabuse-cho',
                'name_jp' => '田布施町',
            ],
            [
                'id' => 1406,
                'code' => '353442',
                'prefecture_id' => 35,
                'name_en' => 'Hiro-o-cho',
                'name_jp' => '平生町',
            ],
            [
                'id' => 1407,
                'code' => '355020',
                'prefecture_id' => 35,
                'name_en' => 'Abu-cho',
                'name_jp' => '阿武町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
