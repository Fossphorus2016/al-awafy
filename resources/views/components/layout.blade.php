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

    <!-- bootstrap -->


    <!-- flat picker  -->


    <!-- remix Icon  -->

    <!-- aos  -->


    <!-- slick css  -->


    <!-- fancybox css  -->


    <link rel="apple-touch-icon" sizes="120x120" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="manifest" href="">
    <link rel="mask-icon" href="" color="#5bbad5">
    <link rel="shortcut icon" href="" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">

    <!-- custom styles  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <meta name="description" content="">
    <meta name="keywords" content="Keywords for Home Page">
    <link rel="canonical" href= />
    <meta name="base-url" content="">


</head>

<body>

    <header>
        <div class="customContainer">


            <nav class="navbar bg-light fixed-top d-lg-none d-block">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> <img src="{{ asset('assets/images/logo/logo.png') }}"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a class="navbar-brand" href="#"> <img
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body menuRight">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item fs1">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item fs1">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                <li class="nav-item fs1">
                                    <a class="nav-link" href="#">Our Products</a>
                                </li>
                                <li class="nav-item fs1">
                                    <a class="nav-link" href="#">Blogs</a>
                                </li>
                                <li class="nav-item fs1">
                                    <button class="mainBtn1">Contact Us</button>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg  d-lg-block d-none">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> <img src="{{ asset('assets/images/logo/logo.png') }}"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse menuRight" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5 ">
                            <li class="nav-item fs1">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item fs1">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item fs1">
                                <a class="nav-link" href="#">Our Products</a>
                            </li>
                            <li class="nav-item fs1">
                                <a class="nav-link" href="#">Blogs</a>
                            </li>
                            <li class="nav-item fs1">
                                <button class="mainBtn1">Contact Us</button>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>
    {{ $slot }}
    <footer class="text-center text-lg-start bg-dark text-white">


        <!-- Section: Links  -->
        <section class="">
            <div class="customContainer text-center text-lg-start ">
                <!-- Grid row -->
                <div class="row py-5 gap-lg-0 gap-5">
                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Content -->
                        <img src="{{ asset('assets/images/logo/f-logo.png') }}" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque aliquam ipsum asperiores
                            quo ut numquam reprehenderit laboriosam unde.</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold ">
                            Our Menu
                        </h6>
                        <p class="mt-3">
                            <a href="#!" class="text-reset ">Home</a>
                        </p>
                        <p class="mt-3">
                            <a href="#!" class="text-reset ">About Us</a>
                        </p>
                        <p class="mt-3">
                            <a href="#!" class="text-reset ">Product</a>
                        </p>
                        <p class="mt-3">
                            <a href="#!" class="text-reset ">Blog</a>
                        </p>
                        <p class="mt-3">
                            <a href="#!" class="text-reset ">Contact Us</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold ">
                            Resources
                        </h6>
                        <p class="mt-3">
                            <a href="#!" class="text-reset ">News </a>
                        </p>
                        <p class="mt-3">
                            <a href="#!" class="text-reset ">About Us</a>
                        </p>
                        <p class="mt-3">
                            <a href="#!" class="text-reset ">Menu</a>
                        </p>
                        <p class="mt-3">
                            <a href="#!" class="text-reset ">Career</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold ">
                            Newsletter
                        </h6>
                        <p class="my-2">Lorem ipsum dolor sit amet, consecte </p>
                        <form class="newsletter_form">

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter Your Email Address" aria-label="Enter Your Email Address" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa-solid fa-paper-plane"></i></button>
                              </div>
                        </form>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class= "footerbottom" >
            <div class=" customContainer">
                <div class="row py-3 justify-content-center align-items-center"  style="border-top: 2px solid black">

                    <div class="col-10 text-center" >
                        <p>Copyright © 2024 - All Right Reserved | Developed By Fossphorus</p>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
