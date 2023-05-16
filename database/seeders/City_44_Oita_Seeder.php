<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_44_Oita_Seeder extends Seeder
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
                'code' => '442011',
                'prefecture_id' => 44,
                'name_en' => 'Ooita-shi',
                'name_jp' => '大分市',
            ],
            [
                'code' => '442020',
                'prefecture_id' => 44,
                'name_en' => 'Beppu-shi',
                'name_jp' => '別府市',
            ],
            [
                'code' => '442038',
                'prefecture_id' => 44,
                'name_en' => 'Nakatsu-shi',
                'name_jp' => '中津市',
            ],
            [
                'code' => '442046',
                'prefecture_id' => 44,
                'name_en' => 'Hita-shi',
                'name_jp' => '日田市',
            ],
            [
                'code' => '442054',
                'prefecture_id' => 44,
                'name_en' => 'Saiki-shi',
                'name_jp' => '佐伯市',
            ],
            [
                'code' => '442062',
                'prefecture_id' => 44,
                'name_en' => 'Usuki-shi',
                'name_jp' => '臼杵市',
            ],
            [
                'code' => '442071',
                'prefecture_id' => 44,
                'name_en' => 'Tsukumi-shi',
                'name_jp' => '津久見市',
            ],
            [
                'code' => '442089',
                'prefecture_id' => 44,
                'name_en' => 'Taketa-shi',
                'name_jp' => '竹田市',
            ],
            [
                'code' => '442097',
                'prefecture_id' => 44,
                'name_en' => 'Bungotakada-shi',
                'name_jp' => '豊後高田市',
            ],
            [
                'code' => '442101',
                'prefecture_id' => 44,
                'name_en' => 'Kitsuki-shi',
                'name_jp' => '杵築市',
            ],
            [
                'code' => '442119',
                'prefecture_id' => 44,
                'name_en' => 'Usa-shi',
                'name_jp' => '宇佐市',
            ],
            [
                'code' => '442127',
                'prefecture_id' => 44,
                'name_en' => 'Bungo-ono-shi',
                'name_jp' => '豊後大野市',
            ],
            [
                'code' => '442135',
                'prefecture_id' => 44,
                'name_en' => 'Yufu-shi',
                'name_jp' => '由布市',
            ],
            [
                'code' => '442143',
                'prefecture_id' => 44,
                'name_en' => 'Kunisaki-shi',
                'name_jp' => '国東市',
            ],
            [
                'code' => '443221',
                'prefecture_id' => 44,
                'name_en' => 'Himeshima-mura',
                'name_jp' => '姫島村',
            ],
            [
                'code' => '443417',
                'prefecture_id' => 44,
                'name_en' => 'Hiji-machi',
                'name_jp' => '日出町',
            ],
            [
                'code' => '444618',
                'prefecture_id' => 44,
                'name_en' => 'Kokonoemachi',
                'name_jp' => '九重町',
            ],
            [
                'code' => '444626',
                'prefecture_id' => 44,
                'name_en' => 'Kusu-machi',
                'name_jp' => '玖珠町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
