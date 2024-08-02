@extends('layouts.authentication')

@section('content')
<div class="container-fluid password_reset_section">
    <div class="row justify-content-center">
        <div class="col-md-7 ps-0">
            <div class="login_img d-none d-md-block position-relative">
                <img src="{{asset('images/login_img.png')}}" alt="login" class="w-100 vh-100">
                <div class="logo_img position-absolute">
                    <a href="/">
                        {{-- <img src="{{asset('images/logo.png')}}" alt="logo" width="240"> --}}
                        <img src="{{asset('images/new-logo.svg')}}" alt="logo" width="240">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-5  px-4  px-lg-3 mb-4 mb-md-0 mt-5">
            <h3 class="fw-normal d-flex justify-content-center align-items-center d-md-none mb-4"><span class="color_green fw-bold">Reset Password</span>
            </h3>
            <div class="card">
                <div class="card-header color_green fw-bold d-none d-md-block">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="mb-3 color_black">Enter your email address and select send password.</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-lg-4 col-form-label fw-bold">{{ __('Email Address') }}</label>

                            <div class="col-lg-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-lg-6 offset-lg-4 col-md-12">
                                <button type="submit" class="btn btn-primary green_btn w-100">
                                    {{ __('Send Password') }}
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