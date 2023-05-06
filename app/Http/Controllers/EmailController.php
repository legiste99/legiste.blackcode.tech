<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function sendEmail(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $mailData = $request->all();
        $email = 'legiste@blackcode.tech';

        Mail::to($email)->send(new Email($mailData));
        Contact::create($mailData);

        return redirect()->back()->with(['success' => "Thank you for getting in touch! We'll get back to you as soon as possible"]);

    }

}
