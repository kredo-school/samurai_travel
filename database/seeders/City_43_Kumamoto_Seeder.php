<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_43_Kumamoto_Seeder extends Seeder
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
                'id' => 1612,
                'code' => '431001',
                'prefecture_id' => 43,
                'name_en' => 'Kumamoto-shi',
                'name_jp' => '熊本市',
            ],
            [
                'id' => 1613,
                'code' => '432024',
                'prefecture_id' => 43,
                'name_en' => 'Yatsushiro-shi',
                'name_jp' => '八代市',
            ],
            [
                'id' => 1614,
                'code' => '432032',
                'prefecture_id' => 43,
                'name_en' => 'Hitoyoshi-shi',
                'name_jp' => '人吉市',
            ],
            [
                'id' => 1615,
                'code' => '432041',
                'prefecture_id' => 43,
                'name_en' => 'Arao-shi',
                'name_jp' => '荒尾市',
            ],
            [
                'id' => 1616,
                'code' => '432059',
                'prefecture_id' => 43,
                'name_en' => 'Minamata-shi',
                'name_jp' => '水俣市',
            ],
            [
                'id' => 1617,
                'code' => '432067',
                'prefecture_id' => 43,
                'name_en' => 'Tamana-shi',
                'name_jp' => '玉名市',
            ],
            [
                'id' => 1618,
                'code' => '432083',
                'prefecture_id' => 43,
                'name_en' => 'Yamaga-shi',
                'name_jp' => '山鹿市',
            ],
            [
                'id' => 1619,
                'code' => '432105',
                'prefecture_id' => 43,
                'name_en' => 'Kikuchi-shi',
                'name_jp' => '菊池市',
            ],
            [
                'id' => 1620,
                'code' => '432113',
                'prefecture_id' => 43,
                'name_en' => 'Uto-shi',
                'name_jp' => '宇土市',
            ],
            [
                'id' => 1621,
                'code' => '432121',
                'prefecture_id' => 43,
                'name_en' => 'Kami-Amakusa-shi',
                'name_jp' => '上天草市',
            ],
            [
                'id' => 1622,
                'code' => '432130',
                'prefecture_id' => 43,
                'name_en' => 'Uki-shi',
                'name_jp' => '宇城市',
            ],
            [
                'id' => 1623,
                'code' => '432148',
                'prefecture_id' => 43,
                'name_en' => 'Aso-shi',
                'name_jp' => '阿蘇市',
            ],
            [
                'id' => 1624,
                'code' => '432156',
                'prefecture_id' => 43,
                'name_en' => 'Amakusa-shi',
                'name_jp' => '天草市',
            ],
            [
                'id' => 1625,
                'code' => '432164',
                'prefecture_id' => 43,
                'name_en' => 'Koshi-shi',
                'name_jp' => '合志市',
            ],
            [
                'id' => 1626,
                'code' => '433489',
                'prefecture_id' => 43,
                'name_en' => 'Misato-machi',
                'name_jp' => '美里町',
            ],
            [
                'id' => 1627,
                'code' => '433641',
                'prefecture_id' => 43,
                'name_en' => 'Gyokuto-machi',
                'name_jp' => '玉東町',
            ],
            [
                'id' => 1628,
                'code' => '433675',
                'prefecture_id' => 43,
                'name_en' => 'Nankan-machi',
                'name_jp' => '南関町',
            ],
            [
                'id' => 1629,
                'code' => '433683',
                'prefecture_id' => 43,
                'name_en' => 'Nagasu-machi',
                'name_jp' => '長洲町',
            ],
            [
                'id' => 1630,
                'code' => '433691',
                'prefecture_id' => 43,
                'name_en' => 'Nagomi-machi',
                'name_jp' => '和水町',
            ],
            [
                'id' => 1631,
                'code' => '434035',
                'prefecture_id' => 43,
                'name_en' => 'Ozu-machi',
                'name_jp' => '大津町',
            ],
            [
                'id' => 1632,
                'code' => '434043',
                'prefecture_id' => 43,
                'name_en' => 'Kikuyo-machi',
                'name_jp' => '菊陽町',
            ],
            [
                'id' => 1633,
                'code' => '434230',
                'prefecture_id' => 43,
                'name_en' => 'Minami-oguni-machi',
                'name_jp' => '南小国町',
            ],
            [
                'id' => 1634,
                'code' => '434248',
                'prefecture_id' => 43,
                'name_en' => 'Oguni-machi',
                'name_jp' => '小国町',
            ],
            [
                'id' => 1635,
                'code' => '434256',
                'prefecture_id' => 43,
                'name_en' => 'Ubuyama-mura',
                'name_jp' => '産山村',
            ],
            [
                'id' => 1636,
                'code' => '434281',
                'prefecture_id' => 43,
                'name_en' => 'Takamori-machi',
                'name_jp' => '高森町',
            ],
            [
                'id' => 1637,
                'code' => '434329',
                'prefecture_id' => 43,
                'name_en' => 'Nishihara-mura',
                'name_jp' => '西原村',
            ],
            [
                'id' => 1638,
                'code' => '434337',
                'prefecture_id' => 43,
                'name_en' => 'Minamiaso-mura',
                'name_jp' => '南阿蘇村',
            ],
            [
                'id' => 1639,
                'code' => '434418',
                'prefecture_id' => 43,
                'name_en' => 'Mifune-machi',
                'name_jp' => '御船町',
            ],
            [
                'id' => 1640,
                'code' => '434426',
                'prefecture_id' => 43,
                'name_en' => 'Kashima-machi',
                'name_jp' => '嘉島町',
            ],
            [
                'id' => 1641,
                'code' => '434434',
                'prefecture_id' => 43,
                'name_en' => 'Mashiki-machi',
                'name_jp' => '益城町',
            ],
            [
                'id' => 1642,
                'code' => '434442',
                'prefecture_id' => 43,
                'name_en' => 'Kosa-machi',
                'name_jp' => '甲佐町',
            ],
            [
                'id' => 1643,
                'code' => '434477',
                'prefecture_id' => 43,
                'name_en' => 'Yamato-cho',
                'name_jp' => '山都町',
            ],
            [
                'id' => 1644,
                'code' => '434680',
                'prefecture_id' => 43,
                'name_en' => 'Hikawa-cho',
                'name_jp' => '氷川町',
            ],
            [
                'id' => 1645,
                'code' => '434825',
                'prefecture_id' => 43,
                'name_en' => 'Ashikita-machi',
                'name_jp' => '芦北町',
            ],
            [
                'id' => 1646,
                'code' => '434841',
                'prefecture_id' => 43,
                'name_en' => 'Tsunagi-machi',
                'name_jp' => '津奈木町',
            ],
            [
                'id' => 1647,
                'code' => '435015',
                'prefecture_id' => 43,
                'name_en' => 'Nishiki-machi',
                'name_jp' => '錦町',
            ],
            [
                'id' => 1648,
                'code' => '435058',
                'prefecture_id' => 43,
                'name_en' => 'Taragi-machi',
                'name_jp' => '多良木町',
            ],
            [
                'id' => 1649,
                'code' => '435066',
                'prefecture_id' => 43,
                'name_en' => 'Yunomae-machi',
                'name_jp' => '湯前町',
            ],
            [
                'id' => 1650,
                'code' => '435074',
                'prefecture_id' => 43,
                'name_en' => 'Mizukami-mura',
                'name_jp' => '水上村',
            ],
            [
                'id' => 1651,
                'code' => '435104',
                'prefecture_id' => 43,
                'name_en' => 'Sagara-mura',
                'name_jp' => '相良村',
            ],
            [
                'id' => 1652,
                'code' => '435112',
                'prefecture_id' => 43,
                'name_en' => 'Itsuki-mura',
                'name_jp' => '五木村',
            ],
            [
                'id' => 1653,
                'code' => '435121',
                'prefecture_id' => 43,
                'name_en' => 'Yamae-mura',
                'name_jp' => '山江村',
            ],
            [
                'id' => 1654,
                'code' => '435139',
                'prefecture_id' => 43,
                'name_en' => 'Kuma-mura',
                'name_jp' => '球磨村',
            ],
            [
                'id' => 1655,
                'code' => '435147',
                'prefecture_id' => 43,
                'name_en' => 'Asagiri-cho',
                'name_jp' => 'あさぎり町',
            ],
            [
                'id' => 1656,
                'code' => '435317',
                'prefecture_id' => 43,
                'name_en' => 'Reihoku-machi',
                'name_jp' => '苓北町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
