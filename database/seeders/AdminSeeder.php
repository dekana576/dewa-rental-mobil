<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create new user with role admin
        \App\Models\User::factory()->create([
            'name' => 'DEWARENT',
            'email' => 'dewarental@gmail.com',
            'password' => bcrypt('dewarental123'),
            'roles' => 'ADMIN',
        ]);
    }
}
