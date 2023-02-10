    
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
                <h5 class="fw-bold text-primary text-uppercase">{{ __("visa.ContactLabel") }}</h5>
                <h1 class="mb-0">{{ __("visa.ContactTitle") }}</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __("visa.Contact1") }}</h5>
                            <h4 class="text-primary mb-0">+237 673 209 375</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __("visa.Contact2") }}</h5>
                            <h4 class="text-primary mb-0">contact@ltcprepaidcard.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __("visa.Contact3") }}</h5>
                            <h4 class="text-primary mb-0">Yaoundé,Mvan & Douala,Ndokoti</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert"> {{ $error }} </div>
                    @endforeach
                @endif

                @if (session('successMail'))
                    <div class="alert alert-success">
                        {{ session('successMail') }}
                    </div>
                @endif
                <form action="{{ route('sendmail') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input name="name" type="text" class="form-control border-0 bg-light px-4" placeholder="Nom" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" class="form-control border-0 bg-light px-4" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input name="object" type="text" class="form-control border-0 bg-light px-4" placeholder="Objet" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button  class="btn btn-primary w-100 py-3" type="submit">{{ __("visa.ContactButton") }}</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 wow slideInUp " data-wow-delay="0.6s">
                    <div class="gmap_canvas">
                        <iframe class="position-relative rounded w-100 h-100" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"  id="gmap_canvas" src="https://maps.google.com/maps?q=LTC GROUP SARL&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection