<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_05_Akita_Seeder extends Seeder
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
                'code' => '052019',
                'prefecture_id' => 5,
                'name_en' => 'Akita-shi',
                'name_jp' => '秋田市',
            ],
            [
                'code' => '052027',
                'prefecture_id' => 5,
                'name_en' => 'Noshiro-shi',
                'name_jp' => '能代市',
            ],
            [
                'code' => '052035',
                'prefecture_id' => 5,
                'name_en' => 'Yokote-shi',
                'name_jp' => '横手市',
            ],
            [
                'code' => '052043',
                'prefecture_id' => 5,
                'name_en' => 'Odate-shi',
                'name_jp' => '大館市',
            ],
            [
                'code' => '052060',
                'prefecture_id' => 5,
                'name_en' => 'Oga-shi',
                'name_jp' => '男鹿市',
            ],
            [
                'code' => '052078',
                'prefecture_id' => 5,
                'name_en' => 'Yuzawa-shi',
                'name_jp' => '湯沢市',
            ],
            [
                'code' => '052094',
                'prefecture_id' => 5,
                'name_en' => 'Katsunuma-shi',
                'name_jp' => '鹿角市',
            ],
            [
                'code' => '052108',
                'prefecture_id' => 5,
                'name_en' => 'Yurihonjo-shi',
                'name_jp' => '由利本荘市',
            ],
            [
                'code' => '052116',
                'prefecture_id' => 5,
                'name_en' => 'Katagami-shi',
                'name_jp' => '潟上市',
            ],
            [
                'code' => '052124',
                'prefecture_id' => 5,
                'name_en' => 'Daisen-shi',
                'name_jp' => '大仙市',
            ],
            [
                'code' => '052132',
                'prefecture_id' => 5,
                'name_en' => 'Kitaakita-shi',
                'name_jp' => '北秋田市',
            ],
            [
                'code' => '052141',
                'prefecture_id' => 5,
                'name_en' => 'Nikaho-shi',
                'name_jp' => 'にかほ市',
            ],
            [
                'code' => '052159',
                'prefecture_id' => 5,
                'name_en' => 'Senboku-shi',
                'name_jp' => '仙北市',
            ],
            [
                'code' => '053031',
                'prefecture_id' => 5,
                'name_en' => 'Kosaka-machi',
                'name_jp' => '小坂町',
            ],
            [
                'code' => '053279',
                'prefecture_id' => 5,
                'name_en' => 'Kamikoani-mura',
                'name_jp' => '上小阿仁村',
            ],
            [
                'code' => '053465',
                'prefecture_id' => 5,
                'name_en' => 'Fujisato-machi',
                'name_jp' => '藤里町',
            ],
            [
                'code' => '053481',
                'prefecture_id' => 5,
                'name_en' => 'Mitane-cho',
                'name_jp' => '三種町',
            ],
            [
                'code' => '053490',
                'prefecture_id' => 5,
                'name_en' => 'Happo-cho',
                'name_jp' => '八峰町',
            ],
            [
                'code' => '053619',
                'prefecture_id' => 5,
                'name_en' => 'Gojome-machi',
                'name_jp' => '五城目町',
            ],
            [
                'code' => '053635',
                'prefecture_id' => 5,
                'name_en' => 'Hachirogata-machi',
                'name_jp' => '八郎潟町',
            ],
            [
                'code' => '053660',
                'prefecture_id' => 5,
                'name_en' => 'Ikawa-machi',
                'name_jp' => '井川町',
            ],
            [
                'code' => '053686',
                'prefecture_id' => 5,
                'name_en' => 'Ogata-mura',
                'name_jp' => '大潟村',
            ],
            [
                'code' => '054348',
                'prefecture_id' => 5,
                'name_en' => 'Misato-cho',
                'name_jp' => '美郷町',
            ],
            [
                'code' => '054631',
                'prefecture_id' => 5,
                'name_en' => 'Ugo-machi',
                'name_jp' => '羽後町',
            ],
            [
                'code' => '054640',
                'prefecture_id' => 5,
                'name_en' => 'Higashinaruse-mura',
                'name_jp' => '東成瀬村',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
