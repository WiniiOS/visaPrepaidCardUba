<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use App\Mail\NotificationMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

// Firebase
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

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

        //on crée un enregistrement de notre Carte en BD
        Card::create([
            'email' => $request->email,
            'surname' => $request->surname,
            'lastname' => $request->lastname,
            'city' => $request->city,
            'residentialAddress' => $request->residentialAddress,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'cniNumber' => $request->cniNumber,
            'lieuCreationCni' => $request->lieuCreationCni,
            'birthday' => $request->birthday,
            'profession' => $request->profession,
            'toContactName' => $request->toContactName,
            'toContactPhone' => $request->toContactPhone,
            'toContactAddress' => $request->toContactAddress,
            'segment' => $request->segment
        ]);

        $this->saveInFirebase();

        $client_email = $request->email;
        // on envoi un mail to ltc (Nouvelle commande)
        Mail::to('contact@ltcgroup.net')->send(new OrderMail(
            $request->email,$request->surname,$request->lastname,$request->city,$request->residentialAddress,$request->phone1,
            $request->phone2,$request->cniNumber,$request->lieuCreationCni,$request->birthday,$request->profession,$request->toContactName,
            $request->toContactPhone,$request->toContactAddress,$request->segment
        ));

        // on envoi un mail to ltc & client (Nouvelle commande)
        Mail::to($client_email)->send(new NotificationMail($request->name,$request->email,$request->message));

        return back()->with('saveAndSendMail', 'Votre enregistrement a bien été envoyé');

    }

    public function saveInFirebase(){
        $database = app('firebase.database');
        $cards = $database->getReference('cards')
        ->set([
            'name' => 'franck',
            'email' => 'fr@gmail.com',
            'phone' => 'fdgfg',
            'phone2' => "reter"
        ]);
    }

}
