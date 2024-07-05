@extends('layouts.app')
@section('content')
<section class="min_60vh mt-5 interview_decision">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h3 class="font_weight_600">Invitation to Interview</h3>
            </div>
            <div class="col-md-9">
                <div class="up-card">
                    <div class="row">
                        <h5 class="mb-5 font_22 font_weight_600">Job details</h5>
                        <div class="col-md-9">
                            <p class="mb-2 w-auto font_18 text-break font_weight_600">{{$project->title}}</p>
                            <ul class="fade_btn">
                                <li class="mr-5p">{{$project->categories->title}}</li>
                                <li class="mr-5p">Posted {{TimeChange($project->created_at)}}</li>
                            </ul>
                            <div class="font_14">
                                <p class="mb-2 w-auto text-break">{{$project->description}}</p>
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
                                    <span class="font_weight_500 ">{{ucFirst($project->level)}}</span>
                                    <small class="text-muted font_12 d-block " id="modal_budget">Experience Level</small>
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
                                    <span class="font_weight_500">${{$project->budget=='project' ? $project->project_budget : $project->hourly_from.' - $'.$project->hourly_to}}</span>
                                    <small class="text-muted font_12 d-block">{{$project->budget=='project' ? 'Fixed':'Hourly'}} Range</small>
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
                                    <span class="font_weight_500">
                                        {{ $project->duration=='more_than_6' ? 'More than 6 month' : ($project->duration=='month_3_to_6' ? '3 to 6 month' : ($project->duration=='less_1' ? 'Less than a month' : '1 to 3 months'))}}</span>
                                    <small class="text-muted font_12 d-block">Project Length</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="grey_hr">
                    <div class="col-12">
                        <h5 class="font_weight_600">Skills and expertise</h5>
                        <ul class="fade_all_btn">
                            @foreach($project->ProjectSkill as $skills)
                            <li class="mr-5p">{{$skills->skill->skills_sub}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <aside class="col-md-3">
                <p class="text-muted font_13">Interested in discussing this job?</p>
                @if($proposalSettings->deleted_at != null)
                <button class="btn btn-secondary w-100 font_weight_600">Declined By Client</button>
                @elseif($proposalSettings->status == 1)
                <button class="btn btn-secondary w-100 font_weight_600">Accepted Interview</button>
                @elseif($proposalSettings->status == 2)
                <button class="btn btn-secondary w-100 font_weight_600">Declined By Freelancer</button>
                @elseif($proposalSettings->status == 3)
                <button class="btn btn-secondary w-100 font_weight_600">Hired</button>
                @else
                <button class="up_green_btn w-100 font_weight_600 best_matches_result" data-action="{{route('details')}}" data-id="{{$project->id}}" data-title="{{$project->title}}" data-bs-toggle="modal" data-bs-target="#sideModal">Accept Interview</button>
                <a href="{{route('interview.proposal.decline',['project_id'=>$project->id])}}" class="text-center d-block lh-sm mh-40 font_15 my-3 text-decoration-none w-100 font_weight_600 px-3 py-2 color_green button_border bg-transparent">Decline Interview</a>
                @endif
                <div class="about_client_details mt-4">
                    <h6 class="font_weight_600 mb-1">About the client</h6>
                    <p class="font_14">{{$project->user->FullName}}</p>
                </div>
                <div class="interview_location">
                    <h6 class="font_weight_600 mb-1">Location</h6>
                    <p class="mb-0">{{$project->user->country->name}}</p>
                </div>
                <div class="interview_location mt-4">
                    <h6 class="font_weight_600 mb-1">Projects</h6>
                    <span>{{$allProject}}</span>
                </div>
            </aside>
            <div class="col-9 my-5">
                <div class="up-card">
                    <h4 class="font_weight_600">Original message from client</h4>
                    <p class="mt-4">{{$proposalSettings->cover_letter}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade right" id="sideModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable search_talent_modal">
            <div class="modal-content h-100">
                <div class="modal-header mb-5 up_name pe-5">
                    <div>
                        <button type="button" class="mod_close" data-bs-dismiss="modal" aria-label="Close">
                            <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 14 14" role="img" width="18">
                                <polygon fill-rule="evenodd" points="3 7 10.433 14 12 12.524 6.134 7 12 1.476 10.433 0"></polygon>
                            </svg> Back to invitation
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <form method="post" id="proposal_submit" action="{{route('interview.proposal.submit')}}">
                        @csrf
                        <input type="hidden" name="project_id" id="project_id" value="" />
                        <input type="hidden" name="receiver_id" id="receiver_id" value="" />
                        @if ($errors->any())
                            <div class="alert alert-danger window_error_open">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h3 class="font_weight_600">Accept interview</h3>
                                <p class="my-4 font_14">Accept an interview for this job by replying and proposing terms. After you click Submit, this Invitation to Interview will become an "Active Interview". You will discuss the job and the client will decide whether to hire you.</p>
                            </div>
                            <div class="col-md-12">
                                <div class="up-card">
                                    <div class="row">
                                        <h5 class="mb-5 font_22 font_weight_600">Job details</h5>
                                        <div class="col-md-9">
                                            <p class="mb-2 w-auto font_18 text-break font_weight_600" id="modal_title"></p>
                                            <ul class="fade_btn">
                                                <li class="mr-5p" id="modal_specialities"></li>
                                                <span class="mt-5p d-inline-block">Posted</span>
                                                <li class="mr-5p" id="modal_time"></li>
                                            </ul>
                                            <div class="font_14">
                                                <p class="mb-2 w-auto text-break" id="modal_description"></p>
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
                                                    <span class="font_weight_500 " id="modal_level"></span>
                                                    <small class="text-muted font_12 d-block ">Experience Level</small>
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
                                                    <span class="font_weight_500" id="modal_price"></span>
                                                    <small class="text-muted font_12 d-block" id="modal_budget"></small>
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
                                                    <span class="font_weight_500" id="modal_duration"></span>
                                                    <small class="text-muted font_12 d-block">Project Length</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="grey_hr">
                                    <div class="col-12">
                                        <h5 class="font_weight_600">Skills and expertise</h5>
                                        <span class="job_skills"></span>
                                    </div>
                                </div>
                            </div>
                            <input id="charged_amount" name="charged_amount" type="hidden" placeholder="0.00" class="up-input text-right" value="">

                            
                            <div class="col-12 mb-3">
                                <div class="up-card">
                                    <h6 class="font_weight_600 mb-3">How long this project will take?</h6>
                                    <select class="form-select w-auto" name="duration" aria-label="Default select example">
                                        <option selected>Select a duration</option>
                                        <option value="1">One months</option>
                                        <option value="2">Two months</option>
                                        <option value="3">Three months</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="up-card">
                                    <div class="cover_section">
                                        <h5 class="mb-5 font_22 font_weight_600">Additional details</h5>
                                        <div class="mb-3">
                                            <label id="cover_letter_label" class="up-label font_weight_600">
                                                Cover Letter
                                            </label>
                                            <textarea rows="4" name="cover_letter" aria-labelledby="cover_letter_label" class="up-textarea">{{@$ProposalSetting->cover_letter}}</textarea>
                                            <div class="text-danger error" data-error="cover_letter"></div>
                                        </div>
                                        <div class="wp-attach">
                                            <label class="up-label font_weight_600">
                                                Attachments
                                            </label>
                                            <div class="d-flex font_14 up_upload_btn justify-content-center align-items-center">
                                                <input type="file" name="attachment[]" id="attachment" accept="image/*" multiple />
                                            </div>

                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <button type="submit" class="up_green_btn font_weight_600">Submit a Proposal</button>
                                        <button type="button" data-bs-dismiss="modal" aria-label="Close" class="d-block font_weight_600 color_green text-decoration-none ms-4 border-0 bg-transparent">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
@endsection