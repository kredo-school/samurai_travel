<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_45_Miyazaki_Seeder extends Seeder
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
                'id' => 1677,
                'code' => '452017',
                'prefecture_id' => 45,
                'name_en' => 'Miyazaki-shi',
                'name_jp' => '宮崎市',
            ],
            [
                'id' => 1678,
                'code' => '452025',
                'prefecture_id' => 45,
                'name_en' => 'Miyakonojo-shi',
                'name_jp' => '都城市',
            ],
            [
                'id' => 1679,
                'code' => '452033',
                'prefecture_id' => 45,
                'name_en' => 'Nobeoka-shi',
                'name_jp' => '延岡市',
            ],
            [
                'id' => 1680,
                'code' => '452041',
                'prefecture_id' => 45,
                'name_en' => 'Nichinan-shi',
                'name_jp' => '日南市',
            ],
            [
                'id' => 1681,
                'code' => '452050',
                'prefecture_id' => 45,
                'name_en' => 'Kobayashi-shi',
                'name_jp' => '小林市',
            ],
            [
                'id' => 1682,
                'code' => '452068',
                'prefecture_id' => 45,
                'name_en' => 'Hyuga-shi',
                'name_jp' => '日向市',
            ],
            [
                'id' => 1683,
                'code' => '452076',
                'prefecture_id' => 45,
                'name_en' => 'Kushima-shi',
                'name_jp' => '串間市',
            ],
            [
                'id' => 1684,
                'code' => '452084',
                'prefecture_id' => 45,
                'name_en' => 'Saito-shi',
                'name_jp' => '西都市',
            ],
            [
                'id' => 1685,
                'code' => '452092',
                'prefecture_id' => 45,
                'name_en' => 'Ebino-shi',
                'name_jp' => 'えびの市',
            ],
            [
                'id' => 1686,
                'code' => '453412',
                'prefecture_id' => 45,
                'name_en' => 'Mimata-cho',
                'name_jp' => '三股町',
            ],
            [
                'id' => 1687,
                'code' => '453617',
                'prefecture_id' => 45,
                'name_en' => 'Takaharu-cho',
                'name_jp' => '高原町',
            ],
            [
                'id' => 1688,
                'code' => '453820',
                'prefecture_id' => 45,
                'name_en' => 'Kunitomi-cho',
                'name_jp' => '国富町',
            ],
            [
                'id' => 1689,
                'code' => '453838',
                'prefecture_id' => 45,
                'name_en' => 'Ayacho',
                'name_jp' => '綾町',
            ],
            [
                'id' => 1690,
                'code' => '454010',
                'prefecture_id' => 45,
                'name_en' => 'Takanabe-cho',
                'name_jp' => '高鍋町',
            ],
            [
                'id' => 1691,
                'code' => '454028',
                'prefecture_id' => 45,
                'name_en' => 'Shintomi-cho',
                'name_jp' => '新富町',
            ],
            [
                'id' => 1692,
                'code' => '454036',
                'prefecture_id' => 45,
                'name_en' => 'Nishimera-son',
                'name_jp' => '西米良村',
            ],
            [
                'id' => 1693,
                'code' => '454044',
                'prefecture_id' => 45,
                'name_en' => 'Kijo-cho',
                'name_jp' => '木城町',
            ],
            [
                'id' => 1694,
                'code' => '454052',
                'prefecture_id' => 45,
                'name_en' => 'Kawaminami-cho',
                'name_jp' => '川南町',
            ],
            [
                'id' => 1695,
                'code' => '454061',
                'prefecture_id' => 45,
                'name_en' => 'Tsuno-cho',
                'name_jp' => '都農町',
            ],
            [
                'id' => 1696,
                'code' => '454214',
                'prefecture_id' => 45,
                'name_en' => 'Kadogawa-cho',
                'name_jp' => '門川町',
            ],
            [
                'id' => 1697,
                'code' => '454290',
                'prefecture_id' => 45,
                'name_en' => 'Morotsuka-son',
                'name_jp' => '諸塚村',
            ],
            [
                'id' => 1698,
                'code' => '454303',
                'prefecture_id' => 45,
                'name_en' => 'Shiiba-son',
                'name_jp' => '椎葉村',
            ],
            [
                'id' => 1699,
                'code' => '454311',
                'prefecture_id' => 45,
                'name_en' => 'Misato-cho',
                'name_jp' => '美郷町',
            ],
            [
                'id' => 1700,
                'code' => '454419',
                'prefecture_id' => 45,
                'name_en' => 'Takachiho-cho',
                'name_jp' => '高千穂町',
            ],
            [
                'id' => 1701,
                'code' => '454427',
                'prefecture_id' => 45,
                'name_en' => 'Hinokage-cho',
                'name_jp' => '日之影町',
            ],
            [
                'id' => 1702,
                'code' => '454435',
                'prefecture_id' => 45,
                'name_en' => 'Gokase-cho',
                'name_jp' => '五ヶ瀬町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
