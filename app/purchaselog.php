<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchaselog extends Model
{
    //
    protected $fillable = [
        'purchase_number',
        'purchase_name',
        'purchase_address',
        'purchase_callnumber',
        'purchase_payment',
        'purchase_loan'
    ];

    public function details()
    {
        return $this->hasMany('App\detail', 'id_addproducts', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'id_users');
    }
}
