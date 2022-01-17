<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    //
    public function addproduk()
    {
        return $this->belongsTo('App\home', 'id_addproducts');
    }
}
