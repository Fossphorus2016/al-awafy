<!DOCTYPE html>
<html lang="en">

<x-head />

<body>


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
                                <a class="nav-link fs1 underLineAffect" href="home">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect " href="about">About Us</a>
                            </li>
                            {{-- <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect" href="brands">Brands</a>
                            </li> --}}
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle fs1 hoverText" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Our Brands
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="brand-alawafy">Alawafy</a></li>
                                    <li><a class="dropdown-item" href="brand-crico">Crico</a></li>
                                    <li><a class="dropdown-item" href="brand-alyoum">Alyoum</a></li>

                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect" href="activities">Activities</a>
                            </li>
                            <li class="nav-item ">
                                <a class="mainBtn1" href="contact-us" style="display: block;">Contact Us</a>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque aliquam ipsum asperiores
                            quo ut numq.</p>
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
                            Quick Links
                        </h6>
                        <p class="mt-1">
                            <a href="home" class="text-reset anchorHover">Home</a>
                        </p>
                        <p class="mt-1">
                            <a href="about" class="text-reset anchorHover">About Us</a>
                        </p>
                        <p class="mt-1">
                            <a href="brand-alawafy" class="text-reset anchorHover">Our Brands</a>
                        </p>
                        <p class="mt-1">
                            <a href="activities" class="text-reset anchorHover">Activities</a>
                        </p>
                        <p class="mt-1">
                            <a href="contact-us" class="text-reset anchorHover">Contact Us</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mt-5 mb-4 fs-4">
                            Brands
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
                            Subscribe Now
                        </h6>
                        <p class="my-2">Lorem ipsum dolor sit amet, consecte
                            <br>
                            adipiscing elit. Sed porttitor.
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
                        <a href="" class="text-white anchorHover">Privacy Policy</a> | <a
                            class="text-white anchorHover" href="">Terms & Conditions</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Copyright -->
    </footer>


    <x-scripts />
</body>

</html>
