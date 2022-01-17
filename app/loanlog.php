<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loanlog extends Model
{
    //
    protected $fillable = [
        'loan_number',
        'loan_name',
        'loan_address',
        'loan_callnumber',
    ];
}
