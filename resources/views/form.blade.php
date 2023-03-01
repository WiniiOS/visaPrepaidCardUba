    
@extends('layouts.appsave')

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
                <h5 class="fw-bold text-primary text-uppercase">{{ __("visa.EnrolmentLabel") }}</h5>
                <h1 class="mb-0">{{ __("visa.EnrolmentTitle") }}</h1>
            </div>

            <div class="col-lg-10 offset-1 wow slideInUp position-relative h-100" data-wow-delay="0.6s">
                <img style="object-fit: cover;" class="w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ url('imports/img/banderole.jpg') }}" alt="">
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
                        
                        <div class="row">
                            <div class="col-md-12 offset-1">
                                <!--  -->
                                    <fieldset class="row mb-3">
                                        <span><legend class="col-form-label col-sm-8 pt-0"> {{ __("visa.EnQ1") }} <a data-bs-toggle="modal" data-bs-target="#cardModal" data-bs-whatever="@mdo" href=""> {{ __("visa.EnQ1Button") }} </a> </legend></span>
                                        
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasUniqueIdNumber" id="niu2" value="non">
                                                <label class="form-check-label" for="gridRadios1">{{ __("visa.Check11") }}</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasUniqueIdNumber" id="niu" value="oui">
                                                <label class="form-check-label" for="gridRadios2">{{ __("visa.Check12") }}</label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-6 pt-0">{{ __("visa.EnQ2") }} </legend>
                                        
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input id="livraison" class="form-check-input" type="radio" name="hasDelivery" value="oui" >
                                                <label class="form-check-label" for="gridRadios1">{{ __("visa.Check21") }}</label>
                                            </div>
                                            <div class="form-check">
                                                <input  id="livraison2" class="form-check-input" type="radio" name="hasDelivery" value="non">
                                                <label class="form-check-label" for="gridRadios2">{{ __("visa.Check22") }}</label>
                                            </div>
                                        </div>
                                    </fieldset><br>

                                    <div class="modal fade" id="cardModal" tabindex="-1" aria-labelledby="cardModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Note</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body" style='font-size:0.9em;'>
                                                <h3>{{ __("visa.MoreTitle") }}</h3>
                                                <p>
                                                {{ __("visa.MP1") }}
                                                </p>
                                                <br>
                                                <p>
                                                {{ __("visa.MP2") }}
                                                </p>
                                                <h5>{{ __("visa.MH2") }}</h5>
                                                <br>
                                                <p>
                                                {{ __("visa.MP3") }}
                                                </p>
                                                <p>
                                                {{ __("visa.MList1") }} <br>{{ __("visa.MList2") }} <br>{{ __("visa.MList3") }} <br>{{ __("visa.MList4") }} <br>{{ __("visa.MList5") }}
                                                <br>{{ __("visa.MList6") }} <br>{{ __("visa.MList7") }} <br>{{ __("visa.MList8") }} <br>{{ __("visa.MList9") }} 
                                                </p><br>
                                                <p>
                                                {{ __("visa.MP4") }}
                                                </p>
                                                <br>
                                                <p>{{ __("visa.MP5") }}</p>
                                                <p><br>
                                                {{ __("visa.MP6") }}
                                                </p>
                                                
                                            </div>
                                            

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">{{ __("visa.MButton") }}</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    
                                    <div class="col-md-4">
                                        <label for="">Segment <span style="color:red;">*</span></label>
                                        <select id="segment" required name="segment" class="form-select" >
                                            <option selected>{{ __("visa.SegTitle") }}</option>
                                            <option value="1">Segment 1 : 12.500 FCFA (Basic)</option>
                                            <option value="2">Segment 2 : 17.500 FCFA (Standard)</option>
                                            <option value="3">Segment 3 : 30.000 FCFA (Premium)</option>
                                        </select>
                                    </div>

                                    <br>
                                    <hr class="col-md-10"/>
                                <!--  -->
                            </div>
                        
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="">E-mail <span style="color:red;">*</span></label>
                                <input name='email' required type="email" class="form-control border-0 bg-light px-4" placeholder="Adresse e-mail" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Surname/ Nom  <span style="color:red;">*</span></label>
                                <input required name='surname' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">First Name/ Prénom <span style="color:red;">*</span></label>
                                <input required name='lastname' type="text" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            
                            <div class="col-md-4">
                                <label for="">Residential Address/ Quartier <span style="color:red;">*</span></label>
                                <input required name='residentialAddress' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Phone Number/ Telephone <span style="color:red;">*</span></label>
                                <input  required name='phone1' type="number" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Phone Number/ Telephone 2 (Optionel) </label>
                                <input name='phone2' type="number" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">National ID Card No/ Numero CNI<span style="color:red;">*</span></label>
                                <input required  name='cniNumber' type="text" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>

                            <div class="col-md-4">
                                <label for="">Place of issue of the NIC/ Lieu d'établissement de la CNI <span style="color:red;">*</span></label>
                                <input required name='lieuCreationCni' type="text" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Birthday/ Date de Naissance <span style="color:red;">*</span></label>
                                <input required name='birthday' type="date" class="form-control border-0 bg-light px-4" placeholder="Date de Naissance" style="height: 55px;">
                            </div>

                            <div class="col-md-4">
                                <label for="">Occupation/ Profession <span style="color:red;">*</span></label>
                                <input required name='profession' type="text" class="form-control border-0 bg-light px-4" placeholder="profession" style="height: 55px;">
                            </div>
                            
                            <div class="col-md-4">
                                <label for="">City/ Ville <span style="color:red;">*</span></label>
                                <select id="citydelivery" required name="city" class="form-select" >
                                    <option selected value="yde">Yaoundé</option>
                                    <option value="dla">Douala</option>
                                    <option value="autres">Autres</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4" id="deliveryDiv">
                                <label for="">Adresse de livraison/ Delivery address<span style="color:red;">*</span></label>
                                <input id="deliveryInput" style="height: 55px;" required name='delivery_address' type="text" class="form-control border-0 bg-light px-4" >
                            </div>

                            <br><br>
                            <hr class="col-md-8 offset-2">
                            <br><br>

                            <h3>{{ __("visa.EnrolmentBloc") }}</h3>

                            <div class="col-md-4">
                                <label for="">Nom Complet/ Full Name <span style="color:red;">*</span></label>
                                <input required name='toContactName' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Phone / Telephone <span style="color:red;">*</span></label>
                                <input required name='toContactPhone' type="number" class="form-control border-0 bg-light px-4" style="height: 55px;">
                            </div>
                            <div class="col-md-4">
                                <label for="">Address / Addresse <span style="color:red;">*</span></label>
                                <input required name='toContactAddress' type="text" class="form-control border-0 bg-light px-4"  style="height: 55px;">
                            </div>

                            <div class="offset-3 col-6">
                                <button name="btn_submit" class="btn btn-primary w-100 py-3" type="submit" > {{ __("visa.EnrolmentBtn") }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- Contact End -->
    
     <!-- Panier -->
    <div id="panier" class=" shadow-lg rounded offset-3 col-md-6 px-5 py-5 navbar fixed-bottom bg-info">
        <!-- Container wrapper -->
        <div class="container text-md-start ">
            <h4>🛒</h4>
            <p >Segment  : <span id="amountSeg" > 12.500 </span> FCFA</p> 
            <p>{{ __("visa.CartNui") }} : <span id="amountNiu"> 3000 </span> FCFA</p>
            <p>{{ __("visa.CartDeliver") }} : <span id="amountDeliver"> 1000 </span > FCFA</p>
        </div>
        <h6>&nbsp;&nbsp;&nbsp;Total : <span id="total" >16.500 </span> FCFA</h6>
        <!-- Container wrapper -->
    </div>
    <!-- Panier -->

@endsection