<x-admin.layouts title=" Create Activity | English">



    <div class="container">
        <div class="row justify-content-center my-5 card shadow px-10 py-5">
            <div class="card-header px-0 align-content-center mb-5">
                <h2 class="fs-1 card-title primaryClr fw-bolder">Create Activity</h2>

                <a href="{{ route('admin.our.activity.english') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <form action="{{ route('admin.our.activity.store') }}" id="activity_form" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="language" value="english">

                        <div class="card rounded-2 shadow mb-4">
                            <div class="card-header bg-light py-3 text-center">
                                <h5 class="mb-0">Activity Content</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <label for="title" class="form-label">Heading 1</label>
                                                <input type="text" name="heading_1" id="heading_1"
                                                    class="form-control">
                                                <label for="error_heading_1" id="error_heading_1"
                                                    class="text-danger fw-bold" style="display: none">Heading is
                                                    required</label>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <label for="title" class="form-label">Heading 2</label>
                                                <input type="text" name="heading_2" id="heading_2"
                                                    class="form-control">
                                                <label for="error_heading_2" id="error_heading_2"
                                                    class="text-danger fw-bold" style="display: none">Heading is
                                                    required</label>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <label for="content" class="form-label">Paragraph</label>
                                                <textarea name="paragraph" id="paragraph" class="form-control" cols="10" rows="4"></textarea>
                                                <label for="error_paragraph" id="error_paragraph"
                                                    class="text-danger fw-bold" style="display: none">Paragraph is
                                                    required</label>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label for="images" class="form-label">Images</label>
                                                <input type="file" name="images[]" id="images"
                                                    class="form-control" accept="image/*" multiple
                                                    onchange="previewImages()">
                                                <label for="error_images" id="error_images" class="text-danger fw-bold"
                                                    style="display: none">
                                                    At least one image is required
                                                </label>

                                            </div>




                                            <div id="imagePreview" class="d-flex flex-wrap"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button type="button" onclick="blog_validate()"
                                        class="btn btn-primary">Create</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-admin.layouts>

<style>
    .image-container {
        position: relative;
        display: inline-block;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .remove-icon {
        position: absolute;
        top: -5px;
        right: -5px;
        background-color: red;
        color: white;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-weight: bold;
        font-size: 16px;
        line-height: 16px;
    }
</style>

<script>
    $(document).ready(function() {


        load_jodit('content');






    })

    function previewImages() {
        const input = document.getElementById('images');
        const previewContainer = document.getElementById('imagePreview');
        previewContainer.innerHTML = ''; // Clear previous previews

        const files = input.files;
        if (files.length === 0) return;

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            reader.onload = function(e) {
                // Create the container for the image preview and the remove button
                const imageContainer = document.createElement('div');
                imageContainer.className = 'image-container position-relative me-2 mb-2';

                const img = document.createElement('img');
                img.src = e.target.result;
                img.width = 100;
                img.height = 100;
                img.className = 'rounded';

                // Create the remove button (X) to remove the image
                const removeIcon = document.createElement('span');
                removeIcon.className = 'remove-icon';
                removeIcon.innerHTML = '×';
                removeIcon.onclick = function() {
                    imageContainer.remove();
                    unselectImage(i); // Unselect the image from the input
                };

                imageContainer.appendChild(img);
                imageContainer.appendChild(removeIcon);
                previewContainer.appendChild(imageContainer);
            };
            reader.readAsDataURL(file);
        }
    }

    // Unselect the image from the input
    function unselectImage(index) {
        const input = document.getElementById('images');
        const dataTransfer = new DataTransfer(); // Create a new DataTransfer object

        // Re-add all files except the one that is removed
        Array.from(input.files).forEach((file, i) => {
            if (i !== index) {
                dataTransfer.items.add(file); // Add other files back
            }
        });

        input.files = dataTransfer.files; // Update input files
    }


    function blog_validate() {
        if ($("#heading_1").val() == "") {
            $("#heading_1").addClass("is-invalid");
            $("#error_heading_1").show();
            return;
        } else {
            $("#heading_1").removeClass("is-invalid");
            $("#error_heading_1").hide();
        }

        if ($("#heading_2").val() == "") {
            $("#heading_2").addClass("is-invalid");
            $("#error_heading_2").show();
            return;
        } else {
            $("#heading_2").removeClass("is-invalid");
            $("#error_heading_2").hide();
        }




        if ($("#images").val() == "") {
            $("#images").addClass("is-invalid");
            $("#error_images").show();
            return;
        } else {
            $("#images").removeClass("is-invalid");
            $("#error_images").hide();
        }

        $("#activity_form").submit();
    }
</script>
