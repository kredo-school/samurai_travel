<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_19_Yamanashi_Seeder extends Seeder
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
                'id' => 823,
                'code' => '192015',
                'prefecture_id' => 19,
                'name_en' => 'Koufu-shi',
                'name_jp' => '甲府市',
            ],
            [
                'id' => 824,
                'code' => '192023',
                'prefecture_id' => 19,
                'name_en' => 'Fujiyoshida-shi',
                'name_jp' => '富士吉田市',
            ],
            [
                'id' => 825,
                'code' => '192040',
                'prefecture_id' => 19,
                'name_en' => 'Tsuru-shi',
                'name_jp' => '都留市',
            ],
            [
                'id' => 826,
                'code' => '192058',
                'prefecture_id' => 19,
                'name_en' => 'Yamanashi-shi',
                'name_jp' => '山梨市',
            ],
            [
                'id' => 827,
                'code' => '192066',
                'prefecture_id' => 19,
                'name_en' => 'Otsuki-shi',
                'name_jp' => '大月市',
            ],
            [
                'id' => 828,
                'code' => '192074',
                'prefecture_id' => 19,
                'name_en' => 'Nirasaki-shi',
                'name_jp' => '韮崎市',
            ],
            [
                'id' => 829,
                'code' => '192082',
                'prefecture_id' => 19,
                'name_en' => 'Minami-Alps-shi',
                'name_jp' => '南アルプス市',
            ],
            [
                'id' => 830,
                'code' => '192091',
                'prefecture_id' => 19,
                'name_en' => 'Hokuto-shi',
                'name_jp' => '北杜市',
            ],
            [
                'id' => 831,
                'code' => '192104',
                'prefecture_id' => 19,
                'name_en' => 'Kai-shi',
                'name_jp' => '甲斐市',
            ],
            [
                'id' => 832,
                'code' => '192112',
                'prefecture_id' => 19,
                'name_en' => 'Fuefuki-shi',
                'name_jp' => '笛吹市',
            ],
            [
                'id' => 833,
                'code' => '192121',
                'prefecture_id' => 19,
                'name_en' => 'Uenohara-shi',
                'name_jp' => '上野原市',
            ],
            [
                'id' => 834,
                'code' => '192139',
                'prefecture_id' => 19,
                'name_en' => 'Koshu-shi',
                'name_jp' => '甲州市',
            ],
            [
                'id' => 835,
                'code' => '192147',
                'prefecture_id' => 19,
                'name_en' => 'Chuo-ku-shi',
                'name_jp' => '中央市',
            ],
            [
                'id' => 836,
                'code' => '193461',
                'prefecture_id' => 19,
                'name_en' => 'Ichikawamisato-cho',
                'name_jp' => '市川三郷町',
            ],
            [
                'id' => 837,
                'code' => '193640',
                'prefecture_id' => 19,
                'name_en' => 'Hayakawa-cho',
                'name_jp' => '早川町',
            ],
            [
                'id' => 838,
                'code' => '193658',
                'prefecture_id' => 19,
                'name_en' => 'Minobu-cho',
                'name_jp' => '身延町',
            ],
            [
                'id' => 839,
                'code' => '193666',
                'prefecture_id' => 19,
                'name_en' => 'Nanbu-cho',
                'name_jp' => '南部町',
            ],
            [
                'id' => 840,
                'code' => '193682',
                'prefecture_id' => 19,
                'name_en' => 'Fujikawaguchiko-machi',
                'name_jp' => '富士川町',
            ],
            [
                'id' => 841,
                'code' => '193844',
                'prefecture_id' => 19,
                'name_en' => 'Showa-cho',
                'name_jp' => '昭和町',
            ],
            [
                'id' => 842,
                'code' => '194221',
                'prefecture_id' => 19,
                'name_en' => 'Doshi-mura',
                'name_jp' => '道志村',
            ],
            [
                'id' => 843,
                'code' => '194239',
                'prefecture_id' => 19,
                'name_en' => 'Nishikatsura-cho',
                'name_jp' => '西桂町',
            ],
            [
                'id' => 844,
                'code' => '194247',
                'prefecture_id' => 19,
                'name_en' => 'Oshino-mura',
                'name_jp' => '忍野村',
            ],
            [
                'id' => 845,
                'code' => '194255',
                'prefecture_id' => 19,
                'name_en' => 'Yamanakako-mura',
                'name_jp' => '山中湖村',
            ],
            [
                'id' => 846,
                'code' => '194298',
                'prefecture_id' => 19,
                'name_en' => 'Narusawa-mura',
                'name_jp' => '鳴沢村',
            ],
            [
                'id' => 847,
                'code' => '194301',
                'prefecture_id' => 19,
                'name_en' => 'Fujikawaguchiko-gochi-koma-machi',
                'name_jp' => '富士河口湖町',
            ],
            [
                'id' => 848,
                'code' => '194425',
                'prefecture_id' => 19,
                'name_en' => 'Kosuge-mura',
                'name_jp' => '小菅村',
            ],
            [
                'id' => 849,
                'code' => '194433',
                'prefecture_id' => 19,
                'name_en' => 'Tabayama-mura',
                'name_jp' => '丹波山村',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
