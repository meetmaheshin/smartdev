@extends('layouts.static')
    @section('title', 'Cryptocurrency Exchange Software')
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

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        letter-spacing: normal;
        line-height: normal;
    }

    @media (max-width: 500px) {
        .cta_mine {
            width: 85% !important;
            margin: 0 auto;
            display: block;
        }
    }

    .form-right input.submit_send {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #342101 !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: 700 !important;
        padding: 10px 0 !important
    }

    #pricing-section {
        padding: 60px 0
    }

    .pricing-box h1 {
        font-size: 60px
    }

    .pricing-foot a {
        border-radius: 0
    }

    .pricing-box .pricing-body {
        height: 500px;
        overflow-y: auto
    }

    .demo-details a {
        text-align: center;
        background: #fff;
        margin: 0 auto;
        display: block;
        width: 150px;
        color: #342101;
        font-weight: 700;
        text-transform: capitalize;
        padding: 10px
    }

    .demo-details a:hover {
        color: #342101 !important
    }

    .demo-details {
        background: #342101;
        padding: 20px;
        /*min-height: 260px*/
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
    }

    .coinexchange-section {
        display: inline-block;
        width: 100%;
        background: #f4f7fa
    }

    svg path {
        fill: #342101
    }

    p strong {
        color: #000
    }

    .padding-10 {
        background: 0 0
    }

    .timeline-center::before {
        background: #342101 !important
    }

    .flip-box {
        padding: 15px 10px;
        min-height: auto;
        margin-bottom: 35px;
        border-radius: 5px;
        border-bottom: 2px solid #34210166
    }

    .flip-tit {
        font-size: 16px;
        margin-bottom: 0;
        font-weight: 700;
        color: #000000;
    }

    .flip-icon-outer {
        padding: 0;
        width: 70px;
        height: 70px
    }

    @media (max-width:1199px) {
        .pricing-box h4 {
            font-size: 14px
        }

        .pricing-box .pricing-head h1 {
            font-size: 35px
        }
    }

    @media (max-width:991px) {
        .pricing-box .pricing-head h1 {
            font-size: 28px
        }
    }

    @media (max-width:767px) {
        .pricing-foot a {
            background: #342101;
            color: #fff
        }

        .explanation-section .left {
            width: 25%;
            padding: 0
        }

        .explanation-section .right {
            width: 70%
        }

        .pricing-box .pricing-body {
            height: auto;
            overflow: unset !important;
            position: initial !important
        }

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
            line-height: 21px;
            font-weight: bolder !important;
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

    .sec-tit h2 {
        display: inline-block;
    }

    .sec-tit {
        font-weight: 700;
        color: #000000;
    }

    .contentall a:hover {
        background: #342101 !important;
    }

    .common_h3.sec-tit {
        color: #2b2c2d;
        font-weight: 700;
        letter-spacing: 1.5px;
        font-size: 27.46px;
    }

    .contentall h1 {
        margin-bottom: 25px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 30px;
    }

    .contentall p {
        font-weight: 200;
        color: #ffffff;
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
        margin: 10px;
        text-transform: capitalize !important;
    }

    .banner {
        height: auto;
        background-image: url(images/cryptocurrency-exchange-software/banner-bg.jpg);
        background-size: cover;
        padding-top: 90px;
        padding-bottom: 0px
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none
    }

    .ban_form {
        background: #292929;
        box-shadow: 0 0 10px #fff;
        max-width: 500px;
        margin: 0 auto;
        padding: 30px 30px 10px;
        border-radius: 5px
    }

    .ban_form input#phone_banner {
        color: #000;
        width: 100%;
        border: none;
        box-shadow: none;
        background: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        padding-top: 10px;
        padding-bottom: 10px
    }

    .ban_form .form-group {
        margin-bottom: 20px
    }

    .ban_form label {
        display: none;
        font-size: 14px;
        margin-bottom: 7px;
        padding-left: 0 !important
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
        margin-bottom: 0
    }

    .banner-img {
        padding: 80px 0px;
    }

    .banner_content ul i {
        color: #16ce90;
        font-size: 20px;
        vertical-align: middle;
        margin-right: 8px
    }

    .banner_content .contentall {
        margin-top: 160px
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

    h4.sec_sub {
        font-size: 20px;
        font-weight: 700;
        color: #029870;
        margin-bottom: 7px;
        text-transform: uppercase
    }



    .uniq_features p b {
        font-size: 18px;
    }

    .contentall ul li img {
        vertical-align: middle;
        margin-right: 8px;
        width: 20px
    }

    .contentall ul {
        padding-left: 0;
        margin-bottom: 40px;
        margin-top: 0;
        max-width: 510px
    }

    .contentall ul li {
        color: #fff;
        font-weight: 700;
        font-size: 15px;
        border-bottom: 1px solid #666
    }

    .contentall ul li a {
        background: 0 0;
        padding: 0;
        margin-bottom: 0;
        padding-bottom: 15px;
        padding-top: 15px;
        display: block;
        cursor: pointer
    }

    .contentall ul i.hv {
        float: right;
        vertical-align: middle;
        font-size: 17px;
        position: relative;
        top: 8px;
        opacity: 0;
        transition: .5s
    }

    .explanation-section {
        width: 100%;
        max-width: 700px;
        margin: 0 auto;
        display: block;
        background: #fff;
        border: 2px solid #00ca996b;
        padding: 20px 20px 10px 20px
    }

    .explanation-section h4 {
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 10px;
        color: #000000;
    }

    .contentall ul li a:hover i.hv {
        opacity: 1
    }

    .serv_box {
        background: #fff;
        padding: 15px 10px 0 10px;
        text-align: center;
        border: 3px solid #eee;
        min-height: 375px;
        margin-bottom: 20px;
    }

    .pricing-box .pricing-foot a {
        display: block;
        padding: 10px 0;
        background: #342101;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all .4s ease-in-out;
        width: 150px;
        margin: 0 auto;
        border-radius: 2px
    }

    .pricing-foot {
        background: #eee;
        padding: 10px 0
    }

    .serv_box_ic {
        margin: 10px auto 10px;
        border-radius: 50%;
        background: #f5f5f5;
        height: 80px;
        width: 80px;
    }

    .serv_box_ic img {
        filter: brightness(0);
        height: 50px;
        margin-top: 12px;
    }

    .serv_box_cnt h3 {
        font-weight: 700;
        font-size: 18px
    }

    .serv_box_cnt:hover h3 {
        color: #ffffff !important;
    }

    .pricing-box .pricing-head {
        padding: 10px 10px 15px 10px
    }

    .pr_ccc {
        margin-top: 10px;
        position: relative;
        z-index: 1;
        padding-top: 7px;
        display: inline-block;
        padding: 0 55px 0;
        border-left: none;
        border-right: none
    }

    .pr_ccc h5 {
        font-weight: 700;
        font-size: 32px;
        margin-bottom: 0;
        line-height: 1.1;
        color: #00c0b0
    }

    .pr_ccc h6 {
        font-size: 14px;
        line-height: 1;
        padding-bottom: 10px
    }

    p.count-text {
        font-weight: 700;
        color: #000;
        font-size: 18px
    }

    .pr_ccc.pr_ccc_l {
        padding-top: 10px;
        padding-bottom: 10px
    }

    .pricing-box .pricing-head .bg-icon {
        opacity: .1
    }

    .intl-tel-input .country-list .country {
        padding: 5px 10px;
        background: 0 0;
        border: none;
        text-align: left;
        color: #000;
        font-size: 14px;
        font-weight: 400
    }

    .contentall ul li span {
        float: right;
        background: #342101;
        padding: 3px 10px 3px 15px;
        font-size: 14px;
        border-radius: 2px;
        margin-top: -3px
    }

    .contentall ul li span i {
        margin: 0;
        font-size: 13px;
        color: #fff;
        position: relative;
        top: 0;
        margin-left: 5px
    }

    @media only screen and (max-width:992px) {
        .contentall ul li span {
            background: #342101;
            padding: 3px 10px 3px 15px;
            font-size: 14px;
            border-radius: 2px;
            display: block;
            width: 125px;
            margin: 8px auto 10px;
            float: right
        }

        .contentall ul li {
            overflow: hidden;
            line-height: 1.9
        }
    }

    @media only screen and (max-width:768px) {
        .banner {
            padding-top: 30px
        }

        .pricing-box {
            margin-bottom: 30px
        }

        .banner_content h4 {
            font-size: 20px
        }

        .serv_box {
            padding: 20px 15px 21px 15px;
            min-height: auto
        }

        .ban_form {
            margin-top: 30px
        }

        .demo-details {
            background: #342101;
            padding: 32px 0 30px;
            min-height: auto
        }
    }

    @media only screen and (max-width:1400px) and (min-width:993px) {
        .exchange-section-new .flip-box {
            min-height: 190px
        }
    }

    .pricing-head h4 {
        font-weight: 700;
        line-height: 1.3
    }

    .view_demo_sec .text-bold {
        font-weight: 700;
        background: #2a2a2a;
        padding-bottom: 10px;
        padding-top: 10px;
        color: #fff;
        line-height: 1.3
    }

    .banner_form h2 {
        color: #fff;
        text-align: center;
        line-height: 1.4;
        font-weight: 700;
        font-size: 20px;
        background: #342101;
        border-radius: 4px;
        padding: 7px 10px
    }

    .lev_se .why-blockchain-sec {
        position: relative;
        z-index: 1
    }

    .pr_box {
        padding: 20%;
        position: relative;
        min-height: 178px;
        background: #342101;
        border-radius: 12px;
        margin-bottom: 20px;
        box-shadow: 0 0 5px 3px #34210175;
        text-align: center;
        justify-content: center;
    }

    .pr_box_ic h4 {
        font-weight: 900;
        font-size: 45px;
        line-height: 1;
        color: #47b474
    }

    .pr_box_ic {
        position: absolute
    }

    .pr_box_cnt p {
        margin-bottom: 0;
        font-size: 17px;
        line-height: 1.3;
        font-weight: 800
    }

    .pr_box_cnt {
        color: #fff;
        font-weight: 700;
        line-height: 1.6
    }

    .prom-icon {
        color: #342101;
        font-size: 35px;
        padding: 15px 0;
    }

    @media only screen and (max-width:768px) {
        .contentall h1 {
            margin-bottom: 10px;
            font-size: 30px;
            padding-top: 25px;
        }

        .row.pr_prr {
            max-width: 285px;
            width: 100%;
            margin: 0 auto
        }
    }

    .box_img {
        border: 3px solid #fff;
        box-shadow: 0 0 10px #ccc;
        margin-bottom: 20px;
        border-radius: 5px
    }

    ul.list-ico {
        padding: 0;
        margin-bottom: 10px;
    }

    .row.why_chose {
        max-width: 900px;
        margin: 0 auto;
    }

    .list-ico li {
        background: url(images/ico/big-tick.webp);
        background-position-x: 0%;
        background-position-y: 0%;
        background-repeat: repeat;
        background-size: auto auto;
        background-repeat: no-repeat;
        padding-left: 30px;
        margin-bottom: 10px;
        background-size: 20px;
        background-position: 0 4px;
    }

    .whitelable-section h2.common_h3 {
        font-size: 21px;
    }

    .serv_box_cnt h3 {
        font-size: 18px;
        line-height: 1.3;
        margin-bottom: 15px;
        color: #000000;
    }

    @media only screen and (min-width:993px) {
        .bti_exc li {
            width: 33%;
            float: left;
        }
    }

    @media only screen and (max-width:768px) {
        .common_h3.sec-tit {
            font-size: 23px;
        }
    }

    @media only screen and (max-width:1024px) {
        .serv_box {
            min-height: 563px;
        }
    }

    @media only screen and (max-width:768px) {
        .serv_box {
            min-height: 500px;
        }
    }

    @media only screen and (max-width:766px) {

        .serv_box,
        .services-block-three>.services-content {
            min-height: auto !important;
        }
    }


    .serv_box:hover {
        background: #342101 !important;
        color: #fff;
    }

    .serv_box:hover h4 {
        color: #fff;
    }

    .flip-box:hover {
        transition: 0.5s all ease-in-out;
        background: #342101;
        color: #fff;
    }

    .flip-box:hover h4 {
        color: #fff;
    }

    @media (max-width: 500px) {
        a.nectar-button {
            display: inline-block;
            width: 100% !important;
            margin-top: 10px;
        }
    }

    .exchange a:hover {
        border-radius: 10px;
    }

    @media only screen and (max-width: 425px) {
        .cls {
            text-align: center !important;
            margin: 10px auto !important;
        }

        .cls-1 {
            margin: 0 auto !important;
            text-align: center;
            width: 80%;
        }

        .cls-1 a.cls {
            display: block;
        }

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
        padding: 2px 15px 12px 50px;
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
        color: #222;
        line-height: 27px;
        border: 2px solid #ddd;
    }

    .services-block-three {
        margin-bottom: 30px;
    }

    .services-block-three>.services-content {
        display: block;
        border: 2px solid #d5d5d5;
        border-radius: 4px;
        text-align: center;
        background: #fff;
        padding: 20px;
        position: relative;
        margin-bottom: 30px;
        min-height: 335px;
        box-shadow: 0 0 15px rgb(68 75 109 / 30%);
    }

    .services-block-three>.services-content:before {
        display: block;
        content: "";
        width: 9%;
        height: 17%;
        position: absolute;
        bottom: -2px;
        right: -2px;
        border-bottom: 2px solid #df7444;
        border-right: 2px solid #df054496;
        transition: all 0.5s ease 0s;
        -webkit-transition: all 0.5s ease 0s;
    }

    .padding-15px-bottom {
        padding-bottom: 15px;
    }

    .services-block-three i {
        font-size: 32px;
    }

    .services-block-three h4 {
        color: #000000;
        font-size: 18px;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .services-block-three p {
        margin-bottom: 0;
        color: #757575;
    }

    .services-block-three>.services-content:before {
        display: block;
        content: "";
        width: 9%;
        height: 17%;
        position: absolute;
        bottom: -2px;
        right: -2px;
        border-bottom: 2px solid #4caf50;
        border-right: 2px solid #009688;
        transition: all 0.5s ease 0s;
        -webkit-transition: all 0.5s ease 0s;
    }

    .services-block-three>.services-content:after {
        display: block;
        content: "";
        width: 9%;
        height: 17%;
        position: absolute;
        top: -2px;
        left: -2px;
        border-top: 2px solid #4caf50;
        border-left: 2px solid #009688;
        transition: all 0.5s ease 0s;
        -webkit-transition: all 0.5s ease 0s;
    }

    .nec-btn {
        position: relative !important;
        color: #fff !important;
        border-radius: 30px !important;
        font-size: 11px;
        text-transform: uppercase !important;
        transform: scale(1.1, 1.1) !important;
        transition: all 0.3s ease-out 0s !important;
        background: #ffb32a !important;
        margin: 0 15px;
    }

    .nec-btn:hover {
        transform: scale(1, 1) !important;
        color: #fff !important;
        background: #00a9e2 !important;
    }

    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        margin-bottom: 15px !important;
        display: inline-block;
        margin-right: 15px !important;
        margin-left: 15px !important;
    }

    .bt-wid {
        width: 95% !important;
    }

    .contentall a,
    a.home-talk-experts {
        padding: 10px 20px !important;
    }

    .pro_line {
        position: relative;
    }

    .pro_line:after {
        content: '';
        display: block;
        clear: both;
    }

    .pro_line:before {
        content: '';
        height: 95%;
        width: 2px;
        border: 2px dashed #a3a3ad;
        transform: translateX(-50%);
        position: absolute;
        left: 50%;
        top: 30px;
    }

    .pro_line .feature_pro {
        width: 50%;
        padding: 0 35px 0 27px;
        margin: 0 10px 20px 0;
        float: left;
    }

    .pro_line .feature_pro-content {
        background: #fff;
        text-align: center;
        padding: 15px 115px 15px 15px;
        border-radius: 5px;
        border: 1px solid #eee;
        /*box-shadow: 0 0 10px -5px rgba(0, 0, 0, 0.6);*/
        display: block;
        position: relative;
    }

    .pro_line .feature_pro-content:hover {
        text-decoration: none;
    }

    .pro_line .feature_pro-content:before,
    .pro_line .feature_pro-content:after {
        content: "";
        background: linear-gradient(to bottom, #ffe8a2, #452403);
        width: 45px;
        height: 45px;
        transform: rotate(-45deg);
        position: absolute;
        top: 13px;
        right: -58px;
        z-index: 1;
        border-radius: 50%;
    }

    .pro_line .feature_pro-content:after {
        background: #fff;
        transform: rotate(-45deg) scale(0.6);
    }

    .pro_line .feature_pro-icon {
        font-size: 23px;
        text-align: center;
        line-height: 40px;
        height: 40px;
        width: 40px;
        transform: translateY(-50%) rotate(-45deg);
        position: absolute;
        top: 50%;
        left: -20px;
    }

    .pro_line .feature_pro-icon i {
        transform: rotate(45deg);
    }

    .pro_line .feature_pro-year {
        color: #fff;
        background: #342101;
        font-size: 32px;
        font-weight: 900;
        text-align: center;
        line-height: 60px;
        height: 100%;
        width: 100px;
        border-radius: 0 0 5px 0;
        position: absolute;
        right: 0;
        top: 0;
    }

    .pro_line .feature_pro-year:after {
        content: '';
        background: linear-gradient(to right bottom, #342101 49%, transparent 50%);
        height: 33px;
        width: 33px;
        position: absolute;
        right: -33px;
        top: 0;
    }

    .pro_line .title {
        color: #000;
        font-size: 20px;
        font-weight: 900;
        letter-spacing: 1px;
        margin: 0 0 7px 0;
        text-align: left;
    }

    .pro_line .description {
        color: #333;
        font-size: 15px;
        letter-spacing: 1px;
        margin: 0;
        text-align: left;
    }

    .pro_line .feature_pro:nth-child(even) {
        padding: 0 27px 0 35px;
        margin: 0 0 20px 10px;
        float: right;
    }

    .pro_line .feature_pro:nth-child(even) .feature_pro-content {
        padding: 15px 40px 15px 115px;
    }

    .pro_line .feature_pro:nth-child(even) .feature_pro-content:before,
    .pro_line .feature_pro:nth-child(even) .feature_pro-content:after {
        right: auto;
        left: -58px;
    }

    .pro_line .feature_pro:nth-child(even) .feature_pro-icon {
        left: auto;
        right: -20px;
    }

    .pro_line .feature_pro:nth-child(even) .feature_pro-year {
        right: auto;
        left: 0;
        border-radius: 0 0 0 5px;
    }

    .pro_line .feature_pro:nth-child(even) .feature_pro-year:after {
        transform: rotateY(180deg);
        right: auto;
        left: -33px;
    }

    .mt-40 {
        margin-top: 40px;
    }

    @media screen and (max-width:767px) {
        .pro_line:before {
            left: 17px;
            transform: translateX(0);
        }

        .pro_line .feature_pro,
        .pro_line .feature_pro:nth-child(even) {
            width: 100%;
            padding: 0 0 27px 40px;
            margin: 0 0 30px 0;
        }

        .pro_line .feature_pro-content,
        .pro_line .feature_pro:nth-child(even) .feature_pro-content {
            padding: 70px 15px 35px 15px;
        }

        .pro_line .feature_pro-content:before,
        .pro_line .feature_pro-content:after,
        .pro_line .feature_pro:nth-child(even) .feature_pro-content:before,
        .pro_line .feature_pro:nth-child(even) .feature_pro-content:after {
            height: 25px;
            width: 25px;
            top: 10px;
            right: auto;
            left: -34px;
        }

        .pro_line .feature_pro-icon,
        .pro_line .feature_pro:nth-child(even) .feature_pro-icon {
            transform: translateY(0) translateX(50%) rotate(-45deg);
            left: auto;
            right: 50%;
            top: auto;
            bottom: -20px;
        }

        .pro_line .feature_pro-year,
        .pro_line .feature_pro:nth-child(even) .feature_pro-year {
            width: 100%;
            height: 50px;
            line-height: 50px;
            border-radius: 0 5px 5px 5px;
            right: auto;
            left: 0;
        }

        .pro_line .feature_pro-year:after,
        .pro_line .feature_pro:nth-child(even) .feature_pro-year:after {
            height: 20px;
            width: 20px;
            transform: rotateY(180deg);
            right: auto;
            left: -20px;
        }
    }

    @media screen and (max-width:576px) {
        .pro_line .title {
            font-size: 18px;
        }
    }

    .txt_content {
        text-align: center !important;
        margin: 0 auto !important;
        font-weight: 700;
        font-size: 28px;
        padding: 10px;
        text-transform: capitalize;
    }

    .testimonial {
        margin: 0 20px 40px;
    }

    .testimonial .testimonial-content {
        padding: 35px 25px 35px 50px;
        margin-bottom: 35px;
        background: #fff;
        border: 1px solid #f0f0f0;
        position: relative;
    }

    .testimonial .testimonial-icon {
        width: 50px;
        height: 45px;
        background: #342101;
        text-align: center;
        font-size: 22px;
        color: #fff;
        line-height: 42px;
        position: absolute;
        top: 37px;
        left: -19px;
    }

    .testimonial .testimonial-icon:before {
        content: "";
        border-bottom: 16px solid #342101;
        border-left: 18px solid transparent;
        position: absolute;
        top: -16px;
        left: 1px;
    }

    .testimonial .description {
        font-size: 16px;
        color: #000000;
        line-height: 23px;
        margin: 0;
        text-align: center;
    }

    .testimonial {
        box-shadow: rgb(0 0 0 / 16%) 0px 3px 6px, rgb(0 0 0 / 23%) 0px 3px 6px;
    }

    .rounded-border {
        border-radius: 10px;
    }


    .cta-rewamped.ctaRewamped .container {
        background-image: linear-gradient(311deg, #00acdc 0%, #342101);
        border-radius: 14px;
    }

    .cta-rewamped-texter h4 {
        font-size: 26px;
        /* font-weight: 900; */
        font-style: normal;
        font-stretch: normal;
        line-height: 1.47;
        letter-spacing: normal;
        /* text-align: left; */
        color: #ffffff;
        margin: 0px;
    }

    .cta-sec {
        border-radius: 30px;
        border: 2px solid #ffffff;
        color: #2ab19e;
        background: #fff !important;
        font-weight: bold;
        transition: all 0.3s ease-out 0s !important;
    }

    .nectar-button:hover {
        color: #2ab19e !important;
        /*zoom: 0.98;*/
    }

    .row-flexible-center {
        padding: 3%;
    }

    .featured-icon-box.style3 .featured-desc:after {
        position: absolute;
        content: '';
        width: 0;
        height: 0;
        border-bottom: 34px solid #342101;
        border-left: 30px solid transparent;
        right: 0px;
        bottom: 0px;
        transition: .7s all ease;
    }

    .featured-icon-box.style3:after {
        content: '';
        position: absolute;
        height: 2px;
        left: 0px;
        right: auto;
        top: 0;
    }

    .featured-icon-box.style3:after,
    .featured-icon-box.style3:before {
        content: '' !important;
        position: absolute;
        height: 2px;
        left: 0px;
        width: 100px;
        right: auto;
        top: 0;
        transition: .7s all ease;
    }


    .featured-icon-box.style3 .featured-title h3 {
        font-size: 20px;
        line-height: normal;
        margin: 15px 0 10px;
    }

    .featured-icon-box.style3:before {
        background-color: #342101;
    }

    .featured-icon-box.style3 .cmt-icon.cmt-icon_element-size-lg {
        margin-bottom: 0px;
    }

    .featured-icon-box.style3:after,
    .featured-icon-box.style3:before {
        content: '' !important;
        position: absolute;
        height: 2px;
        left: 0px;
        width: 100px;
        right: auto;
        top: 0;
        transition: .7s all ease;
    }

    .featured-icon-box.style3 {
        padding: 25px;
        /*            min-height: 355px;*/
    }

    .featured-icon-box.style3:hover {
        border-left: 2px solid #342101;
        transition: .1s all ease;
    }

    .featured-icon-box.style3 {
        position: relative;
        margin: 15px 0;
        background-color: #fff;
    }


    .awesome-features-wrapper {
        border: 1px solid #bababa;
        padding-top: 40px;
        padding-bottom: 20px;
        min-height: 340px;
        transition: .3s;
        position: relative;
        margin-bottom: 30px;
        border-radius: 10px;
    }

    .awesome-features-wrapper::before {
        background: #342101;
        height: 20px;
        width: 3px;
        content: "";
        position: absolute;
        left: -2px;
        top: 65px;
    }

    .awesome-features-wrapper::after {
        background: #342101;
        height: 50px;
        width: 3px;
        content: "";
        position: absolute;
        left: -2px;
        top: 94px;
    }

    .awesome-features-icon-img {
        margin-bottom: 22px;
    }

    .awesome-features-icon-img img {
        width: 64px;
        height: 64px;
    }

    .awesome-features-text h4 {
        font-size: 20px;
        font-weight: 500;
        line-height: 1.3;
        margin-bottom: 18px;
    }

    .awesome-features-text p {
        margin-bottom: 0;
        padding: 0 41px;
    }

    .new-features .awesome-features-wrapper {
        padding: 30px 15px;
        position: relative;
        transition: 1s;
        border-radius: 7px;
        min-height: auto;
        margin: 25px;
        background: #342101;
        border: 1px solid #fff;
    }

    .new-features .awesome-features-wrapper::before {
        content: "";
        position: absolute;
        left: -10px;
        bottom: -10px;
        top: auto;
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
        left: auto;
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

    /*-- Client section --*/
    .category-grid-style-01 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        border-radius: 5px;
    }

    .teck .category-grid-style-01 .category-item {
        padding: 30px;
        text-align: center;
        width: 18%;
        border: 1px solid #000;
        border-radius: 10px;
        margin: 5px;
        position: relative;
        cursor: pointer;
        justify-content: center;
    }

    .teck .category-grid-style-01 .category-item:before {
        content: "";
        background: #fff;
        width: 80%;
        height: 80%;
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
        /*    opacity: 1;*/
        -webkit-transform: scale(1);
        transform: scale(1);
        transition: all .3s ease-in-out;
    }

    .uniq_features ul {
        padding-left: 0px;
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
        color: #875c00;
    }

    .uniq_features_items {
        background: #f2f2f2;
        border-radius: 7px;
        padding: 30px;
        margin-bottom: 30px;
    }

    .uniq_features_items .title {
        font-size: 22px;
        margin-bottom: 20px;
    }

    .uniq_features_items ul li:after {
        content: "\f058";
    }

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
        height: 60px !important;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }

    /*-- Client section --*/

    /*-- Travel App --*/
    .travel-app {
        padding: 60px 0px;
    }

    .travel-app-items,
    .travel-app-items1 {
        clear: both;
        min-height: 90px;
        margin-bottom: 20px;
        display: flex;
    }

    .travel-app-items p strong,
    .travel-app-items1 p strong {
        display: block;
        font-size: 20px;
        color: #342101;
        text-align: left;
    }

    .travel-app-items p {
        color: #000;
        text-align: justify;
        width: 80%;
    }

    .travel-app-items1 p {
        color: #000;
    }

    .travel-app-items .icons,
    .travel-app-items1 .icons {
        width: 80px;
        height: 80px;
        border: 4px solid #342101;
        float: left;
        margin-right: 20px;
        position: relative;
        padding: 13px;
        border-radius: 50%;
        margin-bottom: 30px;
    }

    /*.travel-app-items .icons:before{content: ''; position: absolute; width: 40px; height: 8px;background: #fff; z-index: 1; top: -8px; left: -8px;}*/
    /*.travel-app-items .icons img{-webkit-filter: brightness(0) invert(1);  filter: brightness(0) invert(1);}*/
    .travel-app-items1 .icons img {}

    .travel-app .app-screen1 {
        padding: 10px;
        max-width: 320px;
    }

    /*------------ Complimentary-Features Style -----------*/
    .complimentary-features {
        padding: 60px 0px;
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
        text-align: left;
        background: #725328;
        box-shadow: 0px 4px 34px rgb(255 193 0 / 25%);
        border-radius: 15px;
        /*border: 3px solid #fff;*/
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

    .complimentary-features ul li .content {
        background: transparent;
    }

    .complimentary-features ul li .content p {
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
        text-align: left;
        padding-bottom: 7px;
    }

    .complimentary-features ul li h3 {
        display: block;
        font-size: 20px;
        color: #fff;
        font-weight: bold;
        text-align: left;
        padding-bottom: 7px;
    }

    /*-- Technology --*/
    .technologies {
        background: #342101;
        padding: 50px 0;
    }

    .technologies ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .technologies ul li {
        width: 21%;
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

    /*-- Welcome Content --*/
    /*.welcome-content{background:#0d3881;}*/
    .welcome-content ul {
        display: flex;
        flex-wrap: wrap;
        margin: 0px;
        padding: 0px;
        color: #000;
        justify-content: center;
    }

    .welcome-content ul li {
        width: 30%;
        margin: 1%;
        display: grid;
        grid-template-columns: 80px auto;
        padding: 5px;
        align-items: center;
        text-align: left;
        border: 1px solid #725328;
    }

    .welcome-content ul li .icons {
        text-align: center;
        margin-right: 10px;
        padding-right: 10px;
        border-right: 1px solid #725328;
    }

    .welcome-content ul li p {
        line-height: 20px;
        padding: 0px 0px 0px 10px;
        margin: 0px;
    }


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
        background: #fff3de;
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

    .center-align ul li ul {
        padding: 0;
        border: 0;
        background: transparent;
    }

    .center-align ul li ul li {
        position: relative;
        padding-left: 25px;
    }

    .center-align ul li ul li:after {
        font-family: FontAwesome;
        top: 3px;
        right: 0;
        padding-right: 10px;
        content: "\f0a9";
        position: absolute;
        left: 0;
        font-size: 20px;
        color: #108ad6;
    }

    /*------------ Tech Stack -----------*/
    .tech-stack {
        padding: 60px 0px;
    }

    .tech-stack ul {
        display: flex;
        padding: 10px;
        justify-content: center;
        margin-bottom: 10px;
    }

    .tech-stack .nav-stacked>li {
        background: #ffb32a;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
        text-align: center;
        font-size: 20px;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(to right, #d48a03, #ffb32a, #d48a03);
    }

    .tech-stack .nav li a p {
        color: #4d2e02 !important;
        margin-bottom: 0;
        font-weight: bold;
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        border: 0;
        color: #fff;
    }

    /*.tech-stack ul img{height: 60px;}
.tech-stack h4{text-align: center; background: #234aa9; font-size: 20px; font-weight: bold; padding: 10px; margin-bottom: 0px; color: #fff;}
.technology ul{flex-wrap: wrap;}
.technology ul li{width: 18%; padding: 10px; margin: 1%; text-align: center; border: 1px solid #eee;}
*/
    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .banner_content .contentall {
            margin-top: 50px;
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

        .teck .category-grid-style-01 .category-item {
            width: 30%;
        }

        .welcome-content ul li {
            width: 100%;
        }

        .complimentary-features ul li {
            width: 100%;
        }
    }

    /*------------ Ipad View Style -----------*/
    @media only screen and (min-width: 768px) and (max-width: 899px) {

        /*.complimentary-features ul li{width: 100%;}*/
        .welcome-content ul li {
            width: 32%;
        }
    }
</style>

<div class="header-shadow" id="ico">
    <style type="text/css">
        .popup-ul {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
            margin: 0;
            width: 100%;
            border-radius: 7px;
            justify-content: center;
        }

        .popup-ul li {
            width: 26%;
            margin-bottom: 20px;
            justify-content: center;
            padding: 0px;
            text-align: center;
        }

        .popup-ul li p {
            color: #fff;
            margin-bottom: 0;
        }

        .popup-ul li img {
            width: 50px;
            height: 50px;
            border: 2px solid #eee;
            border-radius: 50%;
            background: #fff;
            padding: 5px
        }

        .login-popup .box-1 .form .form-control::placeholder {
            color: #fff;
        }

        .login-popup {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1099;
            background-color: rgba(0, 0, 0, .6);
            visibility: hidden;
            opacity: 0;
            transition: 1s
        }

        .login-popup.show {
            visibility: visible;
            opacity: 1
        }

        .login-popup .box-1 {
            background-color: #000a30;
            min-width: 870px !important;
            position: absolute;
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-wrap: wrap;
            opacity: 0;
            margin-left: 50px;
            transition: 1s
        }

        .login-popup.show .box-1 {
            opacity: 1;
            margin-left: 0
        }

        .login-popup .box-1 .img-area {
            flex: 0 0 50%;
            max-width: 50%;
            position: relative;
            overflow: hidden;
            padding: 50px 30px 0px;
            align-items: center;
            justify-content: center
        }

        .login-popup .box-1 .img-area h1 {
            font-size: 30px
        }

        .login-popup .box-1 .img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/marketing-form-bg.webp');
            background-size: cover;
            background-position: center;
            /*animation:7s linear infinite zoomInOut;*/
            z-index: -1;
            opacity: .2
        }

        @keyframes zoomInOut {

            0%,
            100% {
                transform: scale(1)
            }

            50% {
                transform: scale(1.1)
            }
        }

        .login-popup .box-1 .form {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 20px 30px 20px;
            /*background-color:#fff*/
        }

        .login-popup .box-1 .form h2 {
            color: #fff;
            font-size: 30px;
            margin: 0 0 30px
        }

        .login-popup .box-1 .form .form-control {
            height: 40px;
            margin-bottom: 10px;
            width: 100%;
            border: none;
            font-size: 15px;
            background: #ffffff36;
            box-shadow: 0px 0px 7px #0000004a;
            border-radius: 5px;
            color: #fff;
            padding: 10px 15px;
        }

        .login-popup .box-1 .form .btn:focus,
        .login-popup .box-1 .form .form-control:focus {
            outline: 0
        }

        .login-popup .box-1 .form label {
            font-size: 15px;
            color: #555
        }

        .login-popup .box-1 .form .btn {
            width: auto;
            background-color: #e91e63;
            height: 45px;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            text-transform: uppercase;
            color: #fff;
            cursor: pointer;
            line-height: 0
        }

        .login-popup .box-1 .form .close {
            position: absolute;
            right: 10px;
            top: 0;
            font-size: 30px;
            cursor: pointer;
            width: 30px;
            height: 30px;
            opacity: 1;
            color: #fff;
            background: #ffffff91;
            border-radius: 20px;
            text-align: center;
        }

        @media(max-width:767px) {
            .login-popup .box-1 {
                width: calc(100% - 30px);
                min-width: 90% !important;
            }

            .login-popup .box-1 .img-area {
                display: none
            }

            .login-popup .box-1 .form {
                flex: 0 0 100%;
                max-width: 100%
            }
        }

        .social {
            margin-top: 25px;
        }

        .social a {
            color: #fff;
        }

        .social .fa {
            width: 30px;
            height: 30px;
            font-size: 18px;
            color: #fff;
            background: #2db942;
            border-radius: 50%;
            text-align: center;
            line-height: 26px;
            padding: 2px;
        }

        .social .fa.fa-envelope {
            background: #0195d5 !important;
        }

        @media screen and (min-width:768px) and (max-width:900px) {
            .login-popup .box-1 {
                min-width: 90% !important;
            }
        }
    </style>

    <div class="login-popup">
        <div class="box-1">
            <div class="img"></div>
            <div class="img-area">



                <h3 class="text-white text-center">Reach the Global Web3 Market Effortlessly!</h3>
                <br>
                <p class="text-white text-center" style="margin-bottom: 20px; font-size:16px;">The essence of promotions
                    in today’s Web3 world is unparalleled. We emphasize this by being the marketing partner for these
                    esteemed Web3 brands:</p>

                <ul class="popup-ul">
                    <li><img src="images/nftm/sui.webp">
                        <p>Sui</p>
                    </li>
                    <li><img src="images/nftm/ton.webp">
                        <p>TON</p>
                    </li>
                    <li><img src="images/nftm/aptos.webp">
                        <p>Aptos</p>
                    </li>
                    <li><img src="images/nftm/sandbox.webp">
                        <p>Sandbox</p>
                    </li>
                    <li><img src="images/nftm/coindcx.webp">
                        <p>CoinDCX</p>
                    </li>
                    <li><img src="images/nftm/coinswitch.webp">
                        <p>CoinSwitch</p>
                    </li>
                </ul>

            </div>
            <div class="form">
                <div class="close">&times;</div>
                <h3 class="text-white text-center">Do you want your Web3 project to garner global recognition?</h3><br>
                <form id="mailForm" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="Name" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Mobile" id="mobile" name="mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message" id="message" name="message" class="form-control"
                            style="height:75px;"></textarea>
                    </div>
                    <button type="button" onclick="if (!window.__cfRLUnblockHandlers) return false; return send_mail()"
                        class="btn" data-cf-modified-f92bafa81b7e2bf792a9e6ab-="">Submit</button>
                </form>

                <div class="social">
                    <a rel="nofollow" rel="noopener" aria-label="Whatsapp" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calendar" aria-hidden="true"
                            title="Calendly"></i> Schedule A Meeting &nbsp;</a>

                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#a2cbccc4cde2c0cecdc1c9c1cac3cbccc3d2d2c4c3c1d6cdd0db8cc1cdcf"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>

            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
        const loginPopup = document.querySelector(".login-popup");
const close = document.querySelector(".close");
window.addEventListener("load",function(){
showPopup();
// setTimeout(function(){
//   loginPopup.classList.add("show");
// },5000)

})
function showPopup(){
    const timeLimit = 5 // seconds;
    let i=0;
    const timer = setInterval(function(){
     i++;
     if(i == timeLimit){
      clearInterval(timer);
      loginPopup.classList.add("show");
     } 
     console.log(i)
    },4000);
}

function send_mail(){
var name = $("#name").val();
var email = $("#email").val();
var mobile = $("#mobile").val();
var message = $("#message").val();
if (name === '') {
  alert("Please enter name");
} else if (email === '') {
  alert("Please enter email");
} else if (mobile === '') {
  alert("Please enter mobile no");
} else if (message === '') {
  alert("Please enter message");
} else {
  $.ajax({
    url: "marketmail.php",
    type: "POST",
    data: $("#mailForm").serialize() ,
    success: function(result){
        console.log(result);
        if(result == 1)
        {
        window.location.href="success";
        return false;
        }
        else
        {
            alert("Something went wrong, please try again later.");
            return false;
        }
        $(".ajax-loader").hide();
    } ,
    error:function ()
    {
        window.location.href="success";
    }
  });
}
}
close.addEventListener("click",function(){
loginPopup.classList.remove("show");
})
    </script>
    <div class="main">
        <div class="banner" style="background-image: linear-gradient(blue, lightblue);">
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="contentall">

                                <div class="ban_tirt">
                                    {{-- <span style="font-weight: normal; font-size: 19px;">Build an All-Around Crypto
                                        Exchange App with Our
                                    </span> --}}
                                    <h1 itemprop="name">Create a Comprehensive Crypto Trading Platform with Our Expertise</h1>
                                </div>
                                <p itemprop="text">Transform your vision into reality with our top-tier crypto trading platform solutions. Partner with our cryptocurrency exchange development experts to establish a cutting-edge platform that stands out in the global crypto market.</p>
                                <div class="cls-1">
                                    <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn" id="cyz"
                                        style="border-radius: 30px !important; text-transform: capitalize !important;">Get in Touch with Our Specialists</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="banner-img">
                                <img src="{{ asset('images/cryptocurrency-exchange-software/banner-img2.webp') }}"
                                    alt="Cryptocurrency Exchange Development Company">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---section1--->


        <style>
            .owl-carouselfour img {
                width: 150px !important;
                height: auto;
                margin: 0 auto;
                box-shadow: 0 0 20px 3px #00000026;
                border-radius: 9px;
                padding: 13px;
            }

            .owl-carouselfour .owl-stage {
                min-height: 200px !important;
                margin: 26px auto !important;
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
                padding: 18px 0px;
                text-align: center;
            }

            .projectFactsWrap .item:nth-child(1) {
                background: #342101;
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
                font-size: 40px;
                padding: 0;
                font-weight: bold;
                margin-bottom: 2rem;
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

            @media (max-width: 786px) {
                .stats {
                    min-height: auto !important;
                    border: 1px solid #865c01;
                }

                .projectFactsWrap .item {
                    flex: 0 0 50%;
                }
            }

            section#counter-stats {
                /* display: flex; */
                justify-content: center;
                margin-top: 0;
                /* padding: 3rem 0; */
                background: rgb(26 26 26);
                color: #fff;
            }

            .stats {
                text-align: center;
                font-size: 28px;
                font-weight: 700;
                padding: 1rem 0;

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
                background: #553905;
            }

            #counter-stats .stats:nth-child(2) {
                background: #875c00;
            }

            #counter-stats .stats:nth-child(3) {
                background: #553905;
            }

            #counter-stats .stats:nth-child(4) {
                background: #875c00;
            }


            /* AUTHOR LINK */
        </style>

        <style type="text/css">
            .client-list {
                display: flex;
                flex-wrap: wrap;
                width: 100%;
                padding: 0;
                margin: 0;
                justify-content: center;
                align-items: center;
            }

            .client-list li {
                width: 10%;
                margin: 25px 1%;
                padding: 0 10px;
            }

            .client-list li img {
                filter: grayscale(1);
            }

            @media (min-width: 320px) and (max-width: 768px) {
                .travel-app-items .icons {
                    margin-bottom: 0px;
                }

                .client-list li {
                    width: 31%;
                    margin: 15px 1%;
                }
            }
        </style>

        <section class="common_spacing uniq_features">
            <div class="container">
                <div class="row">
                    <div class="text-center" style="width: 100%">
                        <h2 class="sec-tit underline" >Cutting-Edge Crypto Exchange Solutions: Leading You to Industry Success</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p class="text-center">With our extensive experience in delivering robust crypto exchange solutions, we’ve perfected a proven strategy that ensures your vision achieves the success it deserves. Whether you are launching a startup, represent a FinTech firm, or are part of a banking institution, our expert team makes implementing powerful crypto exchange solutions a seamless process.</p>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul>
                                <li>Decade-Long Expertise in Blockchain Technology</li>
                                <li>Over 400 Successful Blockchain Projects</li>
                                <li>Comprehensive Development of Crypto Solutions</li>
                                <li>Tailored Design and Development Focused on Clients</li>
                                <li>User-Centric Exchange Platforms</li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul>
                                <li>Prompt Software Delivery</li>
                                <li>Fully Customizable Options</li>
                                <li>Cutting-Edge Technology Integration</li>
                                <li>Flawless Post-Deployment Support</li>
                                <li>Commitment to Uncompromising Quality and Transparency</li>
                            </ul>
                        </div>
                        <div class="contentall" align="center">
                            <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
                                style="border-radius: 30px !important; text-transform:none !important;">Speak with Our Experts</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="padding: 60px 0px; background: #342101;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2 class="title-th sec_tit underline text-white">Comprehensive Features Embedded in Our Cryptocurrency Exchange Platforms</h2>
                        </div>
                        <p class="text-white">Elevate your users' experience with our state-of-the-art cryptocurrency exchange platforms. Our solutions integrate a wide range of features, from essential functionalities to advanced and premium capabilities, ensuring every need is met with precision.</p>
                    </div>
                    <div class="tech-stack">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked"
                                style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                                <li class="active"><a href="#vtab28" data-toggle="tab">
                                        <p>Core Features</p>
                                    </a></li>
                                <li><a href="#vtab26" data-toggle="tab">
                                        <p>Advanced Features</p>
                                    </a></li>
                                <li><a href="#vtab29" data-toggle="tab">
                                        <p>Premium Features</p>
                                    </a></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tab-content technology">
                                <div role="tabpanel" class="tab-pane in active" id="vtab28">
                                    <div class="row">

                                        <div align="center" class="welcome-content">
                                            <ul>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/user.png') }}">
                                                    </div>
                                                    <p class="white">User Dashboard</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/admin-panel.png') }}">
                                                    </div>
                                                    <p class="white">Admin Dashboard</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/mobile-game.png') }}">
                                                    </div>
                                                    <p class="white">Web and Mobile App</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/crypto-exchange.png') }}">
                                                    </div>
                                                    <p class="white">Crypto Swapping</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/trading.png') }}">
                                                    </div>
                                                    <p class="white">Easy Trading Interface</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/matching.webp') }}">
                                                    </div>
                                                    <p class="white">Seamless Order Matching</p>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="vtab26">
                                    <div class="row">

                                        <div align="center" class="welcome-content">
                                            <ul>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/chat.png') }}">
                                                    </div>
                                                    <p class="white">In-App Chat Assistance</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/application.png') }}">
                                                    </div>
                                                    <p class="white">Multilingual Application</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/payment-gateways.png') }}">
                                                    </div>
                                                    <p class="white">Multi-Payment Gateway</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/liquidity.webp') }}">
                                                    </div>
                                                    <p class="white">Liquidity Manager Bot</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/utility.png') }}">
                                                    </div>
                                                    <p class="white">Utility Native Token</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/airdrops.webp') }}">
                                                    </div>
                                                    <p class="white">Airdrop Provisions</p>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="vtab29">
                                    <div class="row">

                                        <div align="center" class="welcome-content">
                                            <ul>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/trading.png') }}">
                                                    </div>
                                                    <p class="white">Various Trading Types</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/bot.png') }}">
                                                    </div>
                                                    <p class="white">Crypto Arbitrage Bot</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/launchpads.webp') }}">
                                                    </div>
                                                    <p class="white">Crypto Launchpad</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/time.png') }}">
                                                    </div>
                                                    <p class="white">Real-time Price Alerts</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/payment-gateways.png') }}">
                                                    </div>
                                                    <p class="white">Merchant Gateways</p>
                                                </li>
                                                <li>
                                                    <div class="icons"><img class="lazy"
                                                            src="{{ asset('images/cryptocurrency-exchange-software/icons/user.png') }}">
                                                    </div>
                                                    <p class="white">VIP User Accounts</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!---section2--->

        @include('static.six-card-section', [
            'title' => 'Essential Security Measures Enhancing Our Crypto Exchange Platform', 
            'desc' => 'As a premier provider of crypto exchange solutions, we prioritize security as a fundamental aspect due to the persistent threat landscape in the digital world. Our team equips your exchange with cutting-edge security features to ensure a safe and secure experience for all users.',
            'cards' => [
                    [
                        'title' => 'Comprehensive Cyber Security Assessment',
                        'desc' => "We perform an exhaustive cyber security evaluation to ensure the implementation of critical safeguards, including SSL encryption, cookie protection, multi-factor authentication (MFA), anti-phishing measures, device management, strict transport security, sender policy framework (SPF), anti-money laundering (AML) controls, and web application firewalls (WAF).",
                        'image' => 'cryptocurrency-exchange-software/icons/scalable.webp'
                    ],
                    [
                        'title' => 'Rigorous Penetration Testing',
                        'desc' => "Our expert security team conducts thorough penetration tests to identify and address potential vulnerabilities in the exchange platform. This meticulous process ensures that any security gaps are closed before the final deployment of the platform's technical architecture.",
                        'image' => "cryptocurrency-exchange-software/icons/security.png"
                    ],
                    [
                        'title' => 'Intensive Bug Bounty Program',
                        'desc' => "We deploy an extensive bug bounty program during the beta phase of the crypto exchange platform. This proactive approach allows our skilled testers to uncover and rectify issues that might elude internal reviews, ensuring the platform’s robustness and reliability.",
                        'image' => 'cryptocurrency-exchange-software/icons/crypto.png'
                    ],
            ],
        ])
        <!---section2--->


        <section class="uniq_features gray_bg common_spacing">
            <div class="container">
                <div class="row">


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                        <img src="{{ asset('images/cryptocurrency-exchange-software/crypto-exchange-hero.webp') }}"
                            style="max-height: 325px;">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2 class="sec-tit underline">Cutting-Edge Innovations in Crypto Exchange Development</h4>
                            <p><strong>AI-Driven Crypto Exchange Solutions</strong></p>
                        <p>Embrace the transformative power of artificial intelligence in your crypto exchange development. By integrating AI into trading algorithms, security protocols, user verification, and customer support, you can elevate the trading experience to unprecedented levels. These advanced AI applications offer a competitive edge, attracting users who demand seamless, secure, and intuitive trading platforms.</p>

                        <div class="contentall">
                            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"
                                href="{{ url('consultation') }}"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
                                <span>Book a Consultation</span></a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <div class="common_spacing gray_bg new-features" style="background: #342101;">
            <div class="container">
                <div class=" ">
                    <h2 class="sec_tit underline text-center text-white">Premium Features of Our Cryptocurrency Exchange Platform</h2>

                </div>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-wallet"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Advanced Wallet and Fund Management</strong>Empower users with a sophisticated dashboard that enables comprehensive management of their wallets and assets directly within the exchange. This interface delivers essential data, ensuring users have complete oversight of their financial activity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-area-chart"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Diverse Trading Pairs</strong>Facilitate a dynamic trading environment by offering a wide range of cryptocurrency pairs. Continuously update your offerings to include emerging digital assets, ensuring active trading opportunities at all times.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-link"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Comprehensive Multi-Chain Support</strong>Enhance accessibility by supporting multiple blockchain networks. This feature allows users from various blockchain ecosystems to leverage the full potential of their assets across the platform.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-money"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Effortless Deposit and Withdrawal</strong>Streamline the process of depositing and withdrawing cryptocurrencies, catering to users interested in short-term trading and ensuring a hassle-free experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-sitemap"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Varied Order Types</strong>Incorporate multiple order types, including market orders and limit orders, to provide traders with flexible investment strategies and enhance their trading potential.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-shopping-cart"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Efficient Order and Trade Management</strong>Enable administrators to efficiently process and oversee trading orders, maintaining the platform’s integrity and ensuring peak performance and operational efficiency.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-database"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Enhanced Liquidity through Providers</strong>Increase liquidity by integrating with leading liquidity providers (LPs), ensuring that your platform consistently offers ample liquidity across a range of tokens.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-random"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong
                                            style="display:block; font-size: 20px; padding-bottom: 5px;">Staking and Lending Opportunities</strong>Introduce features for staking and lending, allowing users to generate passive income from their holdings even when not actively trading.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-cog"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Peer-to-Peer Trading Integration</strong>Facilitate peer-to-peer transactions with integrated escrow services, promoting secure, decentralized exchanges between users and enhancing the trading experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="common_spacing uniq_features">
            <div class="container">
                <div class="row">
                    <div class="text-center" style="width: 100%">
                        <h2 class="sec-tit underline"> Crafting Comprehensive Crypto Exchange Solutions </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p class="text-center">Beyond traditional crypto exchanges, we offer cutting-edge platforms brimming with advanced features and sophisticated capabilities. Discover bespoke exchange applications tailored to meet your specific needs without compromise.
                        </p>

                        <div class="clearfix"></div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-md-12">
                            <div class="uniq_features_items">
                                <h3 class="title">Web and Mobile Crypto Exchange Platforms </h3>
                                <ul>
                                    <li>Bitcoin Exchange</li>
                                    <li>Binance-Style Exchange</li>
                                    <li>Smart Contract-Driven Solutions</li>
                                    <li>Total Scalability and Customization</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-md-12">
                            <div class="uniq_features_items">
                                <h3 class="title">OTC Trading Application Development </h3>
                                <ul>
                                    <li>Comprehensive Portfolio Management</li>
                                    <li>Built-In Arbitrage Solutions</li>
                                    <li>Extensive Liquidity Pool</li>
                                    <li>Automated Order Execution</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-md-12">
                            <div class="uniq_features_items">
                                <h3 class="title">Diverse Crypto Trading Facilities</h3>
                                <ul>
                                    <li>Crypto Wallet Development and Integration</li>
                                    <li>Web, Mobile, Desktop, and Hardware Wallets</li>
                                    <li>Multi-Currency Management</li>
                                    <li>Multi-Signature (MultiSig) Support</li>
                                    <li>NFC Transaction Integration</li>
                                    <li>Automated Clearing House Interface</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-md-12">
                            <div class="uniq_features_items">
                                <h3 class="title">Custom Trading Strategies </h3>
                                <ul>
                                    <li>Crypto Payment Gateway Solutions</li>
                                    <li>Multi-Cryptocurrency Compatibility</li>
                                    <li>Instant Transaction Confirmation</li>
                                    <li>Low Transaction Fees</li>
                                    <li>Chargeback and Fraud Prevention</li>
                                    <li>Streamlined Setup and Onboarding</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 col-lg-offset-3 col-md-offset-3">
                            <div class="uniq_features_items">
                                <h3 class="title">White-Label Fundraising Platform Development</h3>
                                <ul>
                                    <li>Tokenization of Various Assets</li>
                                    <li>Complete Ecosystem for Crowdfunding</li>
                                    <li>Automated Verification Systems</li>
                                    <li>Integrated Exchange Solutions</li>
                                    <li>Hot Wallet Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




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

            .content .heading {
                color: #fff;
                padding-bottom: 10px;
            }

            .d_card {
                position: relative;
                display: -webkit-box;
                display: flex;
                -webkit-box-align: end;
                /*align-items: flex-end;*/
                overflow: hidden;
                padding: 1rem;
                width: 100%;
                text-align: center;
                color: #fff;
                background-color: #725328;
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
                /*display: flex;*/
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
                /*-webkit-box-align: center;*/
                align-items: center;
                width: 100%;
                /*padding: 1rem;*/
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
                /*margin-top: 1rem;*/
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
                    background: #342101 !important;
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
        </style>

        <section class="common_spacing" id="get" style="border-top: 1px solid #eee;">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h2 class="section-title underline mb20">Discover Our Range of Cryptocurrency Exchange Software Solutions</h2>
                        <p>Our expert development team is equipped to create cutting-edge crypto exchange platforms tailored to your needs, ensuring robust security, integrity, and safety.</p>
                    </div>
                </div>
                <div class="container-center">
                    <div class="col-md-4 equalize">
                        <div class="d_card bg1">
                            <div class="content">
                                <h3 class="heading"> Centralized Crypto Exchange</h3>
                                <p class="data-content">We provide reliable and secure solutions for high-volume transactions, ensuring smooth and protected exchanges with centralized authority.</p>
                                <div class="text-center mt10"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 equalize">
                        <div class="d_card bg2">
                            <div class="content">
                                <h3 class="heading">Decentralized Crypto Exchange</h3>
                                <p class="data-content">Championing decentralized exchange principles, our solutions enhance transparency and eliminate intermediaries, offering a more direct trading experience.</p>
                                <div class="text-center mt10"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 equalize">
                        <div class="d_card bg3">
                            <div class="content">
                                <h3 class="heading">Hybrid Crypto Exchange</h3>
                                <p class="data-content">Leverage the best of both centralized and decentralized worlds with our advanced hybrid solutions. This approach minimizes cyber attack risks and reduces transaction costs.</p>
                                <div class="text-center mt10"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 equalize">
                        <div class="d_card bg4">
                            <div class="content">
                                <h3 class="heading">Peer-to-Peer Crypto Exchange</h3>
                                <p class="data-content">Develop a fully intermediary-free exchange with our peer-to-peer solutions, designed to enhance security through advanced protective mechanisms.
                                </p>
                                <div class="text-center mt10"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 equalize">
                        <div class="d_card bg5">
                            <div class="content">
                                <h3 class="heading">Margin Trading Exchange</h3>
                                <p class="data-content">Integrate dynamic crypto margin trading capabilities to attract a diverse user base, with solutions designed to optimize returns and trading flexibility.</p>
                                <div class="text-center mt10"></div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 equalize">
                        <div class="d_card bg6">
                            <div class="content">
                                <h3 class="heading">Crypto Derivatives Exchange</h3>
                                <p class="data-content">Experience secure and seamless trading of crypto derivatives on our state-of-the-art platform, equipped with future-ready features for advanced trading.</p>
                                <div class="text-center mt10"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 equalize">
                        <div class="d_card bg7">
                            <div class="content">
                                <h3 class="heading">Over-The-Counter Trading Platform</h3>
                                <p class="data-content">We offer a dedicated OTC trading platform for large-scale cryptocurrency transactions, enabling direct trades without exchange oversight to benefit all users.
                                </p>
                                <div class="text-center mt10"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 equalize">
                        <div class="d_card bg8">
                            <div class="content">
                                <h3 class="heading">Security Token Exchange </h3>
                                <p class="data-content">Elevate your business with our high-liquidity solutions, featuring smart contracts and a robust trading engine to ensure performance and clarity.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 equalize">
                        <div class="d_card bg9">
                            <div class="content">
                                <h3 class="heading">Non-Fungible Token Exchange</h3>
                                <p class="data-content">Boost your business with advanced NFT trading solutions, utilizing blockchain technology to offer superior trading experiences.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 equalize">
                        <div class="d_card bg10">
                            <div class="content">
                                <h3 class="heading">One-Page Cryptocurrency Exchange </h3>
                                <p class="data-content">Achieve fast deployment with our one-page crypto exchanges, designed for high accessibility and user-friendly interfaces for optimal performance.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 equalize">
                        <div class="d_card bg11">
                            <div class="content">
                                <h3 class="heading">Escrow Exchange</h3>
                                <p class="data-content">benefits from rapid trading with multi-currency support and unlimited token compatibility, all safeguarded by our secure escrow protocol for enhanced safety.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="contentall" align="center">
                    <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                        target="_blank" href="{{ url('consultation') }}"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
                        <span>Book a Consultation </span></a>
                </div>
            </div>
        </section>
        <!---section3--->

        <!---section4--->
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-header text-center mb30">
                        <div class="common_h3 sec-tit">
                            <h3 class="ml10 mr10 sec-tit underline"
                                style="text-transform: capitalize; font-size: 27px;">Our Innovative Approach to Developing Crypto Exchange Platforms</h3>
                        </div>
                        <p>We boast a team of top-tier blockchain developers dedicated to creating advanced cryptocurrency exchange platforms poised for the future.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pro_line">
                            <div class="feature_pro">
                                <div class="feature_pro-content">
                                    <div class="feature_pro-icon"></div> <span class="feature_pro-year">01</span>
                                    <p class="title"> Requirement Analysis and Technical Consulting</p>
                                    <p class="description">- Conceptualize and gather requirements<br>
                                        - Understand business objectives thoroughlys<br>
                                        - Conduct in-depth analysis<br>
                                        - Design solution architecture<br>
                                        - Define smart contract logic
                                    </p>
                                </div>
                            </div>
                            <div class="feature_pro">
                                <div class="feature_pro-content">
                                    <div class="feature_pro-icon"></div> <span class="feature_pro-year">02</span>
                                    <p class="title"> Graphic and Technical Design </p>
                                    <p class="description">- Plan essential functionalities <br>
                                        - Craft a user-focused design<br>
                                        - Outline development phases <br>
                                        - Design for cross-platform interaction<br>
                                        - Consult on cloud storage solutions </p>
                                </div>
                            </div>
                            <div class="feature_pro">
                                <div class="feature_pro-content">
                                    <div class="feature_pro-icon"></div> <span class="feature_pro-year">03</span>
                                    <p class="title"> Smart Contract Integration </p>
                                    <p class="description">- Review platform specifications<br>
                                        - Implement logic and functionalities <br>
                                        - Execute and manage smart contracts <br>
                                        - Optimize performance</p>
                                </div>
                            </div>
                            <div class="feature_pro">
                                <div class="feature_pro-content">
                                    <div class="feature_pro-icon"></div> <span class="feature_pro-year">04</span>
                                    <p class="title">Comprehensive QA Testing </p>
                                    <p class="description">- Perform both automated and manual tests<br>
                                        - Test integrations and functionalities <br>
                                        - Assess user interface <br>
                                        - Conduct software audits and report findings </p>
                                </div>
                            </div>
                            <div class="feature_pro">
                                <div class="feature_pro-content">
                                    <div class="feature_pro-icon"> </div> <span class="feature_pro-year">05</span>
                                    <p class="title">Upgrades and Ongoing Support </p>
                                    <p class="description">- Implement updates based on feedback <br>
                                        - Integrate additional services <br>
                                        - Configure and connect new exchanges <br>
                                    </p>
                                </div>
                            </div>
                            <div class="feature_pro">
                                <div class="feature_pro-content">
                                    <div class="feature_pro-icon"></div> <span class="feature_pro-year">06</span>
                                    <p class="title">UI/UX Design </p>
                                    <p class="description">- Create responsive, mobile-optimized interfaces<br>
                                        - Develop APIs and gateway solutions <br>
                                        - Design custom transaction states <br>
                                        - Continuously update UI
                                     </p>
                                </div>
                            </div>
                            <div class="feature_pro">
                                <div class="feature_pro-content">
                                    <div class="feature_pro-icon"></div> <span class="feature_pro-year">07</span>
                                    <p class="title">Product Deployment </p>
                                    <p class="description">- Deploy and validate on testnet<br>
                                        - Launch on the mainnet <br>
                                        - Integrate market analysis tools<br>
                                        - Implement reporting tools
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---section4--->


        <div class="technologies">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center text-white">Introducing a Cutting-Edge Cryptocurrency Exchange App Inspired by Leading Platforms</h3>
                    <p class="text-center white">We offer advanced cryptocurrency exchange applications modeled after renowned platforms, equipped with a suite of features to ensure flawless operation. Develop and launch exchange platforms that not only embody your brand's identity but also provide an intuitive and accessible experience for every user.</p>
                    <ul>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/binance_logo.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/coinbase.webp') }}">
                            <p class="white"> </p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/kraken.png') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/Gemini.png') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/okx.png') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/bybit.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/KuCoin.png') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/bitstamp.webp') }}">
                            <p class="white"></p>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="text-center cta_mine txt"> 
                            <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk
                                with our Experts</span></a> </div>
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
                padding: 60px 0;
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
                background: #725328 !important;
            }

            .data table td,
            .data table th {
                padding: 10px;
            }
        </style>

        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <h3 class="sec_tit underline text-center" style="width: 100%">Elevate Your Competitive Advantage with Our Advanced Crypto Exchange Software</h3>
                </div>
                <p class="text-center" style="color: #000;">Our cryptocurrency exchange software is equipped with cutting-edge features that grant you comprehensive control and visibility over platform operations.</p>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/cryptocurrency-exchange-software/icons/kyc.png') }}" alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>KYC/AML Verification </h3>
                                    </div>
                                    <div class="featured-desc">Ensure secure identity verification through detailed checks including photos, email, banking details, and official IDs. Effectively filter out suspicious users who fail to meet KYC standards.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                            <div class="featured-icon-box  text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/cryptocurrency-exchange-software/icons/security.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Multi-Layered Security</h3>
                                    </div>
                                    <div class="featured-desc">Leverage our expert-crafted security solutions, featuring SSL encryption, two-factor authentication, secure user access, strengthened login protocols, and automated withdrawal limits.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/cryptocurrency-exchange-software/icons/payment-gateways.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Payment Gateway Integration</h3>
                                    </div>
                                    <div class="featured-desc">Seamlessly integrates our payment gateway to facilitate swift transactions, ensuring smooth customer deposits and withdrawals for an uninterrupted user experience.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/cryptocurrency-exchange-software/icons/trading.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Robust Trading Engine </h3>
                                    </div>
                                    <div class="featured-desc">Empower your exchange with a high-performance trading engine designed to handle commissions and trade pricing with efficiency. Our developers create a solid and logical infrastructure.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/cryptocurrency-exchange-software/icons/admin-panel.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Advanced Admin Panel</h3>
                                    </div>
                                    <div class="featured-desc">Equip administrators with a comprehensive control panel to manage fees, digital currencies, and funds, while delivering top-notch customer service to enhance user satisfaction.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/cryptocurrency-exchange-software/icons/login.png') }}" alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Enhanced Security with Jail Login</h3>
                                    </div>
                                    <div class="featured-desc">Boost platform security with our Jail Login feature, which limits failed login attempts within a specified timeframe, safeguarding against unauthorized access.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/cryptocurrency-exchange-software/icons/support.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Extensive Asset Support</h3>
                                    </div>
                                    <div class="featured-desc">Expand your offerings with support for a diverse range of cryptocurrencies, providing users with a broad selection to optimize their investment opportunities.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/cryptocurrency-exchange-software/icons/analytics.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Real-Time Analytics</h3>
                                    </div>
                                    <div class="featured-desc">offers users real-time market data, dynamic charts, and detailed analytics, empowering them to make informed decisions and enrich their trading experience.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <style type="text/css">
            .icon-text-1 h3 {
                font-size: 20px;
                color: #000;
                font-weight: 700
            }

            .icon-text-1 p {
                margin: .6rem 0 0
            }

            .icon-text-1 img {
                padding: 5px
            }

            @keyframes spin {
                0% {
                    transform: rotateY(0)
                }

                50% {
                    transform: rotateY(180deg)
                }

                100% {
                    transform: rotateY(360deg)
                }
            }

            .icon-text-1 {
                display: flex;
                align-items: center;
                background: #f4f4f4;
                padding: 15px;
                border-left: 5px solid #342101
            }

            .icon-text-1 .icon-text-icon {
                width: 80px;
                height: 80px;
                border-radius: 12px;
                margin-bottom: 20px;
                line-height: 80px;
                text-align: center
            }

            .icon-text-1 img {
                width: 64px;
                height: 64px;
                /*animation:5s infinite spin*/
            }

            .icon_content {
                padding-left: 20px;
                min-height: 100px;
                width: 80%
            }

            .icon-text-1 h3 {
                font-size: 18px;
                color: #000;
                font-weight: 700
            }

            .icon-text-1 p {
                margin: .6rem 0 0
            }
        </style>
        <section class="common_spacing">
            <div class="container">
                <div class="row mt20">
                    <div class="section-title text-center">
                        <div class="sec_tit mb20">
                            <h2 class="section-title underline mb20">Experience the Advantages of Our Cutting-Edge Crypto Exchange Development Services</h2>
                        </div>
                        <p>We elevate your business with our state-of-the-art crypto exchange development solutions, delivering exceptional benefits to both you and your users.</p>
                    </div>
                </div>
                <div class="row mt20 container-center">
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-exchange-software/icons/customization.webp') }}"></div>
                            <div class="icon_content">
                                <h3>Tailored Customization </h3>
                                <p class="c-grey">Launch pioneering exchanges efficiently with our adaptable solutions, designed to fit various business models and drive startup success within budget constraints.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-exchange-software/icons/staking.webp') }}"></div>
                            <div class="icon_content">
                                <h3>Staking Opportunities </h3>
                                <p class="c-grey">Facilitate fund deposits through staking, offering investors a way to earn interest similar to traditional banking, thus enhancing the growth potential of their investments.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-exchange-software/icons/offer.webp') }}"></div>
                            <div class="icon_content">
                                <h3>Pre-Configured Solutions</h3>
                                <p class="c-grey">Utilize our pre-configured solutions with ready-to-use scripts, allowing for a unique market entry and a distinctive competitive edge.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-exchange-software/icons/security.png') }}"></div>
                            <div class="icon_content">
                                <h3>Advanced Security Features</h3>
                                <p class="c-grey">Protect user assets with our sophisticated security measures, including robust encryption, security protocols, and authentication systems that enhance platform reliability.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-exchange-software/icons/global.png') }}"></div>
                            <div class="icon_content">
                                <h3>Global Reach</h3>
                                <p class="c-grey">Overcome geographical limitations and access a worldwide audience. Our services enable seamless transactions on a global scale, catering to the international crypto community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-exchange-software/icons/assets.png') }}"></div>
                            <div class="icon_content">
                                <h3>Broad Asset Selection</h3>
                                <p class="c-grey">Expand investment options with extensive cryptocurrency support, empowering users to trade and explore a diverse range of digital assets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-exchange-software/icons/growth.webp') }}"></div>
                            <div class="icon_content">
                                <h3>Scalable Infrastructure</h3>
                                <p class="c-grey">Prepare your exchange for future growth with our scalable solutions, designed to accommodate increasing user volumes and adapt to evolving market demands.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-exchange-software/icons/support.png') }}"></div>
                            <div class="icon_content">
                                <h3>Exceptional Customer Support</h3>
                                <p class="c-grey">Build user confidence with our proactive customer support. We provide timely and effective assistance to address concerns and enhance overall user satisfaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="travel-app" style="background: #f7faff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h3> <strong>Maximize Your Revenue with Our Cutting-Edge Crypto Exchange Software Modules</strong></h3>
                        <hr>
                        <p>As a leading crypto exchange software development firm, we provide a range of revenue-generating modules designed to unlock and capitalize on investment opportunities.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/cryptocurrency-exchange-software/icons/transactions.png') }}"></div>
                        <p><strong>Transaction Fees</strong>Impose nominal fees on transactions for buyers and sellers, ensuring both validation and sustainability of the exchange platform while generating consistent revenue.</p>
                    </div>
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/cryptocurrency-exchange-software/icons/staking.webp') }}"></div>
                        <p><strong>Crypto Staking Opportunities </strong>Diversify your revenue channels through cryptocurrency staking. Users can lock their funds in smart contracts to earn interest, creating a profitable avenue for both parties.</p>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/cryptocurrency-exchange-software/icons/wallet.png') }}"></div>
                        <p><strong>Digital Wallet Integration</strong>Streamlines crypto trading and secure asset storage with our advanced wallet solutions. These features simplify transactions and enhance user convenience.</p>
                    </div>
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/cryptocurrency-exchange-software/icons/listing.png') }}"></div>
                        <p><strong>Listing Fees</strong>Boost your platform’s credibility and attract traders by listing tokens on our exchange. Our listing fees offer a straightforward way to enhance revenue and increase platform appeal.</p>
                    </div>

                </div>

            </div>
        </div>
    </section>




    <style type="text/css">
        .step-points {
            padding-left: 0
        }

        .step-points li {
            /*display: grid;
        grid-template-columns: 60px auto;*/
            margin-bottom: 30px;
        }

        .step-points li span {
            width: 60px;
            height: 60px;
            background: #342101;
            border-radius: 50%;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .step-points li span img {
            /*width: 14px;
        height: 14px;*/
            padding: 10px;
            filter: brightness(0) invert(1);
        }

        .step-points-content {
            /*margin-left: 10px;*/
        }

        .step-points-content h4 {
            padding: 10px 0 5px;
        }

        .step-points li h3 {
            color: #000000;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .step-points li p {
            margin-bottom: 0;
            text-align: left;

        }

        .step-points li span {
            animation-name: fadeIn;
            animation-duration: 3s;
            animation-iteration-count: 1;
        }

        .step-points-content {
            animation-name: fadeIn;
            animation-duration: 3s;
            animation-iteration-count: 1;
        }

        .step-points .fa {
            font-size: 40px;
            color: #725328;
        }

        .fa {
            display: inline-block;
            /* font: normal normal normal 14px/1 FontAwesome; */
            /* font-size: 32px; */
            color: #fff;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    <section class="common_spacing" style="background: #342101;">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h3 class="section-title underline mb20 text-white">Why Our Crypto Exchange Development Company is a Proven Success</h3>
                    </div>
                    <p class="text-white" style="font-size: 16px;">Partnering with us guarantees the creation of a dependable platform backed by extensive real-world experience and future-forward solutions.</p>
                </div>
            </div>
            <div class="row mt40">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb10">
                    <ul class="step-points">
                        <li>
                            <img class="lazy" src="{{ asset('images/cryptocurrency-exchange-software/icons/team.png') }}" style="width: 60px">
                            <div class="step-points-content">
                                <h4 class="text-white">Skilled Development Team</h4>
                                <p class="text-white">Our expert developers, equipped with deep industry knowledge and technical prowess, tackle complex projects with ease, consistently achieving outstanding results.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb10">
                    <ul class="step-points">
                        <li>
                            <img class="lazy"
                                src="{{ asset('images/cryptocurrency-exchange-software/icons/cost-effective.webp') }}" style="width: 60px">
                            <div class="step-points-content">
                                <h4 class="text-white">Affordable Innovation</h4>
                                <p class="text-white">We deliver cutting-edge crypto exchange solutions that are both cost-efficient and highly effective, providing exceptional value without compromising on quality.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb10">
                    <ul class="step-points">
                        <li>
                            <img class="lazy" src="{{ asset('images/cryptocurrency-exchange-software/icons/time.png') }}" style="width: 60px">
                            <div class="step-points-content">
                                <h4 class="text-white">Rapid Deployment </h4>
                                <p class="text-white">Our professionals ensure a swift and seamless launch of your platform, minimizing delays and accelerating the development process for timely delivery.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb10">
                    <ul class="step-points">
                        <li>
                            <img class="lazy" src="{{ asset('images/cryptocurrency-exchange-software/icons/security.png') }}" style="width: 60px">
                            <div class="step-points-content">
                                <h4 class="text-white">Top-Tier Security</h4>
                                <p class="text-white">We emphasize comprehensive security in our blockchain solutions, incorporating advanced features to protect all transactions and ensure platform integrity.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="contentall" align="center" style="width: 100%">
                    <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
                        style="border-radius: 30px !important; text-transform:none !important;">Talk to Our Experts</a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="space-pt bg-dark-half-md tech-padding teck" style="padding-top:60px;">
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="section-title text-center ">
                    <h3 class="common_h3 ">A Diverse Range of Platform Solutions<br> You Can utilize With Our
                        Cryptocurrency Exchange Platform Development </h3>
                    <hr>
                    <p>We utilize a wide spectrum of blockchain networks to offer you high-tech crypto exchange platform
                        development.</p>
                </div>
            </div>
            <div class="row mt20">
                <div class="col-sm-12">
                    <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/1.webp" alt="Bitcoin"> </div> <a href="#"
                                class="category-title" alt>Bitcoin</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/2.webp" alt="Litecoin"> </div> <a href="#"
                                class="category-title" alt>Litecoin</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/6.webp" alt="Ripple"> </div> <a href="#"
                                class="category-title" alt>Ripple</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/tether.webp" alt="Tether"> </div> <a href="#"
                                class="category-title" alt>Tether</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/cardano.webp" alt="Cardano"> </div> <a href="#"
                                class="category-title" alt>Cardano</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/bitcash.webp" alt="Bitcoin Cash"> </div> <a href="#"
                                class="category-title" alt>Bitcoin Cash</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/chainlink.webp" alt="Chainlink"> </div> <a href="#"
                                class="category-title" alt>Chainlink</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/binance-coin.webp" alt="Binance Coin"> </div> <a href="#"
                                class="category-title" alt>Binance Coin</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/steller.webp" alt="Stellar"> </div> <a href="#"
                                class="category-title" alt>Stellar </a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/coin.webp" alt="USD Coin"> </div> <a href="#"
                                class="category-title" alt>USD Coin</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/coinsv.webp" alt="Bitcoin SV"> </div> <a href="#"
                                class="category-title" alt>Bitcoin SV</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/eos.webp" alt="EOS"> </div> <a href="#"
                                class="category-title" alt>EOS</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/mono.webp" alt="Monero"> </div> <a href="#"
                                class="category-title" alt>Monero</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/tron.webp" alt="TRON"> </div> <a href="#"
                                class="category-title" alt>TRON</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/nem.webp" alt="NEM"> </div> <a href="#"
                                class="category-title" alt>NEM</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/tezo.webp" alt="Tezos"> </div> <a href="#"
                                class="category-title" alt>Tezos</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/cry.webp" alt="Crypto.com Coin"> </div> <a href="#"
                                class="category-title" alt>Crypto.com Coin</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/vechain.webp" alt="VeChain"> </div> <a href="#"
                                class="category-title" alt>VeChain</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/unis.webp" alt="Uniswap"> </div> <a href="#"
                                class="category-title" alt>Uniswap</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    data-src="images/logos/aave.webp" alt="Aave"> </div> <a href="#"
                                class="category-title" alt>Aave</a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section> --}}
    <div class="mt-5"></div>
    @include('static.crypto-coins', array(
        'title' => 'Explore a Broad Array of Platform Solutions with Our Crypto Exchange Development', 
        'desc' => 'We leverage an extensive range of blockchain networks to deliver cutting-edge cryptocurrency exchange platform development tailored to your needs.',
        'cta_1' => '',
        'cta_2' => ''
    ))

    {{-- <div class="common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <div class="section-header text-center">
                    <h4 class="sec-tit underline">FAQ</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="faq-content">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#faq1">
                                            <span>How long does it take to Build a Cryptocurrency Exchange?</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq1" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body"> The time to build a cryptocurrency exchange depends
                                        entirely upon the type of exchange you want and your customization preferences.
                                        However, opting for tailor-made, white label cryptocurrency exchange software
                                        will save a lot of time compared to developing from the ground up. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq2">
                                            <span>How much does it cost to develop White Label Crypto Exchange?</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq2" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body"> Again, the cost to build a white label crypto exchange
                                        totally depends upon your requirements, customization preferences, and the
                                        features that you decide. But, compared to gathering equipment and developing
                                        from scratch, white label solutions are cost-effective. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq3">
                                            <span>Is It Possible to Launch Your Crypto Exchange Platform in a Short
                                                Time? </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq3" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">Yes, it is possible to launch your crypto exchange platform
                                        in a short time using our ready-made, customizable solutions. Our pre-made
                                        solution is easy to work on, with sufficient room to add features that can be
                                        integrated in a short time at economical costs.</div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq4">
                                            <span>Who offers the best crypto exchange solutions?</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq4" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body"> Blockchain App Factory offers the best crypto exchange
                                        solutions. With a team of massively experienced developers, you are assured that
                                        the solutions are feature-rich, robust, highly secure, and scalable and
                                        available to hit the market in no time at cost-friendly prices. </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq5">
                                            <span>What is Cryptocurrency Exchange Development?</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq5" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body"> Cryptocurrency exchange development helps entrepreneurs to
                                        build cryptocurrency exchange platforms from scratch. The process consists of
                                        teams for design, development, testing, legalities, and marketing to ensure the
                                        platform meets all user-end, business, and regulatory requirements to enable
                                        seamless operations. </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq6">
                                            <span>What are the Benefits of Cryptocurrency Exchange Development?</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq6" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body">Cryptocurrency exchange development offers several benefits
                                        to businesses. The main ones include enabling faster cross-country transactions,
                                        tighter security against hacks, and opportunities for tapping into other
                                        business models. Additional benefits can be gained based on how you frame your
                                        exchange.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq7">
                                            <span>How Much Does It Cost to Develop a Crypto Exchange?</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq7" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body"> The cost of cryptocurrency exchange development depends on
                                        how you plan your business. The user features and back-end protocols determine
                                        how much you spend developing the crypto exchange. It also depends on the extent
                                        of your marketing campaigns. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq8">
                                            <span>How Can I Build a Cryptocurrency Exchange?</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq8" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body"> You can start building a cryptocurrency exchange by
                                        planning for it. This is followed by the core cryptocurrency exchange
                                        development process that includes prototyping, designing, developing, testing,
                                        and launching. To make the process easier, you can collaborate with our company.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq9">
                                            <span>What Makes Crypto Exchange a Good Business Idea?</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq9" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body"> Cryptocurrency exchange development is a good business idea
                                        since the platform’s model is based on daily user activity. Hence, generating
                                        income through various means and establishing yourself in the crypto space
                                        becomes easier. Blockchain App Factory can help you build featureful crypto
                                        exchange applications. </div>
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
                'ques' => 'What is the typical timeframe for building a cryptocurrency exchange?',
                'ans' => "The development time for a cryptocurrency exchange varies depending on complexity and features, but it generally ranges from a few months to over a year."
            ],
            [
                'ques' => 'What is the cost of developing a White Label Crypto Exchange?',
                'ans' => "The cost of creating a White Label Crypto Exchange depends on customization and features but usually starts from a few thousand dollars and can go up to several hundred thousand."
            ],
            [
                'ques' => 'Can you launch a crypto exchange platform quickly?',
                'ans' => "Yes, with pre-built solutions or White Label platforms, a crypto exchange can be launched relatively quickly, often within a few weeks to a couple of months."
            ],
            [
                'ques' => 'Who provides the best crypto exchange solutions?',
                'ans' => "The best solutions come from established development firms with proven track records, extensive expertise, and customizable offerings tailored to your specific needs."
            ],
            [
                'ques' => 'What does cryptocurrency exchange development entail?',
                'ans' => "Cryptocurrency exchange development involves designing, building, and deploying a platform where users can trade digital assets securely and efficiently."
            ],
            [
                'ques' => 'What are the advantages of developing a cryptocurrency exchange?',
                'ans' => "Benefits include high revenue potential, the ability to cater to a growing market, and opportunities for innovation and differentiation in the crypto space."
            ],
            [
                'ques' => 'What is the typical cost to develop a crypto exchange?',
                'ans' => "Costs vary widely based on the platform’s features and complexity but generally range from tens of thousands to several hundred thousand dollars."
            ],
            [
                'ques' => 'How can I create a cryptocurrency exchange?',
                'ans' => "Building a cryptocurrency exchange involves choosing a development approach (custom or White Label), defining requirements, and working with experts to design, develop, and launch the platform."
            ],
            [
                'ques' => 'What makes a crypto exchange a viable business opportunity?',
                'ans' => "A crypto exchange is a strong business idea due to the growing demand for digital asset trading, high potential profit margins, and the increasing mainstream adoption of cryptocurrencies."
            ],
        ],
    ])
</div>

<style type="text/css">
    .formdiv .form-left .form-group:last-child {
        margin-bottom: 0
    }

    .common_newsletter .form-right textarea {
        height: 240px
    }

    .form-right input.common_send_btn {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #342101 !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: 700 !important;
        padding: 10px 0 !important
    }

    body input.common_send_btn.my_send {
        margin-top: 41px !important
    }

    .timeline-center::before {
        background: #f2f2f2
    }

    .thumb {
        position: relative
    }

    .photo,
    .play {
        position: absolute;
        width: 40px;
        height: 28px;
        left: 45%;
        top: 40%
    }

    .thumb:hover .photo,
    .thumb:hover .play {
        background-position: 0 -252px
    }

    .play {
        -webkit-animation: 1s ease-in-out infinite breathing;
        animation: 1s ease-in-out infinite breathing;
        -webkit-font-smoothing: antialiased;
        background: url(images/play.webp) 0 -252px no-repeat
    }

    .contact-inner-1 {
        padding-top: 70px;
        padding-bottom: 100px
    }

    @-webkit-keyframes breathing {

        0%,
        60% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5)
        }

        25% {
            -webkit-transform: scale(2);
            transform: scale(2)
        }

        100% {
            -webkit-transform: scale(1.45);
            transform: scale(1.45)
        }
    }

    @keyframes breathing {

        0%,
        60% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5)
        }

        25% {
            -webkit-transform: scale(2);
            transform: scale(2)
        }

        100% {
            -webkit-transform: scale(1.45);
            transform: scale(1.45)
        }
    }

    @media (max-width:991px) {
        .height_row {
            margin-top: 10px
        }
    }

    @media (max-width:767px) {
        .formdiv .form-left .form-group:last-child {
            margin-bottom: 15px
        }

        .stats {
            min-height: 140px
        }
    }
</style>

<script src="js/vendor.js" type="f92bafa81b7e2bf792a9e6ab-text/javascript"></script>
<script src="js/plugins.js" type="f92bafa81b7e2bf792a9e6ab-text/javascript"></script>
<script src="js/main.js" type="f92bafa81b7e2bf792a9e6ab-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="f92bafa81b7e2bf792a9e6ab-text/javascript"></script>
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
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
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
    $('.home-talk-experts').click(function() {
    $('html, body').animate({
        scrollTop: $('#newsletter-form-sec').offset().top
    }, 2000);
});
</script>
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
    var url = window.location.href;
$('#url').val(url);
</script>
<!-- <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> -->
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
    $(".pricing-body").mCustomScrollbar({
    theme: "minimal"
});
</script>
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
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

<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
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

    e
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
                    data-cf-modified-f92bafa81b7e2bf792a9e6ab-="">
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/cryptocurrency-exchange-software">
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
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
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
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
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
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
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

<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
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



<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
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
<script type="f92bafa81b7e2bf792a9e6ab-text/javascript">
    $(".crypto-popup").click(function(e) {
    $('crypto-popup').addClass('fixedPosition full-width');
    $(".login-popup").addClass('show');
    e.stopPropagation();
});
</script>
<!-- Button Lightbox Script - End -->

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="f92bafa81b7e2bf792a9e6ab-|49" defer></script>
</div>

@endsection