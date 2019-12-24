<?php

namespace App\Model\Order;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
            'order_type',
            'user_name',
            'user_id',
            'customer_name',
            'contact_info',
            'payment_method',
            'payment_amount',
            'account_number',
            'trxid',
            'address',
            'action',
    ];
}
