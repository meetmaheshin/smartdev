@extends('layouts.static')
    @section('title', 'Crypto Community Management')
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
    .step-points .fa {
        font-size: 30px;
    }

    .banner_content {
        text-align: left
    }

    .contentall a {
        margin-top: 20px
    }

    .banner-overlay {
        background-color: rgb(0 0 0 / 0%)
    }

    .strategies-items1 .icons {
        order: 2;
        margin-right: 15px
    }

    .contentall a:hover {
        background: #00acdc
    }

    .banner {
        /*            background-image: url(images/nftm/bannetr.webp);*/
        background-size: cover;
        padding-top: 138px;
        padding-bottom: 50px;
        height: auto
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to right, #02194b, #000325);
        opacity: .95
    }

    #ico .banner_content {
        text-align: left;
        position: relative;
        top: 0;
        transform: none
    }

    .banner_content .contentall {
        margin-top: 40px
    }

    .ban_tirt,
    .contentall h1 {
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 35px;
        text-transform: capitalize
    }

    .contentall p {
        font-weight: 400;
        margin-bottom: 30px;
        line-height: 1.6;
        font-size: 19px;
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
        color: #000;
        line-height: 1.4;
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

    body {
        color: #000
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

        .sto-flip .flip-box {
            min-height: auto
        }

        .eto-exchange-flip .flip-box {
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

    .text-white {
        color: #fff
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

    .strategies {
        padding: 50px 0;
        color: #000;
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

    @media (max-width:767px) {

        .strategies-items,
        .strategies-items1 {
            display: block
        }
    }

    .package_includes {
        color: #fff
    }

    .package_includes {
        background: url(../images/products/package_banner.webp);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover
    }

    .Package_list {
        display: inline-block;
        background: #2b6d47;
        padding: 30px 10px;
        width: 100%;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
        /*filter: drop-shadow(2px 4px 6px black);*/
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
        background: rgb(71 180 117);
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
        background: #022d62;
        width: 100%;
        display: inline-block;
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
        width: 25%;
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
        transition: all .3s ease-in-out
    }

    .teck .category-grid-style-01 .category-item .category-icon {
        color: #333;
        font-size: 44px;
        line-height: 1;
        margin-bottom: 10px;
        position: relative;
        z-index: 2
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
        transition: all .3s ease-in-out
    }

    .text-white {
        color: #fff
    }

    .Package_list {
        min-height: 180px !important
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
        background-image: linear-gradient(293deg, #47b475 0, #47b475 100%);
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

    .perfect-script-items p {
        text-align: left
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
        background: #47b475;
        position: relative;
        text-align: center;
        transition: all .3s linear
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

    /* .hed_s .ft_b {
        background: #00bbbd;
        min-height: 153px;
        padding-top: 20px;
        color: #fff;
        border-radius: 4px;
        border: 2px solid #38a67f45;
        padding-right: 15px
    }
    
    .ft_b {
        position: relative;
        padding-left: 75px;
        margin-bottom: 20px;
        min-height: 120px
    }
    
    .hed_s .ft_b .ft_ic {
        top: 10px;
        left: 5px;
        background: #fff
    }
    
    .ft_b .ft_ic {
        position: absolute;
        left: 0;
        top: 0;
        background: #eee;
        width: 65px;
        height: 65px;
        border-radius: 50%;
        text-align: center
    }
   .ft_cnt p {
        text-align: justify
    }
    .ft_b:hover {
        background: #47b475;
        color: #fff
    }
    
    .ft_b:hover .ft_ic img {
        transform: rotate(45deg);
        background: #f2f2f2
    } */
    .ft_b .ft_ic img {
        margin-top: 13px;
        margin-bottom: 13px;
        width: 60px;
    }

    .ft_b {
        justify-content: center;
        align-items: center;
        /* flex-direction: column; */
        background: #fff;
        border-radius: 10px;
        padding: 26px;
        text-align: center;
        margin-bottom: 2rem;
        min-height: 266px;
    }

    .ft_b:hover {
        background: #47b475;
        color: #fff;
    }

    .tec_x {
        max-width: 100%;
        background: #fff;
        margin-bottom: 35px;
        padding: 12px 10px 5px;
        outline: 5px solid #00c6a466;
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
        margin-bottom: 20px;
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

    section.roadmap .dots {
        width: 50% !important
    }

    .pull-right {
        float: right
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

    section.roadmap .box1.right {
        padding-left: 40px;
        margin-bottom: 20px;
    }

    section.roadmap .green {
        color: #000
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
        padding-left: 40px
    }

    @media (min-width:1150px) {
        section.roadmap .box1.right.first {
            margin-top: 110px !important
        }

        section.roadmap .lines.third {
            top: 48px
        }

        section.roadmap .lines {
            position: absolute;
            left: 50%
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

        section.roadmap .lines.second {
            top: 5px
        }

        section.roadmap .lines {
            position: absolute;
            left: 50%
        }

        section.roadmap .box1.right:after {
            content: '';
            width: 70px;
            height: 3px;
            background: #47b475;
            position: absolute;
            top: 50%;
            left: -70px;
            color: #f2f2f2;
            text-align: center;
            z-index: 1
        }

        section.roadmap .box1.left:after {
            content: '';
            width: 80px;
            height: 3px;
            background: #47b475;
            position: absolute;
            top: 50%;
            right: -80px;
            color: #f2f2f2;
            text-align: center;
            z-index: 1
        }

        section.roadmap .lines {
            position: absolute;
            left: 50%
        }

        section.roadmap .lines.first {
            top: 70px
        }

        section.roadmap .roadmap-line {
            background: #ccc;
            width: 7px;
            height: 70px;
            position: relative;
            margin-top: 40px
        }

        section.roadmap .roadmap-line:after {
            content: "";
            width: 200px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: absolute;
            top: -30px;
            left: -6px;
            color: #fff;
            text-align: center;
            z-index: 2
        }

        section.roadmap .box1.right.third {
            top: 88px !important
        }

        section.roadmap .roadmap-line:after {
            background: #47b475 !important
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

        section.roadmap .box1.right.four {
            top: 88px !important
        }

        section.roadmap .box1.right.four.roadmap-line:after {
            background: #47b475 !important
        }
    }

    .shard_master-node {
        background: linear-gradient(rgba(0, 183, 194, .95), rgba(0, 183, 194, .57)), transparent url(images/nftm/6.webp) top left/cover no-repeat scroll;
        padding-top: 60px;
        padding-bottom: 60px;
        padding: 120px 0
    }

    .shard-marter-cnt {
        text-align: center;
        background: rgba(255, 255, 255, .92);
        padding: 30px 15px 0 15px;
        border: 5px dotted #00b7c2;
        margin-bottom: 30px
    }

    .bg-w {
        background: #fff
    }

    .bg-w1 {
        background: #fff
    }

    .bg-w2 {
        background: #e0dddd;
        font-weight: 600
    }

    .btc {
        color: #fff !important
    }

    .workflow {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        padding: 0;
        margin: 0;
    }

    .workflow li {
        text-align: center;
        background: #f2f2f2;
        border-radius: 7px;
        margin: 1.5%;
        padding: 10px;
        width: 22%;
        position: relative;
    }

    .workflow li img {
        width: 65px;
    }

    .workflow li p {
        margin-bottom: 0;
        font-weight: 600;
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
        border-left: 15px solid #47b475;
    }

    .workflow li:last-child:after {
        display: none;
    }

    .workflow .fa {
        color: #47b475;
        font-size: 32px;
        margin-top: 7px;
    }

    @media (max-width:767px) {
        .workflow li {
            margin: 3%;
            width: 44%;
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

    #base {
        padding: 50px 100px
    }

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
        position: absolute;
        top: 50%;
        right: 5px;
        clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%)
    }

    .pro_featureline .featureline-icon:before {
        content: "";
        background: #f2f2f2;
        width: 80%;
        height: 80%;
        transform: translateX(-50%) translateY(-50%);
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: -1;
        clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%)
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

    .pro_featureline .featureline:nth-child(even) {
        float: right
    }

    .pro_featureline .featureline:nth-child(even) .featureline-content {
        padding: 0 60px 0 150px
    }

    .pro_featureline .featureline:nth-child(even) .featureline-icon {
        right: auto;
        left: 5px
    }

    @media screen and (max-width:767px) {

        .pro_featureline .featureline,
        .pro_featureline .featureline:nth-child(even) {
            width: 100%;
            margin: 0 0 40px
        }
    }

    @media screen and (max-width:576px) {

        .pro_featureline .featureline-content,
        .pro_featureline .featureline:nth-child(even) .featureline-content {
            text-align: center;
            padding: 140px 0 60px
        }

        .pro_featureline .featureline-icon,
        .pro_featureline .featureline:nth-child(even) .featureline-icon {
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
        border-radius: 10px;
    }

    .strategy_content {
        z-index: 1;
        position: relative;
    }

    .icon-text-1 {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .icon-text-1 .icon-text-icon {
        width: 80px;
        height: 80px;
        border-radius: 12px;
        background: #ffffff;
        margin-bottom: 20px;
        line-height: 80px;
        /*padding-left: 6px;*/
        box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
        text-align: center;
    }

    .icon-text-1 img {
        width: 64px;
        height: 64px;
    }

    .icon_content {
        padding-left: 20px;
        min-height: 100px;
        width: 80%;
    }

    .icon-text-1 h3 {
        font-size: 18px;
        color: #000000;
        font-weight: 700;
    }

    .icon-text-1 p {
        margin: 0.6rem 0 0 0;
    }

    .icon-text-1 img {
        /*            animation: spin 5s infinite;*/
    }

    @keyframes spin {
        0% {
            transform: rotateY(0deg);
        }

        50% {
            transform: rotateY(180deg);
        }

        100% {
            transform: rotateY(360deg);
        }
    }

    .step-points li {
        display: grid;
        grid-template-columns: 60px auto;
        margin-bottom: 20px;
        align-items: center;
        border-radius: 7px;
        background: #d4e3da;
    }

    .step-points li span {
        width: 60px;
        height: 60px;
        background: #47b475;
        border-radius: 7px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .step-points li span img {
        /*width: 14px;
        height: 14px;*/
        padding: 10px;
        filter: brightness(0) invert(1);
    }

    .step-points-content {
        margin-left: 15px;
        /*padding-top: 15px;*/
    }

    .step-points li h4 {
        color: #000000;
        font-weight: 700;
        font-size: 17px;
    }

    .step-points li p {
        margin-bottom: 0;
        text-align: justify;
    }

    .step-points li span {
        animation-name: fadeIn;
        animation-duration: 3s;
        animation-iteration-count: 1;
    }

    .step-points-content {
        animation-name: fadeIn;
        animation-duration: 3s;
        animation-iteration-count: 1;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .internal_link {
        color: #47b475;
        font-weight: 700;
    }

    .dot_pos {
        margin-top: 0px !important;
    }

    .dot_4 {
        background-color: #fff !important;
    }

    .desp-wrap {
        background: #47b47521;
        padding: 20px;
        border-radius: 12px;
        min-height: auto;
    }

    .icon-text-icon .fa {
        text-align: center;
        color: #47b475;
        font-size: 32px;
        line-height: 2.5;
    }
</style>


<div class="header-shadow" id="ico">
    <style type="text/css">
        .popup-ul {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
            margin: 0;
            width: 100%;
            border-radius: 7px;
            justify-content: center;
        }

        .popup-ul li {
            width: 26%;
            margin-bottom: 20px;
            justify-content: center;
            padding: 0px;
            text-align: center;
        }

        .popup-ul li p {
            color: #fff;
            margin-bottom: 0;
        }

        .popup-ul li img {
            width: 50px;
            height: 50px;
            border: 2px solid #eee;
            border-radius: 50%;
            background: #fff;
            padding: 5px
        }

        .login-popup .box-1 .form .form-control::placeholder {
            color: #fff;
        }

        .login-popup {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1099;
            background-color: rgba(0, 0, 0, .6);
            visibility: hidden;
            opacity: 0;
            transition: 1s
        }

        .login-popup.show {
            visibility: visible;
            opacity: 1
        }

        .login-popup .box-1 {
            background-color: #000a30;
            min-width: 870px !important;
            position: absolute;
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-wrap: wrap;
            opacity: 0;
            margin-left: 50px;
            transition: 1s
        }

        .login-popup.show .box-1 {
            opacity: 1;
            margin-left: 0
        }

        .login-popup .box-1 .img-area {
            flex: 0 0 50%;
            max-width: 50%;
            position: relative;
            overflow: hidden;
            padding: 50px 30px 0px;
            align-items: center;
            justify-content: center
        }

        .login-popup .box-1 .img-area h1 {
            font-size: 30px
        }

        .login-popup .box-1 .img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/marketing-form-bg.webp');
            background-size: cover;
            background-position: center;
            /*animation:7s linear infinite zoomInOut;*/
            z-index: -1;
            opacity: .2
        }

        @keyframes zoomInOut {

            0%,
            100% {
                transform: scale(1)
            }

            50% {
                transform: scale(1.1)
            }
        }

        .login-popup .box-1 .form {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 20px 30px 20px;
            /*background-color:#fff*/
        }

        .login-popup .box-1 .form h2 {
            color: #fff;
            font-size: 30px;
            margin: 0 0 30px
        }

        .login-popup .box-1 .form .form-control {
            height: 40px;
            margin-bottom: 10px;
            width: 100%;
            border: none;
            font-size: 15px;
            background: #ffffff36;
            box-shadow: 0px 0px 7px #0000004a;
            border-radius: 5px;
            color: #fff;
            padding: 10px 15px;
        }

        .login-popup .box-1 .form .btn:focus,
        .login-popup .box-1 .form .form-control:focus {
            outline: 0
        }

        .login-popup .box-1 .form label {
            font-size: 15px;
            color: #555
        }

        .login-popup .box-1 .form .btn {
            width: auto;
            background-color: #e91e63;
            height: 45px;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            text-transform: uppercase;
            color: #fff;
            cursor: pointer;
            line-height: 0
        }

        .login-popup .box-1 .form .close {
            position: absolute;
            right: 10px;
            top: 0;
            font-size: 30px;
            cursor: pointer;
            width: 30px;
            height: 30px;
            opacity: 1;
            color: #fff;
            background: #ffffff91;
            border-radius: 20px;
            text-align: center;
        }

        @media(max-width:767px) {
            .login-popup .box-1 {
                width: calc(100% - 30px);
                min-width: 90% !important;
            }

            .login-popup .box-1 .img-area {
                display: none
            }

            .login-popup .box-1 .form {
                flex: 0 0 100%;
                max-width: 100%
            }
        }

        .social {
            margin-top: 25px;
        }

        .social a {
            color: #fff;
        }

        .social .fa {
            width: 30px;
            height: 30px;
            font-size: 18px;
            color: #fff;
            background: #2db942;
            border-radius: 50%;
            text-align: center;
            line-height: 26px;
            padding: 2px;
        }

        .social .fa.fa-envelope {
            background: #0195d5 !important;
        }

        @media screen and (min-width:768px) and (max-width:900px) {
            .login-popup .box-1 {
                min-width: 90% !important;
            }
        }
    </style>

    <div class="login-popup">
        <div class="box-1">
            <div class="img"></div>
            <div class="img-area">



                <h3 class="text-white text-center">Reach the Global Web3 Market Effortlessly!</h3>
                <br>
                <p class="text-white text-center" style="margin-bottom: 20px; font-size:16px;">The essence of promotions
                    in today’s Web3 world is unparalleled. We emphasize this by being the marketing partner for these
                    esteemed Web3 brands:</p>

                <ul class="popup-ul">
                    <li><img src="images/nftm/sui.webp">
                        <p>Sui</p>
                    </li>
                    <li><img src="images/nftm/ton.webp">
                        <p>TON</p>
                    </li>
                    <li><img src="images/nftm/aptos.webp">
                        <p>Aptos</p>
                    </li>
                    <li><img src="images/nftm/sandbox.webp">
                        <p>Sandbox</p>
                    </li>
                    <li><img src="images/nftm/coindcx.webp">
                        <p>CoinDCX</p>
                    </li>
                    <li><img src="images/nftm/coinswitch.webp">
                        <p>CoinSwitch</p>
                    </li>
                </ul>

            </div>
            <div class="form">
                <div class="close">&times;</div>
                <h3 class="text-white text-center">Do you want your Web3 project to garner global recognition?</h3><br>
                <form id="mailForm" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="Name" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Mobile" id="mobile" name="mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message" id="message" name="message" class="form-control"
                            style="height:75px;"></textarea>
                    </div>
                    <button type="button" onclick="if (!window.__cfRLUnblockHandlers) return false; return send_mail()"
                        class="btn" data-cf-modified-ed36813cf037743b20f0362c-="">Submit</button>
                </form>

                <div class="social">
                    <a rel="nofollow" rel="noopener" aria-label="Whatsapp" target="_blank"
                        href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><i class="fa fa-calendar" aria-hidden="true"
                            title="Calendly"></i> Schedule A Meeting &nbsp;</a>

                    <a rel="nofollow"
                        href="/cdn-cgi/l/email-protection#afc6c1c9c0efcdc3c0ccc4ccc7cec6c1cedfdfc9ceccdbc0ddd681ccc0c2"
                        aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
                </div>

            </div>
        </div>
    </div>
    <div class="main">
        <div class="banner my_banner">
            <div class="banner-overlay"></div>
            <div class="banner_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ban_tirt">
                                    <h1>Crypto Community Management Experts</h1>
                                </div>
                                <p><span style="font-size:22px; font-weight:bold;">Transform Your Community: Build, Manage, and Expand Now! </span><br><br>
                                    Our elite community management team is dedicated to fostering a vibrant and engaged audience across various platforms. We employ cutting-edge strategies to drive dynamic interaction and growth for your crypto community.
                                </p>

                                <a href="{{ url('consultation') }}" target="" class="nec-btn">Connect with Our Specialists</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <img class="img-responsive img-fuild"
                                src="{{ asset('images/crypto-community-management/banner-img.webp') }}" alt="" title="" width="100%"
                                height="100%">
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

        <section class="common_spacing gray_bg">
            <div class="container">
                <div class="col-lg-12">
                    <div class="section-title text-center underline">

                        <style type="text/css">
                            .ribbon {
                                /*width: 400px;
  height: 60px;
  margin: 100px auto 0px;*/
                                margin-bottom: 20px;
                                position: relative;
                                color: #fff;
                                -webkit-animation: main 250ms;
                                -moz-animation: main 250ms;
                                -ms-animation: main 250ms;
                                animation: main 250ms;
                                z-index: 1;
                                display: inline-block;
                            }

                            .title-text {
                                color: #fff;
                                text-align: center;
                                background: #48b477;
                                padding: 20px 30px;
                                font-size: 26px;
                                z-index: 9;
                                line-height: 1.2em;
                                font-weight: bold;
                            }

                            .ribbon i {
                                position: absolute;
                            }

                            .ribbon i:nth-child(2),
                            .ribbon i:nth-child(3) {
                                position: absolute;
                                left: -20px;
                                bottom: -20px;
                                z-index: -1;
                                border: 20px solid transparent;
                                border-right-color: #1d643b;

                                -webkit-animation: edge 500ms;
                                -moz-animation: edge 500ms;
                                -ms-animation: edge 500ms;
                                animation: edge 500ms;
                            }

                            .ribbon i:nth-child(3) {
                                left: auto;
                                right: -20px;
                                border-right-color: transparent;
                                border-left-color: #1d643b;
                            }

                            .ribbon i:nth-child(4),
                            .ribbon i:last-child {
                                width: 20px;
                                bottom: -20px;
                                left: -40px;
                                z-index: -2;
                                border: 30px solid #31935b;
                                border-left-color: transparent;

                                -webkit-animation: back 600ms;
                                -moz-animation: back 600ms;
                                -ms-animation: back 600ms;
                                animation: back 600ms;

                                -webkit-transform-origin: 100% 0;
                                -moz-transform-origin: 100% 0;
                                -ms-transform-origin: 100% 0;
                                transform-origin: 100% 0;
                            }

                            .ribbon i:last-child {
                                bottom: -20px;
                                left: auto;
                                right: -40px;
                                border: 30px solid #31935b;
                                border-right-color: transparent;

                                -webkit-transform-origin: 0 0;
                                -moz-transform-origin: 0 0;
                                -ms-transform-origin: 0 0;
                                transform-origin: 0 0;
                            }

                            /* animations */

                            @-webkit-keyframes main {
                                0% {
                                    -webkit-transform: scaleX(0);
                                }

                                100% {
                                    -webkit-transform: scaleX(1);
                                }
                            }

                            @-webkit-keyframes edge {

                                0%,
                                50% {
                                    -webkit-transform: scaleY(0);
                                }

                                100% {
                                    -webkit-transform: scaleY(1);
                                }
                            }

                            @-webkit-keyframes back {

                                0%,
                                75% {
                                    -webkit-transform: scaleX(0);
                                }

                                100% {
                                    -webkit-transform: scaleX(1);
                                }
                            }


                            @-moz-keyframes main {
                                0% {
                                    -moz-transform: scaleX(0);
                                }

                                100% {
                                    -moz-transform: scaleX(1);
                                }
                            }

                            @-moz-keyframes edge {

                                0%,
                                50% {
                                    -moz-transform: scaleY(0);
                                }

                                100% {
                                    -moz-transform: scaleY(1);
                                }
                            }

                            @-moz-keyframes back {

                                0%,
                                75% {
                                    -moz-transform: scaleX(0);
                                }

                                100% {
                                    -moz-transform: scaleX(1);
                                }
                            }


                            @keyframes main {
                                0% {
                                    transform: scaleX(0);
                                }

                                100% {
                                    transform: scaleX(1);
                                }
                            }

                            @keyframes edge {

                                0%,
                                50% {
                                    transform: scaleY(0);
                                }

                                100% {
                                    transform: scaleY(1);
                                }
                            }

                            @keyframes back {

                                0%,
                                75% {
                                    transform: scaleX(0);
                                }

                                100% {
                                    transform: scaleX(1);
                                }
                            }

                            @media (min-width: 320px) and (max-width: 768px) {
                                .category-grid-style-01 .category-item {
                                    width: 33% !important;
                                }
                            }
                        </style>
                        <div class="sec_tit"><br>
                            <h2>Elevate and Energize Your Crypto Community with Our Expertise</h2>
                        </div>
                    </div>
                    <p class="mt10 mb10 text-center">Our seasoned community managers bring unparalleled experience, ensuring your project captures attention and stands out. We build a foundation of trust by addressing issues, promoting meaningful dialogue, and solidifying your project's credibility. This attracts committed users and investors who seek authenticity and value.
                    <br><br>
                    We meticulously establish and manage your community platforms to match your unique needs and goals. Our team expertly handles all user interactions and concerns, maintaining a professional environment that enhances your project's image. Trust us to manage the complexities of community building while you focus on driving your project's success.
                    <br><br>
                    Partner with our crypto community management experts to boost your project's reputation, create a vibrant community, and unlock new opportunities. Contact us today for a strategic consultation!
                    <br><br>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="ul-style-3" style="padding-left: 20px;;margin-top: 0;">
                                    <li><i class="fa fa-tasks list-icon" aria-hidden="true"></i><span
                                            style="color: #000;">Strategic Growth Plans</span></li>
                                    <li><i class="fa fa-cogs list-icon" aria-hidden="true"></i><span
                                            style="color: #000;">Platform Expertise</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="ul-style-3" style="padding-left: 20px;;margin-top: 0;">
                                    <li><i class="fa fa-key list-icon" aria-hidden="true"></i><span
                                            style="color: #000;">Effective Moderation</span></li>
                                    <li><i class="fa fa-thumbs-up list-icon"></i><span style="color: #000;">Engagement Facilitation</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="ul-style-3" style="padding-left: 20px;;margin-top: 0;">
                                    <li><i class="fa fa-bullhorn list-icon" aria-hidden="true"></i><span
                                            style="color: #000;">Transparent Reporting</span></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    </p>
                    <div class="text-center mt20 cta_mine">
                        <a href="{{ url('consultation') }}"
                            class="nectar-button medium regular accent-color regular-button nec-btn"><span>GET A FREE CONSULTATION</span></a>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">
            .sub_ff strong {
                display: block;
                /* padding-left: 26px;*/
                font-size: 17px;
                /*margin-bottom: 10px;*/
                color: #00000a !important;
                font-weight: 900;
                line-height: 30px;
            }

            .dev {
                padding-left: 26px;
            }

            .sub_ff {
                position: relative;
                margin-top: 15px;
                margin-bottom: 20px;
            }

            .sub_ff i {
                position: absolute;
                left: 0;
                color: #47b475;
                line-height: 1.5;
                font-size: 19px;
            }
        </style>




        <style type="text/css">
            .awesome-features-wrapper {
                border: 1px solid #cdcdcd;
                padding-top: 40px;
                padding-bottom: 20px;
                min-height: 480px;
                transition: .3s;
                position: relative;
                margin-bottom: 30px;
                border-radius: 10px;
            }


            .awesome-features-icon-img {
                margin-bottom: 10px;
            }

            .awesome-features-icon-img img {
                width: 64px;
                height: 64px;
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

            .icon-text-1 {
                /*display: flex;
            align-items: center;*/
                margin-bottom: 10px;
            }

            .icon-text-1 .icon-text-icon {
                width: 80px;
                height: 80px;
                border-radius: 12px;
                background: #ffffff;
                margin-bottom: 20px;
                line-height: 75px;
                /*padding-left: 6px;*/
                box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
            }

            .icon-text-1 img {
                width: 64px;
                height: 64px;
            }

            .icon_content {
                padding-left: 20px;
                min-height: 100px;
                width: 80%;
            }

            .icon_content p strong {
                display: block;
                color: #47b475;
                font-size: 18px;
                margin-bottom: 4px;
            }

            .icon-text-1 h3 {
                font-size: 18px;
                color: #000000;
                font-weight: 700;
            }

            .icon-text-1 p {
                margin: 0.6rem 0 0 0;
            }

            .icon-text-1 img {
                /*animation: spin 5s infinite;*/
                padding: 5px;
            }

            @keyframes spin {
                0% {
                    transform: rotateY(0deg);
                }

                50% {
                    transform: rotateY(180deg);
                }

                100% {
                    transform: rotateY(360deg);
                }
            }
        </style>
        <style type="text/css">
            .awesome-features-wrapper {
                /*border: 1px solid #cdcdcd;*/
                background: #fff;
                padding-top: 30px;
                padding-bottom: 20px;
                min-height: auto;
                transition: .3s;
                position: relative;
                margin-bottom: 30px;
                /*border-radius: 10px;*/
                transition: 1s;
                border-radius: 7px;

            }

            .awesome-features-wrapper::after {
                content: "";
                position: absolute;
                right: -6px;
                top: -6px;
                background: #47b475;
                width: 90px;
                height: 90px;
                z-index: -1;
                transition: 1s;
                border-radius: 7px;
            }

            .awesome-features-wrapper:hover::after {
                width: 200px;
                height: 200px;
            }

            .awesome-features-icon-img .fa {
                color: #47b475;
                font-size: 40px;
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
                padding: 0 40px;
            }
        </style>


        <style type="text/css">
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

            .awesome-features-icon-img{
                display: flex;
                justify-content: center;
            }
            
            .awesome-features-text h4{
                display: flex;
                justify-content: center;
            }
        </style>


        @include('static.top-right-hover-effect-3-col-card', [
            'title' => "Crypto Community Platforms: Amplify Your Engagement", 
            'desc' => "As a premier crypto community management agency, we are dedicated to creating and cultivating community platforms that resonate with your project's mission and goals. Our expert management across various platforms ensures your project thrives within a dynamic, engaged, and passionate community, propelling your crypto venture to extraordinary success.",
            'cards' => [
                [
                    'title' => "Discord",
                    'desc' => "Our team stimulates vibrant discussions, hosts enlightening AMA sessions and facilitates real-time interactions to bridge the connection between your Discord community and your crypto project.",
                    'image' => 'crypto-community-management/icons/discord.webp'
                ],
                [
                    'title' => 'Telegram',
                    'desc' => "We transform your Telegram group into a hub of activity, delivering timely updates, fostering engaging conversations, and providing immediate support.",
                    'image' => 'crypto-community-management/icons/telegram.webp'
                ],
                [
                    'title' => 'Twitter',
                    'desc' => "Through strategic utilization of Twitter, we maximize the reach of your project’s announcements and updates, sparking discussions and drawing significant attention.",
                    'image' => 'crypto-community-management/icons/twitter.webp'
                ],
                [
                    'title' => "Reddit",
                    'desc' => "Our active moderation and thought leadership on Reddit cultivate a presence that mirrors the innovation and depth of your crypto project, enhancing your visibility and credibility.",
                    'image' => 'crypto-community-management/icons/reddit.webp'
                ],
            ],
        ])

        <style type="text/css">
            .perfect-script-items1 {
                -webkit-box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
                box-shadow: 0px 5px 15px 0px rgb(21 10 82 / 20%);
                padding: 25px 15px 10px;
                border-radius: 16px;
                background-color: #fff;
                -webkit-transition: 0.3s;
                transition: 0.3s;
                /*    min-height: 270px;*/
                margin-bottom: 20px;
            }

            .perfect-script-items1 .icon {
                width: 70px;
                height: 70px;
                /* margin: 20px auto 50px; */
                line-height: 75px;
                position: relative;
                border-radius: 0px 50% 50% 0px;
                color: #fff;
                font-size: 40px;
                box-shadow: 3px 14px 13px 0px #0000003b;
                z-index: 9;
                float: left;
                background: #47b475;
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
                width: 88%;
                padding-left: 30px;
            }

            .perfect-script-items1 strong {
                color: #47b475;
                font-size: 18px;
            }

            .perfect-script-items1 p {
                text-align: left;
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

    <style>
        .perfect-script-items1 .icon .lazy{
            margin-top: 12px;
        }
    </style>

    @include('static.bounce-effect-left-cut-card', [
        'title' => 'Cultivate and Elevate Your Crypto Community with Our Expertise', 
        'desc' => "We lay the foundation for a thriving crypto community through our unparalleled community management services. Recognizing that dynamic engagement is crucial to success, we employ innovative strategies that seamlessly connect your project with its supporters.",
        'cards' => [
            [
                'title' => 'Strategic Community Building',
                'desc' => "We meticulously craft a community united by common goals and interests, establishing a strong and resilient base for your project.",
                'image' => 'crypto-community-management/icons/strategie.png',
            ],
            [
                'title' => 'Pioneering Engagement Tactics',
                'desc' => "Our advanced techniques and tools are designed to ignite dedication and passion within your community. Our approach includes",
                'image' => 'crypto-community-management/icons/tools.webp',
            ],
            [
                'title' => 'Audience Onboarding',
                'desc' => "We implement tailored onboarding processes that resonate with newcomers, ensuring they quickly feel integrated and valued.",
                'image' => 'crypto-community-management/icons/audience.png',
            ],
            [
                'title' => 'Interactive AMA Sessions',
                'desc' => "Our regular AMA sessions promote transparency and trust, forging a genuine connection between your project and its supporters.",
                'image' => 'crypto-community-management/icons/transparency.webp',
            ],
            [
                'title' => 'Exciting Contests and Competitions',
                'desc' => "We drive engagement through stimulating contests and competitions, which not only fuel enthusiasm but also encourage active participation.",
                'image' => 'crypto-community-management/icons/web-hosting.webp',
            ],
            [
                'title' => 'Expert Moderation and Support',
                'desc' => "Our skilled moderators ensure a positive and productive environment, offering seamless support and fostering an inclusive space for all members.",
                'image' => 'crypto-community-management/icons/support.png',
            ],
        ],
    ])



    <div class="shard_master-node">
        <div class="container">
            <div class="real-estate-list">
                <div class="section-title text-center">
                    <h2 class="font_wei" style="color: #fff; font-weight: 600;">Expand Your Crypto Community</h2>
                    <p style="color: #fff; font-weight: 400; font-size: 18px;line-height: 25px; margin-top: 10px;">
                        Engage with Our Expert Community Managers!<br>
                        Design Your Tailored Success Strategy Today!<br>
                        Request Your FREE Consultation NOW!</p>
                </div>
                <div class="col-md-12 text-center mt20"> <a
                        href="{{ url('consultation') }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn"
                        target="_blank"><span>Claim Your FREE Consultation</span></a> </div>
            </div>
        </div>
    </div>

    <style>
        .icon-text-1 .icon-text-icon img{
            margin-top: 8px;
        } 
    </style>


    @include('static.left-square-image-card', [
        'title' => 'Our Strategy for Unparalleled Crypto Community Management',
        'desc' => "Our services span the entire spectrum of community growth, seamlessly building and managing thriving crypto ecosystems. We focus on creating an environment where members feel valued and connected, combining expertise and innovation to lay the groundwork for dynamic, engaged communities.",
        'cards' => [
            [
                'title' => 'Comprehensive Strategy Crafting',
                'desc' => "We design a robust community management plan that aligns perfectly with your project's strategic objectives.",
                'image' => 'crypto-community-management/icons/strategie.png',
            ],
            [
                'title' => 'Tailored Community Integration',
                'desc' => "We deploy advanced chatbots, analytical tools, and automated moderation rules to cultivate an active and vibrant community.",
                'image' => 'crypto-community-management/icons/integration.png',
            ],
            [
                'title' => 'Diverse Activity Planning',
                'desc' => "We curate a broad range of engaging activities, from in-depth project guides and reviews to interactive events.",
                'image' => 'crypto-community-management/icons/events.webp',
            ],
            [
                'title' => 'Expert Moderation and Support',
                'desc' => "Our skilled moderators provide exceptional chat oversight and member support, fostering a positive and collaborative environment.",
                'image' => 'crypto-community-management/icons/support.png',
            ],
            [
                'title' => 'Targeted Promotion',
                'desc' => "We employ both internal and external promotional strategies to effectively spotlight project events and updates.",
                'image' => 'crypto-community-management/icons/promotions.webp',
            ],
            [
                'title' => 'Broad Outreach',
                'desc' => "Through strategic cross-marketing and targeted invitations, we expand your community’s reach and attract new members.",
                'image' => 'crypto-community-management/icons/audience.png',
            ],
        ],
        'cta1_name' => 'Schedule a Meeting',
        'cta1_link' => '#',
        'cta2_name' => 'Connect with Our Experts',
        'cta2_link' => 'consultation'
    ])


    <style type="text/css">
        .shard_master-node {
            background: linear-gradient(rgba(0, 183, 194, .95), rgba(0, 44, 46, .85)), transparent url(images/nftm/cta-bg1.png) top left/cover no-repeat scroll;
            padding-top: 60px;
            padding-bottom: 60px;
            padding: 40px 0;
        }

        .shard-marter-cnt {
            text-align: center;
            background: rgba(255, 255, 255, .92);
            padding: 30px 15px 0 15px;
            border: 5px dotted #00b7c2;
            margin-bottom: 30px
        }
    </style>


    <style type="text/css">
        .service-section {
            background: #fff;
            position: relative;
            overflow: hidden;
        }

        .service-section:before {
            content: "";
            background: url(images/lab/dot-shape.webp) #368b5acf;
            position: absolute;
            height: 400px;
            right: 0;
            left: 0;
            top: 0;
            width: 100%;
            background-position: center top;
            background-size: contain;
            background-repeat: repeat;
        }

        .service-section .box4 {
            background: url(images/lab/shape-7.svg) #fff;
            background-size: 180px;
            background-position: top right;
            background-repeat: no-repeat;
        }

        .service_style_one {
            background: #ffffff;
            border-radius: 10px;
            min-height: 260px;
            padding: 40px 40px 10px;
            transition: 0.5s all ease-in-out;
            margin-bottom: 24px;
        }

        .service_style_one:hover {
            background-color: #47b475f5;
            color: white !important;
        }

        .style_one_title: hover {
            color: #fff !important;
        }

        .service_style_one_icon {
            width: 75px;
            height: 75px;
            line-height: 75px;
            background: #e8ecfc;
            color: #0C5ADB;
            display: inline-block;
            border-radius: 33% 66% 70% 30%/49% 62% 38% 51%;
            -webkit-transition: .5s;
            -o-transition: .5s;
            transition: .5s;
            text-align: center;
            font-size: 35px;
        }

        .service_style_one_icon img {
            width: 50px;
            height: auto;
        }

        .service_style_one_title h4 {
            font-weight: 700;
            color: #000000;
            position: relative;
            margin-top: 10px;
        }

        .service_style_one_title h4:before {
            position: absolute;
            content: "";
            left: 0;
            top: 37px;
            height: 1px;
            width: 75px;
            background: #47b475;
            margin: 0 auto;
            right: 0;
        }

        .service_style_one:hover .service_style_one_title h4 {
            color: #fff !important;
        }

        .service_style_one:hover {
            transform: translateY(10px);
            transition: 0.5s all ease-in-out;
        }

        .service_style_one_text {
            margin-top: 20px;
            margin-bottom: 5px;
        }

        .pad-tb {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .box4 p {
            margin-top: 20px;
        }

        .box4 h3 {
            font-size: 20px;
            font-weight: 600;
            color: #47b475;
        }

        .box4 {
            background: #fff;
            text-align: center;
            background-size: 200%;
            background-position: top right;
            background-repeat: no-repeat;
            text-align: center;
            padding: 40px 10px 10px;
            margin: 0;
            min-height: 320px;
            margin-bottom: 10px;
            position: relative;
            border: 1px solid #91d2ac;
            border-radius: 8px;
            box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
        }

        .s-card-icon {
            width: 60px;
            margin: 0 auto;
        }

        .img-size {
            height: 430px;
            width: 450px;
        }

        @media screen and (max-width:426px) {
            .img-size {
                height: auto !important;
                width: auto !important;
            }
        }

        @media screen and (max-width: 768px) and (min-width:426px) {
            .img-size {
                height: 430px;
                width: auto !important;
            }
        }

        @media screen and (min-width:769px) and (max-width:1025px) {
            .img-size {
                height: 485px;
                width: auto;
            }
        }
    </style>

    <section class="service-section web-servic pad-tb">
        <div class="container">
            <div class="section-header underline text-center">
                <h3 class="text-white title-th">Elevate Your Crypto Community with Our Expert Growth Solutions</h3>
            </div>
            <p class="text-white text-center" style="position: relative;">Unlock the full potential of your crypto community with our bespoke growth services. We are dedicated to advancing your project by enhancing engagement, boosting visibility, and fostering impactful interactions. Our comprehensive suite of community growth solutions is designed to make your community flourish, connect, and thrive.
            </p>
            <div class="row upset link-hover shape-num justify-content-center">
                <div class="container container-center">
                    <div class="col-lg-4 col-sm-4 equalize mt30  shape-loc wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img class="lazy"
                                    src="{{ asset('images/crypto-community-management/icons/content.png') }}" alt=" "></div>
                            <p> <strong style="display:block; font-size:18px; margin-bottom: 5px;">Dynamic Content Creation </strong>Our expert community managers collaborate with you to craft and deliver compelling content, including articles and videos, ensuring consistent value and engagement. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img
                                    src="{{ asset('images/crypto-community-management/icons/airdrops.webp') }}" class="lazy"
                                    alt=" "></div>
                            <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Strategic Airdrop Campaigns</strong>We design and implement targeted airdrop initiatives that resonate with your current followers while attracting new users with a welcoming approach.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img src="{{ asset('images/crypto-community-management/icons/ads.webp') }}"
                                    class="lazy" alt=" "></div>
                            <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Crypto Advertising Mastery</strong>Our skilled team helps you pinpoint the most effective ad formats and create captivating advertisements that drive traffic and boost site engagement. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img
                                    src="{{ asset('images/crypto-community-management/icons/partnerships.png') }}" class="lazy"
                                    alt=" "></div>
                            <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Strategic Partnerships </strong>We connect your crypto project with complementary crypto ventures, broadening your user base and amplifying your project's reach and influence. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img
                                    src="{{ asset('images/crypto-community-management/icons/events.webp') }}" class="lazy"
                                    alt=" "></div>
                            <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Event Organization</strong>We orchestrate a series of high-impact events, meticulously planned to engage and energize your community, each serving a strategic purpose.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 equalize mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="box4"
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="s-card-icon"><img
                                    src="{{ asset('images/crypto-community-management/icons/webinars.webp') }}" class="lazy"
                                    alt=" "></div>
                            <p> <strong style="display:block; font-size:18px;margin-bottom: 5px;">Webinars and AMAs</strong>We host insightful webinars and interactive Ask-Me-Anything (AMA) sessions, providing your community with direct access to your crypto project and fostering deeper engagement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('static.web3-clients', array(
        'title' => "Prestigious <span style='color:#47b475;'>Web3 Partners</span> <br> We’ve Catapulted to Fame",
        'desc' => "As a distinguished Web3 marketing agency, we are dedicated to delivering unparalleled services that elevate projects to their target audiences through a diverse array of strategies. Our approach has empowered us to collaborate with leading Web3 enterprises, achieving remarkable results and driving their success to new heights."
    ))

    <style type="text/css">
        .Package_list {
            min-height: 0px !important;
        }
    </style>

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

    <style type="text/css">
        .fa-check-circle {
            font-size: 26px;
            color: #91c645;
        }

        .fa-times-circle {
            font-size: 26px;
            color: #d90823;
        }

        .data table td,
        .data table th {
            padding: 15px;
        }
    </style>
    <div id="ret-inv" class="common_spacing" style="background-image: linear-gradient( 94deg , #02194b 0%, #000325);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="text-white text-center title-th sec_tit underline">Why Choose Us for Your Crypto Community Management?</h3>
                    <p class="text-white" style="margin-bottom: 0; text-align: center;">
                    Our agency delivers exceptional services designed to cultivate a robust and vibrant crypto community. We excel in creating and maintaining engaged, dynamic communities across diverse platforms, recognizing that a thriving community is crucial to any crypto project's success.
                    <br><br>
                    We provide detailed reports that offer in-depth analysis, helping to identify gaps and capitalize on emerging opportunities. Our structured approach ensures transparency and confidence in our strategies, fostering a partnership rooted in collaboration and advancement. Trust us to achieve the impactful results your crypto community demands, driven by integrity and open communication.
                    <br><br>
                    Join forces with us and empower your crypto community with strategic insights that translate into real, actionable success.
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- simple-faqs.blade --}}
    @include('static.simple-faqs-section', [
        'faqs' => [
            [
                'ques' => 'What is the purpose of a crypto community?',
                'ans' => "A crypto community serves as a hub for enthusiasts, investors, and supporters to engage, share insights, and discuss developments related to a cryptocurrency or blockchain project. It fosters a sense of belonging and loyalty, essential for the project's growth and sustainability."
            ],
            [
                'ques' => 'What does crypto community management involve?',
                'ans' => "Crypto community management encompasses the strategies and actions used to build, engage, and sustain a vibrant community around a cryptocurrency project. It includes moderating discussions, organizing events, and creating content to enhance interaction and maintain a positive environment."
            ],
            [
                'ques' => 'What responsibilities does a crypto community manager have?',
                'ans' => "A crypto community manager is responsible for overseeing community interactions, addressing member concerns, and ensuring a positive and engaging environment. They also develop content, manage events, and analyze community feedback to drive growth and strengthen connections."
            ],
            [
                'ques' => 'What are the four key components of community management?',
                'ans' => "The four essential elements of community management include strategy development, engagement facilitation, content creation, and analytics. These components work together to build a cohesive and interactive community that supports the project's goals."
            ],
            [
                'ques' => 'What tasks does a crypto social media manager handle?',
                'ans' => "A crypto social media manager is tasked with creating and curating content for various social media platforms, managing online presence, and engaging with followers. They aim to boost brand visibility, drive traffic, and maintain a positive image across social channels."
            ],
            [
                'ques' => 'How can you keep a crypto community actively engaged?',
                'ans' => "To keep a crypto community active, consistently provide valuable content, facilitate engaging discussions, and organize interactive events. Regular updates and responsive communication help maintain enthusiasm and foster a strong sense of community among members."
            ],
        ],
    ])



    <style type="text/css">
        .formdiv .form-left .form-group:last-child {
            margin-bottom: 0;
        }

        .common_newsletter .form-right textarea {
            height: 240px;
        }

        .form-right input.common_send_btn {
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

        body input.common_send_btn.my_send {
            margin-top: 41px !important;
        }

        .timeline-center::before {
            background: #f2f2f2;
        }

        .thumb {
            position: relative;
        }

        .photo {
            position: absolute;
            width: 40px;
            height: 28px;
            left: 45%;
            top: 40%;
        }

        .thumb:hover .photo {
            background-position: 0 -252px;
        }

        .play {
            -webkit-animation: breathing 1s infinite ease-in-out;
            animation: breathing 1s infinite ease-in-out;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            background: url(images/play.webp) no-repeat 0 0;
            width: 40px;
            height: 28px;
            left: 45%;
            top: 40%;
            background-position: 0 -252px;
        }

        .contact-inner-1 {
            padding-top: 70px;
            padding-bottom: 100px;
        }

        .thumb:hover .play {
            background-position: 0 -252px;
        }

        @-webkit-keyframes breathing {
            0% {
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }

            25% {
                -webkit-transform: scale(2);
                transform: scale(2);
            }

            60% {
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }

            100% {
                -webkit-transform: scale(1.45);
                transform: scale(1.45);
            }
        }

        @keyframes breathing {
            0% {
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }

            25% {
                -webkit-transform: scale(2);
                transform: scale(2);
            }

            60% {
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }

            100% {
                -webkit-transform: scale(1.45);
                transform: scale(1.45);
            }
        }

        @media (max-width: 991px) {
            .height_row {
                margin-top: 10px;
            }
        }

        @media (max-width: 767px) {
            .formdiv .form-left .form-group:last-child {
                margin-bottom: 15px;
            }

            .stats {
                min-height: 140px;
            }
        }
    </style>
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">&times;</span></h4>
                </div>
                <div class="formdiv" style="display: inline-block; width: 100%;padding: 15px;">
                    <form class="" id="mailForms1" method="post" action="">
                        <input type="hidden" value="Coinbase like Controlled Exchange" name="btc_value">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name" required="">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" required="">
                            </div>
                            <div class="form-group">
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control" id="skype" name="skype" required="">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input id="phone21" name="phone_dummy" type="text" required=""
                                    oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    data-cf-modified-ed36813cf037743b20f0362c-="">
                                <input type="hidden" name="phone" id="phone_newsletter" value="">
                                <input type="hidden" name="url" id="url" value="/crypto-community-management">
                                <input type='hidden' value='2607:5300:203:172e::' name='IP'>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
                            <div class="form-group">
                                <label>Requirement</label>
                                <textarea placeholder="Write text here..." name="message" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <input type="button" class="submit_send" value="send message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src="js/owl.carousel.js"></script> -->
<script type="ed36813cf037743b20f0362c-text/javascript">
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
<script src="js/vendor.js" type="ed36813cf037743b20f0362c-text/javascript"></script>
<script src="js/plugins-reduced.js" type="ed36813cf037743b20f0362c-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="ed36813cf037743b20f0362c-text/javascript"></script>
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