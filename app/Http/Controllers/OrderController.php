<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Order, StorageProduct, OrderProduct};

class OrderController extends Controller
{
    public function makeOrder(Request $request)
    {
        $order = Order::create([
            'client_id' => $request->client_id,
            'order_date' => now(),
            'total_price' => $request->total_price,
        ]);

        foreach ($request->products as $product) {
            $storageProduct = StorageProduct::where('product_id', $product['product_id'])
                ->where('batch_id', $product['batch_id'])
                ->first();

            if ($storageProduct && $storageProduct->quantity >= $product['quantity']) {
                $storageProduct->quantity -= $product['quantity'];
                $storageProduct->save();

                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $product['product_id'],
                    'batch_id' => $product['batch_id'],
                    'quantity' => $product['quantity'],
                    'price_per_unit' => $product['price_per_unit'],
                ]);
            } else {
                return response()->json(['message' => 'Insufficient stock for product: ' . $product['product_id']], 400);
            }
        }

        return response()->json(['message' => 'Order created successfully.'], 201);
    }
}
