<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $primaryKey='id';


    protected $fillable = [
        // 'user_name'=>Auth::user()->user_name ,
                 'user_name',
                 'user_id',
                 'shop_id',
                 'mode',
                 'ptrproduct_id',
                 'ptrshop_id',
                 'sp_counter',
                'title',
                'category',
                'type',
                'brand',
                'quantity',
                'import_price',
                'export_price',
                'offer_price',
                'status',
                'condition',
                'like',
                'comment',
                'slug',
                'description',
                'pi_counter',
                'payment_info',
                'action',
    ];

    public function shop(){
        return $this->belongsTo('App\Shop');
    }
    
}
