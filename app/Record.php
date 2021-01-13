<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'phone_number',
        'occupation',
        'qualification',
        'marital_status',
        'address',
        'state',
        'lga',
        'gender',
    ];
}
