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
        $users = [
            ['username'=>'admin','password'=>'admin'],
            ['username'=>'user','password'=>'user'],
        ];
        for($i=0; $i<count($users); $i++){
            $username = $password = $users[$i]['username'];
            $hashedPassword = Hash::make($users[$i]['password']);
            //echo $request->input('username');
                
            if( $request->username == $username && Hash::check($request->password, $hashedPassword) ){
                $request->session()->put('username',$request->username);
                // type set up in session
                if($request->username == "admin"){
                    $request->session()->put('type',$request->username);
                }

                return redirect('/home');
            }
        }
        echo "Invalid Username or password ";

    }
}
