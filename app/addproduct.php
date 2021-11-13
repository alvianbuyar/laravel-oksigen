<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addproduct extends Model
{
    //
    protected $fillable = [
        'product_seriesnumber',
        'product_name',
        'id_categories',
        'stock',
        'description',
        'product_price',
        'tube_price',
    ];

    public function productCategories()
    {
        return $this->hasOne(productcategories::class);
    }
}
