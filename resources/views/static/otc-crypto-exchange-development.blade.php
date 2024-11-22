@extends('layouts.static')
    @section('title', 'OTC Crypto Exchange Development')
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

    #cyz {
        background: #b11f6e !important;
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
        margin: 5px 0;
    }

    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        background: #b11f6e !important;
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
        /*background-image: url(images/lab/white-label-nft-marketplace-banner.webp);*/
        background: linear-gradient(140deg, #1429a3, #5569ff, #818cff);
        background-size: cover;
        padding-top: 85px;
        padding-bottom: 50px;
        height: auto;
        background-position: center;
    }

    #cyz,
    .nec-btn {
        background: linear-gradient(45deg, #333, #1429a3, #090f3b) !important;
        border-radius: 50px;
        box-shadow: 2px 2px black;
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

    .theme-color-bg {
        background: #23124c !important;
    }

    /*.banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0.95;
        background-color: rgb(0 0 0 / 70%);
    }*/

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
        font-size: 32px;
        text-shadow: 0px 2px 8px #000;
    }

    .contentall p {
        font-weight: normal;
        margin-bottom: 30px;
        /*line-height: 1.6;*/
        font-size: 16px;
        max-width: 800px;
        margin: 0 auto 30px;
        display: block;
        text-shadow: 0px 2px 8px #000;
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

        /*.banner-overlay {
            background: #000000ba;
        }*/
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
        color: #23124c;
        border: 2px solid #23124c;
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

    .data table td {
        padding: 10px;
    }

    /*.data table tr:nth-child(2){background: ;}*/

    .strategies-items p strong,
    .strategies-items1 p strong {
        margin-top: 5px;
        margin-bottom: 10px;
        padding-bottom: 10px;
        font-weight: 700;
        font-size: 23px;
        font-family: 'Open Sans', sans-serif;
        border-bottom: 1px solid #eee;
        background: linear-gradient(#23124c, #23124c);
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
            width: 80%;
            margin: 20px auto;
        }

        .ovr {
            width: 90%;
            margin: 0 auto;
        }

        .txt {
            padding: 5px 20px;
        }

        .sticky-form>a {
            top: 63vh !important;
        }

        .data table td,
        .data table th {
            padding: 15px;
        }

        .bg-dark-half-md {
            padding: 60px 0 !important;
        }

        .Package_list {
            width: 40% !important;
        }

        .box4 {
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
        max-width: 80%;
        margin-top: 30px;
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
    }

    .choose-wrapper:hover {
        background: linear-gradient(140deg, #402c67, #543d84, #543d84);
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
        box-shadow: 2px 4px #23124c;
        border: 3px solid #23124c;
    }

    .wrappwer-icon img {
        width: 65px;
        height: 65px;
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
        bottom: 5%;
        content: "";
        display: block;
        left: -5%;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
        opacity: .5;
    }

    .pre-ico-sec-1 .why-adit-list {
        width: 100%;
        background: #e0d3ff;
        border: 1px solid #eee;
        position: relative;
        padding: 7%;
        margin-bottom: 49px;
        /*min-height: 340px!important;*/
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
        height: 55px;
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
        background: linear-gradient(140deg, #402c67, #af95f8, #f6abf4);
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
        color: #23124c;
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
        border: 1px solid #23124c40;
        border-radius: 8px;
        box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    }

    .s-card-icon {
        width: 80px;
        margin: 0 auto 30px;
    }

    .s-card-icon img {
        width: 65px;
        height: 65px;
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
        position: relative;
        display: inline-block;
        background: #23124cad;
        padding: 30px 10px;
        width: 100%;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
        /*box-shadow: 0 .25rem 1.75rem rgba(30,34,40,.07)!important;*/
        box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    }

    .Package_list:after {
        content: "";
        position: absolute;
        bottom: 0;
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

    .Package_list h4,
    .Package_list h3 {
        display: block;
        font-size: 20px;
        font-weight: bold;
        margin-top: 12px;
        margin-bottom: 10px;
        color: #fff;
    }

    .product-features {
        background: linear-gradient(140deg, #402c67, #af95f8, #f6abf4);
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
        padding: 10px 100px;
    }

    #base {
        padding: 10px 50px;
    }

    .cor {
        background: #f9f9f9;
    }

    .bdr {
        border-top: none !important;
    }

    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        background: linear-gradient(45deg, #333, #1429a3, #090f3b) !important;
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
        /*min-height: 285px;*/
        border-top: 3px solid #1429a3;
    }

    .feature-box-3 .icon {
        color: #23124c;
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
        font-size: 18px !important;
        font-weight: 600;
        color: #23124c;
    }

    .bgg {
        background: linear-gradient(140deg, #402c67, #af95f8, #f6abf4);
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
        /*height: 400px;*/
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
        margin-top: 30px;
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
        max-width: 420px;
        flex-shrink: 0;
        height: 300px;
        border-radius: 20px;
        /*transform: translateX(-80px);*/
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
        width: 95%;
        /*height: 100%;*/
        /*object-fit: cover;*/
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
            height: auto;
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
        box-shadow: 0px 14px 80px #23124c6b;
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
        background: #23124c;
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

    .flip-icon {
        width: 40px;
        height: 35px;
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
        background: #23124c;
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
        background: #fff;
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
        color: #23124c;
        font-weight: 700;
    }

    a.internal_link:hover {
        color: #23124c !important;
        font-weight: 700;
    }

    .bg-dark-half-md {
        background: linear-gradient(140deg, #402c67, #af95f8, #f6abf4);
        width: 100%;
        display: inline-block;
        padding: 60px 0;
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

    .category-item h4,
    .category-item p {
        color: #fff;
    }

    .teck .category-grid-style-01 .category-item {
        padding: 30px;
        text-align: center;
        width: 16%;
        background: #ffffff94;
        margin-right: 2px;
        margin-bottom: 2px;
        position: relative;
        cursor: pointer;
    }

    /*.teck .category-grid-style-01 .category-item:before {
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
transition: all .3s ease-in-out;
}*/
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
        padding: 30px 0px;
        text-align: center;
    }

    .projectFactsWrap .item:nth-child(1) {
        background: #23124c;
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
        font-size: 30px;
        padding: 0;
        font-weight: bold;
        margin-bottom: 1rem;
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

    @media screen and (max-width:768px) {
        .teck .category-grid-style-01 .category-item {
            width: 50% !important
        }
    }

    /* AUTHOR LINK */

    .faq-content #accordion a[data-toggle=collapse]::before {
        background: #162ba5;
    }

    /*-- Technology --*/
    .technologies {
        background: linear-gradient(140deg, #1429a3, #5569ff, #818cff);
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

    .step-points li {
        display: grid;
        grid-template-columns: 60px auto;
        margin-bottom: 20px;
        align-items: center;
        border-radius: 7px;
        background: #818cff30
    }

    .step-points li span {
        width: 60px;
        height: 60px;
        background: #1429a3;
        border-radius: 7px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .step-points li span img {
        padding: 10px;
        filter: brightness(0) invert(1)
    }

    .step-points-content {
        margin-left: 15px
    }

    .step-points li h4 {
        color: #000;
        font-weight: 700;
        font-size: 17px;
        text-align: left;
    }

    .step-points li p {
        margin-bottom: 0;
        text-align: left;
        padding-right: 10px;
    }

    .step-points li span,
    .step-points-content {
        animation-name: fadeIn;
        animation-duration: 3s;
        animation-iteration-count: 1
    }

    @keyframes fadeIn {
        0% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }

    .step-points .fa {
        font-size: 30px;
        color: #fff;
    }

    /*-- Welcome Content --*/
    .welcome-content {
        background: #0d3881;
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
        border-right: 1px solid #eee;
    }

    .welcome-content ul li p {
        line-height: 20px;
        padding: 0px;
        margin: 0px;
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
    }



    /*------------ Tech Stack -----------*/
    .tech-stack {
        padding: 60px 0px;
    }

    .tech-stack ul {
        display: flex;
        padding: 10px;
        justify-content: center;
        background: #fff;
        margin-bottom: 10px;
    }

    .tech-stack .nav-stacked>li {
        background: #162ba5;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(140deg, #1429a3, #5569ff, #818cff);
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
        max-height: 60px;
        margin-bottom: 15px;
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
        margin-bottom: 0;
    }

    @media (min-width:320px) and (max-width: 767px) {
        .tech-stack ul img {
            width: 50%;
        }

        .tech-stack ul {
            flex-wrap: wrap;
        }

        .tech-stack ul li {
            width: 48%;
            text-align: center;
        }
    }

    @media (max-width: 320px) {
        .stats {
            font-size: 16px !important;
        }
    }

    @media (max-width: 767px) {
        .stats {
            min-height: 140px;
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
                        <div class="col-md-5 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1 itemprop="name">OTC Crypto Exchange Solutions</h1>
                                        </div>
                                        <p itemprop="text">Unleash the power of a cutting-edge Over-the-Counter crypto
                                            exchange with our seasoned experts. Our unparalleled OTC crypto exchange
                                            development delivers a robust platform tailored to your needs, earning
                                            global acclaim and driving extraordinary results.</p>
                                        <div class="txt">
                                            <a rel="nofollow" href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important;">Connect with Our Experts</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center"> <img class="magic"
                                src="{{ asset('images/otc-crypto-exchange-development/banner-img.webp') }}" width="100%"
                                height="100%" alt="OTC Crypto Exchange Development"
                                title="OTC Crypto Exchange Development"> </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            section#counter-stats {
                /* display: flex; */
                justify-content: center;
                margin-top: 0;
                padding: 0 !important;
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
                background: #4251f9;
            }

            #counter-stats .stats:nth-child(2) {
                background: #556aff;
            }

            #counter-stats .stats:nth-child(3) {
                background: #4251f9;
            }

            #counter-stats .stats:nth-child(4) {
                background: #556aff;
            }


            /* AUTHOR LINK */
        </style>
        <div class="common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Leading-Edge OTC Crypto Exchange Solutions from Industry
                        Trailblazers</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center">Revolutionize the decentralized cryptocurrency arena with our
                            cutting-edge OTC crypto exchange software. This platform removes intermediaries,
                            facilitating smooth and secure high-volume transactions between individuals and
                            institutions. With more than ten years of expertise in crafting OTC crypto exchange
                            solutions for clients worldwide, we deliver unparalleled skill and premier technology. As a
                            forward-thinking crypto entrepreneur, utilize our advanced tech stack to elevate your OTC
                            exchange’s capabilities without any trade-offs. Reach out to our specialists now to bring
                            your groundbreaking crypto business vision to life!</p>


                        <div class="clearfix"></div>
                        <div class="text-center mt20 cta_mine">
                            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank" href="{{ url('consultation') }}" data-color-override="false"
                                data-hover-color-override="false" data-hover-text-color-override="#fff"
                                style="border-radius: 30px !important;">
                                <span>Schedule a Consultation</span></a>
                            {{-- <a href="#" class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"><span>Read Our Success Stories</span></a> --}}
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Why Choose the Crypto OTC Trading Platform Development Model</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center">Over-the-counter (OTC) crypto trading has surged in popularity for its direct, automated connection between buyers and sellers, eliminating the need for intermediaries. Wondering why you should opt for OTC trading platform development for your business? Here are the compelling reasons:</p>


                        <div class="clearfix"></div>

                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <ul class="step-points">
                                <li> <span><i class="fa fa-random" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Top-Tier Crypto Exchange Framework</p>
                                    </div>
                                </li>
                                <li> <span><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Effortless High-Volume Trading</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <ul class="step-points">
                                <li> <span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Flexible and Scalable System Architecture</p>
                                    </div>
                                </li>
                                <li> <span><i class="fa fa-university" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Multiple Revenue Opportunities</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <ul class="step-points">
                                <li> <span><i class="fa fa-hourglass-start" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Direct, Intermediary-Free Transactions</p>
                                    </div>
                                </li>
                                <li> <span><i class="fa fa-wallet" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Integrated Multi-Crypto Wallet Support</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <ul class="step-points">
                                <li> <span><i class="fa fa-money" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Precision Pricing Control</p>
                                    </div>
                                </li>
                                <li> <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Customizable Trading Limits</p>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="common_spacing" style="padding: 0;">
            <div class="container"
                style="background: linear-gradient(140deg, #1429a3, #5569ff, #818cff); padding: 40px; border-radius: 10px;">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline text-white">Our Expertise in OTC Exchange Platform Development</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center text-white">With more than ten years of experience in advanced blockchain projects, we specialize in both custom and ready-made OTC trading applications. Our all-inclusive development process delivers solutions designed around your specific business needs. Whether you're a new startup or a well-established fintech company venturing into crypto, working with us for your OTC exchange app development is a key move towards exceptional success.</p>


                        <div class="clearfix"></div>
                        <div class="text-center mt20 cta_mine">
                            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"
                                href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
                                <span>Schedule a Meeting</span></a> --}}
                            <a href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"><span>Explore Our Success Stories</span></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <style>
            @media screen and (min-width: 320px) {
                .center-align ul li {
                    width: 100% !important;
                }
            }
        
            .center-align ul li:nth-child(1) {
                width: 100% !important;
            }
        
            @media screen and (max-width: 768px) {
                .center-align ul li {
                    width: 100% !important;
                }
            }
        </style>
        
        <section class="center-align" style="padding: 40px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <div class="section-title">
                                <h3 class="title text-center"> <span class="red-txt"><strong> Unmatched Advantages of Our OTC Crypto Exchange Software</strong></span></h3>
                                <hr>
                            </div>
                            <p class="text-center">Unlock the extraordinary potential of our cutting-edge OTC crypto exchange software, designed to deliver exceptional trading experiences with no intermediary barriers. Partner with our experts to create a powerful OTC trading platform and achieve unparalleled success.</p>
                            <div class="clearfix"></div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                            <ul style="background: #fff;">
                                <li>
                                    <ul>
                                        <li>Confidential Trading for Users</li>
                                        <li>Unmatched Liquidity for High-Volume Transactions</li>
                                        <li>Tailored Trading Solutions</li>
                                        <li>Advanced Security </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                            <ul style="background: #fff;">
                                <li>
                                    <ul>
                                        <li>Rapid Transaction Settlements</li>
                                        <li>Effortless Large Orders Process</li>
                                        <li>Flexible Revenue Approach</li>
                                        <li>Robust Technical Support</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="technologies">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center text-white">Elevate Your OTC Trading Software</h3>
                    <p class="text-center white">Take a cue from leading OTC crypto exchanges and launch a premier trading platform that will distinguish your business in the competitive crypto market.</p>
                    <ul>
                        <li>
                            <img class="lazy" src="{{ asset('images/otc-crypto-exchange-development/icons/coinbase.webp') }}">
                            <p class="white">Coinbase Prime</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/otc-crypto-exchange-development/icons/kraken.webp') }}">
                            <p class="white">Kraken</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/otc-crypto-exchange-development/icons/falconx.webp') }}">
                            <p class="white">FalconX</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/otc-crypto-exchange-development/icons/crypto.webp') }}">
                            <p class="white">Crypto.com</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/otc-crypto-exchange-development/icons/coindcx.webp') }}">
                            <p class="white">CoinDCX</p>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>


        <style>
            .featured-icon img {
                width: 70px;
                height: 70px;
                margin-bottom: 15px;
            }

            .featured-icon-box.style3 .featured-desc:after {
                position: absolute;
                content: '';
                width: 0;
                height: 0;
                border-bottom: 34px solid #1429a3;
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
                background-color: #1429a3;
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
                border-left: 2px solid #1429a3;
                transition: .1s all ease;
            }

            .featured-icon-box.style3 {
                position: relative;
                margin: 15px 0;
                background-color: #f2f2f2;
            }
        </style>
        <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <h2 class="sec_tit underline text-center" style="width: 100%">Signature Aspects of Our OTC Crypto Exchange Offerings</h2>
                </div>
                <p class="text-center">Empower your customers with unparalleled unique and advanced trading experiences through the advanced features provided by our expert OTC crypto exchange development team. We’ll ensure your platform stands out while unlocking diverse growth opportunities.</p>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/user.png') }}" alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>User Portal</h3>
                                    <div class="featured-desc">Deliver a seamless user experience with intuitive, easy-to-navigate interfaces that simplify interaction with your exchange.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="featured-icon-box  text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/admin-panel.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>Admin Portal</h3>
                                    <div class="featured-desc">Equip platform administrators with a powerful interface for efficient management of users, payments, and listing needs, offering extensive functionality and control.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/crypto-wallet.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>Integrated Crypto Wallet</h3>
                                    <div class="featured-desc">Enhance your OTC trading with a native wallet that enables users to securely store and trade multiple cryptocurrencies eliminating third-party intervention.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/price-tag.webp') }}" alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>Real-Time Crypto Prices</h3>
                                    <div class="featured-desc">Offer real-time cryptocurrency pricing on your OTC platform, empowering users with up-to-date information to make informed trading decisions.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/kyc.webp') }}" alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>KYC/AML Protocol</h3>
                                    <div class="featured-desc">Implement rigorous Know Your Customer (KYC) and Anti-Money Laundering (AML) protocols to maintain the highest standards of operational integrity and compliance.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/transactions.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>Global Transactions</h3>
                                    <div class="featured-desc">Facilitate seamless cross-border cryptocurrency transactions with minimal intermediary costs, leveraging specialized OTC provisions for instantaneous transfers.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/margin.webp') }}" alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>Price Margin Controls</h3>
                                    <div class="featured-desc">Empower users to customize price margins and slippage tolerance, ensuring they can acquire cryptocurrencies at their preferred rates.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/content.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>Dynamic Content Management</h3>
                                    <div class="featured-desc">Equip platform administrators with a versatile CMS, allowing for real-time updates to keep the site aligned with evolving market trends.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/multi-currency.webp') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>Flexible Currency Management</h3>
                                    <div class="featured-desc">Allow administrators to configure various fees within the OTC exchange and introduce new cryptocurrencies based on user needs and market scenarios.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                            <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                                <div class="featured-icon">
                                    <div
                                        class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                        <i class="flaticon flaticon-air-freight">
                                            <img class="lazy"
                                                src="{{ asset('images/otc-crypto-exchange-development/icons/support.png') }}"
                                                alt>
                                        </i> </div>
                                </div>
                                <div class="featured-content">
                                    <h3>Comprehensive Support Portal</h3>
                                    <div class="featured-desc">Provide a robust support system where users can submit inquiries via tickets, with resolutions handled efficiently by admins through various channels, enhancing overall satisfaction.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">
            @media screen and (min-width:320px) {
                .welcome-content ul li {
                    width: 80% !important;
                }
            }

            @media screen and (min-width:768px) {
                .welcome-content ul li {
                    width: 30% !important;
                }
            }
        </style>
        <section class="welcome-content" style="background: linear-gradient(140deg, #1429a3, #5569ff, #818cff);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                        <h2 class="sec_tit underline text-center text-white">Top-Tier Security Features of Our OTC Crypto Solutions</h2>
                        <p class="text-center text-white" style="font-size: 16px;">Harness our skills in deploying top-tier security measures for your OTC crypto trading platform, ensuring exceptional user trust and industry acclaim in an era of escalating cyber threats.</p>
                    </div>
                    <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/encrypted.webp') }}"></div>
                                <p class="white">State-of-the-Art Encryption</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/ssl.webp') }}"></div>
                                <p class="white">Robust SSL Protection</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/authentication.png') }}">
                                </div>
                                <p class="white">Comprehensive Multi-Factor Authentication</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/integration.png') }}"></div>
                                <p class="white">Secure API Integrations</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/security.png') }}"></div>
                                <p class="white">Device-Specific Security Measures</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/list_audit.webp') }}"></div>
                                <p class="white">Thoroughly Audited Smart Contracts</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/tokens.png') }}"></div>
                                <p class="white">Immutable Cryptocurrency Tokens</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/kyc.webp') }}"></div>
                                <p class="white">Rigorous KYC/AML Compliance</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img class="lazy" data-src="images/otc-crypto-exchange-development/img-1.webp" alt="" title="">
                    </div>
                </div>
            </div>
        </section>

        <div id="our_services" class="defisec gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <h3 class="common_h3 title-th sec_tit">Optimal Use Cases for Our OTC Crypto Trading Software</h3>
                    <hr>
                    <p>Curious about where to integrate over-the-counter cryptocurrency trading into your business? Discover how our OTC crypto trading software can be seamlessly deployed across a variety of sectors:</p>
                </div>
                <div class="grids">
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/otc-crypto-exchange-development/icons/commodity.webp') }}"
                                    alt="Commodities" class="lazy" width="45px;"> </div>
                            <h4 class="feature-title common_h4">Commodities</h4>
                            <p class="feature-desc mb0">Transform physical commodities into crypto and facilitate their trade through a sophisticated OTC desk.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature-box-3">
                            <div class="icon"><img src="{{ asset('images/otc-crypto-exchange-development/icons/p2p.png') }}"
                                    alt="P2P Trading" class="lazy" width="45px;"> </div>
                            <h4 class="feature-title common_h4">P2P Trading</h4>
                            <p class="feature-desc mb0">Empower direct, efficient exchanges of crypto assets between individuals using cutting-edge smart contracts.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/otc-crypto-exchange-development/icons/liquidity.webp') }}"
                                    alt="Liquidity" class="lazy" width="45px;"></div>
                            <h4 class="feature-title common_h4">Liquidity Enhancement</h4>
                            <p class="feature-desc mb0">Boost cryptocurrency liquidity swiftly with an OTC platform that enables direct sales.</p>
                        </div>
                    </div>
                    <div class="grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature-box-3">
                            <div class="icon"> <img
                                    src="{{ asset('images/otc-crypto-exchange-development/icons/e-commerce.png') }}"
                                    alt="E-commerce" class="lazy" width="45px;"></div>
                            <h4 class="feature-title common_h4">E-Commerce</h4>
                            <p class="feature-desc mb0">Integrate OTC trading features into e-commerce platforms to accelerate transaction processing.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center cta_mine mt40 txt"> 
                    {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>  --}}
                        <a href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Experts</span></a> 
                    </div>
            </div>
        </div>



        <style type="text/css">
            .awesome-features-wrapper {
                background: #162ba5;
                padding: 30px 15px;
                min-height: auto;
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
                background: #fff;
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

            .awesome-features-icon-img .fa {
                color: #47b475;
                font-size: 40px;
                margin-bottom: 15px;
            }

            .awesome-features-icon-img img {
                width: 60px;
                height: 60px;
                margin-bottom: 15px;
            }

            .awesome-features-text h4 {
                font-size: 22px;
                font-weight: 500;
                line-height: 1.3;
                margin-bottom: 18px;
            }

            .awesome-features-text p {
                margin-bottom: 0;
            }
        </style>
        <div class="common_spacing bg-dark-half-md"
            style="padding-bottom:40px; background: linear-gradient(140deg, #1429a3, #5569ff, #818cff);">
            <div class="container">
                <div class="section-title text-center">
                    <h3 class="common_h3 text-white" style="color:#fff;">The Value of Partnering with Our OTC Crypto Development Experts </h3>
                    <hr>
                    <p class="text-white">We are dedicated to delivering top-tier OTC crypto exchange solutions using cutting-edge solutions. As a leading OTC crypto exchange development firm, we expertly navigate the complexities to create tailored solutions that meet your specific needs.</p>
                </div>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                        style="width: 60px !important; height:60px !important;"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/team.png') }}"> </div>
                                <div class="awesome-features-text text-white">
                                    <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">
                                        Expert Development Team</h4>
                                        Build your OTC exchange with a team of seasoned blockchain developers who have a proven track record of delivering successful projects.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                        style="width: 60px !important; height:60px !important;"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/support.png') }}"> </div>
                                <div class="awesome-features-text text-white">
                                    <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">
                                        Comprehensive Support</h4>
                                        Benefit from our all-encompassing support—from initial concept to development and market launch—ensuring a smooth and successful introduction to the market.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"><img class="img-fuild lazy"
                                        style="width: 60px !important; height:60px !important;"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/fast-delivery.png') }}">
                                </div>
                                <div class="awesome-features-text text-white">
                                    <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">On-Time Delivery</h4>
                                    Receive your OTC crypto exchange within the agreed timeline, allowing you to capitalize on favorable market conditions without delays.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                        style="width: 60px !important; height:60px !important;"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/flexibility.png') }}"> </div>
                                <div class="awesome-features-text text-white">
                                    <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">
                                        Scalability and Flexibility</h4>
                                        Adapt and expand your crypto exchange platforms effortlessly to meet your business requirements and respond to changing market dynamics.
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                        style="width: 60px !important; height:60px !important;"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/application.png') }}"> </div>
                                <div class="awesome-features-text text-white">
                                    <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">
                                        Multi-Platform Compatibility</h4>
                                        Deploy a crypto exchange that performs flawlessly across all platforms, including browsers, desktops, and mobile devices, maintaining a superior user experience.
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                        style="width: 60px !important; height:60px !important;"
                                        src="{{ asset('images/otc-crypto-exchange-development/icons/ideation.png') }}"> </div>
                                <div class="awesome-features-text text-white">
                                    <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">
                                        Whitelabel Solution</h4>
                                        Accelerate your market entry with our Whitelabel OTC crypto exchange solutions, enabling you to launch your business within hours and seize current market opportunities.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <style type="text/css">
            .center-align ul li:nth-child(1) {
                width: 40%;
            }

            .center-align ul li:nth-child(2) {
                width: 60%;
            }

            .center-align {
                padding: 60px 0
            }

            .center-align ul {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                margin: 10px 0;
                border-radius: 10px;
                background: #f2f2f2;
            }

            .center-align ul li {
                display: flex;
                align-items: center;
                padding: 1.5%
            }

            .center-align ul li h5 {
                font-size: 24px;
                font-weight: 700;
                color: #e85b17
            }

            .center-align ul li p span {
                width: 40px;
                height: 40px;
                background: linear-gradient(#e88817, #e85b17);
                opacity: 1;
                font-size: 18px;
                display: inline-block;
                border-radius: 50%;
                color: #fff;
                text-align: center;
                line-height: 2.1em;
                margin-left: -70px;
                margin-right: 25px
            }

            .reverse {
                flex-direction: row-reverse
            }

            @media (min-width:320px) and (max-width:768px) {
                .center-align {
                    padding: 10px 0
                }

                .center-align ul li {
                    width: 100%;
                    margin: 5px 0;
                    padding: 7px
                }
            }

            .center-align ul li ul {
                padding: 0;
                border: 0;
                background: transparent;
            }

            .center-align ul li ul li {
                position: relative;
                padding-left: 25px;
                width: 100% !important;
            }

            .center-align ul li ul li:after {
                font-family: FontAwesome;
                top: 09px;
                right: 0;
                padding-right: 10px;
                content: "\f0a9";
                position: absolute;
                left: 0;
                font-size: 20px;
                color: #108ad6;
            }
        </style>



        <section class="tech-stack">
            <div class="container">
                <div class="col-lg-12 center">

                    <div class="section-title text-center ">
                        <h3 class="common_h3">Futuristic Tech Foundations of Our OTC Crypto Exchange Solutions</h3>
                        <hr>
                        <p>Leveraging extensive experience in crafting enterprise-level crypto solutions, our OTC crypto exchange development team employs advanced and state-of-the-art technologies to deliver innovative, future-proof platforms that excel in durability and performance.</p>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked"
                        style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                        <li class="active"><a href="#vtab28" data-toggle="tab">
                                <p>Blockchains</p>
                            </a></li>
                        <li><a href="#vtab26" data-toggle="tab">
                                <p>Frameworks</p>
                            </a></li>
                        <li><a href="#vtab29" data-toggle="tab">
                                <p>Smart Contracts</p>
                            </a></li>
                        <li><a href="#vtab27" data-toggle="tab">
                                <p>Storage</p>
                            </a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-content technology">
                        <div role="tabpanel" class="tab-pane in active" id="vtab28">
                            <div class="row">
                                <ul style="width: 100%">
                                    <li><img class="lazy"
                                            src="{{ asset('images/nftm/icons/ethereum.webp') }}">
                                        <p>Ethereum</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/nftm/icons/polygon.webp') }}">
                                        <p>Polygon</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/nftm/icons/solana.webp') }}">
                                        <p>Solana</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/nftm/icons/bnb.webp') }}">
                                        <p>BNB Chain</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/home-new/avalanche.png') }}">
                                        <p>Avalanche</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="vtab26">
                            <div class="row">
                                <ul style="width: 100%">
                                    <li><img class="lazy" src="{{ asset('images/token-development/icons/angular.webp') }}">
                                        <p>Angular JS</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-development/tech-stack/react.webp') }}">
                                        <p>React JS</p>
                                    </li>
                                    <li><img class="lazy" src="{{ asset('images/ai-crypto-coin-development/icons/web3.webp') }}">
                                        <p>Web3 JS</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/ai-token-development/icons/node-js_logo.webp') }}">
                                        <p>Node JS</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-development/tech-stack/js.webp') }}">
                                        <p>Express JS</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="vtab29">
                            <div class="row">
                                <ul style="width: 100%">
                                    <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/solidity.webp') }}">
                                        <p>Solidity</p>
                                    </li>
                                    <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/rust.webp') }}">
                                        <p>Rust</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-development/tech-stack/go-lang.webp') }}">
                                        <p>Go</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-development/tech-stack/python.webp') }}">
                                        <p>Python</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="vtab27">
                            <div class="row">
                                <ul style="width: 100%">
                                    <li><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-development/tech-stack/manogodb.png') }}">
                                        <p>MongoDB</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-development/tech-stack/ipfs.webp') }}">
                                        <p>IPFS</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-development/tech-stack/filecoin.webp') }}">
                                        <p>Filecoin</p>
                                    </li>
                                    <li><img class="lazy"
                                            src="{{ asset('images/cryptocurrency-development/tech-stack/pinata.webp') }}">
                                        <p>Pinata</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => 'What exactly is an OTC Crypto Exchange Platform?',
                    'ans' => "An OTC crypto exchange platform facilitates direct trading of cryptocurrencies between buyers and sellers, bypassing traditional exchange intermediaries. It offers a streamlined, often more private trading experience, suitable for high-volume transactions."
                    ],
                [
                    'ques' => 'How does OTC crypto trading software enhance user experience?',
                    'ans' => "OTC crypto trading software provides users with greater privacy, faster transaction processing, and the ability to execute large trades without affecting market prices. It also offers customizable trading options and enhanced security."
                ],
                [
                    'ques' => 'What are some key features of an OTC crypto exchange?',
                    'ans' => "Notable features of an OTC crypto exchange include real-time pricing, integrated crypto wallets, advanced security protocols, multi-platform support, and customizable trading settings. These elements collectively enhance the trading experience."
                ],
                [
                    'ques' => 'What is the typical cost of developing an OTC exchange application?',
                    'ans' => "The cost to build an OTC exchange application varies based on complexity, features, and development requirements. It generally encompasses design, development, security integration, and ongoing support, ranging from several thousand to several hundred thousand dollars."
                ],
                [
                    'ques' => 'Which company excels in OTC crypto exchange development?',
                    'ans' => "The leading OTC crypto exchange development companies are recognized for their expertise in blockchain technology, robust security measures, and custom solutions. Choosing a top-tier firm ensures high-quality development and support for your exchange platform."
                ],
            ],
        ])
    </div>
    <script src="js/jquery.min.js" type="8efa1054ee63df0723e9eee1-text/javascript"></script>
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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
    <script src="js/vendor.js" type="8efa1054ee63df0723e9eee1-text/javascript"></script>
    <script src="js/plugins.js" type="8efa1054ee63df0723e9eee1-text/javascript"></script>
    <script src="js/main.js" type="8efa1054ee63df0723e9eee1-text/javascript"></script>
    <script src="build/js/intlTelInput.js" type="8efa1054ee63df0723e9eee1-text/javascript"></script>
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
        $('.view_pricing').click(function() {
        $('html, body').animate({
            scrollTop: $('#pricing-section').offset().top
        }, 2000);
    });
    </script>
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
        var url = window.location.href;
    $('#url').val(url);
    </script>
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
        $(".pricing-body").mCustomScrollbar({
        theme: "minimal"
    });
    </script>
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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

        /* .dropdown-menu{background-color: rgb(11 53 113); backdrop-filter: blur(23px); box-shadow: 0 12px 28px 1px rgb(0 0 0 / 15%), 0 2px 4px 0 rgb(255 255 255 / 50%); border: 1px solid #ffffff12; transform: translate(0, 0); border-radius: 5px !important; transition: all 0.2s ease-out; padding: 5px 10px;}
.dropdown-menu>li>a{color: #fff;border-radius: 5px; padding: 3px 7px;}
.dropdown-menu>li>a:hover{color: #23417f !important}
.dropdown-menu>li>a:hover .caret{border-left-color: #23417f !important;} */
        @media (max-width: 767px) {
            .navbar-nav .open .dropdown-menu {
                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: transparent;
                border: 0;
                box-shadow: none;
            }

            .navbar-nav .open .dropdown-menu>li>a,
            .navbar-nav .open .dropdown-menu .dropdown-header {
                padding: 5px 15px 5px 25px;
            }

            .navbar-nav .open .dropdown-menu>li>a {
                line-height: 20px;
            }

            .navbar-nav .open .dropdown-menu>li>a:hover,
            .navbar-nav .open .dropdown-menu>li>a:focus {
                /*background-image: none;*/
            }
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

    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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
    <div class="sticky-form">
        <div class="formdiv">
            <form class="form-side" id="mailForm_sticky" method="post" action="">
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
                    <input id="phone_sticky" name="phone_dummy" type="text" required=""
                        oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        data-cf-modified-8efa1054ee63df0723e9eee1-="">
                    <input type="hidden" name="phone" id="phone_newsletter">
                    <input type="hidden" name="url" id="url" value="/otc-crypto-exchange-development">
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
    <script type="8efa1054ee63df0723e9eee1-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
    <script type="8efa1054ee63df0723e9eee1-text/javascript"
        src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
        media="screen">
    <script type="8efa1054ee63df0723e9eee1-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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




    <!-- Side Panel - End -->
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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

    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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



    <script type="8efa1054ee63df0723e9eee1-text/javascript">
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
    <script type="8efa1054ee63df0723e9eee1-text/javascript">
        $(".crypto-popup").click(function(e) {
        $('crypto-popup').addClass('fixedPosition full-width');
        $(".login-popup").addClass('show');
        e.stopPropagation();
    });
    </script>
    <!-- Button Lightbox Script - End -->

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="8efa1054ee63df0723e9eee1-|49" defer></script>
</div>




@endsection