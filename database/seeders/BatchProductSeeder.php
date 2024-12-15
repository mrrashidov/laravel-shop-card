<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Batch,
    Product,
    BatchProduct
};

class BatchProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batch = Batch::first(); // Birinchi batchni olish
        $product = Product::first(); // Birinchi mahsulotni olish

        // Batchga mahsulotni qo‘shamiz
        BatchProduct::create([
            'batch_id' => $batch->id,
            'product_id' => $product->id,
            'quantity' => 100,
            'cost_per_unit' => 10.00,
        ]);
    }
}
