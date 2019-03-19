<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends MainController
{
    public function ShowDashboard(){
        self::$data['title'].= 'CMS'; 
        return view('cms.ShowDashboard', self::$data);
    }
}
