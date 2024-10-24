@php
    $alawafy = App\Models\Alawafy::where('language', 'french')->first();
@endphp
<x-frenchLayout>
    <main>
        <section class="heroSection secondBanner" style="background-image:({{URL::asset('storage/'.  $alawafy->banner_image)}})">
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
                                {{ $alawafy->banner_h1 ?? '' }} </span>
                            <span class="fs3">{{ $alawafy->banner_h2 ?? '' }}</span>
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
                            <h2><span class="fs5">{{ $alawafy->section1_h1 ?? '' }}</span> <span
                                    class="fs6">{{ $alawafy->section1_h2 ?? '' }}</span> </h2>
                            {!! $alawafy->section1_p ?? '' !!}

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
                    @if ($alawafy && $alawafy->section1_h1)
                        <img src="{{ asset('storage/' . $alawafy->section1_image) }}" alt="">
                    @else
                        <img src="{{ asset('assets/images/items/bannerItem4.png') }}" alt="">
                    @endif
                </div>
            </div>
        </section>

        <section class="brandSection">
            <div class="brandOuter brandBlue py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $alawafy->brand_1_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alawafy->brand_1_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alawafy->brand_1_p ?? '' !!}
                                </p>
                                <a href="{{ $alawafy->brand_1_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                @if ($alawafy && $alawafy->brand_1_image)
                                    <img class="" src="{{ asset('storage/' . $alawafy->brand_1_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem5.png') }}"
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
                                @if ($alawafy && $alawafy->brand_2_image)
                                    <img class="" src="{{ asset('storage/' . $alawafy->brand_2_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem6.png') }}"
                                        alt="">
                                @endif

                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $alawafy->brand_2_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alawafy->brand_2_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alawafy->brand_2_p ?? '' !!}
                                </p>
                                <a href="{{ $alawafy->brand_2_url ?? '' }}" class="mainBtn1">
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
                                <h2><span class="fs7">{{ $alawafy->brand_3_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alawafy->brand_3_h2 ?? '' }}</span> </h2>

                                <p class="text-white">
                                    {!! $alawafy->brand_3_p ?? '' !!}
                                </p>
                                <a href="{{ $alawafy->brand_3_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>

                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">

                                @if ($alawafy && $alawafy->brand_3_image)
                                    <img class="" src="{{ asset('storage/' . $alawafy->brand_3_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem7.png') }}"
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
                                @if ($alawafy && $alawafy->brand_4_image)
                                    <img class="" src="{{ asset('storage/' . $alawafy->brand_4_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem8.png') }}"
                                        alt="">
                                @endif
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $alawafy->brand_4_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alawafy->brand_4_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alawafy->brand_4_p ?? '' !!}
                                </p>
                                <a href="{{ $alawafy->brand_4_url ?? '' }}" class="mainBtn1">
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
                                <h2><span class="fs7">{{ $alawafy->brand_5_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alawafy->brand_5_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alawafy->brand_5_p ?? '' !!}
                                </p>
                                <a href="{{ $alawafy->brand_5_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">
                                @if ($alawafy && $alawafy->brand_5_image)
                                    <img class="" src="{{ asset('storage/' . $alawafy->brand_5_image) }}"
                                        alt="">
                                @else
                                    <img class="" style=""
                                        src="{{ asset('assets/images/items/brandItem11.png') }}" alt="">
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="brandOuter brandRed py-5">

                <div class="customContainer">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">


                                @if ($alawafy && $alawafy->brand_6_image)
                                    <img class="" src="{{ asset('storage/' . $alawafy->brand_6_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem10.png') }}"
                                        alt="">
                                @endif
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 ">
                            <div class="brandInner paraFont ">
                                <h2><span class="fs7">{{ $alawafy->brand_6_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alawafy->brand_6_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alawafy->brand_6_p ?? '' !!}
                                </p>
                                <a href="{{ $alawafy->brand_6_url ?? '' }}" class="mainBtn1">
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
                                <h2><span class="fs7">{{ $alawafy->brand_7_h1 ?? '' }}</span> <span
                                        class="fs8">{{ $alawafy->brand_7_h2 ?? '' }}</span> </h2>
                                <p class="text-white">
                                    {!! $alawafy->brand_7_p ?? '' !!}
                                </p>
                                <a href="{{ $alawafy->brand_7_url ?? '' }}" class="mainBtn1">
                                    Contact us
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="brandInner brandInnerTwo">


                                @if ($alawafy && $alawafy->brand_7_image)
                                    <img class="" src="{{ asset('storage/' . $alawafy->brand_7_image) }}"
                                        alt="">
                                @else
                                    <img class="" src="{{ asset('assets/images/items/brandItem12.png') }}"
                                        alt="">
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <x-frenchletsConnect />

    </main>
</x-frenchLayout>
