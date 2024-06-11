@extends('layouts.app')
@section('content')
<section class="posting_body_content min_60vh mt-4 position-relative">
	<div class="body_ellipse_img position-absolute bottom_img d-none d-md-block">
		<img src="{{asset('images/body_ellipse.png')}}">
	</div>
	<div class="container-xl">
		<div class="row mx-md-5">
			<div class="col-lg-8 col-md-11 col-sm-12">
				@if(Auth::user()->email_verified_at == NULL)
				<div class="user_verify_content p-3 font_11 d-flex align-items-center mb-5">
					<i class="fas fa-envelope me-2"></i>
					<p class="m-0">Just a reminder to publish your job post, you'll need to <a href="{{route('verify_email')}}" class="text-decoration-none">verify your email</a></p>
				</div>
				@endif
				@if(Session::has('success'))
				<div class="alert alert-success"> {{ session('success') }}</div>
				@endif
				<form method="POST" id="project_started" action="{{ route('project.started') }}">
					@csrf
					<input type="hidden" name="project_id" value="{{ old('project_id') }}" id="project_id">
					<div class="getting_started_block p-3">
						<h4 class="font_weight_600 color_black">
							Getting started
						</h4>
						<p class="color_black font_weight_500">What would you like to do?</p>
						<div class="job_btn ">
							<label for="new_job" class="font_weight_600 position-relative d-flex">
								<input type="radio" name="job" id="new_job" value="new" checked="checked">
								<span class="d-inline-block"><i class="mid_dot"></i></span>
								Create a new job post
							</label>
						</div>
						<div class="create_post_block posting_block my-4">
							<div class="signup_btn_box m-0 d-md-flex justify-content-between">
								<div class="btn_box p-3 {{@$project->status == 'short' ? 'active' : '' }}" data-text="short">
									<div class="btn_box_inner d-flex justify-content-between">
										<div class="signup_btn mb-3">
											<img src="{{url('images/frontend/signup_btn.png')}}" class="w-100">
										</div>
										<div class="signup_btn_input d-flex justify-content-center align-items-center">
											<label for="short" class="position-relative">
												<input type="radio" name="status" id="short" value="short" {{@$project->status == 'short' ? 'checked=checked' : '' }}>
												<span class="d-inline-block"><i class="mid_dot"></i></span>
											</label>
										</div>
									</div>
									<p class="text-start font_weight_500">Short term or part<br>time work</p>
									<p class="m-0">Less than 30 hrs/week</p>
								</div>
								<div class="btn_box p-3 {{@$project->status == 'long' ? 'active' : '' }}" data-text="long">
									<div class="btn_box_inner d-flex justify-content-between">
										<div class="signup_btn mb-3">
											<img src="{{url('images/frontend/signup_btn.png')}}" class="w-100">
										</div>
										<div class="signup_btn_input d-flex justify-content-center align-items-center">
											<label for="long" class="position-relative">
												<input type="radio" name="status" id="long" value="long" {{@$project->status == 'long' ? 'checked=checked' : '' }}>
												<span class="d-inline-block"><i class="mid_dot"></i></span>
											</label>
										</div>
									</div>
									<p class="text-start font_weight_500">Longer term work</p>
									<p class="m-0">More than 30 hrs/week</p>
								</div>
							</div>
						</div>
						@if(count($existingProjects)>0)
						<div class="job_btn pt-3">
							<label for="existing_job" class="position-relative d-flex">
								<input type="radio" name="job" id="existing_job" value="draft">
								<span class="d-inline-block"><i class="mid_dot"></i></span>
								Edit an existing draft
							</label>
						</div>

						<div class="existing_post_block posting_block py-4">
							<select class="w-100" name="existing_project" id="existing_project">
								@foreach ($existingProjects as $data)
								<option value="{{$data->id}}">
									{{$data->title}}
								</option>
								@endforeach
							</select>
						</div>
						@endif
						<div class="getting_started_btn d-sm-flex justify-content-end p-4">
							<button class="position-relative text-center me-sm-4 mb-3 mb-sm-0">Cancel</button>
							<button type="submit" class="position-relative text-center continue" disabled="disabled">Continue</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</section>
@endsection
@section('before_js')
<script>
	// $(document).ready(function(){
		var projectsDetails = '<?php echo @$existingProjects[0]->id ?>';
	// })
</script>
@endsection