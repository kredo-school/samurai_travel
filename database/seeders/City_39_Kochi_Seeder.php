<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_39_Kochi_Seeder extends Seeder
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
                'code' => '392014',
                'prefecture_id' => 39,
                'name_en' => 'Kouchi-shi',
                'name_jp' => '高知市',
            ],
            [
                'code' => '392022',
                'prefecture_id' => 39,
                'name_en' => 'Muroto-shi',
                'name_jp' => '室戸市',
            ],
            [
                'code' => '392031',
                'prefecture_id' => 39,
                'name_en' => 'Aki-shi',
                'name_jp' => '安芸市',
            ],
            [
                'code' => '392049',
                'prefecture_id' => 39,
                'name_en' => 'Nankoku-shi',
                'name_jp' => '南国市',
            ],
            [
                'code' => '392057',
                'prefecture_id' => 39,
                'name_en' => 'Tosa-shi',
                'name_jp' => '土佐市',
            ],
            [
                'code' => '392065',
                'prefecture_id' => 39,
                'name_en' => 'Susaki-shi',
                'name_jp' => '須崎市',
            ],
            [
                'code' => '392081',
                'prefecture_id' => 39,
                'name_en' => 'Sukumo-shi',
                'name_jp' => '宿毛市',
            ],
            [
                'code' => '392090',
                'prefecture_id' => 39,
                'name_en' => 'Tosashimizu-shi',
                'name_jp' => '土佐清水市',
            ],
            [
                'code' => '392103',
                'prefecture_id' => 39,
                'name_en' => 'Shimanto-shi',
                'name_jp' => '四万十市',
            ],
            [
                'code' => '392111',
                'prefecture_id' => 39,
                'name_en' => 'Kounan-shi',
                'name_jp' => '香南市',
            ],
            [
                'code' => '392120',
                'prefecture_id' => 39,
                'name_en' => 'Kami-shi',
                'name_jp' => '香美市',
            ],
            [
                'code' => '393011',
                'prefecture_id' => 39,
                'name_en' => 'Tōyō-chō',
                'name_jp' => '東洋町',
            ],
            [
                'code' => '393029',
                'prefecture_id' => 39,
                'name_en' => 'Nahari-chō',
                'name_jp' => '奈半利町',
            ],
            [
                'code' => '393037',
                'prefecture_id' => 39,
                'name_en' => 'Tano-chō',
                'name_jp' => '田野町',
            ],
            [
                'code' => '393045',
                'prefecture_id' => 39,
                'name_en' => 'Yasuda-chō',
                'name_jp' => '安田町',
            ],
            [
                'code' => '393053',
                'prefecture_id' => 39,
                'name_en' => 'Kitagawamura',
                'name_jp' => '北川村',
            ],
            [
                'code' => '393061',
                'prefecture_id' => 39,
                'name_en' => 'Umaji-mura',
                'name_jp' => '馬路村',
            ],
            [
                'code' => '393070',
                'prefecture_id' => 39,
                'name_en' => 'Geisei-mura',
                'name_jp' => '芸西村',
            ],
            [
                'code' => '393410',
                'prefecture_id' => 39,
                'name_en' => 'Motoyamachō',
                'name_jp' => '本山町',
            ],
            [
                'code' => '393444',
                'prefecture_id' => 39,
                'name_en' => 'Ototoyachō',
                'name_jp' => '大豊町',
            ],
            [
                'code' => '393631',
                'prefecture_id' => 39,
                'name_en' => 'Tosa-chō',
                'name_jp' => '土佐町',
            ],
            [
                'code' => '393649',
                'prefecture_id' => 39,
                'name_en' => 'Ookawamura',
                'name_jp' => '大川村',
            ],
            [
                'code' => '393860',
                'prefecture_id' => 39,
                'name_en' => 'Inochi-chō',
                'name_jp' => 'いの町',
            ],
            [
                'code' => '393878',
                'prefecture_id' => 39,
                'name_en' => 'Niyodogawachō',
                'name_jp' => '仁淀川町',
            ],
            [
                'code' => '394017',
                'prefecture_id' => 39,
                'name_en' => 'Nakatosa-chō',
                'name_jp' => '中土佐町',
            ],
            [
                'code' => '394025',
                'prefecture_id' => 39,
                'name_en' => 'Sakawa-chō',
                'name_jp' => '佐川町',
            ],
            [
                'code' => '394033',
                'prefecture_id' => 39,
                'name_en' => 'Ochi-chō',
                'name_jp' => '越知町',
            ],
            [
                'code' => '394050',
                'prefecture_id' => 39,
                'name_en' => 'Yusuhara-chō',
                'name_jp' => '梼原町',
            ],
            [
                'code' => '394106',
                'prefecture_id' => 39,
                'name_en' => 'Hitakami-mura',
                'name_jp' => '日高村',
            ],
            [
                'code' => '394114',
                'prefecture_id' => 39,
                'name_en' => 'Tsuno-chō',
                'name_jp' => '津野町',
            ],
            [
                'code' => '394122',
                'prefecture_id' => 39,
                'name_en' => 'Shimanto-chō',
                'name_jp' => '四万十町',
            ],
            [
                'code' => '394246',
                'prefecture_id' => 39,
                'name_en' => 'Ootsuki-chō',
                'name_jp' => '大月町',
            ],
            [
                'code' => '394271',
                'prefecture_id' => 39,
                'name_en' => 'Mihara-mura',
                'name_jp' => '三原村',
            ],
            [
                'code' => '394289',
                'prefecture_id' => 39,
                'name_en' => 'Kuroshio-chō',
                'name_jp' => '黒潮町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
