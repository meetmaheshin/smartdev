@extends('layouts.app')
@section('content')
<div class="container min_60vh mt-5">
    <h4 class="mb-4 font_weight_600">All Contracts </h4>

    <div class="up-card">
        <div class="row">
            @if(count($allContract)>0)
            <div class="col-12 col-lg-6">
                <div class="w-100 mb-30">
                    <form action="{{route('project.all_contracts')}}" method="GET">
                        <div class="search_input position-relative">
                            <input placeholder="Search for job" type="search" name="gsearch" id="gsearch" value="">
                            <div class="search_button">
                                <button type="submit" class="search_dashboard_page">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 contracts_listdown">
                <ul class="list-unstyled">
                    @foreach($allContract as $contracts)
                    <li class="contracts_listdown_list">
                        <div class="row">
                            <div class="col-9 col-lg-9 col-md-10 col-sm-10">
                                <h5 class="m-0"><a class="up_title best_matches_result" href="javascript:void(0)" data-project-id="{{$contracts->project_id}}" data-action="{{route('client.details')}}" data-freelancer-id="{{$contracts->freelancer_id}}" data-client-id="{{$contracts->client_id}}" data-id="{{$contracts->project_id}}" data-title="{{$contracts->title}}" data-bs-toggle="modal" data-bs-target="#sideModal">{{$contracts->projects->title}}</a></h5>
                                <p class="text-muted font_13 m-0">{{$contracts->freelancer->full_name}}</p>
                            </div>
                            <div class="col-lg-3 col-md-2 text-right">
                                <span class="up_green_btn">{{$contracts->finish_project == '1' ? 'End Contract' : ''}}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="customPagination">
                    {{$allContract->links('pagination::bootstrap-4')}}
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-12">
                    <div class="up-card">
                        <div class="d-flex align-items-center justify-content-center mt-5">
                            <div class="no_msg_tx">
                                <img src="{{asset('images/no-msg.png')}}" width="250" alt="">
                                <h4 class="m-0 font_weight_600 mb-4">You don't have any contracts yet.</h4>
                                <p class="text-muted font_12">Your pending and active contracts will be available here when you start hiring talent <a href="{{route('project_started')}}" class="color_green text-decoration-none">Post a job</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
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
                <div class="job_details">
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
                                            <!-- <i class="fas fa-calendar"></i> -->
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                        <span class="font_weight_500" id="modal_duration"></span>
                                        <small class="text-muted font_12 d-block"></small>
                                    </li>
                                </ul>
                            </div>
                            <div class="job_skills_content job_rate job_border job_margin">
                                <h5 class="mb-4 font_weight_600">Skills and Expertise</h5>
                                <div class="job_skills up_skill">
                                    {{-- <span class="job_skills"></span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-4 job_details_sidebar ">
                            <div class="job_apply job_margin">
                                <a href="javascript::void(0)" id="job_apply_btn" class="job_apply_btn">See Offer</a>
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
@endsection