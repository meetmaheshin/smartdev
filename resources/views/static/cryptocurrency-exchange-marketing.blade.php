@extends('layouts.static')
    @section('title', 'Cryptocurrency Exchange Marketing')
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

    .banner {
        height: 650px;
        /*background-image: url(images/leverage/marketing_bg.webp);*/
        /*background-image: linear-gradient(to right, #122455, #00aeeb);*/
        background-size: cover;
        padding-top: 138px;
        padding-bottom: 50px;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(to right, #122455, #00aeeb);
        opacity: 0.95;
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
    }

    .banner_content .contentall {
        margin-top: 40px;
    }

    .contentall h1,
    .ban_tirt {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 40px;
    }

    .contentall p {
        margin-bottom: 30px;
        line-height: 1.8;
    }

    .contentall a {
        color: #fff;
        cursor: pointer;
        margin-bottom: 15px;
    }

    .feal_cnt h5 {
        font-weight: bold;
        text-transform: capitalize;
        letter-spacing: 0px;
        margin-top: 10px;
        margin-bottom: 0px;
    }

    .feat_lev {
        margin-bottom: 40px;
        max-width: 350px;
        margin: 0 auto 40px;
    }

    .sec_tit,
    .sec_tit h2 {
        font-size: 25px !important;
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
        color: #000000;
    }

    @media (max-width: 1199px) {

        .contentall h1,
        .ban_tirt {
            font-size: 30px;
        }
    }

    @media (max-width: 768px) {
        .banner_content .contentall {
            margin-top: 30px;
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)));
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 50px;
        }

        .banner-overlay {
            background: #023c51;
        }

        .ct_box {
            margin-top: 30px;
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

        .feal_cnt h5 {
            margin-top: 15px;
            margin-bottom: 5px;
        }
    }

    .ct_box {
        background: #f5f5f5;
        padding: 20px;
        border: 3px solid #eee;
    }

    .ct_box p {
        margin-bottom: 20px;
        font-size: 19px;
        color: #999 !important;
    }

    .ct_box p strong {
        color: #000000 !important;
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

    .flip-icon-outer {
        padding: 5px;
        margin-bottom: 15px;
        line-height: 75px;
    }

    .flip-icon {
        height: 50px;
    }

    p.sub_tit {
        max-width: 900px;
        margin: 0 auto 40px;
    }

    .pr_arr {
        position: relative;
        display: block;
        clear: both;
    }

    .pr_arr:after {
        content: '';
        width: 15%;
        height: 10px;
        border: 2px solid #00b7c2;
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
        display: block;
        border-right: none;
        top: 53px;
    }

    .pr_arr:before {
        content: '';
        border: solid #00b7c2;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 6px;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        position: absolute;
        right: 42%;
        top: 50px;
    }

    .bot_bx .col-md-6 {
        padding: 0px;
    }

    .p_box {
        padding: 20px;
        margin-top: 30px;
    }

    .flip-tit {
        color: #000000;
        font-weight: 700;
    }

    .bg_colour {
        background: #ffffff;
    }

    .font_wei {
        padding: 10px;
        color: #000000;
        text-align: center;
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
</style>


<div class="header-shadow" id="ico">
    <div class="main">
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contentall">
                                <div class="ban_tirt">
                                    <h1>Accelerate Your Growth with Elite Cryptocurrency Exchange Marketing Solutions</h1>
                                </div>
                                <p>Unlock the full potential of your cryptocurrency exchange by partnering with top-tier marketing experts dedicated to boosting user acquisition and maximizing trading activity.</p>
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
                                        data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                                    <a href="{{ url('consultation') }}"
                                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR SPECIALISTS</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('images/leverage/banner-img.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_cnt common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="sec_tit" style="margin-top: 55px">
                            <h2>Partner with the Leading Cryptocurrency Exchange Marketing Experts</h2>
                        </div>
                        <p class="mt-30">Cryptocurrency exchanges revolutionize digital currency transactions, offering cutting-edge features like leverage trading, fiat-to-crypto conversion, and peer-to-peer lending. As crypto awareness and adoption surge, standout platforms must leverage top-tier marketing services. </p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center"> <img src="{{ asset('images/leverage/marketing.webp') }}" width="450px">
                    </div>
                </div>
                <div class="row mt30">
                    <div class="col-md-12 text-center">
                        <div class="ct_box">
                            <p> <strong class="sec_tit">Our elite marketing solutions are designed to elevate trading platforms by boosting user acquisition, enhancing trading volumes, and maintaining a competitive edge.</strong> </p> <a
                                href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn">Ignite Your Marketing Strategy Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .eto-exchange-flip .flip-box .flip-icon-outer img{
                margin-top: 15px;
            }
        </style>

        @include('static.image-floating-shadow-card', [
            'title' => 'Strategic Crypto Exchange Marketing Solutions for Immediate Impact', 
            'desc' => "In today’s digital age, a robust marketing strategy is essential for making a significant impression. Our comprehensive marketing services are designed to amplify your exchange’s visibility and accelerate your outreach to your target audience.",
            'cards' => [
                [
                    'title' => 'Market Research',
                    'desc' => "Our expert team conducts thorough market analysis to provide insights into audience preferences and market demands.",
                    'image' => 'leverage/research.png'
                ],
                [
                    'title' => 'SEO Optimization',
                    'desc' => "We audit and enhance your website and digital platforms with advanced SEO strategies to dramatically boost your online presence.",
                    'image' => "leverage/seo.png"
                ],
                [
                    'title' => 'Content Strategy',
                    'desc' => "Our detailed content plans integrate diverse formats, including blogs and articles, to enhance promotion and elevate brand awareness.",
                    'image' => 'leverage/content-marketing.png'
                ],
                [
                    'title' => 'Video Marketing',
                    'desc' => "We craft and disseminate engaging, educational videos to showcase the unique features of your cryptocurrency exchange.",
                    'image' => 'leverage/video-marketing.png'
                ],
                [
                    'title' => 'Community Marketing',
                    'desc' => "We build and nurture a dedicated community around your brand, focusing on long-term engagement and growth.",
                    'image' => 'leverage/community.png'
                ],
                [
                    'title' => 'PR and Media',
                    'desc' => "We establish strong relationships with B2B and B2C channels through strategic press releases and extensive media coverage.",
                    'image' => 'leverage/pr-media.png'
                ],[
                    'title' => 'Influencer Marketing',
                    'desc' => "We collaborate with leading influencers to drive authentic traffic and elevate your trading platform's visibility.",
                    'image' => 'leverage/influencer.png'
                ],
                [
                    'title' => 'Social Media Marketing',
                    'desc' => "We engage with your audience on major social networks like Facebook, Twitter, and Reddit to cultivate a vibrant following.",
                    'image' => "leverage/social-media.png"
                ],
                [
                    'title' => 'Telegram Marketing',
                    'desc' => "We utilize Telegram to swiftly connect with a broad user base, delivering crucial updates directly to their inboxes.",
                    'image' => 'leverage/telegram.png'
                ],
                [
                    'title' => 'Email and Newsletters',
                    'desc' => "Our email marketing services keep your users informed about new features and updates through targeted newsletters.",
                    'image' => 'leverage/email-newsletter.png'
                ],
                [
                    'title' => 'Affiliate Network',
                    'desc' => "We develop a dynamic affiliate network to attract potential customers and drive growth for your platform.",
                    'image' => 'leverage/affiliate-networking.png'
                ],
                [
                    'title' => 'Advertising Assistance',
                    'desc' => "We leverage targeted advertising solutions, such as Google AdWords and pay-per-click, to reach specific customer segments and optimize your marketing efforts.",
                    'image' => 'leverage/advertising-assistance.png'
                ],
            ],
        ])


        @include('static.web3-clients', array(
            'title' => "Our Esteemed <span style='color:#47b475;'>Web3 Clients</span> <br> Catalysts of Success",
            'desc' => "As a leading authority in Web3 marketing, we are dedicated to delivering unparalleled services that propel projects to their target audiences through a multifaceted approach. Our expertise has empowered top Web3 enterprises, consistently achieving remarkable outcomes and driving their success."
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
        <div class="levtrade_feat common_spacing">
            <div class="container">
                <div class="section-header section-title text-center">
                    <div class="sec_tit">
                        <h2> Our Strategic Approach to Crypto Exchange Marketing</h2>
                    </div>
                    <hr>
                    <p class="sub_tit">In the dynamic world of cryptocurrency, we deliver marketing services that are both comprehensive and tailored to your unique needs. Here’s an overview of our streamlined process:</p>
                </div>
                <div class="row mt-40 pr_arr">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="feat_lev">
                            <div class="feat_ic"> <img src="{{ asset('images/leverage/Conceptualize.png') }}" height="70"> </div>
                            <div class="feal_cnt">
                                <h5>Conceptualize</h5>
                                <p>We meticulously collect your specifications and concerns to craft a strategic, all-encompassing marketing plan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="feat_lev">
                            <div class="feat_ic"> <img src="{{ asset('images/leverage/Implement.png') }}" height="70"> </div>
                            <div class="feal_cnt">
                                <h5>Implement</h5>
                                <p>We execute the plan with precision, ensuring regular content distribution and a commanding presence across social media platforms.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-40 pr_arr">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="feat_lev">
                            <div class="feat_ic"> <img src="{{ asset('images/leverage/analysis.png') }}" height="70"> </div>
                            <div class="feal_cnt">
                                <h5>Analyze</h5>
                                <p>We systematically collect and evaluate marketing data to assess various metrics and track the effectiveness of our strategy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="feat_lev">
                            <div class="feat_ic"> <img src="{{ asset('images/leverage/adapt.png') }}" height="70"> </div>
                            <div class="feal_cnt">
                                <h5>Adapt</h5>
                                <p>We integrate your feedback and address any issues promptly, continually refining our approach to stay aligned with your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro_cnt bot_bx common_spacing gray_bg">
            <div class="container">
                <!-- First Row: Text Left, Image Right -->
                <div class="row bg_colour align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="p_box">
                            <div class="section-title">
                                <h2 class="sec_tit">Unleash the Power of Our Unmatched Crypto Exchange Marketing Solutions</h2>
                            </div>
                            <p class="mt-30">
                                We provide dynamic and tailor-made cryptocurrency exchange marketing packages designed for maximum impact. Our comprehensive offerings include strategic content planning, engaging video marketing, targeted Telegram outreach, and more—all crafted to deliver exceptional results.
                            </p>
                            <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn">
                                REQUEST A QUOTE NOW!
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="{{ asset('images/leverage/exchange.jpg') }}" alt="Crypto Exchange Marketing">
                    </div>
                </div>
                <!-- Second Row: Image Left, Text Right -->
                <div class="row bg_colour align-items-center">
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="{{ asset('images/leverage/exchange_growth.webp') }}" alt="Exchange Growth">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="p_box">
                            <div class="section-title">
                                <h4 class="sec_tit">Partner with Expert Marketers to Accelerate Your Growth</h4>
                            </div>
                            <p class="mt-30">
                                As a leading authority in cryptocurrency exchange marketing, we bring unparalleled expertise in blockchain and digital currency. Our skilled team delivers compelling, bespoke promotions that drive engagement and elevate your market presence.
                            </p>
                            <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn">
                                GET IN TOUCH TODAY
                            </a>
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
                'ques' => 'What benefits does marketing provide for your exchange?',
                'ans' => "Effective marketing enhances visibility, attracts new users, and boosts trading volumes, leading to increased market share and revenue."
            ],
            [
                'ques' => 'Why is marketing crucial for an exchange?',
                'ans' => "Marketing is essential for building brand awareness, driving user engagement, and staying competitive in a rapidly evolving market."
            ],
            [
                'ques' => 'What is the cost of digital marketing for an exchange?',
                'ans' => "Digital marketing costs vary based on the scope of services and campaign complexity. Generally, investment aligns with the goals and scale of the marketing strategy."
            ],
            [
                'ques' => 'Which company specializes in crypto exchange marketing services?',
                'ans' => "Many companies offer specialized marketing services for crypto exchanges. It's important to choose one with a proven track record and expertise in the blockchain industry."
            ],
            [
                'ques' => 'How can digital marketing boost your profit margins?',
                'ans' => "Digital marketing can increase profit margins by attracting more users, enhancing trading volume, and optimizing customer acquisition strategies, ultimately driving higher returns."
            ]
        ],
    ])

    
</div>
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