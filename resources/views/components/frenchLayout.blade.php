@props([
    'pageTitle' => 'Al Aawafy',
    'metaDescription' => 'Al Aawafy',
    'metaKeywords' => '',
    'metaImage' => '',
    'canonical' => 'Al Aawafy',
])

<!DOCTYPE html>
<html lang="en">
<x-head :$pageTitle :$metaDescription :$canonical />


<body style="    overflow-x: hidden;">


    <x-notification.notifications />

    <header class="headerVisible position-absolute w-100">
        <div class="customContainer">

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home"> <img class="headerLogo"
                            src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                        <ul class="navbar-nav justify-content-end ">
                            <li class="nav-item ">
                                <a class="nav-link fs14 underLineAffect" href="home"
                                    style="font-size:12px;">ACCUEIL</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fs14 underLineAffect " href="about" style="font-size:12px;">A
                                    PROPOS
                                </a>
                            </li>
                            {{-- <li class="nav-item ">
                                <a class="nav-link fs14 underLineAffect" href="brands">Brands</a>
                            </li> --}}
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle fs14 hoverText" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" style="font-size:12px;">
                                    NOS MARQUES
                                </a>
                                <ul class="dropdown-menu" style="font-size:12px;">
                                    <li><a class="dropdown-item" href="brand-alawafy">Alawafy</a></li>
                                    <li><a class="dropdown-item" href="brand-crico">Crico</a></li>
                                    <li><a class="dropdown-item" href="brand-alyoum">Alyoum</a></li>

                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fs14 underLineAffect" href="activities" style="font-size:12px;">NOS
                                    ACTIVITÉS</a>
                            </li>
                            <li class="nav-item ">
                                <div class="dropdown">
                                    <button
                                        class="bg-transparent border-0 btn btn-secondary dropdown-toggle languageSwitcher"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu" style="font-size:12px;">
                                        <li>
                                            <div class="dropdown-item languages" href="#">Anglaise</div>
                                        </li>
                                        <li>
                                            <div class="dropdown-item languages" href="#">Français</div>
                                        </li>
                                        <li>
                                            <div class="dropdown-item languages" href="#">arabe</div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="mainBtn1" href="contact-us" style="display: block; font-size:12px;">CONTACTEZ
                                    NOUS</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>



        </div>
    </header>

    {{ $slot }}


    <footer class="text-center text-lg-start text-white footer">


        <!-- Section: Links  -->
        <section class="">
            <div class="customContainer text-center text-lg-start ">
                <!-- Grid row -->
                <div class="row py-5 gap-lg-0 gap-5">
                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Content -->
                        <img class="mb-4" src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                        <p>Suivez-nous sur les réseaux sociaux pour découvrir
                            nos dernières actualités, promotions spéciales et moments en coulisses. Restez connecté et
                            rejoignez
                            la famille. </p>
                        <div class="heroSliderFooter">
                            <a class="icons fbLink" target="_blank" href="">
                                <i class="fa-brands fa-facebook-f"></i> </a>
                            <a class="icons instaLink" target="_blank" href=""> <i
                                    class="fa-brands fa-instagram"></i></a>
                            <a class="icons whatsappLink" target="_blank" href=""><i
                                    class="fa-brands fa-whatsapp"></i></a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 footerQuickLinks">
                        <!-- Links -->
                        <h6 class="mt-5 text-uppercase fw-bold mb-4 fs-4">
                            RACCOURCIS
                        </h6>
                        <p class="mt-1">
                            <a href="home" class="text-reset anchorHover">ACCUEIL</a>
                        </p>
                        <p class="mt-1">
                            <a href="about" class="text-reset anchorHover">A PROPOS DE NOUS</a>
                        </p>
                        <p class="mt-1">
                            <a href="brand-alawafy" class="text-reset anchorHover"> NOS MARQUES
                            </a>
                        </p>
                        <p class="mt-1">
                            <a href="activities" class="text-reset anchorHover">NOS ACTIVITÉS</a>
                        </p>
                        <p class="mt-1">
                            <a href="contact-us" class="text-reset anchorHover">CONTACT</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mt-5 mb-4 fs-4">
                            MARQUES
                        </h6>
                        <p class="mt-1">
                            <a href="brand-alawafy" class="text-reset anchorHover">AlAwafy </a>
                        </p>
                        <p class="mt-1">
                            <a href="brand-crico" class="text-reset anchorHover">Crico</a>
                        </p>
                        <p class="mt-1">
                            <a href="brand-alyoum" class="text-reset anchorHover">Alyoum</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Links -->
                        <h6 class="mt-5 text-uppercase fw-bold fs-4">
                            ABONNEZ VOUS MAINTENANT
                        </h6>
                        <p class="my-2">Rejoignez notre communauté et profitez de noix et de collations de qualité
                            premium livrées
                            directement dans votre boîte mail !
                        </p>
                        <form class="newsletter_form mt-4" action="{{ route('news.letter.create') }}" method="POST"
                            id="news_letter_form">
                            @csrf

                            <input type="email" name="subscriber_mail" id="subscriber_mail"
                                placeholder="Enter Your Email Address" aria-label="Enter Your Email Address"
                                aria-describedby="button-addon2">
                            <button onclick="news_validate()" type="button" id="button-addon2"><i
                                    class="fa-solid fa-paper-plane"></i></button>

                        </form>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class= "footerbottom">
            <div class=" customContainer">
                <div class="row py-3 justify-content-center align-items-center">

                    <div class="col-lg-6 col-12 ">
                        <p>Copyright © 2024 - All Right Reserved | Developed By
                            <a href="https://www.fossphorus.com" class="ms-2"><img
                                    src="https://www.fossphorus.com/signature/fp/fp-logo.png" alt="fossphorus-logo"
                                    width="25px"> Fossphorus</a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 privacyPages">
                        <a href="privacy_policy" class="text-white anchorHover">Politique de Confidentialité</a> | <a
                            class="text-white anchorHover" href="terms_condition"> Conditions Générales
                            d'Utilisation</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Copyright -->
    </footer>


    <x-scripts />
</body>

</html>
