<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class PrivateProductInfo extends Model
{
    protected $fillable=[
    	'shop_id',
    	'sp_counter_number'	,
    	'description',
    	'comment',
    	'view',	
    	'rating',
    	'rate',
    	'description',
    	'details_link',
        
    ];
}
