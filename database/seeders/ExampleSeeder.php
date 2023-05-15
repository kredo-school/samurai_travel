<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert temporary data for display check
        
        DB::table('place_images')->insert([
            [
                'place_id' => '4',
                'image_no' => '1',
                'image' => '/storage/images/autumnal-leaves-g9dd855025_1920.jpg',
                'description' => 'Himeji castle'
            ],
            [
                'place_id' => '6',
                'image_no' => '2',
                'image' => '/storage/images/japan-g262fdae5b_1920.jpg',
                'description' => 'Hikone castle'
            ],
            [
                'place_id' => '5',
                'image_no' => '3',
                'image' => '/storage/images/sushi-balls-5878894_1920.jpg',
                'description' => 'Osaka castle'
            ]
        ]);
        
        

        
    }
}
