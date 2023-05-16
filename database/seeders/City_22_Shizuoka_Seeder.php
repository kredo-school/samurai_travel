<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_22_Shizuoka_Seeder extends Seeder
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
                'id' => 972,
                'code' => '221007',
                'prefecture_id' => 22,
                'name_en' => 'Shizuoka-shi',
                'name_jp' => '静岡市',
            ],
            [
                'id' => 973,
                'code' => '221309',
                'prefecture_id' => 22,
                'name_en' => 'Hamamatsu-shi',
                'name_jp' => '浜松市',
            ],
            [
                'id' => 974,
                'code' => '222038',
                'prefecture_id' => 22,
                'name_en' => 'Numazu-shi',
                'name_jp' => '沼津市',
            ],
            [
                'id' => 975,
                'code' => '222054',
                'prefecture_id' => 22,
                'name_en' => 'Atami-shi',
                'name_jp' => '熱海市',
            ],
            [
                'id' => 976,
                'code' => '222062',
                'prefecture_id' => 22,
                'name_en' => 'Mishima-shi',
                'name_jp' => '三島市',
            ],
            [
                'id' => 977,
                'code' => '222071',
                'prefecture_id' => 22,
                'name_en' => 'Fujinomiya-shi',
                'name_jp' => '富士宮市',
            ],
            [
                'id' => 978,
                'code' => '222089',
                'prefecture_id' => 22,
                'name_en' => 'Itō-shi',
                'name_jp' => '伊東市',
            ],
            [
                'id' => 979,
                'code' => '222097',
                'prefecture_id' => 22,
                'name_en' => 'Shimada-shi',
                'name_jp' => '島田市',
            ],
            [
                'id' => 980,
                'code' => '222101',
                'prefecture_id' => 22,
                'name_en' => 'Fuji-shi',
                'name_jp' => '富士市',
            ],
            [
                'id' => 981,
                'code' => '222119',
                'prefecture_id' => 22,
                'name_en' => 'Iwata-shi',
                'name_jp' => '磐田市',
            ],
            [
                'id' => 982,
                'code' => '222127',
                'prefecture_id' => 22,
                'name_en' => 'Yaizu-shi',
                'name_jp' => '焼津市',
            ],
            [
                'id' => 983,
                'code' => '222135',
                'prefecture_id' => 22,
                'name_en' => 'Kakegawa-shi',
                'name_jp' => '掛川市',
            ],
            [
                'id' => 984,
                'code' => '222143',
                'prefecture_id' => 22,
                'name_en' => 'Fujieda-shi',
                'name_jp' => '藤枝市',
            ],
            [
                'id' => 985,
                'code' => '222151',
                'prefecture_id' => 22,
                'name_en' => 'Gotemba-shi',
                'name_jp' => '御殿場市',
            ],
            [
                'id' => 986,
                'code' => '222160',
                'prefecture_id' => 22,
                'name_en' => 'Fukuroi-shi',
                'name_jp' => '袋井市',
            ],
            [
                'id' => 987,
                'code' => '222194',
                'prefecture_id' => 22,
                'name_en' => 'Shimoda-shi',
                'name_jp' => '下田市',
            ],
            [
                'id' => 988,
                'code' => '222208',
                'prefecture_id' => 22,
                'name_en' => 'Susono-shi',
                'name_jp' => '裾野市',
            ],
            [
                'id' => 989,
                'code' => '222216',
                'prefecture_id' => 22,
                'name_en' => 'Kosai-shi',
                'name_jp' => '湖西市',
            ],
            [
                'id' => 990,
                'code' => '222224',
                'prefecture_id' => 22,
                'name_en' => 'Izu-shi',
                'name_jp' => '伊豆市',
            ],
            [
                'id' => 991,
                'code' => '222232',
                'prefecture_id' => 22,
                'name_en' => 'Omaezaki-shi',
                'name_jp' => '御前崎市',
            ],
            [
                'id' => 992,
                'code' => '222241',
                'prefecture_id' => 22,
                'name_en' => 'Kikugawa-shi',
                'name_jp' => '菊川市',
            ],
            [
                'id' => 993,
                'code' => '222259',
                'prefecture_id' => 22,
                'name_en' => 'Izunokuni-shi',
                'name_jp' => '伊豆の国市',
            ],
            [
                'id' => 994,
                'code' => '222267',
                'prefecture_id' => 22,
                'name_en' => 'Makinohara-shi',
                'name_jp' => '牧之原市',
            ],
            [
                'id' => 995,
                'code' => '223018',
                'prefecture_id' => 22,
                'name_en' => 'Higashiizu-chō',
                'name_jp' => '東伊豆町',
            ],
            [
                'id' => 996,
                'code' => '223026',
                'prefecture_id' => 22,
                'name_en' => 'Kawazu-chō',
                'name_jp' => '河津町',
            ],
            [
                'id' => 997,
                'code' => '223042',
                'prefecture_id' => 22,
                'name_en' => 'Minamiizu-chō',
                'name_jp' => '南伊豆町',
            ],
            [
                'id' => 998,
                'code' => '223051',
                'prefecture_id' => 22,
                'name_en' => 'Matsuzaki-chō',
                'name_jp' => '松崎町',
            ],
            [
                'id' => 999,
                'code' => '223069',
                'prefecture_id' => 22,
                'name_en' => 'Nishiizu-chō',
                'name_jp' => '西伊豆町',
            ],
            [
                'id' => 1000,
                'code' => '223255',
                'prefecture_id' => 22,
                'name_en' => 'Kanna-machi',
                'name_jp' => '函南町',
            ],
            [
                'id' => 1001,
                'code' => '223417',
                'prefecture_id' => 22,
                'name_en' => 'Shimizu-chō',
                'name_jp' => '清水町',
            ],
            [
                'id' => 1002,
                'code' => '223425',
                'prefecture_id' => 22,
                'name_en' => 'Nagaizumi-chō',
                'name_jp' => '長泉町',
            ],
            [
                'id' => 1003,
                'code' => '223441',
                'prefecture_id' => 22,
                'name_en' => 'Oyama-chō',
                'name_jp' => '小山町',
            ],
            [
                'id' => 1004,
                'code' => '224243',
                'prefecture_id' => 22,
                'name_en' => 'Yoshida-chō',
                'name_jp' => '吉田町',
            ],
            [
                'id' => 1005,
                'code' => '224294',
                'prefecture_id' => 22,
                'name_en' => 'Kawanehon-chō',
                'name_jp' => '川根本町',
            ],
            [
                'id' => 1006,
                'code' => '224618',
                'prefecture_id' => 22,
                'name_en' => 'Morimachi',
                'name_jp' => '森町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
