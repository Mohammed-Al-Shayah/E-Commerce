<?php

namespace App\Models;

use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory,Trans;

    protected $guarded=[];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id')->withDefault();
    }

    public function carts()
    {
        return $this->hasMany(Card::class);
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);

    }



    public function review()
    {
        return $this->hasMany(OrderItem::class);

    }

    public function album()
    {
        return $this->hasMany(Image::class);

    }



}
