<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_35_Yamaguchi_Seeder extends Seeder
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
                'code' => '352012',
                'prefecture_id' => 35,
                'name_en' => 'Shimonoseki-shi',
                'name_jp' => '下関市',
            ],
            [
                'code' => '352021',
                'prefecture_id' => 35,
                'name_en' => 'Ube-shi',
                'name_jp' => '宇部市',
            ],
            [
                'code' => '352039',
                'prefecture_id' => 35,
                'name_en' => 'Yamaguchi-shi',
                'name_jp' => '山口市',
            ],
            [
                'code' => '352047',
                'prefecture_id' => 35,
                'name_en' => 'Hagi-shi',
                'name_jp' => '萩市',
            ],
            [
                'code' => '352063',
                'prefecture_id' => 35,
                'name_en' => 'Hofu-shi',
                'name_jp' => '防府市',
            ],
            [
                'code' => '352071',
                'prefecture_id' => 35,
                'name_en' => 'Kudamatsu-shi',
                'name_jp' => '下松市',
            ],
            [
                'code' => '352080',
                'prefecture_id' => 35,
                'name_en' => 'Iwakuni-shi',
                'name_jp' => '岩国市',
            ],
            [
                'code' => '352101',
                'prefecture_id' => 35,
                'name_en' => 'Hikari-shi',
                'name_jp' => '光市',
            ],
            [
                'code' => '352110',
                'prefecture_id' => 35,
                'name_en' => 'Nagato-shi',
                'name_jp' => '長門市',
            ],
            [
                'code' => '352128',
                'prefecture_id' => 35,
                'name_en' => 'Yanai-shi',
                'name_jp' => '柳井市',
            ],
            [
                'code' => '352136',
                'prefecture_id' => 35,
                'name_en' => 'Mine-shi',
                'name_jp' => '美祢市',
            ],
            [
                'code' => '352152',
                'prefecture_id' => 35,
                'name_en' => 'Shunan-shi',
                'name_jp' => '周南市',
            ],
            [
                'code' => '352161',
                'prefecture_id' => 35,
                'name_en' => 'Sanyo-Onoda-shi',
                'name_jp' => '山陽小野田市',
            ],
            [
                'code' => '353051',
                'prefecture_id' => 35,
                'name_en' => 'Suou-Oshima-cho',
                'name_jp' => '周防大島町',
            ],
            [
                'code' => '353213',
                'prefecture_id' => 35,
                'name_en' => 'Waki-cho',
                'name_jp' => '和木町',
            ],
            [
                'code' => '353418',
                'prefecture_id' => 35,
                'name_en' => 'Kaminoseki-cho',
                'name_jp' => '上関町',
            ],
            [
                'code' => '353434',
                'prefecture_id' => 35,
                'name_en' => 'Tabuse-cho',
                'name_jp' => '田布施町',
            ],
            [
                'code' => '353442',
                'prefecture_id' => 35,
                'name_en' => 'Hiro-o-cho',
                'name_jp' => '平生町',
            ],
            [
                'code' => '355020',
                'prefecture_id' => 35,
                'name_en' => 'Abu-cho',
                'name_jp' => '阿武町',
            ],
        ]);
        
        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
