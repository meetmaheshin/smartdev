@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/profile_setting.css')}}">
@endsection
@section('content')
<section class="profile_setting min_60vh mt-5">
    <div class="container">
        <div class="row">
            @include("freelancer.setting.setting_sidebar")
            <div class="col-md-9 px-0 px-md-2">
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h3 class="mb-4 font_weight_600">Connect Your Wallet</h3>
                <div class="up-card">
                    <p class="text-muted font_16">Select what network and wallet your want to connect below.</p>
                    <form action="{{route('setting.store.wallet')}}" method="post" class="wallet_decision">
                        @csrf
                        <p class="font_weight_600">Choose Network</p>
                        <div class="mb-4 d-flex">
                            <div class="form-check form-check-inline position-relative radio_container d-flex justify-content-center @if(old('network')=='etherium') active @elseif(old('network')=='binanace') @else active @endif">
                                <input class="form-check-input radio-button" type="radio" name="network" id="flexRadioEth" value="etherium" @if(old('network')=='etherium' ) checked @elseif(old('network')=='binanace' ) @else checked @endif>
                                <div class="radio-tile text-center">
                                    <img class="d-block m-auto" src="{{asset('images/ethereum.png')}}" alt="">
                                    <label class="form-check-label font_weight_600" for="flexRadioEth">
                                        Etherium
                                    </label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline position-relative radio_container d-flex justify-content-center  @if(old('network')=='binanace') active @endif">
                                <input class="form-check-input radio-button" type="radio" name="network" id="flexRadioBinanace" value="binanace" value="{{ old('network') }}" @if(old('network')=='binanace' ) checked @endif>
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
                            <input class="form-control" id="walletName" type="text" placeholder="Wallet Name" name="walletName" value="{{ old('walletName') }}" />
                            @if ($errors->has('walletName'))
                            <span class="text-danger">{{ $errors->first('walletName') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label font_weight_600" for="wallet_address">Wallet Address<span class="asterisk">*</span>
                                <button type="button" class="bg-transparent border-0 ms-1 color_green font_14" id="Wallet_Address" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Please enter a valid wallet address. Ensure it matches the correct format for the specific cryptocurrency. Common formats include a string of alphanumeric characters, typically starting with specific prefixes depending on the currency (e.g., '0x' for Ethereum, '1' or '3' for Bitcoin). Double-check for any typos or extra spaces."><i class="fas fa-info-circle font_14"></i></button></label>
                            </label>
                            <input class="form-control" id="wallet_address" type="text" placeholder="Wallet Address" name="wallet_address" value="{{ old('wallet_address') }}" />
                            @if ($errors->has('wallet_address'))
                            <span class="text-danger">{{ $errors->first('wallet_address') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <div class="form-check d-inline-block cursor_pointer">
                                <input class="form-check-input cursor_pointer" id="makeThisMyPrimaryWalletAddress" type="checkbox" name="primary" value="1" />
                                <label class="form-check-label cursor_pointer" for="makeThisMyPrimaryWalletAddress">Make this my primary wallet address</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check d-inline-block cursor_pointer">
                                <input class="form-check-input cursor_pointer" id="addmetamask" type="checkbox" name="add_metamask" value="1" />
                                <label class="form-check-label cursor_pointer" for="addmetamask">Connect Metamask</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="rounded-0 up_green_btn d-inline-block font_weight_600" type="submit">Save</button>
                        </div>
                    </form>
                    <hr>
                    @if(count($walletData)>0)
                    <h4 class="font_weight_600">Wallet List</h4>
                    <div class="mt-4 table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Network</th>
                                    <th scope="col">Wallet Name</th>
                                    <th scope="col">Wallet Address</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($walletData as $key => $wallets)
                                <tr>
                                    <td>{{$wallets->network}}</td>
                                    <td>{{$wallets->name}}</td>
                                    <td class="text-break">{{$wallets->wallet_address}}</td>
                                    <td>{{$wallets->primary == '1' ? 'Primary Wallet' : '-'}}</td>
                                    <td>@if($wallets->primary != 1)<button type="button" class="btn btn-danger delete_wallet" data-url="{{route('delete-wallet')}}" data-id="{{$wallets->id}}">Delete</button>@endif</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="customPagination">
                            {{$walletData->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.min.js"></script>
<script type="text/javascript" src="{{asset('js/metamask-onboarding.bundle.js')}}"></script>

<script type="text/javascript" src="{{asset('js/wallet.js')}}"></script>

@endsection