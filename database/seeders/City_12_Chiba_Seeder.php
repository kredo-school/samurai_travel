<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_12_Chiba_Seeder extends Seeder
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
                'code' => '121002',
                'prefecture_id' => 12,
                'name_en' => 'Chibashi',
                'name_jp' => '千葉市',
            ],
            [
                'code' => '122025',
                'prefecture_id' => 12,
                'name_en' => 'Choushishi',
                'name_jp' => '銚子市',
            ],
            [
                'code' => '122033',
                'prefecture_id' => 12,
                'name_en' => 'Ichikawashi',
                'name_jp' => '市川市',
            ],
            [
                'code' => '122041',
                'prefecture_id' => 12,
                'name_en' => 'Funabashishi',
                'name_jp' => '船橋市',
            ],
            [
                'code' => '122050',
                'prefecture_id' => 12,
                'name_en' => 'Tateyamashi',
                'name_jp' => '館山市',
            ],
            [
                'code' => '122068',
                'prefecture_id' => 12,
                'name_en' => 'Kisaratsushi',
                'name_jp' => '木更津市',
            ],
            [
                'code' => '122076',
                'prefecture_id' => 12,
                'name_en' => 'Matsudashi',
                'name_jp' => '松戸市',
            ],
            [
                'code' => '122084',
                'prefecture_id' => 12,
                'name_en' => 'Nodashi',
                'name_jp' => '野田市',
            ],
            [
                'code' => '122106',
                'prefecture_id' => 12,
                'name_en' => 'Mobarashi',
                'name_jp' => '茂原市',
            ],
            [
                'code' => '122114',
                'prefecture_id' => 12,
                'name_en' => 'Naritashi',
                'name_jp' => '成田市',
            ],
            [
                'code' => '122122',
                'prefecture_id' => 12,
                'name_en' => 'Sakurashi',
                'name_jp' => '佐倉市',
            ],
            [
                'code' => '122131',
                'prefecture_id' => 12,
                'name_en' => 'Touganeshi',
                'name_jp' => '東金市',
            ],
            [
                'code' => '122157',
                'prefecture_id' => 12,
                'name_en' => 'Asahishi',
                'name_jp' => '旭市',
            ],
            [
                'code' => '122165',
                'prefecture_id' => 12,
                'name_en' => 'Narashinoshi',
                'name_jp' => '習志野市',
            ],
            [
                'code' => '122173',
                'prefecture_id' => 12,
                'name_en' => 'Kashiwashi',
                'name_jp' => '柏市',
            ],
            [
                'code' => '122181',
                'prefecture_id' => 12,
                'name_en' => 'Katsuuralshi',
                'name_jp' => '勝浦市',
            ],
            [
                'code' => '122190',
                'prefecture_id' => 12,
                'name_en' => 'Ichiharashi',
                'name_jp' => '市原市',
            ],
            [
                'code' => '122203',
                'prefecture_id' => 12,
                'name_en' => 'Nagareyamashi',
                'name_jp' => '流山市',
            ],
            [
                'code' => '122211',
                'prefecture_id' => 12,
                'name_en' => 'Yachiyoshi',
                'name_jp' => '八千代市',
            ],
            [
                'code' => '122220',
                'prefecture_id' => 12,
                'name_en' => 'Abikoshi',
                'name_jp' => '我孫子市',
            ],
            [
                'code' => '122238',
                'prefecture_id' => 12,
                'name_en' => 'Kamogawashi',
                'name_jp' => '鴨川市',
            ],
            [
                'code' => '122246',
                'prefecture_id' => 12,
                'name_en' => 'Kamagayashi',
                'name_jp' => '鎌ケ谷市',
            ],
            [
                'code' => '122254',
                'prefecture_id' => 12,
                'name_en' => 'Kimitsu-shi',
                'name_jp' => '君津市',
            ],
            [
                'code' => '122262',
                'prefecture_id' => 12,
                'name_en' => 'Futsushi',
                'name_jp' => '富津市',
            ],
            [
                'code' => '122271',
                'prefecture_id' => 12,
                'name_en' => 'Urayasu-shi',
                'name_jp' => '浦安市',
            ],
            [
                'code' => '122289',
                'prefecture_id' => 12,
                'name_en' => 'Yotsukaidou-shi',
                'name_jp' => '四街道市',
            ],
            [
                'code' => '122297',
                'prefecture_id' => 12,
                'name_en' => 'Sodegaura-shi',
                'name_jp' => '袖ケ浦市',
            ],
            [
                'code' => '122301',
                'prefecture_id' => 12,
                'name_en' => 'Yachimata-shi',
                'name_jp' => '八街市',
            ],
            [
                'code' => '122319',
                'prefecture_id' => 12,
                'name_en' => 'Inzai-shi',
                'name_jp' => '印西市',
            ],
            [
                'code' => '122327',
                'prefecture_id' => 12,
                'name_en' => 'Shiroishi',
                'name_jp' => '白井市',
            ],
            [
                'code' => '122335',
                'prefecture_id' => 12,
                'name_en' => 'Tomisato-shi',
                'name_jp' => '富里市',
            ],
            [
                'code' => '122343',
                'prefecture_id' => 12,
                'name_en' => 'Minamibousou-shi',
                'name_jp' => '南房総市',
            ],
            [
                'code' => '122351',
                'prefecture_id' => 12,
                'name_en' => 'Sousashi',
                'name_jp' => '匝瑳市',
            ],
            [
                'code' => '122360',
                'prefecture_id' => 12,
                'name_en' => 'Katorishi',
                'name_jp' => '香取市',
            ],
            [
                'code' => '122378',
                'prefecture_id' => 12,
                'name_en' => 'Sanmu-shi',
                'name_jp' => '山武市',
            ],
            [
                'code' => '122386',
                'prefecture_id' => 12,
                'name_en' => 'Isumi-shi',
                'name_jp' => 'いすみ市',
            ],
            [
                'code' => '122394',
                'prefecture_id' => 12,
                'name_en' => 'Ooamishirasato-shi',
                'name_jp' => '大網白里市',
            ],
            [
                'code' => '123226',
                'prefecture_id' => 12,
                'name_en' => 'Shisui-machi',
                'name_jp' => '酒々井町',
            ],
            [
                'code' => '123293',
                'prefecture_id' => 12,
                'name_en' => 'Sakae-machi',
                'name_jp' => '栄町',
            ],
            [
                'code' => '123421',
                'prefecture_id' => 12,
                'name_en' => 'Kouzakimachi',
                'name_jp' => '神崎町',
            ],
            [
                'code' => '123471',
                'prefecture_id' => 12,
                'name_en' => 'Takomamachi',
                'name_jp' => '多古町',
            ],
            [
                'code' => '123498',
                'prefecture_id' => 12,
                'name_en' => 'Tounoushoumachi',
                'name_jp' => '東庄町',
            ],
            [
                'code' => '124036',
                'prefecture_id' => 12,
                'name_en' => 'Kujukurimachi',
                'name_jp' => '九十九里町',
            ],
            [
                'code' => '124095',
                'prefecture_id' => 12,
                'name_en' => 'Shibayamamachi',
                'name_jp' => '芝山町',
            ],
            [
                'code' => '124109',
                'prefecture_id' => 12,
                'name_en' => 'Yokoshibahikarimachi',
                'name_jp' => '横芝光町',
            ],
            [
                'code' => '124214',
                'prefecture_id' => 12,
                'name_en' => 'Ichinomiyamachi',
                'name_jp' => '一宮町',
            ],
            [
                'code' => '124222',
                'prefecture_id' => 12,
                'name_en' => 'Mutsuzawamachi',
                'name_jp' => '睦沢町',
            ],
            [
                'code' => '124231',
                'prefecture_id' => 12,
                'name_en' => 'Chouseimura',
                'name_jp' => '長生村',
            ],
            [
                'code' => '124249',
                'prefecture_id' => 12,
                'name_en' => 'Shirakomamachi',
                'name_jp' => '白子町',
            ],
            [
                'code' => '124265',
                'prefecture_id' => 12,
                'name_en' => 'Nagaramachi',
                'name_jp' => '長柄町',
            ],
            [
                'code' => '124273',
                'prefecture_id' => 12,
                'name_en' => 'Chounanmachi',
                'name_jp' => '長南町',
            ],
            [
                'code' => '124419',
                'prefecture_id' => 12,
                'name_en' => 'Ootakimachi',
                'name_jp' => '大多喜町',
            ],
            [
                'code' => '124435',
                'prefecture_id' => 12,
                'name_en' => 'Onjyukumachi',
                'name_jp' => '御宿町',
            ],
            [
                'code' => '124630',
                'prefecture_id' => 12,
                'name_en' => 'Kiyonanmachi',
                'name_jp' => '鋸南町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
