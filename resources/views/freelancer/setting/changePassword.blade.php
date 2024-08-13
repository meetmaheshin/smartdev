@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/profile_setting.css')}}">
@endsection
@section('content')
<section class="profile_setting min_60vh mt-5">
    <div class="container">
        <div class="row">
            @include("freelancer.setting.setting_sidebar")
            <div class="col-md-9  px-0 px-md-2">
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
                <div class="user_profile_setting_block">
                    <div class="border-grey-radius mt-5">
                        <!-- <div class="user_setting_header d-flex justify-content-between align-items-center p-4">
                            <h2 class="font_22">Change Password</h2>
                        </div> -->
                        <div class="user_setting_header_inner_block p-4">
                            <form action="{{route('setting.update-user-password')}}" method="POST" class="row">
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
                                    <div class="form-floating mb-3 text-end">
                                        <button class="up_green_btn font_weight_600" type="submit">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/profile_setting.js')}}"></script>
@endsection