<section class="tech-stack">
    <div class="container">
        <div class="col-lg-12 center">
            <div class="section-title text-center m-b-30">
                <h3 class="common_h3 sec-tit">{{ $title }}</h3>
                <hr>
                <p>{{ $desc }}</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="nav-tabs-wrapper1" class="nav nav-tabs nav-pills nav-stacked"
                style="justify-content: center; border-bottom: 0px; margin-bottom: 0px;">
                <li class="active"><a href="#vtab28" data-toggle="tab">
                        <p>Blockchains</p>
                    </a></li>
                <li><a href="#vtab26" data-toggle="tab">
                        <p>Frameworks</p>
                    </a></li>
                <li><a href="#vtab29" data-toggle="tab">
                        <p>Smart Contracts</p>
                    </a></li>
                <li><a href="#vtab27" data-toggle="tab">
                        <p>Storage</p>
                    </a></li>
            </ul>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="tab-content technology">
                <div role="tabpanel" class="tab-pane in active" id="vtab28">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/home-new/eth.webp') }}">
                                <p>Ethereum</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/polygon.webp') }}">
                                <p>Polygon</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/solana.webp') }}">
                                <p>Solana</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/binance-logo.webp') }}">
                                <p>BNB Chain</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/home-new/avalanche.png') }}">
                                <p>Avalanche</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab26">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/angular.webp') }}">
                                <p>Angular JS</p>
                            </li>
                            <li><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/react.webp') }}">
                                <p>React JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/web3.webp') }}">
                                <p>Web3 JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/node-js_logo.webp') }}">
                                <p>Node JS</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/js.webp') }}">
                                <p>Express JS</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab29">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/solidity.webp') }}">
                                <p>Solidity </p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/ai-token-development/icons/rust.webp') }}">
                                <p>Rust </p>
                            </li>
                            <li><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/go-lang.webp') }}">
                                <p>Go</p>
                            </li>
                            <li><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/python.webp') }}">
                                <p>Python</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab27">
                    <div class="row">
                        <ul style="width: 100%">
                            <li><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/manogodb.png') }}">
                                <p>MongoDB</p>
                            </li>
                            <li><img class="lazy" src="{{ asset('images/cryptocurrency-development/tech-stack/ipfs.webp') }}">
                                <p>IPFS</p>
                            </li>
                            <li><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/filecoin.webp') }}">
                                <p>Filecoin</p>
                            </li>
                            <li><img class="lazy"
                                    src="{{ asset('images/cryptocurrency-development/tech-stack/pinata.webp') }}">
                                <p>Pinata</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    // $(document).ready(function () {
    //     $('#nav-tabs-wrapper1 a[data-toggle="tab"]').on('click', function (e) {
    //         e.preventDefault();
    //         // Remove 'in active' from all tab panes
    //         $('.tab-pane').removeClass('in active').addClass('fade');
    //         // Add 'in active' to the target pane
    //         $($(this).attr('href')).removeClass('fade').addClass('in active');
            
    //         // Handle nav item active class
    //         $('#nav-tabs-wrapper1 li').removeClass('active');
    //         $(this).parent('li').addClass('active');
    //     });
    // });
    document.addEventListener("DOMContentLoaded", function () {
        const navTabs = document.querySelectorAll('#nav-tabs-wrapper1 a[data-toggle="tab"]');
        const tabPanes = document.querySelectorAll('.tab-pane');

        navTabs.forEach(tab => {
            tab.addEventListener('click', function (e) {
                e.preventDefault();

                // Remove 'in active' from all tab panes and add 'fade'
                tabPanes.forEach(pane => {
                    pane.classList.remove('in', 'active');
                    pane.classList.add('fade');
                });

                // Add 'in active' to the target pane
                const targetPane = document.querySelector(this.getAttribute('href'));
                if (targetPane) {
                    targetPane.classList.remove('fade');
                    targetPane.classList.add('in', 'active');
                }

                // Handle nav item active class
                const navItems = document.querySelectorAll('#nav-tabs-wrapper1 li');
                navItems.forEach(item => item.classList.remove('active'));
                this.parentElement.classList.add('active');
            });
        });
    });
</script>