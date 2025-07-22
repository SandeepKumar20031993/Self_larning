<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            [
                'name' => 'Laptop',
                'description' => 'High performance laptop',
                'price' => 59999.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Latest Android smartphone',
                'price' => 19999.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'description' => 'Noise-cancelling over-ear headphones',
                'price' => 2999.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

