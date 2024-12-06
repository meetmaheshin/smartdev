@extends('layouts.static')
    @section('title', 'Hire Token Developer')
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


    .contentall a {
        background: linear-gradient(45deg, #fdc601, #d45c10) !important;
        color: #fff;
        cursor: pointer;
        margin: 1px;
        text-transform: capitalize !important;
        box-shadow: 2px 2px 0px 0px #290f0e36;
    }

    .contentall a:hover {
        background: #ff345f !important;
    }

    .timeline-center .tm-icon {
        font-size: 30px;
        color: #47b475;
    }

    .gray-bg,
    .gray_bg {
        background: #566af624;
    }

    .faq-content #accordion a[data-toggle=collapse]::before {
        background: #5e368e;
    }

    @media screen and (max-width: 767px) {
        table.visible-xs {
            display: table !important;
        }

        .Package_list {
            width: 100% !important;
        }
    }

    .banner_content {
        text-align: left;
    }

    .contentall a {
        margin-top: 20px;
    }

    .banner {
        background-image: url(images/hire-token-developer/banner-bg.png);
        background-size: cover;
        /* background: #140d4c;*/
        /* background: linear-gradient(140deg, #5e368e 40%, #5c4ab6, #556efe);*/
        padding-top: 140px;
        padding-bottom: 120px;
        height: auto;
        background-position: center;
    }

    h3.common_h3 {
        /*font-size: 30px!important;*/
    }

    .para {
        /* width: 85%;
    margin: 0 auto;*/
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
        margin-top: 120px;
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
        line-height: 1.6;
        font-size: 21px;
        max-width: 800px;
        margin: 0 auto;
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

    .feature-box-3 .feature-title {
        margin-bottom: 5px;
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
        /*border-radius: 15px;*/
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
        /*width: 100%;*/
        margin-top: 90px;
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
        background: url(images/lab/dot-shape.webp) #5e368e;
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
        /*min-height: 320px;*/
        margin-bottom: 10px;
        position: relative;
        border: 1px solid #91d2ac;
        border-radius: 8px;
        box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    }

    .s-card-icon {
        width: 60px;
        margin: 0 auto;
        font-size: 30px;
        color: #47b475;
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
        /*background: #566af624;*/
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
        padding: 30px 10px;
        /*max-width: 280px;*/
        width: 13%;
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
        /*background: linear-gradient(rgb(37 38 37 / 48%), rgb(10 10 10 / 57%)), transparent url(images/nftm/bg-image.webp) top left/cover no-repeat scroll;*/
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
        /*min-height: 285px;*/
        border: 0;
        border-top: 3px solid #5e368e;
        margin-bottom: 30px;
    }

    @media screen and (min-width: 980px) and (max-width: 1100px) {
        .feature-box-3 {
            /*min-height: 353px;*/
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
        /*color: #47b475;*/
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
        font-family: FontAwesome;
        top: 3px;
        right: 0;
        padding-right: 10px;
        content: "\f0a9";
        position: absolute;
        left: 0;
        font-size: 20px;
        color: #5e368e;
    }

    .flip-box:hover {
        background: #47b775;
        color: #fff;
    }

    .flip-box:hover h3 {
        color: #fff;
    }

    .flip-box:hover .flip-icon-outer {
        background: #566af624;
        transform: translateY(-10px);
    }

    @media screen and (min-width: 500px) {
        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
            margin-top: 15px !important;
            display: inline-block;
            margin-left: 13px !important;
            margin-right: 13px !important;
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

    .nec-btn {
        position: relative !important;
        color: #fff !important;
        border-radius: 30px !important;
        font-size: 11px;
        text-transform: capitalize;
         !important;
        transform: scale(1.1, 1.1) !important;
        transition: all 0.3s ease-out 0s !important;
        /* background: #47b475 !important;*/
        background: linear-gradient(45deg, #fdc601, #d45c10) !important;
        box-shadow: 2px 2px 0px 0px #5e368e36;
    }

    .nec-btn:hover {
        transform: scale(1, 1) !important;
        color: #fff !important;
        background: #3026c2 !important;
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

    .owl-theme .owl-dots .owl-dot {
        display: inline-block;
    }

    .blockchain-plateform.owl-carousel .owl-item img {
        max-width: 80px;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .blockchain-plateform.owl-carousel .owl-item img {
        margin: 0 auto;
        width: 180px;
    }

    .owl-carousel .owl-item img {
        cursor: default;
        transform-style: preserve-3d;
    }

    .owl-carousel .owl-item img {
        display: block;
        /* width: 100%;
    -webkit-transform-style: preserve-3d;*/
    }

    .owl-carousel .owl-item h6 {
        font-size: 18px;
        margin-top: 20px;
        margin-bottom: 10px;
        color: #200b52;
    }

    .owl-carousel .owl-item svg {
        width: 25px;
    }


    .featured-icon-box.style3 .featured-desc:after {
        position: absolute;
        content: '';
        width: 0;
        height: 0;
        border-bottom: 34px solid #fabe82;
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
        background: #fabe82;
    }


    .featured-icon-box.style3 .featured-title h3 {
        font-size: 20px;
        line-height: normal;
        margin: 15px 0 10px;
    }

    .featured-icon-box.style3:before {
        background-color: #5e368e;
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
        /* min-height: 355px;*/
    }

    .featured-icon-box.style3:hover {
        border-left: 2px solid #5e368e;
        transition: .1s all ease;
    }

    .featured-icon-box.style3 {
        position: relative;
        margin: 15px 0;
        background-color: #fff;
    }

    .awesome-features-wrapper {
        /*border: 1px solid #cdcdcd;*/
        background: #fff;
        padding: 30px;
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
        background: #5e368e;
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

    .awesome-features-icon-img {
        margin-bottom: 22px;
        font-size: 40px;
        color: #5e368e;
    }

    .awesome-features-icon-img img {
        width: 60px;
        height: 60px;
    }

    .awesome-features-text h4 {
        font-size: 18px;
        font-weight: 500;
        line-height: 1.3;
        margin-bottom: 5px;
    }

    .awesome-features-text p {
        margin-bottom: 0;
        /*padding: 0 40px;*/
    }

    p strong {
        color: #5e368e;
    }

    .bg-dark-half-md {
        background: linear-gradient(140deg, #0d3881 40%, #0f005c, #010c4a);
        padding: 100px 0;
    }

    /*-- Client section --*/
    .teck .category-grid-style-01 .category-item {
        padding: 0px !important;
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
    .teck .category-grid-style-01 .category-item {
        padding: 20px !important;
        text-align: center;
        width: 15%;
        background: #fff;
        margin-right: 2px;
        margin-bottom: 2px;
        position: relative;
    }

    .teck .category-grid-style-01 .category-item .category-icon {
        color: #333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px !important;
        margin-top: 20px;
        position: relative;
        z-index: 2;
    }

    .category-grid-style-01 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        justify-content: center;
        /*-webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);*/
        /*box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);*/
        /*border-radius: 5px;*/
    }

    .teck .category-grid-style-01 .category-item .category-icon {
        color: #333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px !important;
        margin-top: 20px;
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

    @media screen and (max-width:768px) {
        .teck .category-grid-style-01 .category-item {
            width: 49% !important
        }
    }

    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }

    .teck .category-icon img {
        height: 60px !important;
    }

    /*-- Client section --*/

    .workflow {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        padding: 0;
        margin: 0
    }

    .workflow li {
        text-align: left;
        background: #566af624;
        border-radius: 7px;
        margin: 1.5%;
        padding: 15px;
        width: 30%;
        position: relative
    }

    .workflow li img {
        width: 65px
    }

    .workflow li .title {
        margin-bottom: 8px;
    }

    .workflow li p {
        margin-bottom: 0;
    }

    .workflow li:after {
        content: '';
        position: absolute;
        top: 40%;
        right: -15px;
        width: 15px;
        height: 15px;
        border-top: 25px solid transparent;
        border-bottom: 25px solid transparent;
        border-left: 15px solid #5e368e
    }

    .workflow li:last-child:after {
        display: none
    }

    .workflow .fa {
        color: #140050;
        font-size: 40px;
        margin: 15px 0
    }

    @media (max-width:767px) {

        .strategies-items,
        .strategies-items1 {
            display: block
        }

        .workflow li {
            margin: 3%;
            width: 44%
        }
    }

    .feature-box-3 .icon {
        background: #566af624;
    }

    /*-- Integration --*/
    .integration {
        padding: 60px 0px;
        /*background: url(img/masternode-coin-development/feature-bg.webp) no-repeat bottom right #f6f8ff;*/
    }

    .integration-items {
        background: #ebedf2;
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
    }

    .integration-items .icons {
        align-items: center;
        display: flex;
        box-shadow: 5px 5px 0 #108ad6;
        background: #5e368e;
        width: 90px;
        height: 90px;
        margin: -31px auto 10px auto;
        padding: 10px;
        border-radius: 50%;
        justify-content: center;
    }

    /*.integration-items .icons img{border-radius: 20px;}*/
    .integration-items p strong {
        display: block;
        color: #0f1c3f;
        font-size: 18px;
        padding-bottom: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #eee;
    }


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

    /*-- Travel App --*/
    .travel-app {
        padding: 60px 0px;
    }

    .travel-app-items,
    .travel-app-items1 {
        clear: both;
        min-height: 90px;
        display: flex;
    }

    .travel-app-items p strong,
    .travel-app-items1 p strong {
        display: block;
        font-size: 18px;
        color: #5e368e;
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
        border: 4px solid #5e368e;
        float: left;
        margin-right: 20px;
        position: relative;
        padding: 13px;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    /*.travel-app-items .icons:before{content: ''; position: absolute; width: 40px; height: 8px;background: #fff; z-index: 1; top: -8px; left: -8px;}*/
    /*.travel-app-items .icons img{-webkit-filter: brightness(0) invert(1); filter: brightness(0) invert(1);}*/
    .travel-app-items1 .icons img {}

    .travel-app .app-screen1 {
        padding: 10px;
        max-width: 320px;
    }

    /*------------ Complimentary-Features Style -----------*/
    .complimentary-features {
        padding: 60px 0px 0 0;
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

    .complimentary-features ul li:nth-child(even) {
        background: #566af624;
    }

    .complimentary-features ul li .icons {
        float: left;
    }

    .complimentary-features ul li .icons img {
        width: 80px;
        height: 80px;
        padding: 10px;
    }

    .complimentary-features ul li .content {
        background: transparent;
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
        color: #200b52;
        font-weight: bold;
        text-align: left;
        line-height: 1.3em;
        margin-bottom: 10px;
    }

    .complimentary-features ul li h3 {
        display: block;
        font-size: 18px;
        color: #200b52;
        font-weight: bold;
        text-align: left;
        line-height: 1.3em;
        margin-bottom: 10px;
    }


    /*-- Welcome Content --*/
    .welcome-content {
        background: #5e368e;
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
        width: 25%;
        margin: 0.5%;
        border: 1px solid #797979;
        display: grid;
        grid-template-columns: 30% 70%;
        padding: 10px;
        align-items: center;
        text-align: left;
    }

    .welcome-content ul li .icons {
        width: 50px;
        margin-right: 10px;
        padding-right: 10px;
        border-right: 1px solid #797979;
        /*filter: invert(1);*/
    }

    .welcome-content ul li p {
        line-height: 20px;
        padding: 0px;
        margin: 0px;
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
        background: #5e368e;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(140deg, #5e368e 40%, #5c4ab6, #556efe);
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

    /*.tech-stack h4{text-align: center; background: #234aa9; font-size: 20px; font-weight: bold; padding: 10px; margin-bottom: 0px; color: #fff;}*/
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
        margin-bottom: 0;
    }

    .box,
    .sub_ff {
        position: relative
    }

    .sub_ff strong {
        display: block;
        font-size: 17px;
        color: #fff !important;
        font-weight: 900;
        line-height: 30px
    }

    .dev {
        margin-bottom: 10px;
    }

    .sub_ff {
        margin-top: 0px;
        margin-bottom: 0px
    }

    .sub_ff i {
        /*position:absolute;left:0;*/
        color: #1758b2;
        line-height: 1.5;
        font-size: 19px
    }

    .box,
    .sub_ff1 {
        position: relative
    }

    .sub_ff1 strong {
        display: block;
        font-size: 16px;
        color: #00000a !important;
        font-weight: 800;
        line-height: 30px
    }

    .dev1 {
        padding-left: 26px;
        margin-bottom: 10px;
    }

    .sub_ff1 {
        margin-top: 15px;
        margin-bottom: 0px
    }

    .sub_ff1 i {
        position: absolute;
        left: 0;
        color: #1758b2;
        line-height: 1.5;
        font-size: 19px
    }


    .Package_list {
        position: relative;
        display: inline-block;
        background: #566af624;
        padding: 30px 10px;
        width: 100%;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
        /*box-shadow: 0 .25rem 1.75rem rgba(30,34,40,.07)!important;*/
        box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    }

    .Package_list:after {
        content: "";
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
        border-bottom-width: 6px;
        border-top-width: calc(0.4rem - 6px);
        border-bottom-style: solid;
        border-top-style: solid;
        border-bottom-color: inherit;
        border-top-color: transparent;
        border-bottom-left-radius: 0.4rem;
        border-bottom-right-radius: 0.4rem;
        color: #5e368e;
    }

    .Package_list img {
        width: 55px;
        height: 55px;
    }

    .Package_list span {
        display: block;
        font-size: 20px;
        font-weight: bold;
        margin-top: 12px;
        margin-bottom: 10px;
        color: #fff;
    }

    .Package_list h4,
    .Package_list h3 {
        display: block;
        font-size: 20px;
        font-weight: bold;
        margin-top: 12px;
        margin-bottom: 10px;
    }

    .product-features {
        /*background: linear-gradient(140deg, #402c67, #af95f8, #f6abf4);*/
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
        background: #566af624;
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


    /*-- Technology --*/
    .technologies {
        background: linear-gradient(140deg, #340969 40%, #0f005c, #010c4a);
        padding: 50px 0;
    }

    .technologies ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .technologies ul li {
        width: 17%;
        text-align: center;
        font-size: 16px;
        padding: 15px 0;
        margin: -1px;
        border: 1px solid #fff;
    }

    .technologies ul li img {
        height: 55px;
    }

    .technologies ul li p {
        margin-bottom: 0 !important;
    }

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

        .travel-app-items .icons {
            margin-bottom: 0px;
        }

        .center-align {
            padding: 10px 0
        }

        .center-align ul li {
            width: 100%;
            margin: 5px 0;
            padding: 15px
        }

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

        .Package_list {
            width: 49%;
        }

        .box4 {
            min-height: auto;
        }

        .awesome-features-wrapper {
            min-height: auto !important;
        }
    }

    /*@media only screen and (max-width: 320px){
    .tech-stack ul li{width: 48%!important;}
    }*/
    @media only screen and (min-width: 768px) and (max-width: 899px) {
        .welcome-content ul li {
            width: 32%;
        }

        .complimentary-features ul li {
            width: 100%;
        }

        .travel-app-items .icons,
        .travel-app-items1 .icons {
            margin-bottom: auto;
        }

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

        .Package_list {
            width: 100%;
        }
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
</style>

<div class="header-shadow" id="ico" style="background-image: linear-gradient(blue, lightblue);">
    <div class="main">
        <div class="banner my_banner">

            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1 itemprop="name" style="margin-bottom: 0px !important;">Collaborate with Top Token Developers</h1>
                                        </div>
                                        <p itemprop="text">Partner with elite token developers to craft custom tokens that drive market growth with exceptional efficient and transparent solutions. Advance your crypto venture with a token built specifically to align with your strategic goals.</p><br>
                                        <div class="txt">

                                            <a rel="nofollow"
                                                href="{{ url('consultation') }}"
                                                class="nec-btn" id="cyz" style="border-radius: 30px !important;">Create Your Custom Token</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center"> <img class="magic"
                                src="{{ asset('images/hire-token-developer/banner-img2.png') }}" alt="Hire Token Developers"
                                title="Hire Token Developers"> 
                        </div>
                    </div>
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
        background: #33068c;
    }

    #counter-stats .stats:nth-child(2) {
        background: #3026c2;
    }

    #counter-stats .stats:nth-child(3) {
        background: #33068c;
    }

    #counter-stats .stats:nth-child(4) {
        background: #3026c2;
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
<div class="common_spacing">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title-th sec_tit underline">Achieve Market Dominance with Our Elite Token Development Experts</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p class="text-center">Cryptocurrency tokens are transforming industries through blockchain technology, with each token serving a specific purpose. As businesses increasingly embrace these tokens, a variety of blockchain projects, from DeFi to NFTs, have emerged.
                    <br><br>
                    Our blockchain experts excel in crafting tokens across various blockchain platforms, leveraging the latest technology to fulfill the needs of crypto ventures and entrepreneurs. Join forces with our token developers to foster innovation and ensure a successful launch for your own token.
                </p>
            </div>
            <div class="text-center cta_mine txt">
                <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                    target="_blank" href="{{ url('consultation') }}"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>Book a Consultation</span></a>
                {{-- <a rel="nofollow" href="#"
                    class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Specialists</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="common_spacing" style="background: #f4f4f4;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                <img class="lazy" src="{{ asset('images/hire-token-developer/img-1.webp') }}" style="width: 325px"
                    alt="Hire Cryptocurrency Token Developers" title="Hire Cryptocurrency Token Developers">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="section-title text-left" style="margin-top:30px;">
                    <h2 class="title-th sec_tit underline">Enhance Token Performance with Our Cryptocurrency Experts</h2>
                </div>
                <p class="text-left mt20">Engage experienced cryptocurrency token developers to improve crypto projects' success with unmatched expertise and insight. Crypto tokens help brands establish and manage their digital currency, streamline transferring assets to reduce costs, and save time by eliminating intermediaries.
                    <br><br>
                    Choosing a professional development team ensures the creation of robust, secure tokens with advanced privacy features, safeguarding your information and minimizing security risks. Partner with our experts to develop high-performance, secure tokens that elevate your project.
                </p>
            </div>
        </div>
    </div>
</div>
@include('static.six-card-section', [
    'title' => "Cutting-edge token Solutions for Various Blockchain Platforms", 
    'desc' => 'Our cryptocurrency token developers offer a range of specialized tokens designed to improve project capabilities and explore new opportunities in the crypto ecosystem.',
    'cards' => [
        [
            'title' => 'Ethereum Tokens',
            'desc' => "We build Ethereum tokens that align with standards such as ERC-20 and ERC-1155, incorporating advanced smart contracts and top-notch security to supercharge your blockchain projects.",
            'image' => 'hire-token-developer/icons/ethereum.png'
        ],
        [
            'title' => 'Tron Tokens',
            'desc' => "Our team is skilled in crafting bespoke tokens on the TRON blockchain, using standards like TRC-10, TRC-20, and TRC-721 to precisely match your specific business needs.",
            'image' => "hire-token-developer/icons/tron.webp"
        ],
        [
            'title' => 'BEP20 Tokens',
            'desc' => 'We engineer BEP20 tokens on the BNB Chain, perfect for utility applications and fundraising campaigns. Our goal is to deliver tokens that provide real value and foster strong user engagement.',
            'image' => 'hire-token-developer/icons/bep-20.png'
        ],
        [
            'title' => 'Solana Tokens',
            'desc' => 'We specialize in creating high-performance tokens on the Solana blockchain, offering tailored smart contracts and solutions that are in line with your business objectives.',
            'image' => 'hire-token-developer/icons/solana.webp'
        ],
        [
            'title' => 'NFT Creation and Distribution',
            'desc' => "Our developers craft unique NFTs to improve market presence. Each NFT is designed to be secure, functional, and perfectly suited for various types of digital collectibles.",
            'image' => 'hire-token-developer/icons/plan.png'
        ],
        [
            'title' => 'Defi Tokens',
            'desc' => 'We develop DeFi tokens with innovative features tailored to your specific needs, enabling you to excel within the decentralized fintech arena with personalized solutions.',
            'image' => 'hire-token-developer/icons/defi.webp'
        ],
    ],
])
<style type="text/css">
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
        /* opacity: 1;*/
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
</style>
@include('static.top-aligned-image-card-section' ,array(
    'title' => 'Our Clients', 
    'desc' => ''
));
<section class="travel-app">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h3> <strong>Experience Excellence with Our Strategic Tokenomics Solutions</strong></h3>
                    <hr>
                    <p>Our expert token developers use a structured approach to create a successful token customized to your unique goals and requirements.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/hire-token-developer/icons/tokens.png') }}"></div>
                    <p><strong>Defining Token Objectives</strong>Clearly define the purpose of your token. Whether using it for a blockchain project, a decentralized application, or capital raising through ICOs or STOs, we work together to clearly outline its function and role within your system.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/hire-token-developer/icons/blockchain.webp') }}">
                    </div>
                    <p><strong>Choosing the Optimal Blockchain Network</strong>We determine the best blockchain network for your token based on its goals. This could involve using Ethereum with its ERC-20 and ERC-721 standards or other platforms offering unique capabilities.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/hire-token-developer/icons/whitepaper.png') }}">
                    </div>
                    <p><strong>Detailed Whitepaper Creation</strong>We draft a comprehensive whitepaper detailing your project's goals, tokenomics, and technical aspects, creating a transparent guide to attract both investors and users.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/hire-token-developer/icons/smart-contracts.webp') }}"></div>
                    <p><strong>Sophisticated Smart Contract Development</strong>Our developers leverage advanced programming languages such as Solidity and Rust to design strong smart contracts, ensuring effective management and operation of your token.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/hire-token-developer/icons/testing.png') }}">
                    </div>
                    <p><strong>Rigorous Testing and Launch</strong>We conduct extensive testing of smart contracts on a testnet for troubleshooting and fixing any issues. Following successful tests, we proceed with deploying your token on the mainnet under blockchain standards.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/hire-token-developer/icons/verification.webp') }}">
                    </div>
                    <p><strong>In-Depth Code Audits</strong>Post-deployment, our team performs thorough audits of the smart contract code for its security and to identify and address any potential weaknesses.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/hire-token-developer/icons/marketing.png') }}">
                    </div>
                    <p><strong>Strategic Distribution and Promotion</strong>We handle the token distribution to every investor based on your tokenomics strategy and execute focused marketing campaigns to enhance awareness and drive adoption.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/hire-token-developer/icons/maintenance.png') }}">
                    </div>
                    <p><strong>Ongoing Support and Updates</strong>We provide ongoing support, interact with the user base, and make quick feedback-based updates for responsive and successful project delivery.</p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center cta_mine txt">
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                target="_blank" href="#"
                data-color-override="false" data-hover-color-override="false"
                data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Specialists</span></a>
        </div>
    </div>
</section>
<section class="roadmap gray-bg" id="roadmap">
    <div class="transition-gradient-after adjust-top"></div>
    <div class="container">
        <div class="dots-vert"></div>
        <div class="row mb40">
            <div class="section-title text-center" style="width: 100%">
                <div class="sec_tit mb20">
                    <h3 class="section-title underline mb20">Gain a Competitive Edge with Our Premier Token Development Services</h3>
                </div>
                <p>Leveraging our expert developers to create your token provides your business with a significant advantage and numerous benefits.</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-12">
                <ul class="workflow">
                    <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/cost-effective.webp') }}">
                        <h4 class="title">Affordable Solutions</h4>
                        <p> We offer high-quality token development services tailored to various budgets, delivering exceptional value and results. </p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/experts.png') }}">
                        <h4 class="title">Expert Blockchain Knowledge</h4>
                        <p>Our experienced team brings top-level expertise to create custom cryptocurrency tokens with accuracy and skill.
                        </p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/quick-time.webp') }}">
                        <h4 class="title">Timely Delivery</h4>
                        <p>We emphasize completing your projects on time, with regular updates to keep you informed about progress.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/security.png') }}">
                        <h4 class="title">Robust Security</h4>
                        <p>We focus on protecting your tokens and data through stringent security measures, minimizing potential risks.
                        </p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/customization.webp') }}">
                        <h4 class="title">Custom Tokens</h4>
                        <p>We design tokens to fit your specific requirements, offering extensive customization and advanced functionalities to make your project unique.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/support.png') }}">
                        <h4 class="title">Reliable Support</h4>
                        <p>Rely on us for continuous support throughout the token creation process, with our skilled experts providing advice and assistance every step of the way.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    .icon-box-3 {
        min-height: 264px;
        text-align: center;
    }

    .icon-box-3 .service-icon {
        height: 81px;
        width: 81px;
        border-width: 4px;
        border-color: rgb(223 3 67);
        background: #fff;
        position: relative;
        z-index: 10;
        margin-top: 25px;
        border-radius: 0;
        box-shadow: none;
        margin-left: 17px;
        border-radius: 6px;
        text-align: center !important;
        margin: 0 auto !important;
    }

    .icon-box-3 .service-icon:before {
        height: 81px;
        width: 81px;
        position: absolute;
        content: '';
        border-style: dashed;
        border-width: 2px;
        background: transparent;
        border-color: #09152b;
        z-index: -1;
        left: -15px;
        top: -15px;
        border-radius: 6px;
    }

    .icon-box-3 .service-icon img {
        background: #ffffff;
        padding: 7px;
        text-align: center !important;
    }
</style>
<section class="common_spacing" style="background:#fff;">
    <div class="container">
        <div class="row">
            <h3 class="sec_tit underline text-center" style="width: 100%">Leverage Our Advanced Technical Expertise for Token Development</h3>
        </div>
        <p class="text-center">Our token developers possess specialized technical skills essential for creating highly effective tokens. Here’s how our expertise distinguishes us</p>
        <div class="row mt40">
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s"
                style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                <div class="icon-box-3 mb-5 bg-sky-blue">
                    <div class="icon_box">
                        <div class="service-icon mr-5"> <img class="lazy"
                                src="{{ asset('images/hire-token-developer/icons/cryptography.webp') }}"> </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Sophisticated Cryptography</h4>
                            <p>We have expertise in protecting data, communications, and transactions through sophisticated cryptographic methods, including both symmetric and asymmetric encryption as well as hash functions. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="icon-box-3 mb-5 bg-sky-blue">
                    <div class="icon_box">
                        <div class="service-icon mr-5"> <img class="lazy"
                                src="{{ asset('images/hire-token-developer/icons/standard.webp') }}"> </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Blockchain Fundamentals and Ecosystems</h4>
                            <p>Our team employs fundamental blockchain principles to build strong and dependable systems, ensuring the robustness and reliability of each project. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="icon-box-3 bg-sky-blue">
                    <div class="icon_box">
                        <div class="service-icon mr-5"> <img class="lazy"
                                src="{{ asset('images/hire-token-developer/icons/oop-program.png') }}"> </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Principles of Object-Oriented Programming (OOP)</h4>
                            <p>We apply OOP methodologies to create adaptable and maintainable blockchain solutions, optimizing code reuse and resolving complex issues effectively.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="icon-box-3 bg-sky-blue">
                    <div class="icon_box">
                        <div class="service-icon mr-5"> <img class="lazy"
                                src="{{ asset('images/hire-token-developer/icons/data.webp') }}"> </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Expertise in Data Structures</h4>
                            <p>We proficiently handle essential data structures required for tokenization, ensuring efficient operation and organization within complex blockchain systems.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="icon-box-3 bg-sky-blue">
                    <div class="icon_box">
                        <div class="service-icon mr-5"> <img class="lazy"
                                src="{{ asset('images/hire-token-developer/icons/creation.png') }}"> </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Architecture for Token Development</h4>
                            <p>Our skills in token development cover managing cryptographic hash functions, consensus algorithms, and distributed ledger technologies with accuracy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="icon-box-3 bg-sky-blue">
                    <div class="icon_box">
                        <div class="service-icon mr-5"> <img class="lazy"
                                src="{{ asset('images/hire-token-developer/icons/smart-contracts.webp') }}"> </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Smart Contract Engineering</h4>
                            <p>We focus on crafting smart contracts that embed project logic into blockchain apps, delivering effective and practical token solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="icon-box-3 bg-sky-blue">
                    <div class="icon_box">
                        <div class="service-icon mr-5"> <img class="lazy"
                                src="{{ asset('images/hire-token-developer/icons/web-design.png') }}"> </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Frontend Design and Development</h4>
                            <p>In addition to blockchain work, we develop user-friendly frontend platforms for tokens, utilizing advanced web design and development techniques to build efficient decentralized applications (dApps).</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="icon-box-3 bg-sky-blue">
                    <div class="icon_box">
                        <div class="service-icon mr-5"> <img class="lazy"
                                src="{{ asset('images/hire-token-developer/icons/solidity.webp') }}"> </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Programming Language Expertise</h4>
                            <p>Our professionals are adept in programming languages such as Solidity, Rust, Hyperledger Fabric Chaincode, and Cardano Script, suitable for a range of blockchain environments</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="icon-box-3 bg-sky-blue">
                    <div class="icon_box">
                        <div class="service-icon mr-5"> <img class="lazy"
                                src="{{ asset('images/hire-token-developer/icons/frameworks.webp') }}"> </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Tools and Frameworks for Development</h4>
                            <p>We employ specialized blockchain tools and frameworks to develop and test token features, conducting unit and integration testing to ensure high standards of quality and reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center cta_mine txt">
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                target="_blank" href="#"
                data-color-override="false" data-hover-color-override="false"
                data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Specialists</span></a>
        </div>
    </div>
</section>
<div class="common_spacing" style="background: #f4f4f4;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 text-left" style="margin-top:60px;">
                <div class="section-title text-left">
                    <h2 class="title-th sec_tit underline">Partner with Top White-Label Crypto Token Developers at Our Renowned Firm</h2>
                </div>
                <p class="text-left mt20">Team up with our leading agency for white-label crypto token development, making it easy to design and launch tokens for your brand. While creating cryptocurrency from the ground up can be challenging, we streamline the process with our expertise.
                    Our experts utilize sophisticated smart contracts to swiftly develop tokens by configuring essential details like name, symbol, and initial supply, leveraging established code frameworks. This ensures a rapid and cost-effective creation process customized to your needs.                    
                    <br><br>
                    With our cutting-edge solutions, we address the technical complexities of building core functionalities and integrating your wallets, and resources optimization. This allows you to concentrate on delivering secure and feature-rich tokens with optimal efficiency.
                </p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                <img class="lazy" src="{{ asset('images/hire-token-developer/img-2.webp') }}"
                    alt="White-label Crypto Token Developers" title="White-label Crypto Token Developers">
            </div>
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
<section class="space-pt bg-dark-half-md tech-padding teck">
    <div class="container">
        <div class="row justify-content-md-center text-center">
            <div class="section-title text-center ">
                <h3 class="common_h3 text-white">Develop Your Cryptocurrency Across Multiple Blockchain Platforms</h3>
                <hr>
                <p class="white-color">
                    Our skilled team can use different blockchain platforms to create your cryptocurrency. We utilize the unique features and efficiencies of these networks, customizing them to meet your unique needs.</p>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-sm-12">
                <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/hire-token-developer/icons/ethereum.png') }}" alt="Ethereum"> </div> <a
                            href="#" class="category-title">Ethereum</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/nftm/icons/bnb.webp') }}" alt="BNB Chain"> </div> <a
                            href="#" class="category-title">BNB Chain</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/nftm/icons/solana.webp') }}" alt="Solana"> </div> <a
                            href="#" class="category-title">Solana</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/nftm/icons/polygon.webp') }}" alt="Polygon"> </div> <a
                            href="#" class="category-title">Polygon</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/tron.webp') }}" alt="Tron"> </div>
                        <a href="#" class="category-title">Tron</a>
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
                                src="{{ asset('images/hire-token-developer/icons/eos_eoscoin.webp') }}" alt="EOS"> </div>
                        <a href="#" class="category-title">EOS</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/crypto-advisory-services/icons/hyperledger.webp') }} " alt="Hyperledger"> </div>
                        <a href="#" class="category-title">Hyperledger</a>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="clearfix"></div>
        <div class="text-center cta_mine txt">
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                data-color-override="false" data-hover-color-override="false"
                data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with our
                    Experts</span></a>
        </div>
    </div>
</section>
<style type="text/css">
    @media (max-width:320px) {
        .tech-stack ul img {
            width: 50%;
            height: 50px;
        }
    }
</style>
<section class="tech-stack">
    <div class="container">
        <div class="col-lg-12 center">
            <div class="section-title text-center m-b-30">
                <h3 class="common_h3 sec-tit">Cutting-Edge Technology Stack for Building Cryptocurrency</h3>
                <hr>
                <p>Our experienced team utilizes a carefully curated technology stack, combining advanced frameworks to develop cryptocurrency from the ground up. This strategy ensures superior functionality and performance for your project, driving innovation and excellence.</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked"
                style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                <li class="active"><a href="#vtab25" data-toggle="tab">
                        <p>Programming Languages</p>
                    </a></li>
                <li><a href="#vtab26" data-toggle="tab">
                        <p>Frameworks</p>
                    </a></li>
                <li><a href="#vtab27" data-toggle="tab">
                        <p>Wallet</p>
                    </a></li>
                <li><a href="#vtab28" data-toggle="tab">
                        <p>Cloud Platform</p>
                    </a></li>
                <li><a href="#vtab29" data-toggle="tab">
                        <p>Databases</p>
                    </a></li>
                <li><a href="#vtab30" data-toggle="tab">
                        <p>File Storage</p>
                    </a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="tab-content technology">
                <div role="tabpanel" class="tab-pane in active" id="vtab25">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/web3js.webp') }}">
                                <p>Web3.js</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/node-js_logo.webp') }}">
                                <p>Node.js</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/angular.webp') }}">
                                <p>Angular.js</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/express-js1.webp') }}">
                                <p>Express.js</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/react.webp') }}">
                                <p>React</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/rust.webp') }}">
                                <p>Rust</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab26">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/angular.webp') }}">
                                <p>Angular JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/express-js1.webp') }}">
                                <p>Express. JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/react.webp') }}">
                                <p>React</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/laravel.webp') }}">
                                <p>Laravel</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/web3js.webp') }}">
                                <p>Web3.js</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/truffle.webp') }}">
                                <p>Truffle</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/ganache.webp') }}">
                                <p>Ganache</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab27">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/metamask.webp') }}">
                                <p>MetaMask </p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/trust.webp') }}">
                                <p>TrustWallet </p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/walletconnect.webp') }}">
                                <p>WalletConnect</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/exodus.webp') }}">
                                <p>Exodus</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/coinbase.webp') }}">
                                <p> Coinbase Wallet</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab28">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/aws.webp') }}">
                                <p>AWS (Amazon Web Services)</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/azure.webp') }}">
                                <p>Microsoft Azure</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/google-cloud.webp') }}">
                                <p>Google Cloud Platform (GCP)</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab29">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/MongoDB-black.webp') }}">
                                <p>MongoDB</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/ipfs.webp') }}">
                                <p>IPFS (InterPlanetary File System)</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab30">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/pinata.webp') }}">
                                <p>Pinata</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/hire-token-developer/icons/filecoin.webp') }}">
                                <p>Filecoin</p>
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
<section class="product-features package_includes" style="background:#f4f4f4;">
    <div class="container">
        <div class="section-title text-center">
            <div class="sec_tit mb20">
                <h3 class="section-title underline mb20 ">Accelerate Your Crypto Token Launch with Our Expert Development Team</h3>
            </div>
            <p class=" ">Our experienced developers excel in creating custom token solutions tailored to your business. We provide advanced, reliable services to quickly launch your crypto token, leveraging our broad experience in crafting effective and targeted tokens.
                <br><br>
                We also offer ready-to-deploy solutions that simplify launching your token in the rapidly changing and growing crypto market. Our comprehensive support ensures your digital token is precisely customized to your needs. Partner with us to develop personalized tokens and scale your business.
            </p><br>
        </div>
        <div class="text-center cta_mine txt">
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                target="_blank" href="#"
                data-color-override="false" data-hover-color-override="false"
                data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Specialists</span></a>
        </div>
    </div>
</section>
<style type="text/css">
    .panel.panel-default {
        background-color: transparent;
    }

    .panel-default>.panel-heading {
        background-color: transparent;
        border: 0px;
    }

    .panel.panel-default {
        background-color: transparent;
        max-width: 800px;
        margin: 0 auto;
        width: 100%;
        margin-bottom: 10px;
    }

    .panel.panel-default:last-child() {
        margin-bottom: 30px;
    }

    .accordion-heading {
        padding: 5px;
    }

    @media only screen and (max-width : 320px) {
        a.collapsed {
            /* line-height: 28px;*/
        }

        .accordion-heading em {
            display: none;
        }

        span.machine {
            line-height: 24px;
        }
    }
</style>
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What Does a Token Developer Do?',
            'ans' => "A token developer is an expert who creates and manages cryptocurrency tokens. They handle tasks such as coding smart contracts, designing tokenomics, and integrating tokens into blockchain networks, ensuring they meet project goals and function correctly."
        ],
        [
            'ques' => 'What Varieties of Tokens Can a Token Developer Design?',
            'ans' => "Token developers can produce various types of tokens, including utility tokens, security tokens, and NFTs. Each type has distinct purposes, such as governance, investment, or representing digital assets."
        ],
        [
            'ques' => 'Why Is It Important to Hire a Token Developer?',
            'ans' => "A token developer is crucial for crafting secure, effective, and compliant tokens that align with your project’s goals. Their expertise ensures that tokens are seamlessly integrated into the blockchain and fit your strategic objectives."
        ],
        [
            'ques' => 'What Qualifications Should a Crypto Token Developer Possess?',
            'ans' => "A competent crypto token developer should have strong knowledge in blockchain technology, smart contract programming, cryptographic security, and languages like Solidity and Rust. They should also be familiar with tokenomics and regulatory requirements."
        ],
        [
            'ques' => 'How Can I Find the Right Crypto Token Developer?',
            'ans' => "Look for a crypto token developer with a proven history, relevant experience, and a deep understanding of blockchain technology. Evaluate their previous work and client reviews to ensure they are a good fit for your project’s needs."
        ],
        [
            'ques' => 'What Is the Cost of Hiring a Crypto Token Developer?',
            'ans' => "The cost of engaging a crypto token developer depends on factors like project complexity, desired features, and the developer's experience. It's important to discuss your specific needs and budget to get an accurate cost estimate."
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