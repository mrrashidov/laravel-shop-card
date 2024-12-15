<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BatchController, RefundController, ProductController, OrderController, ProfitController};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/batches', [BatchController::class, 'buyProducts']);
Route::post('/batches/refunds', [RefundController::class, 'refundBatch']);
Route::get('/products/available', [ProductController::class, 'availableProducts']);
Route::post('/orders', [OrderController::class, 'makeOrder']);
Route::get('/batches/profit', [ProfitController::class, 'calculateProfit']);
