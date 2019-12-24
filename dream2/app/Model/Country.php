<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'country',
    ];

    public function states(){
        return $this->hasMany('App\State');
    }
}
