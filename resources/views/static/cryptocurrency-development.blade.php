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
@include('static.banner', array(
   'banner_heading_1' => 'Launch Your Own Cryptocurrency with', 
   'banner_heading_2' => 'Leading Cryptocurrency Development Company', 
   'banner_para' => 'Lead the crypto revolution with our top development team. We create custom tokenomics and strategic upgrades to position your coin at the top of the market', 
   'banner_CTA' => 'Build Your Coin Today',
   'img_url' => 'images/crypto/banner-img.jpeg'
))
@include('static.stats')
@include('static.client-list')
@include('static.about-section',array(
   'heading' => 'Bespoke Cryptocurrency Development Expertise', 
   'para' => 'Our cryptocurrency development services offer powerful solutions, including custom coin creation, ICO/STO development, and advanced exchange platforms. Using the latest blockchain technology and encryption, we ensure every transaction is secure and efficient.
We focus on creating utility tokens that give users access to future products or services, often with special discounts, and are funded through ICOs. We also specialize in Security, Equity, and Asset-backed Cryptocurrencies, which represent ownership in real assets like stocks or bonds.
We emphasize transparency and security, customizing our services to fit your needs and make your project stand out in the crypto world.',
   'cta' => 'Talk to our experts now'
))
@include('static.six-card-section',array(
   'heading' => 'Cryptocurrency Development Services- For Every Business Needs', 
   'para' => 'Harnessing our extensive tech stack and precise market analysis, we offer unparalleled cryptocurrency development services designed to propel your business forward.',
   'card_title_1' => 'Strategic Crypto Consulting',
   'card_desc_1' => 'Our consulting experts deliver crucial insights to shape your project, whether you’re building exchanges, wallets, coins, or launching initial offerings.',
   'card_title_2' => 'Tailored Crypto Coin Creation',
   'card_desc_2' => 'We facilitate the launch of custom coins on your chosen blockchain(s), designed to foster a robust community and support your crypto platform’s growth.',
   'card_title_3' => 'Versatile Crypto Asset Development',
   'card_desc_3' => 'From equity shares to fiat-backed coins, we develop cryptocurrencies that integrate seamlessly with various crypto and Web3 models, capturing the attention of a broad audience.',
   'card_title_4' => 'Premier Crypto Listing Services',
   'card_desc_4' => 'Our team ensures your coins are featured on leading exchange platforms, enhancing visibility and accessibility to crypto enthusiasts globally.',
   'card_title_5' => 'Innovative Crypto Wallet Solutions',
   'card_desc_5' => 'We design advanced cryptocurrency wallets that enable secure, seamless transactions while offering unique features to enhance user experience.',
   'card_title_6' => 'Advanced Crypto Exchange Development',
   'card_desc_6' => 'We build sophisticated cryptocurrency exchanges, providing a platform for trading multiple cryptocurrencies, including yours, to generate substantial revenue.'
))
@include('static.scroll-card-section',array(
   'title' => 'Pioneering Cryptocurrency Development Excellence- Tailored Solutions from Our Experts', 
   'desc_1' => 'As a leading provider of advanced cryptocurrency development services, we deliver a diverse range of solutions crafted by our experienced developers. Our offerings are driven by meticulously designed programs that introduce groundbreaking features.',
   'desc_2' => 'We leverage the latest technological standards to create enterprise-grade solutions tailored to the broader market. Our suite of services is designed to offer practical business solutions with exceptional functionality.',
   'card_title_1' => 'Efficient Asset Tokenization',
   'card_desc_1' => 'Our team excels in asset tokenization and management, providing secure, scalable solutions to tokenize your valuable assets with high utility and safety.',
   'card_title_2' => 'Dynamic Sidechain Development',
   'card_desc_2' => 'We develop sidechains for established networks to enhance project efficiency, accelerate coin transactions, and reduce gas fees while maintaining top-tier security.',
   'card_title_3' => 'Seamless Micropayment Solutions',
   'card_desc_3' => 'Our micropayment systems streamline everyday cryptocurrency transactions, contributing to a more crypto-friendly world through efficient and practical solutions.',
   'card_title_4' => 'Sophisticated Algorithm Integration',
   'card_desc_4' => 'Utilizing advanced algorithms, we create cryptocurrency coins with exceptional features and robust security, designed to captivate and engage the global crypto community.',
))
@include('static.small-round-card-section',array(
   'title' => 'Exclusive Features of Our Cryptocurrency Coin Development Services', 
   'desc' => 'As a leading global provider of cryptocurrency development, we deliver cutting-edge features and tailored solutions for every project, ensuring exceptional results.',
   'card_title_1' => 'Advanced Multi-Factor Security',
   'card_desc_1' => 'We implement robust, multi-layered security measures for both front-end and back-end systems, providing a secure environment for users and protecting your crypto projects from threats.',
   'card_title_2' => 'Seamless Smart Contract Integration',
   'card_desc_2' => 'Our skilled team creates smart contract solutions that facilitate decentralized trading operations with unparalleled efficiency and minimal costs.',
   'card_title_3' => 'Secure Payment Integrations',
   'card_desc_3' => 'We integrate high-security payment solutions into your cryptocurrency platform, ensuring safe and reliable transactions across various types.',
   'card_title_4' => 'Comprehensive Crypto Liquidity Solutions',
   'card_desc_4' => 'We offer extensive liquidity provisions to maintain the consistent availability of funds, enhancing user satisfaction and project stability.',
   'card_title_5' => 'Global Multi-Language Support',
   'card_desc_5' => ' Our applications are designed with support for major global languages, making your cryptocurrency platform accessible to a diverse, international audience.',
   'card_title_6' => 'Robust User Verification Systems',
   'card_desc_6' => ' We incorporate essential verification features such as Know-Your-Customer (KYC) and Anti-Money Laundering (AML) protocols to uphold the integrity and security of your cryptocurrency venture.',
   'card_title_7' => 'Extensive Multi-Currency Compatibility',
   'card_desc_7' => 'Our platforms support a wide range of prominent cryptocurrencies, helping your business capture the attention of the broader crypto community.',
   'card_title_8' => 'Integrated Crypto and Fiat Gateways',
   'card_desc_8' => 'We build platforms with integrated payment gateways for both cryptocurrency and fiat transactions, facilitating seamless trading experiences for users.',
   'card_title_9' => 'Direct Transactions with Zero Intermediaries',
   'card_desc_9' => 'Our projects eliminate intermediaries, providing a streamlined process that maximizes benefits and meets all participant needs efficiently.',
))
@include('static.coins-table',array(
   'title' => 'Create Your Own Game-Changing Cryptocurrency', 
   'desc' => 'With the soaring popularity of cryptocurrencies, launching your own can be a strategic move for business success. Create a standout crypto coin that leverages the proven models and features of leading projects to capture widespread attention and engagement.',
))
@include('static.step1',array(
   'title' => 'How Our Cryptocurrency Development Experts Bring Your Vision to Life', 
   'desc' => 'At our cryptocurrency coin development firm, our team of blockchain specialists and market analysts is dedicated to helping you achieve your financial objectives.',
   'card_title_1' => 'Business Strategy Development',
   'card_desc_1' => 'We start by gathering your requirements and conducting an in-depth market analysis to craft a robust and effective business model.',
   'card_title_2' => 'Whitepaper Creation',
   'card_desc_2' => 'Our team drafts a comprehensive whitepaper detailing every aspect of your project, designed to captivate and attract potential investors.',
   'card_title_3' => 'Technical Design',
   'card_desc_3' => 'We design and implement critical project components, including wallets, nodes, and blockchain explorers, ensuring seamless functionality.',
   'card_title_4' => 'Technical Development',
   'card_desc_4' => 'Our experts develop the core smart contracts, algorithms, hash values, and technical packages necessary for your projects success.',
   'card_title_5' => 'Rigorous Testing',
   'card_desc_5' => 'We conduct thorough testing, both manual and automated, to identify and resolve any issues, ensuring a flawless and reliable application.',
   'card_title_6' => 'Launch and Maintenance',
   'card_desc_6' => 'We launch your cryptocurrency project and provide ongoing maintenance to guarantee optimal performance and stability.'
))
@include('static.sqaure-card', array(
   'title' => 'Global Cryptocurrency projects powered by our expertise', 
   'desc' => 'Our advanced coin development services deliver exceptional outcomes, helping clients make a substantial impact in the crypto world. From initial concept to final launch, we work hand-in-hand with clients to ensure a seamless and impactful experience. We take pride in sharing the success stories of our diverse clientele and the positive transformations our collaborative efforts have achieved.',
))
@include('static.step2', array(
   'title' => 'Leverage Our Strategic Approach to Crypto Software Development', 
   'desc' => 'Our team has meticulously developed and tested various models to ensure the success of your crypto software development project.',
   'card_title_1' => 'Conceptualization & Whitepaper Drafting',
   'card_desc_1' => 'We collaborate with blockchain experts to refine your vision and present it effectively in a comprehensive whitepaper.',
   'card_title_2' => 'ICO Promotion & Dashboard Configuration',
   'card_desc_2' => 'We boost community engagement through platforms like Telegram, Reddit, Steemit, Twitter, and Facebook, and set up a dedicated investor dashboard.',
   'card_title_3' => 'ICO Launch & Participation',
   'card_desc_3' => 'We facilitate a structured pre-ICO and ICO process, allowing investors to commit funds and purchase your coin according to your set pricing and timing.',
   'card_title_4' => 'Wallet Integration & Coin Distribution',
   'card_desc_4' => 'We ensure the distribution of purchased coins to investors through secure, branded web and mobile wallets.',
   'cta' => 'Talk to our experts!'
))
@include('static.crypto-coins', array(
   'title' => 'Built on the top of secured Cryptocurrency Website Development Platforms', 
   'desc' => 'We offer an ideal solution for creating custom replicas of major cryptocurrencies, tailored to your specific needs.',
))
@include('static.why-choose-us', array(
   'title' => 'Why Altcoin Development is a Strategic Advantage for Your Business', 
   'desc_1' => 'As traditional financial institutions grapple with issues of over-centralization, cryptocurrencies, and altcoins offer a decentralized alternative through blockchain technology. This approach allows for secure, digital management of assets, largely unaffected by traditional economic fluctuations.',
   'desc_2' => 'From a business perspective, creating altcoins provides an opportunity to offer unique services and establish a tailored ecosystem. Altcoins, operating independently of the Bitcoin blockchain, can leverage eco-friendly Proof-of-Stake (PoS) networks to enhance operational efficiency. With the global rise in cryptocurrency adoption, developing your own altcoin can position your business for long-term success and innovation.',
   'cta' => 'Connect with our experts!'
))
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
                  How We Can Elevate Your Crypto Coin Development
               </h3>
               <hr class="mb40"/>
               <p class="text-white">
                  As a leading crypto coin development firm, we offer exceptional services in crafting bespoke cryptocurrencies tailored to your needs. Leveraging advanced technology and multiple blockchain networks, we develop coins that integrate seamlessly with any business model.
                  <br/>
                  <br/>
                  Our expertise spans the entire Software Development Life Cycle (SDLC), ensuring flawless execution from ideation and design to development, testing, and promotion. You’ll benefit from a team of experienced professionals dedicated to every stage of your project. Moreover, we provide prompt, ongoing support to address any issues post-launch.
               </p>
               <div align="center" class="contentall" style="padding-top: 0px;">
                  <a class="nectar-button medium regular accent-color regular-button nec-btn" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" href="#" rel="nofollow" style="border-radius: 30px !important;" target="_blank">
                  <span>
                     Schedule a Consultation with Our Experts Today
                  </span>
                  </a>
                  {{-- <a href="#newsletter-form-sec" rel="nofollow" style="border-radius: 30px !important; text-transform:none !important;">
                  Connect With Our Experts
                  </a> --}}
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
                     Cutting-Edge Technology Stacks Utilized by Our Cryptocurrency Development Team
                  </strong>
               </h3>
               <hr/>
               <p>
                  By harnessing the latest technological advancements, our cryptocurrency software development team stands out globally. We employ state-of-the-art tech stacks to ensure that your cryptocurrency projects are innovative, future-proof, and positioned for long-term success.
               </p>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>
               Blockchain Networks
            </h4>
            <ul>
               <li>
                  <img alt="Ethereum" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/ethereum.webp') }}"/>
               </li>
               <li>
                  <img alt="Polygon" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/polygon.webp') }}"/>
               </li>
               <li>
                  <img alt="BNB Chain" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/bnb-chain.webp') }}"/>
               </li>
               <li>
                  <img alt="Solana" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/solana-1.webp') }}"/>
               </li>
            </ul>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>
               Front-end Frameworks
            </h4>
            <ul>
               <li>
                  <img alt="React" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/react.webp') }}"/>
               </li>
               <li>
                  <img alt="Angular" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/angular.webp') }}"/>
               </li>
               <li>
                  <img alt="Vue JS" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/vue.webp') }}"/>
               </li>
               <li>
                  <img alt="Vanilla JS" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/js.webp') }}"/>
               </li>
            </ul>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>
               Programming Languages
            </h4>
            <ul>
               <li>
                  <img alt="Golang" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/go-lang.webp') }}"/>
               </li>
               <li>
                  <img alt="Laravel" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/laravel.webp') }}"/>
               </li>
               <li>
                  <img alt="PHP" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/php.webp') }}"/>
               </li>
               <li>
                  <img alt="Python" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/python.webp') }}"/>
               </li>
            </ul>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>
               Storage Platforms
            </h4>
            <ul>
               <li>
                  <img alt="IPFS" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/ipfs.webp') }}"/>
               </li>
               <li>
                  <img alt="MongoDB" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/manogodb.webp') }}"/>
               </li>
               <li>
                  <img alt="Filecoin" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/filecoin.webp') }}"/>
               </li>
               <li>
                  <img alt="Pinata" class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/pinata.webp') }}"/>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>


@include('static.faq', array(
   'faq_Q1' => 'Do You Need a License to Create Your Own Cryptocurrency?', 
   'ans_1' => "It depends on your country's regulations. In many places, no specific license is required, but it’s important to check local laws to ensure compliance.",
   'faq_Q2' => 'How Much Does It Cost to Launch My Own Crypto Coin?',
   'ans_2' => 'Costs vary based on blockchain choice, smart contract complexity, and distribution plans. For an accurate estimate, schedule a consultation with us.',
   'faq_Q3' => 'Why is Cryptocurrency Development Important?',
   'ans_3' => 'Cryptocurrency development offers a secure, decentralized alternative to traditional financial systems, enabling innovation and new financial opportunities.',
   'faq_Q4' => 'What is the Use of Cryptocurrency?',
   'ans_4' => 'Cryptocurrencies are used for digital transactions, investments, and raising funds, providing a decentralized method for exchanging value.',
   'faq_Q5' => 'How Do Crypto Coins Work?',
   'ans_5' => 'Crypto coins operate on blockchain technology, using a decentralized ledger to record and verify transactions through cryptographic methods.',
   'faq_Q6' => 'What are the Different Types of Coins in Cryptocurrency?',
   'ans_6' => 'The main types of cryptocurrency coins include:',
   'ans_6_title_1' => 'Utility Coins -',
   'ans_6_desc_1' => 'Used to access specific services or products within a blockchain ecosystem.',
   'ans_6_title_2' => 'Security Coins -',
   'ans_6_desc_2' => 'Represent ownership in a company or asset, often used in ICOs.',
   'ans_6_title_3' => 'Stablecoins -',
   'ans_6_desc_3' => 'Pegged to the value of traditional assets like fiat currencies to minimize volatility.',
   'ans_6_title_4' => 'Governance Coins -',
   'ans_6_desc_4' => 'Allow holders to participate in decision-making processes within a blockchain network.',
   'faq_Q7' => 'How Can I Make My Cryptocurrency Valuable?',
   'ans_7' => 'To increase the value of your cryptocurrency, focus on several key factors:',
   'ans_7_title_1' => 'Utility -',
   'ans_7_desc_1' => 'Ensure your coin has a clear and valuable use case within its ecosystem.',
   'ans_7_title_2' => 'Adoption -',
   'ans_7_desc_2' => 'Foster widespread usage and acceptance within relevant communities.',
   'ans_7_title_3' => 'Technology -',
   'ans_7_desc_3' => 'Develop robust and scalable technology to support your coins functionality.',
   'ans_7_title_4' => 'Marketing -',
   'ans_7_desc_4' => 'Implement effective marketing strategies to raise awareness and attract investors.',
   'ans_7_title_5' => 'Security -',
   'ans_7_desc_5' => 'Prioritize security to build trust and credibility with users.',
   'faq_Q8' => 'How to Create Your Own Cryptocurrency Coin?',
   'ans_8' => 'Creating your own cryptocurrency involves several steps:',
   'ans_8_title_1' => 'Define Your Goals -',
   'ans_8_desc_1' => 'Determine the purpose and objectives of your coin.',
   'ans_8_title_2' => 'Choose a Blockchain -',
   'ans_8_desc_2' => 'Select a blockchain platform or create a new one to host your coin.',
   'ans_8_title_3' => 'Develop the Coin -',
   'ans_8_desc_3' => 'Design and develop the coin, including its technical features and smart contracts.',
   'ans_8_title_4' => 'Create a Whitepaper -',
   'ans_8_desc_4' => 'Draft a detailed whitepaper outlining the coins features, use cases, and technical details.',
   'ans_8_title_5' => 'Launch the Coin -',
   'ans_8_desc_5' => 'Deploy the coin, conduct initial fundraising (if applicable), and implement distribution strategies.',
   'ans_8_title_5' => 'Promote and Support -',
   'ans_8_desc_5' => 'Market your coin and provide ongoing support to ensure its success and adoption.',
   'para' => 'For a comprehensive guide tailored to your specific needs, consult with our experts.'

))

{{-- @include('static.spotlight') --}}


{{-- @include('static.newsletter')
@include('static.contact-form') --}}
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