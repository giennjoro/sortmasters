<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Event;
use App\Agent;
use App\Category;


class PagesController extends Controller
{
    public function index(){
        return view('client.index');
    }
    public function about(){
        
        $agents = Agent::all();
        return view('client.about')->with('agents',$agents);
    }
    public function contact(){
        return view('client.contact');
    }
    public function properties(){
        return view('client.properties');
    }
    public function events(){
        return view('client.events');
    }
    //should be removed.
    public function show(){
        return view('client.show_property');
    }
}
