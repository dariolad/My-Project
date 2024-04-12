<?php

namespace App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    
    use HasFactory;
    
    protected $fillable = [
        'product_id',
        'product_name',
        'product_description',
        'product_price',
        'product_quantity',
        'product_status',
    ];
}




