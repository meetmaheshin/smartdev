@extends('layouts.app')
@section('content')
<section class="user_dashboard min_60vh">
	<div class="container">
		<div class="user_action pt-5">
			<div class="row">
				<div class="col-lg-8">
					<div class="d-flex flex-nowrap align-items-center">
						<div class="d-flex flex-column flex-shrink">
							<h1 class="mb-0 font_26 color_black font_weight_700">Your Dashboard</h1>
							<h4 class="font_16 color_black font_weight_600">{{ucfirst(Auth::user()->firstname)}} {{ucfirst(Auth::user()->lastname)}}</h4>
						</div>
					</div>
				</div>
				<div class="dashboard_post_btn d-none d-lg-flex col-lg-4 flex-grow justify-content-end align-items-center">
					<a href="{{route('project_started')}}" class="text-decoration-none font_weight_500 green_btn">Post a Job</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="dashboard-user-postings blank_posting mt-5 pb-3">
					<div class="dashboard-posting-header d-flex justify-content-between align-items-center p-4">
						<div>
							<h3 class="color_black font_22 font_weight_600">Your Postings</h3>
						</div>
						<div><a href="{{route('project.all_jobs',['statuses' => 'new'])}}" class="color_green font-16 text-decoration-none">See all postings</a></div>
					</div>
					@if(count($project)>0)
					@foreach($project as $data)
					<div class="user_post p-4">
						<div class="post_title">
							<div class="post_title_content d-flex justify-content-between">
								<div class="post_title_heading">
									<h5 class="font_16 font_weight_600"><a href="{{route('project.proposal.view',['proposalId'=>$data->id])}}" class="color_green">{{$data->title}}</a></h5>
								</div>
								<div class="post_title_btn position-relative">
									<button class="d-flex justify-content-center align-items-center"><i class="fas fa-ellipsis-v"></i></button>
									<div class="post_title_popup popper position-absolute">
										<div class="popper_wrapper">
											<div class="popper_wrapper_content">
												<ul class="list-unstyled m-0 font_14">
													<li class="view_proposals" data-action="{{route('project.proposal.ajax')}}" data-id="{{$data->id.'?view=nav-review-proposal'}}">
														<span class="d-block">View Proposals</span>
													</li>
													<li class="edit_draft" data-action="{{route('project.review.ajax')}}" data-id="{{$data->id}}">
														<span class="d-block "> Edit Posting</span>
													</li>

													<li class="remove_posting" data-action="{{route('projectstatus.change')}}" data-status="Delete" data-id="{{$data->id}}">
														<span class="d-block "> Remove Posting</span>
													</li>
												</ul>
											</div>
											<span class="popup_top_arrow"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="post_content">
							<div class="post_content_inner d-flex justify-content-between align-items-center mt-1">
								<div class="user_post_status">
									<div class="budget_status font_14 color_grey mb-1">
										<span>{{($data->budget=='project'? 'Fixed' : 'Hourly')}} Price -</span>
										<span>Public</span>
									</div>
									<div class="post_date font_14 color_grey">
										<span>Created {{TimeChange($data->updated_at)}}</span>
									</div>
								</div>
								<div class="user_post_counts d-flex justify-content-between px-4">
									<div class="">
										<div>
											<p class="font_14 color_black mb-0">{{$data->get_proposal_setting_count}}</p>
										</div>
										<span class="font_14 color_grey">Proposals</span>
									</div>
									<div class="">
										<div>
											<p class="font_14 color_black mb-0">{{$data->conversation_reverted_count_count}}</p>
										</div>
										<span class="font_14 color_grey">Messaged</span>
									</div>
									<div class="">
										<div>
											<p class="font_14 color_black mb-0">{{$data->client_hire_count}}</p>
										</div>
										<span class="font_14 color_grey">Hired</span>
									</div>
								</div>
							</div>
						</div>
						<div class=""></div>
					</div>
					@endforeach
					@else
					<div class="user_post_content d-flex jutify-content-center align-items-center flex-column p-5">
						<div class="folder_icon">
							<i class="fas fa-solid fa-folder-open color_green"></i>
						</div>
						<h4 class="font_16 color_black">No active job posts</h4>
						<p class="font_14 mb-5">Post a job to the marketplace and let talent come to you.</p>
						<a href="{{route('project_started')}}" class="text-decoration-none font_weight_600 green_btn">Post a Job</a>
					</div>
					@endif
				</div>

				@if(count($contract)>0)
				<div class="dashboard-user-postings mt-5 pb-3">
					<div class="dashboard-posting-header d-flex justify-content-between align-items-center p-4">
						<h3 class="color_black font_22 font_weight_600 m-0">My Contracts</h3>
						<!-- <a href="" class="open_btn font_18 font_weight_700">All Contracts</a> -->
					</div>
					<hr class="grey_hr m-0">
					@foreach($contract as $data)
					<div class="user_post p-4">
						<h5 class="color_black font_weight_700 m-0">{{$data->projects->title}}</h5>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex mt-4">
								<img class="rounded-circle border-0 object-fit-cover" src="{{ $data->freelancer->profile_photo_path ? asset('storage/images/client_profile/'.$data->freelancer->profile_photo_path) : asset('images/user_default.jpeg') }}" alt="user-image" width="60" height="60">
								<div class="ms-2">
									<h5 class="mt-2 font_weight_600">{{$data->freelancer->FullName}}</h5>
									<p class="text-muted font_14">{{$data->freelancer->country->name}}</p>
								</div>
							</div>
							<div class="d-flex align-items-center">
								<!-- <a href="#" class="up_green_btn text-decoration-none me-2">Pay Now</a> -->
								<div class="dropdown post_title_btn">
									<button class="d-flex justify-content-center align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fas fa-ellipsis-v"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end">
										<li><a class="dropdown-item text-decoration-none" href="{{ route('contract.milestone',['projectId'=>$data->projects->id,'freelancerId'=>$data->freelancer->id])}}">Milestones & Payments</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
					@endforeach
				</div>
				@endif


				@if(count($project_draft)>0)
				<div class="dashboard-user-postings mt-5">
					<div class="dashboard-posting-header d-flex justify-content-between align-items-center p-4">
						<div>
							<h3 class="color_black font_22">Your Drafts</h3>
						</div>
						<div><a href="{{route('project.all_jobs',['statuses' => 'draft'])}}" class="color_green font-16 text-decoration-none">See all drafts</a></div>

					</div>
					<div class="user_post_content">
						@foreach($project_draft as $data)
						<a href="javascript:void(0)" class="d-block text-decoration-none color_black">
							<div class="user_post mb-2 p-4">
								<div class="post_title">
									<div class="post_title_content d-flex justify-content-between">
										<div class="post_title_heading">
											<h5 class="font_16 font_weight_600">{{$data->title}}</h5>
										</div>
										<div class="post_title_btn position-relative">
											<button class="d-flex  justify-content-center align-items-center"><i class="fas fa-ellipsis-v"></i></button>
											<div class="post_title_popup popper position-absolute">
												<div class="popper_wrapper">
													<div class="popper_wrapper_content">
														<ul class="list-unstyled m-0 font_14">
															<li class="edit_draft" data-action="{{route('project.review.ajax')}}" data-id="{{$data->id}}">
																<span> Edit draft</span>
															</li>
															<li class="remove_draft" data-id="{{$data->id}}" data-action="{{route('project.delete')}}" data-status="Draft">
																<span> Remove draft</span>
															</li>
														</ul>
													</div>
													<span class="popup_top_arrow"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="post_content">
									<div class="post_content_inner d-flex justify-content-between align-items-center mt-1">
										<div class="user_post_status">
											<div class="post_date font_14 color_grey">
												<span>Created {{TimeChange($data->created_at)}}</span>
											</div>
										</div>

									</div>
								</div>
								<div class=""></div>
							</div>
						</a>
						@endforeach
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</section>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/client_dashboard.js')}}"></script>
@endsection