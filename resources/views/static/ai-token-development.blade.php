@extends('layouts.static')
    @section('title', 'AI Token Development')
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
        background: #06005a;
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
            width: auto;
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
        background: #efefef;
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
        background: linear-gradient(to bottom, #8de591, #81ddc7);
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
        background: #140050;
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
        background: linear-gradient(to right bottom, #140050 49%, transparent 50%);
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

    @media screen and (max-width:768px) {
        .teck .category-grid-style-01 .category-item {
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

    .teck .category-grid-style-01 .category-item {
        padding: 30px;
        text-align: center;
        width: 16.6%;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
        position: relative;
        cursor: pointer
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
        transition: .3s ease-in-out
    }

    .teck .category-grid-style-01 .category-item .category-icon {
        color: #333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px;
        position: relative;
        z-index: 2
    }

    .teck .category-icon img {
        padding: 15px
    }

    .teck .category-grid-style-01 .category-item .category-title {
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
        transition: .3s ease-in-out
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
        width: 16%;
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
        width: 19%;
        margin: 0.5%;
        border: 1px solid #140050;
        display: grid;
        grid-template-columns: 35% 70%;
        padding: 10px;
        align-items: center;
        text-align: left;
    }

    .welcome-content ul li .icons {
        width: 50px;
        margin-right: 10px;
        padding-right: 10px;
        border-right: 1px solid #140050;
        /*filter: invert(1);*/
    }

    .welcome-content ul li p {
        line-height: 20px;
        padding: 0px;
        margin: 0px;
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .welcome-content ul li {
            width: 49%;
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


<body class="header-shadow" id="ico">
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
                                            <h1 itemprop="name">Revolutionize Your Venture with Pioneering AI Token Solutions</h1>
                                        </div>
                                        <p itemprop="text">Elevate your new venture with our cutting-edge AI token development services. Unleash your project to the world with a utility and innovative cryptocurrency.</p>
                                        <div class="txt"> <a href="#" class="nec-btn" id="cyz" style="border-radius: 30px !important;">Connect with Our Experts Today</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center"> <img class="magic"
                                src="{{ asset('images/ai-token-development/banner-img.webp') }}" alt=" " title=" " style="width: 420px"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Your Top Choice for AI Token Development in the Web3 Space</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center">Artificial intelligence is driving major innovations today, and many AI projects are capitalizing on the benefits of crypto tokens. As a leading AI token development company, we know what it takes to deliver exceptional results.<br><br>
                            If you're planning to develop AI tokens for your business, you're in the right place. We meet all your needs with uncompromising quality. Our expertise in both layer-1 and layer-2 blockchains ensures your tokens are secure and full of utility, setting the stage for your project's success.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center cta_mine txt"> <a
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> <a
                            href="#"
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Experts</span></a> </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('static.six-card-section', [
        'title' => 'Build the Future of AI Token Creation with Our Minting Platform', 
        'desc' => 'Boost your presence in the emerging AI crypto token market with our premium development services. Our experts use cutting-edge AI and blockchain technology to bring your business idea to life.',
        'cards' => [
            [
                'title' => 'AI Token Consultation',
                'desc' => "Work with our experts to define your AI token’s technology, token economics, market strategy, and roadmap.",
                'image' => 'ai-token-development/icons/consultations.png'
            ],
            [
                'title' => 'AI Token Development',
                'desc' => "Create AI tokens on your chosen blockchain with our team, incorporating all your requirements through smart contracts.",
                'image' => "ai-token-development/icons/developer.png"
            ],
            [
                'title' => 'AI Token Integration',
                'desc' => 'Seamlessly integrate AI crypto tokens into your existing Web3 business to enhance your market position.',
                'image' => 'ai-token-development/icons/integration.png'
            ],
            [
                'title' => 'AI Token Audit',
                'desc' => 'Ensure your AI token smart contracts are secure with our thorough testing and auditing services.',
                'image' => 'ai-token-development/icons/audit.png'
            ],
            [
                'title' => 'AI Token Listing',
                'desc' => 'Get your AI tokens listed on major cryptocurrency exchanges with our help, boosting your market visibility.',
                'image' => 'ai-token-development/icons/listing.png'
            ],
            [
                'title' => 'AI Token Minting Platform',
                'desc' => 'Develop an AI token minting platform with us to support new projects in easily creating AI-based tokens.',
                'image' => 'ai-token-development/icons/minting.png'
            ],
        ],
    ])
    <div class="technologies">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="sec_tit underline text-center text-white">Dominate the AI Token Market with Our Expert Launch Services
                </h3>
                <p class="text-center white">Looking to capitalize on the booming AI industry with your crypto venture? Partner with our experts to launch AI token projects that are the most successful in the market and achieve remarkable success swiftly.</p>
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/ai-token-development/icons/the-graph.webp') }}">
                        <p class="white">The Graph ($GRT)</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/ai-token-development/icons/fetch-w.webp') }}">
                        <p class="white">Fetch ($FET)</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/ai-token-development/icons/singularitynft.webp') }}">
                        <p class="white">SingularityNFT ($AGIX)</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/ai-token-development/icons/ocean.webp') }}">
                        <p class="white">Ocean Protocol ($OCEAN)</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/ai-token-development/icons/chainlink.webp') }}" width="64px;">
                        <p class="white">Chainlink ($LINK)</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/ai-token-development/icons/numeraire.webp') }}" width="64px;">
                        <p class="white">Numeraire ($NMR)</p>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <div class="text-center cta_mine txt"> <a
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                        href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> <a
                        href="#"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with
                            our Experts</span></a> </div>
            </div>
        </div>
    </div>

    {{-- <section class="travel-app gray_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h3> <strong>Pivotal Features Our AI Token Creation Services Include in Your Cryptos </strong>
                        </h3>
                        <hr>
                        <p>Create your new-age crypto project with an ocean of features with our excellent AI token
                            creation services to elevate your business from day one. Our professionals can aid you
                            completely to unleash the best version of your novel business idea.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy" data-src="images/ai-token-development/icons/mintable.svg">
                        </div>
                        <p><strong>Mintable</strong>Let your customers mint AI tokens at any time with the same features
                            from a ready-made portal, enhancing your business prospects in the long run.</p>
                    </div>
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy" data-src="images/ai-token-development/icons/minting.webp">
                        </div>
                        <p><strong>Pausable</strong>Offer your project with provisions to pause token minting if you
                            need to focus on other aspects or if users plan to proceed with transacting later.</p>
                    </div>
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy"
                                data-src="images/ai-token-development/icons/debt-burn.webp"></div>
                        <p><strong>Burnable</strong>Create a token-burning mechanism to control the supply and
                            availability of AI tokens in the market, ensuring your brand’s value in the long term.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy" data-src="images/ai-token-development/icons/time.webp">
                        </div>
                        <p><strong>Capped</strong>Form a cap on the maximum number of AI-based tokens that can be
                            created to ensure optimal supply and demand, gaining increased value over time.</p>
                    </div>
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy" data-src="images/ai-token-development/icons/utility.webp">
                        </div>
                        <p><strong>Utility</strong>Bestow your AI crypto tokens with a wide range of utilities and
                            equities to enhance their value, establishing your brand’s presence in the market.</p>
                    </div>
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy" data-src="images/ai-token-development/icons/security.webp">
                        </div>
                        <p><strong>Unhackable</strong>Develop AI tokens using advanced security measures and protocols
                            to ensure full safety for your tokens, making them unhackable through any means. </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @include('static.small-round-card-section',array(
        'title' => "Maximize Your AI Token’s Potential with Our Innovative Features", 
        'desc' => "Elevate your crypto project with our comprehensive AI token creation services. We help you unlock the full potential of your innovative business idea from day one.",
        'card_title_1' => 'Mintable',
        'card_desc_1' => 'Allow your customers to mint AI tokens anytime through an easy-to-use portal, boosting your business prospects long-term.',
        'card_image_1' => 'ai-token-development/icons/mintable.svg',
        'card_title_2' => 'Capped',
        'card_desc_2' => 'Set a maximum limit on the number of AI tokens to manage supply and demand effectively, increasing their value over time.',
        'card_image_2' => 'ai-token-development/icons/time.png',
        'card_title_3' => 'Pausable',
        'card_desc_3' => "Incorporate the ability to pause token minting, giving you the flexibility to focus on other aspects or adjust transactions as needed.",
        'card_image_3' => 'ai-token-development/icons/minting.png',
        'card_title_5' => 'Utility',
        'card_desc_5' => 'Equip your AI tokens with a range of utilities to enhance their value and establish a strong market presence.',
        'card_image_5' => 'ai-token-development/icons/utility.png',
        'card_title_6' => 'Burnable',
        'card_desc_6' => 'Implement a token-burning mechanism to control the supply and ensure the long-term value of your tokens.',
        'card_image_6' => 'ai-token-development/icons/debt-burn.png',
        'card_title_7' => 'Unhackable',
        'card_desc_7' => 'Use advanced security measures to make your AI tokens secure and resistant to hacking.',
        'card_image_7' => 'ai-token-development/icons/security.png'
    ))


    @include('static.process-token-development-section', [
        'title' => 'Transformative AI Token Development: Our Proven Process', 
        'desc' => "We use a meticulous approach to develop AI token projects that ensure success in the Web3 ecosystem. Here’s how we turn your innovative ideas into reality:",
        'cards' => [
            [
                'title' => 'Consultation',
                'desc' => "Collaborate with our experts to explore your vision, allowing us to conduct research and craft a tailored business concept based on your ideas."
            ],
            [
                'title' => 'Token Design',
                'desc' => 'We design all aspects of your AI token, including tokenomics, standards, supply limits, and other critical features.'
            ],
            [
                'title' => 'Token Development',
                'desc' => 'Our team builds your AI tokens according to the detailed documentation, utilizing advanced technological frameworks.'
            ],
            [
                'title' => 'Token Testing',
                'desc' => "We rigorously test your token’s smart contracts to identify and resolve issues, ensuring they function correctly in various scenarios."
            ],
            [
                'title' => 'Token Launching',
                'desc' => 'After implementing a strategic marketing plan, we launch your AI token project to the public, maximizing its visibility.'
            ],
            [
                'title' => 'Maintenance and Support',
                'desc' => 'We provide ongoing maintenance and support to keep your token project secure and operational, addressing any issues that arise.'
            ],
        ],
    ])


    <section class="common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <h3 class="sec_tit underline text-center" style="width: 100%;">Exploring Innovative Use Cases for Your AI Token</h3>
            </div>
            <p class="text-center" style="color: #000;">Are you looking to develop an AI token project with various use cases? Here are some popular applications that might inspire you:</p>
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
                                            src="{{ asset('images/ai-token-development/icons/portfolio.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Portfolio Management</h3>
                                </div>
                                <div class="featured-desc">Create an AI token to help users optimize and manage their crypto portfolios in real time with advanced algorithms.</div>
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
                                            src="{{ asset('images/ai-token-development/icons/economic.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Economic Infrastructure</h3>
                                </div>
                                <div class="featured-desc">Develop an AI crypto project that connects people, services, and devices across industries for efficient data sharing and communication.</div>
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
                                            src="{{ asset('images/ai-token-development/icons/data-migration.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Data Security Solutions</h3>
                                </div>
                                <div class="featured-desc">Build an AI-based token to offer sophisticated security solutions that protect sensitive information using advanced technology.</div>
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
                                            src="{{ asset('images/ai-token-development/icons/oracle.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Oracle Solutions</h3>
                                </div>
                                <div class="featured-desc">Combine blockchain and AI to develop tokens for modern oracles that track real-time data from AI-powered sources.</div>
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
                                            src="{{ asset('images/ai-token-development/icons/trading.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Trading Algorithms</h3>
                                </div>
                                <div class="featured-desc">Create a project that provides personalized trading algorithms for cryptocurrency traders, enabling them to achieve significant returns.</div>
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
                                            src="{{ asset('images/ai-token-development/icons/creation.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Character Creation</h3>
                                </div>
                                <div class="featured-desc">Offer a platform for creating digital characters with AI technology, supported by a crypto token for rewards and in-platform transactions.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="What-one common_spacing" style="background:#140050;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title text-center">
                        <h3 class="text-white">Unlock Excellence with Our AI Token Development Experts</h3>
                        <hr class="mb40">
                        <p class="text-white">As a leading name in AI token development, we excel in launching groundbreaking crypto projects tailored for AI-driven businesses. Our expertise in blockchain technology, smart contracts, Web3 frameworks, and artificial intelligence positions us as your top choice to bring your AI crypto vision to life.</p>
                        <div class="contentall" align="center" style="padding-top: 0px;">

                            <a href="#" rel="nofollow"
                                style="border-radius: 30px !important; text-transform:none !important;">Get Started with Our AI Token Developers Today!</a>
                        </div>
                    </div>
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
                    <h3 class="common_h3">Start Your Journey with Top-Tier AI Token Development Talent</h3>
                    <hr>
                </div>
            </div>
            <div class="row mt20">
                <div class="col-sm-12">
                    <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/eth.webp" alt> </div> <a href="#"
                                class="category-title">Ethereum</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/polygon.webp" alt> </div> <a href="#"
                                class="category-title">Polygon</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/solana.webp" alt> </div> <a href="#"
                                class="category-title">Solana</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/logos/binance-coin.webp" alt> </div> <a href="#"
                                class="category-title">BNB Chain</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/logos/1.webp" alt> </div> <a href="#" class="category-title">Bitcoin</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/avalanche.png" alt> </div>
                            <a href="#" class="category-title">Avalanche</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/tron.webp" alt> </div>
                            <a href="#" class="category-title">Tron</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/harmony-logo.webp" alt> </div>
                            <a href="#" class="category-title">Harmony</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/tezos.webp" alt> </div>
                            <a href="#" class="category-title">Tezos</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/fantom.webp" alt> </div>
                            <a href="#" class="category-title">Fantom</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/cardano.webp" alt> </div>
                            <a href="#" class="category-title">Cardano</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;"
                                    src="images/home-new/stellar.webp" alt> </div>
                            <a href="#" class="category-title">Polkadot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="welcome-content" style="background: #f2f2f2;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center ">State-of-the-Art Technology for Your AI Token Development</h3>
                </div>
                <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/react.webp') }}"></div>
                            <p>React JS</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/ai-token-development/icons/web3.webp') }}">
                            </div>
                            <p>Web3 JS</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/ai-token-development/icons/node-js_logo.webp') }}"></div>
                            <p>Node JS</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/angular.webp') }}"></div>
                            <p>Angular JS</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/go-lang.webp') }}"></div>
                            <p>Go</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/ai-token-development/icons/metamask.webp') }}"></div>
                            <p>MetaMask</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/ai-token-development/icons/truffle.webp') }}"></div>
                            <p>Truffle</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/ai-token-development/icons/solidity.webp') }}"></div>
                            <p>Solidity</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/ai-token-development/icons/rust.webp') }}">
                            </div>
                            <p>Rust</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/ipfs.webp') }}">
                            </div>
                            <p>IPFS</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/ai-token-development/icons/chainlink.webp') }}"></div>
                            <p>Chainlink</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/pinata.webp') }}"></div>
                            <p>Pinata</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/ai-token-development/icons/MongoDB-black.webp') }}"></div>
                            <p>Mongo DB</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/ai-token-development/icons/open-zeppelin.webp') }}"></div>
                            <p>Open Zeppelin</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/ai-token-development/icons/ganache.webp') }}"></div>
                            <p>Ganache</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/laravel.webp') }}"></div>
                            <p>Laravel</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy" src="{{ asset('images/ai-token-development/icons/ruby.webp') }}">
                            </div>
                            <p>Ruby on Rails</p>
                        </li>
                        <li>
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/ai-token-development/icons/etherscan.webp') }}"></div>
                            <p>Etherscan</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="What-one common_spacing" style="background:#140050;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title text-center">
                        <h3 class="text-white">Why Our Team is Your Best Choice for AI Token Development</h3>
                        <hr class="mb40">
                        <p class="text-white">We offer top-notch AI token development services for Web3 projects. With our deep expertise in blockchain and artificial intelligence, we ensure high-quality support from start to finish. Whether you’re at the idea stage or need post-launch maintenance, we’re here to help. Contact us today to start your AI crypto project!</p>
                        <div class="contentall" align="center" style="padding-top: 0px;">
                            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="#" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" style="border-radius: 30px !important;"> <span>Schedule a Meeting</span></a>
                            <a href="#" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">Connect with Our Experts</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    {{-- <div class="product-section fag_sec p-50 gray_bg">
        <div class="container">
            <div class="section-top ">
                <div class="section-header text-center ">
                    <h4 class="section-title mt20 underline"> FAQ</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="faq-content">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq1">
                                            <span>How Can AI Projects Benefit from Crypto Tokens? </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq1" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>Crypto tokens can benefit AI projects in several ways, including in-app
                                            payments, gamified reward distribution, and governance rights provision,
                                            alongside gaining brand value and market valuation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#faq6">
                                            <span>What are the Crucial Features of AI Token Development? </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq6" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Some crucial features of AI token development include minting, burning, capping,
                                        security, pausing, and utility. Making the best use of these elements can
                                        elevate your project to unprecedented levels.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq2">
                                            <span>What are the Important AI Token Creation Services We Provide? </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq2" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Important AI token creation services we provide include consultation, token
                                        design, smart contract development, token testing, token launching, and
                                        post-launch support. Contact us to begin your project.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq3">
                                            <span>What are Some Use Cases of AI Crypto Token Development? </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq3" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Popular use cases of AI crypto token development for businesses include data
                                        security, portfolio management, economic infrastructure, character creation,
                                        oracle solutions, and trading algorithms.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h5 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq4">
                                            <span>Which is the Best AI Token Development Company?</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="faq4" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>Blockchain App Factory is the best AI token development company that provides
                                            exclusive services for AI-based projects using advanced technologies to
                                            launch crypto tokens bestowed with utilities.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    @include('static.simple-faqs-section', [
        'faqs' => [
            [
                'ques' => 'How Can AI Projects Leverage Crypto Tokens?',
                'ans' => "AI projects can leverage crypto tokens to enhance functionality, drive engagement, and monetize their innovations. Tokens can be used for access control, reward systems, and facilitating transactions within AI platforms."
            ],
            [
                'ques' => 'What Key Features Are Essential for AI Token Development?',
                'ans' => "Essential features for AI token development include robust security, clear tokenomics, scalability, and integration capabilities. These elements ensure that the token operates effectively and maintains value in a dynamic market."
            ],
            [
                'ques' => 'What AI Token Creation Services Do We Offer?',
                'ans' => 'We offer a range of AI token creation services, including consultation, design, development, testing, launching, and ongoing maintenance. Our comprehensive approach ensures a successful and seamless token launch.'
            ],
            [
                'ques' => 'What Are the Common Use Cases for AI Crypto Tokens?',
                'ans' => 'Common use cases for AI crypto tokens include portfolio management, economic infrastructure, data security, oracle solutions, trading algorithms, and digital character creation. Each use case leverages tokens to enhance functionality and market presence.'
            ],
            [
                'ques' => 'Which Company is Best for AI Token Development?',
                'ans' => 'The best company for AI token development will have a proven track record, deep expertise in blockchain and AI technologies, and a comprehensive service offering. Look for a team that delivers high-quality results and supports you throughout the development process.'
            ],
        ],
    ])


    </div>
    <script src="js/jquery.min.js" type="49fcec0a799c8107fa562c32-text/javascript"></script>
    <script type="49fcec0a799c8107fa562c32-text/javascript">
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
    <script type="49fcec0a799c8107fa562c32-text/javascript">
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
    <script src="js/vendor.js" type="49fcec0a799c8107fa562c32-text/javascript"></script>
    <script src="js/plugins.js" type="49fcec0a799c8107fa562c32-text/javascript"></script>
    <script src="js/main.js" type="49fcec0a799c8107fa562c32-text/javascript"></script>
    <script src="build/js/intlTelInput.js" type="49fcec0a799c8107fa562c32-text/javascript"></script>
    <script type="49fcec0a799c8107fa562c32-text/javascript">
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
    <script type="49fcec0a799c8107fa562c32-text/javascript">
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
    <script type="49fcec0a799c8107fa562c32-text/javascript">
        $('.view_pricing').click(function() {
            $('html, body').animate({
                scrollTop: $('#pricing-section').offset().top
            }, 2000);
        });
    </script>
    <script type="49fcec0a799c8107fa562c32-text/javascript">
        var url = window.location.href;
        $('#url').val(url);
    </script>
    <script type="49fcec0a799c8107fa562c32-text/javascript">
        $(".pricing-body").mCustomScrollbar({
            theme: "minimal"
        });
    </script>
    <script type="49fcec0a799c8107fa562c32-text/javascript">
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
    </style>

    <a class="sticky_form_bp color-btn1 hidden-lg"
        href="https://www.blockchainappfactory.com/create-your-own-token-and-coin"
        style="color:#fff !important;">Contact to Create a Token! </a>
    <div class="sticky-form">
        <div class="formdiv">
            <form class="form-side" id="mailForm_sticky" method="post" action>
                <h4>Connect With Us</h4> <button type="button" class="close" aria-label="Close quick contact"><i
                        class="fa fa-times-circle" aria-hidden="true"></i></button>
                <hr>
                <div class="form-group"><label for="name">Name</label><input type="text" class="form-control"
                        name="name" id="name_sticky" placeholder="Your Name"> </div>
                <div class="form-group"><label for="email">Email Address</label><input type="email" class="form-control"
                        name="email" id="email_sticky" placeholder="Your Email"> </div>
                <div class="form-group"><label for="skype">Skype</label><input type="text" class="form-control"
                        name="skype" id="skype_sticky" placeholder="Your Skype"> </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input id="phone_sticky" name="phone_dummy" type="text" required
                        oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        data-cf-modified-49fcec0a799c8107fa562c32->
                    <input type="hidden" name="phone" id="phone_newsletter">
                    <input type="hidden" name="url" id="url" value="/ai-token-development">
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
    <script type="49fcec0a799c8107fa562c32-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
    <script type="49fcec0a799c8107fa562c32-text/javascript"
        src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
        media="screen">
    <script type="49fcec0a799c8107fa562c32-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="49fcec0a799c8107fa562c32-text/javascript">
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

    <script type="49fcec0a799c8107fa562c32-text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 9464790;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <script type="49fcec0a799c8107fa562c32-text/javascript">
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
    <script type="49fcec0a799c8107fa562c32-text/javascript">
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
                <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    target="blank">
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




    <script type="49fcec0a799c8107fa562c32-text/javascript">
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


    <script type="49fcec0a799c8107fa562c32-text/javascript">
        $(".crypto-popup").click(function(e) {
            $('crypto-popup').addClass('fixedPosition full-width');
            $(".login-popup").addClass('show');
            e.stopPropagation();
        });
    </script>

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="49fcec0a799c8107fa562c32-|49" defer></script>
</body>

@endsection