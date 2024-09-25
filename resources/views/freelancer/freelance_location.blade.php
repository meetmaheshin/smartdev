@extends('layouts.freelance_register')
@section('content')
<div class="container mt-5">
    <div class="row">
        <input type="hidden" id="_token" value="{{ csrf_token() }}">
        <form action="{{route('store_location')}}" method="post" enctype="multipart/form-data" onsubmit="return LocationValidateForm()">
            @csrf
            <div class="col-md-10 offset-md-1">
                <h1>A few last details - then you can check and publish your profile.</h1>
                <p class="mt-3 mb-5 text-muted font_15 font_weight_600">A professional photo helps you build trust with your clients. To keep things safe and simple, they'll pay you through us - which is why we need your personal information.</p>
                <div class="row">
                    <div class="col-md-3 text-center avtar-upload">
                        <div class="image-preview-container">
                            <div class="preview">
                                @if($userDetails->profile_photo_path)
                                <img id="preview-selected-image" src="{{asset('/storage/images/client_profile/'.$userDetails->profile_photo_path)}}" />
                                @else
                                <img id="preview-selected-image" src="{{asset('images/user_default.jpeg')}}" />
                                @endif
                            </div>
                            <label for="file-upload" class="font_14 font_weight_500"><i class="fas fa-plus me-1"></i>Upload Image</label>
                            <input type="file" name="filename" id="file-upload" accept="image/*" onchange="previewImage(event);" />
                            <br>
                            <div id="filename-error" style="color: red"></div> <!-- JS validation error -->
                            @if($errors->has('filename'))
                            <span class="error" style="color: red">{{ $errors->first('filename') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8 border-left-line form_right">
                        <div class="row">
                            {{-- country list --}}
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="country">Country <span class="asterisk">*</span></label>
                                    <select class="form-select" id="country" aria-label="Country *" name="country">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $coun)
                                        <option value="{{$coun->id}}" {{ ( $coun->id == (old('country') ??$userDetails->country_id)) ? 'selected' : '' }}>{{$coun->name}}</option>
                                        @endforeach
                                    </select>
                                    <div id="country-error" style="color: red"></div> <!-- JS validation error -->
                                    @if($errors->has('country'))
                                    <span class="error" style="color: red">{{ $errors->first('country') }}</span>
                                    @endif
                                </div>
                            </div>

                            {{-- state list --}}

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="state">State <span class="asterisk">*</span></label>

                                    <select class="form-select" id="country_states" aria-label="State *" name="country_states" data-oldid="{{ Request::old()?Request::old('country_states'):'' }}">
                                    </select>
                                    <div id="state-error" style="color: red"></div> <!-- JS validation error -->
                                    @if($errors->has('country_states'))
                                    <span class="error" style="color: red">{{ $errors->first('country_states') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <div class="mb-3">
                                    <label class="form-label" for="city">City <span class="asterisk">*</span></label>
                                    <select class="form-select" id="country_state_city" aria-label="City *" name="country_state_city" data-oldid="{{ Request::old()?Request::old('country_state_city'):'' }}">

                                    </select>
                                    <div id="city-error" style="color: red"></div> <!-- JS validation error -->
                                    @if($errors->has('country_state_city'))
                                    <span class="error" style="color: red">{{ $errors->first('country_state_city') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="mb-3">
                                    <label class="form-label" for="zipPostalCode">ZIP/Postal code</label>
                                    <input class="form-control" id="zipPostalCode" type="text" name="postal_code" value="{{old('postal_code',$userDetails->postal_code)}}" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <label class="form-label" for="streetAdressesWontShowOnProfile">Street Address <span class="asterisk">*</span></label>
                                    <input class="form-control" id="streetAdressesWontShowOnProfile" type="text" name="street_address" value="{{old('street_address',$userDetails->street_adresses)}}" />
                                </div>
                                <div id="street-error" style="color: red"></div> <!-- JS validation error -->
                                @if($errors->has('street_address'))
                                <span class="error" style="color: red">{{ $errors->first('street_address') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label class="form-label" for="fornumber">Phone <span class="asterisk">*</span></label>
                                    <div class="phone_area form-control p-0 d-flex align-items-center">
                                        <span class="country_code text-muted mx-2 font_13" id="country_code"></span>
                                        <input class="border-0 w-100" id="fornumber" type="number" name="phone" value="{{old('phone',$userDetails->phone_no)}}" />
                                    </div>
                                </div>
                                <div id="phone-error" style="color: red"></div> <!-- JS validation error -->
                                @if($errors->has('phone'))
                                <span class="error" style="color: red">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-5 justify-content-between">
                        <a class="back_btn text-decoration-none" href="{{route('add_wallet')}}">Back</a>
                        <input type="submit" value="Save and Go to Dashboard" class="up_green_btn text-decoration-none">
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script>
    var state = '{{$userDetails->state_id}}';
    var city = '{{$userDetails->city_id}}';
    var _token = document.getElementById('_token').value;
</script>
<script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('js/country_state_city.js')}}"></script>

@endsection