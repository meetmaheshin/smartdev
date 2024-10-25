@extends('layouts.static')
    @section('title', 'Tokenization Platform Development')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
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

    .timeline-center .tm-icon {
        font-size: 30px;
        color: #47b475;
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
        /*background-image: url(images/chatgpt-applications-development/bg.webp);
        background-size: cover;*/
        background: #140d4c;
        padding-top: 120px;
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
        margin-top: 130px;
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

        .banner {
            height: 650px !important;
        }
    }

    @media (min-width: 992px) {
        .banner {
            height: 650px !important;
        }
    }

    @media (max-width: 320px) {
        .banner {
            height: 800px !important;
        }
    }

    @media (max-width: 768px) {

        .banner {
            height: 650px !important;
        }

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
        color: #fff;
    }

    .package_includes {
        background: url(../images/products/package_banner.webp);
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
        background: linear-gradient(rgb(37 38 37 / 48%), rgb(10 10 10 / 57%)), transparent url(images/nftm/bg-image.webp) top left/cover no-repeat scroll;
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
        top: 3px;
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
        margin-bottom: 20px;
        display: flex;
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

        .travel-app-items .icons {
            margin-bottom: 0px;
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
            width: 24%;
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
        width: 21%;
        text-align: center;
        font-size: 16px;
        padding: 15px;
        margin: -1px;
        border: 1px solid #fff;
        background: rgba(255, 255, 255, 0.2);
    }

    .technologies ul li img {
        height: 40px;
        /* filter: brightness(0) invert(1);*/
    }

    .technologies ul li p {
        margin-bottom: 0 !important;
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .technologies ul li {
            width: 49%;
        }

        .technologies ul li img {
            width: 60px;
        }

        .technologies ul li {
            margin: 0px;
        }
    }

    .simple-slide {
        padding: 60px 0 30px 0;
    }

    .simple-slide .btn {
        border-radius: 2px;
        padding: 8px 12px;
        color: #D18B49;
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
</style>


<div class="header-shadow">
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
                        class="btn" data-cf-modified-d42f518cdde025a254df1416->Submit</button>
                </form>
                <div class="social">

                    <a rel="nofollow" aria-label="calendly" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calender" aria-hidden="true"
                            title="calendly"></i> Schedule A Meeting &nbsp;</a>
                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#2d44434b426d4f41424e464e454c44434c5d5d4b4c4e59425f54034e4240"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="d42f518cdde025a254df1416-text/javascript">
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
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 text-left">
                            <div class="contentall">
                                <h1>Next-Gen Tokenization Platform Innovators</h1>
                                <p>Leverage the elite services of our tokenization platform development experts to unlock transformative applications for asset tokenization. Propel the traditional economy into the era of full digitalization and decentralization now!</p>
                                <div class="text-left">

                                    <a href="{{ url('consultation') }}" rel="nofollow"
                                        style="border-radius: 30px !important; text-transform:none !important;">Connect with Our Visionaries</a>
                                    {{-- <a href="#"
                                        class="launch nectar-button medium regular accent-color regular-button nec-btn"
                                        id="cyz" style="border-radius: 30px !important;">Explore Our Demo</a>
                                    <a href="#"
                                        style="border-radius: 30px !important; text-transform:none !important;"
                                        class=" launch nectar-button medium regular accent-color regular-button nec-btn">Discover Tokenizer Pricing</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-5 col-sm-12 hidden-sm hidden-xs" style="padding-top:60px;">
                            <img class="lazy" src="{{ asset('images/tokenization-platform-development/banner-img1.svg') }}" style="width: 410px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="common_spacing">
            <div class="container">
                <div class="col-lg-12">
                    <div class="section-title text-center underline">
                        <div class="sec_tit"><br>
                            <h2>Your Premier Destination for Tokenization Platform Development</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">As blockchain technology drives groundbreaking innovations, tokenization stands out as a key advancement. Businesses are increasingly adopting asset tokenization to enhance their market appeal and stay competitive. With optimistic forecasts ahead, our services offer you a strategic edge.<br><br>
                        Harness our tokenization platform development expertise to craft seamless applications that cater to both retail and institutional clients. Step into the future of asset tokenization with a platform that combines ease of use, cutting-edge technology, and robust security.
                    </p>
                    <div class="contentall" align="center" style="padding-top: 0;">
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
                            <span>Schedule a Consultation</span>
                        </a> --}}
                        <a href="{{ url('consultation') }}" rel="nofollow"
                            style="border-radius: 30px !important; text-transform:none !important;">Connect with Our Experts
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <h3 class="sec_tit underline text-center">Breakthrough Components of Our Asset Tokenization Ecosystem</h3>
                </div>
                <p class="text-center" style="color: #000;">Embarking on the journey to create an asset tokenization platform with us? Our expert team integrates critical components to ensure your application excels in functionality and appeals to every investor. Elevate your platform’s market impact with these essential features:</p>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/tokenization-platform-development/icons/tokenization.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Tokenization Portal </h3>
                                    </div>
                                    <div class="featured-desc">Empower users to tokenize both digital and physical assets through an exclusive portal, streamlining fractional ownership management and processing.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="featured-icon-box  text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/tokenization-platform-development/icons/investment.webp') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Investment Portal</h3>
                                    </div>
                                    <div class="featured-desc">Provide users with a comprehensive view of their portfolios, upcoming funding opportunities, share values, and market indicators, enabling informed decision-making.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="img-fuild lazy"
                                                style="width: 65px !important; height:65px !important;"
                                                src="{{ asset('images/tokenization-platform-development/icons/exchange.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Exchange Portal</h3>
                                    </div>
                                    <div class="featured-desc">Facilitate seamless exchanges of tokenized assets for various cryptocurrencies at any time, enhancing liquidity and optimizing asset utilization.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">
            .ben_wrap span img {
                width: 60px;
                position: relative;
                margin-top: 10px;
                /*filter: invert(1);*/
            }

            .bent_cnt {
                padding-left: 100px;
                padding-top: 0px;
                padding-bottom: 10px;
            }

            .ben_wrap {
                padding-right: 15px;
                position: relative;
                margin-bottom: 0px;
            }

            .ben_wrap h5 {
                font-weight: 700;
                font-size: 18px;
                margin-top: 0px;
            }

            div#why_ben {
                padding-bottom: 10px
            }

            .ben_wrap span {
                background: #140050;
                width: 80px;
                text-align: center;
                margin-right: 15px;
                position: absolute;
                height: 80px;
                left: 0;
                border-radius: 7px;
            }
        </style>
        {{-- <section id="why_ben" class="tinder-bg common_spacing">
            <div class="container container-center">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title center text-center">
                        <h2 class="sec_tit underline text-center">Types of Tokenization Platforms</h2>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                    <div class="ben_wrap">
                        <span><img class="lazy"
                                data-src="images/tokenization-platform-development/icons/ico.webp"></span>
                        <div class="bent_cnt">
                            <h5><a href="https://www.blockchainappfactory.com/ico-development"
                                    style="color: #140050; text-decoration:none;" target="_blank">ICO Token Platform</a>
                            </h5>
                            <p>Utility tokens are built as a method of fundraising for any entity. The tokens can be
                                built on various blockchain platforms such as EOS, Hyperledger, Stellar, etc. or on
                                tailor-made blockchain platform. Non-fungible utility tokens can also be built in order
                                to have a unique identity which can’t be traded for other tokens.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                    <div class="ben_wrap">
                        <span><img class="lazy"
                                data-src="images/tokenization-platform-development/icons/nft.webp"></span>
                        <div class="bent_cnt">
                            <h5><a href="https://www.blockchainappfactory.com/non-fungible-token-development"
                                    style="color: #140050; text-decoration:none;" target="_blank">Non-Fungible
                                    Tokenization Platform (NFT)</a></h5>
                            <p>NFT allows the user to tokenize their unique assets like art, games assets, virtual land,
                                accessories, and so on. The unique tokenization platform introduces various
                                opportunities to create NFT which is under evolution. The NFT enables the creators to
                                tokenize their unique creations and collectibles to NFTs and raise their asset value in
                                the NFT marketplace.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                    <div class="ben_wrap">
                        <span><img class="lazy"
                                data-src="images/tokenization-platform-development/icons/security.webp"></span>
                        <div class="bent_cnt">
                            <h5><a href="https://www.blockchainappfactory.com/security-token-offering-services"
                                    style="color: #140050; text-decoration:none;" target="_blank">Security Token
                                    Platform</a></h5>
                            <p>Security Tokens are either backed up crypto bonds/shares/assets. The tokens can be built
                                on various existing blockchain platforms, depending on the business needs; or can also
                                be built on a custom-made Blockchain platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                    <div class="ben_wrap">
                        <span><img class="lazy"
                                data-src="images/tokenization-platform-development/icons/assets.webp"></span>
                        <div class="bent_cnt">
                            <h5><a href="https://www.blockchainappfactory.com/asset-tokenization"
                                    style="color: #140050; text-decoration:none;" target="_blank">Asset Tokenization
                                    Platform</a></h5>
                            <p>The tokens are backed up assets such as real estate property, art, gold, etc. The tokens
                                can be created either by leveraging the existing blockchain platforms such as Ethereum,
                                Hyperledger, etc. or on custom-built blockchain platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- small-square-card-section --}}
        @include('static.small-square-card-section', [
            'title' => 'Pioneering Tokenization Platforms for Emerging Markets', 
            'desc' => '',
            'cards' => [
                [
                    'title' => 'ICO Token Platforms',
                    'desc' => 'ICO tokens facilitate fundraising by leveraging utility tokens, deployable on diverse blockchain networks like EOS, Hyperledger, and Stellar, or through customized blockchain solutions. Non-fungible utility tokens can be created to provide unique, non-exchangeable identities.',
                    'image' => 'tokenization-platform-development/icons/ico.png',
                ],
                [
                    'title' => 'NFT Tokenization Platforms',
                    'desc' => 'NFTs enable the creation and trading of unique digital assets, such as artwork, game items, virtual real estate, and collectibles. This innovative platform allows creators to tokenize their distinct assets, elevating their value in the evolving NFT marketplace.',
                    'image' => 'tokenization-platform-development/icons/nft.webp',
                ],
                [
                    'title' => 'Security Token Platforms',
                    'desc' => "Security tokens represent digital assets backed by financial instruments like crypto bonds, shares, or other assets. These tokens can be issued on established blockchain networks or through bespoke blockchain systems tailored to specific business needs.",
                    'image' => 'tokenization-platform-development/icons/security.png',
                ],
                [
                    'title' => 'Asset Tokenization Platforms',
                    'desc' => 'Asset-backed tokens represent tangible assets such as real estate, art, or precious metals. These tokens can be developed using existing blockchain platforms like Ethereum and Hyperledger or through custom-built blockchain solutions.',
                    'image' => 'tokenization-platform-development/icons/assets.png',
                ],
            ],
            'cta_1' => '',
            'cta_2' => ''
        ])
        <section class="common_spacing" style="background:#eee;">
            <div class="container">
                <div class="col-md-6">
                    <div class="text-left">
                        <h2 class="common_h2 section-title underline text-left m-b-50">State-of-the-Art Whitelabel Asset Tokenization Platform</h2>
                    </div>
                    <div class="text-left">
                        <p class="text-left">
                            Transform the asset tokenization landscape with our fully customizable Whitelabel platform, designed to align seamlessly with your brand objectives. Leveraging our expertise in crafting sophisticated business applications, we deliver your tokenization solution within just 7 days, ready for immediate public launch.
                        </p>
                        <p class="text-left">
                            Curious if our platform can accommodate additional features to set your venture apart? Our dedicated team is equipped to integrate bespoke functionalities, ensuring your asset tokenization application stands out. Plus, with our top-tier post-launch support, you can effortlessly scale your platform and implement ongoing security enhancements. Reach out to our specialists to explore the possibilities!
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img class="lazy" src="{{ asset('images/tokenization-platform-development/img-1.png') }}" style="width: 350px">
                </div>
            </div>
        </section>
        <style type="text/css">
            .step-points li {
                display: grid;
                grid-template-columns: 60px auto;
                margin-bottom: 20px;
                align-items: center;
                border-radius: 7px;
                background: #d5d4e3;
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
                background: #140050;
                border-radius: 7px;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .step-points-content {
                animation-name: fadeIn;
                animation-duration: 3s;
                animation-iteration-count: 1;
            }

            .step-points-content {
                margin-left: 15px;
            }

            .step-points li h4 {
                color: #000;
                font-weight: 700;
                font-size: 17px;
            }

            .step-points .fa {
                font-size: 30px;
                color: #fff;
            }
        </style>
        <section class="common_spacing ">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <div class="sec_tit mb20">
                            <h2 class="section-title underline mb20">Unmatched Capabilities of Our Tokenization Platform</h2>
                        </div>
                        <p>Our expert-designed tokenization platform boasts exceptional features, ensuring smooth and hassle-free interactions and transactions for both you and your customers. With our cutting-edge development expertise, you’ll gain a significant competitive edge even before your platform’s official launch.</p>
                    </div>
                </div>
                <div class="row mt40">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <ul class="step-points">
                            <li> <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Comprehensive User Profiles</h4>
                                </div>
                            </li>
                            <li> <span><i class="fa fa-file" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Advanced KYC/AML Verification</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <ul class="step-points">
                            <li> <span><i class="fa fa-link" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Seamless Multi-Chain Integration</h4>
                                </div>
                            </li>
                            <li> <span><i class="fa fa-gavel" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Automated Legal Compliance</h4>
                                </div>
                            </li>
                            <li> <span><i class="fa fa-clock" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Intuitive Admin Dashboard</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <ul class="step-points">
                            <li> <span><i class="fa fa-rocket" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Robust Launchpad Functionality</h4>
                                </div>
                            </li>
                            <li> <span><i class="fa fa-book" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Smart Contract Automation</h4>
                                </div>
                            </li>
                            <li> <span><i class="fa fa-dollar" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Dynamic Tokenizing Portal</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <ul class="step-points">
                            <li> <span><i class="fa fa-dollar" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Integrated Native Token Capabilities</h4>
                                </div>
                            </li>
                            <li> <span><i class="fa fa-wallet" aria-hidden="true"></i></span>
                                <div class="step-points-content">
                                    <h4>Versatile Multi-Payment Gateway</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="technologies">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center white">Inspiration from Leading Asset Tokenization Platforms</h3>
                    <p class="text-center white">We specialize in crafting asset tokenization platforms that echo the sophistication and appeal of today’s market leaders. As tokenized assets gain traction, introducing a state-of-the-art tokenization platform can propel your venture to new heights of success and innovation.</p>
                    <ul>
                        <li>
                            <img class="lazy" src="{{ asset('images/asset-token/icons/securitize.webp') }}">

                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/asset-token/icons/stably.webp') }}">

                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/asset-token/icons/bitbond.webp') }}">

                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/asset-token/icons/bitgo.svg') }}">

                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/asset-token/icons/robinland.webp') }}">

                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/asset-token/icons/digishares.webp') }}">

                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/asset-token/icons/fraction.webp') }}">

                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/asset-token/icons/tokensoft.svg') }}">

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <style type="text/css">
            .awesome-features-wrapper {
                border: 1px solid #cdcdcd;
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
                ;
            }

            .awesome-features-wrapper {
                border: 1px solid #cdcdcd;
                padding-top: 40px;
                padding-bottom: 20px;
                /*    min-height: 480px;*/
                transition: .3s;
                position: relative;
                margin-bottom: 30px;
                border-radius: 10px;
            }

            /* .awesome-features-wrapper::before {
                background: #47b475;
                height: 20px;
                width: 3px;
                content: "";
                position: absolute;
                left: -2px;
                top: 65px;
            }*/

            .awesome-features-wrapper::after {
                background: #47b475;
                height: 50px;
                width: 3px;
                content: "";
                position: absolute;
                left: -2px;
                top: 94px;
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

            .awesome-features-icon-img .fa {
                color: #47b475;
                font-size: 40px;
            }

            .awesome-features-wrapper::after {
                content: "";
                position: absolute;
                left: -6px;
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
        <div class="common_spacing">
            <div class="container">
                <div class=" ">
                    <h2 class="sec_tit underline text-center">Strategic Advantages of Our Top-Tier Tokenization Platform</h2>
                    <p class="text-center">As a leader in developing cutting-edge asset tokenization solutions, we deliver platforms that offer unparalleled benefits, setting your application apart from the competition. From streamlined automation to comprehensive legal compliance, our platform is designed to excel.
                    </p>
                </div>
                <div class="row mt20">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/intermediaries.png') }}">
                            </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Elimination of Intermediaries</strong>Our platform automates operations, ensuring seamless and efficient processes without the complications of intermediaries.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/customizability.png') }}">
                            </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Dynamic Token Customization</strong>Easily tailor asset-backed tokens with varied utilities and equity features, simplifying and accelerating sales processes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/fractionalizing.png') }}">
                            </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Fractional Ownership</strong>Incorporate fractional ownership into asset tokens effortlessly, enhancing liquidity for previously inaccessible assets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/transparent.png') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Enhanced Transparency</strong>Utilizing smart contract technology ensures all operations are fully transparent, fostering greater trust and confidence among users.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/liquidity.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">24/7 Liquidity</strong>Our platform provides continuous liquidity for asset tokens, unrestricted by traditional market hours.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/compliance.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Robust Legal Compliance</strong>Ensure global and regional regulatory adherence with our platform’s built-in legal compliance mechanisms.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                margin-left: 13px !important;
                margin-right: 13px !important;
            }

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

        <section class="simple-slide gray-bg">
            <div class="container">
                <h2 class="sec_tit underline text-center">Comprehensive Investor Management Dashboard</h2>
                <div class="card">
                    <div class="products">
                        <div class="product active" product-id="1" product-color="#D18B49">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <img src="{{ asset('images/sto/dashboard1.webp') }}" alt="Investor Management Dashboards"
                                        title="Investor Management Dashboards" class="img-responsive lazy box-shadow">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="list-ico text-justify">
                                        <li>
                                            <p>Our integrated dashboard simplifies managing KYC/AML records, accredited investors, market cap, fundraising, and investments.</p>
                                        </li>
                                        <li>
                                            <p>Engage proactively with investors, sending updates and notifications about new investment opportunities.</p>
                                        </li>
                                        <li>
                                            <p>Securely access audit trails, checklists, activities, and standard reports.</p>
                                        </li>
                                        <li>
                                            <p>Investors can efficiently manage their portfolios, with all announcements related to voting, holdings, and new offerings delivered directly through the dashboard.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product" product-id="2" product-color="#542F13">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <img src="{{ asset('images/sto/dashboard2.webp') }}" alt="Investor Management Dashboards"
                                        title="Investor Management Dashboards" class="img-responsive lazy box-shadow">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="list-ico text-justify">
                                        <li>
                                            <p>Systematically categorize all security token transactions for enhanced clarity and organization.</p>
                                        </li>
                                        <li>
                                            <p>Ensure transparency within the tokenized asset ecosystem, with all important documents like bylaws, shareholder agreements, and SAFTs securely stored in one location.</p>
                                        </li>
                                        <li>
                                            <p>Track and manage shareholder activities, download and confirm messages, handle voting items, and monitor responses.</p>
                                        </li>
                                        <li>
                                            <p>Issuers can distribute dividends, and investors can track their earnings and vote directly through the dashboard.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer"><a class="btn" id="prev" href="#" ripple ripple-color="#666666">Prev</a><a
                            class="btn" id="next" href="#" ripple ripple-color="#666666">Next</a></div>
                </div>
            </div>
        </section>
        <style type="text/css">
            .icon-text-1 {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
                background: #f4f4f4;
                padding: 15px;
                border-left: 5px solid #47b475
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
        </style>
        <section class="common_spacing">
            <div class="container">
                <div class="row mt20">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="sec_tit mt30">
                                <h2 class="section-title mb20">A Unified Tokenization Platform for an Evolving Business Landscape</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="text-center c-grey">Our tokenization platform development delivers a versatile solution, allowing you to navigate diverse business needs from a single, powerful interface. This platform can serve as the ultimate gateway for seamless asset token transactions.</p>
                    </div>
                </div>
                <div class="row mt20 container-center">
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/tokenization.png') }}"> </div>
                            <div class="icon_content">
                                <h3>Tokenization</h3>
                                <p class="c-grey">Create robust, customized tokens that represent your assets, integrated with a range of utilities and values.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/assets.png') }}"> </div>
                            <div class="icon_content">
                                <h3>Asset Management</h3>
                                <p class="c-grey">Effortlessly manage your digital assets across multiple blockchains, enhancing market reach and exposure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/digital-assets.webp') }}">
                            </div>
                            <div class="icon_content">
                                <h3>Policy Management</h3>
                                <p class="c-grey">Develop and enforce specific policies and rules for tokenizing and trading digital assets on your platform.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/smart-contracts.webp') }}">
                            </div>
                            <div class="icon_content">
                                <h3>Smart Contract Management</h3>
                                <p class="c-grey">Automatically generate smart contracts for your tokenization software, ensuring smooth integration with existing systems.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/data.webp') }}"> </div>
                            <div class="icon_content">
                                <h3>Data Orchestration</h3>
                                <p class="c-grey">Securely and transparently record and manage business data using advanced decentralized storage solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/tokenization-platform-development/icons/wallet.png') }}">
                            </div>
                            <div class="icon_content">
                                <h3>Custody Services</h3>
                                <p class="c-grey">Implement strong custody measures with custom-built wallets or external solutions, safeguarding your tokenization platform.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>


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
            color: #47b475;
            margin-right: 10px;
            font-size: 20px;
        }
    </style>
    <section class="common_spacing">
        <div class="container">
            <div class="row">
                <h2 class="sec_tit underline text-center" style="width: 100%">Distinctive Features of Our Cutting-Edge Digital Asset Tokenization Platform</h2>
                <p class="text-center">Our digital asset tokenization platform stands as the ultimate all-in-one solution for all your tokenization needs, streamlining processes and delivering unparalleled security. It combines ease of use with top-tier protection, ensuring robust security for both the platform and its users at all times.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">
                    <ul class="list primary_list">
                        <li><strong>Unified Integration</strong>Seamlessly integrate your existing platform with Web3 technology for a comprehensive solution.</li>
                        <li><strong>Effortless Tokenization</strong>Achieve streamlined tokenization with our powerful, all-encompassing smart contracts.</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">
                    <ul class="list">
                        <li><strong>Simplified Transfers</strong>Enjoy smooth multi-chain and cross-chain asset token transfers with ease.</li>
                        <li><strong>Flexible Software Options</strong>Choose between custom-built solutions or Whitelabel software to fit your business needs.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        .product-features {
            background: #140050;
        }

        .package_includes {
            color: #fff;
            background: url(../images/products/package_banner.webp) 0 0/cover no-repeat fixed;
        }

        .Package_list {
            background: #2f1777;
            padding: 30px 10px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 5px;
            min-height: 180px !important;
        }

        .Package_list,
        .bg-dark-half-md {
            width: 100%;
            display: inline-block;
        }

        .Package_list img {
            height: 55px;
        }

        .Package_list h3 {
            display: block;
            font-size: 18px;
            margin-top: 12px;
            margin-bottom: 8px;
            color: #fff;
        }

        .product-features {
            background: #140050;
        }

        .white {
            color: #fff;
        }

        .sec_titw h2 {
            font-size: 25px !important;
            font-weight: 700;
            color: #fff;
            line-height: 1.4;
        }
    </style>
    <section class="product-features package_includes common_spacing">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <div class="sec_titw mb20">
                        <h2 class="section-title underline mb20 font_wei">Exploring the Diverse Use Cases of Our Tokenization Platform</h2>
                    </div>
                    <p class="text-center white">As tokenization gains momentum, the range of tokenizable assets expands, unlocking various use cases. Our platform empowers you to effortlessly create tokens for a wide array of assets.</p>
                </div>
                <div class="container-center">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy"
                                src="{{ asset('images/tokenization-platform-development/icons/real-estate.png') }}">
                            <h3>Real Estate</h3>
                            <p>Easily issue and trade tokens backed by real estate assets, incorporating both utility and equity.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy"
                                src="{{ asset('images/tokenization-platform-development/icons/collectibles.png') }}">
                            <h3>Fine Art Collectibles</h3>
                            <p>Enable fractional ownership of fine art pieces, including artworks, music, images, and videos, within a streamlined portal.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy"
                                src="{{ asset('images/tokenization-platform-development/icons/financial-service.webp') }}">
                            <h3>Financial Instruments</h3>
                            <p>Seamlessly access tokens representing financial instruments such as debt bonds, equity shares, and deposit proofs.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy"
                                src="{{ asset('images/tokenization-platform-development/icons/documentation.png') }}">
                            <h3>Documentation</h3>
                            <p>Trade tokens for important documents like patents, trademarks, and copyrights, ensuring equitable content usage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .main-timeline7 .timeline7 {
            padding: 0 5px;
            position: relative;
        }

        .main-timeline7 .timeline7-icon {
            display: block;
            text-align: center;
            padding: 20px 0 55px 0;
            z-index: 1;
            position: relative;
        }

        .main-timeline7 .timeline7:nth-child(2n) .timeline7-icon {
            padding: 55px 0 20px 0;
        }

        .main-timeline7 .timeline7-icon:before {
            content: "";
            width: 1px;
            height: 75%;
            background: #140050;
            margin: 0 auto;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            transition: all 0.3s ease 0s;
        }

        .main-timeline7 .timeline7:nth-child(2n) .timeline7-icon:before {
            bottom: auto;
            top: 0;
        }

        .main-timeline7 .timeline7:hover .timeline7-icon:before {
            background: #555;
        }

        .main-timeline7 .timeline7-icon i {
            width: 45px;
            height: 45px;
            line-height: 45px;
            border-radius: 50%;
            background: #140050;
            font-size: 14px;
            color: #fff;
            transition: all 0.3s ease 0s;
        }

        .main-timeline7 .timeline7:hover .timeline7-icon i {
            background: #555;
            animation: icon-load 2.5s ease 0s infinite;
        }

        .main-timeline7 .border {
            height: 15px;
            background: #140050;
            /*    margin-bottom: 20px;*/
            transition: all 0.3s ease 0s;
        }

        .main-timeline7 .timeline7:hover .border {
            background: #555;
        }

        .main-timeline7 .timeline7:first-child .border {
            border-radius: 4px 0 0 4px;
        }

        .main-timeline7 .timeline7:last-child .border {
            border-radius: 0 4px 4px 0;
        }

        .main-timeline7 .timeline7:nth-child(2n) .border {
            /*    margin: 18px 0 0 0;*/
        }

        .main-timeline7 .timeline7-content {
            padding: 15px;
            border: 1px solid #ddd;
            background: #fff;
            border-radius: 3px;
            transition: all 0.3s ease 0s;
        }

        .main-timeline7 .timeline7:hover .timeline-content {
            background: #555;
        }

        .main-timeline7 .title {
            font-size: 18px;
            font-weight: 700;
            color: #140050;
            text-transform: capitalize;
            margin: 0 0 10px 0;
            transition: all 0.3s ease 0s;
        }

        .main-timeline7 .timeline7:hover .title {
            color: #fff;
        }

        .timeline7-content .description {
            font-size: 14px;
            color: #888;
            margin: 0;
            transition: all 0.3s ease 0s;
        }

        .main-timeline7 .timeline7:hover .description {
            color: #fff;
        }

        @keyframes icon-load {
            0% {
                transform: rotate(-12deg);
            }

            8% {
                transform: rotate(12deg);
            }

            10% {
                transform: rotate(24deg);
            }

            18%,
            20% {
                transform: rotate(-24deg);
            }

            28%,
            30% {
                transform: rotate(24deg);
            }

            38%,
            40% {
                transform: rotate(-24deg);
            }

            48%,
            50% {
                transform: rotate(24deg);
            }

            58%,
            60% {
                transform: rotate(-24deg);
            }

            68% {
                transform: rotate(24deg);
            }

            100%,
            75% {
                transform: rotate(0deg);
            }
        }

        @media only screen and (max-width: 990px) {
            .main-timeline7 .timeline7 {
                margin-bottom: 20px;
            }
        }

        @media only screen and (max-width: 767px) {
            .main-timeline7 .timeline7-icon {
                padding-top: 0;
            }

            .main-timeline7 .timeline7:nth-child(2n) .timeline7-icon {
                padding-bottom: 0;
            }

            .main-timeline7 .border {
                margin-bottom: 10px;
            }

            .main-timeline7 .timeline7:nth-child(2n) .border {
                margin: 10px 0 0 0;
            }

            .main-timeline7 .timeline7-content {
                text-align: center;
            }
        }
    </style>
    <section class="travel-app gray_bg" style="padding:40px 0px;">
        <div class="container">
            <div class="section-title text-center ">
                <h3 class="common_h3">How We Deliver Whitelabel Tokenization Platform Development for Your Success</h3>
                <hr>
                <p class="text-center">
                    Our Whitelabel tokenization platform development process enables you to create powerful applications ready for business use in just days, with customization options that are significantly more cost-effective than starting from scratch.
                </p><br>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline7">
                        <div class="col-md-2 col-sm-4 timeline7">
                            <span class="timeline7-icon">
                                <i class="fa fa"> <time>01</time></i>
                            </span>
                            <div class="border"></div>
                            <div class="timeline7-content">
                                <h4>Conceptualization</h4>
                                <p>We capture your requirements and develop a comprehensive plan for your tokenization platform, complete with detailed technical documentation.</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 timeline7">
                            <div class="timeline7-content">
                                <h4>Design</h4>
                                <p>Our UI/UX specialists tailor the platform’s design to align with your business needs and brand identity, adjusting colors and themes as required.</p>
                            </div>
                            <div class="border"></div>
                            <span class="timeline7-icon">
                                <i class="fa fa"> <time>02</time></i>
                            </span>
                        </div>
                        <div class="col-md-2 col-sm-4 timeline7">
                            <span class="timeline7-icon">
                                <i class="fa fa"><time>03</time></i>
                            </span>
                            <div class="border"></div>
                            <div class="timeline7-content">
                                <h4>Development</h4>
                                <p>Our development team activates core functionalities and incorporates additional features as needed for your tokenization platform.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 timeline7">
                            <div class="timeline7-content">
                                <h4>Integration</h4>
                                <p>We integrate external APIs, such as wallets and price trackers, with your pre-configured platform to enhance performance and connectivity.</p>
                            </div>
                            <div class="border"></div>
                            <span class="timeline7-icon">
                                <i class="fa fa"><time>04</time></i>
                            </span>
                        </div>
                        <div class="col-md-2 col-sm-4 timeline7">
                            <span class="timeline7-icon">
                                <i class="fa fa"> <time>05</time></i>
                            </span>
                            <div class="border"></div>
                            <div class="timeline7-content">
                                <h4>Testing</h4>
                                <p>We rigorously test the platform to identify and resolve any defects, using advanced methods to ensure security and flawless operation.</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 timeline7">
                            <div class="timeline7-content">
                                <h4>Deployment</h4>
                                <p>We launch your tokenization platform on the blockchain, ensuring it’s fully operational and optimized for business use after thorough promotion.</p>
                            </div>
                            <div class="border"></div>
                            <span class="timeline7-icon">
                                <i class="fa fa"><time>06</time></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"><br><br></div>
            <div class="contentall" align="center" style="padding-top: 0;">
                {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                    target="_blank" href="#"
                    data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"
                    style="border-radius: 30px !important;">
                    <span>Schedule a Consultation</span></a> --}}
                <a href="{{ url('consultation') }}" rel="nofollow"
                    style="border-radius: 30px !important; text-transform:none !important;">Connect with Our Experts</a>
            </div>
        </div>
    </section>
    
    <style type="text/css">
        .category-item.aos-item:hover .text-center {
            position: relative;
            z-index: 99;
            color: #000 !important;
        }

        .bg-dark-half-md {
            background: #140050;
            padding: 100px 0;
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
            transition: .3s ease-in-out;
        }

        .teck .category-grid-style-01 .category-item .category-icon {
            color: #333;
            font-size: 44px;
            line-height: 1;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }

        .teck .category-grid-style-01 .category-item {
            padding: 30px;
            text-align: center;
            width: 19.80%;
            border-right: 1px solid #eee;
            border-bottom: 1px solid #eee;
            position: relative;
            cursor: pointer;
        }

        @media (max-width: 320px) {
            .teck .category-grid-style-01 .category-item {
                width: 100%;
            }
        }

        .teck .category-grid-style-01 .category-item {
            padding: 10px !important;
        }

        .teck .category-icon img {
            padding: 15px;
        }

        .teck .category-icon img {
            height: 80px !important;
        }

        .teck .category-grid-style-01 .category-item .category-title {
            color: #022d62;
            font-weight: 700;
            margin-bottom: 0;
            position: relative;
            z-index: 2;
            font-size: 16px;
        }

        .teck .category-grid-style-01 .category-item .category-icon {
            margin-bottom: 0 !important;
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
    </style>
    <section class="space-pt bg-dark-half-md tech-padding teck">
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="section-title text-center ">
                    <h3 class="common_h3 text-white">Our Mastery in Leading Blockchain Networks for Tokenization Platform Development</h3>
                    <hr>
                    <p class="white-color">With our profound expertise in tokenization platform development, we deliver outstanding solutions enriched with compelling features and benefits for both users and platform operators. Leveraging our deep knowledge of blockchain technology, we are poised to create sophisticated marketplace applications across a wide spectrum of blockchain ecosystems.
                    </p>
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
                                class="category-title">BNB Chain </a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/solana.webp') }}" alt="Solana"> </div> <a href="#"
                                class="category-title">Solana</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/polygon.webp') }}" alt="Polygon"> </div> <a href="#"
                                class="category-title">Polygon</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/tron.webp') }}" alt="Tron"> </div>
                            <a href="#" class="category-title">Tron</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/tokenization-platform-development/icons/waves.webp') }}" alt="Tron">
                            </div>
                            <a href="#" class="category-title">Waves</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/tezos.webp') }}" alt="Tezos"> </div>
                            <a href="#" class="category-title">Tezos</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/home-new/stellar.webp') }}" alt="Stellar"> </div>
                            <a href="#" class="category-title">Stellar</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/tokenization-platform-development/icons/consensys-quorum.webp') }}"
                                    alt="Consensys Quorum"> </div>
                            <a href="#" class="category-title">Consensys Quorum </a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                    src="{{ asset('images/tokenization-platform-development/icons/hyperledger.webp') }}"
                                    alt="Hyperledger"> </div>
                            <a href="#" class="category-title">Hyperledger Fabric</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">&times;</span></h4>
                </div>
                <div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
                    <form class id="mailForms1" method="post" action>
                        <input type="hidden" value="$10,000" name="btc_value">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" class="form-control" id="skype" name="skype" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="phone21" name="phone_dummy" type="text" required
                                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    data-cf-modified-d42f518cdde025a254df1416->
                                <input type="hidden" name="phone" id="phone_newsletter" value>
                                <input type="hidden" name="url" id="url" value="/tokenization-platform-development">
                                <input type="hidden" value="2607:5300:203:172e::" name="IP">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
                            <div class="form-group">
                                <label>Requirement</label>
                                <textarea placeholder="Write text here..." name="message" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="button" class="submit_send" value="send message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">&times;</span></h4>
                </div>
                <div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
                    <form class id="mailForms2" method="post" action>
                        <input type="hidden" value="$15,000" name="btc_value">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" class="form-control" id="skype" name="skype" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="phone22" name="phone_dummy" type="text" required
                                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    data-cf-modified-d42f518cdde025a254df1416->
                                <input type="hidden" name="phone" id="phone_newsletter" value>
                                <input type="hidden" name="url" id="url" value="/tokenization-platform-development">
                                <input type="hidden" value="2607:5300:203:172e::" name="IP">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
                            <div class="form-group">
                                <label>Requirement</label>
                                <textarea placeholder="Write text here..." name="message" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="button" class="submit_send" value="send message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">&times;</span></h4>
                </div>
                <div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
                    <form class id="mailForms3" method="post" action>
                        <input type="hidden" value="$20,000" name="btc_value">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" class="form-control" id="skype" name="skype" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="phone23" name="phone_dummy" type="text" required
                                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    data-cf-modified-d42f518cdde025a254df1416->
                                <input type="hidden" name="phone" id="phone_newsletter" value>
                                <input type="hidden" name="url" id="url" value="/tokenization-platform-development">
                                <input type="hidden" value="2607:5300:203:172e::" name="IP">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
                            <div class="form-group">
                                <label>Requirement</label>
                                <textarea placeholder="Write text here..." name="message" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="button" class="submit_send" value="send message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Modal_pdf" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">&times;</span></h4>
                </div>
                <div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
                    <form class id="mailForms_pdf" method="post" action>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" class="form-control" id="skype" name="skype" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="phone_pdf" name="phone_dummy" type="text" required style="width: 100%;"
                                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    data-cf-modified-d42f518cdde025a254df1416->
                                <input type="hidden" name="phone" id="phone_newsletter" value>
                                <input type="hidden" name="url" id="url" value="/tokenization-platform-development">
                                <input type="hidden" value="2607:5300:203:172e::" name="IP">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
                            <div class="form-group">
                                <label>Requirement</label>
                                <textarea placeholder="Write text here..." name="message" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="button" class="submit_send_pdf" value="send message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/vendor.js" type="d42f518cdde025a254df1416-text/javascript"></script>
<script src="js/plugins.js" type="d42f518cdde025a254df1416-text/javascript"></script>
<script src="js/main.js" type="d42f518cdde025a254df1416-text/javascript"></script>
<script type="d42f518cdde025a254df1416-text/javascript" src="fbox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="fbox/jquery.fancybox.css?v=2.1.5" media="screen">
<script type="d42f518cdde025a254df1416-text/javascript" src="fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="d42f518cdde025a254df1416-text/javascript"
    src="https://tympanus.net/Development/AnimatedHeaderBackgrounds/js/TweenLite.min.js"></script>
<script type="d42f518cdde025a254df1416-text/javascript"
    src="https://tympanus.net/Development/AnimatedHeaderBackgrounds/js/EasePack.min.js"></script>
<script type="d42f518cdde025a254df1416-text/javascript"
    src="https://tympanus.net/Development/AnimatedHeaderBackgrounds/js/rAF.js"></script>
<script src="build/js/intlTelInput.js" type="d42f518cdde025a254df1416-text/javascript"></script>
<script type="d42f518cdde025a254df1416-text/javascript">
    $("#phone").intlTelInput({
                // allowDropdown: false,
                // autoHideDialCode: false,
                // autoPlaceholder: "off",
                // dropdownContainer: "body",
                // excludeCountries: ["us"],
                // formatOnDisplay: false,
                // geoIpLookup: function(callback) {
                //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                //     var countryCode = (resp && resp.country) ? resp.country : "";
                //     callback(countryCode);
                //   });
                // },
                // hiddenInput: "full_number",
                // initialCountry: "auto",
                // nationalMode: false,
                // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                // placeholderNumberType: "MOBILE",
                // preferredCountries: ['cn', 'jp'],
                // separateDialCode: true,
                utilsScript: "build/js/utils.js"
            });
        $("#phone21").intlTelInput({
              // allowDropdown: false,
              // autoHideDialCode: false,
              // autoPlaceholder: "off",
              // dropdownContainer: "body",
              // excludeCountries: ["us"],
              // formatOnDisplay: false,
              // geoIpLookup: function(callback) {
              //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
              //     var countryCode = (resp && resp.country) ? resp.country : "";
              //     callback(countryCode);
              //   });
              // },
              // hiddenInput: "full_number",
              // initialCountry: "auto",
              // nationalMode: false,
              // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
              // placeholderNumberType: "MOBILE",
              // preferredCountries: ['cn', 'jp'],
              // separateDialCode: true,
              utilsScript: "build/js/utils.js"
        });   
        $("#phone22").intlTelInput({
              // allowDropdown: false,
              // autoHideDialCode: false,
              // autoPlaceholder: "off",
              // dropdownContainer: "body",
              // excludeCountries: ["us"],
              // formatOnDisplay: false,
              // geoIpLookup: function(callback) {
              //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
              //     var countryCode = (resp && resp.country) ? resp.country : "";
              //     callback(countryCode);
              //   });
              // },
              // hiddenInput: "full_number",
              // initialCountry: "auto",
              // nationalMode: false,
              // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
              // placeholderNumberType: "MOBILE",
              // preferredCountries: ['cn', 'jp'],
              // separateDialCode: true,
              utilsScript: "build/js/utils.js"
        });
        $("#phone23").intlTelInput({
              // allowDropdown: false,
              // autoHideDialCode: false,
              // autoPlaceholder: "off",
              // dropdownContainer: "body",
              // excludeCountries: ["us"],
              // formatOnDisplay: false,
              // geoIpLookup: function(callback) {
              //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
              //     var countryCode = (resp && resp.country) ? resp.country : "";
              //     callback(countryCode);
              //   });
              // },
              // hiddenInput: "full_number",
              // initialCountry: "auto",
              // nationalMode: false,
              // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
              // placeholderNumberType: "MOBILE",
              // preferredCountries: ['cn', 'jp'],
              // separateDialCode: true,
              utilsScript: "build/js/utils.js"
        });
</script>
<script type="d42f518cdde025a254df1416-text/javascript">
    $('.home-talk-experts').click(function() {
                $('html, body').animate({
                    scrollTop: $('#newsletter-form-sec').offset().top
                }, 2000);
            });
    
            var url = window.location.href;
            $('#url').val(url);
        // alert(url);
</script>
<script type="d42f518cdde025a254df1416-text/javascript">
    $('#screens').owlCarousel({
                    loop:true,
                    navRewind: false,
                    margin:0,
                    dots: false,
                    nav:true,
                    autoplay:true,
                    navText: [],
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
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
</style>

<a class="sticky_form_bp color-btn1 hidden-lg"
    href="https://www.blockchainappfactory.com/create-your-own-token-and-coin" style="color:#fff !important;">Contact to
    Create a Token! </a>
<div class="sticky-form">
    <div class="formdiv">
        <form class="form-side" id="mailForm_sticky" method="post" action>
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
                <input id="phone_sticky" name="phone_dummy" type="text" required
                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                    data-cf-modified-d42f518cdde025a254df1416->
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/tokenization-platform-development">
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
<script type="d42f518cdde025a254df1416-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="d42f518cdde025a254df1416-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="d42f518cdde025a254df1416-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="d42f518cdde025a254df1416-text/javascript">
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

<script type="d42f518cdde025a254df1416-text/javascript">
    window.__lc = window.__lc || {};
        window.__lc.license = 9464790;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>

<script type="d42f518cdde025a254df1416-text/javascript">
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
<script type="d42f518cdde025a254df1416-text/javascript">
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
            <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="blank">
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




<script type="d42f518cdde025a254df1416-text/javascript">
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


<script type="d42f518cdde025a254df1416-text/javascript">
    $(".crypto-popup").click(function(e) {
            $('crypto-popup').addClass('fixedPosition full-width');
            $(".login-popup").addClass('show');
            e.stopPropagation();
        });
</script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="d42f518cdde025a254df1416-|49" defer></script>
</div>

@endsection