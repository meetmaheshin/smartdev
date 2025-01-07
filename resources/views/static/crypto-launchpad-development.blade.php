@extends('layouts.static')
    @section('title', 'Crypto Launchpad Development')
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
    .form-right input.submit_send {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #0b0d8b !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: 700 !important;
        padding: 10px 0 !important
    }

    .token-list {
        max-width: 935px;
        margin: 0 auto
    }

    .token-list li {
        background-color: #f9f9f9;
        margin-bottom: 15px;
        margin-right: 15px;
        padding: 3px 10px 4px 25px;
        border-left: 2px solid #999;
        background-image: url(images/sto/check-mark.svg);
        background-position: 5px 8px;
        background-size: 14px;
        background-repeat: no-repeat;
        color: #555
    }

    .types-sto.types-token h4 {
        font-size: 18px
    }

    .token-issuance-platform p {
        margin-bottom: 10px
    }

    .token-issuance-platform ul li {
        width: auto;
        float: none
    }

    .token-issuance-platform ul li i {
        color: #0b0d8b;
        font-size: 20px;
        margin-right: 5px;
        position: relative;
        top: 2px
    }

    .token-tech .flex-sec>div,
    .types-sto.types-token>div {
        border-bottom: 2px solid #00cd95;
        transition: .5s;
        box-shadow: 0 0 20px 0 rgba(116, 116, 116, .1)
    }

    .token-tech .flex-sec>div:hover,
    .types-sto.types-token>div:hover {
        box-shadow: 0 0 20px 0 rgba(116, 116, 116, .2);
        -webkit-box-shadow: 0 0 20px 0 rgba(116, 116, 116, .2);
        -moz-box-shadow: 0 0 20px 0 rgba(116, 116, 116, .2)
    }

    @media (min-width:992px) {
        .token-list li {
            width: 48%;
            float: left
        }
    }

    @media (max-width:767px) {
        .token-list {
            margin-top: 20px
        }
    }

    @media only screen and (min-width:480px) and (max-width:767px) {
        .banner {
            background: #1da591;
            background-size: cover;
            position: relative;
            height: 500px;
            overflow: hidden
        }

        .local_bitcoins {
            display: none !important
        }

        .large-header {
            position: relative;
            width: 100%;
            overflow: hidden;
            background-size: cover;
            background-position: center center;
            z-index: 1;
            background-color: transparent
        }
    }

    @media only screen and (max-width:479px) {
        .banner {
            background: #1da591;
            background-size: cover;
            position: relative;
            height: 500px;
            overflow: hidden
        }

        .mt60 {
            margin-top: 0 !important
        }

        .large-header {
            position: relative;
            width: 100%;
            overflow: hidden;
            background-size: cover;
            background-position: center center;
            z-index: 1;
            background-color: transparent
        }

        .local_bitcoins {
            display: none !important
        }
    }

    .sub_head {
        max-width: 900px;
        margin: 0 auto 30px
    }

    .asset-token:hover {
        background: #009688
    }

    @media (max-width:767px) {
        .data table tbody tr:first-child th:last-child {
            transform: none !important;
            box-shadow: 0 0 10px 0 rgb(0 0 0 / 30%)
        }
    }

    .tokenize {
        background: #fff
    }

    .features-tech:hover {
        background: #8bc34a;
        transition: all .5s ease-out
    }

    .features-tech h4 {
        font-weight: 700
    }

    .features-tech:hover h4 {
        color: #fff;
        font-weight: 700
    }

    .features-tech:hover p {
        color: #fff;
        font-weight: 700
    }

    @media screen and (max-width:500px) {
        .nec-btn {
            width: auto !important;
            padding: 10px 12px !important
        }

        .cta_mine {
            width: auto !important
        }
    }

    @media screen and (min-width:768px) {
        .investor-prospectus ul li {
            width: 25%
        }
    }

    .font_wei {
        font-weight: 700
    }

    body {
        color: #161515
    }

    .asset-token h3 {
        font-weight: 700
    }

    .asset-token:hover p {
        color: #fff
    }

    .asset-token:hover h3 {
        color: #fff
    }

    .asset-token:hover img {
        filter: brightness(0) invert(1)
    }

    @media screen and (max-width:360px) {
        .contentall h1 {
            font-size: 21px;
            line-height: 30px
        }
    }

    .spc li p i::before {
        margin-right: 10px !important
    }

    .spc li p {
        text-indent: -9px
    }

    @media only screen and (max-width:760px) {
        #one {
            order: 2
        }

        #two {
            order: 1
        }
    }

    .nec-btn {
        position: relative !important;
        color: #fff !important;
        border-radius: 30px !important;
        font-size: 11px;
        text-transform: uppercase !important;
        transform: scale(1.1, 1.1) !important;
        transition: all .3s ease-out 0s !important;
        background: linear-gradient(to right, rgb(205, 69, 255), rgb(115, 104, 255)) !important
    }

    .nec-btn:hover {
        transform: scale(1, 1) !important;
        color: #fff !important;
        background: #0b46d9 !important
    }

    .contentall a,
    a.home-talk-experts {
        padding: 10px 20px !important
    }

    a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
        margin-bottom: 15px !important;
        display: inline-block
    }

    @media screen and (min-width:500px) {
        a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
            margin-right: 26px !important
        }
    }

    .banner_content p {
        margin: 0 auto !important;
        padding-bottom: 10px
    }

    .nec-btn {
        background: #225ff6 !important;
    }
</style>

<style type="text/css">
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        letter-spacing: normal;
    }

    a[type="button"] {
        background: linear-gradient(to right, rgb(8 226 244), rgb(40 144 220)) !important;
    }

    .list-ico li p {
        margin-bottom: 0.5em;
        margin-top: 0.5em;
    }

    .banner-img {
        margin-top: 30px;
    }

    .simple-slide {
        padding: 60px 0 30px 0;
    }

    .simple-slide .btn {
        border-radius: 2px;
        padding: 8px 12px;
        color: #D18B49;
        font-size: 14px;
        font-weight: 500;
        text-decoration: none;
        text-transform: uppercase;
        transition: 0.5s ease;
    }

    .simple-slide .card {
        background: #FFFFFF;
        /*max-width: 400px;*/
        margin: 0px auto 30px;
        border-radius: 12px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        box-sizing: border-box;
        padding: 30px;
        text-align: center;
    }

    .simple-slide .products {
        position: relative;
        overflow: hidden;
        transition: 0.5s ease;
    }

    .simple-slide .product {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        visibility: hidden;
        transition: 0.5s ease;
    }

    .simple-slide .product.active {
        opacity: 1;
        visibility: visible;
    }

    .simple-slide .thumbnail {
        margin: 0 0 48px;
    }

    .simple-slide .title {
        margin: 0 0 12px;
        color: #D18B49;
        font-size: 24px;
        transition: 0.5s ease;
    }

    .simple-slide .description {
        margin: 0 0 48px;
    }

    .simple-slide .footer {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 30px -12px -12px;
        padding: 0;
    }

    [ripple] {
        z-index: 1;
        position: relative;
        overflow: hidden;
    }

    [ripple] .ripple {
        position: absolute;
        background: #FFFFFF;
        width: 60px;
        height: 60px;
        border-radius: 100%;
        transform: scale(0);
        -webkit-animation: ripple 2s;
        animation: ripple 2s;
    }

    @-webkit-keyframes ripple {
        0% {
            transform: scale(0);
            opacity: 0.2;
        }

        100% {
            transform: scale(20);
            opacity: 0;
        }
    }

    @keyframes ripple {
        0% {
            transform: scale(0);
            opacity: 0.2;
        }

        100% {
            transform: scale(20);
            opacity: 0;
        }
    }
</style>

<style type="text/css">
    .banner_content .contentall {
        margin-top: 130px !important;
    }

    .banner {
        background: linear-gradient(30deg, #191919, #191919, #191919, #bf0e87);
    }

    .banner:after {
        content: '';
        position: absolute;
        right: 20%;
        bottom: -10%;
        width: 350px;
        height: 350px;
        background: #6a01d4;
        filter: blur(100px);
    }

    .banner-overlay {
        position: absolute;
        top: -10%;
        left: -50%;
        width: 80%;
        height: 350px;
        border-radius: 50%;
        background: #f320c5;
        background: -o-linear-gradient(190deg, #0387fe 0%, rgba(115, 67, 210, 0) 100%);
        background: linear-gradient(260deg, #0387fe 0%, rgba(115, 67, 210, 0) 100%);
        -webkit-filter: blur(150px);
        filter: blur(100px);
    }


    .banner_content .contentall {
        margin-top: 85px;
        max-width: 1000px;
        margin: 81px auto 40px;
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
        margin: 15px 0px;
    }

    .mb30 {
        margin-bottom: 30px !important;
    }

    @media (max-width: 768px) {
        .banner_img img {
            max-width: 100%;
            margin-top: 0%;
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 50px;
        }
    }

    .contentall h1,
    .ban_tirt {
        margin-bottom: 10px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 32px;
        text-transform: capitalize;
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
        margin: 15px 0px;
    }

    @media (max-width: 768px) {

        .contentall h1,
        .ban_tirt {
            font-size: 25px !important;
        }
    }

    @media (max-width: 360px) {
        .contentall h1 {
            font-size: 20px;
            line-height: 24px;
        }
    }

    .card-desc p {
        min-height: auto !important;
    }

    .btn-card {
        position: relative !important;
        bottom: 0 !important;
        left: auto !important;
        right: auto !important;
        text-align: center !important;
        margin: 0 auto !important;
        display: block !important;
        max-width: 200px !important;
    }

    .banner_content .contentall {
        margin-top: 30px;
    }

    @media screen and (max-width: 768px) {
        .main {
            margin-top: 130px;
        }
    }

    @media screen and (max-width: 500px) {
        .banner-btn {
            text-align: center;
            width: 80%;
            margin: 0 auto !important;
        }

        .btn1 {
            margin-left: 3px !important;
            display: block !important;
        }
    }

    @media screen and (min-width: 1000px) {
        .btn1 {
            margin-left: 20px !important;
        }
    }

    .banner {
        padding-top: 80px;
        padding-bottom: 50px;
    }

    .ct_box {
        margin-top: 30px;
    }

    .banner_content p {
        font-size: 21px !important;
    }

    .contentall h1,
    .ban_tirt {
        font-size: 25px;
    }

    .sec_tit,
    .sec_tit h2 {
        font-size: 20px !important;
    }

    .col-md-3.col-sm-6.col-xs-12.adv_lr {
        margin-left: 0%;
    }

    .counters,
    .adv_fet,
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

    .cnt_box h4.sec_tit {
        font-size: 25px !important;
    }

    .cnt_box p {
        font-size: 17px;
        max-width: 800px;
        margin: 20px auto 20px;
        line-height: 1.6;
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

    h3.section-title {
        font-size: 25px;
        font-weight: bold;
        text-transform: capitalize;
    }

    .ban_form {
        background: #29292999;
        box-shadow: 0 0 10px #fff;
        max-width: 500px;
        margin: 0 auto;
        padding: 30px 30px 10px;
        border-radius: 5px;
    }

    .ban_form .form-group {
        margin-bottom: 20px;
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

    .ban_form label {
        display: none;
        font-size: 14px;
        margin-bottom: 7px;
        padding-left: 0 !important;
    }

    .ban_form input#phone_banner {
        color: #000;
        width: 100%;
        border: none;
        box-shadow: none;
        background: #225ff612;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .submit_btn_b button.common_send_btn {
        display: inline-block;
        margin-top: 10px;
        background: #000;
        border-radius: 4px;
        border: 1px solid #fff;
        padding-left: 40px;
        padding-right: 40px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 0;
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

    @media (max-width: 1199px) {

        .contentall h1,
        .ban_tirt {
            font-size: 30px;
        }
    }

    .contentall h1,
    .ban_tirt {
        margin-bottom: 10px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 32px;
        text-transform: capitalize;
    }

    .contentall p {
        font-weight: normal;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 19px;
        max-width: 800px;
        margin: 0 auto 30px;
        display: block;
    }


    .featured-icon-box.style3 .featured-desc:after {
        position: absolute;
        content: '';
        width: 0;
        height: 0;
        border-bottom: 34px solid #08e2f4;
        border-left: 30px solid transparent;
        right: 0px;
        bottom: 0px;
        transition: .7s all ease;
    }

    .featured-icon-box.style3:after {
        content: '';
        position: absolute;
        height: 2px;
        left: 0px;
        right: auto;
        top: 0;
    }

    .featured-icon-box.style3:after,
    .featured-icon-box.style3:before {
        content: '' !important;
        position: absolute;
        height: 2px;
        left: 0px;
        width: 100px;
        right: auto;
        top: 0;
        transition: .7s all ease;
    }


    .featured-icon-box.style3 .featured-title h3 {
        font-size: 20px;
        line-height: normal;
        margin: 15px 0 10px;
    }

    .featured-icon-box.style3:before {
        background-color: #08e2f4;
    }

    .featured-icon-box.style3 .cmt-icon.cmt-icon_element-size-lg {
        margin-bottom: 0px;
    }

    .featured-icon-box.style3:after,
    .featured-icon-box.style3:before {
        content: '' !important;
        position: absolute;
        height: 2px;
        left: 0px;
        width: 100px;
        right: auto;
        top: 0;
        transition: .7s all ease;
    }

    .featured-icon-box.style3 {
        padding: 25px;
        /*            min-height: 355px;*/
    }

    .featured-icon-box.style3:hover {
        border-left: 2px solid #350068;
        transition: .1s all ease;
    }

    .featured-icon-box.style3 {
        position: relative;
        margin: 15px 0;
        background-color: #225ff612;
    }

    .indus-box {
        border-radius: 15px;
    }

    .blog-img-box {
        border-radius: 15px 15px 0 0;
    }

    .faq-content #accordion a[data-toggle=collapse]::before {
        background: #0b0d8b;
    }

    .gray_bg,
    .gray-bg {
        background: #225ff612;
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
        background: linear-gradient(90deg, #2028a5 0%, #2028a5 35%, #1dc2e1 100%);
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
        margin-top: -10px;
    }

    .testimonials-item .testimonials-content {
        background: #225ff612;
        overflow: hidden;
        box-shadow: 3px 3px 0px 0px #eff4fe;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        position: relative;
        height: 100%;
        min-height: auto;
        border: 1px solid #eff4fe;
    }

    .testimonials-item .testimonials-content:before {
        content: '';
        background: linear-gradient(90deg, #2028a5 0%, #2028a5 35%, #1dc2e1 100%);
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
        background: #225ff612 !important;
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
        margin-top: 40px !important;
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

    .ben_wrap span img {
        width: 60px;
        position: relative;
        margin-top: 10px;
    }

    .bent_cnt {
        padding-left: 100px;
        padding-top: 0px;
        padding-bottom: 10px;
    }

    .ben_wrap {
        padding-right: 15px;
        position: relative;
        margin-bottom: 0px;
    }

    .ben_wrap h5 {
        font-weight: 700;
        font-size: 18px;
        margin-top: 0px;
        line-height: normal;
    }

    div#why_ben {
        padding-bottom: 10px
    }

    .ben_wrap span {
        background: #eff4fe;
        width: 80px;
        text-align: center;
        margin-right: 15px;
        position: absolute;
        height: 80px;
        left: 0;
        border-radius: 7px;
    }

    .timeline::before {
        background: none;
    }

    /*-- Welcome Content --*/
    .welcome-content {
        background: #fff;
        padding: 60px 0px;
    }

    .welcome-content ul {
        display: flex;
        flex-wrap: wrap;
        margin: 0px;
        padding: 0px;
        color: #000;
        justify-content: center;
    }

    .welcome-content ul li {
        width: 32%;
        margin: 0.5%;
        border: 1px solid #eee;
        display: grid;
        grid-template-columns: 70px 80%;
        padding: 10px;
        align-items: center;
        text-align: center;
    }

    .welcome-content ul li .icons {
        width: 50px;
        margin-right: 10px;
        padding-right: 10px;
        border-right: 1px solid #eee;
    }

    .welcome-content ul li .icons {
        /*margin-right: 10px; padding-right: 10px; border-right:1px solid #fff; filter: invert(1);*/
    }

    .welcome-content ul li p {
        line-height: 20px;
        padding: 0px;
        margin: 0px;
        text-align: left;
    }

    .welcome-content1 {
        padding: 60px 0px;
    }

    .welcome-content1 ul {
        display: flex;
        flex-wrap: wrap;
        margin: 0px;
        padding: 0px;
        color: #000;
        justify-content: center;
    }

    .welcome-content1 ul li {
        width: 25%;
        margin: 0.5%;
        /*border:1px solid #eee; display: grid;  grid-template-columns: 30% 70%;*/
        padding: 10px;
        align-items: center;
        text-align: center;
    }

    .welcome-content1 ul li .icons {
        /*margin-right: 10px; padding-right: 10px; border-right:1px solid #fff; filter: invert(1);*/
    }

    .welcome-content1 ul li p {
        line-height: 20px;
        padding: 0px;
        margin: 0px;
    }

    /*------------ Complimentary-Features Style -----------*/
    .complimentary-features {
        padding: 60px 0px 0 0;
    }

    .complimentary-features ul {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        margin: 0px;
        padding: 0px;
        justify-content: center;
    }

    .complimentary-features ul li {
        width: 29%;
        margin: 2%;
        text-align: left;
        background: #fff;
        box-shadow: 0px 4px 34px rgb(59 54 100 / 15%);
        border-radius: 15px;
        padding: 30px 30px 20px 30px;
    }

    .complimentary-features ul li:nth-child(even) {
        background: #f4faff;
    }

    .complimentary-features ul li .icons {
        float: left;
    }

    .complimentary-features ul li .icons img {
        width: 80px;
        height: 80px;
        padding: 10px;
    }

    .complimentary-features ul li .content {
        background: transparent;
    }

    .complimentary-features ul li p strong {
        display: block;
        font-size: 20px;
        color: #200b52;
        text-align: left;
        padding-bottom: 10px;
    }

    .complimentary-features ul li h4 {
        display: block;
        font-size: 20px;
        color: #200b52;
        font-weight: bold;
        text-align: left;
        line-height: 1.3em;
        margin-bottom: 10px;
    }

    .complimentary-features ul li h3 {
        display: block;
        font-size: 18px;
        color: #200b52;
        font-weight: bold;
        text-align: left;
        line-height: 1.3em;
        margin-bottom: 10px;
    }

    p strong {
        color: #161515;
    }


    /*-- Travel App --*/
    .travel-app {
        padding: 60px 0px;
    }

    .travel-app-items,
    .travel-app-items1 {
        clear: both;
        min-height: 90px;
        margin-bottom: 20px;
    }

    .travel-app-items p strong,
    .travel-app-items1 p strong {
        display: block;
        font-size: 20px;
        color: #350068;
        text-align: left;
    }

    .travel-app-items p {
        color: #000;
        text-align: left;
        padding-left: 100px;
    }

    .travel-app-items1 p {
        color: #000;
    }

    .travel-app-items .icons,
    .travel-app-items1 .icons {
        width: 80px;
        height: 80px;
        border: 4px solid #eff4fe;
        float: left;
        margin-right: 20px;
        position: relative;
        padding: 13px;
        border-radius: 50%;
        margin-bottom: 30px;
    }

    /*.travel-app-items .icons:before{content: ''; position: absolute; width: 40px; height: 8px;background: #fff; z-index: 1; top: -8px; left: -8px;}*/
    /*.travel-app-items .icons img{-webkit-filter: brightness(0) invert(1);  filter: brightness(0) invert(1);}*/
    .travel-app-items1 .icons img {}

    .travel-app .app-screen1 {
        padding: 10px;
        max-width: 320px;
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
        width: 21%;
        text-align: center;
        font-size: 16px;
        padding: 15px;
        margin: -1px;
        border: 1px solid #fff;
    }

    .technologies ul li img {
        width: 70%;
        filter: brightness(0) invert(1);
    }

    .technologies ul li p {
        margin-bottom: 0 !important;
    }

    .bg-colour {
        background: linear-gradient(30deg, #191919, #191919, #191919, #bf0e87);
        position: relative;
        z-index: 1;
    }

    .bg-colour:after {
        content: '';
        position: absolute;
        left: -5%;
        top: 25%;
        width: 280px;
        height: 280px;
        background: #6a01d4;
        filter: blur(100px);
        z-index: -1;
    }

    /*-- Client section --*/
    .category-grid-style-01 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        border-radius: 5px;
    }

    .teck .category-grid-style-01 .category-item {
        padding: 30px;
        text-align: center;
        width: 18%;
        border: 1px solid #000;
        border-radius: 10px;
        margin: 5px;
        position: relative;
        cursor: pointer;
        justify-content: center;
    }

    .teck .category-grid-style-01 .category-item:before {
        content: "";
        background: #fff;
        width: 80%;
        height: 80%;
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

    .category-grid-style-01 .category-item:hover:before {
        -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        /*    opacity: 1;*/
        -webkit-transform: scale(1);
        transform: scale(1);
        transition: all .3s ease-in-out;
    }

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
        height: 60px !important;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }

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


    /******************* Timeline *****************/
    .time-line {
        overflow: hidden;
        position: relative
    }

    .time-line:before {
        content: "";
        width: 5px;
        height: 82%;
        background: #d6d6d6;
        position: absolute;
        top: 70px;
        left: 50%;
        transform: translateX(-50%)
    }

    .time-line .timeline-content:before,
    .time-line .timeline:before {
        top: 50%;
        transform: translateY(-50%);
        content: ""
    }

    .time-line .timeline {
        width: 50%;
        padding-left: 100px;
        float: right;
        position: relative
    }

    .time-line .timeline:before {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #fff;
        border: 5px solid #d6d6d6;
        position: absolute;
        left: -10px
    }

    .time-line .timeline-content {
        display: block;
        padding-left: 150px;
        position: relative
    }

    .time-line .timeline-content:before {
        width: 90px;
        height: 10px;
        border-top: 7px dotted #d6d6d6;
        position: absolute;
        left: -92px
    }

    .time-line .year {
        display: inline-block;
        width: 100px;
        height: 100px;
        line-height: 80px;
        border: 10px solid #eff4fe;
        font-size: 40px;
        color: #eff4fe;
        text-align: center;
        box-shadow: inset 0 0 10px rgba(0, 0, 0, .4);
        position: absolute;
        top: 20%;
        left: 0;
    }

    .time-line .year:before {
        content: "";
        border-left: 20px solid #08e2f4;
        border-top: 40px solid transparent;
        border-bottom: 40px solid transparent;
        position: absolute;
        bottom: 0;
        right: -29px;
    }

    .time-line .inner-content {
        padding: 20px 0
    }

    .time-line .title {
        font-size: 20px;
        font-weight: 600;
        color: #eff4fe;
    }

    .time-line .description {
        margin: 0 0 5px
    }

    .time-line .timeline:nth-child(2n) {
        padding: 0 100px 0 0
    }

    .time-line .timeline:nth-child(2n) .timeline-content:before,
    .time-line .timeline:nth-child(2n) .year,
    .time-line .timeline:nth-child(2n):before {
        left: auto;
        right: -10px
    }

    .time-line .timeline:nth-child(2n) .timeline-content {
        padding: 0 150px 0 0
    }

    .time-line .timeline:nth-child(2n) .timeline-content:before {
        right: -92px
    }

    .time-line .timeline:nth-child(2n) .year {
        right: 0
    }

    .time-line .timeline:nth-child(2n) .year:before {
        right: auto;
        left: -29px;
        border-left: none;
        border-right: 20px solid #08e2f4;
    }

    .time-line .timeline:nth-child(2) {
        margin-top: 110px
    }

    .time-line .timeline:nth-child(odd) {
        margin: -110px 0 0
    }

    .time-line .timeline:nth-child(even) {
        margin-bottom: 80px
    }

    .time-line .timeline:first-child,
    .time-line .timeline:last-child:nth-child(even) {
        margin: 0
    }

    @media only screen and (max-width:1200px) {
        .time-line .year {
            top: 50%;
            transform: translateY(-50%)
        }
    }

    @media only screen and (max-width:990px) {
        .time-line .timeline {
            padding-left: 75px
        }

        .time-line .timeline:nth-child(2n) {
            padding: 0 75px 0 0
        }

        .time-line .timeline-content {
            padding-left: 130px
        }

        .time-line .timeline:nth-child(2n) .timeline-content {
            padding: 0 130px 0 0
        }

        .time-line .timeline-content:before {
            width: 68px;
            left: -68px
        }

        .time-line .timeline:nth-child(2n) .timeline-content:before {
            right: -68px
        }
    }

    @media only screen and (max-width:767px) {
        .time-line {
            overflow: visible
        }

        .time-line .year {
            width: 80px;
            height: 80px;
            line-height: 60px;
        }

        .time-line:before {
            height: 100%;
            top: 0;
            left: 0;
            transform: translateX(0)
        }

        .time-line .timeline:before,
        .time-line .timeline:nth-child(2n):before {
            top: 35px;
            left: -9px;
            transform: translateX(0)
        }

        .time-line .timeline,
        .time-line .timeline:nth-child(even),
        .time-line .timeline:nth-child(odd) {
            width: 100%;
            float: none;
            text-align: left;
            padding: 0;
            margin: 0 0 10px
        }

        .time-line .timeline-content,
        .time-line .timeline:nth-child(2n) .timeline-content {
            padding: 0
        }

        .time-line .timeline-content:before,
        .time-line .timeline:nth-child(2n) .timeline-content:before {
            display: none
        }

        .time-line .timeline:nth-child(2n) .year,
        .time-line .year {
            position: relative;
            transform: translateY(0);
            left: 25px;
        }

        .time-line .timeline:nth-child(2n) .year:before,
        .time-line .year:before {
            border: none;
            border-right: 20px solid #eff4fe;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            top: 40%;
            left: -23px;
            bottom: auto;
            right: auto;
            transform: rotate(0)
        }

        .time-line .timeline:nth-child(2n) .year:before {
            border-right-color: #eff4fe
        }

        .time-line .timeline:nth-child(3n) .year:before {
            border-right-color: #eff4fe
        }

        .time-line .timeline:nth-child(4n) .year:before {
            border-right-color: #eff4fe
        }

        .time-line .inner-content {
            padding: 10px
        }
    }

    /*------------ Tech Stack -----------*/
    .tech-stack {
        padding: 60px 0px;
    }

    .tech-stack ul {
        display: flex;
        padding: 10px;
        justify-content: center;
        background: #fff;
        margin-bottom: 10px;
    }

    .tech-stack .nav-stacked>li {
        background: #191919;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
        text-align: center;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(to right, #191919, #bf0e87);
        border-radius: 5px;
    }

    .tech-stack .nav li a p {
        color: #fff !important;
        margin-bottom: 0;
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        border: 0;
        color: #fff;
    }

    .tech-stack ul img {
        height: 60px;
    }

    /*.tech-stack h4{text-align: center; background: #234aa9; font-size: 20px; font-weight: bold; padding: 10px; margin-bottom: 0px; color: #fff;}*/
    .technology ul {
        flex-wrap: wrap;
    }

    .technology ul li {
        width: 18%;
        padding: 10px;
        margin: 1%;
        text-align: center;
        border: 1px solid #eee;
    }

    .technology ul li p {
        margin-bottom: 0
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .welcome-content ul li {
            width: 100%;
        }

        .welcome-content1 ul li {
            width: 100%;
        }

        .teck .category-grid-style-01 .category-item {
            width: 30%;
        }

        .complimentary-features ul li {
            width: 100%;
            display: block;
        }

        .complimentary-features ul li .icons {
            width: 100%;
            clip-path: none;
            border-radius: 0px;
        }

        .complimentary-features ul li .content {
            width: 100%;
            clip-path: none;
            border-radius: 0px;
            padding: 15px;
        }

        .technologies ul li {
            width: 49%;
        }

        .technologies ul li img {
            width: 60px;
        }

        .technologies ul li {
            margin: 0px;
        }

        /*.tech-stack ul img{width: 100%;}*/
        .tech-stack ul {
            flex-wrap: wrap;
        }

        .tech-stack ul li {
            width: 48%;
            text-align: center;
        }

        .travel-app-items .icons {
            margin-bottom: 0px;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 899px) {
        .welcome-content ul li {
            width: 32%;
        }

        .welcome-content1 ul li {
            width: 32%;
        }

        .complimentary-features ul li {
            width: 100%;
        }

        .travel-app-items .icons,
        .travel-app-items1 .icons {
            margin-bottom: auto;
        }
    }

    @media (max-width: 360px) {
        #ico .banner_content {
            top: 70% !important;
        }
    }

    @media (max-width: 767px) {
        .stats {
            min-height: 140px;
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
                        <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ban_tirt">
                                    <h1>Crypto Launchpad Development</h1>
                                </div>
                                <p itemprop="text">Empower ambitious cryptopreneurs to secure funding and amplify their impact with our cutting-edge crypto launchpad solutions. Our platforms are seamlessly integrated, delivering all essential tools and features for a flawless experience.</p>
                                <div class="banner-btn">
                                    <a href="{{ url('consultation') }}" class="nec-btn" id="cyz"
                                        style="border-radius: 30px !important;">CONNECT WITH OUR EXPERTS
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                            <img src="{{ asset('images/launchpad/banner-img.png') }}" class="banner-img" alt=" " title=" ">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <style>
            .owl-carouselfour img {
                width: 150px !important;
                height: auto;
                margin: 0 auto;
                box-shadow: 0 0 20px 3px #00000026;
                border-radius: 9px;
                padding: 13px;
            }

            .owl-carouselfour .owl-stage {
                min-height: 200px !important;
                margin: 26px auto !important;
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
                padding: 18px 0px;
                text-align: center;
            }

            .projectFactsWrap .item:nth-child(1) {
                background: #47b475;
            }

            .projectFactsWrap .item:nth-child(2) {
                background: #3a9d64;
            }

            .projectFactsWrap .item:nth-child(3) {
                background: #478f65;
            }

            .projectFactsWrap .item:nth-child(4) {
                background: rgb(23, 44, 66);
            }

            .projectFactsWrap .item p.number {
                font-size: 40px;
                padding: 0;
                font-weight: bold;
                margin-bottom: 2rem;
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

            section#counter-stats {
                /* display: flex; */
                justify-content: center;
                margin-top: 0;
                /* padding: 3rem 0; */
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
                background: #0b46d9;
            }

            #counter-stats .stats:nth-child(2) {
                background: #225ff6;
            }

            #counter-stats .stats:nth-child(3) {
                background: #0b46d9;
            }

            #counter-stats .stats:nth-child(4) {
                background: #225ff6;
            }

            /* AUTHOR LINK */
        </style>
        <style type="text/css">
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

        <section class="welcome-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <h2 class="sec_tit underline text-center">Leading Innovators in Crypto Launchpad Development</h2>
                        <p class="section-subtitle mb20 text-center">The rise of cryptocurrencies has revolutionized finance, transforming how payments and investments are conducted. This evolution has significantly influenced fundraising, placing crypto launchpads at the forefront. With a diverse array of crowdfunding models emerging in the crypto space, each with unique features, we stand out as a premier global provider in crypto launchpad development. Our expertise lies in crafting advanced applications that seamlessly bridge innovative Web3 projects with eager investors through intuitive, decentralized platforms. Our globally acclaimed solutions have helped numerous clients to prominence.</p>
                    </div>
                    <div class="text-center cta_min " style="width: 100%"> 
                        <a rel="nofollow" href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn"><span>CONNECT WITH OUR SPECIALISTS</span></a>
                    </div>
                </div>
            </div>
        </section>

        @include('static.six-card-section', [
            'title' => 'Premier Cryptocurrency Launchpad Development Solutions', 
            'desc' => "Unlock the full potential of Web3 fundraising with our exceptional cryptocurrency launchpad development services designed to propel your success. Whether you're starting from scratch or seeking to elevate an existing idea, our expertise transforms visions into robust platforms.",
            'cards' => [
                [
                    'title' => 'Crypto Launchpad Strategy',
                    'desc' => "Collaborate with our industry veterans to design the core elements of your launchpad, including features and technology.",
                    'image' => 'launchpad/icons/consultation.png'
                ],
                [
                    'title' => 'Initial Coin Offering (ICO)',
                    'desc' => "Launch ICO campaigns that empower you to generate cryptocurrency funds and cultivate a dynamic network.",
                    'image' => "launchpad/icons/ico.png"
                ],
                [
                    'title' => 'Initial Exchange Offering (IEO)',
                    'desc' => 'Build IEOs that leverage crypto trading to boost token liquidity and build credibility with your audience.',
                    'image' => 'launchpad/icons/ieo.webp'
                ],
                [
                    'title' => 'Security Token Offering (STO)',
                    'desc' => 'Construct STO platforms for fundraising that offer investors equity in tangible assets, fostering trust and investment.',
                    'image' => 'launchpad/icons/security.png'
                ],
                [
                    'title' => 'Initial DEX Offering (IDO)',
                    'desc' => 'Design IDO launchpads to conduct crowdfunding through decentralized exchanges, promoting a decentralized approach to funding.',
                    'image' => 'launchpad/icons/ido.webp'
                ],
                [
                    'title' => 'Initial NFT Offering (INO)',
                    'desc' => "Create INO platforms to release NFTs in exchange for cryptocurrency, enhancing community engagement.",
                    'image' => 'launchpad/icons/nft.webp'
                ],
                [
                    'title' => 'Initial Game Offering (IGO)',
                    'desc' => 'Develop a powerful IGO platform to enable gaming projects to trade assets, driving both fundraising and marketing efforts effectively.',
                    'image' => 'launchpad/icons/game.png'
                ],
                [
                    'title' => 'Initial Liquidity Offering (ILO)',
                    'desc' => "Design an impactful ILO campaign to enhance your project's token liquidity through innovative mechanisms and strategies.",
                    'image' => 'launchpad/icons/liquidity.webp'
                ],
            ],
        ])


        <section class="tech-stack">
            <div class="container">
                <div class="col-lg-12 center">
                    <div class="section-title text-center m-b-30">
                        <h3 class="common_h3 sec-tit">Exceptional Features of Our Crypto Launchpad Development Solution</h3>
                        <hr>
                        <p>Elevate your crypto launchpad with cutting-edge features designed to deliver extraordinary results for both users and admins. Partner with our specialists to incorporate advanced functionalities that can drive your success and profitability.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked mb30"
                        style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                        <li class="active"><a href="#vtab60" data-toggle="tab">
                                <p>User End</p>
                            </a></li>
                        <li><a href="#vtab61" data-toggle="tab">
                                <p>Admin End</p>
                            </a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-content technology">
                        <div role="tabpanel" class="tab-pane in active" id="vtab60">
                            <div class="row container-center">

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy"
                                                src="{{ asset('images/launchpad/icons/crypto-wallet.png') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Integrated Wallet</h4>
                                            <p>Equip your platform with a built-in wallet to securely store and manage cryptocurrencies and NFTs across multiple blockchain networks.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy" src="{{ asset('images/launchpad/icons/staking.webp') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Advanced Staking Module</h4>
                                            <p>Implement a tiered staking system to strategically attract and engage token holders, enhancing project visibility and investment.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy" src="{{ asset('images/launchpad/icons/liquidity.webp') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Diverse Liquidity Pools</h4>
                                            <p>Offer a range of liquidity pools with substantial cryptocurrency volumes to ensure smooth and continuous trading operations.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy"
                                                src="{{ asset('images/launchpad/icons/payment-method.webp') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Versatile Payment Gateway</h4>
                                            <p>Integrate a multi-currency payment gateway supporting various cryptocurrencies and fiat options, streamlining the investment process for users</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy"
                                                src="{{ asset('images/launchpad/icons/multi-chain.webp') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Multi-Chain Integration</h4>
                                            <p>Design a launchpad with multi-chain support to accommodate projects across different L1 and L2 blockchain networks.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy" src="{{ asset('images/launchpad/icons/support.png') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Customer Support</h4>
                                            <p>Offer robust in-app support features, including advanced chatbots and live chat options, to assist users efficiently and address their inquiries.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="vtab61">
                            <div class="row container-center">

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy" src="{{ asset('images/launchpad/icons/kyc.png') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>KYC/AML Verification</h4>
                                            <p>Equip administrators with sophisticated tools for verifying customer identities through robust KYC and AML processes, ensuring the authenticity of all transactions.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy" src="{{ asset('images/launchpad/icons/launch.webp') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Crypto Launch Campaign Infrastructure</h4>
                                            <p>Provide a comprehensive framework for executing cryptocurrency offering campaigns, utilizing diverse models to optimize fundraising and community engagement.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy" src="{{ asset('images/launchpad/icons/time.png') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Real-Time Analytics</h4>
                                            <p>Deliver real-time analytical insights on crypto fundraising campaigns, offering valuable data to project owners and platform managers.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy" src="{{ asset('images/launchpad/icons/contract.webp') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Smart Contract Auditing</h4>
                                            <p>Enable thorough auditing of smart contracts, allowing administrators to detect and resolve issues post-launch, ensuring flawless functionality of the crypto launchpad.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy"
                                                src="{{ asset('images/launchpad/icons/fundraising.png') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Diverse Fundraising Models</h4>
                                            <p>Offer a range of fundraising options, including ICO, IEO, IDO, STO, and INO, allowing clients to select the model that aligns best with their objectives.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 equalize">
                                    <div class="ben_wrap">
                                        <span><img class="lazy"
                                                src="{{ asset('images/launchpad/icons/client-assistance.png') }}"></span>
                                        <div class="bent_cnt">
                                            <h4>Client Project Oversight</h4>
                                            <p>Allow administrators to efficiently oversee client projects through detailed dashboards, equipped with comprehensive functionalities and essential data sets.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // $(document).ready(function () {
            //     $('#nav-tabs-wrapper1 a[data-toggle="tab"]').on('click', function (e) {
            //         e.preventDefault();
            //         // Remove 'in active' from all tab panes
            //         $('.tab-pane').removeClass('in active').addClass('fade');
            //         // Add 'in active' to the target pane
            //         $($(this).attr('href')).removeClass('fade').addClass('in active');
                    
            //         // Handle nav item active class
            //         $('#nav-tabs-wrapper1 li').removeClass('active');
            //         $(this).parent('li').addClass('active');
            //     });
            // });
            document.addEventListener("DOMContentLoaded", function () {
                const navTabs = document.querySelectorAll('#nav-tabs-wrapper1 a[data-toggle="tab"]');
                const tabPanes = document.querySelectorAll('.tab-pane');
        
                navTabs.forEach(tab => {
                    tab.addEventListener('click', function (e) {
                        e.preventDefault();
        
                        // Remove 'in active' from all tab panes and add 'fade'
                        tabPanes.forEach(pane => {
                            pane.classList.remove('in', 'active');
                            pane.classList.add('fade');
                        });
        
                        // Add 'in active' to the target pane
                        const targetPane = document.querySelector(this.getAttribute('href'));
                        if (targetPane) {
                            targetPane.classList.remove('fade');
                            targetPane.classList.add('in', 'active');
                        }
        
                        // Handle nav item active class
                        const navItems = document.querySelectorAll('#nav-tabs-wrapper1 li');
                        navItems.forEach(item => item.classList.remove('active'));
                        this.parentElement.classList.add('active');
                    });
                });
            });
        </script>


        <section class="perfect-script common_spacing bg-colour">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="common_h3 text-center font-wei white">Introducing Our Whitelabel Crypto Launchpad Solution</h3>
                            <hr class=" ">
                            <p class="text-center white">Aiming to create a launchpad platform? Our premium Whitelabel crypto launchpad solution is designed to meet your needs seamlessly. Our expert team is ready to tailor this solution as per specific requirements and get it up and running in just a few hours. <br><br>
                            Our ready-to-deploy platform helps you effortlessly customize themes and features to match your brand’s unique identity. Looking to boost your platform’s capabilities? Integrating advanced functionalities or scaling up is straightforward and intuitive, making it feel like a natural extension rather than a complete overhaul.
                            </p>

                            <div class="text-center cta_min mt20">
                                <a rel="nofollow"
                                    class="nectar-button medium regular accent-color regular-button nec-btn"
                                    target="_blank"
                                    href="{{ url('consultation') }}"
                                    data-color-override="false" data-hover-color-override="false"
                                    data-hover-text-color-override="#fff"><span>CONNECT WITH OUR EXPERTS</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style type="text/css">
        .category-item.aos-item:hover .text-center {
            position: relative;
            z-index: 99;
            color: #000 !important;
        }
    </style>
    <section class="common_spacing  tech-padding teck ">
        <div class="container">
            <div class="  justify-content-md-center text-center">
                <div class="section-title text-center ">
                    <h3 class="common_h3 ">Kickstart Your Crypto Launchpad with Proven Whitelabel Solutions</h3>
                    <hr>
                    <p>Searching for a top-notch new crypto launchpad solution? Look no further! Our diverse off-the-shelf crypto launchpad solutions are designed to echo the successful features and aesthetics of leading market platforms. This allows you to bring your vision to life with a familiar, high-performing foundation.</p>
                </div>
            </div>
            <div class="row mt20">
                <div class="col-sm-12">
                    <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/polkastarter.webp') }}" alt="Bitcoin"> </div> <a
                                href="#" class="category-title" alt>Polkastarter</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/red-kite.webp') }}" alt="Litecoin"> </div> <a href="#"
                                class="category-title" alt>Red Kite</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/trustpad.webp') }}" alt="Ripple"> </div> <a href="#"
                                class="category-title" alt>Trustpad</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/bsc.webp') }}" alt="Tether"> </div> <a href="#"
                                class="category-title" alt>BSCPad</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/enjinstarter.webp') }}" alt="Cardano"> </div> <a
                                href="#" class="category-title" alt>Enjinstarter</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/dao.webp') }}" alt="Bitcoin Cash"> </div> <a href="#"
                                class="category-title" alt>DAO Maker</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/seedify.webp') }}" alt="Chainlink"> </div> <a href="#"
                                class="category-title" alt>Seedify</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/solanium.webp') }}" alt="Binance Coin"> </div> <a
                                href="#" class="category-title" alt>Solanium</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/acceleraytor.webp') }}" alt="Stellar"> </div> <a
                                href="#" class="category-title" alt>AcceleRaytor</a>
                        </div>
                        <div class="category-item aos-item">
                            <div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px"
                                    src="{{ asset('images/launchpad/icons/impossible-finance.webp') }}" alt="USD Coin"> </div> <a
                                href="#" class="category-title" alt>Impossible Finance</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <style type="text/css">
        .awesome-features-wrapper {
            border: 1px solid #0b0d8bb0;
            padding-top: 20px;
            padding-bottom: 20px;
            transition: .3s;
            position: relative;
            margin-bottom: 30px;
            border-radius: 10px;
        }

        .awesome-features-wrapper::before {
            background: #191919;
            height: 20px;
            width: 3px;
            content: "";
            position: absolute;
            left: -2px;
            top: 65px;
        }

        .awesome-features-wrapper::after {
            background: #bf0e87;
            height: 50px;
            width: 3px;
            content: "";
            position: absolute;
            left: -2px;
            top: 94px;
        }

        .awesome-features-icon-img {
            margin-bottom: 22px;
            font-size: 36px;
            color: #4db679;
        }

        .awesome-features-icon-img img {
            width: 60px;
            height: 60px;
        }

        .awesome-features-text h4 {
            font-size: 22px;
            font-weight: 500;
            line-height: 1.3;
            margin-bottom: 18px;
        }

        .awesome-features-text p {
            margin-bottom: 0;
            padding: 0 20px;
        }
    </style>
    <div class="common_spacing gray_bg">
        <div class="container">
            <div class=" ">
                <h3 class="sec_tit underline text-center">Unparalleled Advantages of Our Crypto Launchpad Development Services</h3>
                <p class="text-center">Transform your business into a leading crypto innovator with our exceptional crypto launchpad development services, offering unrivaled benefits at every stage. Imagine the power of having seasoned experts dedicated to achieving your ambitious goals, no matter the obstacles.</p>
            </div>
            <div class="row mt20">
                <div class="container container-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/launchpad/icons/business-models.webp') }}">
                            </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Secure Crowdfunding Models</strong>Our crypto crowdfunding solutions come with robust security features to protect your business from day one.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/launchpad/icons/ecosystem.svg') }}">
                            </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Streamlined Ecosystem Development</strong>Our launchpad solutions simplify the creation of Web3 ecosystems, helping you build a sustainable community in today’s complex environment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/launchpad/icons/tokens.png') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Support for New Token Ventures</strong>Businesses can use new tokens with our launchpads to connect with enthusiastic communities, essential for thriving in an evolving landscape.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/launchpad/icons/revenue.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Expanded Revenue Opportunities</strong>Benefit from multiple revenue streams, boosting long-term profitability as more projects and customers engage with your platform.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <style type="text/css">
        :root {
            --color1: #117D83;
            --color2: #0d3881;
        }

        .main-timeline {
            font-family: 'Poppins', sans-serif;
        }

        .main-timeline:after {
            content: '';
            display: block;
            clear: both;
        }

        .main-timeline .timeline {
            width: 50%;
            padding: 0 70px 0 0;
            margin: 0 5px 15px 0;
            float: left;
        }

        .main-timeline .timeline-content {
            color: #999;
            background: var(--main-color);
            min-height: 120px;
            padding: 0 30px 0 60px;
            border-right: 2px solid var(--color2);
            display: block;
            position: relative;
            z-index: 1;
        }

        .main-timeline .timeline-content:hover {
            text-decoration: none;
        }

        .main-timeline .timeline-content:before,
        .main-timeline .timeline-content:after {
            content: '';
            background-color: var(--color2);
            height: 8px;
            width: 8px;
            border-radius: 50%;
            position: absolute;
            right: -5px;
            top: 0;
        }

        .main-timeline .timeline-content:after {
            top: auto;
            bottom: 0;
        }

        .main-timeline .timeline-icon {
            color: #fff;
            background-color: #191919;
            font-size: 40px;
            text-align: center;
            line-height: 93px;
            height: 93px;
            width: 93px;
            border-radius: 30px;
            box-shadow: -5px -5px 5px #bf0e87, -8px -8px 0 #bf0e87;
            transform: translateY(-50%);
            position: absolute;
            right: -120px;
            top: 50%;
        }

        .main-timeline .timeline-year {
            font-size: 32px;
            font-weight: 600;
            text-align: right;
        }

        .main-timeline .title {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0 0 7px;
            text-align: right;
        }

        .main-timeline .description {
            margin: 0;
            text-align: right;
        }

        .main-timeline .timeline-yearleft {
            font-size: 32px;
            font-weight: 600;
            text-align: left;
        }

        .main-timeline .titleleft {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0 0 7px;
            text-align: left;
        }

        .main-timeline .descriptionleft {
            margin: 0;
            text-align: left;
        }

        .main-timeline .timeline:nth-child(even) {
            padding: 0 0 0 70px;
            margin: 0 0 15px 5px;
            float: right;
        }

        .main-timeline .timeline:nth-child(even) .timeline-content {
            padding: 0 0 0 30px;
            border-left: 2px solid var(--color1);
            border-right: none;
        }

        .main-timeline .timeline:nth-child(even) .timeline-content:before,
        .main-timeline .timeline:nth-child(even) .timeline-content:after {
            right: auto;
            left: -5px;
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon {
            box-shadow: 5px -5px 5px #bf0e87, 8px -8px 0 #bf0e87;
            left: -120px;
            right: auto;
        }

        .main-timeline .timeline:nth-child(2) {
            --color2: #0d3881;
            --color2: #0d3881;
        }

        .main-timeline .timeline:nth-child(3) {
            --color2: #0d3881;
            --color2: #0d3881;
        }

        .main-timeline .timeline:nth-child(4) {
            --color2: #0d3881;
            --color2: #0d3881;
        }

        @media screen and (max-width:767px) {

            .main-timeline .timeline,
            .main-timeline .timeline:nth-child(even) {
                width: 100%;
                padding: 115px 0 0;
                margin: 0 0 50px;
            }

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(even) .timeline-content {
                text-align: center;
                padding: 15px 0 0 0;
                border: none;
                border-top: 2px solid var(--color1);
            }

            .main-timeline .timeline-content:before {
                right: auto;
                left: 0;
                top: -5px;
            }

            .main-timeline .timeline-content:after,
            .main-timeline .timeline:nth-child(even) .timeline-content:after {
                left: auto;
                right: 0;
                top: -5px;
            }

            .main-timeline .timeline-icon,
            .main-timeline .timeline:nth-child(even) .timeline-icon {
                transform: translateY(0) translateX(-50%);
                top: -115px;
                left: 50%;
            }
        }
    </style>
    <section class="common_spacing ">
        <div class="container">
            <h3 class="sec_tit underline text-center">Our Comprehensive Process for Developing Your Crypto Launchpad</h3>
            <p class="text-center">With years of expertise in crypto launchpad development, we have honed a detailed process designed to ensure your project's success. From initial concept to public launch, we guide every phase with precision and innovation.</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="timeline-year">1</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/launchpad/icons/consultation.png') }}" style="width: 60px;"></div>
                                <h4 class="title">Initial Consultation</h4>
                                <p class="description">Engage with our specialists to articulate your business goal and receive a preliminary estimate for your crypto launchpad development journey.</p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="timeline-yearleft">2</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/launchpad/icons/analysis.png') }}" style="width: 60px;"></div>
                                <h4 class="titleleft">Feasibility Analysis</h4>
                                <p class="descriptionleft">Conduct a thorough evaluation of your launchpad concept, assessing its viability in existing and future market scenarios through in-depth data analysis.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="timeline-year">3</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/launchpad/icons/whitepaper.png') }}" style="width: 60px;"></div>
                                <h4 class="title">Whitepaper Development</h4>
                                <p class="description">Craft a detailed whitepaper outlining the platform's features, benefits, and value propositions for various stakeholders.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="timeline-yearleft">4</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/launchpad/icons/web-design.png') }}" style="width: 60px;"></div>
                                <h4 class="titleleft">Website Design</h4>
                                <p class="descriptionleft">Build a feature-rich website for the launchpad, incorporating user access pathways and crowdfunding elements to enhance functionality.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="timeline-year">5</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/launchpad/icons/dashboard.png') }}" style="width: 60px;"></div>
                                <h4 class="title">Dashboard Development</h4>
                                <p class="description">Design intuitive dashboards for both customers and admins, tailored with specific functionalities to streamline their roles and interactions.</p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="timeline-yearleft">6</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/launchpad/icons/front-end.webp') }}" style="width: 60px;"></div>
                                <h4 class="titleleft">Front-End Design</h4>
                                <p class="descriptionleft">Create a captivating front end with outstanding UI/UX components, ensuring a seamless and engaging user experience.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="timeline-year">7</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/launchpad/icons/testing.png') }}" style="width: 60px;"></div>
                                <h4 class="title">Testing and Optimization</h4>
                                <p class="description">Conduct rigorous testing of the launchpad software, identifying and resolving any issues to ensure a flawless and efficient application.</p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="timeline-yearleft">8</div>
                                <div class="timeline-icon"><img class="lazy"
                                        src="{{ asset('images/launchpad/icons/support.png') }}" style="width: 60px;"></div>
                                <h4 class="titleleft">Support</h4>
                                <p class="descriptionleft">Provide ongoing maintenance and enhancements after the public launch, leveraging our expertise to keep your launchpad at the forefront of the evolving crypto landscape.
                                </p>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>


    <section class="perfect-script common_spacing bg-colour">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img class="lazy" src="{{ asset('images/launchpad/img-1.png') }}" style="width: 380px">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3 class="common_h3 text-left font-wei white">Why Partner with Us for Your Crypto Launchpad Development?</h3>
                        <hr style="margin-left: 0;">
                        <p class="text-left white">We prioritize enduring success over fleeting trends, reflecting our commitment to delivering exceptional crypto launchpad platforms. As a leading authority in crypto launchpad development, we offer comprehensive expertise to support your platform from inception to launch. With a proven track record of driving numerous crypto launchpad projects, we understand the dynamics of thriving in the evolving crypto landscape. Entrust us with your vision, and let us help you create a robust, future-ready crypto business. Connect with our experienced team today to develop a tailored, strategic plan for your project!</p>

                        <div class="text-left cta_min mt20">
                            {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                                target="_blank"
                                href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION</span></a> --}}
                            <a rel="nofollow" href="{{ url('consultation') }}"
                                class="nectar-button medium regular accent-color regular-button nec-btn">
                                <span>CONNECT WITH OUR SPECIALISTS</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<style type="text/css">
    .perfect-script-items1 {
        -webkit-box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
        padding: 10px 15px 10px;
        border-radius: 16px;
        background-color: #fff;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        margin-bottom: 20px;
    }

    .perfect-script-items1 .icon {
        width: 70px;
        height: 70px;
        /* margin: 20px auto 50px; */
        line-height: 75px;
        position: relative;
        border-radius: 0px 50% 50% 0px;
        /* background-image: linear-gradient( 
293deg
 , #fba214 0%, #f7cb22 100%); */
        /* background-color: #f03858; */
        color: #fff;
        font-size: 40px;
        z-index: 9;
        float: left;
        background: #eff4fe;
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
        width: 80%;
        padding-left: 15px;
    }

    .perfect-script-items1 .content p strong {
        display: block;
    }

    .perfect-script-items1 strong {
        color: #0b0d8b;
        font-size: 18px;
    }

    .perfect-script-items1 p {
        text-align: left;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .perfect-script-items1:hover {
        transform: translateY(-10px);
    }

    .font-wei {
        font-weight: 700;
    }

    /*equalize start*/
    .container-center {
        display: flex;
        flex-wrap: wrap;
        position: relative;
        z-index: 1;
        justify-content: center;
    }

    .equalize {
        display: flex;
    }

    /*equalize end */
</style>


<style type="text/css">
    .common_h3 {
        font-size: 25px;
    }

    .faq-content h3.panel-title {
        text-align: left;
    }

    .panel-default>.panel-heading+.panel-collapse>.panel-body {
        text-align: left;
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
</style>

{{-- <div class="product-section fag_sec common_spacing gray_bg">
    <div class="container">
        <div class="section-top ">
            <div class="section-header text-center">
                <h2 class="section-title mt20 underline common_h3 font_wei">FAQ</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="faq-content">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h3 class="panel-title">
                                    <a class="" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq1">
                                        <span>What is a Crypto Launchpad Development Solution?</span>
                                    </a>
                                </h3>
                            </div>
                            <div id="faq1" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">A crypto launchpad development solution allows new
                                    cryptocurrency projects to distribute their tokens through initial sales to public
                                    investors, connecting both together through simplified interfaces.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq2">
                                        <span>What are the Various Types of Crypto Launching Models?</span>
                                    </a>
                                </h3>
                            </div>
                            <div id="faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">Popular crypto launching models include Initial Coin Offerings
                                    (ICOs), Initial Exchange Offerings (IEOs), Initial DEX Offerings (IDOs), Security
                                    Token Offerings (STOs), and Initial NFT Offerings (INOs).</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq3">
                                        <span>What are Some Examples of Famous Cryptocurrency Launchpads?</span>
                                    </a>
                                </h3>
                            </div>
                            <div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">Examples of famous cryptocurrency launchpads in the current
                                    market include Red Kite, Polkastarter, DAO Maker, Solanium, BSCPad, Seedify,
                                    Enjinstarter, Trustpad, Impossible Finance, and AcceleRaytor.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq4">
                                        <span>How Does a Crypto Launchpad Benefit the Web3 Industry?</span>
                                    </a>
                                </h3>
                            </div>
                            <div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">A crypto launchpad benefits the Web3 industry by providing ways
                                    for new token projects, offering safer crowdfunding models, increasing revenue
                                    streams, and easing ecosystem creation for new businesses.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq5">
                                        <span>Who Offers the Best Crypto Launchpad Development Services?</span>
                                    </a>
                                </h3>
                            </div>
                            <div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">Blockchain App Factory offers the best crypto launchpad
                                    development services and has immense experience building futuristic platforms that
                                    connect cryptocurrency projects and enthusiastic investors.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => 'What features are provided by a Crypto Launchpad Development Solution?',
            'ans' => "A Crypto Launchpad Development Solution delivers a dedicated platform designed for the launch and management of cryptocurrency projects. It includes vital infrastructure and tools to facilitate successful fundraising efforts and investor interactions."
        ],
        [
            'ques' => 'What are the various models for launching a cryptocurrency?',
            'ans' => "Available crypto-launching models encompass Initial Coin Offerings (ICOs), Initial Exchange Offerings (IEOs), Initial DEX Offerings (IDOs), Security Token Offerings (STOs), and Initial NFT Offerings (INOs). Each model is tailored to different project needs and fundraising approaches."
        ],
        [
            'ques' => 'Which cryptocurrency launchpads are widely recognized?',
            'ans' => "Notable cryptocurrency launchpads include Binance Launchpad, Polkastarter, and CoinList. These platforms are esteemed for their ability to back high-profile projects and engage a broad spectrum of investors."
        ],
        [
            'ques' => 'What advantages does a crypto launchpad bring to the Web3 industry?',
            'ans' => "A crypto launchpad enhances the Web3 industry by streamlining the fundraising process, linking projects with a broad investor network, and fostering project development. It boosts project visibility and strengthens community involvement."
        ],
        [
            'ques' => 'Which firms are renowned for their crypto launchpad development services?',
            'ans' => "Leading firms in crypto launchpad development, such as Blockchain App Factory, are known for their advanced solutions and comprehensive support. They offer a full spectrum of services from the initial concept phase to the final launch and beyond."
        ],
    ],
])
</div>
</div>
<!-- scripts included -->
<script src="js/vendor.js" type="eea1c319861a5f792b64a7e7-text/javascript"></script>
<script src="js/plugins.js" type="eea1c319861a5f792b64a7e7-text/javascript"></script>
<script src="js/main.js" type="eea1c319861a5f792b64a7e7-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="eea1c319861a5f792b64a7e7-text/javascript"></script>
<script type="eea1c319861a5f792b64a7e7-text/javascript">
    $("#phone").intlTelInput({
            utilsScript: "build/js/utils.js"
        });
        $("#phone21").intlTelInput({
            utilsScript: "build/js/utils.js"
        });
        $("#phone22").intlTelInput({
            utilsScript: "build/js/utils.js"
        });
        $("#phone23").intlTelInput({
            utilsScript: "build/js/utils.js"
        });
</script>
<script type="eea1c319861a5f792b64a7e7-text/javascript">
    $('.home-talk-experts').click(function() {
            $('html, body').animate({
                scrollTop: $('#newsletter-form-sec').offset().top
            }, 2000);
        });
        var url = window.location.href;
        $('#url').val(url);
        // alert(url);
</script>
<script type="eea1c319861a5f792b64a7e7-text/javascript">
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

<script type="eea1c319861a5f792b64a7e7-text/javascript">
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
    @media screen and (max-width: 320px) {
        .main {
            margin-top: 10px !important;
        }
    }

    /*@media screen and (max-width: 768px) {
    .main {
        margin-top: 10px !important;
    }
}*/
</style>
<div class="sticky-form">
    <div class="formdiv">
        <form class="form-side" id="mailForm_sticky" method="post" action="">
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
                <input id="phone_sticky" name="phone_dummy" type="text" required=""
                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                    data-cf-modified-eea1c319861a5f792b64a7e7-="">
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/crypto-launchpad-development">
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
<script type="eea1c319861a5f792b64a7e7-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="eea1c319861a5f792b64a7e7-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="eea1c319861a5f792b64a7e7-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="eea1c319861a5f792b64a7e7-text/javascript">
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




<!-- Side Panel - End -->
<script type="eea1c319861a5f792b64a7e7-text/javascript">
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
<script type="eea1c319861a5f792b64a7e7-text/javascript">
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

<script type="eea1c319861a5f792b64a7e7-text/javascript">
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
            <a rel="nofollow" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" target="blank">
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



<script type="eea1c319861a5f792b64a7e7-text/javascript">
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
<script type="eea1c319861a5f792b64a7e7-text/javascript">
    $(".crypto-popup").click(function(e) {
        $('crypto-popup').addClass('fixedPosition full-width');
        $(".login-popup").addClass('show');
        e.stopPropagation();
    });
</script>
<!-- Button Lightbox Script - End -->

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="eea1c319861a5f792b64a7e7-|49" defer></script>
</div>


@endsection