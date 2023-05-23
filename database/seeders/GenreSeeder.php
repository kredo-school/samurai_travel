<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert temporary data for display check
        
        DB::table('genres')->insert([
            [
                'name' => 'Tradition',
            ],
            [
                'name' => 'Food',
                
            ],
            [
                'name' => 'History',
                
            ],
            [
                'name' => 'Culture',
               
            ],
            [
                'name' => 'Nature and Outdoor',
                
            ],
            [
                'name' => 'Relaxing',
                
            ],
            [
                'name' => 'Entertainment',
                
            ]

        ]);
        
        

        
    }
}
