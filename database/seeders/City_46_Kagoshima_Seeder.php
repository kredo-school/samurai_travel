<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_46_Kagoshima_Seeder extends Seeder
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
                'id' => 1704,
                'code' => '462012',
                'prefecture_id' => 46,
                'name_en' => 'Kagoshima-shi',
                'name_jp' => '鹿児島市',
            ],
            [
                'id' => 1705,
                'code' => '462039',
                'prefecture_id' => 46,
                'name_en' => 'Kanoya-shi',
                'name_jp' => '鹿屋市',
            ],
            [
                'id' => 1706,
                'code' => '462047',
                'prefecture_id' => 46,
                'name_en' => 'Makurazaki-shi',
                'name_jp' => '枕崎市',
            ],
            [
                'id' => 1707,
                'code' => '462063',
                'prefecture_id' => 46,
                'name_en' => 'Akune-shi',
                'name_jp' => '阿久根市',
            ],
            [
                'id' => 1708,
                'code' => '462080',
                'prefecture_id' => 46,
                'name_en' => 'Izumi-shi',
                'name_jp' => '出水市',
            ],
            [
                'id' => 1709,
                'code' => '462101',
                'prefecture_id' => 46,
                'name_en' => 'Ibusuki-shi',
                'name_jp' => '指宿市',
            ],
            [
                'id' => 1710,
                'code' => '462136',
                'prefecture_id' => 46,
                'name_en' => 'Nishinoomote-shi',
                'name_jp' => '西之表市',
            ],
            [
                'id' => 1711,
                'code' => '462144',
                'prefecture_id' => 46,
                'name_en' => 'Taramizu-shi',
                'name_jp' => '垂水市',
            ],
            [
                'id' => 1712,
                'code' => '462152',
                'prefecture_id' => 46,
                'name_en' => 'Satsumasendai-shi',
                'name_jp' => '薩摩川内市',
            ],
            [
                'id' => 1713,
                'code' => '462161',
                'prefecture_id' => 46,
                'name_en' => 'Hioki-shi',
                'name_jp' => '日置市',
            ],
            [
                'id' => 1714,
                'code' => '462179',
                'prefecture_id' => 46,
                'name_en' => 'So-shi',
                'name_jp' => '曽於市',
            ],
            [
                'id' => 1715,
                'code' => '462187',
                'prefecture_id' => 46,
                'name_en' => 'Kirishima-shi',
                'name_jp' => '霧島市',
            ],
            [
                'id' => 1716,
                'code' => '462195',
                'prefecture_id' => 46,
                'name_en' => 'Ichikikushikino-shi',
                'name_jp' => 'いちき串木野市',
            ],
            [
                'id' => 1717,
                'code' => '462209',
                'prefecture_id' => 46,
                'name_en' => 'Minamisatsuma-shi',
                'name_jp' => '南さつま市',
            ],
            [
                'id' => 1718,
                'code' => '462217',
                'prefecture_id' => 46,
                'name_en' => 'Shibushi-shi',
                'name_jp' => '志布志市',
            ],
            [
                'id' => 1719,
                'code' => '462225',
                'prefecture_id' => 46,
                'name_en' => 'Amami-shi',
                'name_jp' => '奄美市',
            ],
            [
                'id' => 1720,
                'code' => '462233',
                'prefecture_id' => 46,
                'name_en' => 'Minamikyushu-shi',
                'name_jp' => '南九州市',
            ],
            [
                'id' => 1721,
                'code' => '462241',
                'prefecture_id' => 46,
                'name_en' => 'Isa-shi',
                'name_jp' => '伊佐市',
            ],
            [
                'id' => 1722,
                'code' => '462250',
                'prefecture_id' => 46,
                'name_en' => 'Airashii',
                'name_jp' => '姶良市',
            ],
            [
                'id' => 1723,
                'code' => '463035',
                'prefecture_id' => 46,
                'name_en' => 'Mishimamura',
                'name_jp' => '三島村',
            ],
            [
                'id' => 1724,
                'code' => '463043',
                'prefecture_id' => 46,
                'name_en' => 'Toshimamura',
                'name_jp' => '十島村',
            ],
            [
                'id' => 1725,
                'code' => '463922',
                'prefecture_id' => 46,
                'name_en' => 'Satsumachō',
                'name_jp' => 'さつま町',
            ],
            [
                'id' => 1726,
                'code' => '464040',
                'prefecture_id' => 46,
                'name_en' => 'Nagashimachō',
                'name_jp' => '長島町',
            ],
            [
                'id' => 1727,
                'code' => '464520',
                'prefecture_id' => 46,
                'name_en' => 'Yūsuichō',
                'name_jp' => '湧水町',
            ],
            [
                'id' => 1728,
                'code' => '464686',
                'prefecture_id' => 46,
                'name_en' => 'Ōsakishira-chō',
                'name_jp' => '大崎町',
            ],
            [
                'id' => 1729,
                'code' => '464821',
                'prefecture_id' => 46,
                'name_en' => 'Higashikushira-cho',
                'name_jp' => '東串良町',
            ],
            [
                'id' => 1730,
                'code' => '464902',
                'prefecture_id' => 46,
                'name_en' => 'Kinkōchō',
                'name_jp' => '錦江町',
            ],
            [
                'id' => 1731,
                'code' => '464911',
                'prefecture_id' => 46,
                'name_en' => 'Minamiosumi-chō',
                'name_jp' => '南大隅町',
            ],
            [
                'id' => 1732,
                'code' => '464929',
                'prefecture_id' => 46,
                'name_en' => 'Kimotsuki-chō',
                'name_jp' => '肝付町',
            ],
            [
                'id' => 1733,
                'code' => '465011',
                'prefecture_id' => 46,
                'name_en' => 'Nakatane-chō',
                'name_jp' => '中種子町',
            ],
            [
                'id' => 1734,
                'code' => '465020',
                'prefecture_id' => 46,
                'name_en' => 'Minamitane-chō',
                'name_jp' => '南種子町',
            ],
            [
                'id' => 1735,
                'code' => '465054',
                'prefecture_id' => 46,
                'name_en' => 'Yakushima-chō',
                'name_jp' => '屋久島町',
            ],
            [
                'id' => 1736,
                'code' => '465232',
                'prefecture_id' => 46,
                'name_en' => 'Yamato-son',
                'name_jp' => '大和村',
            ],
            [
                'id' => 1737,
                'code' => '465241',
                'prefecture_id' => 46,
                'name_en' => 'Uken-son',
                'name_jp' => '宇検村',
            ],
            [
                'id' => 1738,
                'code' => '465259',
                'prefecture_id' => 46,
                'name_en' => 'Setouchi-chō',
                'name_jp' => '瀬戸内町',
            ],
            [
                'id' => 1739,
                'code' => '465275',
                'prefecture_id' => 46,
                'name_en' => 'Tatsugō-chō',
                'name_jp' => '龍郷町',
            ],
            [
                'id' => 1740,
                'code' => '465291',
                'prefecture_id' => 46,
                'name_en' => 'Kikai-chō',
                'name_jp' => '喜界町',
            ],
            [
                'id' => 1741,
                'code' => '465305',
                'prefecture_id' => 46,
                'name_en' => 'Tokunoshima-chō',
                'name_jp' => '徳之島町',
            ],
            [
                'id' => 1742,
                'code' => '465313',
                'prefecture_id' => 46,
                'name_en' => 'Amagi-chō',
                'name_jp' => '天城町',
            ],
            [
                'id' => 1743,
                'code' => '465321',
                'prefecture_id' => 46,
                'name_en' => 'Isen-chō',
                'name_jp' => '伊仙町',
            ],
            [
                'id' => 1744,
                'code' => '465330',
                'prefecture_id' => 46,
                'name_en' => 'Wadomari-chō',
                'name_jp' => '和泊町',
            ],
            [
                'id' => 1745,
                'code' => '465348',
                'prefecture_id' => 46,
                'name_en' => 'Chinachō',
                'name_jp' => '知名町',
            ],
            [
                'id' => 1746,
                'code' => '465356',
                'prefecture_id' => 46,
                'name_en' => 'Yoron-chō',
                'name_jp' => '与論町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
