<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Order,
    Product,
    Batch,
    OrderProduct
};

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::first(); // Birinchi buyurtmani olish
        $product = Product::first(); // Birinchi mahsulotni olish
        $batch = Batch::first(); // Birinchi batchni olish

        // Buyurtmaga mahsulot qo‘shamiz
        OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'batch_id' => $batch->id,
            'quantity' => 2,
            'price_per_unit' => 100.00,
        ]);
    }
}
