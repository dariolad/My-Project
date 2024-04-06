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
        'update_order_date',
        'products_details',
    ];
}
