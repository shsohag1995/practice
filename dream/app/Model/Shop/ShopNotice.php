<?php

namespace App\Model\Shop;

use Illuminate\Database\Eloquent\Model;

class ShopNotice extends Model
{
    protected $fillable = [
       'user_id', 'shop_id','title','notice','shop_slug',
    ];

    public function shops(){
        return $this->belongsTo('App\Shop');
    }
}
