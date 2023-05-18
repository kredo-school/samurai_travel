<?php

namespace Database\Seeders;

use App\Models\City;
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
        $data = collect([
            [
                'code' => '022012',
                'prefecture_id' => 2,
                'name_en' => 'Aomorishi',
                'name_jp' => '青森市',
            ],
            [
                'code' => '022021',
                'prefecture_id' => 2,
                'name_en' => 'Hirosakishi',
                'name_jp' => '弘前市',
            ],
            [
                'code' => '022039',
                'prefecture_id' => 2,
                'name_en' => 'Hachinohe-shi',
                'name_jp' => '八戸市',
            ],
            [
                'code' => '022047',
                'prefecture_id' => 2,
                'name_en' => 'Kuroishi-shi',
                'name_jp' => '黒石市',
            ],
            [
                'code' => '022055',
                'prefecture_id' => 2,
                'name_en' => 'Goshogawara-shi',
                'name_jp' => '五所川原市',
            ],
            [
                'code' => '022063',
                'prefecture_id' => 2,
                'name_en' => 'Towadashi',
                'name_jp' => '十和田市',
            ],
            [
                'code' => '022071',
                'prefecture_id' => 2,
                'name_en' => 'Misawashi',
                'name_jp' => '三沢市',
            ],
            [
                'code' => '022080',
                'prefecture_id' => 2,
                'name_en' => 'Mutsu-shi',
                'name_jp' => 'むつ市',
            ],
            [
                'code' => '022098',
                'prefecture_id' => 2,
                'name_en' => 'Tsugarushi',
                'name_jp' => 'つがる市',
            ],
            [
                'code' => '022101',
                'prefecture_id' => 2,
                'name_en' => 'Hirakawashi',
                'name_jp' => '平川市',
            ],
            [
                'code' => '023019',
                'prefecture_id' => 2,
                'name_en' => 'Hiranaimachi',
                'name_jp' => '平内町',
            ],
            [
                'code' => '023035',
                'prefecture_id' => 2,
                'name_en' => 'Imabetsumachi',
                'name_jp' => '今別町',
            ],
            [
                'code' => '023043',
                'prefecture_id' => 2,
                'name_en' => 'Yomogita-mura',
                'name_jp' => '蓬田村',
            ],
            [
                'code' => '023078',
                'prefecture_id' => 2,
                'name_en' => 'Sotogahama-machi',
                'name_jp' => '外ヶ浜町',
            ],
            [
                'code' => '023213',
                'prefecture_id' => 2,
                'name_en' => 'Ajigasawamachi',
                'name_jp' => '鰺ヶ沢町',
            ],
            [
                'code' => '023230',
                'prefecture_id' => 2,
                'name_en' => 'Fukaura-machi',
                'name_jp' => '深浦町',
            ],
            [
                'code' => '023434',
                'prefecture_id' => 2,
                'name_en' => 'Nishimeyamamura',
                'name_jp' => '西目屋村',
            ],
            [
                'code' => '023612',
                'prefecture_id' => 2,
                'name_en' => 'Fujisakimachi',
                'name_jp' => '藤崎町',
            ],
            [
                'code' => '023621',
                'prefecture_id' => 2,
                'name_en' => 'Owani-machi',
                'name_jp' => '大鰐町',
            ],
            [
                'code' => '023671',
                'prefecture_id' => 2,
                'name_en' => 'Inakadatemura',
                'name_jp' => '田舎館村',
            ],
            [
                'code' => '023817',
                'prefecture_id' => 2,
                'name_en' => 'Itayanagimachi',
                'name_jp' => '板柳町',
            ],
            [
                'code' => '023841',
                'prefecture_id' => 2,
                'name_en' => 'Tsuruta-machi',
                'name_jp' => '鶴田町',
            ],
            [
                'code' => '023876',
                'prefecture_id' => 2,
                'name_en' => 'Nakadomarimachi',
                'name_jp' => '中泊町',
            ],
            [
                'code' => '024015',
                'prefecture_id' => 2,
                'name_en' => 'Nohejimamachi',
                'name_jp' => '野辺地町',
            ],
            [
                'code' => '024023',
                'prefecture_id' => 2,
                'name_en' => 'Shichinohe-machi',
                'name_jp' => '七戸町',
            ],
            [
                'code' => '024058',
                'prefecture_id' => 2,
                'name_en' => 'Rokunohe-machi',
                'name_jp' => '六戸町',
            ],
            [
                'code' => '024066',
                'prefecture_id' => 2,
                'name_en' => 'Yokohamamachi',
                'name_jp' => '横浜町',
            ],
            [
                'code' => '024082',
                'prefecture_id' => 2,
                'name_en' => 'Tōhokumachi',
                'name_jp' => '東北町',
            ],
            [
                'code' => '024112',
                'prefecture_id' => 2,
                'name_en' => 'Rokkasho-mura',
                'name_jp' => '六ヶ所村',
            ],
            [
                'code' => '024121',
                'prefecture_id' => 2,
                'name_en' => 'Oirase-chō',
                'name_jp' => 'おいらせ町',
            ],
            [
                'code' => '024236',
                'prefecture_id' => 2,
                'name_en' => 'Oomamachi',
                'name_jp' => '大間町',
            ],
            [
                'code' => '024244',
                'prefecture_id' => 2,
                'name_en' => 'Higashidōrimura',
                'name_jp' => '東通村',
            ],
            [
                'code' => '024252',
                'prefecture_id' => 2,
                'name_en' => 'Kazamaura-mura',
                'name_jp' => '風間浦村',
            ],
            [
                'code' => '024261',
                'prefecture_id' => 2,
                'name_en' => 'Saimura',
                'name_jp' => '佐井村',
            ],
            [
                'code' => '024414',
                'prefecture_id' => 2,
                'name_en' => 'Sannohe-machi',
                'name_jp' => '三戸町',
            ],
            [
                'code' => '024422',
                'prefecture_id' => 2,
                'name_en' => 'Gonohe-machi',
                'name_jp' => '五戸町',
            ],
            [
                'code' => '024431',
                'prefecture_id' => 2,
                'name_en' => 'Takkō-machi',
                'name_jp' => '田子町',
            ],
            [
                'code' => '024457',
                'prefecture_id' => 2,
                'name_en' => 'Nambu-chō',
                'name_jp' => '南部町',
            ],
            [
                'code' => '024465',
                'prefecture_id' => 2,
                'name_en' => 'Hashikamimachi',
                'name_jp' => '階上町',
            ],
            [
                'code' => '024503',
                'prefecture_id' => 2,
                'name_en' => 'Shingō-umra',
                'name_jp' => '新郷村',
            ],
        ]);
        
        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
