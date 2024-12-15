<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ahmad Tea Earl Grey, 500g',
            'category_id' => 2 // 'Black Tea' id-si
        ]);

        Product::create([
            'name' => 'Ahmad Tea Mint Green Tea, 250g',
            'category_id' => 3 // 'Green Tea' id-si
        ]);
    }
}
