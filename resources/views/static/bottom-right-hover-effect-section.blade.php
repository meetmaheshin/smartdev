<section class="common_spacing">
    <div class="container">
        <div class="row">
            <h3 class="sec_tit underline text-center" style="width: 100%">{{ $title }}</h3>
            <p class="mt10 mb10 text-center" style="width: 100%">{{ $desc }}</p>
        </div>
        <div class="row mt20">
            @foreach ($cards as $card)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_feature_seven">
                        <div class="single_feature_six_seven_icon">
                            <div class="icon"> <img class="lazy" src="{{ asset('images/'. $card['image']) }}">
                            </div>
                        </div>
                        <div class="single_feature_seven_content">
                            <h4>{{ $card['title'] }}</h4>
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
            @if( !empty($cta_name))
                <div class="cta_mine">
                    <a href="{{ url("$cta_link") }}"
                        class="nectar-button medium regular accent-color regular-button nec-btn"><span>{{ ($cta_name) }}</span></a>
                </div>
            @endif
        </div>
    </div>
</section>