<x-frenchLayout>
    <main>
        <section class="heroSection secondBanner aboutBanner">
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
                        <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2"> About </span>
                            <span class="fs3">Us</span>
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
                            <h2><span class="fs5">About</span> <span class="fs6">Alawafy</span> </h2>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste sit laboriosam
                                reprehenderit numquam fugiat itaque amet eius laudantium repellat necessitatibus,
                                similique aspernatur dicta recusandae nulla, soluta sapiente error voluptatibus ex,
                                debitis odio? Laboriosam quas ratione ut deserunt nostrum, quasi amet.
                            </p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam delectus natus dolores
                                obcaecati iure harum itaque officia ratione. Recusandae sunt quaerat reprehenderit eaque
                                placeat numquam reiciendis, unde, aut necessitatibus enim sint debitis totam deleniti
                                praesentium minus iste mollitia, veniam rem delectus? Facilis nesciunt labore error!</p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="aboutInnerImg">
                            <img class="patternImg" class="w-100" src="{{ asset('assets/images/shape/pattern12.png') }}"
                                alt="">
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
                        </div>
                    </div>
                    <div class="col-12 paraFont mt-4 aboutThirdPara">
                        <p>Our motto in Al Awafy is “the food that bestows your beautiful moments.” Therefore, Al Awafy
                            strives to satisfy all tastes by presenting what suits your day, while observing the rules
                            of proper and proper nutrition to be a companion of distinctive details and all happy times.
                            We also strive at Al Awafy to constantly develop and diversify our products to be a
                            diversified source of essential nutrients necessary to maintain health and wellness. In
                            short, our aim at Al Awafy is to deliver the best healthy</p>
                    </div>
                </div>
            </div>
        </section>

        <x-ourValues class="secondValues" />

        <section class="ourVision">
            <div class="customContainer">
                <div class="ourVisionInner py-5">
                    <div class="paraFont">

                        <div class="missionBtn1 my-5">
                            <h2><span class="fs7">Our</span> <span class="fs8">Mission</span> </h2>
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
                            distinctio beatae nobis cupiditate temporibus mollitia, quia, sed neque veniam reiciendis
                            animi autem cumque exercitationem natus.
                        </p>

                    </div>
                    <div class="ourVisionCont paraFont">

                        <div class="missionBtn1 my-5" style="padding-right: 100px;">
                            <h2><span class="fs7">Our</span> <span class="fs8">Vision</span> </h2>
                        </div>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions
                            of
                            Lorem Ipsum.
                        </p>
                    </div>

                    <div class="d-flex justify-content-center ourVisionPeanuts">

                        <img class="img-fluid w-100"
                        style="object-fit: contain;     object-fit: contain;
                        max-width: 600px !important;"
                        src="{{ asset('assets/images/items/peanuts.png') }}" alt="">
                    </div>

                </div>
        </section>

        <x-watchVideo />

        <x-letsConnect/>

    </main>
</x-frenchLayout>
