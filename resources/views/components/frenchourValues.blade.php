@php
    $french = App\Models\Home::where('language', 'french')->first();
@endphp

<section {{ $attributes->merge(['class' => 'valueSection curvedLayer']) }}>
    <div class="customContainer">
        <div class="valueSectionInner">

            <h2><span class="fs7">{{ $french->our_value_h1 ?? '' }} </span> <span
                    class="fs8">{{ $french->our_value_h2 ?? '' }}</span> </h2>
            <div class="row gy-5">
                <div class="col-lg-4 col-12">
                    <div class="singleValue">
                        @if ($french && $french->our_value_1_image)
                            <img src="{{ asset('storage/' . $french->our_value_1_image) }}" alt="">
                        @else
                            <img src="{{ asset('assets/images/shape/premiumQuality.png') }}" alt="">
                        @endif
                        <p class="fs9">{{ $french->our_value_1 ?? ''}} </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="singleValue">
                        @if ($french && $french->our_value_2_image)
                            <img src="{{ asset('storage/' . $french->our_value_2_image) }}" alt="">
                        @else
                        <img src="{{ asset('assets/images/shape/roasted.png') }}" alt="">
                        @endif
                        <p class="fs9">{{ $french->our_value_2 ?? '' }} </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="singleValue">
                        @if ($french && $french->our_value_3_image)
                            <img src="{{ asset('storage/' . $french->our_value_3_image) }}" alt="">
                        @else
                        <img src="{{ asset('assets/images/shape/natural.png') }}" alt="">

                        @endif
                        <p class="fs9">{{ $french->our_value_3 ?? ''}} </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
