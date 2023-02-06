<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class CardController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        return view('form');
    }


    public function sendmail(ContactRequest $request)
    {

        Mail::to('contact@ltcgroup.net')->send(new ContactMail($request->name,$request->email,$request->message));

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
