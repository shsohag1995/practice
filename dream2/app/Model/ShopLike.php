<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopLike extends Model
{
	protected $table='shop_likes';
    //protected $primaryKey='id';

	 protected $fillable = [
       'shop_id',
        'user_id',
        'confirmed',
    ];
    //
}
