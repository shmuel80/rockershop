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
    }}

    static public function addCategory($request){
        if ($request->hasfile('image') && $request->file('image')->isValid()){
        $file = $request->file('image');
        $filename = time()."-".$file->getClientOriginalName();
        $request->file('image') -> move(public_path()."/images", $filename);
        $category = new self();
        $category->title = $request->title;
        $category->article = $request->article;
        $category->url = $request->url;
        $category->image = $filename;
        $category->save();
        if($category->id){
            return true;
        }else{
            return false; 
        }
        }     
    }

    static public function updateCategory ($request, $id){
        $category = self::find($id);
        $category->title = $request->title;
        $category->article = $request->article;
        $category->url = $request->url;
        if($request->hasFile('image')&& $request->file('image')->isValid()){
            $file = $request->file('image');
            $filename = time()."-".$file->getClientOriginalName();
            $request->file('image') -> move(public_path()."/images", $filename);
            $category->image = $filename;
        }
        $category->image = $category->image;
        $category->save();
        if($category->id){
            return true;
        }else{
            return false; 
        }    
        }
        };