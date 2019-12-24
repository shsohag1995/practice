<?php

namespace App\Model\Order;

use Illuminate\Database\Eloquent\Model;

class OrderUser extends Model
{
    protected $fillable = [
            'user_name',
            'customer_name',
            'contact_info',
            'country',
             'state',
             'district',
             'city',
            'shiping_address',
    ];

}
