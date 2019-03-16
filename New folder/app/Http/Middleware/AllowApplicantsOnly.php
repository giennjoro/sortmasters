<?php

namespace App\Http\Middleware;
// use Illuminate\Support\Facades\Redirect;

use Closure;
use Auth;
use Session;

class AllowApplicantsOnly
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
            if (Auth::user()->type == 'admin' || Auth::user()->type == 'super') {
                Session::flash('error', 'Sorry, you cannot apply for a job since you are logged in as an admin');
                return redirect()->back();
            }
                return $next($request);
           
        }
        return redirect()->route('login');
    }
}
