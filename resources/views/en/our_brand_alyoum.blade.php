@php
    $alyoum = App\Models\Alyoum::where('language', 'english')->first();
@endphp
<x-layout>
    <main>
        <section class="heroSection secondBanner" style="background-image:({{URL::asset('storage/'. $alyoum->banner_image)}})">
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
                                {{ $alyoum->banner_h1 ?? '' }} </span>
                            <span class="fs3"> {{ $alyoum->banner_h2 ?? '' }}</span>
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
                            <h2><span class="fs5">{{ $alyoum->section1_h1 ?? '' }}</span> <span
                                    class="fs6">{{ $alyoum->section1_h2 ?? '' }}</span> </h2>

                            {!! $alyoum->section1_p ?? '' !!}


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
                    @if ($alyoum && $alyoum->section1_image)
                        <img src="{{ asset('storage/' . $alyoum->section1_image) }}" alt="">
                    @else
                        <img src="{{ asset('assets/images/items/bannerItem6.png') }}" alt="">
                    @endif
                </div>
            </div>
        </section>

        <section class="brandSection brandSection1">
            <div class="brandOuter brandBlue py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $alyoum->brand_1_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alyoum->brand_1_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alyoum->brand_1_p ?? '' !!}
                                </p>
                                <a href="{{ $alyoum->brand_1_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                @if ($alyoum && $alyoum->brand_1_image)
                                    <img class="" src="{{ asset('storage/' . $alyoum->brand_1_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem18.png') }}"
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

                                @if ($alyoum && $alyoum->brand_2_image)
                                    <img class="" src="{{ asset('storage/' . $alyoum->brand_2_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem24.png') }}"
                                        alt="">
                                @endif

                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $alyoum->brand_2_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alyoum->brand_2_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alyoum->brand_2_p ?? '' !!}
                                </p>
                                <a href="{{ $alyoum->brand_2_url ?? '' }}" class="mainBtn1">
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

                            <div class="brandInner paraFont text-white">
                                <h2><span class="fs7">{{ $alyoum->brand_3_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alyoum->brand_3_h2 ?? '' }}</span> </h2>
                                {{-- <p class="text-white"> --}}
                                    {!! $alyoum->brand_3_p ?? '' !!}
                                {{-- </p> --}}
                                <a href="{{ $alyoum->brand_3_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>

                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                @if ($alyoum && $alyoum->brand_3_image)
                                    <img class="" src="{{ asset('storage/' . $alyoum->brand_3_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem20.png') }}"
                                        alt="">
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandGold py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                @if ($alyoum && $alyoum->brand_4_image)
                                    <img class="" style=""
                                        src="{{ asset('storage/' . $alyoum->brand_4_image) }}" alt="">
                                @else
                                    <img class="" style=""
                                        src="{{ asset('assets/images/items/brandItem21.png') }}" alt="">
                                @endif
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $alyoum->brand_4_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alyoum->brand_4_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alyoum->brand_4_p ?? '' !!}
                                </p>
                                <a href="{{ $alyoum->brand_4_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandRed py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $alyoum->brand_5_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alyoum->brand_5_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alyoum->brand_5_p ?? '' !!}
                                </p>
                                <a href="{{ $alyoum->brand_5_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                @if ($alyoum && $alyoum->brand_5_image)
                                    <img class="" src="{{ asset('storage/' . $alyoum->brand_5_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem22.png') }}"
                                        alt="">
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>


        <x-letsConnect />

    </main>
</x-layout>
