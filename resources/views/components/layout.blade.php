<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alawafy</title>

    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="">
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <meta property="og:image" content="" />
    <meta property="og:image:secure_url" content="" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="330" />
    <meta property="og:image:alt" content="" />
    <meta name="image" property="og:image" content="">
    <meta name="author" content="">
    <meta name="description" property="og:description" content="">
    <!-- Og info end -->




    <link rel="apple-touch-icon" sizes="120x120" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="manifest" href="">
    <link rel="mask-icon" href="" color="#5bbad5">
    <link rel="shortcut icon" href="" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.css') }}">

    <!-- custom styles  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <meta name="description" content="">
    <meta name="keywords" content="Keywords for Home Page">
    <link rel="canonical" href= />
    <meta name="base-url" content="">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header class="headerVisible position-absolute w-100">
        <div class="customContainer">

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> <img class="headerLogo"
                            src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                        <ul class="navbar-nav justify-content-end ">
                            <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect" href="#">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect " href="#">About Us</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle fs1" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Our Brands
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Brand 1</a></li>
                                    <li><a class="dropdown-item" href="#">Brand 2</a></li>
                                    <li><a class="dropdown-item" href="#">Brand 3</a></li>

                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect" href="#">Blogs</a>
                            </li>
                            <li class="nav-item ">
                                <button class="mainBtn1 ">Contact Us</button>
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
                            <a class="icons" target="_blank"
                                href="https://www.facebook.com/p/Alawafy-%D8%A7%D9%84%D8%B9%D9%88%D8%A7%D9%81%D9%8A-100095340142490/">
                                <i class="fa-brands fa-facebook-f"></i> </a>
                            <a class="icons" target="_blank" href="https://www.instagram.com/alawafyfoods/"> <i
                                    class="fa-brands fa-instagram"></i></a>
                            <a class="icons" target="_blank" href=""><i class="fa-brands fa-x-twitter"></i></a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ps-5">
                        <!-- Links -->
                        <h6 class="mt-5 text-uppercase fw-bold mb-4 fs-4">
                            Quick Links
                        </h6>
                        <p class="mt-1">
                            <a href="#!" class="text-reset anchorHover">Home</a>
                        </p>
                        <p class="mt-1">
                            <a href="#!" class="text-reset anchorHover">About Us</a>
                        </p>
                        <p class="mt-1">
                            <a href="#!" class="text-reset anchorHover">Our Brands</a>
                        </p>
                        <p class="mt-1">
                            <a href="#!" class="text-reset anchorHover">Blogs</a>
                        </p>
                        <p class="mt-1">
                            <a href="#!" class="text-reset anchorHover">Contact Us</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mt-5 mb-4 fs-4">
                            Company
                        </h6>
                        <p class="mt-1">
                            <a href="#!" class="text-reset anchorHover">Al-Awafy </a>
                        </p>
                        <p class="mt-1">
                            <a href="#!" class="text-reset anchorHover">Crisco</a>
                        </p>
                        <p class="mt-1">
                            <a href="#!" class="text-reset anchorHover">Alyoum</a>
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
                        <form class="newsletter_form mt-4">


                            <input type="text" class="" placeholder="Enter Your Email Address"
                                aria-label="Enter Your Email Address" aria-describedby="button-addon2">
                            <button class="" type="button" id="button-addon2"><i
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

                    <div class="col-6 ">
                        <p>Copyright © 2024 - All Right Reserved | Developed By Fossphorus</p>
                    </div>
                    <div class="col-6 text-end">
                        <a href="" class="text-white anchorHover">Privacy Policy</a> | <a class="text-white anchorHover"
                            href="">Terms & Conditions</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/fancybox.umd.js') }}"></script>
</body>

</html>
