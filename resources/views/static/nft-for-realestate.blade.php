@extends('layouts.static')
    @section('title', 'Real Estate NFT Marketplace')
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

    .banner_content {
        text-align: left;
    }

    .banner-overlay {
        background-color: rgb(0 0 0 / 0%);
    }

    .strategies-items1 .icons {
        order: 2;
        margin-right: 15px;
    }

    .contentall a:hover {
        background: #00acdc;
    }

    .banner {
        background-image: url('{{ asset('images/nft_real/banner-real-estate.jpg') }}');
        background-size: cover;
        padding-top: 138px;
        padding-bottom: 80px;
        height: auto;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to right, #110917c4, #20132a70);
        opacity: 0.95;
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
    }

    .banner_content .contentall {
        margin-top: 85px;
        max-width: 1000px;
        margin: 81px auto 40px;
    }

    .contentall h1,
    .ban_tirt {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 35px;
        text-transform: capitalize;
        color: #ffffff !important;
    }

    .contentall p {
        font-weight: normal;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 19px;
        max-width: 800px;
        margin: 0 auto 30px;
        display: block;
        color: #ffffff !important;
    }

    .contentall a {
        color: #fff;
        cursor: pointer;
        margin-bottom: 15px;
    }

    .sec_tit,
    .sec_tit h2 {
        font-size: 25px !important;
        font-weight: 700;
        color: #000000;
        line-height: 1.4;
        text-transform: capitalize;
    }

    .row.lv_flow.text-center {
        max-width: 800px;
        margin: 30px auto 0px;
    }

    @media (max-width: 1199px) {

        .contentall h1,
        .ban_tirt {
            font-size: 30px;
        }
    }

    @media (max-width: 768px) {
        .pad {
            padding: 0px !important;
        }

        .banner_content .contentall {
            margin-top: 50px;
            text-align: center;
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)));
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 0px;
        }

        .banner-overlay {
            background: #30115cbf;
        }

        .banner_content p {
            font-size: 14px !important;
        }

        .contentall h1,
        .ban_tirt {
            font-size: 25px;
        }

        .sec_tit,
        .sec_tit h2 {
            font-size: 20px !important;
        }

        .counters,
        .adv_fet,
        .flip-box {
            max-width: 450px;
            margin: 0 auto 30px;
        }

        .pull-left img {
            margin-top: 30px;
        }

        .sto-flip .flip-box {
            min-height: auto;
        }

        .pr_arr:after,
        .pr_arr:before,
        .banner_content p br,
        .sec_tit br {
            display: none !important;
        }
    }

    h3.section-title {
        font-size: 25px !important;
        font-weight: 700;
        text-transform: capitalize;
        color: #000000;
    }

    .banner_content h4 {
        margin-top: 10px;
        font-size: 24px;
        color: #fff;
        line-height: 40px;
        font-weight: 700;
        text-transform: capitalize;
        letter-spacing: 0;
        text-align: center;
        margin-bottom: 10px;
    }

    .sto-flip .flip-box {
        min-height: 300px;
    }

    div#assis_t .flip-box {
        padding: 30px 15px 20px;
        min-height: 280px;
    }

    .intro_cnt img {
        border-radius: 10px;
        margin-top: 0px;
    }

    div#assis_t .flip-box img {
        width: 54px;
        margin-top: 7px;
    }

    .flip-box-row {
        margin-bottom: 0;
    }

    .flip-box {
        margin-bottom: 30px;
    }

    .sec_tit h2 {
        display: inline;
    }

    .text-white {
        color: #fff;
    }

    .text-dark {
        color: #000 !important;
    }

    .bx {
        background: white;
        max-width: 74%;
        margin: 0 auto;
        padding: 5% 3%;
        box-shadow: 0 0 4px 3px #00000014;
        font-size: 20px;
        font-weight: 700;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .bx p {
        margin-bottom: 0px;
        color: #000000;
    }

    .bx:hover {
        background: #47b475;
    }

    .bx:hover p {
        color: #ffffff;
    }

    .para {
        width: 80%;
        margin: 0 auto;
    }

    .timeline::before {
        position: absolute;
        top: 0;
        left: 30px;
        height: 100%;
        width: 2px;
        background: #f2f2f200;
    }

    .main-timeline {
        padding: 25px 0 0;
        position: relative;
    }

    .main-timeline:after {
        content: '';
        display: block;
        clear: both;
    }

    .main-timeline .timeline {
        width: 65%;
        margin: 10px auto 0;
        padding: 30px 0 0 50px;
        float: left;
        position: relative;
        margin-bottom: 20px;
    }

    .main-timeline .timeline-content {
        color: #000000;
        background-color: #f2f2f2;
        padding: 20px 50px 20px 100px;
        border-radius: 20px;
        display: block;
        position: relative;
        margin-bottom: 10px;
    }

    .main-timeline .timeline-content:hover {
        text-decoration: none;
    }

    .main-timeline .timeline-content:before {
        content: '';
        background: linear-gradient(to right bottom, #00cd95, #00aae0);
        height: 150px;
        width: 150px;
        border-radius: 10px 0;
        position: absolute;
        left: -50px;
        top: -30px;
        clip-path: polygon(0 0, 0% 100%, 100% 0);
    }

    .main-timeline .timeline-count {
        color: #fff;
        background: linear-gradient(to right bottom, #00ca9b, #0983D9);
        font-size: 60px;
        font-weight: 600;
        text-align: center;
        line-height: 90px;
        height: 110px;
        width: 110px;
        border: 10px solid #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        position: absolute;
        left: -30px;
        top: -10px;
    }

    .main-timeline .timeline-icon {
        color: #0D60A6;
        font-size: 40px;
        text-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        transform: translateY(-50%);
        position: absolute;
        top: 50%;
        right: 20px;
    }

    .main-timeline .title {
        font-size: 20px;
        font-weight: 600;
        text-transform: capitalize;
        letter-spacing: 1px;
        margin: 0 0 7px 0;
    }

    .main-timeline .description {
        font-size: 14px;
        letter-spacing: 1px;
        text-align: justify;
        margin: 0;
    }

    .main-timeline .timeline:nth-child(even) {
        float: right;
        margin: 0 auto;
    }

    @media screen and (max-width:990px) {
        .main-timeline .timeline {
            margin: -30px auto 0;
        }
    }

    @media screen and (max-width:767px) {

        .main-timeline .timeline,
        .main-timeline .timeline:nth-child(even) {
            width: 100%;
            min-height: 150px;
            padding: 20px 0 0 20px;
            margin: 0;
        }

        .main-timeline .timeline-content {
            padding: 60px 20px 15px 20px;
        }

        .main-timeline .timeline-content:before {
            height: 80px;
            width: 100px;
            left: -20px;
            top: -20px;
        }

        .main-timeline .timeline-icon {
            transform: translateY(0);
            top: 5px;
        }

        .main-timeline .timeline-count {
            font-size: 40px;
            line-height: 50px;
            height: 60px;
            width: 60px;
            border-width: 5px;
            left: 0;
        }
    }

    @media screen and (max-width:567px) {
        .main-timeline .title {
            font-size: 18px;
        }
    }

    @media screen and (max-width: 500px) {
        .main-timeline .timeline {
            margin-bottom: 20px !important;
        }
    }

    .whychoose_sec ul li {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-bottom: 10px;
    }

    .whychoose_sec .icon_img {
        border: 2px solid #00acdc;
        border-radius: 28px 0px 0px 0px;
        padding: 5px;
    }

    .whychoose_sec .icon_img img {
        border-radius: 64%;
        display: inline-block;
        padding: 5px;
        background: #fff;
        box-shadow: 0 20px 50px rgb(0 0 0 / 10%);
    }

    .whychoose_sec .content {
        width: 85%;
        padding-left: 20px;
    }

    .whychoose_sec .content p {
        margin-bottom: 5px;
    }

    .br {
        border-radius: 10px;
    }

    .whychoose_sec p strong {
        font-size: 20px;
        color: #444040;
    }

    .cta-rewamped.ctaRewamped {
        background-image: none;
        padding: 5% 0%;
    }

    .cta-rewamped.ctaRewamped .container {
        background-image: linear-gradient(311deg, #00acdc 0%, #47b475);
        /* padding: 0px 0px; */
        padding-top: 20px;
        border-radius: 14px;
    }

    .row-flexible-center {
        padding: 3%;
    }

    .cta-rewamped.ctaRewamped .cta-rewamped-texter h4 {
        margin-bottom: 15px;
    }

    .cta-rewamped-texter h4 {
        font-size: 26px;
        /* font-weight: 900; */
        font-style: normal;
        font-stretch: normal;
        line-height: 1.47;
        letter-spacing: normal;
        /* text-align: left; */
        color: #ffffff;
        margin: 0px;
    }

    .cta-rewamped.ctaRewamped .cta-rewamped-texter p {
        font-size: 18px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.44;
        letter-spacing: normal;
        color: #fff;
        margin-bottom: 20px;
    }

    .perfect-script-items {
        padding: 30px 15px 10px;
        border-radius: 4px;
        background-color: #fff;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        display: flex;
        min-height: 206px;
        box-shadow: 11px -1px 11px #00000030;
        margin-bottom: 20px;
    }

    .perfect-script-items .icon {
        width: 70px;
        height: 70px;
        margin: 20px auto 50px;
        line-height: 75px;
        position: relative;
        border-radius: 50%;
        background-image: linear-gradient(293deg, #47b475 0%, #47b475 100%);
        color: #fff;
        font-size: 40px;
        z-index: 9;
        float: left;
    }

    .perfect-script-items .icon img {
        width: 45px;
        margin-top: -7px;
        -webkit-filter: brightness(0) invert(1);
        filter: brightness(0) invert(1);
    }

    .perfect-script-items .content {
        display: block;
        float: left;
        width: 80%;
        padding-left: 30px;
    }

    .perfect-script-items h3 {
        font-size: 16px;
        line-height: 22px;
        text-align: left;
    }

    .perfect-script-items p {
        text-align: left;
    }

    .app-overview {
        padding: 0px 10px;
        cursor: pointer;
        margin-bottom: 2px;
    }

    .app-overview .media {
        min-height: 150px;
    }

    .app-overview .media .media-left {
        padding-right: 0px;
        overflow: hidden;
    }

    .app-overview .media .media-left .app-icon {
        width: 94px;
        height: 94px;
        border-radius: 50%;
        left: 12px;
        background: #ffffff;
        position: relative;
        text-align: center;
        transition: all 0.3s linear;
    }

    .app-icon img {
        width: 70px;
        margin-top: 12px;
        /*filter: brightness(0) invert(1);*/
    }

    .app-overview .media .media-body {
        padding-left: 33px;
    }

    .cta-sec {
        border-radius: 30px;
        border: 2px solid #ffffff;
        color: #ffffff;
        background: #2ab19e !important;
    }

    .cta-sec1:hover {
        background: #ffffff !important;
        color: #47b475 !important;
    }

    #accordion .panel {
        border: none;
        border-radius: 3px;
        box-shadow: none;
        margin-bottom: 15px;
    }

    #accordion .panel-heading {
        padding: 0;
        border: none;
        border-radius: 3px;
    }

    #accordion .panel-title a {
        display: block;
        padding: 4px 15px 12px 50px;
        border: 1px solid #c3c3c3;
        border-radius: 3px;
        font-size: 16px;
        font-weight: bold;
        color: #000000;
        position: relative;
    }

    #accordion .panel-title a:before {
        content: "\f068";
        font-family: "Font Awesome 5 Free";
        width: 25px;
        height: 25px;
        line-height: 25px;
        border-radius: 50%;
        background: #929191;
        font-size: 12px;
        font-weight: 900;
        color: #fdfbfb;
        text-align: center;
        text-shadow: none;
        position: absolute;
        top: 8px;
        left: 15px;
    }

    #accordion .panel-title a.collapsed:before {
        content: "\f067";
    }

    #accordion .panel-body {
        padding: 10px 15px;
        font-size: 15px;
        color: #222;
        line-height: 27px;
        border: 2px solid #ddd;
    }

    @media screen and (min-width: 768px) {
        .box-shadow-border {
            box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
            background: #ffffff;
        }

        .box-space {
            padding-top: 20px !important;
        }
    }

    .list_real_estate li {
        position: relative;
        padding: 4px 12px;
        margin-top: 5px;
        margin-bottom: 10px;
        padding-left: 30px;
        /*    border-bottom: 2px solid #9e9e9e6e;*/
        color: #000000;
        font-size: 16px;
        text-align: justify;
    }

    .list_real_estate li:before {
        position: absolute;
        left: 4px;
        top: 4px;
        content: '\f10c';
        font-family: FontAwesome;
        font-size: 16px;
        line-height: 1;
        color: #47b475;
        border-radius: 5px;
        padding: 4px;
    }

    /*-- Technology --*/
    .technologies {
        background: #140050;
        padding: 50px 0;
    }

    .technologies ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .technologies ul li {
        width: 16%;
        text-align: center;
        font-size: 16px;
        padding: 15px;
        margin: -1px;
        border: 1px solid #fff;
    }

    /*.technologies ul li img {height: 60px;}*/
    .technologies ul li p {
        margin-bottom: 0 !important;
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .technologies ul li {
            width: 49%;
        }

        .technologies ul li img {
            width: 60px;
        }

        .technologies ul li {
            margin: 0px;
        }
    }
</style>

<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ban_tirt ">
                                    <h1 class="text-dark">NFT Marketplace for Real Estate</h1>
                                </div>
                                <p class="text-dark">Transform real estate transactions by merging physical property aspects with a decentralized virtual environment through NFTs. This innovative platform facilitates the digital representation of real estate assets, offering secure and transparent ownership and trading options.</p>
                                <div class="">
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
                                            href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                                            data-color-override="false" data-hover-color-override="false"
                                            data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                                        <a href="{{ url('consultation') }}"
                                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit underline">
                        <h2>NFT-Driven Real Estate: Bridging the Digital and Physical Worlds</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <p class="mt10">Picture this: acquiring a parcel of land as an NFT and using that digital asset to secure a low-interest loan from decentralized finance (DeFi), bypassing the hassle of traditional lenders and their extensive paperwork. NFTs have become a cornerstone of digital asset ownership, with their growing trend leading to innovative applications like these.</p>
                        <p>As NFTs represent ownership through smart contracts on decentralized networks, they offer a secure way to manage, trade, or leverage assets for future gains. The more unique or scarce the asset, the higher its value. The merging of NFTs with real estate reflects a groundbreaking shift where digital and physical worlds converge, allowing for unprecedented possibilities in virtual property transactions and investment.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img class="rounded-border mt10" src="{{ asset('images/nft_real/real-estate-01.jpeg') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title underline text-center">
                    <div class="sec_tit ">
                        <h2>Why Opt for Real Estate Innovation?</h2>
                    </div>
                </div>
                <p class="text-center mt10">Historically, purchasing real estate involved cumbersome paperwork and protracted processes, often leaving buyers entangled in red tape and missing out on lucrative opportunities. This inefficiency is exemplified by high-end properties like those on New York City's "Billionaires Row," where multimillion-dollar apartments often remain unoccupied. The real estate sector is ripe for technological advancement to streamline these processes.</p>
            </div>
        </div>

        <div class="technologies">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center text-white">Harness NFTs for Real Estate Innovation</h3>
                    <p class="text-center white">The advent of NFTs in real estate offers a transformative approach, simplifying digital asset investments. By developing a real estate-focused NFT platform, similar to leading industry projects, you can position your business advantageously in a competitive market. Embrace this technological leap to enhance efficiency and attract investors.</p>
                    <ul>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/decentraland.webp') }}">
                            <p class="white">Decentraland</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/upland.webp') }}">
                            <p class="white">Upland</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/cryptovoxels.webp') }}">
                            <p class="white">Cryptovoxels</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/polkacity.webp') }}">
                            <p class="white">Polkacity</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/realt.webp') }}">
                            <p class="white">RealT</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/atomic-market.webp') }}">
                            <p class="white">Atomic Market</p>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                    <div class="text-center cta_mine txt"> 
                        {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>  --}}
                        <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk
                                with our Experts</span></a> 
                    </div>

                </div>
            </div>
        </div>

        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="box-shadow-border col-lg-offset-1 col-lg-10">
                    <div class="row">
                        <div class="section-title text-center" style="width: 100%">
                            <div class="sec_tit underline box-space">
                                <h2>How NFTs Are Shaping the Future of Property Investment</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                            <p class="text-center">The advent of blockchain technology is driving the next wave of digital transformation, making NFTs a pivotal element in this evolution. People are increasingly tokenizing their real estate assets as NFTs due to their inherent interoperability, transparency, and consensus mechanisms. Land NFTs are transcending traditional physical boundaries and are being seamlessly integrated into the virtual realm. Platforms like "Decentraland" exemplify this shift, allowing users to acquire virtual plots as NFTs for various uses—be it virtual offices, shops, schools, universities, or even malls for promotional events. The potential of NFTs to create virtual environments, from pandemic-free worlds to remote educational institutions, showcases their transformative impact on real-world experiences.</p>
                            <div class="text-center mb-20">
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

                                    <a href="{{ url('consultation') }}"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>DISCOVER MORE WITH OUR EXPERTS</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec_tit underline text-left">
                            <h2>Metaverse Property: The Next Big Thing in Real Estate</h2>
                        </div>
                        <p class="mt10 mb10 text-justify">As the concept of the metaverse gains momentum, the market for virtual land within metaverse platforms is experiencing unprecedented growth. Notably, substantial transactions such as the $4.3 million purchase of virtual land in Decentraland and the $50,000 acquisition of a plot adjacent to Snoop Dogg’s property in The Sandbox highlight the soaring value of these digital assets. With tech giants like Meta (formerly Facebook Inc.) pushing towards a fully realized metaverse, virtual real estate is poised to become a highly sought-after commodity. This evolution may even lead to the creation of virtual counterparts for real-world properties, where ownership and transactions could be managed via smart contracts, streamlining the process and reducing paperwork.</p>
                    </div>
                    <div class="col-lg-6"> <img class="lazy img-responsive rounded-border"
                            src="{{ asset('images/nft_real/real-estate-02.jpeg') }}" alt="" title=""> </div>
                </div>
            </div>
        </section>
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"> <img class="lazy img-responsive rounded-border"
                            src="{{ asset('images/nft_real/real-estate-03.webp') }}"> </div>
                    <div class="col-lg-6">
                        <div class="sec_tit underline text-left">
                            <h2>Decentralized Real Estate: Redefining Transactions with NFTs</h2>
                        </div>
                        <p class="mt10 mb10 text-justify">Decentralization lies at the heart of blockchain technology, and it extends seamlessly into the realm of NFT real estate. By leveraging a decentralized NFT real estate platform, users can engage in peer-to-peer (P2P) transactions without intermediaries. This system eliminates the cumbersome and slow paperwork traditionally associated with real estate deals, thanks to the use of smart contracts. Consequently, this approach not only accelerates the buying and selling process but also reduces costs, making real estate investments more accessible and efficient.</p>
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
                                data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                            <a href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="common_spacing">
            <div class="container">
                <div class="section-title underline text-center">
                    <div class="sec_tit">
                        <h2>Understanding How Real Estate NFTs Operate</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <div class="timeline-content"> <span class="timeline-count">1</span>
                                    <p class="description"><strong>Minting the NFT:</strong> The minting phase creates an NFT that encapsulates all legal data related to the property, including documentation, disclosures, reports, and multimedia such as images or videos.</p>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content"> <span class="timeline-count">2</span>
                                    <p class="description"><strong>Listing the NFT:</strong> Once minted, the NFT is listed on a real estate-focused NFT marketplace, making it available for potential buyers.</p>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content"> <span class="timeline-count">3</span>
                                    <p class="description"><strong>Trading and Transactions:</strong> The property can then be acquired through various methods such as auctions, direct purchases, or loans, depending on the listing terms.</p>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content"> <span class="timeline-count">4</span>
                                    <p class="description"><strong>Finalizing the Deal:</strong> Upon selecting a buyer, a smart contract is executed digitally, ensuring that the agreed cryptocurrency payment is transferred from the buyer's wallet to the seller's wallet once the NFT ownership is fully transferred.</p>
                                </div>
                            </div>
                            {{-- <div class="timeline">
                                <div class="timeline-content"> <span class="timeline-count">5</span>
                                    <p class="description">Once a buyer is selected, a smart contract is digitally
                                        signed between them promising full payment of the cryptocurrency from buyer to
                                        seller crypto wallet after complete ownership of NFT is transferred. </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="whychoose_sec common_spacing gray_bg">
            <div class="container" style="padding:20px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title underline text-left">
                            <div class="sec_tit">
                                <h2>Perks of NFT Integration in Real Estate Transactions</h2>
                            </div>
                        </div>
                        <ul class="text-left">
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_real/icon/ownership.webp') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Complete Ownership Transfer:</strong><br> The real estate NFT marketplace guarantees full transparency in transferring property ownership, ensuring that ownership is transferred entirely without any fractional splits.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_real/icon/paperwork.webp') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>No Physical Handling Required:</strong><br> Unlike art or music NFTs, real estate NFTs don't involve any physical interaction with the property; the process focuses exclusively on managing paperwork.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_real/icon/low-costs.png') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Cost Efficiency:</strong><br> Traditional hurdles like rising costs, realtor fees, and other fractional expenses are addressed through NFTs, which help reduce these overhead costs and offer more competitive pricing.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy"
                                        src="{{ asset('images/nft_real/icon/documentation.png') }}" alt="" width="60px"
                                        height="60px"></div>
                                <div class="content">
                                    <p><strong>Simplified Documentation:</strong><br> Although NFTs don’t eliminate the need for essential paperwork, such as tax forms and deeds, they do streamline certain aspects of the transaction process, making it more efficient.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center"> <img class="lazy br" src="{{ asset('images/nft_real/features.webp') }}" style="margin-top: 70px" alt="Real Estate NFT Marketplace" title="Features Of Real Estate NFT Marketplace"> </div>
                </div>
            </div>
        </section>
        <section class="common_spacing">    
            <div class="container">
                <div class="row">
                    <div class="section-title underline text-center" style="width: 100%">
                        <div class="sec_tit">
                            <h2>Developing Your Own NFT Real Estate Marketplace: A Step-by-Step Guide</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img class="lazy" src="{{ asset('images/nft_real/real-estate-04.png') }}" style="margin-top: 25px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="list_real_estate">
                            <li><strong>Identify Requirements:</strong> Start by assessing both your needs and those of potential investors concerning the NFT real estate marketplace. Essential features might include smart listings and auction capabilities.</li>
                            <li><strong>Conduct Market Research:</strong> Explore the market landscape in your targeted region. Utilize competitor analysis, public data, and other resources to gain insights and inform your strategy.</li>
                            <li><strong>Refine Your Plan:</strong> Review your initial concept to address any gaps or issues. Finalize the plan on paper to ensure a solid foundation before proceeding to development.</li>
                            <li><strong>Front-End Development:</strong> Focus on creating an intuitive and engaging user interface. This phase involves designing the visual and interactive aspects of your marketplace to ensure a smooth user experience.</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="list_real_estate">
                            <li><strong>Back-End Development:</strong> Develop the core infrastructure for security and functionality. Integrate your marketplace with a blockchain network to ensure its robustness and reliability.</li>
                            <li><strong>Testing Phase:</strong> Rigorously test the platform to identify and fix any errors. This step is crucial for ensuring the platform operates smoothly and efficiently.</li>
                            <li><strong>Deployment and Launch:</strong> Once testing is complete, deploy your NFT real estate marketplace on your server and make it publicly accessible. Implement a plan for ongoing updates and maintenance to keep the platform current and functional.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img class="lazy" src="{{ asset('images/nft_real/real-estate-05.webp') }}">
                    </div>
                </div>
            </div>
        </section>
        <section class="whychoose_sec common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center"> <img class="lazy br" src="{{ asset('images/nft_real/benifits.jpg') }}" style="margin-top: 75px" alt="NFT Marketplace for Real Estate" title="Benefits Of Real Estate NFT Marketplace">
                    </div>
                    <div class="col-md-6 mt40">
                        <div class="section-title underline text-left">
                            <div class="sec_tit">
                                <h2>Key Advantages of NFT-Driven Property Platforms</h2>
                            </div>
                        </div>
                        <ul class="text-left">
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_real/icon/collateral.png') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Collateral Potential:</strong><br> The inherent stability of real estate makes it an ideal asset for use as collateral on blockchain platforms, enhancing its attractiveness for third parties.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_real/icon/contract.webp') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Flexible Contracts:</strong> Smart contracts can be tailored to facilitate various transactions, including sales, loans, short-term leases, and long-term leases, mirroring real-world agreements.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_real/icon/ownership.webp') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Virtual Asset Ownership:</strong> Users can acquire virtual land as an asset with tangible value, bridging the gap between digital and physical real estate.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_real/icon/security.png') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Enhanced Security:</strong> The blockchain's inherent transparency and security reduce the risk of fraudulent claims, ensuring that virtual land transactions are legitimate and reliable.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class=" mt40 ">
                    <div class="section-title underline text-center">
                        <div class="sec_tit">
                            <h2>Cutting-Edge Solutions for NFT Marketplace Development</h2>
                        </div>
                    </div>
                    <p class="text-center">Our team offers state-of-the-art technology and unparalleled expertise, supported by global research centers to ensure the best user experience for your project.</p>
                    {{-- <h3 class="text-center">Our development services are</h3> --}}
                    <div class=" feature-block mt30">
                        <div class="col-sm-6 ">
                            <div class="app-overview equal-height" style="">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="app-icon text-center"> <img
                                                src="{{ asset('images/nft_real/icon/nft-market.png') }}"> </div>
                                    </div>
                                    <div class="media-body">
                                        <h4>NFT Marketplace Creation</h4>
                                        <p>We assist in tokenizing your collectibles, developing a user-friendly interface, and integrating essential features such as mobile dashboards to meet your specific needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="app-overview equal-height" style="">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="app-icon text-center"> <img
                                                src="{{ asset('images/nft_real/icon/customize.webp') }}"> </div>
                                    </div>
                                    <div class="media-body">
                                        <h4>Customizable NFT Marketplace Deployment</h4>
                                        <p>We deliver a comprehensive, ready-to-deploy marketplace framework that can be customized to suit your particular requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="app-overview equal-height" style="">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="app-icon text-center"> <img src="{{ asset('images/nft_real/icon/tokens.png') }}">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4>NFT Token Development</h4>
                                        <p>Our marketing and research experts provide valuable insights into current market trends, guiding the development of your token or coin to align with global standards.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="app-overview equal-height" style="">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="app-icon text-center"> <img src="{{ asset('images/nft_real/icon/Minting.png') }}">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4>NFT Minting Platform Design</h4>
                                        <p>Our team creates robust, adaptable smart contracts to ensure transparent ownership and data integrity across multiple blockchains.</p>
                                    </div>
                                </div>
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
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING </span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                    </div>
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

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


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

        .openbtn1 {
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