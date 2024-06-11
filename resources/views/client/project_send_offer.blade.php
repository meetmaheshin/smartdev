@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/project_review_proposal.css')}}">
@endsection
@section('content')
<div class="container send_hire_offer min_60vh mt-5">
    <main>
        <div class="d-flex justify-content-between">
            <h3 class="mb-4 font_weight_600">Send an Offer</h3>
            <!-- Modal -->
            <div class="modal fade" data-bs-backdrop="static" id="connect_modal" tabindex="-1" aria-labelledby="connect_modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="connect_modalLabel">Connect your Metamask Wallet</h1>
                        </div>
                        <div class="modal-body">
                            <button type="button" class="up_green_btn font_weight_600 my-3" id="metamask_connect">
                                Please Connect Wallet<i id="spinner_btn" class="ms-3 fas fa-spin"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="client_address" value="">
        <div class="up-card offer_block">
            <div class="row">
                <div class="col-md-1 d-flex justify-content-center">
                    <img class="object-fit-cover rounded-circle" src="{{!empty($user->profile_photo_path) ? asset('/storage/images/client_profile/'.$user->profile_photo_path) : asset('images/user_default.jpeg')}}" width="50" height="50" alt="">
                </div>
                <div class="col-md-11">
                    <h4><a class="open_btn font-15 font_weight_600 bg-transparent border-0 text-decoration-none" href="javascript:void(0)">{{$user->firstname.' '.$user->lastname}}</a></h4>
                    <p class="mb-1">
                        @foreach($user->freelancerSkills as $freelancer)
                        <span>{{$freelancer->skill->skills_sub ?? ''}} <span class="seperator_sign">|</span></span>
                        @endforeach
                    </p>
                    <div class="row">
                        <div class="mt-10 col-md-5 mt-md-0">
                            <div>{{$user->states->name ?? ''}}, {{$user->country->name ?? ''}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="send_offer" action="{{route('send.offer.hire-freelancer')}}" method="post">
            @csrf
            <div class="up-card my-3">
                <h4 class="mb-4 font_weight_600">Contract Terms</h4>
                <h6 class="font_weight_600 mb-3 ">Payment Option</h6>
                <ul class="row price_decide nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <div class="text-danger error" data-error="payment_option"></div>
                    <!-- <li class="nav-item col-md-3" role="presentation">
                        <div class="nav-link p-3 position-relative active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                            <div class="price_radio">
                                <label for="by_hour_price" class="cursor_pointer w-100 h-100">
                                    <div class="position-relative">
                                        <input type="radio" name="payment_option" id="by_hour_price" value="0" checked>
                                        <span class="d-inline-block"><i class="mid_dot"></i></span>
                                    </div>
                                </label>
                            </div>
                            <div class="price_content_details">
                                <i class="fas fa-stopwatch"></i>
                                <h4>Pay by the hour</h4>
                                <p class="text-muted">Pay for the number of hours worked on a project</p>
                            </div>
                        </div>
                    </li> -->
                    <li class="nav-item col-md-3" role="presentation">
                        <div class="nav-link p-3 position-relative" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <div class="price_radio">
                                <label for="by_fix_price" class="cursor_pointer w-100 h-100">
                                    <div class="position-relative">
                                        <input type="radio" name="payment_option" id="by_fix_price" value="1" {{ ( @$hireFreelancers->payment_option==1)? "checked" : "" }}>
                                        <span class="d-inline-block"><i class="mid_dot"></i></span>
                                    </div>
                                </label>
                            </div>
                            <div class="price_content_details">
                                <i class="fas fa-tags"></i>
                                <h4>Pay a fixed price</h4>
                                <p class="text-muted">Pay as project milestones are completed</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- DOnt remove  -->
                    <!-- <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label font_weight_600 w-100" for="payByHourPrice">Pay by the hour</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text font_weight_600">$</span>
                                    <input type="number" class="form-control text-end" placeholder="0.00" aria-label="Amount (to the nearest dollar)" id="payByHourPrice" name="payByHourPrice" />
                                    <span class="input-group-text">/hr</span>
                                </div>
                                <p class="text-muted font_14">Rumman Tanveer's profile rate is $5.00 /hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label font_weight_600 w-100" for="weeklyLimit">Weekly Limit</label>
                                <p class="text-muted font_14">Setting a weekly limit is a great way to help ensure you stay on budget.</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label font_weight_600 w-100" for="budget">Pay a fixed price for your project
                                </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text font_weight_600">$</span>
                                    <input type="number" class="form-control text-end fixed_price" placeholder="0.00" aria-label="Amount (to the nearest dollar)" id="budget" name="fixed_price" value="{{old('fixed_price')}}" />
                                </div>
                                <div class="text-danger error" data-error="fixed_price"></div>
                            </div>
                        </div>
                        <p class="text-muted font_14">This is the price you and {{$user->FullName}} have agreed upon</p>
                        <div class="row my-2">
                            <div class="col-md-12">
                                <div class="mb-3 project_type_radio_content">
                                    <label class="font_weight_600 mb-3 form-label d-block">Deposit funds into Escrow</label>
                                    <p class="text-muted font_12">Escrow is a neutral holding place that protects your deposit until work is approved.</p>
                                    <label for="deposit_whole" class="cursor_pointer me-3 position-relative d-flex mb-3  align-items-center">
                                        <input type="radio" name="fixedType" id="deposit_whole" value="1" checked />
                                        <span class="d-inline-block me-1"><i class="mid_dot"></i></span>
                                        Deposit $<p id="fixed_price_show" class="mb-0 me-1">{{@$hireFreelancers->fixed_price ? @$hireFreelancers->fixed_price : '0'}}.00</p> for the whole project
                                    </label>
                                    <label for="deposit_milestone" class="cursor_pointer position-relative d-flex mb-3  align-items-center">
                                        <input type="radio" name="fixedType" id="deposit_milestone" value="2" />
                                        <span class="d-inline-block me-1"><i class="mid_dot"></i></span>
                                        Deposit a lesser amount to cover the first milestone
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="multi_mile" class="hide_milestones d-none">
                            <hr>
                            <h5 class="font_16">Project Milestones </h5>
                            <p class="text-muted font_14">Add project milestones and pay in installments as each milestone is completed to your satisfaction. </p>
                            @if(isset($hireFreelancers))
                            @if(count(@$hireFreelancers->milestone)>0)
                            @foreach(@$hireFreelancers->milestone as $key => $val)
                            <div class="row mb-2 newrow" id="row{{$key+1}}">

                                <div class="col-lg-6">
                                    <label for="milestone_description" class="col-form-label font_weight_600">Milestone Description <span class="asterisk">*</span></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text count" id="basic-addon{{$key+1}}">{{$key+1}}</span>
                                        <input type="text" class="form-control" name="milestone_description[]" placeholder="What is the task ?" value="{{$val->description}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 col-12">
                                    <div class="mb-3">
                                        <label for="due_date" class="col-form-label font_weight_600">Due Date</label>
                                        <div class="input-group date" id="due_datepicker">
                                            <input type="text" name="due_date[]" placeholder="mm-dd-yyyy" class="form-control date mile_datepicker bg-transparent cursor_pointer" id="due_date" value="{{$val->due_date}}" readonly />
                                            <span class="input-group-append position-absolute top-0 end-0">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 col-12">
                                    <label for="deposit_amount" class="col-form-label font_weight_600">Deposit Amount <span class="asterisk">*</span></label>
                                    <div class="main_rate depo_amount d-flex align-items-center text-end position-relative">
                                        <i class="fas fa-dollar-sign me-2"></i>
                                        <input class="text-end" placeholder="0.00" type="number" name="deposit_amount[]" id="deposit_amount" value="{{$val->deposit_amount}}">
                                        <button type="button" class="delete_mile font_weight_600 bg-transparent color_green border-0 ms-2" id="{{$key+1}}"><i class="fas fa-times"></i></button>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="row mb-2 newrow">
                                <div class="col-lg-6">
                                    <label for="milestone_description" class="col-form-label font_weight_600">Milestone Description <span class="asterisk">*</span></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">1</span>
                                        <input type="text" class="form-control" name="milestone_description[]" placeholder="What is the task ?">
                                    </div>
                                    <div class="text-danger error" data-error="milestone_description.0"></div>
                                </div>
                                <div class="col-md-6 col-lg-3 col-12">
                                    <div class="mb-3">
                                        <label for="due_date" class="col-form-label font_weight_600">Due Date</label>
                                        <div class="input-group date" id="due_datepicker">
                                            <input type="text" name="due_date[]" placeholder="mm-dd-yyyy" class="form-control date mile_datepicker bg-transparent cursor_pointer" id="due_date" readonly />
                                            <span class="input-group-append position-absolute top-0 end-0">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-danger error" data-error="due_date.0"></div>
                                </div>
                                <div class="col-md-6 col-lg-3 col-12">
                                    <label for="deposit_amount" class="col-form-label font_weight_600">Deposit Amount <span class="asterisk">*</span></label>
                                    <div class="main_rate depo_amount d-flex align-items-center text-end position-relative">
                                        <i class="fas fa-dollar-sign me-2"></i>
                                        <input class="text-end" placeholder="0.00" type="number" name="deposit_amount[]" id="deposit_amount" value="">
                                        <button type="button" class="font_weight_600 bg-transparent color_green border-0 ms-2 d-none"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="text-danger error" data-error="deposit_amount.0"></div>
                                </div>
                            </div>
                            @endif
                            @endif
                        </div>
                        <div class="hide_milestones d-none">
                            <button type="button" id="add_milestone" class="w-auto add_mile font_weight_600 bg-transparent color_green border-0">
                                <i class="fas fa-plus-circle me-2"></i>Add Milestone
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="up-card my-3">
                <h4 class="mb-5 font_weight_600">Work Description</h4>
                <input type="hidden" name="projectId" value="{{$project->id ?? ''}}">
                <input type="hidden" name="freelancerId" value="{{$user->id ?? ''}}">

                <div class="related_job_listing">
                    <label class="w-100 font_weight_600 mb-1" for="relatedJobListing">Related Job Listing</label>
                    <a id="relatedJobListing" href="{{route('project.proposal.view',['proposalId'=>$project->id])}}" class="open_btn bg-transparent border-0 " target="_blank">{{$project->title ?? ''}}</a>
                </div>
                <div class="my-4">
                    <label class="w-100 font_weight_600 mb-1" for="contact_label">Contract Title</label>
                    <span class="contact_label font_14" id="contact_label">{{(!empty($hireFreelancers->contract_title) ? $hireFreelancers->contract_title : $project->title)}}
                        <span class="contact_label border-0 bg-transparent"><i class="fas fa-pen fade_edit_btn cursor_pointer"></i></span>
                    </span>
                    <div class="mb-3 contact_label_input">
                        <input class="form-control font_14" id="contactTitle" name="contractTitle" type="text" value="{{old('contractTitle',(!empty($hireFreelancers->contract_title) ? $hireFreelancers->contract_title : $project->title))}}" placeholder="Contact Title" />
                    </div>
                    <div class="text-danger error" data-error="contractTitle"></div>
                </div>
                <div class="my-4">
                    <label class="w-100 font_weight_600 mb-1" for="contractDescription">Add a description of the work</label>
                    <span class="work_description font_14" id="work_description">{{$hireFreelancers->contract_description ??  $project->description}}
                        <span class="work_description border-0 bg-transparent"><i class="fas fa-pen fade_edit_btn cursor_pointer"></i></span>
                    </span>
                    <div class="mb-3 work_description_input">
                        <textarea class="form-control font_14" id="workDescription" type="text" placeholder="Work Description" style="height: 10rem;" name="workDescription" data-sb-validations="">{{old('workDescription',(!empty($hireFreelancers->contract_description) ? $hireFreelancers->contract_description : $project->description))}}</textarea>
                        <div class="text-danger error" data-error="workDescription"></div>

                    </div>
                </div>
                <div class="mt-4 d-flex gap-4 align-items-center justify-content-end">
                    <a href="{{route('project.proposal.view',['proposalId'=>$project->id, 'view=nav-review-proposal'])}}" class="open_btn font-15 bg-transparent border-0 fw-bold">Cancel</a>
                    <button type="submit" class="up_green_btn font_weight_600" id="offer_submit_form" disabled>Continue</button>
                    <!-- <input type="submit" class="text-decoration-none fw-bold up_green_btn"  id="offer_submit_form"   value="Continue" /> -->
                </div>
            </div>
        </form>
    </main>
</div>
<div class="loading d-none"></div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/project_review_proposal.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.4-rc.1/web3.min.js"></script>
<script type="text/javascript" src="{{asset('js/metamask-onboarding.bundle.js')}}"></script>

<script>
    $(document).ready(function() {
        let clientAddress = '<?php echo Session::get('clientAddress') ?>';
        let freelancer_address = '<?php echo $freelancer_wallet_address ?>';
        let client_address = document.getElementById('client_address');
        let onboardButton = document.getElementById('metamask_connect');
        let spinnerBtn = document.getElementById('spinner_btn');
        let offer_submit_form = document.getElementById('offer_submit_form');
        let freelancer_id = '<?php echo $user->id ?>';
        let project_id = '<?php echo $project->id ?>';
        let checkSesison = "{{json_encode(Session::get('client_hire_details'))}}";
        let client_hire_detail = '';
        let session_freelancer_id = '';
        let session_project_id = '';
        let contract_address = '<?php echo @$hireFreelancers->contract_address ?>';


        if (checkSesison != '') {
            client_hire_detail = '<?php echo @Session::get('client_hire_details')['clientAddress'] ?>';
            session_freelancer_id = '<?php echo @Session::get('client_hire_details')['freelancer_id'] ?>';
            session_project_id = '<?php echo @Session::get('client_hire_details')['project_id'] ?>';
            session_contract_address = '<?php echo @Session::get('client_hire_details')['contractAddress'] ?>';
        }

        let onboarding = new MetamaskOnboarding();
        if (checkSesison == '') {
            $("#connect_modal").modal('show');
        } else if (session_freelancer_id != freelancer_id || session_project_id != project_id || contract_address == '') {
            $("#connect_modal").modal('show');
        } else {
            offer_submit_form.disabled = false;
        }
        $('#metamask_connect').on('click', function() {
            connect();
        });
        /* To connect using MetaMask */
        async function connect() {
            await window.ethereum.request({
                    method: 'eth_requestAccounts'
                })
                .then(handleAccountsChanged)
                .catch((err) => {
                    if (err.code === 4001) {
                        console.log('Please connect to MetaMask.');
                        onboardButton.text = 'Install MetaMask!';
                        onboardButton.disabled = false;
                        onboardButton.onclick = () => {
                            onboardButton.text = 'Onboarding in progress';
                            onboardButton.disabled = true;
                            onboarding.startOnboarding();
                        };
                        offer_submit_form.disabled = true;
                    } else {
                        console.error(err);
                    }
                });
        }

        function handleAccountsChanged(accounts) {
            let currentAccount = null;

            if (accounts.length === 0) {
                onboardButton.text = "You're not connected to MetaMask";
                onboardButton.disabled = false;
            } else if (accounts[0] !== currentAccount) {
                currentAccount = accounts[0];
                onboardButton.disabled = true;
                client_address.value = `${currentAccount}`;
                spinnerBtn.classList.add('fa-sync-alt');
                onboardButton.innerHTML = "Please Wait ! <i id='spinner_btn' class='ms-3 fas fa-spin fa-sync-alt'></i>";

                jQuery.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/client/deployContract',
                    data: {
                        client_address: client_address.value,
                        freelancer_address: freelancer_address,
                        freelancer_id: freelancer_id,
                        project_id: project_id,
                    },
                    success: async function(response) {
                        onboardButton.text = 'Connected';
                        spinnerBtn.classList.remove('fa-sync-alt');
                        onboardButton.disabled = true;
                        offer_submit_form.disabled = false;
                        $("#connect_modal").modal('hide');
                    },
                    error: function(error) {
                        console.log("EROR" + error);
                    }
                });
            }
        }
        if ($('#by_fix_price').is(':checked')) {
            $('#pills-profile-tab').tab('show');
            $("#deposit_whole").trigger("click");
            $("#deposit_milestone").trigger("click");
        }
    });
</script>
@endsection