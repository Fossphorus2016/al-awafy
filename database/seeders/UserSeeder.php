<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::where('email', 'admin@alawafy.com')->create([

            'name' => 'Admin',
            'email' => 'admin@alawafy.com',
            'password' => bcrypt('@alawafy321'),

        ]);
    }
}
