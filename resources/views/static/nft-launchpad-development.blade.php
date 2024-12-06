@extends('layouts.static')
    @section('title', 'NFT Launchpad Development')
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

    .banner-overlay {
        background-color: rgb(0 0 0 / 0%);
    }

    .contentall a:hover {
        background: #00acdc;
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
        margin: 5px 0;
    }

    .banner {
        background: linear-gradient(#7736b7, rgb(69 7 104));
        background-size: cover;
        padding-top: 110px;
        padding-bottom: 60px;
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
        background: #ff5ce2;
        -webkit-filter: blur(206px);
        filter: blur(206px);
        width: 95%;
        height: 24%;
        opacity: 0.95;
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
        margin: 125px auto 40px;
    }

    .contentall h1,
    .ban_tirt {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 32px;
        text-transform: capitalize;
    }

    .contentall h1 {
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
        background: linear-gradient(45deg, #a803d8, #3c99d4) !important;
    }

    .nec-btn,
    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        background: linear-gradient(45deg, #a803d8, #3c99d4) !important;
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
        letter-spacing: 0;
        line-height: 1.3;
    }

    h3.section-title {
        color: #000000;
    }

    @media (max-width: 1199px) {

        .contentall h1,
        .ban_tirt {
            font-size: 30px;
        }
    }

    @media (max-width: 768px) {
        .testimonials-item .testimonials-content .txt p {
            min-height: auto !important;
        }

        .pad {
            padding: 0px !important;
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
            background: #000000b8;
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

        .pull-left img {
            margin-top: 30px;
        }

        .banner_content p br,
        .sec_tit br {
            display: none !important;
        }
    }

    h3.section-title {
        font-size: 25px !important;
        font-weight: 700;
    }

    .banner_content h4 {
        margin-top: 10px;
        font-size: 24px;
        color: #fff;
        line-height: 40px;
        font-weight: 700;
        text-transform: capitalize;
        letter-spacing: 0;
        text-align: center;
        margin-bottom: 10px;
    }

    .intro_cnt img {
        border-radius: 10px;
        margin-top: 0px;
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

    .list_box h3 {
        background: white;
        padding: 4% 4%;
        text-align: center;
        justify-content: center;
        font-size: 20px;
        align-items: center;
        margin-bottom: 28px;
        border-radius: 29px;
        box-shadow: 1px 4px 10px #00000047;
        color: #000000;
    }

    .features-area.style-two .image-box {
        position: relative;
        z-index: 1;
        -webkit-box-shadow: 0px 10px 40px 0px rgba(8, 0, 20, 14%);
        box-shadow: 0px 10px 40px 0px rgba(8, 0, 20, 14%);
        border-radius: 1.5rem;
        margin-bottom: 30px;
        transition: .5s all ease-in-out;
        background: linear-gradient(90deg, #7736b7 0%, #7927c3 35%, rgba(139, 56, 186, .86628154679841) 100%);
        text-align: left !important;
    }

    .features-area.style-two .image-box:hover:before {
        transform: translate(7px, 7px);
        box-shadow: 0px 10px 40px 0px rgba(8, 0, 20, .3);
    }

    .features-area.style-two .image-box:before {
        content: "";
        width: 100%;
        top: 0;
        left: 0;
        height: 100%;
        z-index: -3;
        border-radius: 1.5rem;
        position: absolute;
        transition: .5s all ease-in-out;
        background: #fff;
    }

    .avatar-sm {
        height: 3rem;
        width: 3rem;
    }

    .p-5 {
        padding: 3rem 2rem !important;
    }

    .icon-text h4 {
        font-weight: 600;
        margin: 10px 0px;
    }

    /*.features-area.style-two .image-box:hover {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
        -webkit-box-shadow: 0 1rem 3rem rgb(31 45 61 / 13%) !important;
        box-shadow: 0 1rem 3rem rgb(31 45 61 / 13%) !important;
    }*/

    .pad {
        border-radius: 15px;
        padding: 5%;
        min-height: 400px;
        background: #3d3d3d;
        margin: 15px 0;
        border: 1px solid #7736b7;
    }

    .pad .icon {
        background: #7736b752;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        float: right;
        text-align: center;
    }

    .pad .icon img {
        width: 100%;
        height: 100%;
        padding: 20px;
    }

    .pad.red {
        background: linear-gradient(#f1e4ff, rgba(139, 56, 186, .4));
        padding: 40px;
    }

    .pad.black {
        background: linear-gradient(#f1e4ff, rgba(226, 0, 178, .3));
        padding: 40px;
    }

    .no-padding .col-md-6 {
        margin: 0;
        padding: 0;
    }

    .testimonials-item .user {
        width: 70px;
        height: 70px;
        position: relative;
        position: absolute;
        top: -10px;
        left: 25px;
        z-index: 3;
        -webkit-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        transition: all .3s ease 0s;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        overflow: hidden;
        background: linear-gradient(90deg, #7736b7 0%, #7927c3 35%, rgba(139, 56, 186, .86628154679841) 100%);
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
        background: #f1e4ff;
        overflow: hidden;
        box-shadow: 3px 3px 0px 0px #7927c3;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        position: relative;
        height: 100%;
        min-height: auto;
        border: 1px solid #7736b7;
    }

    .testimonials-item .testimonials-content:before {
        content: '';
        background: linear-gradient(90deg, #7736b7 0%, #7927c3 35%, rgba(139, 56, 186, .86628154679841) 100%);
        position: absolute;
    }

    @media only screen and (width: 1024px) {
        .testimonials-item .testimonials-content {
            min-height: 316px;
        }
    }

    .testimonials-item:hover h3 {
        color: #000 !important;
    }

    .testimonials-item:hover p {
        color: #000 !important;
    }

    .testimonials-item .testimonials-content::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: #f1e4ff !important;
        opacity: 0;
        -webkit-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
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
        min-height: auto;
        font-size: 14px;
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

    .common_space {
        padding-top: 50px;
    }

    .feature-tit {
        font-weight: 700;
    }

    .pad .feature-tit {
        padding: 20px;
        text-align: left;
    }

    .pad p {
        padding-left: 15px;
        margin-bottom: 4px;
        padding-bottom: 20px;
    }

    .icon-text h3 {
        padding: 10px 0;
        color: #000000;
        font-weight: 700;
        font-size: 20px;
    }

    .list_box:hover h3 {
        background: #47b475;
        color: #fff;
    }

    .box_list:hover h3 {
        transform: scale(0.9);
        background: none;
        color: #000000;
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
        color: #222;
        line-height: 27px;
        border: 2px solid #ddd;
    }

    .new-features .awesome-features-wrapper {
        padding: 30px 15px;
        position: relative;
        transition: 1s;
        border-radius: 7px;
        min-height: auto;
        margin: 25px;
        background: #873ac3;
        border: 1px solid #fff;
    }

    .new-features .awesome-features-wrapper::before {
        content: "";
        position: absolute;
        left: -10px;
        bottom: -10px;
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

    .faq-content #accordion a[data-toggle=collapse]::before {
        background: #108ad6;
    }

    .category-grid-style-01 {
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        border-radius: 5px;
    }

    .teck .category-grid-style-01 .category-item {
        padding: 10px !important;
        text-align: center;
        width: 18%;
        border: 1px solid #000;
        border-radius: 10px;
        margin: 5px;
        position: relative;
    }

    .category-item.aos-item .text-center {
        font-size: 12px !important;
        margin-bottom: 0px !important;
    }

    .teck .category-grid-style-01 .category-item .category-icon {
        margin-bottom: 0 !important;
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
        width: 26%;
        text-align: center;
        font-size: 16px;
        padding: 15px;
        margin: 2px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
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

    .gray_bg {
        background: #f1e4ff;
    }

    section#counter-stats {
        justify-content: center;
        margin-top: 0;
        background: rgb(26 26 26);
        color: #fff
    }

    .stats {
        text-align: center;
        font-size: 28px;
        font-weight: 700;
        padding: 1rem 0
    }

    .stats .fa {
        color: teal;
        font-size: 60px
    }

    .stats p {
        font-size: 14px;
        margin-bottom: 0
    }

    #counter-stats .stats:first-child,
    #counter-stats .stats:nth-child(3) {
        background: #34094d
    }

    #counter-stats .stats:nth-child(2),
    #counter-stats .stats:nth-child(4) {
        background: #530b7b
    }

    .client-list {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        padding: 0;
        margin: 0;
        justify-content: center;
        align-items: center;
    }

    .client-list li {
        width: 10%;
        margin: 25px 1%;
        padding: 0 10px;
    }

    .client-list li img {
        filter: grayscale(1);
    }

    @media (min-width: 320px) and (max-width: 768px) {
        .client-list li {
            width: 31%;
            margin: 15px 1%;
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
                                <div class="bnr_content">
                                    <div class="ban_tirt">
                                        <h1>NFT Launchpad Evolution</h1>
                                    </div>
                                    <p>Empowering Creators to Unveil NFTs with Impact. <br> Catapulting NFTs into the spotlight with cutting-edge strategies and dynamic marketing, all through a robust platform. 
                                    </p>
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
                                                data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION </span></a> --}}
                                            <a href="{{ url('consultation') }}"
                                                class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 hidden-sm">
                            <img src="{{ asset('images/nft_launch/banner-img1.webp') }}" alt="NFT Launchpad Development" title="NFT Launchpad Development">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section style="background: #f1e4ff;">

        </section>

        <div class="intro_cnt" style="padding-top: 60px;">
            <div class="container">
                <div class="section-title text-center underline">
                    <div class="sec_tit">
                        <h2>Beyond the Hype: Mastering NFTs with Pioneering Technology</h2>
                    </div>
                </div>
                <p class="mt10 text-center">The NFT landscape is evolving at lightning speed, rapidly boosting its value and allure within the crypto realm. NFTs' ability to generate income across various industries has captivated a worldwide audience. Their unique attributes and swift value increases draw users in, eager to tap into their potential. Visionary leaders and astute investors have seized these lucrative opportunities, driving the explosive growth of NFTs and their blockchain ecosystems. This surge has, however, led to heightened traffic and soaring gas fees. <br><br>
                While top-tier artists and industry veterans are reaping the rewards of the NFT boom, up-and-coming musicians and creators are also starting to shine in this expansive market. Yet, the rising costs associated with minting NFTs, driven by increased network congestion, present a significant hurdle for new talent. <br><br>
                To overcome this barrier and harness the full potential of this dynamic industry, we've introduced an innovative solution: the NFT Launchpad. This groundbreaking platform equips creators with the necessary resources to successfully fund and launch their NFTs.
                </p>
                <div class="text-center cta_mine txt"> 
                    {{-- <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                        href="#"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>SCHEDULE A CONSULTATION</span></a>  --}}
                    <a href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>CONNECT WITH OUR EXPERTS</span></a> 
                </div>

            </div>
        </div>


        <style type="text/css">
            .center-align {
                padding: 60px 0
            }

            .center-align ul {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                margin: 10px 0;
                padding: 30px 0;
                border: 1px solid #eee;
                border-radius: 10px;
                background: #f1e4ff;
            }

            .center-align ul li {
                width: 50%;
                display: flex;
                align-items: center;
                padding: 0 3%
            }

            .center-align ul li h5 {
                font-size: 24px;
                font-weight: 700;
                color: #e85b17
            }

            .center-align ul li p span {
                width: 40px;
                height: 40px;
                background: linear-gradient(#e88817, #e85b17);
                opacity: 1;
                font-size: 18px;
                display: inline-block;
                border-radius: 50%;
                color: #fff;
                text-align: center;
                line-height: 2.1em;
                margin-left: -70px;
                margin-right: 25px
            }

            .reverse {
                flex-direction: row-reverse
            }

            @media (min-width:320px) and (max-width:768px) {
                .center-align {
                    padding: 10px 0
                }

                .center-align ul li {
                    width: 100%;
                    margin: 5px 0;
                    padding: 15px
                }
            }

            .center-align ul li ul {
                padding: 0;
                border: 0;
                background: transparent;
            }

            .center-align ul li ul li {
                position: relative;
                padding-left: 25px;
                width: 100%;
                padding-bottom: 12px;
            }

            .center-align ul li ul li:after {
                font-family: FontAwesome;
                top: 3px;
                right: 0;
                padding-right: 10px;
                content: "\f0a9";
                position: absolute;
                left: 0;
                font-size: 20px;
                color: #108ad6;
            }
        </style>
        <section class="center-align">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <ul class="reverse" style="background: #f1e4ff;">
                            <li>
                                <div>
                                    <div class="section-title">
                                        <h3 class="title"> <span class="red-txt"><strong>Why to Choose NFT Launchpad Development?</strong></span></h3>
                                        <hr style="margin-left: 0;">
                                    </div>
                                    <ul>
                                        <li>To Revolutionize the NFT Market</li>
                                        <li>To Elevate Creator Success</li>
                                        <li>To Strengthen the Community</li>
                                        <li>To Offer an Immersive NFT Experience</li>
                                        <li>To Foster Investor Confidence</li>
                                        <li>To Establish a Transparent Minting Process</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img class="lazy" src="{{ asset('images/nft_launch/img-1.webp') }}"
                                    alt="Why NFT Launchpad Developemnt" title="Why NFT Launchpad Developemnt">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="technologies"
            style="background: linear-gradient(90deg,#7736b7 0%,#7927c3 35%,rgba(139,56,186,.86628154679841) 100%);">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sec_tit underline text-center text-white">Create Your Unique NFT Launchpad</h3>
                    <p class="text-center white">NFTs have cemented their status as a powerful business model, driving the need for NFT launchpads as essential opportunities for entrepreneurs. Our specialists can craft bespoke NFT launchpad applications, meticulously designed to align with your specific needs and technological preferences.</p>
                    <ul>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/nftb.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/magic-eden.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/nftpad.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/okx.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/balthazar.webp') }}">
                            <p class="white"></p>
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/nftm/icons/nft-launch.webp') }}">
                            <p class="white"></p>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                    <!-- <div class="text-center cta_mine txt"> <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with our Experts</span></a> </div> -->

                </div>
            </div>
        </div>

        <section class="intro_cnt common_spacing uniq_features">
            <div class="container">
                <div class="section-title underline text-center">
                    <div class="sec_tit">
                        <h2>Unlocking NFT Potential: Your Gateway to Efficient Launchpad Solutions</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <p class="mt10 text-justify">NFT Launchpad Development streamlines the minting and launch of NFT projects, integrating both creation and promotion. This platform empowers creators to mint and market their NFTs through a distinctive portfolio, offering collectors a seamless experience in acquiring desired pieces. Creators can employ a first-come-first-served or lottery model to distribute their NFTs, enhancing community involvement.</p>
                        <p class="mt10 text-justify">The Launchpad also incorporates gaming elements, allowing investors to engage with their purchased tokens in exciting ways.</p>
                        <p class="mt10 text-justify">Discover Rare Assets, Trade, and Create Your Own NFTs.</p>
                        <p class="mt10 text-justify">At Mtve sion, we are dedicated to nurturing emerging creators by providing the tools and support necessary to fund and launch their NFT projects. Our deep industry expertise and passion for the NFT space drive us to deliver groundbreaking solutions that unlock the full potential of this vibrant market. We strive to make NFT technology accessible and impactful, enabling creators to mint, sell, and experience the myriad opportunities NFTs offer with a tailored portfolio for their work.</p>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 text-center"> <img src="{{ asset('images/nft_launch/img-2.webp') }}" alt="NFT Launchpad" title="NFT Launchpad"> </div>
                </div>
            </div>
        </section>

        <div class="common_spacing gray_bg new-features"
            style="background: linear-gradient(90deg,#7736b7 0%,#7927c3 35%,rgba(139,56,186,.86628154679841) 100%);">
            <div class="container">
                <div class=" ">
                    <h2 class="sec_tit underline text-center text-white">State-of-the-Art Enhancements in Our NFT Launchpad</h2>

                </div>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-desktop"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Secondary Marketplace Integration</strong>Embed a dynamic marketplace portal within the launchpad to facilitate secondary trades, enabling users to gain significant and immediate benefits.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-book"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">E-Book Certification Module</strong>Incorporate an e-book certification feature within the launchpad to authenticate NFT projects, ensuring their credibility and legitimacy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-ticket-alt"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Event Ticketing Portal</strong>Provide a platform for event organizers to issue ticket NFTs as exclusive early-bird offers, amplifying online buzz and community engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-money"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">NFT Rental Services</strong>Enable creators and brands to offer NFTs for rent, allowing enthusiasts to experience assets before purchasing, and giving those with limited resources a chance to engage.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-clock-o"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Time-Limited NFTs</strong>Introduce time-limited NFTs that self-destruct after a set period post-redeem, enhancing their rarity and desirability.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-th-list"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Dynamic Pricing Models</strong>Implement flexible pricing options that adjust based on market demand and launch timelines, optimizing project valuation.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-user-plus"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Fan Engagement Platforms</strong>Create spaces within the launchpad for creators, celebrities, and sports teams to interact with fans through their NFT projects, fostering deeper connections.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <i class="fa fa-link"></i> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Cross-Chain NFT Marketplace</strong>Feature a cross-chain NFT marketplace within the launchpad, enabling seamless trading of NFT assets across different blockchain networks.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <section id="features" class="section features-area style-two overflow-hidden ptb_100 common_spacing gray_bg">
            <div class="container">
                <div class="section-title underline text-center mt20">
                    <div class="sec_tit">
                        <h2>Targeted NFT Launchpad Platforms for Diverse Fields</h2>
                    </div>
                </div>
                <div class="row mt50 container-center">
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin equalize">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s"
                            data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <!-- Featured Image   class="avatar-sm"    -->
                            <div class="featured-img mb-3"> <img class="lazy"
                                    src="{{ asset('images/nft_launch/icons/artist.png') }}" style="width:45px;"> </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">NFT Launchpad for Artists</h3>
                                <p>Elevate artistry and creativity with a secure, intuitive platform designed for artists. This launchpad allows artists to present their captivating works to a global audience while ensuring their creative contributions are honored with fair royalties.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin equalize">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s"
                            data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3"> <img class="lazy"
                                    src="{{ asset('images/nft_launch/icons/musician.png') }}" style="width:45px;"> </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">NFT Launchpad for Musicians</h3>
                                <p>Music resonates universally, and our specialized NFT launchpad for musicians provides a powerful tool for setting new benchmarks. It offers musicians an efficient way to showcase and monetize their music NFTs, enhancing their impact in the industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin equalize">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-aos-duration="2s"
                            data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3"> <img class="lazy"
                                    src="{{ asset('images/nft_launch/icons/console.png') }}" style="width:45px;"> </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">NFT Launchpad for Gamers</h3>
                                <p>Transform gaming assets into valuable NFTs with our dedicated launchpad for gamers. This platform simplifies the tokenization process, enabling gamers to effortlessly capitalize on their in-game assets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin equalize">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s"
                            data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3"> <img class="lazy"
                                    src="{{ asset('images/nft_launch/icons/content.png') }}" style="width:45px;"> </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">NFT Launchpad for Content Creators</h3>
                                <p>Empower the knowledge-sharing realm with our NFT launchpad for content creators. This platform offers a transformative way to showcase and monetize creative content, ensuring creators remain at the forefront of the crypto landscape.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin equalize">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s"
                            data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3"> <img class="lazy"
                                    src="{{ asset('images/nft_launch/icons/influencer.png') }}" style="width:45px;"> </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">NFT Launchpad for Influencers</h3>
                                <p>Leverage your established presence with our NFT launchpad tailored for influencers. This solution allows influencers to effectively monetize their popularity and engage their audience through impactful NFT offerings.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin equalize">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s"
                            data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3"> <img class="lazy"
                                    src="{{ asset('images/nft_launch/icons/clapboard.png') }}" style="width:45px;"> </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">NFT Launchpad for the Film Industry</h3>
                                <p>Harness the expansive potential of the film industry with our NFT launchpad designed specifically for this sector. It provides comprehensive services and strategic influence, enabling film projects to make a significant impact in the crypto market.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="common_space">
            <div class="container-fluid">
                <div class="section-title underline text-center">
                    <div class="sec_tit">
                        <h2>Revolutionize Your NFT Journey with Our Advanced Launchpad</h2>
                    </div>
                </div>
                <div class="row container-center">
                    <div class="col-md-6 p-0 equalize">
                        <div class="pad red">
                            <div class="icon">
                                <img class="avatar-sm" class="lazy" src="{{ asset('images/nft_launch/icons/projects.webp') }}"
                                    src="images/nft_launch/icons/projects.webp">
                            </div>
                            <div class="section-title text-center">
                                <h3 class="common_h3 feature-tit">Streamlined NFT Project Launches</h3>
                            </div>
                            <p class="text-left">Our platform provides a tailored portfolio for each creator, enabling effortless NFT project launches and portfolio management. Creators can showcase their collections individually, allowing collectors to acquire curated artworks and build valuable NFT portfolios. This functionality also supports artists in reaching global audiences, tracking early supporters, and offering exclusive benefits, while collectors receive timely updates on new releases and drops.</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 equalize">
                        <div class="pad black">
                            <div class="icon">
                                <img class="avatar-sm" class="lazy" src="{{ asset('images/nft_launch/icons/community.png') }}"
                                    src="images/nft_launch/icons/community.webp">
                            </div>
                            <div class="section-title text-center">
                                <h3 class="common_h3 feature-tit">Enhanced Community Engagement</h3>
                            </div>
                            <p class="text-left">By offering a distinct portfolio for creators, our platform fosters a dedicated community of collectors eager to acquire exclusive NFTs. Collectors are drawn back to unique portfolios, creating lasting engagement and increasing community momentum. Additionally, the platform delivers added perks such as early notifications, airdrops, and exclusive NFT releases, further enriching the collector experience.</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 equalize">
                        <div class="pad black">
                            <div class="icon">
                                <img class="avatar-sm" class="lazy" src="{{ asset('images/nft_launch/icons/low-costs.png') }}"
                                    src="images/nft_launch/icons/transaction.webp">
                            </div>
                            <div class="section-title text-center">
                                <h3 class="common_h3 feature-tit">Reduced Transaction Costs</h3>
                            </div>
                            <p class="text-left">Our launchpad leverages multiple blockchain networks and Ethereum Layer 2 solutions to facilitate low-cost minting with minimal gas fees. As Ethereum experiences increased NFT traffic and associated congestion, our platform mitigates these issues with advanced technologies, ensuring a smooth and cost-effective minting process.</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 equalize">
                        <div class="pad red">
                            <div class="icon">
                                <img class="avatar-sm" class="lazy" src="{{ asset('images/nft_launch/icons/investment.webp') }}"
                                    src="images/nft_launch/icons/investment.webp">
                            </div>
                            <div class="section-title text-center">
                                <h3 class="common_h3 feature-tit">Maximized Investment Returns</h3>
                            </div>
                            <p class="text-left">NFTs are prized assets in the crypto market due to their distinctive features and growing value. Our launchpad guarantees NFT authenticity and manages scarcity to drive demand, enhancing your NFT's market value. By minting and managing unique portfolios, you can achieve higher returns and attract substantial traffic, as collectors are willing to invest significantly in rare and authentic digital assets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="common_spacing">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center" style="width: 100%">
                        <div class="sec_tit mb20">
                            <h3 class="section-title underline mb20">Strategic Advantages of NFT Launchpad Development</h3>
                        </div>
                    </div>
                    <div class="testimonials-wrapper container-center mt50">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize aos-init aos-animate"
                            data-aos="fade-right" data-aos-delay="200">
                            <div class="testimonials-item">
                                <div class="user">
                                    <i class=" "><img class="lazy" src="{{ asset('images/nft_launch/icons/audience.webp') }}">
                                    </i>
                                </div>
                                <div class="testimonials-content">
                                    <h3 class="user-name">Expansive Audience Reach</h3>
                                    <div class="txt">
                                        <p>Our NFT launchpad empowers creators to manage dedicated portfolios for minting and listing their NFTs. Through strategic marketing, your project gains global visibility and attracts a substantial audience. This unique portfolio not only builds a dedicated fanbase and loyal community but also drives significant traffic to your launchpad, ensuring enhanced exposure and liquidity for your NFTs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize aos-init aos-animate"
                            data-aos="fade-right" data-aos-delay="200">
                            <div class="testimonials-item">
                                <div class="user">
                                    <i class=" "><img class="lazy" src="{{ asset('images/nft_launch/icons/legacy.webp') }}">
                                </div>
                                <div class="testimonials-content">
                                    <h3 class="user-name">Enduring Legacy and Financial Rewards</h3>
                                    <div class="txt">
                                        <p>The prestige and recognition that come with our launchpad elevate your brand, enabling you to push creative boundaries and set new trends in the NFT space. This visibility helps establish a lasting legacy for your work. Additionally, our platform ensures that creators receive ongoing royalty payments for every transaction of their NFTs, providing continuous financial support as your NFTs gain value and popularity.
                                        </p>
                                    </div>
                                </div>
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
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR EXPERTS</span></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="intro_cnt common_spacing"
            style="background: linear-gradient(90deg,#7736b7 0%,#7927c3 35%,rgba(139,56,186,.86628154679841) 100%);">
            <div class="container">
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <img src="{{ asset('images/nft_launch/img-3.webp') }}" alt="Reliable NFT Launchpad"
                        title="Reliable NFT Launchpad">
                </div>

                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                    <div class="section-title text-left underline">
                        <div class="sec_tit">
                            <h2 class="text-white">Why BAF’s NFT Launchpad Sets the Standard for Excellence</h2>
                        </div>
                    </div>
                    <p class="mt30 text-left text-white">Drawing on our groundbreaking expertise in blockchain technology and a track record of client satisfaction worldwide, Blockchain App Factory is leading the charge in the NFT realm with a suite of innovative services designed to revolutionize the market. Our deep understanding of NFT development and the keen interest of business leaders eager to explore the NFT space underscore the transformative power of NFTs.</p>
                    <p class="mt30 text-left text-white">NFTs are reshaping the landscape for artists, musicians, and creators, offering them unprecedented opportunities to monetize their work. This dynamic market is bustling with entrepreneurs and investors eager to make their mark in the crypto world. Our NFT launchpad is crafted to streamline the creation and sale of NFTs, addressing common challenges and attracting creators eager to capitalize on this burgeoning field. Developing an NFT launchpad represents a lucrative and strategic business opportunity in today’s versatile market.</p>
                </div>

            </div>
        </section>

        <section class="space-pt bg-dark-half-md tech-padding teck" style="padding: 60px 0;">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <div class="section-title text-center ">
                        <h3 class="common_h3 ">Our Development Solutions Are Enhanced By</h3>
                        <hr>
                    </div>
                </div>
                <div class="row mt20">
                    <div class="col-sm-12">
                        <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                            data-aos-duration="500">
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/cross-chain.webp') }}" alt="Cross-chain"> </div> <a
                                    href="#" class="category-title" alt>Cross-Chain Connectivity</a>
                            </div>
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/custom-multichain.webp') }}" alt="Multichain">
                                </div> <a href="#" class="category-title" alt>Multichain Excellence</a>
                            </div>
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/integration.png') }}" alt="Integration"> </div> <a
                                    href="#" class="category-title" alt>Seamless Third-Party Wallet Integration</a>
                            </div>
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/reliable.webp') }}" alt="Reliable"> </div> <a
                                    href="#" class="category-title" alt>Dependable Platform Infrastructure</a>
                            </div>
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/robust.webp') }}" alt="Robust"> </div> <a href="#"
                                    class="category-title" alt>Dynamic Ecosystem Design</a>
                            </div>
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/customization.png') }}" alt="Customizable"> </div>
                                <a href="#" class="category-title" alt>Tailored Customization</a>
                            </div>
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/traffic-light.svg') }}" alt="Traffic"> </div> <a
                                    href="#" class="category-title" alt>Advanced Traffic Generation</a>
                            </div>
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/marketing.png') }}" alt="Marketing"> </div> <a
                                    href="#" class="category-title" alt>Strategic Marketing Expertise</a>
                            </div>
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/hack.webp') }}" alt="Hacking"> </div> <a href="#"
                                    class="category-title" alt>Innovative Growth Hacking</a>
                            </div>
                            <div class="category-item aos-item">
                                <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                        src="{{ asset('images/nft_launch/icons/community.png') }}" alt="Community"> </div> <a
                                    href="#" class="category-title" alt>Community Engagement Strategies</a>
                            </div>
                        </div>
                        <br>
                        <div class="contentall" align="center">
                            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"
                                href="#"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                            <a href="{{ url('consultation') }}" rel="nofollow" class="nec-btn"
                                style="border-radius: 30px !important; text-transform:none !important;">Consult with Our Specialists</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- simple-faqs.blade --}}
        @include('static.simple-faqs-section', [
            'faqs' => [
                [
                    'ques' => "What Defines an NFT Launchpad?",
                    'ans' => "An NFT Launchpad is a platform designed to facilitate the creation, minting, and promotion of NFTs. It provides tools for artists and creators to showcase and distribute their digital assets, while also offering marketing and community-building features to boost visibility and sales."
                ],
                [
                    'ques' => "Where Can One Find a Top-Notch NFT Launchpad?",
                    'ans' => "To discover the most effective NFT launchpad, look for platforms with a strong reputation, comprehensive features, and positive user feedback. Leading providers often offer a blend of advanced technology, robust support, and strategic marketing tools."
                ],
                [
                    'ques' => "What Advantages Come with Owning an NFT Launchpad?",
                    'ans' => "Acquiring an NFT launchpad offers significant benefits, including streamlined NFT creation and management, enhanced exposure for your projects, and access to a broad audience. It also provides tools for community engagement and strategic marketing, driving growth and profitability."
                ],
                [
                    'ques' => "What Steps Are Involved in Creating an NFT Launchpad?",
                    'ans' => "Building an NFT launchpad involves several key steps: defining your platform's features and objectives, integrating necessary technology and third-party services, developing a user-friendly interface, and implementing marketing strategies to attract creators and collectors."
                ],
            ],
        ])
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