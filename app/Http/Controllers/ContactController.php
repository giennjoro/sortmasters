<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact_us(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
            ]);
        $data = array( 'name' => $request->get('name'), 'email' => $request->get('email'), 'user_message' => $request->get('message'), 'subj' => $request->get('subject'), 'phone' => $request->get('phone'));

        Mail::send( 'email', $data, function( $message ) use ($data)
        {
            $message->to( 'georgenjoroge977@gmail.com' )->from( $data['email'])->subject( 'Sortmasters Contact Form' );
        });

        return redirect()->back()->with('success','Message Sent Successfully');
    }
}
