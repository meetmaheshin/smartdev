@extends('layouts.static')
    @section('title', 'NFT Studio')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
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
    h3.section-title {
        color: #333;
    }

    .bg_02 {
        font-size: 44px !important;
    }

    .bg_1 {
        background-image: linear-gradient(45deg, #0000007d, transparent), url('{{ asset('images/nft_studio/banner.jpg') }}');
        background-size: cover;
        padding-top: 138px;
        background-attachment: fixed;
        padding-bottom: 130px;
        /*  height: 100vh;*/
    }

    .bg_1 h3 {
        font-size: 20px !important;
    }

    .bg_1 .bg_content {
        padding-top: 90px;
    }

    .bg_1 .bg_content h1 {
        font-size: 80px;
        font-weight: 600;
        color: #fff;
        line-height: 1.3;
    }

    .text_d {
        color: #000;
    }

    .text_w {
        color: #fff;
    }

    .para {
        font-weight: 600;
    }

    .mt163 {
        margin-top: 163px;
    }

    .vcenter-item {
        display: flex;
        align-items: center;
    }

    @media (min-width: 999px) {
        .bg_5.d-none {
            display: block;
        }

        .bg_55.d-none {
            display: none;
        }
    }

    @media (max-width: 998px) {
        .bg_55.d-none {
            display: block;
        }

        .bg_5.d-none {
            display: none;
        }
    }

    @media (max-width: 992px) {
        .bg_1 {
            height: auto !important;
        }
    }

    @media (max-width: 768px) {
        .d-flex {
            display: block !important;
        }
    }

    @media (max-width: 600px) {
        .bg_1 .bg_content h1 {
            font-size: 40px !important;
            font-weight: 600;
            color: #fff;
            line-height: 1.3;
            margin-top: 100px;
        }
    }

    .bg_02 {
        font-family: 'Caveat', cursive;
        font-size: 27px;
        color: #ffeb3b;
        line-height: 1.6;
    }
</style>

<div>
    <!-- NFT Studio -->
    <section class="bg_1 common_spacing">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-6 text-left">
                    <div class="bg_content">
                        <h1 class="bnr_txt">NFT STUDIO</h1>
                        <h3 class="text_w text-left para">Partnering with top-tier artists and development specialists to create cutting-edge generative NFTs. Our advanced algorithms effortlessly handle diverse NFT creations with unmatched precision.</h3>
                        <h5 class="text_w bg_02">“Step into the Infinite Virtual Realm of Artistic NFTs!”</h5>
                        <div class="mt20"> 
                            <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button gra"><span>Explore Our Exclusive Packages</span></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        .right_bg {
            background-image: url(images/nft_studio/bg-2.webp);
            background-size: cover;
            padding-top: 138px;
            padding-bottom: 0px;
            height: 100vh;
        }

        .d-flex {
            display: flex;
        }

        .bg_black {
            background: #000;
            color: #fff;
        }

        .bg_vio {
            background: #210228;
            color: #fff;
        }

        .bg_white {
            background: #103754;
            color: #fff;
        }

        .nopadding {
            padding: 0 !important;
            margin: 0 !important;
        }

        .p-40 {
            padding: 40px;
        }

        .w-100 img {
            width: 100%;
            height: 100%;
        }

        .bg_2 .content h2 {
            font-size: 50px;
            font-weight: 600;
            margin-bottom: 19px;
        }

        @media screen and (max-width: 500px) {
            .bg_2 .content h2 {
                font-size: 29px;
            }

            .bg_3.common_spc {
                padding-top: 50px !important;
            }

            .bg_3 h5 {
                text-align: center;
            }

            .bg_4 h2 {
                font-size: 28px !important;
            }

            .bg_6 h2 {
                font-size: 25px !important;
            }

            .bg_7 .content h2 {
                font-size: 24px !important;
            }

            .row.pad {
                padding-top: 40px !important;
                padding-bottom: 0px !important;
            }
        }

        .bg_2 {
            background: #210228;
        }

        .bg_2 h5 {
            font-family: 'Caveat', cursive;
            font-size: 27px;
            color: #70ccd0;
            line-height: 1.6;
        }

        .gra {
            background: linear-gradient(45deg, #673ab7, #e91e63);
            border-radius: 50px;
        }

        .gra:hover {
            background: #2196f3 !important animation: swoosh 0.4s ease-out 0.2s;
        }

        .cln {
            padding: 10px 20px !important;
            font-size: 14px;
        }

        @media screen and (max-width: 425px) {
            .bg_3 h2 {
                font-size: 27px !important;
                text-align: center;
            }

            .bg_3 h5 {
                font-size: 36px !important;
                text-align: center;
                margin-bottom: 20px;
            }
        }
    </style>
    <section class="bg_2">
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-lg-6 col-md-6 col-sm-12 vcenter-item bg_vio nopadding">
                    <div class="content p-40">
                        <h2 class="text_w">Generative Arts</h2>
                        <h4 class="text_w">The NFT scene buzzes with quirky avatars and pixelated punks, but the real revolution lies in Generative Arts. Crafted from a dynamic blend of artistic designs and elements from curated libraries, these creations are dominating the NFT landscape. Despite their rapid production—be it 10,000 or 20,000 variations—each piece remains entirely distinct and unparalleled.</h4>
                        <h5 class="text_w">"Dive in and prepare for an astonishing journey."</h5>
                        <div class="mt40"> 
                            <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button gra cln"><span>Connect with Our Experts</span></a> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 nopadding">
                    <div class="w-100"> <img src="{{ asset('images/nft_studio/bg-2.jpg') }}" alt="Generative Art NFTs"
                            title="Generative Arts"> </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        section#counter-stats {
            /* display: flex; */
            justify-content: center;
            margin-top: 0;
            padding: 0 !important;
            background: rgb(26 26 26);
            color: #fff;
        }


        .stats {
            text-align: center;
            font-size: 28px;
            font-weight: 700;
            padding: 1rem 0;

        }

        .stats .fa {
            color: #008080;
            font-size: 60px;
        }

        .stats p {
            font-size: 14px;
            margin-bottom: 0;
        }

        #counter-stats .stats:nth-child(1) {
            background: #00cbd7;
        }

        #counter-stats .stats:nth-child(2) {
            background: #14e5f1;
        }

        #counter-stats .stats:nth-child(3) {
            background: #00cbd7;
        }

        #counter-stats .stats:nth-child(4) {
            background: #14e5f1;
        }


        /* AUTHOR LINK */
    </style>
    <style type="text/css">
        .category-item.aos-item:hover .text-center {
            position: relative;
            z-index: 99;
            color: #000 !important;
        }
    </style>
    <section class="bg_3 common_spc" style="background: #b94a23;padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text_w bg_02">"What We Excel At & What We No Longer Do"</h5>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 vstart-item">
                    <div class="content">
                        <h2 class="text_w">Handcrafted Art Library</h2>
                        <p class="text_w">Our Generative NFTs are built upon a meticulously curated art library, where each theme and design is meticulously crafted by top-tier artists. We’ve selected the finest talent in the industry to ensure that our art library is nothing short of exceptional.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="center_img"> <img src="{{ asset('images/nft_studio/paint.webp') }}" alt="NFT Studio"
                            title="Hand made Art library"> </div>
                </div>

                <div class="col-md-4 vend-item mt40" style="padding-top: 60px;">
                    <div class="content">
                        <h2 class="text_w">Tailored Environments Just for You</h2>
                        <p class="text_w">Whether you’re envisioning a captivating story or a unique character, we’ve got you covered. Choose your theme and let us handle the intricate details. Whether you’re adding a new theme or crafting a fresh storyline, we’re here to bring your vision to life with unparalleled precision and creativity. From creating dynamic environments to integrating striking features, we are committed to making your ideas a reality.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        .ld-flipbox-inner,
        .ld-flipbox-face,
        .ld-flipbox-wrap {
            width: 100%;
            min-height: inherit;
            border-radius: inherit;
        }

        .ld-flipbox-inner {
            display: -webkit-box;
            display: flex;
            -webkit-box-flex: 1;
            flex: 1 auto;
            padding: 40px 15px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .ld-flipbox-inner h1,
        .ld-flipbox-inner h2,
        .ld-flipbox-inner h3,
        .ld-flipbox-inner h4,
        .ld-flipbox-inner h5,
        .ld-flipbox-inner h6 {
            color: inherit;
        }

        .ld-flipbox-inner:last-child {
            margin-bottom: 0;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            line-height: 1.8;
        }

        .ld-flipbox-inner h4.font-weight-normal {
            font-size: 23px;
            line-height: 1.4;
        }

        .ld-flipbox-face {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -webkit-box-align: stretch;
            align-items: stretch;
            background-size: cover;
            background-position: center;
            background-color: #090909;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .ld-flipbox-wrap,
        .ld-flipbox-face {
            -webkit-transform-style: inherit;
            transform-style: inherit;
            -webkit-perspective: inherit;
            perspective: inherit;
        }

        .ld-flipbox-front .ld-flipbox-inner {
            -webkit-transform: translate3d(0, 0, 60px) scale(0.85);
            transform: translate3d(0, 0, 60px) scale(0.85);
        }

        .ld-flipbox-back {
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform: rotate3d(0, 1, 0, 180deg);
            transform: rotate3d(0, 1, 0, 180deg);
        }

        .ld-flipbox-back .ld-flipbox-inner {
            -webkit-transform: translate3d(0, 0, 60px) scale(0.95);
            transform: translate3d(0, 0, 60px) scale(0.95);
        }

        .ld-flipbox-bt .ld-flipbox-back,
        .ld-flipbox-tb .ld-flipbox-back {
            -webkit-transform: rotateY(-180deg) rotateZ(-180deg);
            transform: rotateY(-180deg) rotateZ(-180deg);
        }

        .ld-flipbox-wrap {
            position: relative;
            -webkit-transition-property: box-shadow, -webkit-transform;
            transition-property: box-shadow, -webkit-transform;
            transition-property: box-shadow, transform;
            transition-property: box-shadow, transform, -webkit-transform;
            -webkit-transition-duration: 0.6s;
            transition-duration: 0.6s;
            -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .ld-flipbox-shadow .ld-flipbox-wrap {
            box-shadow: 0 50px 60px rgba(0, 0, 0, 0.15);
        }

        .ld-flipbox-bt.ld-flipbox-shadow:hover .ld-flipbox-wrap,
        .ld-flipbox-tb.ld-flipbox-shadow:hover .ld-flipbox-wrap {
            box-shadow: 0 -50px 60px rgba(0, 0, 0, 0.15);
        }

        .ld-flipbox {
            display: -webkit-box;
            display: flex;
            min-height: 327px;
            margin-bottom: 32px;
            position: relative;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-perspective: 1200px;
            perspective: 1200px;
        }

        .ld-flipbox:hover .ld-flipbox-wrap {
            -webkit-transform: rotate3d(0, 1, 0, 180deg);
            transform: rotate3d(0, 1, 0, 180deg);
            -webkit-transform-origin: 50% 50% !important;
            transform-origin: 50% 50% !important;
        }

        .ld-flipbox:hover.ld-flipbox-rl .ld-flipbox-wrap {
            -webkit-transform: rotate3d(0, -1, 0, 180deg);
            transform: rotate3d(0, -1, 0, 180deg);
        }

        .ld-flipbox:hover.ld-flipbox-bt .ld-flipbox-wrap {
            -webkit-transform: rotate3d(1, 0, 0, 180deg);
            transform: rotate3d(1, 0, 0, 180deg);
        }

        .ld-flipbox:hover.ld-flipbox-tb .ld-flipbox-wrap {
            -webkit-transform: rotate3d(-1, 0, 0, 180deg);
            transform: rotate3d(-1, 0, 0, 180deg);
        }

        .ld-flipbox:hover.ld-flipbox-shadow-onhover .ld-flipbox-wrap {
            box-shadow: 0 50px 60px rgba(0, 0, 0, 0.15);
        }

        .ld-flipbox:hover.ld-flipbox-shadow-onhover.ld-flipbox-bt .ld-flipbox-wrap,
        .ld-flipbox:hover.ld-flipbox-shadow-onhover.ld-flipbox-tb .ld-flipbox-wrap {
            box-shadow: 0 -50px 60px rgba(0, 0, 0, 0.15);
        }

        .is-ie .ld-flipbox-face,
        .is-ie .ld-flipbox-face .ld-flipbox-inner {
            -webkit-transform: none;
            transform: none;
        }

        .is-ie .ld-flipbox-back {
            opacity: 0;
            visibility: hidden;
            -webkit-transition: opacity 0.3s, visibility 0.3s;
            transition: opacity 0.3s, visibility 0.3s;
        }

        .is-ie .ld-flipbox:hover .ld-flipbox-wrap {
            -webkit-transform: none !important;
            transform: none !important;
        }

        .is-ie .ld-flipbox:hover .ld-flipbox-back {
            opacity: 1;
            visibility: visible;
        }

        .ld-flipbox-overlay.ld-overlay {
            background-color: rgba(23, 20, 20, 0.42) !important;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .bg_4 {
            background-image: url(images/nft_studio/bg03.webp);
            background-size: cover;
            background-attachment: fixed;
        }

        .bg_4 h2 {
            font-size: 34.46px;
            font-weight: bold !important;
        }
    </style>
    {{-- <div id="industry-uses" class="industrial-sec1 bg_4">
        <div class="container-fluid">
            <div class="section-title text-center ">
                <h2 class="common_h3 text_w">Stratification of Generative NFT</h2>
                <hr>
            </div>
            <div class="row mt50">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="lqd-column">
                        <div class="ld-flipbox round">
                            <div class="ld-flipbox-wrap">
                                <div class="ld-flipbox-face ld-flipbox-front"
                                    style="background-image: url(images/nft_studio/img_1.webp);"> <span
                                        class="ld-flipbox-overlay ld-overlay bg-fade-dark-015"></span>
                                    <div class="ld-flipbox-inner">
                                        <div class="iconbox iconbox-xl iconbox-icon-animating">
                                            <h4 class="font-weight-normal">Anime Characters </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ld-flipbox-face ld-flipbox-back"> <span
                                        class="ld-flipbox-overlay ld-overlay"></span>
                                    <div class="ld-flipbox-inner">
                                        <p class="text-fade-white-07">The Fond on Anime’s characters and binge watch on
                                            Anime is growing up countless. What if you can make your own favorite Anime
                                            character as generative NFT, that gets you deals to make you float in
                                            fortune? Suit up And pick the character, we’ll handle the rest.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="lqd-column">
                        <div class="ld-flipbox round">
                            <div class="ld-flipbox-wrap">
                                <div class="ld-flipbox-face ld-flipbox-front"
                                    style="background-image: url(images/nft_studio/img_2.webp);"> <span
                                        class="ld-flipbox-overlay ld-overlay bg-fade-dark-015"></span>
                                    <div class="ld-flipbox-inner">
                                        <div class="iconbox iconbox-xl iconbox-icon-animating">
                                            <h4 class="font-weight-normal">Avatars </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ld-flipbox-face ld-flipbox-back"> <span
                                        class="ld-flipbox-overlay ld-overlay"></span>
                                    <div class="ld-flipbox-inner">
                                        <p class="text-fade-white-07">Generative NFTs are dominated by avatars and wanna
                                            get into the race and ace up? Find your avatar, it can be anything from a
                                            “grandpa or papa” to a “demon or blade”. Simple, we make Generative NFT with
                                            both cool looks and evil looks, tons of avatars based on your choice .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="lqd-column">
                        <div class="ld-flipbox round">
                            <div class="ld-flipbox-wrap">
                                <div class="ld-flipbox-face ld-flipbox-front"
                                    style="background-image: url(images/nft_studio/img_3.webp);"> <span
                                        class="ld-flipbox-overlay ld-overlay bg-fade-dark-015"></span>
                                    <div class="ld-flipbox-inner">
                                        <div class="iconbox iconbox-xl iconbox-icon-animating">
                                            <h4 class="font-weight-normal">Theme Based NFT or Assets </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ld-flipbox-face ld-flipbox-back"> <span
                                        class="ld-flipbox-overlay ld-overlay"></span>
                                    <div class="ld-flipbox-inner">
                                        <p class="text-fade-white-07">Got your own theme in mind and looking for the
                                            perfect crew to visualize them as Generative NFT? You pulled the right
                                            string. Our well-furnished art crew will create an art library based on your
                                            theme of imagination and we will be the wunderkinder in generating the NFTs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="lqd-column">
                        <div class="ld-flipbox round">
                            <div class="ld-flipbox-wrap">
                                <div class="ld-flipbox-face ld-flipbox-front"
                                    style="background-image: url(images/nft_studio/img_4.webp);"> <span
                                        class="ld-flipbox-overlay ld-overlay bg-fade-dark-015"></span>
                                    <div class="ld-flipbox-inner">
                                        <div class="iconbox iconbox-xl iconbox-icon-animating">
                                            <h4 class="font-weight-normal">Arsenal </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ld-flipbox-face ld-flipbox-back"> <span
                                        class="ld-flipbox-overlay ld-overlay"></span>
                                    <div class="ld-flipbox-inner">
                                        <p class="text-fade-white-07">Reach of Weapons and tactics among the common have
                                            a very good influence from the RPG and Multiplayer games. Imagine an Arsenal
                                            with tons of weapons and every one of them has its own camouflage or cool
                                            attachments. Get the imagination into reality and make your generative NFTs
                                            in the arsenal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="lqd-column">
                        <div class="ld-flipbox round">
                            <div class="ld-flipbox-wrap">
                                <div class="ld-flipbox-face ld-flipbox-front"
                                    style="background-image: url(images/nft_studio/img_5.webp);"> <span
                                        class="ld-flipbox-overlay ld-overlay bg-fade-dark-015"></span>
                                    <div class="ld-flipbox-inner">
                                        <div class="iconbox iconbox-xl iconbox-icon-animating">
                                            <h4 class="font-weight-normal">Comic Characters </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ld-flipbox-face ld-flipbox-back"> <span
                                        class="ld-flipbox-overlay ld-overlay"></span>
                                    <div class="ld-flipbox-inner">
                                        <p class="text-fade-white-07">Supercool suits and alluring appeals are major
                                            perks of comic characters. The comics have at least 150+ years of legacies
                                            and millions of regular followers. They colonize the fictional film with
                                            their universe. Superheroes and characters of comics as Generative NFT look
                                            snappy, don't they? </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="lqd-column">
                        <div class="ld-flipbox round">
                            <div class="ld-flipbox-wrap">
                                <div class="ld-flipbox-face ld-flipbox-front"
                                    style="background-image: url(images/nft_studio/img_6.webp);"> <span
                                        class="ld-flipbox-overlay ld-overlay bg-fade-dark-015"></span>
                                    <div class="ld-flipbox-inner">
                                        <div class="iconbox iconbox-xl iconbox-icon-animating">
                                            <h4 class="font-weight-normal">Animals </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ld-flipbox-face ld-flipbox-back"> <span
                                        class="ld-flipbox-overlay ld-overlay"></span>
                                    <div class="ld-flipbox-inner">
                                        <p class="text-fade-white-07">Capture, seize and mint generative NFT of any
                                            animals, all it takes is just some time to think. Pick the animal, and let
                                            us handle the rest. We mint Generative NFT based on what you need. Making
                                            them funny cartoons or pixelated devils. We have no “Nos ”. So, gear up and
                                            get in.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <style type="text/css">
        .bg_55 .box {
            background: #A3B900;
            padding: 25px;
            border-radius: 12px;
            /*  box-shadow: 0 0 14px 8px #eee;*/
            margin-bottom: 25px;
            color: white;
            font-size: 13px;
        }

        .bg_55 .box h3 {
            font-weight: 600;
            color: white;
        }

        .bg_55 {
            background-image: linear-gradient(45deg, transparent, transparent), url(images/nft_studio/bg03.webp);
            background-size: cover;
            height: auto;
        }
    </style>
    <section class="bg_55 common_spacing d-none mt10">
        <div class="container">
            <div class="section-title text-center ">
                <h3 class="common_h3">NFT Studio Process </h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="box">
                        <h3>Concept Development</h3>
                        <p>Enhance your generative NFTs with compelling stories and captivating themes to elevate their appeal. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <h3>Generative Creation</h3>
                        <p>Utilize our advanced generative NFT algorithm to produce your unique assets based on our curated art library.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <h3>Launch and Deployment</h3>
                        <p>Take advantage of our launch platform to smoothly initiate and deploy your generative NFTs, ensuring a seamless trading experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg_5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 nopadding"> <img src="{{ asset('images/nft_studio/web-process-dsign.png') }}" width="100%"
                        alt="NFT Studio Process" title="NFT Studio Process"> </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        .row.bg_color_1 {
            background: #103754;
        }

        .row.bg_color_2 {
            background: #A3B900;
        }

        .row.bg_color_3 {
            background: #FEA636;
        }

        .row.pad {
            padding: 40px 20px;
        }

        .bg_6 h2 {
            font-size: 40px;
            font-weight: 600;
        }

        .bg_6 p {
            font-size: 21px;
            line-height: 1.6;
        }

        .mt-20 {
            margin-top: 20px;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .bg-dark-half-md {
            background: #1b002b;
            width: 100%;
            display: inline-block;
            padding: 100px 0;
        }

        .category-grid-style-01 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            background: #fff;
            -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
            box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
            border-radius: 5px;
        }

        .teck .category-grid-style-01 .category-item {
            padding: 30px;
            text-align: center;
            width: 25%;
            border-right: 1px solid #eee;
            border-bottom: 1px solid #eee;
            position: relative;
            cursor: pointer;
        }

        .teck .category-grid-style-01 .category-item:before {
            content: "";
            background: #fff;
            width: 110%;
            height: 110%;
            display: inline-block;
            position: absolute;
            left: -5%;
            top: -5%;
            z-index: 1;
            opacity: 0;
            -webkit-transform: scale(.96);
            transform: scale(.96);
            transition: all .3s ease-in-out;
        }

        .teck .category-grid-style-01 .category-item .category-icon {
            color: #333;
            font-size: 44px;
            line-height: 1;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }

        @media screen and (max-width:768px) {
            .teck .category-grid-style-01 .category-item {
                width: 50% !important
            }
        }

        .category-grid-style-01 .category-item:hover:before {
            -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
            box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
            transition: all .3s ease-in-out;

        }

        .projectFactsWrap {
            display: flex;
            margin-top: 0px;
            flex-direction: row;
            flex-wrap: wrap;
        }

        #projectFacts .fullWidth {
            padding: 0;
        }

        .projectFactsWrap .item {
            width: 33.3%;
            height: 100%;
            padding: 30px 0px;
            text-align: center;
        }

        .projectFactsWrap .item:nth-child(1) {
            background: #321838;
        }

        .projectFactsWrap .item:nth-child(2) {
            background: #2f0638;
        }

        .projectFactsWrap .item:nth-child(3) {
            background: #390544;
        }

        .projectFactsWrap .item:nth-child(4) {
            background: rgb(23, 44, 66);
        }

        .projectFactsWrap .item p.number {
            font-size: 30px;
            padding: 0;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .projectFactsWrap .item p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 18px;
            margin: 0;
            padding: 10px;
            font-family: 'Open Sans';
        }


        .projectFactsWrap .item span {
            width: 60px;
            background: rgba(255, 255, 255, 0.8);
            height: 2px;
            display: block;
            margin: 0 auto;
        }


        .projectFactsWrap .item i {
            vertical-align: middle;
            font-size: 50px;
            color: rgba(255, 255, 255, 0.8);
        }


        .projectFactsWrap .item:hover i,
        .projectFactsWrap .item:hover p {
            color: white;
        }

        .projectFactsWrap .item:hover span {
            background: white;
        }

        @media (max-width: 786px) {
            .projectFactsWrap .item {
                flex: 0 0 50%;
            }
        }

        /* AUTHOR LINK */
    </style>
    <section class="bg_6">
        <div class="container-fluid">
            <div class="row bg_color_1 pad">
                <div class="section-title text-center" style="width: 100%">
                    <h2 class="common_h3 text_w">Marketing Services</h2>
                    <hr>
                </div>
            </div>
            <div class="row bg_color_1 d-flex pad">
                <div class="col-lg-6 text-center"> <img src="{{ asset('images/nft_studio/influencer.png') }}" alt="NFT Studio Development"
                        title="Influencing"> </div>
                <br>
                <div class="col-lg-6 vcenter-item mt-20">
                    <div class="content">
                        <h2 class="text_w">Influencer Outreach</h2>
                        <p class="text_w mt10">Leverage the power of influential voices to amplify your generative NFTs. We partner with top crypto influencers to create buzz and drive attention to your project.</p>
                    </div>
                </div>
            </div>
            <div class="row bg_color_2 d-flex pad">
                <div class="col-lg-6 vcenter-item">
                    <div class="content">
                        <h2 class="text_w">Media Promotion</h2>
                        <p class="text_w mt10">Capitalize on the media’s wide reach and immediate impact. We integrate your NFTs into media channels to highlight their value and boost public awareness.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center mb-20"> <img src="{{ asset('images/nft_studio/media_marketing.png') }}"
                        alt="NFT Platform for Artists" title="Media marketing"> </div>
            </div>
            <div class="row bg_color_3 d-flex pad">
                <div class="col-lg-6 text-center"> <img src="{{ asset('images/nft_studio/content_strategy.png') }}"
                        alt="Generative NFT Developer" title="Content marketing"> </div>
                <br>
                <div class="col-lg-6 vcenter-item">
                    <div class="content">
                        <h2 class="text_w">Content Strategy </h2>
                        <p class="text_w mt10">Compelling content is key to effective marketing. From PR and whitepapers to influencer collaborations and media campaigns, our expert writers craft powerful content that captivates and engages your audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        .left_bg {
            background-image: url(images/nft_studio/bg-7.webp);
            background-size: cover;
            padding-top: 138px;
            padding-bottom: 0px;
            height: 100vh;
        }

        .list {
            margin-top: 0rem;
            margin-bottom: 0rem !important;
            font-size: 20px;
            font-weight: 600;
            line-height: 1.6;
            text-indent: -17px;
            list-style: none;
        }

        .list li {
            word-break: break-word;
            margin-bottom: 10px;
        }

        .list li:before {
            content: " \f14a";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            color: #f77800;
            margin-right: 10px;
            font-size: 32px;
        }

        .bg_7 .content h2 {
            font-size: 50px;
            font-weight: 600;
            margin-bottom: 19px;
        }

        .bg_7 {
            background: #000;
        }

        .bg_7 h5 {
            font-family: 'Caveat', cursive;
            font-size: 27px;
            color: #70ccd0;
            line-height: 1.6;
        }
    </style>
    <section class="bg_7">
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-lg-6 col-md-6 col-sm-12 nopadding d-flex justify-content-center">
                    <div style="width: 50%"> 
                        <img src="{{ asset('images/nft_studio/bg-7.webp') }}" alt="Generative NFT Projects" title="Our Extended Features"> 
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 bg_white nopadding">
                    <div class="content p-40">
                        <h2 class="text_w">Our Top Highlights</h2>
                        <div class="row">
                            <div class="col-lg-6 mt10">
                                <ul class="list text_w">
                                    <li>Decentralized</li>
                                    <li>Secure</li>
                                    <li>Authentic</li>
                                    <li>Unchangeable</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 mt10">
                                <ul class="list">
                                    <li>Multichain Compatibility</li>
                                    <li>Cross-Chain Functionality</li>
                                    <li>Transparent</li>
                                    <li>Customizable</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        div#pricing-tabs {
            background: #090722;
            color: #fff;
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #103754;
        }

        .data table th {
            background: #103754 !important;
            color: #fff !important;
        }

        div#pricing-tabs h2,
        h3 {
            color: #fff;
        }

        @media (max-width: 767px) {
            .data table th:last-child {
                margin: 10px 0 0;
                display: table-cell;
                width: 100%;
            }

            .data table tbody tr:first-child th:last-child {
                transform: scale(1);
                box-shadow: 0 0 10px 0 rgb(0 0 0 / 30%);
            }
        }
    </style>
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