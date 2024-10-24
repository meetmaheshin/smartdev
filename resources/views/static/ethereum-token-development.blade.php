@extends('layouts.static')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/inline-css.css')}}">
@section('css')
@endsection
@section('content')


<style type="text/css">
    body {
        color: #000000;
    }


.contentall a {
background: linear-gradient(45deg, #961e52, #d26490) !important;
color: #fff;
cursor: pointer;
margin: 1px;
text-transform: capitalize !important;
/*    box-shadow: 0px 3px 0px 2px #63acff;*/
}
    .timeline-center .tm-icon{font-size: 30px;color: #47b475;}
    .gray-bg, .gray_bg{background: #2966f21c;}
    .faq-content #accordion a[data-toggle=collapse]::before {background:#1539b5;}

    @media screen and (max-width: 767px) {
        table.visible-xs {
            display: table!important;
        }
        .Package_list{width: 100% !important;}
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
/*            background: #140d4c;*/
        background: linear-gradient(140deg, #3c4bd8, #246df8);
        padding-top: 145px;
        padding-bottom: 85px;
        height: auto;
        background-position: center;
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
        color: #fff!important;
    }

    .contentall p {
        color: #fff!important;
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
        font-size: 25px!important;
        font-weight: 700;
        color: #000000;
        line-height: 1.4;
    }

    .cta_mine{margin-top: 0;}

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

    .feature-box-3 .feature-title{margin-bottom: 5px; font-size: 18px;}

    @media (max-width: 1199px) {
        .contentall h1,
        .ban_tirt {
            font-size: 30px;
        }
    }

    @media (min-width: 992px) {
        .banner {
            height: auto!important;
        }
    }

    @media (max-width: 768px) {
        .banner{padding-top: 85px;}
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
            font-size: 14px!important;
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
        background: linear-gradient( 90deg, #fff, #f1f1f1);
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
        background: linear-gradient( 90deg, #f1f1f1, #fff);
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
        .awesome-features-wrapper{min-height: auto !important;}
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
            margin-top: 30px!important;
        }
        .perfect-script-items1{min-height: 240px !important;}

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

    .choose-wrapper:hover p strong, .choose-wrapper:hover h3 {
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
        min-height: 340px!important;
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
        margin-bottom: 0px!important;
        /*margin-top: 10px;*/
    }

    .service-section {
        background: #fff;
        position: relative;
        overflow: hidden;
    }

    .service-section:before {
        content: "";
        background: url(images/lab/dot-shape.webp) #1539b5;
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
        color: #fff!important;
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
        /*background: #2966f21c;*/
    }

    section {
        padding-top: 50px;
        padding-bottom: 50px;
        overflow: hidden;
        position: relative;
    }

   

    .product-features {
        /*background: linear-gradient(rgb(37 38 37 / 48%), rgb(10 10 10 / 57%)), transparent url(images/ethereum-token-development/iconsbg-image.webp) top left/cover no-repeat scroll;*/
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
        .perfect-script-items1{min-height: auto !important;}
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
        transform: scale(1, 1)!important;
    }

    .feature-box-3 .feature-desc {
        color: #000000;
    }

    .feature-box-3 {
        display: inline-block;
        width: 100%;
        /*min-height: 285px;*/
        border: 0;
        border-top: 3px solid #1539b5; 
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
        font-size: 18px!important;
        font-weight: 600;
        /*color: #47b475;*/
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

    .blog-slider__item.swiper-slide-active .blog-slider__content > * {
        opacity: 1;
        transform: none;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
        transition-delay: 0.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
        transition-delay: 0.4s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
        transition-delay: 0.5s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
        transition-delay: 0.6s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
        transition-delay: 0.7s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
        transition-delay: 0.8s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
        transition-delay: 0.9s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
        transition-delay: 1s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
        transition-delay: 1.1s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
        transition-delay: 1.2s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
        transition-delay: 1.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
        transition-delay: 1.4s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
        transition-delay: 1.5s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
        transition-delay: 1.6s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
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

    .blog-slider__content > * {
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

    .blog-slider .swiper-container-horizontal > .swiper-pagination-bullets,
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
        color: #1539b5;
    }

    .flip-box:hover {
        background: #47b775;
        color: #fff;
    }

    .flip-box:hover h3 {
        color: #fff;
    }

    .flip-box:hover .flip-icon-outer {
        background: #2966f21c;
        transform: translateY(-10px);
    }

    @media screen and (min-width: 500px) {
        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
            margin-top: 15px!important;
            display: inline-block;
            margin-left: 13px!important;
            margin-right: 13px!important;
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
        font-size: 20px!important;
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
        color: #ffffff!important;
    }

    @media (max-width: 576px) {
        #solution_div {
            padding: 10px 20px!important;
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
            padding: 12px 50px!important;
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
        color: #ffffff!important;
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

    .internal_link{
        color: #47b475;
        font-weight: 700;
    }
    a.internal_link:hover {
        color: #47b475!important;
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

.nec-btn{
position: relative !important;
color:#fff !important;
border-radius:30px !important;
font-size: 11px;
text-transform: capitalize; !important;
transform: scale(1.1,1.1) !important;
transition:all 0.3s ease-out 0s !important;
/*    background: #47b475 !important;*/
background: linear-gradient(45deg, #961e52, #d26490) !important;

}
.nec-btn:hover{
transform: scale(1,1) !important;
color:#fff !important;
background:#6a0d35!important;
}
a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
margin-bottom: 15px!important;
display: inline-block;
margin-right: 26px!important;
}
.contentall a, a.home-talk-experts{
padding: 10px 20px !important;
} 

.owl-theme .owl-dots .owl-dot{display: inline-block;}
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
.owl-carousel .owl-item h6{font-size: 18px; margin-top: 20px; margin-bottom: 10px;color: #200b52;}
.owl-carousel .owl-item svg{width: 25px;}


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
        background-color: #1539b5;
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
border-left: 2px solid #1539b5;
transition: .1s all ease;
}

.featured-icon-box.style3 {
position: relative;
margin: 15px 0;
background-color: #fff;
}

.awesome-features-wrapper {
        /*border: 1px solid #cdcdcd;*/
        background: #fff;
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
        background: #1539b5;
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
        margin-bottom: 22px;
        font-size: 40px;
        color: #1539b5;
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

p strong{color: #1539b5;}

/*-- Client section --*/
.teck .category-grid-style-01 .category-item{padding: 10px !important;}
.category-item.aos-item .text-center{font-size: 12px !important; margin-bottom: 0px !important;} 
.teck .category-grid-style-01 .category-item .category-icon{margin-bottom: 0 !important;}
.teck .category-icon img{height: 80px !important;}


/*-- Client section --*/
.teck .category-grid-style-01 .category-item{padding: 10px !important;}
.category-item.aos-item .text-center{font-size: 12px !important; margin-bottom: 0px !important;} 
.teck .category-grid-style-01 .category-item .category-icon{margin-bottom: 0 !important;}
.teck .category-icon img{height: 80px !important;}
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
            width: 49%!important
        }
    }
.category-item.aos-item:hover .text-center{position: relative; z-index: 99; color: #000 !important;}
.teck .category-icon img{height: 60px !important;}  
/*-- Client section --*/

.feature-box-3 .icon{background: #e8eefe;}

/*-- Integration --*/
.integration{padding: 60px 0px; /*background: url(img/masternode-coin-development/feature-bg.webp) no-repeat bottom right #f6f8ff;*/}
.integration-items{background: #ebedf2; width: 100%; padding: 10px; border: 1px solid #eee; border-radius: 10px; margin: 20px auto; text-align: center;}
.integration-items p{text-align: center; margin-top: 15px;}
.integration-items .icons{align-items: center; display: flex; box-shadow: 5px 5px 0 #108ad6; background: #1539b5; width: 90px; height: 90px; margin: -31px auto 10px auto; padding: 10px; border-radius: 50%; justify-content: center;}
/*.integration-items .icons img{border-radius: 20px;}*/
.integration-items p strong{display: block; color: #0f1c3f; font-size: 18px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px; border-bottom: 1px solid #eee;}


/*equalize start*/
.container-center {display: flex; flex-wrap: wrap; position: relative; z-index: 1; justify-content: center; }
.equalize {display: flex;}
/*equalize end */

/*-- Travel App --*/
.travel-app{ padding: 60px 0px;}
.travel-app-items, .travel-app-items1{clear: both; min-height: 90px;  display: flex; }
.travel-app-items p strong, .travel-app-items1 p strong{display: block; font-size: 18px; color: #1539b5; text-align: left;}
.travel-app-items p{color: #000; text-align: justify; width:80%; }
.travel-app-items1 p{color: #000;}
.travel-app-items .icons, .travel-app-items1 .icons{width: 80px; height: 80px; border:4px solid #1539b5; float: left; margin-right: 20px; position: relative; padding: 13px; border-radius: 50%; margin-bottom: 15px; }
/*.travel-app-items .icons:before{content: ''; position: absolute; width: 40px; height: 8px;background: #fff; z-index: 1; top: -8px; left: -8px;}*/
/*.travel-app-items .icons img{-webkit-filter: brightness(0) invert(1);  filter: brightness(0) invert(1);}*/
.travel-app-items1 .icons img{}
.travel-app .app-screen1{padding: 10px; max-width: 320px; }

/*------------ Complimentary-Features Style -----------*/
.complimentary-features{padding: 60px 0px 0 0; background: #fff;}
.complimentary-features ul{display: flex; flex-wrap: wrap; width: 100%; margin: 0px; padding: 0px; justify-content: center;}
.complimentary-features ul li{width: 29%; margin: 2%; text-align: left; background: #fff; box-shadow: 0px 4px 34px rgb(59 54 100 / 15%); border-radius: 15px; padding: 30px 30px 20px 30px;}
.complimentary-features ul li:nth-child(even){background:#2966f21c;}
.complimentary-features ul li .icons{float: left;}
.complimentary-features ul li .icons img { width: 80px; height:80px;padding: 10px;}
.complimentary-features ul li .content{background: transparent;}
.complimentary-features ul li p strong{display: block; font-size: 20px; color: #200b52;   text-align: left; padding-bottom: 10px;}
.complimentary-features ul li h4{display: block; font-size: 20px; color: #200b52; font-weight: bold; text-align: left; line-height: 1.3em; margin-bottom: 10px;}
.complimentary-features ul li h3{display: block; font-size: 18px; color: #200b52; font-weight: bold; text-align: left; line-height: 1.3em; margin-bottom: 10px;}


/*-- Welcome Content --*/
.welcome-content{background: #1539b5; padding: 60px 0px;}
.welcome-content ul{display: flex; flex-wrap: wrap; margin:0px; padding: 0px; color: #000; justify-content: center;}
.welcome-content ul li{width: 19%; margin:0.5%; border:1px solid #fff; display: grid;  grid-template-columns: 30% 70%; padding: 10px; align-items: center; text-align: left;} 
.welcome-content ul li .icons{width: 50px; margin-right: 10px; padding-right: 10px; border-right:1px solid #fff; /*filter: invert(1);*/}
.welcome-content ul li p{line-height: 20px; padding: 0px; margin: 0px;  }

/*------------ Tech Stack -----------*/
.tech-stack{padding: 60px 0px;}
.tech-stack ul{display: flex; padding: 10px; justify-content: center; background: #fff; margin-bottom:10px;}
.tech-stack .nav-stacked>li{background: #0b4599; margin: 2px; border-radius: 5px; color: #fff;}
.tech-stack .nav li.active a, .tech-stack .nav li a:hover{background-image: linear-gradient(to right, #00aaff, #3a5be4);}
.tech-stack .nav li a p{color: #fff !important; margin-bottom: 0;}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{border: 0; color: #fff;}
.tech-stack ul img{height: 60px;}
.tech-stack h4{text-align: center; background: #234aa9; font-size: 20px; font-weight: bold; padding: 10px; margin-bottom: 0px; color: #fff;}
.technology ul{flex-wrap: wrap;}
.technology ul li{width: 18%; padding: 10px; margin: 1%; text-align: center; border: 1px solid #eee;}

.box,.sub_ff{position:relative}.sub_ff strong{display:block;font-size:17px;color:#fff!important;font-weight:900;line-height:30px}.dev{margin-bottom: 10px;}.sub_ff{margin-top:0px;margin-bottom:0px}.sub_ff i{/*position:absolute;left:0;*/color:#1758b2;line-height:1.5;font-size:19px}

.box,.sub_ff1{position:relative}.sub_ff1 strong{display:block;font-size:16px;color:#00000a!important;font-weight:800;line-height:30px}.dev1{padding-left:26px;margin-bottom: 10px;}.sub_ff1{margin-top:15px;margin-bottom:0px}.sub_ff1 i{position:absolute;left:0;color:#1758b2;line-height:1.5;font-size:19px}


.Package_list {
        position: relative;
        display: inline-block;
        background: #2966f21c;
        padding: 30px 10px;
        width: 100%;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
        /*box-shadow: 0 .25rem 1.75rem rgba(30,34,40,.07)!important;*/
        box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    }
    .Package_list:after{
            content: "";
position: absolute;bottom: 0;
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
color: #1539b5;
}

    .Package_list img {
        width: 55px;
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
    .Package_list h4, .Package_list h3 {
        display: block;
        font-size: 20px;
        font-weight: bold;
        margin-top: 12px;
        margin-bottom: 10px;
    }
    .product-features {
        /*background: linear-gradient(140deg, #402c67, #af95f8, #f6abf4);*/
    }

.center-align{padding:60px 0}.center-align ul{width:100%;display:flex;flex-wrap:wrap;margin:10px 0;padding:30px 0;border:1px solid #eee;border-radius:10px;background: #2966f21c;}.center-align ul li{width:50%;display:flex;align-items:center;padding:0 3%}.center-align ul li h5{font-size:24px;font-weight:700;color:#e85b17}.center-align ul li p span{width:40px;height:40px;background:linear-gradient(#e88817,#e85b17);opacity:1;font-size:18px;display:inline-block;border-radius:50%;color:#fff;text-align:center;line-height:2.1em;margin-left:-70px;margin-right:25px}.reverse{flex-direction:row-reverse}

.workflow{display:flex;flex-wrap:wrap;justify-content:center;width:100%;padding:0;margin:0}.workflow li{text-align:left;background:#2966f21c;border-radius:7px;margin:1.5%;padding:15px;width:22%;position:relative}.workflow li img{width:65px}.workflow li .title{margin-bottom: 8px;} .workflow li p{ margin-bottom:0;}.workflow li:after{content:'';position:absolute;top:40%;right:-15px;width:15px;height:15px;border-top:25px solid transparent;border-bottom:25px solid transparent;border-left:15px solid #1539b5}.workflow li:last-child:after{display:none}.workflow .fa{color:#140050;font-size:40px;margin:15px 0}@media (max-width:767px){.strategies-items,.strategies-items1{display:block}.workflow li{margin:3%;width:44%}}

@media (max-width:320px){
.workflow li{
    width: 100%;
}
}
/*-- Technology --*/               
.technologies {background:#1539b5; padding: 50px 0;}
.technologies ul {display: flex; flex-wrap: wrap; justify-content: center;}
.technologies ul li {width:16%; text-align: center; font-size: 16px; padding: 15px; margin: -1px; border: 1px solid #fff; background: #1539b5;}
.technologies ul li img {height: 50px;}
.technologies ul li p{margin-bottom: 0 !important;}


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
.teck .category-grid-style-01 .category-item{padding: 10px !important;}
.category-item.aos-item .text-center{font-size: 12px !important; margin-bottom: 0px !important;} 
.teck .category-grid-style-01 .category-item .category-icon{margin-bottom: 0 !important;}
.teck .category-icon img{height: 60px !important; margin-bottom: 5px; border-radius: 10px;}
.category-item.aos-item:hover .text-center{position: relative; z-index: 99; color: #000 !important;}
/*-- Client section --*/
@media only screen and (min-width: 320px) and (max-width: 767px) {
        .teck .category-grid-style-01 .category-item {width: 46%!important;}
    }



    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .welcome-content ul li{width: 100%;}
.complimentary-features ul li{width: 100%; display: block;}
.complimentary-features ul li .icons{width: 100%; clip-path:none; border-radius: 0px;}
.complimentary-features ul li .content{width:100%; clip-path:none; border-radius: 0px; padding: 15px;}

.technologies ul li {width: 49%;}
.technologies ul li img {width: 60px;}
.technologies ul li{margin:0px;}

.tech-stack ul img{width: 100%;}
.tech-stack ul{flex-wrap: wrap;}
.tech-stack ul li{width: 48%; text-align: center;} 

.travel-app-items .icons {margin-bottom: 0px;}

.center-align{padding:10px 0}.center-align ul li{width:100%;margin:5px 0;padding:15px}

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
        
        .box4{min-height: auto;}

        .awesome-features-wrapper{min-height: auto !important;}
    }
/*@media only screen and (max-width: 320px){
.tech-stack ul li{width: 48%!important;}
}*/
    @media only screen and (min-width: 768px) and (max-width: 899px) {
         .welcome-content ul li{width: 32%;}
        .complimentary-features ul li{width: 100%;}
        .travel-app-items .icons, .travel-app-items1 .icons{margin-bottom: auto;}
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
    @media (max-width:320px){
        .stats{
            font-size: 16px!important;
        }
    }
    @media (max-width:767px){
        .stats{
        min-height: 140px;
        }
    }
    </style>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
"url": "https://www.blockchainappfactory.com/ethereum-token-development",
  "logo": "https://www.blockchainappfactory.com/images/logo-green.webp"
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org/", 
"@type": "Product", 
"name": "Ethereum Token Development Solutions",
"image": "https://www.blockchainappfactory.com/images/ethereum-token-development/banner-img2.webp",
"gtin14": "1845678902083",
"sku": "BAF-ETH-TOK-DEV",
"description": "Looking for a reliable and experienced Ethereum token development solutions? We offer ERC-20 token development services to help you launch your own utility token, security token, or governance token, including token creation, smart contract development, blockchain deployment, and more.",
"brand": {
    "@type": "Brand",
    "name": "Blockchain App Factory"
  },
"review": {
    "@type": "Review",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "5",
        "bestRating": "5"
      },
      "author": {
        "@type": "Person",
        "name": "David Miller"
      }
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "5.0",
      "reviewCount": "133"
    }
}
</script>
</head>
<body class="header-shadow" id="ico">
<div class="main">
<div class="banner my_banner">

<div class="banner_content">
<div class="container">
<div class="row">
<div class="col-md-5 col-sm-12 col-xs-12 text-left">
<div class="contentall">
<div class="ovr">
<div itemscope itemtype="http://schema.org/CreativeWork">
<div class="ban_tirt">
<p>Kickstart your project with an expert Ethereum token development team 
    From concept to creation, our team ensures your Ethereum tokens are crafted to meet your precise needs.
     </p>
{{-- <h1 itemprop="name">Ethereum Token Development Firm </h1>  --}}
</div>
{{-- <p itemprop="text">Craft a fully customized token with our Ethereum token development firm, where we meet all types of standards depending on your needs.</p> --}}
<div class="txt">
<a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn" id="cyz" style="border-radius: 30px !important; text-transform: capitalize !important; margin-left: 0;">Get your token today!</a>
{{-- <a rel="nofollow" href="#demo" class="nec-btn" id="cyz" style="border-radius: 30px !important;">View Demo</a> --}}

</div>
</div>
</div>
</div>
</div>
<div class="col-md-7 col-sm-12 col-xs-12 text-center" style="margin-top:30px;">
<img class="magic" src="{{ asset('images/ethereum-token-development/banner-img2.png') }}" alt="Ethereum Token Development Firm" title="Ethereum Token Development Firm"> </div>
</div>
</div>
</div>
</div>
</div>
</div>
<style>
.owl-carouselfour img{
width: 150px!important;
height: auto;
margin: 0 auto;
box-shadow: 0 0 20px 3px #00000026;
border-radius: 9px;
padding: 13px;
}
.owl-carouselfour .owl-stage{
min-height: 200px!important;
margin: 26px auto!important;
}
.projectFactsWrap{
display: flex;
margin-top: 0px;
flex-direction: row;
flex-wrap: wrap;
}
#projectFacts .fullWidth{
padding: 0;
}

.projectFactsWrap .item{
width: 33.3%;
height: 100%;
padding: 18px 0px;
text-align: center;
}

.projectFactsWrap .item:nth-child(1){
background: #47b475;
}

.projectFactsWrap .item:nth-child(2){
background: #3a9d64;
}

.projectFactsWrap .item:nth-child(3){
background: #478f65;
}

.projectFactsWrap .item:nth-child(4){
background: rgb(23, 44, 66);
}

.projectFactsWrap .item p.number{
font-size: 40px;
padding: 0;
font-weight: bold;
margin-bottom:2rem;
}

.projectFactsWrap .item p{
color: rgba(255, 255, 255, 0.8);
font-size: 18px;
margin: 0;
padding: 10px;
font-family: 'Open Sans';
}


.projectFactsWrap .item span{
width: 60px;
background: rgba(255, 255, 255, 0.8);
height: 2px;
display: block;
margin: 0 auto;
}


.projectFactsWrap .item i{
vertical-align: middle;
font-size: 50px;
color: rgba(255, 255, 255, 0.8);
}


.projectFactsWrap .item:hover i, .projectFactsWrap .item:hover p{
color: white;
}

.projectFactsWrap .item:hover span{
background: white;
}

@media (max-width: 786px){
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
margin-bottom:0;
}
#counter-stats .stats:nth-child(1){
background:#1539b5;
}
#counter-stats .stats:nth-child(2){
background:#214bd6;
}
#counter-stats .stats:nth-child(3){
background:#1539b5;
}
#counter-stats .stats:nth-child(4){
background:#214bd6;
}
/* AUTHOR LINK */


</style>
<style type="text/css">
.client-list{display: flex; flex-wrap: wrap; width: 100%; padding: 0; margin: 0; justify-content: center; align-items: center;}
.client-list li{width: 10%; margin: 25px 1%; padding: 0 10px;}
.client-list li img{filter: grayscale(1);}    
@media (min-width: 320px) and (max-width: 768px) {
    .client-list li{width: 31%;margin: 15px 1%;}
}
</style>
@include('static.stats')
@include('static.client-list')  
<div class="common_spacing">
<div class="container">
<div class="section-title text-center">
<h2 class="title-th sec_tit underline">Achieve Breakthrough Results with Our Innovative Ethereum Token Development Services</h2> </div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 text-center">
<p class="text-center">Ethereum’s strong network and wide use make it easy for businesses to create their own tokens. With Ethereum, you get smart contracts for automatic transactions and support for decentralized apps (dApps). We offer solutions for various Ethereum token types, including asset tokenization, ICOs/STOs, and loyalty programs.
<br><br>
Our professional team will help you build and launch Ethereum tokens designed just for you. We focus on creating efficient and secure tokens for DeFi and NFTs, making sure your projects run smoothly and effectively. Let us help you bring your ideas to life with powerful Ethereum tokens.</p>
</div>
<div class="clearfix"></div>
<div class="text-center cta_mine txt">
<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank" href="{{ url('consultation') }}" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Book your consultation</span></a>
{{-- <a rel="nofollow" href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Meet our experts today</span></a> --}}
 </div>
</div>
</div>
</div>
<style type="text/css">.icon-text-1 h3{font-size:18px;color:#000;font-weight:700}.icon-text-1 p{margin:.6rem 0 0}.icon-text-1 img{padding:5px}@keyframes spin{0%{transform:rotateY(0)}50%{transform:rotateY(180deg)}100%{transform:rotateY(360deg)}} .icon-text-1{display:flex;align-items:center;margin-bottom:15px;background:#fff;padding:15px;border-left:5px solid #1539b5}.icon-text-1 .icon-text-icon{width:80px;height:80px;border-radius:12px;margin-bottom:20px;line-height:80px;text-align:center}.icon-text-1 img{width:64px;height:64px;/*animation:5s infinite spin*/}.icon_content{padding-left:20px;min-height:100px;width:80%}.icon-text-1 h3{font-size:18px;color:#000;font-weight:700}.icon-text-1 p{margin:.6rem 0 0}</style>

    {{-- include section --}}
    @include('static.left-aligned-image-card-section', [
        'title' => 'Your Gateway to Advanced Ethereum Token Development', 
        'desc' => 'With our deep expertise in Ethereum, we enhance the efficiency and reliability of ERC20 tokens using a range of development services.',
        'cards' => [
            [
                'title' => 'Token Development',
                'desc' => 'We design and develop custom Ethereum tokens customized to your requirements, ensuring seamless and efficient functionality.',
                'image' => 'ethereum-token-development/icons/tokens.png'
            ],
            [
                'title' => 'Token Transfer',
                'desc' => 'We guarantee secure token transfers with advanced encryption, ensuring safe and reliable transactions.',
                'image' => 'ethereum-token-development/icons/transfer.png'
            ],
            [
                'title' => 'Exchange Listing',
                'desc' => 'We simplify the process of listing your Ethereum tokens across different exchanges, enhancing visibility and increasing liquidity.',
                'image' => 'ethereum-token-development/icons/listing.png'
            ],
            [
                'title' => 'ICO Development',
                'desc' => 'We expertly manage Initial Coin Offerings (ICOs) to help you effectively raise funds through strategic token selling.',
                'image' => 'ethereum-token-development/icons/ico.png'
            ],
            [
                'title' => 'Token Wallet Development',
                'desc' => 'We create secure and intuitive ERC20 token wallets with next-gen security features for effortless asset management.',
                'image' => 'ethereum-token-development/icons/wallet.png'
            ],
            [
                'title' => 'Mint and Burn ERC20 Token',
                'desc' => 'We have experts who can mint and burn ERC20 tokens, allowing you to manage token supply and circulation with precision.',
                'image' => 'ethereum-token-development/icons/erc.webp'
            ],
            [
                'title' => 'Smart Contract Development',
                'desc' => 'We create bespoke smart contracts tailored to your needs, ensuring they include necessary functions and adhere to regulatory standards.',
                'image' => 'ethereum-token-development/icons/contract.webp',
            ],
            [
                'title' => 'Cold Storage Solutions',
                'desc' => 'Our team offers advanced cold storage solutions with high-level security to safeguard your tokens from potential threats.',
                'image' => 'ethereum-token-development/icons/cloud-services.webp'
            ],
        ],
    ])

<section class="product-features package_includes">
<div class="container">
<div class="section-title text-center">
<div class="sec_tit mb20">
<h3 class="section-title underline mb20 ">Master Every Token Standard with Our Ethereum Development Services</h3>
</div>
<p class=" ">Our team excels in developing Ethereum tokens across various ERC standards, each tailored for specific uses. From seamless transactions and unique digital collectibles to advanced features and cost-saving innovations, we ensure your tokens are perfectly suited for their purpose.</p><br>
</div>
<div class="container-center">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
<div class="Package_list"> <img class="lazy" src="{{ asset('images/ethereum-token-development/icons/erc.webp') }}" alt><h4>ERC20</h4>We design ERC20 tokens tailored for utility purposes and fundraising, delivering long-term value and benefits to your community.</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
<div class="Package_list"> <img class="lazy" src="{{ asset('images/ethereum-token-development/icons/erc.webp') }}" alt><h4>ERC-223</h4>Our team develops ERC-223 tokens for secured and quick transfers that mirror the Ether transactions closely to prevent potential token loss.</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
<div class="Package_list"> <img class="lazy" src="{{ asset('images/ethereum-token-development/icons/erc.webp') }}" alt><h4>ERC-721</h4>We create ERC-721 tokens for one-of-a-kind digital assets and NFTs, opening doors to new possibilities in digital ownership.</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
<div class="Package_list"> <img class="lazy" src="{{ asset('images/ethereum-token-development/icons/erc.webp') }}" alt><h4>ERC-1400</h4>ERC-1400 tokens provide a mix of fungibility and enhanced transparency, promoting trust with clear and manageable ownership rights.</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
<div class="Package_list"> <img class="lazy" src="{{ asset('images/ethereum-token-development/icons/erc.webp') }}" alt><h4>ERC-777</h4>We leverage ERC-777 tokens for hassle-free cross-cryptocurrency transactions on Ethereum for better interoperability and efficiency.</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
<div class="Package_list"> <img class="lazy" src="{{ asset('images/ethereum-token-development/icons/erc.webp') }}" alt><h4>ERC-827</h4>Our ERC-827 tokens build on ERC20 and reduce complex code, allowing for better token integrations.</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
<div class="Package_list"> <img class="lazy" src="{{ asset('images/ethereum-token-development/icons/erc.webp') }}" alt><h4>ERC-865</h4>We craft ERC-865 tokens to eliminate gas fees and enable transaction payments with tokens, streamlining and accelerating the process.</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
<div class="Package_list"> <img class="lazy" src="{{ asset('images/ethereum-token-development/icons/erc.webp') }}" alt><h4>ERC-1155</h4>We work with ERC-1155 tokens to manage both fungible and non-fungible assets efficiently using advanced smart contracts.</div>
</div>
</div>
<div class="clearfix"></div>
<div class="text-center cta_mine txt">
<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank" href="{{ url('consultation') }}" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Let us explain how</span></a>
{{-- <a rel="nofollow" href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with our Experts</span></a> </div> --}}
</div>
</section>


@include('static.top-aligned-image-card-section' ,array(
    'title' => 'Empowering Our Clients to Achieve Extraordinary Growth', 
    'desc' => 'By combining cutting-edge expertise with strategic guidance and unwavering support, we drive our potential collaborators toward exceptional success and business expansion through our superior services.'
));

@include('static.small-round-card-section',array(
   'title' => ' Transform Your Token with Our State-of-the-Art ERC20 Solutions', 
   'desc' => "We Deliver High-Performance ERC20 Tokens with Innovative Features to Give Your Project a Competitive Edge.",
   'card_title_1' => 'Atomic Swap',
   'card_desc_1' => 'We enable seamless token exchanges between different types with our smooth atomic swap functionality.',
   'card_image_1' => 'ethereum-token-development/icons/swapping.png',
   'card_title_2' => 'dApp Integration',
   'card_desc_2' => 'Our ERC20 tokens easily integrate with decentralized applications (dApps) on the Ethereum blockchain, expanding their use.',
   'card_image_2' => 'ethereum-token-development/icons/dapp.webp',
   'card_title_3' => 'Bespoken Token Supply',
   'card_desc_3' => "Adjust your token supply to meet your project's needs with our flexible customization options.",
   'card_image_3' => 'ethereum-token-development/icons/customization.webp',
   'card_title_4' => 'Cross-Chain Support',
   'card_desc_4' => 'Our tokens interact with different blockchain networks, increasing their functionality across various platforms.',
   'card_image_4' => 'ethereum-token-development/icons/cross-chain.webp',
   'card_title_5' => 'ROI Rewards',
   'card_desc_5' => 'Our tokens are designed to maximize returns and provide significant rewards through broad adoption and utility.',
   'card_image_5' => 'ethereum-token-development/icons/rewards.png',
   'card_title_6' => 'Quick Listing',
   'card_desc_6' => 'We simplify and expedite the listing of your tokens on cryptocurrency exchanges, highlighting their unique features.',
   'card_image_6' => 'ethereum-token-development/icons/listing.png',
   'card_title_7' => 'Standardization',
   'card_desc_7' => 'Our tokens adhere to industry standards for secure transactions, minimizing the need for additional protocols.',
   'card_image_7' => 'ethereum-token-development/icons/standard.webp',
   'card_title_8' => 'Burn-Off Approach',
   'card_desc_8' => 'We incorporate a burn-off feature to manage token supply and enhance value over time.',
   'card_image_8' => 'ethereum-token-development/icons/mechanisms.webp'
))

<div id="our_services" class="defisec gray_bg">
<div class="container">
<div class="section-title text-center">
<h2 class="common_h3 title-th sec_tit">Experience the Benefits of Tailored ERC20 Token Development</h2>
<hr>
<p>Our ERC20 token development services offer businesses a range of significant benefits, making it easier to create customized tokens with our expert support.</p><br>
</div>
<div class="grids container-center">
<div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
<div class="feature-box-3">
<div class="icon"> <img src="{{ asset('images/ethereum-token-development/icons/creation.webp') }}" alt class="lazy" width="45px;"> </div>
<h3 class="feature-title common_h4">Bespoke Token Creation</h3>
<p class="feature-desc mb0">We use the Ethereum ecosystem to create as many tokens as needed, ensuring they fit your business goals and reach a global audience.</p>
</div>
</div>
<div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
<div class="feature-box-3">
<div class="icon"><img src="{{ asset('images/ethereum-token-development/icons/security.webp') }}" alt class="lazy" width="45px;"> </div>
<h3 class="feature-title common_h4">Pre-built Security Functionality</h3>
<p class="feature-desc mb0">Our tokens come with advanced security features to secure user’s data and build trust in your project.</p>
</div>
</div>
<div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
<div class="feature-box-3">
<div class="icon"><img src="{{ asset('images/ethereum-token-development/icons/contract.webp') }}" alt class="lazy" width="45px;"> </div>
<h3 class="feature-title common_h4">Automated Smart Contracts</h3>
<p class="feature-desc mb0">We leverage Ethereum’s smart contracts to automate transactions and agreements, ensuring transparent and reliable tokens.</p>
</div>
</div>
<div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
<div class="feature-box-3">
<div class="icon"><img src="{{ asset('images/ethereum-token-development/icons/interoperability.webp') }}" alt class="lazy" width="45px;"> </div>
<h3 class="feature-title common_h4">High Interoperability</h3>
<p class="feature-desc mb0">Our tokens are designed for smooth integration with decentralized applications (dApps) using Ethereum’s standards like ERC20 and ERC-721.</p>
</div>
</div>
<div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
<div class="feature-box-3">
<div class="icon"><img src="{{ asset('images/ethereum-token-development/icons/crowdfunding.webp') }}" alt class="lazy" width="45px;"> </div>
<h3 class="feature-title common_h4">Crypto Crowdfunding</h3>
<p class="feature-desc mb0">We specialize in crafting ERC20 tokens that facilitate successful fundraising through ICOs, opening up new growth opportunities for your business.</p>
</div>
</div>
<div class="grid col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
<div class="feature-box-3">
<div class="icon"><img src="{{ asset('images/ethereum-token-development/icons/tokens.png') }}" alt class="lazy" width="45px;"> </div>
<h3 class="feature-title common_h4">Versatile Token Standards</h3>
<p class="feature-desc mb0">We support multiple Ethereum token standards, such as ERC20, ERC-721, and ERC-1155, to cater to different asset types and attract a wide range of crypto enthusiasts.</p>
</div>
</div>
</div>
</div>
</div>
<section class="roadmap" id="roadmap">
<div class="transition-gradient-after adjust-top"></div>
<div class="container">
<div class="dots-vert"></div>
<div class="row mb40">
<div class="section-title text-center">
<div class="sec_tit mb20">
<h3 class="section-title underline mb20">The Strategic Blueprint for Building Superior ERC20 Tokens</h3>
</div>
<p>Our professional token developers use a meticulous, strategic method to build ERC20 tokens with bespoke features, perfectly aligned with your business objectives.</p>
</div>
</div>
<div class="row d-flex">
<div class="col-md-12">
<ul class="workflow">
<li><img src="{{ asset('images/ethereum-token-development/icons/ideation.png') }}" alt class="lazy" width="45px;"><h4 class="title">Understanding Your Needs</h4> <p>We thoroughly explore your business objectives to identify the key features and functionalities necessary for a successful ERC20 token.</p></li>
<li><img src="{{ asset('images/ethereum-token-development/icons/ownership.webp') }}" alt class="lazy" width="45px;"><h4 class="title">Defining Your Token’s Role</h4> <p>We determine the specific purpose of your Ethereum token—whether for utility, security, or ownership—to ensure it integrates efficiently into the blockchain network.</p></li>
<li><img src="{{ asset('images/ethereum-token-development/icons/experts.png') }}" alt class="lazy" width="45px;"><h4 class="title">Choosing the Right Standard</h4> <p>We select the most relevant Ethereum token standard for your project, like ERC20 for interchangeable tokens or ERC-721/1155 for unique ones.</p></li>
<li><img src="{{ asset('images/ethereum-token-development/icons/contract.web') }}p" alt class="lazy" width="45px;"><h4 class="title">Developing Smart Contracts</h4> <p>We craft and code smart contracts that outline your ERC20 token’s functions and rules, conducting thorough security checks to ensure reliability.</p></li>
<li><img src="{{ asset('images/ethereum-token-development/icons/testing.png') }}" alt class="lazy" width="45px;"><h4 class="title">Testing Thoroughly</h4> <p>We perform rigorous testing on Ethereum’s testnet to determine and fix any issues, guaranteeing a smooth launch on the mainnet.</p></li>
<li><img src="{{ asset('images/ethereum-token-development/icons/deployment.png') }}" alt class="lazy" width="45px;"><h4 class="title">Deploying Your Token</h4> <p>We manage the deployment of your smart contracts on the Ethereum mainnet, making your ERC20 token operational for better market visibility.</p></li>
<li><img src="{{ asset('images/ethereum-token-development/icons/market.png') }}" alt class="lazy" width="45px;"><h4 class="title">Driving Adoption and Engagement</h4> <p>We actively promote your ERC20 token and engage with the groups to emphasize its adoption, support its growth, and create a loyal user base.</p></li>
</ul>
</div>
</div>
<div class="clearfix"></div>
<div class="text-center cta_mine txt">
<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank" href="{{ url('consultation') }}" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Talk to our expert now</span></a>
</div>
</section>

<style type="text/css">
.text-center{
  
    text-align: center !important;
}
.design{
background: #fff;
border-radius: 20px;
padding: 25px 0 1px;
margin: 15px auto;
}
.design h5, .design p{color: #000 ; font-size: 20px; font-weight: 600;}

 #demo{
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
        background: #0b0d8b!important;
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
        font-size: 16px!important;
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
        background: #0b0d8b!important;
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
background: linear-gradient(45deg, #961e52, #d26490) !important;
}
    </style>
<div class="technologies gray-bg" style="background: #2966f21c">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h3 class="sec_tit underline text-center">Industries Benefiting from Our ERC20 Token Development Solutions</h3>
<p class="text-center " style="font-size: 16px;">Our ERC20 token development offerings are tailored to enhance customer engagement and create new revenue opportunities across diverse industries.</p>
<ul>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/banking.webp') }}">
<p class="white">Finance and Banking</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/supply-chain.webp') }}">
<p class="white">Supply Chain</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/ticket.webp') }}">
<p class="white">Ticketing</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/energy.png') }}">
<p class="white">Energy</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/insurance.png') }}">
<p class="white">Insurance</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/e-commerce.png') }}">
<p class="white">E-commerce</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/government.png') }}">
<p class="white">Government</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/education.png') }}">
<p class="white">Education</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/tourism.webp') }}">
<p class="white">Tourism</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/healthcare.png') }}">
<p class="white">Healthcare</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/automation.webp') }}">
<p class="white">Automotive</p>
</li>
<li>
<img class="lazy" src="{{ asset('images/token-development/icons/real-estate.png') }}">
<p class="white">Real Estate</p>
</li>
</ul>
</div>
</div>
</div>
<style type="text/css">.new1 li{background: #2966f21c; border-radius: 10px;}</style>
<section class="welcome-content" style="background: #fff;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
<h3 class="sec_tit underline text-center ">Top 10 ERC20 Tokens to Watch in 2024 and Beyond</h3>
<p class="text-center " style="font-size: 16px;">Discover the leading Ethereum tokens of mid-2024 and let our ERC20 token development expertise guide you in creating tokens that achieve industry recognition.</p>
</div>
<div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<ul class="new1">
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/Tether.webp') }}"></div><p class=" ">Tether USD (USDT)</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/lido-staked-ether.webp') }}"></div><p class=" ">Lido Staked Ether (stETH)</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/usd-coin.webp') }}"></div><p class=" ">USDC (USDC)</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/shiba-inu.png') }}"></div><p class=" ">Shiba Inu (SHIB)</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/liquid-staked-2-o.png') }}"></div><p class=" ">Wrapped liquid staked Ether 2.0 (wstETH)</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/erc.webp') }}"></div><p class=" ">Wrapped Ether (WETH)</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/chain-link.webp') }}"></div><p class=" ">Chainlink (LINK)</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/wrapped-bitcoin.webp') }}"></div><p class=" ">Wrapped BTC (WBTC)</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/uniswap-v3.png') }}"></div><p class=" ">Uniswap (UNI)</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/polygon.webp') }}"></div><p class=" ">Polygon (MATIC)</p></li>
</ul>
</div>
</div>
<div class="clearfix"></div>
<div class="text-center cta_mine txt">
<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank" href="{{ url('consultation') }}" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Let’s talk business</span></a>
 </div>
</div>
</section>
<style type="text/css">.new2 .category-item{background: #041b69 !important; border-radius: 0 !important; border-top: 5px solid #76a5fe !important;} .new2 .category-item a{color: #fff;}</style>
<section class="space-pt bg-dark-half-md tech-padding teck gray-bg">
<div class="container">
<div class="row justify-content-md-center text-center">
<div class="section-title text-center ">
<h3 class="common_h3 ">Where We List Your ERC20 Tokens for Maximum Impact</h3>
<hr>
<p class="section-subtitle ">Our ERC20 token development agency ensures your tokens are featured on top Ethereum listing platforms, enhancing your brand visibility in the market.</p>
</div>
</div>
<div class="row mt20">
<div class="col-sm-12">
<div class="category category-grid-style-01 aos-item aos-init new2" data-aos="fade-up" data-aos-duration="500">
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/coinbase.webp') }}" alt="Coinbase Pro"> </div> <a href="#" class="category-title" alt>Coinbase Pro</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/Bitcoinist.webp') }}" alt="Bitcoin"> </div> <a href="#" class="category-title" alt>Bitcoin</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/kraken.webp') }}" alt="Kraken"> </div> <a href="#" class="category-title" alt>Kraken</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/huobi.webp') }}" alt="Huobi"> </div> <a href="#" class="category-title" alt>Huobi</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/bitfinex.webp') }}" alt="Bitfinex"> </div> <a href="#" class="category-title" alt>Bitfinex</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/gate-io.webp') }}" alt="Gate.io"> </div> <a href="#" class="category-title" alt>Gate.io</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/bittrex.webp') }}" alt="Bittrex"> </div> <a href="#" class="category-title" alt>Bittrex</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/okex.webp') }}" alt="OKEx"> </div> <a href="#" class="category-title" alt>OKEx</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/bybit.webp') }}" alt="Bybit"> </div> <a href="#" class="category-title" alt>Bybit</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/bitstamp.webp') }}" alt="Bitstamp"> </div> <a href="#" class="category-title" alt>Bitstamp</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/coinmarketcap.webp') }}" alt="CoinMarketCap"> </div> <a href="#" class="category-title" alt>CoinMarketCap</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" src="{{ asset('images/ethereum-token-development/icons/coingecko.webp') }}" alt="CoinGecko"> </div> <a href="#" class="category-title" alt>CoinGecko</a> </div>
</div>
<br><br>
</div>
</div>
</div>
</section>
<section class="complimentary-features" style="padding: 60px 0px;">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
<div class="section-title">
<h2 class="title"><strong>Lead the Way in Token Management with Our Expert ERC20 Wallet Solutions</strong></h2>
<hr/>
<p>Our ERC20 token wallet development services enhance your tokens by offering seamless interaction and functionality. Our professional team creates custom wallets designed for hassle-free transactions and reliable performance.</p>
</div>
</div>
<div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
<ul>
<li>
<div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/wallet.png') }}" /></div>
<div class="content">
<h3>Atomic Wallet</h3>
<p>Design a wallet with an intuitive UI and built-in exchange functionalities, inspired by the simplicity and functionality of Atomic Wallet.</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/trezor.webp') }}" /></div>
<div class="content">
<h3>TREZOR</h3>
<p>Develop a hardware wallet that offers high-level security, taking cues from the robust protection features of TREZOR and Ledger devices.</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/myetherwallet.png') }}" /></div>
<div class="content">
<h3>MyEtherWallet</h3>
<p>Create a browser-based wallet that ensures easy access and smooth interaction with digital assets, similar to the convenience provided by MyEtherWallet.</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/metamask.webp') }}" /></div>
<div class="content">
<h3>MetaMask</h3>
<p>Build a browser extension wallet that enables seamless integration with decentralized applications (dApps), modeled after MetaMask’s efficient functionality.</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/coinbase.webp') }}" /></div>
<div class="content">
<h3>Coinbase</h3>
<p>Integrate secured custody and fiat currency management features inspired by Coinbase’s wallet to improve both security and user accessibility.</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" src="{{ asset('images/ethereum-token-development/icons/trust-wallet.png') }}" /></div>
<div class="content">
<h3>TrustWallet</h3>
<p>Craft a wallet with an integrated dApp browser for convenient interaction with decentralized applications, drawing inspiration from TrustWallet’s mobile-friendly design.</p>
</div>
</li>
</ul>
</div>
<hr>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="text-center cta_mine txt">
<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank" href="{{ url('consultation') }}" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>schedule a demo</span></a>
</div>
</div>
</section>
@include('static.crypto-coins', array(
   'title' => 'Expanding Horizons: Multi-Chain Support for ERC20 Tokens', 
   'desc' => 'Our ERC20 token development agency supports multiple blockchain networks beyond Ethereum, helping you reach broader users and prepare for business for the next decade.',
   'cta_1' => '',
   'cta_2' => ''
))
<section class="welcome-content">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
<h3 class="sec_tit underline text-center text-white">Cutting-Edge Technology Stack for Superior ERC20 Wallet Development</h3>
<p class="text-center text-white" style="font-size: 16px;">We select and utilize the latest technology stack to deliver exceptional stability and performance in our ERC20 token wallet development, ensuring top-notch results for your project.</p>
</div>
<div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<ul>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/react.webp') }}"></div><p class="white">React JS</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/angular.webp') }}"></div><p class="white">Angular JS</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/laravel.webp') }}"></div><p class="white">Laravel</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/php.png') }}"></div><p class="white">PHP</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/node-js_logo') }}.webp"></div><p class="white">Node JS</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/go-lang') }}.webp"></div><p class="white">Golang</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/sql.webp') }}"></div><p class="white">MySQL</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/postgresql.webp') }}"></div><p class="white">PostgreSQL</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/mongodb.webp') }}"></div><p class="white">MongoDB</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/ipfs.webp') }}"></div><p class="white">IPFS</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/filecoin.webp') }}"></div><p class="white">Filecoin</p></li>
<li><div class="icons"><img class="lazy" src="{{ asset('images/token-development/icons/pinata.webp') }}"></div><p class="white">Pinata</p></li>
</ul>
</div>
</div>
<div class="clearfix"></div>
<div class="text-center cta_mine txt">
<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank" href="{{ url('consultation') }}" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Connect with our experts</span></a></div>
</div>
</section>
<div class="common_spacing uniq_features ">
<div class="why-blockchain-sec">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="section-title text-center">
<h3 class="mb20">Excellence in ERC20 Token Wallet Development: Our Key Differentiators</h3>
<hr>
</div>
<div class="col-lg-6 text-center">
<img class="lazy" src="{{ asset('images/ethereum-token-development/ethereum.png') }}" alt="ERC 20 Token Wallet Development Company" title="ERC 20 Token Wallet Development Company" style="max-height: 200px;">
</div>
<div class="col-lg-6">
<p>We stand out as a top ERC20 token wallet development company by delivering tailored solutions that meet your unique business needs. Our expertise and global reach ensure exceptional results for your project.</p>
<div class="clearfix"></div>
<ul>
<li>Cost-effective services</li>
<li>Agile Approach</li>
<li>Deep Industry Experience</li>
<li>Dependable Team of Professionals</li>
<li>24/7 Support</li>
</ul>
</div>
</div>
</div>
</div>
</div>
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
.panel.panel-default:last-child(){
margin-bottom: 30px;
}
.accordion-heading{
padding: 5px;
}
@media  only screen and (max-width : 320px) {
a.collapsed {
/* line-height: 28px;*/
}
.accordion-heading em{
display: none;
}
span.machine {
line-height: 24px;
}
}
</style>
<div class="common_spacing gray_bg">
<div class="container">
<div class="section-top ">
<div class="section-header text-center ">
<h3 class="section-title mt20 underline">FAQ</h3> </div>
</div>
<div class="row">
<div class="col-sm-12 col-md-12">
<div class="faq-content">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class role="button" data-toggle="collapse" data-parent="#accordion" href="#faq1">
<span>What defines an ERC20 token?</span>
</a>
</h5> </div>
<div id="faq1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
<div class="panel-body">
    An ERC20 token is a digital asset created on the Ethereum blockchain, adhering to a universal set of rules that ensures it operates seamlessly with various Ethereum-based applications.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq2">
<span>How do I go about creating an ERC20 token?</span>
</a>
</h5> </div>
<div id="faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">
    To develop your own ERC20 token, you'll need to write and deploy a smart contract on the Ethereum blockchain that follows ERC20 standards, including specifying the token’s name, symbol, and total supply.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq3">
<span>Can I modify an ERC20 token after it has been launched?</span>
</a>
</h5> </div>
<div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
<div class="panel-body">
    Once an ERC20 token is deployed, its smart contract remains fixed. However, you can deploy a new version of the token with updated features and guide users to adopt the new version.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq4">
<span>Where should I deploy my ERC20 token?</span>
</a>
</h5> </div>
<div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
<div class="panel-body">You can launch your ERC20 token on either the Ethereum mainnet or testnet. Tools like Remix, Truffle, or Hardhat are useful for testing and deploying your smart contract.</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq5">
<span>How can I ensure my ERC20 token is compliant with its standard?</span>
</a>
</h5> </div>
<div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
<div class="panel-body">
    To confirm your ERC20 token meets the standard, review the smart contract code and use verification tools like Etherscan or seek out auditing services to ensure it adheres to the ERC20 guidelines.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq6">
<span>What is an ERC20 token wallet?</span>
</a>
</h5> </div>
<div id="faq6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
<div class="panel-body">
    An ERC20 token wallet is a digital tool designed to store, manage, and interact with ERC20 tokens on the Ethereum network.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq7">
<span>How do ERC20 token wallets function?</span>
</a>
</h5> </div>
<div id="faq7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
<div class="panel-body">
    These wallets secure your ERC20 tokens and allow for their transfer and management. They connect to the Ethereum blockchain to handle transactions and track balances.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq8">
<span>Can I use a regular Ethereum wallet to manage ERC20 tokens?</span>
</a>
</h5> </div>
<div id="faq8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
<div class="panel-body">
    Absolutely. Many standard Ethereum wallets, such as MetaMask or MyEtherWallet, support ERC20 tokens and enable you to handle both Ether and ERC20 tokens within the same interface.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq9">
<span>What’s involved in developing a wallet for ERC20 tokens?</span>
</a>
</h5> </div>
<div id="faq9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
<div class="panel-body">
    Creating an ERC20 token wallet involves integrating with the Ethereum network and ensuring compatibility with ERC20 smart contracts, often utilizing libraries like Web3.js or Ethers.js.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq10">
<span>Are ERC20 token wallets capable of handling multiple tokens?</span>
</a>
</h5> </div>
<div id="faq10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
<div class="panel-body">
    Yes, ERC20 token wallets can manage multiple tokens simultaneously, allowing you to interact with various ERC20 tokens through their respective smart contracts from a single wallet.
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<div class="modal-header">
<h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">&times;</span></h4> </div>
<div class="formdiv" style="display: inline-block; width: 100%;padding: 15px;">
<form class id="mailForms1" method="post" action>
<input type="hidden" value="Coinbase like Controlled Exchange" name="btc_value">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" id="name" name="name" required> </div>
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" name="email" id="email" required> </div>
<div class="form-group">
<label for="skype">Skype</label>
<input type="text" class="form-control" id="skype" name="skype" required> </div>
<div class="form-group">
<label>Phone</label>
<input id="phone21" name="phone_dummy" type="text" required oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" data-cf-modified-462497c96150cea112cb23c1->
<input type="hidden" name="phone" id="phone_newsletter" value>
<input type="hidden" name="url" id="url" value="/ethereum-token-development">
<input type="hidden" value="2607:5300:203:172e::" name="IP"> </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
<div class="form-group">
<label>Requirement</label>
<textarea placeholder="Write text here..." name="message" required></textarea>
</div>
<div class="form-group">
<input type="button" class="submit_send" value="send message"> </div>
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
<h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">&times;</span></h4> </div>
<div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
<form class id="mailForms2" method="post" action>
<input type="hidden" value="Leverage - Margin Trading" name="btc_value">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" id="name" name="name" required> </div>
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" name="email" id="email" required> </div>
<div class="form-group">
<label for="skype">Skype</label>
<input type="text" class="form-control" name="skype" id="skype"> </div>
<div class="form-group">
<label>Phone</label>
<input id="phone22" name="phone_dummy" type="text" required oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" data-cf-modified-462497c96150cea112cb23c1->
<input type="hidden" name="phone" id="phone_newsletter" value>
<input type="hidden" name="url" id="url" value="/ethereum-token-development">
<input type="hidden" value="2607:5300:203:172e::" name="IP"> </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
<div class="form-group">
<label>Requirement</label>
<textarea placeholder="Write text here..." name="message" required></textarea>
</div>
<div class="form-group">
<input type="button" class="submit_send" value="send message"> </div>
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
<h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">&times;</span></h4> </div>
<div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
<form class id="mailForms3" method="post" action>
<input type="hidden" value="Customised Binance Competitor" name="btc_value">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" id="name" name="name" required> </div>
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" name="email" id="email" required> </div>
<div class="form-group">
<label for="skype">Skype</label>
<input type="text" class="form-control" name="skype" id="skype"> </div>
<div class="form-group">
<label>Phone</label>
<input id="phone23" name="phone_dummy" type="text" required oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" data-cf-modified-462497c96150cea112cb23c1->
<input type="hidden" name="phone" id="phone_newsletter" value>
<input type="hidden" name="url" id="url" value="/ethereum-token-development">
<input type="hidden" value="2607:5300:203:172e::" name="IP"> </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
<div class="form-group">
<label>Requirement</label>
<textarea placeholder="Write text here..." name="message" required></textarea>
</div>
<div class="form-group">
<input type="button" class="submit_send" value="send message"> </div>
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
<h4 class="modal-title">View Product Demo <span type="button" data-dismiss="modal">&times;</span></h4> </div>
<div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
<form class id="mailForms3" method="post" action>
<input type="hidden" value="2 BTC" name="btc_value">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" id="name" name="name" required> </div>
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" name="email" id="email" required> </div>
<div class="form-group">
<label for="skype">Skype</label>
<input type="text" class="form-control" name="skype" id="skype"> </div>
<div class="form-group">
<label>Phone</label>
<input id="phone24" name="phone_dummy" type="text" required oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" data-cf-modified-462497c96150cea112cb23c1->
<input type="hidden" name="phone" id="phone_newsletter" value>
<input type="hidden" name="url" id="url" value="/ethereum-token-development">
<input type="hidden" value="2607:5300:203:172e::" name="IP"> </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
<div class="form-group">
<label>Requirement</label>
<textarea placeholder="Write text here..." name="message" required></textarea>
</div>
<div class="form-group">
<input type="button" class="submit_send" value="send message"> </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="js/jquery.min.js" type="462497c96150cea112cb23c1-text/javascript"></script>
<script type="462497c96150cea112cb23c1-text/javascript">
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
<script type="462497c96150cea112cb23c1-text/javascript">
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
<script src="js/vendor.js" type="462497c96150cea112cb23c1-text/javascript"></script>
<script src="js/plugins.js" type="462497c96150cea112cb23c1-text/javascript"></script>
<script src="js/main.js" type="462497c96150cea112cb23c1-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="462497c96150cea112cb23c1-text/javascript"></script>
<script type="462497c96150cea112cb23c1-text/javascript">
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
<script type="462497c96150cea112cb23c1-text/javascript">
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
<script type="462497c96150cea112cb23c1-text/javascript">
$('.view_pricing').click(function() {
    $('html, body').animate({
        scrollTop: $('#pricing-section').offset().top
    }, 2000);
});
</script>
<script type="462497c96150cea112cb23c1-text/javascript">
var url = window.location.href;
$('#url').val(url);
</script>
<script type="462497c96150cea112cb23c1-text/javascript">
$(".pricing-body").mCustomScrollbar({
    theme: "minimal"
});
</script>
<script type="462497c96150cea112cb23c1-text/javascript">
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
.header .menu-item{padding: 0 3px !important;}
li.menu-item.cnt_m ul.mega-submenu.normal-sub{right: auto;}
ul.mega-submenu.menu_desk li.has-subsubmenu{width: 33% !important;}
ul.mega-submenu.menu_desk h4{margin-top: 0;margin-bottom: 0;}
.header .menu-item .mega-submenu a {font-size: 13px !important;}
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
.pull-right-tow a{
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

.header-nabar-icon .pull-right a:hover{
color: #fff!important;
}
.header-nabar-icon .pull-right a, .header-nabar-icon .pull-right-tow a{color: #fff;}

@media  (max-width: 320px){
.header-nabar-icon .pull-right, .pull-right-tow {
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
@media  (max-width: 768px){
.header-nabar-icon .pull-right, .pull-right-tow {
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
background-image: -o-linear-gradient(135deg,#b621fe 0,#1fd1f9 74%) !important;
background-image: linear-gradient(315deg,#b621fe 0,#1fd1f9 74%) !important;
border-radius: 7px;
color: #fff;
}
.color-btn1{
border: none;
/*border-radius: 50px;*/
transition: 0.3s;
background: #f90cff;
background-image: 
linear-gradient(to right bottom,#f90cff,#e027ff,#c534ff,#a93eff,#8a44ff,#6560ff,#3c73ff,#0081ff,#009cff,#00b3ff,#00c6f5,#0cd7e8);
/* clip-path: polygon(0% 0%,90% 0,100% 30%,100% 100%,0 100%); */
animation: glow 1s infinite;
transition: 0.5s;
padding: 10px 25px;
color: #fff;
font-weight: 700;
margin: 0 auto;
font-size: 16px;
}
.color-btn1:focus,.color-btn1:hover{
    background-color: #47b475;
    transition: 0.5s;

}
.color-btn1 span:hover {
    transition: 0.3s;
    opacity: 1;
    font-weight: 700;
}
@media (min-width:320px) and (max-width:643px){
    .color-btn1{
       padding: 9px 16px!important;
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

<style type="text/css">.footer-wrap h6{color: #fff; font-size: 23px;} 
.footer-wrap h5 { margin: 10px 0; position: relative; text-transform: uppercase; padding-left: 10px; color: #fff; background: -webkit-linear-gradient( 77deg,#00bcd4 0%,#17cc81 100%); background: -ms-linear-gradient( 0deg,rgb(254,66,47) 0%,rgb(254,81,150) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;} .footer-wrap h5:after { content: ''; width: 3px; height: 90%; background: #47b475; display: inline-block; float: left; position: absolute; margin-top: 0; margin-right: 6px; left: 0; top: 1px;}</style>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="462497c96150cea112cb23c1-text/javascript" src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="462497c96150cea112cb23c1-text/javascript" src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5" media="screen">
<script type="462497c96150cea112cb23c1-text/javascript" src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="462497c96150cea112cb23c1-text/javascript">
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

<script type="462497c96150cea112cb23c1-text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 9464790;
;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script type="462497c96150cea112cb23c1-text/javascript">
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
height: auto; /* Specify a height */
width: 0; /* 0 width - change this with JavaScript */
position: fixed; /* Stay in place */
z-index: 999999; /* Stay on top */
top: 27%;
left: 0;
background-color: transparent; /* Black*/
overflow-x: hidden; /* Disable horizontal scroll */
padding-top: 0px; /* Place content 60px from the top */
transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */

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
filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));
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
<script type="462497c96150cea112cb23c1-text/javascript">
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
.close-btn{position: fixed; left: 10px; bottom: 20px; z-index: 99; color: #fff !important; font-size: 16px; font-weight: bold; border-radius: 50%; border: 0; width: 30px; height: 30px; padding: 0; box-shadow: 1px 1px 11px -3px #999; display: none; transition: all 2s; background-color: #89002a;}
.fixed-social {position: fixed; bottom: 42px; padding: 0px 10px; background: linear-gradient(2deg, black, #868686, black); transition: all 2s; width: 150px; height: 25px; border-radius: 20px; box-shadow: 1px 1px 11px -3px #999; /*filter: drop-shadow(0 0 0.75rem crimson);*/ display: flex !important; flex-wrap: wrap; z-index: 99; justify-content: center;}
.hide {opacity:0; left:-100%;}
.show1 {opacity:1; left:50px;}
.fixed-social .items{margin: 0 auto;}
.fixed-social .items .icons{width: 55px; height: 55px; background: linear-gradient(45deg, black, transparent); padding: 5px; border-radius: 50%; margin: -17px 0; float: left;}
.fixed-social .items .icons i{padding: 9px; background: #00a7e7; border-radius: 50%; font-size: 26px; color: #fff;}
.fixed-social .items .text{padding-left: 60px; font-weight: bold; font-family: arial; font-size: 14px; color: #fff !important; line-height: 2.2em;}
.fixed-social .items a{text-decoration: none; outline: none; padding: 0; margin: 0;}
.fixed-social .items .icons img{width: 44px !important; height: 44px !important;}

@media only screen and (min-width: 1024px) and (max-width: 1200px) {
.show1 {left:20px;}
.close-btn{bottom: 60px;}
}

@media only screen and (min-width: 768px) and (max-width: 899px) {
.fixed-social {bottom: 80px;}  
.show1 {left:50px;}
.close-btn{bottom:60px; z-index: 999;}
}

@media only screen and (min-width: 320px) and (max-width: 767px) {
.fixed-social .items .text{display: none;}   
.fixed-social {bottom: 80px; }  
.show1 {left:12%;} 
.fixed-social .items a{display: flex; justify-content: center;}
.close-btn{bottom:60px; z-index: 999;}
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




<script type="462497c96150cea112cb23c1-text/javascript">
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


<script type="462497c96150cea112cb23c1-text/javascript">  
$(".crypto-popup").click(function(e) {
    $('crypto-popup').addClass('fixedPosition full-width');
    $(".login-popup").addClass('show');
    e.stopPropagation();
});
</script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="462497c96150cea112cb23c1-|49" defer></script>

@endsection