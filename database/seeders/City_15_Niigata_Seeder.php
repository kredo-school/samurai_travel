<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_15_Niigata_Seeder extends Seeder
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
                'code' => '151009',
                'prefecture_id' => 15,
                'name_en' => 'Nigata City',
                'name_jp' => '新潟市',
            ],
            [
                'code' => '152021',
                'prefecture_id' => 15,
                'name_en' => 'Nagaoka City',
                'name_jp' => '長岡市',
            ],
            [
                'code' => '152048',
                'prefecture_id' => 15,
                'name_en' => 'Sanjo City',
                'name_jp' => '三条市',
            ],
            [
                'code' => '152056',
                'prefecture_id' => 15,
                'name_en' => 'Kashiwazaki City',
                'name_jp' => '柏崎市',
            ],
            [
                'code' => '152064',
                'prefecture_id' => 15,
                'name_en' => 'Shibata City',
                'name_jp' => '新発田市',
            ],
            [
                'code' => '152081',
                'prefecture_id' => 15,
                'name_en' => 'Ojiya City',
                'name_jp' => '小千谷市',
            ],
            [
                'code' => '152099',
                'prefecture_id' => 15,
                'name_en' => 'Kamo City',
                'name_jp' => '加茂市',
            ],
            [
                'code' => '152102',
                'prefecture_id' => 15,
                'name_en' => 'Tsuokamishio Town',
                'name_jp' => '十日町市',
            ],
            [
                'code' => '152111',
                'prefecture_id' => 15,
                'name_en' => 'Mitsuke City',
                'name_jp' => '見附市',
            ],
            [
                'code' => '152129',
                'prefecture_id' => 15,
                'name_en' => 'Murakami City',
                'name_jp' => '村上市',
            ],
            [
                'code' => '152137',
                'prefecture_id' => 15,
                'name_en' => 'Tsubame City',
                'name_jp' => '燕市',
            ],
            [
                'code' => '152161',
                'prefecture_id' => 15,
                'name_en' => 'Itoigawa City',
                'name_jp' => '糸魚川市',
            ],
            [
                'code' => '152170',
                'prefecture_id' => 15,
                'name_en' => 'Myoko City',
                'name_jp' => '妙高市',
            ],
            [
                'code' => '152188',
                'prefecture_id' => 15,
                'name_en' => 'Gosen City',
                'name_jp' => '五泉市',
            ],
            [
                'code' => '152226',
                'prefecture_id' => 15,
                'name_en' => 'Joetsu City',
                'name_jp' => '上越市',
            ],
            [
                'code' => '152234',
                'prefecture_id' => 15,
                'name_en' => 'Agano City',
                'name_jp' => '阿賀野市',
            ],
            [
                'code' => '152242',
                'prefecture_id' => 15,
                'name_en' => 'Sadogashima Town',
                'name_jp' => '佐渡市',
            ],
            [
                'code' => '152251',
                'prefecture_id' => 15,
                'name_en' => 'Uonuma City',
                'name_jp' => '魚沼市',
            ],
            [
                'code' => '152269',
                'prefecture_id' => 15,
                'name_en' => 'Minami-Uonuma City',
                'name_jp' => '南魚沼市',
            ],
            [
                'code' => '152277',
                'prefecture_id' => 15,
                'name_en' => 'Tainai City',
                'name_jp' => '胎内市',
            ],
            [
                'code' => '153079',
                'prefecture_id' => 15,
                'name_en' => 'Seiro Town',
                'name_jp' => '聖籠町',
            ],
            [
                'code' => '153427',
                'prefecture_id' => 15,
                'name_en' => 'Yahiko Village',
                'name_jp' => '弥彦村',
            ],
            [
                'code' => '153613',
                'prefecture_id' => 15,
                'name_en' => 'Tagami Town',
                'name_jp' => '田上町',
            ],
            [
                'code' => '153851',
                'prefecture_id' => 15,
                'name_en' => 'Agamachi',
                'name_jp' => '阿賀町',
            ],
            [
                'code' => '154059',
                'prefecture_id' => 15,
                'name_en' => 'Izumozaki Town',
                'name_jp' => '出雲崎町',
            ],
            [
                'code' => '154610',
                'prefecture_id' => 15,
                'name_en' => 'Yuzawa Town',
                'name_jp' => '湯沢町',
            ],
            [
                'code' => '154822',
                'prefecture_id' => 15,
                'name_en' => 'Tsunan Town',
                'name_jp' => '津南町',
            ],
            [
                'code' => '155047',
                'prefecture_id' => 15,
                'name_en' => 'Kariwa Village',
                'name_jp' => '刈羽村',
            ],
            [
                'code' => '155811',
                'prefecture_id' => 15,
                'name_en' => 'Sekikawa Village',
                'name_jp' => '関川村',
            ],
            [
                'code' => '155861',
                'prefecture_id' => 15,
                'name_en' => 'Awashimaura Village',
                'name_jp' => '粟島浦村',
            ],
        ]);
        
        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
