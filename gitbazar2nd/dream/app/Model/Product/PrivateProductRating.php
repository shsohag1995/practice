<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class PrivateProductRating extends Model
{
    protected $fillable=[

    	'shop_id',
    	'sp_counter_number'	,
    	'user_id',
    	

    ];
}
