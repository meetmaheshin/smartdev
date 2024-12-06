@extends('layouts.static')
    @section('title', 'NFT Minting Platform Development')
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

    .flip-icon-outer {
        padding: 19px 0px;
    }

    .flip-icon {
        height: 48px;
    }

    .ovr {
        background: #00000000;
        width: 100%;
        margin: 0 auto;
        padding: 5%;
        color: #fff;
        border-radius: 10px;
    }

    .banner-overlay {
        background-color: #000000ba;
    }

    .strategies-items1 .icons {
        order: 2;
        margin-right: 15px;
    }

    .card-desc a {
        font-size: 15px;
        display: inline-block;
        max-width: 200px;
        margin: 0 auto 20px;
        border-radius: 4px;
    }

    .banner {
        background-image: url('{{ asset('images/nftmi/nft-ban.webp') }}');
        background-size: cover;
        padding-top: 138px;
        padding-bottom: 50px;
        height: auto;
    }

    .eto-exchange-flip .flip-box {
        min-height: 365px;
    }

    h3.common_h3 {
        font-size: 30px !important;
    }

    .bg-2 {
        background-image: linear-gradient(45deg, black, #00000052), url(images/ido/bg-3.webp);
        background-size: cover;
        padding-top: 65px;
        padding-bottom: 50px;
        height: auto;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
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

    .contentall h1 {
        color: #fff !important;
    }

    .contentall p {
        color: #fff !important;
    }

    .contentall h1,
    .ban_tirt {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 37px;
    }

    .contentall p {
        font-weight: normal;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 21px;
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

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        letter-spacing: 0;
        line-height: 1.3;
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
            margin-top: 30px;
            text-align: center;
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)));
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 50px;
        }

        .banner-overlay {
            background: #000000ba;
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
            min-height: 360px;
        }

        #pre-ico-services .technicalbox {
            background: #f3f3f3;
            min-height: 450px !important;
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

    @media (max-width: 426px) {
        .ces-point ul li {
            min-height: 202px !important;
            width: 48% !important;
        }

        .eto-exchange-flip .flip-box {
            min-height: auto !important;
        }

        #pre-ico-services .technicalbox {
            background: #f3f3f3;
            min-height: auto !important;
        }
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
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
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

    body .faq-content .panel-heading {
        background: #eee !important;
        color: #666;
    }

    div#assis_t .flip-box {
        padding: 30px 15px 20px;
        min-height: 280px;
    }

    .intro_cnt img {
        border-radius: 10px;
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
        color: #444 !important;
    }

    .flip-box-row {
        margin-bottom: 0;
    }

    .flip-box {
        margin-bottom: 30px;
        padding: 30px 14px;
        min-height:
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
        color: #000000;
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
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        margin: 0;
        border: 0;
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

    #pre-ico-services .technicalbox {
        background: #ffffff;
        min-height: 345px;
    }

    .technicalbox {
        background: #fff;
        border-radius: 3px;
        box-shadow: 0 5px 50px 0 rgb(0 0 0 / 4%);
        margin-bottom: 30px;
        padding: 15px;
        position: relative;
    }

    .exp_function {
        background: #ffffff;
    }

    ul.f_point {
        position: relative;
        padding: 0px;
        padding-left: 80px;
        margin-top: 15px;
    }

    ul.f_point:before {
        content: "";
        position: absolute;
        width: 1px;
        height: 100%;
        background: #00cb99;
        left: 42px;
    }

    ul.f_point li {
        position: relative;
        padding-left: 25px;
        padding-bottom: 15px;
    }

    ul.f_point li:before {
        content: "";
        position: absolute;
        width: 15px;
        height: 15px;
        background: #00cf92;
        left: 0px;
        top: 11px;
        border-radius: 100%;
        border: 3px solid #fff;
    }

    ul.f_point li .icon {
        width: 55px;
        height: 55px;
        background: #00cf92;
        transform: rotate(45deg);
        position: absolute;
        left: -65px;
        top: 1px;
        padding-bottom: 48px;
    }

    ul.f_point li .icon:before {
        content: "";
        position: absolute;
        width: 20px;
        height: 2px;
        background: #00cf92;
        transform: rotate(-45deg) translateX(48px);
        top: 29px;
    }

    ul.f_point li .icon img {
        width: 40px;
        height: 40px;
        margin-top: 12px;
        margin-left: 10px;
        transform: rotate(-45deg) translate(0px, -2px);
        padding: 4px;
        filter: brightness(0) invert(1);
    }

    ul.f_point h4 {
        font-size: 18px;
        color: #000;
        text-shadow: 0px 0px;
    }

    .ig-sz {
        height: 460px;
        width: 100%;
    }

    @media screen and (max-width:768px) {
        .ig-sz {
            height: auto;
            width: 100%;
            margin-bottom: 20px;
        }
    }

    .serv_box {
        background: #fff;
        padding: 15px 15px 0 15px;
        text-align: center;
        border: 4px solid #eee;
        min-height: 295px;
        margin-bottom: 20px;
    }

    .serv_box_ic {
        margin: 10px auto 10px;
    }

    .serv_box_ic img {
        height: 70px;
    }

    .serv_box_cnt h4 {
        font-weight: 700;
        font-size: 18px;
    }

    .flip-tit {
        font-size: 20px;
        color: #000000;
        line-height: 1.6;
        margin-bottom: 11px;
        font-weight: 700;
    }

    .technicalbox h3 {
        font-size: 18px;
        color: #000000;
        font-weight: 700;
    }
</style>

<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="bnr_content">
                                    <div class="ban_tirt">
                                        <h1>NFT Minting Platform Development</h1>
                                    </div>
                                    <p>Elevate your crypto portfolio by minting exclusive NFTs that embody your one-of-a-kind collectibles.
                                    </p>
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
                                                href="#"
                                                data-color-override="false" data-hover-color-override="false"
                                                data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION </span></a> --}}
                                            <a href="{{ url('consultation') }}"
                                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 hidden-sm">
                            <img src="{{ asset('images/nftmi/banner.avif') }}" alt="NFT Minting Development" title="NFT Minting Development">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="sec_tit underline text-center">
                    <h2>Why Investing in NFT Minting is a Game-Changer</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center mt20">NFTs, as digital tokens, carry immense value in the crypto landscape, representing one-of-a-kind assets such as exclusive art, sculptures, and music. The burgeoning interest in NFTs has sparked innovative uses, including tweets, prototypes, patents, and more, driving unprecedented engagement.</p>
                        <p class="text-center">NFTs are not just collectibles; they are powerful tools for businesses to showcase new concepts and ideas to a global audience. The rise of NFT standards, notably pioneered by Ethereum, has inspired a multitude of blockchain networks to adopt and innovate in the NFT space.</p>
                        <p class="text-center">As the NFT minting process evolves, more companies are diving into this trend to boost their market visibility. Minting NFTs offers substantial financial advantages, with the potential for significant sales in auctions and marketplaces. Furthermore, these NFTs can be leveraged as collateral for fiat currency, providing immediate liquidity.</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h3 class="section-title underline mb20">NFT Token Standards: Powering Digital Uniqueness</h3>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="card-content">
                            <div class="card-img"> <img class="lazy" src="{{ asset('images/nftmi/1.webp') }}"> </div>
                            <div class="card-desc">
                                <h3>ERC-721</h3>
                                <p>The ERC-721 standard on Ethereum introduces a groundbreaking way to handle non-fungible tokens (NFTs), representing your unique digital assets with unparalleled distinctiveness. This standard ensures that each NFT carries unique attributes, imbuing your assets with significant intrinsic value.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 d-flex">
                        <div class="card-content">
                            <div class="card-img"> <img class="lazy" src="{{ asset('images/nftmi/2.webp') }}"> </div>
                            <div class="card-desc">
                                <h3>ERC-1155</h3>
                                <p>The ERC-1155 standard, pioneered by Enjin, redefines flexibility by offering semi-fungibility. This allows for the seamless trade and transfer of NFTs, enhancing both scalability and versatility for your digital assets. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 d-flex">
                        <div class="card-content">
                            <div class="card-img"> <img class="lazy" src="{{ asset('images/nftmi/4.webp') }}"> </div>
                            <div class="card-desc">
                                <h3>ERC-998</h3>
                                <p>ERC-998 elevates the concept of token standards by enabling the composition of multiple ERC-721 or ERC-20 tokens within a single framework. This innovation allows users to bundle various NFTs or tokens, facilitating streamlined acquisitions and management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 d-flex">
                        <div class="card-content">
                            <div class="card-img"> <img class="lazy" src="{{ asset('images/nftmi/3.webp') }}"> </div>
                            <div class="card-desc">
                                <h3>TRC-721</h3>
                                <p>Developed by TRON, the TRC-721 standard adapts the principles of Ethereum's ERC-721, introducing a new level of transparency, scalability, and security within the TRON blockchain ecosystem. This standard inherits the robust features of its predecessor while enhancing performance and reliability.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="pros-trading common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h3 class="section-title underline mb20">Crafting Your NFT Experience</h3>
                    </div>
                </div>
                <div class="mt60">
                    <div class="row flip-box-row eto-3xchange-flip">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img class="flip-icon lazy"
                                        src="{{ asset('images/nftmi/icon/assets.png') }}"> </div>
                                <h4 class="flip-tit">Select Your Asset</h4>
                                <p class="flip-txt">Curate your digital asset and detail its description with precision. Once you’ve perfected your choice, initiate the minting process.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img class="flip-icon lazy"
                                        src="{{ asset('images/nftmi/icon/multiple-wallets.png') }}"> </div>
                                <h4 class="flip-tit">Initiate Minting</h4>
                                <p class="flip-txt">The minting process kicks off upon approval of the gas fee. Your unique asset’s digital representation will be deployed via smart contracts. Track the progress of your minting in real time.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img class="flip-icon lazy"
                                        src="{{ asset('images/nftmi/icon/transactional.png') }}"> </div>
                                <h4 class="flip-tit">Finalize Your NFT</h4>
                                <p class="flip-txt">Complete the transaction through your wallet. Signing your NFT links it to your Ethereum address, ensuring you receive royalties with each sale.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img class="flip-icon lazy"
                                        src="{{ asset('images/nftmi/icon/line-chart.svg') }}"> </div>
                                <h4 class="flip-tit">Prevent Double-Minting</h4>
                                <p class="flip-txt">To avoid complications, refrain from initiating multiple minting attempts during a single transaction. Excessive clicks may result in duplicate transactions.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img class="flip-icon lazy"
                                        src="{{ asset('images/nftmi/icon/gas-pump.png') }}"> </div>
                                <h4 class="flip-tit">Confirm Gas Fee</h4>
                                <p class="flip-txt">Authorize the gas fee through your wallet to finalize the minting. This fee covers the transaction costs required to interact with the Ethereum blockchain.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img class="flip-icon lazy"
                                        src="{{ asset('images/nftmi/icon/business-report.png') }}"> </div>
                                <h4 class="flip-tit">View Your Minted NFTs</h4>
                                <p class="flip-txt">Once the transaction is confirmed, your newly minted NFT will appear in your dashboard, showcasing your creation.</p>
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
                </div>
            </div>
        </div>
        <div id="pre-ico-services" class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <h3 class="sec_tit underline text-center" style="width: 100%">Hot Trends in Mintable NFTs</h3>
                </div>
                <div class="row">
                    <div class="grids">
                        <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="technicalbox text-center">
                                <div class="technical-icon"> <span><i class="fa fa-gamepad"
                                            aria-hidden="true"></i></span> </div>
                                <h3>Gaming Assets</h3>
                                <p>Revolutionize the gaming experience with unique NFTs representing in-game assets such as weapons, characters, or vehicles. These NFTs enhance gameplay with realism and exclusivity.</p>
                            </div>
                        </div>
                        <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="technicalbox text-center">
                                <div class="technical-icon"> <span><i class="fa fa-music" aria-hidden="true"></i></span>
                                </div>
                                <h3>Collectibles</h3>
                                <p>Mint distinctive collectibles—such as art, music, or even tweets—that command high demand and can fetch substantial sums. These NFTs are highly coveted in the marketplace.</p>
                            </div>
                        </div>
                        <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="technicalbox text-center">
                                <div class="technical-icon"> <span><i class="fa fa-trophy"
                                            aria-hidden="true"></i></span> </div>
                                <h3>Sports Memorabilia</h3>
                                <p>Mint NFTs of sports accessories and prototypes to captivate the crypto community. This approach helps brands introduce and promote new products effectively.</p>
                            </div>
                        </div>
                        <div class="grid col-lg-offset-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="technicalbox text-center">
                                <div class="technical-icon"> <span><i class="fa fa-picture-o"
                                            aria-hidden="true"></i></span> </div>
                                <h3>Digital Artworks</h3>
                                <p>Tap into the booming market for digital art by minting unique pieces as NFTs. This not only attracts vast audiences but also generates significant revenue streams for your platform.</p>
                            </div>
                        </div>
                        <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="technicalbox text-center">
                                <div class="technical-icon"> <span><i class="fa fa-building"
                                            aria-hidden="true"></i></span> </div>
                                <h3>Virtual Real Estate and Infrastructure</h3>
                                <p>Invest in the burgeoning sector of digital assets by minting virtual lands and infrastructure. These NFTs represent valuable assets like properties, hotels, and gas stations in a decentralized space, mirroring the growing interest seen in cryptocurrencies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="exp_function common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <h2 class="sec_tit underline text-center">Advantages of Launching an NFT Minting Platform</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-6 col-xs-12">
                    <ul class="f_point">
                        <li>
                            <div class="icon"><img class="lazy" src="{{ asset('images/nftmi/icon/shopping-cart.svg') }}"></div>
                            <h4>Enhanced Market Presence</h4>
                            <p>Establishing an NFT minting platform elevates your visibility within the crypto community, positioning your business as a unique investment opportunity in a crowded market.</p>
                        </li>
                        <li>
                            <div class="icon transaction"><img class="lazy"
                                    src="{{ asset('images/nftmi/icon/live-stream.svg') }}"></div>
                            <h4>Consistent Revenue Flow</h4>
                            <p>Creating distinctive NFTs facilitates a steady revenue stream, driven by service and transaction fees, ensuring financial stability for your business.</p>
                        </li>
                        <li>
                            <div class="icon address"><img class="lazy" src="{{ asset('images/nftmi/icon/settings.svg') }}">
                            </div>
                            <h4>Investor Attraction</h4>
                            <p>Utilize NFTs as a powerful marketing tool to showcase new products and prototypes, drawing significant attention and interest from investors eager to mint on your platform.</p>
                        </li>
                        <li>
                            <div class="icon contract"><img class="lazy" src="{{ asset('images/nftmi/icon/audience.svg') }}">
                            </div>
                            <h4>Long-Term Viability</h4>
                            <p>A forward-thinking NFT platform helps your business remain resilient amidst the volatility of the crypto market, ensuring long-term sustainability.</p>
                        </li>
                        <li>
                            <div class="icon contract"><img class="lazy"
                                    src="{{ asset('images/nftmi/icon/movie-theater.svg') }}"></div>
                            <h4>Increased Audience Engagement</h4>
                            <p>Leverage the inherent value, uniqueness, and scarcity of NFTs to attract a larger and more engaged audience, boosting traffic and interest in your minting platform.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="ouaram_funtion_img"> <img class="lazy ig-sz" src="{{ asset('images/nftmi/nft-min2.png') }}">
                    </div>
                    <p class="mt40 text-justify">Our skilled development team excels in creating advanced NFT minting platforms, utilizing multiple blockchain technologies to give you a competitive edge in the evolving crypto landscape.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="exchange-section-new common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center m-b-30">
                        <h3 class="sec_tit underline">Standout Features of Our NFT Minting Platform</h3>
                    </div>
                </div>
            </div>
            <div class="row serv_bxw">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="serv_box">
                        <div class="serv_box_ic"> <img class="lazy" src="{{ asset('images/nftmi/icon/Integrity.png') }}"> </div>
                        <div class="serv_box_cnt">
                            <h4>Unbreakable Platform Integrity</h4>
                            <p>We engineer your NFT minting platform to withstand technical disruptions and critical failures, ensuring continuous, reliable operation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="serv_box">
                        <div class="serv_box_ic"> <img class="lazy" src="{{ asset('images/nftmi/icon/ecosystem.svg') }}"> </div>
                        <div class="serv_box_cnt">
                            <h4>Cutting-Edge NFTs</h4>
                            <p>Our team crafts your minting platform to set new trends and drive innovation in the crypto space, keeping you ahead of the curve.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="serv_box">
                        <div class="serv_box_ic"> <img class="lazy" src="{{ asset('images/nftmi/icon/cross-chain.webp') }}"> </div>
                        <div class="serv_box_cnt">
                            <h4>Seamless Cross-Chain Integration</h4>
                            <p>We build your platform within the Polkadot ecosystem, enabling seamless cross-chain interactions and broadening your operational scope.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4   col-sm-6 col-xs-12">
                    <div class="serv_box">
                        <div class="serv_box_ic"> <img class="lazy" src="{{ asset('images/nftmi/icon/security.png') }}"> </div>
                        <div class="serv_box_cnt">
                            <h4>Fortified Security Measures</h4>
                            <p>Security is paramount. We ensure your NFT details and ownership are safeguarded in a fortified environment, offering peace of mind and protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="serv_box">
                        <div class="serv_box_ic"> <img class="lazy" src="{{ asset('images/nftmi/icon/blockchain.webp') }}"> </div>
                        <div class="serv_box_cnt">
                            <h4>Dependable Ecosystem</h4>
                            <p>Our robust ecosystem ensures smooth, trouble-free minting processes, making your platform a trusted choice for independent investors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="serv_box">
                        <div class="serv_box_ic"> <img class="lazy" src="{{ asset('images/nftmi/icon/strategy.webp') }}"> </div>
                        <div class="serv_box_cnt">
                            <h4>Versatile Blockchain Integration</h4>
                            <p>Harnessing our deep blockchain expertise, we incorporate multiple blockchain technologies into your platform, enhancing its functionality and adaptability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2 col-md-offset-4 col-sm-6 col-xs-12">
                    <div class="serv_box">
                        <div class="serv_box_ic"> <img class="lazy" src="{{ asset('images/nftmi/icon/Strategie.png') }}"> </div>
                        <div class="serv_box_cnt">
                            <h4>Strategic Marketing Initiatives</h4>
                            <p>From development to market launch, our marketing strategy is designed to amplify your project’s presence in the crypto arena, attracting significant traffic and diverse audiences.</p>
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
                    <a href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
                </div>
            </div>
        </div>
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