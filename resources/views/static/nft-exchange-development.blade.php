@extends('layouts.static')
    @section('title', 'NFT Exchange Development')
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
        color: #000
    }

    .banner_content {
        text-align: left
    }

    .banner-overlay {
        background-color: rgb(0 0 0 / 30%)
    }

    .banner {
        background: #011635;
        background-size: cover;
        padding-top: 130px;
        padding-bottom: 50px
    }

    h3.common_h3 {
        font-size: 30px !important
    }

    .bg-2 {
        background-image: linear-gradient(45deg, #000, #00000052), url(images/ido/bg-3.webp);
        background-size: cover;
        padding-top: 65px;
        padding-bottom: 50px;
        height: auto
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: .95
    }

    #ico .banner_content {
        position: relative;
        top: 0;
        transform: none
    }

    .banner_content .contentall {
        margin-top: 50px
    }

    .contentall h1 {
        color: #fff !important
    }

    .contentall p {
        color: #fff !important
    }

    .ban_tirt,
    .contentall h1 {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 30px;
        text-transform: capitalize
    }

    .contentall p {
        font-weight: 400;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 18px;
        margin: 0 auto 30px;
        display: block
    }

    .contentall a {
        color: #fff;
        cursor: pointer;
        margin-bottom: 15px
    }

    .sec_tit,
    .sec_tit h2 {
        font-size: 25px !important;
        font-weight: 700;
        color: #000;
        line-height: 1.4;
        text-transform: capitalize
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        letter-spacing: 0;
        line-height: 1.3
    }

    .wrapper {
        overflow: hidden;
        width: 100%;
        padding: 10px 0 10px;
        margin-bottom: 30px;
        color: #fff
    }

    @media (max-width:1199px) {

        .ban_tirt,
        .contentall h1 {
            font-size: 30px
        }
    }

    @media screen and (max-width:768px) {
        .banner {
            height: auto
        }
    }

    @media (max-width:768px) {
        .banner_content .contentall {
            margin-top: 30px;
            text-align: center
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)))
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 50px
        }

        .banner-overlay {
            background: #000000ba
        }

        .banner_content p {
            font-size: 14px !important
        }

        .ban_tirt,
        .contentall h1 {
            font-size: 25px
        }

        .sec_tit,
        .sec_tit h2 {
            font-size: 20px !important
        }

        .pull-left img {
            margin-top: 30px
        }
    }

    @media (max-width:426px) {
        .eto-exchange-flip .flip-box {
            min-height: auto
        }
    }

    h3.section-title {
        font-size: 25px !important;
        font-weight: 700;
        text-transform: capitalize
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
        margin-bottom: 10px
    }

    .intro_cnt img {
        border-radius: 10px;
        margin-top: 14px;
    }

    .flip-box-row {
        margin-bottom: 0
    }

    .flip-box {
        margin-bottom: 30px;
        padding: 30px 14px
    }

    .flip-box:hover {
        background: #47b475;
        color: #fff;
        transition: all .5s ease-in
    }

    .flip-box:hover .flip-tit {
        color: #fff
    }

    a.home-talk-experts.w_bt {
        background: no-repeat;
        color: #47b475;
        border: 2px solid #47b475;
        padding: 8px 25px
    }

    a.home-talk-experts.w_bt:hover {
        color: #000 !important
    }

    .sec_tit h2 {
        display: inline
    }

    .text-white {
        color: #fff
    }

    .ig-size {
        height: 400px
    }

    @media screen and (max-width:768px) {
        .ig-size {
            height: auto;
            margin-bottom: 30px
        }
    }

    .pro-map {
        position: relative
    }

    .pro-map:after,
    .pro-map:before {
        content: "";
        display: block;
        width: 100%;
        clear: both
    }

    .pro-map:before {
        width: 2px;
        height: 100%;
        background: #e5e9ed;
        margin: 0 auto;
        position: absolute;
        top: 0;
        left: 0;
        right: 0
    }

    .pro-map .pro-map-line {
        width: 50%;
        padding-right: 30px;
        float: left;
        position: relative
    }

    .pro-map .pro-map-line:last-child {
        margin-bottom: 0
    }

    .pro-map .pro-map-line:after {
        content: "";
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #e5e9ed;
        position: absolute;
        top: 0;
        right: -6px;
        transition: all .3s ease 0s
    }

    .pro-map .pro-map-line:hover:after {
        background: #00b7c2;
        transform: scale(1.3)
    }

    .pro-map .pro-map-line-content {
        padding: 50px 40px;
        background: #e5e9ed;
        position: relative;
        transition: all .3s ease 0s
    }

    .pro-map .pro-map-line-content:hover {
        background: #00b7c2
    }

    .pro-map .pro-map-line-content:after {
        content: "";
        border-top: 30px solid #e5e9ed;
        border-right: 15px solid transparent;
        position: absolute;
        top: 0;
        right: -15px;
        transition: all .3s ease 0s
    }

    .pro-map .pro-map-line-content:hover:after {
        border-top-color: #00b7c2
    }

    .pro-map .post {
        display: block;
        font-size: 20px;
        color: #22272c;
        padding-bottom: 8px;
        margin: 8px 0 15px 0;
        position: relative;
        font-weight: 700
    }

    .pro-map .pro-map-line-content:hover .post {
        color: #fff
    }

    .pro-map .post:after {
        content: "";
        display: block;
        width: 30px;
        border-top: 2px solid #22272c;
        position: absolute;
        bottom: 0;
        left: 0;
        transition: all .3s ease 0s
    }

    .pro-map .pro-map-line-content:hover .post:after {
        border-top-color: #fff
    }

    .pro-map .title {
        font-size: 18px;
        font-weight: 500;
        color: #00b7c2;
        text-transform: capitalize;
        transition: all .3s ease 0s
    }

    .pro-map .description {
        font-size: 14px;
        color: #000;
        line-height: 25px
    }

    .pro-map .pro-map-line-content:hover .description,
    .pro-map .pro-map-line-content:hover .title {
        color: #fff
    }

    .pro-map .pro-map-line:nth-child(2n) {
        padding: 0 0 0 30px;
        margin-top: 75px
    }

    .pro-map .pro-map-line:nth-child(2n):after {
        right: auto;
        left: -6px
    }

    .pro-map .pro-map-line:nth-child(2n) .pro-map-line-content:after {
        border-left: 15px solid transparent;
        border-right: none;
        left: -15px;
        right: auto
    }

    @media only screen and (max-width:767px) {
        .pro-map:before {
            margin: 0;
            left: 0
        }

        .pro-map .pro-map-line {
            width: 100%;
            float: none;
            padding: 0 0 0 30px;
            margin-bottom: 20px
        }

        .pro-map .pro-map-line:after {
            right: auto;
            left: -6px
        }

        .pro-map .pro-map-line-content {
            padding: 20px
        }

        .pro-map .pro-map-line-content:after {
            border-left: 15px solid transparent;
            border-right: none;
            left: -15px;
            right: auto
        }

        .pro-map .pro-map-line:nth-child(2n) {
            margin-top: 0
        }
    }

    .serviceBox {
        color: #000;
        text-align: right;
        padding: 10px 10px 10px 20px;
        position: relative;
        z-index: 1;
        min-height: 281px;
        margin-bottom: 15px
    }

    .serviceBox:after,
    .serviceBox:before {
        content: '';
        width: calc(100% - 121px);
        height: calc(100% - 60px);
        border-left: 1px dashed #333;
        border-top: 1px dashed #333;
        position: absolute;
        bottom: 0;
        left: 4px
    }

    .serviceBox:after {
        background-color: #58ccde;
        border: none;
        height: 10px;
        width: 10px;
        border-radius: 50%;
        left: 0
    }

    .serviceBox .service-icon {
        color: #fff;
        background-color: #58ccde;
        border: 1px dashed #485c60;
        font-size: 50px;
        text-align: center;
        line-height: 100px;
        height: 100px;
        width: 100px;
        margin: 0 0 30px;
        border-radius: 50%;
        box-shadow: 0 0 10px rgb(0 0 0 / 35%);
        display: inline-block;
        position: relative
    }

    .serviceBox .service-icon:before {
        content: '';
        border-left-color: transparent;
        border-top-color: transparent;
        border-radius: inherit;
        transform: rotate(45deg);
        position: absolute;
        right: -8px;
        top: -8px;
        bottom: -8px;
        left: -8px
    }

    .serviceBox .title {
        color: #000;
        font-size: 20px;
        font-weight: 700;
        line-height: 25px;
        text-align: left;
        margin: 0 0 5px
    }

    .serviceBox .description {
        font-size: 13px;
        line-height: 20px;
        text-align: left;
        letter-spacing: .5px;
        margin: 0;
        color: #000
    }

    @media only screen and (max-width:990px) {
        .serviceBox {
            margin: 0 auto 30px
        }
    }

    @media only screen and (max-width:767px) {
        .serviceBox {
            width: auto
        }
    }

    .uniq_features ul {
        padding-left: 15px
    }

    .uniq_features ul li {
        margin-bottom: 15px;
        position: relative;
        padding-left: 29px
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
        color: #03b787
    }

    .perfect-script-items1 {
        box-shadow: 0 5px 15px 0 rgb(21 10 82 / 20%);
        padding: 30px 15px 10px;
        border-radius: 16px;
        background-color: #fff;
        min-height: 154px;
        margin-bottom: 20px
    }

    .perfect-script-items1 .icon {
        width: 70px;
        height: 70px;
        line-height: 75px;
        position: relative;
        border-radius: 0 50% 50% 0;
        color: #fff;
        font-size: 40px;
        box-shadow: 3px 14px 13px 0 #0000003b;
        z-index: 9;
        float: left;
        background: #f5efef;
        margin-left: -15px
    }

    .perfect-script-items1 .icon img {
        width: 45px;
        margin-top: -8px
    }

    .perfect-script-items1 .content {
        display: block;
        float: left;
        width: 80%;
        padding-left: 30px
    }

    .perfect-script-items1 strong {
        color: #47b475;
        font-size: 20px
    }

    .perfect-script-items1 p {
        text-align: left
    }

    .feat-bg {
        background: #4caf5017
    }

    .roadmap {
        width: 100%;
        background-size: cover !important;
        background-repeat: no-repeat
    }

    .text-width {
        width: 80%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        color: #000
    }

    .bgg {
        background-image: linear-gradient(179deg, #47b475 0, #19aec5 74%)
    }

    .blog-slider {
        width: 95%;
        position: relative;
        max-width: 800px;
        margin: auto;
        background: #fff;
        box-shadow: 0 14px 80px rgba(34, 35, 58, .2);
        padding: 25px;
        border-radius: 25px;
        height: 400px;
        transition: all .3s
    }

    @media screen and (max-width:992px) {
        .blog-slider {
            max-width: 680px;
            height: 400px
        }
    }

    @media screen and (max-width:768px) {
        .blog-slider {
            min-height: 500px;
            height: auto;
            margin: 180px auto
        }
    }

    @media screen and (max-height:500px) and (min-width:992px) {
        .blog-slider {
            height: 350px
        }
    }

    .blog-slider__item {
        display: flex;
        align-items: center
    }

    @media screen and (max-width:768px) {
        .blog-slider__item {
            flex-direction: column
        }
    }

    .blog-slider__item.swiper-slide-active .blog-slider__img img {
        opacity: 1;
        transition-delay: 0.3s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>* {
        opacity: 1;
        transform: none
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(1) {
        transition-delay: 0.3s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(2) {
        transition-delay: 0.4s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(3) {
        transition-delay: 0.5s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(4) {
        transition-delay: 0.6s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(5) {
        transition-delay: 0.7s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(6) {
        transition-delay: 0.8s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(7) {
        transition-delay: 0.9s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(8) {
        transition-delay: 1s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(9) {
        transition-delay: 1.1s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(10) {
        transition-delay: 1.2s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(11) {
        transition-delay: 1.3s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(12) {
        transition-delay: 1.4s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(13) {
        transition-delay: 1.5s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(14) {
        transition-delay: 1.6s
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>:nth-child(15) {
        transition-delay: 1.7s
    }

    .blog-slider__img {
        width: 300px;
        flex-shrink: 0;
        height: 300px;
        border-radius: 20px;
        transform: translateX(-80px);
        overflow: hidden
    }

    .blog-slider__img:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(147deg, #fe8a3900 0, #fd383800 74%);
        border-radius: 20px;
        opacity: .8
    }

    .blog-slider__img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        opacity: 0;
        border-radius: 20px;
        transition: all .3s
    }

    @media screen and (max-width:768px) {
        .blog-slider__img {
            transform: translateY(-50%);
            width: 90%
        }
    }

    @media screen and (max-width:576px) {
        .blog-slider__img {
            width: 95%
        }
    }

    @media screen and (max-height:500px) and (min-width:992px) {
        .blog-slider__img {
            height: 270px
        }
    }

    .blog-slider__content {
        padding-right: 25px
    }

    @media screen and (max-width:768px) {
        .blog-slider__content {
            margin-top: -80px;
            text-align: center;
            padding: 0 30px
        }
    }

    @media screen and (max-width:576px) {
        .blog-slider__content {
            padding: 0
        }
    }

    .blog-slider__content>* {
        opacity: 0;
        transform: translateY(25px);
        transition: all .4s
    }

    .blog-slider__code {
        color: #7b7992;
        margin-bottom: 15px;
        display: block;
        font-weight: 500
    }

    .blog-slider__title {
        font-size: 24px;
        font-weight: 700;
        color: #0d0925;
        margin-bottom: 20px
    }

    .blog-slider__text {
        color: #000;
        margin-bottom: 30px;
        line-height: 1.5em
    }

    .blog-slider__button {
        display: inline-flex;
        background-image: linear-gradient(147deg, #fe8a39 0, #fd3838 74%);
        padding: 15px 35px;
        border-radius: 50px;
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        justify-content: center;
        text-align: center;
        letter-spacing: 1px
    }

    @media screen and (max-width:576px) {
        .blog-slider__button {
            width: 100%
        }
    }

    .blog-slider .swiper-container-horizontal>.swiper-pagination-bullets,
    .blog-slider .swiper-pagination-custom,
    .blog-slider .swiper-pagination-fraction {
        bottom: 10px;
        left: 0;
        width: 100%
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
        transform: translateY(-50%)
    }

    @media screen and (max-width:768px) {
        .blog-slider__pagination {
            transform: translateX(-50%);
            left: 50% !important;
            top: 205px;
            width: 100% !important;
            display: flex;
            justify-content: center;
            align-items: center
        }
    }

    .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 8px 0
    }

    @media screen and (max-width:768px) {
        .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 5px
        }
    }

    .blog-slider__pagination .swiper-pagination-bullet {
        width: 11px;
        height: 11px;
        display: block;
        border-radius: 10px;
        background: #062744;
        opacity: .2;
        transition: all .3s
    }

    .blog-slider__pagination .swiper-pagination-bullet-active {
        opacity: 1;
        background: #000;
        height: 30px
    }

    @media screen and (max-width:768px) {
        .blog-slider__pagination .swiper-pagination-bullet-active {
            height: 11px;
            width: 30px
        }
    }

    .flip-tit {
        font-size: 20px;
        color: #000;
        line-height: 1.6;
        margin-bottom: 11px;
        font-weight: 700
    }

    #accordion .panel {
        border: none;
        border-radius: 3px;
        box-shadow: none;
        margin-bottom: 15px
    }

    #accordion .panel-heading {
        padding: 0;
        border: none;
        border-radius: 3px
    }

    #accordion .panel-title a {
        display: block;
        padding: 8px 15px 12px 50px;
        border: 1px solid #c3c3c3;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 700;
        color: #000;
        position: relative
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
        left: 15px
    }

    #accordion .panel-title a.collapsed:before {
        content: "\f067"
    }

    #accordion .panel-body {
        padding: 10px 15px;
        font-size: 15px;
        color: #000;
        line-height: 27px;
        border: 2px solid #ddd
    }

    .font-wei {
        color: #000;
        font-weight: 700
    }

    .font_wei {
        color: #fff
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
                                <div class="banner_content_tit">
                                    <div class="ban_tirt">
                                        <h1>Revolutionize Your Business with Our NFT Exchange Platform</h1>
                                    </div>
                                    <p>Transform your business approach with a cutting-edge platform that delivers effortless NFT exchanges and instant liquidity. Elevate your operations by leveraging our advanced NFT exchange platform development services.
                                        <br><br>Blockchain App Factory ensures flawless transactions and rapid liquidity for your NFTs.
                                    </p>

                                </div>
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
                                            href="#"
                                            data-color-override="false" data-hover-color-override="false"
                                            data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                                        <a href="{{ url('consultation') }}"
                                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <img src="{{ asset('images/nfte/exchange_nft.webp') }}" width="445px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit">
                        <h2 class="font-wei underline">Leading the Way in NFT Exchange Platform Innovation</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="text-center mt20">NFTs are redefining the digital landscape, emerging as a revolutionary trend in recent years. With our expert NFT exchange platform development, you’re in expert hands. Blockchain App Factory stands at the forefront of innovation, perfectly aligning with your digital business strategy. As NFTs gain traction across various industries, our services are designed to help you harness this transformative technology.
                        </p>
                        <p class="text-center mt20">Our comprehensive development solutions offer a wide array of choices tailored to your needs. In a market saturated with NFT platforms, merely setting up a basic exchange is not enough. We are committed to crafting an exceptional NFT exchange platform that will position you as a leader in the industry. Now is the time to embark on a groundbreaking venture, and we are the ideal partner to guide you through the complexities of the crypto world, delivering unparalleled benefits and features.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro_cnt gray_bg common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <div class="sec_tit">
                                <h2 class="font-wei underline">The Role of NFTs in Decentralized Finance (DeFi)</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt40">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <img src="{{ asset('images/nfte/sig.webp') }}" class="mt-4" alt="NFT Exchange Platform Development"
                            title="Significance Of NFT In DeFi">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <p class="mt10 text-justify">Non-fungible tokens (NFTs) serve as digital embodiments of unique assets, endowing your collectibles with inherent value. The worth of an NFT is tied to the value of its underlying assets, which can potentially reach into the billions. This unique digital representation enhances the asset's value, enabling DeFi platforms to accept NFTs as collateral. Unlike fungible tokens, NFTs cannot be exchanged on a one-to-one basis due to their indivisibility.</p>
                        <p class="mt10 text-justify">To address this, DeFi platforms offer groundbreaking solutions that provide instant liquidity for NFTs. This innovation attracts significant investment in NFT creation, as liquidity is a crucial attribute for any token. By overcoming the limitations of traditional NFT standards, DeFi platforms leverage NFTs to rejuvenate their offerings, introducing cross-exchange capabilities that ensure immediate liquidity. This evolution in DeFi not only enhances the liquidity of NFTs but also bolsters their development, making them a valuable asset in the DeFi ecosystem.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="common_h3 text-center font-wei underline">How Our NFT Exchange Software Operates</h2>
                            <p class="text-center">Our NFT exchange software streamlines the NFT trading process through a series of steps designed to ensure a seamless experience:</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pro-map">
                            <div class="pro-map-line">
                                <div class="pro-map-line-content">
                                    <span class="post">Account Access</span>
                                    <p class="description">Log in to your preferred NFT trading platform using your existing credentials. If you’re new to the platform, easily create an account by providing the necessary information.</p>
                                </div>
                            </div>
                            <div class="pro-map-line">
                                <div class="pro-map-line-content">
                                    <span class="post">Minting and Listing</span>
                                    <p class="description">After logging in, connect your account to your crypto wallet to enable transactions. Upload your asset, customize your preferences, and mint your NFT to make it available on the marketplace.</p>
                                </div>
                            </div>
                            <div class="pro-map-line">
                                <div class="pro-map-line-content">
                                    <span class="post">NFT Sales</span>
                                    <p class="description">Craft a compelling description, set up your profile, and establish secondary fees. Customize the properties of your NFT and choose your sales strategy—either a fixed price or auction—to make your NFT available for purchase.</p>
                                </div>
                            </div>
                            <div class="pro-map-line">
                                <div class="pro-map-line-content">
                                    <span class="post">NFT Purchases</span>
                                    <p class="description">Explore the NFT marketplace to find assets that align with your needs and objectives. Ensure that your selected NFTs are compatible with your crypto wallet and complete the purchase through the integrated platform.</p>
                                </div>
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
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="common_h3 text-center font-wei underline">Critical Factors Shaping Our NFT Exchange Solution</h2>
                            <p class="text-center">Our NFT trading platform excels due to several pivotal features that enhance the NFT trading experience:</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <span><img class="lazy" src="{{ asset('images/nfte/icon/1.webp') }}" alt=""></span>
                            </div>
                            <h3 class="title">Token Standards</h3>
                            <p class="description">NFTs require specialized token standards to showcase their unique, indivisible attributes. It is crucial to implement token standards that align with these characteristics to ensure seamless operation and authenticity.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <span><img class="lazy" src="{{ asset('images/nfte/icon/2.webp') }}" alt=""></span>
                            </div>
                            <h3 class="title">Advanced Search Functionality</h3>
                            <p class="description">A robust search engine is integral to the platform, enabling users to easily locate and acquire their desired NFTs. This feature enhances user experience by making it simple to find and purchase NFTs that meet specific needs.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <span><img class="lazy" src="{{ asset('images/nfte/icon/3.webp') }}" alt=""></span>
                            </div>
                            <h3 class="title">Customizable Trade Rules</h3>
                            <p class="description">Our platform allows creators and sellers to define their own trading rules, choosing between "Fixed Price" or "Auction" models. This flexibility ensures that NFT transactions align with the seller's preferences and market strategies.</p>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <span><img class="lazy" src="{{ asset('images/nfte/icon/4.webp') }}" alt=""></span>
                            </div>
                            <h3 class="title">Seamless Wallet Integration</h3>
                            <p class="description">Wallet integration is fundamental, facilitating secure transactions for buying and selling NFTs. Our platform supports decentralized and immutable wallets, which also allow for NFT staking, enhancing overall liquidity and flexibility.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <span><img class="lazy" src="{{ asset('images/nfte/icon/5.webp') }}" alt=""></span>
                            </div>
                            <h3 class="title">Comprehensive Support</h3>
                            <p class="description">Outstanding customer support is essential for elevating your business. Our platform prioritizes user feedback and support, providing the tools and assistance necessary to address concerns and improve user satisfaction continuously.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit underline">
                        <h3 class="font-wei">Next-Generation NFT Exchange Platforms on Multi-Chain Networks</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="mt10 text-center">Our NFT exchange platform leverages multi-chain networks to harness their extensive advantages. Each blockchain network brings unique services and specialties to the table, enhancing overall performance. <br><br>
                        As networks expand, they often face challenges like elevated exchange fees or gas costs, coupled with decreased performance. To address these issues, emerging networks offer optimized throughput and reduced transaction costs. We integrate these advanced networks into your NFT exchange platform, ensuring high reliability and exceptional service. Our approach equips your platform with cutting-edge features and deploys it across multi-chain environments, delivering global performance and seamless trading experiences.
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

        @include('static.color-hover-cards-section', [
            'title' => 'Pioneering Aspects of Our NFT Trading Infrastructure', 
            'desc' => '',
            'cards' => [
                [
                    'title' => 'High Throughput Performance',
                    'desc' => "Our NFT exchange platform delivers exceptional throughput, handling millions of transactions per second seamlessly and without interruption.",
                    'image' => 'nfte/icons/transactions.png'
                ],
                [
                    'title' => 'Multi-Currency Wallet Integration',
                    'desc' => "Support for a wide range of cryptocurrencies ensures secure and smooth transactions, catering to diverse digital asset needs.",
                    'image' => 'nfte/icons/wallet.png'
                ],
                [
                    'title' => 'Instant Liquidity',
                    'desc' => 'Leverage secure API connections to external exchanges, providing immediate liquidity for your NFTs.',
                    'image' => 'nfte/icons/liquidity.webp'
                ],
                [
                    'title' => 'Crypto and Fiat Flexibility',
                    'desc' => "Experience immediate liquidity in both cryptocurrencies and fiat currencies, accommodating various financial preferences.",
                    'image' => 'nfte/icons/bitcoin.webp'
                ],
                [
                    'title' => 'Enhanced KYC and AML Compliance',
                    'desc' => "Implement geography-based KYC/AML protocols for thorough user identity verification, particularly for large transactions.",
                    'image' => 'nfte/icons/kyc.png'
                ],
                [
                    'title' => 'Referral and Reward Programs',
                    'desc' => "Our platform’s reward system offers users exclusive incentives and exceptional services, enhancing the overall trading experience.",
                    'image' => 'nfte/icons/rewards.png'
                ],
                [
                    'title' => 'Multi-Language Support',
                    'desc' => 'Enjoy a multilingual interface and interactive UI, ensuring a user-friendly experience for a global audience.',
                    'image' => 'nfte/icons/multi-laungage-support.webp'
                ],
                [
                    'title' => 'Algorithmic Trading Bots',
                    'desc' => 'Utilize advanced algorithms for precise and efficient trading, optimizing your trading strategy.',
                    'image' => 'nfte/icons/trading-bot.png'
                ],
                [
                    'title' => 'Robust Multi-Layer Security',
                    'desc' => "Benefit from military-grade security with multi-layer protection and two-factor authentication, safeguarding your assets.",
                    'image' => 'nfte/icons/security.png'
                ],
                [
                    'title' => 'Advanced Trading Tools',
                    'desc' => "Access comprehensive trading charts and metrics, empowering strategic decision-making and optimizing your trading approach.",
                    'image' => 'nfte/icons/trading-panel.png'
                ],
                [
                    'title' => 'Staking and Investment Opportunities',
                    'desc' => "Our platform’s staking and investment features help you build a lucrative revenue stream, enhancing your financial growth.",
                    'image' => 'nfte/icons/investment.webp'
                ],
                [
                    'title' => 'Powerful Trading Engine',
                    'desc' => "Experience a sophisticated trading dashboard with flexible order types, including market, limit, and stop orders, for a superior trading experience.",
                    'image' => 'nfte/icons/trading-panel.png'
                ],
                [
                    'title' => 'Cross-Chain Connectivity',
                    'desc' => "Our NFT exchange platform supports multi-chain integration, including the Polkadot ecosystem, to boost performance and blockchain interoperability.",
                    'image' => 'nfte/icons/cross-chain.webp'
                ],
            ],
        ])

        <div class="common_spacing uniq_features gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 pull-left">
                        <img class="lazy mt-4" src="{{ asset('images/nfte/feat1.jpeg') }}" alt="NFT Exchange Security Features"
                            title="Security features for NFT Exchange">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 pull-right">
                        <h2 class="common_h3 sec-tit underline text-left font-wei">Fortified Security of Our NFT Exchange Platform</h2>
                        <ul>
                            <li>Advanced HTTP Authentication.</li>
                            <li>Robust Cross-Site Request Forgery Shields.</li>
                            <li>Jail Login Prevention.</li>
                            <li>Effective Anti-Denial of Service Measures.</li>
                            <li>Comprehensive Data Encryption.</li>
                            <li>Sophisticated Anti-Distributed Denial of Service.</li>
                            <li>Enhanced Server-Side Safeguards.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="common_h3 text-center font-wei underline">Milestones in the Evolution of Our Premier NFT Exchange Platform</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img class="lazy roadmap" src="{{ asset('images/nfte/road-map-final1.png    ') }}"
                            alt="NFT Exchange Platform Development" title="Develop your NFT Exchange Platform">
                    </div>
                </div>
            </div>
        </div>

        <div class="common_spacing uniq_features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 pull-left">
                        <img class="lazy" src="{{ asset('images/nfte/busi.png') }}" alt="NFT Exchange Platform Benefits"
                            title="Business Benefits of NFT Exchange Platform">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 pull-right">
                        <h2 class="common_h3 sec-tit underline text-left font-wei">Empowering NFT Exchange Platform Ownership</h2>
                        <ul>
                            <li>High-Performance Infrastructure</li>
                            <li>Economically Advantageous</li>
                            <li>Customization</li>
                            <li>Tailor-Made Flexibility</li>
                            <li>Seamless Integration</li>
                            <li>Expansive Market Reach</li>
                            <li>Strong Audience Engagement</li>
                            <li>Thoroughly Validated</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit">
                        <h2 class="font-wei">Elevate Your Business with Our Expert Blockchain Craftsmanship</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="text-center">Our skilled team leverages deep expertise in blockchain technology to transform the industry with cutting-edge solutions and innovations. We enhance your decentralized ecosystem with secure, reliable, and advanced technology, ensuring a superior user experience.</p>
                        <p class="text-center">We deliver a comprehensive suite of blockchain services, spanning DeFi to NFTs. Our end-to-end development approach equips your NFT trading exchange with robust security, next-generation technology, and impactful marketing strategies. We propel your business to prominence in the crypto market, unlocking its full potential.</p>
                        <p class="text-center">With a profound focus on NFTs, we create groundbreaking products that stand out. Our blockchain mastery enables us to launch NFT exchange platforms across diverse blockchain networks, offering cross-chain capabilities to position you as a formidable player in the dynamic crypto landscape.</p>
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
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => "What exactly is an NFT exchange?",
                    'ans' => "An NFT exchange is a platform where users can buy, sell, and trade non-fungible tokens. It functions similarly to traditional trading platforms but specifically for digital assets that are unique and indivisible."
                ],
                [
                    'ques' => "Where can I find a marketplace to trade NFTs?",
                    'ans' => "NFTs can be traded on various platforms including OpenSea, Rarible, and Foundation. Each platform offers different features and focuses on various types of NFTs, so choosing the right one depends on your specific needs."
                ],
                [
                    'ques' => "Who are the top developers for NFT exchange platforms?",
                    'ans' => "Several companies specialize in NFT exchange platform development, known for their innovation and reliability. Leading firms include those with extensive blockchain expertise and a track record of successful projects in the crypto space."
                ],
                [
                    'ques' => "What’s the process to build an NFT exchange on Ethereum?",
                    'ans' => "Developing an NFT exchange on Ethereum involves designing smart contracts, integrating with Ethereum’s blockchain, and creating a user-friendly interface. You’ll need blockchain development skills and familiarity with Ethereum’s ecosystem to ensure a seamless build."
                ],
                [
                    'ques' => "How much does it cost to develop an NFT art trading platform?",
                    'ans' => "The cost to build an NFT art trading platform varies widely based on complexity and features. Key factors include development time, technology stack, and customization needs, with prices typically ranging from tens of thousands to several hundred thousand dollars."
                ],
                [
                    'ques' => "How do NFT auction platforms generate revenue?",
                    'ans' => "NFT auction platforms earn money through transaction fees, listing fees, and a percentage of sales. They may also charge for premium features or services, creating multiple revenue streams from both buyers and sellers."
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