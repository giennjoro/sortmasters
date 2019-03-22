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
        
        $property = $property->newQuery();

        // Search for a property based on their location.
        if ($request->location !=null) {
            $property->where('location', 'like', '%' . $request->input('location') . '%');
        }
        // Search for a property based on their category.
        $searched_category = null;
        if ($request->category != null) {
            $searched_category = Category::find($request->category)->name;
            $property->whereHas('category', function ($query) use ($request) {
                $query->where('category_id', $request->input('category'));
            });
        }

        // Search for a property based on their status.
        if ($request->status != null) {
            $property->where('status', $request->input('status'));
        }
        
        // Search for a property based on their price range.
        if ($request->max_price != null) {
            $property->where('price', '<=', $request->input('max_price'))->where('price', '>=', $request->input('min_price'));
        }
        
        // Get the results and return them.
        $message = "Location: " . "$request->location" . "<br>Category: " . "$searched_category" . "<br>Status: " . "$request->status"  . "<br>Price from: Ksh " . "$request->min_price" . " to Ksh " . "$request->max_price";
        $properties = $property->paginate(2);
        $categories = Category::all();
        return view('client.search_results')->with('properties', $properties)
                                            ->with('categories', $categories)            
                                            ->with('message', $message)            
        ;

        // $q = Input::get ( 'q' );
        // if($q != ""){
        //     $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
        //     $pagination = $user->appends ( array ('q' => Input::get ( 'q' )) );
        //     if (count ( $user ) > 0)
        //         return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
        // }
        // return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );

    }


    public function about(){
        $agents = Agent::all();
        return view('client.about')->with('agents',$agents);
    }
    public function contact(){
        return view('client.contact');
    }
    public function properties(){
        $properties = DB::table('properties')->paginate(6);
        $categories = Category::all();
        return view('client.properties')->with('properties', $properties)
                                        ->with('categories', $categories)
        ;
    }
    public function events(){
        $events = Event::orderBy('created_at', 'DESC')->where('expiry_date', '>=', date('Y-m-d H:i:s'))->orWhere('expiry_date', null)->get();
        return view('client.events')->with('events', $events);
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
