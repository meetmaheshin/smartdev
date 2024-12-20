@extends('layouts.static')
    @section('title', 'NFT Consulting')
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
        background: url('{{ ('images/nft-consulting/banner-image.webp') }}');
        background-size: cover;
        padding-top: 110px;
        padding-bottom: 100px;
        background-repeat: no-repeat;
        height: auto;
        background-position: right;
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
        padding: 20px;
        border: 1px solid #e4ecf9;
        position: relative;
        z-index: 1;
        background: #fff;
        margin-bottom: 30px;
        min-height: 317px;
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
        margin-top: 6px;
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
        padding: 10px 10px;
        border: 2px solid #f5f5f5;
        text-align: center;
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

    .list li {
        padding: 5px 0px;
        text-indent: -27px;
        padding-left: 10px;
    }

    .list li:before {
        content: " \f0a4";
        font-family: "Font Awesome 5 Free";
        color: #47b475;
        margin-right: 10px;
        text-indent: 50px;
    }

    .feature-items {
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 3px 3px 15px -6px rgb(0 0 0 / 31%);
        background: #fff;
        min-height: 290px;
        text-align: center;
        margin-top: 20px;
    }

    .feature_icon {
        padding: 15px;
        transition: all 0.3s ease 0s;
    }

    .feature-items img {
        width: 75px;
        padding: 10px;
        text-align: center;
        border-radius: 10px 20px 10px 20px;
        border: 2px solid #47b4759c;
        margin: 0 auto !important;
    }

    .feature-items h4 {
        font-size: 18px;
        font-weight: 700;
    }

    .feature-items p {
        padding-top: 20px;
        text-align: center;
    }

    .feature-items:hover .feature_icon {
        transform: rotateY(360deg);
    }
</style>
<style type="text/css">
    .tech-padding {
        padding-bottom: 100px;
    }

    .space-pt {
        padding: 100px 0 0;
    }

    .tech-padding:before {
        height: 470px !important;
    }

    .bg-dark-half-md {
        position: relative;
    }

    .bg-dark-half-md:before {
        content: "";
        background: #022d62;
        width: 100%;
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .category-grid-style-01 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        background: #ffffff;
        -webkit-box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
        border-radius: 5px;
    }

    .teck .category-grid-style-01 .category-item {
        padding: 30px;
        text-align: center;
        width: 25%;
        border-right: 1px solid #eeeeee;
        border-bottom: 1px solid #eeeeee;
        position: relative;
        cursor: pointer;
    }

    .teck .category-grid-style-01 .category-item:before {
        content: "";
        background: #ffffff;
        width: 110%;
        height: 110%;
        display: inline-block;
        position: absolute;
        left: -5%;
        top: -5%;
        z-index: 1;
        opacity: 0;
        -webkit-transform: scale(0.96);
        transform: scale(0.96);
        transition: all 0.3s ease-in-out;
    }

    .teck .category-grid-style-01 .category-item .category-icon {
        color: #333333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px;
        position: relative;
        z-index: 2;
    }

    .teck .category-grid-style-01 .category-item .category-title {
        color: #022d62;
        font-weight: bold;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
        font-size: 16px;
    }

    .category-grid-style-01 .category-item:hover:before {
        -webkit-box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
        transition: all 0.3s ease-in-out;
    }

    .text-white {
        color: #fff;
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
                                    <h1>Top-Tier NFT Consulting Services</h1>
                                </div>
                                <p>Our NFT consultants are leaders in the field, offering strategic insights that drive Web3 ventures to unprecedented success. We design your campaign to engage influential figures in the Web3 space, ensuring your company’s growth and prominence.</p>
                                <style type="text/css">
                                    .nec-btn {
                                        position: relative !important;
                                        color: #fff !important;
                                        border-radius: 30px !important;
                                        font-size: 11px;
                                        text-transform: uppercase !important;
                                        transform: scale(1.1, 1.1) !important;
                                        transition: all 0.3s ease-out 0s !important;
                                        background: #47b475 !important;
                                    }

                                    .nec-btn:hover {
                                        transform: scale(1, 1) !important;
                                        color: #fff !important;
                                        background: #00a9e2 !important;
                                    }

                                    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                                        margin-bottom: 15px !important;
                                        display: inline-block;
                                        margin-right: 26px !important;
                                    }

                                    .contentall a,
                                    a.home-talk-experts {
                                        padding: 10px 20px !important;
                                    }
                                </style>

                                <div class="cta_mine">
                                    {{-- <a rel="nofollow"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"
                                        target="_blank"
                                        href="#"
                                        data-color-override="false" data-hover-color-override="false"
                                        data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
                                    <a href="{{ url('consultation') }}"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
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
                        <h2>Why NFT Consulting Matters</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p class="mt10 mb10 text-center">As NFTs have surged in prominence, their adoption among the crypto-savvy community has showcased their vast potential. This rising interest has led to a boom in NFT-based ventures, intensifying competition in the Web3 landscape. NFT consulting becomes crucial for startups aiming to carve out a unique position in this crowded arena and resonate with the community.</p>
                    <p class="mt10 mb10 text-center">Our bespoke NFT consulting services are designed to help Web3 ventures realize their ambitions and stand out in the burgeoning NFT market.</p>
                </div>
            </div>
        </section>

        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img class="lazy" src="{{ asset('images/nft-consulting/Statics.png') }}" width="410px" alt="NFT Consulting" title="NFT Consulting">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="section-title text-left underline">
                            <div class="sec_tit">
                                <h3>Compelling Statistics Highlighting the NFT Surge</h3>
                            </div>
                        </div>
                        <ul class="list text-justify">
                            <li>In 2021, over $41 billion was spent on NFTs across various marketplace platforms.</li>
                            <li>NFT trading volume skyrocketed by 704% between Q2 and Q3 of 2021, propelling the NFT explosion.</li>
                            <li>The top 5 countries leading in NFT adoption are all in Asia: The Philippines, Thailand, Malaysia, UAE, and Vietnam.</li>
                            <li>23% of millennials collect NFTs either as a hobby or an investment.</li>
                            <li>In 2021, over 11 million NFT artwork transactions were recorded.</li>
                        </ul>
                        <style type="text/css">
                            .nec-btn {
                                position: relative !important;
                                color: #fff !important;
                                border-radius: 30px !important;
                                font-size: 11px;
                                text-transform: uppercase !important;
                                transform: scale(1.1, 1.1) !important;
                                transition: all 0.3s ease-out 0s !important;
                                background: #47b475 !important;
                            }

                            .nec-btn:hover {
                                transform: scale(1, 1) !important;
                                color: #fff !important;
                                background: #00a9e2 !important;
                            }

                            a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                                margin-bottom: 15px !important;
                                display: inline-block;
                                margin-right: 26px !important;
                            }

                            .contentall a,
                            a.home-talk-experts {
                                padding: 10px 20px !important;
                            }
                        </style>

                        <div class="cta_mine">
                            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"
                                href="#"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
                            <a href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <h3 class="sec_tit underline text-center" style="width: 100%">Scope of Our NFT Consulting Services</h3>
                </div>
                <div class="row mt20">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_feature_seven">
                            <div class="single_feature_six_seven_icon">
                                <div class="icon"> <img class="lazy" data-src="/images/nft-consulting/research.webp">
                                </div>
                            </div>
                            <div class="single_feature_seven_content">
                                <h4>Market Research</h4>
                                <p>The aim of our market research is to satisfy end-users with diverse digital knowledge
                                    levels by providing immersive experiences through user-friendly applications for NFT
                                    ventures.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_feature_seven">
                            <div class="single_feature_six_seven_icon">
                                <div class="icon"> <img class="lazy"
                                        data-src="/images/nft-consulting/predictive-chart.webp"> </div>
                            </div>
                            <div class="single_feature_seven_content">
                                <h4>Business Prediction</h4>
                                <p>We provide accurate predictions for your venture based on anticipated market
                                    movements and the business’s vision that gives out results for our feasibility
                                    analysis tests. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_feature_seven">
                            <div class="single_feature_six_seven_icon">
                                <div class="icon"> <img class="lazy"
                                        data-src="/images/nft-consulting/settings-gears-outlines-interface-symbol.webp">
                                </div>
                            </div>
                            <div class="single_feature_seven_content">
                                <h4>Functional Needs</h4>
                                <p>Our team carefully checks all the needs of your venture platform and filters the ones
                                    based on viability to form your Web3 platform’s final solution. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_feature_seven">
                            <div class="single_feature_six_seven_icon">
                                <div class="icon"> <img class="lazy" data-src="/images/nft-consulting/analyze.webp">
                                </div>
                            </div>
                            <div class="single_feature_seven_content">
                                <h4>Non-functional Needs</h4>
                                <p>Our team analyzes features that work in hindsight to ensure that the platform works
                                    as intended at standard speeds and zero errors at any time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_feature_seven">
                            <div class="single_feature_six_seven_icon">
                                <div class="icon"> <img class="lazy"
                                        data-src="/images/nft-consulting/offshore-platform.webp"> </div>
                            </div>
                            <div class="single_feature_seven_content">
                                <h4>Platform Architecture</h4>
                                <p>We draw plans to link all the different software components of your Web3 business in
                                    a diligent manner to ensure that everything works seamlessly anytime. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_feature_seven">
                            <div class="single_feature_six_seven_icon">
                                <div class="icon"> <img class="lazy" data-src="/images/nft-consulting/layers.webp">
                                </div>
                            </div>
                            <div class="single_feature_seven_content">
                                <h4>Technological Stacks</h4>
                                <p>Our NFT project advisors help you in choosing the best third-party tech stacks needed
                                    for your Web3 venture platform based on your requirements and resources. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <style type="text/css">
                        .nec-btn {
                            position: relative !important;
                            color: #fff !important;
                            border-radius: 30px !important;
                            font-size: 11px;
                            text-transform: uppercase !important;
                            transform: scale(1.1, 1.1) !important;
                            transition: all 0.3s ease-out 0s !important;
                            background: #47b475 !important;
                        }

                        .nec-btn:hover {
                            transform: scale(1, 1) !important;
                            color: #fff !important;
                            background: #00a9e2 !important;
                        }

                        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                            margin-bottom: 15px !important;
                            display: inline-block;
                            margin-right: 26px !important;
                        }

                        .contentall a,
                        a.home-talk-experts {
                            padding: 10px 20px !important;
                        }
                    </style>
                    <div class="cta_mine">

                        <a href="#newsletter-form-sec"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our
                                Experts</span></a>
                    </div>
                </div>
            </div>
        </section> --}}

        @include('static.bottom-right-hover-effect-section', [
            'title' => "Applications of Semi-Fungible Tokens", 
            'desc' => "",
            'cards' => [
                [
                    'title' => "Market Insights",
                    'desc' => "Our market research is designed to cater to users with varying levels of digital expertise, delivering immersive and user-centric experiences tailored to NFT ventures. We focus on creating applications that resonate with diverse audiences.",
                    'image' => 'nft-consulting/research.webp'
                ],
                [
                    'title' => 'Strategic Forecasting',
                    'desc' => "We offer precise forecasting based on projected market trends and your business vision, providing actionable insights that drive our feasibility analyses and strategic decisions.",
                    'image' => 'nft-consulting/predictive-chart.webp'
                ],
                [
                    'title' => 'Operational Requirements',
                    'desc' => "Our team meticulously evaluates your platform's functional requirements, distinguishing the viable ones to develop a final solution that perfectly aligns with your Web3 objectives.",
                    'image' => 'nft-consulting/settings-gears-outlines-interface-symbol.webp'
                ],
                [
                    'title' => "Performance Specifications",
                    'desc' => "We rigorously assess non-functional requirements to ensure your platform operates smoothly, maintaining optimal performance and error-free functionality under all conditions.",
                    'image' => 'nft-consulting/analyze.webp'
                ],
                [
                    'title' => "Platform Design",
                    'desc' => "We meticulously architect the integration of various software components within your Web3 venture, ensuring seamless interaction and consistent operation.",
                    'image' => 'nft-consulting/offshore-platform.webp'
                ],
                [
                    'title' => "Technology Selection",
                    'desc' => "Our NFT experts guide you in selecting the most suitable third-party technology stacks for your Web3 project, aligning with your specific needs and available resources.",
                    'image' => 'nft-consulting/layers.webp'
                ],
            ],
            'cta_name' => '',
            'cta_link' => ''
        ])

        @include('static.title-desc-card', [
            'title' => 'Comprehensive NFT Consulting Services',
            'cards' => [
                [
                    'title' => 'Strategic NFT Sales',
                    'desc' => "Our consulting team delivers cutting-edge strategies and insights to elevate your NFT sales, enabling you to thrive in the competitive NFT landscape regardless of your current standing in the digital realm."
                ],
                [
                    'title' => 'NFT Creation Guidance',
                    'desc' => "We provide expert advice on crafting NFTs that capture attention and spark trends, leveraging targeted marketing strategies to engage the expansive Web3 community and boost your NFT's visibility."
                ],
                [
                    'title' => 'Marketplace Platform Advisory',
                    'desc' => "Our seasoned consultants guide creators in selecting the optimal NFT marketplaces for minting and selling their art, ensuring maximum exposure and profitability."
                ],
                [
                    'title' => 'Minting Strategy',
                    'desc' => "Our advisors help you determine the ideal number of NFTs to mint, manage whitelist processes, and set pricing strategies to maximize your project's success."
                ],
                [
                    'title' => 'Smart Contract Solutions',
                    'desc' => "We offer modern use case scenarios for integrating NFTs into smart contracts, enhancing their appeal and functionality within the rapidly expanding Web3 ecosystem."
                ],
                [
                    'title' => 'Partnership Development and Sales',
                    'desc' => "Our consultants assist in forging strategic alliances with leading NFT platforms, influential Web3 figures, and media outlets to amplify your project's impact and value."
                ],
                [
                    'title' => 'Referral-Based Viral Marketing',
                    'desc' => "We implement effective viral marketing strategies through classical referral campaigns, reducing promotional costs while maximizing reach and engagement for your Web3 venture."
                ],
                [
                    'title' => "Investment Token Offerings",
                    'desc' => "Our experts guide incorporating investment-related security token offerings, ensuring compliance with legal regulations, and enhancing the functionality of your NFT project."
                ],
                [
                    'title' => "Influencer Collaboration",
                    'desc' => "We connect you with top Web3 influencers who align with your business niche, leveraging their reach to boost your NFT venture's marketing efforts and drive greater success."
                ],
            ],
        ])

        <section class="common_spacing">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <div class="section-title text-center ">
                        <h3 class="common_h3 text-dark">Unlock Expert Guidance for Your NFT Venture</h3>
                        <hr>
                        <p class="mt10 mb10 text-center">Partner with a leading NFT consulting firm to gain unparalleled insights and implement strategic solutions that will elevate your NFT project to new heights.</p>
                        <style type="text/css">
                            .nec-btn {
                                position: relative !important;
                                color: #fff !important;
                                border-radius: 30px !important;
                                font-size: 11px;
                                text-transform: uppercase !important;
                                transform: scale(1.1, 1.1) !important;
                                transition: all 0.3s ease-out 0s !important;
                                background: #47b475 !important;
                            }

                            .nec-btn:hover {
                                transform: scale(1, 1) !important;
                                color: #fff !important;
                                background: #00a9e2 !important;
                            }

                            a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                                margin-bottom: 15px !important;
                                display: inline-block;
                                margin-right: 26px !important;
                            }

                            .contentall a,
                            a.home-talk-experts {
                                padding: 10px 20px !important;
                            }
                        </style>

                        <div class="cta_mine">
                            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"
                                href="#"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>SCHEDULE A CONSULTATION</span></a> --}}
                            <a href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR SPECIALISTS</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @include('static.spin-image-hover-Section', [
            'title' => "NFT Segments Our Consulting Services Offer",
            'cards' => [
                [
                    'title' => "Art Masterpieces",
                    'desc' => "Mint and sell genuine artworks as NFTs on blockchain platforms, bypassing copyright issues and reaching global marketplaces.",
                    'image' => 'nft-consulting/art.png'
                ],
                [
                    'title' => 'In-Game Assets',
                    'desc' => "Facilitate the trading of virtual items within games, fostering a competitive environment and a dynamic in-game economy.",
                    'image' => 'nft-consulting/console.png'
                ],
                [
                    'title' => 'Music Releases',
                    'desc' => "Tokenize music albums and directly sell them to fans, cutting out the need for traditional streaming platforms.",
                    'image' => 'nft-consulting/music.png'
                ],
                [
                    'title' => "Photography",
                    'desc' => "Empower photographers to monetize their images through NFTs, enhancing visibility and financial reward.",
                    'image' => 'nft-consulting/photography.png'
                ],
                [
                    'title' => "Sports Memorabilia",
                    'desc' => "Authenticate and sell sports collectibles as NFTs, capturing the interest of dedicated fans and collectors.",
                    'image' => 'nft-consulting/sports.png'
                ],
                [
                    'title' => "Event Passes",
                    'desc' => "Digitize event tickets to offer fans seamless access to exclusive events, ensuring an enhanced experience.",
                    'image' => 'nft-consulting/ticket.webp'
                ],
                [
                    'title' => "Intellectual Property",
                    'desc' => "Transfer patent rights and ownership transparently via blockchain, securing and verifying invention records.",
                    'image' => 'nft-consulting/intellectual-property.png'
                ],
            ],
        ])


        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="sec_tit underline text-center" style="width: 100%">
                        <h2>How We Propel Web3 Ventures to Success</h2>
                    </div>
                </div>
                <div class="row">
                    <p class="mt10 text-center">Our NFT consulting firm is deeply attuned to the ever-evolving Web3 landscape, allowing us to continuously refine our strategies to align with cutting-edge trends. This commitment to innovation has established us as a leading force in the NFT consulting realm. Despite our progress, our top priority remains ensuring the utmost satisfaction of our clients, addressing every need before concluding our partnership. <br> <br>
                    With over five years of experience in the blockchain sector, we've successfully launched more than 200 groundbreaking projects. Our current portfolio includes over 50 active projects, managed by a dedicated team of over 300 blockchain specialists, consultants, and marketers. To shape the future of your Web3 venture, partner with top-tier NFT consultants from one of the world’s premier NFT consulting firms.
                    </p>
                </div>
                <div class="text-center">
                    <style type="text/css">
                        .nec-btn {
                            position: relative !important;
                            color: #fff !important;
                            border-radius: 30px !important;
                            font-size: 11px;
                            text-transform: uppercase !important;
                            transform: scale(1.1, 1.1) !important;
                            transition: all 0.3s ease-out 0s !important;
                            background: #47b475 !important;
                        }

                        .nec-btn:hover {
                            transform: scale(1, 1) !important;
                            color: #fff !important;
                            background: #00a9e2 !important;
                        }

                        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                            margin-bottom: 15px !important;
                            display: inline-block;
                            margin-right: 26px !important;
                        }

                        .contentall a,
                        a.home-talk-experts {
                            padding: 10px 20px !important;
                        }
                    </style>

                    <div class="cta_mine">
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
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