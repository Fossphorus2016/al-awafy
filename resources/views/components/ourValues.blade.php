@php
    $home_english = App\Models\Home::where('language', 'english')->first();
@endphp
<section {{ $attributes->merge(['class' => 'valueSection curvedLayer']) }}>
    <div class="customContainer">
        <div class="valueSectionInner">

            <h2><span class="fs7">{{ $home_english->our_value_h1 ?? '' }}</span> <span
                    class="fs8">{{ $home_english->our_value_h2 ?? '' }}</span> </h2>
            <div class="row gy-5">
                <div class="col-lg-4 col-12">
                    <div class="singleValue">
                        @if ($home_english && $home_english->our_value_1_image)
                            <img src="{{ asset('storage/' . $home_english->our_value_1_image) }}" alt="">
                        @endif

                        <p class="fs9">{{$home_english->our_value_1 ?? ''}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="singleValue">
                        <img src="{{ asset('assets/images/shape/roasted.png') }}" alt="">
                        <p class="fs9">{{$home_english->our_value_2 ?? ''}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="singleValue">
                        <img src="{{ asset('assets/images/shape/natural.png') }}" alt="">
                        <p class="fs9">{{$home_english->our_value_3 ?? ''}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
