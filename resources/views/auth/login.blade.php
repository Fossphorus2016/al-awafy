@extends('layouts.app')

@section('content')
    <div class="container w-100 vh-100 d-flex justify-content-center align-items-center ">
        <div class="row justify-content-center w-100">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-center align-items-center">
                        <img alt="Logo" src="{{ URL::asset('assets/logo/logo_green.png') }}" class="w-150px py-4 d-block mx-auto">
                        {{-- <h1 class=" display-6">Sign-In</h1> --}}
                    </div>

                    <div class="card-body">

                        {{-- <img src="" alt=""> --}}
                        <form method="POST" action="{{ route('login') }}">
                            @csrf


                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-12 col-form-label  fw-bolder">{{ __('Email Address') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-12 col-form-label  fw-bolder">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-0 ">
                                <div class="col-md-12 d-flex justify-content-center ">
                                    <button type="submit" class="btn btn-primary px-19 mt-5">
                                        {{ __('Login') }}
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
