<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Content;

class MainController extends Controller
{
    static public $data= ['title'=>"Rockershop | "];
    public function _construct(){
        self::$data['menus'] = Menu::all()->toArray();
    }
    
}
