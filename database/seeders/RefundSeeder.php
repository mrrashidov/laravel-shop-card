<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Order,
    Product,
    Batch,
    Refund
};

class RefundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::first(); // Birinchi buyurtmani olish
        $product = Product::first(); // Birinchi mahsulotni olish
        $batch = Batch::first(); // Birinchi batchni olish

        // Refund yaratamiz
        Refund::create([
            'type' => 'batch',
            'batch_id' => $batch->id,
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => 1,
            'refund_amount' => 50.00,
        ]);
    }
}
