<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="> 500 experienced blockchain engineers to choose from for you Blockchain development Idea ; Solidity Developers, Rust Developers  for Smart Contract,  Defi Exchange, NFT Marketplace, Defi Wallet, ENS Forks and for other crypto development projects. Contact us and let us help you!" />
    <title>@yield('title', 'Hire Blockchain Coders, Solidity programmers from SmartDev3 Ecosystem')</title>
    <link rel="shortcut icon" href="{{url('images/dev3dao_fav_icon.png')}}" type="{{url('images/dev3dao_fav_icon.png')}}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home-comman.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @stack('css')
    @yield('css')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YFF6H21W5M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YFF6H21W5M');
    </script>
    <style>
        .mega-menu {
            width: 100%;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .mega-menu .container {
            max-width: 100%;
        }

        .mega-menu h6 {
            font-weight: bold;
            margin: 10px 0;
            font-size: 1rem;
        }

        .mega-menu ul {
            padding-left: 0;
        }

        .mega-menu ul li {
            list-style-type: none;
            /* margin-bottom: 10px; */
        }

        .mega-menu ul li a {
            color: #333;
            position: relative;
            text-decoration: none;
        }

        .mega-menu ul li a:hover {
            color: #007bff;
        }

        .mega-menu .list-unstyled {
            padding-left: 0;
        }

        .mega-menu .list-unstyled li {
            /* margin-bottom: 10px; */
        }
        .font_11{
            font-size: 13px;
        }

        .dropdown-menu.mega-menu{
            /* width: 900px;  */
            border-top: 3px solid green;
        }

        /* .mega-menu ul li a:before {
            position: absolute;
            top: 3px;
            left: -13px;
            content: "";
            width: 8px;
            height: 8px;
            background: green;
            border-radius: 50%;
        } */

        .dropdown_box_width{
            width: 900px;
        }

        .box_width_300{
            width: 300px;
        }


        @media only screen and (min-width: 994px) {
            .translate_minus_44{
                transform: translateX(-44%);
            }

            .translate_minus_56{
                transform: translateX(-56%);
            }

            .translate_minus_68{
                transform: translateX(-68%);
            }

            .translate_minus_74{
                transform: translateX(-74%);
            }

            .translate_minus_92{
                transform: translateX(-92%);
            }

            .translate_minus_70{
                transform: translateX(-70%);
            }

            .translate_minus_15{
                transform: translateX(-15%);
            }

            .translate_minus_11{
                transform: translateX(-11%);
            }

            /* Open the dropdown on hover */
            .nav-item.dropdown:hover .dropdown-menu {
                display: block;
                opacity: 1;
                visibility: visible;
                transition: opacity 0.3s ease;
            }

            /* Additional style adjustments to handle dropdown positioning */
            .dropdown-menu {
                display: none;
                opacity: 0;
                visibility: hidden;
            }
        }


        /* ul.list-unstyled{
            position: relative;
        }
        ul.list-unstyled:before{
            content: "";
            top: 50%;
            left: -10px;
            transform: translate(0, -50%);
            position: absolute;
            height: 97%;
            border-left: 2px solid green;
            padding-left: 8px;
        } */


        @media only screen and (max-width: 765px) {
            .dropdown_box_width {
                width: 90vw;
            }

        }

        @media only screen and (max-width: 994px) and (min-width: 765px) {
            .dropdown_box_width {
                width: 95vw;
            }
        }


        /* Remove default bullet points and apply custom styling */
        ul.custom-list {
            list-style-type: none;
            position: relative;
            padding-left: 20px; /* Add padding to give space for the custom bullet */
        }

        /* Style each list item */
        ul.custom-list > li {
            position: relative;
            padding-left: 10px; /* Space for the bullet */
        }

        /* Create the vertical connecting line and bullet for each <li> */
        ul.custom-list > li:before {
            content: "";
            position: absolute;
            /* top: 11px; */
            top: 11px;
            left: 0;
            height: 100%;
            width: 2px;
            background-color: green; /* Line color */
        }

        /* Create the circular bullet */
        ul.custom-list > li:after {
            content: "";
            position: absolute;
            left: -3px;
            top: 12px; /* Align the bullet at the start of the text */
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background-color: green;
            border-radius: 50%; /* Creates a circular bullet */
        }

        /* Adjust the line for the last list item */
        ul.custom-list > li:last-child:before {
            height: 0%;
            top: 0;
        }

        ul.custom-list > li:only-child:before {
            top: 0;
            height: 50%;
        }


        


    </style>
</head>
@section('body')
@show

<header class="navbar-menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="@if(auth()->check())
                                            @if(auth()->user()->is_admin == 1)
                                                {{ url('/client/dashboard') }}
                                            @elseif(auth()->user()->is_admin == 0)
                                                {{ url('/freelancer/dashboard') }}
                                            @elseif(auth()->user()->is_admin == 2)
                                                {{ url('/admin/dashboard') }}
                                            @endif
                                        @else
                                            {{ url('/') }}
        @endif"><img src="{{url('images/logo.png')}}" alt="SmartDev3" width="180"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{url('/#vision-us-section')}}">Vision</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/#dao-devs-section')}}">DAO DEVS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/#join-us-section')}}">Join Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('hire-us')}}">Hire Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('faqs')}}">FAQ'S</a>
                </li> --}}
                
                {{-- ********************************************************************* --}}
                <!-- Start of Crypto Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="cryptoDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Crypto
                    </a>
                    <div class="dropdown-menu mega-menu dropdown_box_width r_width_90" aria-labelledby="cryptoDropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-around">
                                <div class="col-md-3">
                                    <h6>Crypto/Token</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li class=""><a href="{{ url('cryptocurrency-development') }}" class="font_11">Cryptocurrency Development</a></li>
                                        <li><a href="{{ url('token-development') }}" class="font_11">Token Development</a></li>
                                        <li><a href="{{ url('ethereum-token-development') }}" class="font_11">Ethereum Token Development</a></li>
                                        <li><a href="{{ url('tron-token-development') }}" class="font_11">Tron Token Development</a></li>
                                        <li><a href="{{ url('rebase-token-development') }}" class="font_11">Rebase Token Development</a></li>
                                        <li><a href="{{ url('brc-20-token-development') }}" class="font_11">BRC 20 Token Development</a></li>
                                        <li><a href="{{ url('src-20-token-development') }}" class="font_11">SRC 20 Token Development</a></li>
                                        <li><a href="{{ url('bep20-token-development') }}" class="font_11">BEP - 20 Token Development</a></li>
                                        <li><a href="{{ url('altcoin-development') }}" class="font_11">Altcoin Development</a></li>
                                        <li><a href="{{ url('stable-coin-development') }}" class="font_11">Stable Coin Development</a></li>
                                        <li><a href="{{ url('gaming-utility-token-development') }}" class="font_11">Gaming Utility Token Development</a></li>
                                        <li><a href="{{ url('cryptocurrency-mlm-software-development') }}" class="font_11">Cryptocurrency MLM Software</a></li>
                                        <li><a href="{{ url('lsd-token-development') }}" class="font_11">LSD Token Development</a></li>
                                        <li><a href="{{ url('ai-token-development') }}" class="font_11">AI Token Development</a></li>
                                        <li><a href="{{ url('ai-crypto-coin-development') }}" class="font_11">AI Crypto Coin Development</a></li>
                                        <li><a href="{{ url('central-bank-digital-currency-development') }}" class="font_11">Central Bank Digital Currency Development</a></li>
                                        <li><a href="{{ url('token-sale-services') }}" class="font_11">Token sale Services</a></li>
                                        <li><a href="{{ url('crypto-consulting') }}" class="font_11">Crypto Consulting Services</a></li>
                                        <li><a href="{{ url('tokenomics-consulting') }}" class="font_11">Tokenomics Consulting</a></li>
                                        <li><a href="{{ url('hire-token-developer') }}" class="font_11">Hire Token Developer</a></li>

                                        <!-- Add more links as per your image -->
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>Tokenization</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('art-tokenization') }}" class="font_11">Art Tokenization</a></li>
                                        <li><a href="{{ url('real-world-asset-tokenization') }}" class="font_11">Real World Asset Tokenization</a></li>
                                        <li><a href="{{ url('real-estate-tokenization') }}" class="font_11">Real Estate Tokenization</a></li>
                                        <li><a href="{{ url('tokenization-platform-development') }}" class="font_11">Tokenization Platform Development</a></li>
                                        {{-- <li><a href="{{ url('real-estate-tokenization') }}" class="font_11">Real Estate Tokenization Essential Guide</a></li> --}}
                                        <li><a href="{{ url('crypto-etf-development') }}" class="font_11">Crypto ETF Development</a></li>
                                        <li><a href="{{ url('bitcoin-ordinals-token-development') }}" class="font_11">Bitcoin Ordinals Token Development</a></li>
                                        <li><a href="{{ url('bitcoin-ordinals-token-marketing') }}" class="font_11">Bitcoin Ordinals Token Marketing</a></li>
                                        <li><a href="{{ url('rwa-tokenization-use-cases') }}" class="font_11">RWA Tokenization Use Cases</a></li>
                                        <li><a href="{{ url('gold-tokenization') }}" class="font_11">Gold Tokenization</a></li>
                                    </ul>
                                    <h6>Custom Solutions</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('crypto-prediction-market-platform') }}" class="font_11">Crypto Prediction Market Platform</a></li>
                                        <li><a href="{{ url('decentralized-sports-betting-platform') }}" class="font_11">Decentralized Sports Betting Platform</a></li>
                                        <li><a href="{{ url('know-your-transaction-platform-development') }}" class="font_11">KYT Platform Development</a></li>
                                        <li><a href="{{ url('carbon-credits-development') }}" class="font_11">Carbon Credits Development</a></li>
                                        <li><a href="{{ url('crypto-banking-solutions') }}" class="font_11">Crypto Banking Solutions</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>Solana</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('solana-blockchain-development-company') }}" class="font_11">Solana Blockchain Development</a></li>
                                        <li><a href="{{ url('solana-token-development') }}" class="font_11">Solana Token Development</a></li>
                                        <li><a href="{{ url('solana-meme-coin-development') }}" class="font_11">Solana Meme Coin Development</a></li>
                                        <li><a href="{{ url('solana-dapp-development') }}" class="font_11">Solana dApp Development</a></li>
                                        <li><a href="{{ url('solana-based-nft-marketplace-development') }}" class="font_11">Solana Based NFT Marketplace Development</a></li>
                                        <li><a href="{{ url('ido-launchpad-on-solana') }}" class="font_11">IDO Launchpad On Solana</a></li>
                                        {{-- <li><a href="#" class="font_11">How To Launch Solana Meme Coin</a></li>
                                        <li><a href="#" class="font_11">Solana Development Guide</a></li>
                                        <li><a href="#" class="font_11">Solana IDO Launchpad Guide</a></li> --}}
                                    </ul>

                                    {{-- Launchpad section --}}
                                    <h6>Launchpad</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('crypto-launchpad-development') }}" class="font_11">Crypto Launchpad Development</a></li>
                                    </ul>

                                    {{-- Meme Coin --}}
                                    <h6>Meme Coin</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('meme-coin-development') }}" class="font_11">Meme Coin Development</a></li>
                                        <li><a href="{{ url('bitcoin-ordinals-meme-coin-development') }}" class="font_11">Bitcoin Ordinals Meme Coin Development</a></li>
                                    </ul>

                                    {{-- Crypto Guide --}}
                                    <h6>Crypto Guide</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('how-to-launch-crypto-token') }}" class="font_11">How To Launch Crypto Token</a></li>
                                        {{-- <li><a href="#" class="font_11">Crypto Bull Run 2024</a></li>
                                        <li><a href="#" class="font_11">Altcoin Development Guide</a></li>
                                        <li><a href="#" class="font_11">Decentralized Stable Coin Development</a></li>
                                        <li><a href="#" class="font_11">Virtual Classroom Learning Platform Development</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Start of Exchanges Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="exchangesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Exchanges
                    </a>
                    <div class="dropdown-menu mega-menu dropdown_box_width r_width_90" aria-labelledby="exchangesDropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-around dropdown_box_width">
                                <div class="col-md-3">
                                    <h6>Exchanges</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('cryptocurrency-exchange-software') }}" class="font_11">Cryptocurrency Exchanges Development</a></li>
                                        <li><a href="{{ url('white-label-crypto-exchange') }}" class="font_11">White label Crypto Exchanges</a></li>
                                        <li><a href="{{ url('decentralized-exchange-development') }}" class="font_11">Dencentralized Exchnage Development</a></li>
                                        <li><a href="{{ url('p2p-exchange-development') }}" class="font_11">P2P Exchange Development</a></li>
                                        <li><a href="{{ url('listing-service') }}" class="font_11">Exchange Listing Services</a></li>
                                        <li><a href="{{ url('centralized-exchange-development') }}" class="font_11">Centralzed Exchange Development</a></li>
                                        <li><a href="{{ url('ai-powered-crypto-exchange-development') }}" class="font_11">AI-Powered Crypto Exchange Development</a></li>
                                        {{-- <li><a href="#" class="font_11">AI-Powered Crypto Dencentralized Development</a></li> --}}
                                        <li><a href="{{ url('crypto-derivatives-exchange-development') }}" class="font_11">Crypto Derivatives Exchange Development</a></li>
                                        <li><a href="{{ url('otc-crypto-exchange-development') }}" class="font_11">OTC Crypto Exchange Development</a></li>
                                        <li><a href="{{ url('leverage-margin-trading-exchange') }}" class="font_11">Leverage Margin Trading Exchange</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>Exchange Clone</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('binance-clone') }}" class="font_11">Binance Clone</a></li>
                                        <li><a href="{{ url('coinbase-clone') }}" class="font_11">Coinbase Clone</a></li>
                                        <li><a href="{{ url('poloniex-clone') }}" class="font_11">Poloniex Clone</a></li>
                                        <li><a href="{{ url('sushiswap-clone') }}" class="font_11">Sushiswap Clone</a></li>
                                        <li><a href="{{ url('bitstamp-clone') }}" class="font_11">Bitstamp Clone</a></li>
                                        <li><a href="{{ url('bitfinex-clone') }}" class="font_11">Bitfinex Clone</a></li>
                                        <li><a href="{{ url('bakeryswap-clone') }}" class="font_11">Bakeryswap Clone</a></li>
                                        <li><a href="{{ url('okx-clone') }}" class="font_11">OKX Clone</a></li>
                                        <li><a href="{{ url('huobi-clone') }}" class="font_11">Huobi Clone</a></li>
                                        <li><a href="{{ url('kraken-clone') }}" class="font_11">Kraken Clone</a></li>
                                        <li><a href="{{ url('dydx-clone') }}" class="font_11">dYdX Clone</a></li>
                                        <li><a href="{{ url('wazirx-clone') }}" class="font_11">WazirX Clone</a></li>
                                        <li><a href="{{ url('cash-app-clone') }}" class="font_11">Cash App Clone</a></li>
                                        <li><a href="{{ url('uniswap-clone') }}" class="font_11">Uniswap Clone</a></li>
                                        <li><a href="{{ url('remitano-clone') }}" class="font_11">Remitano Clone</a></li>
                                        <li><a href="{{ url('crypto-exchange-like-wazirx') }}" class="font_11">Crypto Exchange Like Wazirx</a></li>
                                        <li><a href="{{ url('crypto-exchange-like-binance') }}" class="font_11">Crypto Exchange Like Binance</a></li>
                                        <li><a href="{{ url('crypto-exchange-like-coinbase') }}" class="font_11">Crypto Exchange Like Coinbase</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>Wallet</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('cryptocurrency-wallet-development') }}" class="font_11">Crypto Wallet Development</a></li>
                                        <li><a href="{{ url('crypto-payments-gateway') }}" class="font_11">Crypto-Payment Development</a></li>
                                        <li><a href="{{ url('metamask-like-wallet-development') }}" class="font_11">Metamask Like Wallet Development</a></li>
                                        <li><a href="{{ url('bitcoin-ordinals-wallet-development') }}" class="font_11">Bitcoin Ordinals Wallet Development</a></li>
                                    </ul>

                                    {{-- Launchpad section --}}
                                    <h6>Trading Bot</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('crypto-trading-bot-development') }}" class="font_11">Crypto Trading Bot Development</a></li>
                                        <li><a href="{{ url('crypto-arbitrage-bot-development') }}" class="font_11">Crypto Arbitrage Bot Development</a></li>
                                        <li><a href="{{ url('flash-loan-arbitrage-bot-development') }}" class="font_11">Flash loan arbitrage Bot Development</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <!-- Start of NFT Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="nftDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        NFT
                    </a>
                    <div class="dropdown-menu mega-menu dropdown_box_width r_width_90 translate_minus_11" aria-labelledby="nftDropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-around dropdown_box_width">
                                <div class="col-md-3">
                                    <h6>Marketplace Development</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('nft-marketplace-development') }}" class="font_11">NFT Marketplace Development</a></li>
                                        <li><a href="{{ url('white-label-nft-marketplace') }}" class="font_11">White label Crypto Exchanges</a></li>
                                        <li><a href="{{ url('bitcoin-ordinals-marketplace-development') }}" class="font_11">Bitcoin Ordinals Marketplaces</a></li>
                                        <li><a href="{{ url('zksync2-integration-in-nft-platform') }}" class="font_11">Zksync 2.0 Integration service</a></li>
                                        <li><a href="{{ url('ai-powered-nft-marketplace-development') }}" class="font_11">AI-Powered NFT MarketPlace Development</a></li>
                                        <li><a href="{{ url('nft-music-marketplace-development') }}" class="font_11">NFT MarketPlace For Music</a></li>
                                        <li><a href="{{ url('nft-art-marketplace-development') }}" class="font_11">NFT MarketPlace For Art</a></li>
                                        <li><a href="{{ url('nft-for-sports') }}" class="font_11">NFT MarketPlace For sports</a></li>
                                        <li><a href="{{ url('nft-for-realestate') }}" class="font_11">NFT For real Estate</a></li>
                                        <li><a href="{{ url('nft-ticketing-marketplace') }}" class="font_11">NFT Ticketing Marketplace</a></li>
                                        <li><a href="{{ url('nft-aggregator-marketplace-development') }}" class="font_11">NFT Aggregator Marketplace</a></li>
                                        <li><a href="{{ url('carbon-credits-platform') }}" class="font_11">Carbon Credits Development</a></li>
                                        <li><a href="{{ url('phygital-nft-marketplace') }}" class="font_11">Phygital NFT Marketplace</a></li>
                                        <li><a href="{{ url('fractional-nft-marketplace-development') }}" class="font_11">Fractional NFT Marketplace</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>NFT Services</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="{{ url('nft-development-services') }}" class="font_11">NFT Development Services</a></li>
                                        <li><a href="{{ url('nft-launchpad-development') }}" class="font_11">NFT Launchpad Development</a></li>
                                        <li><a href="{{ url('nft-exchange-development') }}" class="font_11">NFT Exchange Development</a></li>
                                        <li><a href="{{ url('nft-wallet-development') }}" class="font_11">NFT Wallet Development</a></li>
                                        <li><a href="{{ url('nft-minting-platform-development') }}" class="font_11">NFT Minting Platform</a></li>
                                        <li><a href="{{ url('nft-layer-2-development') }}" class="font_11">NFT Layer 2  Development</a></li>
                                        <li><a href="{{ url('nft-carbon-credits-development') }}" class="font_11">Carbon Credits Development</a></li>
                                        <li><a href="{{ url('nft-carbon-credits-development') }}" class="font_11">NFT Ecosystem</a></li>
                                        <li><a href="#" class="font_11">SFT Development</a></li>
                                        <li><a href="#" class="font_11">Social Token Development</a></li>
                                        <li><a href="#" class="font_11">NFT Staking Platform</a></li>
                                        <li><a href="#" class="font_11">NFT Streaming Platform</a></li>
                                        <li><a href="#" class="font_11">NFT Consulting Development</a></li>
                                        <li><a href="#" class="font_11">NFT Studio</a></li>
                                        <li><a href="#" class="font_11">NFT Art Design Services</a></li>
                                        <li><a href="#" class="font_11">AR And VR For NFT Development</a></li>

                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>Custom Solutions</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">NFT Loyalty Program</a></li>
                                        <li><a href="#" class="font_11">Token Gating Platform</a></li>
                                    </ul>

                                    {{-- Report --}}
                                    <h6>Report</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">NFT Adoption Report</a></li>
                                        <li><a href="#" class="font_11">NFT Development Trends 2024</a></li>
                                    </ul>

                                    {{-- Marketplace Clone --}}
                                    <h6>Marketplace Clone</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">OpenSea Clone</a></li>
                                        <li><a href="#" class="font_11">Blue Clone</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Start of Marketing Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="marketingDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Marketing
                    </a>
                    <div class="dropdown-menu mega-menu dropdown_box_width r_width_90 translate_minus_15" aria-labelledby="marketingDropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-around dropdown_box_width">
                                <div class="col-md-3">
                                    <h6>Crypto</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Crypto Marketing</a></li>
                                        <li><a href="#" class="font_11">Token Marketing</a></li>
                                        <li><a href="#" class="font_11">Crypto Advertising</a></li>
                                        <li><a href="#" class="font_11">Crypto PR</a></li>
                                        <li><a href="#" class="font_11">Crypto Influencer Marketing</a></li>
                                        <li><a href="#" class="font_11">Crypto Community Marketing</a></li>
                                        <li><a href="#" class="font_11">Discord Marketing</a></li>
                                        <li><a href="#" class="font_11">Discord Game Marketing</a></li>
                                        <li><a href="#" class="font_11">DeFi Marketing</a></li>
                                        <li><a href="#" class="font_11">Cryptocurrency Exchange Marketing</a></li>
                                        <li><a href="#" class="font_11">Web 3.0 Marketing</a></li>
                                        <li><a href="#" class="font_11">Influencer Marketing</a></li>
                                        <li><a href="#" class="font_11">Bounty Campaign Marketing</a></li>
                                        <li><a href="#" class="font_11">DApp Marketing Agency</a></li>
                                        <li><a href="#" class="font_11">KOL Marketing Agency</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>NFT</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">NFT Marketing</a></li>
                                        <li><a href="#" class="font_11">NFT Influencer Marketing</a></li>
                                        <li><a href="#" class="font_11">NFT Game Marketing</a></li>
                                        <li><a href="#" class="font_11">NFT PR/Media Marketing</a></li>
                                        <li><a href="#" class="font_11">NFT Telegram Marketing</a></li>
                                        <li><a href="#" class="font_11">NFT Discord Influencer Marketing</a></li>
                                        <li><a href="#" class="font_11">NFT Community Management</a></li>
                                        <li><a href="#" class="font_11">NFT Marketplace Marketing</a></li>
                                        <li><a href="#" class="font_11">Airdrop Marketing</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>ICO/IDO</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">ICO Marketing</a></li>
                                        <li><a href="#" class="font_11">ICO Community Marketing</a></li>
                                        <li><a href="#" class="font_11">ICO Telegram Marketing</a></li>
                                        <li><a href="#" class="font_11">ICO Influencer Marketing</a></li>
                                        <li><a href="#" class="font_11">IOC Youtube Influencer</a></li>
                                        <li><a href="#" class="font_11">STO Marketing</a></li>
                                        <li><a href="#" class="font_11">IDO Marketing</a></li>
                                        <li><a href="#" class="font_11">White Paper Development</a></li>
                                    </ul>

                                    {{-- Guids --}}
                                    <h6>Report</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">NFT Marketing Strategies Guide</a></li>
                                        <li><a href="#" class="font_11">NFT Viral Marketing</a></li>
                                        <li><a href="#" class="font_11">Crypto Twitter Marketing</a></li>
                                        <li><a href="#" class="font_11">NFT Viral Marketing</a></li>
                                        <li><a href="#" class="font_11">NFT Advertising</a></li>
                                        <li><a href="#" class="font_11">Crypto Earned Media</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Start of Node Sale Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="nodeSaleDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Node Sale
                    </a>
                    <div class="dropdown-menu mega-menu r_width_90 box_width_300" aria-labelledby="nodeSaleDropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-start dropdown_box_width">
                                <div class="col-md-12">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="font_11">Node Sale Services</a></li>
                                        <li><a href="#" class="font_11">Node Sale Launchpad Development</a></li>
                                        <li><a href="#" class="font_11">Node Sale Marketing</a></li>
                                        <li><a href="#" class="font_11">Blockchain Node Deployment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <!-- Start of ICO/IDO Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ICO_IDODropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ICO/IDO
                    </a>
                    <div class="dropdown-menu mega-menu dropdown_box_width r_width_90 translate_minus_44" aria-labelledby="ICO_IDODropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-around dropdown_box_width">
                                <div class="col-md-3">
                                    <h6>ICO</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">ICO Development</a></li>
                                        <li><a href="#" class="font_11">ICO Marketing Guide</a></li>
                                        <li><a href="#" class="font_11">ICO Community Marketing</a></li>
                                        <li><a href="#" class="font_11">ICO Telegram Marketing</a></li>
                                        <li><a href="#" class="font_11">ICO Influencer Marketing</a></li>
                                        <li><a href="#" class="font_11">IEO Development</a></li>
                                        <li><a href="#" class="font_11">ETO Development</a></li>
                                        <li><a href="#" class="font_11">Crowdfunding Platform</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>STO</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">STO Development</a></li>
                                        <li><a href="#" class="font_11">STO Marketing</a></li>
                                        <li><a href="#" class="font_11">STO Smart Contract</a></li>
                                    </ul>

                                    {{-- IMO --}}
                                    <h6>IMO</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Initial Model Offering</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>IDO/Launchpad</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">IDO Development</a></li>
                                        <li><a href="#" class="font_11">IDO Marketing</a></li>
                                        <li><a href="#" class="font_11">White Label IDO Launchpad</a></li>
                                        <li><a href="#" class="font_11">IDO Token Launchpad</a></li>
                                        <li><a href="#" class="font_11">IDO Launchpad on Layer 2</a></li>
                                        <li><a href="#" class="font_11">IDO Launchpad on BSC</a></li>
                                        <li><a href="#" class="font_11">IDO Launchpad on Ethereum</a></li>
                                        <li><a href="#" class="font_11">IDO Launchpad on Muultichain</a></li>
                                        <li><a href="#" class="font_11">IDO Launchpad on Polygon</a></li>
                                        <li><a href="#" class="font_11">IDO Launchpad Development</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <!-- Start of Web3 Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="web3Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Web3
                    </a>
                    <div class="dropdown-menu mega-menu dropdown_box_width r_width_90 translate_minus_56" aria-labelledby="web3Dropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-around dropdown_box_width">
                                <div class="col-md-3">
                                    <h6>Web 3.0</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Web 3.0 Development</a></li>
                                        <li><a href="#" class="font_11">Web3 DApp Development</a></li>
                                        <li><a href="#" class="font_11">Web3 Wallet Development</a></li>
                                        <li><a href="#" class="font_11">Web 3.0 Game Development</a></li>
                                        <li><a href="#" class="font_11">Web3 Gaming Studio</a></li>
                                        <li><a href="#" class="font_11">Web 3.0 Marketing Services</a></li>
                                        <li><a href="#" class="font_11">Web3 Quest Creation Platform Development</a></li>
                                        <li><a href="#" class="font_11">Web3 DAO Platform Development</a></li>
                                        <li><a href="#" class="font_11">Web3 Services</a></li>
                                        <li><a href="#" class="font_11">Web3 Consulting Services</a></li>
                                    </ul>

                                    {{-- Socialfi --}}
                                    <h6>Socialfi</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">SocialFi Platform Development</a></li>
                                        <li><a href="#" class="font_11">Tipcoin Clone</a></li>
                                    </ul>

                                    {{-- Custom Solutions --}}
                                    <h6>Custom Solutions</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Web3 Loyalty Platform</a></li>
                                        <li><a href="#" class="font_11">Web3 Fan Engagement Platform</a></li>
                                    </ul>

                                    {{-- DePIN --}}
                                    <h6>DePIN</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">DePIN Solutions</a></li>
                                        <li><a href="#" class="font_11">DePIN Marketplace Development</a></li>
                                    </ul>

                                </div>
                                <div class="col-md-3">
                                    <h6>STO</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">STO Development</a></li>
                                        <li><a href="#" class="font_11">STO Marketing</a></li>
                                        <li><a href="#" class="font_11">STO Smart Contract</a></li>
                                    </ul>

                                    {{-- IMO --}}
                                    <h6>IMO</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Initial Model Offering</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>Metaversa</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Metaverse Development Services</a></li>
                                        <li><a href="#" class="font_11">Metaverse NFT Marketplace Development</a></li>
                                        <li><a href="#" class="font_11">Metaverse Game Development</a></li>
                                        <li><a href="#" class="font_11">Metaverse Healthcare Solutions</a></li>
                                        <li><a href="#" class="font_11">NFT Metaverse Game Development</a></li>
                                        <li><a href="#" class="font_11">Metaverse Avatar gallery</a></li>
                                        <li><a href="#" class="font_11">Metaverse 3D space Development</a></li>
                                        <li><a href="#" class="font_11">Metaverse Event platform</a></li>
                                        <li><a href="#" class="font_11">Metaverse Platform For Social Interaction</a></li>
                                        <li><a href="#" class="font_11">Metaverse Virtual Working Spaces</a></li>
                                        <li><a href="#" class="font_11">Metaverse App Development</a></li>
                                        <li><a href="#" class="font_11">Metaverse Casino Game Development</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6>Web 3.0 Gaming</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">NFT Gaming Platform</a></li>
                                        <li><a href="#" class="font_11">Play2Earn To Web3 Working</a></li>
                                        <li><a href="#" class="font_11">Web2 Web3 Game</a></li>
                                        <li><a href="#" class="font_11">NFT Lottery Game Development</a></li>
                                        <li><a href="#" class="font_11">NFT Game Marketplace</a></li>
                                        <li><a href="#" class="font_11">NFT Racing Game<a></li>
                                        <li><a href="#" class="font_11">NFT Casino Game</a></li>
                                        <li><a href="#" class="font_11">NFT RPG Game Development</a></li>
                                        <li><a href="#" class="font_11">Move To Earn NFT Platform</a></li>
                                        <li><a href="#" class="font_11">Splinterlands Like NFT Game</a></li>
                                        <li><a href="#" class="font_11">My Crypto Heros Like NFT Game</a></li>
                                        <li><a href="#" class="font_11">Zed Run Like NFT Game</a></li>
                                        <li><a href="#" class="font_11">Decentraland Like NFT Game<a></li>
                                        <li><a href="#" class="font_11">Revv Racing Like NFT Game</a></li>
                                        <li><a href="#" class="font_11">Bitcoin Ordinals Game Development</a></li>
                                        <li><a href="#" class="font_11">Crypto Casino Game Development</a></li>
                                    </ul>

                                    {{-- Decentralized Solutions --}}
                                    <h6>Decentralized Solutions</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">DeSci Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <!-- Start of AI Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="AIDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AI
                    </a>
                    <div class="dropdown-menu mega-menu dropdown_box_width r_width_90 translate_minus_68" aria-labelledby="AIDropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-around dropdown_box_width">
                                <div class="col-md-3">
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">AI Development</a></li>
                                        <li><a href="#" class="font_11">Blockchain AI Development</a></li>
                                        <li><a href="#" class="font_11">Generative AI Solutions</a></li>
                                        <li><a href="#" class="font_11">Generative AI Chatbot Development</a></li>
                                        <li><a href="#" class="font_11">Large Language Model Development</a></li>
                                        <li><a href="#" class="font_11">ChatGPT Application Development</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">AI Video Analytics Software</a></li>
                                        <li><a href="#" class="font_11">AI Powered Prediction Market Development</a></li>
                                        <li><a href="#" class="font_11">AI Product Marketing</a></li>
                                        <li><a href="#" class="font_11">AI Prompt Engineering</a></li>
                                        <li><a href="#" class="font_11">Decentralized AI Computing Marketplace</a></li>
                                        <li><a href="#" class="font_11">AI Agent Development Company</a></li>
                                        <li><a href="#" class="font_11">Custom Domain-Specific LLM Development</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>Guide</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Synthetic Data</a></li>
                                        <li><a href="#" class="font_11">Generative AI Application Development</a></li>
                                    </ul>

                                    <h6>AI Products</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">BafiGPT - AI Chatbot Solution</a></li>
                                        <li><a href="#" class="font_11">AI Copilot Solution</a></li>
                                        <li><a href="#" class="font_11">Enterprice AI Search Solution</a></li>
                                        <li><a href="#" class="font_11">Agent Assist Solution</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <!-- Start of Blockchain Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="blockChainDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blockchain
                    </a>
                    <div class="dropdown-menu mega-menu dropdown_box_width r_width_90 translate_minus_74" aria-labelledby="blockChainDropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-around dropdown_box_width">
                                <div class="col-md-3">
                                    <h6>Blockchain</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Blockchain Development</a></li>
                                        <li><a href="#" class="font_11">White Label Blockchain Solutions</a></li>
                                        <li><a href="#" class="font_11">Custom Blockchain On Avalanche</a></li>
                                        <li><a href="#" class="font_11">Custom Blockchain On Polygon</a></li>
                                        <li><a href="#" class="font_11">Blockchain Game Development</a></li>
                                        <li><a href="#" class="font_11">Blockchain / Web3.0 Consulting</a></li>
                                        <li><a href="#" class="font_11">Proof Of Reserve</a></li>
                                        <li><a href="#" class="font_11">Defi Platform Like Synthetix</a></li>
                                        <li><a href="#" class="font_11">Smart Contract Development</a></li>
                                        <li><a href="#" class="font_11">DApps Development</a></li>
                                        <li><a href="#" class="font_11">P2P Lending Software</a></li>
                                        <li><a href="#" class="font_11">Layer-1 Blockchain Development</a></li>
                                        <li><a href="#" class="font_11">Appchain Development</a></li>
                                        <li><a href="#" class="font_11">KYC Blockchain Solution</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Blockchain For Pharma Industry</a></li>
                                        <li><a href="#" class="font_11">Protocol Implementation</a></li>
                                        <li><a href="#" class="font_11">Cross Chain Bridge Development</a></li>
                                        <li><a href="#" class="font_11">EVM Compatible Blockchain And Service</a></li>
                                        <li><a href="#" class="font_11">Data Availability Layer</a></li>
                                        <li><a href="#" class="font_11">Blockchain For ELearning</a></li>
                                        <li><a href="#" class="font_11">Blockchain Identity Management</a></li>
                                    </ul>

                                    {{-- Guides --}}
                                    <h6>Guides</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">ZK Coprocessor Solutions</a></li>
                                    </ul>

                                    {{-- Custom Solutions --}}
                                    <h6>Custom Solutions</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Polygon ZKEVM Development</a></li>
                                        <li><a href="#" class="font_11">Whitelabel Testnet Solutions</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6>Layer 2</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">Ethereum Layer 2 Scaling Solutions</a></li>
                                        <li><a href="#" class="font_11">Cross-L2 DEX Solution</a></li>
                                        <li><a href="#" class="font_11">Layer 2 Token Development</a></li>
                                        <li><a href="#" class="font_11">Layer 2 Token Marketing</a></li>
                                        <li><a href="#" class="font_11">Layer 2 Cryptocurrency Development</a></li>
                                        <li><a href="#" class="font_11">Layer 2 Solutions For Blockchain Games</a></li>
                                        <li><a href="#" class="font_11">Layer 2 Solutions For Web3 Gaming</a></li>
                                        <li><a href="#" class="font_11">Layer 2 Blockchain Solutions</a></li>
                                        <li><a href="#" class="font_11">ZK Rollup Development</a></li>
                                        <li><a href="#" class="font_11">Rollups As A Service</a></li>
                                        <li><a href="#" class="font_11">Optimistic Rollups Development</a></li>
                                        <li><a href="#" class="font_11">ZK Tech Development</a></li>
                                        <li><a href="#" class="font_11">Bitcoin Layer 2 Solutions</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6>Web 3.0 Gaming</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">NFT Gaming Platform</a></li>
                                        <li><a href="#" class="font_11">Play2Earn To Web3 Working</a></li>
                                        <li><a href="#" class="font_11">Web2 Web3 Game</a></li>
                                        <li><a href="#" class="font_11">NFT Lottery Game Development</a></li>
                                        <li><a href="#" class="font_11">NFT Game Marketplace</a></li>
                                        <li><a href="#" class="font_11">NFT Racing Game<a></li>
                                        <li><a href="#" class="font_11">NFT Casino Game</a></li>
                                        <li><a href="#" class="font_11">NFT RPG Game Development</a></li>
                                        <li><a href="#" class="font_11">Move To Earn NFT Platform</a></li>
                                        <li><a href="#" class="font_11">Splinterlands Like NFT Game</a></li>
                                        <li><a href="#" class="font_11">My Crypto Heros Like NFT Game</a></li>
                                        <li><a href="#" class="font_11">Zed Run Like NFT Game</a></li>
                                        <li><a href="#" class="font_11">Decentraland Like NFT Game<a></li>
                                        <li><a href="#" class="font_11">Revv Racing Like NFT Game</a></li>
                                        <li><a href="#" class="font_11">Bitcoin Ordinals Game Development</a></li>
                                        <li><a href="#" class="font_11">Crypto Casino Game Development</a></li>
                                    </ul>

                                    {{-- Decentralized Solutions --}}
                                    <h6>Decentralized Solutions</h6>
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">DeSci Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <!-- Start of DeFi Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="defiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DeFi
                    </a>
                    <div class="dropdown-menu mega-menu dropdown_box_width r_width_90 translate_minus_92" aria-labelledby="defiDropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-around dropdown_box_width">
                                <div class="col-md-3">
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">DeFi Development</a></li>
                                        <li><a href="#" class="font_11">DeFi Platform Like Pancakeswap</a></li>
                                        <li><a href="#" class="font_11">DAO Services</a></li>
                                        <li><a href="#" class="font_11">Whitelabel Swap Exchange Development</a></li>
                                        <li><a href="#" class="font_11">Pinksale Like Launchpad Development</a></li>
                                        <li><a href="#" class="font_11">DeFi Staking Platform Development</a></li>
                                        <li><a href="#" class="font_11">DeFi Yield Farming Development</a></li>
                                        <li><a href="#" class="font_11">DeFi Aggregator Development</a></li>
                                        <li><a href="#" class="font_11">Bitcoin DeFi Development</a></li>
                                        <li><a href="#" class="font_11">Uniswap-Like DEX On Bitcoin Ordinals</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">DeFi Smart Contract Development</a></li>
                                        <li><a href="#" class="font_11">DeFi Marketing Services</a></li>
                                        <li><a href="#" class="font_11">DeFi Application Development Services</a></li>
                                        <li><a href="#" class="font_11">DeFi Token Development Services</a></li>
                                        <li><a href="#" class="font_11">DeFi Wallet Development Solution</a></li>
                                        <li><a href="#" class="font_11">DeFi Synthetic Assets Development</a></li>
                                        <li><a href="#" class="font_11">Solana DeFi Development</a></li>
                                        <li><a href="#" class="font_11">How To Create A DeFi App</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="list-unstyled custom-list">
                                        <li><a href="#" class="font_11">DeFi Crowdfunding Platform</a></li>
                                        <li><a href="#" class="font_11">DeFi Real Estate Platform</a></li>
                                        <li><a href="#" class="font_11">DeFi Exchange Development Solution</a></li>
                                        <li><a href="#" class="font_11">DeFi Platform Like Uniswap</a></li>
                                        <li><a href="#" class="font_11">DeFi Protocol Development Like Yearn Finance</a></li>
                                        <li><a href="#" class="font_11">DeFi Lending And Borrowing Protocol Like Aave</a></li>
                                        <li><a href="#" class="font_11">Restaking Platform Development</a></li>
                                        <li><a href="#" class="font_11">Liquid Staking Platform Development</a></li>
                                        <li><a href="#" class="font_11">AI-Powered DeFi Aggregator Development</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Start of Contact Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact
                    </a>
                    <div class="dropdown-menu mega-menu r_width_90 box_width_300 translate_minus_70" aria-labelledby="contactDropdown">
                        <div class="container">
                            <div class="row d-flex justify-content-start dropdown_box_width">
                                <div class="col-md-12">
                                    <ul class="list-unstyled">
                                        <li><a href="{{ url('consultation') }}" class="font_11">Contact Us</a></li>
                                        <li><a href="#" class="font_11">Our Services</a></li>
                                        <li><a href="#" class="font_11">About Us</a></li>
                                        <li><a href="#" class="font_11">Newsroom</a></li>
                                        <li><a href="#" class="font_11">Reviews</a></li>
                                        <li><a href="#" class="font_11">Become Our Partner</a></li>
                                        <li><a href="#" class="font_11">Blog</a></li>
                                        <li><a href="#" class="font_11">Case Study</a></li>
                                        <li><a href="#" class="font_11">Sitemap</a></li>
                                        <li><a href="#" class="font_11">Privacy Policy</a></li>
                                        <li><a href="#" class="font_11">Terms And Condition</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- ********************************************************************** --}}
            </ul>
            <div class="form-inline">

                @if(auth()->user())
                    @if(auth()->user()->is_admin == 1)
                        <a href="{{ url('/client/dashboard') }}" class="btn my-2 my-sm-0 mr-2 custom_btn_border">Dashboard</a>
                    @elseif(auth()->user()->is_admin==0)
                        <a href="{{ url('/freelancer/dashboard') }}" class="btn my-2 my-sm-0 mr-2 custom_btn_border">Dashboard</a>
                    @else
                        <a href="{{route('admin.dashboard')}}" class="btn my-2 my-sm-0 mr-2 custom_btn_border">Dashboard</a>
                @endif
                    <a class="nav-link btn my-2 my-sm-0 custom_btn_BG" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{url('images/signup.svg')}}" class="mr-2">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                @else
                    <a href="{{ url('register') }}" class="btn my-2 my-sm-0 mr-2 custom_btn_border">Sign Up</a>
                    <a href="{{ url('login') }}" class="btn my-2 my-sm-0 custom_btn_BG">
                    <img src="{{url('images/signup.svg')}}" class="mr-2">Log In</a>
                @endif
                
            </div>
        </div>
    </nav>
</header>

<main id="parent_div">
    @yield('content')
</main>
<footer class="footer py-5">
    <div class="container custom-width">
        <div class="row">
            <div class="col-md-4">
                <div class="logo"> 
                    <a href="@if(auth()->check())
                                @if(auth()->user()->is_admin == 1)
                                    {{ url('/client/dashboard') }}
                                @elseif(auth()->user()->is_admin == 0)
                                    {{ url('/freelancer/dashboard') }}
                                @endif
                            @else
                                {{ url('/') }}
                            @endif">
                    <img src="{{url('images/logo.png')}}" width="230" alt="SmartDev3"></a>
                    {{-- <a href="{{url('/')}}"><img src="{{url('images/new-logo.svg')}}" alt="SmartDev3"></a> --}}
                </div>
                <div>
                    <span 
                        class="font-26 text-white font-weight-700" 
                        style="
                            position: relative;
                            display: inline-block;
                            background: url({{url('images/web3.svg')}}) no-repeat bottom;
                            background-size: contain;
                            padding-bottom: 15px;
                        "
                    > 
                        Web3 
                    </span>
                </div>
                {{-- <div>
                    <p>Social links</p>
                    <div class="social-links mt-3">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div> --}}
                
            </div>
            <div class="col-md-4">
                {{-- <h5 class="font-18 font-weight-600 text-white mb-4">For customers</h5> --}}
                <ul class="footer-links">
                    {{-- <li><a href="{{url('faqs')}}" class="font-16 text-decoration-none">FAQs</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Results</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Remote Profile</a></li> --}}
                </ul>
            </div>
            <div class="col-md-4">
                {{-- <h5 class="font-18 font-weight-600 text-white mb-4">For customers</h5> --}}
                <ul class="footer-links">
                    {{-- <li><a href="#" class="font-16 text-decoration-none">UC Review</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Categories Near You</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Blog</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Contact Us</a></li> --}}
                    <li><a href="https://t.me/smartdev3ai" target="_blank" class="font-16 text-decoration-none">Join Community</a></li>
                    <li><a href="{{ url('consultation') }}" class="font-16 text-decoration-none">Contact Us</a></li>
                </ul>
            </div>
        </div>            
    </div>        
</footer>
<footer class="coppy-right text-center p-3 bg-white">
    <div class="container">
        <div class="row bg-white">
        <div class="col-12">
            <div class="copyright font-16 text-black">
                &copy; Copyright <span id="current-year"></span> SmartDev3. All rights reserved.
            </div>
        </div>
    </div>
    </div>
</footer>
@yield('modal')
<div class="body_overlay" id="overlay"></div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
