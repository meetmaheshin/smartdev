@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/project_review_proposal.css')}}">
@endsection
@section('content')
<div class="container checkout_offer min_60vh mt-5">
    <h3 class="mb-4 font_weight_600">Hire {{$hireFreelancer->freelancer->FullName}}</h3>
    <main class="up-card py-0">
        <div class="row">
            <div class="col-md-8 p-3">
                <h5 id="install_wrap text-decoration-none">Metamask Connected to your Web Application</h5>
                <button class="up_green_btn text-light text-center mb-2 text-decoration-none" id="connectButton">Connect to Metamask</button>
                <h6>{{$hireFreelancer->freelancer->FullName}} Account : <span id="account_id" class="font_weight_600">{{$wallet->wallet_address ? $wallet->wallet_address : '-' }}</span></h6>
            </div>
            <aside class="col-md-4 p-3 border-left-aside">
                <div class="row">
                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">
                        <img class="object-fit-cover rounded-circle" src="{{!empty($hireFreelancer->profile_photo_path) ? asset('/storage/images/client_profile/'.$hireFreelancer->profile_photo_path) : asset('images/user_default.jpeg')}}" width="50" height="50" alt="">
                    </div>
                    <div class="col-md-8 col-lg-10">
                        <h5>Hire <a class="text-dark bg-transparent border-0 text-decoration-none" href="javascript:void(0)">{{$hireFreelancer->freelancer->FullName}}</a> for : {{$hireFreelancer->projects->title}}</h5>
                    </div>
                    <div class="col-md-12 mt-3">
                        <h6 class="font_weight_600">Escrow Deposit <button class="bg-transparent border-0 ms-2 color_green font_15" id="submit_tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This escrow payment is for first milestone only."><i class="fas fa-info-circle font_14"></i></button></h6>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" class="ps-0 font_weight_500">Subtotal</th>
                                    <td class="text-end">${{($hireFreelancer->payment_option == 1 && $hireFreelancer->fixedType == 1 ) ?  $hireFreelancer->fixed_price.'.00' : (($hireFreelancer->payment_option == 1 && $hireFreelancer->fixedType == 2 ) ? $hireFreelancer->milestone[0]->deposit_amount.'.00' : $hireFreelancer->hourly_price)}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="ps-0 font_weight_500">Marketplace Fee</th>
                                    <td class="text-end">${{$hireFreelancer->payment_option == 1 && $hireFreelancer->fixedType == 1 ?  $hireFreelancer->fixed_price*(5/100) :($hireFreelancer->payment_option == 1 && $hireFreelancer->fixedType == 2 ? $hireFreelancer->milestone[0]->deposit_amount*(5/100) : $hireFreelancer->hourly_price*(5/100))}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="ps-0">Estimated Total</th>
                                    <!-- <td class="text-end font_weight_700">${{$hireFreelancer->payment_option == 1 && $hireFreelancer->fixedType == 1 ? $hireFreelancer->fixed_price :($hireFreelancer->payment_option == 1 && $hireFreelancer->fixedType == 2 ?  $hireFreelancer->milestone[0]->deposit_amount  :  $hireFreelancer->hourly_price)}}</td> -->

                                    <td class="text-end font_weight_700">${{$hireFreelancer->payment_option == 1 && $hireFreelancer->fixedType == 1 ? $hireFreelancer->fixed_price+$hireFreelancer->fixed_price*(5/100) :($hireFreelancer->payment_option == 1 && $hireFreelancer->fixedType == 2 ?  $hireFreelancer->milestone[0]->deposit_amount + $hireFreelancer->milestone[0]->deposit_amount*(5/100) :  $hireFreelancer->hourly_price+$hireFreelancer->hourly_price*(5/100))}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" id="fund_contract_{{$hireFreelancer->milestone[0]->id}}" data-qa="fulfill" data-offer-id="{{$hireFreelancer->payment_option == 1 ? $hireFreelancer->milestone[0]->id : $hireFreelancer->id}}" data-amount="{{$hireFreelancer->payment_option == 1 ? $hireFreelancer->milestone[0]->deposit_amount : $hireFreelancer->hourly_price}}" onClick="App.fundContracts({{$hireFreelancer->milestone[0]->id}})" class="cursor_pointer up_green_btn w-100 font_weight_600 my-3 mt-10 mb-20 fund_contract_hire">
                            Fund Contract & Hire
                        </button>
                        <!-- <h6 class="font_weight_600 mt-4">How billing works</h6>
                        <p class="font_14">Every Monday, we'll charge your primary billing method for the charges from the previous week. Then you’ll have 5 days to review and let us know if there are any issues.</p> -->
                    </div>
                </div>
            </aside>
        </div>
    </main>
</div>
@endsection
@section('js')
<script>
    var escrow_contract_address = "<?php echo $hireFreelancer->contract_address ?>";
    console.log("EscrowContr-" + escrow_contract_address);
</script>
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/metamask-onboarding.bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('js/client_metamask.js')}}"></script>

@endsection