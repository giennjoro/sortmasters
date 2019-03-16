<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Session;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $jobs = Job::orderBy('created_at','desc')->get();
       return view('/admin/jobs/index')->with('jobs',$jobs); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.jobs.add_job');
    }
    
    public function search_jobs(Request $request)
    {
       
        

        
        $jobs = Job::where('title', 'LIKE', '%' . $request->item . '%')->get();
        $check = true;
        return view('client.jobs')->with('jobs',$jobs)
                        ->with('item', $request->item)
                        ->with('check', $check);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required',
            'requirements' => 'required',
            
        ]);

        //add job
        $job= new Job;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->salary = $request->salary;
        $job->requirements = $request->requirements;
       
        $job->save();

        return redirect('/administrator/jobs')->with('success','Job Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $job = Job::find($id);
       
        return view('/admin/jobs/show')->with('job',$job);
    }
    public function client_show($id)
    {   
        $job = Job::find($id);
       
        return view('client.show_job')->with('job',$job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $job = Job::find($id);
        
        return view('/admin/jobs/edit_job')->with('job',$job);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            
        ]);

        //edit job
        $job = Job::find($id);
        $job->title = $request->title;
        $job->description = $request->description;
        $job->salary = $request->salary;
        $job->requirements = $request->requirements;
       
        $job->save();
       

        return redirect('/administrator/jobs')->with('success','Job edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect('/administrator/jobs')->with('success','Job Removed Successfully');
    }
}
