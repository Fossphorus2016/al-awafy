<x-admin.layouts>

    <div class="card">
        <div class="card-body">

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Banner Section
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active bannerNavTab1" aria-current="page" href="#">Banner
                                        1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bannerNavTab2" aria-current="page" href="#">Banner 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bannerNavTab3" aria-current="page" href="#">Banner 3</a>
                                </li>


                            </ul>

                            <div class="bannerNavForm1">

                                <form action="{{route('home.english.banner.1')}}" method="POST" class="mt-5 formValidation">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-6">
                                            <input type="hidden" name="language" value="english" id="">

                                            <div>
                                                <label for="">Heading 1</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 2</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Banner Image</label>
                                                <input type="file" class="form-control" id="bannerImageInput1">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <img src="" alt="Uploaded Image" id="uploadedImage1"
                                                style="background-color:lightgrey; max-width: 950px; width: 100%; height:450px; object-fit:contain; display: none;">

                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bannerNavForm2" style="display: none">

                                <form action="" class="mt-5 formValidation">
                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 1</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 2</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Banner Image</label>
                                                <input type="file" class="form-control" id="bannerImageInput2">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <img src="" alt="Uploaded Image" id="uploadedImage2"
                                                style="background-color:lightgrey; max-width: 950px; width: 100%; height:450px; object-fit:contain; display: none;">

                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bannerNavForm3" style="display: none">

                                <form action="" class="mt-5 formValidation">
                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 1</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 2</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Banner Image</label>
                                                <input type="file" class="form-control" id="bannerImageInput3">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <img src="" alt="Uploaded Image" id="uploadedImage3"
                                                style="background-color:lightgrey; max-width: 950px; width: 100%; height:450px; object-fit:contain; display: none;">

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
                            About Section
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" class="mt-5 formValidation">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading blue</label>
                                            <input type="text" class="form-control">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading green</label>
                                            <input type="text" class="form-control">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div>
                                            <label for="">Heading small</label>
                                            <input type="text" class="form-control">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div>
                                            <label for="">About paragraph</label>
                                            <textarea class="editor1 noVal"></textarea>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div>
                                            <label for="">About Image</label>
                                            <input type="file" class="form-control" id="aboutImageInput1">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <img src="" alt="Uploaded Image" id="uploadedAboutImage1"
                                            style="background-color:lightgrey; max-width: 460px; width: 100%; height:300px; object-fit:contain; display: none;">

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
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Our Values
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" class="mt-5 formValidation">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value Title 1</label>
                                            <input class="form-control"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value</label>
                                            <input type="file" class="form-control" id="valueImageInput1">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <img src="" alt="Uploaded Image" id="uploadedValueImage1"
                                            style="background-color:lightgrey; max-width: 180px; width: 100%; height:185px; object-fit:contain; display: none;">

                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value Title 2</label>
                                            <input class="form-control"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value</label>
                                            <input type="file" class="form-control" id="valueImageInput2">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <img src="" alt="Uploaded Image" id="uploadedValueImage2"
                                            style="background-color:lightgrey;max-width: 180px; width: 100%; height:185px; object-fit:contain; display: none;">

                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value Title 3</label>
                                            <input class="form-control"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value</label>
                                            <input type="file" class="form-control" id="valueImageInput3">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <img src="" alt="Uploaded Image" id="uploadedValueImage3"
                                            style="background-color:lightgrey; max-width: 180px; width: 100%; height:185px; object-fit:contain; display: none;">

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
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Our Brands
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active bannerNavTab1" aria-current="page" href="#">Brand
                                        1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bannerNavTab2" aria-current="page" href="#">Brand 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bannerNavTab3" aria-current="page" href="#">Brand 3</a>
                                </li>


                            </ul>
                            <div class="bannerNavForm1">
                                <form action="" class="mt-5 formValidation">
                                    <div class="row gy-4">

                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Image</label>
                                                <input type="file" class="form-control" id="brandImageInput1">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <img src="" alt="Uploaded Image" id="uploadedBrandImage1"
                                                style="background-color:lightgrey; max-width: 300px; width: 100%; height:190px; object-fit:contain; display: none;">

                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Logo</label>
                                                <input type="file" class="form-control" id="brandLogoInput1">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <img src="" alt="Uploaded Image" id="uploadedBrandLogo1"
                                                style="background-color:lightgrey; max-width: 160px; width: 100%; height:90px; object-fit:contain; display: none;">

                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bannerNavForm2" style="display: none">

                                <form action="" class="mt-5 formValidation">
                                    <div class="row gy-4">

                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Image</label>
                                                <input type="file" class="form-control" id="brandImageInput2">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <img src="" alt="Uploaded Image" id="uploadedBrandImage2"
                                                style="background-color:lightgrey; max-width: 300px; width: 100%; height:190px; object-fit:contain; display: none;">

                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Logo</label>
                                                <input type="file" class="form-control" id="brandLogoInput2">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <img src="" alt="Uploaded Image" id="uploadedBrandLogo2"
                                                style="background-color:lightgrey; max-width: 160px; width: 100%; height:90px; object-fit:contain; display: none;">

                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bannerNavForm3" style="display: none">

                                <form action="" class="mt-5 formValidation">
                                    <div class="row gy-4">

                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Image</label>
                                                <input type="file" class="form-control" id="brandImageInput3">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <img src="" alt="Uploaded Image" id="uploadedBrandImage3"
                                                style="background-color:lightgrey; max-width: 300px; width: 100%; height:190px; object-fit:contain; display: none;">

                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Logo</label>
                                                <input type="file" class="form-control" id="brandLogoInput3">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <img src="" alt="Uploaded Image" id="uploadedBrandLogo3"
                                                style="background-color:lightgrey; max-width: 160px; width: 100%; height:90px; object-fit:contain; display: none;">

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
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Section 6
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" class="mt-5 formValidation">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading 1</label>
                                            <input class="form-control"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading 2</label>
                                            <input class="form-control"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Heading 3</label>
                                            <input class="form-control"></input>
                                            <p class="text-danger"></p>
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
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Our Activities
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-end">

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addActivity">
                                    Add Activity
                                </button>
                            </div>
                            <div class="modal fade" id="addActivity" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content formValidation">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Activity</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" class="mt-5">
                                                <div class="row gy-4">
                                                    <div class="col-12">

                                                        <div>
                                                            <label for="">Heading 1</label>
                                                            <input class="form-control"></input>
                                                            <p class="text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">

                                                        <div>
                                                            <label for="">Paragraph</label>
                                                            <textarea class="form-control"></textarea>
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
                                            <th>Heading</th>
                                            <th>Paragraph</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Activiation For Back To School</td>
                                            <td>
                                                An activation for the start of the school year (tasting + raffle) buy
                                                and
                                                try to win tech vouchers
                                            </td>
                                            <td>
                                                <img src="https://al-awafy.koreintl.com/assets/images/activities/school/school_img1.jpeg"
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
        }
    </style>

    <script>
        $(document).ready(function() {

            const editor = Jodit.make('.editor1');

            $('.bannerNavTab1').click(function() {
                $('.bannerNavForm1').show();
                $('.bannerNavForm2, .bannerNavForm3').hide();
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });

            $('.bannerNavTab2').click(function() {
                $('.bannerNavForm2').show();
                $('.bannerNavForm1, .bannerNavForm3').hide();
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });

            $('.bannerNavTab3').click(function() {
                $('.bannerNavForm3').show();
                $('.bannerNavForm1, .bannerNavForm2').hide();
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
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
            handleImageChange('#bannerImageInput3', '#uploadedImage3');
            handleImageChange('#aboutImageInput1', '#uploadedAboutImage1');
            handleImageChange('#valueImageInput1', '#uploadedValueImage1');
            handleImageChange('#valueImageInput2', '#uploadedValueImage2');
            handleImageChange('#valueImageInput3', '#uploadedValueImage3');
            handleImageChange('#brandImageInput1', '#uploadedBrandImage1');
            handleImageChange('#brandImageInput2', '#uploadedBrandImage2');
            handleImageChange('#brandImageInput3', '#uploadedBrandImage3');
            handleImageChange('#brandLogoInput1', '#uploadedBrandLogo1');
            handleImageChange('#brandLogoInput2', '#uploadedBrandLogo2');
            handleImageChange('#brandLogoInput3', '#uploadedBrandLogo3');
            handleImageChange('#activityImageInput1', '#uploadedActivityImage1');


            $(".formValidation").submit(function(event) {
                event.preventDefault();
                let isValid = true;

                $(this)
                    .find("input, select, textarea")
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
                            // Check for select input
                        } else if ($inputField.is("select")) {
                            if ($inputField.val().trim() === "") {
                                $inputField.addClass("is-invalid");
                                $errorMessage.text(labelText + " is required").css('display', 'block');
                                isValid = false;
                            } else {
                                $inputField.removeClass("is-invalid");
                                $errorMessage.text('').css('display', 'none');
                            }
                            // Check for checkboxes
                        } else if ($inputField.is(":checkbox")) {
                            if (!$inputField.is(":checked")) {
                                $inputField.addClass("is-invalid");
                                $errorMessage.text(labelText + " is required").css('display', 'block');
                                isValid = false;
                            } else {
                                $inputField.removeClass("is-invalid");
                                $errorMessage.text('').css('display', 'none');
                            }
                            // Check for other input fields
                        } else {
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

                // If valid, submit the form
                if (isValid) {
                    this.submit();
                }
            });

            // If the user enters input, remove the is-invalid class
            $(".formValidation")
                .find("input, select, textarea, .emailVal")
                .on("input change", function() {
                    let $inputField = $(this);

                    // Skip validation if the input has the "noVal" class
                    if ($inputField.hasClass("noVal")) {
                        return;
                    }

                    let $parentDiv = $inputField.closest('div');
                    let $errorMessage = $parentDiv.find('p');

                    // Remove is-invalid class and hide error message if input is valid
                    if ($inputField.val().trim() !== "" || $inputField.is(":checkbox:checked")) {
                        $inputField.removeClass("is-invalid");
                        $errorMessage.text('').css('display', 'none');
                    }
                });

            // Phone validation to remove unnecessary characters
            $(".formValidation .phoneVal").keydown(function(event) {
                const keyPressed = event.key;
                if (keyPressed === "+" || keyPressed === "-" || keyPressed === "e" || keyPressed === ".") {
                    event.preventDefault();
                }
            });
        });



    </script>

</x-admin.layouts>
