@extends('layouts.app')

@section('content')    

    @include('partials.spinner')
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.navbar')
    </div>


    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ url('imports/img/logo.png') }}" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold">Accusé de réception</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Votre commande de carte prépayé visa UBA a bien été enregistré. Nous vous avons envoyé un email de notification histoire de verifier que les données envoyées sont exactes. En cas d'erreurs signalez le nous grace au bouton whatsapp ci-dessous.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a type="button" class="btn btn-outline-secondary btn-lg px-4" href="https://wa.me/237673209375">Chat Whatsapp</a>
            <a type="button" class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('home') }}">Accueil</a>

            </div>
        </div>
    </div>

@endsection
