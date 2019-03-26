<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Property;
use App\Event;
use App\Agent;
use App\Category;


class PagesController extends Controller
{

    public function index(){
        $categories = Category::all();
        $properties = Property::orderBy('created_at', 'DESC')->get()->take(6);
        return view('client.index')->with('properties', $properties)
                                   ->with('categories', $categories)
                                   ;
    }
    public function search_property(Request $request, Property $property){
        $query = $request->all();
        if (!array_key_exists("location",$query))
            $query['location'] = null;
        
        if (!array_key_exists("category",$query))
            $query['category'] = null;
        
        if (!array_key_exists("status",$query))
            $query['status'] = null;
        
        if (!array_key_exists("max_price",$query))
            $query['max_price'] = null;
        
        if (!array_key_exists("min_price",$query))
            $query['min_price'] = null;
        
        $property = $property->newQuery();

        // Search for a property based on their location.
        if ($query['location'] !=null) {
            $property->where('location', 'like', '%' . $query['location'] . '%');
        }
        // Search for a property based on their category.
        $searched_category = null;
        if ($query['category'] !=null) {
            $searched_category = Category::find($query['category'])->name;
            $property->where('category_id', $query['category']);
        }

        // // Search for a property based on their status.
        if ($query['status'] != null) {
            $property->where('status', $query['status']);
        }
        
        // // Search for a property based on their price range.
        if ($query['max_price'] != null) {
            $property->where('price', '<=', $query['max_price'])->where('price', '>=', $query['min_price']);
        }
        
        // Get the results and return them.
        $message = "Location: " . $query['location'] . "<br>Category: " . $searched_category . "<br>Status: " . $query['status']  . "<br>Price from: Ksh " . $query['min_price'] . " to Ksh " . $query['max_price'];
        $properties = $property->paginate(6)->setPath ( '' );
        $pagination = $properties->appends ( $query );
        $categories = Category::all();
        return view('client.search_results')->with('properties', $properties)
                                            ->with('categories', $categories)            
                                            ->with('message', $message)
                                            ->withQuery ( $query )            
        ;

    }


    public function about(){
        $agents = Agent::all();
        return view('client.about')->with('agents',$agents);
    }
    public function contact(){
        return view('client.contact');
    }
    public function properties(Property $property){
        $properties = $property->newQuery()->paginate(6);
        $categories = Category::all();
        return view('client.properties')->with('properties', $properties)
                                        ->with('categories', $categories)
        ;
    }
    public function events(){
        $events = Event::orderBy('created_at', 'DESC')->where('expiry_date', '>=', date('Y-m-d H:i:s'))->orWhere('expiry_date', null)->get();
        return view('client.events')->with('events', $events);
    }
    public function services(){
        return view('client.services');
    }
    //should be removed.
    public function show($slug){
        $property = Property::where('slug', $slug)->first();
        $categories = Category::all();
        $images = json_decode($property->image);
        return view('client.show_property')->with('property', $property)
                                           ->with('images', $images)
                                           ->with('categories', $categories)
                                           ;
    }
}
