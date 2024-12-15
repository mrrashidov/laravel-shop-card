<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StorageProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'storage_id',
        'product_id',
        'batch_id',
        'quantity'
    ];

    // Relationship to storage
    public function storage()
    {
        return $this->belongsTo(Storage::class);
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
