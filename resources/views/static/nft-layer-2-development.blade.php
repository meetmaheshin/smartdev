@extends('layouts.static')
    @section('title', 'NFT Layer 2 Development')
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
        color: #161515;
    }

    /*------Blog Style Start-----*/
    .large-header:before {
        position: absolute;
        content: '';
        background: rgb(0 0 0 / 63%) !important;
        z-index: 10;
        left: 0;
        top: auto;
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 425px) {
        .para {
            font-size: 15px !important;
        }
    }

    .para {
        font-size: 18px;
        color: #fff;
        padding-bottom: 40px;
        width: 66%;
        margin: 0 auto;
        line-height: 1.6;
    }

    .ct_warp {
        background-image: url(images/decentralized_finance_defi/cta_wrapper.webp);
        background-size: cover;
        padding-top: 70px;
        padding-bottom: 0;
        background-position: center center;
        padding-bottom: 70px;
        text-align: center;
        background-attachment: fixed;
    }

    .ct_warp p {
        font-size: 30px;
        color: #fff;
        font-weight: bold;
        line-height: 1.4;
        margin-bottom: 25px;
    }

    .ct_warp a.home-talk-experts {
        border-radius: 8px;
        font-weight: bold;
        font-size: 17px;
        line-height: 1.5;
        text-align: center;
        background: #fff;
        color: #47b475;
    }

    .text-white {
        color: #fff !important;
    }

    .md-flex {
        display: flex;
        align-items: center;
    }

    .why-blockchain-sec {
        display: inline-block;
        width: 100%;
        margin-bottom: -7px;
    }

    .common_h3.sec-tit {
        color: #2b2c2d;
        font-weight: 600;
        letter-spacing: 1.5px;
        font-size: 27.46px;
    }

    .underline {
        position: relative;
        padding-bottom: 10px;
        margin-bottom: 22px;
    }

    .uniq_features ul {
        padding-left: 15px;
    }

    .uniq_features ul li {
        margin-bottom: 15px;
        position: relative;
        padding-left: 29px;
    }

    .uniq_features ul li:after {
        font-family: FontAwesome;
        top: 3px;
        right: 0;
        padding-right: 10px;
        content: "\f0a9";
        position: absolute;
        left: 0;
        font-size: 20px;
        color: #03b787;
    }

    #related_blogs .attachment-post-thumbnail {
        width: 100%;
        height: 220px;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .data table td,
    .data table th {
        padding: 10px 25px;
    }

    .common_h3 {
        font-size: 25px;
    }

    .blog_info h3 {
        margin: 0 10px 10px 10px;
        font-size: 17px;
        line-height: 1.4;
        font-weight: 400;
        text-align: left;
    }

    .blog_info {
        border: 1px solid #eee;
        background: #f5f5f5;
        -webkit-box-shadow: 0 8px 6px -6px black;
        -moz-box-shadow: 0 8px 6px -6px black;
        box-shadow: 0 8px 6px -6px #888;
        min-height: 445px;
        margin-bottom: 30px;
    }

    .blog_info .except {
        margin: 0 10px 10px 10px;
        text-align: left;
    }

    .pre_data {
        margin: 0 10px 10px 10px;
        overflow: hidden;
        font-weight: bold;
    }

    .pre_data .date_dt {
        float: left;
        color: #000;
    }

    .pre_data .read_mr {
        float: right;
    }

    .pre_data .read_mr a {
        border-bottom: 2px solid;
        padding-bottom: 1px;
    }

    #related_blogs h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    #related_blogs .row {
        text-align: center;
    }

    /*#related_blogs .col-lg-4 {
        display: inline-block;
        float: none;
        width: 33%;
    }*/
    @media (max-width: 768px) {
        .blog_info {
            min-height: auto;
        }
    }

    /*------Blog Style End-----*/
    .connect-with {
        display: inline-block;
        width: 100%;
        text-align: center;
    }

    #get-quote .formdiv form {
        box-shadow: 0 0 20px 5px rgba(0, 0, 0, 0.1);
        background: #f3f3f3;
        width: 100%;
        display: inline-block;
        padding: 50px 0 0px 50px;
    }

    .timeline-center::before {
        background: #47b475 !important;
    }

    /*porfolio section*/
    .tabs-section .nav.nav-pills {
        display: table;
        width: 100%;
        background: #f3f3f3;
        border: 0;
    }

    .tabs-section .nav-pills>li {
        display: inline-block;
        float: none;
        width: 33.33%;
        margin: 0;
    }

    .subscript {
        font-size: 20px;

    }

    h1.btc {
        font-size: 40px;
        font-weight: 100;
        color: #47b475;
        font-family: sans-serif;
    }

    .tabs-section .nav-pills>li.active {
        background: #fff;
    }

    .tab-content {
        background: #fff;
        padding: 0 20px 20px;
        display: inline-block;
        width: 100%;
    }

    .form-right input.submit_send {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #47b475 !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: bold !important;
        padding: 10px 0 !important;
    }

    .form-right input.submit_send_pdf {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #47b475 !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: bold !important;
        padding: 10px 0 !important;
    }

    .technicalbox h3 {
        font-size: 15px;
    }

    .technicalbox {
        background: #fff none repeat scroll 0 0;
        border-radius: 3px;
        box-shadow: 0 5px 50px 0 rgba(0, 0, 0, 0.04);
        margin-bottom: 30px;
        padding: 60px 30px;
        position: relative;
        min-height: 503px;

    }

    .feature-box-3 {
        border: 1px dashed #a6a6a6;
        border-top: 3px solid #47b475;
        text-align: center;
        min-height: 170px !important;
    }

    .feature-box-3 .icon {
        margin: -50px auto 15px auto;
    }

    .feature-box-3 .icon {
        background: #f2f2f2;
        padding: 0px;
        width: 90px;
        height: 90px;
        line-height: 80px;
    }

    .contentall h1 {
        font-size: 45px;
        line-height: 60px;
        text-shadow: 0px 0px 1px #b7aeae, 0px 1px 1px #fbfafa;
    }

    a.home-talk-experts.launch {
        padding: 11px 57px;
        margin: 13px;
    }

    .contentall p:first-child {
        font-size: 24px;
    }

    .contentall p {
        font-size: 14px;
        display: inline-block;
        width: 100%;
        text-align: center;
        margin-top: 10px;
    }

    a.launch {
        margin: 0 0 15px 15px;
        padding: 11px 46px;
    }

    .gray_bg .technicalbox.text-center {
        background: #fff !important;
    }

    .gray_bg {
        background: #c1c1c154 !important;
    }

    #post-ico-services .technicalbox {
        background: #f3f3f3;
    }

    .grids .grid .technicalbox .technical-icon span i {
        padding: 25px;
    }

    .benifits-ico ul li {
        font-size: 16px;
        margin: 25px 0;
    }

    .benifits-ico ul li img {
        width: 35px;
        margin-right: 20px;
    }

    .benifits-ico ul.ul-style-4 li i {
        color: #fff;
        border-color: #fff;
        font-size: 13px;
        width: 25px;
        height: 25px;
        line-height: 23px;
    }

    .benifits-ico .left {
        padding-left: 150px;
    }

    .benifits-ico .right {
        padding-left: 75px;
    }

    .benifits-ico ul {
        color: #fff;
        padding-left: 0;
    }

    .pricing_videos iframe {
        width: 100%;
        height: 310px;
    }

    .thumb {
        position: relative;
    }

    .photo {
        position: absolute;
        width: 40px;
        height: 28px;
        left: 45%;
        top: 40%;
    }

    .thumb:hover .photo {
        background-position: 0 -252px;
    }

    .play {
        -webkit-animation: breathing 1s infinite ease-in-out;
        animation: breathing 1s infinite ease-in-out;
        -webkit-font-smoothing: antialiased;
        position: absolute;
        background: url(images/play.webp) no-repeat 0 0;
        width: 40px;
        height: 28px;
        left: 45%;
        top: 40%;
        background-position: 0 -252px;
    }

    .thumb:hover .play {
        background-position: 0 -252px;
    }

    .w-260 {
        width: 280px;
    }


    @-webkit-keyframes breathing {
        0% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        25% {
            -webkit-transform: scale(2);
            transform: scale(2);
        }

        60% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        100% {
            -webkit-transform: scale(2);
            transform: scale(2);
        }
    }

    @keyframes breathing {
        0% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        25% {
            -webkit-transform: scale(2);
            transform: scale(2);
        }

        60% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        100% {
            -webkit-transform: scale(2);
            transform: scale(2);
        }
    }


    @media (max-width:1500px) {
        #our_services .grid .feature-box-3 {
            min-height: 150px;
        }

        #pre-ico-services .technicalbox {
            min-height: 410px;
        }

        #post-ico-services .technicalbox {
            min-height: 590px;
        }

        .benifits-ico .left {
            padding-left: 110px;
        }
    }

    @media (max-width: 991px) {
        #pre-ico-services .technicalbox {
            min-height: 350px;
        }

        .banner {
            height: 500px;
        }

        .benifits-ico .left {
            padding-left: 0;
        }

        a[type="button"] {
            font-size: 12px;
        }

        .pricing_videos a.home-talk-experts {
            margin-bottom: 10px;
        }
    }

    @media (max-width: 767px) {
        .contentall h1 {
            font-size: 30px;
            line-height: 30px;
        }

        .contentall p {
            font-size: 13px;
        }

        .contentall p:first-child {
            font-size: 16px;
        }

        .benifits-ico .right {
            padding-left: 0;
        }

        .benifits-ico h4 {
            font-size: 13px;
        }

        .benifits-ico ul li {
            font-size: 12px;
        }

        .benifits-ico ul.ul-style-4 li i {
            font-size: 10px;
            width: 20px;
            height: 20px;
            line-height: 16px;
        }

        .pricing_videos a.home-talk-experts {
            margin: 0 auto;
            display: block;
            margin-bottom: 10px;
            text-align: center;
            width: auto;
        }

        .timeline-center .timeline-row:nth-of-type(odd),
        .timeline-center .timeline-row:nth-of-type(even) {
            flex-direction: column;
        }
    }

    @media (max-width: 610px) {
        a.launch {
            margin: 0 0 15px 0;
        }
    }

    @media (max-width: 479px) {
        .contentall h1 {
            font-size: 18px;
            line-height: 24px;
        }

        .contentall p {
            font-size: 13px;
        }

        .contentall p:first-child {
            font-size: 12px;
        }
    }

    .m-0 {
        margin: 0px !important;
    }

    .banner-buttons-new a {
        margin-bottom: 15px !important;
        display: inline-block;
    }

    .banner-buttons-new a:last-child {
        margin-bottom: 0 !important;
    }


    .button-group {
        display: inline-block;
        width: 100%;
        text-align: center;
        margin-top: 50px;
    }

    .button-group a {
        cursor: pointer;
        padding: 10px 25px;
        color: #ffffff;
        background: #47b475;
        border-radius: 0;
    }

    .button-group a:hover {
        color: #ffffff !important;
    }

    .button-group a i {
        margin-left: 10px;
    }

    .button-group a svg {
        vertical-align: middle;
    }

    .button-group a svg .download_effect {
        -webkit-animation: downloadripple 1s ease-in-out infinite;
        /* Safari 4.0 - 8.0 */
        animation: downloadripple 1s ease-in-out infinite;

        position: relative;
    }

    a[data-target="#Modal_pdf"]:hover {
        background: #1b8247;
    }

    @keyframes downloadripple {
        from {
            opacity: 0.8;
            transform: translateY(-65px)
        }

        to {
            opacity: 1;
            transform: translateY(20px);
        }
    }

    @-webkit-keyframes downloadripple {
        from {
            opacity: 0.8;
            transform: translateY(-65px)
        }

        to {
            opacity: 1;
            transform: translateY(20px);
        }
    }

    @-moz-keyframes downloadripple {
        from {
            opacity: 0.8;
            transform: translateY(-65px)
        }

        to {
            opacity: 1;
            transform: translateY(20px);
        }
    }

    @-o-keyframes downloadripple {
        from {
            opacity: 0.8;
            transform: translateY(-65px)
        }

        to {
            opacity: 1;
            transform: translateY(20px);
        }
    }

    /*background color change keyframes*/
    @keyframes bgchange {
        from {
            background: #47b475;
            transform: scale(1);
        }

        to {
            background: #1b8247;
            transform: scale(1.1);
        }
    }

    @-webkit-keyframes bgchange {
        from {
            background: #47b475;
            transform: scale(1);
        }

        to {
            background: #1b8247;
            transform: scale(1.1);
        }
    }

    @-moz-keyframes bgchange {
        from {
            background: #47b475;
            transform: scale(1);
        }

        to {
            background: #1b8247;
            transform: scale(1.1);
        }
    }

    @-o-keyframes bgchange {
        from {
            background: #47b475;
            transform: scale(1);
        }

        to {
            background: #1b8247;
            transform: scale(1.1);
        }
    }

    @keyframes movement {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @-webkit-keyframes movement {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @-moz-keyframes movement {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .ico-development-img {
        animation-name: movement;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        animation-duration: 3s;
    }

    .button-group a svg path {
        fill: #ffffff;
    }

    .button-group a svg polygon {
        fill: #ffffff;
    }

    @media (min-width: 992px) {
        .move {
            margin-left: 33.666667%;
        }
    }

    .white2 {
        background: #f2f2f2;
    }

    .hori {
        width: 10px;
        /* left:48%;
        content:"";
        height:1px;
        background:#c2c2c2;
        position:absolute;
        bottom:0; */
    }

    .one {
        max-height: 50% !important;
    }

    .box {
        border: 1px solid #f9f9f9;
        padding: 0px 15px;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
    }

    .etherum {
        width: 100%;
        height: 330px;
    }

    @media (max-width: 500px) {
        .cta_mine {
            width: 90%;
            margin: 0 auto;
            display: block;
        }
    }

    .font-wei {
        color: #161515 !important;
        font-weight: 700 !important;
    }
</style>


<div class="header-shadow" id="ico">

    <!-- End Google Tag Manager (noscript) -->
    <!-- <div class="page-loader">
    <div class="spinner"></div>
</div> -->

    <div class="main">
        <div class="banner">
            <div id="large-header" class="large-header">
                <img class="" src="{{ asset('images/layer2/bnr-1.jpg') }}">
            </div>
            <div class="banner_content">
                <div class="container">
                    <div class="contentall">
                        <!-- <p>Solution for Conducting ICOs Starts from 0.5 BTC</p> -->
                        <h1 class="common_h1"> Elevate Your NFT Experience with Our Layer 2 Solutions</h1>
                        <h2 class="para">Discover the thrill of lightning-fast, gas-free transactions in your NFT ecosystem with our advanced Layer 2 Protocols.</h2>
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
        </div>
    </div>


    <div class="pricing_videos common_spacing gray_bg">
        <div class="container">

            <!-- <p class="text-justify">In recent years, the Decentralized Finance or DeFi market has grown by leaps and bounds due to the stark increase in interest among entrepreneurs and investors alike. The DeFi technology is one of the fastest growing in the financial market and is at the cutting-edge of innovation when it comes to this technology based industry.</p> -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2 class="text-capitalize common_h1 section-title center text-center underline font-wei"
                            style="text-align: center;">Transforming NFTs with Ethereum Layer 2 Innovation</h2>
                        <p class="text-justify">The blockchain landscape has undergone groundbreaking changes in recent years, revolutionizing the financial sector. As the NFT space surges with unprecedented growth, it has encountered challenges such as network congestion and escalating transaction fees, making it difficult for users to engage in buying and trading NFTs.</p>
                        <p class="text-justify">To address these pressing issues and enhance user experience, we are pioneering the development of an NFT marketplace using Ethereum Layer 2 protocols. This advanced solution promises to streamline transactions, reduce costs, and ensure a smoother, more efficient NFT trading environment.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="ico-development-img">
                        <img class="etherum" src="{{ asset('images/layer2/img-01.jpg') }}" alt="NFT Layer 2 Development"
                            title="NFT with Ethereum Layer 2">
                    </div>
                </div>
            </div>
            <div class="text-center cta_mine mt30">
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
                        target="_blank" href=""
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                    <a href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                </div>
            </div>

        </div>
    </div>
    <!-- 
    <div class="mt20"></div> -->

    <div class="intro_cnt common_spacing" style="background: #f9f9f9;">
        <div class="container">

            <div class="row mt20">
                <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                    <img class="lazy crypto" src="{{ asset('images/layer2/three.webp') }}" alt="NFT in Layer 2"
                        title="Why Implement NFT in Layer 2?">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-justify">
                    <div class="">
                        <div class="section-title text-left mt10">
                            <div class="sec_tit">
                                <h2 class="font-wei">Elevating NFTs with Layer 2 Solutions</h2>
                            </div>
                        </div>
                        <p class="mt20">NFTs on Layer 2 represent a groundbreaking approach to scaling applications by processing transactions off the primary Ethereum blockchain (Layer 1).</p>
                    </div>
                    <div class="mt10">
                        <div class="section-title text-left">
                            <div class="sec_tit">
                                <h2 class="font-wei">Why Opt for NFT on Layer 2?</h2>
                            </div>
                        </div>
                        <p class="mt20">In high-traffic conditions, the Ethereum network often struggles with slower transaction speeds and escalating gas fees, creating a challenging experience for users, particularly in decentralized apps (Dapps). As demand surges, gas fees spike, making transactions increasingly costly. Our Layer 2 NFT development services address these issues, delivering a seamless and cost-effective transaction experience by optimizing scalability and efficiency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->
    <style type="text/css">
        @media screen and (max-width: 768px) {
            .txt1 {
                text-align: left !important;
            }
        }

        .common_h3 {
            color: #161515;
        }
    </style>
    <div class="intro_cnt common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title  text-center">
                        <div class="sec_tit">
                            <h2 class="txt1 font-wei">Enhancing NFT Scalability with Immutable X</h2>
                        </div>
                    </div>
                    <p class=" txt1 mt20">
                        We revolutionize NFT scalability by integrating the Immutable X Layer 2 protocol, ensuring a seamless and efficient NFT ecosystem. Immutable X stands out as a premier protocol in the NFT landscape, adept at managing massive transaction volumes with exceptional ease. Built on the Ethereum blockchain, Immutable X dramatically cuts gas fees to near zero, efficiently processing thousands of transactions simultaneously.
                    </p>
                    <p class="txt1">
                        Our implementation of Immutable X will enable swift peer-to-peer transactions and support the latest advancements in the NFT space. The protocol's boundless capabilities and decentralized architecture contribute to a robust, carbon-neutral ecosystem, significantly impacting the market with instant trade execution.
                    </p>
                </div>
                <div class="text-center cta_mine">
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
                        {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                            href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>SCHEDULE A CONSULTATION</span></a> --}}
                        <a href="https://t.me/smartdev3ai" target="_blank"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>JOIN US ON TELEGRAM</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .ces-point ul .no {
            margin-right: 5px;
            color: #818181;
            letter-spacing: 0.3px;
            font-weight: 500;
            font-size: 18px;
            '
 text-transform: none;
            cursor: pointer;
            /* display: inline-block; */
            background: rgba(255, 255, 255, 0.5);
            box-shadow: 0px 0px 10px 0px rgb(0 0 0 / 8%);
            border-radius: 4px;
            padding: 15px 10px;
            border: 1px solid transparent;
            text-align: center;
            width: auto;
            margin-bottom: 10px;
            width: 32%;
            min-height: 150px;
            float: left;
        }

        .point-icon {
            margin-bottom: 10px;
        }

        .ces-point ul .no img {
            height: 50px;
        }

        /* .no{
color:#f2f2f2 !important;
background:#f2f2f2 !important;
box-shadow:#f2f2f2 !important;
} */
        .feature-box-3:hover {
            background: #4caf5061;
            color: #333;
        }
    </style>


    <div id="our_services" class="">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="common_h3">Unlock These Business Advantages</h3>
                <hr>
            </div>
            <div class="grids">
                <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                    <div class="feature-box-3">
                        <div class="icon">
                            <img src="{{ asset('images/layer2/private-key.png') }}" width="64px" style="margin-top: 12px">
                        </div>
                        <h4 class="feature-title common_h4">Full Control with Private Keys</h4>
                    </div>
                </div>
                <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                    <div class="feature-box-3">
                        <div class="icon">
                            <img src="{{ asset('images/layer2/user.webp') }}" style="margin-top: 12px">
                        </div>
                        <h4 class="feature-title common_h4">Customizable Trading Fees</h4>
                    </div>
                </div>
                <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                    <div class="feature-box-3">
                        <div class="icon">
                            <img src="{{ asset('images/layer2/p2p.png') }}" width="64px" style="margin-top: 12px">
                        </div>
                        <h4 class="feature-title common_h4">No Gas Fees for Peer-to-Peer Trades</h4>

                    </div>
                </div>
                <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                    <div class="feature-box-3">
                        <div class="icon">
                            <img src="{{ asset('images/layer2/scalability.webp') }}" style="margin-top: 12px">
                        </div>
                        <h4 class="feature-title common_h4">Scalability of 9,000+ TPS</h4>

                    </div>
                </div>
                <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                    <div class="feature-box-3">
                        <div class="icon">
                            <img src="{{ asset('images/layer2/decentralized.png') }}" width="64px" style="margin-top: 12px">
                        </div>
                        <h4 class="feature-title common_h4">Decentralized Architecture</h4>

                    </div>
                </div>
                <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                    <div class="feature-box-3">
                        <div class="icon">
                            <img src="{{ asset('images/layer2/erc.webp') }}" style="margin-top: 12px">
                        </div>
                        <h4 class="feature-title common_h4">ERC-20 and ERC-721 Compatibility</h4>

                    </div>
                </div>
                <div class="col-md-4 col-sm-8"></div>
                <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                    <div class="feature-box-3">
                        <div class="icon">
                            <img src="{{ asset('images/layer2/ethereum.webp') }}" style="margin-top: 12px">
                        </div>
                        <h4 class="feature-title common_h4">Ethereum-Based Security</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="intro_cnt common_spacing gray_bg">
        <div class="container">
            <div class="section-title text-center">
                <div class="sec_tit">
                    <h2 class="font-wei">Revolutionizing NFT Marketplace Development with Ethereum Layer 2</h2>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 text-left">

                    <img class="lazy crypto mb20" src="{{ asset('images/layer2/image-04-layer-2.png') }}"
                        style="margin-bottom: 20px;" alt="NFT Layer 2 Development Services"
                        title="NFT Marketplace Development in Ethereum L2">

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-justify mt-4">
                    <p class="mt20">As we look to the future, NFT marketplaces are evolving to leverage the power of Layer 2 protocols, enhancing their capability to support advanced functionalities. Our Ethereum Layer 2 NFT development services are designed to deliver a seamless, gas-free trading experience while maintaining the robust security of the Ethereum network.</p>
                    <p class="mt20">Our approach involves scaling NFT marketplaces by processing transactions off the Ethereum blockchain (Layer 1), ensuring efficiency and security. We guarantee that your marketplace will handle high volumes of transactions effortlessly, providing immediate withdrawals and protection against potential threats. Our Layer 2 solutions are engineered to significantly boost transaction throughput, optimizing your marketplace’s performance.</p>
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
                    data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                <a href="{{ url('consultation') }}"
                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
            </div>
        </div>
    </div>



    <div class="intro_cnt common_spacing">
        <div class="container">

            <div class="row mt20">
                <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                    <div class="section-title text-left">
                        <div class="sec_tit">
                            <h2 class="font-wei">Why We're Your Ultimate Partner for Integrating Layer 2 Protocols into NFT Marketplaces</h2>
                        </div>
                        <hr>
                    </div>
                    <p class="mt20">We elevate businesses within the blockchain realm, transforming visions into competitive advantages. Our deep expertise and fervor for blockchain innovation position you ahead of the curve in the cryptocurrency arena. Our dedicated team is committed to crafting a robust and dynamic NFT marketplace utilizing Layer 2 protocols, tailored precisely to your specifications.
                        <br><br>
                    We ensure that your platform is not just built to meet current standards but is designed to lead the industry, setting new benchmarks in the digital marketplace. With our support, you'll emerge as a trailblazer, redefining the future of NFT transactions.
                    </p>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 text-justify">
                    <img class="lazy crypto" src="{{ asset('images/layer2/img-05.webp') }}"
                        alt="NFT Layer 2 Development Services" title="Integrate Layer 2 Protocol with NFT Marketplace">
                </div>

            </div>
        </div>
    </div>



    <!-- <div id="our-team" class="gray_bg">
<div class="container">
    <div class="section-title text-center" style="margin-bottom: 40px;">
        <h4>The Awesome Team</h4>
        <hr>
    </div>
    <div class="aviators">
        <div class="item col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <div class="cbp-item-wrapper text-center">
                <a class="cbp-caption cbp-singlePage" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/images/avatar/3.webp" alt="">
                    </div>

                </a>
                <a class="cbp-singlePage cbp-l-grid-team-name" rel="nofollow">Adelle Charles</a>
                <div class="cbp-l-grid-team-position">Blockchain Engineer</div>
            </div>
        </div> 

        <div class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="cbp-item-wrapper">
                <a class="cbp-caption cbp-singlePage" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/images/avatar/2.webp" alt="">
                    </div>

                </a>
                <a class="cbp-singlePage cbp-l-grid-team-name" rel="nofollow">Joseph Murphy</a>
                <div class="cbp-l-grid-team-position">Full Stack/Blockchain Developer</div>
            </div>
        </div> 
        <div class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="cbp-item-wrapper">
                <a class="cbp-caption cbp-singlePage" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/images/avatar/1.webp" alt="">
                    </div>

                </a>
                <a class="cbp-singlePage cbp-l-grid-team-name" rel="nofollow">Tony Grue</a>
                <div class="cbp-l-grid-team-position">ICO Consultant / Advisor</div>
            </div>
        </div> 

        <div class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="cbp-item-wrapper">
                <a class="cbp-caption cbp-singlePage" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/images/avatar/4.webp" alt="">
                    </div>
                </a>
                <a class="cbp-singlePage cbp-l-grid-team-name" rel="nofollow">Harry Roberts</a>
                <div class="cbp-l-grid-team-position">Blockchain Consultant</div>
            </div>
        </div>
    </div>
    <div class="connect-with">
        <a class="nectar-button medium regular accent-color regular-button" style="margin: 40px 10px 10px; visibility: visible;" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
        <a href="https://t.me/blockchain_appfactory" target="_blank" class="nectar-button">Connect with telegram</a>
    </div>
</div>
</div> -->
    <!-- 
<div class="pricing-table" id="pricing-tabs">
        <div class="container">
            <div class="data table-responsive">
                <div class="section-title">
                    <h5 class="common_h3">ICO Development Pricing Package</h5>
                    <hr class="mb40">
                </div>
                <table class="table-striped hidden-xs" style="width:100%;">
                    <tbody>
                     
                    <tr>
                        <th class="theme-color-bg">Technology</th>
                        <th style="width:20%;background: transparent;color: #000;"><h4 class="btc">
                            $20,000</h4></th>
                            <th style="width:20%;background: transparent;color: #000;"><h4 class="btc">
                                $50,000</h4></th>
                                <th style="width:20%;background: transparent;color: #000;"><h4 class="btc">
                                    $100,000</h4></th>
                                    
                                </tr>
                                <tr>
                                    <td>Smartcontract Creation</td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>
                                <tr>
                                    <td>Coin Type ERC20 Token Creation</td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>
                                <tr>
                                    <td>ICO Landing page with clear communication of vision</td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>
                                <tr>
                                    <td>Dashboard for investors with 3 stages: Pre-ICO, ICO and Burn ICO</td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>

                                <tr>
                                    <td>Accept Top 10 Cryptocurrencies along with Fiat Wire Transfer, Credit & Debit Cards</td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>
                                <tr>
                                    <td>Coin Owner Dashboard to take full control of the events </td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>
                                <tr>
                                    <td>Time based referral bonus for investors</td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>
                                <tr>
                                    <td>2 tier Referral bonus for investors</td>
                                    <td><img src="/images/no.webp" alt=""></td>
                                    <td><img src="/images/no.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>
                                <tr>
                                    <td>Promo codes for evangelists</td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>
                                <tr>
                                    <td>Coin drop to all wallets based on their deposit and cumulative bonus count</td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                    <td><img src="/images/yes.webp" alt=""></td>
                                </tr>
                                <tr>
                                    <th class="theme-color-bg">Legal</th>
                                    <td colspan="3"></td>
                   
                </tr>
                <tr>
                    <td>Review of the core project documents</td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Completely optimised professional Whitepaper written by an expert</td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Recommendations on White Paper, webpage, key press releases</td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Drafting or review of legal documents Terms of Use, agreements, Privacy Policy, warranties, disclaimers, risk factors</td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Ongoing legal advice on ICO specifics throughout the token sale</td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <th class="theme-color-bg">ICO Marketing</th>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td>Marketing consultations Guidance on marketing tools setup from ICO experts</td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Consultations on ICO PR specifics Ongoing consulting throughout the PR campaign</td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Preset PPC account with predefined keywords and targeted tools Reach the target audience of token purchasers</td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Targeted marketing strategy 65+ battle-tested tools for your team to use, with impact description</td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Featured Article on Forbes and VentureBeat </td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Featured Article on Steemit, HuffingtonPost and Medium</td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Dedicated 2 person ICO marketing team manning Reddit, Telegram and Slack Channel</td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>Evangelising on Facebook and Twitter</td>
                    <td><img src="/images/no.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                    <td><img src="/images/yes.webp" alt=""></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="btnpro"><a  type="button" class="" data-toggle="modal" data-target="#myModal">Order Now</a></td>
                    <td class="btnpro"><a  type="button" class="" data-toggle="modal" data-target="#myModal1">Order Now</a></td>
                    <td class="btnpro"><a  type="button" class="" data-toggle="modal" data-target="#myModal2">Order Now</a></td>
                </tr>
            </tbody>
        </table>
        <table class="table-striped visible-xs" style="width:100%;">
            <tbody>
              <tr>
                                    
                
            </tr>
            <tr>
                <th style="background: #fff;"><h4 class="btc">
                    $20,000</h4></th>
                </tr>
                <tr>
                    <th class="theme-color-bg">Technology</th>
                </tr>
                <tr>
                    <td>Smartcontract Creation</td>
                </tr>
                <tr>
                    <td>Coin Type ERC20 Token Creation</td>
                </tr>
                <tr>
                    <td>ICO Landing page with clear communication of vision</td>
                </tr>
                <tr>
                    <td>Dashboard for investors with 3 stages: Pre-ICO, ICO and Burn ICO</td>
                </tr>
                
                <tr>
                    <td>Accept Top 10 Cryptocurrencies along with Fiat Wire Transfer, Credit & Debit Cards</td>
                </tr>
                <tr>
                    <td>Coin Owner Dashboard to take full control of the events </td>
                </tr>
                <tr>
                    <td>Time based referral bonus for investors</td>
                </tr>
                <tr>
                    <td>Promo codes for evangelists</td>
                </tr>
                <tr>
                    <td>Coin drop to all wallets based on their deposit and cumulative bonus count</td>
                </tr>
                <tr>
                    <th class="theme-color-bg">Legal</th>
                </tr>
                <tr>
                    <td>Review of the core project documents</td>
                </tr>
                <tr>
                    <td>Recommendations on White Paper, webpage, key press releases</td>
                </tr>
                <tr>
                    <td>Drafting or review of legal documents Terms of Use, agreements, Privacy Policy, warranties, disclaimers, risk factors</td>
                </tr>
                <tr>
                    <td class="btnpro"><a  type="button" class="" data-toggle="modal" data-target="#myModal">Order Now</a></td>

                </tr>
            </tbody>
        </table>
        <table class="table-striped visible-xs" style="width:100%;">
          <tbody>
            <tr>

          </tr>
          <tr><th style="background: #fff;"><h4 class="btc">
           $50,000</h4></th></tr>
            <tr>
              <th class="theme-color-bg">Technology</th>
          </tr>
          <tr>
              <td>Smartcontract Creation</td>
          </tr>
          <tr>
              <td>Coin Type ERC20 Token Creation</td>
          </tr>
          <tr>
              <td>ICO Landing page with clear communication of vision</td>
          </tr>
          <tr>
              <td>Dashboard for investors with 3 stages: Pre-ICO, ICO and Burn ICO</td>
          </tr>

          <tr>
              <td>Accept Top 10 Cryptocurrencies along with Fiat Wire Transfer, Credit & Debit Cards</td>
          </tr>
          <tr>
              <td>Coin Owner Dashboard to take full control of the events </td>
          </tr>
          <tr>
              <td>Time based referral bonus for investors</td>
          </tr>
          <tr>
              <td>Promo codes for evangelists</td>
          </tr>
          <tr>
              <td>Coin drop to all wallets based on their deposit and cumulative bonus count</td>
          </tr>
          <tr>
              <th class="theme-color-bg">Legal</th>
          </tr>
          <tr>
              <td>Review of the core project documents</td>
          </tr>
          <tr>
              <td>Completely optimised professional Whitepaper written by an expert</td>
          </tr>
          <tr>
              <td>Recommendations on White Paper, webpage, key press releases</td>
          </tr>
          <tr>
              <td>Drafting or review of legal documents Terms of Use, agreements, Privacy Policy, warranties, disclaimers, risk factors</td>
          </tr>

          <tr>
              <th class="theme-color-bg">ICO Marketing</th>
          </tr>
          <tr>
              <td>Marketing consultations Guidance on marketing tools setup from ICO experts</td>
          </tr>
          <tr>
              <td>Consultations on ICO PR specifics Ongoing consulting throughout the PR campaign</td>
          </tr>
          <tr>
              <td>Preset PPC account with predefined keywords and targeted tools Reach the target audience of token purchasers</td>
          </tr>
          <tr>
              <td>Targeted marketing strategy 65+ battle-tested tools for your team to use, with impact description</td>
          </tr>
          <tr>
              <td>Featured Article on Forbes and VentureBeat </td>
          </tr>
          <tr>
              <td>Featured Article on Steemit, HuffingtonPost and Medium</td>
          </tr>
          <tr>
              <td>Dedicated 2 person ICO marketing team manning Reddit, Telegram and Slack Channel</td>
          </tr>
          <tr>
              <td>Evangelising on Facebook and Twitter</td>
          </tr>
          <tr>
              <td class="btnpro"><a  type="button" class="" data-toggle="modal" data-target="#myModal1">Order Now</a></td>
          </tr>
      </tbody>
  </table>
  <table class="table-striped visible-xs" style="width:100%;">
      <tbody>
        <tr>

      </tr>
      <tr><th style="background: #fff;"><h4 class="btc">
        $100,000</th></tr>
        <tr>
          <th class="theme-color-bg">Technology</th>
      </tr>
      <tr>
          <td>Smartcontract Creation</td>
      </tr>
      <tr>
          <td>Coin Type ERC20 Token Creation</td>
      </tr>
      <tr>
          <td>ICO Landing page with clear communication of vision</td>
      </tr>
      <tr>
          <td>Dashboard for investors with 3 stages: Pre-ICO, ICO and Burn ICO</td>
      </tr>

      <tr>
          <td>Accept Top 10 Cryptocurrencies along with Fiat Wire Transfer, Credit & Debit Cards</td>
      </tr>
      <tr>
          <td>Coin Owner Dashboard to take full control of the events </td>
      </tr>
      <tr>
          <td>Time based referral bonus for investors</td>
      </tr>
      <tr>
          <td>2 tier Referral bonus for investors</td>
      </tr>
      <tr>
          <td>Promo codes for evangelists</td>
      </tr>
      <tr>
          <td>Coin drop to all wallets based on their deposit and cumulative bonus count</td>
      </tr>
      <tr>
          <th class="theme-color-bg">Legal</th>
      </tr>
      <tr>
          <td>Review of the core project documents</td>
      </tr>
      <tr>
          <td>Completely optimised professional Whitepaper written by an expert</td>
      </tr>
      <tr>
          <td>Recommendations on White Paper, webpage, key press releases</td>
      </tr>
      <tr>
          <td>Drafting or review of legal documents Terms of Use, agreements, Privacy Policy, warranties, disclaimers, risk factors</td>
      </tr>
      <tr>
          <td>Ongoing legal advice on ICO specifics throughout the token sale</td>
      </tr>
      <tr>
          <th class="theme-color-bg">ICO Marketing</th>
      </tr>
      <tr>
          <td>Marketing consultations Guidance on marketing tools setup from ICO experts</td>
      </tr>
      <tr>
          <td>Consultations on ICO PR specifics Ongoing consulting throughout the PR campaign</td>
      </tr>
      <tr>
          <td>Preset PPC account with predefined keywords and targeted tools Reach the target audience of token purchasers</td>
      </tr>
      <tr>
          <td>Targeted marketing strategy 65+ battle-tested tools for your team to use, with impact description</td>
      </tr>
      <tr>
          <td>Featured Article on Forbes and VentureBeat </td>
      </tr>
      <tr>
          <td>Featured Article on Steemit, HuffingtonPost and Medium</td>
      </tr>
      <tr>
          <td>Dedicated 2 person ICO marketing team manning Reddit, Telegram and Slack Channel</td>
      </tr>
      <tr>
          <td>Evangelising on Facebook and Twitter</td>
      </tr>
      <tr>
          <td class="btnpro"><a  type="button" class="" data-toggle="modal" data-target="#myModal2">Order Now</a></td>
      </tr>
  </tbody>
</table>
</div>

</div>
</div> -->



    <!-- <div id="blog">
        <div class="container">
            <div class="section-title text-center">
                <h4>Welcome To Our Blog</h4>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="col-md-12 blog-boxes">
                <div class="col-md-4 col-sm-4 blog-box">
                    <div class="blog-img-box">
                        <a href="#"><img src="/images/blog/bg-img-1.webp" alt="" class="img-responsive"></a>
                    </div>
                    <h5 class="mt20 blog-title"><a href="#">Why should you build a website?</a></h5>
                    <small class="text-muted">01 Apr 2016 | <a href="#">12 Comments</a></small>
                    <p class="mt10 lighter-text mb0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                    <a class="readmore" href="">Read more</a>
                </div> 

                <div class="col-md-4 col-sm-4 blog-box">
                    <div class="blog-img-box">
                        <a href="#"><img src="/images/blog/bg-img-20.webp" alt="" class="img-responsive"></a>
                    </div>
                    <h5 class="mt20 blog-title"><a href="#">Why should you build a website?</a></h5>
                    <small class="text-muted">01 Apr 2016 | <a href="#">12 Comments</a></small>
                    <p class="mt10 lighter-text mb0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                    <a class="readmore" href="">Read more</a>
                </div> 

                <div class="col-md-4 col-sm-4 blog-box">
                    <div class="blog-img-box">
                        <a href="#"><img src="/images/blog/bg-img-3.webp" alt="" class="img-responsive"></a>
                    </div>
                    <h5 class="mt20 blog-title"><a href="#">Why should you build a website?</a></h5>
                    <small class="text-muted">01 Apr 2016 | <a href="#">12 Comments</a></small>
                    <p class="mt10 lighter-text mb0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                    <a class="readmore" href="">Read more</a>
                </div> 
            </div>
        </div>
    </div> -->

</div>
</div>



<script src="js/vendor.js" type="6e8b2dff235d691ebd6cf9c7-text/javascript"></script>

<script src="js/plugins.js" type="6e8b2dff235d691ebd6cf9c7-text/javascript"></script>

<script src="js/main.js" type="6e8b2dff235d691ebd6cf9c7-text/javascript"></script>

<script src="build/js/intlTelInput.js" type="6e8b2dff235d691ebd6cf9c7-text/javascript"></script>

<script type="6e8b2dff235d691ebd6cf9c7-text/javascript" src="fbox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="fbox/jquery.fancybox.css?v=2.1.5" media="screen">
<script type="6e8b2dff235d691ebd6cf9c7-text/javascript" src="fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<script type="6e8b2dff235d691ebd6cf9c7-text/javascript">
    $("#phone21").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js"
});   
$("#phone22").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js"
});
$("#phone23").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js"
});

$("#phone_pdf").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js"
});

$('.home-talk-experts').click(function() {
    $('html, body').animate({
        scrollTop: $('#newsletter-form-sec').offset().top
    }, 2000);
});

var url = window.location.href;
$('#url').val(url);

// video fancybox
$('.fancybox-media').attr('rel', 'media-gallery').fancybox({
  openEffect : 'none',
  closeEffect : 'none',
  prevEffect : 'none',
  nextEffect : 'none',
  arrows : false,
  helpers : {
    media : {},
    buttons : {}
  }
});
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

<script type="6e8b2dff235d691ebd6cf9c7-text/javascript">
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
<script type="6e8b2dff235d691ebd6cf9c7-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="6e8b2dff235d691ebd6cf9c7-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="6e8b2dff235d691ebd6cf9c7-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="6e8b2dff235d691ebd6cf9c7-text/javascript">
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
$(".sticky-form .quick-cont-btn").click(function(e) {
    $('body').addClass('fixedPosition full-width');
    $(".sticky-form .formdiv").addClass('show');
    e.stopPropagation();
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
<script type="6e8b2dff235d691ebd6cf9c7-text/javascript">
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
<script type="6e8b2dff235d691ebd6cf9c7-text/javascript">
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

<script type="6e8b2dff235d691ebd6cf9c7-text/javascript">
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



<script type="6e8b2dff235d691ebd6cf9c7-text/javascript">
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
<script type="6e8b2dff235d691ebd6cf9c7-text/javascript">
    $(".crypto-popup").click(function(e) {
    $('crypto-popup').addClass('fixedPosition full-width');
    $(".login-popup").addClass('show');
    e.stopPropagation();
});
</script>
<!-- Button Lightbox Script - End -->

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="6e8b2dff235d691ebd6cf9c7-|49" defer></script>
</div>



@endsection