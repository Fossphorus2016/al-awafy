<x-admin.layouts title="Home | Arabic">

    <div class="card">
        <div class="card-body">

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            Meta Section
                        </button>
                    </h2>
                    <div id="collapseZero" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="{{ route('home.meta') }}" method="POST" class="formValidation1">
                                @csrf

                                <input type="hidden" name="language" value="arabic">

                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta title</label>
                                            <input class="form-control" name="meta_title"
                                                value="{{ $home_arabic->meta_title ?? '' }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta Description</label>
                                            <input class="form-control" name="meta_description"
                                                value="{{ $home_arabic->meta_description ?? '' }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Canonical</label>
                                            <input class="form-control" name="canonical"
                                                value="{{ $home_arabic->canonical ?? '' }}"></input>
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
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Banner Section
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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

                                <form action="{{ route('home.banner.1') }}" method="POST" enctype="multipart/form-data"
                                    class="mt-5 formValidation1">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-6">
                                            <input type="hidden" name="language" value="arabic">

                                            <div>
                                                <label for="banner_1_h1">Heading 1</label>
                                                <input type="text" class="form-control" name="banner_1_h1"
                                                    value="{{ old('banner_1_h1', $home_arabic->banner_1_h1 ?? '') }}">
                                                @error('banner_1_h1')
                                                    <p class="errMsg text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_h2">Heading 2</label>
                                                <input type="text" class="form-control" name="banner_1_h2"
                                                    value="{{ old('banner_1_h2', $home_arabic->banner_1_h2 ?? '') }}">
                                                @error('banner_1_h2')
                                                    <p class="errMsg text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <label for="banner_1_p1">Paragraph 1</label>
                                                <input type="text" class="form-control" name="banner_1_p1"
                                                    value="{{ old('banner_1_p1', $home_arabic->banner_1_p1 ?? '') }}">
                                                @error('banner_1_p')
                                                    <p class="errMsg text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <label for="banner_1_p2">Paragraph 2</label>
                                                <input type="text" class="form-control" name="banner_1_p2"
                                                    value="{{ old('banner_1_p2', $home_arabic->banner_1_p2 ?? '') }}">
                                                @error('banner_1_p')
                                                    <p class="errMsg text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label><span
                                                    class="text-danger"> * Dimensions: 950 x 450</span>
                                                <input type="file" class="form-control" name="banner_1_image"
                                                    id="imgS1">
                                                @error('banner_1_image')
                                                    <p class="errMsg text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($home_arabic && $home_arabic->banner_1_image)
                                                <img src="{{ asset('storage/' . $home_arabic->banner_1_image) }}"
                                                    alt="Uploaded Image" id="imgU1"
                                                    style="background-color:lightgrey; max-width: 950px; width: 100%; height: 450px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="imgU1"
                                                    style="background-color:lightgrey; max-width: 950px; width: 100%; height: 450px; object-fit: contain;">
                                            @endif
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div class="bannerNavForm2" style="display: none">

                                <form action="{{ route('home.banner.2') }}" method="POST"
                                    class="mt-5 formValidation1" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="arabic">

                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 1</label>
                                                <input type="text" class="form-control" name="banner_2_h1"
                                                    value="{{ old('banner_2_h1', $home_arabic->banner_2_h1 ?? '') }}">
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 2</label>
                                                <input type="text" class="form-control" name="banner_2_h2"
                                                    value="{{ old('banner_2_h2', $home_arabic->banner_2_h2 ?? '') }}">
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph 1</label>
                                                <input type="text" class="form-control" name="banner_2_p1"
                                                    value="{{ old('banner_2_p1', $home_arabic->banner_2_p1 ?? '') }}">
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph 2</label>
                                                <input type="text" class="form-control" name="banner_2_p2"
                                                    value="{{ old('banner_2_p2', $home_arabic->banner_2_p2 ?? '') }}">
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Banner Image</label>
                                                <input type="file" class="form-control" id="imgS2"
                                                    name="banner_2_image">
                                                <p class="errMsg text-danger">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($home_arabic && $home_arabic->banner_2_image)
                                                <img src="{{ asset('storage/' . $home_arabic->banner_2_image) }}"
                                                    alt="Uploaded Image" id="imgU2"
                                                    style="background-color:lightgrey; max-width: 950px; width: 100%; height: 450px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="imgU2"
                                                    style="background-color:lightgrey; max-width: 950px; width: 100%; height: 450px; object-fit: contain;">
                                            @endif
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bannerNavForm3" style="display: none">

                                <form action="{{ route('home.banner.3') }}" method="POST"
                                    class="mt-5 formValidation1" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="arabic">

                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 1</label>
                                                <input type="text" class="form-control" name="banner_3_h1"
                                                    value="{{ old('banner_3_h1', $home_arabic->banner_3_h1 ?? '') }}">
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 2</label>
                                                <input type="text" class="form-control" name="banner_3_h2"
                                                    value="{{ old('banner_3_h2', $home_arabic->banner_3_h2 ?? '') }}">
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph 1</label>
                                                <input type="text" class="form-control" name="banner_3_p1"
                                                    value="{{ old('banner_3_p1', $home_arabic->banner_3_p1 ?? '') }}">
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph 2</label>
                                                <input type="text" class="form-control" name="banner_3_p2"
                                                    value="{{ old('banner_3_p2', $home_arabic->banner_3_p2 ?? '') }}">
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Banner Image</label>
                                                <input type="file" class="form-control" id="imgS3"
                                                    name="banner_3_image">
                                                <p class="errMsg text-danger">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($home_arabic && $home_arabic->banner_3_image)
                                                <img src="{{ asset('storage/' . $home_arabic->banner_3_image) }}"
                                                    alt="Uploaded Image" id="imgU3"
                                                    style="background-color:lightgrey; max-width: 950px; width: 100%; height: 450px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="imgU3"
                                                    style="background-color:lightgrey; max-width: 950px; width: 100%; height: 450px; object-fit: contain;">
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
                            About Section
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="{{ route('home.about') }}" method="POST" class="mt-5 formValidation2"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="language" value="arabic" id="">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div class="editorOut1">
                                            <label for="">Heading blue</label>
                                            <input type="text" class="form-control" name="about_section_h_blue"
                                                value="{{ old('about_section_h_blue', $home_arabic->about_section_h_blue ?? '') }}">
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div class="editorOut2">
                                            <label for="">Heading green</label>
                                            <input type="text" class="form-control" name="about_section_h_green"
                                                value="{{ old('about_section_h_green', $home_arabic->about_section_h_green ?? '') }}">
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="editorOut3">
                                            <label for="">Heading small</label>
                                            <input type="text" class="form-control" name="about_section_h_small"
                                                value="{{ old('about_section_h_small', $home_arabic->about_section_h_small ?? '') }}">
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="editorOut4">
                                            <label for="">About paragraph</label>
                                            <textarea class="editor1 noVal" name="about_section_p">{{ old('about_section_p', $home_arabic->about_section_p ?? '') }}</textarea>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div>
                                            <label for="">About Image</label>
                                            <input type="file" class="form-control" name="about_section_image"
                                                id="aboutImageInput1">
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        @if ($home_arabic && $home_arabic->about_section_image)
                                            <img src="{{ asset('storage/' . $home_arabic->about_section_image) }}"
                                                alt="Uploaded Image" id="uploadedAboutImage1"
                                                style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                        @else
                                            <img src="{{ asset('assets/images/download (4).png') }}"
                                                alt="Default Image" id="uploadedAboutImage1"
                                                style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                        @endif
                                    </div>

                                    <div class="col-12">

                                        <div>
                                            <label for="">About Url</label>
                                            <input type="text" class="form-control" name="about_section_url"
                                                value="{{ old('about_section_url', $home_arabic->about_section_url ?? '') }}">
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
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Our Values
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="{{ route('home.our.value') }}" method="POST" class="mt-5 formValidation1"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="language" value="arabic" id="">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value Heading 1</label>
                                            <input class="form-control" name="our_value_h1"
                                                value="{{ old('our_value_h1', $home_arabic->our_value_h1 ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value Heading 2</label>
                                            <input class="form-control" name="our_value_h2"
                                                value="{{ old('our_value_h2', $home_arabic->our_value_h2 ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value Title 1</label>
                                            <input class="form-control" name="our_value_1"
                                                value="{{ old('our_value_1', $home_arabic->our_value_1 ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value</label>
                                            <input type="file" class="form-control" id="valueImageInput1"
                                                name="our_value_1_image">
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        @if ($home_arabic && $home_arabic->our_value_1_image)
                                            <img src="{{ asset('storage/' . $home_arabic->our_value_1_image) }}"
                                                alt="Uploaded Image" id="uploadedAboutImage1"
                                                style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                        @else
                                            <img src="{{ asset('assets/images/download (4).png') }}"
                                                alt="Default Image" id="uploadedAboutImage1"
                                                style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                        @endif
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value Title 2</label>
                                            <input class="form-control" name="our_value_2"
                                                value="{{ old('our_value_2', $home_arabic->our_value_2 ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value</label>
                                            <input type="file" class="form-control" name="our_value_2_image"
                                                id="valueImageInput2">
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        @if ($home_arabic && $home_arabic->our_value_2_image)
                                            <img src="{{ asset('storage/' . $home_arabic->our_value_2_image) }}"
                                                alt="Uploaded Image" id="uploadedAboutImage1"
                                                style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                        @else
                                            <img src="{{ asset('assets/images/download (4).png') }}"
                                                alt="Default Image" id="uploadedAboutImage1"
                                                style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                        @endif
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value Title 3</label>
                                            <input class="form-control" name="our_value_3"
                                                value="{{ old('our_value_3', $home_arabic->our_value_3 ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value</label>
                                            <input type="file" class="form-control" name="our_value_3_image"
                                                id="valueImageInput3">
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        @if ($home_arabic && $home_arabic->our_value_3_image)
                                            <img src="{{ asset('storage/' . $home_arabic->our_value_3_image) }}"
                                                alt="Uploaded Image" id="uploadedAboutImage1"
                                                style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                        @else
                                            <img src="{{ asset('assets/images/download (4).png') }}"
                                                alt="Default Image" id="uploadedAboutImage1"
                                                style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
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

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Our Brands
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <form action="{{ route('home.our.brand') }}" method="POST"
                                class="formValidation1 pb-5">
                                @csrf

                                <input type="hidden" name="language" value="arabic">

                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Brand Heading 1</label>
                                            <input class="form-control" name="our_brand_h1"
                                                value="{{ $home_arabic->our_brand_h1 ?? '' }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Brand Heading 2</label>
                                            <input class="form-control" name="our_brand_h2"
                                                value="{{ $home_arabic->our_brand_h2 ?? '' }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
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
                                <form action="{{ route('home.our.brand_1') }}" method="POST"
                                    class="mt-5 formValidation1" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="arabic" id="">
                                    <div class="row gy-4">

                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control" name="our_brand_1"
                                                    value="{{ old('our_brand_1', $home_arabic->our_brand_1 ?? '') }}">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Image</label>
                                                <input type="file" class="form-control" name="our_brand_image_1"
                                                    id="brandImageInput1">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            @if ($home_arabic && $home_arabic->our_brand_image_1)
                                                <img src="{{ asset('storage/' . $home_arabic->our_brand_image_1) }}"
                                                    alt="Uploaded Image" id="uploadedAboutImage1"
                                                    style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="uploadedAboutImage1"
                                                    style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                            @endif

                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Logo</label>
                                                <input type="file" class="form-control" name="our_brand_logo_1"
                                                    id="brandLogoInput1">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            @if ($home_arabic && $home_arabic->our_brand_logo_1)
                                                <img src="{{ asset('storage/' . $home_arabic->our_brand_logo_1) }}"
                                                    alt="Uploaded Image" id="uploadedAboutImage1"
                                                    style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="uploadedAboutImage1"
                                                    style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                            @endif



                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="bannerNavForm2" style="display: none">

                                <form action="{{ route('home.our.brand_2') }}" method="POST"
                                    class="mt-5 formValidation1" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="arabic" id="">
                                    <div class="row gy-4">

                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control" name="our_brand_2"
                                                    value="{{ old('our_brand_2', $home_arabic->our_brand_2 ?? '') }}">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Image</label>
                                                <input type="file" class="form-control" name="our_brand_image_2"
                                                    id="brandImageInput1">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">



                                            @if ($home_arabic && $home_arabic->our_brand_image_2)
                                                <img src="{{ asset('storage/' . $home_arabic->our_brand_image_2) }}"
                                                    alt="Uploaded Image" id="uploadedAboutImage1"
                                                    style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="uploadedAboutImage1"
                                                    style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                            @endif
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Brand Logo</label>
                                                <input type="file" class="form-control" name="our_brand_logo_2"
                                                    id="brandLogoInput1">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">


                                            @if ($home_arabic && $home_arabic->our_brand_logo_2)
                                                <img src="{{ asset('storage/' . $home_arabic->our_brand_logo_2) }}"
                                                    alt="Uploaded Image" id="uploadedAboutImage1"
                                                    style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="uploadedAboutImage1"
                                                    style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="bannerNavForm3" style="display: none">
                                <form action="{{ route('home.our.brand_3') }}" method="POST"
                                    class="mt-5 formValidation" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="arabic" id="">
                                    <form action="" class="mt-5 formValidation">
                                        <div class="row gy-4">

                                            <div class="col-12">

                                                <div>
                                                    <label for="">Paragraph</label>
                                                    <input type="text" class="form-control" name="our_brand_3"
                                                        value="{{ old('our_brand_3', $home_arabic->our_brand_3 ?? '') }}">
                                                    <p class="text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-6">

                                                <div>
                                                    <label for="">Brand Image</label>
                                                    <input type="file" class="form-control"
                                                        name="our_brand_image_3" id="brandImageInput3">
                                                    <p class="text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-6">


                                                @if ($home_arabic && $home_arabic->our_brand_image_3)
                                                    <img src="{{ asset('storage/' . $home_arabic->our_brand_image_3) }}"
                                                        alt="Uploaded Image" id="uploadedAboutImage3"
                                                        style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                                @else
                                                    <img src="{{ asset('assets/images/download (4).png') }}"
                                                        alt="Default Image" id="uploadedAboutImage3"
                                                        style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                                @endif

                                            </div>
                                            <div class="col-6">

                                                <div>
                                                    <label for="">Brand Logo</label>
                                                    <input type="file" class="form-control"
                                                        name="our_brand_logo_3" id="brandLogoInput3">
                                                    <p class="text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-6">

                                                @if ($home_arabic && $home_arabic->our_brand_logo_3)
                                                    <img src="{{ asset('storage/' . $home_arabic->our_brand_logo_3) }}"
                                                        alt="Uploaded Image" id="uploadedAboutImage3"
                                                        style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
                                                @else
                                                    <img src="{{ asset('assets/images/download (4).png') }}"
                                                        alt="Default Image" id="uploadedAboutImage3"
                                                        style="background-color:lightgrey; max-width: 460px; width: 100%; height: 300px; object-fit: contain;">
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
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Section 6
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="{{ route('home.section.6') }}" method="POST"
                                class="mt-5 formValidation1">
                                @csrf
                                <input type="hidden" name="language" value="arabic" id="">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading 1</label>
                                            <input class="form-control" name="section_6_h1"
                                                value="{{ old('section_6_h1', $home_arabic->section_6_h1 ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading 2</label>
                                            <input class="form-control" name="section_6_h2"
                                                value="{{ old('section_6_h2', $home_arabic->section_6_h2 ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Heading 3</label>
                                            <input class="form-control" name="section_6_h3"
                                                value="{{ old('section_6_h3', $home_arabic->section_6_h3 ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Url 1</label>
                                            <input class="form-control" name="section_6_url_1"
                                                value="{{ old('section_6_url_1', $home_arabic->section_6_url_1 ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Url 2</label>
                                            <input class="form-control" name="section_6_url_2"
                                                value="{{ old('section_6_url_2', $home_arabic->section_6_url_2 ?? '') }}"></input>
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
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Activity</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('activity.store') }}" class="mt-5 formValidation1"
                                                enctype="multipart/form-data" method="POST">
                                                @csrf
                                                <input type="hidden" name="language" value="arabic" id="">
                                                <div class="row gy-4">
                                                    <div class="col-12">
                                                        <div>
                                                            <label for="">Heading</label>
                                                            <input class="form-control" name="heading">
                                                            <p class="errMsg text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div>
                                                            <label for="">Paragraph</label>
                                                            <textarea name="paragraph" class="form-control" cols="30" rows="10"></textarea>

                                                            <p class="errMsg text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div>
                                                            <label for="">Main Image</label>
                                                            <input type="file" name="main_image"
                                                                class="form-control" id="main_image">
                                                            <p class="errMsg text-danger"></p>
                                                        </div>
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
                                <table id="table2"
                                    class="table table-row-bordered table-row-gray-600 table-striped table-hover table-responsive gy-5 rounded dataTable">
                                    <thead>
                                        <tr>
                                            <th class="">Main Image</th>
                                            <th class="">Heading</th>
                                            <th class="">Paragraph</th>
                                            <th class="">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (is_array($activities) || $activities instanceof Countable)
                                            @if (count($activities) > 0)
                                                @foreach ($activities as $activity)
                                                    <tr>
                                                        <td id="activity_main_image_{{ $activity->id }}">
                                                            <img src="{{ asset('storage/' . $activity->main_image) }}"
                                                                width="50px" height="50px" alt="">
                                                        </td>
                                                        <td id="activity_heading_{{ $activity->id }}">
                                                            {{ $activity->heading }}</td>
                                                        <td id="activity_paragraph_{{ $activity->id }}">
                                                            {{ Str::words($activity->paragraph, 20) }}
                                                        </td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-success btn-sm editbtn"
                                                                onclick="load_section2_modal({{ $activity->id }})">
                                                                <i class="bi bi-pencil-square fs-4"></i>
                                                            </button>
                                                            <form
                                                                action="{{ route('activity.delete', $activity->id) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm">
                                                                    <i class="bi bi-trash fs-2"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="empty_modal_edit" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5"
                                                                        id="exampleModalLabel">Update</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="edit_activity{{ $activity->id }}"
                                                                        action="{{ route('activity.update', $activity->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <input type="hidden" name="activity"
                                                                            id="activity">
                                                                        <input type="hidden" name="language"
                                                                            id="language" value="arabic">
                                                                        <input type="hidden"
                                                                            id="uploaded_images_{{ $activity->id }}"
                                                                            value='@json($activity->images)' />

                                                                        <div class="mb-3">
                                                                            <label class="form-label">Heading</label>
                                                                            <input type="text" name="heading"
                                                                                id="update_heading"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Paragraph</label>
                                                                            <textarea name="paragraph" id="update_paragraph" class="form-control" cols="30" rows="10"></textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Main
                                                                                Image</label>
                                                                            <input type="file" name="main_image"
                                                                                class="form-control"
                                                                                id="update_main_image">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Current Main
                                                                                Image</label>
                                                                            <img id="current_empty_image"
                                                                                src=""
                                                                                alt="Current Main Image"
                                                                                style="max-width: 100px; display: none;">
                                                                        </div>

                                                                        <div class="mb-3"
                                                                            id="uploaded_images_container">
                                                                            <!-- Uploaded images will be displayed here -->
                                                                        </div>


                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        form="edit_activity{{ $activity->id }}"
                                                                        class="btn btn-primary">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal for Editing (inside the foreach loop) -->
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4">No cards found.</td>
                                                </tr>
                                            @endif
                                        @else
                                            <tr>
                                                <td colspan="4">No cards found.</td>
                                            </tr>
                                        @endif
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

            handleImageChange('#imgS1', '#imgU1');
            handleImageChange('#imgS2', '#imgU2');
            handleImageChange('#imgS3', '#imgU3');
            handleImageChange('#imgS4', '#imgU4');
            handleImageChange('#imgS5', '#imgU5');
            handleImageChange('#imgS6', '#imgU6');
            handleImageChange('#imgS7', '#imgU7');
            handleImageChange('#imgS8', '#imgU8');
            handleImageChange('#imgS9', '#imgU9');
            handleImageChange('#imgS10', '#imgU10');
            handleImageChange('#imgS11', '#imgU11');
            handleImageChange('#imgS12', '#imgU12');
            handleImageChange('#imgS13', '#imgU13');
            handleImageChange('#imgS14', '#imgU14');

            $(".formValidation1").submit(function(event) {
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

                if ($(".editorOut1 input").val() == "") {
                    $(".editorOut1 input").addClass("is-invalid");
                    $(".editorOut1 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut1 input").removeClass("is-invalid");
                }

                if ($(".editorOut2 input").val() == "") {
                    $(".editorOut2 input").addClass("is-invalid");
                    $(".editorOut2 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut2 input").removeClass("is-invalid");
                }
                if ($(".editorOut3 input").val() == "") {
                    $(".editorOut3 input").addClass("is-invalid");
                    $(".editorOut3 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut3 input").removeClass("is-invalid");
                }

                if (!editor.value.trim() || editor.value.trim() === '<p><br></p>') {
                    $('.editorOut4 .errMsg').text('Paragraph is required.');
                    valid = false;
                }

                if (valid) {
                    this.submit();
                }
            });

            // $(".formValidation").submit(function(event) {
            //     event.preventDefault();
            //     let isValid = true;

            //     // $(this)
            //     //     .find("input")
            //     //     .each(function() {
            //     //         let $inputField = $(this);
            //     //         let $parentDiv = $inputField.closest('div');
            //     //         let $errorMessage = $parentDiv.find('p');
            //     //         let labelText = $parentDiv.find('label').text();

            //     //         if ($inputField.hasClass("noVal")) {
            //     //             $inputField.removeClass("is-invalid");
            //     //             return;
            //     //         }

            //     //         // Check for file input
            //     //         if ($inputField.is(":file")) {
            //     //             if (!this.files.length) {
            //     //                 $inputField.addClass("is-invalid");
            //     //                 $errorMessage.text(labelText + " is required").css('display', 'block');
            //     //                 isValid = false;
            //     //             } else {
            //     //                 $inputField.removeClass("is-invalid");
            //     //                 $errorMessage.text('').css('display', 'none');
            //     //             }
            //     //             // Check for select input
            //     //         } else {
            //     //             if ($inputField.val().trim() === "") {
            //     //                 $inputField.addClass("is-invalid");
            //     //                 $errorMessage.text(labelText + " is required").css('display', 'block');
            //     //                 isValid = false;
            //     //             } else {
            //     //                 $inputField.removeClass("is-invalid");
            //     //                 $errorMessage.text('').css('display', 'none');
            //     //             }
            //     //         }
            //     //     });

            //     // If valid, submit the form
            //     if (isValid) {
            //         this.submit();
            //     }
            // });


        });

        // document.getElementById('activityImageInput').addEventListener('change', function() {
        //     const fileList = this.files;
        //     const previewContainer = document.getElementById('imagePreviews');
        //     previewContainer.innerHTML = ''; // Clear previous previews

        //     for (let i = 0; i < fileList.length; i++) {
        //         const file = fileList[i];
        //         const reader = new FileReader();

        //         reader.onload = function(e) {
        //             // Create a wrapper for the image and the remove button
        //             const imageWrapper = document.createElement('div');
        //             imageWrapper.classList.add('image-wrapper');
        //             imageWrapper.style.position = 'relative';
        //             imageWrapper.style.display = 'inline-block';
        //             imageWrapper.style.margin = '10px';

        //             const img = document.createElement('img');
        //             img.src = e.target.result;
        //             img.alt = 'Uploaded Image';
        //             img.style = 'width: 250px; height: 300px; object-fit: contain;';
        //             imageWrapper.appendChild(img);

        //             // Create the remove button
        //             const removeButton = document.createElement('button');
        //             removeButton.innerText = 'Remove';
        //             removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
        //             removeButton.style.position = 'absolute';
        //             removeButton.style.top = '5px';
        //             removeButton.style.right = '5px';

        //             removeButton.onclick = function() {
        //                 // Remove the image preview and file from the input
        //                 imageWrapper.remove();
        //                 const dataTransfer = new DataTransfer();

        //                 // Create a new FileList without the removed image
        //                 for (let j = 0; j < fileList.length; j++) {
        //                     if (fileList[j] !== file) {
        //                         dataTransfer.items.add(fileList[j]);
        //                     }
        //                 }
        //                 // Update the file input
        //                 document.getElementById('activityImageInput').files = dataTransfer.files;
        //             };

        //             imageWrapper.appendChild(removeButton);
        //             previewContainer.appendChild(imageWrapper);
        //         };

        //         reader.readAsDataURL(file);
        //     }
        // });


        function load_section2_modal(activityId) {
            // Get current values
            const heading = document.getElementById(`activity_heading_${activityId}`).innerText;
            const paragraph = document.getElementById(`activity_paragraph_${activityId}`).innerText;
            const mainImage = document.getElementById(`activity_main_image_${activityId}`).getElementsByTagName('img')[0]
                .src;

            // Populate modal fields
            document.getElementById('update_heading').value = heading;
            document.getElementById('update_paragraph').value = paragraph;
            document.getElementById('current_empty_image').src = mainImage;
            document.getElementById('current_empty_image').style.display = 'block';

            // Show the modal
            $('#empty_modal_edit').modal('show');
        }
    </script>

</x-admin.layouts>
