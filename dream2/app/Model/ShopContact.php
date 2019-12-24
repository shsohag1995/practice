<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopContact extends Model
{
    protected $fillable = [
        'user_id','shop_id','address','contact','notice','shop_slug',
    ];

    public function shop(){
        return $this->belongsTo('App\Shop');
    }
}
