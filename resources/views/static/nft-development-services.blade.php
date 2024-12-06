@extends('layouts.static')
    @section('title', 'NFT Development Services')
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

    .section-block {
        padding: 50px 0;
    }

    .secion-block-grey {
        padding: 50px 0;
    }

    .banner_content {
        text-align: left;
    }

    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn,
    .contentall a {
        background: linear-gradient(270deg, #33b4ff 0%, #00649e 100%) !important;
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

    .card-desc a {
        font-size: 15px;
        display: inline-block;
        max-width: 200px;
        margin: 0 auto 20px;
        border-radius: 4px;
    }

    .banner {
        height: auto;
        background-image: url('{{ asset('images/demo/banner-bg.webp') }}');
        background-size: cover;
        padding-top: 100px;
        padding-bottom: 130px;
        background-repeat: no-repeat;
        background-position: center;
    }

    .eto-exchange-flip .flip-box {
        min-height: 465px;
    }

    /*-- Equal Height --*/
    .container-center {
        display: flex;
        flex-wrap: wrap;
        position: relative;
        z-index: 1;
        justify-content: center;
    }

    .equalize {
        display: flex;
        margin-top: 15px;
        margin-bottom: 15px;
    }


    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        margin: 0 14px 0 !important;
    }


    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0.95;
        background: linear-gradient(45deg, #021482de, transparent);
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
    }

    .banner_content .contentall {
        max-width: 1000px;
        margin: 200px auto 70px;
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
        margin: 15px 0px;
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

    .feature-box-1:after,
    .feature-box-1:before {
        background: #140050 !important;
    }

    .feature-box-1 .service-content:before {
        background: #1e0174 !important;
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
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)));
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 50px;
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
    }

    div#assis_t .flip-box img {
        width: 54px;
        margin-top: 7px;
    }

    .regular-button {
        border-radius: 30px;
        tran
    }

    .bnt {
        border-radius: 30px !important;
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

    @media screen and (max-width: 500px) {
        .banner-btn {
            text-align: center;
            width: 80%;
            margin: 0 auto !important;
        }

        .btn1 {
            margin-left: 3px !important;
            display: block !important;
        }
    }

    @media screen and (min-width: 1000px) {
        .btn1 {
            margin-left: 20px !important;
        }
    }

    .font-wei {
        font-weight: 700;
    }


    .toe {
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

    .bg-dark-half-md {
        background: #368b5a;
        width: 100%;
        display: inline-block;
        padding: 100px 0;
    }

    .category-grid-style-01 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        background: #fff;
        -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        border-radius: 5px;
    }

    .teck .category-grid-style-01 .category-item {
        padding: 30px;
        text-align: center;
        width: 25%;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
        position: relative;
        cursor: pointer;
    }

    .teck .category-grid-style-01 .category-item:before {
        content: "";
        background: #fff;
        width: 110%;
        height: 110%;
        display: inline-block;
        position: absolute;
        left: -5%;
        top: -5%;
        z-index: 1;
        opacity: 0;
        -webkit-transform: scale(.96);
        transform: scale(.96);
        transition: all .3s ease-in-out;
    }

    .teck .category-grid-style-01 .category-item .category-icon {
        color: #333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px;
        position: relative;
        z-index: 2;
    }

    .category-grid-style-01 .category-item:hover:before {
        -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
        transition: all .3s ease-in-out;
    }

    .projectFactsWrap {
        display: flex;
        margin-top: 0px;
        flex-direction: row;
        flex-wrap: wrap;
    }

    #projectFacts .fullWidth {
        padding: 0;
    }

    .projectFactsWrap .item {
        width: 33.3%;
        height: 100%;
        padding: 30px 0px;
        text-align: center;
    }

    .projectFactsWrap .item:nth-child(1) {
        background: #47b475;
    }

    .projectFactsWrap .item:nth-child(2) {
        background: #3a9d64;
    }

    .projectFactsWrap .item:nth-child(3) {
        background: #478f65;
    }

    .projectFactsWrap .item:nth-child(4) {
        background: rgb(23, 44, 66);
    }

    .projectFactsWrap .item p.number {
        font-size: 30px;
        padding: 0;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .projectFactsWrap .item p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 18px;
        margin: 0;
        padding: 10px;
        font-family: 'Open Sans';
    }


    .projectFactsWrap .item span {
        width: 60px;
        background: rgba(255, 255, 255, 0.8);
        height: 2px;
        display: block;
        margin: 0 auto;
    }


    .projectFactsWrap .item i {
        vertical-align: middle;
        font-size: 50px;
        color: rgba(255, 255, 255, 0.8);
    }


    .projectFactsWrap .item:hover i,
    .projectFactsWrap .item:hover p {
        color: white;
    }

    .projectFactsWrap .item:hover span {
        background: white;
    }

    .box {
        background-color: #fff;
        z-index: 0;
        overflow: hidden;
        padding: 20px;
        margin-bottom: 20px;
        min-height: 301px;
        border-radius: 10px;
        text-align: center;
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
        -webkit-box-shadow: 0 0 95px 0 rgb(0 0 0 / 7%);
        box-shadow: 0 0 95px 0 rgb(0 0 0 / 7%);
    }

    .box,
    .sub_ff {
        position: relative;
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
        border: 1px solid #b6b6b6;
    }

    /*.technologies ul li img {height: 60px;}*/
    .technologies ul li p {
        margin-bottom: 0 !important;
    }

    /*-- Welcome Content --*/
    .welcome-content {
        background: #fff;
        padding: 60px 0px;
    }

    .welcome-content ul {
        display: flex;
        flex-wrap: wrap;
        margin: 0px;
        padding: 0px;
        color: #000;
        justify-content: center;
    }

    .welcome-content ul li {
        width: 24%;
        margin: 0.5%;
        border: 1px solid #c9c9c9;
        background: #fff;
        display: grid;
        grid-template-columns: 30% 70%;
        padding: 10px;
        align-items: center;
        text-align: left;
    }

    .welcome-content ul li .icons {
        /*width: 50px;*/
        margin-right: 10px;
        padding-right: 10px;
        border-right: 1px solid #c9c9c9;
        /*filter: invert(1);*/
    }

    .welcome-content ul li p {
        line-height: 20px;
        padding: 0px;
        margin: 0px;
    }

    .welcome-content ul li .icons img {
        height: 50px;
    }

    /*------------ Tech Stack -----------*/
    .tech-stack {
        padding: 60px 0px;
    }

    .tech-stack ul {
        display: flex;
        padding: 10px;
        justify-content: center;
        background: #fff;
        margin-bottom: 10px;
    }

    .tech-stack .nav-stacked>li {
        background: #0b4599;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(to right, #00aaff, #40f599);
    }

    .tech-stack .nav li a p {
        color: #fff !important;
        margin-bottom: 0;
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        border: 0;
        color: #fff;
    }

    .tech-stack ul img {
        height: 60px;
    }

    .tech-stack h4 {
        text-align: center;
        background: #234aa9;
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
        margin-bottom: 0px;
        color: #fff;
    }

    .technology ul {
        flex-wrap: wrap;
    }

    .technology ul li {
        width: 18%;
        padding: 10px;
        margin: 1%;
        text-align: center;
        border: 1px solid #eee;
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .welcome-content ul li {
            width: 100%;
        }

        .technologies ul li {
            width: 49%;
        }

        .technologies ul li img {
            width: 60px;
        }

        .technologies ul li {
            margin: 0px;
        }

        .tech-stack ul img {
            width: 100%;
        }

        .tech-stack ul {
            flex-wrap: wrap;
        }

        .tech-stack ul li {
            width: 48%;
            text-align: center;
        }
    }

    @media (max-width: 786px) {
        .welcome-content ul li {
            width: 32%;
        }

        .projectFactsWrap .item {
            flex: 0 0 50%;
        }

    }

    @media screen and (max-width:768px) {
        .teck .category-grid-style-01 .category-item {
            width: 50% !important
        }
    }


    .perfect-script-items {
        padding: 30px 15px 10px;
        border-radius: 4px;
        background-color: #f2f2f2;
        -webkit-transition: .3s;
        transition: .3s;
        display: flex;
        min-height: 206px;
        box-shadow: 11px -1px 11px #00000030;
        margin-bottom: 20px
    }

    .perfect-script-items .icon {
        width: 70px;
        height: 70px;
        margin: 20px auto 50px;
        line-height: 75px;
        position: relative;
        border-radius: 50%;
        background-image: linear-gradient(293deg, #47b475 0, #47b475 100%);
        color: #fff;
        font-size: 40px;
        z-index: 9;
        float: left
    }

    .perfect-script-items .icon img {
        width: 45px;
        margin-top: 13px;
        /*  -webkit-filter: brightness(0) invert(1);
            filter: brightness(0) invert(1)*/
    }

    .perfect-script-items .content {
        display: block;
        float: left;
        width: 80%;
        /*padding-left: 30px*/
    }

    .perfect-script-items h3 {
        font-size: 20px;
        line-height: 22px;
        text-align: left
    }

    .perfect-script-items p {
        text-align: left
    }

    .flip-icon {
        height: 50px;
        margin-top: 23px;
    }

    .flip-icon-outer {
        line-height: 90px;
        padding: 0
    }

    .font-wei {
        color: #000;
        font-weight: 700
    }

    .perfect-script-items:hover {
        background: #47b475
    }

    .perfect-script-items:hover h3 {
        color: #fff
    }

    .perfect-script-items:hover p {
        color: #fff
    }

    .feature {
        min-height: 360px
    }

    .flip-tit {
        font-weight: 700;
        color: #000
    }

    .img-wid {
        width: 45px
    }

    .marketing_service {
        background-image: linear-gradient(45deg, #000000c2, #000000ba), url(images/nft_marketing/nft-marketing.webp);
        background-size: cover;
        padding: 100px 0;
        color: #fff;
        background-attachment: fixed
    }


    /*------------ Complimentary-Features Style -----------*/
    .complimentary-features ul li {
        text-align: left !important;
    }

    .complimentary-features {
        padding: 60px 0px;
        background: #140050;
    }

    .complimentary-features ul {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        margin: 0px;
        padding: 0px;
        justify-content: center;
    }

    .complimentary-features ul li {
        width: 29%;
        margin: 2%;
        text-align: left !important;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.2) 0%, rgba(38, 44, 49, 0) 100%);
        box-shadow: 0px 4px 34px rgb(59 54 100 / 15%);
        border-radius: 15px;
        padding: 30px 30px 20px 30px;
    }

    .complimentary-features ul li .icons {
        float: left;
    }

    .complimentary-features ul li .icons img {
        width: 60px;
        height: 60px;
        margin-bottom: 15px;
    }

    .complimentary-features ul li .contents {
        background: transparent;
    }

    .complimentary-features ul li .contents p {
        color: #fff;
    }

    .complimentary-features ul li p strong {
        display: block;
        font-size: 20px;
        color: #200b52;
        text-align: left;
        padding-bottom: 10px;
    }

    .complimentary-features ul li h4 {
        display: block;
        font-size: 20px;
        color: #fff;
        font-weight: bold;
        text-align: left !important;
        padding-bottom: 7px;
    }

    .complimentary-features ul li h3 {
        display: block;
        font-size: 20px;
        color: #fff;
        font-weight: bold;
        text-align: left !important;
        padding-bottom: 7px;
    }

    .banner-img {
        position: absolute;
        top: 0;
        right: 0;
        zoom: 1.3;
        z-index: 1
    }

    /*------------ Ipad View Style -----------*/
    @media only screen and (min-width: 768px) and (max-width: 899px) {
        .complimentary-features ul li {
            width: 100%;
        }

        .welcome-content ul li {
            width: 32%;
        }
    }

    /*------------ Mobile View Style -----------*/
    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .complimentary-features ul li {
            width: 100%;
            display: block;
        }

        .complimentary-features ul li .icons {
            width: 100%;
            clip-path: none;
            border-radius: 0px;
        }

        .complimentary-features ul li .contents {
            width: 100%;
            clip-path: none;
            border-radius: 0px;
            padding: 15px;
        }

        .integration-items {
            min-height: auto;
        }

        .technologies ul li {
            width: 49%;
        }

        .technologies ul li img {
            width: 60px;
        }

        .technologies ul li {
            margin: 0px;
        }

        .welcome-content ul li {
            width: 100%;
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
                        <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ban_tirt">
                                    <h1>Premier NFT Development Services</h1>
                                </div>
                                <p>We deliver top-tier NFT development solutions, specializing in the tokenization of both digital and physical assets, as well as the creation of bespoke NFT marketplaces. Our expertise enables us to craft tailored solutions that perfectly align with your NFT project goals.</p>
                                <div class="banner-btn"> 
                                    <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button bnt nec-btn btn1"><strong>CONNECT WITH OUR EXPERTS</strong></a>

                                    {{-- <a href="#viewdemo" class="bnt nec-btn btn1">REQUEST A DEMO</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        </div>
                        <img src="{{ asset('images/demo/banner-img.webp') }}" class="banner-img hidden-xs"
                            alt="NFT Development Company" title="NFT Development Company">
                    </div>
                </div>
            </div>
        </div>

        <style>
            section#counter-stats {
                /* display: flex; */
                justify-content: center;
                margin-top: -50px;
                padding: 0 !important;
                /*background: rgb(26 26 26);*/
                color: #fff;
                position: relative;
                z-index: 5;
            }


            .stats {
                text-align: center;
                font-size: 28px;
                font-weight: 700;
                padding: 1rem 0;
                border-bottom: 1px solid #fff;
                box-shadow: -4px 15px 36px rgba(0, 0, 0, .05);
            }

            .stats .fa {
                color: #008080;
                font-size: 60px;
            }

            .stats p {
                font-size: 14px;
                margin-bottom: 0;
            }

            #counter-stats .stats:nth-child(1) {
                background: #061c4c;
            }

            #counter-stats .stats:nth-child(2) {
                background: #02468c;
            }

            #counter-stats .stats:nth-child(3) {
                background: #061c4c;
            }

            #counter-stats .stats:nth-child(4) {
                background: #02468c;
            }


            /* AUTHOR LINK */
        </style>

        <style type="text/css">
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
        </style>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <br>
                        <img src="{{ asset('images/demo/img-2.png') }}" alt="NFT Development Services"
                            title="NFT Development Services">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <div class="sec_tit underline text-left mb20">
                                <h2>Elevate Your NFT Experience with Our Tailored Development Solutions</h2>
                            </div>
                        </div>
                        <p class="mt10 text-justify">NFTs are reshaping the landscape of digital asset ownership, trading, and valuation, and their impact is growing rapidly across various sectors. At the forefront of this revolution, we offer specialized NFT development services designed to unlock the full potential of this groundbreaking technology.</p>
                        <p class="mt10 text-justify">Our expertise in NFT development has earned us a reputation as a leading provider in the industry, with a track record of delivering exceptional projects for clients worldwide. Whether you're interested in tokenizing digital art, gaming assets, or other unique items, we offer bespoke solutions that align perfectly with your objectives. From creating distinctive non-fungible tokens to developing robust NFT marketplaces, we have the skills and knowledge to ensure your NFT venture thrives.</p>
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button bnt nec-btn btn1"><strong>JOIN US TODAY TO GET STARTED!</strong></a>
                    </div>
                </div>
            </div>
        </div>

        <section class="common_spacing gray_bg" id="get">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h2 class="section-title underline mb20">Comprehensive NFT Development Services We Offer</h2>
                    </div>
                    <p>As a leading NFT development firm, we deliver exceptional services to clients around the globe, crafting compelling NFT projects with advanced features. Leverage our expertise to enhance your business prospects in the dynamic NFT landscape.</p>
                </div>
                <div class="container-center">

                    <div class="col-md-4 equalize">
                        <a href="{{ url('consultation') }}">
                            <div class="d_card">
                                <div class="content">
                                    <h3 class="heading">Utility NFTs</h3>
                                    <p class="data-content">We design versatile NFTs that offer both virtual and real-world benefits, enhancing their practical applications.</p>
                                    <!-- <div class="text-center mt10">
                                    <a href="https://www.blockchainappfactory.com/fractional-nft-marketplace-development
" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 equalize">
                        <a href="{{ url('consultation') }}">
                            <div class="d_card bg31">
                                <div class="content">
                                    <h3 class="heading">Play-to-Earn NFTs</h3>
                                    <p class="data-content">Our team creates engaging NFT assets for Play-to-Earn games, including avatar skins, weapons, vehicles, and other in-game items.</p>
                                    <!-- <div class="text-center mt10">
                                    <a href="https://www.blockchainappfactory.com/fractional-nft-marketplace-development
" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('fractional-nft-marketplace-development') }}">
                            <div class="d_card bg6">
                                <div class="content">
                                    <h3 class="heading">Fractional NFTs</h3>
                                    <p class="data-content">We specialize in developing NFTs that allow for fractional ownership of high-value assets such as art and collectibles, making them more accessible.</p>
                                    <!-- <div class="text-center mt10">
                                    <a href="https://www.blockchainappfactory.com/fractional-nft-marketplace-development
" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('nft-art-marketplace-development') }}">
                            <div class="d_card bg8">
                                <div class="content">
                                    <h3 class="heading">Art NFTs</h3>
                                    <p class="data-content">Our experts create NFTs for digital artworks, ensuring authenticity and provenance are securely recorded on the blockchain.</p>
                                    <!--    <div class="text-center mt10">
                                    <a href="https://www.blockchainappfactory.com/nft-art-marketplace-development" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('nft-marketplace-development') }}">
                            <div class="d_card bg040">
                                <div class="content">
                                    <h3 class="heading">Phygital NFTs</h3>
                                    <p class="data-content">We design NFTs that merge digital and physical experiences, supported by smart contracts to offer a seamless integration.</p>
                                    <!--  <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('white-label-nft-marketplace') }}">
                            <div class="d_card bg10">
                                <div class="content">
                                    <h3 class="heading">Celebrity NFTs</h3>
                                    <p class="data-content">We craft unique NFT collectibles for celebrities, enhancing their digital presence and connection with fans.</p>
                                    <!--  <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('nft-music-marketplace-development') }}">
                            <div class="d_card bg20">
                                <div class="content">
                                    <h3 class="heading">Music NFTs</h3>
                                    <p class="data-content"> Our team develops NFTs for music albums, bridging the gap between music creators and their audiences. </p>
                                    <!--      <div class="text-center mt10">
                                    <a href="https://www.blockchainappfactory.com/nft-music-marketplace-development" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('consultation') }}">
                            <div class="d_card bg12">
                                <div class="content">
                                    <h3 class="heading">Fashion NFTs</h3>
                                    <p class="data-content"> We create NFTs for fashion brands, appealing to a new generation of consumers with innovative digital and physical offerings. </p>
                                    <!--   <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('nft-for-sports') }}">
                            <div class="d_card bg15">
                                <div class="content">
                                    <h3 class="heading">Sports NFTs</h3>
                                    <p class="data-content"> Our services include creating NFTs for sports organizations, capturing iconic moments through collectible cards and video clips.</p>
                                    <!--   <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 equalize">
                        <a href="{{ url('nft-for-realestate') }}">
                            <div class="d_card bg17">
                                <div class="content">
                                    <h3 class="heading">Real Estate NFTs</h3>
                                    <p class="data-content"> We develop NFTs for real estate properties, supporting both physical and digital ownership with smart contract integration. </p>
                                    <!--       <div class="text-center mt10">
                                    <a href="https://www.blockchainappfactory.com/nft-for-realestate" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('cross-chain-nft-marketplace') }}">
                            <div class="d_card bg25">
                                <div class="content">
                                    <h3 class="heading">Cross-Chain NFTs</h3>
                                    <p class="data-content"> Our NFTs are designed to operate seamlessly across multiple blockchain networks, ensuring interoperability. </p>
                                    <!--   <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('non-fungible-token-development') }}">
                            <div class="d_card bg7">
                                <div class="content">
                                    <h3 class="heading">Digital Content NFTs</h3>
                                    <p class="data-content">We produce NFTs that back various forms of digital content, enhancing the connection between creators and their most dedicated fans.</p>
                                    <!--  <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('nft-marketplace-for-domains') }}">
                            <div class="d_card bg21">
                                <div class="content">
                                    <h3 class="heading">Domain Name NFTs </h3>
                                    <p class="data-content"> We create NFTs for Web3 domain names, helping businesses secure distinctive addresses for their websites and wallets. </p>
                                    <!--       <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('consultation') }}">
                            <div class="d_card bg32">
                                <div class="content">
                                    <h3 class="heading">Generative Art NFTs</h3>
                                    <p class="data-content">Our generative art NFTs utilize blockchain and AI technologies to produce visually striking art with various applications.</p>
                                    <!-- <div class="text-center mt10">
                                    <a href="https://www.blockchainappfactory.com/fractional-nft-marketplace-development
" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 equalize">
                        <a href="{{ url('nft-streaming-platform-development-solutions') }}">
                            <div class="d_card bg22">
                                <div class="content">
                                    <h3 class="heading">Video NFTs</h3>
                                    <p class="data-content"> We develop NFT representations of video clips, allowing organizations and individuals to commemorate their achievements. </p>
                                    <!--   <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 equalize">
                        <a href="{{ url('consultation') }}">
                            <div class="d_card bg022">
                                <div class="content">
                                    <h3 class="heading">PFP NFTs</h3>
                                    <p class="data-content">We design PFP (Profile Picture) NFTs for exclusive collection projects, fostering communities centered around specific themes or causes.</p>
                                    <!--   <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 equalize">
                        <a href="{{ url('consultation') }}">
                            <div class="d_card bg023">
                                <div class="content">
                                    <h3 class="heading">Automotive NFTs</h3>
                                    <p class="data-content"> Our automotive NFTs are designed for use in web and metaverse applications, offering diverse use cases for the automotive industry.</p>
                                    <!--   <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 equalize">
                        <a href="{{ url('nft-marketplace-development') }}">
                            <div class="d_card bg9">
                                <div class="content">
                                    <h3 class="heading">E-Commerce NFTs</h3>
                                    <p class="data-content">We create NFTs for e-commerce platforms, addressing issues related to counterfeit products and streamlining logistics.</p>
                                    <!--  <div class="text-center mt10">
                                    <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button"><span>Read More</span></a>
               </div> -->
                                </div>
                            </div>
                        </a>
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
    </section>


    <div class="technologies" style="background: #eee;">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="sec_tit underline text-center ">Kickstart Your NFT Project and Make a Mark in the Digital Realm</h3>
                <p class="text-center  ">As NFTs surge in popularity within the digital landscape, launching your own NFT initiative presents an ideal opportunity to dive into the Web3 era. Partner with our experts to create and unveil a distinctive project, complete with captivating visuals that set you apart from the rest.</p>
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/bayc.webp') }}">
                        <p class=" ">Bored Ape Yacht Club</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/pudgy.webp') }}">
                        <p class=" ">Pudgy Penguins</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/mayc-token.webp') }}">
                        <p class=" ">Mutant Ape Yacht Club</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/degods.webp') }}">
                        <p class=" ">DeGods</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/azuki.webp') }}">
                        <p class=" ">Azuki</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/moonbirds.webp') }}">
                        <p class=" ">Moonbirds</p>
                    </li>
                </ul>

                <div class="clearfix"></div>

                <div class="text-center cta_mine txt"> 
                    {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                        href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>  --}}
                    <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with our Experts</span></a> 
                </div>
            </div>
        </div>
    </div>


    <div style="background: #140050; padding: 60px 0;">
        <div class="container">
            <div class="row real-estate-list">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title text-center">
                        <h2 class="sec_tit underline text-center mb20 text-white">What Our NFT Platforms Enable</h2>
                        <p class="text-white">We excel in crafting robust NFT platforms that streamline and enhance the core processes of NFT transactions.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">

                    <div class="perfect-script-items"
                        style="padding: 0px; min-height: auto; box-shadow: none; margin-bottom: 5px; background: none;">
                        <div class="icon" style="margin-bottom: 0; background: #fff;"> <img class="lazy"
                                src="{{ asset('images/demo/icon/creation.png') }}"> </div>
                        <div class="content">
                            <h3 class="font-wei text-white">NFT Creation</h3>
                            <p class="text-white" style="margin-top:0;">We design and mint NFTs from a wide array of distinctive assets, ensuring each one is unique.</p>
                        </div>
                    </div>

                    <div class="perfect-script-items"
                        style="padding: 0px; min-height: auto; box-shadow: none; margin-bottom: 5px; background: none;">
                        <div class="icon" style="margin-bottom: 0; background: #fff;"> <img class="lazy"
                                src="{{ asset('images/demo/icon/auction.png') }}"> </div>
                        <div class="content">
                            <h3 class="font-wei text-white">NFT Auction</h3>
                            <p class="text-white" style="margin-top:0;">Our systems facilitate a smooth auction experience, allowing users to place bids effortlessly.</p>
                        </div>
                    </div>

                    <div class="perfect-script-items"
                        style="padding: 0px; min-height: auto; box-shadow: none; margin-bottom: 5px; background: none;">
                        <div class="icon" style="margin-bottom: 0; background: #fff;"> <img class="lazy"
                                src="{{ asset('images/demo/icon/transactions.png') }}"> </div>
                        <div class="content">
                            <h3 class="font-wei text-white">NFT Transaction Security</h3>
                            <p class="text-white" style="margin-top:0;">We prioritize the security and integrity of every NFT transaction, safeguarding your digital assets.</p>
                        </div>
                    </div>

                    <div class="perfect-script-items"
                        style="padding: 0px; min-height: auto; box-shadow: none; margin-bottom: 5px; background: none;">
                        <div class="icon" style="margin-bottom: 0; background: #fff;"> <img class="lazy"
                                src="{{ asset('images/demo/icon/redeem.webp') }}"> </div>
                        <div class="content">
                            <h3 class="font-wei text-white">NFT Redemption</h3>
                            <p class="text-white" style="margin-top:0;">Our platforms support the redemption of NFTs for both physical and digital assets, bridging the virtual and real worlds.</p>
                        </div>
                    </div>

                    <div class="perfect-script-items"
                        style="padding: 0px; min-height: auto; box-shadow: none; margin-bottom: 5px; background: none;">
                        <div class="icon" style="margin-bottom: 0; background: #fff;"> <img class="lazy"
                                src="{{ asset('images/demo/icon/transfer.png') }}"> </div>
                        <div class="content">
                            <h3 class="font-wei text-white">NFT Transfer</h3>
                            <p class="text-white" style="margin-top:0;">We provide seamless solutions for transferring NFTs, ensuring smooth ownership transitions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center d-flex align-items-center">
                    <br>
                    <img class="lazy" src="{{ asset('images/demo/nft-systems.webp') }}" alt="How Our NFT Systems Work"
                        title="How Our NFT Systems Work">
                </div>


                <!-- <div class="col-md-12 text-center mt20"> <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn"><span>Hire our NFT Developers</span></a> </div> -->



            </div>
        </div>
    </div>


    <style type="text/css">
        .prom-icon {
            margin-bottom: 15px;
        }
    </style>

    <section class="intro_cnt common_spacing our-prom" style="background:#eee;">
        <div class="container">
            <div class="row">
                <h2 class="sec_tit underline text-center" style="width: 100%">Essential Elements of Our NFT Ecosystem</h2>
            </div>
            <div class="row">
                <div class="container-center container">
                    <div class="col-md-4 equalize">
                        <div class="prom-box text-center">
                            <div class="prom-icon"><img class="lazy" src="{{ asset('images/demo/icon/application.png') }}" width="64px"></div>
                            <div class="prom-desp">
                                <h4>Application Layer</h4>
                                <p>We design bespoke front-end and back-end solutions, tailored to meet unique requirements, ensuring our NFT systems offer both intuitive user interfaces and sophisticated features.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 equalize">
                        <div class="prom-box text-center">
                            <div class="prom-icon"><img class="lazy" src="{{ asset('images/demo/icon/payment.webp') }}" width="64px"></div>
                            <div class="prom-desp">
                                <h4>Payment Gateways</h4>
                                <p>To facilitate seamless transactions, we integrate a range of payment gateways, providing diverse payment options within our ecosystem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 equalize">
                        <div class="prom-box text-center">
                            <div class="prom-icon"><img class="lazy" src="{{ asset('images/demo/icon/authentication.png') }}" width="64px"></div>
                            <div class="prom-desp">
                                <h4>Authentication Layer</h4>
                                <p>We implement self-executing smart contracts that automate and verify transactions between NFT sellers and buyers, ensuring secure and efficient processes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 equalize">
                        <div class="prom-box text-center">
                            <div class="prom-icon"><img class="lazy" src="{{ asset('images/demo/icon/validate.png') }}" width="64px"></div>
                            <div class="prom-desp">
                                <h4>Validation Layer</h4>
                                <p>To confirm the legitimacy of NFT transactions, we incorporate a unique hash for each NFT, enhancing security and ensuring a reliable record of ownership.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 equalize">
                        <div class="prom-box text-center">
                            <div class="prom-icon"><img class="lazy" src="{{ asset('images/demo/icon/data.png') }}" width="64px"></div>
                            <div class="prom-desp">
                                <h4>Storage Layer</h4>
                                <p>Our NFT ecosystems leverage both decentralized storage networks and cloud solutions to securely manage blockchain data and digital assets.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <style type="text/css">
        .awesome-features-wrapper {
            border: 1px solid #cdcdcd;
            background: #fff;
            padding: 30px 15px;
            min-height: auto;
            transition: .3s;
            position: relative;
            margin-bottom: 30px;
            /*border-radius: 10px;*/
            transition: 1s;
            border-radius: 7px;

        }

        .awesome-features-wrapper::after {
            content: "";
            position: absolute;
            right: -6px;
            top: -6px;
            background: linear-gradient(270deg, #33b4ff 0%, #00649e 100%) !important;
            width: 90px;
            height: 90px;
            z-index: -1;
            transition: 1s;
            border-radius: 7px;
        }

        .awesome-features-wrapper:hover::after {
            width: 200px;
            height: 200px;
        }

        .awesome-features-icon-img .fa {
            color: #47b475;
            font-size: 40px;
            margin-bottom: 15px;
        }

        .awesome-features-icon-img img {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
        }

        .awesome-features-text h4 {
            font-size: 22px;
            font-weight: 500;
            line-height: 1.3;
            margin-bottom: 18px;
        }

        .awesome-features-text p {
            margin-bottom: 0;
        }
    </style>

    <div class="common_spacing" style="padding-bottom:20px;">
        <div class="container">
            <div class=" ">
                <h2 class="sec_tit underline text-center">Our All-Inclusive NFT Development Services:<br>
                    Your Ultimate NFT Solution Hub</h2>
                <p class="text-center"></p>
            </div>
            <div class="row mt40">
                <div class="container container-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/competitive.svg') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Stay Ahead of the Curve</h3>
                                <p>Advance your business with our extensive range of non-fungible token development services, designed to cater to diverse business models and tailored to your specific needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/security.png') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Custom NFT Creation</h3>
                                <p>Work with our specialists to craft bespoke NFTs that meet the unique demands of your project, ensuring robust security and seamless accessibility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/launch.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">NFT Marketplace & Launchpad</h3>
                                <p>Partner with us to build a dynamic NFT marketplace and launchpad that connects projects, creators, collectors, and passionate fans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/nft-gaming.png') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">NFT Game Development</h3>
                                <p>Introduce an engaging NFT game built on Play-to-Earn (P2E) and Move-to-Earn (M2E) models, providing gamers with enriching and rewarding experiences.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/minting.png') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">NFT Minting Platform</h3>
                                <p>Create a dedicated platform for NFT minting, enabling creators and new projects to produce NFTs without technical limitations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/exchange.png') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">NFT Exchange Platform</h3>
                                <p>Develop an NFT exchange application that facilitates smooth, real-time trading of NFTs, adapting to market fluctuations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/lending.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">NFT Lending Platform</h3>
                                <p>Establish an NFT lending platform that enables users to leverage their NFT assets as collateral for lending opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/music.png') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">NFT Music Marketplace</h3>
                                <p>Build an NFT music marketplace where users can trade music clips, fan merchandise, and album royalty shares.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/sports.png') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">NFT Sports Marketplace</h3>
                                <p>Create a vibrant NFT sports marketplace for trading digital and physical memorabilia and merchandise, enriched with interactive elements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/real-estate.png') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">NFT Real Estate Exchange</h3>
                                <p>Establish an NFT marketplace tailored for real estate, facilitating the seamless trading of both physical and virtual property assets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/integration.png') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Web2 NFT Integration</h3>
                                <p>Integrate NFTs into your existing Web2 platform to boost your business presence and competitiveness in the evolving digital landscape.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/demo/icon/trading.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <h3 style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Shopify NFT Gateway</h3>
                                <p>Develop an NFT trading gateway on Shopify, offering a straightforward and efficient way for users to purchase NFT assets directly from your store.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <style type="text/css">
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

        .defi_img {
            border-radius: 10px;
        }

        @media screen and (min-width: 800px) {
            .defiimg {
                margin-top: 40px !important;
            }
        }

        .feature-box-1 {
            color: #000;
            text-align: center;
            padding: 10px 0 15px;
            position: relative;
            margin-bottom: 40px
        }

        .feature-box-1:after,
        .feature-box-1:before {
            content: "";
            background: #47b475;
            width: 150px;
            height: 10px;
            transform: translateX(-50%);
            position: absolute;
            top: 0;
            left: 50%;
            clip-path: polygon(7% 0%, 93% 0%, 100% 100%, 0% 100%)
        }

        .feature-box-1:after {
            width: 80%;
            height: 15px;
            border-radius: 0 0 10px 10px;
            top: auto;
            bottom: 0;
            clip-path: none
        }

        .feature-box-1 .service-content {
            background: #fff;
            padding: 25px 20px;
            border-radius: 10px;
            min-height: 335px
        }

        .feature-box-1 .service-content:before {
            content: "";
            background: #47b475;
            width: 128px;
            height: 100px;
            transform: translateX(-50%);
            position: absolute;
            top: 0;
            left: 50%;
            clip-path: polygon(0 0, 100% 0, 50% 100%)
        }

        .feature-box-1 .service-icon {
            color: #77787a;
            background: linear-gradient(to left, #dedfe1, #f3f3f3);
            font-size: 40px;
            line-height: 100px;
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            border-radius: 50%;
            box-shadow: 0 0 0 5px rgba(0, 0, 0, .03);
            position: relative;
            z-index: 1
        }

        .feature-box-1 .service-icon:before {
            content: "";
            background: linear-gradient(to right, #dedfe1, #f3f3f3);
            width: 88%;
            height: 88%;
            border-radius: 50%;
            box-shadow: 5px 0 5px rgba(0, 0, 0, .1);
            transform: translateX(-50%) translateY(-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: -1
        }

        .feature-box-1 .title {
            color: #000;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .5px;
            text-transform: capitalize;
            margin: 0 0 10px
        }

        .feature-box-1 .description {
            font-size: 14px;
            line-height: 24px;
            margin: 0
        }

        .feature-box-1.green:before {
            background: #719e2a
        }

        .feature-box-1.green .service-content:before,
        .feature-box-1.green:after {
            background: #85bc16
        }

        .feature-box-1.green .title {
            color: #85bc16
        }

        .features-area.style-two .image-box:hover {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
            -webkit-box-shadow: 0 1rem 3rem rgb(31 45 61 / 13%) !important;
            box-shadow: 0 1rem 3rem rgb(31 45 61 / 13%) !important;
        }

        @media only screen and (max-width:990px) {
            .feature-box-1 {
                margin: 0 0 30px
            }
        }
    </style>

    <section class="common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <h3 class="sec_tit underline text-center mb20" style="width: 100%">End-to-End NFT Creation: Our Proven Process</h3>
                <p class="text-center">We follow a meticulous NFT development process, leveraging cutting-edge technologies and industry best practices to transform your innovative business concepts into blockchain reality.</p>
            </div>
            <div class="row mt20">
                <div class="container-center container">
                    <div class="col-md-4 col-sm-6 equalize">
                        <div class="feature-box-1">
                            <div class="service-content">
                                <div class="service-icon"> <img class="flip-icon lazy"
                                        src="{{ asset('images/demo/icon/consultation.png') }}"> </div>
                                <h3 class="title">Initial Consultation</h3>
                                <p class="description">Our specialists engage with you to grasp your business objectives and provide expert guidance to refine your venture and effectively target your audience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equalize">
                        <div class="feature-box-1">
                            <div class="service-content">
                                <div class="service-icon"> <img class="flip-icon lazy"
                                        src="{{ asset('images/demo/icon/blueprint.webp') }}"> </div>
                                <h3 class="title">Blueprint Creation</h3>
                                <p class="description">Following our consultation, we craft a detailed blueprint for your NFT project, outlining development strategies and setting long-term milestones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equalize">
                        <div class="feature-box-1">
                            <div class="service-content">
                                <div class="service-icon"> <img class="flip-icon lazy"
                                        src="{{ asset('images/demo/icon/development.png') }}"> </div>
                                <h3 class="title">Development</h3>
                                <p class="description">Our skilled NFT developers begin creating your NFTs using state-of-the-art technology, ensuring alignment with your business goals and adherence to Web3 principles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equalize">
                        <div class="feature-box-1">
                            <div class="service-content">
                                <div class="service-icon"> <img class="flip-icon lazy"
                                        src="{{ asset('images/demo/icon/quality.webp') }}"> </div>
                                <h3 class="title">Quality Assurance</h3>
                                <p class="description">Our quality assurance team rigorously tests the NFTs and smart contracts through various methods to identify and resolve any issues, ensuring optimal performance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equalize">
                        <div class="feature-box-1">
                            <div class="service-content">
                                <div class="service-icon"> <img class="flip-icon lazy"
                                        src="{{ asset('images/demo/icon/launch.webp') }}"> </div>
                                <h3 class="title">Launch and Maintenance</h3>
                                <p class="description">Once your NFT project is live, we oversee the launch and offer ongoing maintenance to keep your venture aligned with evolving trends and market demands.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style type="text/css">
        .center-align {
            padding: 60px 0
        }

        .center-align ul {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin: 10px 0;
            padding: 30px 0;
            border: 1px solid #eee;
            border-radius: 10px;
            background: #f2f2f2;
        }

        .center-align ul li {
            width: 50%;
            display: flex;
            align-items: center;
            padding: 0 3%
        }

        .center-align ul li h5 {
            font-size: 24px;
            font-weight: 700;
            color: #e85b17
        }

        .center-align ul li p span {
            width: 40px;
            height: 40px;
            background: linear-gradient(#e88817, #e85b17);
            opacity: 1;
            font-size: 18px;
            display: inline-block;
            border-radius: 50%;
            color: #fff;
            text-align: center;
            line-height: 2.1em;
            margin-left: -70px;
            margin-right: 25px
        }

        .reverse {
            flex-direction: row-reverse
        }

        @media (min-width:320px) and (max-width:768px) {
            .center-align {
                padding: 10px 0
            }

            .center-align ul li {
                width: 100%;
                margin: 5px 0;
                padding: 15px
            }
        }
    </style>

    <style type="text/css">
        .category-item.aos-item:hover .text-center {
            position: relative;
            z-index: 99;
            color: #000 !important;
        }
    </style>
    <section class="space-pt bg-dark-half-md tech-padding teck">
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="section-title text-center ">
                    <h3 class="common_h3 text-white">Expert NFT Development Across Diverse Blockchain Networks</h3>
                    <hr>
                    <p class="white-color">As pioneers in NFT development, our expertise spans multiple blockchain networks, enabling us to propel projects of all sizes and sectors to new heights. We leverage both layer-1 and layer-2 networks to enhance your business’s visibility and impact in the fiercely competitive market.</p>
                </div>
            </div>
            <div class="row mt20">
                <div class="col-sm-12">
                    <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/eth.webp') }}" alt="Ethereum"> </div> <a href="#"
                                class="category-title">Ethereum</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/polygon.webp') }}" alt="Polygon"> </div> <a href="#"
                                class="category-title">Polygon</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/solana.webp') }}" alt="Solana"> </div> <a href="#"
                                class="category-title">Solana</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/binance-logo.webp') }}" alt="BNB Chain"> </div> <a href="#"
                                class="category-title">BNB Chain</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/avalanche.png') }}" alt="Avalanche"> </div>
                            <a href="#" class="category-title">Avalanche</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/cardano.webp') }}" alt="Cardano"> </div>
                            <a href="#" class="category-title">Cardano</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/harmony-logo.webp') }}" alt="Harmony"> </div>
                            <a href="#" class="category-title">Harmony</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/tron.webp') }}" alt="Tron"> </div>
                            <a href="#" class="category-title">Tron</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/polkadot.webp') }}" alt="Polkadot"> </div>
                            <a href="#" class="category-title">Polkadot</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/shardeum.webp') }}" alt="Shardeum"> </div>
                            <a href="#" class="category-title">Shardeum</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/tezos.webp') }}" alt="Tezos"> </div>
                            <a href="#" class="category-title">Tezos</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/fantom.webp') }}" alt="Fantom"> </div>
                            <a href="#" class="category-title">Fantom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style type="text/css">
        .fa-check-circle {
            font-size: 26px;
            color: #91c645;
        }

        .fa-times-circle {
            font-size: 26px;
            color: #d90823;
        }

        .data table td,
        .data table th {
            padding: 15px;
        }
    </style>

    <style type="text/css">
        :root {
            --d: 700ms;
            --e: cubic-bezier(0.19, 1, 0.22, 1);
        }

        .dd_heading {
            text-align: center;
            font-family: roboto thin;
        }

        .page-content {
            display: grid;
            grid-gap: 1rem;
            padding: 1rem;
            max-width: 1024px;
            margin: 0 auto;
            font-family: var(--font-sans);
        }

        @media (min-width: 600px) {
            .page-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 768px) {
            .heading {
                /*margin-top: -31px;*/
            }
        }

        @media (min-width: 800px) {
            .page-content {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .d_card {
            position: relative;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: end;
            /*align-items: flex-end;*/
            overflow: hidden;
            /*padding: 1rem;*/
            width: 100%;
            text-align: center;
            color: #000;
            background-color: #fff;
            /*box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);*/
            border-radius: 15px;
            border: 1px solid #eee;
            height: 100%;
        }

        @media (min-width: 600px) {
            .d_card {
                /*height: 390px;*/
            }
        }

        /*.d_card:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 110%;
        background-size: cover;
        background-position: 0 0;
        -webkit-transition: -webkit-transform calc(var(--d) * 1.5) var(--e);
        transition: -webkit-transform calc(var(--d) * 1.5) var(--e);
        transition: transform calc(var(--d) * 1.5) var(--e);
        transition: transform calc(var(--d) * 1.5) var(--e), -webkit-transform calc(var(--d) * 1.5) var(--e);
        pointer-events: none;
    }
    
    .d_card:after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 200%;
        pointer-events: none;
        background-image: linear-gradient( 45deg, black, #00000052);
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: -webkit-transform calc(var(--d) * 2) var(--e);
        transition: -webkit-transform calc(var(--d) * 2) var(--e);
        transition: transform calc(var(--d) * 2) var(--e);
        transition: transform calc(var(--d) * 2) var(--e), -webkit-transform calc(var(--d) * 2) var(--e);
    }*/

        .bg1:before {
            background-image: url(images/nft/1.webp);
        }

        .bg2:before {
            background-image: url(images/nft/2.webp);
        }

        .bg3:before {
            background-image: url(images/nft/3.webp);
        }

        .bg4:before {
            background-image: url(images/nft/4.webp);
        }

        .bg5:before {
            background-image: url(images/nft/5.webp);
        }

        .bg6:before {
            background-image: url(images/nft/6.webp);
        }

        .bg7:before {
            background-image: url(images/nft/26.webp);
        }

        .bg8:before {
            background-image: url(images/nft/8.webp);
        }

        .bg9:before {
            background-image: url(images/nft/9.webp);
        }

        .bg10:before {
            background-image: url(images/nft/28.webp);
        }

        .bg11:before {
            background-image: url(images/nft/27.webp);
        }

        .bg12:before {
            background-image: url(images/nft/12.webp);
        }

        .bg13:before {
            background-image: url(images/nft/13.webp);
        }

        .bg14:before {
            background-image: url(images/nft/14.webp);
        }

        .bg15:before {
            background-image: url(images/nft/15.webp);
        }

        .bg16:before {
            background-image: url(images/nft/16.webp);
        }

        .bg17:before {
            background-image: url(images/nft/17.webp);
        }

        .bg18:before {
            background-image: url(images/nft/18.webp);
        }

        .bg19:before {
            background-image: url(images/nft/19.webp);
        }

        .bg20:before {
            background-image: url(images/nft/20.webp);
        }

        .bg21:before {
            background-image: url(images/nft/21.webp);
        }

        .bg22:before {
            background-image: url(images/nft/22.webp);
        }

        .bg23:before {
            background-image: url(images/nft/23.webp);
        }

        .bg24:before {
            background-image: url(images/nft/24.webp);
        }

        .bg25:before {
            background-image: url(images/nft/25.webp);
        }

        .bg30:before {
            background-image: url(images/nft/30.webp);
        }

        .bg31:before {
            background-image: url(images/nft/33.webp);
        }

        .bg32:before {
            background-image: url(images/nft/32.webp);
        }

        .bg022:before {
            background-image: url(images/nft/pfp-bored.webp);
        }

        .bg023:before {
            background-image: url(images/nft/automotive.webp);
        }

        .bg040:before {
            background-image: url(images/nft/phygital-assets.webp);
        }

        .content {
            position: relative;
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -webkit-box-align: center;
            align-items: center;
            width: 100%;
            padding: 1rem;
            -webkit-transition: -webkit-transform var(--d) var(--e);
            transition: -webkit-transform var(--d) var(--e);
            transition: transform var(--d) var(--e);
            transition: transform var(--d) var(--e), -webkit-transform var(--d) var(--e);
            z-index: 1;
        }

        .content p {
            margin-bottom: 0;
        }

        .content>*+* {
            margin-top: 1rem;
        }

        .heading {
            font-size: 21px;
            font-weight: bold;
            line-height: 1.2;
            color: #000;
        }

        .data-content {
            /*  font-family: var(--font-serif); 
        font-size: 1.125rem;
        font-style: italic;
        line-height: 1.35;*/
        }

        @media (hover: hover) and (min-width: 600px) {
            .d_card:after {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            .content {
                /*-webkit-transform: translateY(calc(100% - 4.5rem));
            transform: translateY(calc(100% - 4.5rem));*/
            }

            .d_card:hover {
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
                background: #140050 !important;
                color: #fff !important;
            }

            .d_card:hover .heading {
                color: #fff !important;
            }

            /*.content > *:not(.heading) {
            opacity: 0;
            -webkit-transform: translateY(1rem);
            transform: translateY(1rem);
            -webkit-transition: opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
            transition: opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
            transition: transform var(--d) var(--e), opacity var(--d) var(--e);
            transition: transform var(--d) var(--e), opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
        }
        .d_card:hover,
        .d_card:focus-within {
            -webkit-box-align: center;
            align-items: center;
        }*/
            .d_card:hover:before,
            .d_card:focus-within:before {
                -webkit-transform: translateY(-4%);
                transform: translateY(-4%);
            }

            .d_card:hover:after,
            .d_card:focus-within:after {
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
            }

            .d_card:hover .content,
            .d_card:focus-within .content {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            .d_card:hover .content>*:not(.heading),
            .d_card:focus-within .content>*:not(.heading) {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
                -webkit-transition-delay: calc(var(--d) / 8);
                transition-delay: calc(var(--d) / 8);
            }

            .d_card:focus-within:before,
            .d_card:focus-within:after,
            .d_card:focus-within .content,
            .d_card:focus-within .content>*:not(.heading) {
                -webkit-transition-duration: 0s;
                transition-duration: 0s;
            }
        }
    </style>
    <section class="common_spacing gray_bg" id="get">
        <div class="container">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20">Tailored NFT Development Packages</h2>
                </div>
            </div>
            <div class="container-center">
                <div class="col-md-4 equalize">
                    <div class="d_card bg1">
                        <div class="content">
                            <h3 class="heading">NFT-Based ICO Development</h3>
                            <p class="data-content">For investors and entrepreneurs looking to leverage the power of NFTs, we offer a rapid fundraising solution through ICO launches. Our services facilitate the creation of NFT platforms, giving you a head start in capitalizing on this burgeoning market.</p>
                            <div class="text-center mt10"> <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>GET A QUOTE</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 equalize">
                    <div class="d_card bg2">
                        <div class="content">
                            <h3 class="heading">NFT Development: ICO + Marketplace</h3>
                            <p class="data-content">Combine ICO launches with the creation of a robust NFT marketplace. Our service provides immediate financial support through utility tokens, enabling you to build and scale your NFT marketplace efficiently.</p>
                            <div class="text-center mt10"> <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>Get
                                        Quote</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 equalize">
                    <div class="d_card bg3">
                        <div class="content">
                            <h3 class="heading">NFT Development: ICO + Marketplace + Governance Token</h3>
                            <p class="data-content">Enhance your platform’s community engagement by integrating governance tokens. This allows token holders to participate in decision-making processes, contributing to the evolution and empowerment of your marketplace.</p>
                            <div class="text-center mt10"> <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>Get
                                        Quote</span></a> </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 equalize">
                    <div class="d_card bg4">
                        <div class="content">
                            <h3 class="heading">NFT Development: ICO + Exchange Platform</h3>
                            <p class="data-content">Launch ICOs as utility tokens to fund the development of your NFT exchange platform. This package ensures liquidity for your NFTs and provides a dynamic trading environment for users.</p>
                            <div class="text-center mt10"> <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>Get
                                        Quote</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 equalize">
                    <div class="d_card bg5">
                        <div class="content">
                            <h3 class="heading">Custom NFT Development</h3>
                            <p class="data-content">Harness the full potential of NFTs with a customized marketplace tailored to your specific business needs. Our bespoke solutions adapt to the latest innovations, ensuring your NFT venture stands out in the digital landscape.
                            </p>
                            <div class="text-center mt10"> <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>Get
                                        Quote</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt40">
                <div class="cta_mine"> <a href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our
                            Experts</span></a> </div>
            </div>

        </div>
    </section>

    <div class="common_spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left text-center"> 
                    <img class="lazy rnd_img"
                        alt="Why Blockchain App Factory for NFT?"
                        title="Blockchain App Factory’s NFT Platform Development Service"
                        src="{{ asset('images/nft/01.png') }}" width="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                    <div class="section-title">
                        <h2 class="section-title underline mb20 font-wei">Enlist Expert NFT Developers for Your Web3 Vision</h2>
                    </div>
                    <p class="mt-30 text-justify">Renowned for our excellence in NFT development, we are committed to delivering top-tier services for clients aiming to make their mark in the Web3 space. Our skilled professionals are adept at elevating your project to the pinnacle of the market, utilizing cutting-edge technology and innovative business strategies.</p>
                    <p class="mt-30 text-justify">Eager to catapult your project into the spotlight? Tap into the expertise of our experienced NFT developers to gain an immediate competitive advantage. From initial brainstorming to the final rollout, our team stands ready to offer unparalleled support and drive exceptional results.</p>

                    <div class="">
                        <div class="cta_mine"> 
                            <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR NFT EXPERTS</span></a> 
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <section class="complimentary-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2 class="title-th sec_tit underline text-white">Why Partner with Us for Your NFT Development Needs?</h2>
                    </div>
                    <p class="text-white">At our company, we are dedicated to transforming groundbreaking concepts into reality with our advanced technology and expertise. As a premier NFT development firm, we enable projects of all sizes to shine in the competitive NFT arena by leveraging our extensive experience in creating high-impact NFT solutions.</p>
                </div>
                <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/demo/icon/experiences.png') }}" /></div>
                            <div class="contents">
                                <h3>Unmatched Experience</h3>
                                <p>We draw on years of industry knowledge to tailor a unique NFT venture that aligns perfectly with your vision.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/demo/icon/experts.png') }}" /></div>
                            <div class="contents">
                                <h3>Comprehensive Expertise</h3>
                                <p>Our team excels in every facet of NFT development, ensuring your project reaches new heights seamlessly and efficiently.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/demo/icon/customization.png') }}" /></div>
                            <div class="contents">
                                <h3>Tailored Solutions</h3>
                                <p>We provide full customization to make your NFT project stand out, ensuring it captures the market's attention with its uniqueness.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/demo/icon/security.png') }}" /></div>
                            <div class="contents">
                                <h3>Enhanced Security</h3>
                                <p>Our focus is on implementing robust security measures to safeguard your NFT project and maintain its integrity.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/demo/icon/pricing.png') }}" /></div>
                            <div class="contents">
                                <h3>Competitive Pricing</h3>
                                <p>We offer cost-effective pricing tailored to your specific needs, delivering exceptional quality without breaking the bank.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/demo/icon/support.png') }}" /></div>
                            <div class="contents">
                                <h3>24/7 Support</h3>
                                <p>Our dedicated team is available around the clock to support your NFT project, assisting whenever you need it.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <section class="welcome-content" style="background: #f2f2f2;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center">Innovative Token Standards We Leverage for Your NFT Development</h3>
                    <p class="text-center " style="font-size: 16px;">Embark on your NFT development journey with cutting-edge token standards that span across various blockchains, setting your project up for remarkable success. By adopting these advanced standards, your NFT venture will achieve unparalleled fluidity and security in the decentralized ecosystem.</p>
                </div>
                <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/home-new/eth.webp') }}"></div>
                            <p class=" ">ERC-721 </p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/home-new/eth.webp') }}"></div>
                            <p class=" ">ERC-1155</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/home-new/tron.webp') }}"></div>
                            <p class=" ">TRC-721</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/home-new/tron.webp') }}"></div>
                            <p class=" ">TRC-1155</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/home-new/binance-logo.webp') }}"></div>
                            <p class=" ">BEP-721</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/home-new/dgoods.webp') }}"></div>
                            <p class=" ">dGoods</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/home-new/nft.webp') }}"></div>
                            <p class=" ">SPL</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/home-new/tezos-2.webp') }}"></div>
                            <p class=" ">FA2</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="tech-stack">
        <div class="container">
            <div class="col-lg-12 center">
                <div class="section-title text-center m-b-30">
                    <h3 class="common_h3 sec-tit">Cutting-Edge Technology Stack for Superior NFT Development</h3>
                    <hr>
                    <p>Partner with our expert NFT development team to elevate your project with state-of-the-art technology solutions. We leverage premier tech tools to enhance your NFTs, ensuring they are equipped with the most advanced and effective features available.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked"
                    style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                    <li class="active"><a href="#vtab26" data-toggle="tab">
                            <p>Frameworks</p>
                        </a></li>
                    <li><a href="#vtab29" data-toggle="tab">
                            <p>Smart Contracts</p>
                        </a></li>
                    <li><a href="#vtab27" data-toggle="tab">
                            <p>Storage</p>
                        </a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="tab-content technology">
                    <div role="tabpanel" class="tab-pane in active" id="vtab26">
                        <div class="row">
                            <ul style="width: 100%">
                                <li><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-development/tech-stack/angular.webp') }}">
                                    <p>Angular JS</p>
                                </li>
                                <li><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-development/tech-stack/react.webp') }}">
                                    <p>React JS</p>
                                </li>
                                <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/web3.webp') }}">
                                    <p>Web3 JS</p>
                                </li>
                                <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/node-js_logo.webp') }}">
                                    <p>Node JS</p>
                                </li>
                                <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/js.webp') }}">
                                    <p>Express JS</p>
                                </li>
                            </ul style="width: 100%">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vtab29">
                        <div class="row">
                            <ul style="width: 100%">
                                <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/solidity.webp') }}">
                                    <p>Solidity </p>
                                </li>
                                <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/rust.webp') }}">
                                    <p>Rust </p>
                                </li>
                                <li><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-development/tech-stack/go-lang.webp') }}">
                                    <p>Go</p>
                                </li>
                                <li><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-development/tech-stack/python.webp') }}">
                                    <p>Python</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vtab27">
                        <div class="row">
                            <ul style="width: 100%">
                                <li><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-development/tech-stack/manogodb.png') }}">
                                    <p>MongoDB</p>
                                </li>
                                <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/ipfs.webp') }}">
                                    <p>IPFS</p>
                                </li>
                                <li><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-development/tech-stack/filecoin.webp') }}">
                                    <p>Filecoin</p>
                                </li>
                                <li><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-development/tech-stack/pinata.webp') }}">
                                    <p>Pinata</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navTabs = document.querySelectorAll('#nav-tabs-wrapper1 a[data-toggle="tab"]');
            const tabPanes = document.querySelectorAll('.tab-pane');
    
            navTabs.forEach(tab => {
                tab.addEventListener('click', function (e) {
                    e.preventDefault();
    
                    // Remove 'in active' from all tab panes and add 'fade'
                    tabPanes.forEach(pane => {
                        pane.classList.remove('in', 'active');
                        pane.classList.add('fade');
                    });
    
                    // Add 'in active' to the target pane
                    const targetPane = document.querySelector(this.getAttribute('href'));
                    if (targetPane) {
                        targetPane.classList.remove('fade');
                        targetPane.classList.add('in', 'active');
                    }
    
                    // Handle nav item active class
                    const navItems = document.querySelectorAll('#nav-tabs-wrapper1 li');
                    navItems.forEach(item => item.classList.remove('active'));
                    this.parentElement.classList.add('active');
                });
            });
        });
    </script>


    <style>
        .bg-dark-half-md {
            background: #140050;
            width: 100%;
            display: inline-block;
            padding: 100px 0;
        }

        .category-grid-style-01 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            background: #fff;
            -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
            box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
            border-radius: 5px;
        }

        .teck .category-grid-style-01 .category-item {
            padding: 30px;
            text-align: center;
            width: 25%;
            border-right: 1px solid #eee;
            border-bottom: 1px solid #eee;
            position: relative;
            cursor: pointer;
        }

        .teck .category-grid-style-01 .category-item:before {
            content: "";
            background: #fff;
            width: 110%;
            height: 110%;
            display: inline-block;
            position: absolute;
            left: -5%;
            top: -5%;
            z-index: 1;
            opacity: 0;
            -webkit-transform: scale(.96);
            transform: scale(.96);
            transition: all .3s ease-in-out;
        }

        .teck .category-grid-style-01 .category-item .category-icon {
            color: #333;
            font-size: 44px;
            line-height: 1;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }

        .category-grid-style-01 .category-item:hover:before {
            -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
            box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
            transition: all .3s ease-in-out;
        }
    </style>

    <style type="text/css">
        .category-item.aos-item:hover .text-center {
            position: relative;
            z-index: 99;
            color: #000 !important;
        }
    </style>

    {{-- simple-faqs.blade --}}
    @include('static.simple-faqs-section', [
        'faqs' => [
            [
                'ques' => "What is a non-fungible token (NFT)?",
                'ans' => "A non-fungible token (NFT) is a unique digital asset verified using blockchain technology, which represents ownership of a specific item or piece of content. Unlike fungible tokens, each NFT has distinct attributes and cannot be exchanged on a one-to-one basis."
            ],
            [
                'ques' => "How do fungible tokens differ from non-fungible tokens?",
                'ans' => "Fungible tokens, like cryptocurrencies, are interchangeable and have identical value. In contrast, non-fungible tokens are unique, with each one carrying distinct information that differentiates it from others, making them irreplaceable and specific to their assigned asset."
            ],
            [
                'ques' => "What does NFT mean in the context of cryptocurrency?",
                'ans' => "In the crypto world, an NFT (non-fungible token) is a type of digital asset that represents ownership and authenticity of a unique item, such as digital art, collectibles, or virtual real estate, all secured and verified through blockchain technology."
            ],
            [
                'ques' => "What are the costs involved in creating an NFT?",
                'ans' => "The cost of creating an NFT can vary widely based on factors like the platform used, the complexity of the NFT, and associated fees such as minting and transaction charges. Generally, costs include creation fees, gas fees, and potential marketing expenses."
            ],
            [
                'ques' => "What services are typically offered by an NFT development company?",
                'ans' => "NFT development companies usually provide a range of services, including custom NFT creation, marketplace development, smart contract integration, NFT minting, and consultation on NFT strategy and implementation."
            ],

            [
                'ques' => "How can I invest in NFTs?",
                'ans' => "To invest in NFTs, start by choosing a suitable marketplace where you can browse and purchase NFTs using cryptocurrency. Research the NFTs and the projects behind them, then buy tokens that align with your investment goals and interests."
            ],
            [
                'ques' => "What are the typical fees charged by NFT developers?",
                'ans' => "NFT developers' fees vary depending on the scope of the project, complexity, and development time. Costs generally cover the design, creation, and deployment of NFTs, with additional fees for ongoing support and customization."
            ],
        ],
    ])
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

</div>



@endsection