<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Batch, BatchProduct, StorageProduct};

class BatchController extends Controller
{
    public function buyProducts(Request $request)
    {
        $batch = Batch::create([
            'provider_id' => $request->provider_id,
            'purchase_date' => now(),
            'total_cost' => $request->total_cost,
        ]);

        foreach ($request->products as $product) {
            BatchProduct::create([
                'batch_id' => $batch->id,
                'product_id' => $product['product_id'],
                'quantity' => $product['quantity'],
                'cost_per_unit' => $product['cost_per_unit'],
            ]);

            StorageProduct::create([
                'storage_id' => $request->storage_id,
                'product_id' => $product['product_id'],
                'batch_id' => $batch->id,
                'quantity' => $product['quantity'],
            ]);
        }

        return response()->json(['message' => 'Products added to storage successfully.'], 201);
    }
}
