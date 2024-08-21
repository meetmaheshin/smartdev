@extends('layouts.user_verify')

@section('content')
<div class="container mt-5 email_verify_block">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="up-card text-center">
                <div class="veri_img my-5">
                    <img src="{{asset('images/safe-mail.png')}}" width="145" height="130" alt="">
                </div>
                <div class="verify-header font_22 font_weight_600 mb-3">{{ __('Verify Your Email Address') }}</div>
                <div class="font_14 text-muted">
                    @if (session('resent'))
                    <div class="alert alert-success font_weight_500" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    
                    <a href="{{route('verification.resend.form')}}"><button type="button" class="up_green_btn font_weight_600 my-4 align-baseline">{{ __('click here to request another') }}</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection