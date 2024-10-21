<div class="pros-trading common_spacing">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="text-center sec_tit underline">{{ $title }}</h2>
        </div>
        <p class="text-center">{{ $desc }}</p>
        <div class="mt60">
            <div class="row flip-box-row sto-exchange-flip">
                <div class="container-center">
                    @foreach($cards as $key => $card)    
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/{{ $card['image'] }}" class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>{{ $card['title'] }}</strong></h3>
                                <p class="flip-txt">{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="flip-box">
                            <div class="flip-icon-outer"> <img src="images/asset-token/ownership.svg"
                                    class="flip-icon"> </div>
                            <h3 class="flip-tit"><strong>Fractional Ownership</strong></h3>
                            <p class="flip-txt">Tokenization allows fractional ownership where you can split the
                                value of shares and also their ownership. This helps reduce your distress of being a
                                sole owner and bear all challenges by yourself. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="flip-box">
                            <div class="flip-icon-outer"> <img src="images/asset-token/global-network.svg"
                                    class="flip-icon"> </div>
                            <h3 class="flip-tit"><strong>Globalization</strong></h3>
                            <p class="flip-txt">Tokenization removes geographical barriers, and you can trade with
                                anyone around the globe, which widely expands your business opportunities, spinning
                                profits in huge numbers.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="flip-box">
                            <div class="flip-icon-outer"> <img src="images/asset-token/404-error.svg"
                                    class="flip-icon"> </div>
                            <h3 class="flip-tit"><strong>No intermediaries</strong></h3>
                            <p class="flip-txt">By tokenizing real estate assets, users are enabled direct peer-peer
                                transactions with no involvement from intermediaries. This helps with a risk-free
                                business, and also reduces extra costs. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="flip-box">
                            <div class="flip-icon-outer"> <img src="images/asset-token/blockchain.svg"
                                    class="flip-icon"> </div>
                            <h3 class="flip-tit"><strong>Blockchain Immutability</strong></h3>
                            <p class="flip-txt">The integration of blockchain into the tokenization platform
                                provides immutability where the transactions, once recorded, cannot be interchanged.
                                Also, blockchain completely protects the user and their asset information.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="flip-box">
                            <div class="flip-icon-outer"> <img src="images/blockchain/exchange_2.webp"
                                    class="flip-icon"> </div>
                            <h3 class="flip-tit"><strong>Instant, Efficient transactions</strong></h3>
                            <p class="flip-txt">Tokenization eliminates the long, tedious real estate process and
                                helps with quick, efficient peer-peer transactions, from/to anywhere around the
                                world. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="flip-box">
                            <div class="flip-icon-outer"> <img src="images/asset-token/money-bag (2).svg"
                                    class="flip-icon"> </div>
                            <h3 class="flip-tit"><strong>Reduced entry cost</strong></h3>
                            <p class="flip-txt">The tokens can easily be subdivided into many parts and this enables
                                its sale at lower prices due to the presence of fractionalization. Hence, small
                                investors can participate greatly in the process while the wealthier investors can
                                efficiently diversify their portfolio. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="flip-box">
                            <div class="flip-icon-outer"> <img src="images/asset-token/shield (2).svg"
                                    class="flip-icon"> </div>
                            <h3 class="flip-tit"><strong>Highly secure</strong></h3>
                            <p class="flip-txt">No individual or organization controls the entire system, and the
                                power is equally distributed between the different users. Advanced cryptographic
                                techniques like private keys are utilized by users to get access to their digital
                                assets. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="flip-box">
                            <div class="flip-icon-outer"> <img src="images/asset-token/administration (1).svg"
                                    class="flip-icon"> </div>
                            <h3 class="flip-tit"><strong>Simplified management</strong></h3>
                            <p class="flip-txt">Investors’ rights can be managed easily. Secondary transactions
                                executed can be tracked on a real-time basis by partnering with the leading
                                third-party exchanges. Investors get their returns promptly and also participate in
                                the governance of the platform through voting rights and decision making. </p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>