<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

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
            // $username = $password = $users[$i]['username'];
            // $hashedPassword = Hash::make($users[$i]['password']);
            // //echo $request->input('username');

            $user = new User();
            //$data = $user->all();
            $data = $user->where('username', $request->username)
                            ->where('password', $request->password)
                            ->get();

            // print_r($data[0]->type);
            // print_r($data[0]['type']);
                
            //if( $request->username == $username && Hash::check($request->password, $hashedPassword) ){
            if(count($data) > 0 ){
                $request->session()->put('username',$request->username);
                // type set up in session
                if($data[0]->type == "admin"){
                    $request->session()->put('type',$data[0]->type);
                }

                return redirect('/home');
            }
        }
        echo "Invalid Username or password ";

    }
}
