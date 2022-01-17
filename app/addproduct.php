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
        // 'description',
        'product_image',
        'product_price',
        'tube_price',
    ];

    public function productcategory()
    {
        return $this->belongsTo('App\productcategories', 'id_categories');
    }

    public function homesfunc()
    {
        return $this->hasMany('App\home', 'id_addproducts', 'id');
    }
}
