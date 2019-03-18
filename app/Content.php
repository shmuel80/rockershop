<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Content extends Model
{
    static public function getContent($page_url){
        $content = DB::table('menus')
                ->join ('contents', function ($join) use ($page_url){
                    $join->on('contents.menu_id', '=', 'menus.id')
                    ->where('menus.url', '=', $page_url );
                })
    ->get();
    $content = $content->toArray();
//    print_r($contents);die;
    return $content;
    }

    static public function addContent($request){
        $content = new self();
        $content->menu_id =$request->menu_id;
        $content->title =$request->title;
        $content->data =$request->data;
        $content->save();
        if($content->id){
            return true;
        }
         return false;
    }

    static public function updateContent($request){
        $content = self::find($id);
        $content->menu_id =$request->menu_id;
        $content->title =$request->title;
        $content->data =$request->data;
        $content->save();
        if($content->id){
            return true;
        }
         return false;
    }
};
