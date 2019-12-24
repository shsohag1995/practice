<?php

namespace App\Model\Order;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	 protected $fillable = [
	 	'image',
	 	'order_id',
            'user_id',
            'user_name',
            'shop_slug',
            'shop_id',
            'sp_counter_number',
            'ptrshop_id',
            'ptr_sp_counter_number',
            'product_name',
            'product_slug',
            'price',
            'quantity',
            'unit',
            'action',
            
    ];
            

           
}
