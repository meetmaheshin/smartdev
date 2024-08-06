@extends('layouts.authentication')
@section('content')
<section class="signup-screen">
    <header class="p-4 d-flex justify-content-between align-items-center text-center">
        <div class="header_logo">
            <a href="{{url('/')}}">
                <img src="{{asset('images/logo.png')}}" alt="logo" width="200">
                {{-- <img src="{{asset('images/new-logo.svg')}}" alt="logo" width="200"> --}}
            </a>
        </div>
        <div class="header_right mt-4 mt-sm-4">
            <span class="me-2">Looking for work ?</span>
            <a href="javascript::void(0)" class="font_weight_600 text-decoration-none">Apply as talent</a>
        </div>
    </header>
    <div class="signup_container d-md-flex">
        <div class="sign_bg w-50 d-none d-md-block">
            <img src="{{url('images/frontend/signupbg.png')}}" alt="signup-bg" class="w-100">
        </div>
        <div class="w-50 px-sm-5 sign_up_right">
            <form method="POST" id="registration" action="{{ route('register') }}" autocomplete="off">
                @csrf
                <input type="hidden" name="is_admin" value="{{ old('is_admin') }}" id="is_admin">
                <div class="signup_content text-center">
                    <h3 class="signup_heading font_weight_600">Join as a client or Web3 Professional</h3>
                    <div class="signup_btn_box mt-4 d-xl-flex px-4 justify-content-around">
                        <input type="hidden" id="checked_on_cond" value="{{$_GET['type'] ?? ''}}">
                        <div class="btn_box p-3 me-xl-5 mb-3 mb-xl-0" data-text="client">
                            <div class="btn_box_inner d-flex justify-content-between">
                                <div class="signup_btn mb-3">
                                    <img src="{{url('images/frontend/signup_btn.png')}}" class="w-100">
                                </div>
                                <div class="signup_btn_input d-flex justify-content-center align-items-center">
                                    <label for="client" class="position-relative">
                                        <input type="radio" name="type" id="client" value="1">
                                        <span class="d-inline-block"><i class="mid_dot"></i></span>
                                    </label>
                                </div>
                            </div>
                            <p class="text-start m-0">I'm a client, hiring for a project</p>
                        </div>
                        <div class="btn_box p-3" data-text="freelancer">
                            <div class="btn_box_inner d-flex justify-content-between">
                                <div class="signup_btn mb-3">
                                    <img src="{{url('images/frontend/signup_btn.png')}}" class="w-100">
                                </div>
                                <div class="signup_btn_input d-flex justify-content-center align-items-center">
                                    <label for="freelancer" class="position-relative">
                                        <input type="radio" name="type" id="freelancer" value="0">
                                        <span class="d-inline-block"><i class="mid_dot"></i></span>
                                    </label>
                                </div>
                            </div>
                            <p class="text-start m-0">I'm a Web3 Professional, looking for work</p>
                        </div>
                    </div>
                    <div class="join_btn">
                        <a href="javascript::void(0)" class="w-75 text-decoration-none font_weight_600 d-inline-block" disabled="disabled">Create Account</a>
                    </div>
                    <div class="already_acc_btn mt-4 mt-xl-5">
                        <p>Already have an account? <a href="{{route('login')}}" class="text-decoration-none font_weight_600">Login here</a></p>
                    </div>
                </div>
                <div class="sign_up_form">
                    <h3 class="signup_heading font_weight_500 text-center my-4 pb-4  mt-md-0"></h3>
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group mb-3 mb-md-0">
                                    <label for="first" class="form-label font_weight_500 position-relative">First name</label>
                                    <input type="text" class="form-control" placeholder="First Name" name="firstname" id="first" value="{{ old('firstname') }}" autofocus>
                                    <div class="text-danger error" data-error="firstname"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last" class="form-label font_weight_500 position-relative">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last name" name="lastname" id="last" value="{{ old('lastname') }}" autofocus>
                                    <div class="text-danger error" data-error="lastname"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select mb-2 mb-md-0" aria-label="" id="country" name="country_id" value="{{ old('country_id') }}">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $data)
                                    <option value="{{$data->id}}">
                                        {{$data->name}}
                                    </option>
                                    @endforeach
                                </select>
                                <div class="text-danger error" data-error="country_id"></div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group signup_email_div mb-2 mb-md-0">
                                    <label for="email" class="form-label font_weight_500 position-relative">Work email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Work email address" value="{{ old('email') }}" autocomplete="new-password">
                                    <div class="text-danger error" data-error="email"></div>

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="password" class="form-label font_weight_500 position-relative">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}" autocomplete="new-password">
                                    <i class="position-absolute cursor-pointer toggle-password-login fas fa-eye-slash"></i>
                                </div>
                                <div class="text-danger error" data-error="password"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label font_weight_500 position-relative">Confirm Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                                    <i class="position-absolute cursor-pointer toggle-password-login fas fa-eye-slash"></i>
                                </div>
                                <div class="text-danger error" data-error="confirm_password"></div>
                            </div>
                        </div>
                        <div class="row signup_bottom_btn">
                            <div class="col-sm-12 mb-5 service_btn">
                                <label class="d-flex">
                                    <input type="checkbox" class="me-2" value="1" id="terms" name="terms">
                                    Yes, I understand and agree to the &nbsp; <i class="smart_text">Smart</i><i class="dev3_text">Dev3</i> <a href="{{url('privacy-policy')}}" target="_blank" class="text-decoration-none">&nbsp; Privacy Policy</a>
                                </label>
                                <div class="text-danger error" data-error="terms"></div>
                            </div>
                            <div class="col-sm-12">
                                <div class="create_acc_btn">
                                    <button type="submit" class="btn font_weight_600 w-100 d-flex justify-content-center align-items-center">
                                        Create my Account<span class="loader"></span>
                                    </button>
                                </div>
                                <div class="already_acc_btn text-center my-5 mb-md-0">
                                    <p>Already have an account? <a href="{{route('login')}}" class="font_weight_600 text-decoration-none">Login here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection