<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Storage,
    Product,
    Batch,
    StorageProduct
};

class StorageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $storage = Storage::first(); // Birinchi storage ni olish
        $product = Product::first(); // Birinchi mahsulotni olish
        $batch = Batch::first(); // Birinchi batchni olish

        // Storagega mahsulot qo‘shamiz
        StorageProduct::create([
            'storage_id' => $storage->id,
            'product_id' => $product->id,
            'batch_id' => $batch->id,
            'quantity' => 5000,
        ]);
    }
}
