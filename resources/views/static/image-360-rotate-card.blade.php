<section class="intro_cnt common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <div class="section-title text-center underline" style="width: 100%">
                <div class="sec_tit">
                    <h2> {{ $title }} </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($cards as $index => $card)
                <div class="col-lg-4 col-md-6 col-sm-6 {{ ((count($cards) % 3 == 1) && (count($cards) == $index+1)) ? 'col-lg-offset-4' : '' }}">
                    <div class="serviceBox">
                        <div class="service-icon">
                            <img src="{{ asset('images/'. $card['image']) }}">
                        </div>
                        <div class="service-content">
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <style type="text/css">
                .nec-btn {
                    position: relative !important;
                    color: #fff !important;
                    border-radius: 30px !important;
                    font-size: 11px;
                    text-transform: uppercase !important;
                    transform: scale(1.1, 1.1) !important;
                    transition: all 0.3s ease-out 0s !important;
                    background: #47b475 !important;
                }

                .nec-btn:hover {
                    transform: scale(1, 1) !important;
                    color: #fff !important;
                    background: #00a9e2 !important;
                }

                a.nectar-button.medium.regular.accent-color.regular-button.nec-btn {
                    margin-bottom: 15px !important;
                    display: inline-block;
                    margin-right: 26px !important;
                }

                .contentall a,
                a.home-talk-experts {
                    padding: 10px 20px !important;
                }
            </style>

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
    </div>
</section>