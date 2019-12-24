<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopType extends Model
{
    protected $fillable = [
        'name','user_id','details','front_image','right_image','center_image','left-image',
    ];

    public function shops(){
        return $this->hasMany('App\Shop');
    }
}
