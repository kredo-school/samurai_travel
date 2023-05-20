<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_17_Ishikawa_Seeder extends Seeder
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
                'code' => '172014',
                'prefecture_id' => 17,
                'name_en' => 'Kanasawa City',
                'name_jp' => '金沢市',
            ],
            [
                'code' => '172022',
                'prefecture_id' => 17,
                'name_en' => 'Nanao City',
                'name_jp' => '七尾市',
            ],
            [
                'code' => '172031',
                'prefecture_id' => 17,
                'name_en' => 'Komatsu City',
                'name_jp' => '小松市',
            ],
            [
                'code' => '172049',
                'prefecture_id' => 17,
                'name_en' => 'Wajima City',
                'name_jp' => '輪島市',
            ],
            [
                'code' => '172057',
                'prefecture_id' => 17,
                'name_en' => 'Suzu City',
                'name_jp' => '珠洲市',
            ],
            [
                'code' => '172065',
                'prefecture_id' => 17,
                'name_en' => 'Kaga City',
                'name_jp' => '加賀市',
            ],
            [
                'code' => '172073',
                'prefecture_id' => 17,
                'name_en' => 'Hakui City',
                'name_jp' => '羽咋市',
            ],
            [
                'code' => '172090',
                'prefecture_id' => 17,
                'name_en' => 'Kaga District',
                'name_jp' => 'かほく市',
            ],
            [
                'code' => '172103',
                'prefecture_id' => 17,
                'name_en' => 'Hakusan City',
                'name_jp' => '白山市',
            ],
            [
                'code' => '172111',
                'prefecture_id' => 17,
                'name_en' => 'Nomi City',
                'name_jp' => '能美市',
            ],
            [
                'code' => '172120',
                'prefecture_id' => 17,
                'name_en' => 'Nonoichi City',
                'name_jp' => '野々市市',
            ],
            [
                'code' => '173240',
                'prefecture_id' => 17,
                'name_en' => 'Kawakita-machi',
                'name_jp' => '川北町',
            ],
            [
                'code' => '173614',
                'prefecture_id' => 17,
                'name_en' => 'Tsubata-machi',
                'name_jp' => '津幡町',
            ],
            [
                'code' => '173657',
                'prefecture_id' => 17,
                'name_en' => 'Uchinada-machi',
                'name_jp' => '内灘町',
            ],
            [
                'code' => '173843',
                'prefecture_id' => 17,
                'name_en' => 'Shika-machi',
                'name_jp' => '志賀町',
            ],
            [
                'code' => '173860',
                'prefecture_id' => 17,
                'name_en' => 'Hodatsushimizu-cho',
                'name_jp' => '宝達志水町',
            ],
            [
                'code' => '174076',
                'prefecture_id' => 17,
                'name_en' => 'Nakano Town',
                'name_jp' => '中能登町',
            ],
            [
                'code' => '174611',
                'prefecture_id' => 17,
                'name_en' => 'Anamizu-machi',
                'name_jp' => '穴水町',
            ],
            [
                'code' => '174637',
                'prefecture_id' => 17,
                'name_en' => 'Notogawa-cho',
                'name_jp' => '能登町',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
