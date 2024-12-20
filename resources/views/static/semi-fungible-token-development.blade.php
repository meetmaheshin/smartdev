@extends('layouts.static')
    @section('title', 'Semi Fungible Token Development')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
@section('content')

<style type="text/css">
    .top-header p {
        margin-bottom: 0;
        color: #fff;
        display: inline-block;
        width: auto
    }

    .lc-1ip30wz {
        height: 30px !important
    }

    .top-header {
        background: #378658;
        padding: 10px
    }

    @-webkit-keyframes breathing {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        25% {
            -webkit-transform: scale(1.1);
            transform: scale(1.1)
        }

        50% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

    @keyframes breathing {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        25% {
            -webkit-transform: scale(1.1);
            transform: scale(1.1)
        }

        50% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

    .top-header .breathing_effect {
        -webkit-animation: breathing 1s infinite ease-in-out;
        animation: breathing 1s infinite ease-in-out;
        -webkit-font-smoothing: antialiased;
        transition: 1s;
        display: inline-block;
        width: auto
    }

    .top-header .breathing_effect a {
        background: #f44336;
        color: #fff;
        padding: 5px 10px;
        border-radius: 0;
        margin-left: 15px
    }

    .top-header .breathing_effect a:hover {
        color: #fff !important
    }

    @media (max-width:1199px) {
        .header .main-menu>li a {
            padding: 0 5px
        }
    }

    @media (max-width:550px) {
        .top-header p {
            width: 60%;
            text-align: right;
            vertical-align: middle
        }

        .top-header .breathing_effect {
            display: inline-block;
            width: 40%
        }
    }

    .guardian-p {
        text-align: center;
        font-size: 12px;
    }

    /*-- Client section --*/
    .teck .category-grid-style-01 .category-item {
        padding: 10px !important;
    }

    .category-item.aos-item .text-center {
        font-size: 12px !important;
        margin-bottom: 0px !important;
    }

    .teck .category-grid-style-01 .category-item .category-icon {
        margin-bottom: 0 !important;
    }

    .teck .category-icon img {
        height: 80px !important;
    }

    /*-- Client section --*/
</style>

<style type="text/css">
    body {
        color: #000000;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        letter-spacing: 0;
        line-height: 1.3
    }

    .banner_content {
        text-align: left;
    }

    .contentall a:hover {
        background: #00acdc
    }

    .banner {
        background: url('{{ asset('images/semi-fungible-token-development/banner.webp') }}');
        background-size: cover;
        padding-top: 110px;
        padding-bottom: 100px;
        background-repeat: no-repeat;
        height: auto;
        background-position: center
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(to right, #00000000, #00000000);
        opacity: .95
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgb(0 0 0 / 0%);
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none
    }

    .banner_content .contentall {
        margin-top: 85px;
    }

    .ban_tirt,
    .contentall h1 {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 40px;
    }

    .contentall h1 {
        color: #fff
    }

    .contentall p {
        font-weight: 400;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 21px;
        margin: 0 auto 30px;
        display: block
    }

    .contentall a {
        color: #fff;
        cursor: pointer;
        margin-bottom: 15px
    }

    .sec_tit,
    .sec_tit h2,
    .sec_tit h3,
    .sec_tit h4,
    .sec_tit h5,
    .sec_tit h6 {
        font-size: 25px !important;
        font-weight: 700;
        color: #000000;
        line-height: 1.4;
    }

    @media (max-width:1199px) {

        .ban_tirt,
        .contentall h1 {
            font-size: 30px
        }
    }

    @media (max-width:768px) {
        .banner_content .contentall {
            margin-top: 50px;
            text-align: center
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)))
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 80px
        }

        .banner-overlay {
            background: #000000b8
        }

        .banner_content p {
            font-size: 14px !important
        }

        .ban_tirt,
        .contentall h1 {
            font-size: 25px
        }

        .sec_tit,
        .sec_tit h2 {
            font-size: 20px !important
        }

        .sec_tit {
            font-size: 25px !important
        }
    }

    a.home-talk-experts.w_bt {
        background: no-repeat;
        color: #47b475;
        border: 2px solid #47b475;
        padding: 8px 25px
    }

    a.home-talk-experts.w_bt:hover {
        color: #000 !important
    }

    .single_feature_seven {
        text-align: center;
        padding: 40px 24px;
        border: 1px solid #e4ecf9;
        position: relative;
        z-index: 1;
        background: #fff;
        margin-bottom: 30px;
        min-height: 347px;
        border-radius: 10px;
        box-shadow: rgb(76 175 80 / 20%) 0px 4px 12px;
    }

    .single_feature_seven:before {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 45px;
        height: 45px;
        content: "";
        background: #fff;
        transition: .3s;
        z-index: -1;
    }

    .single_feature_six_seven_icon .icon {
        width: auto;
        height: 44px;
        line-height: 44px;
        text-align: center;
        font-size: 44px;
        display: block;
        margin: auto;
    }

    .single_feature_six_seven_icon .icon img {
        width: 70px;
        height: auto;
        transition: .5s;
    }

    .single_feature_seven_content h4 {
        transition: .5s;
        padding-top: 15px;
        color: #000000;
        font-weight: 700;
        padding-top: 40px;
        padding-bottom: 10px;
    }

    .single_feature_seven_content p {
        padding-top: 1px;
        transition: .5s;
    }

    .single_feature_seven:hover {
        color: #fff;
    }

    .single_feature_seven:hover:before {
        width: 100%;
        height: 100%;
        background: #47b475;
        border-radius: 10px;
    }

    .single_feature_seven:hover h4 {
        color: #fff;
    }

    .single_feature_seven:hover img {
        filter: brightness(0) invert(1);
    }

    .tw_feat {
        position: relative;
        text-align: justify;
        margin-bottom: 0;
        z-index: 1;
        min-height: 180px;
        padding-left: 0;
        padding-right: 0;
        padding-top: 0;
    }

    .tw_feat_ico {
        position: absolute;
        background: #eee;
        text-align: center;
        z-index: 1;
        border-radius: 10px 30px 10px 30px;
        width: 75px;
        height: 75px;
        margin: 0 auto;
        left: 0;
        top: -2px;
        line-height: 73px;
        border: 1px solid #47b475;
    }

    .dam {
        width: 68%;
        margin-top: 12px;
    }

    .tw_feat_cnt {
        text-align: justify;
        padding: 20px;
        min-height: 220px;
        margin-top: 30px;
        box-shadow: 0 0 10px #999;
        border-radius: 6px;
        background: #fff;
    }

    .tw_feat_cnt h5 {
        font-size: 18px;
        padding-left: 70px;
        padding-top: 10px;
        padding-bottom: 10px;
        border: 2px solid #f5f5f5;
        background: #f5f5f5;
        color: #000000;
        font-weight: 700;
    }

    .tw_feat_cnt p {
        color: #000;
        line-height: 1.4;
        margin-bottom: 0;
        margin-top: 15px;
    }

    .rounded-border {
        border-radius: 10px;
    }

    .tw_feat:hover .tw_feat_ico img {
        transform: rotateY(360deg);
        transition: 0.7s;
        transition: all 500ms ease;
    }
</style>

<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="contentall">
                                <div class="ban_tirt">
                                    <h1>Elevate Your Blockchain Strategy with Semi-Fungible Token Solutions</h1>
                                </div>
                                <p>Unlock the power of semi-fungible tokens to blend flexibility and efficiency, maximizing blockchain technology for tangible real-world benefits. Experience a revolutionary approach to token development that bridges unique and interchangeable asset classes.</p>
                                <div class="txt">
                                    <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn" id="cyz"
                                        style="border-radius: 30px !important; text-transform: capitalize !important;">Engage with Our Experts</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
            </div>
        </div>
        <section class="common_spacing">
            <div class="container">
                <div class="text-center">
                    <div class="sec_tit underline">
                        <h2>Revolutionize Your Assets with Our Semi-Fungible Token Development Platform</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p class="mt10 mb10 text-center">While NFTs have reshaped digital ownership and dominated the crypto landscape, transferring large volumes of NFTs remains cumbersome and inefficient. Enter the realm of semi-fungible tokens—an innovative solution that merges the benefits of fungibility and uniqueness into a single token type. Our semi-fungible token development platform streamlines the creation of versatile tokens, significantly reducing transaction costs through the use of a unified smart contract. Leveraging our expertise and adaptability with emerging technologies, we ensure that your semi-fungible token development is seamless and cutting-edge.</p><br>
                </div>


                <div class="contentall" align="center">
                    <!-- <a href="free-nft-consulting" rel="nofollow" class="nec-btn" style="border-radius: 30px !important; text-transform:none !important;">Book A Free Consultation!</a>   -->
                    {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                        target="_blank" href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"
                        style="text-transform: capitalize!important;border-radius: 30px !important;"><span>Schedule a Consultation</span></a> --}}
                    <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
                        style="border-radius: 30px !important; text-transform:none !important;">Connect with Our Experts
                    </a>
                </div>
            </div>
        </section>
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec_tit underline text-left">
                            <h2>Understanding Semi-Fungible Tokens (SFTs)</h2>
                        </div>
                        <p class="mt10 mb10 text-justify">A Semi-Fungible Token (SFT) bridges the gap between fungibility and uniqueness in the digital realm. Initially, SFTs operate like fungible tokens, where each one is interchangeable with another of equal value. However, as time progresses or conditions change, these tokens evolve into non-fungible assets, retaining unique attributes. This dual functionality addresses the limitations of traditional blockchain applications. For instance, consider a concert ticket: before the event, it can be swapped with another ticket of the same type. Post-event, however, the ticket transforms into a collectible, becoming non-exchangeable. The dynamic nature of SFTs, transitioning from fungible to non-fungible, is pivotal in their versatile application.</p>
                    </div>
                    <div class="col-lg-6"> 
                        <img class="img-responsive rounded-border" src="{{ asset('images/semi-fungible-token-development/semi_01.png') }}" alt="SFT Development" title="Semi Fungible Token Development" width="440px"> 
                    </div>
                </div>
            </div>
        </section>

        @include('static.bottom-right-hover-effect-section', [
            'title' => "Applications of Semi-Fungible Tokens", 
            'desc' => "",
            'cards' => [
                [
                    'title' => 'In-Game Assets',
                    'desc' => "In the realm of blockchain gaming, semi-fungible tokens can be utilized as both currency and valuable assets, such as weapons or tools, seamlessly integrating into the game’s economy.",
                    'image' => 'semi-fungible-token-development/icons/01.webp'
                ],
                [
                    'title' => 'Event Tickets',
                    'desc' => "As ticketing moves into the digital sphere, semi-fungible tokens serve dual purposes: they function as interchangeable tickets before an event and transform into unique collectibles after the event concludes.",
                    'image' => 'semi-fungible-token-development/icons/02.webp'
                ],
                [
                    'title' => 'Voucher Coupons',
                    'desc' => "Semi-fungible tokens can also be employed as vouchers, where they are exchangeable for offers or gifts before redemption, and become distinct, collectible items once the offer has been claimed.",
                    'image' => 'semi-fungible-token-development/icons/03.webp'
                ],
            ],
            'cta_name' => 'Connect With Our Experts',
            'cta_link' => 'consultation'
        ])

        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <h3 class="sec_tit underline text-center" style="width: 100%">Semi-Fungible Tokens: The Benefits Explained</h3>
                </div>
                <div class="row first_fet">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tw_feat">
                            <div class="tw_feat_ico tw_feat_ico_hover"> <img class="dam lazy"
                                    src="{{ asset('images/semi-fungible-token-development/icons/04.webp') }}"> </div>
                            <div class="tw_feat_cnt">
                                <h5>Ongoing Fungibility After Trade</h5>
                                <p>Even after being exchanged, semi-fungible tokens retain their fungibility, allowing seamless trading across various platforms and ensuring liquidity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tw_feat tw_feat_1">
                            <div class="tw_feat_ico"> <img class="dam lazy"
                                    src="{{ asset('images/semi-fungible-token-development/icons/05.png') }}"> </div>
                            <div class="tw_feat_cnt">
                                <h5>Versatile Utility</h5>
                                <p>Semi-fungible tokens offer dual functionality: they can function as fungible assets before redemption and transform into unique, non-fungible tokens post-redemption, verifying attributes of individuals or products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tw_feat tw_feat_1">
                            <div class="tw_feat_ico"> <img class="dam lazy"
                                    src="{{ asset('images/semi-fungible-token-development/icons/06.png') }}"> </div>
                            <div class="tw_feat_cnt">
                                <h5>Game-Changer for Gaming</h5>
                                <p>In the gaming world, semi-fungible tokens are invaluable. They can represent in-game currency, items, or weapons, while also maintaining a comprehensive history of their use.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tw_feat tw_feat_3">
                            <div class="tw_feat_ico"> <img class="dam lazy"
                                    src="{{ asset('images/semi-fungible-token-development/icons/07.webp') }}"> </div>
                            <div class="tw_feat_cnt">
                                <h5>Enhanced Tradability</h5>
                                <p>Combining fungibility and non-fungibility, semi-fungible tokens enable the trading of fractionalized assets, opening up new opportunities for asset liquidity and market efficiency.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tw_feat tw_feat_1">
                            <div class="tw_feat_ico"> <img class="dam lazy"
                                    src="{{ asset('images/semi-fungible-token-development/icons/08.png') }}"> </div>
                            <div class="tw_feat_cnt">
                                <h5>Streamlined Development</h5>
                                <p>Leveraging the existing Ethereum network and the EIP-721 standard, the development of semi-fungible tokens is made easier and more efficient for developers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tw_feat tw_feat_1">
                            <div class="tw_feat_ico"> <img class="dam lazy"
                                    src="{{ asset('images/semi-fungible-token-development/icons/09.png') }}"> </div>
                            <div class="tw_feat_cnt">
                                <h5>Greater Flexibility</h5>
                                <p>Their inherent nature allows semi-fungible tokens to offer unparalleled flexibility compared to other types, making them particularly advantageous in the gaming sector for both players and developers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="common_spacing">
            <div class="container">
                <div class="col-lg-6"> <img class="img-responsive lazy rounded-border"
                        src="{{ asset('images/semi-fungible-token-development/semi-02.png') }}"
                        alt="Semi Fungible Token Development" title="SFT Development"> </div>
                <div class="col-lg-6">
                    <div class="sec_tit underline text-left">
                        <h3>Elevate Your Digital Assets with Semi-Fungible Tokens</h3>
                    </div>
                    <p class="mt10 mb10 text-justify">In the realm of cryptocurrency, NFTs have revolutionized ownership, authenticity, and immutability. Yet, their application remains somewhat restricted. Enter semi-fungible tokens—a groundbreaking solution that bridges these gaps. These versatile tokens offer expanded utility and enhanced liquidity for various assets. Leveraging the EIP-721 standard—distinct from ERC-20 and ERC-1155—enables rapid and efficient batch transfers. With blockchain gaming already embracing SFTs, their impact across the crypto landscape is set to unfold soon.</p>
                    <br>
                </div>

                <div class="contentall" align="center" style="">
                    <!-- <a href="free-nft-consulting" rel="nofollow" class="nec-btn" style="border-radius: 30px !important; text-transform:none !important;">Book A Free Consultation!</a>   -->
                    {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                        target="_blank" href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"
                        style="text-transform: capitalize!important;border-radius: 30px !important;"><span>Schedule a Meeting</span></a> --}}
                    <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
                        style="border-radius: 30px !important; text-transform:none !important;">Consult with Our Experts
                    </a>
                </div>
            </div>
        </section>
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="sec_tit underline text-center" style="width: 100%">
                        <h3>Unlock the Future of Semi-Fungible Tokens with Our Expertise</h3>
                    </div>
                </div>
                <div class="row">
                    <p class="mt10 text-center">As trailblazers in blockchain innovation, we have been at the forefront of the crypto revolution since its inception. Our seasoned developers have witnessed and adapted to every evolution in the crypto landscape, integrating cutting-edge technologies into our semi-fungible token solutions. We embrace each challenge as an opportunity to excel, delivering exceptional SFTs that push the boundaries of what’s possible. Connect with our experts today and transform the crypto world with the power of semi-fungible tokens.</p>
                </div>
            </div>
        </section>
    </div>
    <!-- header (top) -->

    <!------------------------ New MegaMenu  ----------------------------->

    <style type="text/css">
        .navbar {
            min-height: 64px;
            border: 0;
        }

        .navbar-brand {
            float: left;
            padding: 12px 15px;
            font-size: 18px;
            line-height: 40px;
            height: 64px;
        }

        .navbar-toggle {
            padding: 9px 10px;
            margin-top: 15px;
            margin-bottom: 15px;

        }

        .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 4px;
        }

        .navbar-nav {
            margin: 6px -15px;
        }

        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 20px;
        }

        @media (min-width: 768px) {
            .navbar-nav>li {
                padding-bottom: 12px;
                padding-top: 12px;
            }

            .navbar-nav>li:before,
            .navbar-nav>li:after {
                content: " ";
                display: block;
                height: 0;
                width: 0;
                opacity: 0;
                -webkit-transition: opacity 0.3s;
                -o-transition: opacity 0.3s;
                transition: opacity 0.3s;
            }

            .navbar-nav>li+li {
                margin-left: 2px;
            }

            .navbar-nav>li>a {
                border-radius: 3px;
                padding-top: 10px;
                padding-bottom: 10px;
                line-height: 20px;
            }

            .navbar-nav>.open:before,
            .navbar-nav>.open:after {
                bottom: -1px;
                left: 50%;
                opacity: 1;
                position: absolute;
                z-index: 1002;
            }

            .navbar-nav>.open:before {
                border: 10px solid;
                border-color: rgba(0, 0, 0, 0.1) transparent;
                border-top-width: 0;
                margin-left: -9px;
            }

            .navbar-nav>.open:after {
                border: 9px solid;
                border-top-width: 0;
                border-color: rgb(11 53 113) transparent;
                margin-left: -8px;
                margin-top: 2px;
            }

            .navbar-fixed-bottom .navbar-nav>.open:before,
            .navbar-fixed-bottom .navbar-nav>.open:after {
                bottom: auto;
                top: -1px;

            }

            .navbar-fixed-bottom .navbar-nav>.open:before {
                border-bottom-width: 0;
                border-top-width: 10px;
            }

            .navbar-fixed-bottom .navbar-nav>.open:after {
                border-bottom-width: 0;
                border-top-width: 9px;
                margin-top: -2px;
            }
        }

        @media (min-width: 768px) {
            .navbar-nav {
                float: left;
                margin: 5px 0px;
            }

            .navbar-nav>li {
                float: left;
            }
        }

        .navbar-nav>li>.dropdown-menu {
            margin-top: 0;
        }

        .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .navbar-btn {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .navbar-btn.btn-sm {
            margin-top: 17px;
            margin-bottom: 17px;
        }

        .navbar-btn.btn-xs {
            margin-top: 21px;
            margin-bottom: 21px;
        }

        .navbar-text {
            margin-top: 22px;
            margin-bottom: 22px;
        }

        @media (min-width: 768px) {
            .navbar-text {
                float: left;
                margin-left: 15px;
                margin-right: 15px;
            }
        }

        @media (min-width: 768px) {
            .navbar-left {
                float: left !important;
            }

            .navbar-right {
                float: right !important;
                margin-right: -15px;
            }

            .navbar-right~.navbar-right {
                margin-right: 0;
            }
        }

        .navbar-material-blue {
            background-color: #fff;
            /*border-color: #0392d3;*/
        }

        .navbar-material-blue .navbar-brand {
            color: #ffffff;
        }

        .navbar-material-blue .navbar-brand:hover,
        .navbar-material-blue .navbar-brand:focus {
            color: #ffffff;
            background-color: transparent;
        }

        .navbar-material-blue .navbar-text {
            color: #ffffff;
        }

        .navbar-material-blue .navbar-nav>li>a {
            color: #000;
            border-radius: 5px;
            padding: 5px 10px !important;
        }

        .navbar-material-blue .navbar-nav>li>a:hover,
        .navbar-material-blue .navbar-nav>li>a:focus {
            color: #ffffff !important;
            /*background: rgb(11 53 113 / 60%) !important;*/
        }

        .navbar-material-blue .navbar-nav>.active>a,
        .navbar-material-blue .navbar-nav>.active>a:hover,
        .navbar-material-blue .navbar-nav>.active>a:focus {
            color: #ffffff;
            background: rgb(11 53 113) !important;
        }

        .navbar-material-blue .navbar-nav>.disabled>a,
        .navbar-material-blue .navbar-nav>.disabled>a:hover,
        .navbar-material-blue .navbar-nav>.disabled>a:focus {
            color: #cccccc;
            background-color: transparent;
        }

        .navbar-material-blue .navbar-toggle {
            border-color: transparent;
            background: #212529;
        }

        .navbar-material-blue .navbar-toggle:hover,
        .navbar-material-blue .navbar-toggle:focus {
            background: rgb(11 53 113) !important;
        }

        .navbar-material-blue .navbar-toggle .icon-bar {
            background-color: #fff;
        }

        .navbar-material-blue .navbar-collapse,
        .navbar-material-blue .navbar-form {
            border-color: #0392d3;
        }

        .navbar-material-blue .navbar-nav>.open>a,
        .navbar-material-blue .navbar-nav>.open>a:hover,
        .navbar-material-blue .navbar-nav>.open>a:focus {
            background: rgb(11 53 113) !important;
            color: #ffffff;
        }

        @media (max-width: 767px) {
            .navbar-material-blue .navbar-nav .open .dropdown-menu>li>a {
                color: #212529;
            }

            .navbar-material-blue .navbar-nav .open .dropdown-menu>li>a:hover,
            .navbar-material-blue .navbar-nav .open .dropdown-menu>li>a:focus {
                color: #ffffff;
                background-color: transparent;
            }

            .navbar-material-blue .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-material-blue .navbar-nav .open .dropdown-menu>.active>a:hover,
            .navbar-material-blue .navbar-nav .open .dropdown-menu>.active>a:focus {
                color: #ffffff;
                background-color: #0288d1;
            }

            .navbar-material-blue .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-material-blue .navbar-nav .open .dropdown-menu>.disabled>a:hover,
            .navbar-material-blue .navbar-nav .open .dropdown-menu>.disabled>a:focus {
                color: #cccccc;
                background-color: transparent;
            }

            .caret {
                display: inline-block;
                float: right;
                margin-top: 10px;
            }

            .navbar-nav .open .dropdown-menu {
                background: #ededed;
            }
        }

        .navbar-material-blue .navbar-link {
            color: #ffffff;
        }

        .navbar-material-blue .navbar-link:hover {
            color: #ffffff;
        }

        .navbar-material-blue .btn-link {
            color: #ffffff;
        }

        .navbar-material-blue .btn-link:hover,
        .navbar-material-blue .btn-link:focus {
            color: #ffffff;
        }

        .navbar-material-blue .btn-link[disabled]:hover,
        fieldset[disabled] .navbar-material-blue .btn-link:hover,
        .navbar-material-blue .btn-link[disabled]:focus,
        fieldset[disabled] .navbar-material-blue .btn-link:focus {
            color: #cccccc;
        }

        .dropdown .dropdown-menu .caret {
            border: 4px solid transparent;
            border-left-color: #fff;
            float: right;
            margin-top: 6px
        }

        .dropdown-menu {
            min-width: 270px
        }

        .dropdown-menu>li.open>a {
            background-color: #F5F5F5;
            color: #262626;
            text-decoration: none
        }

        .dropdown-menu .dropdown-menu {
            left: 100%;
            margin: 0;
            right: auto;
            top: -1px
        }

        .dropdown-menu-right .dropdown-menu,
        .navbar-right .dropdown-menu .dropdown-menu,
        .pull-right .dropdown-menu .dropdown-menu {
            left: auto;
            right: 100%
        }

        .dropdown-menu.animated {
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s
        }

        .dropdown-menu.animated:before {
            content: " ";
            display: block;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 99
        }

        .dropdownhover-top {
            margin-bottom: 2px;
            margin-top: 0
        }

        .navbar-fixed-bottom .dropdown-menu .dropdown-menu,
        .dropdownhover-top .dropdown-menu {
            bottom: -1px;
            top: auto
        }

        .navbar-nav>li>.dropdown-menu {
            margin-bottom: 0
        }

        .dropdownhover-bottom {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0
        }

        .dropdownhover-left {
            -webkit-transform-origin: 100% 50%;
            transform-origin: 100% 50%
        }

        .dropdownhover-right {
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%
        }

        .dropdownhover-top {
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%
        }
    </style>

    <!------------------------ New MegaMenu  ----------------------------->

    <style type="text/css">
        .head-cta {
            display: flex;
            padding: 10px 45px;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            color: white;
            background: linear-gradient(90deg, #07cc8e, #35a2d5);
            transition: 1s;
            box-shadow: 4px 4px 0 #12658d;
            transform: skewX(-15deg);
        }

        .head-cta:focus {
            outline: none;
            background: linear-gradient(90deg, #35a2d5, #07cc8e);
        }

        .head-cta:hover {
            transition: 0.5s;
            box-shadow: 8px 8px 0 #FBC638;
            background: linear-gradient(90deg, #35a2d5, #07cc8e);
        }

        .head-cta span:nth-child(2) {
            transition: 0.5s;
            margin-right: 0px;
        }

        .head-cta:hover span:nth-child(2) {
            transition: 0.5s;
            /*margin-right: 45px;*/
        }

        .head-cta span {
            transform: skewX(15deg);
            color: #fff;
        }

        .head-cta span:nth-child(2) {
            width: 20px;
            position: relative;
            /*top: 12%;*/
        }

        /**************SVG****************/

        path.one {
            transition: 0.4s;
            transform: translateX(-60%);
        }

        path.two {
            transition: 0.5s;
            transform: translateX(-30%);
        }

        .head-cta:hover path.three {
            animation: color_anim 1s infinite 0.2s;
        }

        .head-cta:hover path.one {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.6s;
        }

        .head-cta:hover path.two {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.4s;
        }

        /* SVG animations */

        @keyframes color_anim {
            0% {
                fill: white;
            }

            50% {
                fill: #FBC638;
            }

            100% {
                fill: white;
            }
        }
    </style>

    <style type="text/css">
        .header .menu-item {
            padding: 0 3px !important;
        }

        li.menu-item.cnt_m ul.mega-submenu.normal-sub {
            right: auto;
        }

        ul.mega-submenu.menu_desk li.has-subsubmenu {
            width: 33% !important;
        }

        ul.mega-submenu.menu_desk h4 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .header .menu-item .mega-submenu a {
            font-size: 13px !important;
        }

        .pull-right-tow {
            background-color: #ba3c0d;
            padding: 3px 15px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            margin-right: 125px;
            position: absolute;
            right: 0;
            bottom: -35px;
        }

        .pull-right-tow a {
            font-size: 12px;
        }

        .header-nabar-icon .pull-right {
            background-color: #47b475;
            font-weight: 700;
            font-size: 15px;
            padding: 3px 15px;
            /*border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;*/
            margin-right: 0px;
            position: absolute;
            right: 16px;
            bottom: -30px;
        }

        .header-nabar-icon .pull-right a:hover {
            color: #fff !important;
        }

        .header-nabar-icon .pull-right a,
        .header-nabar-icon .pull-right-tow a {
            color: #fff;
        }

        .sticky-form>.quick-cont-btn {
            top: 64vh;
            right: -60px;
            padding: 0px 20px;
        }

        @media (max-width: 320px) {

            .header-nabar-icon .pull-right,
            .pull-right-tow {
                display: none;
                border-radius: 0px;
                position: relative;
                width: 255px;

                text-align: center;
                margin: 0 15px;
                float: left !important;
                padding: 9px 2px;
            }

            .sidenav a {
                font-size: 14px;
                padding: 4px 4px 8px 8px;
            }

        }

        @media (max-width: 768px) {

            .header-nabar-icon .pull-right,
            .pull-right-tow {
                display: none;
                border-radius: 0px;
                position: relative;
                width: 255px;

                text-align: center;
                margin: 0 15px;
                float: left !important;
                padding: 9px 2px;
            }

            .sidenav a {
                font-size: 14px;
                padding: 4px 4px 8px 8px;
            }
        }

        .color-btn {
            background-color: #1fd1f9 !important;
            background-image: -o-linear-gradient(135deg, #b621fe 0, #1fd1f9 74%) !important;
            background-image: linear-gradient(315deg, #b621fe 0, #1fd1f9 74%) !important;
            border-radius: 7px;
            color: #fff;
        }

        .color-btn1 {
            border: none;
            /*border-radius: 50px;*/
            transition: 0.3s;
            background: #f90cff;
            background-image:
                linear-gradient(to right bottom, #f90cff, #e027ff, #c534ff, #a93eff, #8a44ff, #6560ff, #3c73ff, #0081ff, #009cff, #00b3ff, #00c6f5, #0cd7e8);
            /* clip-path: polygon(0% 0%,90% 0,100% 30%,100% 100%,0 100%); */
            animation: glow 1s infinite;
            transition: 0.5s;
            padding: 10px 25px;
            color: #fff;
            font-weight: 700;
            margin: 0 auto;
            font-size: 16px;
        }

        .color-btn1:focus,
        .color-btn1:hover {
            background-color: #47b475;
            transition: 0.5s;

        }

        .color-btn1 span:hover {
            transition: 0.3s;
            opacity: 1;
            font-weight: 700;
        }

        @media (min-width:320px) and (max-width:643px) {
            .color-btn1 {
                padding: 9px 16px !important;
                display: none;
            }
        }

        @keyframes glow {
            0% {
                box-shadow: 5px 5px 20px rgb(93, 52, 168), -5px -5px 20px rgb(93, 52, 168);
            }

            50% {
                box-shadow: 5px 5px 20px rgb(220, 41, 255), -5px -5px 20px rgb(220, 41, 255)
            }

            100% {
                box-shadow: 5px 5px 20px rgb(93, 52, 168), -5px -5px 20px rgb(93, 52, 168)
            }
        }

        .sticky_form_bp {
            position: fixed;
            right: -80px !important;
            top: 250px;
            z-index: 10;
            background: #47b475;
            color: #fff;
            padding: 0px 15px 16px !important;
            text-transform: capitalize;
            font-weight: 700;
            transform: rotate(270deg) !important;
            cursor: pointer;
            font-size: 14px;
        }
    </style>

    <style type="text/css">
        .footer-wrap h6 {
            color: #fff;
            font-size: 23px;
        }

        .footer-wrap h5 {
            margin: 10px 0;
            position: relative;
            text-transform: uppercase;
            padding-left: 10px;
            color: #fff;
            background: -webkit-linear-gradient(77deg, #00bcd4 0%, #17cc81 100%);
            background: -ms-linear-gradient(0deg, rgb(254, 66, 47) 0%, rgb(254, 81, 150) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
        }

        .footer-wrap h5:after {
            content: '';
            width: 3px;
            height: 90%;
            background: #47b475;
            display: inline-block;
            float: left;
            position: absolute;
            margin-top: 0;
            margin-right: 6px;
            left: 0;
            top: 1px;
        }
    </style>

    <style type="text/css">
        @media (min-width: 320px) and (max-width: 768px) {

            /*.openbtn1{width: 70px !important; top: 21% !important;}*/
            .main {
                margin-top: 55px !important;
            }

            .txt {
                padding: 0;
            }

            .nec-btn {
                margin: 10px 10px !important;
            }
        }

        /* The sidepanel menu */
        .sidepanel4 {
            height: auto;
            /* Specify a height */
            width: 0;
            /* 0 width - change this with JavaScript */
            position: fixed;
            /* Stay in place */
            z-index: 999999;
            /* Stay on top */
            top: 27%;
            left: 0;
            background-color: transparent;
            /* Black*/
            overflow-x: hidden;
            /* Disable horizontal scroll */
            padding-top: 0px;
            /* Place content 60px from the top */
            transition: 0.5s;
            /* 0.5 second transition effect to slide in the sidepanel */

        }

        /* The sidepanel links */
        .sidepanel4 a {
            /*padding: 8px 8px 8px 32px;*/
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .sidepanel4 a:hover {
            color: #f1f1f1;
        }

        /* Position and style the close button (top right corner) */
        .sidepanel4 .closebtn1 {
            position: absolute;
            top: 7px;
            right: 7px;
            font-size: 44px;
            margin-left: 50px;
            color: #fff;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            text-align: center;
            background: #eb1e2d !important;
            line-height: 0.80em;
            font-weight: bold;
            border: 2px solid #fff;
            box-shadow: 0px 0px 10px rgb(0 0 0 / 70%);
        }

        /* Style the button that is used to open the sidepanel */
        .openbtn1 {
            /*animation: zoom-in-zoom-out 1s ease infinite;*/
            filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.5));
        }

        .openbtn1:hover {
            background-color: transparent;
        }

        @keyframes zoom-in-zoom-out {
            0% {
                transform: scale(0.8, 0.8);
            }

            50% {
                transform: scale(1, 1);
            }

            100% {
                transform: scale(0.8, 0.8);
            }
        }
    </style>


    <!-- SocialMedia Bottom - Start -->

    <style type="text/css">
        .close-btn {
            position: fixed;
            left: 10px;
            bottom: 20px;
            z-index: 99;
            color: #fff !important;
            font-size: 16px;
            font-weight: bold;
            border-radius: 50%;
            border: 0;
            width: 30px;
            height: 30px;
            padding: 0;
            box-shadow: 1px 1px 11px -3px #999;
            display: none;
            transition: all 2s;
            background-color: #89002a;
        }

        .fixed-social {
            position: fixed;
            bottom: 42px;
            padding: 0px 10px;
            background: linear-gradient(2deg, black, #868686, black);
            transition: all 2s;
            width: 150px;
            height: 25px;
            border-radius: 20px;
            box-shadow: 1px 1px 11px -3px #999;
            /*filter: drop-shadow(0 0 0.75rem crimson);*/
            display: flex !important;
            flex-wrap: wrap;
            z-index: 99;
            justify-content: center;
        }

        .hide {
            opacity: 0;
            left: -100%;
        }

        .show1 {
            opacity: 1;
            left: 50px;
        }

        .fixed-social .items {
            margin: 0 auto;
        }

        .fixed-social .items .icons {
            width: 55px;
            height: 55px;
            background: linear-gradient(45deg, black, transparent);
            padding: 5px;
            border-radius: 50%;
            margin: -17px 0;
            float: left;
        }

        .fixed-social .items .icons i {
            padding: 9px;
            background: #00a7e7;
            border-radius: 50%;
            font-size: 26px;
            color: #fff;
        }

        .fixed-social .items .text {
            padding-left: 60px;
            font-weight: bold;
            font-family: arial;
            font-size: 14px;
            color: #fff !important;
            line-height: 2.2em;
        }

        .fixed-social .items a {
            text-decoration: none;
            outline: none;
            padding: 0;
            margin: 0;
        }

        .fixed-social .items .icons img {
            width: 44px !important;
            height: 44px !important;
        }

        @media only screen and (min-width: 1024px) and (max-width: 1200px) {
            .show1 {
                left: 20px;
            }

            .close-btn {
                bottom: 60px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 899px) {
            .fixed-social {
                bottom: 80px;
            }

            .show1 {
                left: 50px;
            }

            .close-btn {
                bottom: 60px;
                z-index: 999;
            }
        }

        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .fixed-social .items .text {
                display: none;
            }

            .fixed-social {
                bottom: 80px;
            }

            .show1 {
                left: 12%;
            }

            .fixed-social .items a {
                display: flex;
                justify-content: center;
            }

            .close-btn {
                bottom: 60px;
                z-index: 999;
            }
        }
    </style>
</div>



@endsection