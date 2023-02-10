@extends('layouts.app')

@section('content')    

    @include('partials.spinner')
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.navbar')
        <!-- Slider -->
        @include('partials.slide')
    </div>
    <!-- Navbar & Carousel End -->

    <!-- About Start -->
    <div id='about' class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7" >
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ __("visa.About-us") }}</h5>
                        <h1 class="mb-0">{{ __("visa.About-us") }}</h1>
                    </div>
                    <p class="mb-4">{{ __("visa.AboutDescription") }}</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __("visa.About1Item") }}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __("visa.About3Item") }}</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __("visa.About2Item") }}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __("visa.About4Item") }}</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __("visa.AboutCallDesc") }}</h5>
                            <h4 class="text-primary mb-0">+237 673 209 375</h4>
                        </div>
                    </div>
                    <a href="#cardGrid" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">{{ __("visa.Pay") }}</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ url('imports/img/about.png') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __("visa.WhyLabel") }}</h5>
                <h1 class="mb-0">{{ __("visa.WhyTitle") }}</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>{{ __("visa.Why1") }}</h4>
                            <p class="mb-0">{{ __("visa.Why1D") }}</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>{{ __("visa.Why2") }}</h4>
                            <p class="mb-0">{{ __("visa.Why2D") }}​</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ url('imports/img/feature.png') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>{{ __("visa.Why3") }}</h4>
                            <p class="mb-0">{{ __("visa.Why3D") }}</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>{{ __("visa.Why4") }}</h4>
                            <p class="mb-0">{{ __("visa.Why4D") }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features  -->

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __("visa.BestLabel") }}</h5>
                <h1 class="mb-0">{{ __("visa.BestTitle") }}</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __("visa.Best1") }}</h4>
                        <p class="m-0">{{ __("visa.Best1D") }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __("visa.Best2") }}</h4>
                        <p class="m-0">{{ __("visa.Best2D") }}
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __("visa.Best3") }}</h4>
                        <p class="m-0">{{ __("visa.Best3D") }} </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __("visa.Best4") }}</h4>
                        <p class="m-0">{{ __("visa.Best4D") }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __("visa.Best5") }}</h4>
                        <p class="m-0">{{ __("visa.Best5D") }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">{{ __("visa.Best6") }}</h3>
                        <p class="text-white mb-3">{{ __("visa.Best6D") }}</p>
                        <h2 class="text-white mb-0">+237 673 209 375 </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Pricing Plan Start -->
    <div id="cardGrid" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __("visa.TarifLabel") }}</h5>
                <h1 class="mb-0">{{ __("visa.TarifTitle") }}</h1>
                <p class="mb-4">{{ __("visa.TarifDesc") }}</p>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">SEGMENT 1</h4>
                            <small class="text-uppercase">{{ __("visa.Valid1") }}</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>12.500<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">XAF</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif11") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif12") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif13") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif14") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif15") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>{{ __("visa.Tarif16") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('form') }}" class="btn btn-primary py-2 px-4 mt-4">{{ __("visa.TarifButton") }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">SEGMENT 2</h4>
                            <small class="text-uppercase">{{ __("visa.Valid2") }}</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>17.500<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">XAF</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif21") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif22") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif23") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif24") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif25") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>{{ __("visa.Tarif26") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('form') }}" class="btn btn-primary py-2 px-4 mt-4">{{ __("visa.TarifButton") }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">SEGMENT 3</h4>
                            <small class="text-uppercase">{{ __("visa.Valid3") }}</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>30.000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">XAF</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif31") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif32") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif33") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif34") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{ __("visa.Tarif35") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>{{ __("visa.Tarif36") }}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('form') }}" class="btn btn-primary py-2 px-4 mt-4">{{ __("visa.TarifButton") }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Recharge -->
    <div id='recharge' class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ __("visa.RechargeLabel") }}</h5>
                        <h1 class="mb-0">{{ __("visa.RechargeHeader") }}</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>{{ __("visa.RechargeDesc1") }}</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>{{ __("visa.RechargeDesc2") }}</h5>
                        </div>
                    </div>
                    
                    <p class="mb-4">{{ __("visa.RechargeContent") }}</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <a href="https://wa.me/237673209375" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">{{ __("visa.RechargeButton") }} </a>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <img style="width:100%;height:100%;" src="imports/img/tarifs.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End recharges -->

    <!-- Blocage -->
    <div id='bloquage' class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ __("visa.LockLabel") }}</h5>
                        <h1 class="mb-0">{{ __("visa.LockHeader") }}</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>{{ __("visa.LockDesc1") }}</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>{{ __("visa.LockDesc2") }}</h5>
                        </div>
                    </div>
                    
                    <p class="mb-4">{{ __("visa.LockContent") }}</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <a href="https://wa.me/237673209375" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">{{ __("visa.LockButton") }}</a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <img style="width:100%;height:100%;" src="imports/img/lockcard.webp" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blocage End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


@endsection




