<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_42_Nagasaki_Seeder extends Seeder
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
                'code' => '422011',
                'prefecture_id' => 42,
                'name_en' => 'Nagasakishi',
                'name_jp' => '長崎市',
            ],
            [
                'code' => '422029',
                'prefecture_id' => 42,
                'name_en' => 'Saseboshi',
                'name_jp' => '佐世保市',
            ],
            [
                'code' => '422037',
                'prefecture_id' => 42,
                'name_en' => 'Shimabarashi',
                'name_jp' => '島原市',
            ],
            [
                'code' => '422045',
                'prefecture_id' => 42,
                'name_en' => 'Isahayashi',
                'name_jp' => '諫早市',
            ],
            [
                'code' => '422053',
                'prefecture_id' => 42,
                'name_en' => 'Oomurashi',
                'name_jp' => '大村市',
            ],
            [
                'code' => '422070',
                'prefecture_id' => 42,
                'name_en' => 'Hiradoshi',
                'name_jp' => '平戸市',
            ],
            [
                'code' => '422088',
                'prefecture_id' => 42,
                'name_en' => 'Matsuurashi',
                'name_jp' => '松浦市',
            ],
            [
                'code' => '422096',
                'prefecture_id' => 42,
                'name_en' => 'Tushimashi',
                'name_jp' => '対馬市',
            ],
            [
                'code' => '422100',
                'prefecture_id' => 42,
                'name_en' => 'Ikishi',
                'name_jp' => '壱岐市',
            ],
            [
                'code' => '422118',
                'prefecture_id' => 42,
                'name_en' => 'Gotoushi',
                'name_jp' => '五島市',
            ],
            [
                'code' => '422126',
                'prefecture_id' => 42,
                'name_en' => 'Saikaishi',
                'name_jp' => '西海市',
            ],
            [
                'code' => '422134',
                'prefecture_id' => 42,
                'name_en' => 'Unzenshi',
                'name_jp' => '雲仙市',
            ],
            [
                'code' => '422142',
                'prefecture_id' => 42,
                'name_en' => 'Minamishimabarashi',
                'name_jp' => '南島原市',
            ],
            [
                'code' => '423076',
                'prefecture_id' => 42,
                'name_en' => 'Nagayochou',
                'name_jp' => '長与町',
            ],
            [
                'code' => '423084',
                'prefecture_id' => 42,
                'name_en' => 'Tokitsuchou',
                'name_jp' => '時津町',
            ],
            [
                'code' => '423211',
                'prefecture_id' => 42,
                'name_en' => 'Higashisonogichou',
                'name_jp' => '東彼杵町',
            ],
            [
                'code' => '423220',
                'prefecture_id' => 42,
                'name_en' => 'Kawatanachou',
                'name_jp' => '川棚町',
            ],
            [
                'code' => '423238',
                'prefecture_id' => 42,
                'name_en' => 'Hasamichou',
                'name_jp' => '波佐見町',
            ],
            [
                'code' => '423831',
                'prefecture_id' => 42,
                'name_en' => 'Ochidachou',
                'name_jp' => '小値賀町',
            ],
            [
                'code' => '423912',
                'prefecture_id' => 42,
                'name_en' => 'Sasazachou',
                'name_jp' => '佐々町',
            ],
            [
                'code' => '424111',
                'prefecture_id' => 42,
                'name_en' => 'Shinkamigotouchou',
                'name_jp' => '新上五島町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
