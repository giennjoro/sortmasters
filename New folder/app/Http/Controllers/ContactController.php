<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
     public function store(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'phone'=>'required',
        'email' => 'required|email',
        'subject'=>'required',
        'message' => 'required'
        ]);
        $email = $request->get('email');
        
        $data = array( 'name' => $request->get('name'), 'email' => $request->get('email'), 'subject' => $request->get('subject'), 'user_message' => $request->get('message'), 'phone' => $request->get('phone'));

        Mail::send( 'email', $data, function( $message ) use ($data)
        {
            $message->to( 'info@kelmasrecruiters.co.ke' )->from( $data['email'])->subject( 'Kelmas Ventures Ltd Contact Form' );
        });
        
 
       return back()->with('success', 'Thanks for contacting us!');
   }
}
