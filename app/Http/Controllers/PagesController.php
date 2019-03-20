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
        $properties = Property::all();
        return view('client.properties')->with('properties', $properties);
    }
    public function events(){
        $events = Event::orderBy('created_at', 'DESC')->where('expiry_date', '>=', date('Y-m-d H:i:s'))->orWhere('expiry_date', null)->get();
        return view('client.events')->with('events', $events);
    }
    //should be removed.
    public function show($slug){
        $property = Property::where('slug', $slug)->first();
        $images = json_decode($property->image);
        return view('client.show_property')->with('property', $property)->with('images', $images);
    }
}
