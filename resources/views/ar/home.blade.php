@php
    $home_arabic = App\Models\Home::where('language', 'arabic')->first();
@endphp

<x-arabicLayout :pageTitle="$home_arabic->meta_title" :metaDescription="$home_arabic->meta_description" :canonical="$home_arabic->canonical">

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
                                    {{ $home_arabic->banner_1_h1 ?? '' }}
                                </span> <br>
                                <span class="fs3">{{ $home_arabic->banner_1_h2 ?? '' }}</span>
                            </h1>
                            <p class="fs4">
                                {{ $home_arabic->banner_1_p1 ?? '' }} <br>
                                {{ $home_arabic->banner_1_p2 ?? '' }}
                            </p>
                            @if ($home_arabic && $home_arabic->banner_1_image)
                                <img class="w-100" src="{{ asset('storage/' . $home_arabic->banner_1_image) }}"
                                    alt="">
                            @endif
                        </div>
                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2">
                                    {{ $home_arabic->banner_2_h1 ?? '' }} </span>
                                <br>
                                <span class="fs3">{{ $home_arabic->banner_2_h2 ?? '' }}</span>
                            </h1>
                            <p class="fs4">
                                {{ $home_arabic->banner_2_p1 ?? '' }} <br>
                                {{ $home_arabic->banner_2_p2 ?? '' }} <br>


                            </p>
                            @if ($home_arabic && $home_arabic->banner_2_image)
                                <img class="w-100" src="{{ asset('storage/' . $home_arabic->banner_2_image) }}"
                                    alt="">
                            @endif

                        </div>
                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2">
                                    {{ $home_arabic->banner_3_h1 ?? '' }}
                                </span>
                                <br>
                                <span class="fs3">{{ $home_arabic->banner_3_h1 ?? '' }}</span>
                            </h1>
                            <p class="fs4">


                                {{ $home_arabic->banner_3_p1 ?? '' }}
                                {{ $home_arabic->banner_3_p2 ?? '' }}


                            </p>
                            @if ($home_arabic && $home_arabic->banner_3_image)
                                <img class="w-100" src="{{ asset('storage/' . $home_arabic->banner_3_image) }}"
                                    alt="">
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="aboutSection py-5 mt-5">
            <div class="customContainer">
                <div class="row gy-4 flex-row-reverse">
                    <div class="col-lg-6 col-12 d-flex align-item">
                        <div class="aboutInner paraFont text-end" style="align-items: end;">
                            <h2><span class="fs5">{{ $home_arabic->about_section_h_blue ?? '' }}</span> <span
                                    class="fs6">{{ $home_arabic->about_section_h_green ?? '' }}</span> </h2>
                            <h3 class="fs13 mb-3">{{ $home_arabic->about_section_h_small ?? '' }}</h3>
                            {!! $home_arabic->about_section_p ?? '' !!}

                            <a class="mainBtn1" href="{{ $home_arabic->about_section_url ?? '' }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="aboutInnerImg">
                            <@if ($home_arabic && $home_arabic->about_section_image)
                                <img class="patternImg" class="w-100"
                                    src="{{ asset('storage/' . $home_arabic->about_section_image) }}" alt="">
                                @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="aboutSection py-5 mt-5">
            <div class="customContainer">
                <div class="row gy-4">
                    <div class="col-lg-6 col-12 d-flex align-item">
                        <div class="aboutInner paraFont">
                            <h2><span class="fs5">{{ $home_arabic->about_section_h_blue ?? '' }}</span> <span
                                    class="fs6">{{ $home_arabic->about_section_h_green ?? '' }}</span> </h2>
                            <h3 class="fs13 mb-3">{{ $home_arabic->about_section_h_small ?? '' }}</h3>
                            {!! $home_arabic->about_section_p ?? '' !!}

                            <a class="mainBtn1" href="{{ $home_arabic->about_section_url ?? '' }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="aboutInnerImg">
                            @if ($home_arabic && $home_arabic->about_section_image)
                                <img class="patternImg" class="w-100"
                                    src="{{ asset('storage/' . $home_arabic->about_section_image) }}" alt="">
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <x-arabicOurValues />


        <section class="ourBrands py-5">
            <div class="customContainer">
                <div>
                    <h2 class="text-center pb-4"><span class="fs5">{{ $home_arabic->our_brand_h1 ?? '' }}</span>
                        <span class="fs6">{{ $home_arabic->our_brand_h2 ?? '' }}</span>
                    </h2>


                    <div class="row showRow2 gy-4">
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    @if ($home_arabic && $home_arabic->our_brand_logo_1)
                                        <img class="pb-3"
                                            src="{{ asset('storage/' . $home_arabic->our_brand_logo_1) }}"
                                            alt="">
                                    @else
                                        <img class="pb-3" src="{{ asset('assets/images/logo/logo.png') }}"
                                            alt="">
                                    @endif

                                    @if ($home_arabic && $home_arabic->our_brand_image_1)
                                        <img class="pb-3"
                                            src="{{ asset('storage/' . $home_arabic->our_brand_image_1) }}"
                                            alt="">
                                    @else
                                        <img class="pb-3 w-100" src="{{ asset('assets/images/items/brandItem1.png') }}"
                                            alt="">
                                    @endif
                                    <p>
                                        {{ $home_arabic->our_brand_1 ?? '' }}
                                    </p>
                                    <a href="brand-alawafy" class="mainBtn1">عرض منتجات العلامة التجارية</a
                                        href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">

                                <div class="card-body paraFont py-4">

                                    @if ($home_arabic && $home_arabic->our_brand_logo_2)
                                        <img class="pb-3"
                                            src="{{ asset('storage/' . $home_arabic->our_brand_logo_2) }}"
                                            alt="">
                                    @else
                                        <img class="pb-3" src="{{ asset('assets/images/logo/logo2.png') }}"
                                            alt="">
                                    @endif

                                    @if ($home_arabic && $home_arabic->our_brand_image_2)
                                        <img class="pb-3"
                                            src="{{ asset('storage/' . $home_arabic->our_brand_image_2) }}"
                                            alt="">
                                    @else
                                        <img class="pb-3 w-100" class="py-3"
                                            src="{{ asset('assets/images/items/brandItem2.png') }}" alt="">
                                    @endif
                                    <p>
                                        {{ $home_arabic->our_brand_2 ?? '' }}
                                    </p>
                                    <a href="brand-crico" class="mainBtn1">عرض منتجات العلامة التجارية</a
                                        href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4 pt-2">

                                    @if ($home_arabic && $home_arabic->our_brand_logo_3)
                                        <img class="pb-3"
                                            src="{{ asset('storage/' . $home_arabic->our_brand_logo_3) }}"
                                            style=" width: 128px;" alt="">
                                    @else
                                        <img style="width: 145px;object-fit: contain;" class="pb-2"
                                        style=" width: 128px;"    src="{{ asset('assets/images/logo/alyoum.png') }}" alt="">
                                    @endif

                                    @if ($home_arabic && $home_arabic->our_brand_image_3)
                                        <img class="pb-3"
                                            src="{{ asset('storage/' . $home_arabic->our_brand_image_3) }}"
                                            alt="">
                                    @else
                                        <img class="pb-3 w-100" class="py-3"
                                            src="{{ asset('assets/images/items/brandItem4.png') }}" alt="">
                                    @endif
                                    <p>
                                        {{ $home_arabic->our_brand_3 ?? '' }}
                                    </p>
                                    <a href="brand-alyoum" class="mainBtn1">عرض منتجات العلامة التجارية</a
                                        href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <x-arabicWatchVideo />


        <section class="tasteNuts curvedLayer">
            <div class="customContainer">
                <div class="tasteNutsInner">
                    <h2 class="waterDropsBefore"> <span class="fs7"> {{ $home_arabic->section_6_h1 ?? '' }}
                        </span></h2>
                    <h2 class=""> <span class="fs7"> {{ $home_arabic->section_6_h2 ?? '' }} </span> <span
                            class="fs8  waterDropsAfter2 ms-0"> {{ $home_arabic->section_6_h3 ?? '' }} </span> </h2>
                    <div class="pt-3 d-flex"><a class="mainBtn1 me-3 position-relative z-1" href="about">
                            لمعرفة المزيد
                        </a>
                        <a class="mainBtn2 position-relative z-1 h-75" href="contact-us">
                            للإتصال بنا
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
            <div class="customContainer">
                <h2 class="text-center pb-4"><span class="fs5">أنشطتنا
                    </span> <span class="fs6"></span>
                </h2>
                <div class="activitieSlider">
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/excecutionEst/image16.jpg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>d’exécution Est</h3>
                            <p>
                                لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت
                                بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة
                            </p>
                        </div>
                    </div>

                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/excecutionCenter/img2.jpg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>d’exécution Center</h3>
                            <p>
                                لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت
                                بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/loperationBts/img7.jpg') }}" alt="">

                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>de l’opération BTS</h3>
                            <p>
                                لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت
                                بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/excecutionQuest/image26.jpg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>d’exécution Quest</h3>
                            <p>
                                لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت
                                بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/remisDes/image38.jpg') }}" alt="">

                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Remise Des Cadeaux</h3>
                            <p>
                                لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت
                                بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة
                            </p>
                        </div>
                    </div>


                </div>
                <div class="d-flex justify-content-center">
                    <a class="mainBtn1" href="activities">عرض المزيد</a>
                </div>
            </div>
        </section> --}}
        <section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
            <div class="customContainer">
                <h2 class="text-center pb-4"><span class="fs5">أنشطتنا</span> <span class="fs6"></span>
                </h2>
                <div class="activitieSlider">
                    @php
                        $activities = App\Models\Activity::where('language', 'arabic')->get();
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
                    {{-- <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/school/school_img1.jpeg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3> 2023 ﻓﻌﺎﻟﯾﺔ اﻟﻌودة إﻟﻰ اﻟﻣدرﺳﺔ - ﺳﺑﺗﻣﺑر </h3>
                            <p>
                                بمناسبة العودة إلى المدرسة لعام 2023، نظمت العوافي فعالية خاصة تضمنت تذوق المنتجات وسحب
                                جوائز (طومبولا). أتيحت الفرصة للمشاركين للفوز بقسائم شراء لمنتجات مدرسية.

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
                            <h3> ﻓﻌﺎﻟﯾﺔ ﻋﯾد اﻷﺿﺣﻰ - ﯾوﻧﯾو 2024 </h3>
                            <p>
                                بمناسبة عيد الأضحى 2024، نظمت العوافي فعالية تضمنت تذوق المنتجات وسحب جوائز (تومبولا)
                                للفوز ببطاقات تعبئة، وأطقم سكاكين مكونة من 9 قطع كجوائز.

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
                            <h3>ﻣﺳﺎﺑﻘﺔ ﺧﺎﺻﺔ ﺑﻛﺄس إﻓرﯾﻘﯾﺎ 2023 ﻋﺑر وﺳﺎﺋل اﻟﺗواﺻل اﻻﺟﺗﻣﺎﻋﻲ </h3>
                            <p>
                                بمناسبة كأس إفريقيا 2023، أطلقت العوافي مسابقة عبر وسائل التواصل الاجتماعي، حيث تم تقديم
                                أجهزة تلفاز وهواتف ذكية كجوائز.
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
                            <h3>سوق الفلاح الجديد</h3>
                            <p>
                                شاركت علامة العوافي في سوق الفلاح، الذي نظمه معهد سوق الفلاح الجديد بالتنسيق مع ديوان
                                حدائق الرياضة والترفيه بالجزائر (أوبلا) وغرفة الحرف والصناعات. يهدف هذا الحدث إلى
                                التعريف بالمنتجات الحرفية الوطنية وتعزيزها. شارك في هذا المعرض حوالي 60 شركة جزائرية
                                وأجنبية من تونس، السنغال، الصين، تركيا، وفرنسا، حيث عرضت مختلف منتجاتها.
                            </p>
                        </div>
                    </div> --}}

                </div>
                <div class="d-flex justify-content-center">
                    <a class="mainBtn1" href="activities">عرض المزيد</a>
                </div>
            </div>
        </section>

        <x-arabicLetsConnect />

    </main>
</x-arabicLayout>
