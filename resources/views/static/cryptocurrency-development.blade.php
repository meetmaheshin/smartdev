@extends('layouts.static')
<link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/inline-css.css')}}">
@section('css')
@endsection
@section('content')
<div class="login-popup">
   <div class="box-1">
      <div class="img">
      </div>
      <div class="img-area">
         <h3 class="text-white text-center">
            Become a Market-Leading Crypto Token Business!
         </h3>
         <br/>
         <p class="text-white text-center">
            It takes a lot for a crypto project to succeed in the competitive space. We have been part of the successful journey of these top market-topping token projects:
         </p>
         <ul class="popup-ul">
            <li>
               <img src="images/nftm/Amepay.webp"/>
               <p>
                  AME Chain
               </p>
            </li>
            <li>
               <img src="images/nftm/evai.webp"/>
               <p>
                  Evai
               </p>
            </li>
            <li>
               <img src="images/nftm/dash.webp"/>
               <p>
                  Dash
               </p>
            </li>
            <li>
               <img src="images/nftm/gsx.webp"/>
               <p>
                  GSX Coin
               </p>
            </li>
            <li>
               <img src="images/nftm/waifu.webp"/>
               <p>
                  Waifu
               </p>
            </li>
            <li>
               <img src="images/nftm/anyswap.webp"/>
               <p>
                  Anyswap
               </p>
            </li>
            <li>
               <img src="images/nftm/quickswap.webp"/>
               <p>
                  Quickswap
               </p>
            </li>
            <li>
               <img src="images/nftm/dascoin.webp"/>
               <p>
                  Das Coin
               </p>
            </li>
         </ul>
      </div>
      <div class="form">
         <div class="close">
            ×
         </div>
         <h3 class="text-white text-center">
            Do you want your token project to go to the next level?
         </h3>
         <br/>
         <form id="mailForm" method="POST">
            <div class="form-group">
               <input class="form-control" id="name" name="name" placeholder="Name" type="text"/>
            </div>
            <div class="form-group">
               <input class="form-control" id="email" name="email" placeholder="Email" type="text"/>
            </div>
            <div class="form-group">
               <input class="form-control" id="mobile" name="mobile" placeholder="Mobile" type="text"/>
            </div>
            <div class="form-group">
               <textarea class="form-control" id="message" name="message" placeholder="Message" style="height:75px;"></textarea>
            </div>
            <button class="btn" onclick="return send_mail()" type="button">
            Submit
            </button>
         </form>
         <div class="social">
            <a aria-label="calendly" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" rel="nofollow" target="_blank">
            <i aria-hidden="true" class="fa fa-calender" title="calendly">
            </i>
            Schedule A Meeting
            </a>
            <a aria-label="Mail" href="/cdn-cgi/l/email-protection#d5bcbbb3ba95b7b9bab6beb6bdb4bcbbb4a5a5b3b4b6a1baa7acfbb6bab8" rel="nofollow">
            <i aria-hidden="true" class="fa fa-envelope" title="Mail">
            </i>
            Mail Us
            </a>
         </div>
      </div>
   </div>
</div>
@include('static.banner')
@include('static.stats')
@include('static.client-list')
@include('static.about-section')
@include('static.six-card-section') 
@include('static.scroll-card-section') 
@include('static.small-round-card-section') 
@include('static.coins-table')
@include('static.step1')
@include('static.sqaure-card')
@include('static.step2')
@include('static.crypto-coins')
@include('static.why-choose-us')
@include('static.testimonial-card')

<div class="container common_spacing">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
      <div class="section-header underline">
         <h4 class="common_h3">
            We have Partnered with Popular Companies
         </h4>
      </div>
      <div class="row">
         <div class="owl-carousel client-carousel">
            <div class="client-box text-center">
               <img alt="Client 1" src="images/clients/Shell-Corporation.webp" title=""/>
            </div>
            <div class="client-box text-center">
               <img alt="Client 1" src="images/clients/Mcdonalds.webp" title=""/>
            </div>
            <div class="client-box text-center">
               <img alt="Client 1" src="images/clients/ethirium-gold.webp" title=""/>
            </div>
            <div class="client-box text-center">
               <img alt="Client 1" src="images/clients/campuscoin.webp" title=""/>
            </div>
            <div class="client-box text-center">
               <img alt="Client 1" src="images/clients/dashcoin.webp" title=""/>
            </div>
            <div class="client-box text-center">
               <img alt="Client 1" src="images/clients/dascoin.webp" title=""/>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="What-one common_spacing" style="background:#140050;">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="section-title text-center">
               <h3 class="text-white">
                  What can we do for you in terms of Crypto Coin Development?
               </h3>
               <hr class="mb40"/>
               <p class="text-white">
                  As an experienced crypto coin development company, we can offer you unparalleled services in creating your crypto coins. Our ability to use advanced tech stacks, including numerous blockchain networks, allows us to develop cryptocurrencies that can function seamlessly for any business model.
                  <br/>
                  <br/>
                  Our team excels in executing all steps in the SDLC (Software Development Life Cycle) without flaws. You can have the luxury of seasoned experts in ideation, design, development, testing, and promotions working on your cryptocurrency project. Additionally, we provide swift support services at all times to assist you with any issues that arise post-deployment.
               </p>
               <div align="center" class="contentall" style="padding-top: 0px;">
                  <a class="nectar-button medium regular accent-color regular-button nec-btn" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1" rel="nofollow" style="border-radius: 30px !important;" target="_blank">
                  <span>
                  Schedule A Meeting
                  </span>
                  </a>
                  <a href="#newsletter-form-sec" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">
                  Connect With Our Experts
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<section class="tech-stack" style="background: #f4f4f4; padding-top: 60px;">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-title text-center">
               <h3 class="">
                  <strong>
                  New-Age Tech Stacks Our Cryptocurrency Software Development Team Uses
                  </strong>
               </h3>
               <hr/>
               <p>
                  Tapping into new-age technological stacks makes our cryptocurrency software development team one of the best globally. By adopting the latest tech advancements, we aim to launch cryptocurrency projects that serve the world for a long time.
               </p>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>
               Blockchain Networks
            </h4>
            <ul>
               <li>
                  <img alt="Ethereum" class="lazy" data-src="images/cryptocurrency-development/tech-stack/ethereum.webp"/>
               </li>
               <li>
                  <img alt="Polygon" class="lazy" data-src="images/cryptocurrency-development/tech-stack/polygon.webp"/>
               </li>
               <li>
                  <img alt="BNB Chain" class="lazy" data-src="images/cryptocurrency-development/tech-stack/bnb-chain.webp"/>
               </li>
               <li>
                  <img alt="Solana" class="lazy" data-src="images/cryptocurrency-development/tech-stack/solana-1.webp"/>
               </li>
            </ul>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>
               Front-end Frameworks
            </h4>
            <ul>
               <li>
                  <img alt="React" class="lazy" data-src="images/cryptocurrency-development/tech-stack/react.webp"/>
               </li>
               <li>
                  <img alt="Angular" class="lazy" data-src="images/cryptocurrency-development/tech-stack/angular.webp"/>
               </li>
               <li>
                  <img alt="Vue JS" class="lazy" data-src="images/cryptocurrency-development/tech-stack/vue.png"/>
               </li>
               <li>
                  <img alt="Vanilla JS" class="lazy" data-src="images/cryptocurrency-development/tech-stack/js.png"/>
               </li>
            </ul>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>
               Programming Languages
            </h4>
            <ul>
               <li>
                  <img alt="Golang" class="lazy" data-src="images/cryptocurrency-development/tech-stack/go-lang.webp"/>
               </li>
               <li>
                  <img alt="Laravel" class="lazy" data-src="images/cryptocurrency-development/tech-stack/laravel.webp"/>
               </li>
               <li>
                  <img alt="PHP" class="lazy" data-src="images/cryptocurrency-development/tech-stack/php.webp"/>
               </li>
               <li>
                  <img alt="Python" class="lazy" data-src="images/cryptocurrency-development/tech-stack/python.webp"/>
               </li>
            </ul>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>
               Storage Platforms
            </h4>
            <ul>
               <li>
                  <img alt="IPFS" class="lazy" data-src="images/cryptocurrency-development/tech-stack/ipfs.webp"/>
               </li>
               <li>
                  <img alt="MongoDB" class="lazy" data-src="images/cryptocurrency-development/tech-stack/manogodb.png"/>
               </li>
               <li>
                  <img alt="Filecoin" class="lazy" data-src="images/cryptocurrency-development/tech-stack/filecoin.webp"/>
               </li>
               <li>
                  <img alt="Pinata" class="lazy" data-src="images/cryptocurrency-development/tech-stack/pinata.webp"/>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>


@include('static.faq')

@include('static.spotlight')


@include('static.newsletter')
@include('static.contact-form')
<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <div class="modal-header">
               <h4 class="modal-title">
                  Connect With Us
                  <span data-dismiss="modal" type="button">
                  ×
                  </span>
               </h4>
            </div>
            <div class="formdiv" style="display: inline-block; width: 100%;padding: 0 15px;">
               <form action="" class="" id="mailForms2" method="post">
                  <input name="btc_value" type="hidden" value="Leverage - Margin Trading"/>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
                     <div class="form-group">
                        <label>
                        Name
                        </label>
                        <input class="form-control" id="name" name="name" required="" type="text"/>
                     </div>
                     <div class="form-group">
                        <label>
                        Email Address
                        </label>
                        <input class="form-control" id="email" name="email" required="" type="email"/>
                     </div>
                     <div class="form-group">
                        <label for="skype">
                        Skype
                        </label>
                        <input class="form-control" id="skype" name="skype" type="text"/>
                     </div>
                     <div class="form-group">
                        <label>
                        Phone
                        </label>
                        <input id="phone22" name="phone_dummy" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required="" type="text"/>
                        <input id="phone_newsletter" name="phone" type="hidden" value=""/>
                        <input id="url" name="url" type="hidden" value="/cryptocurrency-development"/>
                        <input name="IP" type="hidden" value="115.246.77.250"/>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
                     <div class="form-group">
                        <label>
                        Requirement
                        </label>
                        <textarea name="message" placeholder="Write text here..." required=""></textarea>
                     </div>
                     <div class="form-group">
                        <input class="submit_send" type="button" value="send message"/>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection