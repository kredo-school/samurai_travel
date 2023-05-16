<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_40_Fukuoka_Seeder extends Seeder
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
                'code' => '401005',
                'prefecture_id' => 40,
                'name_en' => 'Kitakyushu-shi',
                'name_jp' => '北九州市',
            ],
            [
                'code' => '401307',
                'prefecture_id' => 40,
                'name_en' => 'Fukuoka-shi',
                'name_jp' => '福岡市',
            ],
            [
                'code' => '402028',
                'prefecture_id' => 40,
                'name_en' => 'Omuta-shi',
                'name_jp' => '大牟田市',
            ],
            [
                'code' => '402036',
                'prefecture_id' => 40,
                'name_en' => 'Kurume-shi',
                'name_jp' => '久留米市',
            ],
            [
                'code' => '402044',
                'prefecture_id' => 40,
                'name_en' => 'Noogata-shi',
                'name_jp' => '直方市',
            ],
            [
                'code' => '402052',
                'prefecture_id' => 40,
                'name_en' => 'Iizuka-shi',
                'name_jp' => '飯塚市',
            ],
            [
                'code' => '402061',
                'prefecture_id' => 40,
                'name_en' => 'Tagawa-shi',
                'name_jp' => '田川市',
            ],
            [
                'code' => '402079',
                'prefecture_id' => 40,
                'name_en' => 'Yanagawa-shi',
                'name_jp' => '柳川市',
            ],
            [
                'code' => '402109',
                'prefecture_id' => 40,
                'name_en' => 'Yame-shi',
                'name_jp' => '八女市',
            ],
            [
                'code' => '402117',
                'prefecture_id' => 40,
                'name_en' => 'Chikugo-shi',
                'name_jp' => '筑後市',
            ],
            [
                'code' => '402125',
                'prefecture_id' => 40,
                'name_en' => 'Ookawa-shi',
                'name_jp' => '大川市',
            ],
            [
                'code' => '402133',
                'prefecture_id' => 40,
                'name_en' => 'Yukuhashi-shi',
                'name_jp' => '行橋市',
            ],
            [
                'code' => '402141',
                'prefecture_id' => 40,
                'name_en' => 'Buzen-shi',
                'name_jp' => '豊前市',
            ],
            [
                'code' => '402150',
                'prefecture_id' => 40,
                'name_en' => 'Nakama-shi',
                'name_jp' => '中間市',
            ],
            [
                'code' => '402168',
                'prefecture_id' => 40,
                'name_en' => 'Ogoori-shi',
                'name_jp' => '小郡市',
            ],
            [
                'code' => '402176',
                'prefecture_id' => 40,
                'name_en' => 'Chikushino-shi',
                'name_jp' => '筑紫野市',
            ],
            [
                'code' => '402184',
                'prefecture_id' => 40,
                'name_en' => 'Kasuga-shi',
                'name_jp' => '春日市',
            ],
            [
                'code' => '402192',
                'prefecture_id' => 40,
                'name_en' => 'Oonodera-shi',
                'name_jp' => '大野城市',
            ],
            [
                'code' => '402206',
                'prefecture_id' => 40,
                'name_en' => 'Munakata-shi',
                'name_jp' => '宗像市',
            ],
            [
                'code' => '402214',
                'prefecture_id' => 40,
                'name_en' => 'Dazaifu-shi',
                'name_jp' => '太宰府市',
            ],
            [
                'code' => '402231',
                'prefecture_id' => 40,
                'name_en' => 'Koga-shi',
                'name_jp' => '古賀市',
            ],
            [
                'code' => '402249',
                'prefecture_id' => 40,
                'name_en' => 'Fukutsu-shi',
                'name_jp' => '福津市',
            ],
            [
                'code' => '402257',
                'prefecture_id' => 40,
                'name_en' => 'Ukiha-shi',
                'name_jp' => 'うきは市',
            ],
            [
                'code' => '402265',
                'prefecture_id' => 40,
                'name_en' => 'Miyawaka-shi',
                'name_jp' => '宮若市',
            ],
            [
                'code' => '402273',
                'prefecture_id' => 40,
                'name_en' => 'Kama-shi',
                'name_jp' => '嘉麻市',
            ],
            [
                'code' => '402281',
                'prefecture_id' => 40,
                'name_en' => 'Asakura-shi',
                'name_jp' => '朝倉市',
            ],
            [
                'code' => '402290',
                'prefecture_id' => 40,
                'name_en' => 'Miyama-shi',
                'name_jp' => 'みやま市',
            ],
            [
                'code' => '402303',
                'prefecture_id' => 40,
                'name_en' => 'Itoshima-shi',
                'name_jp' => '糸島市',
            ],
            [
                'code' => '402311',
                'prefecture_id' => 40,
                'name_en' => 'Nakagawa-shi',
                'name_jp' => '那珂川市',
            ],
            [
                'code' => '403415',
                'prefecture_id' => 40,
                'name_en' => 'Umi-machi',
                'name_jp' => '宇美町',
            ],
            [
                'code' => '403423',
                'prefecture_id' => 40,
                'name_en' => 'Sasaguri-machi',
                'name_jp' => '篠栗町',
            ],
            [
                'code' => '403431',
                'prefecture_id' => 40,
                'name_en' => 'Shime-machi',
                'name_jp' => '志免町',
            ],
            [
                'code' => '403440',
                'prefecture_id' => 40,
                'name_en' => 'Sue-machi',
                'name_jp' => '須恵町',
            ],
            [
                'code' => '403458',
                'prefecture_id' => 40,
                'name_en' => 'Shinguu-machi',
                'name_jp' => '新宮町',
            ],
            [
                'code' => '403482',
                'prefecture_id' => 40,
                'name_en' => 'Hisayama-mamachi',
                'name_jp' => '久山町',
            ],
            [
                'code' => '403491',
                'prefecture_id' => 40,
                'name_en' => 'Kasuya-machi',
                'name_jp' => '粕屋町',
            ],
            [
                'code' => '403814',
                'prefecture_id' => 40,
                'name_en' => 'Ashiya-machi',
                'name_jp' => '芦屋町',
            ],
            [
                'code' => '403822',
                'prefecture_id' => 40,
                'name_en' => 'Mizumaki-machi',
                'name_jp' => '水巻町',
            ],
            [
                'code' => '403831',
                'prefecture_id' => 40,
                'name_en' => 'Okagaki-machi',
                'name_jp' => '岡垣町',
            ],
            [
                'code' => '403849',
                'prefecture_id' => 40,
                'name_en' => 'Onga-chou',
                'name_jp' => '遠賀町',
            ],
            [
                'code' => '404012',
                'prefecture_id' => 40,
                'name_en' => 'Kotake-machi',
                'name_jp' => '小竹町',
            ],
            [
                'code' => '404021',
                'prefecture_id' => 40,
                'name_en' => 'Kurate-machi',
                'name_jp' => '鞍手町',
            ],
            [
                'code' => '404217',
                'prefecture_id' => 40,
                'name_en' => 'Keisen-machi',
                'name_jp' => '桂川町',
            ],
            [
                'code' => '404471',
                'prefecture_id' => 40,
                'name_en' => 'Chikuzen-machi',
                'name_jp' => '筑前町',
            ],
            [
                'code' => '404489',
                'prefecture_id' => 40,
                'name_en' => 'Touhoumura',
                'name_jp' => '東峰村',
            ],
            [
                'code' => '405035',
                'prefecture_id' => 40,
                'name_en' => 'Tachiara-imachi',
                'name_jp' => '大刀洗町',
            ],
            [
                'code' => '405221',
                'prefecture_id' => 40,
                'name_en' => 'Ookki-machi',
                'name_jp' => '大木町',
            ],
            [
                'code' => '405442',
                'prefecture_id' => 40,
                'name_en' => 'Hirokawa-machi',
                'name_jp' => '広川町',
            ],
            [
                'code' => '406015',
                'prefecture_id' => 40,
                'name_en' => 'Kawara-machi',
                'name_jp' => '香春町',
            ],
            [
                'code' => '406023',
                'prefecture_id' => 40,
                'name_en' => 'Soeda-machi',
                'name_jp' => '添田町',
            ],
            [
                'code' => '406040',
                'prefecture_id' => 40,
                'name_en' => 'Itoda-machi',
                'name_jp' => '糸田町',
            ],
            [
                'code' => '406058',
                'prefecture_id' => 40,
                'name_en' => 'Kawasaki-machi',
                'name_jp' => '川崎町',
            ],
            [
                'code' => '406082',
                'prefecture_id' => 40,
                'name_en' => 'Ootou-machi',
                'name_jp' => '大任町',
            ],
            [
                'code' => '406091',
                'prefecture_id' => 40,
                'name_en' => 'Akamuramura',
                'name_jp' => '赤村',
            ],
            [
                'code' => '406104',
                'prefecture_id' => 40,
                'name_en' => 'Fukuchi-machi',
                'name_jp' => '福智町',
            ],
            [
                'code' => '406210',
                'prefecture_id' => 40,
                'name_en' => 'Kanda-machi',
                'name_jp' => '苅田町',
            ],
            [
                'code' => '406252',
                'prefecture_id' => 40,
                'name_en' => 'Miyako-machi',
                'name_jp' => 'みやこ町',
            ],
            [
                'code' => '406422',
                'prefecture_id' => 40,
                'name_en' => 'Yoshitomi-machi',
                'name_jp' => '吉富町',
            ],
            [
                'code' => '406465',
                'prefecture_id' => 40,
                'name_en' => 'Kouge-machi',
                'name_jp' => '上毛町',
            ],
            [
                'code' => '406473',
                'prefecture_id' => 40,
                'name_en' => 'Chikujou-machi',
                'name_jp' => '築上町',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
