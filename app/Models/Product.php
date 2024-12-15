<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id'
    ];

    // Relationship to categories
    public function category()
    {
        return $this->belongsTo(Category::class);
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
}
