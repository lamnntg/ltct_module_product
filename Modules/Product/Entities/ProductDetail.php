<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductDetail extends Model
{
 
    protected $table = 'product_details';

    protected $fillable = [
        'id',
        'product_id',
        'information',
    ];
    public function product()
    {
        return $this->belongsTo('Modules\Product\Entities\Product');
    }
    
}
