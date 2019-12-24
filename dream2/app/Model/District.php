<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'state','district',
    ];
    public function states(){
        return $this->belongsTo('App\State');
    }
    public function cities(){
        return $this->hasMany('App\City');
    }
}
