<?php

namespace Database\Seeders;

use App\Models\City;
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
        $data = collect([
            [
                'code' => '092011',
                'prefecture_id' => 9,
                'name_en' => 'Utsunomiya-shi',
                'name_jp' => '宇都宮市',
            ],
            [
                'code' => '092029',
                'prefecture_id' => 9,
                'name_en' => 'Ashikaga-shi',
                'name_jp' => '足利市',
            ],
            [
                'code' => '092037',
                'prefecture_id' => 9,
                'name_en' => 'Tochigi-shi',
                'name_jp' => '栃木市',
            ],
            [
                'code' => '092045',
                'prefecture_id' => 9,
                'name_en' => 'Sano-shi',
                'name_jp' => '佐野市',
            ],
            [
                'code' => '092053',
                'prefecture_id' => 9,
                'name_en' => 'Kanuma-shi',
                'name_jp' => '鹿沼市',
            ],
            [
                'code' => '092061',
                'prefecture_id' => 9,
                'name_en' => 'Nikko-shi',
                'name_jp' => '日光市',
            ],
            [
                'code' => '092088',
                'prefecture_id' => 9,
                'name_en' => 'Oyama-shi',
                'name_jp' => '小山市',
            ],
            [
                'code' => '092096',
                'prefecture_id' => 9,
                'name_en' => 'Mooka-shi',
                'name_jp' => '真岡市',
            ],
            [
                'code' => '092100',
                'prefecture_id' => 9,
                'name_en' => 'Ohtawara-shi',
                'name_jp' => '大田原市',
            ],
            [
                'code' => '092118',
                'prefecture_id' => 9,
                'name_en' => 'Yaita-shi',
                'name_jp' => '矢板市',
            ],
            [
                'code' => '092134',
                'prefecture_id' => 9,
                'name_en' => 'Nasushiobara-shi',
                'name_jp' => '那須塩原市',
            ],
            [
                'code' => '092142',
                'prefecture_id' => 9,
                'name_en' => 'Sakura-shi',
                'name_jp' => 'さくら市',
            ],
            [
                'code' => '092151',
                'prefecture_id' => 9,
                'name_en' => 'Nasukarasuyama-shi',
                'name_jp' => '那須烏山市',
            ],
            [
                'code' => '092169',
                'prefecture_id' => 9,
                'name_en' => 'Shimotsuke-shi',
                'name_jp' => '下野市',
            ],
            [
                'code' => '093017',
                'prefecture_id' => 9,
                'name_en' => 'Kaminokawa-machi',
                'name_jp' => '上三川町',
            ],
            [
                'code' => '093424',
                'prefecture_id' => 9,
                'name_en' => 'Mashiko-machi',
                'name_jp' => '益子町',
            ],
            [
                'code' => '093432',
                'prefecture_id' => 9,
                'name_en' => 'Motegi-machi',
                'name_jp' => '茂木町',
            ],
            [
                'code' => '093441',
                'prefecture_id' => 9,
                'name_en' => 'Ichikai-machi',
                'name_jp' => '市貝町',
            ],
            [
                'code' => '093459',
                'prefecture_id' => 9,
                'name_en' => 'Haga-machi',
                'name_jp' => '芳賀町',
            ],
            [
                'code' => '093611',
                'prefecture_id' => 9,
                'name_en' => 'Mibu-machi',
                'name_jp' => '壬生町',
            ],
            [
                'code' => '093645',
                'prefecture_id' => 9,
                'name_en' => 'Nogi-machi',
                'name_jp' => '野木町',
            ],
            [
                'code' => '093840',
                'prefecture_id' => 9,
                'name_en' => 'Shiobara-machi',
                'name_jp' => '塩谷町',
            ],
            [
                'code' => '093866',
                'prefecture_id' => 9,
                'name_en' => 'Takanezawa-machi',
                'name_jp' => '高根沢町',
            ],
            [
                'code' => '094072',
                'prefecture_id' => 9,
                'name_en' => 'Nasu-machi',
                'name_jp' => '那須町',
            ],
            [
                'code' => '094111',
                'prefecture_id' => 9,
                'name_en' => 'Nakagawa-machi',
                'name_jp' => '那珂川町',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
