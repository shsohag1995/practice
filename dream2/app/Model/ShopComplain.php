<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopComplain extends Model
{
     protected $fillable = [
        'user_id','shop_id','complain','shop_slug',
    ];

    public function shops(){
        return $this->belongsTo('App\Shop');
    }

}
