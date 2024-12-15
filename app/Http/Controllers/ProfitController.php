<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{BatchProduct, OrderProduct};

class ProfitController extends Controller
{
    public function calculateProfit()
    {
        $batches = BatchProduct::with('batch')->get();

        $profits = $batches->map(function ($batchProduct) {
            $totalSales = OrderProduct::where('batch_id', $batchProduct->batch_id)
                ->sum(\DB::raw('quantity * price_per_unit'));

            $totalCost = $batchProduct->quantity * $batchProduct->cost_per_unit;

            return [
                'batch_id' => $batchProduct->batch_id,
                'total_sales' => $totalSales,
                'total_cost' => $totalCost,
                'profit' => $totalSales - $totalCost,
            ];
        });

        return response()->json($profits);
    }
}
