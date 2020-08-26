<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('login.login');
    }
    function validation(Request $request){
        $username = $password = 'admin';
        $hashedPassword = Hash::make($password);
        //echo $request->input('username');
        
        if( $request->username == $username && Hash::check($request->password, $hashedPassword) ){
            $request->session()->put('username',$request->username);
            return redirect('/home');
        }
        else{
            echo "Invalid Username or password";
        }

    }
}
