<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'order_date',
        'total_price'
    ];

    // Relationship to client
    public function client()
    {
        return $this->belongsTo(Client::class);
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
