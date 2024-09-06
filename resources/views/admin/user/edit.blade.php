@extends('admin.layouts.commonMaster')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">User</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                    </ol>
                </nav>
            </div>
           
        </div>
        <!--end breadcrumb-->
        
        <input type="hidden" id="user_id" value="{{$user->id}}" name="user_id">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit User</h5>
                <hr/>
                <form id="project_review" method="post" enctype="multipart/form-data" class="form-control" action="{{ route('admin.user.update', ['id' => $user->id]) }}">
                    @csrf    
                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    
                                    <div class="row">
                                        <div class="d-flex my-4 justify-content-center">
                                            <div class="col-md-3 text-center avtar-upload">
                                                <div class="image-preview-container">
                                                    <div class="preview">
                                                        @if($user->profile_photo_path)
                                                            <img id="preview-selected-image" src="{{asset('/storage/images/client_profile/'.$user->profile_photo_path)}}" />
                                                        @else
                                                        <img id="preview-selected-image" src="{{asset('images/user_default.jpeg')}}" />
                                                        @endif
                                                    </div>
                                                    <label for="file-upload" class="font_14 font_weight_500"><i class="fas fa-plus me-1"></i>Upload Image</label>
                                                    <input type="file" name="filename" id="file-upload" accept="image/*" onchange="previewImage(event);"/>
                                                    <br>
                                                    @if($errors->has('filename'))
                                                        <span class="error" style="color: red">{{ $errors->first('filename') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <!-- First Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="firstname" class="form-label">First Name <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" value="{{$user->firstname}}">
                                            @error('firstname')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- Last Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="lastname" class="form-label">Last Name <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" value="{{$user->lastname}}">
                                            @error('lastname')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Phone Number -->
                                        <div class="col-md-6 mb-3">
                                            <label for="phone_no" class="form-label">Phone Number <span style="color: red">*</span></label>
                                            <input type="number" class="form-control" id="phone_no" placeholder="Enter phone Number" name="phone_no" value="{{$user->phone_no}}">
                                            @error('phone_no')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        @if($user->is_admin == 0)
                                        <!-- Title -->
                                        <div class="col-md-6 mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{$user->FreelancerProfile ? $user->FreelancerProfile->title : '' }}">
                                            @error('title')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Bio -->
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="user_profile_bio" class="form-label">Bio</label>
                                            <textarea class="form-control" id="user_profile_bio" placeholder="Enter Bio" name="user_profile_bio">{{$user->FreelancerProfile ? $user->FreelancerProfile->bio : ''}}</textarea>
                                            @error('bio')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @endif
                                    <!-- country and state -->
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">Country <span style="color: red">*</span></label>
                                                <select class="form-select" name="country_id" id="country" aria-label="Country">
                                                    @foreach($countries as $country)
                                                    <option value="{{$country->id}}" data-code="{{$country->code}}" {{$freelancerInfo->country_id == $country->id ? 'selected' : ''}}>{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('country_id')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3" id="states-section">
                                            <div class="form-group">
                                                <label class="form-label">State/Province <span style="color: red">*</span></label>
                                                <select class="form-select" name="state_id" id="country_states" aria-label="country_states">
                                                </select>
                                                @error('state_id')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- City -->
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">City <span style="color: red">*</span></label>
                                                <select class="form-select" name="city_id" id="country_state_city" aria-label="country_state_city">
                                                </select>
                                                @error('city_id')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Timezone -->
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="hidden" value="freelancerInfo" name="freelancerInfo">
                                                <label class="form-label">Time Zone <span style="color: red">*</span></label>
                                                <select class="form-select" name="time_zone" id="timeZone" aria-label="timeZone">
                                                </select>
                                                @error('time_zone')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    @if($user->is_admin == 0)

                                        
                                        <div class="row mt-3">
                                            <div class="col-md-12 d-flex justify-content-start align-items-center mb-2">
                                                <h4 style="margin-bottom: 0">Experience</h4>
                                                <button type="button" id="addRowBtn" class="btn"><i class="fas fa-plus"></i></button>
                                            </div>
                                            <div class="col-md-12">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-4">Title</th>
                                                            <th class="col-md-6">Description</th>
                                                            <th class="col-md-2">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="rowContainer">
                                                        @if(!empty($experiences))
                                                            @foreach ($experiences as $exp)
                                                                <tr>
                                                                    <td class="title">{{ $exp->title }}</td>
                                                                    <td class="description">{{ $exp->description }}</td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-sm editRowBtn showDataExp" data-id="{{$exp->id}}"><i class="fas fa-pen"></i></button>
                                                                        <button type="button" class="btn btn-sm deleteRowBtn delete-confirm" data-id="{{$exp->id}}" action="{{route('deleteExperience')}}"><i class="fas fa-trash"></i></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        
                                        <div class="row mt-3">
                                            <div class="col-md-12 d-flex justify-content-start align-items-center mb-2">
                                                <h4 style="margin-bottom: 0">Education</h4>
                                                <button type="button" id="addEduRowBtn" class="btn"><i class="fas fa-plus"></i></button>
                                            </div>
                                            <div class="col-md-12">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-4">School</th>
                                                            <th class="col-md-6">Description</th>
                                                            <th class="col-md-2">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="educationRow">
                                                        @if(!empty($education))
                                                            @foreach ($education as $edu)
                                                                <tr>
                                                                    <td class="title">{{ $edu->school }}</td>
                                                                    <td class="description">{{ $edu->description }}</td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-sm addEduRowBtn showDataEdu" data-id="{{$edu->id}}"><i class="fas fa-pen"></i></button>
                                                                        <button type="button" class="btn btn-sm deleteRowBtn delete-confirm" data-id="{{$edu->id}}" action="{{route('deleteEducation')}}"><i class="fas fa-trash"></i></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        {{-- skills --}}
                                        <div class="row mt-3">
                                            <h4>Skills</h4>
                                            <div>
                                                <div class="skills_add position-relative" style="z-index: 0">
                                                    <select class="skills_select" name="skills[]" style="width: 100%" multiple="multiple">
                                                        @foreach($selectedSkills as $selected)
                                                            <option value="{{ $selected->skill_id }}" selected>{{ $selected->skill->skills_sub }}</option>
                                                        @endforeach
                                                        @foreach($skill as $skills)
                                                            @if(!$selectedSkills->pluck('skill_id')->contains($skills->id))
                                                                <option value="{{ $skills->id }}">{{ $skills->skills_sub }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                        {{-- <span class="position-absolute top-100 end-0">Max 15 skills</span> --}}
                                                        @if($errors->has('skills'))
                                                            <div class="error" style="color: red">{{ $errors->first('skills') }}</div>
                                                        @endif
                                                </div>
                                            </div>
                                        </div>



                                        {{-- services --}}
                                        <div class="row mt-3">
                                            <h4>Services</h4>
                                            <div class="col-md-12 service_dropdown">
                                                <div class="dropdown">
                                                    <button class="btn w-100 text-start dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Select for a service
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        @if(count($services) > 0)
                                                        @foreach($services as $datas)
                                                        <li>
                                                            <span class="dropdown-item position-relative">{{$datas->title}}
                                                                <div class="form-check drop_inner position-absolute">
                                                                    @foreach($datas->specialties as $speciality)
                                                                    <div class="whole_check">
                                                                        <label role="button" class="form-check-label d-flex align-items-center" for="speciality_id_{{$speciality->id}}">
                                                                            <input role="button" id="speciality_id_{{$speciality->id}}" name="services[]" class="form-check-input m-0 me-2 service_checkbox" type="checkbox" value="{{ $speciality->id }}" data-category-id="{{$datas->id}}" data-cy="{{$speciality->title}}" data-speciality-id="{{ $speciality->id }}" @if(in_array($speciality->id,$selectedServices->pluck('speciality_id')->toArray())) checked @endif
                                                                            >
                                                                            {{$speciality->title}}
                                                                        </label>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                                <div class="position-absolute end-10"><i class="fas fa-chevron-right"></i></div>
                                                            </span>
                                                        </li>
                                                        @endforeach
                                                        @endif
                                                    </ul>
                                                    @if($errors->has('services'))
                                                    <div class="error" style="color: red">{{ $errors->first('services') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="selected_services my-3">
                                                <p></p>
                                                <div class="selected_services_show">
                                                    @if(count($selectedServices) > 0)
                                                    @foreach($selectedServices as $service)
                                                    <span class="service_badge remove_services" data-cy="{{$service->specialties[0]->title}}" data-speciality-id="{{$service->speciality_id}}" id="{{$service->speciality_id}}">{{$service->specialties[0]->title}}<i class="fas fa-times ms-2"></i></i></span>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        {{-- freelancer rates --}}
                                        <div class="row mt-3">
                                            <div class="col-md-12 d-flex justify-content-start align-items-center mb-2">
                                                <h4 style="margin-bottom: 0">Hourly Rate</h4>
                                            </div>
                                            <div class="col-md-12">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-4">Hourly Rate</th>
                                                            <th class="col-md-4">Service Fee</th>
                                                            <th class="col-md-4">Receive Fee</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="hourly_rate">
                                                                <input type="number" class="form-control" placeholder="100" type="number" name="hourly_rate" id="hourly_rate" step="any" value="{{$freelancerRate->hourly_rate ?? ""}}">
                                                                @if($errors->has('hourly_rate'))
                                                                    <span class="error px-2" style="color: red">{{ $errors->first('hourly_rate') }}</span>
                                                                @endif
                                                            </td>
                                                            <td class="service_fee">
                                                                <input type="number" class="form-control" placeholder="-20" name="service_fee" id="service_fee" step="any" value="{{$freelancerRate->service_fee ?? ""}}" readonly>
                                                                @if($errors->has('service_fee'))
                                                                    <span class="error px-2" style="color: red">{{ $errors->first('service_fee') }}</span>
                                                                @endif
                                                            </td>
                                                            <td class="receive_fee">
                                                                <input type="number" placeholder="80" class="form-control" name="receive_fee" id="receive_fee" step="any" value="{{$freelancerRate->receive_fee ?? ""}}">
                                                                @if($errors->has('receive_fee'))
                                                                    <span class="error px-2" style="color: red">{{ $errors->first('receive_fee') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        
                                    @endif
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Modal for Adding/Editing Experience-->
<div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="editModalLabel">Add Work Experience</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('storeExperience') }}" method="POST" class="my-2" id="experienceForm">
                @csrf
                <input type="hidden" id="csrfToken" name="csrfToken" value="{{ csrf_token() }}" />
                <input type="hidden" id="hiddenId" value="" name="hiddenId" />
                <div class="modal-body" style="max-height: 50vh; overflow-y: auto;">
                    <div class="my-2">
                        <div class="mb-3">
                            <label class="form-label" for="expTitle">Title <span class="asterisk">*</span></label>
                            <input class="form-control" id="expTitle" name="title" type="text" value="" placeholder="Ex: Software Engineer" />
                            <div class="text-danger error" data-error="title"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="company">Company <span class="asterisk">*</span></label>
                            <input class="form-control" id="company" name="company" type="text" placeholder="Ex: Microsoft" />
                            <div class="text-danger error" data-error="company"></div>
                        </div>
                        <div class="location_part row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="location">Location <span class="asterisk">*</span></label>
                                    <input class="form-control" id="location" name="location" type="text" value="{{ old('location') }}" placeholder="Ex: London" />
                                    <div class="text-danger error" data-error="location"></div>

                                </div>
                            </div>
                            <div class="col-md-6 country_input">
                                <label class="form-label" for="ExpCountryId">Country <span class="asterisk">*</span></label>
                                <div class="dropdown">
                                    <select class="form-select" id="ExpCountryId" name="country_id" value="{{ old('country_id') }}">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-danger error" data-error="country_id"></div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="end_date_check" name="end_date_check">
                                <label class="form-check-label" for="end_date_check">
                                    I am currently working in this role
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="date" class="col-form-label">Start Date <span class="asterisk">*</span></label>
                                    <div class="input-group date" id="start_datepicker">
                                        <input type="text" name="start_date" class="form-control date" id="start_date" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="text-danger error" data-error="start_date"></div>
                                </div>
                            </div>
                            <div class="col-md-6 end_date_input">
                                <div class="mb-3">
                                    <label for="date" class="col-form-label">End Date</label>
                                    <div class="input-group date" id="end_datepicker">
                                        <input type="text" name="end_date" class="form-control date" id="end_date" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="text-danger error" data-error="end_date"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" type="text" placeholder="Description" style="height: 10rem;"></textarea>
                            <div class="text-danger error" data-error="description"></div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="submitButton" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Education Modal -->
<div class="modal fade" id="educationModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="educationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="educationModalLabel">Add Education History</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('storeEducation')}}" method="POST" id="educationForm">
                @csrf
                <input type="hidden" id="hiddenEduId" value="" name="hiddenId" />
                <div class="modal-body" style="max-height: 50vh; overflow-y: auto;">
                    <div class="my-2">
                        <div class="mb-3">
                            <label class="form-label" for="school">School <span class="asterisk">*</span></label>
                            <input class="form-control" id="school" name="school" type="text" placeholder="Ex: Boston University" />
                            <div class="text-danger error" data-error="school"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="degree">Degree <span class="asterisk">*</span></label>
                            <input class="form-control" id="degree" name="degree" type="text" placeholder="Ex: Bachelors" />
                            <div class="text-danger error" data-error="degree"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="fieldOfStudy">Field of Study <span class="asterisk">*</span></label>
                            <input class="form-control" id="fieldOfStudy" name="fieldOfStudy" type="text" placeholder="Ex: Business" />
                            <div class="text-danger error" data-error="fieldOfStudy"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="date" class="col-form-label">Start Year <span class="asterisk">*</span></label>
                                    <div class="input-group date" id="start_year_datepicker">
                                        <input type="text" name="start_year" class="form-control date" id="start_year" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="text-danger error" data-error="start_year"></div>
                                </div>
                            </div>
                            <div class="col-md-6 end_date_input">
                                <div class="mb-3">
                                    <label for="date" class="col-form-label">End Year <span class="asterisk">*</span></label>
                                    <div class="input-group date" id="end_year_datepicker">
                                        <input type="text" name="end_year" class="form-control date" id="end_year" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="text-danger error" data-error="end_year"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control" id="educationDescription" name="description" placeholder="Describe your studies, awards, etc." style="height: 10rem;"></textarea>
                            <div class="text-danger error" data-error="description"></div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" id="submitButton" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    var state = '{{$freelancerInfo->state_id}}';
	var city = '{{$freelancerInfo->city_id}}';
	var timezone = '{{$freelancerInfo->time_zone}}';

	var _token = document.getElementById('_token').value;
</script>
<script type="text/javascript" src="{{asset('js/country_state_city.js')}}"></script>
<script type="text/javascript" src="{{asset('js/contact_info_setting.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin_user_module.js')}}"></script>
@endsection