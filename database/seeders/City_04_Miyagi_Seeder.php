<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_04_Miyagi_Seeder extends Seeder
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
                'id' => 257,
                'code' => '041009',
                'prefecture_id' => 4,
                'name_en' => 'Sendaishi',
                'name_jp' => '仙台市',
            ],
            [
                'id' => 258,
                'code' => '042021',
                'prefecture_id' => 4,
                'name_en' => 'Ishinomaki-shi',
                'name_jp' => '石巻市',
            ],
            [
                'id' => 259,
                'code' => '042030',
                'prefecture_id' => 4,
                'name_en' => 'Shiogama-shi',
                'name_jp' => '塩竈市',
            ],
            [
                'id' => 260,
                'code' => '042056',
                'prefecture_id' => 4,
                'name_en' => 'Kesennuma-shi',
                'name_jp' => '気仙沼市',
            ],
            [
                'id' => 261,
                'code' => '042064',
                'prefecture_id' => 4,
                'name_en' => 'Shiroishi-shi',
                'name_jp' => '白石市',
            ],
            [
                'id' => 262,
                'code' => '042072',
                'prefecture_id' => 4,
                'name_en' => 'Natori-shi',
                'name_jp' => '名取市',
            ],
            [
                'id' => 263,
                'code' => '042081',
                'prefecture_id' => 4,
                'name_en' => 'Kakuda-shi',
                'name_jp' => '角田市',
            ],
            [
                'id' => 264,
                'code' => '042099',
                'prefecture_id' => 4,
                'name_en' => 'Tagajō-shi',
                'name_jp' => '多賀城市',
            ],
            [
                'id' => 265,
                'code' => '042111',
                'prefecture_id' => 4,
                'name_en' => 'Iwanuma-shi',
                'name_jp' => '岩沼市',
            ],
            [
                'id' => 266,
                'code' => '042129',
                'prefecture_id' => 4,
                'name_en' => 'Tome-shi',
                'name_jp' => '登米市',
            ],
            [
                'id' => 267,
                'code' => '042137',
                'prefecture_id' => 4,
                'name_en' => 'Kurihara-shi',
                'name_jp' => '栗原市',
            ],
            [
                'id' => 268,
                'code' => '042145',
                'prefecture_id' => 4,
                'name_en' => 'Higashimatsushima-shi',
                'name_jp' => '東松島市',
            ],
            [
                'id' => 269,
                'code' => '042153',
                'prefecture_id' => 4,
                'name_en' => 'Osaki-shi',
                'name_jp' => '大崎市',
            ],
            [
                'id' => 270,
                'code' => '042161',
                'prefecture_id' => 4,
                'name_en' => 'Tomiyoshi',
                'name_jp' => '富谷市',
            ],
            [
                'id' => 271,
                'code' => '043010',
                'prefecture_id' => 4,
                'name_en' => 'Zaō-machi',
                'name_jp' => '蔵王町',
            ],
            [
                'id' => 272,
                'code' => '043028',
                'prefecture_id' => 4,
                'name_en' => 'Shichikashūkumachi',
                'name_jp' => '七ヶ宿町',
            ],
            [
                'id' => 273,
                'code' => '043214',
                'prefecture_id' => 4,
                'name_en' => 'Ogawaramachi',
                'name_jp' => '大河原町',
            ],
            [
                'id' => 274,
                'code' => '043222',
                'prefecture_id' => 4,
                'name_en' => 'Murata-machi',
                'name_jp' => '村田町',
            ],
            [
                'id' => 275,
                'code' => '043231',
                'prefecture_id' => 4,
                'name_en' => 'Shibata-machi',
                'name_jp' => '柴田町',
            ],
            [
                'id' => 276,
                'code' => '043249',
                'prefecture_id' => 4,
                'name_en' => 'Kawasaki-machi',
                'name_jp' => '川崎町',
            ],
            [
                'id' => 277,
                'code' => '043419',
                'prefecture_id' => 4,
                'name_en' => 'Marumori-machi',
                'name_jp' => '丸森町',
            ],
            [
                'id' => 278,
                'code' => '043613',
                'prefecture_id' => 4,
                'name_en' => 'Wataricho',
                'name_jp' => '亘理町',
            ],
            [
                'id' => 279,
                'code' => '043621',
                'prefecture_id' => 4,
                'name_en' => 'Yamamoto-cho',
                'name_jp' => '山元町',
            ],
            [
                'id' => 280,
                'code' => '044016',
                'prefecture_id' => 4,
                'name_en' => 'Matsushima-machi',
                'name_jp' => '松島町',
            ],
            [
                'id' => 281,
                'code' => '044041',
                'prefecture_id' => 4,
                'name_en' => 'Shichigahama-machi',
                'name_jp' => '七ヶ浜町',
            ],
            [
                'id' => 282,
                'code' => '044067',
                'prefecture_id' => 4,
                'name_en' => 'Rifu-cho',
                'name_jp' => '利府町',
            ],
            [
                'id' => 283,
                'code' => '044211',
                'prefecture_id' => 4,
                'name_en' => 'Taiwa-cho',
                'name_jp' => '大和町',
            ],
            [
                'id' => 284,
                'code' => '044229',
                'prefecture_id' => 4,
                'name_en' => 'Ōsato-cho',
                'name_jp' => '大郷町',
            ],
            [
                'id' => 285,
                'code' => '044245',
                'prefecture_id' => 4,
                'name_en' => 'Ōhiramura',
                'name_jp' => '大衡村',
            ],
            [
                'id' => 286,
                'code' => '044440',
                'prefecture_id' => 4,
                'name_en' => 'Shikama-chō',
                'name_jp' => '色麻町',
            ],
            [
                'id' => 287,
                'code' => '044458',
                'prefecture_id' => 4,
                'name_en' => 'Kamimachi',
                'name_jp' => '加美町',
            ],
            [
                'id' => 288,
                'code' => '045012',
                'prefecture_id' => 4,
                'name_en' => 'Wakuya-cho',
                'name_jp' => '涌谷町',
            ],
            [
                'id' => 289,
                'code' => '045055',
                'prefecture_id' => 4,
                'name_en' => 'Misato-machi',
                'name_jp' => '美里町',
            ],
            [
                'id' => 290,
                'code' => '045811',
                'prefecture_id' => 4,
                'name_en' => 'Onagawa-cho',
                'name_jp' => '女川町',
            ],
            [
                'id' => 291,
                'code' => '046060',
                'prefecture_id' => 4,
                'name_en' => 'Minamisanriku-cho',
                'name_jp' => '南三陸町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
