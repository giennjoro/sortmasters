<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Session;
use Auth;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::orderBy('created_at', 'DESC')->get();
        if($events->count()==0){
            Session::flash('info', 'There are no available events.');
        }
        return view('admin.events.index')->with('events', $events);
    }
    public function upcoming_events()
    {
        //
        $events = Event::orderBy('created_at', 'DESC')->where('expiry_date', '>=', date('Y-m-d H:i:s'))->orWhere('expiry_date', null)->get();
        if($events->count()==0){
            Session::flash('info', 'There are no upcoming events.');
        }
        return view('admin.events.upcoming')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'date' => 'date|required',
        ]);
        if($request->expiry_date == null){
            $expiry_date = $request->date;
        }
        else{
            $expiry_date = $request->expiry_date;
        }
        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'date' => $request->date,
            'expiry_date' => $expiry_date,
            'slug' => str_slug($request->title),
        ]);
        $event->slug = str_slug($request->title . $event->id);
        $event->save();
        Session::flash('success', 'You successifully added an event.');
        return redirect()->route('upcoming_events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $event = Event::where('slug', $slug)->first();
        return view('admin.events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $event = Event::where('slug', $slug)->first();
        if($event==null){
            Session::flash('success', 'Event not found.');
            return redirect()-back();
        }
        return view('admin.events.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'description' => 'required',
        ]);
        if($request->expiry_date == null){
            $expiry_date = $request->date;
        }
        else{
            $expiry_date = $request->expiry_date;
        }
        $event = Event::where('slug', $slug)->first();
        $event->title = $request->title;
        $event->date = $request->date;
        $event->expiry_date = $expiry_date;
        $event->slug = str_slug($request->title . $event->id);
        $success = $event->save();
        
        if($success){
            Session::flash('success', 'Event updated successifully.')    ;
        }
        else{
            Session::flash('error', 'Event could not be updated successifully');
        }
        return redirect()->route('events.show', ['slug' => $event->slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        $event = Event::where('slug', $slug)->first();
        $success = $event->delete();
        if($success){
            Session::flash('success', 'Event deleted successifully');
            return redirect()->route('events.index');
        }
        
        Session::flash('error', 'Event could not be removed!');
        return redirect()->back();
    }
}