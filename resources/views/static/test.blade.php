@extends('layouts.static')

@section('css')
@endsection


@section('content')

<link rel="stylesheet" href="css/public_vendor.css">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="css/main.css">

<script defer data-domain="blockchainappfactory.com" src="https://plausible.io/js/script.js" type="5e54128c9a97ba44daa3d250-text/javascript"></script>

<script type="5e54128c9a97ba44daa3d250-text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W6VQVFF');</script>


<style type="text/css">
.top-header p{margin-bottom:0;color:#fff;display:inline-block;width:auto}.lc-1ip30wz{height:30px!important}.top-header{background:#378658;padding:10px}@-webkit-keyframes breathing{0%{-webkit-transform:scale(1);transform:scale(1)}25%{-webkit-transform:scale(1.1);transform:scale(1.1)}50%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes breathing{0%{-webkit-transform:scale(1);transform:scale(1)}25%{-webkit-transform:scale(1.1);transform:scale(1.1)}50%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(1);transform:scale(1)}}.top-header .breathing_effect{-webkit-animation:breathing 1s infinite ease-in-out;animation:breathing 1s infinite ease-in-out;-webkit-font-smoothing:antialiased;transition:1s;display:inline-block;width:auto}.top-header .breathing_effect a{background:#f44336;color:#fff;padding:5px 10px;border-radius:0;margin-left:15px}.top-header .breathing_effect a:hover{color:#fff!important}@media (max-width:1199px){.header .main-menu>li a{padding:0 5px}}@media (max-width:550px){.top-header p{width:60%;text-align:right;vertical-align:middle}.top-header .breathing_effect{display:inline-block;width:40%}}
.guardian-p{
  text-align: center;font-size: 12px;
}
/*-- Client section --*/
.teck .category-grid-style-01 .category-item{padding: 10px !important;}
.category-item.aos-item .text-center{font-size: 12px !important; margin-bottom: 0px !important;} 
.teck .category-grid-style-01 .category-item .category-icon{margin-bottom: 0 !important;}
.teck .category-icon img{height: 80px !important;}
/*-- Client section --*/
</style>
<script src="js/jquery.min.js" type="5e54128c9a97ba44daa3d250-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="5e54128c9a97ba44daa3d250-text/javascript"></script>
<script type="5e54128c9a97ba44daa3d250-text/javascript"> adroll_adv_id = "E3KNBOMLAZDCJHJIRQD2UO"; adroll_pix_id = "VALTZMTFYRCMVBVBVEXSMX"; adroll_version = "2.0";  (function(w, d, e, o, a) { w.__adroll_loaded = true; w.adroll = w.adroll || []; w.adroll.f = [ 'setProperties', 'identify', 'track' ]; var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id + "/roundtrip.js"; for (a = 0; a < w.adroll.f.length; a++) { w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) { return function() { w.adroll.push([ n, arguments ]) } })(w.adroll.f[a]) }  e = d.createElement('script'); o = d.getElementsByTagName('script')[0]; e.async = 1; e.src = roundtripUrl; o.parentNode.insertBefore(e, o); })(window, document); adroll.track("pageView"); </script> <script src="js/vendor/modernizr.js" type="5e54128c9a97ba44daa3d250-text/javascript"></script>

<script type="5e54128c9a97ba44daa3d250-text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 9464790;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>

<style type="text/css">
.container-center {display: flex; flex-wrap: wrap; position: relative; z-index: 1; justify-content: center; }
.equalize {display: flex; margin: 5px 0;}

.large-header{background: none;}
.large-header:before{display: none;}

#related_blogs .attachment-post-thumbnail {
    width: 100%;
    height: 220px;
    object-fit: cover;
    margin-bottom: 10px;
}
/*new css*/
.pad{
    padding: 3% 0%;
}
.magic{padding-top: 100px;}
.main-timeline{ font-family: 'Exo 2', sans-serif; }
.main-timeline:after{
    content: '';
    display: block;
    clear: both;
}
.main-timeline .timeline{
    width: 49%;
    gap: 2px;
    margin: 0 0 20px 5px;
    float: left;
}
.main-timeline .timeline-content{
    color: #fff;
    background: linear-gradient(140deg, #00001b, #14219a);
    padding: 15px 15px 45px 140px;
    border-radius: 50px 0;
    border: 20px solid #e7e7e7;
    display: block;
    overflow: hidden;
    position: relative;
    z-index: 1;
}
.main-timeline .timeline-content:hover{ text-decoration: none; }
.main-timeline .timeline-content:hover{
    color: #000!important;
}
.main-timeline .timeline-content:hover .title{
    color: #fff!important;
}
.main-timeline .description:hover{
     color: #fffff!important;
}
.main-timeline .timeline-content:before{
    content: '';
    background-color: rgba(255,255,255,0.25);
    height: 300px;
    width: 300px;
    border-radius: 50%;
    position: absolute;
    left: -180px;
    bottom: -125px;
    z-index: -1;
}
.main-timeline .timeline-icon{
    font-size: 60px;
    position: absolute;
    left: 20px;
    bottom: 15px;
}
.main-timeline .title{
    font-size: 20px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin: 0 0 5px;
    color: #fff;
}
.main-timeline .description{
    font-size: 14px;
    margin: 0;
     color: #fff !important;
}
.main-timeline .timeline:nth-child(even){
    margin: 0 5px 20px 0;
    float: right;
}
.main-timeline .timeline:nth-child(even) .timeline-content{ padding: 15px 211px 35px 20px; }
.main-timeline .timeline:nth-child(even) .timeline-content:before{
    left: auto;
    right: -180px;
}
.main-timeline .timeline:nth-child(even) .timeline-icon{
    left: auto;
    right: 20px;
}
.main-timeline .timeline:nth-child(4n+2) .timeline-content{
    background: linear-gradient(140deg, #00001b, #14219a);
}
@media screen and (max-width:990px){
    .main-timeline .timeline{ width: 70%; }
    .ovr {text-align: center;}
}
@media screen and (max-width:767px){
    .main-timeline .timeline,
    .main-timeline .timeline:nth-child(even){
        width: 100%;
        margin: 0 0 35px 0;
    }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(even) .timeline-content{
        text-align: center;
        padding: 100px 15px 15px;
    }
    .main-timeline .timeline-content:before,
    .main-timeline .timeline:nth-child(even) .timeline-content:before{
        transform: translateX(-50%);
        left: 50%;
        right: auto;
        bottom: auto;
        top: -215px;
    }
    .main-timeline .timeline-icon,
    .main-timeline .timeline:nth-child(even) .timeline-icon{
        font-size: 40px;
        transform: translateX(-50%);
        left: 50%;
        top: 10px;
    }
}
/*end*/
.blog_info h3 {
  margin: 0 10px 10px 10px;
  font-size: 17px;
  line-height: 1.4;
  font-weight: 400;
  text-align: left;
}
.blog_info {
    border: 1px solid #eee;
    background: #f5f5f5;
    -webkit-box-shadow: 0 8px 6px -6px black;
    -moz-box-shadow: 0 8px 6px -6px black;
    box-shadow: 0 8px 6px -6px #888;
    min-height: 445px;
    margin-bottom: 30px;
}
.blog_info .except {
    margin: 0 10px 10px 10px;
    text-align: left;
}
.pre_data {
    margin: 0 10px 10px 10px;
    overflow: hidden;
    font-weight: bold;
}
.pre_data .date_dt {
    float: left;
    color: #000;
}
.pre_data .read_mr {
    float: right;
}
.pre_data .read_mr a {
    border-bottom: 2px solid;
    padding-bottom: 1px;
}
#related_blogs h2 {
    text-align: center;
    margin-bottom: 20px;
}

/*------Blog Style End-----*/
  #about.about-one hr {
    margin: 10px 0 15px;
}
.feature-box .icon img {
    padding: 5px;
    background: #fff;
    width: 100%;
    border: 5px solid #5bbc8499;
}
#content-sec.content-section .underline:after {
    right: 0;
    margin: 0 auto;
    left: 0;
    width: 32px;
}
.feature-box {
    background: #fff;
    padding: 0px 0px 20px 0px;
    box-shadow: 0 0 10px #ccc;
}
.feature-box:hover{
    transform: translateY(-10px);
}
.feature-box .feature-desc {
    text-align: center;
    padding: 0 15px;
    color: #333;
}
.form-right input.submit_send {
    width: 100% !important;
    margin: 0 !important;
    display: inline-block !important;
    background: #140050 !important;
    color: #fff !important;
    border: 0 !important;
    text-transform: uppercase !important;
    font-weight: bold !important;
    padding: 10px 0 !important;
}
.timeline-center .tm-icon span:before {
    line-height: 60px;
}
#how-to-start .timeline-center::before {
    position: absolute;
    top: 0;
    left: 50%;
    height: 88%;
    width: 2px;
    background: #140050;
}
h3.btc {
    font-size: 32px;
}
.sub_ff strong {
    display: block;
   /* padding-left: 26px;*/
    font-size: 17px;
    /*margin-bottom: 10px;*/
    color: #00000a !important;
    font-weight: 900;
}

/* width */
.sub_ff::-webkit-scrollbar {
  width: 7px;
}

/* Track */
.sub_ff::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.sub_ff::-webkit-scrollbar-thumb {
  background: #140050; 
  border-radius: 10px;
}

/* Handle on hover */
.sub_ff::-webkit-scrollbar-thumb:hover {
  background: #318b57; 
}

.sub_ff {
    position: relative;
    margin-top: 15px;
    margin-bottom: 20px;
    max-height: 360px;
    overflow-y: scroll;
    padding: 15px;
}
.sub_ff p{background: #fff; border-radius: 10px; padding: 15px; box-shadow: 0 0 16px 5px rgb(147 147 147/20%);}

.sub_ff i {
    /*position: absolute;
    left: 0;*/
    float: left;
    color: #140050;
    line-height: 1.5;
    font-size: 19px;
    margin-right: 10px;
}
.feature-box.feat_he {
    /*min-height: 554px !important;*/
}
.feature-box.feat_he p {
    /*min-height: 200px;*/
    margin-bottom: 20px;
}
.What-one h4 {
    line-height: 1.4;
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 21px;
}
.wht_box i {
    width: 45px;
    height: 45px;
    color: #fff;
    background: #140050;
    text-align: center;
    font-size: 25px;
    border-radius: 6px;
    line-height: 1.8;
}

.wht_box  .ww_cnnt {
    padding-left: 60px;
}
.What-one h5 {
    line-height: 1.5;
    margin-top: 15px;
    margin-bottom: 30px;
}
.wht_box .ww_cnnt h6 {
    font-weight: bold;
    font-size: 17px;
    line-height: 1.4;
}
ul.list-ico {
    padding: 0;
    margin-bottom: 10px;
}
.list-ico li {
    background: url(images/ico/big-tick.webp);
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-size: auto auto;
    background-repeat: no-repeat;
    padding-left: 30px;
    margin-bottom: 10px;
    background-size: 20px;
    background-position: 0 4px;
}
.panel-body{
    color: #333 !important;
}
.panel-title{
    color: #333;
}
 
.panel-body p {
    margin-bottom: 5px;
    color: #333;
}

.panel-body h5 {
    margin-bottom: 10px;
    color: #333;
}

.panel-body ul {
    padding-left: 15px;
    color: #333;
}
.contentall{padding-top: 110px;}

@media (max-width: 768px) {
    .blog_info, .feature-box.feat_he p, .feature-box.feat_he {
    min-height: auto !important;
}
}
@media (max-width: 500px){
a.nectar-button {
    display: inline-block;
    width: 84%;
    margin-top: 10px;
}
.contentall{padding-top: 0px;}
.txt {text-align: center;}
.banner, .large-header{height: auto;}
}
body{
    color: #333;
}
.med-btn{
        border-radius: 30px !important;
    }
.med-btn:hover {
        background: skyblue;
        transform: scale(0.9);
}
.grid-ul li {
    display: grid;
    width: 100%;
    padding: 0px !important; 
    grid-template-columns: auto auto;
    grid-column-gap: 25px;
}
@media (max-width: 375px){
.contentall h1 {
    font-size: 28px !important;
    line-height: 30px !important;
    margin-top: 50px !important;
    text-align: center !important;
}
.contentall p{
    text-align: center !important;
}
.med-btn-1{
    text-align: center !important;
}
}
 

    @media (max-width: 320px){
        .banner{
            height: 700px;
        }
    }

  .timeline-scroll {
        padding: 60px 0px;
  white-space: nowrap;
  overflow-x: hidden;
}
.timeline-scroll::before{display: none;}

.timeline-scroll ol {
  font-size: 0;
  width: 100vw;
  padding: 250px 0;
  transition: all 1s;
}

.timeline-scroll ol li {
  position: relative;
  display: inline-block;
  list-style-type: none;
  width: 180px;
  height: 3px;
  background: #010317;
}

.timeline-scroll ol li:last-child {
  width: 100%;
}

.timeline-scroll ol li:not(:first-child) {
  margin-left: 14px;
}

.timeline-scroll ol li:not(:last-child)::after {
  content: "";
  position: absolute;
  top: 50%;
  left: calc(100% + 1px);
  bottom: 0;
  width: 12px;
  height: 12px;
  transform: translateY(-50%);
  border-radius: 50%;
  background: #00b7c2;
}

.timeline-scroll ol li div {
  position: absolute;
  left: calc(100% + 7px);
  width: 280px;
  padding: 15px;
  font-size: 1rem;
  white-space: normal;
  color: black;
  background: #f5f5f9;
}

.timeline-scroll ol li div::before {
  content: "";
  position: absolute;
  top: 100%;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline-scroll ol li:nth-child(odd) div {
  top: -16px;
  transform: translateY(-100%);
}

.timeline-scroll ol li:nth-child(odd) div::before {
  top: 100%;
  border-width: 8px 8px 0 0;
  border-color: #f5f5f9 transparent transparent transparent;
}

.timeline-scroll ol li:nth-child(even) div {
  top: calc(100% + 16px);
}

.timeline-scroll ol li:nth-child(even) div::before {
  top: -8px;
  border-width: 8px 0 0 8px;
  border-color: transparent transparent transparent #f5f5f9;
}

.timeline-scroll time {
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 8px;
  color: #00b7c2;
}

/* TIMELINE ARROWS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline-scroll .arrows {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}
.timeline-scroll button{padding: 0;}
.timeline-scroll .arrows .arrow__prev {
  margin-right: 20px;
  background: none;
  border: 0;
}
.timeline-scroll .arrows .arrow__next{
  background: none;
  border: 0;
}

.timeline-scroll .disabled {
  opacity: 0.5;
}

.timeline-scroll .arrows img {
  width: 45px;
  height: 45px;
}

/* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 599px) {
  .timeline-scroll ol,
  .timeline-scroll ol li {
    width: auto;
  }

  .timeline-scroll ol {
    padding: 0;
    transform: none !important;
  }

  .timeline-scroll ol li {
    display: block;
    height: auto;
    background: transparent;
  }

  .timeline-scroll ol li:first-child {
    margin-top: 25px;
  }

  .timeline-scroll ol li:not(:first-child) {
    margin-left: auto;
  }

  .timeline-scroll ol li div {
    position: static;
    width: 94%;
    height: auto !important;
    margin: 0 auto 25px;
  }

  .timeline-scroll ol li:nth-child(odd) div {
    transform: none;
  }

  .timeline-scroll ol li:nth-child(odd) div::before,
  .timeline-scroll ol li:nth-child(even) div::before {
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
    border: none;
    border-left: 1px solid white;
    height: 25px;
  }

  .timeline-scroll ol li:last-child,
  .timeline-scroll ol li:nth-last-child(2) div::before,
  .timeline-scroll ol li:not(:last-child)::after,
  .timeline-scroll .arrows {
    display: none;
  }
}



/*-- Travel App --*/
.travel-app{ padding: 60px 0px;}
.travel-app-items, .travel-app-items1{clear: both; min-height: 90px; margin-bottom: 20px; display: flex; }
.travel-app-items p strong, .travel-app-items1 p strong{display: block; font-size: 20px; color: #350068; text-align: left;}
.travel-app-items p{color: #000; text-align: justify; width:80%; }
.travel-app-items1 p{color: #000;}
.travel-app-items .icons, .travel-app-items1 .icons{width: 80px; height: 80px; border:4px solid #350068; float: left; margin-right: 20px; position: relative; padding: 13px; border-radius: 50%; margin-bottom: 30px; }
/*.travel-app-items .icons:before{content: ''; position: absolute; width: 40px; height: 8px;background: #fff; z-index: 1; top: -8px; left: -8px;}*/
/*.travel-app-items .icons img{-webkit-filter: brightness(0) invert(1);  filter: brightness(0) invert(1);}*/
.travel-app-items1 .icons img{}
.travel-app .app-screen1{padding: 10px; max-width: 320px; }

/*------------ Complimentary-Features Style -----------*/
.complimentary-features{padding: 60px 0px 0 0; background: #fff;}
.complimentary-features ul{display: flex; flex-wrap: wrap; width: 100%; margin: 0px; padding: 0px; justify-content: center;}
.complimentary-features ul li{width: 29%; margin: 2%; text-align: left; background: #fff; box-shadow: 0px 4px 34px rgb(59 54 100 / 15%); border-radius: 15px; padding: 30px 30px 20px 30px;}
.complimentary-features ul li:nth-child(even){background:#f4faff;}
.complimentary-features ul li .icons{float: left;}
.complimentary-features ul li .icons img { width: 80px; height:80px;padding: 10px;}
.complimentary-features ul li .content{background: transparent;}
.complimentary-features ul li p strong{display: block; font-size: 20px; color: #200b52;   text-align: left; padding-bottom: 10px;}
.complimentary-features ul li h4{display: block; font-size: 20px; color: #200b52; font-weight: bold; text-align: left; line-height: 1.3em; margin-bottom: 10px;}
.complimentary-features ul li h3{display: block; font-size: 18px; color: #200b52; font-weight: bold; text-align: left; line-height: 1.3em; margin-bottom: 10px;}

/*------------ Tech Stack -----------*/
.tech-stack{padding: 0 0 60px 0px;}
.tech-stack ul{display: flex; border: 1px solid #eee; background: #fff; padding: 10px; justify-content: center; column-gap: 5%;} 
.tech-stack ul li{width: 25%; margin: 5px 0; text-align: center;}
.tech-stack ul img{max-width: 50px;}
.tech-stack h4{text-align: center; background: #140050; color: #fff; font-size: 20px; font-weight: bold; padding: 0px; margin-bottom: 0;}

/*-- Technology --*/               
.technologies {background:#140050; padding: 50px 0;}
.technologies ul {display: flex; flex-wrap: wrap; justify-content: center;}
.technologies ul li {width:26%; text-align: center; font-size: 16px; padding: 15px; margin: -1px; border: 1px solid #fff; }
/*.technologies ul li img {height: 60px;}*/
.technologies ul li p{margin-bottom: 0 !important;}

/*------------ Mobile View Style -----------*/
@media only screen and (min-width: 320px) and (max-width: 767px) {
.technologies ul li {width: 49%;}
.technologies ul li img {width: 60px;}
.technologies ul li{margin:0px;}

.complimentary-features ul li{width: 100%; display: block;}
.complimentary-features ul li .icons{width: 100%; clip-path:none; border-radius: 0px;}
.complimentary-features ul li .content{width:100%; clip-path:none; border-radius: 0px; padding: 15px;}

.travel-app-items .icons {margin-bottom: 0px;}

.tech-stack ul{flex-wrap: wrap;}
.tech-stack ul li{width: 30%; margin: 5px 0; text-align: center;}
}

/*------------ Ipad View Style -----------*/
@media only screen and (min-width: 768px) and (max-width: 899px) {
.complimentary-features ul li{width: 100%;}
.travel-app-items .icons, .travel-app-items1 .icons{margin-bottom: auto;}
}
 .contentall h1 {
            color: #fff!important;
        }
        
        .contentall p {
            color: #fff!important;
        }
        
        .contentall h1,
        .ban_tirt {
            margin-bottom: 20px;
            line-height: 1.3;
            font-weight: 700;
            font-size: 32px;
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
            background: linear-gradient(45deg, #192590, #3f9cf7);
            color: #fff;
            cursor: pointer;
            margin: 10px;
            text-transform: capitalize!important;
            box-shadow: 0px 3px 0px 2px #63acff;
        }
        .contentall a:hover{background: #192590;}
@media (max-width: 1199px){
.contentall h1, .ban_tirt {
    font-size: 23px;
}
}
@media (max-width: 768px) {
    .contentall h1,
            .ban_tirt {
                font-size: 25px;
            }
    }
</style>

<style type="text/css">
  

.testim {
    width: 100%;
    position: relative;
  background: radial-gradient(circle, #089adc 0%, #140050 65%);
    /*top: 50%;
    -webkit-transform: translatey(-50%);
    -moz-transform: translatey(-50%);
    -ms-transform: translatey(-50%);
    -o-transform: translatey(-50%);
    transform: translatey(-50%);*/
}

.testim .wrap {
    position: relative;
    width: 100%;
    max-width: 1020px;
    padding: 40px 20px;
    margin: auto;
}

.testim .arrow {
    display: block;
    position: absolute;
    color: #fff;
    cursor: pointer;
    font-size: 2em;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: all .3s ease-in-out;    
    -ms-transition: all .3s ease-in-out;    
    -moz-transition: all .3s ease-in-out;    
    -o-transition: all .3s ease-in-out;    
    transition: all .3s ease-in-out;
    padding: 5px;
    z-index: 22222222;
}

.testim .arrow:before {
    cursor: pointer;
}

.testim .arrow:hover {
    color: green;
}
    

.testim .arrow.left {
    left: 70px;
}

.testim .arrow.right {
    right: 70px;
}

.testim .dots {
    text-align: center;
    position: absolute;
    width: 100%;
    bottom: 0px;
    left: 0;
    display: block;
    z-index: 3333;
    height: 12px;
}

.testim .dots .dot {
    list-style-type: none;
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 1px solid #fff;
    margin: 0 10px;
    cursor: pointer;
    -webkit-transition: all .5s ease-in-out;    
    -ms-transition: all .5s ease-in-out;    
    -moz-transition: all .5s ease-in-out;    
    -o-transition: all .5s ease-in-out;    
    transition: all .5s ease-in-out;
    position: relative;
}

.testim .dots .dot.active,
.testim .dots .dot:hover {
    background: #fff;
    border-color: #fff;
}

.testim .dots .dot.active {
    -webkit-animation: testim-scale .5s ease-in-out forwards;   
    -moz-animation: testim-scale .5s ease-in-out forwards;   
    -ms-animation: testim-scale .5s ease-in-out forwards;   
    -o-animation: testim-scale .5s ease-in-out forwards;   
    animation: testim-scale .5s ease-in-out forwards;   
}
    
.testim .cont {
    /*position: relative;
    overflow: hidden;*/
}

.testim .cont > div {
    text-align: center;
    position: absolute;
    top: 20px;
    left: 0;
    /*padding: 0 0 70px 0;*/
    opacity: 0;
}
.testim .cont > div i{color: #f6b72f;}

.testim .cont > div.inactive {
    opacity: 0;
}

#testim-dots{display: none;}   

.testim .cont > div.active {
    position: relative;
    opacity: 1;
}
    

.testim .cont div .img img {
    display: block;
    width: 100px;
    height: 100px;
    margin: auto;
    border-radius: 50%;
}

.testim .cont div h2 {
    color: green;
    font-size: 1em;
    margin: 15px 0;
}

.testim .cont div p {
    font-size: 1.15em;
    color: #fff;
    width: 70%;
    margin: auto;
}

.testim .cont div.active .img img {
    -webkit-animation: testim-show .5s ease-in-out forwards;            
    -moz-animation: testim-show .5s ease-in-out forwards;            
    -ms-animation: testim-show .5s ease-in-out forwards;            
    -o-animation: testim-show .5s ease-in-out forwards;            
    animation: testim-show .5s ease-in-out forwards;            
}

.testim .cont div.active h2 {
    -webkit-animation: testim-content-in .4s ease-in-out forwards;    
    -moz-animation: testim-content-in .4s ease-in-out forwards;    
    -ms-animation: testim-content-in .4s ease-in-out forwards;    
    -o-animation: testim-content-in .4s ease-in-out forwards;    
    animation: testim-content-in .4s ease-in-out forwards;    
}

.testim .cont div.active p {
    -webkit-animation: testim-content-in .5s ease-in-out forwards;    
    -moz-animation: testim-content-in .5s ease-in-out forwards;    
    -ms-animation: testim-content-in .5s ease-in-out forwards;    
    -o-animation: testim-content-in .5s ease-in-out forwards;    
    animation: testim-content-in .5s ease-in-out forwards;    
}

.testim .cont div.inactive .img img {
    -webkit-animation: testim-hide .5s ease-in-out forwards;            
    -moz-animation: testim-hide .5s ease-in-out forwards;            
    -ms-animation: testim-hide .5s ease-in-out forwards;            
    -o-animation: testim-hide .5s ease-in-out forwards;            
    animation: testim-hide .5s ease-in-out forwards;            
}

.testim .cont div.inactive h2 {
    -webkit-animation: testim-content-out .4s ease-in-out forwards;        
    -moz-animation: testim-content-out .4s ease-in-out forwards;        
    -ms-animation: testim-content-out .4s ease-in-out forwards;        
    -o-animation: testim-content-out .4s ease-in-out forwards;        
    animation: testim-content-out .4s ease-in-out forwards;        
}

.testim .cont div.inactive p {
    -webkit-animation: testim-content-out .5s ease-in-out forwards;    
    -moz-animation: testim-content-out .5s ease-in-out forwards;    
    -ms-animation: testim-content-out .5s ease-in-out forwards;    
    -o-animation: testim-content-out .5s ease-in-out forwards;    
    animation: testim-content-out .5s ease-in-out forwards;    
}

@-webkit-keyframes testim-scale {
    0% {
        -webkit-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -webkit-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -webkit-box-shadow: 0px 0px 10px 5px #ea830e;        
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        -webkit-box-shadow: 0px 0px 0px 0px #ea830e;        
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@-moz-keyframes testim-scale {
    0% {
        -moz-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -moz-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -moz-box-shadow: 0px 0px 10px 5px #ea830e;        
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        -moz-box-shadow: 0px 0px 0px 0px #ea830e;        
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@-ms-keyframes testim-scale {
    0% {
        -ms-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -ms-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -ms-box-shadow: 0px 0px 10px 5px #ea830e;        
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        -ms-box-shadow: 0px 0px 0px 0px #ea830e;        
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@-o-keyframes testim-scale {
    0% {
        -o-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -o-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -o-box-shadow: 0px 0px 10px 5px #ea830e;        
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        -o-box-shadow: 0px 0px 0px 0px #ea830e;        
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@keyframes testim-scale {
    0% {
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@-webkit-keyframes testim-content-in {
    from {
        opacity: 0;
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -webkit-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@-moz-keyframes testim-content-in {
    from {
        opacity: 0;
        -moz-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -moz-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@-ms-keyframes testim-content-in {
    from {
        opacity: 0;
        -ms-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -ms-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@-o-keyframes testim-content-in {
    from {
        opacity: 0;
        -o-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -o-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@keyframes testim-content-in {
    from {
        opacity: 0;
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        transform: translateY(0);        
    }
}

@-webkit-keyframes testim-content-out {
    from {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        -webkit-transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@-moz-keyframes testim-content-out {
    from {
        opacity: 1;
        -moz-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        -moz-transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@-ms-keyframes testim-content-out {
    from {
        opacity: 1;
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        -ms-transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@-o-keyframes testim-content-out {
    from {
        opacity: 1;
        -o-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@keyframes testim-content-out {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        transform: translateY(-100%);        
    }
}

@-webkit-keyframes testim-show {
    from {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -webkit-transform: scale(1);       
        transform: scale(1);       
    }
}

@-moz-keyframes testim-show {
    from {
        opacity: 0;
        -moz-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -moz-transform: scale(1);       
        transform: scale(1);       
    }
}

@-ms-keyframes testim-show {
    from {
        opacity: 0;
        -ms-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -ms-transform: scale(1);       
        transform: scale(1);       
    }
}

@-o-keyframes testim-show {
    from {
        opacity: 0;
        -o-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -o-transform: scale(1);       
        transform: scale(1);       
    }
}

@keyframes testim-show {
    from {
        opacity: 0;
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        transform: scale(1);       
    }
}

@-webkit-keyframes testim-hide {
    from {
        opacity: 1;
        -webkit-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
    }
}

@-moz-keyframes testim-hide {
    from {
        opacity: 1;
        -moz-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -moz-transform: scale(0);
        transform: scale(0);
    }
}

@-ms-keyframes testim-hide {
    from {
        opacity: 1;
        -ms-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -ms-transform: scale(0);
        transform: scale(0);
    }
}

@-o-keyframes testim-hide {
    from {
        opacity: 1;
        -o-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -o-transform: scale(0);
        transform: scale(0);
    }
}

@keyframes testim-hide {
    from {
        opacity: 1;
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        transform: scale(0);
    }
}

@media all and (max-width: 300px) {
  body {
    font-size: 14px;
  }
}

@media all and (max-width: 500px) {
  .testim .arrow {
    font-size: 1.5em;
  }
  
  .testim .cont div p {
    line-height: 25px;
  }

}
</style>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
 "url": "https://www.blockchainappfactory.com/cryptocurrency-development",
      "logo": "https://www.blockchainappfactory.com/images/logo-green.webp"
    }
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Cryptocurrency Development Company",
  "image": "https://www.blockchainappfactory.com/images/crypto/crypto-development-banner.webp",
  "gtin14": "1845678902080",
  "sku": "BAF-CRY-DEV-COM",
  "description": "Launch your own cryptocurrency with the help of our cryptocurrency development company. We offer a comprehensive range of crypto development services, from whitepaper writing to coin development and marketing. Get started today!",
  "brand": {
        "@type": "Brand",
        "name": "Blockchain App Factory"
      },
  "review": {
        "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          },
          "author": {
            "@type": "Person",
            "name": "David Gardener"
          }
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "5.0",
          "reviewCount": "129"
        }
}
</script>
<body class="header-shadow">
<style type="text/css">
.popup-ul{display:flex;flex-wrap:wrap;padding:0;margin:0;width:100%;border-radius:7px; justify-content: center;}.popup-ul li{width:25%;margin-bottom: 20px;justify-content:center;padding:0px; text-align: center;}.popup-ul li p{color: #fff; margin-bottom: 0;} .popup-ul li img{width:50px;height:50px;border:2px solid #eee;border-radius:50%;background:#fff;padding:5px}.login-popup .box-1 .form .form-control::placeholder{color: #fff;} .login-popup{position:fixed;left:0;top:0;width:100%;height:100%;z-index:1099;background-color:rgba(0,0,0,.8);visibility:hidden;opacity:0;transition:1s}.login-popup.show{visibility:visible;opacity:1}.login-popup .box-1{background-color:#000a30;min-width:870px!important; position:absolute;left:50%;top:55%;transform:translate(-50%,-50%);display:flex;flex-wrap:wrap;opacity:0;margin-left:50px;transition:1s}.login-popup.show .box-1{opacity:1;margin-left:0}.login-popup .box-1 .img-area{flex:0 0 50%;max-width:50%;position:relative;overflow:hidden;padding:50px 30px 0px;align-items:center;justify-content:center}.login-popup .box-1 .img-area h1{font-size:30px}.login-popup .box-1 .img{position:absolute;left:0;top:0;width:100%;height:100%;background: url('images/crypto/crypto-development-banner.webp') top 150px left -50px no-repeat #0195d5;/*animation:7s linear infinite zoomInOut;*/z-index:-1;opacity:.2}@keyframes zoomInOut{0%,100%{transform:scale(1)}50%{transform:scale(1.1)}}.login-popup .box-1 .form{flex:0 0 50%;max-width:50%;padding:20px 30px 20px;/*background-color:#fff*/}.login-popup .box-1 .form h2{color:#fff;font-size:30px;margin:0 0 30px}.login-popup .box-1 .form .form-control{height:40px;margin-bottom:10px;width:100%;border:none; font-size:15px; background: #ffffff36; box-shadow: 0px 0px 7px #0000004a; border-radius: 5px; color: #fff;padding: 10px 15px;}.login-popup .box-1 .form .btn:focus,.login-popup .box-1 .form .form-control:focus{outline:0}.login-popup .box-1 .form label{font-size:15px;color:#555}.login-popup .box-1 .form .btn{width:auto;background-color:#e91e63;height:45px;border:none;border-radius:25px;font-size:15px;text-transform:uppercase;color:#fff;cursor:pointer;line-height:0}.login-popup .box-1 .form .close{position:absolute;right:10px;top:0;font-size:30px;cursor:pointer;width: 30px; height: 30px; opacity: 1; color: #fff; background: #ffffff91; border-radius: 20px; text-align: center;}@media(max-width:767px){.login-popup .box-1{width:calc(100% - 30px); min-width: 90%!important;}.login-popup .box-1 .img-area{display:none}.login-popup .box-1 .form{flex:0 0 100%;max-width:100%}} .social{margin-top: 25px;} .social a{color: #fff;} .social .fa{width: 30px; height: 30px; font-size: 18px; color: #fff;background: #2db942; border-radius: 50%;text-align: center; line-height: 26px; padding: 2px;} .social .fa.fa-envelope{background: #0195d5 !important;}@media screen and (min-width:768px) and (max-width:900px) {.login-popup .box-1{min-width: 90%!important;} .popup-ul li p{font-size: 12px;}}
</style>
<div class="login-popup">
<div class="box-1">
<div class="img"></div>
<div class="img-area">
<h3 class="text-white text-center">Become a Market-Leading Crypto Token Business!</h3>
<br>
<p class="text-white text-center">It takes a lot for a crypto project to succeed in the competitive space. We have been part of the successful journey of these top market-topping token projects:</p>
<ul class="popup-ul">
<li><img src="images/nftm/Amepay.webp"> <p>AME Chain</p></li>
<li><img src="images/nftm/evai.webp"> <p>Evai</p></li>
<li><img src="images/nftm/dash.webp"> <p>Dash</p></li>
<li><img src="images/nftm/gsx.webp"> <p>GSX Coin</p></li>
<li><img src="images/nftm/waifu.webp"> <p>Waifu</p></li>
<li><img src="images/nftm/anyswap.webp"> <p>Anyswap</p></li>
<li><img src="images/nftm/quickswap.webp"> <p>Quickswap</p></li>
<li><img src="images/nftm/dascoin.webp"> <p>Das Coin</p></li>
</ul>
</div>
<div class="form">
<div class="close">×</div>
<h3 class="text-white text-center">Do you want your token project to go to the next level?</h3><br>
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
<textarea placeholder="Message" id="message" name="message" class="form-control" style="height:75px;"></textarea>
</div>
<button type="button" onclick="if (!window.__cfRLUnblockHandlers) return false; return send_mail()" class="btn" data-cf-modified-5e54128c9a97ba44daa3d250->Submit</button>
</form>
<div class="social">

<a rel="nofollow" aria-label="calendly" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><i class="fa fa-calender" aria-hidden="true" title="calendly"></i> Schedule A Meeting  </a>
<a rel="nofollow" href="/cdn-cgi/l/email-protection#432a2d252c03212f2c2028202b222a2d223333252220372c313a6d202c2e" aria-label="Mail"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i> Mail Us </a>
</div>
</div>
</div>
</div>


<div class="main" style="background: linear-gradient(140deg, #00001b 50%, #14219a);">
<div class="flex-reverse">

<div class="banner" style="height: 800px!important;">
<div id="large-header" class="large-header">

</div>
<div class="banner_content">
<div class="container">
<div class="row">
<div class="col-md-5 col-sm-12 col-xs-12 text-left">
<div class="contentall">
<div class="ovr">
<div itemscope itemtype="http://schema.org/CreativeWork">
<div class="ban_tirt">
<span style="font-weight: normal; font-size: 19px;">Create Your New Cryptocurrency with the Best
</span>
<h1 itemprop="name">
Cryptocurrency Development Company</h1> </div>
<p itemprop="text">Propel your project with our expert cryptocurrency development company by crafting tailored tokenomics and amplifying your coin's presence.</p>
<div class="txt">
<a href="https://www.blockchainappfactory.com/create-your-own-token-and-coin" rel="nofollow" class="nec-btn" id="cyz" style="border-radius: 30px !important; text-transform: capitalize !important; margin: 1px!important;">Create your own coin</a>
</div>

</div>
</div>
</div>
</div>
<div class="col-md-7 col-sm-12 col-xs-12 text-center"> <img class="magic" src="images/crypto/banner-img.webp" alt="Crypto Development Company" title="Crypto Development Company">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<style>
.owl-carouselfour img{
    width: 150px!important;
    height: auto;
    margin: 0 auto;
    box-shadow: 0 0 20px 3px #00000026;
    border-radius: 9px;
    padding: 13px;
}
.owl-carouselfour .owl-stage{
    min-height: 200px!important;
    margin: 26px auto!important;
}
.projectFactsWrap{
    display: flex;
  margin-top: 0px;
  flex-direction: row;
  flex-wrap: wrap;
}
#projectFacts .fullWidth{
  padding: 0;
}

.projectFactsWrap .item{
    width: 33.3%;
    height: 100%;
    padding: 18px 0px;
    text-align: center;
}

.projectFactsWrap .item:nth-child(1){
  background: #140050;
}

.projectFactsWrap .item:nth-child(2){
  background: #3a9d64;
}

.projectFactsWrap .item:nth-child(3){
  background: #478f65;
}

.projectFactsWrap .item:nth-child(4){
  background: rgb(23, 44, 66);
}

.projectFactsWrap .item p.number{
  font-size: 40px;
  padding: 0;
  font-weight: bold;
  margin-bottom:2rem;
}

.projectFactsWrap .item p{
  color: rgba(255, 255, 255, 0.8);
  font-size: 18px;
  margin: 0;
  padding: 10px;
  font-family: 'Open Sans';
}


.projectFactsWrap .item span{
  width: 60px;
  background: rgba(255, 255, 255, 0.8);
  height: 2px;
  display: block;
  margin: 0 auto;
}


.projectFactsWrap .item i{
  vertical-align: middle;
  font-size: 50px;
  color: rgba(255, 255, 255, 0.8);
}


.projectFactsWrap .item:hover i, .projectFactsWrap .item:hover p{
  color: white;
}

.projectFactsWrap .item:hover span{
  background: white;
}

@media (max-width: 786px){
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
    margin-bottom:0;
}
#counter-stats .stats:nth-child(1){
    background:#2834a8;
}
#counter-stats .stats:nth-child(2){
    background:#4047df;
}
#counter-stats .stats:nth-child(3){
    background:#2834a8;
}
#counter-stats .stats:nth-child(4){
    background:#4047df;
}


/* AUTHOR LINK */



</style>
<section id="counter-stats" style="padding: 0;" class="wow fadeInRight" data-wow-duration="1.4s">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 stats">
<div class="counting" data-count="900000">10+ Years</div>
<p class="mt10">Experience in Blockchain</p>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 stats">
<div class="counting" data-count="280">500+</div>
<p class="mt10">Employees</p>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 stats">
<div class="counting" data-count="75">400+</div>
<p class="mt10">Projects</p>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 stats">
<div class="counting" data-count="999">150+</div>
<p class="mt10">Blockchain Experts</p>
</div>
</div>
</div>
</section>
<style type="text/css">
.client-list{display: flex; flex-wrap: wrap; width: 100%; padding: 0; margin: 0; justify-content: center; align-items: center;}
.client-list li{width: 10%; margin: 25px 1%; padding: 0 10px;}
.client-list li img{filter: grayscale(1);}    
@media (min-width: 320px) and (max-width: 768px) {
    .client-list li{width: 31%;margin: 15px 1%;}
}
</style>
<section style="padding:0; background:#bfddff;">
<ul class="client-list">
<li><img class="lazy" data-src="images/nftm/polygon.webp" alt title width="100%" height="100%"></li>
<li><img class="lazy" data-src="images/nftm/shell.webp" alt title width="100%" height="100%"></li>
<li><img class="lazy" data-src="images/nftm/radioshack.webp" alt title width="100%" height="100%"></li>
<li><img class="lazy" data-src="images/nftm/mcdonald.webp" alt title width="100%" height="100%"></li>
<li><img class="lazy" data-src="images/nftm/econet.webp" alt title width="100%" height="100%"></li>
<li><img class="lazy" data-src="images/nftm/li-fung.webp" alt title width="100%" height="100%"></li>
<li><img class="lazy" data-src="images/nftm/globant.webp" alt title width="100%" height="100%"></li>
<li><img class="lazy" data-src="images/nftm/brevan-howard.webp" alt title width="100%" height="100%"></li>
</ul>
</section>
<div class="p-60">
<div class="container">
<div class="main-sections row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<div class="section-header underline">
<h2 class="common_h2">Crypto Development Services from Blockchain App Factory</h2>
</div>
<div class="subsection-title">
<p class="text-center">Our crypto development services provide various solutions which includes custom coin creation, ICO/STO development, and exchange development. To enhance a secured transaction we use cutting-edge blockchain technology and advanced encryption techniques. We also offer utility coins, a form of cryptocurrency, enabling users to acquire future products or services, often at discounted rates, with funds raised through ICOs. On the other hand, Security/Equity/Asset-backed Cryptocurrency signifies ownership of assets, such as stocks or debt. We completely shield your project with transparency, security and unique needs in your crypto space.</p>
</div>
<div class="contentall" align="center" style="padding-top: 0;">

<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
<span>Schedule A Meeting</span></a>
<a href="#newsletter-form-sec" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">Connect With Our Experts</a>
</div>

</div>
</div>
</div>
</div>
<section class="complimentary-features" style="padding: 60px 0px; background:#f5f5f9;">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
<div class="section-title">
<h2 class="title"><strong>What Our Cryptocurrency Development Services Cover</strong></h2>
<hr/>
<p>With our wide range of tech stack and a perfect crypto market analysis, we provide the ultimate cryptocurrency development services to boost your business.</p>
</div>
</div>
<div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
<ul>
<li>
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/consulting.webp" /></div>
<div class="content">
<h3>Crypto Consulting Services</h3>
<p>Our crypto consulting team offers vital insights about your new project. We aid in framing your business using any model like exchanges, wallets, coins, and initial cryptocurrency offerings.</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/crypto.webp" /></div>
<div class="content">
<h3>Crypto Coin Development</h3>
<p>Our cryptocurrency development services enable you to launch coins on the desired blockchain(s) with numerous utilities that can aid in building a solid community based on a crypto-based platform.</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/tokens.webp" /></div>
<div class="content">
<h3>Crypto Development</h3>
<p>
We create crypto coins representing various kinds of assets, equity shares, and fiat currencies that can be used in various crypto and Web3 business models to garner the wider community’s attention.
</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/listing.webp" /></div>
<div class="content">
<h3>Crypto Listing Services</h3>
<p>Our expert crypto listing services allow your cryptocurrency coins to get listed on prominent crypto exchange platforms, making your novel coins accessible to crypto enthusiasts worldwide.</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/crypto-wallet.webp" /></div>
<div class="content">
<h3>Crypto Wallet Development</h3>
<p>
Cryptocurrency wallets built by our professional team can complement your crypto project well by helping your users hold and transact cryptos securely and seamlessly, alongside several novel features.
</p>
</div>
</li>
<li>
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/exchange.webp" /></div>
<div class="content">
<h3>Crypto Exchange Development</h3>
<p>
Our professionals excel in launching cryptocurrency exchanges that can let your users trade numerous cryptocurrencies (including yours) to gain immense benefits that serve as a steady revenue source.
</p>
</div>
</li>
</ul>
</div>
<hr>
<div class="clearfix"></div>
</div>
</div>
</section>
<div class="about-one section-padding" style="padding:60px 0px; background: linear-gradient(140deg, #010317, #1b2372, #0c58ff);">
<div class="container">
<div class="row">
<div class="col-md-5 col-sm-12 col-xs-12">
<div itemscope itemtype="http://schema.org/CreativeWork">
<div class="section-title text-left">
<h3 itemprop="name" class="text-white">Prolific Cryptocurrency Development Solutions Our Team Crafts</h3>
<hr>
<p itemprop="text" class="para text-white">As an esteemed provider of powerful cryptocurrency development solutions, we provide a plethora of crypto development services built by a seasoned team of developers. Our solutions are empowered by carefully written programs that activate novel features.<br><br>
We focus on relying on the latest technological norms to create enterprise-grade solutions that cater to the wider market. Our specialized set of services provides you with functional business solutions.
</p>
</div>
</div>
</div>

<div class="col-md-7 col-sm-12 col-xs-12">
<div class="sub_ff">
<p><i class="fa fa-check" aria-hidden="true"></i> <strong class="dev">Asset Tokenization</strong> Our crypto development team offers effective asset tokenization and management services that you can utilize to tokenize your valuable assets with high security, utility, and scalability.</p>
<p><i class="fa fa-check" aria-hidden="true"></i> <strong class="dev">Sidechain Development</strong> We create sidechains upon established networks for crypto businesses to power projects and process coin transactions at increased speeds while ensuring top-notch safety and lower gas fees.</p>
<p><i class="fa fa-check" aria-hidden="true"></i> <strong class="dev">Micropayment Solutions</strong> Micropayment solutions we build for cryptocurrency projects facilitate seamless processes for everyday crypto transactions that play a significant role in making the world crypto-friendly.</p>
<p><i class="fa fa-check" aria-hidden="true"></i> <strong class="dev">Advanced Algorithms</strong> We tap into sophisticated algorithms to develop cryptocurrency coins that fill them with superlative features and safety, allowing them to reach the global crypto enthusiast community.</p>
</div>
</div>

</div>

<div class="contentall" align="center" style="padding-top: 0;">

<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
<span>Schedule A Meeting</span></a>
<a href="#newsletter-form-sec" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">Connect With Our Experts</a>
</div>
</div>

</div>
<style type="text/css">
    /*equalize start*/
.container-center {display: flex; flex-wrap: wrap; position: relative; z-index: 1; justify-content: center; }
.equalize {display: flex;}
/*equalize end */

</style>
<section class="travel-app" style="background: #f7faff;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="section-title text-center">
<h3> <strong> Special Features Our Cryptocurrency Coin Development Services Include for Projects </strong></h3>
<hr>
<p>We stand as the best company for developing cryptocurrencies around the globe, utilize our cryptocurrency coin development services and offer cutting-edge features with customizable solutions for every project.</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="travel-app-items">
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/security.webp"></div>
<p><strong>Multi-Factor Security</strong>We offer multi-faceted security solutions for our client crypto projects both from the user-end and back-end, enabling them to offer safe environments for users.</p>
</div>
<div class="travel-app-items">
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/trading.webp"></div>
<p><strong>Smart Contract Trading</strong>Our experienced team excels in creating smart contract programs that enable decentralized cryptocurrency trading operations smoothly at incredibly low prices.</p>
</div>
<div class="travel-app-items">
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/payment-method.webp"></div>
<p><strong>Safe Payment Integrations</strong>Payment solutions we integrate into your cryptocurrency software come with high levels of security that ensure security for crypto transactions of multiple types.</p>
</div>
<div class="travel-app-items">
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/liquidity.webp"></div>
<p><strong>Crypto Liquidity Provisions</strong>We provide extensive provisions for your project to have sufficient crypto liquidity at all times, ensuring your venture gains high levels of user satisfaction.</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="travel-app-items">
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/global.webp"></div>
<p><strong>Multi-Lingual Support</strong>Our experts build applications with support for prominent global languages, allowing people across the globe to access your cryptocurrency application easily.</p>
</div>
<div class="travel-app-items">
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/kyc.webp"></div>
<p><strong>User Verification Features</strong>We integrate verification elements like Know-Your-Customer (KYC) and Anti-Money Laundering (AML) to preserve your cryptocurrency venture’s overall integrity.</p>
</div>
<div class="travel-app-items">
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/support.webp"></div>
<p><strong>Multi-Currency Support</strong>Cryptocurrency platforms we develop offer support to multiple prominent cryptocurrencies, enabling your business to garner the wider community’s attention.</p>
</div>
<div class="travel-app-items">
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/payment-gateways.webp"></div>
<p><strong>Crypto and Fiat Gateways</strong>The crypto development platforms we build come with crypto and fiat currency payment gateways that can empower ventures, ensuring users can trade cryptos easily.</p>
</div>
</div>
<div class="col-lg-offset-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="travel-app-items">
<div class="icons"><img class="lazy" data-src="images/cryptocurrency-development/icons/benefits.svg"></div>
<p><strong>Zero Intermediaries</strong>The crypto projects we create come with zero intermediary steps while letting you gain substantial benefits, satisfying the requirements of everyone involved.</p>
</div>
</div>
</div>
</div>
</section>





<div class="technologies">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h3 class="sec_tit underline text-center text-white">Get Your Cryto Coin Development Like the Popular Ones in the Market</h3>
<p class="text-center white">As cryptocurrencies attain new levels of popularity among the masses, creating your own crypto for business purposes might be a no-brainer. Attain humongous reception among the masses by developing your own cryptocurrency that taps into the mechanisms and working models of popular projects.</p>
<ul>
<li>
<img class="lazy" data-src="images/nftm/icons/Bitcoinist.webp" style="width: 60px;">
<p class="white">Bitcoin ($BTC)</p>
</li>
<li>
<img class="lazy" data-src="images/nftm/icons/ethereum.webp" style="width: 60px;">
<p class="white">Ethereum ($ETH)</p>
</li>
<li>
<img class="lazy" data-src="images/nftm/icons/Tether.webp">
<p class="white">Tether USDt ($USDT)</p>
</li>
<li>
<img class="lazy" data-src="images/nftm/icons/solana.webp" style="width: 60px;">
<p class="white">Solana ($SOL)</p>
</li>
<li>
<img class="lazy" data-src="images/nftm/icons/bnb.webp" style="width: 60px;">
<p class="white">BNB ($BNB)</p>
</li>
<li>
<img class="lazy" data-src="images/nftm/icons/xrp.webp">
<p class="white">XRP ($XRP)</p>
</li>
</ul>
<div class="clearfix"></div>

</div>
</div>
</div>
<style>
    .main-timeline7 .timeline7{
    padding: 0 5px;
    position: relative;
}
.main-timeline7 .timeline7-icon{
    display: block;
    text-align: center;
    padding: 20px 0 55px 0;
    z-index: 1;
    position: relative;
}
.main-timeline7 .timeline7:nth-child(2n) .timeline7-icon{
    padding: 55px 0 20px 0;
}
.main-timeline7 .timeline7-icon:before{
    content: "";
    width: 1px;
    height: 75%;
    background: #140050;
    margin: 0 auto;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.main-timeline7 .timeline7:nth-child(2n) .timeline7-icon:before{
    bottom: auto;
    top: 0;
}
.main-timeline7 .timeline7:hover .timeline7-icon:before{
    background: #555;
}
.main-timeline7 .timeline7-icon i{
    width: 45px;
    height: 45px;
    line-height:45px;
    border-radius: 50%;
    background: #140050;
    font-size: 14px;
    color: #fff;
    transition: all 0.3s ease 0s;
}
.main-timeline7 .timeline7:hover .timeline7-icon i{
    background: #555;
    animation: icon-load 2.5s ease 0s infinite;
}
.main-timeline7 .border{
    height: 15px;
    background: #140050;
/*    margin-bottom: 20px;*/
    transition: all 0.3s ease 0s;
}
.main-timeline7 .timeline7:hover .border{
    background: #555;
}
.main-timeline7 .timeline7:first-child .border{
    border-radius: 4px 0 0 4px;
}
.main-timeline7 .timeline7:last-child .border{
    border-radius: 0 4px 4px 0;
}
.main-timeline7 .timeline7:nth-child(2n) .border{
/*    margin: 18px 0 0 0;*/
}
.main-timeline7 .timeline7-content{
    padding: 15px;
    border: 1px solid #ddd;
    background: #fff;
    border-radius: 3px;
    transition: all 0.3s ease 0s;
}
.main-timeline7 .timeline7:hover .timeline-content{
    background: #555;
}
.main-timeline7 .title{
    font-size: 18px;
    font-weight: 700;
    color: #140050;
    text-transform: capitalize;
    margin: 0 0 10px 0;
    transition: all 0.3s ease 0s;
}
.main-timeline7 .timeline7:hover .title{
    color: #fff;
}
.timeline7-content .description{
    font-size: 14px;
    color: #888;
    margin: 0;
    transition: all 0.3s ease 0s;
}
.main-timeline7 .timeline7:hover .description{
    color: #fff;
}
@keyframes icon-load{
    0%{ transform: rotate(-12deg); }
    8%{ transform: rotate(12deg); }
    10%{ transform: rotate(24deg); }
    18%,20%{ transform: rotate(-24deg); }
    28%,30%{ transform: rotate(24deg); }
    38%,40%{ transform: rotate(-24deg); }
    48%,50%{ transform: rotate(24deg); }
    58%,60%{ transform: rotate(-24deg); }
    68%{ transform: rotate(24deg); }
    100%,75%{ transform: rotate(0deg); }
}
@media only screen and (max-width: 990px){
    .main-timeline7 .timeline7{
        margin-bottom: 20px;
    }
}
@media only screen and (max-width: 767px){
    .main-timeline7 .timeline7-icon{
        padding-top: 0;
    }
    .main-timeline7 .timeline7:nth-child(2n) .timeline7-icon{
        padding-bottom: 0;
    }
    .main-timeline7 .border{
        margin-bottom: 10px;
    }
    .main-timeline7 .timeline7:nth-child(2n) .border{
        margin: 10px 0 0 0;
    }
    .main-timeline7 .timeline7-content{
        text-align: center;
    }
}
</style>
<section class="travel-app gray_bg">
<div class="container">
<div class="section-title text-center ">
<h3 class="common_h3">How Does Our Cryptocurrency Coin Development Company Create Your Project?</h3>
<hr>
<p class="text-center">
As a cryptocurrency coin development company we have blockchain experts and market research analysts who will help you to achieve your ideal revenue goal.
</p><br>
</div>
<div class="row">
<div class="col-md-12">
<div class="main-timeline7">
<div class="col-md-2 col-sm-4 timeline7">
<span class="timeline7-icon">
<i class="fa fa"> <time>01</time></i>
</span>
<div class="border"></div>
<div class="timeline7-content">
<h4>Business Planning</h4>
<p>To begin with, we garner your requirements and conduct market research to come up with the perfect business model.</p>
</div>
</div>
<div class="col-md-2 col-sm-4 timeline7">
<div class="timeline7-content">
<h4>Whitepaper Drafting</h4>
<p>We create the official whitepaper representing all your project’s specifics that could attract prospective investors.</p>
</div>
<div class="border"></div>
<span class="timeline7-icon">
<i class="fa fa"> <time>02</time></i>
</span>
</div>
<div class="col-md-2 col-sm-4 timeline7">
<span class="timeline7-icon">
<i class="fa fa"><time>03</time></i>
</span>
<div class="border"></div>
<div class="timeline7-content">
<h4>Technical Design</h4>
<p>Our experts design various elements of the project, like wallets, nodes, and setup explorers, that make it functional.</p>
</div>
</div>
<div class="col-md-2 col-sm-4 timeline7">
<div class="timeline7-content">
<h4>Technical Development</h4>
<p>Now, we build the project’s smart contracts and algorithms, hash values, technical packages, and wallet provisions.</p>
</div>
<div class="border"></div>
<span class="timeline7-icon">
<i class="fa fa"><time>04</time></i>
</span>
</div>
<div class="col-md-2 col-sm-4 timeline7">
<span class="timeline7-icon">
<i class="fa fa"> <time>05</time></i>
</span>
<div class="border"></div>
<div class="timeline7-content">
<h4>Testing</h4>
<p>We test the project’s app meticulously to detect and troubleshoot possible defects using manual and automated test cases.</p>
</div>
</div>
<div class="col-md-2 col-sm-4 timeline7">
<div class="timeline7-content">
<h4>Launching</h4>
<p>Finally, we launch your cryptocurrency project and maintain it periodically to ensure optimal performance at all times.</p>
</div>
<div class="border"></div>
<span class="timeline7-icon">
<i class="fa fa"><time>06</time></i>
</span>
</div>
</div>
</div>
</div>
<div class="clearfix"><br><br></div>
<div class="contentall" align="center" style="padding-top: 0;">

<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
<span>Schedule A Meeting</span></a>
<a href="#newsletter-form-sec" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">Connect With Our Experts</a>
</div>
</div>
</section>

<style type="text/css">
/*-- Client section --*/
.category-grid-style-01 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
 /*   background: #fff;
    -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
    box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);*/
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
.category-grid-style-01 .category-item:hover:before {
    -webkit-box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
    box-shadow: 5px 5px 24px 0 rgb(2 45 98 / 10%);
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
    transition: all .3s ease-in-out;
}
.teck .category-grid-style-01 .category-item{padding: 10px !important;}
.category-item.aos-item .text-center{font-size: 12px !important; margin-bottom: 0px !important;} 
.teck .category-grid-style-01 .category-item .category-icon{margin-bottom: 0 !important;}
.teck .category-icon img{height: 80px !important;}
 .category-item.aos-item:hover .text-center{position: relative; z-index: 99; color: #000 !important;}
/*-- Client section --*/
</style>
<style>
     .featured-icon-box.style3 .featured-desc:after {
            position: absolute;
            content: '';
            width: 0;
            height: 0;
            border-bottom: 34px solid #140050;
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
            background-color: #140050;
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
    border-left: 2px solid #140050;
    transition: .1s all ease;
}

.featured-icon-box.style3 {
    position: relative;
    margin: 15px 0;
    background-color: #f4f4f4;
}
</style>
<section class="common_spacing ">
<div class="container">
<div class="row">
<h3 class="sec_tit underline text-center">Crypto Projects Empowered With Our Coin Development Services</h3>
</div>
<p class="text-center" style="color: #000;">Our cutting-edge coin development services have consistently delivered outstanding results, enabling our clients to make a significant impact. From the initial concept to the final execution, we work closely with our clients, ensuring a seamless and rewarding experience throughout their crypto venture. We have collaborated with a diverse range of clients, each with their unique goals and aspirations. We celebrate the stories of our clients, sharing their experiences and the impact our collaborative efforts have had on their ventures.</p>
<div class="row mt40">
<div class="container container-center">
<div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
<div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
<div class="featured-icon">
<div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg"> <i class="flaticon flaticon-air-freight">
<img class="img-fuild lazy" style="width: 80px !important; height:80px !important;" data-src="images/nftm/Amepay.webp" alt>
</i> </div>
</div>
<div class="featured-content">
<div class="featured-desc">We’ve developed this successful Ethereum blockchain-based coin, Amepay. </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
<div class="featured-icon-box  text-left style3">
<div class="featured-icon">
<div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg"> <i class="flaticon flaticon-air-freight">
<img class="img-fuild lazy" style="width: 80px !important; height:80px !important;" data-src="images/nftm/evai.webp" alt>
</i> </div>
</div>
<div class="featured-content">
<div class="featured-desc">Evai is an unbiased crypto asset rating platform that aids crypto enthusiasts.</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
<div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
<div class="featured-icon">
<div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg"> <i class="flaticon flaticon-air-freight">
<img class="img-fuild lazy" style="width: 80px !important; height:80px !important;" data-src="images/nftm/dash.webp" alt>
</i> </div>
</div>
<div class="featured-content">

<div class="featured-desc"> Dash is an altcoin forked from the Bitcoin protocol, and it is also DAO-enabled.</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
<div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
<div class="featured-icon">
<div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg"> <i class="flaticon flaticon-air-freight">
<img class="img-fuild lazy" style="width: 80px !important; height:80px !important;" data-src="images/nftm/gsx.webp" alt>
</i> </div>
</div>
<div class="featured-content">
<div class="featured-desc">GSX Coin is the Apollo Fintech Organization’s Gold Secured Currency.</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
<div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
<div class="featured-icon">
<div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg"> <i class="flaticon flaticon-air-freight">
<img class="img-fuild lazy" style="width: 80px !important; height:80px !important;" data-src="images/nftm/waifu.webp" alt>
</i> </div>
</div>
<div class="featured-content">
<div class="featured-desc">Waifu coins represent digital anime female creatures & captivate their audience.</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
<div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
<div class="featured-icon">
<div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg"> <i class="flaticon flaticon-air-freight">
<img class="img-fuild lazy" style="width: 80px !important; height:80px !important;" data-src="images/nftm/anyswap.webp" alt>
</i> </div>
</div>
<div class="featured-content">
<div class="featured-desc">A decentralized multichain-compatible crypto exchange platform.</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
<div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
<div class="featured-icon">
<div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg"> <i class="flaticon flaticon-air-freight">
<img class="img-fuild lazy" style="width: 80px !important; height:80px !important;" data-src="images/nftm/quickswap.webp" alt>
</i> </div>
</div>
<div class="featured-content">
<div class="featured-desc">An Ethereum-based DEX with Automated Market Maker (AMM).</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 m-auto equalize">
<div class="cmt-bgcolor-white featured-icon-box icon-align-top-content text-left style3">
<div class="featured-icon">
<div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg"> <i class="flaticon flaticon-air-freight">
<img class="img-fuild lazy" style="width: 80px !important; height:80px !important;" data-src="images/nftm/dascoin.webp" alt>
</i> </div>
</div>
<div class="featured-content">
<div class="featured-desc">Our experts have successfully delivered the crypto, DasCoin.</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="gray_bg pad">
<div class="container">
<div class="row">
<div class="col-md-12 section-header text-center">
<h3 class="section-title underline common_h2">Utilize Our Premium Crypto Software Development Approach</h3>
<p class="section-subtitle">Here, our team has perfectly outlined and tested various models to conduct a successful crypto software development service.</p>
</div> 
</div>
<div class="row">
<div class="col-md-12">
<div class="main-timeline">
<div class="timeline">
<div class="timeline-content">
<div class="timeline-icon"><span>1</span></div>
<h4 class="title">Ideation & Whitepaper Creation</h4>
<p class="description">
We brainstorm with our blockchain experts to determine the best achievable vision to present in the whitepaper.
</p>
</div>
</div>
<div class="timeline">
<div class="timeline-content">
<div class="timeline-icon"><span>2</span></div>
<h4 class="title">ICO Marketing & Dashboard Setup</h4>
<p class="description">
Ramping up community support through Telegram, Reddit, Steemit, Twitter and Facebook. Investor dashboard setup.
</p>
</div>
</div>
<div class="timeline">
<div class="timeline-content">
<div class="timeline-icon"><span>3</span></div>
<h4 class="title">Initial Coin Offering Open To All</h4>
<p class="description">
Open up the Pre-ICO and ICO in timed countdown intervals so that they commit investment amount that you determine and are allowed to buy your coin as you determine the price.
</p>
</div>
</div>
<div class="timeline">
<div class="timeline-content">
<div class="timeline-icon"><span>4</span></div>
<h4 class="title">Wallet Setup & Coin Drop</h4>
<p class="description">
Drop the allotted, bought amount of coins to your investors’ whitelabeled web and mobile wallets.
</p>
</div>
</div>
</div>
</div>
</div>
<div class="contentall" align="center" style="padding-top: 0;">

<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
<span>Schedule A Meeting</span></a>
<a href="#newsletter-form-sec" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">Connect With Our Experts</a>
</div>
</div>
</section>
<style type="text/css">
/*--     .category-grid-style-01 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            background: #ffffff;
            -webkit-box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
            box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
            border-radius: 5px;
            justify-content: center;
        }
        
        .teck .category-grid-style-01 .category-item {
            padding: 30px;
            text-align: center;
            width: 16.6666%;
            border-right: 1px solid #eeeeee;
            border-bottom: 1px solid #eeeeee;
            position: relative;
            cursor: pointer;
        }
        
        .teck .category-grid-style-01 .category-item:before {
            content: "";
            background: #ffffff;
            width: 110%;
            height: 110%;
            display: inline-block;
            position: absolute;
            left: -5%;
            top: -5%;
            z-index: 1;
            opacity: 0;
            -webkit-transform: scale(0.96);
            transform: scale(0.96);
            transition: all 0.3s ease-in-out;
        }
        
        .teck .category-grid-style-01 .category-item .category-icon {
            color: #333333;
            font-size: 44px;
            line-height: 1;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }
        
        .teck .category-grid-style-01 .category-item .category-title {
            color: #022d62;
            font-weight: bold;
            margin-bottom: 0;
            position: relative;
            z-index: 2;
            font-size: 16px;
        }
        
        .category-grid-style-01 .category-item:hover:before {
            -webkit-box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
            box-shadow: 5px 5px 24px 0px rgb(2 45 98 / 10%);
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
            transition: all 0.3s ease-in-out;
        }
        
        .text-white {
            color: #fff;
        }

@media only screen and (min-width: 320px) and (max-width: 767px) {
        .teck .category-grid-style-01 .category-item{width: 33%;}
    } --*/

        .teck .category-icon img {
            height: 60px !important;
            margin-bottom: 5px;
            border-radius: 10px;
        }
        .tech-padding {
            padding-bottom: 100px;
        }
        
        .space-pt {
            padding: 60px 0 0;
        }
        
        .tech-padding:before {
            height: 470px !important;
        }

        .bg-dark-half-md {
            position: relative;
        }
        
        .bg-dark-half-md:before {
            content: "";
            background: #fff;
            width: 100%;
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
        </style>
<style type="text/css"> .category-item.aos-item:hover .text-center{position: relative; z-index: 99; color: #000 !important;}
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
.teck .category-grid-style-01 .category-item{padding: 10px !important;}
.category-item.aos-item .text-center{font-size: 12px !important; margin-bottom: 0px !important;} 
.teck .category-grid-style-01 .category-item .category-icon{margin-bottom: 0 !important;}
.teck .category-icon img{height: 60px !important; margin-bottom: 5px; border-radius: 10px;}
 .category-item.aos-item:hover .text-center{position: relative; z-index: 99; color: #000 !important;}
/*-- Client section --*/
    @media only screen and (min-width: 320px) and (max-width: 767px) {
           
            .teck .category-grid-style-01 .category-item {width: 46%!important;}
        }

</style>
<section class="space-pt bg-dark-half-md tech-padding teck">
<div class="container">
<div class="row justify-content-md-center text-center">
<div class="section-title text-center ">
<h3 class="common_h3 ">Our Highly Secured Cryptocurrency Website Development Platforms</h3>
<hr>
<p class="section-subtitle ">We have a perfect solution for developing major crypto replicas of the following cryptocurrency with customizable solutions. </p>
</div>
</div>




<div class="row mt20">
<div class="col-sm-12">
<div class="category category-grid-style-01 aos-item aos-init" data-aos="fade-up" data-aos-duration="500">
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/1.webp" alt="Bitcoin"> </div> <a href="#" class="category-title" alt>Bitcoin</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/2.webp" alt="Litecoin"> </div> <a href="#" class="category-title" alt>Litecoin</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/6.webp" alt="Ripple"> </div> <a href="#" class="category-title" alt>Ripple</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/tether.webp" alt="Tether"> </div> <a href="#" class="category-title" alt>Tether</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/cardano.webp" alt="Cardano"> </div> <a href="#" class="category-title" alt>Cardano</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/bitcash.webp" alt="Bitcoin Cash"> </div> <a href="#" class="category-title" alt>Bitcoin Cash</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/chainlink.webp" alt="Chainlink"> </div> <a href="#" class="category-title" alt>Chainlink</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/binance-coin.webp" alt="Binance Coin"> </div> <a href="#" class="category-title" alt>Binance Coin</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/steller.webp" alt="Stellar"> </div> <a href="#" class="category-title" alt>Stellar </a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/coin.webp" alt="USD Coin"> </div> <a href="#" class="category-title" alt>USD Coin</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/coinsv.webp" alt="Bitcoin SV"> </div> <a href="#" class="category-title" alt>Bitcoin SV</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/eos.webp" alt="EOS"> </div> <a href="#" class="category-title" alt>EOS</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/mono.webp" alt="Monero"> </div> <a href="#" class="category-title" alt>Monero</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/tron.webp" alt="TRON"> </div> <a href="#" class="category-title" alt>TRON</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/nem.webp" alt="NEM"> </div> <a href="#" class="category-title" alt>NEM</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/tezo.webp" alt="Tezos"> </div> <a href="#" class="category-title" alt>Tezos</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/cry.webp" alt="Crypto.com Coin"> </div> <a href="#" class="category-title" alt>Crypto.com Coin</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/vechain.webp" alt="VeChain"> </div> <a href="#" class="category-title" alt>VeChain</a> </div>
<div class="category-item aos-item" style="border-left: 1px solid #eeeeee;">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/unis.webp" alt="Uniswap"> </div> <a href="#" class="category-title" alt>Uniswap</a> </div>
<div class="category-item aos-item">
<div class="category-icon"> <img class="img-fuild lazy" width="auto" height="40px" data-src="images/logos/aave.webp" alt="Aave"> </div> <a href="#" class="category-title" alt>Aave</a> </div>
</div>
<br><br>
</div>
</div>
</div>
</section>
<style type="text/css">
    .crypto{
        font-size: 18px; 
        font-weight: 900; 
        color: #00000a;
    }
    .currency{
        margin-top: 20px !important;
    }
</style>
<div class="common_spacing gray_bg">
<div class="container">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero">
<div class="section-title">
<h3 class="common_h3 text-left">Why Choosing an Altcoin Development is a Better Choice For Your Business?</h3>
<hr style="margin-left: 0;">
</div>
<p>In these times, where traditional financial institutions tend to present concerns of over-centralization, cryptocurrencies, and altcoins can eliminate such problems using blockchain technology. Crypto development can be crucial for people to manage their holdings digitally that are mostly not subject to real-world events.<br><br>
From a business perspective, creating altcoins can be ideal for offering exclusive services and creating a complete environment for individual businesses. Altcoins independent of the Bitcoin blockchain can help ventures to function efficiently and remain environment-friendly by choosing Proof-of-Stake (PoS) networks. With crypto adoption increasing globally, developing crypto coins can bring you success in the long term.
</p>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<img class="img-responsive" src="images/bit coin.webp" alt="Coin Development Company" title="Coin Development Company">
</div>
</div>
<div class="contentall" align="center" style="padding-top: 0;">

<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
<span>Schedule A Meeting</span></a>
<a href="#newsletter-form-sec" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">Connect With Our Experts</a>
</div>
</div>
<section id="testim" class="testim" style="padding:30px 0px 60px 0px;">
<div class="testim-cover">
<div class="wrap">
<div class="section-title text-center">
<p style="font-size: 22px; font-style: italic; color: #fff; padding: 0; margin: 0;"> What Our</p>
<h3 class="text-white"> Clients Want To Say</h3> <p style="font-style: italic; color: #fff;"> About Us</p>
<hr class="mb40">
</div>
<div id="testim-content" class="testimonial cont">
<div class="active">

<p style="font-style: italic;">"I have a great experience working with Blockchain App Factory, they have extended their boundary to fetch my desired solution. Their crypto coin development services are delivered with unbeatable quality."</p><br>
<h4 style="color: #fff; font-size: 26px;">Alyssa Miller</h4>
<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</div>
<div>
<p style="font-style: italic;">"Their client-friendly team has provided exceptional crypto consulting services, promptly resolving any unforeseen issues that arose during the process."</p><br>
<h4 style="color: #fff; font-size: 26px;">Matthew Phillips</h4>
<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</div>
<div>
<p style="font-style: italic;">"A team of seasoned blockchain professionals has crafted my crypto wallet, employing highly secure crypto codes to realize my envisioned product."</p><br>
<h4 style="color: #fff; font-size: 26px;">Jayden Collins</h4>
<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</div>
</div>
<span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
<span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
<ul id="testim-dots" class="dots">
<li class="dot active"></li>
<li class="dot"></li>
<li class="dot"></li>
</ul>
</div>
</div>
</section>

<div class="container common_spacing">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<div class="section-header underline">
<h4 class="common_h3">We have Partnered with Popular Companies</h4>
</div>

<div class="row">
<div class="owl-carousel client-carousel">
<div class="client-box text-center">
<img src="images/clients/Shell-Corporation.webp" alt="Client 1" title>
</div>
<div class="client-box text-center">
<img src="images/clients/Mcdonalds.webp" alt="Client 1" title>
</div>
<div class="client-box text-center">
<img src="images/clients/ethirium-gold.webp" alt="Client 1" title>
</div>
<div class="client-box text-center">
<img src="images/clients/campuscoin.webp" alt="Client 1" title>
</div>
<div class="client-box text-center">
<img src="images/clients/dashcoin.webp" alt="Client 1" title>
</div>
<div class="client-box text-center">
<img src="images/clients/dascoin.webp" alt="Client 1" title>
</div>
</div> 
</div> 
</div>
</div>
<style type="text/css">
            .crypto_1{
                font-size: 17px; 
                font-weight: 900; 
                color: #333;
                margin: 20px 0px!important;
            }
        </style>
<div class="What-one common_spacing" style="background:#140050;">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<div class="section-title text-center">
<h3 class="text-white">What can we do for you in terms of Crypto Coin Development?</h3>
<hr class="mb40">
<p class="text-white">As an experienced crypto coin development company, we can offer you unparalleled services in creating your crypto coins. Our ability to use advanced tech stacks, including numerous blockchain networks, allows us to develop cryptocurrencies that can function seamlessly for any business model.<br><br>
Our team excels in executing all steps in the SDLC (Software Development Life Cycle) without flaws. You can have the luxury of seasoned experts in ideation, design, development, testing, and promotions working on your cryptocurrency project. Additionally, we provide swift support services at all times to assist you with any issues that arise post-deployment.
</p>
<div class="contentall" align="center" style="padding-top: 0px;">
<a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" style="border-radius: 30px !important;">
<span>Schedule A Meeting</span></a>
<a href="#newsletter-form-sec" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">Connect With Our Experts</a>
</div>
</div>
</div>

</div>

</div>

</div>
<style type="text/css">
          .crypto_3{
            color: #333;
            font-weight: 900 !important;
          }
        </style>
<section class="tech-stack" style="background: #f4f4f4; padding-top: 60px;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="section-title text-center">
<h3 class=" "> <strong>New-Age Tech Stacks Our Cryptocurrency Software Development Team Uses</strong> </h3>
<hr>
<p>Tapping into new-age technological stacks makes our cryptocurrency software development team one of the best globally. By adopting the latest tech advancements, we aim to launch cryptocurrency projects that serve the world for a long time.</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<h4>Blockchain Networks</h4>
<ul>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/ethereum.webp" alt="Ethereum"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/polygon.webp" alt="Polygon"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/bnb-chain.webp" alt="BNB Chain"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/solana-1.webp" alt="Solana"></li>
</ul>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<h4>Front-end Frameworks</h4>
<ul>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/react.webp" alt="React"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/angular.webp" alt="Angular"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/vue.png" alt="Vue JS"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/js.png" alt="Vanilla JS"></li>
</ul>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<h4>Programming Languages</h4>
<ul>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/go-lang.webp" alt="Golang"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/laravel.webp" alt="Laravel"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/php.webp" alt="PHP"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/python.webp" alt="Python"></li>
</ul>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<h4>Storage Platforms</h4>
<ul>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/ipfs.webp" alt="IPFS"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/manogodb.png" alt="MongoDB"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/filecoin.webp" alt="Filecoin"></li>
<li><img class="lazy" data-src="images/cryptocurrency-development/tech-stack/pinata.webp" alt="Pinata"></li>
</ul>
</div>
</div>
</div>
</section>
<div class="product-section fag_sec p-50">
<div class="container">
<div class="section-top ">
<div class="section-header text-center ">
<h4 class="section-title mt20 underline"> FAQ</h4>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-md-12">
<div class="faq-content">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq1">
<span>Do You Need a License to Create Your Own Cryptocurrency?</span>
</a>
</h5>
</div>
<div id="faq1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">
<p>The licensing requirements to create your own cryptocurrency change with countries, as some have set up rules to get official business licenses, while others leave it open for entrepreneurs. Consult with our experts to know the exact requirements for your target regions.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class role="button" data-toggle="collapse" data-parent="#accordion" href="#faq6">
<span>How Much Does It Cost to Launch My Own Crypto Coin?</span>
</a>
</h5>
</div>
<div id="faq6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
<div class="panel-body">
The cost to launch your own crypto coin depends on what blockchain you choose for your coins and the conditions you set on the smart contracts. It also relies on factors such as the number of coins and mechanisms for distribution and burning. Schedule a meeting with our professionals to get a quote.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq2">
<span>Why is Cryptocurrency Development Important? </span>
</a>
</h5>
</div>
<div id="faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">
Cryptocurrency development is very important because decentralized currencies are booming, and are set to be the future currency of the business world. Cryptocurrencies arrive with many benefits such as easy globalized access, decentralization, efficient transactions, etc. Use our cryptocurrency development services today and launch your coin to optimize payments globally.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq3">
<span>What is the use of cryptocurrency?</span>
</a>
</h5>
</div>
<div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">
Cryptocurrency software is based on blockchain technology, and it is useful in several ways. It helps with making instant, efficient transactions and quick access for all around the world, with added factors like immutability, user anonymity, and transparency that helps with a highly-secure, successful trading business process.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq4">
<span>How do Crypto Coins or Coins work?</span>
</a>
</h5>
</div>
<div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">
<p>Once you have decided whether to develop a crypto coin or a coin, it is highly important to know how they operate.</p>
<p>Coins are developed by forking an existing blockchain network or creating a new blockchain. It can be used for conducting digital transactions anywhere. </p>
<p>You can understand how a coin works by knowing its well-defined purpose, which can be for facilitating fast digital payments or used as a medium of exchange or as a store of value. A coin’s value will soar depending on the demand from investors and how effectively it is being promoted in the market. </p>
<p>Coins are of different types like security, utility, and equity coins. It can be issued on popular platforms like Ethereum, EOS, Stellar, and Hyperledger. An existing blockchain network need not be forked for creating a coin. Coins need to have an underlying asset behind it. </p>
<p>The most popular coin is the ERC-20 token that uses the Ethereum blockchain network. Coins cost less and are faster to develop than a coin. </p>
<p>You can understand how a coin works by understanding the functions of a smart contract and creating a coin transfer event. If your coin has a wide number of use cases, its value will increase over time. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq5">
<span>What are the different types of Coins in Cryptocurrency?</span>
</a>
</h5>
</div>
<div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">
<p>There are mainly three different types of crypto coins, namely currency, utility, and investment coins. </p>
<p>Each type of coin has its own set of regulations. The issuance and exchange of crypto coins have to comply with the guidelines laid down by regulatory bodies. </p>
<strong class="crypto_3">The three kinds of crypto coins are</strong>
<ul class="list-ico">
<li><b>Currency coins</b> - It will be used as a mode of payment for buying and selling different types of goods and services. Examples are Bitcoin and Ethereum which are considered to be decentralized digital currencies. </li>
<li><b>Utility coins</b> - They are used apart from being utilized as a means of payment. It can be used for accessing a particular product or for performing certain functions in a platform. Many crypto trading platforms have created their own native coin, and users can get a discount in trading fees if they use that coin. The coins created on popular blockchain platforms like EOS and Etherum are usually utility coins as they can be easily used in various DApps. </li>
<li><b>Investment Coins</b> - They are also known as asset coins. Their value will rise, leading to a positive ROI if there is an increase in their market price. The DAO (Decentralized Autonomous Organization) which started a venture capital fund for cryptos is a famous investment coin as classified by the Securities and Exchange Commission of the USA. </li>
</ul>
<p>Hence, choose any of the above-mentioned cryptocurrency coins according to your investment goals and financial resources.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq7">
<span>How can I make my Cryptocurrency valuable?</span>
</a>
</h5>
</div>
<div id="faq7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">
<p>Though Cryptocurrencies are highly volatile, it is a lucrative investment opportunity in this digital world. </p>
<strong class="crypto_3">Some aspects that influence your Cryptocurrency’s value are </strong>
<ul class="list-ico">
<li>The utility of the coin determines its various use cases. This will directly contribute to the demand for your crypto. It should be used as a medium of exchange, as a store of value, as a unit of account, for payments, and for exercising voting rights.</li>
<li>Since there is a limited supply of cryptocurrencies, its demand will always be high. This will contribute to a rise in value. </li>
<li>If there is a lot of progress made regarding the development of the project, positive sentiment will prevail as your cryptocurrency will be considered highly viable. </li>
<li>The total market capitalization reflects the coin’s value in the market. It can be determined by multiplying the total supply with the individual price of the coin. </li>
</ul>
<p>Bitcoin, which is considered the leader of Cryptocurrency reached an all-time high of $20,000 recently. More institutional investors and tech giants are showing a lot of interest in investing in blockchain technology and digital ledgers. Hence, Cryptocurrency development is considered the future of money. It will play an increasing role in the global financial system in the future. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<h5 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq10">
<span>How to create your own Cryptocurrency Coin?</span>
</a>
</h5>
</div>
<div id="faq10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">
<p>Cryptocurrency is creating a new paradigm in the global financial system. It is a profitable business model and offers a lot of exciting opportunities for its developers. </p>
<strong class="crypto_3">Some must-know aspects before creating your own Cryptocurrency Coin</strong>
<ul class="list-ico">
<li>Cryptocurrency coin is a decentralized digital currency that can be used as a means of exchange and as a storage of account.</li>
<li>It relies on end-to-end encryption to confirm the transactions made by the traders.</li>
<li>A new blockchain network or a fork of an existing blockchain network is required for creating a Cryptocurrency coin.</li>
<li>Coins can be utilized anywhere and have several use cases.</li>
<li>Cryptocurrency coins offer advantages such as irreversibility of transactions, lightning-fast settlement of funds, low transaction costs, 24x7 trading, and no chance of any authority freezing your assets anytime. </li>
</ul>
<strong class="crypto_3">The factors to consider while developing your Cryptocurrency Coin </strong>
<ul class="list-ico">
<li>Define your use cases especially the business objectives clearly beforehand.</li>
<li>Choose any consensus mechanism which reflects how the participating nodes will add a transaction to the block.</li>
<li>Choose the right blockchain platform. The popular ones are Ethereum, Waves, NEM, EOS, MultiChain, and Hyperledger Fabric. </li>
<li>Design the nodes for performing the various tasks smoothly. It can be either public, private, or hybrid and can be hosted on the cloud if needed.</li>
<li>Establish the blockchain’s internal architecture like the key formats, asset issuance, atomic swaps, and block signatures.</li>
<li>Get an operational license for your cryptocurrency by approaching a certified regulatory body. </li>
</ul>
<p>Initiating Cryptocurrency development will improve the transparency and efficiency of your business. Developers who have significant knowledge will take care to create a cryptocurrency in the shortest time with minimum costs. </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="get-quote" class="gray_bg">
<section class="client">
<div class="container clients1">
<div class="row">
<div class="section-title text-center col-xs-12"><h5 class="common_h3 text-dark">We Spotlighted In</h5><hr></div>
<div class="spl-logo-row">
<img class="lazy spl-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/ya.webp" alt="yahoo!-finance" width="150px" height="100%">
<img class="lazy spl-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/mi.webp" alt="markets-insider" width="150px" height="100%">
<img class="lazy spl-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/be.webp" alt="benzinga" width="150px" height="100%">
<img class="lazy spl-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/di.webp" alt="digital-journal" width="150px" height="100%">
<img class="lazy spl-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/ib.webp" alt="ibt" width="150px" height="100%">
<img class="lazy spl-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/mw.webp" alt="market-watch" width="150px" height="100%">
<img class="lazy spl-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/sa.webp" alt="seeking-alpha" width="150px" height="100%">
<img class="lazy spl-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/si.webp" alt="street-insider" width="150px" height="100%">
<img class="lazy spl-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/c.webp" alt="crypto-news-btc" width="150px" height="100%">
</div>
</div>
</div>


@include('static.a')

<div class="container patner">
<div class="row">
<div class="section-title text-left"><h5 class="common_h3 text-dark text-center">We are Partnering With</h5></div>
<div class="col-md-12 col-sm-12 col-xs-12">
<img class="lazy part-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/certix.webp" alt="UAE" width="150px" height="100%">
<img style="background:#000;padding: 3px;" class="lazy part-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/xt.webp" alt="UAE" width="150px" height="100%">
<img class="lazy part-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/bitmart.webp" alt="UAE" width="150px" height="100%">
</div>
<div class="col-md-12 col-sm-12 col-xs-12 mt20">
<img class="lazy part-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/binance-logo.webp" alt="UAE" width="150px" height="100%">
<img class="lazy part-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/polygon-logo.webp" alt="UAE" width="150px" height="100%">
<img class="lazy part-logo" data-src="https://www.blockchainappfactory.com/images/index-sec/avalanche-logo.webp" alt="UAE" width="150px" height="100%">
</div>
</div>
</div>
</section>
<div class="common_newsletter">
<div class="newsletter_videos">
<div class="newsletter_videos_numbers">
<div class="section-title text-center"><h5 class="common_h3">History is Boring! But numbers aren't!</h5><hr></div>
<ul class="ul-style-4 list_growth m-t-50 history_ul">
<li><i class="fa fa-link" aria-hidden="true"></i> Total Blockchain Experience <strong>10+ Years</strong></li>
<li><i class="fa fa-check" aria-hidden="true"></i> Projects Completed <strong>400</strong></li>
<li><i class="fa fa-tasks" aria-hidden="true"></i> Projects in progress <strong>50+</strong></li>
<li><i class="fa fa-users" aria-hidden="true"></i> Team <strong>500+</strong></li>
<li><i class="fa fa-users" aria-hidden="true"></i> Blockchain Experts <strong>150+</strong></li>
</ul>
</div>
<div class="newsletter_videos_videos">
<a class="thumb fancybox-media1" allow-navigation href="https://youtu.be/DLlkNdIikLU" data-fancybox-group="gallery" title="ICO Development" rel="nofollow"><img data-src="https://www.blockchainappfactory.com/images/sto/video-bg.webp" class="lazy" alt="ICO Development" width="100%" style="position:relative;"><span class="play"></span></a>

</div>
</div>
<style type="text/css">
    #newsletter-form-sec .form-group{margin-bottom:7px;}
    #mailForm_common .form-group label{color: #fff;}
    .contact-content{padding-top: 40px; padding: 30px; margin-top: -40px; margin-left: -40px; background-color: #f9f9f9; box-shadow: 0 0 6px 1px rgba(0,0,0,.22); border-radius: 7px;}
    .contact-content p{font-size: 18px; line-height: 30px;}
    .contact-content a{font-size: 18px; display: block;margin-bottom: 20px;}
    .contact-content a i{color: #47b475; font-size: 24px;}
    .form-control{background: #fff;}
    .pad-40-20{padding: 25px 25px 0 25px;}
    input#phone_common{background: #fff;}
    #mailForm_common .form-group label{color: #fff;}
    a.home-talk-experts{border-radius: 25px;}

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .contact-content{margin-top: 20px; margin-left: 0;padding: 20px !important;}
        .pad-40-20{padding: 20px;}
        .contact-content a{font-size: 14px;}
        .sticky-form{display: none;}
    }

    @media only screen and (min-width: 768px) and (max-width: 899px) {
        .contact-content{margin-top: 20px; margin-left: 0;}
    }
    .newsletter_videos h5 {
    color: #fff;
        font-size: 25px!important;
}
h5.section-title {
    font-size: 27.46px;
}
.client h5 {
    color: #444!important;
}
h5.common_h3 {
    font-size: 25px!important;
}
</style>
<div id="newsletter-form-sec" style="background: #fff; padding: 70px 0px;">
<div class="container">
<div class="col-md-12">
<div class>
<h5 class="section-title underline text-center">Schedule A Call With Our Experts</h5>
<p class="text-center">Got a Web3 project in mind? We are excited to listen to your visions!</p>
</div>
</div>
<div class="clearfix"><br><br></div>
<div style="background:#022d62; border-radius: 7px;">
<div class="col-md-5">
<div class="contact-content">
<p>Turn your ideas into reality with our expertise in web3 technology! Reach out to us today and discuss your project or ask your queries to our proficient web3 experts.</p>
<hr>
<a rel="nofollow" href="/cdn-cgi/l/email-protection#e28b8c848da2808e8d8189818a838b8c839292848381968d909bcc818d8f"><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i>   <span class="__cf_email__" data-cfemail="1d74737b725d7f71727e767e757c74737c6d6d7b7c7e69726f64337e7270">[email protected]</span></a>
<a href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1"><i class="fa fa-calendar" aria-hidden="true"></i>   Schedule A Meeting</a>

</div>
</div>
<div class="col-md-7 pad-40-20">
<form class id="mailForm_common" method="post">
<input type="hidden" name="page" value="contactus">
<div class="form-group col-md-6">
<label for="name">Full Name</label><input type="text" class="form-control input-style-2" id="name_common" name="name" placeholder="Full Name" required>
</div>
<div class="form-group col-md-6">
<label for="email">Email</label><input type="email" class="form-control input-style-2" id="email_common" name="email" placeholder="Email address" required>
</div>
<div class="form-group col-md-6">
<label for="subject">Phone</label>
<input id="phone_common" name="phone_dummy" type="text" oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required data-cf-modified-5e54128c9a97ba44daa3d250->
<input type="hidden" name="phone" id="phone_newsletter" value>
<input type="hidden" name="url" id="url" value="/cryptocurrency-development">
<input type="hidden" value="2607:5300:203:172e::" name="IP">
</div>
<div class="form-group col-md-6">
<label for="skype">Your Skype ID</label><input type="text" class="form-control input-style-2" id="skype_common" name="skype" placeholder="Skype ID" required>
</div>

<div class="form-group col-md-12">
<label for="message">Message</label><textarea class="form-control input-style-2" id="textarea_common" name="message" placeholder="Enter your message.." required rows="3"></textarea>
</div>
<div class="form-group col-md-12">
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://www.google.com/recaptcha/api.js" async defer type="5e54128c9a97ba44daa3d250-text/javascript"></script>
<div class="g-recaptcha" data-sitekey="6LdmU-coAAAAANsYjKfjqRl9xG1NTV4f2aVzlthf"></div><br>
<button type="button" class="common_send_btn">Submit</button></div>
</form>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div> </div>
<style type="text/css">
     .formdiv .form-left .form-group:last-child{margin-bottom:0}.common_newsletter .form-right textarea{height:240px}.form-right input.common_send_btn{width:100%!important;margin:0!important;display:inline-block!important;background:#140050!important;color:#fff!important;border:0!important;text-transform:uppercase!important;font-weight:700!important;padding:10px 0!important}body input.common_send_btn.my_send{margin-top:41px!important}.timeline-center::before{background:#f2f2f2}.thumb{position:relative}.photo,.play{position:absolute;width:40px;height:28px;left:45%;top:40%}.thumb:hover .photo,.thumb:hover .play{background-position:0 -252px}.play{-webkit-animation:1s ease-in-out infinite breathing;animation:1s ease-in-out infinite breathing;-webkit-font-smoothing:antialiased;background:url(images/play.webp) 0 -252px no-repeat}.contact-inner-1{padding-top:70px;padding-bottom:100px}@-webkit-keyframes breathing{0%,60%{-webkit-transform:scale(1.5);transform:scale(1.5)}25%{-webkit-transform:scale(2);transform:scale(2)}100%{-webkit-transform:scale(1.45);transform:scale(1.45)}}@keyframes breathing{0%,60%{-webkit-transform:scale(1.5);transform:scale(1.5)}25%{-webkit-transform:scale(2);transform:scale(2)}100%{-webkit-transform:scale(1.45);transform:scale(1.45)}}@media (max-width:991px){.height_row{margin-top:10px}}@media (max-width:767px){.formdiv .form-left .form-group:last-child{margin-bottom:15px}.stats{min-height:140px}}
    </style>

<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<div class="modal-header">
<h4 class="modal-title">Connect With Us <span type="button" data-dismiss="modal">×</span></h4> </div>
<div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
<form class id="mailForms2" method="post" action>
<input type="hidden" value="Leverage - Margin Trading" name="btc_value">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" id="name" name="name" required> </div>
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" name="email" id="email" required> </div>
<div class="form-group">
<label for="skype">Skype</label>
<input type="text" class="form-control" name="skype" id="skype"> </div>
<div class="form-group">
<label>Phone</label>
<input id="phone22" name="phone_dummy" type="text" required oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" data-cf-modified-5e54128c9a97ba44daa3d250->
<input type="hidden" name="phone" id="phone_newsletter" value>
<input type="hidden" name="url" id="url" value="/cryptocurrency-development">
<input type="hidden" value="2607:5300:203:172e::" name="IP"> </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
<div class="form-group">
<label>Requirement</label>
<textarea placeholder="Write text here..." name="message" required></textarea>
</div>
<div class="form-group">
<input type="button" class="submit_send" value="send message"> </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="js/owl.carousel.js" type="5e54128c9a97ba44daa3d250-text/javascript"></script>
<script type="5e54128c9a97ba44daa3d250-text/javascript">
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
<script src="js/vendor.js" type="5e54128c9a97ba44daa3d250-text/javascript"></script>
<script src="js/plugins-reduced.js" type="5e54128c9a97ba44daa3d250-text/javascript"></script>
<script src="build/js/intlTelInput.js" type="5e54128c9a97ba44daa3d250-text/javascript"></script>
<script src="js/main.js" type="5e54128c9a97ba44daa3d250-text/javascript"></script>


<style type="text/css">
    .header .menu-item{padding: 0 3px !important;}
    li.menu-item.cnt_m ul.mega-submenu.normal-sub{right: auto;}
    ul.mega-submenu.menu_desk li.has-subsubmenu{width: 33% !important;}
    ul.mega-submenu.menu_desk h4{margin-top: 0;margin-bottom: 0;}
    .header .menu-item .mega-submenu a {font-size: 13px !important;}
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
.pull-right-tow a{
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

.header-nabar-icon .pull-right a:hover{
    color: #fff!important;
}
.header-nabar-icon .pull-right a, .header-nabar-icon .pull-right-tow a{color: #fff;}


@media  (max-width: 320px){
    .header-nabar-icon .pull-right, .pull-right-tow {
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
@media  (max-width: 768px){
    .header-nabar-icon .pull-right, .pull-right-tow {
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
    background-image: -o-linear-gradient(135deg,#b621fe 0,#1fd1f9 74%) !important;
    background-image: linear-gradient(315deg,#b621fe 0,#1fd1f9 74%) !important;
    border-radius: 7px;
    color: #fff;
}
.color-btn1{
    border: none;
    /*border-radius: 50px;*/
    transition: 0.3s;
    background: #f90cff;
    background-image: 
    linear-gradient(to right bottom,#f90cff,#e027ff,#c534ff,#a93eff,#8a44ff,#6560ff,#3c73ff,#0081ff,#009cff,#00b3ff,#00c6f5,#0cd7e8);
    /* clip-path: polygon(0% 0%,90% 0,100% 30%,100% 100%,0 100%); */
    animation: glow 1s infinite;
    transition: 0.5s;
    padding: 10px 25px;
    color: #fff;
    font-weight: 700;
    margin: 0 auto;
    font-size: 16px;
}
.color-btn1:focus,.color-btn1:hover{
        background-color: #47b475;
        transition: 0.5s;

}
.color-btn1 span:hover {
        transition: 0.3s;
        opacity: 1;
        font-weight: 700;
    }
  @media (min-width:320px) and (max-width:643px){
        .color-btn1{
           padding: 9px 16px!important;
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

<a class="sticky_form_bp color-btn1 hidden-lg" href="https://www.blockchainappfactory.com/create-your-own-token-and-coin" style="color:#fff !important;">Contact to Create a Token! </a>
<div class="sticky-form">
<div class="formdiv">
<form class="form-side" id="mailForm_sticky" method="post" action>
<h4>Connect With Us</h4> <button type="button" class="close" aria-label="Close quick contact"><i class="fa fa-times-circle" aria-hidden="true"></i></button><hr>
<div class="form-group"><label for="name">Name</label><input type="text" class="form-control" name="name" id="name_sticky" placeholder="Your Name"> </div>
<div class="form-group"><label for="email">Email Address</label><input type="email" class="form-control" name="email" id="email_sticky" placeholder="Your Email"> </div>
<div class="form-group"><label for="skype">Skype</label><input type="text" class="form-control" name="skype" id="skype_sticky" placeholder="Your Skype"> </div>
<div class="form-group">
<label>Phone</label>
<input id="phone_sticky" name="phone_dummy" type="text" required oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" data-cf-modified-5e54128c9a97ba44daa3d250->
<input type="hidden" name="phone" id="phone_newsletter">
<input type="hidden" name="url" id="url" value="/cryptocurrency-development"> </div>
<div class="form-group"><label>messages</label><textarea placeholder="Write text here..." id="textarea_sticky" name="message"></textarea></div>
<div class="form-group"><input type="button" id="submit" class="common_send_btn" value="send message"> </div>
</form>
</div>
</div>
<style type="text/css">.footer-wrap h6{color: #fff; font-size: 23px;} 
.footer-wrap h5 { margin: 10px 0; position: relative; text-transform: uppercase; padding-left: 10px; color: #fff; background: -webkit-linear-gradient( 77deg,#00bcd4 0%,#17cc81 100%); background: -ms-linear-gradient( 0deg,rgb(254,66,47) 0%,rgb(254,81,150) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;} .footer-wrap h5:after { content: ''; width: 3px; height: 90%; background: #47b475; display: inline-block; float: left; position: absolute; margin-top: 0; margin-right: 6px; left: 0; top: 1px;}</style>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="5e54128c9a97ba44daa3d250-text/javascript" src="https://www.blockchainappfactory.com/fbox/jquery.fancybox.js?v=2.1.5"></script>
<script type="5e54128c9a97ba44daa3d250-text/javascript" src="https://www.blockchainappfactory.com/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.blockchainappfactory.com/fbox/jquery.fancybox.css?v=2.1.5" media="screen">
<script type="5e54128c9a97ba44daa3d250-text/javascript" src="https://www.blockchainappfactory.com/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="5e54128c9a97ba44daa3d250-text/javascript">
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

<script type="5e54128c9a97ba44daa3d250-text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 9464790;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/9464790/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VQVFF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script type="5e54128c9a97ba44daa3d250-text/javascript">
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
  height: auto; /* Specify a height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 999999; /* Stay on top */
  top: 27%;
  left: 0;
  background-color: transparent; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 0px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */

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
  filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));
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
<script type="5e54128c9a97ba44daa3d250-text/javascript">
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
.close-btn{position: fixed; left: 10px; bottom: 20px; z-index: 99; color: #fff !important; font-size: 16px; font-weight: bold; border-radius: 50%; border: 0; width: 30px; height: 30px; padding: 0; box-shadow: 1px 1px 11px -3px #999; display: none; transition: all 2s; background-color: #89002a;}
.fixed-social {position: fixed; bottom: 42px; padding: 0px 10px; background: linear-gradient(2deg, black, #868686, black); transition: all 2s; width: 150px; height: 25px; border-radius: 20px; box-shadow: 1px 1px 11px -3px #999; /*filter: drop-shadow(0 0 0.75rem crimson);*/ display: flex !important; flex-wrap: wrap; z-index: 99; justify-content: center;}
.hide {opacity:0; left:-100%;}
.show1 {opacity:1; left:50px;}
.fixed-social .items{margin: 0 auto;}
.fixed-social .items .icons{width: 55px; height: 55px; background: linear-gradient(45deg, black, transparent); padding: 5px; border-radius: 50%; margin: -17px 0; float: left;}
.fixed-social .items .icons i{padding: 9px; background: #00a7e7; border-radius: 50%; font-size: 26px; color: #fff;}
.fixed-social .items .text{padding-left: 60px; font-weight: bold; font-family: arial; font-size: 14px; color: #fff !important; line-height: 2.2em;}
.fixed-social .items a{text-decoration: none; outline: none; padding: 0; margin: 0;}
.fixed-social .items .icons img{width: 44px !important; height: 44px !important;}

@media only screen and (min-width: 1024px) and (max-width: 1200px) {
    .show1 {left:20px;}
    .close-btn{bottom: 60px;}
}

@media only screen and (min-width: 768px) and (max-width: 899px) {
    .fixed-social {bottom: 80px;}  
    .show1 {left:50px;}
    .close-btn{bottom:60px; z-index: 999;}
}

@media only screen and (min-width: 320px) and (max-width: 767px) {
    .fixed-social .items .text{display: none;}   
    .fixed-social {bottom: 80px; }  
    .show1 {left:12%;} 
    .fixed-social .items a{display: flex; justify-content: center;}
    .close-btn{bottom:60px; z-index: 999;}
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




<script type="5e54128c9a97ba44daa3d250-text/javascript">
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


<script type="5e54128c9a97ba44daa3d250-text/javascript">  
    $(".crypto-popup").click(function(e) {
        $('crypto-popup').addClass('fixedPosition full-width');
        $(".login-popup").addClass('show');
        e.stopPropagation();
    });
</script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="5e54128c9a97ba44daa3d250-|49" defer></script>




@endsection