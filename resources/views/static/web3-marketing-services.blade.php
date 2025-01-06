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
        background-image: url('{{ asset('images/lab/banner.webp') }}');
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
                                            <h1 itemprop="name">Top-Tier Web3 Marketing Agency</h1>
                                        </div>
                                        <p itemprop="text">Elevate your NFT venture with the expertise of a premier Web3 marketing agency. Expand your global reach and cultivate a dedicated customer base using cutting-edge promotional tactics. </p>

                                        <div class="cta_mine txt">
                                            <a href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px;">Request a Proposal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center"> <img class="magic"
                                src="{{ asset('images/web3-marketing-services/img-1.webp') }}" width="450" height="auto"
                                alt="Web3 Marketing Agency" title="Web3 Marketing Agency"> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Web3 Marketing Services: Propel Your Business into the Future!</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center mt20">In today’s rapidly evolving Web3 landscape, navigating the crowded marketplace and bridging knowledge gaps can be daunting. The rise of Web3 NFT marketing services addresses these challenges, helping businesses build their initial user base effectively. Our expertise in Web 3.0 marketing has catapulted numerous emerging enterprises to unprecedented success, earning us accolades as a leading authority in the field. </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="common_spacing">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12  section-title text-center">
                        <h2 class="text-center title-th sec_tit underline">Web3 Marketing Services We Provide:</h2>
                    </div>
                </div>
                <div class="choose-content-box mt20">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/community-marketing.png') }}"> </div>
                                <div class="choose-para text-center">
                                    <h3>Community Engagement</h3>
                                    <p class="text-justify"> Harness the power of vibrant Web communities to elevate your brand. Our strategies utilize platforms like Telegram, deploying diverse tactics to amplify your business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/influencer.png') }}"> </div>
                                <div class="choose-para text-center">
                                    <h3>Influencer Partnerships</h3>
                                    <p class="text-justify">Accelerate engagement with our tailored influencer marketing approach. We collaborate with top NFT influencers to champion your brand and drive significant interaction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/pr-media.png') }}"> </div>
                                <div class="choose-para text-center">
                                    <h3>Public Relations</h3>
                                    <p class="text-justify">Our team of expert PR professionals will elevate your Web venture on a global scale, leveraging press and social media to boost visibility and credibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/seo.png') }}"> </div>
                                <div class="choose-para text-center">
                                    <h3>Search Engine Optimization</h3>
                                    <p class="text-justify">Our SEO strategies position your web pages at the forefront of search engine results, enhancing your business’s online presence and discoverability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/content-marketing.png') }}"> </div>
                                <div class="choose-para text-center">
                                    <h3>Content Management</h3>
                                    <p class="text-justify">Our content management services drive your Web advertising efforts through rich and engaging blog posts, showcasing your venture’s expertise.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/social-media.png') }}"> </div>
                                <div class="choose-para text-center">
                                    <h3>Social Media Promotion</h3>
                                    <p class="text-justify"> Our experts excel in leveraging social media platforms, creating impactful content that attracts and retains followers, boosting your brand's reach.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/video-marketing.png') }}"> </div>
                                <div class="choose-para text-center">
                                    <h3>Video Production</h3>
                                    <p class="text-justify">We craft compelling and educational videos that enhance public awareness and firmly establish your Web3 brand in the market.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/discord.webp') }}"> </div>
                                <div class="choose-para text-center">
                                    <h3>Discord Management</h3>
                                    <p class="text-justify">Our adept Discord marketers will strategically manage and engage your community servers, ensuring ongoing relevance and interaction with your audience.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="choose-wrapper">
                                <div class="wrappwer-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/forum-marketing.png') }}"> </div>
                                <div class="choose-para text-center">
                                    <h3>Forum Marketing</h3>
                                    <p class="text-justify">We deploy strategic posts on forums like Quora and CryptoTalk, capturing the attention of the Web3 community with targeted, bite-sized content.</p>
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
                    <h3 class="sec_tit underline mb20 text-center" style="width: 100%">Mastering Cutting-Edge Blockchain Marketing Campaigns</h3>
                </div>
                <div class="row mt-30">
                    <p>As Web 3.0 continues to evolve with daily innovations, distinguishing between traditional and Web3 digital marketing strategies is crucial. While they may appear similar, effectively educating the masses about Web3 presents unique challenges. Our Web3 marketing tactics are designed to propel ventures into formidable brands through unconventional and highly effective strategies. Our expertise in market analysis allows us to craft targeted marketing campaigns that achieve exceptional global results.</p>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy" src="{{ asset('images/web-3-marketing/icons/p2e.png') }}">
                            </div>
                            <h4>Play-to-Earn (P2E) Game Marketing</h4>
                            <p>We excel in promoting play-to-earn NFT games using dynamic methods that generate buzz and excitement within the gaming community. Partnering with prominent Web3 gaming influencers, we drive engagement through social media NFT airdrops, giveaways, and captivating videos tailored for gamers.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/web-3-marketing/icons/metaverse.png') }}"> </div>
                            <h4>Metaverse Marketing </h4>
                            <p>Our specialists help emerging metaverse projects navigate the competitive Web3 landscape. Utilizing a range of promotional tools, including influencers, social media networks, press releases, and community advertising on platforms like Discord, Telegram, Reddit, and Clubhouse, we ensure effective exposure and engagement.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy" src="{{ asset('images/web-3-marketing/icons/defi.webp') }}">
                            </div>
                            <h4>DeFi Marketing</h4>
                            <p>With extensive experience in marketing decentralized finance ventures, we expertly promote platforms focused on staking, lending, borrowing, flash loans, crowdfunding, and yield farming. Our robust Web3 strategies are designed to build a substantial user base and drive significant growth.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy" src="{{ asset('images/web-3-marketing/icons/nft.webp') }}">
                            </div>
                            <h4>NFT Marketing</h4>
                            <p>Our team of innovative advertising professionals excels in promoting NFTs from creators and niche businesses. We implement strategic, custom-built campaigns to highlight the uniqueness of each project, ensuring strong visibility within the NFT community.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/web-3-marketing/icons/nft-marketing.webp') }}"> </div>
                            <h4>NFT Marketplace Marketing</h4>
                            <p>We offer tailored marketing strategies for NFT marketplaces, focusing on your specific niche and target audience. By establishing official groups and engaging with interest-based forums on platforms like Discord, Telegram, and Reddit, we build and expand your user community.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/web-3-marketing/icons/crypto.png') }}"> </div>
                            <h4>Crypto Exchange Marketing</h4>
                            <p>Navigating the complexities of advertising crypto exchanges is our specialty. We utilize community-building strategies, social media, SEO-friendly content, and video marketing to create a buzz around your exchange. Our approach also includes leveraging influencers, mainstream media, and email campaigns for maximum impact.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/web-3-marketing/icons/cryptocurrency.png') }}"> </div>
                            <h4>Cryptocurrency Marketing</h4>
                            <p>Promoting cryptocurrencies in today’s market presents its own set of challenges. Our expert team employs a comprehensive range of tactics, including exchange listings, community engagement, AMA sessions, social media promotions, influencer partnerships, and video content, to effectively reach and attract investors.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="exp_function common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <h3 class="sec_tit underline text-center">Preparing Your Brand for the Web 3.0 Era</h3>
                    <p>Though Web3 might seem distant, its mainstream adoption is imminent. Prepare your brand to excel in this evolving space with these strategic approaches.</p>
                </div>
                <div class="row">

                    <div class="col-md-12 col-lg-6 col-sm-6 col-xs-12">
                        <ul class="f_point">
                            <li>
                                <div class="icon"><img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/up-to-date.webp') }}"></div>
                                <h4>Stay Ahead of Trends</h4>
                                <p>To thrive in the Web 3.0 landscape, ensure your firm remains at the forefront of the latest trends. Being current with innovations is a strategic advantage in Web 3.0 marketing.</p>
                            </li>
                            <li>
                                <div class="icon transaction"><img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/utility-nft.webp') }}"></div>
                                <h4>Leverage NFTs</h4>
                                <p>Integrate NFTs into your Web 3.0 strategy to boost brand visibility and loyalty. Use them creatively to offer exclusive experiences and elevate user engagement.</p>
                            </li>
                            <li>
                                <div class="icon address"><img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/social.webp') }}"></div>
                                <h4>Engage via Social Media</h4>
                                <p>While Web3 users value data sovereignty, social media remains a powerful tool for building and nurturing a lasting community. Leverage these platforms to forge strong connections.</p>
                            </li>
                            <li>
                                <div class="icon contract"><img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/humor.webp') }}"></div>
                                <h4>Infuse Humor</h4>
                                <p>Incorporate humor and memes into your marketing approach. They resonate deeply in the digital age and can significantly enhance your brand’s appeal and recognition.
                                </p>
                            </li>
                            <li>
                                <div class="icon contract"><img class="lazy"
                                        src="{{ asset('images/web-3-marketing/icons/kpi.webp') }}"></div>
                                <h4>Reevaluate Your KPIs</h4>
                                <p>Transitioning from Web2 to Web3 requires a reassessment of key performance indicators. Align your goals with Web3 dynamics to ensure they are relevant and achievable.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="ouaram_funtion_img"> <img class="lazy ig-sz"
                                src="{{ asset('images/web3-marketing-services/img-2.webp') }}" alt="Web3 Marketing Services"
                                title="Web3 Marketing Services"> </div>
                        {{-- <p class="text-justify">Although it seems that Web3 is far away, it might become mainstream
                            sooner than anticipated. Hence, it is important to prepare your brand for Web 3.0 marketing.
                            The following tactics can land you in a higher spot in the Web3 world.</p> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="service-section web-servic pad-tb">
            <div class="container">
                <div class="section-header underline text-center">
                    <h2 class="text-white title-th">How We Achieve Tangible Results Through Web3 Marketing</h2>
                </div>
                <div class="row upset link-hover shape-num justify-content-center">
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img class="lazy"
                                    src="{{ asset('images/web-3-marketing/icons/build.webp') }}" alt=""></div>
                            <h4>Analyze and Strategize</h4>
                            <p> We begin by evaluating your current Web3 marketing efforts and gathering your insights. Our comprehensive analysis identifies key improvements to drive success.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img src="{{ asset('images/web-3-marketing/icons/roadmap.png') }}"
                                    class="lazy" alt=""></div>
                            <h4>Develop the Strategy</h4>
                            <p>Guided by data-driven insights, we craft a precise roadmap for your marketing campaign. Our approach is rooted in meticulous research and tailored to achieve impactful results. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img src="{{ asset('images/web-3-marketing/icons/tactics.png') }}"
                                    class="lazy" alt=""></div>
                            <h4>Implement Tactics </h4>
                            <p> Our experts execute the strategy with precision, ensuring your brand receives optimal promotion. Each tactic is seamlessly integrated to enhance your campaign’s effectiveness.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s"
                        style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <div class="box4 mb0"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img src="{{ asset('images/web-3-marketing/icons/time.png') }}" alt=""
                                    class="lazy"></div>
                            <h4>Evolve Continuously </h4>
                            <p>Committed to delivering superior outcomes, we constantly refine and test our strategies. Our dedication to innovation ensures that your Web3 marketing campaigns evolve and improve over time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('static.web3-clients', array(
            'title' => "Renowned <span style='color:#47b475;'>Web3 Clients</span> <br> Elevated to Prominence",
            'desc' => "As a leading authority in Web3 marketing, we deliver unparalleled services designed to elevate projects and reach target audiences through an array of advanced strategies. This commitment has positioned us alongside top Web3 enterprises, where we have consistently achieved outstanding results."
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

        <div class="common_spacing uniq_features gray_bg">
            <div class="why-blockchain-sec">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
                            <h2 class="common_h3 sec-tit underline text-center font-wei" style="font-size: 25px;">Why Select Us as Your Premier Web3 Marketing Agency</h2>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-md-12 pull-left">
                            <img class="lazy" src="{{ asset('images/web3-marketing-services/img-3.webp') }}"
                                alt="Web3 Marketing Company" title="Web3 Marketing Company">
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-md-12 pull-right">
                            <ul>
                                <li>We specialize in crafting bespoke Web3 marketing strategies tailored to your unique business needs. Our expertise in multi-channel marketing establishes us as a global leader in the domain.
                                </li>
                                <li>Our team excels at building enduring communities around your brand, employing a diverse toolkit and innovative techniques to engage and grow your Web3 audience. </li>
                                <li>We blend organic and paid advertising to rapidly build your Web3 business's reputation, ensuring swift recognition and credibility.</li>
                                <li>Our professionals are adept at generating high-quality leads that drive significant sales growth through meticulously executed, customized Web3 marketing solutions.</li>
                                <li>With a track record of pioneering successful Web3 campaigns, we develop marketing plans aligned with your specific business goals and target requirements.</li>
                                <li>We prioritize high-ROI promotions, utilizing real-time engagement and lead monitoring systems to strategize effectively and drive success.</li>
                                <li>Our approach is data-driven, leveraging comprehensive analytics to guide our marketing tactics and capitalize on emerging trends in the Web3 landscape.
                                </li>
                            </ul>
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
                        <h2>Get Ahead in Web3: Schedule Your Expert Consultation Today!</h2>
                    </div>
                </div>
                <div class="row mt10">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="mt10 text-center para">Unlock the potential of your business with our premier Web3 marketing services. Our experts possess profound insights into driving success in the Web3 realm. Contact us today to secure a consultation with a leading Web3 advertising strategist!</p>
                    </div>
                </div>
                <div class="text-center cta_mine mt20 txt">
                    <a href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn"
                        style="border-radius: 30px!important;"><span>Connect with Our Experts Now</span></a>
                </div>
            </div>
        </div>

        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => 'What is the cost of Web3 marketing services?',
                    'ans' => "The cost of Web3 marketing varies based on the scope and complexity of your campaign. Factors like the range of services, duration, and targeted strategies will influence the overall expense. Contact us for a customized quote tailored to your specific needs."
                ],
                [
                    'ques' => 'Why should I choose your agency for Web3 marketing and advertising?',
                    'ans' => "Our agency offers specialized expertise in Web3 marketing with a proven track record of success. We deliver customized strategies that align with your business goals, leveraging the latest innovations to maximize your impact in the Web3 space."
                ],
                [
                    'ques' => 'How does your agency differ from other Web3 marketing firms?',
                    'ans' => "We stand out through our deep industry knowledge, cutting-edge strategies, and commitment to personalized service. Our approach is data-driven and results-oriented, ensuring we meet your unique needs and exceed expectations."
                ],
                [
                    'ques' => 'What impact will Web3.0 have on search marketing?',
                    'ans' => "Web3.0 is poised to revolutionize search marketing by emphasizing decentralized and user-controlled data. It will shift focus towards personalized, privacy-respecting marketing tactics, making traditional methods evolve to stay relevant."
                ],
                [
                    'ques' => 'Can you provide examples of Web3.0 technologies?',
                    'ans' => "Examples of Web3.0 technologies include decentralized applications (dApps), blockchain-based smart contracts, and non-fungible tokens (NFTs). These innovations drive the evolution of the internet towards greater decentralization and user autonomy."
                ],
            ],
        ])

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