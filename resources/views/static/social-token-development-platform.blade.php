@extends('layouts.static')
    @section('title', 'Social Token Development Platform')
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

    .panel-title {
        color: #161515;
    }

    .panel-body {
        color: #161515 !important;
    }
</style>


<style type="text/css">
    .banner_content {
        text-align: left;
    }

    @media screen and (width: 1024px) {
        .texchnicalbox {
            min-height: 513px;
        }
    }

    .technicalbox {
        min-height: 480px;
    }

    .banner-overlay {
        background-color: rgb(0 183 194 / 40%);
    }

    .strategies-items1 .icons {
        order: 2;
        margin-right: 15px;
    }

    .contentall h1 {
        color: #000;
    }

    .contentall p {
        color: #000;
    }

    .card-desc a {
        font-size: 15px;
        display: inline-block;
        max-width: 200px;
        margin: 0 auto 20px;
        border-radius: 4px;
    }

    .banner {
        background: #87ceeb;
        background-size: cover;
        padding-top: 138px;
        padding-bottom: 50px;
        height: auto;
    }

    h3.common_h3 {
        font-size: 30px !important;
    }

    .bg-2 {
        background-image: linear-gradient(45deg, black, #000000c2), url(images/sub/6.webp);
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
        font-weight: bold;
        color: #161515;
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

    @media (max-width: 425px) {
        .ces-point ul li {
            min-height: 202px !important;
            width: 48% !important;
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
        color: #161515 !important;
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
                                    <h1>Empower Your Community with Social Token Development</h1>
                                </div>
                                <p> Unlock the potential of digital currencies to amplify individual or community value with your unique tokens, driving substantial benefits and engagement.</p>
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
                                        data-hover-text-color-override="#fff"><span>Book a Consultation</span>
                                    </a> --}}
                                    <a href="{{ url('consultation') }}"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>Speak with Our Specialists</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-left d-flex justify-content-center">
                            <img src="{{ asset('images/sub/77.png') }}" class="br-5" alt="Social Token Development Platform"
                                title="Social Token Development Platform">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit">
                        <h2>Craft Your Digital Currency with Social Tokens</h2>
                    </div>
                </div>
                <div class="row mt40">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="mt10 text-center">Blockchain technology is redefining possibilities across all sectors, offering transformative potential for users and organizations alike. The rise of blockchain has led to groundbreaking innovations such as tokens and smart contracts, particularly with Ethereum setting a new benchmark in the field.</p>

                        <p class="mt10 text-center">These innovations have revolutionized the blockchain landscape, opening vast opportunities for entrepreneurs, investors, and professionals while fostering the growth of various industries. As the shift towards decentralized systems gains momentum, the ability to leverage tokens and smart contracts for immediate liquidity and fundraising has become increasingly valuable.</p>

                        <p class="mt10 text-center">Social tokens, a recent trend following the rise of NFTs, enable users to create their own digital currencies. These tokens represent individual or community services, enhancing engagement and offering personalized benefits in the expanding digital economy.</p>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .ct_warp {
                background-image: linear-gradient(45deg, black, #000000b5), url('{{ asset('images/sub/2.webp') }}');
                background-size: cover;
                padding-top: 70px;
                padding-bottom: 0;
                background-position: center center;
                padding-bottom: 70px;
                text-align: center;
                background-attachment: fixed;
            }

            .ct_warp h3 {
                font-weight: 600;

            }

            .ct_warp a.home-talk-experts:hover {
                color: #47b475 !important;
            }

            .ct_warp p {
                font-size: 16px;
                color: #fff;
                /* font-weight: bold; */
                line-height: 1.6;
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
        </style>
        <div class="ct_warp">
            <div class="container">
                <h3 class="text-white">Why Social Tokens Matter</h3>

                <div class="col-md-12">
                    <p class="text-center mt40">Social tokens, crafted under the ERC-20 standard, empower users to digitize and monetize their services in a groundbreaking way. These tokens enable creators to set their service fees in token form, which can be traded within liquidity pools. Traditionally, creators on platforms like YouTube face substantial service fees—typically 10-20%—and restrictive terms. Social tokens revolutionize this model by allowing musicians, artists, and writers to issue their own tokens, granting users access to exclusive content without intermediary charges or limitations. This innovation not only enhances revenue streams for creators but also fosters a direct, unrestricted relationship with their audience.
                    </p>
                </div>
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
                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                </div>
            </div>
        </div>
        <style type="text/css">
            .product-features {
                background: linear-gradient(rgb(71 180 117), rgba(0, 183, 194, 0.57)), transparent url(images/sub/4.webp) top left/cover no-repeat scroll;
            }

            .Package_list {
                display: inline-block;
                background: rgba(0, 0, 0, .6);
                padding: 30px 10px;
                max-width: 280px;
                width: 100%;
                margin-bottom: 20px;
                text-align: center;
                border-radius: 5px;
                min-height: 200px;
            }

            .Package_list img {
                height: 55px;
            }

            .Package_list span {
                display: block;
                font-size: 16px;
                margin-top: 12px;
                color: #fff;
            }

            .technicalbox:hover h3 {
                color: #fff !important;
            }

            .technicalbox:hover {
                background: #47b475 !important;
                color: #fff !important;
            }

            .technicalbox:hover .technical-icon:after {
                border: 4px solid #f2f2f2;
            }

            .tit-1 {
                font-weight: 700;
            }
        </style>
        <section class="product-features package_includes common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center" style="width: 100%">
                        <div class="sec_tit mb20">
                            <h3 class="section-title underline mb20">Social Token Features</h3>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="col-lg-3">
                            <div class="Package_list">
                                <img src="{{ asset('images/sub/icon/salary.png') }}"><span>Revenue Sharing Models</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="Package_list">
                                <img src="{{ asset('images/sub/icon/community.png') }}"><span>Community Empowerment</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="Package_list">
                                <img src="{{ asset('images/sub/icon/box.webp') }}"><span>Service Allocation</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="Package_list">
                                <img src="{{ asset('images/sub/icon/assets.png') }}"><span>Asset and NFT Backing</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="Package_list">
                                <img src="{{ asset('images/sub/icon/representation.webp') }}"><span>Self-Branding</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="Package_list">
                                <img src="{{ asset('images/sub/icon/working.png') }}"><span>Showcase of Work and Community</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="Package_list">
                                <img src="{{ asset('images/sub/icon/virtual.png') }}"><span>Digital Currency Functionality</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="Package_list">
                                <img src="{{ asset('images/sub/icon/lock.png') }}"><span>Community Access</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="post-ico-services" class="gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <h3 class="common_h3 font-wei">Categories of Social Tokens</h3>
                    <hr>
                </div>
                <div class="grids">
                    <div class="grid col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="technicalbox text-center">
                            <div class="technical-icon">
                                <span><i class="fa fa-usd" aria-hidden="true"></i></span>
                            </div>
                            <h3 class="tit-1">Personal Tokens</h3>
                            <hr>
                            <p>Personal tokens are digital assets created by individuals to symbolize their unique digital currency. These tokens empower freelancers and creators to monetize their skills and services directly. For example, an artist can charge for their work using their own tokens, fostering increased exposure and value for their digital currency as it circulates within the market.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="technicalbox text-center">
                            <div class="technical-icon">
                                <span><i class="fa fa-users" aria-hidden="true"></i></span>
                            </div>
                            <h3 class="tit-1">Community Tokens</h3>
                            <hr>
                            <p>Community tokens are established by groups or organizations to represent their collective identity and contributions. These tokens can be distributed to embody the group's influence and offered to third parties for participation. Users can buy these tokens to engage with the community, and the community can earn through token exchanges, enhancing their visibility and token circulation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <style type="text/css">
            .common_h3.sec-tit {
                color: #2b2c2d;
                font-weight: 600;
                letter-spacing: 1.5px;
                font-size: 27.46px;
            }

            .md-flex {
                display: flex;
                align-items: center;
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
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                top: -4px;
                right: 0;
                padding-right: 10px;
                content: "\f0a9";
                position: absolute;
                left: 0;
                font-size: 20px;
                color: #03b787;
            }
        </style>
        <div class="common_spacing uniq_features ">
            <div class="why-blockchain-sec">
                <div class="container">
                    <h2 class="common_h3 sec-tit underline text-center" style="padding: 20px 0;">Advantages of Social Tokens</h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 pull-left d-flex justify-content-center">
                            <img class="lazy" src="{{ asset('images/sub/5.webp') }}" class="br-5" alt="Social Token Development" width="420px" title="Benefits of Social Token">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 pull-right">
                            <ul>
                                <li>Amplify your personal and organizational visibility through the growing popularity of your social tokens.</li>
                                <li>Harness digital representation to unlock new opportunities and establish a strong industry presence.</li>
                                <li>Minimize reliance on intermediaries, cutting out middlemen and reducing transaction costs.</li>
                                <li>Increase the value of your digital currency as it circulates within the market.</li>
                                <li>Foster active community engagement and enhance network connections.</li>
                                <li>Strengthen your community bonds and collaborative efforts.</li>
                                <li>Enable the effective representation of assets, adding value and transparency.</li>
                                <li>Ensure secure and transparent transactions with blockchain technology.</li>
                                <li>Gain governance capabilities over your community through active participation.</li>
                                <li>Enjoy the unique benefits and flexibility of a private, community-driven ecosystem.</li>
                                <li>Private community offers its own benefits and feasibility.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <style type="text/css">
            .perfect-script-items1 {
                -webkit-box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
                box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
                padding: 30px 15px 10px;
                border-radius: 16px;
                background-color: #fff;
                -webkit-transition: 0.3s;
                transition: 0.3s;
                min-height: 226px;
                margin-bottom: 20px;
            }

            .perfect-script-items1 .icon {
                width: 70px;
                height: 70px;
                /* margin: 20px auto 50px; */
                line-height: 75px;
                position: relative;
                border-radius: 0px 50% 50% 0px;
                /* background-image: linear-gradient( 
293deg
, #fba214 0%, #f7cb22 100%); */
                /* background-color: #f03858; */
                color: #fff;
                font-size: 40px;
                box-shadow: 3px 14px 13px 0px #0000003b;
                z-index: 9;
                float: left;
                background: #47b475;
                /* border: 3px solid #292c97; */
                margin-left: -15px;
            }

            .perfect-script-items1 .icon img {
                width: 45px;
                margin-top: 12px;
                margin-left: 10px;
            }

            .perfect-script-items1 .content {
                display: block;
                float: left;
                width: 80%;
                padding-left: 30px;
            }

            .perfect-script-items1 strong {
                color: #47b475;
                font-size: 20px;
            }

            .perfect-script-items1 p {
                text-align: left;
            }

            .perfect-script-items1:hover {
                transform: translateY(-10px);
            }

            .font-wei {
                font-weight: 700;
            }
        </style>
        <section class="perfect-script common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="common_h3 text-center font-wei">Showcasing Success Stories in Social Token Platform Development</h3>
                            <hr class="mb40">
                        </div>
                    </div>
                </div>
                <div class="row mt-40">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" src="{{ asset('images/sub/icon/interact.svg') }}">
                            </div>
                            <div class="content">
                                <p><strong>Alex Masmej - $ALEX</strong></p>
                                <p>The $ALEX token combines elements of an income-sharing agreement with a personal IPO. Token holders benefit from a 15% share of Alex Masmej's earnings, aligning their success with his.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" src="{{ asset('images/sub/icon/ecosystem.svg') }}">
                            </div>
                            <div class="content">
                                <p><strong>Carlos Gomes - $SWAGG</strong></p>
                                <p>The $SWAGG token is designed for the SWAGG community, granting holders exclusive access to a comprehensive ecosystem filled with diverse benefits and opportunities.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 my-auto">

                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" src="{{ asset('images/sub/icon/token.png') }}">
                            </div>
                            <div class="content">
                                <p><strong>Brian Flynn - $JAMM</strong></p>
                                <p>The $JAMM token unlocks access to Brian Flynn's "Jamm Session" newsletter. To gain entry, holders need 1,000 $JAMM tokens. This social token enhances the newsletter’s value through potential network effects and incentives.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" src="{{ asset('images/sub/icon/google.svg') }}">
                            </div>
                            <div class="content">
                                <p><strong>Coin Artist - $COIN</strong></p>
                                <p>Holders of $COIN are part of the E-Den community, which influences the future direction of $COIN. This community engages with crypto puzzles and other intriguing activities, enriching the user experience.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 my-auto">

                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" src="{{ asset('images/sub/icon/reliability.svg') }}">
                            </div>
                            <div class="content">
                                <p><strong>Whale Shark - $WHALE</strong></p>
                                <p>The $WHALE token is supported by a substantial NFT collection housed in "The Vault," valued at approximately $1.4 million. Beyond NFT backing, $WHALE serves various functions within its community.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="text-center" style="width: 100%">
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
                                data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
                            <a href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with
                                    our Experts</span></a>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    </section>

    <style type="text/css">
        .partner-sec {
            background: #fff;
            padding: 40px 15px 10px;
            max-width: 450px;
            margin: 0 auto 30px;
            min-height: 184px;
            border-radius: 4px;
        }

        .partner-sec img {
            margin-bottom: 10px;
        }

        .partner-sec h4 {
            line-height: 1.3;
            font-size: 18px;
            margin-bottom: 10px;
            color: #328455;
            letter-spacing: 0px;
            font-weight: 600;
            text-transform: capitalize;
            margin-top: 6px;
        }

        .partner-sec:hover {
            background: #47b475;
        }

        .partner-sec:hover h4 {
            color: #fff;
        }
    </style>
    <section class="gray_bg common_spacing bg-2">
        <div class="container">
            <div class="row  text-center">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="common_h3 text-white">Transformative Social Token Platforms Crafted for Success</h3>
                        <hr class="mb40">
                        <p class="text-center text-white">At the forefront of blockchain innovation, our team of crypto specialists is dedicated to enhancing the blockchain landscape with cutting-edge development and strategic marketing solutions. We excel in creating token ecosystems, including ICOs, STOs, NFTs, and beyond. Our profound expertise in blockchain and token development ensures that we build a robust Social Token platform, designed to sustain revenue and thrive amidst the dynamic crypto environment. <br><br>
                        <strong>Marketing Excellence:</strong> Our expert marketing team employs a result-oriented strategy to elevate your social token platform. Through in-depth market research and strategic groundwork, we maximize your platform's reach and visibility, driving impactful results.</p>

                        <p class="text-center"><strong>What We Deliver:</strong></p>
                    </div>
                </div>
            </div>
            <div class="row  text-center mt20">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="partner-sec">
                        <img class="lazy" src="{{ asset('images/sub/icon/shield.png') }}" width="60">
                        <h4>A Reliable Platform</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="partner-sec">
                        <img class="lazy" src="{{ asset('images/sub/icon/setup.png') }}" width="60">
                        <h4>Unmatched Security</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="partner-sec">
                        <img class="lazy" src="{{ asset('images/sub/icon/transparency.webp') }}" width="60">
                        <h4>Multichain Compatibility</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="partner-sec">
                        <img class="lazy" src="{{ asset('images/sub/icon/customer-service-agent.svg') }}" width="60">
                        <h4>Complete Transparency</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="partner-sec">
                        <img class="lazy" src="{{ asset('images/sub/icon/technical-assistance.png') }}" width="60">
                        <h4>Dedicated Technical Support</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="partner-sec">
                        <img class="lazy" src="{{ asset('images/sub/icon/deployment.png') }}" width="60">
                        <h4>Comprehensive Listing and Marketing Services</h4>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="partner-sec">
                        <img class="lazy" src="{{ asset('images/ido/icon/blockchain1.svg') }}" width="60">
                        <h4>Precise deployment</h4>
                    </div>
                </div> --}}

                <!--  ------------------------>
            </div>
        </div>
    </section>





    <style>
        .ces-point ul li {
            margin-right: 5px;
            color: #818181;
            letter-spacing: 0.3px;
            font-weight: 500;
            font-size: 18px;
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

        .ces-point ul li img {
            height: 50px;
        }
    </style>
    
    {{-- simple-faqs.blade --}}
    @include('static.simple-faqs-section', [
        'faqs' => [
            [
                'ques' => "What defines a Social Token?",
                'ans' => "Social tokens are digital assets created to represent the value of an individual or community. They allow creators and organizations to issue their own currency, providing a unique way to monetize and engage with their audience."
            ],
            [
                'ques' => "Who benefits from Social Tokens?",
                'ans' => "Social tokens benefit creators, organizations, and their communities by enabling direct interactions and transactions. They empower individuals and groups to monetize their work and foster a loyal, engaged audience without intermediaries."
            ],
            [
                'ques' => "How does Social Token Platform Development add value?",
                'ans' => "Developing a social token platform streamlines the creation, distribution, and management of social tokens. It enhances engagement, facilitates direct transactions, and provides a structured environment for growth and community-building."
            ],
        ],
    ])
    <!-- -->
    <style type="text/css">
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
            color: #161515;
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