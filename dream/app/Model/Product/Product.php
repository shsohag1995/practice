<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $primaryKey='id';


    protected $fillable = [
        
                 'user_name',
                 'user_id',
                 'shop_name',
                 'shop_slug',
                 'shop_id',
                 'sp_counter_number',
                'title',
                'category',
                'type',
                'brand',
                'quantity',
                'unit',
                'price_bdt',
                'price_cgc',
                'price_usd',
                'condition',
                'like',
                'comment',
                'view',
                'slug',
                'minimum_order',
                'description',
                'payment_info',
                'action',
                'image'
    ];

    public function shop(){
        return $this->belongsTo('App\Shop');
    }
    
}
