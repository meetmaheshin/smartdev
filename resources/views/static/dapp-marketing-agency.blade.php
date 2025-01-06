@extends('layouts.static')
    @section('title', 'Dapp Marketing Agency')
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
        background: #e27a1f !important;
        color: #fff;
        cursor: pointer;
        margin: 1px;
        text-transform: capitalize !important;
        /*    box-shadow: 0px 3px 0px 2px #63acff;*/
    }

    .timeline-center .tm-icon {
        font-size: 30px;
        color: #130052;
    }

    .gray-bg,
    .gray_bg {
        background: #f0ebff;
    }

    .faq-content #accordion a[data-toggle=collapse]::before {
        background: #130052;
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
        background: linear-gradient(140deg, #13014f, #2d157c);
        padding-top: 145px;
        padding-bottom: 85px;
        height: auto;
        background-position: center;
        position: relative;
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
        left: 0;
        width: 350px;
        height: 350px;
        border-radius: 50%;
        background: #7c9fff;
        background: -o-linear-gradient(190deg, #7c9fff 0%, rgba(115, 67, 210, 0) 100%);
        background: linear-gradient(260deg, #7c9fff 0%, rgba(115, 67, 210, 0) 100%);
        -webkit-filter: blur(150px);
        filter: blur(100px);
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
    }

    .banner_content .contentall {
        margin-top: 100px;
    }

    .contentall h1 {
        color: #fff !important;
    }

    .contentall p {
        color: #fff !important;
    }

    .contentall a,
    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        background: #e27a1f !important;
    }

    .contentall a:hover,
    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn:hover {
        background: #ba6b27 !important;
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
        font-size: 18px;
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
        color: #130052;
        border: 2px solid #130052;
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
        background: linear-gradient(#130052, #130052);
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
        margin-top: 70px;
        margin-bottom: 60px;*/
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
        box-shadow: 2px 4px #130052;
        border: 3px solid #130052;
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
        background: url(images/lab/dot-shape.webp) #130052;
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
        background-color: #130052f5;
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
        background: #130052;
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
        color: #130052;
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
        color: #130052;
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
        /*background: #f0ebff;*/
    }

    section {
        padding-top: 50px;
        padding-bottom: 50px;
        overflow: hidden;
        position: relative;
    }



    .product-features {
        /*background: linear-gradient(rgb(37 38 37 / 48%), rgb(10 10 10 / 57%)), transparent url(images/dapp-marketing-agency/iconsbg-image.webp) top left/cover no-repeat scroll;*/
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
        border-top: 3px solid #130052;
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
        /*color: #130052;*/
    }

    .bgg {
        background-image: linear-gradient(179deg, #130052 0%, #19aec5 74%);
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
        box-shadow: 0px 14px 80px #1300526b;
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
        background: #130052;
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
        margin-bottom: 5px;
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
        color: #130052;
    }

    .flip-box:hover {
        background: #47b775;
        color: #fff;
    }

    .flip-box:hover h3 {
        color: #fff;
    }

    .flip-box:hover .flip-icon-outer {
        background: #f0ebff;
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
        background: #130052;
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
        background: #130052;
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
        color: #130052;
        font-weight: 700;
    }

    a.internal_link:hover {
        color: #130052 !important;
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
        /*    background: #130052 !important;*/
        background: #0788ff !important;

    }

    .nec-btn:hover {
        transform: scale(1, 1) !important;
        color: #fff !important;
        background: #116bbe !important;
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
        /*  width: 100%;
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
        border-bottom: 34px solid #246df8;
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
        background: #246df8;
    }


    .featured-icon-box.style3 .featured-title h3 {
        font-size: 20px;
        line-height: normal;
        margin: 15px 0 10px;
    }

    .featured-icon-box.style3:before {
        background-color: #130052;
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
        border-left: 2px solid #130052;
        transition: .1s all ease;
    }

    .featured-icon-box.style3 {
        position: relative;
        margin: 15px 0;
        background-color: #fff;
    }

    .awesome-features-wrapper {
        /*border: 1px solid #cdcdcd;*/
        background: #f0ebff;
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
        background: #130052;
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
        background: #130052;
        height: 20px;
        width: 3px;
        content: "";
        position: absolute;
        left: -2px;
        top: 65px;
    }
    
    .awesome-features-wrapper::after {
        background: #130052;
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
        color: #130052;
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
        color: #130052;
    }

    .step-points .fa {
        font-size: 30px;
        color: #fff;
    }

    .step-points li {
        display: grid;
        grid-template-columns: 60px auto;
        margin-bottom: 20px;
        align-items: center;
        border-radius: 7px;
        background: #f0ebff
    }

    .step-points li span {
        width: 60px;
        height: 60px;
        background: #130052;
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
        font-size: 17px
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

    .feature-box-3 .icon {
        background: #e8eefe;
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
        padding: 15px 115px 15px 40px;
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
        background: linear-gradient(90.99deg, #130052, #130052, #130052);
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
        background: #130052;
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
        background: linear-gradient(to right bottom, #130052 49%, transparent 50%);
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
    }

    .pro_line .description {
        color: #333;
        letter-spacing: 1px;
        margin: 0;
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

    .theme-color-bg {
        background: #130052 !important;
    }

    /******************* Timeline *****************/
    .time-line {
        overflow: hidden;
        position: relative
    }

    .time-line:before {
        content: "";
        width: 5px;
        height: 87%;
        background: #d2cae9;
        position: absolute;
        top: 70px;
        left: 50%;
        transform: translateX(-50%)
    }

    .time-line .timeline-content:before,
    .time-line .timeline:before {
        top: 50%;
        transform: translateY(-50%);
        content: ""
    }

    .time-line .timeline {
        width: 50%;
        padding-left: 100px;
        float: right;
        position: relative
    }

    .time-line .timeline:before {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #fff;
        border: 5px solid #d2cae9;
        position: absolute;
        left: -10px
    }

    .time-line .timeline-content {
        display: block;
        padding-left: 150px;
        position: relative
    }

    .time-line .timeline-content:before {
        width: 90px;
        height: 10px;
        border-top: 7px dotted #d2cae9;
        position: absolute;
        left: -92px
    }

    .time-line .year {
        display: inline-block;
        width: 100px;
        height: 100px;
        line-height: 80px;
        border: 10px solid #130052;
        font-size: 40px;
        color: #130052;
        text-align: center;
        box-shadow: inset 0 0 10px rgba(0, 0, 0, .4);
        position: absolute;
        top: 20%;
        left: 0;
    }

    .time-line .year:before {
        content: "";
        border-left: 20px solid #16074b;
        border-top: 40px solid transparent;
        border-bottom: 40px solid transparent;
        position: absolute;
        bottom: 0;
        right: -29px;
    }

    .time-line .inner-content {
        padding: 20px 0
    }

    .time-line .title {
        font-size: 20px;
        font-weight: 600;
        color: #130052;
    }

    .time-line .description {
        margin: 0 0 5px
    }

    .time-line .timeline:nth-child(2n) {
        padding: 0 100px 0 0
    }

    .time-line .timeline:nth-child(2n) .timeline-content:before,
    .time-line .timeline:nth-child(2n) .year,
    .time-line .timeline:nth-child(2n):before {
        left: auto;
        right: -10px
    }

    .time-line .timeline:nth-child(2n) .timeline-content {
        padding: 0 150px 0 0
    }

    .time-line .timeline:nth-child(2n) .timeline-content:before {
        right: -92px
    }

    .time-line .timeline:nth-child(2n) .year {
        right: 0
    }

    .time-line .timeline:nth-child(2n) .year:before {
        right: auto;
        left: -29px;
        border-left: none;
        border-right: 20px solid #16074b;
    }

    .time-line .timeline:nth-child(2) {
        margin-top: 110px
    }

    .time-line .timeline:nth-child(odd) {
        margin: -110px 0 0
    }

    .time-line .timeline:nth-child(even) {
        margin-bottom: 80px
    }

    .time-line .timeline:first-child,
    .time-line .timeline:last-child:nth-child(even) {
        margin: 0
    }

    @media only screen and (max-width:1200px) {
        .time-line .year {
            top: 50%;
            transform: translateY(-50%)
        }
    }

    @media only screen and (max-width:990px) {
        .time-line .timeline {
            padding-left: 75px
        }

        .time-line .timeline:nth-child(2n) {
            padding: 0 75px 0 0
        }

        .time-line .timeline-content {
            padding-left: 130px
        }

        .time-line .timeline:nth-child(2n) .timeline-content {
            padding: 0 130px 0 0
        }

        .time-line .timeline-content:before {
            width: 68px;
            left: -68px
        }

        .time-line .timeline:nth-child(2n) .timeline-content:before {
            right: -68px
        }
    }

    @media only screen and (max-width:767px) {
        .time-line {
            overflow: visible
        }

        .time-line .year {
            width: 80px;
            height: 80px;
            line-height: 60px;
        }

        .time-line:before {
            height: 100%;
            top: 0;
            left: 0;
            transform: translateX(0)
        }

        .time-line .timeline:before,
        .time-line .timeline:nth-child(2n):before {
            top: 35px;
            left: -9px;
            transform: translateX(0)
        }

        .time-line .timeline,
        .time-line .timeline:nth-child(even),
        .time-line .timeline:nth-child(odd) {
            width: 100%;
            float: none;
            text-align: left;
            padding: 0;
            margin: 0 0 10px
        }

        .time-line .timeline-content,
        .time-line .timeline:nth-child(2n) .timeline-content {
            padding: 0
        }

        .time-line .timeline-content:before,
        .time-line .timeline:nth-child(2n) .timeline-content:before {
            display: none
        }

        .time-line .timeline:nth-child(2n) .year,
        .time-line .year {
            position: relative;
            transform: translateY(0);
            left: 25px;
        }

        .time-line .timeline:nth-child(2n) .year:before,
        .time-line .year:before {
            border: none;
            border-right: 20px solid #130052;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            top: 40%;
            left: -23px;
            bottom: auto;
            right: auto;
            transform: rotate(0)
        }

        .time-line .timeline:nth-child(2n) .year:before {
            border-right-color: #130052
        }

        .time-line .timeline:nth-child(3n) .year:before {
            border-right-color: #130052
        }

        .time-line .timeline:nth-child(4n) .year:before {
            border-right-color: #130052
        }

        .time-line .inner-content {
            padding: 10px
        }
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
        background: #130052;
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
        color: #130052;
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
        border: 4px solid #130052;
        float: left;
        margin-right: 20px;
        position: relative;
        padding: 13px;
        border-radius: 50%;
        margin-bottom: 15px;
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
        background: #f0ebff;
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
        background: #130052;
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
        border: 1px solid #fff;
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
        background: #130052;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background: #4f0b13;
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
        background: #f0ebff;
        padding: 30px 10px;
        width: 25%;
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
        color: #130052;
    }

    .Package_list img {
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
        background: #f0ebff;
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
        background: #f0ebff;
        border-radius: 7px;
        margin: 1.5%;
        padding: 15px;
        width: 23%;
        position: relative
    }

    .workflow li img {
        width: 65px;
        margin-bottom: 15px;
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
        border-left: 15px solid #130052
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

    @media (max-width:320px) {
        .workflow li {
            width: 100%;
        }
    }

    /*-- Technology --*/
    .technologies {
        background: #130052;
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
        background: #130052;
    }

    .technologies ul li img {
        height: 50px;
    }

    .technologies ul li p {
        margin-bottom: 0 !important;
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
    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .teck .category-grid-style-01 .category-item {
            width: 46% !important;
        }
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

    @media (max-width:320px) {
        .stats {
            font-size: 16px !important;
        }
    }

    @media (max-width:767px) {
        .stats {
            min-height: 140px;
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
                                            <h1 itemprop="name">Elevate Your dApp to New Heights with Our Expert Marketing Solutions</h1>
                                        </div>
                                        <p itemprop="text">Transform your dApp's visibility and success with our top-tier marketing agency. Propel your project to sustained success with our cutting-edge dApp promotion strategies.</p>

                                        <div class="txt">

                                            <!-- <a rel="nofollow" href="#demo" class="nec-btn" id="cyz" style="border-radius: 30px !important;">View Demo</a> -->
                                            <!-- <a href="https://www.blockchainappfactory.com/create-your-own-token-and-coin" rel="nofollow" class="nec-btn" id="cyz" style="border-radius: 30px !important; text-transform: capitalize !important; margin-left: 0;">Create your own token</a> -->
                                            <a rel="nofollow" href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important;">Connect with Our Specialists Today</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                            <img class="magic" src="{{ asset('images/dapp-marketing-agency/banner-img.webp') }}" alt=" " title=" ">
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
        background: #130052;
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
        background: #130052;
    }

    #counter-stats .stats:nth-child(2) {
        background: #16074b;
    }

    #counter-stats .stats:nth-child(3) {
        background: #130052;
    }

    #counter-stats .stats:nth-child(4) {
        background: #16074b;
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
            <h2 class="title-th sec_tit underline">Supercharge Your dApp with Our Leading Marketing Expertise</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p class="text-center">In the fast-evolving world of decentralized applications (dApps), standout marketing is essential for boosting your project's visibility and maximizing returns. Our marketing strategy transcends conventional methods, harnessing the unique power of blockchain and creating dynamic, engaged communities around your dApp. We deploy targeted, strategic promotion to build a loyal user base and ensure your project thrives long-term, advancing the adoption of dApps in the Web3 ecosystem.</p>
            </div>
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
        border-left: 5px solid #130052
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


{{-- include section --}}
@include('static.left-aligned-image-card-section', [
    'title' => 'Elevate Your Project’s Visibility with Our Cutting-Edge dApp Marketing Solutions', 
    'desc' => "Our expert team is committed to propelling your dApp into the spotlight with unmatched efficiency, reaching a broader audience and driving impactful results.",
    'cards' => [
        [
            'title' => 'dApp Listing',
            'desc' => "We strategically list your dApp on prominent platforms like DappRadar, boosting its visibility and attracting a dedicated user base while keeping them engaged with ongoing updates.",
            'image' => 'dapp-marketing-agency/icons/dapp.webp'
        ],
        [
            'title' => 'Influencer Marketing',
            'desc' => "Partner with top industry influencers through our network to build credibility and amplify your reach, creating substantial buzz and enhancing the impact of your dApp.",
            'image' => 'dapp-marketing-agency/icons/influencer.png'
        ],
        [
            'title' => 'Community Building',
            'desc' => "We cultivate and manage vibrant, active communities around your dApp, fostering engagement and discussions that drive sustained growth and user loyalty.",
            'image' => 'dapp-marketing-agency/icons/community-marketing.png'
        ],
        [
            'title' => "SEO Strategy",
            'desc' => "Our meticulously crafted SEO strategies optimize your web presence with targeted keywords, improving search rankings and drawing more users to your dApp.",
            'image' => 'dapp-marketing-agency/icons/seo.png'
        ],
        [
            'title' => "Press Releases (PR)",
            'desc' => "We leverage influential contacts to generate compelling press coverage, accelerating the growth of your dApp's community and expanding its user base.",
            'image' => 'dapp-marketing-agency/icons/press-release.webp'
        ],
        [
            'title' => "Paid Advertising",
            'desc' => "Our precision-targeted paid advertising campaigns navigate crypto and social media landscapes, ensuring compliance and effectiveness while maximizing reach.",
            'image' => 'dapp-marketing-agency/icons/advertising-assistance.png'
        ],
        [
            'title' => "Content Creation",
            'desc' => "We produce high-impact content tailored to your strategy, educating users on your dApp’s features and benefits across relevant channels.",
            'image' => 'dapp-marketing-agency/icons/content.png'
        ],
        [
            'title' => "Performance Analytics",
            'desc' => "We monitor key performance metrics, such as user acquisition and community growth, providing actionable insights to refine your strategy and enhance results.",
            'image' => 'dapp-marketing-agency/icons/analytics.png'
        ],
    ],
])


<div class="common_spacing">
    <div class="container">
        <div class=" ">
            <h3 class="sec_tit underline text-center">Transformative Benefits of Our dApp Marketing Solutions</h3>
            <p class="text-center">Harness the power of our advanced dApp marketing solutions to elevate your decentralized application, unlocking substantial benefits and driving impactful results.</p>
        </div>
        <div class="row mt20">
            <div class="container container-center">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/dapp-marketing-agency/icons/target.webp') }}">
                        </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Precision Targeting</strong>Our expert team meticulously targets audiences deeply interested in blockchain technology and the unique features of your dApp, connecting you with users poised to engage with and adopt your project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/dapp-marketing-agency/icons/competitive.svg') }}">
                        </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Strategic Advantage</strong>In a saturated dApp market, we ensure your application shines by highlighting its distinctive attributes, helping you attract users who see it as the perfect fit for their needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/dapp-marketing-agency/icons/community-marketing.png') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Community Cultivation</strong>We employ effective strategies to build and nurture a robust user community, fostering loyalty and engagement while driving organic growth through positive recommendations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/dapp-marketing-agency/icons/feedback.svg') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Insightful Feedback</strong>Our campaigns capture valuable feedback on your dApp’s performance and user experience, enabling continuous enhancements that support long-term viability and success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/dapp-marketing-agency/icons/networking.webp') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Exponential Growth</strong>We drive significant user base expansion through our marketing initiatives, leveraging network effects to enhance your dApp’s appeal and attract even more users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/dapp-marketing-agency/icons/visibility.webp') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Enhanced Visibility</strong>We amplify your dApp’s visibility among potential investors and users, paving the way for further development, increased funding, and strategic partnerships that ensure sustained success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="common_spacing gray_bg">
    <div class="container">

        <div class="section-title center text-center">
            <h3 class="sec_tit underline text-center">How We Craft Your Decentralized Application Marketing Campaign</h3>
            <p>Our seasoned experts execute a meticulously designed process to elevate your dApp, reaching diverse audiences and maximizing impact.
            </p>
        </div>

        <div class="time-line">
            <div class="timeline">
                <div class="timeline-content">
                    <span class="year"><img class="lazy" src="{{ asset('images/dapp-marketing-agency/icons/plan.png') }}" style="width: 60px; margin-top: 10px"></span>
                    <div class="inner-content">
                        <h4 class="title">Strategic Planning</h4>
                        <p class="description">Our team dives deep into your dApp’s features, audience, and competitive landscape. We set precise, actionable goals centered on user acquisition and community expansion.</p>
                    </div>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-content">
                    <span class="year"><img class="lazy"
                            src="{{ asset('images/dapp-marketing-agency/icons/strategy.webp') }}" style="width: 60px; margin-top: 10px"></span>
                    <div class="inner-content">
                        <h4 class="title">Strategic Execution</h4>
                        <p class="description">We deploy a strategic mix of content marketing and influencer collaborations to drive user education and foster community engagement across social media, forums, and AMAs.</p>
                    </div>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-content">
                    <span class="year"><img class="lazy"
                            src="{{ asset('images/dapp-marketing-agency/icons/campaign.png') }}" style="width: 60px; margin-top: 10px"></span>
                    <div class="inner-content">
                        <h4 class="title">Campaign Launch</h4>
                        <p class="description">We generate and distribute premium content that aligns with your strategy, manage online communities to enhance interaction and leverage key metrics to track and boost visibility.</p>
                    </div>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-content">
                    <span class="year"><img class="lazy"
                            src="{{ asset('images/dapp-marketing-agency/icons/optimization.png') }}" style="width: 60px; margin-top: 10px"></span>
                    <div class="inner-content">
                        <h4 class="title">Continuous Optimization</h4>
                        <p class="description">Our experts scrutinize campaign data to pinpoint successes and areas for improvement. We provide detailed reports and continually refine strategies to ensure peak performance.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center cta_min mt20">
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                href="#" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn">
                <span>Connect with Our Experts</span></a>
        </div>
    </div>
</section>

<div class="technologies" style="background: #fff;">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="sec_tit underline text-center">Essential Checklist for a Winning dApp Marketing Campaign</h3>
            <p class="text-center " style="font-size: 16px;">We adhere to a rigorous checklist to ensure the success of your dApp marketing campaign, addressing all critical aspects to achieve your project goals.</p>
            <ul>
                <li>
                    <img class="lazy" src="{{ asset('images/dapp-marketing-agency/icons/dapp.webp') }}">
                    <p class="white">Precise dApp Specifications</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/dapp-marketing-agency/icons/analytics.png') }}">
                    <p class="white">In-depth Market Analysis</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/dapp-marketing-agency/icons/strategy.webp') }}">
                    <p class="white">Strategic Approach</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/dapp-marketing-agency/icons/community-marketing.png') }}">
                    <p class="white">Dynamic Community Engagement</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/dapp-marketing-agency/icons/launch.webp') }}">
                    <p class="white">Effective Pre-launch Buzz</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/dapp-marketing-agency/icons/creation.png') }}">
                    <p class="white">Compelling Content Creation</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/dapp-marketing-agency/icons/high-performance.png') }}">
                    <p class="white">Robust Performance Tracking</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/dapp-marketing-agency/icons/optimization.png') }}">
                    <p class="white">Strategic Campaign Refinement</p>
                </li>

            </ul>
        </div>
    </div>
</div>


<div class="common_spacing uniq_features">
    <div class="why-blockchain-sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 text-center">
                    <img class="lazy" src="{{ asset('images/dapp-marketing-agency/img-1.png') }}" alt=" " title=" ">
                </div>

                <div class="col-lg-6">
                    <div class="section-title text-left mt30">
                        <h3 class="mb20">Transformative KOL Marketing from Our dApp Promotion Experts</h3>
                        <hr>
                    </div>
                    <p class=" ">KOLs, with their industry authority and trendsetting influence, play a pivotal role in endorsing and elevating dApp projects. We connect with leading experts and thought leaders who shape public opinion through their authoritative insights.
                    <br><br>
                    Our KOL marketing strategy goes beyond conventional influencer tactics, offering unparalleled credibility and dynamic viewpoints. By harnessing our expert KOL partnerships, your dApp gains enhanced authenticity and prominence, driving impactful engagement and reshaping industry perceptions. Our acclaimed marketing solutions leverage top KOLs to amplify your project's reach and influence.
                    </p>

                    <div class="clearfix"></div>
                    <div class="text-left cta_mine txt">
                        {{-- <a rel="nofollow"
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                            target="_blank" href=""
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>Schedule a Meeting </span></a> --}}
                        <a rel="nofollow" href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Consult with Our Experts</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="common_spacing ">
    <div class="container">
        <div class="row">
            <div class="section-title text-center" style="width: 100%">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20">Strategic Platforms We Leverage for Superior dApp Marketing</h2>
                </div>
                <p>We strategically deploy your dApp across high-impact platforms to maximize visibility and engage a broad spectrum of audiences effectively.</p>
            </div>
        </div>
        <div class="row mt40">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <ul class="step-points">
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/twitter.webp') }}" style="filter: invert(1);"
                                alt></span>
                        <div class="step-points-content">
                            <h4>X</h4>
                        </div>
                    </li>
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/reddit.webp') }}" alt></span>
                        <div class="step-points-content">
                            <h4>Reddit </h4>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <ul class="step-points">
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/telegram.webp') }}" alt></span>
                        <div class="step-points-content">
                            <h4>Telegram</h4>
                        </div>
                    </li>
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/discord.webp') }}" alt></span>
                        <div class="step-points-content">
                            <h4>Discord</h4>
                        </div>
                    </li>
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/youtube.webp') }}" alt></span>
                        <div class="step-points-content">
                            <h4>YouTube</h4>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <ul class="step-points">
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/instagram.webp') }}" alt></span>
                        <div class="step-points-content">
                            <h4>Instagram</h4>
                        </div>
                    </li>
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/linkedIn.svg') }}" alt></span>
                        <div class="step-points-content">
                            <h4>LinkedIn</h4>
                        </div>
                    </li>
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/facebook.webp') }}" alt></span>
                        <div class="step-points-content">
                            <h4>Facebook</h4>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <ul class="step-points">
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/coinmarketcap.webp') }}" alt></span>
                        <div class="step-points-content">
                            <h4>CoinMarketCap</h4>
                        </div>
                    </li>
                    <li> <span><img src="{{ asset('images/dapp-marketing-agency/icons/coingecko.webp') }}" alt></span>
                        <div class="step-points-content">
                            <h4>CoinGecko</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


@include('static.small-round-card-section',array(
    'title' => 'Top dApps We Champion with Our Expert Marketing Services', 
    'desc' => '',
    'card_title_1' => 'Launchpads',
    'card_desc_1' => "We drive visibility and investor interest for launchpads, leveraging strategic marketing to highlight new dApps and blockchain innovations.",
    'card_image_1' => 'dapp-marketing-agency/icons/launchpads.webp',
    'card_title_2' => 'Exchange Platforms',
    'card_desc_2' => "Our targeted campaigns enhance the appeal of decentralized exchanges, showcasing their superior features and attracting crypto users from centralized alternatives.",
    'card_image_2' => 'dapp-marketing-agency/icons/exchange.png',
    'card_title_5' => 'NFT Marketplaces',
    'card_desc_5' => "We elevate decentralized NFT marketplaces by deploying potent marketing strategies that educate users and cultivate a loyal community.",
    'card_image_5' => 'dapp-marketing-agency/icons/nft.webp',
    'card_title_6' => 'Games',
    'card_desc_6' => "Our marketing ignites excitement around play-to-earn and blockchain-based games, engaging gamers and crypto enthusiasts with fresh, immersive experiences.",
    'card_image_6' => 'dapp-marketing-agency/icons/game.png',
    'card_title_9' => 'DeFi ',
    'card_desc_9' => "We specialize in marketing DeFi applications, promoting their benefits and drawing in lenders, borrowers, and traders while fostering platform credibility.",
    'card_image_9' => 'dapp-marketing-agency/icons/defi.webp',
))

<style type="text/css">
    :root {
        --main-color: #d852a7;
    }

    .pricingTable {
        width: 100%;
        color: #fff;
        background: url(images/crypto-kol-influencer-marketing/bg.jpg) no-repeat top center #732fe4;
        background-size: cover;
        font-family: 'Open Sans', sans-serif;
        text-align: center;
        padding: 30px 20px;
        margin: 15px 0px;
        border-radius: 30px;
    }

    .pricingTable .pricingTable-header {
        margin: 0 20px 30px;
    }

    .pricingTable .title {
        color: #fff;
        font-size: 22px;
        font-weight: 600;
        text-transform: capitalize;
        margin: 0;
    }

    .pricingTable .price-value {
        color: #fff;
        background: #f74780;
        font-size: 24px;
        font-weight: 700;
        margin: 0 20px 20px -35px;
        border-radius: 0 30px 30px 0;
        box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
        position: relative;
        padding: 20px;
    }

    .pricingTable .price-value span {
        display: block;
        font-size: 18px;
        margin-top: 10px;
    }

    .pricingTable .price-value:before {
        content: "";
        background: linear-gradient(to top right, transparent 49%, #e12d67 50%);
        width: 15px;
        height: 15px;
        position: absolute;
        bottom: -15px;
        left: 0;
    }

    .pricingTable .pricing-content {
        padding: 0;
        margin: 0 0 30px;
        list-style: none;
        text-align: left;
    }

    .pricingTable .pricing-content li {
        color: #fff;
        font-size: 15px;
        line-height: 25px;
        text-transform: capitalize;
        margin: 0 0 15px;
    }

    .pricingTable .pricing-content li:last-child {
        margin: 0;
    }

    .pricingTable .pricingTable-signup a {
        color: var(--main-color);
        background: #FCD2D1;
        font-size: 25px;
        font-weight: 900;
        text-transform: uppercase;
        padding: 5px 15px;
        display: inline-block;
        transition: all 0.3s ease-in-out;
    }

    .pricingTable .pricingTable-signup a:hover {
        text-shadow: 2px 2px 1px rgba(0, 0, 0, 0.4);
    }

    .pricingTable.purple {
        --main-color: #5a23b7;
    }

    .pricingTable.blue {
        --main-color: #1c9cea;
    }

    @media only screen and (max-width: 990px) {
        .pricingTable {
            margin: 0 0 40px;
        }
    }

    @media only screen and (max-width: 768px) {
        .pricingTable {
            align-items: center;
            text-align: center;
        }
    }
</style>

@include('static.six-card-section', [
    'title' => 'Why We Are the Premier Choice for Decentralized Application Marketing', 
    'desc' => "",
    'cards' => [
        [
            'title' => 'Web3 Mastery',
            'desc' => "Our in-depth expertise in blockchain, DeFi, NFTs, and dApps enables us to design powerful marketing strategies that drive substantial user growth.",
            'image' => 'dapp-marketing-agency/icons/expertise.png'
        ],
        [
            'title' => 'Proven Success',
            'desc' => "Our track record speaks volumes, with a history of executing impactful dApp campaigns that excel in user acquisition, community expansion, and brand prominence.",
            'image' => "dapp-marketing-agency/icons/tracking.webp"
        ],
        [
            'title' => 'Community Expertise',
            'desc' => "We excel in cultivating vibrant online communities, engaging users, and fueling dApp growth through expert community management.",
            'image' => 'dapp-marketing-agency/icons/community.png'
        ],
        [
            'title' => 'Data-Driven Excellence',
            'desc' => "We leverage real-time analytics to continuously enhance marketing performance, ensuring optimal results and maximizing your return on investment (ROI).",
            'image' => 'dapp-marketing-agency/icons/data-encrypt.png'
        ],
        [
            'title' => "Strategic Connections",
            'desc' => "Our extensive network in the Web3 ecosystem, including key influencers, developers, and media, amplifies your dApp's visibility and reach.",
            'image' => 'dapp-marketing-agency/icons/connections.svg'
        ],
        [
            'title' => "Sustainable Growth",
            'desc' => "We focus on long-term success, prioritizing sustained user engagement and community building within the Web3 space over mere short-term gains.",
            'image' => 'dapp-marketing-agency/icons/growth.webp'
        ],
    ],
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
            'ques' => 'What is dApp Marketing?',
            'ans' => "dApp marketing involves promoting decentralized applications to attract users and build a community. It focuses on strategies unique to the blockchain space, such as leveraging Web3 features and engaging with crypto enthusiasts."
        ],
        [
            'ques' => 'How Does dApp Marketing Differ from Traditional App Marketing?',
            'ans' => "Unlike traditional app marketing, dApp marketing targets a niche audience within the blockchain community. It emphasizes decentralized technologies and unique incentives, whereas traditional marketing often relies on conventional advertising channels."
        ],
        [
            'ques' => 'Why is Community Building Crucial for dApp Marketing?',
            'ans' => "Building a strong community is vital for dApp success as it fosters user engagement and loyalty. A dedicated community not only supports the dApp but also helps spread awareness and drive organic growth through word-of-mouth."
        ],
        [
            'ques' => 'What Are Some Effective dApp Marketing Strategies?',
            'ans' => "Effective strategies include leveraging influencer partnerships, creating compelling content, engaging in community forums, and utilizing targeted social media campaigns. Strategies should align with the specific goals and audience of the dApp."
        ],
        [
            'ques' => 'Which Platforms Are Best for dApp Marketing?',
            'ans' => "Key platforms for dApp marketing include Telegram, Reddit, Discord, and specialized blockchain forums. These platforms offer direct access to crypto enthusiasts and allow for effective engagement and promotion."
        ],
        [
            'ques' => 'How Can I Make My dApp Marketing Stand Out?',
            'ans' => "To stand out, focus on unique features of your dApp, engage with influential voices in the industry, and create high-quality, relevant content. Authenticity and innovation are key to capturing attention in a crowded market."
        ],
        [
            'ques' => 'How Can I Measure the Success of My dApp Marketing Campaign?',
            'ans' => "The develoMeasure success through key metrics such as user acquisition rates, engagement levels, and community growth. Tracking these metrics will provide insights into the effectiveness of your marketing efforts and areas for improvement."
        ],
        [
            'ques' => 'Is a Large Budget Necessary for dApp Marketing?',
            'ans' => "A large budget is not always necessary. Effective dApp marketing can be achieved with a strategic approach, focusing on cost-efficient methods like community engagement and targeted content, which can deliver significant results."
        ],
        [
            'ques' => 'What Does the Future Hold for dApp Marketing?',
            'ans' => "The future of dApp marketing looks promising with growing interest in decentralized technologies. Innovations in blockchain and Web3 will continue to shape marketing strategies, emphasizing community-driven growth and advanced analytics."
        ],
        [
            'ques' => 'How Can SEO Be Applied to dApp Marketing?',
            'ans' => "SEO can enhance dApp visibility by optimizing content with relevant keywords, improving search rankings, and driving organic traffic. Effective SEO strategies ensure your dApp is easily discoverable by potential users."
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