@extends('layouts.app')
@section('content')
<section class="posting_step_3 posting_body_content min_60vh mt-4 position-relative">
	<div class="body_ellipse_img position-absolute bottom_img">
		<img src="{{asset('images/body_ellipse.png')}}">
	</div>
	<div class="container">
		<div class="row proposal-post mx-md-5 mx-3">
			<div class="col-lg-6 after-border">
				<div class="title-count mb-4 font_15 font_weight_500">
					<span class="title-num pe-3">
						<span class="active-num font_16 ">3</span>
						<span class="font_13">/4</span>
					</span>
					<span class="font_weight_500 color_grey">Scope</span>
				</div>
				<div class="posting_step_heading mb-4">
					<h4 class="font_weight_500">Next, estimate the scope of your work.</h4>
				</div>
				<p class="font_14 color_grey fw-normal">These aren't final answers, but this information helps us recommend the right talent for what you need.</p>
			</div>
			<div class="col-lg-6 create_post">
				<div class="posting_three_content px-md-4 px-2">
					<form method="POST" id="project_scope" action="{{ route('project.scope') }}">
						@csrf
						<input type="hidden" name="project_id" value="{{Session::get('project_id')}}" id="project_id">

						<div class="project_term">
							<div class="project_term_radio custom_radio_btn">
								<label for="project_term_1" class="position-relative d-flex mb-3">
									<input type="radio" name="type" id="project_term_1" value="large" @if($project->type=='large') checked @endif>
									<span class="mid_dot_parent"></span>
									<div class="label_content">
										<p class="font_14 color_black font_weight_500">Large</p>
										<p class="m-0 font_11 color_black">Longer term or complex initiatives (ex. design and build a full website)</p>
									</div>
								</label>
							</div>
							<div class="project_term_radio custom_radio_btn">
								<label for="project_term_2" class="position-relative d-flex mb-3">
									<input type="radio" name="type" id="project_term_2" value="medium" @if($project->type=='medium') checked @endif>
									<span class="mid_dot_parent"></span>
									<div class="label_content">
										<p class="font_14 color_black font_weight_500">Medium</p>
										<p class="m-0 font_11 color_black">Well-defined projects (ex. a landing page)</p>
									</div>
								</label>

							</div>
							<div class="project_term_radio custom_radio_btn">
								<label for="project_term_3" class="position-relative d-flex mb-3">
									<input type="radio" name="type" id="project_term_3" value="small" @if($project->type=='small') checked @endif>
									<span class="mid_dot_parent"></span>
									<div class="label_content">
										<p class="font_14 color_black font_weight_500">Small</p>
										<p class="m-0 font_11 color_black">Quick and straightforward tasks (ex. update text and images on a webpage)</p>
									</div>
								</label>

							</div>
						</div>
						<div class="project_term_length font_13 fw-normal color_black"></div>
						<div class="project_level_experience mt-4"></div>

						<!-- <div class="contract_hire">
								<p class="font_13 font_weight_500 color_black mb-1">Is this job a contract-to-hire opportunity?</p>
								<span class="font_11 fw-normal color_grey d-inline-block mb-4">
									This means you'll start with a contract, and later explore a full-time option with the talent. Your answer helps us better support your hiring needs.
								</span>
								<div class="custom_radio_btn d-flex">
									<label for="contract_yes" class="position-relative d-flex mb-3 me-4">
										<input type="radio" name="contract_hire" id="contract_yes" checked="checked">
										<span class="d-inline-block"></span>
										Yes
									</label>
									<label for="contract_no" class="position-relative d-flex mb-3">
										<input type="radio" name="contract_hire" id="contract_no">
										<span class="d-inline-block"></span>
										No
									</label>
								</div>
							</div> -->
						<div class="back-fwd-btn px-0 d-flex justify-content-between">
							<a href="{{route('project.skill.view')}}" class="btn">Back</a>
							<button type="submit" class="btn btn-sm btn-success continue border-0 font_weight_500" disabled>Next: Budget</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('js')
<script>
	var projectDuration = '<?php echo $project->duration; ?>';
	var projectLevel = '<?php echo $project->level; ?>';
</script>
@endsection