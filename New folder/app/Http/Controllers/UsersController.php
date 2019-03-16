<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use App\Application;
use App\Job;
use App\Subscriber;
use App\Contact;
use Illuminate\Database\QueryException;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('type', 'applicant')->where('email_verified_at', '!=', null)->get();
        return view('admin.users.index')->with('users', $users);
    }

    public function admin_index(){
        $admins = User::where('type', '!=', 'applicant')->where('view', true)->get();
        return view('admin.users.admin_index')->with('admins', $admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_admin()
    {
        //
        if(Auth::user()->type == 'super'){
            return view('admin.users.add_admin');
        }
        
        return redirect()->back()->with('error', 'You cannot create a new admin since you are not a super admin.');
    }

    public function create()
    {
        //
        return view('admin.users.create');
        
    }

    public function home()
    {
        //
        if(Auth::check()){
            if (Auth::user()->type == 'admin' || Auth::user()->type == 'super') {
                $admins = User::where('view', true)->where('type', '!=', 'applicant')->count();
            $users = User::where('type', 'applicant')->count();
            // // $contacts = Contact::all()->count();
            $applications = Application::all()->count();
            $subscribers = Subscriber::all()->count();
            $jobs = Job::all()->count();
            return view('admin.dashboard')->with('admins', $admins)
                                          ->with('users', $users)
                                          ->with('applications', $applications)
                                        //   ->with('contacts', $contacts)
                                          ->with('subscribers', $subscribers)
                                          ->with('jobs', $jobs)
            ;
            }
            return redirect()->back()->with('error', 'Sorry, you are already logged in as a non-admin. First logout to access the resource.');
        }
        return view('admin.users.login');
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
            'name' => 'required',
            'email' => 'required',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $user->slug = str_slug($request->name);
        $user->save();
        return redirect()->route('users.index')->with('success', 'You successfully added the user.');
         
    }

     
    public function admin_store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        if(Auth::user()->type == 'super'){

            $check = User::where('email', $request->email)->count();
            if($check > 0){
                Session::flash('error', 'The email is already registered!');
                return redirect()->back();
            }
            if($request->super == true){
                $type = 'super';
            }
            else{
                $type = 'admin';
            }
            $slug = str_slug($request->name);
            $admin = User::create([
                'name' => $request->name,
                'email'=> $request->email,
                'type'=> $type,
            ]);

            if(User::where('slug', $slug)->count() != 0){
                $admin->slug = str_slug($request->name . $admin->id);
            }
            else{
                $admin->slug = $slug;
            }
            $admin->save();
    
            Session::flash('success', 'You successfully added an admin.');
            return redirect()->route('admin_index');
        }

        Session::flash('error', 'You cannot add an admin since you are not a Super Admin!');
        return redirect()->back();
         
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if(Auth::user()->id == $id){
            $user = User::find($id);
            return view('admin.users.show')->with('user', $user);
        }
        try{
            $user = User::where('id', $id)->first();
        }
        catch(QueryException $e){
            Session::flash('error', 'Couldn\'t find user! Please try again.');
            return redirect()->back();
        }
        if($user == null){
            Session::flash('error', 'Couldn\'t find user! Please try again.');
            return redirect()->route('users.index');
        }
        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        if(Auth::user()->type == 'super' || Auth::user()->id == $id || $user->type == 'applicant'){
            $user = User::where('id', $id)->first();
            return view('admin.users.edit')->with('user', $user);
        }
        Session::flash('error', 'You are not allowed to edit other admins\' info unless you are a Super Admin!');
        return redirect()->back();
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        
        $user = User::where('id', $id)->first();
        if(Auth::user()->type == 'super' || Auth::user()->id == $id || $user->type == 'applicant'){
            $user = User::where('id', $id)->first();

            if($request->password != ''){
                if($request->password == $request->confirm_password){
                    $user->password = bcrypt($request->password);
                }
                else{
                    Session::flash('error', 'Confirmation password and the password do not match.');
                    return redirect()->back();
                }
            }             

            if($request->phone != ''){
                $user->phone = $request->phone;
            }

            $user->name = $request->name;
            $user->email = $request->email;

            if($user->type == 'super' || $user->type == 'admin'){
                if($request->super == true){
                    $type = 'super';
                }
                else{
                    $type = 'admin';
                }
            }

            if(Auth::user()->type == 'super' && $user->type != 'applicant'){
                
    
                if($request->super == false && User::where('type', 'super')->count() <= 1 && $user->type == 'super'){
                    Session::flash('error', 'Sorry, you are the ONLY REMAINING super admin!');
                    return redirect()->back();
                }
    
                $user->type = $type;
            }
            elseif($user->type == 'super' || $user->type == 'admin'){
                if($user->type != $type ){
                    Session::flash('error', 'You cannot change your super-admin status since you are not a super admin!');
                    return redirect()->back();
                }
            }

            
            $result = $user->save();

            if($result){
                Session::flash('success', 'You successfully updated the user\'s profile.');
                return redirect()->route('users.show', ['id' => $id]);
            }

            Session::flash('error', 'You could not update the admin profile.');
            return redirect()->route('users.index');
        }

        Session::flash('error', 'You are not allowed to edit other admins\' info unless you are a super Admin!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $user = User::where('id', $id)->first();
        }
        catch(QueryException $ex){
            Session::flash('error', 'Admin could not be found!');
            return redirect()->back();
        }
        
        if(Auth::user()->type == 'super' || Auth::user()->id == $id || $user->type == 'applicant' || $user->type == 'applicant'){
            if(User::where('type', 'super')->count() <= 2 && Auth::user()->type == 'super' && Auth::user()->$id == $id){
                Session::flash('error', 'Sorry, you are the ONLY REMAINING super admin! Make someone else a super admin then exit.');
                return redirect()->back();
            }
            $user->delete();
           
           if($user->type == 'applicant'){
                Session::flash('success', 'Applicant removed successfully');
                return redirect('/administrator/users');
           }
            Session::flash('success', 'Admin removed successfully');
            return redirect()->route('admin_index');
        }
        Session::flash('error', 'Admin could not be removed! Task only allowed to super Admin!');
        return redirect()->back();
    }
}