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
                            <form action="{{ route('admin.our.activity.meta') }}" method="POST"
                                class="mt-5 formValidation">
                                @csrf
                                <input type="hidden" name="language" value="english">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta title</label>
                                            <input class="form-control" name="meta_title"
                                                value="{{ old('meta_title', $activity_page->meta_title ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta Description</label>
                                            <input class="form-control" name="meta_description"
                                                value="{{ old('meta_description', $activity_page->meta_description ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Canonical</label>
                                            <input class="form-control" name="canonical"
                                                value="{{ old('canonical', $activity_page->canonical ?? '') }}"></input>
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
                                <form action="{{ route('admin.our.activity.banner') }}" method="POST"
                                    class="mt-5 formValidation" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div class="editorOut12">
                                                <label for="">Heading 1</label>
                                                <input class="form-control" name="banner_h1"
                                                    value="{{ old('banner_h1', $activity_page->banner_h1 ?? '') }}"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="class="editorOut13>
                                                <label for="">Heading 2</label>
                                                <input class="form-control" name="banner_h2"
                                                    value="{{ old('banner_h2', $activity_page->banner_h2 ?? '') }}"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label>
                                                <input type="file" class="form-control " name="banner_image"
                                                    id="bannerImageInput1">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            @if ($activity_page && $activity_page->banner_image)
                                                <img src="{{ asset('storage/' . $activity_page->banner_image) }}"
                                                    alt="" id="uploadedImage1"
                                                    style="background-color:lightgrey; max-width: 1600px; width: 100%; height: 460px; object-fit: contain; ">
                                            @else
                                                upload an image
                                            @endif
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
                            data-bs-target="#collapseZero3" aria-expanded="false" aria-controls="collapseZero3">
                            Activity
                        </button>
                    </h2>
                    <div id="collapseZero3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card shadow p-5 m-5 ">
                                        <div class="">
                                            <a href="{{ route('admin.our.activity.create') }}"
                                                class="btn btn-outline-danger  p-2 float-end">

                                                Add Activity
                                            </a>

                                        </div>

                                        <!--begin::Accordion-->



                                        <table id="table"
                                            class="table table-row-bordered table-row-gray-600 table-striped table-hover table-responsive gy-5 rounded dataTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Heading</th>
                                                    <th scope="col">ACTIONS</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if ($our_activities->count() > 0)
                                                    @foreach ($our_activities as $activity)
                                                        <tr>
                                                            <td id="activity_heading_{{ $activity->id }}">
                                                                {{ $activity->heading_1 }} {{ $activity->heading_2 }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('admin.our.activity.edit', $activity->id) }}"
                                                                    class="btn btn-outline-danger p-2">

                                                                    Edit
                                                                </a>
                                                                <form
                                                                    action="{{ route('admin.our.activity.delete', $activity->id) }}"
                                                                    method="POST" class="d-inline"
                                                                    id="activity_form_{{ $activity->id }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button"
                                                                        class="btn btn-danger btn-sm"
                                                                        id="b_delete_{{ $activity->id }}"
                                                                        onclick="activity_delete({{ $activity->id }})"><i
                                                                            class="bi bi-trash fs-2"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    {{-- <div class="modal fade" id="activity_edit_modal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5"
                                                                        id="exampleModalLabel">Edit Activity</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Inside your modal for editing -->
                                                                    <form
                                                                        action="{{ route('admin.our.activity.update', $activity->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <!-- Make sure to use the correct method for updating -->
                                                                        <input type="hidden" name="activity_id"
                                                                            id="update_activity_id">

                                                                        <div class="row">
                                                                            <div class="col-lg-12 mb-3">
                                                                                <label for="title"
                                                                                    class="form-label">Heading
                                                                                    1</label>
                                                                                <input type="text" name="heading_1"
                                                                                    id="update_heading_1"
                                                                                    class="form-control" required>
                                                                                <label id="error_heading_1"
                                                                                    class="text-danger fw-bold"
                                                                                    style="display: none">Heading 1 is
                                                                                    required</label>
                                                                            </div>

                                                                            <div class="col-lg-12 mb-3">
                                                                                <label for="title"
                                                                                    class="form-label">Heading
                                                                                    2</label>
                                                                                <input type="text" name="heading_2"
                                                                                    id="update_heading_2"
                                                                                    class="form-control" required>
                                                                                <label id="error_heading_2"
                                                                                    class="text-danger fw-bold"
                                                                                    style="display: none">Heading 2 is
                                                                                    required</label>
                                                                            </div>

                                                                            <div class="col-lg-12 mb-3">
                                                                                <label for="content"
                                                                                    class="form-label">Paragraph</label>
                                                                                <textarea name="paragraph" id="update_paragraph" class="form-control" cols="10" rows="4" required></textarea>
                                                                                <label id="error_paragraph"
                                                                                    class="text-danger fw-bold"
                                                                                    style="display: none">Paragraph is
                                                                                    required</label>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        class="form-label">Images</label>
                                                                                    <input type="file"
                                                                                        name="images[]" id="update_images"
                                                                                        class="form-control"
                                                                                        accept="image/*" multiple
                                                                                        onchange="previewImages(event)">
                                                                                    <label id="error_images"
                                                                                        class="text-danger fw-bold"
                                                                                        style="display: none">Images
                                                                                        are required</label>
                                                                                </div>

                                                                                <!-- Existing Images -->
                                                                                <div id="existing-images"
                                                                                    class="mb-3">
                                                                                    <label class="form-label">Existing
                                                                                        Images:</label>
                                                                                    <div id="existing-images-container"
                                                                                        style="display: flex; flex-wrap: wrap;">
                                                                                    </div>
                                                                                </div>

                                                                                <!-- New Image Previews -->
                                                                                <div id="image-previews"
                                                                                    class="mb-3">
                                                                                    <label class="form-label">New Image
                                                                                        Previews:</label>
                                                                                    <div id="output"
                                                                                        style="display: flex; flex-wrap: wrap;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </form>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                @else
                                                @endif



                                            </tbody>


                                        </table>



                                    </div>
                                    <!--end::Accordion-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>




</x-admin.layouts>


<script>
    $(document).ready(function() {
        $('#table').DataTable({
            responsive: true,
            'order': []
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
    });

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


    function edit_activity() {
        $("#activity_edit_form").submit();
    }



    function previewImages(event) {
        const files = event.target.files;
        const imagePreviewContainer = document.getElementById('imagePreview');
        imagePreviewContainer.innerHTML = '';
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            reader.onload = function(e) {
                const imageDiv = document.createElement('div');
                imageDiv.className = 'position-relative me-2 mb-2';

                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100px';
                img.style.height = 'auto';
                img.className = 'border rounded';

                const removeIcon = document.createElement('button');
                removeIcon.innerHTML = '❌'; // Remove icon
                removeIcon.className = 'btn btn-danger btn-sm position-absolute' + ' remove-image';
                removeIcon.style.top = '0'; // Position it at the top right corner
                removeIcon.style.right = '0'; // Position it at the top right corner
                removeIcon.onclick = function() {
                    imagePreviewContainer.removeChild(imageDiv); // Remove the image preview
                    const newFiles = Array.from(event.target.files).filter((_, index) => index !==
                        i); // Filter out the removed file
                    const dataTransfer = new DataTransfer(); // Create a new DataTransfer object
                    newFiles.forEach(file => dataTransfer.items.add(file)); // Add remaining files back
                    event.target.files = dataTransfer.files; // Update the input files
                };

                imageDiv.appendChild(img);
                imageDiv.appendChild(removeIcon);
                imagePreviewContainer.appendChild(imageDiv);
            };

            reader.readAsDataURL(file);
        }
    }

    function load_section1_modal(id) {
        const activityId = id;
        $.ajax({
            url: `/admin/our/activity/${activityId}`, // Replace with the correct URL
            method: 'GET',
            success: function(data) {
                // Populate form fields
                $('#update_heading_1').val(data.heading_1);
                $('#update_heading_2').val(data.heading_2);
                $('#update_paragraph').val(data.paragraph);

                // Clear any previous images
                $('#existing-images').html('');
                $('#image-previews #output').html('');

                // Check if images exist
                let images = data.images;

                // If images is a JSON string, parse it to an array
                if (typeof images === 'string') {
                    try {
                        images = JSON.parse(images);
                    } catch (error) {
                        console.error("Failed to parse images JSON: ", error);
                        images = [];
                    }
                }

                // Check if it's now an array
                if (Array.isArray(images)) {
                    // Loop through and display the images
                    images.forEach(function(image) {
                        let imageHtml = `
                    <div class="existing-image" style="position: relative; display: inline-block; margin-right: 10px;">
                        <img src="${image.url}" width="100px" height="100px" class="rounded mx-2">
                        <span class="remove-icon" onclick="removeImage(this)">×</span>
                        <input type="hidden" name="existing_images[]" value="${image.url}">
                    </div>`;
                        $('#existing-images').append(imageHtml);
                    });
                } else {
                    console.error('Images is not an array');
                }

                // Set the activity ID in the hidden input
                document.getElementById('update_activity_id').value = activityId;

                // Show the modal
                $('#activity_edit_modal').modal('show');
            },
            error: function(error) {
                console.error('Failed to load activity:', error);
            }
        });
    }








    function activity_delete(activityId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you really want to delete this item?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                const form = document.getElementById('activity_form_' + activityId);
                if (form) {
                    form.submit();
                } else {
                    console.error('Form element not found');
                }
            }
        });
    }
</script>
