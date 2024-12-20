@extends('layouts.static')
    @section('title', 'NFT Adoption Market Analysis Report')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
    .progress {
        margin-bottom: 0;
        height: 13px;
    }

    .progress-bar {
        font-size: 12px;
        line-height: 14px;
    }

    .blockchain-plateform.owl-carousel .owl-item img {
        max-width: 80px;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .blockchain-plateform.owl-carousel .owl-item h6 span {
        font-size: 24px;
        font-weight: bold;
    }

    body {
        color: #000000;
    }

    .owl-theme .owl-dots .owl-dot {
        display: inline-block;
    }

    @media screen and (max-width: 767px) {
        table.visible-xs {
            display: table !important;
        }
    }

    .banner_content {
        text-align: left;
    }

    .contentall a {
        margin-top: 20px;
    }

    .banner {
        background-image: url(images/bitcoin-ordinals/banner-bg.webp);
        background-size: cover;
        padding-top: 80px;
        padding-bottom: 80px;
        height: auto;
        background-position: center;
    }

    h3.common_h3 {
        font-size: 30px !important;
    }

    .para {
        width: 85%;
        margin: 0 auto;
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
        right: 0;
        opacity: 0.95;
        background-color: rgb(0 0 0 / 70%);
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
    }

    .banner_content .contentall {
        margin-top: 48px;
        margin-bottom: 20px;
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
        font-size: 32px;
    }

    .contentall p {
        font-weight: normal;
        margin-bottom: 30px;
        line-height: 1.5;
        font-size: 16px;
        max-width: 800px;
        margin: 0 auto 30px;
        display: block;
    }

    .contentall a {
        color: #fff;
        cursor: pointer;
        margin-bottom: 15px;
    }

    .sec_tit,
    .sec_tit h2 {
        font-size: 25px !important;
        font-weight: 700;
        color: #000000;
        line-height: 1.4;
    }

    .cta_mine {
        margin-top: 0;
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

    .wrapper {
        overflow: hidden;
        width: 100%;
        padding: 10px 0 10px;
        margin-bottom: 30px;
        color: #fff;
    }

    @media (max-width: 1199px) {

        .contentall h1,
        .ban_tirt {
            font-size: 30px;
        }
    }

    @media (min-width: 992px) {
        .banner {
            height: auto !important;
        }
    }

    @media (max-width: 768px) {
        .banner {
            padding-top: 85px;
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
            /*height: 591px !important;*/
        }

        .banner-overlay {
            background: #000000ba;
        }

        .banner_content p {
            font-size: 14px !important;
        }

        .contentall h1,
        .ban_tirt {
            font-size: 25px;
        }

        /*.sec_tit,
    .sec_tit h2 {
        font-size: 20px!important;
    }*/
        .counters,
        .adv_fet,
        .flip-box {
            margin: 0 auto 30px;
        }

        .pull-left img {
            margin-top: 30px;
        }

        .sto-flip .flip-box {
            min-height: auto;
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

    }

    h3.section-title {
        font-size: 25px !important;
        font-weight: bold;
        text-transform: capitalize;
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

    .text-white {
        color: #fff;
    }

    .strategies {
        padding: 50px 0px;
        color: #000;
        background: #f1f1f1;
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

    @media screen and (max-width:768px) {
        .magic {
            display: none;
        }
    }

    .flip-tit {
        font-weight: 700;
        color: #000000;
    }

    @media screen and (min-width: 500px) {
        #cyz {
            margin-right: 26px !important;
        }
    }

    @media screen and (max-width: 500px) {
        #cyz {
            /*display: block !important;*/
            padding: 10px 25px !important;
        }

        .txt {
            padding: 5px 20px;
        }

        .awesome-features-wrapper {
            min-height: auto !important;
        }
    }

    .tik {
        background-color: #ffffff;
        padding: 30px 0px;
    }

    .tik1 {
        color: black;
        font-size: 28px;
        line-height: 1.3;
        font-weight: 500;
        margin: 0 auto;
        max-width: 900px;
        font-style: italic;
    }

    .magic {
        height: auto;
        /*width: 100%;
    margin-top: 80px;*/
    }

    .title-th {
        font-weight: 700;
    }

    @media screen and (max-width:768px) {
        .team {
            margin-top: 30px !important;
        }

        .perfect-script-items1 {
            min-height: 240px !important;
        }

    }

    @media screen and (max-width:425px) {
        .cyz {
            width: 100%;
        }
    }

    .choose-wrapper {
        background: #fff;
        border-radius: 10px;
        margin-bottom: 20px;
        padding: 20px;
        min-height: 440px !important;
    }

    .choose-wrapper:hover {
        background: #47b775;
        color: #fff;
    }

    .choose-wrapper:hover p strong,
    .choose-wrapper:hover h3 {
        color: #fff;
    }

    .wrappwer-icon {
        width: 100px;
        height: 100px;
        background: #fff;
        margin: auto;
        margin-bottom: 25px;
        border-radius: 50px;
        box-shadow: 2px 4px #47b475;
        border: 3px solid #47b475;
    }

    .wrappwer-icon img {
        width: 65px;
        margin-top: 15px;
    }

    .choose-para h3 {
        font-weight: 700 !important;
        margin: 20px 0 5px 0;
        margin-bottom: 15px;
        color: #000000;
    }

    .choose-para p {
        font-size: 14px;
    }

    .p-60 {
        padding: 60px 0;
    }

    .main-sections {
        width: 100%;
        margin: 0 auto;
        display: inline-block;
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
        background: #ddf3e6;
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

    .content p {
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 0px !important;
        /*margin-top: 10px;*/
    }

    .service-section {
        background: #fff;
        position: relative;
        overflow: hidden;
    }

    .service-section:before {
        content: "";
        background: url(images/lab/dot-shape.webp) #368b5acf;
        position: absolute;
        height: 400px;
        right: 0;
        left: 0;
        top: 0;
        width: 100%;
        background-position: center top;
        background-size: contain;
        background-repeat: repeat;
    }

    .service-section .box4 {
        background: url(images/lab/shape-7.svg) #fff;
        background-size: 180px;
        background-position: top right;
        background-repeat: no-repeat;
    }

    .service_style_one {
        background: #ffffff;
        border-radius: 10px;
        min-height: 260px;
        padding: 40px 40px 10px;
        transition: 0.5s all ease-in-out;
        margin-bottom: 24px;
    }

    .service_style_one:hover {
        background-color: #47b475f5;
        color: white !important;
    }

    .style_one_title: hover {
        color: #fff !important;
    }

    .service_style_one_icon {
        width: 75px;
        height: 75px;
        line-height: 75px;
        background: #e8ecfc;
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
        color: #000000;
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

    .service_style_one:hover .service_style_one_title h4 {
        color: #fff !important;
    }

    .service_style_one:hover {
        transform: translateY(10px);
        transition: 0.5s all ease-in-out;
    }

    .service_style_one_text {
        margin-top: 20px;
        margin-bottom: 5px;
    }

    .pad-tb {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .box4 p {
        margin-top: 20px;
    }

    .box4 h3 {
        font-size: 20px;
        font-weight: 600;
        color: #47b475;
    }

    .box4 {
        background: #fff;
        text-align: center;
        background-size: 200%;
        background-position: top right;
        background-repeat: no-repeat;
        text-align: center;
        padding: 40px 10px 10px;
        margin: 0;
        min-height: 320px;
        margin-bottom: 10px;
        position: relative;
        border: 1px solid #91d2ac;
        border-radius: 8px;
        box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    }

    .s-card-icon {
        width: 60px;
        margin: 0 auto;
    }

    .img-size {
        height: 430px;
        width: 450px;
    }

    @media screen and (max-width:426px) {
        .img-size {
            height: auto !important;
            width: auto !important;
        }
    }

    @media screen and (max-width: 768px) and (min-width:426px) {
        .img-size {
            height: 430px;
            width: auto !important;
        }
    }

    @media screen and (min-width:769px) and (max-width:1025px) {
        .img-size {
            height: 485px;
            width: auto;
        }
    }

    .package_includes {
        color: #fff;
    }

    .package_includes {
        background: url(images/products/package_banner.webp);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    section {
        padding-top: 50px;
        padding-bottom: 50px;
        overflow: hidden;
        position: relative;
    }

    .Package_list {
        display: inline-block;
        background: rgba(0, 0, 0, .6);
        padding: 20px;
        /*max-width: 280px;*/
        /*width: 24%;*/
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
    }

    .Package_list img {
        height: 55px;
    }

    .Package_list span {
        display: block;
        font-size: 15px;
        margin-top: 12px;
        color: #fff;
    }

    .product-features {
        background: #022d62;
    }

    .bg-w {
        background: #fff;
    }

    .bg-w1 {
        background: #fff;
    }

    .bg-w2 {
        background: #e0dddd;
        font-weight: 600;
    }

    .btc {
        color: #fff !important;
    }

    @media (max-width: 767px) {
        .data table th:last-child {
            margin: 10px 0 0;
            display: table-cell;
            width: 100%;
        }

        .data table tbody tr:first-child th:last-child {
            transform: scale(1);
            box-shadow: 0 0 10px 0 rgb(0 0 0 / 30%);
        }
    }

    .buy {
        padding: 7px 10px;
        font-size: 12px;
    }

    .btc {
        color: #000000 !important;
        font-weight: 700;
    }

    .pdg {
        padding: 10px 70px !important;
    }

    .font-wei {
        font-weight: 700;
    }

    #base1 {
        padding: 50px 100px;
    }

    #base {
        padding: 50px;
    }

    .cor {
        background: #f9f9f9;
    }

    .bdr {
        border-top: none !important;
    }

    @media screen and (max-width: 500px) {
        a.nectar-button {
            display: block;
            width: 230px;
        }

        .perfect-script-items1 {
            min-height: auto !important;
        }
    }

    @media (max-width: 500px) {
        .cta_mine {
            width: 80%;
            display: block;
            margin-top: 20px;
        }
    }

    .buy {
        border-radius: 30px;
        padding: 10px 25px;
        transform: scale(1.1, 1.1) !important;
        transition: all 0.3s ease-out 0s !important;
    }

    .buy:hover {
        background: skyblue;
        transform: scale(1, 1) !important;
    }

    .feature-box-3 .feature-desc {
        color: #000000;
    }

    .feature-box-3 {
        display: inline-block;
        width: 100%;
        min-height: 285px;
    }

    @media screen and (min-width: 980px) and (max-width: 1100px) {
        .feature-box-3 {
            min-height: 353px;
        }
    }

    @media screen and (max-width: 768px) {
        .feature-box-3 {
            min-height: auto;
        }
    }

    h4.common_h4 {
        font-size: 18px !important;
        font-weight: 600;
        color: #47b475;
    }

    .bgg {
        background-image: linear-gradient(179deg, #47b475 0%, #19aec5 74%);
        background-size: cover;
        height: auto;
        background-repeat: no-repeat;
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
            margin-top: 130px;
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
        background-image: linear-gradient(147deg, #fe8a3900 0%, #fd383800 74%);
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
        color: #000000;
        margin-bottom: 20px;
    }

    .blog-slider__text {
        color: #000000;
        margin-bottom: 30px;
        line-height: 1.5em;
    }

    .blog-slider__button {
        display: inline-flex;
        background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
        padding: 15px 35px;
        border-radius: 50px;
        color: #fff;
        box-shadow: 0px 14px 80px #47b4756b;
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
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination .swiper-pagination-bullet-active {
            height: 11px;
            width: 30px;
        }
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
        top: -4px;
        right: 0;
        padding-right: 10px;
        content: "\f0a9";
        position: absolute;
        left: 0;
        font-size: 20px;
        color: #03b787;
    }

    .flip-box:hover {
        background: #47b775;
        color: #fff;
    }

    .flip-box:hover h3 {
        color: #fff;
    }

    .flip-box:hover .flip-icon-outer {
        background: #f2f2f2;
        transform: translateY(-10px);
    }

    @media screen and (min-width: 500px) {
        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
            margin-top: 15px !important;
            display: inline-block;
            margin-right: 26px !important;
            border-radius: 30px;
        }
    }

    .font_wei {
        font-weight: 700;
        color: #fff;
    }

    .pre-ico-sec-1 .why-adit-list:hover {
        background: #fff;
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

    .pricing-table {
        padding: 0px 0;
        width: 100%;
    }

    .bg-w {
        background: #fff;
    }

    .bg-w1 {
        background: #fff;
    }

    .bg-w2 {
        background: #e0dddd;
        font-weight: 600;
    }

    .btc {
        color: #fff !important;
    }

    @media (max-width: 767px) {
        .data table th:last-child {
            margin: 10px 0 0;
            display: table-cell;
            width: 100%;
        }

        .data table tbody tr:first-child th:last-child {
            transform: scale(1);
            box-shadow: 0 0 10px 0 rgb(0 0 0 / 30%);
        }
    }

    .btc {
        color: #000000 !important;
        font-weight: 700;
    }

    .pdg {
        padding: 10px 70px !important;
    }

    .font-wei {
        font-weight: 700;
    }

    .cor {
        background-color: #f9f9f9;
    }

    .bdr {
        border-top: none !important;
    }

    .bg_color {
        background: #ffffff;
    }

    .font_sze_algn {
        font-size: 20px !important;
    }

    .solution_calltoaction {
        margin: 0 auto;
        display: inherit;
        text-align: center;
        max-width: max-content !important;
        border: 1px solid #d7d7d7;
        border-radius: 100px;
        background-color: #fff;
        padding: 20px 42px;
        padding-bottom: 10px;
    }

    .solution_calltoaction span {
        font-size: 24px;
        display: inline-block;
        color: #000000;
        padding-right: 24px;
        margin-top: 10px;
        font-weight: bold;
    }

    .solution_calltoaction .new_lanbtn {
        margin: 0;
        float: right;
    }

    a.new_lanbtn {
        background: #47b475;
        display: inline-block;
        color: #fff;
        border-radius: 30px;
        padding: 12px 50px;
        font-size: 18px;
        transition: all .6s ease 0s;
        text-transform: capitalize;
        line-height: normal;
        font-weight: bold;
    }

    a.new_lanbtn:hover {
        color: #ffffff !important;
    }

    @media (max-width: 576px) {
        #solution_div {
            padding: 10px 20px !important;
        }

        .solution_calltoaction span {
            font-size: 14px;
            margin-bottom: 5px;
        }
    }

    @media (max-width: 992px) {
        .solution_calltoaction span {
            display: block;
            padding: 1px 18px;
            font-weight: bold;
        }
    }

    @media (max-width: 1400px) {
        .solution_calltoaction .new_lanbtn {
            margin: 0;
            float: none;
            padding: 12px 20px;
        }

        .res_btn_new_lan {
            padding: 12px 50px !important;
        }
    }

    .solution_calltoaction {
        margin: 0 auto;
        display: flex;
        text-align: center;
        max-width: max-content !important;
        border: 1px solid #d7d7d7;
        border-radius: 100px;
        background-color: #fff;
        padding: 10px 42px;
        padding-bottom: 10px;
    }

    .solution_calltoaction:hover {
        background: #47b475;
    }

    .solution_calltoaction:hover .content_solution {
        color: #ffffff !important;
    }

    .expert_space {
        padding: 10px 15px;
    }

    @media (max-width: 1199px) {
        a.new_lanbtn {
            padding: 12px 42px;
            font-size: 16px;
        }

        .solution_calltoaction {
            margin: 0 auto;
            display: inherit;
            text-align: center;
            max-width: max-content !important;
            border: 1px solid #d7d7d7;
            border-radius: 100px;
            background-color: #fff;
            padding: 10px 0px;
            padding-bottom: 4px;
        }
    }

    .lyst li {
        list-style-type: disc;
    }

    .strategy_dev {
        z-index: 1;
        position: relative;
    }

    .internal_link {
        color: #47b475;
        font-weight: 700;
    }

    a.internal_link:hover {
        color: #47b475 !important;
        font-weight: 700;
    }

    /*.support {display: flex;}*/
    .support .icon {
        width: 80px;
        height: 80px;
        padding: 13px;
        border-radius: 50%;
        background: linear-gradient(140deg, #04d788, #009ef5);
        float: left;
        position: relative;
        z-index: 2;
        margin-top: 5px;
    }

    /*.support .icon img {
    -webkit-filter: brightness(0) invert(1);
    filter: brightness(0) invert(1);
}*/

    .support p {
        background: #eee;
        padding: 20px 20px 20px 40px;
        margin-top: 8px !important;
        margin-left: 55px !important;
        border-radius: 0px 15px 15px 0;
        font-size: 16px;
        font-weight: bold;
        position: relative;
        z-index: 1;
        min-height: 90px;
        display: flex;
        align-items: center;
        left: -30px;
    }

    ul.process-list {
        padding-left: 0 !important;
    }

    .process-list li {
        list-style: none;
    }

    .timeline-center .tm-icon {
        font-size: 28px;
        color: #47b475;
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .support .icon {
            float: none;
            margin: 0 auto;
        }

        .support p {
            margin-left: 0px !important;
            float: none;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            left: auto;
        }

        /*.Package_list{width: 49%;}*/
        .box4 {
            min-height: auto;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 899px) {
        .support .icon {
            float: none;
            margin: 0 auto;
        }

        .support p {
            margin-left: 0px !important;
            float: none;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
        }

        /*.Package_list{width: 24%;}*/
    }

    @media only screen and (min-width: 900px) and (max-width: 1024px) {
        .support .icon {
            float: none;
            margin: 0 auto;
        }

        .support p {
            margin-left: 0px !important;
            border-radius: 15px;
            padding: 20px;
        }
    }

    .owl-dots button,
    .owl-dots input[type=submit] {
        border: 0;
        padding: 0;
    }

    @media screen and (max-width: 320px) {
        .main {
            margin-top: 5px;
        }
    }

    @media screen and (max-width: 768px) {
        .main {
            margin-top: 10px;
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
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1>NFT Adoption Market Analysis Report</h1>
                                        </div>
                                        <p itemprop="text">Non-fungible tokens (NFTs) are revolutionizing various industries by representing both digital and physical assets on the blockchain. Leveraging the transparency and resistance to censorship offered by decentralized smart contracts, NFTs are transforming traditional paradigms.</p>
                                        <p itemprop="text">These digital tokens have forged a dynamic ecosystem linking creators, fans, collectors, investors, brands, entrepreneurs, and even governments, facilitating interaction through digital assets. Following a period of downturn, the NFT market in 2023 has experienced a notable resurgence. This market analysis report highlights the key trends and developments shaping the current NFT landscape.</p>
                                        <div class="txt">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center"> <img class="magic"
                                src="{{ asset('images/nft-adoption-market-analysis-report/banner-img.png') }}" alt=" " title=" ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="common_spacing uniq_features">
    <div class="why-blockchain-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
                    <h2 class="common_h3 sec-tit underline text-center">Current State of NFT Adoption</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-md-12">
                    <h4 class="common_h3 sec-tit underline text-left" style="padding: 20px 0;">Market Expansion in 2023</h4>
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/money-bag.png') }}" alt=" " title=" ">
                        </div>
                        <div class="icon_content">
                            <p class="c-grey">The NFT sector has surged remarkably in 2023, boasting a market capitalization surpassing $2.7 billion. This impressive growth underscores the escalating interest in these digital assets.</p>
                        </div>
                    </div>
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/digital-assets.webp') }}" alt=" "
                                title=" "></div>
                        <div class="icon_content">
                            <p class="c-grey">The NFT ecosystem spans a diverse range of applications, including marketplaces, launchpads, games, metaverses, and aggregators.</p>
                        </div>
                    </div>
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/collection.webp') }}" alt=" "
                                title=" "></div>
                        <div class="icon_content">
                            <p class="c-grey">The NFT ecosystem consists of a multitude of applications like
                                marketplaces, launchpads, games, metaverses, aggregators, and more.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-md-12">
                    <h4 class="common_h3 sec-tit underline text-left" style="padding: 20px 0;">Key Players in the NFT Arena</h4>
                    <p class="text-left">Our analysis identifies the leading entities in the NFT space today, reflecting a period of intense fascination with NFTs.</p>
                    <ul>
                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width:72%">
                                    72%
                                </div>
                            </div>
                            <strong>72%</strong> of NFT transactions are conducted on the Ethereum network.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                                    65%
                                </div>
                            </div>
                            <strong>65%</strong> of individuals are familiar with the concept of NFTs.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                    45%
                                </div>
                            </div>
                            <strong>45%</strong> of people express a positive outlook towards investing in NFTs.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
                                    23%
                                </div>
                            </div>
                            <strong>23%</strong> of the NFT community shows a keen interest in acquiring artwork-based NFTs.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width:42%">
                                    42%
                                </div>
                            </div>
                            <strong>42%</strong> of NFT projects are based in the United States.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width:34%">
                                    34%
                                </div>
                            </div>
                            The NFT market is projected to grow at an annual rate of <strong>34%</strong> until 2030.
                        </li>
                    </ul>
                    <!-- <div class="txt"> <a href="https://www.blockchainappfactory.com/case-study/mcdonalds-automated-supply-chain-solution" class="nectar-button medium regular accent-color regular-button" id="cyz" style="border-radius: 30px !important; padding: 10px 25px; text-align: center; background: #03b787; color:#fff;" target="_blank">View CaseStudy</a> </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="gray_background ptb60">
    <div class="container">
        <div class="section-header underline text-center">
            <h4 class="font-wei">Global NFT Adoption: A Worldwide Perspective</h4>

        </div>
        <p class="text-center">The explosive growth of the global NFT market is driven by widespread adoption across various regions. Our report highlights the adoption rates in different countries, illustrating why NFTs have surged in popularity.</p>
        <div class="row m-0">
            <div class="owl-carousel client-carousel blockchain-plateform">
                <div class="client-box text-center">
                    <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/thailand.webp') }}" alt=" " title=" ">
                    <h6>Thailand<br><span>27%</span></h6>
                </div>
                <div class="client-box text-center">
                    <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/malaysia.webp') }}" alt=" " title=" ">
                    <h6>Malaysia<br><span>24%</span></h6>
                </div>
                <div class="client-box text-center">
                    <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/use.webp') }}" alt=" " title=" ">
                    <h6>United Arab Emirates<br><span>23%</span></h6>
                </div>
                <div class="client-box text-center">
                    <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/vietnam.webp') }}" alt=" " title=" ">
                    <h6>Vietnam<br><span>17%</span></h6>
                </div>
                <div class="client-box text-center">
                    <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/nigeria.webp') }}" alt=" " title=" ">
                    <h6>Nigeria<br><span>14%</span></h6>
                </div>
                <div class="client-box text-center">
                    <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/brazil.webp') }}" alt=" " title=" ">
                    <h6>Brazil<br><span>12%</span></h6>
                </div>
            </div>
            <p class="text-center">These findings reveal a notable trend: NFT adoption is advancing more rapidly in developing nations compared to their developed counterparts. Countries leading in new NFT projects also exhibit the highest rates of adoption.</p>
        </div>
    </div>
</div>

<section class="product-features package_includes">
    <div class="container">
        <div class="row">
            <div class="section-title text-center" style="width: 100%">
                <div class="sec_tit mb20">
                    <h3 class="section-title underline mb20" style="color:#fff;">Sector-Specific NFT Adoption Insights</h3>
                </div>
            </div>
            <div class="col-md-12 text-center container-center">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 equalize">
                    <div class="Package_list"><img src="{{ asset('images/nft-adoption-market-analysis-report/icons/art.webp') }}"
                            alt=" " title=" "><span><strong>Art</strong></span>The art world has experienced unprecedented growth with the rise of NFTs, driving creators to explore digital avenues for earning and gaining royalties. Research indicates that over 23% of individuals are interested in acquiring NFT-based artworks.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 equalize">
                    <div class="Package_list"> <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/sports.png') }}"
                            alt=" " title=" "><span><strong>Sports Memorabilia</strong></span>Many sports teams are now issuing NFTs for memorabilia, enhancing their connection with fans. Our findings reveal that 11% of people are keen on purchasing NFTs related to sports collectibles.
                        </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 equalize">
                    <div class="Package_list"><img src="{{ asset('images/nft-adoption-market-analysis-report/icons/music.png') }}"
                            alt=" " title=" "><span><strong>Music</strong></span>NFTs have transformed the music industry, fostering deeper connections between artists and fans. According to our data, around 19% of people are interested in acquiring music-related NFTs.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 equalize">
                    <div class="Package_list"> <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/photo.webp') }}"
                            alt=" " title=" "><span><strong>Photos</strong></span>Photography has seen a surge in profitability with the advent of NFTs, strengthening its market potential. Our analysis shows that over 13% of individuals are eager to own NFTs featuring photographic content.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 equalize">
                    <div class="Package_list"> <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/game.png') }}"
                        alt=" " title=" "><span><strong>Video Game Assets</strong></span>The gaming sector has evolved significantly with the integration of NFTs, particularly in Play-to-Earn (P2E) games. Our statistics reveal that nearly 11% of people are interested in owning NFTs linked to video game assets.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 equalize">
                    <div class="Package_list"> 
                        <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/virtual-land.png') }}" alt=" " title=" "><span><strong>Virtual Land</strong></span>The concept of virtual land in metaverses has become a compelling investment opportunity within the NFT space. Our latest report shows that approximately 10% of people are interested in virtual land NFTs.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 equalize">
                    <div class="Package_list"> 
                        <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/digital.webp') }}" alt=" " title=" "><span><strong>Digital Collectibles</strong></span>NFTs have revolutionized the collectibles market, allowing businesses to offer premium products as digital collectibles. Our report indicates that around 12% of individuals are looking to purchase collectible NFTs.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 equalize">
                    <div class="Package_list"> 
                        <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/ticket.webp') }}" alt=" " title=" "><span><strong>Event Tickets</strong></span>Although not as prominent, NFT event tickets offer a range of utilities and potential benefits. According to our analysis, about 9% of people are interested in buying NFTs for event access.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="common_spacing uniq_features">
    <div class="why-blockchain-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-md-12">
                    <h4 class="common_h3 sec-tit underline text-left" style="padding: 20px 0;">How People Perceive and Engage with NFT Adoption</h4>
                    <p class="text-left">The advent of Web3 and NFTs has revolutionized the traditional Web2 digital business model, gaining widespread global acclaim. Understanding public perception and reaction to NFTs can provide key insights for future trends.</p>
                    <ul>
                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width:81%"> 81%
                                </div>
                            </div>
                            <strong> 81%</strong> A significant majority, 81%, accurately recognize NFTs as digital tokens that represent real-world assets.
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="44" aria-valuemin="0" aria-valuemax="100" style="width:44%"> 44%
                                </div>
                            </div>
                            <strong>44%</strong> Nearly half of the respondents, 44%, view NFTs as a valuable investment opportunity, with 41% specifically considering them excellent investments.
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width:68%"> 68%
                                </div>
                            </div>
                            <strong>68%</strong> 68%: In the gaming sector, 68% of transactions involve NFT assets integrated into video game environments.
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%"> 23%
                                </div>
                            </div>
                            <strong>23%</strong> Among millennials and Gen-Z, 23% enjoy purchasing and collecting NFTs as a personal hobby.
                        </li>
                    </ul>
                    <p class="text-left">Our findings highlight that artworks and music are the most popular NFT categories, with photography and digital collectibles also gaining traction.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 hidden-sm text-center">
                    <img class="lazy" src="{{ asset('images/nft-adoption-market-analysis-report/img-2.webp') }}" class="br-5"
                        alt=" " title=" " style="margin-top:15px;">
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">
    .tech-padding {
        padding-bottom: 100px
    }

    .space-pt {
        padding: 100px 0 0
    }

    .tech-padding:before {
        height: 470px !important
    }

    .bg-dark-half-md {
        background: #022d62;
        width: 100%;
        display: inline-block;
        padding: 40px 0
    }

    @media screen and (max-width:768px) {
        .teck1 .category-grid-style-01 .category-item {
            width: 50% !important
        }
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
        border-radius: 5px
    }

    .teck1 .category-grid-style-01 .category-item {
        padding: 10px;
        text-align: center;
        width: 25%;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
        position: relative;
        /*cursor: pointer*/
    }

    /*.teck1 .category-grid-style-01 .category-item:before {
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
            transition: all .3s ease-in-out
        }*/
    .teck1 .category-grid-style-01 .category-item p {
        margin-bottom: 0;
    }

    .teck1 .category-grid-style-01 .category-item .category-icon {
        color: #333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px;
        position: relative;
        z-index: 2;
        width: 50px;
        margin: 0 auto 10px;
    }

    .teck1 .category-grid-style-01 .category-item .category-title {
        color: #022d62;
        font-weight: 700;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
        font-size: 16px
    }

    .category-grid-style-01 .category-item:hover:before {
        -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
        transition: all .3s ease-in-out
    }
</style>
<section class="space-pt bg-dark-half-md tech-padding teck1">
    <div class="container">
        <div class="row justify-content-md-center text-center">
            <div class="section-title text-center ">
                <h3 class="common_h3 text-white">Factors Driving the Rapid Adoption of NFTs</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/popular.webp') }}" alt=" " title=" ">
                        </div>
                        <p>Surge in Crypto Popularity</p>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/partnerships.png') }}" alt=" " title=" ">
                        </div>
                        <p>Expanding NFT Creator Community</p>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/celebrity.webp') }}" alt=" " title=" ">
                        </div>
                        <p>Celebrity Influence</p>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img src="{{ asset('images/nft-adoption-market-analysis-report/icons/authenticity.webp') }}"
                                alt=" " title=" "> </div>
                        <p>Authenticity and Ownership Verification</p>
                    </div>
                    {{-- <div class="category-item aos-item">
                        <div class="category-icon"> <img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/ownership.webp') }}" alt=" " title=" ">
                        </div>
                        <p>Ownership Verification</p>
                    </div> --}}
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/opacity.webp') }}" alt=" " title=" ">
                        </div>
                        <p>Enhanced Transparency</p>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/barrier.png') }}" alt=" " title=" ">
                        </div>
                        <p>Lower Barriers to Entry</p>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img
                                src="{{ asset('images/nft-adoption-market-analysis-report/icons/content.png') }}" alt=" " title=" ">
                        </div>
                        <p>Exclusive Content</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="common_spacing uniq_features">
    <div class="why-blockchain-sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
                    <div class="section-title text-center ">
                        <h3 class="common_h3">NFT Market Trends by Demographics</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
                    <h4 class="common_h3 sec-tit underline text-left" style="padding: 20px 0;">Age Trends:</h4>
                    <ul>
                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%"> 32%
                                </div>
                            </div>
                            <strong> 32%</strong> Among individuals aged 18-24, 32% are either actively purchasing or showing strong interest in NFTs.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width:19%"> 19%
                                </div>
                            </div>
                            <strong>19%</strong> In the 25-34 age group, 19% are either planning to buy or have already acquired NFTs.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" style="width:11%"> 11%
                                </div>
                            </div>
                            <strong>11%</strong> Only 11% of those aged 35-54 are currently engaged with NFTs, either as buyers or followers.
                        </li>

                        {{-- <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%"> 5% </div>
                            </div>
                            <strong>5%</strong> of respondents aged 55+ were either planning to buy NFTs or already held
                            NFTs.
                        </li> --}}

                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
                    <h4 class="common_h3 sec-tit underline text-left" style="padding: 20px 0;">Gender Trends:</h4>
                    <ul>
                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%"> 75%
                                </div>
                            </div>
                            <strong>75%</strong> The NFT community is predominantly male, comprising 75% of the total.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%"> 25%
                                </div>
                            </div>
                            <strong>25%</strong> Women represent 25% of the current NFT demographic.
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
                    <h4 class="common_h3 sec-tit underline text-left" style="padding: 20px 0;">Income Trends:</h4>
                    <ul>
                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width:37%"> 37%
                                </div>
                            </div>
                            <strong>37%</strong> Of NFT holders, 37% earn less than $50,000 annually.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width:37%"> 37%
                                </div>
                            </div>
                            <strong>37%</strong> Another 37% of NFT holders have incomes ranging from $50,000 to $150,000.
                        </li>

                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:26%"> 26%
                                </div>
                            </div>
                            <strong>26%</strong> of NFT holders have annual incomes exceeding $150,000.
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
                    <h4 class="common_h3 sec-tit underline text-left" style="padding: 20px 0;">Age 55+ Trends:</h4>
                    <ul>
                        <li>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                    aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width:37%"> 37%
                                </div>
                            </div>
                            <strong>5%</strong> Among individuals aged 55 and above, 5% are involved in the NFT space, either through purchases or ownership.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="uniq_features">
    <div class="why-blockchain-sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-md-12 gray_background" style="border-radius:15px;">
                    <h4 class="common_h3 sec-tit underline text-center" style="padding: 20px 0;">Conclusion</h4>
                    <p class="text-center">In conclusion, our NFT market adoption analysis report shows a grand
                        emergence of popularity for NFTs among people, irrespective of whether they hold one or not.
                        With a sales volume exceedIn summary, our analysis reveals that NFTs have surged into the mainstream, captivating a broad audience whether or not they currently own one. With market sales soaring past $60 billion, the outlook for NFTs has never been more promising as we advance. The unparalleled transparency and security offered by NFTs, supported by immutable blockchain technology, have been pivotal in driving their widespread adoption. The involvement of global icons and top-tier brands further fuels the urge for individuals to explore NFTs. Once they engage with this innovative space, the intrigue and potential will ensure they remain captivated.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="common_spacing uniq_features">
    <div class="why-blockchain-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 hidden-sm text-center d-flex align-items-end">
                    <img class="lazy" src="{{ asset('images/nft-adoption-market-analysis-report/img-3.avif') }}" alt=" "
                        title=" ">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-md-12" style="margin-top: 50px;">
                    <h4 class="common_h3 sec-tit underline text-left" style="padding: 20px 0;">About Our NFT Adoption Market Analysis Report</h4>
                    <p class="text-left">Our NFT adoption market analysis report provides an in-depth examination of global NFT adoption trends. This comprehensive study is the culmination of meticulous data collection and research, utilizing a range of methodologies to produce accurate insights. By integrating diverse international reports and interpreting critical market trends, we have outlined key parameters influencing NFT adoption. Our analysis spans various demographics and regions, employing cutting-edge data techniques to deliver actionable intelligence on the current state of NFT adoption worldwide.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .step-points li {
        display: grid;
        grid-template-columns: 60px auto;
        margin-bottom: 30px;
    }

    .step-points li span {
        width: 60px;
        height: 60px;
        background: #47b475;
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
        margin-left: 10px;
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
        color: #47b475;
    }

    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        /* font-size: 32px; */
        color: #fff;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>












<style type="text/css">
    .awesome-features-wrapper {
        border: 1px solid #cdcdcd;
        padding-top: 40px;
        padding-bottom: 20px;
        min-height: 480px;
        transition: .3s;
        position: relative;
        margin-bottom: 30px;
        border-radius: 10px;
    }


    .awesome-features-icon-img {
        margin-bottom: 10px;
    }

    .awesome-features-icon-img img {
        width: 64px;
        height: 64px;
    }

    .awesome-features-text h4 {
        font-size: 22px;
        font-weight: 500;
        line-height: 1.3;
        margin-bottom: 18px;
    }

    .awesome-features-text p {
        margin-bottom: 0;
        padding: 0 41px;
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

    .list_box h6 {
        background: white;
        padding: 4% 3%;
        text-align: center;
        justify-content: center;
        font-size: 15px;
        align-items: center;
        margin-bottom: 28px;
        border-radius: 5px;
        box-shadow: 1px 4px 10px #0000001f;
        color: #000000d1;
    }
</style>



<style type="text/css">
    .icon-text-1 {
        /*display: flex;
            align-items: center;*/
        margin-bottom: 10px;
    }

    .icon-text-1 .icon-text-icon {
        width: 80px;
        height: 80px;
        border-radius: 12px;
        background: #03b787;
        margin-bottom: 20px;
        line-height: 75px;
        /*padding-left: 6px;*/
        box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
        text-align: center;
    }

    .icon-text-1 img {
        width: 64px;
        height: 64px;
    }

    .icon_content {
        padding-left: 20px;
        min-height: 100px;
        width: 80%;
    }

    .icon_content p strong {
        display: block;
        color: #47b475;
        font-size: 18px;
        margin-bottom: 4px;
    }

    .icon-text-1 h3 {
        font-size: 18px;
        color: #000000;
        font-weight: 700;
    }

    .icon-text-1 p {
        margin: 0.6rem 0 0 0;
    }

    .icon-text-1 img {
        /*animation: spin 5s infinite;*/
        padding: 5px;
    }

    @keyframes spin {
        0% {
            transform: rotateY(0deg);
        }

        50% {
            transform: rotateY(180deg);
        }

        100% {
            transform: rotateY(360deg);
        }
    }
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
        background: #47b475;
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
            background: #47b475;
            height: 20px;
            width: 3px;
            content: "";
            position: absolute;
            left: -2px;
            top: 65px;
        }

        .awesome-features-wrapper::after {
            background: #47b475;
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
            color: #47b475;
        }*/

    .awesome-features-icon-img .fa {
        color: #47b475;
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
    .perfect-script-items1 {
        -webkit-box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        padding: 25px 15px 10px;
        border-radius: 16px;
        background-color: #fff;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        min-height: 130px;
        margin-bottom: 20px;
    }

    .perfect-script-items1 .icon i {
        font-size: 26px;
    }

    .perfect-script-items1 .icon {
        width: 70px;
        height: 70px;
        /* margin: 20px auto 50px; */
        line-height: 60px;
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
        text-align: center;
    }

    .perfect-script-items1 .icon img {
        width: 45px;
        margin-top: -8px;
    }

    .perfect-script-items1 .content {
        display: block;
        float: left;
        width: 82%;
        padding-left: 30px;
    }

    .perfect-script-items1 strong {
        color: #47b475;
        font-size: 18px;
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


<style type="text/css">
    .icon-text-1 {
        display: -webkit-box;
        display: -ms-flexbox;
        /*display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center*/
    }

    .icon-text-1>:nth-child(n+2) {
        /*margin-top: 2.2rem*/
        margin-bottom: 20px;
    }

    .c-dark {
        color: #123769;
        fill: #123769
    }

    .icon-text-1 p {
        margin: .6rem 0 0 0
    }

    .c-grey {
        color: #111112;
        fill: #111112
    }

    .icon-text-1 img {
        width: 84px;
        height: auto;
        margin-right: 20px;
        /*margin: auto 20px;*/
        background: #fff;
        padding: 14px;
        border-radius: 12px;
        box-shadow: 0 0 12px 6px #00000014
    }

    .icon-text-1 strong {
        color: #000;
        font-weight: 700
    }
</style>




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

    .faq-content #accordion a.collapsed[data-toggle=collapse]::before,
    .faq-content #accordion a[data-toggle=collapse]::before {
        margin-top: 5px !important;
    }
</style>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        }
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
</script>

</div>



@endsection