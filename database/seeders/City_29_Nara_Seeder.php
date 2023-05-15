<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_29_Nara_Seeder extends Seeder
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
                'id' => 1226,
                'code' => '292010',
                'prefecture_id' => 29,
                'name_en' => 'Narashi',
                'name_jp' => '奈良市',
            ],
            [
                'id' => 1227,
                'code' => '292028',
                'prefecture_id' => 29,
                'name_en' => 'Yamato Takada-shi',
                'name_jp' => '大和高田市',
            ],
            [
                'id' => 1228,
                'code' => '292036',
                'prefecture_id' => 29,
                'name_en' => 'Yamato Kooriyama-shi',
                'name_jp' => '大和郡山市',
            ],
            [
                'id' => 1229,
                'code' => '292044',
                'prefecture_id' => 29,
                'name_en' => 'Tenri-shi',
                'name_jp' => '天理市',
            ],
            [
                'id' => 1230,
                'code' => '292052',
                'prefecture_id' => 29,
                'name_en' => 'Kashihara-shi',
                'name_jp' => '橿原市',
            ],
            [
                'id' => 1231,
                'code' => '292061',
                'prefecture_id' => 29,
                'name_en' => 'Sakurai-shi',
                'name_jp' => '桜井市',
            ],
            [
                'id' => 1232,
                'code' => '292079',
                'prefecture_id' => 29,
                'name_en' => 'Gojo-shi',
                'name_jp' => '五條市',
            ],
            [
                'id' => 1233,
                'code' => '292087',
                'prefecture_id' => 29,
                'name_en' => 'Gose-shi',
                'name_jp' => '御所市',
            ],
            [
                'id' => 1234,
                'code' => '292095',
                'prefecture_id' => 29,
                'name_en' => 'Ikoma-shi',
                'name_jp' => '生駒市',
            ],
            [
                'id' => 1235,
                'code' => '292109',
                'prefecture_id' => 29,
                'name_en' => 'Kashiba-shi',
                'name_jp' => '香芝市',
            ],
            [
                'id' => 1236,
                'code' => '292117',
                'prefecture_id' => 29,
                'name_en' => 'Katsuragi-shi',
                'name_jp' => '葛城市',
            ],
            [
                'id' => 1237,
                'code' => '292125',
                'prefecture_id' => 29,
                'name_en' => 'Uda-shi',
                'name_jp' => '宇陀市',
            ],
            [
                'id' => 1238,
                'code' => '293229',
                'prefecture_id' => 29,
                'name_en' => 'Yamazoe-mura',
                'name_jp' => '山添村',
            ],
            [
                'id' => 1239,
                'code' => '293423',
                'prefecture_id' => 29,
                'name_en' => 'Heguri-cho',
                'name_jp' => '平群町',
            ],
            [
                'id' => 1240,
                'code' => '293431',
                'prefecture_id' => 29,
                'name_en' => 'Sango-cho',
                'name_jp' => '三郷町',
            ],
            [
                'id' => 1241,
                'code' => '293440',
                'prefecture_id' => 29,
                'name_en' => 'Ikaruga-cho',
                'name_jp' => '斑鳩町',
            ],
            [
                'id' => 1242,
                'code' => '293458',
                'prefecture_id' => 29,
                'name_en' => 'Ando-cho',
                'name_jp' => '安堵町',
            ],
            [
                'id' => 1243,
                'code' => '293610',
                'prefecture_id' => 29,
                'name_en' => 'Kawinishi-cho',
                'name_jp' => '川西町',
            ],
            [
                'id' => 1244,
                'code' => '293628',
                'prefecture_id' => 29,
                'name_en' => 'Miyake-cho',
                'name_jp' => '三宅町',
            ],
            [
                'id' => 1245,
                'code' => '293636',
                'prefecture_id' => 29,
                'name_en' => 'Tawaramoto-cho',
                'name_jp' => '田原本町',
            ],
            [
                'id' => 1246,
                'code' => '293857',
                'prefecture_id' => 29,
                'name_en' => 'Sonimura',
                'name_jp' => '曽爾村',
            ],
            [
                'id' => 1247,
                'code' => '293865',
                'prefecture_id' => 29,
                'name_en' => 'Mitsue-mura',
                'name_jp' => '御杖村',
            ],
            [
                'id' => 1248,
                'code' => '294012',
                'prefecture_id' => 29,
                'name_en' => 'Takatori-cho',
                'name_jp' => '高取町',
            ],
            [
                'id' => 1249,
                'code' => '294021',
                'prefecture_id' => 29,
                'name_en' => 'Asukamura',
                'name_jp' => '明日香村',
            ],
            [
                'id' => 1250,
                'code' => '294241',
                'prefecture_id' => 29,
                'name_en' => 'Kanmaki-cho',
                'name_jp' => '上牧町',
            ],
            [
                'id' => 1251,
                'code' => '294250',
                'prefecture_id' => 29,
                'name_en' => 'Oujicho',
                'name_jp' => '王寺町',
            ],
            [
                'id' => 1252,
                'code' => '294268',
                'prefecture_id' => 29,
                'name_en' => 'Kouriyouchou',
                'name_jp' => '広陵町',
            ],
            [
                'id' => 1253,
                'code' => '294276',
                'prefecture_id' => 29,
                'name_en' => 'Kawai-cho',
                'name_jp' => '河合町',
            ],
            [
                'id' => 1254,
                'code' => '294411',
                'prefecture_id' => 29,
                'name_en' => 'Yoshino-cho',
                'name_jp' => '吉野町',
            ],
            [
                'id' => 1255,
                'code' => '294420',
                'prefecture_id' => 29,
                'name_en' => 'Ooyodo-cho',
                'name_jp' => '大淀町',
            ],
            [
                'id' => 1256,
                'code' => '294438',
                'prefecture_id' => 29,
                'name_en' => 'Shimoichi-cho',
                'name_jp' => '下市町',
            ],
            [
                'id' => 1257,
                'code' => '294446',
                'prefecture_id' => 29,
                'name_en' => 'Kurotakimura',
                'name_jp' => '黒滝村',
            ],
            [
                'id' => 1258,
                'code' => '294462',
                'prefecture_id' => 29,
                'name_en' => 'Tenkawamura',
                'name_jp' => '天川村',
            ],
            [
                'id' => 1259,
                'code' => '294471',
                'prefecture_id' => 29,
                'name_en' => 'Nosegawa-mura',
                'name_jp' => '野迫川村',
            ],
            [
                'id' => 1260,
                'code' => '294497',
                'prefecture_id' => 29,
                'name_en' => 'Totsukawa-mura',
                'name_jp' => '十津川村',
            ],
            [
                'id' => 1261,
                'code' => '294501',
                'prefecture_id' => 29,
                'name_en' => 'Shimo Kita Yamamura',
                'name_jp' => '下北山村',
            ],
            [
                'id' => 1262,
                'code' => '294519',
                'prefecture_id' => 29,
                'name_en' => 'Kami Kita Yamamura',
                'name_jp' => '上北山村',
            ],
            [
                'id' => 1263,
                'code' => '294527',
                'prefecture_id' => 29,
                'name_en' => 'Kawakamimura',
                'name_jp' => '川上村',
            ],
            [
                'id' => 1264,
                'code' => '294535',
                'prefecture_id' => 29,
                'name_en' => 'Higashi Yoshino-mura',
                'name_jp' => '東吉野村',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
