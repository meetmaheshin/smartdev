@extends('layouts.static')
    @section('title', 'NFT Music Marketplace Development')
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

    .card-desc a {
        font-size: 15px;
        display: inline-block;
        max-width: 200px;
        margin: 0 auto 20px;
        border-radius: 4px;
    }

    .banner {
        background-image: url('{{ asset('images/nft_music/nft_music_banner.jpg') }}');
        background-size: cover;
        padding-top: 138px;
        padding-bottom: 0px;
        height: auto;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(to right, #11091766, #20132a)a;
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
    }

    .contentall p {
        font-weight: normal;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 19px;
        max-width: 800px;
        margin: 0 auto 30px;
        display: block;
    }

    .contentall a {
        color: #fff;
        cursor: pointer;
        margin-bottom: 15px;
    }

    .feal_cnt h5 {
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0px;
        margin-top: 10px;
        margin-bottom: 0px;
    }

    .feat_lev {
        margin-bottom: 40px;
        max-width: 350px;
        margin: 0 auto 40px;
    }

    .sec_tit,
    .sec_tit h2 {
        font-size: 25px !important;
        font-weight: 700;
        color: #000000;
        line-height: 1.4;
        text-transform: capitalize;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        letter-spacing: 0;
        line-height: 1.3;
    }

    .add_feat ul {
        padding: 0;
    }

    .add_feat ul li i {
        color: #fff;
        width: 35px;
        height: 35px;
        background-image: linear-gradient(#47b475, #00b8ff);
        text-align: center;
        font-size: 21px;
        border-radius: 4px;
        line-height: 1.6;
        margin-right: 10px;
    }

    .add_feat ul li {
        margin-bottom: 25px;
        width: 49%;
        float: left;
    }

    .row.lv_flow.text-center {
        max-width: 800px;
        margin: 30px auto 0px;
    }

    .wrapper {
        overflow: hidden;
        width: 100%;
        /* background: #47b475; */
        padding: 10px 0 10px;
        margin-bottom: 30px;
        color: #fff;
    }

    .counters:after {
        content: '';
        width: 100%;
        height: 100%;
        background: url(images/leverage/growth.webp);
        position: absolute;
        left: 0;
        top: 0;
        background-size: 47%;
        background-repeat: no-repeat;
        background-position: center center;
        opacity: 0.1;
    }

    .counters {
        border: 4px solid;
        background: #47b475;
        outline: 4px solid #ccc;
        border-radius: 5px;
        padding: 15px 0 10px 0;
        position: relative;
    }

    .counters h5 {
        color: #fff;
        font-weight: bold;
        font-size: 36px;
        line-height: 1.7;
    }

    p.count-text {
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .add_feat .col-md-8 {
        float: none;
        margin: 0 auto;
    }

    .add_feat.common_spacing.gray_bg.text-center {
        margin-top: -30px;
    }

    .banner_img img {
        max-width: 121%;
        margin-top: -12%;
    }

    .adv_fet {
        position: relative;
        text-align: center;
        background: #fff;
        margin-bottom: 30px;
        padding-top: 30px;
        padding-bottom: 20px;
        border-radius: 4px;
        box-shadow: 0 0 10px #ccc;
    }

    .feat_al_ci img {
        width: 70px;
    }

    .adv_fet h4 {
        line-height: 1.4;
        font-size: 15px;
        font-weight: bold;
        margin-top: 20px;
    }

    .col-md-3.col-sm-6.col-xs-12.adv_lr {
        margin-left: 13%;
    }

    .feat_ec {
        position: relative;
        padding-left: 90px;
    }

    .feat_l_ci {
        position: absolute;
        left: 0;
        top: 6px;
        background: #fff;
        padding: 10px;
        width: 78px;
        height: 75px;
        text-align: center;
        border: 3px solid #47b4754f;
    }

    .feat_l_ci img {
        height: 50px;
    }

    .feat_ec h4 {
        font-weight: bold;
        font-size: 18px;
    }

    .add_feat.exch_lev.common_spacing:after {
        background-image: url(images/leverage/screen-6.webp);
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: right;
        content: '';
        width: 61%;
        height: 100%;
        position: absolute;
        right: -10%;
        top: 12px;
    }

    .add_feat.exch_lev.common_spacing {
        position: relative;
        overflow: hidden;
    }

    .cnt_box h4.sec_tit {
        color: #fff;
        font-size: 30px !important;
    }

    .cnt_box p {
        color: #fff;
        font-size: 20px;
        max-width: 800px;
        margin: 20px auto 20px;
    }

    .cnt_b h5 {
        color: #fff;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .cnt_box {
        background-image: url(images/leverage/bg-counter.webp);
        background-size: cover;
        background-position: center;
    }

    @media (max-width: 1000px) {
        .di-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: inline-block !important;
        }

    }

    @media (max-width: 1199px) {

        .contentall h1,
        .ban_tirt {
            font-size: 30px;
        }

    }

    @media (max-width: 992px) {
        .col-md-3.col-sm-6.col-xs-12.adv_lr {
            margin-left: 0;
        }

        .add_feat.exch_lev.common_spacing:after {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .banner_img img {
            max-width: 100%;
            margin-top: 0%;
        }

        .pad {
            padding: 0px !important;
        }

        .box_banner {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .d-none {
            display: none;
        }

        .card-desc p {
            min-height: auto !important;
        }

        .btn-card {
            position: relative !important;
            bottom: 0 !important;
            left: auto !important;
            right: auto !important;
            text-align: center !important;
            margin: 0 auto !important;
            display: block !important;
            max-width: 200px !important;
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
            background: #023c5100;
        }

        .ct_box {
            margin-top: 30px;
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

        .col-md-3.col-sm-6.col-xs-12.adv_lr {
            margin-left: 0%;
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

        .cnt_box h4.sec_tit {
            font-size: 25px !important;
        }

        .cnt_box p {
            font-size: 17px;
            max-width: 800px;
            margin: 20px auto 20px;
            line-height: 1.6;
        }

        .eto-exchange-flip .flip-box {
            min-height: auto;
        }

        .pr_arr:after,
        .pr_arr:before,
        .banner_content p br,
        .sec_tit br {
            display: none !important;
        }

        .feal_cnt h5 {
            margin-top: 15px;
            margin-bottom: 5px;
        }
    }

    h3.section-title {
        font-size: 25px !important;
        font-weight: bold;
        text-transform: capitalize;
    }

    .ban_form {
        background: #29292999;
        box-shadow: 0 0 10px #fff;
        max-width: 500px;
        margin: 0 auto;
        padding: 30px 30px 10px;
        border-radius: 5px;
    }

    .ban_form .form-group {
        margin-bottom: 20px;
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

    .ban_form label {
        display: none;
        font-size: 14px;
        margin-bottom: 7px;
        padding-left: 0 !important;
    }

    .ban_form input#phone_banner {
        color: #000;
        width: 100%;
        border: none;
        box-shadow: none;
        background: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .submit_btn_b button.common_send_btn {
        display: inline-block;
        margin-top: 10px;
        background: #000;
        border-radius: 4px;
        border: 1px solid #fff;
        padding-left: 40px;
        padding-right: 40px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 0;
    }

    .sto-flip .flip-box {
        min-height: 300px;
    }

    .img-text-box h5 {
        font-weight: 500;
        text-transform: capitalize;
        margin-bottom: 10px;
        font-size: 20px;
        margin-top: 15px;
    }

    .img-text-box p.feature-desc {
        line-height: 1.7;
    }

    .img-text-box {
        max-width: 440px;
        margin: 0 auto;
    }

    .faq-content #accordion .panel-title>a.accordion-toggle::before,
    .faq-content #accordion a[data-toggle=collapse]::before {
        margin-top: 0px !important;
    }

    body .faq-content .panel-heading {
        background: #fff !important;
        color: #666;
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

    .ct_box {
        background: #f5f5f5;
        padding: 20px;
        border: 3px solid #eee;
    }

    .ct_box p {
        margin-bottom: 20px;
        font-size: 19px;
        color: #999 !important;
    }

    .ct_box p strong {
        color: #000000 !important;
    }

    .flip-box-row {
        margin-bottom: 0;
    }

    .flip-box {
        margin-bottom: 30px;
    }

    a.home-talk-experts.w_bt {
        background: no-repeat;
        color: #47b475;
        border: 2px solid #47b475;
        padding: 8px 25px;
    }

    a.home-talk-experts.w_bt:hover {
        color: #000 !important;
    }

    .sec_tit h2 {
        display: inline;
    }

    .dc {
        padding: 100px 0;
    }

    .details-card {
        background: #b0b0b085;
    }

    .card-content {
        background: #ffffff;
        border: 4px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        margin-bottom: 30px;
        border-radius: 7px;
        position: relative;
    }

    .card-desc a {
        font-size: 15px;
    }

    .card-img {
        position: relative;
        overflow: hidden;
        border-radius: 0;
        z-index: 1;
        box-shadow: -1px 5px 13px 4px #0000002e;
        border-radius: 7px;
    }

    .card-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    .card-img span {
        position: absolute;
        top: 15%;
        left: 12%;
        background: #2ecc71;
        padding-left: 20px;
        padding: 6px;
        color: #fff;
        font-size: 15px;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -ms-border-radius: 4px;
        -o-border-radius: 4px;
        transform: translate(-50%, -50%);
    }

    .card-img span h4 {
        font-size: 13px;
        margin: 0;
        padding: 10px 5px;
        line-height: 0;
    }

    .card-desc {
        padding: 1.25rem;
    }

    .card-desc h3 {
        color: #555;
        font-weight: 600;
        font-size: 20px;
        line-height: 1.3em;
        margin-top: 0;
        margin-bottom: 5px;
        padding: 0;
    }

    .di-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .card-content:hover {
        box-shadow: 5px 5px 20px 7px #00000030;
        transition: all 0.5s ease-in-out;
    }

    .card-desc p {
        color: #747373;
        font-size: 14px;
        font-weight: 400;
        font-size: 1em;
        line-height: 1.6;
        margin: 0px;
        min-height: 285px;
        margin-bottom: 20px;
        padding: 0;
        text-align: justify;
        font-family: 'Raleway', sans-serif;
    }

    .card-content a:hover {
        color: #fff !important;
    }

    .btn-card {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
    }

    .btn-card {
        background-color: #2ecc71;
        color: #fff;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
        padding: .84rem 2.14rem;
        font-size: .81rem;
        -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        margin: 0;
        border: 0;
        -webkit-border-radius: .125rem;
        border-radius: .125rem;
        cursor: pointer;
        text-transform: uppercase;
        white-space: normal;
        word-wrap: break-word;
        color: #fff;
    }

    .btn-card:hover {
        background: #1abc9c;
    }

    a.btn-card {
        text-decoration: none;
        color: #fff;
    }

    .card-img span {
        display: none;
    }

    .text-white {
        color: #fff;
    }

    .gray-bg {
        background-color: #f7f7f7;
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
        margin: 5px 0;
    }

    .new-features .awesome-features-wrapper {
        padding: 30px 15px;
        position: relative;
        transition: 1s;
        border-radius: 7px;
        min-height: auto;
        margin: 25px;
        background: #140050;
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
                                <div class="ban_tirt">
                                    <h1>NFT Music Marketplace Development</h1>
                                </div>
                                <p class="text-white"> Transform the music industry with the vibrant and revolutionary attributes of Blockchain technology through NFT music marketplaces. </p>
                                <!-- <a class="nectar-button medium regular accent-color regular-button" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
                            <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Talk with our Experts</span></a>-->
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
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center">
                            <img src="{{ asset('images/nft_music/nft_music.webp') }}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit">
                        <h2>NFT Marketplace for music: Energize Your Business with Innovation</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="mt10 text-center">The surge of NFTs has opened up extraordinary business possibilities within the blockchain ecosystem. As NFTs continue to evolve, they allow users to mint a wide range of unique assets—be it patents, tweets, media files, or creative prototypes. This innovation highlights the potential for a world that values uniqueness and authenticity. The explosion of creativity and research in the tech community is reshaping industries and pushing boundaries, with NFTs driving an impressive 1,785% increase in market cap. Notable digital artists like Beeple have reaped significant rewards from NFTs. We are revolutionizing the music industry by launching Music NFTs and unlocking new potential with our Music NFT Marketplace, which features physically redeemable NFTs.</p>
                    </div>

                </div>
                <div class="text-center cta_mine marg-t">
                    <!-- <a class="nectar-button medium regular accent-color regular-button" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
                  <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Talk with our Experts</span></a> -->
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
                            data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2>Empowering Musicians with NFTs </h2>
                    </div>
                </div>
                <p class="mt10 text-justify">The rise of NFT music marketplaces is revolutionizing how musicians connect with their fans and monetize their craft. These platforms now offer a powerful stage for lesser-known artists, allowing them to present their work to a global audience and earn significant royalties. While this is a game-changer for many, the reality of these marketplaces can be more complex than it appears.</p>
                <p class="text-justify">For well-established artists with large followings, NFTs can translate into substantial revenue, potentially generating millions in sales and boosting their royalty income. However, smaller artists—especially those who have been struggling due to the economic impact of the COVID-19 pandemic—often face difficulties in achieving similar financial success. Many are finding their royalty checks dwindling to modest amounts of $20 to $120 over a couple of months.</p>
                <p class="text-justify musicians-pad">To bridge this gap, there’s a growing focus on NFT marketplaces tailored specifically for music. Unlike more generalized platforms like Sorare and Rarible, these specialized marketplaces offer targeted opportunities for musicians. Our music NFT Marketplace is designed to address these challenges by providing a secure and authentic platform for artists to mint and sell their original work. This ensures that their creations are protected from piracy and that they receive fair compensation, giving smaller artists a vital opportunity to thrive in a competitive industry.
                </p>
            </div>
        </div>

        <style>
            @media screen and (max-width:425px) {
                .musicians-pad {
                    margin-bottom: 0px;
                }

                a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                    padding: 10px 7px;
                }
            }

            .marg-t {
                margin-top: -20px;
            }
        </style>

        <style type="text/css">
            .pad {
                padding: 29px 50px 0px 100px;
                text-align: justify;
            }

            .box_banner {
                background-image: url(images/nftm/6.webp);
                background-size: cover;
                padding-top: 80px;
                padding-bottom: 80px;
                padding-left: 80px;
                padding-right: 70px;
                height: auto;
            }

            .arrow {
                padding: 4% 6%;
                background: #fdfdfd;
                border-radius: 10px;
                box-shadow: 0 0 16px 6px #00000021;
                margin-top: 68px;
                margin-bottom: auto;
            }

            @media screen and (max-width:425px) {
                .arrow {
                    margin-top: 0;
                }
            }
        </style>

        <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="">
                            <div class="section-title underline text-left">
                                <div class="sec_tit">
                                    <h2>How Music NFTs Make Their Mark in the Marketplace</h2>
                                </div>
                            </div>
                            <p>Music NFT marketplaces enable creators to mint and list their NFTs, granting them crucial visibility to a global audience. These platforms are highly regarded within the investor and collector communities, who frequently visit to stay updated on trends and acquire distinctive NFTs. Users can bid on these NFTs and purchase them at competitive prices, which can significantly benefit the creators.</p>
                            <p>Marketplaces often leverage scarcity as a strategy, offering limited editions of NFTs to create a sense of demand and drive up prices. This trading approach is akin to stock exchanges, providing substantial rewards for both artists and fans. Many platforms also offer DIY options, allowing artists to set starting prices, and issue, and mint their NFTs independently.</p>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="arrow">
                            <h3 class="re-font">Redeemable NFTs: A Unique Offering:</h3>
                            <p>Our marketplace stands out by introducing redeemable NFTs, a feature that lets musicians sell their albums through NFTs. Buyers can redeem these NFTs to obtain the actual albums, enhancing circulation and increasing demand. This innovative approach helps artists extend their reach and effectively share their music with a global audience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="common_spacing gray_bg new-features" style="background: #140050;">
            <div class="container">
                <div class=" ">
                    <h2 class="sec_tit underline text-center text-white">Features That Distinguish Your Music NFT Marketplace</h2>
                </div>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-wallet"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Integrated Digital Wallet</strong>Embed a digital wallet directly into your marketplace, allowing users to securely manage, access, and transact in cryptocurrencies and music NFTs effortlessly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-sitemap"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Support for Multiple Wallets</strong>Facilitate user convenience by enabling connections to various existing wallets through API integrations with leading wallet providers, enhancing accessibility and user satisfaction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-pencil-square-o"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Automated Smart Contracts</strong>Implement smart contracts that automate processes within the music NFT marketplace based on predefined conditions, eliminating the need for intermediaries and streamlining operations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-file-text"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Exclusive Content Access</strong>Provide special access to exclusive music content, including unreleased tracks, live recordings, and demos through gated tokens, significantly boosting fan engagement and loyalty.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .re-font {
                font-weight: 600;
                margin-bottom: 10px;
            }

            .link-col {
                color: #000000 !important;
            }
        </style>


        <style type="text/css">
            .whychoose_sec ul li {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                margin-bottom: 10px;
            }

            .whychoose_sec .icon_img {
                border: 2px solid #47b475;
                border-radius: 5px;
                padding: 5px;
            }

            .whychoose_sec .icon_img img {
                border-radius: 15%;
                display: inline-block;
                padding: 10px;
                background: #fff;
                box-shadow: 0 20px 50px rgb(0 0 0 / 10%);
            }

            .whychoose_sec .content {
                width: 85%;
                padding-left: 20px;
            }

            .whychoose_sec .content p {
                margin-bottom: 15px;
            }

            .br {
                border-radius: 10px;
            }

            .whychoose_sec p strong {
                font-size: 20px;
                color: #444040;
            }

            @media screen and (min-width: 768px) {
                .hgh {
                    height: 535px !important;
                }

                .hght {
                    height: 530px !important;
                }
            }
        </style>



        <section class="whychoose_sec common_spacing pad50 gray_bg">
            <div class="container" style="padding:20px;">
                <div class="row">
                    <div class="section-title underline text-center">
                        <div class="sec_tit">
                            <h2>Why Our Music NFT Marketplace is a Game-Changer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="text-left">
                            <li>
                                <div class="icon_img"><img class="lazy"
                                        src="{{ asset('images/nft_music/icon/live-streaming.png') }}" alt="" width="60px"
                                        height="60px"></div>
                                <div class="content">
                                    <p><strong>Ongoing Royalties</strong></p>
                                    <p>Purchasing an NFT ensures that both fans and artists benefit from continuous revenue as the music associated with the NFT generates profits for years to come.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/audience.png') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Expanded Audience Reach</strong></p>
                                    <p>Choosing a marketplace with a broad and active user base can introduce artists to a wider, more diverse audience, leading to increased revenue opportunities.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/fans.png') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Growing Fanbase</strong></p>
                                    <p>By leveraging a prominent platform, creators can rapidly expand their audience, gaining thousands of new listeners and significantly boosting their visibility.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/contract.webp') }}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Enduring Legacy</strong></p>
                                    <p>Our marketplace offers artists the chance to create a lasting legacy. Minted NFTs will persist over time, potentially providing ongoing financial support for the artist's family for generations.</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <img class="lazy br hgh" src="{{ asset('images/nft_music/nft-coin.png') }}"
                            alt="NFT Music Marketplace Development" title="NFT Music Marketplace Development">
                    </div>
                </div>
            </div>
        </section>

        <section class="whychoose_sec common_spacing pad50 mob-resp-pad">
            <div class="container" style="padding:20px;">
                <div class="row">
                    <div class="section-title underline text-center">
                        <div class="sec_tit">
                            <h2>Exceptional Features for Music NFT Collectors and Creators</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img class="lazy br hght" src="{{ asset('images/nft_music/art.png')}}" style="margin-top: 25%"
                            alt="NFT Music Marketplace Features" title="NFT Music Marketplace Features">
                    </div>
                    <div class="col-md-6 res-mar-top">
                        <ul class="text-left">
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/album.png')}}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Album Artwork</strong></p>
                                    <p>Enhance the appeal of your NFT offerings with striking album art that captures the essence of each release.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/lyrics.png')}}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Lyrics Integration</strong></p>
                                    <p>Provide fans with the complete experience by including lyrics alongside music NFTs, making every purchase more immersive.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/music-notes.png')}}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Music Notes</strong></p>
                                    <p>Incorporate music notes and sheet music into the NFTs, offering a unique way for fans and musicians to engage with compositions.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/catalogue.png')}}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Artist Catalogs</strong></p>
                                    <p>Our platform features comprehensive artist catalogs with detailed information, including ratings, song play frequency, token pricing, and more, creating endless possibilities for exploration.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/currency.webp')}}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Multi-Currency Support</strong></p>
                                    <p>Seamlessly integrate decentralized exchanges (DEX) to facilitate currency conversions, ensuring a smooth and flexible buying experience for NFT enthusiasts.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/cross-chain.webp')}}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Cross-Chain Compatibility</strong></p>
                                    <p>Build your marketplace on a multi-chain foundation, integrating with networks like Ethereum, TRON, Binance Smart Chain, and EOS for expanded reach and versatility.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_img"><img class="lazy" src="{{ asset('images/nft_music/icon/physical-asset.png')}}"
                                        alt="" width="60px" height="60px"></div>
                                <div class="content">
                                    <p><strong>Physical Asset NFTs</strong></p>
                                    <p>Enable the creation of NFTs tied to physical assets through custom smart contracts, bridging the digital and physical worlds.</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center cta_mine marg-t">
                    <!-- <a class="nectar-button medium regular accent-color regular-button" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
                  <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Talk with our Experts</span></a> -->
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
                        <a href="#newsletter-form-sec"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .link-col1 {
                color: #000000 !important;
                font-weight: 600;
            }

            @media screen and (max-width:768px) {
                .res-mar-top {
                    margin-top: 20px;
                }
            }

            @media screen and (max-width:425px) {
                .mob-resp-pad {
                    padding-bottom: 0;
                }
            }
        </style>


        <style type="text/css">
            .service-section {
                /* background: #fff; */
                position: relative;
                overflow: hidden;
            }


            .pad-tb {
                padding-top: 100px;
                padding-bottom: 50px;
            }

            .box4 p {
                margin-top: 20px;
            }

            .box4 h3 {
                font-size: 20px;
                font-weight: 600;
                color: #444040;
            }

            .box4 {
                background: #fff;
                text-align: center;
                background-size: 200%;
                background-position: top right;
                background-repeat: no-repeat;
                text-align: center;
                padding: 33px 20px 10px;
                margin: 0;
                min-height: 376px;
                margin-bottom: 10px;
                position: relative;
                border: 1px solid #91d2ac;
                -webkit-border-radius: 8px;
                border-radius: 8px;
                /* -webkit-box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    transition: background 200ms ease-in-out; */
                transition: all 100ms ease-in-out !important;

            }

            .s-card-icon {
                width: 60px;
                margin: 0 auto 30px;
            }

            .box4:hover {
                box-shadow: 0 15px 10px #777;
                min-height: 392px;
                transition: all 100ms ease-in-out !important;
                background: linear-gradient(to right, #285e918c 35%, #22729a29 100%);
                box-shadow: 1px 2px 1px -1px #777;
            }

            .box4:hover .ico-anim {
                border-bottom: 2px dotted #304a8d;
                padding-bottom: 10px;
                transition: all 100ms ease-in-out !important;
            }
        </style>



        <section class="service-section web-servic common_spacing gray_bg">
            <div class="container">
                <div class="section-header underline text-center">
                    <h2 class="sec_tit text-dark">Leading Expertise in Music NFT Marketplace Development</h2>
                </div>
                <p class="text-center">We offer top-tier expertise and transparency in crafting Music NFT marketplaces with unmatched precision.</p>
                <div class="row upset link-hover shape-num justify-content-center">
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img class="lazy ico-anim"
                                    src="{{ asset('images/nft_music/icon/cross-chain.webp') }}"></div>
                            <h3>Cross-Platform Integration</h3>
                            <p>Our team excels in providing bespoke, cross-platform solutions tailored to your specifications, ensuring seamless integration across various systems.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img class="lazy ico-anim"
                                    src="{{ asset('images/nft_music/icon/support.png') }}"></div>
                            <h3>24/7 Support</h3>
                            <p>Our Chennai-based support team is available around the clock to address any queries and provide assistance whenever needed.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img class="lazy ico-anim"
                                    src="{{ asset('images/nft_music/icon/idea.png') }}"></div>
                            <h3>Transparent Communication</h3>
                            <p>We prioritize clear and thorough communication, ensuring every detail and workflow is fully understood before moving forward with your project.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s"
                        style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <div class="box4 mb0"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img class="lazy ico-anim"
                                    src="{{ asset('images/nft_music/icon/customize.webp') }}"></div>
                            <h3>Tailored Customization</h3>
                            <p>We offer extensive customization options to build your Music NFT platform from the ground up, aligning perfectly with your unique vision and requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            @media screen and (max-width:425px) {
                .box4 {
                    min-height: auto;
                }
            }
        </style>



        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => "Is it possible to sell music as an NFT?",
                    'ans' => "Yes, you can sell music as an NFT. By minting your music as a non-fungible token, you can offer unique digital assets to buyers, allowing them to own and trade exclusive tracks or albums on NFT marketplaces."
                ],
                [
                    'ques' => "What does NFT signify in the music industry?",
                    'ans' => "In the music industry, an NFT (non-fungible token) represents a unique digital asset linked to music content. It can include rights to tracks, albums, artwork, and exclusive content, providing artists with new revenue streams and ways to engage with fans."
                ],
                [
                    'ques' => "How can I invest in music NFTs?",
                    'ans' => "To invest in music NFTs, start by exploring NFT marketplaces that feature music content. Look for unique offerings, bid on or purchase NFTs, and use a compatible digital wallet to manage your assets. Research the artist and the NFT's potential value to make informed investments."
                ],
                [
                    'ques' => "What steps are involved in creating a music NFT platform?",
                    'ans' => "Creating a music NFT platform involves several steps: designing the platform, integrating blockchain technology for NFT minting and transactions, setting up user interfaces, and ensuring secure smart contracts. Engage with experienced developers to build a robust and user-friendly platform tailored to the music industry."
                ],
            ],
        ])
    </div>

    <style>
        a:hover,
        a:focus {
            text-decoration: none;
            outline: none;
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
            padding: 12px 15px 12px 50px;
            /*background: linear-gradient(to bottom, #fefefe, #cdcdcd);*/
            border: 1px solid #c3c3c3;
            border-radius: 3px;
            font-size: 16px;
            font-weight: bold;
            color: #000000;
            /*    text-shadow: 1px 1px 1px #fff;*/
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
            /*box-shadow: inset 0 0 10px rgba(0,0,0,0.5);*/
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

        @media screen and (max-width:425px) {
            .faq-res-pad {
                padding: 20px 0;
            }
        }
    </style>
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

    /* .dropdown-menu {
        background-color: rgb(11 53 113);
        backdrop-filter: blur(23px);
        box-shadow: 0 12px 28px 1px rgb(0 0 0 / 15%), 0 2px 4px 0 rgb(255 255 255 / 50%);
        border: 1px solid #ffffff12;
        transform: translate(0, 0);
        border-radius: 5px !important;
        transition: all 0.2s ease-out;
        padding: 5px 10px;
    } */

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




<!-- Side Panel - End -->
<script type="f43bb7df5b0e34955fdb9536-text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 9464790;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>


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


@endsection