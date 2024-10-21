<section class="perfect-script common_spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="common_h3 text-center font-wei">{{ $title }}</h2>
                    <hr class="mb40">
                    <p class="text-center">{{ $desc }}</p>
                </div>
            </div>
        </div>
        <div class="row mt-20">
            @foreach ($cards as $card)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                    <div class="perfect-script-items1">
                        <div class="icon">
                            <img class="lazy" src="images/{{ $card['image'] }}">
                        </div>
                        <div class="content">
                            <h4>{{ $card['title'] }}</h4>

                            <p>{{ $card['desc'] }}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" data-src="images/crypto-etf-development/icons/crowd-fund.webp">
                    </div>
                    <div class="content">
                        <h4>Lower Expenses</h4>

                        <p>Crypto ETFs incur significantly lower expenses than mutual funds as they replicate the
                            performance of underlying cryptos than direct investments.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" data-src="images/crypto-etf-development/icons/efficient.svg">
                    </div>
                    <div class="content">
                        <h4>Efficient Taxation</h4>
                        <p>Cryptocurrency ETFs are tax-efficient compared to other financial instruments as they
                            could have fewer distributions of capital gains than others.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" data-src="images/crypto-etf-development/icons/tokens.webp">
                    </div>
                    <div class="content">
                        <h4>Flexibility</h4>
                        <p>These ETFs cover many asset types like crypto coins, tokens, and stocks of companies
                            investing in blockchains, offering flexibility for investors.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" data-src="images/crypto-etf-development/icons/creation.webp">
                    </div>
                    <div class="content">
                        <h4>Creation/Redemption</h4>
                        <p>Crypto ETFs can be created and redeemed seamlessly in large blocks, keeping their prices
                            closer to that of the underlying assets they represent.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" data-src="images/crypto-etf-development/icons/assets.webp">
                    </div>
                    <div class="content">
                        <h4>Custody Solutions</h4>
                        <p>ETFs representing crypto assets often come with custody solutions that protect underlying
                            crypto assets from theft or loss.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                <div class="perfect-script-items1">
                    <div class="icon">
                        <img class="lazy" data-src="images/crypto-etf-development/icons/trading.webp">
                    </div>
                    <div class="content">
                        <h4>Intraday Trading</h4>
                        <p>Crypto ETF solutions can be traded on the stock market throughout the trading day,
                            enabling investors to enter and exit positions whenever they wish.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
</section>