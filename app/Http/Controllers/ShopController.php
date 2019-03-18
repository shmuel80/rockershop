<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Session, Cart;

class ShopController extends MainController
{
    public function addToCart(Request $request){
        Product::addToCart($request->product_id);
    }

    public function getCheckout(){
        $cart = Cart:: getContent();
        self::$data['items']=$cart->toArray();
        return view("content.checkout", self::$data);
    
    }

    public function clearCart(){
        Cart::clear();
        Session::flash('ms', "Cart deleted");
        self::$data['items']='';
        return redirect("shop/checkout");
    }

    public function deleteProduct($product_id){
        Cart::remove($product_id);
        Session::flash('ms', "Order deleted");
        return redirect("shop/checkout");
    }

    public function updateCart(Request $request){
        if(Product::updateCart($request)){
        Session::flash('ms', "Order updated on cart !!!");
    }else{
        Session::flash('ms', "Cart is not updated !!!");
    }
}
    static public function SaveOrder(){
        if(Session::has('user_id')){
        if(!Cart::isEmpty()){
            if (Order::SaveOrder()){
                Session:flash('ms', "Order is saved !!!");
                return redirect('shop/checkout');
            }
        }else{
            return redirect('shop')->withErrors("Please add your record"); 
        }
        }else{
            return redirect('user/signin')->withErrors("Please signin to continue");
        }
    }
};
