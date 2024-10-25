@extends('layouts.static')
    @section('title', 'BRC-20 Token Development')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
@section('content')

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
        background-image: url(images/chatgpt-applications-development/bg.webp);
        background-size: cover;
        padding-top: 165px;
        padding-bottom: 50px;
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
        background: linear-gradient(30deg, #451368, #24126A, #42E8E0);
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
    }

    .banner_content .contentall {
        margin-top: 45px;
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
        background: #117dff !important;
    }

    .nectar-button {
        background: #117dff !important;
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
            /*                background: #000000ba;*/
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
            margin-right: 20px !important;
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
            margin-right: 20px !important;
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


    /*-- Technology --*/
    .technologies {
        background: linear-gradient(191deg, #341b7c, #24126A, #42E8E0);
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
        border: 1px solid #fff;
    }

    /*.technologies ul li img {height: 60px;}*/
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

    /*-- Technology --*/
    .technologiess2 {
        background: #f2f2f2;
        padding: 50px 0;
    }

    .technologiess2 ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .technologiess2 ul li {
        width: 21%;
        text-align: center;
        font-size: 16px;
        padding: 15px;
        background: #0d3881;
        margin: -1px;
        border: 1px solid #fff;
    }

    .technologiess2 ul li img {
        height: 50px;
    }

    .technologiess2 ul li p {
        margin-bottom: 0 !important;
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
        border: 4px solid #2890dc;
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

    p strong {
        color: #000;
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .welcome-content ul li {
            width: 100%;
        }

        .welcome-content1 ul li {
            width: 100%;
        }

        .teck .category-grid-style-01 .category-item {
            width: 30%;
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

        .travel-app-items .icons {
            margin-bottom: 0px;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 899px) {
        .welcome-content ul li {
            width: 32%;
        }

        .welcome-content1 ul li {
            width: 32%;
        }

        .complimentary-features ul li {
            width: 100%;
        }

        .travel-app-items .icons,
        .travel-app-items1 .icons {
            margin-bottom: auto;
        }
    }

    @media (max-width: 360px) {
        #ico .banner_content {
            top: 70% !important;
        }
    }

    @media (max-width: 767px) {
        .stats {
            min-height: 140px;
        }
    }


    .category-grid-style-04 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        /*    background: #2890dc;*/
        -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        border-radius: 5px;
    }

    .teck .category-grid-style-04 .category-item {
        padding: 30px;
        text-align: center;
        width: 14.27%;
        border-right: 1px solid #eee;
        border-left: 1px solid #eee;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
        position: relative;
        cursor: pointer;
    }

    .teck .category-grid-style-04 .category-item {
        padding: 10px !important;
    }

    .teck .category-grid-style-04 .category-item:before {
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

    .teck .category-grid-style-04 .category-item {
        padding: 30px;
        text-align: center;
        width: 24.90%;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
        position: relative;
        cursor: pointer;
    }

    .teck .category-grid-style-04 .category-item .category-icon {
        color: #333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px;
        position: relative;
        z-index: 2;
    }

    .teck .category-grid-style-04 .category-item .category-icon {
        margin-bottom: 0 !important;
    }

    .teck .category-grid-style-04 .category-item .category-title {
        color: #fff;
        font-weight: 700;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
        font-size: 16px;
    }

    .teck .category-icon img {
        padding: 5px;
    }

    .teck .category-icon img {
        height: 80px !important;
    }

    @media (min-width: 320px) and (max-width: 768px) {
        .category-grid-style-04 .category-item {
            width: 33% !important;
        }

        .teck .category-grid-style-04 .category-item {
            width: 50% !important;
        }
    }

    .bg-dark-half-md1 {
        background: linear-gradient(191deg, #341b7c, #24126A, #42E8E0);
        padding: 100px 0;
    }




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
        padding: 15px 115px 15px 15px;
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
        background: linear-gradient(to bottom, #019afd, #321a7a);
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
        background: linear-gradient(163deg, #451368, #24126A, #42E8E0);
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
        background: linear-gradient(to right bottom, #321a7a 49%, transparent 50%);
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
        text-align: left;
    }

    .pro_line .description {
        color: #333;
        font-size: 15px;
        letter-spacing: 1px;
        margin: 0;
        text-align: left;
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
                        class="btn" data-cf-modified-52d1b6154ffb198628c3d0f7->Submit</button>
                </form>
                <div class="social">

                    <a rel="nofollow" aria-label="calendly" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calender" aria-hidden="true"
                            title="calendly"></i> Schedule A Meeting &nbsp;</a>
                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#f29b9c949db2909e9d9199919a939b9c938282949391869d808bdc919d9f"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="52d1b6154ffb198628c3d0f7-text/javascript">
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
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left" style="margin-top: 50px;">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1>Banner heading- Launch Your BRC-20 Token with Our Development Solutions
                                            </h1>
                                        </div>
                                        <p itemprop="text">Launch your custom token easily with our BRC-20 development
                                            services. Build your token on the Bitcoin blockchain to improve your
                                            operational efficiency.</p>
                                        <div class="txt">
                                            <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important; text-transform: capitalize !important; margin-left: 0px;">Create
                                                your token today</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center"> <img class="magic"
                                src="{{ asset('images/brc-20-token-development/banner-img1.webp') }}"
                                alt="BRC-20 Token Development Solutions" title="BRC-20 Token Development Solutions">
                        </div>
                        {{-- <div class="col-md-6 col-sm-12 col-xs-12 text-center"> <img class="magic"
                                src="https://www.turnkeytown.com/img/brc20-token-development-company/brc20-img2.webp"
                                alt="BRC-20 Token Development Solutions" title="BRC-20 Token Development Solutions">
                        </div> --}}
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
        background: #300fac;
    }

    #counter-stats .stats:nth-child(2) {
        background: #1654df;
    }

    #counter-stats .stats:nth-child(3) {
        background: #300fac;
    }

    #counter-stats .stats:nth-child(4) {
        background: #1654df;
    }

    /* AUTHOR LINK */
</style>
@include('static.stats')
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
@include('static.client-list')
<div class="common_spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Pioneering BRC-20 Token Services for Future-Ready Businesses
                    </h2>
                </div>
                <p class="text-center mt20">At our esteemed BRC-20 token development company, we offer dependable
                    solutions for tokenizing on the Bitcoin blockchain. BRC-20 tokens utilize Bitcoin’s robust security
                    and cost advantages over Ethereum. Our expert team provides comprehensive services to help
                    businesses create BRC-20 tokens securely and economically for various applications. Leveraging the
                    current potential of the BRC-20 standard, we are at the forefront of transforming tokenization on
                    the Bitcoin network.
                </p>
            </div>
        </div>
    </div>
    <div class="contentall" align="center">
        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
            href="#" data-color-override="false" data-hover-color-override="false"
            data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> --}}
        <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
            style="border-radius: 30px !important; text-transform:none !important;">Consult with Our Specialists</a>
    </div>
</div>

@include('static.six-card-section', [
    'title' => 'Our End-to-End BRC-20 Token Development and Support',
    'desc' => "Our experienced team offers a wide range of BRC-20 token development services designed to boost your
    project's effectiveness.",
    'cards' => [
        [
            'title' => 'BRC-20 Token Consultation',
            'desc' => "Get expert advice on the crypto market and BRC-20 tokens. We provide detailed guidance on every step of
            creating BRC-20 tokens.",
            'image' => 'brc-20-token-development/icons/consulting.webp'
        ],
        [
            'title' => 'BRC-20 Token Creation',
            'desc' => "We carefully design your BRC-20 token for optimal performance and accessibility. Our team analyzes market
            trends to ensure a high-quality user experience.",
            'image' => "brc-20-token-development/icons/creation.webp"
        ],
        [
            'title' => 'BRC-20 Token Wallet Development',
            'desc' => 'We help you securely store and manage your BRC-20 tokens with advanced, feature-rich wallets tailored to your
            needs.',
            'image' => 'brc-20-token-development/icons/wallet.png'
        ],
        [
            'title' => 'BRC-20 Token Listing',
            'desc' => "Increase your token's visibility by listing it on major exchange platforms. Our team ensures your token
            stands out in the crypto community.",
            'image' => 'brc-20-token-development/icons/listing.png'
        ],
        [
            'title' => 'Support and Maintenance',
            'desc' => 'We provide ongoing support and maintenance, monitoring the BRC-20 ecosystem to keep your token running
            smoothly and address any technical issues.',
            'image' => 'brc-20-token-development/icons/maintenance.png'
        ],
    ],
])
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
        color: #0d3881;
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
<div class="common_spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Key Benefits of Our BRC-20 Token Development</h2>
                </div>
                <p class="text-center">We focus on delivering features that perfectly match your objectives with our
                    BRC-20 crypto token solutions.</p>
            </div>
            <div class="row mt40">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb10">
                    <ul class="step-points">
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/brc-20-token-development/icons/digital-assets.webp') }}" /></div>
                            <div class="step-points-content">
                                <h3>Versatile Functionality</h3>
                                <p>Our BRC-20 tokens cater to various needs, including payments, fundraising, and
                                    tokenizing real-world assets like art and real estate.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb10">
                    <ul class="step-points">
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/brc-20-token-development/icons/liquidity.webp') }}" /></div>
                            <div class="step-points-content">
                                <h3>Fungibility</h3>
                                <p>Each BRC-20 token is uniform and interchangeable, ensuring smooth transactions and
                                    increased liquidity in the crypto world.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt40">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb10">
                    <ul class="step-points">
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/brc-20-token-development/icons/tokens.png') }}" /></div>
                            <div class="step-points-content">
                                <h3>Token Transfer</h3>
                                <p>We design BRC-20 tokens for easy peer-to-peer transfers using Bitcoin wallets,
                                    streamlining transactions in decentralized apps and exchanges.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb10">
                    <ul class="step-points">
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/brc-20-token-development/icons/interoperability.webp') }}" /></div>
                            <div class="step-points-content">
                                <h3>Interoperability</h3>
                                <p>Our BRC-20 tokens integrate seamlessly with existing Bitcoin infrastructure,
                                    including wallets that support Ordinals, ensuring smooth operation within the
                                    Bitcoin network.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contentall" align="center">
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                href="#" data-color-override="false" data-hover-color-override="false"
                data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> --}}
            <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
                style="border-radius: 30px !important; text-transform:none !important;">Consult with Our Experts</a>
        </div>
    </div>
</div>
<style>
    .featured-icon-box.style3 .featured-desc:after {
        position: absolute;
        content: '';
        width: 0;
        height: 0;
        border-bottom: 34px solid #08e2f4;
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
        background-color: #08e2f4;
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
</style>

{{-- @include('static.top-aligned-image-card-section' ,array(
    'title' => 'Leading Crypto Tokens Developed with Our Expertise', 
    'desc' => 'Our advanced token development services have enabled clients to innovate and transform industries. We cultivate strong, dependable relationships with our clients, ensuring clear communication and consistent support. From initial concept through to final launch, we collaborate closely with you to guarantee a seamless and successful token creation process. '
)); --}}

<section class="travel-app gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center mb40">
                    <h3> <strong>Unlock the Power of Our BRC-20 Token Development</strong></h3>
                    <hr>
                    <p class="text-center">Our skilled team offers BRC-20 crypto token development with significant benefits to help you successfully launch your crypto project.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/brc-20-token-development/icons/cost-effective.webp') }}"></div>
                    <p><strong>Cost-Effectiveness</strong>BRC-20 tokens benefit from lower transaction fees on the Bitcoin network, cutting costs, especially for frequent or large-volume transactions.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/customization.webp') }}">
                    </div>
                    <p><strong>Customization Options</strong>You can tailor our BRC-20 tokens to meet your specific needs and goals, allowing for a high level of customization and functionality.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/brc-20-token-development/icons/fundraising.webp') }}"></div>
                    <p><strong>Improved Fundraising</strong>Our BRC-20 tokens are designed to enhance fundraising efforts, providing access to a global pool of investors and making it easier to raise capital.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/security.webp') }}">
                    </div>
                    <p><strong>Enhanced Security</strong>We incorporate strong security features in our BRC-20 tokens, such as Proof of Work (PoW), multi-factor authentication (MFA), and decentralized governance, to protect against fraud and unauthorized access.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/brc-20-token-development/icons/growth.webp') }}"></div>
                    <p><strong>Future Growth</strong>As the BRC-20 ecosystem evolves, our tokens are positioned for future growth, making them a smart investment for staying ahead in the market.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/creation.webp') }}">
                    </div>
                    <p><strong>Easy Creation</strong>Our approach simplifies the token creation process by avoiding complex smart contracts, making it easier for you to create and transfer tokens.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="text-center cta_min mt20">
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                href="#" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn">
                <span>Speak with Our Experts</span></a>
        </div>
    </div>
</section>
<style type="text/css">
    :root {
        --d: 700ms;
        --e: cubic-bezier(0.19, 1, 0.22, 1);
    }

    .dd_heading {
        text-align: center;
        font-family: roboto thin;
    }

    .page-content {
        display: grid;
        grid-gap: 1rem;
        padding: 1rem;
        max-width: 1024px;
        margin: 0 auto;
        font-family: var(--font-sans);
    }

    @media (min-width: 600px) {
        .page-content {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 768px) {
        .heading {
            /*margin-top: -31px;*/
        }
    }

    @media (min-width: 800px) {
        .page-content {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .content .heading {
        color: #fff;
        padding-bottom: 10px;
    }

    .d_card {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: end;
        /*align-items: flex-end;*/
        overflow: hidden;
        padding: 1rem;
        width: 100%;
        text-align: center;
        color: #fff;
        background-color: #321a7a;
        /*box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);*/
        border-radius: 15px;
        border: 1px solid #eee;
        height: 100%;
    }

    @media (min-width: 600px) {
        .d_card {
            /*height: 390px;*/
        }
    }

    .bg1:before {
        background-image: url(images/nft/1.webp);
    }

    .bg2:before {
        background-image: url(images/nft/2.webp);
    }

    .bg3:before {
        background-image: url(images/nft/3.webp);
    }

    .bg4:before {
        background-image: url(images/nft/4.webp);
    }

    .bg5:before {
        background-image: url(images/nft/5.webp);
    }

    .bg6:before {
        background-image: url(images/nft/6.webp);
    }

    .bg7:before {
        background-image: url(images/nft/26.webp);
    }

    .bg8:before {
        background-image: url(images/nft/8.webp);
    }

    .bg9:before {
        background-image: url(images/nft/9.webp);
    }

    .bg10:before {
        background-image: url(images/nft/28.webp);
    }

    .bg11:before {
        background-image: url(images/nft/27.webp);
    }

    .bg12:before {
        background-image: url(images/nft/12.webp);
    }

    .bg13:before {
        background-image: url(images/nft/13.webp);
    }

    .bg14:before {
        background-image: url(images/nft/14.webp);
    }

    .bg15:before {
        background-image: url(images/nft/15.webp);
    }

    .bg16:before {
        background-image: url(images/nft/16.webp);
    }

    .bg17:before {
        background-image: url(images/nft/17.webp);
    }

    .bg18:before {
        background-image: url(images/nft/18.webp);
    }

    .bg19:before {
        background-image: url(images/nft/19.webp);
    }

    .bg20:before {
        background-image: url(images/nft/20.webp);
    }

    .bg21:before {
        background-image: url(images/nft/21.webp);
    }

    .bg22:before {
        background-image: url(images/nft/22.webp);
    }

    .bg23:before {
        background-image: url(images/nft/23.webp);
    }

    .bg24:before {
        background-image: url(images/nft/24.webp);
    }

    .bg25:before {
        background-image: url(images/nft/25.webp);
    }

    .bg30:before {
        background-image: url(images/nft/30.webp);
    }

    .bg31:before {
        background-image: url(images/nft/33.webp);
    }

    .bg32:before {
        background-image: url(images/nft/32.webp);
    }

    .bg022:before {
        background-image: url(images/nft/pfp-bored.webp);
    }

    .bg023:before {
        background-image: url(images/nft/automotive.webp);
    }

    .bg040:before {
        background-image: url(images/nft/phygital-assets.webp);
    }

    .content {
        position: relative;
        display: -webkit-box;
        /*display: flex;*/
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        /*-webkit-box-align: center;*/
        align-items: center;
        width: 100%;
        /*padding: 1rem;*/
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
        /*margin-top: 1rem;*/
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
            background: #019afd !important;
            color: #fff !important;
        }

        .d_card:hover .heading {
            color: #fff !important;
        }

        /*.content > *:not(.heading) {
                opacity: 0;
                -webkit-transform: translateY(1rem);
                transform: translateY(1rem);
                -webkit-transition: opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
                transition: opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
                transition: transform var(--d) var(--e), opacity var(--d) var(--e);
                transition: transform var(--d) var(--e), opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
            }
            .d_card:hover,
            .d_card:focus-within {
                -webkit-box-align: center;
                align-items: center;
            }*/
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

    /*-- Equal Height --*/
    .container-center {
        display: flex;
        flex-wrap: wrap;
        position: relative;
        z-index: 1;
        justify-content: center;
    }

    .equalize {
        display: flex;
        margin-top: 15px;
        margin-bottom: 15px;
    }
</style>
<section class="common_spacing" id="get" style="border-top: 1px solid #eee;">
    <div class="container">
        <div class="section-title text-center">
            <div class="sec_tit mb20">
                <h3 class="section-title underline mb20">Exploring the Potential of BRC-20 Tokens in Various Sectors</h3>
            </div>
        </div>
        <p class="text-center">Our expertise in BRC-20 token development unlocks a range of innovative applications across multiple sectors.
        </p>
        <div class="container-center">
            <div class="col-md-4 equalize">
                <div class="d_card bg1">
                    <div class="content">
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/brc-20-token-development/icons/utility.webp') }}"></div>
                        <h4 class="heading">Utility Tokens</h4>
                        <p class="data-content">We design BRC-20 tokens that grant access to exclusive services or features within a given ecosystem, such as in-game transactions or governance rights.</p>
                        <div class="text-center mt10"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 equalize">
                <div class="d_card bg2">
                    <div class="content">
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/brc-20-token-development/icons/loyalty.webp') }}" style="width:64px;"></div>
                        <h4 class="heading">Loyalty Programs</h4>
                        <p class="data-content">Our BRC-20 tokens are tailored to boost customer engagement and brand loyalty by offering rewards for activities like purchases or referrals, which can be redeemed for discounts or special benefits.</p>
                        <div class="text-center mt10"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 equalize">
                <div class="d_card bg3">
                    <div class="content">
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/brc-20-token-development/icons/fundraising.webp') }}"></div>
                        <h4 class="heading">Fundraising Initiatives</h4>
                        <p class="data-content">Use our BRC-20 tokens in Initial Coin Offerings (ICOs) to attract investment for startups or blockchain projects, with the potential for future value growth.</p>
                        <div class="text-center mt10"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 equalize">
                <div class="d_card bg4">
                    <div class="content">
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/brc-20-token-development/icons/supply-chain.webp') }}" style="width:64px;">
                        </div>
                        <h4 class="heading">Supply Chain Management</h4>
                        <p class="data-content">We develop BRC-20 tokens to enhance transparency in supply chains by tracking goods and materials, improving efficiency and preventing counterfeiting.</p>
                        <div class="text-center mt10"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 equalize">
                <div class="d_card bg5">
                    <div class="content">
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/brc-20-token-development/icons/ticket.webp') }}"></div>
                        <h4 class="heading">Ticketing & Event Management</h4>
                        <p class="data-content">Our BRC-20 tokens facilitate digital ticketing for events, simplifying the process, reducing fraud, and creating new ways for interaction with event organizers.</p>
                        <div class="text-center mt10"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 equalize">
                <div class="d_card bg6">
                    <div class="content">
                        <div class="icons"><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/defi.webp') }}">
                        </div>
                        <h3 class="heading">Defi Applications</h3>
                        <p class="data-content">Our BRC-20 tokens support the creation of decentralized finance (DeFi) protocols on the Bitcoin network, enabling services such as lending, borrowing, trading, and yield farming.</p>
                        <div class="text-center mt10"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</section>

@include('static.process-token-development-section', [
    'title' => 'Building Success: A Step-by-Step Approach to BRC-20 Token Creation', 
    'desc' => 'We take a structured approach to BRC-20 token development, drawing from our in-depth experience in the cryptocurrency world.',
    'cards' => [
        [
            'title' => 'Defining Purpose and Utility',
            'desc' => 'We begin by clarifying the purpose of our BRC-20 token, outlining its functions, use cases, and how it will engage users while providing unique value.'
        ],
        [
            'title' => 'Designing Tokenomics',
            'desc' => 'Our team determines the total supply and distribution of the BRC-20 tokens. We also establish the initial token price and adopt deflationary strategies, like token burning, to enhance value.'
        ],
        [
            'title' => 'Choosing the Development Method',
            'desc' => 'We assess whether to create the BRC-20 token from scratch or utilize existing development tools for a faster process. We choose the approach that best meets our needs.'
        ],
        [
            'title' => 'Writing the Code',
            'desc' => 'Our developers write the code in languages like JSON to create the BRC-20 tokens, ensuring they are programmed accurately for efficient asset transfers.'
        ],
        [
            'title' => 'Securing the Ordinal Wallet',
            'desc' => 'Our specialists use specialized Ordinal wallets to securely store and manage the BRC-20 tokens. We implement strong security measures to keep your tokens safe.'
        ],
        [
            'title' => 'Integrating with Platforms',
            'desc' => 'We list our BRC-20 token on various cryptocurrency exchanges to broaden its reach and improve accessibility for users. Our team makes it easy for trading to occur.'
        ],
        [
            'title' => 'Testing and Launch',
            'desc' => 'We conduct thorough tests on our BRC-20 token to ensure all features work properly and confirm security. After that, we deploy it on the Bitcoin network for user access.'
        ],
        [
            'title' => 'Marketing and Promotion',
            'desc' => 'Our team designs an effective marketing plan to raise awareness of our BRC-20 token. We engage with users and investors to foster a strong community and build trust around the project.'
        ],
    ],
])

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
        background: linear-gradient(#0b0d8b, #1dc2e1);
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
        background: #0b0d8b !important;
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
        background: linear-gradient(#0b0d8b, #1dc2e1);
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
        background: #0b0d8b !important;
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

        a[type="button"] {
            font-weight: 700;
            display: block;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 3px;
        }

        .data table .pr_pack th {
            font-size: 12px;
            line-height: 1.4;
            text-transform: uppercase;
            background: linear-gradient(#0b0d8b, #1dc2e1);
        }
    }

    a[type="button"] {
        background: #117dff !important;
    }
</style>
<div class="common_spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title text-center">
                    <h3 class="title-th sec_tit underline">The Technology Behind Our BRC-20 Tokens</h3>
                </div>
                <p class="text-center mt20">BRC-20 tokens are a cutting-edge type of token that works on the ordinal protocol, using Bitcoin’s smallest unit, the Satoshi (Sat), to store information in each token. Our development team uses the proof of work (PoW) system and JSON data programming to efficiently store large amounts of data directly on the blockchain.
                    <br><br>
                    The Ordinal protocol on Bitcoin adds unique features by attaching data to every transaction, which allows us to create BRC-20 tokens. Each Satoshi is numbered sequentially based on when it was mined. By applying ordinal theory, we can embed various types of data, such as images, text, or videos, into these numbered Satoshis during transactions.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="technologies">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="sec_tit underline text-center text-white">Highlighting the Leading BRC-20 Tokens of 2024</h3>
            <p class="text-center white">In the fast-changing world of cryptocurrency, the Bitcoin ecosystem plays a crucial role, showcasing numerous successful BRC-20 tokens. These achievements are motivating new ventures to follow in their footsteps in 2024.</p>
            <ul>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/ordi.webp') }}">
                    <p class="white">Ordi (ORDI)</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/sats.webp') }}">
                    <p class="white">Sats (1000SATS)</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/leverfi.webp') }}" style="width:64px;">
                    <p class="white">LeverFi (LEVER)</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/bitcoin-wizards.webp') }}"
                        style="width:64px;">
                    <p class="white">Bitcoin Wizards (WZRD)</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/pups.webp') }}" style="width:64px;">
                    <p class="white">PUPS (Ordinals)</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/trac.webp') }}" style="width:64px;">
                    <p class="white">Trac (Ordinals) </p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/multibit.webp') }}">
                    <p class="white">Multibit (MUBI)</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/orange.webp') }}" style="width:64px;">
                    <p class="white">Orange (ORNJ)</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/befi-labs.webp') }}"
                        style="width:64px;">
                    <p class="white">BeFi Labs (BEFI)</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/oxbt.webp') }}" style="width:64px;">
                    <p class="white">OXBT (Ordinals)</p>
                </li>
            </ul>
            <div class="clearfix"></div>
            <div class="text-center cta_min mt20">
                {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                    target="_blank" href="#"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
                <a rel="nofollow" href="{{ url('consultation') }}"
                    class="nectar-button medium regular accent-color regular-button nec-btn">
                    <span>Talk with our Experts</span></a>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .new-table {
        border-radius: 15px;
    }

    .new-table th {
        background: #0b0d8b !important;
        padding: 20px !important;
    }

    .new-table td {
        padding: 15px !important;
    }
</style>
<section class="common_spacing  gray_bg">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 data table-responsive">
            <h3 class="sec_tit underline text-center">How Does BRC-20 Cryptocurrency Token Development Stand Out From
                ERC-20 Tokens?</h3>
            <p class="text-center">For several reasons, developing BRC-20 tokens on the Bitcoin network with our
                expertly crafted services is a compelling alternative to ERC-20 tokens.</p>
            <div class="clearfix"></div>
            <table class="table-striped new-table" style="width:100%;">
                <tbody> </tbody>
                <thead>
                    <tr class="pr_pack">
                        <th>Feature</th>
                        <th>BEP-20 </th>
                        <th>ERC-20 </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Blockchain Network</td>
                        <td>Bitcoin</td>
                        <td>Ethereum </td>
                    </tr>
                    <tr>
                        <td>Security</td>
                        <td>Utilizes Bitcoin’s Proof of Work (PoW) security</td>
                        <td>Utilizes Ethereum’s Proof of Stake (PoS) security</td>
                    </tr>
                    <tr>
                        <td>Transaction Fees</td>
                        <td>Generally lower compared to Ethereum</td>
                        <td>Generally higher compared to Bitcoin</td>
                    </tr>
                    <tr>
                        <td>Ecosystem</td>
                        <td>Emerging and developing</td>
                        <td>Established and mature</td>
                    </tr>
                    <tr>
                        <td>DeFi Integration</td>
                        <td>Limited </td>
                        <td>Extensive</td>
                    </tr>
                    <tr>
                        <td>Fungibility</td>
                        <td>Fully fungible</td>
                        <td>Fully fungible</td>
                    </tr>
                    <tr>
                        <td>Cost of Development</td>
                        <td>Potentially lower due to simpler technology implementation</td>
                        <td>Varies depending on the complexity of the project and technologies</td>
                    </tr>
                    <tr>
                        <td>Optimal Audience</td>
                        <td>Projects seeking security and cost-efficiency</td>
                        <td>Projects needing flexibility and DeFi access</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<style type="text/css">
    .awesome-features-wrapper {
        border: 1px solid #0b0d8bb0;
        padding-top: 40px;
        padding-bottom: 40px;
        transition: .3s;
        position: relative;
        margin-bottom: 30px;
        border-radius: 10px;
    }

    .awesome-features-wrapper::before {
        background: #0b0d8b;
        height: 20px;
        width: 3px;
        content: "";
        position: absolute;
        left: -2px;
        top: 65px;
    }

    .awesome-features-wrapper::after {
        /*            background: #2890dc;*/
        height: 50px;
        width: 3px;
        content: "";
        position: absolute;
        left: -2px;
        top: 94px;
    }

    .awesome-features-icon-img {
        margin-bottom: 22px;
        font-size: 36px;
        color: #4db679;
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
        padding: 0px 10px !important;
    }

    .awesome-features-icon-img {
        align-items: center !important;
        margin-bottom: 22px;
        font-size: 36px;
        color: #4db679;
    }
</style>
<div class="common_spacing">
    <div class="container">
        <div class=" ">
            <h3 class="sec_tit underline text-center">How to Obtain Our BRC-20 Tokens with Ease</h3>
            <p class="text-center">We offer multiple ways for users to buy our BRC-20 tokens, leveraging various platforms and methods.</p>
        </div>
        <div class="row mt20">
            <div class="container container-center">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/brc-20-token-development/icons/marketplaces.png') }}">
                        </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Specialized Marketplaces</strong>Our BRC-20 tokens are listed on dedicated and niche marketplaces that support this token standard, making them accessible to interested buyers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/brc-20-token-development/icons/wallet.png') }}">
                        </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Compatible Bitcoin Wallets</strong>We work with Ordinal wallet providers to ensure our BRC-20 tokens are easily visible and accessible within supported wallets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/brc-20-token-development/icons/web-design.png') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Informative Websites</strong>We create detailed and user-friendly webpages for our BRC-20 tokens, outlining their purpose, benefits, and steps for acquisition and management.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/brc-20-token-development/icons/community-marketing.png') }}"> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Community Engagement</strong>We build and engage with a community around your BRC-20 token, facilitating direct interaction with potential buyers to foster trust and encourage purchases.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center cta_min mt20">
                    {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                        target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
                    <a rel="nofollow" href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn">
                        <span>Talk with our Experts</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="technologiess2 " style="background:#f2f2f2;">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="sec_tit underline text-center">Industries We Serve with Our BRC-20 Token Development</h3>
            <p class="text-center " style="font-size: 16px;">As a leading BRC-20 token development agency, we offer tailored solutions across a range of industries, adapting to their specific objectives and needs.</p>
            <ul>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/defi.webp') }}">
                    <p class="white">DeFi </p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/gaming.png') }}">
                    <p class="white">Gaming and Entertainment </p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/supply-chain.webp') }}">
                    <p class="white">Supply Chain</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/logistics.webp') }}">
                    <p class="white">Logistics</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/real-estate.png') }}">
                    <p class="white">Real Estate</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/ticket.webp') }}">
                    <p class="white">Ticketing and Event Management</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/e-commerce.png') }}">
                    <p class="white">E-commerce</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/banking.webp') }}">
                    <p class="white">Banking and Insurance</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/healthcare.png') }}">
                    <p class="white">Healthcare</p>
                </li>
                <li>
                    <img class="lazy" src="{{ asset('images/brc-20-token-development/icons/energy.png') }}">
                    <p class="white">Energy</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<style type="text/css">
    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
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
</style>
@include('static.crypto-coins', array(
   'title' => 'Comprehensive Blockchain Support from Our BRC-20 Token Development Team', 
   'desc' => 'In addition to pioneering BRC-20 token development on the Bitcoin blockchain, we also provide expertise in creating tokens across various other blockchain networks, utilizing their unique features and strengths.',
   'cta_1' => '#',
   'cta_2' => 'consultation'
))
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
<section class="common_spacing gray_bg">
    <div class="container">
        <div class=" ">
            <h3 class="sec_tit underline text-center">Why Choose Our BRC-20 Token Development Services?
            </h3>
            <p class="text-center mt20">Our skilled team offers exceptional BRC-20 token development services, making us the ideal choice for creating innovative tokens on the Bitcoin blockchain.</p>
        </div>
        <div class="row list_box mt50">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h6>Timely Delivery</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h6>Secure Development</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h6>Latest Industry Practices</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h6>Strategic Project Management</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h6>Robust Security Measures</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h6>High-Quality Development Standards</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-4 col-md-offset-4">
                <h6>Experienced Blockchain Experts</h6>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    .nav>li>a {
        position: relative;
        display: block;
        padding: 15px 25px !important;
    }
</style>
<section class="tech-stack" style="padding-bottom: 0;">
    <div class="container">
        <div class="col-lg-12 center">
            <div class="section-title text-center m-b-30">
                <h3 class="common_h3 sec-tit">Our Technology Stack for BRC-20 Token Development</h3>
                <hr>
                <p>Leveraging our extensive industry expertise, we employ cutting-edge tools and advanced technologies, supported by a strong technology stack, to enhance our BRC-20 token creation process.</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked"
                style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                <li class="active"><a href="#vtab28" data-toggle="tab">
                        <p>Blockchain Protocol</p>
                    </a></li>
                <li><a href="#vtab27" data-toggle="tab">
                        <p>Programming Language</p>
                    </a></li>
                <li><a href="#vtab26" data-toggle="tab">
                        <p>Database</p>
                    </a></li>
                <li><a href="#vtab30" data-toggle="tab">
                        <p>Ordinal Wallets</p>
                    </a></li>
                <li><a href="#vtab29" data-toggle="tab">
                        <p>Development Framework And Toolset</p>
                    </a></li>
                <li><a href="#vtab51" data-toggle="tab">
                        <p>JavaScript Library</p>
                    </a></li>
                <li><a href="#vtab52" data-toggle="tab">
                        <p>Back-End Javascript Runtime Environment</p>
                    </a>
                </li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="tab-content technology">
                <div role="tabpanel" class="tab-pane in active" id="vtab28">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/bitcoin-network.webp') }}">
                                <p>Bitcoin Network</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="vtab27">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/script.webp') }}">
                                <p>Script</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/js1.webp') }}">
                                <p>JavaScript</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/python.webp') }}">
                                <p>Python</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/java.webp') }}">
                                <p>Java</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/go-lang.webp') }}">
                                <p>Golang</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab26">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/manogodb.webp') }}">
                                <p>MongoDB </p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/ipfs.webp') }}">
                                <p>IPFS </p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/postgresql.webp') }}">
                                <p>PostgreSQL </p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/pinata.webp') }}">
                                <p>Pinata </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab30">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/unisat.webp') }}">
                                <p>UniSat</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/ordinalswallet.webp') }}">
                                <p>Ordinalswallet </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab29">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/truffle.webp') }}">
                                <p>Truffle Suite</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/remixide.webp') }}">
                                <p>RemixIDE</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/openzeppelin.webp') }}">
                                <p>OpenZeppelin</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab51">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/react.webp') }}">
                                <p>React</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/web3js.webp') }}">
                                <p>Web3.js</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/redux.webp') }}">
                                <p>Redux</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab52">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/node-js_logo.webp') }}">
                                <p>Node.js</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/brc-20-token-development/icons/django.webp') }}">
                                <p>Django</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
        /*border: 1px solid #cdcdcd;*/
        background: #fff;
        padding-top: 30px;
        padding-bottom: 20px;
        min-height: 310px;
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
        /*            background: #47b475;*/
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
        /*            padding-left: 40px;*/
        margin-bottom: 22px;
        font-size: 40px;
        color: #47b475;
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
        min-height: 190px;
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
        min-height: 200px;
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
        font-family: FontAwesome;
        top: 3px;
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
{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What is a BRC-20 Token?',
            'ans' => "A BRC-20 token is a digital asset on the Bitcoin blockchain that utilizes the ordinal protocol and Bitcoin's smallest unit, the Satoshi, to store and manage data, offering unique functionalities"
        ],
        [
            'ques' => 'How is BRC-20 Different from ERC-20?',
            'ans' => 'BRC-20 tokens are based on the Bitcoin blockchain and use Proof of Work (PoW) for security, whereas ERC-20 tokens are built on Ethereum and rely on Proof of Stake (PoS). BRC-20 tokens generally have lower fees but offer less DeFi integration compared to ERC-20 tokens.'
        ],
        [
            'ques' => 'What Are the Main Applications of BRC-20 Tokens?',
            'ans' => 'BRC-20 tokens can be utilized for a range of purposes, including providing access to exclusive services, customer loyalty rewards, fundraising, tracking supply chains, managing event tickets, and supporting decentralized finance (DeFi) projects.'
        ],
        [
            'ques' => 'What Tools Can Be Used for Developing BRC-20 Tokens?',
            'ans' => 'To develop BRC-20 tokens, tools include the ordinal protocol, JSON data programming, and various blockchain development frameworks that facilitate token creation and management.'
        ],
        [
            'ques' => 'What is the Process for Creating a BRC-20 Token?',
            'ans' => 'Creating a BRC-20 token involves using the ordinal protocol on the Bitcoin blockchain, assigning sequential numbers to each Satoshi, and embedding data into these units during transactions.'
        ],
        [
            'ques' => 'What Security Aspects Should Be Considered for BRC-20 Tokens?',
            'ans' => "BRC-20 token security includes leveraging Bitcoin’s PoW for robust protection, implementing strong encryption, and incorporating decentralized governance to safeguard against fraud and unauthorized access."
        ],
        [
            'ques' => 'How Do BRC-20 Tokens Fit into the Bitcoin Network?',
            'ans' => 'BRC-20 tokens integrate with Bitcoin’s infrastructure by being compatible with wallets that support the ordinal protocol, using Bitcoin’s network for transactions and data storage.'
        ],
        [
            'ques' => 'Can BRC-20 Tokens Be Used with DeFi Applications?',
            'ans' => 'While BRC-20 tokens have limited DeFi integration compared to ERC-20 tokens, they can still be utilized to build DeFi solutions within the Bitcoin network.'
        ],
        [
            'ques' => 'What Benefits Do BRC-20 Tokens Offer Compared to Other Standards?',
            'ans' => 'BRC-20 tokens provide lower transaction fees, and enhanced security via Bitcoin’s PoW, and are ideal for those seeking cost-effective and secure solutions, although they have less flexibility in DeFi applications.'
        ],
        [
            'ques' => 'What is the Future Outlook for BRC-20 Tokens?',
            'ans' => 'The future of BRC-20 tokens looks promising as the Bitcoin ecosystem evolves, with potential growth in adoption and use cases as the technology develops further.'
        ],

    ],
])
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">&times;</span></h4>
                </div>
                <div class="formdiv" style="display: inline-block; width: 100%;padding: 15px;">
                    <form class id="mailForms1" method="post" action>
                        <input type="hidden" value="Coinbase like Controlled Exchange" name="btc_value">
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
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control" id="skype" name="skype" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="phone21" name="phone_dummy" type="text" required
                                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    data-cf-modified-52d1b6154ffb198628c3d0f7->
                                <input type="hidden" name="phone" id="phone_newsletter" value>
                                <input type="hidden" name="url" id="url" value="/brc-20-token-development">
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
                        <input type="hidden" value="Leverage - Margin Trading" name="btc_value">
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
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control" name="skype" id="skype">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="phone22" name="phone_dummy" type="text" required
                                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    data-cf-modified-52d1b6154ffb198628c3d0f7->
                                <input type="hidden" name="phone" id="phone_newsletter" value>
                                <input type="hidden" name="url" id="url" value="/brc-20-token-development">
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
                        <input type="hidden" value="Customised Binance Competitor" name="btc_value">
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
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control" name="skype" id="skype">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="phone23" name="phone_dummy" type="text" required
                                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    data-cf-modified-52d1b6154ffb198628c3d0f7->
                                <input type="hidden" name="phone" id="phone_newsletter" value>
                                <input type="hidden" name="url" id="url" value="/brc-20-token-development">
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
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">View Product Demo <span type="button" data-dismiss="modal">&times;</span>
                    </h4>
                </div>
                <div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
                    <form class id="mailForms3" method="post" action>
                        <input type="hidden" value="2 BTC" name="btc_value">
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
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control" name="skype" id="skype">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="phone24" name="phone_dummy" type="text" required
                                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    data-cf-modified-52d1b6154ffb198628c3d0f7->
                                <input type="hidden" name="phone" id="phone_newsletter" value>
                                <input type="hidden" name="url" id="url" value="/brc-20-token-development">
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
<script src="js/jquery.min.js" type="52d1b6154ffb198628c3d0f7-text/javascript"></script>
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
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
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
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
<script src="js/vendor.js" type="52d1b6154ffb198628c3d0f7-text/javascript"></script>
<script src="js/plugins.js" type="52d1b6154ffb198628c3d0f7-text/javascript"></script>
<script src="js/main.js" type="52d1b6154ffb198628c3d0f7-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="52d1b6154ffb198628c3d0f7-text/javascript"></script>
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
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
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
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
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
    $('.view_pricing').click(function() {
            $('html, body').animate({
                scrollTop: $('#pricing-section').offset().top
            }, 2000);
        });
</script>
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
    var url = window.location.href;
        $('#url').val(url);
</script>
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
    $(".pricing-body").mCustomScrollbar({
            theme: "minimal"
        });
</script>
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
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
                    data-cf-modified-52d1b6154ffb198628c3d0f7->
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/brc-20-token-development">
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
<script type="52d1b6154ffb198628c3d0f7-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="52d1b6154ffb198628c3d0f7-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="52d1b6154ffb198628c3d0f7-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
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

<script type="52d1b6154ffb198628c3d0f7-text/javascript">
    window.__lc = window.__lc || {};
        window.__lc.license = 9464790;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>

<script type="52d1b6154ffb198628c3d0f7-text/javascript">
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
<script type="52d1b6154ffb198628c3d0f7-text/javascript">
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




<script type="52d1b6154ffb198628c3d0f7-text/javascript">
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


<script type="52d1b6154ffb198628c3d0f7-text/javascript">
    $(".crypto-popup").click(function(e) {
            $('crypto-popup').addClass('fixedPosition full-width');
            $(".login-popup").addClass('show');
            e.stopPropagation();
        });
</script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="52d1b6154ffb198628c3d0f7-|49" defer></script>
</div>


@endsection