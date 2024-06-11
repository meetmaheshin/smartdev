@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/myjob.css')}}">
@endsection
@section('content')
<section class="my_job_page min_60vh mt-5">
    <div class="container-md">
        <div class="row">
            <div class="col-sm-12">
                <div class="job_page_header  d-sm-flex justify-content-between align-items-center my-4 px-4">
                    <h4 class="font_26 color_black font_weight_600">My Jobs</h4>
                </div>
            </div>
        </div>
        <div class="job_content_block border-grey-radius mb-4 color_black pending_contract py-4 pb-0">
            <div class="job_content_heading px-4 pb-3">
                <h3 class="m-0 font_18 font_weight_600">Pending Contracts ({{count($pendingContract)}})</h3>
            </div>
            <article class="job_contract_block container invite_row mb-4">
                @if(count($pendingContract) > 0)
                @foreach($pendingContract as $contract)
                <div class="row py-5 px-3">
                    <div class="col-md-8 col-12">
                        <h4 class="font_16">
                            <a href="javascript:void(0)" class="color_black font_20 text-decoration-none font_weight_600">{{$contract->projects->title}}</a>
                        </h4>
                        <p class="mb-1 font_14">Staffed by: {{$contract->clients->firstname.' '.$contract->clients->lastname}} at {{$contract->clients->clientDetails->company_name}}</p>
                    </div>
                    <div class="text-end col-md-4 d-md-block d-none">
                        <a href="javascript:void(0)" data-id="{{$contract->projects->id}}" data-bs-toggle="modal" data-bs-target="#offerChoose" class="text-decoration-none green_btn font_weight_500 d-none d-md-inline-block seeoffer">See Offer</a>
                    </div>
                    <div class="col-md-5">
                        <p class="font_14 mb-0 font_weight_500">Hired by: <b>{{$contract->clients->firstname.' '.$contract->clients->lastname}}</b></p>
                        <span class="font_12">{{$contract->contract_title ?? ''}}</span>
                    </div>
                    <div class="col-sm-12 d-block d-md-none mt-3">
                        <a href="javascript:void(0)" data-id="{{$contract->projects->id}}" data-bs-toggle="modal" data-bs-target="#offerChoose" class="text-decoration-none green_btn font_weight_500 d-none d-md-inline-block seeoffer">See Offer</a>
                    </div>
                </div>
                @endforeach

                @endif
            </article>
        </div>
        <div class="job_content_block border-grey-radius mb-4 color_black">
            <div class="row px-4 pt-4">
                <div class="col-md-7">
                    <div class="job_content_heading pb-3">
                        <h3 class="m-0 font_18 font_weight_600">Active Contracts ({{count($activeContract)}})</h3>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="search_content_job mb-3">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="pb-4" id="nav-all" role="" aria-labelledby="">
                    @if(count($activeContract)>0)
                    @foreach($activeContract as $contract)
                    <article class="job_contract_block accept_row container">
                        <div class="row py-5 px-3 border-0">
                            <div class="col-md-12">
                                <h4 class="font_16">
                                    <a href="javascript:void(0)" class="color_black font_20 text-decoration-none font_weight_600">{{$contract->projects->title}}</a>
                                </h4>
                            </div>
                            <div class="col-md-12">
                                <p class="font_14 mb-0 font_weight_500">Hired by: <b>{{$contract->clients->full_name}}</b></p>
                                <p class="font_14">{{DateYearChange($contract->created_at)}}</p>
                                @if(count($contract->milestone) > 0)
                                @foreach($contract->milestone as $key=> $milestoneEscrow)
                                <div class="row mt-3">
                                    <div class="col-md-1 font_weight_600">{{++ $key}}.</div>
                                    <div class="col-md-8">
                                        <h6 class="font_weight_600">{{$milestoneEscrow->description}}</h6>
                                        <p class="font_weight_600">${{$milestoneEscrow->deposit_amount}}.00 {{$milestoneEscrow->status == 2 ? '(Funded)': ''}} <span class="ms-5">{{$milestoneEscrow->due_date != '' ? 'Due Date: '.$milestoneEscrow->due_date : ''}} </span></p>
                                    </div>
                                    <div class="col-md-3 d-flex align-items-start edit_milestone_parent justify-content-end">
                                        <a href="javascript:void(0)" data-id="{{$milestoneEscrow->id}}" class="up_green_btn text-decoration-none me-2 font_weight_100 {{($milestoneEscrow->status != 2 && $milestoneEscrow->status != 0 && $milestoneEscrow->status != 3) ? 'finished': (($milestoneEscrow->status != 2 && $milestoneEscrow->status == 0) ? 'disabled': 'disabled')}}">{{($milestoneEscrow->status != 2 && $milestoneEscrow->status != 0 && $milestoneEscrow->status != 3) ? 'Finish Work': (($milestoneEscrow->status != 2 && $milestoneEscrow->status == 0) ? 'Awaiting Milestone': 'Completed')}}</a>
                                    </div>
                                    <hr class="grey_hr">
                                </div>
                                @endforeach
                                @endif
                            </div>


                        </div>
                    </article>
                    @endforeach

                    @endif
                    <div class="customPagination">
                        {!! $activeContract->links('pagination::bootstrap-4') !!}
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
                                <h5 id="modal_title" class="font_weight_600"></h5>
                                <div class="posting_stamp">
                                    <h6 id="modal_specialities" class="font_weight_600 text-muted"></h6>
                                </div>
                            </div>
                            <div class="job_description_details pt-0 job_margin">
                                <p id='modal_description' class="text-break"></p>
                            </div>
                            <div class="job_border job_margin">
                                <h5 id="contract_title" class="m-0 pb-0 font_weight_600"></h5>
                            </div>
                            <div class="job_description_details job_margin pt-0">
                                <p id='contract_description' class="text-break"></p>
                            </div>
                            <div class="job_description_details job_border job_margin">
                                <h5 class="font_weight_600">Milestones</h5>
                                <!-- <p id='milestone' class="text-break"></p> -->
                                <table class="table table-striped table-light">
                                    <tbody id='milestone'>
                                    </tbody>
                                </table>
                            </div>
                            <div class="job_rate job_border job_margin">
                                <ul class="p-0">
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
                                <a href="javascript:void(0)" id="job_accept_btn" class="job_apply_btn" data-status="1" data-project-id="" data-id="">Accept</a>
                                <!-- <a href="javascript:void(0)" id="job_decline_btn" data-status="2" data-project-id="" data-id="" class="job_apply_btn side_job_btn d-flex align-items-center">Decline</a> -->
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
<script type="text/javascript" src="{{asset('js/accept_offer.js')}}"></script>
@endsection