<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_21_Gifu_Seeder extends Seeder
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
                'code' => '212016',
                'prefecture_id' => 21,
                'name_en' => 'Gifu-shi',
                'name_jp' => '岐阜市',
            ],
            [
                'code' => '212024',
                'prefecture_id' => 21,
                'name_en' => 'Ogaki-shi',
                'name_jp' => '大垣市',
            ],
            [
                'code' => '212032',
                'prefecture_id' => 21,
                'name_en' => 'Takayama-shi',
                'name_jp' => '高山市',
            ],
            [
                'code' => '212041',
                'prefecture_id' => 21,
                'name_en' => 'Tajimi-shi',
                'name_jp' => '多治見市',
            ],
            [
                'code' => '212059',
                'prefecture_id' => 21,
                'name_en' => 'Seki-shi',
                'name_jp' => '関市',
            ],
            [
                'code' => '212067',
                'prefecture_id' => 21,
                'name_en' => 'Nakatsugawa-shi',
                'name_jp' => '中津川市',
            ],
            [
                'code' => '212075',
                'prefecture_id' => 21,
                'name_en' => 'Mino-shi',
                'name_jp' => '美濃市',
            ],
            [
                'code' => '212083',
                'prefecture_id' => 21,
                'name_en' => 'Mizunami-shi',
                'name_jp' => '瑞浪市',
            ],
            [
                'code' => '212091',
                'prefecture_id' => 21,
                'name_en' => 'Hashima-shi',
                'name_jp' => '羽島市',
            ],
            [
                'code' => '212105',
                'prefecture_id' => 21,
                'name_en' => 'Ena-shi',
                'name_jp' => '恵那市',
            ],
            [
                'code' => '212113',
                'prefecture_id' => 21,
                'name_en' => 'Minokamo-shi',
                'name_jp' => '美濃加茂市',
            ],
            [
                'code' => '212121',
                'prefecture_id' => 21,
                'name_en' => 'Toki-shi',
                'name_jp' => '土岐市',
            ],
            [
                'code' => '212130',
                'prefecture_id' => 21,
                'name_en' => 'Kakamigahara-shi',
                'name_jp' => '各務原市',
            ],
            [
                'code' => '212148',
                'prefecture_id' => 21,
                'name_en' => 'Kani-shi',
                'name_jp' => '可児市',
            ],
            [
                'code' => '212156',
                'prefecture_id' => 21,
                'name_en' => 'Yamagata-shi',
                'name_jp' => '山県市',
            ],
            [
                'code' => '212164',
                'prefecture_id' => 21,
                'name_en' => 'Mizunami-shi',
                'name_jp' => '瑞穂市',
            ],
            [
                'code' => '212172',
                'prefecture_id' => 21,
                'name_en' => 'Hida-shi',
                'name_jp' => '飛騨市',
            ],
            [
                'code' => '212181',
                'prefecture_id' => 21,
                'name_en' => 'Motosu-shi',
                'name_jp' => '本巣市',
            ],
            [
                'code' => '212199',
                'prefecture_id' => 21,
                'name_en' => 'Gujo-shi',
                'name_jp' => '郡上市',
            ],
            [
                'code' => '212202',
                'prefecture_id' => 21,
                'name_en' => 'Gero-shi',
                'name_jp' => '下呂市',
            ],
            [
                'code' => '212211',
                'prefecture_id' => 21,
                'name_en' => 'Kaizu-shi',
                'name_jp' => '海津市',
            ],
            [
                'code' => '213021',
                'prefecture_id' => 21,
                'name_en' => 'Ginan-cho',
                'name_jp' => '岐南町',
            ],
            [
                'code' => '213039',
                'prefecture_id' => 21,
                'name_en' => 'Kasamatsu-cho',
                'name_jp' => '笠松町',
            ],
            [
                'code' => '213411',
                'prefecture_id' => 21,
                'name_en' => 'Yorozu-cho',
                'name_jp' => '養老町',
            ],
            [
                'code' => '213616',
                'prefecture_id' => 21,
                'name_en' => 'Tari-cho',
                'name_jp' => '垂井町',
            ],
            [
                'code' => '213624',
                'prefecture_id' => 21,
                'name_en' => 'Sekigahara-cho',
                'name_jp' => '関ケ原町',
            ],
            [
                'code' => '213811',
                'prefecture_id' => 21,
                'name_en' => 'Godo-cho',
                'name_jp' => '神戸町',
            ],
            [
                'code' => '213829',
                'prefecture_id' => 21,
                'name_en' => 'Wanouchi-cho',
                'name_jp' => '輪之内町',
            ],
            [
                'code' => '213837',
                'prefecture_id' => 21,
                'name_en' => 'Anpachi-cho',
                'name_jp' => '安八町',
            ],
            [
                'code' => '214019',
                'prefecture_id' => 21,
                'name_en' => 'Ibigawa-cho',
                'name_jp' => '揖斐川町',
            ],
            [
                'code' => '214035',
                'prefecture_id' => 21,
                'name_en' => 'Ono-cho',
                'name_jp' => '大野町',
            ],
            [
                'code' => '214043',
                'prefecture_id' => 21,
                'name_en' => 'Ikedacho',
                'name_jp' => '池田町',
            ],
            [
                'code' => '214213',
                'prefecture_id' => 21,
                'name_en' => 'Kitagata-cho',
                'name_jp' => '北方町',
            ],
            [
                'code' => '215015',
                'prefecture_id' => 21,
                'name_en' => 'Sakahogi-cho',
                'name_jp' => '坂祝町',
            ],
            [
                'code' => '215023',
                'prefecture_id' => 21,
                'name_en' => 'Tomika-cho',
                'name_jp' => '富加町',
            ],
            [
                'code' => '215031',
                'prefecture_id' => 21,
                'name_en' => 'Kawabe-cho',
                'name_jp' => '川辺町',
            ],
            [
                'code' => '215040',
                'prefecture_id' => 21,
                'name_en' => 'Hichiso-cho',
                'name_jp' => '七宗町',
            ],
            [
                'code' => '215058',
                'prefecture_id' => 21,
                'name_en' => 'Yaotsu-cho',
                'name_jp' => '八百津町',
            ],
            [
                'code' => '215066',
                'prefecture_id' => 21,
                'name_en' => 'Shirakawa-cho',
                'name_jp' => '白川町',
            ],
            [
                'code' => '215074',
                'prefecture_id' => 21,
                'name_en' => 'Higashi-Shirakawa-mura',
                'name_jp' => '東白川村',
            ],
            [
                'code' => '215210',
                'prefecture_id' => 21,
                'name_en' => 'Mitake-cho',
                'name_jp' => '御嵩町',
            ],
            [
                'code' => '216046',
                'prefecture_id' => 21,
                'name_en' => 'Shirakawamura',
                'name_jp' => '白川村',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
