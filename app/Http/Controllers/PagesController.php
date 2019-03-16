<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Subscriber;

class PagesController extends Controller
{
    public function index(){
        
        $jobs = Job::orderBy('created_at', 'desc')->take(4)->get();
        return view('client.index')->with('jobs', $jobs);
    }
    public function jobs(){
        $check = false;
        $jobs = Job::orderBy('created_at','desc')->get();
        return view('client.jobs')->with('jobs',$jobs)->with('check', $check);
    }
    public function about(){
        return view('client.about');
    }
    public function profile(){
        return view('client.profile');
    }
    public function contact(){
        return view('client.contact');
    }

    //Subscribing
   
    public function subscriber_store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        //create subscriber
        $subs_count = Subscriber::where('email', $request->email)->count();
        if ($subs_count > 0){
            return redirect()->back()->with('error', 'Sorry you are already a subscriber!');
        }
        $subscriber= new Subscriber;
        $subscriber->email = $request->input('email');


        
       
        $subscriber->save();

        return redirect()->back()->with('success','You have Successfully Subscribed');

    }
    
}
