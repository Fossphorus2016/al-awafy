<x-admin.layouts title="Activity | Arabic">
    <div class="card arabicPage">
        <div class="card-body">
            <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            قسم ميتا
                        </button>
                    </h2>
                    <div id="collapseZero" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="{{ route('admin.our.activity.meta') }}" method="POST"
                                class="mt-5 formValidation">
                                @csrf
                                <input type="hidden" name="language" value="arabic">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">عنوان ميتا</label>
                                            <input class="form-control" name="meta_title"
                                                value="{{ old('meta_title', $activity_page->meta_title ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">وصف ميتا</label>
                                            <input class="form-control" name="meta_description"
                                                value="{{ old('meta_description', $activity_page->meta_description ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">الكنسي</label>
                                            <input class="form-control" name="canonical"
                                                value="{{ old('canonical', $activity_page->canonical ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">يحفظ</button>
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
                                    <input type="hidden" name="language" value="arabic">
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
                            نشاط
                        </button>
                    </h2>
                    <div id="collapseZero3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card shadow p-5 m-5 ">
                                        <div class="">
                                            <a href="{{ route('admin.our.activity.create.arabic') }}"
                                                class="btn btn-outline-danger  p-2 float-end">

                                                أضف نشاط
                                            </a>

                                        </div>

                                        <!--begin::Accordion-->



                                        <table id="table"
                                            class="table table-row-bordered table-row-gray-600 table-striped table-hover table-responsive gy-5 rounded dataTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">عنوان</th>
                                                    <th scope="col">الإجراءات</th>
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
                                                                <a href="{{ route('admin.our.activity.edit.arabic', $activity->id) }}"
                                                                    class="btn btn-outline-danger p-2">

                                                                    يحرر
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
