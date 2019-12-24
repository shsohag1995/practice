<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
     protected $fillable = [
        'name','user_id',	'details',	'jobs',
    ];

    public function users(){
        return $this->hasMany('App\User');
    }

}
