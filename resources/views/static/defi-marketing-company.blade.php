@extends('layouts.static')
    @section('title', 'Defi Marketing Services')
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

    .banner {
        background: linear-gradient(45deg, #0f90ff, #002d4e);
        height: auto;
        padding: 140px 0px 70px 0px;
    }

    .banner_content h4 {
        font-size: 30px;
        color: #fff;
        line-height: 45px;
        margin-bottom: 20px;
    }

    .banner_content {
        /*max-width: 900px;
    margin: 0 auto;*/
    }

    .common_h3.sec-tit {
        color: #000000;
        font-weight: 700;
        letter-spacing: 1.5px;
        font-size: 27.46px;
    }

    .sec_tit {
        color: #000000;
        font-weight: 700;
    }

    @media only screen and (min-width:769px) {
        .banner_content {
            text-align: left
        }
    }

    @media only screen and (max-width:768px) {
        .common_h3.sec-tit {
            font-size: 23px;
        }
    }

    @media only screen and (max-width: 479px) {
        .banner_content h4 {
            font-size: 23px;
            color: #fff;
            line-height: 35px;
            margin-bottom: 20px;
        }

    }

    @media (max-width: 767px) {
        h2.common_h2 {
            font-size: 16px !important;
        }

    }

    .bann_tit h1,
    .bann_tit {
        font-size: 36px;
        line-height: 1.2 !important;
        color: #000000;
        padding: 0;
        margin: 0px;
        font-weight: 500;
        letter-spacing: 1.5px;
    }

    .bann_tit h1 {
        display: inline-block;
    }

    .bann_tit {
        margin-top: 150px;
        margin-bottom: 30px;
    }

    .contentall p {
        font-size: 18px;
        margin-bottom: 30px;
        color: #000000;
    }

    .large-header {
        max-height: 700px !important;
    }

    .last-sec:before {
        content: "";
        position: absolute;
        left: 0px;
        right: 0px;
        bottom: 0px;
        top: 0px;
        background: linear-gradient(45deg, #90595973, #0000009c), url('{{ asset('images/defi-marketing/launch-image.webp') }}');
        z-index: -1;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .large-header:before {
        position: absolute;
        content: '';
        background: none;
        z-index: 10;
        left: 0;
        top: auto;
        width: 100%;
        height: 100%;
    }

    .text-white {
        color: #fff;
    }

    .last-sec {
        position: relative;
    }

    .section-top {
        display: inline-block;
        width: 100%;
        padding-left: 30px;
    }

    .section-title {
        text-transform: capitalize;
        letter-spacing: 0px;
        color: #000000;
        font-weight: 700;
    }

    h3.section-title {
        font-size: 27.46px;
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
        padding: 8px 15px 12px 50px;
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

    .marketing {
        border-radius: 12px;
    }

    @media (max-width: 767px) {
        .banner_content p {
            margin: 0px !important;
        }
    }

    .cost {
        background: #fff;
        background-size: cover;
        padding: 60px 0px;
    }

    .overlay-bg {
        position: relative;
    }

    .even-space {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .cost h2,
    .cost h3,
    .cost p {
        color: #000;
        font-weight: 400;
    }

    .section-title h2,
    .section-title h3 {
        font-size: 30px !important;
        font-weight: 500;
        line-height: 1.5em;
        text-transform: capitalize;
    }

    .section-title hr {
        height: 2px;
        width: 90px;
        text-align: center;
        position: relative;
        margin: 0 auto 20px auto;
        border: 0;
        background: #1d204d !important;
    }

    .cost ul {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        border-radius: 7px;
        justify-content: center;
    }

    .cost ul li {
        width: 28%;
        padding: 20px;
        background: rgba(255, 255, 255, 0.2);
        margin: 2.5%;
        border: 1px solid #2a242461;
        position: relative;
    }

    .cost ul li .icons {
        width: 70px;
        height: 70px;
        padding: 10px;
        margin: 0 auto;
        background: #fff;
        border-radius: 50%;
        border: 2px solid #1d204d9e;
    }

    .cost ul li p h3,
    .serv-tit {
        display: block;
        font-size: 18px;
        padding-top: 10px;
        margin-bottom: 10px;
        font-weight: 700 !important;
        color: #000000 !important;
    }

    .lines-1 hr {
        border: 0.1px solid #d3d3d357 !important;
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .cost ul li {
            width: 100%;
        }
    }

    .title-th {
        color: #000000;
        font-weight: 700 !important;
    }

    .cost ul li:hover {
        background: #47b475;
        color: #fff !important;
    }

    .cost ul li:hover strong {
        color: #fff !important;
    }

    .cost ul li:hover hr {
        color: #fff !important;
    }

    .cost ul li:hover p,
    .cost ul li:hover h3 {
        color: #fff !important;
    }

    .shard_master-node {
        background: linear-gradient(rgb(16 31 64 / 0%), rgb(14 18 18 / 86%)), black url('{{ asset('images/defi-marketing/security-defi-img.webp') }}');
        padding-top: 60px;
        background-size: cover;
        padding-bottom: 60px;
        background-position: center;
        background-attachment: fixed;
    }

    .font_wei {
        color: #ffffff;
        font-weight: 700;
    }

    .deploy-text {
        color: #fff;
        font-size: 18px;
        line-height: 1.6;
    }

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
        background: linear-gradient(#09abe9, #00c5a7);
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
        background: #47b475 !important;
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
        font-size: 16px !important;
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
        background: linear-gradient(#09abe9, #00c5a7);
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
        padding: 11px 5px;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: bold;
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
    }

    @media screen and (max-width: 600px) {

        .bann_tit h1,
        .bann_tit {
            font-size: 20px;
            font-weight: 700;
        }

        .banner_content p {
            margin-bottom: 20px !important;
        }
    }
</style>


<div class="header-shadow" id="home">
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
                        class="btn" data-cf-modified-8dee67fcfb8d550008458518-="">Submit</button>
                </form>

                <div class="social">
                    <a rel="nofollow" rel="noopener" aria-label="Whatsapp" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calendar" aria-hidden="true"
                            title="Calendly"></i> Schedule A Meeting &nbsp;</a>

                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#c8a1a6aea788aaa4a7aba3aba0a9a1a6a9b8b8aea9abbca7bab1e6aba7a5"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>

            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="8dee67fcfb8d550008458518-text/javascript">
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
    <!-- <div class="page-loader">
          <div class="spinner"></div> 
          </div> -->
    <div class="main">
        {{-- <div class="banner">
            <div class="  contentall">
                <div class="container">
                    <div class="col-md-6 col-sm-12 col-md-12">
                        <div class="bann_tit">
                            <h1 class="text-white">DeFi Marketing services </h1>
                        </div>
                        <p class="text-white">By fulfilling the customers’ needs perfectly, we render high-quality and
                            cost-effective DeFi Coin Marketing services to help you take a lead in the competitive
                            industry. </p>
                        <div class=" ">
                            <div class="cta_mine"> <a href="#newsletter-form-sec"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk
                                        with our Experts</span></a> <a href="#pricing-tabs"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>View
                                        Package</span></a> </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-md-12 text-center">
                        <img src="{{ asset('images/defi-marketing/banner-img.webp') }}">
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="banner">
            <div class="contentall">
                <div class="container">
                    <div class="row">
                        <!-- Left Content -->
                        <div class="col-md-6 col-sm-12">
                            <div class="bann_tit">
                                <h1 class="text-white">DeFi Marketing Solutions</h1>
                            </div>
                            <p class="text-white">
                                Our premium, budget-friendly DeFi Coin Marketing services are designed to meet your customers' needs with precision, propelling you ahead in the competitive landscape.
                            </p>
                            <div class="cta_mine">
                                <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn">
                                    <span>CONNECT WITH OUR EXPERTS</span>
                                </a>
                                {{-- <a href="#pricing-tabs" class="nectar-button medium regular accent-color regular-button nec-btn">
                                    <span>EXPLORE OUR PACKAGE</span>
                                </a> --}}
                            </div>
                        </div>
                        <!-- Right Image -->
                        <div class="col-md-6 col-sm-12 text-center">
                            <img src="{{ asset('images/defi-marketing/banner-img.webp') }}" alt="DeFi Marketing Banner" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="common_spacing uniq_features">
            <div class="why-blockchain-sec">
                <div class="container">
                    <!-- Section Title -->
                    <h2 class="common_h3 sec-tit underline title-th text-center" style="padding: 20px 0px;">
                        Elevate Your DeFi Presence with Elite Marketing Strategies
                    </h2>
                    <p class="text-center">
                        DeFi marketing is a strategic approach to promoting decentralized finance projects within the Web 3.0 ecosystem, ensuring you attract the ideal users to your platform precisely when needed.
                    </p>
        
                    <!-- First Row -->
                    <div class="row align-items-center">
                        <!-- Left Text Content -->
                        <div class="col-md-6 col-sm-12 order-md-2">
                            <h2 class="common_h3 sec-tit underline title-th" style="padding: 20px 0px;">
                                Decoding DeFi Marketing: Your Pathway to Web3 Success
                            </h2>
                            <p>
                                As a leading authority in DeFi marketing, we have successfully executed numerous crypto initiatives. Our comprehensive services include press release distribution, social media engagement, community management, bounty campaign orchestration, landing page optimization, whitepaper creation, and public relations.
                            </p>
                            <p>
                                We guide you through every stage, from initial strategy development to reaching your target audience swiftly. Our method involves a detailed understanding of your business needs, crafting and implementing a robust marketing plan, continuously monitoring performance, and resolving challenges based on real-time feedback.
                            </p>
                        </div>
                        <!-- Right Image -->
                        <div class="col-md-6 col-sm-12 order-md-1 text-center">
                            <img src="{{ asset('images/defi-marketing/defi-marketing-services.jpg') }}" class="img-fluid marketing" alt="Defi Marketing Services" title="Defi Marketing Services">
                        </div>
                    </div>
        
                    <!-- Second Row -->
                    <div class="row align-items-center mt-4">
                        <!-- Left Text Content -->
                        <div class="col-md-6 col-sm-12">
                            <p>
                                Our solutions are meticulously crafted to align with your needs—offering customization, scalability, and cost-effectiveness. Our digital marketing experts are adept in the dynamic realms of blockchain and cryptocurrency, ensuring your promotional campaigns are both captivating and impactful. We don't just establish your digital footprint; we enhance your industry credibility and sharpen your competitive edge.
                            </p>
                            <p>
                                Our strategies are designed to drive unparalleled success and facilitate substantial growth. With our elite DeFi coin marketing approach, you’ll effortlessly attract global investors and significantly boost your profit margins.
                            </p>
                        </div>
                        <!-- Right Image -->
                        <div class="col-md-6 col-sm-12 text-center">
                            <img src="{{ asset('images/defi-marketing/defi-marketing-company.webp') }}" class="img-fluid marketing" alt="Defi Marketing Company" title="Defi Marketing Company">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="last-sec common_spacing">
            <div class="container">
                <div class="row real-estate-list">
                    <div class="section-title text-center">
                        <h2 class="title-th font_wei">Ignite Your DeFi Marketing Campaign Today and Make a Bold Statement!</h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>
                    <div class="text-center cta_mine">
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
                            <a class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                                href="{{ url('consultation') }}"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a>
                            <a href="https://t.me/smartdev3ai" target="_blank"
                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>JOIN US ON TELEGRAM</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('static.hover-color-hr-cards-3col', [
            'title' => "Comprehensive DeFi Marketing Solutions We Offer", 
            'desc' => "Our DeFi marketing expertise elevates your digital venture by reaching a broader audience and maximizing engagement across multiple channels.",
            'cards' => [
                [
                    'title' => "Discord Marketing",
                    'desc' => "Harness the power of Discord's dynamic platform to drive your business forward, leveraging its unique features to build and engage a dedicated community.",
                    'image' => 'defi-marketing/discord.webp'
                ],
                [
                    'title' => 'Social Media Marketing',
                    'desc' => "Expand your reach on major social networks like Facebook, Twitter, and Reddit. We create impactful strategies that resonate with your target audience and boost your digital presence.",
                    'image' => 'defi-marketing/social-media.png'
                ],
                [
                    'title' => 'PR & Influencer Marketing',
                    'desc' => "Cultivate strong relationships with B2B and B2C channels through strategic press releases and media coverage. We harness influencer power to generate organic traffic and enhance your brand’s visibility.",
                    'image' => 'defi-marketing/influencer.png'
                ],
                [
                    'title' => "Legal Framework Advisory",
                    'desc' => "Ensure compliance with all regulations to keep your project legally sound and secure, avoiding potential pitfalls with diligent legal oversight.",
                    'image' => 'defi-marketing/legal-advisory.webp'
                ],
                [
                    'title' => "Bounty Campaign Management",
                    'desc' => "Foster grassroots support by organizing targeted bounty programs and distributing rewards that energize and engage your community.",
                    'image' => 'defi-marketing/bounty-compaign.webp'
                ],
                [
                    'title' => "Listing and Market Making",
                    'desc' => "Drive significant investment with high liquidity through strategic DeFi token marketing and market positioning.",
                    'image' => 'defi-marketing/listing.png'
                ],
                [
                    'title' => "Website Development",
                    'desc' => "Enhance your online presence with a compelling and optimized landing page that attracts and informs potential clients.",
                    'image' => 'defi-marketing/web-development.webp'
                ],
                [
                    'title' => "Marketing & Community Management",
                    'desc' => "Build and sustain a vibrant community around your brand to support long-term growth and user engagement.",
                    'image' => 'defi-marketing/marketing-community.webp'
                ],
                [
                    'title' => "White Papers",
                    'desc' => "Develop detailed and professional white papers to articulate your project's technical details and attract investor interest.",
                    'image' => 'defi-marketing/whitepaper.png'
                ],
                [
                    'title' => "Development of Online Presence",
                    'desc' => "Execute targeted communication campaigns across various platforms using diverse content formats to reach and influence your audience effectively.",
                    'image' => 'defi-marketing/development.png'
                ],
                [
                    'title' => "Content Marketing",
                    'desc' => "Implement a comprehensive content strategy that integrates blogs, articles, infographics, and videos to drive engagement and establish authority.",
                    'image' => 'defi-marketing/content-marketing.png'
                ],
                [
                    'title' => "Video Marketing",
                    'desc' => "Produce and disseminate engaging educational videos to showcase the features and benefits of your cryptocurrency exchange.",
                    'image' => 'defi-marketing/video-marketing.png'
                ],
                [
                    'title' => "Product Marketing",
                    'desc' => "Position your DeFi product as a leader in the space by openly discussing its value and why it is essential to your target audience.",
                    'image' => 'defi-marketing/product-marketing.png'
                ],
                [
                    'title' => "Airdrop & Bounty Program",
                    'desc' => "Generate buzz and attract attention with DeFi token airdrops and bounty programs, encouraging positive word-of-mouth and community involvement.",
                    'image' => 'defi-marketing/airdrop-bounty-program.webp'
                ],
                [
                    'title' => "Telegram Marketing",
                    'desc' => "Maintain direct communication with your user base through instant updates delivered via Telegram’s messaging platform.",
                    'image' => 'defi-marketing/telegram.png'
                ],
                [
                    'title' => "Email and Newsletters",
                    'desc' => "Keep your clients informed with newsletters, product updates, and announcements through strategic email marketing.",
                    'image' => 'defi-marketing/email-newsletter.png'
                ],
                [
                    'title' => "Affiliate Networking",
                    'desc' => "Expand your customer base with a robust affiliate network that connects you with potential clients through trusted relationships.",
                    'image' => 'defi-marketing/affiliate-networking.png'
                ],
                [
                    'title' => "Advertising Assistance",
                    'desc' => "Maximize your ROI with targeted Pay-Per-Click advertising, utilizing tools like Google Ads to reach specific geographies and demographics effectively.",
                    'image' => 'defi-marketing/advertising-assistance.png'
                ],
            ],
        ])
        <style>
            .list {
                margin-top: 0rem;
                margin-bottom: 0rem !important;
                line-height: 35px;
                text-indent: -17px;
                list-style: none;
            }

            .list li {
                word-break: break-word;
            }

            .list li:before {
                content: " \f0da ";
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                color: #2e9107;
                margin-right: 10px;
            }
        </style>

        <div class="common_spacing gray_bg">
            <div class="why-blockchain-sec">

                <div class="container">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-md-12">
                            <h2 class="common_h3 sec-tit underline title-th text-center" style="padding: 20px 0px;">Advantages of Decentralized Finance Promotion</h2>
                            <ul class="list">
                                <li><strong>Global and Local Reach: </strong>DeFi marketing leverages advanced SEO techniques to effortlessly connect with both global and local audiences. Tailored, location-specific advertising enhances effectiveness by aligning with your venture's core values.</li>
                                <li><strong>Simplified Financial Concepts: </strong>By delivering clear, compelling content, DeFi marketing makes complex financial concepts accessible to crypto traders of all experience levels. This educational approach resonates deeply within the crypto community.</li>
                                <li><strong>Comprehensive Campaign Strategies: </strong>DeFi marketing employs a diverse range of strategies to ensure widespread audience coverage. By integrating various Web2 digital marketing techniques, we maximize reach and impact.</li>
                                <li><strong>Versatile Content Creation: </strong>Utilizing multiple marketing strategies allows DeFi marketers to produce varied content formats, catering to different preferences—whether through blogs, videos, or other mediums.</li>
                                <li><strong>Enhanced Engagement: </strong>DeFi marketing harnesses the power of digital marketing to achieve elevated engagement levels. Specialized Web3 promotional tactics further amplify this engagement, driving significant attention and interaction.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('static.web3-clients', array(
            'title' => "Distinguished <span style='color:#47b475;'>Web3 Partners</span> <br> Our Ascendancy to Renown",
            'desc' => "As a leading authority in Web3 marketing, we are dedicated to delivering unparalleled services designed to elevate projects and reach target audiences through an array of sophisticated strategies. Our commitment to excellence has earned us the privilege of collaborating with premier Web3 enterprises, consistently achieving remarkable outcomes."
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
        <div class="common_spacing">
            <div class="why-blockchain-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-md-12 text-center">
                            <h2 class="common_h3 sec-tit underline title-th text-center" style="padding: 20px 0px;">How Do DeFi Marketing Services Propel DeFi Projects?</h2>
                            <p>With the surge in DeFi projects reflecting the growing potential of financial applications in the Web3 sphere, competition has intensified following the NFT boom. Tailored DeFi marketing strategies are crucial for giving emerging DeFi ventures a powerful edge.</p>
                            <p>Strategically crafted promotions can significantly boost user acquisition and enhance organic token visibility well before the official launch, ensuring a seamless operational start. While marketing decentralized finance solutions involves inherent risks, it is essential for establishing early awareness among target audiences. Our DeFi marketing services provide bespoke strategies designed to meet the unique needs of each project, amplifying its reach and impact. Additionally, we support the successful listing of DeFi tokens on leading cryptocurrency exchanges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="common_spacing gray_bg">
            <div class="why-blockchain-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-md-12">
                            <h2 class="common_h3 sec-tit underline title-th text-center" style="padding: 20px 0px;">The Blueprint for DeFi Marketing Services</h2>
                            <ul class="list">
                                <li><strong>Foundation Building: </strong>We commence with establishing a robust framework for the marketing campaign, integrating a variety of DeFi promotional tactics.</li>
                                <li><strong>Execution Phase: </strong>Our team then methodically rolls out these promotional strategies, encompassing both Web3 and Web2 methodologies to maximize reach.</li>
                                <li><strong>Platform Launch: </strong>The platform is developed and the Beta version is introduced as a premium access point, driving initial buzz and engagement.</li>
                                <li><strong>Token Integration: </strong>DeFi tokens are minted and strategically listed on major crypto exchanges to foster community growth and engagement.</li>
                                <li><strong>Community Engagement: </strong>A portion of tokens is allocated for dynamic community-building efforts, including bug bounties, airdrops, and affiliate marketing, while some are allocated to key DeFi influencers.</li>
                                <li><strong>Ongoing Promotion: </strong>From start to finish, influencers, social media, and content marketing are leveraged to sustain momentum and drive substantial visibility up to the platform's launch.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @include('static.hover-color-hr-cards-3col', [
            'title' => "DeFi Marketing Delivers Exceptional Results for Businesses", 
            'desc' => "",
            'cards' => [
                [
                    'title' => "In-Depth Analysis",
                    'desc' => "We start by immersing ourselves in your marketing goals and analyzing all pertinent factors. This thorough research enables us to devise the most effective marketing strategies tailored to your needs.",
                    'image' => ''
                ],
                [
                    'title' => 'Strategic Blueprint',
                    'desc' => "Next, our DeFi marketing experts focus on crafting a detailed and realistic roadmap. We establish clear, achievable objectives to ensure your campaign yields the highest possible outcomes.",
                    'image' => ''
                ],
                [
                    'title' => 'Flawless Execution',
                    'desc' => "Execution is where our DeFi marketing prowess truly shines. We excel at driving engagement, generating traffic, and achieving conversion targets, ensuring your campaign's success.",
                    'image' => ''
                ],
                [
                    'title' => "Continuous Improvement",
                    'desc' => "We are committed to relentless enhancement. By rigorously evaluating our performance and experimenting with innovative strategies, we continuously refine our tactics to deliver superior marketing results.",
                    'image' => ''
                ],
            ],
        ])



<section class="common_spacing gray_bg">
    <div class="uniq_features">
        <div class="why-blockchain-sec">
            <div class="container">
                <!-- First Row -->
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-2">
                        <h2 class="common_h3 sec-tit underline title-th">
                            Our Comprehensive DeFi Marketing Approach
                        </h2>
                        <p>
                            We architect DeFi marketing initiatives on dynamic blockchain platforms like Ethereum and EOS. As trailblazers in DeFi marketing, our multi-faceted strategy includes a centralized approach that maximizes long positions, ensures over-collateralization, and manages risks such as network congestion, timing discrepancies, and smart contract vulnerabilities. Our services address DeFi applications across consumer, enterprise, and institutional sectors.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/blockchain-consulting/consulting-1.png') }}" class="marketing img-fluid" alt="Defi Marketing Process" title="Defi Marketing Process">
                    </div>
                </div>
                <!-- Second Row -->
                <div class="row align-items-center mt-4">
                    <div class="col-md-6">
                        <h2 class="common_h3 sec-tit underline title-th">
                            Your Premier DeFi Marketing Partner
                        </h2>
                        <p>
                            Our deep analysis of the DeFi landscape and continual skill enhancement empower us to deliver cutting-edge marketing campaigns. As a key player in the evolving DeFi space, we leverage our advanced technical expertise to give you a competitive edge.
                        </p>
                        <p>
                            Our commitment to reliability means you can track every phase of our work in real time. We uphold the highest standards of privacy and confidentiality with a binding NDA, and we are dedicated to achieving your goals through a meticulously organized and growth-oriented strategy.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/blockchain-consulting/consulting-2.webp') }}" class="marketing img-fluid" alt="Defi Marketing Agency" title="Defi Marketing Agency">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




        <div class="shard_master-node">
            <div class="container">
                <div class="row real-estate-list">
                    <div class="section-title text-center">
                        <h2 class="font_wei">Engage DeFi Marketing Experts to Amplify Your Reach</h2>
                        <hr style="color: white;">
                        <p class="mt20 deploy-text">Leverage the expertise of seasoned DeFi marketing specialists to propel your project to new heights. With our profound knowledge of evolving blockchain technology and the cryptocurrency arena, we are adept at executing cutting-edge DeFi strategies. Our tailored, results-driven promotional campaigns are designed to drive unprecedented traffic and elevate your business’s presence.</p>
                        <div class="text-center cta_mine">
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
                                <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                            </div>
                        </div>
                    </div>
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

        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => 'Which companies offer DeFi marketing solutions?',
                    'ans' => "Various specialized agencies provide marketing services tailored to DeFi projects, leveraging their expertise to enhance visibility and drive engagement within the decentralized finance sector."
                ],
                [
                    'ques' => 'What exactly is a DeFi coin?',
                    'ans' => "A DeFi coin is a digital asset used within the decentralized finance ecosystem, designed to facilitate transactions, governance, and participation in financial protocols on blockchain platforms."
                ],
                [
                    'ques' => 'What methods are available for marketing decentralized finance projects?',
                    'ans' => "Decentralized finance marketing can employ a variety of strategies, including content marketing, social media campaigns, influencer partnerships, and targeted advertising to reach and engage the relevant audience."
                ],
                [
                    'ques' => 'Why is marketing crucial for DeFi projects?',
                    'ans' => "Marketing is essential for DeFi projects as it drives awareness, attracts potential users and investors, and establishes credibility in a highly competitive and rapidly evolving market."
                ],
                [
                    'ques' => 'What advantages does DeFi marketing provide?',
                    'ans' => 'DeFi marketing offers numerous benefits, including increased visibility, enhanced community engagement, improved user acquisition, and the ability to differentiate your project in the crowded DeFi space.'
                ],
                [
                    'ques' => 'What is the estimated budget for DeFi marketing?',
                    'ans' => "The total budget for DeFi marketing varies depending on the scope of the campaign, targeted strategies, and the specific needs of the project. It's essential to plan and allocate resources based on your project's goals and objectives."
                ],
            ],
        ])
    </div>
</div>
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