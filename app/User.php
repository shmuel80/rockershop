<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        }else{

        }
    }return $valid;
    }
}
