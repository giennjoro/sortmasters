<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Auth;
use App\Application;



class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $applications = Application::orderBy('created_at','desc')->get();
        return view('/admin/applications/index')->with('applications',$applications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = new Application;
        $application->id_no = $request->id_no;
        $application->age = $request->age;
        $application->job = $request->job;
        $application->address = $request->address;
        $application->marital_status = $request->marital;
        $application->dob = $request->dob;
        $application->id_no = $request->id_no;
        $application->user_id = Auth::user()->id;
        $application->job_id = $request->job_id;
        $application->illness_history = $request->illness_history;
        $application->illness_details = $request->illness_details;
        $application->skills = $request->skills;
        $application->disability_status = $request->disability_status;
        $application->disability_reg = $request->disability_reg;
        $application->cert_expiry = $request->cert_expiry;
        $application->court_conviction = $request->court_conviction;
        $application->conviction_details = $request->conviction_details;
       
        $application->save();

        return redirect('/')->with('success','Application submitted successfully, we will get back to you upon review. Thank you.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::find($id);
        
        return view('admin.applications.show')->with('application',$application);
    }
    public function apply($id)
    {   
        
        if(Auth::user()->email_verified_at == null){
            return redirect()->route('verification.resend');
        }
        
        
        $jobs = Job::all();
        $job_selected = Job::find($id);
        return view('client.application')->with('job_selected', $job_selected)
                                            ->with('jobs', $jobs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $application = Application::find($id);
        $application->delete();

        return redirect('/administrator/applications')->with('success','Application deleted Successfully');
    }
}
