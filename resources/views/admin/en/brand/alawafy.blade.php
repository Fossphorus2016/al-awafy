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
                            Banner Image
                        </button>
                    </h2>
                    <div id="collapseZero2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>
                                <form action="" class="mt-5 formValidation2">
                                    <div class="row gy-4">
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
                            Brands
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="">

                                <form action="" class="mt-5 formValidation">
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
                            Brand Image
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>
                                <form action="" class="mt-5 formValidation2">
                                    <div class="row gy-4">
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
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Our Activities
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-end">

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addActivity">
                                    Add Item
                                </button>
                            </div>
                            <div class="modal fade" id="addActivity" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Item</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" class="mt-5 formValidation4">
                                                <div class="row gy-4">
                                                    <div class="col-12">

                                                        <div class="editorOut21">
                                                            <label for="">Heading 1</label>
                                                            <input class="form-control"></input>
                                                            <p class="text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">

                                                        <div class="editorOut22">
                                                            <label for="">Heading 2</label>
                                                            <input class="form-control"></input>
                                                            <p class="text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">

                                                        <div class="editorOut23">
                                                            <label for="">Paragraph</label>
                                                            <textarea class="form-control" name="paragraph"></textarea>
                                                            <p class="text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">

                                                        <div>
                                                            <label for="">Image</label>
                                                            <input type="file" class="form-control"
                                                                id="activityImageInput1">
                                                            <p class="text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">

                                                        <img src="" alt="Uploaded Image"
                                                            id="uploadedActivityImage1"
                                                            style="background-color:lightgrey; max-width: 350px; width: 100%; height:270px; object-fit:contain; display: none;">

                                                    </div>


                                                </div>
                                                <div class="modal-footer">

                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">

                                <table class="table table-striped table-hover activityTable">
                                    <thead>

                                        <tr>
                                            <th>ID</th>
                                            <th class="text-nowrap">Heading 1</th>
                                            <th class="text-nowrap">Heading 2</th>
                                            <th>Paragraph</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Alawafy</td>
                                            <td>Pistachios</td>
                                            <td>
                                                Indulge in the premium taste of Alawafy Pistachios, sourced from the
                                                finest orchards and carefully roasted to perfection. These pistachios
                                                are packed with flavor, offering a delightful crunch in every bite.
                                                Ideal for healthy snacking or as an addition to your favorite recipes,
                                                Alawafy Pistachios deliver top-quality taste, rich in protein and
                                                essential nutrients.
                                            </td>
                                            <td>
                                                <img src="https://al-awafy.koreintl.com/assets/images/items/brandItem5.png"
                                                    alt="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
