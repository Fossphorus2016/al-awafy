<!DOCTYPE html>
<html lang="en">

<x-head />

<body>


    <x-notification.notifications />

    <header class="headerVisible position-absolute w-100">
        <div class="customContainer">

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid flexReverse2" >
                    <a class="navbar-brand" href="home"> <img class="headerLogo"
                            src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">

                        <ul class="navbar-nav flexReverse ">
                            <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect" href="home">بيت</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect " href="about">معلومات عنا</a>
                            </li>
                            {{-- <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect" href="brands">Brands</a>
                            </li> --}}
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle fs1 hoverText" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    علاماتنا التجارية
                                </a>
                                <ul class="dropdown-menu text-end">
                                    <li><a class="dropdown-item" href="brand-alawafy">العوافي</a></li>
                                    <li><a class="dropdown-item" href="brand-crico">كريكو</a></li>
                                    <li><a class="dropdown-item" href="brand-alyoum">اليوم</a></li>

                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fs1 underLineAffect" href="activities">أنشطة</a>
                            </li>
                            <li class="nav-item d-flex justify-content-end">
                                <a class="mainBtn1" href="contact-us" style="display: block;">اتصل بنا</a>
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
                <div class="row py-5 gap-lg-0 gap-5 flex-row-reverse text-end">
                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Content -->
                        <img class="mb-4" src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                        <p> لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت
                            بالفعل، وسأعرض لك التفاصيل</p>
                        <div class="heroSliderFooter justify-content-end">
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
                            روابط سريعة
                        </h6>
                        <p class="mt-1">
                            <a href="home" class="text-reset anchorHover">بيت</a>
                        </p>
                        <p class="mt-1">
                            <a href="about" class="text-reset anchorHover">معلومات عنا</a>
                        </p>
                        <p class="mt-1">
                            <a href="brand-alawafy" class="text-reset anchorHover"> علاماتنا التجارية</a>
                        </p>
                        <p class="mt-1">
                            <a href="activities" class="text-reset anchorHover">أنشطة</a>
                        </p>
                        <p class="mt-1">
                            <a href="contact-us" class="text-reset anchorHover">اتصل بنا</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mt-5 mb-4 fs-4">
                            العلامات التجارية
                        </h6>
                        <p class="mt-1">
                            <a href="brand-alawafy" class="text-reset anchorHover">العوافي </a>
                        </p>
                        <p class="mt-1">
                            <a href="brand-crico" class="text-reset anchorHover">كريكو</a>
                        </p>
                        <p class="mt-1">
                            <a href="brand-alyoum" class="text-reset anchorHover">اليوم</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 ">
                        <!-- Links -->
                        <h6 class="mt-5 text-uppercase fw-bold fs-4">
                            اشترك الآن
                        </h6>
                        <p class="my-2">  لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت
                            <br>
                            لكن لا بد أن أوضح
                        </p>
                        <form class="newsletter_form mt-4 flex-row-reverse" action="{{ route('news.letter.create') }}" method="POST"
                            id="news_letter_form">
                            @csrf

                            <input type="email" class="rightPlaceholder" name="subscriber_mail" id="subscriber_mail"
                                placeholder="عنوان البريد الإلكتروني" aria-label="Enter Your Email Address"
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
                        <a href="" class="text-white anchorHover">سياسة الخصوصية</a> | <a
                            class="text-white anchorHover" href="">الشروط والأحكام</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Copyright -->
    </footer>


    <x-scripts />
</body>

</html>
