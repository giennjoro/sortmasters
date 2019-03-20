<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;  
use File;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();
        return view('admin.agents.index')->with('agents',$agents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->hasFile('agent_image') && $request->has('agent_image')){
            return redirect()->back()->with('error','Image not supported');
        }
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
        ]);

        //CREATE AGENT
        $agent = new Agent;
        $agent->name = $request->name;
        $agent ->phone = $request->phone;

        if($request->hasFile('agent_image')){
            $image = $request->agent_image;
            $new_image = Image::make($image->getRealPath())->resize(360, 300);
            $image_name = time() . $image->getClientOriginalName();
            $new_image->save(public_path('uploads/agents/' .$image_name));
            $agent->image = 'uploads/agents/' . $image_name;
        }

        $agent->save();

        return redirect('/administrator/agents')->with('success','Agent Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        return view('admin.agents.edit')->with('agent',$agent);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        if(!$request->hasFile('agent_image') && $request->has('agent_image')){
            return redirect()->back()->with('error','Image not supported');
        }
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
        ]);

        //UPDATE AGENT
        $agent->name = $request->name;
        $agent ->phone = $request->phone;

        if($request->hasFile('agent_image')){
            $image = $request->agent_image;
            $new_image = Image::make($image->getRealPath())->resize(360, 300);
            $image_name = time() . $image->getClientOriginalName();
            $new_image->save(public_path('uploads/agents/' .$image_name));
            $agent->image = 'uploads/agents/' . $image_name;
        }

        $agent->save();

        return redirect('/administrator/agents')->with('success','Agent Added Successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {

       
        $image = $agent->image;
        if($agent->image != "default/download.jpg"){
            $agent->delete();
        }
        File::delete($image);

        return redirect('/administrator/agents')->with('success','Agent Deleted Successfully');
    }
}
