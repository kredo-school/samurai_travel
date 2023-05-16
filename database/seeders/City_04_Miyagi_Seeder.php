<?php

namespace Database\Seeders;

use App\Models\City;
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
        $data = collect([
            [
                'code' => '041009',
                'prefecture_id' => 4,
                'name_en' => 'Sendaishi',
                'name_jp' => '仙台市',
            ],
            [
                'code' => '042021',
                'prefecture_id' => 4,
                'name_en' => 'Ishinomaki-shi',
                'name_jp' => '石巻市',
            ],
            [
                'code' => '042030',
                'prefecture_id' => 4,
                'name_en' => 'Shiogama-shi',
                'name_jp' => '塩竈市',
            ],
            [
                'code' => '042056',
                'prefecture_id' => 4,
                'name_en' => 'Kesennuma-shi',
                'name_jp' => '気仙沼市',
            ],
            [
                'code' => '042064',
                'prefecture_id' => 4,
                'name_en' => 'Shiroishi-shi',
                'name_jp' => '白石市',
            ],
            [
                'code' => '042072',
                'prefecture_id' => 4,
                'name_en' => 'Natori-shi',
                'name_jp' => '名取市',
            ],
            [
                'code' => '042081',
                'prefecture_id' => 4,
                'name_en' => 'Kakuda-shi',
                'name_jp' => '角田市',
            ],
            [
                'code' => '042099',
                'prefecture_id' => 4,
                'name_en' => 'Tagajō-shi',
                'name_jp' => '多賀城市',
            ],
            [
                'code' => '042111',
                'prefecture_id' => 4,
                'name_en' => 'Iwanuma-shi',
                'name_jp' => '岩沼市',
            ],
            [
                'code' => '042129',
                'prefecture_id' => 4,
                'name_en' => 'Tome-shi',
                'name_jp' => '登米市',
            ],
            [
                'code' => '042137',
                'prefecture_id' => 4,
                'name_en' => 'Kurihara-shi',
                'name_jp' => '栗原市',
            ],
            [
                'code' => '042145',
                'prefecture_id' => 4,
                'name_en' => 'Higashimatsushima-shi',
                'name_jp' => '東松島市',
            ],
            [
                'code' => '042153',
                'prefecture_id' => 4,
                'name_en' => 'Osaki-shi',
                'name_jp' => '大崎市',
            ],
            [
                'code' => '042161',
                'prefecture_id' => 4,
                'name_en' => 'Tomiyoshi',
                'name_jp' => '富谷市',
            ],
            [
                'code' => '043010',
                'prefecture_id' => 4,
                'name_en' => 'Zaō-machi',
                'name_jp' => '蔵王町',
            ],
            [
                'code' => '043028',
                'prefecture_id' => 4,
                'name_en' => 'Shichikashūkumachi',
                'name_jp' => '七ヶ宿町',
            ],
            [
                'code' => '043214',
                'prefecture_id' => 4,
                'name_en' => 'Ogawaramachi',
                'name_jp' => '大河原町',
            ],
            [
                'code' => '043222',
                'prefecture_id' => 4,
                'name_en' => 'Murata-machi',
                'name_jp' => '村田町',
            ],
            [
                'code' => '043231',
                'prefecture_id' => 4,
                'name_en' => 'Shibata-machi',
                'name_jp' => '柴田町',
            ],
            [
                'code' => '043249',
                'prefecture_id' => 4,
                'name_en' => 'Kawasaki-machi',
                'name_jp' => '川崎町',
            ],
            [
                'code' => '043419',
                'prefecture_id' => 4,
                'name_en' => 'Marumori-machi',
                'name_jp' => '丸森町',
            ],
            [
                'code' => '043613',
                'prefecture_id' => 4,
                'name_en' => 'Wataricho',
                'name_jp' => '亘理町',
            ],
            [
                'code' => '043621',
                'prefecture_id' => 4,
                'name_en' => 'Yamamoto-cho',
                'name_jp' => '山元町',
            ],
            [
                'code' => '044016',
                'prefecture_id' => 4,
                'name_en' => 'Matsushima-machi',
                'name_jp' => '松島町',
            ],
            [
                'code' => '044041',
                'prefecture_id' => 4,
                'name_en' => 'Shichigahama-machi',
                'name_jp' => '七ヶ浜町',
            ],
            [
                'code' => '044067',
                'prefecture_id' => 4,
                'name_en' => 'Rifu-cho',
                'name_jp' => '利府町',
            ],
            [
                'code' => '044211',
                'prefecture_id' => 4,
                'name_en' => 'Taiwa-cho',
                'name_jp' => '大和町',
            ],
            [
                'code' => '044229',
                'prefecture_id' => 4,
                'name_en' => 'Ōsato-cho',
                'name_jp' => '大郷町',
            ],
            [
                'code' => '044245',
                'prefecture_id' => 4,
                'name_en' => 'Ōhiramura',
                'name_jp' => '大衡村',
            ],
            [
                'code' => '044440',
                'prefecture_id' => 4,
                'name_en' => 'Shikama-chō',
                'name_jp' => '色麻町',
            ],
            [
                'code' => '044458',
                'prefecture_id' => 4,
                'name_en' => 'Kamimachi',
                'name_jp' => '加美町',
            ],
            [
                'code' => '045012',
                'prefecture_id' => 4,
                'name_en' => 'Wakuya-cho',
                'name_jp' => '涌谷町',
            ],
            [
                'code' => '045055',
                'prefecture_id' => 4,
                'name_en' => 'Misato-machi',
                'name_jp' => '美里町',
            ],
            [
                'code' => '045811',
                'prefecture_id' => 4,
                'name_en' => 'Onagawa-cho',
                'name_jp' => '女川町',
            ],
            [
                'code' => '046060',
                'prefecture_id' => 4,
                'name_en' => 'Minamisanriku-cho',
                'name_jp' => '南三陸町',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
