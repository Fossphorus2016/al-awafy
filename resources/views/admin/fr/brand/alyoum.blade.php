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
                            <form action="{{ route('alyoum.meta') }}" method="POST" class="mt-5 formValidation">
                                @csrf
                                <input type="hidden" name="language" value="french">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta title</label>
                                            <input class="form-control" name="meta_title" id="meta_title"
                                                value="{{ old('meta_title', $brand_alyoum->meta_title ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta Description</label>
                                            <input class="form-control" name="meta_description" id="meta_description"
                                                value="{{ old('meta_description', $brand_alyoum->meta_description ?? '') }}"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Canonical</label>
                                            <input class="form-control" name="canonical" id="canonical"
                                                value="{{ old('canonical', $brand_alyoum->canonical ?? '') }}"></input>
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
                                <form action="{{ route('alyoum.banner') }}" method="POST"
                                    enctype="multipart/form-data" class="mt-5 formValidation2">
                                    @csrf
                                    <input type="hidden" name="language" value="french">
                                    <div class="row gy-4">
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_h1">Heading 1</label>
                                                <input type="text" class="form-control " name="banner_h1"
                                                    id="banner_h1" name="banner_h1" id="banner_h1"
                                                    value="{{ old('banner_h1', $brand_alyoum->banner_h1 ?? '') }}">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_h2">Heading 2</label>
                                                <input type="text" class="form-control " name="banner_h2"
                                                    id="bannerImageInput2"
                                                    value="{{ old('banner_h2', $brand_alyoum->banner_h2 ?? '') }}">

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
                                            @if ($brand_alyoum && $brand_alyoum->banner_image)
                                                <img src="{{ asset('storage/' . $brand_alyoum->banner_image) }}"
                                                    alt="" id="imgU51"
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
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Section 2
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="">

                                <form action="{{ route('alyoum.section.2') }}" method="POST"
                                    class="mt-5 formValidation" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="french">
                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div class="editorOut1">
                                                <label for="section1_h1">Heading 1</label>
                                                <input class="form-control" name="section1_h1" id="section1_h1"
                                                    value="{{ old('section1_h1', $brand_alyoum->section1_h1 ?? '') }}"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="editorOut2">
                                                <label for=""> Heading 2</label>
                                                <input class="form-control" name="section1_h2" id="section1_h2"
                                                    value="{{ old('section1_h2', $brand_alyoum->section1_h2 ?? '') }}"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="editorOut3">
                                                <label for="">Paragraph</label>
                                                <textarea name="section1_p" class="form-control" id="section1_p" cols="7" rows="8">{{ old('section1_p', $brand_alyoum->section1_p ?? '') }}</textarea>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label>
                                                <input type="file" class="form-control " name="section1_image"
                                                    id="section1_image">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($brand_alyoum && $brand_alyoum->section1_image)
                                                <img src="{{ asset('storage/' . $brand_alyoum->section1_image) }}"
                                                    alt="" id="upload_section1_image"
                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain;">
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
                                                <form action="{{ route('alyoum.item.1') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="french">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_1_h1"
                                                                    id="brand_1_h1"
                                                                    value="{{ old('brand_1_h1', $brand_alyoum->brand_1_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_1_h2"
                                                                    id="brand_1_h2"
                                                                    value="{{ old('brand_1_h2', $brand_alyoum->brand_1_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_1_p" class="form-control" id="brand_1_p" cols="7" rows="8">{{ old('brand_1_p', $brand_alyoum->brand_1_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_1_url"
                                                                    id="brand_1_url"
                                                                    value="{{ old('brand_1_url', $brand_alyoum->brand_1_url ?? '') }}"></input>
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
                                                            @if ($brand_alyoum && $brand_alyoum->brand_1_image)
                                                                <img src="{{ asset('storage/' . $brand_alyoum->brand_1_image) }}"
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
                                                <form action="{{ route('alyoum.item.2') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="french">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_2_h1"
                                                                    id="brand_2_h1"
                                                                    value="{{ old('brand_2_h1', $brand_alyoum->brand_2_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_2_h2"
                                                                    id="brand_2_h2"
                                                                    value="{{ old('brand_2_h2', $brand_alyoum->brand_2_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_2_p" class="form-control" id="brand_2_p" cols="7" rows="8">{{ old('brand_2_p', $brand_alyoum->brand_2_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_2_url"
                                                                    id="brand_2_url"
                                                                    value="{{ old('brand_2_url', $brand_alyoum->brand_2_url ?? '') }}"></input>
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
                                                            @if ($brand_alyoum && $brand_alyoum->brand_2_image)
                                                                <img src="{{ asset('storage/' . $brand_alyoum->brand_2_image) }}"
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
                                                <form action="{{ route('alyoum.item.3') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="french">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_3_h1"
                                                                    id="brand_3_h1"
                                                                    value="{{ old('brand_3_h1', $brand_alyoum->brand_3_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_3_h2"
                                                                    id="brand_3_h2"
                                                                    value="{{ old('brand_3_h2', $brand_alyoum->brand_3_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_3_p" class="form-control" id="brand_3_p" cols="7" rows="8">{{ old('brand_3_p', $brand_alyoum->brand_3_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_3_url"
                                                                    id="brand_3_url"
                                                                    value="{{ old('brand_3_url', $brand_alyoum->brand_3_url ?? '') }}"></input>
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
                                                            @if ($brand_alyoum && $brand_alyoum->brand_3_image)
                                                                <img src="{{ asset('storage/' . $brand_alyoum->brand_3_image) }}"
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
                                                <form action="{{ route('alyoum.item.4') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="french">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_4_h1"
                                                                    id="brand_4_h1"
                                                                    value="{{ old('brand_4_h1', $brand_alyoum->brand_4_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_4_h2"
                                                                    id="brand_4_h2"
                                                                    value="{{ old('brand_4_h2', $brand_alyoum->brand_4_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_4_p" class="form-control" id="brand_4_p" cols="7" rows="8">{{ old('brand_4_p', $brand_alyoum->brand_4_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_4_url"
                                                                    id="brand_4_url"
                                                                    value="{{ old('brand_4_url', $brand_alyoum->brand_4_url ?? '') }}"></input>
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
                                                            @if ($brand_alyoum && $brand_alyoum->brand_4_image)
                                                                <img src="{{ asset('storage/' . $brand_alyoum->brand_4_image) }}"
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
                                                <form action="{{ route('alyoum.item.5') }}" method="POST"
                                                    enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="french">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_5_h1"
                                                                    id="brand_5_h1"
                                                                    value="{{ old('brand_5_h1', $brand_alyoum->brand_5_h1 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_5_h2"
                                                                    id="brand_5_h2"
                                                                    value="{{ old('brand_5_h2', $brand_alyoum->brand_5_h2 ?? '') }}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_5_p" class="form-control" id="brand_5_p" cols="7" rows="8">{{ old('brand_5_p', $brand_alyoum->brand_5_p ?? '') }}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_5_url"
                                                                    id="brand_5_url"
                                                                    value="{{ old('brand_5_url', $brand_alyoum->brand_5_url ?? '') }}"></input>
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
                                                            @if ($brand_alyoum && $brand_alyoum->brand_5_image)
                                                                <img src="{{ asset('storage/' . $brand_alyoum->brand_5_image) }}"
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



            // $(".formValidation").submit(function(event) {
            //     event.preventDefault();
            //     let isValid = true;

            //     $(this)
            //         .find("input")
            //         .each(function() {
            //             let $inputField = $(this);
            //             let $parentDiv = $inputField.closest('div');
            //             let $errorMessage = $parentDiv.find('.errMsg');
            //             let labelText = $parentDiv.find('label').text();

            //             if ($inputField.hasClass("noVal")) {
            //                 $inputField.removeClass("is-invalid");
            //                 return;
            //             }
            //             if ($inputField.val().trim() === "") {
            //                 $inputField.addClass("is-invalid");
            //                 $errorMessage.text(labelText + " is required").css('display', 'block');
            //                 isValid = false;
            //             } else {
            //                 $inputField.removeClass("is-invalid");
            //                 $errorMessage.text('').css('display', 'none');
            //             }

            //         });
            //     if (isValid) {
            //         this.submit();
            //     }
            // });
            // $(".formValidation2").submit(function(event) {
            //     event.preventDefault();
            //     let isValid = true;
            //     $(".fileError").text('');
            //     const fileInput = $("#bannerImageInput1")[0];
            //     if (!fileInput.files.length) {
            //         isValid = false;
            //         $(".fileError").text('Please upload a banner image.');
            //     }
            //     if (isValid) {
            //         this.submit();
            //     }
            // });
            // $(".formValidation4").submit(function(event) {
            //     event.preventDefault();
            //     let isValid = true;

            //     $(this)
            //         .find("input, textarea")
            //         .each(function() {
            //             let $inputField = $(this);
            //             let $parentDiv = $inputField.closest('div');
            //             let $errorMessage = $parentDiv.find('p');
            //             let labelText = $parentDiv.find('label').text();

            //             if ($inputField.hasClass("noVal")) {
            //                 $inputField.removeClass("is-invalid");
            //                 return;
            //             }

            //             // Check for file input
            //             if ($inputField.is(":file")) {
            //                 if (!this.files.length) {
            //                     $inputField.addClass("is-invalid");
            //                     $errorMessage.text(labelText + " is required").css('display', 'block');
            //                     isValid = false;
            //                 } else {
            //                     $inputField.removeClass("is-invalid");
            //                     $errorMessage.text('').css('display', 'none');
            //                 }
            //             } else {
            //                 // Check for other input or textarea
            //                 if ($inputField.val().trim() === "") {
            //                     $inputField.addClass("is-invalid");
            //                     $errorMessage.text(labelText + " is required").css('display', 'block');
            //                     isValid = false;
            //                 } else {
            //                     $inputField.removeClass("is-invalid");
            //                     $errorMessage.text('').css('display', 'none');
            //                 }
            //             }
            //         });

            //     if (isValid) {
            //         this.submit();
            //     }
            // });

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
            handleImageChange('#bannerImageInput2', '#uploadedImage2');
            handleImageChange('#activityImageInput1', '#uploadedActivityImage1');
            handleImageChange('#section1_image', '#upload_section1_image');
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
