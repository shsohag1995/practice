<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'days',
        'hours',
        'user_id',
        'project_id',
        'company_id',
    ];

     public function projects(){
        return $this->belongsTo('App\Projects');
    }
    public function companies(){
        return $this->belongsTo('App\Company');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
