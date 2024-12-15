<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Refund extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'batch_id',
        'order_id',
        'product_id',
        'quantity',
        'refund_amount'
    ];

    // Relationship to batch
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

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
}
