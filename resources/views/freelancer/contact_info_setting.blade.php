@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/contact_info_setting.css')}}">
@endsection
@section('content')
<section class="profile_contact mt-5">
	<div class="container">
		<div class="row">
			@include("freelancer.setting.setting_sidebar")
			<div class="col-md-9 px-0 px-md-2">
				<div class="alert alert-danger" role="alert" id="errorAlert" style="display:none;">
					<!-- Error messages will be shown here -->
				</div>
				<div class="alert alert-success" role="alert" id="successAlert" style="display:none;">
					<!-- Error messages will be shown here -->
				</div>
				<h2 class="font_26 mb-4 d-none d-md-block font_weight_600">Contact info</h2>
				<div class="user_contact_block fuser_account border-grey-radius mb-4 p-4 color_black">
					<div class="user_contact_header pb-4 d-flex justify-content-between">
						<h5 class="font_22 font_weight_600">Account</h5>
						<a href="javascript:void(0)" class="edit_account_icon font_14 d-flex justify-content-center align-items-center text-decoration-none">
							<i class="fa-solid fa-pen fas"></i>
						</a>
					</div>
					<div class="d-flex my-4 justify-content-center">
						<label for="freelancer-user-file-upload">
							<img class="m-0 mb-3 rounded-circle object-fit-cover" src="{{ $freelancerInfo->profile_photo_path ?  asset('/storage/thumbnail/client_profile/'.$freelancerInfo->profile_photo_path) : asset('images/user_default.jpeg') }}" id="freelance-user-preview-selected-image" width="145" height="145" />
						</label>
						<div class="text-danger error" data-error="filename"></div>
						<input type="file" id="freelancer-user-file-upload" name="freelancer-user-file-upload" accept="image/*" onchange="freelancerProfilePreviewImage(event);" style="display:none;" disabled />
					</div>
					<input type="hidden" id="_token" value="{{ csrf_token() }}">
					<div class="user_contact_edited">
						<div class="pb-3">
							<div class="user_id_label">
								<p class="font_14 font_weight_600 color_black mb-2">User ID</p>
							</div>
							<div class="user_id_name">
								<p class="font_12 m-0 user_id">{{$freelancerInfo->user_id ?? ''}}</p>
							</div>
						</div>
						<div class="pb-3">
							<div class="user_name_label">
								<p class="font_14 font_weight_600 color_black mb-2">Name</p>
							</div>
							<div class="user_contact_name">
								<p class="font_12 m-0 user_name">{{($freelancerInfo->firstname.' '.$freelancerInfo->lastname) ?? ''}}</p>
							</div>
						</div>
						<div class="pb-3">
							<div class="user_name_label">
								<p class="font_14 font_weight_600 color_black mb-2">Email</p>
							</div>
							<div class="user_contact_name">
								<p class="font_12 m-0">{{$freelancerInfo->email ?? ''}}</p>
							</div>
						</div>
						<div class="text-end">
							<form action="{{route('delete-account')}}" method="post">
								@csrf
								<input type="hidden" name="userId" id="userId" value="{{$freelancerInfo->id}}">
								<button class="color_green font_14 font_weight_500 text-decoration-none open_btn font-15 bg-transparent border-0" type="submit">Close my account</button>
							</form>
						</div>
					</div>
					<div class="user_contact_edit">
						<form id="accountInfo">
							<div class="row">
								<div class="col-sm-12 col-md-6 ">
									<div class="form-group">
										<input type="hidden" value="accountInfo" name="freelancerInfo">
										<label class="d-block font_14 font_weight_500 mb-2 mt-3">First Name</label>
										<input aria-label="First Name" type="text" maxlength="32" name="firstname" data-test="" class="" value="{{$freelancerInfo->firstname ?? ''}}">
										<div class="text-danger error" data-error="firstname"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-6 ">
									<div class="form-group">
										<label class="d-block font_14 font_weight_500 mb-2 mt-3">Last Name</label>
										<input aria-label="Last Name" type="text" maxlength="32" data-test="" class="" name="lastname" value="{{$freelancerInfo->lastname ?? ''}}">
										<div class="text-danger error" data-error="lastname"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-6 ">
									<div class="form-group">
										<label class="d-block font_14 font_weight_500 mb-2 mt-3">Email</label>
										<input aria-label="Last Name" type="email" maxlength="32" data-test="" class="" value="{{$freelancerInfo->email ?? ''}}" readonly>
									</div>
								</div>
							</div>
							<div class="user_contact_btn mt-3">
								<button class="font_weight_500" type="submit">Update</button>
								<button type="button" class="font_weight_500 cancel_btn">Cancel</button>
							</div>
						</form>
					</div>
				</div>
				<div class="user_contact_block user_location border-grey-radius mb-4 p-4 color_black">
					<div class="user_contact_header pb-4 d-flex justify-content-between">
						<h5 class="font_22 font_weight_600">Location</h5>
						<a href="javascript:void(0)" class="edit_account_icon font_14 d-flex justify-content-center align-items-center text-decoration-none">
							<i class="fa-solid fa-pen fas"></i>
						</a>
					</div>
					<div>

					</div>
					<div class="user_contact_edited">
						<div class="pb-3">
							<div class="user_id_label">
								<p class="font_14 font_weight_600 color_black mb-2">Time Zone</p>
							</div>
							<div class="user_id_name">
								<p class="font_12 m-0 location_timezone">{{$freelancerInfo->time_zone ?? ''}}</p>
							</div>
						</div>
						<div class="pb-3">
							<div class="user_id_label">
								<p class="font_14 font_weight_600 color_black mb-2">Address</p>
							</div>
							<div class="user_id_name">
								<p class="font_12 m-0 user_street_address ">{{$freelancerInfo->street_adresses ?? ''}}</p>
								<p class="font_12 m-0 user_city">{{$freelancerInfo->cities->name ?? ''}} {{$freelancerInfo->postal_code ?? ''}}</p>
								<p class="font_12 m-0 user_country">{{$freelancerInfo->country->name ?? ''}}</p>
							</div>
						</div>
						<div class="pb-3">
							<div class="user_id_label">
								<p class="font_14 font_weight_600 color_black mb-2">Phone</p>
							</div>
							<div class="user_id_phone">
								<p class="font_12 m-0" id="user_id_phone">{{!empty($freelancerInfo->phone_no) ? ('+'.$countryCode->phonecode.''.$freelancerInfo->phone_no) : '' }}</p>
							</div>
						</div>
					</div>
					<div class="user_contact_edit">
						<form id="locationInfo">
							<!--Country and States-->
							<div class="row">
								<div class="col-sm-12 col-md-6 ">
									<div class="form-group">
										<label class="d-block font_14 font_weight_500 mb-2 mt-3">Country <span class="asterisk">*</span></label>
										<select class="" name="country" id="country" aria-label="Country">
											@foreach($countries as $country)
											<option value="{{$country->id}}" data-code="{{$country->code}}" {{$freelancerInfo->country_id == $country->id ? 'selected' : ''}}>{{$country->name}}</option>
											@endforeach
										</select>
										<div class="text-danger error" data-error="country"></div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6" id="states-section">
									<label class="d-block font_14 font_weight_500 mb-2 mt-3">State/Province <span class="asterisk">*</span></label>

									<select class="country_states" name="country_states" id="country_states" aria-label="country_states">
									</select>
									<div class="text-danger error" data-error="country_states"></div>
								</div>
							</div>
							<!-- City -->
							<div class="row">
								<div class="col-sm-12 col-md-6 ">
									<label class="d-block font_14 font_weight_500 mb-2 mt-3">City <span class="asterisk">*</span></label>
									<select class="country_state_city" name="country_state_city" id="country_state_city" aria-label="country_state_city">
									</select>
									<div class="text-danger error" data-error="country_state_city"></div>
								</div>
							</div>
							<!-- Timezone -->
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<input type="hidden" value="locationInfo" name="freelancerInfo">
										<label class="d-block font_14 font_weight_500 mb-2 mt-3">Time Zone <span class="asterisk">*</span></label>
										<select class="timeZone" name="timeZone" id="timeZone" aria-label="timeZone">
										</select>
										<!-- <select class="" name="timeZone" id="timeZone" aria-label="Time Zone">
											<option value="">Select Timezone</option>
											@foreach($timezone as $key=> $timezones)
											<option value="{{$key}}" {{$freelancerInfo->time_zone == $key ? 'selected' : ''}}>{{$timezones}}</option>
											@endforeach
										</select> -->
										<div class="text-danger error" data-error="timeZone"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="d-block font_14 font_weight_500 mb-2 mt-3">Street Address</label>
										<input aria-label="" type="text" maxlength="32" data-test="" class="" name="streeAddress" value="{{$freelancerInfo->street_adresses ?? ''}}">
									</div>
								</div>
							</div>

							<!-- ZIP/Postal code -->
							<div class="row">
								<div class="col-sm-12 col-md-6 ">
									<label class="d-block font_14 font_weight_500 mb-2 mt-3">ZIP/Postal code</label>
									<input aria-label="" type="text" maxlength="32" data-test="" class="" name="postalCode" value="{{$freelancerInfo->postal_code ?? ''}}">
								</div>
							</div>

							<!-- Phone -->
							<div class="row">
								<div class="col-sm-12">
									<label class="d-block font_14 font_weight_500 mb-2 mt-3">Phone <span class="asterisk">*</span></label>
									<div class="phone_area form-control p-0 d-flex align-items-center">
										<span class="country_code text-muted mx-2" id="country_code">+{{$countryCode->phonecode ?? ''}}</span>
										<input aria-label="" type="number" maxlength="32" class="border-0" name="phone" value="{{$freelancerInfo->phone_no ?? ''}}">
									</div>
									<div class="text-danger error" data-error="phone"></div>
								</div>
							</div>
							<div class="user_contact_btn mt-4">
								<button class="font_weight_500" type="submit">Update</button>
								<button class="font_weight_500 cancel_btn" type="button">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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