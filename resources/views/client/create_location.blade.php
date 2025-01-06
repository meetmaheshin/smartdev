@extends('layouts.freelance_register')
@section('content')
<div class="container my-5">
    <div class="up-card mt-5">
        <input type="hidden" id="_token" value="{{ csrf_token() }}">
        <div class=" mb-5">
            <h1>A few last details - then you can check and publish your profile.</h1>
            <p class="mt-3 mb-5 text-muted font_15 font_weight_600">A professional profile helps attract the best freelancers for your projects. To ensure a seamless experience, all payments are handled securely through us - which is why we need your personal information.</p>
        </div>
        <div class="c_contacts_contacts_edit">
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="country">Country <span class="asterisk">*</span></label>
                        <select class="form-select" name="country" id="country" aria-label="Country">
                            @if (count($countries) > 0)
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{ $country->id }}"  data-code="{{$country->code}}" {{ ($clientInfo->country_id ?? '') == $country->id ? 'selected' : '' }}>
                                {{ $country->name }}
                            </option>
                            @endforeach
                            @endif
                        </select>
                        <div class="text-danger error" data-error="country"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="country">State <span class="asterisk">*</span></label>
                        <select class="form-select" id="country_states" aria-label="State *" name="country_states">
                            <option>Select State</option>
                        </select>
                        <div class="text-danger error" data-error="state"></div>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="country">City <span class="asterisk">*</span></label>
                        <select class="form-select" id="country_state_city" aria-label="City *" name="country_state_city">
                            <option>Select City</option>
                        </select>
                        <div class="text-danger error" data-error="city"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="phone">Phone <span class="asterisk">*</span></label>
                        <div class="phone_area form-control d-flex align-items-center">
                            <span class="country_code text-muted me-2" id="country_code">+{{$clientInfo->clientDetails->country->phonecode ?? ''}}</span>
                            <input class="border-0 w-100" id="phone" type="number" name="phone" value="{{ $clientInfo->clientDetails->phone ?? '' }}" />
                        </div>
                        <div class="text-danger error" data-error="phone"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="timeZone">Time Zone <span class="asterisk">*</span></label>
                        <select class="form-select" name="timeZone" id="timeZone" aria-label="Time Zone">
                            <option>Select Timezone</option>
                            <select class="timeZone" name="timeZone" id="timeZone" aria-label="timeZone">
                            </select>
                        </select>
                        <div class="text-danger error" data-error="timeZone"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="address">Address <span class="asterisk">*</span></label>
                        <input class="form-control" id="address" name="address" type="text" placeholder="Address" data-sb-validations="" value="{{ $clientInfo->clientDetails->address ?? '' }}" />
                        <div class="text-danger error" data-error="address"></div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label class="form-label" for="zip">Zip <span class="asterisk">*</span></label>
                        <input class="form-control" id="zip" type="text" name="zip" placeholder="Zip" data-sb-validations="" value="{{ $clientInfo->clientDetails->zip_code ?? '' }}" />
                        <div class="text-danger error" data-error="zip"></div>
                    </div>
                </div>
                <div class="mt-3">
                    <a class="back_btn text-decoration-none" href="{{route('create_client.profile')}}">Back</a>
                        <button class="up_green_btn me-4" id="companyContact">Save and Go to Dashboard</button>
                </div>
            </form>
        </div>
    </div>

    {{-- <div class="row">
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
                        <a class="back_btn text-decoration-none" href="{{route('create_client.company_details')}}">Back</a>
                        <button class="up_green_btn me-4" id="companyContact">Save and Go to Dashboard</button>
                    </div>
                </div>
        </form>
    </div> --}}

    {{-- <div class="row">
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
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="country">Country <span class="asterisk">*</span></label>
                                <select class="form-select" name="country" id="country" aria-label="Country">
                                    @if (count($countries) > 0)
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}"  data-code="{{$country->code}}" {{ ($clientInfo->country_id ?? '') == $country->id ? 'selected' : '' }}>
                                        {{ $country->name }}
                                    </option>
                                    @endforeach
                                    @endif
                                </select>
                                <div class="text-danger error" data-error="country"></div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="country">State <span class="asterisk">*</span></label>
                                <select class="form-select" id="country_states" aria-label="State *" name="country_states">
                                    <option>Select State</option>
                                </select>
                                <div class="text-danger error" data-error="state"></div>
        
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="country">City <span class="asterisk">*</span></label>
                                <select class="form-select" id="country_state_city" aria-label="City *" name="country_state_city">
                                    <option>Select City</option>
                                </select>
                                <div class="text-danger error" data-error="city"></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="zip">Zip <span class="asterisk">*</span></label>
                                <input class="form-control" id="zip" type="text" name="zip" placeholder="Zip" data-sb-validations="" value="{{ $clientInfo->clientDetails->zip_code ?? '' }}" />
                                <div class="text-danger error" data-error="zip"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="address">Address <span class="asterisk">*</span></label>
                                <input class="form-control" id="address" name="address" type="text" placeholder="Address" data-sb-validations="" value="{{ $clientInfo->clientDetails->address ?? '' }}" />
                                <div class="text-danger error" data-error="address"></div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="timeZone">Time Zone <span class="asterisk">*</span></label>
                                <select class="form-select" name="timeZone" id="timeZone" aria-label="Time Zone">
                                    <option>Select Timezone</option>
                                    <select class="timeZone" name="timeZone" id="timeZone" aria-label="timeZone">
                                    </select>
                                </select>
                                <div class="text-danger error" data-error="timeZone"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="phone">Phone <span class="asterisk">*</span></label>
                                <div class="phone_area form-control d-flex align-items-center">
                                    <span class="country_code text-muted me-2" id="country_code">+{{$clientInfo->clientDetails->country->phonecode ?? ''}}</span>
                                    <input class="border-0 w-100" id="phone" type="number" name="phone" value="{{ $clientInfo->clientDetails->phone ?? '' }}" />
                                </div>
                                <div class="text-danger error" data-error="phone"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-5 justify-content-between">
                        <a class="back_btn text-decoration-none" href="{{route('create_client.company_details')}}">Back</a>
                        <button class="up_green_btn me-4" id="companyContact">Save and Go to Dashboard</button>
                    </div>
                </div>
        </form>
    </div> --}}
    
</div>
@endsection
@section('js')
<script>

    var state = '{{$clientInfo->clientDetails->state_id ?? ""}}';
    var city = '{{$clientInfo->clientDetails->city_id ?? ""}}';
    var timezone = '{{$clientInfo->clientDetails->time_zone}}';

    // var _token = document.getElementById('_token').value;
    var _token = $('meta[name="csrf-token"]').attr('content');
    // console.log("_token",  _token);


    // store client company contact
    $("#companyContact").click(function (e) {
        e.preventDefault();
        var data = {
            // firstNameContact: $("#firstNameContact").val(),
            phone: $("#phone").val(),
            timeZone: $("#timeZone").val(),
            country: $("#country").val(),
            state: $("#country_states").val(),
            city: $("#country_state_city").val(),
            address: $("#address").val(),
            zip: $("#zip").val(),
        };
        $.ajax({
            type: "POST",
            url: "/client/company-contact",
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                window.location.href = "{{ route('clientdashboard') }}"; 
            },
            error(error) {
                console.log(error);
                $(".error").text("");
                let errors = error.responseJSON.errors;
                for (let key in errors) {
                    let errorDiv = $(`.error[data-error="${key}"]`);
                    if (errorDiv.length) {
                        errorDiv.text(errors[key][0]);
                    }
                }
            },
        });
    });
</script>
<script type="text/javascript" src="{{ asset('js/country_state_city.js') }}"></script>
@endsection
