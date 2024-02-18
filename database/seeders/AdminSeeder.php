<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name' => 'admin',

            'email' =>'admin@gmail.com',

            'email_verified_at' => now(),

            'password' =>  '$2y$12$RGNIswdaRVaCJJP28G6xl.haQ1jQaiyKZfwfD2X9qxqsyMS0u8efa',

            'remember_token' => Str::random(10),

        ])->assignRole('admin');
    }
}
