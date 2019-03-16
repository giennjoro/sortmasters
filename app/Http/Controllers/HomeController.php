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
        $admins = User::where('view', true)->count();
        // // $contacts = Contact::all()->count();
        $applications = Application::all()->count();
        $subscribers = Subscriber::all()->count();
        $jobs = Job::all()->count();
        return view('admin.dashboard')->with('admins', $admins)
                                        ->with('applications', $applications)
                                    //   ->with('contacts', $contacts)
                                        ->with('subscribers', $subscribers)
                                        ->with('jobs', $jobs)
        ;
    }

}
