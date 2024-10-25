@extends('layouts.static')
    @section('title', 'Real World Asset Tokenization')
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
        background: #180a52 !important;
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
        color: #180a52;
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
            height: 800px !important;
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
            height: 800px !important;
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
        text-transform: capitalize !important;
        transform: scale(1.1, 1.1) !important;
        transition: all .3s ease-out 0s !important;
        background: linear-gradient(to right, rgb(205, 69, 255), rgb(115, 104, 255)) !important
    }

    .nec-btn:hover {
        transform: scale(1, 1) !important;
        color: #fff !important;
        background: #5409ec !important
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
        padding-bottom: 10px;
    }
</style>

<style type="text/css">
    a[type="button"] {
        background: linear-gradient(to right, rgb(205, 69, 255), rgb(115, 104, 255)) !important;
    }

    .list-ico li p {
        margin-bottom: 0.5em;
        margin-top: 0.5em;
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
        margin-top: 140px !important;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0.95;
        background-color: rgb(0 0 0 / 62%);
    }


    .banner_content .contentall {
        margin-top: 85px;
        max-width: 1000px;
        margin: 81px auto 40px;
    }


    .contentall a {
        color: #fff;
        cursor: pointer;
        margin: 15px 0px;
    }

    .mb30 {
        margin-bottom: 30px !important;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0.95;
        background-color: rgb(0 0 0 / 62%)
    }

    .banner-overlay {
        background: #180a52;
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
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 30px !important;
        text-transform: capitalize;
    }



    .contentall a {
        color: #fff;
        cursor: pointer;
        margin: 15px 0px;
    }

    @media (max-width: 768px) {

        .contentall h1,
        .ban_tirt {
            font-size: 30px !important;
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

    @media (max-width: 768px) {
        .banner {
            padding-top: 105px;
        }
    }

    @media (max-width: 320px) {
        .banner_content .contentall {
            margin-top: 200px !important;
        }

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
        background: #2966f21c;
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
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 30px;
        text-transform: capitalize;
    }

    .contentall p {
        font-weight: normal;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 18px !important;
        max-width: 800px;
        margin: 0 auto 30px;
        display: block;
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

    @media (max-width:320px) {

        .teck .category-grid-style-01 .category-item {
            width: 50% !important;


        }
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

    .category-title {
        margin-bottom: 0;
    }

    /*-- Client section --*/


    .featured-icon-box.style3 .featured-desc:after {
        position: absolute;
        content: '';
        width: 0;
        height: 0;
        border-bottom: 34px solid #350068;
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
        background-color: #350068;
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
        background-color: #e8eefe;
    }

    .indus-box {
        border-radius: 15px;
    }

    .blog-img-box {
        border-radius: 15px 15px 0 0;
    }

    .faq-content #accordion a[data-toggle=collapse]::before {
        background: #180a52;
    }

    .gray_bg,
    .gray-bg {
        background: #2966f21c;
    }

    /*-- Welcome Content --*/
    .welcome-content {
        background: #fff;
        padding: 40px 0px;
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
        border: 1px solid #999;
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
        border-right: 1px solid #999;
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
        background: #fff;
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
        color: #180a52;
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
        text-align: justify;
        padding-left: 100px;
    }

    .travel-app-items1 p {
        color: #000;
    }

    .travel-app-items .icons,
    .travel-app-items1 .icons {
        width: 80px;
        height: 80px;
        border: 4px solid #350068;
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

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .welcome-content ul li {
            width: 100%;
        }

        .welcome-content1 ul li {
            width: 100%;
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
            top: 18% !important;
            bottom: 18% !important;
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
                                    <h1>Real World Asset (RWA) Tokenization Solutions</h1>
                                </div>
                                <p itemprop="text">Unlock the full potential of blockchain technology with our premier real-world asset (RWA) tokenization solutions. Partner with our leading asset tokenization firm to access top-tier services that deliver unmatched excellence.</p>
                                <div class="banner-btn">
                                    <a rel="nofollow" href="{{ url('consultation') }}" class="nec-btn" id="cyz"><strong>CONNECT WITH OUR SPECIALISTS</strong></a>
                                    {{-- <a rel="nofollow" href="#demo" class="nec-btn btn1" id="cyz">SEE A LIVE DEMO</a>
                                    <a rel="nofollow" href="#demo" class="nec-btn btn1" id="cyz">REQUEST PRICING DETAILS</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-center hidden-xs">
                            <br><br>
                            <img src="images/tokenized-asset-offering/banner-img1.png" class alt="RWA Tokenization"
                                title="RWA Tokenization" style="width: 455px;">
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
                background: #5100a1;
            }

            #counter-stats .stats:nth-child(2) {
                background: #7502e6;
            }

            #counter-stats .stats:nth-child(3) {
                background: #5100a1;
            }

            #counter-stats .stats:nth-child(4) {
                background: #7502e6;
            }

            @media screen and (max-width:320px) {
                .stats p {
                    font-size: 10px !important;
                }
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
        <section class="welcome-content" style="background: #2966f21c;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                        <h2 class="sec_tit underline text-center">Transform Your Real-World Assets with Cutting-Edge Tokenization</h2>
                        <p class="section-subtitle mb20 text-center">Asset tokenization is revolutionizing the financial landscape, with major corporations and financial institutions now embracing Tokenized Asset Offerings (TAO) and Tokenization-as-a-Service (TaaS). The evolution from Bitcoin to ICOs and now to real-world asset (RWA) tokenization signifies a major leap, integrating traditional assets like real estate and art galleries into the blockchain ecosystem.
                            <br><br>
                            Asset tokenization involves converting tangible assets into digital tokens, ranging from venture capital investments and equity shares to real estate and precious metals like gold and diamonds. This process leverages advanced blockchain technology to record every transaction, ensuring security and transparency. By enabling more efficient, secure transactions, tokenization opens new opportunities for investors and market participants.
                            <br><br>
                            Our comprehensive asset tokenization platform offers state-of-the-art blockchain solutions, features, and functionalities to deliver an exceptional business experience. Tokenized Asset Offerings facilitate the entry of financial markets into the blockchain realm with streamlined KYC/AML compliance, investor verification, and transparent voting rights.
                    </div>
                    <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/compliance.webp') }}"></div>
                                <p>Enhanced Compliance</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/participation.png') }}"></div>
                                <p>Institutional Participation</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/liquidity.webp') }}"></div>
                                <p>Increased Liquidity</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/efficiency.webp') }}"></div>
                                <p>Transparency and Efficiency</p>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/low-costs.png') }}"></div>
                                <p>Reduced Costs</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <section class="welcome-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                        <h2 class="sec_tit underline text-center">Real World Asset (RWA) Tokenization Services: Our Expertise</h2>
                        <p class="section-subtitle mb20 text-center">In the rapidly evolving blockchain landscape, the tokenization of real-world assets (RWAs) is emerging as a game-changing innovation. This cutting-edge approach is set to transform industry practices and enhance user experiences, potentially bringing the benefits of blockchain to billions globally.
                            <br><br>
                            Our RWA tokenization services leverage advanced blockchain technology to convert tangible assets into digital tokens, all while ensuring strict adherence to legal standards. Partner with us to seamlessly transition your physical assets into the digital realm and tap into a global audience effortlessly.
                        </p>
                        <div class="clearfix"></div>
                        <div class="text-center cta_mine txt">
                            <a rel="nofollow"
                                class="nectar-button medium regular accent-color regular-button nec-btn med-btn"
                                target="_blank"
                                href="{{ url('consultation') }}"
                                data-color-override="false" data-hover-color-override="false"
                                data-hover-text-color-override="#fff"><span>BOOK A CONSULTATION CONNECT WITH OUR SPECIALISTS</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('static.six-card-section', [
            'title' => 'Unmatched Advantages of Real-World Asset Tokenization', 
            'desc' => 'Unlock the transformative potential of real-world asset tokenization with our state-of-the-art solutions, designed to bring unparalleled efficiency, security, and transparency to businesses and investors alike. Our expertise in tokenizing RWAs ensures that your assets are seamlessly integrated into the digital landscape with unmatched precision.',
            'cards' => [
                [
                    'title' => 'Enhanced Efficiency',
                    'desc' => "Effortlessly trade fractional and high-value assets around the clock with our advanced tokenization services, simplifying complex transactions and enhancing operational ease.",
                    'image' => 'tokenized-asset-offering/icons/efficiency.webp'
                ],
                [
                    'title' => 'Elevated Trust',
                    'desc' => "Leverage smart contracts to facilitate flawless settlements of real-world assets, fostering a high level of trust and reliability between your projects and investors.",
                    'image' => "tokenized-asset-offering/icons/trust.webp"
                ],
                [
                    'title' => 'Absolute Transparency',
                    'desc' => "Utilize blockchain's immutable ledger to provide complete visibility into asset ownership and transaction history, ensuring openness and clarity at all times.",
                    'image' => 'tokenized-asset-offering/icons/transparency.webp'
                ],
                [
                    'title' => 'Robust Compliance',
                    'desc' => 'Achieve rigorous regulatory compliance by integrating essential standards and checks, supported by sophisticated tools and transparent public chains.',
                    'image' => 'tokenized-asset-offering/icons/compliance.webp'
                ],
                [
                    'title' => 'Reduced Costs',
                    'desc' => 'Minimize transaction costs significantly by eliminating intermediaries through the power of tokenization, optimizing financial efficiency.',
                    'image' => 'tokenized-asset-offering/icons/low-costs.png'
                ],
                [
                    'title' => 'Increased Liquidity',
                    'desc' => 'Boost liquidity for traditionally illiquid assets with fractional tokens, expanding trading opportunities and accessibility for a broader audience.',
                    'image' => 'tokenized-asset-offering/icons/liquidity.webp'
                ],
            ],
        ])
        @include('static.small-square-card-section', [
            'title' => 'Revolutionary Business Advantages of Digital Asset Tokenization', 
            'desc' => "Our innovative asset tokenization solutions deliver exceptional benefits that you'll appreciate from day one. Whether starting from scratch or leveraging our white-label offerings, we deploy cutting-edge technology to ensure your success.",
            'cards' => [
                [
                    'title' => 'Boosted Liquidity',
                    'desc' => 'Tokenizing assets enhances liquidity by enabling fractional ownership, allowing businesses to secure and capitalize on their assets more effectively.',
                    'image' => 'tokenized-asset-offering/icons/liquidity.webp',
                ],
                [
                    'title' => 'Global Market Access',
                    'desc' => 'Unlock global market opportunities with asset-backed tokens, overcoming traditional geographical and time-based limitations through blockchain technology.',
                    'image' => 'tokenized-asset-offering/icons/global.png',
                ],
                [
                    'title' => 'Optimized Efficiency',
                    'desc' => "Streamlined asset transactions by minimizing administrative overhead and operational complexities, thanks to the efficiencies of tokenization.",
                    'image' => 'tokenized-asset-offering/icons/efficiency.webp',
                ],
                [
                    'title' => 'Enhanced Transparency',
                    'desc' => 'Achieve unparalleled transparency with asset-backed tokens, supported by a tamper-proof blockchain ledger that ensures accurate and immutable records.',
                    'image' => 'tokenized-asset-offering/icons/transparency.webp',
                ],
                [
                    'title' => 'Fractional Ownership',
                    'desc' => 'Simplify the division of asset ownership through fractionalization, making it easier to distribute and manage asset stakes.',
                    'image' => 'tokenized-asset-offering/icons/fractionalizing.png',
                ],
                [
                    'title' => 'Expanded Fundraising Potential',
                    'desc' => "Leverage tokenized assets to unlock new fundraising opportunities, building investor confidence and attracting capital for crypto ventures.",
                    'image' => 'tokenized-asset-offering/icons/fund.png',
                ],
                [
                    'title' => 'Increased Interoperability',
                    'desc' => 'Facilitate the creation of new financial instruments with asset tokens, enhancing interoperability and integrating seamlessly with various financial systems.',
                    'image' => 'tokenized-asset-offering/icons/interoperable.png',
                ],
                [
                    'title' => 'Automated Processes',
                    'desc' => "Utilize smart contracts to automate asset tokenization processes, providing robust security and ensuring a smooth, efficient experience.",
                    'image' => 'tokenized-asset-offering/icons/automation.png',
                ],
            ],
            'cta_1' => '',
            'cta_2' => ''
        ])
        <section class="intro_cnt common_spacing our-prom">
            <div class="container">
                <div class="row">
                    <h2 class="sec_tit underline text-center">Advanced Modules in Our Real World Asset Tokenization Services</h2>
                </div>
                <div class="row">
                    <div class="container-center container">
                        <div class="col-md-4 equalize">
                            <div class="prom-box text-center">
                                <div class="prom-icon"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/monitoring.png') }}" width="64px;"></div>
                                <div class="prom-desp">
                                    <h4>Asset Management Hub</h4>
                                    <p> Our platform provides a comprehensive solution for managing, distributing, safeguarding, and overseeing real-world asset (RWA) tokens, ensuring top-tier security and control at all times. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 equalize">
                            <div class="prom-box text-center">
                                <div class="prom-icon"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/tokenization.png') }}" width="64px;"></div>
                                <div class="prom-desp">
                                    <h4>Compliance Oversight System</h4>
                                    <p>This system streamlines verification processes and investor accreditation, fortifying the integrity and regulatory adherence of your RWA tokenization initiative.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 equalize">
                            <div class="prom-box text-center">
                                <div class="prom-icon"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/buy-sell.png') }}" width="64px;"></div>
                                <div class="prom-desp">
                                    <h4>Dynamic Token Exchange</h4>
                                    <p>Our integrated marketplace enables users to effortlessly buy and sell RWA tokens with various cryptocurrencies, ensuring smooth and continuous trading operations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 equalize">
                            <div class="prom-box text-center">
                                <div class="prom-icon"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/unauthorized.png') }}" width="64px;"></div>
                                <div class="prom-desp">
                                    <h4>High-Security Multi-Signature (MultiSig) Features</h4>
                                    <p>Enhanced security is achieved through MultiSig provisions, which ensure token transactions are conducted with maximum protection against unauthorized transfers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 equalize">
                            <div class="prom-box text-center">
                                <div class="prom-icon"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/liquidity.webp') }}" width="64px;"></div>
                                <div class="prom-desp">
                                    <h4>Alternative Trading System (ATS)</h4>
                                    <p>The ATS manages liquidity and price discovery for asset tokens, fostering a transparent and efficient trading environment for all participants.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 equalize">
                            <div class="prom-box text-center">
                                <div class="prom-icon"><img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/users.png') }}" width="64px;"></div>
                                <div class="prom-desp">
                                    <h4>Robust Multi-Party Computation (MPC)</h4>
                                    <p>MPC techniques ensure the security of sensitive user data by distributing access rights among multiple parties, safeguarding information on our platform.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="travel-app gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h3> <strong>Our All-Encompassing Real World Asset Tokenization Solutions</strong></h3>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="travel-app-items">
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/tokenized-asset-offering/icons/fund.webp') }}"></div>
                            <p><strong>Venture Capital Assets</strong>Transform venture capital funds and startup equity into tokenized assets, making them readily accessible to retail investors around the globe.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="travel-app-items">
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/tokenized-asset-offering/icons/assets.png') }}"></div>
                            <p><strong>Energy Resources</strong>Tokenize energy assets, including solar and wind farms, carbon credits, and petroleum products, to advance sustainability and broaden investment opportunities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="travel-app-items">
                            <div class="icons"><img class="lazy"
                                    src="{{ asset('images/tokenized-asset-offering/icons/royalties.webp') }}"></div>
                            <p><strong>Music Royalties</strong>Convert music albums and royalties into tokens, offering fans a closer connection to their favorite artists while ensuring both parties enjoy significant advantages.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="tech-points common_spacing">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title text-left">
                        <h3 class="font_wei">Asset Tokenization: Enhancing Real-World Efficiency with Blockchain</h3>
                        <hr>
                    </div>
                    <p>Asset tokenization brings blockchain technology into practical use by creating digital representations of tangible items. Our tokenization services streamline business operations, making them more cost-effective and efficient.<br><br>
                        By digitizing and fractionalizing various assets, tokenization accelerates blockchain adoption. This approach allows access to a wide array of investments—ranging from fine art and collectibles to venture capital funds and energy assets—affordably and seamlessly. As a premier provider of tokenization solutions, we cater to diverse sectors, unlocking new opportunities for both businesses and investors.</p>
                </div>
                <div class="col-lg-6 col-md-6 hidden-sm hidden-xs"> <img
                        src="{{ asset('images/tokenized-asset-offering/img-1.png') }}" alt=" " title=" " class="img-responsive lazy">
                </div>
            </div>
        </div>
        <div class="tech-points common_spacing gray_bg">
            <div class="container">
                <div class="col-lg-6 col-md-6 hidden-sm hidden-xs"> <img
                        src="{{ asset('images/tokenized-asset-offering/img-2.jpeg') }}" alt=" " title=" " class="img-responsive lazy">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title text-left">
                        <h3 class="font_wei">Unlock Digital Opportunities for Traditional Assets with Tokenization</h3>
                        <hr>
                    </div>
                    <p>As blockchain technology gains widespread acceptance, asset tokenization emerges as a powerful avenue for business and investment growth. An expertly crafted tokenization platform can capture the attention of global investors, regardless of scale. Harness our team's expertise to develop a cutting-edge platform tailored to your business objectives.<br><br>
                        Transform conventional assets—such as real estate, equity shares, debt securities, artworks, rare collectibles, and consumables—into digital tokens to unlock new value. Our extensive experience in deploying blockchain solutions enables us to create a robust, feature-rich platform that elevates your asset tokenization strategy to new heights.</p>
                </div>
            </div>
        </div>

        <section class="welcome-content1"
            style="background: linear-gradient(to right,  #c947ff 0%,#0089fe 61%,#00ece2 100%);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="sec_tit underline text-center text-white">Develop RWA Tokens Aligned with Leading Market Trends</h3>
                        <p class="text-center text-white" style="font-size: 16px;">As a premier provider of real-world asset tokenization services, we excel at crafting RWA tokens that mirror the success of top market contenders. Tap into our expertise to unveil cutting-edge tokens and explore emerging trends within the RWA token landscape.</p>
                    </div>
                    <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul>
                            <li>
                                <div class="ben_wrap">
                                    <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/polymesh.webp') }}">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/centrifuge.webp') }}">
                                </div>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/pendle.webp') }}"></div>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/maple.webp') }}"></div>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/propy.webp') }}"></div>
                            </li>
                            <li>
                                <div class="icons"><img class="lazy" src="{{ asset('images/asset-token/icons/landshare.webp') }}">
                                </div>
                            </li>
                        </ul>
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
        
        <section class="perfect-script common_spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="common_h3 text-center font-wei">Strategic Pathway to Tokenized Asset Launch </h3>
                            <hr class="mb40">
                        </div>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="container container-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 my-auto equalize">
                            <div class="perfect-script-items1">
                                <div class="icon">
                                    <img class="lazy" src="{{ asset('images/tokenized-asset-offering/icons/discussion.png') }}">
                                </div>
                                <div class="content">
                                    <p><strong>Strategic Visioning Session</strong> Kickstart with a deep dive into your RWA tokenization project, aligning your vision with market insights to design a powerful campaign.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 my-auto equalize">
                            <div class="perfect-script-items1">
                                <div class="icon">
                                    <img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/financial-service.webp') }}">
                                </div>
                                <div class="content">
                                    <p><strong>Comprehensive Financial Scrutiny</strong> Engage our financial specialists to conduct thorough audits and jurisdictional assessments, ensuring asset titles are clear and compliant. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 my-auto equalize">
                            <div class="perfect-script-items1">
                                <div class="icon">
                                    <img class="lazy" src="{{ asset('images/tokenized-asset-offering/icons/creation.png') }}">
                                </div>
                                <div class="content">
                                    <p><strong>Formation of SPV/SPE Entities</strong> Establish a Special Purpose Vehicle (SPV) or Special Purpose Entity (SPE) to manage and own high-value assets, providing a secure foundation for tokenization. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 my-auto equalize">
                            <div class="perfect-script-items1">
                                <div class="icon">
                                    <img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/smart-contracts1.webp') }}">
                                </div>
                                <div class="content">
                                    <p><strong>Tailored Blockchain Engineering</strong> Craft bespoke blockchain solutions with integrated smart contracts, utilizing cutting-edge platforms like Ethereum, Solana, Hyperledger, or Stellar. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 my-auto equalize">
                            <div class="perfect-script-items1">
                                <div class="icon">
                                    <img class="lazy" src="{{ asset('images/tokenized-asset-offering/icons/assets.png') }}">
                                </div>
                                <div class="content">
                                    <p><strong>Precise Asset Appraisal</strong>Have an independent auditing firm evaluate asset worth to determine token pricing, ensuring a transparent and accurate valuation process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 my-auto equalize">
                            <div class="perfect-script-items1">
                                <div class="icon">
                                    <img class="lazy" src="{{ asset('images/tokenized-asset-offering/icons/dashboard.png') }}">
                                </div>
                                <div class="content">
                                    <p><strong>Dynamic Dashboard Creation</strong> Develop advanced dashboards for efficient investor and fund management, incorporating regulatory compliance directly into the smart contracts. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 my-auto equalize">
                            <div class="perfect-script-items1">
                                <div class="icon">
                                    <img class="lazy"
                                        src="{{ asset('images/tokenized-asset-offering/icons/tokenization.png') }}">
                                </div>
                                <div class="content">
                                    <p><strong>Innovative Tokenized Asset Launch</strong> Execute a Tokenized Asset Offering (TAO) using smart contracts to facilitate the secure acquisition of RWA tokens within a compliant framework. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 my-auto equalize">
                            <div class="perfect-script-items1">
                                <div class="icon">
                                    <img class="lazy" src="{{ asset('images/tokenized-asset-offering/icons/exchange.png') }}">
                                </div>
                                <div class="content">
                                    <p><strong>Strategic Exchange Placement</strong> List tokens on security token exchanges for secondary trading opportunities, with options for accredited investors to transact directly with token holders.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <style type="text/css">
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
        }

        div#why_ben {
            padding-bottom: 10px
        }

        .ben_wrap span {
            background: #180a52;
            width: 80px;
            text-align: center;
            margin-right: 15px;
            position: absolute;
            height: 80px;
            left: 0;
            border-radius: 7px;
        }
    </style>
    <style type="text/css">
        .prom-icon {
            margin-bottom: 15px;
        }

        .prom-desp h4 {
            font-size: 18px;
            letter-spacing: normal;
        }
    </style>
    <div class="common_spacing gray_bg">
        <div class="container">
            <div class=" ">
                <h3 class="sec_tit underline text-center">Our Premier Real-World Asset Tokenization Solutions</h3>
                <p class="text-center"></p>
            </div>
            <div class="row mt20">
                <div class="container container-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenized-asset-offering/icons/collectibles.png') }}">
                            </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Exclusive Collectibles</strong>Transform a variety of high-value collectibles—ranging from luxury automobiles and rare art pieces to advanced electronic gadgets and medical equipment—into digital tokens with our expertise.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenized-asset-offering/icons/metals.png') }}">
                            </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Valuable Metals</strong>Convert precious metals such as diamonds, platinum, and gold into blockchain tokens, dramatically reducing investment entry barriers and expanding global access.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenized-asset-offering/icons/assets.png') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Financial Assets</strong>Turn equity shares, real estate properties, and certificates of deposit into blockchain-based tokens, unlocking a broad spectrum of investment possibilities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenized-asset-offering/icons/business.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Intellectual Property</strong>Enhance the value of patents, licenses, and trademarks by tokenizing them, facilitating more accessible distribution, and fostering community engagement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenized-asset-offering/icons/products.svg') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Consumer Goods</strong>Revolutionize the management of consumables—including food, beverages, and pharmaceuticals—by tokenizing these products to improve supply chain transparency and efficiency.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <img class="lazy"
                                    src="{{ asset('images/tokenized-asset-offering/icons/open-fundrasing.webp') }}"> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">Agricultural Assets</strong>Digitize agricultural products like crops, land, and farming equipment, offering new avenues for funding and supporting advancements in the agricultural sector.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .pricing-table {
            display: block;
        }

        .pricing-table {
            padding: 0px;
        }

        .data {
            margin: 10px 0;
            text-align: center;
        }

        .data table {
            margin-bottom: 0;
        }

        .data table .pr_pack th {
            font-size: 14px;
            line-height: 1.4;
            text-transform: uppercase;
            background: linear-gradient(#180a52, #5100a1);
        }

        .data table th {
            background: #000000;
            font-size: 20px;
            padding: 10px 5px;
        }

        .data table td,
        .data table th {
            text-align: center;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
            padding: 10px 15px;
        }

        a.accordion-toggle.tab_high {
            display: block;
            padding: 11px 5px;
            text-transform: uppercase;
            font-size: 16px;
            background: #180a52 !important;
            color: #fff !important;
            border-bottom: 1px solid #bbb;
            font-weight: bold;
        }

        .accordion-toggle:after {
            font-family: Arial;
            content: "+";
            float: right;
            background: #fff;
            color: #000;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            font-weight: bold;
            line-height: 25px;
        }

        .data table {
            margin-bottom: 0;
        }

        @media (max-width: 767px) {
            .data table .pr_pack th {
                font-size: 13px;
            }
        }

        @media screen and (max-width: 900px) {
            .pricing-table {
                display: block;
                overflow: scroll;
            }
        }

        .font_feature {
            font-size: 16px !important;
        }

        @media (max-width: 767px) {
            a.accordion-toggle.tab_high {
                font-size: 12px;
            }
        }

        .data table .pr_pack th {
            font-size: 20px;
            line-height: 1.4;
            text-transform: uppercase;
            background: linear-gradient(#180a52, #5100a1);
        }

        .data table th {
            background: #000000;
            font-size: 20px;
            padding: 10px 5px;
        }

        .data table td {
            padding: 5px 10px;
        }

        .data table td img {
            width: 25px;
        }

        .data table td img.no_ic {
            width: 20px;
        }

        .data table th.theme-color-bg {
            padding: 11px 5px;
            text-transform: uppercase;
            font-size: 16px;
            font-weight: bold;
            background: #180a52 !important;
        }

        .data tr td:nth-child(1) {
            width: 30% !important;
        }

        .data .table-striped tr td:nth-child(2),
        .data .table-striped tr td:nth-child(3),
        .data .table-striped tr td:nth-child(4) {
            width: 18% !important;
        }

        .pricing-table {
            padding: 0px;
        }

        .pricing-table {
            display: block;
        }

        @media screen and (max-width: 900px) {
            .pricing-table {
                display: block;
                overflow: scroll;
            }
        }

        table.table-striped.order_btn td {
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            .data table th.theme-color-bg {
                font-size: 13px;
            }

            .table-striped {
                overflow-x: scroll;
                width: 100%;
            }

            .data table th:last-child {
                margin: 10px 0 0;
                display: table-cell;
                width: 100%;
            }

            .data table th {
                background: #000000;
                font-size: 13px;
                padding: 10px 5px;
            }

            .data table td {
                padding: 5px 6px;
            }

            .data table tbody tr:first-child th:last-child {
                transform: none;
            }
        }

        .data table {
            margin-bottom: 0;
        }

        @media screen and (max-width: 500px) {

            .data .table-striped tr td:nth-child(2),
            .data .table-striped tr td:nth-child(3),
            .data .table-striped tr td:nth-child(4) {
                width: 20% !important;
            }

            a[type="button"] {
                font-weight: 700;
                display: block;
                cursor: pointer;
                padding: 10px 20px;
                border-radius: 3px;
            }
        }
    </style>
    <style type="text/css">
        .perfect-script-items1 {
            -webkit-box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
            box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
            padding: 25px 15px 10px;
            border-radius: 16px;
            background-color: #fff;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            min-height: 210px;
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
            box-shadow: 3px 14px 13px 0px #0000003b;
            z-index: 9;
            float: left;
            background: #180a52;
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
            color: #180a52;
            font-size: 18px;
        }

        .perfect-script-items1 p {
            text-align: left;
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
        .awesome-features-wrapper {
            border: 1px solid #180a52b0;
            padding-top: 40px;
            padding-bottom: 40px;
            transition: .3s;
            position: relative;
            margin-bottom: 30px;
            border-radius: 10px;
        }

        .awesome-features-wrapper::before {
            background: #180a52;
            height: 20px;
            width: 3px;
            content: "";
            position: absolute;
            left: -2px;
            top: 65px;
        }

        .awesome-features-wrapper::after {
            background: #180a52;
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
            padding: 0 41px;
        }
    </style>
    <section class="common_spacing">
        <div class="container">
            <div class="row">
                <h2 class="sec_tit underline text-center" style="width: 100%">Why Partner with Us for Real-World Asset Tokenization?</h2>
            </div>
            <div class="row mt40">
                <div class="container container-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                        <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon flaticon-air-freight">
                                        <img class="img-fuild lazy"
                                            style="width: 65px !important; height:65px !important;"
                                            src="{{ asset('images/tokenized-asset-offering/icons/pioneering_technology.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Pioneering Technology</h3>
                                </div>
                                <div class="featured-desc">We leverage cutting-edge technology to deliver top-tier tokenization solutions tailored to your needs. Our expertise ensures that your real-world asset (RWA) projects are executed with precision and efficiency.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                        <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon flaticon-air-freight">
                                        <img class="img-fuild lazy"
                                            style="width: 65px !important; height:65px !important;"
                                            src="{{ asset('images/tokenized-asset-offering/icons/experts.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Blockchain Mastery</h3>
                                </div>
                                <div class="featured-desc">Our seasoned professionals bring extensive experience and advanced blockchain technology to the table, providing you with high-caliber solutions designed to meet your specific requirements.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                        <div class="featured-icon-box  text-left style3">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon flaticon-air-freight">
                                        <img class="img-fuild lazy"
                                            style="width: 65px !important; height:65px !important;"
                                            src="{{ asset('images/tokenized-asset-offering/icons/customization.webp') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Tailored Solutions</h3>
                                </div>
                                <div class="featured-desc">We specialize in delivering bespoke tokenization services, meticulously crafted to align with your unique business objectives and operational needs.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                        <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon flaticon-air-freight">
                                        <img class="img-fuild lazy"
                                            style="width: 65px !important; height:65px !important;"
                                            src="{{ asset('images/tokenized-asset-offering/icons/financial-service.webp') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Around-the-Clock Assistance</h3>
                                </div>
                                <div class="featured-desc">Our dedicated support team is available 24/7/365, ready to address any technical issues and provide immediate assistance to ensure the smooth operation of your tokenization platform.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                        <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon flaticon-air-freight">
                                        <img class="img-fuild lazy"
                                            style="width: 65px !important; height:65px !important;"
                                            src="{{ asset('images/tokenized-asset-offering/icons/security.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Robust Security</h3>
                                </div>
                                <div class="featured-desc">Our commitment to security is unwavering, offering advanced protection measures that safeguard your tokenized assets and instill confidence in both businesses and investors.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                        <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon flaticon-air-freight">
                                        <img class="img-fuild lazy"
                                            style="width: 65px !important; height:65px !important;"
                                            src="{{ asset('images/tokenized-asset-offering/icons/pricing.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Cost-Effective Packages</h3>
                                </div>
                                <div class="featured-desc">We provide competitively priced solutions, making it affordable to tokenize a wide range of real-world assets and integrate them into your business strategy.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-auto equalize">
                        <div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
                            <div class="featured-icon">
                                <div
                                    class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon flaticon-air-freight">
                                        <img class="img-fuild lazy"
                                            style="width: 65px !important; height:65px !important;"
                                            src="{{ asset('images/tokenized-asset-offering/icons/support.png') }}" alt>
                                    </i> </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Comprehensive Support</h3>
                                </div>
                                <div class="featured-desc">From the initial concept through to ongoing maintenance, our end-to-end services cover every aspect of your asset tokenization journey, ensuring a seamless experience.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

    {{-- simple-faqs.blade --}}
    @include('static.simple-faqs-section', [
        'faqs' => [
            [
                'ques' => 'What Types of Real-World Assets Can Be Tokenized?',
                'ans' => 'Real-world assets such as real estate, precious metals, collectibles, financial instruments, and agricultural products can be tokenized. This process converts physical or traditional assets into digital tokens, enabling easier trading and enhanced liquidity.'
            ],
            [
                'ques' => 'What Are the Advantages of Tokenizing Real-World Assets (RWAs)?',
                'ans' => 'Tokenizing RWAs offers numerous benefits, including increased liquidity through fractional ownership, enhanced transparency with immutable records, and broader market access. It also streamlines transactions and reduces costs by eliminating intermediaries.'
            ],
            [
                'ques' => 'Can You Provide an Example of RWA Tokenization?',
                'ans' => 'An example of RWA tokenization is converting a piece of artwork into digital tokens that represent fractional ownership. This allows multiple investors to own and trade shares of the artwork, broadening investment opportunities and liquidity.'
            ],
            [
                'ques' => 'Why is Our Company the Top Choice for RWA Tokenization?',
                'ans' => 'We excel in RWA tokenization by combining advanced technology with deep industry expertise. Our solutions offer robust security, tailored customization, and comprehensive support, ensuring a seamless and effective tokenization process.'
            ],
            [
                'ques' => 'How Can I Start an RWA Tokenization Project?',
                'ans' => "To initiate an RWA tokenization project, contact us to discuss your asset and business needs. We'll guide you through the entire process, from asset evaluation and blockchain integration to token issuance and market deployment."
            ],
            [
                'ques' => 'Do You Provide Platforms for Real Estate Tokenization?',
                'ans' => "Yes, we offer specialized platforms for tokenizing real estate assets. These platforms are designed to facilitate the seamless conversion of property into digital tokens, improving accessibility and liquidity for real estate investments."
            ],
            [
                'ques' => 'Why Choose Us for Digital Asset Tokenization Services?',
                'ans' => 'Choose us for our innovative approach, extensive experience, and commitment to delivering secure, customizable tokenization solutions. Our team ensures that your digital asset projects are executed with the highest standards of efficiency and compliance.'
            ],

        ],
    ])

</div>
</div>

<script src="js/vendor.js" type="4ad006904943dc8d6673a986-text/javascript"></script>
<script src="js/plugins.js" type="4ad006904943dc8d6673a986-text/javascript"></script>
<script src="js/main.js" type="4ad006904943dc8d6673a986-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="4ad006904943dc8d6673a986-text/javascript"></script>
<script type="4ad006904943dc8d6673a986-text/javascript">
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
<script type="4ad006904943dc8d6673a986-text/javascript">
    $('.home-talk-experts').click(function() {
                $('html, body').animate({
                    scrollTop: $('#newsletter-form-sec').offset().top
                }, 2000);
            });
            var url = window.location.href;
            $('#url').val(url);
            // alert(url);
</script>
<script type="4ad006904943dc8d6673a986-text/javascript">
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
                    data-cf-modified-4ad006904943dc8d6673a986->
                <input type="hidden" name="phone" id="phone_newsletter">
                <input type="hidden" name="url" id="url" value="/real-world-asset-tokenization">
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
<script type="4ad006904943dc8d6673a986-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="4ad006904943dc8d6673a986-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="4ad006904943dc8d6673a986-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="4ad006904943dc8d6673a986-text/javascript">
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

<script type="4ad006904943dc8d6673a986-text/javascript">
    window.__lc = window.__lc || {};
        window.__lc.license = 9464790;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>

<script type="4ad006904943dc8d6673a986-text/javascript">
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
<script type="4ad006904943dc8d6673a986-text/javascript">
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




<script type="4ad006904943dc8d6673a986-text/javascript">
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


<script type="4ad006904943dc8d6673a986-text/javascript">
    $(".crypto-popup").click(function(e) {
            $('crypto-popup').addClass('fixedPosition full-width');
            $(".login-popup").addClass('show');
            e.stopPropagation();
        });
</script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="4ad006904943dc8d6673a986-|49" defer></script>
</div>


@endsection