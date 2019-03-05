<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends MainController
{
    public function getSignin(){
    self::$data['title'] .= 'Sign in';
    return view('forms.signin', self::$data);
}
};
