@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/freelancer_proposal.css')}}">
<div class="container p-4">
    <div class="row">
        <div class="col-12 p-30">
            <h3 class="font_weight_600">Submit a Proposal</h3>
        </div>
        <div class="col-12 mb-3 up-card">
            <h5 class="mb-3 font_weight_600">Proposal settings</h5>
            <div class="mb-3 token_select">
                <select class="form-select w-auto" name="choose_token" id="choose_token" aria-label="select example">
                    <option selected>Choose Token</option>
                    <option value="rovi">Rovi</option>
                    <option value="dev3">SmartDev3</option>
                    <option value="usdt">USDT</option>
                </select>
            </div>
            <div class="d-flex">
                <p class="mb-0">This proposal requires connects: <span class="font_weight_600 connects_require"></span></p>
                <button type="button" class="bg-transparent border-0 ms-2 color_green" id="token_tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This is the number of Tokens that will be deducted from your balance when you submit proposal."><i class="fas fa-info-circle font_14"></i></button>
            </div>
            <p class="mb-0" id="text-proposal"></p>
        </div>
        <div class="col-12 mb-3 up-card">
            <h5 class="mb-5 font_weight_600">Job details</h5>
            <div class="row">
                <div class="col-md-9">
                    <h4 class="font_weight_600 color_green">{{$projectDetail->title}}</h4>
                    <ul class="fade_btn">
                        <li class="mr-5p">Full Stack Development</li>
                        <?php
                        $created_at = strtotime($projectDetail->created_at);
                        $time = date('F d, Y', $created_at);
                        ?>
                        <li class="mr-5p">Posted {{$time}}</li>
                    </ul>
                    <div class="font_14">
                        <p class="mb-2 w-auto text-break">{!! $projectDetail->description !!}</p>
                    </div>
                </div>
                <div class="col-md-3 sidebar_left">
                    <ul class="head_list font_12">
                        <li class="mb-3">
                            <div class="list_head_li d-inline-block">
                                <div class="up_svg d-inline-block mr-5p" data-cy="fixed-price">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 14 14" role="img">
                                        <path d="M12.8 8.4l-1.3-2.3v-.8C11.6 2.4 9.2 0 6.3 0S1.1 2.4 1.1 5.3c0 1.4.5 2.6 1.4 3.5v4.5c0 .4.3.7.7.7h5.3c.4 0 .7-.3.7-.7v-1h1.7c.4 0 .7-.3.7-.7V9h.9c.4 0 .5-.3.3-.6zM8.7 5.3v.4l.7.4c-.2.5-.4.9-.8 1.3L7.9 7c-.2.2-.5.3-.8.4v.8c-.2.1-.5.1-.8.1-.3 0-.5 0-.8-.1v-.8c-.2-.1-.5-.2-.7-.4l-.7.4c-.4-.4-.7-.8-.8-1.3l.7-.4v-.9l-.7-.4c.1-.5.4-1 .8-1.3l.7.4c.2-.2.5-.3.7-.4v-.8c.3-.1.5-.1.8-.1.3 0 .5 0 .8.1v.8c.3.1.5.2.8.4l.7-.4c.4.4.6.8.8 1.3l-.7.4v.5z">
                                        </path>
                                        <circle cx="6.3" cy="5.3" r=".9"></circle>
                                    </svg>
                                </div>
                            </div>
                            <span class="font_weight_500 " id="modal_price">
                                Intermediate
                            </span>
                            <small class="text-muted font_12 d-block " id="modal_budget">{{ucFirst($projectDetail->level)}} Level</small>
                        </li>
                        <li class="mb-3">
                            <div class="list_head_li d-inline-block">
                                <div class="up_svg d-inline-block mr-5p" data-cy="expertise">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 14 14" role="img">
                                        <path d="M13.688.311L8.666 0 0 8.665 5.334 14 14 5.332 13.688.311zm-2.354 1.528a.827.827 0 11-.002 1.654.827.827 0 01.002-1.654zM6.441 9.892c-.384-.016-.761-.168-1.128-.455l-.73.729-.579-.578.73-.729a3.612 3.612 0 01-.498-.872 3.186 3.186 0 01-.223-.934l.965-.331c.018.339.094.672.229 1.002.133.325.297.586.488.777.164.164.32.264.473.295s.287-.009.4-.123a.422.422 0 00.131-.315c-.004-.123-.035-.249-.094-.381s-.146-.308-.27-.52a6.892 6.892 0 01-.39-.793 1.501 1.501 0 01-.086-.7c.028-.248.157-.486.383-.714.275-.273.596-.408.971-.402.369.008.74.149 1.109.423l.682-.682.578.577-.676.677c.176.224.326.461.446.707.121.25.205.495.252.734l-.965.354a3.638 3.638 0 00-.314-.84 2.369 2.369 0 00-.419-.616.863.863 0 00-.404-.253.344.344 0 00-.342.1.438.438 0 00-.109.458c.049.18.162.427.332.739.172.31.299.582.383.807.086.226.113.465.084.714-.03.252-.161.493-.393.723-.295.297-.635.436-1.016.422z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <span class="font_weight_500" id="modal_level">{{($projectDetail->budget=='project'? 'Propose your terms' : 'Less than '.$projectDetail->hourly_from.'hrs/week')}}
                            </span>
                            <small class="text-muted font_12 d-block">
                                {{($projectDetail->budget=='project'? 'Fixed Price' : 'Hourly')}}
                            </small>
                        </li>
                        <li class="mb-3">
                            <div class="list_head_li d-inline-block">
                                <div class="up_svg d-inline-block mr-5p" data-cy="expertise">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 14 14" role="img">
                                        <g fill-rule="evenodd">
                                            <path d="M6.01 10.586V9.524l-2.058-.72 2.058-.72V7.028L2.926 8.282v1.05l3.084 1.254zM8.606 11h1.14V6.602h-.834l-1.272.366.222.906.6-.145.144-.035V11z">
                                            </path>
                                            <path d="M1 13V5h12v8H1zM11 1V0h-1v1H4V0H3v1H1.007C.45 1 0 1.447 0 1.999v11.003c0 .551.451.998 1.007.998h11.986c.557 0 1.007-.447 1.007-.998V1.999C14 1.448 13.549 1 12.993 1H11z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <span class="font_weight_500" id="modal_duration">
                                {{ $projectDetail->duration=='more_than_6' ? 'More than 6 month' : ($projectDetail->duration=='month_3_to_6' ? '3 to 6 month' : ($projectDetail->duration=='less_1' ? 'Less than a month' : '1 to 3 months'))}}</span>
                            <small class="text-muted font_12 d-block">Project Length</small>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="grey_hr">
            @if(count($projectDetail->ProjectSkill)>0)
            <div class="col-12">
                <h5 class="font_weight_600">Skills and expertise</h5>
                <ul class="fade_all_btn">
                    @foreach($projectDetail->ProjectSkill as $dataskills)
                    <li class="mr-5p">{{$dataskills->skill->skills_sub}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <form class="p-0" id="submit_proposal" action="{{route('proposal.submit')}}" method="POST">
            @csrf
            <div class="col-12 mb-3 up-card">
                <h4 class="font_weight_600 mb-5">Terms</h4>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-8">
                                <strong class="font_weight_600">{{$projectDetail->budget=='project' ? "What is the full amount you'd like to bid for this job?" : "What is the rate you'd like to bid for this job?"}}</strong>
                                <p><label class="text-muted font_weight_600">{{$projectDetail->budget=='project' ? 'Bid' :'Hourly Rate'}}</label></p>
                                <p class="text-muted font_13">Total amount the client will see on your proposal</p>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="dollar_before position-relative">
                                        <i class="fas fa-dollar-sign"></i>
                                        <input class="form-control text-end" id="bid_count" name="earned_amount" type="number" placeholder="0.00" value="{{$projectDetail->budget=='project' ? $projectDetail->project_budget : $user_rate->freelancerRate->hourly_rate}}" />
                                    </div>
                                </div>
                            </div>
                            <hr class="grey_hr">
                            <div class="col-md-8">
                                <h6 class="font_weight_600">Upwork Service Fee 5%</h6>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="dollar_before position-relative">
                                        <i class="fas fa-dollar-sign"></i>
                                        <input class="form-control text-end border-0" id="fee_count_rate" type="number" value="0" placeholder="0.00" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr class="grey_hr">
                            <div class="col-md-8">
                                <h6 class="font_weight_600">You'll Receive</h6>
                                <p class="text-muted font_13">Your estimated payment, after service fees<button type="button" class="bg-transparent border-0 ms-2 color_green" id="final_cut_tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This is the number of Tokens that will be deducted from your balance when you submit proposal."><i class="fas fa-info-circle font_14"></i></button></p>

                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="dollar_before position-relative">
                                        <i class="fas fa-dollar-sign"></i>
                                        <input class="form-control text-end" id="final_cut_rate" step="any" type="number" placeholder="0.00" value="0" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            @if($projectDetail->budget=='project')
            <div class="col-12 mb-3 up-card">
                <div class="my-3">
                    <h6>How long will this project take?</h6>
                    <select class="form-control dropdown-toggle font_14" name="duration_dropdown" id="duration_dropdown">
                        <option value="">Select a duration</option>
                        <option value="more_than_6" {{ (@$ProposalSetting->duration_dropdown) == 'more_than_6' ? 'selected="selected"' : '' }}>More than 6 months</option>
                        <option value="month_3_to_6" {{ (@$ProposalSetting->duration_dropdown) == 'month_3_to_6' ? 'selected="selected"' : '' }}>6 months</option>
                        <option value="month_1_to_3" {{ (@$ProposalSetting->duration_dropdown) == 'month_1_to_3' ? 'selected="selected"' : '' }}>Less than a month</option>
                    </select>
                    <div class="text-danger error" data-error="duration_dropdown"></div>
                </div>
            </div>
            @endif
            <div class="col-12 mb-3 up-card">
                <input type="hidden" name="project_id" value="{{$id}}" id="project_id">
                <input type="hidden" name="project_user_id" value="{{$projectDetail->user_id}}" id="project_user_id">
                @if($projectDetail->budget=='project')
                <div class="col-12 mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="font_weight_600">Aditional Details</h5>
                        </div>
                        <div class="col-md-6">
                            <h5 class="float-end m-0 d-none d-md-block text-end font_14">Client's budget:
                                ${{($projectDetail->budget=='project'? $projectDetail->project_budget : $projectDetail->hourly_from.'.00-$'.$projectDetail->hourly_to.'.00')}}
                            </h5>
                            <div class="m-0 d-md-none">
                                <span class="text-muted">
                                    <span>Client's budget:
                                        ${{($projectDetail->budget=='project'? $projectDetail->project_budget : $projectDetail->hourly_from.'.00-$'.$projectDetail->hourly_to.'.00')}}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <input id="charged-amount-id" name="charged_amount" type="hidden" placeholder="0.00" class="up-input text-right" value="{{$projectDetail->project_budget}}">
                    </div>
                </div>
                @endif
                <div class="col-12 mb-3">
                    <div class="cover_section">
                        <div class="mb-3">
                            <label id="cover_letter_label" class="up-label">
                                Cover Letter
                            </label>
                            <textarea rows="4" name="cover_letter" aria-labelledby="cover_letter_label" class="up-textarea">{{@$ProposalSetting->cover_letter}}</textarea>
                            <div class="text-danger error" data-error="cover_letter"></div>
                        </div>
                        <div class="wp-attach">
                            <label class="up-label">
                                Attachments(Maximum file size: 5 MB)
                                <div id="file-type-info" class="text-muted mb-2">Supported file types: png, jpg, jpeg</div>
                            </label>

                            <div class="d-flex font_14 up_upload_btn justify-content-center align-items-center">
                                <input type="file" name="attachment[]" id="attachment" accept="image/*" multiple />
                            </div>
                        </div>
                        <div class="text-danger error" data-error="attachment"></div>

                    </div>
                </div>
            </div>
            <div role="group">
                <button type="submit" class="btn btn-sm btn-success continue border-0 font_weight_500 px-3" disabled>Send</button>
            </div>
        </form>        
        <div class="cover_letter_id"></div>
    </div>
</div>
<div class="loader-section">
    <div class="loader-img"><img src="{{asset('images/Spinner-bg.gif')}}" ></div>
</div>

@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/proposal.js')}}"></script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip({
            trigger: 'click'
        })
    });
</script>
@endsection