<section class="watchVideoSection">
    <div class="customContainer  py-5">
        <div>

            <h2 class="text-center pb-4"><span class="fs5">Regarder la </span> <span class="fs6">vidéo</span>
            </h2>

            <a href="{{ asset('assets/video/video1.mp4') }}" data-fancybox="gallery" data-caption=""
                data-type="iframe" data-options=''>
                <img class="w-100" src="{{ asset('assets/images/banner/videoBanner1.png') }}"
                    alt="Thumbnail">
            </a>


            {{-- <video controls style="width: 100%;">
                    <source src="{{ asset('assets/video/video1.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video> --}}

        </div>
    </div>
</section>
