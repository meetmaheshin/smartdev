<section class="new-s-box" style="padding: 40px 0px; background:#011542;">
    <div class="container">
        <div class="row">
            <div class="text-center col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 40px;">
                <h2 class="underline text-white">{{ $title }}</h2>
                <p class="text-center text-white">{{ $desc }}</p>
                <div class="under_line under_white"></div>
                <div class="text" style="color: #000;margin-bottom: 20px;"></div>
            </div>
            <div class="container container-center">
                @foreach ($cards as $card)
                    <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                        <div class="serviceBox sameclr">
                            <div class="service-icon" style="width: 64px">
                                <span>
                                    <img class="lazy" src="{{ asset('images/'. $card['image']) }}">
                                </span>
                            </div>
                            <h4 class="title"> {{ $card['title'] }} </h4>
                            <p class="description"> {{ $card['desc'] }} </p>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy"
                                    data-src="images/crypto-marketing-services/icons/cryptocurrency.webp"
                                    style="width: 64px;"></span>
                        </div>
                        <h4 class="title">Cryptocurrency Projects</h4>
                        <p class="description">Our expert team conducts in-depth market analysis and deploys
                            cutting-edge marketing strategies to ensure your cryptocurrency project stands out in a
                            competitive landscape.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy"
                                    data-src="images/crypto-marketing-services/icons/crypto-wallet.webp"></span>
                        </div>
                        <h4 class="title">Crypto Wallet Projects</h4>
                        <p class="description">Harness the expertise of our digital marketing specialists to propel your
                            crypto wallet projects to the forefront of the market with innovative promotional tactics.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy"
                                    data-src="images/crypto-marketing-services/icons/tokens.webp"></span>
                        </div>
                        <h4 class="title">Token Sales</h4>
                        <p class="description">We design impactful marketing campaigns for ICOs (Initial Coin Offerings)
                            and IDOs (Initial DEX Offerings) to attract global investors and drive substantial
                            engagement.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy" data-src="images/crypto-marketing-services/icons/mining.svg"
                                    style="width: 64px;"></span>
                        </div>
                        <h4 class="title">Crypto Mining</h4>
                        <p class="description">Our strategic approach helps attract attention to your crypto mining
                            ventures, fostering business growth through targeted marketing strategies.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy" data-src="images/crypto-marketing-services/icons/exchange.webp"
                                    style="width: 64px;"></span>
                        </div>
                        <h4 class="title">Cryptocurrency Exchanges</h4>
                        <p class="description">We focus on expanding your exchange’s customer base, using proven
                            techniques to boost user acquisition and maximize your exchange’s success.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy" data-src="images/crypto-marketing-services/icons/nft.webp"
                                    style="width: 64px;"></span>
                        </div>
                        <h4 class="title">NFT Projects</h4>
                        <p class="description">Elevate your NFT project with our data-driven marketing strategies. Our
                            team creates compelling ad campaigns that resonate with your target audience and amplify
                            your project's visibility.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy" data-src="images/crypto-marketing-services/icons/deFi.webp"
                                    style="width: 64px;"></span>
                        </div>
                        <h4 class="title">DeFi Projects</h4>
                        <p class="description">Our tailored marketing strategies drive investor interest and support
                            organic growth for your DeFi project, establishing it as a reputable and trusted entity in
                            the space.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy" data-src="images/crypto-marketing-services/icons/concept-game.webp"
                                    style="width: 64px;"></span>
                        </div>
                        <h4 class="title">GameFi Projects</h4>
                        <p class="description">We develop engaging marketing campaigns for GameFi projects that
                            captivate both gamers and investors, enhancing visibility and adoption within the gaming
                            community.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy" data-src="images/crypto-marketing-services/icons/metaverse.webp"
                                    style="width: 64px;"></span>
                        </div>
                        <h4 class="title">Metaverse Projects</h4>
                        <p class="description">Our specialized marketing team crafts impactful campaigns designed to
                            make a lasting impression and engage the rapidly expanding Metaverse community.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-lg-4 equalize">
                    <div class="serviceBox sameclr">
                        <div class="service-icon">
                            <span><img class="lazy" data-src="images/crypto-marketing-services/icons/web3.webp"
                                    style="width: 64px;"></span>
                        </div>
                        <h4 class="title">Web3 Projects</h4>
                        <p class="description">Position your Web3 project for success with our advanced marketing
                            services, including strategic partnerships and targeted outreach to highlight your project’s
                            potential.</p>
                    </div>
                </div> --}}


            </div>
        </div>
        @if( !empty($cta1_name || $cta2_name))
            <div class="text-center cta_mine txt"> 
                @if((!empty($cta1_link)) && ($cta1_link != '#' && $cta1_link != ''))
                    <a class="nectar-button medium regular accent-color regular-button nec-btn med-btn" target="_blank"
                        href="{{ url("$cta1_link") }}"
                        data-color-override="false" data-hover-color-override="false"
                        data-hover-text-color-override="#fff"><span>{{ ($cta1_name) }}</span>
                    </a>
                @endif
                @if((!empty($cta2_link)) && ($cta2_link != '#' && $cta2_link != ''))
                    <a href="{{ url("$cta2_link") }}" class="nectar-button medium regular accent-color regular-button nec-btn med-btn"><span>{{ ($cta2_name) }}</span></a>    
                @endif
            </div>
        @endif
    </div>
</section>