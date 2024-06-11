@extends('layouts.authentication')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="logo-img py-2"><img src="{{asset('images/imgpsh_fullsize_anim.png')}}" width="150px" class="img-fluid"></div>
        </div>
        
    </div>
    <div class="row w-50 mx-auto middle-box">
        <div class="border p-5 text-center rounded">
            <span><img src="{{asset('images/mail.png')}}" width="100px" class="img-fluid"></span>
            <div class="h4 my-3">Verify your email to proceed</div>
            <p class="text-muted">
                <span class="d-block">Please check your email and click on the link provided to verify your address</span>
            </p>
            <div class="verify-email-btn my-4 d-inline-block w-100">
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn align-baseline Resend-mail-btn">Resend Verification Mail</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection


