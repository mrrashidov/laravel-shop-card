<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BatchProduct extends Model
{
    use HasFactory;


    protected $fillable = [
        'batch_id',
        'product_id',
        'quantity',
        'cost_per_unit'
    ];

    // Relationship to batch
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    // Relationship to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
