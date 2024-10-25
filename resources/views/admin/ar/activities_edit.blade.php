<x-admin.layouts title=" Edit Activity | Arabic">


    <div class="container">
        <div class="row justify-content-center my-5 card shadow px-10 py-5">
            <div class="card-header px-0 align-content-center mb-5">
                <h2 class="fs-1 card-title primaryClr fw-bolder">Edit Activity</h2>

                <a href="{{ route('admin.our.activity.arabic') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <form action="{{ route('admin.our.activity.update', $activity->id) }}" id="events_news_form"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="language" value="arabic" id="">
                        <div class="card rounded-2 shadow mb-4">
                            <div class="card-header bg-light py-3 text-center">
                                <h5 class="mb-0">Activity Content</h5>
                            </div>
                            <div class="card-body py-15">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="title" class="form-label">Heading 1</label>
                                        <input type="text" name="heading_1" id="heading_1"
                                            value="{{ $activity->heading_1 }}" class="form-control">
                                        <label for="error_heading_1" id="error_heading_1" class="text-danger fw-bold"
                                            style="display: none">Heading is
                                            required</label>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label for="title" class="form-label">Heading 2</label>
                                        <input type="text" name="heading_2" id="heading_2"
                                            value="{{ $activity->heading_2 }}" class="form-control">
                                        <label for="error_heading_2" id="error_heading_2" class="text-danger fw-bold"
                                            style="display: none">Heading is
                                            required</label>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label for="content" class="form-label">Paragraph</label>
                                        <textarea name="paragraph" id="paragraph" class="form-control" cols="10" rows="4">{{ $activity->paragraph }}</textarea>
                                        <label for="error_paragraph" id="error_paragraph" class="text-danger fw-bold"
                                            style="display: none">Paragraph is
                                            required</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Images</label>
                                            <input type="file" name="images[]" id="images" class="form-control"
                                                accept="image/*" multiple onchange="previewImages(event)">
                                            <label for="" id="error_images" class="text-danger fw-bold"
                                                style="display: none">Images are required</label>
                                        </div>

                                        <div id="existing-images">
                                            @if ($activity->images)
                                                @php
                                                    $decodedImages = json_decode($activity->images);
                                                @endphp
                                                @if (is_array($decodedImages) && count($decodedImages) > 0)
                                                    <label class="form-label">Existing Images:</label><br>
                                                    @foreach ($decodedImages as $image)
                                                        <div class="existing-image"
                                                            style="position: relative; display: inline-block; margin-right: 10px;">
                                                            <img src="{{ $image->url }}" width="100px" height="100px"
                                                                class="rounded mx-2">
                                                            <span class="remove-icon"
                                                                onclick="removeImage(this)">×</span>
                                                            <input type="hidden" name="existing_images[]"
                                                                value="{{ $image->url }}">
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endif
                                        </div>


                                        <div id="image-previews" class="mb-3">
                                            <label class="form-label">New Image Previews:</label>
                                            <div id="output" style="display: flex; flex-wrap: wrap;"></div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="button" onclick="event_news_validate()"
                                class="btn btn-primary">Edit</button>
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

    img {
        margin-bottom: 10px;
    }
</style>
<script>
    $(document).ready(function() {

        load_jodit('content');
    })


    function previewImages(event) {
        const output = document.getElementById('output');
        output.innerHTML = ''; // Clear previous previews

        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imageContainer = document.createElement('div');
                imageContainer.className = 'image-container'; // Add class for styling

                const img = document.createElement('img');
                img.src = e.target.result;
                img.width = 100;
                img.height = 100;
                img.className = 'rounded mx-2';

                const removeIcon = document.createElement('span');
                removeIcon.className = 'remove-icon'; // Class for styling the remove icon
                removeIcon.innerHTML = '×';
                removeIcon.onclick = function() {
                    imageContainer.remove(); // Remove image container on click
                };

                imageContainer.appendChild(img);
                imageContainer.appendChild(removeIcon);
                output.appendChild(imageContainer);
            };
            reader.readAsDataURL(files[i]);
        }
    }

    function removeImage(element) {
        element.parentElement.remove(); // Remove existing image container
    }


    function event_news_validate() {
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


        $("#events_news_form").submit();
    }
</script>
