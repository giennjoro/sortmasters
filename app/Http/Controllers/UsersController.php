<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;
use Image;
use Session;
use Auth;
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
        $admins = User::all()->where('view', true);
        return view('admin.users.index')->with('admins', $admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::user()->is_supper){
            return view('admin.users.create');
        }
        Session::flash('error', 'You cannot create a new admin since you are not a supper admin.');
        return redirect()->back();
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
            'name' => 'required',
            'email' => 'required|email',
        ]);
        if(Auth::user()->is_supper){
            $validate = User::where('email', $request->email)->count();
            if($validate > 0){
                Session::flash('error', 'The email is arleady in our database.');
                return redirect()->back();
            }
            $slug = str_slug($request->name);
            $check = User::where('slug', $slug)->count();
            try{
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'slug' => $slug,
                ]);
            }
            catch(QueryException $ex){
                Session::flash('error', 'Admin could not be added. If the problem persists, contact us. \n#info@24seven.co.ke');
                return redirect()->back();
            }
            $user->slug = $slug;
            $user->save();
            if($check > 0){
                $user->slug = $slug . $user->id;
                $user->save();
            }
            if($user){
                Session::flash('success', $user->name . ' was successifully added.');
                return redirect()->route('users.index');
            }
        }
        Session::flash('info', 'You cannot create a new admin since you are not a supper admin.');
        return redirect()->back();
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
        try{
            $user = User::where('slug', $slug)->first();
        }
        catch(QueryException $e){
            Session::flash('error', 'Couldn\'t find user! Please try again.');
            return redirect()->back();
        }
        if($user == null){
            Session::flash('error', 'Sorry, we couldn\'t find the admin! Please try again.');
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
    public function edit($slug)
    {
        //
        if(Auth::user()->is_supper == true || Auth::user()->slug == $slug){
            $user = User::where('slug', $slug)->first();
            return view('admin.users.edit')->with('user', $user);
        }
        Session::flash('error', 'You are not allowed to edit other users\' info unless you are a Supper Admin!');
        return redirect()->back();
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        if(Auth::user()->is_supper == true || Auth::user()->slug == $slug){
            $user = User::where('slug', $slug)->first();

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
            $new_slug = str_slug($request->name) . $user->id;
            $user->slug = $new_slug;

            if($request->is_supper == true){
                $is_supper = true;
            }
            else{
                $is_supper = false;
            }

            if(Auth::user()->is_supper){


                if($request->is_supper == false && User::where('is_supper', true)->where('view', true)->count() == 1 && $user->is_supper == true){
                    Session::flash('error', 'Sorry, you are the ONLY REMAINING supper admin!');
                    return redirect()->back();
                }

                $user->is_supper = $is_supper;
            }
            elseif($user->is_supper != $is_supper){
                Session::flash('error', 'You cannot change your supper-admin status since you are not a supper admin!');
                return redirect()->back();
            }
            $result = $user->save();

            if($result){
                Session::flash('success', 'You successifully updated the admin profile.');
                return redirect()->route('users.show', ['slug' => $new_slug]);
            }

            Session::flash('error', 'You could not update the admin profile.');
            return redirect()->route('users.index');
        }

        Session::flash('error', 'You are not allowed to edit other users\' info unless you are a Supper Admin!');
        return redirect()->back();
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
        try{
            $user = User::where('slug', $slug)->first();
        }
        catch(QueryException $ex){
            Session::flash('error', 'Admin could not be found!');
            return redirect()->back();
        }

        if(Auth::user()->is_supper || Auth::user()->slug == $slug){
            if(User::where('is_supper', true)->count() == 1 && Auth::user()->is_supper && Auth::user()->slug == $slug){
                Session::flash('error', 'Sorry, you are the ONLY REMAINING supper admin! Make someone else a supper admin then exit.');
                return redirect()->back();
            }
            $user->delete();
            Session::flash('success', 'Admin removed successifully');
            return redirect()->route('users.index');
        }
        Session::flash('error', 'Admin could not be removed! Task only allowed to Supper Admin!');
        return redirect()->back();
    }
}
