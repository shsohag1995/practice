<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'user_id','country','state','district','city',
    ];

   
}
