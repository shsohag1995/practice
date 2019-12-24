<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopUser extends Model
{
    
    protected $table='shop_users';
    //protected $primaryKey='id';

	 protected $fillable = [
       'shop_id',
        'user_id',
        'shop_name',
        'shop_slug',
    ];
    //
}
