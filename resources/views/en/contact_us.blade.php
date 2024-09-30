{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al Awafy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <div class="row mb-5 card shadow p-5">
            <div class="col-md-12">
                <form id="contact_form" action="{{ route('contact.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <label for="" id="error_name" class="text-danger fw-bold " style="display: none">
                            Name is required
                        </label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                        <label for="invalid_email" id="invalid_email" class="text-danger fw-bold"
                            style="display: none;">Invalid
                            email</label>
                        <label for="" id="error_email" class="text-danger fw-bold " style="display: none">
                            Email is required
                        </label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                        <label for="" id="error_phone" class="text-danger fw-bold " style="display: none">
                            Phone is required
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control">
                        <label for="" id="error_subject" class="text-danger fw-bold " style="display: none">
                            Subject is required
                        </label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="1" rows="1"></textarea>
                        <label for="" id="error_message" class="text-danger fw-bold " style="display: none">
                            Message is required
                        </label>
                    </div>

                    <button type="button" onclick="contact_validate()" class="btn btn-outline-danger">Submit</button>

                </form>
            </div>
        </div>

        <div class="row mt-5 card shadow p-5">
            <div class="col-md-12">
                <form action="{{ route('news.letter.create') }}" method="POST" id="news_letter_form">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">News Letter</label>
                        <input type="email" name="subscriber_mail" id="subscriber_mail" class="form-control">
                        <label for="" id="error_subscriber_mail" class="text-danger fw-bold "
                            style="display: none">
                           Email is required
                        </label>
                    </div>

                    <button type="button" onclick="news_validate()" class="btn btn-outline-danger">Submit</button>
                </form>
            </div>
        </div>

    </div>

















    <script src="{{ asset('admin_assets/js/jquery-3.7.1.min.js') }}"></script>

    <script>
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        $('#phone').on('input', function(event) {
            var inputValue = $(this).val();

            // Check if the first character is not a plus sign
            if (inputValue.charAt(0) !== '+') {
                // Prepend a plus sign to the value
                inputValue = '+' + inputValue;
            }

            // Remove all characters except digits and plus sign
            var cleanedValue = inputValue.replace(/[^\d+]/g, '');

            // Set the cleaned value back to the input field
            $(this).val(cleanedValue);
        });

        function contact_validate() {
            if ($("#name").val() == "") {
                $("#name").addClass("is-invalid");
                $("#error_name").show();
                return;
            } else {
                $("#name").removeClass("is-invalid");
                $("#error_name").hide();
            }

            var email = $("#email").val();
            if ($("#email").val() == "") {
                $("#email").addClass("is-invalid");
                $("#error_email").show();
                return;

            } else {
                $("#email").removeClass("is-invalid");
                $("#error_email").hide();
                $("#invalid_email").hide();
            }

            if (!emailRegex.test(email)) {
                $("#email").addClass("is-invalid");
                $("#invalid_email").show();
                return;
            } else {
                $("#email").removeClass("is-invalid");
                $("#error_email").hide();
                $("#invalid_email").hide();
            }

            if ($("#phone").val() == "") {
                $("#phone").addClass("is-invalid");
                $("#error_phone").show();
                return;
            } else {
                $("#phone").removeClass("is-invalid");
                $("#error_phone").hide();
            }

            if ($("#subject").val() == "") {
                $("#subject").addClass("is-invalid");
                $("#error_subject").show();
                return;
            } else {
                $("#subject").removeClass("is-invalid");
                $("#error_subject").hide();
            }

            if ($("#message").val() == "") {
                $("#message").addClass("is-invalid");
                $("#error_message").show();
                return;
            } else {
                $("#message").removeClass("is-invalid");
                $("#error_message").hide();
            }

            $('#contact_form').submit();
        }

        function news_validate() {
            if ($("#subscriber_mail").val() == "") {
                $("#subscriber_mail").addClass("is-invalid");
                $("#error_subscriber_mail").show();
                return;
            } else {
                $("#subscriber_mail").removeClass("is-invalid");
                $("#error_subscriber_mail").hide();
            }

            $('#news_letter_form').submit();
        }
    </script>
</body>

</html> --}}






<x-layout>
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
                        <h1 class="waterDropsBefore waterDropsAfter"> <span class="fs2"> Contact </span>
                            <span class="fs3">Us</span>
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
                                        class="fs5 ">FILL
                                        THE</span>
                                    <span class="fs6">Form Below</span>
                                </h2>
                                <p class="text-center w-100">Al-Awafi brings you the richness and benefits of nature, to take
                                    care of your food and
                                    decorate your tables with the best, most ideal and most delicious in order to
                                    achieve a
                                    healthy, sound and varied diet that ensures that the body gets all the natural
                                    elements.
                                </p>
                            </div>

                            <form id="contact_form" action="{{ route('contact.create') }}" method="POST"
                                onsubmit="return contact_validate(event)">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-lg-6 col-12 position-relative">
                                        <input type="text" class="form-control inputCustom"
                                            placeholder="Your Full Name" name="name" id="name">
                                        <small id="error_name" class="text-danger text-small position-absolute"
                                            style="display: none; bottom: -20px;">
                                            Name is required
                                        </small>
                                    </div>
                                    <div class="col-lg-6 col-12 position-relative">
                                        <input type="number" name="phone" id="phone"
                                            class="form-control inputCustom phoneVal" placeholder="Your Contact Number">
                                        <small id="error_phone" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Phone is required</small>
                                        <small id="invalid_phone_length" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Invalid Number</small>
                                    </div>
                                    <div class="col-12 position-relative">
                                        <input type="text" name="email" id="email"
                                            class="form-control inputCustom" placeholder="Your Email Address">
                                        <small id="invalid_email" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Invalid email</small>
                                        <small id="error_email" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Email is required</small>
                                    </div>
                                    <div class="col-12 position-relative">
                                        <textarea name="message" id="message" rows="4" style="height: 100px" class="form-control inputCustom"
                                            placeholder="Your Message Here"></textarea>
                                        <small id="error_message" class="text-danger position-absolute"
                                            style="display: none; bottom: -20px;">Message is required</small>
                                    </div>


                                    <div class="col-12 d-flex justify-content-center">
                                        <button class="mainBtn1 w-100" type="submit">SUBMIT NOW!</button>
                                    </div>

                                    <x-captcha />
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
        let captchaToken = '';

        function javascriptCallback(token) {
            if (token) {
                captchaToken = token;
                console.log("Turnstile response token:", token);
            } else {
                console.log("Error: Turnstile token not generated.");
                captchaToken = '';
            }
        }

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

            if (captchaToken) {
                // Set the hidden captcha token field
                $('#captcha_token').val(captchaToken);

            } else {
                $('#error_message').html("Please check the captcha").show();
            }



            // If form is not valid, prevent submission
            if (!isValid && captchaToken) {
                event.preventDefault();
            }

            // Return isValid to control the form submission
            return isValid;
        }
    </script>
</x-layout>
