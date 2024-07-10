@extends('layouts.app')
@section('content')
<section class="profile_contact mt-5">
	<div class="container">
		<div class="row">			
            <div class="col-md-12 px-0 px-md-2">
            	<div class="border border-radius-16">
	            	<div class="d-flex w-100 p-4 border-bottom">
	            		<div class="profile_img me-3">
	            			<img class="rounded-circle" src="{{ auth()->user()->profile_photo_path ? asset('/storage/images/client_profile/'.auth()->user()->profile_photo_path):  asset('images/user_default.jpeg') }}">
	            		</div>
	            		<div class="profile_details w-100">
	            			<div class="d-flex justify-content-between">
		            			<div>
		            				<h2 class="font_36 mb-3 d-none d-md-block font_weight_700">{{auth()->user()->FullName}}</h2>
		            				<div class="location">
		            					<i class="fa fa-map-marker" aria-hidden="true"></i>	<span>{{auth()->user()->cities->name}}, {{auth()->user()->country->name}} – {{$timezone}}</span>
		            				</div>
		            			</div>
		            			<div class="profile_setting_btn">
		            				<a href="{{route('settings')}}" class="custom_btn btn_green font_weight_700 font_18">Profile settings</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            	<div class="row p-4">
	            		<div class="col-md-4 p-0">
	            			<!-- <div class="profile_summary d-flex">
	            				<div class="me-3">
	            					<div class="font_20 font_weight_700">6</div>
	            					<div class="jobs font-14">Total jobs</div>
	            				</div>
	            				<div>
	            					<div class="font_20 font_weight_700">2,303</div>
	            					<div class="jobs font-14">Total hours</div>
	            				</div>
	            			</div> -->
	            		</div>
	            		<div class="col-md-8 p-0">
	            			<div class="profile_description mb-5">
	            				<div class="d-flex justify-content-between mb-4">
	            					<div class="d-flex align-items-center">
	            						<h3 class="font_24 font_weight_600 mb-0 me-3">{{auth()->user()->FreelancerProfile->title ?? '-'}}</h3>
	            						<a href="" class="icon_color font_12" data-bs-toggle="modal" data-bs-target="#edit_title">
	            							<i class="fas fa-pencil-alt"></i> 
	            						</a>
	            					</div>
	            					<div class="d-flex align-items-center">
	            						<h4 class="font_16 font_weight_600 mb-0 me-3">$18.00</h4>
	            						<a href="" class="icon_color font_12"> <i class="fas fa-pencil-alt"></i> </a>
	            					</div>
	            				</div>
	            				<div class="profile_description_content">
	            					
	            						<p class="mb-0">{{auth()->user()->FreelancerProfile->bio ?? '-'}}</p>
	            					
	            				</div>
	            				<!-- <div class="consultations">
	            					<h2 class="font_20 font_weight_600">Consultations</h2>
	            					<div class="border p-4 border-radius-16 d-flex">
	            						<div class="col-md-8">
	            							<h2 class="font_20 font_weight_600">Create your first consultation</h2>
	            							<p class="font_16">Meet more clients through 1-on-1 virtual consultations. Set your rate and choose when you're available to meet, then clients can book time with you. <a href=""> How it works</a> </p>
	            							<div class="font_16"><span></span> Link your calendar or share your availability</div>
	            							<div class="font_16"><span></span> No Connects needed</div>
	            							<div class="">
	            								<a href="" class="btn_transprent text-decoration-none border-radius-16 font_16">Create a consultation</a>
	            							</div>
	            						</div>
	            						<div class="col-md-4">
	            							<img class="rounded-circle" src="{{url('images/chat_avatar_01.jpg')}}">
	            						</div>
	            					</div>
	            				</div> -->
	            			</div>
	            			<div class="portfolio_section">
	            				<div class="d-flex align-items-center justify-content-between">
	            					<div class="font_24 font_weight_600">Portfolio</div>
	            					<div class="d-flex">
	            						<div class="add_portfolio me-2">
	            							<a class="icon_color font_12" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
	            								<i class="fas fa-plus"></i>
	            							</a>
	            						</div>
	            						<!-- <div class="short_data">
	            							<a href="" class="icon_color">
		            							<i class="fas fa-sort-alpha-up-alt"></i>
		            						</a>
	            						</div> -->
	            					</div>
	            				</div>
	            				<div class="Portfolio_tabs">
									<div class="">
										<ul class="nav nav-pills mb-3 border-bottom border-2" id="pills-tab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link fw-semibold active position-relative" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Published</button>
											</li>
																				
										</ul>
										<div class="tab-content " id="pills-tabContent">
											<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
												<div id="news-slider" class="owl-carousel d-flex justify-content-between flex-wrap">
													@if(count($detail)>0)
														@foreach($detail as $details)
															<div class="slider_div mb-4">
																<div class="porject_image d-flex align-items-center border-radius-16 position-relative">
																	<img src="{{url('images/banner-home.jpg')}}" class="img-fluid" alt="...">
																	<div class="btn-group position-absolute toggle_btn">
																		<button class="img_ellipsis " type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
																			<i class="fas fa-ellipsis-h"></i>
																		</button>
																	<ul class="dropdown-menu" aria-labelledby="defaultDropdown">
																		<li><a class="dropdown-item edit-portfolio" role="button" data-id="{{$details->id}}" data-bs-toggle="modal" href="#exampleModalToggle">Edit</a></li>

																		<li><a class="dropdown-item delete-portfolio" role="button" data-id="{{$details->id}}">Delete</a></li>
																	</ul>
																	</div>
																</div>
																<div class="pt-2">{{$details->title}}</div>
															</div>
														@endforeach
													@else
													<div class="text-center">
														<h5>Portfolio images are missing please add portfolio images</h5>
													</div>
													@endif
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
        <div class="span-md-4"></div>
        <div class="span-12 span-md-8"></div>
	</div>
</section>


<!-- add new portfolio project -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
		<form id="portfolio_form" data-action="{{route('myprofile.create')}}" method="POST" enctype= multipart/form-data>	
			<div class="modal-body">
			<div class="new_portfolio">
				<div class="d-flex justify-content-between">
					<div>
						<h2> Add a new portfolio project </h2>
						<p>All fields are required unless otherwise indicated.</p>
					</div>
					<div>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>
				<input type="hidden" name="portfolio_id" id="portfolio_id" value=""/>
				<div class="new_portfolio_form">
					<div class="mb-3">
						<label for="title" class="form-label">Project title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Enter a brief but descriptive title">
						<div class="text-danger error" data-error="title"></div>

					</div>
					<div class="d-flex">
						<div class="col-md-4">
							<div class="mb-3">
								<label for="role" class="form-label">Your role (optional)</label>
								<textarea type="text" class="form-control" id="role" name="role" placeholder="e.g., Front-end engineer or Marketing analyst"></textarea>
								<div class="text-danger error" data-error="role"></div>

							</div>
							<div class="mb-3">
								<label for="description" class="form-label">Project description</label>
								<textarea type="text" class="form-control" id="description" name="description" placeholder="Briefly describe the project's goals, your solution and the impact you made here"></textarea>						
								<div class="text-danger error" data-error="description"></div>

							</div>
							<div class="mb-3 posting_seach_item">
								<label for="exampleInputEmail1" class="form-label">Skills and deliverables</label>
								<input class="form-control me-2 search typeahead" name="search_portfolio" id="search_portfolio" type="text">
								<i class="fa fa-search position-absolute" aria-hidden="true"></i>
								<div id="skill_list"></div>
								<div class="text-danger error" data-error="skill_id"></div>

							</div>
							<div class="selected_skills d-flex flex-wrap">
								@if (count($all) > 0)
								@foreach ($all as $projectSkills)
								<div id="selected_skills_sub_{{ $projectSkills['skill_id'] }}">
									<input type="hidden" name="skill_id[]" id="{{ $projectSkills['skill_id'] }}" value="{{ $projectSkills['skill_id'] }}">
									<span data-skill="{{ $projectSkills['parent_id'] }}" class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub" data-cy="{{ $projectSkills['skill_name'] }}" data-id="{{ $projectSkills['skill_id'] }}">
										{{ $projectSkills['skill_name'] }}
										<i class=" fas fa-solid fa-times"></i>
									</span>
								</div>
								@endforeach
								@endif
							</div>
					  	</div>
					  	<div class="col-md-8">
					  		<div class="media_editors" id="imagePreview" >
					  			<div class="Media_icons upload__box">
										<div class="d-flex align-items-center justify-content-center gap-15">
											<div class="">
											  <div class="upload__btn-box">
											    <label class="upload__btn img_upload" id="image-upload">
											      <p class="icon_color mb-0"><i class="far fa-image"></i></p>
											      <input type="file" id="filename" name="filename[]" multiple data-max_length="20" class="upload__inputfile">
											    </label>
											  </div>											  
											</div>	
																					
											<div class="img_upload" id="link-upload">
												<a href="#" class="icon_color" data-bs-toggle="modal" data-bs-target="#web_link"><i class="fas fa-link"></i></a>
											</div>
										</div>
										<div class="text-center">
											<span class="text_body" id="hover-text">Add content</span>
										</div>
										<div class="upload__img-wrap"></div>
									</div>
								</div>
					  	</div>

					</div>
				</div>
			</div>
			</div>
			<div class="modal-footer">
				<button class="custom_btn" type="submit">Update</button>
			</div>
	  	</form>
    </div>
  </div>
</div>

<!-- Popup for Add a web link  -->
<div class="modal fade" id="web_link" aria-hidden="true" aria-labelledby="exampleModalLabel" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">     
	    <div class="modal-body p-4">
			<div>
				<div class="d-flex justify-content-between">
					<div>
						<h2> Add a web link </h2>
						<p class="mb-0">Only one link can be added at a time.</p>
					</div>
					<div>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>
				<div class="add_link_form pt-5">
					<div class="">
						<label for="exampleInputEmail1" class="form-label">Paste a web link to an article or website</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Article or website link">
					</div>
					<div class="meet_smartdev pt-4">
						<a href="" class="text_green text-decoration-none"> <span><i class="fas fa-external-link-alt"></i></span>  Does your link meet Upwork's guidelines?</a>
					</div>
				</div>
			</div>
	    </div>
	    <div class="p-4 text-end">
	        <button type="button" class="btn " data-bs-dismiss="modal">Cancel</button>
	        <button type="button" class="custom_btn">Add</button>
	    </div>
    </div>
  </div>
</div>

<!-- Edit your title -->
<div class="modal fade" id="edit_title" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="d-flex justify-content-between">
        	<div><h3 class="font_24 font_weight_700"> Edit your title </h3> </div>
        	<div><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
        </div>
        <div class="">
        	<p class="text_gray py-4 mb-0">Enter a single sentence description of your professional skills/experience (e.g. Expert Web Designer with Ajax experience)</p>
				  <div class="">
				    <label for="your_title" class="form-label font_weight_700">Your title</label>
				    <input type="text" class="form-control" id="your_title" placeholder="Example: Professional Magento Developer">
				  </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
        <button type="button" class="custom_btn">Save changes</button>
      </div>
    </div>
  </div>
</div>





@endsection