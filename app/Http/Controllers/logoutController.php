<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function index(request $request){
        $request->session()->flush();
        return redirect('/login');
    }
}
