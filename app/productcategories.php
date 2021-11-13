<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productcategories extends Model
{
    //
    protected $fillable = [
        'categories_name'
    ];

    public function addProduct()
    {
        return $this->hasMany(addproduct::class);
    }
}
