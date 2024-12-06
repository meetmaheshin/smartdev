@extends('layouts.static')
    @section('title', 'NFT Art Marketplace Development')
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

    .banner_content {
        text-align: left;
    }

    .banner-overlay {
        background-color: rgb(0 0 0 / 63%);
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
        background-image: url('{{ asset('images/art/banner.jpg') }}');
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

    @media (max-width: 500px) {
        a.nectar-button {
            display: inline-block;
            width: 109% !important;
            margin-top: 10px;
        }
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
            background: #023c519e;
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
        color: #333 !important;
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

    .text-dark {
        color: #000 !important;
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
                                <div class="ban_tirt ">
                                    <h1 class="">NFT Art Marketplace Creation</h1>
                                </div>
                                <p class="">Partner with the leading innovators to build your ideal NFT art marketplace. Our expertise ensures a top-tier development process tailored to your needs.</p>
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
                                        data-hover-text-color-override="#fff"><span>Book a Consultation</span></a> --}}
                                    <a href="{{ url('consultation') }}"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Specialists</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div itemscope itemtype="http://schema.org/CreativeWork">
                            <div class="section-title text-center underline">
                                <div class="sec_tit">
                                    <h2 itemprop="name">Art’s Digital Renaissance: The Rise of NFTs</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p itemprop="text" class="para mt10 text-center">Art has always been a powerful medium for conveying emotions and ideas, maintaining its significance through the ages. As technology advanced, art integrated seamlessly into the digital realm. The inception of NFTs, particularly with digital art, marked a transformative moment. These tokenized artworks quickly gained popularity, fetching substantial sums and establishing NFTs as a major force in the cryptocurrency world. Today, art NFTs attract a vast and engaged audience within the crypto community.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro_cnt common_spacing  gray_bg">
        <div class="container">
            <div class="section-title text-center">
                <div class="sec_tit">
                    <h2 class="section-title underline text-center">NFTs Explained: A Comprehensive Overview</h2>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 mt40">
                    <img class=" " src="{{ asset('images/art/nft-overview-01.jpg') }}" alt="NFT Development Solutions" width="433px"
                        title="Overview of NFT">
                </div>

            </div>
            <div class="">
                <div class="col-md-6 col-sm-12 col-xs-12 mt40">
                    <p class="mt10 text-justify">Non-fungible tokens (NFTs) have surged in popularity within the cryptocurrency market, rapidly establishing themselves as a billion-dollar industry. As technology advances, both physical and digital assets can be tokenized, each assigned a unique value that distinguishes individual NFTs. Built on blockchain technology, NFTs prioritize privacy and security, offering a decentralized framework that ensures authenticity and freedom for both buyers and sellers.
                    </p>
                    <div class="text-left">
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
                                href=""
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> --}}
                            <a href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with Our Experts</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
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
        }

        .para {
            width: 80%;
            margin: 0 auto;
        }
    </style>
    <div class="intro_cnt common_spacing">
        <div class="container">
            <div class="row mt30 mb30">
                <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                    <div itemscope itemtype="https://schema.org/ImageObject">
                        <meta itemprop="name" content="NFT Art Marketplace Development">
                        <img class="lazy" src="{{ asset('images/art/img_art.webp') }}" width="375px"
                            alt="Characteristics of NFT" title="NFT - Characteristics" itemprop="contentUrl" />
                        <meta itemprop="datePublished" content="2021-08-31">
                        <meta itemprop="description"
                            content="NFT Art Marketplace Development - Launching your own NFT art marketplace will be the best and most wise decision of all. As the NFT space is still looking for the perfect art NFT marketplaces to suffice the surge, this is the best option.">
                    </div>


                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                    <div class="section-title underline text-left">
                        <div class="sec_tit ">
                            <h2>NFT - Key Features</h2>
                        </div>

                    </div>
                    <p class="text-left mt10">Non-fungible tokens stand out due to their distinctiveness and intrinsic value. Each NFT is meticulously secured through cryptographic techniques, ensuring its authenticity and integrity.</p>
                    <ul class="list-ico mt20">
                        <li><strong>Versatile Transactions: </strong>NFTs can be exchanged for various cryptocurrencies, stablecoins like USDT, or traditional fiat currencies such as USD.</li>
                        <li><strong>Indivisibility and Security: </strong>Unlike other assets, NFTs are indivisible and immune to tampering. The ownership details embedded in each NFT remain immutable.</li>
                        <li><strong>Exclusive Ownership: </strong>NFTs are designed for sole ownership, meaning they cannot be divided or shared among multiple users. This guarantees the uniqueness and exclusivity of each token.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="common_spacing gray_bg new-features" style="background: #140050;">
        <div class="container">
            <div class=" ">
                <h2 class="sec_tit underline text-center text-white">Key Features of Our Art NFT Marketplace</h2>

            </div>
            <div class="row mt40">
                <div class="container container-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-users"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Exclusive Engagement Opportunities</strong>Enable collectors to access premium experiences and content directly through the NFT marketplace, eliminating the need for external platforms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-sitemap"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Diverse Sales Models</strong>Offer a range of sales options, including auctions and fixed-price listings, to attract both creators and collectors with varied trading preferences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="intro_cnt common_spacing gray_bg">
        <div class="container">
            <div class="section-title text-center">
                <div class="sec_tit">
                    <h2>Art NFTs: Bridging Digital and Physical</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p class="mt10 text-center">Transform both physical and digital art into unique, indivisible non-fungible tokens (NFTs). This innovation allows artists to monetize their creations effectively, positioning art NFTs as some of the most prized and valuable assets in the market. With some NFTs fetching millions, they serve as both collectible treasures and investment opportunities.
                    </p>
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
                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .strategies {
            padding: 50px 0px;
            color: #000;
            background: #fff;
        }

        .strategies-items,
        .strategies-items1 {
            background: linear-gradient(90deg, #fff, #f1f1f1);
            padding: 15px;
            margin-bottom: 20px;
            display: grid;
            grid-template-columns: 50% 50%;
            gap: 15px;
            border-radius: 15px;
        }

        .strategies-items .icons,
        .strategies-items1 .icons {
            border: 1px solid #eee;
        }

        .strategies-items p,
        .strategies-items1 p {
            text-align: justify;
            padding: 15px;
        }

        .icons img {
            border-radius: 15px;
        }

        .strategies-items p strong,
        .strategies-items1 p strong {
            margin-top: 5px;
            margin-bottom: 10px;
            padding-bottom: 10px;
            font-weight: 700;
            font-size: 23px;
            font-family: 'Open Sans', sans-serif;
            border-bottom: 1px solid #eee;
            background: linear-gradient(#47b475, #47b475);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .strategies-items1 {
            background: linear-gradient(90deg, #f1f1f1, #fff);
        }

        @media (max-width: 767px) {

            .strategies-items,
            .strategies-items1 {
                display: block;
            }
        }

        .flip-box:hover {
            transition: 0.5s all ease-in-out;
            transform: translateY(-10px);
            background: #47b475;
            color: #fff;
        }

        .flip-box:hover h4 {
            color: white;
        }

        @media screen and (width: 1024px) {
            .eto-exchange-flip .flip-box {
                min-height: 367px;
            }
        }

        .flip-tit {
            font-weight: 700;
            color: #161515;
        }
    </style>


    <div class="strategies" style="z-index: 1; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 section-heade aos-init aos-animate mt-20 right-content"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="section-title text-center">
                        <div class="sec_tit mb20">
                            <h3 class="section-title underline mb20 ">Monetizing with the NFT Art</h3>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="strategies-items">
                            <div class="icons"><img class="lazy" src="{{ asset('images/art/img_5.webp') }}"
                                    alt="NFT space offers royalty to the artist" title="Royalty"></div>
                            <p><strong>Ongoing Royalties</strong><br><br>NFTs offer a significant advantage by providing artists with ongoing royalties from secondary sales. Every time an art NFT is resold, the original creator earns a percentage of the sale. This ensures that artists receive continuous recognition and compensation for their work, with their contributions remaining secure and unchangeable.</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="strategies-items1">
                            <div class="icons"><img class="lazy" src="{{ asset('images/art/img_4.webp') }}" art="Selling Art NFTs"
                                    title="NFT Art Selling"></div>
                            <p><strong>Art NFT Sales</strong><br><br>Selling art NFTs directly through the marketplace can be highly lucrative, driven by the quality and demand for the artwork. The auction format allows artists to achieve the best possible price for their creations, revolutionizing the way they monetize their art and opening new revenue streams.</p>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="strategies-items">
                            <div class="icons"><img class="lazy" src="{{ asset('images/art/img_2.webp') }}"
                                alt="Staking & Selling NFTs" title="Stake, and Sell NFTs"></div>
                            <ul>
                                <p><strong>Art NFT Sales</strong></p>
                                <li>3D Models</li>
                                <li>Jpeg Images</li>
                                <li>Memes</li>
                                <li>Art</li>
                                <li>GIFs</li>
                                <li>PNGs</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="strategies-items1">
                            <div class="icons"><img class="lazy" src="{{ asset('images/art/img_3.webp') }}"
                                    alt="Staking & Selling NFTs" title="Stake, and Sell NFTs"></div>

                            <p><strong>Staking and Trading</strong><br><br>Art NFTs are among the most sought-after in the NFT space, with their popularity continually rising. Investors have the opportunity to purchase and stake these art NFTs on leading marketplaces, potentially earning substantial returns by selling at optimal times.</p>
                        </div>
                    </div>
                </div>
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

                    <a href="#newsletter-form-sec"
                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our
                            Experts</span></a>
                </div>
            </div>
        </div>
    </div>


    <div class="common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                    <div class="section-title">
                        <h3 class="section-title underline mb20">NFT Art Marketplace Overview</h3>
                    </div>
                    <p class="mt-30 text-justify">An NFT art marketplace serves as a dynamic platform where digital art tokens are displayed, enabling users to engage with and trade these unique assets. This marketplace is built with robust security measures and advanced technologies, ensuring a highly secure environment. The financial potential is substantial, with valuations rapidly reaching significant figures.</p>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                    <div class="section-title">
                        <h3 class="section-title underline mb20">Launching Your NFT Art Marketplace</h3>
                    </div>
                    <p class="mt-30 text-justify">Establishing your own NFT art marketplace is a strategic and forward-thinking move. With the NFT sector still evolving and in need of innovative art marketplaces, this presents a prime opportunity. Your marketplace can generate revenue through various streams, including service fees, commissions, and additional revenue models.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="pros-trading common_spacing">
        <div class="container">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h3 class="section-title underline mb20">Creating a Next-Generation NFT Art Experience</h3>
                </div>
                <p class="text-center">Creating an NFT art marketplace involves crafting and integrating a range of sophisticated elements into a cohesive product. This process demands not only advanced technical expertise but also the adoption of cutting-edge technologies to ensure future scalability and enhancement. Our approach to developing NFT art marketplaces emphasizes:</p>
            </div>
            <div class="mt60">
                <div class="row flip-box-row eto-exchange-flip">
                    <!-- Flip Box Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="flip-box">
                            <div class="flip-icon-outer">
                                <img class="flip-icon" src="{{ asset('images/spo/icon/user-panel.png') }}" width="90">
                            </div>
                            <h4 class="flip-tit">User Experience Design</h4>
                            <p class="flip-txt">We prioritize building an engaging and intuitive user interface where NFT art assets are prominently displayed, ensuring that users are captivated and easily navigated.</p>
                        </div>
                    </div>
                    <!-- Flip Box Ends -->
                    <!-- Flip Box Starts -->

                    <!-- Flip Box Ends -->
                    <!-- Flip Box Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="flip-box">
                            <div class="flip-icon-outer">
                                <img class="flip-icon" src="{{ asset('images/spo/icon/feature.webp') }}" width="90" >
                            </div>
                            <h4 class="flip-tit">Enhanced Features</h4>
                            <p class="flip-txt">We incorporate various external functionalities, such as advanced filter search options and comprehensive admin panels and dashboards, to enrich the user experience and optimize marketplace operations.</p>
                        </div>
                    </div>
                    <!-- Flip Box Ends -->

                    <!-- Flip Box Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="flip-box">
                            <div class="flip-icon-outer">
                                <img class="flip-icon" src="{{ asset('images/spo/icon/wallet.png') }}" width="90" >
                            </div>
                            <h4 class="flip-tit">Wallet and Dapp Integration</h4>
                            <p class="flip-txt">Integrating Web 3.0 wallets and other decentralized applications (Dapps) is crucial for seamless transactions and interactions within the marketplace, tailored to meet specific requirements.</p>
                        </div>
                    </div>
                    <!-- Flip Box Ends -->
                    <!-- Flip Box Starts -->
                    <div class="col-lg-2"></div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="flip-box">
                            <div class="flip-icon-outer">
                                <img class="flip-icon" src="{{ asset('images/spo/icon/security.png') }}" width="90">
                            </div>
                            <h4 class="flip-tit">Robust Security Measures</h4>
                            <p class="flip-txt">Security is a top priority; we implement multi-layered protection and provide regular updates and patches to safeguard the marketplace against vulnerabilities.</p>
                        </div>
                    </div>
                    <!-- Flip Box Ends -->
                    <!-- Flip Box Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="flip-box">
                            <div class="flip-icon-outer">
                                <img class="flip-icon" src="{{ asset('images/spo/icon/technical-assistance.png') }}" width="90">
                            </div>
                            <h4 class="flip-tit">Dedicated Technical Support</h4>
                            <p class="flip-txt">Our team of skilled technical professionals offers continuous real-time support, addressing any issues or guiding through workflows to ensure smooth operations.</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        <style type="text/css">.perfect-script-items {
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
            background: #47b475;
            position: relative;
            text-align: center;
            transition: all 0.3s linear;
        }

        .app-icon img {
            width: 50px;
            margin-top: 25px;
            filter: brightness(0) invert(1);
        }

        .app-overview .media .media-body {
            padding-left: 33px;
        }

        .media-body h4 {
            font-weight: 700;
        }
    </style>
    </style>


    <section class="common_spacing gray_bg">
        <div class="container">
            <div class="mt40 ">
                <div class="section-title underline text-center">
                    <div class="sec_tit">
                        <h2>What Sets Our NFT Art Marketplace Apart</h2>
                    </div>
                </div>
                <p class="text-center">Our NFT art marketplace solutions are engineered to deliver cutting-edge features, ensuring you remain at the forefront of the NFT industry.</p>
                <div class=" feature-block mt30">
                    <div class="col-sm-6 ">
                        <div class="app-overview equal-height" style="">
                            <div class="media">
                                <div class="media-left">
                                    <div class="app-icon text-center">
                                        <img class="" src="{{ asset('images/nft_real/icon/decentralized.png') }}" alt=""
                                            src="images/nft_real/icon/developing.webp">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4>Decentralized Structure</h4>
                                    <p>Built on blockchain technology, our NFT art marketplaces inherently offer decentralization, ensuring complete privacy and autonomy for all participants in the NFT ecosystem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="app-overview equal-height" style="">
                            <div class="media">
                                <div class="media-left">
                                    <div class="app-icon text-center">
                                        <img class="" src="{{ asset('images/nft_real/icon/liquidity.webp') }}" alt=""
                                            src="images/nft_real/icon/bitcoin.webp">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4>Enhanced Liquidity</h4>
                                    <p>One of the standout benefits of our marketplace is its liquidity. Once an NFT is sold, it is promptly available for resale, providing immediate financial advantages to buyers.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">

                        <div class="app-overview equal-height" style="">
                            <div class="media">
                                <div class="media-left">
                                    <div class="app-icon text-center">
                                        <img class="" src="{{ asset('images/nft_real/icon/price-label.webp') }}" alt=""
                                            src="images/nft_real/icon/price-label.webp">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4>Immutable Records</h4>
                                    <p>Data integrity is paramount. Our marketplace employs encrypted, distributed servers across multiple locations, eliminating the risk of data loss and ensuring reliable access to your NFTs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="app-overview equal-height" style="">
                            <div class="media">
                                <div class="media-left">
                                    <div class="app-icon text-center">
                                        <img class="" src="{{ asset('images/nft_real/icon/cross-chain.webp') }}" alt=""
                                            src="images/nft_real/icon/blockchain.webp">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4>Cross-Platform Compatibility</h4>
                                    <p>Our NFT art marketplace is designed to be fully compatible with a wide range of platforms and devices, including Android, iOS, macOS, Windows, and various Linux distributions, ensuring seamless access for all users.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="intro_cnt common_spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <div class="sec_tit">
                            <h2 class="section-title">Why Choose Us for NFT Art Marketplace Development</h2>
                        </div>
                    </div>
                    <p class="mt20 text-justify">As a leading force in the industry, we bring unparalleled expertise in NFT art marketplace development. Our team consists of top-notch technical developers and market analysts, dedicated to delivering exceptional results. If you're ready to create your own NFT art marketplace, connect with us to get started.</p>
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
                                target="_blank"
                                href="#"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                            <a href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mt10">
                    <img class="lazy" src="{{ asset('images/art/why-choose-us.png') }}"
                        alt="Why Blockchain App Factory In NFT Art Marketplace Development"
                        title="NFT Art Marketplace Development">
                </div>

            </div>

        </div>
    </div>
</div>

<script src="js/jquery.min.js" type="94b5777a989f5a30917a902b-text/javascript"></script>
<script type="94b5777a989f5a30917a902b-text/javascript">
    (function ($) {
    $.fn.countTo = function (options,viewCounter) {
  if(viewCounter == 1){
        options = options || {};

        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
            }, options);

            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;

            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};

            $self.data('countTo', data);

            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);

            // initialize the element with the starting value
            render(value);

            function updateTimer() {
                value += increment;
                loopCount++;

                render(value);

                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }

                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;

                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };
  }

    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 3000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
  });

  // start all the timers
  var viewCounter = 0;
  $(document).on( 'scroll', function(){
    if($('.timer').each(count).isOnScreen() && viewCounter < 2){
        viewCounter++;
      console.log(viewCounter);
    }
  });

function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  $this.countTo(options,viewCounter);
}
});


// check if element visible in viewport
$.fn.isOnScreen = function(){
    var win = $(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    //bounds.right = bounds.left + this.outerWidth();
    //bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

};
</script>
<script src="js/vendor.js" type="94b5777a989f5a30917a902b-text/javascript"></script>
<script src="js/plugins.js" type="94b5777a989f5a30917a902b-text/javascript"></script>
<script src="js/main.js" type="94b5777a989f5a30917a902b-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="94b5777a989f5a30917a902b-text/javascript"></script>

<script type="94b5777a989f5a30917a902b-text/javascript">
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
<script type="94b5777a989f5a30917a902b-text/javascript">
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
<script type="94b5777a989f5a30917a902b-text/javascript">
    $('.view_pricing').click(function() {
        $('html, body').animate({
            scrollTop: $('#pricing-section').offset().top
        }, 2000);
    });
</script>
<script type="94b5777a989f5a30917a902b-text/javascript">
    var url = window.location.href;
    $('#url').val(url);
</script>

<!-- <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> -->
<script type="94b5777a989f5a30917a902b-text/javascript">
    $(".pricing-body").mCustomScrollbar({theme:"minimal"});
</script>

<script type="94b5777a989f5a30917a902b-text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      var lazyloadImages = document.querySelectorAll("img.lazy");
      var lazyloadThrottleTimeout;

      function lazyload () {
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

<script type="94b5777a989f5a30917a902b-text/javascript">
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

<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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



@endsection