<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_13_Tokyo_Seeder extends Seeder
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
                'code' => '131016',
                'prefecture_id' => 13,
                'name_en' => 'Chiyo-daku',
                'name_jp' => '千代田区',
            ],
            [
                'code' => '131024',
                'prefecture_id' => 13,
                'name_en' => 'Chuo-oku',
                'name_jp' => '中央区',
            ],
            [
                'code' => '131032',
                'prefecture_id' => 13,
                'name_en' => 'Minato-ku',
                'name_jp' => '港区',
            ],
            [
                'code' => '131041',
                'prefecture_id' => 13,
                'name_en' => 'Shinjuku-ku',
                'name_jp' => '新宿区',
            ],
            [
                'code' => '131059',
                'prefecture_id' => 13,
                'name_en' => 'Bunkyo-ku',
                'name_jp' => '文京区',
            ],
            [
                'code' => '131067',
                'prefecture_id' => 13,
                'name_en' => 'Chiyoda-ku',
                'name_jp' => '台東区',
            ],
            [
                'code' => '131075',
                'prefecture_id' => 13,
                'name_en' => 'Sumida-ku',
                'name_jp' => '墨田区',
            ],
            [
                'code' => '131083',
                'prefecture_id' => 13,
                'name_en' => 'Koto-ku',
                'name_jp' => '江東区',
            ],
            [
                'code' => '131091',
                'prefecture_id' => 13,
                'name_en' => 'Shinagawa-ku',
                'name_jp' => '品川区',
            ],
            [
                'code' => '131105',
                'prefecture_id' => 13,
                'name_en' => 'Meguro-ku',
                'name_jp' => '目黒区',
            ],
            [
                'code' => '131113',
                'prefecture_id' => 13,
                'name_en' => 'Ota-ku',
                'name_jp' => '大田区',
            ],
            [
                'code' => '131121',
                'prefecture_id' => 13,
                'name_en' => 'Setagaya-ku',
                'name_jp' => '世田谷区',
            ],
            [
                'code' => '131130',
                'prefecture_id' => 13,
                'name_en' => 'Shibuya-ku',
                'name_jp' => '渋谷区',
            ],
            [
                'code' => '131148',
                'prefecture_id' => 13,
                'name_en' => 'Nakano-ku',
                'name_jp' => '中野区',
            ],
            [
                'code' => '131156',
                'prefecture_id' => 13,
                'name_en' => 'Suginami-ku',
                'name_jp' => '杉並区',
            ],
            [
                'code' => '131164',
                'prefecture_id' => 13,
                'name_en' => 'Toshima-ku',
                'name_jp' => '豊島区',
            ],
            [
                'code' => '131172',
                'prefecture_id' => 13,
                'name_en' => 'Kitaku',
                'name_jp' => '北区',
            ],
            [
                'code' => '131181',
                'prefecture_id' => 13,
                'name_en' => 'Arakawaku',
                'name_jp' => '荒川区',
            ],
            [
                'code' => '131199',
                'prefecture_id' => 13,
                'name_en' => 'Itabashiku',
                'name_jp' => '板橋区',
            ],
            [
                'code' => '131202',
                'prefecture_id' => 13,
                'name_en' => 'Nerima-ku',
                'name_jp' => '練馬区',
            ],
            [
                'code' => '131211',
                'prefecture_id' => 13,
                'name_en' => 'Adachiku',
                'name_jp' => '足立区',
            ],
            [
                'code' => '131229',
                'prefecture_id' => 13,
                'name_en' => 'Katsushikaku',
                'name_jp' => '葛飾区',
            ],
            [
                'code' => '131237',
                'prefecture_id' => 13,
                'name_en' => 'Edogawaku',
                'name_jp' => '江戸川区',
            ],
            [
                'code' => '132012',
                'prefecture_id' => 13,
                'name_en' => 'Hachioji-shi',
                'name_jp' => '八王子市',
            ],
            [
                'code' => '132021',
                'prefecture_id' => 13,
                'name_en' => 'Tachikawa-shi',
                'name_jp' => '立川市',
            ],
            [
                'code' => '132039',
                'prefecture_id' => 13,
                'name_en' => 'Musashino-shi',
                'name_jp' => '武蔵野市',
            ],
            [
                'code' => '132047',
                'prefecture_id' => 13,
                'name_en' => 'Mitaka-shi',
                'name_jp' => '三鷹市',
            ],
            [
                'code' => '132055',
                'prefecture_id' => 13,
                'name_en' => 'Oume-shi',
                'name_jp' => '青梅市',
            ],
            [
                'code' => '132063',
                'prefecture_id' => 13,
                'name_en' => 'Fuchu-shi',
                'name_jp' => '府中市',
            ],
            [
                'code' => '132071',
                'prefecture_id' => 13,
                'name_en' => 'Akishima-shi',
                'name_jp' => '昭島市',
            ],
            [
                'code' => '132080',
                'prefecture_id' => 13,
                'name_en' => 'Chofu-shi',
                'name_jp' => '調布市',
            ],
            [
                'code' => '132098',
                'prefecture_id' => 13,
                'name_en' => 'Machida-shi',
                'name_jp' => '町田市',
            ],
            [
                'code' => '132101',
                'prefecture_id' => 13,
                'name_en' => 'Koganei-shi',
                'name_jp' => '小金井市',
            ],
            [
                'code' => '132110',
                'prefecture_id' => 13,
                'name_en' => 'Kodaira-shi',
                'name_jp' => '小平市',
            ],
            [
                'code' => '132128',
                'prefecture_id' => 13,
                'name_en' => 'Hinode-machi',
                'name_jp' => '日野市',
            ],
            [
                'code' => '132136',
                'prefecture_id' => 13,
                'name_en' => 'Higashimurayama-shi',
                'name_jp' => '東村山市',
            ],
            [
                'code' => '132144',
                'prefecture_id' => 13,
                'name_en' => 'Kokubunji-shi',
                'name_jp' => '国分寺市',
            ],
            [
                'code' => '132152',
                'prefecture_id' => 13,
                'name_en' => 'Kunitachi-shi',
                'name_jp' => '国立市',
            ],
            [
                'code' => '132187',
                'prefecture_id' => 13,
                'name_en' => 'Fussa-shi',
                'name_jp' => '福生市',
            ],
            [
                'code' => '132195',
                'prefecture_id' => 13,
                'name_en' => 'Komaeshi',
                'name_jp' => '狛江市',
            ],
            [
                'code' => '132209',
                'prefecture_id' => 13,
                'name_en' => 'Higashiyamato-shi',
                'name_jp' => '東大和市',
            ],
            [
                'code' => '132217',
                'prefecture_id' => 13,
                'name_en' => 'Kiyose-shi',
                'name_jp' => '清瀬市',
            ],
            [
                'code' => '132225',
                'prefecture_id' => 13,
                'name_en' => 'Higashikurume-shi',
                'name_jp' => '東久留米市',
            ],
            [
                'code' => '132233',
                'prefecture_id' => 13,
                'name_en' => 'Musashimurayama-shi',
                'name_jp' => '武蔵村山市',
            ],
            [
                'code' => '132241',
                'prefecture_id' => 13,
                'name_en' => 'Tamashima',
                'name_jp' => '多摩市',
            ],
            [
                'code' => '132250',
                'prefecture_id' => 13,
                'name_en' => 'Inagi-shi',
                'name_jp' => '稲城市',
            ],
            [
                'code' => '132276',
                'prefecture_id' => 13,
                'name_en' => 'Hamura-shi',
                'name_jp' => '羽村市',
            ],
            [
                'code' => '132284',
                'prefecture_id' => 13,
                'name_en' => 'Akiruno-shi',
                'name_jp' => 'あきる野市',
            ],
            [
                'code' => '132292',
                'prefecture_id' => 13,
                'name_en' => 'Nishitokyo-shi',
                'name_jp' => '西東京市',
            ],
            [
                'code' => '133035',
                'prefecture_id' => 13,
                'name_en' => 'Mizumoto-machi',
                'name_jp' => '瑞穂町',
            ],
            [
                'code' => '133051',
                'prefecture_id' => 13,
                'name_en' => 'Hinode-machi',
                'name_jp' => '日の出町',
            ],
            [
                'code' => '133078',
                'prefecture_id' => 13,
                'name_en' => 'Hinoharamura',
                'name_jp' => '檜原村',
            ],
            [
                'code' => '133086',
                'prefecture_id' => 13,
                'name_en' => 'Oktama-machi',
                'name_jp' => '奥多摩町',
            ],
            [
                'code' => '133612',
                'prefecture_id' => 13,
                'name_en' => 'Oshima-machi',
                'name_jp' => '大島町',
            ],
            [
                'code' => '133621',
                'prefecture_id' => 13,
                'name_en' => 'Toshima-mura',
                'name_jp' => '利島村',
            ],
            [
                'code' => '133639',
                'prefecture_id' => 13,
                'name_en' => 'Nii-jima-mura',
                'name_jp' => '新島村',
            ],
            [
                'code' => '133647',
                'prefecture_id' => 13,
                'name_en' => 'Kouzushima-mura',
                'name_jp' => '神津島村',
            ],
            [
                'code' => '133817',
                'prefecture_id' => 13,
                'name_en' => 'Miyake-mura',
                'name_jp' => '三宅村',
            ],
            [
                'code' => '133825',
                'prefecture_id' => 13,
                'name_en' => 'Mikurajima-mura',
                'name_jp' => '御蔵島村',
            ],
            [
                'code' => '134015',
                'prefecture_id' => 13,
                'name_en' => 'Hachijojima-machi',
                'name_jp' => '八丈町',
            ],
            [
                'code' => '134023',
                'prefecture_id' => 13,
                'name_en' => 'Aogashima-mura',
                'name_jp' => '青ヶ島村',
            ],
            [
                'code' => '134210',
                'prefecture_id' => 13,
                'name_en' => 'Ogasawara-mura',
                'name_jp' => '小笠原村',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
