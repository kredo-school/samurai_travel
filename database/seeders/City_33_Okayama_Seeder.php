<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_33_Okayama_Seeder extends Seeder
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
                'id' => 1337,
                'code' => '331007',
                'prefecture_id' => 33,
                'name_en' => 'Okuyama City',
                'name_jp' => '岡山市',
            ],
            [
                'id' => 1338,
                'code' => '332020',
                'prefecture_id' => 33,
                'name_en' => 'Kurashiki City',
                'name_jp' => '倉敷市',
            ],
            [
                'id' => 1339,
                'code' => '332038',
                'prefecture_id' => 33,
                'name_en' => 'Tsuyama City',
                'name_jp' => '津山市',
            ],
            [
                'id' => 1340,
                'code' => '332046',
                'prefecture_id' => 33,
                'name_en' => 'Tamano City',
                'name_jp' => '玉野市',
            ],
            [
                'id' => 1341,
                'code' => '332054',
                'prefecture_id' => 33,
                'name_en' => 'Kasaoka City',
                'name_jp' => '笠岡市',
            ],
            [
                'id' => 1342,
                'code' => '332071',
                'prefecture_id' => 33,
                'name_en' => 'Ibara City',
                'name_jp' => '井原市',
            ],
            [
                'id' => 1343,
                'code' => '332089',
                'prefecture_id' => 33,
                'name_en' => 'Soja City',
                'name_jp' => '総社市',
            ],
            [
                'id' => 1344,
                'code' => '332097',
                'prefecture_id' => 33,
                'name_en' => 'Takahashi City',
                'name_jp' => '高梁市',
            ],
            [
                'id' => 1345,
                'code' => '332101',
                'prefecture_id' => 33,
                'name_en' => 'Niihama City',
                'name_jp' => '新見市',
            ],
            [
                'id' => 1346,
                'code' => '332119',
                'prefecture_id' => 33,
                'name_en' => 'Bizen City',
                'name_jp' => '備前市',
            ],
            [
                'id' => 1347,
                'code' => '332127',
                'prefecture_id' => 33,
                'name_en' => 'Setouchi City',
                'name_jp' => '瀬戸内市',
            ],
            [
                'id' => 1348,
                'code' => '332135',
                'prefecture_id' => 33,
                'name_en' => 'Akaiwa City',
                'name_jp' => '赤磐市',
            ],
            [
                'id' => 1349,
                'code' => '332143',
                'prefecture_id' => 33,
                'name_en' => 'Maniwa City',
                'name_jp' => '真庭市',
            ],
            [
                'id' => 1350,
                'code' => '332151',
                'prefecture_id' => 33,
                'name_en' => 'Mimasaka City',
                'name_jp' => '美作市',
            ],
            [
                'id' => 1351,
                'code' => '332160',
                'prefecture_id' => 33,
                'name_en' => 'Asakuchi City',
                'name_jp' => '浅口市',
            ],
            [
                'id' => 1352,
                'code' => '333468',
                'prefecture_id' => 33,
                'name_en' => 'Wake Town',
                'name_jp' => '和気町',
            ],
            [
                'id' => 1353,
                'code' => '334235',
                'prefecture_id' => 33,
                'name_en' => 'Hayashima Town',
                'name_jp' => '早島町',
            ],
            [
                'id' => 1354,
                'code' => '334456',
                'prefecture_id' => 33,
                'name_en' => 'Satosho Town',
                'name_jp' => '里庄町',
            ],
            [
                'id' => 1355,
                'code' => '334618',
                'prefecture_id' => 33,
                'name_en' => 'Yakage Town',
                'name_jp' => '矢掛町',
            ],
            [
                'id' => 1356,
                'code' => '335860',
                'prefecture_id' => 33,
                'name_en' => 'Shinjo Son',
                'name_jp' => '新庄村',
            ],
            [
                'id' => 1357,
                'code' => '336068',
                'prefecture_id' => 33,
                'name_en' => 'Kagamino Town',
                'name_jp' => '鏡野町',
            ],
            [
                'id' => 1358,
                'code' => '336220',
                'prefecture_id' => 33,
                'name_en' => 'Sho Owari Cho',
                'name_jp' => '勝央町',
            ],
            [
                'id' => 1359,
                'code' => '336238',
                'prefecture_id' => 33,
                'name_en' => 'Nagi Cho',
                'name_jp' => '奈義町',
            ],
            [
                'id' => 1360,
                'code' => '336432',
                'prefecture_id' => 33,
                'name_en' => 'Nishiawakura Son',
                'name_jp' => '西粟倉村',
            ],
            [
                'id' => 1361,
                'code' => '336637',
                'prefecture_id' => 33,
                'name_en' => 'Kumenan Cho',
                'name_jp' => '久米南町',
            ],
            [
                'id' => 1362,
                'code' => '336661',
                'prefecture_id' => 33,
                'name_en' => 'Misaki Cho',
                'name_jp' => '美咲町',
            ],
            [
                'id' => 1363,
                'code' => '336815',
                'prefecture_id' => 33,
                'name_en' => 'Kibichuo Owari Cho',
                'name_jp' => '吉備中央町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
