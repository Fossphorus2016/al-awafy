@php
    $crico = App\Models\Crico::where('language', 'french')->first();
@endphp
<x-frenchLayout>
    <main>

        <section class="heroSection secondBanner {{ $crico->banner_image ? '' : 'brandBanner' }}"
            @if ($crico->banner_image) style="background-image: url('{{ URL::asset('storage/' . $crico->banner_image) }}')" @endif>
            <div class="customContainer">
                <div class="heroSliderOuter">


                    <div class="heroSliderIcon">
                        <a class="icons fbLink" target="_blank" href=""> <i class="fa-brands fa-facebook-f"></i> </a>
                        <a class="icons instaLink" target="_blank" href=""> <i
                                class="fa-brands fa-instagram"></i></a>
                        <a class="icons whatsappLink" target="_blank" href=""><i
                                class="fa-brands fa-whatsapp"></i></a>
                    </div>

                    <div class="heroInner">
                        <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2">
                                {{ $crico->banner_h1 ?? '' }} </span>
                            <span class="fs3">{{ $crico->banner_h2 ?? '' }}</span>
                        </h1>

                    </div>
                </div>

            </div>
        </section>


        <section class="aboutSection py-5 mt-5">
            <div class="customContainer">
                <div class="row">
                    <div class=" col-12 d-flex align-item">
                        <div class="aboutInner paraFont text-center">
                            <h2><span class="fs5">{{ $crico->section1_h1 ?? '' }}</span> <span
                                    class="fs6">{{ $crico->section1_h2 ?? '' }}</span> </h2>
                            <p class="mb-5 w-100">
                                {!! $crico->section1_p ?? '' !!}
                            </p>

                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="aboutInnerImg">
                            <img class="patternImg" class="w-100" src="{{ asset('assets/images/shape/pattern1.png') }}"
                                alt="">

                        </div>
                    </div> --}}
                </div>
                <div class="aboutBanner2">
                    @if ($crico && $crico->section1_image)
                        <img class="w-100" src="{{ asset('storage/' . $crico->section1_image) }}" alt="">
                    @else
                        <img class="w-100" src="{{ asset('assets/images/items/bannerItem5.png') }}" alt="">
                    @endif
                </div>
            </div>
        </section>

        {{-- <section class="brandSection noNuts">
            <div class="brandOuter brandRed py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">Crico</span> <span class="fs8">ÉPICÉE</span> </h2>
                                <p class="text-white">
                                    Préparez-vous pour un coup audacieux ! Les cacahuètes enrobées <strong>ÉPICÉE
                                        Crico</strong> offrent
                                    une saveur
                                    intense avec la juste dose de piquant. Ces cacahuètes croustillantes sont idéales
                                    pour ceux qui
                                    aiment leurs collations avec une touche de piquant, parfaites pour ajouter de
                                    l'excitation à votre
                                    moment de grignotage.
                                </p>
                                <a href="contact-us" class="mainBtn1">
                                    Contactez nous
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                <img class="" src="{{ asset('assets/images/items/brandItem13.png') }}"
                                    alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandGreen py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                <img class="" src="{{ asset('assets/images/items/brandItem14.png') }}"
                                    alt="">
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">Crico</span> <span class="fs8">SEL</span> </h2>
                                <p class="text-white">
                                    Parfois, la simplicité est la meilleure. Les cacahuètes enrobées de <strong>Sel
                                        Crico</strong>
                                    offrent une délicieuse
                                    salinité classique avec juste ce qu'il faut de croquant. Cette saveur intemporelle
                                    est parfaite pour
                                    ceux qui apprécient une collation simple et sans chichis qui satisfait à chaque
                                    fois.
                                </p>
                                <a href="contact-us" class="mainBtn3">
                                    Contactez nous
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandBrown py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">Crico</span> <span class="fs8">BBQ</span> </h2>
                                <p class="text-white">
                                    Savourez le goût sucré et acidulé du barbecue sous forme de cacahuètes
                                    croustillantes. Les
                                    cacahuètes enrobées de <strong>BBQ Crico</strong> apportent les saveurs
                                    familières de la sauce
                                    barbecue
                                    fumée, ce qui en fait un excellent choix pour les pique-niques, les fêtes ou
                                    simplement pour les
                                    déguster à la maison.
                                </p>
                                <a href="contact-us" class="mainBtn1">
                                    Contactez nous
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                <img class="" src="{{ asset('assets/images/items/brandItem15.png') }}"
                                    alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandOrange py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                <img class="" src="{{ asset('assets/images/items/brandItem16.png') }}"
                                    alt="">
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">Crico</span> <span class="fs8">Pizza</span> </h2>
                                <p class="text-white">

                                </p>
                                <a href="contact-us" class="mainBtn3">
                                    Contactez nous
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandGold py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">Crico</span> <span class="fs8">Frommage</span> </h2>
                                <p class="text-white">

                                </p>
                                <a href="contact-us" class="mainBtn1">
                                    Contactez nous
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                <img class="" src="{{ asset('assets/images/items/brandItem17.png') }}"
                                    alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandPurple py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                <img class="" src="{{ asset('assets/images/items/brandItem23.png') }}"
                                    alt="">
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">Crico</span> <span class="fs8">Fumé</span> </h2>
                                <p class="text-white">
                                    Pour les amateurs de saveurs fumées, les cacahuètes enrobées de <strong>Fumé
                                        Crico</strong> sont la
                                    friandise
                                    parfaite. Avec un goût riche et fumé qui persiste, ces cacahuètes offrent une
                                    expérience de
                                    grignotage audacieuse et inoubliable, apportant de la profondeur à chaque bouchée.
                                </p>
                                <a href="contact-us" class="mainBtn3">
                                    Contactez nous
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="brandSection noNuts">
            <div class="brandOuter brandRed py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $crico->brand_1_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $crico->brand_1_h2 ?? '' }}</span> </h2>
                                <p class="text-white">

                                    {!! str_replace('&nbsp;', '', $crico->brand_1_p ?? '') !!}

                                </p>
                                <a href="{{ $crico->brand_1_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                @if ($crico && $crico->brand_1_image)
                                    <img class="" src="{{ asset('storage/' . $crico->brand_1_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem13.png') }}"
                                        alt="">
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandGreen py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">



                                @if ($crico && $crico->brand_2_image)
                                    <img class="" src="{{ asset('storage/' . $crico->brand_2_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem14.png') }}"
                                        alt="">
                                @endif
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $crico->brand_2_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $crico->brand_2_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! str_replace('&nbsp;', '', $crico->brand_2_p ?? '') !!}
                                </p>
                                <a href="{{ $crico->brand_2_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandBrown py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $crico->brand_3_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $crico->brand_3_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! str_replace('&nbsp;', '', $crico->brand_3_p ?? '') !!}
                                </p>
                                <a href="{{ $crico->brand_3_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                @if ($crico && $crico->brand_3_image)
                                    <img class="" src="{{ asset('storage/' . $crico->brand_3_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem15.png') }}"
                                        alt="">
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandOrange py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">

                                @if ($crico && $crico->brand_4_image)
                                    <img class="" src="{{ asset('storage/' . $crico->brand_4_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem16.png') }}"
                                        alt="">
                                @endif

                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $crico->brand_4_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $crico->brand_4_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! str_replace('&nbsp;', '', $crico->brand_4_p ?? '') !!}
                                </p>
                                <a href="{{ $crico->brand_4_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandGold py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $crico->brand_5_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $crico->brand_5_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! str_replace('&nbsp;', '', $crico->brand_5_p ?? '') !!}
                                </p>
                                <a href="{{ $crico->brand_5_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">


                                @if ($crico && $crico->brand_5_image)
                                    <img class="" src="{{ asset('storage/' . $crico->brand_5_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem17.png') }}"
                                        alt="">
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandPurple py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">


                                @if ($crico && $crico->brand_6_image)
                                    <img class="" src="{{ asset('storage/' . $crico->brand_6_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem23.png') }}"
                                        alt="">
                                @endif
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $crico->brand_6_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $crico->brand_6_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! str_replace('&nbsp;', '', $crico->brand_5_p ?? '') !!}
                                </p>
                                <a href="{{ $crico->brand_6_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <x-frenchletsConnect />

    </main>
</x-frenchLayout>
