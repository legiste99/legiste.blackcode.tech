<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function viewContactForm(){
        return view('contact');
    }

    public function storeContactForm(Request $request){
        $request-> validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        Mail::send('contact', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message']
        ), function ($message) use ($request){
            $message->from($request->get('email'));
            $message->to('africandude99@gmail.com', 'Adminn')-> subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
