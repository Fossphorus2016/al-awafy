@php
    $activity_page = App\Models\OurActivityPage::where('language', 'french')->first();
@endphp

<x-frenchLayout>
    <main>
        <section class="heroSection secondBanner {{ isset($activity_page->banner_image) ? '' : 'activityBanner' }}"
            @if (isset($activity_page->banner_image)) style="background-image: url('{{ URL::asset('storage/' . $activity_page->banner_image) }}')" @endif>

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
                                {{ $activity_page->banner_h1 ?? '' }} </span>
                            <span class="fs3">{{ $activity_page->banner_h2 ?? '' }}</span>
                        </h1>

                    </div>
                </div>

            </div>
        </section>


        <section class="activitySection mt-5">
            <div class="customContainer">
                @php
                    $activities = App\Models\OurActivity::where('language', 'french')->get();
                @endphp
                <section class="activitySection mt-5">
                    <div class="customContainer">
                        @forelse ($activities as $activity)
                            <div>
                                <h2 class="text-center">
                                    <span class="fs5">{{ $activity->heading_1 ?? '' }}</span>
                                    <span class="fs6">{{ $activity->heading_2 ?? '' }}</span>
                                </h2>
                                <p class="text-center">{{ $activity->paragraph ?? '' }}</p>

                                <div class="galleryblock activitiesSlider">
                                    @if (isset($activity->images))
                                        @php
                                            $images = json_decode($activity->images);
                                        @endphp

                                        @foreach ($images as $image)
                                            <div class="item">
                                                <img src="{{ asset($image->url) }}" alt="{{ $image->name ?? 'Image' }}">
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No images available.</p>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <p>No activities found.</p>
                        @endforelse

                        {{-- <div>

                    <h2 class="text-center"><span class="fs5">Al Adha activation assistance </span> <span
                            class="fs6">
                            assistance</span>
                    </h2>
                    <p class="text-center">An activation on the occasion of Aid Al Adha (tasting + raffle) of sharpeners
                        hillsides
                        recharge cards and 9pcs hills as gifts</p>

                    <div class="galleryblock activitiesSlider">
                        <div class="item"><img src={{ asset('assets/images/activities/aid_azah/eid_img0.jpeg') }}
                                alt="">
                        </div>
                        <div class="item"><img src={{ asset('assets/images/activities/aid_azah/eid_img1.jpeg') }}
                                alt="">
                        </div>
                        <div class="item"><img src={{ asset('assets/images/activities/aid_azah/eid_img2.jpg') }}
                                alt="">
                        </div>
                        <div class="item"><img src={{ asset('assets/images/activities/aid_azah/eid_img3.jpg') }}
                                alt="">
                        </div>
                        <div class="item"><img src={{ asset('assets/images/activities/aid_azah/eid_img4.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/aid_azah/eid_img5.jpg') }}
                                alt=""></div>

                        <div class="item"><img src={{ asset('assets/images/activities/aid_azah/eid_img6.jpg') }}
                                alt=""></div>

                    </div>


                    <div>

                        <h2 class="text-center"><span class="fs5">Presentation of </span> <span
                                class="fs6">Gifts</span>
                        </h2>


                        <div class="galleryblock activitiesSlider">
                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image37.jpg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image38.jpg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image39.jpg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image40.jpg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image41.jpg') }}
                                    alt=""></div>

                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image42.jpg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image43.jpg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image44.jpg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image45.jpg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/remisDes/image46.jpg') }}
                                    alt=""></div>

                        </div>


                    </div>
                    <div>

                        <h2 class="text-center"><span class="fs5">Souk el Fellah </span> <span
                                class="fs6">AL-jadid</span>
                        </h2>

                        <p class="text-center">Presence of the ALAWAFY brand at SOUK EL FELLAH Organized by the Souk
                            el-Fellah institute
                            Al-Jadid, in coordination with the Office of Sports and Leisure Parks of Algiers
                            (Opla) and the Chamber of Crafts and Trades, this event aims to
                            to make known and promote the national artisanal product. It brings together around 60
                            Algerian and foreign companies representing Tunisia, Senegal, China,
                            Türkiye and France came to exhibit their various products.
                        </p>
                        <div class="galleryblock activitiesSlider">
                            <div class="item"><img src={{ asset('assets/images/activities/al_jadid/image22.jpg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/al_jadid/image20.png') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/al_jadid/image21.png') }}
                                    alt=""></div>


                        </div>


                    </div>

                    <div>
                        <h2 class="text-center"><span class="fs5">
                                Special African Cup </span> <span class="fs6">social media competition</span>
                        </h2>
                        <p>
                            On the occasion of the 2023 African Cup, Alawafy launched a competition on the networks
                            social networks, televisions and smart phones as gains
                        </p>
                        <div class="galleryblock activitiesSlider">
                            <div class="item"><img
                                    src={{ asset('assets/images/activities/special_african_cup/img1.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img
                                    src={{ asset('assets/images/activities/special_african_cup/img2.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img
                                    src={{ asset('assets/images/activities/special_african_cup/img3.jpeg') }}
                                    alt=""></div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-center"><span class="fs5">DISPLAYS AND
                            </span> <span class="fs6">MERCHANDISING</span>
                        </h2>

                        <div class="galleryblock activitiesSlider">
                            <div class="item"><img src={{ asset('assets/images/activities/merchandise/img1.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/merchandise/img2.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/merchandise/img3.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/merchandise/img4.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/merchandise/img5.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/merchandise/img6.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/merchandise/img7.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/merchandise/img8.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img src={{ asset('assets/images/activities/merchandise/img9.jpeg') }}
                                    alt=""></div>
                            <div class="item"><img
                                    src={{ asset('assets/images/activities/merchandise/img10.jpeg') }} alt="">
                            </div>
                            <div class="item"><img
                                    src={{ asset('assets/images/activities/merchandise/img11.jpeg') }} alt="">
                            </div>
                            <div class="item"><img
                                    src={{ asset('assets/images/activities/merchandise/img12.jpeg') }} alt="">
                            </div>
                            <div class="item"><img
                                    src={{ asset('assets/images/activities/merchandise/img13.jpeg') }} alt="">
                            </div>
                        </div>
                    </div>
                </div> --}}

                    </div>

            </div>

        </section>


        <x-frenchletsConnect />

    </main>
</x-frenchLayout>
