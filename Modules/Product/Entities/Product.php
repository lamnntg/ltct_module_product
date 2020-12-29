<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name' ,
        'price',
        'category_id',
        'quantity',
        'status'
    ];
    public function productDetail()
    {
        return $this->hasOne(\Modules\Product\Entities\ProductDetail::class);
    }
    public function images()
    {
        return $this->hasMany('Modules\Product\Entities\ImageProduct');
    }
    
 
}
