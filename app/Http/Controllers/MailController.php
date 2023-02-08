<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\NotificationMail;
use App\Mail\OrderMail;


use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendmail(ContactRequest $request)
    {

        Mail::to('ltcgroup@cyberjob.cm')->send(new NotificationMail($request->name,$request->email,$request->message));

        return back()->with('successMail', 'Votre Mail a bien été envoyé');

    }
}
