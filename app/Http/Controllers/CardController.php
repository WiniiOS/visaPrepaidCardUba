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

    public function showMessage()
    {
        return view('message');
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
            'delivery_address' => [ 'required'],
            'hasUniqueIdNumber' => ['required'],
            // 'hasDelivery' => ['hasDelivery']
        ]);

        $uin = $request->hasUniqueIdNumber == null ? "Je n'ai pas de Numero d'Identifiant" : "J'ai déjà un Numero d'Identifiant" ;
        $Delivery = $request->hasDelivery == null ? "Je ne souhaite pas etre livrée je passerai au bureau" : "Je souhaite etre livrée";


        $data = [
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
            'segment' => $request->segment,
            'delivery_address' => $request->delivery_address,
            'hasUniqueIdNumber' => $uin,
            'hasDelivery' => $Delivery

        ];

        // dd($data); hasDelivery / soit : on // null

        // Save in mySQL
        // Card::create($data);

        // Save in firebase
        $this->saveInFirebase($data);

        $client_email = $request->email;
        $city = $request->city;

        $ltc_mail = 'yde@ltcprepaidcard.com' ;

        if($city == 'dla'){
            $ltc_mail = 'dla@ltcprepaidcard.com' ;
        } elseif ($city == 'yde') {
            $ltc_mail = 'yde@ltcprepaidcard.com';
        } else {
            $ltc_mail = 'yde@ltcprepaidcard.com';
        }


        // on envoi un mail to ltc (Nouvelle commande)
        Mail::to($ltc_mail)->send(new OrderMail(
            $request->email,$request->surname,$request->lastname,$request->city,$request->residentialAddress,$request->phone1,
            $request->phone2,$request->cniNumber,$request->lieuCreationCni,$request->birthday,$request->profession,$request->toContactName,
            $request->toContactPhone,$request->toContactAddress,$request->segment,$request->delivery_address,$uin,$Delivery
        ));

        // on envoi un mail to ltc & client (Nouvelle commande)
        Mail::to($client_email)->send(new NotificationMail(
            $request->email,$request->surname,$request->lastname,$request->city,$request->residentialAddress,$request->phone1,
            $request->phone2,$request->cniNumber,$request->lieuCreationCni,$request->birthday,$request->profession,$request->toContactName,
            $request->toContactPhone,$request->toContactAddress,$request->segment,$request->delivery_address,$uin,$Delivery));

        // on redirige vers whatsapp
        return redirect('message');

    }

    public function saveInFirebase($data){
        $database = app('firebase.database');
        $ref = 'cards/'.$data['phone1'].$data['surname'];
        $cards = $database->getReference($ref)
        ->set($data);
    }

}
