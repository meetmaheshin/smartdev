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
                                    
                                    <div class="col-md-2">
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
@endsection