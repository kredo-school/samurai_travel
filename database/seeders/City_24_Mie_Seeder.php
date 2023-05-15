<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_24_Mie_Seeder extends Seeder
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
                'id' => 1063,
                'code' => '242012',
                'prefecture_id' => 24,
                'name_en' => 'Tsushi',
                'name_jp' => '津市',
            ],
            [
                'id' => 1064,
                'code' => '242021',
                'prefecture_id' => 24,
                'name_en' => 'Yokaichi-shi',
                'name_jp' => '四日市市',
            ],
            [
                'id' => 1065,
                'code' => '242039',
                'prefecture_id' => 24,
                'name_en' => 'Ise-shi',
                'name_jp' => '伊勢市',
            ],
            [
                'id' => 1066,
                'code' => '242047',
                'prefecture_id' => 24,
                'name_en' => 'Matsusaka-shi',
                'name_jp' => '松阪市',
            ],
            [
                'id' => 1067,
                'code' => '242055',
                'prefecture_id' => 24,
                'name_en' => 'Kuwana-shi',
                'name_jp' => '桑名市',
            ],
            [
                'id' => 1068,
                'code' => '242071',
                'prefecture_id' => 24,
                'name_en' => 'Suzuka-shi',
                'name_jp' => '鈴鹿市',
            ],
            [
                'id' => 1069,
                'code' => '242080',
                'prefecture_id' => 24,
                'name_en' => 'Nabari-shi',
                'name_jp' => '名張市',
            ],
            [
                'id' => 1070,
                'code' => '242098',
                'prefecture_id' => 24,
                'name_en' => 'Owase-shi',
                'name_jp' => '尾鷲市',
            ],
            [
                'id' => 1071,
                'code' => '242101',
                'prefecture_id' => 24,
                'name_en' => 'Kameyama-shi',
                'name_jp' => '亀山市',
            ],
            [
                'id' => 1072,
                'code' => '242110',
                'prefecture_id' => 24,
                'name_en' => 'Toba-shi',
                'name_jp' => '鳥羽市',
            ],
            [
                'id' => 1073,
                'code' => '242128',
                'prefecture_id' => 24,
                'name_en' => 'Kumano-shi',
                'name_jp' => '熊野市',
            ],
            [
                'id' => 1074,
                'code' => '242144',
                'prefecture_id' => 24,
                'name_en' => 'Inabe-shi',
                'name_jp' => 'いなべ市',
            ],
            [
                'id' => 1075,
                'code' => '242152',
                'prefecture_id' => 24,
                'name_en' => 'Shima-shi',
                'name_jp' => '志摩市',
            ],
            [
                'id' => 1076,
                'code' => '242161',
                'prefecture_id' => 24,
                'name_en' => 'Iga-shi',
                'name_jp' => '伊賀市',
            ],
            [
                'id' => 1077,
                'code' => '243035',
                'prefecture_id' => 24,
                'name_en' => 'Kisosaki-cho',
                'name_jp' => '木曽岬町',
            ],
            [
                'id' => 1078,
                'code' => '243248',
                'prefecture_id' => 24,
                'name_en' => 'Toyono-cho',
                'name_jp' => '東員町',
            ],
            [
                'id' => 1079,
                'code' => '243418',
                'prefecture_id' => 24,
                'name_en' => 'Komonno-cho',
                'name_jp' => '菰野町',
            ],
            [
                'id' => 1080,
                'code' => '243434',
                'prefecture_id' => 24,
                'name_en' => 'Asahi-cho',
                'name_jp' => '朝日町',
            ],
            [
                'id' => 1081,
                'code' => '243442',
                'prefecture_id' => 24,
                'name_en' => 'Kawagoe-cho',
                'name_jp' => '川越町',
            ],
            [
                'id' => 1082,
                'code' => '244414',
                'prefecture_id' => 24,
                'name_en' => 'Taki-cho',
                'name_jp' => '多気町',
            ],
            [
                'id' => 1083,
                'code' => '244422',
                'prefecture_id' => 24,
                'name_en' => 'Meiwa-cho',
                'name_jp' => '明和町',
            ],
            [
                'id' => 1084,
                'code' => '244431',
                'prefecture_id' => 24,
                'name_en' => 'Odaicho',
                'name_jp' => '大台町',
            ],
            [
                'id' => 1085,
                'code' => '244619',
                'prefecture_id' => 24,
                'name_en' => 'Tamaki-cho',
                'name_jp' => '玉城町',
            ],
            [
                'id' => 1086,
                'code' => '244708',
                'prefecture_id' => 24,
                'name_en' => 'Watarai-cho',
                'name_jp' => '度会町',
            ],
            [
                'id' => 1087,
                'code' => '244716',
                'prefecture_id' => 24,
                'name_en' => 'Taiki-cho',
                'name_jp' => '大紀町',
            ],
            [
                'id' => 1088,
                'code' => '244724',
                'prefecture_id' => 24,
                'name_en' => 'Minamiise-cho',
                'name_jp' => '南伊勢町',
            ],
            [
                'id' => 1089,
                'code' => '245437',
                'prefecture_id' => 24,
                'name_en' => 'Kihoku-cho',
                'name_jp' => '紀北町',
            ],
            [
                'id' => 1090,
                'code' => '245615',
                'prefecture_id' => 24,
                'name_en' => 'Mihama-cho',
                'name_jp' => '御浜町',
            ],
            [
                'id' => 1091,
                'code' => '245623',
                'prefecture_id' => 24,
                'name_en' => 'Kihou-cho',
                'name_jp' => '紀宝町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
