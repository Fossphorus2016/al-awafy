<x-admin.layouts>

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
                            <form action="{{ route('home.english.meta') }}" method="POST">
                                @csrf

                                <input type="hidden" name="language" value="english">

                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta title</label>
                                            <input class="form-control" name="meta_title"
                                                value="{{ $home_english->meta_title ?? '' }}"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta Description</label>
                                            <input class="form-control" name="meta_description"
                                                value="{{ $home_english->meta_description ?? '' }}"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Canonical</label>
                                            <input class="form-control" name="canonical"
                                                value="{{ $home_english->canonical ?? '' }}"></input>
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

                                <form action="{{ route('home.english.banner.1') }}" method="POST"
                                    enctype="multipart/form-data" class="mt-5 formValidation">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-6">
                                            <input type="hidden" name="language" value="english">

                                            <div>
                                                <label for="banner_1_h1">Heading 1</label>
                                                <input type="text" class="form-control" name="banner_1_h1"
                                                    value="{{ old('banner_1_h1', $home_english->banner_1_h1 ?? '') }}">
                                                @error('banner_1_h1')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_h2">Heading 2</label>
                                                <input type="text" class="form-control" name="banner_1_h2"
                                                    value="{{ old('banner_1_h2', $home_english->banner_1_h2 ?? '') }}">
                                                @error('banner_1_h2')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <label for="banner_1_p">Paragraph</label>
                                                <input type="text" class="form-control" name="banner_1_p"
                                                    value="{{ old('banner_1_p', $home_english->banner_1_p ?? '') }}">
                                                @error('banner_1_p')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label>
                                                <input type="file" class="form-control" name="banner_1_image"
                                                    id="bannerImageInput1">
                                                @error('banner_1_image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($home_english && $home_english->banner_1_image)
                                                <img src="{{ asset('storage/' . $home_english->banner_1_image) }}"
                                                    alt="Uploaded Image" id="uploadedImage1"
                                                    style="background-color:lightgrey; max-width: 950px; width: 100%; height: 450px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="uploadedImage1"
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

                                <form action="{{ route('home.english.banner.2') }}" method="POST"
                                    class="mt-5 formValidation" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="english">

                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 1</label>
                                                <input type="text" class="form-control" name="banner_2_h1"
                                                    value="{{ old('banner_2_h1', $home_english->banner_2_h1 ?? '') }}">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 2</label>
                                                <input type="text" class="form-control" name="banner_2_h2"
                                                    value="{{ old('banner_2_h2', $home_english->banner_2_h2 ?? '') }}">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control" name="banner_2_p"
                                                    value="{{ old('banner_2_p', $home_english->banner_2_p ?? '') }}">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Banner Image</label>
                                                <input type="file" class="form-control" id="bannerImageInput2"
                                                    name="banner_2_image">
                                                <p class="text-danger">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($home_english && $home_english->banner_2_image)
                                                <img src="{{ asset('storage/' . $home_english->banner_2_image) }}"
                                                    alt="Uploaded Image" id="uploadedImage2"
                                                    style="background-color:lightgrey; max-width: 950px; width: 100%; height: 450px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="uploadedImage2"
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

                                <form action="{{ route('home.english.banner.3') }}" method="POST"
                                    class="mt-5 formValidation" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="english">

                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 1</label>
                                                <input type="text" class="form-control" name="banner_3_h1"
                                                    value="{{ old('banner_3_h1', $home_english->banner_3_h1 ?? '') }}">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <label for="">Heading 2</label>
                                                <input type="text" class="form-control" name="banner_3_h2"
                                                    value="{{ old('banner_3_h2', $home_english->banner_3_h2 ?? '') }}">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph</label>
                                                <input type="text" class="form-control" name="banner_3_p"
                                                    value="{{ old('banner_3_p', $home_english->banner_3_p ?? '') }}">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Banner Image</label>
                                                <input type="file" class="form-control" id="bannerImageInput3"
                                                    name="banner_3_image">
                                                <p class="text-danger">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($home_english && $home_english->banner_3_image)
                                                <img src="{{ asset('storage/' . $home_english->banner_3_image) }}"
                                                    alt="Uploaded Image" id="uploadedImage3"
                                                    style="background-color:lightgrey; max-width: 950px; width: 100%; height: 450px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="uploadedImage3"
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
                            <form action="{{ route('home.english.about') }}" method="POST"
                                class="mt-5 formValidation" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="language" value="english" id="">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading blue</label>
                                            <input type="text" class="form-control" name="about_section_h_blue"
                                                value="{{ old('about_section_h_blue', $home_english->about_section_h_blue ?? '') }}">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading green</label>
                                            <input type="text" class="form-control" name="about_section_h_green"
                                                value="{{ old('about_section_h_green', $home_english->about_section_h_green ?? '') }}">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div>
                                            <label for="">Heading small</label>
                                            <input type="text" class="form-control" name="about_section_h_small"
                                                value="{{ old('about_section_h_small', $home_english->about_section_h_small ?? '') }}">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div>
                                            <label for="">About paragraph</label>
                                            <textarea class="editor1 noVal" name="about_section_p">{{ old('about_section_p', $home_english->about_section_p ?? '') }}</textarea>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div>
                                            <label for="">About Image</label>
                                            <input type="file" class="form-control" name="about_section_image"
                                                id="aboutImageInput1">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        @if ($home_english && $home_english->about_section_image)
                                            <img src="{{ asset('storage/' . $home_english->about_section_image) }}"
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
                                                value="{{ old('about_section_url', $home_english->about_section_url ?? '') }}">
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
                            <form action="{{ route('home.english.our.value') }}" method="POST"
                                class="mt-5 formValidation" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="language" value="english" id="">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value Title 1</label>
                                            <input class="form-control" name="our_value_1"
                                                value="{{ old('our_value_1', $home_english->our_value_1 ?? '') }}"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value</label>
                                            <input type="file" class="form-control" id="valueImageInput1"
                                                name="our_value_1_image">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        @if ($home_english && $home_english->our_value_1_image)
                                            <img src="{{ asset('storage/' . $home_english->our_value_1_image) }}"
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
                                                value="{{ old('our_value_2', $home_english->our_value_2 ?? '') }}"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value</label>
                                            <input type="file" class="form-control" name="our_value_2_image"
                                                id="valueImageInput2">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        @if ($home_english && $home_english->our_value_2_image)
                                            <img src="{{ asset('storage/' . $home_english->our_value_2_image) }}"
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
                                                value="{{ old('our_value_3', $home_english->our_value_3 ?? '') }}"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Value</label>
                                            <input type="file" class="form-control" name="our_value_3_image"
                                                id="valueImageInput3">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        @if ($home_english && $home_english->our_value_3_image)
                                            <img src="{{ asset('storage/' . $home_english->our_value_3_image) }}"
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
                            <form action="{{ route('home.english.section.6') }}" method="POST"
                                class="mt-5 formValidation">
                                @csrf
                                <input type="hidden" name="language" value="english" id="">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading 1</label>
                                            <input class="form-control" name="section_6_h1"
                                                value="{{ old('section_6_h1', $home_english->section_6_h1 ?? '') }}"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Heading 2</label>
                                            <input class="form-control" name="section_6_h2"
                                                value="{{ old('section_6_h2', $home_english->section_6_h2 ?? '') }}"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Heading 3</label>
                                            <input class="form-control" name="section_6_h3"
                                                value="{{ old('section_6_h3', $home_english->section_6_h3 ?? '') }}"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Url 1</label>
                                            <input class="form-control" name="section_6_url_1"
                                                value="{{ old('section_6_url_1', $home_english->section_6_url_1 ?? '') }}"></input>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Url 2</label>
                                            <input class="form-control" name="section_6_url_2"
                                                value="{{ old('section_6_url_2', $home_english->section_6_url_2 ?? '') }}"></input>
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

                // $(this)
                //     .find("input")
                //     .each(function() {
                //         let $inputField = $(this);
                //         let $parentDiv = $inputField.closest('div');
                //         let $errorMessage = $parentDiv.find('p');
                //         let labelText = $parentDiv.find('label').text();

                //         if ($inputField.hasClass("noVal")) {
                //             $inputField.removeClass("is-invalid");
                //             return;
                //         }

                //         // Check for file input
                //         if ($inputField.is(":file")) {
                //             if (!this.files.length) {
                //                 $inputField.addClass("is-invalid");
                //                 $errorMessage.text(labelText + " is required").css('display', 'block');
                //                 isValid = false;
                //             } else {
                //                 $inputField.removeClass("is-invalid");
                //                 $errorMessage.text('').css('display', 'none');
                //             }
                //             // Check for select input
                //         } else {
                //             if ($inputField.val().trim() === "") {
                //                 $inputField.addClass("is-invalid");
                //                 $errorMessage.text(labelText + " is required").css('display', 'block');
                //                 isValid = false;
                //             } else {
                //                 $inputField.removeClass("is-invalid");
                //                 $errorMessage.text('').css('display', 'none');
                //             }
                //         }
                //     });

                // If valid, submit the form
                if (isValid) {
                    this.submit();
                }
            });

            // If the user enters input, remove the is-invalid class


            // Phone validation to remove unnecessary characters
            // $(".formValidation .phoneVal").keydown(function(event) {
            //     const keyPressed = event.key;
            //     if (keyPressed === "+" || keyPressed === "-" || keyPressed === "e" || keyPressed === ".") {
            //         event.preventDefault();
            //     }
            // });
        });
    </script>

</x-admin.layouts>