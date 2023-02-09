    
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
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert"> {{ $error }} </div>
                    @endforeach
                @endif

                @if (session('saveAndSendMail'))
                    <div class="alert alert-success">
                        {{ session('saveAndSendMail') }}
                    </div>
                @endif
                
                <form action="{{ route('subscribeForm') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="">Adresse e-mail <span style="color:red;">*</span></label>
                                <input name='email' required type="email" class="form-control border-0 bg-light px-4" placeholder="Adresse e-mail" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Surname/Nom de Famille <span style="color:red;">*</span></label>
                                <input required name='surname' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Middle Name/Prenom <span style="color:red;">*</span></label>
                                <input required name='lastname' type="text" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            
                            <div class="col-md-4">
                                <label for="">Residential Address/Quartier <span style="color:red;">*</span></label>
                                <input required name='residentialAddress' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Telephone Number/Numero de telephone <span style="color:red;">*</span></label>
                                <input  required name='phone1' type="number" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Telephone Number/Numero de telephone 2 (Optionel) </label>
                                <input name='phone2' type="number" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">National ID Card Number/Numero de la CNI<span style="color:red;">*</span></label>
                                <input required  name='cniNumber' type="number" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>

                            <div class="col-md-4">
                                <label for="">Lieux d'etablisement de la CNI<span style="color:red;">*</span></label>
                                <input required name='lieuCreationCni' type="text" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Date de Naissance<span style="color:red;">*</span></label>
                                <input required name='birthday' type="date" class="form-control border-0 bg-light px-4" placeholder="Date de Naissance" style="height: 55px;">
                            </div>

                            <div class="col-md-4">
                                <label for="">Profession <span style="color:red;">*</span></label>
                                <input required name='profession' type="text" class="form-control border-0 bg-light px-4" placeholder="profession" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Segment <span style="color:red;">*</span></label>
                                <select required name="segment" class="form-select" >
                                    <option selected>Choisir votre segment</option>
                                    <option value="1">Segment 1 : 12.500 FCFA</option>
                                    <option value="2">Segment 2 : 17.500 FCFA</option>
                                    <option value="3">Segment 3 : 30.000 FCFA</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="">City/Ville <span style="color:red;">*</span></label>
                                <select required name="city" class="form-select" >
                                    <option selected value="yde">Yaoundé</option>
                                    <option value="dla">Douala</option>
                                    <option value="autres">Autres</option>
                                </select>
                            </div>

                            <br><br>
                            <hr class="col-md-8 offset-2">
                            <br><br>

                            <h3>Personne a contacter en cas de besoin</h3>

                            <div class="col-md-4">
                                <label for="">Nom et Prenom <span style="color:red;">*</span></label>
                                <input required name='toContactName' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Numero de telephone<span style="color:red;">*</span></label>
                                <input required name='toContactPhone' type="number" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Addresse <span style="color:red;">*</span></label>
                                <input required name='toContactAddress' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>

                            <div class="offset-3 col-6">
                                <button name="btn_submit" class="btn btn-primary w-100 py-3" type="submit" >Commander</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- Contact End -->

@endsection