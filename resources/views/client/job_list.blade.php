<ul class="list-unstyled">
    @forelse($projects as $project)
    @if($project->job=='draft')
    @php
    $dateText= 'Created '.$project->created_at->diffForHumans().' by you';
    $textType= 'Draft-Saved'.$project->updated_at;
    $btntext = 'Edit Draft';
    $actionRoute= route('project.review.ajax');
    $actionClass= 'edit_draft';
    $dataId= $project->id;
    $status = 'Draft';



    @endphp
    @elseif($project->job=='delete')
    @php
    $dateText= 'Created '.$project->created_at->diffForHumans().' by you';
    $textType= 'Closed - '.$project->updated_at;
    $btntext = 'Reuse Posting';
    $actionRoute= route('projectstatus.change');
    $actionClass= 'reuse_posting';
    $status = 'Repost';
    $dataId= $project->id;

    @endphp
    @else
    @php
    $dateText= 'Posted '.$project->created_at->diffForHumans().' by you';
    $textType= $project->budget=='hourly' ? 'Hourly Project' : 'Fixed-Price';
    $btntext = 'View Proposals';
    $actionRoute= route('project.proposal.ajax');
    $actionClass= 'view_proposals';
    $dataId= $project->id.'?view=nav-review-proposal';
    $status = 'View Proposal';
    @endphp
    @endif
    <li class="jobs_listdown_list">
        <div class="row">
            <div class="col-9 col-lg-5 col-md-6 col-sm-10">
                <h5 class="m-0"><a class="up_title font_weight_600 {{$actionClass}}" data-action="{{$actionRoute}}" data-id="{{$dataId}}" href="javascript:void(0)">{{$project->title}}</a></h5>
                <div><span class="text-muted font_14">{{$textType}}</span></div>
                <p class="text-muted font_weight_700 font_13 m-0">{{$dateText}}</p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 pt-md-0 pt-xl-0 pt-10">
                <div class="row">
                    <div class="col-4 col-xl-offset-1">
                        <div><strong>{{$project->get_proposal_setting_count}}</strong></div>
                        <div><span class="text-muted font_14">Proposals</span></div>
                    </div>
                    <div class="col-4">
                        <div><strong>{{$project->conversation_reverted_count_count}}</strong></div>
                        <div><span class="text-muted font_14">Messaged</span></div>
                    </div>
                    <div class="col-4 col-lg-3">
                        <div><strong>{{$project->client_hire_count}}</strong></div>
                        <div><span class="text-muted font_14">Hired</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-1 d-none d-md-block">
                <div class="row">
                    <div class="col-lg-9 text-right d-none d-lg-block">
                        <span class="{{$actionClass}} up_green_btn" data-action="{{$actionRoute}}" data-id="{{$dataId}}" data-status="{{$status}}">{{$btntext}}</span>

                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="dropstart job_list_dropdown save_btn position-relative">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>...</span>
                            </button>
                            <ul class="dropdown-menu">
                                @if($project->job=='new')
                                <li> <span class="view_proposals dropdown-item" data-action="{{route('project.proposal.ajax')}}" data-id="{{$project->id.'?view=nav-review-proposal'}}">View Proposals</span></li>
                                <li> <span class="view_proposals dropdown-item" data-action="{{route('project.proposal.ajax')}}" data-id="{{$project->id.'?view=nav-invite-freelancers'}}">Invite Freelancers</span></li>
                                <li> <span class="view_proposals dropdown-item" data-action="{{route('project.proposal.ajax')}}" data-id="{{$project->id.'?view=nav-view-job'}}">View Job Posting</span></li>
                                <li>
                                    <span class="edit_draft dropdown-item" data-action="{{route('project.review.ajax')}}" data-id="{{$project->id}}"> Edit Posting</span>
                                </li>

                                <li>
                                    <span class="remove_posting dropdown-item" data-action="{{route('projectstatus.change')}}" data-status="Delete" data-id="{{$project->id}}"> Remove Posting</span>
                                </li>

                                @endif
                                @if($project->job=='delete')
                                <li> <span class="view_proposals dropdown-item" data-action="{{route('project.proposal.ajax')}}" data-id="{{$project->id.'?view=nav-view-job'}}">View Job Posting</span></li>
                                <li><a class="dropdown-item reuse_posting" data-action="{{$actionRoute}}" data-id="{{$dataId}}">Reuse Posting</a></li>
                                @endif
                                @if($project->job=='draft')

                                <li>
                                    <span class="edit_draft dropdown-item" data-action="{{route('project.review.ajax')}}" data-id="{{$project->id}}"> Edit draft</span>
                                </li>
                                <li>
                                    <span class="remove_draft dropdown-item" data-action="{{route('project.delete')}}" data-id="{{$project->id}}" data-status="Draft"> Remove draft</span>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    @empty
    @include('layouts.noResults')
    @endforelse
    <div class="customPagination">
        {{$projects->appends(['statuses'=>$job])->links('pagination::bootstrap-4')}}
    </div>

</ul>