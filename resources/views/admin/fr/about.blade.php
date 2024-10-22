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
                             <form action="{{ route('about.meta') }}" method="POST" class="mt-5 formValidation">
                                 @csrf
                                 <input type="hidden" name="language" value="french">
                                 <div class="row gy-4">
                                     <div class="col-6">

                                         <div>
                                             <label for="">Meta title</label>
                                             <input class="form-control" name="meta_title"
                                                 value="{{ old('meta_title', $about_french->meta_title ?? '') }}"></input>
                                             <p class="errMsg text-danger"></p>
                                         </div>
                                     </div>
                                     <div class="col-6">

                                         <div>
                                             <label for="">Meta Description</label>
                                             <input class="form-control" name="meta_description"
                                                 value="{{ old('meta_description', $about_french->meta_description ?? '') }}"></input>
                                             <p class="errMsg text-danger"></p>
                                         </div>
                                     </div>
                                     <div class="col-6">
                                         <div>
                                             <label for="">Canonical</label>
                                             <input class="form-control" name="canonical"
                                                 value="{{ old('canonical', $about_french->canonical ?? '') }}"></input>
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
                                 <form action="{{ route('about.section.1') }}" method="POST"
                                     class="mt-5 formValidation" enctype="multipart/form-data">
                                     @csrf
                                     <input type="hidden" name="language" value="french">
                                     <div class="row gy-4">
                                         <div class="col-6">

                                             <div class="editorOut12">
                                                 <label for="">Heading 1</label>
                                                 <input class="form-control" name="sec1_h1"
                                                     value="{{ old('sec1_h1', $about_french->sec1_h1 ?? '') }}"></input>
                                                 <p class="errMsg text-danger"></p>
                                             </div>
                                         </div>
                                         <div class="col-6">

                                             <div class="class="editorOut13>
                                                 <label for="">Heading 2</label>
                                                 <input class="form-control" name="sec1_h2"
                                                     value="{{ old('sec1_h2', $about_french->sec1_h2 ?? '') }}"></input>
                                                 <p class="errMsg text-danger"></p>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div>
                                                 <label for="banner_1_image">Banner Image</label>
                                                 <input type="file" class="form-control " name="sec1_image"
                                                     id="bannerImageInput1">

                                                 <p class="text-danger fileError"></p>
                                             </div>
                                         </div>

                                         <div class="col-12">
                                             @if ($about_french && $about_french->sec1_image)
                                                 <img src="{{ asset('storage/' . $about_french->sec1_image) }}"
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
                             data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                             About us section
                         </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                         <div class="accordion-body">

                             <div class="">

                                 <form action="{{ route('about.section.2') }}" method="POST"
                                     class="mt-5 formValidation2" enctype="multipart/form-data">
                                     @csrf
                                     <input type="hidden" name="language" value="french">
                                     <div class="row gy-4">
                                         <div class="col-6">

                                             <div class="editorOut10">
                                                 <label for="">Heading 1</label>
                                                 <input class="form-control" name="sec2_h1"
                                                     value="{{ old('sec2_h1', $about_french->sec2_h1 ?? '') }}"></input>
                                                 <p class="errMsg text-danger"></p>
                                             </div>
                                         </div>
                                         <div class="col-6">

                                             <div class="editorOut11">
                                                 <label for="">Heading 2</label>
                                                 <input class="form-control" name="sec2_h2"
                                                     value="{{ old('sec2_h2', $about_french->sec2_h2 ?? '') }}"></input>
                                                 <p class="errMsg text-danger"></p>
                                             </div>
                                         </div>
                                         <div class="col-12">

                                             <div class="editorOut1">
                                                 <label for="">Paragraph 1</label>
                                                 <textarea id="editor1" class="editor1" name="sec2_p1" value="">{{ old('sec2_p1', $about_french->sec2_p1 ?? '') }}</textarea>
                                                 <p class="errMsg text-danger"></p>
                                             </div>
                                         </div>
                                         <div class="col-12">

                                             <div class="editorOut1">
                                                 <label for="">Paragraph 2</label>
                                                 <textarea id="editor2" class="editor2" name="sec2_p2" value="">{{ old('sec2_p2', $about_french->sec2_p2 ?? '') }}</textarea>
                                                 <p class="errMsg text-danger"></p>
                                             </div>
                                         </div>
                                         <div class="col-12">

                                             <div class="editorOut2">
                                                 <label for="">Paragraph 2</label>
                                                 <textarea id="editor3" class="editor3 " name="sec2_p3" value="">{{ old('sec2_p3', $about_french->sec2_p3 ?? '') }}</textarea>
                                                 <p class="errMsg text-danger"></p>
                                             </div>
                                         </div>

                                         <div class="col-6">
                                             <div>
                                                 <label for="">About Image</label>
                                                 <input type="file" class="form-control " name="sec2_image"
                                                     id="sec2_image
                                                    id="imgS11">

                                                 <p class="text-danger fileError"></p>
                                             </div>
                                         </div>
                                         <div class="col-12">
                                             @if ($about_french && $about_french->sec2_image)
                                                 <img src="{{ asset('storage/' . $about_french->sec2_image) }}"
                                                     alt="" id="imgU11"
                                                     style="background-color:lightgrey; max-width: 1600px; width: 100%; height: 460px; object-fit: contain;">
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
                             data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             Our mission and Our vision
                         </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                         <div class="accordion-body">

                             <div class="">

                                 <form action="{{ route('about.section.3') }}" method="POST"
                                     class="mt-5 formValidation3" enctype="multipart/form-data">
                                     @csrf
                                     <input type="hidden" name="language" value="french">
                                     <div class="row gy-4">
                                         <div class="col-12">
                                             <div class="editorOut4">
                                                 <label for="">Heading 1</label>
                                                 <input type="text" class="form-control" name="sec3_h1"
                                                     value="{{ old('sec3_h1', $about_french->sec3_h1 ?? '') }}">
                                                 <p class="errMsg text-danger"></p>
                                             </div>

                                         </div>
                                         <div class="col-12">
                                             <div class="editorOut5">
                                                 <label for="">Heading 2</label>
                                                 <input type="text" class="form-control" name="sec3_h2"
                                                     value="{{ old('sec3_h2', $about_french->sec3_h2 ?? '') }}">
                                                 <p class="errMsg text-danger"></p>
                                             </div>

                                         </div>
                                         <div class="col-12">
                                             <div class="editorOut6">
                                                 <label for="">Paragraph 1</label>
                                                 <textarea class="editor4" name="sec3_p1" value="">{{ old('sec3_p1', $about_french->sec3_p1 ?? '') }}</textarea>
                                                 <p class="errMsg text-danger"></p>
                                             </div>

                                         </div>
                                         <div class="col-12">
                                             <div class="editorOut8">
                                                 <label for="">Heading 1</label>
                                                 <input type="text" class="form-control" name="sec3_h3"
                                                     value="{{ old('sec3_h3', $about_french->sec3_h3 ?? '') }}">
                                                 <p class="errMsg text-danger"></p>
                                             </div>

                                         </div>
                                         <div class="col-12">
                                             <div class="editorOut9">
                                                 <label for="">Heading 2</label>
                                                 <input type="text" class="form-control" name="sec3_h4"
                                                     value="{{ old('sec3_h4', $about_french->sec3_h4 ?? '') }}">
                                                 <p class="errMsg text-danger"></p>
                                             </div>

                                         </div>

                                         <div class="col-12">
                                             <div class="editorOut7">
                                                 <label for="">Paragraph 1</label>
                                                 <textarea class="editor5" name="sec3_p2" value="">{{ old('sec3_p2', $about_french->sec3_p2 ?? '') }}</textarea>
                                                 <p class="errMsg text-danger"></p>
                                             </div>

                                         </div>

                                         <div class="col-6">
                                             <div>
                                                 <label for="">About Image</label>
                                                 <input type="file" class="form-control " name="sec3_image"
                                                     id="imgS12">

                                                 <p class="text-danger fileError"></p>
                                             </div>
                                         </div>
                                         <div class="col-12">
                                             @if ($about_french && $about_french->sec3_image)
                                                 <img src="{{ asset('storage/' . $about_french->sec3_image) }}"
                                                     alt="" id="imgU12"
                                                     style="background-color:lightgrey; max-width: 1600px; width: 100%; height: 460px; object-fit: contain;">
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
             </div>
         </div>
     </div>

     {{-- <script>
        $(document).ready(function() {

            const editor1 = new Jodit('.editor1');
            const editor2 = new Jodit('.editor2');
            const editor3 = new Jodit('.editor3');
            const editor4 = new Jodit('.editor4');
            const editor5 = new Jodit('.editor5');


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

            $('.formValidation2').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if (!editor1.value.trim() || editor1.value.trim() === '<p><br></p>') {
                    $('.editorOut1 .errMsg').text('Paragraph 1 is required.');
                    valid = false;
                    console.log(editor1.value, 'ed1');
                }

                if (!editor2.value.trim() || editor2.value.trim() === '<p><br></p>') {
                    $('.editorOut2 .errMsg').text('Paragraph 2 is required.');
                    valid = false;
                    console.log(editor2.value, 'ed2');
                }

                // if (!editor3.value.trim() || editor3.value.trim() === '<p><br></p>') {
                //     $('.editorOut3 .errMsg').text('Paragraph 3 is required.');
                //     valid = false;
                //     console.log(editor3.value, 'ed3');
                // }

                // If all validations pass, submit the form
                if (valid) {
                    this.submit();
                }
            });
            $('.formValidation3').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');


                if ($(".editorOut4 input").val() == "") {
                    $(".editorOut4 input").addClass("is-invalid");
                    $(".editorOut4 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut4 input").removeClass("is-invalid");
                }

                if ($(".editorOut5 input").val() == "") {
                    $(".editorOut5 input").addClass("is-invalid");
                    $(".editorOut5 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut5 input").removeClass("is-invalid");
                }
                if ($(".editorOut8 input").val() == "") {
                    $(".editorOut8 input").addClass("is-invalid");
                    $(".editorOut8 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut8 input").removeClass("is-invalid");
                }
                if ($(".editorOut9 input").val() == "") {
                    $(".editorOut9 input").addClass("is-invalid");
                    $(".editorOut9 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut9 input").removeClass("is-invalid");
                }
                if ($(".editorOut10 input").val() == "") {
                    $(".editorOut10 input").addClass("is-invalid");
                    $(".editorOut10 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut10 input").removeClass("is-invalid");
                }
                if ($(".editorOut11 input").val() == "") {
                    $(".editorOut11 input").addClass("is-invalid");
                    $(".editorOut11 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut11 input").removeClass("is-invalid");
                }
                if ($(".editorOut12 input").val() == "") {
                    $(".editorOut12 input").addClass("is-invalid");
                    $(".editorOut12 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut12 input").removeClass("is-invalid");
                }
                if ($(".editorOut13 input").val() == "") {
                    $(".editorOut13 input").addClass("is-invalid");
                    $(".editorOut13 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut13 input").removeClass("is-invalid");
                }

                if (!editor4.value.trim() || editor4.value.trim() === '<p><br></p>') {
                    $('.editorOut6 .errMsg').text('Paragraph 1 is required.');
                    valid = false;
                }

                if (!editor5.value.trim() || editor5.value.trim() === '<p><br></p>') {
                    $('.editorOut7 .errMsg').text('Paragraph 2 is required.');
                    valid = false;
                }


                // If all validations pass, submit the form
                if (valid) {
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
            handleImageChange('#imgS11', '#imgU11');
            handleImageChange('#imgS12', '#imgU12');


        });
    </script> --}}

     <script>
         $(document).ready(function() {

             const editor1 = new Jodit('.editor1');
             const editor2 = new Jodit('.editor2');
             const editor3 = new Jodit('.editor3');
             const editor4 = new Jodit('.editor4');
             const editor5 = new Jodit('.editor5');


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
                         if ($(this).is(":text")) {
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

             $('.formValidation2').submit(function(event) {
                 event.preventDefault();

                 let valid = true;

                 $('.errMsg').text('');
                 if ($(".editorOut10 input").val() == "") {
                     $(".editorOut10 input").addClass("is-invalid");
                     $(".editorOut10 .errMsg").text('Heading is required');
                     valid = false
                 } else {
                     $(".editorOut10 input").removeClass("is-invalid");
                 }
                 if ($(".editorOut11 input").val() == "") {
                     $(".editorOut11 input").addClass("is-invalid");
                     $(".editorOut11 .errMsg").text('Heading is required');
                     valid = false
                 } else {
                     $(".editorOut11 input").removeClass("is-invalid");
                 }

                 if (!editor1.value.trim() || editor1.value.trim() === '<p><br></p>') {
                     $('.editorOut1 .errMsg').text('Paragraph 1 is required.');
                     valid = false;
                     console.log(editor1.value, 'ed1');
                 }

                 if (!editor2.value.trim() || editor2.value.trim() === '<p><br></p>') {
                     $('.editorOut2 .errMsg').text('Paragraph 2 is required.');
                     valid = false;
                     console.log(editor2.value, 'ed2');
                 }



                 // If all validations pass, submit the form
                 if (valid) {
                     this.submit();
                 }
             });
             $('.formValidation3').submit(function(event) {
                 event.preventDefault();

                 let valid = true;

                 $('.errMsg').text('');


                 if ($(".editorOut4 input").val() == "") {
                     $(".editorOut4 input").addClass("is-invalid");
                     $(".editorOut4 .errMsg").text('Heading is required');
                     valid = false
                 } else {
                    //  $(".editorOut4 input").removeClass("is-invalid");
                 }

                 if ($(".editorOut5 input").val() == "") {
                     $(".editorOut5 input").addClass("is-invalid");
                     $(".editorOut5 .errMsg").text('Heading is required');
                     valid = false
                 } else {
                     $(".editorOut5 input").removeClass("is-invalid");
                 }
                 if ($(".editorOut8 input").val() == "") {
                     $(".editorOut8 input").addClass("is-invalid");
                     $(".editorOut8 .errMsg").text('Heading is required');
                     valid = false
                 } else {
                     $(".editorOut8 input").removeClass("is-invalid");
                 }
                 if ($(".editorOut9 input").val() == "") {
                     $(".editorOut9 input").addClass("is-invalid");
                     $(".editorOut9 .errMsg").text('Heading is required');
                     valid = false
                 } else {
                     $(".editorOut9 input").removeClass("is-invalid");
                 }

                //  if ($(".editorOut12 input").val() == "") {
                //      $(".editorOut12 input").addClass("is-invalid");
                //      $(".editorOut12 .errMsg").text('Heading is required');
                //      valid = false
                //  } else {
                //      $(".editorOut12 input").removeClass("is-invalid");
                //  }
                //  if ($(".editorOut13 input").val() == "") {
                //      $(".editorOut13 input").addClass("is-invalid");
                //      $(".editorOut13 .errMsg").text('Heading is required');
                //      valid = false
                //  } else {
                //      $(".editorOut13 input").removeClass("is-invalid");
                //  }

                 if (!editor4.value.trim() || editor4.value.trim() === '<p><br></p>') {
                     $('.editorOut6 .errMsg').text('Paragraph 1 is required.');
                     valid = false;
                 }

                 if (!editor5.value.trim() || editor5.value.trim() === '<p><br></p>') {
                     $('.editorOut7 .errMsg').text('Paragraph 2 is required.');
                     valid = false;
                 }


                 // If all validations pass, submit the form
                 if (valid) {
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
             handleImageChange('#imgS11', '#imgU11');
             handleImageChange('#imgS12', '#imgU12');


         });
     </script>
 </x-admin.layouts>
