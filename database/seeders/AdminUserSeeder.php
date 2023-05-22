<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'  => 'Samurai',
            'last_name' => 'Travel',
            'email' => 'dummy@example.com',
            'password' => Hash::make('password'),
            'role_id' => User::ADMIN_ROLE_ID,
        ]);
    }
}
