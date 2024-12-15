<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderProduct extends Model
{
    use HasFactory;


    protected $fillable = [
        'order_id',
        'product_id',
        'batch_id',
        'quantity',
        'price_per_unit'
    ];

    // Relationship to order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relationship to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relationship to batch
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
