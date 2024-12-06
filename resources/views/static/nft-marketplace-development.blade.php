@extends('layouts.static')
    @section('title', 'NFT Marketplace Development')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    .step-points .fa {
        font-size: 30px;
        color: #fff;
    }

    .banner_content,
    .perfect-script-items p {
        text-align: left
    }

    .contentall a {
        background: #1758b2;
        margin-top: 20px
    }

    .strategies-items1 .icons {
        order: 2;
        margin-right: 15px
    }

    .contentall a:hover {
        background: #ad24ff
    }

    .banner {
        background-image: url('{{ asset('images/nftm/bannetr.webp') }}');
        background-size: cover;
        padding-top: 0px;
        padding-bottom: 0px;
        height: auto
    }

    .banner-overlay {
        background-color: rgb(0 0 0 / 0%);
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to right, #00000000, #00000000);
        opacity: .95
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none;
        padding-top: 100px;
        padding-bottom: 50px
    }

    .banner_content .contentall {
        margin-top: 80px
    }

    .ban_tirt,
    .contentall h1 {
        margin-bottom: 5px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 30px;
        text-transform: capitalize
    }

    .contentall p {
        font-weight: 400;
        line-height: 1.6;
        font-size: 17px;
        margin: 0 auto 0px;
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
        color: #000;
        line-height: 1.4
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

    body,
    section.roadmap .green {
        color: #000
    }

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
        background: #f2f2f2;
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

    @media (max-width:1199px) {

        .ban_tirt,
        .contentall h1 {
            font-size: 30px
        }
    }

    @media (max-width:768px) {
        .banner_content .contentall {
            margin-top: 30px;
            text-align: center
        }

        body,
        html {
            font-size: calc(15px + (14 - 12) * ((100vw - 600px)/ (1140 - 600)))
        }

        .banner {
            padding-top: 80px;
            padding-bottom: 50px
        }

        .banner-overlay {
            background: #023c5100
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

        .flip-box {
            max-width: 450px;
            margin: 0 auto 30px
        }

        .pull-left img {
            margin-top: 30px
        }

        .eto-exchange-flip .flip-box,
        .sto-flip .flip-box {
            min-height: auto
        }

        .banner_content p br,
        .pr_arr:after,
        .pr_arr:before,
        .sec_tit br {
            display: none !important
        }
    }

    h3.section-title {
        font-size: 25px !important;
        font-weight: 700;
        text-transform: capitalize;
        color: #000
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
        margin-bottom: 10px
    }

    .sto-flip .flip-box {
        min-height: 300px
    }

    div#assis_t .flip-box {
        padding: 30px 15px 20px;
        min-height: 280px
    }

    .intro_cnt img {
        border-radius: 10px;
        margin-top: 30px
    }

    div#assis_t .flip-box img {
        width: 54px;
        margin-top: 7px
    }

    .flip-box-row {
        margin-bottom: 0
    }

    .flip-box {
        margin-bottom: 30px
    }

    a.home-talk-experts.w_bt {
        background: no-repeat;
        color: #140050;
        border: 2px solid #140050;
        padding: 8px 25px
    }

    a.home-talk-experts.w_bt:hover {
        color: #000 !important
    }

    .sec_tit h2 {
        display: inline
    }

    .nec-btn {
        border-radius: 30px !important
    }

    .nec-btn:hover {
        transform: scale(.9)
    }

    .reg {
        margin-left: 20px !important
    }

    @media screen and (max-width:500px) {
        .reg {
            width: auto !important
        }
    }

    .Package_list,
    .bg-dark-half-md {
        width: 100%;
        display: inline-block
    }

    .strategies {
        padding: 50px 0;
        color: #000
    }

    .strategies-items,
    .strategies-items1 {
        padding: 15px;
        margin-bottom: 20px;
        display: grid;
        grid-template-columns: 50% 50%;
        grid-gap: 15px;
        border-radius: 15px
    }

    .strategies-items .desp-wrap,
    .strategies-items1 .desp-wrap {
        text-align: justify;
        padding: 15px
    }

    .icons img {
        border-radius: 15px
    }

    .strategies-items .desp-wrap h3,
    .strategies-items1 .desp-wrap h3 {
        display: inline-block;
        margin-top: 5px;
        margin-bottom: 10px;
        padding-bottom: 10px;
        font-weight: 700;
        font-size: 23px;
        border-bottom: 1px solid #eee;
        background: linear-gradient(#000, #000);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent
    }

    .package_includes {
        color: #fff;
        background: url(../images/products/package_banner.webp) 0 0/cover no-repeat fixed
    }

    .Package_list {
        background: #2f1777;
        padding: 30px 10px;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
        min-height: 180px !important
    }

    .Package_list img {
        height: 55px
    }

    .Package_list h3 {
        display: block;
        font-size: 18px;
        margin-top: 12px;
        margin-bottom: 8px;
        color: #fff
    }

    .product-features {
        background: #140050;
    }

    .tech-padding {
        padding-bottom: 100px
    }

    .space-pt {
        padding: 100px 0 0
    }

    .tech-padding:before {
        height: 470px !important
    }

    .bg-dark-half-md {
        background: #140050;
        padding: 100px 0
    }

    @media screen and (max-width:768px) {
        .teck .category-grid-style-01 .category-item {
            width: 50% !important
        }
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
        border-radius: 5px
    }

    .teck .category-grid-style-01 .category-item {
        padding: 30px;
        text-align: center;
        width: 14.27%;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
        position: relative;
        cursor: pointer
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
        transition: .3s ease-in-out
    }

    .teck .category-grid-style-01 .category-item .category-icon {
        color: #333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px;
        position: relative;
        z-index: 2
    }

    .teck .category-icon img {
        padding: 15px
    }

    .teck .category-grid-style-01 .category-item .category-title {
        color: #022d62;
        font-weight: 700;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
        font-size: 16px
    }

    .category-grid-style-01 .category-item:hover:before {
        -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
        transition: .3s ease-in-out
    }

    .text-white {
        color: #fff
    }

    .perfect-script-items {
        padding: 30px 15px 10px;
        border-radius: 4px;
        background-color: #fff;
        -webkit-transition: .3s;
        transition: .3s;
        display: flex;
        min-height: 206px;
        box-shadow: 11px -1px 11px #00000030;
        margin-bottom: 20px
    }

    .perfect-script-items .icon {
        width: 70px;
        height: 70px;
        margin: 20px auto 50px;
        line-height: 75px;
        position: relative;
        border-radius: 50%;
        background-image: linear-gradient(293deg, #140050 0, #140050 100%);
        color: #fff;
        font-size: 40px;
        z-index: 9;
        float: left
    }

    .perfect-script-items .icon img {
        width: 45px;
        margin-top: -7px;
        -webkit-filter: brightness(0) invert(1);
        filter: brightness(0) invert(1)
    }

    .perfect-script-items .content {
        display: block;
        float: left;
        width: 80%;
        padding-left: 30px
    }

    .perfect-script-items h3 {
        font-size: 16px;
        line-height: 22px;
        text-align: left;
        color: #000
    }

    .app-overview {
        padding: 0 10px;
        cursor: pointer;
        margin-bottom: 2px
    }

    .app-overview .media {
        min-height: 150px
    }

    .app-overview .media .media-left {
        padding-right: 0;
        overflow: hidden
    }

    .app-overview .media .media-left .app-icon {
        width: 94px;
        height: 94px;
        border-radius: 50%;
        left: 12px;
        background: #140050;
        position: relative;
        text-align: center;
        transition: .3s linear
    }

    .app-icon img {
        width: 50px;
        margin-top: 25px;
        filter: brightness(0) invert(1)
    }

    .app-overview .media .media-body {
        padding-left: 33px
    }

    .media-body h4 {
        font-weight: 700
    }

    .list {
        margin-top: 0;
        margin-bottom: 0 !important;
        font-size: 17px;
        line-height: 35px;
        text-indent: -17px;
        list-style: none
    }

    .list li {
        word-break: break-word
    }

    .list li:before {
        content: " \f0da ";
        font-family: FontAwesome;
        color: #2e9107;
        margin-right: 10px;
        font-size: 18px
    }

    .ft_b .ft_ic img {
        margin-top: 13px;
        margin-bottom: 13px;
        width: 60px
    }

    .ft_b {
        justify-content: center;
        align-items: center;
        background: #fff;
        border-radius: 10px;
        padding: 26px;
        text-align: center;
        margin-bottom: 2rem;
        min-height: 266px
    }

    .ft_b:hover {
        background: #140050;
        color: #fff
    }

    .tec_x {
        max-width: 100%;
        background: #fff;
        margin-bottom: 35px;
        padding: 12px 10px 5px;
        outline: #00c6a466 solid 5px;
        border: 5px solid #eaeaea
    }

    .tec_x img {
        height: 90px
    }

    .tec_x h4 {
        letter-spacing: 0;
        font-size: 18px;
        margin-top: 10px;
        line-height: 1.6;
        margin-bottom: 10px
    }

    @media (max-width:769px) {
        .tec_x {
            max-width: none !important
        }
    }

    .tinder-padding-sec {
        padding: 75px 0 !important
    }

    .clearfix {
        display: block
    }

    section.roadmap .row.left,
    section.roadmap .row.right {
        position: relative !important
    }

    section.roadmap .box1.left {
        text-align: right;
        margin-bottom: 20px
    }

    .box1 {
        -webkit-box-shadow: 0 0 7px 0 #b3b3b3;
        -moz-box-shadow: 0 0 7px 0 #b3b3b3;
        box-shadow: 0 0 7px 0 #b3b3b3;
        background-color: #fff;
        border-radius: 7px;
        padding-top: 20px;
        padding-bottom: 20px;
        min-height: 175px;
        opacity: 1
    }

    section.roadmap .dots.pull-right {
        margin-right: 50px !important
    }

    .pull-right {
        float: right !important
    }

    section.roadmap .dots.pull-left {
        margin-left: 50px !important
    }

    section.roadmap .dots {
        width: 50% !important
    }

    section.roadmap span.heading1 {
        font-size: 21px;
        top: -4px;
        font-weight: 600
    }

    section.roadmap .vertical-line.right {
        border-right: 2px solid #00cf92;
        margin-right: 0;
        padding-right: 20px;
        margin-top: 10px !important
    }

    section.roadmap .vertical-line.left {
        border-left: 2px solid #00cf92;
        margin-left: 0;
        padding-left: 20px;
        margin-top: 10px !important
    }

    section.roadmap .box1.right {
        margin-bottom: 20px;
        padding-left: 40px
    }

    @media (min-width:1150px) {
        section.roadmap .box1.right.first {
            margin-top: 110px !important
        }

        section.roadmap .lines.third {
            top: 48px
        }

        section.roadmap .box1.left.third {
            top: -20px !important
        }

        section.roadmap .box1.right.second {
            top: 45px !important
        }

        section.roadmap .box1.left.second {
            top: -65px !important
        }

        section.roadmap .box1.left:after,
        section.roadmap .box1.right:after {
            content: '';
            height: 3px;
            background: #140050;
            top: 50%;
            color: #f2f2f2;
            z-index: 1;
            position: absolute;
            text-align: center
        }

        section.roadmap .lines.second {
            top: 5px
        }

        section.roadmap .box1.right:after {
            width: 70px;
            left: -70px
        }

        section.roadmap .box1.left:after {
            width: 80px;
            right: -80px
        }

        section.roadmap .lines {
            position: absolute;
            left: 50%
        }

        section.roadmap .lines.first {
            top: 70px
        }

        section.roadmap .roadmap-line:after {
            content: "";
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: absolute;
            top: -30px;
            left: -6px;
            color: #fff;
            text-align: center;
            z-index: 2;
            background: #140050 !important
        }

        section.roadmap .box1.right.four,
        section.roadmap .box1.right.third {
            top: 88px !important
        }

        section.roadmap .roadmap-line {
            background: #ccc;
            width: 7px;
            height: 70px;
            position: relative;
            margin-top: 40px
        }

        section.roadmap .lines.four {
            top: -17px
        }

        section.roadmap .box1.right.four.roadmap-line:after {
            background: #140050 !important
        }
    }

    .shard_master-node {
        background: linear-gradient(#14005080, #140050c9), url(images/nftm/6.webp) top left/cover no-repeat;
        padding: 120px 0
    }

    .shard-marter-cnt {
        text-align: center;
        background: rgba(255, 255, 255, .92);
        padding: 30px 15px 0;
        border: 5px dotted #00b7c2;
        margin-bottom: 30px
    }

    .bg-w,
    .bg-w1 {
        background: #fff
    }

    .bg-w2 {
        background: #e0dddd;
        font-weight: 600
    }

    .workflow {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        padding: 0;
        margin: 0
    }

    .workflow li {
        text-align: center;
        background: #d5d4e3;
        border-radius: 7px;
        margin: 1.5%;
        padding: 10px;
        width: 22%;
        position: relative
    }

    .workflow li img {
        width: 65px
    }

    .workflow li p {
        margin-bottom: 0;
        font-weight: 600
    }

    .workflow li:after {
        content: '';
        position: absolute;
        top: 20%;
        right: -15px;
        width: 15px;
        height: 15px;
        border-top: 25px solid transparent;
        border-bottom: 25px solid transparent;
        border-left: 15px solid #140050
    }

    .workflow li:last-child:after {
        display: none
    }

    .workflow .fa {
        color: #140050;
        font-size: 32px;
        margin-top: 7px
    }

    @media (max-width:767px) {

        .strategies-items,
        .strategies-items1 {
            display: block
        }

        .workflow li {
            margin: 3%;
            width: 44%
        }

        .data table th:last-child {
            margin: 10px 0 0;
            display: table-cell;
            width: 100%
        }

        .data table tbody tr:first-child th:last-child {
            transform: scale(1);
            box-shadow: 0 0 10px 0 rgb(0 0 0 / 30%)
        }
    }

    .necbtn {
        padding: 7px 12px
    }

    .btc {
        color: #000 !important;
        font-weight: 700
    }

    .pdg {
        padding: 10px 70px !important
    }

    .font-wei {
        font-weight: 700;
        color: #000
    }

    /*#base{padding:50px 100px}*/
    .cor {
        background: #f9f9f9
    }

    .bdr {
        border-top: none !important
    }

    .lyst li {
        list-style-type: disc
    }

    #accordion .panel {
        border: none;
        border-radius: 3px;
        box-shadow: none;
        margin-bottom: 15px
    }

    #accordion .panel-heading {
        padding: 0;
        border: none;
        border-radius: 3px
    }

    #accordion .panel-title a {
        display: block;
        padding: 8px 15px 12px 50px;
        border: 1px solid #c3c3c3;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 700;
        color: #000;
        position: relative
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
        left: 15px
    }

    #accordion .panel-title a.collapsed:before {
        content: "\f067"
    }

    #accordion .panel-body {
        padding: 10px 15px;
        font-size: 15px;
        color: #000;
        line-height: 27px;
        border: 2px solid #ddd
    }

    .pro_featureline:after {
        content: '';
        display: block;
        clear: both
    }

    .pro_featureline .featureline {
        width: calc(50% + 65px);
        margin: 0 0 15px;
        float: left
    }

    .pro_featureline .featureline-content {
        padding: 0 150px 0 60px;
        display: block;
        position: relative
    }

    .pro_featureline .featureline-icon,
    .pro_featureline .featureline-icon:before {
        position: absolute;
        top: 50%;
        clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%)
    }

    .pro_featureline .featureline-content:hover {
        text-decoration: none
    }

    .pro_featureline .featureline-icon {
        background: linear-gradient(to right, #53bcf07a 49%, #53bcf07a 50%);
        font-size: 50px;
        text-align: center;
        line-height: 120px;
        width: 120px;
        height: 120px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        transform: translateY(-50%);
        right: 5px
    }

    .pro_featureline .featureline-icon:before {
        content: "";
        background: #f2f2f2;
        width: 80%;
        height: 80%;
        transform: translateX(-50%) translateY(-50%);
        left: 50%;
        z-index: -1
    }

    .pro_featureline .featureline-icon img {
        width: 50px;
        height: 50px
    }

    .pro_featureline .title {
        color: #000;
        font-size: 22px;
        font-weight: 700;
        text-transform: capitalize;
        margin: 0 0 7px
    }

    .pro_featureline .title:after {
        content: "";
        background: #777;
        width: 50px;
        height: 2px;
        margin: 5px 0 0;
        display: block;
        clear: both
    }

    .pro_featureline .description {
        color: #000;
        font-size: 15px;
        letter-spacing: 1px;
        margin: 0 0 5px
    }

    .pro_featureline .featureline:nth-child(2n) {
        float: right
    }

    .pro_featureline .featureline:nth-child(2n) .featureline-content {
        padding: 0 60px 0 150px
    }

    .pro_featureline .featureline:nth-child(2n) .featureline-icon {
        right: auto;
        left: 5px
    }

    @media screen and (max-width:767px) {

        .pro_featureline .featureline,
        .pro_featureline .featureline:nth-child(2n) {
            width: 100%;
            margin: 0 0 40px
        }
    }

    @media screen and (max-width:576px) {

        .pro_featureline .featureline-content,
        .pro_featureline .featureline:nth-child(2n) .featureline-content {
            text-align: center;
            padding: 140px 0 60px
        }

        .pro_featureline .featureline-icon,
        .pro_featureline .featureline:nth-child(2n) .featureline-icon {
            transform: translateX(-50%);
            top: 10px;
            left: 50%;
            right: auto
        }

        .pro_featureline .title:after {
            margin: 5px auto 0
        }
    }

    .font_wei {
        color: #fff !important;
        font-weight: 700
    }

    .rounded-border {
        border-radius: 10px
    }

    .strategy_content {
        z-index: 1;
        position: relative
    }

    .icon-text-1 {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        background: #f4f4f4;
        padding: 15px;
        border-left: 5px solid #140050
    }

    .icon-text-1 .icon-text-icon {
        width: 80px;
        height: 80px;
        border-radius: 12px;
        margin-bottom: 20px;
        line-height: 80px;
        text-align: center
    }

    .icon-text-1 img {
        width: 64px;
        height: 64px;

        /*            animation:5s infinite spin*/
    }

    .icon_content {
        padding-left: 20px;
        min-height: 100px;
        width: 80%
    }

    .icon-text-1 h3 {
        font-size: 18px;
        color: #000;
        font-weight: 700
    }

    .icon-text-1 p {
        margin: .6rem 0 0
    }

    @keyframes spin {
        0% {
            transform: rotateY(0)
        }

        50% {
            transform: rotateY(180deg)
        }

        100% {
            transform: rotateY(360deg)
        }
    }

    .step-points li {
        display: grid;
        grid-template-columns: 60px auto;
        margin-bottom: 20px;
        align-items: center;
        border-radius: 7px;
        background: #d5d4e3
    }

    .step-points li span {
        width: 60px;
        height: 60px;
        background: #140050;
        border-radius: 7px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .step-points li span img {
        padding: 10px;
        filter: brightness(0) invert(1)
    }

    .step-points-content {
        margin-left: 15px
    }

    .step-points li h4 {
        color: #000;
        font-weight: 700;
        font-size: 17px
    }

    .step-points li p {
        margin-bottom: 0;
        text-align: justify
    }

    .step-points li span,
    .step-points-content {
        animation-name: fadeIn;
        animation-duration: 3s;
        animation-iteration-count: 1
    }

    @keyframes fadeIn {
        0% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }

    .internal_link {
        color: #140050;
        font-weight: 700
    }

    .dot_pos {
        margin-top: 0 !important
    }

    .dot_4 {
        background-color: #fff !important
    }

    .desp-wrap {
        background: #14005021;
        padding: 20px;
        border-radius: 12px;
        min-height: auto
    }

    .icon-text-icon .fa {
        text-align: center;
        color: #140050;
        font-size: 3rem;
        line-height: 2.5
    }

    .nectar-button {
        background: #1758b2;
    }

    .nectar-button:hover {
        background: #ad24ff;
    }

    /*.owl-carousel .owl-nav [class*=owl-]{background:#1758b2;}
    .owl-carousel .owl-nav:hover [class*=owl-]{background: #ad24ff;}*/

    a[type="button"] {
        background: #1758b2;
    }

    .theme-color-bg {
        background: #140050 !important;
    }

    .data table td,
    .data table th {
        padding: 15px;
    }

    .newsletter_videos {
        background: #140050;
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
        background: #023985
    }

    #counter-stats .stats:nth-child(2),
    #counter-stats .stats:nth-child(4) {
        background: #1758b2
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

    .ribbon {
        margin-bottom: 20px;
        position: relative;
        color: #fff;
        -webkit-animation: 250ms main;
        -moz-animation: 250ms main;
        -ms-animation: main 250ms;
        animation: 250ms main;
        z-index: 1;
        display: inline-block
    }

    .title-text {
        color: #fff;
        text-align: center;
        background: #140050;
        padding: 20px 30px;
        font-size: 26px;
        z-index: 9;
        line-height: 1.2em;
        font-weight: 700
    }

    .ribbon i {
        position: absolute
    }

    .ribbon i:nth-child(2),
    .ribbon i:nth-child(3) {
        position: absolute;
        left: -20px;
        bottom: -20px;
        z-index: -1;
        border: 20px solid transparent;
        border-right-color: #1d1339;
        -webkit-animation: .5s edge;
        -moz-animation: .5s edge;
        -ms-animation: edge 500ms;
        animation: .5s edge
    }

    .ribbon i:nth-child(3) {
        left: auto;
        right: -20px;
        border-right-color: transparent;
        border-left-color: #1d1339
    }

    .ribbon i:last-child,
    .ribbon i:nth-child(4) {
        width: 20px;
        bottom: -20px;
        left: -40px;
        z-index: -2;
        border: 30px solid #273276;
        border-left-color: transparent;
        -webkit-animation: .6s back;
        -moz-animation: .6s back;
        -ms-animation: back 600ms;
        animation: .6s back;
        -webkit-transform-origin: 100% 0;
        -moz-transform-origin: 100% 0;
        -ms-transform-origin: 100% 0;
        transform-origin: 100% 0
    }

    .ribbon i:last-child {
        bottom: -20px;
        left: auto;
        right: -40px;
        border: 30px solid #273276;
        border-right-color: transparent;
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0
    }

    @-webkit-keyframes main {
        0% {
            -webkit-transform: scaleX(0)
        }

        100% {
            -webkit-transform: scaleX(1)
        }
    }

    @-webkit-keyframes edge {

        0%,
        50% {
            -webkit-transform: scaleY(0)
        }

        100% {
            -webkit-transform: scaleY(1)
        }
    }

    @-webkit-keyframes back {

        0%,
        75% {
            -webkit-transform: scaleX(0)
        }

        100% {
            -webkit-transform: scaleX(1)
        }
    }

    @-moz-keyframes main {
        0% {
            -moz-transform: scaleX(0)
        }

        100% {
            -moz-transform: scaleX(1)
        }
    }

    @-moz-keyframes edge {

        0%,
        50% {
            -moz-transform: scaleY(0)
        }

        100% {
            -moz-transform: scaleY(1)
        }
    }

    @-moz-keyframes back {

        0%,
        75% {
            -moz-transform: scaleX(0)
        }

        100% {
            -moz-transform: scaleX(1)
        }
    }

    @keyframes main {
        0% {
            transform: scaleX(0)
        }

        100% {
            transform: scaleX(1)
        }
    }

    @keyframes edge {

        0%,
        50% {
            transform: scaleY(0)
        }

        100% {
            transform: scaleY(1)
        }
    }

    @keyframes back {

        0%,
        75% {
            transform: scaleX(0)
        }

        100% {
            transform: scaleX(1)
        }
    }

    @media (min-width:320px) and (max-width:768px) {
        .category-grid-style-01 .category-item {
            width: 33% !important
        }
    }

    .box,
    .sub_ff {
        position: relative
    }

    .sub_ff strong {
        display: block;
        font-size: 16px;
        color: #00000a !important;
        font-weight: 700;
        line-height: 28px
    }

    .dev {
        padding-left: 26px
    }

    .sub_ff {
        margin-top: 15px;
        margin-bottom: 0px
    }

    .sub_ff i {
        position: absolute;
        left: 0;
        color: #1758b2;
        line-height: 1.5;
        font-size: 19px
    }

    .awesome-features-icon-img {
        margin-bottom: 10px
    }

    .icon_content p strong {
        display: block;
        color: #140050;
        font-size: 18px;
        margin-bottom: 4px
    }

    .icon-text-1 h3 {
        font-size: 18px;
        color: #000;
        font-weight: 700
    }

    .icon-text-1 p {
        margin: .6rem 0 0
    }

    .icon-text-1 img {
        padding: 5px
    }

    @keyframes spin {
        0% {
            transform: rotateY(0)
        }

        50% {
            transform: rotateY(180deg)
        }

        100% {
            transform: rotateY(360deg)
        }
    }

    .awesome-features-wrapper {
        border: 1px solid #cdcdcd;
        background: #fff;
        padding-top: 30px;
        padding-bottom: 20px;
        min-height: auto;
        transition: 1s;
        position: relative;
        margin-bottom: 30px;
        border-radius: 7px
    }

    .awesome-features-wrapper::after {
        content: "";
        position: absolute;
        right: -6px;
        top: -6px;
        background: #140050;
        width: 90px;
        height: 90px;
        z-index: -1;
        transition: 1s;
        border-radius: 7px
    }

    .awesome-features-wrapper:hover::after {
        width: 200px;
        height: 200px
    }

    .awesome-features-icon-img .fa {
        color: #140050;
        font-size: 40px
    }

    .awesome-features-icon-img img {
        width: 60px;
        height: 60px
    }

    .awesome-features-text h4 {
        font-size: 22px;
        font-weight: 500;
        line-height: 1.3;
        margin-bottom: 18px
    }

    .awesome-features-text p {
        margin-bottom: 0;
        padding: 0 40px
    }

    .box {
        background-color: #fff;
        z-index: 0;
        overflow: hidden;
        padding: 20px;
        margin-bottom: 20px;
        min-height: 301px;
        border-radius: 10px;
        text-align: center;
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
        -webkit-box-shadow: 0 0 95px 0 rgb(0 0 0 / 7%);
        box-shadow: 0 0 95px 0 rgb(0 0 0 / 7%)
    }

    .box p strong {
        display: block
    }

    .box .icon-bg {
        background: linear-gradient(45deg, #140050, #00a7e6);
        width: 64px;
        height: 87px;
        padding: 8px;
        line-height: 66px;
        text-align: center;
        border-radius: 33px;
        margin: 13px auto;
        transform: rotate(45deg)
    }

    .box img {
        width: 80%
    }

    .mt-10 {
        margin-top: 10px
    }


    .new-features .awesome-features-wrapper {
        margin: 25px;
        background: #0c0742;
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
        right: -10px;
        top: -10px;
        border-radius: 20px;
        border: 1px solid #fff;
    }

    .new-features .awesome-features-wrapper:hover::before {
        width: 200px;
        height: 200px
    }

    .new-features .awesome-features-wrapper p,
    .new-features .awesome-features-wrapper p strong {
        color: #fff
    }

    .new-features .awesome-features-icon-img .fa {
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
    }

    .new_one,
    .owl-carouselthree img {
        border-radius: 10px
    }

    .new_one {
        display: flex;
        justify-content: start;
        align-items: center;
        background: #fff;
        padding: 15px;
        color: #fff
    }

    .new_one_span {
        font-size: 25px;
        font-weight: 700;
        line-height: 1.3;
        margin-right: 17px
    }

    .text-dark {
        color: #000
    }

    .item .Package_list img {
        max-width: 100% !important;
        width: 70px;
        height: 70px;
        margin: 0 auto
    }

    .text-white {
        color: #fff
    }

    .slider_img {
        border: 5px solid #fff;
        border-radius: 20px
    }

    .slider_img img {
        border-radius: 15px
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

    /*.technologies ul li img {height: 60px;}*/
    .technologies ul li p {
        margin-bottom: 0 !important;
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
        background: #0b4599;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(to right, #00aaff, #40f599);
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

    .tech-stack h4 {
        text-align: center;
        background: #234aa9;
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
        margin-bottom: 0px;
        color: #fff;
    }

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

        .tech-stack ul img {
            width: 100%;
        }

        .tech-stack ul {
            flex-wrap: wrap;
        }

        .tech-stack ul li {
            width: 48%;
            text-align: center;
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
                                <div class="ban_tirt">
                                    {{-- <p style="font-size:20px; padding-bottom: 0; margin-bottom: 0;"> World-Class,
                                        Innovative and Reputed</p> --}}
                                    <h1>Pioneers in NFT Marketplace Innovation</h1>
                                </div><br>
                                <p>Eager to launch a premier NFT marketplace? Collaborate with our elite development team, known for delivering excellence from ideation and design through to marketing and launch. We are dedicated to transforming your vision into a thriving reality.</p>

                                <div class="sub_ff" style="margin-top: 10px;">
                                    <i class="fa fa-check" aria-hidden="true"></i> <strong class="dev"><span
                                            class="text-white"> Efficient Minting </span></strong>
                                    <i class="fa fa-check" aria-hidden="true"></i> <strong class="dev"><span
                                            class="text-white"> Multi-Chain Integration </span></strong>
                                    <i class="fa fa-check" aria-hidden="true"></i> <strong class="dev"><span
                                            class="text-white"> Bulk Acquisition </span></strong>
                                    <i class="fa fa-check" aria-hidden="true"></i> <strong class="dev"><span
                                            class="text-white"> Seamless Listings </span></strong>
                                    <i class="fa fa-check" aria-hidden="true"></i> <strong class="dev"><span
                                            class="text-white"> Integrated Wallet Solutions</span></strong>
                                </div>


                                {{-- <a href="#viewdemo1" target="" class="nec-btn">View Demo</a>&nbsp;&nbsp;&nbsp;&nbsp;  --}}
                                <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn"><span>Discover Our Work Consult with Our Experts</span></a>
                                <!-- <a href="#newsletter-form-sec" class="nectar-button medium regular accent-color regular-button nec-btn reg"><span>Talk with our Experts</span></a> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left" style="padding-top: 60px;">
                            <img class="img-responsive img-fuild" src="{{ asset('images/nftm/nft-banner.webp') }}"
                                alt="NFT Marketplace Development" title="NFT Marketplace Development Company"
                                width="100%" height="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="ribbon">
                        <div class="title-text">Over 100 NFT Projects <br> Developed and Deployed Worldwide</div>
                        <i></i>
                        <i></i>
                        <i></i>
                        <i></i>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="section-title text-left underline">


                        <!-- <img class="lazy image" data-src="images/nftm/ribbon.webp" alt=" " title=" ">  -->
                        <div class="sec_tit"><br>
                            <h2>Comprehensive NFT Marketplace Solutions</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-left">With over a decade of experience, we assist entrepreneurs and brands in thriving within the NFT marketplace landscape. Utilizing cutting-edge Web3 technology and our in-depth industry knowledge, we build robust and future-ready NFT platforms. Our expertise extends across multiple blockchain networks, including Ethereum, Polygon, BNB Chain, Solana, Avalanche, and Harmony. We excel in crafting smart contracts and payment systems to elevate NFT ventures, offering customizable and scalable solutions with top-notch security.</p>

                    <div class="text-left mt20 cta_mine">
                        {{-- <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                            target="_blank" href="#"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
                            <span>Schedule A Meeting</span></a> --}}
                        <!-- <a href="free-nft-consulting" class="nectar-button medium regular accent-color regular-button nec-btn"><span>GET FREE CONSULTATION</span></a> -->
                        <a href="{{ url('consultation') }}" class="nectar-button medium regular accent-color regular-button nec-btn"><span>Book a Consultation Speak with Our Experts</span></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 right-sec">
                    <div class="digi">
                        <span class="color-text"> $3.369 Billion </span>
                        <div class="stats-head">Projected NFT Market Value by 2028</div>
                    </div>
                    <div class="digi">
                        <span class="color-text2"> 1.74 Million </span>
                        <div class="stats-head">NFT Transactions Weekly in 2024</div>
                    </div>
                    <div class="digi">
                        <span class="color-text3"> 10 Million </span>
                        <div class="stats-head">NFT Users and Traders in 2023</div>
                    </div>
                </div>
        </section>


        <style type="text/css">
            @media (max-width: 320px) {
                .right-sec {
                    padding-top: 20px !important;
                    width: 100% !important;
                    padding-left: 10px !important;
                }

                .digi>span {
                    font-size: 30px !important;
                }
            }

            @media (max-width: 768px) {
                .right-sec {
                    padding-top: 20px !important;
                    width: 100% !important;
                    padding-left: 10px !important;
                }
            }

            .right-sec {
                width: 31%;
                padding-left: 2%;
                margin-top: 20px;

            }


            .digi .stats-head {
                color: #000;
                padding: 0 5px 0;
                font-size: 14px;
                position: relative;
            }


            .color-text2 {
                background: linear-gradient(to right, #fc9b51, #fc6d58);
                -webkit-text-fill-color: transparent;
                -webkit-background-clip: text;
            }

            .color-text3 {
                background: linear-gradient(to right, #09cfde, #3794f8);
                ;
                -webkit-text-fill-color: transparent;
                -webkit-background-clip: text;
            }

            .digi {
                margin-bottom: 10px;
                border-bottom: 1px solid #ccc;
                padding: 12px 0;
            }

            .digi>span {
                font-size: 36px;
                margin-left: 2px;
                margin-right: 10px;
                font-weight: bold;

            }

            .color-text {
                background: linear-gradient(to right, #f2d84d, #fbab78);
                -webkit-text-fill-color: transparent;
                -webkit-background-clip: text;
            }
        </style>
        <section class="common_spacing">
            <div class="container">
                <div class="row mt20">
                    <div class="col-md-6">
                        <div class="section-title text-center">
                            <div class="sec_tit mt30">
                                <h2 class="section-title mb20">Comprehensive NFT Marketplace Development Solutions</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <p class="c-grey">We turn your visionary ideas into tangible results with a full range of NFT marketplace development services designed to boost your venture's efficiency. As leaders in the field, we utilize advanced technology to deliver a premier NFT marketplace.</p>
                    </div>

                </div>
                <div class="row mt20 container-center">
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-object-group" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>Design and Development</h3>
                                <p class="c-grey">Our team creates NFT marketplaces that support various token standards, such as ERC-721, ERC-998, and ERC-1155, incorporating user-friendly features and interfaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>Smart Contract Creation & Auditing</h3>
                                <p class="c-grey">We develop and review smart contracts to handle multiple functions and transactions within your NFT platform, eliminating the need for intermediaries.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-star-half" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>NFT Staking Platform</h3>
                                <p class="c-grey">Implement a staking and rewards system to motivate creators and increase user engagement, enhancing the NFT ecosystem.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>DAO & NFT Governance Integration</h3>
                                <p class="c-grey">Facilitate decentralized governance with a platform that promotes transparency and collective decision-making within your NFT community.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>NFT Wallet Development</h3>
                                <p class="c-grey">Integrate multi-currency wallets into your NFT platform, supporting various cryptocurrencies, stablecoins, and NFT standards.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>Ongoing NFT Marketplace Support</h3>
                                <p class="c-grey">Receive expert support for timely updates, operating system upgrades, and continuous improvements to keep your platform aligned with the latest trends.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-sitemap" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>NFT Platform Infrastructure</h3>
                                <p class="c-grey">Build a solid NFT ecosystem with essential components, including application layers, validation systems, storage solutions, and authentication mechanisms.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-server" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>Decentralized Storage Solutions</h3>
                                <p class="c-grey"> Improve your platform’s security and reliability with decentralized storage options, using IPFS for efficient NFT data management.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>Secondary Marketplace Integration</h3>
                                <p class="c-grey">Allow customers to trade NFTs through a secondary marketplace, providing a smooth trading experience and enhancing returns.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><i class="fa fa-gear" aria-hidden="true"></i></div>
                            <div class="icon_content">
                                <h3>NFT Integration for Existing Platforms</h3>
                                <p class="c-grey">Enhance your current marketplace capabilities by adding NFT features, unlocking new global opportunities for your business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="common_spacing gray_bg new-features" style="background: #0c0742;">
        <div class="container">
            <div class=" ">
                <h2 class="sec_tit underline text-center text-white">Distinctive Features of Our NFT Marketplace Development Services</h2>
            </div>
            <div class="row mt40">
                <div class="container container-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-copyright"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Multi-Signature Ownership Transfers</strong>Increase marketplace security by requiring multiple signatures for NFT ownership transfers, preventing unilateral token transfers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-users"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">User Whitelisting</strong>Establish a curated list of users for early access to NFT collections before public release, using this as a strategic marketing advantage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-download"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">NFT Import Functionality</strong>Allow for the listing of NFTs created with custom software or coding directly on the marketplace, without the need for direct minting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-gavel"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Lazy Minting</strong>Enable creators to mint NFTs without initial costs, deferring fees until tokens are sold, simplifying the process and reducing upfront expenses.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-braille"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Batch Minting</strong>Facilitate the minting of NFTs in batches with generative algorithms, allowing efficient creation of multiple unique tokens.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-bookmark"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Royalty Splitting</strong>Distribute royalties among multiple creators through smart contracts, specifying how earnings are shared per transaction.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-database"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Native Token Development</strong>Introduce native tokens with specific utilities or governance features to your NFT marketplace, attracting Web3 community interest and driving revenue.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-clock-o"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Timed Auctions</strong>Conduct timed auctions for NFTs to create urgency and potentially increase the value of high-profile assets through competitive bidding.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-gift"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Physical NFT Integration</strong>Support NFTs linked to physical assets, providing brands with a novel way to connect with customers and enhance their digital footprint.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-paint-brush"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Creator Verification</strong>Implement a verification process for creators, allowing them to display verified status and gain credibility among NFT enthusiasts.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <section class="common_spacing ">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h2 class="section-title underline mb20">Key Features We Integrate into Your NFT Marketplace Platform</h2>
                    </div>
                    <p>Our NFT marketplace development strategy focuses on empowering creators, collectors, and businesses with advanced features that enhance user engagement and build trust. We design platforms using cutting-edge technology to deliver exceptional user experiences.</p>
                </div>
            </div>
            <div class="row mt20">


                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-gavel" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Lazy Minting </h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-cubes" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Cross-Chain Integration</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Multi-Chain Support</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-desktop" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Engaging Storefront Design</h4>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Sophisticated Search Options </h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Bulk Buying Options</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-filter" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Detailed Filtering Options</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Auction and Purchase Features</h4>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Streamlined NFT Listings</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-wallet" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Integrated Wallet Solutions</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-flag" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Flexible Royalty Structures</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-gift" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Airdrops and Incentives</h4>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Comprehensive Rating System</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-file-text" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>KYC/AML Compliance</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Secure Payment Processing</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-bell" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Real-Time Notifications</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="common_spacing ">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h2 class="section-title underline mb20">Essential Admin Features We Embed for NFT Marketplaces</h2>
                    </div>
                    <p>We understand the critical role of administrators in managing an NFT marketplace. Our solutions provide a suite of specialized features designed to streamline operations and enhance platform management.</p>
                </div>
            </div>
            <div class="row mt20">
                <!-- <div class="col-lg-6 mb10">
                <img class="lazy" data-src="images/nftm/benefit_nft_001.webp">
            </div> -->


                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-sign-in-alt" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>User Registration and Login</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-tachometer-alt" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Comprehensive Analytics Dashboard</h4>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>User Management Tools</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Role-Based Access Control</h4>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Listing Oversight</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-wallet" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Payment Processing</h4>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-home" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>NFT Asset Administration</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Customer Support Systems</h4>
                            </div>
                        </li>

                    </ul>
                </div>


            </div>
        </div>
    </section>

    <section class="common_spacing ">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h2 class="section-title underline mb20">Uncompromising Security Features for NFT Platforms</h2>
                    </div>
                    <p>As cybersecurity threats evolve, protecting your NFT marketplace is crucial. Our team integrates advanced security measures to ensure robust protection and user trust.</p>
                </div>
            </div>
            <div class="row mt20">
                <!-- <div class="col-lg-6 mb10">
                <img class="lazy" data-src="images/nftm/benefit_nft_001.webp">
            </div> -->


                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-hourglass-start" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Comprehensive End-to-End Encryption</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>SSL Certification</h4>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-desktop" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Multi-Factor Authentication</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-plug" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Secure API Integrations</h4>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-file-text" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Advanced Smart Contract Security</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-wallet" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Immutable Token Protection</h4>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul class="step-points">
                        <li> <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>Device-Based Security Protocols</h4>
                            </div>
                        </li>
                        <li> <span><i class="fa fa-file-text" aria-hidden="true"></i></span>
                            <div class="step-points-content">
                                <h4>KYC/AML Compliance</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <div class="common_spacing gray_bg">
        <div class="container">
            <div class=" ">
                <h2 class="sec_tit underline text-center">Distinct Advantages of Our NFT Marketplace Solutions</h2>
                <p class="text-center" style="font-size: 16px;">Unlock the full potential of your NFT marketplace with our development services. Our platform features cutting-edge technology, unparalleled security, and exceptional scalability to propel your business forward. Explore the distinct benefits we offer:</p>
            </div>
            <div class="row mt40">
                <div class="container container-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-user-secret"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong
                                        style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Advanced Fraud Prevention</strong>Our platform includes sophisticated fraud detection tools to address wash trading and ensure fair transactions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-bar-chart"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong
                                        style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Data-Driven Insights with AI Analytics</strong>Utilize AI analytics to gain valuable insights into market trends and asset performance, enabling informed investment decisions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-credit-card"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong
                                        style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Versatile Payment Solutions </strong>Support both cryptocurrency and fiat payments, catering to diverse customer preferences.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-object-group"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong
                                        style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Enhanced User Experience </strong>Benefit from a sleek, user-friendly storefront that delivers an intuitive trading experience.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-shield-alt"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong
                                        style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Robust Cybersecurity</strong>Our platform features stringent cybersecurity measures to safeguard assets from threats.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-pencil-square-o"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong
                                        style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Impenetrable Smart Contracts</strong>Ensure secure minting and tokenization of NFTs with our reliable smart contracts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-dollar-sign"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong
                                        style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Effortless Transactions</strong>Simplify the buying and selling process with various cryptocurrency payment options.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> <i class="fa fa-file-pdf-o"></i> </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 20px; color: #000; padding-bottom: 5px;">Compliance with AML/KYC Regulations</strong>Adhere to AML/KYC standards to ensure regulatory compliance and mitigate risks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="technologies">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="sec_tit underline text-center text-white">Feature-Rich NFT Marketplace Solutions for Enterprises</h3>
                <p class="text-center white">Our expertise in creating NFT marketplaces with advanced functionalities helps businesses gain rapid prominence. Leverage our innovative solutions to build a cutting-edge application with user-centric features that capture attention in the Web3 ecosystem.</p>
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/opensea.webp') }}">
                        <p class="white"></p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/rarible.webp') }}">
                        <p class="white"> </p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/superrare.webp') }}">
                        <p class="white"></p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/nifty.webp') }}">
                        <p class="white"></p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/nba-1.webp') }}">
                        <p class="white"></p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/magic-eden.webp') }}">
                        <p class="white"></p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/foundation.webp') }}">
                        <p class="white">Foundation</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/mint.webp') }}">
                        <p class="white"></p>
                    </li>
                </ul>
                {{-- <div class="text-center cta_mine txt"> 
                    <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> 
                    <a href="#newsletter-form-sec"
                        class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>Talk with
                            our Experts</span></a> 
                </div> --}}
            </div>
        </div>
    </div>



    <div class="tinder-padding-sec common_spacing">
        <section class="roadmap" id="roadmap">
            <div class="transition-gradient-after adjust-top"></div>
            <div class="container">
                <div class="dots-vert"></div>
                <div class="row mb40">
                    <div class="section-title text-center" style="width: 100%">
                        <div class="sec_tit mb20">
                            <h2 class="section-title underline mb20">Our NFT Marketplace Development Process</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-md-12">
                        <ul class="workflow">
                            <li><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                <p>Conceptualization</p>
                            </li>
                            <li><i class="fa fa-object-group" aria-hidden="true"></i>
                                <p>Prototyping</p>
                            </li>
                            <li><i class="fa fa-desktop" aria-hidden="true"></i>
                                <p>UI/UX Design</p>
                            </li>
                            <li><i class="fa fa-file-code-o" aria-hidden="true"></i>
                                <p>Backend & Smart Contract Development</p>
                            </li>
                            <li><i class="fa fa-bug" aria-hidden="true"></i>
                                <p>Quality Assurance</p>
                            </li>
                            <li><i class="fa fa-rocket" aria-hidden="true"></i>
                                <p>Launch</p>
                            </li>
                            <li><i class="fa fa-cogs" aria-hidden="true"></i>
                                <p>Ongoing Support</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="product-features package_includes common_spacing">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <div class="sec_tit mb20">
                        <h2 class="section-title underline mb20 font_wei">Explore the Applications of Our NFT Marketplace Development</h2>
                    </div>
                    <p class="text-center white">NFTs are rapidly becoming prized digital assets, offering a wide range of applications that captivate global interest. Our solutions enable you to develop a platform tailored to various niches.</p>
                </div>

                <div class="container-center">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy" src="{{ asset('images/nftm/icon/digital.png') }}" alt="Crypto Collectibles">
                            <h3>Crypto Collectibles</h3>
                            <p>Create, customize, and trade digital assets, including artwork, gaming items, and collectible cards.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy" src="{{ asset('images/nftm/icon/gamepad.png') }}" alt="NFT for Games">
                            <h3>Gaming</h3>
                            <p>Exchange and manage in-game assets, such as rare skins and virtual property, with verified ownership rights.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy" src="{{ asset('images/nftm/icon/art.png') }}" alt="NFT for Art">
                            <h3>Art</h3>
                            <p>Display and trade digital masterpieces with transparency in ownership and authenticity.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy" src="{{ asset('images/nftm/icon/music.png') }}" alt="NFT for Music">
                            <h3>Music</h3>
                            <p>Convert tracks into NFTs, offering fans a chance to support artists directly and own exclusive content.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy" src="{{ asset('images/nftm/icon/house.png') }}" alt="NFT for Real Estate">
                            <h3>Real Estate</h3>
                            <p>Tokenize and list virtual properties as NFTs, providing a marketplace for digital land and spaces.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy" src="{{ asset('images/nftm/icon/ticket.webp') }}" alt="NFT for Ticketing">
                            <h3>Ticketing</h3>
                            <p>Utilize blockchain technology to prevent counterfeit tickets and control resale prices.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy" src="{{ asset('images/nftm/icon/bags.png') }}" alt="Virtual Fashion">
                            <h3>Virtual Fashion</h3>
                            <p>Acquire and showcase unique digital fashion items in virtual environments or avatars.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 equalize  ">
                        <div class="Package_list">
                            <img class="lazy" src="{{ asset('images/nftm/icon/www.png') }}" alt="NFT for Domain Names">
                            <h3>Domain Names</h3>
                            <p>Tokenize and trade domain names with valuable keywords.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style type="text/css">
        .fa-check-circle {
            font-size: 26px;
            color: #140050;
        }

        .fa-times-circle {
            font-size: 26px;
            color: #d90823;
        }
    </style>



    <style type="text/css">
        .nft-services {
            background: #140050;
            padding: 60px 0px;
        }

        .nft-services .grid {
            list-style: none;
        }

        .nft-services .gc {
            box-sizing: border-box;
            display: inline-block;
            /*min-height: 1px; */
            vertical-align: top;
        }

        /* .nft-services .gc--1-of-3 {
width: 33.33333%;
}
.nft-services .gc--2-of-3 {
width: 66.66666%;
}
.nft-services .naccs {
position: relative;
max-width: 900px;
margin: 100px auto 0;
}*/
        .nft-services .naccs .menu {
            max-height: 335px;
            overflow-x: auto;
        }

        .nft-services .naccs .menu div {
            padding: 5px 20px 5px 40px;
            margin-bottom: 10px;
            color: #fff;
            background: #2f1777;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            position: relative;
            vertical-align: middle;
            font-weight: 700;
            transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
        }

        .nft-services .naccs .menu div:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .nft-services .naccs .menu div span.light {
            height: 10px;
            width: 10px;
            position: absolute;
            top: 13px;
            left: 15px;
            background-color: #fff;
            border-radius: 100%;
            transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
        }

        .nft-services .naccs .menu div.active span.light {
            background-color: #fbc02d;
            left: 0;
            height: 100%;
            width: 3px;
            top: 0;
            border-radius: 0;
        }

        .nft-services .naccs .menu div.active {
            color: #fbc02d;
            padding: 10px 20px 10px 20px;
        }

        .nft-services ul.nacc {
            position: relative;
            min-height: 200px;
            list-style: none;
            margin: 0;
            padding: 0;
            transition: 0.5s all cubic-bezier(0.075, 0.82, 0.165, 1);
        }

        .nft-services ul.nacc li {
            opacity: 0;
            transform: translateX(50px);
            position: absolute;
            list-style: none;
            transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
        }

        .nft-services ul.nacc li.active {
            transition-delay: 0.3s;
            z-index: 2;
            opacity: 1;
            transform: translateX(0px);
        }

        .nft-services ul.nacc li p {
            margin: 0;
            color: #fff;
        }

        .nft-services ul.nacc li a {
            color: #fbc02d;
            border: 1px solid #fbc02d;
            padding: 5px 10px;
            margin-top: 15px;
            display: inline-block;
            border-radius: 5px;
        }


        /* width */
        .naccs ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        .naccs ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px #140050;
            border-radius: 10px;
        }

        /* Handle */
        .naccs ::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 10px;
        }

        /* Handle on hover */
        .naccs ::-webkit-scrollbar-thumb:hover {
            background: #f4f4f4;
        }
    </style>
    <section class="nft-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20">
                    <div class="sec_tit mb20 text-center">
                        <h3 class="section-title underline text-white">Comprehensive Solutions from Our NFT Marketplace Development Team</h3>
                    </div>
                    <p class="text-white text-center">As a leading NFT marketplace development firm, we transform diverse business visions into reality within the Web3 landscape. Our expertise in various business models streamlines the development process.</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="gc col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="menu">
                                    <div class="active"><span class="light"></span><span>Create an NFT Aggregator Marketplace</span></div>
                                    <div><span class="light"></span><span>Integrate Our NFT Aggregator API</span></div>
                                    <div><span class="light"></span><span>Develop an NFT Launchpad Platform</span></div>
                                    <div><span class="light"></span><span>Establish an NFT Rental Marketplace</span></div>
                                    <div><span class="light"></span><span>Launch an NFT Staking Platform</span></div>
                                    <div><span class="light"></span><span>Create an NFT Minting Platform</span></div>
                                    <div><span class="light"></span><span>Implement an NFT Loyalty Program</span></div>
                                    <div><span class="light"></span><span>Introduce an NFT Token Gating Platform</span></div>
                                    <div><span class="light"></span><span>Integrate zkSync 2.0 Blockchain</span></div>
                                </div>
                            </div>
                            <div class="gc col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <ul class="nacc">
                                    <li class="active">
                                        <div>
                                            <p>Develop a platform offering users global access to the NFT market with detailed analytics, utilizing decentralized market data oracles.<br><br>
                                                - Advanced Search and Filtering <br>
                                                - Cross-Platform Price Comparison<br>
                                                - Real-Time Market Insights<br>
                                                - Floor Price and Rarity Rankings
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>Enhance your Web3 presence with our NFT aggregator API, providing detailed listing data and sophisticated filtering options.<br><br>
                                                - NFT Listing Data<br>
                                                - Detailed Attribute Filtering<br>
                                                - Price Comparison<br>
                                                - Real-Time Trends and Data
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>Create a dynamic launchpad to support emerging projects, helping them gain visibility and attract collectors and investors.<br><br>
                                                - NFT Minting Engine<br>
                                                - Smart Contract Creation<br>
                                                - Pre-Sales and Auctions<br>
                                                - Governance Features
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>Facilitate transactions between NFT collectors with a rental marketplace that enhances utility across various sectors.<br><br>
                                                - NFT Discovery and Browsing<br>
                                                - Flexible Rental Agreements<br>
                                                - NFT Listing and Management<br>
                                                - Royalty Structures
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>Create a platform rewarding users for staking NFTs, enhancing market liquidity and incentivizing long-term engagement.<br><br>
                                                - Staking Pools<br>
                                                - NFT Management<br>
                                                - Utility Staking<br>
                                                - Marketplace Integration
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>Allow users to mint NFTs for digital and physical assets quickly and cost-effectively.<br><br>
                                                - Multi-Chain Support<br>
                                                - Batch Minting<br>
                                                - Metadata Customization<br>
                                                - Lazy Minting
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>Design a loyalty program using NFTs to attract a tech-savvy audience and enhance customer engagement.<br><br>
                                                - Custom NFTs for Programs<br>
                                                - Tiered Reward Systems<br>
                                                - On-Chain Data Monitoring<br>
                                                - Dynamic Reward Structures
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>Offer exclusive content access through an NFT token gating system, ensuring content exclusivity and combating piracy.<br><br>
                                                - Various Gating Mechanisms<br>
                                                - NFT Verification<br>
                                                - Role-Based Access<br>
                                                - Unlockable Content
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>Incorporate zkSync 2.0 to enhance your NFT marketplace with faster transactions, reduced fees, and improved security.<br><br>
                                                - Accelerated Settlement Times<br>
                                                - Reduced Gas Costs<br>
                                                - Programmable Features<br>
                                                - Enhanced Security
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).on("click", ".naccs .menu div", function() {
            var numberIndex = $(this).index();

            if (!$(this).is("active")) {
            $(".naccs .menu div").removeClass("active");
            $(".naccs ul li").removeClass("active");

            $(this).addClass("active");
            $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

            var listItemHeight = $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            $(".naccs ul").height(listItemHeight + "px");
            }
        });
    </script>

    <style type="text/css">
        .icon-text-1 h3 {
            font-size: 18px;
            color: #000;
            font-weight: 700
        }

        .icon-text-1 p {
            margin: .6rem 0 0
        }

        .icon-text-1 img {
            padding: 5px
        }

        @keyframes spin {
            0% {
                transform: rotateY(0)
            }

            50% {
                transform: rotateY(180deg)
            }

            100% {
                transform: rotateY(360deg)
            }
        }

        .icon-text-1 {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            background: #f2f2f2;
            padding: 15px;
            border-left: 5px solid #1f1d68
        }

        .icon-text-1 .icon-text-icon {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            margin-bottom: 20px;
            line-height: 80px;
            text-align: center
        }

        .icon-text-1 img {
            width: 64px;
            height: 64px;
            /*animation:5s infinite spin*/
        }

        .icon_content {
            padding-left: 20px;
            min-height: 100px;
            width: 80%
        }

        .icon-text-1 h3 {
            font-size: 18px;
            color: #000;
            font-weight: 700
        }

        .icon-text-1 p {
            margin: .6rem 0 0
        }
    </style>
    <section class="common_spacing">
        <div class="container">
            <div class="row">
                <div class="section-title text-center" style="width: 100%">
                    <div class="sec_tit mb20">
                        <h2 class="section-title underline mb20">Revenue Opportunities for Your NFT Marketplace</h2>
                    </div>
                    <p>Curious about maximizing your NFT marketplace's profitability? Explore these revenue streams to boost earnings.</p>
                </div>
            </div>
            <div class="row mt20 container-center">
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy" src="{{ asset('images/nftm/icons/transactions.png') }}">
                        </div>
                        <div class="icon_content">
                            <h3>Transaction Fees</h3>
                            <p class="c-grey">Charge fixed fees or percentages on transactions to create a steady revenue source.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy" src="{{ asset('images/nftm/icons/subscription.webp') }}">
                        </div>
                        <div class="icon_content">
                            <h3>Premium Memberships</h3>
                            <p class="c-grey">Offer exclusive services for a premium, adding value for users and increasing revenue.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy" src="{{ asset('images/nftm/icons/ads.webp') }}"></div>
                        <div class="icon_content">
                            <h3>Advertising Revenue</h3>
                            <p class="c-grey">Monetize your platform with ads for new NFT projects and brand partnerships.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy" src="{{ asset('images/nftm/icons/social-media.webp') }}">
                        </div>
                        <div class="icon_content">
                            <h3>Social Media Integration</h3>
                            <p class="c-grey">Connect with social networks and e-commerce platforms to expand your audience and increase revenue.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gray_bg" style="padding:60px 0;">

    <div class="container">
        <div class=" ">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h3 class="section-title underline mb20">Key Features of Our NFT Marketplace Solutions and Projects</h3>
                </div>
                <p>With NFTs evolving, the demand for innovative and resilient trading platforms grows. Our NFT marketplace development services drive transformative advancements with unique advantages.
                </p>
            </div>
            <div class=" feature-block">
                <div class="col-sm-6 ">
                    <div class="app-overview equal-height" style="">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/nftm/icons/rarity.webp') }}" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <h4>Engaging NFT Communities</h4>
                                <p>Design platforms that attract and engage a broad community of NFT holders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height" style="">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/nftm/icon/bills.webp') }}" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <h4>DeFi Investment Opportunities</h4>
                                <p>Incorporate DeFi options and revenue models to attract and retain crypto investors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height" style="">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/nftm/icons/nft-collection.webp') }}" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <h4>Cutting-Edge Features</h4>
                                <p>Integrate innovative functionalities to keep your NFT marketplace at the forefront.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height" style="">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/nftm/icon/visitor.webp') }}" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <h4>Aesthetic Liquidity</h4>
                                <p>Enhance NFT presentation to boost liquidity and attract collectors.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="app-overview equal-height" style="">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/nftm/icons/choose_01.webp') }}" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <h4>Cryptographic Security</h4>
                                <p>Employ advanced cryptographic techniques to protect NFT ownership and maintain asset integrity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height" style="">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/nftm/icons/multi-chain.webp') }}" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <h4>Cross-Chain Flexibility</h4>
                                <p>Enhance your NFT marketplace’s reach with multi-chain and cross-chain compatibility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height" style="">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/nftm/icons/payment.webp') }}" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <h4>Streamlined Wallet and Payment Integration</h4>
                                <p>Support various payment methods, including fiat and cryptocurrencies, with seamless wallet integration.</p>
                            </div>
                        </div>
                    </div>
                    <div class="app-overview equal-height" style="">
                        <div class="media">
                            <div class="media-left">
                                <div class="app-icon text-center"> <img class="lazy"
                                        src="{{ asset('images/nftm/icons/choose_03.webp') }}" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <h4>Advanced Search Capabilities</h4>
                                <p>Utilize sophisticated search filters to improve user experience and precise NFT discovery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
    .ben_wrap span img {
        width: 60px;
        position: relative;
        margin-top: 10px;
        /*filter: invert(1);*/
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
        background: #140050;
        width: 80px;
        text-align: center;
        margin-right: 15px;
        position: absolute;
        height: 80px;
        left: 0;
        border-radius: 7px;
    }
</style>


@include('static.small-square-card-section', [
    'title' => 'Trending Innovations for Your NFT Trading Platform', 
    'desc' => 'To stay ahead in the competitive NFT market, consider integrating these trending innovations into your trading platform.',
    'cards' => [
        [
            'title' => 'Fractional Ownership NFTs',
            'desc' => 'Offer fractional NFTs to allow users to own shares of high-value digital assets.',
            'image' => 'nftm/icons/fractionalizing.png',
        ],
        [
            'title' => 'Virtual Reality-Enhanced NFTs',
            'desc' => 'Leverage virtual reality to create immersive 3D experiences for NFT holders.',
            'image' => 'nftm/icons/vr.png',
        ],
        [
            'title' => 'Gaming and Metaverse Assets',
            'desc' => "Develop NFTs for play-to-earn games and metaverse environments, enhancing digital interactions.",
            'image' => 'nftm/icons/game-assets.png',
        ],
        [
            'title' => 'Eco-Friendly NFTs',
            'desc' => "Support NFTs linked to environmental conservation efforts, promoting sustainability.",
            'image' => 'nftm/icons/environment.png',
        ],
    ],
    'cta_1' => '',
    'cta_2' => ''
])



<style type="text/css">
    .category-item.aos-item:hover .text-center {
        position: relative;
        z-index: 99;
        color: #000 !important;
    }
</style>

<section class="space-pt bg-dark-half-md tech-padding teck">
    <div class="container">
        <div class="row justify-content-md-center text-center">
            <div class="section-title text-center ">
                <h3 class="common_h3 text-white">Our Expertise in Leading Blockchain Ecosystems for NFT Solutions</h3>
                <hr>
                <p class="white-color">Our deep knowledge of NFT marketplace software development enables us to deliver top-tier solutions across various prominent blockchain networks.</p>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-sm-12">
                <div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/eth.webp') }}" alt="Ethereum"> </div> <a href="#"
                            class="category-title">Ethereum</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/polygon.webp') }}" alt="Polygon"> </div> <a href="#"
                            class="category-title">Polygon</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/solana.webp') }}" alt="Solana"> </div> <a href="#"
                            class="category-title">Solana</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/stellar.webp') }}" alt="Stellar"> </div>
                        <a href="#" class="category-title">Stellar</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/tezos.webp') }}" alt="Tezos"> </div>
                        <a href="#" class="category-title">Tezos</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/tron.webp') }}" alt="Tron"> </div>
                        <a href="#" class="category-title">Tron</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/astar-logo.webp') }}" alt="Astar"> </div>
                        <a href="#" class="category-title">Astar</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/avalanche.png') }}" alt="Avalanche"> </div>
                        <a href="#" class="category-title">Avalanche</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/bsc.webp') }}" alt="Binance"> </div>
                        <a href="#" class="category-title">Binance</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/cardano.webp') }}" alt="Cardano"> </div>
                        <a href="#" class="category-title">Cardano</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/icons/cube.png') }}" alt="Cube"> </div>
                        <a href="#" class="category-title">Cube</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/fantom.webp') }}" alt="Fantom"> </div>
                        <a href="#" class="category-title">Fantom</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/icons/flow.png') }}" alt="Flow"> </div>
                        <a href="#" class="category-title">Flow</a>
                    </div>
                    <div class="category-item aos-item">
                        <div class="category-icon"> <img class="img-fuild lazy" style="height:40px;"
                                src="{{ asset('images/home-new/icons/gochain.png') }}" alt="GoChain"> </div>
                        <a href="#" class="category-title">GoChain</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('static.tech-stack-four-tab-section', [
    'title' => 'Cutting-Edge Technology Driving Your NFT Platform', 
    'desc' => "Utilize advanced technology stacks to power your NFT marketplace, ensuring efficient creation and trading of various NFT standards.",
])

<style type="text/css">
    .nft_marketplace {
        overflow: hidden;
    }

    .nft_marketplace .icon {
        width: 7%;
        float: left;
    }

    .nft_marketplace .content {
        float: right;
        width: 90%;
    }

    .nft_marketplace h3 {
        font-size: 18px;
        margin-bottom: 5px;
        color: #000000;
        font-weight: 700;
    }

    .list_box h5 {
        background: white;
        padding: 4% 3%;
        text-align: center;
        justify-content: center;
        font-size: 15px;
        align-items: center;
        margin-bottom: 28px;
        border-radius: 5px;
        box-shadow: 1px 4px 10px #0000001f;
        color: #000000d1;
    }
</style>
<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <h4 class="sec_tit underline text-center" style="font-size:25px; width: 100%">Why Choose Us for NFT Marketplace Development</h4>
            <h5 class="text-center" style="width: 100%">Our Expertise:</h5>
            <p class="text-center mt20">As trailblazers in the Web3 space, our team of over 500 professionals, including 100 blockchain developers, has successfully delivered over 200 Web3 business applications, meeting diverse global client needs.
            </p>
        </div>

        <div class="row list_box mt30">
            <div class="col-md-4">
                <h5>Experienced Blockchain Developers</h5>
            </div>
            <div class="col-md-4">
                <h5>Tailored Development Solutions</h5>
            </div>
            <div class="col-md-4">
                <h5>Seamless Application Integration</h5>
            </div>
            <div class="col-md-4">
                <h5>Timely Project Delivery</h5>
            </div>
            <div class="col-md-4">
                <h5>Accessible Tech Support for Quick Resolutions</h5>
            </div>
            <div class="col-md-4">
                <h5>Cross-Chain Compatibility</h5>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
    .panel.panel-default {
        background-color: transparent;
    }

    .panel-default>.panel-heading {
        background-color: transparent;
        border: 0px;
    }

    .panel.panel-default {
        background-color: transparent;
        max-width: 800px;
        margin: 0 auto;
        width: 100%;
        margin-bottom: 10px;
    }

    .panel.panel-default:last-child() {
        margin-bottom: 30px;
    }

    .accordion-heading {
        padding: 5px;
    }

    @media only screen and (max-width : 320px) {
        a.collapsed {
            /* line-height: 28px;*/
        }

        .accordion-heading em {
            display: none;
        }

        span.machine {
            line-height: 24px;
        }
    }
</style>


{{-- simple-faqs.blade --}}
@include('static.simple-faqs-section', [
    'faqs' => [
        [
            'ques' => "What is an NFT Marketplace?",
            'ans' => "An NFT marketplace is a digital platform where users can buy, sell, and trade unique digital assets known as non-fungible tokens (NFTs), representing ownership of digital or physical items."
        ],
        [
            'ques' => "Can I Develop My Own NFT Marketplace?",
            'ans' => "Yes, you can create a customized NFT marketplace to suit your specific needs and preferences, with unique features and functionalities."
        ],
        [
            'ques' => "How Do I Build an NFT Marketplace?",
            'ans' => "Building an NFT marketplace involves planning features, designing the UI, developing smart contracts, integrating payment systems, and thoroughly testing the application before launch."
        ],
        [
            'ques' => "What Are the Advantages of an NFT Marketplace?",
            'ans' => "NFT marketplaces provide global access, asset tokenization, enhanced security via blockchain, and new revenue streams through transactions and trades."
        ],
        [
            'ques' => "What is the Cost of Developing an NFT Marketplace?",
            'ans' => "Development costs vary based on feature complexity, technology stack, and development expertise. Costs generally include design, development, and ongoing maintenance."
        ],
        [
            'ques' => "Why Choose Us for NFT Marketplace Development?",
            'ans' => "We are renowned for our Web3 technology expertise and blockchain development. Our skilled team delivers customized solutions with timely execution, comprehensive support, and cross-chain compatibility for a high-quality NFT marketplace."
        ],
    ],
])

</div>

<style type="text/css">
    .formdiv .form-left .form-group:last-child {
        margin-bottom: 0
    }

    .common_newsletter .form-right textarea {
        height: 240px
    }

    .form-right input.common_send_btn {
        width: 100% !important;
        margin: 0 !important;
        display: inline-block !important;
        background: #140050 !important;
        color: #fff !important;
        border: 0 !important;
        text-transform: uppercase !important;
        font-weight: 700 !important;
        padding: 10px 0 !important
    }

    body input.common_send_btn.my_send {
        margin-top: 41px !important
    }

    .timeline-center::before {
        background: #f2f2f2
    }

    .thumb {
        position: relative
    }

    .photo,
    .play {
        position: absolute;
        width: 40px;
        height: 28px;
        left: 45%;
        top: 40%
    }

    .thumb:hover .photo,
    .thumb:hover .play {
        background-position: 0 -252px
    }

    .play {
        -webkit-animation: 1s ease-in-out infinite breathing;
        animation: 1s ease-in-out infinite breathing;
        -webkit-font-smoothing: antialiased;
        background: url(images/play.webp) 0 -252px no-repeat
    }

    .contact-inner-1 {
        padding-top: 70px;
        padding-bottom: 100px
    }

    @-webkit-keyframes breathing {

        0%,
        60% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5)
        }

        25% {
            -webkit-transform: scale(2);
            transform: scale(2)
        }

        100% {
            -webkit-transform: scale(1.45);
            transform: scale(1.45)
        }
    }

    @keyframes breathing {

        0%,
        60% {
            -webkit-transform: scale(1.5);
            transform: scale(1.5)
        }

        25% {
            -webkit-transform: scale(2);
            transform: scale(2)
        }

        100% {
            -webkit-transform: scale(1.45);
            transform: scale(1.45)
        }
    }

    @media (max-width:991px) {
        .height_row {
            margin-top: 10px
        }
    }

    @media (max-width:767px) {
        .formdiv .form-left .form-group:last-child {
            margin-bottom: 15px
        }

        .stats {
            min-height: 140px
        }
    }
</style>
<!-- <script src="js/owl.carousel.js"></script> -->
<script type="ef3cd8e680ba9a2e99623cc5-text/javascript">
    (function($) {
    $.fn.countTo = function(options, viewCounter) {
        if(viewCounter == 1) {
            options = options || {};
            return $(this).each(function() {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);
                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;
                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};
                $self.data('countTo', data);
                // if an existing interval can be found, clear it first
                if(data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);
                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;
                    render(value);
                    if(typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }
                    if(loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;
                        if(typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };
    }
    $.fn.countTo.defaults = {
        from: 0, // the number the element should start at
        to: 0, // the number the element should end at
        speed: 3000, // how long it should take to count between the target numbers
        refreshInterval: 100, // how often the element should be updated
        decimals: 0, // the number of decimal places to show
        formatter: formatter, // handler for formatting the value before rendering
        onUpdate: null, // callback method for every time the element is updated
        onComplete: null // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));
jQuery(function($) {
    // custom formatting example
    $('.count-number').data('countToOptions', {
        formatter: function(value, options) {
            return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
    });
    // start all the timers
    var viewCounter = 0;
    $(document).on('scroll', function() {
        if($('.timer').each(count).isOnScreen() && viewCounter < 2) {
            viewCounter++;
            console.log(viewCounter);
        }
    });

    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options, viewCounter);
    }
});
// check if element visible in viewport
$.fn.isOnScreen = function() {
    var win = $(window);
    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    //bounds.right = bounds.left + this.outerWidth();
    //bounds.bottom = bounds.top + this.outerHeight();
    return(!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};
</script>
<script src="js/vendor.js" type="ef3cd8e680ba9a2e99623cc5-text/javascript"></script>
<script src="js/plugins-reduced.js" type="ef3cd8e680ba9a2e99623cc5-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="ef3cd8e680ba9a2e99623cc5-text/javascript"></script>
<!-- <script>
    $('.owl-carouseltwo').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script> -->
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

    /* .dropdown-menu {
        background-color: rgb(11 53 113);
        backdrop-filter: blur(23px);
        box-shadow: 0 12px 28px 1px rgb(0 0 0 / 15%), 0 2px 4px 0 rgb(255 255 255 / 50%);
        border: 1px solid #ffffff12;
        transform: translate(0, 0);
        border-radius: 5px !important;
        transition: all 0.2s ease-out;
        padding: 5px 10px;
    } */

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

<script type="ef3cd8e680ba9a2e99623cc5-text/javascript">
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
<script type="ef3cd8e680ba9a2e99623cc5-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="ef3cd8e680ba9a2e99623cc5-text/javascript"
    src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5"
    media="screen">
<script type="ef3cd8e680ba9a2e99623cc5-text/javascript"
    src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="ef3cd8e680ba9a2e99623cc5-text/javascript">
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
$(".sticky-form .quick-cont-btn").click(function(e) {
    $('body').addClass('fixedPosition full-width');
    $(".sticky-form .formdiv").addClass('show');
    e.stopPropagation();
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
<script type="ef3cd8e680ba9a2e99623cc5-text/javascript">
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
<script type="ef3cd8e680ba9a2e99623cc5-text/javascript">
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

<script type="ef3cd8e680ba9a2e99623cc5-text/javascript">
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



<script type="ef3cd8e680ba9a2e99623cc5-text/javascript">
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
<script type="ef3cd8e680ba9a2e99623cc5-text/javascript">
    $(".crypto-popup").click(function(e) {
    $('crypto-popup').addClass('fixedPosition full-width');
    $(".login-popup").addClass('show');
    e.stopPropagation();
});
</script>
<!-- Button Lightbox Script - End -->

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="ef3cd8e680ba9a2e99623cc5-|49" defer></script>
</div>


@endsection