<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_26_Kyoto_Seeder extends Seeder
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
                'code' => '261009',
                'prefecture_id' => 26,
                'name_en' => 'Kyoto-shi',
                'name_jp' => '京都市',
            ],
            [
                'code' => '262013',
                'prefecture_id' => 26,
                'name_en' => 'Fukuchiyama-shi',
                'name_jp' => '福知山市',
            ],
            [
                'code' => '262021',
                'prefecture_id' => 26,
                'name_en' => 'Miyazaki-shi',
                'name_jp' => '舞鶴市',
            ],
            [
                'code' => '262030',
                'prefecture_id' => 26,
                'name_en' => 'Ayabe-shi',
                'name_jp' => '綾部市',
            ],
            [
                'code' => '262048',
                'prefecture_id' => 26,
                'name_en' => 'Uji-shi',
                'name_jp' => '宇治市',
            ],
            [
                'code' => '262056',
                'prefecture_id' => 26,
                'name_en' => 'Miyazu-shi',
                'name_jp' => '宮津市',
            ],
            [
                'code' => '262064',
                'prefecture_id' => 26,
                'name_en' => 'Kameoka-shi',
                'name_jp' => '亀岡市',
            ],
            [
                'code' => '262072',
                'prefecture_id' => 26,
                'name_en' => 'Joyo-shi',
                'name_jp' => '城陽市',
            ],
            [
                'code' => '262081',
                'prefecture_id' => 26,
                'name_en' => 'Muko-shi',
                'name_jp' => '向日市',
            ],
            [
                'code' => '262099',
                'prefecture_id' => 26,
                'name_en' => 'Nagaokakyo-shi',
                'name_jp' => '長岡京市',
            ],
            [
                'code' => '262102',
                'prefecture_id' => 26,
                'name_en' => 'Yawata-shi',
                'name_jp' => '八幡市',
            ],
            [
                'code' => '262111',
                'prefecture_id' => 26,
                'name_en' => 'Kyotanabe-shi',
                'name_jp' => '京田辺市',
            ],
            [
                'code' => '262129',
                'prefecture_id' => 26,
                'name_en' => 'Kyotango-shi',
                'name_jp' => '京丹後市',
            ],
            [
                'code' => '262137',
                'prefecture_id' => 26,
                'name_en' => 'Nantan-shi',
                'name_jp' => '南丹市',
            ],
            [
                'code' => '262145',
                'prefecture_id' => 26,
                'name_en' => 'Kizugawashi',
                'name_jp' => '木津川市',
            ],
            [
                'code' => '263036',
                'prefecture_id' => 26,
                'name_en' => 'Oyamazaki-cho',
                'name_jp' => '大山崎町',
            ],
            [
                'code' => '263222',
                'prefecture_id' => 26,
                'name_en' => 'Kumiyama-cho',
                'name_jp' => '久御山町',
            ],
            [
                'code' => '263435',
                'prefecture_id' => 26,
                'name_en' => 'Ide-cho',
                'name_jp' => '井手町',
            ],
            [
                'code' => '263443',
                'prefecture_id' => 26,
                'name_en' => 'Ujitawara-cho',
                'name_jp' => '宇治田原町',
            ],
            [
                'code' => '263648',
                'prefecture_id' => 26,
                'name_en' => 'Kasagi-cho',
                'name_jp' => '笠置町',
            ],
            [
                'code' => '263656',
                'prefecture_id' => 26,
                'name_en' => 'Wazuka-cho',
                'name_jp' => '和束町',
            ],
            [
                'code' => '263664',
                'prefecture_id' => 26,
                'name_en' => 'Seika-cho',
                'name_jp' => '精華町',
            ],
            [
                'code' => '263672',
                'prefecture_id' => 26,
                'name_en' => 'Minamiyamashiro-mura',
                'name_jp' => '南山城村',
            ],
            [
                'code' => '264075',
                'prefecture_id' => 26,
                'name_en' => 'Kyotamba-cho',
                'name_jp' => '京丹波町',
            ],
            [
                'code' => '264636',
                'prefecture_id' => 26,
                'name_en' => 'Ine-cho',
                'name_jp' => '伊根町',
            ],
            [
                'code' => '264652',
                'prefecture_id' => 26,
                'name_en' => 'Yosano-cho',
                'name_jp' => '与謝野町',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
