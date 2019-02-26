<?php

namespace App;
use Cart;
use Session;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  static public function addToCart($product_id){
    $product = self::where('id', '=', $product_id)->get();
    $product = $product->toArray();
    print_r ($product[0]);
    Cart::add($product_id, $product[0] ['title'], $product[0] ['price'], 1, array());
    Session::flash('ms', "{$product[0] ['title']} added to the cart");
  }  
}
