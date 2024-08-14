@extends('layouts.app')
@section('content')
<style type="text/css">
    #progress-bar {
        width: 100%;
        background-color: #ccc;
        border-radius: 5px;
        margin-top: 10px;
    }

    #progress {
        height: 20px;
        width: 0;
        background-color: #4caf50;
        border-radius: 5px;
    }

    .hidden {
        display: none;
    }
</style>
<div class="container mt-5">
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
            <div class="alert alert-danger" role="alert" id="errorAlert" style="display:none;">
                <!-- Error messages will be shown here -->
            </div>
            <div class="alert alert-success" role="alert" id="successAlert" style="display:none;">
                <!-- Error messages will be shown here -->
            </div>
            <input type="hidden" id="_token" value="{{ csrf_token() }}">
            <main class="client_my_info">
                <h3 class="mb-4 font_weight_600">My Info</h3>
                <div class="up-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="w-100 m-0 font_weight_600">Account</h5>
                        <button class="change_c_details border-0 bg-transparent"><i class="fas fa-pen fade_edit_btn"></i></button>
                    </div>
                    <div class="d-flex my-4 justify-content-center">
                        <label for="client-user-file-upload">
                            <img class="m-0 mb-3 rounded-circle object-fit-cover" src="{{ $clientInfo->profile_photo_path ?  asset('/storage/thumbnail/client_profile/'.$clientInfo->profile_photo_path) : asset('images/user_default.jpeg') }}" id="client-user-preview-selected-image" width="145" height="145" />
                        </label>
                        <div class="text-danger error" data-error="filename"></div>
                    </div>

                    <div id="progress-bar" class="hidden">
                        <div id="progress"></div>
                    </div>
                   

                    <hr class="grey_hr_full_width">
                    <div class="client_user_details">
                        <h6 class="font_weight_600 font_14 mb-2">Full Name</h6>
                        <p class="text-muted font_14 mb-10">{{ $clientInfo->firstname . ' ' . $clientInfo->lastname }}
                        </p>
                        <label class="font_weight_600 font_14 up-label">Email</label>
                        <p class="text-muted font_14 m-0">{{ $clientInfo->email }}</p>
                    </div>
                    <div class="client_user_details_edit">
                        <form id="storeAccountInfo" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="firstName">First Name <span class="asterisk">*</span></label>
                                    <input class="form-control" id="firstName" type="text" placeholder="First Name" name="firstName" value="{{ $clientInfo->firstname }}" />
                                    <div class="text-danger error" data-error="firstName"></div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="lastName">Last Name <span class="asterisk">*</span></label>
                                    <input class="form-control" id="lastName" type="text" placeholder="Last Name" name="lastName" value="{{ $clientInfo->lastname }}" />
                                    <div class="text-danger error" data-error="lastName"></div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="email" class="form-select" aria-label="Country">Email</label>
                                    <input class="form-control" id="email" type="text" placeholder="Last Name" name="email" value="{{ $clientInfo->email }}" readonly />
                                    {{-- <div class="text-danger error" data-error="email"></div> --}}
                                </div>
                                <input type="file" id="client-user-file-upload" name="client-user-file-upload" accept="image/*" onchange="clientUserPreviewImage(event);" style="display:none;" disabled />
                                <div class="mt-3">
                                    <button class="up_green_btn me-4 details_save_btn" type="submit">Save</button>
                                    <span class="open_btn font-15 font_weight_600 bg-transparent border-0 p-2 details_cancel_btn">Cancel</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="up-card mt-5">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="w-100 m-0 font_weight_600">Company details</h5>
                        <button class="change_c_company border-0 bg-transparent"><i class="fas fa-pen fade_edit_btn"></i></button>
                    </div>
                    <div class="d-flex my-4 justify-content-center">
                        <label for="client-company-file-upload">
                            @if ($clientInfo->clientDetails->profile_photo_path ?? '')
                            <img class="m-0 mb-3 rounded-circle object-fit-cover" src="{{ asset($clientInfo->clientDetails->profile_photo_path) }}" id="client-company-preview-selected-image" width="145" height="145" />
                            @else
                            <img class="m-0 mb-3 rounded-circle object-fit-cover" src="{{ asset('images/user_default.jpeg') }}" id="client-company-preview-selected-image" width="145" height="145" />
                            @endif
                        </label>
                    </div>

                    <div class="text-danger error" data-error="client-company-file-upload"></div>
                    <hr class="grey_hr_full_width">
                    <div class="client_company_details">
                        <h6 class="font_weight_600 font_14 mb-2">Industry</h6>
                        <p class="text-muted font_14 mb-10">{{ $clientInfo->clientDetails->industry->name ?? '' }}</p>
                        <label class="font_weight_600 font_14 up-label">Size</label>
                        <p class="text-muted font_14 m-0">{{ $clientInfo->clientDetails->people ?? '' }}</p>
                    </div>
                    <div class="client_company_details_edit">
                        <form id="companyDetails" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="companyName">Company Name <span class="asterisk">*</span></label>
                                    <input class="form-control" id="companyName" name="companyName" type="text" placeholder="Company Name" value="{{ $clientInfo->clientDetails->company_name ?? '' }}" />
                                    <div class="text-danger error" data-error="companyName"></div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="website">Website <span class="asterisk">*</span></label>
                                    <input class="form-control" id="website" name="website" type="text" value="{{ $clientInfo->clientDetails->website ?? '' }}" />
                                    <div class="text-danger error" data-error="website"></div>
                                </div>
                                <input type="file" id="client-company-file-upload" name="client-company-file-upload" accept="image/*" onchange="clientCompanyPreviewImage(event);" style="display:none;" disabled />
                                <div class="col-md-9 mb-3">
                                    <label class="form-label" for="addYourIndustry">Add your industry <span class="asterisk">*</span></label>
                                    <select class="form-select" id="addYourIndustry" name="addYourIndustry" aria-label="Add your industry">
                                        <option value="">Select Industory</option>
                                        @foreach ($industries as $industry)
                                        <option value="{{ $industry->id }}" {{ ($clientInfo->clientDetails->industry_id ?? '') == $industry->id ? 'selected' : '' }}>
                                            {{ $industry->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger error" data-error="addYourIndustry"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">How many people are in your company? <span class="asterisk">*</span></label>
                                    <div class="form-check">
                                        <input class="form-check-input" id="itsJustMe" type="radio" name="people" value="Its just me" {{ ($clientInfo->clientDetails->people ?? '') == 'Its just me' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="itsJustMe">It's just me</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="29Employees" type="radio" name="people" value="2-9 employees" {{ ($clientInfo->clientDetails->people ?? '') == '2-9 employees' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="29Employees">2-9 employees</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="1099Employees" type="radio" name="people" value="10-99 employees" {{ ($clientInfo->clientDetails->people ?? '') == '10-99 employees' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="1099Employees">10-99 employees</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="1001000Employees" type="radio" name="people" value="100-1000 employees" {{ ($clientInfo->clientDetails->people ?? '') == '100-1000 employees' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="1001000Employees">100-1000
                                            employees</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="moreThan1000Employees" type="radio" name="people" value="More than 1000 employees" {{ ($clientInfo->clientDetails->people ?? '') == 'More than 1000 employees' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="moreThan1000Employees">More than 1000
                                            employees</label>
                                    </div>
                                    <div class="text-danger error" data-error="people"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tagline">Tagline <span class="asterisk">*</span></label>
                                    <input class="form-control" id="tagline" name="tagline" type="text" value="{{ $clientInfo->clientDetails->tagline ?? '' }}" placeholder="Tagline" data-sb-validations="" />
                                    <div class="text-danger error" data-error="tagline"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description <span class="asterisk">*</span></label>
                                    <input class="form-control" id="description" name="description" type="text" value="{{ $clientInfo->clientDetails->description ?? '' }}" placeholder="Description" data-sb-validations="" />
                                    <div class="text-danger error" data-error="description"></div>
                                </div>
                                <div class="mt-3">
                                    <button class="up_green_btn me-4" type="submit">Save</button>
                                    <span class="open_btn font-15 font_weight_600 bg-transparent border-0 p-2 company_details_cancel_btn">Cancel</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- company contact --}}
                <div class="up-card mt-5">
                    <div class="d-flex align-items-center justify-content-between mb-5">
                        <h5 class="w-100 m-0 font_weight_600">Company Contacts</h5>
                        <button class="c_company_contacts border-0 bg-transparent"><i class="fas fa-pen fade_edit_btn"></i></button>
                    </div>
                    <div class="client_user_details">
                        <h6 class="font_weight_600 font_14 mb-2">Owner Details</h6>
                        <p class="text-muted font_14 mb-10">&nbsp;</p>
                    </div>
                    <hr class="grey_hr_full_width">
                    <div class="client_company_contacts">
                        <div>
                            <h6 class="font_weight_600 font_14 mb-2">Time Zone</h6>
                            <p class="text-muted font_14 mb-10 timezone">{{ $clientInfo->clientDetails->time_zone ?? '' }}</p>
                        </div>
                        <hr class="grey_hr_full_width">
                        <div>
                            <h6 class="font_weight_600 font_14 mb-2">Address</h6>
                            <p class="text-muted font_14 mb-10 address">{{ $clientInfo->clientDetails->address ?? '' }}</p>
                        </div>
                    </div>
                    <div class="c_contacts_contacts_edit">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="firstNameContact">First Name <span class="asterisk">*</span></label>
                                    <input class="form-control" id="firstNameContact" type="text" placeholder="First Name" name="firstNameContact" value="{{ $clientInfo->clientDetails->firstname ?? '' }}" />
                                    <div class="text-danger error" data-error="firstNameContact"></div>

                                </div>
                            </div>
                            <div class="row">
                                {{-- country list --}}
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
                                <!-- {{-- state list --}} -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="country">State <span class="asterisk">*</span></label>
                                    <select class="form-select" id="country_states" aria-label="State *" name="country_states">
                                    </select>
                                    <div class="text-danger error" data-error="state"></div>

                                </div>
                                <!-- {{-- city list --}} -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="country">City <span class="asterisk">*</span></label>
                                    <select class="form-select" id="country_state_city" aria-label="City *" name="country_state_city">
                                        <option>Selecte City</option>
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
                                <button class="up_green_btn me-4" id="companyContact">Save</button>
                                <span class="open_btn font-15 font_weight_600 bg-transparent border-0 p-2 c_contacts_cancel_btn">Cancel</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="up-card mt-5">
                    <p class="font_14 mb-4">This is a Client account</p>
                    <div class="client_disclaimer">
                        <!-- <form action="{{route('setting.delete-account')}}" method="post">
                            @csrf
                            <input type="hidden" name="clientId" id="clientId" value="{{$clientInfo->id}}"> -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <!-- </form> -->

                        <!-- Button trigger modal -->
                        
                        Close Account
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                                <div class="modal-body">
                                    Do you want to delete the account? 
                                    <input type="hidden" name="clientId" id="clientId" value="{{$clientInfo->id}}">
                                </div>
                                <div class="modal-footer">
                                <form action="{{route('setting.delete-account')}}" method="post">
                                     @csrf
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="hidden" name="clientId" id="clientId" value="{{$clientInfo->id}}"> 
                                    <button type="submit" class="btn btn-success">Delete</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        </main>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    var state = '{{$clientInfo->clientDetails->state_id ?? ""}}';
    var city = '{{$clientInfo->clientDetails->city_id ?? ""}}';
    var timezone = '{{$clientInfo->clientDetails->time_zone}}';

    var _token = document.getElementById('_token').value;
</script>
<script type="text/javascript" src="{{ asset('js/profile_setting.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client_info.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/country_state_city.js') }}"></script>
@endsection