@extends('layouts.static')
    @section('title', 'NFT Marketplace For Sports')
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

    .font-wei {
        font-weight: 700 !important;
        color: #000000 !important;
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
        /*margin-right: 15px;*/
    }

    .card-desc a {
        font-size: 15px;
        display: inline-block;
        max-width: 200px;
        margin: 0 auto 20px;
        border-radius: 4px;
    }

    .banner {
        background-image: url('{{ asset('images/spo/ground.webp') }}');
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
        border-bottom: 1px dashed #47b475;
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
        text-transform: capitalize;
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
        color: #444;
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

        /*.perfect-script-items1 .content{
            width: 90%!important;
    }*/
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
        margin-bottom: 20px;
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

    .font-wei {
        color: #161515 !important;
        font-weight: 700 !important;
    }

    .font_wei {
        color: #ffffff;
        font-weight: 700;
    }

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
                        <div class="col-md-7 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div class="ban_tirt">
                                        <h1>Sports NFT Marketplace</h1>
                                    </div>
                                    <p>Elevate your sports NFT marketplace by tapping into a broad and engaged audience, enhancing your platform's visibility and appeal. The dynamic world of sports brings a unique flair to your platform with its exclusive collectibles.</p>
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
                                            {{-- <a rel="nofollow"
                                                class="nectar-button medium regular accent-color regular-button nec-btn"
                                                target="_blank"
                                                href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                                                data-color-override="false" data-hover-color-override="false"
                                                data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                                            <a href="{{ url('consultation') }}"
                                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 text-center">
                            <img class="" src="{{ asset('images/spo/2.webp') }}" alt="NFT Marketplace For Sports"
                                title="NFT Marketplace For Sports">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit">
                        <h2 class="font-wei"> Expanding the Horizon of Sports NFTs</h2>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center mt20">Blockchain technology is revolutionizing global industries, driving modernization with its transformative features. At the forefront of this digital revolution is the NFT, which offers groundbreaking investment opportunities within the crypto ecosystem. Ethereum, a pioneer in token development, introduced the first NFT standards, creating a new paradigm for representing unique digital collectibles. These standards ensure each NFT has intrinsic value and immediate liquidity in a decentralized environment.</p>

                        <p class="text-center">The diverse applications of NFTs attract a broad audience eager to buy, sell, and bid on exclusive items, drawing interest from investors and business developers alike. The value of NFTs can soar to millions based on their rarity and market demand, presenting substantial benefits for creators, artists, musicians, and public figures who convert their work into NFTs.</p>

                        <p class="text-center">As this captivating technology reshapes various industries, sports stands out as a prime candidate to harness the potential of a decentralized marketplace. Now is the time to develop your own sports NFT marketplace and tap into this evolving frontier!</p>
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
        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center">


                </div>
                <div class="row mt40">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <img class="lazy" src="{{ asset('images/spo/111.png') }}" alt="NFT for Sports"
                            title="How Does NFT Endow The Sports Industry?">
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="sec_tit">
                            <h2 class="font-wei">How NFTs Revolutionize the Sports Industry</h2>
                        </div>
                        <p class="text-left mt20">Sports captivate audiences with their thrilling moments and emotional highs, creating an adrenaline-fueled experience that keeps fans engaged. The excitement of live games and the nostalgia of collecting sports memorabilia have always held a special place in people's hearts.</p>

                        <p class="text-left">Integrating NFTs into the sports sector introduces a new dimension to this passion, allowing fans to own digital versions of cherished collectibles such as player cards, images, and game highlights. This combination of sports excitement and NFT technology attracts a wide range of enthusiasts and creates fresh revenue streams.</p>

                        <p class="text-left">Transforming iconic sports items—like player cards, memorable video clips, and autographed memorabilia—into NFTs capitalizes on the deep connection fans have with their favorite athletes and moments. This digital twist on traditional collectibles not only enhances fan engagement but also opens up lucrative opportunities for sales and marketing. Additionally, partnering with athletes and brands to create exclusive NFTs can serve as a powerful marketing strategy.</p>

                        <p class="text-left">Launching a dedicated NFT platform for sports amplifies market presence and draws a large, enthusiastic audience, eager to explore and invest in unique digital sports treasures.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="common_spacing gray_bg new-features" style="background: #140050;">
            <div class="container">
                <div class=" ">
                    <h2 class="sec_tit underline text-center text-white">Key Features of Our Sports NFT Marketplace</h2>
                </div>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-futbol-o"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Fantasy Sports Integration</strong>Incorporate fantasy sports into the marketplace to allow users to engage in real-time games and earn rewards by creating and managing teams based on their strategic insights.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-gamepad"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Play-to-Earn Mechanism</strong>Embed play-to-earn games within the platform, enabling users to enjoy NFT-based gaming experiences all in one place, enhancing convenience and enriching their overall gaming experience.</p>
                                </div>
                            </div>
                        </div>
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
        </style>


        <div class="strategies" style="z-index: 1; position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 section-heade aos-init aos-animate mt-20 right-content"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="section-title text-center">
                            <div class="sec_tit mb20">
                                <h3 class="section-title underline mb20 font-wei">Transformative Sports Collectibles for NFTs</h3>
                            </div>

                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="strategies-items">
                                <div class="icons"><img class="lazy" src="{{ asset('images/spo/6.webp') }}"
                                        alt="Tokenizable Assets In Sport NFT Marketplace - Trading cards"
                                        title="Trading cards"></div>
                                <p><strong>Trading Cards</strong><br><br>Trading cards are powerful magnets for platform engagement, drawing enthusiasts eager to collect and trade unique player cards and images. By transforming traditional trading cards into NFTs, you create a distinctive collection that enhances asset value and offers an enjoyable collecting experience.</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="strategies-items1">
                                <div class="icons"><img class="lazy" src="{{ asset('images/spo/7.jpg') }}"
                                        alt="Tokenizable Assets In Sport NFT Marketplace - Accessories"
                                        title="Accessories"></div>
                                <p><strong>Player Accessories</strong><br><br>Items like jerseys, shoes, wristbands, and caps are highly coveted by fans. Converting these physical accessories into NFTs not only provides a unique collectible experience but also allows for significant revenue and ownership rights, complete with royalty potential.</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="strategies-items">
                                <div class="icons"><img class="lazy" src="{{ asset('images/spo/9.webp') }}"
                                        alt="Tokenizable Assets In Sport NFT Marketplace - Memorabilia"
                                        title="Memorabilia"></div>
                                <p><strong>Memorabilia</strong><br><br>Sports memorabilia such as trophies, awards, autographs, and equipment from renowned players are highly sought after. Tokenizing these items as NFTs brings substantial advantages and opens up opportunities for significant financial gains.</p>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="strategies-items1">
                                <div class="icons"><img class="lazy" src="{{ asset('images/spo/8.webp') }}"
                                        alt="Tokenizable Assets In Sport NFT Marketplace - Video clips"
                                        title="Video clips"></div>
                                <p><strong>Video Clips</strong><br><br>Exclusive video clips and photographs of athletes, when turned into NFTs, generate substantial interest. Early adopters in this niche have seen remarkable success, making it a promising avenue for engaging fans and boosting platform visibility.</p>
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
                                <a rel="nofollow"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"
                                    target="_blank"
                                    href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                                    data-color-override="false" data-hover-color-override="false"
                                    data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
                                <a href="#newsletter-form-sec"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk
                                        with our Experts</span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="common_spacing uniq_features gray_bg">
            <div class="why-blockchain-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-md-12 pull-left d-flex align-items-center">
                            <img class="lazy" src="{{ asset('images/spo/11.png') }}" alt="Benefits of Sports NFT Marketplace"
                                title="Benefits of sports NFT marketplace">
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-md-12 pull-right">
                            <h2 class="common_h3 sec-tit underline text-left font-wei">Highlights of a Sports NFT Marketplace</h2>
                            <ul>
                                <li><b>Increases the value of unique collectibles</b> by enhancing their intrinsic worth and market appeal.</li>
                                <li><b>Empowers athletes</b> to turn their images and signatures into distinctive NFTs, adding a personal touch to their memorabilia.</li>
                                <li><strong>Offers significant rewards and benefits</strong> for your NFTs, making them more attractive to collectors and investors.</li>
                                <li><b>Provides immediate liquidity</b> by ensuring swift transactions and quick access to cash.</li>
                                <li><b>Establishes a stable investment opportunity</b> in digital assets, offering a reliable avenue for long-term growth.</li>
                                <li><b>Generates royalties for athletes</b> from their NFTs, creating ongoing revenue streams.</li>
                                <li><b>Attracts a large, sports-focused audience</b> driven by the excitement and fanfare surrounding sports.</li>
                                <li><b>Enhances market visibility</b> by increasing exposure and prominence in the competitive NFT space.</li>
                                <li><b>Improves brand marketing</b> through the endorsement and representation of athletes, boosting overall brand recognition.</li>
                                <li><b>Integrates exclusive player representation</b> in games, enriching the gaming experience with unique sports NFTs.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style type="text/css">
            .po-img img {
                position: absolute;
                top: -107px;
                width: auto;
                height: 553px;
                margin: 0 auto;
                left: 100px;
            }

            @media screen and (max-width: 991px) {
                .po-img {
                    display: none;
                }
            }
        </style>
        <section style="padding: 3% 0%;
    color: #fff;
    background-image: linear-gradient(115deg, #47b475, #1e5133);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 bg-clr text-center">
                        <h3 class="font_wei">Redefine Fantasy Sports with NFT Technology</h3>
                        <p class="mt-30 text-white">Fantasy sports offer a distinctive virtual gaming experience, allowing users to assemble teams and select players for upcoming matches. On our platform, these players and teams are tokenized as NFTs, providing users the opportunity to buy and trade these digital assets. The teams that emerge victorious receive rewards in the form of NFTs, which come with additional perks. This setup not only provides players with royalties for their digital avatars but also enhances the gaming experience with realistic, virtual characters.</p>
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
                            href="{{ url('consultation') }}"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a>

                    </div>
                </div>
            </div>
        </section>

        <style type="text/css">
            .nft_sr {
                background: #ffffff;
                padding: 15% 2% 5%;
                border-radius: 10px;
                box-shadow: 10px 8px 20px 2px #0000002e;
                min-height: 180px;
                margin-bottom: 37px;
            }

            .nft_sr img {
                max-width: 65px;
            }

            .nft_sr img:before {
                content: '';
                box-shadow: 0 0 black;
            }

            .co h3 {
                margin-top: 17px;
                text-align: center;
                font-size: 20px;
                color: #47b475;
                font-weight: 600;
                text-transform: capitalize;
            }

            .nft_sr:hover {
                background: #47b475;
            }

            .nft_sr:hover .nft_sr-title {
                color: #ffffff;
            }
        </style>



        <style type="text/css">
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

            .flip-box .flip-tit {
                color: #161515;
                font-weight: 700;
            }

            .flip-box:hover {
                background: #47b475;
            }

            .flip-box:hover .flip-tit {
                color: #ffffff;
            }

            .flip-box:hover .flip-txt {
                color: #ffffff;
            }
        </style>
        <div class="pros-trading common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h3 class="section-title underline mb20 font-wei">NFT Traits</h3>
                    </div>
                </div>
                <div class="mt60">
                    <div class="row flip-box-row eto-exchange-flip">
                        <!-- Flip Box Starts -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer">
                                    <img class="flip-icon lazy" src="{{ asset('images/spo/icon/token.svg') }}"
                                        alt="Non-Exchangeable" width="90">
                                </div>
                                <h4 class="flip-tit">Non-Interchangeable</h4>
                                <p class="flip-txt">The distinctive properties and specifications of NFTs ensure that each token is one-of-a-kind, making it impossible to exchange one NFT for another due to its unique attributes.</p>
                            </div>
                        </div>
                        <!-- Flip Box Ends -->
                        <!-- Flip Box Starts -->

                        <!-- Flip Box Ends -->
                        <!-- Flip Box Starts -->
                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="flip-box">
                                <div class="flip-icon-outer">
                                    <img class="flip-icon lazy" src="{{ asset('images/spo/icon/crisis.svg') }}"
                                        alt="In - divisible" width="90">
                                </div>
                                <h4 class="flip-tit">Indivisible</h4>
                                <p class="flip-txt">The inherent value of NFTs and their representation of unique assets mean that these tokens cannot be divided into smaller units or fractions.</p>
                            </div>
                        </div>
                        <!-- Flip Box Ends -->

                        <!-- Flip Box Starts -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer">
                                    <img class="flip-icon lazy" src="{{ asset('images/spo/icon/images.svg') }}" alt="Scarcity"
                                        width="90">
                                </div>
                                <h4 class="flip-tit">Scarcity</h4>
                                <p class="flip-txt">The high demand and limited availability of NFTs drive their value. Developers are often constrained to producing a limited number of NFTs of the same type to preserve their rarity.</p>
                            </div>
                        </div>
                        <!-- Flip Box Ends -->
                        <!-- Flip Box Starts -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer">
                                    <img class="flip-icon lazy" src="{{ asset('images/spo/icon/shopping-cart.svg') }}"
                                        alt="Scalability" width="90">
                                </div>
                                <h4 class="flip-tit">Scalability</h4>
                                <p class="flip-txt">Innovative standards for NFTs have been introduced across various blockchains, enhancing their performance and scalability to meet increasing demands.</p>
                            </div>
                        </div>
                        <!-- Flip Box Ends -->
                        <!-- Flip Box Starts -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer">
                                    <img class="flip-icon lazy" src="{{ asset('images/spo/icon/automation.svg') }}"
                                        alt="Interoperable" width="90">
                                </div>
                                <h4 class="flip-tit">Interoperability</h4>
                                <p class="flip-txt">NFT standards facilitate interoperability, enabling projects to be listed and traded across multiple marketplaces, thus broadening their reach and accessibility.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flip-box">
                                <div class="flip-icon-outer">
                                    <img class="flip-icon lazy" src="{{ asset('images/spo/icon/ethereum.svg') }}"
                                        alt="Automated listing" width="90">
                                </div>
                                <h4 class="flip-tit">Automated Listings</h4>
                                <p class="flip-txt">NFT marketplaces support the automation of listings across various platforms, streamlining the process of making NFTs available for purchase after the project is launched.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style type="text/css">
            .bgg {
                background-image: linear-gradient(179deg, #47b475 0%, #19aec5 74%);
            }

            .blog-slider {
                width: 95%;
                position: relative;
                max-width: 800px;
                margin: auto;
                background: #fff;
                box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
                padding: 25px;
                border-radius: 25px;
                height: 400px;
                transition: all 0.3s;
            }

            @media screen and (max-width: 992px) {
                .blog-slider {
                    max-width: 680px;
                    height: 400px;
                }
            }

            @media screen and (max-width: 768px) {
                .blog-slider {
                    min-height: 500px;
                    height: auto;
                    /*  margin: 180px auto;*/
                }
            }

            @media screen and (max-height: 500px) and (min-width: 992px) {
                .blog-slider {
                    height: 350px;
                }
            }

            .blog-slider__item {
                display: flex;
                align-items: center;
            }

            @media screen and (max-width: 768px) {
                .blog-slider__item {
                    flex-direction: column;
                }
            }

            @media screen and (max-width: 768px) {
                .blog-slider {
                    min-height: 500px;
                    height: auto;
                    margin: 180px auto;
                }
            }

            .blog-slider__item.swiper-slide-active .blog-slider__img img {
                opacity: 1;
                transition-delay: 0.3s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>* {
                opacity: 1;
                transform: none;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(1) {
                transition-delay: 0.3s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(2) {
                transition-delay: 0.4s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(3) {
                transition-delay: 0.5s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(4) {
                transition-delay: 0.6s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(5) {
                transition-delay: 0.7s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(6) {
                transition-delay: 0.8s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(7) {
                transition-delay: 0.9s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(8) {
                transition-delay: 1s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(9) {
                transition-delay: 1.1s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(10) {
                transition-delay: 1.2s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(11) {
                transition-delay: 1.3s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(12) {
                transition-delay: 1.4s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(13) {
                transition-delay: 1.5s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(14) {
                transition-delay: 1.6s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(15) {
                transition-delay: 1.7s;
            }

            .blog-slider__img {
                width: 300px;
                flex-shrink: 0;
                height: 300px;
                /*  background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
box-shadow: 4px 13px 30px 1px rgb(252 56 56 / 20%);*/
                border-radius: 20px;
                transform: translateX(-80px);
                overflow: hidden;
            }

            .blog-slider__img:after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                /*background-image: linear-gradient(147deg, #fe8a3900 0%, #fd383800 74%);*/
                border-radius: 20px;
                opacity: 0.8;
            }

            .blog-slider__img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                opacity: 0;
                border-radius: 20px;
                transition: all 0.3s;
            }

            @media screen and (max-width: 768px) {
                .blog-slider__img {
                    transform: translateY(-50%);
                    width: 90%;
                }
            }

            @media screen and (max-width: 576px) {
                .blog-slider__img {
                    width: 95%;
                }
            }

            @media screen and (max-height: 500px) and (min-width: 992px) {
                .blog-slider__img {
                    height: 270px;
                }
            }

            .blog-slider__content {
                padding-right: 25px;
            }

            @media screen and (max-width: 768px) {
                .blog-slider__content {
                    margin-top: -80px;
                    text-align: center;
                    padding: 0 30px;
                }
            }

            @media screen and (max-width: 576px) {
                .blog-slider__content {
                    padding: 0;
                }
            }

            .blog-slider__content>* {
                opacity: 0;
                transform: translateY(25px);
                transition: all 0.4s;
            }

            .blog-slider__code {
                color: #7b7992;
                margin-bottom: 15px;
                display: block;
                font-weight: 500;
            }

            .blog-slider__title {
                font-size: 24px;
                font-weight: 700;
                color: #0d0925;
                margin-bottom: 20px;
            }

            .blog-slider__text {
                color: #4e4a67;
                margin-bottom: 30px;
                line-height: 1.5em;
            }

            .blog-slider__button {
                display: inline-flex;
                background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
                padding: 15px 35px;
                border-radius: 50px;
                color: #fff;
                box-shadow: 0px 14px 80px rgb(252 56 56 / 40%);
                text-decoration: none;
                font-weight: 500;
                justify-content: center;
                text-align: center;
                letter-spacing: 1px;
            }

            @media screen and (max-width: 576px) {
                .blog-slider__button {
                    width: 100%;
                }
            }

            .blog-slider .swiper-container-horizontal>.swiper-pagination-bullets,
            .blog-slider .swiper-pagination-custom,
            .blog-slider .swiper-pagination-fraction {
                bottom: 10px;
                left: 0;
                width: 100%;
            }

            .blog-slider__pagination {
                position: absolute;
                z-index: 21;
                right: 20px;
                width: 11px !important;
                text-align: center;
                left: auto !important;
                top: 50%;
                bottom: auto !important;
                transform: translateY(-50%);
            }

            @media screen and (max-width: 768px) {
                .blog-slider__pagination {
                    transform: translateX(-50%);
                    left: 50% !important;
                    top: 205px;
                    width: 100% !important;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            }

            .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
                margin: 8px 0;
            }

            @media screen and (max-width: 768px) {
                .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
                    margin: 0 5px;
                }
            }

            .blog-slider__pagination .swiper-pagination-bullet {
                width: 11px;
                height: 11px;
                display: block;
                border-radius: 10px;
                background: #062744;
                opacity: 0.2;
                transition: all 0.3s;
            }

            .blog-slider__pagination .swiper-pagination-bullet-active {
                opacity: 1;
                background: #47b475;
                height: 30px;
                box-shadow: 0px 0px 20px rgb(252 56 56 / 30%);
            }

            @media screen and (max-width: 768px) {
                .blog-slider__pagination .swiper-pagination-bullet-active {
                    height: 11px;
                    width: 30px;
                }
            }
        </style>

        <section class="common_spacing bgg">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h3 class="section-title underline mb20 font-wei">NFT Token Standards: Unveiling Their Potential</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-slider">
                            <div class="blog-slider__wrp swiper-wrapper">

                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">
                                        <img class="lazy" src="{{ asset('images/nfte/8.webp') }}" alt="ERC-721" title="ERC-721">
                                    </div>
                                    <div class="blog-slider__content">

                                        <div class="blog-slider__title">ERC-721</div>
                                        <div class="blog-slider__text">The ERC-721 standard on Ethereum allows for the creation of distinct digital assets, each with its own unique attributes and value. This token standard ensures that every NFT is individually identifiable, enhancing its inherent worth.</div>
                                        {{-- <a href="#" class="blog-slider__button home-talk-experts nec-btn">READ MORE</a> --}}
                                    </div>
                                </div>

                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">
                                        <img class="lazy" src="{{ asset('images/nfte/9.webp') }}" alt="ERC-1155" title="ERC-1155">
                                    </div>
                                    <div class="blog-slider__content">

                                        <div class="blog-slider__title">ERC-1155</div>
                                        <div class="blog-slider__text">Developed by Enjin, the ERC-1155 standard introduces semi-fungibility for NFTs, offering users the flexibility to trade these assets more efficiently. This standard provides both scalability and adaptability for managing diverse asset types.</div>
                                        {{-- <a href="#" class="blog-slider__button home-talk-experts nec-btn">READ MORE</a> --}}
                                    </div>
                                </div>
                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">
                                        <img class="lazy" src="{{ asset('images/nfte/10.webp') }}" alt="ERC-998" title="ERC-998">
                                    </div>
                                    <div class="blog-slider__content">

                                        <div class="blog-slider__title">ERC-998</div>
                                        <div class="blog-slider__text">The ERC-998 standard builds upon the ERC-721 and ERC-20 standards, enabling the composition of multiple tokens within a single hierarchy. This allows users to bundle several NFTs or other tokens under one main NFT, streamlining ownership and transactions.</div>
                                        {{-- <a href="#" class="blog-slider__button home-talk-experts nec-btn">READ MORE</a> --}}
                                    </div>
                                </div>
                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">

                                        <img class="lazy" src="{{ asset('images/nfte/11.webp') }}"
                                            alt="NFT Marketplace for Sports" title="TRC-721">
                                    </div>
                                    <div class="blog-slider__content">

                                        <div class="blog-slider__title">TRC-721</div>
                                        <div class="blog-slider__text">TRC-721, introduced by the TRON blockchain, adapts the core principles of Ethereum’s ERC-721 standard. It maintains key features such as transparency, scalability, and security while offering enhanced throughput and performance.</div>
                                        {{-- <a href="#" class="blog-slider__button home-talk-experts nec-btn">READ MORE</a> --}}
                                    </div>
                                </div>
                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">

                                        <img class="lazy" src="{{ asset('images/nfte/hero.webp') }}" alt="EIP-2309"
                                            title="EIP-2309">
                                    </div>
                                    <div class="blog-slider__content">

                                        <div class="blog-slider__title">EIP-2309</div>
                                        <div class="blog-slider__text">An extension of the ERC-721 standard, EIP-2309 enables the automated sequential execution of NFT transactions. This extension facilitates the creation and transfer of large volumes of NFTs in a single operation, simplifying the process for users.</div>
                                        {{-- <a href="#" class="blog-slider__button home-talk-experts nec-btn">READ MORE</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="blog-slider__pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style type="text/css">
            .box {
                background: white;
                padding: 2%;
                margin-bottom: 20px;
                box-shadow: 0px 0px 20px 0px #00000014;
                border-radius: 8px;
            }

            .box h3 {
                color: #47b475;
                margin-bottom: 8px;
                font-weight: 700;
            }

            .mt100 {
                margin-top: 100px;
            }
        </style>

        <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="font-wei" style="font-weight: 600;">Pioneering NFT Marketplaces in Sports</h2>
                        <p class="mt20">Several trailblazers in the NFT space recognized the potential within the sports industry and have established distinctive NFT marketplaces to capitalize on this opportunity.</p>
                        <div class="mt100">
                            <img class="lazy" src="{{ asset('images/spo/5.jpeg') }}" alt="NFT Sports Marketplace"
                                title="NFT marketplaces that adopted sports" width="450" height="auto">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box">
                            <h3>NBA Top Shot</h3>
                            <p>Launched by Dapper Labs on the Matic blockchain, NBA Top Shot is a marketplace dedicated to video clips and trading cards featuring NBA players and their iconic moments. This platform has generated significant excitement, attracting numerous collectors eager to acquire these exclusive NFTs. </p>

                        </div>
                        <div class="box">
                            <h3>Sorare</h3>
                            <p>Sorare has carved out a niche in the fantasy sports arena with a focus on soccer. It offers a virtual fantasy league where users can buy NFTs representing players and teams, competing in scheduled matches. Victorious teams earn NFT rewards, creating a vibrant and engaging experience for crypto enthusiasts who seek both participation and profit.
                            </p>
                        </div>
                        <div class="box">
                            <h3>Dibbs</h3>
                            <p>Dibbs provides a unique platform for trading athlete cards and other sports memorabilia, transforming traditional card collecting into an NFT experience. By combining card collections with fantasy sports elements, users can acquire NFT trading cards and build teams to compete in leagues, driving substantial revenue and gaining prominence in the crypto market.
                            </p>
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
                min-height: 369px;
                border-radius: 4px;
            }

            .partner-sec img {
                margin-bottom: 10px;
            }

            .partner-sec h4 {
                line-height: 1.3;
                font-size: 18px;
                margin-bottom: 10px;
                color: #161515;
                letter-spacing: 0px;
                font-weight: 600;
                text-transform: capitalize;
                margin-top: 6px;
            }

            .partner-sec:hover {
                background: #47b475;
            }

            .partner-sec:hover h4 {
                color: #ffffff !important;
            }

            .partner-sec:hover p {
                color: #ffffff;
            }
        </style>
        <section class="gray_bg common_spacing">
            <div class="container">
                <div class="row  text-center">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="common_h3 text-dark font-wei">Innovative Solutions for Developing Sports NFT Marketplaces</h3>
                            <hr class="mb40">
                        </div>
                    </div>
                </div>
                <div class="row  text-center mt20">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="partner-sec">
                            <img class="lazy" src="{{ asset('images/spo/icon/web-development.webp') }}" alt="Futuristic Technology"
                                width="60">
                            <h4>Cutting-Edge Technology</h4>
                            <p>Leveraging advanced blockchain technology, we build your marketplace across diverse networks such as Ethereum, Tron, and Stellar. We also integrate Ethereum’s layer-two solutions like Polygon to ensure enhanced performance and scalability.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="partner-sec">
                            <img class="lazy" src="{{ asset('images/spo/icon/shield.png') }}" alt="Reliable Platform Development"
                                width="60">
                            <h4>Dependable Platform Development</h4>
                            <p>Our proven track record in blockchain development showcases our ability to empower businesses with resilient and competitive platforms in the crypto space. We deliver robust solutions that position your venture as a formidable player in the market.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="partner-sec">
                            <img class="lazy" src="{{ asset('images/spo/icon/security.png') }}" alt="Multi-Layer Security"
                                width="60">
                            <h4>Advanced Security Measures</h4>
                            <p>In blockchain technology, security is paramount. We implement multi-layered authentication and security protocols to safeguard your platform from breaches and technical issues, ensuring a secure environment for all users.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="partner-sec">
                            <img class="lazy" src="{{ asset('images/spo/icon/transparency.webp') }}" alt="Transparency" width="60">
                            <h4>Open Communication and Transparency</h4>
                            <p>We maintain transparency throughout the development process, providing clear insights into potential challenges and offering strategic advice and innovative solutions to ensure the success of your product.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="partner-sec">
                            <img class="lazy" src="{{ asset('images/spo/icon/skill-development.svg') }}"
                                alt="Token Launch And Marketing Services" width="60">
                            <h4>Token Launch and Marketing Support</h4>
                            <p>We assist in crafting your initial whitepaper and launching your token to facilitate fundraising efforts. Our comprehensive marketing strategies attract attention to your platform, increasing visibility and driving revenue growth.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="partner-sec">
                            <img class="lazy" src="{{ asset('images/spo/icon/cross-chain.webp') }}" alt="Cross-Chain Integration"
                                width="60">
                            <h4>Cross-Chain Compatibility</h4>
                            <p>Our development includes integration with the Polkadot ecosystem to enhance connectivity across various blockchain networks. Additionally, we incorporate third-party wallet integrations to improve user experience and platform functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => "What are sports NFTs?",
                    'ans' => "Sports NFTs are digital tokens representing sports-related collectibles, such as player cards, video clips, or memorabilia, on the blockchain. They offer unique ownership and can include rare or iconic moments from sports events."
                ],
                [
                    'ques' => "Are NFTs the biggest opportunity in sports?",
                    'ans' => "NFTs represent a significant opportunity in sports by providing fans and collectors with new ways to engage with their favorite teams and players. They offer unique, verifiable ownership of digital assets and can open new revenue streams for sports organizations and athletes."
                ],
                [
                    'ques' => "What do Sports NFTs Aim to Solve?",
                    'ans' => "Sports NFTs address the need for secure, verifiable ownership of digital sports collectibles. They offer a way to preserve and trade unique sports moments and memorabilia while ensuring authenticity and rarity through blockchain technology."
                ],
                [
                    'ques' => "How to create my own NFT Sports Marketplace?",
                    'ans' => "To create your own NFT sports marketplace, start by defining your platform's features and target audience. Develop the marketplace using blockchain technology, integrate payment systems, and include functionalities for minting, buying, and selling NFTs. Consult with experts for technical support and strategic advice throughout the development process."
                ],
            ],
        ])
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        var swiper = new Swiper('.blog-slider', {
            spaceBetween: 30,
            effect: 'fade',
            loop: true,
            mousewheel: {
                invert: false,
            },
            // autoHeight: true,
            pagination: {
                el: '.blog-slider__pagination',
                clickable: true,
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
    <script type="b2ee595a2c8691fa0bf3a4f3-text/javascript">
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
    <script type="b2ee595a2c8691fa0bf3a4f3-text/javascript">
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

    <script type="b2ee595a2c8691fa0bf3a4f3-text/javascript">
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
</div>




@endsection