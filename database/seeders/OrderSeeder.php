<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Order, Client, Product, Batch, OrderProduct};

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = Client::first(); // Birinchi mijozni olish
        $order = Order::create([
            'client_id' => $client->id,
            'order_date' => now(),
            'total_price' => 6000,
        ]);
        $product = Product::first();
        $batch = Batch::first();
        OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => $product->id, // 'Ahmad Tea Earl Grey, 500g' id-si
            'quantity' => 10,
            'batch_id' => $batch->id,
            'price_per_unit' => 60, // Narx oshirilgan holda
        ]);

        OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => $product->id, // 'Ahmad Tea Mint Green Tea, 250g' id-si
            'quantity' => 20,
            'batch_id' => $batch->id,
            'price_per_unit' => 40, // Narx oshirilgan holda
        ]);
    }
}
