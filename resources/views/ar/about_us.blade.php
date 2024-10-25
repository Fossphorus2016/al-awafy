@php
    $about = App\Models\About::where('language', 'arabic')->first();
@endphp

<x-arabicLayout>
    <main>
        <section class="heroSection secondBanner {{ $about->sec1_image ? '' : 'aboutBanner' }}"
            @if ($about->sec1_image) style="background-image: url('{{ URL::asset('storage/' . $about->sec1_image) }}')" @endif>

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
                <div class="row flex-row-reverse text-end">
                    <div class="col-lg-6 col-12 d-flex align-item">
                        <div class="aboutInner paraFont justify-content-start">
                            <h2><span class="fs5">{{ $about->sec2_h1 ?? '' }} </span> <span
                                    class="fs6">{{ $about->sec2_h2 ?? '' }} </span> </h2>
                            {!! $about->sec2_p1 ?? '' !!}

                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="aboutInnerImg">

                            @if ($about && $about->sec2_image)
                                <img src="{{ asset('storage/' . $about->sec2_image) }}" alt="" class="w-100">
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
                    {{-- <div
                        class="col-12 paraFont mt-4 aboutThirdPara aboutThirdPara col-12 d-flex justify-content-end mt-4 paraFont">
                        <p>ﻧﺣن ﻓﻲ اﻟﻌواﻓﻲ ﻧﺧﺗﺎر ﺑﻌﻧﺎﯾﺔ أﻓﺿل اﻟﻣﻛﺳرات واﻟﻔول اﻟﺳوداﻧﻲ ﻣن ﻣﺻﺎدر ﻣوﺛوﻗﺔ ﻟﻧﻘدم ﻟﻛم ﻣﻧﺗﺟﺎت
                            ﻣﺛﺎﻟﯾﺔ ﻟﻼﺳﺗﻣﺗﺎع ﻓﻲ ﻛل
                            ﻟﺣظﺔ.
                        </p>
                    </div> --}}

                    <div class="col-12  mt-4 paraFont inlineContent arabicStyle listStyles">
                        {!! $about->sec2_p2 ?? '' !!}
                    </div>
                </div>
            </div>
        </section>

        <x-arabicOurValues class="secondValues" />

        <section class="ourVision">
            <div class="customContainer">
                <div class="ourVisionInner  arabicOurVis py-5">
                    <div class="paraFont ">

                        <div class="missionBtn1 my-5">
                            <h2><span class="fs7"> </span> <span class="fs8"> {{ $about->sec3_h1 ?? '' }}</span>
                            </h2>
                        </div>
                        <div class="inlineContent ">

                            {!! $about->sec3_p1 ?? '' !!}


                        </div>


                    </div>
                    <div class="ourVisionCont paraFont">

                        <div class="missionBtn1 my-5" style="padding-right: 100px;">
                            <h2><span class="fs7"> </span> <span class="fs8">{{ $about->sec3_h3 ?? '' }}</span>
                            </h2>
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

        <x-arabicWatchVideo />

        <x-arabicLetsConnect />

    </main>
</x-arabicLayout>
