<x-admin.layouts>
    <div class="card">
        <div class="card-body">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            Meta Section
                        </button>
                    </h2>
                    <div id="collapseZero" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" class="mt-5 formValidation">
                                @csrf
                                <input type="hidden" name="language" value="english">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta title</label>
                                            <input class="form-control"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta Description</label>
                                            <input class="form-control"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Canonical</label>
                                            <input class="form-control"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseZero2" aria-expanded="false" aria-controls="collapseZero2">
                            Banner Section
                        </button>
                    </h2>
                    <div id="collapseZero2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>
                                <form action="" class="mt-5 formValidation2">
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_h1">Heading 1</label>
                                                <input type="text" class="form-control " name="banner_h1"
                                                    id="banner_h1">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_h2">Heading 2</label>
                                                <input type="text" class="form-control " name="banner_h2"
                                                    id="bannerImageInput2">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label>
                                                <input type="file" class="form-control " name="banner_1_image"
                                                    id="bannerImageInput2">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <img src="" alt="" id="uploadedImage2"
                                                style="background-color:lightgrey; max-width: 1600px; width: 100%; height: 460px; object-fit: contain; display: none;">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Section 2
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="">

                                <form action="" class="mt-5 formValidation">
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div class="editorOut1">
                                                <label for="">Blue Heading</label>
                                                <input class="form-control"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="editorOut2">
                                                <label for="">Green Heading</label>
                                                <input class="form-control"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="editorOut3">
                                                <label for="">Paragraph</label>
                                                <input class="form-control"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label>
                                                <input type="file" class="form-control " name="banner_1_image"
                                                    id="bannerImageInput1">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <img src="" alt="" id="uploadedImage1"
                                                style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain; display: none;">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Brands
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>
                                <form action="" class="mt-5 formValidation2">
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div class="editorOut1">
                                                <label for="">Heading 1</label>
                                                <input class="form-control"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="editorOut2">
                                                <label for="">Heading 2</label>
                                                <input class="form-control"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="editorOut3">
                                                <label for="">Paragraph</label>
                                                <input class="form-control"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="editorOut2">
                                                <label for="">Url</label>
                                                <input class="form-control"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <style>
        .activityTable tbody tr img {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }
    </style>

    <script>
        $(document).ready(function() {


            $(".formValidation").submit(function(event) {
                event.preventDefault();
                let isValid = true;

                $(this)
                    .find("input")
                    .each(function() {
                        let $inputField = $(this);
                        let $parentDiv = $inputField.closest('div');
                        let $errorMessage = $parentDiv.find('.errMsg');
                        let labelText = $parentDiv.find('label').text();

                        if ($inputField.hasClass("noVal")) {
                            $inputField.removeClass("is-invalid");
                            return;
                        }
                        if ($inputField.val().trim() === "") {
                            $inputField.addClass("is-invalid");
                            $errorMessage.text(labelText + " is required").css('display', 'block');
                            isValid = false;
                        } else {
                            $inputField.removeClass("is-invalid");
                            $errorMessage.text('').css('display', 'none');
                        }

                    });
                if (isValid) {
                    this.submit();
                }
            });
            $(".formValidation2").submit(function(event) {
                event.preventDefault();
                let isValid = true;
                $(".fileError").text('');
                const fileInput = $("#bannerImageInput1")[0];
                if (!fileInput.files.length) {
                    isValid = false;
                    $(".fileError").text('Please upload a banner image.');
                }
                if (isValid) {
                    this.submit();
                }
            });
            $(".formValidation4").submit(function(event) {
                event.preventDefault();
                let isValid = true;

                $(this)
                    .find("input, textarea")
                    .each(function() {
                        let $inputField = $(this);
                        let $parentDiv = $inputField.closest('div');
                        let $errorMessage = $parentDiv.find('p');
                        let labelText = $parentDiv.find('label').text();

                        if ($inputField.hasClass("noVal")) {
                            $inputField.removeClass("is-invalid");
                            return;
                        }

                        // Check for file input
                        if ($inputField.is(":file")) {
                            if (!this.files.length) {
                                $inputField.addClass("is-invalid");
                                $errorMessage.text(labelText + " is required").css('display', 'block');
                                isValid = false;
                            } else {
                                $inputField.removeClass("is-invalid");
                                $errorMessage.text('').css('display', 'none');
                            }
                        } else {
                            // Check for other input or textarea
                            if ($inputField.val().trim() === "") {
                                $inputField.addClass("is-invalid");
                                $errorMessage.text(labelText + " is required").css('display', 'block');
                                isValid = false;
                            } else {
                                $inputField.removeClass("is-invalid");
                                $errorMessage.text('').css('display', 'none');
                            }
                        }
                    });

                if (isValid) {
                    this.submit();
                }
            });

            function handleImageChange(inputId, imageId) {
                $(inputId).on('change', function(event) {
                    var file = event.target.files[0];
                    var image = $(imageId);

                    if (file) {
                        var imageUrl = URL.createObjectURL(file);
                        image.attr('src', imageUrl).show();
                    } else {
                        image.hide();
                    }
                });
            }

            handleImageChange('#bannerImageInput1', '#uploadedImage1');
            handleImageChange('#bannerImageInput2', '#uploadedImage2');
            handleImageChange('#activityImageInput1', '#uploadedActivityImage1');


        });
    </script>
</x-admin.layouts>
