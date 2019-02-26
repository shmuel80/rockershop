<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Product;

class Categorie extends Model

{
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    static public function getProducts($cat_url, &$data) {
        $cat = Categorie::where("url", $cat_url)->first();
        if($cat){
        $cat = $cat->toArray();
        $products = DB::select ("select * from products where categorie_id = {$cat['id']}");
        $data['products'] = $products;
        $data['title'].= $cat['title'];
        $data['cat_url'] = $cat_url;
        $data['cat_title'] = $cat['title'];
    }else{
        abort(404);
    }
    
}}
