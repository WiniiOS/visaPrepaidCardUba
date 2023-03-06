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
            'cniNumber' => [ 'required','min:10'],
            'lieuCreationCni' => [ 'required'],
            'birthday' => [ 'required'],
            'profession' => [ 'required'],
            'toContactName' => [ 'required'],
            'toContactPhone' => [ 'required'],
            'toContactAddress' => [ 'required'],
            'segment' => [ 'required'],
            'delivery_address' => [ 'nullable'],
            'hasUniqueIdNumber' => ['required'],
            'hasDelivery' => ['required']
        ]);

        $uin = $request->hasUniqueIdNumber == 'oui' ? "Oui - Frais : 3000 F CFA" : "Non j'ai déjà un numéro  Identifiant" ;
        $delivery = $request->hasDelivery == 'oui' ? "Oui - Frais : 1000 si vous etes à Yaoundé ou Douala et 2000 ailleurs" : "Non - Je viendrai récupérer personnellement";
        $city = $request->city;
        $segment = $request->segment;


        $total_order = 0;
        $deliveryAmount = 0;
        $niuAmount = 0;
        $segmentAmount = 0;

        // Get delivery pricew
        if ($request->hasDelivery == 'oui') {
            if ($city == 'yde' OR $city == 'dla') {
                $deliveryAmount = 1000;
            }else{
                $deliveryAmount = 2000;
            }
        }

        //  Get value of Unique Identifiant Number
        if ($request->hasUniqueIdNumber == 'oui') {
            $niuAmount = 3000;
        }

        if ($segment == 1) {
            $segmentAmount = 12500;
        }
        if ($segment == 2) {
            $segmentAmount = 17500;
        }
        if ($segment == 3) {
            $segmentAmount = 30000;
        }


        $total_order = $deliveryAmount + $niuAmount + $segmentAmount;

        $data = [
            'email' => $request->email,
            'surname' => $request->surname,
            'lastname' => $request->lastname,
            'city' => $city,
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
            'segment' => $segment,
            'delivery_address' => $request->delivery_address,
            'hasUniqueIdNumber' => $uin,
            'hasDelivery' => $delivery,
            'total_order' => $total_order,
            'deliveryAmount' => $deliveryAmount,
            'niuAmount' => $niuAmount,
            'segmentAmount' => $segmentAmount
        ];

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
            $request->toContactPhone,$request->toContactAddress,$request->segment,$request->delivery_address,$uin,$delivery,$total_order,$deliveryAmount,$niuAmount,$segmentAmount
        ));

        // on envoi un mail to ltc & client (Nouvelle commande)
        Mail::to($client_email)->send(new NotificationMail(
            $request->email,$request->surname,$request->lastname,$request->city,$request->residentialAddress,$request->phone1,
            $request->phone2,$request->cniNumber,$request->lieuCreationCni,$request->birthday,$request->profession,$request->toContactName,
            $request->toContactPhone,$request->toContactAddress,$request->segment,strval($request->delivery_address),$uin,$delivery,$total_order,$deliveryAmount,$niuAmount,$segmentAmount));
        
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
