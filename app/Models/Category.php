<?php

namespace App\Models;

use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory,Trans;
    // protected $fillable = ['name', 'image', 'perant_id'];
    protected $guarded = [];


    public function parent()
    {
        return $this->belongsTo(Category::class, 'perant_id')->withDefault();
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'perant_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'perant_id');
    }

    


}
