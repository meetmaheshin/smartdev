@extends('layouts.static')
    @section('title', 'Crypto Exchange Like Coinbase')
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

    .banner-overlay {
        background-color: rgb(0 0 0 / 50%);
    }

    .contentall a:hover {
        background: #00acdc
    }

    .banner {
        background-image: url(' {{ asset('images/crypto-exchange-like-coinbase/banner.webp') }} ');
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
        background-image: linear-gradient(to right, #12121230, #0808080a);
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

    h3.section-title {
        font-size: 23.54px !important;
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
            padding-bottom: 60px
        }

        .banner-overlay {
            background: rgb(0 0 0 / 98%);
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

    .work-process {
        background: #f2f2f2;
        min-height: 333px;
    }

    #Workflow .work-process::after {
        content: "";
        position: absolute;
        background: #f1f3f5;
        left: 0px;
        top: 0px;
        width: 0px;
        height: 100%;
        transition: all 0.3s;
        z-index: -1;
    }

    #Workflow .work-process:hover::after {
        background: rgb(233 248 255 / 22%);
        width: 100%;
        height: 100%;
        z-index: -1;
        border-radius: 10px;
        /* box-shadow: 0px 30px 0px -20px #47b4756b; */
    }

    #Workflow .work-process:hover::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        background-image: url(images/crypto-exchange-like-coinbase/green-shape.webp);
        background-position: top;
        background-size: contain;
        background-repeat: no-repeat;
        height: 200px;
        width: 200px;
        z-index: -1;
        opacity: 0.2;
        -webkit-transition: all 0.5s ease-in-out;
        transition: all 0.5s;
    }

    #Workflow .work-process {
        background-color: #fff;
        padding: 15px;
        position: relative;
        z-index: 1;
        transition: 0.5s;
        margin-bottom: 30px;
        border: 1px solid #1fb6c43b;
        text-align: center;
        border-left: 2px dotted #47b475;
        border-bottom: 2px dotted #47b475;
        border-start-start-radius: 20px;
        border-end-end-radius: 20px;
        box-shadow: -3px 3px 0px 2px rgb(71 180 117 / 42%);
    }

    .work-icon {
        width: 75px;
        height: 75px;
        margin: 0 auto !important;
        border-left: 2px dotted #47b475;
        border-bottom: 2px dotted #47b475;
        border-start-start-radius: 20px;
        border-end-end-radius: 20px;
        box-shadow: 3px -2px 0px 2px rgb(71 180 117 / 42%);
    }

    #Workflow .work-process img {
        margin-top: 15px;
        font-size: 40px;
        text-align: center;
        width: 47px;
    }

    #Workflow .work-process h4 {
        font-size: 16px;
        padding: 15px 0px;
        color: #000000;
        font-weight: 700;
    }

    #Workflow .work-process p {
        color: #000000;
    }

    @media (max-width: 991px) {
        .work-process {
            min-height: auto;
        }
    }

    .primary-list li {
        margin-bottom: 30px;
        font-weight: 400;
    }

    .primary-list li {
        color: #222;
    }

    .primary-list li h4 {
        font-weight: 600;
    }

    .primary-list li i {
        color: #47b475;
        padding-right: 10px;
    }

    .port-txt {
        font-weight: 400;
        font-size: 15px !important;
    }

    .mt-5 {
        margin-top: 5px;
    }

    .p-6 {
        padding: 1.5rem !important;
    }

    .flex-row {
        flex-direction: row !important;
    }

    .d-flex {
        display: flex !important;
    }

    .fle-text {
        margin-left: 20px;
    }

    .sto-mark-gen li {
        margin-bottom: 10px;
        padding-bottom: 10px;
    }

    .blockchain-game {
        padding: 60px 0;
        background-color: #ffffff;
    }

    .rounded-border {
        border-radius: 8px;
    }

    @media (min-width: 768px) {
        .box-shade {
            padding: 25px;
            box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 2px 6px 2px;
        }
    }

    @media (max-width: 767px) {

        h2.section-title1 {
            padding: 15px;
        }
    }

    @media (max-width: 991px) {
        .how-tit {
            margin-top: 20px;
        }
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
                                <div class="">
                                    <div class="ban_tirt">
                                        <h1>Launch a Cryptocurrency Exchange Inspired by Coinbase</h1>
                                    </div>
                                    <p class="">Establish your dominance in the future of finance by developing a cryptocurrency exchange akin to Coinbase. Position yourself as a pioneer in the evolving crypto landscape and revolutionize the banking sector with cutting-edge digital solutions.</p>
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
                                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONSULT WITH OUR EXPERTS</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title text-center underline">
                        <div class="sec_tit">
                            <h2>Why Opt for a Cryptocurrency Exchange Platform Similar to Coinbase?</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">Developing a cryptocurrency exchange akin to Coinbase involves embedding the key features of Coinbase into your platform, enhanced with your unique customizations. Coinbase, a leading cryptocurrency exchange, supports over 100 digital assets, offering a seamless trading experience to a vast and growing user base. Its secure infrastructure and intuitive design position it as a future leader in the crypto exchange arena.</p>
                    <p class="mt10 mb10 text-center">As cryptocurrencies gain mainstream traction in the financial sector, creating an exchange like Coinbase presents significant benefits for both the platform owner and its users. This is due to the platform’s advanced features and its availability across various formats, including web, Android, and iOS. By leveraging our expertise, you can ensure that your cryptocurrency exchange is equipped with top-tier security measures and robust functionalities, meeting all your specific needs while ensuring a safe and efficient trading environment.</p>
                </div>
            </div>
        </div>
        <div class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box-shade text-center">
                            <div class="section-title">
                                <h2 class="section-title underline mb20 text-center font-wei"> Why Invest in Developing a Cryptocurrency Exchange Like Coinbase?</h2>
                            </div>
                            <p class="mt-20 text-center">Venturing into the creation of a cryptocurrency exchange akin to Coinbase is a strategic move given the explosive growth in the digital finance sector, despite global economic uncertainties. A platform modeled after Coinbase offers the advantage of global scalability and supports a diverse range of cryptocurrencies, tailored to your specific needs. With integrated smart contracts that secure every transaction, a Coinbase-like exchange ensures a reliable and protected user experience. Additionally, such an exchange facilitates multiple payment gateways, enabling seamless transfers between cryptocurrencies and traditional bank accounts.</p>
                            <p class="mt-20 text-center">In today’s dynamic landscape, establishing a cryptocurrency exchange with features similar to Coinbase is a highly lucrative opportunity. Despite the inherent volatility of cryptocurrencies, the consistent transaction volume keeps the crypto exchange sector robust. As traditional financial systems face challenges, an increasing number of individuals, particularly from emerging markets, are likely to shift their assets into cryptocurrencies. This trend underscores the growing significance of exchanges like Coinbase, amplifying their impact and reach in the global financial ecosystem.</p>

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
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="Workflow" class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2 class="section-title1 underline mb20 text-center font-wei">Features of a Cryptocurrency Exchange Like Coinbase</h2>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/crypto-exchange-like-coinbase/ui.png') }}"> </div>
                            <h4>Streamlined UI/UX Design</h4>
                            <p>Our cryptocurrency exchange solution, modeled after Coinbase, boasts an intuitive user interface (UI) and seamless user experience (UX), ensuring effortless navigation and engagement for your users.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/crypto-exchange-like-coinbase/transactions.png') }}"> </div>
                            <h4>Comprehensive Transaction History</h4>
                            <p>The platform provides a dedicated section where users can access a detailed history of all their cryptocurrency transactions, enhancing transparency and user control.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/crypto-exchange-like-coinbase/chat.png') }}"> </div>
                            <h4>Integrated In-App Messaging</h4>
                            <p>The exchange includes a secure chat function, allowing users to negotiate and finalize trades without revealing personal contact information.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 ">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/crypto-exchange-like-coinbase/authentication.png') }}"> </div>
                            <h4>Enhanced Security with Two-Factor Authentication</h4>
                            <p>To safeguard the platform against unauthorized access, our exchange incorporates two-factor authentication, requiring a secondary verification step during login.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/crypto-exchange-like-coinbase/wallet.png') }}"> </div>
                            <h4>Robust Escrow Wallet</h4>
                            <p>Our advanced escrow wallet feature guarantees that transactions are only completed once both parties have reached a mutual agreement, ensuring secure and reliable exchanges.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/crypto-exchange-like-coinbase/promotions.webp') }}"> </div>
                            <h4>Cryptocurrency Promotion</h4>
                            <p>Sellers can promote their cryptocurrencies on the platform, with advertising fees varying based on the duration and prominence of the advert.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/crypto-exchange-like-coinbase/chart.png') }}"> </div>
                            <h4>Real-Time Market Charts</h4>
                            <p>The exchange provides live market charts, offering users up-to-date information on cryptocurrency prices and trends to inform their trading decisions.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="work-process">
                            <div class="work-icon"> <img class="lazy"
                                    src="{{ asset('images/crypto-exchange-like-coinbase/support.png') }}"> </div>
                            <h4>Extensive Coin Support</h4>
                            <p>In addition to major cryptocurrencies like Bitcoin, Ethereum, and Litecoin, our platform supports a wide array of digital assets, catering to diverse trading preferences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2 class="section-title underline mb20 text-center font-wei">Why a Coinbase-Like Exchange is a Smart Choice</h2>
                    </div>
                </div>
                <div class="row mt40">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="list-box">
                            <ul class="primary-list">
                                <li>
                                    <h4><i class="fa fa-caret-right"></i>User-Friendly Interface</h4>
                                    <p class="port-txt">The platform offers an intuitive user interface that simplifies navigation and interaction for all users, paired with an exceptional user experience.</p>
                                </li>
                                <li>
                                    <h4><i class="fa fa-caret-right"></i>Top-Tier Security</h4>
                                    <p class="port-txt">With comprehensive multi-layered verification processes, the exchange ensures robust security measures, effectively safeguarding against potential breaches.</p>
                                </li>

                                <li>
                                    <h4><i class="fa fa-caret-right"></i>Rapid Transaction Processing</h4>
                                    <p class="port-txt">Cryptocurrency transfers on this platform are executed with remarkable speed, significantly reducing user wait times and enhancing efficiency.</p>
                                </li>
                                <li>
                                    <h4><i class="fa fa-caret-right"></i>Cross-Platform Accessibility</h4>
                                    <p class="port-txt">Our exchange can be seamlessly developed for web browsers, Android, and iOS, ensuring broad accessibility and engagement from a global audience.</p>
                                </li>
                                <li>
                                    <h4><i class="fa fa-caret-right"></i>Competitive Trading Fees</h4>
                                    <p class="port-txt">The platform features low trading fees compared to other exchanges, making it a cost-effective choice for users and encouraging frequent trading.</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6"> <img class="rounded-border lazy"
                            src="{{ asset('images/crypto-exchange-like-coinbase/benefits.png') }}"> </div>
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



        <div class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title text-center underline">
                        <div class="sec_tit">
                            <h2>Steps to Develop a Cryptocurrency Exchange Like Coinbase</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">Building a cryptocurrency exchange akin to Coinbase begins with meticulous planning. This initial phase involves crafting comprehensive strategies for every aspect of the project, including platform development, post-launch updates, and marketing tactics. Next, conduct an in-depth market analysis to identify unique features that competitors may have overlooked. Use these insights to define the features of your application.</p>
                    <p class="mt10 mb10 text-center">Following the research phase, proceed to design the user interface (UI) and user experience (UX) to meet your specifications. It's crucial to explore various design perspectives and themes, as having alternative plans can be advantageous.</p>
                    <p class="mt10 mb10 text-center">Once the design phase is complete, focus on the technological foundation through back-end development. This stage is crucial for ensuring the exchange’s security and reliability, which are paramount in the cryptocurrency realm. Rigorously test the platform using diverse scenarios to identify and resolve any issues, as quality assurance is vital to delivering a superior user experience.</p>
                    <p class="mt10 mb10 text-center">The final phase involves launching your cryptocurrency exchange, making it available to users, and initiating trading operations. Post-launch, continuous analysis, and frequent updates are essential to maintain and enhance platform performance.</p>

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
                                target="_blank"
                                href="#"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                            <a href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  pull-left text-center defiimg"> <img
                            class="lazy rounded-border" src="{{ asset('images/crypto-exchange-like-coinbase/profit.webp') }}">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="section-title how-tit">
                            <h2 class="section-title underline mb20 text-left font-wei"> How Lucrative is a Cryptocurrency Exchange Business? </h2>
                        </div>
                        <p class="mt-20 text-justify">Entering the cryptocurrency exchange market remains a highly profitable venture in today's thriving digital finance landscape. With an ever-growing wave of investors pouring into cryptocurrencies, this trend shows no signs of slowing. To maximize profitability, your exchange should embrace a high level of decentralization, aligning with the global shift towards decentralized finance (DeFi) applications, where cryptocurrencies play a crucial role.
                        <br><br>
                        Your exchange can generate substantial revenue through various streams: fees from deposits, withdrawals, and listings; commissions on trades and token sales; and advertising opportunities for user-promoted coins. By leveraging these revenue channels, you not only enhance your financial gains but also build a strong market reputation.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="section-title">
                            <h3 class="section-title underline mb20 text-left font-wei">Why Partner with Us for Your Cryptocurrency Exchange Like Coinbase?</h3>
                        </div>
                        <p class="mt-20 text-justify">Choosing us for your cryptocurrency exchange development, modeled after Coinbase, means entrusting your project to top-tier experts who excel at every phase of the process. We bring cutting-edge technology and proven features from Coinbase to your platform, ensuring that your exchange is not only advanced but also secure and robust. Our team is dedicated to crafting a solution that builds trust and delivers exceptional performance. Connect with our specialists today to discover how we can help you create a premier cryptocurrency exchange that stands out in the market.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center defiimg"> <img class="lazy"
                            src="{{ asset('images/crypto-exchange-like-coinbase/last.webp') }}"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js" type="8a86c8c9348d949a4ffc28f8-text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js"
    type="8a86c8c9348d949a4ffc28f8-text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/plugins/overscroll.js"
    type="8a86c8c9348d949a4ffc28f8-text/javascript"></script>

<script src="js/vendor.js" type="8a86c8c9348d949a4ffc28f8-text/javascript"></script>
<script src="js/plugins.js" type="8a86c8c9348d949a4ffc28f8-text/javascript"></script>
<script src="js/main.js" type="8a86c8c9348d949a4ffc28f8-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="8a86c8c9348d949a4ffc28f8-text/javascript"></script>
<script type="8a86c8c9348d949a4ffc28f8-text/javascript">
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
<script type="8a86c8c9348d949a4ffc28f8-text/javascript">
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
<script type="8a86c8c9348d949a4ffc28f8-text/javascript">
    $('.view_pricing').click(function() {
        $('html, body').animate({
            scrollTop: $('#pricing-section').offset().top
        }, 2000);
    });
</script>
<script type="8a86c8c9348d949a4ffc28f8-text/javascript">
    var url = window.location.href;
    $('#url').val(url);
</script>
<!-- <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> -->
<script type="8a86c8c9348d949a4ffc28f8-text/javascript">
    $(".pricing-body").mCustomScrollbar({
        theme: "minimal"
    });
</script>
<script type="8a86c8c9348d949a4ffc28f8-text/javascript">
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
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="8a86c8c9348d949a4ffc28f8-|49" defer></script>
</div>


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

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="8a86c8c9348d949a4ffc28f8-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="8a86c8c9348d949a4ffc28f8-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="8a86c8c9348d949a4ffc28f8-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>




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


@endsection