@extends('layouts.static')
    @section('title', 'Token Marketing Services')
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
        background: #1849ee !important;
    }

    .banner {
        background-image: url(images/chatgpt-applications-development/bg.webp);
        background-size: cover;
        padding-top: 165px;
        padding-bottom: 70px;
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
        background-color: #000447 !important;
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
        color: #1849ee;
        border: 2px solid #1849ee;
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
        background: linear-gradient(#1849ee, #1849ee);
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
        box-shadow: 2px 4px #1849ee;
        border: 3px solid #1849ee;
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
        /*            background: url(images/lab/dot-shape.webp) #368b5acf;*/
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
        background-color: #1849eef5;
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
        background: #1849ee;
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
        color: #1849ee;
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

    .nectar-button {
        background: #1849ee !important;
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
        color: #1849ee;
    }

    .bgg {
        background-image: linear-gradient(179deg, #1849ee 0%, #19aec5 74%);
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
        box-shadow: 0px 14px 80px #1849ee6b;
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
        background: #1849ee;
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

    @media screen and (min-width: 320px) {
        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
            margin-top: 15px !important;
            display: inline-block;
            margin-right: 20px !important;
            border-radius: 30px;
        }

    }

    @media screen and (max-width: 320px) {
        .Package_list {
            width: 49% !important;
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
        background: #1849ee;
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
        background: #1849ee;
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
        color: #1849ee;
        font-weight: 700;
    }

    a.internal_link:hover {
        color: #1849ee !important;
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
        color: #1849ee;
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

    p strong {
        color: #000 !important;
    }

    a[type="button"] {
        background: #1849ee none repeat scroll 0 0;
        color: #fff;
        font-weight: 700;
        cursor: pointer;
        padding: 10px 20px;
        border-radius: 3px;
    }

    .theme-color-bg {
        background: #1849ee none repeat scroll 0 0 !important;
        color: #fff;
        font-weight: 700;
    }

    .ul-style-3 li .list-icon {
        background: #1849ee !important;
    }

    /*------------ Complimentary-Features Style -----------*/
    .complimentary-features ul li {
        text-align: left !important;
    }

    .complimentary-features {
        padding: 60px 0px;
        background: #000447;
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
        width: 20%;
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

    .banner-img {
        position: absolute;
        top: 0;
        right: 0;
        zoom: 1.3;
        z-index: 1
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
            width: 26%;
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
            background-color: rgba(0, 0, 0, .6);
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
            background-image: url('images/marketing-form-bg.webp');
            background-size: cover;
            background-position: center;
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
        }
    </style>

    <div class="login-popup">
        <div class="box-1">
            <div class="img"></div>
            <div class="img-area">



                <h3 class="text-white text-center">Reach the Global Web3 Market Effortlessly!</h3>
                <br>
                <p class="text-white text-center" style="margin-bottom: 20px; font-size:16px;">The essence of promotions
                    in today’s Web3 world is unparalleled. We emphasize this by being the marketing partner for these
                    esteemed Web3 brands:</p>

                <ul class="popup-ul">
                    <li><img src="images/nftm/sui.webp">
                        <p>Sui</p>
                    </li>
                    <li><img src="images/nftm/ton.webp">
                        <p>TON</p>
                    </li>
                    <li><img src="images/nftm/aptos.webp">
                        <p>Aptos</p>
                    </li>
                    <li><img src="images/nftm/sandbox.webp">
                        <p>Sandbox</p>
                    </li>
                    <li><img src="images/nftm/coindcx.webp">
                        <p>CoinDCX</p>
                    </li>
                    <li><img src="images/nftm/coinswitch.webp">
                        <p>CoinSwitch</p>
                    </li>
                </ul>

            </div>
            <div class="form">
                <div class="close">&times;</div>
                <h3 class="text-white text-center">Do you want your Web3 project to garner global recognition?</h3><br>
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
                        class="btn" data-cf-modified-32072a9433388deff87e5f33-="">Submit</button>
                </form>

                <div class="social">
                    <a rel="nofollow" rel="noopener" aria-label="Whatsapp" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calendar" aria-hidden="true"
                            title="Calendly"></i> Schedule A Meeting &nbsp;</a>

                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#aac3c4ccc5eac8c6c5c9c1c9c2cbc3c4cbdadacccbc9dec5d8d384c9c5c7"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>

            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="32072a9433388deff87e5f33-text/javascript">
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
                        <div class="col-md-5 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1 itemprop="name">Elevate Your Token Project with Our Premier Marketing Agency</h1>
                                        </div>
                                        <p itemprop="text">Amplify your project’s visibility with our elite token marketing services. We deploy cutting-edge strategies to ensure your token garners exceptional attention from your target audience.</p>
                                        <div class="txt">
                                            <a rel="nofollow" href="{{ url('consultation') }}"
                                                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Experts</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center"> 
                            <img class="magic" src="{{ asset('images/token-marketing-services/banner-img1.png') }}" alt="Token Marketing Agency"
                                title="Token Marketing Agency">
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
        background: #bf1131;
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

    @media screen and (max-width:320px) {
        .stats p {
            font-size: 10px;
        }
    }

    #counter-stats .stats:nth-child(1) {
        background: #0026a4;
    }

    #counter-stats .stats:nth-child(2) {
        background: #1849ee;
    }

    #counter-stats .stats:nth-child(3) {
        background: #0026a4;
    }

    #counter-stats .stats:nth-child(4) {
        background: #1849ee;
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

<section id="we-provide" class="common_spacing">
    <div class="container">
        <div class="section-title text-center">
            <h4 class="underline">Introduce Your Projects with Our Elite Token Marketing Firm</h4>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
            <p class="text-center">Navigating the complexities of the blockchain industry requires a bespoke marketing strategy. Our seasoned experts excel in managing market fluctuations, leveraging new technologies, and addressing ongoing challenges to ensure your token projects achieve remarkable success. As a premier token marketing firm, we deliver unparalleled service, meticulously planning and executing campaigns to optimize resource allocation and amplify effectiveness.
            </p>
        </div>
    </div>
    <div class="text-center cta_mine txt"> 
        {{-- <a rel="nofollow"
            class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
            href="#" data-color-override="false"
            data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule a Meeting</span></a> --}}
        <a rel="nofollow" href="{{ url('consultation') }}"
            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Consult with Our Experts</span></a>
    </div>
</section>



<style type="text/css">

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
    .awesome1-features-wrapper::after {
        content: "";
        position: absolute;
        right: -6px;
        top: -6px;
        background: #1849ee;
        width: 90px;
        height: 90px;
        z-index: -1;
        transition: 1s;
        border-radius: 7px;
    }

    .awesome1-features-wrapper:hover::after {
        width: 200px;
        height: 200px;
    }

    .awesome1-features-wrapper {
        /* border: 1px solid #cdcdcd; */
        background: #fff;
        padding-top: 30px;
        padding-bottom: 20px;
        min-height: auto;
        transition: .3s;
        position: relative;
        margin-bottom: 30px;
        border-radius: 10px;
        transition: 1s;
        border-radius: 7px;
    }

    .awesome1-features-icon-img {
        margin-bottom: 10px;
    }
</style>

<div class="common_spacing" style="background:#eee;">
    <div class="container">
        <div class=" ">
            <h3 class="sec_tit underline text-center">Boost Your Online Presence with Expert SEO Strategies</h3>
            <p class="text-center" style="font-size: 16px;">Our team offers robust token marketing services designed to meet your specific needs and attract a global audience.</p>
        </div>
        <div class="row mt40">
            <div class="container container-center">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome1-features-wrapper text-center mb-30">
                        <div class="awesome1-features-icon-img">
                            <img class="lazy" src="{{ asset('images/token-marketing-services/icons/press-release.webp') }}" style="width: 64px;">
                        </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Press Releases </strong>We amplify awareness of your token through targeted media channels, capturing the attention of potential investors and creating a buzz within the crypto community. Our press releases highlight your token’s value and drive interest and investment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome1-features-wrapper text-center mb-30">
                        <div class="awesome1-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/token-marketing-services/icons/community-marketing.png') }}"
                                style="width: 64px;"> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Community Engagement</strong>
                                    We excel in building vibrant communities around your token, fostering engagement through strategic communication across chats, forums, and social media. Our approach cultivates a loyal following, enhancing visibility and driving growth.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome1-features-wrapper text-center mb-30">
                        <div class="awesome1-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/token-marketing-services/icons/content.png') }}" style="width: 64px;">
                        </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Content Strategy </strong>Our experts craft compelling content to educate and inform about your token’s value. Through insightful blogs, articles, and social media updates, we establish your project as a leading industry player, attracting interest and investment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome1-features-wrapper text-center mb-30">
                        <div class="awesome1-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/token-marketing-services/icons/seo.png') }}" style="width: 64px;">
                        </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Search Engine Optimization (SEO)
                                </strong>Our SEO specialists enhance your project’s online visibility, utilizing targeted keywords and optimization strategies to boost search engine rankings. This attracts organic traffic and potential investors, ensuring sustained exposure and success.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome1-features-wrapper text-center mb-30">
                        <div class="awesome1-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/token-marketing-services/icons/influencer.png') }}" style="width: 64px;">
                        </div>
                        <div class="awesome-features-text">
                            <p> <strong
                                    style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Influencer Partnerships
                                </strong>We partner with influential figures to elevate your token’s profile. By leveraging their authority and reach, we generate substantial interest and investment, building credibility and driving adoption.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome1-features-wrapper text-center mb-30">
                        <div class="awesome1-features-icon-img"> <img class="lazy"
                                src="{{ asset('images/token-marketing-services/icons/social-media.png') }}" style="width: 64px;">
                        </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Social Media Campaigns
                                </strong>Our social media experts craft engaging content and foster meaningful interactions to promote your token project. By creating a dynamic online presence, we expand your audience, generate excitement, and encourage active participation, driving your token’s success.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<style type="text/css">
    .essential-features {
        padding: 70px 0px;
    }

    /*.essential-features .container-fluid{width: 90%;}*/
    .side-tab {
        float: left;
        background: #eee;
        width: 100%;
        padding: 25px;
        border-radius: 10px;
        /*height: 400px;*/
        color: #fff;
    }

    .container-center {
        display: flex;
        flex-wrap: wrap;
        position: relative;
        z-index: 1;
        justify-content: center;
    }

    .equalize {
        display: flex;
        margin: 15px 0;
    }

    .side-tab button {
        display: block;
        background-color: #1849ee;
        color: #fff;
        padding: 6px 15px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
        border-radius: 4px;
        height: auto;
        margin-bottom: 6px;
    }

    .side-tab button:hover {
        background-color: #00b7c2 !important;
    }

    .side-tab button.active {
        background-color: #1849ee !important;
    }

    .tabcontent1 {
        float: left;
        padding: 0px;
        /*border: 1px solid #ccc;*/
        width: 100%;
        border-left: none;
        /*height: 400px;*/
        border-radius: 0 10px 10px 0;
    }

    .tabcontent1 .count-items-content {
        padding: 22px;
        border: 1px solid #eee;
        border-radius: 10px;
    }

    .tabcontent1 .count-items-content:hover {
        box-shadow: 0px 0px 29px rgb(0 0 0 / 16%);
    }

    .tabcontent1 .count-items-content p {
        margin-bottom: 0px;
    }

    .tabcontent1 .count-items-content p strong {
        display: block;
        font-size: 18px;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .tabcontent1 {
            width: 100%;
        }


    }

    #secondTab,
    #thirdTab,
    #fourTab,
    #fiveTab,
    #sixTab,
    #sevenTab,
    #eightTab,
    #nineTab,
    #tenTab,
    #elevenTab,
    #twelveTab,
    #thirteenTab {
        display: none;
    }

    .radio-list {
        /*    width: 210px;*/
        padding: 20px 0;
        margin: 0;
        list-style: none;
        margin: 0 auto;
        display: inline-grid;
    }

    .radio-button {
        color: #000;
        font-size: 14px;
        text-transform: capitalize;
        padding-left: 35px;
        position: relative;
        margin: 0 0 15px;

    }

    .radio-button input[type=radio] {
        margin: auto;
        visibility: hidden;
        position: absolute;
        left: 0;
        top: 0;

    }

    .radio-button label {
        cursor: pointer;
        display: block;
        line-height: 20px;
    }

    .radio-button label:before,
    .radio-button label:after {
        content: "";
        background: #1849ee;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        position: absolute;
        left: 5px;
        top: 5px;
    }

    .radio-button label:after {
        background: transparent;
        border: 2px solid #337ab7 !important;
        transform: scale(4);
        opacity: 0;
        visibility: hidden;
    }

    .radio-button input[type=radio]:checked+label:after {
        opacity: 1;
        visibility: visible;
        transform: scale(2.3);
        animation-name: explode;
        animation-duration: 0.350s;
    }

    @keyframes explode {
        0% {
            opacity: 0;
            transform: scale(10);
        }

        60% {
            opacity: 1;
            transform: scale(1);
        }

        100% {
            opacity: 1;
            transform: scale(2);
        }
    }
</style>



<style>
    .perfect-script-items1 .icon .lazy{
        margin-top: 12px;
    }
</style>


@include('static.bounce-effect-left-cut-card', [
    'title' => 'Our Expertise in Marketing Diverse Token Types', 
    'desc' => '',
    'cards' => [
        [
            'title' => 'Crypto Tokens',
            'desc' => "We deliver a full spectrum of crypto marketing services designed to propel your digital assets to prominence. Our strategic initiatives ensure that your crypto tokens gain enduring visibility and traction in a crowded market.",
            'image' => 'token-marketing-services/icons/tokens.png',
        ],
        [
            'title' => 'Security Token Offerings (STOs)',
            'desc' => "Navigating the complexities of STOs requires specialized strategies. Our marketing services are crafted to build investor confidence and ensure compliance with regulatory standards, facilitating a smooth and successful offering.",
            'image' => 'token-marketing-services/icons/sto.svg',
        ],
        [
            'title' => 'Non-Fungible Tokens (NFTs)',
            'desc' => "Our NFT marketing services are designed to elevate your unique digital assets in a rapidly changing landscape. Whether you’re an artist, content creator, or gaming developer, we expertly position your NFTs to reach the right audience.",
            'image' => 'token-marketing-services/icons/non-fungible.webp',
        ],
        [
            'title' => 'Initial Coin Offerings (ICOs)',
            'desc' => "We lead the field in ICO marketing, creating compelling strategies to attract investor interest and drive participation. Our approach guarantees that your ICO receives the global visibility it needs for a triumphant token sale.",
            'image' => 'token-marketing-services/icons/ico.png',
        ],
        [
            'title' => 'Initial DEX Offerings (IDOs)',
            'desc' => "With IDOs gaining momentum, our marketing services are tailored to maximize the impact of your token launch. From whitepaper development to landing page creation, we ensure your IDO is presented with the highest level of professionalism.",
            'image' => 'token-marketing-services/icons/ido.webp',
        ],
        [
            'title' => 'Initial Exchange Offerings (IEOs)',
            'desc' => "Our IEO marketing services provide a strategic edge for projects aiming to debut on centralized exchanges. We expertly navigate the competitive exchange landscape, ensuring your project stands out and attracts attention.",
            'image' => 'token-marketing-services/icons/ieo.webp',
        ],
    ],
])


<style type="text/css">
    .clients-grid-opacity>div {
        border: 1px solid #bbb;
    }

    .clients-grid-opacity>div {
        background: #fff;
        border: 0;
        margin-left: 0;
        margin-bottom: 0;
        /* opacity: .6; */
        /* transition: all .4s ease-in-out; */
        /* box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.15); */
        /* -webkit-filter: grayscale(300%); */
        /* filter: grayscale(300%);*/
    }
</style>

<style type="text/css">
    .sto-icons li {
        width: 16%;
        margin: 0;
        padding: 30px 20px;
    }

    .sto-icons li span {
        margin: 0;
    }

    .sto-icons li img {
        margin-bottom: 10px;
    }

    .sto-icons li p {
        color: #000;
    }

    @media (max-width: 500px) {
        .horizontal-ul {
            width: 200%;
        }
    }
</style>
<section class="common_spacing ico-uses" style="background: #fff;">
    <div class="container">
        <div class="text-center">
            <h3 class="sec_tit underline ">Digital and Social Media Channels for Superior Crypto Token Marketing</h3>
        </div>
        <div class="marketing_content">
            <p class="text-center">Our seasoned marketing team is committed to delivering premier promotional strategies for your token project. We harness the power of leading digital and social media platforms to amplify your project's visibility and extend its reach to the widest possible audience.</p>
            <ul class="horizontal-ul sto-icons">

                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/twitter.webp') }}" alt="X">
                    <p><span>X</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/discord.webp') }}" alt="Discord">
                    <p><span>Discord</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/reddit.webp') }}" alt="Reddit">
                    <p><span>Reddit</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/youtube.webp') }}" alt="YouTube">
                    <p><span>YouTube</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/linkedIn.svg') }}" alt="LinkedIn"
                        style>
                    <p><span>LinkedIn</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/facebook.webp') }}" alt="Facebook"
                        style>
                    <p><span>Facebook</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/instagram.webp') }}"
                        alt="Instagram" style>
                    <p><span>Instagram</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/medium.webp') }}" alt="Medium"
                        style>
                    <p><span>Medium</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/coinmarketcap.webp') }}"
                        alt="CoinMarketCap">
                    <p><span>CoinMarketCap</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/coingecko.webp') }}"
                        alt="CoinGecko">
                    <p><span>CoinGecko</span></p>
                </li>
            </ul>
        </div>

    </div>
</section>



<style type="text/css">
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

    .Package_list {
        background: #92c1f6 !important;
    }

    .Package_list {
        display: inline-block;
        background: rgba(0, 0, 0, .6);
        padding: 30px 10px;
        /* max-width: 280px; */
        width: 25%;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
    }
</style>

@include('static.web3-clients', array(
    'title' => "Prominent <span style='color:#47b475;'>Web3 Projects</span> <br> We've Elevated to Renown",
    'desc' => "As a leading Web3 marketing agency, we deliver exceptional services tailored to elevate projects to their target audiences using a diverse array of strategies. Our commitment to excellence has positioned us as trusted partners for top Web3 enterprises, driving remarkable success and widespread recognition."
))


<div class="intro_cnt common_spacing" style="background: #001f85;">
    <div class="container">
        <div class="row">
            <div class="sec_tit underline text-center" style="width: 100%">
                <h2 class="text-white">The Transformative Effect of Our Token Marketing Solutions</h2>
            </div>
            <p class="text-center text-white" style="width: 100%">Our token marketing strategies empower businesses to make a significant market impact and unlock a range of benefits:</p>

        </div>
        <div class="version-table">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-11">
                    <div class="row container-center">
                        <div class="col-md-3 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/token-marketing-services/icons/Campaign.png') }}" alt style="width:64px;"></i>
                                </div>
                                <h3 class="title1 text-white">Optimized Resource Allocation</h3>
                                <p class="description1 text-white">Our strategic campaigns ensure efficient use of resources—capital, talent, and time—by aligning incentives and maximizing impact.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/token-marketing-services/icons/global.png') }}" alt style="width:64px;"></i>
                                </div>
                                <h3 class="title1 text-white">Global Outreach</h3>
                                <p class="description1 text-white">By harnessing blockchain's decentralized power, we extend your market reach globally, transcending traditional financial system limitations.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/token-marketing-services/icons/transparency.webp') }}" alt style="width:64px;"></i>
                                </div>
                                <h3 class="title1 text-white">Enhanced Transparency and Trust</h3>
                                <p class="description1 text-white">Leveraging blockchain’s immutable ledger, we build user trust and meet the growing demand for transparency and accountability.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/token-marketing-services/icons/liquidity.webp') }}" alt style="width:64px;"></i>
                                </div>
                                <h3 class="title1 text-white">Boosted Liquidity</h3>
                                <p class="description1 text-white">Our expertise drives increased liquidity for your tokens, enhancing their attractiveness to potential investors.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/token-marketing-services/icons/brand.png') }}" alt style="width:64px;"></i>
                                </div>
                                <h3 class="title1 text-white">Elevated Brand Awareness</h3>
                                <p class="description1 text-white">We amplify your project's visibility with dynamic marketing campaigns, distinguishing it in a saturated market.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/token-marketing-services/icons/user.png') }}" alt style="width:64px;"></i>
                                </div>
                                <h3 class="title1 text-white">Increased User Adoption</h3>
                                <p class="description1 text-white">Our targeted marketing strategies promote engagement and collaboration, fostering beneficial user behaviors.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/token-marketing-services/icons/investors.png') }}" alt style="width:64px;"></i>
                                </div>
                                <h3 class="title1 text-white">Strengthened Investor Relations</h3>
                                <p class="description1 text-white">Our approaches facilitate real-time engagement between your project and investors, fortifying relationships.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/token-marketing-services/icons/innovation.png') }}" alt
                                            style="width:64px;"></i>
                                </div>
                                <h3 class="title1 text-white">Fostering Innovation</h3>
                                <p class="description1 text-white">We inspire creativity and innovation among developers and users, enhancing your project’s competitive edge.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="shape-1">
                <img src="images/token-marketing-services/icons/arw-shape.webp" alt>
            </div> --}}
        </div>
    </div>
</div>

<style type="text/css">
    .steps {
        padding: 60px 0
    }

    .steps ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center
    }

    .steps li p strong {
        display: block;
        font-size: 20px;
        color: #241054
    }

    .steps li {
        width: 31 !important%;
        margin: 1%;
        border: 1px solid #337ab7;
        border-radius: 7px;
        padding: 20px
    }

    .steps li .icons {
        width: 70px;
        height: 70px;
        margin-top: 10px;
        margin-bottom: 20px;
        padding: 13px;
        position: relative;
        z-index: 1
    }

    .steps li .icons:before {
        content: '';
        position: absolute;
        width: 100px;
        height: 90px;
        background: linear-gradient(#337ab7, #12aed4);
        z-index: -3;
        left: -21px;
        top: -10px;
        border-radius: 0 50px 50px 0;
        border-left: 0
    }

    .steps li .icons:after {
        content: '';
        position: absolute;
        width: 70px;
        height: 70px;
        background: #fff;
        border-radius: 50%;
        z-index: -2;
        left: 0;
        top: 0
    }

    .steps-item {
        position: relative
    }

    .steps-item span {
        position: absolute;
        z-index: 1;
        top: 5%;
        right: 5%;
        font-size: 7em;
        opacity: .2;
    }

    .steps-item h4 {
        font-size: 20px;
    }

    @media screen and (min-width: 768px) {
        .steps li {
            width: 47%;
        }
    }

    @media screen and (min-width: 320px) {
        .steps li {
            width: 100%;
        }
    }

    @media screen and (min-width: 1024px) {
        .steps li {
            width: 31%;
        }
    }
</style>


@include('static.left-cut-image-card', [
    'title' => "Our Strategic Methodology for Cryptocurrency Token Marketing", 
    'desc' => "We excel in managing every phase of delivering exceptional token marketing solutions, designed to elevate your project's market presence and build trust.",
    'cards' => [
        [
            'title' => "Initial Phase",
            'desc' => "We start with comprehensive market research to pinpoint your target audience and analyze competitors. We then craft a persuasive whitepaper, develop a professional website, and establish robust social media profiles to lay a strong foundation.",
            'image' => 'token-marketing-services/icons/audience.png'
        ],
        [
            'title' => 'Active Promotions',
            'desc' => "We drive engagement through vibrant community-building and dynamic social media campaigns. Our content marketing, PR initiatives, and video promotions amplify your message, while strategic partnerships and collaborations enhance credibility and extend reach.",
            'image' => 'token-marketing-services/icons/promotions.webp'
        ],
        [
            'title' => 'Pre-Launch',
            'desc' => "As the launch approaches, we implement whitelisting to reward early adopters and bolster security. We employ viral marketing techniques to generate excitement and ensure a well-prepared and enthusiastic audience for your token's debut.",
            'image' => 'token-marketing-services/icons/security.png'
        ],
        [
            'title' => "Launch Day",
            'desc' => "On launch day, we facilitate pre-sales to ignite interest and set the stage for a successful listing on major exchanges. Our expert team ensures broad exposure and drives early adoption through targeted strategies.",
            'image' => 'token-marketing-services/icons/exchange.png'
        ],
        [
            'title' => "Post-Launch",
            'desc' => "Following the launch, we rigorously assess campaign performance and continue focused promotions to sustain momentum. This includes tracking vital metrics, engaging with the community, and adjusting strategies to maintain growth and keep your project in the spotlight.",
            'image' => 'token-marketing-services/icons/promotions.webp'
        ],
    ],
])

<style type="text/css">
    .featured-icon-box.style3 .featured-desc:after {
        position: absolute;
        content: '';
        width: 0;
        height: 0;
        border-bottom: 34px solid #337ab7;
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


    .featured-icon-box.style3 .featured-title h4 {
        font-size: 20px;
        line-height: normal;
        margin: 15px 0 10px;
        text-align: center;
    }

    .featured-icon-box.style3:before {
        background-color: #337ab7;
    }

    .featured-icon-box.style3 .cmt-icon.cmt-icon_element-size-lg {
        margin-bottom: 0px;
        text-align: center;
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
        width: 100%;
    }

    .featured-icon-box.style3:hover {
        border-left: 2px solid #337ab7;
        transition: .1s all ease;
    }

    .featured-icon-box.style3 {
        position: relative;
        margin: 15px 0;
        background-color: #e6f4fa;
    }

    .featured-desc {
        text-align: center;
    }


    .main-timeline7 .timeline7 {
        padding: 0 5px;
        position: relative;
    }
</style>

<section class="common_spacing " style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <h3 class="sec_tit underline text-center">Additional Token Marketing Strategies to Elevate Your Campaign</h3>
        </div>
        <p class="text-center" style="color: #000;">Our seasoned team employs a range of cutting-edge token marketing tactics designed to enhance your token’s value and captivate investors.</p>
        <div class="row mt40">
            <div class="container container-center">
                <div class="col-lg-3 col-md-3 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="img-fuild lazy" style="width: 65px !important; height:65px !important;"
                                        src="{{ asset('images/token-marketing-services/icons/ads.webp') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h4>Paid Advertisements</h4>
                            </div>
                            <div class="featured-desc">We craft precise ad campaigns to target potential investors, boosting your token’s visibility and drawing high-quality leads. This approach maximizes engagement and delivers a substantial return on investment.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 m-auto equalize">
                    <div class="featured-icon-box  text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="img-fuild lazy" style="width: 65px !important; height:65px !important;"
                                        src="{{ asset('images/token-marketing-services/icons/airdrops.webp') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h4>Airdrops & Bounty Campaigns</h4>
                            </div>
                            <div class="featured-desc">We design and oversee airdrop and bounty programs that incentivize users to promote your project. These initiatives stimulate community activity, amplify word-of-mouth marketing, and broaden your reach.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="img-fuild lazy" style="width: 65px !important; height:65px !important;"
                                        src="{{ asset('images/token-marketing-services/icons/video.png') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h4>Video Marketing</h4>
                            </div>
                            <div class="featured-desc">Our specialists produce captivating videos that showcase your token’s value and vision. These videos emotionally connect with viewers, enhancing trust, attracting investors, and increasing overall visibility.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="img-fuild lazy" style="width: 65px !important; height:65px !important;"
                                        src="{{ asset('images/token-marketing-services/icons/email-marketing.png') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h4>Email Marketing</h4>
                            </div>
                            <div class="featured-desc">We execute strategic email campaigns to keep your audience informed and engaged. By providing tailored updates, we nurture relationships, drive interest, and boost loyalty and conversions.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center cta_mine txt"> 
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                href="#" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with Our Experts</span></a>
        </div>
    </div>
</section>


<style type="text/css">
    .sto-icons li {
        width: 19%;
        margin: 0;
        padding: 30px 20px;
    }

    .sto-icons li span {
        margin: 0;
    }

    .sto-icons li img {
        margin-bottom: 10px;
    }

    .sto-icons li p {
        color: #000;
    }
</style>
<section class="common_spacing ico-uses" style="background: #e6f4fa;">
    <div class="container">
        <div class="text-center">
            <h3 class="sec_tit underline ">Industries That Thrive from Our Token Promotion Services</h3>
        </div>
        <div class="marketing_content">
            <p class="text-center">Harnessing the power of blockchain technology, our token promotion services drive capital growth and brand recognition across diverse sectors:</p>
            <ul class="horizontal-ul sto-icons">
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/blockchain.webp') }}"
                        alt="Blockchain" style="filter: invert(1);">
                    <p><span>Blockchain and Cryptocurrency</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/healthcare.webp') }}"
                        alt="Healthcare">
                    <p><span>Healthcare</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/real-estate.webp') }}"
                        alt="Real Estate">
                    <p><span>Real Estate</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/marketing_fintech.svg') }}"
                        alt="Fintech">
                    <p><span>Fintech</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/trading.webp') }}" alt="Trading">
                    <p><span>Trading</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/travel.webp') }}" alt="Travel">
                    <p><span>Travel and Tourism</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/automobile-1.webp') }}"
                        alt="Automobile">
                    <p><span>Automobile</span></p>
                </li>
                <li>
                    <img width="40" height="40" src="{{ asset('images/token-marketing-services/icons/gaming.webp') }}" alt="Gaming">
                    <p><span>Gaming</span></p>
                </li>
            </ul>
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
        color: #1849ee;
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
        padding-bottom: 20px;
        min-height: 350px;
        transition: .3s;
        position: relative;
        margin-bottom: 30px;
        border-radius: 10px;
    }

    .awesome-features-wrapper::before {
        background: #1849ee;
        height: 20px;
        width: 3px;
        content: "";
        position: absolute;
        left: -2px;
        top: 65px;
    }

    .awesome-features-wrapper::after {
        background: #1849ee;
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
        background: #1849ee;
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
        color: #1849ee;
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



<div class="clearfix"></div>


<!-- <div class="common_spacing">
<div class="container">
<div class="row">
<h2 class="sec_tit underline text-center">Our Integration Process</h2>
</div>
<div class="col-md-12 mt30">
<div class="timeline-center">
<div class="timeline-row row m-0">
<div class="tm-detail tm-det tm-det-left">
<h4 class="common_h4 mb10 tm-det-tit">Ideation </h4>
<ul class="process-list">
<li>
<p>At the beginning, we discuss things with you over calls, where we understand your need for our ChatGPT integration services and frame the project’s crude idea.</p>
</li>
</ul>
</div>
<div class="tm-icon roadmap-icon-outer"> <img class="lazy" data-src="images/chatgpt-integration-service/icons/custom-chat.webp"> </div>
</div>
<div class="timeline-row row m-0">
<div class="tm-detail tm-det tm-det-right">
<h4 class="mb10 common_h4 tm-det-tit">Project Estimation </h4>
<ul class="process-list">
<li>
 <p>Here, we create a detailed estimate for the project’s duration and expenses based on your project’s needs, outlining all the stages involved in the process. </p>
</li>
</ul>
</div>
<div class="tm-icon roadmap-icon-outer"> <img class="lazy" data-src="images/chatgpt-integration-service/icons/cost-effective.webp"> </div>
</div>
<div class="timeline-row row m-0">
<div class="tm-detail tm-det tm-det-left">
<h4 class="common_h4 mb10 tm-det-tit">Final Agreement</h4>
<ul class="process-list">
<li>
<p>Then, we ensure you and our AI developer team agree to the project’s terms and conditions, after which we sign a Non-Disclosure Agreement for legal purposes.</p>
</li>
</ul>
</div>
<div class="tm-icon roadmap-icon-outer"> <img class="lazy" data-src="images/chatgpt-integration-service/icons/content.webp"> </div>
</div>
<div class="timeline-row row m-0">
<div class="tm-detail tm-det tm-det-right">
<h4 class="mb10 common_h4 tm-det-tit">ChatGPT Integration</h4>
<ul class="process-list">
<li>
<p>Our ChatGPT integration team then works on the project to include AI tools for your venture using machine learning and natural language processing protocols.</p>
</li>
</ul>
</div>
<div class="tm-icon roadmap-icon-outer"> <img class="lazy" data-src="images/chatgpt-integration-service/icons/ai-writing.webp"> </div>
</div>
<div class="timeline-row row m-0">
<div class="tm-detail tm-det tm-det-left">
<h4 class="common_h4 mb10 tm-det-tit">Quality Assurance</h4>
<ul class="process-list">
<li>
<p>Here, we perform comprehensive checks for various test cases to ensure the integration was successful, after which you are ready to launch your new venture.</p>
</li>
</ul>
</div>
<div class="tm-icon roadmap-icon-outer"> <img class="lazy" data-src="images/chatgpt-integration-service/icons/recommendations.webp"></div>
</div>
 
</div>
</div>
</div>
 
</div>
</div> -->

<style type="text/css">
    .fa-check {
        color: green;
    }

    .fa-remove {
        color: red;
    }

    .data table .pr_pack th {
        font-size: 20px;
        line-height: 1.4;
        text-transform: uppercase;
        background-image: linear-gradient(#09abe9, #1849ee);
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
        padding: 25px 5px;
        font-size: 16px;
        font-weight: bold;
        width: 50%;
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
    }

    .form-right input.submit_send {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #1849ee !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: bold !important;
        padding: 10px 0 !important;
    }

    #our-team .connect-with {
        text-align: center;
    }

    .list_growth li {
        margin-bottom: 20px;
    }

    .list_growth li .list-icon {
        float: left;
    }

    #get-quote .formdiv form {
        background: #fff;
        box-shadow: 0 0 20px 5px rgba(0, 0, 0, 0.1);
        width: 100%;
        display: inline-block;
        padding: 50px 0 0px 50px;
    }

    a.home-talk-experts.launch {
        padding: 11px 57px;
        margin: 13px;
    }

    span.btc_price {
        position: relative;
        top: 35px;
    }

    .contentall p:first-child {
        font-size: 24px;
    }

    a.launch {
        margin: 15px;
        padding: 11px 46px;
        background: #1849ee;
        padding: 10px 25px;
        margin-top: 0px;
        display: inline-block;
        border-radius: 0;
        text-transform: capitalize;
        color: #fff;
        font-weight: bold;
    }

    a.accordion-toggle.tab_high {
        display: block;
        padding: 11px 5px;
        text-transform: uppercase;
        font-size: 16px;
        background: #1849ee !important;
        color: #fff !important;
        border-bottom: 1px solid #bbb;
        font-weight: bold;
    }

    a.launch:hover {
        color: #ffffff !important;
    }

    .accordion-toggle.collapsed:after {
        content: "-";
        float: right;
        background: #fff;
        color: #000;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        font-weight: bold;
        font-family: Arial;
        line-height: 25px;
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

    h1.common_h1 {
        background: transparent;
        margin: 0 auto;
        padding: 0;
        width: 100%;
        display: inline-block;
        color: #ffffff;
        text-transform: initial;
    }

    h2.common_h2 {
        font-size: 30px !important;
        padding: 5px 0 25px 0;
        color: #ffffff;
    }

    h1.common_h1:before,
    h1.common_h1:after {
        display: none;
    }

    .partner-sec {
        background: #fff;
        border-top: 2px solid #1849ee;
        border-radius: 4px;
        padding: 30px 15px 15px 15px;
        margin-bottom: 20px;
        border-bottom: 2px solid #1849ee;
        min-height: 300px;
    }

    .partner-sec img {
        width: 64px;
        margin-bottom: 5px;
    }

    .partner-sec h3 {
        margin-bottom: 0px;
        font-weight: 700;
        font-size: 16px;
        color: #000000;
    }

    .partner-sec p {
        margin: 0;
    }

    .proces_step img {
        width: 95px;
        margin-top: 30px;
        margin-bottom: 20px;
    }

    .proces_step {
        background: #fff;
        padding: 10px 10px;
        box-shadow: 0 0 6px #46b677;
        border-radius: 2%;
        margin-top: 20px;
        margin-bottom: 30px;
        max-width: 90%;
        min-height: 230px;
    }

    .proces_step p {
        margin: 0;
    }

    .proces_step img {
        width: 70px;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .proces_step:after {
        width: 17%;
        content: '';
        height: 11px;
        border: 2px solid #46b677;
        position: absolute;
        right: -13px;
        border-right: none;
        border-left: none;
        top: 50%;
    }

    .proces_step:before {
        content: '';
        border: solid #49b779;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 7px;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        position: absolute;
        right: -15px;
        top: 49%;
    }

    .top_ico_process .col-lg-3:last-child .proces_step:after,
    .top_ico_process .col-lg-3:last-child .proces_step:before {
        display: none;
    }

    @media only screen and (max-width: 1200px) {
        .proces_step::after {
            right: -10px;
        }

        .proces_step::before {
            right: -12px;
        }
    }

    @media only screen and (max-width: 992px) {
        .proces_step::after {
            right: -5px;
        }

        .proces_step::before {
            right: -10px;
        }
    }

    @media (max-width: 767px) {
        h2.common_h2 {
            font-size: 16px !important;
        }

        .proces_step {
            background: #fff;
            padding: 10px 10px;
            box-shadow: 0 0 6px #46b677;
            border-radius: 2%;
            max-width: 400px;
            margin: 20px auto 30px;
            min-height: 200px;
        }

        .data table .pr_pack th {
            font-size: 13px;
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

        .order_btn a {
            padding: 10px 2px;
            border-radius: 3px;
            font-size: 11px;
        }

        a.accordion-toggle.tab_high {
            font-size: 12px;
        }

        .proces_step::after {
            right: 0;
            left: 0;
            margin: 0 auto;
            height: 38px;
            width: 16px;
            border-top: none;
            border-bottom: none;
            border-left: 2px solid #46b677;
            border-right: 2px solid #46b677;
            top: auto;
            bottom: -9px;
        }

        @media screen and (max-width: 768px) {
            .proces_step::before {
                display: none;
            }

            .proces_step::after {
                display: none;
            }
        }

        .proces_step::before {
            right: auto;
            left: 47.5%;
            margin: 0 auto;
            top: auto;
            bottom: -15px;
            transform: rotate(45deg);
        }

        .data table tbody tr:first-child th:last-child {
            transform: none;
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

<section class="service-section web-servic pad-tb">
    <div class="container">
        <div class="section-header underline text-center">
            <h3 class="title-th">Ongoing Success Strategies for Post-Launch Token Marketing</h3>
        </div>
        <div class="col-lg-12">
            <p class="text-center">Our marketing specialists are dedicated to delivering top-tier post-launch services to sustain and amplify your project's long-term success.</p>
        </div>
        <div class="row upset link-hover shape-num justify-content-center container-center">
            <div class="col-lg-4 col-sm-4 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img class="lazy"
                            src="{{ asset('images/token-marketing-services/icons/audit.png') }}"></div>
                    <h4>In-Depth Audits</h4>
                    <p>We meticulously evaluate your project’s performance to refine future strategies and optimize outcomes.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img src="{{ asset('images/token-marketing-services/icons/update.png') }}"
                            class="lazy"></div>
                    <h4>Consistent Updates</h4>
                    <p>We ensure continuous engagement by providing regular updates on your website, blog, and social media.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img
                            src="{{ asset('images/token-marketing-services/icons/community-marketing.png') }}" class="lazy">
                    </div>
                    <h4>Active Community Engagement</h4>
                    <p>Our focus is on cultivating a vibrant and loyal community to drive ongoing growth and interaction.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img src="{{ asset('images/token-marketing-services/icons/pr-marketing.webp') }}"
                            class="lazy"></div>
                    <h4>Sustained Public Relations</h4>
                    <p>We maintain high visibility for your project through frequent press releases and strategic media placements.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img src="{{ asset('images/token-marketing-services/icons/high-performance.png') }}"
                            class="lazy"></div>
                    <h4>Performance Monitoring</h4>
                    <p>We rigorously track and analyze market performance to keep you informed and guide necessary improvements.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img src="{{ asset('images/token-marketing-services/icons/support.png') }}"
                            class="lazy"></div>
                    <h4>Exceptional User Support</h4>
                    <p>We offer unparalleled support to your token holders, swiftly addressing their needs to foster positive sentiment and advocacy.</p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

    </div>
</section>


@include('static.left-square-image-3-col-card', [
    'title' => 'Key Metrics for Evaluating Our Token Advertising Success',
    'desc' => "By focusing on essential metrics, we ensure you gain clear insights into your campaign's performance, revealing both strengths and areas for improvement, and enabling strategic adjustments for enhanced outcomes.",
    'cards' => [
        [
            'title' => 'Traffic & Engagement',
            'desc' => "We track website traffic and user interactions to boost engagement effectively.",
            'image' => 'token-marketing-services/icons/traffic-light.svg',
        ],
        [
            'title' => 'Conversion Rate',
            'desc' => "We measure the percentage of visitors taking desired actions to refine and increase conversion rates.",
            'image' => 'token-marketing-services/icons/exchange-rate.webp',
        ],
        [
            'title' => 'Community Expansion',
            'desc' => "We monitor follower growth and engagement activities to nurture and enhance your project's community.",
            'image' => 'token-marketing-services/icons/growth.webp',
        ],
        [
            'title' => 'Token Sales Performance',
            'desc' => "We analyze token sales volumes and pricing to maximize your sales potential.",
            'image' => 'token-marketing-services/icons/tokens.png',
        ],
        [
            'title' => 'Website & Lead Analytics',
            'desc' => "We leverage tools like Google Analytics and CRM systems such as HubSpot for precise website and lead tracking.",
            'image' => 'token-marketing-services/icons/tracking.webp',
        ],
        [
            'title' => 'KPI Optimization',
            'desc' => "Our team continually evaluates key performance indicators to make informed, data-driven strategy adjustments.",
            'image' => 'token-marketing-services/icons/kpi-optimization.webp',
        ],
    ],
    'cta1_name' => 'Schedule A Meeting',
    'cta1_link' => '#',
    'cta2_name' => 'Talk with our Experts',
    'cta2_link' => 'consultation'
])


<section class="complimentary-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline text-white">Why Choose Us for Your Cryptocurrency Token Marketing Needs?</h2>
                </div>
                <p class="text-white">We distinguish ourselves as industry leaders with innovative approaches and expert strategies for mastering cryptocurrency token marketing.</p>
            </div>
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/token-marketing-services/icons/expertise.png') }}" /></div>
                        <div class="contents">
                            <h4>Unmatched Expertise</h4>
                            <p>Our extensive experience positions you prominently in the competitive crypto arena, delivering top-tier, customized marketing solutions.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/token-marketing-services/icons/Strategie.png') }}" /></div>
                        <div class="contents">
                            <h3>Bespoke Strategies</h3>
                            <p>We craft and execute powerful, tailored marketing plans that elevate your project's visibility and impact.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/token-marketing-services/icons/time.png') }}" /></div>
                        <div class="contents">
                            <h3>Efficiency & Speed</h3>
                            <p>In the fast-moving world of cryptocurrency, we drive your project's success with swift, impactful marketing efforts.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/token-marketing-services/icons/experts.png') }}" /></div>
                        <div class="contents">
                            <h3>Focus on Core Priorities</h3>
                            <p>By entrusting your marketing to our experts, you gain the freedom to focus on other crucial aspects of your project and enhance overall operations.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What is the concept of token marketing?',
            'ans' => "Token marketing involves strategies and activities designed to promote a cryptocurrency token, enhancing its visibility and attracting investors. This includes a variety of tactics such as content creation, social media engagement, and influencer collaborations."
        ],
        [
            'ques' => 'What makes token marketing essential?',
            'ans' => "Token marketing is vital for distinguishing your token in a crowded market, drawing potential investors, and building a robust community. Effective marketing can greatly influence the success and adoption of your token."
        ],
        [
            'ques' => 'What types of services do token marketing agencies provide?',
            'ans' => "Token marketing agencies offer a broad range of services, including content creation, social media management, influencer marketing, public relations, and community development. These services aim to increase the visibility and attractiveness of your token."
        ],
        [
            'ques' => 'In what ways can token marketing enhance my project?',
            'ans' => "Token marketing can elevate your project's profile, attract a specific audience, and cultivate a dedicated community. This, in turn, can lead to greater investment opportunities and successful token launches."
        ],
        [
            'ques' => 'What should I look for when selecting a token marketing agency?',
            'ans' => "When choosing a token marketing agency, evaluate their experience, expertise in the crypto sector, service offerings, and client feedback. Ensure they understand your project's objectives and can provide a customized marketing strategy."
        ],
        [
            'ques' => 'What is the typical cost for crypto token marketing services?',
            'ans' => "The cost for crypto token marketing services varies based on campaign scope, service range, and agency expertise. It’s important to obtain a detailed proposal and budget estimate before making a decision."
        ],
        [
            'ques' => 'Is token marketing only relevant for token sales like ICOs, IEOs, or STOs?',
            'ans' => "Token marketing is not limited to token sales. It is also crucial for building brand awareness, engaging with the community, and maintaining investor relations throughout the token’s lifecycle."
        ],
        [
            'ques' => 'Do token marketing agencies assist with regulatory compliance?',
            'ans' => "Yes, many token marketing agencies provide support with regulatory compliance, ensuring that marketing activities follow relevant laws and standards, thus mitigating potential legal issues."
        ],
        [
            'ques' => 'How soon can I expect results from token marketing efforts?',
            'ans' => "The timeframe for seeing results from token marketing can vary based on strategy and market conditions. Typically, noticeable improvements in visibility and engagement may take several weeks to a few months."
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

    /*menu height mobile view*/
    /*@media screen and (max-width: 320px) {
    .main {
        margin-top: 10px !important;
    }
}*/
    /*@media screen and (max-width: 768px) {
    .main {
        margin-top: 10px !important;
    }
}*/
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