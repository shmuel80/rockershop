<?php

namespace App;
use Session;
use Cart;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function SaveOrder(){
        $order = new self();
        $order->uid = Session::get(user_id);
        $order->order_data = serialize (Cart::getContent()->toArray());
        $order->save();
        Cart::clear();
        return true;
    }
}
