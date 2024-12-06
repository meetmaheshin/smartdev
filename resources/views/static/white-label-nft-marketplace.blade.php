@extends('layouts.static')
    @section('title', 'White Label NFT Marketplace')
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
        background: linear-gradient(140deg, #402c67, #402c67, #402c67);
        background-size: cover;
        padding-top: 85px;
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
        width: 100%;
        margin-top: 80px;
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

    .cta_mine1 a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        background: #b11f6e !important;
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
        border-top: 3px solid #23124c;
    }

    .feature-box-3 .icon {
        color: #23124c;
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
        padding: 100px 0;
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

    .new-features .awesome-features-wrapper {
        margin: 25px;
        background: #140050;
        border: 1px solid #fff;
    }

    .new-features .awesome-features-wrapper::before {
        content: "";
        position: absolute;
        left: -10px;
        bottom: -10px;
        background: #fff;
        width: 90px;
        height: 90px;
        z-index: -1;
        transition: 1s;
        border-radius: 20px
    }

    .new-features .awesome-features-wrapper::after {
        right: -10px;
        top: -10px;
        border-radius: 20px;
        background: none;
        border: 1px solid #fff;
    }

    .new-features .awesome-features-wrapper:hover::before {
        width: 200px;
        height: 200px
    }

    .new-features .awesome-features-wrapper p,
    .new-features .awesome-features-wrapper p strong {
        color: #fff;
        padding: 0;
    }

    .new-features .awesome-features-icon-img .fa {
        color: #fff;
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
        width: 21%;
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
        background: #402c67;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(140deg, #402c67, #af95f8, #f6abf4);
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
            width: 100%;
        }

        .tech-stack ul {
            flex-wrap: wrap;
        }

        .tech-stack ul li {
            width: 48%;
            text-align: center;
        }
    }
</style>


<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <!-- <div class="banner-overlay"></div> -->
            <div class="banner_content">
                <div class="container">
                    <div class="">
                        <div class="col-md-5 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            <h1 itemprop="name">White Label NFT Marketplace</h1>
                                        </div>
                                        <p itemprop="text">A White-label NFT marketplace empowers you to swiftly establish a fully operational NFT trading platform, offering unparalleled customization, advanced functionality, and top-tier security. At Blockchain App Factory, we excel in delivering cutting-edge NFT marketplace solutions that are easily adaptable, allowing you to launch your business with remarkable speed.</p>
                                        {{-- <div class="txt"> <a href="#" class="nec-btn" id="cyz">EXPLORE DEMO</a> 
                                            <a href="#" class="nec-btn med-btn" id="cyz">View Package</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center"> <img class="magic"
                            src="{{ asset('images/white-label-nft-marketplace/banner-img.webp') }}" width="100px"
                            alt=" White label NFT Marketplace Development" title="White label NFT Marketplace Demo">
                    </div>
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
                background: #23124c;
            }

            #counter-stats .stats:nth-child(2) {
                background: #29135e;
            }

            #counter-stats .stats:nth-child(3) {
                background: #23124c;
            }

            #counter-stats .stats:nth-child(4) {
                background: #29135e;
            }


            /* AUTHOR LINK */
        </style>
        <div class="common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">Seamless NFT Marketplace Setup – Your Gateway to Success!</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center">Our White-label NFT platforms enable businesses to swiftly dive into the booming NFT and blockchain revolution. Designed to empower entrepreneurs and business developers, these platforms allow you to start generating revenue almost immediately with minimal investment.<br><br>
                        As the NFT landscape continues to advance, both newcomers and seasoned users are eager to acquire their first digital assets. To meet this demand, we offer a state-of-the-art White-label NFT marketplace that enables businesses of all sizes to quickly engage customers while optimizing resource use. Our solution combines user-friendly interfaces with robust security features to deliver a comprehensive, high-performance platform.
                        </p>

                        <style type="text/css">
                            .step-points li {
                                display: grid;
                                grid-template-columns: 60px auto;
                                margin-bottom: 20px;
                                align-items: center;
                                border-radius: 7px;
                                background: #e0d3ff
                            }

                            .step-points li span {
                                width: 60px;
                                height: 60px;
                                background: #23124c;
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
                        </style>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <ul class="step-points">
                                <li> <span><i class="fa fa-cubes" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Intuitive and Secure Auction and Bidding Platforms</p>
                                    </div>
                                </li>
                                <li> <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Integrated Customer Support Portal</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <ul class="step-points">
                                <li> <span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Broad Payment Options (Crypto, Fiat, Wire Transfers)</p>
                                    </div>
                                </li>
                                <li> <span><i class="fa fa-wallet" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Integrated Wallets and External Wallet Compatibility</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <ul class="step-points">
                                <li> <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Advanced Security Measures</p>
                                    </div>
                                </li>
                                {{-- <li> <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                                    <div class="step-points-content">
                                        <p>Integrated Customer Support Portal</p>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                        <div class="text-center mt20 cta_mine">
                            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"
                                href="{{ url('consultation') }}"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
                                <span>SCHEDULE A MEETING</span></a>
                            {{-- <a href="#"
                                class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"><span>VIEW TESTIMONIALS</span></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <section id="pricing-section1" class="gray_bg">
    <div class="pricing-table" id="pricing-tabs1">
        <div class="container">
            <div class="data table-responsive">
                <div class="section-title">
                    <h2 class="sec_tit underline text-center mb20">Building an NFT Marketplace from Scratch Vs from a
                        White-label Solution</h2>
                </div>
                <table class="table-striped" style="width:100%; background: #fff;">
                    <tbody>
                        <tr>
                            <th class="theme-color-bg font_sze_algn">Factors</th>
                            <th class="theme-color-bg font_sze_algn">Building NFT Marketplace from Scratch</th>
                            <th class="theme-color-bg font_sze_algn">White-label NFT Marketplace</th>
                        </tr>
                        <tr>
                            <td class=" ">Process</td>
                            <td class=" ">All the steps involved in developing the platform are executed. </td>
                            <td class=" ">The development process here involves a few simple steps. </td>
                        </tr>
                        <tr>
                            <td class=" ">Time Taken</td>
                            <td class=" ">The time taken for the final product is comparatively high.</td>
                            <td class=" ">The time taken for the final product is comparatively low. </td>
                        </tr>
                        <tr>
                            <td class=" ">Cost</td>
                            <td class=" ">The cost of developing from scratch is comparatively high.</td>
                            <td class=" ">The cost of using a White label solution is comparatively low.</td>
                        </tr>
                        <tr>
                            <td class=" ">Presence of Errors</td>
                            <td class=" ">The platform might contain unprecedented bugs even after launch.</td>
                            <td class=" ">The platform would not have errors as it was extensively tested beforehand.
                            </td>
                        </tr>
                        <tr>
                            <td class=" ">Customizability</td>
                            <td class=" ">You have the independence to decide on the end-to-end features.</td>
                            <td class=" ">You can only customize the user-end features of the White label solution.</td>
                        </tr>
                        <tr>
                            <td class=" ">Resultant Application</td>
                            <td class=" ">The resulting NFT platform will be one-of-a-kind. </td>
                            <td class=" ">The platform will be similar to any of the popular marketplace platforms.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section> --}}

<div class="common_spacing gray_bg new-features" style="background: #140050;">
    <div class="container">
        <div class=" ">
            <h2 class="sec_tit underline text-center text-white">Premier Capabilities of Our White-Label NFT Software</h2>

        </div>
        <div class="row mt40">
            <div class="container container-center">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-copyright"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Multi-Signature Ownership Transfers</strong>Elevate your NFT marketplace's security with multi-signature ownership transfers. This feature ensures that NFT ownership changes require multiple approvals, preventing unauthorized transfers and enhancing overall trust.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-users"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Exclusive User Whitelisting</strong>Establish a select group of users who gain early access to NFT collections before public release. This strategic approach builds excitement, fosters exclusivity, and enhances your marketing efforts by generating buzz and anticipation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-download"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Seamless NFT Import</strong>Effortlessly import NFTs created with external software or custom coding into your marketplace. This functionality enables you to list and sell your tokens without needing to mint them directly on the platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-gavel"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Lazy Minting</strong>Allow creators to defer minting costs until their NFTs are sold with our lazy minting feature. This cost-efficient option enables Web3 creators to launch their projects without upfront expenses, reducing financial barriers to entry.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-database"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Native Token Integration</strong>Incorporate native tokens with distinctive utilities or governance roles into your marketplace. This integration can attract a wider audience, offer additional revenue opportunities, and strengthen your market presence.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-braille"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Batch Minting Capabilities</strong>Facilitate batch minting for creators and brands, enabling them to use generative algorithms to produce multiple NFTs simultaneously, each with unique attributes. This streamlines the creation process and accelerates NFT deployment.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-clock-o"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Timed Auction Functionality</strong>Conduct timed auctions within your marketplace to drive competitive bidding on NFTs. This feature can enhance asset value and generate excitement by creating a sense of urgency during the auction period.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-bookmark"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Royalty Splitting</strong>Implement smart contracts to allow creators to split royalties from every transaction. This feature is ideal for projects involving multiple contributors, ensuring fair and transparent earnings distribution.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-paint-brush"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Creator Verification</strong>Offer a verification option for creators to enhance their credibility within the marketplace. Verified creators are perceived as more authentic and trustworthy by collectors, fostering greater engagement and support.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <i class="fa fa-gift"></i> </div>
                        <div class="awesome-features-text">
                            <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Physical NFT Integration</strong>Enable the creation of NFTs linked to physical assets, bridging the gap between digital and physical ownership. This feature appeals to loyal customers and opens up new avenues for engagement by connecting the digital and tangible worlds.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .box,
    .sub_ff {
        position: relative
    }

    .sub_ff strong {
        display: block;
        font-size: 17px;
        color: #00000a !important;
        font-weight: 900;
        line-height: 30px
    }

    .dev {
        padding-left: 26px
    }

    .sub_ff {
        margin-top: 15px;
        margin-bottom: 20px
    }

    .sub_ff i {
        position: absolute;
        left: 0;
        color: #47b475;
        line-height: 1.5;
        font-size: 19px
    }

    .awesome-features-icon-img {
        margin-bottom: 10px
    }

    .icon_content p strong {
        display: block;
        color: #47b475;
        font-size: 18px;
        margin-bottom: 4px
    }

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

    .awesome-features-wrapper {
        border: 1px solid #cdcdcd;
        background: #fff;
        padding-top: 30px;
        padding-bottom: 20px;
        min-height: auto;
        transition: 1s;
        position: relative;
        margin-bottom: 30px;
        border-radius: 7px
    }

    .awesome-features-wrapper::after {
        content: "";
        position: absolute;
        right: -6px;
        top: -6px;
        background: #47b475;
        width: 90px;
        height: 90px;
        z-index: -1;
        transition: 1s;
        border-radius: 7px
    }

    .awesome-features-wrapper:hover::after {
        width: 200px;
        height: 200px
    }

    .awesome-features-icon-img .fa {
        color: #47b475;
        font-size: 40px
    }

    .awesome-features-icon-img img {
        width: 60px;
        height: 60px
    }

    .awesome-features-text h4 {
        font-size: 22px;
        font-weight: 500;
        line-height: 1.3;
        margin-bottom: 18px
    }

    .awesome-features-text p {
        margin-bottom: 0;
        padding: 0 40px
    }

    .box {
        background-color: #fff;
        z-index: 0;
        overflow: hidden;
        padding: 20px;
        margin-bottom: 20px;
        min-height: 301px;
        border-radius: 10px;
        text-align: center;
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
        -webkit-box-shadow: 0 0 95px 0 rgb(0 0 0 / 7%);
        box-shadow: 0 0 95px 0 rgb(0 0 0 / 7%)
    }

    .box p strong {
        display: block
    }

    .box .icon-bg {
        background: linear-gradient(45deg, #47b475, #00a7e6);
        width: 64px;
        height: 87px;
        padding: 8px;
        line-height: 66px;
        text-align: center;
        border-radius: 33px;
        margin: 13px auto;
        transform: rotate(45deg)
    }

    .box img {
        width: 80%
    }

    .mt-10 {
        margin-top: 10px
    }
</style>


<style type="text/css">
    .awesome-features-wrapper {
        border: 1px solid #23124cad;
        background: #543d84;
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
<div class="common_spacing bg-dark-half-md" style="padding-bottom:20px;">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="common_h3 text-white" style="color:#fff;">Unlock These Benefits with Our White-Label NFT Marketplace</h3>
            <hr>
        </div>
        <div class="row mt40">
            <div class="container container-center">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                style="width: 60px !important; height:60px !important;"
                                src="{{ asset('images/lab/icons/microservices.png') }}"> </div>
                        <div class="awesome-features-text text-white">
                            <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">Microservices Integration</h4>
                            Leverage our platform's ability to create specialized mini-portals for various services, expanding your business opportunities and enhancing functionality.
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                style="width: 60px !important; height:60px !important;"
                                src="{{ asset('images/lab/icons/smart-contracts.webp') }}" alt="Shell"> </div>
                        <div class="awesome-features-text text-white">
                            <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">Robust Smart Contracts</h4>
                            Our smart contracts are rigorously audited to ensure error-free performance, providing a secure and reliable environment for NFT transactions.
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"><img class="img-fuild lazy"
                                style="width: 60px !important; height:60px !important;"
                                src="{{ asset('images/lab/icons/payment-gateways.png') }}" alt="gateways"></div>
                        <div class="awesome-features-text text-white">
                            <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">Advanced Payment Gateway</h4>
                            Utilize our versatile payment gateway, customizable to accommodate a wide range of crypto and fiat currencies, ensuring smooth and seamless transactions.
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                style="width: 60px !important; height:60px !important;"
                                src="{{ asset('images/lab/icons/verification.webp') }}" alt="Verification"> </div>
                        <div class="awesome-features-text text-white">
                            <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">Effortless User Verification</h4>
                            Our platform integrates streamlined user verification solutions to meet KYC, AML, and regional regulatory requirements, enhancing security and compliance.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                style="width: 60px !important; height:60px !important;"
                                src="{{ asset('images/lab/icons/utility.png') }}" alt="Utility"> </div>
                        <div class="awesome-features-text text-white">
                            <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">Native Utility Token</h4>
                            Incorporate custom native tokens within your white-label solution, designed to support diverse functionalities and enhance app operations.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                style="width: 60px !important; height:60px !important;"
                                src="{{ asset('images/lab/icons/user-panel.png') }}" alt="Verification"> </div>
                        <div class="awesome-features-text text-white">
                            <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">Customizable User Interfaces</h4>
                            Tailor the NFT marketplace software to align with your brand by customizing visual elements and color schemes to meet your business needs.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                style="width: 60px !important; height:60px !important;"
                                src="{{ asset('images/lab/icons/scalable.webp') }}" alt="scalable"> </div>
                        <div class="awesome-features-text text-white">
                            <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">Scalable Infrastructure </h4>
                            Our marketplace solution offers scalable infrastructure, allowing you to adjust capacity in response to market trends and user demand, reaching a global audience.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                    <div class="awesome-features-wrapper text-center mb-30">
                        <div class="awesome-features-icon-img"> <img class="img-fuild lazy"
                                style="width: 60px !important; height:60px !important;"
                                src="{{ asset('images/lab/icons/liquidity.webp') }}" alt="liquidity"> </div>
                        <div class="awesome-features-text text-white">
                            <h4 style="display:block; font-size: 20px; color: #fff; padding-bottom: 5px;">Integrated Liquidity Tools</h4>
                            Benefit from built-in liquidity tools that facilitate smooth and efficient NFT trades, mitigating concerns about market illiquidity and ensuring robust trading capabilities.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">
    .center-align {
        padding: 60px 0
    }

    .center-align ul {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        margin: 10px 0;
        padding: 30px 0;
        border: 1px solid #eee;
        border-radius: 10px;
        background: #f2f2f2;
    }

    .center-align ul li {
        width: 50%;
        display: flex;
        align-items: center;
        padding: 0 3%
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
            padding: 15px
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
    }

    .center-align ul li ul li:after {
        font-family: FontAwesome;
        top: 3px;
        right: 0;
        padding-right: 10px;
        content: "\f0a9";
        position: absolute;
        left: 0;
        font-size: 20px;
        color: #108ad6;
    }
</style>

<section class="center-align">
    <div class="container">
        <div class="row">
            <!-- <h2 class="sec_tit underline text-center" style="font-size:25px;"> </h2> -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="reverse" style="background: #f1e4ff;">

                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Captivating Features of Our NFT Marketplace </strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">As a premier white-label NFT marketplace development firm, we offer cutting-edge NFT marketplace software designed for seamless integration and accessibility. Our comprehensive solutions allow you to launch publicly in just days, with features that cater to a diverse range of users.</p>
                            <ul>
                                <li>Advanced Filters</li>
                                <li>Favorite Listings </li>
                                <li>Collaborative NFT Creation</li>
                                <li>Streamlined Auctions</li>
                                <li>Effortless Navigation</li>
                                <li>Secure Wallet Integration</li>
                                <li>Exclusive Content</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/white-label-nft-marketplace/marketplace-dashboard.webp') }}"
                            alt="NFT Marketplace" title="NFT Marketplace">
                    </li>
                </ul>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <div>
                            <div class="section-title">
                                <h3 class="title"> <span class="red-txt"><strong>Features Embedded in Our Admin Dashboard</strong></span></h3>
                                <hr style="margin-left: 0;">
                            </div>
                            <p class="text-justify">Our solution places significant emphasis on the admin dashboard, a crucial component for any business. We design dashboards that empower admins to monitor metrics, manage transactions, execute tasks, and address customer inquiries with efficiency.</p>
                            <ul>
                                <li>Customer Oversight</li>
                                <li>API and SDK Integration</li>
                                <li>Transaction Handling</li>
                                <li>Asset Oversight</li>
                                <li>Insights and Analytics</li>
                                <li>Whitelist Control</li>
                            </ul>

                        </div>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/white-label-nft-marketplace/admin-dashboard.webp') }}"
                            alt="Admin Dashboard" title="Admin Dashboard">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="product-features package_includes">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20 text-white">Our NFT Marketplace Suits Every Industry</h2>
                </div>
                <p class="text-white">Our NFT marketplace solutions are tailored to meet the specific needs of various industries, delivering bespoke applications that align perfectly with industry themes. Our experts guarantee a seamless build process, taking just 7 days from concept to launch, significantly boosting your business potential.</p>
            </div>
            <div class="col-md-12 text-center">
                <div class="container container-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="Package_list"> <img class="lazy" src="{{ asset('images/nftm/icon/art.png') }}"
                                alt="art">
                            <h3>Art</h3>Our platform serves as a central hub for artists, collectors, and creatives to showcase, sell, and acquire artworks in diverse forms.
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="Package_list"> <img class="lazy" src="{{ asset('images/nftm/icon/music.png') }}" alt="music">
                            <h3> Music </h3>The comprehensive marketplace enables musicians to mint and sell their tracks as NFTs, fostering closer connections with dedicated fans and establishing a trusted community.
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="Package_list"> <img class="lazy" src="{{ asset('images/nftm/icon/gamepad.png') }}"
                                alt="games">
                            <h3> Gaming</h3>An integrated in-game NFT marketplace supports the exchange of game-related assets such as weapons, vehicles, and armor, driving a dynamic economy built by gamers for gamers.
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="Package_list"> <img class="lazy" src="{{ asset('images/nftm/icon/sport.png') }}" alt="sports">
                            <h3> Sports</h3>Our application empowers sports teams and athletes to offer memorabilia, providing fans with exclusive benefits and fostering a close-knit community around their favorite entities.
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="Package_list"> <img class="lazy" src="{{ asset('images/nftm/icon/www.png') }}"
                                alt="virtual lands">
                            <h3> Metaverse</h3>Users can buy and trade metaverse-based NFTs, including avatars, land plots, and other virtual assets, enriching their digital presence and exploring the virtual realm.
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="Package_list"> <img class="lazy" src="{{ asset('images/nftm/icon/bags.png') }}"
                                alt="accessories">
                            <h3> Accessories</h3>This NFT marketplace features both virtual and physical accessories, such as clothing and fashion items, ensuring users have access to genuine products from reputable brands.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
    :root {
        --color1: #117D83;
        --color2: #0d3881;
    }

    .main-timeline {
        font-family: 'Poppins', sans-serif;
    }

    .main-timeline:after {
        content: '';
        display: block;
        clear: both;
    }

    .main-timeline .timeline {
        width: 50%;
        padding: 0 70px 0 0;
        margin: 0 5px 15px 0;
        float: left;
    }

    .main-timeline .timeline-content {
        color: #999;
        background: var(--main-color);
        min-height: 120px;
        padding: 0 30px 0 60px;
        border-right: 2px solid var(--color2);
        display: block;
        position: relative;
        z-index: 1;
    }

    .main-timeline .timeline-content:hover {
        text-decoration: none;
    }

    .main-timeline .timeline-content:before,
    .main-timeline .timeline-content:after {
        content: '';
        background-color: var(--color2);
        height: 8px;
        width: 8px;
        border-radius: 50%;
        position: absolute;
        right: -5px;
        top: 0;
    }

    .main-timeline .timeline-content:after {
        top: auto;
        bottom: 0;
    }

    .main-timeline .timeline-icon {
        color: #fff;
        background-color: #402c67;
        font-size: 40px;
        text-align: center;
        line-height: 93px;
        height: 93px;
        width: 93px;
        border-radius: 30px;
        box-shadow: -5px -5px 5px #f6abf4, -8px -8px 0 #f6abf4;
        transform: translateY(-50%);
        position: absolute;
        right: -120px;
        top: 50%;
    }

    .main-timeline .timeline-year {
        font-size: 32px;
        font-weight: 600;
        text-align: right;
    }

    .main-timeline .title {
        color: var(--color2);
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0 0 7px;
        text-align: right;
    }

    .main-timeline .description {
        color: #444;
        font-size: 12px;
        font-weight: 500;
        line-height: 21px;
        letter-spacing: 0.5px;
        margin: 0;
        text-align: right;
    }

    .main-timeline .timeline-yearleft {
        font-size: 32px;
        font-weight: 600;
        text-align: left;
    }

    .main-timeline .titleleft {
        color: var(--color2);
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0 0 7px;
        text-align: left;
    }

    .main-timeline .descriptionleft {
        color: #444;
        font-size: 12px;
        font-weight: 500;
        line-height: 21px;
        letter-spacing: 0.5px;
        margin: 0;
        text-align: left;
    }

    .main-timeline .timeline:nth-child(even) {
        padding: 0 0 0 70px;
        margin: 0 0 15px 5px;
        float: right;
    }

    .main-timeline .timeline:nth-child(even) .timeline-content {
        padding: 0 0 0 30px;
        border-left: 2px solid var(--color1);
        border-right: none;
    }

    .main-timeline .timeline:nth-child(even) .timeline-content:before,
    .main-timeline .timeline:nth-child(even) .timeline-content:after {
        right: auto;
        left: -5px;
    }

    .main-timeline .timeline:nth-child(even) .timeline-icon {
        box-shadow: 5px -5px 5px #108ad6, 8px -8px 0 #108ad6;
        left: -120px;
        right: auto;
    }

    .main-timeline .timeline:nth-child(2) {
        --color2: #0d3881;
        --color2: #0d3881;
    }

    .main-timeline .timeline:nth-child(3) {
        --color2: #0d3881;
        --color2: #0d3881;
    }

    .main-timeline .timeline:nth-child(4) {
        --color2: #0d3881;
        --color2: #0d3881;
    }

    @media screen and (max-width:767px) {

        .main-timeline .timeline,
        .main-timeline .timeline:nth-child(even) {
            width: 100%;
            padding: 115px 0 0;
            margin: 0 0 50px;
        }

        .main-timeline .timeline-content,
        .main-timeline .timeline:nth-child(even) .timeline-content {
            text-align: center;
            padding: 15px 0 0 0;
            border: none;
            border-top: 2px solid var(--color1);
        }

        .main-timeline .timeline-content:before {
            right: auto;
            left: 0;
            top: -5px;
        }

        .main-timeline .timeline-content:after,
        .main-timeline .timeline:nth-child(even) .timeline-content:after {
            left: auto;
            right: 0;
            top: -5px;
        }

        .main-timeline .timeline-icon,
        .main-timeline .timeline:nth-child(even) .timeline-icon {
            transform: translateY(0) translateX(-50%);
            top: -115px;
            left: 50%;
        }
    }
</style>
<section class="common_spacing gray_bg">
    <div class="container">
        <h3 class="sec_tit underline text-center">How We Propel Your Business with a White-Label NFT Marketplace</h3>
        <p class="text-center">Our expertise in leveraging advanced White-label NFT platforms allows us to follow a thorough and reliable process for launching your application. Trust us to deliver a platform tailored to your exact specifications.</p>
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline">
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">1</div>
                            <div class="timeline-icon"><img class="lazy" src="{{ asset('images/nftm/icon/conversation.png') }}"
                                    style="width: 60px; margin-top: 15px;"></div>
                            <h4 class="title">Initial Consultation</h4>
                            <p class="description">
                                We engage in detailed discussions to grasp your specific requirements and design the NFT platform’s framework based on these insights.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-yearleft">2</div>
                            <div class="timeline-icon"><img class="lazy" src="{{ asset('images/nftm/icon/ui.png') }}"
                                    style="width: 60px; margin-top: 15px;"></div>
                            <h4 class="titleleft">UI/UX Customization</h4>
                            <p class="descriptionleft">
                                We tailor the user interface of the White-label platform to reflect your brand identity, adjusting icon placements and color schemes as needed.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">3</div>
                            <div class="timeline-icon"><img class="lazy" src="{{ asset('images/nftm/icon/patent.png') }}"
                                    style="width: 60px; margin-top: 15px;"></div>
                            <h4 class="title">Smart Contract Development</h4>
                            <p class="description">
                                We adapt the platform’s smart contracts to manage various blockchain processes, ensuring they align with your unique business objectives.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-yearleft">4</div>
                            <div class="timeline-icon"><img class="lazy" src="{{ asset('images/nftm/icon/integration.png') }}"
                                    style="width: 60px; margin-top: 15px;"></div>
                            <h4 class="titleleft">External Integration</h4>
                            <p class="descriptionleft">
                                We incorporate external APIs and SDKs for features like wallet connectivity, live NFT price data, and storage solutions to enhance functionality.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">5</div>
                            <div class="timeline-icon"><img class="lazy" src="{{ asset('images/nftm/icon/bug.png') }}"
                                    style="width: 60px; margin-top: 15px;"></div>
                            <h4 class="title">Rigorous Testing</h4>
                            <p class="description">
                                We conduct comprehensive testing of the NFT platform to identify and resolve any issues, ensuring it performs seamlessly under all conditions.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-yearleft">6</div>
                            <div class="timeline-icon"><img class="lazy" src="{{ asset('images/nftm/icon/launch.webp') }}"
                                    style="width: 60px; margin-top: 15px;"></div>
                            <h4 class="titleleft">Launch and Promotion</h4>
                            <p class="descriptionleft">
                                We officially launch the platform for public use and support you with promotional strategies to achieve the desired level of community engagement.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
        border-bottom: 34px solid #523c83;
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
        background-color: #523c83;
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
        border-left: 2px solid #523c83;
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
            <h2 class="sec_tit underline text-center" style="width: 100%">Why Choose Our White-Label NFT Platform Solution?</h2>
        </div>
        <p class="text-center">Our platform offers a multitude of advantages designed to benefit both your business and your customers at every turn.</p>
        <div class="row mt40">
            <div class="container container-center">
                <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="lazy" src="{{ asset('images/nftm/icon/idea.png') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <h3>Exceptional Efficiency</h3>
                            <div class="featured-desc">Launch your NFT platform in just days at competitive prices, maximizing resource efficiency and accelerating your market entry.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                    <div class="featured-icon-box  text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="lazy" src="{{ asset('images/nftm/icon/customization.webp') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <h3>Total Customization</h3>
                            <div class="featured-desc">Our pre-built NFT platform provides end-to-end customization, enabling passionate entrepreneurs to tailor every aspect to their vision.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="lazy" src="{{ asset('images/nftm/icon/prototype.webp') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <h3>Flexible Adaptation</h3>
                            <div class="featured-desc">Easily modify existing features to align with your business’s branding, ensuring your platform stands out in the marketplace.</div>
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
                                        src="{{ asset('images/lab/icons/blockchain.webp') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <h3>Cross-Chain Compatibility</h3>
                            <div class="featured-desc">Designed to operate seamlessly across various L1 and L2 blockchain networks, our platform broadens your reach to diverse target markets.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="lazy" src="{{ asset('images/cryptocurrency-development/icons/exchange.png') }}"
                                        alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <h3>Multi-Currency Capability</h3>
                            <div class="featured-desc">Support for a wide range of crypto and fiat currencies is included, along with an efficient payment gateway for smooth transactions.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                    <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                        <div class="featured-icon">
                            <div
                                class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                <i class="flaticon flaticon-air-freight">
                                    <img class="lazy" src="{{ asset('images/lab/icons/security.png') }}" alt>
                                </i> </div>
                        </div>
                        <div class="featured-content">
                            <h3>State-of-the-Art Security</h3>
                            <div class="featured-desc">Equipped with the highest-grade security measures, our application ensures robust protection against any malicious threats.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-60 pre-ico-sec-1 gray-bg">
    <div class="container">
        <div class="row">
            <div class="main-sections">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-header underline text-center">
                        <h3 class="title-th sec_tit">Unlocking Business Potential with Our NFT Marketplace</h3>
                    </div>
                    <div class="why-adit container-center">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="card-big-shadow">
                                <div class="why-adit-list">
                                    <div class="icon"> <img class="lazy" src="{{ asset('images/lab/icon/conversation.png') }}"
                                            alt="Meet evolving needs"> </div>
                                    <div class="content">
                                        <h4>Adapt to Changing Demands</h4>
                                        <p>Cultivate a premium brand that fosters customer trust and loyalty by staying agile and evolving with emerging trends. Our platform is designed to upgrade seamlessly, keeping you ahead in a dynamic market.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="card-big-shadow">
                                <div class="why-adit-list">
                                    <div class="icon"> <img class="lazy" src="{{ asset('images/lab/icon/target.webp') }}"
                                            alt="Establish a brand identity"> </div>
                                    <div class="content">
                                        <h4>Build a Distinctive Brand Identity</h4>
                                        <p>Leverage branded solutions to gain customer trust and establish a strong market presence. Crafting your own brand not only validates your business but also enhances brand equity and credibility.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="card-big-shadow">
                                <div class="why-adit-list">
                                    <div class="icon"> <img class="lazy"
                                            src="{{ asset('images/lab/icons/brand-awareness.png') }}"
                                            alt="Extend brand awareness"> </div>
                                    <div class="content">
                                        <h4>Enhance Brand Visibility</h4>
                                        <p>Boost your brand’s visibility through effective marketing and advertising strategies. By creating a compelling brand identity and delivering exceptional value, you engage customers and build a solid reputation in the marketplace.</p>
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

<section class="service-section web-servic pad-tb">
    <div class="container">
        <div class="section-header underline text-center">
            <h2 class="text-white title-th">How Your NFT Marketplace Can Generate Revenue</h2>
        </div>
        <div class="row upset link-hover shape-num justify-content-center">
            <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img class="lazy" src="{{ asset('images/lab/icon/commissions.png') }}" alt="Commissions"></div>
                    <h3>Commissions</h3>
                    <p>Earn commissions on the creation, trading, and purchase of NFTs within your marketplace, turning these activities into a steady revenue stream.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img src="{{ asset('images/lab/icon/listing.png') }}" class="lazy"
                            alt="Listing Fee"></div>
                    <h3>Listing Fees</h3>
                    <p>Generate revenue by charging listing fees for NFTs showcased in your marketplace. This not only boosts your earnings but also enhances the visibility of NFTs to potential buyers.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img src="{{ asset('images/lab/icon/marketing.png') }}" class="lazy"
                            alt="Marketing"></div>
                    <h3>Marketing Charges</h3>
                    <p>Capitalize on marketing services by imposing a service charge for promoting NFTs. This adds another layer of revenue while increasing exposure for your users' assets.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s"
                style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                <div class="box4 mb0"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img src="{{ asset('images/lab/icon/auction.png') }}" alt="Auction" class="lazy"></div>
                    <h3>Auction Fees</h3>
                    <p>Integrate an auction feature into your marketplace or utilize an auction portal to provide immediate liquidity for NFTs. Auctions serve as an additional revenue source, driving quick sales and generating income.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="our_services" class="defisec gray_bg">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="common_h3 title-th sec_tit">Tailor to Your Specifications</h3>
            <hr>
            <p>Customize our NFT platform solution effortlessly to create a platform that perfectly matches your brand identity and business requirements.</p>
        </div>
        <div class="grids">
            <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                <div class="feature-box-3">
                    <div class="icon"> <img src="{{ asset('images/lab/icons/support.png') }}" alt="Auction" class="lazy"
                            width="45px;" style="margin-top: 10px"> </div>
                    <h4 class="feature-title common_h4">NFT Standard Compatibility</h4>
                    <p class="feature-desc mb0">Adapt your NFT platform to support assets created with various NFT standards from different blockchains, ensuring broad compatibility.</p>
                </div>
            </div>
            <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                <div class="feature-box-3">
                    <div class="icon"><img src="{{ asset('images/lab/icons/security.png') }}" alt="Auction" class="lazy"
                            width="45px;" style="margin-top: 10px"> </div>
                    <h4 class="feature-title common_h4">Uncompromising Security</h4>
                    <p class="feature-desc mb0">Our pre-built NFT platform solution undergoes rigorous testing to guarantee top-tier security at all times.</p>
                </div>
            </div>
            <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                <div class="feature-box-3">
                    <div class="icon"> <img src="{{ asset('images/lab/icons/payment-gateways.png') }}" alt="Auction" class="lazy"
                            width="45px;" style="margin-top: 10px"></div>
                    <h4 class="feature-title common_h4">Diverse Payment Methods</h4>
                    <p class="feature-desc mb0">Enable users to purchase NFTs using a variety of payment options, including cryptocurrencies, credit/debit cards, and wire transfers.</p>
                </div>
            </div>
        </div>
        <div class="text-center cta_mine mt40 txt"> 
            {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                href="#" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a>  --}}
            <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>CONSULT WITH OUR EXPERTS</span></a> 
        </div>
    </div>
</div>


<style type="text/css">
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
    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }

    .teck .category-icon img {
        height: 60px !important;
    }
</style>
<section class="space-pt bg-dark-half-md tech-padding teck" style="background: #f2f2f2;">
    <div class="container">
        <div class="row justify-content-md-center text-center">
            <div class="section-title text-center ">
                <h3 class="common_h3">Blockchain Networks Compatible with Our NFT Application</h3>
                <hr>
                <p>Our NFT marketplace solutions are optimized to operate seamlessly across a broad spectrum of L1 and L2 blockchain networks, ensuring robust support for your new NFT trading venture.</p>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-sm-12">
                <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/eth.webp') }}" alt="Ethereum"> </div> <a href="#"
                            class="category-title" alt>Ethereum</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/polygon.webp') }}" alt="Polygon"> </div> <a href="#"
                            class="category-title" alt>Polygon</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/solana.webp') }}" alt="Solana"> </div> <a href="#"
                            class="category-title" alt>Solana</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/binance-logo.webp') }}" alt="BNB Chain"> </div> <a href="#"
                            class="category-title" alt>BNB Chain</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/avalanche.png') }}" alt="Avalanche"> </div> <a href="#"
                            class="category-title" alt>Avalanche</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/tron.webp') }}" alt="Tron"> </div> <a href="#"
                            class="category-title" alt>Tron</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/harmony-logo.webp') }}" alt="Harmony"> </div> <a href="#"
                            class="category-title" alt>Harmony</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/polkadot.webp') }}" alt="Polkadot"> </div> <a href="#"
                            class="category-title" alt>Polkadot</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/cardano.webp') }}" alt="Cardano"> </div> <a href="#"
                            class="category-title" alt>Cardano</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/tezos.webp') }}" alt="Tezos"> </div> <a href="#"
                            class="category-title" alt>Tezos</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/fantom.webp') }}" alt="Fantom"> </div> <a href="#"
                            class="category-title" alt>Fantom</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                src="{{ asset('images/home-new/shardeum.webp') }}" alt="Shardeum"> </div> <a href="#"
                            class="category-title" alt>Shardeum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tech-stack">
    <div class="container">
        <div class="col-lg-12 center">
            <div class="section-title text-center ">
                <h3 class="common_h3">Technological Foundations Behind Our NFT Marketplace Solution</h3>
                <hr>
                <p>Our cutting-edge NFT marketplace solution leverages the most advanced technological stacks available globally. By harnessing these technologies, we aim to deliver exceptionally efficient and accessible NFT trading platforms tailored to all market sectors.</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked"
                style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                <li class="active"><a href="#vtab28" data-toggle="tab">
                        <p>Token Standards</p>
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
                            <li><img class="lazy" src="{{ asset('images/home-new/eth.webp') }}">
                                <p>ERC-721</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/eth.webp') }}">
                                <p>ERC-1155</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/tron.webp') }}">
                                <p>TRC-721</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/tron.webp') }}">
                                <p>TRC-1155</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/binance-logo.webp') }}">
                                <p>BEP-721</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/dgoods.webp') }}">
                                <p>dGoods</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/logos/tezo.webp') }}">
                                <p>FA2</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab26">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/angular.webp') }}">
                                <p>Angular JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/token-development/icons/react.webp') }}">
                                <p>React JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/hue.webp') }}">
                                <p>Hue</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/web3.webp') }}">
                                <p>Web3 JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/node-js_logo.webp') }}">
                                <p>Node JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/js.webp') }}">
                                <p>Express JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/token-development/icons/laravel.webp') }}">
                                <p>Laravel</p>
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
                            <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/go-lang.webp') }}">
                                <p>Go</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/python.webp') }}">
                                <p>Python</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab27">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/manogodb.png') }}">
                                <p>MongoDB</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/ipfs.webp') }}">
                                <p>IPFS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/filecoin.webp') }}">
                                <p>Filecoin</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/pinata.webp') }}">
                                <p>Pinata</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navTabs = document.querySelectorAll('#nav-tabs-wrapper1 a[data-toggle="tab"]');
        const tabPanes = document.querySelectorAll('.tab-pane');

        navTabs.forEach(tab => {
            tab.addEventListener('click', function (e) {
                e.preventDefault();

                // Remove 'in active' from all tab panes and add 'fade'
                tabPanes.forEach(pane => {
                    pane.classList.remove('in', 'active');
                    pane.classList.add('fade');
                });

                // Add 'in active' to the target pane
                const targetPane = document.querySelector(this.getAttribute('href'));
                if (targetPane) {
                    targetPane.classList.remove('fade');
                    targetPane.classList.add('in', 'active');
                }

                // Handle nav item active class
                const navItems = document.querySelectorAll('#nav-tabs-wrapper1 li');
                navItems.forEach(item => item.classList.remove('active'));
                this.parentElement.classList.add('active');
            });
        });
    });
</script>

<div class="intro_cnt common_spacing gray_bg">
    <div class="container" style="background:#23124c; padding:40px; border-radius: 10px;">
        <div class="section-title text-center">
            <div class="sec_tit">
                <h2 class="text-white">Launch Your White-Label NFT Marketplace Today</h2>
            </div>
            <hr>
        </div>
        <div class="row mt10">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="mt10 text-center para text-white">Leverage our expertise in blockchain technology to deploy a dependable NFT platform solution tailored to your crypto business. Our skilled team evaluates your needs and designs a user-centric interface to enhance the overall experience. We customize the platform to meet your specific requirements and provide seamless API and external wallet integrations for optimal user satisfaction. Experience a hassle-free launch with our meticulously engineered white-label solution.</p>
            </div>
        </div>
        <div class="text-center cta_mine cta_mine1 mt20 txt">
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
                {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                    target="_blank" href="#"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                <a href="{{ url('consultation') }}"
                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
            </div>
        </div>
    </div>
</div>

{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => "What exactly is a White-Label NFT Marketplace?",
            'ans' => "A white-label NFT marketplace is a fully customizable platform that allows businesses to launch their own NFT trading environment without starting from scratch. It provides a ready-made solution that can be rebranded and tailored to meet specific business needs."
        ],
        [
            'ques' => "Why should I choose a White-Label NFT Marketplace?",
            'ans' => "Opting for a white-label NFT marketplace allows you to quickly enter the NFT space with a solution that is both cost-effective and customizable. It offers a streamlined path to market with advanced features and a professional appearance."
        ],
        [
            'ques' => "Is the White-Label NFT Marketplace Software easy to use?",
            'ans' => "Yes, our white-label NFT marketplace software is designed with user experience in mind. It features an intuitive interface and user-friendly functionality to ensure smooth navigation and ease of use for both administrators and customers."
        ],
        [
            'ques' => "What advantages come with using an NFT Marketplace solution?",
            'ans' => "Using an NFT marketplace solution provides numerous benefits, including quick deployment, extensive customization options, and integrated features such as payment gateways and security measures. It also enhances brand visibility and offers a professional platform for trading NFTs."
        ],
        [
            'ques' => "What features are included in a pre-built NFT platform?",
            'ans' => "A ready-made NFT platform typically includes essential features such as customizable user interfaces, multi-chain and multi-currency support, advanced security measures, and built-in liquidity tools. These features ensure a robust and scalable trading environment."
        ],
        [
            'ques' => "How long does it take to launch an NFT platform?",
            'ans' => "The launch time for an NFT platform is typically around 7 days. This quick turnaround is achieved through our streamlined development process, allowing you to go live rapidly and start engaging with users."
        ],
    ],
])
</div>

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

    /* .dropdown-menu {
        background-color: rgb(11 53 113);
        backdrop-filter: blur(23px);
        box-shadow: 0 12px 28px 1px rgb(0 0 0 / 15%), 0 2px 4px 0 rgb(255 255 255 / 50%);
        border: 1px solid #ffffff12;
        transform: translate(0, 0);
        border-radius: 5px !important;
        transition: all 0.2s ease-out;
        padding: 5px 10px;
    } */

    .dropdown-menu>li>a {
        color: #fff;
        border-radius: 5px;
        padding: 3px 7px;
    }

    .dropdown-menu>li>a:hover {
        color: #23417f !important
    }

    .dropdown-menu>li>a:hover .caret {
        border-left-color: #23417f !important;
    }

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

<script type="664b4953e6b1ed5abd960b7c-text/javascript">
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
<script type="664b4953e6b1ed5abd960b7c-text/javascript">
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
<script type="664b4953e6b1ed5abd960b7c-text/javascript">
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
<script type="664b4953e6b1ed5abd960b7c-text/javascript">
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
            <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="blank">
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



<!-- SocialMedia Bottom - End -->

<!-- Button Lightbox Script - End -->

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="664b4953e6b1ed5abd960b7c-|49" defer></script>
</div>

@endsection