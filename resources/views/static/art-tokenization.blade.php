@extends('layouts.static')
    @section('title', 'Art Tokenization')
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
        padding-top: 50px;
    }

    .magic {
        margin-top: 50px;
        margin-bottom: 20px;
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


    /*------------ Tech Stack -----------*/
    .tech-stack {
        padding: 60px 0px;
    }

    .tech-stack ul {
        display: flex;
        padding: 10px;
        justify-content: center;
        flex-wrap: wrap;
        background: #fff;
        margin-bottom: 10px;
    }

    .tech-stack .nav-stacked>li {
        background: #0b4599;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
        text-align: center;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(to right, #00aaff, #3a5be4);
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

    .technology ul li p {
        margin-bottom: 0
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
        filter: invert(0);
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
        filter: invert(0);
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
                        class="btn" data-cf-modified-506f2a5a6bdc5c470b7a30ee->Submit</button>
                </form>
                <div class="social">

                    <a rel="nofollow" aria-label="calendly" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calender" aria-hidden="true"
                            title="calendly"></i> Schedule A Meeting &nbsp;</a>
                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#f69f989099b6949a99959d959e979f989786869097958299848fd895999b"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="506f2a5a6bdc5c470b7a30ee-text/javascript">
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
                                            <h1 itemprop="name">Art Token Development</h1>

                                        </div>
                                        <p itemprop="text"
                                            style="line-height: 1.6;font-size: 21px; font-weight:normal;">
                                            Transform Art into Digital Assets within Legal Boundaries
                                        </p>
                                        <div class="txt">
                                            <a rel="nofollow" href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important; margin-left: 0px !important;">BOOK A CONSULTATION CONNECT WITH OUR SPECIALISTS</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 hidden-sm col-xs-12 text-center"> <img class="magic"
                                src="{{ asset('images/art-tokenization/banner-img.webp') }}" alt=" " title=" "> </div>
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

    <section class="common_spacing" id="01">
        <div class="container">
            <div class="row">
                <h2 class="text-center sec_tit underline" style="width: 100%">Art Tokenization Revolution: Comprehensive Platform for the Art Sector</h2>
                <p class="text-center">Unlock the power of tokenized art with our all-inclusive solution designed for the art industry. We guide you through every step—technology integration, legal compliance, and auditing processes—to secure capital for acquiring artwork. Our tokens adhere to global regulations, with compliance built directly into our smart contracts.</p><br>
                <p class="text-center">We deliver a full suite of services, including thorough due diligence, meticulous auditing, and expert legal assistance to assess the value of your artwork and determine your token's worth. Leveraging advanced blockchain technology, we create art tokens that enable investors to receive dividends or interest.</p><br>
                <p class="text-center">Additionally, our Crowdfunding Art Tokenization Platform facilitates the transformation of galleries into tokenized assets, supporting liquidity and fundraising for future growth and acquisitions.</p>
                <div class="clearfix"></div>
                {{-- <div class="text-center cta_mine txt">
                    <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                        target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
                    <a rel="nofollow" href="#newsletter-form-sec"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with
                            our Experts</span></a>
                </div> --}}
            </div>
        </div>
    </section>

    <div id="our_services" class="defisec gray_bg">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="common_h3 title-th sec_tit">Art Investment Token Opportunities</h3>
                <hr>
                {{-- <p>Discover the transformative impact of Art Investment Tokens. Explore how tokenization democratizes
                    art ownership, enhances liquidity, and opens new opportunities in the art market.</p> --}}
            </div>
            <div class="grids container-center">
                <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="feature-box-3">
                        <div class="icon"> <img src="{{ asset('images/art-tokenization/icons/commercial-trade.webp') }}" alt=" "
                                class="lazy" width="45px;"> </div>
                        <h4 class="feature-title common_h4">Gallery Tokenization</h4>
                        <p class="feature-desc mb0">Transform commercial galleries by fractionalizing ownership of their collections. Our process adheres to regulatory standards, providing a secure and compliant method for sharing ownership of artworks.</p>
                    </div>
                </div>
                <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="feature-box-3">
                        <div class="icon"><img src="{{ asset('images/art-tokenization/icons/art.webp') }}" alt=" " class="lazy"
                                width="45px;"> </div>
                        <h4 class="feature-title common_h4">Single Artwork Tokenization</h4>
                        <p class="feature-desc mb0">Tokenize individual pieces of art to attract crowdfunding for additional acquisitions or project funding. This approach provides a streamlined way to generate capital and support your art-related endeavors.</p>
                    </div>
                </div>
                <div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="feature-box-3">
                        <div class="icon"> <img src="{{ asset('images/art-tokenization/icons/trophy.png') }}" alt=" " class="lazy"
                                width="45px;"></div>
                        <h4 class="feature-title common_h4">Trophy Artwork Tokenization</h4>
                        <p class="feature-desc mb0">Monetize prestigious artworks and raise funds through a secure and transparent ledger. This method allows you to liquidate valuable pieces while maintaining compliance and security throughout the transaction.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="text-center cta_mine txt">
                <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                    target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
                <a rel="nofollow" href="#newsletter-form-sec"
                    class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with our
                        Experts</span></a>
            </div> --}}
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

    /*.awesome-features-wrapper::before {
                background: #744aed;
                height: 20px;
                width: 3px;
                content: "";
                position: absolute;
                left: -2px;
                top: 65px;
            }
            
            .awesome-features-wrapper::after {
                background: #744aed;
                height: 50px;
                width: 3px;
                content: "";
                position: absolute;
                left: -2px;
                top: 94px;
            }*/

    /*.awesome-features-icon-img {
                padding-left: 40px;
                margin-bottom: 22px;
                font-size: 40px;
                color: #744aed;
            }*/

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
    }
</style>

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


<section class="common_spacing" id="01">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="lazy" src="{{ asset('images/art-tokenization/img-2.png') }}" style="width: 300px">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h4 class="text-left sec_tit underline">Innovative Art Token Strategies for Global Investment</h4>
                <p class="text-left">Tokenizing art is transforming global investment and collection practices for art enthusiasts. Leveraging blockchain technology, our strategy is crafted with insights from blockchain developers, legal experts, and financial advisors. We streamline both the legal and practical complexities with a dedicated team of legal, financial, and blockchain professionals, alongside art aficionados, to ensure your tokens comply with all regulations.
                </p><br>
                <p class="text-left">Our developers engage closely with experts in crowdfunding, securities, tax/accounting, and art to guide the tokenization process. These specialists support our development efforts, ensuring that you can secure funding within the boundaries of regulatory frameworks.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="technologies">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="sec_tit underline text-center">Art Tokenization Strategic Checklist</h3>
            <ul>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/tokens-1.webp') }}"
                        style="width: 64px; filter: brightness(0);">
                    <p class=" ">Token Architecture</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/smart-contracts.webp') }}"
                        style="width: 64px;">
                    <p class=" ">Smart Contract Development</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/interest.webp') }}" style="width: 64px;">
                    <p class=" ">Interest Types</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/legal.webp') }}" style="width: 64px;">
                    <p class=" ">Legal Structures</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/law-1.webp') }}"
                        style="filter: brightness(0); width: 64px;">
                    <p class=" ">Securities Compliance</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/buildings.webp') }}"
                        style="filter: invert(1);  width: 64px;">
                    <p class>Corporate Governance</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/art-1.webp') }}" style="width: 64px;">
                    <p class=" ">Artwork Classification</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/location.webp') }}" style="width: 64px;">
                    <p class=" ">Artwork Location</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/ratio.webp') }}" style="width: 64px;">
                    <p class=" ">Token-to-Art Ratio</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/investor.webp') }}" style="width: 64px;">
                    <p class=" ">Investor Tracking</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/kyc.webp') }}" style="width: 64px;">
                    <p class=" ">Automated KYC/AML Procedures</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/verification.webp') }}" style="width: 64px;">
                    <p class=" ">Accredited Investor Verification</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/fund.webp') }}" style="width: 64px;">
                    <p class=" ">Global Fundraising Strategies</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/legal.webp') }}" style="width: 64px;">
                    <p class=" ">Legal and Regulatory Standards</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/art-tokenization/icons/jurisdictions.webp') }}" style="width: 64px;">
                    <p class=" ">Multinational Compliance</p>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<style type="text/css">
    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }
</style>
<style type="text/css">
    .nav>li>a {
        position: relative;
        display: block;
        padding: 15px 25px !important;
    }
</style>
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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="506f2a5a6bdc5c470b7a30ee-text/javascript">
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


@include('static.left-aligned-image-card-section', [
    'title' => 'The Unstoppable Rise of Gaming Utility Token Development', 
    'desc' => 'Ever wondered how gaming utility tokens can transform the Web3 gaming experience? As Web3 games explore diverse niches and gameplay, the development of gaming utility tokens has become essential for captivating passionate gamers.',
    'cards' => [
        [
            'title' => 'Versatile Token Framework',
            'desc' => "Expertise in Ethereum, Hyperledger, and Stellar for customized token structures.",
            'image' => 'art-tokenization/icons/ethereum.webp'
        ],
        [
            'title' => 'Blockchain and Smart Contract Specialists',
            'desc' => "Skilled in developing and implementing advanced blockchain solutions.",
            'image' => "art-tokenization/icons/smart-contracts.webp"
        ],
        [
            'title' => 'Market Insight',
            'desc' => 'Deep understanding of market demands and regulatory requirements.',
            'image' => 'art-tokenization/icons/insights.webp'
        ],
        [
            'title' => 'Comprehensive Tokenization Solutions',
            'desc' => 'Complete securitization of art tokens from inception to implementation.',
            'image' => 'art-tokenization/icons/comprehensive.png'
        ],
        [
            'title' => 'Seasoned Experts',
            'desc' => "A team of experienced professionals in technology, law, and finance, dedicated to your success.",
            'image' => 'art-tokenization/icons/experts.png'
        ],
    ],
])

<section class="integration">
    <div class="container container-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-title text-center">
                <h2 class="title-th sec_tit underline"> Next-Gen Art Tokenization Ecosystem </h2>
                <p>An advanced, tailored platform for issuing painting-backed tokens designed specifically for the gallery sector. This solution empowers issuers to tokenize both commercial galleries and individual high-value artworks. Position yourself as a leading provider of "Tokenization as a Service" with tokens that can be deployed on Ethereum, Hyperledger, or Stellar.</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy" src="{{ asset('images/art-tokenization/icons/compliance.webp') }}"></div>
                <p>Seamless Compliance Automation</p>
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy" src="{{ asset('images/art-tokenization/icons/art.webp') }}"
                        style="width:54px;"> </div>
                <p>Global KYC/AML Integration</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy" src="{{ asset('images/art-tokenization/icons/blockchain.webp') }}"
                        style="width:54px;"> </div>
                <p>Multi-Blockchain Art Token Creation</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy" src="{{ asset('images/art-tokenization/icons/legal.webp') }}"
                        style="width:54px;"> </div>
                <p>Streamlined Legal and Regulatory Automation</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy" src="{{ asset('images/art-tokenization/icons/nft.webp') }}"
                        style="width:54px;"> </div>
                <p>Non-Fungible Tokens (NFTs)</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy" src="{{ asset('images/art-tokenization/icons/report.png') }}"
                        style="width:54px;"> </div>
                <p>Automated Regulatory Reporting</p>
            </div>
        </div>
    </div>
</section>
{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What Does Artwork Tokenization Mean?',
            'ans' => 'Artwork tokenization is the process of converting a piece of art into digital tokens on a blockchain, which represent ownership or investment shares in the artwork. This method increases security, liquidity, and accessibility for investors.'
        ],
        [
            'ques' => 'How Can I Tokenize My Art?',
            'ans' => "To tokenize your art, you'll need to create a digital version of the artwork and use a blockchain platform to generate a smart contract that assigns a unique token to it. This involves ensuring legal compliance and setting up a marketplace for transactions."
        ],
        [
            'ques' => 'What Are the Benefits of Tokenizing Art?',
            'ans' => 'Tokenizing art makes it easier to trade and invest in, by allowing fractional ownership and increasing liquidity. It also simplifies the transfer of ownership and provides enhanced security through blockchain technology.'
        ],
    ],
])
</div>

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