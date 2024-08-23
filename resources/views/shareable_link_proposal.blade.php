<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/project_review_proposal.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/fonts-awesome/css/all.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/freelancer.css')}}">
</head>

@extends('layouts.static')
@section('content') 
<body>

<section class="review_proposal min_60vh my-5">
    <div class="container-xl">
        <div class="row">
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
            <div class="alert alert-danger" role="alert" id="errorAlert" style="display:none;">
                <!-- Error messages will be shown here -->
            </div>
            <div class="alert alert-success" role="alert" id="successAlert" style="display:none;">
                <!-- Error messages will be shown here -->
            </div>
            <div class="col-sm-12">
                <h1 class="font_22 color_black mb-4 mt-3 font_weight_600">{{$projectDetail->title}}</h1>
            </div>
            <div class="col-sm-12 p-md-12">
                <div class="proposal_breadcrumb">
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
                                                <span class="font_14 color_grey">Posted <span>{{TimeChange($projectDetail->updated_at)}}</span></span>
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
                                                    {{-- <div class="expertise_grp_title">
                                                        <p class="m-0 font_weight_500 font_14">{{$projectDetail->specialities->title}}</p>
                                                    </div> --}}
                                                    <div class="expertise_grp_badget d-flex font_12 pt-3 flex-wrap">
                                                        @foreach($projectDetail->ProjectSkill as $skills)
                                                        <span>{{$skills->skill->skills_sub}}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        @if(count($projectDetail->images)>0)
                                            <section class="view_job_block p-4">
                                                <h4 role="heading" aria-level="3" class="color_black font_weight_600 font_16">
                                                Attachments
                                                </h4>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        
                                                        <div class="expertise_grp_badget d-flex font_12 pt-3 flex-wrap">
                                                            @foreach ($projectDetail->images as $image)
                                                                <div class="posting_one_content up_image me-3 mb-4 position-relative pip_{{ $image->id }}">
                                                                    <img src ="{{ url($image->filename) }}" alt="image" class="form-control img-fluid p-0 pip_{{ $image->id }}"/>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        @endif
                                        @if($questions && $questions->isNotEmpty())
                                            <section class="view_job_block p-4 border-bottom-0" style="border-top: 1px solid #ddd;">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h2 role="heading" aria-level="2" class="font_18 font_weight_600 color_black mb-4">
                                                            You will be asked to answer the following questions when submitting a proposal
                                                        </h2>
                                                        <ul class="list-unstyled">
                                                            @foreach($questions as $index => $question)
                                                                <li class="py-1">
                                                                    <span class="font_14 color_grey me-1">{{ $index + 1 }}. </span>
                                                                    <span class="font_14 color_black">{{ $question->question }}</span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                        @endif
                                    </div>
                                    <div class="col-lg-3 ps-lg-0">
                                    
                                        @if(auth()->user())
                                            @if(auth()->user()->is_admin==0)
                                                <div class="job_apply job_margin">
                                                    <a href="{{ route('job.proposal', ['id' => $projectDetail->id]) }}" id="job_apply_btn" class="job_apply_btn">Apply</a>
                                                    <button class="job_save_btn d-inline-block side_job_btn">
                                                        <input type="hidden" id="popup_job_save_btn_id" class="d-inline-block_id" value="{{$projectDetail->id}}" />
                                                        <div class="d-inline-block">
                                                            @if($saveJob > 0)
                                                                <i class="fa fa-heart save_project"></i>
                                                            @else
                                                                <i class="far fa-heart save_project"></i>
                                                            @endif
                                                        </div>
                                                        <span class="font_15">Save Job</span>
                                                    </button>
                                                </div>
                                            @endif
                                        @else
                                            <div class="d-flex">
                                                <div class="card p-4" style="border-radius: 0 10px 0 0;">
                                                    <h4 class="text-center mb-3">Explore SmartDev opportunities for free</h4>
                                                    <div class="d-grid gap-2">
                                                        <a href="{{ url('register') }}" class="btn btn-success btn-lg" type="button">Sign up</a>
                                                        <small class="text-center mt-1">
                                                            Already have an account? <a href="{{ url('login') }}" class="text-decoration-none">Log in</a>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        @endif
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
                                                        <p>
                                                            <small class="font_12 color_black f">
                                                                {{ $projectDetail->user->clientDetails->getState ? $projectDetail->user->clientDetails->getState->name : ""}}
                                                            </small>
                                                            <small>
                                                                {{ $timezone ? ' - ' . $timezone : '' }}
                                                            </small>
                                                        </p>
                                                    </li>
                                                    <li class="py-1">
                                                        <strong class="font_12 color_black f">
                                                            <span>{{$project_count}}</span> jobs posted
                                                        </strong>
                                                    </li>
                                                    <li class="py-1">
                                                        @if($projectDetail->user->created_at)
                                                            <small class="font_12 color_black f">
                                                                Member since <span>{{ $projectDetail->user->created_at->format('M j, Y') }}</span>
                                                            </small>
                                                        @endif
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

</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    
    // save job project
    $(document).on("click", ".job_save_btn", function (e){    
        e.stopPropagation();
        var id = $(this).find("#job_save_btn_id, #popup_job_save_btn_id").val();
        console.log(id);
        $(this).find(".fa-heart").toggleClass("fa");
        saveProject(id);
    });


    function saveProject(id) {
        var urlDetails = '/freelancer/details';
        $.ajax({
            url: "/freelancer/saveProject",
            type: "POST",
            data: {
                id: id,
                _token: $('meta[name="csrf-token"]').attr('content') // Add CSRF token here
            },
            dataType: "json",
            success: function (response) {
                var description = response.data.description
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;");
                var budget =
                    response.data.budget == "project"
                        ? "Fixed-price"
                        : "Hourly: $" +
                          response.data.hourly_from +
                          ".00-$" +
                          response.data.hourly_to;
                if (response.type == "Add") {
                    var html =
                        '<div class="job-tile-list best_matches_result contact_save_list_' +
                        response.data.id +
                        '" data-id="' +
                        response.data.id +
                        '" data-title="' +
                        response.data.title +
                        '" data-action="'+urlDetails+'">\
                    <div class="row">\
                        <div class="col">\
                            <button type="button" class="bg-transparent border-0 open_btn" >' +
                        response.data.title +
                        '</button>\
                        </div>\
                        <div class="pr-15 save_btn">\
                            <button>\
                                <div class="job_save_btn"><i class="fa fa-heart save_project"></i><input type="hidden" id="job_save_btn_id" value="' +
                        response.data.id +
                        '"></div>\
                            </button>\
                        </div>\
                    </div>\
                    <div class="mt-2">\
                        <small class="text-muted display-inline-block text-muted"><strong data-test="job-type">' +
                        budget +
                        '</strong> <span>\
                                - <span data-test="contractor-tier">' +
                        response.data.level +
                        " level</span></span> <span>";
                    if (response.data.budget == "project") {
                        html +=
                            '<span>Est. Budget: </span> <span data-test="budget">$' +
                            response.data.project_budget +
                            "</span>";
                    }
                    html +=
                        '</span>\
                        <span>\
                        </small>\
                    </div>\
                    <div class="mt-1 small_desc">\
                        <p>- ' +
                        description +
                        '</p>\
                    </div>\
                    <div class="up_skill">';
                    $.each(
                        response.data.project_skill,
                        function (index, value) {
                            html +=
                                '<a href="javascript:void(0)">' +
                                value.skill.skills_sub +
                                "</a>";
                        }
                    );
                    html +=
                        '</div>\
                    <div class="up_prop">\
                    </div>\
                </div>';
                    $("#contact").append(html);
                    var $siblings = $('.contact_home_list_'+response.data.id).find('i');
                    $siblings.addClass('fa');
                    var $sibling1 = $('.contact_recent_list_'+response.data.id).find('i');
                    $sibling1.addClass('fa');
                } else {
                    $(".contact_save_list_" + response.data.id).remove();
                    var $siblings = $('.contact_home_list_'+response.data.id).find('i');
                    $siblings.removeClass('fa').addClass('far');
                    var $sibling1 = $('.contact_recent_list_'+response.data.id).find('i');
                    $sibling1.removeClass('fa').addClass('far');
                    
                    var html =
                        '<div class="job-tile-list contact_home_list_' +
                        response.data.id +
                        '">\
                        <div class="row">\
                            <div class="col">\
                                <button type="button" class="bg-transparent border-0 open_btn best_matches_result" data-id="' +
                        response.data.id +
                        '" data-title="' +
                        response.data.title +
                        '"data-action="'+urlDetails+'" data-bs-toggle="modal" data-bs-target="#sideModal">' +
                        response.data.title +
                        '</button>\
                            </div>\
                            <div class="pr-15 save_btn">\
                                <button>\
                                    <div class="job_save_btn"><i class="far fa-heart save_project"></i><input type="hidden" id="job_save_btn_id" value="' +
                        response.data.id +
                        '"></div>\
                                </button>\
                            </div>\
                        </div>\
                        <div class="mt-2">\
                            <small class="text-muted display-inline-block text-muted"><strong data-test="job-type">' +
                        budget +
                        '</strong> <span>\
                                    - <span data-test="contractor-tier">' +
                        response.data.level +
                        " level</span></span> <span>";
                    if (response.data.budget == "project") {
                        html +=
                            '<span>Est. Budget: </span> <span data-test="budget">$' +
                            response.data.project_budget +
                            "</span>";
                    }
                    html +=
                        '</span>\
                            <span>\
                            </small>\
                        </div>\
                        <div class="mt-1 small_desc">\
                            <p>- ' +
                        description +
                        '</p>\
                        </div>\
                        <div class="up_skill">';
                    $.each(
                        response.data.project_skill,
                        function (index, value) {
                            html +=
                            '<a href="javascript:void(0)">' +
                            value.skill.skills_sub +
                            "</a>";
                    }
                );
                html +=
                    '</div>\
                    <div class="up_prop">\
                    </div>\
                </div>';
                    // $("#home").append(html);
                }
            },
        });
    }
</script>
</html>
@endsection
