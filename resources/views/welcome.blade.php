<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

</html>
