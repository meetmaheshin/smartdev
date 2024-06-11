@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/project_review_proposal.css')}}">
@endsection
@section('content')
<section class="container min_60vh mt-5">
    <div class="up-card">
        <div class=" d-flex justify-content-between mt-2">
            <div class=" d-flex">
                <img class="rounded-circle border-0 object-fit-cover" src="{{ $clientHire->freelancer->profile_photo_path ? asset('storage/images/client_profile/'.$clientHire->freelancer->profile_photo_path) : asset('images/user_default.jpeg') }}" alt="user-image" width="60" height="60">
                <div class="ms-2">
                    <h5 class="mt-2 font_weight_600">{{$clientHire->projects->title}}</h5>
                    <h6 class="font_weight_600">{{$clientHire->freelancer->FullName}}</h6>
                    <p class="text-muted font_14">{{$clientHire->freelancer->country->name}}</p>
                </div>
            </div>
            <div>
                <!-- <button type="button" class="text-center d-block lh-sm mh-40 font_15 my-3 text-decoration-none w-100 font_weight_600 px-3 py-2 color_green button_border bg-transparent">Cancel contract</button> -->
            </div>
        </div>
        <div class="row mt-4">
            <hr class="grey_hr">
            <h6 class="mb-4 font_weight_600"><i class="fas fa-bullseye"></i> Milestones & Payments</h6>
            <!-- <div class="col-md-3 text-center col-3 mb-4">
                <h6 class="font_weight_600 color_green"><i class="fas fa-hand-holding-usd"></i> Budget</h6>
                <h6 class="font_weight_600">${{$clientHire->total_price}}.00</h6>
            </div> -->
            <div class="col-md-3 text-center col-3 mb-4">
                <h6 class="font_weight_600 color_green"><i class="fas fa-handshake"></i> In Escrow</h6>
                @php
                $escrowAmount =0;
                $milestonePaid = 0 ;
                @endphp
                @if(!empty($clientHire->milestone))
                @foreach($clientHire->milestone as $milestoneEscrow)
                @if($milestoneEscrow->status != 0)
                @php
                $escrowAmount = $escrowAmount + $milestoneEscrow->deposit_amount;
                @endphp
                @endif
                @if($milestoneEscrow->status == 3)
                @php
                $milestonePaid = $milestonePaid + $milestoneEscrow->deposit_amount;
                @endphp
                @endif
                @endforeach
                @endif
                <h6 class="font_weight_600">${{$escrowAmount}}.00</h6>
            </div>
            <div class="col-md-3 text-center col-3 mb-4">
                <h6 class="font_weight_600 color_green"><i class="fas fa-file-invoice-dollar"></i> Milestone Paid</h6>
                <h6 class="font_weight_600">${{$milestonePaid}}.00</h6>
            </div>
            <!-- <div class="col-md-3 text-center col-3 mb-4">
                <h6 class="font_weight_600 color_green"><i class="fas fa-hourglass-half"></i> Remaining</h6>
                <h6 class="font_weight_600">${{$clientHire->total_price - $milestonePaid }}.00</h6>
            </div> -->
        </div>
        <hr class="grey_hr m-0 hr-30 mb-4">
        <h6 class="font_weight_600 mb-4"><i class="fas fa-tasks"></i> Remaining Milestones</h6>
        @if(count($clientHire->milestone) > 0)
        @foreach($clientHire->milestone as $key=> $milestoneEscrow)
        <div class="row milestone_head mt-3">
            <div class="col-md-1 font_weight_600">{{++ $key}}.</div>
            <div class="col-md-7">
                <div class="milestone_new">
                    <h6 class="font_weight_600 color_green">{{$milestoneEscrow->description}}</h6>
                    <p class="font_weight_700 updated_val">${{$milestoneEscrow->deposit_amount}}.00 {{$milestoneEscrow->status == 3 ? '(Funded)': ''}} <span class="ms-5">{{$milestoneEscrow->due_date != '' ? 'Due Date: '.$milestoneEscrow->due_date : ''}} </span></p>
                </div>
                <div class="mile_edit mb-3" style="display:none;">
                    <form>
                        <div class="row">
                            <div class="col-md-5">
                                <h6 class="font_weight_600 color_green">{{$milestoneEscrow->description}}</h6>
                                <input type="number" id="update_amount_{{$milestoneEscrow->id}}" class="form-control" placeholder="Amount" aria-label="Amount" value="{{$milestoneEscrow->deposit_amount}}.00">
                            </div>
                            <div class="col-md-7  d-flex align-items-end">
                                <button type="button" class="up_green_btn text-decoration-none mile_edit_close update_milestones" data-milestoneId="{{$milestoneEscrow->id}}" id="update_milestone_{{$milestoneEscrow->id}}">Update <i id="spinner_btn" class="update_spinner ms-3 fa-sync-alt d-none fas fa-spin"></i></button>
                                <button type="button" class="btn btn-danger close_editMile ms-3 rounded-5 px-4">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-start edit_milestone_parent justify-content-end">
                <a href="javascript:void(0)" data-id="{{$milestoneEscrow->id}}" class="up_green_btn text-decoration-none me-2 font_weight_300  {{$clientHire->accept_offer == 1 && $milestoneEscrow->status == 2 ? 'approve_work_pay_now': ($clientHire->accept_offer == 1 && $clientHire->finish_project != 4 && ($milestoneEscrow->status == 1 || $milestoneEscrow->status == 0) ? 'working' :($milestoneEscrow->status == 3 && $clientHire->finish_project== 3 ? 'payment_done':($clientHire->accept_offer == 1 && $clientHire->finish_project == 4 && $milestoneEscrow->status == 1  ? 'working_btn btn btn-secondary' : '')))}}" onClick="{{$clientHire->accept_offer == 1 && $milestoneEscrow->status == 2 ? 'App.approve_work_pay_now()': ''}}">{{$clientHire->accept_offer == 1 && $milestoneEscrow->status == 2 ? 'Approve & Pay Now': ($clientHire->accept_offer == 1 && $clientHire->finish_project != 4 && ($milestoneEscrow->status == 1 || $milestoneEscrow->status == 0) ? 'Working' :($milestoneEscrow->status == 3 && $clientHire->finish_project== 3 ? 'Payment Completed':($clientHire->accept_offer == 1 && $clientHire->finish_project == 4 && $milestoneEscrow->status == 1  ? 'Working' : '')))}}</a>
                @php
                $previousId = $milestoneEscrow->id -1;
                $checkStatus = App\Models\ProjectMilestone::getMilestoneById($previousId,$clientHire->id);
                $adddiv = '';
                if(isset($checkStatus)){
                    if($checkStatus->status==3){
                        $adddiv = 'Fund Contract';
                    }
                }
                @endphp
                @if(($adddiv == '' && $clientHire->accept_offer == 0 && $milestoneEscrow->status == 0 && $clientHire->finish_project != 4) || ($adddiv == '' && $clientHire->finish_project == 4 && $milestoneEscrow->status == 0))
                <div class="ed_delete_btn d-flex align-items-center">
                    <a href="javascript:void(0)" class="me-2 mb-0 mt-1 milestone_edit_btn"><i class="fas fa-pen"></i></a>
                    <a href="javascript::void(0)" class="delete-confirm mb-0 mt-1 milestone_delete" data-id="{{$milestoneEscrow->id}}"><i class="fas fa-trash"></i></a>
                </div>
                @endif
                @if($adddiv != '' && $milestoneEscrow->status == 0)
                <button type="button" id="fund_contract_{{$milestoneEscrow->id}}" data-offer-id="{{$clientHire->payment_option == 1 ? $milestoneEscrow->id : $clientHire->id}}" data-amount="{{$clientHire->payment_option == 1 ? $milestoneEscrow->deposit_amount : $clientHire->hourly_price}}" onClick="App.fundContracts({{$milestoneEscrow->id}})" class="up_green_btn text-decoration-none">{{$adddiv}}</button>
                @endif
                @if( $milestoneEscrow->status == 3 )
                <button type="button" class="up_green_btn text-decoration-none disabled">Closed</button>
                @endif
            </div>
            <hr class="grey_hr">
        </div>
        @endforeach
        @endif
    </div>
    <hr class="grey_hr">
</section>
@endsection
@section('js')
<script>
    var escrow_contract_address = "<?php echo $clientHire->contract_address ?>";
    console.log("EscrowContr-" + escrow_contract_address);
</script>
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/metamask-onboarding.bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('js/client_metamask.js')}}"></script>
<script type="text/javascript" src="{{asset('js/contract_milestone.js')}}"></script>
@endsection