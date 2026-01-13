<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderItems;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'image_path',
        'category_id',
        'stock_qty',
        'fit_type',
        'color',
        'size',
        'discount',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

}
