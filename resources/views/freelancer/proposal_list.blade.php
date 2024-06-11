@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/freelancer_proposal.css')}}">
<section class="proposal_list_section min_60vh mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page_header mb-5 ps-4">
                    <h1 class="color_black font_26 font_weight_600">My proposals</h1>
                </div>
                <div class="proposal_list_block">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-active" role="tabpanel" aria-labelledby="nav-active-tab">
                            <div class="proposal_offer_block py-4 px-3 px-md-4 border border_radius_20 mb-md-4">
                                <div class="proposal_block_title">
                                    <h2 class="font_22 color_black font_weight_600">Invitation to interview<span>({{count($active_proposal_list)}})<span><span class="question_icon"><button type="button" tabindex="0" type="button" class="popover-icon ps-2 border-0" data-popover-content="#offer_icon" data-toggle="popover">
                                                        <i class="fas fa-info-circle font_14 color_green"></i>
                                                    </button>
                                                </span>
                                    </h2>
                                    <div id="offer_icon" class="popper_div_content" style="display:none;">
                                        <div class="">
                                            Clients may contact you first about a job posting.
                                        </div>
                                        <div class="popover-header"><i class="fa fa-times" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                                <div class="proposal_active_list pb-md-4 px-3 pb-4 px-md-0 py-md-0">
                                    @if(count($active_proposal_list)>0)
                                    @foreach($active_proposal_list as $lists)
                                    <div class="proposal_list_row border-bottom py-2">
                                        <div class="row">
                                            <div class="proposal_time col-md-3">
                                                <div>
                                                    <p class="color_black font_14 mb-1">Received <span>{{DateYearChange($lists->updated_at)}}</span></p>
                                                </div>
                                                <div>
                                                    <span class="font_12 color_grey">{{TimeChange($lists->updated_at)}}</span>
                                                </div>
                                            </div>
                                            <div class="proposal_info col-md-6">
                                                <a href="{{route('proposal.interview',['id'=>$lists->projects->id])}}" class="font_14 color_green text-decoration-none font_weight_500">{{$lists->projects->title}}</a>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <!-- Active Proposal -->
                            <div class="proposal_active_block py-md-4 px-md-4 border border_radius_20 mb-md-4">
                                <div class="proposal_block_title pb-md-4 px-3 py-4 px-md-0 py-md-0">
                                    <h2 class="font_22 color_black font_weight_600 d-flex align-items-center">Active proposals<span> ({{count($active_proposal)}})</span>
                                        <button class="bg-transparent border-0 ms-2 color_green font_15" id="submit_tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="These are proposals that you are discussing with a client."><i class="fas fa-info-circle font_14"></i></button>
                                    </h2>
                                    <div id="submitted_proposal_icon" style="display:none;">
                                        <div class="">
                                            These are offers sent to Clients
                                        </div>
                                        <div class="popover-header"><i class="fa fa-times" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                                @if(count($active_proposal) > 0)
                                <div class="proposal_active_list pb-md-4 px-3 pb-4 px-md-0 py-md-0">
                                    <div class="proposal_list_row proposal_table border-bottom py-2">
                                        <table class="table table-hover">
                                            <tbody>
                                                @foreach($active_proposal as $key=>$submitList)
                                                <tr>
                                                    <td scope="row" width="25%">
                                                        <p class="color_black font_14 mb-1">Initiated <span>{{DateYearChange($submitList->updated_at)}}</span></p> <span class="font_12 color_grey">{{TimeChange($submitList->updated_at)}}</span>
                                                    </td>
                                                    <td width="50%"><a href="{{route('freelance_job_proposal',['id' => $submitList->id])}}" class="font_14 color_green text-decoration-none font_weight_500">{{$submitList->projects->title}}</a></td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                        <div class="customPagination">
                                            {!! $submit_proposal_list->links('pagination::bootstrap-4') !!}
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="proposal_submitted_block py-md-4 px-md-4 border border_radius_20 mb-md-4">
                                <div class="proposal_block_title pb-md-4 px-3 py-4 px-md-0 py-md-0">
                                    <h2 class="font_22 color_black font_weight_600 d-flex align-items-center">Submitted proposals<span> ({{count($submit_proposal_list)}})</span>
                                        <button class="bg-transparent border-0 ms-2 color_green font_15" id="submit_tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="These are proposals you sent which have not yet received a reply."><i class="fas fa-info-circle font_14"></i></button>
                                    </h2>
                                    <div id="submitted_proposal_icon" style="display:none;">
                                        <div class="">
                                            Thease are offers sent to Clients
                                        </div>
                                        <div class="popover-header"><i class="fa fa-times" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                                @if(count($submit_proposal_list) > 0)
                                <div class="proposal_active_list pb-md-4 px-3 pb-4 px-md-0 py-md-0">
                                    <div class="proposal_list_row proposal_table border-bottom py-2">
                                        <table class="table table-hover">
                                            <tbody>
                                                @foreach($submit_proposal_list as $key=>$submitList)
                                                <tr>
                                                    <td scope="row" width="25%">
                                                        <p class="color_black font_14 mb-1">Initiated <span>{{DateYearChange($submitList->created_at)}}</span></p> <span class="font_12 color_grey">{{TimeChange($submitList->created_at)}}</span>
                                                    </td>
                                                    <td width="50%"><a href="{{route('freelance_job_proposal',['id' => $submitList->id])}}" class="font_14 color_green text-decoration-none font_weight_500">{{$submitList->projects->title}}</a></td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div class="customPagination">
                                            {!! $submit_proposal_list->links('pagination::bootstrap-4') !!}
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <!--Archived interviews  -->
                            <div class="proposal_active_block py-md-4 px-md-4 border border_radius_20 mb-md-4">
                                <div class="proposal_block_title pb-md-4 px-3 py-4 px-md-0 py-md-0">
                                    <h2 class="font_22 color_black font_weight_600 d-flex align-items-center">Archived interviews<span> ({{count($cancelled_proposal)}})</span>
                                        <button class="bg-transparent border-0 ms-2 color_green font_15" id="submit_tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="These are interview invitations which have been cancelled"><i class="fas fa-info-circle font_14"></i></button>
                                    </h2>
                                    <div id="submitted_proposal_icon" style="display:none;">
                                        <div class="">
                                            These are interview invitations which have been cancelled
                                        </div>
                                        <div class="popover-header"><i class="fa fa-times" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                                @if(count($cancelled_proposal) > 0)
                                <div class="proposal_active_list pb-md-4 px-3 pb-4 px-md-0 py-md-0">
                                    <div class="proposal_list_row proposal_table border-bottom py-2">
                                        <table class="table table-hover">
                                            <tbody>
                                                @foreach($cancelled_proposal as $key=>$submitList)
                                                <tr>
                                                    <td scope="row" width="25%">
                                                        <p class="color_black font_14 mb-1">Initiated <span>{{DateYearChange($submitList->updated_at)}}</span></p> <span class="font_12 color_grey">{{TimeChange($submitList->updated_at)}}</span>
                                                    </td>
                                                    <td width="50%"><a href="{{route('freelance_job_proposal',['id' => $submitList->id])}}" class="font_14 color_green text-decoration-none font_weight_500">{{$submitList->projects->title}}</a></td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div class="customPagination">
                                            {!! $submit_proposal_list->links('pagination::bootstrap-4') !!}
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade right" id="offerChoose" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <span class="mt-5p d-inline-block">Posted</span><span class="mt-5p d-inline-block ms-1" id="modal_time"></span>
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
                                <div class="up_skill" id="project_skills">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 job_details_sidebar">
                            <div class="job_apply job_margin">
                                <a href="javascript:void(0)" id="job_accept_btn" class="job_apply_btn" data-status="1" data-id="">Accept</a>
                                <a href="javascript:void(0)" id="job_decline_btn" data-status="2" data-id="" class="job_apply_btn side_job_btn d-flex align-items-center">Decline</a>
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
<script type="text/javascript" src="{{asset('js/freelancer_proposal.js')}}"></script>
<script type="text/javascript" src="{{asset('js/accept_offer.js')}}"></script>
@endsection