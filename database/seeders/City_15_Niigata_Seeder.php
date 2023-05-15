<?php

namespace Database\Seeders;

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
        $table_name = 'cities';
    
        $data = [
            [
                'id' => 738,
                'code' => '151009',
                'prefecture_id' => 15,
                'name_en' => 'Nigata City',
                'name_jp' => '新潟市',
            ],
            [
                'id' => 739,
                'code' => '152021',
                'prefecture_id' => 15,
                'name_en' => 'Nagaoka City',
                'name_jp' => '長岡市',
            ],
            [
                'id' => 740,
                'code' => '152048',
                'prefecture_id' => 15,
                'name_en' => 'Sanjo City',
                'name_jp' => '三条市',
            ],
            [
                'id' => 741,
                'code' => '152056',
                'prefecture_id' => 15,
                'name_en' => 'Kashiwazaki City',
                'name_jp' => '柏崎市',
            ],
            [
                'id' => 742,
                'code' => '152064',
                'prefecture_id' => 15,
                'name_en' => 'Shibata City',
                'name_jp' => '新発田市',
            ],
            [
                'id' => 743,
                'code' => '152081',
                'prefecture_id' => 15,
                'name_en' => 'Ojiya City',
                'name_jp' => '小千谷市',
            ],
            [
                'id' => 744,
                'code' => '152099',
                'prefecture_id' => 15,
                'name_en' => 'Kamo City',
                'name_jp' => '加茂市',
            ],
            [
                'id' => 745,
                'code' => '152102',
                'prefecture_id' => 15,
                'name_en' => 'Tsuokamishio Town',
                'name_jp' => '十日町市',
            ],
            [
                'id' => 746,
                'code' => '152111',
                'prefecture_id' => 15,
                'name_en' => 'Mitsuke City',
                'name_jp' => '見附市',
            ],
            [
                'id' => 747,
                'code' => '152129',
                'prefecture_id' => 15,
                'name_en' => 'Murakami City',
                'name_jp' => '村上市',
            ],
            [
                'id' => 748,
                'code' => '152137',
                'prefecture_id' => 15,
                'name_en' => 'Tsubame City',
                'name_jp' => '燕市',
            ],
            [
                'id' => 749,
                'code' => '152161',
                'prefecture_id' => 15,
                'name_en' => 'Itoigawa City',
                'name_jp' => '糸魚川市',
            ],
            [
                'id' => 750,
                'code' => '152170',
                'prefecture_id' => 15,
                'name_en' => 'Myoko City',
                'name_jp' => '妙高市',
            ],
            [
                'id' => 751,
                'code' => '152188',
                'prefecture_id' => 15,
                'name_en' => 'Gosen City',
                'name_jp' => '五泉市',
            ],
            [
                'id' => 752,
                'code' => '152226',
                'prefecture_id' => 15,
                'name_en' => 'Joetsu City',
                'name_jp' => '上越市',
            ],
            [
                'id' => 753,
                'code' => '152234',
                'prefecture_id' => 15,
                'name_en' => 'Agano City',
                'name_jp' => '阿賀野市',
            ],
            [
                'id' => 754,
                'code' => '152242',
                'prefecture_id' => 15,
                'name_en' => 'Sadogashima Town',
                'name_jp' => '佐渡市',
            ],
            [
                'id' => 755,
                'code' => '152251',
                'prefecture_id' => 15,
                'name_en' => 'Uonuma City',
                'name_jp' => '魚沼市',
            ],
            [
                'id' => 756,
                'code' => '152269',
                'prefecture_id' => 15,
                'name_en' => 'Minami-Uonuma City',
                'name_jp' => '南魚沼市',
            ],
            [
                'id' => 757,
                'code' => '152277',
                'prefecture_id' => 15,
                'name_en' => 'Tainai City',
                'name_jp' => '胎内市',
            ],
            [
                'id' => 758,
                'code' => '153079',
                'prefecture_id' => 15,
                'name_en' => 'Seiro Town',
                'name_jp' => '聖籠町',
            ],
            [
                'id' => 759,
                'code' => '153427',
                'prefecture_id' => 15,
                'name_en' => 'Yahiko Village',
                'name_jp' => '弥彦村',
            ],
            [
                'id' => 760,
                'code' => '153613',
                'prefecture_id' => 15,
                'name_en' => 'Tagami Town',
                'name_jp' => '田上町',
            ],
            [
                'id' => 761,
                'code' => '153851',
                'prefecture_id' => 15,
                'name_en' => 'Agamachi',
                'name_jp' => '阿賀町',
            ],
            [
                'id' => 762,
                'code' => '154059',
                'prefecture_id' => 15,
                'name_en' => 'Izumozaki Town',
                'name_jp' => '出雲崎町',
            ],
            [
                'id' => 763,
                'code' => '154610',
                'prefecture_id' => 15,
                'name_en' => 'Yuzawa Town',
                'name_jp' => '湯沢町',
            ],
            [
                'id' => 764,
                'code' => '154822',
                'prefecture_id' => 15,
                'name_en' => 'Tsunan Town',
                'name_jp' => '津南町',
            ],
            [
                'id' => 765,
                'code' => '155047',
                'prefecture_id' => 15,
                'name_en' => 'Kariwa Village',
                'name_jp' => '刈羽村',
            ],
            [
                'id' => 766,
                'code' => '155811',
                'prefecture_id' => 15,
                'name_en' => 'Sekikawa Village',
                'name_jp' => '関川村',
            ],
            [
                'id' => 767,
                'code' => '155861',
                'prefecture_id' => 15,
                'name_en' => 'Awashimaura Village',
                'name_jp' => '粟島浦村',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
