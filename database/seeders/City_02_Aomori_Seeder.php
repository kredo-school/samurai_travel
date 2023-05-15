<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_02_Aomori_Seeder extends Seeder
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
                'id' => 182,
                'code' => '022012',
                'prefecture_id' => 2,
                'name_en' => 'Aomorishi',
                'name_jp' => '青森市',
            ],
            [
                'id' => 183,
                'code' => '022021',
                'prefecture_id' => 2,
                'name_en' => 'Hirosakishi',
                'name_jp' => '弘前市',
            ],
            [
                'id' => 184,
                'code' => '022039',
                'prefecture_id' => 2,
                'name_en' => 'Hachinohe-shi',
                'name_jp' => '八戸市',
            ],
            [
                'id' => 185,
                'code' => '022047',
                'prefecture_id' => 2,
                'name_en' => 'Kuroishi-shi',
                'name_jp' => '黒石市',
            ],
            [
                'id' => 186,
                'code' => '022055',
                'prefecture_id' => 2,
                'name_en' => 'Goshogawara-shi',
                'name_jp' => '五所川原市',
            ],
            [
                'id' => 187,
                'code' => '022063',
                'prefecture_id' => 2,
                'name_en' => 'Towadashi',
                'name_jp' => '十和田市',
            ],
            [
                'id' => 188,
                'code' => '022071',
                'prefecture_id' => 2,
                'name_en' => 'Misawashi',
                'name_jp' => '三沢市',
            ],
            [
                'id' => 189,
                'code' => '022080',
                'prefecture_id' => 2,
                'name_en' => 'Mutsu-shi',
                'name_jp' => 'むつ市',
            ],
            [
                'id' => 190,
                'code' => '022098',
                'prefecture_id' => 2,
                'name_en' => 'Tsugarushi',
                'name_jp' => 'つがる市',
            ],
            [
                'id' => 191,
                'code' => '022101',
                'prefecture_id' => 2,
                'name_en' => 'Hirakawashi',
                'name_jp' => '平川市',
            ],
            [
                'id' => 192,
                'code' => '023019',
                'prefecture_id' => 2,
                'name_en' => 'Hiranaimachi',
                'name_jp' => '平内町',
            ],
            [
                'id' => 193,
                'code' => '023035',
                'prefecture_id' => 2,
                'name_en' => 'Imabetsumachi',
                'name_jp' => '今別町',
            ],
            [
                'id' => 194,
                'code' => '023043',
                'prefecture_id' => 2,
                'name_en' => 'Yomogita-mura',
                'name_jp' => '蓬田村',
            ],
            [
                'id' => 195,
                'code' => '023078',
                'prefecture_id' => 2,
                'name_en' => 'Sotogahama-machi',
                'name_jp' => '外ヶ浜町',
            ],
            [
                'id' => 196,
                'code' => '023213',
                'prefecture_id' => 2,
                'name_en' => 'Ajigasawamachi',
                'name_jp' => '鰺ヶ沢町',
            ],
            [
                'id' => 197,
                'code' => '023230',
                'prefecture_id' => 2,
                'name_en' => 'Fukaura-machi',
                'name_jp' => '深浦町',
            ],
            [
                'id' => 198,
                'code' => '023434',
                'prefecture_id' => 2,
                'name_en' => 'Nishimeyamamura',
                'name_jp' => '西目屋村',
            ],
            [
                'id' => 199,
                'code' => '023612',
                'prefecture_id' => 2,
                'name_en' => 'Fujisakimachi',
                'name_jp' => '藤崎町',
            ],
            [
                'id' => 200,
                'code' => '023621',
                'prefecture_id' => 2,
                'name_en' => 'Owani-machi',
                'name_jp' => '大鰐町',
            ],
            [
                'id' => 201,
                'code' => '023671',
                'prefecture_id' => 2,
                'name_en' => 'Inakadatemura',
                'name_jp' => '田舎館村',
            ],
            [
                'id' => 202,
                'code' => '023817',
                'prefecture_id' => 2,
                'name_en' => 'Itayanagimachi',
                'name_jp' => '板柳町',
            ],
            [
                'id' => 203,
                'code' => '023841',
                'prefecture_id' => 2,
                'name_en' => 'Tsuruta-machi',
                'name_jp' => '鶴田町',
            ],
            [
                'id' => 204,
                'code' => '023876',
                'prefecture_id' => 2,
                'name_en' => 'Nakadomarimachi',
                'name_jp' => '中泊町',
            ],
            [
                'id' => 205,
                'code' => '024015',
                'prefecture_id' => 2,
                'name_en' => 'Nohejimamachi',
                'name_jp' => '野辺地町',
            ],
            [
                'id' => 206,
                'code' => '024023',
                'prefecture_id' => 2,
                'name_en' => 'Shichinohe-machi',
                'name_jp' => '七戸町',
            ],
            [
                'id' => 207,
                'code' => '024058',
                'prefecture_id' => 2,
                'name_en' => 'Rokunohe-machi',
                'name_jp' => '六戸町',
            ],
            [
                'id' => 208,
                'code' => '024066',
                'prefecture_id' => 2,
                'name_en' => 'Yokohamamachi',
                'name_jp' => '横浜町',
            ],
            [
                'id' => 209,
                'code' => '024082',
                'prefecture_id' => 2,
                'name_en' => 'Tōhokumachi',
                'name_jp' => '東北町',
            ],
            [
                'id' => 210,
                'code' => '024112',
                'prefecture_id' => 2,
                'name_en' => 'Rokkasho-mura',
                'name_jp' => '六ヶ所村',
            ],
            [
                'id' => 211,
                'code' => '024121',
                'prefecture_id' => 2,
                'name_en' => 'Oirase-chō',
                'name_jp' => 'おいらせ町',
            ],
            [
                'id' => 212,
                'code' => '024236',
                'prefecture_id' => 2,
                'name_en' => 'Oomamachi',
                'name_jp' => '大間町',
            ],
            [
                'id' => 213,
                'code' => '024244',
                'prefecture_id' => 2,
                'name_en' => 'Higashidōrimura',
                'name_jp' => '東通村',
            ],
            [
                'id' => 214,
                'code' => '024252',
                'prefecture_id' => 2,
                'name_en' => 'Kazamaura-mura',
                'name_jp' => '風間浦村',
            ],
            [
                'id' => 215,
                'code' => '024261',
                'prefecture_id' => 2,
                'name_en' => 'Saimura',
                'name_jp' => '佐井村',
            ],
            [
                'id' => 216,
                'code' => '024414',
                'prefecture_id' => 2,
                'name_en' => 'Sannohe-machi',
                'name_jp' => '三戸町',
            ],
            [
                'id' => 217,
                'code' => '024422',
                'prefecture_id' => 2,
                'name_en' => 'Gonohe-machi',
                'name_jp' => '五戸町',
            ],
            [
                'id' => 218,
                'code' => '024431',
                'prefecture_id' => 2,
                'name_en' => 'Takkō-machi',
                'name_jp' => '田子町',
            ],
            [
                'id' => 219,
                'code' => '024457',
                'prefecture_id' => 2,
                'name_en' => 'Nambu-chō',
                'name_jp' => '南部町',
            ],
            [
                'id' => 220,
                'code' => '024465',
                'prefecture_id' => 2,
                'name_en' => 'Hashikamimachi',
                'name_jp' => '階上町',
            ],
            [
                'id' => 221,
                'code' => '024503',
                'prefecture_id' => 2,
                'name_en' => 'Shingō-umra',
                'name_jp' => '新郷村',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
