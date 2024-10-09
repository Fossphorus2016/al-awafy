<x-frenchLayout>
    <main>
        <section class="heroSection ">
            <div class="customContainer">
                <div class="heroSliderOuter">


                    <div class="heroSliderIcon">
                        <a class="icons fbLink" target="_blank" href=""> <i class="fa-brands fa-facebook-f"></i> </a>
                        <a class="icons instaLink" target="_blank" href=""> <i
                                class="fa-brands fa-instagram"></i></a>
                        <a class="icons whatsappLink" target="_blank" href=""><i
                                class="fa-brands fa-whatsapp"></i></a>
                    </div>

                    <div class="heroSlider">

                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2"> Bienvenue chez Alawafy
                                </span>
                                <span class="fs3">Le Cœur des Fruits Secs de Qualité </span>
                            </h1>
                            <p class="fs4">
                                Que vous cherchiez une collation saine, une gourmandise savoureuse ou des options en
                                gros pour
                                <br>
                                votre entreprise, Alawafy a quelque chose pour chacun.
                            </p>
                            <img class="w-100" src="{{ asset('assets/images/items/bannerItem.png') }}" alt="">
                        </div>
                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2"> Bienvenue chez Circo
                                </span>
                                <span class="fs3">Le Cœur des Fruits Secs de Qualité </span>
                            </h1>
                            <p class="fs4">
                                Que vous cherchiez une collation saine, une gourmandise savoureuse ou des options en
                                gros pour

                                <br>
                                votre entreprise, Circo a quelque chose pour chacun.
                            </p>
                            <img class="w-100" src="{{ asset('assets/images/items/bannerItem2.png') }}" alt="">
                        </div>
                        <div class="heroInner">
                            <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2"> Bienvenue chez Alyoum
                                </span>
                                <span class="fs3">Le Cœur des Fruits Secs de Qualité </span>
                            </h1>
                            <p class="fs4">
                                Que vous cherchiez une collation saine, une gourmandise savoureuse ou des options en
                                gros pour

                                <br>
                                votre entreprise, Alyoum a quelque chose pour chacun.
                            </p>
                            <img class="w-100" src="{{ asset('assets/images/items/bannerItem3.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="aboutSection py-5 mt-5">
            <div class="customContainer">
                <div class="row gy-4">
                    <div class="col-lg-6 col-12 d-flex align-item">
                        <div class="aboutInner paraFont">
                            <h2><span class="fs5">A Propos </span> <span class="fs6">d’Alawafy</span> </h2>
                            <h3 class="fs13 mb-3">Des Moments de Plaisir en Famille avec ALAWAFY</h3>
                            <p>
                                Avec notre marque de nuts ALAWAFY, chaque bouchée de nos fruits secs devient une
                                invitation à partager des moments de plaisir et de joie en famille. Nous croyons que la
                                convivialité autour de la table est essentielle, et nos produits, soigneusement
                                sélectionnés, sont parfaits pour accompagner vos rassemblements. Que ce soit pour un
                                apéritif, un goûter ou un moment de détente, ALAWAFY apporte une touche de douceur et de
                                santé, transformant chaque instant en un souvenir mémorable. Savourez ensemble la
                                qualité et le goût authentique de nos noix et fruits secs !
                            </p>

                            <a class="mainBtn1" href="about">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="aboutInnerImg">
                            <img class="patternImg" class="w-100" src="{{ asset('assets/images/shape/pattern1.png') }}"
                                alt="">
                            {{-- <img class="abouteItem aboutItem1" class="w-100"
                                src="{{ asset('assets/images/items/item1.png') }}" alt="">
                            <img class="abouteItem aboutItem2" class="w-100"
                                src="{{ asset('assets/images/items/item2.png') }}" alt="">
                            <img class="abouteItem aboutItem3" class="w-100"
                                src="{{ asset('assets/images/items/item3.png') }}" alt="">
                            <img class="abouteItem aboutItem4" class="w-100"
                                src="{{ asset('assets/images/items/item4.png') }}" alt="">
                            <img class="nutsImg" class="w-100"
                                src="{{ asset('assets/images/items/nuts.png') }}" alt=""> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="valueSection curvedLayer">
            <div class="customContainer">
                <div class="valueSectionInner">

                    <h2><span class="fs7">Our</span> <span class="fs8">Values</span> </h2>
                    <div class="row gy-5">
                        <div class="col-lg-4 col-12">
                            <div class="singleValue">
                                <img src="{{ asset('assets/images/shape/premiumQuality.png') }}" alt="">
                                <p class="fs9">Premium <br> Quality</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="singleValue">
                                <img src="{{ asset('assets/images/shape/roasted.png') }}" alt="">
                                <p class="fs9">Traditionally <br> Roasted</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="singleValue">
                                <img src="{{ asset('assets/images/shape/natural.png') }}" alt="">
                                <p class="fs9">All <br> Natural</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
        <x-frenchourValues />


        <section class="ourBrands py-5">
            <div class="customContainer">
                <div>
                    <h2 class="text-center pb-4"><span class="fs5">Nos </span> <span class="fs6">marques</span>
                    </h2>

                    {{-- <div class="row showRow1 gy-4">
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem1.png') }}"
                                        alt="">
                                    <img class="py-3" src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a class="mainBtn1" href="brand-alawafy">VIEW BRAND PRODUCTS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem2.png') }}"
                                        alt="">
                                    <img class="py-3" src="{{ asset('assets/images/logo/logo2.png') }}"
                                        alt="">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a class="mainBtn1" href="brand-crico">VIEW BRAND PRODUCTS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem4.png') }}"
                                        alt="">
                                    <img style="width: 145px;object-fit: contain;" class="pb-2"
                                        src="{{ asset('assets/images/logo/alyoum.png') }}" alt="">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a class="mainBtn1" href="brand-alyoum">VIEW BRAND PRODUCTS</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row showRow2 gy-4">
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="pb-3" src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                                    <img class="pb-3 w-100" src="{{ asset('assets/images/items/brandItem1.png') }}"
                                        alt="">
                                    <p>Des noix de qualité premium, soigneusement sélectionnées et grillées à la perfection. Des noix de
                                        cajou aux amandes, Alawafy propose une collation saine et délicieuse pour chaque occasion.</p>
                                    <a href="brand-alawafy" class="mainBtn1">Voir les produits de la marque.</a
                                        href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="pb-3" src="{{ asset('assets/images/logo/logo2.png') }}"
                                        alt="">
                                    <img class="pb-3 w-100" class="py-3"
                                        src="{{ asset('assets/images/items/brandItem2.png') }}" alt="">
                                    <p>Un twist amusant sur les cacahuètes avec des saveurs audacieuses comme épicé, fromage et
                                        barbecue. Crico offre des snacks croquants et pleins de saveurs à un rapport qualité-prix imbattable.</p>
                                    <a href="brand-crico" class="mainBtn1">Voir les produits de la marque.</a href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4 pt-2">
                                    <img style="width: 145px;object-fit: contain;" class="pb-2"
                                        src="{{ asset('assets/images/logo/alyoum.png') }}" alt="">

                                    <img class="pb-3 w-100" class="py-3"
                                        src="{{ asset('assets/images/items/brandItem4.png') }}" alt="">
                                    <p>Dédiée au marché de gros, Alyoum propose des noix de haute qualité en vrac, garantissant fraîcheur
                                        et saveur pour les entreprises et les besoins à grande échelle.</p>
                                    <a href="brand-alyoum" class="mainBtn1">Voir les produits de la marque.</a
                                        href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row showRow3 gy-4">
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem1.png') }}"
                                        alt="">
                                    <label class="fs10 py-2">Alawafy</label>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a href="brand-alawafy" class="mainBtn1">VIEW BRAND PRODUCTS</a href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem2.png') }}"
                                        alt="">
                                    <label class="fs10 py-2">Crico</label>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a href="brand-crico" class="mainBtn1">VIEW BRAND PRODUCTS</a href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 brandCardOuter col-12">

                            <div class="brandCard card">
                                <div class="card-body paraFont py-4">
                                    <img class="w-100" src="{{ asset('assets/images/items/brandItem4.png') }}"
                                        alt="">
                                    <label class="fs10 py-2">Alyoum</label>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima corporis facilis
                                        magnam, quae odio consequatur Natus sunt.</p>
                                    <a href="brand-alyoum" class="mainBtn1">VIEW BRAND PRODUCTS</a href="brand-alawafy">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="d-flex justify-content-center pt-4" style="gap: 10px">

                        <button
                            style="  height: 25px;
                            width: 25px;
                            background-color: #50A702;
                            border:none;
                            color:white;
                            border-radius: 50%;
                            display: inline-block;"
                            class="showBtn1"> 1</button>
                        <button
                            style="  height: 25px;
                            width: 25px;
                            color:white;
                            border:none;
                            background-color: #50A702;
                            border-radius: 50%;
                            display: inline-block;"
                            class="showBtn2"> 2</button>
                        <button
                            style="  height: 25px;
                            width: 25px;
                            border:none;
                            color:white;
                            background-color: #50A702;
                            border-radius: 50%;
                            display: inline-block;"
                            class="showBtn3"> 3</button>
                    </div> --}}
                </div>
            </div>
        </section>

        <x-frenchwatchVideo />


        <section class="tasteNuts curvedLayer">
            <div class="customContainer">
                <div class="tasteNutsInner">
                    <h2 class="waterDropsBefore"> <span class="fs7"> Profitez des meilleures , </span></h2>
                    <h2 class=""> <span class="fs7"> noix</span> <span
                            class="fs8 waterDropsAfter ms-0">riches en saveurs et en nutriments</span> </h2>
                    <div class="pt-3 d-flex"><a class="mainBtn1 me-3 position-relative z-1" href="about">LEARN
                            MORE</a>
                        <a class="mainBtn2 position-relative z-1 h-75" href="contact-us">CONTACT
                            US</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
            <div class="customContainer">
                <h2 class="text-center pb-4"><span class="fs5">Nos </span> <span class="fs6">Activitès</span>
                </h2>
                <div class="activitieSlider">
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/school/school_img1.jpeg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Activation pour la rentrée</h3>
                            <p>
                                Une activation a l’occasion de la rentrée scolaire (dégustation + tombola ) achetez et
                                tentez de gagner des bons d’achats techno
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/aid_azah/eid_img1.jpeg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Aide à l'activation Al Adha</h3>
                            <p>
                                Une activation a l’occasion de l’Aid Al Adha (dégustation + tombola ) des aiguises
                                coteaux
                                des cartes de recharges et des coteaux de 9pcs comme cadeaux
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/special_african_cup/img0.png') }}"
                            alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Concours réseaux sociaux special coupe d’Afrique</h3>
                            <p>
                                A l’occasion de la coupe d’Afrique 2023 Alawafy a lancer un concours sur les réseaux
                                sociaux, des téléviseurs et des smart phones comme gains
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/al_jadid/image22.jpg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Souk el Fellah AL-jadid</h3>
                            <p>Présence de la marque ALAWAFY au SOUK EL FELLAH Organisée par l’institut Souk el-Fellah
                                Al-Jadid, en coordination avec l’Office des parcs des sports et des loisirs d’Alger
                                (Opla) et la Chambre d’artisanat et des métiers, cette manifestation a pour objectif de
                                faire connaître et de promouvoir le produit artisanal national. Elle réunit environ 60
                                entreprises algériennes et étrangères représentant la Tunisie, le Sénégal, la Chine, la
                                Turquie et la France venus exposer leurs divers produits.
                            </p>
                        </div>
                    </div>

                    {{-- <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/excecutionCenter/img2.jpg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>d’exécution Center</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/loperationBts/img7.jpg') }}" alt="">

                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>de l’opération BTS</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/excecutionQuest/image26.jpg') }}" alt="">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>d’exécution Quest</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col activityOuter">
                        <img class="w-100 activityImg"
                            src="{{ asset('assets/images/activities/remisDes/image38.jpg') }}" alt="">

                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-arrows-down-to-people"></i>
                            </div>
                            <h3>Remise Des Cadeaux</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div> --}}

                    {{-- <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-money-check-dollar"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                            <h3>Lorem ipsum</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quisquam consequatur necessitatibus eaque.
                            </p>
                        </div>
                    </div> --}}
                </div>
                <div class="d-flex justify-content-center">
                    <a class="mainBtn1" href="activities">Voir plus</a>
                </div>
            </div>
        </section>

        <x-frenchletsConnect />


        <div class="customContainer">



            {{-- <button class="mainBtn1">Contact us</button>
        <button class="mainBtn2">Contact us</button>
        <button class="goDownBtn">goDown</button>
        <div class="heroSlider">
            <div class="cls">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, perferendis!
            </div>
            <div class="cls">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, perferendis!
            </div>
            <div class="cls">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, perferendis!
            </div>
            <div class="cls">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, perferendis!
            </div>
        </div> --}}
            {{--
        <div class="">
            <div class="cls1"></div>
            <div class="cls1"></div>
            <div class="cls1"></div>
            <div class="cls1"></div>
        </div>
        --}}
            {{-- <div class="scrollDownSection"></div> --}}
        </div>
    </main>
</x-frenchLayout>
