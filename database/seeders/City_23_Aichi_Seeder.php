<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_23_Aichi_Seeder extends Seeder
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
                'code' => '231002',
                'prefecture_id' => 23,
                'name_en' => 'Nagoyashi',
                'name_jp' => '名古屋市',
            ],
            [
                'code' => '232017',
                'prefecture_id' => 23,
                'name_en' => 'Toyohashishi',
                'name_jp' => '豊橋市',
            ],
            [
                'code' => '232025',
                'prefecture_id' => 23,
                'name_en' => 'Okazakishi',
                'name_jp' => '岡崎市',
            ],
            [
                'code' => '232033',
                'prefecture_id' => 23,
                'name_en' => 'Ichinomiyashi',
                'name_jp' => '一宮市',
            ],
            [
                'code' => '232041',
                'prefecture_id' => 23,
                'name_en' => 'Setoshi',
                'name_jp' => '瀬戸市',
            ],
            [
                'code' => '232050',
                'prefecture_id' => 23,
                'name_en' => 'Handashi',
                'name_jp' => '半田市',
            ],
            [
                'code' => '232068',
                'prefecture_id' => 23,
                'name_en' => 'Kasugaishi',
                'name_jp' => '春日井市',
            ],
            [
                'code' => '232076',
                'prefecture_id' => 23,
                'name_en' => 'Toyokawashi',
                'name_jp' => '豊川市',
            ],
            [
                'code' => '232084',
                'prefecture_id' => 23,
                'name_en' => 'Tushimashi',
                'name_jp' => '津島市',
            ],
            [
                'code' => '232092',
                'prefecture_id' => 23,
                'name_en' => 'Hekinan-shi',
                'name_jp' => '碧南市',
            ],
            [
                'code' => '232106',
                'prefecture_id' => 23,
                'name_en' => 'Kariyashi',
                'name_jp' => '刈谷市',
            ],
            [
                'code' => '232114',
                'prefecture_id' => 23,
                'name_en' => 'Toyotashi',
                'name_jp' => '豊田市',
            ],
            [
                'code' => '232122',
                'prefecture_id' => 23,
                'name_en' => 'Anjo-shi',
                'name_jp' => '安城市',
            ],
            [
                'code' => '232131',
                'prefecture_id' => 23,
                'name_en' => 'Nishioshi',
                'name_jp' => '西尾市',
            ],
            [
                'code' => '232149',
                'prefecture_id' => 23,
                'name_en' => 'Gamagori-shi',
                'name_jp' => '蒲郡市',
            ],
            [
                'code' => '232157',
                'prefecture_id' => 23,
                'name_en' => 'Inuyamashi',
                'name_jp' => '犬山市',
            ],
            [
                'code' => '232165',
                'prefecture_id' => 23,
                'name_en' => 'Tokonameshi',
                'name_jp' => '常滑市',
            ],
            [
                'code' => '232173',
                'prefecture_id' => 23,
                'name_en' => 'Kounanshi',
                'name_jp' => '江南市',
            ],
            [
                'code' => '232190',
                'prefecture_id' => 23,
                'name_en' => 'Komakishi',
                'name_jp' => '小牧市',
            ],
            [
                'code' => '232203',
                'prefecture_id' => 23,
                'name_en' => 'Inazawashi',
                'name_jp' => '稲沢市',
            ],
            [
                'code' => '232211',
                'prefecture_id' => 23,
                'name_en' => 'Shinshiroshi',
                'name_jp' => '新城市',
            ],
            [
                'code' => '232220',
                'prefecture_id' => 23,
                'name_en' => 'Tokai-shi',
                'name_jp' => '東海市',
            ],
            [
                'code' => '232238',
                'prefecture_id' => 23,
                'name_en' => 'Oobushi',
                'name_jp' => '大府市',
            ],
            [
                'code' => '232246',
                'prefecture_id' => 23,
                'name_en' => 'Chitashio',
                'name_jp' => '知多市',
            ],
            [
                'code' => '232254',
                'prefecture_id' => 23,
                'name_en' => 'Chiryuushi',
                'name_jp' => '知立市',
            ],
            [
                'code' => '232262',
                'prefecture_id' => 23,
                'name_en' => 'Owariasahishi',
                'name_jp' => '尾張旭市',
            ],
            [
                'code' => '232271',
                'prefecture_id' => 23,
                'name_en' => 'Takahamashi',
                'name_jp' => '高浜市',
            ],
            [
                'code' => '232289',
                'prefecture_id' => 23,
                'name_en' => 'Iwakurashi',
                'name_jp' => '岩倉市',
            ],
            [
                'code' => '232297',
                'prefecture_id' => 23,
                'name_en' => 'Toyoakeshi',
                'name_jp' => '豊明市',
            ],
            [
                'code' => '232301',
                'prefecture_id' => 23,
                'name_en' => 'Nishinari-shi',
                'name_jp' => '日進市',
            ],
            [
                'code' => '232319',
                'prefecture_id' => 23,
                'name_en' => 'Taharashi',
                'name_jp' => '田原市',
            ],
            [
                'code' => '232327',
                'prefecture_id' => 23,
                'name_en' => 'Aisai-shi',
                'name_jp' => '愛西市',
            ],
            [
                'code' => '232335',
                'prefecture_id' => 23,
                'name_en' => 'Kiyosu-shi',
                'name_jp' => '清須市',
            ],
            [
                'code' => '232343',
                'prefecture_id' => 23,
                'name_en' => 'Kitanagoyashi',
                'name_jp' => '北名古屋市',
            ],
            [
                'code' => '232351',
                'prefecture_id' => 23,
                'name_en' => 'Yatsumi-shi',
                'name_jp' => '弥富市',
            ],
            [
                'code' => '232360',
                'prefecture_id' => 23,
                'name_en' => 'Miyoshishi',
                'name_jp' => 'みよし市',
            ],
            [
                'code' => '232378',
                'prefecture_id' => 23,
                'name_en' => 'Amashi',
                'name_jp' => 'あま市',
            ],
            [
                'code' => '232386',
                'prefecture_id' => 23,
                'name_en' => 'Nagakute-shi',
                'name_jp' => '長久手市',
            ],
            [
                'code' => '233021',
                'prefecture_id' => 23,
                'name_en' => 'Tougouchou',
                'name_jp' => '東郷町',
            ],
            [
                'code' => '233421',
                'prefecture_id' => 23,
                'name_en' => 'Toyoamichou',
                'name_jp' => '豊山町',
            ],
            [
                'code' => '233617',
                'prefecture_id' => 23,
                'name_en' => 'Oguchichou',
                'name_jp' => '大口町',
            ],
            [
                'code' => '233625',
                'prefecture_id' => 23,
                'name_en' => 'Fusaouchou',
                'name_jp' => '扶桑町',
            ],
            [
                'code' => '234249',
                'prefecture_id' => 23,
                'name_en' => 'Ooharuchou',
                'name_jp' => '大治町',
            ],
            [
                'code' => '234257',
                'prefecture_id' => 23,
                'name_en' => 'Kaniechou',
                'name_jp' => '蟹江町',
            ],
            [
                'code' => '234273',
                'prefecture_id' => 23,
                'name_en' => 'Tobishimamura',
                'name_jp' => '飛島村',
            ],
            [
                'code' => '234419',
                'prefecture_id' => 23,
                'name_en' => 'Agui-chou',
                'name_jp' => '阿久比町',
            ],
            [
                'code' => '234427',
                'prefecture_id' => 23,
                'name_en' => 'Higashiurachou',
                'name_jp' => '東浦町',
            ],
            [
                'code' => '234451',
                'prefecture_id' => 23,
                'name_en' => 'Minamichitachou',
                'name_jp' => '南知多町',
            ],
            [
                'code' => '234460',
                'prefecture_id' => 23,
                'name_en' => 'Mihama-chou',
                'name_jp' => '美浜町',
            ],
            [
                'code' => '234478',
                'prefecture_id' => 23,
                'name_en' => 'Taketoyochou',
                'name_jp' => '武豊町',
            ],
            [
                'code' => '235016',
                'prefecture_id' => 23,
                'name_en' => 'Koutachou',
                'name_jp' => '幸田町',
            ],
            [
                'code' => '235610',
                'prefecture_id' => 23,
                'name_en' => 'Shitarachou',
                'name_jp' => '設楽町',
            ],
            [
                'code' => '235628',
                'prefecture_id' => 23,
                'name_en' => 'Toueichou',
                'name_jp' => '東栄町',
            ],
            [
                'code' => '235636',
                'prefecture_id' => 23,
                'name_en' => 'Toyonemura',
                'name_jp' => '豊根村',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
