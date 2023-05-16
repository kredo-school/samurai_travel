<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Area::truncate();
        Schema::enableForeignKeyConstraints();

        $data = collect([
            [
                'id' => 1,
                'code' => 'Hokkaido',
                'name_en' => 'Hokkaido',
                'name_jp' => '',
            ],[
                'id' => 2,
                'code' => 'Tohoku',
                'name_en' => 'Tohoku',
                'name_jp' => '',
            ],[
                'id' => 3,
                'code' => 'Kanto',
                'name_en' => 'Kanto',
                'name_jp' => '',
            ],[
                'id' => 4,
                'code' => 'Chubu',
                'name_en' => 'Chubu',
                'name_jp' => '',
            ],[
                'id' => 5,
                'code' => 'Kinki',
                'name_en' => 'Kinki',
                'name_jp' => '',
            ],[
                'id' => 6,
                'code' => 'Chugoku',
                'name_en' => 'Chugoku',
                'name_jp' => '',
            ],[
                'id' => 7,
                'code' => 'Shikoku',
                'name_en' => 'Shikoku',
                'name_jp' => '',
            ],[
                'id' => 8,
                'code' => 'Kyushu',
                'name_en' => 'Kyushu',
                'name_jp' => '',
            ],[
                'id' => 9,
                'code' => 'Okinawa',
                'name_en' => 'Okinawa',
                'name_jp' => '',
            ]
        ]);

        $data->map(function ($areaAttributes) {
            return Area::create($areaAttributes);
        });
    }
}
