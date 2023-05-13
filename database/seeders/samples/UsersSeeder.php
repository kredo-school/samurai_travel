<?php

namespace Database\Seeders\Samples;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add 10 users
        for ($i = 1; $i <= 10; $i++)
        {
            User::create([
                'first_name'  => 'user',
                'last_name' => $i,
                'email' => "user{$i}@example.com",
                'password' => Hash::make('password'),
                'role_id' => User::USER_ROLE_ID,
            ]);
        }

        // Add 10 admin users
        for ($i = 1; $i <= 10; $i++)
        {
            User::create([
                'first_name'  => 'admin',
                'last_name' => $i,
                'email' => "admin{$i}@example.com",
                'password' => Hash::make('password'),
                'role_id' => User::ADMIN_ROLE_ID,
            ]);
        }
    }
}
