<?php

namespace App\Http\Controllers;

use App\Models\Card;
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

        $request->validate([ 
            'email' => ['required','email'],
            'surname' => ['required'],
            'lastname' => ['required'],
            'city' => ['required'],
            'residentialAddress' => ['required'],
            'phone1' => ['required'],
            'phone2' => ['nullable'],
            'cniNumber' => [ 'required'],
            'lieuCreationCni' => [ 'required'],
            'birthday' => [ 'required'],
            'profession' => [ 'required'],
            'toContactName' => [ 'required'],
            'toContactPhone' => [ 'required'],
            'toContactAddress' => [ 'required'],
            'segment' => [ 'required'],

        ]);

        dd("pass validation");

        //on crée un enregistrement de notre Carte en BD
        Card::create([
            'email' => $request->email,
            'surname' => $request->surname,
            'lastname' => $request->lastname,
            'city' => $request->city,
            'residentialAddress' => $request->residentialAddress,
            'emailAddress' => $request->emailAddress,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'cniNumber' => $request->cniNumber,
            'lieuCreationCni' => $request->lieuCreationCni,
            'birthday' => $request->birthday,
            'profession' => $request->profession,
            'toContactName' => $request->toContactName,
            'toContactPhone' => $request->toContactPhone,
            'toContactAdress' => $request->toContactAdress,
            'segment' => $request->segment
        ]);

        // on envoi un mail to ltc & client
        //     Mail::to('contact@ltcgroup.net')->send(new ContactMail($request->name,$request->email,$request->message));



        return back()->with('success', 'Votre enregistrement a bien été envoyé');
    }

}
