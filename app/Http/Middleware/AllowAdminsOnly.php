<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class AllowAdminsOnly
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
        if(Auth::check()){
            if (Auth::user()->type != 'admin' && Auth::user()->type != 'super') {
                Session::flash('error', 'Sorry, task allowed to admins only. Logout first then login as an admin');
                return redirect()->back();
            }
            else if(Auth::user()->type == 'admin' || Auth::user()->type == 'super'){
                return $next($request);
            }
           
        }
        return redirect()->route('admin.login');
    }





    // public function handle($request, Closure $next)
    // {
    //     if (Auth::user()->type != 'admin' && Auth::user()->type != 'super') {

            
    //         if(Auth::check()){
    //             Session::flash('error', 'Sorry, task allowed to admins only. Logout first then login as an admin');
    //             return redirect()->back();
    //         }
    //         Session::flash('error', 'Sorry, you can only perform this task when logged in as an admin!!!');
    //         return redirect()->route('admin.login');
    //     }
    //     return $next($request);
    // }
}
