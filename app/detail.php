<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    //
    protected $fillable = [
        'status',
    ];

    public function addproducts()
    {
        return $this->belongsTo('App\addproduct', 'id_addproducts');
    }

    public function purchaselogs()
    {
        return $this->belongsTo('App\purchaselog', 'id_purchaselogs');
    }
}
