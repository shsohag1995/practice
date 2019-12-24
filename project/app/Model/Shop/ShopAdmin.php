<?php

namespace App\Model\Shop;

use Illuminate\Database\Eloquent\Model;

class ShopAdmin extends Model
{
	 protected $fillable = [
        'shop_id','user_name','user_jobs','user_id','shop_slug',
    ];
    public function shops(){
        return $this->belongsTo('App\Shop');
    }

}
