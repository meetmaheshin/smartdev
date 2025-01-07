@extends('layouts.static')
    @section('title', 'White Label Crypto Exchange')
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
        background: linear-gradient(45deg, #192590, #3f9cf7) !important;
        color: #fff;
        cursor: pointer;
        margin: 10px;
        text-transform: capitalize !important;
        /*    box-shadow: 0px 3px 0px 2px #63acff;*/
    }

    .timeline-center .tm-icon {
        font-size: 30px;
        color: #47b475;
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
        /*background-image: url(images/chatgpt-applications-development/bg.webp);
        background-size: cover;*/
        /*            background: #140d4c;*/
        background: linear-gradient(140deg, #000051 50%, #020f8e);
        padding-top: 120px;
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
        margin-top: 90px;
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
        line-height: 1.4;
        font-size: 18px;
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
        /*width: 100%;
        margin-top: 30px;*/
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
        background: url(images/lab/dot-shape.webp) #1f1d68;
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
        background: #f2f2f2;
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
        border-top: 3px solid #1f1d68;
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
        /*    background: #47b475 !important;*/
        background: linear-gradient(45deg, #192590, #3f9cf7) !important;

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


    .featured-icon-box.style3 .featured-desc:after {
        position: absolute;
        content: '';
        width: 0;
        height: 0;
        border-bottom: 34px solid #350068;
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
        background-color: #350068;
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
        border-left: 2px solid #350068;
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
        background: #1f1d68;
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
        color: #1f1d68;
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
        color: #1f1d68;
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
        width: 49%;
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
        background: #0d3881;
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
        color: #350068;
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
        border: 4px solid #350068;
        float: left;
        margin-right: 20px;
        position: relative;
        padding: 13px;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    .travel-app-items1 .icons img {}

    .travel-app .app-screen1 {
        padding: 10px;
        max-width: 320px;
    }

    /*------------ Complimentary-Features Style -----------*/
    .complimentary-features {
        padding: 60px 0px 0 0;
        background: #fff;
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
        background: #f4faff;
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
        background: #140050;
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
        grid-template-columns: 30% 70%;
        padding: 10px;
        align-items: center;
        text-align: left;
    }

    .welcome-content ul li .icons {
        width: 50px;
        margin-right: 10px;
        padding-right: 10px;
        border-right: 1px solid #fff;
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
        background: #a9d2fa;
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
        color: #1f1d68;
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


<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <!-- <div class="banner-overlay"></div> -->
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1 itemprop="name">White Label Cryptocurrency Exchange </h1>
                                        </div>
                                        <p itemprop="text">Harness our top-tier White Label cryptocurrency exchange solutions to elevate your business potential in today’s competitive landscape. Dominate the decentralized financial markets with an advanced, ready-to-launch platform that can go live within days.</p>
                                        <div class="sub_ff1" style="margin-top: 10px;">
                                            <i class="fa fa-check" aria-hidden="true"></i> <strong class="dev1"><span
                                                    class="text-white">Intuitive User Interfaces</span></strong>
                                            <i class="fa fa-check" aria-hidden="true"></i> <strong class="dev1"><span
                                                    class="text-white">Integrated APIs and SDKs for Crypto Liquidity </span></strong>
                                            <i class="fa fa-check" aria-hidden="true"></i> <strong class="dev1"><span
                                                    class="text-white">High Throughput Scalability </span></strong>
                                        </div>

                                        <div class="txt">
                                            <a rel="nofollow" href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important;">Consult with Our Experts</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center" style="margin-top: 120px;"> 
                            <img class="magic" src="{{ asset('images/white-label-crypto-exchange/banner-img2.webp') }}"
                                alt="White label Cryptocurrency Exchange Software" title="White label Cryptocurrency Exchange Software" style="width: 400px"> 
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
        background: #000fd4;
    }

    #counter-stats .stats:nth-child(2) {
        background: #00028d;
    }

    #counter-stats .stats:nth-child(3) {
        background: #000fd4;
    }

    #counter-stats .stats:nth-child(4) {
        background: #00028d;
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

<div class="common_spacing gray_bg">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title-th sec_tit underline">Ready-to-Deploy White Label Crypto Exchange</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p class="text-center">Seeking the ideal solution to advance your crypto business vision? Our cutting-edge White Label crypto exchange software enables you to launch and manage remarkable projects that captivate global audiences. Equipped with advanced APIs, price oracles, and SDKs, our platforms guarantee seamless operation from day one.
                    <br><br>
                    Whether you're a startup, established enterprise, FinTech leader, or financial institution, our solutions are designed to meet diverse needs with a focus on your unique goals. Connect with our experts today to embark on a journey to launch a distinctive and dynamic crypto exchange!
                </p>

            </div>

            <div class="clearfix"></div>
            <div class="text-center cta_mine txt">
                {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                    target="_blank" href="#"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>Book a Consultation</span></a> --}}
                <a rel="nofollow" href="{{ url('consultation') }}"
                    class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Speak with Our Specialists</span></a>
            </div>
        </div>
    </div>
</div>





<section class="center-align">
    <div class="container">
        <div class="row">
            <h2 class="sec_tit underline text-center" style="font-size:25px;">Key Features of Our White Label Crypto Exchange</h2>
            <p class="text-center">Our White Label crypto exchange platforms incorporate a range of advanced features designed to enhance the trading experience for both newcomers and experienced traders. Regardless of whether you choose a centralized, decentralized, or hybrid model, these components are crucial to the platform's success:</p>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="reverse" style="background: #a9d2fa;">
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>User Dashboard</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>

                            <div class="sub_ff1" style="margin-top: 10px;">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Displays current portfolio balances in both cryptocurrency and fiat currencies.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Provides real-time buy and sell prices for various cryptocurrencies.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Enables users to send and receive cryptocurrencies.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Facilitates the buying and selling of digital assets.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Shows withdrawal and deposit balances.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Highlights crypto market trends over different periods</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/white-label-crypto-exchange/user-panel.png') }}"
                            alt="User Dashboard Of White Label Crypto Exchange"
                            title="User Dashboard Of White Label Crypto Exchange">
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Admin Dashboard</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>

                            <div class="sub_ff1" style="margin-top: 10px;">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Offers real-time insights into ongoing transactions, including buys, sells, and transfers.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Allows admins to view detailed information about individual users.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Shows live exchange rates and current system activities.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">Keeps records of transaction details for buying, selling, and transfers.</p>
                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/white-label-crypto-exchange/admin-panel.png') }}"
                            alt="Admin Dashboard Of White Label Crypto Exchange"
                            title="Admin Dashboard Of White Label Crypto Exchange">
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul style="background: #a9d2fa;">
                    <li>
                        <img class="lazy" src="{{ asset('images/white-label-crypto-exchange/trading-panel.png') }}"
                            alt="Trading Portal Of White Label Crypto Exchange"
                            title="Trading Portal Of White Label Crypto Exchange">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Trading Portal</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>

                            <div class="sub_ff1" style="margin-top: 10px;">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">The bid table presents data on exchange bids.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">The payment order dashboard provides details on transactions and participants.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">The balance monitoring section displays node balances for all cryptocurrencies on the platform.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">The multi-currency panel shows real-time balances for various cryptocurrencies.</p>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="dev1">The pending transactions section lists information on transactions awaiting completion.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>


<section class="travel-app" style="background: #e6f4fa;">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="section-title text-left">
                    <h3> <strong>Decide, Deploy, and Launch Your Crypto Exchange with Ease</strong></h3>
                    <hr>
                    <p>Our White Label crypto exchange solution offers exceptional flexibility, allowing you to decide, implement, and launch your platform within just days. Our team of experts supports you through every stage to ensure a flawless execution.</p>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/digital-assets.webp') }}"></div>
                    <p><strong>Cross-Platform Compatibility</strong>Our pre-configured crypto exchange system operates flawlessly across various digital environments, including web browsers and mobile devices.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/crypto-1.webp') }}"></div>
                    <p><strong>Diverse Crypto Assets</strong>The ready-to-use exchange supports a broad range of digital assets, including coins, tokens, derivatives, and stablecoins.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/security.png') }}"></div>
                    <p><strong>Premier Security</strong>Exchanges built with our White Label software come with robust, enterprise-level security features designed to protect your crypto assets comprehensively.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style type="text/css">
    .technology ul li p {
        margin-bottom: 0;
    }

    .tab-style {
        position: relative;
        display: inline-block;
    }

    .tab-style img {
        width: 100%;
        /* height: 100%; */
    }

    .tab-style .img-top {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99;
    }

    .tab-style:hover .img-top {
        content: url(images/white-label-crypto-exchange/dashboard-black.webp);
        display: inline;
    }
</style>
<section class="welcome-content" style="background: linear-gradient(140deg, #000051 50%, #020f8e);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="sec_tit underline text-center text-white">Unveil a Customized Cryptocurrency Exchange Tailored to Your Brand</h3>
                <p class="text-center text-white">Partner with our experts to effortlessly build and launch a cryptocurrency exchange that reflects your unique brand identity. Simply define your branding objectives and share them with us, and we'll handle the rest.</p><br>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                    <img src="{{ asset('images/white-label-crypto-exchange/color-1.webp') }}" class="lazy"
                        style="max-width: 210px;">
                    <img src="{{ asset('images/white-label-crypto-exchange/color-2.webp') }}" class="lazy"
                        style="max-width: 210px;">
                    <img src="{{ asset('images/white-label-crypto-exchange/color-3.webp') }}" class="lazy"
                        style="max-width: 210px;">
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="tab-style">
                        <img src="{{ asset('images/white-label-crypto-exchange/dashboard-white.webp') }}" class="lazy">
                        <img src="{{ asset('images/white-label-crypto-exchange/dashboard-black.webp') }}" class="lazy img-top">
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>


<section class="product-features package_includes gray_bg">
    <div class="container">
        <div class="section-title text-center">
            <div class="sec_tit mb20">
                <h2 class="section-title underline mb20 ">What We Provide Beyond Pre-Built Crypto Exchange Software</h2>
            </div>
            <p class=" ">Enhance your business with our pre-built crypto exchange software and a suite of exceptional services designed to align your project with market demands. Leverage our expertise to significantly amplify your success.</p><br>
        </div>
        <div class="col-md-12 text-center">
            <div class="container container-center">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="Package_list"> <img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/crypto-wallet.png') }}" alt="">
                        <h3>Crypto Wallet Solutions</h3> Develop a secure crypto wallet application for managing and transacting a variety of cryptocurrency tokens.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="Package_list"> <img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/partnerships.png') }}" alt="">
                        <h3> Escrow Services</h3>Implement a robust escrow system to protect users' crypto assets, utilizing both cold and hot wallet infrastructures.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="Package_list"> <img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/payment-gateways.png') }}" alt="">
                        <h3> On/Off-Ramp Payment Integration</h3>Create seamless interfaces for converting between crypto and fiat currencies, facilitating smooth fund transfers within your exchange.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="Package_list"> <img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/branding.webp') }}" alt="">
                        <h3> Customization and Branding</h3>Tailor your White Label crypto exchange to meet your specific branding and design needs, ensuring a unique platform identity.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="Package_list"> <img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/architecture.png') }}" alt="">
                        <h3> Modular Architecture</h3> Employ our modular architecture expertise to design a flexible exchange platform that adapts to evolving workflows and features.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="Package_list"> <img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/liquidity.webp') }}" alt="">
                        <h3> Liquidity Management</h3>Optimize liquidity for all cryptocurrencies on your platform with our comprehensive liquidity solutions.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="Package_list"> <img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/app.png') }}" alt="">
                        <h3> Web and Mobile Applications</h3>Deploy user-friendly applications for both web and mobile devices, ensuring continuous access to your exchange.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="Package_list"> <img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/protocols.webp') }}" alt="">
                        <h3> KYT Protocol</h3>Integrate a Know-Your-Transaction (KYT) protocol to monitor and track suspicious crypto transactions in real time.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
        background: #f2f2f2;
        padding: 15px;
        border-left: 5px solid #1f1d68
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
        <div class="row">
            <div class="section-title text-center" style="width: 100%">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20" >Key Features of Our Pre-Built Crypto Exchange Solutions</h2>
                </div>

            </div>
        </div>
        <div class="row mt20 container-center">
            <div class="col-md-6 equalize">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/centralized.webp') }}"></div>
                    <div class="icon_content">
                        <h3>Centralized Exchange</h3>
                        <p class="c-grey">Centralized exchanges are managed by overseeing entities that control and facilitate various platform operations. They offer a user-centric experience with enhanced security protocols.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 equalize">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/decentralized.png') }}"></div>
                    <div class="icon_content">
                        <h3>Decentralized Exchange</h3>
                        <p class="c-grey">Decentralized exchanges operate independently of intermediaries, utilizing smart contracts to manage transactions directly from user wallets, ensuring a decentralized trading environment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 equalize">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/hybrid.webp') }}"></div>
                    <div class="icon_content">
                        <h3>Hybrid Crypto Exchange</h3>
                        <p class="c-grey">Hybrid exchanges combine the strengths of both centralized and decentralized systems, delivering an exceptional user experience while maintaining robust decentralized operations and security.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 equalize">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/white-label-crypto-exchange/icons/peer-to-peer.webp') }}"></div>
                    <div class="icon_content">
                        <h3>Peer-to-Peer Exchange</h3>
                        <p class="c-grey">Peer-to-peer (P2P) exchanges use an escrow system to manage transactions between users, ensuring that funds are only transferred to the recipient once the required conditions are met.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<style>
    .feature-box-3 .icon img {
        margin-top: 12px;
    }
</style>

<div id="our_services" class="defisec gray_bg">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="common_h3 title-th sec_tit">Introducing Our White Label Derivative Crypto Exchange Platform</h3>
            <hr>
            <p>Eager to dive into the derivative crypto exchange arena swiftly? Our White Label derivative crypto exchange platform offers a robust solution to enhance your competitive edge in the market. Rest assured, our software seamlessly accommodates all crypto derivative models with exceptional ease.</p><br>
        </div>
        <div class="grids">
            <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                <div class="feature-box-3">
                    <div class="icon"> <img src="{{ asset('images/white-label-crypto-exchange/icons/margin.webp') }}" alt=""
                            class="lazy" width="45px;"> </div>
                    <h4 class="feature-title common_h4">Margin Derivatives</h4>
                    <p class="feature-desc mb0">Launch a margin derivatives exchange to enable investors to leverage their trading positions by borrowing cryptocurrency funds.</p>
                </div>
            </div>
            <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                <div class="feature-box-3">
                    <div class="icon"><img src="{{ asset('images/white-label-crypto-exchange/icons/future-plan.svg') }}" alt=""
                            class="lazy" width="45px;"> </div>
                    <h4 class="feature-title common_h4">Futures Derivatives</h4>
                    <p class="feature-desc mb0">Develop a futures derivatives exchange that allows users to speculate on the future price movements of specific cryptocurrencies.</p>
                </div>
            </div>
            <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                <div class="feature-box-3">
                    <div class="icon"> <img src="{{ asset('images/white-label-crypto-exchange/icons/smart-contracts.webp') }}"
                            alt="" class="lazy" width="45px;"></div>
                    <h4 class="feature-title common_h4">Perpetual Derivatives</h4>
                    <p class="feature-desc mb0">Create a perpetual derivatives exchange where users can invest in digital contracts that track the ongoing prices of cryptocurrencies.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">
    .workflow {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        padding: 0;
        margin: 0
    }

    .workflow li {
        text-align: center;
        border: 1px solid #3333;
        border-radius: 7px;
        margin: 1.5%;
        padding: 20px;
        width: 30%;
        position: relative
    }

    .workflow li h4 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .workflow li img {
        width: 65px
    }

    .workflow li p {
        margin-bottom: 0;
    }
    .workflow .fa {
        color: #140050;
        font-size: 50px;
        margin-top: 7px;
        margin-bottom: 10px;
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

        .data table th:last-child {
            margin: 10px 0 0;
            display: table-cell;
            width: 100%
        }
    }
</style>
<section class="roadmap" id="roadmap">
    <div class="transition-gradient-after adjust-top"></div>
    <div class="container">
        <div class="dots-vert"></div>
        <div class="row">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20">Unlock the Exceptional Advantages of Our Pre-Built Crypto Exchange Solution</h2>
                </div>
                <p>Harness the power of our pre-built crypto exchange application to deliver unparalleled benefits that significantly enhance user experiences and boost your market position. With our ready-made exchange solution, outshining your competitors has never been easier!
                </p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-12">
                <ul class="workflow">
                    <li><img class="lazy" src="{{ asset('images/white-label-crypto-exchange/icons/transaction-fees.png') }}">
                        <h4>Transparent Pricing</h4>
                        <p>You’ll only incur costs for technical support and exchange hosting, with no hidden fees affecting your project budget.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/white-label-crypto-exchange/icons/user.png') }}">
                        <h4>Tailored User Interfaces</h4>
                        <p>Personalize the user interface of your White Label crypto exchange to align perfectly with your branding objectives and user experience goals.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/white-label-crypto-exchange/icons/admin-panel.png') }}">
                        <h4>Comprehensive Admin Panel</h4>
                        <p>Develop an admin panel equipped with advanced tracking and analytical tools to optimize the management and functionality of your app.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/white-label-crypto-exchange/icons/trading.png') }}">
                        <h4>Advanced Trading APIs</h4>
                        <p>Integrate cutting-edge trading APIs to facilitate essential trading functions and ensure a smooth, user-friendly experience for your customers.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/white-label-crypto-exchange/icons/search-engine.webp') }}">
                        <h4>High-Efficiency Matching Engine</h4>
                        <p>Implement a high-performance matching engine that handles buy and sell transactions with flawless efficiency around the clock.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/white-label-crypto-exchange/icons/integration.png') }}">
                        <h4>CoinMarketCap Integration</h4>
                        <p>Feature your exchange on CoinMarketCap and other listing platforms by incorporating the necessary parameters we provide.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="welcome-content" style="background: linear-gradient(140deg, #000051 50%, #020f8e);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                <h2 class="sec_tit underline text-center text-white">Sophisticated Features of Our Cryptocurrency Exchange Application</h2>
                <p class="text-center text-white" style="font-size: 16px;">Our cutting-edge cryptocurrency exchange app is designed with advanced features to captivate the modern crypto enthusiast. Drawing from our extensive industry experience, our customizable solution provides exceptional value and optimizes your business potential.</p>
            </div>
            <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/trading.png') }}"></div>
                        <p class="white">Robust Order Trading Engine</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/liquidity.webp') }}"></div>
                        <p class="white">Integrated Crypto Liquidity Solutions</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/kyc.png') }}"></div>
                        <p class="white">Streamlined KYC/AML Processes</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/multi-currency.webp') }}"></div>
                        <p class="white">Support for Diverse Token Types</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/peer-to-peer.webp') }}"></div>
                        <p class="white">Peer-to-Peer Exchange Features</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/white-label.webp') }}"></div>
                        <p class="white">Customizable White Label Solution</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/payment-gateways.png') }}"></div>
                        <p class="white">Multi-Payment Gateway Integration</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/compliance.webp') }}"></div>
                        <p class="white">Regulatory Compliance</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/secure.webp') }}"></div>
                        <p class="white">Secure Custody and Escrow Services</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/banking.webp') }}"></div>
                        <p class="white">Banking Integration</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/quick-time.webp') }}"></div>
                        <p class="white">Real-Time Exchange Rates</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/user.png') }}"></div>
                        <p class="white">Intuitive Dashboards for Users and Admins</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/integration.png') }}"></div>
                        <p class="white">Versatile Trading Options</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/analytics.png') }}"></div>
                        <p class="white">Advanced Analytical Tools</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/staking.webp') }}"></div>
                        <p class="white">Tiered Staking Mechanisms</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/transactions.png') }}"></div>
                        <p class="white">Smart Transaction Fees</p>
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
                <h3 class="common_h3 sec-tit">Enhanced Features to Elevate Your Exchange</h3>
                <hr>
                <p>Looking to make your exchange stand out in the competitive crypto market while streamlining administrative operations? Our expertise enables you to launch a cryptocurrency exchange enriched with a range of features designed to benefit all stakeholders.</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked"
                style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                <li class="active"><a href="#vtab50" data-toggle="tab">
                        <p>Admin Panel </p>
                    </a></li>
                <li><a href="#vtab51" data-toggle="tab">
                        <p>Add-on</p>
                    </a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="tab-content technology">
                <div role="tabpanel" class="tab-pane in active" id="vtab50">
                    <div class="row">
                        <ul>
                            <li>
                                <p>Customer Management</p>
                            </li>
                            <li>
                                <p>Token/Coin Integration</p>
                            </li>
                            <li>
                                <p>Liquidity Management</p>
                            </li>
                            <li>
                                <p>Order Book Oversight</p>
                            </li>
                            <li>
                                <p>Launchpad Administration</p>
                            </li>
                            <li>
                                <p>Trading Pair Management</p>
                            </li>
                            <li>
                                <p>KYC/AML Verification</p>
                            </li>
                            <li>
                                <p>Commission Management</p>
                            </li>
                            <li>
                                <p>Buy/Sell Order Control</p>
                            </li>
                            <li>
                                <p>Feedback Mechanisms</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab51">
                    <div class="row">
                        <ul>
                            <li>
                                <p>IEO/IDO/STO</p>
                            </li>
                            <li>
                                <p>Trade Calculator</p>
                            </li>
                            <li>
                                <p>Chatbot Integration</p>
                            </li>
                            <li>
                                <p>Trading Bot</p>
                            </li>
                            <li>
                                <p>Staking Module</p>
                            </li>
                            <li>
                                <p>Cold Wallet Integration</p>
                            </li>
                            <li>
                                <p>Loan Portal</p>
                            </li>
                            <li>
                                <p>Liquidity Pools</p>
                            </li>
                            <li>
                                <p>Merchant API</p>
                            </li>
                            <li>
                                <p>Light/Dark Themes</p>
                            </li>
                            <li>
                                <p>Market Maker API</p>
                            </li>
                            <li>
                                <p>Advanced Charting Tools</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="common_spacing uniq_features gray_bg">
    <div class="why-blockchain-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-sm-12" style="margin-top:50px;">
                    <img src="{{ asset('images/white-label-crypto-exchange/security.webp') }}" class="lazy br-5 img-fluid" alt=" " title=" ">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3 class="font-wei mb20">Advanced Security Measures in Our Crypto Exchange Solution</h3>
                    <p>Our crypto exchange solution is equipped with cutting-edge security features designed to significantly enhance the safety of your operations. Achieve unparalleled security and provide seamless crypto exchange experiences with ease:</p><br>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <ul>
                                <li>Robust HTTP Authentication</li>
                                <li>Comprehensive Data Encryption</li>
                                <li>Jail Login Security</li>
                                <li>Multi-Factor Authentication</li>
                                <li>Anti-DOS Measures</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <ul>
                                <li>Anti-DDOS Protection</li>
                                <li>HTTP Parameter Pollution Defense</li>
                                <li>Cross-Site Request Forgery (CSRF) Safeguards</li>
                                <li>Server-Side Request Forgery (SSRF) Shielding</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style type="text/css">
    .awesome-features-wrapper {
        /* border: 1px solid #cdcdcd; */
        background: #fff;
        padding-top: 30px;
        padding-bottom: 20px;
        min-height: auto;
        transition: .3s;
        position: relative;
        margin-bottom: 30px;
        /* border-radius: 10px; */
        transition: 1s;
        border-radius: 7px;
    }

    .awesome-features-wrapper::after {
        content: "";
        position: absolute;
        right: -6px;
        top: -6px;
        background: #0d3881;
        width: 90px;
        height: 90px;
        z-index: -1;
        transition: 1s;
        border-radius: 7px;
    }

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
        background: #0d3881;
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

    .sub_ff strong {
        display: block;
        /* padding-left: 26px;*/
        font-size: 17px;
        /*margin-bottom: 10px;*/
        font-weight: 900;
    }

    /* width */
    .sub_ff::-webkit-scrollbar {
        width: 7px;
    }

    /* Track */
    .sub_ff::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    .sub_ff::-webkit-scrollbar-thumb {
        background: #140050;
        border-radius: 10px;
    }

    /* Handle on hover */
    .sub_ff::-webkit-scrollbar-thumb:hover {
        background: #318b57;
    }

    .sub_ff {
        position: relative;
        margin-top: 0px;
        margin-bottom: 20px;
        max-height: 320px;
        overflow-y: scroll;
        padding: 0px 15px 15px 15px;
    }

    .sub_ff p {
        padding: 0 0 0 40px;
        color: #fff;
    }

    .sub_ff i {
        position: relative;
        float: left;
        color: #000;
        line-height: 1.5;
        font-size: 19px;
        margin-right: 10px;
        margin-left: -40px;
        background: #fff;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        text-align: center;
        font-weight: bold;
    }

    .sub_ff i:after {
        content: '';
        position: absolute;
        left: 15px;
        bottom: 15px;
        height: 100px;
        width: 1px;
        border: 1px solid #fff;
    }
</style>


<div class="about-one section-padding"
    style="padding:60px 0px; background: linear-gradient(140deg, #010317, #1b2372, #0c58ff);">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div itemscope itemtype="http://schema.org/CreativeWork">
                    <div class="section-title text-left">
                        <h3 itemprop="name" class="text-white">Steps to Launching a Crypto Exchange with Our Turnkey Solution</h3>
                        <hr>
                        <p itemprop="text" class="para text-white">Launching a crypto exchange, whether from scratch or using a pre-built platform, involves a series of strategic steps tailored to meet your specific needs. Our team is equipped to activate a high-performance crypto exchange platform using our Whitelabel solution through targeted integrations and customizations, ensuring an optimal business outcome.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="sub_ff">
                    <p><i class="fa" aria-hidden="true">01</i> <strong class="dev">Select the Model</strong>Determine the type of crypto exchange you wish to establish (centralized, decentralized, or hybrid) and choose the corresponding Whitelabel solution.</p>
                    <p><i class="fa" aria-hidden="true">02</i> <strong class="dev">Ensure Compliance</strong>Incorporate necessary user verification features to comply with legal standards like KYC and AML regulations.</p>
                    <p><i class="fa" aria-hidden="true">03</i> <strong class="dev">Choose Technology</strong>Decide on the technology stack for your application, selecting from existing options or integrating additional tech as needed.</p>
                    <p><i class="fa" aria-hidden="true">04</i> <strong class="dev">Design User Interface</strong>Customize the UI/UX to align with your branding requirements, adjusting visuals and graphics to enhance user experience.</p>
                    <p><i class="fa" aria-hidden="true">05</i> <strong class="dev">Configure Trading Engine</strong>Adapt the built-in trading engine to fit your exchange’s scale and target markets, ensuring efficient and reliable operations.</p>
                    <p><i class="fa" aria-hidden="true">06</i> <strong class="dev">Integrate Crypto Wallets</strong>Incorporate popular crypto wallet APIs to offer users seamless trading and secure storage options.</p>
                    <p><i class="fa" aria-hidden="true">07</i> <strong class="dev">Implement Liquidity Providers</strong>Engage robust liquidity providers to ensure your exchange maintains adequate availability of tokens and coins for trading.</p>
                    <p><i class="fa" aria-hidden="true">08</i> <strong class="dev">Establish Payment Gateway</strong>Customize the payment gateway to handle both crypto and fiat transactions, ensuring smooth operation regardless of user volume.</p>
                    <p><i class="fa" aria-hidden="true">09</i> <strong class="dev">Enhance Features</strong>Modify and add unique features to differentiate your exchange and appeal to users in a competitive landscape.</p>
                    <p><i class="fa" aria-hidden="true">10</i> <strong class="dev">Conduct Testing and QA</strong>Perform comprehensive testing to identify and resolve any issues, ensuring the platform's quality and functionality.</p>
                    <p><i class="fa" aria-hidden="true">11</i> <strong class="dev">Deploy the Platform</strong>Launch the crypto exchange application on the blockchain mainnet, giving you full administrative control and access for public use.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="common_spacing gray_bg">
    <div class="container">
        <div class=" ">
            <h3 class="sec_tit underline text-center">Applications of Our White Label Crypto Exchange Platform</h3>
            <p class="text-center">Our advanced White Label crypto exchange platform offers versatile use cases that can significantly enhance your business operations. Tap into our cutting-edge solution with tailored configurations to unlock its full potential!</p>


        </div>
        <div class="row mt40">
            <div class="container container-center">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/digital-assets.webp') }}"> </div>
                        <div class="awesome-features-text">
                            <h4
                                style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                                Multi-Asset Trading</h4>
                            <p>Operate an exchange capable of managing a diverse array of cryptocurrencies and tokens across multiple blockchains, catering to a broad spectrum of traders.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/investment.webp') }}"> </div>
                        <div class="awesome-features-text">
                            <h4
                                style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                                Investment Hub</h4>
                            <p>Provide a secure and user-friendly portal for cryptocurrency investments, allowing users to grow their assets effectively and safely.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/liquidity.webp') }}"> </div>
                        <div class="awesome-features-text">
                            <h4
                                style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                                Liquidity Management</h4>
                            <p>Offer comprehensive liquidity solutions for various digital currencies, enabling traders to execute a wide range of transactions with ease.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/white-label-crypto-exchange/icons/payment-gateways.png') }}"> </div>
                        <div class="awesome-features-text">
                            <h4
                                style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                                Streamlined Deposits and Payments</h4>
                            <p>Facilitate smooth deposit and payment processes through an integrated system, enhancing user satisfaction and fostering long-term engagement.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="contentall" align="center">
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                href="$" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
            <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
                style="border-radius: 30px !important; text-transform:none !important;">Talk to Our Experts</a>
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
        padding: 30px 0;
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
        background: #141b58 !important;
    }

    .data table td,
    .data table th {
        padding: 10px;
    }
</style>


<div class="common_spacing uniq_features gray_bg">
    <div class="why-blockchain-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title text-center">
                        <h3 class="font-wei mb20">Why Opt for Us to Launch Your Cryptocurrency Exchange?</h3>
                        <hr>
                    </div>
                    <p>Our commitment to excellence drives us to deliver unparalleled quality, backed by extensive experience in deploying a multitude of applications from our White Label crypto exchange platform. By focusing on cutting-edge visual and security enhancements, combined with top-tier API integrations, we ensure your exchange is equipped with everything necessary for peak performance. <br><br>
                        From initial consultation through to ongoing technical support, we are dedicated to offering industry-leading services that support your project's success in the dynamic crypto market. With our state-of-the-art White Label software, you can swiftly launch your new crypto venture in just a few days!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <ul>
                        <li>Superior Quality</li>
                        <li>Timely Execution</li>
                        <li>Around-the-Clock Technical Support</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                    <ul>
                        <li>Flawless Code</li>
                        <li>Tailored Solutions</li>
                        <li>Competitive Rates</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('static.tech-stack-four-tab-section', [
    'title' => 'Cutting-Edge Technology Behind Our White Label Crypto Exchange Platform', 
    'desc' => "Our advanced technology stack is designed to elevate the performance of your business through our White Label crypto exchange platform. We continually refine and expand our technological capabilities, ensuring adaptability to your specific needs. Reach out to us with your technology preferences and start crafting your exchange today!",
])

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

{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What is a White Label Crypto Exchange Platform?',
            'ans' => "A White label crypto exchange platform is a ready-made solution that you can brand and customize to launch your own cryptocurrency exchange. It provides a framework you can tailor to fit your business needs without building from scratch."
        ],
        [
            'ques' => 'How Much Does It Cost to Deploy Your White Label Crypto Exchange Solution?',
            'ans' => "The cost of deploying our White label crypto exchange solution varies based on your customization needs and features. For a precise quote, please contact us with your specific requirements."
        ],
        [
            'ques' => 'How Long Does It Take to Build a Cryptocurrency & Digital Asset Exchange Solution?',
            'ans' => "The development time for a cryptocurrency and digital asset exchange solution depends on the complexity and customizations required. Generally, it can be ready within a few weeks to a few months."
        ],
        [
            'ques' => 'Can I Add Features of My Choice? Do You Handle Customizations?',
            'ans' => "Yes, you can request specific features and customizations. We handle all modifications to ensure the platform meets your exact requirements and business goals."
        ],
        [
            'ques' => 'How Do You Ensure the Security of Your Exchange Software?',
            'ans' => "We incorporate advanced security measures such as encryption, multi-factor authentication, and regular security audits to protect your exchange software from potential threats."
        ],
        [
            'ques' => 'What Currencies Does Your Trading Platform Support?',
            'ans' => "Our trading platform supports a wide range of cryptocurrencies and digital assets, including major coins, tokens, and stablecoins. Specific support can be tailored based on your needs."
        ],
        [
            'ques' => 'Why is KYC Required by White Label Cryptocurrency Exchange Software?',
            'ans' => "KYC (Know Your Customer) is required to verify the identity of users and comply with legal regulations. It helps prevent fraud and ensures a secure trading environment."
        ],
        [
            'ques' => 'Can a White Label Crypto Exchange Be Integrated with Payment Gateways?',
            'ans' => "Yes, our White label crypto exchange solutions can be integrated with various payment gateways to facilitate seamless deposits and withdrawals for users."
        ],
        [
            'ques' => 'How Will the Platform Perform If More Users Join?',
            'ans' => "Our platform is designed to scale efficiently, handling increasing user loads without compromising performance. We ensure robust infrastructure to manage high traffic and transaction volumes."
        ],
        [
            'ques' => 'What is the Infrastructure Setup Needed for the Crypto Exchange?',
            'ans' => "The infrastructure setup typically includes secure servers, databases, and network systems. We provide guidance and support to establish a reliable and scalable environment for your exchange."
        ],
        [
            'ques' => 'How User-Friendly is the Crypto Exchange Platform?',
            'ans' => "The platform is designed with user experience in mind, offering intuitive interfaces and easy navigation for both novice and experienced traders. We focus on creating a seamless and engaging trading experience."
        ],
    ],
])

</div>
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
                    data-cf-modified-e7386f95dcb591c3778d71a8-="">
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/white-label-crypto-exchange">
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