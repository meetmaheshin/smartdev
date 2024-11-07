@extends('layouts.static')
    @section('title', 'Decentralized Sports Betting Platform')
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
        background: linear-gradient(180deg, #556471, #4e5b67, #32282f, #1b181f);
        padding-top: 120px;
        /*padding-bottom: 50px;*/
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
        /*     background-image: linear-gradient(45deg, black, #00000052), url(images/ido/bg-3.webp);
        background-size: cover;*/
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

        .Package_list {
            width: 49%;
        }

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

    .banner {
        background: linear-gradient(180deg, #4d7dff, #4d7dff, #4861b1, #001455, #1b181f);
        padding-top: 120px;
        /* padding-bottom: 50px; */
        height: auto;
        background-position: center;
    }
</style>

<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">

            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1 itemprop="name">Revolutionize Your Sports Betting with Decentralized Platform Development</h1>
                                        </div>
                                        <p itemprop="text">Dive into the future of sports betting by developing your own decentralized platform. Leverage this cutting-edge Web3 model to excel in the rapidly transforming market.</p>
                                        <div class="txt"> <a href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important;">CONNECT WITH OUR EXPERTS</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center"> <img class="magic"
                                src="{{ asset('images/decentralized-sports-betting-platform/banner-img.png') }}" alt=" " title=" ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Unleash the Future with Decentralized Sports Betting Platform Development</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center mt20">Sports betting has long been a lucrative industry, fueled by millions of passionate participants. However, traditional sports betting systems are fraught with challenges, making decentralized sports betting platforms an essential innovation.<br><br>
                            Step into the cutting-edge world of Web3 with our top-tier development services, designed to position you ahead of the curve. Our sophisticated Web3 sports betting platforms offer unparalleled features, enabling seamless and secure betting experiences for enthusiasts globally.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center cta_mine txt"> 
                        {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                        <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>ENGAGE WITH OUR EXPERTS</span></a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<div class="common_spacing gray_bg">
    <div class="container">
        <div class=" ">
            <h3 class="sec_tit underline text-center">Innovative Betting Models Our Web3 Sports Betting Platform Delivers</h3>
            <p class="text-center">At the forefront of advanced sports betting platform development, we provide an array of dynamic betting models to elevate your platform. Choose the models that best suit your vision, and we will seamlessly integrate them into your advanced Web3 sports betting application.</p>
        </div>
        <div class="row mt20">
            <div class="container container-center">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/easy-to-use.png') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Risk-Free Bets</strong>Hassle-free betting lets users place bets on two possible outcomes, ensuring a risk-free and profitable experience for all participants.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/rewards.png') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong
                                    style="display:block; font-size: 18px; padding-bottom: 5px;">High-Stakes Parlays</strong>Parlay betting empowers users to wager on multiple outcomes, with the potential for substantial rewards aligned with increased risk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/decisions.png') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Pool Bets</strong>Pool betting distributes rewards as per the collective accuracy of bets across all fixtures within the pool, creating a communal betting experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/sports-bet.png') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong
                                    style="display:block; font-size: 18px; padding-bottom: 5px;">Over/Under Bets</strong>Over/under betting allows users to wager on whether outcomes will exceed or fall short of a number, to secure their winnings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/wheelchair.png') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong
                                    style="display:block; font-size: 18px; padding-bottom: 5px;">Handicaps</strong>Handicap betting provides a competitive edge by allowing players to define margins, balancing the odds in games with clear favorites.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/bet.png') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong
                                    style="display:block; font-size: 18px; padding-bottom: 5px;">Head-to-Head Bets</strong>Head-to-head betting focuses on choosing between two options where ties are not possible, offering a straightforward yet engaging betting experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ret-inv" class="common_spacing" style="background-image: linear-gradient( 311deg , #273976 0%, #020e28);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2 class="text-white">Elevate Your Decentralized Sports Betting Platform with Expert Developers!</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                        {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                            href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>ENGAGE WITH OUR SPECIALISTS</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="service-section web-servic pad-tb">
    <div class="container">
        <div class="section-header underline text-center">
            <h3 class="text-white title-th">Features for Transformative Crypto Sports Betting Platform</h3>
        </div>
        <p class="text-white text-center" style="position: relative;">Our expertise in crypto sports betting platform development equips your software with advanced features designed to drive success and deliver exceptional user experiences. Here’s what sets our solution apart:</p>
        <div class="row upset link-hover shape-num justify-content-center">
            <div class="container container-center">
                <div class="col-lg-4 col-sm-4 equalize mt30  shape-loc wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="box4"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="s-card-icon"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/account.png') }}" alt=" ">
                        </div>
                        <p> <strong style="display:block; font-size:18px; margin-bottom: 5px;">Seamless User Accounts</strong>Users can effortlessly register through various methods and manage bets and rewards using a comprehensive account dashboard.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="box4"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="s-card-icon"><img
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/exchange.png') }}" class="lazy"
                                alt=" "></div>
                        <p> <strong
                                style="display:block; font-size:18px;margin-bottom: 5px;">Decentralized Exchanges</strong>Our platform enables bettors to engage in decentralized exchanges, allowing them to bet directly against one another, bypassing traditional centralized sportsbooks.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="box4"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="s-card-icon"><img
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/sports.png') }}" class="lazy"
                                alt=" "></div>
                        <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Dynamic Betting Slips</strong>Bettors can aggregate the wagers into organized slips for specific sports events, facilitating the placement of diverse bet types within the app.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="box4"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="s-card-icon"><img
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/live-streaming.png') }}"
                                class="lazy" alt=" "></div>
                        <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Real-Time Live Updates</strong>Stay ahead with real-time score updates and video streaming of ongoing sports matches, enabling users to adjust their bets with up-to-the-minute information.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="box4"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="s-card-icon"><img
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/bet.png') }}" class="lazy"
                                alt=" "></div>
                        <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Advanced Bet Tracking</strong>Monitor bets with our real-time advanced tracking system, providing bettors with current insights into their bets' performance and allowing for strategic adjustments.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="box4"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="s-card-icon"><img
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/withdraw.png') }}" class="lazy"
                                alt=" "></div>
                        <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Instant Withdrawals</strong>Users can swiftly withdraw rewards directly to their wallets through a dedicated portal, with no waiting periods or restrictions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="box4"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="s-card-icon"><img
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/loyalty.webp') }}" class="lazy"
                                alt=" "></div>
                        <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Loyalty Rewards</strong>Our application features an integrated loyalty program, allowing users to earn rewards and access in-app benefits with advanced experiences.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="box4"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="s-card-icon"><img
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/mechanisms.webp') }}"
                                class="lazy" alt=" "></div>
                        <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Equitable System</strong>Our decentralized betting platform is designed to foster a fair and transparent betting environment, ensuring exceptional experiences for all users regardless of outcomes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="box4"
                        style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="s-card-icon"><img
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/platform.webp') }}" class="lazy"
                                alt=" "></div>
                        <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Multi-Platform Compatibility</strong>Our Web3 betting platform operates flawlessly across various devices, including web browsers and mobile applications, enabling users to engage anytime, anywhere.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row mt20">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20">Tackle Top Challenges with Top-tier Sports Betting Platform Development</h2>
                </div>
                <p>Despite the vast market size of traditional sports betting, it is plagued by several significant issues. Our P2P sports betting platform development addresses these challenges by leveraging advanced decentralized technologies and solutions.</p>
            </div>
        </div>
        <div class="row mt20 container-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/decentralized-sports-betting-platform/icons/registration.png') }}"></div>
                    <div class="icon_content">
                        <h4>Cumbersome Registration Processes</h4>
                        <p class="c-grey"> Current platforms impose lengthy registration requirements, including extensive KYC procedures and mandatory bank account linkages, causing unnecessary friction for users.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="icon-text-1-group">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/ux-design.png') }}"></div>
                        <div class="icon_content">
                            <h4>Complex User Experience</h4>
                            <p class="c-grey">Traditional sports betting sites often feature convoluted interfaces and redundant processes, making navigation and access unnecessarily difficult for users.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="icon-text-1-group">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/liquidity.webp') }}"></div>
                        <div class="icon_content">
                            <h4>Limited Liquidity</h4>
                            <p class="c-grey">Many conventional betting applications suffer from restricted liquidity pools, preventing users from placing higher stakes on sports events.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="icon-text-1-group">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/mechanisms.webp') }}"></div>
                        <div class="icon_content">
                            <h4>Unfair Practices</h4>
                            <p class="c-grey">Existing platforms frequently engage in unfair practices, including manipulative mechanisms and restrictive conditions that hinder a fair betting experience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="icon-text-1-group">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/crowd-fund.webp') }}"></div>
                        <div class="icon_content">
                            <h4>Restricted Fund Access</h4>
                            <p class="c-grey">Numerous betting sites impose withdrawal delays, preventing users from accessing their funds promptly when they wish to withdraw.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="icon-text-1-group">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/risk-free.webp') }}"></div>
                        <div class="icon_content">
                            <h4>Counterparty Risks</h4>
                            <p class="c-grey">In extreme cases, betting platforms may become non-operational, potentially leaving users' funds unrecoverable and their bets unresolved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="text-center cta_mine txt"> 
                {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                    href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>CONNECT WITH OUR EXPERTS</span></a> 
            </div>
        </div>
    </div>
</section>
<section class="perfect-script common_spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="common_h3 text-center font-wei">Breakthrough Benefits of Our Advanced Sports Betting Platform</h2>
                    <hr class="mb40">
                    <p class="text-center">To address the challenges faced by traditional sports betting platforms, we have developed a groundbreaking decentralized sports betting software. Our advanced solution is designed to deliver exceptional user experiences and ensure fair play.</p>
                </div>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy"
                            src="{{ asset('images/decentralized-sports-betting-platform/icons/easy-to-use.png') }}">
                    </div>
                    <div class="content">
                        <h4>Seamless Registration</h4>

                        <p>Users can effortlessly sign up using crypto wallets, social accounts, or email addresses, simplifying the entry process and enhancing accessibility.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" src="{{ asset('images/decentralized-sports-betting-platform/icons/withdraw.png') }}">
                    </div>
                    <div class="content">
                        <h4>Immediate Withdrawals </h4>
                        <p>Quickly and securely withdraw winnings to crypto wallets at any time, with no restrictions, ensuring a more gratifying experience.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" src="{{ asset('images/decentralized-sports-betting-platform/icons/crowd-fund.webp') }}">
                    </div>
                    <div class="content">
                        <h4>Robust Fund Security</h4>
                        <p>Funds are securely stored in cold storage with continuously updated records, providing top-tier protection and transparency.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" src="{{ asset('images/decentralized-sports-betting-platform/icons/global.png') }}">
                    </div>
                    <div class="content">
                        <h4>Universal Accessibility</h4>
                        <p>Access the app from anywhere, eliminating the need for cumbersome KYC processes and bank account linkages.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" src="{{ asset('images/decentralized-sports-betting-platform/icons/experiences.png') }}">
                    </div>
                    <div class="content">
                        <h4>Immersive Betting Experience</h4>
                        <p>Enjoy a highly interactive and engaging betting environment with live betting features and dynamic interactive options that captivate users.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" src="{{ asset('images/decentralized-sports-betting-platform/icons/bet.png') }}">
                    </div>
                    <div class="content">
                        <h4>Transparent On-Chain Betting</h4>
                        <p>All betting activities are recorded on the blockchain, making any manipulation impossible and ensuring that all changes are publicly visible.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<style type="text/css">
    /*------------ Complimentary-Features Style -----------*/
    .complimentary-features ul li {
        text-align: left !important;
    }

    .complimentary-features {
        padding: 60px 0px;
        background: #0e2367;
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
        text-align: left !important;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.2) 0%, rgba(38, 44, 49, 0) 100%);
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

    .complimentary-features ul li .contents {
        background: transparent;
    }

    .complimentary-features ul li .contents p {
        color: #fff;
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
        text-align: left !important;
        padding-bottom: 7px;
    }

    .complimentary-features ul li h3 {
        display: block;
        font-size: 20px;
        color: #fff;
        font-weight: bold;
        text-align: left !important;
        padding-bottom: 7px;
    }

    /*------------ Ipad View Style -----------*/
    @media only screen and (min-width: 768px) and (max-width: 899px) {
        .complimentary-features ul li {
            width: 100%;
        }

        .welcome-content ul li {
            width: 32%;
        }
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

        .complimentary-features ul li .contents {
            width: 100%;
            clip-path: none;
            border-radius: 0px;
            padding: 15px;
        }

        .integration-items {
            min-height: auto;
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

        .welcome-content ul li {
            width: 100%;
        }
    }
</style>
<section class="complimentary-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline text-white"> How Our Advanced Web3 Technology Reshapes Sports Betting</h2>
                </div>
                <p class="text-white">Our expert team designs Web3 sports betting platforms that harness the power of cutting-edge decentralized technologies to deliver unparalleled user experiences.
                </p>
            </div>
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/decentralized.png') }}" />
                        </div>
                        <div class="contents">
                            <h3>Advanced Decentralized Storage</h3>
                            <p>
                                Our platform utilizes cutting-edge decentralized storage to securely manage betting records, effectively mitigating the risks of data breaches and cyber-attacks.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/smart-contracts.webp') }}" />
                        </div>
                        <div class="contents">
                            <h3>Automated Smart Contracts</h3>
                            <p>Every action within our Web3 sports betting platform is governed by smart contracts, ensuring unparalleled transparency and reliability.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/profile.png') }}" /></div>
                        <div class="contents">
                            <h3>Self-Managed Decentralized Profiles</h3>
                            <p>
                                Leveraging Web3 technology, user profiles are fully decentralized, providing bettors with complete control over their funds and bets without intermediary involvement.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/payment-gateways.png') }}" />
                        </div>
                        <div class="contents">
                            <h3>Direct Decentralized Transactions</h3>
                            <p>Our platform features decentralized payment gateways that enable direct cryptocurrency transactions between users via blockchain technology.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/exchange.png') }}" /></div>
                        <div class="contents">
                            <h3>Integrated Decentralized Exchange</h3>
                            <p>The platform includes a built-in decentralized exchange that allows users to place bets using various tokens effortlessly, enhancing the overall betting experience.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<div class="common_spacing">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title-th sec_tit underline">Launch Your Own Whitelabel Web3 Sports Betting Software</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p class="text-center mt20">For ambitious Web3 entrepreneurs looking to quickly enter the market, our Whitelabel decentralized sports betting platform is the perfect solution. Our ready-to-use package lets you launch your custom platform in just days, with all the features you need.<br><br>
                    Our team will design a platform that covers many sports to attract a global audience. We ensure your application stands out with unique branding and custom features. Contact our experts to see how our pre-built crypto sports betting solution can help you succeed!

                </p>
            </div>
            <div class="clearfix"></div>
            <div class="text-center cta_mine txt"> 
                {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                    href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>ENGAGE WITH OUR EXPERTS</span></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div id="ret-inv" class="common_spacing" style="background-image: linear-gradient( 311deg , #273976 0%, #020e28);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2 class="text-white">Accelerate Your Launch with Our Pre-Built Decentralized Web3 Sports Betting Solution!</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                        {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                            href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
        background: #ffffff;
        margin-bottom: 20px;
        line-height: 75px;
        /*padding-left: 6px;*/
        box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
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
        border: 1px solid #cdcdcd;
        padding-top: 40px;
        padding-bottom: 40px;
        transition: .3s;
        position: relative;
        margin-bottom: 30px;
        border-radius: 10px;
    }

    .awesome-features-wrapper::before {
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
    }

    .awesome-features-icon-img {
        margin-bottom: 22px;
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
        padding: 0 41px;
    }
</style>
<style type="text/css">
    .perfect-script-items1 {
        -webkit-box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        padding: 25px 15px;
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
        width: 88%;
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
    .d_card {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: end;
        /*align-items: flex-end;*/
        overflow: hidden;
        /*padding: 1rem;*/
        width: 100%;
        text-align: center;
        color: #000;
        background-color: #fff;
        /*box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);*/
        border-radius: 15px;
        border: 1px solid #eee;
        min-height: 130px;
        margin-bottom: 20px;
    }

    @media (min-width: 600px) {
        .d_card {
            /*height: 390px;*/
        }
    }


    .content {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
        width: 100%;
        padding: 1rem;
        -webkit-transition: -webkit-transform var(--d) var(--e);
        transition: -webkit-transform var(--d) var(--e);
        transition: transform var(--d) var(--e);
        transition: transform var(--d) var(--e), -webkit-transform var(--d) var(--e);
        z-index: 1;
    }

    .content p {
        margin-bottom: 0;
    }

    .content>*+* {
        margin-top: 1rem;
    }

    .heading {
        font-size: 21px;
        font-weight: bold;
        line-height: 1.2;
        color: #000;
    }

    .data-content {
        /*  font-family: var(--font-serif);
            font-size: 1.125rem;
            font-style: italic;
            line-height: 1.35;*/
    }

    @media (hover: hover) and (min-width: 600px) {
        .d_card:after {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .content {
            /*-webkit-transform: translateY(calc(100% - 4.5rem));
                transform: translateY(calc(100% - 4.5rem));*/
        }

        .d_card:hover {
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
            background: #1e7a45 !important;
            color: #fff !important;
        }

        .d_card:hover .heading {
            color: #fff !important;
        }

        .d_card:hover:before,
        .d_card:focus-within:before {
            -webkit-transform: translateY(-4%);
            transform: translateY(-4%);
        }

        .d_card:hover:after,
        .d_card:focus-within:after {
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .d_card:hover .content,
        .d_card:focus-within .content {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .d_card:hover .content>*:not(.heading),
        .d_card:focus-within .content>*:not(.heading) {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
            -webkit-transition-delay: calc(var(--d) / 8);
            transition-delay: calc(var(--d) / 8);
        }

        .d_card:focus-within:before,
        .d_card:focus-within:after,
        .d_card:focus-within .content,
        .d_card:focus-within .content>*:not(.heading) {
            -webkit-transition-duration: 0s;
            transition-duration: 0s;
        }
    }
</style>
</style>
<style type="text/css">
    <style type="text/css">.perfect-script-items {
        padding: 30px 15px 10px;
        border-radius: 4px;
        background-color: #fff;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        display: flex;
        min-height: 206px;
        box-shadow: 11px -1px 11px #00000030;
        margin-bottom: 20px;
    }

    .perfect-script-items .icon {
        width: 70px;
        height: 70px;
        margin: 20px auto 50px;
        line-height: 75px;
        position: relative;
        border-radius: 50%;
        background-image: linear-gradient(293deg, #47b475 0%, #47b475 100%);
        color: #fff;
        font-size: 40px;
        z-index: 9;
        float: left;
    }

    .perfect-script-items .icon img {
        width: 45px;
        margin-top: -7px;
        -webkit-filter: brightness(0) invert(1);
        filter: brightness(0) invert(1);
    }

    .perfect-script-items .content {
        display: block;
        float: left;
        width: 80%;
        padding-left: 30px;
    }

    .perfect-script-items h3 {
        font-size: 16px;
        line-height: 22px;
        text-align: left;
    }

    .perfect-script-items p {
        text-align: left;
    }

    .app-overview {
        padding: 0px 10px;
        cursor: pointer;
        margin-bottom: 2px;
    }

    .app-overview .media {
        min-height: 150px;
    }

    .app-overview .media .media-left {
        padding-right: 0px;
        overflow: hidden;
    }

    .app-overview .media .media-left .app-icon {
        width: 94px;
        height: 94px;
        border-radius: 50%;
        left: 12px;
        background: #47b475;
        position: relative;
        text-align: center;
        transition: all 0.3s linear;
    }

    .app-icon img {
        width: 50px;
        margin-top: 25px;
        /*filter: brightness(0) invert(1);*/
    }

    .app-overview .media .media-body {
        padding-left: 33px;
    }

    .media-body h4 {
        font-weight: 700;
    }
</style>
<section class="common_spacing gray_bg">
    <div class="container">
        <div class="">
            <div class="section-title underline text-center">
                <div class="sec_tit">
                    <h2>Transformative Advantages of Our Crypto-based Sports Betting Software</h2>
                </div>
            </div>
            <p class="text-center">Our crypto sports betting platforms are designed to deliver game-changing benefits that revolutionize sports betting within the Web3 landscape. With a strong focus on Web3 technology and principles, our platforms offer an unprecedented user experience.</p>
            <div class=" feature-block mt30">
                <div class="col-sm-6 ">
                    <div class="app-overview equal-height">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center">
                                    <img class="lazy"
                                        src="{{ asset('images/decentralized-sports-betting-platform/icons/transactions.png') }}">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Fortified Security</h4>
                                <p>Harness the power of blockchain for secure transactions, ensuring smooth and protected fund transfers between users and markets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center">
                                    <img class="lazy"
                                        src="{{ asset('images/decentralized-sports-betting-platform/icons/bet.png') }}">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Tailored Betting Experiences</h4>
                                <p>Customize your betting options to align with your brand’s identity, offering a unique and personalized user interface and experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center">
                                    <img class="lazy"
                                        src="{{ asset('images/decentralized-sports-betting-platform/icons/events.webp') }}">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Wide-Ranging Events</h4>
                                <p>Support for a broad spectrum of both real-world and virtual sports events ensures extensive engagement and user attraction.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="app-overview equal-height">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center">
                                    <img class="lazy"
                                        src="{{ asset('images/decentralized-sports-betting-platform/icons/global.png') }}">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Regulatory Assurance</h4>
                                <p>Our platforms adhere to stringent global and regional legal standards, providing users with a compliant and secure betting environment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center">
                                    <img class="lazy"
                                        src="{{ asset('images/decentralized-sports-betting-platform/icons/integration.png') }}">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Seamless Integrations</h4>
                                <p>Easily connect with key third-party services, such as wallets, payment gateways, sports scoreboards, and cryptocurrency exchanges.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center">
                                    <img class="lazy"
                                        src="{{ asset('images/decentralized-sports-betting-platform/icons/improved-control.webp') }}">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Total Fund Autonomy</h4>
                                <p>Empower bettors with full control over their funds, eliminating intermediary fees and purchase barriers for a more transparent experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    /*-- Technology --*/
    .technologies {
        background: #1c0037;
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
        background-image: linear-gradient(180deg, #2d3f7a 0%, #12276a);
        margin: -1px;
        border: 1px solid #fff;
    }

    .technologies ul li img {
        height: 50px;
    }

    .technologies ul li p {
        margin-bottom: 0 !important;
    }
</style>
<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row mt20">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20">Our Expertise in Developing Advanced Web3 Sports Betting Solutions</h2>
                </div>
                <p>The opportunity to innovate in the Web3 sports betting arena is now. Our team is ready to guide you in launching a cutting-edge blockchain-based sports betting application.
                </p>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/decentralized-sports-betting-platform/icons/sports.png') }}"></div>
                    <div class="icon_content">
                        <h4>Dexsport</h4>
                        <p class="c-grey">Develop a versatile decentralized sports betting platform similar to Dexsport, featuring a broad selection of events across physical and virtual sports, coupled with a smooth user experience on top blockchain networks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="icon-text-1-group">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/casino.png') }}"></div>
                        <div class="icon_content">
                            <h4>LunaFi</h4>
                            <p class="c-grey">Create a decentralized betting framework like LunaFi, combining sports wagers, online casino games, and DeFi features, all supported by strong community-based native tokens.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="icon-text-1-group">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/bet.png') }}"></div>
                        <div class="icon_content">
                            <h4>BetDEX</h4>
                            <p class="c-grey">Design a sophisticated decentralized sports betting exchange inspired by BetDEX, offering an exceptional betting environment with user-friendly interfaces, high liquidity, and open user access.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="text-center cta_mine txt"> 
                {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                    href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                    <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    /*-- Welcome Content --*/
    .welcome-content2 {
        background-image: linear-gradient(180deg, #384981 0%, #0e2367);
    }

    .welcome-content2 ul {
        display: flex;
        flex-wrap: wrap;
        margin: 0px;
        padding: 0px;
        color: #000;
        justify-content: center;
    }

    .welcome-content2 ul li {
        width: 25%;
        margin: 0.5%;
        border: 1px solid #eee;
        display: grid;
        grid-template-columns: 30% 70%;
        padding: 10px;
        align-items: center;
        text-align: left;
    }

    .welcome-content2 ul li .icons {
        width: 50px;
        margin-right: 10px;
        padding-right: 10px;
        border-right: 1px solid #eee;
    }

    .welcome-content2 ul li p {
        line-height: 20px;
        padding: 0px;
        margin: 0px;
    }

    .welcome-content2 ul li {
        width: 25%;
        margin: 0.5%;
        border: 1px solid #eee;
        display: grid;
        grid-template-columns: 30% 70%;
        padding: 10px;
        align-items: center;
        text-align: left;
    }
    }
</style>
<section class="welcome-content2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                <h3 class="sec_tit underline text-center text-white">Innovative Technology Stack for Web3 Sports Betting dApps</h3>
                <p class="text-center text-white" style="font-size: 16px;">We leverage cutting-edge technologies to deliver top-tier crypto token development services, ensuring your Web3 sports betting dApps are built with excellence.</p>
            </div>
            <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/web3.png') }}"></div>
                        <p class="white">Web3 JS</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/node-js_logo.webp') }}"></div>
                        <p class="white">Node JS</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/angular.webp') }}"></div>
                        <p class="white">Angular JS</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/express-js1.webp') }}"></div>
                        <p class="white">Express JS</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/solidity.webp') }}"></div>
                        <p class="white">Solidity</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/go-lang.webp') }}"></div>
                        <p class="white">Go</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/rust-w.webp') }}"></div>
                        <p class="white">Rust</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/laravel.webp') }}"></div>
                        <p class="white">Laravel</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/truffle.webp') }}"></div>
                        <p class="white">Truffle</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/ganache.webp') }}"></div>
                        <p class="white">Ganache</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/metamask.webp') }}"></div>
                        <p class="white">MetaMask</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/aws-w.webp') }}"></div>
                        <p class="white">AWS</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/mongodb.webp') }}"></div>
                        <p class="white">MongoDB</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/ipfs.webp') }}"></div>
                        <p class="white">IPFS</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/pinata.webp') }}"></div>
                        <p class="white">Pinata</p>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/decentralized-sports-betting-platform/icons/filecoin.webp') }}"></div>
                        <p class="white">Filecoin</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    .parallax-1 p,
    #we-provide ul li {
        color: #000;
    }
</style>
<section id="we-provide" class="common_spacing gray_bg">
    <div class="container">
        <div class="section-title text-center">
            <h4 class="underline">Why Choose Our Premier Web3 Sports Betting dApp Development Team?</h4>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
            <p class="text-center">As a trailblazer in Web3 sports betting dApp development, we deliver exceptional services that transform your vision into a groundbreaking reality. Our expert team employs advanced technologies to develop your Web3 sports betting application from initial concept to successful launch, guaranteeing a flawless and impactful experience.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <ul class="ul-style-3" style="padding-left: 20px;;margin-top: 0;">
                <li><i class="fa fa-star list-icon"></i>Over 15 Years of Industry Expertise</li>
                <li><i class="fa fa-star list-icon"></i>A Team of 150+ Blockchain Specialists</li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <ul class="ul-style-3" style="padding-left: 20px;;margin-top: 0;">
                <li><i class="fa fa-star list-icon"></i>Comprehensive Post-Launch Support</li>
                <li><i class="fa fa-star list-icon"></i>State-of-the-Art Technology Solutions</li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <ul class="ul-style-3" style="padding-left: 20px;;margin-top: 0;">
                <li><i class="fa fa-star list-icon"></i>On-Time Project Delivery</li>
                <li><i class="fa fa-star list-icon"></i>Stunning, User-Centric Designs</li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <ul class="ul-style-3" style="padding-left: 20px;;margin-top: 0;">
                <li><i class="fa fa-star list-icon"></i>Top-Tier Security Measures</li>
            </ul>
        </div>
    </div>
</section>
{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What is Prompt Engineering?',
            'ans' => "Prompt engineering refers to the art of crafting and optimizing inputs to maximize the effectiveness of language models and AI systems, ensuring they produce more accurate and relevant outputs."
        ],
        [
            'ques' => 'Which Leading LLMs Benefit from AI Prompt Engineering?',
            'ans' => "AI prompt engineering is effectively applied to major large language models (LLMs) like GPT-4, GPT-3, BERT, and T5, enhancing their ability to generate precise and contextually appropriate responses."
        ],
        [
            'ques' => 'What Sectors Make Use of Prompt Engineering?',
            'ans' => "Prompt engineering is employed across diverse sectors such as technology, healthcare, finance, and marketing, where it enhances customer interactions, streamlines processes, and refines data analysis."
        ],
        [
            'ques' => 'Is Investing in GenAI Prompt Engineering a Good Idea?',
            'ans' => "Investing in generative AI prompt engineering is a wise choice, as it enhances the performance and accuracy of AI models, leading to improved outcomes, greater user satisfaction, and a stronger competitive edge."
        ],
        [
            'ques' => 'Where Can I Locate a Top AI Prompt Engineering Team?',
            'ans' => 'To find a leading AI prompt engineering team, seek out specialized companies with proven expertise in advanced AI technologies or get referrals from industry professionals with successful prompt engineering implementations.'
        ],
    ],
])
</div>
<script src="js/jquery.min.js" type="5dcff6fed30b7b74977cbd0d-text/javascript"></script>
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
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
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
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
<script src="js/vendor.js" type="5dcff6fed30b7b74977cbd0d-text/javascript"></script>
<script src="js/plugins.js" type="5dcff6fed30b7b74977cbd0d-text/javascript"></script>
<script src="js/main.js" type="5dcff6fed30b7b74977cbd0d-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="5dcff6fed30b7b74977cbd0d-text/javascript"></script>
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
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
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
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
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
    $('.view_pricing').click(function() {
            $('html, body').animate({
                scrollTop: $('#pricing-section').offset().top
            }, 2000);
        });
</script>
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
    var url = window.location.href;
        $('#url').val(url);
</script>
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
    $(".pricing-body").mCustomScrollbar({
            theme: "minimal"
        });
</script>
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
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
                    data-cf-modified-5dcff6fed30b7b74977cbd0d->
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/decentralized-sports-betting-platform">
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
<script type="5dcff6fed30b7b74977cbd0d-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="5dcff6fed30b7b74977cbd0d-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="5dcff6fed30b7b74977cbd0d-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
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

<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
    window.__lc = window.__lc || {};
        window.__lc.license = 9464790;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>

<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
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
<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
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




<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
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


<script type="5dcff6fed30b7b74977cbd0d-text/javascript">
    $(".crypto-popup").click(function(e) {
            $('crypto-popup').addClass('fixedPosition full-width');
            $(".login-popup").addClass('show');
            e.stopPropagation();
        });
</script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="5dcff6fed30b7b74977cbd0d-|49" defer></script>
</div>

@endsection