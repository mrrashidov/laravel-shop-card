<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'purchase_date',
        'total_cost'
    ];

    // Relationship to provider
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    // Relationship to batch products
    public function batchProducts()
    {
        return $this->hasMany(BatchProduct::class);
    }

    // Relationship to storage products
    public function storageProducts()
    {
        return $this->hasMany(StorageProduct::class);
    }

    // Relationship to order products
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }

    // Relationship to refunds
    public function refunds()
    {
        return $this->hasMany(Refund::class);
    }
}
