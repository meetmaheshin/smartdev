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
                <div id="install_wrap" class="text-center" style="display:none">
                    <img src="{{asset('images/MetaMask_Fox.svg.png')}}" width="145" height="130" alt="">
                    <h3>Welcome to MetaMask</h3>
                    <p>Connecting you to Ethereum and the Decentralized Web.</p>
                    <p>We're happy to see you.</p>
                    <button class="up_green_btn text-light text-center mb-2 text-decoration-none" id="connectButton" style="display:none">Connect Button</button>
                </div>
                <div class="row" id="buy_tokens_card" style="display:none">
                    <div class="col-lg-4 d-flex align-items-stretch mb-3 mb-sm-0">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <img class="object-fit-cover" src="{{asset('images/rovi-coin.png')}}" width="100" height="100" alt="">
                                <h5 class="card-title mt-2">About ROVI</h5>
                                <p class="card-text">A Web3 Powerhouse building Infra + Platforms to bring Crypto to Billion Users.</p>
                            </div>
                            <div class="card-footer">
                                <div class="last_balance d-flex my-2 justify-content-between align-items-center">
                                    <p class="m-0">Balance :</p>
                                    <span class="font_weight_600">{{number_format( $token->rovi_balance ?? 0, 2, '.', ' ' )}}</span>
                                </div>
                                <a href="javascript:void(0)" class="up_green_btn d-block text-light text-center mb-2 text-decoration-none" data-bs-toggle="modal" data-bs-target="#loadRoviModal" id="load_rovi">Load Rovi</a>
                                <!-- Modal -->
                                <div class="modal fade load_metamask" id="loadRoviModal" tabindex="-1" aria-labelledby="loadRoviModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 font_weight_600" id="loadRoviModalLabel">Load ROVI</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="addNumberOfToken">Add Number of Token</label>
                                                        <input class="form-control" id="addNumberOfToken" name="rovi_token" type="number" data-sb-validations="" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn up_green_btn" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn up_green_btn rovitokenButton" onClick="App.transferCoins()" data-href-tx="{{route('setting.load-rovi-tokens-tx')}}" data-href="{{route('setting.load-rovi-tokens')}}">Load</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <img class="object-fit-cover" src="{{asset('images/dev3dao_fav_icon.png')}}" width="100" height="100" alt="">
                                <h5 class="card-title mt-2">About SmartDev3</h5>
                                <p class="card-text">SmartDev3 is a top tier agency focusing on design and development in Web3 ecosystem.</p>
                            </div>
                            <div class="card-footer">
                                <div class="last_balance d-flex my-2 justify-content-between align-items-center">
                                    <p class="m-0">Balance :</p>
                                    <span class="font_weight_600">${{number_format( $token->dev3_balance ?? 0, 2, '.', ' ' )}}</span>
                                </div>
                                <a href="javascript:void(0)" class="up_green_btn d-block text-light text-center mb-2 text-decoration-none" data-bs-toggle="modal" data-bs-target="#loadDev3Modal" id="load_dev3dao">Load SmartDev3</a>

                                <!-- Modal -->
                                <div class="modal fade load_metamask" id="loadDev3Modal" tabindex="-1" aria-labelledby="loadDev3ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 font_weight_600" id="loadDev3ModalLabel">Load SmartDev3</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="addDev3token">Add Number of Token</label>
                                                        <input class="form-control" id="addDev3token" name="dev_token" type="number" data-sb-validations="" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn up_green_btn" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn up_green_btn dev3tokenButton" onClick="App.transferDev3()" data-href-tx="{{route('setting.load-rovi-tokens-tx')}}" data-href="{{route('setting.load-rovi-tokens')}}">Load</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <img class="object-fit-cover" src="{{asset('images/usdt_icon.png')}}" width="100" height="100" alt="">
                                <h5 class="card-title mt-2">About USDT</h5>
                                <p class="card-text">USDT is a cryptocurrency stablecoin, the value of which is pegged to the US dollar (USD) at the rate of one USDT token to one USD.</p>
                            </div>
                            <div class="card-footer">
                                <div class="last_balance d-flex my-2 justify-content-between align-items-center">
                                    <p class="m-0">Balance :</p>
                                    <span class="font_weight_600">₮{{number_format( $token->usdt_balance ?? 0, 2, '.', ' ' )}}</span>
                                </div>
                                <a href="javascript:void(0)" class="up_green_btn d-block text-light text-center mb-2 text-decoration-none" data-bs-toggle="modal" data-bs-target="#loadUsdtModal" id="load_usdt">Load USDT</a>
                                <!-- Modal -->
                                <div class="modal fade load_metamask" id="loadUsdtModal" tabindex="-1" aria-labelledby="loadUsdtModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 font_weight_600" id="loadUsdtModalLabel">Load USDT</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="addUsdttoken">Add Number of Token</label>
                                                        <input class="form-control" id="addUsdttoken" name="addUsdttoken" type="number" data-sb-validations="" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn up_green_btn" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn up_green_btn usdttokenButton" onClick="App.transferUsdt()" data-href-tx="{{route('setting.load-rovi-tokens-tx')}}" data-href="{{route('setting.load-rovi-tokens')}}">Load</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('js/metamask-onboarding.bundle.js')}}"></script>

<script type="text/javascript" src="{{asset('js/metamask.js')}}"></script>

@endsection