<?php

namespace Database\Seeders;

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
        $table_name = 'cities';
    
        $data = [
            [
                'id' => 293,
                'code' => '052019',
                'prefecture_id' => 5,
                'name_en' => 'Akita-shi',
                'name_jp' => '秋田市',
            ],
            [
                'id' => 294,
                'code' => '052027',
                'prefecture_id' => 5,
                'name_en' => 'Noshiro-shi',
                'name_jp' => '能代市',
            ],
            [
                'id' => 295,
                'code' => '052035',
                'prefecture_id' => 5,
                'name_en' => 'Yokote-shi',
                'name_jp' => '横手市',
            ],
            [
                'id' => 296,
                'code' => '052043',
                'prefecture_id' => 5,
                'name_en' => 'Odate-shi',
                'name_jp' => '大館市',
            ],
            [
                'id' => 297,
                'code' => '052060',
                'prefecture_id' => 5,
                'name_en' => 'Oga-shi',
                'name_jp' => '男鹿市',
            ],
            [
                'id' => 298,
                'code' => '052078',
                'prefecture_id' => 5,
                'name_en' => 'Yuzawa-shi',
                'name_jp' => '湯沢市',
            ],
            [
                'id' => 299,
                'code' => '052094',
                'prefecture_id' => 5,
                'name_en' => 'Katsunuma-shi',
                'name_jp' => '鹿角市',
            ],
            [
                'id' => 300,
                'code' => '052108',
                'prefecture_id' => 5,
                'name_en' => 'Yurihonjo-shi',
                'name_jp' => '由利本荘市',
            ],
            [
                'id' => 301,
                'code' => '052116',
                'prefecture_id' => 5,
                'name_en' => 'Katagami-shi',
                'name_jp' => '潟上市',
            ],
            [
                'id' => 302,
                'code' => '052124',
                'prefecture_id' => 5,
                'name_en' => 'Daisen-shi',
                'name_jp' => '大仙市',
            ],
            [
                'id' => 303,
                'code' => '052132',
                'prefecture_id' => 5,
                'name_en' => 'Kitaakita-shi',
                'name_jp' => '北秋田市',
            ],
            [
                'id' => 304,
                'code' => '052141',
                'prefecture_id' => 5,
                'name_en' => 'Nikaho-shi',
                'name_jp' => 'にかほ市',
            ],
            [
                'id' => 305,
                'code' => '052159',
                'prefecture_id' => 5,
                'name_en' => 'Senboku-shi',
                'name_jp' => '仙北市',
            ],
            [
                'id' => 306,
                'code' => '053031',
                'prefecture_id' => 5,
                'name_en' => 'Kosaka-machi',
                'name_jp' => '小坂町',
            ],
            [
                'id' => 307,
                'code' => '053279',
                'prefecture_id' => 5,
                'name_en' => 'Kamikoani-mura',
                'name_jp' => '上小阿仁村',
            ],
            [
                'id' => 308,
                'code' => '053465',
                'prefecture_id' => 5,
                'name_en' => 'Fujisato-machi',
                'name_jp' => '藤里町',
            ],
            [
                'id' => 309,
                'code' => '053481',
                'prefecture_id' => 5,
                'name_en' => 'Mitane-cho',
                'name_jp' => '三種町',
            ],
            [
                'id' => 310,
                'code' => '053490',
                'prefecture_id' => 5,
                'name_en' => 'Happo-cho',
                'name_jp' => '八峰町',
            ],
            [
                'id' => 311,
                'code' => '053619',
                'prefecture_id' => 5,
                'name_en' => 'Gojome-machi',
                'name_jp' => '五城目町',
            ],
            [
                'id' => 312,
                'code' => '053635',
                'prefecture_id' => 5,
                'name_en' => 'Hachirogata-machi',
                'name_jp' => '八郎潟町',
            ],
            [
                'id' => 313,
                'code' => '053660',
                'prefecture_id' => 5,
                'name_en' => 'Ikawa-machi',
                'name_jp' => '井川町',
            ],
            [
                'id' => 314,
                'code' => '053686',
                'prefecture_id' => 5,
                'name_en' => 'Ogata-mura',
                'name_jp' => '大潟村',
            ],
            [
                'id' => 315,
                'code' => '054348',
                'prefecture_id' => 5,
                'name_en' => 'Misato-cho',
                'name_jp' => '美郷町',
            ],
            [
                'id' => 316,
                'code' => '054631',
                'prefecture_id' => 5,
                'name_en' => 'Ugo-machi',
                'name_jp' => '羽後町',
            ],
            [
                'id' => 317,
                'code' => '054640',
                'prefecture_id' => 5,
                'name_en' => 'Higashinaruse-mura',
                'name_jp' => '東成瀬村',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
