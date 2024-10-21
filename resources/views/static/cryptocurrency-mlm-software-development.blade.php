@extends('layouts.static')
    @section('title', 'Cryptocurrency MLM Software Development')
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




<div class="header-shadow" id="ico">

    <div class="main">
        <div class="banner">
            <div id="large-header" class="large-header"> <img src="images/service/banner-bg.webp"> </div>
            <div class="banner_content">
                <div class="container">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                        <div class="contentall">
                            <h1>Secure and Dynamic Crypto MLM Software for Modern Enterprises</h1>
                            <p>Revolutionize crypto adoption with our state-of-the-art MLM software, designed to amplify your reach through dynamic marketing strategies. Our team crafts robust multi-level marketing solutions featuring an engaging user experience and top-tier security measures.</p>
                            <div class="tex"> <a href="#"
                                    class="nectar-button medium regular accent-color regular-button nec-btn med_btn"
                                    style="border-radius: 30px;">CONNECT WITH OUR SPECIALISTS</a>
                                <a href="#d" class="nec-btn" id="cyz" style="border-radius: 30px !important;">REQUEST A DEMO</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12  hidden-sm text-center "> <img class="magic"
                            src="{{ asset('images/service/banner-img1.png') }}" alt=" " title=" "> </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 section-header text-center common_spacing">
            <div class="container">
                <h2 class="small_h1 section-title underline title-th">Leading Cryptocurrency MLM Software Development</h2>
                <p class="section-subtitle mb0">Our firm excels in crafting cutting-edge Cryptocurrency MLM software, backed by a proven track record of excellence in Multi-Level Marketing. Our state-of-the-art solutions enable you to promote your cryptocurrency effectively through an extensive network of affiliates, with transactions seamlessly handled in Cryptocurrency or Bitcoin. Sponsors can generate multiple referrals, creating a robust, scalable marketing system that extends from the top down.</p>
            </div>
        </div>
        <div class="gray_bg common_spacing" style="clear: both;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title text-left">
                            <h2 class="small_h3 section-title mb20 title-th">Next-Gen White Label MLM Solutions for Cryptocurrency Success</h2>
                            <p>As digital platforms increasingly embrace multi-level marketing, we deliver top-tier white-label MLM software powered by blockchain technology, designed for businesses looking to deploy Ethereum and TRON-based MLM systems. Our solutions guarantee complete decentralization, unparalleled transparency, and robust security. With an immutable smart contract at its core, our software ensures precise, tamper-proof calculations and automates transactions with remarkable speed and efficiency—no human intervention is needed.
                            </p>
                            <div class="text-left mt20">
                                <a href="#"
                                    class="nectar-button medium regular accent-color regular-button nec-btn med_btn"
                                    style="border-radius: 30px;">CONNECT WITH OUR EXPERTS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center "> <img src="{{ asset('images/service/img-1.png') }}"
                            alt="Cryptocurrency MLM Software Development"
                            title="White label Cryptocurrency MLM Software Development Solutions" style="width: 430px"> </div>
                </div>
            </div>
        </div>
        <div class="common_spacing gray_bg new-features"
            style="background: linear-gradient( 311deg , #004775 0%, #020e28);">
            <div class="container">
                <div class=" ">
                    <h2 class="sec_tit underline text-center text-white">Breakthrough Features Driving Cryptocurrency MLM Excellence</h2>
                </div>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-user"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Dynamic User Management</strong>Empower admins to oversee and optimize user interactions, ensuring seamless MLM operations and immediate adjustments for peak performance.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-wallet"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Advanced Wallet and Fund Control</strong>Enable users to effortlessly handle their wallets and funds within the platform, providing real-time insights into campaign progress and reward accrual.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-database"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Comprehensive Token Oversight</strong>Allow for meticulous management and analysis of crypto tokens, facilitating strategic adjustments to enhance overall MLM effectiveness.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-bookmark"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Tiered Reward Structures</strong>Incentivize progress with varied crypto rewards at each MLM level, driving continuous user engagement and motivation to climb higher.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-line-chart"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong
                                            style="display:block; font-size: 20px; padding-bottom: 5px;">Integrated Staking Options</strong>Incorporate staking mechanisms with tiered yields, motivating users to advance through the MLM ranks and maximize their returns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-info-circle"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Exclusive Loyalty Programs</strong>Implement loyalty initiatives within the MLM software, offering special rewards to dedicated users and fostering a culture of active participation.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-money"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Tiered Commission Monitoring</strong>Enable top-level users to effortlessly track their earnings across multiple tiers using an advanced dashboard that clarifies their commission details.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-star"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Automated Reward Distribution</strong>Implement automated systems to issue rewards when users advance to higher levels, streamlining the process for administrators and reducing manual oversight.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="common_spacing">
            <div class="container">
                <div class="section-title text-center m-b-30">
                    <h2 class="common_h3 sec-tit title-th">Our Cutting-Edge Blockchain MLM Ecosystem</h2>
                    <hr>
                    <p class="sub_tit mb20">Our blockchain MLM ecosystem is designed with three key pillars to elevate your experience</p>
                </div>
                <div class="row flip-box-row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-flip-box flip-box">
                            <div class="flip-icon-outer"> <img src="{{ asset('images/service/digital-wallet.webp') }}" width="80"
                                    alt="Multi-currency wallet" title="It helps in seamless transfer of cryptos"> </div>
                            <h5 class="flip-tit">Advanced Multi-Currency Wallet</h5>
                            <p class="flip-txt">Experience seamless crypto transactions and referral management with our state-of-the-art wallet. Enjoy institutional-grade security, full control over private keys, and instant transaction processing. Integrated chat functionality allows effortless crypto transfers and referral link sharing, ensuring smooth operations.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-flip-box flip-box">
                            <div class="flip-icon-outer"> <img src="{{ asset('images/service/api.webp') }}" width="80"
                                    alt="API’s provided to external exchanges" title="external exchanges"> </div>
                            <h5 class="flip-tit"> Seamless Exchange APIs</h5>
                            <p class="flip-txt">Connect effortlessly with leading exchanges like Binance and Huobi through our secure APIs. Buy, sell, and trade cryptocurrencies directly on the platform, while benefiting from real-time transaction execution and enhanced security from our global liquidity network.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-flip-box flip-box">
                            <div class="flip-icon-outer"> <img src="{{ asset('images/service/investment.webp') }}" width="80"
                                    alt="A strategic investment module" title="quick growth of their funds"> </div>
                            <h5 class="flip-tit">Strategic Investment Module</h5>
                            <p class="flip-txt">Maximize your earning potential with our sophisticated investment module. Engage in the MLM process with ease, leveraging smart contracts for transparent and automated transactions. This intuitive system is designed for rapid fund growth and complete operational transparency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 section-header text-center mb40 common_spacing gray_bg triangle-section">
            <div class="container">
                <h2 class="small_h3 section-title underline title-th">Transform Your MLM Strategy with Cutting-Edge Software Solutions</h2>
                <div class="row">
                    <div class="container container-center">
                        <div class="col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="typ_box">
                                <div class="typ_ic"> <img src="{{ asset('images/icons/adjust.webp') }}" alt="Level Plan MLM Software"
                                        title="more transparency"> </div>
                                <div class="typ_ic_cnt">
                                    <h5 class="tit">Level Plan MLM Software</h5>
                                    <p>Streamline your distribution cycle with our Level Plan. This approach enhances transparency for users, drives better business outcomes, and ensures robust security and a smooth user experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="typ_box">
                                <div class="typ_ic"> <img src="{{ asset('images/icons/algorithm.webp') }}"
                                        alt="Binary Plan MLM Software"
                                        title="binary plan helps customers with flexibility"> </div>
                                <div class="typ_ic_cnt">
                                    <h5 class="tit">Binary Plan MLM Software</h5>
                                    <p>Customize and flexibly manage your MLM strategy with our Binary Plan. Tailor the plan to fit your needs, improving results and software efficiency with user-friendly features.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="typ_box">
                                <div class="typ_ic"> <img src="{{ asset('images/icons/matrix.webp') }}" alt="Matrix Plan MLM software"
                                        title="The users can also manage and set the number of distributors"> </div>
                                <div class="typ_ic_cnt">
                                    <h5 class="tit">Matrix Plan MLM Software</h5>
                                    <p>Enhance performance with our Matrix Plan, which employs various formulas to optimize each level. Set distributor limits and improve overall efficiency with a plan designed to refine every level of your MLM structure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="typ_box">
                                <div class="typ_ic"> <img src="{{ asset('images/icons/team.webp') }}" alt="Board Plan MLM software"
                                        title="Revolving Matrix Plan"> </div>
                                <div class="typ_ic_cnt">
                                    <h5 class="tit">Board Plan MLM Software</h5>
                                    <p>Optimize management with the Board Plan, also known as the Revolving Matrix Plan. This advanced solution supports the efficient handling of multiple operations simultaneously, making it ideal for complex management tasks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="typ_box">
                                <div class="typ_ic"> <img src="{{ asset('images/icons/crowdfunding.webp') }}"
                                        alt="Gift or Helping Crowdfunding Plan" title="MLM software"> </div>
                                <div class="typ_ic_cnt">
                                    <h5 class="tit">Gift or Helping Crowdfunding Plan</h5>
                                    <p>Boost your business crowdfunding efforts with our Gift Plan. This solution offers multiple strategies for raising funds, helping you achieve maximum benefits with integrated features designed for effective crowdfunding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="typ_box">
                                <div class="typ_ic"> <img src="{{ asset('images/icons/trace-user.webp') }}"
                                        alt="Generation Plan MLM Software" title="software gets more systematic"> </div>
                                <div class="typ_ic_cnt">
                                    <h5 class="tit">Generation Plan MLM Software</h5>
                                    <p>Expand your network and enhance transparency with the Generation Plan. This plan organizes your software system, improves user options, and maximizes profit-sharing capabilities for better results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="typ_box">
                                <div class="typ_ic"> <img src="{{ asset('images/icons/sell.webp') }}"
                                        alt="Repurchase Plan MLM Software"
                                        title="It helps with managing the business in a better way"> </div>
                                <div class="typ_ic_cnt">
                                    <h5 class="tit">Repurchase Plan MLM Software</h5>
                                    <p>Enhance your business operations with our Repurchase Plan MLM software. This plan streamlines the buying, selling, and promotion of products, fostering stronger connections between distributors. By integrating this plan, you simplify management and boost overall efficiency.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="typ_box">
                                <div class="typ_ic"> <img src="{{ asset('images/icons/decentralized.webp') }}"
                                        alt="Unilevel Plan MLM Software"
                                        title="This plan makes sure to bring in maximum exposure"> </div>
                                <div class="typ_ic_cnt">
                                    <h5 class="tit">Unilevel Plan MLM Software</h5>
                                    <p>Our Unilevel Plan MLM software maximizes brand visibility and ensures broad engagement across multiple levels. This plan elevates your software’s performance and functionality, driving higher participation and brand exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 equalize">
                            <div class="typ_box">
                                <div class="typ_ic"> <img src="{{ asset('images/icons/money-2.webp') }}"
                                        alt="Australian Plan MLM Software" title="Australian Plan"> </div>
                                <div class="typ_ic_cnt">
                                    <h5 class="tit">Australian Plan MLM Software</h5>
                                    <p>The Australian Plan MLM software is designed to supercharge your sales and streamline commission management. By adopting this plan, you tap into advanced productivity features inspired by the successful binary model prevalent in Australia, optimizing your sales operations and enhancing control.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                </div>
            </div>
        </div>
        @include('static.alternate-flowchart-section', [
            'title' => ' How Our Smart Contract-Driven MLM Software Operates', 
            'desc' => 'Our seasoned professionals excel in crafting Tron token solutions tailored to your business needs.',
            'cards' => [
                  [
                     'title' => 'Identify the Recipient',
                     'desc' => "The system first determines the designated recipient of the funds. This crucial step ensures accuracy and clarity in the transaction process."
                  ],
                  [
                     'title' => 'Create a Transaction Block',
                     'desc' => "The transaction is encapsulated as a secure block of data, ready for network validation and recording."
                  ],
                  [
                     'title' => 'Broadcast the Block',
                     'desc' => 'This block is then disseminated across the entire network, ensuring every participant is aware of the pending transaction.'
                  ],
                  [
                     'title' => 'Network Validation',
                     'desc' => 'The network members swiftly validate the transaction, confirming its legitimacy and adherence to established rules.'
                  ],
                  [
                     'title' => 'Integrate into the Blockchain',
                     'desc' => 'Once validated, the block is immutably added to the existing blockchain, preserving transparency and integrity.'
                  ],
                  [
                     'title' => 'Complete the Transaction',
                     'desc' => 'The transaction is finalized, marking the successful execution of the transfer securely and efficiently.'
                  ],
            ],
        ])

        <div id="ret-inv" class="common_spacing"
            style="background-image: linear-gradient( 311deg , #004775 0%, #020e28);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2 class="text-white">Unlock the Full Potential of Crypto MLM with State-of-the-Art Solutions!
                        </h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                                <a class="nectar-button medium regular accent-color regular-button nec-btn"
                                    target="_blank"
                                    href="#"
                                    data-color-override="false" data-hover-color-override="false"
                                    data-hover-text-color-override="#fff"><span>Book a Personalized Demo</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .essential-features {
                padding: 70px 0px;
            }

            /*.essential-features .container-fluid{width: 90%;}*/
            .side-tab {
                float: left;
                background: #f2f2f2;
                width: 100%;
                padding: 50px;
                border-radius: 10px;
                border: 1px solid #eee;
                /*height: 400px;*/
                color: #fff;
            }

            .container-center {
                display: flex;
                flex-wrap: wrap;
                position: relative;
                z-index: 1;
                justify-content: center;
            }

            .equalize {
                display: flex;
                margin: 15px 0;
            }

            .side-tab button {
                display: block;
                background-color: #47b475;
                color: #fff;
                padding: 6px 15px;
                width: 100%;
                border: none;
                outline: none;
                text-align: left;
                cursor: pointer;
                transition: 0.3s;
                font-size: 17px;
                border-radius: 4px;
                height: auto;
                margin-bottom: 6px;
            }

            .side-tab button:hover {
                background-color: #00b7c2 !important;
            }

            .side-tab button.active {
                background-color: #33955c !important;
            }

            .tabcontent1 {
                float: left;
                padding: 0px;
                /*border: 1px solid #ccc;*/
                width: 100%;
                border-left: none;
                /*height: 400px;*/
                border-radius: 0 10px 10px 0;
            }

            .tabcontent1 .count-items-content {
                padding: 22px;
                border: 1px solid #eee;
                border-radius: 10px;
            }

            .tabcontent1 .count-items-content:hover {
                box-shadow: 0px 0px 29px rgb(0 0 0 / 16%);
            }

            .tabcontent1 .count-items-content p {
                margin-bottom: 0px;
            }

            .tabcontent1 .count-items-content p strong {
                display: block;
                font-size: 18px;
                margin-bottom: 10px;
                padding-bottom: 10px;
                border-bottom: 1px solid #eee;
            }

            @media only screen and (min-width: 320px) and (max-width: 767px) {
                .tabcontent1 {
                    width: 100%;
                }


            }

            #secondTab,
            #thirdTab,
            #fourTab,
            #fiveTab,
            #sixTab,
            #sevenTab,
            #eightTab,
            #nineTab,
            #tenTab,
            #elevenTab,
            #twelveTab,
            #thirteenTab {
                display: none;
            }

            .radio-list {
                /*    width: 210px;*/
                padding: 20px 0;
                margin: 0;
                list-style: none;
                margin: 0 auto;
                display: inline-grid;
            }

            .radio-button {
                color: #000;
                font-size: 14px;
                text-transform: capitalize;
                padding-left: 35px;
                position: relative;
                margin: 0 0 15px;

            }

            .radio-button input[type=radio] {
                margin: auto;
                visibility: hidden;
                position: absolute;
                left: 0;
                top: 0;

            }

            .radio-button label {
                cursor: pointer;
                display: block;
                line-height: 20px;
            }

            .radio-button label:before,
            .radio-button label:after {
                content: "";
                background: #47b475;
                width: 13px;
                height: 13px;
                border-radius: 50%;
                position: absolute;
                left: 5px;
                top: 5px;
            }

            .radio-button label:after {
                background: transparent;
                border: 2px solid #337ab7 !important;
                transform: scale(4);
                opacity: 0;
                visibility: hidden;
            }

            .radio-button input[type=radio]:checked+label:after {
                opacity: 1;
                visibility: visible;
                transform: scale(2.3);
                animation-name: explode;
                animation-duration: 0.350s;
            }

            @keyframes explode {
                0% {
                    opacity: 0;
                    transform: scale(10);
                }

                60% {
                    opacity: 1;
                    transform: scale(1);
                }

                100% {
                    opacity: 1;
                    transform: scale(2);
                }
            }
        </style>
        <section class="essential-features" style="background:#f2f2f2">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h2 class="title">
                            <strong>
                                <span class="red-txt" style="font-size:24px;"> Forge Your Next-Gen Blockchain MLM Platform</span>
                            </strong>
                        </h2>
                        <hr>
                        <p class="text-center">
                            Empower your cryptocurrency sales with a decentralized MLM software solution that leverages blockchain technology and incentive-driven strategies. Our team excels in crafting bespoke crypto MLM solutions compatible with diverse blockchains, designed to engage global markets and drive exponential growth.
                        </p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="margin-top:20px;">
                        <div class="side-tab">
                            <button class="tablinks active" id="defaultOpen" data-target="firstTab">Ethereum MLM Software</button>
                            <button class="tablinks" data-target="secondTab">TRON MLM Software</button>
                            <button class="tablinks" data-target="thirdTab">Bitcoin MLM Software</button>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div id="firstTab" class="tabcontent1">
                            <div class="container-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 equalize">
                                    <div class="count-items-content">
                                        <p style="font-weight: bold;">
                                            <strong>Ethereum MLM Software</strong>
                                            Our Ethereum-based MLM software leverages sophisticated Solidity smart contracts, enabling users to buy cryptocurrencies and earn rewards for their promotional activities. By utilizing an Ethereum platform, you can manage a thriving business within one of the largest and most dynamic crypto communities globally.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="secondTab" class="tabcontent1" style="display:none;">
                            <div class="container-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 equalize">
                                    <div class="count-items-content">
                                        <p style="font-weight: bold;">
                                            <strong>TRON MLM Software</strong>
                                            Harness the power of TRON’s fast transaction speeds and minimal fees with our advanced MLM software. This platform allows you to engage with a new generation of crypto enthusiasts and investors interested in tokens from alternative blockchain networks.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="thirdTab" class="tabcontent1" style="display:none;">
                            <div class="container-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 equalize">
                                    <div class="count-items-content">
                                        <p style="font-weight: bold;">
                                            <strong>Bitcoin MLM Software</strong>
                                            Our Bitcoin MLM software facilitates a robust business model where users can trade Bitcoin and other tokens within the network. Our development team specializes in creating secure, intuitive platforms that ensure a seamless and efficient user experience while safeguarding your transactions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                function openTab(evt, tabName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent1");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(tabName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
        
                // Add event listeners to each tab button
                var tablinks = document.querySelectorAll('.tablinks');
                tablinks.forEach(function(button) {
                    button.addEventListener('click', function(event) {
                        var tabName = this.getAttribute('data-target');
                        openTab(event, tabName);
                    });
                });
        
                // Trigger click on the default tab when the page loads
                document.getElementById("defaultOpen").click();
            });
        </script>
        
        <style type="text/css">
            a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                margin-left: 13px !important;
                margin-right: 13px !important;
            }

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
        <section id="demo" class>
            <div class="container gray-bg">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2 class="title-th sec_tit underline">Cryptocurrency MLM Software Demo</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center" style>
                        <img class="lazy" data-src="images/demo-img/cryptocurrency-mlm.webp" style="max-width: 100%;">
                        <div class="clearfix"></div>

                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-lg-offset-2 text-center">
                        <div class="design"><br>
                            <a href="https://tronnet.deliveryclouds.com/" target="_blank"
                                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                                style="border-radius: 30px !important; text-transform: capitalize !important;"><span>Tron
                                    Based MLM - Demo </span></a>

                            <p><b>User : </b><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="dabbbeb7b3b49abebfb7b5f4b9b5b7">[email&#160;protected]</a></span><br>
                                <b>Password: </b><span>123456</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="design"><br>
                            <a href="https://foresage.deliveryclouds.com/" target="_blank"
                                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                                style="border-radius: 30px !important; text-transform: capitalize !important;"><span>Foresage
                                    MLM - Demo</span></a>
                            <p><b>User: </b><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="3e5f5a5357507e5a5b5351105d5153">[email&#160;protected]</a></span><br>
                                <b>Password: </b><span>123456</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">
            .pro-timeline:after {
                content: '';
                display: block;
                clear: both;
            }

            .pro-timeline .timeline {
                width: 50%;
                padding: 0 0 0 45px;
                margin: 0 0 0 5px;
                float: right;
            }

            .pro-timeline .timeline-content {
                color: #161515;
                background: linear-gradient(#fff 50%, #f9f9f9 50%);
                padding: 15px 15px 15px 70px;
                border: 10px solid #f2f2f2;
                border-radius: 50px;
                /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);*/
                display: block;
                position: relative;
                font-size: 20px !important;
            }

            .pro-timeline .timeline-content:hover {
                text-decoration: none;
            }

            .pro-timeline .timeline-content:before {
                content: "";
                background: linear-gradient(to right bottom, #6AC5A6 50%, #60B397 50%);
                width: 100px;
                height: 100px;
                border-radius: 0 0 0 100px;
                transform: translateY(-50%) rotate(45deg);
                position: absolute;
                top: 50%;
                left: -75px;
            }

            .pro-timeline .timeline-icon {
                color: #fff;
                font-size: 45px;
                font-weight: 600;
                line-height: 35px;
                transform: translateY(-50%);
                position: absolute;
                left: -35px;
                top: 50%;
            }

            .pro-timeline .description {
                font-size: 16px;
                line-height: 1.6;
                letter-spacing: 1px;
                margin: 0;
                font-weight: 600;
            }

            .pro-timeline .timeline:nth-child(even) {
                padding: 0 45px 0 0;
                margin: 0 5px 0 0;
                float: left;
            }

            .pro-timeline .timeline:nth-child(even) .timeline-content {
                padding: 20px 70px 20px 20px;
            }

            .pro-timeline .timeline:nth-child(even) .timeline-content:before {
                transform: translateY(-50%) rotate(225deg);
                left: auto;
                right: -75px;
            }

            .pro-timeline .timeline:nth-child(even) .timeline-icon {
                left: auto;
                right: -35px;
            }

            @media screen and (max-width:767px) {

                .pro-timeline .timeline,
                .pro-timeline .timeline:nth-child(even) {
                    width: 100%;
                    padding: 45px 0 0 0;
                    margin: 0 0 30px;
                }

                .pro-timeline .timeline-content,
                .pro-timeline .timeline:nth-child(even) .timeline-content {
                    text-align: center;
                    padding: 60px 20px 20px;
                }

                .pro-timeline .timeline-content:before,
                .pro-timeline .timeline:nth-child(even) .timeline-content:before {
                    transform: translateY(0) translateX(-50%) rotate(135deg);
                    top: -75px;
                    left: 50%;
                    right: 0;
                }

                .pro-timeline .timeline-icon,
                .pro-timeline .timeline:nth-child(even) .timeline-icon {
                    transform: translateY(0) translateX(-50%);
                    left: 50%;
                    right: auto;
                    top: -35px;
                }
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
                padding: 6px 15px 12px 50px;
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
        </style>
        <div id="our_services" class>
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="small_h3 section-title underline title-th">Key Features of Our Cryptocurrency MLM Software</h2>
                    <p>Our cryptocurrency MLM software is designed with cutting-edge features to ensure seamless and efficient operation.</p>
                </div>
                <div class="grids">
                    <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                        <div class="feature-box-3">
                            <div class="icon"> <i class="fa fa-money" aria-hidden="true"></i> </div>
                            <h5 class="feature-title">Advanced Payment Integration</h5>
                            <p class="feature-desc mb0">Experience unparalleled flexibility with our integrated wallet system, which supports diverse payment methods and a broad spectrum of cryptocurrencies. Effortlessly manage your finances with features such as payment request wallets and operational wallets.</p>
                        </div>
                    </div>
                    <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                        <div class="feature-box-3">
                            <div class="icon"> <i class="fa fa-lock"></i> </div>
                            <h5 class="feature-title">Top-Tier Security</h5>
                            <p class="feature-desc mb0">Our software employs robust security measures, including SSL encryption, a dedicated technical team, comprehensive functional support, automatic payouts, and advanced encryption protocols to protect your transactions and data.</p>
                        </div>
                    </div>
                    <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                        <div class="feature-box-3">
                            <div class="icon"> <i class="fa fa-users"></i> </div>
                            <h5 class="feature-title">Efficient Member Management</h5>
                            <p class="feature-desc mb0">Track and manage all your referrals and agents with precision. Our software ensures secure and straightforward onboarding for new distributors, maintaining an organized and reliable network.</p>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                        <div class="feature-box-3">
                            <div class="icon"> <i class="fa fa-bullhorn" aria-hidden="true"></i> </div>
                            <h5 class="feature-title">Automated Marketing</h5>
                            <p class="feature-desc mb0">Streamline your marketing efforts with automation tools that handle customer outreach through SMS notifications and other channels, ensuring timely and effective communication.</p>
                        </div>
                    </div>
                    <div class="grid col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 ">
                        <div class="feature-box-3">
                            <div class="icon"> <i class="fa fa-clock" aria-hidden="true"></i> </div>
                            <h5 class="feature-title">Comprehensive Admin Dashboard</h5>
                            <p class="feature-desc mb0">Gain complete oversight with our powerful admin dashboard, offering full control over software operations, member management, and revenue tracking.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" text-center" style="margin-top:20px;">
                <a href="#"
                    class="nectar-button medium regular accent-color regular-button nec-btn med_btn"
                    style="border-radius: 30px;">CONNECT WITH OUR EXPERTS</a>
            </div>
        </div>
        <div id="fea-service-sec" class="content-section gray_bg">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h2 class="small_h3 section-title underline title-th">Transform Your MLM Network with Cutting-Edge Crypto Technology
                        </h2>
                        <p>Unlock the full potential of our Cryptocurrency MLM Software Development with its array of transformative benefits:</p>

                    </div>
                    <div class="row mt20">
                        <div class="col-md-4">
                            <div class="feature-box-4">
                                <div class="icon"> <i class="ion-ios-checkmark-outline"></i> </div>
                                <h5 class="feature-title">Real-Time Global Transactions</h5>
                                <p class="feature-desc">Seamlessly process international payments instantly, breaking down borders and accelerating business operations.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box-4">
                                <div class="icon"> <i class="ion-ios-speedometer-outline"></i> </div>
                                <h5 class="feature-title">Effortless Revenue Tracking</h5>
                                <p class="feature-desc">Our blockchain technology ensures meticulous tracking of every transaction, providing clarity and transparency in revenue management.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box-4">
                                <div class="icon"> <i class="ion-ios-list-outline"></i> </div>
                                <h5 class="feature-title">Lightning-Fast Transactions</h5>
                                <p class="feature-desc">Experience unmatched speed with cryptocurrency transactions, bypassing traditional delays and inefficiencies.</p>
                            </div>
                        </div>
                        {{-- <div class="col-lg-2"></div> --}}
                        <div class="col-md-4">
                            <div class="feature-box-4">
                                <div class="icon"> <i class="ion-ios-bolt"></i> </div>
                                <h5 class="feature-title">Minimized Transaction Costs</h5>
                                <p class="feature-desc">Enjoy significantly reduced fees compared to traditional MLM systems, as cryptocurrency MLM minimizes overhead by eliminating intermediaries.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box-4">
                                <div class="icon"> <i class="ion-android-hand"></i> </div>
                                <h5 class="feature-title">Fraud Prevention</h5>
                                <p class="feature-desc">By cutting out middlemen, our software eradicates the risk of fraud, ensuring transparent and secure business dealings.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box-4">
                                <div class="icon"> <i class="ion-android-hand"></i> </div>
                                <h5 class="feature-title">Enhanced Security</h5>
                                <p class="feature-desc">Benefit from the highest levels of data security, as blockchain technology safeguards all transactions with robust encryption, ensuring your information remains protected.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shard_master-node">
            <div class="container">
                <div class="row real-estate-list">
                    <div class="section-title text-center">
                        <h4 class="title-th" style="color: #ffffff; font-weight: 700;">Why Partner with Us for Your Crypto MLM Software Needs?</h4>
                        <hr>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="shard-marter-cnt">
                            <p class="text-center">Choose our seasoned experts in Crypto MLM Software Development to advance your business seamlessly. Our skilled team of developers and engineers excels in creating diverse applications tailored to your needs. From optimizing your cash transactions and upgrading your wallet to securing valuable memberships, we handle it all efficiently.</p>
                        </div>
                    </div>
                    <div class="text-center cta_mine">
                        <a rel="nofollow" class="nectar-button medium regular accent-color regular-button med_btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff" style="border-radius: 30px;"><span>Schedule a Consultation</span></a>
                        <a rel="nofollow" href="https://t.me/smartdev3ai" target="_blank"
                            class="nectar-button med_btn" style="border-radius: 30px;"><span>Connect with Us on Telegram</span></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => 'Why is the system built on the Ethereum blockchain?',
                    'ans' => 'Ethereum offers a robust and versatile platform with smart contracts that enable secure, transparent transactions. Its widespread adoption and support for decentralized applications make it ideal for complex MLM systems.'
                ],
                [
                    'ques' => 'Why opt for a white label solution for a smart contract-based MLM platform?',
                    'ans' => 'A white label solution allows for faster deployment and customization without the need for extensive development from scratch. It provides a cost-effective way to launch a branded MLM platform with proven functionality.'
                ],
                [
                    'ques' => 'How quickly can I launch my white-label MLM platform?',
                    'ans' => 'The launch timeline depends on customization requirements, but with a white-label solution, you can typically go live within weeks, ensuring a swift entry into the market.'
                ],
                [
                    'ques' => 'Why choose us for smart contract-based MLM software development?',
                    'ans' => 'Our expertise in smart contract development ensures a secure, scalable, and efficient MLM solution tailored to your needs. We offer cutting-edge technology and a track record of successful implementations.'
                ],
                [
                    'ques' => 'What can you do with MLM software online?',
                    'ans' => 'With MLM software, you can manage referrals, track commissions, automate marketing, handle payments, and monitor performance, all through a centralized, user-friendly online platform.'
                ],
                [
                    'ques' => 'Why does your business need cryptocurrency MLM software?',
                    'ans' => "Cryptocurrency MLM software enhances transparency, reduces transaction fees, and automates processes. It enables efficient, secure operations and can attract a global audience to your network marketing efforts."
                ],
                [
                    'ques' => 'How does Bitcoin MLM software operate?',
                    'ans' => 'Bitcoin MLM software facilitates transactions and commission distribution using Bitcoin. It leverages blockchain technology for secure, transparent operations and real-time tracking of user activities.'
                ],
                [
                    'ques' => 'What is the best Bitcoin MLM software development company?',
                    'ans' => 'The best company offers expertise in Bitcoin MLM solutions, a strong portfolio of successful projects, and a commitment to secure, scalable technology. Look for a provider with a proven track record in the industry.'
                ],
                [
                    'ques' => 'Why is Crypto MLM software a smart choice for your business?',
                    'ans' => 'Crypto MLM software streamlines operations, reduces overhead costs, and offers greater transparency and security. It aligns with modern digital trends, providing a competitive edge in the MLM space.'
                ],
                [
                    'ques' => 'How is Blockchain MLM software becoming popular?',
                    'ans' => 'Blockchain MLM software is gaining traction due to its transparency, security, and efficiency. The decentralized nature of blockchain technology enhances trust and reliability in MLM transactions and operations.'
                ]

            ],
        ])

    </div>
</div>

<script src="js/vendor.js" type="7b76a5cf85bede880454c371-text/javascript"></script>
<script src="js/plugins.js" type="7b76a5cf85bede880454c371-text/javascript"></script>
<script src="js/main.js" type="7b76a5cf85bede880454c371-text/javascript"></script>
<script type="7b76a5cf85bede880454c371-text/javascript"
    src="https://tympanus.net/Development/AnimatedHeaderBackgrounds/js/TweenLite.min.js"></script>
<script type="7b76a5cf85bede880454c371-text/javascript"
    src="https://tympanus.net/Development/AnimatedHeaderBackgrounds/js/EasePack.min.js"></script>
<script type="7b76a5cf85bede880454c371-text/javascript"
    src="https://tympanus.net/Development/AnimatedHeaderBackgrounds/js/rAF.js"></script>
<script src="build/js/intlTelInput.js" type="7b76a5cf85bede880454c371-text/javascript"></script>
<script type="7b76a5cf85bede880454c371-text/javascript">
    $("#phone").intlTelInput({
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: "body",
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "build/js/utils.js"
        });
</script>
<script type="7b76a5cf85bede880454c371-text/javascript">
    $('.home-talk-experts').click(function() {
            $('html, body').animate({
                scrollTop: $('#newsletter-form-sec').offset().top
            }, 2000);
        });
        var url = window.location.href;
        $('#url').val(url);
        // alert(url);
</script>

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
</style>

<a class="sticky_form_bp color-btn1 hidden-lg"
    href="https://www.blockchainappfactory.com/create-your-own-token-and-coin" style="color:#fff !important;">Contact to
    Create a Token! </a>
<div class="sticky-form">
    <div class="formdiv">
        <form class="form-side" id="mailForm_sticky" method="post" action>
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
                <input id="phone_sticky" name="phone_dummy" type="text" required
                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                    data-cf-modified-7b76a5cf85bede880454c371->
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/cryptocurrency-mlm-software-development">
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
<script type="7b76a5cf85bede880454c371-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="7b76a5cf85bede880454c371-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="7b76a5cf85bede880454c371-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="7b76a5cf85bede880454c371-text/javascript">
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

<script type="7b76a5cf85bede880454c371-text/javascript">
    window.__lc = window.__lc || {};
        window.__lc.license = 9464790;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>

<script type="7b76a5cf85bede880454c371-text/javascript">
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


<style type="text/css">
    @media (min-width: 320px) and (max-width: 768px) {
        /*.openbtn1{width: 70px !important; top: 21% !important;}*/
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
<script type="7b76a5cf85bede880454c371-text/javascript">
    /* Set the width of the sidebar to 250px (show it) */
    function openNav4() {
      document.getElementById("mySidepanel4").style.width = "250px";
    }
    
    /* Set the width of the sidebar to 0 (hide it) */
    function closeNav4() {
      document.getElementById("mySidepanel4").style.width = "0";
    }
</script>




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



        <div class="items">
            <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="blank">
                <div class="icons"><img src="https://www.blockchainappfactory.com/images/appointment.webp"></div>

            </a>
        </div>
        <div class="items">
            <a rel="nofollow" href="https://t.me/amarbaf" target="blank">
                <div class="icons"><i class="fa fa-paper-plane"></i></div>

            </a>
        </div>

    </div>
</div>




<script type="7b76a5cf85bede880454c371-text/javascript">
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


<script type="7b76a5cf85bede880454c371-text/javascript">
    $(".crypto-popup").click(function(e) {
            $('crypto-popup').addClass('fixedPosition full-width');
            $(".login-popup").addClass('show');
            e.stopPropagation();
        });
</script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="7b76a5cf85bede880454c371-|49" defer></script>
</div>






<style type="text/css">
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
    .new-features .awesome-features-wrapper {
        padding: 30px 15px;
        position: relative;
        transition: 1s;
        border-radius: 7px;
        min-height: auto;
        margin: 25px;
        background: #021632;
        border: 1px solid #fff;
    }

    .new-features .awesome-features-wrapper::before {
        content: "";
        position: absolute;
        left: -10px;
        bottom: -10px;
        top: auto;
        background: #fff;
        width: 90px;
        height: 90px;
        z-index: -1;
        transition: 1s;
        border-radius: 20px
    }

    .new-features .awesome-features-wrapper::after {
        content: "";
        position: absolute;
        width: 90px;
        height: 90px;
        z-index: -1;
        transition: 1s;
        right: -10px;
        top: -10px;
        left: auto;
        border-radius: 20px;
        background: none;
        border: 1px solid #fff;
    }

    .new-features .awesome-features-wrapper:hover::before,
    .new-features .awesome-features-wrapper:hover::after {
        width: 200px;
        height: 200px
    }

    .new-features .awesome-features-wrapper p,
    .new-features .awesome-features-wrapper p strong {
        color: #fff;
        padding: 0;
        margin: 0;
    }

    .new-features .awesome-features-icon-img .fa {
        color: #fff;
        font-size: 40px;
        margin-bottom: 15px;
    }

    .triangle-section ul li {
        display: inline-block;
        width: auto;
    }

    .triangle-section ul li>span {
        position: relative;
        width: 100px;
        height: 100px;
        display: inline-block;
    }

    .triangle-section ul li>span:before {
        position: absolute;
        content: "";
        background: #47b475;
        transform: rotate(45deg);
        border-radius: 0;
        width: 100%;
        height: 100%;
        left: 0;
        top: -30px;
    }

    .triangle-section ul li a {
        display: inline-block;
        width: 100%;
        margin-top: 20px;
    }

    .triangle-section ul li>span svg {
        position: relative;
        z-index: 2;
    }

    .triangle-section ul {
        margin-top: 70px;
        display: inline-block;
        width: 100%;
    }

    #our_services .feature-box-3 {
        min-height: 255px;
    }

    .feature-box-4 p.feature-desc {
        margin-bottom: 0;
    }

    @media screen and (max-width: 425px) {
        .main-timeline .icon {
            display: none !important;
        }
    }

    .typ_box {
        background: #fff;
        padding: 35px 10px 0;
        margin-bottom: 30px;
        min-height: 360px;
        transition: 0.5s;
    }

    .typ_ic_cnt h5 {
        position: relative;
    }

    .typ_ic_cnt h5:after {
        content: '';
        width: 60px;
        height: 2px;
        background: #47b475;
        display: block;
        margin: 3px auto 14px;
    }

    .typ_ic {
        margin-bottom: 10px;
        width: 90px;
        height: 90px;
        margin: 0 auto 11px;
        border-radius: 50%;
        box-shadow: 0 0 10px #bbb;
    }

    .typ_ic img {
        width: 50px;
        margin-top: 20px;
    }

    body.faq-content .panel-heading {
        background: #eee !important;
        color: #333 !important;
    }

    .faq-content h4.panel-title {
        color: #333;
    }

    .faq-content .panel-body {
        color: black !important;
    }

    .timeline::before {
        position: absolute;
        top: 0;
        left: 30px;
        height: 100%;
        width: 2px;
        background: none;
    }

    .mt-50 {
        margin-top: 50px;
    }

    .typ_ic_cnt p {
        font-size: 14px;
        line-height: 1.6;
    }

    .typ_box:hover {
        box-shadow: 0 0 15px #bbb;
    }

    .flip-box {
        padding: 30px 15px 0px;
        min-height: 420px;
        margin-bottom: 30px;
        border-radius: 5px;
        border-bottom: 2px solid #47b47566;
    }

    .flip-txt {
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 0;
    }

    .flip-tit {
        font-size: 17px;
        color: #444;
        line-height: 1.4;
        margin-bottom: 11px;
    }

    .flip-icon-outer {
        padding: 20px;
    }

    @media (max-width: 1199px) {
        .triangle-section ul li>span {
            width: 75px;
            height: 75px;
        }

        .triangle-section ul li>span:before {
            top: -20px;
        }

        .feature-box-3 .feature-desc {
            font-size: 13px;
        }

        #our_services .feature-box-3 {
            min-height: 277px;
        }
    }

    @media (max-width: 991px) {
        .triangle-section ul li a span {
            display: block;
        }
    }

    @media (max-width: 767px) {
        .triangle-section ul li {
            display: block;
            width: auto;
            margin-bottom: 50px;
        }

        .triangle-section ul li a {
            margin-top: 0px;
        }

        .triangle-section ul li:last-child {
            margin-bottom: 0;
        }

        .typ_box {
            padding: 35px 10px 10px;
            margin-bottom: 30px;
            min-height: auto;
            max-width: 500px;
            margin: 0 auto 30px;
        }

        .flip-box {
            padding: 30px 15px 30px;
            min-height: auto;
            margin-bottom: 30px;
        }
    }

    .tron-mlm {
        background: #101819 url(images/tron-bg.webp);
        background-size: auto;
        background-repeat: repeat-y;
        background-position: right;
    }

    .tron-mlm h2 {
        color: #fff;
        font-weight: 600;
        margin-bottom: 35px;
    }

    .tron-mlm p {
        color: #fff;
    }

    .main-timeline {
        padding-top: 50px;
        overflow: hidden;
        position: relative;
    }

    .main-timeline:before {
        content: "";
        width: 7px;
        height: 100%;
        background: #47b475;
        margin: 0 auto;
        position: absolute;
        top: 80px;
        left: 0;
        right: 0;
    }

    .main-timeline .timeline {
        width: 50%;
        float: left;
        padding: 20px 60px;
        border-top: 3px solid #47b475;
        border-right: 3px solid #47b475;
        border-radius: 0 30px 0 0;
        position: relative;
        right: -3.5px;
    }

    .main-timeline .icon {
        display: block;
        width: 50px;
        height: 50px;
        line-height: 50px;
        border-radius: 50%;
        background: #47b475;
        border: 1px solid #fff;
        text-align: center;
        font-size: 25px;
        color: #fff;
        box-shadow: 0 0 0 2px #47b475;
        position: absolute;
        top: -30px;
        left: 0;
    }

    .main-timeline .timeline-content {
        display: block;
        padding: 30px 10px 10px;
        border-radius: 20px;
        background: #fff;
        color: #000;
        position: relative;
        border: 3px solid #47b475;
    }

    .main-timeline .timeline-content:hover {
        text-decoration: none;
        color: #333;
    }

    .main-timeline .timeline-content:before,
    .main-timeline .timeline-content:after {
        content: "";
        display: block;
        width: 10px;
        height: 50px;
        border-radius: 10px;
        background: #47b475;
        border: 1px solid #fff;
        position: absolute;
        top: -35px;
        left: 50px;
    }

    .main-timeline .timeline-content:after {
        left: auto;
        right: 50px;
    }

    .contentall a {
        border-radius: 7px;
    }

    .contentall a:hover {
        background: #00b7c2;
    }

    .main-timeline .title {
        font-size: 24px;
        margin: 0;
    }

    .main-timeline .description {
        font-size: 15px;
        letter-spacing: 1px;
        margin: 0 0 5px 0;
    }

    .main-timeline .timeline:nth-child(2n) {
        border-right: none;
        border-left: 3px solid #47b475;
        border-radius: 30px 0 0 0;
        right: auto;
        left: -3.5px;
    }

    .main-timeline .timeline:nth-child(2n) .icon {
        left: auto;
        right: 0;
    }

    .main-timeline .timeline:nth-child(2) {
        margin-top: 130px;
    }

    .main-timeline .timeline:nth-child(odd) {
        margin: -130px 0 30px 0;
    }

    .main-timeline .timeline:nth-child(even) {
        margin-bottom: 80px;
    }

    .main-timeline .timeline:first-child,
    .main-timeline .timeline:last-child:nth-child(even) {
        margin: 0 0 30px 0;
    }

    .main-timeline .timeline:nth-child(2n) .timeline-content,
    .main-timeline .timeline:nth-child(2n) .timeline-content:before,
    .main-timeline .timeline:nth-child(2n) .timeline-content:after,
    .main-timeline .timeline:nth-child(2n) .icon {
        background: #47b475;
    }

    .main-timeline .timeline:nth-child(2n) .icon {
        box-shadow: 0 0 0 2px #47b475;
    }

    .main-timeline .timeline:nth-child(2n) .timeline-content {
        background: #fff;
    }

    .main-timeline .timeline:nth-child(3n) .timeline-content,
    .main-timeline .timeline:nth-child(3n) .timeline-content:before,
    .main-timeline .timeline:nth-child(3n) .timeline-content:after,
    .main-timeline .timeline:nth-child(3n) .icon {
        background: #47b475;
    }

    .main-timeline .timeline:nth-child(3n) .icon {
        box-shadow: 0 0 0 2px #47b475;
    }

    .main-timeline .timeline:nth-child(3n) .timeline-content {
        background: #fff;
    }

    .main-timeline .timeline:nth-child(4n) .timeline-content,
    .main-timeline .timeline:nth-child(4n) .timeline-content:before,
    .main-timeline .timeline:nth-child(4n) .timeline-content:after,
    .main-timeline .timeline:nth-child(4n) .icon {
        background: #47b475;
    }

    .main-timeline .timeline:nth-child(4n) .icon {
        box-shadow: 0 0 0 2px #47b475;
    }

    .main-timeline .timeline:nth-child(4n) .timeline-content {
        background: #fff;
    }

    @media only screen and (max-width: 767px) {
        .main-timeline:before {
            left: 0;
            right: auto;
        }

        .main-timeline .timeline,
        .main-timeline .timeline:nth-child(even),
        .main-timeline .timeline:nth-child(odd) {
            width: 100%;
            float: none;
            padding: 20px 30px;
            margin: 0 0 30px 0;
            border-right: none;
            border-left: 7px solid #084772;
            border-radius: 30px 0 0 0;
            right: auto;
            left: 0;
        }

        .main-timeline .icon {
            left: auto;
            right: 0;
        }
    }

    @media only screen and (max-width: 480px) {
        .main-timeline .title {
            font-size: 18px;
        }
    }

    .shard_master-node {
        background: linear-gradient(rgba(71, 180, 117, 0.95), rgba(71, 180, 117, 0.57)), transparent url(images/masternode/node-pg.webp) top left/cover no-repeat scroll;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .shard_master-node h4 {
        color: #fff;
    }

    .section-title h4 {
        font-size: 30px;
    }

    .shard-marter-cnt {
        text-align: center;
        background: #ffffffa3;
        padding: 30px 15px 0px 15px;
        border: 5px dotted #47b475;
        margin-bottom: 30px;
    }

    .title-th {
        font-weight: 700;
    }

    .flip-tit {
        font-weight: 600;
    }

    .tit {
        font-weight: 600;
    }

    .feature-title {
        font-weight: 600;
    }

    .flip-box:hover {
        background: #47b475;
        color: #fff;
        /*   transform: translateY(-10px);*/
    }

    .flip-box:hover .flip-tit {
        color: #fff;
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

    .tex {
        padding: 10px;
    }

    .feature-box-4 {
        background: #ffffff;
        text-align: center;
        min-height: 220px;
        border: 2px solid #f2f2f2;
        border-radius: 10px;
        padding: 20px 20px;
        margin-bottom: 20px;
        margin-right: 10px;
        margin-left: 10px;
    }

    .feature-box-4:hover {
        background: #47b475;
    }

    .feature-box-4:hover .feature-title {
        color: #ffffff;
    }

    .feature-box-4:hover .feature-desc {
        color: #ffffff;
    }

    .feature-box-4:hover .icon i {
        filter: brightness(0) invert(1);
    }

    .banner_content .contentall {
        margin-top: 70px;
    }

    .contentall h1,
    .ban_tirt {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 34px;
    }

    .contentall p {
        font-weight: normal;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 21px;
        max-width: 800px;
        margin: 0 auto 30px;
        display: block;
        color: #fff !important;
    }

    .contentall h1 {
        color: #fff !important;
    }

    .banner_content .contentall {
        margin-top: 90px;
    }

    @media (min-width: 992px) .banner {
        height: auto !important;
    }
</style>




@endsection