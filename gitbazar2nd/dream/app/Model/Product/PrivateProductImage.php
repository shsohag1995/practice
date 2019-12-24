<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class PrivateProductImage extends Model
{
	protected $table='private_product_images';
   // protected $primaryKey='id';


    protected $fillable = [
    	        'p_image_counter',
                 'user_id',
                 'shop_id',
                 'sp_counter_number',
                'image',
                'size'
    ];
    

}
