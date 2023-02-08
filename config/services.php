<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'firebase' => [
        'apiKey' => "AIzaSyAvGm9AktBJeeOekXPt3Jf1obtMVXX0NAE",
        'authDomain'=> "ltc-group.firebaseapp.com",
        'databaseURL'=> "https://ltc-group-default-rtdb.europe-west1.firebasedatabase.app",
        'projectId'=> "ltc-group",
        'storageBucket'=> "ltc-group.appspot.com",
        'messagingSenderId'=>"688552737027",
        'appId'=> "1:688552737027:web:4f994581c2e554cc129136",
        'measurementId'=> "G-34NXGTMZD8"
    ],

];
