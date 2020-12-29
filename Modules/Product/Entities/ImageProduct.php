<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageProduct extends Model
{
    protected $table = 'image_products';
    protected $fillable = [
        'id',
        'product_id',
        'url',
        'size',
        'type'
    ];
    
    public function product()
    {
        return $this->belongsTo('Modules\Product\Entities\Product');
    }
}
