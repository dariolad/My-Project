<?php

use App\Http\Controllers\OrdersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('retriveUsers', [UserController::class,'usersList']);
Route::get('getAllOrders', [OrdersController::class, 'ordersList']);
