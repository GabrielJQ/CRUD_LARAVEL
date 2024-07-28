<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Videogame;
use Database\Factories\VideogameFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CategoriesTableSeeder::class
        
        ]);

        Videogame::factory(100)->create();
    }
}
