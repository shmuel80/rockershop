<?php

namespace App\Http\Controllers;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends MainController
{
    public function getSignin(){
    self::$data['title'] .= 'Sign in';
    return view('forms.signin', self::$data);
}

    public function getSignup(){
    self::$data['title'] .= 'Sign up';
    return view('forms.signup', self::$data);
}
    public function userValidate(SigninRequest $request){
     if(User::validateUser($request)){
        return redirect('/');
     }else{
       return redirect('user/signin')->withErrors("Invalid e-mail or password");
     }
    }

    public function logout(){
        Session::flush();
        self::$data['title'] .= "home";
        return view('content.home', self::$data);
    }

    public function insertUser(SignupRequest $request){
        if(User::insertUser($request)){
            Session::flash('ms', "User added");
            return redirect("user/signin");
        }
    }
};
