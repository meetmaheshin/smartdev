@extends('layouts.static')
    @section('title', 'P2P Exchange Development')
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

    .container-center {
        display: flex;
        flex-wrap: wrap;
        position: relative;
        z-index: 1;
        justify-content: center;
    }

    .equalize {
        display: flex;
    }

    .new-features .awesome-features-wrapper {
        padding: 30px 15px;
        position: relative;
        transition: 1s;
        border-radius: 7px;
        min-height: auto;
        margin: 25px;
        background: #1b0a49;
        border: 1px solid #fff;
    }

    .new-features .awesome-features-wrapper::before {
        content: "";
        position: absolute;
        left: -10px;
        bottom: -10px;
        background: #fff;
        width: 90px;
        height: 90px;
        z-index: -1;
        transition: 1s;
        border-radius: 20px
    }

    .new-features .awesome-features-wrapper::after {
        content: "";
        position: absolute;
        width: 90px;
        height: 90px;
        z-index: -1;
        transition: 1s;
        right: -10px;
        top: -10px;
        border-radius: 20px;
        background: none;
        border: 1px solid #fff;
    }

    .new-features .awesome-features-wrapper:hover::before,
    .new-features .awesome-features-wrapper:hover::after {
        width: 200px;
        height: 200px
    }

    .new-features .awesome-features-wrapper p,
    .new-features .awesome-features-wrapper p strong {
        color: #fff;
        padding: 0;
        margin: 0;
    }

    .new-features .awesome-features-icon-img .fa {
        color: #fff;
        font-size: 40px;
        margin-bottom: 15px;
    }

    .form-right input.submit_send {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #47b475 !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: 700 !important;
        padding: 10px 0 !important
    }

    .sec_tit,
    .sec_tit h2 {
        font-size: 25px !important;
        font-weight: 700;
        color: #000000;
        line-height: 1.4;
        text-transform: capitalize
    }

    #our_services .grids .grid .feature-box-3 {
        min-height: 345px !important
    }

    .feature-box-3 .icon {
        background: #f3f3f3;
        display: flex;
        align-items: center;
        justify-content: center
    }

    #pricing-section {
        padding: 60px 0
    }




    .demo-details a {
        text-align: center;
        background: #fff;
        margin: 0 auto;
        display: block;
        width: 150px;
        color: #47b475;
        font-weight: 700;
        text-transform: capitalize;
        padding: 10px
    }

    .demo-details a:hover {
        color: #47b475 !important
    }

    .demo-details {
        background: #47b475;
        padding: 32px 0;
        min-height: auto
    }

    .demo-details h4 {
        color: #fff
    }

    .demo-details p {
        color: #f9fff7;
        margin-bottom: 10px
    }


    .section-top {
        display: inline-block;
        width: 100%;
        padding-left: 30px
    }



    .grids .grid .feature-box-3 .icon i {
        padding: 10px
    }

    .timeline-center::before {
        background: #47b475 !important
    }

    .flip-box {
        padding: 35px 10px;
        min-height: auto;
        margin-bottom: 35px;
        border-radius: 5px;
        border-bottom: 2px solid #47b47566
    }

    .flip-tit {
        font-size: 18px;
        margin-bottom: 10px;
        color: #000000;
        font-weight: 700;
    }

    .flip-icon-outer {
        padding: 0;
        width: 100px;
        height: 100px
    }

    .order-type-box {
        min-height: auto;
        margin-bottom: 65px;
        padding-bottom: 40px
    }

    @media (max-width:1199px) {


        #our_services .grids .grid .feature-box-3 {
            min-height: 380px !important
        }
    }

    @media (max-width:991px) {

        #our_services .grids .grid .feature-box-3 {
            min-height: auto !important
        }
    }

    @media (max-width:767px) {



        .main {
            overflow-x: hidden
        }

        .timeline-center::before {
            height: 100%
        }
    }

    @media (max-width:767px) {
        .flip-tit {
            font-size: 14px;
            line-height: 21px
        }

        .flip-box {
            padding: 30px 10px 0;
            min-height: 200px
        }

        .tm-detail.tm-det.tm-det-left,
        .tm-detail.tm-det.tm-det-right {
            max-width: 450px;
            margin: 0 auto 20px !important;
            width: 100%
        }
    }

    #related_blogs .attachment-post-thumbnail {
        width: 100%;
        height: 220px;
        object-fit: cover;
        margin-bottom: 10px
    }

    .blog_info h3 {
        margin: 0 10px 10px 10px;
        font-size: 17px;
        line-height: 1.4;
        font-weight: 400;
        text-align: left
    }

    .blog_info {
        border: 1px solid #eee;
        background: #f5f5f5;
        -webkit-box-shadow: 0 8px 6px -6px #000;
        -moz-box-shadow: 0 8px 6px -6px #000;
        box-shadow: 0 8px 6px -6px #888;
        min-height: 445px;
        margin-bottom: 30px
    }

    .blog_info .except {
        margin: 0 10px 10px 10px;
        text-align: left
    }

    .pre_data {
        margin: 0 10px 10px 10px;
        overflow: hidden;
        font-weight: 700
    }

    .pre_data .date_dt {
        float: left;
        color: #000
    }

    .pre_data .read_mr {
        float: right
    }

    .pre_data .read_mr a {
        border-bottom: 2px solid;
        padding-bottom: 1px
    }

    #related_blogs h2 {
        text-align: center;
        margin-bottom: 20px
    }

    #related_blogs .row {
        text-align: center
    }

    #related_blogs .col-lg-4 {
        display: inline-block;
        float: none;
        width: 33%
    }

    @media (max-width:768px) {
        .blog_info {
            min-height: auto
        }
    }

    .ce-feature-box-23.service-sec i,
    .flip-box i {
        color: #47b474;
        font-size: 45px;
        line-height: 50px
    }

    .flip-box i {
        color: #47b474;
        font-size: 35px;
        line-height: 70px
    }

    .timeline-row i {
        color: #47b474;
        font-size: 30px;
        line-height: 1
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none
    }

    .banner_content .contentall {
        margin-top: 30px
    }

    .uniq_features ul {
        padding-left: 15px
    }

    .uniq_features ul li {
        margin-bottom: 20px;
        position: relative;
        padding-left: 29px
    }

    .uniq_features ul li:after {
        font-family: FontAwesome;
        top: 4px;
        right: 0;
        padding-right: 10px;
        content: "\f0a9";
        position: absolute;
        left: 0;
        font-size: 20px;
        color: #03b787
    }

    .uniq_features p b {
        font-size: 18px;
    }

    .banner {
        height: auto;
        background-image: url(images/p2p/p2p_banner_bg.webp);
        background-size: cover;
        padding-top: 180px;
        padding-bottom: 0;
        height: 650px;
        position: relative;
    }

    .contentall h1 {
        margin-bottom: 25px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 40px;
    }

    .banner:after {
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        background-image: linear-gradient(to right, #00add8fa, #00c0b0d9);
    }

    .p2b_ban img {
        max-width: 125%;
    }

    .flip-icon-outer img {
        height: 60px;
        position: relative;
        top: 19px;
    }

    .work_pr {
        text-align: center;
        font-weight: 700;
        margin-bottom: 60px;
        color: #000000;
    }

    .lt_row {
        position: relative;
        margin-left: 13%;
    }

    .flip-txt {
        font-size: 14px;
    }

    .work_pr p {
        font-size: 15px;
        line-height: 1.5;
        margin-bottom: 0px;
    }

    .work_ic img {
        height: 50px;
        margin-top: 30px;
        margin-bottom: 15px;
    }

    .work_ic {
        background: #fff;
        width: 100px;
        margin: 0 auto 18px;
        border-radius: 50%;
        height: 100px;
        box-shadow: 0 0 10px #ccc;
    }

    img.arrr {
        width: 100px;
        position: absolute;
        right: -18%;
        top: 40px;
        height: 25px;
    }

    .timeline-center .timeline-row:nth-of-type(odd) .tm-detail {
        margin-bottom: 10px;
    }

    .ben_sec li {
        background: #04bdb70d;
        margin-bottom: 21px;
        border-left: 4px solid #17b5587a;
        font-weight: bold;
        font-size: 15px;
    }

    .ben_sec li i {
        color: #17b559;
        font-size: 24px;
        vertical-align: middle;
        margin-right: 17px;
        width: 50px;
        text-align: center;
        height: 50px;
        background: #f5f5f5;
        padding: 10px;
        line-height: 33px;
    }

    .ben_sec ul {
        padding-left: 0;
    }

    img.be_sc {
        margin-top: 45px;
    }

    .tm-det {
        width: 100%;
    }

    @media only screen and (max-width: 992px) {
        img.arrr {
            width: 64px;
            position: absolute;
            right: -8%;
            top: 40px;
            height: 19px;
        }

        .lt_row {
            position: relative;
            margin-left: 0;
        }

        .banner {
            height: auto;
            padding-bottom: 40px;
        }

        .banner_content .contentall {
            margin-top: 60px;
            max-width: 600px;
            margin-left: auto;
            text-align: center;
            margin-right: auto;
        }

        .p2b_ban img {
            max-width: 80%;
            margin-top: 20px;
        }

        .contentall h1 {
            margin-bottom: 15px;
            line-height: 1.3;
            font-weight: 700;
            font-size: 26px;
        }

        .contentall p {
            margin-bottom: 20px;
        }

        img.sm_img,
        img.be_sc {
            max-width: 80%;
        }

        .work_pr_2 img.arrr,
        .work_pr_4 img.arrr,
        .work_pr_6 img.arrr,
        .work_pr_10 img.arrr {
            display: none;
        }

        .work_pr {
            text-align: center;
            font-weight: 700;
            margin-bottom: 40px;
            max-width: 250px;
            margin: 0 auto 40px;
        }

        .equal-height.work_pr.work_pr_11 {
            position: relative;
            left: 50%;
        }
    }

    @media only screen and (max-width: 768px) {
        .banner {
            padding-top: 30px;
        }

        .flip-box {
            padding: 30px 10px 0;
            min-height: 200px;
            max-width: 450px;
            margin: 0 auto 30px;
            padding-bottom: 30px;
        }

        .flip-tit {
            font-size: 18px;
            line-height: 21px;
        }

        .work_pr p {
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 0px;
        }

        .equal-height.work_pr.work_pr_11 {
            left: 50%;
            position: relative;
        }
    }

    h4.tm-det-tit {
        color: #000000;
        font-weight: 700;
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
        color: #000000;
        line-height: 27px;
        border: 2px solid #ddd;
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
        width: 26%;
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
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->
    <!-- <div class="page-loader">
        <div class="spinner"></div>
    </div> -->
    <div class="main">
        <div class="banner">
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contentall">
                                <h1>Leading Provider of Peer-to-Peer Crypto Exchange Solutions</h1>
                                <p>Top-Tier Customized P2P Crypto Exchange Software</p>
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
                                        data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                                    <a href="{{ url('consultation') }}"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR SPECIALISTS</span></a>
                                </div> 
                                {{-- <a href="#demo" class="nec-btn" id="cyz"
                                    style="border-radius: 30px !important;">SEE A LIVE DEMONSTRATION</a> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                            <div class="p2b_ban"> <img src="{{ asset('images/p2p/p2p_banner.webp') }}"
                                    alt="Develop your P2P Exchange Platform Securely"
                                    title="P2P Exchange Development Company" style="width: 350px"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="common_spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12  pull-right text-center"> <img src="{{ asset('images/p2p/p2p_intro.webp') }}"
                    class="sm_img lazy" alt="P2P Exchange Development" title="P2P Exchange Development Services" style="width: 300px"> </div>
            <div class="col-md-6 col-sm-12 col-xs-12 pull-left">
                <h2 class="sec_tit underline">P2P Exchange Development Solutions</h2>
                <p class="section-subtitle sec-txt1 text-left">In today's fast-paced digital landscape, cryptocurrency is a key focal point for businesses aiming to enhance operational efficiency and reduce transaction costs. Peer-to-peer (P2P) exchange platforms stand out with their decentralized, highly secure, and transparent transaction processes.</p>
                <p class="section-subtitle sec-txt1 text-left">Our team of blockchain specialists excels in crafting sophisticated P2P exchange platforms, leveraging advanced blockchain technology. We offer cutting-edge, white-label solutions designed to build a powerful and scalable P2P exchange tailored to your needs. With our expertise, you can confidently navigate the evolving crypto landscape and achieve your business objectives.</p>
            </div>
        </div>
    </div>
</div>

<div class="common_spacing gray_bg new-features" style="background: #1b0a49;">
    <div class="container">
        <div class=" ">
            <h2 class="sec_tit underline text-center text-white">Key Attributes of Our Peer-to-Peer Exchange Platform</h2>
        </div>
        <div class="row mt40">
            <div class="container container-center">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-random"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Transaction Oversight</strong>Empower users to track and manage their transaction history and pending activities at any time, aiding in the resolution of potential disputes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-gem"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Cross-Chain Digital Asset Support</strong>Facilitate transactions across multiple blockchain networks, broadening your market appeal and strengthening your exchange's presence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-comments"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Integrated Communication</strong>Incorporate a built-in chat feature to enable seamless communication between users, a crucial component for efficient peer-to-peer transactions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-cogs"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Automated Escrow Services</strong>Deploy a sophisticated escrow system that automatically handles token transfers once the buyer meets the seller’s predefined conditions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-info-circle"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Dispute Resolution Platform</strong>Provides a dedicated portal for users to raise and address disputes, with expert mediation to facilitate fair and timely resolutions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-star-half"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">User Feedback System</strong>Enable users to rate and review one another, providing valuable insights and helping future participants make informed decisions.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="common_spacing  ">
    <div class="container">
        <div class="row">
            <h3 class="sec_tit underline text-center" style="width: 100%">Cutting-Edge Features of Our P2P Crypto Exchange</h3>
        </div>
        <div class="row flip-box-row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/cryptocurrency.png') }}"> </div>
                    <h5 class="flip-tit">Diverse Cryptocurrency Integration</h5>
                    <p class="flip-txt">Our platform supports a wide array of cryptocurrencies including BTC, LTC, ETH, USDT, and more, catering to a broad range of digital asset needs.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/translate.png') }}"> </div>
                    <h5 class="flip-tit">Global Multi-Language Accessibility</h5>
                    <p class="flip-txt">We offer extensive multi-language capabilities, ensuring users from every corner of the globe can seamlessly interact with your P2P exchange, enhancing the global reach and user experience.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/tracking.webp') }}"> </div>
                    <h5 class="flip-tit">Advanced Trading Engine</h5>
                    <p class="flip-txt">Our robust trading engine is designed for optimal performance, providing secure and instantaneous auto-matching of buyers and sellers, ensuring a smooth trading experience.</p>
                </div>
            </div>
        </div>
        <div class="row flip-box-row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/portfolio.png') }}"> </div>
                    <h5 class="flip-tit">Streamlined KYC & AML Automation</h5>
                    <p class="flip-txt">Efficient automated KYC and AML processes enable rapid user verification, minimizing fraud and ensuring only legitimate participants are part of the exchange.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/wrench.webp') }}"> </div>
                    <h5 class="flip-tit">Effortless Crypto Swaps</h5>
                    <p class="flip-txt">Enable users to perform secure crypto swaps directly on the platform, removing third-party intermediaries and safeguarding the integrity of transactions.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/gateway.png') }}"> </div>
                    <h5 class="flip-tit">Seamless Payment Gateway Integration</h5>
                    <p class="flip-txt">Integrate multiple payment gateways to facilitate swift and efficient currency transfers, enhancing the overall transaction experience for your users.</p>
                </div>
            </div>
        </div>
        <div class="row flip-box-row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/authentication.png') }}"> </div>
                    <h5 class="flip-tit">Advanced Multi-Factor Authentication</h5>
                    <p class="flip-txt">Implement advanced multi-factor authentication methods, including email verification and Google 2FA, for both administrators and users to ensure secure and reliable transactions.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/wallet.png') }}"> </div>
                    <h5 class="flip-tit">Versatile Multi-Currency Wallet</h5>
                    <p class="flip-txt">Our platform supports a multi-currency wallet, allowing users to store various digital assets with top-tier security measures in place.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/admin.png') }}"> </div>
                    <h5 class="flip-tit">Comprehensive Admin Dashboard</h5>
                    <p class="flip-txt">Access a robust admin dashboard designed for the streamlined management of critical functions like escrow and dispute resolution, ensuring efficient platform oversight.</p>
                </div>
            </div>
            <div class="col-md-offset-4 col-md-4 col-sm-6 col-xs-12 feet_ls">
                <div class="equal-height white-flip-box flip-box">
                    <div class="flip-icon-outer"> <img src="{{ asset('images/p2p/meeting.webp') }}"> </div>
                    <h5 class="flip-tit">Customizable Trading Preferences</h5>
                    <p class="flip-txt">Enable users to select their preferred trading partners, enhancing security and streamlining the trading experience for smoother and more personalized transactions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="technologies">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="sec_tit underline text-center text-white">Harness a Proven P2P Exchange Blueprint for Your New Platform</h3>
            <p class="text-center white">The rise of peer-to-peer cryptocurrency exchanges has reshaped the landscape, emphasizing community-driven, non-intrusive operations. If you're gearing up to launch a P2P exchange, why not capitalize on the successful framework of established applications to enhance your business potential?</p>
            <ul>
                <li>
                    <img class="lazy" src="{{ asset('images/nftm/icons/binance-usd.webp') }}">
                    <p class="white">Binance P2P</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/nftm/icons/KuCoin.webp') }}">
                    <p class="white"></p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/nftm/icons/bybit.webp') }}">
                    <p class="white"></p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/nftm/icons/okx.webp') }}">
                    <p class="white"></p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/nftm/icons/huobi.webp') }}">
                    <p class="white"></p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/nftm/icons/paxful.webp') }}" style="width: 60px;">
                    <p class="white">Paxful P2P</p>
                </li>
            </ul>

            <div class="clearfix"></div>

            <div class="text-center cta_mine txt"> <a
                    class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                    href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> <a
                    href="#newsletter-form-sec"
                    class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with our
                        Experts</span></a> </div>

        </div>
    </div>
</div>


<div class="pr_wo common_spacing">
    <div class="container">
        <div class="row">
            <h3 class="sec_tit underline text-center" style="width: 100%">Understanding the Operation of P2P Crypto Exchanges</h3>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="equal-height work_pr work_pr_1">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/registration.png') }}"> </div>
                    <div class="work_cnt">
                        <p>User Registration</p>
                    </div> <img class="arrr lazy" src="{{ asset('images/p2p/arw.webp') }}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="equal-height work_pr work_pr_2">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/kyc.png') }}"> </div>
                    <div class="work_cnt">
                        <p>KYC/AML Verification</p>
                    </div> <img class="arrr lazy" src="{{ asset('images/p2p/arw.webp') }}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="equal-height work_pr work_pr_3">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/order.png') }}"> </div>
                    <div class="work_cnt">
                        <p>Order Placement</p>
                    </div> <img class="arrr lazy" src="{{ asset('images/p2p/arw.webp') }}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="equal-height work_pr work_pr_4">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/resume.png') }}"> </div>
                    <div class="work_cnt">
                        <p>Wallet Address Creation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="equal-height work_pr work_pr_5">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/buy-sell.png') }}"> </div>
                    <div class="work_cnt">
                        <p>Matching Orders Between Buyers and Sellers</p>
                    </div> <img class="arrr lazy" src="{{ asset('images/p2p/arw.webp') }}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="equal-height work_pr work_pr_6">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/check.webp') }}"> </div>
                    <div class="work_cnt">
                        <p>Order Confirmation by Buyers and Sellers</p>
                    </div> <img class="arrr lazy" src="{{ asset('images/p2p/arw.webp') }}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="equal-height work_pr work_pr_7">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/smart-contracts.webp') }}"> </div>
                    <div class="work_cnt">
                        <p>Smart Contract Escrow Secures the Assets</p>
                    </div> <img class="arrr lazy" src="{{ asset('images/p2p/arw.webp') }}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="equal-height work_pr work_pr_8">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/ecommerce.png') }}"> </div>
                    <div class="work_cnt">
                        <p>Buyer Completes Payment</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 lt_row ">
                <div class="equal-height work_pr work_pr_9">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/bill.png') }}"> </div>
                    <div class="work_cnt">
                        <p>Seller Confirms Receipt of Payment</p>
                    </div> <img class="arrr lazy" src="{{ asset('images/p2p/arw.webp') }}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="equal-height work_pr work_pr_10">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/wallet.png') }}"> </div>
                    <div class="work_cnt">
                        <p>Escrow Releases Asset to Buyer’s Wallet</p>
                    </div> <img class="arrr lazy" src="{{ asset('images/p2p/arw.webp') }}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 work_pr_ls">
                <div class="equal-height work_pr work_pr_11">
                    <div class="work_ic"> <img class="lazy" src="{{ asset('images/p2p/digital-wallet.png') }}"> </div>
                    <div class="work_cnt">
                        <p>Buyer Stores Asset in Cold Wallet</p>
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
            {{-- <div class="cta_mine">
                <a href="#"
                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our
                        Experts</span>
                </a>
            </div> --}}
        </div>
    </div>
</div>
<style type="text/css">
    .text-center {

        text-align: center !important;
    }

    .design {
        background: #000;
        border-radius: 20px;
        padding: 5px 0 1px;
        margin: 15px auto;
    }

    .design h5,
    .design p {
        color: #fff
    }

    #demo {
        padding: 30px 0;
    }

    #demo .container {
        padding: 40px 20px;
        border: 5px solid #eee;
        border-radius: 15px;
    }

    .nectar-button:hover {
        color: #ffffff !important;
        /* zoom: 0.98; */
    }
</style>


<style type="text/css">
    .theme-color-bg,
    .data table th {
        background: #140050 !important;
    }

    .data table td,
    .data table th {
        padding: 10px;
    }
</style>

<div class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <h2 class="sec_tit underline text-center" style="width: 100%">The Process Behind Crafting Your Custom P2P Exchange</h2>
        </div>
        <div class="col-md-12 mt30">
            <div class="timeline-center" >
                <div class="timeline-row row m-0">
                    <div class="tm-detail tm-det tm-det-left">
                        <h4 class="common_h4 mb10 tm-det-tit">Initial Assessment and Customization</h4>
                        <ul class="process-list">
                            <li>
                                <p>Conduct thorough research and gather requirements to tailor an exchange that aligns with your business strategy.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-icon roadmap-icon-outer"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                </div>
                <div class="timeline-row row m-0">
                    <div class="tm-detail tm-det tm-det-right">
                        <h4 class="mb10 common_h4 tm-det-tit">Technology Integration and Compliance</h4>
                        <ul class="process-list">
                            <li>
                                <p> Implement essential technologies, enhance UX/UI, ensure robust security, and adhere to legal standards relevant to your operational region. </p>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-icon roadmap-icon-outer"> <i class="fa fa-desktop" aria-hidden="true"></i> </div>
                </div>
                <div class="timeline-row row m-0">
                    <div class="tm-detail tm-det tm-det-left">
                        <h4 class="common_h4 mb10 tm-det-tit">Trading Engine Setup</h4>
                        <ul class="process-list">
                            <li>
                                <p>Install and configure the trading engine for seamless operations.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-icon roadmap-icon-outer"> <i class="fa fa-cogs" aria-hidden="true"></i> </div>
                </div>
                <div class="timeline-row row m-0">
                    <div class="tm-detail tm-det tm-det-right">
                        <h4 class="mb10 common_h4 tm-det-tit">Blockchain Integration</h4>
                        <ul class="process-list">
                            <li>
                                <p>Integrate multiple blockchains to enhance platform versatility.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-icon roadmap-icon-outer"> <i class="fa fa-coins" aria-hidden="true"></i> </div>
                </div>
                <div class="timeline-row row m-0">
                    <div class="tm-detail tm-det tm-det-left">
                        <h4 class="common_h4 mb10 tm-det-tit">Token/Coin Listing</h4>
                        <ul class="process-list">
                            <li>
                                <p>Add and list various tokens and coins to diversify trading options.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-icon roadmap-icon-outer"> <i class="fa fa-list" aria-hidden="true"></i> </div>
                </div>
                <div class="timeline-row row m-0">
                    <div class="tm-detail tm-det tm-det-right">
                        <h4 class="mb10 common_h4 tm-det-tit">Platform Delivery</h4>
                        <ul class="process-list">
                            <li>
                                <p>Finalize and deliver the fully functional exchange platform.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-icon roadmap-icon-outer"> <i class="fa fa-random" aria-hidden="true"></i> </div>
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
            <a class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                href="{{ url('consultation') }}" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a>

        </div>
    </div>
</div>

</div>
<div class="ben_sec common_spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 section-header">
                <div class="section-header" >
                    <h2 class="sec_tit underline text-left">Unmatched Benefits of Our P2P Exchange Solutions</h2>
                </div>
                <ul>
                    <li><i class="fa fa-credit-card" aria-hidden="true"></i>Accelerated and risk-free transactions</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Enhanced payment security</li>
                    <li><i class="fa fa-usd" aria-hidden="true"></i>Minimized trading expenses</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Round-the-clock customer support</li>
                    <li><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Advanced blockchain technologies</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12  pull-left text-center"> <img class="be_sc lazy"
                    src="{{ asset('images/p2p/p2p_admin.png') }}" alt="P2P Exchange Platform Development"
                    title="Benefits Of Our P2P Exchange Platform"> </div>

        </div>
    </div>
</div>

<div class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <h2 class="sec_tit underline text-center" style="width: 100%">Introducing Our Premium White Label P2P Crypto Exchange Solution</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="" src="{{ asset('images/p2p/exclusive-software.webp') }}" alt="P2P Exchange Software Development"
                    title="Our Exclusive White Label P2P Crypto Exchange Software">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 ">
                <p class="text-justify">Our state-of-the-art white-label P2P crypto exchange software provides a swift and efficient pathway to launching your P2P trading platform. Amid the myriad of options available, our solution stands out for its reliability, security, and rapid deployment capabilities.
                    <br><br>
                    Designed to support multiple platforms with multi-chain functionality, our solution ensures seamless connectivity across diverse blockchain networks, facilitating smooth transactions and exchanges of crypto assets. Fully customizable to align with your specific business needs, our white-label solution is crafted with a focus on delivering a user-centric experience.
                    <br><br>
                    With our extensive industry knowledge and expertise in crypto business development, we meticulously design and build your product to provide an intuitive and engaging trading experience. Our team of business strategists and development experts will guide you in deploying the most advanced and future-ready P2P crypto exchange platform using our cutting-edge, market-ready solutions.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- <div class="common_spacing gray_bg">
    <div class="container">
        <div class="row">

            <h3 class="sec_tit mt20 underline text-center">FAQ</h3>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="faq-content">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq1">
                                        <span>How does a P2P Exchange work?</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="faq1" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body"> A peer-to-peer exchange platform is completely decentralized.
                                    Thus, it eliminates the involvement of third parties managing the customer funds and
                                    an order book to manage the buy/sell requests. Instead, it allows customers to
                                    exchange directly peer-to-peer between themselves and manage their funds. </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq2">
                                        <span>What are the advantages of P2P exchange? </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body"> A p2p exchange is highly advantageous in the aspect of helping
                                    customers with highly-secure, quick, efficient, seamless transactions. And as it
                                    does not involve a third party, it is risk-free, hassle-free, time-saving, and
                                    cost-effective. </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq3">
                                        <span>How much does it cost to build a Peer to Peer exchange? </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body"> The cost of building a p2p exchange varies from customer to
                                    customer according to their required features and customization preferences.
                                    However, acquiring ready-made white label solutions will cost way less than
                                    gathering equipment and building the exchange from scratch. </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq4">
                                        <span> What are the benefits of having a p2p exchange?</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body"> There are numerous benefits involved with having a p2p
                                    cryptocurrency exchange. Some of the significant ones include direct globalised
                                    transactions, improved user privacy, prevention of fraudulent, cost-effective
                                    business, enhanced security, etc. </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq5">
                                        <span>How to develop a P2P crypto exchange platform?</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body"> Developing a p2p crypto exchange platform from scratch will
                                    consume ample time and money, also involves technical factors. The better choice is
                                    to obtain white label p2p exchange solutions from a sort after company, which is
                                    reliable, quick to deploy, integrated with quality technical elements, and
                                    cost-effective. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'How does a P2P Exchange operate?',
            'ans' => "A P2P exchange facilitates direct transactions between users without intermediaries. It connects buyers and sellers directly through a decentralized platform, where trades are executed based on mutual agreement and secured via smart contracts."
        ],
        [
            'ques' => 'What are the benefits of using a P2P exchange?',
            'ans' => "P2P exchanges offer lower fees due to the elimination of middlemen, enhanced privacy, and greater control over trades. Users can enjoy direct peer-to-peer interactions, making transactions more transparent and efficient."
        ],
        [
            'ques' => 'What is the cost to develop a Peer-to-Peer exchange?',
            'ans' => "The cost to build a P2P exchange varies based on complexity, features, and customization. Factors include platform design, technology integration, and security measures. Generally, it involves a significant investment reflecting the desired functionality and scalability."
        ],
        [
            'ques' => 'What advantages does a P2P exchange offer?',
            'ans' => "A P2P exchange provides reduced transaction costs, increased privacy, and faster trades. It eliminates reliance on traditional financial institutions, offering a more streamlined and user-controlled trading experience."
        ],
        [
            'ques' => 'How is a P2P crypto exchange developed?',
            'ans' => "Developing a P2P crypto exchange involves defining requirements, integrating essential technologies, and building a secure platform. Key steps include designing the user interface, implementing blockchain solutions, and ensuring compliance with regulatory standards."
        ],
    ],
])

</div>
</div>
</div>
<!-- scripts inlcluded -->
<script src="js/vendor.js" type="a712837f0490aaf6ff2ebcaa-text/javascript"></script>
<script src="js/plugins.js" type="a712837f0490aaf6ff2ebcaa-text/javascript"></script>
<script src="js/main.js" type="a712837f0490aaf6ff2ebcaa-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="a712837f0490aaf6ff2ebcaa-text/javascript"></script>
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    $("#phone21").intlTelInput({
        utilsScript: "sto-baf/utils.js"
    });
    $("#phone22").intlTelInput({
        utilsScript: "sto-baf/utils.js"
    });
    $("#phone23").intlTelInput({
        utilsScript: "sto-baf/utils.js"
    });
    $("#phone24").intlTelInput({
        utilsScript: "sto-baf/utils.js"
    });
</script>
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    $('.home-talk-experts').click(function() {
        $('html, body').animate({
            scrollTop: $('#newsletter-form-sec').offset().top
        }, 2000);
    });
    $('.uniq_features').click(function() {
        $('html, body').animate({
            scrollTop: $('#uniq_features').offset().top
        }, 2000);
    });
    $('.view_demo').click(function() {
        $('html, body').animate({
            scrollTop: $('.view_demo_sec').offset().top
        }, 2000);
    });
</script>
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    $('.view_pricing').click(function() {
        $('html, body').animate({
            scrollTop: $('#pricing-section').offset().top
        }, 2000);
    });
</script>
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    var url = window.location.href;
    $('#url').val(url);
</script>
<script src="js/jquery.mCustomScrollbar.concat.min.js" type="a712837f0490aaf6ff2ebcaa-text/javascript"></script>
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    $(".pricing-body").mCustomScrollbar({
        theme: "minimal"
    });
</script>
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var lazyloadImages = document.querySelectorAll("img.lazy");
        var lazyloadThrottleTimeout;

        function lazyload() {
            if(lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }
            lazyloadThrottleTimeout = setTimeout(function() {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function(img) {
                    if(img.offsetTop < (window.innerHeight + scrollTop)) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                    }
                });
                if(lazyloadImages.length == 0) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        }
        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
    });
</script>

<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    { 
"@context": "http://schema.org/", 
"@type": "product", 
"image": "https://www.blockchainappfactory.com/images/og_images/p2p-exchange-development.webp", 
"description": "Collaborate with Blockchain App Factory and attain a reliable, decentralized, peer-peer exchange platform software at cost-effective prices.", 
"brand": "Blockchain App Factory", 
"name": "P2P Crypto Exchange Development", 
"aggregateRating": 
{ 
"@type": "AggregateRating", 
"ratingValue": "4.9", 
"reviewCount": "230" 
} 
}

</script>
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

    .dropdown-menu {
        /* background-color: rgb(11 53 113); */
        backdrop-filter: blur(23px);
        box-shadow: 0 12px 28px 1px rgb(0 0 0 / 15%), 0 2px 4px 0 rgb(255 255 255 / 50%);
        border: 1px solid #ffffff12;
        transform: translate(0, 0);
        border-radius: 5px !important;
        transition: all 0.2s ease-out;
        padding: 5px 10px;
    }

    .dropdown-menu>li>a {
        color: #fff;
        border-radius: 5px;
        padding: 3px 7px;
    }

    .dropdown-menu>li>a:hover {
        color: #23417f !important
    }

    .dropdown-menu>li>a:hover .caret {
        border-left-color: #23417f !important;
    }

    @media (max-width: 767px) {
        .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            box-shadow: none;
        }

        .navbar-nav .open .dropdown-menu>li>a,
        .navbar-nav .open .dropdown-menu .dropdown-header {
            padding: 5px 15px 5px 25px;
        }

        .navbar-nav .open .dropdown-menu>li>a {
            line-height: 20px;
        }

        .navbar-nav .open .dropdown-menu>li>a:hover,
        .navbar-nav .open .dropdown-menu>li>a:focus {
            /*background-image: none;*/
        }
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

<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    +function($){"use strict";var backdrop=".dropdown-backdrop";var Dropdownhover=function(element,options){this.options=options;this.$element=$(element);var that=this;this.dropdowns=this.$element.hasClass("dropdown-toggle")?this.$element.parent().find(".dropdown-menu").parent(".dropdown"):this.$element.find(".dropdown");if(!options.onClick){this.dropdowns.each(function(){$(this).on("mouseenter.bs.dropdownhover",function(e){that.show($(this).children("a, button"))})});this.dropdowns.each(function(){$(this).on("mouseleave.bs.dropdownhover",function(e){that.hide($(this).children("a, button"))})})}else{this.dropdowns.each(function(){$(this).children("a, button").on("click.bs.dropdownhover",function(e){var isActive=$(this).parent().hasClass("open");isActive?that.hide($(this)):that.show($(this))})})}};Dropdownhover.TRANSITION_DURATION=300;Dropdownhover.DELAY=150;Dropdownhover.TIMEOUT;Dropdownhover.DEFAULTS={onClick:false,animations:["fadeInDown","fadeInRight","fadeInUp","fadeInLeft"]};function getParent($this){var selector=$this.attr("data-target");if(!selector){selector=$this.attr("href");selector=selector&&/#[A-Za-z]/.test(selector)&&selector.replace(/.*(?=#[^\s]*$)/,"")}var $parent=selector&&$(document).find(selector);return $parent&&$parent.length?$parent:$this.parent()}function clearMenus(e){if(e&&e.which===3)return;$(backdrop).remove();$('[data-hover="dropdown"]').each(function(){var $this=$(this);var $parent=getParent($this);var relatedTarget={relatedTarget:this};if(!$parent.hasClass("open"))return;if(e&&e.type=="click"&&/input|textarea/i.test(e.target.tagName)&&$.contains($parent[0],e.target))return;$parent.trigger(e=$.Event("hide.bs.dropdownhover",relatedTarget));if(e.isDefaultPrevented())return;$this.attr("aria-expanded","false");$parent.removeClass("open").trigger($.Event("hidden.bs.dropdownhover",relatedTarget))})}Dropdownhover.prototype.show=function(_dropdownLink){var $this=$(_dropdownLink);window.clearTimeout(Dropdownhover.TIMEOUT);$(".dropdown").not($this.parents()).each(function(){$(this).removeClass("open")});var effect=this.options.animations[0];if($this.is(".disabled, :disabled"))return;var $parent=$this.parent();var isActive=$parent.hasClass("open");if(!isActive){if("ontouchstart"in document.documentElement&&!$parent.closest(".navbar-nav").length){$(document.createElement("div")).addClass("dropdown-backdrop").insertAfter($(this)).on("click",clearMenus)}var $dropdown=$this.next(".dropdown-menu");$parent.addClass("open");$this.attr("aria-expanded",true);$parent.siblings().each(function(){if(!$(this).hasClass("open")){$(this).find('[data-hover="dropdown"]').attr("aria-expanded",false)}});var side=this.position($dropdown);switch(side){case"top":effect=this.options.animations[2];break;case"right":effect=this.options.animations[3];break;case"left":effect=this.options.animations[1];break;default:effect=this.options.animations[0];break}$dropdown.addClass("animated "+effect);var transition=$.support.transition&&$dropdown.hasClass("animated");transition?$dropdown.one("bsTransitionEnd",function(){$dropdown.removeClass("animated "+effect)}).emulateTransitionEnd(Dropdownhover.TRANSITION_DURATION):$dropdown.removeClass("animated "+effect)}return false};Dropdownhover.prototype.hide=function(_dropdownLink){var that=this;var $this=$(_dropdownLink);var $parent=$this.parent();var $this_delay=$this.data("dropdown-hover-delay");Dropdownhover.TIMEOUT=window.setTimeout(function(){$parent.removeClass("open");$this.attr("aria-expanded",false)},$this_delay?$this_delay:Dropdownhover.DELAY)};Dropdownhover.prototype.position=function(dropdown){var win=$(window);dropdown.css({bottom:"",left:"",top:"",right:""}).removeClass("dropdownhover-top");var viewport={top:win.scrollTop(),left:win.scrollLeft()};viewport.right=viewport.left+win.width();viewport.bottom=viewport.top+win.height();var bounds=dropdown.offset();bounds.right=bounds.left+dropdown.outerWidth();bounds.bottom=bounds.top+dropdown.outerHeight();var position=dropdown.position();position.right=bounds.left+dropdown.outerWidth();position.bottom=bounds.top+dropdown.outerHeight();var side="";var isSubnow=dropdown.parents(".dropdown-menu").length;if(isSubnow){if(position.left<0){side="left";dropdown.removeClass("dropdownhover-right").addClass("dropdownhover-left")}else{side="right";dropdown.addClass("dropdownhover-right").removeClass("dropdownhover-left")}if(bounds.left<viewport.left){side="right";dropdown.css({left:"100%",right:"auto"}).addClass("dropdownhover-right").removeClass("dropdownhover-left")}else if(bounds.right>viewport.right){side="left";dropdown.css({left:"auto",right:"100%"}).removeClass("dropdownhover-right").addClass("dropdownhover-left")}if(bounds.bottom>viewport.bottom){dropdown.css({bottom:"auto",top:-(bounds.bottom-viewport.bottom)})}else if(bounds.top<viewport.top){dropdown.css({bottom:-(viewport.top-bounds.top),top:"auto"})}}else{var parentLi=dropdown.parent(".dropdown");var pBounds=parentLi.offset();pBounds.right=pBounds.left+parentLi.outerWidth();pBounds.bottom=pBounds.top+parentLi.outerHeight();if(bounds.right>viewport.right){dropdown.css({left:-(bounds.right-viewport.right),right:"auto"})}if(bounds.bottom>viewport.bottom&&pBounds.top-viewport.top>viewport.bottom-pBounds.bottom||dropdown.position().top<0){side="top";dropdown.css({bottom:"100%",top:"auto"}).addClass("dropdownhover-top").removeClass("dropdownhover-bottom")}else{side="bottom";dropdown.addClass("dropdownhover-bottom")}}return side};function Plugin(option){return this.each(function(){var $this=$(this);var data=$this.data("bs.dropdownhover");var settings=$this.data();if($this.data("animations")!==undefined&&$this.data("animations")!==null)settings.animations=$.isArray(settings.animations)?settings.animations:settings.animations.split(" ");var options=$.extend({},Dropdownhover.DEFAULTS,settings,typeof option=="object"&&option);if(!data)$this.data("bs.dropdownhover",data=new Dropdownhover(this,options))})}var old=$.fn.dropdownhover;$.fn.dropdownhover=Plugin;$.fn.dropdownhover.Constructor=Dropdownhover;$.fn.dropdownhover.noConflict=function(){$.fn.dropdownhover=old;return this};$(document).ready(function(){$('[data-hover="dropdown"]').each(function(){var $target=$(this);if("ontouchstart"in document.documentElement){Plugin.call($target,$.extend({},$target.data(),{onClick:true}))}else{Plugin.call($target,$target.data())}})})}(jQuery);
     
</script>

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

    /*@media  (max-width: 1024px){
    .header-nabar-icon .pull-right, .pull-right-tow {
      background-color: #47b475;
    font-weight: 700;
    font-size: 15px;
    padding: 3px 15px;
    margin-right: 0px;
    position: relative;
    right: 16px;
    bottom: -30px;
    }
}*/

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

    /*.color-btn1:before{
    content: "";
    background: rgba(0,0,0,0.9);
    border-radius: 50px;
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    z-index: -1;
}*/
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

    /*@media (max-width: 1024px){
    .sticky_form_bp {
        display:block !important;
}
}

@media (max-width: 320px){
    .sticky_form_bp  {
        display: block;
        
}
}*/

    /*menu height mobile view*/
    /*@media screen and (max-width: 320px) {
    .main {
        margin-top: 10px !important;
    }
}*/
    /*@media screen and (max-width: 768px) {
    .main {
        margin-top: 10px !important;
    }
}*/
</style>
<div class="sticky-form">
    <div class="formdiv">
        <form class="form-side" id="mailForm_sticky" method="post" action="">
            <h4>Connect With Us</h4> <button type="button" class="close" aria-label="Close quick contact"><i
                    class="fa fa-times-circle" aria-hidden="true"></i></button>
            <hr>
            <div class="form-group"><label for="name">Name</label><input type="text" class="form-control" name="name"
                    id="name_sticky" placeholder="Your Name"> </div>
            <div class="form-group"><label for="email">Email Address</label><input type="email" class="form-control"
                    name="email" id="email_sticky" placeholder="Your Email"> </div>
            <div class="form-group"><label for="skype">Skype</label><input type="text" class="form-control" name="skype"
                    id="skype_sticky" placeholder="Your Skype"> </div>
            <div class="form-group">
                <label>Phone</label>
                <input id="phone_sticky" name="phone_dummy" type="text" required=""
                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                    data-cf-modified-a712837f0490aaf6ff2ebcaa-="">
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/p2p-exchange-development">
            </div>
            <div class="form-group"><label>messages</label><textarea placeholder="Write text here..."
                    id="textarea_sticky" name="message"></textarea></div>
            <div class="form-group"><input type="button" id="submit" class="common_send_btn" value="send message">
            </div>
        </form>
    </div>
</div>

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

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="a712837f0490aaf6ff2ebcaa-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="a712837f0490aaf6ff2ebcaa-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="a712837f0490aaf6ff2ebcaa-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    $.fn.jQuerySimpleCounter = function( options ) {
        var settings = $.extend({
            start:  0,
            end:    100,
            easing: 'swing',
            duration: 400,
            complete: ''
        }, options );
        var thisElement = $(this);
        $({count: settings.start}).animate({count: settings.end}, {
            duration: settings.duration,
            easing: settings.easing,
            step: function() {
                var mathCount = Math.ceil(this.count);
                thisElement.text(mathCount);
            },
            complete: settings.complete
        });
    };
    $('#number1').jQuerySimpleCounter({end: 500,duration: 3000});
    $('#number2').jQuerySimpleCounter({end: 200,duration: 3000});
    $('#number3').jQuerySimpleCounter({end: 100,duration: 2000});
    /* AUTHOR LINK */
    $('.about-me-img').hover(function(){
            $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
        }, function(){
            $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
    });
    $(".close").click(function(e) {
        $('body').removeClass('fixedPosition full-width');
        $(".sticky-form .formdiv").removeClass('show');
        e.stopPropagation();
    });
    $("#phone_common").intlTelInput({
        utilsScript: "build/js/utils.js",
        dropdownContainer: 'body'
    });
    $("#phone_sticky").intlTelInput({
        utilsScript: "build/js/utils.js",
        dropdownContainer: 'body'
    });
    $("#phone_banner").intlTelInput({
        utilsScript: "build/js/utils.js",
        dropdownContainer: 'body'
    });
    $('.home-talk-experts').click(function() {
        $('html, body').animate({
            scrollTop: $('#newsletter-form-sec').offset().top
        }, 2000);
    });
    var url = window.location.href;
    $('#url').val(url);
    // alert(url);
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    adroll_adv_id = "WDBK654P6ZFTPNTJ7HT4W5";
    adroll_pix_id = "BYKIZBXZ5BBFHHTUURKSLV";
    (function() {
        var _onload = function() {
            if(document.readyState && !/loaded|complete/.test(document.readyState)) {
                setTimeout(_onload, 10);
                return
            }
            if(!window.__adroll_loaded) {
                __adroll_loaded = true;
                setTimeout(_onload, 50);
                return
            }
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] || document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if(window.addEventListener) {
            window.addEventListener('load', _onload, false);
        } else {
            window.attachEvent('onload', _onload)
        }
    }());
    function validateEmail($email) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test($email);
}

function validatePhone($phone) {
    var pattern1 = new RegExp("[0-9]+");
    return pattern1.test($phone);
}
// For Common Newsletter AjaxMail Function
$(".common_send_btn").click(function() {
    function loader() {
        $('<div id="loader"></div>').insertAfter(".common_send_btn");
        $(".common_send_btn").next().addClass("loading");
        setTimeout(function() {
            $(".common_send_btn").next().remove();
        }, 7000);
    }
    var formname = $(this).parent().parent().attr('id');
    // alert(formname);
    $(".ajax-loader").hide();
    var name = $(this).parent().parent().parent().find('input[name="name"]').val();
    var email = $(this).parent().parent().parent().find('input[name="email"]').val();
    var phone = $(this).parent().parent().parent().find('input[name="phone_dummy"]').val();
    if(name != '') {
        if((email != '') && (validateEmail(email))) {
            if((phone != '') && (validatePhone(phone))) {
                var phone_title = $("#" + formname + " " + ".selected-flag").attr("title").replace(/ *\([^)]*\) */g, "");
                $(this).parent().parent().parent().find('input[name="phone"]').val(phone_title + " " + phone);
                //$(this).parent().parent().parent().find('input[name="phone"]').val($("#"+formname+" "+".selected-flag").attr("title")+" "+phone);
                // console.log( $("#"+formname).serialize() );
                $(this).attr("disabled", true);
                $(this).addClass('disabled');
                loader();
                $(".ajax-loader").hide();
                var formdata = $("#" + formname).serialize() + '&_token=' + $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "ajaxmail.php",
                    type: "POST",
                    data: formdata,
                    success: function(result) {
                        //window.location.href="success";
                        if(result == 1) {
                            // alert("Mail Sent Successfully");
                            window.location.href = "success";
                            return false;
                        } else {
                            alert("Something went wrong, please try again later.");
                            return false;
                        }
                        $(".ajax-loader").hide();
                    },
                    error: function() {
                        window.location.href = "success";
                    }
                });
            } else if(!validatePhone(phone)) {
                alert("Please type correct mobile number format");
            } else {
                alert("please type your phone number");
            }
        } else if(!validateEmail(email)) {
            alert("Please type correct email format");
        } else {
            alert("please type your email");
        }
    } else {
        alert("please fill all fields");
    }
});
$(".submit_send").click(function() {
    function loader() {
        $('<div id="mloader"></div>').insertAfter(".submit_send");
        $(".submit_send").next().addClass("loading");
        setTimeout(function() {
            $(".submit_send").next().remove();
        }, 7000);
    }
    var formname = $(this).parent().parent().parent().attr('id');
    // alert(formname);
    $(".ajax-loader").hide();
    var name = $(this).parent().parent().parent().find('input[name="name"]').val();
    var email = $(this).parent().parent().parent().find('input[name="email"]').val();
    var phone = $(this).parent().parent().parent().find('input[name="phone_dummy"]').val();
    // console.log(name, email, phone);
    if(name != '') {
        if((email != '') && (validateEmail(email))) {
            if((phone != '') && (validatePhone(phone))) {
                $(this).attr("disabled", true);
                $(this).addClass('disabled');
                loader();
                $(".ajax-loader").hide();
                var phone_title = $("#" + formname + " " + ".selected-flag").attr("title").replace(/ *\([^)]*\) */g, "");
                $(this).parent().parent().parent().find('input[name="phone"]').val(phone_title + " " + phone);
                //$(this).parent().parent().parent().find('input[name="phone"]').val($("#"+formname+" "+".selected-flag").attr("title")+" "+phone);
                var formdata = $("#" + formname).serialize() + '&_token=' + $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "ajaxmail.php",
                    type: "POST",
                    data: formdata,
                    success: function(result) {
                        console.log(result);
                        if(result == 1) {
                            // alert("Mail Sent Successfully");
                            window.location.href = "success";
                            return false;
                        } else {
                            alert("Something went wrong, please try again later.");
                            return false;
                        }
                        $(".ajax-loader").hide();
                    }
                });
            } else if(!validatePhone(phone)) {
                alert("Please type correct mobile number format");
            } else {
                alert("please type your mobile number");
            }
        } else if(!validateEmail(email)) {
            alert("Please type correct email format");
        } else {
            alert("please type your email");
        }
    } else {
        alert("please fill all fields");
    }
});
$(".close_send").click(function() {
    function loader() {
        $('<div id="mloader"></div>').insertAfter(".close_send");
        $(".close_send").next().addClass("loading");
        setTimeout(function() {
            $(".close_send").next().remove();
        }, 7000);
    }
    var formname = $(this).parent().parent().parent().attr('id');
    // alert(formname);
    $(".ajax-loader").hide();
    var name = $(this).parent().parent().parent().find('input[name="name"]').val();
    var email = $(this).parent().parent().parent().find('input[name="email"]').val();
    var phone = $(this).parent().parent().parent().find('input[name="phone_dummy"]').val();
    // console.log(name, email, phone);
    if(name != '') {
        if((email != '') && (validateEmail(email))) {
            if((phone != '') && (validatePhone(phone))) {
                $(this).attr("disabled", true);
                $(this).addClass('disabled');
                loader();
                $(".ajax-loader").hide();
                var phone_title = $("#" + formname + " " + ".selected-flag").attr("title").replace(/ *\([^)]*\) */g, "");
                $(this).parent().parent().parent().find('input[name="phone"]').val(phone_title + " " + phone);
                //$(this).parent().parent().parent().find('input[name="phone"]').val($("#"+formname+" "+".selected-flag").attr("title")+" "+phone);
                var formdata = $("#" + formname).serialize() + '&_token=' + $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "ajaxmail.php",
                    type: "POST",
                    data: formdata,
                    success: function(result) {
                        console.log(result);
                        if(result == 1) {
                            // alert("Mail Sent Successfully");
                            window.location.href = "success";
                            return false;
                        } else {
                            alert("Something went wrong, please try again later.");
                            return false;
                        }
                        $(".ajax-loader").hide();
                    }
                });
            } else if(!validatePhone(phone)) {
                alert("Please type correct mobile number format");
            } else {
                alert("please type your mobile number");
            }
        } else if(!validateEmail(email)) {
            alert("Please type correct email format");
        } else {
            alert("please type your email");
        }
    } else {
        alert("please fill all fields");
    }
});
/*-- pdf mail --*/
$(".submit_send_pdf").click(function() {
    function loader() {
        $('<div id="loader"></div>').insertAfter(".submit_send_pdf");
        $(".submit_send_pdf").next().addClass("loading");
        setTimeout(function() {
            $(".submit_send_pdf").next().remove();
        }, 7000);
    }
    var formname = $(this).parent().parent().parent().attr('id');
    $(".ajax-loader").hide();
    var name = $(this).parent().parent().parent().find('input[name="name"]').val();
    var email = $(this).parent().parent().parent().find('input[name="email"]').val();
    var phone = $(this).parent().parent().parent().find('input[name="phone_dummy"]').val();
    // console.log(name, email, phone);
    if(name != '') {
        if((email != '') && (validateEmail(email))) {
            if((phone != '') && (validatePhone(phone))) {
                $(this).attr("disabled", true);
                $(this).addClass('disabled');
                $(".ajax-loader").hide();
                loader();
                var phone_title = $("#" + formname + " " + ".selected-flag").attr("title").replace(/ *\([^)]*\) */g, "");
                $(this).parent().parent().parent().find('input[name="phone"]').val(phone_title + " " + phone);
                //$(this).parent().parent().parent().find('input[name="phone"]').val($("#"+formname+" "+".selected-flag").attr("title")+" "+phone);
                var formdata = $("#" + formname).serialize() + '&_token=' + $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "pdfmail.php",
                    type: "POST",
                    data: formdata,
                    success: function(result) {
                        console.log(result);
                        if(result == 1) {
                            // alert("Mail Sent Successfully");
                            window.open("https://www.blockchainappfactory.com/pdf/BlockchainAppFactory.pdf", '_blank');
                            window.location.href = "success";
                            return false;
                        } else {
                            alert("Something went wrong, please try again later.");
                            return false;
                        }
                        $(".ajax-loader").hide();
                    }
                });
            } else if(!validatePhone(phone)) {
                alert("Please type correct mobile number format");
            } else {
                alert("please type your phone number");
            }
        } else if(!validateEmail(email)) {
            alert("Please type correct email format");
        } else {
            alert("please type your email");
        }
    } else {
        alert("please fill all fields");
    }
});
// video fancybox
$('.fancybox-media1').attr('rel', 'media-gallery').fancybox({
    openEffect: 'none',
    closeEffect: 'none',
    prevEffect: 'none',
    nextEffect: 'none',
    arrows: false,
    helpers: {
        media: {},
        buttons: {}
    }
});
// Macth Height
$('.equal-height').matchHeight({
    property: 'min-height'
});
$('.submit_send').click(function() {
    qp('track', 'CompleteRegistration'); // Call this function when inline action happens);
});
$('#submit').click(function() {
    qp('track', 'CompleteRegistration'); // Call this function when inline action happens);
});
$('.common_send_btn').click(function() {
    qp('track', 'CompleteRegistration'); // Call this function when inline action happens);
});
$('.submit_sends').click(function() {
    qp('track', 'CompleteRegistration'); // Call this function when inline action happens);
});
$(document).ready(function() {
    // Disable cut copy paste
    $('body').bind('cut copy paste', function(e) {
        e.preventDefault();
    });
    // Disable mouse right click
    $("body").on("contextmenu", function(e) {
        return false;
    });
});
</script>




<!-- Side Panel - End -->
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 9464790;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const imageObserver = new IntersectionObserver((entries, imgObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target
                    //console.log("lazy loading ", lazyImage)
                    lazyImage.src = lazyImage.dataset.src
                }
            })
        });
        const arr = document.querySelectorAll('img.lazy')
        arr.forEach((v) => {
            imageObserver.observe(v);
        })
    })
</script>

<!-- Side Panel - Start -->
<!-- <div id="mySidepanel4" class="sidepanel4">
  <a href="" class="closebtn1" onclick="closeNav4()">&times;</a>
    <a href="https://www.blockchainappfactory.com/offer" id="halloween-offer"> <img src="https://www.blockchainappfactory.com/images/offer/newyear-image-10.png" style="max-width: 240px !important; "></a> 
</div>

<button class="openbtn1" onclick="openNav4()" style="max-width:60px; border:0; border-radius: 50%; left: 20px; padding: 0; margin:0; box-shadow: none; filter: none; background: none; position: fixed; top: 50%; z-index: 1;" > <img src="https://www.blockchainappfactory.com/images/offer/new-year.gif" > </button> -->


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
        /*font-size: 20px;
  cursor: pointer;
  background-color: transparent;
  color: white;
  padding: 0px;
  border: none;
  position: fixed;
  top: 43%;
  left: 0;
  width: 90px;
  z-index: 99999;*/
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

<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    /* Set the width of the sidebar to 250px (show it) */
function openNav4() {
  document.getElementById("mySidepanel4").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav4() {
  document.getElementById("mySidepanel4").style.width = "0";
}
</script>

<!-- Side Icon - Start -->
<!-- <style type="text/css">
    .social-icons{position: fixed; bottom: 20%; left: 15px; z-index: 100000; width: 50px; height: 50px; /*box-shadow: -3px -6px 16px 0px rgb(253 253 253 / 69%), 9px 5px 14px 0px rgb(0 0 0 / 15%);*/ border-radius: 50px; padding: 5px 0 0 12px;}
    .social-icons ul{margin: 0; padding: 0;}
    .social-icons ul li{margin: 5px 0; width: 40px; height: 40px; background-color: #4caf50; border-radius: 50%; text-align: center; line-height: 22px;}
    .social-icons ul li:after {position: absolute; content: ""; height: calc(100% + 16px); width: calc(100% + 16px); top: -8px; left: -8px; border-radius: 50%; border: 3px solid #4caf50 !important; animation: 1.5s linear 0s normal none infinite focuse;}
    .social-icons ul li i{color: #fff; font-size: 26px; text-align: center; line-height: 40px;}
@keyframes  focuse {
  0% {
    transform: scale(0.8);
    opacity: 1; }
  75% {
    transform: scale(1.2);
    opacity: 0; }
  100% {
    transform: scale(1.2);
    opacity: 0; } }
</style>
<div class="social-icons">
<ul>
<li style="margin-bottom:20px; position:relative; background: #07b7f6;">
<a href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="blank" style="position: relative; z-index: 999999;">
<img src="images/appointment.webp"> 
</a>
</li>
<li style="margin-bottom:20px; position:relative;">
<a href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="blank" style="position: relative; z-index: 999999;">
<i class="fa fa-whatsapp"></i> 
</a>
</li>
</ul>
</div> -->
<!-- Side Icon - End -->




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

<button id="btn" class="close-btn">x</button>

<div id="box">
    <div id="fixed-social" class="fixed-social hide">
        <!-- <div class="items">
        <a rel="nofollow" href="https://api.whatsapp.com/send?l=en&amp;text=Hi!%20I%27m%20interested%20in%20one%20of%20your%20products%20at%20BLOCKCHAIN%20APP%20FACTORY&amp;phone= " target="blank">
            <div class="icons"><img src="https://www.blockchainappfactory.com/images/whatsapp.webp" style="border-radius: 50%;"></div>
        </a>
    </div> -->

        <!-- <div class="items">
        <a href=" " target="blank">
            <div class="icons"><img src="img/mail.webp"></div>
        </a>
    </div> -->

        <!-- <div class="items"> 
        <a rel="nofollow" href="mailto:info@blockchainappfactory.com" target="blank">
            <div class="icons"><i class="fa fa-envelope"></i></div>
        </a>
    </div> -->

        <div class="items">
            <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="blank">
                <div class="icons"><img src="https://www.blockchainappfactory.com/images/appointment.webp"></div>
                <!-- <div class="text">Free 15-Minute Consultation</div> -->
            </a>
        </div>

        <div class="items">
            <a rel="nofollow" href="https://t.me/amarbaf" target="blank">
                <div class="icons"><i class="fa fa-paper-plane"></i></div>
                <!-- <div class="text">Free 15-Minute Consultation</div> -->
            </a>
        </div>

        <!-- <div class="items"> 
        <a href="https://www.blockchainappfactory.com/offer" target="blank">
            <div class="icons openbtn1" onclick="openNav4()"><img src="https://www.blockchainappfactory.com/images/offer/new-year.gif"></div>
        </a>
    </div> -->
    </div>

</div>

<!-- <div id="mySidepanel4" class="sidepanel4">
  <a href="" class="closebtn1" onclick="closeNav4()">&times;</a>
    <a href="https://www.blockchainappfactory.com/offer" id="halloween-offer"> <img src="https://www.blockchainappfactory.com/images/offer/newyear-image-10.png" style="max-width: 240px !important; "></a> 
</div> -->


<!-- xmas_box Start -->
<!-- <div class="mob_not">
<div id="hideDiv">
<div class="alert xmas_box1 alert-primary alert-dismissible show">
    <div class="x_box"><a href="offer-zone"> <img src="img/black-friday.webp" style="max-width: 240px !important; margin-bottom: 10px; box-shadow: 5px 5px 11px -3px #999; border-radius: 15px;"></a></div>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
</div>
</div>

<style type="text/css">
    #hideDivs .alert.xmas_box1{background:none;bottom:60px;width:280;left:0px}#hideDivs{text-align:center;z-index:100;position:relative}#hideDiv{/*animation:fadeOut 0.5s forwards;*/animation-delay:5s;text-align:center;z-index:100;position:relative}@keyframes  fadeOut{from{opacity:1}to{opacity:0}}.xmas_box1{position:fixed;bottom:100px;/*width:100%;*/ border:none;border-radius:0px;z-index:1000;padding:0;margin:0;max-width:250px;left:0px;right:0;}.xmas_box1 p{margin:0px;color:#fff;max-width:990px;margin:0 auto;font-size:13px;line-height:20px;padding:10px;text-align:center}.xmas_box1.alert-dismissible .close{top:-15px;right:5px;position:absolute;color:#fff;opacity:1 !important;text-shadow:none;font-size:36px;z-index:100;padding:0px;border:none;border-radius:0px;height:30px;width:30px;background:red !important;border-radius:7px;line-height:0px}.xmas_box1.alert-dismissible .close:hover{background:#303030} 
    .alert-primary{background-color: transparent; border-color: transparent;}
   @media only screen and (min-width: 320px) and (max-width: 767px) { .xmas_box1{width: 260px;bottom: 180px; display:block !important;} }
   @media only screen and (min-width: 768px) and (max-width: 899px) { .xmas_box1{width: 260px;bottom: 180px; display:block !important;} }
   @media only screen and (min-width: 1024px) and (max-width: 1200px) { .xmas_box1{width: 260px;display:block !important;} } 
</style>  -->
<!-- xmas_box End -->



<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    /*-- For Scroll --*/    
    $(document).scroll(function() {

        myID = document.getElementById("fixed-social");

        var myScrollFunc = function () {
            var y = window.scrollY;
            if (y >= 800) {
                myID.className = "fixed-social show1"
            } else {
                myID.className = "fixed-social hide"
            }
        };

        window.addEventListener("scroll", myScrollFunc);
    });


$(document).scroll(function(){ 
  //more then or equals to 
  if($(document).scrollTop() >= 800 ){ 
      $( "#btn" ).css( "display", "block" ); 
 
  //less then 800px from top 
  } else { 
      
 $( "#btn" ).css( "display", "none" ); 
  } 
}); 

 
 
/*-- For Close Button --*/
const box = document.getElementById('box'); 
const btn = document.getElementById('btn'); 
btn.addEventListener('click', function handleClick() {
  if (box.style.display === 'none') {
    box.style.display = 'block'; 
    btn.textContent = 'x';
  } else {
    box.style.display = 'none'; 
    btn.textContent = '>';
  }
});
 
</script>

<!-- SocialMedia Bottom - End -->


<!-- Button Lightbox Script - Start -->
<script type="a712837f0490aaf6ff2ebcaa-text/javascript">
    $(".crypto-popup").click(function(e) {
        $('crypto-popup').addClass('fixedPosition full-width');
        $(".login-popup").addClass('show');
        e.stopPropagation();
    });
</script>
<!-- Button Lightbox Script - End -->

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="a712837f0490aaf6ff2ebcaa-|49" defer></script>
</div>



@endsection