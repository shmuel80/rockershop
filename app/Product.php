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
   static public function updateCart($request){
    $valid = FALSE;
    if($request->product_id && is_numeric($request->product_id)){
       $id=$request->product_id;
       if($request->op){
         $op=$request->op == '+'?1:-1;
         $product = Cart::get($id);
         if($product['quantity']==1 && $op =='-') return FALSE;
         Cart::update(
           $id, array('quantity=>$op',
         ));
         $valid = TRUE;
       }
    }
    return $valid;
   }
}
