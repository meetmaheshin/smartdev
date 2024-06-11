@extends('layouts.app')
@section('content')
<section class="resualt_search_project min_60vh">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="search_project_input position-relative">
                    <form action="{{route('search_project_view')}}" method="GET">
                        <input type="hidden" name="searchType" id="searchType_dashboard" value="1" />
                        <input type="search" id="search_project_dashboard" name="search" placeholder="Search project" aria-label="Search project" value="{{$searchVal}}">
                        <button type="submit" class="search_project_page search_icon position-absolute"><i class="fa fa-search position-absolute" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            @if(count($projectSearch)>0)
            @foreach($projectSearch as $searches)
            <div class="search_list_item col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <div class="project_title_block">
                    @if(auth()->user()->is_admin == '1')
                    <a href="javascript:void(0)" data-id="{{$searches->id}}" data-title="{{$searches->title}}" data-action="{{auth()->user()->is_admin == '1' ? route('project.proposal.ajax'): route('details')}}" data-id="{{auth()->user()->is_admin == '1' ? $searches->id.'?view=nav-view-job' : $searches->id}}" class="d-block text-decoration-none color_black font_14 {{ auth()->user()->is_admin == '1'? 'view_proposals':'best_matches_result' }}">
                        @else
                        <a href="javascript:void(0)" data-id="{{$searches->id}}" data-title="{{$searches->title}}" data-action="{{auth()->user()->is_admin == '1' ? route('project.proposal.ajax'): route('details')}}" data-id="{{auth()->user()->is_admin == '1' ? $searches->id.'?view=nav-view-job' : $searches->id}}" class="d-block text-decoration-none color_black font_14 {{ auth()->user()->is_admin == '1'? 'view_proposals':'best_matches_result' }}" data-bs-toggle="modal" data-bs-target="#sideModal">
                            @endif

                            <div class="project_title_body">
                                <div class="project_title_img position-relative">
                                    <div class="project_inner_img position-absolute">
                                        <img class="w-100 h-100" src="{!! !empty($searches->images[0]) ? asset($searches->images[0]->filename)   : asset('images/placeholder.png') !!}">
                                    </div>
                                </div>
                                <div class="project_title_content">
                                    <h3 class="font_14 font_weight_500 color_green">{{$searches->title}}</h3>
                                    <div class="project-tile__info d-flex justify-content-between align-items-center">
                                        <div class="color_black">
                                            <p class="m-0"> From ${{$searches->project_budget ? $searches->project_budget : $searches->hourly_from}}</p>
                                        </div>
                                        <div class="color_grey">
                                            <!-- <span><i class="fas fa-clock"></i></span>
												<span> 2 day delivery</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project_title_footer d-flex justify-content-between align-items-top color_black">
                                <div class="user_badge d-flex align-items-center">
                                    <div class="user_badge_img pe-2">
                                        <img src="{!! !empty($searches->user->profile_photo_path) ? asset('storage/images/client_profile/'.$searches->user->profile_photo_path)   : asset('images/user_default.jpeg') !!}">
                                    </div>
                                    <div class="user_badge_content">
                                        <span>{{$searches->user->firstname}}</span>
                                        <div class="user_top_rated_plus">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                </div>
            </div>
            @endforeach
            @else
            @include('layouts.noResults')
            @endif
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
                    <div class="job_details">
                        <div class="row">
                            <div class="col-12 job_details_content">
                                <div class="first_pop job_margin">
                                    <h4 id="modal_title" class="font_weight_600"></h4>
                                    <div class="posting_stamp">
                                        <h5 id="modal_specialities" class="font_weight_600"></h5>
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
                                            <small class="text-muted font_12 d-block " id="modal_budget"></small>
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
                                <div class="job_skills_content job_rate job_border job_margin">
                                    <h5 class="mb-4 font_weight_600">Skills and Expertise</h5>
                                    <div class="d-flex">
                                        <span class="job_skills"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 job_details_sidebar ">
                                <div class="job_apply job_margin">
                                    <a href="javascript::void(0)" id="job_apply_btn" class="job_apply_btn">Apply</a>
                                    <button class="job_save_btn d-inline-block side_job_btn">
                                        <input type="hidden" id="popup_job_save_btn_id" class="d-inline-block_id" value="" />
                                        <div class="d-inline-block"><i class="far fa-heart save_project"></i></div>
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
                                        <p class="mb-1 font_weight_bold font_14" id="client_name">Client Name</p>
                                        <p class="mb-0" id="client_country"></p>
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
<script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('js/client_dashboard.js')}}"></script>

@endsection