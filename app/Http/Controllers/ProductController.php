<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{StorageProduct};

class ProductController extends Controller
{
    public function availableProducts()
    {
        $products = StorageProduct::with('product', 'batch')
            ->where('quantity', '>', 0)
            ->get();

        return response()->json($products);
    }
}
