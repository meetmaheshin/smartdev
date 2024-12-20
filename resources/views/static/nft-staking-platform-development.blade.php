@extends('layouts.static')
    @section('title', 'NFT Staking Platform Development')
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
    .banner_content {
        text-align: left;
    }

    .banner-overlay {
        background-color: rgb(0 0 0 / 49%);
    }

    .contentall a:hover {
        background: #00acdc;
    }

    .banner {
        background-image: url('{{ asset('images/staking/banner.jpeg') }}');
        background-size: cover;
        padding-top: 138px;
        padding-bottom: 120px;
        background-repeat: no-repeat;
        height: auto;
        background-position: center;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(to right, #11091766, #20132a);
        opacity: 0.70;
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
    }

    .banner_content .contentall {
        margin-top: 85px;
    }

    .contentall h1,
    .ban_tirt {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 40px;
        text-transform: capitalize;
        color: #fff;
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
        text-transform: capitalize;
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

    @media (max-width: 1199px) {

        .contentall h1,
        .ban_tirt {
            font-size: 30px;
        }
    }

    @media (max-width: 768px) {
        .pad {
            padding: 0px !important;
        }

        .box_banner {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .banner_content .contentall {
            margin-top: 50px;
            text-align: center;
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)));
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .banner-overlay {
            background: #023c51db;
        }

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

        .flip-box {
            max-width: 450px;
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

    .eto-exchange-flip .flip-box {
        min-height: 412px;
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
        margin-top: 0px;
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

    .box_opacity {
        background: #000000bf;
        padding: 5% 5% 8%;
        border-radius: 10px;
    }

    .para {
        width: 90%;
        margin: 0 auto;
    }

    .text-dark {
        color: #000 !important;
    }

    .flip-box {
        min-height: 346px;
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
        transition: all .3s ease 0s;
        border-radius: 5px;
        overflow: hidden;
        background: #86938c6b;
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
        color: #fff;
    }

    .testimonials-item .user i img {
        width: 55px;
        margin-top: 8px;
    }

    .testimonials-item .testimonials-content {
        background: #fff;
        overflow: hidden;
        box-shadow: 0 2px 48px 0 rgb(0 0 0 / 6%);
        border-radius: 5px;
        position: relative;
        /* height: 100%; */
        min-height: 220px;
    }

    .testimonials-item:hover h3 {
        color: #fff !important;
    }

    .testimonials-item:hover p {
        color: #fff !important;
    }

    .testimonials-item .testimonials-content::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: #393737 !important;
        opacity: 0;
        transition: all .3s ease 0s;
    }

    .testimonials-item .testimonials-content .user-name {
        display: block;
        font-weight: 600;
        font-size: 19px;
        color: #000;
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
        margin-top: 60px !important;
        font-weight: 400;
        color: #000000;
        letter-spacing: .6px;
        line-height: 26px;
        position: relative;
        z-index: 3;
    }

    .txt p {
        font-size: 15px !important;
    }

    .testimonials-item:hover .testimonials-content:before {
        opacity: 1;
    }

    .testimonials-item:hover .user {
        top: -20px;
    }

    .single-service {
        background: #fff;
        border-radius: 10px;
        text-align: left !important;
        margin-top: 14px;
        padding: 22px;
        color: #000000;
        text-align: center;
        transition: all 0.4s ease 0s;
    }

    .single-service .icon {
        width: 90px;
        height: 90px;
        margin: 0 auto;
        box-shadow: 0 0 6px 4px #47b475;
        border-radius: 50%;
        line-height: 90px;
        transition: 0.5s;
        margin-left: 1px !important;
        float: left !important;
        text-align: center;
        margin-right: 15px;
    }

    .single-service .icon img {
        width: 55px !important;
        transition: 0.5s;
        margin-top: 17px;
    }

    .single-service h4 {
        font-size: 16px;
        font-weight: 700;
        color: #000000;
        letter-spacing: 1px;
        margin-top: 0px;
        display: inline-block;
    }

    .single-service p {
        margin-top: 10px;
        margin-bottom: 0;
        margin-left: 106px;
        color: #000;
        font-size: 15px;
        line-height: 1.5;
    }

    .mt_40 {
        margin-top: 40px;
    }

    .flip-tit {
        font-size: 20px;
        color: #000000;
        line-height: 1.6;
        margin-bottom: 11px;
        font-weight: 700;
    }
</style>


<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="banner_tit_text">
                                    <div class="ban_tirt">
                                        <h1>NFT Staking Platform Development</h1>
                                    </div>
                                    <p>Unlock the full potential of your NFTs with a cutting-edge staking platform designed for reliability and rewarding experiences. Our advanced development services offer a robust solution for staking NFTs, allowing users to earn valuable rewards while securing their digital assets.</p>
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
                                            data-hover-text-color-override="#fff"><span>Schedule a Consultation</span>
                                        </a> --}}
                                        <a href="{{ url('consultation') }}"
                                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center mt50"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2>NFT Staking: Unlocking Value and Rewards</h2>
                    </div>
                </div>
                <p class="mt10 text-center para">NFT staking involves locking your NFT assets to unlock a range of benefits and rewards. By staking NFTs, users can gain exclusive perks, contribute to liquidity pools, and access airdrops. This process not only enhances the liquidity of the NFT market but also opens up additional revenue streams, making NFT staking a powerful way to monetize your digital assets. Mastery of the NFT market and its opportunities is crucial for effective staking.</p>
            </div>
        </div>
        <div class="intro_cnt common_spacing gray_bg uniq_features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center pull-left"> 
                        <img src="{{ asset('images/staking/img_1.webp') }}" class="lazy" width="320px"> 
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="section-title underline text-left">
                            <div class="sec_tit">
                                <h2>NFT: The Evolution of a Revolutionary Market</h2>
                            </div>
                        </div>
                        <p class="mt10 text-left">NFTs represent one of the most groundbreaking innovations in the crypto realm. Their integration into blockchain technology has established them as a highly trusted and transparent asset. The NFT market is expanding rapidly, attracting artists and creators with its extensive features. As the market continues to evolve, the diverse applications and growing demand for NFTs reflect their transformative potential across various use cases.</p>
                        <div class="text-left">
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
                                    data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
                                <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="common_spacing pad">
            <div class="container">
                <div class="section-title text-center m-b-30">
                    <h2 class="sec_tit underline text-center">Exploring Business Opportunities in the NFT Space</h2>
                    <p class="text-center">The explosive growth of NFTs is a testament to their revolutionary impact on the crypto market. Various business models have emerged, fueling the rapid expansion of the NFT ecosystem. NFT marketplaces play a pivotal role in this success, attracting vast audiences and generating substantial revenues in record time. Here’s a glimpse into the major NFT categories that shape the marketplace and hold immense potential for NFT staking:</p>
                </div>
                <div class="row flip-box-row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-flip-box flip-box">
                            <div class="flip-icon-outer"> <img class="lazy" src="{{ asset('images/staking/icon/art.png') }}"
                                    width="60"> </div>
                            <h5 class="flip-tit"> Art NFTs </h5>
                            <p class="flip-txt"> Art NFTs, crafted by artists or designers, transform traditional artworks into digital assets available for trade on NFT platforms. Each transaction not only allows creators to showcase their work but also ensures they receive ongoing royalties with every sale. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-flip-box flip-box">
                            <div class="flip-icon-outer"> <img class="lazy" src="{{ asset('images/staking/icon/assets.png') }}"
                                    width="60"> </div>
                            <h5 class="flip-tit">Asset NFTs</h5>
                            <p class="flip-txt">Asset NFTs represent both physical and digital assets, ranging from real estate to virtual goods. These NFTs are minted based on tangible or digital properties and listed on specialized marketplaces, expanding the scope of NFT applications. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-flip-box flip-box">
                            <div class="flip-icon-outer"> <img class="lazy" src="{{ asset('images/staking/icon/console.png') }}"
                                    width="60"> </div>
                            <h5 class="flip-tit">Gaming and Sports NFTs</h5>
                            <p class="flip-txt"> Gaming and sports NFTs are highly sought after due to their association with real-life players and game characters. Their popularity is reflected in their remarkable sales figures, with some transactions reaching hundreds of millions of dollars in mere moments.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-flip-box flip-box">
                            <div class="flip-icon-outer"> <img class="lazy"
                                    src="{{ asset('images/staking/icon/automation.png') }}" width="60"> </div>
                            <h5 class="flip-tit">Automated NFTs</h5>
                            <p class="flip-txt">Automated or generative NFTs, known for their algorithm-driven creation, captivate audiences with unique, pixel-based designs and themes. These NFTs appeal to a diverse crypto community, offering fresh and innovative content within the NFT space.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-left"> 
                        <img src="{{ asset('images/staking/img_3.jpeg') }}" class="mt10 mb10 lazy" width="100%" height="260px"> 
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="section-title underline text-left">
                            <div class="sec_tit mt_40">
                                <h2 class="mtt30">DeFi - The Catalyst for NFT Staking Innovation</h2>
                            </div>
                        </div>
                        <p class="mt10 text-left">Decentralized Finance (DeFi) stands as the cornerstone of the crypto revolution, reshaping financial systems and driving the evolution of blockchain-based technologies. By dismantling traditional centralized structures, DeFi introduces a new era of privacy and efficiency through automated transactions powered by smart contracts. This paradigm shift empowers users to engage in lending, borrowing, asset transfers, and staking within a decentralized framework.</p>
                    </div>
                </div>
            </div>
            <div class="container mt50">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title underline text-left">
                            <div class="sec_tit mt_40">
                                <h2>NFT Staking in the DeFi Ecosystem</h2>
                            </div>
                        </div>
                        <p class="mt10 text-left">Integrating NFT staking with DeFi amplifies its potential, leveraging smart contracts to govern interactions between the platform and the staker. These contracts come with strict protocols, and any deviation from these standards can have significant repercussions. The decentralized nature of DeFi ensures that transactions remain private and secure, offering stakers not only the safety of anonymity but also a range of monetization opportunities, including incentives and rewards.</p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12"> 
                        <img src="{{ asset('images/staking/img_4.jpg') }}" class="mt10 mb10 lazy" width="100%" height="270px"> 
                    </div>
                </div>
            </div>
        </div>
        <section class="Postmates Clone App Interfaces grey-bg common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <div class="sec_tit mb20">
                            <h3 class="section-title underline mb20">NFT Staking Platforms: The Next Frontier in Digital Assets</h3>
                        </div>
                        <p class="text-center">The rise of NFT staking platforms is transforming the NFT landscape, positioning them as essential counterparts to NFT marketplaces. These platforms are rapidly gaining traction as foundational hubs for diverse NFT services. With an eye on future trends, we ensure our NFT staking solutions are both cutting-edge and adaptable, evolving continuously to meet market demands.</p>
                    </div>
                    <div class="  testimonials-wrapper container-center mt50">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize aos-init aos-animate"
                            data-aos="fade-right" data-aos-delay="200">
                            <div class="testimonials-item">
                                <div class="user"> <i class=" "><img class="lazy"
                                            src="{{ asset('images/staking/icon/experiences.png') }}"> </i> </div>
                                <div class="testimonials-content">
                                    <h3 class="user-name">Exceptional User Engagement</h3>
                                    <div class="txt">
                                        <p>Our NFT staking platforms are designed with a focus on delivering an engaging and intuitive user experience, setting new standards in user satisfaction. We prioritize a seamless interface that captivates and retains users, aligning with our commitment to excellence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize aos-init aos-animate"
                            data-aos="fade-right" data-aos-delay="600">
                            <div class="testimonials-item">
                                <div class="user"> <i class=" "><img class="lazy"
                                            src="{{ asset('images/staking/icon/security.png') }}"> </i> </div>
                                <div class="testimonials-content">
                                    <h3 class="user-name">Dynamic Security Framework</h3>
                                    <div class="txt">
                                        <p>Security is paramount in any online application, and our NFT staking platforms are fortified with state-of-the-art defenses. We implement robust protocols and firewalls to safeguard against potential threats, ensuring a secure environment for all users.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize aos-init aos-animate"
                            data-aos="fade-left" data-aos-delay="400">
                            <div class="testimonials-item">
                                <div class="user"> <i class=" "><img class="lazy"
                                            src="{{ asset('images/staking/icon/features.webp') }}"> </i> </div>
                                <div class="testimonials-content">
                                    <h3 class="user-name">Unique Features and Enhancements</h3>
                                    <div class="txt">
                                        <p>Our NFT staking platforms come with exclusive enhancements that set them apart. These include advanced growth-hacking tools, bespoke add-ons, and decentralized applications (DApps) to accelerate performance and elevate user experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize aos-init aos-animate"
                            data-aos="fade-left" data-aos-delay="200">
                            <div class="testimonials-item">
                                <div class="user"> <i class=" "><img class="lazy"
                                            src="{{ asset('images/staking/icon/smart-contracts.webp') }}"> </i> </div>
                                <div class="testimonials-content">
                                    <h3 class="user-name">Automated Smart Contracts</h3>
                                    <div class="txt">
                                        <p>Smart contracts are at the heart of our platforms, automating operations and ensuring transparency. By embedding agreements directly into the blockchain, we uphold a zero-trust security model that enhances the integrity and efficiency of the platform.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize aos-init aos-animate"
                            data-aos="fade-left" data-aos-delay="200">
                            <div class="testimonials-item">
                                <div class="user"> <i class=" "><img class="lazy"
                                            src="{{ asset('images/staking/icon/api.png') }}"> </i> </div>
                                <div class="testimonials-content">
                                    <h3 class="user-name">Integrated APIs and Wallets</h3>
                                    <div class="txt">
                                        <p>Our platforms come equipped with essential APIs and wallet integrations from the outset. These components are integral to optimizing the platform's functionality and performance, ensuring a smooth and efficient operation from day one.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center" style="width: 100%">
                        <div class="sec_tit mb20">
                            <h3 class="section-title underline mb20">Benefits of an NFT Staking Platform</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 aos-init aos-animate" data-aos="fade-right"
                        data-aos-delay="200">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-service text-left">
                                    <div class="icon"> <img class="lazy" src="{{ asset('images/staking/icon/rewards.png') }}"
                                            style="width:40px;"> </div>
                                    <h4>Exclusive Rewards</h4>
                                    <p>Unlock a range of exclusive rewards through our NFT staking platform. The value of your staked NFTs translates into tangible benefits, enhancing your overall staking experience.</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-service text-left">
                                    <div class="icon"> <img class="lazy" src="{{ asset('images/staking/icon/airdrop.png') }}">
                                    </div>
                                    <h4>Surprise Airdrops</h4>
                                    <p>Stay engaged with random airdrops available on the platform. These airdrops are designed to incentivize and maintain enthusiasm among users, adding an extra layer of excitement to your staking journey.</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-service text-left">
                                    <div class="icon"> <img class="lazy" src="{{ asset('images/staking/icon/incentive.png') }}">
                                    </div>
                                    <h4>Ongoing Incentives</h4>
                                    <p>Generate a steady stream of revenue through NFT staking. As long as your NFTs remain staked, you'll continue to earn recurring incentives, creating a sustainable income stream.</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-service text-left">
                                    <div class="icon"> <img class="lazy"
                                            src="{{ asset('images/staking/icon/transparency.webp') }}"> </div>
                                    <h4>Enhanced Transparency</h4>
                                    <p>Our platform upholds complete transparency, fostering trust and confidence among users. This commitment to openness ensures that all activities and transactions are clear and verifiable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 mt-30 text-center aos-init aos-animate" data-aos="fade-left" data-aos-delay="300"> 
                        <img src="{{ asset('images/staking/img_2.webp') }}" class="lazy mt-30"> 
                    </div>
                </div>
            </div>
        </section>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="section-title text-center underline para">
                    <div class="sec_tit">
                        <h2>Elevate Your NFT Staking with Cutting-Edge Development</h2>
                    </div>
                </div>
                <p class="mt10 text-center para">Partner with us to bring your vision of an NFT staking platform to life. As a leading firm in advanced development solutions, we offer an unparalleled approach to building a stable and dependable NFT staking environment. Our expertise ensures your platform is at the forefront of the NFT revolution. Don’t miss out on the opportunity to be part of the next big leap in the NFT space. Connect with us to begin your journey towards a successful NFT staking venture.</p>
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
                            data-hover-text-color-override="#fff"><span>Schedule a Consultation</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Connect with Our Experts</span></a>
                    </div>
                </div>
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