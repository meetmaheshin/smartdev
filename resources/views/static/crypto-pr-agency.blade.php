@extends('layouts.static')
    @section('title', 'Crypto PR Agency')
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


    /*------------ Center Align - Start -----------*/
    .center-align {
        padding: 60px 0px;
        background: #f2f2f2;
    }

    .center-align ul {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        margin: 10px 0;
        padding: 30px 0px;
        background: #fff;
        border: 1px solid #eee;
        border-radius: 10px;
    }

    .center-align ul li {
        width: 50%;
        display: flex;
        align-items: center;
    }

    .center-align ul li {
        padding: 0px 3%;
    }

    .center-align ul li h5 {
        font-size: 20px;
        font-weight: bold;
        color: #e85b17;
    }

    /*.center-align ul li span{font-size: 90px; opacity: 0.1; font-family: 'Raleway', sans-serif!important;}*/
    .center-align ul li p.points {
        margin: 10px 10px 10px 45px;
    }

    .center-align ul li p.points span {
        width: 30px;
        height: 30px;
        background: linear-gradient(#e88817, #e85b17);
        opacity: 1;
        font-size: 18px;
        display: inline-block;
        border-radius: 50%;
        color: #fff;
        text-align: center;
        line-height: 1.6em;
        margin-right: 6px;
        margin-left: -40px;
    }

    .center-align ul li p {
        margin-bottom: 10px;
    }

    .reverse {
        flex-direction: row-reverse;
    }

    @media (min-width: 320px) and (max-width: 768px) {
        .center-align {
            padding: 10px 0px;
        }

        .center-align ul li {
            width: 100%;
            margin: 5px 0px;
            padding: 15px;
        }
    }

    /*------------ Center Align - End -----------*/


    .banner {
        /*background-image: url(images/chatgpt-applications-development/bg.webp);
        background-size: cover;*/
        background: linear-gradient(180deg, #16165f, #16165f, #16165f, #1b181f);
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
        margin-top: 110px;
        margin-bottom: 110px;
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
        font-size: 16px;
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
        /*width: 100%;*/
        margin-top: 170px;
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
        padding: 20px;
    }

    #base {
        /*padding: 50px;*/
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

    .data table td {
        padding: 10px 25px;
    }

    @media screen and (min-width: 500px) {
        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
            /*margin-top: 15px!important;*/
            display: inline-block;
            /*margin-right: 26px!important;*/
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

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="8a746edf96985d580fc3227c-text/javascript">
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
            <!-- <div class="banner-overlay"></div> -->
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1 itemprop="name">Unleash the Full Potential of Your Crypto Startup with Elite PR Strategies</h1>
                                        </div>
                                        <p itemprop="text">Transform your crypto venture from under the radar to an industry leader with our dynamic marketing and bespoke PR solutions. Illuminate your project's core values and highlight its exceptional achievements through a commanding strategy.
                                        <br><br>
                                        Harness the expertise of our top-tier professionals, masters in crafting comprehensive crypto PR campaigns tailored to your strategic objectives.
                                        <br><br>
                                        Experience the transformative impact of a high-powered PR campaign with Blockchain App Factory. The future of your crypto startup begins now.
                                        </p>
                                        <div class="txt"> <a href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important;">Connect with Our Experts</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center"> 
                            <img class="magic" src="{{ asset('images/crypto-pr-agency/banner-img.png') }}" alt=" " title=" "> 
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                    <h2 class="title-th sec_tit underline">Amplify Your Crypto Project's Impact with Our Premier PR Agency</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center mt20">In the fast-evolving crypto-verse, the demand for innovative PR strategies is critical to cutting through the noise and steering your project toward a promising future. Our creative expertise transforms complex ideas into engaging narratives, making it easy for potential clients to see the vast opportunities ahead. We build enduring connections with the crypto community, fostering authentic relationships that withstand market shifts.<br><br>

                        Our proven track record is not just noteworthy; it’s inscribed in the annals of blockchain history. Our success stories—ranging from propelling NFTs into mainstream prominence to expanding the reach of cryptocurrency solutions—underscore our dedication and skill. Our PR agency acts as a catalyst for your success, crafting compelling narratives that drive real, measurable results.</p>
                    </div>
                    <div class="text-center cta_mine txt"> 
                        {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>Arrange a Consultation </span></a>  --}}
                        <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Experts</span></a> 
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

@include('static.two-line-left-card', [
    'title' => 'Key Advantages of Our Premier Crypto PR Agency', 
    'desc' => "",
    'cards' => [
        [
            'title' => 'Precision Engagement',
            'desc' => "Our strategic expertise ensures your announcements reach the most influential journalists and key figures, cutting through the clutter with precision.",
            'image' => 'crypto-pr-agency/icons/goal.webp'
        ],
        [
            'title' => 'Global Reach',
            'desc' => "Leverage our extensive network to amplify your message worldwide, creating a powerful global impact that resonates across borders.",
            'image' => "crypto-pr-agency/icons/global.png"
        ],
        [
            'title' => 'Powerful Messaging',
            'desc' => "Our PR strategies drive a significant increase in media coverage and news visibility, ensuring your story captures widespread attention.",
            'image' => 'crypto-pr-agency/icons/chat.png'
        ],
        [
            'title' => 'Rapid Announcements',
            'desc' => "We deliver timely and impactful news releases, carving out a prominent niche for your updates and propelling them toward immediate success.",
            'image' => 'crypto-pr-agency/icons/announcement.png'
        ],
        [
            'title' => 'Excellence in Quality',
            'desc' => "Each press release undergoes rigorous quality control, emerging as a beacon of credibility and trustworthiness.",
            'image' => 'crypto-pr-agency/icons/press-release.webp'
        ],
        [
            'title' => 'Data-Driven Insights',
            'desc' => "Utilizing advanced analytics, we refine and elevate PR strategies, achieving exceptional improvements in effectiveness and reach.",
            'image' => 'crypto-pr-agency/icons/analytics.png'
        ],
    ],
])

<style>
    .perfect-script-items1 .icon .lazy{
        margin-top: 12px;
    }
</style>

@include('static.bounce-effect-left-cut-card', [
    'title' => "The Crucial Impact of a Crypto PR Agency on Your Business", 
    'desc' => "A Crypto PR Agency’s role goes far beyond mere publicity; it’s about crafting strategic narratives that elevate ventures into iconic successes. We harness the transformative power of communication to elevate brands to unprecedented heights. Discover how potent PR distribution can redefine your brand’s trajectory.",
    'cards' => [
        [
            'title' => 'Market Dominance',
            'desc' => "Skillfully executed PR can catapult your venture to the forefront of the industry, significantly boosting awareness and generating heightened interest.",
            'image' => 'crypto-pr-agency/icons/brand-awareness.png',
        ],
        [
            'title' => 'Enhanced Credibility',
            'desc' => "A meticulously crafted press release can elevate your project's credibility, turning initial curiosity into a committed investment.",
            'image' => 'crypto-pr-agency/icons/credibility.png',
        ],
        [
            'title' => 'Brand Visibility',
            'desc' => "Regular and strategic press release distribution builds a strong, recognizable presence, distinguishing your brand and solidifying its identity.",
            'image' => 'crypto-pr-agency/icons/brand.png',
        ],
        [
            'title' => 'International Exposure',
            'desc' => "Our global press release distribution ensures your crypto project reaches potential investors across the world, maximizing international visibility.",
            'image' => 'crypto-pr-agency/icons/global.png',
        ],
        [
            'title' => 'Strategic Edge',
            'desc' => "A compelling PR campaign highlights your project's unique value proposition, guiding investors to recognize its exceptional potential.",
            'image' => 'crypto-pr-agency/icons/strategie.png',
        ],
        [
            'title' => 'Cost-Efficient Marketing',
            'desc' => "An effective, budget-conscious press release strategy enables your project to achieve significant success without overspending.",
            'image' => 'crypto-pr-agency/icons/low-costs.png',
        ],
    ],
])

<section class="center-align">
    <div class="container">
        <div class="row">
            <h2 class="sec_tit underline text-center" style="font-size:25px; width: 100%">Premier Crypto PR Services We Provide</h2>
            <p class="text-center">Our crypto PR services orchestrate the symphony of your brand’s presence in the crypto landscape, blending visibility, credibility, and engagement into a cohesive and powerful narrative. Whether enhancing your reputation, forging key media connections, or narrating your brand’s story through impactful content, our approach ensures growth, influence, and a lasting impact.</p>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img1.avif') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Brand Reputation Management</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">Our brand reputation management is your digital identity's steadfast guardian. We start with a thorough assessment of your brand's current perception, identifying both strengths and vulnerabilities. We then design a strategy that aligns with your brand's core values and objectives, ensuring every piece of news, content, or communication radiates authenticity and precision.</p>

                            <h5> What You Achieve: </h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                A fortified brand image that exudes trust and reliability. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                Effective mitigation of reputational risks, protecting against potential PR crises. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> A consistent and compelling brand narrative that resonates powerfully across all media channels.</p>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="reverse">
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img2.png') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Media Relations</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">In the realm of crypto PR, media relations acts as our essential tool for establishing connections. We start with a tailored media plan that highlights your project's unique attributes. Our approach involves crafting engaging press releases, arranging prominent public appearances, and securing podcast features to share your story broadly. By building strong relationships with media professionals, we position your brand as a trusted leader in innovation.</p>

                            <h5> What You Achieve:</h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Global Visibility: </strong>Reach and engage with audiences around the world. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Enhanced Credibility: </strong>Gain recognition from respected media sources, boosting investor trust.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Lasting Relationships: </strong>Develop meaningful media connections that extend and amplify your influence over time.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img3.jpg') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Crypto Press Releases & In-Depth Articles</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">Our approach to crypto press releases and in-depth article publication is a masterful blend of storytelling and insight. We dissect the complexities of your project and transform them into engaging, impactful narratives. Our expert writers work in harmony to produce press releases that spotlight your groundbreaking innovations and in-depth articles that explore the essence of your technology.</p>

                            <h5> What You Achieve: </h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Elevated Visibility: </strong>Prominent exposure on leading platforms within the crypto space. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> 
                            <strong>Educated Audience: </strong>A well-informed community that appreciates the depth and significance of your contributions. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Enduring Digital Presence: </strong>A strong digital footprint that underscores the importance of your project.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="reverse">
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img4.webp') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Content Creation Management</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">In the digital landscape, content is the ultimate power. Our content creation management is dedicated to producing material that captivates, educates, and connects. We immerse ourselves in understanding your target audience, crafting content that addresses their challenges, provides answers, and ignites curiosity.</p>

                            <h5> What You Achieve: </h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Heightened Engagement:</strong>Amplify interaction across various platforms. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Audience Empowerment: </strong>Equip your audience with meaningful insights.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Consistent Content Flow: </strong>Foster brand loyalty through a steady stream of valuable content.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img5.png') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Review Management</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">In today’s digital world, your reputation is shaped by reviews and conversations. Our review management process combines vigilance with strategic responsiveness. We closely monitor online discussions, swiftly addressing issues and highlighting positive feedback.</p>

                            <h5> What You Achieve: </h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> 
                            <strong>Positive Online Presence: </strong>Draw in stakeholders and partners with a favorable digital image. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> 
                            <strong>Enhanced Brand Perception: </strong>Build a stronger brand reputation through proactive communication. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> 
                            <strong>Strategic Protection: </strong>Defend against potential negative narratives with effective management.</p>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="reverse">
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img6.webp') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Interviews and Q&A</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">A single conversation has the potential to spark transformative change, and our interviews and Q&A sessions are designed to ignite such moments. We orchestrate engagements with key influencers in the crypto sector, enabling your brand to share profound insights, visionary ideas, and specialized knowledge. </p>

                            <h5> What You Achieve:</h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Collaboration with Thought Leaders: </strong>Forge connections with leading industry figures.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Platform for Brand Communication: </strong>Articulate your brand's core values and progress.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> 
                            <strong>Legacy Creation: </strong>Cement your brand’s authority through impactful insights.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img7.svg') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Blog Management</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">Blogs serve as the gateway to your brand's essence. Our blog management skills focus on creating compelling articles that deeply resonate with your audience. We dive into your brand’s narrative, crafting stories that engage and motivate readers to act.</p>

                            <h5> What You Achieve: </h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Enhanced Website: </strong> Transform your site into a valuable resource hub. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Aligned Content Strategy: </strong>Develop a content approach that supports your brand’s objectives. </p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Expertise Showcase: </strong>Build a repository of articles that highlight your brand’s authority and expertise.</p>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="reverse">
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img8.webp') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Banner Ads</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">Elevating your crypto project to the forefront requires a strategic edge, and our banner ads service provides precisely that. We carefully choose high-traffic platforms that resonate with your target demographic, ensuring your banner commands attention and stands out. </p>

                            <h5> What You Achieve: </h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Elevated Visibility: </strong>Direct traffic and generate interest in your project.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Enhanced Click-Through Rate: </strong>Boost engagement and drive potential conversions.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Effective Promotion: </strong>Highlight your project’s key features and benefits powerfully.</p>
                        </div>
                    </li>
                </ul>
            </div>



            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img9.webp') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Crypto Promotion </strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">Navigating the dynamic world of cryptocurrencies requires expertise and flair, qualities that our crypto promotion service excels in. We design targeted content and strategically place it across social media and crypto exchanges to highlight the distinctiveness of your crypto project.</p>

                            <h5> What You Achieve: </h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Broad Awareness: </strong>Elevate the recognition of your NFTs' unique value proposition.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                                <strong>Increased Demand: </strong>Foster greater interest and potential appreciation for your NFTs.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="reverse">
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img10.png') }}" alt="" title="">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Marketing Roadmap</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">Navigating success in the crypto realm requires a meticulously planned route, and our marketing roadmap creation acts as your strategic guide. We conduct an in-depth analysis of your project's current status, objectives, and competitive environment to craft a thorough and effective strategy.</p>

                            <h5> What You Achieve: </h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Strategic Clarity: </strong>A definitive and actionable plan that amplifies your marketing impact.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Unified Brand Narrative: </strong>A cohesive story that resonates across all campaigns, establishing a consistent presence.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Trackable Milestones: </strong>Clear benchmarks to monitor your progress and make agile adjustments for optimal results.</p>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/crypto-pr-agency/img11.svg') }}" alt="" title="" style="margin-left: 75px">
                    </li>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Crypto SEO </strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">In today’s digital world, visibility is critical to success, and our crypto SEO service ensures your project stands out in a crowded online market. We enhance your online presence, making it easier for potential investors and users to find your project organically.</p>

                            <h5> What You Achieve: </h5>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Steady Organic Leads: </strong>A continuous flow of leads that lowers acquisition costs and drives revenue growth.</p>
                            <p class="points"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <strong>Sustained Authority: </strong>Long-term success as your project achieves higher rankings and increased credibility in search engines.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('static.web3-clients', array(
    'title' => 'Renowned <span style="color:#47b475;">Web3 Clients</span> <br> We Catapulted to Prominence',
    'desc' => "As a leading Web3 marketing agency, we are committed to delivering exceptional services that effectively connect projects with their target audiences through a diverse array of strategies. This dedication has enabled us to partner with top-tier Web3 companies, consistently achieving outstanding results for them."
))

<style type="text/css">
    .Package_list img {
        /*border:1px solid #fff;
                border-radius: 150px;*/
    }

    .Package_list {
        display: inline-block;
        background: rgba(0, 0, 0, .6);
        padding: 30px 10px;
        /* max-width: 280px; */
        width: 25%;
        margin-bottom: 30px;
        text-align: center;
        border-radius: 5px;
    }

    .Package_list img {
        height: 55px;
    }

    @media screen and (max-width:320px) {
        .Package_list {
            width: 100%;
        }
    }
</style>
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
<section class="common_spacing">
    <div class="container">
        <div class="row">
            <h4 class="sec_tit underline text-center" style="font-size:25px; width: 100%">Elevating Your Crypto Business to Unmatched PR Success</h4>
            <p class="text-center mt20">Our goal is to amplify the intrinsic value and transformative potential of your crypto offerings through meticulously crafted, integrated marketing campaigns. With deep expertise in the crypto landscape, we design campaigns that push beyond traditional marketing limits, captivating and influencing your target audience like never before.
                <br><br>
                At the heart of our Crypto PR agency is a commitment to enhancing your company’s value through a dynamic, multifaceted approach, including:
            </p>
        </div>
        <div class="row list_box mt50">
            <div class="col-md-6">
                <h5>Customized Marketing Strategies for Maximum Impact</h5>
            </div>
            <div class="col-md-6">
                <h5>Innovative Designs that Reflect Your Brand Identity</h5>
            </div>
            <div class="col-md-6">
                <h5>Strategic Content and Messaging to Build Community</h5>
            </div>
            <div class="col-md-6">
                <h5>Amplified Exposure through Exclusive Media Connections</h5>
            </div>


        </div>
    </div>
</section>


<style type="text/css">
    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }

    .tech-padding {
        padding-bottom: 100px
    }

    .space-pt {
        padding: 100px 0 0
    }

    .tech-padding:before {
        height: 470px !important
    }

    .bg-dark-half-md {
        background: #022d62;
        width: 100%;
        display: inline-block;
        padding: 100px 0
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
        width: 20%;
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
        transition: all .3s ease-in-out
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
        padding: 15px;
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
        transition: all .3s ease-in-out
    }
</style>
<section class="space-pt bg-dark-half-md tech-padding teck">
    <div class="container">
        <div class="row justify-content-md-center text-center">
            <div class="section-title text-center ">
                <h3 class="common_h3 text-white">Propel Your Crypto Brand with Our Elite Network of Top Crypto Publications</h3>
                <hr>
                <p class="white-color">Prepare to catapult your project into the spotlight. Our exclusive network of premier blockchain publications serves as the ultimate catalyst for your success. Envision your project featured in the most prestigious crypto publications, gaining not just visibility but strategic exposure in platforms that truly connect with your target audience.</p>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-sm-12">
                <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/CoinDesk.webp') }}" alt> </div>
                        <a href="#" class="category-title">CoinDesk</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/CoinTelegraph.webp') }}" alt> </div>
                        <a href="#" class="category-title">CoinTelegraph</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/bitcoin.webp') }}" alt> </div>
                        <a href="#" class="category-title">Bitcoin.Com</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/yahoo-finance.webp') }}" alt> </div>
                        <a href="#" class="category-title">Yahoo! Finance</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/Business-insider.webp') }}" alt> </div>
                        <a href="#" class="category-title">Business Insider</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/forbes.webp') }}" alt> </div>
                        <a href="#" class="category-title">Forbes</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/Entrepreneur.webp') }}" alt> </div>
                        <a href="#" class="category-title">Entrepreneur</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/Bitcoinist.webp') }}" alt> </div>
                        <a href="#" class="category-title">Bitcoinist</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/NFT-News-Today.webp') }}" alt> </div>
                        <a href="#" class="category-title">NFT News Today</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/NFT-Culture.webp') }}" alt> </div>
                        <a href="#" class="category-title">NFT Culture</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/NFT-Plazas.webp') }}" alt> </div>
                        <a href="#" class="category-title">NFT Plazas</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/NFT-Evening.webp') }}" alt> </div>
                        <a href="#" class="category-title">NFT Evening</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/CoinSpeaker.webp') }}" alt> </div>
                        <a href="#" class="category-title">CoinSpeaker</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/coincodex.webp') }}" alt> </div>
                        <a href="#" class="category-title">CoinCodex</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/Business-insider.webp') }}" alt> </div>
                        <a href="#" class="category-title">Business Insider</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/Crypto-News') }}.webp" alt> </div>
                        <a href="#" class="category-title">Crypto.News</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/Investing.webp') }}" alt> </div>
                        <a href="#" class="category-title">Investing.Com</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/MarketWatch.webp') }}" alt> </div>
                        <a href="#" class="category-title">MarketWatch</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/Associated-Press.webp') }}" alt> </div>
                        <a href="#" class="category-title">Associated Press</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="lazy img-fuild" style="height:40px;"
                                src="{{ asset('images/crypto-pr-agency/NewsBTC.webp') }}" alt> </div>
                        <a href="#" class="category-title">NewsBTC</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
    #pricing-section {
        padding: 60px 0;
        background: #fff;
    }

    .fa-check-circle {
        font-size: 26px;
        color: #91c645;
    }

    .fa-times-circle {
        font-size: 26px;
        color: #d90823;
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

{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What defines crypto PR?',
            'ans' => "Crypto PR involves specialized public relations strategies aimed at promoting cryptocurrency projects and businesses. It focuses on managing the public perception of crypto ventures through targeted media outreach, strategic content creation, and effective brand messaging."
        ],
        [
            'ques' => 'Which PR agency excels in the crypto space?',
            'ans' => "The top PR agency for crypto is one with a proven track record in the industry, offering tailored strategies that align with the unique needs of cryptocurrency projects. Look for agencies with strong media connections, expertise in blockchain technology, and a history of successful campaigns."
        ],
        [
            'ques' => 'How does PR influence your crypto projects?',
            'ans' => "PR can significantly boost the visibility and credibility of your crypto projects. Effective PR strategies enhance brand recognition, attract potential investors, and build trust within the crypto community, ultimately driving project success."
        ],
        [
            'ques' => 'What is a crypto PR agency?',
            'ans' => "A crypto PR agency specializes in managing and promoting cryptocurrency and blockchain projects. It employs targeted communication strategies to enhance a project's public image, manage media relations, and create impactful content within the crypto sector."
        ],
        [
            'ques' => 'What is blockchain public relations?',
            'ans' => "Blockchain public relations refers to PR efforts specifically focused on blockchain technology and related projects. It involves crafting narratives, managing media outreach, and building relationships to effectively communicate the benefits and advancements of blockchain innovations."
        ],
        [
            'ques' => 'How should you craft a press release for cryptocurrency?',
            'ans' => "When writing a press release for cryptocurrency, emphasize the unique aspects and benefits of the project. Use clear and engaging language to highlight key features, recent developments, or partnerships, and ensure the release is distributed to relevant media outlets within the crypto industry."
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