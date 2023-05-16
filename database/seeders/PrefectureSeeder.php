<?php

namespace Database\Seeders;

use App\Models\Prefecture;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Prefecture::truncate(); 
        Schema::enableForeignKeyConstraints();

        $data = collect([
            [
                'id' => 1,
                'code' => '01',
                'area_id' => 1,
                'name_en' => 'Hokkaido',
                'name_jp' => ''
            ],[
                'id' => 2,
                'code' => '02',
                'area_id' => 2,
                'name_en' => 'Aomori',
                'name_jp' => ''
            ],[
                'id' => 3,
                'code' => '03',
                'area_id' => 2,
                'name_en' => 'Iwate',
                'name_jp' => ''
            ],[
                'id' => 4,
                'code' => '04',
                'area_id' => 2,
                'name_en' => 'Miyagi',
                'name_jp' => ''
            ],[
                'id' => 5,
                'code' => '05',
                'area_id' => 2,
                'name_en' => 'Akita',
                'name_jp' => ''
            ],[
                'id' => 6,
                'code' => '06',
                'area_id' => 2,
                'name_en' => 'Yamagata',
                'name_jp' => ''
            ],[
                'id' => 7,
                'code' => '07',
                'area_id' => 2,
                'name_en' => 'Fukushima',
                'name_jp' => ''
            ],[
                'id' => 8,
                'code' => '08',
                'area_id' => 3,
                'name_en' => 'Ibaragi',
                'name_jp' => ''
            ],[
                'id' => 9,
                'code' => '09',
                'area_id' => 3,
                'name_en' => 'Tochigi',
                'name_jp' => ''
            ],[
                'id' => 10,
                'code' => '10',
                'area_id' => 3,
                'name_en' => 'Gunma',
                'name_jp' => ''
            ],[
                'id' => 11,
                'code' => '11',
                'area_id' => 3,
                'name_en' => 'Saitama',
                'name_jp' => ''
            ],[
                'id' => 12,
                'code' => '12',
                'area_id' => 3,
                'name_en' => 'Chiba',
                'name_jp' => ''
            ],[
                'id' => 13,
                'code' => '13',
                'area_id' => 3,
                'name_en' => 'Tokyo',
                'name_jp' => ''
            ],[
                'id' => 14,
                'code' => '14',
                'area_id' => 3,
                'name_en' => 'Kanagawa',
                'name_jp' => ''
            ],[
                'id' => 15,
                'code' => '15',
                'area_id' => 4,
                'name_en' => 'Nigata',
                'name_jp' => ''
            ],[
                'id' => 16,
                'code' => '16',
                'area_id' => 4,
                'name_en' => 'Toyama',
                'name_jp' => 'Toyama'
            ],[
                'id' => 17,
                'code' => '17',
                'area_id' => 4,
                'name_en' => 'Ishikawa',
                'name_jp' => ''
            ],[
                'id' => 18,
                'code' => '18',
                'area_id' => 4,
                'name_en' => 'Fukui',
                'name_jp' => ''
            ],[
                'id' => 19,
                'code' => '19',
                'area_id' => 4,
                'name_en' => 'Yamanashi',
                'name_jp' => ''
            ],[
                'id' => 20,
                'code' => '20',
                'area_id' => 4,
                'name_en' => 'Nagano',
                'name_jp' => ''
            ],[
                'id' => 21,
                'code' => '21',
                'area_id' => 4,
                'name_en' => 'Gifu',
                'name_jp' => ''
            ],[
                'id' => 22,
                'code' => '22',
                'area_id' => 4,
                'name_en' => 'Shizuoka',
                'name_jp' => ''
            ],[
                'id' => 23,
                'code' => '23',
                'area_id' => 4,
                'name_en' => 'Aichi',
                'name_jp' => ''
            ],[
                'id' => 24,
                'code' => '24',
                'area_id' => 5,
                'name_en' => 'Mie',
                'name_jp' => ''
            ],[
                'id' => 25,
                'code' => '25',
                'area_id' => 5,
                'name_en' => 'Shiga',
                'name_jp' => ''
            ],[
                'id' => 26,
                'code' => '26',
                'area_id' => 5,
                'name_en' => 'Kyoto',
                'name_jp' => ''
            ],[
                'id' => 27,
                'code' => '27',
                'area_id' => 5,
                'name_en' => 'Osaka',
                'name_jp' => ''
            ],[
                'id' => 28,
                'code' => '28',
                'area_id' => 5,
                'name_en' => 'Hyogo',
                'name_jp' => ''
            ],[
                'id' => 29,
                'code' => '29',
                'area_id' => 5,
                'name_en' => 'Nara',
                'name_jp' => ''
            ],[
                'id' => 30,
                'code' => '30',
                'area_id' => 5,
                'name_en' => 'Wakayama',
                'name_jp' => ''
            ],[
                'id' => 31,
                'code' => '31',
                'area_id' => 6,
                'name_en' => 'Tottori',
                'name_jp' => ''
            ],[
                'id' => 32,
                'code' => '32',
                'area_id' => 6,
                'name_en' => 'Shimane',
                'name_jp' => ''
            ],[
                'id' => 33,
                'code' => '33',
                'area_id' => 6,
                'name_en' => 'Okayama',
                'name_jp' => ''
            ],[
                'id' => 34,
                'code' => '34',
                'area_id' => 6,
                'name_en' => 'Hiroshima',
                'name_jp' => ''
            ],[
                'id' => 35,
                'code' => '35',
                'area_id' => 6,
                'name_en' => 'Yamaguchi',
                'name_jp' => ''
            ],[
                'id' => 36,
                'code' => '36',
                'area_id' => 7,
                'name_en' => 'Tokushima',
                'name_jp' => ''
            ],[
                'id' => 37,
                'code' => '37',
                'area_id' => 7,
                'name_en' => 'Kagawa',
                'name_jp' => ''
            ],[
                'id' => 38,
                'code' => '38',
                'area_id' => 7,
                'name_en' => 'Ehime',
                'name_jp' => ''
            ],[
                'id' => 39,
                'code' => '39',
                'area_id' => 7,
                'name_en' => 'Kochi',
                'name_jp' => ''
            ],[
                'id' => 40,
                'code' => '40',
                'area_id' => 8,
                'name_en' => 'Fukuoka',
                'name_jp' => ''
            ],[
                'id' => 41,
                'code' => '41',
                'area_id' => 8,
                'name_en' => 'Saga',
                'name_jp' => ''
            ],[
                'id' => 42,
                'code' => '42',
                'area_id' => 8,
                'name_en' => 'Nagasaki',
                'name_jp' => ''
            ],[
                'id' => 43,
                'code' => '43',
                'area_id' => 8,
                'name_en' => 'Kumamoto',
                'name_jp' => ''
            ],[
                'id' => 44,
                'code' => '44',
                'area_id' => 8,
                'name_en' => 'Oita',
                'name_jp' => ''
            ],[
                'id' => 45,
                'code' => '45',
                'area_id' => 8,
                'name_en' => 'Miyazaki',
                'name_jp' => ''
            ],[
                'id' => 46,
                'code' => '46',
                'area_id' => 8,
                'name_en' => 'Kagoshima',
                'name_jp' => ''
            ],[
                'id' => 47,
                'code' => '47',
                'area_id' => 9,
                'name_en' => 'Okinawa',
                'name_jp' => ''
            ]
        ]);

        $data->map(function ($areaAttributes) {
            return Prefecture::create($areaAttributes);
        });
    }
}
