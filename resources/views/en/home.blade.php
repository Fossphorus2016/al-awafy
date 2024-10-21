@php
    $home_english = App\Models\Home::where('language', 'english')->first();
@endphp
<x-layout>
    <main>
        <section class="heroSection ">
            <div class="customContainer">
                <div class="heroSliderOuter">


                    <div class="heroSliderIcon">
                        <a class="icons fbLink" target="_blank" href=""> <i class="fa-brands fa-facebook-f"></i> </a>
                        <a class="icons instaLink" target="_blank" href=""> <i
                                class="fa-brands fa-instagram"></i></a>
                        <a class="icons whatsappLink" target="_blank" href=""><i
                                class="fa-brands fa-whatsapp"></i></a>
                    </div>

                    <div class="heroSlider">

                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2">
                                    {{ $home_english->banner_1_h1 ?? '' }}
                                </span> <br>
                                <span class="fs3">{{ $home_english->banner_1_h2 ?? '' }}</span>
                            </h1>
                            <p class="fs4">
                                {{ $home_english->banner_1_p ?? '' }}
                            </p>
                            @if ($home_english && $home_english->banner_1_image)
                                <img class="w-100" src="{{ asset('storage/' . $home_english->banner_1_image) }}"
                                    alt="">
                            @endif
                        </div>
                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2">
                                    {{ $home_english->banner_2_h1 ?? '' }} </span>
                                <br>
                                <span class="fs3">{{ $home_english->banner_2_h2 ?? '' }}</span>
                            </h1>
                            <p class="fs4">
                                {{ $home_english->banner_2_p ?? '' }}

                            </p>
                            @if ($home_english && $home_english->banner_2_image)
                                <img class="w-100" src="{{ asset('storage/' . $home_english->banner_2_image) }}"
                                    alt="">
                            @endif

                        </div>
                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2">
                                    {{ $home_english->banner_3_h1 ?? '' }}
                                </span>
                                <br>
                                <span class="fs3">{{ $home_english->banner_3_h1 ?? '' }}</span>
                            </h1>
                            <p class="fs4">


                                {{ $home_english->banner_3_p ?? '' }}


                            </p>
                            @if ($home_english && $home_english->banner_3_image)
                                <img class="w-100" src="{{ asset('storage/' . $home_english->banner_3_image) }}"
                                    alt="">
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="aboutSection py-5 mt-5">
            <div class="customContainer">
                <div class="row gy-4">
                    <div class="col-lg-6 col-12 d-flex align-item">
                        <div class="aboutInner paraFont">
                            <h2><span class="fs5">{{ $home_english->about_section_h_blue ?? '' }}</span> <span
                                    class="fs6">{{ $home_english->about_section_h_green ?? '' }}</span> </h2>
                            <h3 class="fs13 mb-3">{{ $home_english->about_section_h_small ?? '' }}</h3>
                            {!! $home_english->about_section_p ?? '' !!}

                            <a class="mainBtn1" href="{{ $home_english->about_section_url ?? '' }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="aboutInnerImg">
                            @if ($home_english && $home_english->about_section_image)
                                <img class="patternImg" class="w-100"
                                    src="{{ asset('storage/' . $home_english->about_section_image) }}" alt="">
                            @endif

                            {{-- <img class="abouteItem aboutItem1" class="w-100"
                                src="{{ asset('assets/images/items/item1.png') }}" alt="">
                            <img class="abouteItem aboutItem2" class="w-100"
                                src="{{ asset('assets/images/items/item2.png') }}" alt="">
                            <img class="abouteItem aboutItem3" class="w-100"
                                src="{{ asset('assets/images/items/item3.png') }}" alt="">
                            <img class="abouteItem aboutItem4" class="w-100"
                                src="{{ asset('assets/images/items/item4.png') }}" alt="">
                            <img class="nutsImg" class="w-100"
                                src="{{ asset('assets/images/items/nuts.png') }}" alt=""> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="valueSection curvedLayer">
            <div class="customContainer">
                <div class="valueSectionInner">

                    <h2><span class="fs7">Our</span> <span class="fs8">Values</span> </h2>
                    <div class="row gy-5">
                        <div class="col-lg-4 col-12">
                            <div class="singleValue">
                                <img src="{{ asset('assets/images/shape/premiumQuality.png') }}" alt="">
                                <p class="fs9">Premium <br> Quality</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="singleValue">
                                <img src="{{ asset('assets/images/shape/roasted.png') }}" alt="">
                                <p class="fs9">Traditionally <br> Roasted</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="singleValue">
                                <img src="{{ asset('assets/images/shape/natural.png') }}" alt="">
                                <p class="fs9">All <br> Natural</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
        <x-ourValues />


        <section class="ourBrands py-5">
            <div class="customContainer">
                <div>
                    <h2 class="text-center pb-4"><span class="fs5">Our</span> <span class="fs6">Brands</span>
                    </h2>

                    {{-- <div class="row showRow1 gy-4">
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem1.png') }}"
                                        alt="">
                                    <img class="py-3" src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a class="mainBtn1" href="brand-alawafy">VIEW BRAND PRODUCTS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem2.png') }}"
                                        alt="">
                                    <img class="py-3" src="{{ asset('assets/images/logo/logo2.png') }}"
                                        alt="">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a class="mainBtn1" href="brand-crico">VIEW BRAND PRODUCTS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem4.png') }}"
                                        alt="">
                                    <img style="width: 145px;object-fit: contain;" class="pb-2"
                                        src="{{ asset('assets/images/logo/alyoum.png') }}" alt="">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a class="mainBtn1" href="brand-alyoum">VIEW BRAND PRODUCTS</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row showRow2 gy-4">
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="pb-3" src="{{ asset('assets/images/logo/logo.png') }}"
                                        alt="">
                                    <img class="pb-3 w-100" src="{{ asset('assets/images/items/brandItem1.png') }}"
                                        alt="">
                                    <p>Premium quality nuts, carefully selected and roasted to perfection. From cashews
                                        to almonds,
                                        Alawafy offers a healthy and delicious snack for every occasion.</p>
                                    <a href="brand-alawafy" class="mainBtn1">VIEW BRAND PRODUCTS</a
                                        href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="pb-3" src="{{ asset('assets/images/logo/logo2.png') }}"
                                        alt="">
                                    <img class="pb-3 w-100" class="py-3"
                                        src="{{ asset('assets/images/items/brandItem2.png') }}" alt="">
                                    <p>A playful twist on peanuts with bold flavors like spicy, cheese, and barbecue.
                                        Crico delivers crunchy, flavor-packed snacks at an unbeatable value.
                                    </p>
                                    <a href="brand-crico" class="mainBtn1">VIEW BRAND PRODUCTS</a href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4 pt-2">
                                    <img style="width: 145px;object-fit: contain;" class="pb-2"
                                        src="{{ asset('assets/images/logo/alyoum.png') }}" alt="">

                                    <img class="pb-3 w-100" class="py-3"
                                        src="{{ asset('assets/images/items/brandItem4.png') }}" alt="">
                                    <p>Dedicated to the wholesale market, Alyoum offers high-quality nuts in bulk,
                                        ensuring freshness and
                                        taste for businesses and large-scale needs.</p>
                                    <a href="brand-alyoum" class="mainBtn1">VIEW BRAND PRODUCTS</a
                                        href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row showRow3 gy-4">
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem1.png') }}"
                                        alt="">
                                    <label class="fs10 py-2">Alawafy</label>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a href="brand-alawafy" class="mainBtn1">VIEW BRAND PRODUCTS</a href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem2.png') }}"
                                        alt="">
                                    <label class="fs10 py-2">Crico</label>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a href="brand-crico" class="mainBtn1">VIEW BRAND PRODUCTS</a href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem4.png') }}"
                                        alt="">
                                    <label class="fs10 py-2">Alyoum</label>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a href="brand-alyoum" class="mainBtn1">VIEW BRAND PRODUCTS</a href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="d-flex justify-content-center pt-4" style="gap: 10px">

                        <button
                            style="  height: 25px;
                            width: 25px;
                            background-color: #50A702;
                            border:none;
                            color:white;
                            border-radius: 50%;
                            display: inline-block;"
                            class="showBtn1"> 1</button>
                        <button
                            style="  height: 25px;
                            width: 25px;
                            color:white;
                            border:none;
                            background-color: #50A702;
                            border-radius: 50%;
                            display: inline-block;"
                            class="showBtn2"> 2</button>
                        <button
                            style="  height: 25px;
                            width: 25px;
                            border:none;
                            color:white;
                            background-color: #50A702;
                            border-radius: 50%;
                            display: inline-block;"
                            class="showBtn3"> 3</button>
                    </div> --}}
                </div>
            </div>
        </section>

        <x-watchVideo />


        <section class="tasteNuts curvedLayer">
            <div class="customContainer">
                <div class="tasteNutsInner">
                    <h2 class="waterDropsBefore"> <span class="fs7"> Enjoy the Finest Nuts,</span></h2>
                    <h2 class=""> <span class="fs7"> Packed with </span> <span
                            class="fs8 waterDropsAfter ms-0">Flavor and Nutrition</span> </h2>
                    <div class="pt-3 d-flex"><a class="mainBtn1 me-3 position-relative z-1" href="about">LEARN
                            MORE</a>
                        <a class="mainBtn2 position-relative z-1 h-75" href="contact-us">CONTACT
                            US</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
            <div class="customContainer">
                <h2 class="text-center pb-4"><span class="fs5">Our</span> <span class="fs6">Activities</span>
                </h2>
                <div class="activitieSlider">
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/school/school_img1.jpeg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Activation for back to school</h3>
                            <p>
                                An activation for the start of the school year (tasting + raffle) buy and
                                try to win tech vouchers
                            </p>
                        </div>
                    </div>

                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/aid_azah/eid_img1.jpeg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Al Adha activation assistance</h3>
                            <p>
                                An activation on the occasion of Aid Al Adha (tasting + raffle) of sharpeners
                                hillsides
                                recharge cards and 9pcs hills as gifts
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/special_african_cup/img0.png') }}"
                            alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Special African Cup social media competition</h3>
                            <p>
                                On the occasion of the 2023 African Cup, Alawafy launched a competition on the networks
                                social networks, televisions and smart phones as gains
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/al_jadid/image22.jpg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Souk el Fellah AL-jadid</h3>
                            <p>Presence of the ALAWAFY brand at SOUK EL FELLAH Organized by the Souk el-Fellah institute
                                Al-Jadid, in coordination with the Office of Sports and Leisure Parks of Algiers
                                (Opla) and the Chamber of Crafts and Trades, this event aims to
                                to make known and promote the national artisanal product. It brings together around 60
                                Algerian and foreign companies representing Tunisia, Senegal, China,
                                Türkiye and France came to exhibit their various products.
                            </p>
                        </div>
                    </div>
                    {{-- <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/remisDes/image38.jpg') }}" alt="">

                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Remise Des Cadeaux</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div> --}}

                    {{-- <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-money-check-dollar"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div> --}}
                </div>
                <div class="d-flex justify-content-center">
                    <a class="mainBtn1" href="activities">View More</a>
                </div>
            </div>
        </section>

        <x-letsConnect />


        <div class="customContainer">



            {{-- <button class="mainBtn1">Contact us</button>
        <button class="mainBtn2">Contact us</button>
        <button class="goDownBtn">goDown</button>
        <div class="heroSlider">
            <div class="cls">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, perferendis!
            </div>
            <div class="cls">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, perferendis!
            </div>
            <div class="cls">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, perferendis!
            </div>
            <div class="cls">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, perferendis!
            </div>
        </div> --}}
            {{--
        <div class="">
            <div class="cls1"></div>
            <div class="cls1"></div>
            <div class="cls1"></div>
            <div class="cls1"></div>
        </div>
        --}}
            {{-- <div class="scrollDownSection"></div> --}}
        </div>
    </main>
</x-layout>
