<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'total',
        'order_status',
        'shipping_address',
        'order_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

$order = Order::find($orderId);

$user = $order->user;
