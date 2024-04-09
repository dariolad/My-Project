<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Resources\Json\JsonResource;

class OrdersController extends Controller{
    public function ordersList()
    {
        $orders = Order::all();
        return new JsonResource($orders);
    }
}

$order = Order::find($orderId);

$user = $order->user;