@php
    $about = App\Models\About::where('language', 'english')->first();
@endphp

<x-layout>
    <main>
        <section class="heroSection secondBanner {{ $about->sec1_image ? '' : 'aboutBanner' }}"
            style="background-image: url('{{ $about->sec1_image ? URL::asset('storage/' . $about->sec1_image) : '' }}');">

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
                        <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2"> {{ $about->sec1_h1 ?? '' }}
                            </span>
                            <span class="fs3">{{ $about->sec1_h2 ?? '' }}</span>
                        </h1>

                    </div>
                </div>

            </div>
        </section>

        <section class="aboutSection py-5 my-5">
            <div class="customContainer">
                <div class="row">
                    <div class="col-lg-6 col-12 d-flex align-item">
                        <div class="aboutInner paraFont">
                            <h2><span class="fs5">{{ $about->sec2_h1 ?? '' }}</span> <span
                                    class="fs6">{{ $about->sec2_h2 ?? '' }}</span> </h2>
                            {!! $about->sec2_p1 ?? '' !!}

                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="aboutInnerImg">

                            @if ($about && $about->sec2_image)
                            <img src="{{asset('storage/'.$about->sec2_image)}}" alt="" class="w-100">
                                @else
                                <img class="patternImg" class="w-100"
                                src="{{ asset('assets/images/shape/pattern12.png') }}" alt="">
                            <img class="abouteItem aboutItem1" class="w-100"
                                src="{{ asset('assets/images/items/item1.png') }}" alt="">
                            <img class="abouteItem aboutItem2" class="w-100"
                                src="{{ asset('assets/images/items/item2.png') }}" alt="">
                            <img class="abouteItem aboutItem3" class="w-100"
                                src="{{ asset('assets/images/items/item3.png') }}" alt="">
                            <img class="abouteItem aboutItem4" class="w-100"
                                src="{{ asset('assets/images/items/item4.png') }}" alt="">
                            <img class="nutsImg" class="w-100" src="{{ asset('assets/images/items/nuts.png') }}"
                                alt="">
                            @endif

                        </div>
                    </div>
                    <div class="col-12 paraFont mt-4 aboutThirdPara">
                        {!! $about->sec2_p2 ?? '' !!}
                    </div>

                    <div class="col-12  mt-4 paraFont inlineContent listStyles">
                        {!! $about->sec2_p3 ?? '' !!}
                    </div>
                </div>
            </div>
        </section>

        <x-ourValues class="secondValues" />

        <section class="ourVision">
            <div class="customContainer">
                <div class="ourVisionInner py-5">
                    <div class="paraFont ">

                        <div class="missionBtn1 my-5">
                            <h2><span class="fs7">{{ $about->sec3_h1 ?? '' }}</span> <span
                                    class="fs8">{{ $about->sec3_h2 ?? '' }}</span> </h2>
                        </div>
                        <div class="inlineContent listStyles">

                            {!! $about->sec3_p1 ?? '' !!}
                        </div>


                    </div>
                    <div class="ourVisionCont paraFont">

                        <div class="missionBtn1 my-5" style="padding-right: 100px;">
                            <h2><span class="fs7">{{ $about->sec3_h3 ?? '' }} </span> <span
                                    class="fs8">{{ $about->sec3_h4 ?? '' }}</span> </h2>
                        </div>
                        {!! $about->sec3_p2 ?? '' !!}

                    </div>

                    <div class="d-flex justify-content-center ourVisionPeanuts">

                        @if ($about && $about->sec3_image)
                            <img class="img-fluid w-100"
                                style="object-fit: contain; object-fit: contain; max-width: 600px !important;"
                                src="{{ asset('storage/' . $about->sec3_image) }}" alt="">
                        @else
                            <img class="img-fluid w-100"
                                style="object-fit: contain; object-fit: contain; max-width: 600px !important;"
                                src="{{ asset('assets/images/items/peanuts.png') }}" alt="">
                        @endif
                    </div>

                </div>
        </section>

        <x-watchVideo />

        <x-letsConnect />

    </main>
</x-layout>
