<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    static public function addMenu($request){
        $menu = new self();
        $menu->title =$request->title;
        $menu->url =$request->url;
        $menu->save();
        if($menu->id){
            return true;
        }
         return false;
    }
}
