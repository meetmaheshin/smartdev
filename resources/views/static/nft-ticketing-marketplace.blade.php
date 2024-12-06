@extends('layouts.static')
    @section('title', 'NFT Ticketing Marketplace')
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
        background-color: rgb(0 0 0 / 0%)
    }

    .contentall a:hover {
        background: #00acdc
    }

    .banner {
        background: url('{{ asset('images/nft-ticketing-marketplace/banner_nft_ticket.jpg') }}');
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
        font-size: 20px;
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
    .sec_tit h2,
    .sec_tit h3,
    .sec_tit h4,
    .sec_tit h5,
    .sec_tit h6 {
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
            background: rgb(0 0 0 / 85%);
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

    .sec_tit h2 {
        display: inline
    }

    .list li {
        padding: 5px 0px;
        text-indent: -27px;
        padding-left: 10px;
    }

    .list li:before {
        content: " \f0a4";
        font-family: FontAwesome;
        color: #47b475;
        margin-right: 10px;
        text-indent: 50px;
    }

    .benefit {
        background: #d8efe261;
    }

    .feature-items {
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 3px 3px 15px -6px rgb(0 0 0 / 31%);
        background: #fff;
        min-height: 290px;
        text-align: center;
        margin-top: 20px;
    }

    .feature-items img {
        width: 75px;
        padding: 10px;
        text-align: center;
        border-radius: 10px 20px 10px 20px;
        border: 2px solid #47b4759c;
        margin: 0 auto !important;
    }

    .feature-items h4 {
        font-size: 18px;
        font-weight: 700;
    }

    .feature-items p {
        padding-top: 20px;
        text-align: center;
    }

    .feature_icon {
        padding: 15px;
        transition: all 0.3s ease 0s;
    }

    .feature-items:hover {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }

    .feature-items:hover .feature_icon {
        transform: rotateY(360deg);
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
        left: 4px;
        top: 4px;
        content: '\f10c';
        font-family: FontAwesome;
        font-size: 16px;
        line-height: 1;
        color: #47b475;
        border-radius: 5px;
        padding: 4px;
    }

    .list1 {
        margin-top: 0rem;
        margin-bottom: 0rem !important;
        font-size: 14px;
        line-height: 35px;
        text-indent: -17px;
        list-style: none;
    }

    .list1 li:before {
        content: " \f0da ";
        font-family: FontAwesome;
        color: #47b475;
        margin-right: 10px;
        font-size: 18px;
    }

    @media (min-width: 768px) {
        .box-shade {
            padding: 25px;
            box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 2px 6px 2px;
            background: #ffffff;
        }
    }

    .new_trend {
        background: url(images/nft-ticketing-marketplace/bg-01.webp);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>


<div class="header-shadow" id="ico">
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
                                        <h1>Developing a Next-Generation NFT Ticketing Platform</h1>
                                    </div>
                                    <p>Transforming Event Ticketing with NFTs Leverage the power of NFTs to revolutionize how event tickets are managed, allowing organizers and artists to benefit from secondary sales. This innovation enhances the fan experience before, during, and after the event.</p>
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
                                            href=""
                                            data-color-override="false" data-hover-color-override="false"
                                            data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> --}}
                                        <a href="{{ url('consultation') }}"
                                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>SCHEDULE A MEETING CONNECT WITH OUR EXPERTS</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
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
                            <h2>Unveiling the NFT Ticketing Ecosystem</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">NFT ticketing platforms issue tickets as unique non-fungible tokens, ensuring each ticket is one-of-a-kind and impervious to duplication. These systems facilitate secondary sales, generating royalties for event organizers and artists. Additionally, organizers can impose resale price limits to protect fans from excessive costs. As NFTs continue to gain traction, these platforms are becoming increasingly prevalent in the Web3 landscape. Prominent NFT ticketing platforms include GUTS, YellowHearts, Seatlab, NFT TiX, and WICKET.
                    </p>
                </div>
            </div>
        </section>
        <section class="intro_cnt common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title text-left underline">
                            <div class="sec_tit">
                                <h2>Building Advanced NFT Ticketing Marketplaces</h2>
                            </div>
                        </div>
                        <p class="mt10 mb10 text-justify">The rise of NFTs has driven a surge in the development of NFT ticketing marketplaces. Our projects in this field have already seen notable success. Unlike traditional digital tickets, NFTs offer distinctiveness and added value. Through smart contracts, ticket transfers automatically update the owner's information, aiding event managers in tracking attendees. NFT tickets can also provide additional benefits and features throughout the event. A strategic approach to NFT ticketing marketplace development can effectively achieve these goals.</p>
                    </div>
                    <div class="col-lg-6"> <img class="rounded-border"
                            src="{{ asset('images/nft-ticketing-marketplace/nft_ticket_01.png') }}"
                            alt="NFT Ticketing Marketplace Development" title="NFT Ticketing Marketplace Development">
                    </div>
                </div>
            </div>
        </section>
        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center underline" style="width: 100%">
                        <div class="sec_tit">
                            <h3>Creating Your NFT Ticketing Platform: A Detailed Guide</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img class="lazy mt10" src="{{ asset('images/nft-ticketing-marketplace/nft_ticket_02.webp') }}"
                            alt="NFT Ticketing Marketplace" title="NFT Ticketing Marketplace">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="list text-justify">
                            <li><strong>Strategic Planning</strong> Start by thoroughly planning your NFT ticketing platform. Identify your target audience, choose appropriate technology, assess the market landscape, and analyze competitors to develop a detailed whitepaper.</li>
                            <li><strong>Prototype Development</strong> Create a prototype of your NFT ticketing marketplace and test it with a select group of users. Gather feedback to refine the design and functionality.</li>
                            <li><strong>Front-End Design</strong> Develop the user interface of your NFT ticketing system based on feedback. Ensure the front end offers an engaging and immersive user experience.</li>
                            <li><strong>Back-End Development</strong> Build the back-end infrastructure for your NFT ticketing platform, including the integration of smart contracts and native tokens on the blockchain.</li>
                            <li><strong>Comprehensive Testing</strong> Conduct thorough testing using both manual and automated methods to identify and resolve any issues, ensuring a seamless platform.</li>
                            <li><strong>Pre-Launch Promotion</strong> Promote your NFT ticketing marketplace through various channels before the official launch. Build an initial user base of event managers, artists, and fans to maximize impact.</li>
                            <li><strong>Launch and Iterate</strong> Launch the NFT ticketing platform and gather user feedback. Continuously update the platform to enhance user experience and address emerging needs.</li>
                        </ul>
                    </div>
                </div>
        </section>
        <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center underline">
                        <div class="sec_tit">
                            <h3>Innovative Features of NFT Ticketing Platforms</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-items">
                            <div class="feature_icon"> <img class="lazy"
                                    src="{{ asset('images/nft-ticketing-marketplace/icons/01.webp') }}"> </div>
                            <h4>Homepage</h4>
                            <p>The homepage features a schedule of upcoming events and an overview of the platform’s key offerings and focus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-items">
                            <div class="feature_icon"> <img class="lazy"
                                    src="{{ asset('images/nft-ticketing-marketplace/icons/02.webp') }}"> </div>
                            <h4>Event Page</h4>
                            <p>Detailed event pages provide information such as genre, type, schedule, ticket prices, and location, offering users a comprehensive view.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-items">
                            <div class="feature_icon"> <img class="lazy"
                                    src="{{ asset('images/nft-ticketing-marketplace/icons/03.webp') }}"> </div>
                            <h4>Listing Portal</h4>
                            <p>This section allows artists and event organizers to list their events, mint NFT tickets, and make them available for purchase.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-items">
                            <div class="feature_icon"> <img class="lazy"
                                    src="{{ asset('images/nft-ticketing-marketplace/icons/04.webp') }}"> </div>
                            <h4>Checkout Portal</h4>
                            <p>Fans are directed here to complete their ticket purchases. The portal supports various payment methods for a smooth buying experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-items">
                            <div class="feature_icon"> <img class="lazy"
                                    src="{{ asset('images/nft-ticketing-marketplace/icons/05.webp') }}"> </div>
                            <h4>Crypto Wallet</h4>
                            <p>Users connect their cryptocurrency wallets to store both cryptocurrencies and NFT tickets securely.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-items">
                            <div class="feature_icon"> <img class="lazy"
                                    src="{{ asset('images/nft-ticketing-marketplace/icons/06.webp') }}"> </div>
                            <h4>Secondary Marketplace</h4>
                            <p>This feature enables fans to resell tickets if they are unable to attend. It also allows original ticket creators to earn royalties from these secondary transactions.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-items">
                            <div class="feature_icon"> <img class="lazy"
                                    src="{{ asset('images/nft-ticketing-marketplace/icons/07.webp') }}"> </div>
                            <h4>Notifications</h4>
                            <p>Users can receive notifications for events from artists, genres, or languages they
                                prefer. This helps them to book their event tickets promptly if they are interested.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box-shade text-center">
                            <div class="section-title">
                                <h4 class="sec_tit underline mb20 text-center">Applications of NFT Ticketing Systems</h4>
                            </div>
                            <p class="mt-20 text-center">NFT ticketing systems are primarily used for exclusive physical and virtual events, such as concerts, conferences, sports events, talk shows, and theater performances. They can also be employed for season parking passes, enhancing security and management. Traditional tickets are often susceptible to duplication and fraud, with organizers missing out on resale profits. NFT ticketing platforms bridge this gap by facilitating peer-to-peer ticket trading and offering a secure solution for event management. Many artists and organizers have embraced this technology, finding it effective and promising.</p>
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
                                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>TALK WITH OUR EXPERTS</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="intro_cnt common_spacing gray_bg new_trend">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center underline" style="width: 100%">
                        <div class="sec_tit">
                            <h4>Emerging Trends in NFT Ticketing</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12">
                        <ul class="list1 mt10 text-justify">
                            <li><strong>Parking Management</strong> NFT ticketing is being implemented for parking access in various cities, particularly in high-security areas. This system improves management and security for regular users.</li>
                            <li><strong>Entertainment and Performances</strong> Renowned dance crews like Jabbawokeez use NFT ticketing to offer enhanced experiences and exclusive benefits for fans.</li>
                            <li><strong>Virtual Events</strong> NFT tickets are increasingly utilized for prominent virtual events, including webinars, conferences, and performances in metaverses. These tickets help maintain event exclusivity and value.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



        <section class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="section-title text-center underline">
                            <div class="sec_tit">
                                <h4>Why Launch Your Own NFT Ticketing System?</h4>
                            </div>
                        </div>
                        <p class="mt10 mb10 text-center">NFT ticketing is a rapidly growing model in the Web3 space, with significant potential for future expansion. Establishing an NFT ticketing marketplace offers a lucrative opportunity for new entrepreneurs. Artists are exploring NFTs beyond art and music to address ticketing challenges. NFT ticketing platforms provide artists with the ability to sell tickets with added value and enhance the event experience. Creating your own NFT ticketing system is a strategic move to engage with users and leverage this innovative trend.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="intro_cnt common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center underline" style="width: 100%">
                        <div class="sec_tit">
                            <h4>Benefits of NFT Ticketing Marketplaces</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="primary-list">
                            <li><strong>Enhanced Security and Transparency</strong> NFT ticketing ensures transparent ownership tracking, providing security and clarity for event management, especially for large events.</li>
                            <li><strong>Additional Perks</strong> NFT tickets can offer extra benefits like premium seating, complimentary items, and exclusive gifts, enriching the event experience for attendees.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="primary-list">
                            <li><strong>Royalties and Pricing Control</strong> NFT ticketing allows organizers and artists to earn royalties from secondary sales and set resale price caps to prevent excessive markups.</li>
                            <li><strong>Immunity to Counterfeiting</strong> NFTs, built on blockchain technology, are immune to duplication and counterfeiting, with each ticket’s authenticity verifiable on the blockchain.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="intro_cnt common_spacing gray_bg">
            <div class="container">
                <div class="col-lg-12">
                    <div class="section-title text-center underline">
                        <div class="sec_tit">
                            <h5>Why Partner with Us?</h5>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">With our extensive expertise in Web3 technologies, we are well-positioned to handle innovative projects such as NFT ticketing marketplace development. Our successful track record demonstrates our capability to deliver advanced solutions. Our proficiency in blockchain and smart contract development ensures that your NFT ticketing platform will meet the highest standards. Choose us to benefit from our commitment to excellence and cutting-edge approach. Contact our specialists today to start your venture into NFT ticketing!</p>
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

                        {{-- <a href="#newsletter-form-sec"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our
                                Experts</span></a> --}}
                    </div>
                </div>
            </div>
        </section>
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

<!-- Side Panel - End -->
<script type="708b4d199ebad5dd030a10f5-text/javascript">
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