<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopAddress extends Model
{
    
    protected $fillable = [
        'user_id','shop_id','maplink','address','shop_slug',
    ];

    public function shops(){
        return $this->belongsTo('App\Shop');
    }
    
}
