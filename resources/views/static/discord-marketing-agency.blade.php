@extends('layouts.static')
    @section('title', 'Discord Marketing Agency')
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

    .banner_content {
        text-align: left
    }

    .banner-overlay {
        background-color: rgb(0 0 0 / 35%)
    }

    .contentall a:hover {
        background: #00acdc
    }

    .banner {
        background-image: url('{{ asset('images/discord-marketing/banner.webp') }}');
        background-size: cover;
        padding-top: 110px;
        padding-bottom: 100px;
        background-repeat: no-repeat;
        height: auto;
        background-position: center
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(to right, #0000000d, #10143b00);
        opacity: .95
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none
    }

    .banner_content .contentall {
        margin-top: 85px;
        max-width: 1000px;
        margin: 125px auto 40px
    }

    .ban_tirt,
    .contentall h1 {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 38px;
        text-transform: capitalize
    }

    .contentall h1 {
        color: #fff
    }

    .contentall p {
        font-weight: 400;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 21px;
        max-width: 800px;
        margin: 0 auto 30px;
        display: block
    }

    .contentall a {
        color: #fff;
        cursor: pointer;
        margin-bottom: 15px
    }

    .sec_tit,
    .sec_tit h2 {
        font-size: 25px !important;
        font-weight: 700;
        color: #000000;
        line-height: 1.4;
        text-transform: capitalize
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        letter-spacing: 0;
        line-height: 1.3
    }

    @media (max-width:1199px) {

        .ban_tirt,
        .contentall h1 {
            font-size: 30px
        }
    }

    @media (max-width:768px) {
        .banner_content .contentall {
            margin-top: 50px;
            text-align: center
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)))
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 80px
        }

        .banner-overlay {
            background: rgb(0 0 0 / 33%);
        }

        .banner_content p {
            font-size: 14px !important
        }

        .ban_tirt,
        .contentall h1 {
            font-size: 25px
        }

        .sec_tit,
        .sec_tit h2 {
            font-size: 20px !important
        }
    }

    h3.section-title {
        font-size: 25px !important;
        font-weight: 700;
        text-transform: capitalize
    }

    .intro_cnt img {
        border-radius: 10px;
        margin-top: 0
    }

    a.home-talk-experts.w_bt {
        background: no-repeat;
        color: #47b475;
        border: 2px solid #47b475;
        padding: 8px 25px
    }

    a.home-talk-experts.w_bt:hover {
        color: #000 !important
    }

    .sec_tit h2 {
        display: inline
    }

    .workflow .workstep {
        width: calc(50% + 1px);
        padding-left: 80px;
        margin: 0 0 30px;
        float: right;
        position: relative;
        min-height: 130px;
        margin-top: 20px;
    }

    .workflow .workstep-content {
        color: #000000;
        padding: 10px 0;
        border-bottom: 1px solid #47b475;
        display: block;
        position: relative;
    }

    .workflow .workstep-content:before {
        content: '';
        background: #00b7c2;
        height: 140px;
        width: 60px;
        transform: translateY(-50%);
        position: absolute;
        left: -110px;
        top: 45%;
        clip-path: polygon(50% 0, 100% 15%, 80% 15%, 85% 100%, 15% 100%, 15% 15%, 0 15%);
    }

    .workflow .workstep-year {
        color: #000000;
        background: #00b7c2;
        font-size: 45px;
        text-align: center;
        height: 110px;
        width: 110px;
        padding: 20px 10px;
        border-radius: 50%;
        transform: translateY(-50%);
        position: absolute;
        left: -135px;
        top: 50%;
        z-index: 0;
    }

    .workflow .workstep-year:before {
        content: '';
        background-color: #f5f5f5;
        position: absolute;
        left: 8px;
        right: 8px;
        top: 8px;
        bottom: 8px;
        border-radius: 50%;
        z-index: -2;
    }

    .workflow .workstep-year span {
        line-height: 32px;
        font-weight: 500;
        display: block;
        margin-left: 4px;
        margin-top: 20px;
    }

    .workflow h4 {
        color: #000000;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .workflow .description {
        font-size: 13px;
        letter-spacing: 1px;
        line-height: 20px;
        margin: 0;
    }

    .workflow .workstep:nth-child(even) {
        padding-left: 0;
        padding-right: 80px;
        float: left;
    }

    .workflow .workstep:nth-child(even) .workstep-content:before {
        left: auto;
        right: -110px;
    }

    .workflow .workstep:nth-child(even) .workstep-year {
        left: auto;
        right: -135px;
    }

    .content1 {
        position: relative;
        width: 100%;
        max-width: 400px;
        margin: auto;
        overflow: hidden;
        margin-bottom: 30px;
    }

    .content1 .content1-overlay {
        background: rgba(0, 0, 0, 0.7);
        position: absolute;
        height: 99%;
        width: 100%;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        opacity: 0;
        -webkit-transition: all 0.4s ease-in-out 0s;
        -moz-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
    }

    .fadeIn-top {
        top: 20%;
    }

    .content1-details {
        position: absolute;
        text-align: center;
        padding-left: 1em;
        padding-right: 1em;
        width: 100%;
        top: 50%;
        left: 50%;
        opacity: 0;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    .content1-details span {
        color: #fff;
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 0.5em;
        text-transform: uppercase;
    }

    .content1:hover .content1-overlay {
        opacity: 1;
    }

    .content1:hover .content1-details {
        top: 50%;
        left: 50%;
        opacity: 1;
    }

    .content1-details p {
        color: #fff;
        font-size: 14px;
    }

    .feature {
        background: #fff;
        text-align: center;
        width: 200px;
        min-height: 196px;
        padding: 10px 15px;
        margin: 0 auto;
        border-radius: 30px;
        box-shadow: 0 8px 5px rgba(0, 0, 0, 0.2);
        position: relative;
        margin: 40px 0px;
    }

    .feature:before {
        content: '';
        background-color: #47b475;
        height: 105px;
        width: 100%;
        border-radius: 30px 30px 0 0;
        position: absolute;
        left: 0;
        top: 0;
    }

    .feature .feature-icon {
        color: #fff;
        background: #f2f2f2;
        font-size: 50px;
        line-height: 90px;
        width: 110px;
        height: 110px;
        margin: 0 auto 10px;
        border-radius: 10px 10px 0 0;
        transform: translateY(-20px);
        position: relative;
        clip-path: polygon(0% 0%, 100% 0, 100% 70%, 50% 100%, 0 70%);
        border: 2px solid #47b475;
    }

    .feature .feature-icon:before {
        content: "";
        width: 120px;
        height: 90px;
        border-radius: 10px 10px 0 0;
        transform: translateX(-50%);
        position: absolute;
        top: 0px;
        left: 50%;
        z-index: -1;
        clip-path: polygon(0% 0%, 100% 0, 100% 70%, 50% 100%, 0 70%);
    }

    .feature:hover .feature-icon img {
        transform: rotate(360deg);
        transition: all 0.3s ease;
    }

    .feature h3 {
        color: #000000;
        font-size: 17px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin: 0 0 5px 0;
    }

    @media screen and (max-width:990px) {
        .feature {
            margin-bottom: 40px !important;
        }
    }

    .part1 {
        padding: 10px;
    }

    .part2 {
        padding: 10px;
    }

    .part1 img {
        margin-top: 20px;
    }

    @media screen and (max-width: 500px) {
        .workflow .workstep {
            width: 100%;
            padding-left: 0px;
            min-height: auto;
        }

        .workflow .workstep:nth-child(even) {
            padding-right: 0px;
        }

        .part1 {
            text-align: center;
        }

        .part2 {
            text-align: center;
        }

        .workflow .workstep-year span {
            display: none;
        }

        .workflow .workstep-content:before {
            display: none;
        }

        .workflow .workstep:nth-child(even) .workstep-year {
            display: none;
        }

        .feature {
            margin: 0 auto !important;
            margin-bottom: 40px !important;
        }
    }

    @media screen and (min-width: 1300px) {
        .workflow .workstep-content {
            padding-bottom: 121px;
        }
    }

    .list {
        margin-top: 0rem;
        margin-bottom: 0rem !important;
        font-size: 14px;
        line-height: 35px;
        text-indent: -17px;
        list-style: none;
    }

    .list li {
        word-break: break-word;
    }

    .list li:before {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: " \f0da ";
        color: #47b475;
        margin-right: 10px;
        font-size: 18px;
    }

    .primary-list li {
        position: relative;
        padding: 4px 12px;
        margin-top: 5px;
        margin-bottom: 10px;
        padding-left: 30px;
        border-bottom: 2px solid #e9e9e9;
        color: #000000;
        font-size: 14px;
        text-align: justify;
    }

    .primary-list li:before {
        position: absolute;
        font-family: "Font Awesome 5 Free";
        left: 4px;
        top: 3px;
        content: '\f111';
        font-size: 16px;
        line-height: 1;
        color: #47b475;
        border-radius: 5px;
        padding: 4px;
    }

    .serviceBox {
        background: #fff;
        text-align: center;
        padding: 0 0 25px;
        box-shadow: 0 2px 5px 0 #888282;
        border-top: 1px dashed #47b475;
        margin-top: 55px;
        margin-bottom: 20px;
        transition: all 1s ease-in-out;

    }

    .serviceBox .service-icon {
        width: 85px;
        height: 85px;
        line-height: 55px;
        border-radius: 50%;
        background: #fff;
        border: 2px dotted #47b475;
        margin: -45px auto 0;
        padding: 15px;
    }

    .serviceBox .service-icon i {
        color: #c2c2c2;
        font-size: 55px;
    }

    .serviceBox .service-content {
        padding: 0 25px;
    }

    .serviceBox .service-content h3 {
        color: #000;
        font-size: 21px;
        text-transform: capitalize;
        margin: 30px 0 10px;
    }

    .serviceBox .service-content p {
        font-size: 14px;
        color: #000;
        margin: 0 0 5px;
    }

    .serviceBox:hover .service-icon {
        background: #47b475;
        border: 2px dotted #ffffff;
        border-radius: 20%;
        transform: rotate(360deg);
        transition: all 1s ease-in-out;
    }

    @media screen and (max-width: 990px) {
        .serviceBox {
            margin-top: 80px;
        }
    }

    @media screen and (min-width: 990px) {
        .serviceBox {
            min-height: 270px;
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
                        class="btn" data-cf-modified-294bd4b73c592d13a2b5a0a9-="">Submit</button>
                </form>

                <div class="social">
                    <a rel="nofollow" rel="noopener" aria-label="Whatsapp" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calendar" aria-hidden="true"
                            title="Calendly"></i> Schedule A Meeting &nbsp;</a>

                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#11787f777e51737d7e727a727970787f706161777072657e63683f727e7c"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>

            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="294bd4b73c592d13a2b5a0a9-text/javascript">
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
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="contentall">
                                <div class="">
                                    <div class="ban_tirt">
                                        <h1>Discord Marketing Experts</h1>
                                    </div>
                                    <p>As the premier choice among Discord marketing agencies, we excel in cultivating and managing vibrant, dedicated communities. Our expertise lies in deploying strategic, results-driven campaigns to elevate your Discord server's presence and engagement.</p>
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
                                        {{-- <a rel="nofollow"
                                            class="nectar-button medium regular accent-color regular-button nec-btn"
                                            target="_blank"
                                            href="#"
                                            data-color-override="false" data-hover-color-override="false"
                                            data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                                        <a href="{{ url('consultation') }}"
                                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR SPECIALISTS</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"> <img class="" src=""> </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="intro_cnt common_spacing">
            <div class="container">
                <div class="col-lg-12">
                    <div class="section-title text-center underline">
                        <div class="sec_tit">
                            <h2>Accelerate Your NFT Success with Premier Discord Strategies</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">Our global marketing strategies are finely tuned to amplify your NFT presence through expert Discord marketing. We enhance your brand’s visibility by fostering vibrant community engagement, driving massive traction with compelling content and service updates shared on the platform. Our tailored approach to setting up and managing NFT Discord communities ensures adherence to best practices and maximizes impact.</p>
                    <p class="mt10 mb10 text-center">We empower visionary entrepreneurs to launch and promote their unique NFT projects on Discord, expanding their reach and boosting brand awareness. As Discord emerges as a dominant force over traditional business communication tools like Slack and Skype, our marketing strategies focus on deeply understanding and responding to community needs to drive substantial growth.
                    </p>
                </div>
            </div>
        </section>

        {{-- image-360-rotate-card --}}
        @include('static.image-360-rotate-card', [
            'title' => "Our Cutting-Edge Discord Marketing Strategies", 
            'desc' => "",
            'cards' => [
                [
                    'title' => "Tailored Server Creation",
                    'desc' => "We design bespoke Discord servers for your business, featuring multiple specialized channels. Whether starting from scratch or utilizing advanced templates, we ensure your server aligns perfectly with your needs.",
                    'image' => 'discord-marketing/server.png'
                ],
                [
                    'title' => 'Custom NFT Shopfront',
                    'desc' => "Our experts craft a dedicated shopfront on Discord for your NFT enterprise. This customized space allows for seamless sales and in-depth analysis of your transaction data.",
                    'image' => 'discord-marketing/n2.webp'
                ],
                [
                    'title' => 'Community Building Excellence',
                    'desc' => "We propel the growth of your Discord server by strategically inviting members through curated links. To boost engagement, we organize compelling events like giveaways and special incentives.",
                    'image' => 'discord-marketing/community.png'
                ],
                [
                    'title' => "Dynamic Content Engagement",
                    'desc' => "We consistently deliver captivating content across various formats on your Discord server. This approach drives high levels of interaction and engagement within your community.",
                    'image' => 'discord-marketing/content.png'
                ],
                [
                    'title' => "Data-Driven Optimization",
                    'desc' => "We meticulously analyze performance metrics from each post to refine and enhance our strategies. This data-driven approach ensures continuous improvement in content quality.",
                    'image' => 'discord-marketing/optimization.png'
                ],
                [
                    'title' => "Targeted Community Advertising",
                    'desc' => "Our team expertly promotes your NFTs within relevant Discord servers focused on similar interests. By leveraging these networks, we amplify your server's visibility and growth.",
                    'image' => 'discord-marketing/targeted-ads.png'
                ],
                [
                    'title' => "Addressing Customer Inquiries",
                    'desc' => "We establish a dedicated server where your customers can swiftly resolve their queries. This specialized Discord space ensures prompt and effective answers to their concerns.",
                    'image' => 'discord-marketing/customer-inquiries.png'
                ],
                [
                    'title' => "Host Engaging Events",
                    'desc' => "We organize regular, impactful events on your Discord server to maintain high levels of community interaction. Tailored to your business, these events not only foster engagement but also expand your customer reach.",
                    'image' => 'discord-marketing/events.webp'
                ],
            ],
            'cta1_name' => 'SCHEDULE A CONSULTATION',
            'cta1_link' => '#',
            'cta2_name' => 'CONNECT WITH OUR SPECIALISTS',
            'cta2_link' => 'consultation'
        ])
        
        <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center underline" style="width: 100%">
                        <div class="sec_tit">
                            <h2>Mastering the Strategy Blueprint</h2>
                        </div>
                    </div>
                </div>
                {{-- <p class="text-center">Here is the workflow that we tend to follow</p> --}}
                <div class="row">
                    <div class="col-md-12 work_flow">
                        <div class="workflow">
                            <div class="workstep">
                                <div class="workstep-content">
                                    <div class="workstep-year"> <span>01</span> </div>
                                    <div class="text">
                                        <div class="col-lg-2 part1">
                                            <img class="" src="{{ asset('images/discord-marketing/project.webp') }}">
                                        </div>
                                        <div class="col-lg-10 part2">
                                            <h4>Project Analysis</h4>
                                            <p class="description">Our expert team delves deep into your project, evaluating the team and pinpointing the target audience with precision.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="workstep">
                                <div class="workstep-content">
                                    <div class="workstep-year"> <span>
                                            02
                                        </span> </div>
                                    <div class="text">
                                        <div class="col-lg-2 part1">
                                            <img class="" src="{{ asset('images/discord-marketing/server.png') }}">
                                        </div>
                                        <div class="col-lg-10 part2">
                                            <h4>Server Construction</h4>
                                            <p class="description"> We create a meticulously crafted server with tailored channels, setting the stage for your project’s success. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="workstep">
                                <div class="workstep-content">
                                    <div class="workstep-year"> <span>
                                            03
                                        </span> </div>
                                    <div class="text">
                                        <div class="col-lg-2 part1">
                                            <img class="" src="{{ asset('images/discord-marketing/audience.png') }}">
                                        </div>
                                        <div class="col-lg-10 part2">
                                            <h4>Audience Acquisition</h4>
                                            <p class="description">We tap into established networks to attract the ideal audience, ensuring targeted engagement for your project.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="workstep">
                                <div class="workstep-content">
                                    <div class="workstep-year"> <span>
                                            04
                                        </span> </div>
                                    <div class="text">
                                        <div class="col-lg-2 part1">
                                            <img class="" src="{{ asset('images/discord-marketing/promotions.webp') }}">
                                        </div>
                                        <div class="col-lg-10 part2">
                                            <h4>Global Promotion</h4>
                                            <p class="description">We execute strategic promotional campaigns to elevate your brand’s presence on the global stage.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="workstep">
                                <div class="workstep-content">
                                    <div class="workstep-year"> <span>
                                            05
                                        </span> </div>
                                    <div class="text">
                                        <div class="col-lg-2 part1">
                                            <img class="" src="{{ asset('images/discord-marketing/performance.png') }}">
                                        </div>
                                        <div class="col-lg-10 part2">
                                            <h4>Performance Tracking</h4>
                                            <p class="description">We leverage analytical insights to measure engagement and refine strategies, optimizing content for maximum interaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="workstep">
                                <div class="workstep-content">
                                    <div class="workstep-year"> <span>
                                            06
                                        </span> </div>
                                    <div class="text">
                                        <div class="col-lg-2 part1">
                                            <img class="" src="{{ asset('images/discord-marketing/engagement.webp') }}">
                                        </div>
                                        <div class="col-lg-10 part2">
                                            <h4>Engagement Initiatives</h4>
                                            <p class="description">We design compelling activities to draw in new audiences and maintain the interest of existing ones.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="workstep">
                                <div class="workstep-content">
                                    <div class="workstep-year"> <span>
                                            07
                                        </span> </div>
                                    <div class="text">
                                        <div class="col-lg-2 col-sm-12 part1">
                                            <img class="" src="{{ asset('images/discord-marketing/support.png') }}">
                                        </div>
                                        <div class="col-lg-10 col-sm-12 part2">
                                            <h4>Support Services</h4>
                                            <p class="description">Our dedicated team ensures swift and effective responses to all inquiries, providing unparalleled support.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

            .awesome-features-icon-img{
                display: flex;
                justify-content: center;
            }
            
            .awesome-features-text h4{
                display: flex;
                justify-content: center;
            }
        </style>

        @include('static.top-right-hover-effect-3-col-card', [
            'title' => "Elite Discord Marketing Solutions for Diverse NFT Ventures", 
            'desc' => "Discover our premium Discord marketing strategies tailored to a range of NFT projects, designed to elevate your presence and drive engagement.",
            'cards' => [
                [
                    'title' => "NFT Games",
                    'desc' => "Harness the power of Discord for NFT games, where vibrant conversations and community interactions foster deeper engagement and amplify your game’s visibility.",
                    'image' => 'discord-marketing/icons/nft-gaming.png'
                ],
                [
                    'title' => 'DeFi Projects',
                    'desc' => "Revolutionize decentralized finance with our targeted Discord marketing. We effectively spotlight your DeFi services, outshining traditional methods and connecting with the right audience.",
                    'image' => 'discord-marketing/icons/defi.webp'
                ],
                [
                    'title' => 'ICO Projects',
                    'desc' => "Maximize your ICO fundraising efforts with our strategic Discord marketing. Our approach attracts high-profile supporters and generates substantial interest in your new venture.",
                    'image' => 'discord-marketing/icons/ico.png'
                ],
                [
                    'title' => "STO Promotions",
                    'desc' => "For Security Token Offerings, our Discord marketing expertise draws in potential investors, leveraging the platform’s reach to establish credibility and generate excitement.",
                    'image' => 'discord-marketing/icons/sto.svg'
                ],
                [
                    'title' => 'IGO Launchpads',
                    'desc' => "Capitalize on early investment opportunities with our Discord strategies for Initial Game Offerings. We position your IGO launchpad to attract and engage savvy investors.",
                    'image' => 'discord-marketing/icons/gaming.png'
                ],
                [
                    'title' => 'IEO Campaigns',
                    'desc' => "Drive successful Initial Exchange Offerings through Discord. Our tailored marketing solutions ensure your fundraising event gains traction and visibility across the crypto community.",
                    'image' => 'discord-marketing/icons/ieo.webp'
                ],
                [
                    'title' => "Cryptocurrency Exchanges",
                    'desc' => "Boost your cryptocurrency exchange’s presence with dynamic Discord marketing. Engage traders and investors with compelling content and a vibrant server environment.",
                    'image' => 'discord-marketing/icons/exchange.png'
                ],
                [
                    'title' => "IDO Launchpads",
                    'desc' => "Elevate your IDO launchpad with our expert Discord promotion. We facilitate investor engagement and spotlight your crypto projects effectively on the platform.",
                    'image' => 'discord-marketing/icons/ido.webp'
                ],
                [
                    'title' => 'NFT Projects',
                    'desc' => "Stand out with our specialized Discord marketing for NFTs. We build and manage dedicated community servers to enhance visibility and foster brand loyalty.",
                    'image' => 'discord-marketing/icons/nft.webp'
                ],
                [
                    'title' => 'NFT Marketplaces',
                    'desc' => "Promote your NFT marketplace with our targeted Discord strategies. We help you capture the attention of entrepreneurs and buyers in a rapidly growing market.",
                    'image' => 'discord-marketing/icons/marketplaces.png'
                ],
                [
                    'title' => "NFT Collectibles",
                    'desc' => "Showcase your unique NFT collectibles with our expert Discord marketing. We deploy strategies that highlight your assets and build a dedicated collector community.",
                    'image' => 'discord-marketing/icons/collectibles.png'
                ],
                [
                    'title' => 'Metaverse Games',
                    'desc' => "Drive interest in your Metaverse game with our engaging Discord campaigns. Regular updates and exotic content capture the attention of gaming enthusiasts.",
                    'image' => 'discord-marketing/icons/metaverse.png'
                ],
                [
                    'title' => 'Stablecoins',
                    'desc' => "Promote your Stablecoin effectively through Discord. Our marketing services enhance awareness and attract a loyal fan base to your stable currency offering.",
                    'image' => 'discord-marketing/icons/stable.webp'
                ],
                [
                    'title' => "Cryptocurrency",
                    'desc' => "Integrate Discord into your cryptocurrency marketing strategy. Our services underscore the platform’s critical role in expanding your reach and boosting engagement.",
                    'image' => 'discord-marketing/icons/cryptocurrency.png'
                ],
            ],
        ])

        @include('static.web3-clients', array(
            'title' => "Distinguished <span style='color:#47b475;'>Web3 Partners</span> <br> We Ignite Global Success",
            'desc' => "As a leading Web3 marketing powerhouse, we are dedicated to delivering unparalleled services that catapult projects into the spotlight. Our multifaceted strategies have propelled us to collaborate with top-tier Web3 enterprises, consistently achieving remarkable outcomes and driving extraordinary growth."
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
        <section class="intro_cnt common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center underline" style="width: 100%">
                        <div class="sec_tit">
                            <h2>Harnessing Discord's Power to Build Thriving Communities</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list mt10">
                            <li>Discord excels in captivating and engaging audiences, propelling your brand into the limelight at the opportune moment.</li>
                            <li>Launching a Discord server offers a dynamic platform to keep your most dedicated followers closely connected with your brand.</li>
                            <li>NFT enthusiasts flock to Discord, joining diverse servers that align with their interests or your market sector, expanding your reach.</li>
                            <li>Establishing multiple marketing-focused channels on Discord fosters vibrant interaction among users and strengthens your connection with your audience.</li>
                            <li>This approach positions Discord as an exceptional tool for cultivating a fervent community around your brand and products, open to all.</li>
                            <li>NFT communities on Discord provide invaluable insights from top crypto aficionados globally, enhancing your strategic advantage.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 mt10"> 
                        <img class="rounded-border mt10" src="{{ asset('images/discord-marketing/conquer.webp') }}" alt="Discord Management Agency" title="Discord Management Agency"> 
                    </div>
                </div>
            </div>
        </section>
        <section class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center underline" style="width: 100%">
                        <div class="sec_tit">
                            <h2>Elevate Your Brand’s Influence with Expert Discord Community Management</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6"> <img class="lazy rounded-border"
                            src="{{ asset('images/discord-marketing/grow.webp') }}" alt="Growing in Popularity"
                            title="Growing in Popularity"> </div>
                    <div class="col-lg-6">
                        <ul class="primary-list">
                            <li>Crafting your Discord server unlocks exclusive opportunities to offer unique value to your target audience, including special deals and targeted sales campaigns.</li>
                            <li>Leverage Discord as a powerful tool to address customer inquiries efficiently.</li>
                            <li>Utilize Discord to broadcast crucial updates and information directly to your audience.</li>
                            <li>Establishing your own Discord server integrates your brand into your audience’s social network, amplifying your presence.</li>
                            <li>By focusing on robust Discord community management, you enhance your brand’s engagement and impact exponentially.</li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
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
                            data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">
            :root {
                --d: 700ms;
                --e: cubic-bezier(0.19, 1, 0.22, 1);
            }

            .dd_heading {
                text-align: center;
                font-family: roboto thin;
            }

            .page-content {
                display: grid;
                grid-gap: 1rem;
                padding: 1rem;
                max-width: 1024px;
                margin: 0 auto;
                font-family: var(--font-sans);
            }

            @media (min-width: 600px) {
                .page-content {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (min-width: 768px) {
                .heading {
                    margin-top: -31px;
                }
            }

            @media (min-width: 800px) {
                .page-content {
                    grid-template-columns: repeat(4, 1fr);
                }
            }

            .d_card {
                position: relative;
                display: -webkit-box;
                display: flex;
                -webkit-box-align: end;
                align-items: flex-end;
                overflow: hidden;
                padding: 1rem;
                margin-bottom: 20px;
                width: 100%;
                text-align: center;
                color: whitesmoke;
                background-color: whitesmoke;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
                border-radius: 15px;
            }

            @media (min-width: 600px) {
                .d_card {
                    height: 350px;
                }
            }

            .d_card:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 110%;
                background-size: cover;
                background-position: 0 0;
                -webkit-transition: -webkit-transform calc(var(--d) * 1.5) var(--e);
                transition: -webkit-transform calc(var(--d) * 1.5) var(--e);
                transition: transform calc(var(--d) * 1.5) var(--e);
                transition: transform calc(var(--d) * 1.5) var(--e), -webkit-transform calc(var(--d) * 1.5) var(--e);
                pointer-events: none;
            }

            .d_card:after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 200%;
                pointer-events: none;
                background-image: linear-gradient(45deg, black, #00000052);
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                -webkit-transition: -webkit-transform calc(var(--d) * 2) var(--e);
                transition: -webkit-transform calc(var(--d) * 2) var(--e);
                transition: transform calc(var(--d) * 2) var(--e);
                transition: transform calc(var(--d) * 2) var(--e), -webkit-transform calc(var(--d) * 2) var(--e);
            }

            .bg1:before {
                background-image: url(images/discord-marketing/01.webp);
            }

            .bg2:before {
                background-image: url(images/discord-marketing/02.webp);
            }

            .bg3:before {
                background-image: url(images/discord-marketing/03.webp);
            }

            .bg4:before {
                background-image: url(images/discord-marketing/04.webp);
            }

            .bg5:before {
                background-image: url(images/discord-marketing/05.webp);
            }

            .bg6:before {
                background-image: url(images/discord-marketing/06.webp);
            }

            .bg7:before {
                background-image: url(images/discord-marketing/07.webp);
            }

            .bg8:before {
                background-image: url(images/discord-marketing/08.webp);
            }

            .bg9:before {
                background-image: url(images/discord-marketing/09.webp);
            }

            .bg10:before {
                background-image: url(images/discord-marketing/10.webp);
            }

            .bg11:before {
                background-image: url(images/discord-marketing/11.webp);
            }

            .bg12:before {
                background-image: url(images/discord-marketing/12.webp);
            }

            .bg13:before {
                background-image: url(images/discord-marketing/13.webp);
            }

            .bg14:before {
                background-image: url(images/discord-marketing/14.webp);
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

            .content>*+* {
                margin-top: 1rem;
            }

            .heading {
                font-size: 21px;
                font-weight: bold;
                line-height: 1.2;
                color: #fff;
            }

            .data-content {
                /*  font-family: var(--font-serif);*/
                font-size: 1.125rem;
                /*font-style: italic;*/
                line-height: 1.35;
            }

            @media (hover: hover) and (min-width: 600px) {
                .d_card:after {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                }

                .content {
                    -webkit-transform: translateY(calc(100% - 4.5rem));
                    transform: translateY(calc(100% - 4.5rem));
                }

                .content>*:not(.heading) {
                    opacity: 0;
                    -webkit-transform: translateY(1rem);
                    transform: translateY(1rem);
                    -webkit-transition: opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
                    transition: opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
                    transition: transform var(--d) var(--e), opacity var(--d) var(--e);
                    transition: transform var(--d) var(--e), opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
                }

                .d_card:hover,
                .d_card:focus-within {
                    -webkit-box-align: center;
                    align-items: center;
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

            .para {
                width: 80%;
            }

            .feature .feature-icon img{
                margin-top: 12px;
            }
        </style>

        {{-- <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center underline">
                        <div class="sec_tit">
                            <h2>Industries Where Our Discord Marketing Expertise Shines</h2>
                        </div>
                    </div>
                    <p class="para text-center">Here is the list of sectors that we specialize in</p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <div class="feature-icon">
                                <img class="lazy" data-src="/images/discord-marketing/icons/real-estate.webp">
                            </div>
                            <div class="feature-content">
                                <h3>Real Estate</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature blue">
                            <div class="feature-icon">
                                <img class="lazy" data-src="/images/discord-marketing/icons/healthcare.webp">
                            </div>
                            <div class="feature-content">
                                <h3>Healthcare</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <div class="feature-icon">
                                <img class="lazy" data-src="/images/discord-marketing/icons/gaming.webp">
                            </div>
                            <div class="feature-content">
                                <h3>Gaming</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature blue">
                            <div class="feature-icon">
                                <img class="lazy" data-src="/images/discord-marketing/icons/sports.webp">
                            </div>
                            <div class="feature-content">
                                <h3>Sports</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <div class="feature-icon">
                                <img class="lazy" data-src="/images/discord-marketing/icons/music.webp">
                            </div>
                            <div class="feature-content">
                                <h3>Music</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature blue">
                            <div class="feature-icon">
                                <img class="lazy" data-src="/images/discord-marketing/icons/fashion.webp">
                            </div>
                            <div class="feature-content">
                                <h3>Fashion</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <div class="feature-icon">
                                <img class="lazy" data-src="/images/discord-marketing/icons/infrastructure.webp">
                            </div>
                            <div class="feature-content">
                                <h3>Infrastructure development</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature blue">
                            <div class="feature-icon">
                                <img class="lazy" data-src="/images/discord-marketing/icons/content-subscription.webp">
                            </div>
                            <div class="feature-content">
                                <h3>Content subscriptions</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- image-360-rotate-card --}}
        @include('static.pentagon-image-spin-hover-card', [
            'title' => "Industries Where Our Discord Marketing Expertise Shines", 
            'desc' => "Discover the sectors where our mastery in Discord marketing truly excels:",
            'cards' => [
                [
                    'title' => "Real Estate",
                    'image' => 'discord-marketing/real-estate.png'
                ],
                [
                    'title' => 'Healthcare',
                    'image' => 'discord-marketing/healthcare.png'
                ],
                [
                    'title' => 'Gaming',
                    'image' => 'discord-marketing/gaming.png'
                ],
                [
                    'title' => "Sports",
                    'image' => 'discord-marketing/sports.png'
                ],
                [
                    'title' => "Music",
                    'image' => 'discord-marketing/music.png'
                ],
                [
                    'title' => "Fashion",
                    'image' => 'discord-marketing/fashion.png'
                ],
                [
                    'title' => "Infrastructure",
                    'image' => 'discord-marketing/infrastructure.png'
                ],
                [
                    'title' => "Content Development",
                    'image' => 'discord-marketing/content.png'
                ],
                [
                    'title' => "Subscriptions",
                    'image' => 'discord-marketing/subscription.png'
                ],
            ]
        ])

        <section class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="col-lg-12">
                    <div class="section-title text-center underline">
                        <div class="sec_tit">
                            <h2>Why Choose Us for Your Discord Marketing Needs?</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">Our Discord Growth Strategy is revolutionizing how brands connect across diverse audiences, driving immense engagement and channel traction. We excel in creating vibrant communities that amplify your content's reach and impact. Our innovative Discord marketing solutions are designed to attract and inspire the younger generation, fostering new business opportunities and maximizing your visibility. We’re committed to addressing your queries and providing consistent updates on our comprehensive marketing approach. Our targeted techniques ensure your brand stands out prominently on the platform.</p>
                </div>
                <div class="text-center">
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
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
                    </div>
                </div>
            </div>
        </section>

        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => 'What is a Discord Management Agency?',
                    'ans' => "A Discord Management Agency specializes in creating and overseeing Discord servers to enhance community engagement and growth. They handle everything from server setup and content creation to member interactions and analytics."
                ],
                [
                    'ques' => 'How Can You Boost Engagement on Discord?',
                    'ans' => "To elevate engagement on Discord, focus on creating compelling content, hosting interactive events, and maintaining active communication. Implementing gamified elements and regularly updating your community can also drive higher participation."
                ],
                [
                    'ques' => 'What Are the Strategies for Marketing a Discord Community Server?',
                    'ans' => "Marketing a Discord server involves leveraging targeted promotions, collaborating with influencers, and engaging in cross-promotion with related communities. Effective strategies also include organizing events and offering exclusive content or perks."
                ],
                [
                    'ques' => 'How Does Discord Marketing Operate?',
                    'ans' => "Discord marketing operates by utilizing the platform’s features to build and manage communities. It involves creating engaging content, running targeted campaigns, and fostering interactions to enhance brand visibility and user loyalty."
                ],
                [
                    'ques' => 'Which Brands Are Utilizing Discord for Marketing?',
                    'ans' => "A wide range of brands, from tech startups and gaming companies to fashion labels and music artists, are using Discord for marketing. These brands leverage Discord’s community-building capabilities to engage with their audience and promote their offerings."
                ],
            ],
        ])

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