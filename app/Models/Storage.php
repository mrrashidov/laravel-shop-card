<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Storage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location'
    ];

    // Relationship to storage products
    public function storageProducts()
    {
        return $this->hasMany(StorageProduct::class);
    }
}
