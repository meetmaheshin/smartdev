@extends('layouts.app')
@section('content')
<div class="min_60vh container mt-5">
    <div class="row">
        <div class="col-md-2 mb-4">
            <h3 class="font_26 mb-4 font_weight_600">Settings</h3>
            @include("client.settings.setting_sidebar")
        </div>
        <div class="col-md-10">
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h3 class="mb-4 font_weight_600">Change Password</h3>
            <main class="up-card">
                <form action="{{route('update-password')}}" method="POST" class="row">
                    @csrf
                    <div class="col-md-6">
                        <img src="{{asset('images/secure_pass.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 change_pass_form">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="oldPassword" id="oldPassword" type="password" placeholder="Old Password" data-sb-validations="" value="{{old('oldPassword')}}" />
                            <i class="position-absolute cursor-pointer toggle-password-login fas fa-eye-slash"></i>
                            <label for="oldPassword">Old Password</label>
                            @if($errors->has('oldPassword'))
                            <span class="error" style="color: red">{{ $errors->first('oldPassword') }}</span>
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="newPassword" type="password" placeholder="New Password" data-sb-validations="" value="{{old('newPassword')}}" />
                            <i class="position-absolute cursor-pointer toggle-password-login fas fa-eye-slash"></i>
                            <label for="newPassword">New Password</label>
                            @if($errors->has('newPassword'))
                            <span class="error" style="color: red">{{ $errors->first('newPassword') }}</span>
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="confirmPassword" type="password" placeholder="Confirm Password" data-sb-validations="" value="{{old('confirmPassword')}}" />
                            <i class="position-absolute cursor-pointer toggle-password-login fas fa-eye-slash"></i>
                            <label for="confirmPassword">Confirm Password</label>
                            @if($errors->has('confirmPassword'))
                            <span class="error" style="color: red">{{ $errors->first('confirmPassword') }}</span>
                            @endif
                        </div>
                        <div class="form-floating my-4 text-end">
                            <button class="up_green_btn font_weight_600" type="submit">Change Password</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection