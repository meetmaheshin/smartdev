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

</div>
</div>


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