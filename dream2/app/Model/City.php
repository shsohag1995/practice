<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'district','city',
    ];

    public function districts(){
        return $this->belongsTo('App\District');
    }
}
