@extends('layouts.app')
@section('content')

<section class="profile_search_section min_60vh mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="profile_search_block border-grey-radius">
                    <div class="profile_search_input p-4 border-bottom position-relative">
                        <form action="{{route('search_project_view')}}" method="GET">
                            <input type="hidden" name="searchType" id="searchType_dashboard" value="0" />
                            <input type="search" id="search_project" name="search" class="w-100" value="{{Session::get('search_project')}}">
                            <button type="submit" class="search_talent_page search_icon position-absolute"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    @if(count($talentSearch)>0)
                    @foreach($talentSearch as $searches)
                    <div class="profile_search_item p-4">
                        <div class="search_user_heading">
                            <div class="search_user_details px-4 d-flex justify-content-between align-items-start">
                                <div class="d-flex">
                                    <div class="pe-3">
                                        <img src="{{$searches->profile_photo_path  ? asset('/storage/images/client_profile/'.$searches->profile_photo_path): 'images/user_default.jpeg'}}">
                                    </div>
                                    <div class="color_black">
                                        <h5 class="font_weight_600 mb-1 font_18 color_green freelancer_details_show" data-bs-toggle="modal" data-bs-target="#sideModal" data-action="{{route('search.details')}}" data-id="{{$searches->id}}">{{$searches->firstname}} {{$searches->lastname}}</h5>
                                        <p class="font_14 m-0 font_weight_500">{{$searches->FreelancerProfile->title ?? ''}}</p>
                                        <span class="search_user_country font_14 color_grey">{{$searches->country->name}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-stats font_14 color_black d-flex justify-content-between align-items-center px-4 my-3">
                                <div class="">
                                    <span class="font_weight_500">{{$searches->freelancerRate ? '$'.$searches->freelancerRate->hourly_rate .'/hr': ''}}</span>
                                </div>
                            </div>
                            <div class="search_profile_des font_14 color_black px-4">
                                <p>{{$searches->FreelancerProfile->bio ?? ''}}</p>
                            </div>
                            <div class="search_profile_consultations d-flex font_12 px-4">
                                @foreach($searches->freelancerSkills as $skills)
                                <span>{{$skills->skill->skills_sub}}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    @include('layouts.noResults')
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
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

@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/client_info.js')}}"></script>
@endsection