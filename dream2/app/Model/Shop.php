<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table='shops';
    protected $primaryKey='id';



    protected $fillable = [
       'user_name',
        'user_id',
        'creator_id',
        'country',
         'state',
         'district',
         'city',
         'market',
          'name',
          'shop_type',
          'type',
          'sp_counter',
          'mode',
          'slug',
          'star',
          'rating',
          'like',
          'unlike',
          'comment',
          'connected',
          'currency',
          'front_image',
          'right_image',
          'center_image',
          'left_image',
          'security_q1',
          'security_q2',
          'security_q3',
          'safety_number',
          'agent',
          'action',


    ];
      public function shop_notices(){
        return $this->hasOne('App\ShopNotice');
    }
    public function shop_addresses(){
        return $this->hasOne('App\ShopAddress');
    }
    public function shop_contacts(){
        return $this->hasOne('App\ShopContact');
    }
    public function shop_types(){
    	return $this->belongsTo('App\ShopType');
    }

     public function users(){
    	return $this->belongsTo('App\User');
    }

    public function shop_admins(){
    	return $this->hasmany('App\ShopAdmin');
    }
    public function shop_complains(){
        return $this->hasmany('App\ShopComplain');
    }
    public function products(){
        return $this->hasmany('App\Product');
    }

}
