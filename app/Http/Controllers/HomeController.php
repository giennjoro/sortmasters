<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\Application;
use App\Job;
use App\Subscriber;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        // if(Auth::user()->email_verified_at == null){
        //     return redirect()->route('verification.resend');
        // }
        return view('admin.dashboard')
        ;
    }

}
