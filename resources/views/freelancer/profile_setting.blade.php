@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/profile_setting.css')}}">
@endsection
@section('content')
<input type="hidden" id="_token" value="{{ csrf_token() }}">
<section class="profile_setting min_60vh mt-5">
	<div class="container">
		<div class="row">
			@include("freelancer.setting.setting_sidebar")
			<div class="col-md-9  px-0 px-md-2">
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
				<h2 class="font_26 mb-4 d-none d-md-block font_weight_600">Profile setting</h2>
				<div class="user_profile_setting_block">
					<div class="border-grey-radius">
						<div class="user_setting_header d-flex justify-content-between align-items-center p-4">
							<h2 class="font_22 font_weight_600">My profile</h2>
						</div>
						<form action="{{route('update-myprofile')}}" method="post">
							@csrf
							<div class="user_setting_header_inner_block p-4">
								<div class="pb-4">
									<div class="user_project_preference">
										<label class="font_weight_600">Title <span class="asterisk">*</span></label>
										<p class="font_12 color_grey">Enter a single sentence description of your professional skills/experience (e.g. Expert Web Designer with Ajax experience)</p>
										<input type="text" class="form-control" name="title" id="user_profile_title" value="{{old('title',$profile_freelancer->title ?? '')}}" />
									</div>
									@if($errors->has('title'))
									<div class="error" style="color: red">{{ $errors->first('title') }}</div>
									@endif
								</div>
							</div>
							<div class="user_setting_header_inner_block p-4">
								<div class="">
									<div class="user_project_preference">
										<label class="font_weight_600">Description</label>
										<ul class="list-unstyled font_12 color_grey">
											<li class="mb-1">Describe your strengths and skills</li>
										</ul>
										<textarea rows="6" name="description" id="description" type="text" class="form-control w-100 p-3">{{old('description',$profile_freelancer->bio ?? '')}} </textarea>
									</div>
								</div>
							</div>
							<div class="user_setting_header_inner_block my_profile_update_btn text-end p-4 pt-0">
								<button type="submit" class="btn btn-success btn-sm font_weight_600">Update</button>
							</div>
						</form>
					</div>

					<div class="border-grey-radius mt-4">
						<div class="user_setting_header  p-4">
							<h2 class="font_22 font_weight_600">Project Preference</h2>
						</div>
						<div class="position-relative experience_btn_block user_project_preference">
							<div class="user_setting_header_inner_block p-4">
								<div class="pb-4">
									<div class="user_project_preference">
										<label class="mb-2 d-inline-block position-relative font_weight_600">Project preference<span class="loader position-absolute"></span></label>
										<select name="project_preference" id="project_preference" class="d-block">
											<option value="both" {{ ($profile->project_preference ?? "") == "both" ? "selected" : "" }}>Both short-term and long-term projects</option>
											<option value="long" {{ ($profile->project_preference ?? "") == "long" ? "selected" : "" }}>Long-term projects (3+ months</option>
											<option value="short" {{ ($profile->project_preference ?? "") == "short" ? "selected" : "" }}>Short-term projects (less than 3 months)</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="border-grey-radius mt-4">
						<div class="user_setting_header  p-4">
							<h2 class="font_22 font_weight_600">Experience level</h2>
						</div>
						<div class="position-relative experience_btn_block">
							<span class="loader position-absolute"></span>
							<div class="signup_btn_box experience_btn_box m-0 my-4 d-lg-flex px-4 justify-content-between">
								<div class="btn_box p-3 me-3 {{ ($profile->experience_level ?? '') == "entry" ? "active" : "" }}">
									<div class="btn_box_inner d-flex justify-content-end">
										<div class="signup_btn_input d-flex justify-content-center align-items-center">
											<label for="client" class="position-relative">
												<input type="radio" name="experience_level" class="experience_level" id="experience_level1" value="entry" {{ ($profile->experience_level ?? "") == "entry" ? "checked" : "" }}>
												<span class="d-inline-block"><i class="mid_dot"></i></span>
											</label>
										</div>
									</div>
									<div>
										<p class="mb-2 font_weight_600">Entry level</p>
										<span class="font_12 color_grey"> I am relatively new to this field</span>
									</div>
								</div>
								<div class="btn_box p-3 me-3 {{ ($profile->experience_level ?? "") == "intermediate" ? "active" : "" }}">
									<div class="btn_box_inner d-flex justify-content-end">
										<div class="signup_btn_input d-flex justify-content-center align-items-center">
											<label for="client" class="position-relative">
												<input type="radio" name="experience_level" class="experience_level" id="experience_level2" value="intermediate" {{ ($profile->experience_level ?? "") == 'intermediate' ? "checked" : "" }}>
												<span class="d-inline-block"><i class="mid_dot"></i></span>
											</label>

										</div>
									</div>
									<div>
										<p class="mb-2 font_weight_600">Intermediate</p>
										<span class="font_12 color_grey"> I have substantial experience in this field</span>
									</div>
								</div>
								<div class="btn_box p-3 me-3 {{ ($profile->experience_level ?? "") == "expert" ? "active" : "" }}">
									<div class="btn_box_inner d-flex justify-content-end">
										<div class="signup_btn_input d-flex justify-content-center align-items-center">
											<label for="client" class="position-relative">
												<input type="radio" name="experience_level" class="experience_level" id="experience_level3" value="expert" {{ ($profile->experience_level ?? "") == "expert" ? "checked" : "" }}>
												<span class="d-inline-block"><i class="mid_dot"></i></span>
											</label>
										</div>
									</div>
									<div>
										<p class="mb-2 font_weight_600">Expert</p>
										<span class="font_12 color_grey"> I have comprehensive and deep expertise in this field</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="border-grey-radius mt-4 profile_section_category_block">
						<div class="user_setting_header d-flex justify-content-between align-items-center p-4">
							<h2 class="font_22 font_weight_600">Categories</h2>
							<a href="javascript:void(0)" class="edit_draft_icon font_14 d-flex justify-content-center align-items-center text-decoration-none" data-bs-toggle="modal" data-bs-target="#editsearchcategories"><i class="fa-solid fa-pen fas"></i>
							</a>
						</div>
						@if(count($newArr)>0)
						@foreach($newArr as $key => $value)
						<div class="p-4">
							<p class="font_18 font_weight_500 color_black font_weight_600">{{$key}}</p>
							<div class="font_12 badge_items">
								@foreach($value as $val)
								<span>{{$val[0]}}</span>
								@endforeach
							</div>
						</div>
						@endforeach
						@endif
					</div>
					<!-- <div class="border-grey-radius mt-4 profile_section_Specialized_block">
						<div class="user_setting_header p-4">
							<h2 class="font_22 font_weight_600">Specialized profiles</h2>
							<div class="mt-5 text-muted">
								2 out of {{count($newSkillArr)}} published
							</div>
							<div>
								<p class="m-0">Create up to two different versions of your profile to more effectively highlight your individual specialties</p>
							</div>
						</div>
						<div> -->
							@if(count($newSkillArr) > 0)
							@foreach($newSkillArr as $key => $value)
							<!-- <div class="p-4">
								<p class="font_18 font_weight_500 color_black">{{$key}}</p>
								<div class="font_12 badge_items d-flex justify-content-between align-items-cente">
									<div> -->
										@foreach($value['value'] as $val)
										<!-- <span>{{$val}}</span> -->
										@endforeach
									<!-- </div>
									<div class="dropdown my_profile_dropdown position-relative">
										<button class="ms-2 d-flex justify-content-center align-items-center job_poopup_btn dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
										<ul class="dropdown-menu border-0">
											<li class="dropdown-item p-0">
												<a href="javascript:void(0)" class="specialized_profile_modal color_black font_14 text-decoration-none px-3 py-1 d-block" data-specialityid="{{$value['key']}}" data-bs-toggle="modal" data-bs-target="#addspecializedpopup">Switch Specialty</a>
											</li>
											<li class="dropdown-item p-0">
												<a href="{{route('specialized-profiles-delete',['specialty_id'=>$value['key'] ])}}" class="color_black font_14 text-decoration-none px-3 py-1 d-block">Delete</a>
											</li>
										</ul>
									</div>
								</div>
							</div> -->

							@endforeach
							@endif
						<!-- </div> -->
						@if(count($user_skills_two) < 2) 
							<!-- <div class="p-4">
								<div class="mt-4">
									<a href="javascript:void(0)" class="font_15 text-decoration-none font_weight_600 px-3 py-2 color_green button_border" data-bs-toggle="modal" data-bs-target="#addspecializedpopup">Add Specialized Profile</a>
								</div>
							</div> -->
					@endif
				</div>
				<div class="modal fade custom_popup" id="editsearchcategories" tabindex="-1" aria-labelledby="editsearchcategoriesLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content border-0">
							<div class="modal-header border-0 p-4">
								<h5 class="modal-title font_22 color_black" id="editsearchcategoriesLabel">Categories</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body mb-5 p-0">
								<div class="">
									<div class="modal_inner">

										<div class="px-4">
											<p class="font_18 font_weight_500 color_black">Web, Mobile & Software Dev</p>
											<div class="text-danger error" data-error="specialities"></div>
											<span class="font_14 color_grey">Select up to 10 categories.</span>
											<div class="selected_skills d-flex flex-wrap">

												@if(count($newCatArr)>0)
												@foreach($newCatArr as $key=> $catname)
												<div data-category-id="{{$key}}" id="selected_skills_sub_check_id_{{$key}}">
													<input type="hidden" name="skill_id[]" value="{{$key}}">
													<span class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub" data-id="check_id_{{$key}}"> {{$catname[0]}}
														<i id="abc_{{$key}}" class=" fas fa-solid fa-times"></i></span>
												</div>
												@endforeach
												@endif
											</div>
										</div>
										<div class="mt-4">
											<div class="accordion" id="accordionCategory">

												@if(count($category)>0)
												@foreach($category as $key=> $datas)

												<div class="accordion-item">
													<h2 class="accordion-header" id="heading{{$key}}">
														<button class="accordion-button font_weight_500 font_16 color_black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
															{{$datas->title}}
														</button>
													</h2>
													<input type="hidden" value="{{$datas->id}}" data-id="{{$datas->id}}" class="profile_category_id">
													<div id="collapse{{$key}}" class="accordion-collapse collapse" aria-labelledby="heading{{$key}}" data-bs-parent="#accordionCategory">
														<div class="accordion-body px-3 pt-0 pb-3">
															<div class="accordion_body_content">
																<div class="accordion_inner_content posting_accordion_inner_content d-flex justify-content-center flex-wrap">
																	@if(count($datas->specialties)>0)

																	@foreach($datas->specialties as $speciality)
																	<div class="mb-3">
																		<label class="position-relative">
																			<input type="checkbox" name="speciality" value="{{$speciality->id}}" data-category_id="{{$datas->id}}" class="test_checkbox" id="check_id_{{$speciality->id}}" data-cy="{{$speciality->title}}" data-id="skill_subcat_{{ $speciality->id }}" @if(in_array($speciality->id , $speciality_id_array))checked="checked" @endif />
																			<span class="custom_checkbox"></span>
																			<span class="ps-4 font_14">{{$speciality->title}}</span>
																		</label>
																	</div>
																	@endforeach
																	@endif

																</div>
															</div>
														</div>
													</div>
												</div>

												@endforeach
												@endif
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer border-0 px-4">
								<button type="button" class="font_15 border-0 font_weight_500 me-4" data-bs-dismiss="modal">Cancel</button>
								<a href="javascript:void(0)" class="green_btn text-decoration-none font_15 font_weight_500" id="add_categories">Save</a>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade custom_popup" id="addspecializedpopup" tabindex="-1" aria-labelledby="addspecializedpopupLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content border-0">
							<div class="modal-header border-0 p-4">
								<h5 class="modal-title font_22 color_black" id="addspecializedpopupLabel">Create a Specialized Profile</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body p-0">
								<div class="">
									<div class="">
										<div class="">
											<div class="card">

												<form id="specialized_form">
													<input type="hidden" value="" id="speciality_id" name="speciality_id" />
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<fieldset>
														<div class="form-card p-4">
															<div class="font_14 color_black">
																<div class="d-flex justify-content-end">
																	<h2 class="steps font_12 color_grey">Step 1 - 2</h2>
																</div>
																<p>Specialized profiles help you more effectively highlight your strengths and market your services to clients.</p>
																<p>We've suggested specialties below based on your profile and work history .</p>
															</div>
															<div class="mb-5">
																<p class="font_14 color_black font_weight_500">All specialties</p>
																<select name='speciality' id="speciality">
																	@foreach($specialityData as $val)
																	<option value="{{$val->id}}">{{$val->title}}</option>
																	@endforeach
																</select>
															</div>
															<div class="font_14 color_grey mb-5">
																<span>Tip: Only create profiles in specializations that best describe the work you do.</span>
															</div>
															<div class="specialty_btn d-flex align-items-center justify-content-end">
																<button type="button" class="font_15 border-0 font_weight_500 me-4 color_green cancel_btn" data-bs-dismiss="modal">Cancel</button>
																<input type="button" id="all_specialties" name="next" class="next action-button" value="Continue">
															</div>
													</fieldset>
													<fieldset>
														<div class="form-card p-4 position-relative selected_skills_block">
															<div class="font_14 color_black">
																<div class="d-flex justify-content-end">
																	<h2 class="steps font_12 color_grey">Step 2 - 2</h2>
																</div>
															</div>
															<div class="speciality_heading">
																<h5 class="color_black font_18">Select your skills and expertise relevant to Full Stack Development</h5>
															</div>
															<div class="selected_specialized_skills">



															</div>
															<div class="development_group_selector pb-60">


															</div>
															<div class="specialty_btn mt-5 d-flex align-items-center justify-content-end position-absolute">
																<input type="button" name="previous" class="previous action-button-previous color_black font_weight_500" value="Back" />
																<input type="button" name="next" class="save_btn action-button" id="save_skill" value="Save & Continue">
															</div>
														</div>
													</fieldset>


												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

@endsection
@section('js')

<script>
	var specialityId = $("#speciality").val();
</script>
<script type="text/javascript" src="{{asset('js/profile_setting.js')}}"></script>
<script type="text/javascript" src="{{asset('js/my_profile.js')}}"></script>
@endsection