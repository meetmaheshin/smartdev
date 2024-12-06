@extends('layouts.static')
    @section('title', 'SRC-20 Token Development')

    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
@section('content')

<style type="text/css">
    .form-right input.submit_send{width:100%!important;margin:0!important;display:inline-block!important;background:#0b0d8b!important;color:#fff!important;border:0!important;text-transform:uppercase!important;font-weight:700!important;padding:10px 0!important}.token-list{max-width:935px;margin:0 auto}.token-list li{background-color:#f9f9f9;margin-bottom:15px;margin-right:15px;padding:3px 10px 4px 25px;border-left:2px solid #999;background-image:url(images/sto/check-mark.svg);background-position:5px 8px;background-size:14px;background-repeat:no-repeat;color:#555}.types-sto.types-token h4{font-size:18px}.token-issuance-platform p{margin-bottom:10px}.token-issuance-platform ul li{width:auto;float:none}.token-issuance-platform ul li i{color:#0b0d8b;font-size:20px;margin-right:5px;position:relative;top:2px}.token-tech .flex-sec>div,.types-sto.types-token>div{border-bottom:2px solid #00cd95;transition:.5s;box-shadow:0 0 20px 0 rgba(116,116,116,.1)}.token-tech .flex-sec>div:hover,.types-sto.types-token>div:hover{box-shadow:0 0 20px 0 rgba(116,116,116,.2);-webkit-box-shadow:0 0 20px 0 rgba(116,116,116,.2);-moz-box-shadow:0 0 20px 0 rgba(116,116,116,.2)}@media (min-width:992px){.token-list li{width:48%;float:left}}@media (max-width:767px){.token-list{margin-top:20px}}@media only screen and (min-width:480px) and (max-width:767px){.banner{background:#1da591;background-size:cover;position:relative;height:500px;overflow:hidden}.local_bitcoins{display:none!important}.large-header{position:relative;width:100%;overflow:hidden;background-size:cover;background-position:center center;z-index:1;background-color:transparent}}@media only screen and (max-width:479px){.banner{background:#1da591;background-size:cover;position:relative;height:500px;overflow:hidden}.mt60{margin-top:0!important}.large-header{position:relative;width:100%;overflow:hidden;background-size:cover;background-position:center center;z-index:1;background-color:transparent}.local_bitcoins{display:none!important}}.sub_head{max-width:900px;margin:0 auto 30px}.asset-token:hover{background:#009688}@media (max-width:767px){.data table tbody tr:first-child th:last-child{transform:none!important;box-shadow:0 0 10px 0 rgb(0 0 0 / 30%)}}.tokenize{background:#fff}.features-tech:hover{background:#8bc34a;transition:all .5s ease-out}.features-tech h4{font-weight:700}.features-tech:hover h4{color:#fff;font-weight:700}.features-tech:hover p{color:#fff;font-weight:700}@media screen and (max-width:500px){.nec-btn{width:auto!important;padding:10px 12px!important}.cta_mine{width:auto!important}}@media screen and (min-width:768px){.investor-prospectus ul li{width:25%}}.font_wei{font-weight:700}body{color:#161515}.asset-token h3{font-weight:700}.asset-token:hover p{color:#fff}.asset-token:hover h3{color:#fff}.asset-token:hover img{filter:brightness(0) invert(1)}@media screen and (max-width:360px){.contentall h1{font-size:30px;line-height:30px}}.spc li p i::before{margin-right:10px!important}.spc li p{text-indent:-9px}@media only screen and (max-width:760px){#one{order:2}#two{order:1}}.nec-btn{position:relative!important;color:#fff!important;border-radius:30px!important;font-size:11px;text-transform:capitalize!important;transform:scale(1.1,1.1)!important;transition:all .3s ease-out 0s!important;background:linear-gradient(to right, rgb(205, 69, 255), rgb(115, 104, 255))!important}.nec-btn:hover{transform:scale(1,1)!important;color:#fff!important;background:#00a9e2!important}.contentall a,a.home-talk-experts{padding:10px 20px!important}a.nectar-button.medium.regular.accent-color.regular-button.nec-btn{margin-bottom:15px!important;display:inline-block}@media screen and (min-width:500px){a.nectar-button.medium.regular.accent-color.regular-button.nec-btn{margin-right:26px!important}}.banner_content p{margin:0 auto!important;padding-bottom:10px}
    .nec-btn{background: linear-gradient(to right, rgb(8 226 244), rgb(40 144 220)) !important;}
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
        max-width: 500px;
        margin-top: 50px;
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
        background: linear-gradient(#00cdba, #20197b);
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
        margin-bottom: 20px;
        line-height: 1.3;
        font-weight: 700;
        font-size: 30px !important;
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

    @media screen and (min-width: 500px) {
        #cyz {
            margin-right: 20px !important;
        }

        #cyz {
            /*display: block !important;*/
            /*                padding: 10px 25px !important;*/
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
        font-size: 19px !important;
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
        background: #effaff;
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
        font-size: 35px;
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
        background-color: #effaff;
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
        background: #effaff;
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
        background: #effaff;
        overflow: hidden;
        box-shadow: 3px 3px 0px 0px #2890dc;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        position: relative;
        height: 100%;
        min-height: auto;
        border: 1px solid #2890dc;
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
        background: #effaff !important;
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
        color: #0b0d8b;
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
        border: 4px solid #2890dc;
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
    }

    .technologies ul li p {
        margin-bottom: 0 !important;
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
        border: 10px solid #2890dc;
        font-size: 40px;
        color: #2890dc;
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
        color: #2890dc;
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
            border-right: 20px solid #2890dc;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            top: 40%;
            left: -23px;
            bottom: auto;
            right: auto;
            transform: rotate(0)
        }

        .time-line .timeline:nth-child(2n) .year:before {
            border-right-color: #2890dc
        }

        .time-line .timeline:nth-child(3n) .year:before {
            border-right-color: #2890dc
        }

        .time-line .timeline:nth-child(4n) .year:before {
            border-right-color: #2890dc
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
        background: #0b4599;
        margin: 2px;
        border-radius: 5px;
        color: #fff;
        text-align: center;
    }

    .tech-stack .nav li.active a,
    .tech-stack .nav li a:hover {
        background-image: linear-gradient(to right, #00aaff, #3a5be4);
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
                        <div class="col-md-5 col-sm-6 col-xs-12 text-left">
                            <div class="contentall">
                                <div class="ban_tirt">
                                    <h1>Your Go-To SRC-20 Token Development Experts</h1>
                                </div>
                                <p itemprop="text">Step into the future with our cutting-edge SRC-20 token development services. Create SRC-20 tokens that will endure on the Bitcoin blockchain, joining the growing ecosystem of innovative digital assets.</p>
                                <div class="banner-btn">
                                    <a href="{{ url('consultation') }}"
                                        rel="nofollow" class="nec-btn" id="cyz"
                                        style="border-radius: 30px !important; text-transform: capitalize !important; margin-left: 0px;">LET'S DISCUSS YOUR PROJECT</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12 text-center">
                            <img src="{{ asset('images/src-20-token-development/banner-img1.webp') }}" class="banner-img"
                                alt="SRC-20 Token Development Company" title="SRC-20 Token Development Company">
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
                background: #1a87a4;
            }

            #counter-stats .stats:nth-child(2) {
                background: #00c6d1;
            }

            #counter-stats .stats:nth-child(3) {
                background: #1a87a4;
            }

            #counter-stats .stats:nth-child(4) {
                background: #00c6d1;
            }

            /* AUTHOR LINK */
        </style>
        @include('static.stats')
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
        @include('static.client-list')
        <section class="welcome-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                        <h2 class="sec_tit underline text-center">SRC-20 Token Development: Leading the Charge in Digital Asset Innovation</h2>
                        <p class="section-subtitle mb20 text-center">Harnessing the STAMPS (Secure Tradable Art Maintained Securely) protocol, we create sophisticated SRC-20 tokens on the Bitcoin network. Since their debut in early 2023, SRC-20 tokens have quickly become a favorite among Web3 pioneers, thanks to their effective use of Bitcoin’s infrastructure. With thousands of SRC-20 tokens already circulating globally, our team is here to support visionary entrepreneurs with comprehensive development services.</p>
                    </div>
                    <div class="text-center cta_min " style="width: 100%;"> <a rel="nofollow"
                            class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                            href="{{ url('consultation') }}"
                            data-color-override="false" data-hover-color-override="false"
                            data-hover-text-color-override="#fff"><span>SCHEDULE A FREE CONSULTATION!</span></a>
                    </div>
                </div>
            </div>
        </section>
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
                line-height: normal;
            }

            .ben_wrap h4 {
                font-weight: 700;
                font-size: 18px;
                margin-top: 0px;
                line-height: normal;
            }

            div#why_ben {
                padding-bottom: 10px
            }

            .ben_wrap span {
                background: #2890dc;
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
            'title' => 'Why SRC-20 Tokens are Transforming Business Landscapes', 
            'desc' => 'SRC-20 tokens are making waves due to their robust features and the growing Web3 support. As their popularity surges, understanding their benefits is crucial for businesses looking to stay ahead.',
            'cards' => [
                [
                    'title' => '',
                    'desc' => 'SRC-20 tokens are built on Bitcoin, the original blockchain, which expands their potential reach and market opportunities.',
                    'image' => 'tron-token-development/icons/transfer.png',
                ],
                [
                    'title' => '',
                    'desc' => "Supported by Bitcoin, SRC-20 tokens benefit from top-notch security and the blockchain's strong, reliable network.",
                    'image' => 'tron-token-development/icons/transaction-fees.png',
                ],
                [
                    'title' => '',
                    'desc' => "Creating SRC-20 tokens on Bitcoin offers greater credibility and trust with collectors compared to other blockchains, thanks to Bitcoin's long-standing reputation.",
                    'image' => 'tron-token-development/icons/fundraising.png',
                ],
            ],
            'cta_1' => '',
            'cta_2' => ''
        ])
        <style type="text/css">
            .prom-icon {
                margin-bottom: 15px;
            }

            .prom-desp h4 {
                font-size: 18px;
                letter-spacing: normal;
            }
        </style>
        @include('static.small-round-3-col-card-section', [
            'title' => 'Revolutionize Your Business with the Unique Attributes of SRC-20 Tokens',
            'desc' => 'SRC-20 tokens offer a wealth of opportunities by utilizing the STAMPS protocol, providing distinctive features that help your business stand out.',
            'cards' => [
                [
                    'title' => 'Permanent On-Chain Availability',
                    'desc' => 'SRC-20 tokens are permanently recorded on the Bitcoin blockchain, ensuring lasting security and immutability through unspendable transaction outputs.',
                    'image' => 'tron-token-development/icons/supply-chain.webp',
                ],
                [
                    'title' => 'Enhanced Security',
                    'desc' => "Benefiting from Bitcoin's network, SRC-20 tokens are protected against external threats and tampering, providing top-notch security.",
                    'image' => 'src-20-token-development/icons/security.png',
                ],
                [
                    'title' => 'Key Burn Functionality',
                    'desc' => "The KeyBurn feature is vital for SRC-20 tokens, ensuring that unspendable outputs remain unspent and assets are effectively removed.",
                    'image' => 'src-20-token-development/icons/key-burn.png',
                ],
                [
                    'title' => 'Unique Naming Options',
                    'desc' => 'SRC-20 tokens allow for creative naming conventions, including emoji use in token tickers, to enhance brand visibility and appeal.',
                    'image' => 'src-20-token-development/icons/unique_naming.png',
                ],
                
            ]
        ])
        <style>
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
                line-height: 30px;
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
                border-left: 2px solid #47b475;
                transition: .1s all ease;
            }

            .featured-icon-box.style3 {
                position: relative;
                margin: 15px 0;
                background-color: #fff;
            }
        </style>
        <style type="text/css">
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
                background: #0b2864;
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

            .awesome-features-wrapper::after {
                content: "";
                position: absolute;
                right: -6px;
                top: -6px;
                background: #0b2864;
                width: 90px;
                height: 90px;
                z-index: -1;
                transition: 1s;
                border-radius: 7px;
            }

            .new-features .awesome-features-icon-img .fa {
                color: #fff;
            }
        </style>
        <div class="common_spacing gray_bg new-features" style="background: #005281;">
            <div class="container">
                <div class=" ">
                    <h3 class="sec_tit underline text-center text-white">Maximize Your Investment with SRC-20 Tokens: Gain a Competitive Advantage
                    </h3>
                </div>
                <p class="text-center text-white">As a leading provider in SRC-20 token development, we offer groundbreaking benefits that set your business apart.</p>
                <div class="row mt40">
                    <div class="container container-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="lazy"
                                        src="{{ asset('images/src-20-token-development/icons/market-entry.png') }}"> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Early Market Entry</strong>The SRC-20 sector is still emerging, presenting a prime opportunity for innovative entrepreneurs to lead and shape the market.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="lazy"
                                        src="{{ asset('images/src-20-token-development/icons/roi.png') }}"></div>
                                <div class="awesome-features-text">
                                    <p> <strong
                                            style="display:block; font-size: 20px; padding-bottom: 5px;">Increased ROI Potential</strong>SRC-20 tokens, tied to Bitcoin, promise significant returns as the market evolves, drawing interest from collectors and investors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="lazy"
                                        src="{{ asset('images/src-20-token-development/icons/emerging_industry.png') }}"> </div>
                                <div class="awesome-features-text">
                                    <p> <strong style="display:block; font-size: 20px; padding-bottom: 5px;">Emerging Industry Advantage</strong>With SRC-20 development being relatively new, there’s less competition, giving you a chance to build a strong foothold early on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="awesome-features-wrapper text-center mb-30">
                                <div class="awesome-features-icon-img"> <img class="lazy"
                                        src="{{ asset('images/src-20-token-development/icons/infrastructure.png') }}"> </div>
                                <div class="awesome-features-text">
                                    <p> <strong
                                            style="display:block; font-size: 20px; padding-bottom: 5px;">Advanced Infrastructure</strong>Using the STAMPS protocol, SRC-20 tokens take full advantage of Bitcoin’s infrastructure, ensuring data immutability and permanence.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            {{-- <div class="text-center cta_min "> <a rel="nofollow"
                    class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                    href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"
                    data-color-override="false" data-hover-color-override="false"
                    data-hover-text-color-override="#fff"><span>Schedule A Meeting</span></a> <a rel="nofollow"
                    href="#newsletter-form-sec"
                    class="nectar-button medium regular accent-color regular-button nec-btn"><span>Talk with our
                        Experts</span></a>
            </div> --}}
        </div>
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

            .icon-text-1 h4 {
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
                <div class="row mt20">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="sec_tit mt30">
                                <h3 class="section-title mb20">Secure Your Business Future with Custom SRC-20 Tokens</h3>
                            </div>
                        </div>
                    </div>
                    <p class="c-grey" style="width: 100%; text-align: center;">Creating SRC-20 tokens involves a detailed process, and we are here to guide you through every step.</p>
                </div>
                <div class="row mt20 container-center">
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/src-20-token-development/icons/project_evaluation.png') }}"></div>
                            <div class="icon_content">
                                <h4>1. Project Evaluation</h4>
                                <p class="c-grey">We begin by assessing the feasibility of your SRC-20 token idea on the Bitcoin blockchain, shaping a strategic plan based on your vision.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/src-20-token-development/icons/market_search.png') }}"></div>
                            <div class="icon_content">
                                <h4>2. Market Research</h4>
                                <p class="c-grey">Next, we conduct in-depth market research to craft a detailed operational model that optimizes the sale and usage of your SRC-20 digital assets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/src-20-token-development/icons/tokens.png') }}"></div>
                            <div class="icon_content">
                                <h4>3. Token Development</h4>
                                <p class="c-grey">With research completed, we develop your SRC-20 tokens using the STAMPS protocol, ensuring they are secure and permanently integrated into the Bitcoin blockchain.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                    src="{{ asset('images/src-20-token-development/icons/Support.png') }}"></div>
                            <div class="icon_content">
                                <h4>4. Launch and Ongoing Support</h4>
                                <p class="c-grey">
                                    Finally, we launch your tokens on the Bitcoin network and provide continuous support to help your business thrive and market your new assets effectively.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div>
    </section>
    <style type="text/css">
        .text-center {

            text-align: center !important;
        }

        .design {
            background: #fff;
            border-radius: 20px;
            padding: 25px 0 1px;
            margin: 15px auto;
        }

        .design h5,
        .design p {
            color: #000;
            font-size: 20px;
            font-weight: 600;
        }

        #demo {
            padding: 30px 0;
        }

        /*    #demo .container{padding: 40px 0; border: 5px solid #eee; border-radius: 15px;}*/
        @media (max-width: 320px) {
            /* .design{
                       padding: 2px 145px 1px 20px;
             }*/
        }
    </style>
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
            background: linear-gradient(#0b0d8b, #1dc2e1);
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
            background: #0b0d8b !important;
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
            background: linear-gradient(#0b0d8b, #1dc2e1);
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
            background: #0b0d8b !important;
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
        }
    </style>
    <style type="text/css">
        /*-- Technology --*/
        .technologies {
            background: #005281;
            padding: 50px 0;
        }

        .technologies ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .technologies ul li {
            width: 16%;
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
    </style>
    <div class="technologies">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="sec_tit underline text-center text-white">Kickstart Your SRC-20 Token Project Inspired by Successful Models</h3>
                <p class="text-center white">As SRC-20 tokens gain traction on the Bitcoin blockchain, now is the perfect time to leverage this for your new venture. Partner with our team to develop SRC-20 tokens modeled after proven business strategies.</p>
                <ul>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/stamp-src.webp') }}">
                        <p class="white">STAMP SRC</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/kevin-src.webp') }}">
                        <p class="white">KEVIN SRC</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/stmap-src.webp') }}">
                        <p class="white">STMAP SRC</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/sato-src.webp') }}">
                        <p class="white">SATO SRC</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/pepe-src.webp') }}">
                        <p class="white">PEPE SRC</p>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/nftm/icons/stunk-src.webp') }}">
                        <p class="white">STUNK SRC</p>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .category-item.aos-item:hover .text-center {
            position: relative;
            z-index: 99;
            color: #000 !important;
        }
    </style>
    @include('static.crypto-coins', array(
        'title' => 'Your Premier Resource for SRC-20 Token Development', 
        'desc' => 'We are committed to delivering outstanding results with our SRC-20 token development services. In a short span, we have become a leading force in this space, showcasing our expertise. If you’re ready to explore new opportunities in the crypto world, our SRC-20 token creation services are your perfect starting point. Reach out to our experts today to bring your project to life.',
        'cta_1' => '#',
        'cta_2' => 'consultation'
    ))
    @include('static.six-card-section', [
        'title' => 'Leading Your Success with Comprehensive SRC-20 Token Development', 
        'desc' => 'We specialize in SRC-20 token development, addressing a range of client needs to ensure your projects excel.',
        'cards' => [
            [
                'title' => 'Consulting',
                'desc' => "Our expert consultations provide valuable insights into launching SRC-20 tokens and developing effective strategies.",
                'image' => 'src-20-token-development/icons/consulting.png'
            ],
            [
                'title' => 'Ideation',
                'desc' => "We help new ventures define clear business concepts and create effective marketing strategies as part of our SRC-20 token services.",
                'image' => "src-20-token-development/icons/ideation.png"
            ],
            [
                'title' => 'Creation',
                'desc' => 'Our expertise in the Bitcoin network allows us to develop high-quality SRC-20 tokens with diverse features tailored to new businesses.',
                'image' => 'src-20-token-development/icons/creation.png'
            ],
            [
                'title' => 'Minting',
                'desc' => 'We offer minting services to officially register and release SRC-20 tokens on the Bitcoin network, facilitating the launch of your tokens for sale.',
                'image' => 'src-20-token-development/icons/Minting.png'
            ],
        ],
    ])
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
            background: #2890dc;
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
    {{-- simple-faqs.blade --}}
    @include('static.simple-faqs-section', [
        'faqs' => [
            [
                'ques' => 'What are SRC-20 Tokens?',
                'ans' => 'SRC-20 tokens are digital assets built on the Bitcoin blockchain, following the SRC-20 standard to ensure their functionality and integration within the network.'
            ],
            [
                'ques' => 'What features do SRC-20 Tokens offer?',
                'ans' => "SRC-20 tokens provide enhanced security, immutability, and the advantages of Bitcoin's infrastructure, making them a robust option for various applications."
            ],
            [
                'ques' => 'What are the benefits of developing SRC-20 Tokens?',
                'ans' => "SRC-20 tokens offer significant security advantages due to Bitcoin's network, flexible asset creation, and access to Bitcoin's established user base."
            ],
            [
                'ques' => 'What sets SRC-20 apart from BRC-20?',
                'ans' => "SRC-20 and BRC-20 are both Bitcoin token standards, but SRC-20 offers enhanced security and more features, while BRC-20 is simpler and more broadly applicable."
            ],
        ],
    ])
</div>
</div>

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