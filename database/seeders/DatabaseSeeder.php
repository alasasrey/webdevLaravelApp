<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory(1000)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Students::create([
            'name' => 'Male 1',
            'age' => 25,
            'gender' => 'male'
        ]);
        Students::create([
            'name' => 'Female 1',
            'age' => 27,
            'gender' => 'female'
        ]);
        Students::create([
            'name' => 'Female 2',
            'age' => 23,
            'gender' => 'female'
        ]);
    }
}
