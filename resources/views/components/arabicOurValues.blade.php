@php
    $home_arabic = App\Models\Home::where('language', 'arabic')->first();
@endphp

<section {{ $attributes->merge(['class' => 'valueSection curvedLayer']) }}>
    <div class="customContainer">
        <div class="valueSectionInner">

            <h2><span class="fs7">{{ $home_arabic->our_value_h1 ?? '' }}</span> <span
                class="fs8"></span> </h2>
            <div class="row gy-5">
                <div class="col-lg-4 col-12">
                    <div class="singleValue">
                        <img src="{{ asset('assets/images/shape/premiumQuality.png') }}" alt="">
                        <p class="fs9">جودة <br> ممتازة</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="singleValue">
                        <img src="{{ asset('assets/images/shape/roasted.png') }}" alt="">
                        <p class="fs9">محمّص

                            <br>
                            تقليديا
                            </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="singleValue">
                        <img src="{{ asset('assets/images/shape/natural.png') }}" alt="">
                        <p class="fs9">كل شيء <br> طبيعي</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
