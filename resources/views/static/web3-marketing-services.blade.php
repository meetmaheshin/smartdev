@extends('layouts.static')
    @section('title', 'Web3 Marketing Services')
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
        background-image: url(images/lab/banner.webp);
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
        background-color: rgb(0 0 0 / 70%);
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
    }

    .banner_content .contentall {
        margin-top: 140px;
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
        font-size: 34px;
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

        .add_feat.exch_lev.common_spacing:after {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .banner_content .contentall {
            margin-top: 30px;
            text-align: center;
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)));
        }

        .banner {
            height: 591px !important;
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

        .sec_tit,
        .sec_tit h2 {
            font-size: 20px !important;
        }

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
            display: block !important;
            padding: 10px 25px !important;
        }

        .txt {
            padding: 5px 20px;
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
        width: 100%;
        /*margin-top: 80px;*/
    }

    .title-th {
        font-weight: 700;
    }

    @media screen and (max-width:768px) {
        .team {
            margin-top: 30px !important;
        }
    }

    @media screen and (max-width:425px) {
        .cyz {
            width: 100%;
        }
    }

    .choose-wrapper {
        background: #f2f2f2;
        border-radius: 10px;
        margin-bottom: 20px;
        padding: 20px;
        min-height: 383px !important;
    }

    .choose-wrapper:hover {
        background: #47b775;
        color: #fff;
    }

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
        height: 65px;
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
        margin-top: 10px;
    }

    .service-section {
        background: #fff;
        position: relative;
        overflow: hidden;
    }

    .service-section:before {
        content: "";
        background: url(images/lab/dot-shape.webp) #47b47599;
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
        padding: 50px 20px 10px;
        margin: 0;
        min-height: 385px;
        margin-bottom: 10px;
        position: relative;
        border: 1px solid #91d2ac;
        border-radius: 8px;
        box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    }

    .s-card-icon {
        width: 80px;
        margin: 0 auto 30px;
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
        max-width: 280px;
        width: 100%;
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
        }
    }

    @media (max-width: 500px) {
        .cta_mine {
            width: 100%;
            display: block;
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
            margin-bottom: 15px !important;
            display: inline-block;
            margin-right: 26px !important;
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

    .work-process {
        background: #f2f2f2;
        min-height: 320px;
    }

    #Workflow .work-process::after {
        content: "";
        position: absolute;
        background: #f1f3f5;
        left: 0px;
        top: 0px;
        width: 0px;
        height: 100%;
        transition: all 0.3s;
        z-index: -1;
    }

    #Workflow .work-process:hover::after {
        background: rgb(233 248 255 / 22%);
        width: 100%;
        height: 100%;
        z-index: -1;
        border-radius: 10px;
    }

    #Workflow .work-process:hover::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        background-image: url(images/decentralized-autonomous-organization/green-shape.webp);
        background-position: top;
        background-size: contain;
        background-repeat: no-repeat;
        height: 200px;
        width: 200px;
        z-index: -1;
        opacity: 0.2;
        transition: all 0.5s;
    }

    #Workflow .work-process {
        background-color: #fff;
        padding: 15px;
        position: relative;
        z-index: 1;
        transition: 0.5s;
        margin-bottom: 30px;
        border: 1px solid #1fb6c43b;
        text-align: center;
        border-left: 2px solid #47b475;
        border-bottom: 2px solid #47b475;
        border-start-start-radius: 20px;
        border-end-end-radius: 20px;
        box-shadow: -3px 3px 0px 2px rgb(71 180 117 / 42%);
    }

    .work-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto !important;
        border-left: 2px dotted #47b475;
        border-bottom: 2px dotted #47b475;
        border-start-start-radius: 20px;
        border-end-end-radius: 20px;
        box-shadow: 3px -2px 0px 2px rgb(71 180 117 / 42%);
    }

    #Workflow .work-process img {
        margin-top: 10px;
        font-size: 40px;
        text-align: center;
    }

    #Workflow .work-process h4 {
        font-size: 20px;
        padding: 15px 0px;
        color: #000000;
        font-weight: 700;
    }

    #Workflow .work-process p {
        color: #000000;
    }

    .exp_function {
        background: #ffffff;
    }

    ul.f_point {
        position: relative;
        padding: 0px;
        padding-left: 80px;
        margin-top: 15px;
    }

    ul.f_point:before {
        content: "";
        position: absolute;
        width: 1px;
        height: 100%;
        background: #00cb99;
        left: 42px;
    }

    ul.f_point li {
        position: relative;
        padding-left: 25px;
        padding-bottom: 15px;
    }

    ul.f_point li:before {
        content: "";
        position: absolute;
        width: 15px;
        height: 15px;
        background: #00cf92;
        left: 0px;
        top: 11px;
        border-radius: 100%;
        border: 3px solid #fff;
    }

    ul.f_point li .icon {
        width: 55px;
        height: 55px;
        background: #00cf92;
        transform: rotate(45deg);
        position: absolute;
        left: -65px;
        top: 1px;
        padding-bottom: 48px;
    }

    ul.f_point li .icon:before {
        content: "";
        position: absolute;
        width: 20px;
        height: 2px;
        background: #00cf92;
        transform: rotate(-45deg) translateX(48px);
        top: 29px;
    }

    ul.f_point li .icon img {
        width: 40px;
        height: 40px;
        margin-top: 12px;
        margin-left: 10px;
        transform: rotate(-45deg) translate(0px, -2px);
        padding: 4px;
        filter: brightness(0) invert(1);
    }

    ul.f_point h4 {
        font-size: 18px;
        color: #000;
        text-shadow: 0px 0px;
    }

    .ig-sz {
        /*height: 460px;*/
        width: 100%;
    }

    @media screen and (max-width:768px) {
        .ig-sz {
            height: auto;
            width: 100%;
            margin-bottom: 20px;
        }
    }

    .add_feat.common_spacing.gray_bg.text-center {
        margin-top: -30px;
    }

    .add_feat.exch_lev.common_spacing:after {
        background-image: url(images/leverage/screen-6.webp);
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: right;
        content: '';
        width: 61%;
        height: 100%;
        position: absolute;
        right: -10%;
        top: 12px;
    }

    .add_feat.exch_lev.common_spacing {
        position: relative;
        overflow: hidden;
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
                        class="btn" data-cf-modified-cc0b3da23b0bde7b9e651c0b-="">Submit</button>
                </form>

                <div class="social">
                    <a rel="nofollow" rel="noopener" aria-label="Whatsapp" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calendar" aria-hidden="true"
                            title="Calendly"></i> Schedule A Meeting &nbsp;</a>

                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#fe97909891be9c92919d959d969f97909f8e8e989f9d8a918c87d09d9193"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>

            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
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
                                            <h1 itemprop="name">Best Web3 Marketing Agency</h1>
                                        </div>
                                        <p itemprop="text">Promote your NFT business with assistance from a classic Web3
                                            marketing agency. Reach the world and form a loyal customer base through
                                            various proven promotional strategies. </p>

                                        <div class="cta_mine txt">
                                            <a href="#newsletter-form-sec" class="nec-btn" id="cyz"
                                                style="border-radius: 30px;">Request Proposal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center"> <img class="magic"
                                src="images/web3-marketing-services/img-1.webp" width="450" height="auto"
                                alt="Web3 Marketing Agency" title="Web3 Marketing Agency"> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Web3 Marketing Services: Empower Your Business for the New
                        Era!</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center mt20">Today, the world has been adapting to Web3. And the process behind
                            it has not been a road full of roses. Two problems await a Web3 entrepreneur; Way too many
                            projects to compete with; Way too many people without the knowledge of Web3. Such challenges
                            have given rise to Web3 NFT marketing services. These ensure a business garners its initial
                            user base without hurdles. Blockchain App Factory has been aiding Web3 businesses through
                            its marketing services. Our Web 3.0 marketing services have helped many humble enterprises
                            rise to phenomenal heights. Many industry experts have certified us as the best Web 3.0
                            marketing agency. </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="common_spacing">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12  section-title text-center">
                        <h2 class="text-center title-th sec_tit underline">Web3 Marketing Services We Offer:</h2>
                    </div>
                </div>
                <div class="choose-content-box mt20">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        data-src="images/web-3-marketing/icons/community-marketing.webp"> </div>
                                <div class="choose-para text-center">
                                    <h3>Community Marketing</h3>
                                    <p class="text-justify"> One of our successful Web3 marketing tactics is to reach
                                        the thriving Web3 communities. We can popularize your business through platforms
                                        like Telegram using different tactics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        data-src="images/web-3-marketing/icons/influencer-marketing.webp"> </div>
                                <div class="choose-para text-center">
                                    <h3>Influencer Marketing</h3>
                                    <p class="text-justify">Our Web3 influencer marketing helps you earn high
                                        engagements within a short time. We have partnered with leading NFT influencers
                                        who can promote your brand wholeheartedly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        data-src="images/web-3-marketing/icons/public.webp"> </div>
                                <div class="choose-para text-center">
                                    <h3>Public Relations</h3>
                                    <p class="text-justify">Our Web 3.0 marketing agency comprises expert PR
                                        professionals by your side. They can advertise your Web3 venture through press
                                        and social media globally.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        data-src="images/web-3-marketing/icons/seo.webp"> </div>
                                <div class="choose-para text-center">
                                    <h3>Search Engine Optimization</h3>
                                    <p class="text-justify">Search Engine Optimization has been one of our best Web3
                                        marketing tactics. Our professionals can place your business’s web pages in the
                                        upper ranks of search engines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        data-src="images/web-3-marketing/icons/content.webp"> </div>
                                <div class="choose-para text-center">
                                    <h3>Content Management</h3>
                                    <p class="text-justify"> Content management has been a landmark in our Web3
                                        advertising and digital marketing services. We can promote your venture through
                                        various types of blogs with enriched content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        data-src="images/web-3-marketing/icons/social-media.webp"> </div>
                                <div class="choose-para text-center">
                                    <h3>Social Media Marketing</h3>
                                    <p class="text-justify"> Our Web3 advertising experts excel in promoting on social
                                        media through various means. We create insightful and informative content which
                                        can earn followers for your business.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        data-src="images/web-3-marketing/icons/video.webp"> </div>
                                <div class="choose-para text-center">
                                    <h3>Video Marketing</h3>
                                    <p class="text-justify">We specialize in creating insightful and informative videos
                                        that promote your Web3 business to increase awareness among the general public
                                        and stamp your Web3 brand’s name.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        data-src="images/web-3-marketing/icons/discord.webp"> </div>
                                <div class="choose-para text-center">
                                    <h3>Discord Marketing</h3>
                                    <p class="text-justify">Our skilled Discord marketers can help you maintain your
                                        community servers diplomatically and regularly engage with your community
                                        members to ensure that your venture stays relevant.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        data-src="images/web-3-marketing/icons/forum-marketing.webp"> </div>
                                <div class="choose-para text-center">
                                    <h3>Forum Marketing</h3>
                                    <p class="text-justify">Our creative minds can advertise your Web3 business on
                                        forums such as Quora and CryptoTalk through bit-sized posts to garner the
                                        attention of the Web3 community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="Workflow" class="common_spacing">
            <div class="container">
                <div class="row">
                    <h3 class="sec_tit underline mb20 text-center">We Specialize in Efficient Blockchain Marketing
                        Campaigns</h3>
                </div>
                <div class="row mt-30">
                    <p>Web 3.0 marketing is still an evolving domain as there are innovations every day. People often
                        confuse conventional and Web3 digital marketing as the strategies look the same. But, bringing
                        knowledge to the masses unaware of Web3 has been challenging. Our Web3 marketing tactics help
                        ventures to grow massively to form themselves as brands. Our strategies involve unconventional
                        strategies which most businesses might not be aware of. Yet, we have tasted huge success with
                        them and continue to be so. Our market analysis helps us frame suitable strategies for our
                        clients’ marketing campaigns. Such planning makes us excellent blockchain marketing campaigns
                        across the world.</p>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy" data-src="images/web-3-marketing/icons/p2e.webp">
                            </div>
                            <h4>P2E Game Marketing</h4>
                            <p>We promote play-to-earn NFT game platforms through various proven methods that instill
                                excitement and hype among the gamer community. We partner with famous Web3 gaming
                                influencers to ensure that your P2E game reaches heights through social media-based NFT
                                airdrops and giveaways, along with videos that amuse the Web3 gamer community.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    data-src="images/web-3-marketing/icons/metaverse.webp"> </div>
                            <h4>Metaverse Marketing </h4>
                            <p> Our marketing professionals assist aspiring metaverse projects to advertise themselves
                                in the competitive Web3 business ecosystem. We employ promotional tools, such as
                                influencers, social media networks, press releases, community adverts (including
                                Discord, Telegram, Reddit, and Clubhouse), discussion forums, and other metaverse
                                worlds.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy" data-src="images/web-3-marketing/icons/defi.webp">
                            </div>
                            <h4>DeFi Marketing</h4>
                            <p>Marketing ventures based on decentralized financial operations have been our expertise
                                for quite some time as we have promoted platforms based on staking, lending and
                                borrowing, flash loaning, crowdfunding, and yield farming. We use well-known Web3
                                marketing strategies in full swing to ensure that your venture gains a formidable user
                                base.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy" data-src="images/web-3-marketing/icons/nft.webp">
                            </div>
                            <h4>NFT Marketing</h4>
                            <p>We master marketing NFTs from creators and niche businesses through our exciting team of
                                creative advertising professionals. Our marketing wing promotes NFT collections using
                                strategical campaigns that are custom-built for every project to ensure that the
                                project’s uniqueness is well-understood by the NFT niche community.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    data-src="images/web-3-marketing/icons/nft-marketing.webp"> </div>
                            <h4>NFT Marketplace Marketing</h4>
                            <p> Our experts can promote your NFT marketplace platform to the intended audience using
                                tailor-made advertising plans based on your business niche and target audience. We help
                                to build your user community by creating official groups and spreading the word on
                                interest-based forums on applications like Discord, Telegram, and Reddit.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    data-src="images/web-3-marketing/icons/crypto.webp"> </div>
                            <h4>Cryptocurrency Marketing </h4>
                            <p>Promoting cryptocurrencies in the current market might look challenging, but our experts
                                have solutions to reach the crypto community through thoroughly-planned tactics. We use
                                tactics such as exchange listing, community building, AMA sessions, social media
                                promotions, influencers, and video creation, among others, to reach investors.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    data-src="images/web-3-marketing/icons/cryptocurrency.webp"> </div>
                            <h4>Crypto Exchange Marketing</h4>
                            <p><a href="https://www.blockchainappfactory.com/cryptocurrency-exchange-marketing"
                                    target="_blank"><b>Advertising crypto exchanges</b></a> can sound daunting, but our
                                professionals can make it easy for you to reach the masses with proven strategies. We
                                use community building, social media, SEO-friendly blogging, and videos to create buzz
                                around your venture. Influencers, mainstream press, and emails can also be used by us to
                                market your business.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="exp_function common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <h3 class="sec_tit underline text-center">Preparing Your Brand for Web 3.0 Marketing</h3>
                </div>
                <div class="row">

                    <div class="col-md-12 col-lg-6 col-sm-6 col-xs-12">
                        <ul class="f_point">
                            <li>
                                <div class="icon"><img class="lazy"
                                        data-src="images/web-3-marketing/icons/up-to-date.webp"></div>
                                <h4>Be Up-to-Date</h4>
                                <p>As a firm, you should be up-to-date with the latest Web3 trends. Staying updated can
                                    be a great Web 3.0 marketing strategy as innovations arrive.</p>
                            </li>
                            <li>
                                <div class="icon transaction"><img class="lazy"
                                        data-src="images/web-3-marketing/icons/utility-nft.webp"></div>
                                <h4>Utilize NFTs</h4>
                                <p> You should also use NFTs as a Web3 marketing strategy in different ways. They help
                                    increase brand awareness and loyalty and give exclusive experiences to users. </p>
                            </li>
                            <li>
                                <div class="icon address"><img class="lazy"
                                        data-src="images/web-3-marketing/icons/social.webp"></div>
                                <h4>Connect Through Social Media </h4>
                                <p> Although Web3 users will have control over their data, which needs user-based
                                    marketing. Social media platforms will help in building a community that will stay
                                    forever. </p>
                            </li>
                            <li>
                                <div class="icon contract"><img class="lazy"
                                        data-src="images/web-3-marketing/icons/humor.webp"></div>
                                <h4>Add that Tinge of Humor</h4>
                                <p> Memes represent today’s digital social world, and Web3 marketing cannot escape the
                                    norm. Promote your venture using humorous memes, and your brand value will shoot up.
                                </p>
                            </li>
                            <li>
                                <div class="icon contract"><img class="lazy"
                                        data-src="images/web-3-marketing/icons/kpi.webp"></div>
                                <h4>Rethink Your KPIs</h4>
                                <p>Restructuring key performance indicators is applicable when you switch from Web2 to
                                    Web3. You should plan accordingly so that your Web3 business goals are set
                                    correctly. </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="ouaram_funtion_img"> <img class="lazy ig-sz"
                                data-src="images/web3-marketing-services/img-2.webp" alt="Web3 Marketing Services"
                                title="Web3 Marketing Services"> </div>
                        <p class="text-justify">Although it seems that Web3 is far away, it might become mainstream
                            sooner than anticipated. Hence, it is important to prepare your brand for Web 3.0 marketing.
                            The following tactics can land you in a higher spot in the Web3 world.</p>
                    </div>

                </div>
            </div>
        </section>
        <section class="service-section web-servic pad-tb">
            <div class="container">
                <div class="section-header underline text-center">
                    <h2 class="text-white title-th">How do we drive measurable results through web3 marketing?</h2>
                </div>
                <div class="row upset link-hover shape-num justify-content-center">
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img class="lazy"
                                    data-src="images/web-3-marketing/icons/build.webp" alt=""></div>
                            <h4>Analyze and Build</h4>
                            <p> We first start with your inputs and existing Web3 marketing tactics in place. We analyze
                                them and report on the findings and improvements required for success.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img data-src="images/web-3-marketing/icons/roadmap.webp"
                                    class="lazy" alt=""></div>
                            <h4>Frame the Roadmap</h4>
                            <p>We believe in working based on data-based results in our Web3 marketing services. We form
                                the roadmap for your marketing campaign based on detailed research. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img data-src="images/web-3-marketing/icons/tactics.webp"
                                    class="lazy" alt=""></div>
                            <h4>Execute Tactics </h4>
                            <p> Our experts work to ensure that all strategies are employed based on the roadmap. We
                                ensure that your brand will be promoted smoothly through our tactics.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s"
                        style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <div class="box4 mb0"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img data-src="images/web-3-marketing/icons/time.webp" alt=""
                                    class="lazy"></div>
                            <h4>Improve with Time </h4>
                            <p>As a Web 3.0 marketing firm, we want to give the best results. Our team always improves
                                and tests strategies to create better marketing campaigns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-features package_includes" style="background: #fff !important;">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <div class="sec_tit mb20">
                            <h2 class="section-title underline mb20" style="color:#000;">Esteemed<span
                                    style="color:#47b475;"> Web3 Clients</span> <br>We Propelled to Popularity</h2>
                        </div>
                        <p class="" style="color:#000; font-size:1.2rem !important; text-align: center;">
                            As a reputed Web3 marketing agency, we strive to offer the best-in-class services to promote
                            projects<br> to the intended audience using a plethora of strategies. Such an approach has
                            led us to work with <br>top Web3 businesses, and we have generated fabulous results for
                            them.</p>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="Package_list" style="background:#c0fcd9; "> <img class="lazy"
                                data-src="images/marketing-clients/sui-1.webp" alt=""><span></span> </div>
                        <div class="Package_list" style="background:#c0fcd9;"> <img class="lazy"
                                data-src="images/marketing-clients/ton-1.webp" alt=""><span></span> </div>
                        <div class="Package_list" style="background:#c0fcd9;"> <img class="lazy"
                                data-src="images/marketing-clients/apots-1.webp" alt=""><span></span> </div>
                        <div class="Package_list" style="background:#c0fcd9;"> <img class="lazy"
                                data-src="images/marketing-clients/sandbox-1.webp" alt=""><span></span> </div>
                        <div class="Package_list" style="background:#c0fcd9;"> <img class="lazy"
                                data-src="images/marketing-clients/coindcx-1.webp" alt=""><span></span> </div>
                        <div class="Package_list" style="background:#c0fcd9;"> <img class="lazy"
                                data-src="images/marketing-clients/coinswitch-1.webp" alt=""><span></span> </div>

                    </div>
                </div>
            </div>
        </section>

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

        <div id="packages" class="common_spacing" style="padding:40px 0px;">
            <div class="container">
                <div class="row">




                    <div class="pricingTable-header">
                        <h2 class="sec_tit underline text-center">We Provide Specialized KOL Marketing Packages</h2>
                    </div>

                    <div class="container-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                            <div class="pricingTable purple">
                                <div class="price-value"> Starter <span>$10,000/Month</span></div>
                                <ul class="pricing-content">
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> KOL Content
                                        Strategy & Amplification</li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>KOL
                                            Collaborations:</b> <br>
                                        Partner with 3-5 micro-KOLs </li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion
                                            Platform:</b> <br>
                                        <b>- Twitter:</b> 3 KOLs will tweet promoting your brand/product<br>
                                        <b>- Telegram:</b> 5+ posts in channels/groups. <br>
                                        <b>- YouTube:</b> 1 KOL video.
                                    </li>

                                </ul>
                                <div class="pricingTable-signup">
                                    <a rel="nofollow"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"
                                        style="font-size: 18px;" href="#newsletter-form-sec">Buy Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                            <div class="pricingTable purple">
                                <div class="price-value"> Growth <span>$30,000/Month</span></div>
                                <ul class="pricing-content">
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> KOL Content
                                        Strategy & Amplification</li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>KOL
                                            Collaborations:</b> <br>
                                        Partner with 5-10 mid-tier KOLs </li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion
                                            Platform:</b> <br>
                                        <b>- Twitter:</b> 5 KOLs will tweet promoting your brand/product <br>
                                        <b>- Telegram:</b> 15+ posts in channels/groups. <br>
                                        <b>- YouTube:</b> 2 KOL videos.
                                    </li>

                                </ul>
                                <div class="pricingTable-signup">
                                    <a rel="nofollow"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"
                                        style="font-size: 18px;" href="#newsletter-form-sec">Buy Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                            <div class="pricingTable purple">
                                <div class="price-value"> Elite <span>$50,000/One-time</span></div>
                                <ul class="pricing-content">
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> KOL Content
                                        Strategy & Amplification</li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>KOL
                                            Collaborations:</b> <br>
                                        Partner with 5-10 mid-tier and top-tier KOLs </li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion
                                            Platform:</b><br>
                                        <b>- Twitter:</b> 10 KOLs will tweet promoting your brand/product.<br>
                                        <b>- Telegram:</b> 30+ posts in channels/groups. <br>
                                        <b>- YouTube:</b> 3 KOL videos. Instagram: 2 KOL posts.<br>
                                        <b>- Instagram:</b> 5+ KOLs Post.
                                    </li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Additional
                                            Services:</b><br>
                                        <b>- Giveaway or Contest:</b> Organized by KOLs. <br>
                                        <b>- Twitter Spaces:</b> At least 2 Twitter Spaces with KOLs to discuss your
                                        brand and engage with the audience.
                                    </li>
                                </ul>
                                <div class="pricingTable-signup">
                                    <a rel="nofollow"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"
                                        style="font-size: 18px;" href="#newsletter-form-sec">Buy Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                            <div class="pricingTable purple">
                                <div class="price-value"> Supreme Influence Suite <span>$100,000/One-time</span></div>
                                <ul class="pricing-content">
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> KOL Content
                                        Strategy & Amplification</li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>KOL
                                            Collaborations:</b> <br>
                                        Partner with 10-30 mix of micro, macro, and top-tier KOLs </li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion
                                            Platform:</b><br>
                                        <b>- Twitter:</b> 15 KOLs will tweet promoting your brand/product.<br>
                                        <b>- Telegram:</b> 50+ posts in channels/groups.<br>
                                        <b>- YouTube:</b> 5+ KOL videos. Instagram: 5 KOL posts.<br>
                                        <b>- Instagram:</b> 10+ KOLs Post.
                                    </li>
                                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Additional
                                            Services:</b><br>
                                        <b>- Giveaway or Contest:</b> Organized by KOLs. <br>
                                        <b>- Hashtag Campaign:</b> To increase brand visibility. <br>
                                        <b>- Twitter Spaces:</b> At least 3 Twitter Spaces with KOLs to discuss your
                                        brand and engage with the audience.
                                    </li>
                                </ul>
                                <div class="pricingTable-signup">
                                    <a rel="nofollow"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"
                                        style="font-size: 18px;" href="#newsletter-form-sec">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="common_spacing uniq_features gray_bg">
            <div class="why-blockchain-sec">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
                            <h2 class="common_h3 sec-tit underline text-center font-wei" style="font-size: 25px;">Why
                                choose Blockchain App Factory As Your Web3 Marketing Agency</h2>
                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-12 col-md-12 pull-right">


                            <ul>
                                <li>We concentrate on building tailored Web3 marketing strategies to fit your business
                                    needs. Our ability to market on multiple channels makes us a domain leader globally.
                                </li>
                                <li>Our experts can forge loyal communities around your brand that stays for long. They
                                    use various tools and tactics to garner people around your Web3 brand. </li>
                                <li>We also use a combination of organic and paid advertising in our marketing
                                    campaigns. This helps your Web3 business in earning reputation quickly among the
                                    masses.</li>
                                <li>Our professionals assist your business with generating quality leads that can shoot
                                    up sales. We do so through customized Web3 marketing solutions executed to utmost
                                    perfection.</li>
                                <li>You need not fear since our experts have pioneered Web3 marketing campaigns. We can
                                    build your marketing plan based on the target requirements of your business.</li>
                                <li>Our marketing professionals focus on high-ROI promotions to make our client
                                    businesses successful. We use systems that monitor engagement and leads in real-time
                                    to plan ahead.</li>
                                <li>Our Web3 marketing tactics are based on concrete results supported by necessary
                                    data. We thrive on using statistics to focus on the current trends in marketing.
                                </li>


                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-md-12 pull-left">
                            <img class="lazy" data-src="images/web3-marketing-services/img-3.webp"
                                alt="Web3 Marketing Company" title="Web3 Marketing Company">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style type="text/css">
            .po-img img {
                position: absolute;
                top: -107px;
                width: auto;
                height: 553px;
                margin: 0 auto;
                left: 100px;
            }

            @media screen and (max-width: 991px) {
                .po-img {
                    display: none;
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

            .flip-box .flip-tit {
                color: #161515;
                font-weight: 700;
            }

            .flip-box:hover {
                background: #47b475;
            }

            .flip-box:hover .flip-tit {
                color: #ffffff;
            }

            .flip-box:hover .flip-txt {
                color: #ffffff;
            }

            /*img{
    width: 100%;
    height: auto;
}*/
            .work-icon img {
                width: 65px;
                height: 65px;
            }

            .s-card-icon img {
                width: 65px;
                height: 65px;
            }
        </style>

        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit">
                        <h2>Book a consultation with a web3 advertising expert!</h2>
                    </div>
                </div>
                <div class="row mt10">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="mt10 text-center para">We offer various Web 3.0 marketing services for our global
                            clients. Our experts have a concrete understanding of what it takes to make businesses
                            successful. Reach out now to book a consultation with a Web3 advertising expert! </p>
                    </div>
                </div>
                <div class="text-center cta_mine mt20 txt">
                    <a href="#newsletter-form-sec"
                        class="nectar-button medium regular accent-color regular-button nec-btn"
                        style="border-radius: 30px!important;"><span>Talk with our Experts</span></a>
                </div>
            </div>
        </div>

        <div class="common_spacing gray_bg">
            <div class="container">
                <div class="section-top ">
                    <div class="section-header text-center ">
                        <h3 class="section-title mt20 underline">FAQ</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="faq-content">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a class="" role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#faq1"><span>How much does Web 3 marketing cost?</span></a>
                                        </h4>
                                    </div>
                                    <div id="faq1" class="panel-collapse collapse in" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="panel-body">The cost of Web 3.0 marketing depends on the strategies
                                            required for your brand. Prices vary with tactics and tools employed
                                            throughout your marketing campaign.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#faq2"><span>Why should I choose
                                                    Blockchain App Factory for your Web3 marketing and
                                                    advertising?</span></a>
                                        </h4>
                                    </div>
                                    <div id="faq2" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">You should choose Blockchain App Factory for our
                                            expertise in Web3 marketing and advertising expertise. We have a creative
                                            team of marketers who can cater to your needs.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#faq3"><span>What makes Blockchain App
                                                    Factory different from other Web3 marketing agencies?
                                                </span></a>
                                        </h4>
                                    </div>
                                    <div id="faq3" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">Our Web3 marketing agency has been outstanding with its
                                            experimental approaches to promotions. We advertise our client businesses to
                                            their target audience through perfectly tailored strategies.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#faq4"><span>How will Web 3.0 affect
                                                    search marketing?</span></a>
                                        </h4>
                                    </div>
                                    <div id="faq4" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">Web 3.0 will affect search marketing as users own their
                                            data. Such degrees of decentralization necessitate the need for interactive
                                            and personalized ads without manipulations.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#faq5"><span>What are examples of Web
                                                    3.0?</span></a>
                                        </h4>
                                    </div>
                                    <div id="faq5" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">Although Web 3.0 is emerging, we have already seen
                                            applications making rapid strides. Bitcoin (Cryptocurrency), OpenSea (NFT
                                            marketplace), Coinbase (Crypto exchange), and Aave (DeFi protocol) are some
                                            examples.</div>
                                    </div>
                                </div>
                                <!-- <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq6"><span></span></a>
                                        </h4> </div>
                                <div id="faq6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body"> </div>
                                </div>
                            </div> -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style type="text/css">
        .formdiv .form-left .form-group:last-child {
            margin-bottom: 0
        }

        .common_newsletter .form-right textarea {
            height: 240px
        }

        .form-right input.common_send_btn {
            width: 100% !important;
            margin: 0 !important;
            display: inline-block !important;
            background: #140050 !important;
            color: #fff !important;
            border: 0 !important;
            text-transform: uppercase !important;
            font-weight: 700 !important;
            padding: 10px 0 !important
        }

        body input.common_send_btn.my_send {
            margin-top: 41px !important
        }

        .timeline-center::before {
            background: #f2f2f2
        }

        .thumb {
            position: relative
        }

        .photo,
        .play {
            position: absolute;
            width: 40px;
            height: 28px;
            left: 45%;
            top: 40%
        }

        .thumb:hover .photo,
        .thumb:hover .play {
            background-position: 0 -252px
        }

        .play {
            -webkit-animation: 1s ease-in-out infinite breathing;
            animation: 1s ease-in-out infinite breathing;
            -webkit-font-smoothing: antialiased;
            background: url(images/play.webp) 0 -252px no-repeat
        }

        .contact-inner-1 {
            padding-top: 70px;
            padding-bottom: 100px
        }

        @-webkit-keyframes breathing {

            0%,
            60% {
                -webkit-transform: scale(1.5);
                transform: scale(1.5)
            }

            25% {
                -webkit-transform: scale(2);
                transform: scale(2)
            }

            100% {
                -webkit-transform: scale(1.45);
                transform: scale(1.45)
            }
        }

        @keyframes breathing {

            0%,
            60% {
                -webkit-transform: scale(1.5);
                transform: scale(1.5)
            }

            25% {
                -webkit-transform: scale(2);
                transform: scale(2)
            }

            100% {
                -webkit-transform: scale(1.45);
                transform: scale(1.45)
            }
        }

        @media (max-width:991px) {
            .height_row {
                margin-top: 10px
            }
        }

        @media (max-width:767px) {
            .formdiv .form-left .form-group:last-child {
                margin-bottom: 15px
            }

            .stats {
                min-height: 140px
            }
        }
    </style>
    <!-- <script src="js/owl.carousel.js"></script> -->
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
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
    <script src="js/vendor.js" type="cc0b3da23b0bde7b9e651c0b-text/javascript"></script>
    <script src="js/plugins-reduced.js" type="cc0b3da23b0bde7b9e651c0b-text/javascript"></script>
    <script src="build/js/intlTelInput.js" type="cc0b3da23b0bde7b9e651c0b-text/javascript"></script>
    <!-- <script>
        $('.owl-carouseltwo').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script> -->
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
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

    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
        +function($){"use strict";var backdrop=".dropdown-backdrop";var Dropdownhover=function(element,options){this.options=options;this.$element=$(element);var that=this;this.dropdowns=this.$element.hasClass("dropdown-toggle")?this.$element.parent().find(".dropdown-menu").parent(".dropdown"):this.$element.find(".dropdown");if(!options.onClick){this.dropdowns.each(function(){$(this).on("mouseenter.bs.dropdownhover",function(e){that.show($(this).children("a, button"))})});this.dropdowns.each(function(){$(this).on("mouseleave.bs.dropdownhover",function(e){that.hide($(this).children("a, button"))})})}else{this.dropdowns.each(function(){$(this).children("a, button").on("click.bs.dropdownhover",function(e){var isActive=$(this).parent().hasClass("open");isActive?that.hide($(this)):that.show($(this))})})}};Dropdownhover.TRANSITION_DURATION=300;Dropdownhover.DELAY=150;Dropdownhover.TIMEOUT;Dropdownhover.DEFAULTS={onClick:false,animations:["fadeInDown","fadeInRight","fadeInUp","fadeInLeft"]};function getParent($this){var selector=$this.attr("data-target");if(!selector){selector=$this.attr("href");selector=selector&&/#[A-Za-z]/.test(selector)&&selector.replace(/.*(?=#[^\s]*$)/,"")}var $parent=selector&&$(document).find(selector);return $parent&&$parent.length?$parent:$this.parent()}function clearMenus(e){if(e&&e.which===3)return;$(backdrop).remove();$('[data-hover="dropdown"]').each(function(){var $this=$(this);var $parent=getParent($this);var relatedTarget={relatedTarget:this};if(!$parent.hasClass("open"))return;if(e&&e.type=="click"&&/input|textarea/i.test(e.target.tagName)&&$.contains($parent[0],e.target))return;$parent.trigger(e=$.Event("hide.bs.dropdownhover",relatedTarget));if(e.isDefaultPrevented())return;$this.attr("aria-expanded","false");$parent.removeClass("open").trigger($.Event("hidden.bs.dropdownhover",relatedTarget))})}Dropdownhover.prototype.show=function(_dropdownLink){var $this=$(_dropdownLink);window.clearTimeout(Dropdownhover.TIMEOUT);$(".dropdown").not($this.parents()).each(function(){$(this).removeClass("open")});var effect=this.options.animations[0];if($this.is(".disabled, :disabled"))return;var $parent=$this.parent();var isActive=$parent.hasClass("open");if(!isActive){if("ontouchstart"in document.documentElement&&!$parent.closest(".navbar-nav").length){$(document.createElement("div")).addClass("dropdown-backdrop").insertAfter($(this)).on("click",clearMenus)}var $dropdown=$this.next(".dropdown-menu");$parent.addClass("open");$this.attr("aria-expanded",true);$parent.siblings().each(function(){if(!$(this).hasClass("open")){$(this).find('[data-hover="dropdown"]').attr("aria-expanded",false)}});var side=this.position($dropdown);switch(side){case"top":effect=this.options.animations[2];break;case"right":effect=this.options.animations[3];break;case"left":effect=this.options.animations[1];break;default:effect=this.options.animations[0];break}$dropdown.addClass("animated "+effect);var transition=$.support.transition&&$dropdown.hasClass("animated");transition?$dropdown.one("bsTransitionEnd",function(){$dropdown.removeClass("animated "+effect)}).emulateTransitionEnd(Dropdownhover.TRANSITION_DURATION):$dropdown.removeClass("animated "+effect)}return false};Dropdownhover.prototype.hide=function(_dropdownLink){var that=this;var $this=$(_dropdownLink);var $parent=$this.parent();var $this_delay=$this.data("dropdown-hover-delay");Dropdownhover.TIMEOUT=window.setTimeout(function(){$parent.removeClass("open");$this.attr("aria-expanded",false)},$this_delay?$this_delay:Dropdownhover.DELAY)};Dropdownhover.prototype.position=function(dropdown){var win=$(window);dropdown.css({bottom:"",left:"",top:"",right:""}).removeClass("dropdownhover-top");var viewport={top:win.scrollTop(),left:win.scrollLeft()};viewport.right=viewport.left+win.width();viewport.bottom=viewport.top+win.height();var bounds=dropdown.offset();bounds.right=bounds.left+dropdown.outerWidth();bounds.bottom=bounds.top+dropdown.outerHeight();var position=dropdown.position();position.right=bounds.left+dropdown.outerWidth();position.bottom=bounds.top+dropdown.outerHeight();var side="";var isSubnow=dropdown.parents(".dropdown-menu").length;if(isSubnow){if(position.left<0){side="left";dropdown.removeClass("dropdownhover-right").addClass("dropdownhover-left")}else{side="right";dropdown.addClass("dropdownhover-right").removeClass("dropdownhover-left")}if(bounds.left<viewport.left){side="right";dropdown.css({left:"100%",right:"auto"}).addClass("dropdownhover-right").removeClass("dropdownhover-left")}else if(bounds.right>viewport.right){side="left";dropdown.css({left:"auto",right:"100%"}).removeClass("dropdownhover-right").addClass("dropdownhover-left")}if(bounds.bottom>viewport.bottom){dropdown.css({bottom:"auto",top:-(bounds.bottom-viewport.bottom)})}else if(bounds.top<viewport.top){dropdown.css({bottom:-(viewport.top-bounds.top),top:"auto"})}}else{var parentLi=dropdown.parent(".dropdown");var pBounds=parentLi.offset();pBounds.right=pBounds.left+parentLi.outerWidth();pBounds.bottom=pBounds.top+parentLi.outerHeight();if(bounds.right>viewport.right){dropdown.css({left:-(bounds.right-viewport.right),right:"auto"})}if(bounds.bottom>viewport.bottom&&pBounds.top-viewport.top>viewport.bottom-pBounds.bottom||dropdown.position().top<0){side="top";dropdown.css({bottom:"100%",top:"auto"}).addClass("dropdownhover-top").removeClass("dropdownhover-bottom")}else{side="bottom";dropdown.addClass("dropdownhover-bottom")}}return side};function Plugin(option){return this.each(function(){var $this=$(this);var data=$this.data("bs.dropdownhover");var settings=$this.data();if($this.data("animations")!==undefined&&$this.data("animations")!==null)settings.animations=$.isArray(settings.animations)?settings.animations:settings.animations.split(" ");var options=$.extend({},Dropdownhover.DEFAULTS,settings,typeof option=="object"&&option);if(!data)$this.data("bs.dropdownhover",data=new Dropdownhover(this,options))})}var old=$.fn.dropdownhover;$.fn.dropdownhover=Plugin;$.fn.dropdownhover.Constructor=Dropdownhover;$.fn.dropdownhover.noConflict=function(){$.fn.dropdownhover=old;return this};$(document).ready(function(){$('[data-hover="dropdown"]').each(function(){var $target=$(this);if("ontouchstart"in document.documentElement){Plugin.call($target,$.extend({},$target.data(),{onClick:true}))}else{Plugin.call($target,$target.data())}})})}(jQuery);
     
    </script>

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

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript"
        src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
        media="screen">
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
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




    <!-- Side Panel - End -->
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
        window.__lc = window.__lc || {};
    window.__lc.license = 9464790;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
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

    <!-- Side Panel - Start -->
    <!-- <div id="mySidepanel4" class="sidepanel4">
  <a href="" class="closebtn1" onclick="closeNav4()">&times;</a>
    <a href="https://www.blockchainappfactory.com/offer" id="halloween-offer"> <img src="https://www.blockchainappfactory.com/images/offer/newyear-image-10.png" style="max-width: 240px !important; "></a> 
</div>

<button class="openbtn1" onclick="openNav4()" style="max-width:60px; border:0; border-radius: 50%; left: 20px; padding: 0; margin:0; box-shadow: none; filter: none; background: none; position: fixed; top: 50%; z-index: 1;" > <img src="https://www.blockchainappfactory.com/images/offer/new-year.gif" > </button> -->


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

    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
        /* Set the width of the sidebar to 250px (show it) */
function openNav4() {
  document.getElementById("mySidepanel4").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav4() {
  document.getElementById("mySidepanel4").style.width = "0";
}
    </script>

    <!-- Side Icon - Start -->
    <!-- <style type="text/css">
    .social-icons{position: fixed; bottom: 20%; left: 15px; z-index: 100000; width: 50px; height: 50px; /*box-shadow: -3px -6px 16px 0px rgb(253 253 253 / 69%), 9px 5px 14px 0px rgb(0 0 0 / 15%);*/ border-radius: 50px; padding: 5px 0 0 12px;}
    .social-icons ul{margin: 0; padding: 0;}
    .social-icons ul li{margin: 5px 0; width: 40px; height: 40px; background-color: #4caf50; border-radius: 50%; text-align: center; line-height: 22px;}
    .social-icons ul li:after {position: absolute; content: ""; height: calc(100% + 16px); width: calc(100% + 16px); top: -8px; left: -8px; border-radius: 50%; border: 3px solid #4caf50 !important; animation: 1.5s linear 0s normal none infinite focuse;}
    .social-icons ul li i{color: #fff; font-size: 26px; text-align: center; line-height: 40px;}
@keyframes  focuse {
  0% {
    transform: scale(0.8);
    opacity: 1; }
  75% {
    transform: scale(1.2);
    opacity: 0; }
  100% {
    transform: scale(1.2);
    opacity: 0; } }
</style>
<div class="social-icons">
<ul>
<li style="margin-bottom:20px; position:relative; background: #07b7f6;">
<a href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="blank" style="position: relative; z-index: 999999;">
<img src="images/appointment.webp"> 
</a>
</li>
<li style="margin-bottom:20px; position:relative;">
<a href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="blank" style="position: relative; z-index: 999999;">
<i class="fa fa-whatsapp"></i> 
</a>
</li>
</ul>
</div> -->
    <!-- Side Icon - End -->




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

    <button id="btn" class="close-btn">x</button>

    <div id="box">
        <div id="fixed-social" class="fixed-social hide">
            <!-- <div class="items">
        <a rel="nofollow" href="https://api.whatsapp.com/send?l=en&amp;text=Hi!%20I%27m%20interested%20in%20one%20of%20your%20products%20at%20BLOCKCHAIN%20APP%20FACTORY&amp;phone= " target="blank">
            <div class="icons"><img src="https://www.blockchainappfactory.com/images/whatsapp.webp" style="border-radius: 50%;"></div>
        </a>
    </div> -->

            <!-- <div class="items">
        <a href=" " target="blank">
            <div class="icons"><img src="img/mail.webp"></div>
        </a>
    </div> -->

            <!-- <div class="items"> 
        <a rel="nofollow" href="mailto:info@blockchainappfactory.com" target="blank">
            <div class="icons"><i class="fa fa-envelope"></i></div>
        </a>
    </div> -->

            <div class="items">
                <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    target="blank">
                    <div class="icons"><img src="https://www.blockchainappfactory.com/images/appointment.webp"></div>
                    <!-- <div class="text">Free 15-Minute Consultation</div> -->
                </a>
            </div>

            <div class="items">
                <a rel="nofollow" href="https://t.me/amarbaf" target="blank">
                    <div class="icons"><i class="fa fa-paper-plane"></i></div>
                    <!-- <div class="text">Free 15-Minute Consultation</div> -->
                </a>
            </div>

            <!-- <div class="items"> 
        <a href="https://www.blockchainappfactory.com/offer" target="blank">
            <div class="icons openbtn1" onclick="openNav4()"><img src="https://www.blockchainappfactory.com/images/offer/new-year.gif"></div>
        </a>
    </div> -->
        </div>

    </div>

    <!-- <div id="mySidepanel4" class="sidepanel4">
  <a href="" class="closebtn1" onclick="closeNav4()">&times;</a>
    <a href="https://www.blockchainappfactory.com/offer" id="halloween-offer"> <img src="https://www.blockchainappfactory.com/images/offer/newyear-image-10.png" style="max-width: 240px !important; "></a> 
</div> -->


    <!-- xmas_box Start -->
    <!-- <div class="mob_not">
<div id="hideDiv">
<div class="alert xmas_box1 alert-primary alert-dismissible show">
    <div class="x_box"><a href="offer-zone"> <img src="img/black-friday.webp" style="max-width: 240px !important; margin-bottom: 10px; box-shadow: 5px 5px 11px -3px #999; border-radius: 15px;"></a></div>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
</div>
</div>

<style type="text/css">
    #hideDivs .alert.xmas_box1{background:none;bottom:60px;width:280;left:0px}#hideDivs{text-align:center;z-index:100;position:relative}#hideDiv{/*animation:fadeOut 0.5s forwards;*/animation-delay:5s;text-align:center;z-index:100;position:relative}@keyframes  fadeOut{from{opacity:1}to{opacity:0}}.xmas_box1{position:fixed;bottom:100px;/*width:100%;*/ border:none;border-radius:0px;z-index:1000;padding:0;margin:0;max-width:250px;left:0px;right:0;}.xmas_box1 p{margin:0px;color:#fff;max-width:990px;margin:0 auto;font-size:13px;line-height:20px;padding:10px;text-align:center}.xmas_box1.alert-dismissible .close{top:-15px;right:5px;position:absolute;color:#fff;opacity:1 !important;text-shadow:none;font-size:36px;z-index:100;padding:0px;border:none;border-radius:0px;height:30px;width:30px;background:red !important;border-radius:7px;line-height:0px}.xmas_box1.alert-dismissible .close:hover{background:#303030} 
    .alert-primary{background-color: transparent; border-color: transparent;}
   @media only screen and (min-width: 320px) and (max-width: 767px) { .xmas_box1{width: 260px;bottom: 180px; display:block !important;} }
   @media only screen and (min-width: 768px) and (max-width: 899px) { .xmas_box1{width: 260px;bottom: 180px; display:block !important;} }
   @media only screen and (min-width: 1024px) and (max-width: 1200px) { .xmas_box1{width: 260px;display:block !important;} } 
</style>  -->
    <!-- xmas_box End -->



    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
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

    <!-- SocialMedia Bottom - End -->


    <!-- Button Lightbox Script - Start -->
    <script type="cc0b3da23b0bde7b9e651c0b-text/javascript">
        $(".crypto-popup").click(function(e) {
        $('crypto-popup').addClass('fixedPosition full-width');
        $(".login-popup").addClass('show');
        e.stopPropagation();
    });
    </script>
    <!-- Button Lightbox Script - End -->

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="cc0b3da23b0bde7b9e651c0b-|49" defer></script>
</div>


@endsection