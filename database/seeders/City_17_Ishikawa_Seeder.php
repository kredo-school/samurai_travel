<?php

namespace Database\Seeders;

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
        $table_name = 'cities';

        $data = [
            [
                'id' => 785,
                'code' => '172014',
                'prefecture_id' => 17,
                'name_en' => 'Kanasawa City',
                'name_jp' => '金沢市',
            ],
            [
                'id' => 786,
                'code' => '172022',
                'prefecture_id' => 17,
                'name_en' => 'Nanao City',
                'name_jp' => '七尾市',
            ],
            [
                'id' => 787,
                'code' => '172031',
                'prefecture_id' => 17,
                'name_en' => 'Komatsu City',
                'name_jp' => '小松市',
            ],
            [
                'id' => 788,
                'code' => '172049',
                'prefecture_id' => 17,
                'name_en' => 'Wajima City',
                'name_jp' => '輪島市',
            ],
            [
                'id' => 789,
                'code' => '172057',
                'prefecture_id' => 17,
                'name_en' => 'Suzu City',
                'name_jp' => '珠洲市',
            ],
            [
                'id' => 790,
                'code' => '172065',
                'prefecture_id' => 17,
                'name_en' => 'Kaga City',
                'name_jp' => '加賀市',
            ],
            [
                'id' => 791,
                'code' => '172073',
                'prefecture_id' => 17,
                'name_en' => 'Hakui City',
                'name_jp' => '羽咋市',
            ],
            [
                'id' => 792,
                'code' => '172090',
                'prefecture_id' => 17,
                'name_en' => 'Kaga District',
                'name_jp' => 'かほく市',
            ],
            [
                'id' => 793,
                'code' => '172103',
                'prefecture_id' => 17,
                'name_en' => 'Hakusan City',
                'name_jp' => '白山市',
            ],
            [
                'id' => 794,
                'code' => '172111',
                'prefecture_id' => 17,
                'name_en' => 'Nomi City',
                'name_jp' => '能美市',
            ],
            [
                'id' => 795,
                'code' => '172120',
                'prefecture_id' => 17,
                'name_en' => 'Nonoichi City',
                'name_jp' => '野々市市',
            ],
            [
                'id' => 796,
                'code' => '173240',
                'prefecture_id' => 17,
                'name_en' => 'Kawakita-machi',
                'name_jp' => '川北町',
            ],
            [
                'id' => 797,
                'code' => '173614',
                'prefecture_id' => 17,
                'name_en' => 'Tsubata-machi',
                'name_jp' => '津幡町',
            ],
            [
                'id' => 798,
                'code' => '173657',
                'prefecture_id' => 17,
                'name_en' => 'Uchinada-machi',
                'name_jp' => '内灘町',
            ],
            [
                'id' => 799,
                'code' => '173843',
                'prefecture_id' => 17,
                'name_en' => 'Shika-machi',
                'name_jp' => '志賀町',
            ],
            [
                'id' => 800,
                'code' => '173860',
                'prefecture_id' => 17,
                'name_en' => 'Hodatsushimizu-cho',
                'name_jp' => '宝達志水町',
            ],
            [
                'id' => 801,
                'code' => '174076',
                'prefecture_id' => 17,
                'name_en' => 'Nakano Town',
                'name_jp' => '中能登町',
            ],
            [
                'id' => 802,
                'code' => '174611',
                'prefecture_id' => 17,
                'name_en' => 'Anamizu-machi',
                'name_jp' => '穴水町',
            ],
            [
                'id' => 803,
                'code' => '174637',
                'prefecture_id' => 17,
                'name_en' => 'Notogawa-cho',
                'name_jp' => '能登町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
