<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Model
{
    static public function validateUser($request){
    $valid= FALSE;
    $email= $request->email;
    $password = $request->password;
    $sql = "SELECT * FROM users WHERE email = ?";
    $user = DB::select($sql, [$email]);
    if($user){
        $user = $user[0];
        if(Hash::check($password, $user->password)){
            $valid = true;
            if($user->role == 1){
            session::put('user_id', $user->id);
            session::put('is_admin', true);
            Session::flash('ms', "Admins Area");
        }else{
            session::put('user_id', $user->id);
            session::put('user_name', $user->first_name);
            Session::flash('ms', "Welcome $user->first_name");
        }

        }else{

        }
        return $valid;
    }return $valid;}

    static public function insertUser($request){
        $user = new self();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt ($request->password);
        $user->role = 2;
        $user->save();
        if($user_id){
        return true;
    }else{
        return false;
    }
    }
}
    
