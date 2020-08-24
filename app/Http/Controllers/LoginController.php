<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login.login');
    }
    function validation(Request $request){
        //echo $request->input('username');
        //echo $request->username;
        //echo $request->password;
        if($request->username == $request->password){
            return redirect('/home');
        }
        else{
            echo "Invalid Username or password";
        }

    }
}
