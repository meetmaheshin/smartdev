@extends('layouts.freelance_register')
@section('content')
<div class="container my-5">
    <div class="row">
        <form action="{{route('store_rate')}}" method="post">
            @csrf
            <div class="col-md-10 offset-md-1">
                <h1>Now, let's set your hourly rate.</h1>
                <p class="mt-3 mb-5 text-muted font_15 font_weight_600">Clients will see this rate on your profile and in search results once you publish your profile. You can adjust your rate every time you submit a proposal.</p>
                <div class="row">
                    <div class="col-md-7">
                        <strong class="font_weight_600 font_18">Hourly Rate</strong>
                        <div class="text-muted font_14">Total amount the client will see</div>
                    </div>
                    <div class="col-md-5 col-sm-7 col-xs-8">
                        <div class="d-flex align-items-center">
                            <div class="main_rate text-end position-relative">
                                <i class="fas fa-dollar-sign"></i>
                                <input class="text-end" placeholder="100" type="number" name="hourly_rate" id="hourly_rate" step="any" value="{{$freelancerRate->hourly_rate ?? ""}}">
                            </div>
                            <p class="m-0 ms-2">/hr</p>
                        </div>
                        @if($errors->has('hourly_rate'))
                        <span class="error px-2" style="color: red">{{ $errors->first('hourly_rate') }}</span>
                        @endif
                    </div>
                    <hr class="my-5">
                    <div class="col-md-7">
                        <strong class="font_weight_600 font_18">Service Fee</strong>
                        <div class="text-muted font_14">The Service Fee is 20% when you begin a contract with a new client. Once you bill over $500 with your client, the fee will be 10%.</div>
                    </div>
                    <div class="col-md-5 col-sm-7 col-xs-8">
                        <div class="d-flex align-items-center no_border">
                            <div class="main_rate text-end position-relative">
                                <i class="fas fa-dollar-sign"></i>
                                <input class="text-end" placeholder="-20" type="number" name="service_fee" id="service_fee" step="any" value="{{$freelancerRate->service_fee ?? ""}}">
                            </div>
                            <p class="m-0 ms-2">/hr</p>
                            @if($errors->has('service_fee'))
                            <span class="error px-2" style="color: red">{{ $errors->first('service_fee') }}</span>
                            @endif
                        </div>
                    </div>
                    <hr class="my-5">
                    <div class="col-md-7">
                        <strong class="font_weight_600 font_18">You'll receive</strong>
                        <div class="text-muted font_14">The estimated amount you'll receive after service fees</div>
                    </div>
                    <div class="col-md-5 col-sm-7 col-xs-8">
                        <div class="d-flex align-items-center">
                            <div class="main_rate text-end position-relative">
                                <i class="fas fa-dollar-sign"></i>
                                <input class="text-end" placeholder="80" type="number" name="receive_fee" id="receive_fee" step="any" value="{{$freelancerRate->receive_fee ?? ""}}">
                            </div>
                            <p class="m-0 ms-2">/hr</p>
                        </div>
                        @if($errors->has('receive_fee'))
                        <span class="error px-2" style="color: red">{{ $errors->first('receive_fee') }}</span>
                        @endif
                    </div>
                </div>
                <div class="d-flex mt-5 justify-content-between">
                    <a class="back_btn text-decoration-none" href="{{route('create_services')}}">Back</a>
                    <input type="submit" class="up_green_btn text-decoration-none" value="Next:Set your wallet">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('js/freelancer_rate.js')}}"></script>
@endsection