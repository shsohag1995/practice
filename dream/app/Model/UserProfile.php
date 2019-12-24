<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_name','user_id','balance_bdt','balance_cgc','balance_usd','country','state','district','city','road','birth_day','blood_group','address','image','verifing_id_image','verifing_address_image',
    ];
}
