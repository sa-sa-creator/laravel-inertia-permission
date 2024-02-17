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
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
=======
        \App\Models\User::factory(2)->create();
        \App\Models\Category::factory(10)->create([
        'by_user_id' => 1
        ]);
        \App\Models\Category::factory(10)->create([
            'by_user_id' => 2
            ]);

>>>>>>> crud_data
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'is_admin' => true
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User2',
        //     'email' => 'test2@example.com',
        //     'is_admin' => true
        // ]);
    }
}
