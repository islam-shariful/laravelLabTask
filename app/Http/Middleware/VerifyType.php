<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class VerifyType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userType = $request->session()->get('type');
        //$userType = $request->username;
        //Question-> "Why 'request->username' is not valid in middleware?Also 'echo'"
        if($userType == "admin"){
            return $next($request);
        }else {
            return redirect('/home');
        }
    }
}
