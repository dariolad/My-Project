<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsController extends Controller{
    public function productsList()
    {
        $products = Product::all();
        return new JsonResource($products);
    }
}