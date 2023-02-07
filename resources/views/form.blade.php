    
@extends('layouts.app')

@section('content')

    @include('partials.spinner')
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.navbar')
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Enrollement</h5>
                <h1 class="mb-0">FORMULAIRE D'ENREGISTREMENT POUR L'OBTENTION D'UNE CARTE VISA</h1>
            </div>

            <div class="col-lg-10 offset-1 wow slideInUp" data-wow-delay="0.6s">
                    <img src="{{ url('imports/img/banderole.jpg') }}" alt="">
            </div>

            <br>


            <div class="row g-5">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">

                <form action="{{ route('subscribeForm') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="">Adresse e-mail <span style="color:red;">*</span></label>
                                <input name='email' required type="email" class="form-control border-0 bg-light px-4" placeholder="Adresse e-mail" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Surname/Nom de Famille <span style="color:red;">*</span></label>
                                <input name='surname' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Middle Name/Prenom <span style="color:red;">*</span></label>
                                <input name='lastname' type="text" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">City/Ville <span style="color:red;">*</span></label>
                                <input name='city' type="text" class="form-control border-0 bg-light px-4" placeholder="Adresse e-mail" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Residential Address/Quartier <span style="color:red;">*</span></label>
                                <input name='residentialAdress' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Email Address 1 <span style="color:red;">*</span></label>
                                <input name='emailAdress'  type="email" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Telephone Number/Numero de telephone <span style="color:red;">*</span></label>
                                <input  name='phone1' type="number" class="form-control border-0 bg-light px-4" placeholder="Adresse e-mail" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Telephone Number/Numero de telephone 2 (Optionel) </label>
                                <input name='phone2' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">National ID Card Number/Numero de la CNI<span style="color:red;">*</span></label>
                                <input  name='cniNumber' type="number" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>

                            <div class="col-6">
                                <label for="">Lieux d'etablisement de la CNI<span style="color:red;">*</span></label>
                                <input name='birthday' type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-6">
                                <label for="">Date de Naissance<span style="color:red;">*</span></label>
                                <input name='passeport' type="date" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>

                            <div class="col-md-4">
                                <label for="">Profession <span style="color:red;">*</span></label>
                                <input name='profession' type="text" class="form-control border-0 bg-light px-4" placeholder="Adresse e-mail" style="height: 55px;">
                            </div>
                            <div class="col-md-8">
                                <label for="">Segment <span style="color:red;">*</span></label>
                                <select name="segment" class="form-select" aria-label="Default select example">
                                    <option selected>Choisir votre segment</option>
                                    <option value="1">Segment 1 : 12.500 FCFA</option>
                                    <option value="2">Segment 2 : 15.000 FCFA</option>
                                    <option value="3">Segment 3 : 18.000 FCFA</option>
                                </select>
                            </div>

                            <br><br>
                            <hr class="col-md-8 offset-2">
                            <br><br>

                            <h3>Personne a contacter en cas de besoin</h3>

                            <div class="col-md-4">
                                <label for="">Nom et Prenom <span style="color:red;">*</span></label>
                                <input name='toContactName' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Numero de telephone<span style="color:red;">*</span></label>
                                <input name='toContactPhone' type="number" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Addresse <span style="color:red;">*</span></label>
                                <input name='toContactAdress' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>

                            <div class="offset-3 col-6">
                                <button class="btn btn-primary w-100 py-3" type="submit" >Soumettre</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- Contact End -->

@endsection