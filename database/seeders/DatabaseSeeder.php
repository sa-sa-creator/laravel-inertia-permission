<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();
        //\App\Models\Category::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
        \App\Models\User::factory(2)->create();
        \App\Models\Category::factory(10)->create([
        'by_user_id' => 1
        ]);
        \App\Models\Category::factory(10)->create([
            'by_user_id' => 2
            ]);

    }
}
