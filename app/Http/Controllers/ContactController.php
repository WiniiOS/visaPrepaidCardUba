<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContact(){
        return view('contact');
    }

    public function sendmail(Request $request)
    {
        Mail::to('contact@ltcprepaidcard.com')->send(new ContactMail($request->name,$request->email,$request->object,$request->message));

        return back()->with('successMail', 'Votre Mail a bien été envoyé');

    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => ['required','email']
        ]);

        //we save the email address in database 
        Contact::create([
            'email' => $request->email
        ]);

        return back()->with('success', 'Votre e-mail a bien été ajouté à notre newsletter');

    }

}
