<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_09_Tochigi_Seeder extends Seeder
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
                'id' => 460,
                'code' => '092011',
                'prefecture_id' => 9,
                'name_en' => 'Utsunomiya-shi',
                'name_jp' => '宇都宮市',
            ],
            [
                'id' => 461,
                'code' => '092029',
                'prefecture_id' => 9,
                'name_en' => 'Ashikaga-shi',
                'name_jp' => '足利市',
            ],
            [
                'id' => 462,
                'code' => '092037',
                'prefecture_id' => 9,
                'name_en' => 'Tochigi-shi',
                'name_jp' => '栃木市',
            ],
            [
                'id' => 463,
                'code' => '092045',
                'prefecture_id' => 9,
                'name_en' => 'Sano-shi',
                'name_jp' => '佐野市',
            ],
            [
                'id' => 464,
                'code' => '092053',
                'prefecture_id' => 9,
                'name_en' => 'Kanuma-shi',
                'name_jp' => '鹿沼市',
            ],
            [
                'id' => 465,
                'code' => '092061',
                'prefecture_id' => 9,
                'name_en' => 'Nikko-shi',
                'name_jp' => '日光市',
            ],
            [
                'id' => 466,
                'code' => '092088',
                'prefecture_id' => 9,
                'name_en' => 'Oyama-shi',
                'name_jp' => '小山市',
            ],
            [
                'id' => 467,
                'code' => '092096',
                'prefecture_id' => 9,
                'name_en' => 'Mooka-shi',
                'name_jp' => '真岡市',
            ],
            [
                'id' => 468,
                'code' => '092100',
                'prefecture_id' => 9,
                'name_en' => 'Ohtawara-shi',
                'name_jp' => '大田原市',
            ],
            [
                'id' => 469,
                'code' => '092118',
                'prefecture_id' => 9,
                'name_en' => 'Yaita-shi',
                'name_jp' => '矢板市',
            ],
            [
                'id' => 470,
                'code' => '092134',
                'prefecture_id' => 9,
                'name_en' => 'Nasushiobara-shi',
                'name_jp' => '那須塩原市',
            ],
            [
                'id' => 471,
                'code' => '092142',
                'prefecture_id' => 9,
                'name_en' => 'Sakura-shi',
                'name_jp' => 'さくら市',
            ],
            [
                'id' => 472,
                'code' => '092151',
                'prefecture_id' => 9,
                'name_en' => 'Nasukarasuyama-shi',
                'name_jp' => '那須烏山市',
            ],
            [
                'id' => 473,
                'code' => '092169',
                'prefecture_id' => 9,
                'name_en' => 'Shimotsuke-shi',
                'name_jp' => '下野市',
            ],
            [
                'id' => 474,
                'code' => '093017',
                'prefecture_id' => 9,
                'name_en' => 'Kaminokawa-machi',
                'name_jp' => '上三川町',
            ],
            [
                'id' => 475,
                'code' => '093424',
                'prefecture_id' => 9,
                'name_en' => 'Mashiko-machi',
                'name_jp' => '益子町',
            ],
            [
                'id' => 476,
                'code' => '093432',
                'prefecture_id' => 9,
                'name_en' => 'Motegi-machi',
                'name_jp' => '茂木町',
            ],
            [
                'id' => 477,
                'code' => '093441',
                'prefecture_id' => 9,
                'name_en' => 'Ichikai-machi',
                'name_jp' => '市貝町',
            ],
            [
                'id' => 478,
                'code' => '093459',
                'prefecture_id' => 9,
                'name_en' => 'Haga-machi',
                'name_jp' => '芳賀町',
            ],
            [
                'id' => 479,
                'code' => '093611',
                'prefecture_id' => 9,
                'name_en' => 'Mibu-machi',
                'name_jp' => '壬生町',
            ],
            [
                'id' => 480,
                'code' => '093645',
                'prefecture_id' => 9,
                'name_en' => 'Nogi-machi',
                'name_jp' => '野木町',
            ],
            [
                'id' => 481,
                'code' => '093840',
                'prefecture_id' => 9,
                'name_en' => 'Shiobara-machi',
                'name_jp' => '塩谷町',
            ],
            [
                'id' => 482,
                'code' => '093866',
                'prefecture_id' => 9,
                'name_en' => 'Takanezawa-machi',
                'name_jp' => '高根沢町',
            ],
            [
                'id' => 483,
                'code' => '094072',
                'prefecture_id' => 9,
                'name_en' => 'Nasu-machi',
                'name_jp' => '那須町',
            ],
            [
                'id' => 484,
                'code' => '094111',
                'prefecture_id' => 9,
                'name_en' => 'Nakagawa-machi',
                'name_jp' => '那珂川町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
