<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class LoginAuth
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
        $path= $request->path();
        if($path=='login' && Session::get('user')){
            return redirect('/home');
        

        }
        if($path=='userlist' && !Session::get('user')){
            return redirect('/signin');
        }
        if($path=='registration' && !Session::get('user')){
            return redirect('/signin');
        }
    
        return $next($request);


    }
}
