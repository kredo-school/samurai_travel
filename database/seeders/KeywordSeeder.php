<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert temporary data for display check
        
        DB::table('keywords')->insert([
            [
                'name' => 'temple',
                'genre_id' => '1'
                
            ],
            [
                'name' => 'garden',
                'genre_id' => '6'
                
            ],
            [
                'name' => 'castle',
                'genre_id' => '3'
                
            ],
            [
                'name' => 'tea',
                'genre_id' => '2'
               
            ],
            [
                'name' => 'beach',
                'genre_id' => '5'   
            ],
            [
                'name' => 'hot spring',
                'genre_id' => '5'   
            ],
            [
                'name' => 'shrine', 
                'genre_id' => '1'  
            ],
            [
                'name' => 'festival', 
                'genre_id' => '7'  
            ],
            
            [
                'name' => 'ryokan', 
                'genre_id' => '1'  
            ],
            [
                'name' => 'shukubo',
                'genre_id' => '1'   
            ],
            [
                'name' => 'museum',
                'genre_id' => '3'   
            ],
            [
                'name' => 'theater',
                'genre_id' => '4'   
            ],
            [
                'name' => 'cafe',
                'genre_id' => '2'   
            ],
            [
                'name' => 'japanese restaurant',
                'genre_id' => '2'   
            ],

        ]);
        
        

        
    }
}
