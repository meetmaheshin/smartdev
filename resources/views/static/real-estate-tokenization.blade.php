@extends('layouts.static')
    @section('title', 'Real State Tokenization')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    .gray_bg,
    .gray-bg {
        background: #f5f1ff;
    }

    .sec_tit,
    .sec_tit h2 {
        /*font-size: 25px !important;*/
        font-weight: 700;
        color: #000000;
        line-height: 1.4;
        text-transform: capitalize;
        letter-spacing: normal;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        line-height: normal;
        letter-spacing: normal;
    }

    .triangle-section ul li {
        display: inline-block;
        width: auto
    }

    .triangle-section ul li>span {
        position: relative;
        width: 100px;
        height: 100px;
        display: inline-block
    }

    .triangle-section ul li>span:before {
        position: absolute;
        content: "";
        background: #744aed;
        transform: rotate(45deg);
        border-radius: 0;
        width: 100%;
        height: 100%;
        left: 0;
        top: -30px
    }

    .triangle-section ul li a {
        display: inline-block;
        width: 100%;
        margin-top: 20px
    }

    .triangle-section ul li>span svg {
        position: relative;
        z-index: 2
    }

    .triangle-section ul {
        margin-top: 70px;
        display: inline-block;
        width: 100%
    }

    #our_services .feature-box-3 {
        min-height: 250px
    }

    .feature-box-4 p.feature-desc {
        margin-bottom: 0
    }

    #our_services {
        width: 100%
    }

    .ban_tirt {
        padding-top: 130px;
    }

    .feature-box-3 {
        border: 0;
        border-top: 3px solid #744aed;
    }

    .feature-box-3 .icon {
        background: #f5f1ff;
        border: 3px solid #744aed;
        line-height: normal;
    }

    .feature-box-4 .feature-title {
        font-size: 14px;
    }

    .featured-icon-box.style3 .featured-desc:after {
        position: absolute;
        content: '';
        width: 0;
        height: 0;
        border-bottom: 34px solid #7c55ed;
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
        line-height: 30px;
    }

    .featured-icon-box.style3:before {
        background-color: #7c55ed;
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
        border-left: 2px solid #47b475;
        transition: .1s all ease;
    }

    .featured-icon-box.style3 {
        position: relative;
        margin: 15px 0;
        background-color: #fff;
    }

    .indus-box {
        min-height: auto;
    }

    .perfect-script-items1 {
        -webkit-box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        padding: 25px 15px 10px;
        border-radius: 16px;
        background-color: #fff;
        -webkit-transition: 0.3s;
        transition: 0.3s;
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
        background: #6644ca;
        /* border: 3px solid #292c97; */
        margin-left: -15px;
        text-align: center;
    }

    .perfect-script-items1 .icon img {
        width: 45px;
        margin-top: -8px;
    }

    .perfect-script-items1 .content {
        display: block;
        float: left;
        width: 80%;
        padding-left: 15px;
    }

    .perfect-script-items1 .content p strong {
        display: block;
    }

    .perfect-script-items1 strong {
        color: #180a52;
        font-size: 18px;
    }

    .perfect-script-items1 p {
        text-align: left;
        margin-bottom: 10px;
    }

    .perfect-script-items1:hover {
        transform: translateY(-10px);
    }

    @media (max-width:1199px) {
        .triangle-section ul li>span {
            width: 75px;
            height: 75px
        }

        .triangle-section ul li>span:before {
            top: -20px
        }

        .feature-box-3 .feature-desc {
            font-size: 12px
        }

        .banner {
            height: auto
        }
    }

    @media (max-width:991px) {
        .triangle-section ul li a span {
            display: block
        }
    }

    @media (max-width:767px) {
        .triangle-section ul li {
            display: block;
            width: auto;
            margin-bottom: 50px
        }

        .triangle-section ul li a {
            margin-top: 0
        }

        .feature-box-4 .feature-title {
            font-size: 12px
        }
    }

    .c-spc {
        padding: 20px 0px;
    }

    .common_spacing {
        padding: 50px 0;
    }

    .section-title.center {
        padding: 0;
        text-align: center;
    }

    .process_flow {
        padding: 60px 0px;
    }

    .flw_wrapper {
        position: relative;
        clear: both;
    }

    .process_flow .row {
        padding: 20px 50px;
        overflow: hidden;
        border-radius: 20px;
    }

    .process_flow .p_icon {
        position: relative;
        left: 0%;
    }

    .p_icon img {
        width: 120px;
        padding: 20px;
    }

    .flow_1 .p_icon span:after {
        -webkit-animation: order_1 10s linear infinite;
        -moz-animation: order_1 10s linear infinite;
        -o-animation: order_1 10s linear infinite;
        content: '';
        width: 55px;
        height: 55px;
        background: #e72c53;
        position: absolute;
        border-radius: 50%;
        left: 0;
        z-index: -1;
    }

    .process_cnt {
        margin-top: 10px;
    }

    .process_cnt p strong {
        display: block;
        font-size: 24px;
        line-height: 32px;
        color: #744aed;
    }

    .process_flow .flow_right {
        background: #e6e6e6bd;
    }

    .text-right {
        text-align: right;
    }

    .process_flow .flow_right .p_icon {
        left: auto;
        right: 0%;
    }

    .flow_right .p_icon span {
        margin-left: 0;
        margin-right: 30px;
    }

    .p_icon span {
        font-family: 'Russo One', sans-serif;
        font-size: 30px;
        background: #000;
        color: #fff;
        width: 55px;
        height: 55px;
        display: inline-block;
        line-height: 59px;
        text-align: center;
        border-radius: 50%;
        margin-left: 30px;
        position: relative;
        z-index: 1;
    }

    .flow_2 .p_icon span:after {
        -webkit-animation: oder_2 10s linear infinite;
        -moz-animation: oder_2 10s linear infinite;
        -o-animation: oder_2 10s linear infinite;
        content: '';
        width: 55px;
        height: 55px;
        background: #e72c53;
        position: absolute;
        border-radius: 50%;
        left: 0;
        z-index: -1;
    }

    .line_flow {
        position: absolute;
        top: 90px;
        left: 195px;
        zoom: 0.90;
    }

    .technicalbox {
        background: #fff;
        border-radius: 3px;
        box-shadow: 0 5px 50px 0 rgba(0, 0, 0, .04);
        margin-bottom: 30px;
        padding: 60px 30px;
        position: relative;
        min-height: 387px;
    }

    .banner {
        height: 700px;
        background: linear-gradient(140deg, #180134, #7723bb);
        background-size: cover;
        padding-top: 150px;
        padding-bottom: 60px;
    }

    .banner h4 {
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

    .contentall h1 {
        margin-bottom: 25px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 44px;
    }

    .contentall p {
        font-weight: 700;
        color: #ffffff;
        font-size: 15px;
    }

    .contentall ul {
        padding-left: 0;
        margin-bottom: 40px;
        margin-top: 0;
    }

    .contentall ul li {
        color: #fff;
        font-weight: 700;
        font-size: 15px;
        border-bottom: 1px solid #666;
    }

    .contentall ul li {
        padding: 15px;
        margin-bottom: 20px;
        padding-bottom: 15px;
        padding-top: 15px;
        max-width: 48%;
        display: inline-block;
        width: 100%;
        text-align: center;
        background: #00000075;
        border: 3px solid #5f5c5cf2;
        margin-right: 10px;
    }

    .contentall ul i {
        color: #16ce90;
        font-size: 20px;
        vertical-align: middle;
        margin-right: 8px;
    }

    .contentall ul li img {
        display: block;
        margin: 0 auto 10px;
    }

    h5 {
        line-height: 1.5;
    }

    .container.work_box {
        background: #eee;
        box-shadow: 0 0 10px #ccc;
    }

    .container.work_box .col-md-6 {
        padding: 0;
    }

    .sto-exchange-flip .flip-box {
        min-height: 406px;
        margin-bottom: 30px;
    }

    .w_vv {
        padding: 25px 20px 10px 20px;
        border: 5px solid #fff;
        background: #f5f5f5;
    }

    .flip-tit {
        font-size: 19px;
    }

    .flip-icon-outer {
        /*padding: 20px;*/
    }

    .flip-icon {
        height: 60px;
    }

    .contentall {
        margin-top: 1em;
    }

    .flip-icon-outer {
        padding: 0px;
        line-height: 6em;
        display: inline-block;
        box-shadow: 0 0 20px 0 rgb(0 0 0 / 15%);
        border-radius: 100%;
        width: 90px;
        height: 90px;
        background: #f5f1ff;
        margin-bottom: 15px;
    }

    .flip-icon-outer img {
        filter: hue-rotate(120deg);
    }

    .flip-box:hover {
        background: #744aed;
        color: #fff;
    }

    #ret-inv .feature-box-3 {
        background: rgb(247 247 247 / 58%);
    }

    .font-wei {
        font-weight: 700;
    }

    @media (max-width:767px) {
        .contentall ul li {
            max-width: 100%;
        }

        .contentall {
            margin-top: 2em;
        }

        .contentall p {
            font-weight: bold;
            color: #eee;
            font-size: 14px;
            line-height: 1.6;
        }

        .banner {
            padding-top: 80px;
        }

        .container.work_box .col-md-6 {
            padding: 0 15px;
            margin-bottom: 30px;
        }

        .container.work_box {
            background: #eee;
            box-shadow: none;
            padding-top: 30px;
            margin-bottom: 0 !important;
        }

        .container.work_box img {
            width: 100%;
        }

        #ret-inv .feature-box-3,
        .sto-exchange-flip .flip-box {
            max-width: 500px;
            margin: 0 auto 30px;
            display: block;
            min-height: auto;
        }

        .container.common_spacing {
            padding: 0 15px;
        }

        .contentall h1 {
            font-size: 30px;
        }
    }

    .nec-btn {
        position: relative !important;
        color: #fff !important;
        border-radius: 30px !important;
        font-size: 11px;
        text-transform: capitalize;
         !important;
        transform: scale(1.1, 1.1) !important;
        transition: all 0.3s ease-out 0s !important;
        background: #744aed !important;
    }

    .nec-btn:hover {
        transform: scale(1, 1) !important;
        color: #fff !important;
        background: #5725be !important;
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

    .nec-btn {
        width: auto !important;
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
        padding: 8px 15px 8px 50px;
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

    @media screen and (min-width: 1024px) {
        .ban {
            margin-top: 50px;
        }
    }

    .font_wte {
        color: #ffffff;
        font-size: 20px;
        font-weight: 700;
    }

    .main-timeline1:after {
        content: '';
        display: none;
        clear: both;
    }

    .main-timeline1 .timeline1 {
        width: 50%;
        padding: 0 0 0 45px;
        margin: 0 0 0 5px;
        float: right;
    }

    .main-timeline1 .timeline1-content {
        color: #333;
        background: linear-gradient(#fff 50%, #f9f9f9 50%);
        padding: 15px 15px 15px 70px;
        border: 10px solid #fff;
        border-radius: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        display: block;
        position: relative;
    }

    .main-timeline1 .timeline1-content:hover {
        text-decoration: none;
    }

    .main-timeline1 .timeline1-content:before {
        content: "";
        background: linear-gradient(to right bottom, #C0A9E1 50%, #AC98CD 50%);
        width: 100px;
        height: 100px;
        border-radius: 0 0 0 100px;
        transform: translateY(-50%) rotate(45deg);
        position: absolute;
        top: 50%;
        left: -75px;
    }

    .main-timeline1 .timeline1-icon {
        color: #fff;
        font-size: 45px;
        font-weight: 600;
        line-height: 35px;
        transform: translateY(-50%);
        position: absolute;
        left: -35px;
        top: 50%;
    }

    .main-timeline1 .title {
        color: #AC98CD;
        font-size: 23px;
        font-weight: 600;
        text-transform: Capitalize;
        margin: 0 0 5px 0;
    }

    .main-timeline1 .description {
        font-size: 14px;
        line-height: 22px;
        letter-spacing: 1px;
        margin: 0;
    }

    .main-timeline1 .timeline1:nth-child(even) {
        padding: 0 45px 0 0;
        margin: 0 5px 0 0;
        float: left;
    }

    .main-timeline1 .timeline1:nth-child(even) .timeline1-content {
        padding: 20px 70px 20px 20px;
    }

    .main-timeline1 .timeline1:nth-child(even) .timeline1-content:before {
        transform: translateY(-50%) rotate(225deg);
        left: auto;
        right: -75px;
    }

    .main-timeline1 .timeline1:nth-child(even) .timeline1-icon {
        left: auto;
        right: -35px;
    }

    .main-timeline1 .timeline1:nth-child(4n+2) .timeline1-content:before {
        background: linear-gradient(to right bottom, #6AC5A6 50%, #60B397 50%);
    }

    .main-timeline1 .timeline1:nth-child(4n+2) .title {
        color: #60B397;
    }

    .main-timeline1 .timeline1:nth-child(4n+3) .timeline1-content:before {
        background: linear-gradient(to right bottom, #7AA5E8 50%, #6E96D3 50%);
    }

    .main-timeline1 .timeline1:nth-child(4n+3) .title {
        color: #6E96D3;
    }

    .main-timeline1 .timeline1:nth-child(4n+4) .timeline1-content:before {
        background: linear-gradient(to right bottom, #C34456 50%, #AF384C 50%);
    }

    .main-timeline1 .timeline1:nth-child(4n+4) .title {
        color: #AF384C;
    }

    @media screen and (max-width:767px) {

        .main-timeline1 .timeline1,
        .main-timeline1 .timeline1:nth-child(even) {
            width: 100%;
            padding: 45px 0 0 0;
            margin: 0 0 30px;
        }

        .main-timeline1 .timeline1-content,
        .main-timeline1 .timeline1:nth-child(even) .timeline1-content {
            text-align: center;
            padding: 60px 20px 20px;
        }

        .main-timeline1 .timeline1-content:before,
        .main-timeline1 .timeline1:nth-child(even) .timeline1-content:before {
            transform: translateY(0) translateX(-50%) rotate(135deg);
            top: -75px;
            left: 50%;
            right: 0;
        }

        .main-timeline1 .timeline1-icon,
        .main-timeline1 .timeline1:nth-child(even) .timeline1-icon {
            transform: translateY(0) translateX(-50%);
            left: 50%;
            right: auto;
            top: -35px;
        }
    }

    .flip-box:hover {
        background: #744aed;
        color: #fff;
    }

    .flip-box:hover .flip-tit strong {
        color: #fff;
    }

    @media screen and (min-width: 425px) {
        .factors {
            min-height: 525px;
            display: flex;
            flex-wrap: nowrap;
            flex-direction: column;
            align-content: stretch;
            justify-content: space-evenly;
            align-items: baseline;
        }

        .v1 {
            padding-bottom: 44px;
        }

        .practical {
            min-height: 547px;
            display: flex;
            flex-wrap: nowrap;
            flex-direction: column;
            align-content: stretch;
            justify-content: space-evenly;
            align-items: baseline;
        }

        .v2 {
            padding-bottom: 17px;
        }
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 350px;
        height: 350px;
        border-radius: 50%;
        background: #7c9fff;
        background: -o-linear-gradient(190deg, #7723bb 0%, rgba(115, 67, 210, 0) 100%);
        background: linear-gradient(260deg, #7723bb 0%, rgba(115, 67, 210, 0) 100%);
        -webkit-filter: blur(150px);
        filter: blur(100px);
    }

    .new-features .awesome-features-wrapper {
        padding: 30px 15px;
        position: relative;
        transition: 1s;
        border-radius: 7px;
        min-height: auto;
        margin: 25px;
        background: #481278;
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

    .faq-content #accordion .panel-title>a.accordion-toggle::before,
    .faq-content #accordion a[data-toggle=collapse]::before {
        background: #744aed;
        margin-top: 0;
    }

    a:hover {
        color: #744aed !important;
    }

    @media screen and (max-width: 320px) {
        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
            width: 50% !important;
        }

        .stats p {
            font-size: 10px !important;
        }

    }

    /*-- Technology --*/
    .technologies {
        background: #fff;
        padding: 50px 0;
    }

    .technologies ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .technologies ul li {
        width: 20%;
        text-align: center;
        font-size: 16px;
        padding: 15px;
        margin: -1px;
        border: 1px solid #744aed;
    }

    /*.technologies ul li img {height: 60px;}*/
    .technologies ul li p {
        margin-bottom: 0 !important;
    }

    /*-- Welcome Content --*/
    .welcome-content {
        background: linear-gradient(140deg, #180134, #7723bb);
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
        border: 1px solid #eee;
        display: grid;
        grid-template-columns: 65px 90%;
        padding: 10px;
        align-items: center;
        text-align: left;
    }

    .welcome-content ul li .icons {
        width: 50px;
        margin-right: 10px;
        padding-right: 10px;
        border-right: 1px solid #fff;
    }

    .welcome-content ul li .icons img {
        filter: invert(1);
    }

    .welcome-content ul li p {
        line-height: 20px;
        padding: 0px;
        margin: 0px;
    }

    /*-- Integration --*/
    .integration {
        padding: 60px 0px;
        /*background: url(img/masternode-coin-development/feature-bg.webp) no-repeat bottom right #f6f8ff;*/
    }

    .integration-items {
        background: #f5f1ff;
        width: 100%;
        padding: 10px;
        border: 1px solid #eee;
        border-radius: 10px;
        margin: 20px auto;
        text-align: center;
    }

    .integration-items p {
        text-align: center;
        margin-top: 15px;
        margin-bottom: 0;
    }

    .integration-items .icons {
        align-items: center;
        display: flex;
        background: #6644ca;
        width: 90px;
        height: 90px;
        margin: -31px auto 10px auto;
        padding: 10px;
        border-radius: 50%;
        justify-content: center;
    }

    .integration-items .icons img {
        filter: invert(1);
    }

    .integration-items p strong {
        display: block;
        color: #0f1c3f;
        font-size: 18px;
        padding-bottom: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #eee;
    }

    /*-- Travel App --*/
    .travel-app {
        padding: 60px 0px;
    }

    .travel-app-items,
    .travel-app-items1 {
        clear: both;
        min-height: 90px;
        margin-bottom: 20px;
    }

    .travel-app-items p strong,
    .travel-app-items1 p strong {
        display: block;
        font-size: 20px;
        color: #350068;
        text-align: left;
    }

    .travel-app-items p {
        color: #000;
        text-align: left;
        padding-left: 100px;
    }

    .travel-app-items1 p {
        color: #000;
    }

    .travel-app-items .icons,
    .travel-app-items1 .icons {
        width: 80px;
        height: 80px;
        border: 4px solid #744aed;
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
        .client-list li {
            width: 31%;
            margin: 15px 1%;
        }
    }

    /*------------ Ipad View Style -----------*/
    @media only screen and (min-width: 768px) and (max-width: 899px) {
        .welcome-content ul li {
            width: 32%;
        }

        .travel-app-items .icons,
        .travel-app-items1 .icons {
            margin-bottom: auto;
        }
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

        .travel-app-items .icons {
            margin-bottom: 0px;
        }
    }
</style>


<body class="header-shadow" id="ico">
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
            width: 25%;
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
            background-color: rgba(0, 0, 0, .8);
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
            background: url('images/crypto/crypto-development-banner.webp') top 150px left -50px no-repeat #0195d5;
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

            .popup-ul li p {
                font-size: 12px;
            }
        }
    </style>
    <div class="login-popup">
        <div class="box-1">
            <div class="img"></div>
            <div class="img-area">
                <h3 class="text-white text-center">Become a Market-Leading Crypto Token Business!</h3>
                <br>
                <p class="text-white text-center">It takes a lot for a crypto project to succeed in the competitive
                    space. We have been part of the successful journey of these top market-topping token projects:</p>
                <ul class="popup-ul">
                    <li><img src="images/nftm/Amepay.webp">
                        <p>AME Chain</p>
                    </li>
                    <li><img src="images/nftm/evai.webp">
                        <p>Evai</p>
                    </li>
                    <li><img src="images/nftm/dash.webp">
                        <p>Dash</p>
                    </li>
                    <li><img src="images/nftm/gsx.webp">
                        <p>GSX Coin</p>
                    </li>
                    <li><img src="images/nftm/waifu.webp">
                        <p>Waifu</p>
                    </li>
                    <li><img src="images/nftm/anyswap.webp">
                        <p>Anyswap</p>
                    </li>
                    <li><img src="images/nftm/quickswap.webp">
                        <p>Quickswap</p>
                    </li>
                    <li><img src="images/nftm/dascoin.webp">
                        <p>Das Coin</p>
                    </li>
                </ul>
            </div>
            <div class="form">
                <div class="close">&times;</div>
                <h3 class="text-white text-center">Do you want your token project to go to the next level?</h3><br>
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
                        class="btn" data-cf-modified-67694e2e9e29d7ba920551bf->Submit</button>
                </form>
                <div class="social">

                    <a rel="nofollow" aria-label="calendly" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calender" aria-hidden="true"
                            title="calendly"></i> Schedule A Meeting &nbsp;</a>
                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#aec7c0c8c1eeccc2c1cdc5cdc6cfc7c0cfdedec8cfcddac1dcd780cdc1c3"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
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
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <p style="font-size: 18px; margin-bottom: 0;">Transform Your Real Estate Investments</p>
                                            <h1 itemprop="name">Real Estate Tokenization</h1>
                                            
                                        </div>
                                        <p itemprop="text"
                                            style="line-height: 1.6;font-size: 21px; font-weight:normal;">
                                            Unlock the potential of fractional ownership and streamline property trading with our cutting-edge real estate tokenization services.
                                            <br><br>
                                            1. Streamlined Ownership
                                            <br>
                                            2. Boosted Liquidity
                                            <br>
                                            3. Expanded Accessibility
                                        </p>
                                        <div class="txt">
                                            <a rel="nofollow" href="#newsletter-form-sec" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important; margin-left: 0px !important;">SEE IT IN ACTION</a> &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a rel="nofollow" href="#demo"
                                                class="nectar-button medium regular accent-color regular-button nec-btn">CONNECT WITH OUR SPECIALISTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 hidden-sm col-xs-12 text-center"> <img class="magic"
                                src="{{ asset('images/asset-token/banner-img.png') }}" alt=" " title=" "> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        section#counter-stats {
            /* display: flex; */
            justify-content: center;
            margin-top: 0;
            padding: 0 !important;
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
            background: #6644ca;
        }

        #counter-stats .stats:nth-child(2) {
            background: #7c55ed;
        }

        #counter-stats .stats:nth-child(3) {
            background: #6644ca;
        }

        #counter-stats .stats:nth-child(4) {
            background: #7c55ed;
        }


        /* AUTHOR LINK */
    </style>
    <style type="text/css">
        .sub_ff strong {
            display: block;
            /* padding-left: 26px;*/
            font-size: 17px;
            /*margin-bottom: 10px;*/
            color: #00000a !important;
            font-weight: 900;
            line-height: 30px;
        }

        .dev {
            padding-left: 26px;
        }

        .sub_ff {
            position: relative;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .sub_ff i {
            position: absolute;
            left: 0;
            color: #744aed;
            line-height: 1.5;
            font-size: 19px;
        }
    </style>

    <section class="common_spacing gray_bg" id="01">
        <div class="container">
            <div class="row">
                <h2 class="text-center sec_tit underline" style="width: 100%">Real Estate Tokenization: Unlock the True Potential of Your Property</h2>
                <p class="text-center">Real estate holds immense value and offers endless opportunities. Tokenizing real estate transforms traditional property ownership, creating new possibilities for investors through enhanced efficiency, liquidity, and global reach.<br><br>
                    Our platform brings your real estate assets into the digital era, converting property value into digital tokens. This process allows you to attract a wider range of investors and benefit from fractional ownership. <br><br>
                    With our strategic approach to real estate tokenization, you can break down barriers in property ownership and redefine your investment strategy.
                </p>
            </div>
        </div>
    </section>

    <div id="our_services" class="defisec gray_bg">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="common_h3 title-th sec_tit">Redefining Property Ownership with Advanced Tokenization</h3>
                <hr>
                <p>We recognize that the future of investing demands inclusivity, liquidity, and innovation. Our diverse range of real estate tokenization options exemplifies these values, allowing investors to explore and invest in various property types, from commercial spaces to residential retreats. Leveraging blockchain technology's unmatched security, transparency, and efficiency, we are pioneering a new era of accessible, flexible, and dynamic investment opportunities.</p>
            </div>
            <div class="grids container-center">
                <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="feature-box-3">
                        <div class="icon"> <img src="{{ asset('images/asset-token/icons/liquidity.webp') }}" alt=" " class="lazy"
                                width="45px;"> </div>
                        <h4 class="feature-title common_h4">Commercial Real Estate Tokenization</h4>
                        <p class="feature-desc mb0">We specialize in creating fractional ownership tokens for commercial properties, broadening investor access, and significantly improving liquidity. This method allows a wide range of investors to participate in high-value commercial real estate markets.</p>
                    </div>
                </div>
                <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="feature-box-3">
                        <div class="icon"><img src="{{ asset('images/asset-token/icons/investors.png') }}" alt=" " class="lazy"
                                width="45px;"> </div>
                        <h4 class="feature-title common_h4">Residential Real Estate Tokenization</h4>
                        <p class="feature-desc mb0">Envision a system where multiple investors collaboratively own residential properties across various regions. Our tokenization approach facilitates collective investment, enabling seamless participation and shared benefits.</p>
                    </div>
                </div>
                <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="feature-box-3">
                        <div class="icon"> <img src="{{ asset('images/asset-token/icons/trophy.png') }}" alt=" " class="lazy"
                                width="45px;"></div>
                        <h4 class="feature-title common_h4">Trophy Real Estate Tokenization</h4>
                        <p class="feature-desc mb0">Tokenizing high-value residential or commercial properties elevates liquidity and provides investors with exclusive access to premier assets previously available only to a select few.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="common_spacing gray_bg new-features" style="background: linear-gradient(140deg, #180134, #7723bb);">
        <div class="container">
            <div class=" ">
                <h2 class="sec_tit underline text-center text-white">Distinctive Features of Our Real Estate Tokenization Services</h2>
            </div>
            <div class="row mt40">
                <div class="container container-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-list"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Dynamic Property Listings</strong>Enable property owners to present their assets compellingly, highlighting distinctive features to attract a targeted audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-life-ring"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Advanced Token Minting</strong>Empower project owners to create both fungible and non-fungible tokens using cutting-edge minting technology, streamlining the process with minimal costs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-copyright"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Innovative Fractional Ownership</strong>Facilitate fractional ownership through tokenization, enhancing asset liquidity and providing retail investors with new opportunities in the real estate market.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-pencil-square-o"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Efficient Smart Contracts</strong>Utilize smart contracts for seamless token deployment, distribution, and management, simplifying the execution of tokenization projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-link"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Cross-Chain Capabilities</strong>Incorporate multi-chain functionality to broaden the reach of real estate tokens, listing them across various blockchains for greater visibility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-credit-card-alt"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Versatile Payment Integration</strong>Offers a versatile payment gateway that supports both cryptocurrency and fiat transactions, making real estate investments more accessible and convenient.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .icon-text-1 h3 {
            font-size: 18px;
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
            margin-bottom: 15px;
            background: #fff;
            padding: 15px;
            border-left: 5px solid #744aed
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
    {{-- <section class="common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h2 class="section-title underline mb20">How Do We Build Your Real Estate Tokenization Platform?
                        </h2>
                    </div>
                    <p>Unveil a futuristic and efficient real estate tokenization platform with our seasoned team of
                        developers to make property transactions seamless and completely transparent. From
                        conceptualizing your ideas to launching the platform for public use, our process ensures all
                        steps are completed with the highest quality.</p>
                </div>
            </div>
            <div class="row mt20 container-center">
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy" data-src="images/asset-token/icons/idea.webp">
                        </div>
                        <div class="icon_content">
                            <h3> Idea Discovery </h3>
                            <p class="c-grey">Discover the business feasibility of your tokenization idea with our
                                experienced analysts and business developers by fixating on your goals and needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy" data-src="images/asset-token/icons/plan.webp">
                        </div>
                        <div class="icon_content">
                            <h3> Planning</h3>
                            <p class="c-grey"> Plan your tokenization platform’s technical and business aspects by
                                framing a roadmap and official documentation that sets the workflow for development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                data-src="images/asset-token/icons/web-design.webp"></div>
                        <div class="icon_content">
                            <h3>Designing</h3>
                            <p class="c-grey">Design the tokenized real estate platform’s user end using various
                                wireframes to ensure optimal user experiences for investors and administrators.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                data-src="images/asset-token/icons/web-development.webp"></div>
                        <div class="icon_content">
                            <h3>Development</h3>
                            <p class="c-grey">Develop the application’s smart contracts that dictate various processes
                                inside your venture platform to ensure seamless trading experiences for users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy" data-src="images/asset-token/icons/testing.webp">
                        </div>
                        <div class="icon_content">
                            <h3>Testing</h3>
                            <p class="c-grey">Test the tokenized real estate marketplace for flaws using various test
                                cases to ensure optimal functionality after the app launches for public use.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                data-src="images/asset-token/icons/deployment.webp"></div>
                        <div class="icon_content">
                            <h3>Deployment</h3>
                            <p class="c-grey">Deploy the platform on the blockchain(s) of your choice or integrate it
                                with your existing blockchain-based venture to set things up for a grand opening.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy" data-src="images/asset-token/icons/launch.webp">
                        </div>
                        <div class="icon_content">
                            <h3>Launching</h3>
                            <p class="c-grey">Launch the real estate tokenization platform for public use after
                                promoting it using an omnichannel approach and building a supportive user community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy" data-src="images/asset-token/icons/support.webp">
                        </div>
                        <div class="icon_content">
                            <h3>Support</h3>
                            <p class="c-grey">Keep the platform sleek and smooth by opting for our maintenance and
                                support services that offer the best-in-class upgrades and support around the clock.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center cta_mine txt">
            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                data-color-override="false" data-hover-color-override="false"
                data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
            <a rel="nofollow" href="#newsletter-form-sec"
                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with our
                    Experts</span></a>
        </div>
        </div>
    </section> --}}

    @include('static.left-aligned-image-card-section', [
        'title' => 'Crafting Your Cutting-Edge Real Estate Tokenization Platform', 
        'desc' => 'Introducing a revolutionary real estate tokenization platform, crafted by our expert developers to redefine property transactions with unparalleled efficiency and transparency. From initial concept to final deployment, our comprehensive approach guarantees that every phase is executed with precision and excellence.',
        'cards' => [
            [
                'title' => 'Conceptualization',
                'desc' => "Explore the viability of your tokenization concept with our expert analysts and business strategists, focusing on aligning your vision with achievable goals.",
                'image' => 'asset-token/icons/idea.png'
            ],
            [
                'title' => 'Strategic Planning',
                'desc' => "Formulate a comprehensive roadmap for your tokenization platform, detailing technical and business elements to guide the development process with precision.",
                'image' => 'asset-token/icons/plan.png'
            ],
            [
                'title' => 'Innovative Design',
                'desc' => 'Create a user-centric design for your tokenized real estate platform, utilizing advanced wireframes to deliver an exceptional experience for both investors and administrators.',
                'image' => 'asset-token/icons/web-design.png'
            ],
            [
                'title' => 'Robust Development',
                'desc' => "Engineer the platform’s smart contracts to manage and automate critical functions, ensuring smooth and efficient trading operations for all users.",
                'image' => 'asset-token/icons/web-development.webp'
            ],
            [
                'title' => 'Rigorous Testing',
                'desc' => 'Conduct thorough testing of the real estate tokenization platform with extensive test cases to guarantee flawless performance and reliability upon launch.',
                'image' => 'asset-token/icons/testing.png'
            ],
            [
                'title' => 'Seamless Deployment',
                'desc' => "Launch your platform on the blockchain of your choice or integrate it with your existing blockchain infrastructure, setting the stage for a successful market entry.",
                'image' => 'asset-token/icons/deployment.png'
            ],
            [
                'title' => 'Launch',
                'desc' => 'Reveal your real estate tokenization platform to the public with a well-planned marketing campaign and build a strong user community.',
                'image' => 'asset-token/icons/launch.webp'
            ],
            [
                'title' => 'Support',
                'desc' => "Keep your platform running smoothly with our expert maintenance and support, offering regular updates and 24/7 assistance.",
                'image' => 'asset-token/icons/support.png'
            ],
        ],
    ])
    
    <style type="text/css">
        /*equalize start*/
        .container-center {
            display: flex;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
            justify-content: center;
        }

        .equalize {
            display: flex;
        }

        /*equalize end */
    </style>
    <style type="text/css">
        .awesome-features-wrapper {
            /*border: 1px solid #cdcdcd;*/
            background: #fff;
            padding-top: 30px;
            padding-bottom: 20px;
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
            background: #744aed;
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
            color: #744aed;
            font-size: 40px;
        }

        .awesome-features-icon-img img {
            width: 60px;
            height: 60px;
        }

        .awesome-features-text h4 {
            font-size: 22px;
            font-weight: 500;
            line-height: 1.3;
            margin-bottom: 18px;
        }

        .awesome-features-text p {
            margin-bottom: 0;
            padding: 0 40px;
        }
    </style>


    <style type="text/css">
        .step-points li {
            display: grid;
            grid-template-columns: 60px auto;
            margin-bottom: 20px;
            align-items: center;
            border-radius: 7px;
            background: #f5f1ff;
        }

        .step-points li span,
        .step-points-content {
            animation-name: fadeIn;
            animation-duration: 3s;
            animation-iteration-count: 1;
        }

        .step-points li span {
            width: 60px;
            height: 60px;
            background: #744aed;
            border-radius: 7px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .step-points .fa {
            font-size: 30px;
            color: #fff;
        }

        .step-points-content {
            margin-left: 15px;
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .step-points li h4 {
            color: #000;
            font-weight: 700;
            font-size: 17px;
            letter-spacing: 0;
            line-height: 1.3;
        }
    </style>
    <section class="common_spacing ">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h2 class="section-title underline mb20">Powerful Capabilities of Our Real Estate Tokenization Platform </h2>
                    </div>
                    <p>Transform your vision into reality with our advanced real estate tokenization platform. We provide you with the opportunity to become a leading provider of tokenization-as-a-service. Our team uses cutting-edge technology and innovative market strategies to bring your business to life.</p>
                </div>
            </div>
            <div class="row mt40">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-gavel" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>User Profiles </h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-cubes" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>User Verification </h4>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Land Ownership NFTs </h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Token Launchpad</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-filter" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Governance Integration </h4>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Integrated Wallet</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-money" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Payment Solutions</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Secondary Market </h4>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Dividend Distribution</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-google-wallet" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Community Forums</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <style type="text/css">
        :root {
            --color1: #117D83;
            --color2: #0d3881;
        }

        .main-timeline {
            font-family: 'Poppins', sans-serif;
        }

        .main-timeline:after {
            content: '';
            display: block;
            clear: both;
        }

        .main-timeline .timeline {
            width: 50%;
            padding: 0 70px 0 0;
            margin: 0 5px 15px 0;
            float: left;
        }

        .main-timeline .timeline-content {
            color: #999;
            background: var(--main-color);
            min-height: 120px;
            padding: 0 30px 0 60px;
            border-right: 2px solid var(--color2);
            display: block;
            position: relative;
            z-index: 1;
        }

        .main-timeline .timeline-content:hover {
            text-decoration: none;
        }

        .main-timeline .timeline-content:before,
        .main-timeline .timeline-content:after {
            content: '';
            background-color: var(--color2);
            height: 8px;
            width: 8px;
            border-radius: 50%;
            position: absolute;
            right: -5px;
            top: 0;
        }

        .main-timeline .timeline-content:after {
            top: auto;
            bottom: 0;
        }

        .main-timeline .timeline-icon {
            color: #fff;
            background-color: #6644ca;
            font-size: 40px;
            text-align: center;
            line-height: 93px;
            height: 93px;
            width: 93px;
            border-radius: 30px;
            box-shadow: -5px -5px 5px #744aed, -8px -8px 0 #744aed;
            transform: translateY(-50%);
            position: absolute;
            right: -120px;
            top: 50%;
        }

        .main-timeline .timeline-year {
            font-size: 32px;
            font-weight: 600;
            text-align: right;
        }

        .main-timeline .title {
            /*color: var(--color2);*/
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0 0 7px;
            text-align: right;
        }

        .main-timeline .description {
            color: #444;
            font-size: 12px;
            font-weight: 500;
            line-height: 21px;
            letter-spacing: 0.5px;
            margin: 0;
            text-align: right;
        }

        .main-timeline .timeline-yearleft {
            font-size: 32px;
            font-weight: 600;
            text-align: left;
        }

        .main-timeline .titleleft {
            /*color: var(--color2);*/
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0 0 7px;
            text-align: left;
        }

        .main-timeline .descriptionleft {
            color: #444;
            font-size: 12px;
            font-weight: 500;
            line-height: 21px;
            letter-spacing: 0.5px;
            margin: 0;
            text-align: left;
        }

        .main-timeline .timeline:nth-child(even) {
            padding: 0 0 0 70px;
            margin: 0 0 15px 5px;
            float: right;
        }

        .main-timeline .timeline:nth-child(even) .timeline-content {
            padding: 0 0 0 30px;
            border-left: 2px solid var(--color1);
            border-right: none;
        }

        .main-timeline .timeline:nth-child(even) .timeline-content:before,
        .main-timeline .timeline:nth-child(even) .timeline-content:after {
            right: auto;
            left: -5px;
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon {
            box-shadow: 5px -5px 5px #744aed, 8px -8px 0 #744aed;
            left: -120px;
            right: auto;
        }

        .main-timeline .timeline:nth-child(2) {
            --color2: #0d3881;
            --color2: #0d3881;
        }

        .main-timeline .timeline:nth-child(3) {
            --color2: #0d3881;
            --color2: #0d3881;
        }

        .main-timeline .timeline:nth-child(4) {
            --color2: #0d3881;
            --color2: #0d3881;
        }

        @media screen and (max-width:767px) {

            .main-timeline .timeline,
            .main-timeline .timeline:nth-child(even) {
                width: 100%;
                padding: 115px 0 0;
                margin: 0 0 50px;
            }

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(even) .timeline-content {
                text-align: center;
                padding: 15px 0 0 0;
                border: none;
                border-top: 2px solid var(--color1);
            }

            .main-timeline .timeline-content:before {
                right: auto;
                left: 0;
                top: -5px;
            }

            .main-timeline .timeline-content:after,
            .main-timeline .timeline:nth-child(even) .timeline-content:after {
                left: auto;
                right: 0;
                top: -5px;
            }

            .main-timeline .timeline-icon,
            .main-timeline .timeline:nth-child(even) .timeline-icon {
                transform: translateY(0) translateX(-50%);
                top: -115px;
                left: 50%;
            }
        }
    </style>
    <section class="common_spacing gray_bg">
        <div class="container">
            <h3 class="sec_tit underline text-center">Steps to Tokenize a Real Estate Asset</h3>
            <p class="text-center"></p>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-year">1</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/asset-token/icons/assets.png') }}" style="width: 60px;"></div>
                                <h4 class="title">Deal Finalization</h4>
                                <p class="description">TDetermine key factors like asset type, legal jurisdiction, shareholder composition, and applicable regulations to finalize the deal structure.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-yearleft">2</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/asset-token/icons/structure.png') }}" style="width: 60px;"></div>
                                <h4 class="titleleft">Legal Structure Setup</h4>
                                <p class="descriptionleft">
                                    Choose from various legal frameworks such as forming a Special Purpose Vehicle (SPV), joining a real estate fund, engaging in project financing, or participating in a Real Estate Investment Trust (REIT).</p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-year">3</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/asset-token/icons/investors.png') }}" style="width: 60px;"></div>
                                <h4 class="title">Technology Selection</h4>
                                <p class="description">
                                    Select an appropriate blockchain network for token creation and establish a secure custody solution for token storage. Tokens can be offered through primary issuance or traded on prominent secondary markets.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-yearleft">4</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/asset-token/icons/creation.png') }}" style="width: 60px;"></div>
                                <h4 class="titleleft">Token Issuance and Distribution</h4>
                                <p class="descriptionleft">
                                    Develop a distribution strategy for the token, considering the total supply and incorporating multiple payment methods. Track fundraising progress in real time through an updated cap table. </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>
    <style type="text/css">
        .text-center {

            text-align: center !important;
        }

        .design {
            background: #fff;
            border-radius: 20px;
            padding: 25px 0 1px;
            margin: 15px auto;
        }

        .design h5,
        .design p {
            color: #000;
            font-size: 20px;
            font-weight: 600;
        }

        #demo {
            padding: 30px 0;
        }

        /*    #demo .container{padding: 40px 0; border: 5px solid #eee; border-radius: 15px;}*/
        @media (max-width: 320px) {
            /* .design{
                   padding: 2px 145px 1px 20px;
         }*/
        }
    </style>
    {{-- <section id="demo">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3 class="title-th sec_tit underline">Check Out a Demo of Our Real Estate Tokenization Platform!
                    </h3>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12"
                    style="border-radius: 10px; border: 1px solid #000; padding-bottom:40px; padding-top:30px;">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center" style="margin-top:20px;">
                        <h4 class="sec_tit underline text-center" style="font-size:24px;">Admin Demo</h4>
                        <img class="lazy" data-src="images/asset-token/real-estate-demo-1.webp"
                            style="max-width: 100%;">
                        <div class="design">
                            <p style="margin-bottom:10px;"><b>Email: </b><span><a href="/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="e58481888c8ba58180888acb868a88">[email&#160;protected]</a></span>
                            </p>
                            <p style="margin-bottom:10px;"> <b>Password: </b><span>123456</span></p>
                            <div class="clearfix"></div>
                            <a href="https://retoken.deliveryclouds.com/admin/login" rel="nofollow" target="_blank"
                                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                                style="display:inline-block; border-radius: 10px !important; text-transform: capitalize !important;"><span>Click
                                    to View Admin Demo</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center" style="margin-top:20px;">
                        <h4 class="sec_tit underline text-center" style="font-size:24px;">User Demo</h4>
                        <img class="lazy" data-src="images/asset-token/real-estate-demo-2.webp"
                            style="max-width: 100%;">
                        <div class="design">
                            <p style="margin-bottom:10px;"><b>Email: </b><span><a href="/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="046d6a726177706b764469656d686d6a65706b762a676b69">[email&#160;protected]</a></span>
                            </p>
                            <p style="margin-bottom:10px;"> <b>Password: </b><span>12345678</span></p>
                            <div class="clearfix"></div>
                            <a href="https://retoken.deliveryclouds.com" target="_blank" rel="nofollow"
                                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                                style="display:inline-block; border-radius: 10px !important; text-transform: capitalize !important;"><span>Click
                                    to View User Demo</span></a>

                        </div>
                    </div>
                </div>
            </div> <br>

        </div>
    </section><br><br> --}}
    {{-- <div class="pricing-table gray_bg" id="pricing-tabs" style="padding:60px 0px;">
        <div class="container">
            <div class="data table-responsive">
                <div class="section-title">
                    <h2 class="sec_tit underline text-center">Packages</h2>
                    <div class="accordion" id="accordion2">
                        <table class="table-striped" style="width:100%;">
                            <tbody> </tbody>
                            <thead>
                                <tr class="pr_pack">
                                    <th rowspan="1">Legally Compliant Token Architecture</th>
                                    <th>Basic</th>
                                    <th>Advanced</th>
                                    <th>Premium</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="theme-color-bg" colspan="4">Technology</th>
                                </tr>
                                <tr>
                                    <td>Custom Ethereum Token</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/no.webp"></td>
                                    <td><img src="images/no.webp"></td>
                                </tr>
                                <tr>
                                    <td>Own Blockchain</td>
                                    <td><img src="images/no.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/no.webp"></td>
                                </tr>
                                <tr>
                                    <td>Hyperledger Burrow</td>
                                    <td><img src="images/no.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Integrated Voting Rights Platform</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Token Wallet as per Regulatory Protocol</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Investor Managment Dashboard</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Automated KYC/AML Integration </td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Automated Accredited Investor Verification</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Stake Holder Registry</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Integrated Dividend Issuance Platform</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>KYC/AML records Registry</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Accredited Investors Registry</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Market Capitalization Details</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Funds Raised &amp; Investment Details</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Integrated Help Desk on Dashboard</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Audit Reports &amp; Checklists </td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Portfolio Management for Investors</td>
                                    <td><img src="images/no.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Announcements within Dashboard</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Uploading Legal Documents &amp; Disclaimers</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Investor Prospectus</td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Whitepaper (Owner's Manual) </td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                                <tr>
                                    <td>Customized Website </td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                    <td><img src="images/yes.webp"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="accordion-group">
                            <div class="accordion-heading"> <a class="accordion-toggle tab_high" data-toggle="collapse"
                                    data-parent="#accordion2" href="#collapseOne"> Legal &amp; Regulations </a> </div>
                            <div id="collapseOne" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <table class="table-striped" style="width:100%;">
                                        <tbody>
                                            <tr>
                                                <td>Preliminary Checks </td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Development of Documents</td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Customized Website </td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Token Purchase Agreement</td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Development of the Token’s Legal Structure</td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Disclaimers for the website and marketing materials</td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Token Crowdsale Terms</td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Private Placement Agreement with Private Investors</td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Legal Opinion on the Sale of Tokens</td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>SAFT Agreement</td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Token Purchase Agreement</td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Company Valuation Audit</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading"> <a class="accordion-toggle tab_high" data-toggle="collapse"
                                    data-parent="#accordion2" href="#collapseTwo"> Incorporation - Pre STO </a> </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <table class="table-striped" style="width:100%;">
                                        <tbody>
                                            <tr>
                                                <td>Establishment of the holding company in Malta</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Establishment of the holding company in USA</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Establishment of the Maltese trading company</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Establishment of the USA trading company</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Registration of the Operation Company</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Legal Agreements between Holding and Main Operational Company</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Local Directors if Required</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Registered Office</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Tax Compliance</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                            <tr>
                                                <td>Application of Licenses</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading"> <a class="accordion-toggle tab_high" data-toggle="collapse"
                                    data-parent="#accordion2" href="#collapseThree"> During STO </a> </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <table class="table-striped" style="width:100%;">
                                        <tbody>
                                            <tr>
                                                <td>Liaise with MFSA &amp; MDIA for Compliance</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Liaise with SEC for Compliance</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading"> <a class="accordion-toggle tab_high" data-toggle="collapse"
                                    data-parent="#accordion2" href="#collapseFour"> Post STO </a> </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <table class="table-striped" style="width:100%;">
                                        <tbody>
                                            <tr>
                                                <td>Accounting &amp; Book Keeping</td>
                                                <td><img src="images/no.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                                <td><img src="images/yes.webp"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <table class="table-striped" style="width:100%;">
                            <tbody>
                                <tr>
                                    <td style="padding: 20px 0px;">&nbsp;</td>
                                    <td class="btnpro"><a rel="nofollow" type="button" data-toggle="modal"
                                            data-target="#myModal">Order Now</a></td>
                                    <td class="btnpro"><a rel="nofollow" type="button" data-toggle="modal"
                                            data-target="#myModal1">Order Now</a></td>
                                    <td class="btnpro"><a rel="nofollow" type="button" data-toggle="modal"
                                            data-target="#myModal2">Order Now</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <style type="text/css">
        .pricing-table {
            display: block;
        }

        .pricing-table {
            padding: 0px;
        }

        .data {
            margin: 10px 0;
            text-align: center;
        }

        .data table {
            margin-bottom: 0;
        }

        .data table .pr_pack th {
            font-size: 14px;
            line-height: 1.4;
            text-transform: uppercase;
            background: linear-gradient(#180a52, #5100a1);
        }

        .data table th {
            background: #000000;
            font-size: 20px;
            padding: 10px 5px;
        }

        .data table td,
        .data table th {
            text-align: center;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
            padding: 10px 15px;
        }

        a.accordion-toggle.tab_high {
            display: block;
            padding: 11px 5px;
            text-transform: uppercase;
            font-size: 16px;
            background: #180a52 !important;
            color: #fff !important;
            border-bottom: 1px solid #bbb;
            font-weight: bold;
        }

        .accordion-toggle:after {
            font-family: Arial;
            content: "+";
            float: right;
            background: #fff;
            color: #000;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            font-weight: bold;
            line-height: 25px;
        }

        .data table {
            margin-bottom: 0;
        }

        @media (max-width: 767px) {
            .data table .pr_pack th {
                font-size: 13px;
            }
        }

        @media screen and (max-width: 900px) {
            .pricing-table {
                display: block;
                overflow: scroll;
            }
        }

        .font_feature {
            font-size: 16px !important;
        }

        @media (max-width: 767px) {
            a.accordion-toggle.tab_high {
                font-size: 12px;
            }
        }

        .data table .pr_pack th {
            font-size: 20px;
            line-height: 1.4;
            text-transform: uppercase;
            background: linear-gradient(#180a52, #5100a1);
        }

        .data table th {
            background: #000000;
            font-size: 20px;
            padding: 10px 5px;
        }

        .data table td {
            padding: 5px 10px;
        }

        .data table td img {
            width: 25px;
        }

        .data table td img.no_ic {
            width: 20px;
        }

        .data table th.theme-color-bg {
            padding: 11px 5px;
            text-transform: uppercase;
            font-size: 16px;
            font-weight: bold;
            background: #180a52 !important;
        }

        .data tr td:nth-child(1) {
            width: 30% !important;
        }

        .data .table-striped tr td:nth-child(2),
        .data .table-striped tr td:nth-child(3),
        .data .table-striped tr td:nth-child(4) {
            width: 18% !important;
        }

        .pricing-table {
            padding: 0px;
        }

        .pricing-table {
            display: block;
        }

        @media screen and (max-width: 900px) {
            .pricing-table {
                display: block;
                overflow: scroll;
            }
        }

        table.table-striped.order_btn td {
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            .data table th.theme-color-bg {
                font-size: 13px;
            }

            .table-striped {
                overflow-x: scroll;
                width: 100%;
            }

            .data table th:last-child {
                margin: 10px 0 0;
                display: table-cell;
                width: 100%;
            }

            .data table th {
                background: #000000;
                font-size: 13px;
                padding: 10px 5px;
            }

            .data table td {
                padding: 5px 6px;
            }

            .data table tbody tr:first-child th:last-child {
                transform: none;
            }
        }

        .data table {
            margin-bottom: 0;
        }

        @media screen and (max-width: 500px) {

            .data .table-striped tr td:nth-child(2),
            .data .table-striped tr td:nth-child(3),
            .data .table-striped tr td:nth-child(4) {
                width: 20% !important;
            }

            a[type="button"] {
                background: #744aed none repeat scroll 0;
                display: block;

            }
        }


        a[type="button"] {
            background: #744aed none repeat scroll 0;

        }
    </style>

    {{-- <div class="pros-trading common_spacing">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="text-center sec_tit underline">Benefits of Tokenizing Real estate</h2>
            </div>
            <p class="text-center">Both property owners and prospective investors will benefit immensely from Digitizing
                an Asset.</p>
            <div class="mt60">
                <div class="row flip-box-row sto-exchange-flip">
                    <div class="container-center">
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/asset-token/liquidity.svg"
                                        class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>High-volume Liquidity</strong></h3>
                                <p class="flip-txt">Tokenizing your real estate assets will bring in high-volume
                                    liquidity that will help you with efficient buying and selling of properties and
                                    also with a quick conversion of property values into cash. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/asset-token/ownership.svg"
                                        class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>Fractional Ownership</strong></h3>
                                <p class="flip-txt">Tokenization allows fractional ownership where you can split the
                                    value of shares and also their ownership. This helps reduce your distress of being a
                                    sole owner and bear all challenges by yourself. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/asset-token/global-network.svg"
                                        class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>Globalization</strong></h3>
                                <p class="flip-txt">Tokenization removes geographical barriers, and you can trade with
                                    anyone around the globe, which widely expands your business opportunities, spinning
                                    profits in huge numbers.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/asset-token/404-error.svg"
                                        class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>No intermediaries</strong></h3>
                                <p class="flip-txt">By tokenizing real estate assets, users are enabled direct peer-peer
                                    transactions with no involvement from intermediaries. This helps with a risk-free
                                    business, and also reduces extra costs. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/asset-token/blockchain.svg"
                                        class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>Blockchain Immutability</strong></h3>
                                <p class="flip-txt">The integration of blockchain into the tokenization platform
                                    provides immutability where the transactions, once recorded, cannot be interchanged.
                                    Also, blockchain completely protects the user and their asset information.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/blockchain/exchange_2.webp"
                                        class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>Instant, Efficient transactions</strong></h3>
                                <p class="flip-txt">Tokenization eliminates the long, tedious real estate process and
                                    helps with quick, efficient peer-peer transactions, from/to anywhere around the
                                    world. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/asset-token/money-bag (2).svg"
                                        class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>Reduced entry cost</strong></h3>
                                <p class="flip-txt">The tokens can easily be subdivided into many parts and this enables
                                    its sale at lower prices due to the presence of fractionalization. Hence, small
                                    investors can participate greatly in the process while the wealthier investors can
                                    efficiently diversify their portfolio. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/asset-token/shield (2).svg"
                                        class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>Highly secure</strong></h3>
                                <p class="flip-txt">No individual or organization controls the entire system, and the
                                    power is equally distributed between the different users. Advanced cryptographic
                                    techniques like private keys are utilized by users to get access to their digital
                                    assets. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/asset-token/administration (1).svg"
                                        class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>Simplified management</strong></h3>
                                <p class="flip-txt">Investors’ rights can be managed easily. Secondary transactions
                                    executed can be tracked on a real-time basis by partnering with the leading
                                    third-party exchanges. Investors get their returns promptly and also participate in
                                    the governance of the platform through voting rights and decision making. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    

    <style type="text/css">
        .main-sections {
            width: 100%;
            margin: 0 auto;
            display: inline-block;
        }

        .pre-ico-sec-1 .why-adit-list:hover {
            background: #fff;
        }

        .pre-ico-sec-1 .card-big-shadow {
            position: relative;
        }

        .card-big-shadow:before {
            background-image: url(images/ibm/shadow.webp);
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            bottom: -12%;
            content: "";
            display: block;
            left: -12%;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 0;
            opacity: .5;
        }

        .pre-ico-sec-1 .why-adit-list {
            width: 100%;
            background: #f5f1ff;
            border: 1px solid #eee;
            position: relative;
            padding: 7%;
            margin-bottom: 49px;
            min-height: 340px !important;
            text-align: justify;
        }

        .pre-ico-sec-1 .why-adit-list .icon {
            width: 100%;
            float: none;
            text-align: center;
            margin-bottom: 20px;
        }

        .pre-ico-sec-1 .why-adit-list .icon img {
            width: 55px;
            height: 55px;
        }

        .pre-ico-sec-1 .why-adit-list .content {
            float: none;
            width: 100%;
            text-align: center;
        }

        .pre-ico-sec-1 .why-adit-list .content h3 {
            color: #000000;
            font-weight: 700;
        }
    </style>


    <section class="welcome-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="sec_tit underline text-center text-white">Transforming Real Estate Tokenization with Our Strategic Expertise</h2>
                    <p class="text-center text-white" style="font-size: 16px;">Our method for real estate tokenization integrates the deep knowledge of industry specialists with advanced development skills. We create tokenized real estate platforms that offer efficient, user-friendly, and regulatory-compliant environments, simplifying investor engagement with real estate assets. <br><br>
                        Whether starting from scratch or using pre-built solutions, we provide a tailored application that meets both your needs and those of your clients.
                    </p>
                    <h6 class="text-white text-center mb30" style="font-size: 20px">Real Estate Tokenization Essentials</h6>
                </div>
                <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/decentralized.webp') }}">
                            </div>
                            <p class="white">Decentralized Architecture</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/asset-token/icons/smart-contracts.webp') }}"></div>
                            <p class="white">Advanced Smart Contracts</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/interest.webp') }}">
                            </div>
                            <p class="white">Interest Structures</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/auction.webp') }}"></div>
                            <p class="white">Legal Entity Formation</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/shield.webp') }}"></div>
                            <p class="white">Compliance with Securities Regulations</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/corporate.webp') }}">
                            </div>
                            <p class="white">Corporate Governance</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/asset-token/icons/categorization.webp') }}"></div>
                            <p class="white">Asset Classification</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/location.webp') }}">
                            </div>
                            <p class="white">Geographical Asset <br> Placement</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/ratio.webp') }}"></div>
                            <p class="white">Tokenization Ratios</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/mortgage.webp') }}">
                            </div>
                            <p class="white">Asset Mortgages</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/investor.webp') }}">
                            </div>
                            <p class="white">Investor Tracking</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/kyc.webp') }}"></div>
                            <p class="white">Automated KYC/AML Procedures</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/accreditation.webp') }}">
                            </div>
                            <p class="white">Accredited Investor<br> Verification</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/asset-token/icons/international-fund.webp') }}"></div>
                            <p class="white">Global Fundraising Opportunities</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/legal.webp') }}"></div>
                            <p class="white">Adherence to Legal and Regulatory Standards</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/jurisdictions.webp') }}">
                            </div>
                            <p class="white">Coverage Across Multiple Jurisdictions</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    @include('static.color-hover-cards-section', [
        'title' => 'Unlocking the Value of Real Estate Through Tokenization', 
        'desc' => 'Tokenizing real estate assets delivers substantial benefits for both property owners and investors:',
        'cards' => [
            [
                'title' => 'Enhanced Liquidity',
                'desc' => "Tokenization infuses real estate assets with high liquidity, facilitating efficient property transactions and quick conversions of asset values into cash.",
                'image' => 'asset-token/icons/liquidity.svg'
            ],
            [
                'title' => 'Fractional Ownership',
                'desc' => "Through tokenization, you can divide property ownership into fractions, alleviating the burdens of sole ownership and distributing responsibilities.",
                'image' => 'asset-token/icons/ownership.svg'
            ],
            [
                'title' => 'Global Reach',
                'desc' => 'Tokenization eliminates geographical constraints, allowing you to trade with global participants and significantly expanding your market opportunities.',
                'image' => 'asset-token/icons/global-network.svg'
            ],
            [
                'title' => 'Elimination of Intermediaries',
                'desc' => "Tokenized assets enable direct peer-to-peer transactions, removing intermediaries, reducing costs, and minimizing risks associated with traditional processes.",
                'image' => 'asset-token/icons/404-error.svg'
            ],
            [
                'title' => 'Blockchain Security',
                'desc' => "Blockchain integration ensures that once transactions are recorded, they remain immutable, safeguarding user and asset information against tampering.",
                'image' => 'asset-token/icons/blockchain.svg'
            ],
            [
                'title' => 'Swift, Efficient Transactions',
                'desc' => "Tokenization accelerates the traditionally lengthy real estate processes, enabling fast, efficient transactions across the globe.",
                'image' => 'asset-token/icons/exchange_2.webp'
            ],
            [
                'title' => 'Lower Entry Costs',
                'desc' => 'By subdividing tokens into smaller units, fractional ownership lowers investment barriers, making it accessible for smaller investors while allowing wealthier individuals to diversify their portfolios.',
                'image' => 'asset-token/icons/money-bag.svg'
            ],
            [
                'title' => 'Robust Security',
                'desc' => 'With decentralized control and advanced cryptographic measures like private keys, the system offers enhanced security, ensuring that no single entity has complete control.',
                'image' => 'asset-token/icons/shield1.svg'
            ],
            [
                'title' => 'Streamlined Management',
                'desc' => "Managing investor rights and tracking secondary transactions becomes effortless. Partnering with top third-party exchanges ensures prompt returns and allows investors to participate in platform governance through voting and decision-making.",
                'image' => 'asset-token/icons/administration.svg'
            ],
        ],
    ])

    <div class="technologies">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="sec_tit underline text-center">Build a Real Estate Tokenization Platform Like the Industry Leaders</h3>
                <p class="text-center  ">Real estate tokenization is rapidly emerging as a popular investment route within the decentralized economy, making it a lucrative business opportunity. By creating a platform similar to successful models in the market, you can quickly establish a prominent presence. </p>
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/blocksquare.png') }}" style="width: 64px;">
                        <p class=" ">Blocksquare</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/redswan.png') }}" style="width: 64px;">
                        <p class=" ">RedSwan</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/polymath.webp') }}">
                        <p class=" ">Polymath</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/brickblock.webp') }}">
                        <p class=" ">BrickBlock</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/harbor.webp') }}">
                        <p class=" ">Harbor</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/securitize.webp') }}"
                            style="filter: invert(1); width: 150px; margin-top:10px;">
                        <p class="mt-30">Securitize</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/propellr.png') }}" style="width: 64px;">
                        <p class=" ">Propellr</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/smartlands.png') }}" style="width: 64px;">
                        <p class=" ">Smartlands</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/tokeny.png') }}" style="width: 64px;">
                        <p class=" ">Tokeny Solutions</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/roofstock.png') }}" style="width: 64px;">
                        <p class=" ">Roofstock</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <style type="text/css">
        .nft_marketplace {
            overflow: hidden;
        }

        .nft_marketplace .icon {
            width: 7%;
            float: left;
        }

        .nft_marketplace .content {
            float: right;
            width: 90%;
        }

        .nft_marketplace h3 {
            font-size: 18px;
            margin-bottom: 5px;
            color: #000000;
            font-weight: 700;
        }

        .list_box h5 {
            background: #eee;
            padding: 4% 3%;
            text-align: center;
            justify-content: center;
            font-size: 15px !important;
            align-items: center;
            margin-bottom: 28px;
            border-radius: 5px;
            box-shadow: 1px 4px 10px #0000001f;
            color: #000000d1;

            letter-spacing: 0;
            line-height: 1.3;
        }

        .mt50 {
            margin-top: 50px !important;
        }
    </style>


    <section class="simple-slide" style="background: linear-gradient(140deg, #180134, #7723bb);">
        <div class="container">
            <h2 class="sec_tit underline text-center text-white">Real Estate Tokenization: Key Factors and Challenges</h2>
            <div class="card">
                <div class="products">
                    <div class="product active" product-id="1" product-color="#D18B49">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <img src="{{ asset('images/asset-token/real-estate-work.webp') }}" alt="Digitize Real Estate Asset"
                                    title="Factors to Consider While Digitizing an Asset"
                                    class="img-responsive box-shadow">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5 class="sec_tit underline text-center">Factors to Consider in Asset Digitization</h5>
                                <p>Several crucial aspects must be addressed when launching a tokenized real estate asset:</p>
                                <ul class="list-ico text-justify">
                                    <li>
                                        <p><strong>Investor Rights:</strong>Clearly define the type of interest or ownership rights that investors receive through the tokens.</p>
                                    </li>
                                    <li>
                                        <p><strong>Regulatory Compliance:</strong>Adhere to applicable security laws and regulations, which can vary based on the geographical location.</p>
                                    </li>
                                    <li>
                                        <p><strong>Corporate Structuring:</strong>Establish a corporate code for entity formation and operational governance.</p>
                                    </li>
                                    <li>
                                        <p><strong>Mortgage Considerations:</strong>Address any existing mortgages or financial encumbrances related to the properties.</p>
                                    </li>
                                    <li>
                                        <p><strong>Sales Regulations:</strong>Follow specific guidelines for both domestic and international token sales.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product" product-id="2" product-color="#542F13">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <img src="{{ asset('images/asset-token/Real-Estate-Tokenization.webp') }}"
                                    alt="How to Digitize Real Estate Asset" title="How to Digitize Real Estate Asset"
                                    class="img-responsive box-shadow">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5 class="sec_tit underline text-center">Legal and Practical Issues in Real Estate Tokenization</h5>
                                <p></p>
                                <ul class="list-ico text-justify">
                                    <p>Navigating legal and operational complexities is essential in tokenizing real estate:</p>
                                    <li>
                                        <p><strong>Regulatory Adherence:</strong>Strictly comply with government regulations, especially those related to KYC/AML processes for investors.</p>
                                    </li>
                                    <li>
                                        <p><strong>Lack of Uniformity:</strong>The absence of global regulatory standards for cryptocurrencies and tokens poses challenges for verifying ownership.</p>
                                    </li>
                                    <li>
                                        <p><strong>Token Classification:</strong>Ensure that tokens are appropriately recognized, either as shares in a Special Purpose Vehicle (SPV) or as claims to property cash flows.</p>
                                    </li>
                                    <li>
                                        <p><strong>Regulatory Alignment:</strong>Real estate tokenization requires adherence to established laws and cannot rely on self-regulation, which could lead to centralization issues.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product" product-id="3" product-color="#542F13">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <img src="{{ asset('images/asset-token/Real-Estate-Investment.webp') }}"
                                    alt="The scope of Real Estate Investment Tokens"
                                    title="The scope of Real Estate Investment Tokens"
                                    class="img-responsive box-shadow">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5 class="sec_tit underline text-center">Investment Opportunities</h5>
                                <ul class="list-ico text-justify">
                                    <p>Maximize your investment potential with our robust and legally compliant token structures, adaptable across various blockchain platforms. Our dedicated team of over 400 experts is committed to facilitating your fundraising efforts within the bounds of legal regulations.</p>
                                    <li>
                                        <p><strong>Versatile Blockchain Integration:</strong>Deploy token structures on Ethereum, Hyperledger, or Stellar. </p>
                                    </li>
                                    <li>
                                        <p><strong>Expert Blockchain and Smart Contract Development:</strong>Leverage our deep expertise in blockchain technologies and smart contract creation.</p>
                                    </li>
                                    <li>
                                        <p><strong>Market Insights:</strong>Benefit from our comprehensive understanding of market requirements.</p>
                                    </li>
                                    <li>
                                        <p><strong>Complete Tokenization Solutions:</strong>Access end-to-end securitized real estate tokenization services.</p>
                                    </li>
                                    <li>
                                        <p><strong>Seasoned Advisors:</strong>Work with our experienced technology, legal, and financial advisors for a seamless process.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <a class="btn" id="prev" href="#" ripple ripple-color="#666666">Prev</a>
                    <a class="btn" id="next" href="#" ripple ripple-color="#666666">Next</a>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        .list-ico li p {
            margin-bottom: 0.5em;
            margin-top: 0.5em;
        }

        .list-ico li {
            filter: hue-rotate(120deg);
        }

        .simple-slide {
            padding: 60px 0 30px 0;
        }

        .simple-slide .btn {
            border-radius: 2px;
            padding: 8px 12px;
            color: #744aed;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            text-transform: uppercase;
            transition: 0.5s ease;
        }

        .simple-slide .card {
            background: #FFFFFF;
            /*max-width: 400px;*/
            margin: 0px auto 30px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            box-sizing: border-box;
            padding: 30px;
            text-align: center;
        }

        .simple-slide .products {
            position: relative;
            overflow: hidden;
            transition: 0.5s ease;
        }

        .simple-slide .product {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            visibility: hidden;
            transition: 0.5s ease;
        }

        .simple-slide .product.active {
            opacity: 1;
            visibility: visible;
        }

        .simple-slide .thumbnail {
            margin: 0 0 48px;
        }

        .simple-slide .title {
            margin: 0 0 12px;
            color: #D18B49;
            font-size: 24px;
            transition: 0.5s ease;
        }

        .simple-slide .description {
            margin: 0 0 48px;
        }

        .simple-slide .footer {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 30px -12px -12px;
            padding: 0;
        }

        [ripple] {
            z-index: 1;
            position: relative;
            overflow: hidden;
        }

        [ripple] .ripple {
            position: absolute;
            background: #FFFFFF;
            width: 60px;
            height: 60px;
            border-radius: 100%;
            transform: scale(0);
            -webkit-animation: ripple 2s;
            animation: ripple 2s;
            pointer-events: none;
            z-index: 2;
        }

        @-webkit-keyframes ripple {
            0% {
                transform: scale(0);
                opacity: 0.2;
            }

            100% {
                transform: scale(20);
                opacity: 0;
            }
        }

        @keyframes ripple {
            0% {
                transform: scale(0);
                opacity: 0.2;
            }

            100% {
                transform: scale(20);
                opacity: 0;
            }
        }
    </style>
    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            var getProductHeight = $('.product.active').height();

            $('.products').css({
                height: getProductHeight
            });

            function calcProductHeight() {
                getProductHeight = $('.product.active').height();

                $('.products').css({
                height: getProductHeight
                });
            }
            
            var productItem = $('.product'),
                productCurrentItem = productItem.filter('.active');

            $('#next').on('click', function(e) {
                alert("hello");
                e.preventDefault();

                var nextItem = productCurrentItem.next();

                productCurrentItem.removeClass('active');

                if (nextItem.length) {

                productCurrentItem = nextItem.addClass('active');
                } else {
                productCurrentItem = productItem.first().addClass('active');
                }

                calcProductHeight();
                animateContentColor();
            });

            $('#prev').on('click', function(e) {
                e.preventDefault();

                var prevItem = productCurrentItem.prev();

                productCurrentItem.removeClass('active');

                if (prevItem.length) {
                productCurrentItem = prevItem.addClass('active');
                } else {
                productCurrentItem = productItem.last().addClass('active');
                }

                calcProductHeight();
                animateContentColor();
            });

            // Ripple
            $('[ripple]').on('click', function(e) {
                var rippleDiv = $('<div class="ripple" />'),
                rippleSize = 60,
                rippleOffset = $(this).offset(),
                rippleY = e.pageY - rippleOffset.top,
                rippleX = e.pageX - rippleOffset.left,
                ripple = $('.ripple');

                rippleDiv.css({
                top: rippleY - (rippleSize / 2),
                left: rippleX - (rippleSize / 2),
                background: $(this).attr("ripple-color")
                }).appendTo($(this));

                window.setTimeout(function() {
                rippleDiv.remove();
                }, 1900);
            });
        });
    </script>


    <style type="text/css">
        .list {
            margin-top: 0rem;
            margin-bottom: 0rem !important;
            font-size: 14px;
            line-height: 1.6;
            text-indent: -27px;
            list-style: none;
        }

        .list li {
            word-break: break-word;
        }

        .list li:before {
            content: " \f0a9 ";
            font-family: FontAwesome;
            color: #744aed;
            margin-right: 10px;
            font-size: 20px;
        }
    </style>

    <section class="integration">
        <div class="container container-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Real Estate NFT Marketplace: Redefining Real Estate Investments</h2>
                    <p>A real estate NFT marketplace harnesses blockchain technology to tokenize unique property assets as NFTs. Each NFT signifies ownership of a specific property, with its value securely recorded on the blockchain. This groundbreaking approach revolutionizes real estate transactions by enabling fractional ownership and facilitating seamless property trades. The platform provides a digital ecosystem where buyers and sellers can interact, trade, and invest in real estate NFTs with unparalleled ease, efficiency, and transparency.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
                <div class="integration-items">
                    <div class="icons"> <img class="lazy" src="{{ asset('images/asset-token/icons/investor.webp') }}"></div>
                    <p>Investors can acquire fractions of high-value properties, lowering entry barriers and enabling diversified portfolios.</p>
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
                <div class="integration-items">
                    <div class="icons"> <img class="lazy" src="{{ asset('images/asset-token/icons/nft.webp') }}"
                            style="width:54px;"> </div>
                    <p>NFTs streamline property trading, boosting liquidity in the real estate market.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
                <div class="integration-items">
                    <div class="icons"> <img class="lazy" src="{{ asset('images/asset-token/icons/international-fund.webp') }}"
                            style="width:54px;"> </div>
                    <p>Investors globally can engage in cross-border property transactions, extending market reach.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
                <div class="integration-items">
                    <div class="icons"> <img class="lazy" src="{{ asset('images/asset-token/icons/interest.webp') }}"
                            style="width:54px;"> </div>
                    <p>Real estate NFTs introduce new investment opportunities and exposure to the burgeoning digital asset class.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
                <div class="integration-items">
                    <div class="icons"> <img class="lazy" src="{{ asset('images/asset-token/icons/transaction-fees.webp') }}"
                            style="width:54px;"> </div>
                    <p>The removal of traditional intermediaries results in reduced transaction fees and minimized administrative complexities.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="perfect-script common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="common_h3 text-center font-wei">Why Choose Blockchain App Factory<br> as Your Real
                            Estate Tokenization Development Company? </h2>
                        <hr class=" ">
                        <p class="text-center">Choosing Blockchain App Factory means partnering with a company that
                            combines technical expertise, customized solutions, and a commitment to excellence in real
                            estate tokenization. When selecting a real estate tokenization development company,
                            Blockchain App Factory stands out for several reasons:</p>
                    </div>
                </div>
            </div>
            <div class="row mt-20">
                <div class="container container-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto equalize">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" data-src="images/asset-token/icons/blockchain.webp">
                            </div>
                            <div class="content">
                                <p><strong>Expertise in Blockchain Technology</strong>Blockchain App Factory has
                                    extensive experience in blockchain technology, ensuring that they are well-equipped
                                    to handle the complexities of real estate tokenization.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto equalize">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" data-src="images/asset-token/icons/customize.webp">
                            </div>
                            <div class="content">
                                <p><strong>Customized Solutions</strong>They offer tailored solutions to meet the
                                    specific needs of clients, whether it's for residential, commercial, or mixed-use
                                    real estate tokenization.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto equalize">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" data-src="images/asset-token/icons/compliance.webp">
                            </div>
                            <div class="content">
                                <p><strong>Regulatory Compliance</strong>The company stays updated with the latest
                                    regulations and compliance requirements, helping clients navigate the legal
                                    landscape of tokenized real estate.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto equalize">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" data-src="images/asset-token/icons/integration.webp">
                            </div>
                            <div class="content">
                                <p><strong>End-to-End Services</strong>Blockchain App Factory provides comprehensive
                                    services, including token creation, smart contract development, platform
                                    integration, and ongoing support.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto equalize">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" data-src="images/asset-token/icons/security.webp">
                            </div>
                            <div class="content">
                                <p><strong>Advanced Security Measures</strong>They implement robust security protocols
                                    to safeguard against cyber threats and ensure the integrity of the tokenized assets.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto equalize">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" data-src="images/asset-token/icons/scalability.webp">
                            </div>
                            <div class="content">
                                <p><strong>Innovative Technology</strong>Their use of cutting-edge technology and best
                                    practices in blockchain development ensures high performance and scalability of
                                    tokenized real estate platforms.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto equalize">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" data-src="images/asset-token/icons/tracking.webp">
                            </div>
                            <div class="content">
                                <p><strong>Proven Track Record</strong>The company has a history of successful projects
                                    and satisfied clients, demonstrating their capability to deliver high-quality
                                    results.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto equalize">
                        <div class="perfect-script-items1">
                            <div class="icon">
                                <img class="lazy" data-src="images/asset-token/icons/support.webp">
                            </div>
                            <div class="content">
                                <p><strong>Dedicated Support</strong>Blockchain App Factory offers ongoing support and
                                    maintenance, ensuring that the tokenization platform remains functional and
                                    up-to-date.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center cta_mine txt">
                <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                    target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
                <a rel="nofollow" href="#newsletter-form-sec"
                    class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with our
                        Experts</span></a>
            </div>
        </div>
        </div>
    </section> --}}
    {{-- <div class=" common_spacing " id="business">
        <div class="container">
            <div class="section-title text-center m-b-30">
                <h4 class="common_h3 sec-tit">Our Guides</h4>
                <hr>
            </div>
            <div class="row container-center">
                <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="blog-box mb40 indus-box">
                        <div class="blog-img-box">
                            <a href="https://www.blockchainappfactory.com/real-estate-tokenization-essential-guide"
                                target="_blank"
                                style="background-image: url(https://www.blockchainappfactory.com/images/real-estate-tokenization-essential-guide/banner-img.webp);"
                                class="indus-img"></a>
                        </div>
                        <div class="indus-box-content">
                            <h5 class="mt20 blog-title">Real Estate Tokenization: An Essential Guide for Everyone!</h5>

                            <a href="https://www.blockchainappfactory.com/real-estate-tokenization-essential-guide"
                                target="_blank"><strong> Read More... </strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="blog-box mb40 indus-box">
                        <div class="blog-img-box">
                            <a href="https://www.blockchainappfactory.com/how-to-launch-crypto-token" target="_blank"
                                style="background-image: url(https://www.blockchainappfactory.com/images/how-to-launch-crypto-token/banner-img.webp);"
                                class="indus-img"></a>
                        </div>
                        <div class="indus-box-content">
                            <h5 class="mt20 blog-title">How to Launch a Token on Any Blockchain?</h5>
                            <a href="https://www.blockchainappfactory.com/how-to-launch-crypto-token"
                                target="_blank"><strong> Read More... </strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="blog-box mb40 indus-box">
                        <div class="blog-img-box">
                            <a href="https://www.blockchainappfactory.com/decentralized-stable-coin-development"
                                target="_blank"
                                style="background-image: url(https://www.blockchainappfactory.com/images/stable/banner-img.webp"
                                class="indus-img"></a>
                        </div>
                        <div class="indus-box-content">
                            <h5 class="mt20 blog-title">Decentralized Stablecoin Development: A Detailed Guide to Launch
                                Your Own Stablecoin</h5>
                            <a href="https://www.blockchainappfactory.com/decentralized-stable-coin-development"
                                target="_blank"><strong> Read More... </strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="blog-box mb40 indus-box">
                        <div class="blog-img-box">
                            <a href="https://www.blockchainappfactory.com/how-to-build-your-own-altcoin" target="_blank"
                                style="background-image: url(https://www.blockchainappfactory.com/images/how-to-build-your-own-altcoin.jpg"
                                class="indus-img"></a>
                        </div>
                        <div class="indus-box-content">
                            <h5 class="mt20 blog-title">How To Create Your Ideal Altcoin – A Complete Guide</h5>
                            <a href="https://www.blockchainappfactory.com/how-to-build-your-own-altcoin"
                                target="_blank"><strong> Read More... </strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="blog-box mb40 indus-box">
                        <div class="blog-img-box">
                            <a href="https://www.blockchainappfactory.com/crypto-earned-media" target="_blank"
                                style="background-image: url(https://www.blockchainappfactory.com/images/crypto-earned-media/banner-img.webp"
                                class="indus-img"></a>
                        </div>
                        <div class="indus-box-content">
                            <h5 class="mt20 blog-title">Crypto Earned Media: A Guide to Organically Promote Your Project
                                in the Web3 Realm!</h5>
                            <a href="https://www.blockchainappfactory.com/crypto-earned-media" target="_blank"><strong>
                                    Read More... </strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="blog-box mb40 indus-box">
                        <div class="blog-img-box">
                            <a href="https://www.blockchainappfactory.com/crypto-bull-run-2024" target="_blank"
                                style="background-image: url(https://www.blockchainappfactory.com/images/crypto-bull-run-2024/banner-img.webp"
                                class="indus-img"></a>
                        </div>
                        <div class="indus-box-content">
                            <h5 class="mt20 blog-title">Crypto Bull Run 2024: A Comprehensive Guide Projecting Expert
                                Insights!</h5>
                            <a href="https://www.blockchainappfactory.com/crypto-bull-run-2024" target="_blank"><strong>
                                    Read More... </strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="product-section fag_sec p-50 gray_bg">
        <div class="container">
            <div class="section-top ">
                <div class="section-header text-center ">
                    <h3 class="section-title mt20 underline font-wei">FAQ</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="faq-content">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#faq1">
                                            <span>What is Real Estate Tokenization?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq1" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body"> Real estate tokenization involves creating a digital token
                                        on a blockchain that represents ownership or a share of a real estate asset.
                                        This process converts physical real estate into digital tokens, allowing for
                                        easier and more flexible ownership, trading, and investment. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq2">
                                            <span>How does Real Estate Tokenization work?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq2" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <strong>1. Asset Identification:</strong> A real estate asset is identified and
                                        evaluated for tokenization.<br>
                                        <strong>2. Legal Structuring:</strong> Legal structures are set up to ensure
                                        compliance with regulations.<br>
                                        <strong>3. Token Creation:</strong> Digital tokens are created on a blockchain
                                        platform, each representing a share in the property.<br>
                                        <strong>4. Token Sale/Distribution:</strong> Tokens are sold or distributed to
                                        investors, who now hold fractional ownership of the asset.<br>
                                        <strong>5. Management and Trading:</strong> Investors can manage their holdings,
                                        and tokens can be traded on secondary markets.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq3">
                                            <span>What are the benefits of real estate tokenization?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq3" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <strong>Increased Liquidity:</strong> Tokenization makes it easier to buy and
                                        sell real estate shares, enhancing liquidity.<br>
                                        <strong>Fractional Ownership:</strong> Investors can buy fractions of a
                                        property, lowering the barrier to entry.<br>
                                        <strong>Global Reach:</strong> Investors from around the world can participate
                                        in real estate markets.<br>
                                        <strong>Transparency:</strong> Blockchain provides a transparent and immutable
                                        record of ownership and transactions.<br>
                                        <strong>Efficiency:</strong> The process reduces paperwork and speeds up
                                        transactions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq4">
                                            <span>What are the risks associated with real estate tokenization?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq4" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <strong>Regulatory Uncertainty:</strong> The legal framework for tokenized real
                                        estate is still evolving, which can pose risks.<br>
                                        <strong>Market Volatility:</strong> The value of tokens can be subject to market
                                        fluctuations.<br>
                                        <strong>Technology Risks:</strong> Issues related to blockchain technology, such
                                        as smart contract bugs, can affect investments.<br>
                                        <strong>Fraud Risk:</strong> There is potential for fraudulent schemes, so due
                                        diligence is crucial.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq5">
                                            <span>How is ownership verified in real estate tokenization?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq5" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body"> Ownership is verified through the blockchain ledger, which
                                        records all transactions and ownership changes. Each token corresponds to a
                                        share of the asset, and the blockchain ensures that ownership is accurately
                                        tracked and immutable.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq6">
                                            <span>Are there any legal considerations for real estate
                                                tokenization?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq6" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body"> Yes, legal considerations include compliance with
                                        securities regulations, property laws, and anti-money laundering (AML)
                                        requirements. It's important to work with legal experts to ensure that all
                                        aspects of tokenization are legally compliant.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq7">
                                            <span>Can tokenized real estate be used for rental income?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq7" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">Yes, tokenized real estate can generate rental income, which
                                        is then distributed to token holders based on their share of ownership. The
                                        distribution process is typically automated through smart contracts. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq8">
                                            <span> How does one invest in tokenized real estate? </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq8" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">To invest in tokenized real estate, you need to:
                                        <ul style="list-style-type:disc;">
                                            <li><strong>Find a Platform:</strong> Locate a platform offering tokenized
                                                real estate investments.</li>
                                            <li><strong>Create an Account:</strong> Register and complete the KYC (Know
                                                Your Customer) process.</li>
                                            <li><strong>Choose an Investment:</strong> Select the property or tokenized
                                                asset you want to invest in.</li>
                                            <li><strong>Purchase Tokens:</strong> Buy the tokens representing a share of
                                                the real estate asset.</li>
                                            <li><strong>Manage Investment:</strong> Monitor your investment and receive
                                                dividends or rental income as applicable.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq9">
                                            <span> What is the future of real estate tokenization? </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq9" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">The future of real estate tokenization looks promising with
                                        advancements in blockchain technology and increasing acceptance of digital
                                        assets. It is expected to revolutionize real estate investing by enhancing
                                        liquidity, transparency, and accessibility.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq10">
                                            <span>What types of real estate assets can be tokenized?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq10" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body"> Virtually any type of real estate asset can be tokenized,
                                        including:
                                        <ul style="list-style-type:disc;">
                                            <li><strong>Residential Properties:</strong> Single-family homes,
                                                apartments, and condominiums.</li>
                                            <li><strong>Commercial Properties:</strong> Office buildings, retail spaces,
                                                and industrial properties.</li>
                                            <li><strong>Mixed-Use Properties:</strong> Buildings that combine
                                                residential, commercial, and/or retail spaces.</li>
                                            <li><strong>Land:</strong> Vacant land and development sites.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq11">
                                            <span>How does real estate tokenization impact property management? </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq11" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Real estate tokenization doesn’t directly impact property management but can
                                        streamline processes related to ownership and financial transactions. Property
                                        management tasks such as maintenance, tenant relations, and operational
                                        oversight remain unchanged, but financial aspects like revenue distribution and
                                        investment tracking are handled more efficiently through blockchain technology.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq12">
                                            <span>Are tokenized real estate investments regulated? </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq12" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Yes, tokenized real estate investments are subject to regulatory oversight,
                                        which varies by jurisdiction. Regulations may involve securities laws, property
                                        laws, and financial regulations. It is crucial for platforms and investors to
                                        comply with local regulations and ensure legal and regulatory adherence.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq13">
                                            <span>How are tokenized real estate investments taxed?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq13" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Taxation on tokenized real estate investments follows the same principles as
                                        traditional real estate investments, though specific regulations may vary by
                                        country. Investors may be subject to capital gains tax, rental income tax, and
                                        other relevant taxes. It’s important to consult with tax professionals to
                                        understand the tax implications.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq14">
                                            <span>What is a smart contract, and how does it relate to real estate
                                                tokenization?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq14" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        A smart contract is a self-executing contract with the terms written into code.
                                        In real estate tokenization, smart contracts automate the processes of buying,
                                        selling, and managing tokens, as well as distributing rental income or
                                        dividends. They ensure that transactions are executed according to predefined
                                        rules without the need for intermediaries.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq15">
                                            <span>How are disputes resolved in tokenized real estate investments?</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq15" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Dispute resolution in tokenized real estate investments typically involves a
                                        combination of legal mechanisms and platform-specific procedures. Platforms may
                                        have built-in arbitration mechanisms or use third-party services to handle
                                        disputes. Legal recourse may also be available through traditional courts
                                        depending on the nature of the dispute.
                                    </div>
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
                'ques' => 'What is Real Estate Tokenization?',
                'ans' => 'Real estate tokenization is the process of converting property ownership into digital tokens on a blockchain. Each token represents a share of the property, enabling fractional ownership and simplified transactions.'
            ],
            [
                'ques' => 'How does Real Estate Tokenization work?',
                'ans' => 'Real estate tokenization involves creating digital tokens that represent ownership shares in a property. These tokens are issued on a blockchain, facilitating easier buying, selling, and trading of property interests.'
            ],
            [
                'ques' => 'How is Blockchain used in Real Estate?',
                'ans' => 'Blockchain is utilized in real estate to securely record property transactions, ensuring transparency and immutability. It also enables the fractional ownership and efficient transfer of real estate assets through digital tokens.'
            ],
            [
                'ques' => 'What is the Cost for Tokenizing Real Estate?',
                'ans' => 'The cost of tokenizing real estate varies depending on factors such as property size, complexity, and regulatory requirements. It generally includes fees for blockchain development, legal compliance, and token management.'
            ],
            [
                'ques' => 'How to Tokenize Your Real Estate?',
                'ans' => 'To tokenize your real estate, first, consult with experts to define your token structure and compliance requirements. Then, develop the necessary smart contracts, create and issue the tokens, and list them on appropriate platforms.'
            ],
            [
                'ques' => 'What is a Tokenized Real Estate Asset?',
                'ans' => "A tokenized real estate asset is a property represented by digital tokens on a blockchain. These tokens allow fractional ownership and can be traded or sold, providing liquidity and broader market access."
            ],
            [
                'ques' => 'What types of real estate assets can be tokenized?',
                'ans' => 'Almost any real estate asset can be tokenized, including residential properties, commercial buildings, land, and high-value properties like luxury estates. Tokenization facilitates fractional ownership and broader investment opportunities.'
            ],
            [
                'ques' => 'What are the benefits of real estate tokenization?',
                'ans' => 'Real estate tokenization offers increased liquidity, fractional ownership, and easier access to investment opportunities. It also reduces transaction costs and enhances transparency in property transactions.'
            ],
            [
                'ques' => 'What are the key benefits of tokenizing real estate using blockchain technology?',
                'ans' => 'Tokenizing real estate with blockchain technology improves transaction efficiency, ensures transparency and security, reduces reliance on intermediaries, and allows for fractional ownership, making real estate investment more accessible.'
            ],
        ],
    ])
    </div>
    <script src="js/jquery.min.js" type="67694e2e9e29d7ba920551bf-text/javascript"></script>
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
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
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
        (function($) {
        $.fn.countTo = function(options, viewCounter) {
            if(viewCounter == 1) {
                options = options || {};
                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
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
                    if(data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);
                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;
                        render(value);
                        if(typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }
                        if(loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;
                            if(typeof(settings.onComplete) == 'function') {
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
            from: 0, // the number the element should start at
            to: 0, // the number the element should end at
            speed: 3000, // how long it should take to count between the target numbers
            refreshInterval: 100, // how often the element should be updated
            decimals: 0, // the number of decimal places to show
            formatter: formatter, // handler for formatting the value before rendering
            onUpdate: null, // callback method for every time the element is updated
            onComplete: null // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));
    jQuery(function($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function(value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });
        // start all the timers
        var viewCounter = 0;
        $(document).on('scroll', function() {
            if($('.timer').each(count).isOnScreen() && viewCounter < 2) {
                viewCounter++;
                console.log(viewCounter);
            }
        });

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options, viewCounter);
        }
    });
    // check if element visible in viewport
    $.fn.isOnScreen = function() {
        var win = $(window);
        var viewport = {
            top: win.scrollTop(),
            left: win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();
        var bounds = this.offset();
        //bounds.right = bounds.left + this.outerWidth();
        //bounds.bottom = bounds.top + this.outerHeight();
        return(!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };
    </script>
    <script src="js/vendor.js" type="67694e2e9e29d7ba920551bf-text/javascript"></script>
    <script src="js/plugins.js" type="67694e2e9e29d7ba920551bf-text/javascript"></script>
    <script src="js/main.js" type="67694e2e9e29d7ba920551bf-text/javascript"></script>
    <script src="build/js/intlTelInput.js" type="67694e2e9e29d7ba920551bf-text/javascript"></script>
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
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
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
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
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
        $('.view_pricing').click(function() {
        $('html, body').animate({
            scrollTop: $('#pricing-section').offset().top
        }, 2000);
    });
    </script>
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
        var url = window.location.href;
    $('#url').val(url);
    </script>
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
        $(".pricing-body").mCustomScrollbar({
        theme: "minimal"
    });
    </script>
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
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
    </style>

    <a class="sticky_form_bp color-btn1 hidden-lg"
        href="https://www.blockchainappfactory.com/create-your-own-token-and-coin"
        style="color:#fff !important;">Contact to Create a Token! </a>
    <div class="sticky-form">
        <div class="formdiv">
            <form class="form-side" id="mailForm_sticky" method="post" action>
                <h4>Connect With Us</h4> <button type="button" class="close" aria-label="Close quick contact"><i
                        class="fa fa-times-circle" aria-hidden="true"></i></button>
                <hr>
                <div class="form-group"><label for="name">Name</label><input type="text" class="form-control"
                        name="name" id="name_sticky" placeholder="Your Name"> </div>
                <div class="form-group"><label for="email">Email Address</label><input type="email" class="form-control"
                        name="email" id="email_sticky" placeholder="Your Email"> </div>
                <div class="form-group"><label for="skype">Skype</label><input type="text" class="form-control"
                        name="skype" id="skype_sticky" placeholder="Your Skype"> </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input id="phone_sticky" name="phone_dummy" type="text" required
                        oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        data-cf-modified-67694e2e9e29d7ba920551bf->
                    <input type="hidden" name="phone" id="phone_newsletter">
                    <input type="hidden" name="url" id="url" value="/real-estate-tokenization">
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
    <script type="67694e2e9e29d7ba920551bf-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
    <script type="67694e2e9e29d7ba920551bf-text/javascript"
        src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
        media="screen">
    <script type="67694e2e9e29d7ba920551bf-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
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

    <script type="67694e2e9e29d7ba920551bf-text/javascript">
        window.__lc = window.__lc || {};
    window.__lc.license = 9464790;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <script type="67694e2e9e29d7ba920551bf-text/javascript">
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


    <style type="text/css">
        @media (min-width: 320px) and (max-width: 768px) {
            /*.openbtn1{width: 70px !important; top: 21% !important;}*/
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
    <script type="67694e2e9e29d7ba920551bf-text/javascript">
        /* Set the width of the sidebar to 250px (show it) */
function openNav4() {
  document.getElementById("mySidepanel4").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav4() {
  document.getElementById("mySidepanel4").style.width = "0";
}
    </script>




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
                <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    target="blank">
                    <div class="icons"><img src="https://www.blockchainappfactory.com/images/appointment.webp"></div>

                </a>
            </div>
            <div class="items">
                <a rel="nofollow" href="https://t.me/amarbaf" target="blank">
                    <div class="icons"><i class="fa fa-paper-plane"></i></div>

                </a>
            </div>

        </div>
    </div>




    <script type="67694e2e9e29d7ba920551bf-text/javascript">
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


    <script type="67694e2e9e29d7ba920551bf-text/javascript">
        $(".crypto-popup").click(function(e) {
        $('crypto-popup').addClass('fixedPosition full-width');
        $(".login-popup").addClass('show');
        e.stopPropagation();
    });
    </script>

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="67694e2e9e29d7ba920551bf-|49" defer></script>
</body>

@endsection