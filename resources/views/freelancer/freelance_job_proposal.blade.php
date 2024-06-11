@extends('layouts.app')
@section('content')
<div class="freelancer_job_proposal my-5">
    <div class="container">
        <div class="row">
            <h3>Proposal details</h3>
            <div class="col-12 col-lg-9 mb-5">
                <div class="up-card">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="font_weight_600">Job details</h5>
                            <p class="mb-2 w-auto text-break">{{ $proposal_list->projects->title }}</p>
                            <ul class="fade_btn">
                                <li class="mr-5p">{{ $proposal_list->projects->specialities->title }}</li>
                                <li class="mr-5p">Posted {{ DateYearChange($proposal_list->projects->created_at) }}
                                </li>
                            </ul>
                            <div class="font_14">
                                <p class="mb-2 w-auto text-break">{{ $proposal_list->projects->description }}</p>
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
                                        {{ ucfirst($proposal_list->projects->level) }}
                                    </span>
                                    <small class="text-muted font_12 d-block " id="modal_budget">Experience
                                        Level</small>
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
                                    <span class="font_weight_500" id="modal_level">{{ $proposal_list->projects->budget == 'project' ? '$' . $proposal_list->projects->project_budget : '$' . $proposal_list->projects->hourly_from . '.00-$' . $proposal_list->projects->hourly_to . '.00' }}</span>
                                    <small class="text-muted font_12 d-block">{{ $proposal_list->projects->budget == 'project' ? 'Fixed Range' : 'Hourly Range' }}</small>
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
                                        3 to 6 months</span>
                                    <small class="text-muted font_12 d-block">Project Length</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="grey_hr">
                    <div class="col-12">
                        <h5 class="font_weight_600">Skills and expertise</h5>
                        <ul class="fade_all_btn">
                            @if (count($proposal_list->projects->ProjectSkill) > 0)
                            @foreach ($proposal_list->projects->ProjectSkill as $skills)
                            <li class="mr-5p">{{ $skills->skill->skills_sub }}</li>
                            @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="col-12 mt-5">
                        <!-- Button trigger modal -->
                        @if($proposal_list->status == '0')
                        <button type="button" class="font_15 text-decoration-none font_weight_500 px-3 py-2 color_green button_border bg-transparent" data-bs-toggle="modal" data-bs-target="#withdrawModal">
                            Withdraw Proposal
                        </button>
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="withdrawModal" tabindex="-1" aria-labelledby="withdrawModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title font_weight_600 fs-5" id="withdrawModalLabel">Withdraw
                                            Proposal</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form class="reasons_list" method="post" action="{{route('withdraw_proposal')}}">
                                        @csrf
                                        <div class="modal-body">
                                            <p>We will politely notify the client that you are not interested. The
                                                client
                                                will be able to view the reason you've withdrawn your proposal.</p>
                                            <h5 class="font_weight_600">Reason</h5>
                                            <input type="hidden" id="project_id_btn" class="d-inline-block_id" value="{{ $proposal_list->project_id }}" name="projectId" />
                                            <input type="hidden" id="user_id_btn" class="d-inline-block_id" value="{{ $proposal_list->user_id }}" name="userId" />
                                            <input type="hidden" id="proposal_id_btn" class="d-inline-block_id" value="{{ $proposal_list->id }}" name="proposalId" />
                                            Location         <input type="hidden" id="_token" value="{{ csrf_token() }}">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="withdrawReason" id="byMistakeApplied" value="Applied by mistake" {{old('withdrawReason') == "Applied by mistake" ? checked : "" }}>
                                                <label class="form-check-label" for="byMistakeApplied">
                                                    Applied by mistake
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="withdrawReason" id="rateTooLow" value="Rate too low" {{old('withdrawReason') == "Rate too low" ? checked : "" }}>
                                                <label class="form-check-label" for="rateTooLow">
                                                    Rate too low
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="withdrawReason" id="schedulingConflict" value="Scheduling conflict with client" {{old('withdrawReason') == "Scheduling conflict with client" ? checked : "" }}>
                                                <label class="form-check-label" for="schedulingConflict">
                                                    Scheduling conflict with client
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="withdrawReason" id="unresponsiveClient" value="Unresponsive client" {{old('withdrawReason') == "Unresponsive client" ? checked : "" }}>
                                                <label class="form-check-label" for="unresponsiveClient">
                                                    Unresponsive client
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="withdrawReason" id="inappropriateBehaviour" value="Inappropriate client behavior" {{old('withdrawReason') == "Inappropriate client behavior" ? checked : "" }}>
                                                <label class="form-check-label" for="inappropriateBehaviour">
                                                    Inappropriate client behavior
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="withdrawReason" id="otherReason" value="Other" {{old('withdrawReason') == "Other" ? checked : "" }}>
                                                <label class="form-check-label" for="otherReason">
                                                    Other
                                                </label>
                                            </div>
                                            <div class="mt-4">
                                                <label class="form-label font_18 font_weight_600" for="withdrawMessage">Message</label>
                                                <p>Add an optional message to share with the client when we notify them
                                                    that
                                                    this proposal has been withdrawn.</p>
                                                <textarea class="form-control" id="withdrawMessage" name="withdrawMessage" type="text" placeholder="Message" rows="5">{{old('withdrawMessage')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="up_green_btn" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="up_green_btn withdraw_btn">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="up-card mt-5">
                    <div class="col-12">
                        <div class="cover_letter">
                            <h5 class="mb-5 font_weight_600">Cover Letter</h5>
                            <p class="pre_line">{{ $proposal_list->cover_letter }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-lg-3 mb-5 p-3">
                <div class="up-card-992">
                    <button class="btn btn-secondary w-100 font_weight_600">{{
                                                                                $proposal_list->status == '1' ? "Accepted Interview" 
                                                                                : ($proposal_list->status == '2' ? "Declined Interview" 
                                                                                : ($proposal_list->status == '3' ? "Hired By Client" 
                                                                                : "Proposal Sent"))}}</button>
                  
                    <div class="about_client mt-4">
                        <h6 class="font_16 font_weight_600">About the client</h6>
                        <h6 class="font_14">
                            {{ $proposal_list->projects->user ? $proposal_list->projects->user->full_name : '-' }}
                        </h6>
                    </div>
                    @if($proposal_list->projects->user->FreelancerProfile)
                    <div class="agent_name mb-4">
                        <h6 class="font_14">Bio:
                            {{ $proposal_list->projects->user->FreelancerProfile->title }}
                        </h6>
                    </div>
                    @endif
                    <div class="proposal_location mb-4">
                        <h6 class="font_16 font_weight_600">Location</h6>
                        <p class="my-0 font_14">{{ $proposal_list->projects->user->country->name }}</p>
                    </div>
                    <div class="proposal_history">
                        <h6 class="font_16 font_weight_600">History</h6>
                        <p class="font_14">{{ $proposal_count }} proposals</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('js/freelancer_dashboard.js') }}"></script>
@endsection