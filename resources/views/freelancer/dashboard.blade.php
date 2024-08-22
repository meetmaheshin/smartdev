@extends('layouts.app')
@section('content')
<div class="freelancer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 order-sm-2 order-lg-1 order-2 mb-5">
                <div class="announcements mb-30">
                    <h3 class="mb-5p">{{DateChange(date('Y-m-d'))}}</h3>
                    <h2 class="text-truncate">{{Greet()}}, {{Auth::user()->fullname}}</h2>
                </div>
                <div class="w-100 mb-30">
                    <form action="{{route('search_project_view')}}" method="GET">
                        <div class="search_input position-relative">
                            <input type="hidden" name="searchType" id="searchType_dashboard" value="1" />

                            <input placeholder="Search for job" type="search" id="search_project_dashboard" name="search">
                            <div class="search_button">
                                <button type="submit" class="search_dashboard_page">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="up-card">
                    <div class="row mb-2">
                        <div class="col">
                            <h4>Jobs you might like</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link color_green active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Best Matches</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link color_green" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Most Recent</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link color_green" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Saved Jobs</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <!-- Home -->
                                <div class="tab-pane fade tab_content show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <p class="font_14">Browse jobs that match your experience to a client's hiring preferences. Ordered by most relevant.</p>
                                    @if(count($project_best)>0)
                                    @foreach($project_best as $projects)

                                        <div class="job-tile-list best_matches_result contact_home_list_{{$projects->id}}" data-action="{{route('details')}}" data-id="{{$projects->id}}" data-title="{{$projects->title}}">
                                            <div class="row">
                                                <div class="col">
                                                    <button type="button" class="bg-transparent border-0 open_btn font_20 font_weight_600" >
                                                        {{$projects->title}}
                                                    </button>

                                                </div>
                                                <div class="pr-15 save_btn">
                                                    <button class="job_save_btn">
                                                        <div class="d-inline-block">
                                                                @if($projects->saveJobs == null)
                                                                    <i class="far fa-heart save_project"></i>
                                                                @else
                                                                    <i class="fa fa-heart save_project"></i>
                                                                @endif
                                                            <input type="hidden" id="job_save_btn_id" value="{{$projects->id}}"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <small class="text-muted display-inline-block text-muted"><strong data-test="job-type">{{($projects->budget=='project'? 'Fixed-price' : 'Hourly: $'.$projects->hourly_from.'.00-$'.$projects->hourly_to.'.00')}}</strong> <span>
                                                        - <span data-test="contractor-tier">{{ucfirst($projects->level)}} level</span></span> <span>

                                                        @if($projects->budget=='project')
                                                        <span>Est. Budget: </span> <span data-test="budget">
                                                            ${{$projects->project_budget}}
                                                        </span>
                                                        @endif
                                                    </span>
                                                    <span>
                                                        - Posted
                                                        <span data-test="posted-on"><span>{{TimeChange($projects->updated_at)}} </span></span></span>
                                                </small>
                                            </div>
                                            <div class="mt-1 small_desc">
                                                <p>- {{$projects->description}}</p>
                                            </div>
                                            <div class="up_skill">
                                                @if(count($projects->ProjectSkill)>0)
                                                @foreach($projects->ProjectSkill as $dataskills)
                                                <a href="javascript:void(0)">{{$dataskills->skill->skills_sub}}</a>
                                                @endforeach
                                                @endif
                                            </div>
                                            <div class="up_prop">
                                                <small class="d-inline-block mr-10 font-14">
                                                    <span class="text-muted">Proposal: </span>
                                                    <span class="font_weight_500">{{$projects->get_proposal_setting_count}}</span>
                                                </small>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                </div>

                                <!-- Most Recent -->
                                <div class="tab-pane fade tab_content show" id="profile" role="tabpanel" aria-labelledby="home-tab">
                                    <p class="font_14">Profile browse jobs that match your experience to a client's hiring preferences. Ordered by most relevant.</p>
                                    @if(count($project_recent)>0)
                                        @foreach($project_recent as $projects)
                                            <div class="job-tile-list best_matches_result contact_recent_list_{{$projects->id}}" data-action="{{route('details')}}" data-id="{{$projects->id}}" data-title="{{$projects->title}}">
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="button" class="bg-transparent border-0 open_btn font_20 font_weight_600" >
                                                            {{$projects->title}}
                                                        </button>

                                                    </div>
                                                    <div class="pr-15 save_btn">
                                                        <button class="job_save_btn">
                                                            <div class="d-inline-block">
                                                                @if($projects->saveJobs == null)
                                                                    <i class="far fa-heart save_project"></i>
                                                                @else
                                                                    <i class="fa fa-heart save_project"></i>
                                                                @endif
                                                                
                                                                <input type="hidden" id="job_save_btn_id" value="{{$projects->id}}"></div>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <small class="text-muted display-inline-block text-muted"><strong data-test="job-type">{{($projects->budget=='project'? 'Fixed-price' : 'Hourly: $'.$projects->hourly_from.'.00-$'.$projects->hourly_to.'.00')}}</strong> <span>
                                                            - <span data-test="contractor-tier">{{ucfirst($projects->level)}} level</span></span> <span>

                                                            @if($projects->budget=='project')
                                                            <span>Est. Budget: </span> <span data-test="budget">
                                                                ${{$projects->project_budget}}
                                                            </span>
                                                            @endif
                                                        </span>
                                                        <span>
                                                            - Posted
                                                            <span data-test="posted-on"><span>{{TimeChange( $projects->updated_at)}} </span></span></span>
                                                    </small>
                                                </div>
                                                <div class="mt-1 small_desc">
                                                    <p>- {{$projects->description}}</p>
                                                </div>
                                                <div class="up_skill">
                                                    @if(count($projects->ProjectSkill)>0)
                                                    @foreach($projects->ProjectSkill as $dataskills)
                                                    <a href="javascript:void(0)">{{$dataskills->skill->skills_sub}}</a>
                                                    @endforeach
                                                    @endif
                                                </div>
                                                <div class="up_prop">
                                                    <small class="d-inline-block mr-10 font-14">
                                                        <span class="text-muted">Proposals: </span>
                                                        <span class="font_weight_500">{{$projects->get_proposal_setting_count}}</span>
                                                    </small>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <!-- Saved Jobs -->
                                <div class="tab-pane fade tab_content show" id="contact" role="tabpanel" aria-labelledby="home-tab">
                                    <p class="font_14">contact Browse jobs that match your experience to a client's hiring preferences. Ordered by most relevant.</p>
                                    @if(count($project_best)>0)
                                        @foreach($project_best as $projects)
                                            @if($projects->saveJobs != null)
                                            <div class="job-tile-list best_matches_result contact_save_list_{{$projects->id}}" data-action="{{route('details')}}" data-id="{{$projects->id}}" data-title="{{$projects->title}}">
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="button" class="bg-transparent border-0 open_btn font_20 font_weight_600">
                                                            {{$projects->title}}
                                                        </button>
                                                    </div>
                                                    <div class="pr-15 save_btn">
                                                        <button class="job_save_btn">
                                                            <div class="d-inline-block"><i class="fa fa-heart save_project"></i><input type="hidden" id="job_save_btn_id" value="{{$projects->id}}"></div>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <small class="text-muted display-inline-block text-muted"><strong data-test="job-type">{{($projects->budget=='project'? 'Fixed-price' : 'Hourly: $'.$projects->hourly_from.'.00-$'.$projects->hourly_to.'.00')}}</strong> <span>
                                                            - <span data-test="contractor-tier">{{ucfirst($projects->level)}} level</span></span> <span>

                                                            @if($projects->budget=='project')
                                                            <span>Est. Budget: </span> <span data-test="budget">
                                                                ${{$projects->project_budget}}
                                                            </span>
                                                            @endif
                                                        </span>
                                                        <span>
                                                            - Posted
                                                            <span data-test="posted-on"><span>{{ TimeChange($projects->updated_at)}} </span></span></span>
                                                    </small>
                                                </div>
                                                <div class="mt-1 small_desc">
                                                    <p>- {{$projects->description}}</p>
                                                </div>
                                                <div class="up_skill">
                                                    @if(count($projects->ProjectSkill)>0)
                                                    @foreach($projects->ProjectSkill as $dataskills)
                                                    <a href="javascript:void(0)">{{$dataskills->skill->skills_sub}}</a>
                                                    @endforeach
                                                    @endif
                                                </div>
                                                <div class="up_prop">
                                                    <small class="d-inline-block mr-10 font-14">
                                                        <span class="text-muted">Proposal: </span>
                                                        <span class="font_weight_500">{{$projects->get_proposal_setting_count}}</span>
                                                    </small>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-lg-3 order-sm-1 mb-5">
                <div class="sidebar_free">
                    <div class="up-card">
                        <a href="javascript:void(0)" class="d-flex flex-column align-items-center">
                            <img class="up-avatar up-avatar-60" src="{!! !empty(Auth::user()->profile_photo_path) ? asset('/storage/thumbnail/client_profile/'.Auth::user()->profile_photo_path)   : asset('images/user_default.jpeg') !!}" alt="">
                        </a>
                        <div class="text-center up_name">
                            <h3 class="mt-20 mb-0">
                                <a href="{{route('contact.info.settings')}}" class="profile-title font_weight_500 bg-transparent border-0 open_btn">
                                    {{Auth::user()->fullname}}
                                </a>
                            </h3>
                            <p class="mt-1 mb-0 text-truncate">
                                {{Auth::user()->FreelancerProfile->title ?? ''}}
                            </p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade right" id="sideModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content h-100">
            <div class="modal-header mb-5 up_name">
                <button type="button" class="mod_close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 14 14" role="img">
                        <polygon fill-rule="evenodd" points="3 7 10.433 14 12 12.524 6.134 7 12 1.476 10.433 0"></polygon>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="job_details pe-0">
                    <div class="row">
                        <div class="col-12 job_details_content">
                            <div class="first_pop job_margin">
                                <h5 id="modal_title" class="font_weight_600 mb-3"></h5>
                                <div class="posting_stamp">
                                    <h6 id="modal_specialities"></h6>
                                    <span class="mt-5p d-inline-block">Posted</span><span class="mt-5p d-inline-block ms-1" id="modal_time"> </span>
                                </div>

                            </div>
                            <div class="job_description_details job_border job_margin">
                                <p id='modal_description' class="text-break"></p>
                            </div>
                            <div class="job_rate job_border job_margin">
                                <ul class="p-0">
                                    <li class="">
                                        <div class="up_svg d-inline-block mr-5p" data-cy="fixed-price"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 14 14" role="img">
                                                <path d="M13.688.311L8.666 0 0 8.665 5.334 14 14 5.332 13.688.311zm-2.354 1.528a.827.827 0 11-.002 1.654.827.827 0 01.002-1.654zM6.441 9.892c-.384-.016-.761-.168-1.128-.455l-.73.729-.579-.578.73-.729a3.612 3.612 0 01-.498-.872 3.186 3.186 0 01-.223-.934l.965-.331c.018.339.094.672.229 1.002.133.325.297.586.488.777.164.164.32.264.473.295s.287-.009.4-.123a.422.422 0 00.131-.315c-.004-.123-.035-.249-.094-.381s-.146-.308-.27-.52a6.892 6.892 0 01-.39-.793 1.501 1.501 0 01-.086-.7c.028-.248.157-.486.383-.714.275-.273.596-.408.971-.402.369.008.74.149 1.109.423l.682-.682.578.577-.676.677c.176.224.326.461.446.707.121.25.205.495.252.734l-.965.354a3.638 3.638 0 00-.314-.84 2.369 2.369 0 00-.419-.616.863.863 0 00-.404-.253.344.344 0 00-.342.1.438.438 0 00-.109.458c.049.18.162.427.332.739.172.31.299.582.383.807.086.226.113.465.084.714-.03.252-.161.493-.393.723-.295.297-.635.436-1.016.422z"></path>
                                            </svg>
                                        </div>
                                        <span class="font_weight_500 " id="modal_price"></span>
                                        <small class="text-muted font_12 d-block " id="modal_budget" style="margin-left: 24px;"></small>
                                    </li>
                                    <li class="">
                                        <div class="up_svg d-inline-block mr-5p" data-cy="expertise">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <span class="font_weight_500" id="modal_level"></span>
                                        <small class="text-muted font_12 d-block"></small>
                                    </li>
                                    <li class="">
                                        <div class="up_svg d-inline-block mr-5p" data-cy="expertise">
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                        <span class="font_weight_500" id="modal_duration"></span>
                                        <small class="text-muted font_12 d-block"></small>
                                    </li>
                                </ul>
                            </div>
                            <div class="job_attachment job_rate job_border job_margin">
                                <h5 class="mb-4 font_weight_600">Attachment</h5>
                                <div>
                                    <span class="job_attachments"></span>
                                </div>
                            </div>
                            <div class="job_skills_content job_rate job_border job_margin">
                                <h5 class="mb-4 font_weight_600">Skills and Expertise</h5>
                                <div class="d-flex">
                                    <span class="job_skills"></span>
                                </div>
                            </div>

                            <section id="questions-section" class="view_job_block pt-4 pd-4 border-bottom-0 job_border .job_margin" style="display: none;">
                                {{-- <div class="row">
                                    <div class="col-sm-12"> --}}
                                        <h2 role="heading" aria-level="2" class="font_18 font_weight_600 color_black mb-4">
                                            You will be asked to answer the following questions when submitting a proposal
                                        </h2>
                                        <ul class="list-unstyled" id="questions-list">
                                            <!-- Questions will be dynamically inserted here -->
                                        </ul>
                                    {{-- </div>
                                </div> --}}
                            </section>
                            
                        </div>
                        <div class="col-4 job_details_sidebar ps-0">
                            <div class="job_apply job_margin">
                                <a href="javascript::void(0)" id="job_apply_btn" class="job_apply_btn">Apply</a>
                                <button class="job_save_btn d-inline-block side_job_btn">
                                    <input type="hidden" id="popup_job_save_btn_id" class="d-inline-block_id" value="" />
                                    <div class="d-inline-block">
                                        <i class="far fa-heart save_project"></i>
                                    </div>
                                    <span class="font_15">Save Job</span>
                                </button>
                            </div>
                            <div class="freelancer_connect_details font_14 color_black mb-3">
                                <div class="mb-2">
                                    <span>Send a proposal for:</span>
                                    <span>3 Tokens</span>
                                </div>
                                <div>
                                    <span>Available Rovi Tokens:</span>
                                    <span id="available_rovi_user_balance">0</span>
                                </div>
                                <div>
                                    <span>Available USDT Tokens:</span>
                                    <span id="available_usdt_user_balance">0</span>
                                </div>
                                <div>
                                    <span>Available SmartDev3 Tokens:</span>
                                    <span id="available_dev3_user_balance">0</span>
                                </div>
                            </div>
                            <div class="about_client_block font_13">
                                <div class="about_inner color_black py-3">
                                    <h5 class="font_weight_bold mb-3">About the Client</h5>
                                    <strong class="font_12 color_black f">
                                        <p class="mb-1 font_weight_bold font_14" id="client_name">Client Name</p>
                                        <p class="mb-0" id="client_country"></p>
                                    </strong>
                                    <p>
                                        <small class="text-muted">
                                            <span class="mb-0" id="client_state"></span>
                                        </small>
                                        <span id="timezone"></span>
                                    </p>
                                    <strong class="font_12 color_black f">
                                        <span id="project_count"></span>
                                    </strong>
                                    <p>
                                        <small id="member_since"></small>
                                    </p>

                                    <div class="d-flex">
                                        <div class="job-link-container">
                                            <h5 class="form-label">Job link</h5>
                                            <div class="input-group mb-3">
                                                <input type="hidden" id="baseUrl" value="{{ url('/') }}">
                                                <input type="text" class="form-control" id="jobLink" value="" readonly>
                                            </div>
                                            <span style="cursor: pointer; color: green;" class="copy-link-btn" id="copyLink">Copy link</span>
                                        </div>
                                    </div>
                                    {{-- <p>
                                        @php
                                            $avgPaid = ($projects->hourly_from + $projects->hourly_to) / 2;
                                        @endphp
                                        <small class="text-muted display-inline-block">
                                            <strong data-test="job-type">{{ ($projects->budget == 'project' ? 'Fixed-price' : '$' . $avgPaid . '/hr avg hourly rate paid') }}</strong>
                                        </small>
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
    <script>
        document.getElementById('copyLink').addEventListener('click', function() {
            var copyText = document.getElementById('jobLink').value;
            navigator.clipboard.writeText(copyText).then(function() {
                var copyLinkElement = document.getElementById('copyLink');
                var originalText = copyLinkElement.textContent; // Store the original text
                copyLinkElement.textContent = 'Copied'; // Change the text to "Copied"

                // Set a timeout to change the text back after 5 seconds
                setTimeout(function() {
                    copyLinkElement.textContent = originalText; // Revert to the original text
                }, 5000); // 5000 milliseconds = 5 seconds
            }).catch(function(err) {
                console.error('Could not copy text: ', err);
            });
        });
    </script>
@endsection