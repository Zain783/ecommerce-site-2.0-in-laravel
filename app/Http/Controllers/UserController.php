<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {

        $user= User::where(['email' => $req->email])->first();
        //this check function will compare my form password to my database pasword
        //and the secondly we will check that if the user data is null
        if(Hash::check($req->password,$user->password || !$user)){

            return "username and password is incorrect";
        }else{
                $req->session()->put("user",$user);
            return redirect('/');
        }
    }
}
