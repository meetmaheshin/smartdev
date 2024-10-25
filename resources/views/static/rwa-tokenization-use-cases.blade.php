@extends('layouts.static')
    @section('title', 'RWA Tokenization Use Cases')
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
        background: linear-gradient(180deg, #7723bb, #180134);
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


    .perfect-script-items1 {
        -webkit-box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        padding: 25px 15px 10px;
        border-radius: 16px;
        background-color: #fff;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        min-height: 160px;
        margin-bottom: 20px;
    }

    .perfect-script-items1 .icon i {
        font-size: 26px;
    }

    .perfect-script-items1 .icon {
        width: 70px;
        height: 70px;
        /* margin: 20px auto 50px; */
        line-height: 60px;
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
        background: #140050;
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
        width: 82%;
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

    .app-overview {
        padding: 0 10px;
        cursor: pointer;
        margin-bottom: 2px
    }

    .app-overview .media {
        min-height: 150px
    }

    .app-overview .media .media-left {
        padding-right: 0;
        overflow: hidden
    }

    .app-overview .media .media-left .app-icon {
        width: 94px;
        height: 94px;
        border-radius: 50%;
        left: 12px;
        background: #47b475;
        position: relative;
        text-align: center;
        transition: .3s linear
    }

    .app-icon img {
        width: 50px;
        margin-top: 25px;
    }

    .app-overview .media .media-body {
        padding-left: 33px
    }

    .media-body h4 {
        font-weight: 700
    }

    .list {
        margin-top: 0;
        margin-bottom: 0 !important;
        font-size: 17px;
        line-height: 35px;
        text-indent: -17px;
        list-style: none
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
        box-shadow: 5px 5px 0 #4bb377;
        background: linear-gradient(180deg, #12007e 0%, #23669e 105.29%);
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
        width: 21%;
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


    /*-- On-demand --*/
    .on-demand {
        background: linear-gradient(180deg, #290987 0%, #140050);
        padding: 50px 0px;
    }

    .on-demand-items {
        position: relative;
        border-radius: 7px;
        background: #fff;
        /*padding: 10px 10px 10px 10px;*/
        margin: 20px 0;
        text-align: center;
    }

    .on-demand-items p strong {
        display: block;
        font-size: 22px;
        padding-top: 10px;
        border-radius: 0 0 7px 7px;
        margin-bottom: 10px;
        color: #140050;
        /*border-bottom: 1px solid #e0e0e0;*/
    }

    .on-demand-items p {
        text-align: center;
        margin-bottom: 0;
        padding-bottom: 15px;
    }

    .on-demand-items .icons {
        text-align: center;
        font-size: 40px;
        background: #eaeaea;
        width: 70px;
        height: 70px;
        margin: -20px auto 10px auto;
        border-top: 0px;
        border-radius: 7px;
        padding: 10px;
    }

    .on-demand-items .icons i {
        line-height: 70px;
        color: #60289c;
    }

    .on-demand-items .icons img {
        filter: invert(1);
    }

    .on-demand-img img {
        border-radius: 7px 7px 0 0;
    }

    .on-demand-img p strong {
        margin-top: -55px;
        position: relative;
        z-index: 2;
        background: linear-gradient(to right, #140050, #140050);
        border: 0;
        color: #fff;
        padding: 5px 15px 5px 15px;
        display: inline-block;
        border-radius: 15px;
    }

    .on-demand-items a {
        position: absolute;
        bottom: 10px;
        left: 32%;
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

        .on-demand-items {
            margin-bottom: 30px;
            padding-bottom: 10px;
        }

        .on-demand-items a {
            position: relative;
            left: auto;
        }

        .perfect-script-items1 {
            min-height: auto !important;
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

            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1 itemprop="name">Unlock the Potential of Tokenized Real-World Assets (RWAs)</h1>
                                        </div>
                                        <p itemprop="text">Discover the transformative use cases of tokenized real-world assets with guidance from our specialists. Illuminate your Web3 venture by leveraging our expertise to tokenize your real-world assets and elevate your project. </p>
                                        <div class="txt"> <a href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important;">Connect with our experts today</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center"> <img class="magic"
                            src="{{ asset('images/rwa-tokenization-use-cases/banner-img.png') }}" alt=" " title=" ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- small-square-card-section --}}
@include('static.small-square-card-section', [
    'title' => 'Tokenized Physical Collectibles: Revolutionizing High-Value Assets', 
    'desc' => 'Physical collectibles of substantial value are prime candidates for real-world asset tokenization (RWA), offering a dynamic avenue for trading and investment. With our advanced technology, we transform your prized physical collectibles into digital tokens, making them easier to trade and manage. Embrace the future of asset tokenization with our cutting-edge services.',
    'cards' => [
        [
            'title' => 'Fine Art',
            'desc' => 'Digitally tokenize renowned and historic artworks, streamlining their liquidity and fostering communities of art enthusiasts.',
            'image' => 'rwa-tokenization-use-cases/icons/art.webp',
        ],
        [
            'title' => 'Automobiles',
            'desc' => 'Turn vintage vehicles into digital tokens, allowing enthusiasts to engage with these classics without hefty investments.',
            'image' => 'rwa-tokenization-use-cases/icons/automobile.png',
        ],
        [
            'title' => 'Antique Collectibles',
            'desc' => "Transform historical antiques into tokenized assets, enabling partial ownership and connecting collectors with similar passions.",
            'image' => 'rwa-tokenization-use-cases/icons/collectibles.png',
        ],
        [
            'title' => 'Electronic Devices',
            'desc' => 'Tokenize high-value electronic equipment to simplify business ownership and operational costs.',
            'image' => 'rwa-tokenization-use-cases/icons/maintenance.png',
        ],
    ],
    'cta_1' => '',
    'cta_2' => ''
])
<section class="complimentary-features" style="padding: 60px 0px; background: #f2f2f2;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2 class="title"><strong>Tokenized Financial Instruments: Expanding Horizons in Investment</strong></h2>
                    <hr />
                    <p>In today’s financial landscape, tokenizing financial instruments has emerged as a game-changer, opening up vast opportunities for investors to amplify their portfolios. By converting financial assets into digital tokens, we empower retail investors to engage in high-value investments with unprecedented ease. Our experts are dedicated to delivering superior-quality tokens across a spectrum of financial instruments.</p>
                </div>
            </div>
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/rwa-tokenization-use-cases/icons/security.png') }}" /></div>
                        <div class="content">
                            <h3>Securities</h3>
                            <p>Digitize securities to leverage the reliability and trust of asset-backed tokens, driving increased investment potential.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/rwa-tokenization-use-cases/icons/debt-share.webp') }}" /></div>
                        <div class="content">
                            <h3>Equity Shares</h3>
                            <p>Tokenize equity shares to enhance your company’s market valuation and influence without risking traditional securities.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/rwa-tokenization-use-cases/icons/bonding.png') }}" /></div>
                        <div class="content">
                            <h3>Debt Bonds</h3>
                            <p>Create tokens for debt bonds to access the corporate bond market, offering innovative debt solutions including bonds and real estate investments.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icons"><img class="lazy"
                                src="{{ asset('images/rwa-tokenization-use-cases/icons/deposit.png') }}" /></div>
                        <div class="content">
                            <h3>Deposits</h3>
                            <p>Develop versatile tokens for deposits, providing a robust alternative to existing stablecoins and central bank digital currencies (CBDCs).</p>
                        </div>
                    </li>
                </ul>
            </div>
            <hr>
        </div>
    </div>
</section>
<section class="travel-app" style="background: #f7faff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h3> <strong>Break Down Barriers in Commodity Investment with Tokens</strong></h3>
                    <hr>
                    <p>The market for commodities has surged recently as investors explore diverse financial opportunities, even in traditional sectors. Leverage our expertise to tokenize various commodities, enhancing their liquidity and removing investment barriers worldwide.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/real-estate.png') }}"></div>
                    <p><strong>Real Estate</strong>Real estate-backed tokens offer long-term, accessible investment options to a broad range of investors, eliminating traditional investment constraints.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/gold.png') }}"></div>
                    <p><strong>Gold</strong>Gold-backed tokens enable retail investors to participate in gold ownership, whether for personal use or as a strategic investment.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/silver.png') }}"></div>
                    <p><strong>Silver</strong>Silver-backed tokens provide valuable opportunities for smaller investors to benefit from this often-overlooked asset.</p>
                </div>
                <div class="travel-app-items">
                    <div class="icons"><img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/metals.png') }}"></div>
                    <p><strong>Rare Metals</strong>Tokenizing rare metals like platinum, palladium, and diamonds opens up new investment avenues for these precious and vital resources.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <h3 class="sec_tit underline text-center" style="width: 100%">Intellectual Property Tokenization: Elevating Your Assets to New Heights</h3>
        </div>
        <p class="text-center" style="color: #000;">Intellectual property holds unparalleled value, and we treat it with the utmost respect. By tokenizing these unique assets, we transform them into powerful, market-ready investments. Our expert team specializes in crafting tokens that enhance the value of intangible assets, positioning them for global recognition and profitability.</p>
        <div class="row mt40">
            <div class="container container-center">
                <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="img-fuild lazy" style="width: 65px !important; height:65px !important;"
                                        src="{{ asset('images/rwa-tokenization-use-cases/icons/patent.png') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Patents</h3>
                            </div>
                            <div class="featured-desc">Tokenize patents to leverage them as high-value securities, attracting investments from top-tier institutional investors and major corporations.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                    <div class="featured-icon-box  text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="img-fuild lazy" style="width: 65px !important; height:65px !important;"
                                        src="{{ asset('images/rwa-tokenization-use-cases/icons/license.png') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Licenses</h3>
                            </div>
                            <div class="featured-desc">Transform licenses for software and professional services into secure, accessible tokens, revolutionizing how they are acquired and utilized.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="img-fuild lazy" style="width: 65px !important; height:65px !important;"
                                        src="{{ asset('images/rwa-tokenization-use-cases/icons/trade.png') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Trademarks</h3>
                            </div>
                            <div class="featured-desc">Unlock the full potential of your brand by tokenizing trademarks, making them a compelling investment opportunity for discerning investors.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="img-fuild lazy" style="width: 65px !important; height:65px !important;"
                                        src="{{ asset('images/rwa-tokenization-use-cases/icons/copyright.png') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Copyrights</h3>
                            </div>
                            <div class="featured-desc">Create tokens for copyrights to enable creators to monetize their intellectual property, ensuring fair compensation for the commercial use of their work.</div>
                        </div>
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
        background: #f4f4f4;
        padding: 15px;
        border-left: 5px solid #140050
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
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20">Tokenized Venture Capital Funds: Revolutionizing Investment Dynamics</h2>
                </div>
                <p>In today’s startup-driven landscape, venture capital (VC) institutions are increasingly pivotal. Tokenizing VC funds reimagines investment flow for innovative businesses, injecting a new level of liquidity and efficiency. Our advanced technology enables the creation of highly functional tokens that redefine how fund shares are managed and invested.</p>
            </div>
        </div>
        <div class="row mt20 container-center">
            <div class="col-md-6 equalize">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/governance.png') }}"></div>
                    <div class="icon_content">
                        <h3>Governance Rights</h3>
                        <p class="c-grey">Empower stakeholders with tokens that grant governance rights, allowing them to vote on pivotal project decisions and changes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 equalize">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/ownership.webp') }}"></div>
                    <div class="icon_content">
                        <h3>Fractional Ownership</h3>
                        <p class="c-grey">Issue fractional tokens to enable ownership stakes in real-world assets, making high-value investments more accessible and flexible.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 equalize">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/debt-share.webp') }}"></div>
                    <div class="icon_content">
                        <h3>Share Representation</h3>
                        <p class="c-grey">Develop tokens that represent shares in your company, creating a streamlined and secure investment channel for potential investors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 equalize">
                <div class="icon-text-1">
                    <div class="icon-text-icon"><img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/investors.png') }}"></div>
                    <div class="icon_content">
                        <h3>Due Diligence</h3>
                        <p class="c-grey">Utilize VC fund tokens to facilitate comprehensive due diligence, ensuring thorough verification of investor credentials and project authenticity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<style type="text/css">
    .awesome-features-wrapper {
        border: 1px solid #bababa;
        padding-top: 40px;
        padding-bottom: 20px;
        /*min-height: 340px;*/
        transition: .3s;
        position: relative;
        margin-bottom: 30px;
        border-radius: 10px;
    }

    .awesome-features-wrapper::before {
        background: #140050;
        height: 20px;
        width: 3px;
        content: "";
        position: absolute;
        left: -2px;
        top: 65px;
    }

    .awesome-features-wrapper::after {
        background: #140050;
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
<div class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <h3 class="sec_tit underline text-center" style="width: 100%">Tokenizing Energy Assets: Powering the Future of Sustainable Investment</h3>
            <p class="text-center">The energy sector is undergoing a transformative shift from traditional to cutting-edge sustainable sources, capturing unprecedented attention. This evolution has driven a surge in interest toward energy asset tokenization, enabling efficient and equitable distribution of critical resources.</p>
        </div>
        <div class="row mt20 container-center">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="awesome-features-wrapper text-center mb-30">
                    <div class="awesome-features-icon-img"> <img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/oil-barrel.png') }}"> </div>
                    <div class="awesome-features-text">
                        <h4>Petroleum</h4>
                        <p>Tokenize petroleum assets to represent not just the oil itself but also associated products, corporate equities, and real estate tied to extraction and production.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="awesome-features-wrapper text-center mb-30">
                    <div class="awesome-features-icon-img"> <img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/carbon-credit.webp') }}"> </div>
                    <div class="awesome-features-text">
                        <h4>Carbon Credits</h4>
                        <p>Leverage carbon credit tokens to enable companies to offset their CO2 emissions, linking their investments directly to impactful environmental conservation projects.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="awesome-features-wrapper text-center mb-30">
                    <div class="awesome-features-icon-img"> <img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/wind-farm.png') }}"> </div>
                    <div class="awesome-features-text">
                        <h4>Wind Farms</h4>
                        <p>Utilize wind farm tokens to attract funding for advanced renewable energy projects, facilitating the development and management of wind farms globally.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 equalize">
                <div class="awesome-features-wrapper text-center mb-30">
                    <div class="awesome-features-icon-img"> <img class="lazy"
                            src="{{ asset('images/rwa-tokenization-use-cases/icons/solar-farm.png') }}"> </div>
                    <div class="awesome-features-text">
                        <h4>Solar Farms</h4>
                        <p>Harness solar farm tokens to open up investment opportunities, enabling a broad spectrum of investors to contribute to and benefit from the generation of renewable solar energy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="on-demand">
    <div class="container container-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-title center">
                <h2 class="text-center"><strong><span class="white">Revolutionizing Consumer Products Through Tokenization</span> </strong></h2>
                <hr style="background:#fff !important;">
                <p class="text-center white">The consumer products market is valued in the trillions annually, and tokenizing these everyday essentials opens up transformative opportunities for businesses. Our expertise enables the creation of tokens for a vast range of consumer goods, providing a dynamic investment avenue and engaging consumers like never before.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
            <div class="on-demand-items">
                <div class="icons"> <img class="lazy" src="{{ asset('images/rwa-tokenization-use-cases/icons/food.png') }}">
                </div>
                <p><strong>Food Products</strong>Tokenize food items to offer consumers and investors a direct stake in the blockchain-enhanced food industry, unlocking new potential and transparency.</p>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
            <div class="on-demand-items">
                <div class="icons"><img class="lazy"
                        src="{{ asset('images/rwa-tokenization-use-cases/icons/food_delivery.webp') }}"> </div>
                <p><strong>Beverages</strong>Blockchain tokens for beverages can serve as innovative investment vehicles and loyalty rewards, capturing global market interest and engagement.</p>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
            <div class="on-demand-items">
                <div class="icons"><img class="lazy"
                        src="{{ asset('images/rwa-tokenization-use-cases/icons/pharmaceutical.png') }}"> </div>
                <p><strong>Pharmaceuticals</strong>Develop tokens for pharmaceutical products to enhance supply chain integrity, ensuring quality and providing long-term strategic benefits.</p>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
            <div class="on-demand-items">
                <div class="icons"><img class="lazy" src="{{ asset('images/rwa-tokenization-use-cases/icons/clothing.png') }}">
                </div>
                <p><strong>Apparel</strong>Create clothing tokens to deliver exceptional customer loyalty programs and ensure robust supply chain management, enhancing overall service quality and customer satisfaction.</p>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
@include('static.bounce-effect-left-cut-card', [
    'title' => 'Redefining Luxury Through Tokenization',
    'desc' => "Luxury goods have carved a significant niche in today's economy, commanding a substantial market share. Tokenizing these high-end items revolutionizes perceptions of luxury and unlocks new investment opportunities. Our expertise in developing tokenized luxury assets can transform these high-value items into lucrative investment vehicles.",
    'cards' => [
        [
            'title' => 'Fashion',
            'desc' => 'Tokenized fashion items can empower luxury brands to captivate modern consumers and generate significant returns in the evolving digital marketplace.',
            'image' => 'rwa-tokenization-use-cases/icons/fashion.png',
        ],
        [
            'title' => 'Footwear',
            'desc' => 'Digital and physical footwear tokens offer unique applications across games, metaverses, and exclusive loyalty programs, bridging the gap between luxury and digital innovation.',
            'image' => 'rwa-tokenization-use-cases/icons/footwear.png',
        ],
        [
            'title' => 'Wearables',
            'desc' => "Tokens for luxury wearables enhance the customer experience by integrating visual appeal and advanced utility, amplifying engagement with high-end brands.",
            'image' => 'rwa-tokenization-use-cases/icons/brand.png',
        ],
        [
            'title' => 'Travel',
            'desc' => 'Luxury travel tokens enable top-tier services, providing verified, high-quality experiences through immutable on-chain records, ensuring unparalleled authenticity and value.',
            'image' => 'rwa-tokenization-use-cases/icons/travel.png',
        ],
    ],
])
<section class="integration">
    <div class="container container-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-title text-center">
                <h3 class="title-th sec_tit underline">AgTokenizing Agricultural Assets </h3>
                <p>The agricultural sector is evolving rapidly, drawing increased interest from investors and industry experts. Tokenization is poised to revolutionize this field by making investments more accessible and attractive. Our team specializes in innovative solutions for real-world asset (RWA) tokenization within agriculture.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy" src="{{ asset('images/rwa-tokenization-use-cases/icons/land.png') }}">
                </div>
                <h4>Land </h4>
                <p>Tokenizing land can facilitate funding for future agricultural ventures and manage large-scale ownership with enhanced efficiency.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy"
                        src="{{ asset('images/rwa-tokenization-use-cases/icons/agriculture.png') }}" style="width:54px;"> </div>
                <h4>Crops </h4>
                <p>Tokens representing crops streamline supply chain operations by providing real-time updates and ensuring safety throughout the distribution process.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy" src="{{ asset('images/rwa-tokenization-use-cases/icons/fund.webp') }}"
                        style="width:54px;"> </div>
                <h4>Equipment </h4>
                <p>Agricultural equipment can be tokenized to secure crypto-based funding and fulfill collateral needs, promoting full transparency.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
                <div class="icons"> <img class="lazy"
                        src="{{ asset('images/rwa-tokenization-use-cases/icons/storage-box.webp') }}" style="width:54px;"> </div>
                <h4>Storage Facilities</h4>
                <p>Tokenizing storage facilities allows for advanced functionalities such as real-time storage monitoring, cryptocurrency-backed loans, and crowdfunding opportunities.</p>
            </div>
        </div>
    </div>
</section>
<section class="gray_bg" style="padding:60px 0;">
    <div class="container">
        <div class="">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h3 class="section-title underline mb20">Tokenizing Music Royalties</h3>
                </div>
                <p>Music is carving out a significant niche in the blockchain space, with many renowned artists embracing tokenization for their albums. Music royalty tokenization takes this further by allowing fans to gain ownership stakes. Our expert developers excel at transforming music and royalty rights into efficient, blockchain-based tokens, benefiting creators and fans alike.</p>
            </div>
            <div class=" feature-block">
                <div class="col-sm-6 ">
                    <div class="app-overview equal-height" style>
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/rwa-tokenization-use-cases/icons/music.png') }}" alt> </div>
                            </div>
                            <div class="media-body">
                                <h4>Music Albums</h4>
                                <p>Tokens for music albums grant ownership and usage rights, along with special perks such as exclusive meet-and-greet opportunities for fans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height" style>
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/rwa-tokenization-use-cases/icons/royalties.webp') }}" alt> </div>
                            </div>
                            <div class="media-body">
                                <h4>Royalties</h4>
                                <p>Tokens for music royalties enable fans to share in the earnings from music, offering a chance to receive passive income from creators' success.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="app-overview equal-height" style>
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/rwa-tokenization-use-cases/icons/merchandise.webp') }}" alt> </div>
                            </div>
                            <div class="media-body">
                                <h4>Merchandise</h4>
                                <p>Tokenized merchandise from artists ensures authenticity and traceability, providing fans with verified items linked to on-chain records.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height" style>
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/rwa-tokenization-use-cases/icons/ticket.webp') }}" alt> </div>
                            </div>
                            <div class="media-body">
                                <h4>Tickets</h4>
                                <p>Tokenizing event tickets enhances security and authenticity, delivering a seamless and engaging experience for organizers, artists, and attendees.</p>
                            </div>
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
                    <h3 class="text-white">Why Partner with Us for RWA Tokenization Success?</h3>
                    <hr class="mb40">
                    <p class="text-white">At Blockchain App Factory, we specialize in bridging Web3 innovations with real-world applications, with RWA tokenization serving as a prime example of this synergy. Our unparalleled expertise in tokenizing real-world assets and developing sophisticated RWA platforms empowers you to unlock unprecedented market opportunities and drive substantial growth.
                        <br><br>
                        From the initial consultation through to successful deployment and ongoing support, our team is dedicated to your success every step of the way. Curious about how RWA tokenization can transform your business? Engage with our experts today to design a bespoke solution that meets your needs!
                    </p>
                    <div class="contentall" align="center" style="padding-top: 0px;">
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
                            <span>Schedule a Meeting</span></a> --}}
                        <a href="{{ url('consultation') }}" rel="nofollow"
                            style="border-radius: 30px !important; text-transform:none !important;">Connect with Our Experts</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What Exactly is RWA Tokenization?',
            'ans' => 'RWA tokenization refers to the process of converting tangible assets like real estate or precious metals into digital tokens on a blockchain. This innovative approach enhances asset liquidity and simplifies trading.'
        ],
        [
            'ques' => 'How Can RWA Tokenization Be Used?',
            'ans' => 'RWA tokenization can transform various asset types, such as real estate, fine art, and commodities, into tradeable digital tokens. It enables fractional ownership, boosts liquidity, and expands investment access.'
        ],
        [
            'ques' => 'Why is RWA Tokenization a Future-Proof Business Model?',
            'ans' => 'RWA tokenization stands out for its ability to revolutionize asset management by streamlining transactions, lowering investment barriers, and increasing liquidity. It harnesses blockchain technology to attract diverse investors and optimize asset handling.'
        ],
        [
            'ques' => 'What Are the Costs Involved in Developing an RWA Tokenization Platform?',
            'ans' => 'The cost of creating an RWA tokenization platform depends on several factors, including the complexity of the platform, technology needs, and regulatory requirements. It encompasses both development and ongoing operational costs.'
        ],
        [
            'ques' => 'Who is the Leading Company for RWA Tokenization Platform Development?',
            'ans' => 'The top company for RWA tokenization platform development is one with a strong reputation, extensive industry experience, and a track record of successful projects. Look for firms that excel in blockchain technology, offer exceptional customer support, and provide tailored solutions.'
        ],
    ],
])

</div>
<script src="js/jquery.min.js" type="f6d21e48a6b1790ca44d6c42-text/javascript"></script>
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
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
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
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
<script src="js/vendor.js" type="f6d21e48a6b1790ca44d6c42-text/javascript"></script>
<script src="js/plugins.js" type="f6d21e48a6b1790ca44d6c42-text/javascript"></script>
<script src="js/main.js" type="f6d21e48a6b1790ca44d6c42-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="f6d21e48a6b1790ca44d6c42-text/javascript"></script>
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
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
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
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
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
    $('.view_pricing').click(function() {
            $('html, body').animate({
                scrollTop: $('#pricing-section').offset().top
            }, 2000);
        });
</script>
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
    var url = window.location.href;
        $('#url').val(url);
</script>
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
    $(".pricing-body").mCustomScrollbar({
            theme: "minimal"
        });
</script>
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
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
                    data-cf-modified-f6d21e48a6b1790ca44d6c42->
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/rwa-tokenization-use-cases">
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
<script type="f6d21e48a6b1790ca44d6c42-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="f6d21e48a6b1790ca44d6c42-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="f6d21e48a6b1790ca44d6c42-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
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

<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
    window.__lc = window.__lc || {};
        window.__lc.license = 9464790;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>

<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
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
<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
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




<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
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


<script type="f6d21e48a6b1790ca44d6c42-text/javascript">
    $(".crypto-popup").click(function(e) {
            $('crypto-popup').addClass('fixedPosition full-width');
            $(".login-popup").addClass('show');
            e.stopPropagation();
        });
</script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="f6d21e48a6b1790ca44d6c42-|49" defer></script>
</div>


@endsection