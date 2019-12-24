<?php

namespace App\Model\Shop;

use Illuminate\Database\Eloquent\Model;

class ShopComment extends Model
{
     protected $fillable = [
        'user_id','shop_id','comment','rating',
    ];
}
