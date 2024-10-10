<div class="common_spacing">
    <div class="container">
        <div class="text-center">
            <h3 class="sec_tit underline">{{ $title }}</h3>
            <p>{{ $desc }}</p>
        </div>
        <div class="row mt20">
            <div class="container container-center">
                @foreach($cards as $card)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img">
                                <img class="lazy" src="{{ asset('images/'. $card['image']) }}" alt="{{ $card['title'] }}">
                            </div>
                            <div class="awesome-features-text">
                                <p>
                                    <strong style="display:block; font-size: 18px; padding-bottom: 5px;">
                                        {{ $card['title'] }}
                                    </strong>
                                    {{ $card['desc'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center cta_min mt20">
            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
               target="_blank"
               href="https://calendly.com/blockchainappfactory/15min?hide_gdpr_banner=1">
                <span>{{ $cta_1 }}</span>
            </a>
            <a rel="nofollow" href="#newsletter-form-sec"
               class="nectar-button medium regular accent-color regular-button nec-btn">
                <span>{{ $cta_2 }}</span>
            </a>
        </div>
    </div>
</div>
