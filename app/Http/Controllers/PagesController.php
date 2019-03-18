<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use App\Content;
use App\Http\Controllers\MainController;
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

    public function getPageByUrl($page_url) {
        if (!empty($content = Content::getContent($page_url))) {
            self::$data['title'] .= 'Content';
            self::$data['content'] = $content;

            return view('content.content', self::$data);
        } 
    }

    public function sortByPrice($cat_url) {
        Categorie::getProductsByPrice($cat_url, self::$data);
        return view('content.products', self::$data);
    }
}