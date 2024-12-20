<section class="common_spacing gray_bg">
    <div class="container ">
        <div class="row">
            <div class="col-md-12  section-title text-center">
                <h2 class="text-center title-th sec_tit underline">{{ $title }}</h2>
            </div>
        </div>
        <div class="choose-content-box mt20">
            <div class="row">
                @foreach ($cards as $card)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="choose-wrapper">
                            <div class="wrappwer-icon text-center"> <img class="lazy"
                                    src="{{ asset('images/'. $card['image']) }}"> </div>
                            <div class="choose-para text-center">
                                <p> <strong style="display: block; font-size: 18px; padding-bottom: 5px;">{{ $card['title'] }}</strong>
                                {{ $card['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="choose-wrapper">
                        <div class="wrappwer-icon text-center"> <img class="lazy"
                                data-src="/images/discord-game-marketing-agency/icons/promotions.webp"> </div>
                        <div class="choose-para text-center">
                            <!-- <h4 > </h4> -->
                            <p> <strong
                                    style="display: block; font-size: 18px; padding-bottom: 5px;">Promotions</strong>
                                Our Discord game marketing promotions span around community building through various
                                strategies. We utilize niche influencers who talk about your game’s uniqueness to pull
                                in gamers. We also add server links in the posts on your other social media handles. The
                                content used here will focus on putting your game in the limelight in the minds of
                                gamers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="choose-wrapper">
                        <div class="wrappwer-icon text-center"> <img class="lazy"
                                data-src="/images/discord-game-marketing-agency/icons/competitor.webp"> </div>
                        <div class="choose-para text-center">
                            <p> <strong
                                    style="display: block; font-size: 18px; padding-bottom: 5px;">Competitions</strong>
                                Discord marketing for games from us also uses competitions such as in-server contests
                                (with/without influencers’ aid) and bounty programs. Winners are typically rewarded at
                                the end to promote their value. In the case of bounty programs, they serve as
                                indispensable tools to build your game’s Web3 (and Web2) social community with members’
                                assistance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="choose-wrapper">
                        <div class="wrappwer-icon text-center"> <img class="lazy"
                                data-src="/images/discord-game-marketing-agency/icons/tournaments.webp"> </div>
                        <div class="choose-para text-center">
                            <p> <strong
                                    style="display: block; font-size: 18px; padding-bottom: 5px;">Tournaments</strong>Our
                                Discord game marketing agency can help you organize game tournaments post-launch with
                                attractive rewards to draw gamers. Even during pre-launch, your server can be used to
                                generate traction for Alpha and Beta versions of your game through bug bounty programs
                                that help resolve errors in the platform while saving valuable time for your developers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="choose-wrapper">
                        <div class="wrappwer-icon text-center"> <img class="lazy"
                                data-src="/images/discord-game-marketing-agency/icons/ads.webp"> </div>
                        <div class="choose-para text-center">
                            <p> <strong style="display: block; font-size: 18px; padding-bottom: 5px;">External
                                    Advertising</strong>We also supplement our Discord game marketing by advertising
                                your server through third-party Web3 advertising networks on the internet. Furthermore,
                                press releases for your Web3 gaming platform and posts on NFT and IGO listing sites will
                                feature invite links to your server. This strengthens your server community and boosts
                                your game’s Web3 presence.</p>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </div>
</section>