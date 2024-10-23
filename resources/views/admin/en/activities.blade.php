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
                                                <img alt="{{asset('storage/'.$activity_page->banner_image)}}" id="uploadedImage1"
                                                    style="background-color:lightgrey; max-width: 1600px; width: 100%; height: 460px; object-fit: contain; ">
                                            @else
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
                            Banner Section
                        </button>
                    </h2>
                    <div id="collapseZero3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card shadow p-5 m-5 ">
                                        <div class="">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Launch demo modal
                                            </button>

                                        </div>

                                        <!--begin::Accordion-->



                                        <table id="table"
                                            class="table table-row-bordered table-row-gray-600 table-striped table-hover table-responsive gy-5 rounded dataTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Page Excerpt</th>
                                                    <th scope="col">ACTIONS</th>
                                                </tr>
                                            </thead>

                                            {{-- <tbody>
                                                                    @if (count($events_news) > 0)
                                                                        @foreach ($events_news as $event_new)
                                                                            <tr>
                                                                                <td>{!! \Illuminate\Support\Str::words($event_new->title, 2) !!}</td>
                                                                                <td>{!! \Illuminate\Support\Str::words($event_new->page_excerpt,10) !!}</td>


                                                                                <td>
                                                                                    <a href="{{ route('event.news.edit', $event_new->id) }}"
                                                                                        class="btn btn-success btn-sm">
                                                                                        <i class="bi bi-pencil-square fs-4"></i>
                                                                                    </a>
                                                                                    <form
                                                                                        action="{{ route('event.news.delete', $event_new->id) }}"
                                                                                        method="POST" class="d-inline"
                                                                                        id="event_news_form_{{ $event_new->id }}">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <button type="button" class="btn btn-danger btn-sm"
                                                                                            id="b_delete_{{ $event_new->id }}"
                                                                                            onclick="event_new_delete({{ $event_new->id }})"><i
                                                                                                class="bi bi-trash fs-2"></i></button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach

                                                                    @endif

                                                                </tbody> --}}
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


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.our.activity.store') }}" id="activity_form" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="language" value="english" id="">


                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label for="title" class="form-label">Heading 1</label>
                                <input type="text" name="heading_1" id="heading_1" class="form-control">
                                <label for="error_heading_1" id="error_heading_1" class="text-danger fw-bold"
                                    style="display: none">
                                    Heading is required
                                </label>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label for="title" class="form-label">Heading 2</label>
                                <input type="text" name="heading_2" id="heading_2" class="form-control">
                                <label for="error_heading_2" id="error_heading_2" class="text-danger fw-bold"
                                    style="display: none">
                                    Heading is required
                                </label>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label for="content" class="form-label">Paragraph</label>
                                <textarea name="paragraph" id="paragraph" class="form-control" cols="10" rows="4"></textarea>
                                <label for="error_paragraph" id="error_paragraph" class="text-danger fw-bold"
                                    style="display: none">
                                    Paragraph is required
                                </label>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="images" class="form-label">Images</label>
                                <input type="file" name="images[]" id="images" class="form-control"
                                    accept="image/*" multiple onchange="previewImages()">
                                <label for="error_images" id="error_images" class="text-danger fw-bold"
                                    style="display: none">
                                    At least one image is required
                                </label>

                            </div>




                            <div id="imagePreview" class="d-flex flex-wrap"></div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="blog_validate()" class="btn btn-primary">Save changes</button>
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
    });

    function event_new_delete(eventNewId) {
        console.log(eventNewId);
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
                document.getElementById('activity_form_' + eventNewId).submit();
            }
        });
    }


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

        if ($("#paragraph").val() == "") {
            $("#paragraph").addClass("is-invalid");
            $("#error_paragraph").show();
            return;
        } else {
            $("#paragraph").removeClass("is-invalid");
            $("#error_paragraph").hide();
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
