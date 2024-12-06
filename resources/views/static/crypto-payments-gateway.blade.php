@extends('layouts.static')
    @section('title', 'Crypto Payments Gateway')
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

    .panel-title {
        color: #333;
    }

    .panel-body {
        color: #333 !important;
    }

    @media (max-width: 500px) {
        .cta_mine {
            width: 85% !important;
            margin: 0 auto;
            display: block;
        }
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
</style>


<style type="text/css">
    .feature_box_6 {
        background: #fff;
        padding: 25px 10px 0;
        margin-bottom: 30px;
        border: 1px solid #ccc;
        box-shadow: 0 0 5px #bbb;
        line-height: 23px;
    }

    .feature_box_6 h3 {
        font-size: 14px;
        margin: 10px 0;
    }

    .feature_box_7 .box-icon {
        border: 2px solid #47b47566;
        border-radius: 4px;
        margin-bottom: 9px;
    }

    .feature_box_7 {
        margin-bottom: 20px;
    }

    .single-reason {
        margin-bottom: 40px;
    }

    .single-reason img {
        float: left;
        width: 50px;
    }

    .single-reason h3,
    .single-reason p {
        padding-left: 75px;
        padding-top: 0 !important;
    }

    .single-reason {
        text-align: left;
    }

    .single-reason h3 {
        font-size: 18px;
        font-weight: 600;
        position: relative;
        padding-top: 15px;
        margin-bottom: 25px;
        clear: none;
    }

    .single-reason h3::before {
        content: "";
        position: absolute;
        width: 60px;
        height: 2px;
        background: #47B475;
        left: 75px;
        top: 35px;
        margin: auto;
    }

    .single-reason p {
        color: #000000;
    }

    @media (max-width: 420px) {
        .banner_content p {
            font-size: 12px !important;
            padding: 18px !important;
            text-align: center !important;
        }

        .contentall h1 {
            font-size: 20px;
            line-height: 24px;
            padding-top: 80px !important;
        }
    }

    h2.small_h1 {
        text-transform: capitalize;
    }

    .sub_head {
        max-width: 900px;
        margin: 0 auto 30px;
    }

    .cta_mine.cta_mine_htt {
        margin-top: 120px;
    }

    .nectar-button {
        padding: 12px 25px;
    }

    @media (max-width: 992px) {
        .cta_mine.cta_mine_htt {
            margin-top: 20px;
        }
    }

    .content h3 {
        font-size: 18px;
        font-weight: 400;
    }

    .large-header:before {
        background: rgb(0 0 0 / 72%) !important;
    }

    .feature_box_7:hover {
        transform: translateY(-10px);
    }

    .feature_box_6:hover {
        background: #47b475;
    }

    .feature_box_6:hover h3 {
        color: #fff;
    }

    .feature_box_6:hover p {
        color: #fff;
    }

    a:hover,
    a:focus {
        text-decoration: none;
        outline: none;
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
        /*background: linear-gradient(to bottom, #fefefe, #cdcdcd);*/
        border: 1px solid #c3c3c3;
        border-radius: 3px;
        font-size: 16px;
        font-weight: bold;
        color: #161515;
        /*    text-shadow: 1px 1px 1px #fff;*/
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
        /*box-shadow: inset 0 0 10px rgba(0,0,0,0.5);*/
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

    .font-wei {
        color: #000000;
        font-weight: 700;
    }

    @media screen and (max-width: 500px) {
        .logo-item {
            width: 100%;
            text-align: center !important;
            margin: 0 auto !important;
        }
    }

    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        margin-bottom: 15px !important;
        display: inline-block;
        margin-right: 13px !important;
        margin-left: 13px !important;
    }
</style>



<div class="header-shadow">

    <div class="main">
        <div class="banner">

            <div id="large-header" class="large-header">
                <img src="images/crypto_payments/banner.webp" alt="Cryptocurrency Payment Gateway Development"
                    title="Cryptocurrency Payment Gateway Solutions">
            </div>
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="contentall">
                                <h1>Cryptocurrency Payment Gateway Solutions</h1>
                                <p>Streamline and secure your transaction processing with our cryptocurrency payment gateway development services. We support a range of currencies, offer competitive transaction fees, and provide top-notch security measures.</p>
                                <h2 class="white"></h2>

                                <div class="cta_mine">
                                    {{-- <a href="#demo"
                                        class="nectar-button medium regular accent-color regular-button nec-btn">VIEW DEMO</a> --}}
                                    <a href="{{ url('consultation') }}"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONSULT WITH OUR EXPERTS</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-header common_spacing gray_bg">
            <div class="container">
                <h2 class="text-center small_h3 section-title underline font-wei">Tailored Crypto Payment Gateways for Enhanced Security</h2>
                <div class="row">
                    <div class="col-md-12 div_center text-center">
                        <p>Create a secure cryptocurrency wallet with our cutting-edge crypto payment gateway development services. We specialize in delivering customized, multi-currency mobile wallets featuring intuitive UI/UX design for everyday use. Our services include payment options via QR codes, NFC, or URLs, ensuring flexibility for your users. Our solutions are backed by liquidity from reputable exchanges and third-party providers, offering maximum security, safety, and reliability. Our expert team will seamlessly integrate your hot and cold wallets with the payment gateway.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-header common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2 class="text-left small_h3 section-title underline font-wei">The Process Behind Cryptocurrency Payments</h2>
                        <p class="text-justify">Instead of using traditional credit cards, transactions are handled through digital wallets. To begin accepting cryptocurrency, you’ll need to set up a merchant account. These wallets can be designed for a single currency or multiple currencies. The received cryptocurrencies can be converted into fiat currency at any time through your payment service provider or a crypto exchange. Unlike traditional payments, crypto transactions are final and cannot be reversed, allowing for quick and secure processing.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <img src="{{ asset('images/crypto_payments/crypto_payment_01.webp') }}" width="380"
                            alt="Crypto Payment Gateway Development" title="How Crypto Payment Gateway works">
                    </div>
                </div>
            </div>
        </div>

        <div class="gray_bg common_spacing">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="text-center small_h3 section-title underline font-wei">Comprehensive Cryptocurrency Payment Gateway Development</h2>
                    <p class="sub_head">Enable efficient and cost-effective global transactions with our Cryptocurrency payment gateway development services, tailored for merchants and businesses.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/fastest-transaction.webp') }}"
                                    alt="Fastest Transaction Time" width="60px">
                            </div>
                            <div class="content">
                                <h3>Lightning-Fast Transactions</h3>
                                <p>We design user-focused gateways to ensure the quickest transaction speeds.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/seamless-conversion.webp') }}" alt="Seamless Conversion" width="60px">
                            </div>
                            <div class="content">
                                <h3>Smooth Conversion</h3>
                                <p>Easily convert fiat currencies into cryptocurrencies for payments without any hassles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/payment-method.webp') }}"
                                    alt="Multiple Payment Options" width="60px">
                            </div>
                            <div class="content">
                                <h3>Diverse Payment Methods</h3>
                                <p>Choose from various options to convert fiat to crypto, including credit/debit cards, wire transfers, or other cryptocurrencies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/multiple-blockchain.png') }}"
                                    alt="Multiple Blockchain Currency" width="60px">
                            </div>
                            <div class="content">
                                <h3>Multi-Blockchain Integration</h3>
                                <p>Incorporate multiple blockchains such as Bitcoin, Ethereum, and EOS for flexible payment options.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/controlled-funds.png') }}" alt="User Controlled Funds" width="60px">
                            </div>
                            <div class="content">
                                <h3>User-Controlled Funds</h3>
                                <p>Users retain full control over their funds and private keys, ensuring maximum security and transparency.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/data-security.webp') }}" alt="Data Security" width="60px">
                            </div>
                            <div class="content">
                                <h3>Robust Data Security</h3>
                                <p>All stored data is protected with advanced cryptographic encryption techniques.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/multiple-wallets.png') }}" alt="Multiple Wallets" width="60px">
                            </div>
                            <div class="content">
                                <h3>Support for Multiple Wallets</h3>
                                <p>Integrate several wallets into a single application for smooth crypto transfers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/multi-laungage-support.webp') }}"
                                    alt="Multi-language support" width="60px">
                            </div>
                            <div class="content">
                                <h3>Multi-Language Support</h3>
                                <p>Users can select from a variety of languages, including French, German, Mandarin, and more.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/transaction-history.png') }}" alt="Transaction History" width="60px">
                            </div>
                            <div class="content">
                                <h3>Comprehensive Transaction History</h3>
                                <p>Both admins and users can review all cryptocurrency transactions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="feature_box_6 equal-height text-center">
                            <div class="box-icon">
                                <img src="{{ asset('images/crypto_payments/authentication.png') }}"
                                    alt="Two Factor Authentication" width="60px">
                            </div>
                            <div class="content">
                                <h3>Enhanced Security with Two-Factor Authentication</h3>
                                <p>For added protection, users must verify their identity using QR codes and OTPs or PIN codes.</p>
                            </div>
                        </div>
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
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our
                                Experts</span></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="section-header common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 mt30" style="margin-top: 105px !important">
                        <h2 class="text-left small_h3 section-title underline font-wei">Empower Your Transactions with DeFi Payment Gateways</h2>
                        <p class="text-justify">Our DeFi crypto payment gateway development services empower users with full control over their funds through private keys. We focus on creating user-friendly, non-custodial solutions with institutional-grade security. This approach fosters a transparent financial ecosystem free from central authority control.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center mb50">
                        <img src="{{ asset('images/crypto_payments/crypto-payment-gateway-development.webp') }}" width="380"
                            alt="Defi Crypto Payment Gateway Development" title="Defi Payment Gateway">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-header common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center mb30 pull-left">
                        <img src="{{ asset('images/crypto_payments/multi.jpg') }}" width="380"
                            alt="Multi Cryptocurrency Payment Gateway Development"
                            title="Multi Cryptocurrency Payment Gateway">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 mt30 pull-right">
                        <h2 class="text-left small_h3 section-title underline font-wei">The Mechanics of Multi-Cryptocurrency Payment Gateways</h2>
                        <p class="text-justify">Multi-cryptocurrency payment gateway development involves processing transactions cost-effectively through automated smart contracts. This technology enables simultaneous transactions in various cryptocurrencies, enhancing speed and anonymity due to the underlying blockchain infrastructure.</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="section-header common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 mt30">
                        <h2 class="text-left small_h3 section-title underline font-wei">Why Your Business Needs a Multi-Cryptocurrency Payment Gateway</h2>
                        <p class="text-justify">A multi-cryptocurrency payment gateway is essential for global businesses. It supports various cryptocurrencies and processes transactions directly, without intermediaries. Benefits include reduced transaction fees, flexibility with crypto-to-fiat conversions, elimination of chargeback fraud, and enhanced security.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 mt30">
                        <h2 class="text-left small_h3 section-title underline font-wei">Crypto Payment Gateway Solutions Like Simplex for Your Business</h2>
                        <p class="text-justify">As more companies explore Web3, the need for effective crypto payment gateways grows. Simplex is a leader in this field, widely adopted by businesses worldwide. Our expertise includes developing crypto payment gateway solutions similar to Simplex, ensuring that enterprises receive a highly efficient, customized gateway to meet their needs.
                        </p>
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
        </style>


        <!-- https://www.blockchainappfactory.com/ -->
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="section-title text-center mb30">
                    <h2 class="text-center small_h3 section-title underline font-wei">Benefits of Cryptocurrency Payment Gateway Development</h2>
                </div>
                <div class="row text-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-reason equal-height">
                            <img src="{{ asset('images/crypto_payments/global-usage.webp') }}" alt="">
                            <h3>Global Reach</h3>
                            <p>Cryptocurrency payment gateways enable transactions from anywhere in the world, allowing customers to pay with Bitcoin or other digital currencies of their choice.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-reason equal-height">
                            <img src="{{ asset('images/crypto_payments/secure.webp') }}" alt="">
                            <h3>Enhanced Security</h3>
                            <p>Transactions are secure and anonymous, occurring directly between wallets with no third-party access to your data.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-reason equal-height">
                            <img src="{{ asset('images/crypto_payments/low-fees.webp') }}" alt="">
                            <h3>Low Transaction Fees</h3>
                            <p>Fees are minimal and can even be zero, regardless of the transaction's global distance.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-reason equal-height">
                            <img src="{{ asset('images/crypto_payments/fastest-uptime.webp') }}" alt="">
                            <h3>Rapid Deployment</h3>
                            <p>Get your crypto payment gateway operational quickly to avoid business interruptions.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-reason equal-height">
                            <img src="{{ asset('images/crypto_payments/first-mover-advantage.webp') }}" alt="">
                            <h3>Early Adoption Advantage</h3>
                            <p>Few merchants accept cryptocurrencies, giving you a competitive edge as an early adopter.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-reason  equal-height">
                            <img src="{{ asset('images/crypto_payments/multiple-pos.webp') }}" alt="">
                            <h3>Multiple POS Integration</h3>
                            <p>Integrate cryptocurrency payment gateways with POS systems, enabling in-store crypto transactions via devices like iPads.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-reason  equal-height">
                            <img src="{{ asset('images/crypto_payments/withdraw.png') }}" alt="">
                            <h3>24/7 Withdrawals</h3>
                            <p>Merchants benefit from faster withdrawals compared to traditional payment methods, improving liquidity.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-reason equal-height">
                            <img src="{{ asset('images/crypto_payments/new-customers.webp') }}" alt="">
                            <h3>Attract New Customers</h3>
                            <p>Appeal to a new demographic of customers who prefer cryptocurrency payments due to lower fees and faster transaction speeds.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-header common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-right">
                        <h2 class="text-left small_h3 section-title underline font-wei">Why Opt for Our Cryptocurrency Payment Gateway Solutions</h2>
                        <p class="text-justify">Select our Cryptocurrency Payment Gateway development services for unmatched value. We offer the industry's lowest fees for merchants and enterprises, facilitate seamless crypto-to-fiat and fiat-to-crypto withdrawals, and support a diverse array of coins, tokens, and stablecoins. Our solution is straightforward to implement with a single API integration.</p>
                        <div class="cta_mine">
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
                                    data-hover-text-color-override="#fff"><span>SCHEDULE A MEETING</span></a> --}}
                                <a href="{{ url('consultation') }}"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center pull-left">
                        <img src="{{ asset('images/crypto_payments/develop.png') }}" width="308"
                            alt="Cryptocurrency Payment Gateway Solution" title="Crypto Payment Gateway solutions">
                    </div>
                </div>
            </div>
        </div>
        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => "How can I accept cryptocurrency payments?",
                    'ans' => "To accept cryptocurrency payments, you need to integrate a cryptocurrency payment gateway with your business. This gateway will enable you to receive payments in various cryptocurrencies seamlessly and convert them into your preferred currency if needed."
                ],
                [
                    'ques' => "Can I integrate my own cryptocurrency into the payment gateway?",
                    'ans' => "Yes, you can integrate your own cryptocurrency into the payment gateway. Our team can customize the gateway to support your specific cryptocurrency, ensuring smooth transactions and compatibility with your system."
                ],
                [
                    'ques' => "Are there any regulatory requirements for starting a cryptocurrency payment gateway?",
                    'ans' => "Yes, launching a cryptocurrency payment gateway involves adhering to specific regulatory requirements, which vary by region. Compliance with local financial regulations, anti-money laundering (AML) laws, and know-your-customer (KYC) protocols is essential."
                ],
                [
                    'ques' => "Do you offer services beyond cryptocurrency payment gateway development?",
                    'ans' => "Yes, we offer a range of services beyond just payment gateway development. Our portfolio includes solutions for crypto wallet development, blockchain technology integration, and various custom software solutions tailored to your needs."
                ],
            ],
        ])
    </div>

    <script src="js/jquery.min.js" type="c27a7a8160b19d566dba0c58-text/javascript"></script>
    <!-- scripts included -->
    <script src="js/vendor.js" type="c27a7a8160b19d566dba0c58-text/javascript"></script>
    <script src="js/plugins.js" type="c27a7a8160b19d566dba0c58-text/javascript"></script>
    <script src="js/main.js" type="c27a7a8160b19d566dba0c58-text/javascript"></script>
    <script src="build/js/intlTelInput.js" type="c27a7a8160b19d566dba0c58-text/javascript"></script>
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

        .dropdown-menu {
            /* background-color: rgb(11 53 113); */
            backdrop-filter: blur(23px);
            box-shadow: 0 12px 28px 1px rgb(0 0 0 / 15%), 0 2px 4px 0 rgb(255 255 255 / 50%);
            border: 1px solid #ffffff12;
            transform: translate(0, 0);
            border-radius: 5px !important;
            transition: all 0.2s ease-out;
            padding: 5px 10px;
        }

        .dropdown-menu>li>a {
            color: #fff;
            border-radius: 5px;
            padding: 3px 7px;
        }

        .dropdown-menu>li>a:hover {
            color: #23417f !important
        }

        .dropdown-menu>li>a:hover .caret {
            border-left-color: #23417f !important;
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

    <script type="c27a7a8160b19d566dba0c58-text/javascript">
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
    <script type="c27a7a8160b19d566dba0c58-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
    <script type="c27a7a8160b19d566dba0c58-text/javascript"
        src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
        media="screen">
    <script type="c27a7a8160b19d566dba0c58-text/javascript"
        src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>





    <!-- Side Panel - End -->
    <script type="c27a7a8160b19d566dba0c58-text/javascript">
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
    <script type="c27a7a8160b19d566dba0c58-text/javascript">
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

    <script type="c27a7a8160b19d566dba0c58-text/javascript">
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
                <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    target="blank">
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



    <script type="c27a7a8160b19d566dba0c58-text/javascript">
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
    <script type="c27a7a8160b19d566dba0c58-text/javascript">
        $(".crypto-popup").click(function(e) {
    $('crypto-popup').addClass('fixedPosition full-width');
    $(".login-popup").addClass('show');
    e.stopPropagation();
});
    </script>
    <!-- Button Lightbox Script - End -->

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="c27a7a8160b19d566dba0c58-|49" defer></script>
</div>




@endsection