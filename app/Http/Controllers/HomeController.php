<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\Category;
use App\Property;
use App\Agent;
use App\Event;

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

        $admins = User::where('view', true)->count();
        $categories = Category::all()->count();
        // $agents = Agent::all()->count();
        $properties = Property::all()->count();
        $events = Event::all()->count();
        $upcoming_events = Event::all()->where('expiry_date', '>=', date('Y-m-d H:i:s'))->count();
        return view('admin.dashboard')->with('admins', $admins)
                                      ->with('events', $events)
                                      ->with('categories', $categories)
                                    //->with('agents', $agents)
                                      ->with('properties', $properties)
                                      ->with('upcoming_events', $upcoming_events)
        ;
    }

}
