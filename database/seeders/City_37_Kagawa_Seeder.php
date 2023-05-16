<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_37_Kagawa_Seeder extends Seeder
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
                'id' => 1434,
                'code' => '372013',
                'prefecture_id' => 37,
                'name_en' => 'Takamatsu-shi',
                'name_jp' => '高松市',
            ],
            [
                'id' => 1435,
                'code' => '372021',
                'prefecture_id' => 37,
                'name_en' => 'Marugame-shi',
                'name_jp' => '丸亀市',
            ],
            [
                'id' => 1436,
                'code' => '372030',
                'prefecture_id' => 37,
                'name_en' => 'Sakai-de-shi',
                'name_jp' => '坂出市',
            ],
            [
                'id' => 1437,
                'code' => '372048',
                'prefecture_id' => 37,
                'name_en' => 'Zentsuji-shi',
                'name_jp' => '善通寺市',
            ],
            [
                'id' => 1438,
                'code' => '372056',
                'prefecture_id' => 37,
                'name_en' => 'Kanonji-shi',
                'name_jp' => '観音寺市',
            ],
            [
                'id' => 1439,
                'code' => '372064',
                'prefecture_id' => 37,
                'name_en' => 'Sanuki-shi',
                'name_jp' => 'さぬき市',
            ],
            [
                'id' => 1440,
                'code' => '372072',
                'prefecture_id' => 37,
                'name_en' => 'Higashikagawa-shi',
                'name_jp' => '東かがわ市',
            ],
            [
                'id' => 1441,
                'code' => '372081',
                'prefecture_id' => 37,
                'name_en' => 'Mitoyo-shi',
                'name_jp' => '三豊市',
            ],
            [
                'id' => 1442,
                'code' => '373222',
                'prefecture_id' => 37,
                'name_en' => 'Tonosho-cho',
                'name_jp' => '土庄町',
            ],
            [
                'id' => 1443,
                'code' => '373249',
                'prefecture_id' => 37,
                'name_en' => 'Shodoshima-cho',
                'name_jp' => '小豆島町',
            ],
            [
                'id' => 1444,
                'code' => '373419',
                'prefecture_id' => 37,
                'name_en' => 'Miki-cho',
                'name_jp' => '三木町',
            ],
            [
                'id' => 1445,
                'code' => '373648',
                'prefecture_id' => 37,
                'name_en' => 'Naoshima-cho',
                'name_jp' => '直島町',
            ],
            [
                'id' => 1446,
                'code' => '373869',
                'prefecture_id' => 37,
                'name_en' => 'Utazu-cho',
                'name_jp' => '宇多津町',
            ],
            [
                'id' => 1447,
                'code' => '373877',
                'prefecture_id' => 37,
                'name_en' => 'Ayagawa-cho',
                'name_jp' => '綾川町',
            ],
            [
                'id' => 1448,
                'code' => '374032',
                'prefecture_id' => 37,
                'name_en' => 'Kotohira-cho',
                'name_jp' => '琴平町',
            ],
            [
                'id' => 1449,
                'code' => '374041',
                'prefecture_id' => 37,
                'name_en' => 'Tadotsu-cho',
                'name_jp' => '多度津町',
            ],
            [
                'id' => 1450,
                'code' => '374067',
                'prefecture_id' => 37,
                'name_en' => 'Manno-cho',
                'name_jp' => 'まんのう町',
            ],        ];
        DB::table($table_name)->insert($data);
    }
}
