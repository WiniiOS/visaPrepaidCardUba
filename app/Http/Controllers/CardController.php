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


    // public function sendmail(ContactRequest $request)
    // {

    //     Mail::to('contact@ltcgroup.net')->send(new ContactMail($request->name,$request->email,$request->message));

    //     return back()->with('successMail', 'Votre Mail a bien été envoyé');

    // }

    public function saveAndSendMails(Request $request)
    {

        dd($request->email);

        $request->validate([
            'email' => ['required','email'],
            'surname' => ['required'],
            'lastname' => ['required'],
            'city' => ['required'],
            'residentialAddress' => ['required'],
            'emailAddress' => ['required','email'],
            'phone1' => ['required'],
            'phone2' => ['nullable'],
            'cniNumber' => [ 'required'],
            'passeport' => [ 'required'],
            'profession' => [ 'required'],
            'toContactName' => [ 'required'],
            'toContactPhone' => [ 'required'],
            'toContactAdress' => [ 'required'],
            'segment' => [ 'required'],

        ]);

        //on crée un enregistrement de notre Carte en BD
        Card::create([
            'email' => $request->email,
            'surname' => $request->surname,
            'lastname' => $request->lastname,
            'city' => $request->lastname,
            'residentialAddress' => $request->residentialAddress,
            'emailAddress' => $request->emailAddress,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'cniNumber' => $request->cniNumber,
            'passeport' => $request->passeport,
            'profession' => $request->profession,
            'toContactName' => $request->toContactName,
            'toContactPhone' => $request->toContactPhone,
            'toContactAdress' => $request->toContactAdress,
            'segment' => $request->segment
        ]);

        

        //we save the email address in database 
        // Contact::create([
        //     'email' => $request->email
        // ]);

        return back()->with('success', 'Votre enregistrement a bien été envoyé');
    }

}
