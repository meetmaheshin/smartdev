@extends('layouts.static')
    @section('title', 'Fractional NFT Marketplace Development')
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

    @media (max-width: 500px) {
        a.nectar-button {
            display: inline-block;
            width: 94% !important;
            margin-top: 10px;
        }
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

    .card-desc a {
        font-size: 15px;
        display: inline-block;
        max-width: 200px;
        margin: 0 auto 20px;
        border-radius: 4px;
    }

    .banner {
        background-image: url('{{ asset('images/multi_chain/bg-bnr-nft.webp') }}');
        background-size: cover;
        padding-top: 138px;
        padding-bottom: 66px;
        height: auto;
        background-repeat: no-repeat;
        /* min-height: 100vh;*/
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
        font-size: 40px;
        text-transform: capitalize;
    }

    .contentall h1 {
        color: #fff;
    }

    .contentall p {
        font-weight: normal;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 21px;
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
        color: #333;
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

    .popular-text {
        padding: 15px;
    }

    .popular-text h3 {
        padding-bottom: 10px;
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
    }

    .strategies-items1 {
        background: linear-gradient(90deg, #f1f1f1, #fff);
    }

    .strategies-items1 .icons {
        order: 2;
        margin-right: 15px;
    }

    @media (max-width: 767px) {

        .strategies-items,
        .strategies-items1 {
            display: block;
        }
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
            /* padding-bottom: 80px;*/
            /*height: 400px;*/
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

    .faq-content #accordion .panel-title>a.accordion-toggle.collapsed::before,
    .faq-content #accordion a.collapsed[data-toggle=collapse]::before {
        margin-bottom: 22px;
    }

    .faq-content #accordion .panel-title>a.accordion-toggle::before,
    .faq-content #accordion a[data-toggle=collapse]::before {
        margin-bottom: 20px;
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
        color: #444 !important;
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

    .box_opacity {
        background: #000000bf;
        padding: 5% 5% 8%;
        border-radius: 10px;
    }

    .para {
        width: 90%;
        margin: 0 auto;
    }

    .text-dark {
        color: #000 !important;
    }

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
    }

    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        margin-bottom: 15px !important;
        display: inline-block;
        margin-right: 26px !important;
    }

    .mt14 {
        margin-top: 14px;
    }

    .mb14 {
        margin-bottom: 14px;
    }

    /*.web-view{
        background-image: url(images/multi_chain/wb-img.webp);
        background-size: cover;
        background-position: center;
    }*/
    @media screen and(max-width: 1000px) {
        .web-view {
            display: none;
        }
    }

    @media screen and (min-width: 1020px) {
        .web-view {
            display: block;
        }
    }
</style>

<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <!--   <div class="web-view"> -->
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="">
                                    <div class="ban_tirt">
                                        <h1>Unlock Investment Potential with Fractional NFTs</h1>
                                    </div>
                                    <p class="">Revolutionize investment with fractional NFTs—where you can own and trade shares of digital assets in a cutting-edge marketplace.</p>
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
                                            data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                                        <a href="{{ url('consultation') }}"
                                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                            <img src="{{ asset('images/multi_chain/fra_nft_icon.webp') }}" alt="" title="">
                        </div>

                    </div>
                    <!-- </div> -->

                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2 class="fact font-wei">NFTs: The Dawn of a Revolutionary Market</h2>
                    </div>
                </div>
                <p class="mb14 text-center para fract">The journey of cryptocurrencies to widespread adoption took nearly a decade, with their potential unfolding gradually. In contrast, NFTs have made an explosive entry into the market, capturing significant attention in a remarkably short time. Unlike cryptocurrencies, NFTs offer a distinct presence in the digital realm, carving out a robust niche of their own. These unique assets have quickly established themselves as a trusted form of digital collectible, standing apart from their crypto counterparts.</p>
                <div class="text-center m14">
                </div>
            </div>
        </div>

        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb14">
                        <img src="{{ asset('images/multi_chain/what-is-nft.webp') }}" class="mt10 mb10" alt="What Is NFT?"
                            title="What Is NFT?">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title  text-left">
                            <div class="sec_tit fraction">
                                <h2 class="fact font-wei">What Are NFTs and Why All the Excitement?</h2>
                            </div>
                        </div>
                        <p class="mt10 text-left fract">NFTs, or Non-Fungible Tokens, represent unique physical or digital assets that are tokenized using distinctive standards. Unlike other digital assets, each NFT possesses unique attributes and cannot be exchanged on a one-to-one basis with another token. Built on blockchain networks, NFTs ensure both efficiency and security, with their own specific token standards that guarantee authenticity and protection against tampering.</p>
                        <p class="mt10 text-left fract">Initially seen as collectibles primarily favored by enthusiasts, NFTs have rapidly expanded in scope. Today, they support a diverse range of applications and use cases, appealing to various sectors and individuals. From verifying ownership to enhancing privacy, NFTs are increasingly recognized for their versatility and value.</p>
                        <div class="text-left">
                            <div class="cta_mine">
                                {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn"
                                    target="_blank"
                                    href="#"
                                    data-color-override="false" data-hover-color-override="false"
                                    data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                                <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2 class="font-wei">Fractional NFTs: Transforming the Market with Divisible Assets</h2>
                    </div>
                </div>
                <p class="mt10 text-center para">The burgeoning value of NFTs and their continuous growth in the market has led to innovative concepts like Fractional NFTs. This approach involves breaking down high-value NFTs into smaller segments, making them more accessible and affordable. This shift promises to drive substantial traffic and activity within the NFT space, positioning Fractional NFTs as a pivotal development in both the NFT and cryptocurrency markets. By making these assets more attainable, the volume of transactions is expected to surge, enhancing their appeal as a lucrative investment.</p>
                <div class="text-center mt14">

                </div>

            </div>
        </div>

        <div class="intro_cnt common_spacing gray_bg fact">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title text-left">
                            <div class="sec_tit fraction">
                                <h2 class="font-wei">How Fractional NFT Marketplaces Operate</h2>
                            </div>
                        </div><br>
                        <p class="mt10 text-left fract">NFTs are typically governed by token standards that preserve their unique characteristics, such as ERC-721 on the Ethereum blockchain. In the fractionalization process, an NFT is secured by a smart contract, which then divides the asset into multiple units represented as ERC-20 tokens. These fungible tokens reflect partial ownership of the original NFT.</p>
                        <p class="mt10 text-left fract">When a Fractional NFT is acquired, the buyer obtains a share of the NFT, divided into ERC-20 tokens. These fractional tokens can be traded or sold in various ways: they can either be listed for a specific period or remain available until all units are sold. The Fractional NFT marketplace thus becomes a hub for trading and staking these divided assets, driving transformative changes in how NFTs are bought, sold, and managed.</p>

                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <img src="{{ asset('images/multi_chain/how-fractionalized.webp') }}" class="lazy mt10 mb10"
                            alt="Fractionalized NFT Marketplace" title="Fractionalized NFT Marketplace">
                    </div>
                </div>
                <br>
            </div>
        </div>

        <style type="text/css">
            .single_feature_seven {
                text-align: center;
                padding: 20px 24px;
                border: 1px solid #e4ecf9;
                position: relative;
                z-index: 1;
                background: #fff;
                min-height: 352px;
                margin-bottom: 30px;
                border-radius: 10px;
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

            .single_feature_six_seven_icon .icon img {
                width: 70px;
                height: auto;
                transition: .5s;
            }

            .single_feature_seven_content h4 {
                transition: .5s;
                padding-top: 15px;
                padding-bottom: 15px;
            }

            .single_feature_seven_content p {
                padding-top: 1px;
                transition: .5s;
                text-align: justify;
            }

            .single_feature_seven:hover:before {
                width: 100%;
                height: 100%;
                background: #47b475;
                border-radius: 10px;
            }

            .feature_area {
                padding: 40px 0px;
            }

            .single_feature_seven:hover {
                color: #fff;
            }

            .single_feature_seven:hover h4 {
                color: #fff !important;
            }
        </style>


        <div class="feature_area pt-100 pb-70" id="develop">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center underline" style="width: 100%">
                        <div class="sec_tit">
                            <h2 class="font-wei"> The Case for Fractional NFTs </h2>
                        </div>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_feature_seven">
                            <div class="single_feature_six_seven_icon">
                                <div class="icon">
                                    <img class="lazy" src="{{ asset('images/harmony/icon/encrypted.webp') }}">
                                </div>
                            </div>
                            <div class="single_feature_seven_content">
                                <h4 class="font-wei">Elevated Asset Value</h4>
                                <p>The current high value of NFTs means they are predominantly accessible only to those with substantial financial resources. This creates a disparity, where smaller investors are excluded from participating in the NFT market. The growth of NFTs could be significantly accelerated if investment opportunities were made available to a broader audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_feature_seven">
                            <div class="single_feature_six_seven_icon">
                                <div class="icon">
                                    <img class="lazy" src="{{ asset('images/harmony/icon/trust.webp') }}">
                                </div>
                            </div>
                            <div class="single_feature_seven_content">
                                <h4 class="font-wei">Limited Utilization</h4>
                                <p>Beyond ownership and resale, the practical use cases for NFTs remain relatively restricted. Although NFTs are becoming increasingly prevalent and serve various functions, their potential as versatile tokens in the digital and cryptocurrency markets has yet to be fully realized. Expanding their use beyond these confines could unlock new opportunities and drive further market development.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_feature_seven">
                            <div class="single_feature_six_seven_icon">
                                <div class="icon">
                                    <img class="lazy" src="{{ asset('images/harmony/icon/exchange-rate.webp') }}">
                                </div>
                            </div>
                            <div class="single_feature_seven_content">
                                <h4 class="font-wei">Challenges of Secondary Market Liquidity</h4>
                                <p>NFTs have evolved into high-value assets with substantial potential. However, marketplace owners often prioritize auction sales over immediate transactions, resulting in a protracted liquidity process. This extended timeframe poses a significant challenge in the NFT space.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2 class="fact font-wei">Fractional NFT Marketplace: Addressing Liquidity Challenges</h2>
                    </div>
                </div>
                <p class="mt10 text-center para fract">The liquidity issue in NFT markets can be effectively mitigated through the fractionalization of ERC-721 tokens into fungible ERC-20 tokens. In this process, the ERC-721 token is secured within a smart contract, which then divides it into several ERC-20 tokens. When users purchase these ERC-20 tokens, they effectively acquire a share of the original ERC-721 asset. This approach makes it possible for a broader range of investors to engage in fractional NFT investments. The reduced value of these fractionalized NFTs facilitates quicker transactions, thereby enhancing market liquidity.
                </p>

                <div class="text-center mt14">
                    <div class="cta_mine">
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with Our Experts</span></a>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .technicalbox {
                background: #fff;
                border-radius: 3px;
                /* box-shadow: 0 5px 50px 0 rgb(0 0 0 / 4%);*/
                margin-bottom: 30px;
                padding: 30px 30px;
                position: relative;
                border: 2px solid #4caf5073;
                margin-bottom: 10px !important;
            }

            .box {
                /*background: #edf0ee;*/
                padding: 2%;
                margin-bottom: 20px;
            }

            .ptb40 {
                padding: 40px 0px !important;
            }

            .mt14 {
                margin-top: 14px;
            }

            .technicalbox p {
                text-align: justify;
            }

            .mx-5 {
                margin-right: 5px;
                margin-left: 5px;
            }

            @media screen and (min-width: 760px) and (max-width: 800px) {
                .tech-box {
                    min-height: 448px;
                }
            }

            .technicalbox:hover {
                background: #47b475;
                color: #fff;
            }

            .technicalbox:hover h3 {
                color: #fff !important;
            }

            .technicalbox:hover h4 {
                color: #fff !important;
            }

            .technicalbox .technical-icon {
                background: #f2f2f2;
            }
        </style>

        <div class="strategies strategy_dev">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 section-heade aos-init aos-animate mt-20 right-content"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="section-title text-center">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="strategies-items">
                                    <div class="icons"><img class="lazy"
                                            src="{{ asset('images/fractional-nft-marketplace-development/1.webp') }}" alt="" height="100%"
                                            title=""></div>
                                    <div class="popular-text">
                                        <h3 class="sec_tit"> Real Estate: Transforming Land Ownership with Fractional NFTs </h3>
                                        Fractional NFTs offer a groundbreaking approach to real estate by allowing landowners to convert their property documents into divisible tokens. This innovative method enables the sale of plots of any size by breaking down traditionally illiquid assets into fractional tokens, simplifying transactions, and easing the management of land deeds. Unlike conventional fractional real estate models, this approach allows the original owner to retain ownership of the land while leveraging fractional NFTs to enhance liquidity. Our expertise lies in developing platforms that facilitate the creation of fractional land NFTs, offering landowners a powerful tool for managing and making informed decisions about their real estate assets. These NFTs, backed by tokens representing segments of land documentation, foster community-driven consensus and streamline asset management.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="strategies-items1">
                                    <div class="icons"><img class="lazy"
                                            src="{{ asset('images/fractional-nft-marketplace-development/2.png') }}" alt=""
                                            title=""></div>
                                    <div class="popular-text">
                                        <h3 class="sec_tit">Fractional NFTs in Real Estate</h3> In the realm of real estate, fractional NFTs revolutionize the way land transactions are conducted by enabling swift and efficient sales through blockchain-backed smart contracts. This approach eliminates the need for intermediaries, reducing associated costs and removing the unpredictability of traditional real estate dealings. With ownership and transaction histories securely recorded on an immutable blockchain, the risk of tampering and fraud is significantly minimized. Embracing fractional NFTs can be a strategic move for landowners and entrepreneurs, offering a seamless path to raise capital while retaining ownership.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="strategies-items">
                                    <div class="icons"><img class="lazy"
                                            src="{{ asset('images/fractional-nft-marketplace-development/3.webp') }}" alt=""
                                            title=""></div>
                                    <div class="popular-text">
                                        <h3 class="sec_tit">F-NFTs in Real Estate</h3>Real estate has long been burdened by issues such as immovability, fraudulent claims, high entry costs, and cumbersome documentation. Fractional NFTs (F-NFTs) address these challenges by leveraging blockchain technology and smart contracts to create an unalterable record of transactions. This modern solution streamlines the process, making it easier for retail investors to enter the market and for large landholders to sell their properties to a broader audience without the usual hassles. Our expertise in developing fractional NFTs for real estate can help transform these transactions, offering a more accessible and efficient approach to buying and selling land.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="strategies-items1">
                                    <div class="icons"><img class="lazy"
                                            src="{{ asset('images/fractional-nft-marketplace-development/4.webp') }}" alt=""></div>
                                    <div class="popular-text">
                                        <h3 class="sec_tit">NFTs in Fractional Property Ownership</h3> While NFTs have made a significant impact in the digital realm with virtual land parcels in the metaverse, their potential extends far beyond that. Fractional property ownership in the physical world can also be achieved through NFTs. This approach lowers the barriers for retail investors looking to enter the real estate market. Unlike traditional fractionalized real estate tokens, NFTs offer enhanced flexibility, allowing property owners to assign varying values to different segments of their land. Our expert consultants are ready to help you design and implement a customized strategy for fractional ownership of your real estate assets, leveraging the unique advantages of NFTs.
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <!-- <div class="text-center expert_space"> <a class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our Experts</span></a> </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="pre-ico-services-1" class="ptb40">
                <div class="container">
                    <div class="section-title text-center underline" style="width: 100%">
                        <div class="sec_tit">
                            <h2 class="font-wei">Benefits of a Fractionalized NFT Marketplace</h2>
                        </div>
                    </div>
                    <div class="row box">
                        <div class="grids">
                            <div class="sec_tit mx-5">
                                <h4><strong>Dynamic Price Discovery</strong></h4>
                            </div>
                            <p class="mt10 mx-5">The fractionalized NFT marketplace introduces an advanced price discovery system to assess the value of NFTs. This innovative approach marks a significant evolution in how NFT values are determined, providing more accurate and market-driven pricing.</p>

                            <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="technicalbox text-center" style="min-height:414px;">
                                    <div class="technical-icon">
                                        <span><img src="{{ asset('images/multi_chain/past-sales.webp') }}"></span>
                                    </div>
                                    <h3 class="font-wei">Historical Sales Analysis</h3>
                                    <hr>
                                    <p>Our platform meticulously reviews past transactions, analyzing details such as data type, peak values, minimum values, and fluctuations. This comprehensive analysis aids in forecasting the future value of NFTs, offering a clearer picture of market trends.</p>
                                </div>
                            </div>
                            <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="technicalbox text-center" style="min-height:414px;">
                                    <div class="technical-icon">
                                        <span><img src="{{ asset('images/multi_chain/auction.png') }}" width="64px"></span>
                                    </div>
                                    <h3 class="font-wei">Auction Insights</h3>
                                    <hr>
                                    <p>While auctions remain a popular method for NFT sales, our system enhances this process by providing estimated values based on real-time bidding data. Auctions are optimized for maximum efficiency, making them an effective strategy for selling NFTs.</p>
                                </div>
                            </div>

                            <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="technicalbox text-center" style="min-height:414px;">
                                    <div class="technical-icon">
                                        <span><img src="{{ asset('images/multi_chain/fractionalizing.png') }}" width="64px"></i></span>
                                    </div>
                                    <h3 class="font-wei">Fractionalization Process</h3>
                                    <hr>
                                    <p>NFTs are converted into fungible ERC-20 tokens, allowing owners to sell their assets across various open markets. This process boosts liquidity and increases marketplace traffic, enhancing the overall trading experience.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--   <div class="row box"> -->
                    <div class="grids">
                        <div class="grid col-lg-12 col-md-12 col-sm-6 col-xs-12">
                            <div class="technicalbox tech-box text-left">
                                <h4><strong>Market Democratization</strong></h4>
                                <p class="mt10">Fractionalized NFTs break down barriers, making high-value assets accessible to a broader audience. By allowing widespread participation, fractionalization drives market growth and creates numerous opportunities for monetization. The minting of fractional NFTs leads to high commissions and increased market engagement.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grid col-lg-12 col-md-12 col-sm-6 col-xs-12">
                            <div class="technicalbox tech-box text-left">
                                <h4><strong>Buyout Option</strong></h4>
                                <p class="mt10">The buyout feature provides NFT owners with the option to reverse the fractionalization process. To initiate a buyout, all fractional owners must participate. Payments can be made through various methods, enabling the complete repurchase of the NFT and the re-establishment of its original form.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <style type="text/css">
        .service-section {
            background: #fff;
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
            -webkit-box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
            box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
        }

        .s-card-icon {
            width: 60px;
            margin: 0 auto 30px;
        }
    </style>
    <style type="text/css">
        .service_style_one {
            background: #f5f5f561;
            border-radius: 10px;
            min-height: 322px;
            padding: 40px 40px 10px;
            box-shadow: 0 0 20px 0px #47b4754f;
            transition: 0.5s all ease-in-out;
            margin-bottom: 24px;
        }

        .service_style_one_icon {
            width: 75px;
            height: 75px;
            line-height: 75px;
            background: #e8ecfc;
            /* border-radius: 100%; */
            color: #0C5ADB;
            display: inline-block;
            border-radius: 33% 66% 70% 30%/49% 62% 38% 51%;
            -webkit-transition: .5s;
            -o-transition: .5s;
            transition: .5s;
            text-align: center;
            font-size: 35px;
        }

        .service_style_one_icon img {
            width: 50px;
            height: auto;
        }

        .service_style_one_title h4 {
            font-weight: 700;
            color: #444040;
            position: relative;
            margin-top: 10px;
        }

        .service_style_one_title h4:before {
            position: absolute;
            content: "";
            left: 0;
            top: 37px;
            height: 1px;
            width: 75px;
            background: #47b475;
            margin: 0 auto;
            right: 0;
        }

        .service_style_one:hover {
            transform: translateY(10px);
            transition: 0.5s all ease-in-out;
        }

        .service_style_one_text {
            margin-top: 20px;
            margin-bottom: 5px;

        }

        .p1 {
            font-size: 22px;
        }
    </style>

    <style type="text/css">
        .service-row {
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        .service-row img {
            float: left;
            margin-top: 10px;
        }

        .service-row p,
        .service-row h5 {
            padding-left: 75px;
            clear: none;
        }

        .service-row p {
            margin-bottom: 0;
        }

        .service-row h5 {
            font-weight: 700;
            margin-bottom: 10px;

        }

        .font-wei {
            font-weight: 700 !important;
            color: #161515 !important;
        }
    </style>


    <div class="intro_cnt common_spacing gray_bg">
        <div class="container">
            <div class="section-title text-center underline">
                <div class="sec_tit">
                    <h2 class="fact font-wei">Why Choose Us for Fractional NFT Development?</h2>
                </div>
            </div>
            <p class="mt10 text-center para fract">Our trailblazing work in NFT and crypto development speaks volumes about our pioneering role in the industry. With a dedicated team of experts, we guarantee to deliver on our promises with 100% commitment. We take pride in being at the forefront of the revolutionary Fractional NFT Marketplace concept, setting new benchmarks in the NFT market. <br><br>
            Rest assured, we’ll handle the complexities of concept development and technical challenges, guiding you through every step of the process with ease and expertise.
            </p>

            <div class="text-center mt14">
                {{-- <div class="cta_mine">
                    <a class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                        href=""
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                    <a href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
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