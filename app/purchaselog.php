<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchaselog extends Model
{
    //
    public function details()
    {
        return $this->hasMany('App\detail', 'id_addproducts', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'id_users');
    }
}
