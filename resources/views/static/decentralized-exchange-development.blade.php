@extends('layouts.static')
    @section('title', 'Decentralized Exchange Development')
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
        text-align: left;
    }

    .feature-box-3 {
        min-height: 150px;
    }

    .list {
        margin-top: 0rem;
        margin-bottom: 0rem !important;
        font-size: 14px;
        line-height: 35px;
        text-indent: -27px;
        list-style: none;
    }

    .list li {
        word-break: break-word;
    }

    .list li:before {
        content: " \f0a9";
        font-family: FontAwesome;
        color: #47b475;
        margin-right: 10px;
        font-size: 18px;
    }

    .banner {
        height: auto;
        /*            background-image: url(images/decentralized/main.webp);*/
        background-size: cover;
        padding-top: 138px;
        padding-bottom: 50px;
        position: relative;
    }

    .banner.my_banner:before {
        content: "";
        position: absolute;
        left: 0px;
        right: 0px;
        top: 0px;
        bottom: 0px;
        background: #110053;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(to right, #122455, #00aeeb);
        opacity: 0.8;
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
    }

    .banner_content .contentall {
        margin-top: 85px;
        max-width: 1000px;
        margin: 81px auto 40px;
    }

    .contentall h1 {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 40px;
    }

    .contentall p {
        font-weight: 500;
        margin-bottom: 30px;
        line-height: 1.8;
    }

    .contentall a {
        color: #fff;
        cursor: pointer;
        margin-bottom: 15px;
    }

    .banner_content h4 {
        font-size: 30px;
        color: #fff;
        line-height: 60px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0;
        text-align: center;
        margin-bottom: 15px;
        border-bottom: 1px solid;
    }

    .sec_tit {
        /*font-size: 3rem !important;*/
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
        margin: 0;
        padding: 0;
        color: #000000;
        font-weight: 700;
        letter-spacing: 1.5px;
    }

    /*      h2.common_h2 {
font-size: 3rem !important;
}
h3.common_h3 {
font-size: 3rem !important;
}
  
h2{
font-size: 3rem !important;
}*/
    p {
        font-size: 1.2rem !important;
    }

    .timeline {
        position: relative;
        margin: 0 0 30px 0;
        padding: 0;
        list-style: none;
    }

    .timeline:before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        width: 4px;
        background: #ddd;
        left: 31px;
        margin: 0;
        border-radius: 2px;
    }

    .timeline>li {
        position: relative;
        margin-right: 10px;
        margin-bottom: 15px;
    }

    .timeline>li:before,
    .timeline>li:after {
        content: " ";
        display: table;
    }

    .timeline>.time-label>span {
        font-weight: 600;
        padding: 5px 20px;
        display: inline-block;
        background-color: #fff;
        border-radius: 4px;
        background-color: #47b475 !important;
        color: #fff !important;
    }

    .timeline>li:after {
        clear: both;
    }

    .timeline>li>.fa,
    .timeline>li>.glyphicon,
    .timeline>li>.ion {
        width: 30px;
        height: 30px;
        font-size: 15px;
        line-height: 30px;
        position: absolute;
        color: #666;
        background: #d2d6de;
        border-radius: 50%;
        text-align: center;
        left: 18px;
        top: 0;
    }

    .timeline>li>.timeline-item {
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        border-radius: 3px;
        margin-top: 0;
        background: #fff;
        color: #444;
        margin-left: 60px;
        margin-right: 15px;
        padding: 0;
        position: relative;
    }

    .timeline>li>.timeline-item>.timeline-body,
    .timeline>li>.timeline-item>.timeline-footer {
        padding: 10px;
    }

    .timeline-body li {
        padding: 5px 20px;
        position: relative;
    }

    .timeline-body li:before {
        content: "*";
        position: absolute;
        left: 0px;
        top: 6px;
        color: #47b475;
    }

    .add_feat ul {
        padding: 0;
    }

    .feat_lev {
        margin: 0 auto 65px;
        text-align: center;
        position: relative;
        min-height: 120px;
    }

    .feal_cnt p {
        margin-bottom: 20px;
    }

    a.hb_rd {
        color: #fff;
        background: #47b475;
        padding: 6px 20px;
        border-radius: 3px;
    }

    .feat_ic img {
        height: 90px;
    }

    .feat_lev h5 {
        line-height: 1.3;
        margin: 20px 0 11px;
        font-weight: bold;
    }

    section.exp_function {
        background: #f7f7fc;
    }

    ul.f_point {
        position: relative;
        padding: 0px;
        padding-left: 60px;
        margin-top: 15px;
    }

    ul.f_point:before {
        content: "";
        position: absolute;
        width: 1px;
        height: 100%;
        background: #00cb99;
        left: 24px;
    }

    ul.f_point li {
        position: relative;
        padding-left: 25px;
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
        width: 40px;
        height: 40px;
        background: #00cf92;
        transform: rotate(45deg);
        position: absolute;
        left: -55px;
        top: -2px;
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
        -moz-transform: rotate(-45deg) translate(0px, -2px);
        -webkit-transform: rotate(-45deg) translate(0px, -2px);
        -ms-transform: rotate(-45deg) translate(0px, -2px);
        transform: rotate(-45deg) translate(0px, -2px);
        padding: 4px;
    }

    ul.f_point h4 {
        font-size: 16px;
        color: #000;
        text-shadow: 0px 0px;
        font-weight: 700;
    }

    .flip-tit {
        font-size: 18px;
        color: #000000;
        line-height: 25px;
    }

    p.flip-txt {
        min-height: 130px;
        font-size: 1.2rem !important;

    }

    #how-to-start .timeline-center::before {
        position: absolute;
        top: 0;
        left: 50%;
        height: 88%;
        width: 2px;
        background: #47b475;
    }

    .choose_title li {
        margin-bottom: 21px;
        border-left: 4px solid #0d8d06;
        font-weight: normal;
        padding: 10px;
        padding-left: 15px;
        background: #f2f2f2 !important;
        font-size: 1.2rem !important;
    }

    .ben_sec1 ul {
        padding-left: 0;
    }

    .ben_sec1 li i {
        color: #fff;
        font-size: 24px;
        vertical-align: middle;
        margin-right: 17px;
        width: 50px;
        text-align: center;
        height: 48px;
        background: #17b559;
        padding: 10px;
        line-height: 33px;
    }

    .ben_sec li {
        margin-bottom: 21px;
        border-left: 4px solid #0d8d06;
        font-weight: normal;
        padding: 10px;
        padding-left: 15px;
        background: #ffffff !important;
    }

    .ben_sec ul {
        padding-left: 0;
    }

    .ben_sec li i {
        color: #fff;
        font-size: 24px;
        vertical-align: middle;
        margin-right: 17px;
        width: 50px;
        text-align: center;
        height: 48px;
        background: #17b559;
        padding: 10px;
        line-height: 33px;
    }

    .tm-icon img {
        width: 40px;
        margin-top: 9px;
    }

    @media (max-width: 768px) {
        .banner_img img {
            max-width: 100%;
            margin-top: 0%;
        }

        .banner_content .contentall {
            margin-top: 20px;
            text-align: center;
            margin-bottom: 0px;
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 25px;
        }

        .banner-overlay {
            background: #00aeeb;
        }

        .banner_content p {
            font-size: 14px !important;
        }

        .contentall h1 {
            font-size: 25px;
        }

        .feat_lev {
            min-height: auto;
            max-width: 350px;
        }
    }

    @media only screen and (max-width: 567px) {
        .sec_tit {
            font-size: 20px !important;
        }
    }

    .section-top {
        display: inline-block;
        width: 100%;
    }

    .feature-type-5.two-coln-full .feature-box-5.black-box {
        background: #eee;
    }

    .two-coln-full p {
        color: #000000;
    }

    .timeline-center .timeline-row:nth-of-type(odd) .tm-detail {
        border: 2px solid #47b475;
    }

    .timeline-center .timeline-row:nth-of-type(even) .tm-detail {
        border: 2px solid #47b475;
    }

    .flip-box {
        min-height: 10px !important;
    }

    .flip-tit {
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

    .feature-box-3:hover {
        background: #47b475;
    }

    .feature-box-3:hover h4 {
        color: #ffffff;
    }

    .font-wei {
        color: #000000 !important;
        font-weight: 700 !important;
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
        padding: 4px 15px 12px 50px;
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
        color: #000000;
        line-height: 27px;
        border: 2px solid #ddd;
    }

    .tm-detail h4 {
        color: #000000;
        font-weight: 700;
    }

    .timeline-center .timeline-row:nth-of-type(odd) .tm-detail {
        color: #000000;
        font-size: 14px;
    }

    .timeline-center .timeline-row:nth-of-type(even) .tm-detail {
        color: #000000;
        font-size: 14px;
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
        width: 25%;
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


<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 text-left">
                            <div class="contentall">
                                <h1>Decentralized Exchange Development Services</h1>
                                <p>Unlock the potential of the financial future with our expertise in decentralized exchange (DEX) development. We excel in crafting intuitive and secure DEX platforms that facilitate the seamless trading of digital assets. Our tailored solutions simplify DEX development, making it accessible whether you're a burgeoning startup or an established enterprise.
                                </p>
                                <div class="text-left">
                                    <a href="{{ url('consultation') }}"
                                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>CONNECT WITH OUR SPECIALISTS</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-5 col-sm-12" style="">
                            <img class="lazy" src="{{ asset('images/decentralized/banner-img1.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="exchange-section common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-header text-center">
                        <div class="section-title text-center">
                            <h2 class="common_h2 sec-tit font-wei" style="font-size:3rem;font-weight: bold;">Understanding <span style="color:#47b475"> Decentralized Exchanges (DEXs)</span></h2>
                            <hr>
                        </div>
                        <div class="text-center">
                            <p> A Decentralized Exchange (DEX) operates as a digital trading hub for cryptocurrencies and tokens but with a distinct approach compared to traditional exchanges. Unlike conventional platforms that depend on a central authority and intermediaries to handle transactions, DEXs enable direct trading from users' wallets.
                                <br><br>
                                Harnessing blockchain technology and smart contracts, DEXs ensure transactions are secure, transparent, and devoid of reliance on intermediaries. Prioritizing user privacy and control, they allow you to retain ownership of your assets throughout the trading process.
                                <br><br>
                                Without intermediaries, DEXs are more resilient to hacking, censorship, and downtime. They embody the principles of blockchain technology by promoting a more open and democratic cryptocurrency ecosystem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section style="padding: 40px 0px; background: #eee;">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center mb30" style="width : 100%">
                        <h3 class="common_h3 font-wei">Leading Decentralized Exchange  <span style="color:#47b475">Software
                            Solutions</span> </h3>
                        <hr>
                    </div>

                    <div class="col-md-5 col-lg-5 col-sm-12" style="">
                        <img class="lazy" src="{{ asset('images/decentralized/img-2.webp') }}">

                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-12">
                        <div class="">

                            <p>Our Decentralized Exchange Software Solutions are designed to be at the cutting edge of the blockchain revolution. Dedicated to advancing decentralization and security, we provide end-to-end services that enable businesses to dive into the realm of decentralized finance. Our team excels in building decentralized exchange platforms that emphasize user autonomy, privacy, and operational efficiency. By utilizing advanced blockchain technology, we ensure your exchange functions smoothly without reliance on intermediaries.
                                <br><br>
                                Our core expertise lies in Decentralized Exchange Development. We create platforms that build trust and transparency by removing centralized control. With a strong emphasis on security, we deploy rigorous safeguards to secure your assets and transactions.
                                <br><br>
                                Whether you're an emerging startup aiming to transform the crypto landscape or a well-established entity seeking to adopt decentralized finance, our development services offer the expertise and tools needed for success. Partner with us to revolutionize financial systems with our innovative approach to decentralized exchange development.

                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="technologies">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center text-white">Empower Your Business with Cutting-Edge Decentralized Exchange Platforms</h3>
                    <p class="text-center white">Embark on a transformative journey with decentralized exchange (DEX) development, a robust business model driven by peer-to-peer technology. Collaborate with our expert developers to create a decentralized exchange inspired by leading market platforms, ensuring a powerful and competitive launch.</p>
                    <ul>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/uniswap.webp') }}">
                            <p class="white">Uniswap</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/1inch.webp') }}">
                            <p class="white">1inch</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/pancakeswap.webp') }}">
                            <p class="white">PancakeSwap</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/dydx.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/orca.webp') }}">
                            <p class="white">Orca</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/kine.webp') }}">
                            <p class="white">Kine</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/raydium.webp') }}">
                            <p class="white">Raydium</p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/curve.webp') }}">
                            <p class="white">Curve</p>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                    <div class="text-center cta_mine txt"> 
                        {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                            target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a>  --}}
                            <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk
                                with our Experts</span></a> 
                            </div>
                </div>
            </div>
        </div>


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
        </style>
        <div class="pros-trading common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sec_tit mb20 font-wei">
                        <h2>Unmatched Features of Our <span style="color:#47b475">Decentralized Exchange Solutions</span></h2>

                    </div>
                    <p>Explore the standout features of our Decentralized Exchange Development that elevate your platform to the forefront of the industry:</p>
                </div>
                <div class="mt60">
                    <div class="row flip-box-row eto-exchange-flip">
                        <div class="container container-center">
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/admin.png') }}" class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Advanced Admin and User Dashboards</h3>
                                    <p class="flip-txt">Command and oversee your operations effortlessly with our comprehensive admin panel and user-centric dashboard.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/user-friendly.webp') }}"
                                            class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">User-Friendly Interface</h3>
                                    <p class="flip-txt">Navigate with ease through an interface designed for both novices and seasoned traders, making transactions seamless.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/transactions.png') }}"
                                            class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Detailed Transaction Records</h3>
                                    <p class="flip-txt">Keep a thorough and accessible record of all transactions, ensuring complete transparency and peace of mind.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row flip-box-row sto-flip">
                        <div class="container container-center">
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/trading.png') }}" class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Seamless Trading Experience</h3>
                                    <p class="flip-txt">Benefit from a flawless trading environment that adheres to the highest industry standards.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/authentication.png') }}"
                                            class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Enhanced Security with Two-Factor Authentication</h3>
                                    <p class="flip-txt">Bolster your platform’s security with two-factor authentication, safeguarding assets and personal data.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/transactions.png') }}"
                                            class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Secure Transaction Processing</h3>
                                    <p class="flip-txt">Enjoy a secure and reliable transaction process that prioritizes user safety.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row flip-box-row sto-flip">
                        <div class="container container-center">
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/smart-contracts.webp') }}"
                                            class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Smart Contract Integration</h3>
                                    <p class="flip-txt">Leverage smart contracts for automated, transparent, and trustless transactions.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/payment-gateways.png') }}"
                                            class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Diverse Payment Gateway Integration</h3>
                                    <p class="flip-txt">Expand your reach with support for various payment gateways, catering to a broad user base.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/seller.webp') }}" class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Streamlined Buyer-Seller Interaction</h3>
                                    <p class="flip-txt">Facilitate direct communication between users, enhancing the efficiency of your exchange.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row flip-box-row sto-flip">
                        <div class="container container-center">
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/notifications.webp') }}"
                                            class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Real-Time Notifications</h3>
                                    <p class="flip-txt">Receive instant updates and notifications, ensuring you stay on top of every trading opportunity.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/effortlessly.webp') }}"
                                            class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Intuitive User Experience</h3>
                                    <p class="flip-txt">Designed for simplicity, our platform ensures easy navigation for all users, from beginners to experts.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                                <div class="flip-box">
                                    <div class="flip-icon-outer">
                                        <img src="{{ asset('images/decentralized/icons/blockchain.webp') }}"
                                            class="flip-icon lazy">
                                    </div>
                                    <h3 class="flip-tit">Blockchain Reliability</h3>
                                    <p class="flip-txt">Built on blockchain technology, our decentralized exchange guarantees transparency and dependability throughout.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .tm-detail {
            line-height: 28px !important;
        }

        .timeline-center::before {
            position: absolute;
            top: 0;
            left: 50%;
            height: 88%;
            width: 2px;
            background: #d4d4d4;
        }
    </style>
    <div id="" class="common_spacing gray_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-header text-center">
                    <h3 class="section-title underline common_h2 font-wei">Our Comprehensive Approach to <span style="color:#47b475"> Decentralized Exchange Development
                    </span> </h3>
                </div>
                <div class="col-md-12">
                    <div class="timeline-center">
                        <div class="timeline-row">
                            <div class="tm-detail">
                                <h4 class="mb10">In-Depth Requirement Analysis and Research</h4>
                                <p>Our expert team will start by thoroughly understanding your DEX protocol needs and vision. We employ dedicated analysts and researchers to explore optimal strategies for turning your ideas into a successful project.</p>
                            </div>
                            <div class="tm-icon">
                                <img class="lazy" src="{{ asset('images/decentralized/analytics.png') }}">
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="tm-detail">
                                <h4 class="mb10">Strategic Design</h4>
                                <p>Our skilled designers will craft a detailed blueprint for your decentralized exchange, ensuring that every aspect of the project aligns with your objectives and user experience goals.</p>
                            </div>
                            <div class="tm-icon">
                                <img class="lazy" src="{{ asset('images/decentralized/design.png') }}">
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="tm-detail">
                                <h4 class="mb10">Innovative Development</h4>
                                <p>Our talented developers will construct a powerful decentralized exchange platform, integrating advanced blockchain technology and smart contracts to deliver cutting-edge features and performance.</p>
                            </div>
                            <div class="tm-icon">
                                <img class="lazy" src="{{ asset('images/decentralized/development.png') }}">
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="tm-detail">
                                <h4 class="mb10">Rigorous Testing</h4>
                                <p>Our quality assurance specialists will conduct extensive testing to identify and resolve any issues, ensuring the platform is flawless and ready for deployment.</p>
                            </div>
                            <div class="tm-icon">
                                <img class="lazy" src="{{ asset('images/decentralized/testing.png') }}">
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="tm-detail">
                                <h4 class="mb10">Seamless Deployment</h4>
                                <p>After rigorous testing, the platform will be launched on the client’s network, fully operational for conducting trading activities.</p>
                            </div>
                            <div class="tm-icon">
                                <img class="lazy" src="{{ asset('images/decentralized/deployment.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt20" style="width: 100%">
                    <a href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Connect with Our Experts</span></a>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .text-center {

            text-align: center !important;
        }

        .design {
            background: #000;
            border-radius: 20px;
            padding: 5px 0 1px;
            margin: 15px auto;
        }

        .design h5,
        .design p {
            color: #fff
        }

        #demo {
            padding: 30px 0;
        }

        #demo .container {
            padding: 40px 20px;
            border: 5px solid #eee;
            border-radius: 15px;
        }

        .nectar-button:hover {
            color: #ffffff !important;
            /* zoom: 0.98; */
        }
    </style>

    <style type="text/css">
        .theme-color-bg,
        .data table th {
            background: #140050 !important;
        }

        .data table td,
        .data table th {
            padding: 10px;
        }
    </style>

    <style type="text/css">
        .awesome-features-wrapper {
            border: 1px solid #cdcdcd;
            padding-top: 40px;
            padding-bottom: 20px;
            min-height: 350px;
            transition: .3s;
            position: relative;
            margin-bottom: 30px;
            border-radius: 10px;
        }

        .awesome-features-wrapper::before {
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
        }

        .awesome-features-icon-img {
            margin-bottom: 22px;
        }

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
            padding: 0 36px;
        }
    </style>

    <div class="common_spacing ">
        <div class="container">
            <div class=" ">
                <h2 class="common_h2 sec-tit font-wei text-center">Top Benefits of Choosing Our DEX Development Services</h2>
                <p class="text-center"></p>
            </div>
            <div class="row mt20">
                <div class="container container-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/decentralized/icons/security.png') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Unmatched Security
                                    </strong>Our foremost commitment is to your peace of mind. We deploy cutting-edge security protocols to fortify your decentralized exchange against any potential threats.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/decentralized/icons/p2p.png') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Elimination of Intermediaries</strong>Experience trading without barriers. We provide direct peer-to-peer transactions, cutting out unnecessary fees and delays associated with middlemen.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/decentralized/icons/trustpad.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Decentralized Control</strong>Embrace true decentralization. We design exchanges that operate autonomously, minimizing risks of centralized control and manipulation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/decentralized/icons/privacy.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Enhanced Privacy</strong>Your information remains private. We prioritize the protection of your personal data while facilitating transparent and secure transactions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/decentralized/icons/trading.png') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block;  padding-bottom: 5px;">Accelerated Trading </strong>Speed is crucial. Our solutions are engineered for high performance, delivering rapid and efficient trading experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center" style="width: 100%">Partner with us for a seamless entry into the world of decentralized finance.</p>
            </div>
        </div>
    </div>
    <div class="common_spacing ben_sec1 " style="background:#e0e0e0;">
        <div class="container">
            <div class="section-title text-center m-b-30">
                <h3 class="common_h3 sec-tit font-wei">Why Partner with Us for Your Decentralized Exchange Development?</h3>
                <hr>
                <p>Our firm stands out in the realm of decentralized exchange (DEX) development thanks to our stellar reputation, vast expertise, and deep industry knowledge. We have consistently delivered secure, scalable, and dependable solutions across various sectors, setting us apart from other DEX developers.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="choose_title">
                        <li>Our highly skilled team excels in understanding the complexities of DEX development, ensuring precision in both the design and launch of decentralized finance (DeFi) protocols. With us, your project is managed by seasoned professionals dedicated to excellence.</li>
                        <li>We offer customized and white-label solutions, allowing you to fully brand and control your decentralized exchange, maximizing its market presence. Our continuous support includes 24/7 technical assistance in multiple languages to address any concerns promptly.</li>
                        <li>Staying at the forefront of blockchain and cryptocurrency trends, our blockchain consultants provide cutting-edge technology and insights, ensuring your business benefits from the latest advancements in the field.</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-center mt50">
                    <img src="{{ asset('images/p2p_lending/admin_1.webp') }}" class="admin_scr admin_scr_1 lazy mt20"
                        alt="Decentralized Exchange Development"
                        title="Why Choose Blockchain App Factory for Decentralized Exchange?">
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="product-section fag_sec p-50 gray_bg">
        <div class="container">
            <div class="section-top ">
                <div class="section-header text-center ">
                    <h3 class="section-title mt20 underline font-wei">FAQ</h3>
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
                                            href="#faq1"><span>What is decentralized exchange development?</span></a>
                                    </h4>
                                </div>
                                <div id="faq1" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        A DEX (decentralized exchange) is like an online market where people can
                                        directly trade cryptocurrencies. It's different from regular exchanges because
                                        you don't need a middleman to handle your money or make the trades for you.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq2"><span>How do you create a
                                                decentralized exchange?</span></a>
                                    </h4>
                                </div>
                                <div id="faq2" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul style="list-style-type:disc;">
                                            <li>Design smart contracts for order matching and custody</li>
                                            <li>Build a user-friendly interface</li>
                                            <li>Enhance security (2FA, encryption)</li>
                                            <li>Integrate decentralized identity and payment gateways</li>
                                            <li>Test and audit for vulnerabilities</li>
                                            <li>Launch, boost liquidity, and promote</li>
                                            <li>Maintain and update for seamless trading</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq3"><span>How does a DEX make
                                                money?</span></a>
                                    </h4>
                                </div>
                                <div id="faq3" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Decentralized exchanges earn money by charging fees when people trade on their
                                        platform. Some also have their own special tokens that can be used for trading
                                        and bring in extra income.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq4"><span> How much does it cost to create
                                                a decentralized exchange?</span></a>
                                    </h4>
                                </div>
                                <div id="faq4" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Creating a DeFi exchange from scratch typically begins at a cost of
                                        approximately $320,000.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faq5"><span> What are the advantages of
                                                decentralized exchanges?</span></a>
                                    </h4>
                                </div>
                                <div id="faq5" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Decentralized exchanges offer cost savings because they have lower fees than
                                        centralized exchanges. This is because decentralized exchanges allow users to
                                        trade directly with each other without using a middleman, which reduces the fees
                                        compared to centralized exchanges.
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- simple-faqs.blade --}}
    @include('static.simple-faqs-section', [
        'faqs' => [
            [
                'ques' => 'What does decentralized exchange development entail?',
                'ans' => "Developing a decentralized exchange involves creating a platform that enables users to trade directly with one another without relying on a central authority. This process leverages blockchain technology and smart contracts to facilitate secure and transparent transactions."
            ],
            [
                'ques' => 'What is the process for building a decentralized exchange?',
                'ans' => "Building a decentralized exchange involves several steps: defining the project’s requirements, designing the interface, developing the platform using blockchain technology, integrating smart contracts, and conducting thorough testing before deployment."
            ],
            [
                'ques' => 'How do decentralized exchanges generate revenue?',
                'ans' => "Decentralized exchanges typically earn revenue through transaction fees charged on trades, listing fees for new tokens, and possibly from providing liquidity services or advanced trading features."
            ],
            [
                'ques' => 'What is the cost associated with creating a decentralized exchange?',
                'ans' => "The cost of developing a decentralized exchange can vary widely depending on the complexity of the platform, the features required, and the level of customization. It generally includes expenses for development, security, integration, and ongoing maintenance."
            ],
            [
                'ques' => 'What benefits do decentralized exchanges offer?',
                'ans' => "Decentralized exchanges offer several advantages including enhanced security through the elimination of central points of failure, increased privacy and user control, reduced reliance on intermediaries, and greater resistance to censorship and downtime."
            ],
        ],
    ])
    
</div>
</div>
<script src="js/jquery.min.js" type="c629375e6c29b5017582421a-text/javascript"></script>
<script type="c629375e6c29b5017582421a-text/javascript">
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
<script src="js/vendor.js" type="c629375e6c29b5017582421a-text/javascript"></script>
<script src="js/plugins.js" type="c629375e6c29b5017582421a-text/javascript"></script>
<script src="js/main.js" type="c629375e6c29b5017582421a-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="c629375e6c29b5017582421a-text/javascript"></script>
<script type="c629375e6c29b5017582421a-text/javascript">
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
<script type="c629375e6c29b5017582421a-text/javascript">
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
<script type="c629375e6c29b5017582421a-text/javascript">
    $('.view_pricing').click(function() {
        $('html, body').animate({
            scrollTop: $('#pricing-section').offset().top
        }, 2000);
    });
</script>
<script type="c629375e6c29b5017582421a-text/javascript">
    var url = window.location.href;
    $('#url').val(url);
</script>
<!-- <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> -->
<script type="c629375e6c29b5017582421a-text/javascript">
    $(".pricing-body").mCustomScrollbar({
        theme: "minimal"
    });
</script>
<script type="c629375e6c29b5017582421a-text/javascript">
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

<script type="c629375e6c29b5017582421a-text/javascript">
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
<div class="sticky-form">

    <div class="formdiv">
        <form class="form-side" id="mailForm_sticky" method="post" action="">
            <h4>Connect With Us</h4> <button type="button" class="close" aria-label="Close quick contact"><i
                    class="fa fa-times-circle" aria-hidden="true"></i></button>
            <hr>
            <div class="form-group"><label for="name">Name</label><input type="text" class="form-control" name="name"
                    id="name_sticky" placeholder="Your Name"> </div>
            <div class="form-group"><label for="email">Email Address</label><input type="email" class="form-control"
                    name="email" id="email_sticky" placeholder="Your Email"> </div>
            <div class="form-group"><label for="skype">Skype</label><input type="text" class="form-control" name="skype"
                    id="skype_sticky" placeholder="Your Skype"> </div>
            <div class="form-group">
                <label>Phone</label>
                <input id="phone_sticky" name="phone_dummy" type="text" required=""
                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                    data-cf-modified-c629375e6c29b5017582421a-="">
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/decentralized-exchange-development">
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
<script type="c629375e6c29b5017582421a-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="c629375e6c29b5017582421a-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="c629375e6c29b5017582421a-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="c629375e6c29b5017582421a-text/javascript">
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
<script type="c629375e6c29b5017582421a-text/javascript">
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
<script type="c629375e6c29b5017582421a-text/javascript">
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

<script type="c629375e6c29b5017582421a-text/javascript">
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



<script type="c629375e6c29b5017582421a-text/javascript">
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
<script type="c629375e6c29b5017582421a-text/javascript">
    $(".crypto-popup").click(function(e) {
        $('crypto-popup').addClass('fixedPosition full-width');
        $(".login-popup").addClass('show');
        e.stopPropagation();
    });
</script>
<!-- Button Lightbox Script - End -->

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="c629375e6c29b5017582421a-|49" defer></script>
</div>

@endsection