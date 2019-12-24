<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class PrivateProductClothesSize extends Model
{
    protected $fillable = [
    	        
                 'user_id',
                 'shop_id',
                 'sp_counter_number',
                'size'
    ];
}
