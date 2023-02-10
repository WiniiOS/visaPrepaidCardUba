<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{ url('imports/img/carousel-1.png') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ __("visa.Slide1Title") }}</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ __("visa.Slide1Description") }}</h1>
                    <a href="#cardGrid" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{ __("visa.SlideButton1") }}</a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img class="w-100" src="{{ url('imports/img/carousel-2.png') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ __("visa.Slide2Title") }}</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ __("visa.Slide2Description") }}</h1>
                    <a href="#recharge" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{ __("visa.SlideButton2") }}</a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img class="w-100" src="{{ url('imports/img/carousel-3.png') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ __("visa.Slide3Title") }}</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ __("visa.Slide3Description") }}</h1>
                    <a href="#bloquage" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{ __("visa.SlideButton3") }}</a>
                </div>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>