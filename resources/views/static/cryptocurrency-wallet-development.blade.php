@extends('layouts.static')
    @section('title', 'Cryptocurrency Wallet Development')
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

    .contentall a:hover {
        background: #00acdc
    }

    .banner {
        background: url(images/wallet.webp);
        background-size: cover;
        padding-top: 110px;
        padding-bottom: 100px;
        background-repeat: no-repeat;
        height: auto;
        background-position: center
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(to right, #00000000, #00000000);
        opacity: .95
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #024db8;
    }

    #ico .banner_content {
        position: relative;
        top: 0;
        transform: none
    }

    .banner_content .contentall {
        margin-top: 165px;
    }

    .ban_tirt,
    .contentall h1 {
        line-height: 1.3;
        font-weight: 700;
        font-size: 30px;
    }

    .contentall h1 {
        color: #fff
    }

    .contentall p {
        font-weight: 400;
        line-height: 1.6;
        font-size: 21px !important;
        margin: 0;
        display: block
    }

    .contentall a {
        color: #fff;
        cursor: pointer;
        margin-bottom: 15px
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

    @media (max-width:1199px) {

        .ban_tirt,
        .contentall h1 {
            font-size: 30px
        }
    }

    @media (max-width:768px) {
        .banner_content .contentall {
            margin-top: 50px;
            text-align: center
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)))
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 80px;
            height: auto;
        }

        .banner-overlay {
            background: #090046;
        }

        .banner_content p {
            font-size: 18px !important
        }

        .ban_tirt,
        .contentall h1 {
            font-size: 25px
        }

        .sec_tit,
        .sec_tit h2 {
            font-size: 20px !important
        }

        .sec_tit {
            font-size: 25px !important
        }
    }

    .form-right input.submit_send {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #fd8500 !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: bold !important;
        padding: 10px 0 !important;
    }

    .icon.bg i:before {
        background-color: #fff;
    }

    .mobile-description-section {
        padding: 60px 0;
    }

    a.banner-link {
        background: transparent;
        padding: initial;
        color: #fd8500;
    }

    .owl-theme .owl-nav .owl-prev {
        float: left;
        position: relative;
        left: -30px;
    }

    .owl-theme .owl-nav {
        position: absolute;
        width: 100%;
        top: 45%;
    }

    .owl-theme .owl-nav .owl-next {
        float: right;
    }

    .owl-carousel .owl-nav [class*=owl-] {
        display: block !important;
    }

    .mobile-description-section img {
        margin: 0 auto;
        display: block;
        width: 70%;
    }

    .contentall a:hover {
        background-color: #00b7c2;
    }

    #our_services .grids .grid .feature-box-3 {
        min-height: 250px;
    }

    /*         .feature-box-3:hover {box-shadow: rgb(0 0 0 / 15%) 0px 15px 25px, rgb(0 0 0 / 5%) 0px 5px 10px;border: 1px solid #e6e8ff;}*/

    .crypto-payment-right .app-card:hover img {
        transform: rotateY(360deg);
        transition: 0.7s;
        transition: all 500ms ease;
    }

    .main .content-section {
        background: url("images/demo-img-2-reverse.webp") no-repeat fixed !important;
        display: inline-block;
        width: 100%;
    }

    .connect-with {
        display: inline-block;
        width: 100%;
        text-align: center;
    }

    #get-quote .formdiv form {
        box-shadow: 0 0 20px 5px rgba(0, 0, 0, 0.1);
        background: #f3f3f3;
        width: 100%;
        display: inline-block;
        padding: 50px 0 0px 50px;
    }

    .tabs-section .nav.nav-pills {
        display: table;
        width: 100%;
        background: #140050;
        border: 0;
        border-radius: 10px;
        padding: 5px;
    }

    .mb-md-0,
    .my-md-0 {
        margin-bottom: 0 !important;
    }

    @media screen and (max-width: 500px) {
        .crypto-payment-right .app-card {
            min-height: auto !important;
        }
    }

    .crypto-payment-right .app-card {
        border-radius: 5px;
        box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
        text-align: center;
        padding: 15px;
        min-height: 440px;
        margin-bottom: 25px;
        background: #e6e8ff;
    }

    .crypto-payment-right .app-card .icon {
        height: 95px;
        width: 95px;
        line-height: 95px;
        border-radius: 50px;
        background: linear-gradient(to right, #fd8500, #35b069);
        text-align: center;
        display: table;
        margin: auto;
    }

    .crypto-payment-right .app-card h5 {
        font-size: 18px;
        font-weight: 700;
        text-transform: capitalize;
        color: #000000;
        margin: 10px 0;
    }

    .crypto-payment-right .app-card h3 {
        font-size: 18px;
        font-weight: 700;
        text-transform: capitalize;
        color: #000000;
        margin: 10px 0;
    }

    .crypto-payment-right .app-card P {
        color: #000000;
        font-size: 16px;
        line-height: 30px;
        margin-bottom: 35px;
    }

    .tabs-section .nav-pills>li {
        display: inline-block;
        float: none;
        width: 25%;
        margin: 0;
    }

    ul.nav-pills li a {
        font-size: 16px;
        padding: 10px 10px;
    }

    .subscript {
        font-size: 20px;
    }

    h1.btc {
        font-size: 40px;
        font-weight: 100;
        color: #fd8500;
        font-family: sans-serif;
    }

    .tabs-section .nav-pills>li.active {
        background: #fd8500;
    }

    .tab-content {
        background: #fff;
        padding: 0 20px 20px;
        display: inline-block;
        width: 100%;
    }

    .form-right input.submit_send {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #fd8500 !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: bold !important;
        padding: 10px 0 !important;
    }

    .technicalbox h3 {
        font-size: 15px;
    }

    .feature-box-3 .feature-title {
        color: #000000;
        font-size: 18px !important;
        font-weight: 700;
        line-height: normal;
    }

    .feature-box-3 .icon {
        margin: -50px auto 15px auto;
    }

    .feature-box-3 .feature-desc {
        color: #000000;
        font-size: 14px !important;
    }

    .feature-box-3 .icon {
        background: transparent;
        padding: 0px;
    }

    .gray_bg .technicalbox.text-center {
        background: #fff !important;
    }

    #post-ico-services .technicalbox {
        background: #f3f3f3;
    }

    .grids .grid .technicalbox .technical-icon span i {
        padding: 25px;
    }

    .benifits-ico ul li {
        font-size: 16px;
    }

    .benifits-ico ul.ul-style-4 li i {
        color: #fff;
        border-color: #fff;
        font-size: 13px;
        width: 25px;
        height: 25px;
        line-height: 23px;
    }

    .benifits-ico .left {
        padding-left: 150px;
    }

    .benifits-ico .right {
        padding-left: 75px;
    }

    .benifits-ico ul {
        color: #fff;
        padding-left: 0;
    }

    .pricing_videos iframe {
        width: 100%;
        height: 310px;
    }

    .timeline-center::before {
        background: #e6e8ff;
    }

    .thumb {
        position: relative;
    }

    .photo {
        position: absolute;
        width: 40px;
        height: 28px;
        left: 45%;
        top: 40%;
    }

    .thumb:hover .photo {
        background-position: 0 -252px;
    }

    .play {
        -webkit-animation: breathing 1s infinite ease-in-out;
        animation: breathing 1s infinite ease-in-out;
        -webkit-font-smoothing: antialiased;
        position: absolute;
        background: url(images/play.webp) no-repeat 0 0;
        width: 40px;
        height: 28px;
        left: 45%;
        top: 40%;
        background-position: 0 -252px;
    }

    .thumb:hover .play {
        background-position: 0 -252px;
    }

    @-webkit-keyframes breathing {
        0% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        25% {
            -webkit-transform: scale(2);
            transform: scale(2);
        }

        60% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        100% {
            -webkit-transform: scale(2);
            transform: scale(2);
        }
    }

    @keyframes breathing {
        0% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        25% {
            -webkit-transform: scale(2);
            transform: scale(2);
        }

        60% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        100% {
            -webkit-transform: scale(2);
            transform: scale(2);
        }
    }

    @media (max-width: 1200px) {
        #our_services .grid .feature-box-3 {
            min-height: 200px;
        }

        #pre-ico-services .technicalbox {
            min-height: 410px;
        }

        #post-ico-services .technicalbox {
            min-height: 430px;
        }

        .benifits-ico .left {
            padding-left: 110px;
        }
    }

    @media (max-width: 991px) {
        #pre-ico-services .technicalbox {
            min-height: 350px;
        }

        .benifits-ico .left {
            padding-left: 0;
        }

        a[type="button"] {
            font-size: 12px;
        }

        .pricing_videos a.home-talk-experts {
            margin-bottom: 10px;
        }
    }

    @media (max-width: 767px) {
        .benifits-ico .right {
            padding-left: 0;
        }

        .benifits-ico h4 {
            font-size: 13px;
        }

        .benifits-ico ul li {
            font-size: 12px;
        }

        .benifits-ico ul.ul-style-4 li i {
            font-size: 10px;
            width: 20px;
            height: 20px;
            line-height: 16px;
        }

        .pricing_videos a.home-talk-experts {
            margin: 0 auto;
            display: block;
            margin-bottom: 10px;
            text-align: center;
            width: auto;
        }

        .ul-style-4 li .list-icon {
            line-height: 14px;
            font-size: 9px;
        }

        .ul-style-4 li .list-icon {
            width: 15px;
            height: 15px;
        }

        .timeline-center::before {
            height: 100%;
        }
    }

    @media (max-width: 479px) {
        .tabs-section .nav-pills>li {
            width: 100%;
        }
    }

    .wallet_types p {
        margin-bottom: 10px;
    }

    .wallet_types .col-md-6 {
        padding: 0;
    }

    .wallet_types ul {
        margin-bottom: 10px !important;
        padding-left: 35px !important;
    }

    .wallet_types ul p {
        margin-bottom: 2px;
    }

    .wallet_types ul li {
        list-style: square;
    }

    .why_chooose_sec h3 {
        line-height: 1.3;
        margin-bottom: 18px;
    }

    .cont ul li {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 10px;
        color: #000;
        background-image: url(images/icons/sign-out-option.svg);
        background-repeat: no-repeat;
        padding-left: 28px;
        background-position: left 1px;
        background-size: 20px;
    }

    .cont ul {
        padding: 0;
    }

    .cont.cont2 ul li {
        background-image: url(images/icons/right-arrow-circular-button.svg);
        background-size: 26px;
        padding-left: 37px;
        background-position: left 4px;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .ul-style-4 li .list-icon {
        line-height: 22px;
        border: 2px solid #fd8500;
        color: #fd8500;
        border-radius: 50%;
        margin-right: 10px;
        margin-bottom: 8px;
        width: 25px;
        height: 25px;
    }

    .col-md-6.wallet_types {
        padding: 0;
    }

    .wallet_flow .client-box {
        background: none;
    }

    .owl-controls {
        margin-top: 30px;
    }

    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: #fd8500;
    }

    .owl-theme .owl-dots .owl-dot span {
        width: 30px;
        height: 10px;
    }

    .owl-carousel .owl-item img {
        width: 93%;
    }

    .demo_s h3.common_h3 {
        color: #fff;
    }

    .owl-carousel {
        display: flex;
        width: 100%;
        -webkit-tap-highlight-color: transparent;
        position: relative;
        z-index: 1;
    }

    .demo_bt img {
        border: 3px solid #ccc;
        max-width: 202px;
        margin: 0 10px;
    }

    .demo_s {
        background: #fd8500;
        padding: 60px 0;
    }

    .demo_wrap h5 {
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 13px;
        color: #fff;
    }

    .demo_wrap p {
        margin-bottom: 10px;
        font-weight: bold;
        color: #fff;
        font-size: 15px;
    }

    @media screen and (min-width: 501px) {
        .demo_s .container {
            max-width: 900px;
            background: #00000036;
            padding: 50px 0;
            box-shadow: 0 0 10px #fffcfc;
            border-radius: 4px;
        }
    }

    @media screen and (max-width: 500px) {
        .demo_s .container {
            box-shadow: 0 0 10px #fffcfc;
            border-radius: 4px;
        }
    }

    .demo_bt {
        margin-top: 30px;
    }

    @media screen and (max-width: 500px) {
        .launch {
            width: 80%;
            margin: 0 auto !important;
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

    p {
        font-size: 16px !important;
    }

    .cont.cont2 ul li p {
        font-size: 16px !important;
    }

    .magic {
        margin-top: 65px;
    }

    .gray-bg,
    .gray_bg {
        background: #e6e8ff !important;
    }

    .theme-color-bg {
        background: #140050 !important;
    }

    .data table td,
    .data table th {
        padding: 10px;
    }

    a[type="button"] {
        background: #fd8500;
    }

    .tabs-section .nav-pills>li.active>a,
    .tabs-section .nav-pills>li.active>a:focus,
    .tabs-section .nav-pills>li.active>a:hover {
        color: #fff !important;
    }

    .tabs-section .nav-pills>li>a {
        color: #fff;
    }

    .tabs-section .nav-pills>li {
        border-radius: 10px;
    }

    a:hover {
        color: #fd8500 !important;
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
        width: 25%;
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

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .technologies ul li {
            width: 100%;
        }

        .technologies ul li img {
            width: 60px;
        }

        .technologies ul li {
            margin: 0px;
        }

    }

    /*-- Technology --*/
    .technologiess2 {
        background: #140050;
        padding: 50px 0;
    }

    .technologiess2 ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .technologiess2 ul li {
        width: 20%;
        text-align: center;
        font-size: 16px;
        padding: 15px;
        margin: -1px;
        border: 1px solid #fff;
    }

    /*.technologies ul li img {height: 60px;}*/
    .technologiess2 ul li p {
        margin-bottom: 0 !important;
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .technologiess2 ul li {
            width: 100%;
        }

        .technologiess2 ul li img {
            width: 60px;
        }

        .technologiess2 ul li {
            margin: 0px;
        }

    }

    /*@media only screen and (max-width: 320px){
.tech-stack ul li{width: 48%!important;}
}*/

    /*.tech-stack ul img{width: 100%;}*/
    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .welcome-content ul li {
            width: 100%;
        }

        .complimentary-features ul li {
            width: 100%;
            display: block;
        }

        .complimentary-features ul li .icons {
            width: 100%;
            clip-path: none;
            border-radius: 0px;
        }

        .complimentary-features ul li .content {
            width: 100%;
            clip-path: none;
            border-radius: 0px;
            padding: 15px;
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

        .technologiess2 ul li {
            width: 49%;
        }

        .technologiess2 ul li img {
            width: 60px;
        }

        .technologiess2 ul li {
            margin: 0px;
        }

        /*.tech-stack ul img{width: 100%;}*/
        .tech-stack ul {
            flex-wrap: wrap;
        }

        .tech-stack ul li {
            width: 48%;
            text-align: center;
        }
    }

    .nav-tabs>li>a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0;
    }


    /*------------ Tech Stack -----------*/
    .tech-stack {
        padding: 60px 0px;
    }

    .tech-stack ul {
        display: flex;
        flex-wrap: wrap;
        padding: 10px;
        justify-content: center;
        background: #fff;
        margin-bottom: 10px;
    }

    .tech-stack .nav-stacked>li {
        background: #140050;
        margin: 4px;
        border-radius: 5px;
        color: #fff;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background: #2834a8;
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
        max-height: 30px;
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
        width: 14%;
        padding: 10px;
        margin: 1%;
        text-align: center;
        border: 1px solid #eee;
    }

    .technology ul li p {
        margin-bottom: 0;
    }

    .ul.nav-pills li a {
        font-weight: 400 !important;
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
        background: #fff;
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

    .complimentary-features ul li .content {
        background: transparent;
    }

    .complimentary-features ul li .content p {
        color: #000;
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
        font-size: 18px;
        text-align: left;
        line-height: normal;
        padding-bottom: 7px;
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

        .complimentary-features ul li .content {
            width: 100%;
            clip-path: none;
            border-radius: 0px;
            padding: 15px;
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

                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="">
                                    <div class="ban_tirt">
                                        <h1>Introduce a cutting-edge digital wallet with our crypto wallet development experts. </h1>
                                    </div><br>
                                    <p>Develop and roll out a sophisticated crypto wallet app with guidance from our team. Bringing your innovative ideas to life through a wallet dApp is now more accessible than ever!</p><br>
                                    <div class="text-left launch">
                                        <a rel="nofollow" href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                            style="border-radius: 30px !important;">Connect with our expert</a>
                                        {{-- <a rel="nofollow" href="#demo"
                                            class="nectar-button medium regular accent-color regular-button nec-btn">View the demo</a> --}}
                                        <!-- <a href="#pricing-tabs" class="nectar-button medium regular accent-color regular-button nec-btn">Wallet Development Pricing</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 hidden-sm col-xs-12 text-center">
                            <img class="magic" src="{{ asset('images/cryptocurrency-wallet-development/banner-img.webp') }}"
                                alt="Cryptocurrency Wallet Development Company"
                                title="Cryptocurrency Wallet Development Company" width="80%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                background: #140050;
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
                background: #2834a8;
            }

            #counter-stats .stats:nth-child(2) {
                background: #00aef1;
            }

            #counter-stats .stats:nth-child(3) {
                background: #2834a8;
            }

            #counter-stats .stats:nth-child(4) {
                background: #00aef1;
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
        <section style="padding:0; background:#e6e8ff;">
        </section>

        <div id="post-ico-services" class="types-cryptocurrency-wallet">
            <div class="container">
                <div class="row text-center">
                    <h2 class="sec_tit underline" style="width: 100%">Advanced Crypto Wallet Solutions for the Future of Web3</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <strong>As the cryptocurrency market evolves and adoption soars, the demand for sophisticated crypto wallet solutions is skyrocketing. More people are seeking to leverage the thriving market, driving the need for robust wallet solutions.
                        <br><br>
                        Crypto wallets not only facilitate swift digital transactions but also establish a strong business model with significant growth potential. Ready to seize this opportunity? Collaborate with our experienced team to develop a comprehensive crypto wallet solution and enhance your success in the global crypto arena!
                        </p>
                        <div class="text-center">
                            {{-- <a rel="nofollow"
                                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                                target="_blank"
                                href="#"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>Book a Meeting</span></a> --}}
                            <a rel="nofollow" href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>Consult with Our Experts</span></a>
                        </div>
                    </div>
                    <!--   <div class="col-md-6 text-center pull-left">
                        <div itemscope="" itemtype="https://schema.org/ImageObject">
                            
                        <img class="lazy" data-src="images/cryptocurrency-wallet-development/img-1.webp" width="450" alt="Cryptocurrency Wallet Development" title="Cryptocurrency Wallet Development"></div>
                </div> -->
                </div>
            </div>
        </div>


        @include('static.six-card-section', [
            'title' => 'Cryptocurrency Wallet Development Services', 
            'desc' => 'Selecting the Right Wallet for Your Needs: Development Choices',
            'cards' => [
                [
                    'title' => 'Bitcoin Wallet Development',
                    'desc' => "Leverage our expertise in Bitcoin wallet development to build an ideal platform on the largest blockchain. We focus on delivering secure and user-friendly transaction experiences for Bitcoin enthusiasts.",
                    'image' => 'cryptocurrency-wallet-development/icons/bitcoin.webp'
                ],
                [
                    'title' => 'Ethereum Wallet Development',
                    'desc' => "Our team specializes in Ethereum wallet solutions, facilitating the easy storage and transfer of Ethereum-based assets. Our wallets support advanced smart contracts for a range of functionalities.",
                    'image' => "cryptocurrency-wallet-development/icons/ethereum.webp"
                ],
                [
                    'title' => 'NFT Wallet Development',
                    'desc' => "Unlock powerful NFT wallet solutions with our services, enabling users to manage and trade NFT assets efficiently. We offer multi-chain capabilities to broaden your business horizons.",
                    'image' => 'cryptocurrency-wallet-development/icons/nft.webp'
                ],
                [
                    'title' => 'DeFi Wallet Development',
                    'desc' => "We offer top-tier DeFi wallet development, addressing the increasing need for decentralized finance solutions. Our wallets ensure secure access to various DeFi platforms with ease.",
                    'image' => 'cryptocurrency-wallet-development/icons/defi.webp'
                ],
                [
                    'title' => 'Centralized Wallet Development',
                    'desc' => "Our centralized wallet solutions provide enhanced user-friendliness and security. We create crypto wallets with centralized features for a seamless experience.",
                    'image' => 'cryptocurrency-wallet-development/icons/centralized.webp'
                ],
                [
                    'title' => 'Desktop Wallet Development',
                    'desc' => "Manage your crypto assets easily with our desktop wallet development services. We design intuitive wallets with smooth navigation, secure transactions, and robust protection features.",
                    'image' => 'cryptocurrency-wallet-development/icons/desktop.png'
                ],
                [
                    'title' => 'Coin-specific Wallet Development',
                    'desc' => "For support of specific cryptocurrencies, our coin-specific wallet development services cater to your needs. Whether for new altcoins or established tokens, we build customized wallets tailored to your specifications.",
                    'image' => 'cryptocurrency-wallet-development/icons/coin.webp'
                ],
                [
                    'title' => 'Hardware Wallet Development',
                    'desc' => "Our hardware wallet solutions offer superior security by storing private keys offline. Designed for ease of use and compatibility with multiple devices, these wallets enhance the safety of your crypto transactions.",
                    'image' => "cryptocurrency-wallet-development/icons/hardware.webp"
                ],
                [
                    'title' => 'Multi-currency Wallet Development',
                    'desc' => "Expand your reach with our multi-currency wallet development services. Our solutions enable seamless management and transactions across various digital assets and blockchains.",
                    'image' => 'cryptocurrency-wallet-development/icons/currency.webp'
                ],
                [
                    'title' => 'Mobile Wallet Development',
                    'desc' => "Our mobile wallet development focuses on delivering an exceptional user experience with robust security features. Access and manage your digital assets effortlessly from your mobile device.",
                    'image' => 'cryptocurrency-wallet-development/icons/mobile-wallet.png'
                ],
                [
                    'title' => 'Solana Wallet Development',
                    'desc' => "We develop advanced Solana wallet solutions for secure and seamless transactions on the Solana blockchain. Ideal for handling Solana-based assets, including meme coins and NFTs.",
                    'image' => 'cryptocurrency-wallet-development/icons/solana.webp'
                ],
                [
                    'title' => 'Web Wallet Development',
                    'desc' => "Our web wallet development services create secure, responsive web-based wallets that offer easy access through various browsers. We emphasize security and user experience in our web wallets.",
                    'image' => 'cryptocurrency-wallet-development/icons/monitoring.png'
                ],

                [
                    'title' => 'Wallet-as-a-Service',
                    'desc' => "Utilize our Wallet-as-a-Service solution to integrate our wallet technology into your business without the need for in-house development. Our service ensures high security and efficient transaction processing.",
                    'image' => 'cryptocurrency-wallet-development/icons/wallet.png'
                ],
                [
                    'title' => 'TRON Wallet Development',
                    'desc' => "Specialize in TRON-based assets with our TRON wallet development services. Our wallets are designed for seamless interaction with the TRON blockchain, supporting the efficient management of TRX and TRC tokens.",
                    'image' => 'cryptocurrency-wallet-development/icons/tron.webp'
                ],
                [
                    'title' => 'MPC Wallet Development',
                    'desc' => "Enhance security with our MPC wallet development, featuring multi-party signature capabilities. These wallets require approval from multiple trusted parties, boosting the safety of your cryptocurrency holdings.",
                    'image' => 'cryptocurrency-wallet-development/icons/mobile-wallet.png'
                ],
            ],
        ])

        <div class="technologies">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center text-white">Our clients</h3>
                    <p class="text-center white"></p>
                    <ul>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/Amepay.webp') }}" style="width: 60px;">
                            <p class="white">We’ve developed this successful Ethereum blockchain-based coin, Amepay.</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/evai.webp') }}" style="width: 60px;">
                            <p class="white">Evai is an unbiased crypto asset rating platform that aids crypto
                                enthusiasts.</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/dash.webp') }}" style="width: 60px;">
                            <p class="white">Dash is an altcoin forked from the Bitcoin protocol, and it is also
                                DAO-enabled.</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/gsx.webp') }}" style="width: 60px;">
                            <p class="white">GSX Coin is the Apollo Fintech Organization’s Gold Secured Currency.</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/waifu.webp') }}" style="width: 60px;">
                            <p class="white">Waifu coins represent digital anime female creatures & captivate their
                                audience.</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/anyswap.webp') }}" style="width: 60px;">
                            <p class="white">A decentralized multichain-compatible crypto exchange platform.</p>
                        </li>

                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/quickswap.webp') }}" style="width: 60px;">
                            <p class="white">An Ethereum-based DEX with Automated Market Maker (AMM).</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/dascoin.webp') }}" style="width: 60px;">
                            <p class="white">Our experts have successfully delivered the crypto, DasCoin.</p>
                        </li>

                    </ul>
                </div>
                <div class="text-center cta_mine txt">
                    {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                        target="_blank" href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
                    <a rel="nofollow" href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with
                            our Experts</span>
                    </a>
                </div>
            </div>
        </div>
        




        <section class="bg_3" style="padding:60px 0px;">
            <div class="container">
                <div class="section-title">
                    <h3 class="section-title underline mb20 text-center font-wei"><strong>Exceptional Advantages of Our Crypto Wallet Development Services</strong></h3>
                    <p class="text-center">Wondering why our crypto wallet development services are the right choice for you? Here’s why our offerings stand out, providing numerous benefits to enhance your business right from day one.</p>
                </div>
                <div class="row mt60">
                    <div class="col-md-6">
                        <div class="glass_two">
                            <div class="icons">
                                <img src="{{ asset('images/cryptocurrency-wallet-development/icons/security.png') }}"
                                    class="lazy img-responsive">
                            </div>
                            <div class="content_new">
                                <h4>Top-Level Security</h4>
                                <p>Our team integrates cutting-edge security features into your wallet software, ensuring your users can securely store and trade crypto assets and NFTs with complete peace of mind.</p>
                            </div>
                        </div>
                        <div class="glass_two">
                            <div class="icons">
                                <img src="{{ asset('images/cryptocurrency-wallet-development/icons/scalability.webp') }}"
                                    class="lazy">
                            </div>
                            <div class="content_new">
                                <h4>Exceptional Scalability</h4>
                                <p>Let your project enjoy enhanced scalability, which can be executed to make your
                                    wallet app function seamlessly, even during times of extreme user congestion.</p>
                            </div>
                        </div>
                        <div class="glass_two">
                            <div class="icons">
                                <img src="{{ asset('images/cryptocurrency-wallet-development/icons/support.png') }}"
                                    class="lazy">
                            </div>
                            <div class="content_new">
                                <h4>Cross-Chain Compatibility</h4>
                                <p>Our development services include cross-chain support, allowing users to effortlessly transact across different blockchains without any hassle.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="glass_two">
                            <div class="icons">
                                <img src="{{ asset('images/cryptocurrency-wallet-development/icons/reputation.svg') }}"
                                    class="lazy">
                            </div>
                            <div class="content_new">
                                <h4>Established Reputation</h4>
                                <p>Leverage our extensive experience in the Web3 realm. Our cryptocurrency wallet solutions are recognized globally for their excellence and reliability, enhancing your project's credibility.</p>
                            </div>
                        </div>

                        <div class="glass_two">
                            <div class="icons">
                                <img src="{{ asset('images/cryptocurrency-wallet-development/icons/technical-assistance.png') }}"
                                    class="lazy">
                            </div>
                            <div class="content_new">
                                <h4>24/7 Support</h4>
                                <p>Benefit from round-the-clock technical support, ensuring your crypto wallet solution remains efficient and effective with the help of our seasoned experts.
                                </p>
                            </div>
                        </div>

                        <div class="glass_two">
                            <div class="icons">
                                <img src="{{ asset('images/cryptocurrency-wallet-development/icons/customization.webp') }}"
                                    class="lazy">
                            </div>
                            <div class="content_new">
                                <h4>Fully Customizable</h4>
                                <p>Tailor your cryptocurrency wallet app to meet your specific needs. Our skilled developers use advanced frameworks to turn your unique vision into reality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="common_spacing new-features" style="background: #140050;">
            <div class="container">
                <div class=" ">
                    <h2 class="sec_tit underline text-center text-white">Innovative Features of Our Multi-Currency Wallet Development</h2>
                </div>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-user-plus"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Account Creation and Management</strong>Enable users to easily create and manage their accounts through intuitive interfaces and multimedia-guided tutorials, making the sign-up process straightforward for everyone.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-life-ring"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Token Support</strong>Support a range of token standards, including ERC-20, BEP-20, and TRC-20, allowing secure storage and transactions of various crypto tokens.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-link"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Cross-Chain Compatibility</strong>Incorporate built-in cross-chain bridges to facilitate seamless token transactions across different blockchains without leaving the wallet interface.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-sliders"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Token Swapping</strong>Enable users to exchange one crypto token for another within the app, providing a user-friendly and secure way to manage token swaps.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-object-group"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Token Staking</strong>Introduce staking options that let users lock up their tokens to provide liquidity and earn periodic rewards, creating mutual benefits.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-random"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Ultra-Fast Transactions</strong>Leverage advanced infrastructure to perform cryptocurrency transactions at lightning speeds, enhancing the wallet's reputation for efficiency.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-key"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Private Key Management</strong>Ensure that private keys are managed securely in the backend, making it accessible and safe for users without technical expertise.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-plus"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Add Tokens</strong>Allow users to add new tokens by entering their contract addresses, simplifying token purchases and transactions within the same platform.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/fiat-ramps.webp') }}"
                                        width="60" title="TRON Wallet Provider" style="filter: invert(1);"> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Fiat Ramps</strong>Include fiat-to-crypto and crypto-to-fiat conversion features, supporting major global currencies and broadening user accessibility.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/tokens-b.webp') }}"
                                        width="60" title="TRON Wallet Provider" style="filter: invert(1);"> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Token Launchpad</strong>Incorporate a launchpad for new token offerings, giving users access to initial token sales directly within the wallet.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/crypto-wallet-b.webp') }}"
                                        width="60" title="TRON Wallet Provider" style="filter: invert(1);"> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Native Token</strong>Develop a native token for the wallet, adding utility and enhancing your business's market value.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/qr-paymnet.webp') }}"
                                        width="60" title="TRON Wallet Provider" style="filter: invert(1);"> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">QR Payments</strong>Integrate QR code scanning to enable instant cryptocurrency payments for both online and offline merchants.</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="text-center cta_mine txt">
                    {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                        target="_blank" href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> --}}
                    <a rel="nofollow" href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Consult with Our Experts</span>
                    </a>
                </div>

            </div>
        </div>



        <style type="text/css">
            .step-points li span {
                width: 60px;
                height: 60px;
                background: #140050;
                border-radius: 7px;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center
            }

            .step-points li span img {
                padding: 10px;
            }

            .step-points-content {
                margin-left: 15px
            }

            .step-points li h4 {
                color: #000;
                font-weight: 700;
                font-size: 13px
            }

            .step-points li p {
                margin-bottom: 0;
                text-align: justify
            }

            .step-points li span,
            .step-points-content {
                animation-name: fadeIn;
                animation-duration: 3s;
                animation-iteration-count: 1
            }

            .step-points li {
                display: grid;
                grid-template-columns: 60px auto;
                margin-bottom: 20px;
                align-items: center;
                border-radius: 7px;
                background: #e6e8ff;
            }
        </style>


        <style type="text/css">
            :root {
                --color1: #117D83;
                --color2: #140050;
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
                background-color: #140050;
                font-size: 40px;
                text-align: center;
                line-height: 93px;
                height: 93px;
                width: 93px;
                border-radius: 30px;
                box-shadow: -5px -5px 5px #2834a8, -8px -8px 0 #2834a8;
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
                color: var(--color2);
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
                color: var(--color2);
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
                box-shadow: 5px -5px 5px #2834a8, 8px -8px 0 #2834a8;
                left: -120px;
                right: auto;
            }

            .main-timeline .timeline:nth-child(2) {
                --color2: #140050;
                --color2: #140050;
            }

            .main-timeline .timeline:nth-child(3) {
                --color2: #140050;
                --color2: #140050;
            }

            .main-timeline .timeline:nth-child(4) {
                --color2: #140050;
                --color2: #140050;
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

                /*  .inactiveLink {
   pointer-events: none;
   cursor: default;
}*/
            }
        </style>
        <section class="common_spacing">
            <div class="container">
                <h3 class="sec_tit underline text-center">Your Roadmap to Developing a Tailored Cryptocurrency Wallet</h3>
                <p class="text-center">Experience the benefits of a bespoke wallet application by partnering with our specialized cryptocurrency wallet development team. Our process is designed to deliver top-notch solutions with superior security, functionality, and support.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <a href="#" class="timeline-content" style="pointer-events: none; cursor: default;">
                                    <div class="timeline-year">1</div>
                                    <div class="timeline-icon"><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-wallet-development/icons/project.webp') }}"
                                            style="width: 60px; margin-top: 14px"></div>
                                    <h4 class="title">Project Conceptualization</h4>
                                    <p class="description">
                                        Collaborate with our experts to define every aspect of your cryptocurrency wallet project. We’ll develop comprehensive technical and non-technical documentation to guide the process.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content" style="pointer-events: none; cursor: default;">
                                    <div class="timeline-yearleft">2</div>
                                    <div class="timeline-icon"><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-wallet-development/icons/cryptocurrency.png') }}"
                                            style="width: 60px; margin-top: 14px"></div>
                                    <h4 class="titleleft">Wallet Design</h4>
                                    <p class="descriptionleft">
                                        Craft the front-end and user interface (UI/UX) of your wallet application to ensure an engaging user experience and align with your brand’s identity.</p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content" style="pointer-events: none; cursor: default;">
                                    <div class="timeline-year">3</div>
                                    <div class="timeline-icon"><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-wallet-development/icons/wallet.png') }}"
                                            style="width: 60px; margin-top: 14px"></div>
                                    <h4 class="title">Backend Development</h4>
                                    <p class="description">
                                        Build the backend infrastructure to support all front-end functionalities, ensuring smooth operation and integration with the necessary tools and frameworks.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content" style="pointer-events: none; cursor: default;">
                                    <div class="timeline-year">4</div>
                                    <div class="timeline-icon"><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-wallet-development/icons/api.png') }}"
                                            style="width: 60px; margin-top: 14px"></div>
                                    <h4 class="title">API Integration</h4>
                                    <p class="description">
                                        Develop and integrate APIs for seamless backend operations and real-time market data access, enhancing the functionality of your wallet.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content" style="pointer-events: none; cursor: default;">
                                    <div class="timeline-yearleft">5</div>
                                    <div class="timeline-icon"><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-wallet-development/icons/smart-contracts.webp') }}"
                                            style="width: 60px; margin-top: 14px"></div>
                                    <h4 class="titleleft">Smart Contract Development</h4>
                                    <p class="descriptionleft">
                                        Write and deploy smart contracts to handle various operations within the wallet app, using the appropriate programming languages for your chosen blockchains.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content" style="pointer-events: none; cursor: default;">
                                    <div class="timeline-year">6</div>
                                    <div class="timeline-icon"><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-wallet-development/icons/deployment.png') }}"
                                            style="width: 60px; margin-top: 14px"></div>
                                    <h4 class="title">Wallet Deployment</h4>
                                    <p class="description">Launch the wallet on the selected blockchain(s) and conduct thorough pilot tests to ensure optimal performance before the official release.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content" style="pointer-events: none; cursor: default;">
                                    <div class="timeline-yearleft">7</div>
                                    <div class="timeline-icon"><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-wallet-development/icons/testing.png') }}"
                                            style="width: 60px; margin-top: 14px"></div>
                                    <h4 class="titleleft">Testing</h4>
                                    <p class="descriptionleft">Thoroughly test the wallet software to identify and fix any issues, ensuring it operates flawlessly for secure storage and transaction of cryptocurrencies.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content" style="pointer-events: none; cursor: default;">
                                    <div class="timeline-yearleft">8</div>
                                    <div class="timeline-icon"><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-wallet-development/icons/support.png') }}"
                                            style="width: 60px; margin-top: 14px"></div>
                                    <h4 class="titleleft">Ongoing Maintenance and Support</h4>
                                    <p class="descriptionleft">Provide regular updates and maintenance to keep the wallet functioning efficiently, handle increased user traffic, and adapt to market changes to remain competitive.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="gray_bg">
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
                    padding: 30px 0;
                }

                #demo .container {
                    padding: 40px 20px;
                    border: 5px solid #eee;
                    border-radius: 15px;
                }
            </style>


            <!-- https://www.blockchainappfactory.com/ -->
        </div>
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

        <!--  <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row text-center">
                    <h3 class="sec_tit underline">Wallet Integration Services for Enterprises</h3>
                </div>
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">    
                        <p>Nowadays, Web3 enterprises have opted to operate their platforms using integrated crypto wallets due to the sophisticated nature of building them from scratch. Our services on wallet integration services for enterprises offer all that an enterprise owner needs, including the cryptocurrencies to be supported and the blockchain(s) it works on. We have been integrating cryptocurrency wallets for various enterprises that match all their business requirements at affordable costs.</p>
                    </div>
                </div>    
            </div>
        </section> -->





        <style type="text/css">
            .glass.one .glass_img img {
                width: 100%;
                height: auto;
                border-radius: 10px;
                object-fit: fill;
                margin-bottom: 20px;
            }

            .glass.one h3 {
                font-size: 18px;
                color: #45af72;
                margin-bottom: 10px;
            }

            .glass.one {
                margin-bottom: 30px;
            }

            .glass.one p {
                min-height: 251px;
            }

            .glass_two {
                display: flex;
                align-items: center;
                justify-content: center;
                background: #e6e8ff;
                border-radius: 12px;
                padding: 20px 20px;
                /*width: 80%;*/
                color: #fff;
                backdrop-filter: blur(5px);
                font-size: 17px;
                line-height: 1.6;
                margin: 10px auto;
                transition: 0.5s all ease-in-out;
                min-height: 195px;
            }

            .bg_3 .icons img {
                max-width: 90px;
                height: 90px;
                border-radius: 50%;
                margin-right: 20px;
                background: #fff;
                padding: 10px;
            }

            .content_new p {
                /*margin-left: 20px;*/
                margin-bottom: 0 !important;
                color: #000;
            }

            .glass_two:hover {
                box-shadow: 0 15px 35px rgb(60 18 100 / 49%);
                transition: 0.5s all ease-in-out;
            }

            @media (max-width: 425px) {
                .container.patner img {
                    margin-bottom: 15px;
                }

                .glass_two {
                    display: block;
                }
            }

            .service_style_one_icon img {
                width: 50px;
                height: auto;
            }

            .service_style_one_title p strong,
            .content_new p strong {
                font-weight: 700;
                color: #45af72;
                position: relative;
                margin-top: 10px;
                display: block;
                font-size: 19px;
            }

            .content_new h4 {
                font-weight: 700;
                position: relative;
                margin-top: 10px;
                display: block;
                font-size: 18px;
            }

            .service_style_one_title p strong:before {
                position: absolute;
                content: "";
                left: 0;
                top: 37px;
                height: 1px;
                width: 75px;
                background: #45af72;
                margin: 0 auto;
                right: 0;
            }

            .service_style_one:hover .service_style_one_title p {
                color: #fff !important;
            }

            .service_style_one:hover {
                transform: translateY(10px);
                transition: 0.5s all ease-in-out;
            }

            .service_style_one_text {
                margin-top: 20px;
                margin-bottom: 5px;
                color: #fff;
            }
        </style>





        <style type="text/css">
            .nec-btn {
                position: relative !important;
                color: #fff !important;
                border-radius: 30px !important;
                font-size: 11px;
                text-transform: capitalize !important;
                transform: scale(1.1, 1.1) !important;
                transition: all 0.3s ease-out 0s !important;
                background: #fd8500 !important;
            }

            .nec-btn:hover {
                transform: scale(1, 1) !important;
                color: #fff !important;
                background: #ff4e00 !important;
            }

            a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                margin-bottom: 15px !important;
                display: inline-block;
                margin-right: 13px !important;
                margin-left: 18px !important;

            }

            .contentall a,
            a.home-talk-experts {
                padding: 10px 20px !important;
            }
        </style>



        <style type="text/css">
            .feature-box-3 .feature-desc {
                color: #000000;
            }

            .feature-box-3 {
                border: 1px dashed #a6a6a6;
                border-top: 3px solid #fd8500;
                text-align: center;
            }

            .feature-box-2,
            .feature-box-3 {
                padding: 14px;
                position: relative;
            }

            .feature-box-3 {
                display: inline-block;
                width: 100%;
                /*            min-height: 220px;*/
                border-top: 3px solid #23124c;
            }

            .feature-box-3 .icon {
                color: #23124c;
            }

            .feature-box-3 .icon {
                margin: -50px auto 15px;
                background: #fff;
                color: #fd8500;
                border-radius: 50%;
            }

            .feature-box-3 .feature-title {
                margin-bottom: 10px;
            }

            @media screen and (min-width: 980px) and (max-width: 1100px) {
                .feature-box-3 {
                    /*                min-height: 353px;*/
                }
            }

            @media screen and (max-width: 768px) {
                .feature-box-3 {
                    min-height: auto;
                }
            }

            @media (max-width: 1200px) {
                .feature-box-3 .feature-desc {
                    font-size: 14px;
                }
            }
        </style>

        <div id="our_services" class="defisec gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <h3 class="common_h3 title-th sec_tit">Different Varieties of Multi-Currency Wallets</h3>
                    <hr>
                    <p>Cryptocurrency wallets come in various forms, each designed to meet different needs for security and convenience. The ideal choice depends on how you use your funds and your security preferences.</p>
                </div>
                <div class="grids container-center">
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/transactions.png') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"> </div>
                            <h4 class="feature-title common_h4">Hot Wallets</h4>
                            <p class="feature-desc mb0">These wallets are connected to the internet, making them ideal for frequent transactions and easy access.
                            </p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"><img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/software.png') }}" alt="Auction"
                                    class="lazy" width="45px;" style="margin-top: 12px"> </div>
                            <h4 class="feature-title common_h4">Software Wallets</h4>
                            <p class="feature-desc mb0">Installed as applications or programs on your computer or mobile device, examples include Exodus, Electrum, and Trust Wallet.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/wallet.png') }}" alt="Auction"
                                    class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Web Wallets</h4>
                            <p class="feature-desc mb0">Accessible through web browsers, these online services include options like Coinbase Wallet and MetaMask.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/storage-box.webp') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Cold Wallets</h4>
                            <p class="feature-desc mb0">Disconnected from the internet, these offer enhanced security for long-term storage.</p>
                        </div>
                    </div>


                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/hardware.webp') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Hardware Wallets</h4>
                            <p class="feature-desc mb0">Physical devices that store private keys offline, such as the Ledger Nano S/X and Trezor.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/whitepaper.png') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Paper Wallets</h4>
                            <p class="feature-desc mb0">Printed documents of private and public keys. Although they are secure from online threats, they need to be stored safely.
                            </p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img src="{{ asset('images/cryptocurrency-wallet-development/icons/key.svg') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Custodial Wallets</h4>
                            <p class="feature-desc mb0">Managed by third-party providers who hold your private keys on your behalf.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/exchange.png') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Exchange Wallets</h4>
                            <p class="feature-desc mb0">Provided by cryptocurrency exchanges like Binance or Kraken for funds used in trading.</p>
                        </div>
                    </div>

                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/ownership.webp') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Non-Custodial Wallets</h4>
                            <p class="feature-desc mb0">Allow users to retain control of their private keys, offering greater security and ownership.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/software.png') }}" alt="Auction"
                                    class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Self-Custody Wallets</h4>
                            <p class="feature-desc mb0">Software or hardware wallets where you manage your own private keys.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/signature.png') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Multi-Signature Wallets</h4>
                            <p class="feature-desc mb0">Require multiple private keys to authorize transactions, enhancing security through distributed control.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/mobile-wallet.png') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Mobile Wallets</h4>
                            <p class="feature-desc mb0">Designed for smartphones, these offer convenience and easy access, with examples including Mycelium and Atomic Wallet.</p>
                        </div>
                    </div>

                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/desktop.png') }}" alt="Auction"
                                    class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Desktop Wallets</h4>
                            <p class="feature-desc mb0">Software wallets for computers that offer more security than mobile options, such as Bitcoin Core and Armory.
                            </p>
                        </div>
                    </div>
                    {{-- <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/white-paper.webp') }}"
                                    alt="Auction" class="lazy" width="45px;"></div>
                            <h4 class="feature-title common_h4">Paper Wallets</h4>
                            <p class="feature-desc mb0"> A form of cold storage where private and public keys are
                                printed on paper, minimizing online risks.</p>
                        </div>
                    </div> --}}
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/brain-wallet.webp') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Brain Wallets</h4>
                            <p class="feature-desc mb0">Create a private key from a passphrase or mnemonic phrase memorized by the user, though they are less secure due to potential vulnerabilities.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/cryptocurrency-wallet-development/icons/hierarchical.webp') }}"
                                    alt="Auction" class="lazy" width="45px;" style="margin-top: 12px"></div>
                            <h4 class="feature-title common_h4">Hierarchical Deterministic (HD) Wallets</h4>
                            <p class="feature-desc mb0">Organize private keys in a tree-like structure, offering convenience and scalability for managing multiple addresses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="technologiess2">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center text-white">Develop a Cryptocurrency Wallet Using a Proven Model</h3>
                    <p class="text-center white">Given the rising interest in cryptocurrency wallets, launching one for your business is a smart move. Unsure where to begin? Collaborate with our experts to craft a solution that leverages the features and benefits offered by leading cryptocurrency wallet apps.</p>
                    <ul>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/coinbase.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/metamask.webp') }}" style="width: 60px;">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/zengo.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/ledger.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/turst-wallet.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/crypto-defi-wallet.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/exodus.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/terzor.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/keepkey.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/guarda.webp') }}">
                            <p class="white"></p>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="text-center cta_mine txt">
                        {{-- <a rel="nofollow"
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
                        <a rel="nofollow" href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk
                                with our Experts</span></a>
                    </div>
                </div>
            </div>
        </div>

        <section class="common_spacing ">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <div class="sec_tit mb20">
                            <h2 class="section-title underline mb20">Comprehensive Security Protocols for Your Crypto Wallet</h2>
                        </div>
                        <p>Opting for our cryptocurrency wallet development services means your application will be fortified with the highest security standards available:</p>
                    </div>
                </div>
                <div class="row mt40">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <ul class="step-points">
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/key.svg') }}" alt></span>
                                <div class="step-points-content">
                                    <h4>Private Key Encryption</h4>
                                </div>
                            </li>
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/login.png') }}" alt></span>
                                <div class="step-points-content">
                                    <h4>Jail Login Provisions</h4>
                                </div>
                            </li>
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/password.png') }}"
                                        alt></span>
                                <div class="step-points-content">
                                    <h4>Passcode Protection</h4>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <ul class="step-points">
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/authentication.png') }}"
                                        alt></span>
                                <div class="step-points-content">
                                    <h4>Multi-Factor Authentication (MFA)</h4>
                                </div>
                            </li>
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/computation.png') }}"
                                        alt></span>
                                <div class="step-points-content">
                                    <h4>Multi-Party Computation (MPC)</h4>
                                </div>
                            </li>
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/Anti-phishing.png') }}"
                                        alt></span>
                                <div class="step-points-content">
                                    <h4>Anti-Phishing Measures</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <ul class="step-points">
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/integration.png') }}"
                                        alt></span>
                                <div class="step-points-content">
                                    <h4>SSL Integration</h4>
                                </div>
                            </li>
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/provisions.png') }}"
                                        alt></span>
                                <div class="step-points-content">
                                    <h4>Seed Phrase Management</h4>
                                </div>
                            </li>
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/update.png') }}" alt></span>
                                <div class="step-points-content">
                                    <h4>Regular Software Updates</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <ul class="step-points">
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/backup.png') }}" alt></span>
                                <div class="step-points-content">
                                    <h4>Backup and Recovery Options</h4>
                                </div>
                            </li>
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/storage-box.webp') }}"
                                        alt></span>
                                <div class="step-points-content">
                                    <h4>Cold Storage Solutions</h4>
                                </div>
                            </li>
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/hardware.webp') }}"
                                        alt></span>
                                <div class="step-points-content">
                                    <h4>Hardware Wallet Integration</h4>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-offset-4 col-md-3 col-sm-12 col-xs-12">
                        <ul class="step-points">
                            <li> <span><img src="{{ asset('images/cryptocurrency-wallet-development/icons/authentication.png') }}"
                                        alt></span>
                                <div class="step-points-content">
                                    <h4>Biometric Authentication</h4>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <style type="text/css">
            .welcome-content {
                background: #0d115a;
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
                width: 19%;
                margin: 0.5%;
                border: 1px solid #797979;
                display: grid;
                grid-template-columns: 30% 70%;
                padding: 10px;
                align-items: center;
                text-align: left;
            }

            .welcome-content ul li p {
                line-height: 20px;
                padding: 0px;
                margin: 0px;
            }

            .welcome-content ul li .icons {
                width: 50px;
                margin-right: 10px;
                padding-right: 10px;
                border-right: 1px solid #797979;
                /* filter: invert(1); */
            }
        </style>

        <section class="welcome-content" style="background: #e6e8ff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                        <h3 class="sec_tit underline text-center ">Sectors Benefiting from Our Multi-Currency Wallet Development Solutions</h3>
                        <p class="text-center " style="font-size: 16px;">Companies across diverse industries globally utilize our cutting-edge multi-currency wallet development solutions to thrive in the fast-paced digital marketplace. Partner with our experts and join these leading sectors:</p>
                    </div>
                    <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/banking.webp') }}"></div>
                                <p class=" ">Banking</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/fintech.webp') }}"></div>
                                <p class=" ">Fintech</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/defi.webp') }}"></div>
                                <p class=" ">DeFi</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/gaming.png') }}"></div>
                                <p class=" ">Gaming</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/entertainment.svg') }}">
                                </div>
                                <p class=" ">Entertainment</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/art.webp') }}"></div>
                                <p class=" ">Fine Arts</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/metaverse.webp') }}"></div>
                                <p class=" ">Metaverse</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/government.png') }}"></div>
                                <p class=" ">Government</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/e-commerce.png') }}"></div>
                                <p class=" ">e-Commerce</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/cryptocurrency-wallet-development/icons/brand.png') }}"></div>
                                <p class=" ">Brand Loyalty</p>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="text-center cta_mine txt">
                    {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                        target="_blank" href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> --}}
                    <a rel="nofollow" href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Consult with Our Experts</span>
                    </a>
                </div>

            </div>
        </section>




        <div id="post-ico-services" class="types-cryptocurrency-wallet">
            <div class="container">
                <div class="row text-center">

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="sec_tit underline">White Label Crypto Wallets: A Strategic Advantage</h2>
                        <p>White-label crypto wallet development provides an efficient solution for businesses aiming to quickly and affordably enter the cryptocurrency market. Rather than creating a wallet from the ground up, companies can opt for a white-label solution—a pre-built, customizable wallet that simplifies the process. This approach conserves time, and resources, and bypasses intricate technical challenges.
                        <br><br>
                        By choosing white-label cryptocurrency wallet development, you can rebrand the wallet to fit your specific needs and style. This method is particularly advantageous for startups and businesses looking for a rapid market entry without sacrificing quality or security.</p>
                        <div class="text-left">
                        </div>
                    </div>
                    <div class="col-md-6 text-center"> <img class="lazy"
                            src="{{ asset('images/cryptocurrency-wallet-development/img-3.svg') }}" width="75%"
                            alt="Cryptocurrency Wallet Development Services"
                            title="Cryptocurrency Wallet Development Services"></div>
                </div>
            </div>
        </div>



        <div id="post-ico-services" class="types-cryptocurrency-wallet">
            <div class="container">
                <div class="row text-center">

                </div>
                <div class="row">
                    <div class="col-md-6 text-center pull-right"> <img class="lazy" src="{{ asset('images/cryptocurrency-wallet-development/crupto-wallet.webp') }}"
                            width="450" alt="White label Crypto Wallet Development"
                            title="White label Crypto Wallet Development"> </div>
                    <div class="col-md-6 pull-left">
                        <h3 class="sec_tit underline">Get Your App Live Quickly with Our White-Label Crypto Wallet Solutions</h3>
                        <p>Take advantage of the dynamic cryptocurrency market with our white-label crypto wallet development services, designed to deliver a tailored solution within just seven days. Our advanced software allows you to customize every feature to meet your specific needs, ensuring full adaptability. Additionally, our white-label crypto wallet solution combines exceptional security and seamless performance, offering unparalleled value at competitive costs. Choose our white-label option to deploy a powerful wallet with cutting-edge features and efficient functionality, and make your mark in the market swiftly!</p>
                        <div class="section-title">

                        </div>
                        <div class="text-left">

                            <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn"><span>Consult with Our Experts</span></a> 
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div id="post-ico-services" class="types-cryptocurrency-wallet gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left pull-right">
                        <h2 class="sec_tit underline">Engage Our Cryptocurrency Wallet Developers for Superior Outcomes</h2>
                        <p class="text-left" style="margin-left: 0;">Looking to make a significant impact in the Web3 space? Enlist our skilled cryptocurrency wallet developers to turn your vision into a reality. Our experts will handle every aspect—planning, designing, building, and deploying your crypto wallet—ensuring a seamless and effective launch. Start your business journey on the right foot by reaching out through the link below to discuss your project!</p>
                        <div class="text-left cta_mine  txt" style="margin-left: 0px!important; margin-top: 0px;">
                            {{-- <a rel="nofollow"
                                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                                target="_blank"
                                href="#"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> --}}
                            {{-- <a rel="nofollow" href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Consult with Our Experts</span>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 text-center pull-left">
                        <img class="lazy" src="{{ asset('images/cryptocurrency-wallet-development/img-1.webp') }}"
                            alt="White label Crypto Wallet Development Company"
                            title="White label Crypto Wallet Development Company" style="width: 355px">
                    </div>



                </div>
            </div>
        </div>






        <!--  <div class="demo_s" id="view_demo">
        <div class="container">
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 text-center">
                    <form class="form-side" id=" " method="post" action="" style="background: #2a2a2a; border-radius: 7px; padding:20px;">
    <h4 class="text-white">Need Demo?</h4><hr>
    <div class="form-group"><label for="email" class="text-white">Email Address</label><input type="email" class="form-control" name="email" id="email_sticky" placeholder="Your Email"> </div>
    <div class="form-group"><label class="text-white">messages</label><textarea placeholder=" Write text here..." id="textarea_sticky" name="message"></textarea></div>
    <div class="form-group"><input type="button" id="submit" class="demo_submit" value="Request Demo" style="max-width: 200px;"> </div>
    <input type="hidden" name="page_url" id="page_url" value="https://www.blockchainappfactory.com/cryptocurrency-wallet-development">
</form>
<script type="text/javascript">
    $(".demo_submit").on("click", function(e){
        e.preventDefault();
        var email = $("#email_sticky").val();
        var message = $("#textarea_sticky").val();
        var page_url = $("#page_url").val();
        if(!email){
            alert("Please enter email");
        }else if(!message){
            alert("Please enter message");
        }else{
            $.ajax({
                url: "demorequest.php",
                type: "GET",
                data: "email="+email+"&message="+message+"&page_url="+page_url,
                success: function(result) {
                    if(result == 1) {
                        // alert("Mail Sent Successfully");
                        // window.open("https://www.blockchainappfactory.com/pdf/BlockchainAppFactory.pdf", '_blank');
                        window.location.href = "success";
                        return false;
                    } else {
                        alert("Something went wrong, please try again later.");
                        return false;
                    }
                    $(".ajax-loader").hide();
                }
            });
        }
    });
</script>                </div> 
            <div class="section-title text-center">
                <h3 class="common_h3">View Demo</h3>
                <hr> </div>
            <div class="row demo_wrap">
                <div class="col-md-12 text-center">
                    <h5>Restore wallet </h5>
                    <p>12 words wallet backup pharse: "camera century couch easily fold imitate neck planet ski spatial weather wife"</p>
                    <p>Or</p>
                    <p>Scan the below QR code for above 12 words wallet backup phrases</p> <img class="lazy" data-src="images/wallet/qr.webp">
                    <div class="demo_bt">
                        <a rel="nofollow" href="https://play.google.com/store/apps/details?id=com.blockchainappfactory.mwallet" target="_blank"><img class="lazy" data-src="images/demo-buttons/android.webp"></a>
                        <a href="contact" target="_blank"><img class="lazy" data-src="images/demo-buttons/apple.webp"></a>
                    </div>
                </div>
            </div> 
        </div>
    </div> -->
        {{-- <div id="post-ico-services" class="types-cryptocurrency-wallet">
            <div class="container">
                <div class="row text-center">

                </div>
                <div class="row">
                    <div class="col-md-6 text-center pull-right"> <img class="lazy" data-src="images/crupto-wallet.webp"
                            width="450" alt="White label Crypto Wallet Development"
                            title="White label Crypto Wallet Development"> </div>
                    <div class="col-md-6 pull-left">
                        <h3 class="sec_tit underline">Hire Our Cryptocurrency Wallet Developers for the Best Results
                        </h3>
                        <p>Want to make an impactful mark in the Web3 market? Hire experienced cryptocurrency wallet
                            developers from our company to have the best version of your idea come alive for the masses.
                            Our professionals can plan, design, build, and deploy your crypto wallet solution in the way
                            you wish, making your business journey comfortable and smooth right from the beginning!
                            Contact us using the link below to start discussing your idea!
                        </p>
                        <div class="section-title">

                        </div>
                        <div class="text-left">

                            <!-- <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our Experts</span></a>  -->
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}





        <div class="why_chooose_sec pricing-table gray-bg">
            <div class="container">
                <div class="section-title text-center">
                    <h3 class="sec_tit underline">Why Partner with Us for Cryptocurrency Wallet Development?</h3>
                    <p>At our company, we are committed to delivering high-quality solutions that stand out in the global market. With our expertise in cryptocurrency wallet development, we are equipped to bring even the most distinctive visions to life.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left mt30">
                        <div class="cont cont2">
                            <ul>
                                <li><strong>Innovation-Driven:</strong> We are at the forefront of innovation, continually exploring and integrating disruptive technologies. Our thorough research ensures we remain ahead of trends, opening up new opportunities daily.</li>
                                <li><strong>Commitment to Quality:</strong> We focus on delivering top-tier products, prioritizing quality and customization. Our solutions are designed to be both current and future-ready, keeping you competitive in the fast-evolving cryptocurrency landscape.</li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mt30">
                        <div class="cont cont2">
                            <ul>

                                <li><strong>Experience and Expertise:</strong> Our experienced developers will guide you through every stage of the development process, ensuring the final product exceeds your expectations.</li>
                                {{-- <li><strong>Market Insights:</strong> Our adept team possesses deep market knowledge. We
                                    can provide you with a cryptocurrency wallet that's not just current but also
                                    future-ready, enabling you to stay ahead in the rapidly evolving world of
                                    cryptocurrencies.</li> --}}

                            </ul>
                        </div>
                    </div>

                </div>
                <p class="text-center">Choosing us means selecting a partner dedicated to excellence, innovation, and client satisfaction. We're here to provide you with cutting-edge cryptocurrency wallet solutions tailored to your needs.</p>

                <div class="text-center cta_mine txt">
                    {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                        target="_blank" href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> --}}
                    <a rel="nofollow" href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Consult with Our Experts</span>
                    </a>
                </div>
            </div>
        </div>


        <style type="text/css">
            .icon-text-1 h3 {
                font-size: 18px;
                color: #140050;
                font-weight: 600
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
                background: #f9eaff;
                padding: 15px;
                border-left: 5px solid #140050
            }

            .icon-text-1 .icon-text-icon {
                width: 80px;
                height: 80px;
                border-radius: 12px;
                margin-bottom: 20px;
                line-height: 80px;
                text-align: center;
                overflow: hidden;
            }

            .icon-text-1 img {
                width: 64px;
                height: 64px;
                filter: drop-shadow(0px 100px 0 #140050);
                transform: translateY(-100px);
                /*animation:5s infinite spin*/
            }

            .icon_content {
                padding-left: 20px;
                min-height: 100px;
                width: 80%
            }

            .icon-text-1 p {
                margin: .6rem 0 0
            }
        </style>

        @include('static.tech-stack-four-tab-section', [
            'title' => 'Our Technological Stack for Developing Your Cryptocurrency Wallet', 
            'desc' => "To maximize the potential of your unique cryptocurrency wallet concept, leveraging our comprehensive tech stack can be highly advantageous. Have specific requirements? Reach out to us today, and we'll craft the ideal solution tailored to your needs!",
        ])

        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => 'What is a Cryptocurrency Wallet?',
                    'ans' => "A cryptocurrency wallet is a digital tool that allows users to securely store, manage, and transact digital currencies. It consists of public and private keys used to access and control crypto assets."
                ],
                [
                    'ques' => 'What Types of Cryptocurrency Wallets Are Available?',
                    'ans' => "Cryptocurrency wallets come in various forms, including hot wallets (online), cold wallets (offline), hardware wallets, and paper wallets. Each type offers different levels of security and accessibility based on user needs."
                ],
                [
                    'ques' => 'How Does a Cryptocurrency Wallet Operate?',
                    'ans' => "A cryptocurrency wallet works by generating and managing cryptographic keys. It enables users to send and receive digital currencies by interacting with blockchain networks while ensuring secure transactions."
                ],
                [
                    'ques' => 'What Are Key Features of a Cryptocurrency Wallet App?',
                    'ans' => "Essential features of a cryptocurrency wallet app include secure key storage, transaction management, user-friendly interface, support for multiple cryptocurrencies, and robust security measures like multi-factor authentication."
                ],
                [
                    'ques' => 'How Secure Are Cryptocurrency Wallets?',
                    'ans' => "Cryptocurrency wallets' security varies depending on the type and features. Cold wallets generally offer higher security as they are offline, while hot wallets, though more accessible, are more vulnerable to online threats."
                ],
                [
                    'ques' => 'How Should I Select the Right Cryptocurrency Wallet?',
                    'ans' => "Choose a cryptocurrency wallet based on factors such as security features, ease of use, compatibility with different cryptocurrencies, and your specific needs for transaction frequency and storage."
                ],
                [
                    'ques' => 'Which Programming Languages Are Used in Cryptocurrency Wallet Development?',
                    'ans' => "Cryptocurrency wallets are typically developed using languages such as JavaScript, Python, C++, and Solidity (for smart contracts). The choice depends on the platform and functionality requirements."
                ],
                [
                    'ques' => 'What Is the Cost of Developing a Cryptocurrency Wallet App?',
                    'ans' => "The cost of developing a cryptocurrency wallet app varies based on complexity, features, and development time. Generally, it includes expenses for design, development, security, and ongoing maintenance."
                ],
                [
                    'ques' => 'What Are the Legal and Regulatory Aspects of Cryptocurrency Wallet Development?',
                    'ans' => "Legal and regulatory considerations include compliance with financial regulations, data protection laws, and anti-money laundering (AML) requirements. Ensuring adherence to these regulations is crucial for legal operation."
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
            background: #140050 !important;
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
            background: #e6e8ff
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
    <script src="js/vendor.js" type="325da172aadf39648286e387-text/javascript"></script>
    <script src="js/plugins-reduced.js" type="325da172aadf39648286e387-text/javascript"></script>
    <script src="build/js/intlTelInput.js" type="325da172aadf39648286e387-text/javascript"></script>
    <!-- <script>
        $('.owl-carouseltwo').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script> -->
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

    <script type="325da172aadf39648286e387-text/javascript">
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

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="325da172aadf39648286e387-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
    <script type="325da172aadf39648286e387-text/javascript"
        src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
        media="screen">
    <script type="325da172aadf39648286e387-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="325da172aadf39648286e387-text/javascript">
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
    $(".sticky-form .quick-cont-btn").click(function(e) {
        $('body').addClass('fixedPosition full-width');
        $(".sticky-form .formdiv").addClass('show');
        e.stopPropagation();
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
    <script type="325da172aadf39648286e387-text/javascript">
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
    <script type="325da172aadf39648286e387-text/javascript">
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

    <script type="325da172aadf39648286e387-text/javascript">
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
                <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    target="blank">
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



    <script type="325da172aadf39648286e387-text/javascript">
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
    <script type="325da172aadf39648286e387-text/javascript">
        $(".crypto-popup").click(function(e) {
        $('crypto-popup').addClass('fixedPosition full-width');
        $(".login-popup").addClass('show');
        e.stopPropagation();
    });
    </script>
    <!-- Button Lightbox Script - End -->

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="325da172aadf39648286e387-|49" defer></script>
</div>

@endsection