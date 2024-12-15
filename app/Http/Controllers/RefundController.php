<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Refund};

class RefundController extends Controller
{
    public function refundBatch(Request $request)
    {
        foreach ($request->products as $product) {
            Refund::create([
                'type' => 'batch',
                'batch_id' => $request->batch_id,
                'product_id' => $product['product_id'],
                'quantity' => $product['quantity'],
                'refund_amount' => $product['refund_amount'],
            ]);
        }

        return response()->json(['message' => 'Batch refund processed successfully.'], 200);
    }
}
