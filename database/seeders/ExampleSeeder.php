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
                'image' => '/storage/images/6_himeji castle.jpg',
                'description' => 'Himeji castle'
            ],
            [
                'place_id' => '6',
                'image_no' => '2',
                'image' => '/storage/images/6_hikone castle.jpg',
                'description' => 'Hikone castle'
            ],
            [
                'place_id' => '5',
                'image_no' => '3',
                'image' => '/storage/images/5_osaka castle.jpg',
                'description' => 'Osaka castle'
            ],
            [
                'place_id' => '7',
                'image_no' => '4',
                'image' => '/storage/images/7_marsuri_parade.jpg',
                'description' => 'Traditional festival dance'
            ],
            [
                'place_id' => '8',
                'image_no' => '5',
                'image' => '/storage/images/8_kenrokuen.jpg',
                'description' => 'Beautiful japanese garden'
            ],
            [
                'place_id' => '9',
                'image_no' => '6',
                'image' => '/storage/images/9_shirahama.jpg',
                'description' => 'Beautiful beach'
            ],
            [
                'place_id' => '10',
                'image_no' => '7',
                'image' => '/storage/images/9_shirahama.jpg',
                'description' => 'Beautiful beach'
            ],
            [
                'place_id' => '11',
                'image_no' => '8',
                'image' => '/storage/images/11_mizuno.jpg',
                'description' => 'good okonomiyaki restaurant'
            ],
            [
                'place_id' => '12',
                'image_no' => '9',
                'image' => '/storage/images/12_mt rokko.jpg',
                'description' => 'beautiful view'
            ],
            [
                'place_id' => '13',
                'image_no' => '10',
                'image' => '/storage/images/13_shigaraki.jpg',
                'description' => 'we can buy good quality one'
            ],
            [
                'place_id' => '14',
                'image_no' => '11',
                'image' => '/storage/images/14_kimono.jpg',
                'description' => 'beautiful kimono'
            ],
            [
                'place_id' => '15',
                'image_no' => '12',
                'image' => '/storage/images/15_ryokan.jpg',
                'description' => 'feel zen'
            ],
            [
                'place_id' => '16',
                'image_no' => '13',
                'image' => '/storage/images/16_shukubo.jpg',
                'description' => 'you can experience traditional japanese life here'
            ],
            [
                'place_id' => '17',
                'image_no' => '14',
                'image' => '/storage/images/17_sauna.jpg',
                'description' => 'enjoying sauna'
            ],
            [
                'place_id' => '18',
                'image_no' => '15',
                'image' => '/storage/images/18_tea.jpg',
                'description' => 'experience making matcha'
            ],
            [
                'place_id' => '19',
                'image_no' => '16',
                'image' => '/storage/images/19_yakitori.jpg',
                'description' => 'good taste yakitori'
            ],
            [
                'place_id' => '20',
                'image_no' => '17',
                'image' => '/storage/images/20_onsen.jpg',
                'description' => 'old style hotspring'
            ],

        ]);
        
        

        
    }
}
