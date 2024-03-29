<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'customer_id',
        'order_number',
        'total_price',
        'discount',
        'date',
        'status',
        'payment_status',
        'payment_type'
    ];

    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
