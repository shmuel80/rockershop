<?php
namespace App\Http\Controllers;
Use Illuminate\Http\Request;
Use\App\Categorie;
Use\App\Product;

class PagesController extends MainController

{
   public function getHomePage() {
   self::$data['title'].= "Home";
   return view ('content.home', self::$data);
       
    }

   public function getCategories() {
   self::$data['title'].= "shop";
   self::$data["categories"] = Categorie::all()->toArray();
   return view ('content.shop', self::$data);

    }
    
    public function getProducts($cat_url) {
        Categorie::getProducts($cat_url, self::$data);
        return view('content.products', self::$data);
    }

    public function getItem($cat_url, $product_url) {
        $product = Product::where("url", $product_url)->first();
        self::$data['item'] = $product->toArray();
        self::$data['title'] .= $product['title'];
        return view ("content.item", self::$data);
    }
}