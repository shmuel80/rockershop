<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class ShopController extends MainController
{
    public function addToCart(Request $request){
        Product::addToCart($request->product_id);
    }
}
