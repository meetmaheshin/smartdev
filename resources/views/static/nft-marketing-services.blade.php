@extends('layouts.static')
    @section('title', 'NFT Marketing Services')
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
        color: #337ab7;
    }

    @media screen and (max-width: 767px) {
        table.visible-xs {
            display: table !important;
        }
    }

    a.launch {
        margin: 15px;
        padding: 11px 46px;
        background: #337ab7;
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
        background: #337ab7 !important;
        color: #fff !important;
        border-bottom: 1px solid #bbb;
        font-weight: bold;
    }

    a.launch:hover {
        color: #ffffff !important;
    }

    a[type="button"] {
        background: linear-gradient(#165ed7, #02115d) !important;
    }

    @media (max-width: 500px) {


        a[type="button"] {
            width: 90%;
            display: block;
            margin-top: 10px;
        }

        .horizontal-ul {
            width: 200%;

        }

        .sto-icons li {
            padding: 30px 100px;
        }

        .featured {
            border-radius: 0px !important;

        }

        .clients-grid-opacity>div {
            max-width: 100% !important;
        }
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

    .data table .pr_pack th {
        font-size: 20px;
        line-height: 1.4;
        text-transform: uppercase;
        background-image: linear-gradient(#337ab7, #12aed4);
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
        padding: 10px 5px;
        font-size: 16px;
        font-weight: bold;
        width: 50%;
    }

    .theme-color-bg {
        background: #337ab7 none repeat scroll 0 0 !important;
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

    table.table-striped.order_btn td {
        padding: 20px 0;
    }

    .banner_content {
        text-align: left;
    }

    .contentall a {
        margin-top: 20px;
    }

    .banner {
        background: url('{{ asset('images/nft_marketing/bg1.jpg') }}') top right #0091d0;
        background-size: cover;
        /*background: #ff3456;*/
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
        margin-top: 110px;
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

    .clients-grid-opacity>div {
        border: 1px solid #bbb;
    }

    a:hover {
        color: #337ab7 !important;
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
        /*            filter: invert(1);*/
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
        color: #337ab7;
        border: 2px solid #337ab7;
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
        background: linear-gradient(#337ab7, #337ab7);
    }

    .strategies-items1 {
        background: linear-gradient(90deg, #f1f1f1, #fff);
    }

    .strategies-items1 .icons {
        order: 2;
        margin-right: 15px;
    }

    .faq-content #accordion .panel-title>a.accordion-toggle::before,
    .faq-content #accordion a[data-toggle=collapse]::before {
        background: #337ab7;
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
        /* margin-top: 40px; */
        /*width: 100%;*/
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
        box-shadow: 2px 4px #337ab7;
        border: 3px solid #337ab7;
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
        /* content: "";
        background: url(images/lab/dot-shape.webp) #337ab7;
        position: absolute;
        height: 400px;
        right: 0;
        left: 0;
        top: 0;
        width: 100%;
        background-position: center top;
        background-size: contain;
        background-repeat: repeat;*/
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
        background-color: #337ab7f5;
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
        background: #337ab7;
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
        /*margin-top: 20px;*/
    }

    .box4 h3 {
        font-size: 20px;
        font-weight: 600;
        color: #200b52;
    }

    .box4 {
        background: #fff;
        text-align: center;
        background-size: 200%;
        background-position: top right;
        background-repeat: no-repeat;
        text-align: center;
        padding: 30px 10px 10px;
        margin: 0;
        /*min-height: 320px;*/
        margin-bottom: 10px;
        position: relative;
        border: 1px solid #337ab7;
        border-radius: 8px;
        box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    }

    .s-card-icon {
        width: 60px;
        margin: 0 auto 10px;
        font-size: 30px;
        color: #337ab7;
    }

    .img-size {
        height: 430px;
        width: 450px;
    }

    .fa-remove {
        color: red;
    }

    .fa-check {
        color: green;
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
        width: 25%;
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
        color: #337ab7;
    }

    .bgg {
        background-image: linear-gradient(179deg, #337ab7 0%, #19aec5 74%);
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
        box-shadow: 0px 14px 80px #337ab76b;
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
        background: #337ab7;
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
        background: #337ab7;
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
        background: #337ab7;
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
        color: #337ab7;
        font-weight: 700;
    }

    a.internal_link:hover {
        color: #337ab7 !important;
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
        background: linear-gradient(#165ed7, #02115d) !important;
        box-shadow: 2px 2px 0px #000;
    }

    .nec-btn:hover {
        transform: scale(1, 1) !important;
        color: #fff !important;
        background: #911028 !important;
    }

    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        margin-bottom: 15px !important;
        display: inline-block;
        margin-right: 13px !important;
    }

    .contentall a,
    a.home-talk-experts {
        padding: 10px 20px !important;
    }


    .serviceBox3 {
        padding: 5px 2px 5px 11px;
        position: relative;
        margin-bottom: 30px;
    }

    .serviceBox3 .service-icon3 {
        text-align: center;
        padding: 5px 0;
        border: 3px solid #337ab7;
        border-left: none;
        border-radius: 0 50px 50px 0px;
        position: relative;
    }

    .serviceBox3 .service-icon3:before {
        content: "";
        width: 12px;
        height: 12px;
        border: 3px solid #337ab7;
        border-radius: 50%;
        position: absolute;
        top: -7px;
        left: -12px;
    }

    .serviceBox3 .service-icon3 i {
        color: #fff;
        background: #337ab7;
        font-size: 30px;
        line-height: 60px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
    }

    .serviceBox3 .service-content3 {
        padding: 13px 0 20px 20px;
        margin: 10px 0 0 -11px;
        border: 3px solid #337ab7;
        border-top: none;
        border-right: none;
        border-radius: 0 0 0 15px;
        position: relative;
        min-height: 180px;
    }

    .serviceBox3 .service-content3:before,
    .serviceBox3 .service-content3:after {
        content: "";
        width: 50%;
        height: 50%;
        border: 3px solid #337ab7;
        border-right: none;
        border-bottom: none;
        border-radius: 14px 0 0 0;
        position: absolute;
        top: -13px;
        left: -3px;
    }

    .serviceBox3 .service-content3:after {
        background: #337ab7;
        width: 12px;
        height: 12px;
        border: none;
        border-radius: 50%;
        bottom: -7px;
        right: -2px;
        top: auto;
        left: auto;
    }

    .serviceBox3 .title3 {
        font-size: 18px;
        font-weight: 600;
        text-transform: capitalize;
        margin: 0 0 10px;
    }

    .serviceBox3 .description3 {
        font-size: 14px;
        letter-spacing: 0.5px;
        margin: 0;
    }

    .serviceBox3.red .service-icon3,
    .serviceBox3.red .service-icon3:before,
    .serviceBox3.red .service-content3,
    .serviceBox3.red .service-content3:before {
        border-color: #337ab7;
    }

    .serviceBox3.red .service-icon3 i,
    .serviceBox3.red .service-content3:after {
        background-color: #337ab7;
    }

    /*.serviceBox3.red .title3{ color: #337ab7; }*/
    .serviceBox3.golden .service-icon3,
    .serviceBox3.golden .service-icon3:before,
    .serviceBox3.golden .service-content3,
    .serviceBox3.golden .service-content3:before {
        border-color: #D99803;
    }

    .serviceBox3.golden .service-icon3 i,
    .serviceBox3.golden .service-content3:after {
        background-color: #D99803;
    }

    .serviceBox3.golden .title3 {
        color: #D99803;
    }

    .serviceBox3.blue .service-icon3,
    .serviceBox3.blue .service-icon3:before,
    .serviceBox3.blue .service-content3,
    .serviceBox3.blue .service-content3:before {
        border-color: #015486;
    }

    .serviceBox3.blue .service-icon3 i,
    .serviceBox3.blue .service-content3:after {
        background-color: #015486;
    }

    .serviceBox3.blue .title3 {
        color: #015486;
    }

    @media only screen and (max-width: 990px) {
        .serviceBox3 {
            margin: 0 0 30px;
        }
    }

    .intro_cnt img {
        border-radius: 10px;
        margin-top: 0px;
    }


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
        /*            min-height: 355px;*/
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

    .main-timeline7 .timeline7-icon {
        display: block;
        text-align: center;
        padding: 20px 0 55px 0;
        z-index: 1;
        position: relative;
    }

    .main-timeline7 .timeline7:nth-child(2n) .timeline7-icon {
        padding: 55px 0 20px 0;
    }

    .main-timeline7 .timeline7-icon:before {
        content: "";
        width: 1px;
        height: 75%;
        background: #060052;
        margin: 0 auto;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: -1;
        transition: all 0.3s ease 0s;
    }

    .main-timeline7 .timeline7:nth-child(2n) .timeline7-icon:before {
        bottom: auto;
        top: 0;
    }

    .main-timeline7 .timeline7:hover .timeline7-icon:before {
        background: #555;
    }

    .main-timeline7 .timeline7-icon i {
        width: 45px;
        height: 45px;
        line-height: 45px;
        border-radius: 50%;
        background: #060052;
        font-size: 14px;
        color: #fff;
        transition: all 0.3s ease 0s;
    }

    .main-timeline7 .timeline7:hover .timeline7-icon i {
        background: #555;
        animation: icon-load 2.5s ease 0s infinite;
    }

    .main-timeline7 .border {
        height: 15px;
        background: #060052;
        /*    margin-bottom: 20px;*/
        transition: all 0.3s ease 0s;
    }

    .main-timeline7 .timeline7:hover .border {
        background: #555;
    }

    .main-timeline7 .timeline7:first-child .border {
        border-radius: 4px 0 0 4px;
    }

    .main-timeline7 .timeline7:last-child .border {
        border-radius: 0 4px 4px 0;
    }

    .main-timeline7 .timeline7:nth-child(2n) .border {
        /*    margin: 18px 0 0 0;*/
    }

    .main-timeline7 .timeline7-content {
        padding: 15px;
        border: 1px solid #ddd;
        background: #f9f9f9;
        border-radius: 3px;
        transition: all 0.3s ease 0s;
    }

    .main-timeline7 .timeline7:hover .timeline-content {
        background: #555;
    }

    .main-timeline7 .title {
        font-size: 16px;
        font-weight: 700;
        color: #060052;
        text-transform: capitalize;
        margin: 0 0 10px 0;
        transition: all 0.3s ease 0s;
        text-align: center;
        line-height: normal;
    }

    .main-timeline7 .timeline7:hover .title {
        color: #000;
    }

    .timeline7-content .description {
        font-size: 14px;
        color: #888;
        margin: 0;
        transition: all 0.3s ease 0s;
    }

    .main-timeline7 .timeline7:hover .description {
        color: #fff;
    }

    @keyframes icon-load {
        0% {
            transform: rotate(-12deg);
        }

        8% {
            transform: rotate(12deg);
        }

        10% {
            transform: rotate(24deg);
        }

        18%,
        20% {
            transform: rotate(-24deg);
        }

        28%,
        30% {
            transform: rotate(24deg);
        }

        38%,
        40% {
            transform: rotate(-24deg);
        }

        48%,
        50% {
            transform: rotate(24deg);
        }

        58%,
        60% {
            transform: rotate(-24deg);
        }

        68% {
            transform: rotate(24deg);
        }

        100%,
        75% {
            transform: rotate(0deg);
        }
    }

    @media only screen and (max-width: 990px) {
        .main-timeline7 .timeline7 {
            margin-bottom: 20px;
        }
    }

    @media only screen and (max-width: 767px) {
        .main-timeline7 .timeline7-icon {
            padding-top: 0;
        }

        .main-timeline7 .timeline7:nth-child(2n) .timeline7-icon {
            padding-bottom: 0;
        }

        .main-timeline7 .border {
            margin-bottom: 10px;
        }

        .main-timeline7 .timeline7:nth-child(2n) .border {
            margin: 10px 0 0 0;
        }

        .main-timeline7 .timeline7-content {
            text-align: center;
        }
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
        background: #fff;
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
        background: #337ab7;
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
        background: linear-gradient(to right bottom, #337ab7 49%, transparent 50%);
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



    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }

    .teck .category-icon img {
        height: 60px !important;
    }

    .version-table {
        background-image: linear-gradient(to right, #337ab7, #337ab7, #337ab7) !important;
        position: relative;
    }

    .serviceBox1 {
        padding: 15px;
        position: relative;
        z-index: 1;
    }

    .serviceBox1 .service-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-bottom: 15px;
        text-align: center;
        background-color: #fff;
    }

    .serviceBox1 .service-icon i {
        line-height: 80px;
        transition: all 0.3s ease 0s;
    }

    .serviceBox1 .title1 {
        display: block;
        font-size: 22px;
        color: #ffffff;
        line-height: 30px;
        text-align: left;
        text-transform: capitalize;
        margin: 0 auto 5px;
        position: relative;
        font-weight: 600;
    }

    .serviceBox1 .description1 {
        font-size: 14px;
        color: #ffffff;
        line-height: 27px;
        text-align: left;
        margin-bottom: 0;
    }

    .shape-1 {
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: 0;
    }

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

    /*-- Technology --*/
    .technologies {
        background: #337ab7;
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

    .technologies ul li img {
        height: 60px;
    }

    .technologies ul li p {
        margin-bottom: 0 !important;
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
        color: #000;
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
        border: 4px solid #337ab7;
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
        background: #cdeaf582;
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


    /*-- Welcome Content --*/
    .welcome-content {
        background: #f2f2f2;
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
        border: 1px solid #fff;
        display: grid;
        grid-template-columns: 30% 70%;
        padding: 10px;
        align-items: center;
        text-align: left;
        color: #fff;
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


    .box,
    .sub_ff {
        position: relative
    }

    .sub_ff strong {
        display: block;
        font-size: 17px;
        color: #000000 !important;
        font-weight: 900;
        line-height: 30px
    }

    .dev {
        padding-left: 26px
    }

    .sub_ff {
        margin-top: 15px;
        margin-bottom: 0px
    }

    .sub_ff i {
        position: absolute;
        left: 0;
        color: #1758b2;
        line-height: 1.5;
        font-size: 19px
    }

    .sub_ff p {
        margin-bottom: 0.75em;
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

        .technologies ul li {
            width: 49%;
        }

        .technologies ul li img {
            width: 60px;
        }

        .technologies ul li {
            margin: 0px;
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
            <!-- <div class="banner-overlay"></div> -->
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ovr">
                                    <div itemscope itemtype="http://schema.org/CreativeWork">
                                        <div class="ban_tirt">
                                            {{-- <span style="font-size: 20px;">Promote Your NFT Project With Our</span> --}}
                                            <h1 itemprop="name">Elevate Your NFT Project with Our Premier NFT Marketing Agency</h1>
                                        </div>
                                        <p itemprop="text">Achieve unparalleled success in NFT promotion with our specialized marketing agency. We craft powerful strategies to capture the ideal audience and distinguish your NFTs in a crowded marketplace.</p>
                                        <div class="txt">
                                            <a rel="nofollow" href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                                style="border-radius: 30px !important;">Connect with Our Experts</a>
                                            <!-- <a href="#demo" class="nec-btn" id="cyz" style="border-radius: 30px !important;">View Demo</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 text-center"> <img class="magic" src="{{ asset('images/nft_marketing/banner-img.webp') }}" alt="NFT Marketing Agency" title="NFT Marketing Agency"> </div>
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
                background: #337ab7;
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
                background: #003693;
            }

            #counter-stats .stats:nth-child(2) {
                background: #12aed4;
            }

            #counter-stats .stats:nth-child(3) {
                background: #003693;
            }

            #counter-stats .stats:nth-child(4) {
                background: #12aed4;
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

        <div class="common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-th sec_tit underline">How Our NFT Marketing Experts Propel Your NFT Project Forward</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="text-center">Our NFT marketing experts harness the unique essence and culture of the NFT and crypto realms to propel your brand to extraordinary heights. With profound expertise in community building and brand evolution, we craft bespoke strategies that resonate deeply within this vibrant ecosystem. By leveraging our deep understanding of NFT communities, we ensure your project not only stands out but thrives in the competitive NFT and cryptocurrency landscape. We start by thoroughly immersing ourselves in your brand's identity and objectives, employing a strategic framework meticulously crafted to align with your vision. Our approach integrates cutting-edge growth strategies and industry best practices, ensuring a customized plan that optimizes your success from the outset.</p>
                    </div>
                    <div class="text-center cta_mine txt"> 
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
                        <a rel="nofollow" href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Speak with Our Experts</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('static.six-card-section', [
    'title' => 'Unlock Premier NFT Marketing Services', 
    'desc' => "Our all-encompassing NFT marketing services are designed to amplify your project's visibility, elevate brand recognition, and drive investment in your NFTs.",
    'cards' => [
        [
            'title' => 'Social Media Mastery',
            'desc' => "We deploy targeted marketing campaigns across leading social platforms to captivate and engage your audience, driving substantial traffic to your NFT project.",
            'image' => 'nft_marketing/icons/social-media.png'
        ],
        [
            'title' => 'Influencer Partnerships',
            'desc' => "We forge powerful collaborations with top influencers, leveraging their reach through compelling reviews and engaging content to promote your NFT marketplace.",
            'image' => "nft_marketing/icons/influencer.png"
        ],
        [
            'title' => 'Strategic Email Campaigns',
            'desc' => "We connect with potential investors via meticulously crafted emails and direct messages, introducing your NFT project and generating investment interest.",
            'image' => 'nft_marketing/icons/email-marketing.png'
        ],
        [
            'title' => 'Community Engagement',
            'desc' => "Through prominent forums and apps, we build and nurture dedicated communities around your NFT project, expanding your reach and attracting high-quality leads.",
            'image' => 'nft_marketing/icons/community-marketing.png'
        ],
        [
            'title' => 'Media and PR Excellence',
            'desc' => "Our team crafts and disseminates impactful articles across major blockchain media outlets, boosting your project's credibility and extending its reach.",
            'image' => 'nft_marketing/icons/press-release.webp'
        ],
        [
            'title' => 'Innovative Content Marketing',
            'desc' => "We develop creative content, including articles and blogs, to market and engage your audience across various online platforms.",
            'image' => 'nft_marketing/icons/content-marketing.png'
        ],
        [
            'title' => 'Telegram Strategy',
            'desc' => "Utilizing Telegram's robust marketing features, we enhance your project's visibility through targeted Groups and Channels.",
            'image' => 'nft_marketing/icons/telegram.png'
        ],
        [
            'title' => 'NFT Listing Services',
            'desc' => "We manage the listing of your NFTs on top marketplaces, ensuring maximum exposure to potential users and investors.",
            'image' => "nft_marketing/icons/listing.png"
        ],
        [
            'title' => 'Dynamic Video Marketing',
            'desc' => "Our expert team produces high-quality, visually striking videos to educate your audience about your NFTs and drive engagement.",
            'image' => 'nft_marketing/icons/video-marketing.png'
        ],
        [
            'title' => 'Advanced Growth Hacking',
            'desc' => "We analyze competitor strategies to replicate their successes, applying proven tactics to maximize the effectiveness of your NFT marketing.",
            'image' => 'nft_marketing/icons/growth.webp'
        ],
        [
            'title' => 'Reputation Management',
            'desc' => "We vigilantly monitor your online presence, promoting positive feedback and addressing any negative reviews to safeguard your brand’s reputation.",
            'image' => 'nft_marketing/icons/brand.png'
        ],
        [
            'title' => 'Precision Lead Generation',
            'desc' => "Employing cutting-edge lead generation techniques tailored specifically for the NFT industry, we deliver exceptional results and attract valuable prospects.",
            'image' => 'nft_marketing/icons/leads.webp'
        ],
    ],
])


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
        background: #fff;
        padding: 15px;
        border-left: 5px solid #337ab7
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


@include('static.left-aligned-image-card-section', [
    'title' => "Our Premier Strategies for NFT Promotion", 
    'desc' => "We offer a comprehensive suite of NFT promotion services, ensuring robust support throughout every phase of your project's lifecycle.",
    'cards' => [
        [
            'title' => 'NFT Press Releases',
            'desc' => "We generate powerful press releases to rapidly disseminate news about your NFTs, leveraging prominent NFT news platforms to announce upcoming launches with impact.",
            'image' => 'nft_marketing/icons/press-release.webp'
        ],
        [
            'title' => 'Strategic Media Buying',
            'desc' => "Our expert team devises a strategic media buying plan for NFTs, collaborating with top-tier marketing agencies to optimize the effectiveness of your campaign.",
            'image' => 'nft_marketing/icons/buying.webp'
        ],
        [
            'title' => 'Discord NFT Promotion',
            'desc' => "We expertly navigate Discord to promote your NFTs, engaging with leading communities and securing premium exposure opportunities.",
            'image' => 'nft_marketing/icons/discord.webp'
        ],
        [
            'title' => 'Community-Based NFT Promotion',
            'desc' => "We tap into targeted advertising within receptive NFT communities, maximizing your project's reach through strategic partnerships with community owners.",
            'image' => 'nft_marketing/icons/community-marketing.png'
        ],
    ],
])


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
</style>

<section class="welcome-content" style="background: #fff;">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h3 class="sec_tit underline text-center">Our Cutting-Edge Discord Marketing Solutions for NFT Triumph</h3>
                <p class="text-center">As a leading provider of Discord marketing solutions for NFTs, we deliver expert strategies designed to elevate your NFT venture. By tailoring our promotions to align with Discord's vibrant community, we ensure your project gains the attention it deserves. With NFTs becoming increasingly mainstream, Discord is poised to become a key platform for startups and established brands aiming to forge exclusive communities.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="lazy mt20" src="{{ asset('images/nft_marketing/img2.webp') }}" alt="NFT Marketing Services"
                    title="NFT Marketing Services">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="sub_ff" style="margin-top: 10px;">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <p class="dev"> <strong>Engage NFT Gamers:</strong> We craft targeted promotions to captivate enthusiasts of NFT games, driving engagement from avid gamers and collectors.</p>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <p class="dev"><strong>Boost Visibility:</strong> Leveraging Discord's tech-savvy user base, we amplify your NFT project to generate substantial traction and visibility.</p>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <p class="dev"><strong>Advanced Analytics:</strong> Our deep analytics and data segmentation empower brands to tailor their strategies based on real-time consumer engagement metrics.</p>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <p class="dev"><strong>Innovative Content Strategies:</strong> We employ a diverse range of content strategies across multiple platforms to enhance brand awareness and project visibility.</p>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <p class="dev"><strong>Consumer Insights:</strong> Through detailed tracking and analytics, we provide creators with valuable insights into their audience's reach and engagement.</p>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <p class="dev"><strong>Strategic Incentives:</strong> We design incentives to build momentum and create genuine hype, ensuring robust support for your NFT business.</p>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <p class="dev"><strong>Ongoing Community Engagement:</strong> By organizing regular AMA (Ask-Me-Anything) sessions, artists can maintain active and engaged communities around their projects.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('static.left-cut-image-card', [
    'title' => "Explore Our Comprehensive NFT Branding Process", 
    'desc' => "Our NFT branding services are designed to drive sales and elevate revenue for your marketplace, ensuring you meet your objectives with precision.",
    'cards' => [
        [
            'title' => "Strategic Ideation and Planning",
            'desc' => "We kick off by defining your NFT’s unique features and benefits, emphasizing how they align with and support your goals.",
            'image' => 'nft_marketing/icons/ideation.png'
        ],
        [
            'title' => 'Promotional Kickoff',
            'desc' => "Our strategy initiates with educating your target audience about the NFT’s concept, exclusive features, and key advantages.",
            'image' => 'nft_marketing/icons/promotions.webp'
        ],
        [
            'title' => 'NFT Market Development',
            'desc' => "In this phase, we generate excitement through pre-launch teasers and strategic partnerships with leading crypto influencers.",
            'image' => 'nft_marketing/icons/development.png'
        ],
        [
            'title' => "Public NFT Launch",
            'desc' => "We execute a robust multi-channel marketing campaign, utilizing influencers and targeted advertisements to maximize reach and impact.",
            'image' => 'nft_marketing/icons/launch.webp'
        ],
        [
            'title' => "Performance Monitoring and Reporting",
            'desc' => "We meticulously track campaign performance, providing comprehensive reports that detail growth metrics and project success.",
            'image' => 'nft_marketing/icons/report.png'
        ],
    ],
    'cta1_name' => 'Schedule A Meeting',
    'cta1_link' => '#',
    'cta2_name' => 'Talk with our Experts',
    'cta2_link' => '#'
])

@include('static.web3-clients', array(
    'title' => "Renowned <span style='color:#47b475;'>Web3 Projects</span> <br> We’ve Catapulted to Success",
    'desc' => "As a leading Web3 marketing authority, we are committed to delivering unparalleled services that propel projects to their target audiences through a diverse array of strategies. Our expertise has empowered premier Web3 enterprises, yielding extraordinary results and setting new benchmarks for success."
))

@include('static.left-border-hover-card', [
    'title' => 'Exclusive Advantages of Our NFT Advertising Services', 
    'desc' => "Our meticulously crafted NFT advertising solutions deliver exceptional benefits to elevate your business.",
    'cards' => [
        [
            'title' => 'Unleashing NFT Potential',
            'desc' => "We drive your digital assets to their peak with cutting-edge marketing strategies, ensuring the success of your NFT ventures.",
            'image' => "nft_marketing/icons/digital-assets.webp"
        ],
        [
            'title' => 'Global Reach Expansion',
            'desc' => "Our strategic approaches engage a worldwide audience, connecting your unique NFTs with passionate investors.",
            'image' => 'nft_marketing/icons/global.png'
        ],
        [
            'title' => 'Insightful Market Strategy',
            'desc' => "We offer profound market analysis and data-driven insights, equipping your NFT projects with strategic precision for optimal market success.",
            'image' => 'nft_marketing/icons/strategy.webp'
        ],
        [
            'title' => 'Cultivating a Dynamic Community',
            'desc' => "We specialize in nurturing vibrant, devoted communities that resonate with your brand, strengthening your NFT project’s identity and influence.",
            'image' => 'nft_marketing/icons/community-marketing.png'
        ]
    ],
])


@include('static.small-round-card-section',array(
   'title' => ' Partner with Our NFT Advertising Firm for Multifaceted Sector Expertise', 
   'desc' => "As a premier NFT advertising firm, we cater to a diverse array of industries, offering investors a wealth of options.",
   'card_title_1' => 'NFT Art Promotion',
   'card_desc_1' => "We specialize in showcasing NFT art across digital platforms, empowering artists to unveil innovative works and captivate varied audiences.",
   'card_image_1' => 'nft_marketing/icons/art.png',
   'card_title_2' => 'NFT Music Promotion',
   'card_desc_2' => "Our strategic marketing solutions unlock lucrative prospects for music-centric NFTs, facilitating swift and substantial profit generation.",
   'card_image_2' => 'nft_marketing/icons/music.png',
   'card_title_3' => 'NFT Marketplace Promotion',
   'card_desc_3' => "We enhance NFT marketplaces through dynamic digital channels and social media, fostering engagement between buyers and sellers of non-fungible tokens.",
   'card_image_3' => 'nft_marketing/icons/marketplaces.png',
   'card_title_5' => 'NFT Exchange Enhancement',
   'card_desc_5' => "Our cutting-edge digital marketing revitalizes NFT exchange platforms, employing trendsetting strategies tailored to effectively reach diverse market segments.",
   'card_image_5' => 'nft_marketing/icons/exchange.png',
   'card_title_6' => 'NFT Real Estate Advertising',
   'card_desc_6' => "We propel NFT real estate ventures with advanced digital marketing techniques, surpassing traditional approaches and maximizing online profitability.",
   'card_image_6' => 'nft_marketing/icons/real-estate.png',
   'card_title_7' => 'NFT Game Marketing',
   'card_desc_7' => "Leverage our expertise to implement intelligent SEO and strategic marketing initiatives, driving exceptional ROI for gaming-related NFTs.",
   'card_image_7' => 'nft_marketing/icons/game.png',
))


<div class="intro_cnt common_spacing" style="background: #337ab7;">
    <div class="container">
        <div class="row">
            <div class="sec_tit underline text-center" style="width: 100%">
                <h3 class="text-white">Achieve Unmatched Success with Our NFT Marketing Expertise and Proven Promises</h3>
            </div>
            <p class="text-center text-white">As a distinguished provider of NFT marketing services, we deliver on our promises with actionable strategies designed to propel your NFT business to the forefront.
                <br><br>
            When we make commitments, we ensure they are met with absolute precision. Our team transforms existing marketing approaches to elevate your NFT venture to new heights.
            </p>

        </div>
        <div class="version-table">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-11">
                    <div class="row container-center">
                        <div class="col-md-4 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/nft_marketing/icons/targeted-audience.webp') }}" style="width: 64px; margin-top: 8px"></i>
                                </div>
                                <h4 class="title1">Targeted Audience Engagement</h4>
                                <p class="description1">Our strategic marketing ensures your NFTs reach the ideal audience with pinpoint accuracy. While broadening your NFT’s exposure can be challenging, our experts execute it flawlessly.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/nft_marketing/icons/leads.webp') }}" style="width: 64px; margin-top: 8px"></i>
                                </div>
                                <h4 class="title1">Exceptional Lead Generation</h4>
                                <p class="description1">Our innovative marketing strategies not only boost engagement but also generate high-quality leads, positioning your NFT business as a leader in the industry.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 equalize">
                            <div class="serviceBox1">
                                <div class="service-icon">
                                    <i class><img src="{{ asset('images/nft_marketing/icons/non-fungible.webp') }}" style="width: 64px; margin-top: 8px"></i>
                                </div>
                                <h4 class="title1">Powerful Branding</h4>
                                <p class="description1">In the competitive NFT landscape, effective branding is crucial. Our services build a robust brand identity around your NFT venture, driving significant success.</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="shape-1">
                <img src="images/nft_marketing/icons/arw-shape.webp" alt>
            </div>
        </div>

        <!-- <div class="text-center cta_mine txt"> <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> <a rel="nofollow" href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with our Experts</span></a> </div> -->


        <div class="clearfix"></div>

        <div class="text-center cta_mine txt"> 
            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                href="#" data-color-override="false"
                data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
            <a rel="nofollow" href="{{ url('consultation') }}"
                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk With Our Experts</span></a>
        </div>

    </div>
</div>

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
            <div class="pricingTable-header" style="width: 100%">
                <h2 class="sec_tit underline text-center">Exclusive KOL Marketing Packages</h2>
            </div>
            <div class="container-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                    <div class="pricingTable purple">
                        <div class="price-value"> Starter Plan <span>$10,000/Month</span></div>
                        <ul class="pricing-content">
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Strategic KOL Content Development & Promotion</li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Collaborations:</b>
                                <br>
                                Partner with 3-5 Micro-KOLs </li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion Channels:</b>
                                <br>
                                <b>- Twitter:</b> 3 KOLs will craft promotional tweets for your brand.<br>
                                <b>- Telegram:</b> 5+ posts across channels and groups. <br>
                                <b>- YouTube:</b> 1 KOL video.
                            </li>

                        </ul>
                        <div class="pricingTable-signup">
                            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                style="font-size: 18px;" href="{{ url('consultation') }}">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                    <div class="pricingTable purple">
                        <div class="price-value"> Growth Plan <span>$30,000/Month</span></div>
                        <ul class="pricing-content">
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Strategic KOL Content Development & Promotion</li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Collaborations:</b>
                                <br>
                                Partner with 5-10 Mid-Tier KOLs </li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion Channels:</b>
                                <br>
                                <b>- Twitter:</b> 5 KOLs will deliver targeted promotional tweets. <br>
                                <b>- Telegram:</b> 15+ posts across channels and groups. <br>
                                <b>- YouTube:</b> 2 KOL videos.
                            </li>

                        </ul>
                        <div class="pricingTable-signup">
                            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                style="font-size: 18px;" href="{{ url('consultation') }}">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                    <div class="pricingTable purple">
                        <div class="price-value"> Elite Package <span>$50,000/One-Time</span></div>
                        <ul class="pricing-content">
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Strategic KOL Content Development & Promotion</li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Collaborations:</b>
                                <br>
                                Engage 5-10 Mid-Tier and Top-Tier KOLs </li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion Channels:</b><br>
                                <b>- Twitter:</b> 10 KOLs will post promotional content.<br>
                                <b>- Telegram:</b> 30+ posts across channels and groups. <br>
                                <b>- YouTube:</b> 3 KOL videos.<br>
                                <b>- Instagram:</b> 5+ KOL posts.
                            </li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Additional Services:</b><br>
                                <b>- Giveaways or Contests:</b> Managed by KOLs. <br>
                                <b>- Twitter Spaces:</b> 2 sessions with KOLs to discuss and promote your brand.
                            </li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                style="font-size: 18px;" href="{{ url('consultation') }}">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                    <div class="pricingTable purple">
                        <div class="price-value"> Supreme Influence Suite <span>$100,000/One-Time</span></div>
                        <ul class="pricing-content">
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Strategic KOL Content Development & Promotion</li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Collaborations:</b>
                                <br>
                                Engage 10-30 KOLs across Micro, Macro, and Top-Tier levels </li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion Channels:</b><br>
                                <b>- Twitter:</b> 15 KOLs will drive brand visibility with tweets.<br>
                                <b>- Telegram:</b> 50+ posts across channels and groups.<br>
                                <b>- YouTube:</b> 5+ KOL videos.<br>
                                <b>- Instagram:</b> 10+ KOL posts.
                            </li>
                            <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Additional Services:</b><br>
                                <b>- Giveaway or Contests:</b> Managed by KOLs. <br>
                                <b>- Hashtag Campaign:</b> To increase brand visibility. <br>
                                <b>- Twitter Spaces:</b> 3 sessions with KOLs to engage and promote your brand.
                            </li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                style="font-size: 18px;" href="{{ url('consultation') }}">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">
    .featured {
        background-color: #100f0f;
        width: 100%;
        max-width: 1630px;
        margin: 0 auto;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 0 0 0 80px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        overflow: hidden;
        border-color: transparent
    }

    @media(max-width:992px) {
        .featured {
            padding: 72px 0;
            max-width: 100%;
            border-radius: 40px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: unset;
            -ms-flex-align: unset;
            align-items: unset
        }
    }

    .featured_head {
        width: 100%;
        max-width: 310px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 90px
    }

    @media(max-width:992px) {
        .featured_head {
            max-width: 100%;
            text-align: left;
            padding-left: 16px;
            padding-right: 16px;
            margin: 0 auto 47px
        }
    }

    .featured_head p {
        font-size: 18px;
        line-height: 27px;
        font-weight: 400;
        color: #fff;
        opacity: .6
    }

    @media(max-width:992px) {
        .featured_head p {
            font-size: 16px;
            line-height: 25.6px;
            font-weight: 300
        }
    }

    .featured_content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        overflow-x: hidden;
        max-height: 739px;
        margin-top: -10px;
        margin-bottom: -10px;
        overflow-y: hidden
    }

    @media(max-width:992px) {
        .featured_content {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: 0;
            margin-bottom: 0
        }
    }

    .featured_content_slider {
        width: 100%;
        min-width: 470px
    }

    @media(max-width:992px) {
        .featured_content_slider .slick-track {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            gap: 20px
        }

        .featured_content_slider .slick-slide {
            height: inherit !important
        }

        .featured_content_slider .slick-slide div {
            height: 100%
        }
    }

    .featured_content_slider_box {
        background: #fff;
        padding: 40px;
        border-radius: 20px
    }

    @media(max-width:992px) {
        .featured_content_slider_box {
            width: 100%;
            max-width: 100%
        }
    }

    .featured_content_slider_box picture {
        width: 100%;
        max-width: 180px;
        display: inline-block
    }

    .featured_content_slider_box h3 {
        font-size: 18px;
        line-height: 24px;
        font-weight: 500;
        width: 100%;
        max-width: 302px;
        color: #111;
        margin-bottom: 136px
    }

    @media(max-width:992px) {
        .featured_content_slider_box h3 {
            font-size: 16px;
            line-height: 24px;
            font-weight: 500
        }
    }

    .featured_content_slider_card {
        background: rgba(255, 255, 255, 0.1);
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        width: 100%;
        height: 90px;
        margin-top: 20px;
        margin-bottom: 10px
    }

    @media(max-width:992px) {
        .featured_content_slider_card {
            height: auto;
            max-width: 100%;
            min-width: 250px;
            margin: 0
        }
    }

    .featured_content_slider.slider_second {
        margin-left: 20px;
        margin-right: 20px
    }

    @media(max-width:992px) {
        .featured_content_slider.slider_second {
            margin-left: 0;
            margin-right: 0;
            margin-top: 20px
        }
    }

    .featured_content_slider.slider_threed .featured_content_slider_card {
        margin-top: 10px;
        margin-bottom: 10px
    }

    @media(max-width:992px) {
        .featured_content_slider.slider_threed {
            display: none
        }
    }

    .featured .head_title {
        font-size: 3rem;
        color: #fff;
        margin-bottom: 14px;
    }
</style>

<section class="service-section web-servic pad-tb">
    <div class="container">
        <div class="section-header underline text-center">
            <h2 class="title-th">Why Choose Us for Premier NFT Marketing Solutions?</h2>
        </div>
        <div class="col-lg-12">
            <p class="text-center"></p>
        </div>
        <div class="row upset link-hover shape-num justify-content-center container-center">
            <div class="col-lg-3 col-sm-3 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img class="lazy" data-src="images/nft_marketing/icons/businesses.webp">
                    </div>
                    <h3>Unmatched Results</h3>
                    <p>As a leading force in NFT marketing, we consistently deliver strategies that drive substantial increases in traffic, leads, sales, and ROI for your NFT business.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img data-src="images/nft_marketing/icons/tools.webp" class="lazy"></div>
                    <h3>Cutting-Edge Tools</h3>
                    <p>We utilize the latest technologies and advanced tools to ensure your marketing efforts are at the forefront of blockchain and NFT innovations.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img data-src="images/nft_marketing/icons/pricing.webp" class="lazy"></div>
                    <h3>Exceptional Value</h3>
                    <p>Our services are priced competitively, offering high-quality marketing solutions tailored to fit every budget and need, ensuring optimal impact.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 mt30 shape-loc wow fadeInUp equalize" data-wow-delay="0.6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="box4"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <div class="s-card-icon"><img data-src="images/nft_marketing/icons/experts.webp" class="lazy"></div>
                    <h3>Elite Expertise</h3>
                    <p>Our team is composed of highly skilled digital marketing professionals with deep expertise in blockchain and NFT projects, dedicated to crafting powerful and effective strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
    .category-item.aos-item1:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }

    .bg-dark-half-md1 {
        background: #337ab7;
        padding: 100px 0;
    }

    .space-pt {
        padding: 100px 0 0;
    }

    .tech-padding {
        padding-bottom: 100px;
    }

    /*.Package_list, .bg-dark-half-md {
    width: 100%;
    display: inline-block;
}*/
    .category-grid-style-04 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        background: #2a5b80;
        -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        border-radius: 5px;
    }

    .teck .category-grid-style-04 .category-item {
        padding: 30px;
        text-align: center;
        width: 14.27%;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
        position: relative;
        cursor: pointer;
    }

    .teck .category-grid-style-04 .category-item {
        padding: 10px !important;
    }

    .teck .category-grid-style-04 .category-item:before {
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
        transition: .3s ease-in-out;
    }

    .teck .category-grid-style-04 .category-item {
        padding: 30px;
        text-align: center;
        width: 24.90%;
        border-right: 1px solid #337ab7;
        border-bottom: 1px solid #337ab7;
        position: relative;
        cursor: pointer;
    }

    .teck .category-grid-style-04 .category-item .category-icon {
        color: #333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px;
        position: relative;
        z-index: 2;
    }

    .teck .category-grid-style-04 .category-item .category-icon {
        margin-bottom: 0 !important;
    }

    .teck .category-grid-style-04 .category-item .category-title {
        color: #fff;
        font-weight: 700;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
        font-size: 16px;
    }

    .teck .category-icon img {
        padding: 5px;
    }

    .teck .category-icon img {
        height: 80px !important;
    }

    @media (min-width: 320px) and (max-width: 768px) {
        .category-grid-style-04 .category-item {
            width: 33% !important;
        }

        .teck .category-grid-style-04 .category-item {
            width: 50% !important;
        }

    }


    }
</style>


<style type="text/css">
    .main-timeline {
        font-family: 'Poppins', sans-serif;
        padding: 25px 0;
    }

    .main-timeline:after {
        content: '';
        display: block;
        clear: both;
    }

    .main-timeline:before {
        content: '';
        background: linear-gradient(to right, #fff 50%, #dfdfdf 65%);
        height: 100%;
        width: 25px;
        transform: translateX(-50%);
        position: absolute;
        left: 50%;
        top: 0;
    }

    .main-timeline .timeline {
        width: calc(50% + 63px);
        margin: 0 0 30px;
        float: right;
        position: relative;
    }

    .main-timeline .timeline-content {
        color: #666;
        background: linear-gradient(to left, #337ab7 65%, #117ccd);
        text-align: center;
        min-height: 120px;
        padding: 20px 30px 20px 160px;
        border-radius: 100px;
        display: block;
        position: relative;
        z-index: 1;
    }

    .main-timeline .timeline-content:hover {
        text-decoration: none;
    }

    .main-timeline .timeline-content:before {
        content: '';
        background: #fff;
        border-radius: 100px 0 0 100px;
        position: absolute;
        left: 130px;
        top: 0;
        bottom: 0;
        right: 0;
        z-index: -1;
    }

    .main-timeline .timeline-icon {
        color: #0a0d94;
        font-size: 45px;
        line-height: 100px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        box-shadow: -3px 3px 7px rgba(0, 0, 0, 0.3);
        transform: translateY(-50%);
        position: absolute;
        left: 15px;
        top: 50%;
    }

    .main-timeline .timeline-icon:before {
        content: '';
        background-color: #fff;
        border-radius: inherit;
        box-shadow: inherit;
        position: absolute;
        left: 10px;
        top: 10px;
        bottom: 10px;
        right: 10px;
        z-index: -1;
    }

    .main-timeline .title {
        color: #337ab7;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0 0 5px;
        text-align: left;
    }

    .main-timeline .titleev {
        color: #337ab7;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0 0 5px;
        text-align: right;
    }

    .main-timeline .descriptionev {
        font-size: 13px;
        color: #333;
        letter-spacing: 1px;
        line-height: 20px;
        margin: 0;
        text-align: right;
    }

    .main-timeline .description {
        font-size: 13px;
        color: #333;
        letter-spacing: 1px;
        line-height: 20px;
        margin: 0;
        text-align: left;
    }

    @media screen and (max-width:320px) {
        .main-timeline .descriptionev {
            text-align: center;
        }

        .main-timeline .description {
            text-align: center;
        }

        .main-timeline .titleev {
            text-align: center;
        }

        .main-timeline .title {
            text-align: center;
        }


    }

    .main-timeline .timeline:nth-child(even) {
        float: left;
    }

    .main-timeline .timeline:nth-child(even) .timeline-content {
        padding: 20px 160px 20px 30px;
    }

    .main-timeline .timeline:nth-child(even) .timeline-content:before {
        border-radius: 0 100px 100px 0;
        left: 0;
        right: 130px;
    }

    .main-timeline .timeline:nth-child(even) .timeline-icon {
        left: auto;
        right: 15px;
    }

    .main-timeline .timeline:nth-child(4n+2) .timeline-content {
        background: linear-gradient(to right, #337ab7 65%, #117ccd);
    }

    .main-timeline .timeline:nth-child(4n+2) .timeline-icon,
    .main-timeline .timeline:nth-child(4n+2) .title {
        color: #0a0d94;
    }

    .main-timeline .timeline:nth-child(4n+3) .timeline-content {
        background: linear-gradient(to left, #337ab7 65%, #117ccd);
    }

    .main-timeline .timeline:nth-child(4n+3) .timeline-icon,
    .main-timeline .timeline:nth-child(4n+3) .title {
        color: #337ab7;
    }

    .main-timeline .timeline:nth-child(4n+4) .timeline-content {
        background: linear-gradient(to right, #337ab7 65%, #117ccd);
    }

    .main-timeline .timeline:nth-child(4n+4) .timeline-icon,
    .main-timeline .timeline:nth-child(4n+4) .title {
        color: #0a0d94;
    }

    @media screen and (max-width:767px) {
        .main-timeline:before {
            display: none;
        }

        .main-timeline .timeline {
            width: 100%;
        }
    }

    @media screen and (max-width:576px) {

        .main-timeline .timeline-content,
        .main-timeline .timeline:nth-child(even) .timeline-content {
            padding: 145px 20px 20px;
            border-radius: 50px;
        }

        .main-timeline .timeline-content:before,
        .main-timeline .timeline:nth-child(even) .timeline-content:before {
            top: 125px;
            right: 0;
            left: 0;
            border-radius: inherit;
        }

        .main-timeline .timeline-icon,
        .main-timeline .timeline:nth-child(even) .timeline-icon {
            transform: translateY(0) translateX(-50%);
            left: 50%;
            top: 10px;
            right: auto;
        }
</style>



<style type="text/css">
    /*------------ Tech Stack -----------*/
    .tech-stack {
        padding: 60px 0px;
    }

    .tech-stack ul {
        display: flex;
        padding: 10px;
        justify-content: center;
        margin-bottom: 10px;
    }

    .tech-stack .nav-stacked>li {
        background: #0b4599;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(to right, #00aaff, #40f599);
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
        height: 120px;
    }

    /*.tech-stack h4{text-align: center; background: #234aa9; font-size: 20px; font-weight: bold; padding: 10px; margin-bottom: 0px; color: #fff;}*/
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


    /*------------ Tech Stack -----------*/
    /*.tech-stack{padding: 60px 0px;}
.tech-stack ul{display: flex; padding: 10px; justify-content: center; margin-bottom:10px;}
.tech-stack .nav-stacked>li{background: #0b4599; margin: 2px; border-radius: 5px; color: #fff;}
.tech-stack .nav li.active a, .tech-stack .nav li a:hover{background-image: linear-gradient(to right, #00aaff, #40f599); margin: 5px;}
.tech-stack .nav li a p{color: #fff !important; margin-bottom: 0;}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{border: 0; color: #fff;}
.tech-stack ul img{height: 60px;}
.tech-stack h4{text-align: center; background: #234aa9; font-size: 20px; font-weight: bold; padding: 10px; margin-bottom: 0px; color: #fff;}
.technology ul{flex-wrap: wrap;}
.technology ul li{width: 18%; padding: 10px; margin: 1%; text-align: center; border: 1px solid #B0B0B0;}*/

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
        width: 31%;
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

    @media only screen and (min-width:320px) and (max-width:767px) {
        .steps li {
            width: 100%
        }

        .client-list li {
            width: 31%;
            margin: 15px 1%;
        }
    }

    @media only screen and (min-width:768px) and (max-width:899px) {
        .steps li {
            width: 31%
        }
    }
    }

    @media only screen and (min-width:1024px) and (max-width:1200px) {
        .steps ul {
            width: 100%;
            margin: 0 auto
        }

        .steps li {
            width: 31%
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

        .technologies ul li {
            width: 49%;
        }

        .technologies ul li img {
            width: 60px;
        }

        .technologies ul li {
            margin: 0px;
        }

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


{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => "What Are NFTs?",
            'ans' => "NFTs, or Non-Fungible Tokens, are unique digital assets that represent ownership or proof of authenticity for specific items or content, often leveraging blockchain technology for verification."
        ],
        [
            'ques' => "How Does NFT Marketing Work?",
            'ans' => "NFT marketing involves strategies to promote NFTs through various channels such as social media, influencers, and online communities. The goal is to generate interest, attract buyers, and increase visibility."
        ],
        [
            'ques' => "What Are the Benefits of NFT Marketing?",
            'ans' => "NFT marketing can amplify brand exposure, engage targeted audiences, and drive sales by leveraging the unique attributes of NFTs to create value and scarcity. It can also foster community engagement and build brand loyalty."
        ],
        [
            'ques' => "How Can I Market My NFT Effectively?",
            'ans' => "To market your NFT effectively, focus on building a strong online presence through social media, collaborating with influencers, creating compelling content, and engaging with relevant communities to generate interest and credibility."
        ],
        [
            'ques' => "Are There Any Risks Associated with NFT Marketing?",
            'ans' => "Yes, risks include market volatility, potential for scams, and the challenge of standing out in a saturated market. It’s crucial to be aware of these risks and implement strategies to mitigate them."
        ],
        [
            'ques' => "How Can I Stand Out in a Crowded NFT Market?",
            'ans' => "To stand out, focus on unique and high-quality content, build a strong personal or brand story, engage with communities, and leverage strategic partnerships with influencers to differentiate your NFT from others."
        ],
        [
            'ques' => "Can I Market Physical Items as NFTs?",
            'ans' => "Yes, physical items can be marketed as NFTs by creating digital representations or certificates of authenticity linked to the physical item. This approach can enhance the item's value and appeal in the digital space."
        ],
        [
            'ques' => "What Are Some Popular NFT Marketplaces?",
            'ans' => "Popular NFT marketplaces include OpenSea, Rarible, and Foundation. These platforms offer diverse options for buying, selling, and discovering NFTs, catering to various interests and types of digital assets."
        ],
        [
            'ques' => "How Do Royalties Work in NFT Marketing?",
            'ans' => "Royalties in NFT marketing allow creators to earn a percentage of sales each time their NFT is resold. This feature provides ongoing revenue opportunities and incentivizes creators to produce high-quality work."
        ],
        [
            'ques' => "Is NFT Marketing Sustainable in the Long Term?",
            'ans' => "NFT marketing's sustainability depends on the market's evolution and the continuous value of NFTs. As long as innovation and demand for digital assets persist, NFT marketing can remain viable and effective."
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