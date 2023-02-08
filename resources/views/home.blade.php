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
                        <h5 class="fw-bold text-primary text-uppercase">A Propos</h5>
                        <h1 class="mb-0">Qui sommes-nous ?</h1>
                    </div>
                    <p class="mb-4">LTC Group SARL Est Un Partenaire Agréé UBA Pour La Vente Et La Recharge Des CARTES VISA PRÉPAYÉES<br> Vous pouvez acheter votre carte VISA prépayée UBA dans l'un de nos bureaux à Douala ou Yaoundé ou vous faire livrer à votre domicile ou bureau.
                        Service très rapide & la carte est disponible instantanément.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Sécurité</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fiabilité</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Support disponible 24/7</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Les prix les plus bas</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Appelez-nous si vous avez des questions</h5>
                            <h4 class="text-primary mb-0">+237 673 209 375</h4>
                        </div>
                    </div>
                    <a href="#cardGrid" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Acheter une Carte</a>
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
                <h5 class="fw-bold text-primary text-uppercase">Nous sommes leaders</h5>
                <h1 class="mb-0">Pourquoi acheter votre carte prépayée UBA chez nous</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Rapidité</h4>
                            <p class="mb-0">Pas besoin de perdre votre temps à faire la queue ou même à vous déplacer, nous enregistrons votre carte prépayée UBA en moins de 5 minutes, où vous pouvez vous faire livrer par l'un de nos agents en moins de 30 minutes.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Disponibilité</h4>
                            <p class="mb-0">Nous sommes toujours disponibles pour que vous puissiez acheter une carte chez nous même les jours fériés lorsque les banques sont fermées. Nous pouvons recharger votre carte prépayée UBA 24 heures sur 24.​</p>
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
                            <h4>Assistance</h4>
                            <p class="mb-0">Nous offrons une assistance gratuite à tous nos clients pour tous les problèmes liés à l'utilisation de la carte prépayée UBA.
                                Nous nous assurons que vos questions reçoivent des réponses, que les problèmes soient résolus et nous effectuons un suivi avec UBA pour vous.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>Conseils</h4>
                            <p class="mb-0">Nous fournissons à nos clients des conseils tant sur le choix du segment de carte le mieux adapter à leurs besoins, mais aussi sur les bonnes pratiques d'utilisation
                                de la carte, surtout en matière de sécurité.
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
                <h5 class="fw-bold text-primary text-uppercase">Le meilleur choix</h5>
                <h1 class="mb-0">Les avantages d'avoir une Carte prépayée Visa UBA</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Pas besoin d’avoir un compte bancaire</h4>
                        <p class="m-0">Les cartes visa prépayées sont indépendant du compte bancaire, vous n'êtes donc pas obligé d'avoir un compte bancaire pour en profiter</p>
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
                        <h4 class="mb-3">Achat en ligne</h4>
                        <p class="m-0">Les cartes visa prépayées vous donnent la possibilité de payer pour vos services ou produit en ligne sans tracasserie. elle est accepté sur tous les sites internet qui acceptent les paiements
                            par carte visa (Amazon, Facebook, Alibaba, Paypal etc..).
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
                        <h4 class="mb-3">Portefeuille international</h4>
                        <p class="m-0">Elle est internationalement accepté dans plus de 169 pays. Vous pouvez voyager où vous le souhaitez et retire votre argent
                            dans m'importe quel distributeur automatique peu importe la devise locale. </p>
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
                        <h4 class="mb-3">Portefeuille national</h4>
                        <p class="m-0">Cette carte vous permet également de disposer de votre argent m'importe ou sur le territoire en utilisant les distributeurs automatiques, même ceux d'une banque autre qu'Uba</p>
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
                        <h4 class="mb-3">Une sécurité accrut</h4>
                        <p class="m-0">Bénéficier d'une sécurité renforce lors de vos achats en ligne grace à la technologie 3D secure, et vous pouvez Également récupérer vos font en cas de perte ou de vol de la carte</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Contactez-nous pour plus d'informations</h3>
                        <p class="text-white mb-3">Nous sommes situés à Yaoundé,Mvan & Douala,Ndokoti Cameroun</p>
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
                <h5 class="fw-bold text-primary text-uppercase">Nos tarifs</h5>
                <h1 class="mb-0">PRIX & CARACTÉRISTIQUES DE NOS CARTES</h1>
                <p class="mb-4">Les documents les plus importants nécessaires pour acheter une carte prépayée UBA sont ;
                    1 - Carte d'identité ou passeport en cours de validité
                    2 - NIU valide (carte de contribuable)</p>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">SEGMENT 1</h4>
                            <small class="text-uppercase">VALIDITÉ DE 3 ANS</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>12.500<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">XAF</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de Recharge par transaction 2.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de Recharge par Mois 2.500.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de retrait au distributeur par transaction 250.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de retrait au distributeur par jour 750.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de retrait au distributeur par mois 2.500.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Montant maximum mensuel pour les payments en ligne 1.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('form') }}" class="btn btn-primary py-2 px-4 mt-4">Commander maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">SEGMENT 2</h4>
                            <small class="text-uppercase">VALIDITÉ DE 2 ANS</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>17.500<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">XAF</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de Recharge par transaction 2.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de Recharge par Mois 4.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de retrait au distributeur par transaction 250.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de retrait au distributeur par jour 750.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de retrait au distributeur par mois 4.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Montant maximum mensuel pour les payments en ligne 1.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('form') }}" class="btn btn-primary py-2 px-4 mt-4">Commander maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">SEGMENT 3</h4>
                            <small class="text-uppercase">VALIDITÉ DE 2 ANS</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>30.000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">XAF</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de Recharge par transaction 2.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de Recharge par Mois 10.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de retrait au distributeur par transaction 250.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de retrait au distributeur par jour 750.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Montant maximum de retrait au distributeur par mois 5.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Montant maximum mensuel pour les payments en ligne 1.000.000 FCFA</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('form') }}" class="btn btn-primary py-2 px-4 mt-4">Commander maintenant</a>
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
                        <h5 class="fw-bold text-primary text-uppercase">RECHARGE</h5>
                        <h1 class="mb-0">Comment Recharger votre carte pré-payée ?</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Rechargez en moins de 5 minutes</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Lundi a Samedi entre 07h et 22h, même les jours fériés</h5>
                        </div>
                    </div>
                    
                    <p class="mb-4">Vous pouvez recharger votre carte prépayée UBA en ligne par notre intermédiaire ou en personne dans nos locaux.
                        Les recharges sont effectuées instantanément après réception de toutes vos informations et tu paiement. Vous recevez une notification pour confirmer la recharge. Les recharges sont disponibles de Lundi a Samedi entre 07h et 22h, même les jours fériés et certaint Dimanche. Votre identifiant client et votre nom sont nécessaires pour confirmer l'identité de votre compte et recharger votre carte prépayée UBA.
                        Les paiements en ligne pour les recharges de carte sont reçus via nos comptes Orange Money & MTN Mobile Money. Vous pouvez également payer en espèces dans l'un de nos bureaux ou par l'intermédiaire de nos agents.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <a href="https://wa.me/237673209375" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Cliquez pour Recharger </a>
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
                        <h5 class="fw-bold text-primary text-uppercase">Bloquer</h5>
                        <h1 class="mb-0">Comment bloquer votre carte pré-payée en cas de vol ou perte?</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>

                    
                    <p class="mb-4">Nous pouvons vous aider à demander le blocage de votre carte VISA prépayée UBA si elle a été compromise, nous pouvons également vous aider à remplacer votre carte prépayée UBA par une nouvelle. Certains détails et documents sont nécessaires pour confirmer votre identité et demander le blocage ou le remplacement de votre carte prépayée UBA; <br> 1 - Copie d'une pièce d'identité en cours de validité, ou Passeport signé 3 fois par vos soins. <br> 2 - Identifiant client de la carte prépayée que vous souhaitez bloquer en cas de blocage. <br> En cas de remplacement de l'identifiant client de la carte prépayée que vous souhaitez remplacer, identifiant client de la nouvelle carte prépayée. <br> 3 - Lettre écrite adressée à UBA Cameroun, pour le blocage ou le remplacement de votre carte. Le blocage de votre carte prépayée UBA est gratuit, mais son remplacement peut entraîner des frais, de la part d'UBA, pas de nous. Cette demande est faite et exécutée généralement sous 5H, Cliquez sur le bouton ci-dessous pour faire une demande maintenant.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <a href="https://wa.me/237673209375" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Cliquer pour Bloquer</a>
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




