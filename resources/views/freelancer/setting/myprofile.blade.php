@extends('layouts.app')
@section('content')
<section class="profile_contact mt-5">
	<div class="container">
		<div class="row">			
            <div class="col-md-12 px-0 px-md-2">
            	<div class="border border-radius-16">
	            	<div class="d-flex w-100 p-4 border-bottom">
	            		<div class="profile_img me-3">
	            			<img class="rounded-circle" src="{{url('images/chat_avatar_01.jpg')}}">
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
	            			<div class="profile_description">
	            				<div class="d-flex justify-content-between">
	            					<div class="d-flex align-items-center">
	            						<h3 class="font_24 font_weight_600 mb-0 me-3">{{auth()->user()->FreelancerProfile->title ?? '-'}}</h3>
	            						<a href=""> <i class="fas fa-edit"></i> </a>
	            					</div>
	            					<div class="d-flex align-items-center">
	            						<!-- <h4 class="font_16 font_weight_600 mb-0 me-3">Rate is private</h4> -->
	            						<a href=""> <i class="fas fa-edit"></i> </a>
	            					</div>
	            				</div>
	            				<div class="profile_description_content">
	            					<ul>
	            						<li>{{auth()->user()->FreelancerProfile->bio ?? '-'}}</li>
	            					</ul>
	            				</div>
	            				<div class="consultations">
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
	            				</div>
	            			</div>
	            			<div class="portfolio_section">
	            				<div class="d-flex align-items-center justify-content-between">
	            					<div class="font_24 font_weight_600">Portfolio</div>
	            					<div class="d-flex">
	            						<div class="add_portfolio me-2">
	            							<a class="icon_color" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
	            								<i class="fas fa-plus"></i>
	            							</a>
	            						</div>
	            						<div class="short_data">
	            							<a href="" class="icon_color">
		            							<i class="fas fa-sort-alpha-up-alt"></i>
		            						</a>
	            						</div>
	            					</div>
	            				</div>
	            				<div class="Portfolio_tabs">
									<nav>
										<div class="nav nav-tabs" id="nav-tab" role="tablist">
											<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Published</button>
											<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Drafts</button>
										</div>
									</nav>
									<div class="tab-content" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">1</div>
										<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2</div>
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
	    <form>
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
				<div class="new_portfolio_form">			
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Project title</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter a brief but descriptive title">
						<div class="text-end" >70 characters left</div>
					</div>
					<div class="d-flex">
					  	<div class="col-md-4">
					  		<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Your role (optional)</label>
								<textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g., Front-end engineer or Marketing analyst"></textarea>
								<div class="text-end" >100 characters left</div>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Project description</label>
								<textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Briefly describe the project's goals, your solution and the impact you made here"></textarea>						
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Skills and deliverables</label>
								<textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Type to add skills relevant to this project"></textarea>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Related Upwork job (optional)</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Search a related job">
							</div>
					  	</div>
					  	<div class="col-md-8">
					  		<div class="media_editors">
								<div class="d-flex align-items-center justify-content-center gap-15">
									<div class="img_upload" id="image-upload">
										<a href="#" class="icon_color"><i class="far fa-image"></i></a>
									</div>
									<div class="img_upload" id="video-upload">
										<a href="#" class="icon_color"><i class="fas fa-video"></i></a>
									</div>
									<div class="img_upload" id="text-upload">
										<a href="#" class="icon_color"><i class="fas fa-text-width"></i></a>
									</div>
									<div class="img_upload" id="link-upload">
										<a href="#" class="icon_color" data-bs-toggle="modal" data-bs-target="#web_link"><i class="fas fa-link"></i></a>
									</div>
									<div class="img_upload" id="file-upload">
										<a href="#" class="icon_color"><i class="far fa-file"></i></a>
									</div>
									<div class="img_upload" id="music-upload">
										<a href="#" class="icon_color"><i class="fas fa-music"></i></a>
									</div>
								</div>
								<div class="text-center">
									<span class="text_body" id="hover-text">Add content</span>
								</div>
							</div>
					  	</div>
					</div>
				</div>
			</div>
			</div>
			<div class="modal-footer">
			<button class="btn ">Save as draft</button>
			<button class="custom_btn">Next: Preview </button>
			</div>
	  	</form>
    </div>
  </div>
</div>

<!-- Popup for Add a web link  -->
<div class="modal fade" id="web_link" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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



@endsection