<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_16_Toyama_Seeder extends Seeder
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
                'id' => 769,
                'code' => '162019',
                'prefecture_id' => 16,
                'name_en' => 'Toyama-shi',
                'name_jp' => '富山市',
            ],
            [
                'id' => 770,
                'code' => '162027',
                'prefecture_id' => 16,
                'name_en' => 'Takaoka-shi',
                'name_jp' => '高岡市',
            ],
            [
                'id' => 771,
                'code' => '162043',
                'prefecture_id' => 16,
                'name_en' => 'Uozu-shi',
                'name_jp' => '魚津市',
            ],
            [
                'id' => 772,
                'code' => '162051',
                'prefecture_id' => 16,
                'name_en' => 'Himi-shi',
                'name_jp' => '氷見市',
            ],
            [
                'id' => 773,
                'code' => '162060',
                'prefecture_id' => 16,
                'name_en' => 'Namerikawa-shi',
                'name_jp' => '滑川市',
            ],
            [
                'id' => 774,
                'code' => '162078',
                'prefecture_id' => 16,
                'name_en' => 'Kurobe-shi',
                'name_jp' => '黒部市',
            ],
            [
                'id' => 775,
                'code' => '162086',
                'prefecture_id' => 16,
                'name_en' => 'Tonomi-shi',
                'name_jp' => '砺波市',
            ],
            [
                'id' => 776,
                'code' => '162094',
                'prefecture_id' => 16,
                'name_en' => 'Oyabe-shi',
                'name_jp' => '小矢部市',
            ],
            [
                'id' => 777,
                'code' => '162108',
                'prefecture_id' => 16,
                'name_en' => 'Nanto-shi',
                'name_jp' => '南砺市',
            ],
            [
                'id' => 778,
                'code' => '162116',
                'prefecture_id' => 16,
                'name_en' => 'Imizu-shi',
                'name_jp' => '射水市',
            ],
            [
                'id' => 779,
                'code' => '163210',
                'prefecture_id' => 16,
                'name_en' => 'Funahashi-mura',
                'name_jp' => '舟橋村',
            ],
            [
                'id' => 780,
                'code' => '163228',
                'prefecture_id' => 16,
                'name_en' => 'Kamii-machi',
                'name_jp' => '上市町',
            ],
            [
                'id' => 781,
                'code' => '163236',
                'prefecture_id' => 16,
                'name_en' => 'Tateyama-machi',
                'name_jp' => '立山町',
            ],
            [
                'id' => 782,
                'code' => '163422',
                'prefecture_id' => 16,
                'name_en' => 'Nyuzen-machi',
                'name_jp' => '入善町',
            ],
            [
                'id' => 783,
                'code' => '163431',
                'prefecture_id' => 16,
                'name_en' => 'Asahi-machi',
                'name_jp' => '朝日町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
