<?php

namespace App\Model\Shop;

use Illuminate\Database\Eloquent\Model;

class ShopComplain extends Model
{
     protected $fillable = [
        'user_id','shop_id','complain','rating',
    ];

    public function shops(){
        return $this->belongsTo('App\Shop');
    }

}
