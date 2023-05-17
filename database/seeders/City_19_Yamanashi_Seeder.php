<?php

namespace Database\Seeders;

use App\Models\City;
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
        $data = collect([
            [
                'code' => '192015',
                'prefecture_id' => 19,
                'name_en' => 'Koufu-shi',
                'name_jp' => '甲府市',
            ],
            [
                'code' => '192023',
                'prefecture_id' => 19,
                'name_en' => 'Fujiyoshida-shi',
                'name_jp' => '富士吉田市',
            ],
            [
                'code' => '192040',
                'prefecture_id' => 19,
                'name_en' => 'Tsuru-shi',
                'name_jp' => '都留市',
            ],
            [
                'code' => '192058',
                'prefecture_id' => 19,
                'name_en' => 'Yamanashi-shi',
                'name_jp' => '山梨市',
            ],
            [
                'code' => '192066',
                'prefecture_id' => 19,
                'name_en' => 'Otsuki-shi',
                'name_jp' => '大月市',
            ],
            [
                'code' => '192074',
                'prefecture_id' => 19,
                'name_en' => 'Nirasaki-shi',
                'name_jp' => '韮崎市',
            ],
            [
                'code' => '192082',
                'prefecture_id' => 19,
                'name_en' => 'Minami-Alps-shi',
                'name_jp' => '南アルプス市',
            ],
            [
                'code' => '192091',
                'prefecture_id' => 19,
                'name_en' => 'Hokuto-shi',
                'name_jp' => '北杜市',
            ],
            [
                'code' => '192104',
                'prefecture_id' => 19,
                'name_en' => 'Kai-shi',
                'name_jp' => '甲斐市',
            ],
            [
                'code' => '192112',
                'prefecture_id' => 19,
                'name_en' => 'Fuefuki-shi',
                'name_jp' => '笛吹市',
            ],
            [
                'code' => '192121',
                'prefecture_id' => 19,
                'name_en' => 'Uenohara-shi',
                'name_jp' => '上野原市',
            ],
            [
                'code' => '192139',
                'prefecture_id' => 19,
                'name_en' => 'Koshu-shi',
                'name_jp' => '甲州市',
            ],
            [
                'code' => '192147',
                'prefecture_id' => 19,
                'name_en' => 'Chuo-ku-shi',
                'name_jp' => '中央市',
            ],
            [
                'code' => '193461',
                'prefecture_id' => 19,
                'name_en' => 'Ichikawamisato-cho',
                'name_jp' => '市川三郷町',
            ],
            [
                'code' => '193640',
                'prefecture_id' => 19,
                'name_en' => 'Hayakawa-cho',
                'name_jp' => '早川町',
            ],
            [
                'code' => '193658',
                'prefecture_id' => 19,
                'name_en' => 'Minobu-cho',
                'name_jp' => '身延町',
            ],
            [
                'code' => '193666',
                'prefecture_id' => 19,
                'name_en' => 'Nanbu-cho',
                'name_jp' => '南部町',
            ],
            [
                'code' => '193682',
                'prefecture_id' => 19,
                'name_en' => 'Fujikawaguchiko-machi',
                'name_jp' => '富士川町',
            ],
            [
                'code' => '193844',
                'prefecture_id' => 19,
                'name_en' => 'Showa-cho',
                'name_jp' => '昭和町',
            ],
            [
                'code' => '194221',
                'prefecture_id' => 19,
                'name_en' => 'Doshi-mura',
                'name_jp' => '道志村',
            ],
            [
                'code' => '194239',
                'prefecture_id' => 19,
                'name_en' => 'Nishikatsura-cho',
                'name_jp' => '西桂町',
            ],
            [
                'code' => '194247',
                'prefecture_id' => 19,
                'name_en' => 'Oshino-mura',
                'name_jp' => '忍野村',
            ],
            [
                'code' => '194255',
                'prefecture_id' => 19,
                'name_en' => 'Yamanakako-mura',
                'name_jp' => '山中湖村',
            ],
            [
                'code' => '194298',
                'prefecture_id' => 19,
                'name_en' => 'Narusawa-mura',
                'name_jp' => '鳴沢村',
            ],
            [
                'code' => '194301',
                'prefecture_id' => 19,
                'name_en' => 'Fujikawaguchiko-gochi-koma-machi',
                'name_jp' => '富士河口湖町',
            ],
            [
                'code' => '194425',
                'prefecture_id' => 19,
                'name_en' => 'Kosuge-mura',
                'name_jp' => '小菅村',
            ],
            [
                'code' => '194433',
                'prefecture_id' => 19,
                'name_en' => 'Tabayama-mura',
                'name_jp' => '丹波山村',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
