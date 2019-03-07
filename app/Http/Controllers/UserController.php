<?php

namespace App\Http\Controllers;
use App\Http\Requests\SigninRequest;
use Illuminate\Http\Request;
use App\User;

class UserController extends MainController
{
    public function getSignin(){
    self::$data['title'] .= 'Sign in';
    return view('forms.signin', self::$data);
}
    public function userValidate(SigninRequest $request){
     if(User::validateUser($request)){

     }else{
       return redirect('user/signin')->withErrors("Invalid e-mail or password");
     }
    }
};
