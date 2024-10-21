@extends('layouts.static')
<link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/inline-css.css')}}">
@section('css')
@endsection
@section('content')
<div class="login-popup">
   <div class="box-1">
      <div class="img">
      </div>
      <div class="img-area">
         <h3 class="text-white text-center">
            Become a Market-Leading Crypto Token Business!
         </h3>
         <br/>
         <p class="text-white text-center">
            It takes a lot for a crypto project to succeed in the competitive space. We have been part of the successful journey of these top market-topping token projects:
         </p>
         <ul class="popup-ul">
            <li>
               <img src="https://www.blockchainappfactory.com/images/nftm/Amepay.webp"/>
               <p>
                  AME Chain
               </p>
            </li>
            <li>
               <img src="https://www.blockchainappfactory.com/images/nftm/evai.webp"/>
               <p>
                  Evai
               </p>
            </li>
            <li>
               <img src="https://www.blockchainappfactory.com/images/nftm/dash.webp"/>
               <p>
                  Dash
               </p>
            </li>
            <li>
               <img src="https://www.blockchainappfactory.com/images/nftm/gsx.webp"/>
               <p>
                  GSX Coin
               </p>
            </li>
            <li>
               <img src="https://www.blockchainappfactory.com/images/nftm/waifu.webp"/>
               <p>
                  Waifu
               </p>
            </li>
            <li>
               <img src="https://www.blockchainappfactory.com/images/nftm/anyswap.webp"/>
               <p>
                  Anyswap
               </p>
            </li>
            <li>
               <img src="https://www.blockchainappfactory.com/images/nftm/quickswap.webp"/>
               <p>
                  Quickswap
               </p>
            </li>
            <li>
               <img src="https://www.blockchainappfactory.com/images/nftm/dascoin.webp"/>
               <p>
                  Das Coin
               </p>
            </li>
         </ul>
      </div>
      <div class="form">
         <div class="close">
            ×
         </div>
         <h3 class="text-white text-center">
            Do you want your token project to go to the next level?
         </h3>
         <br/>
         <form id="mailForm" method="POST">
            <div class="form-group">
               <input class="form-control" id="name" name="name" placeholder="Name" type="text"/>
            </div>
            <div class="form-group">
               <input class="form-control" id="email" name="email" placeholder="Email" type="text"/>
            </div>
            <div class="form-group">
               <input class="form-control" id="mobile" name="mobile" placeholder="Mobile" type="text"/>
            </div>
            <div class="form-group">
               <textarea class="form-control" id="message" name="message" placeholder="Message" style="height:75px;"></textarea>
            </div>
            <button class="btn" onclick="return send_mail()" type="button">
            Submit
            </button>
         </form>
         <div class="social">
            <a aria-label="calendly" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" rel="nofollow" target="_blank">
            <i aria-hidden="true" class="fa fa-calender" title="calendly">
            </i>  
            Schedule A Meeting
            </a>
            <a aria-label="Mail" href="/cdn-cgi/l/email-protection#d5bcbbb3ba95b7b9bab6beb6bdb4bcbbb4a5a5b3b4b6a1baa7acfbb6bab8" rel="nofollow">
            <i aria-hidden="true" class="fa fa-envelope" title="Mail">
            </i>
            Mail Us
            </a>
         </div>
      </div>
   </div>
</div>
<style type="text/css">
   body {
   color: #000000;
   }
   .container.patner img{margin: 10px;}
   @media screen and (max-width: 767px) {
   table.visible-xs {
   display: table!important;
   }
   }
   .banner_content {
   text-align: left;
   }
   .contentall a {
   margin: 10px;
   }
   .banner {
   background-image: url(https://www.blockchainappfactory.com/https://www.blockchainappfactory.com/images/token-development/banner-bg3.jpg);
   background-size: cover;
   padding-top: 137px;
   padding-bottom: 50px;
   height: auto;
   background-position: center;
   }
   h3.common_h3, h5.common_h3 {
   font-size: 30px!important;
   }
   .para {
   width: 85%;
   margin: 0 auto;
   }
   .bg-2 {
   background-image: linear-gradient(45deg, black, #00000052), url(https://www.blockchainappfactory.com/images/token-development/banner-bg.webp);
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
   /*            background-color: rgb(0 0 0 / 70%);*/
   }
   #ico .banner_content {
   text-align: left;
   position: relative;
   top: 0;
   transform: none;
   }
   .banner_content .contentall {
   margin-top: 100px;
   margin-bottom: 100px;
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
   margin: 0 auto 30px;
   display: block;
   }
   .contentall a {
   color: #fff;
   cursor: pointer;
   margin: 10px;
   text-transform: capitalize!important;
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
   margin-top: 80px;*/
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
   background-image: url(https://www.blockchainappfactory.com/images/ibm/shadow.webp);
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
   background: url(https://www.blockchainappfactory.com/images/lab/dot-shape.webp) #368b5acf;
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
   background: url(https://www.blockchainappfactory.com/images/lab/shape-7.svg) #fff;
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
   background: url(../https://www.blockchainappfactory.com/images/products/package_banner.webp);
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
   background: linear-gradient(rgb(37 38 37 / 48%), rgb(10 10 10 / 57%)), transparent url(https://www.blockchainappfactory.com/images/nftm/bg-image.webp) top left/cover no-repeat scroll;
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
   font-size: 18px!important;
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
   margin-top: 15px!important;
   display: inline-block;
   margin-right: 26px!important;
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
   ul.process-list{padding-left: 0 !important;}
   .process-list li{list-style: none;}
   .timeline-center .tm-icon{font-size: 28px; color: #47b475;}
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
   .Package_list{width: 49%;}
   .box4{min-height: auto;}
   .teck .category-grid-style-01 .category-item {width: 46%!important;}
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
   .Package_list{width: 24%;}
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
   /*------------ Complimentary-Features Style -----------*/
   .complimentary-features{padding: 60px 0px; background: #0d3881;}
   .complimentary-features ul{display: flex; flex-wrap: wrap; width: 100%; margin: 0px; padding: 0px; justify-content: center;}
   .complimentary-features ul li{width: 29%; margin: 2%; text-align: left; background: linear-gradient(180deg, rgba(255, 255, 255, 0.2) 0%, rgba(38, 44, 49, 0) 100%); box-shadow: 0px 4px 34px rgb(59 54 100 / 15%); border-radius: 15px; padding: 30px 30px 20px 30px;}
   .complimentary-features ul li:nth-child(even) {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.2) 0%, rgba(38, 44, 49, 0) 100%);
}
   .complimentary-features ul li .icons{float: left;}
   .complimentary-features ul li .icons img {width: 60px; height:60px; margin-bottom: 15px;}
   .complimentary-features ul li .content{background: transparent;}
   .complimentary-features ul li .content p{color: #fff;}
   .complimentary-features ul li p strong{display: block; font-size: 20px; color: #200b52;text-align: left; padding-bottom: 10px;}
   .complimentary-features ul li h4{display: block; font-size: 20px; color: #fff; font-weight: bold; text-align: left; padding-bottom: 7px;}
   .complimentary-features ul li h3{display: block; font-size: 20px; color: #fff; font-weight: bold; text-align: left; padding-bottom: 7px;}
   /*-- Integration --*/
   .integration{padding: 60px 0px; /*background: url(img/masternode-coin-development/feature-bg.webp) no-repeat bottom right #f6f8ff;*/}
   .integration-items{background: #ebedf2; width: 100%; padding: 10px; border: 1px solid #eee; border-radius: 10px; margin: 20px auto; text-align: center;}
   .integration-items p{text-align: center; margin-top: 15px;}
   .integration-items .icons{align-items: center; display: flex; box-shadow: 5px 5px 0 #108ad6; background: #0d3881; width: 90px; height: 90px; margin: -31px auto 10px auto; padding: 10px; border-radius: 50%; justify-content: center;}
   /*.integration-items .icons img{border-radius: 20px;}*/
   .integration-items p strong{display: block; color: #0f1c3f; font-size: 18px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px; border-bottom: 1px solid #eee;}
   /*-- Technology --*/               
   .technologies {background:#f2f2f2; padding: 50px 0;}
   .technologies ul {display: flex; flex-wrap: wrap; justify-content: center;}
   .technologies ul li {width:21%; text-align: center; font-size: 16px; padding: 15px; 
   background:  #0d3881; margin: -1px; border: 1px solid #fff; }
   .technologies ul li img {height: 50px;}
   .technologies ul li p{
   margin-bottom: 0 !important;
   }
   /*-- Welcome Content --*/
   .welcome-content{background:#0d3881;}
   .welcome-content ul{display: flex; flex-wrap: wrap; margin:0px; padding: 0px; color: #000; justify-content: center;}
   .welcome-content ul li{width: 25%; margin:0.5%; border:1px solid #eee; display: grid;  grid-template-columns: 30% 70%; padding: 10px; align-items: center; text-align: left;} 
   .welcome-content ul li .icons{width: 50px; margin-right: 10px; padding-right: 10px; border-right:1px solid #eee;}
   .welcome-content ul li p{line-height: 20px; padding: 0px; margin: 0px;  }
   /*------------ Ipad View Style -----------*/
   @media only screen and (min-width: 768px) and (max-width: 899px) {
   .complimentary-features ul li{width: 100%;}
   .welcome-content ul li{width: 32%;}
   }
   /*------------ Mobile View Style -----------*/
   @media only screen and (min-width: 320px) and (max-width: 767px) {
   .complimentary-features ul li{width: 100%; display: block;}
   .complimentary-features ul li .icons{width: 100%; clip-path:none; border-radius: 0px;}
   .complimentary-features ul li .content{width:100%; clip-path:none; border-radius: 0px; padding: 15px;}
   .integration-items{min-height: auto;}
   .technologies ul li {width: 49%;}
   .technologies ul li img {width: 60px;}
   .technologies ul li{margin:0px;}
   .welcome-content ul li{width: 100%;}
   }
</style>
<div id="ico">
   <div class="main" style="background-image: linear-gradient(blue, lightblue);">
      <div class="banner my_banner">
         <div class="banner_content">
            <div class="container">
               <div class="row">
                  <div class="col-md-5 col-sm-12 col-xs-12 text-left">
                     <div class="contentall">
                        <div class="ovr">
                           <div itemscope="" itemtype="http://schema.org/CreativeWork">
                              <div class="ban_tirt">
                                 <h1 itemprop="name">
                                    Transform Your Own Tokens with Our Top-Tier Development Services
                                 </h1>
                              </div>
                              <p itemprop="text">
                                 As a top-tier token development firm, we master the art of crafting exceptional tokens across leading layer-1 and layer-2 networks. Our custom solutions are designed to propel your business to the forefront of the market and ensure a powerful presence.
                              </p>
                              {{-- <div class="txt">
                                 <a class="nec-btn" href="https://www.blockchainappfactory.com/create-your-own-token-and-coin" id="cyz" rel="nofollow" style="border-radius: 30px !important; text-transform: capitalize !important; margin-left: 0;">
                                 Create your own token
                                 </a>
                                 <a class="nec-btn" href="#demo" id="cyz" rel="nofollow" style="margin-left: 0px !important;">
                                 view demo
                                 </a>
                              </div> --}}
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-12 text-center">
                     <img alt="Crypto Token Development Company" class="magic" src="{{asset('images/token-development/banner-img2.png')}}" title="Crypto Token Development Company"/>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @include('static.stats')
   @include('static.client-list')  
   <!-- ===========SECTION-START============= -->
   <div class="common_spacing">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
               <div class="section-title text-center">
                  <h2 class="title-th sec_tit underline">
                     Token Development Solutions by OnGraph
                  </h2>
               </div>
               <p class="text-center mt20">
                  At OnGraph, we set the standard in token development, enabling you to craft cryptocurrency tokens with a wide range of functionalities. From initial consultation to launch and beyond, our expert team ensures excellence at every stage. We leverage the latest technology to meet your unique needs and deliver top-tier quality.
                  <br/>
                  <br/>
                  With a solid history of successfully launching hundreds of crypto token projects, our comprehensive suite of development services includes:
               </p>
               <style type="text/css">
                  .tree {position: relative; display: inline-block; font-size: 0;}
                  /*.tree::after { position: absolute; content: ''; top: 0; position: absolute; left: 50%; height: 15px; width: 4px; transform: translateX(-50%); background-color: #000;}*/
                  .tree-item { position: relative; display: inline-block; width: 160px; margin-top: 10px; margin-left: 0px; font-size: 16px;}
                  .tree-item::before {content: ''; position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background-color: #cfcfcf; width: 4px; height: 15px;}
                  .tree-item:first-child {margin-left: 0;}
                  .tree-item::after {content: ''; position: absolute; top: -15px; left: -20px; height: 4px; background-color: #cfcfcf; width: 135%; // (48 + 20 + 20 -> half-margin on both sides)}
                  .tree-item:first-child::after {left: 50%;}
                  .tree-item:last-child::after {left: auto; right: 50%;}
                  @media only screen and (min-width: 320px) and (max-width: 767px) {.tree-item{width: 110px; margin-bottom: 30px;    display: block;} }
                  @media only screen and (min-width: 768px) and (max-width: 1024px) {.tree-item{width: 143px; margin-bottom: 30px; position: relative; display: inline-block; } }
               </style>
               <div class="content">
                  <div class="tree">
                     <div class="tree-item">
                        <img alt="" class="lazy" src="{{ asset('images/token-development/icons/erc.webp') }}"/>
                        <p>
                           ERC-20 Token
                        </p>
                     </div>
                     <div class="tree-item">
                        <img alt="" class="lazy" src="{{ asset('images/token-development/icons/trc1.png') }}"/>
                        <p>
                           TRC-20 Token
                        </p>
                     </div>
                     <div class="tree-item">
                        <img alt="" class="lazy" src="{{ asset('images/token-development/icons/bep-20.png') }}"/>
                        <p>
                           BEP-20 Token
                        </p>
                     </div>
                     <div class="tree-item">
                        <img alt="" class="lazy" src="{{ asset('images/token-development/icons/solana.webp') }}"/>
                        <p>
                           SPL (Solana) Token
                        </p>
                     </div>
                     <div class="tree-item">
                        <img alt="" class="lazy" src="{{ asset('images/token-development/icons/nep-141.png') }}"/>
                        <p>
                           NEP-141 (NEAR) Token
                        </p>
                     </div>
                  </div>
               </div>
               <div class="contentall">
                  <a class="nectar-button medium regular accent-color regular-button nec-btn" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" href="#" rel="nofollow" target="_blank">
                  <span>
                     Book a Consultation 
                  </span>
                  </a>
                  <a class="nec-btn crypto-popup" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">
                     Connect with Our Experts Today!
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ===========SECTION-START============= -->
   <section class="complimentary-features">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
               <div class="section-title text-center">
                  <h2 class="title-th sec_tit underline text-white">
                     Our Premier Services for next-gen Token Development 
                  </h2>
               </div>
               <p class="text-white">
                  Unlock a world of possibilities with our comprehensive cryptocurrency token development services. We offer cutting-edge solutions across multiple blockchains and asset types, tailored to meet your unique needs.
               </p>
            </div>
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
               <ul>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/ethereum.webp') }}"/>
                     </div>
                     <div class="content">
                        <h3>
                           Ethereum Tokens
                        </h3>
                        <p>
                           We specialize in crafting Ethereum tokens that adhere to ERC standards and are fully compatible with EVM, ensuring they are precisely aligned with your business goals.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/bep.webp') }}"/>
                     </div>
                     <div class="content">
                        <h3>
                           BNB Chain Tokens
                        </h3>
                        <p>
                           Leverage our expertise in creating BNB Chain tokens using industry-leading protocols to streamline your business processes and ensure smooth project execution.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/trc.webp') }}"/>
                     </div>
                     <div class="content">
                        <h3>
                           Tron Tokens
                        </h3>
                        <p>
                           Tap into the power of the Tron blockchain with our expertly crafted tokens, designed to maximize the network’s unique benefits for your projects.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/spl.webp') }}"/>
                     </div>
                     <div class="content">
                        <h3>
                           Solana Tokens
                        </h3>
                        <p>
                           Discover the advantages of Solana with our top-tier token development, crafted to engage and captivate audiences on a global scale.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/security.webp') }}"/>
                     </div>
                     <div class="content">
                        <h3>
                           Security Tokens
                        </h3>
                        <p>
                           Trust our expertise in security token creation to build a legally compliant cryptocurrency venture while fully benefiting from this innovative asset class.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/assets.png') }}"/>
                     </div>
                     <div class="content">
                        <h3>
                           Asset Tokens
                        </h3>
                        <p>
                           Convert your assets into digital tokens with our asset tokenization services, enhancing real-world transactions and boosting operational efficiency.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/equity.png') }}"/>
                     </div>
                     <div class="content">
                        <h3>
                           Equity Tokens
                        </h3>
                        <p>
                           Launch equity tokens on the blockchain that represent real assets, democratizing investment opportunities and broadening access for all.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/utility.png') }}"/>
                     </div>
                     <div class="content">
                        <h3>
                           Utility Tokens
                        </h3>
                        <p>
                           Develop utility tokens with robust features to streamline business interactions and enhance operational efficiency from the outset.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
            <hr/>
            <div class="clearfix">
            </div>
         </div>
      </div>
   </section>
   <!-- =============SECTION-START============== -->
   <style type="text/css">
      .center-align{padding:60px 0}.center-align ul{width:100%;display:flex;flex-wrap:wrap;align-items: center;margin:0 auto 40px auto;padding:30px 0;background:linear-gradient(#145eb136,#04047726);border-radius:10px;border:1px solid #6b93bd70}.center-align ul li{width:50%;/*display:flex;align-items:center*/}.center-align ul li{padding:0 3%}
      .center-align ul li h5{font-size:24px;font-weight:700;color:#56128b}
      .center-align ul li h4{font-size:24px;font-weight:700;color:#56128b}
      .center-align ul li span{font-size:60px;font-weight: bold; opacity:.1;font-family:Raleway,sans-serif!important;position: absolute;}.center-align ul li p span{width:40px;height:40px;background:linear-gradient(#e88817,#e85b17);opacity:1;font-size:18px;display:inline-block;border-radius:50%;color:#fff;text-align:center;line-height:2.1em;margin-left:-70px;margin-right:25px}.reverse{flex-direction:row-reverse;background:0 0!important}.center-align .items{background: linear-gradient(180deg,#0d3881 0%,#108ad6 100%); box-shadow: 0 0 65px rgba(177,184,222,.75); border-radius: 25px; padding: 20px; text-align: center; margin-top: 20px; transform: rotate(-5deg);} .reverse .items{transform: rotate(5deg);} .item-center{display:flex;align-items: center;}
      @media only screen and (min-width:320px) and (max-width:767px){.center-align{padding:10px 0}.center-align ul li{width:100%;margin:5px 0;padding:15px}}
      @media only screen and (min-width:768px) and (max-width:899px){.center-align ul li{width:100%}}
   </style>
   <section class="center-align" style="background-color: #ebedf2;">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <h2 class="sec_tit underline text-center">
                  Unlock Your Project's Potential with Our Premier Crypto Token Development Services!
               </h2>
               <p class="text-center">
                  Elevate your project significantly, even before launch, with our comprehensive crypto token development services. Our expertise helps you maximize your potential in the ever-changing crypto market and drive your business!
               </p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
               <ul style="padding: 0; background: none; border: 0;">
                  <li>
                     <div class="item-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/marketing.png') }}" width="60px" height="60px"/>
                              <p class="text-white">
                                 Market Making Protocols
                              </p>
                           </div>
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/liquidity.webp') }}"/>
                              <p class="text-white">
                                 Liquidity Pools
                              </p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/distribution.png') }}" style="width: 64px;"/>
                              <p class="text-white">
                                 Widespread Distribution
                              </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div>
                        <span>
                        01
                        </span>
                        <h4>
                           Liquidity and Market Making
                        </h4>
                        <p>
                           We embed liquidity and market-making strategies into our token projects to boost market presence. At Blockchain App Factory, we leverage effective distribution techniques and targeted promotions to amplify the reach and visibility of your crypto tokens.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
               <ul class="reverse" style="padding: 0; background: none; border: 0;">
                  <li>
                     <div class="item-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/architecture.png') }}" width="60px"/>
                              <p class="text-white">
                                 Smart Contract Architecture
                              </p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/audit.png') }}" width="60px"/>
                              <p class="text-white">
                                 Smart Contract Auditing &amp; Testing
                              </p>
                           </div>
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/optimization.png') }}" width="60px"/>
                              <p class="text-white">
                                 Smart Contract Optimization
                              </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div>
                        <span>
                        02
                        </span>
                        <h4>
                           Smart Contract Development
                        </h4>
                        <p>
                           Smart contracts are essential for every token project. Our team excels in creating robust contracts that enhance various token functions. Rely on our expertise to integrate smart contracts seamlessly into your crypto project, optimizing performance and functionality.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
               <ul style="padding: 0; background: none; border: 0;">
                  <li>
                     <div class="item-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/mobile-wallet.png') }}" width="60px"/>
                              <p class="text-white">
                                 Mobile Wallet Development
                              </p>
                           </div>
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/wallet.png') }}" width="60px"/>
                              <p class="text-white">
                                 Web Wallet Development
                              </p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/desktop.png') }}" width="60px"/>
                              <p class="text-white">
                                 Desktop Wallet Development
                              </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div>
                        <span>
                        03
                        </span>
                        <h4>
                           Crypto Token Wallet Development
                        </h4>
                        <p>
                           Our team develops feature-rich wallet apps for effortless token storage and transactions. We focus on delivering an exceptional user experience, top-notch security, and scalable solutions to meet the needs of token holders.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
               <ul class="reverse" style="padding: 0; background: none; border: 0;">
                  <li>
                     <div class="item-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/whitepaper.png') }}" width="60px"/>
                              <p class="text-white">
                                 White Paper Design
                              </p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/content.png') }}" width="60px"/>
                              <p class="text-white">
                                 Informative Content &amp; Visuals
                              </p>
                           </div>
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/investors.png') }}" width="60px"/>
                              <p class="text-white">
                                 Attract Investors
                              </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div>
                        <span>
                        04
                        </span>
                        <h4>
                           Whitepaper Creation
                        </h4>
                        <p>
                           Leading cryptocurrency project launches, we offer expert whitepaper creation services. Our skilled writers and designers craft detailed, visually compelling whitepapers that clearly explain your project and engage your audience with impactful visuals and infographics.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
               <ul style="padding: 0; background: none; border: 0;">
                  <li>
                     <div class="item-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/ico.png') }}" width="60px"/>
                              <p class="text-white">
                                 ICO Development
                              </p>
                           </div>
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/ido.webp') }}"/>
                              <p class="text-white">
                                 IDO Development
                              </p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="items">
                              <img class="lazy" src="{{ asset('images/token-development/icons/tokens.png') }}" width="60px"/>
                              <p class="text-white">
                                 Token Marketing
                              </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div>
                        <span>
                        05
                        </span>
                        <h4>
                           Initial Token Offerings
                        </h4>
                        <p>
                           Amplify your crypto project with an Initial Token Offering (ITO), an effective strategy for attracting investors and broadening your reach. Our experts simplify the process with various offering models, dedicated portals, and strategic partnerships with exchanges to ensure a successful and streamlined launch.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- =============SECTION-START============== -->
   <div class="common_spacing" id="ret-inv" style="background: url(https://www.blockchainappfactory.com/images/token-development/cta-bg-1.png) no-repeat top center; background-size: cover;">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
               <h3 class="text-white" style="text-align:right;">
                  Elevate Your Crypto Venture with Exclusive Token Development Services!
               </h3>
               <div class="contentall" style="text-align: right;">
                  <a class="nec-btn crypto-popup" rel="nofollow" style="border-radius: 30px !important; margin-top: 20px; text-transform:none !important;">
                     Empower Your Crypto Vision with Expert Token Solutions!
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- =============SECTION-START============== -->
   <style type="text/css">
      .step-points li {
      display: grid;
      grid-template-columns: 60px auto;
      margin-bottom: 30px;
      }
      .step-points li span {
      width: 60px;
      height: 60px;
      background: #47b475;
      border-radius: 50%;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      }
      .step-points li span img {
      /*width: 14px;
      height: 14px;*/
      padding: 10px;
      filter: brightness(0) invert(1);
      }
      .step-points-content {
      margin-left: 10px;
      }
      .step-points li h3 {
      color: #000000;
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 8px;
      }
      .step-points li p {
      margin-bottom: 0;
      text-align: left;
      }
      .step-points li span {
      animation-name: fadeIn;
      animation-duration: 3s;
      animation-iteration-count: 1;
      }
      .step-points-content {
      animation-name: fadeIn;
      animation-duration: 3s;
      animation-iteration-count: 1;
      }
      .step-points .fa {
      font-size: 40px;
      color: #0d3881;
      }
      .fa {
      display: inline-block;
      font: normal normal normal 14px/1 FontAwesome;
      /* font-size: 32px; */
      color: #fff; 
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      }
   </style>
   <section class="common_spacing">
      <div class="container">
         <div class="row">
            <div class="section-title text-center">
               <div class="sec_tit mb20">
                  <h3 class="section-title underline mb20">
                     Bespoke Token Development Solutions for Every Need
                  </h3>
               </div>
               <p style="font-size: 16px;">
                  Our bespoke token development services empower you to embed diverse functionalities into your crypto tokens, defining the very essence of your business.
               </p>
            </div>
         </div>
         <div class="row mt40">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb10">
               <ul class="step-points">
                  <li>
                     <i class="fa fa-lock">
                     </i>
                     <div class="step-points-content">
                        <h4>
                           Security Tokens
                        </h4>
                        <p>
                           Security tokens represent ownership and value for digital and physical assets, recorded securely on the blockchain.
                        </p>
                     </div>
                  </li>
                  <li>
                     <i class="fa fa-life-ring">
                     </i>
                     <div class="step-points-content">
                        <h4>
                           Utility Tokens
                        </h4>
                        <p>
                           Utility tokens offer functionalities like spending and voting rights, helping businesses sustain and boost market value.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb10">
               <ul class="step-points">
                  <li>
                     <i class="fa fa-dot-circle-o">
                     </i>
                     <div class="step-points-content">
                        <h4>
                           Asset Tokens
                        </h4>
                        <p>
                           Asset tokens digitize physical and digital assets, serving as modern ownership documentation without added utility.
                        </p>
                     </div>
                  </li>
                  <li>
                     <i class="fa fa-adjust">
                     </i>
                     <div class="step-points-content">
                        <h4>
                           Equity Tokens
                        </h4>
                        <p>
                           Equity tokens represent shares in assets, providing holders with the right to benefit from value changes.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- =============SECTION-START============== -->
   <style type="text/css">
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
   </style>
   <style>
      .featured-icon-box.style3 .featured-desc:after {
      position: absolute;
      content: '';
      width: 0;
      height: 0;
      border-bottom: 34px solid #108ad6;
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
      background-color: #47b475;
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
      border-left: 2px solid #47b475;
      transition: .1s all ease;
      }
      .featured-icon-box.style3 {
      position: relative;
      margin: 15px 0;
      background-color: #fff;
      }
   </style>
   <!-- =============SECTION-START============== -->
   @include('static.top-aligned-image-card-section' ,array(
      'title' => 'Leading Crypto Tokens Developed with Our Expertise', 
      'desc' => 'Our advanced token development services have enabled clients to innovate and transform industries. We cultivate strong, dependable relationships with our clients, ensuring clear communication and consistent support. From initial concept through to final launch, we collaborate closely with you to guarantee a seamless and successful token creation process. '
   ));
   <!-- =============SECTION-START============== -->
   <div class="technologies">
      <div class="container">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="sec_tit underline text-center">
               Launch Tokens Like the Industry Leaders for Unmatched Market Impact
            </h3>
            <p class="text-center">
               Curious about how to excel in the competitive crypto token landscape? Design your tokens by leveraging the proven strategies of leading projects to make a powerful market entry and achieve exceptional success!
            </p>
            <ul>
               <li>
                  <img class="lazy" src="{{ asset('images/nftm/icons/solana.webp') }}"/>
                  <p class="white">
                     Solana ($SOL)
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/nftm/icons/cardano_ada-512.webp') }}"/>
                  <p class="white">
                     Cardano ($ADA)
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/nftm/icons/chain.webp') }}"/>
                  <p class="white">
                     Chainlink ($LINK)
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/nftm/icons/polygon.webp') }}"/>
                  <p class="white">
                     Polygon ($MATIC)
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/nftm/icons/cosmos.webp') }}"/>
                  <p class="white">
                     Cosmos ($ATM)
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/nftm/icons/icp-token.webp') }}"/>
                  <p class="white">
                     Internet Computer ($ICP)
                  </p>
               </li>
            </ul>
            <div class="clearfix">
            </div>
            <div class="text-center cta_mine txt contentall">
               <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="_blank">
               <span>
                  Book a free demo today
               </span>
               </a>
               {{-- <a class="nec-btn crypto-popup" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">
               Talk to Our Experts
               </a> --}}
            </div>
         </div>
      </div>
   </div>
   <!-- =============SECTION-START============== -->
   <section class="perfect-script common_spacing">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-title">
                  <h2 class="common_h3 text-center font-wei">
                     Experience Top-Tier Token Development with Unmatched Features
                  </h2>
                  <hr class="mb40"/>
                  <p class="text-center" style="font-size: 16px;">
                     As a leading cryptocurrency token development firm, we ensure excellence at every stage of token creation. Here’s how we deliver:
                  </p>
               </div>
            </div>
         </div>
         <div class="row mt-20">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
               <div class="perfect-script-items1">
                  <div class="icon">
                     <i class="fa fa-toggle-on">
                     </i>
                  </div>
                  <div class="content">
                     <h4>
                        Token Minting
                     </h4>
                     <p>
                        We leverage cutting-edge technology to mint your tokens on your selected blockchain, tailored to meet your business requirements.
                     </p>
                  </div>
                  <div class="clearfix">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
               <div class="perfect-script-items1">
                  <div class="icon">
                     <i class="fa fa-bars">
                     </i>
                  </div>
                  <div class="content">
                     <h4>
                        Token Listing
                     </h4>
                     <p>
                        After creation, we list your tokens on major exchanges to boost market visibility.
                     </p>
                  </div>
                  <div class="clearfix">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
               <div class="perfect-script-items1">
                  <div class="icon">
                     <i class="fa fa-money">
                     </i>
                  </div>
                  <div class="content">
                     <h4>
                        Wallet Compatibility
                     </h4>
                     <p>
                        Our tokens are optimized for seamless integration with popular crypto wallets.
                     </p>
                  </div>
                  <div class="clearfix">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
               <div class="perfect-script-items1">
                  <div class="icon">
                     <i class="fa fa-external-link-square">
                     </i>
                  </div>
                  <div class="content">
                     <h4>
                        Capped Supply
                     </h4>
                     <p>
                        We establish a supply cap to prevent the minting of tokens beyond your set limit.
                     </p>
                  </div>
                  <div class="clearfix">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
               <div class="perfect-script-items1">
                  <div class="icon">
                     <i class="fa fa-pause-circle">
                     </i>
                  </div>
                  <div class="content">
                     <h4>
                        Token Pause
                     </h4>
                     <p>
                        We incorporate pause functions to manage token minting and uphold market value.
                     </p>
                  </div>
                  <div class="clearfix">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
               <div class="perfect-script-items1">
                  <div class="icon">
                     <i class="fa fa-fire">
                     </i>
                  </div>
                  <div class="content">
                     <h4>
                        Token Burning
                     </h4>
                     <p>
                        We execute token-burning processes to control supply and increase token value through scarcity.
                     </p>
                  </div>
                  <div class="clearfix">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =============SECTION-START============== -->
   <style type="text/css">
      .awesome-features-wrapper {
      border: 1px solid #cdcdcd;
      padding-top: 40px;
      padding-bottom: 20px;
      min-height: 480px;
      transition: .3s;
      position: relative;
      margin-bottom: 30px;
      border-radius: 10px;
      }
      .awesome-features-icon-img {
      margin-bottom: 10px;
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
   <style type="text/css">
      /*equalize start*/
      .container-center {display: flex; flex-wrap: wrap; position: relative; z-index: 1; justify-content: center; }
      .equalize {display: flex;}
      /*equalize end */
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
         .icon_content p strong{display: block; color: #47b475; font-size: 18px; margin-bottom: 4px;}
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
         /*border: 1px solid #cdcdcd;*/
         background: #fff;
         padding-top: 30px;
         padding-bottom: 20px;
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
         background: #0d3881;
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
         /*.awesome-features-icon-img {
         padding-left: 40px;
         margin-bottom: 22px;
         font-size: 40px;
         color: #47b475;
         }*/
         .awesome-features-icon-img .fa{color: #47b475;font-size: 40px;}
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
         padding: 0 40px;
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
         min-height: 160px;
         margin-bottom: 20px;
         }
         .perfect-script-items1 .icon i{font-size: 26px;}
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
         background: #0d3881;
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
         .font-wei{
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
         padding-left: 0px;
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
         color: #108ad6;
         }
         .faq-content #accordion a[data-toggle=collapse]::before {background: #108ad6;}
         .faq-content #accordion a.collapsed[data-toggle=collapse]::before, .faq-content #accordion a[data-toggle=collapse]::before{margin-top: 5px !important;}
      </style>
   <div class="common_spacing gray_bg">
      <div class="container">
         <div class="">
            <h3 class="sec_tit underline text-center">
               Comprehensive Applications of Our Cryptocurrency Token Development
            </h3>
            <p class="text-center" style="font-size: 16px;">
               As a leading crypto token development firm, we offer a range of applications that bring your tokens to the digital forefront, whether for existing or new ventures. These use cases are designed to propel your project to market prominence.
            </p>
         </div>
         <div class="row mt40">
            <div class="container container-center">
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/brc.png') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           Cryptocurrencies
                        </h4>
                        <p>
                           We create fungible tokens for digital money in decentralized apps, including features like governance rights.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/stable-coin.png') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           Stablecoins
                        </h4>
                        <p>
                           We build stablecoins backed by real-world assets to keep their market value stable.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/ico.png') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           ICO (Initial Coin Offering)
                        </h4>
                        <p>
                           Our ICO tokens help new Web3 projects build their brand and raise community funding to start their operations.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/exchange.png') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           IEO (Initial Exchange Offering)
                        </h4>
                        <p>
                           IEO tokens build initial trust and brand recognition by launching through established crypto exchanges.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/ido.webp') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           IDO (Initial DEX Offering)
                        </h4>
                        <p>
                           IDO tokens help startups raise funds and grow their community by using decentralized exchanges, without needing middlemen.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/tokens.png') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           STO (Security Token Offering)
                        </h4>
                        <p>
                           We create tokens for STOs backed by real-world assets, using decentralized applications for fundraising.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/game.png') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           IGO (Initial Game Offering)
                        </h4>
                        <p>
                           IGO tokens help Web3 gaming projects create a community and generate excitement for new games.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/equity.png') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           ETO (Equity Token Offering)
                        </h4>
                        <p>
                           ETO tokens represent shares in a company, similar to traditional stocks, offering a digital approach to equity.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/decentralized.png') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           ILO (Initial Liquidity Offering)
                        </h4>
                        <p>
                           ILO tokens are listed on decentralized exchanges (DEXs) to raise funds through direct trades.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                  <div class="awesome-features-wrapper text-center mb-30">
                     <div class="awesome-features-icon-img">
                        <img class="lazy" src="{{ asset('images/token-development/icons/investors.png') }}"/>
                     </div>
                     <div class="awesome-features-text">
                        <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">
                           IFO (Initial Farm Offering)
                        </h4>
                        <p>
                           IFO tokens help projects build investor confidence by conducting pre-sales on DEXs before a wider market launch.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br/>
         {{-- <div align="center" class="contentall">
            <a class="nectar-button medium regular accent-color regular-button nec-btn" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" rel="nofollow" target="_blank">
            <span>
            Schedule A Meeting
            </span>
            </a>
            <a class="nec-btn crypto-popup" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">
            Talk to Our Experts
            </a>
         </div> --}}
      </div>
   </div>
   <!-- =============SECTION-START============== -->
   <section class="integration">
      <div class="container container-center">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-title text-center">
               <h2 class="title-th sec_tit underline">
                  Customize Your Token Development with Leading Standards
               </h2>
               <p>
                  Select the perfect standard for your token platform and let us deliver exactly what you need!
               </p>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
               <div class="icons">
                  <img class="lazy" src="{{ asset('images/token-development/icons/ethereum.webp') }}"/>
               </div>
               <h4>
                  Ethereum
               </h4>
               <p>
                  ERC-20
                  <br/>
                  ERC-721
                  <br/>
                  ERC-1155
                  <br/>
                  ERC-4337
               </p>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
               <div class="icons">
                  <img class="lazy" src="{{ asset('images/token-development/icons/bep.webp') }}" style="width:54px;"/>
               </div>
               <h4>
                  BNB Chain
               </h4>
               <p>
                  BEP-20
                  <br/>
                  BEP-721
                  <br/>
                  BEP-1155
               </p>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
               <div class="icons">
                  <img class="lazy" src="{{ asset('images/token-development/icons/trc.webp') }}" style="width:54px;"/>
               </div>
               <h4>
                  Tron
               </h4>
               <p>
                  TRC-20
                  <br/>
                  TRC-721
                  <br/>
                  TRC-1155
               </p>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
               <div class="icons">
                  <img class="lazy" src="{{ asset('images/token-development/icons/spl.webp') }}" style="width:54px;"/>
               </div>
               <h4>
                  Solana
               </h4>
               <p>
                  SPL
               </p>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
            <div class="integration-items">
               <div class="icons">
                  <img class="lazy" src="{{ asset('images/token-development/icons/nep.webp') }}" style="width:54px;"/>
               </div>
               <h4>
                  NEAR Protocol
               </h4>
               <p>
                  NEP-141
                  <br/>
                  NEP-171
               </p>
            </div>
         </div>
      </div>
   </section>
   <!-- =============SECTION-START============== -->
   <style type="text/css">
      :root{
      --color1: #117D83;
      --color2: #0d3881;
      }
      .main-timeline{ font-family: 'Poppins', sans-serif; }
      .main-timeline:after{
      content: '';
      display: block;
      clear: both;
      }
      .main-timeline .timeline{
      width: 50%;
      padding: 0 70px 0 0;
      margin: 0 5px 15px 0;
      float: left;
      }
      .main-timeline .timeline-content{
      color: #999;
      background: var(--main-color);
      min-height: 120px;
      padding: 0 30px 0 60px;
      border-right: 2px solid var(--color2);
      display: block;
      position: relative;
      z-index: 1;
      }
      .main-timeline .timeline-content:hover{ text-decoration: none; }
      .main-timeline .timeline-content:before,
      .main-timeline .timeline-content:after{
      content: '';
      background-color: var(--color2);
      height: 8px;
      width: 8px;
      border-radius: 50%;
      position: absolute;
      right: -5px;
      top: 0;
      }
      .main-timeline .timeline-content:after{
      top: auto;
      bottom: 0;
      }
      .main-timeline .timeline-icon{
      color: #fff;
      background-color: #0d3881;
      font-size: 40px;
      text-align: center;
      line-height: 93px;
      height: 93px;
      width: 93px;
      border-radius: 30px;
      box-shadow: -5px -5px 5px #108ad6, -8px -8px 0 #108ad6;
      transform: translateY(-50%);
      position: absolute;
      right: -120px;
      top: 50%;
      }
      .main-timeline .timeline-year{
      font-size: 32px;
      font-weight: 600;
      text-align: right;
      }
      .main-timeline .title{
      color: var(--color2);
      font-size: 20px;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: capitalize;
      margin: 0 0 7px;
      text-align: right;
      }
      .main-timeline .description{
      color: #444;
      font-size: 12px;
      font-weight: 500;
      line-height: 21px;
      letter-spacing: 0.5px;
      margin: 0;
      text-align: right;
      }
      .main-timeline .timeline-yearleft{
      font-size: 32px;
      font-weight: 600;
      text-align: left;
      }
      .main-timeline .titleleft{
      color: var(--color2);
      font-size: 20px;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: capitalize;
      margin: 0 0 7px;
      text-align: left;
      }
      .main-timeline .descriptionleft{
      color: #444;
      font-size: 12px;
      font-weight: 500;
      line-height: 21px;
      letter-spacing: 0.5px;
      margin: 0;
      text-align: left;
      }
      .main-timeline .timeline:nth-child(even){
      padding: 0 0 0 70px;
      margin: 0 0 15px 5px;
      float: right;
      }
      .main-timeline .timeline:nth-child(even) .timeline-content{
      padding: 0 0 0 30px;
      border-left: 2px solid var(--color1);
      border-right: none;
      }
      .main-timeline .timeline:nth-child(even) .timeline-content:before,
      .main-timeline .timeline:nth-child(even) .timeline-content:after{
      right: auto;
      left: -5px;
      }
      .main-timeline .timeline:nth-child(even) .timeline-icon{
      box-shadow: 5px -5px 5px #108ad6, 8px -8px 0 #108ad6;
      left: -120px;
      right: auto;
      }
      .main-timeline .timeline:nth-child(2){
      --color2: #0d3881;
      --color2: #0d3881;
      }
      .main-timeline .timeline:nth-child(3){
      --color2:#0d3881;
      --color2: #0d3881;
      }
      .main-timeline .timeline:nth-child(4){
      --color2: #0d3881;
      --color2: #0d3881;
      }
      @media screen and (max-width:767px){
      .main-timeline .timeline,
      .main-timeline .timeline:nth-child(even){
      width: 100%;
      padding: 115px 0 0;
      margin: 0 0 50px;
      }
      .main-timeline .timeline-content,
      .main-timeline .timeline:nth-child(even) .timeline-content{
      text-align: center;
      padding: 15px 0 0 0;
      border: none;
      border-top: 2px solid var(--color1);
      }
      .main-timeline .timeline-content:before{
      right: auto;
      left: 0;
      top: -5px;
      }
      .main-timeline .timeline-content:after,
      .main-timeline .timeline:nth-child(even) .timeline-content:after{
      left: auto;
      right: 0;
      top: -5px;
      }
      .main-timeline .timeline-icon,
      .main-timeline .timeline:nth-child(even) .timeline-icon{
      transform: translateY(0) translateX(-50%);
      top: -115px;
      left: 50%;
      }
      }
   </style>
   {{-- <section class="common_spacing gray_bg">
      <div class="container">
         <h3 class="sec_tit underline text-center">
            How Our Cross-chain Token Development Team Builds Your Project
         </h3>
         <p class="text-center">
            With our cross-chain token development team’s established set of processes, you can launch crypto tokens with all you need.
         </p>
         <div class="row">
            <div class="col-md-12">
               <div class="main-timeline">
                  <div class="timeline">
                     <a class="timeline-content" href="#">
                        <div class="timeline-year">
                           1
                        </div>
                        <div class="timeline-icon">
                           <img class="lazy" src="https://www.blockchainappfactory.com/images/token-development/icons/businesses.webp" style="width: 60px;"/>
                        </div>
                        <h4 class="title">
                           Business Discussion
                        </h4>
                        <p class="description">
                           Convey your token requirements to us.
                        </p>
                     </a>
                  </div>
                  <div class="timeline">
                     <a class="timeline-content" href="#">
                        <div class="timeline-yearleft">
                           2
                        </div>
                        <div class="timeline-icon">
                           <img class="lazy" src="https://www.blockchainappfactory.com/images/token-development/icons/creation.webp" style="width: 60px;"/>
                        </div>
                        <h4 class="titleleft">
                           Prototype Creation
                        </h4>
                        <p class="descriptionleft">
                           We give a rough draft of your crypto token.
                        </p>
                     </a>
                  </div>
                  <div class="timeline">
                     <a class="timeline-content" href="#">
                        <div class="timeline-year">
                           3
                        </div>
                        <div class="timeline-icon">
                           <img class="lazy" src="https://www.blockchainappfactory.com/images/token-development/icons/tokens.webp" style="width: 60px;"/>
                        </div>
                        <h4 class="title">
                           Token Creation
                        </h4>
                        <p class="description">
                           Tokens are developed on the desired blockchain.
                        </p>
                     </a>
                  </div>
                  <div class="timeline">
                     <a class="timeline-content" href="#">
                        <div class="timeline-yearleft">
                           4
                        </div>
                        <div class="timeline-icon">
                           <img class="lazy" src="https://www.blockchainappfactory.com/images/token-development/icons/whitepaper.webp" style="width: 60px;"/>
                        </div>
                        <h4 class="titleleft">
                           White Paper Creation
                        </h4>
                        <p class="descriptionleft">
                           A whitepaper is created to support your project.
                        </p>
                     </a>
                  </div>
                  <div class="timeline">
                     <a class="timeline-content" href="#">
                        <div class="timeline-year">
                           5
                        </div>
                        <div class="timeline-icon">
                           <img class="lazy" src="https://www.blockchainappfactory.com/images/token-development/icons/blockchain.webp" style="width: 60px;"/>
                        </div>
                        <h4 class="title">
                           Token Launch
                        </h4>
                        <p class="description">
                           The token is launched on the blockchain.
                        </p>
                     </a>
                  </div>
                  <div class="timeline">
                     <a class="timeline-content" href="#">
                        <div class="timeline-yearleft">
                           6
                        </div>
                        <div class="timeline-icon">
                           <img class="lazy" src="https://www.blockchainappfactory.com/images/token-development/icons/ico.webp" style="width: 60px;"/>
                        </div>
                        <h4 class="titleleft">
                           Initial Token Offering
                        </h4>
                        <p class="descriptionleft">
                           An ICO or IDO is conducted to distribute tokens.
                        </p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   <!-- =============SECTION-START============== -->
   <div class="common_spacing" id="ret-inv" style="background-image: linear-gradient( 180deg , #0d3881 0%, #108ad6);">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <h3 class="text-white">
                  Boost Your Token Creation with Top-Tier Technology!
               </h3>
               <p class="text-white">
                  Mint your crypto tokens on leading blockchain networks and create a buzz in the market!
               </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <div class="text-center">
                  <style type="text/css">
                     .nec-btn{
                     position: relative !important;
                     color:#fff !important;
                     border-radius:30px !important;
                     font-size: 11px;
                     text-transform: capitalize; !important;
                     transform: scale(1.1,1.1) !important;
                     transition:all 0.3s ease-out 0s !important;
                     background: #ffb000 !important;
                     }
                     .nec-btn:hover{
                     transform: scale(1,1) !important;
                     color:#fff !important;
                     background:#ff7e00!important;
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
                  <div class="cta_mine contentall">
                     <a class="nectar-button medium regular accent-color regular-button nec-btn" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" href="#" rel="nofollow" target="_blank">
                     <span>
                     Schedule A Meeting
                     </span>
                     </a>
                     <a class="nec-btn crypto-popup" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">
                     Talk to Our Experts
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- =============SECTION-START============== -->
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
   {{-- <section class="gray_bg" id="demo" style="padding:40px 0px;">
      <div class="container">
         <div class="row">
            <div class="section-title text-center">
               <h2 class="title-th sec_tit underline">
                  Experience Seamless Token Development with Our Demo
               </h2>
            </div>
            <p class="text-center">
               Join us for an exclusive demo showcasing our cutting-edge token development platform. Discover how easy it is to create, manage, and launch your own tokens with our intuitive tools. Whether you're a blockchain novice or an experienced developer, our demo will guide you through the entire process, from token creation to deployment. Experience the future of tokenization with our powerful platform, designed to make token development accessible to everyone.
            </p>
            <div class="col-md-12 col-sm-12 col-xs-12" style="border-radius: 10px; border: 1px solid #000; padding-bottom:40px; padding-top:30px;">
               <div class="col-md-6 col-sm-6 col-xs-12 text-center" style="margin-top:20px;">
                  <h4 class="sec_tit underline text-center" style="font-size: 24px;">
                     Admin Demo
                  </h4>
                  <img class="lazy" src="https://www.blockchainappfactory.com/images/ico-devlopment/admin-ico1.png" style="max-width: 100%;"/>
                  <div class="design" style="background: transparent;">
                     <p style="margin-bottom:10px;">
                        <b>
                        Email:
                        </b>
                        <span>
                        <a class="__cf_email__" data-cfemail="0b6a6f6662654b6f6e666425686466" href="/cdn-cgi/l/email-protection">
                        [email protected]
                        </a>
                        </span>
                     </p>
                     <p style="margin-bottom:10px;">
                        <b>
                        Password:
                        </b>
                        <span>
                        123456
                        </span>
                     </p>
                     <div class="clearfix">
                     </div>
                     <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" href="https://retoken.deliveryclouds.com/admin/login" rel="nofollow" style="display:inline-block; border-radius: 10px !important; text-transform: capitalize !important;" target="_blank">
                     <span>
                     Click to View Admin Demo
                     </span>
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 text-center" style="margin-top:20px;">
                  <h4 class="sec_tit underline text-center" style="font-size: 24px;">
                     User Demo
                  </h4>
                  <img class="lazy" src="https://www.blockchainappfactory.com/images/ico-devlopment/user-ico1.png" style="max-width: 100%;"/>
                  <div class="design" style="background: transparent;">
                     <p style="margin-bottom:10px;">
                        <b>
                        Email:
                        </b>
                        <span>
                        <a class="__cf_email__" data-cfemail="2044454d4f6044454d4f0e434f4d" href="/cdn-cgi/l/email-protection">
                        [email protected]
                        </a>
                        </span>
                     </p>
                     <p style="margin-bottom:10px;">
                        <b>
                        Password:
                        </b>
                        <span>
                        12345678
                        </span>
                     </p>
                     <div class="clearfix">
                     </div>
                     <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" href="https://ico.deliveryclouds.com/" rel="nofollow" style="display:inline-block; border-radius: 10px !important; text-transform: capitalize !important;" target="_blank">
                     <span>
                     Click to View User Demo
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <br/>
      </div>
   </section> --}}
   <!-- =============SECTION-START============== -->
   {{-- <div class="pricing-table gray-bg" id="pricing-tabs" style="padding: 60px 0px;">
      <div class="container">
         <div class="data table-responsive">
            <div class="section-title">
               <h3 class="sec_tit underline text-center">
                  Packages We Offer At Our Crypto Token Creation Services
               </h3>
               <div class="accordion" id="accordion2">
                  <table class="table-striped" style="width:100%;">
                     <tbody>
                     </tbody>
                     <thead>
                        <tr class="pr_pack">
                           <th rowspan="1">
                              Packages
                           </th>
                           <th>
                              Basic
                           </th>
                           <th>
                              Premium
                           </th>
                           <th>
                              Ultimate
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th class="theme-color-bg" colspan="4">
                              Token Website Development
                           </th>
                        </tr>
                        <tr>
                           <td>
                              Whitepaper Writing and Designing
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              Explainer Video Creation
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              Sale Timer
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              Roadmap
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              Token Details
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              Contact Form
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                           <td>
                              <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <div class="accordion-group">
                     <div class="accordion-heading">
                        <a class="accordion-toggle tab_high" data-parent="#accordion2" data-toggle="collapse" href="#collapseOne">
                        Token Investor Dashboard Development
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="collapseOne">
                        <div class="accordion-inner">
                           <table class="table-striped" style="width:100%;">
                              <tbody>
                                 <tr>
                                    <td>
                                       Registration
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Login
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Forget Password
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Edit Profile
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Invite Friends for Referral Program
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Add Fund in the Dashboard
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Order Coin Process
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Coin Earning History
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Submit a ticket for a Complaint
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Multi-language Support
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-group">
                     <div class="accordion-heading">
                        <a class="accordion-toggle tab_high" data-parent="#accordion2" data-toggle="collapse" href="#collapseTwo">
                        Coin Owner Dashboard Development
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="collapseTwo">
                        <div class="accordion-inner">
                           <table class="table-striped" style="width:100%;">
                              <tbody>
                                 <tr>
                                    <td>
                                       Login
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Forget Password
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Token Manager
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Content Manager
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Complaints Manager
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-group">
                     <div class="accordion-heading">
                        <a class="accordion-toggle tab_high" data-parent="#accordion2" data-toggle="collapse" href="#collapseThree">
                        Token Development
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="collapseThree">
                        <div class="accordion-inner">
                           <table class="table-striped" style="width:100%;">
                              <tbody>
                                 <tr>
                                    <td>
                                       Smart Contract Development
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       dApp Development
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Web Wallet Development
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-group">
                     <div class="accordion-heading">
                        <a class="accordion-toggle tab_high" data-parent="#accordion2" data-toggle="collapse" href="#collapseFour">
                        Token Marketing
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="collapseFour">
                        <div class="accordion-inner">
                           <table class="table-striped" style="width:100%;">
                              <tbody>
                                 <tr>
                                    <td>
                                       Token Marketing
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Marketing Advice
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Airdrop Campaign setup
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Bounty Campaign setup
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Paid Exchange Listings
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Token PR Campaign
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Community Building
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Content Marketing Campaign
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Token Listing
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Social Media Campaign
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Post-launch Maintenance
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/no.webp"/>
                                    </td>
                                    <td>
                                       <img src="https://www.blockchainappfactory.com/images/yes.webp"/>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <table class="table-striped" style="width:100%;">
                     <tbody>
                        <tr>
                           <td style="padding: 20px 0px;">
                           </td>
                           <td class="btnpro">
                              <a data-target="#myModal" data-toggle="modal" rel="nofollow" type="button">
                              Order Now
                              </a>
                           </td>
                           <td class="btnpro">
                              <a data-target="#myModal1" data-toggle="modal" rel="nofollow" type="button">
                              Order Now
                              </a>
                           </td>
                           <td class="btnpro">
                              <a data-target="#myModal2" data-toggle="modal" rel="nofollow" type="button">
                              Order Now
                              </a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div> --}}
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
      background: #ffb000 none repeat scroll 0 ;
      }
   </style>
   <!-- =============SECTION-START============== -->
   <div class="common_spacing uniq_features">
      <div class="why-blockchain-sec">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
               </div>
            </div>
            <div class="row md-flex">
               <div class="col-md-6 col-sm-12 col-md-12 pull-left">
                  <img alt=" " class="lazy br-5" src="{{ asset('images/token-development/img-1.webp') }}" title=" "/>
               </div>
               <div class="col-md-6 col-sm-12 col-md-12 pull-right">
                  <h3 class="font-wei mb20">
                     Supercharge Your Project with Custom-Built Crypto Tokens
                  </h3>
                  <p>
                     Our expert token development team crafts custom crypto tokens designed to elevate your business. By harnessing the latest trends and cutting-edge technologies, we drive your venture to achieve its maximum potential.
                  </p>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 pull-right">
                     <ul>
                        <li>
                           Ensure Token Liquidity
                        </li>
                        <li>
                           Build Brand Value
                        </li>
                        <li>
                           Improve Market Efficiency
                        </li>
                        <li>
                           Leverage Airdrop Marketing
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-md-12 pull-right">
                     <ul>
                        <li>
                           Remove Intermediaries
                        </li>
                        <li>
                           Offer Token Rewards for Signups
                        </li>
                        <li>
                           Facilitate Global Investments
                        </li>
                        <li>
                           Expand Your User Base
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- =============SECTION-START============== -->
   <div class="technologies gray_bg" style="background:#eee;">
      <div class="container">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="sec_tit underline text-center">
               We Revolutionize Industries with Our Cryptocurrency Tokens
            </h3>
            {{-- <p class="text-center" style="font-size: 16px;">
               Our crypto token development services bring novel solutions to several globe-building industries.
            </p> --}}
            <ul>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/e-commerce.png') }}"/>
                  <p class="white">
                     E-commerce
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/insurance.png') }}"/>
                  <p class="white">
                     Banking &amp; Insurance
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/real-estate.png') }}"/>
                  <p class="white">
                     Real Estate
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/art.webp') }}"/>
                  <p class="white">
                     Fine Art
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/government.png') }}"/>
                  <p class="white">
                     Government
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/tourism.png') }}"/>
                  <p class="white">
                     Tourism &amp; Hospitality
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/healthcare.png') }}"/>
                  <p class="white">
                     Healthcare
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/education.png') }}"/>
                  <p class="white">
                     Education
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/energy.png') }}"/>
                  <p class="white">
                     Energy
                  </p>
               </li>
               <li>
                  <img class="lazy" src="{{ asset('images/token-development/icons/nft-gaming.png') }}"/>
                  <p class="white">
                     Gaming
                  </p>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!-- =============SECTION-START============== -->
   <style type="text/css">
      .category-item.aos-item:hover .text-center{position: relative; z-index: 99; color: #000 !important;}
   </style>
   @include('static.crypto-coins', array(
      'title' => 'Exceptional Multi-Chain Token Development Across Multiple Blockchains', 
      'desc' => 'We specialize in leveraging a variety of advanced blockchain networks to deliver top-notch multi-chain token development solutions.',
      'cta_1' => '',
      'cta_2' => ''
   ))
   <!-- =============SECTION-START============== -->
   <section class="welcome-content">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
               <h2 class="sec_tit underline text-center text-white">
                  Our core Technology Component for High-tech Token development
               </h2>
               <p class="text-center text-white" style="font-size: 16px;">
                  Tap into the blockchain industry with the best technology available. We offer 15+ years of expertise in the following areas.
               </p>
            </div>
            <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <ul>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/react.webp') }}"/>
                     </div>
                     <p class="white">
                        React JS
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/angular.webp') }}"/>
                     </div>
                     <p class="white">
                        Angular JS
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/laravel.webp') }}"/>
                     </div>
                     <p class="white">
                        Laravel
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/php.png') }}"/>
                     </div>
                     <p class="white">
                        PHP
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/node-js_logo.webp') }}"/>
                     </div>
                     <p class="white">
                        Node JS
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/go-lang.webp') }}"/>
                     </div>
                     <p class="white">
                        Golang
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/sql.webp') }}"/>
                     </div>
                     <p class="white">
                        MySQL
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/postgresql.webp') }}"/>
                     </div>
                     <p class="white">
                        PostgreSQL
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/mongodb.webp') }}"/>
                     </div>
                     <p class="white">
                        MongoDB
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/ipfs.webp') }}"/>
                     </div>
                     <p class="white">
                        IPFS
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/filecoin.webp') }}"/>
                     </div>
                     <p class="white">
                        Filecoin
                     </p>
                  </li>
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/token-development/icons/pinata.webp') }}"/>
                     </div>
                     <p class="white">
                        Pinata
                     </p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- =============SECTION-START============== -->
   <div class="common_spacing uniq_features">
      <div class="why-blockchain-sec">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <h3 class="font-wei mb20">
                     Partner with a Leading Token Development Company
                     
                  </h3>
                  <p>
                     Our team of expert token developers is committed to turning your project vision into reality. We specialize in creating tokens across various blockchain standards, ensuring top-notch utility and security.
                        <br/>
                        <br/>
                        At Blockchain App Factory, we transform the goals of entrepreneurs and brand owners into successful outcomes. Our expertise covers over 10 leading layer-1 and layer-2 blockchain networks, delivering versatile tokens with a range of features.
                     </p>
               </div>
            </div>
            <div class="row md-flex">
               <p>Why Choose Us?</p>
               <div class="col-md-4 col-sm-12 col-md-12 pull-right">
                  <ul>
                     <li>
                        Experienced Blockchain Developers
                     </li>
                     <li>
                        Expertise in Multiple Token Standards
                     </li>
                     <li>
                        Certified and Skilled Teams
                     </li>
                     <li>
                        Business-Focused Solutions
                     </li>
                     <li>
                        Cost-Effective Services
                     </li>
                  </ul>
               </div>
               <div class="col-md-3 col-sm-12 col-md-12 pull-right">
                  <ul>
                     <li>
                        Custom Token Solutions
                     </li>
                     <li>
                        Complete ICO Support
                     </li>
                     <li>
                        Free Consultation
                     </li>
                     <li>
                        Timely Project Delivery
                     </li>
                     <li>
                        24/7/365 Technical Support
                     </li>
                  </ul>
               </div>
               <div class="col-md-5 col-sm-12 col-md-12 pull-left">
                  <img alt=" " class="lazy br-5" src="{{asset('images/token-development/img-2.webp')}}" title=" "/>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- =============SECTION-START============== -->
    {{-- <div class="common_spacing gray_bg"> @include('static.faq')</div> --}}

    <div class="product-section fag_sec p-50">
      <div class="container">
         <div class="section-top">
            <div class="section-header text-center">
               <h4 class="section-title mt20 underline">
                  FAQ
               </h4>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-12">
               <div class="faq-content">
                  <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                           <h5 class="panel-title">
                              <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq1" role="button">
                              <span>
                                 What is a Token in Blockchain and Cryptocurrency?
                              </span>
                              </a>
                           </h5>
                        </div>
                        <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="faq1" role="tabpanel">
                           <div class="panel-body">
                              <p>
                                 A token is a digital asset on a blockchain that represents different types of value or rights. Built on existing blockchains, tokens can be used for:
                              </p>
                              <ul class="list-ico">
                                 <li>
                                    <b>Transactions</b>
                                 </li>
                                 <li>
                                    <b>Access to services</b>
                                 </li>
                                 <li>
                                    <b>Representing assets or utilities</b>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                           <h5 class="panel-title">
                              <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq2" role="button">
                              <span>
                                 How is a Token Different from a Cryptocurrency?
                              </span>
                              </a>
                           </h5>
                        </div>
                        <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="faq2" role="tabpanel">
                           <div class="panel-body">
                              <ul class="list-ico">
                                 <li>
                                    <b>
                                       Cryptocurrency -
                                    </b>
                                    Digital money for transactions and value exchange (e.g., Bitcoin, Ethereum).
                                 </li>
                                 <li>
                                    <b>
                                       Token -
                                    </b>
                                    Created on an existing blockchain and used for:
                                    <ul class="list-ico">
                                       <li><b>Representing assets</b></li>
                                       <li><b>Providing access rights</b></li>
                                       <li><b>Offering utility in applications</b></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                           <h5 class="panel-title">
                              <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq3" role="button">
                              <span>
                                 What is the Purpose of Developing a Token?
                              </span>
                              </a>
                           </h5>
                        </div>
                        <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="faq3" role="tabpanel">
                           <div class="panel-body">
                              <p>
                                 Developing a token serves multiple purposes, including:
                              </p>
                              <ul class="list-ico">
                                 <li>
                                    <b>
                                       Fundraising -
                                    </b>
                                    Through Initial Coin Offerings (ICOs) or similar methods.
                                 </li>
                                 <li>
                                    <b>
                                       Access -
                                    </b>
                                    Granting rights to services or platforms.
                                 </li>
                                 <li>
                                    <b>
                                       Representation -
                                    </b>
                                    Digital assets or ownership in applications.
                                 </li>
                                 <li>
                                    <b>
                                       Engagement -
                                    </b>
                                    Building and managing a community or user base.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                           <h5 class="panel-title">
                              <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq4" role="button">
                              <span>
                                 What is the Process of Creating a Token?
                              </span>
                              </a>
                           </h5>
                        </div>
                        <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="faq4" role="tabpanel">
                           <div class="panel-body">
                              <ul class="list-ico">
                                 <li>
                                    <b>
                                       Define Purpose -
                                    </b>
                                    Identify the token’s use case and functionality.
                                 </li>
                                 <li>
                                    <b>
                                       Select Platform -
                                    </b>
                                    Choose a suitable blockchain (e.g., Ethereum, Binance Smart Chain).
                                 </li>
                                 <li>
                                    <b>
                                       Design Features
                                    </b>
                                    Set token attributes and functionalities.
                                 </li>
                                 <li>
                                    <b>
                                       Develop Smart Contract
                                    </b>
                                    Code and test the rules governing the token.
                                 </li>
                                 <li>
                                    <b>
                                       Deploy
                                    </b>
                                    Launch the token on the chosen blockchain.
                                 </li>
                                 <li>
                                    <b>
                                       Distribute
                                    </b>
                                    Implement strategies to reach your audience.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                           <h5 class="panel-title">
                              <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq5" role="button">
                              <span>
                                 Which Blockchain Platforms Support Token Creation?
                              </span>
                              </a>
                           </h5>
                        </div>
                        <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="faq5" role="tabpanel">
                           <div class="panel-body">
                              <ul class="list-ico">
                                 <li>
                                    <b>
                                       Ethereum -
                                    </b>
                                    Popular for making various tokens (e.g., ERC-20, ERC-721).
                                 </li>
                                 <li>
                                    <b>
                                       Binance Smart Chain -
                                    </b>
                                    Offers low fees and fast performance.
                                 </li>
                                 <li>
                                    <b>
                                       Solana
                                    </b>
                                    Ideal for quick transactions and low costs.
                                 </li>
                                 <li>
                                    <b>
                                       Polygon
                                    </b>
                                    Enhances the scalability of Ethereum tokens.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                           <h5 class="panel-title">
                              <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq6" role="button">
                              <span>
                                 What Are the Common Token Standards?
                              </span>
                              </a>
                           </h5>
                        </div>
                        <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="faq6" role="tabpanel">
                           <div class="panel-body">
                              <ul class="list-ico">
                                 <li>
                                    <b>
                                       ERC-20 
                                    </b>
                                    for fungible tokens on Ethereum.
                                 </li>
                                 <li>
                                    <b>
                                       ERC-721
                                    </b>
                                    for NFTs on Ethereum.
                                 </li>
                                 <li>
                                    <b>
                                       BEP-20
                                    </b>
                                    for tokens on Binance Smart Chain.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                           <h5 class="panel-title">
                              <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq7" role="button">
                              <span>
                                 How Can One Ensure the Security of a Token?
                              </span>
                              </a>
                           </h5>
                        </div>
                        <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="faq7" role="tabpanel">
                           <div class="panel-body">
                              <ul class="list-ico">
                                 <li>
                                    <b>
                                       Secure Coding 
                                    </b>
                                    Follow best practices in smart contract development.
                                 </li>
                                 <li>
                                    <b>
                                       Regular Audits
                                    </b>
                                    Conduct security audits by third-party experts.
                                 </li>
                                 <li>
                                    <b>
                                       Use Reputable Tools
                                    </b>
                                    Employ established development tools and platforms.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                           <h5 class="panel-title">
                              <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq8" role="button">
                              <span>
                                 What is a Token in Blockchain and Cryptocurrency?
                              </span>
                              </a>
                           </h5>
                        </div>
                        <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="faq8" role="tabpanel">
                           <div class="panel-body">
                              <ul class="list-ico">
                                 <li>
                                    <b>Regulatory Compliance</b>
                                 </li>
                                 <li>
                                    <b>Security</b>
                                 </li>
                                 <li>
                                    <b>Market Adoption</b>
                                 </li>
                                 <li>
                                    <b>Platform Selection</b>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

  
   {{-- @include('static.spotlight')
   @include('static.newsletter')
   @include('static.contact-form') --}}
</div>
@endsection