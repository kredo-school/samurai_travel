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
                'place_id' => '1',
                'image_no' => '1',
                'image' => '/storage/images/1-1_asakusa.jpg',
                'description' => 'Asakusa Temple'
            ],
            [
                'place_id' => '2',
                'image_no' => '2',
                'image' => '/storage/images/1-2_unajyu.jpg',
                'description' => 'Tokyo eel restaurant'
            ],
            [
                'place_id' => '3',
                'image_no' => '3',
                'image' => '/storage/images/1-3_tokyo-railway-museum-.jpg',
                'description' => 'Tokyo Railway Museum'
            ],
            [
                'place_id' => '4',
                'image_no' => '4',
                'image' => '/storage/images/1-4_meiji-jingu.jpg',
                'description' => 'Meiji jingu'
            ],
            [
                'place_id' => '5',
                'image_no' => '5',
                'image' => '/storage/images/1-5_sushi.jpg',
                'description' => 'Tokyo Sushi restaurant'
            ],
            [
                'place_id' => '6',
                'image_no' => '6',
                'image' => '/storage/images/1-6_ryokan.jpg',
                'description' => 'Beautiful ryokan'
            ],
            [
                'place_id' => '7',
                'image_no' => '7',
                'image' => '/storage/images/2-1kabuki-theater.jpg',
                'description' => 'Beautiful Kabuki theatre'
            ],
            [
                'place_id' => '8',
                'image_no' => '8',
                'image' => '/storage/images/2-2 soba.jpg',
                'description' => 'Soba restaurant'
            ],
            [
                'place_id' => '9',
                'image_no' => '9',
                'image' => '/storage/images/2-3conferrence.jpg',
                'description' => 'beautiful view'
            ],
            [
                'place_id' => '10',
                'image_no' => '10',
                'image' => '/storage/images/2-4tokyo-station-4975515_1920.jpg',
                'description' => 'Tokyo station'
            ],
            [
                'place_id' => '11',
                'image_no' => '11',
                'image' => '/storage/images/1-1 ohara.jpg',
                'description' => 'beautiful garden'
            ],
            [
                'place_id' => '12',
                'image_no' => '12',
                'image' => '/storage/1-2 temarizushi.jpg',
                'description' => 'good sushi'
            ],
            [
                'place_id' => '13',
                'image_no' => '13',
                'image' => '/storage/images/1-4gion.jpg',
                'description' => 'you can experience traditional japanese life here'
            ],
            [
                'place_id' => '14',
                'image_no' => '14',
                'image' => '/storage/images/1-5 maiko cafe.jpg',
                'description' => 'Maiko cafe'
            ],
            [
                'place_id' => '15',
                'image_no' => '15',
                'image' => '/storage/images/1-6 obanzai kyoto.jpg',
                'description' => 'experience good taste obanzai'
            ],
            [
                'place_id' => '16',
                'image_no' => '16',
                'image' => '/storage/images/1-7_shukubo.jpg',
                'description' => 'Shukubo'
            ],
            [
                'place_id' => '17',
                'image_no' => '17',
                'image' => '/storage/images/2-1 fushimi.jpg',
                'description' => 'Fushimi'
            ],
            [
                'place_id' => '18',
                'image_no' => '18',
                'image' => '/storage/images/2-2_matcha cafe.jpg',
                'description' => 'Matcha cafe'
            ],
            [
                'place_id' => '19',
                'image_no' => '19',
                'image' => '/storage/images/2-3 temple.jpg',
                'description' => 'beautiful temple'
            ],
            [
                'place_id' => '20',
                'image_no' => '20',
                'image' => '/storage/images/2-4 higashiyama.jpg',
                'description' => 'Higashiyama area'
            ],
            [
                'place_id' => '21',
                'image_no' => '21',
                'image' => '/storage/images/2-5onsen ryokan.jpg',
                'description' => 'Kyoto onsen ryokan'
            ],
            [
                'place_id' => '22',
                'image_no' => '22',
                'image' => '/storage/images/5_osaka castle.jpg',
                'description' => 'Osaka castle'
            ],
            [
                'place_id' => '23',
                'image_no' => '23',
                'image' => '/storage/images/11_mizuno.jpg',
                'description' => 'good okonomiyaki restaurant'
            ],
            [
                'place_id' => '24',
                'image_no' => '24',
                'image' => '/storage/images/1-3sennichimae.jpg',
                'description' => 'good okonomiyaki restaurant'
            ],
            [
                'place_id' => '25',
                'image_no' => '25',
                'image' => '/storage/images/1-4 dotonbori.jpg',
                'description' => 'center of south osaka'
            ],
            [
                'place_id' => '26',
                'image_no' => '26',
                'image' => '/storage/images/1-6_ osaka ryokan.jpg',
                'description' => 'Osaka Ryokan'
            ],


        ]);
        
        

        
    }
}
