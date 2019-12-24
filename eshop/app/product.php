<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  public  function product_images()
    {
      return $this->hasMany('App\product_image')->orderBy('id','desc');
    }
}
