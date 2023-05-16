<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_47_Okinawa_Seeder extends Seeder
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
                'id' => 1748,
                'code' => '472018',
                'prefecture_id' => 47,
                'name_en' => 'Naha-shi',
                'name_jp' => '那覇市',
            ],
            [
                'id' => 1749,
                'code' => '472051',
                'prefecture_id' => 47,
                'name_en' => 'Ginowa-shi',
                'name_jp' => '宜野湾市',
            ],
            [
                'id' => 1750,
                'code' => '472077',
                'prefecture_id' => 47,
                'name_en' => 'IShigaki-shi',
                'name_jp' => '石垣市',
            ],
            [
                'id' => 1751,
                'code' => '472085',
                'prefecture_id' => 47,
                'name_en' => 'Urasoe-shi',
                'name_jp' => '浦添市',
            ],
            [
                'id' => 1752,
                'code' => '472093',
                'prefecture_id' => 47,
                'name_en' => 'Nakagusuku-son',
                'name_jp' => '名護市',
            ],
            [
                'id' => 1753,
                'code' => '472107',
                'prefecture_id' => 47,
                'name_en' => 'Itoman-shi',
                'name_jp' => '糸満市',
            ],
            [
                'id' => 1754,
                'code' => '472115',
                'prefecture_id' => 47,
                'name_en' => 'Okinawa-shi',
                'name_jp' => '沖縄市',
            ],
            [
                'id' => 1755,
                'code' => '472123',
                'prefecture_id' => 47,
                'name_en' => 'Tomigusuku-shi',
                'name_jp' => '豊見城市',
            ],
            [
                'id' => 1756,
                'code' => '472131',
                'prefecture_id' => 47,
                'name_en' => 'Uruma-shi',
                'name_jp' => 'うるま市',
            ],
            [
                'id' => 1757,
                'code' => '472140',
                'prefecture_id' => 47,
                'name_en' => 'Miyakojima-shi',
                'name_jp' => '宮古島市',
            ],
            [
                'id' => 1758,
                'code' => '472158',
                'prefecture_id' => 47,
                'name_en' => 'Nanjō-shi',
                'name_jp' => '南城市',
            ],
            [
                'id' => 1759,
                'code' => '473014',
                'prefecture_id' => 47,
                'name_en' => 'Kunigami-son',
                'name_jp' => '国頭村',
            ],
            [
                'id' => 1760,
                'code' => '473022',
                'prefecture_id' => 47,
                'name_en' => 'Ogimi-son',
                'name_jp' => '大宜味村',
            ],
            [
                'id' => 1761,
                'code' => '473031',
                'prefecture_id' => 47,
                'name_en' => 'Higashi-son',
                'name_jp' => '東村',
            ],
            [
                'id' => 1762,
                'code' => '473065',
                'prefecture_id' => 47,
                'name_en' => 'Nakijin-son',
                'name_jp' => '今帰仁村',
            ],
            [
                'id' => 1763,
                'code' => '473081',
                'prefecture_id' => 47,
                'name_en' => 'Motobu-chō',
                'name_jp' => '本部町',
            ],
            [
                'id' => 1764,
                'code' => '473111',
                'prefecture_id' => 47,
                'name_en' => 'Onna-son',
                'name_jp' => '恩納村',
            ],
            [
                'id' => 1765,
                'code' => '473138',
                'prefecture_id' => 47,
                'name_en' => 'Ginoza-son',
                'name_jp' => '宜野座村',
            ],
            [
                'id' => 1766,
                'code' => '473146',
                'prefecture_id' => 47,
                'name_en' => 'Kin-chō',
                'name_jp' => '金武町',
            ],
            [
                'id' => 1767,
                'code' => '473154',
                'prefecture_id' => 47,
                'name_en' => 'Ie-son',
                'name_jp' => '伊江村',
            ],
            [
                'id' => 1768,
                'code' => '473243',
                'prefecture_id' => 47,
                'name_en' => 'Yomitanson',
                'name_jp' => '読谷村',
            ],
            [
                'id' => 1769,
                'code' => '473251',
                'prefecture_id' => 47,
                'name_en' => 'Kadena-chō',
                'name_jp' => '嘉手納町',
            ],
            [
                'id' => 1770,
                'code' => '473260',
                'prefecture_id' => 47,
                'name_en' => 'Chatan-chō',
                'name_jp' => '北谷町',
            ],
            [
                'id' => 1771,
                'code' => '473278',
                'prefecture_id' => 47,
                'name_en' => 'Kitanakagusuku-son',
                'name_jp' => '北中城村',
            ],
            [
                'id' => 1772,
                'code' => '473286',
                'prefecture_id' => 47,
                'name_en' => 'Nakagusuku-son',
                'name_jp' => '中城村',
            ],
            [
                'id' => 1773,
                'code' => '473294',
                'prefecture_id' => 47,
                'name_en' => 'Nishihara-chō',
                'name_jp' => '西原町',
            ],
            [
                'id' => 1774,
                'code' => '473481',
                'prefecture_id' => 47,
                'name_en' => 'Yonabaru-chō',
                'name_jp' => '与那原町',
            ],
            [
                'id' => 1775,
                'code' => '473502',
                'prefecture_id' => 47,
                'name_en' => 'Haebaru-chō',
                'name_jp' => '南風原町',
            ],
            [
                'id' => 1776,
                'code' => '473537',
                'prefecture_id' => 47,
                'name_en' => 'Tokashiki-son',
                'name_jp' => '渡嘉敷村',
            ],
            [
                'id' => 1777,
                'code' => '473545',
                'prefecture_id' => 47,
                'name_en' => 'Zamami-son',
                'name_jp' => '座間味村',
            ],
            [
                'id' => 1778,
                'code' => '473553',
                'prefecture_id' => 47,
                'name_en' => 'Aguni-son',
                'name_jp' => '粟国村',
            ],
            [
                'id' => 1779,
                'code' => '473561',
                'prefecture_id' => 47,
                'name_en' => 'Tonaki-son',
                'name_jp' => '渡名喜村',
            ],
            [
                'id' => 1780,
                'code' => '473570',
                'prefecture_id' => 47,
                'name_en' => 'Minamidaitō-son',
                'name_jp' => '南大東村',
            ],
            [
                'id' => 1781,
                'code' => '473588',
                'prefecture_id' => 47,
                'name_en' => 'Kitadaitō-son',
                'name_jp' => '北大東村',
            ],
            [
                'id' => 1782,
                'code' => '473596',
                'prefecture_id' => 47,
                'name_en' => 'Iheya-son',
                'name_jp' => '伊平屋村',
            ],
            [
                'id' => 1783,
                'code' => '473600',
                'prefecture_id' => 47,
                'name_en' => 'Izena-son',
                'name_jp' => '伊是名村',
            ],
            [
                'id' => 1784,
                'code' => '473618',
                'prefecture_id' => 47,
                'name_en' => 'Kumejima-chō',
                'name_jp' => '久米島町',
            ],
            [
                'id' => 1785,
                'code' => '473626',
                'prefecture_id' => 47,
                'name_en' => 'Yaese-chō',
                'name_jp' => '八重瀬町',
            ],
            [
                'id' => 1786,
                'code' => '473758',
                'prefecture_id' => 47,
                'name_en' => 'Tarama-son',
                'name_jp' => '多良間村',
            ],
            [
                'id' => 1787,
                'code' => '473812',
                'prefecture_id' => 47,
                'name_en' => 'Taketomi-chō',
                'name_jp' => '竹富町',
            ],
            [
                'id' => 1788,
                'code' => '473821',
                'prefecture_id' => 47,
                'name_en' => 'Yonaguni-chō',
                'name_jp' => '与那国町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
