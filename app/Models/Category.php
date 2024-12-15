<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'parent_category_id', 'provider_id'];

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_category_id');
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
