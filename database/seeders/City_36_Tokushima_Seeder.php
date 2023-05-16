<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_36_Tokushima_Seeder extends Seeder
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
                'code' => '362018',
                'prefecture_id' => 36,
                'name_en' => 'Tokushima-shi',
                'name_jp' => '徳島市',
            ],
            [
                'code' => '362026',
                'prefecture_id' => 36,
                'name_en' => 'Naruto-shi',
                'name_jp' => '鳴門市',
            ],
            [
                'code' => '362034',
                'prefecture_id' => 36,
                'name_en' => 'Komatsushima-shi',
                'name_jp' => '小松島市',
            ],
            [
                'code' => '362042',
                'prefecture_id' => 36,
                'name_en' => 'Anan-shi',
                'name_jp' => '阿南市',
            ],
            [
                'code' => '362051',
                'prefecture_id' => 36,
                'name_en' => 'Yoshinogawa-shi',
                'name_jp' => '吉野川市',
            ],
            [
                'code' => '362069',
                'prefecture_id' => 36,
                'name_en' => 'Awa-shi',
                'name_jp' => '阿波市',
            ],
            [
                'code' => '362077',
                'prefecture_id' => 36,
                'name_en' => 'Mima-shi',
                'name_jp' => '美馬市',
            ],
            [
                'code' => '362085',
                'prefecture_id' => 36,
                'name_en' => 'Miyoshi-shi',
                'name_jp' => '三好市',
            ],
            [
                'code' => '363014',
                'prefecture_id' => 36,
                'name_en' => 'Katsuura-chō',
                'name_jp' => '勝浦町',
            ],
            [
                'code' => '363022',
                'prefecture_id' => 36,
                'name_en' => 'Kamikatsu-chō',
                'name_jp' => '上勝町',
            ],
            [
                'code' => '363219',
                'prefecture_id' => 36,
                'name_en' => 'Sanagōuchi-son',
                'name_jp' => '佐那河内村',
            ],
            [
                'code' => '363413',
                'prefecture_id' => 36,
                'name_en' => 'Ishii-chō',
                'name_jp' => '石井町',
            ],
            [
                'code' => '363421',
                'prefecture_id' => 36,
                'name_en' => 'Kamiyama-chō',
                'name_jp' => '神山町',
            ],
            [
                'code' => '363685',
                'prefecture_id' => 36,
                'name_en' => 'Naka-chō',
                'name_jp' => '那賀町',
            ],
            [
                'code' => '363839',
                'prefecture_id' => 36,
                'name_en' => 'Mugi-chō',
                'name_jp' => '牟岐町',
            ],
            [
                'code' => '363871',
                'prefecture_id' => 36,
                'name_en' => 'Minami-chō',
                'name_jp' => '美波町',
            ],
            [
                'code' => '363880',
                'prefecture_id' => 36,
                'name_en' => 'Kaiyō-chō',
                'name_jp' => '海陽町',
            ],
            [
                'code' => '364011',
                'prefecture_id' => 36,
                'name_en' => 'Matsushige-chō',
                'name_jp' => '松茂町',
            ],
            [
                'code' => '364029',
                'prefecture_id' => 36,
                'name_en' => 'Kitajima-chō',
                'name_jp' => '北島町',
            ],
            [
                'code' => '364037',
                'prefecture_id' => 36,
                'name_en' => 'Aizumi-chō',
                'name_jp' => '藍住町',
            ],
            [
                'code' => '364045',
                'prefecture_id' => 36,
                'name_en' => 'Itano-chō',
                'name_jp' => '板野町',
            ],
            [
                'code' => '364053',
                'prefecture_id' => 36,
                'name_en' => 'Kamiita-chō',
                'name_jp' => '上板町',
            ],
            [
                'code' => '364681',
                'prefecture_id' => 36,
                'name_en' => 'Tsurugi-chō',
                'name_jp' => 'つるぎ町',
            ],
            [
                'code' => '364894',
                'prefecture_id' => 36,
                'name_en' => 'Higashimiyoshi-chō',
                'name_jp' => '東みよし町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
