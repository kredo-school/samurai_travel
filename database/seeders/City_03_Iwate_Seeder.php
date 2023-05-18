<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_03_Iwate_Seeder extends Seeder
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
                'code' => '032018',
                'prefecture_id' => 3,
                'name_en' => 'Moriokashi',
                'name_jp' => '盛岡市',
            ],
            [
                'code' => '032026',
                'prefecture_id' => 3,
                'name_en' => 'Miyakoshi',
                'name_jp' => '宮古市',
            ],
            [
                'code' => '032034',
                'prefecture_id' => 3,
                'name_en' => 'Oofunato-shi',
                'name_jp' => '大船渡市',
            ],
            [
                'code' => '032051',
                'prefecture_id' => 3,
                'name_en' => 'Hanamaki-shi',
                'name_jp' => '花巻市',
            ],
            [
                'code' => '032069',
                'prefecture_id' => 3,
                'name_en' => 'Kitakami-shi',
                'name_jp' => '北上市',
            ],
            [
                'code' => '032077',
                'prefecture_id' => 3,
                'name_en' => 'Kuji-shi',
                'name_jp' => '久慈市',
            ],
            [
                'code' => '032085',
                'prefecture_id' => 3,
                'name_en' => 'Toono-shi',
                'name_jp' => '遠野市',
            ],
            [
                'code' => '032093',
                'prefecture_id' => 3,
                'name_en' => 'Ichinoseki-shi',
                'name_jp' => '一関市',
            ],
            [
                'code' => '032107',
                'prefecture_id' => 3,
                'name_en' => 'Rikuzentakata-shi',
                'name_jp' => '陸前高田市',
            ],
            [
                'code' => '032115',
                'prefecture_id' => 3,
                'name_en' => 'Kamaishi-shi',
                'name_jp' => '釜石市',
            ],
            [
                'code' => '032131',
                'prefecture_id' => 3,
                'name_en' => 'Ninohe-shi',
                'name_jp' => '二戸市',
            ],
            [
                'code' => '032140',
                'prefecture_id' => 3,
                'name_en' => 'Hachimantai-shi',
                'name_jp' => '八幡平市',
            ],
            [
                'code' => '032158',
                'prefecture_id' => 3,
                'name_en' => 'Oushuu-shi',
                'name_jp' => '奥州市',
            ],
            [
                'code' => '032166',
                'prefecture_id' => 3,
                'name_en' => 'Takizawa-shi',
                'name_jp' => '滝沢市',
            ],
            [
                'code' => '033014',
                'prefecture_id' => 3,
                'name_en' => 'Shizukuishi-cho',
                'name_jp' => '雫石町',
            ],
            [
                'code' => '033022',
                'prefecture_id' => 3,
                'name_en' => 'Kuzumaki-machi',
                'name_jp' => '葛巻町',
            ],
            [
                'code' => '033031',
                'prefecture_id' => 3,
                'name_en' => 'Iwate-machi',
                'name_jp' => '岩手町',
            ],
            [
                'code' => '033219',
                'prefecture_id' => 3,
                'name_en' => 'Shiwa-cho',
                'name_jp' => '紫波町',
            ],
            [
                'code' => '033227',
                'prefecture_id' => 3,
                'name_en' => 'Yahaba-cho',
                'name_jp' => '矢巾町',
            ],
            [
                'code' => '033669',
                'prefecture_id' => 3,
                'name_en' => 'Nishiwaga-machi',
                'name_jp' => '西和賀町',
            ],
            [
                'code' => '033812',
                'prefecture_id' => 3,
                'name_en' => 'Kanegasaki-cho',
                'name_jp' => '金ケ崎町',
            ],
            [
                'code' => '034029',
                'prefecture_id' => 3,
                'name_en' => 'Hiraizumi-cho',
                'name_jp' => '平泉町',
            ],
            [
                'code' => '034410',
                'prefecture_id' => 3,
                'name_en' => 'Sumita-cho',
                'name_jp' => '住田町',
            ],
            [
                'code' => '034614',
                'prefecture_id' => 3,
                'name_en' => 'Otsuchi-cho',
                'name_jp' => '大槌町',
            ],
            [
                'code' => '034827',
                'prefecture_id' => 3,
                'name_en' => 'Yamada-machi',
                'name_jp' => '山田町',
            ],
            [
                'code' => '034835',
                'prefecture_id' => 3,
                'name_en' => 'Iwai-zumi-cho',
                'name_jp' => '岩泉町',
            ],
            [
                'code' => '034843',
                'prefecture_id' => 3,
                'name_en' => 'Tanohata-mura',
                'name_jp' => '田野畑村',
            ],
            [
                'code' => '034851',
                'prefecture_id' => 3,
                'name_en' => 'Fudai-mura',
                'name_jp' => '普代村',
            ],
            [
                'code' => '035017',
                'prefecture_id' => 3,
                'name_en' => 'Karumai-machi',
                'name_jp' => '軽米町',
            ],
            [
                'code' => '035033',
                'prefecture_id' => 3,
                'name_en' => 'Noda-mura',
                'name_jp' => '野田村',
            ],
            [
                'code' => '035068',
                'prefecture_id' => 3,
                'name_en' => 'Kunohe-mura',
                'name_jp' => '九戸村',
            ],
            [
                'code' => '035076',
                'prefecture_id' => 3,
                'name_en' => 'Hirono-cho',
                'name_jp' => '洋野町',
            ],
            [
                'code' => '035246',
                'prefecture_id' => 3,
                'name_en' => 'Ichinoseki-machi',
                'name_jp' => '一戸町',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
