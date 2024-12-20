@extends('layouts.static')
    @section('title', 'Token Gating Platform')
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
        background: linear-gradient(180deg, #32028d, #180134);
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
        min-height: 235px;
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
                                            <h1 itemprop="name">Token Gating Solutions</h1>
                                        </div>
                                        <p itemprop="text">Build a cutting-edge token gating platform to deliver exceptional experiences to your valued community. Leveraging our expertise in token-based applications, you’ll unlock seamless access to a global audience.</p>
                                        <div class="txt">
                                            {{-- <a href="#demo"
                                                class="nectar-button medium regular accent-color regular-button nec-btn">VIEW DEMO</a> --}}
                                            <a href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important;">CONNECT WITH OUR EXPERTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center"> 
                            <img class="magic" src="{{ asset('images/token-gating-platform/banner-img.webp') }}" alt=" " title=" "> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Revolutionize Access Control with Our Token Gating Technology</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center">The rise of Web3 technology has unlocked numerous opportunities in the digital realm. Our token gating platform enhances your brand's engagement by leveraging NFT-gated content to create exclusive, community-focused experiences.<br><br>
                        With NFT-based token gating, you can offer unparalleled access and exclusivity that fosters a sense of belonging and prestige. Our expertise in building token-gated applications will amplify your premium offerings and position you at the forefront of the evolving crypto landscape.</p>

                    </div>

                    <div class="clearfix"></div>

                    <div class="text-center cta_mine txt"> 
                        {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a>  --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>CONNECT WITH OUR EXPERTS</span></a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="common_spacing gray_bg">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title-th sec_tit underline">Lead the Market with Innovative Token Gating Platform Development</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p class="text-center">In today's market, where unique experiences are highly sought after, token gating platform development stands out as a premier business model. These platforms create a sense of exclusivity and enable businesses like yours to cultivate a dedicated community.<br><br>
                If you aim to provide premium, access-controlled experiences, a token-gating platform is the ideal starting point. Our team excels in crafting these applications with precision, utilizing advanced technologies to ensure flawless functionality. Leverage our expertise to launch a sophisticated NFT-gated business platform tailored to your needs.</p>
            </div>
        </div>
    </div>
</div>


<style>
    .perfect-script-items1 .icon .lazy{
        margin-top: 12px;
    }
</style>

@include('static.bounce-effect-left-cut-card', [
    'title' => "Capabilities of Token-Gated NFT Platform Development",
    'desc' =>  "Token-gated NFT platform development unlocks a range of innovative opportunities for savvy businesses in the Web3 arena. With our expertise, you can create a premier application tailored to your needs.",
    'cards' => [
        [
            'title' => "Token-Gated Communities",
            'desc' => "Foster meaningful connections among like-minded individuals by providing access to exclusive, niche-specific sessions and discussions through a token-gated community.",
            'image' => 'token-gating-platform/icons/community.png',
        ],
        [
            'title' => "Token-Gated Memberships",
            'desc' => "Enhance your brand's market presence by offering token-gated memberships that deliver unique experiences, discounts, and loyalty rewards to your customers.",
            'image' => 'token-gating-platform/icons/business.webp',
        ],
        [
            'title' => "Token-Gated Digital Content",
            'desc' => "Empower creators to grant token holders access to exclusive digital content, such as behind-the-scenes footage, special releases, and personal interactions.",
            'image' => 'token-gating-platform/icons/content.png',
        ],
        [
            'title' => "Token-Gated Events",
            'desc' => "Facilitate memorable real-world engagements with token-gated events that offer unparalleled experiences to attendees, driving deeper connections and exclusivity.",
            'image' => 'token-gating-platform/icons/events.webp',
        ],
    ],
])

@include('static.left-square-image-card', [
    'title' => 'Harness the Power of Token Gating for Enhanced Business Engagement',
    'desc' => "Operating a Web3 token gating platform has transcended beyond a trendy option to become a vital tool for maximizing engagement in the dynamic Web3 landscape. These platforms drive exceptional interaction for creators and businesses, often beyond what conventional methods achieve.",
    'cards' => [
        [
            'title' => 'Enhanced Security',
            'desc' => "Token gating platforms bolster security by ensuring that only verified token holders can access content, providing a robust solution for businesses that prioritize a secure digital environment.",
            'image' => 'token-gating-platform/icons/security.png',
        ],
        [
            'title' => 'Revolutionized Exclusivity',
            'desc' => "NFT-gated access redefines exclusivity by leveraging blockchain technology to eliminate counterfeit access passes, ensuring that only genuine token holders gain entry.",
            'image' => 'token-gating-platform/icons/access.png',
        ],
        [
            'title' => 'Optimized Reward Programs',
            'desc' => "Token gating enhances reward programs by enabling businesses to distribute incentives, offers, and discounts based on the loyalty of token holders, all managed transparently via blockchain.",
            'image' => 'token-gating-platform/icons/rewards.png',
        ],
        [
            'title' => 'Additional Revenue Stream',
            'desc' => "Utilizing blockchain tokens for access gating creates a new revenue stream for brands, businesses, and creators, offering valuable experiences that justify the investment for token purchasers.",
            'image' => 'token-gating-platform/icons/revenue.webp',
        ],
        [
            'title' => 'Enhanced Community Engagement',
            'desc' => "Token gating is an effective strategy for deepening engagement within your community. By restricting access to exclusive chats and interactions to token holders, businesses can cultivate a more immersive and dedicated following.",
            'image' => 'token-gating-platform/icons/community.png',
        ],
    ],
    'cta1_name' => '',
    'cta1_link' => '',
    'cta2_name' => '',
    'cta2_link' => ''
])

<div id="ret-inv" class="common_spacing" style="background-image: linear-gradient( 311deg , #32028d 0%, #020e28);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2 class="text-white">Ready to Launch Your Token Gating Platform?
                    <br>Empower Your Web3 Initiative Today!
                </h2>
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
                            href=""
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>Book a Consultation</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Specialists</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="p-60 pre-ico-sec-1 gray-bg">
    <div class="container">
        <div class="row">
            <div class="main-sections">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-header underline text-center">
                        <h3 class="title-th sec_tit">How Token Gating Operates</h3>
                    </div>
                    <div class="why-adit container-center">
                        <p class="text-center">NFT-driven token gating has surged in popularity for its unique ability to forge meaningful connections between businesses and consumers. These platforms utilize a powerful model of exclusivity to maximize engagement.</p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="card-big-shadow">
                                <div class="why-adit-list">
                                    <div class="icon"> <img class="lazy"
                                            src="{{ asset('images/token-gating-platform/icons/wallet.png') }}" alt=""> </div>
                                    <div class="content">
                                        <h4>Connect Wallet</h4>
                                        <p>Users initiate the process by linking their wallet to the token-gated platform, enabling access to the restricted content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="card-big-shadow">
                                <div class="why-adit-list">
                                    <div class="icon"> <img class="lazy"
                                            src="{{ asset('images/token-gating-platform/icons/digital-assets.webp') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Asset Verification</h4>
                                        <p>The platform's authentication system verifies the wallet's tokens, ensuring the user holds the necessary assets for entry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="card-big-shadow">
                                <div class="why-adit-list">
                                    <div class="icon"> <img class="lazy"
                                            src="{{ asset('images/token-gating-platform/icons/experiences.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Access Granted</h4>
                                        <p>Upon successful verification, users can access the NFT token-gated platform
                                            to gain exclusive holder-only experiences.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
</section>


<style type="text/css">
    .workflow {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        padding: 0;
        margin: 0
    }

    .workflow h3 {
        font-size: 18px;
        padding: 10px 0;
    }

    .workflow li {
        text-align: center;
        background: #f2f2f2;
        border-radius: 7px;
        margin: 1.5%;
        padding: 20px 10px;
        width: 27%;
        position: relative
    }

    .workflow li img {
        width: 55px
    }

    .workflow li p {
        margin-bottom: 0;
        font-weight: 400
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
        border-left: 15px solid #47b475
    }

    .workflow li:last-child:after {
        display: none
    }

    .workflow .fa {
        color: #47b475;
        font-size: 32px;
        margin-top: 7px
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
</style>

<section class="roadmap" id="roadmap">
    <div class="transition-gradient-after adjust-top"></div>
    <div class="container">
        <div class="dots-vert"></div>
        <div class="row">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20">Exceptional Features of Our NFT Token Gating Platform Development<span style="color:#47b475;"> </span></h2>
                </div>
                <p class="text-center">With extensive experience in developing Web3 applications, our NFT token gating platform development services empower you to integrate top-tier features that ensure seamless functionality at all times.
                </p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-12">
                <ul class="workflow">
                    <li><img class="lazy" src="{{ asset('images/token-gating-platform/icons/ownership.webp') }}">
                        <h3>Proof-of-Ownership</h3>
                        <p>NFTs serve as definitive proof of ownership, enabling users to quickly verify their access rights with just a few clicks.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/token-gating-platform/icons/login.png') }}">
                        <h3>Authenticated Login</h3>
                        <p>Users gain access to your token-gated app through NFT verification, fostering a robust and engaged community for your Web3 initiative.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/token-gating-platform/icons/content.png') }}">
                        <h3>Token-Gated Content</h3>
                        <p>Our expertise allows you to restrict access to various types of content within your business using tokens, ensuring smooth and secure interactions.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/token-gating-platform/icons/community.png') }}">
                        <h3>Token-Gated Groups</h3>
                        <p>Specialized community groups on platforms like Discord and Telegram can be token-gated, offering unique experiences to your most loyal customers.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/token-gating-platform/icons/ui.png') }}">
                        <h3>Token-Gated Website</h3>
                        <p>Restrict access to entire websites or specific pages using exclusive crypto tokens, granting entry to specialized content.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/token-gating-platform/icons/security.png') }}">
                        <h3>Secured Environment</h3>
                        <p>Our token gating platforms are built with advanced security measures to ensure a safe and protected environment for users.</p>
                    </li>

                    <li><img class="lazy" src="{{ asset('images/token-gating-platform/icons/nft-collections.webp') }}">
                        <h3>Infused Data</h3>
                        <p>Our development process includes strategies for efficiently collecting and analyzing user data relevant to your token-gated venture.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/token-gating-platform/icons/dashboard.png') }}">
                        <h3>Simplified Dashboard</h3>
                        <p>Manage and monitor all statistics related to your token-gated application with ease through our streamlined dashboard.</p>
                    </li>
                    <li><img class="lazy" src="{{ asset('images/token-gating-platform/icons/analytics.png') }}">
                        <h3>Platform Analytics</h3>
                        <p>Utilize powerful analytics tools to assess and enhance your business strategy by understanding how your NFT-gated community engages with content.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<style>
    .feature-box-3 .icon img{
        margin-top: 12px;
    }
</style>

<div id="our_services" class="defisec gray_bg">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="common_h3 title-th sec_tit">Token-Gated E-Commerce Platform Development for Web3 Enterprises</h3>
            <hr>
            <p>As Web3 retail gains momentum, the demand for sophisticated token-gated e-commerce solutions is skyrocketing. We offer unparalleled expertise to help you launch cutting-edge token gating applications with exceptional functionality and user experience.</p>
        </div>
        <div class="grids">
            <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                <div class="feature-box-3">
                    <div class="icon"> <img src="{{ asset('images/token-gating-platform/icons/e-commerce.png') }}" alt=""
                            class="lazy" width="45px;"> </div>
                    <h4 class="feature-title common_h4">E-Commerce Store Creation</h4>
                    <p class="feature-desc mb0">We design and build bespoke online stores tailored to your niche, incorporating premium features and distinct branding elements.</p>
                </div>
            </div>
            <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                <div class="feature-box-3">
                    <div class="icon"><img src="{{ asset('images/token-gating-platform/icons/tokens.png') }}" alt="" class="lazy"
                            width="45px;"> </div>
                    <h4 class="feature-title common_h4">Token Gate Development</h4>
                    <p class="feature-desc mb0">Our team crafts advanced token gating mechanisms that manage access by verifying and authenticating blockchain-based tokens seamlessly.</p>
                </div>
            </div>
            <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                <div class="feature-box-3">
                    <div class="icon"> <img src="{{ asset('images/token-gating-platform/icons/products.svg') }}" alt=""
                            class="lazy" width="45px;"></div>
                    <h4 class="feature-title common_h4">Product Generation</h4>
                    <p class="feature-desc mb0">We set up systems for creating on-demand virtual products, allowing you to concentrate on expanding your market presence.</p>
                </div>
            </div>
        </div>
        <div class="text-center cta_mine mt40 txt"> 
            {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                href="#" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a>  --}}
            <a href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>TALK WITH OUR EXPERTS</span></a> 
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


@include('static.two-line-left-card', [
    'title' => 'Notable Token-Gated Projects Making Waves', 
    'desc' => "",
    'cards' => [
        [
            'title' => 'Bored Ape Yacht Club',
            'desc' => "NFT holders from the Bored Ape Yacht Club enjoy privileged early access to exclusive token sales and high-profile themed events.",
            'image' => 'token-gating-platform/icons/bayc.webp'
        ],
        [
            'title' => 'VeeCon',
            'desc' => "Owners of VeeCon NFTs gain entry to VeeCon conferences for Web3 enthusiasts after completing a rigorous two-step verification.",
            'image' => "token-gating-platform/icons/veecon.png"
        ],
        [
            'title' => 'FlyFish Club',
            'desc' => "FlyFish Club NFT holders unlock access to an exclusive dining experience at a private restaurant in New York City, along with other premium perks.",
            'image' => 'token-gating-platform/icons/flyfish.png'
        ],
        [
            'title' => 'Stoner Cats',
            'desc' => "NFT holders from the Stoner Cats collection can view the animated series and actively participate in shaping its future episodes.",
            'image' => 'token-gating-platform/icons/stoner-cats.png'
        ],
        [
            'title' => 'The Block',
            'desc' => "The Block’s token-gating system enables token holders to unlock premium content related to the global crypto industry behind paywalls.",
            'image' => 'token-gating-platform/icons/block.png'
        ],
        [
            'title' => 'Adidas',
            'desc' => 'Adidas ALT NFT holders can purchase limited-edition virtual and physical merchandise, including exclusive event passes within the Adidas metaverse.',
            'image' => 'token-gating-platform/icons/adidas.png'
        ],
    ],
])



<style type="text/css">
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
        text-align: center;
        font-size: 30px;
        color: #47b475;
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
        font-size: 30px;
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

<div class="clearfix"></div>


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
    .perfect-script-items {
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
        font-size: 36px;
        color: #fff;
        line-height: 2.5em;
    }

    .app-icon img {
        width: 65px;
        border-radius: 50%;
        /*filter: brightness(0) invert(1);*/
    }

    .app-overview .media .media-body {
        padding-left: 33px;
    }

    .media-body h4 {
        font-weight: 700;
    }
</style>



<div class="common_spacing" style="background: #368b5a;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title text-center">
                    <h4 class="title-th sec_tit underline text-white">Why Partner With Us for Your NFT Token-Gated Platform Development?</h4>
                </div>
                <p class="text-center mt20 text-white">We specialize in crafting cutting-edge NFT token-gated platforms using advanced technology stacks. Our extensive experience with diverse blockchain systems, combined with our track record of success, provides a strategic advantage from the outset. Our solutions offer comprehensive customization, enabling you to build a feature-rich, highly functional token-gated platform tailored to your needs. Ready to deliver exclusive, high-value experiences to your dedicated customers? Leverage our expert services to bring your Web3 vision to life today!</p>
            </div>
        </div>
    </div>
</div>


{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What are SocialFi Development Solutions?',
            'ans' => "SocialFi development solutions involve creating decentralized platforms that merge social networking with financial incentives. These platforms leverage blockchain technology to offer users opportunities to earn rewards through social interactions and content creation."
        ],
        [
            'ques' => 'Why is SocialFi Popular Among Content Creators?',
            'ans' => "SocialFi is gaining traction among content creators because it provides financial rewards for engagement and content production. By integrating blockchain technology, creators can monetize their work more effectively and engage directly with their audience."
        ],
        [
            'ques' => 'Is SocialFi Platform Development a Viable Business Model?',
            'ans' => "Yes, SocialFi platform development is a compelling business model as it taps into the growing demand for decentralized social networks. With the ability to offer unique financial incentives and greater user control, it presents a lucrative opportunity in the digital space."
        ],
        [
            'ques' => 'What are the Benefits of Creating SocialFi Applications?',
            'ans' => "Creating SocialFi applications offers numerous benefits, including enhanced user engagement, direct monetization for content creators, and a decentralized approach that ensures transparency and security. These platforms also foster stronger community connections and loyalty."
        ],
        [
            'ques' => 'Which Company Provides the Best Decentralized Social Media Platform Development Services?',
            'ans' => "The best company for decentralized social media platform development is one with a proven track record in blockchain technology and SocialFi solutions. Look for firms that offer comprehensive expertise, innovative solutions, and a successful history of delivering high-quality platforms."
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