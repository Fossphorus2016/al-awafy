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
                                                    id="bannerImageInput2">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($brand_alawafy && $brand_alawafy->banner_image)
                                                <img src="{{ asset('storage/' . $brand_alawafy->banner_image) }}"
                                                    alt="" id="uploadedImage2"
                                                    style="background-color:lightgrey; max-width: 1600px; width: 100%; height: 460px; object-fit: contain; display: none;">
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

                                <form action="{{ route('alawafy.section.2') }}" method="POST"
                                    class="mt-5 formValidation" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-6">

                                            <div class="editorOut1">
                                                <label for="section1_h1">Heading 1</label>
                                                <input class="form-control" name="section1_h1" id="section1_h1"
                                                    value="{{ old('section1_h1', $brand_alawafy->section1_h1 ?? '') }}"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="editorOut2">
                                                <label for=""> Heading 2</label>
                                                <input class="form-control" name="section1_h2" id="section1_h2"
                                                    value="{{ old('section1_h2', $brand_alawafy->section1_h2 ?? '') }}"></input>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="editorOut3">
                                                <label for="">Paragraph</label>
                                                <textarea name="section1_p" class="form-control" id="section1_p" cols="1" rows="1">{{ old('section1_p', $brand_alawafy->section1_p ?? '') }}</textarea>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label>
                                                <input type="file" class="form-control " name="section1_image"
                                                    id="bannerImageInput1">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if ($brand_alawafy && $brand_alawafy->section1_image)
                                                <img src="{{asset('storage/'.$brand_alawafy->section1_image)}}" alt="" id="uploadedImage1"
                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain; display: none;">
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
                                                <form action="{{route('alawafy.item.1')}}" method="POST" enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_1_h1" id="brand_1_h1" value="{{old('brand_1_h1',$brand_alawafy->brand_1_h1 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_1_h2" id="brand_1_h2" value="{{old('brand_1_h2',$brand_alawafy->brand_1_h2 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_1_p" class="form-control" id="brand_1_p" cols="1" rows="1">{{old('brand_1_p',$brand_alawafy->brand_1_p ?? '')}}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_1_url" id="brand_1_url" value="{{old('brand_1_url',$brand_alawafy->brand_1_url ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control " name="brand_1_image" >

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_1_image)
                                                                <img src="{{asset('storage/'.$brand_alawafy->brand_1_image)}}" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain; display: none;">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse12" aria-expanded="false"
                                                aria-controls="collapse12">
                                                item 2
                                            </button>
                                        </h2>
                                        <div id="collapse12" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{route('alawafy.item.2')}}" method="POST" enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_2_h1" id="brand_2_h1" value="{{old('brand_2_h1',$brand_alawafy->brand_2_h1 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_2_h2" id="brand_2_h2" value="{{old('brand_2_h2',$brand_alawafy->brand_2_h2 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_2_p" class="form-control" id="brand_2_p" cols="1" rows="1">{{old('brand_2_p',$brand_alawafy->brand_2_p ?? '')}}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_2_url" id="brand_2_url" value="{{old('brand_2_url',$brand_alawafy->brand_2_url ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control " name="brand_2_image" >

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_2_image)
                                                                <img src="{{asset('storage/'.$brand_alawafy->brand_2_image)}}" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain; display: none;">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse13" aria-expanded="false"
                                                aria-controls="collapse13">
                                                item 3
                                            </button>
                                        </h2>
                                        <div id="collapse13" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{route('alawafy.item.3')}}" method="POST" enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_3_h1" id="brand_3_h1" value="{{old('brand_3_h1',$brand_alawafy->brand_3_h1 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_3_h2" id="brand_3_h2" value="{{old('brand_3_h2',$brand_alawafy->brand_3_h2 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_3_p" class="form-control" id="brand_3_p" cols="1" rows="1">{{old('brand_3_p',$brand_alawafy->brand_3_p ?? '')}}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_3_url" id="brand_3_url" value="{{old('brand_3_url',$brand_alawafy->brand_3_url ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control " name="brand_3_image" >

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_3_image)
                                                                <img src="{{asset('storage/'.$brand_alawafy->brand_3_image)}}" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain; display: none;">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse14" aria-expanded="false"
                                                aria-controls="collapse14">
                                                item 4
                                            </button>
                                        </h2>
                                        <div id="collapse14" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{route('alawafy.item.4')}}" method="POST" enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_4_h1" id="brand_4_h1" value="{{old('brand_4_h1',$brand_alawafy->brand_4_h1 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_4_h2" id="brand_4_h2" value="{{old('brand_4_h2',$brand_alawafy->brand_4_h2 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_4_p" class="form-control" id="brand_4_p" cols="1" rows="1">{{old('brand_4_p',$brand_alawafy->brand_4_p ?? '')}}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_4_url" id="brand_4_url" value="{{old('brand_4_url',$brand_alawafy->brand_4_url ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control " name="brand_4_image" >

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_4_image)
                                                                <img src="{{asset('storage/'.$brand_alawafy->brand_4_image)}}" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain; display: none;">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse15" aria-expanded="false"
                                                aria-controls="collapse15">
                                                item 5
                                            </button>
                                        </h2>
                                        <div id="collapse15" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{route('alawafy.item.5')}}" method="POST" enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_5_h1" id="brand_5_h1" value="{{old('brand_5_h1',$brand_alawafy->brand_5_h1 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_5_h2" id="brand_5_h2" value="{{old('brand_5_h2',$brand_alawafy->brand_5_h2 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_5_p" class="form-control" id="brand_5_p" cols="1" rows="1">{{old('brand_5_p',$brand_alawafy->brand_5_p ?? '')}}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_5_url" id="brand_5_url" value="{{old('brand_5_url',$brand_alawafy->brand_5_url ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control " name="brand_5_image" >

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_5_image)
                                                                <img src="{{asset('storage/'.$brand_alawafy->brand_5_image)}}" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain; display: none;">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse16" aria-expanded="false"
                                                aria-controls="collapse16">
                                                item 6
                                            </button>
                                        </h2>
                                        <div id="collapse16" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{route('alawafy.item.6')}}" method="POST" enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_6_h1" id="brand_6_h1" value="{{old('brand_6_h1',$brand_alawafy->brand_6_h1 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_6_h2" id="brand_6_h2" value="{{old('brand_6_h2',$brand_alawafy->brand_6_h2 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_6_p" class="form-control" id="brand_6_p" cols="1" rows="1">{{old('brand_6_p',$brand_alawafy->brand_6_p ?? '')}}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_6_url" id="brand_6_url" value="{{old('brand_6_url',$brand_alawafy->brand_6_url ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control " name="brand_6_image" >

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_6_image)
                                                                <img src="{{asset('storage/'.$brand_alawafy->brand_6_image)}}" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain; display: none;">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse17" aria-expanded="false"
                                                aria-controls="collapse17">
                                                item 7
                                            </button>
                                        </h2>
                                        <div id="collapse17" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionBrand">
                                            <div class="accordion-body">
                                                <form action="{{route('alawafy.item.7')}}" method="POST" enctype="multipart/form-data" class="mt-5 formValidation2">
                                                    @csrf
                                                    <input type="hidden" name="language" value="english">
                                                    <div class="row gy-4">
                                                        <div class="col-6">

                                                            <div class="editorOut1">
                                                                <label for="">Heading 1</label>
                                                                <input class="form-control" name="brand_7_h1" id="brand_7_h1" value="{{old('brand_7_h1',$brand_alawafy->brand_7_h1 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Heading 2</label>
                                                                <input class="form-control" name="brand_7_h2" id="brand_7_h2" value="{{old('brand_7_h2',$brand_alawafy->brand_7_h2 ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">

                                                            <div class="editorOut3">
                                                                <label for="">Paragraph</label>
                                                                <textarea name="brand_7_p" class="form-control" id="brand_7_p" cols="1" rows="1">{{old('brand_7_p',$brand_alawafy->brand_7_p ?? '')}}</textarea>

                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">

                                                            <div class="editorOut2">
                                                                <label for="">Url</label>
                                                                <input class="form-control" name="brand_7_url" id="brand_7_url" value="{{old('brand_7_url',$brand_alawafy->brand_7_url ?? '')}}"></input>
                                                                <p class="errMsg text-danger"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div>
                                                                <label for="banner_1_image">Banner Image</label>
                                                                <input type="file" class="form-control " name="brand_7_image" >

                                                                <p class="text-danger fileError"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            @if ($brand_alawafy && $brand_alawafy->brand_7_image)
                                                                <img src="{{asset('storage/'.$brand_alawafy->brand_7_image)}}" alt=""
                                                                    style="background-color:lightgrey; max-width: 1140px; width: 100%; height: 450px; object-fit: contain; display: none;">
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

    {{-- <script>
        $(document).ready(function() {


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
                $(".fileError").text('');
                const fileInput = $("#bannerImageInput1")[0];
                if (!fileInput.files.length) {
                    isValid = false;
                    $(".fileError").text('Please upload a banner image.');
                }
                if (isValid) {
                    this.submit();
                }
            });
            $(".formValidation4").submit(function(event) {
                event.preventDefault();
                let isValid = true;

                $(this)
                    .find("input, textarea")
                    .each(function() {
                        let $inputField = $(this);
                        let $parentDiv = $inputField.closest('div');
                        let $errorMessage = $parentDiv.find('p');
                        let labelText = $parentDiv.find('label').text();

                        if ($inputField.hasClass("noVal")) {
                            $inputField.removeClass("is-invalid");
                            return;
                        }

                        // Check for file input
                        if ($inputField.is(":file")) {
                            if (!this.files.length) {
                                $inputField.addClass("is-invalid");
                                $errorMessage.text(labelText + " is required").css('display', 'block');
                                isValid = false;
                            } else {
                                $inputField.removeClass("is-invalid");
                                $errorMessage.text('').css('display', 'none');
                            }
                        } else {
                            // Check for other input or textarea
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
            handleImageChange('#activityImageInput1', '#uploadedActivityImage1');


        });
    </script> --}}
</x-admin.layouts>
