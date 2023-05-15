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
                'id' => 1008,
                'code' => '231002',
                'prefecture_id' => 23,
                'name_en' => 'Nagoyashi',
                'name_jp' => '名古屋市',
            ],
            [
                'id' => 1009,
                'code' => '232017',
                'prefecture_id' => 23,
                'name_en' => 'Toyohashishi',
                'name_jp' => '豊橋市',
            ],
            [
                'id' => 1010,
                'code' => '232025',
                'prefecture_id' => 23,
                'name_en' => 'Okazakishi',
                'name_jp' => '岡崎市',
            ],
            [
                'id' => 1011,
                'code' => '232033',
                'prefecture_id' => 23,
                'name_en' => 'Ichinomiyashi',
                'name_jp' => '一宮市',
            ],
            [
                'id' => 1012,
                'code' => '232041',
                'prefecture_id' => 23,
                'name_en' => 'Setoshi',
                'name_jp' => '瀬戸市',
            ],
            [
                'id' => 1013,
                'code' => '232050',
                'prefecture_id' => 23,
                'name_en' => 'Handashi',
                'name_jp' => '半田市',
            ],
            [
                'id' => 1014,
                'code' => '232068',
                'prefecture_id' => 23,
                'name_en' => 'Kasugaishi',
                'name_jp' => '春日井市',
            ],
            [
                'id' => 1015,
                'code' => '232076',
                'prefecture_id' => 23,
                'name_en' => 'Toyokawashi',
                'name_jp' => '豊川市',
            ],
            [
                'id' => 1016,
                'code' => '232084',
                'prefecture_id' => 23,
                'name_en' => 'Tushimashi',
                'name_jp' => '津島市',
            ],
            [
                'id' => 1017,
                'code' => '232092',
                'prefecture_id' => 23,
                'name_en' => 'Hekinan-shi',
                'name_jp' => '碧南市',
            ],
            [
                'id' => 1018,
                'code' => '232106',
                'prefecture_id' => 23,
                'name_en' => 'Kariyashi',
                'name_jp' => '刈谷市',
            ],
            [
                'id' => 1019,
                'code' => '232114',
                'prefecture_id' => 23,
                'name_en' => 'Toyotashi',
                'name_jp' => '豊田市',
            ],
            [
                'id' => 1020,
                'code' => '232122',
                'prefecture_id' => 23,
                'name_en' => 'Anjo-shi',
                'name_jp' => '安城市',
            ],
            [
                'id' => 1021,
                'code' => '232131',
                'prefecture_id' => 23,
                'name_en' => 'Nishioshi',
                'name_jp' => '西尾市',
            ],
            [
                'id' => 1022,
                'code' => '232149',
                'prefecture_id' => 23,
                'name_en' => 'Gamagori-shi',
                'name_jp' => '蒲郡市',
            ],
            [
                'id' => 1023,
                'code' => '232157',
                'prefecture_id' => 23,
                'name_en' => 'Inuyamashi',
                'name_jp' => '犬山市',
            ],
            [
                'id' => 1024,
                'code' => '232165',
                'prefecture_id' => 23,
                'name_en' => 'Tokonameshi',
                'name_jp' => '常滑市',
            ],
            [
                'id' => 1025,
                'code' => '232173',
                'prefecture_id' => 23,
                'name_en' => 'Kounanshi',
                'name_jp' => '江南市',
            ],
            [
                'id' => 1026,
                'code' => '232190',
                'prefecture_id' => 23,
                'name_en' => 'Komakishi',
                'name_jp' => '小牧市',
            ],
            [
                'id' => 1027,
                'code' => '232203',
                'prefecture_id' => 23,
                'name_en' => 'Inazawashi',
                'name_jp' => '稲沢市',
            ],
            [
                'id' => 1028,
                'code' => '232211',
                'prefecture_id' => 23,
                'name_en' => 'Shinshiroshi',
                'name_jp' => '新城市',
            ],
            [
                'id' => 1029,
                'code' => '232220',
                'prefecture_id' => 23,
                'name_en' => 'Tokai-shi',
                'name_jp' => '東海市',
            ],
            [
                'id' => 1030,
                'code' => '232238',
                'prefecture_id' => 23,
                'name_en' => 'Oobushi',
                'name_jp' => '大府市',
            ],
            [
                'id' => 1031,
                'code' => '232246',
                'prefecture_id' => 23,
                'name_en' => 'Chitashio',
                'name_jp' => '知多市',
            ],
            [
                'id' => 1032,
                'code' => '232254',
                'prefecture_id' => 23,
                'name_en' => 'Chiryuushi',
                'name_jp' => '知立市',
            ],
            [
                'id' => 1033,
                'code' => '232262',
                'prefecture_id' => 23,
                'name_en' => 'Owariasahishi',
                'name_jp' => '尾張旭市',
            ],
            [
                'id' => 1034,
                'code' => '232271',
                'prefecture_id' => 23,
                'name_en' => 'Takahamashi',
                'name_jp' => '高浜市',
            ],
            [
                'id' => 1035,
                'code' => '232289',
                'prefecture_id' => 23,
                'name_en' => 'Iwakurashi',
                'name_jp' => '岩倉市',
            ],
            [
                'id' => 1036,
                'code' => '232297',
                'prefecture_id' => 23,
                'name_en' => 'Toyoakeshi',
                'name_jp' => '豊明市',
            ],
            [
                'id' => 1037,
                'code' => '232301',
                'prefecture_id' => 23,
                'name_en' => 'Nishinari-shi',
                'name_jp' => '日進市',
            ],
            [
                'id' => 1038,
                'code' => '232319',
                'prefecture_id' => 23,
                'name_en' => 'Taharashi',
                'name_jp' => '田原市',
            ],
            [
                'id' => 1039,
                'code' => '232327',
                'prefecture_id' => 23,
                'name_en' => 'Aisai-shi',
                'name_jp' => '愛西市',
            ],
            [
                'id' => 1040,
                'code' => '232335',
                'prefecture_id' => 23,
                'name_en' => 'Kiyosu-shi',
                'name_jp' => '清須市',
            ],
            [
                'id' => 1041,
                'code' => '232343',
                'prefecture_id' => 23,
                'name_en' => 'Kitanagoyashi',
                'name_jp' => '北名古屋市',
            ],
            [
                'id' => 1042,
                'code' => '232351',
                'prefecture_id' => 23,
                'name_en' => 'Yatsumi-shi',
                'name_jp' => '弥富市',
            ],
            [
                'id' => 1043,
                'code' => '232360',
                'prefecture_id' => 23,
                'name_en' => 'Miyoshishi',
                'name_jp' => 'みよし市',
            ],
            [
                'id' => 1044,
                'code' => '232378',
                'prefecture_id' => 23,
                'name_en' => 'Amashi',
                'name_jp' => 'あま市',
            ],
            [
                'id' => 1045,
                'code' => '232386',
                'prefecture_id' => 23,
                'name_en' => 'Nagakute-shi',
                'name_jp' => '長久手市',
            ],
            [
                'id' => 1046,
                'code' => '233021',
                'prefecture_id' => 23,
                'name_en' => 'Tougouchou',
                'name_jp' => '東郷町',
            ],
            [
                'id' => 1047,
                'code' => '233421',
                'prefecture_id' => 23,
                'name_en' => 'Toyoamichou',
                'name_jp' => '豊山町',
            ],
            [
                'id' => 1048,
                'code' => '233617',
                'prefecture_id' => 23,
                'name_en' => 'Oguchichou',
                'name_jp' => '大口町',
            ],
            [
                'id' => 1049,
                'code' => '233625',
                'prefecture_id' => 23,
                'name_en' => 'Fusaouchou',
                'name_jp' => '扶桑町',
            ],
            [
                'id' => 1050,
                'code' => '234249',
                'prefecture_id' => 23,
                'name_en' => 'Ooharuchou',
                'name_jp' => '大治町',
            ],
            [
                'id' => 1051,
                'code' => '234257',
                'prefecture_id' => 23,
                'name_en' => 'Kaniechou',
                'name_jp' => '蟹江町',
            ],
            [
                'id' => 1052,
                'code' => '234273',
                'prefecture_id' => 23,
                'name_en' => 'Tobishimamura',
                'name_jp' => '飛島村',
            ],
            [
                'id' => 1053,
                'code' => '234419',
                'prefecture_id' => 23,
                'name_en' => 'Agui-chou',
                'name_jp' => '阿久比町',
            ],
            [
                'id' => 1054,
                'code' => '234427',
                'prefecture_id' => 23,
                'name_en' => 'Higashiurachou',
                'name_jp' => '東浦町',
            ],
            [
                'id' => 1055,
                'code' => '234451',
                'prefecture_id' => 23,
                'name_en' => 'Minamichitachou',
                'name_jp' => '南知多町',
            ],
            [
                'id' => 1056,
                'code' => '234460',
                'prefecture_id' => 23,
                'name_en' => 'Mihama-chou',
                'name_jp' => '美浜町',
            ],
            [
                'id' => 1057,
                'code' => '234478',
                'prefecture_id' => 23,
                'name_en' => 'Taketoyochou',
                'name_jp' => '武豊町',
            ],
            [
                'id' => 1058,
                'code' => '235016',
                'prefecture_id' => 23,
                'name_en' => 'Koutachou',
                'name_jp' => '幸田町',
            ],
            [
                'id' => 1059,
                'code' => '235610',
                'prefecture_id' => 23,
                'name_en' => 'Shitarachou',
                'name_jp' => '設楽町',
            ],
            [
                'id' => 1060,
                'code' => '235628',
                'prefecture_id' => 23,
                'name_en' => 'Toueichou',
                'name_jp' => '東栄町',
            ],
            [
                'id' => 1061,
                'code' => '235636',
                'prefecture_id' => 23,
                'name_en' => 'Toyonemura',
                'name_jp' => '豊根村',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
