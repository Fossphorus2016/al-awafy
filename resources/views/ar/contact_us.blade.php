<x-arabicLayout>
    <main>
        <section class="heroSection secondBanner contactBanner position-relative z-1">
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
                        <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2"> اتصل </span>
                            <span class="fs3">بنا</span>
                        </h1>

                    </div>
                </div>

            </div>
        </section>


        <section>
            <div class="customContainer">
                <div class="contactUsInner d-flex justify-content-center">

                    <div class="card " style="max-width: 914px">

                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-4">

                                <div class="absoluteAttached"></div>
                                <div class="absoluteAttached"></div>
                            </div>
                            <div class="paraFont">

                                <h2 class="d-flex justify-content-center text-center flex-wrap"><span
                                        class="fs5 ">النموذج أدناه</span>
                                    <span class="fs6">املأ</span>
                                </h2>
                                <p class="text-center w-100">
                                    العوافي تجلب لكم ثراء الطبيعة وفوائدها، لتهتموا بطعامكم وتزينوا موائدكم بأفضل وأمثل
                                    وأشهى ما يمكن لتحقيق نظام غذائي صحي وسليم ومتنوع يضمن حصول الجسم على كافة العناصر
                                    الغذائية العناصر الطبيعية.
                                </p>
                            </div>

                            <form id="contact_form" action="{{ route('contact.create') }}" method="POST"
                                onsubmit="return contact_validate(event)">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-lg-6 col-12 position-relative">
                                        <input type="text" class="form-control inputCustom rightPlaceholder"
                                            placeholder="اسمك الكامل" name="name" id="name">
                                        <small id="error_name" class="text-danger text-small position-absolute"
                                            style="display: none; bottom: -20px;">
                                            Name is required
                                        </small>
                                    </div>
                                    <div class="col-lg-6 col-12 position-relative">
                                        <input type="number" name="phone" id="phone"
                                            class="form-control inputCustom phoneVal rightPlaceholder" placeholder="رقم الاتصال الخاص بك">
                                        <small id="error_phone" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Phone is required</small>
                                        <small id="invalid_phone_length" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Invalid Number</small>
                                    </div>
                                    <div class="col-12 position-relative">
                                        <input type="text" name="email" id="email"
                                            class="form-control inputCustom rightPlaceholder" placeholder="عنوان بريدك  الإلكتروني">
                                        <small id="invalid_email" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Invalid email</small>
                                        <small id="error_email" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Email is required</small>
                                    </div>
                                    <div class="col-12 position-relative">
                                        <textarea name="message" id="message" rows="4" style="height: 100px" class="form-control inputCustom rightPlaceholder"
                                            placeholder="رسالتك هنا"></textarea>
                                        <small id="error_message" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Message is required</small>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <button class="mainBtn1 w-100" type="submit">يقدم الآن</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contactSection mb-5">
            <div class="customContainer">
                <div class="row gy-4">
                    <div class="col-lg-4">

                        <div class="d-flex">
                            <img class="pe-3" src="{{ asset('assets/images/shape/contact2.png') }}" alt="">
                            <div class="d-flex flex-column justify-content-center ">
                                <p class="fs11">+213-557-666-888</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="d-flex">
                            <img class="pe-3" src="{{ asset('assets/images/shape/contact3.png') }}" alt="">
                            <div class="d-flex flex-column justify-content-center ">
                                <p class="fs11">info@alawafy.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="d-flex">
                            <img class="pe-3" src="{{ asset('assets/images/shape/contact1.png') }}" alt="">
                            <div class="d-flex flex-column justify-content-center ">
                                <p class="fs11 responsiveCenter">ZEA 1 ère Tranche N°06 -Sétif- Algeria</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mapSection">


            <iframe class=" mapIframe secondValues"
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3220.6003876465056!2d5.413036175809924!3d36.17627777243146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzbCsDEwJzM0LjYiTiA1wrAyNCc1Ni4yIkU!5e0!3m2!1sen!2s!4v1726751132615!5m2!1sen!2s"allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




        </section>


        <x-letsConnect />




    </main>

    <script>
        function contact_validate(event) {
            var isValid = true;

            // Name validation
            if ($("#name").val().trim() == "") {
                $("#name").addClass("is-invalid");
                $("#error_name").show();
                isValid = false;
            } else {
                $("#name").removeClass("is-invalid");
                $("#error_name").hide();
            }

            // Email validation
            var email = $("#email").val();
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if ($("#email").val().trim() == "") {
                $("#email").addClass("is-invalid");
                $("#error_email").show();
                $("#invalid_email").hide();
                isValid = false;
            } else {
                $("#error_email").hide();
                if (!emailRegex.test(email)) {
                    $("#email").addClass("is-invalid");
                    $("#invalid_email").show();
                    isValid = false;
                } else {
                    $("#email").removeClass("is-invalid");
                    $("#invalid_email").hide();
                }
            }

            // Phone validation
            // if ($("#phone").val().trim() == "") {
            //     $("#phone").addClass("is-invalid");
            //     $("#error_phone").show();
            //     isValid = false;
            // } else {
            //     $("#phone").removeClass("is-invalid");
            //     $("#error_phone").hide();
            // }
            var phone = $("#phone").val().trim();
            if (phone == "") {
                $("#phone").addClass("is-invalid");
                $("#error_phone").show();
                $("#invalid_phone_length").hide();
                isValid = false;
            } else {
                $("#error_phone").hide();
                if (phone.length < 8) {
                    $("#phone").addClass("is-invalid");
                    $("#invalid_phone_length").show();
                    isValid = false;
                } else {
                    $("#phone").removeClass("is-invalid");
                    $("#error_phone").hide();
                    $("#invalid_phone_length").hide();
                }
            }

            // Message validation
            if ($("#message").val().trim() == "") {
                $("#message").addClass("is-invalid");
                $("#error_message").show();
                isValid = false;
            } else {
                $("#message").removeClass("is-invalid");
                $("#error_message").hide();
            }

            // If form is not valid, prevent submission
            if (!isValid) {
                event.preventDefault();
            }

            // Return isValid to control the form submission
            return isValid;
        }
    </script>
</x-arabicLayout>
