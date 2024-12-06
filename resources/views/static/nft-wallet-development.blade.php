@extends('layouts.static')
    @section('title', 'NFT Wallet Development')
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
        color: #161515
    }

    .banner_content {
        text-align: left
    }

    .banner-overlay {
        background-color: rgb(0 0 0 / 67%)
    }

    .contentall a:hover {
        background: #00acdc
    }

    .banner {
        background-image: url('{{ asset('images/nft_wallet/banner.png') }}');
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
        background-image: linear-gradient(to right, #11091766, #20132a) a;
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
        font-size: 40px;
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
        color: #161515;
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

    .banner_img img {
        max-width: 121%;
        margin-top: -12%
    }

    @media (max-width:1199px) {

        .ban_tirt,
        .contentall h1 {
            font-size: 30px
        }
    }

    @media (max-width:768px) {
        .banner_img img {
            max-width: 100%;
            margin-top: 0
        }

        .btn-card {
            position: relative !important;
            bottom: 0 !important;
            left: auto !important;
            right: auto !important;
            text-align: center !important;
            margin: 0 auto !important;
            display: block !important;
            max-width: 200px !important
        }

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
            background: #000000b8
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

        .adv_fet,
        .cnt_box h4.sec_tit,
        .counters {
            font-size: 25px !important
        }

        .banner_content p br,
        .pr_arr:after,
        .pr_arr:before,
        .sec_tit br {
            display: none !important
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

    .text-white {
        color: #fff
    }

    .para {
        width: 90%;
        margin: 0 auto
    }

    .text-dark {
        color: #000 !important
    }

    .service-three-area .single-service {
        padding: 10px;
        border: 1px solid #dfdfdf;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s;
        min-height: 320px;
        background: #fff;
        margin-bottom: 20px
    }

    .service-three-area .single-service .service-icon {
        margin-bottom: 28px
    }

    .service-three-area .single-service .service-icon span {
        width: 65px;
        height: 65px;
        line-height: 65px;
        display: inline-block;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        border-radius: 8px;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s
    }

    .service-three-area .single-service .service-icon span:before {
        margin-left: 0;
        font-size: 40px;
        color: #09c48c;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s
    }

    .service-three-area .single-service .service-title h3 {
        font-size: 20px;
        font-weight: 600;
        text-transform: capitalize;
        margin-bottom: 20px
    }

    .service-three-area .single-service .service-title h3 a {
        color: #212d31;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s
    }

    .service-three-area .single-service .service-content p {
        margin-bottom: 0
    }

    .service-three-area .single-service:hover {
        box-shadow: 0 0 20px rgb(193 193 193 / 60%)
    }

    .s-features-icon img {
        transform: rotateY(0);
        transition: .5s
    }

    .s-features-content {
        padding: 0 15px
    }

    .s-features-content h5 {
        font-size: 18px;
        font-weight: 600;
        color: #000;
        margin-bottom: 5px;
        line-height: 1.6
    }

    .s-features-content p {
        color: #000;
        margin-bottom: 0
    }

    .s-single-features:hover .s-features-icon img {
        transform: rotateY(180deg)
    }

    .single-guarantee {
        display: flex;
        align-items: center;
        padding: 40px;
        transition: .3s linear;
        transform: translateY(0);
        margin-bottom: 35px;
        background: #f2f2f2;
        min-height: 200px
    }

    .guarantee-icon {
        margin-right: 20px
    }

    .guarantee-content h4 {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 5px
    }

    .guarantee-content p {
        margin-bottom: 0
    }

    .guarantee-icon img {
        width: 100px;
        height: auto
    }

    @media screen and (max-width:500px) {
        .guarantee-icon {
            display: none
        }
    }

    .services-area .service-list .single-service {
        padding: 20px;
        border: 1px solid #dfdfdf;
        box-sizing: border-box;
        margin-top: 30px;
        min-height: 450px !important
    }

    .services-area .service-list .single-service .service-icon {
        margin-bottom: 25px;
        text-align: center !important
    }

    .services-area .service-list .single-service .service-icon span:before {
        margin-left: 0;
        font-size: 70px;
        color: #09c48c
    }

    .services-area .service-list .single-service .service-title h3 {
        text-transform: capitalize;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
        text-align: center !important
    }

    .services-area .service-list .single-service .service-title h3 a {
        color: #212d31;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s;
        display: block
    }

    .services-area .service-list .single-service .service-content p {
        margin-bottom: 0;
        font-size: 15px;
        color: #212d31;
        line-height: 26px;
        text-align: center !important
    }

    .single-service-1:hover {
        background: #86c5f36e;
        transition: all .5s ease-out
    }

    .single-service:hover .service-icon {
        transform: scale(.9)
    }

    .single-guarantee:hover {
        background: #8bc34a;
        color: #fff
    }

    .single-guarantee:hover h4 {
        color: #fff
    }

    .single-guarantee:hover .guarantee-icon {
        transform: rotateY(180deg)
    }

    .service-three-area .single-service:hover .service-icon {
        transform: scale(1.1)
    }

    .service-three-area .single-service {
        padding: 10px;
        border: 1px solid #dfdfdf;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s;
        min-height: 340px;
        margin-bottom: 20px;
        padding-top: 20px !important
    }

    .service-three-area .single-service .service-icon {
        margin-bottom: 28px
    }

    .service-three-area .single-service .service-icon span {
        width: 65px;
        height: 65px;
        line-height: 65px;
        display: inline-block;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        border-radius: 8px;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s
    }

    .service-three-area .single-service .service-icon span:before {
        margin-left: 0;
        font-size: 40px;
        color: #09c48c;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s
    }

    .service-three-area .single-service .service-title h3 {
        font-size: 20px;
        font-weight: 600;
        text-transform: capitalize;
        margin-bottom: 20px
    }

    .service-three-area .single-service .service-title h3 a {
        color: #212d31;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s
    }

    .service-three-area .single-service .service-content p {
        margin-bottom: 0
    }

    .service-three-area .single-service:hover {
        box-shadow: 0 0 20px rgb(193 193 193 / 60%)
    }

    .single-service {
        background: #fff;
        border-radius: 10px
    }

    .service-box {
        background: #f9f9ff;
        text-align: center;
        padding: 40px 15px;
        margin-top: 30px;
        transition: all .3s
    }

    .service-box img {
        width: 70px;
        height: auto;
        margin-bottom: 14px
    }

    .service-box h3 {
        margin-bottom: 20px
    }

    .service-box p {
        padding-bottom: 20px
    }

    .service-box:hover {
        background: #fff;
        box-shadow: 0 20px 50px 0 rgb(153 153 153 / 20%)
    }
</style>


<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="contentall">
                                <div class="">
                                    <div class="ban_tirt">
                                        <h1>NFT Wallet Development</h1>
                                    </div>
                                    <p class="">Revolutionizing the Crypto World with Advanced NFT Wallet Solutions</p>
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
                        <!--  <div class="col-md-7 col-sm-12 col-xs-12 text-center mt50">
                            <img src="/images/terra/bnr_1.webp" alt="" title="">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="col-lg-6">
                    <div class="section-title text-left underline">
                        <div class="sec_tit">
                            <h2>The Expansive Horizon of NFTs</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-justify">The NFT market is poised to capture billions more, advancing with relentless momentum and precision. What once seemed a niche corner of the crypto world has now become a colossal arena, surpassing expectations and outpacing competitors. Initially a speculative concept, NFTs have evolved into a dominant force, defying early skepticism. Blockchain App Factory has adeptly recognized and harnessed this transformative potential, leading the charge in crypto innovation. As the NFT landscape flourishes, our focus is on crafting bespoke NFT wallets that embody this dynamic growth and redefine the boundaries of digital asset management.</p>
                </div>
                <div class="col-lg-6"> <img src="{{ asset('images/nft_wallet/img_1.jpeg') }}" alt="NFT Wallet Development Services"
                        title="NFT Wallet Development"> </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2>The Essential Role and Dominance of Crypto Wallets</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p class="mt10 mb10 text-center">Crypto wallets are the linchpins of the digital financial ecosystem, crucial for executing transactions and facilitating seamless market operations. They securely house tokens and execute transfers to designated addresses with the precision of smart contracts. Among the array of wallet types available, decentralized wallets reign supreme for their widespread adoption and pivotal role. Beyond merely enabling transactions, these wallets drive technological advancements, supporting key functions such as validations and other critical services within the crypto sphere.</p>
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
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR SPECIALISTS</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="col-lg-6">
                    <div class="section-title text-left underline">
                        <div class="sec_tit">
                            <h2>NFT Wallets: Catalysts of Uniqueness</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-justify">NFT wallets distinguish themselves from conventional wallets through their specialized support for the unique attributes of non-fungible tokens. Their true potential lies in their ability to handle and facilitate peer-to-peer transactions of NFTs with exceptional ease. As the demand for dedicated NFT wallets surges, users are increasingly seeking wallets tailored specifically for NFTs rather than general ones with NFT functionality. Despite the market’s array of options, the absence of truly specialized solutions remains notable. Our development team has risen to this challenge, creating a state-of-the-art, fully responsive NFT wallet designed exclusively to manage and trade NFTs seamlessly.</p>
                </div>
                <div class="col-lg-6"> <img src="{{ asset('images/nft_wallet/img_2.png') }}" alt="NFT Wallet Development"
                        title="NFT Wallets"> </div>
            </div>
        </div>

        <section id="service" class="service-area section-big common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2>Diverse Classifications of NFT Wallets</h2>
                    </div>
                </div>
                <p class="text-center">In the dynamic world of crypto, NFT wallets come in several distinct categories, each tailored to meet different user needs. These categories are shaped by market demand, user traffic, and service utilization. The primary classifications are:</p>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-box"> <img src="{{ asset('images/nft_wallet/icon/wallet.png') }}" alt="">
                            <h3>Decentralized Wallets</h3>
                            <p>Decentralized wallets prioritize user privacy and automation, minimizing manual intervention. They enhance security by keeping transaction details, asset staking quantities, and user data concealed from all but the user and smart contracts. This approach fortifies the crypto environment, ensuring robust protection for all interactions.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-box"> <img src="{{ asset('images/nft_wallet/icon/wallet-1.png') }}" alt="">
                            <h3>Centralized Wallets</h3>
                            <p>Centralized wallets are governed by protocols that oversee transaction flows and maintain control over operations. Preferred by users who value direct oversight, these wallets facilitate human-based interactions and offer a structured approach to data management, balancing security with user authority.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-box"> <img src="{{ asset('images/nft_wallet/icon/wallet-2.png') }}" alt="">
                            <h3>Hybrid Wallets</h3>
                            <p>Hybrid wallets merge the best features of both centralized and decentralized systems. By integrating advanced functionalities such as keyless authentication—eliminating the need for private keys—they provide a sophisticated and flexible solution. This fusion of technologies creates a wallet that leverages the strengths of both models, enhancing user experience and security.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="intro_cnt common_spacing gray_bfeatures">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pull-left"> 
                        <img src="{{ asset('images/nft_wallet/img_3.webp') }}" width="100%" alt="Our NFT Wallet Development" title="NFT Tokens Wallet Development"> 
                    </div>
                    <div class="col-md-6 pull-right">
                        <div class="section-title text-left underline">
                            <div class="sec_tit">
                                <h2>Groundbreaking NFT Wallet Developments</h2>
                            </div>
                        </div>
                        <p class="mt10 mb10 text-left">Our NFT wallets are crafted to adapt to various categories and needs, seamlessly fitting into diverse use cases and specifications. Leveraging our development team’s expertise, we deliver a wallet experience that significantly transforms the crypto landscape.</p>
                        <p class="mt10 mb10 text-left">Our wallets stand out for their superior functionality, designed to address the limitations found in existing solutions. Recognizing the unique demands of NFT transactions, we focus on advanced asset management features that go beyond traditional wallets. Our approach involves creating a sophisticated storage system that efficiently manages and secures NFT tokens and associated assets.</p>
                        <p class="mt10 mb10 text-left">By integrating cutting-edge technologies and features, our NFT wallets provide an unparalleled user experience, ensuring robust performance and enhanced management capabilities for NFTs.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-three-area section common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2>Core Features of Our NFT Wallets</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service text-center">
                            <div class="service-icon"> <span class="flaticon-value">
                                    <img src="{{ asset('images/ido-cardano/icon/integration.png') }}">
                                </span> </div>
                            <div class="service-title">
                                <h3>Seamless Integration</h3>
                            </div>
                            <div class="service-content">
                                <p>For cutting-edge NFT wallets, compatibility is crucial. Our wallets are engineered to seamlessly integrate with a wide array of platforms and devices, ensuring broad usability and smooth operation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service text-center ">
                            <div class="service-icon"> <span class="flaticon-value">
                                    <img src="{{ asset('images/nft_wallet/icon/fiat.webp') }}">
                                </span> </div>
                            <div class="service-title">
                                <h3>Fiat-to-Crypto Conversion</h3>
                            </div>
                            <div class="service-content">
                                <p>Our NFT wallets empower users to purchase NFTs directly with their fiat credit cards. This feature simplifies transactions by converting fiat currency into compatible cryptocurrencies for NFT purchases.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service text-center">
                            <div class="service-icon"> <span class="flaticon-value">
                                    <img src="{{ asset('images/ido-cardano/icon/cross-chain.webp') }}">
                                </span> </div>
                            <div class="service-title">
                                <h3>Cross-Chain Functionality</h3>
                            </div>
                            <div class="service-content">
                                <p>In the world of NFTs, cross-chain compatibility is essential. Our wallets are designed to effortlessly operate across multiple blockchain networks, ensuring flexibility and wide-ranging support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service text-center ">
                            <div class="service-icon"> <span class="flaticon-value">
                                    <img src="{{ asset('images/ido-cardano/icon/security.png') }}">
                                </span> </div>
                            <div class="service-title">
                                <h3>Advanced Security</h3>
                            </div>
                            <div class="service-content">
                                <p>Security is paramount. Our NFT wallets boast robust protection measures, making them highly resistant to breaches. With decentralized security protocols, users can trust that their assets are safeguarded. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service text-center">
                            <div class="service-icon"> <span class="flaticon-value">
                                    <img src="{{ asset('images/ido-cardano/icon/crypto-exchange.png') }}">
                                </span> </div>
                            <div class="service-title">
                                <h3>Crypto Exchange Integration</h3>
                            </div>
                            <div class="service-content">
                                <p>Our NFT wallets come with integrated support for crypto exchanges. This integration not only enhances transaction flow but also broadens the wallet’s user base, facilitating a vibrant and active trading environment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service text-center ">
                            <div class="service-icon"> <span class="flaticon-value">
                                    <img src="{{ asset('images/nft_wallet/icon/support.png') }}">
                                </span> </div>
                            <div class="service-title">
                                <h3>Customizable Blockchain Support</h3>
                            </div>
                            <div class="service-content">
                                <p>Our development team offers tailored NFT wallet solutions that align with users’ preferences. Whether it’s a major blockchain network or a specific requirement, we can craft an NFT wallet to meet diverse needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2>Pioneering Innovations in Crypto Technology</h2>
                    </div>
                </div>
                <p class="mt10 mb10 text-center">We drive forward the future of crypto with cutting-edge advancements and exceptional expertise. Our top-tier developers are dedicated to enhancing the crypto landscape, addressing the high demand for advanced NFT wallets. By designing and crafting sophisticated NFT wallets, we create dynamic ecosystems where users can thrive and fully engage with their assets.</p>
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
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>CONNECT WITH US</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Consult Our Specialists</span></a>
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