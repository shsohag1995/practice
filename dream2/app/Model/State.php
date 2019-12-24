<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'country','state',
    ];
    public function countries(){
        return $this->belongsTo('App\Country');
    }
    public function districts(){
        return $this->hasMany('App\District');
    }
}
