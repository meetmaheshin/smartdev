@extends('layouts.static')
    @section('title', 'NFT Influencer Marketing Services')
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
        color: #000
    }

    .banner-overlay {
        background-color: rgb(0 0 0 / 0%)
    }

    .contentall a:hover {
        background: #00acdc
    }

    .banner {
        background: linear-gradient(45deg, #18111100, #00000000), url('{{ asset('images/nft-influencer/influencer_bnr.webp') }}');
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
        background-image: linear-gradient(to right, #06060600, #08080800);
        opacity: .95
    }

    #ico .banner_content {
        text-align: center;
        position: relative;
        top: 0;
        transform: none
    }

    .banner_content .contentall {
        margin-top: 85px
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
        color: #000
    }

    .contentall p {
        font-weight: 400;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 21px;
        max-width: 800px;
        margin: 0 auto 30px;
        display: block;
        color: #000
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
        color: #000;
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
            background: rgb(0 0 0 / 0%)
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

    .text-white {
        color: #fff
    }

    .text-dark {
        color: #000 !important
    }

    .uniq_features ul {
        padding-left: 15px
    }

    .uniq_features ul li {
        margin-bottom: 15px;
        position: relative;
        padding-left: 29px
    }

    .uniq_features ul li:after {
        /* font-family: FontAwesome; */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        top: -3px;
        right: 0;
        padding-right: 10px;
        content: "\f0a9";
        position: absolute;
        left: 0;
        font-size: 20px;
        color: #03b787
    }

    .feature ul {
        padding-left: 15px
    }

    .feature ul li {
        margin-bottom: 15px;
        position: relative;
        padding-left: 29px
    }

    .feature ul li:after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        top: -4px;
        right: 0;
        padding-right: 10px;
        content: "\f064";
        position: absolute;
        left: 0;
        font-size: 20px;
        color: #03b787
    }

    .font-wei {
        color: #000;
        font-weight: 700
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

    <div class="main">
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="">
                                    <div class="ban_tirt">
                                        <h1>Elevate Your NFT Marketplace with Our Premier Influencer Marketing Solutions</h1>
                                    </div>
                                    <p>Propel your NFT business to unprecedented heights with our elite NFT influencer marketing services. Influencers play a pivotal role in bridging the gap between your venture and remarkable success.</p>
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
                                            data-hover-text-color-override="#fff"><span>SCHEDULE A CONSULTATION</span></a> --}}
                                        <a href="{{ url('consultation') }}"
                                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mt60">
                            <img src="{{ asset('images/nft-influencer/main-img-1.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="intro_cnt common_spacing">
            <div class="container">
                <div class="col-lg-12">
                    <div class="section-title text-center underline">
                        <div class="sec_tit">
                            <h2>Achieve Remarkable Success with Our NFT Influencer Marketing Expertise</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">NFTs have surged to unprecedented prominence, becoming a global digital phenomenon. Their revolutionary approach to asset trading has captured the world's attention, highlighting their unparalleled speed, benefits, and scalability. As NFTs gain traction across the digital realm, launching your own NFT venture has never been more opportune. To elevate your NFT business to new heights, a comprehensive marketing strategy is essential. Among these, influencer marketing stands out for its ability to attract a diverse and extensive audience to your project. Our premier NFT influencer marketing services are designed to propel your NFT initiative to unparalleled success, transforming it into a leading platform with a massive user base.</p>
                </div>
            </div>
        </section>
        <section class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="" src="{{ asset('images/nft-influencer/influencer.webp') }}">
                    </div>
                    <div class="col-md-6">
                        <div class="section-title underline text-left">
                            <div class="sec_tit">
                                <h2>Understanding NFT Influencer Marketing</h2>
                            </div>
                        </div>
                        <p class="mt10 text-justify">In today’s digital landscape, influencer marketing remains an invaluable tool for promoting your NFT projects. By leveraging influencers with substantial followings, you can propel your NFT project to new heights. NFT influencer marketing involves partnering with external content creators who champion and engage with your brand’s message. These influencers are adept at creating compelling content that resonates with their audiences and provides seamless access to your target demographic. Their established rapport with their followers amplifies your brand's visibility and effectiveness.</p>
                    </div>
                </div>
                <div class="row" style="margin-top: 40px">
                    <div class="col-md-6">
                        <div class="section-title underline text-left">
                            <div class="sec_tit">
                                <h3 class="font-wei">Unlock Greater Reach with Influencers</h3>
                            </div>
                        </div>
                        <p class="mt10 text-justify">Influencers are the modern-day brand ambassadors in the digital media realm, capturing the attention of their dedicated followers. With our expertise, you can harness the power of top NFT influencers to elevate your project. We specialize in dynamic influencer advertising strategies that drive authentic engagement and measurable results. Influencer marketing offers an exceptional avenue to connect with your target audience and enhance brand awareness among those who share your interests.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="lazy" src="{{ asset('images/nft-influencer/finding.jpeg') }}">
                    </div>
                </div>
            </div>
        </section>
        <section id="our_services" class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title" style="width: 100%">
                        <h3 class="section-title underline mb20 font-wei text-center">Maximize Impact with Our Influencer Collaboration</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
                        <ul class="list-ico">
                            <li><strong>Social Media Product Reviews:</strong> Leverage influencers to provide genuine reviews and amplify your product’s reach.</li>
                            <li><strong>Creative Content Placement:</strong> Integrate your product into engaging content without direct endorsements, seamlessly blending into the influencer’s narrative.</li>
                            <li><strong>Campaign and Launch Promotion:</strong> Utilize influencers to broadcast your brand's campaigns and unveil new products, expanding their visibility.</li>
                            <li><strong>Exclusive Coupon Codes:</strong> Offer unique discount codes through influencers to incentivize their audience and drive sales.</li>
                            <li><strong>Co-Branded Initiatives:</strong> Collaborate with influencers to create exclusive products or campaigns that resonate with both their followers and your brand.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                        <ul class="list-ico mt20">
                            <li><strong>Influencer Giveaways:</strong> Engage audiences with giveaways hosted on influencers’ platforms to generate excitement and broaden your reach.</li>
                            <li><strong>Event Promotions:</strong> Announce and promote events involving influencers or your brand to leverage their audience.</li>
                            <li><strong>Charity and Fundraiser Support:</strong> Contribute to influencers' charitable events, reinforcing your brand’s commitment to meaningful causes.</li>
                            <li><strong>Content Creation:</strong> Have influencers craft compelling content for your brand, including videos, blog posts, and social media ads.</li>
                        </ul>
                    </div>
                </div>
                <p class="text-center">The potential for what can be achieved through influencer partnerships is boundless. The most successful collaborations employ innovative strategies to deliver fresh, impactful content to audiences.</p>
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
                            data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="common_spacing gray_bg">
            <div class="uniq_features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-title underline text-center">
                                <h2 class="common_h3 sec-tit font-wei">Influencer Marketing Services: The Future of Promotion</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul>
                                <li>Influencer marketing is rapidly emerging as the leading channel in the modern marketing arena, fueled by a growing need for authentic endorsements from relatable voices.</li>
                                <li>Unlike traditional marketing, which often feels impersonal, influencers offer genuine, relatable recommendations that strike a chord with consumers.</li>
                                <li>Leveraging influencer marketing services allows you to access new audience segments, generate high-quality leads, and boost brand visibility among current customers.</li>
                                <li>Influencers introduce a novel, engaging way to showcase your products and convey your messages, capturing the interest of buyers with their unique and credible approach.</li>
                                <li>As the marketing landscape evolves, our expertise in influencer advertising places us at the cutting edge, ready to propel your exceptional NFT projects to unprecedented success.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                            <div class="text-center"> <img class="br-10 lazy" src="{{ asset('images/nft-influencer/hype.png') }}"> 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('static.web3-clients', array(
            'title' => "Distinguished <span style='color:#47b475;'>Web3 Partners</span> <br> We’ve Catapulted to Prominence",
            'desc' => "As a leading force in Web3 marketing, we are dedicated to delivering premier services that amplify projects and connect them with their target audiences through a diverse array of strategies. Our unwavering commitment has enabled us to collaborate with top-tier Web3 enterprises, driving remarkable success and achieving extraordinary outcomes for their ventures."
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
                <div class="col-lg-12">
                    <div class="section-title text-center underline">
                        <div class="sec_tit">
                            <h2>Unleash Unmatched Impact with Elite KOL Marketing for Your NFT Ventures</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">Are you ready to achieve unparalleled visibility and redefine the NFT landscape? Harness our premier KOL marketing services to leverage the influence of leading voices in the Web3 domain. With our extensive network of global celebrities and influencers championing Web3 innovation, you can craft a compelling and distinctive narrative for your brand.
                    <br><br>
                    No matter the scope of your NFT project, we’re prepared to deliver a multifaceted KOL marketing strategy that highlights creativity, authenticity, and cutting-edge technology. Our team is dedicated to designing a bespoke KOL campaign across diverse online platforms, ensuring exceptional and sustained results for your NFT initiative.
                    </p>
                </div>
            </div>
        </section>
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

            .perfect-script-items1 .icon i {
                font-size: 26px;
            }

            .perfect-script-items1 .icon {
                width: 70px;
                height: 70px;
                /* margin: 20px auto 50px; */
                line-height: 60px;
                position: relative;
                border-radius: 0px 50% 50% 0px;
                color: #fff;
                font-size: 40px;
                box-shadow: 3px 14px 13px 0px #0000003b;
                z-index: 9;
                float: left;
                background: #47b475;
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

            .font-wei {
                font-weight: 700;

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

            @media screen and (max-width:768px) {
                .team {
                    margin-top: 30px !important;
                }

                .perfect-script-items1 {
                    min-height: 240px !important;
                }

            }

            .perfect-script-items1 .icon .lazy{
                margin-top: 12px;
            }
        </style>



    @include('static.bounce-effect-left-cut-card', [
        'title' => 'Multi-Faceted Excellence in Our Crypto Token Development', 
        'desc' => "",
        'cards' => [
            [
                'title' => 'Strategic KOL Marketing',
                'desc' => "Our meticulously crafted KOL marketing strategies ensure your NFT brand excels and endures over time. With our extensive network of influential figures across various popularity tiers, aligning with the right KOLs to meet your specific needs is seamlessly achievable.",
                'image' => 'nft-influencer/icons/marketing.png',
            ],
            [
                'title' => 'KOL Influencer Partnerships',
                'desc' => "We forge exceptional partnerships with KOLs that resonate with your brand's distinct objectives. Our dynamic promotional campaigns elevate your NFT business, garnering widespread recognition across social media platforms.",
                'image' => 'nft-influencer/icons/influencer.png',
            ],
            [
                'title' => 'Paid Social Media Advertising',
                'desc' => "Combining paid social media advertising with KOL marketing accelerates your reach to target audiences. Leverage social media algorithms and the influence of KOLs to achieve substantial visibility swiftly.",
                'image' => 'nft-influencer/icons/social-media.png',
            ],
            [
                'title' => 'Campaign Metrics Analysis',
                'desc' => "We focus on defining clear objectives prior to launching campaigns, monitoring progress in real-time, and evaluating performance against key metrics post-campaign. This approach continually refines KOL promotions, ensuring ongoing enhancement for your NFT brand.",
                'image' => 'nft-influencer/icons/campaign.png',
            ],
            [
                'title' => 'Content Strategy',
                'desc' => "We design content strategies that allow KOLs to express their unique voice, establish online authority, and authenticate your project. This strategy helps you penetrate a broader market, expanding your reach beyond expectations.",
                'image' => 'nft-influencer/icons/content.png',
            ],
            [
                'title' => 'Brand Strategy',
                'desc' => "Our KOL marketing approach starts with crafting a distinctive strategy tailored to reflect the uniqueness of your NFT business. By leveraging our expertise in NFT marketing, we deliver impactful campaigns that utilize KOLs to drive exceptional results.",
                'image' => 'nft-influencer/icons/brand.png',
            ],
        ],
    ])


    <section class="one-page-section common_spacing">
        <div class="one-page-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb30">
                        <h3 class="common_h3 sec-tit underline font-wei">Influencer Marketing: Transforming the NFT Landscape</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mob-right pull-left">
                        <div class="text-center">
                            <img class="lazy" src="{{ asset('images/nft-influencer/influencer-marketing.jpg') }}" alt="Influencer Marketing Image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mob-left pull-right">
                        <div class="">
                            <div class="list-adv">
                                <div class="ce-feature-box-23 mb-20 service-sec d-flex align-items-center">
                                    <div class="iconbox-smedium round white left icon">
                                        <img class="lazy" src="{{ asset('images/nft-influencer/icons/marketing.png') }}"
                                            width="45">
                                    </div>
                                    <div class="text-box-right more-padding-1">
                                        <p>Influencer marketing is rapidly emerging as a potent and dynamic strategy for reaching your target audience effectively. In the realm of social media, influencers hold a unique position where their endorsement can drive significant consumer interest and action.</p>
                                    </div>
                                </div>
                                <div class="ce-feature-box-23 mb-20 service-sec d-flex align-items-center">
                                    <div class="iconbox-smedium round white left icon">
                                        <img class="lazy" src="{{ asset('images/nft-influencer/icons/social-media.png') }}"
                                            width="45">
                                    </div>
                                    <div class="text-box-right more-padding-1">
                                        <p>Influencers wield the power to validate and elevate your NFT project through their extensive reach. When they endorse your NFTs, their endorsement not only amplifies your project’s visibility but also reassures their followers of the quality and value of your offerings.</p>
                                    </div>
                                </div>
                                <div class="ce-feature-box-23 mb-20 service-sec d-flex align-items-center">
                                    <div class="iconbox-smedium round white left icon">
                                        <img class="lazy" src="{{ asset('images/nft-influencer/icons/audience.png') }}"
                                            width="45">
                                    </div>
                                    <div class="text-box-right more-padding-1">
                                        <p>Our agency boasts a roster of top-tier NFT influencers, ready to ignite unparalleled engagement and traffic for your project. Their broad and enthusiastic follower base ensures that your NFT venture receives the spotlight it deserves.</p>
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
                            <div class="price-value"> Starter Package <span>$10,000/Month</span></div>
                            <p>Unleash the power of KOL marketing with our entry-level package, designed to establish your brand’s presence. Includes a comprehensive KOL content strategy & amplification with partnerships including:</p>
                            <ul class="pricing-content">
                                {{-- <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Micro-KOL Collaborations</li> --}}
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Micro-KOL Collaborations: </b> <br>
                                    Engage with 3-5 micro-KOLs. </li>
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion Channels:</b> <br>
                                    <b>- Twitter:</b> 3 KOLs will share promotional tweets about your brand/product.<br>
                                    <b>- Telegram:</b> 5+ posts in relevant channels/groups. <br>
                                    <b>- YouTube:</b> 1 KOL video highlighting your brand.
                                </li>

                            </ul>
                            {{-- <div class="pricingTable-signup">
                                <a rel="nofollow"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"
                                    style="font-size: 18px;" href="{{ url('consultation') }}">Buy Now</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                        <div class="pricingTable purple">
                            <div class="price-value"> Growth Package <span>$30,000/Month</span></div>
                            <p>Elevate your brand with our Growth Package, ideal for scaling your reach and impact. This includes:</p>
                            <ul class="pricing-content">
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Enhanced KOL Content Strategy: </b>Advanced strategies for content and amplification.</li>
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Mid-Tier KOL Collaborations:</b> <br>
                                    Partner with 5-10 mid-tier KOLs. </li>
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion Channels:</b> <br>
                                    <b>- Twitter:</b> 5 KOLs will post promotional tweets.<br>
                                    <b>- Telegram:</b> 15+ posts in targeted channels/groups. <br>
                                    <b>- YouTube:</b> 2 KOL videos featuring your brand.
                                </li>
                            </ul>
                            {{-- <div class="pricingTable-signup">
                                <a rel="nofollow"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"
                                    style="font-size: 18px;" href="{{ url('consultation') }}">Buy Now</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                        <div class="pricingTable purple">
                            <div class="price-value"> Elite Package <span>$50,000/One-Time</span></div>
                            <p>Reach the pinnacle of KOL marketing with our Elite Package, designed for maximum visibility and impact. This includes:</p>
                            <ul class="pricing-content">
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Advanced KOL Strategy:</b> Comprehensive content strategy and amplification.</li>
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Mid-Tier & Top-Tier KOL Collaborations: </b> <br>
                                    Engage with 5-10 mid-tier and top-tier KOLs. </li>
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion Channels:</b><br>
                                    <b>- Twitter:</b> 10 KOLs will tweet about your brand/product.<br>
                                    <b>- Telegram:</b> 30+ posts across influential channels/groups. <br>
                                    <b>- YouTube:</b> 3 KOL videos showcasing your brand.<br>
                                    <b>- Instagram:</b> 2 posts from KOLs and 5+ KOLs posting about your brand.
                                </li>
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Additional Services:</b><br>
                                    <b>- Giveaway or Contest:</b> Managed by KOLs to drive engagement. <br>
                                    <b>- Twitter Spaces:</b> At least 2 sessions with KOLs discussing your brand.
                                </li>
                            </ul>
                            {{-- <div class="pricingTable-signup">
                                <a rel="nofollow"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"
                                    style="font-size: 18px;" href="{{ url('consultation') }}">Buy Now</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                        <div class="pricingTable purple">
                            <div class="price-value"> Supreme Influence Suite <span>$100,000/One-Time</span></div>
                            <p>Achieve unparalleled influence and reach with our Supreme Influence Suite, designed for the ultimate impact. This includes:</p>
                            <ul class="pricing-content">
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Comprehensive KOL Strategy:</b>Tailored content and amplification for top results.</li>
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Broad KOL Collaborations:</b> <br>
                                    Partner with 10-30 KOLs across micro, macro, and top tiers. </li>
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Promotion Channels:</b><br>
                                    <b>- Twitter:</b> 15 KOLs will promote your brand/product.<br>
                                    <b>- Telegram:</b> 50+ posts in high-impact channels/groups.<br>
                                    <b>- YouTube:</b> 5+ KOL videos featuring your brand.<br>
                                    <b>- Instagram:</b> 5 KOL posts and 10+ KOLs showcasing your brand.
                                </li>
                                <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Additional Services:</b><br>
                                    <b>- Giveaway or Contest:</b> Organized by KOLs to maximize engagement. <br>
                                    <b>- Hashtag Campaign:</b> Designed to boost brand visibility. <br>
                                    <b>- Twitter Spaces:</b> At least 3 sessions with KOLs for in-depth discussions about your brand.
                                </li>
                            </ul>
                            {{-- <div class="pricingTable-signup">
                                <a rel="nofollow"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"
                                    style="font-size: 18px;" href="{{ url('consultation') }}">Buy Now</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="intro_cnt common_spacing gray_bg">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h3 class="font-wei">NFTs Revolutionize Influencer Marketing</h3>
                    </div>
                </div>
                <p class="mt10 mb10 text-center">NFTs are reshaping the influencer marketing landscape by introducing a groundbreaking approach to intellectual property and copyright royalties. This innovation is captivating influencers and content creators, offering them a new revenue stream. Over the past decade, we've witnessed how viral moments—from memes to short videos—can generate substantial income. NFTs now provide a lucrative opportunity for various sectors, from professional sports leagues to artists, allowing them to monetize their brand assets without the need for long-term licensing deals.
                <br><br>
                Moreover, as a cutting-edge technology, NFTs enable content creators and businesses to forge dynamic collaborations, crafting unique experiences for their audiences. This partnership drives innovation and creates new customer journeys, offering followers the chance to own exclusive digital collectibles. By leveraging NFTs, both creators and brands can engage audiences in memorable ways, turning content into coveted assets and making significant marks in their respective fields.
                </p>
            </div>
        </div>
    </section>
    <section class="common_spacing">
        <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        {{-- <div class="section-title underline text-center">
                            <h2 class="common_h3 sec-tit font-wei">Premier Influencer Marketing Solutions for Cutting-Edge Brands</h2>
                        </div> --}}
                        <div class="section-title center text-center">
                            <h2 class="sec_tit underline text-center">Premier Influencer Marketing Solutions for Cutting-Edge Brands</h2>
                            <p>Our influencer marketing services set the gold standard, leveraging top-tier resources to maximize your reach and impact.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <ul>
                            <li>We are committed to exceeding your expectations and delivering exceptional marketing solutions at competitive rates.</li>
                            <li>Our 24/7 customer support ensures that your projects receive unparalleled attention and benefit from the influence of leading personalities in the field.</li>
                            <li>When it comes to finding a trustworthy and effective influencer marketing partner, look no further than our premier services.</li>
                        </ul>
                        <div class="">
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
                                    data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING </span></a> --}}
                                <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                        <div class="text-center">
                            <img class="br-10 lazy" src="{{ asset('images/nft-influencer/baf.jpeg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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