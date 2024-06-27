@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/project_review_proposal.css')}}">
@endsection
@section('content')
<section class="review_proposal min_60vh mt-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="font_22 color_black mb-4 mt-3 font_weight_600">{{$projectDetail->title}}</h1>
            </div>
            <div class="col-sm-12 p-md-12">
                <div class="proposal_breadcrumb">
                    <nav class="project_proposal_nav_block">
                        <div class="project_proposal_nav_tabbing nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="color_grey font_14 text-decoration-none active" id="nav-view-job" data-bs-toggle="tab" data-bs-target="#view-job" type="button" role="tab" aria-controls="view-job" aria-selected="true">
                                <div class="d-none d-md-flex font_weight_700">View Job Post</div>
                                <div class="d-flex d-md-none">View Job</div>
                            </a>
                            <a class="color_grey font_14 text-decoration-none" id="nav-invite-freelancers" data-bs-toggle="tab" data-bs-target="#invite-freelancers" type="button" role="tab" aria-controls="invite-freelancers" aria-selected="false">
                                <div class="d-none d-md-flex font_weight_700">Invite Web3 Professional</div>
                                <div class="d-flex d-md-none">Invite</div>
                            </a>
                            <a class="color_grey font_14  text-decoration-none" id="nav-review-proposal" data-bs-toggle="tab" data-bs-target="#review-proposals" type="button" role="tab" aria-controls="review-proposals" aria-selected="false">
                                <div class="d-none d-md-flex font_weight_700">Review Proposals</div>
                                <div class="d-flex d-md-none">Review</div>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="view-job" role="tabpanel" aria-labelledby="nav-view-job">
                            <div class="proposal_applicants_body review_application mt-4">
                                <div class="row">
                                    <div class="col-lg-9 pe-lg-0">
                                        <section class="view_job_block p-4">
                                            <div class="view_job_category_link">
                                                <a href="javascript:void(0)" class="color_green font_14 font_weight_500 text-decoration-none">{{$projectDetail->categories->title}}</a>
                                            </div>
                                            <div class="view_job_posted_on">
                                                <span class="font_14 color_grey">Posted <span>{{TimeChange($projectDetail->created_at)}}</span></span>
                                            </div>
                                        </section>
                                        <section class="view_job_block p-4">
                                            <div class="view_job_description">
                                                <p class="mb-0 font_14">
                                                    {!! $projectDetail->description !!}
                                                </p>
                                            </div>
                                        </section>
                                        <section class="view_job_block p-4">
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <div class="d-flex align-items-start mb-3 mb-md-0">
                                                        <div class="me-2"><i class="far fa-calendar"></i></div>
                                                        <div>
                                                            <p class="m-0 font_14 font_weight_600">
                                                                {{ $projectDetail->duration=='more_than_6' ? 'More than 6 month' : ($projectDetail->duration=='month_3_to_6' ? '3 to 6 month' : ($projectDetail->duration=='less_1' ? 'Less than a month' : '1 to 3 months'))}}
                                                                <span class="font_12 color_grey d-block">Project Length</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="d-flex align-items-start mb-3 mb-md-0">
                                                        <div class="me-2 up_svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 14 14" role="img">
                                                                <path d="M12.8 8.4l-1.3-2.3v-.8C11.6 2.4 9.2 0 6.3 0S1.1 2.4 1.1 5.3c0 1.4.5 2.6 1.4 3.5v4.5c0 .4.3.7.7.7h5.3c.4 0 .7-.3.7-.7v-1h1.7c.4 0 .7-.3.7-.7V9h.9c.4 0 .5-.3.3-.6zM8.7 5.3v.4l.7.4c-.2.5-.4.9-.8 1.3L7.9 7c-.2.2-.5.3-.8.4v.8c-.2.1-.5.1-.8.1-.3 0-.5 0-.8-.1v-.8c-.2-.1-.5-.2-.7-.4l-.7.4c-.4-.4-.7-.8-.8-1.3l.7-.4v-.9l-.7-.4c.1-.5.4-1 .8-1.3l.7.4c.2-.2.5-.3.7-.4v-.8c.3-.1.5-.1.8-.1.3 0 .5 0 .8.1v.8c.3.1.5.2.8.4l.7-.4c.4.4.6.8.8 1.3l-.7.4v.5z"></path>
                                                                <circle cx="6.3" cy="5.3" r=".9"></circle>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <p class="m-0 font_14 font_weight_600">
                                                                {{ucfirst($projectDetail->level)}} Level
                                                                <span class="font_12 color_grey d-block">I am willing to pay higher rates for the most experienced freelancers</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="d-flex align-items-start mb-3 mb-md-0">
                                                        <div class="me-2"><i class="fas fa-stopwatch"></i></div>
                                                        <div>
                                                            <p class="m-0 font_14 font_weight_600">
                                                                ${{$projectDetail->budget=='project' ? $projectDetail->project_budget : $projectDetail->hourly_from.'-$'. $projectDetail->hourly_to }}
                                                                <span class="font_12 color_grey d-block">{{$projectDetail->budget=='project' ? 'Fixed-price' :'Hourly'}}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="view_job_block p-4">
                                            <div class="view_project_type">
                                                <p class="font_14">
                                                    <span class="font_weight_600">Project Type:</span>
                                                    <span>{{$projectDetail->budget=='project' ? 'One Time' :'Hourly'}} project</span>
                                                </p>
                                            </div>
                                        </section>
                                        <section class="view_job_block p-4">
                                            <h4 role="heading" aria-level="3" class="color_black font_weight_600 font_16">
                                                Skills and Expertise
                                            </h4>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="expertise_grp_title">
                                                        <p class="m-0 font_weight_500 font_14">{{$projectDetail->specialities->title}}</p>
                                                    </div>
                                                    <div class="expertise_grp_badget d-flex font_12 pt-3 flex-wrap">
                                                        @foreach($projectDetail->ProjectSkill as $skills)
                                                        <span>{{$skills->skill->skills_sub}}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="view_job_block p-4 border-bottom-0">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h4 role="heading" aria-level="3" class="font_16 font_weight_600 color_black mb-4">
                                                        Activity on this job
                                                    </h4>
                                                    <ul class="list-unstyled">
                                                        <li class="py-1">
                                                            <span class="font_14 color_grey me-1">Proposals: </span>
                                                            <span>
                                                                <span class="font_14 color_black">{{count($proposals_Byfreelancer)}}</span>
                                                            </span>
                                                        </li>
                                                        <li class="py-1">
                                                            <span class="font_14 color_grey me-1">Invites sent:</span>
                                                            <span class="font_14 color_black">{{count($proposals_sent)}}</span>
                                                        </li>
                                                        <!-- <li class="py-1">
                                                            <span class="font_14 color_grey me-1">Unanswered invites:</span>
                                                            <span class="font_14 color_black">98</span>
                                                        </li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-lg-3 ps-lg-0">
                                        <div class="view_job_right_block view_job_edit_btn p-4">
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1">

                                                    <a href="{{route('project.review.view',['id'=>$project_id])}}" class="text-decoration-none color_green font_weight_500 font_14"><i class="fa-solid fa-pen fas color_green font_14"></i>Edit posting</a>
                                                </li>
                                                @if($projectDetail->job=='delete')
                                                <li class="py-1">
                                                    <i class="fa fa-recycle color_green font_14"></i>
                                                    <a href="{{route('project.title.view')}}" class="text-decoration-none color_green font_weight_500 font_14">Reuse posting</a>
                                                </li>
                                                @else
                                                @if($projectDetail->job=='draft')
                                                @php
                                                $status='draft';
                                                $actionRoute= route('project.review.ajax');
                                                $actionClass= 'edit_draft';
                                                @endphp
                                                @else
                                                @php
                                                $status='new';
                                                $actionRoute= route('projectstatus.change');
                                                $actionClass= 'remove_posting';
                                                @endphp
                                                @endif
                                                <li class="py-1">
                                                    <i class="fa fa-times color_green font_14"></i>
                                                    <a href="javascript:void(0)" class="{{$actionClass}} text-decoration-none color_green font_weight_500 font_14" data-status="{{$status}}" data-action="{{$actionRoute}}" data-id="{{$project_id}}">Remove posting</a>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="view_job_right_block p-4">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4 data-testid="head-title" class="color_black font_16 m-0">About the client</h4>
                                            </div>
                                            <div>
                                                <ul class="list-unstyled">
                                                    <li class="py-1">
                                                        <strong class="font_12 color_black f">
                                                            {{$projectDetail->user->full_name}}
                                                        </strong>
                                                    </li>
                                                    <li class="py-1">
                                                        <strong class="font_12 color_black f">
                                                            {{ $projectDetail->user->clientDetails->getCountry ? $projectDetail->user->clientDetails->getCountry->name : ""}}
                                                        </strong>
                                                    </li>
                                                    <li class="py-1">
                                                        <strong class="font_12 color_black f">
                                                            <span>{{$project_count}}</span> jobs posted
                                                        </strong>
                                                    </li>
                                                    <li class="py-1">
                                                        <strong class="font_12 color_black f">
                                                            {{$projectDetail->user->clientDetails ? $projectDetail->user->clientDetails->company_name : ''}}
                                                        </strong>
                                                        <div data-qa="client-company-profile-size" class="text-muted">
                                                            {{$projectDetail->user->clientDetails ? $projectDetail->user->clientDetails->people : ''}}
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- <div class="view_job_right_block p-4 border-bottom-0 d-none d-lg-block">
                                           <h4 data-testid="head-title" class="color_black font_16 mb-3">Job link</h4>
                                            <div class="view_job_copy_link">
                                               <input type="text" aria-label="Job link" readonly="readonly" disabled="disabled" class="up-input">
                                               <button class="font_12 color_green font_weight_500 border-0 mt-2">Copy link</button>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- {{-- invite freelnacer --}} -->
                        <div class="tab-pane fade" id="invite-freelancers" role="tabpanel" aria-labelledby="nav-invite-freelancers">
                            <div class="proposal_applicants_body invite_application mt-4 pt-4">
                                <div class="proposal_applicants_header">
                                    <nav class="proposal_applicants_nav_tabbing">
                                        <div class="nav nav-tabs mb-4 ps-4" id="nav-tab" role="tablist">
                                            <button class="active color_grey font_14 me-3 py-2" id="nav-search-tab" data-bs-toggle="tab" data-bs-target="#nav-search" type="button" role="tab" aria-controls="nav-search" aria-selected="true">Search</button>
                                            <button class="color_grey font_14 me-3 py-2" id="nav-invited-freelancer-tab" data-bs-toggle="tab" data-bs-target="#nav-invited-freelancer" type="button" role="tab" aria-controls="nav-invited-freelancer" aria-selected="false">Invited Freelancers</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="nav-search" role="tabpanel" aria-labelledby="nav-search-tab">
                                            <div class="proposal_search_item w-50 position-relative mb-4 px-4">
                                                <form action="{{route('project.proposal.view',['proposalId'=>$project_id])}}" method="GET">
                                                    <input type="hidden" name="view" id="searchTypeProposal" value="nav-invite-freelancers" />
                                                    <input aria-label="Search" placeholder="Search" type="search" name="searchProposalInvite" class="up-input w-100 border-0 font_14 px-3">
                                                    <button type="submit" class="border-0 position-absolute"><i class="fa fa-search font_12" aria-hidden="true"></i></button>
                                                </form>
                                            </div>

                                            @forelse ($inviteFreelancer as $invite)
                                            <div class="proposal_item px-4 d-flex py-4 " data-status="{{ $invite->status }}" data-id="{{ $invite->id }}">
                                                <div class="me-3 d-none d-md-block">
                                                    @if ($invite->profile_photo_path)
                                                    <img class="rounded-circle" src="{{ asset('/storage/images/client_profile/'.$invite->profile_photo_path) }}" alt="user-image">
                                                    @else
                                                    <img class="rounded-circle" src="{{ asset('images/user_default.jpeg') }}" alt="user-image">
                                                    @endif
                                                </div>
                                                <div class="proposal_user_intro w-100">
                                                    <div class="proposal_user_head_block d-flex align-items-center">
                                                        <div class="me-3 d-block d-md-none">
                                                            @if ($invite->profile_photo_path)
                                                            <img class="rounded-circle" src="{{ asset('/storage/images/client_profile/'.$invite->profile_photo_path) }}" alt="user-image">
                                                            @else
                                                            <img class="rounded-circle" src="{{ asset('images/user_default.jpeg') }}" alt="user-image">
                                                            @endif
                                                        </div>
                                                        <div>
                                                            <div class="proposal_user_name">
                                                                <h5 class="color_green font_weight_600 freelancer_details_show" data-bs-toggle="modal" data-bs-target="#sideModal" data-action="{{route('search.details')}}" data-id="{{$invite->id}}">
                                                                    {{ $invite->firstname ?? ('' . ' ' . $invite->lastname ?? '') }}
                                                                </h5>
                                                            </div>
                                                            <div class="proposal_user_des">
                                                                <h6 class="color_black font_14 font_weight_500 me-3">
                                                                    {{ $invite->freelancerProfile->title ?? '' }}
                                                                </h6>
                                                            </div>
                                                            <div class="proposal_user_place">
                                                                <p class="color_grey font_14 m-0">{{ $invite->country->name ?? '' }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="proposal_user_btn d-none d-md-flex ms-auto">
                                                            <!-- Button trigger modal -->
                                                            @if(empty($invite->proposalStatus->checkFreelancerHired))
                                                            <a href="{{route('send.offer.view',['userId' => $invite->id , 'projectId' => $project_id])}}" class="font_weight_600 up_green_btn text-decoration-none">Hire</a>
                                                            @else
                                                            <button type="button" class="invited_btn open_btn font_weight_600 font-15 text-decoration-none mx-2 text-muted" disabled>
                                                                <i class="fas fa-check"></i>Hired
                                                            </button>
                                                            @endif


                                                            @if ($invite->conv_status == '1')
                                                            <button type="button" class="open_btn font-15 text-decoration-none me-2 invite_to_job up_green_btn font_weight_600" data-url="{{ route('invite_to_job') }}" data-project_id="{{ $project_id }}" data-user_id="{{ $invite->id }}" data-bs-toggle="modal" data-bs-target="#inviteJob">
                                                                Invite to job
                                                            </button>

                                                            @else

                                                            @if($invite->proposalStatus !='')
                                                            @if($invite->proposalStatus->proposal_proposed_by =='1')
                                                            <button type="button" class="invited_btn open_btn font_weight_600 font-15 text-decoration-none mx-2 text-muted" disabled>
                                                                <i class="fas fa-check"></i>{{
                                                                                        $invite->proposalStatus->status == '1' ? "Accepted Interview" 
                                                                                        : ($invite->proposalStatus->status == '2' ? "Declined Interview" 
                                                                                        : "Invited")}}
                                                            </button>
                                                            @else
                                                            <button type="button" class="open_btn font-15 text-decoration-none me-2 invite_to_job up_green_btn font_weight_600" data-url="{{ route('invite_to_job') }}" data-project_id="{{ $project_id }}" data-user_id="{{ $invite->id }}" data-bs-toggle="modal" data-bs-target="#inviteJob">
                                                                Invite to job
                                                            </button>
                                                            @endif
                                                            @else
                                                            <button type="button" class="invited_btn open_btn font_weight_600 font-15 text-decoration-none mx-2 text-muted" disabled>
                                                                <i class="fas fa-check"></i>Already Proposal Sent
                                                            </button>
                                                            @endif

                                                            @endif

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="inviteJob" tabindex="-1" aria-labelledby="inviteJobLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <form method="post" id="send_invitation_form" action="{{ route('send_invitation') }}">
                                                                        @csrf
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="inviteJobLabel">Invite to job</h1>
                                                                                <button type="button" class="btn-close border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <input type="hidden" name="project_id" id="project_id" value="">

                                                                            <input type="hidden" name="user_id" id="user_id" value="">
                                                                            <div class="modal-body">
                                                                                <div class="d-flex">
                                                                                    <div class="user_on position-relative me-3">
                                                                                        <img class="rounded-circle object-fit-cover" id="user_image" src="{{ asset('images/user_default.jpeg') }}" alt="" width="145" height="145">
                                                                                        <!-- <span><i class="rounded-circle position-absolute fas fa-circle"></i></span> -->
                                                                                    </div>
                                                                                    <div class="user_on_details">
                                                                                        <a href="javascript:void(0)" class="up_title font_weight_600" id="user_title"></a>
                                                                                        <p class="font_14 text-break" id="user_skill"></p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="invite_message mt-3">
                                                                                    <h6 class="font_weight_600">Message</h6>
                                                                                    <div class="mb-3">
                                                                                        <textarea class="form-control shadow-none" name="message" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                                                                                        <div class="invalid-feedback" data-sb-feedback="message:required">
                                                                                            Message is required.</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit" class="up_green_btn">Send invite</button>
                                                                            </div>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="freelancer-title-rate d-flex align-items-center mb-2 mt-3">
                                                        <p class="color_black font_14 font_weight_600 m-0">${{ $invite->freelancerRate->hourly_rate ?? 0 }}</p>
                                                        <span>/hr</span>
                                                    </div>
                                                    <div class="proposal_user_message_box">
                                                        <div class="">
                                                            <p class="font_14 color_black m-0">Has <span class="font_weight_500">{{ $invite->freelancerSkills->count() ?? '' }} relevant
                                                                    skills</span> to your job </p>
                                                        </div>
                                                        <div class="proposal_user_badgets d-flex font_12 pt-3">
                                                            @foreach ($invite->freelancerSkills as $skills)
                                                            <span>{{ $skills->skill->skills_sub }}</span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            @include('layouts.noResults')
                                            @endforelse
                                            <div class="customPagination">
                                                {{$inviteFreelancer->appends(['view' => 'nav-invite-freelancers'])->links('pagination::bootstrap-4')}}
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-invited-freelancer" role="tabpanel" aria-labelledby="nav-invited-freelancer-tab">
                                            <div class="proposal_search_item w-50 position-relative mb-4 px-4">
                                                <form action="{{route('project.proposal.view',['proposalId'=>$project_id])}}" method="GET">
                                                    <input type="hidden" name="view" id="searchTypeProposal" value="nav-invite-freelancers" />
                                                    <input type="hidden" name="view2" id="searchTypeProposal1" value="nav-invited-freelancer-tab" />

                                                    <input aria-label="Search" placeholder="Search" type="search" name="searchProposalInvited" class="up-input w-100 border-0 font_14 px-3">
                                                    <button type="submit" class="border-0 position-absolute"><i class="fa fa-search font_12" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                            @forelse ($invitedFreelancerList as $invites)
                                            <div class="proposal_item px-4 d-flex py-4">
                                                <div class="me-3 d-none d-md-block">
                                                    <img class="rounded-circle" src="{{ asset('/storage/images/client_profile/'.$invites->profile_photo_path ?? 'images/user_default.jpeg') }}" alt="user-image">
                                                </div>
                                                <div class="proposal_user_intro w-100">
                                                    <div class="proposal_user_head_block d-flex align-items-center">
                                                        <div class="me-3 d-block d-md-none">
                                                            <img class="rounded-circle" src="{{ asset('/storage/images/client_profile/'.$invites->profile_photo_path ?? 'images/user_default.jpeg') }}" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <div class="proposal_user_name">
                                                                <h5 class="color_green font_weight_600 freelancer_details_show" data-bs-toggle="modal" data-bs-target="#sideModal" data-action="{{route('search.details')}}" data-id="{{$invites->id}}">
                                                                    {{ $invites->full_name ?? ''}}
                                                                </h5>
                                                            </div>
                                                            <div class="proposal_user_des">
                                                                <h6 class="color_black font_14 font_weight_500 me-3">
                                                                    {{ $invites->freelancerProfile->title ?? '' }}
                                                                </h6>
                                                            </div>
                                                            <div class="proposal_user_place">
                                                                <p class="color_grey font_14 m-0">{{ $invites->country->name ?? '' }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="proposal_user_btn d-none d-md-flex ms-auto">
                                                            <!-- Button trigger modal -->
                                                            @if ($invites->proposalStatus->status == '1')
                                                            <button type="button" class="invited_btn open_btn font_weight_600 font-15 text-decoration-none mx-2 text-muted" disabled>
                                                                Accepted Interview
                                                            </button>
                                                            @elseif($invites->proposalStatus->status == '2')
                                                            <button type="button" class="invited_btn open_btn font_weight_600 font-15 text-decoration-none mx-2 text-muted" disabled>
                                                                <i class="fas fa-check"></i> Declined Interview
                                                            </button>
                                                            @else
                                                            <button type="button" class="invited_btn open_btn font_weight_600 font-15 text-decoration-none mx-2 text-muted" disabled>
                                                                <i class="fas fa-check"></i> Invited
                                                            </button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="freelancer-title-rate d-flex align-items-center mb-2 mt-3">
                                                        <p class="color_black font_14 font_weight_500 m-0">${{ $invites->freelancerRate->hourly_rate ?? 0 }}</p>
                                                        <span>/hr</span>
                                                    </div>
                                                    <div class="proposal_user_message_box">
                                                        <div class="">
                                                            <p class="font_14 color_black m-0">Has <span class="font_weight_500">{{$invites ? $invites->freelancerSkills->count() : '0' }} relevant
                                                                    skills</span> to your job </p>
                                                        </div>
                                                        <div class="proposal_user_badgets d-flex font_12 pt-3">
                                                            @if(isset($invites))
                                                            @if(count($invites->freelancerSkills)>0)
                                                            @foreach ($invites->freelancerSkills as $skills)
                                                            <span>{{ $skills->skill->skills_sub }}</span>
                                                            @endforeach
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            @include('layouts.noResults')
                                            @endforelse
                                            <div class="customPagination">
                                                {{$invitedFreelancerList->appends(['view'=>'nav-invite-freelancers', 'view2'=>'nav-invited-freelancer-tab'])->links('pagination::bootstrap-4')}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade right" id="sideModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable search_talent_modal">
                                        <div class="modal-content h-100">
                                            <div class="modal-header mb-5 up_name pe-5">
                                                <button type="button" class="mod_close" data-bs-dismiss="modal" aria-label="Close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 14 14" role="img">
                                                        <polygon fill-rule="evenodd" points="3 7 10.433 14 12 12.524 6.134 7 12 1.476 10.433 0"></polygon>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="up-card">
                                                    <div class="row">
                                                        <div class="col-12 mb-5">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="d-flex mt-4">
                                                                        <img src="{{asset('/images/user_default.jpeg')}}" class="me-3 rounded-circle object-fit-cover user_image" width="90" height="90" alt="">
                                                                        <div>
                                                                            <h4 class="mb-1 font_weight_700" id="user_name"></h4>
                                                                            <span><i class="fas fa-map-marker-alt text-muted"></i></span>
                                                                            <p class="tet-muted font_14 d-inline-block" id="user_country"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="mt-3">
                                                                <h5 class="font_weight_600">Hours per week</h5>
                                                                <p class="text-muted font_14" id="hours"></p>
                                                            </div>
                                                            <div class="mt-3">
                                                                <h5 class="font_weight_600">Education</h5>
                                                                <p class="text-muted font_14" id="education"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="p-5 talent_desc pt-0">
                                                                <div class="d-flex align-items-center">
                                                                    <h3 class="font_weight_600 mb-4" id="freelancer_title"></h3>
                                                                </div>
                                                                <div>
                                                                    <p id="freelancer_bio"></p>
                                                                </div>
                                                            </div>
                                                            <div class="skills_talent pt-3 ps-5">
                                                                <h4 class="font_weight_600 mb-4">Skills</h4>
                                                                <div class="job_skills up_skill">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="up-card mt-4">
                                                    <h3 class="font_weight_600 mb-4">Employment history</h3>
                                                    <div class="freelancerExperience">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Review Proposal Tab --}}
                        <div class="tab-pane fade" id="review-proposals" role="tabpanel" aria-labelledby="nav-review-proposal">
                            <div class="proposal_applicants_body review_application mt-4 pt-4">
                                <div class="proposal_applicants_header">
                                    <nav class="proposal_applicants_nav_tabbing">
                                        <div class="nav nav-tabs mb-4 ps-4" id="nav-tab" role="tablist">
                                            <button class="active color_grey font_14 me-3 py-2" id="nav-proposals-tab" data-bs-toggle="tab" data-bs-target="#nav-proposals" type="button" role="tab" aria-controls="nav-proposals" aria-selected="true">All Proposals</button>
                                            <button class="color_grey font_14 me-3 py-2" id="nav-shortlisted-tab" data-bs-toggle="tab" data-bs-target="#nav-shortlisted" type="button" role="tab" aria-controls="nav-shortlisted" aria-selected="false">Shortlisted</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="nav-proposals" role="tabpanel" aria-labelledby="nav-proposals-tab">
                                            <div class="proposal_search_item w-50 position-relative mb-4 px-4">
                                                <form action="{{route('project.proposal.view',['proposalId'=>$project_id])}}" method="GET">
                                                    <input type="hidden" name="view" id="searchTypeProposal" value="nav-review-proposal" />
                                                    <input type="hidden" name="view2" id="searchTypeProposal1" value="nav-proposals-tab" />

                                                    <input aria-label="Search" placeholder="Search" name="searchProposalReview" type="search" class="up-input w-100 border-0 font_14 px-3">
                                                    <button type="submit" class="border-0 position-absolute"><i class="fa fa-search font_12" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                            @forelse($proposals as $prop)
                                            @if($prop->users)
                                            <div class="proposal_item px-4 d-flex py-4" data-id="{{$prop->id}}">
                                                <div class="proposal_user_img_block me-5 d-none d-lg-block">
                                                    <div class="user_img">
                                                        <img class="rounded-circle" src="{{$prop->users->profile_photo_path ? asset('/storage/images/client_profile/'.$prop->users->profile_photo_path) : asset('/images/user_default.jpeg')}}" alt="img">
                                                    </div>
                                                    @if($prop->status == 3)
                                                    <div class="mt-3 user_status font_weight_500 text-center">
                                                        <p class="m-0"> Hired</p>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="proposal_user_intro">
                                                    <div class="proposal_user_head_block d-flex justify-content-lg-between align-items-center">
                                                        <div class="d-lg-none user_mobile_img me-3">
                                                            <img class="rounded-circle" src="{{$prop->users->profile_photo_path ? asset('/storage/images/client_profile/'.$prop->users->profile_photo_path) : asset('/images/user_default.jpeg')}}" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="proposal_user_name">
                                                                <h5 class="color_green font_16 font_weight_600">{{$prop->users->firstname.' '.$prop->users->lastname}}</h5>
                                                            </div>
                                                            <div class="proposal_user_des">
                                                                <h6 class="color_black font_14 font_weight_500 me-3">{{$prop->freelancerProfile->title}}</h6>
                                                            </div>
                                                            <div class="mt-2">
                                                                <span class="font_weight_500">${{$prop->freelancerRate->hourly_rate}}</span>
                                                                <span>/hr</span>
                                                            </div>
                                                            <div class="proposal_user_place">
                                                                <p class="color_grey font_14 m-0">{{$prop->users->country->name ?? ''}}</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="proposal_user_message_box">
                                                    <div class="messagr_status color_grey font_12">
                                                        <i class="fas fa-envelope"></i>
                                                        <span>Sent</span>
                                                        <span>{{TimeChange($prop->created_at)}} ago</span>
                                                    </div>
                                                    <div class="cover_letter color_black font_12">
                                                        <strong>Cover letter -</strong>
                                                        <span class="text-break">{{$prop->cover_letter}} </span>
                                                    </div>
                                                    <div class="proposal_user_badgets d-flex font_12 pt-3 flex-wrap">
                                                        @foreach($prop->freelancerSkills as $skills)
                                                        <span>{{$skills->skill->skills_sub}}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="hire_job">
                                                    @if($prop->status == 0)
                                                    <a href="{{route('send.offer.hire-freelancer.review_proposal',['userId' => $prop->user_id , 'projectId' => $prop->project_id])}}" class="font_weight_600 up_green_btn text-decoration-none">Hire</a>
                                                    @endif
                                                </div>
                                            </div>
                                            @endif
                                            @empty
                                            @include('layouts.noResults')
                                            @endforelse
                                            <div class="customPagination">
                                                {{$proposals->appends(['view'=>'nav-review-proposal', 'view2'=>'nav-proposals-tab'])->links('pagination::bootstrap-4')}}
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-shortlisted" role="tabpanel" aria-labelledby="nav-shortlisted-tab">
                                            <div class="proposal_search_item w-50 position-relative mb-4 px-4">
                                                <form action="{{route('project.proposal.view',['proposalId'=>$project_id])}}" method="GET">
                                                    <input type="hidden" name="view" id="searchTypeProposal" value="nav-review-proposal" />
                                                    <input type="hidden" name="view2" id="searchTypeProposal1" value="nav-shortlisted-tab" />
                                                    <input aria-label="Search" placeholder="Search" name="shortListed" type="search" class="up-input w-100 border-0 font_14 px-3">
                                                    <button type="submit" class="border-0 position-absolute"><i class="fa fa-search font_12" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                            {{-- Shortlisted data --}}
                                            @if(!empty($shortListed))
                                            @foreach($shortListed as $list)

                                            <div class="proposal_item px-4 d-flex py-4" data-id="{{$list->proposal->id}}">
                                                <div class="proposal_user_img_block me-5 d-none d-lg-block">
                                                    <div class="user_img">
                                                        <img class="rounded-circle" src="{{(!empty($list->freelancer->profile_photo_path) ? asset('/storage/images/client_profile/'.$list->freelancer->profile_photo_path) : asset('/images/user_default.jpeg'))}}" alt="img">
                                                    </div>
                                                </div>
                                                <div class="proposal_user_intro">
                                                    <div class="proposal_user_head_block d-flex justify-content-lg-between align-items-center">
                                                        <div class="d-lg-none user_mobile_img me-3">
                                                            <img class="rounded-circle" src="{{$list->freelancer->profile_photo_path ? asset('/storage/images/client_profile/'.$list->freelancer->profile_photo_path) : asset('/images/user_default.jpeg')}}" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="proposal_user_name">
                                                                <h5 class="color_green font_14 font_weight_600">{{$list->freelancer->full_name}}</h5>
                                                            </div>
                                                            <div class="proposal_user_des">
                                                                <h6 class="color_black font_14 font_weight_500 me-3">{{$list->freelancer->FreelancerProfile->title ?? ''}}</h6>
                                                            </div>
                                                            <div class="proposal_user_place">
                                                                <p class="color_grey font_14 m-0">{{$list->country->name ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-stats font_14 color_black d-flex justify-content-between align-items-center flex-wrap my-3 my-md-2">
                                                        <div class="">
                                                            <span class="font_weight_500">${{$list->freelancer->freelancerRate->hourly_rate ?? ''}}</span>
                                                            <span>/hr</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="proposal_user_message_box">
                                                    <div class="messagr_status color_grey font_12">
                                                        <i class="fas fa-envelope"></i>
                                                        <span>Sent</span>
                                                        <span>{{TimeChange($list->created_at)}}</span>
                                                    </div>
                                                    <div class="cover_letter color_black font_12">
                                                        <strong>Cover letter -</strong>
                                                        <span class="text-break">{{$list->proposal->cover_letter ?? ''}}</span>
                                                    </div>
                                                    <div class="proposal_user_badgets d-flex font_12 pt-3 flex-wrap">
                                                        @foreach($list->freelancer->freelancerSkills as $value)
                                                        <span>{{$value->skill->skills_sub}}</span>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>


                                            @endforeach
                                            @else
                                            @include('layouts.noResults')
                                            @endif
                                            <div class="customPagination">
                                                {{$shortListed->appends(['view'=>'nav-review-proposal', 'view2'=>'nav-shortlisted-tab'])->links('pagination::bootstrap-4')}}
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-messaged" role="tabpanel" aria-labelledby="nav-messaged-tab">
                                        </div>
                                        <div class="tab-pane fade" id="nav-archived-proposal" role="tabpanel" aria-labelledby="nav-archived-proposal-tab">
                                        </div>
                                    </div>
                                </div>
                                <div class="proposal_user_popoup position-relative">
                                    <div class="proposal_user_content dismiss">
                                        <div class="proposal_user_header d-flex justify-content-between align-items-center px-5 py-3">
                                            <div class="">
                                                <i class="fa-solid fas fa-angle-left"></i>
                                            </div>
                                        </div>
                                        <div class="proposal_user_body px-2 px-sm-5">
                                            <div class="proposal_user_modal_profile mb-4">
                                                <div class="proposal_user_details p-3 p-sm-4 d-flex align-item-center justify-content-between">
                                                    <div class="d-flex pe-4">
                                                        <div class="pe-2" id="freelancerProfile">
                                                        </div>
                                                        <div class="color_black">
                                                            <h4 class="font_weight_500 mb-1" id="freelancer_name"></h4>
                                                            <p class="font_14 m-0" id="fullTitle"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal_proposal_details">
                                                    <div class="row d-flex">
                                                        <div class="col-md-4 modal_proposal_sidebar">
                                                            <div class="p-4">
                                                                <h4 id="projectName" class="font_weight_600 mb-4"></h4>
                                                                <div class="user_relationship font_14 color_black">
                                                                    <p class="m-0 color_black font_18 font_weight_600">Applicant</p>
                                                                    <p class="m-0 color_black" id="applicant"></p>
                                                                </div>
                                                            </div>
                                                            <div class="px-4 education_block pb-4" id="education_section">
                                                                <div class="mb-3">
                                                                    <h5 class="font_weight_600">Hours per week</h5>
                                                                    <p class="text-muted font_14" id="freelancer_hours"></p>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h5 class="font_18 color_black font_weight_600" id="education_title">
                                                                        Education
                                                                    </h5>
                                                                </div>



                                                                <ul class="list-unstyled" id="education-list">
                                                                    <li class="mb-2">
                                                                        <div>
                                                                            <h5 class="font_16 color_black font_weight_500 mb-0" id="school">
                                                                            </h5>
                                                                            <div class="font_14 color_black" id="degree"></div>
                                                                            <div class="font_14 color_grey" id="start_end_date"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 slot_proposal_section ps-0">
                                                            <div class="p-4 border-bottom">
                                                                <div class="d-flex align-items-center">
                                                                    <h3 class="font_weight_600 mb-4" id="freelancer_title_detail"></h3>
                                                                </div>
                                                                <div>
                                                                    <p id="freelancer_bio_detail"></p>
                                                                </div>
                                                                <div class="d-flex my-4">
                                                                    <h5 class="me-auto font_weight_600">Proposal Details</h5>
                                                                    <div>
                                                                        <h5 class="text-center mb-0">
                                                                            <div class="font_18" id="hourly_rate"></div> <small class="font_11">Proposed Bid</small>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                                <div class="cover_letter_section">
                                                                    <h5 class="color_black font_weight_600">Cover letter</h5>
                                                                    <div class="cover_letter_message py-3">
                                                                        <p class="m-0 text-break" id="cover_letter"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="p-4 border-bottom proposal_skill_block">
                                                                <h2 class="font_18 color_black font_weight_600">
                                                                    Skills
                                                                </h2>
                                                                <div class="d-flex font_12 pt-3 flex-wrap all_proposal_skill" id="all_freelancer_skills">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="up-card mt-4">
                                                <h4 class="font_weight_600 mb-4">Employment history</h4>
                                                <div class="freelancerExperiencedetail">
                                                </div>
                                            </div>
                                            <div class="proposal_user_btn p-4 d-flex mobile_proposal_user_btn d-block d-lg-none ">
                                                <button class="me-2">Message</button>
                                                <a href="" class="text-decoration-none">Hire</a>
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
<div class="proposal_user_popoup_bg"></div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/project_review_proposal.js')}}"></script>
<script type="text/javascript" src="{{asset('js/client_dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('js/client_info.js')}}"></script>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const param_x = urlParams.get('view');

    function isEmpty(el) {
        return !$.trim(el.html())
    }
    setTimeout(() => {
        // show
        $(`#${param_x}`).tab('show');

        if ($('#nav-invite-freelancers').hasClass('active') || $("#nav-review-proposal").hasClass('active')) {
            if (!(isEmpty($('.invite_application .tab-content .show .customPagination'))) || !(isEmpty($('.review_application .tab-content .show .customPagination')))) {
                var text = window.location.href;
                var qwe = text.split('&');
                var split2 = qwe[1].split("=");
                var split3 = split2[1];
                setTimeout(() => {
                    // show
                    $("#" + split3).tab('show');
                }, 100);
            }
        }
    }, 10);
</script>
@endsection