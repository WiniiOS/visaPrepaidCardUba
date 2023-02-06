<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-credit-card"></i> LTC GROUP</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
            <a href="#about" class="nav-item nav-link">Qui sommes-nous</a>            
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="{{ route('form') }}" class="btn btn-primary py-2 px-4 ms-3">Acheter Ma Carte</a>
    </div>
</nav>