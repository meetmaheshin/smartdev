@extends('layouts.static')
    @section('title', 'Crypto Marketing Agency')
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

    p {
        margin-bottom: 0;
    }

    .contentall a {
        background: linear-gradient(45deg, #192590, #3f9cf7);
        color: #fff;
        cursor: pointer;
        margin: 10px;
        text-transform: capitalize !important;
        /*            box-shadow: 0px 3px 0px 2px #63acff;*/
    }

    .contentall a:hover {
        background: #192590;
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
        background: #011542;
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
        margin-top: 100px;
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
        width: 90%;
        /* margin-top: 90px; */
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
        width: 25%;
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
        padding-top: 15px;
        padding-left: 0;
    }

    .uniq_features ul li {
        color: #fff;
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
        background: linear-gradient(45deg, #192590, #3f9cf7);
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
        border-bottom: 34px solid #1f38a1;
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
        background-color: #1f38a1;
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
        border-left: 2px solid #1f38a1;
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
        background: linear-gradient(to bottom, #1f1d68, #3898b8);
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
        background: #1f1d68;
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
        background: linear-gradient(to right bottom, #1f1d68 49%, transparent 50%);
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
        border: 1px solid #B0B0B0;
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
                                            {{-- <span style="font-weight: normal; font-size: 19px;">Get Your Complete
                                                Full-Scale</span> --}}
                                            <h1 itemprop="name">Elevate Your Brand with Our Comprehensive Crypto Marketing Solutions</h1>
                                        </div>
                                        <p itemprop="text">We empower emerging crypto entrepreneurs and startups to establish credibility within the crypto sphere. Our goal is to deliver robust, tailored marketing strategies crafted by leading experts in cryptocurrency. <br><br>
                                        Partner with us to transform your brand’s visibility and achieve unprecedented growth in the crypto world.
                                        </p>
                                        <div class="txt"> <a rel="nofollow" href="{{ url('consultation') }}" class="nec-btn"
                                                id="cyz" style="border-radius: 30px !important;">Connect with Our Expert</a>
                                            <!-- <a href="#demo" class="nec-btn" id="cyz" style="border-radius: 30px !important;">View Demo</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center"> 
                            <img class="magic" src="{{ asset('images/crypto-marketing-services/banner-img.webp') }}" alt="Best Crypto Marketing Agency" title="Best Crypto Marketing Agency"> 
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
        background: #4047df;
    }

    #counter-stats .stats:nth-child(3) {
        background: #2834a8;
    }

    #counter-stats .stats:nth-child(4) {
        background: #4047df;
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



<div class="common_spacing ">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title-th sec_tit underline">Your Premier Partner for Crypto Coin Marketing</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p class="text-center">Effectively promoting your crypto coin is crucial for attracting global investors and gaining widespread recognition. Understanding your project’s core value and having a clear marketing strategy is essential for engaging potential customers.
                <br><br>
                Our expertise covers every facet of the crypto realm, from project development to advanced marketing strategies. We are dedicated to supporting crypto startups with tailored solutions that highlight the unique appeal of their innovations, compelling investors to take notice and invest.
                </p>
            </div>
            <div class="text-center cta_mine txt">
                {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                    target="_blank" href="#"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
                <a rel="nofollow" href="{{ url('consultation') }}"
                    class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Experts</span></a>
            </div>

        </div>
    </div>
</div>




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

    .awesome-features-wrapper {
        border: 1px solid #cdcdcd;
        padding-top: 40px;
        padding-bottom: 20px;
        /*            min-height: 480px;*/
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

@include('static.top-right-hover-effect-4-col-card', [
    'title' => "Top-Tier Crypto Marketing Services", 
    'desc' => "Our experienced marketing team crafts bespoke strategies to elevate your crypto project with unparalleled effectiveness.",
    'cards' => [
        [
            'title' => "Content Creation",
            'desc' => "Our expert writers produce compelling and relevant content, driven by the latest market insights and data trends.",
            'image' => 'crypto-marketing-services/icons/creation.png'
        ],
        [
            'title' => 'Social Media Marketing',
            'desc' => "Enhance your online presence with our strategic approach to platforms like Twitter, Instagram, Reddit, and Telegram.",
            'image' => 'crypto-marketing-services/icons/social-media.webp'
        ],
        [
            'title' => 'Influencer Marketing',
            'desc' => "Maximize your project's reach by partnering with leading crypto influencers. We handle optimization, connections, and negotiations for the greatest impact.",
            'image' => 'crypto-marketing-services/icons/influencer.png'
        ],
        [
            'title' => "Search Engine Optimization (SEO)",
            'desc' => "Dominate search engine results and become the top choice for investors with our advanced SEO techniques.",
            'image' => 'crypto-marketing-services/icons/seo.png'
        ],
        [
            'title' => "Email Marketing",
            'desc' => "Expand your subscriber base with engaging content and targeted email campaigns designed to captivate and convert.",
            'image' => 'crypto-marketing-services/icons/email-marketing.png'
        ],
        [
            'title' => "Community Management",
            'desc' => "Build and maintain a strong, trustworthy community across platforms such as Twitter, Telegram, Discord, and Reddit.",
            'image' => 'crypto-marketing-services/icons/community.png'
        ],
        [
            'title' => "Public Relations",
            'desc' => "Utilize our PR expertise to create impactful communication strategies that effectively engage your target audience.",
            'image' => 'crypto-marketing-services/icons/public.webp'
        ],
        [
            'title' => "Partnerships and Collaborations",
            'desc' => "Leverage influencer partnerships to directly connect with audiences and amplify your project's visibility.",
            'image' => 'crypto-marketing-services/icons/partnerships.png'
        ],
        [
            'title' => "Token Airdrops and Giveaways",
            'desc' => "Conduct strategic airdrops to incentivize participation and attract investors eager to engage with your project.",
            'image' => 'crypto-marketing-services/icons/airdrops.webp'
        ],
        [
            'title' => "Bounty Campaigns",
            'desc' => "Implement bounty programs that reward users for completing tasks, driving engagement and participation.",
            'image' => 'crypto-marketing-services/icons/Campaign.png'
        ],
        [
            'title' => "Paid Advertising",
            'desc' => "Achieve broad exposure through targeted paid advertising across multiple platforms to reach potential crypto investors.",
            'image' => 'crypto-marketing-services/icons/ads.webp'
        ],
        [
            'title' => "Token Listings",
            'desc' => "Strategically list your tokens at optimal times to maximize market impact and visibility.",
            'image' => 'crypto-marketing-services/icons/listing.png'
        ],
        [
            'title' => "Reputation Management",
            'desc' => "Enhance and protect your online reputation with our expert marketing team, ensuring success in the competitive crypto landscape.",
            'image' => 'crypto-marketing-services/icons/reputation.svg'
        ],
        [
            'title' => "Video Marketing",
            'desc' => "Our video experts create engaging content that simplifies complex ideas, showcases key features, and highlights project updates.",
            'image' => 'crypto-marketing-services/icons/video.png'
        ],
        [
            'title' => "White Paper Drafting",
            'desc' => "Develop a solid foundation for your project's marketing and fundraising efforts with a meticulously crafted white paper.",
            'image' => 'crypto-marketing-services/icons/whitepaper.png'
        ],
    ],
])


<style type="text/css">
    :root {
        --main-color: #FC2638;
    }

    .serviceBox {
        background-color: #fff;
        font-family: 'Poppins', sans-serif;
        text-align: center;
        padding: 30px 20px 30px 30px;
        border-radius: 20px;
        box-shadow: 5px 0 12px rgba(0, 0, 0, 0.2), -7px 15px var(--main-color);
        position: relative;
        z-index: 1;
        margin-bottom: 35px;
    }

    .serviceBox:before {
        content: '';
        background-color: #143365;
        height: 70%;
        width: 15px;
        position: absolute;
        left: 0;
        bottom: 5px;
        clip-path: polygon(0% 0%, 100% 15%, 100% 85%, 0% 100%);
    }

    .serviceBox .service-icon {
        color: var(--main-color);
        font-size: 40px;
        margin: 0 auto 20px;
    }

    .serviceBox .title {
        color: var(--main-color);
        font-size: 18px;
        font-weight: 600;
        text-transform: capitalize;
        letter-spacing: 0.5px;
        margin: 0 0 15px;
    }

    .serviceBox .description {
        font-size: 15px !important;
        line-height: 30px;
        color: #000;
        margin-bottom: 10px;
    }

    .white {
        color: #fff !important;
    }

    .serviceBox a {
        background: #47b475;
        color: #fff;
        padding: 5px 20px;
        border-radius: 30px;
    }

    .serviceBox a:hover {
        color: #fff !important;
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
    .serviceBox.yellow {
        --main-color: #ecc204;
    }

    .serviceBox.bluee {
        --main-color: #06CDEA;
    }

    .serviceBox.darkblue {
        --main-color: #045582;
    }

    .serviceBox.sameclr {
        --main-color: #4047df;
    }


    @media only screen and (max-width: 1199px) {
        .serviceBox {
            margin: 0 0 30px;
        }
    }
</style>

@include('static.dual-layer-Card', [
    'title' => "Leading Crypto Coin Marketing Agency for Diverse Projects", 
    'desc' => "As a premier crypto coin marketing agency, we empower evolving crypto projects with top-tier strategies tailored for various domains.",
    'cards' => [
        [
            'title' => "Cryptocurrency Projects",
            'desc' => "Our expert team conducts in-depth market analysis and deploys cutting-edge marketing strategies to ensure your cryptocurrency project stands out in a competitive landscape.",
            'image' => 'crypto-marketing-services/icons/cryptocurrency.png'
        ],
        [
            'title' => 'Crypto Wallet Projects',
            'desc' => "Harness the expertise of our digital marketing specialists to propel your crypto wallet projects to the forefront of the market with innovative promotional tactics.",
            'image' => 'crypto-marketing-services/icons/crypto-wallet.png'
        ],
        [
            'title' => 'Token Sales',
            'desc' => "We design impactful marketing campaigns for ICOs (Initial Coin Offerings) and IDOs (Initial DEX Offerings) to attract global investors and drive substantial engagement.",
            'image' => 'crypto-marketing-services/icons/tokens.png'
        ],
        [
            'title' => "Crypto Mining",
            'desc' => "Our strategic approach helps attract attention to your crypto mining ventures, fostering business growth through targeted marketing strategies.",
            'image' => 'crypto-marketing-services/icons/mining.png'
        ],
        [
            'title' => "Cryptocurrency Exchanges",
            'desc' => "We focus on expanding your exchange’s customer base, using proven techniques to boost user acquisition and maximize your exchange’s success.",
            'image' => 'crypto-marketing-services/icons/exchange.png'
        ],
        [
            'title' => "NFT Projects",
            'desc' => "Elevate your NFT project with our data-driven marketing strategies. Our team creates compelling ad campaigns that resonate with your target audience and amplify your project's visibility.",
            'image' => 'crypto-marketing-services/icons/nft.webp'
        ],
        [
            'title' => "DeFi Projects",
            'desc' => "Our tailored marketing strategies drive investor interest and support organic growth for your DeFi project, establishing it as a reputable and trusted entity in the space.",
            'image' => 'crypto-marketing-services/icons/deFi.webp'
        ],
        [
            'title' => "GameFi Projects",
            'desc' => "We develop engaging marketing campaigns for GameFi projects that captivate both gamers and investors, enhancing visibility and adoption within the gaming community.",
            'image' => 'crypto-marketing-services/icons/concept-game.webp'
        ],
        [
            'title' => "Metaverse Projects",
            'desc' => "Our specialized marketing team crafts impactful campaigns designed to make a lasting impression and engage the rapidly expanding Metaverse community.",
            'image' => 'crypto-marketing-services/icons/metaverse.png'
        ],
        [
            'title' => "Web3 Projects",
            'desc' => "Position your Web3 project for success with our advanced marketing services, including strategic partnerships and targeted outreach to highlight your project’s potential.",
            'image' => 'crypto-marketing-services/icons/web3.webp'
        ],
    ],
    'cta1_name' => 'Schedule a Meeting',
    'cta1_link' => '#',
    'cta2_name' => 'Talk With Our Experts',
    'cta2_link' => 'consultation'
])

@include('static.web3-clients', array(
    'title' => 'Renowned <span style="color:#47b475;">Web3 Clients</span> <br> We’ve Elevated to Prominence',
    'desc' => "As a distinguished Web3 marketing agency, we are dedicated to delivering premier services designed to effectively reach target audiences through a diverse range of strategies. This commitment has enabled us to partner with leading Web3 enterprises, achieving outstanding results and propelling their projects to significant prominence."
))


<section class="uniq_features" style="background: #011542; padding-bottom: 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 section-header text-center hidden-xs">
                <img class="lazy" src="{{ asset('images/crypto-marketing-services/kol-img.webp') }}" alt="">
            </div>
            <div class="col-md-6 section-header">
                <div class="common_h3 section-title">
                    <h3 class="sec-tit text-white text-left">Elevate Your Project’s Prestige with Premier Crypto KOL Marketing</h3>
                    <hr style="margin-left: 0">
                    <p class="text-white text-left">Looking to propel your groundbreaking crypto project to the forefront of a competitive market? Harness the influence of top crypto Key Opinion Leaders (KOLs) from our esteemed network to advocate for your venture. Our KOL marketing strategy emphasizes building trust between crypto projects and the broader audience, ensuring impactful visibility.</p>

                    <ul>
                        <li>Gain Endorsements from Esteemed Crypto Figures</li>
                        <li>Drive Increased User Engagement for Your Emerging Project</li>
                        <li>Cultivate a Dedicated Community of Supporters Rapidly</li>
                        <li>Create Buzz and Achieve Viral Success with Leading KOLs</li>
                        <li>Generate Anticipation Pre-Launch to Maximize Initial Impact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-header text-center mb30">
                <div class="common_h3 section-title">
                    <h3 class="sec-tit">How Our Coin Marketing Expertise Will Propel Your Crypto Business</h3>
                    <hr>
                    <p>With extensive experience in the realm of crypto marketing, our team employs a meticulous, step-by-step strategy to drive success in your coin marketing efforts.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pro_line">
                    <div class="feature_pro">
                        <div class="feature_pro-content">
                            <div class="feature_pro-icon"></div> <span class="feature_pro-year">01</span>
                            <div class="title">Deep Product Understanding</div>
                            <p class="description">We dedicate considerable time to grasp your business’s ethos, tone, and product details to develop highly customized promotion strategies.</p>
                        </div>
                    </div>
                    <div class="feature_pro">
                        <div class="feature_pro-content">
                            <div class="feature_pro-icon"></div> <span class="feature_pro-year">02</span>
                            <div class="title">Competitor Analysis</div>
                            <p class="description">Our team scrutinizes competitors' strategies to assess their effectiveness, allowing us to refine and enhance our approach for superior results.</p>
                        </div>
                    </div>
                    <div class="feature_pro">
                        <div class="feature_pro-content">
                            <div class="feature_pro-icon"></div> <span class="feature_pro-year">03</span>
                            <div class="title">Precision Targeting</div>
                            <p class="description">We excel in identifying and reaching audiences who have a genuine interest in your product, optimizing conversion potential through targeted strategies.
                            </p>
                        </div>
                    </div>
                    <div class="feature_pro">
                        <div class="feature_pro-content">
                            <div class="feature_pro-icon"></div> <span class="feature_pro-year">04</span>
                            <div class="title">Channel Activation</div>
                            <p class="description">Our experts swiftly activate key channels—social media, SEO, content, and email marketing—to ensure comprehensive and impactful outreach.</p>
                        </div>
                    </div>
                    <div class="feature_pro">
                        <div class="feature_pro-content">
                            <div class="feature_pro-icon"></div> <span class="feature_pro-year">05</span>
                            <div class="title">Ongoing Optimization</div>
                            <p class="description">Recognizing that there is no one-size-fits-all solution, we continuously adapt to emerging trends and innovations to keep your marketing strategy effective and relevant.</p>
                        </div>
                    </div>
                    <div class="feature_pro">
                        <div class="feature_pro-content">
                            <div class="feature_pro-icon"></div> <span class="feature_pro-year">06</span>
                            <div class="title">Strategic PR and Promotions</div>
                            <p class="description">We deploy both crypto-specific and mainstream marketing tactics, including influencer collaborations, media outreach, and public relations, to expand your reach.
                            </p>
                        </div>
                    </div>
                    <div class="feature_pro">
                        <div class="feature_pro-content">
                            <div class="feature_pro-icon"></div> <span class="feature_pro-year">07</span>
                            <div class="title">Sustainable Growth</div>
                            <p class="description">We focus on top-tier content creation, press releases, and strategic advertising to foster continuous growth and long-term success.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="text-center cta_mine txt"> 
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                href="#" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Experts</span>
            </a>
        </div>
    </div>
</section>


@include('static.six-card-section', [
    'title' => 'Distinct Advantages of Our Crypto Marketing Strategy', 
    'desc' => 'Harness our specialized crypto marketing solution to propel your brand into the spotlight among investors and crypto enthusiasts.',
    'cards' => [
        [
            'title' => 'Targeted Audience',
            'desc' => "Tap into a highly engaged niche of crypto enthusiasts. We tailor marketing strategies to resonate deeply within this specialized community, ensuring maximum impact.",
            'image' => 'crypto-marketing-services/icons/audience.png'
        ],
        [
            'title' => 'Innovative Appeal',
            'desc' => "Leverage cutting-edge crypto and blockchain innovations in our marketing approach to captivate tech-savvy users and early adopters effectively.",
            'image' => "crypto-marketing-services/icons/innovative.webp"
        ],
        [
            'title' => 'Enhanced Sales',
            'desc' => 'With a dedicated marketing team and robust communication strategies, we drive substantial product sales and elevate your crypto project’s market presence.',
            'image' => 'crypto-marketing-services/icons/sales.png'
        ],
        [
            'title' => 'Trust and Transparency',
            'desc' => 'Capitalize on blockchain’s inherent transparency and immutability to build trust and foster user loyalty through strategic marketing.',
            'image' => 'crypto-marketing-services/icons/transparency.webp'
        ],
        [
            'title' => 'Community Building',
            'desc' => "Elevate your crypto project's success with targeted marketing strategies that cultivate vibrant communities, enhancing user engagement and interaction.",
            'image' => 'crypto-marketing-services/icons/community.png'
        ],
        [
            'title' => 'Global Reach',
            'desc' => "Breakthrough geographical constraints by marketing cryptocurrencies and blockchain technologies on a global scale, attracting a diverse and worldwide audience.",
            'image' => 'crypto-marketing-services/icons/global.png'
        ],
    ],
])
<!-- 
<div id="ret-inv" class="common_spacing" style="background: linear-gradient(301deg, #075cde, #032a82, #010e2b);">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<h3 class="text-white">Position Your Venture in the Realm of Distinctive Altcoins with Us!</h3>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="text-center">
<div class="cta_mine">
<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
<a rel="nofollow" href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our Experts</span></a>
</div> </div>
</div>
</div>
</div>
</div> -->

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
<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <h3 class="sec_tit underline text-center" style="font-size:25px; width: 100%">Diverse Cryptocurrency Marketing Sectors We Excel In</h3>

            <p class="text-center mt20" style="width: 100%">Our expert team provides comprehensive services across a broad spectrum of cryptocurrency marketing sectors, ensuring exceptional results in every field.</p>
        </div>
        <div class="row list_box mt30">
            <div class="col-md-3">
                <h5>Blockchain and Cryptocurrency</h5>
            </div>
            <div class="col-md-3">
                <h5>Retail </h5>
            </div>
            <div class="col-md-3">
                <h5>Food and Beverage</h5>
            </div>
            <div class="col-md-3">
                <h5>Healthcare </h5>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-3">
                <h5>Education </h5>
            </div>
            <div class="col-md-3">
                <h5>Automobile </h5>
            </div>
            <div class="col-md-3">
                <h5>Entertainment </h5>
            </div>
            <div class="col-md-3">
                <h5>Travel and Tourism </h5>
            </div>
        </div>
        <div class="text-center cta_mine txt"> 
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A
                    Meeting</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Schedule a Consultation</span></a>
        </div>
        <div class="row">
            <p class="text-center mt20" style="width: 100%">Connect with our specialists to discover how we can elevate your cryptocurrency marketing efforts.</p>
        </div>
    </div>
</section>


<style type="text/css">
    .pricing-table {
        display: block;
    }

    .pricing-table {
        padding: 0px;
    }

    .fa-check {
        color: green;
    }

    .fa-remove {
        color: red;
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
        background: linear-gradient(#09abe9, #00c5a7);
    }

    .data table th {
        background: #000000;
        font-size: 20px;
        padding: 20px 5px;
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

    a.accordion-toggle.tab_high {
        display: block;
        padding: 11px 5px;
        text-transform: uppercase;
        font-size: 16px;
        background: #47b475 !important;
        color: #fff !important;
        border-bottom: 1px solid #bbb;
        font-weight: bold;
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

<div class="gray_bg">
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
</div>

<style type="text/css">
    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }
</style>
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
        width: 21%;
        border: 1px solid #000;
        border-radius: 10px;
        margin: 5px;
        position: relative;
        cursor: pointer;
        justify-content: center;
        margin-right: 30px;
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
        padding: 11px !important;
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

<style type="text/css">
    .featured {
        background-color: #100f0f;
        width: 100%;
        max-width: 1630px;
        margin: 0 auto;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 0 0 0 80px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        overflow: hidden;
        border-color: transparent
    }

    @media(max-width:992px) {
        .featured {
            padding: 72px 0;
            max-width: 100%;
            border-radius: 40px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: unset;
            -ms-flex-align: unset;
            align-items: unset
        }
    }

    .featured_head {
        width: 100%;
        max-width: 310px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 90px
    }

    @media(max-width:992px) {
        .featured_head {
            max-width: 100%;
            text-align: left;
            padding-left: 16px;
            padding-right: 16px;
            margin: 0 auto 47px
        }
    }

    .featured_head p {
        font-size: 18px;
        line-height: 27px;
        font-weight: 400;
        color: #fff;
        opacity: .6
    }

    @media(max-width:992px) {
        .featured_head p {
            font-size: 16px;
            line-height: 25.6px;
            font-weight: 300
        }
    }

    .featured_content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        overflow-x: hidden;
        max-height: 739px;
        margin-top: -10px;
        margin-bottom: -10px;
        overflow-y: hidden
    }

    @media(max-width:992px) {
        .featured_content {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: 0;
            margin-bottom: 0
        }
    }

    .featured_content_slider {
        width: 100%;
        min-width: 470px
    }

    @media(max-width:992px) {
        .featured_content_slider .slick-track {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            gap: 20px
        }

        .featured_content_slider .slick-slide {
            height: inherit !important
        }

        .featured_content_slider .slick-slide div {
            height: 100%
        }
    }

    .featured_content_slider_box {
        background: #fff;
        padding: 40px;
        border-radius: 20px
    }

    @media(max-width:992px) {
        .featured_content_slider_box {
            width: 100%;
            max-width: 100%
        }
    }

    .featured_content_slider_box picture {
        width: 100%;
        max-width: 180px;
        display: inline-block
    }

    .featured_content_slider_box h3 {
        font-size: 18px;
        line-height: 24px;
        font-weight: 500;
        width: 100%;
        max-width: 302px;
        color: #111;
        margin-bottom: 136px
    }

    @media(max-width:992px) {
        .featured_content_slider_box h3 {
            font-size: 16px;
            line-height: 24px;
            font-weight: 500
        }
    }

    .featured_content_slider_card {
        background: rgba(255, 255, 255, 0.1);
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        width: 100%;
        height: 90px;
        margin-top: 20px;
        margin-bottom: 10px
    }

    @media(max-width:992px) {
        .featured_content_slider_card {
            height: auto;
            max-width: 100%;
            min-width: 250px;
            margin: 0
        }
    }

    .featured_content_slider.slider_second {
        margin-left: 20px;
        margin-right: 20px
    }

    @media(max-width:992px) {
        .featured_content_slider.slider_second {
            margin-left: 0;
            margin-right: 0;
            margin-top: 20px
        }
    }

    .featured_content_slider.slider_threed .featured_content_slider_card {
        margin-top: 10px;
        margin-bottom: 10px
    }

    @media(max-width:992px) {
        .featured_content_slider.slider_threed {
            display: none
        }
    }

    .featured .head_title {
        font-size: 3rem;
        color: #fff;
        margin-bottom: 14px;
    }
</style>
<section class="space-pt bg-dark-half-md tech-padding teck">
    <div class="container">
        <div class="row justify-content-md-center text-center">
            <div class="section-title text-center ">
                <h4 class="section-title">Premier Blockchain Platforms We Leverage</h4>
                <hr>
                <p>We harness cutting-edge blockchain technology to deliver unparalleled solutions.</p>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-sm-12">
                <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/crypto-marketing-services/icons/ethereum.webp') }}" alt="Ethereum"> </div>
                        <a href="#" class="category-title" alt>Ethereum</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/crypto-marketing-services/icons/bnb-chain.webp') }}" alt="BNB Chain"> </div>
                        <a href="#" class="category-title" alt>BNB Chain</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/crypto-marketing-services/icons/solana.webp') }}" alt="Solana"> </div> <a
                            href="#" class="category-title" alt>Solana</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/crypto-marketing-services/icons/polkadot.webp') }}" alt="Polkadot"> </div>
                        <a href="#" class="category-title" alt>Polkadot</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/crypto-marketing-services/icons/tezos.webp') }}" alt="Tezos"> </div> <a
                            href="#" class="category-title" alt>Tezos</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/crypto-marketing-services/icons/cardano.webp') }}" alt="Cardano"> </div> <a
                            href="#" class="category-title" alt>Cardano</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/crypto-marketing-services/icons/polygon.webp') }}" alt="Polygon"> </div> <a
                            href="#" class="category-title" alt>Polygon</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/crypto-marketing-services/icons/Algorand.webp') }}" alt="Algorand"> </div>
                        <a href="#" class="category-title" alt>Algorand</a>
                    </div>

                </div>
                <br>
                <div class="contentall" align="center">
                    {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                        target="_blank" href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
                    <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
                        style="border-radius: 30px !important; text-transform:none !important;">Connect with our Experts</a>
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


<section class="tech-stack gray_bg">
    <div class="container">
        <div class="col-lg-12 center">
            <div class="section-title text-center m-b-30">
                <h3 class="common_h3 sec-tit">Top Platforms for Crypto Coin Marketing</h3>
                <hr>
                <p>Our premier crypto coin marketing solutions, backed by a top-tier digital marketing team, are designed to elevate your business to new heights.
                </p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked"
                style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                <li class="active"><a href="#vtab26" data-toggle="tab">
                        <p>Social Media </p>
                    </a></li>
                <li><a href="#vtab29" data-toggle="tab">
                        <p>Content Platforms</p>
                    </a></li>
                <li><a href="#vtab27" data-toggle="tab">
                        <p>Crypto-Specific Platforms</p>
                    </a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="tab-content technology">
                <div role="tabpanel" class="tab-pane in active" id="vtab26">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/crypto-marketing-services/icons/twitter.webp') }}">
                                <p>Twitter</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/crypto-marketing-services/icons/facebook.webp') }}">
                                <p>Facebook</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/crypto-marketing-services/icons/linkedIn.svg') }}">
                                <p>LinkedIn</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/crypto-marketing-services/icons/reddit.webp') }}">
                                <p>Reddit</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab29">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/crypto-marketing-services/icons/blog.webp') }}">
                                <p>Blogs </p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/crypto-marketing-services/icons/youtube.webp') }}">
                                <p>YouTube </p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/crypto-marketing-services/icons/podcasts.svg') }}">
                                <p>Podcasts</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab27">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy"
                                    src="{{ asset('images/crypto-marketing-services/icons/crypto-exchange.webp') }}">
                                <p>Crypto Exchanges</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/crypto-marketing-services/icons/community.webp') }}">
                                <p>Crypto Forums and Communities</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="welcome-content" style="background: #011542;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="sec_tit underline text-center text-white">Why We Are the Pinnacle of Crypto Coin Marketing</h2>
                <p class="text-center text-white">Promoting crypto projects and captivating buyers is our specialty. As a premier crypto coin marketing firm, we excel in advancing various crypto ventures, from cryptocurrencies and launchpads to ICOs. Our unmatched expertise and innovative digital marketing strategies make us a leader in the field.
                </p>

                <div class="row list_box mt30">
                    <div class="col-md-3">
                        <h5>Highly skilled team</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Results-driven methodology</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Advanced technological strategies</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Seasoned digital marketing experts</h5>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3">
                        <h5>Exceptional value pricing</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Industry-leading experience</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Professional content creators</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Realistic goal setting</h5>
                    </div>
                </div>

            </div>

        </div>

        <div class="contentall" align="center">
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                href="#" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
            <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
                style="border-radius: 30px !important; text-transform:none !important;">Talk to Our Experts</a>
        </div>

    </div>
</section>

{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What Does Crypto Marketing Entail?',
            'ans' => "Crypto marketing involves promoting cryptocurrencies and blockchain projects through various strategies such as digital advertising, content creation, and community engagement to enhance visibility and attract investors."
        ],
        [
            'ques' => 'Which Strategies Are Effective in Crypto Marketing?',
            'ans' => "Effective crypto marketing strategies include influencer partnerships, targeted social media campaigns, SEO, content marketing, and community engagement, all designed to boost visibility and audience interaction in the crypto sector."
        ],
        [
            'ques' => 'How Can You Successfully Reach the Crypto Audience?',
            'ans' => "Reaching the crypto audience involves utilizing data-driven insights and targeted marketing efforts. By focusing on crypto enthusiasts through specialized platforms and communities, you can effectively boost engagement and conversions."
        ],
        [
            'ques' => 'What Is the Importance of Content in Crypto Marketing?',
            'ans' => "Content plays a pivotal role in crypto marketing by educating and engaging the audience. High-quality content, such as articles, blogs, and videos, helps in establishing authority and building trust within the crypto community."
        ],
        [
            'ques' => 'What Metrics Determine the Success of Crypto Marketing Campaigns?',
            'ans' => 'The success of crypto marketing campaigns is assessed through metrics like engagement rates, conversion rates, ROI, and audience growth. Analyzing these metrics provides insights into campaign effectiveness and areas for improvement.'
        ],
        [
            'ques' => 'What Regulatory Issues Should Be Considered in Crypto Marketing?',
            'ans' => "Regulatory issues include compliance with local and international laws related to financial advertising and promotion. Adhering to these regulations ensures legal compliance and maintains project credibility."
        ],
        [
            'ques' => 'What Are the Best Ways to Build a Community Around a Crypto Project?',
            'ans' => "Building a community involves engaging with your audience through platforms like forums and social media. Providing valuable content and fostering open dialogue helps in creating a loyal and active community."
        ],
        [
            'ques' => 'What Are the Key Practices for Effective Crypto Marketing?',
            'ans' => "Key practices for effective crypto marketing include ensuring transparency, targeting the appropriate audience, leveraging data insights, and maintaining consistent communication. These practices enhance the effectiveness and ethical standards of your marketing efforts."
        ],
        [
            'ques' => 'How Can Social Media Be Utilized for Crypto Marketing?',
            'ans' => "Social media can be effectively used by running targeted campaigns, collaborating with influencers, and participating in relevant groups. This approach helps in expanding reach and generating discussions about your crypto project."
        ],
        [
            'ques' => 'What Benefits Does Influencer Marketing Offer in the Crypto Space?',
            'ans' => "Influencer marketing provides credibility and extended reach through respected voices in the crypto community. Influencers can drive engagement, enhance brand visibility, and attract potential investors to your project."
        ],
    ],
])

</div>

<!-- Slick Slider - End -->

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

<script type="02d2e87d49937e2238e69a77-text/javascript">
    /* Set the width of the sidebar to 250px (show it) */
function openNav4() {
  document.getElementById("mySidepanel4").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav4() {
  document.getElementById("mySidepanel4").style.width = "0";
}
</script>


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