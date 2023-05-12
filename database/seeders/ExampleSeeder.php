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
        DB::table('places')->insert([
            'id' => 1,2,3,
            'place_category' => 'spot','activity','hotel',
            'name_en' => 'Himeji Castle', 'Osaka Castle', 'Hikone Castle',
            'name_jp' => '',
            'opening_time' => '',
            'ending_time' => '',
            'url' => '',
            'area_id' => 1,2,3,
            'prefecture_id' => 1,2,3,
            'city_id' => 1,2,3,
            'address' =>'himeji 1-2-3','Osaka 1-2-3', 'Hikone 1-2-3',
            'spend_time' => '',
            'created_at' => '',
            'updated_at' => '',
        ]);
        
        DB::table('place_images')->insert([
            'place_id' => 1,2,3,
            'image_no' => 1,2,3,
            'image' => 'storage\images\autumnal-leaves-g9dd855025_1920.jpg',
                        'storage\images\japan-g262fdae5b_1920.jpg',
                        'storage\images\sushi-balls-5878894_1920.jpg',
            'description' => 'Castle in Himeji','Castle in Osaka','Castle in Hikone',
            'created_at' => '',
            'updated_at' => '',
        ]);

        DB::table('keywords')->insert([
            'id' => '',
            'genre_id' => 1,2,3,
            'name' => 'traditional', 'local', 'rural',
            'created_at' => '',
            'updated_at'=> '',
        ]);

        DB::table('interests')->insert([
            'id' =>'',
            'user_id'=>1,2,3,
            'keyword_id'=>1,2,3,
            'created_at'=>'',
            'updated_at'=>'',
        ]);

        DB::table('users')->insert([
            'id' => '1,2,3',
            'nick_name'=>'Tom','Jerry','Ken',
            'first_name'=>'Tom','Jerry','Ken',
            'last_name'=>'Tom','Jerry','Ken',
            'age'=>'4','5','5',
            'gender'=>'Male','Male','Male',
            'email'=> 'mail','mail','mail',
            'password'=>'pass','pass','pass',
            'status' => '',
            'role_id'=>'',       
        ]);

    }
}
