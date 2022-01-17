<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class returnlog extends Model
{
    //
    protected $fillable = [
        'return_number',
        'return_name',
        'return_address',
        'return_callnumber',
    ];
}
