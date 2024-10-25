@php
    $french = App\Models\Home::where('language', 'french')->first();
@endphp

<x-frenchLayout>
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
                            <h1 class="waterDropsBefore waterDropsAfter"> <span
                                    class="fs2">{{ $french->banner_1_h1 ?? '' }}
                                </span>
                                <br>
                                <span class="fs3">{{ $french->banner_1_h2 ?? '' }}</span>
                            </h1>
                            <p class="fs4">
                                {{ $french->banner_1_p1 ?? '' }}
                                <br>
                                {{ $french->banner_1_p2 ?? '' }}
                            </p>
                            @if ($french && $french->banner_1_image)
                                <img class="w-100" src="{{ asset('storage/' . $french->banner_1_image) }}"
                                    alt="">
                            @else
                                <img class="w-100" src="{{ asset('assets/images/items/bannerItem.png') }}"
                                    alt="">
                            @endif
                        </div>
                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span
                                    class="fs2">{{ $french->banner_2_h1 ?? '' }}
                                </span>
                                <br>
                                <span class="fs3">{{ $french->banner_2_h2 ?? '' }}</span>
                            </h1>
                            <p class="fs4">
                                {{ $french->banner_2_p1 ?? '' }}
                                <br>
                                {{ $french->banner_2_p2 ?? '' }}
                            </p>



                            @if ($french && $french->banner_2_image)
                                <img class="w-100" src="{{ asset('storage/' . $french->banner_2_image) }}"
                                    alt="">
                            @else
                                <img class="w-100" src="{{ asset('assets/images/items/bannerItem2.png') }}"
                                    alt="">
                            @endif
                        </div>
                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span
                                    class="fs2">{{ $french->banner_3_h1 ?? '' }}
                                </span>
                                <br>
                                <span class="fs3">{{ $french->banner_3_h2 ?? '' }}</span>
                            </h1>
                            <p class="fs4">
                                {{ $french->banner_3_p1 ?? '' }}
                                <br>
                                {{ $french->banner_3_p2 ?? '' }}
                            </p>

                            @if ($french && $french->banner_3_image)
                                <img class="w-100" src="{{ asset('storage/' . $french->banner_3_image) }}"
                                    alt="">
                            @else
                                <img class="w-100" src="{{ asset('assets/images/items/bannerItem3.png') }}"
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
                            <h2 style="white-space: nowrap"><span class="fs5">
                                    {{ $french->about_section_h_blue ?? '' }} </span> <span
                                    class="fs6">{{ $french->about_section_h_green ?? '' }}</span> </h2>
                            <h3 class="fs13 mb-3">{{ $french->about_section_h_small ?? '' }}</h3>
                            {!! $french->about_section_p ?? '' !!}

                            <a class="mainBtn1" href="{{ $french->about_section_url }}">En savoir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="aboutInnerImg">
                            @if ($french && $french->about_section_image)
                                <img class="patternImg" class="w-100"
                                    src="{{ asset('storage/' . $french->about_section_image) }}" alt="">
                            @else
                                <img class="patternImg" class="w-100"
                                    src="{{ asset('assets/images/shape/pattern1.png') }}" alt="">
                            @endif

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
        <x-frenchourValues />


        <section class="ourBrands py-5">
            <div class="customContainer">
                <div>
                    <h2 class="text-center pb-4"><span class="fs5"> {{ $french->our_brand_h1 ?? '' }} </span> <span
                            class="fs6">{{ $french->our_brand_h2 ?? '' }}</span>
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
                                    @if ($french && $french->our_brand_logo_1)
                                        <img class="pb-3" src="{{ asset('storage/' . $french->our_brand_logo_1) }}"
                                            alt="">
                                    @else
                                        <img class="pb-3" src="{{ asset('assets/images/logo/logo.png') }}"
                                            alt="">
                                    @endif
                                    @if ($french && $french->our_brand_image_1)
                                        <img class="pb-3 w-100"
                                            src="{{ asset('storage/' . $french->our_brand_image_1) }}" alt="">
                                    @else
                                        <img class="pb-3 w-100" src="{{ asset('assets/images/items/brandItem1.png') }}"
                                            alt="">
                                    @endif
                                    <p> {{ $french->our_brand_1 ?? '' }}</p>
                                    <a href="brand-alawafy" class="mainBtn1">Voir les produits.</a href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">

                                    @if ($french && $french->our_brand_logo_2)
                                        <img class="pb-3" src="{{ asset('storage/' . $french->our_brand_logo_2) }}"
                                            alt="">
                                    @else
                                        <img class="pb-3" src="{{ asset('assets/images/logo/logo2.png') }}"
                                            alt="">
                                    @endif
                                    @if ($french && $french->our_brand_image_2)
                                        <img class="pb-3 w-100"
                                            src="{{ asset('storage/' . $french->our_brand_image_2) }}"
                                            alt="">
                                    @else
                                        <img class="pb-3 w-100" class="py-3"
                                            src="{{ asset('assets/images/items/brandItem2.png') }}" alt="">
                                    @endif

                                    <p> {{ $french->our_brand_2 ?? '' }}</p>

                                    <a href="brand-crico" class="mainBtn1">Voir les produits.</a
                                        href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4 pt-2">

                                    @if ($french && $french->our_brand_logo_3)
                                        <img class="pb-3" src="{{ asset('storage/' . $french->our_brand_logo_3) }}"
                                        style=" width: 128px;"   alt="">
                                    @else
                                        <img style="width: 145px;object-fit: contain;" class="pb-2"
                                        style=" width: 128px;"  src="{{ asset('assets/images/logo/alyoum.png') }}" alt="">
                                    @endif
                                    @if ($french && $french->our_brand_image_3)
                                        <img class="pb-3 w-100"
                                            src="{{ asset('storage/' . $french->our_brand_image_3) }}"
                                            alt="">
                                    @else
                                        <img class="pb-3 w-100" class="py-3"
                                            src="{{ asset('assets/images/items/brandItem4.png') }}" alt="">
                                    @endif

                                    <p> {{ $french->our_brand_3 ?? '' }}</p>
                                    <a href="brand-alyoum" class="mainBtn1">Voir les produits.</a
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

        <x-frenchwatchVideo />


        <section class="tasteNuts curvedLayer">
            <div class="customContainer">
                <div class="tasteNutsInner">
                    <h2 class="waterDropsBefore"> <span class="fs7">{{ $french->section_6_h1 ?? '' }}</span></h2>
                    <h2 class=""> <span
                            class="fs8 waterDropsAfter ms-0">{{ $french->section_6_h2 ?? '' }}</span> </h2>
                    <div class="pt-3 d-flex"><a class="mainBtn1 me-3 position-relative z-1"
                            href="{{ $french->section_6_url_2 ?? '' }}">En savoir
                            plus</a>
                        <a class="mainBtn2 position-relative z-1 h-75"
                            href="{{ $french->section_6_url_1 ?? '' }}">CONTACTEZ NOUS</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
            <div class="customContainer">
                <h2 class="text-center pb-4"><span class="fs5">{{ $french->our_activity_h1 ?? '' }} </span> <span
                        class="fs6">{{ $french->our_activity_h2 ?? '' }} </span>
                </h2>
                <div class="activitieSlider">
                    @php

                    @endphp
                    @php
                        $activities = App\Models\Activity::where('language', 'french')->get();
                    @endphp

                    @forelse ($activities as $activity)
                        <div class="col activityOuter">
                            <img class="w-100 activityImg" src="{{ asset('storage/' . $activity->main_image) }}"
                                alt="">
                            <div class="service-card">
                                <div class="icon-wrapper">
                                    <i class="fa-solid fa-arrows-down-to-people"></i>
                                </div>
                                <h3>{{ $activity->heading }}</h3>
                                <p>
                                    {{ $activity->paragraph }}
                                </p>
                            </div>
                        </div>
                    @empty
                    @endforelse




                </div>
                <div class="d-flex justify-content-center">
                    <a class="mainBtn1" href="activities">Voir plus</a>
                </div>
            </div>
        </section>

        <x-frenchletsConnect />


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
</x-frenchLayout>
