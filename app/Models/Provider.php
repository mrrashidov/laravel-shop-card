<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'contact_info'];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }
}
