<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
	protected $table='product_images';
   // protected $primaryKey='id';


    protected $fillable = [
    	      
                 'user_id',
                 'shop_id',
                 'sp_counter_number',
                'image',
               
    ];
    //
}
