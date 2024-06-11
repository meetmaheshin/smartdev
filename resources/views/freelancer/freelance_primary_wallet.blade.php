@extends('layouts.freelance_register')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/profile_setting.css')}}">
@endsection
@section('content')
<section class="profile_setting min_60vh my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1 class="mb-4 font_weight_600">Add Your Primary Wallet</h1>
                <p class="text-muted font_weight_600 font_16">Select what network and wallet your want to connect below.</p>
                <form action="{{route('store_wallet')}}" method="post" class="wallet_decision">
                    @csrf
                    <p class="font_weight_600">Choose Network</p>
                    <div class="mb-4 d-flex">
                        <div class="form-check form-check-inline position-relative radio_container d-flex justify-content-center {{ @$walletData->network == 'etherium' ? 'active' : '' }} ">
                            <input class="form-check-input radio-button" type="radio" name="network" id="flexRadioEth" value="etherium" {{ isset($walletData->network) == 'etherium' ? 'checked' : '' }}>
                            <div class="radio-tile text-center">
                                <img class="d-block m-auto" src="{{asset('images/ethereum.png')}}" alt="">
                                <label class="form-check-label font_weight_600" for="flexRadioEth">
                                    Etherium
                                </label>
                            </div>
                        </div>
                        <div class="form-check form-check-inline position-relative radio_container d-flex justify-content-center {{ @$walletData->network == 'binanace' ? 'active' : '' }}">
                            <input class="form-check-input radio-button" type="radio" name="network" id="flexRadioBinanace" value="binanace" {{ isset($walletData->network) == 'binanace' ? 'checked' : '' }}>
                            <div class="radio-tile text-center">
                                <img class="d-block m-auto" src="{{asset('images/binance.png')}}" alt="">
                                <label class="form-check-label font_weight_600" for="flexRadioBinanace">
                                    Binanace
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label font_weight_600" for="walletName">Wallet Name<span class="asterisk">*</span>
                            <button type="button" class="bg-transparent border-0 ms-1 color_green font_14" id="walletName_tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="The name associated with this network."><i class="fas fa-info-circle font_14"></i></button></label>
                        <input class="form-control" id="walletName" type="text" placeholder="Wallet Name" name="walletName" value="{{old('walletName',@$walletData->name)}}" />
                        @if ($errors->has('walletName'))
                        <span class="text-danger">{{ $errors->first('walletName') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label font_weight_600" for="wallet_address">Wallet Address<span class="asterisk">*</span></label>
                        <input class="form-control" id="wallet_address" type="text" placeholder="Wallet Address" name="wallet_address" value="{{ old('wallet_address',@$walletData->wallet_address) }}" />
                        @if ($errors->has('wallet_address'))
                        <span class="text-danger">{{ $errors->first('wallet_address') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <p class="text-muted">
                            Note : This will be your primary wallet address, you can change it later.
                        </p>
                    </div>
                    <div class="d-flex mt-5 justify-content-between">
                        <a class="back_btn text-decoration-none" href="{{route('create_rate')}}">Back</a>
                        <input type="submit" class="up_green_btn text-decoration-none" value="Lastly : Your photo and location">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.min.js"></script>
<script type="text/javascript" src="{{asset('js/metamask-onboarding.bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wallet.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
<script type="text/javascript" src="{{asset('js/notify.js')}}"></script>
<script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('js/freelancer_rate.js')}}"></script>
@endsection