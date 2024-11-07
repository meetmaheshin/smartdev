@extends('layouts.static')
    @section('title', 'Solana NFT Marketplace Development')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
@section('content')

<style type="text/css">
    .top-header p{margin-bottom:0;color:#fff;display:inline-block;width:auto}.lc-1ip30wz{height:30px!important}.top-header{background:#378658;padding:10px}@-webkit-keyframes breathing{0%{-webkit-transform:scale(1);transform:scale(1)}25%{-webkit-transform:scale(1.1);transform:scale(1.1)}50%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes breathing{0%{-webkit-transform:scale(1);transform:scale(1)}25%{-webkit-transform:scale(1.1);transform:scale(1.1)}50%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(1);transform:scale(1)}}.top-header .breathing_effect{-webkit-animation:breathing 1s infinite ease-in-out;animation:breathing 1s infinite ease-in-out;-webkit-font-smoothing:antialiased;transition:1s;display:inline-block;width:auto}.top-header .breathing_effect a{background:#f44336;color:#fff;padding:5px 10px;border-radius:0;margin-left:15px}.top-header .breathing_effect a:hover{color:#fff!important}@media (max-width:1199px){.header .main-menu>li a{padding:0 5px}}@media (max-width:550px){.top-header p{width:60%;text-align:right;vertical-align:middle}.top-header .breathing_effect{display:inline-block;width:40%}}
    .guardian-p{
      text-align: center;font-size: 12px;
    }
    /*-- Client section --*/
    .teck .category-grid-style-01 .category-item{padding: 10px !important;}
    .category-item.aos-item .text-center{font-size: 12px !important; margin-bottom: 0px !important;} 
    .teck .category-grid-style-01 .category-item .category-icon{margin-bottom: 0 !important;}
    .teck .category-icon img{height: 80px !important;}
    /*-- Client section --*/
    </style>

<style type="text/css">
    body{
        color: #000000;
        font-size:15px;
    }
    h1, h2, h3, h4, h5, h6 {
        margin: 0;
        padding: 0;
        color: #000000;
        font-weight: 700;
        letter-spacing: 1.5px;
    }
    .large-header{
        background-color: rgb(0 0 0 / 60%);
    }
    .rounded-corner{
        border-radius: 10px;
    }
    .banner_btn{
        padding: 15px;
    }
    .contentall{
        padding-top: 80px;
    }

    @media screen and (max-width: 700px){
        .category-grid-style-01 .category-item{
            width: 100%!important;
        }
    }
    @media screen and (min-width: 701px) and (max-width: 1000px) { 
        .category-grid-style-01 .category-item{
            width: 50%!important;
        }
    }
    @media screen and (min-width: 1401px){
        .category-grid-style-01 .category-item{
            width: 20%!important;
        }
    }
    .choose_btn {
        width: 100%;
    }
    .live_btn{
        padding: 20px 10px;
    }
    .pro-icon img {
        width: 149px;
    }
    
    .center {
        text-align: center;
    }
    
    .bglight {
        background-color: #f2f2f2;
    }
    
    
    .bglight:hover {
        background-color: #fff;
        box-shadow: 1px 1px 10px #e6e4e4;
        cursor: pointer;
        transform: scale(1.1);
        transition: .4s all;
        z-index: 1;
    }
    
    #our-team .connect-with {
        text-align: center;
    }
    
    .feature-custom {
        background: #ffffff;
        margin-bottom: 25px;
        padding: 25px;
        text-align: center;
        min-height: 253px;
    }
    
    .industries-box img {
        height: 70px;
    }
    
    .form-right input.submit_send {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #47b475 !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: bold !important;
        padding: 10px 0 !important;
    }
    
    .pro-box {
        display: inline-flex;
        width: 100%;
    }
    
    .pro-details h6 {
        line-height: 1;
        margin-top: 6px;
        font-size: 16px;
    }
    
    .industries-box {
        text-align: center;
        background: #fff;
        padding: 20px 10px;
        border-left: 2px solid #47b475;
        border-right: 2px solid #47b475;
        border-radius: 8px;
        max-width: 240px;
        margin: 0 auto 30px;
    }
    
    .industries-box h6 {
        font-size: 15px;
        color: #000;
    }
    
    .why-adit-list {
        overflow: hidden;
    }
    
    .why-adit-list .icon {
        width: 10%;
        float: left;
    }
    
    .why-adit-list .content {
        float: right;
        width: 87%;
    }
    
    .why-adit-list h3 {
        font-size: 18px;
        margin-bottom: 5px;
    }
    
    .sm-method .icon img {
        width: 45px;
    }
    
    .sm-method {
        margin: 30px 0;
    }
    
    .sm-method h3 {
        font-size: 16px;
        color: #333;
        margin-bottom: 7px;
        margin-top: 15px;
    }
    
    .sm-method .icon {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border: 1px solid #ccc;
        line-height: 80px;
        border-radius: 50%;
    }
    
    .light-grey {
        background: #fbfbfbe6;
    }
    
    .divcenter {
        float: none;
        margin: 0 auto;
    }
    
    .panel .panel-title a::after {
        content: "-";
        position: absolute;
        right: 5px;
        background: #47b475;
        width: 25px;
        height: 25px;
        text-align: center;
        border-radius: 50%;
        font-size: 22px;
        line-height: 24px;
        color: #fff;
    }
    
    .panel .panel-title a.collapsed::after,
    .panel .panel-title a:hover::after {
        content: "+";
        position: absolute;
        right: 5px;
        background: #47b475;
        width: 25px;
        height: 25px;
        text-align: center;
        border-radius: 50%;
        font-size: 22px;
        line-height: 24px;
        color: #fff;
    }
    
    .accordion-toggle {
        padding: 8px 15px;
        display: block;
    }
    
    .panel-heading {
        padding: 0;
    }
    
    .call-btn {
        padding: 8px 25px !important;
    }
    
    .technology-sec {
        padding: 60px 0;
    }
    
    .technology-sec .row + .row {
        margin-top: 50px;
    }
    
    .technology-types.technology-types-wm ul li:nth-child(4) ~ li {
        display: none;
    }
  
    .large-header {
        height: inherit !important;
    }
    
    .mt-15 {
        margin-top: 15px;
    }
    
    .mt-35 {
        margin-top: 35px;
    }
    
    .mt-55 {
        margin-top: 55px;
    }
    
    .features_content {
        position: relative;
    }
    
    .img-fluid {
        max-width: 100%;
        height: auto;
    }
    
    .common_style .line1 {
        position: relative;
        text-transform: uppercase;
        letter-spacing: 2px;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
    
    .common_style p {
        margin: 0;
    }
    
    .common_style h3 {
        font-size: 36px;
        color: #222;
        margin-bottom: 20px;
    }
    
    .common_style .primary_btn {
        margin-top: 35px;
    }
    
    .big_features .common_style p {
        padding-right: 20px;
    }
    
    .big_features .common_style p + ul {
        margin-top: 15px;
    }
    
    .big_features .common_style ul + p {
        margin-top: 15px;
    }
    
    .big_features .common_style ul li {
        position: relative;
        padding-left: 22px;
    }
    
    .big_features .common_style ul li + li {
        margin-top: 7px;
    }
    
    .big_features .common_style ul li i {
        color: #47b475;
        font-size: 15px;
        margin-right: 3px;
        position: absolute;
        left: 0;
        top: 5px;
    }
    
    .bottom-features {
        margin-top: 120px;
    }
    
   
    section.section_gap.big_features {
        padding: 60px 0;
        border-top: 1px solid #f2f2f2;
    }
    
    .common_style .line1:after {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 1px;
        width: 50px;
        content: "";
        background: #47b475;
    }
    
    .tab-content {
        background-color: #ffffff;
        padding: 40px;
        min-height: 350px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5), 0 6px 6px rgba(0, 0, 0, 0.7);
        border-radius: 3px;
    }
    
    .box {
        position: relative;
        border-radius: 3px;
        padding: 20px;
        min-height: 300px;
        background-color: #fff;
    }
    
    .box:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1;
        top: -20px;
        transform: rotate(-8deg);
        left: 20px;
        background-color: transparent;
        box-shadow: -40px 0 30px rgba(0, 0, 0, 0.3);
    }
    
    .box:after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1;
        top: -20px;
        transform: rotate(8deg);
        right: 20px;
        background-color: transparent;
        box-shadow: 40px 0 20px rgba(0, 0, 0, 0.3);
    }
    
    
    
    .pad50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }
    
    
    
    .section-title hr {
        background: #fff!important;
    }
    
    @media (min-width: 768px) {
        .offset-lg-1 {
            margin-left: 8.333333%;
        }
        .offset-lg-2 {
            margin-left: 16.666667%;
        }
    }
    
    @media only screen and (max-width: 768px) {
        .ourmarquee .p-100 {
            padding: 0px 0px;
        }
        
        .technology-types.technology-types-wm ul li:nth-child(4) ~ li {
            display: block;
        }
        .col-md-3.mob_none {
            display: none;
        }
        ul.nav li.active::before {
            display: none;
        }
    }
    
    #features {
        background: #eee;
    }
    
    #features .card {
        border-color: #f2f2f2;
        border-radius: 3px;
        padding: 25px;
        background: #fff;
        text-align: center;
        color: #fff;
        transition: 0.3s ease-in-out;
        /* height: 100%; */
        position: relative;
        overflow: hidden;
    }
    
    .card-big-shadow {
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
    
    #features .card:hover {
        background: #f8f9fa;
    }
    
    #features .card:before {
        background: #313544;
        content: "";
        display: block;
        width: calc(100% + 2px);
        height: calc(100% + 2px);
        position: absolute;
        z-index: 0;
        top: calc(-100% + -4px);
        left: calc(-100% + -4px);
        border-radius: 10px;
        border: 1px solid #313544;
        transition: .2s ease;
        visibility: hidden;
        opacity: 0;
    }
    
    #features .card:hover i {
        transition: 0.5s;
    }
    
    #features .card:hover span.fea-icon {
        transition: 0.5s;
    }
    
    #features .card span.fea-icon {
        display: inline-block;
        width: 100px;
        height: 70px;
        position: relative;
        padding: 10px;
        margin: 0 auto;
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        transition: 0.5s;
    }
    
    #features .card span.fea-icon i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding-top: 0;
        color: #47b475;
    }
    
    #features .card span.fea-icon img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding-top: 0;
        color: #fff;
        max-height: 50px;
        max-width: 50px;
    }
    
    #features .card:hover span.fea-icon i {}
    
    #features .card span.fea-icon span.flat {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding-top: 0;
        color: #f82249;
    }
    
    #features .card i {
        font-size: 48px;
        padding-top: 15px;
        color: #bfddfe;
    }
    
    #features .card i,
    #features .card-body {
        z-index: 1;
    }
    
    #features .card h5 {
        font-size: 18px;
        text-transform: uppercase;
        color: #283d50;
        font-weight: bold;
    }
    
    #features .card p {
        font-size: 15px;
        color: #33485a;
    }
    
    #features .card .readmore {
        color: #fff;
        font-weight: 600;
        display: inline-block;
        transition: 0.3s ease-in-out;
        border-bottom: #00458f solid 2px;
    }
    
    #features .card .readmore:hover {
        border-bottom: #fff solid 2px;
    }
    
    #features .counters {
        padding-top: 40px;
    }
    
    #features .counters span {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 48px;
        display: block;
        color: #fff;
    }
    
    #features .counters p {
        padding: 0;
        margin: 0 0 20px 0;
        font-size: 14px;
        color: #cce5ff;
    }
    
    #features.what-we-offer-sec {
        background: url(images/solana/bgg.webp) top center;
        padding: 60px 0 80px;
        position: relative;
    }
    
    #features.what-we-offer-sec {
        background-size: cover;
        background-repeat: no-repeat!important;
    }
    
    #features.what-we-offer-sec:before {
        background: rgba(0, 0, 0, .6);
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }
    
    #features.what-we-offer-sec h2 {
        color: black;
    }
    
    .post-ico-sec {
        background: #f2f2f2;
    }
    
    .pre-ico-sec .section-header {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .pre-ico-sec .underline:after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .pre-ico-sec .why-adit-list .icon {
        width: 100%;
        float: none;
        text-align: center;
        margin-bottom: 20px;
    }
    
    .pre-ico-sec .why-adit-list {
        width: 100%;
        background: #fff;
        border: 1px solid #eee;
        position: relative;
        padding: 25px 25px 25px 25px;
    }
    
    .pre-ico-sec .card-big-shadow {
        position: relative;
    }
    
    .pre-ico-sec .why-adit-list h3 {
        margin-bottom: 20px;
        font-size: 16px;
        line-height: 1.3;
        font-weight: bold;
        color: #000;
    }
    
    .pre-ico-sec .why-adit-list .icon img {
        width: 55px;
    }
    
    .pre-ico-sec .why-adit-list .content {
        float: none;
        width: 100%;
        text-align: center;
    }
    
    .solution-right.ico_framework_img img {
        width: 90%;
    }
    
    .solution-right img {
        margin-top: 40px;
    }
    
    a.home-talk-experts.ex-sm {
        font-weight: normal;
        padding: 8px 25px 7px;
    }
    
    .banner_sub {
        line-height: 1.7;
        font-size: 18px;
        padding: 0px 100px;
        color: #fff;
        margin-bottom: 20px;
    }
    
    .banner_sub h2 {
        line-height: 1.7;
        font-size: 18px;
        color: #fff;
        font-weight: normal !important;
        letter-spacing: 0;
        display: initial;
    }
    
    .in_h2 h2 {
        display: inline;
        font-size: 14px;
        font-weight: normal;
        letter-spacing: 0px;
        color: #555;
    }
    
    @media only screen and (max-width: 768px) {
        .solution-right.ico_framework_img img {
            width: 100%;
        }
        .banner_sub {
            font-size: 14px;
            padding: 0px;
        }
        .banner_sub h2 {
            line-height: 1.7;
            font-size: 14px;
        }
        .contentall h1 {
            font-size: 30px;
            line-height: 1.3;
        }
        .pre-ico-sec .why-adit-list {
            margin-bottom: 40px;
        }
        #features .card {
            margin-bottom: 40px;
        }
        #features.what-we-offer-sec {
            background-size: cover;
            background-repeat: no-repeat!important;
        }
        #features.what-we-offer-sec .main-sections.pt30 {
            padding-top: 0;
        }
    }
    
    @media screen and (min-width:786px) {
        .banner_content p {
            padding: 0px 100px;
        }
    }
    
    .mb-3 {
        margin-bottom: 3em;
    }
    
    .double-border {
        padding-top: 2px;
        width: 100%;
        border-top: 1px dashed #aaa;
        border-bottom: 1px dashed #aaa;
    }
    
    .p-100 {
        padding: 100px 0px;
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
        background: #b4d9bc;
        border: 1px solid #eee;
        position: relative;
        padding: 7%;
        margin-bottom: 49px;
        min-height: 260px!important;
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
    
    .content p {
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 0px!important;
        margin-top: 10px;
    }
    
    .mt20 {
        margin-top: 50px;
    }
    
    .indus-box {
        min-height: 390px!important;
        background-color: #fff;
        padding: 15px;
    }

    .indus-box-content h5{
        text-align: center;
    }
    .indus-txt{
        text-align: center;
    }        
    .container-center {
        display: flex;
        flex-wrap: wrap;
        position: relative;
        z-index: 1;
        justify-content: center;
    }
    
    .testimonials-item .user {
        width: 70px;
        height: 70px;
        position: relative;
        position: absolute;
        top: -10px;
        left: 25px;
        z-index: 3;
        -webkit-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        transition: all .3s ease 0s;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        overflow: hidden;
        background: #f2f2f2;
        box-shadow: 0 2px 48px 0 rgb(0 0 0 / 6%);
        line-height: 80px;
        text-align: center;
    }
    
    .testimonials-item {
        display: block;
        position: relative;
        margin-bottom: 30px;
    }
    
    .testimonials-item .user i {
        color: #f2f2f2;
    }
    
    .testimonials-item .user i img {
        width: 55px;
        margin-top: 7px;
        background: #f2f2f2;
    }
    
    .testimonials-item .testimonials-content {
        background: #fff;
        overflow: hidden;
        box-shadow: 0 2px 48px 0 rgb(0 0 0 / 6%);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        position: relative;
        height: 100%;
        min-height: 220px;
    }
    
    .testimonials-item:hover h3 {
        color: #000!important;
    }
    
    .testimonials-item:hover p {
        color: #000!important;
    }
    
    .testimonials-item .testimonials-content::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: #47b47557!important;
        opacity: 0;
        -webkit-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        transition: all .3s ease 0s;
    }
    
    .testimonials-item .testimonials-content .user-name {
        display: block;
        font-weight: 600;
        font-size: 19px;
        color: #47b475;
        margin-top: 20px;
        padding-left: 115px;
        letter-spacing: .69px;
        margin-bottom: 5px;
        position: relative;
        z-index: 3;
        text-transform: capitalize;
    }
    
    .testimonials-item .txt {
        margin-top: -20px;
    }
    
    .testimonials-item .testimonials-content .txt p {
        padding-left: 25px;
        padding-right: 25px;
        margin-bottom: 25px;
        margin-top: 60px!important;
        font-weight: 400;
        font-size: 14px;
        color: black;
        letter-spacing: .6px;
        line-height: 26px;
        position: relative;
        z-index: 3;
    }
    
    .txt p {
        font-size: 15px!important;
    }
    
    .testimonials-item:hover .testimonials-content:before {
        opacity: 1;
    }
    
    .testimonials-item:hover .user {
        top: -20px;
    }
    
    @media screen and (max-width: 425px) {
        .same {
            width: 100%;
        }
    }
    
    .clearfix:after,
    .clearfix:before,
    .container-fluid:after,
    .container-fluid:before,
    .container:after,
    .container:before,
    .row:after,
    .row:before {
        content: " ";
        display: table;
    }
    
    .justify-content-md-center {
        -ms-flex-pack: center!important;
        justify-content: center!important;
    }
    
    .category-grid-style-01 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        background: #ffffff;
        -webkit-box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
        border-radius: 5px;
    }
    
    .category-grid-style-01 .category-item {
        padding: 30px;
        text-align: center;
        border-right: 1px solid #ffffff;
        border-bottom: 1px solid #ffffff;
        position: relative;
        cursor: pointer;
        background: #f2f2f2;
        width: 20%;
    }
    
    .category-grid-style-01 .category-item:before {
        content: "";
        background: #ffffff;
        width: 110%;
        height: 110%;
        display: inline-block;
        position: absolute;
        left: -5%;
        top: -5%;
        z-index: 1;
        opacity: 0;
        -webkit-transform: scale(0.96);
        transform: scale(0.96);
        transition: all 0.3s ease-in-out;
    }
    
    .category-grid-style-01 .category-item .category-icon {
        color: #333333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px;
        position: relative;
        z-index: 2;
    }
    
    .category-grid-style-01 .category-item .category-title {
        color: #022d62;
        font-weight: bold;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
        font-size: 16px;
    }
    
    .category-grid-style-01 .category-item:hover:before {
        -webkit-box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
        transition: all 0.3s ease-in-out;
    }
    
    </style>


<div class="header-shadow" id="home">
    <div class="main">
        <div class="banner blockchain-counsulting" style="background-image: url(images/solana/banner-solana.webp);background-position: center 0;background-size: cover;">
            <div id="large-header" class="large-header"> </div>
            <div class="container banner_content contentall">
                <h1>Solana NFT Marketplace Creation</h1>
                <div class="banner_sub">Harness the power of lightning-fast transactions with a Solana-based NFT marketplace. Revolutionize your digital asset trading experience with unparalleled speed and efficiency.</div> 
                <div class="banner_btn">
                    <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn"><strong>Connect with Our Experts</strong></a>
                    {{-- <a href="#" target="_blank" class="nectar-button medium regular accent-color regular-button nec-btn">Explore the Demo</a> --}}
                </div>    
            </div>
        </div>
        <div id="ico-developement" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-header">
                        <div class="section-title">
                            <h2 class="text-center up">Developing an NFT Marketplace on Solana</h2>
                            <hr> </div>
                        <p class="text-justify mt20" style="text-align-last: center;">Non-fungible tokens (NFTs) have dramatically transformed the cryptocurrency landscape, offering users a seamless and secure trading experience. These digital assets are valued for their ability to certify authenticity and verify ownership, which is facilitated through specialized platforms known as NFT marketplaces.</p>
                        <p class="text-justify" style="text-align-last: center;">While NFT marketplaces can be constructed on various blockchains, such as Ethereum, Binance Smart Chain, and TRON, Solana has emerged as the leading choice due to its exceptional features. Solana’s NFT marketplace development is increasingly favored for its superior performance and scalability.</p>
                        <p class="text-justify" style="text-align-last: center;">The transaction process on a Solana-based NFT marketplace is designed to be straightforward and intuitive, catering to a wide range of users. There are different types of NFT marketplaces: open marketplaces that handle various NFTs, including music, videos, and trading cards, and exclusive marketplaces focusing on specific categories, like digital art.</p>
                        <p class="text-justify" style="text-align-last: center;">As the demand for NFT marketplaces surges, issues such as network congestion and slow transaction speeds can arise. To address these challenges and deliver a high-performance solution, we specialize in creating advanced NFT marketplaces on the Solana blockchain.</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="p-60 pre-ico-sec-1 gray-bg">
            <div class="container">
                <div class="main-sections">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-header underline text-center">
                            <h2>Fundamental Aspects of Solana NFT Trading Platforms</h2> </div>
                        <p class="text-center">Solana-based NFT marketplace platforms come with a suite of powerful features designed to enhance functionality and user experience</p>
                        <div class="why-adit mt50">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card-big-shadow">
                                    <div class="why-adit-list">
                                        <div class="icon"> <img class="lazy" src="{{ asset('/images/solana/icons/network_1.webp') }}" alt="Transparency"> </div>
                                        <div class="content">
                                            <h3>Cross-Platform Compatibility </h3>
                                            <p>These marketplaces enable seamless trading across various virtual platforms, ensuring smooth transactions and secure data storage through advanced interoperability.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card-big-shadow">
                                    <div class="why-adit-list">
                                        <div class="icon"> <img class="lazy" src="{{ asset('/images/solana/icons/crisis.webp') }}"> </div>
                                        <div class="content">
                                            <h3>Controlled Rarity </h3>
                                            <p>Smart contracts on these platforms are programmed to limit the creation of NFTs, increasing their scarcity and thereby elevating their value.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card-big-shadow">
                                    <div class="why-adit-list">
                                        <div class="icon"> <img class="lazy" src="{{ asset('/images/solana/icons/customizability.png') }}"> </div>
                                        <div class="content">
                                            <h3>Customizability</h3>
                                            <p>NFT marketplaces on Solana offer extensive programmability, allowing users to tailor the platform to their specific needs and integrate unique functionalities.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card-big-shadow">
                                    <div class="why-adit-list">
                                        <div class="icon"> <img class="lazy" src="{{ asset('/images/solana/icons/liquidity.webp') }}"> </div>
                                        <div class="content">
                                            <h3>Enhanced Liquidity </h3>
                                            <p>Thanks to their interoperable design, these marketplaces facilitate instant trading, providing high liquidity. NFTs can also be used as collateral to access additional liquidity, making transactions more flexible and efficient.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="sec_tit text-center underline">
                    <h2>What is a Solana-Based NFT Marketplace Development Platform?</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <p class="mt30 text-justify">A Solana-based NFT marketplace leverages the cutting-edge Solana blockchain to offer unparalleled performance for NFT trading. Solana's advanced infrastructure supports up to 50,000 transactions per second with incredibly fast block times of 400 milliseconds, which significantly reduces network congestion and speeds up transaction processing. This blockchain is designed to enhance scalability and security, making it ideal for high-speed, cost-effective NFT transactions.</p>
                        <p class="mt10 text-justify">Unlike traditional blockchains that struggle with slow transaction speeds and high fees, Solana's platform addresses these issues effectively. It simplifies the NFT minting and trading processes, allowing users to operate with minimal technical knowledge. The interface is user-friendly, providing seamless access to trading, performance metrics, and transaction data.</p>
                        <p class="mt10 text-justify">Solana’s native token, SOL, supports this ecosystem, ensuring efficient and transparent operations. This platform represents a modern solution to the common problems faced by older NFT marketplaces, offering a robust and innovative consensus mechanism for verifying transactions swiftly.</p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center"> 
                        <img class="lazy  rounded-corner mt30" src="{{ asset('/images/solana/solana-based-nft-marketplace.jpeg') }}" alt="Best Solana NFT Marketplace Development" title="Solana based NFT Marketplace Development" style="width: 545px"> 
                    </div>
                </div>
                <div class="text-center mt20">
                    <style type="text/css">
                        .nec-btn{
                            position: relative !important;
                            color:#fff !important;
                            border-radius:30px !important;
                            font-size: 11px;
                            text-transform: uppercase !important;
                            transform: scale(1.1,1.1) !important;
                            transition:all 0.3s ease-out 0s !important;
                            background: #47b475 !important;
                        }
                        .nec-btn:hover{
                            transform: scale(1,1) !important;
                            color:#fff !important;
                            background:#00a9e2!important;
                        }
                        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                            margin-bottom: 15px!important;
                            display: inline-block;
                            margin-right: 26px!important;
                        }
                        .contentall a, a.home-talk-experts{
                            padding: 10px 20px !important;
                        }
                    </style>

                    {{-- <div class="cta_mine">
                        <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>
                        <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our Experts</span></a>
                    </div>                --}}
                </div>
            </div>
        </div>
        <div class="common_spacing gray-bg" id="business">
            <div class="container">
                <div class="section-title text-center m-b-30">
                    <h3 class="common_h3 sec-tit">Advantages of Our Solana NFT Marketplace</h3>
                    <hr>
                    <p>Our Solana-based NFT marketplace development platform offers several distinct advantages</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-box mb40 indus-box">
                            <div class="blog-img-box">
                                <div style="background-image: url(images/solana/solana3.webp);" class="indus-img"></div>
                            </div>
                            <div class="indus-box-content">
                                <h5 class="mt20 blog-title">Lightning-Fast Transactions</h5>
                                <p class="indus-txt">The platform ensures rapid transaction processing by minimizing network congestion, resulting in swift and efficient exchanges.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-box mb40 indus-box">
                            <div class="blog-img-box">
                                <div style="background-image: url(images/solana/solana4.png);" class="indus-img"></div>
                            </div>
                            <div class="indus-box-content">
                                <h5 class="mt20 blog-title">Decentralized Trust</h5>
                                <p class="indus-txt">Operating in a decentralized framework, our marketplace removes the need for intermediaries, fostering a trustless environment free from central authorities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-box mb40 indus-box">
                            <div class="blog-img-box">
                                <div style="background-image: url(images/solana/integration.png);" class="indus-img"></div>
                            </div>
                            <div class="indus-box-content">
                                <h5 class="mt20 blog-title">SOL Integration</h5>
                                <p class="indus-txt">Leveraging Solana's native token, SOL, investors can stake their tokens in liquidity pools to earn substantial rewards and maximize their returns.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class="common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h3 class="section-title underline mb20">Key Attributes of Our Solana NFT Marketplace</h3></div>
                    <p class="text-center">Our Solana-based NFT marketplace boasts several standout features</p>
                </div>
                <div class="testimonials-wrapper container-center mt50">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 equalize aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                        <div class="testimonials-item">
                            <div class="user"> <i class=" "><img class="lazy" src="{{ asset('images/solana/icons/interoperability.png') }}"> </i> </div>
                            <div class="testimonials-content">
                                <h3 class="user-name">Interoperability</h3>
                                <div class="txt">
                                    <p>The platform offers exceptional composability, allowing seamless integration with various development protocols and software tools.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 equalize aos-init aos-animate" data-aos="fade-right" data-aos-delay="600">
                        <div class="testimonials-item">
                            <div class="user"> <i class=" "><img class="lazy" src="{{ asset('images/solana/icons/scale.webp') }}"> </i> </div>
                            <div class="testimonials-content">
                                <h3 class="user-name">Scalability</h3>
                                <div class="txt">
                                    <p>Designed for peak performance, the marketplace efficiently handles millions of transactions concurrently, ensuring rapid and scalable operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 equalize aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                        <div class="testimonials-item">
                            <div class="user"> <i class=" "><img class="lazy" src="{{ asset('images/solana/icons/money-transaction.png') }}"> </i> </div>
                            <div class="testimonials-content">
                                <h3 class="user-name">Economical Transaction Fees</h3>
                                <div class="txt">
                                    <p>By minimizing network congestion, this marketplace significantly reduces transaction costs, making it a cost-effective solution for users.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="common_spacing">
        <div class="container">
            <div class="section-header text-center">
                <h3 class="section-title underline"> Our Expertise in Diverse Blockchain Solutions</h3> </div>
            <p class="text-center list-txt">At our firm, we possess the advanced capabilities and in-depth knowledge required to craft cutting-edge NFT marketplaces across a range of leading blockchain platforms.</p>
            <div class="row mt30" style="display:flex!important;">
                <div class="col-sm-12">
                    <div class="category category-grid-style-01 aos-item" data-aos="fade-up" data-aos-duration="500">
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/eth.webp') }}" alt=""> </div> <a href="#" class="category-title">Ethereum</a> </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/polkadot.webp') }}" alt=""> </div> <a href="#" class="category-title">Polkadot</a> </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/binance-logo.webp') }}" alt=""> </div> <a href="#" class="category-title">BSC</a> </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/tron.webp') }}" alt=""> </div> <a href="#" class="category-title">TRON</a> </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/Openchain.webp') }}" alt=""> </div> <a href="#" class="category-title">Open Chain</a> </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/stellar.webp') }}" alt=""> </div> <a href="#" class="category-title">Steller</a> </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/neo.webp') }}" alt=""> </div> <a href="#" class="category-title">NEO</a> </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/eos.webp') }}" alt=""> </div> <a href="#" class="category-title">EOS</a> </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/stratis.webp') }}" alt=""> </div> <a href="#" class="category-title">Startis</a> </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild" style="height:40px;" src="{{ asset('images/home-new/polygon.webp') }}" alt=""> </div> <a href="#" class="category-title">Polygon</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="features" class="p-60 what-we-offer-sec mt50">
            <div class="container">
                <div class="main-sections pt60">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card-big-shadow">
                            <div class="card equal-height">
                                <h2>Why Partner with Us for Your NFT Marketplace Development?</h2>
                                <div class="card-body">
                                    <p class="card-text mt30">Renowned for our excellence in NFT marketplace development, we bring a wealth of experience crafting high-performance platforms across various blockchain networks. Currently, we leverage the Solana blockchain’s superior capabilities to deliver cutting-edge NFT marketplaces tailored to your needs. Our focus is on resolving the challenges faced by traditional NFT marketplaces, ensuring a seamless and innovative experience.</p> 
                                    <p class="card-text mt30">Our development team is among the most skilled in the cryptocurrency industry, dedicated to aligning our solutions with your specific requirements. We understand that the success of an NFT marketplace hinges on its visibility within the crypto community. Therefore, we offer comprehensive post-launch marketing services, including content creation, social media campaigns, and email outreach, to maximize your platform’s impact.</p> 
                                    <p class="card-text mt30">To elevate your presence in the crypto space with a Solana-based NFT marketplace, reach out to us today!</p> 
                                    <div class="text-center choose_btn">
                                        <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- scripts included -->
    <script src="js/vendor.js" type="2afff7d310827f09fb97db57-text/javascript"></script>
    <script src="js/plugins.js" type="2afff7d310827f09fb97db57-text/javascript"></script>
    <script src="js/main.js" type="2afff7d310827f09fb97db57-text/javascript"></script>
    <script type="2afff7d310827f09fb97db57-text/javascript" src="https://tympanus.net/Development/AnimatedHeaderBackgrounds/js/TweenLite.min.js"></script>
    <script type="2afff7d310827f09fb97db57-text/javascript" src="https://tympanus.net/Development/AnimatedHeaderBackgrounds/js/EasePack.min.js"></script>
    <script type="2afff7d310827f09fb97db57-text/javascript" src="https://tympanus.net/Development/AnimatedHeaderBackgrounds/js/rAF.js"></script>
    <script src="build/js/intlTelInput.js" type="2afff7d310827f09fb97db57-text/javascript"></script>
    <script type="2afff7d310827f09fb97db57-text/javascript">
    (function() {
        var width, height, largeHeader, canvas, ctx, points, target, animateHeader = true;
        // Main
        initHeader();
        initAnimation();
        addListeners();

        function initHeader() {
            width = window.innerWidth;
            height = window.innerHeight;
            target = {
                x: width / 2,
                y: height / 2
            };
            largeHeader = document.getElementById('large-header');
            largeHeader.style.height = height + 'px';
            canvas = document.getElementById('demo-canvas');
            canvas.width = width;
            canvas.height = height;
            ctx = canvas.getContext('2d');
            // create points
            points = [];
            for(var x = 0; x < width; x = x + width / 20) {
                for(var y = 0; y < height; y = y + height / 20) {
                    var px = x + Math.random() * width / 20;
                    var py = y + Math.random() * height / 20;
                    var p = {
                        x: px,
                        originX: px,
                        y: py,
                        originY: py
                    };
                    points.push(p);
                }
            }
            // for each point find the 5 closest points
            for(var i = 0; i < points.length; i++) {
                var closest = [];
                var p1 = points[i];
                for(var j = 0; j < points.length; j++) {
                    var p2 = points[j]
                    if(!(p1 == p2)) {
                        var placed = false;
                        for(var k = 0; k < 5; k++) {
                            if(!placed) {
                                if(closest[k] == undefined) {
                                    closest[k] = p2;
                                    placed = true;
                                }
                            }
                        }
                        for(var k = 0; k < 5; k++) {
                            if(!placed) {
                                if(getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                    closest[k] = p2;
                                    placed = true;
                                }
                            }
                        }
                    }
                }
                p1.closest = closest;
            }
            // assign a circle to each point
            for(var i in points) {
                var c = new Circle(points[i], 2 + Math.random() * 2, 'rgba(255,255,255,0.3)');
                points[i].circle = c;
            }
        }
        // Event handling
        function addListeners() {
            if(!('ontouchstart' in window)) {
                window.addEventListener('mousemove', mouseMove);
            }
            window.addEventListener('scroll', scrollCheck);
            window.addEventListener('resize', resize);
        }

        function mouseMove(e) {
            var posx = posy = 0;
            if(e.pageX || e.pageY) {
                posx = e.pageX;
                posy = e.pageY;
            } else if(e.clientX || e.clientY) {
                posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
                posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
            }
            target.x = posx;
            target.y = posy;
        }

        function scrollCheck() {
            if(document.body.scrollTop > height) animateHeader = false;
            else animateHeader = true;
        }

        function resize() {
            width = window.innerWidth;
            height = window.innerHeight;
            largeHeader.style.height = height + 'px';
            canvas.width = width;
            canvas.height = height;
        }
        // animation
        function initAnimation() {
            animate();
            for(var i in points) {
                shiftPoint(points[i]);
            }
        }

        function animate() {
            if(animateHeader) {
                ctx.clearRect(0, 0, width, height);
                for(var i in points) {
                    // detect points in range
                    if(Math.abs(getDistance(target, points[i])) < 4000) {
                        points[i].active = 0.3;
                        points[i].circle.active = 0.6;
                    } else if(Math.abs(getDistance(target, points[i])) < 20000) {
                        points[i].active = 0.1;
                        points[i].circle.active = 0.3;
                    } else if(Math.abs(getDistance(target, points[i])) < 40000) {
                        points[i].active = 0.02;
                        points[i].circle.active = 0.1;
                    } else {
                        points[i].active = 0;
                        points[i].circle.active = 0;
                    }
                    drawLines(points[i]);
                    points[i].circle.draw();
                }
            }
            requestAnimationFrame(animate);
        }

        function shiftPoint(p) {
            TweenLite.to(p, 1 + 1 * Math.random(), {
                x: p.originX - 50 + Math.random() * 100,
                y: p.originY - 50 + Math.random() * 100,
                ease: Circ.easeInOut,
                onComplete: function() {
                    shiftPoint(p);
                }
            });
        }
        // Canvas manipulation
        function drawLines(p) {
            if(!p.active) return;
            for(var i in p.closest) {
                ctx.beginPath();
                ctx.moveTo(p.x, p.y);
                ctx.lineTo(p.closest[i].x, p.closest[i].y);
                ctx.strokeStyle = 'rgba(156,217,249,' + p.active + ')';
                ctx.stroke();
            }
        }

        function Circle(pos, rad, color) {
            var _this = this;
            // constructor
            (function() {
                _this.pos = pos || null;
                _this.radius = rad || null;
                _this.color = color || null;
            })();
            this.draw = function() {
                if(!_this.active) return;
                ctx.beginPath();
                ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
                ctx.fillStyle = 'rgba(156,217,249,' + _this.active + ')';
                ctx.fill();
            };
        }
        // Util
        function getDistance(p1, p2) {
            return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
        }
    })();
    </script>
    <script type="2afff7d310827f09fb97db57-text/javascript">
    $("#phone").intlTelInput({
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: "body",
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        // hiddenInput: "full_number",
        // initialCountry: "auto",
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
        utilsScript: "build/js/utils.js"
    });
    </script>
    <script type="2afff7d310827f09fb97db57-text/javascript">
    $(function($) {
        $(".anim .icon").on("click", function() {
            var anim;
            anim = $(this).parent(".anim").data("animation");
            anim = "animated " + anim;
            return $(this).parent(".anim").removeClass(anim).delay(200).queue(function() {
                return $(this).addClass(anim);
            });
        });
    });
    </script>
    <script type="2afff7d310827f09fb97db57-text/javascript">
    $('.home-talk-experts').click(function() {
        $('html, body').animate({
            scrollTop: $('#newsletter-form-sec').offset().top
        }, 2000);
    });
    $('.pricing').click(function() {
        $('html, body').animate({
            scrollTop: $('#pricing').offset().top
        }, 2000);
    });
    </script>
    <script type="2afff7d310827f09fb97db57-text/javascript">
    var url = window.location.href;
    $('#url').val(url);
    // alert(url);
    </script>
    <script type="2afff7d310827f09fb97db57-text/javascript">
    $(document).ready(function() {
        $(".technology-types ul.nav>li>a").click(function() {
            $(".technology-types ul.nav>li").removeClass('active');
        });
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
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
.navbar-nav {
  margin: 6px -15px;
}
.navbar-nav > li > a {
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
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    /*background-image: none;*/
  }
}
@media (min-width: 768px) {
  .navbar-nav > li {
    padding-bottom: 12px;
    padding-top: 12px;
  }
  .navbar-nav > li:before,
  .navbar-nav > li:after {
    content: " ";
    display: block;
    height: 0;
    width: 0;
    opacity: 0;
    -webkit-transition: opacity 0.3s;
    -o-transition: opacity 0.3s;
    transition: opacity 0.3s;
  }
  .navbar-nav > li + li {
    margin-left: 2px;
  }
  .navbar-nav > li > a {
    border-radius: 3px;
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
  }
  .navbar-nav > .open:before,
  .navbar-nav > .open:after {
    bottom: -1px;
    left: 50%;
    opacity: 1;
    position: absolute;
    z-index: 1002;
  }
  .navbar-nav > .open:before {
    border: 10px solid;
    border-color: rgba(0, 0, 0, 0.1) transparent;
    border-top-width: 0;
    margin-left: -9px;
  }
  .navbar-nav > .open:after {
    border: 9px solid;
    border-top-width: 0;
    border-color: rgb(11 53 113) transparent;
    margin-left: -8px;
    margin-top: 2px;
  }
  .navbar-fixed-bottom .navbar-nav > .open:before,
  .navbar-fixed-bottom .navbar-nav > .open:after {
    bottom: auto;
    top: -1px;
   
  }
  .navbar-fixed-bottom .navbar-nav > .open:before {
    border-bottom-width: 0;
    border-top-width: 10px;
  }
  .navbar-fixed-bottom .navbar-nav > .open:after {
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
  .navbar-nav > li {
    float: left;
  }
}

.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
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
  .navbar-right ~ .navbar-right {
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
.navbar-material-blue .navbar-nav > li > a {
  color: #000;
  border-radius: 5px;
  padding: 5px 10px !important;
}
.navbar-material-blue .navbar-nav > li > a:hover,
.navbar-material-blue .navbar-nav > li > a:focus {
  color: #ffffff !important;
  /*background: rgb(11 53 113 / 60%) !important;*/
}
.navbar-material-blue .navbar-nav > .active > a,
.navbar-material-blue .navbar-nav > .active > a:hover,
.navbar-material-blue .navbar-nav > .active > a:focus {
  color: #ffffff;
  background: rgb(11 53 113) !important;
}
.navbar-material-blue .navbar-nav > .disabled > a,
.navbar-material-blue .navbar-nav > .disabled > a:hover,
.navbar-material-blue .navbar-nav > .disabled > a:focus {
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
.navbar-material-blue .navbar-nav > .open > a,
.navbar-material-blue .navbar-nav > .open > a:hover,
.navbar-material-blue .navbar-nav > .open > a:focus {
  background: rgb(11 53 113) !important;
  color: #ffffff;
}
@media (max-width: 767px) {
  .navbar-material-blue .navbar-nav .open .dropdown-menu > li > a {
    color: #212529;
  }
  .navbar-material-blue .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-material-blue .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
    background-color: transparent;
  }
  .navbar-material-blue .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-material-blue .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-material-blue .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #0288d1;
  }
  .navbar-material-blue .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-material-blue .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-material-blue .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
  .caret{display: inline-block; float: right;margin-top: 10px;}
  .navbar-nav .open .dropdown-menu{background: #ededed;}
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

.dropdown .dropdown-menu .caret{border:4px solid transparent;border-left-color:#fff;float:right;margin-top:6px}.dropdown-menu{min-width:270px}.dropdown-menu > li.open > a{background-color:#F5F5F5;color:#262626;text-decoration:none}.dropdown-menu .dropdown-menu{left:100%;margin:0;right:auto;top:-1px}.dropdown-menu-right .dropdown-menu,.navbar-right .dropdown-menu .dropdown-menu,.pull-right .dropdown-menu .dropdown-menu{left:auto;right:100%}.dropdown-menu.animated{-webkit-animation-duration:0.3s;animation-duration:0.3s}.dropdown-menu.animated:before{content:" ";display:block;height:100%;left:0;position:absolute;top:0;width:100%;z-index:99}.dropdownhover-top{margin-bottom:2px;margin-top:0}.navbar-fixed-bottom .dropdown-menu .dropdown-menu,.dropdownhover-top .dropdown-menu{bottom:-1px;top:auto}.navbar-nav > li > .dropdown-menu{margin-bottom:0}.dropdownhover-bottom{-webkit-transform-origin:50% 0;transform-origin:50% 0}.dropdownhover-left{-webkit-transform-origin:100% 50%;transform-origin:100% 50%}.dropdownhover-right{-webkit-transform-origin:0 50%;transform-origin:0 50%}.dropdownhover-top{-webkit-transform-origin:50% 100%;transform-origin:50% 100%}
   
 </style>

 <script type="2afff7d310827f09fb97db57-text/javascript">
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

.head-cta:hover  span:nth-child(2) {
    transition: 0.5s;
    /*margin-right: 45px;*/
}

.head-cta span {
    transform: skewX(15deg); 
    color:#fff;
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
@media screen and (max-width: 320px) {
    .main {
        margin-top: 10px !important;
    }
}
/*@media screen and (max-width: 768px) {
    .main {
        margin-top: 10px !important;
    }
}*/
</style>
<div class="sticky-form">
    <div class="formdiv">
        <form class="form-side" id="mailForm_sticky" method="post" action="">
            <h4>Connect With Us</h4> <button type="button" class="close" aria-label="Close quick contact"><i class="fa fa-times-circle" aria-hidden="true"></i></button><hr>
            <div class="form-group"><label for="name">Name</label><input type="text" class="form-control" name="name" id="name_sticky" placeholder="Your Name"> </div>
            <div class="form-group"><label for="email">Email Address</label><input type="email" class="form-control" name="email" id="email_sticky" placeholder="Your Email"> </div>
            <div class="form-group"><label for="skype">Skype</label><input type="text" class="form-control" name="skype" id="skype_sticky" placeholder="Your Skype"> </div>
            <div class="form-group">
                <label>Phone</label>
                <input id="phone_sticky" name="phone_dummy" type="text" required="" oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" data-cf-modified-2afff7d310827f09fb97db57-="">
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/solana-based-nft-marketplace-development"> </div>
            <div class="form-group"><label>messages</label><textarea placeholder="Write text here..." id="textarea_sticky" name="message"></textarea></div>
            <div class="form-group"><input type="button" id="submit" class="common_send_btn" value="send message"> </div>
        </form>
    </div>
</div>

<style type="text/css">.footer-wrap h6{color: #fff; font-size: 23px;} 
.footer-wrap h5 { margin: 10px 0; position: relative; text-transform: uppercase; padding-left: 10px; color: #fff; background: -webkit-linear-gradient( 77deg,#00bcd4 0%,#17cc81 100%); background: -ms-linear-gradient( 0deg,rgb(254,66,47) 0%,rgb(254,81,150) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;} .footer-wrap h5:after { content: ''; width: 3px; height: 90%; background: #47b475; display: inline-block; float: left; position: absolute; margin-top: 0; margin-right: 6px; left: 0; top: 1px;}</style>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="2afff7d310827f09fb97db57-text/javascript" src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="2afff7d310827f09fb97db57-text/javascript" src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5" media="screen">
<script type="2afff7d310827f09fb97db57-text/javascript" src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="2afff7d310827f09fb97db57-text/javascript">
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
<script type="2afff7d310827f09fb97db57-text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 9464790;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 <script type="2afff7d310827f09fb97db57-text/javascript">
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

<script type="2afff7d310827f09fb97db57-text/javascript">
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



<script type="2afff7d310827f09fb97db57-text/javascript">
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
<script type="2afff7d310827f09fb97db57-text/javascript">  
    $(".crypto-popup").click(function(e) {
        $('crypto-popup').addClass('fixedPosition full-width');
        $(".login-popup").addClass('show');
        e.stopPropagation();
    });
</script>
<!-- Button Lightbox Script - End -->

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2afff7d310827f09fb97db57-|49" defer></script></div>

@endsection