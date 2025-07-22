<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
// In database/seeders/DatabaseSeeder.php
public function run(): void
{
    // Remove this block to avoid inserting the duplicate
    // User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

    $this->call(ProductSeeder::class);
}

}
