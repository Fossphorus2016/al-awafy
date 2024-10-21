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
                            <form action="{{ route('alawafy.meta') }}" method="POST" class="mt-5 formValidation">
                                @csrf
                                <input type="hidden" name="language" value="english">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta title</label>
                                            <input class="form-control" name="meta_title" id="meta_title"
                                                value="{{ old('meta_title', $brand_alawafy->meta_title ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta Description</label>
                                            <input class="form-control" name="meta_description" id="meta_description"
                                                value="{{ old('meta_description', $brand_alawafy->meta_description ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Canonical</label>
                                            <input class="form-control" name="canonical" id="canonical"
                                                value="{{ old('canonical', $brand_alawafy->canonical ?? '') }}"></input>
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
                                <form action="{{ route('alawafy.banner') }}" method="POST"
                                    enctype="multipart/form-data" class="mt-5 formValidation2">
                                    @csrf
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_h1">Heading 1</label>
                                                <input type="text" class="form-control " name="banner_h1"
                                                    id="banner_h1" name="banner_h1" id="banner_h1"
                                                    value="{{ old('banner_h1', $brand_alawafy->banner_h1 ?? '') }}">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_h2">Heading 2</label>
                                                <input type="text" class="form-control " name="banner_h2"
                                                    id="bannerImageInput2"
                                                    value="{{ old('banner_h2', $brand_alawafy->banner_h2 ?? '') }}">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label>
                                                <input type="file" class="form-control " name="banner_image"
                                                    id="imgS51">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            @if ($brand_alawafy && $brand_alawafy->banner_image)
                                                <img src="{{ asset('storage/' . $brand_alawafy->banner_image) }}"
                                                    alt="" id="imgU51"
                                                    style="background-color:lightgrey; max-width: 1600px; width: 100%; height: 460px; object-fit: contain; ">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="imgU51"
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
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Section 2
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="">

                                <form action="{{ route('alawafy.section.2') }}" method="POST"
                                    class="mt-5 formValidation3" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div class="editorOut91">
                                                <label for="section1_h1">Heading 1</label>
                                                <input class="form-control" name="section1_h1" id="section1_h1"
                                                    value="{{ old('section1_h1', $brand_alawafy->section1_h1 ?? '') }}"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="editorOut92">
                                                <label for=""> Heading 2</label>
                                                <input class="form-control" name="section1_h2" id="section1_h2"
                                                    value="{{ old('section1_h2', $brand_alawafy->section1_h2 ?? '') }}"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="editorOut93">
                                                <label for="">Paragraph</label>
                                                <textarea name="section1_p" class="form-control" id="section1_p" cols="7" rows="8">{{ old('section1_p', $brand_alawafy->section1_p ?? '') }}</textarea>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label>
                                                <input type="file" class="form-control " name="section1_image"
                                                    id="imgS52">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($brand_alawafy && $brand_alawafy->section1_image)
                                                <img src="{{ asset('storage/' . $brand_alawafy->section1_image) }}"
                                                    alt="" id="imgU52"
                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                            @else
                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                    alt="Default Image" id="imgU52"
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
                            Brands
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>

                                <div class="accordion" id="accordionBrand">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse11" aria-expanded="true"
                                                aria-controls="collapse11">
                                                Item 1
                                            </button>
                                        </h2>
                                        <div id="collapse11" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{ route('alawafy.item.1') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation4">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut930">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_1_h1"
                                                                    id="brand_1_h1"
                                                                    value="{{ old('brand_1_h1', $brand_alawafy->brand_1_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut94">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_1_h2"
                                                                    id="brand_1_h2"
                                                                    value="{{ old('brand_1_h2', $brand_alawafy->brand_1_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut95">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_1_p" class="form-control" id="brand_1_p" cols="7" rows="8">{{ old('brand_1_p', $brand_alawafy->brand_1_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut96">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_1_url"
                                                                    id="brand_1_url"
                                                                    value="{{ old('brand_1_url', $brand_alawafy->brand_1_url ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control "
                                                                    name="brand_1_image" id="brand_1_image">

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_1_image)
                                                                <img src="{{ asset('storage/' . $brand_alawafy->brand_1_image) }}"
                                                                    id="upload_brand_1_image" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @else
                                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                                    id="upload_brand_1_image" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @endif

                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse12"
                                                aria-expanded="false" aria-controls="collapse12">
                                                item 2
                                            </button>
                                        </h2>
                                        <div id="collapse12" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{ route('alawafy.item.2') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation5">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut97">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_2_h1"
                                                                    id="brand_2_h1"
                                                                    value="{{ old('brand_2_h1', $brand_alawafy->brand_2_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut98">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_2_h2"
                                                                    id="brand_2_h2"
                                                                    value="{{ old('brand_2_h2', $brand_alawafy->brand_2_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut99">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_2_p" class="form-control" id="brand_2_p" cols="7" rows="8">{{ old('brand_2_p', $brand_alawafy->brand_2_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut11">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_2_url"
                                                                    id="brand_2_url"
                                                                    value="{{ old('brand_2_url', $brand_alawafy->brand_2_url ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control "
                                                                    name="brand_2_image" id="brand_2_image">

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_2_image)
                                                                <img src="{{ asset('storage/' . $brand_alawafy->brand_2_image) }}"
                                                                    alt="" id="upload_brand_2_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @else
                                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                                    alt="" id="upload_brand_2_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @endif

                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse13"
                                                aria-expanded="false" aria-controls="collapse13">
                                                item 3
                                            </button>
                                        </h2>
                                        <div id="collapse13" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{ route('alawafy.item.3') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation6">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut12">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_3_h1"
                                                                    id="brand_3_h1"
                                                                    value="{{ old('brand_3_h1', $brand_alawafy->brand_3_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut13">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_3_h2"
                                                                    id="brand_3_h2"
                                                                    value="{{ old('brand_3_h2', $brand_alawafy->brand_3_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut14">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_3_p" class="form-control" id="brand_3_p" cols="7" rows="8">{{ old('brand_3_p', $brand_alawafy->brand_3_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut15">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_3_url"
                                                                    id="brand_3_url"
                                                                    value="{{ old('brand_3_url', $brand_alawafy->brand_3_url ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control "
                                                                    name="brand_3_image" id="brand_3_image">

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_3_image)
                                                                <img src="{{ asset('storage/' . $brand_alawafy->brand_3_image) }}"
                                                                    alt="" id="upload_brand_3_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @else
                                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                                    alt="" id="upload_brand_3_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @endif

                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse14"
                                                aria-expanded="false" aria-controls="collapse14">
                                                item 4
                                            </button>
                                        </h2>
                                        <div id="collapse14" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{ route('alawafy.item.4') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation7">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut16">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_4_h1"
                                                                    id="brand_4_h1"
                                                                    value="{{ old('brand_4_h1', $brand_alawafy->brand_4_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut17">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_4_h2"
                                                                    id="brand_4_h2"
                                                                    value="{{ old('brand_4_h2', $brand_alawafy->brand_4_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut18">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_4_p" class="form-control" id="brand_4_p" cols="7" rows="8">{{ old('brand_4_p', $brand_alawafy->brand_4_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut19">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_4_url"
                                                                    id="brand_4_url"
                                                                    value="{{ old('brand_4_url', $brand_alawafy->brand_4_url ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control "
                                                                    name="brand_4_image" id="brand_4_image">

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_4_image)
                                                                <img src="{{ asset('storage/' . $brand_alawafy->brand_4_image) }}"
                                                                    alt="" id="upload_brand_4_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @else
                                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                                    alt="" id="upload_brand_4_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @endif

                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse15"
                                                aria-expanded="false" aria-controls="collapse15">
                                                item 5
                                            </button>
                                        </h2>
                                        <div id="collapse15" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{ route('alawafy.item.5') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation8">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut20">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_5_h1"
                                                                    id="brand_5_h1"
                                                                    value="{{ old('brand_5_h1', $brand_alawafy->brand_5_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut21">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_5_h2"
                                                                    id="brand_5_h2"
                                                                    value="{{ old('brand_5_h2', $brand_alawafy->brand_5_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut22">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_5_p" class="form-control" id="brand_5_p" cols="7" rows="8">{{ old('brand_5_p', $brand_alawafy->brand_5_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut23">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_5_url"
                                                                    id="brand_5_url"
                                                                    value="{{ old('brand_5_url', $brand_alawafy->brand_5_url ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control "
                                                                    name="brand_5_image" id="brand_5_image">

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_5_image)
                                                                <img src="{{ asset('storage/' . $brand_alawafy->brand_5_image) }}"
                                                                    alt="" id="upload_brand_5_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @else
                                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                                    alt="" id="upload_brand_5_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @endif

                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse16"
                                                aria-expanded="false" aria-controls="collapse16">
                                                item 6
                                            </button>
                                        </h2>
                                        <div id="collapse16" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{ route('alawafy.item.6') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation9">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut24">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_6_h1"
                                                                    id="brand_6_h1"
                                                                    value="{{ old('brand_6_h1', $brand_alawafy->brand_6_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut25">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_6_h2"
                                                                    id="brand_6_h2"
                                                                    value="{{ old('brand_6_h2', $brand_alawafy->brand_6_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut26">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_6_p" class="form-control" id="brand_6_p" cols="7" rows="8">{{ old('brand_6_p', $brand_alawafy->brand_6_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut27">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_6_url"
                                                                    id="brand_6_url"
                                                                    value="{{ old('brand_6_url', $brand_alawafy->brand_6_url ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control "
                                                                    name="brand_6_image" id="brand_6_image">

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_6_image)
                                                                <img src="{{ asset('storage/' . $brand_alawafy->brand_6_image) }}"
                                                                    alt="" id="upload_brand_6_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @else
                                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                                    alt="" id="upload_brand_6_image"
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @endif

                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse17"
                                                aria-expanded="false" aria-controls="collapse17">
                                                item 7
                                            </button>
                                        </h2>
                                        <div id="collapse17" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{ route('alawafy.item.7') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation10">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut28">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_7_h1"
                                                                    id="brand_7_h1"
                                                                    value="{{ old('brand_7_h1', $brand_alawafy->brand_7_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut29">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_7_h2"
                                                                    id="brand_7_h2"
                                                                    value="{{ old('brand_7_h2', $brand_alawafy->brand_7_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut30">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_7_p" class="form-control" id="brand_7_p" cols="7" rows="8">{{ old('brand_7_p', $brand_alawafy->brand_7_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut31">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_7_url"
                                                                    id="brand_7_url"
                                                                    value="{{ old('brand_7_url', $brand_alawafy->brand_7_url ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control "
                                                                    name="brand_7_image" id="brand_7_image">

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_7_image)
                                                                <img src="{{ asset('storage/' . $brand_alawafy->brand_7_image) }}"
                                                                    id="upload_brand_7_image" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @else
                                                                <img src="{{ asset('assets/images/download (4).png') }}"
                                                                    id="upload_brand_7_image" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
                                                            @endif

                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
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
            const section1_p = Jodit.make('#section1_p');
            const brand_1_p = Jodit.make('#brand_1_p');
            const brand_2_p = Jodit.make('#brand_2_p');
            const brand_3_p = Jodit.make('#brand_3_p');
            const brand_4_p = Jodit.make('#brand_4_p');
            const brand_5_p = Jodit.make('#brand_5_p');
            const brand_6_p = Jodit.make('#brand_6_p');
            const brand_7_p = Jodit.make('#brand_7_p');


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
                $(this)
                    .find("input")
                    .each(function() {
                        if ($(this).is(":text")) {
                            if ($(this).val().trim() === "") {
                                $(this).addClass("is-invalid");
                                isValid = false;
                            } else {
                                $(this).removeClass("is-invalid");
                            }
                        }
                    });

                //if valid submit the form
                if (isValid) {
                    this.submit();
                }
            });

            $('.formValidation3').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if ($(".editorOut91 input").val() == "") {
                    $(".editorOut91 input").addClass("is-invalid");
                    $(".editorOut91 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut91 input").removeClass("is-invalid");
                }

                if ($(".editorOut92 input").val() == "") {
                    $(".editorOut92 input").addClass("is-invalid");
                    $(".editorOut92 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut92 input").removeClass("is-invalid");
                }

                if (!section1_p.value.trim() || section1_p.value.trim() === '<p><br></p>') {
                    $('.editorOut93 .errMsg').text('Paragraph 1 is required.');
                    valid = false;
                }

                if (valid) {
                    this.submit();
                }
            });

            function validationItems(input, errMsg){

            }

            $('.formValidation4').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if ($(".editorOut930 input").val() == "") {
                    $(".editorOut930 input").addClass("is-invalid");
                    $(".editorOut930 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut930 input").removeClass("is-invalid");
                }

                if ($(".editorOut94 input").val() == "") {
                    $(".editorOut94 input").addClass("is-invalid");
                    $(".editorOut94 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut94 input").removeClass("is-invalid");
                }
                if ($(".editorOut96 input").val() == "") {
                    $(".editorOut96 input").addClass("is-invalid");
                    $(".editorOut96 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut96 input").removeClass("is-invalid");
                }

                if (!brand_1_p.value.trim() || brand_1_p.value.trim() === '<p><br></p>') {
                    $('.editorOut95 .errMsg').text('Paragraph is required.');
                    valid = false;
                }

                if (valid) {
                    this.submit();
                }
            });
            $('.formValidation5').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if ($(".editorOut97 input").val() == "") {
                    $(".editorOut97 input").addClass("is-invalid");
                    $(".editorOut97 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut97 input").removeClass("is-invalid");
                }

                if ($(".editorOut98 input").val() == "") {
                    $(".editorOut98 input").addClass("is-invalid");
                    $(".editorOut98 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut98 input").removeClass("is-invalid");
                }
                if ($(".editorOut11 input").val() == "") {
                    $(".editorOut11 input").addClass("is-invalid");
                    $(".editorOut11 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut11 input").removeClass("is-invalid");
                }

                if (!brand_2_p.value.trim() || brand_2_p.value.trim() === '<p><br></p>') {
                    $('.editorOut99 .errMsg').text('Paragraph is required.');
                    valid = false;
                }

                if (valid) {
                    this.submit();
                }
            });
            $('.formValidation6').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if ($(".editorOut12 input").val() == "") {
                    $(".editorOut12 input").addClass("is-invalid");
                    $(".editorOut12 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut12 input").removeClass("is-invalid");
                }

                if ($(".editorOut13 input").val() == "") {
                    $(".editorOut13 input").addClass("is-invalid");
                    $(".editorOut13 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut13 input").removeClass("is-invalid");
                }
                if ($(".editorOut15 input").val() == "") {
                    $(".editorOut15 input").addClass("is-invalid");
                    $(".editorOut15 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut15 input").removeClass("is-invalid");
                }
                console.log('worr')

                if (!brand_3_p.value.trim() || brand_3_p.value.trim() === '<p><br></p>') {
                console.log('workinggg')

                    $('.editorOut14 .errMsg').text('Paragraph is required.');
                    valid = false;
                }

                if (valid) {
                    this.submit();
                }
            });
            $('.formValidation7').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if ($(".editorOut16 input").val() == "") {
                    $(".editorOut16 input").addClass("is-invalid");
                    $(".editorOut16 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut16 input").removeClass("is-invalid");
                }

                if ($(".editorOut17 input").val() == "") {
                    $(".editorOut17 input").addClass("is-invalid");
                    $(".editorOut17 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut17 input").removeClass("is-invalid");
                }
                if ($(".editorOut19 input").val() == "") {
                    $(".editorOut19 input").addClass("is-invalid");
                    $(".editorOut19 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut19 input").removeClass("is-invalid");
                }


                if (!brand_4_p.value.trim() || brand_4_p.value.trim() === '<p><br></p>') {


                    $('.editorOut18 .errMsg').text('Paragraph is required.');
                    valid = false;
                }

                if (valid) {
                    this.submit();
                }
            });
            $('.formValidation8').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if ($(".editorOut20 input").val() == "") {
                    $(".editorOut20 input").addClass("is-invalid");
                    $(".editorOut20 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut20 input").removeClass("is-invalid");
                }

                if ($(".editorOut21 input").val() == "") {
                    $(".editorOut21 input").addClass("is-invalid");
                    $(".editorOut21 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut21 input").removeClass("is-invalid");
                }
                if ($(".editorOut23 input").val() == "") {
                    $(".editorOut23 input").addClass("is-invalid");
                    $(".editorOut23 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut23 input").removeClass("is-invalid");
                }


                if (!brand_5_p.value.trim() || brand_5_p.value.trim() === '<p><br></p>') {


                    $('.editorOut22 .errMsg').text('Paragraph is required.');
                    valid = false;
                }

                if (valid) {
                    this.submit();
                }
            });
            $('.formValidation9').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if ($(".editorOut24 input").val() == "") {
                    $(".editorOut24 input").addClass("is-invalid");
                    $(".editorOut24 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut24 input").removeClass("is-invalid");
                }

                if ($(".editorOut25 input").val() == "") {
                    $(".editorOut25 input").addClass("is-invalid");
                    $(".editorOut25 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut25 input").removeClass("is-invalid");
                }
                if ($(".editorOut27 input").val() == "") {
                    $(".editorOut27 input").addClass("is-invalid");
                    $(".editorOut27 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut27 input").removeClass("is-invalid");
                }


                if (!brand_6_p.value.trim() || brand_6_p.value.trim() === '<p><br></p>') {


                    $('.editorOut26 .errMsg').text('Paragraph is required.');
                    valid = false;
                }

                if (valid) {
                    this.submit();
                }
            });
            $('.formValidation10').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if ($(".editorOut28 input").val() == "") {
                    $(".editorOut28 input").addClass("is-invalid");
                    $(".editorOut28 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut28 input").removeClass("is-invalid");
                }

                if ($(".editorOut29 input").val() == "") {
                    $(".editorOut29 input").addClass("is-invalid");
                    $(".editorOut29 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut29 input").removeClass("is-invalid");
                }
                if ($(".editorOut31 input").val() == "") {
                    $(".editorOut31 input").addClass("is-invalid");
                    $(".editorOut31 .errMsg").text('Content is required');
                    valid = false
                } else {
                    $(".editorOut31 input").removeClass("is-invalid");
                }


                if (!brand_7_p.value.trim() || brand_7_p.value.trim() === '<p><br></p>') {


                    $('.editorOut30 .errMsg').text('Paragraph is required.');
                    valid = false;
                }

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

            handleImageChange('#imgS51', '#imgU51');
            handleImageChange('#imgS52', '#imgU52');
            handleImageChange('#bannerImageInput2', '#uploadedImage2');
            handleImageChange('#activityImageInput1', '#uploadedActivityImage1');
            handleImageChange('#brand_1_image', '#upload_brand_1_image');
            handleImageChange('#brand_2_image', '#upload_brand_2_image');
            handleImageChange('#brand_3_image', '#upload_brand_3_image');
            handleImageChange('#brand_4_image', '#upload_brand_4_image');
            handleImageChange('#brand_5_image', '#upload_brand_5_image');
            handleImageChange('#brand_6_image', '#upload_brand_6_image');
            handleImageChange('#brand_7_image', '#upload_brand_7_image');


        });
    </script>
</x-admin.layouts>
