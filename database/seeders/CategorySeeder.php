<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Category, Provider};

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provider = Provider::first();
        $root = Category::create(['name' => 'Ahmad Tea', 'parent_category_id' => null, 'provider_id' => $provider->id]);

        Category::create(['name' => 'Black Tea', 'parent_category_id' => $root->id]);
        Category::create(['name' => 'Green Tea', 'parent_category_id' => $root->id]);
        Category::create(['name' => 'White Tea', 'parent_category_id' => $root->id]);
    }
}
