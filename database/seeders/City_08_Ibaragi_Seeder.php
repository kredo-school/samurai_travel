<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_08_Ibaragi_Seeder extends Seeder
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
                'code' => '082015',
                'prefecture_id' => 8,
                'name_en' => 'Mitoshi',
                'name_jp' => '水戸市',
            ],
            [
                'code' => '082023',
                'prefecture_id' => 8,
                'name_en' => 'Hitachishi',
                'name_jp' => '日立市',
            ],
            [
                'code' => '082031',
                'prefecture_id' => 8,
                'name_en' => 'Tsuchiurashi',
                'name_jp' => '土浦市',
            ],
            [
                'code' => '082040',
                'prefecture_id' => 8,
                'name_en' => 'Kogashi',
                'name_jp' => '古河市',
            ],
            [
                'code' => '082058',
                'prefecture_id' => 8,
                'name_en' => 'Ishiohashi',
                'name_jp' => '石岡市',
            ],
            [
                'code' => '082074',
                'prefecture_id' => 8,
                'name_en' => 'Yukishi',
                'name_jp' => '結城市',
            ],
            [
                'code' => '082082',
                'prefecture_id' => 8,
                'name_en' => 'Ryugasaki-shi',
                'name_jp' => '龍ケ崎市',
            ],
            [
                'code' => '082104',
                'prefecture_id' => 8,
                'name_en' => 'Shimotsuma-shi',
                'name_jp' => '下妻市',
            ],
            [
                'code' => '082112',
                'prefecture_id' => 8,
                'name_en' => 'Joso-shi',
                'name_jp' => '常総市',
            ],
            [
                'code' => '082121',
                'prefecture_id' => 8,
                'name_en' => 'Hitachiota-shi',
                'name_jp' => '常陸太田市',
            ],
            [
                'code' => '082147',
                'prefecture_id' => 8,
                'name_en' => 'Takahagi-shi',
                'name_jp' => '高萩市',
            ],
            [
                'code' => '082155',
                'prefecture_id' => 8,
                'name_en' => 'Kitaibaraki-shi',
                'name_jp' => '北茨城市',
            ],
            [
                'code' => '082163',
                'prefecture_id' => 8,
                'name_en' => 'Kasama-shi',
                'name_jp' => '笠間市',
            ],
            [
                'code' => '082171',
                'prefecture_id' => 8,
                'name_en' => 'Toride-shi',
                'name_jp' => '取手市',
            ],
            [
                'code' => '082198',
                'prefecture_id' => 8,
                'name_en' => 'Ushiku-shi',
                'name_jp' => '牛久市',
            ],
            [
                'code' => '082201',
                'prefecture_id' => 8,
                'name_en' => 'Tsukuba-shi',
                'name_jp' => 'つくば市',
            ],
            [
                'code' => '082210',
                'prefecture_id' => 8,
                'name_en' => 'Hitachinaka-shi',
                'name_jp' => 'ひたちなか市',
            ],
            [
                'code' => '082228',
                'prefecture_id' => 8,
                'name_en' => 'Kashima-shi',
                'name_jp' => '鹿嶋市',
            ],
            [
                'code' => '082236',
                'prefecture_id' => 8,
                'name_en' => 'Itako-shi',
                'name_jp' => '潮来市',
            ],
            [
                'code' => '082244',
                'prefecture_id' => 8,
                'name_en' => 'Moriya-shi',
                'name_jp' => '守谷市',
            ],
            [
                'code' => '082252',
                'prefecture_id' => 8,
                'name_en' => 'Hitachi-Omiya-shi',
                'name_jp' => '常陸大宮市',
            ],
            [
                'code' => '082261',
                'prefecture_id' => 8,
                'name_en' => 'Nakashi',
                'name_jp' => '那珂市',
            ],
            [
                'code' => '082279',
                'prefecture_id' => 8,
                'name_en' => 'Chikusei-shi',
                'name_jp' => '筑西市',
            ],
            [
                'code' => '082287',
                'prefecture_id' => 8,
                'name_en' => 'Bandou-shi',
                'name_jp' => '坂東市',
            ],
            [
                'code' => '082295',
                'prefecture_id' => 8,
                'name_en' => 'Inashiki-shi',
                'name_jp' => '稲敷市',
            ],
            [
                'code' => '082309',
                'prefecture_id' => 8,
                'name_en' => 'Kasumigaura-shi',
                'name_jp' => 'かすみがうら市',
            ],
            [
                'code' => '082317',
                'prefecture_id' => 8,
                'name_en' => 'Sakuragawa-shi',
                'name_jp' => '桜川市',
            ],
            [
                'code' => '082325',
                'prefecture_id' => 8,
                'name_en' => 'Kamisu-shi',
                'name_jp' => '神栖市',
            ],
            [
                'code' => '082333',
                'prefecture_id' => 8,
                'name_en' => 'Namegata-shi',
                'name_jp' => '行方市',
            ],
            [
                'code' => '082341',
                'prefecture_id' => 8,
                'name_en' => 'Hokota-shi',
                'name_jp' => '鉾田市',
            ],
            [
                'code' => '082350',
                'prefecture_id' => 8,
                'name_en' => 'Tsukubamirai-shi',
                'name_jp' => 'つくばみらい市',
            ],
            [
                'code' => '082368',
                'prefecture_id' => 8,
                'name_en' => 'Omigawa-shi',
                'name_jp' => '小美玉市',
            ],
            [
                'code' => '083020',
                'prefecture_id' => 8,
                'name_en' => 'Ibaraki-machi',
                'name_jp' => '茨城町',
            ],
            [
                'code' => '083097',
                'prefecture_id' => 8,
                'name_en' => 'Ooarai-machi',
                'name_jp' => '大洗町',
            ],
            [
                'code' => '083101',
                'prefecture_id' => 8,
                'name_en' => 'Shirosato-machi',
                'name_jp' => '城里町',
            ],
            [
                'code' => '083411',
                'prefecture_id' => 8,
                'name_en' => 'Toukaimura',
                'name_jp' => '東海村',
            ],
            [
                'code' => '083640',
                'prefecture_id' => 8,
                'name_en' => 'Daigo-machi',
                'name_jp' => '大子町',
            ],
            [
                'code' => '084425',
                'prefecture_id' => 8,
                'name_en' => 'Mihommura',
                'name_jp' => '美浦村',
            ],
            [
                'code' => '084433',
                'prefecture_id' => 8,
                'name_en' => 'Ami-machi',
                'name_jp' => '阿見町',
            ],
            [
                'code' => '084476',
                'prefecture_id' => 8,
                'name_en' => 'Kawachi-machi',
                'name_jp' => '河内町',
            ],
            [
                'code' => '085219',
                'prefecture_id' => 8,
                'name_en' => 'Yachiyomachi',
                'name_jp' => '八千代町',
            ],
            [
                'code' => '085421',
                'prefecture_id' => 8,
                'name_en' => 'Goka-machi',
                'name_jp' => '五霞町',
            ],
            [
                'code' => '085464',
                'prefecture_id' => 8,
                'name_en' => 'Sakaimachi',
                'name_jp' => '境町',
            ],
            [
                'code' => '085642',
                'prefecture_id' => 8,
                'name_en' => 'Tonemachi',
                'name_jp' => '利根町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
