@php
    $activity_page = App\Models\OurActivityPage::where('language', 'arabic')->first();
@endphp
<x-arabicLayout>
    <main>

        <section class="heroSection secondBanner {{ $activity_page->banner_image ? '' : 'activityBanner' }}"
            style="background-image: url('{{ $activity_page->banner_image ? URL::asset('storage/' . $activity_page->banner_image) : '' }}');">
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
                                {{ $activity_page->banner_h1 ?? '' }}
                            </span>
                            <span class="fs3"></span>
                        </h1>

                    </div>
                </div>

            </div>
        </section>

        {{-- <section class="activitySection mt-5">
            <div class="customContainer">
                <div>

                    <h2 class="text-center"><span class="fs5">d’exécution</span> <span class="fs6">Est</span>
                    </h2>


                    <div class="galleryblock activitiesSlider">
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image15.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image13.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image14.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image16.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image18.jpg') }}
                                alt=""></div>

                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image19.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image20.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image21.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image22.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image23.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionEst/image24.jpg') }}
                                alt=""></div>

                    </div>

                </div>
                <div>

                    <h2 class="text-center"><span class="fs5">d’exécution</span> <span class="fs6">Center</span>
                    </h2>


                    <div class="galleryblock activitiesSlider">
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionCenter/image6.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionCenter/image7.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionCenter/image8.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionCenter/image9.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionCenter/image10.jpg') }}
                                alt=""></div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionCenter/image11.jpg') }}
                                alt=""></div>

                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionCenter/image12.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionCenter/img2.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionCenter/img4.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionCenter/img6.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionCenter/img8.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/excecutionCenter/img10.jpg') }}
                                alt=""></div>
                    </div>


                </div>
                <div>

                    <h2 class="text-center"><span class="fs5">d’exécution</span> <span class="fs6">Quest</span>
                    </h2>


                    <div class="galleryblock activitiesSlider">
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image26.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image27.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image28.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image29.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image30.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image31.jpg') }} alt="">
                        </div>

                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image32.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image33.jpg') }} alt="">
                        </div>
                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image34.jpg') }} alt="">
                        </div>


                        <div class="item"><img
                                src={{ asset('assets/images/activities/excecutionQuest/image36.jpg') }}
                                alt=""></div>

                    </div>


                </div>
                <div>

                    <h2 class="text-center"><span class="fs5">Remise Des</span> <span
                            class="fs6">Cadeaux</span>
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

                    <h2 class="text-center"><span class="fs5">de l’opération  </span> <span
                            class="fs6">BTS</span>
                    </h2>


                    <div class="galleryblock activitiesSlider">
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/image7.jpeg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/image8.jpeg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/image9.jpeg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/image10.jpeg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/image17.jpg') }}
                                alt=""></div>

                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/image25.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/img1.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/img3.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/img5.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/img7.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/img9.jpg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/loperationBts/img11.jpeg') }}
                                alt=""></div>

                    </div>


                </div>
            </div>

        </section> --}}
        @php
            $activities = App\Models\OurActivity::where('language', 'arabic')->get();
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

                    <h2 class="text-center"><span class="fs5">    ﻋﯾد اﻷﺿﺣﻰ   </span> <span class="fs6">
                        ﯾوﻧﯾو -2024    </span>
                    </h2>
                    <p class="text-center">
                        بمناسبة عيد الأضحى 2024، نظمت العوافي فعالية تضمنت تذوق المنتجات وسحب جوائز (تومبولا)
                        للفوز بسكاكين حادة، بطاقات تعبئة، وأطقم سكاكين مكونة من 9 قطع كجوائز.
                    </p>

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


                </div>

                <div>

                    <h2 class="text-center"><span class="fs5">ﺗﺳﻠﯾم  </span> <span class="fs6">الهدايا</span>
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

                    <h2 class="text-center"><span class="fs5">سوق الفلاح </span> <span class="fs6">الجديد</span>
                    </h2>


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
                    <h2 class="text-center"><span class="fs5">مسابقة خاصة لكأس أفريقيا على </span> <span
                            class="fs6">مواقع التواصل الاجتماعي</span>
                    </h2>
                    <p class="text-center">
                        بمناسبة كأس إفريقيا 2023، أطلقت العوافي مسابقة عبر وسائل التواصل الاجتماعي، حيث تم تقديم
                        أجهزة تلفاز وهواتف ذكية كجوائز.
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
                    <h2 class="text-center"><span class="fs5">  واﻟﻣرﺷﻧداﯾز   </span> <span class="fs6">اﻟﻌروض اﻟﺗﺟﺎرﯾﺔ </span>
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
                        <div class="item"><img src={{ asset('assets/images/activities/merchandise/img10.jpeg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/merchandise/img11.jpeg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/merchandise/img12.jpeg') }}
                                alt=""></div>
                        <div class="item"><img src={{ asset('assets/images/activities/merchandise/img13.jpeg') }}
                                alt=""></div>
                    </div>
                </div> --}}
            </div>

        </section>


        <x-letsConnect />

    </main>
</x-arabicLayout>
