<section id="why_ben" class="tinder-bg common_spacing gray_bg">
    <div class="container container-center">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-title center text-center">
                <h2 class="sec_tit underline text-center">{{ $title }}</h2>
                <p>{{ $desc }}</p>
            </div>
        </div>

        @foreach ($cards as $card)
        <div class="col-md-6 col-sm-12 col-xs-12 equalize">
            <div class="ben_wrap">
                <span><img class="lazy" src="{{ asset('images/'. $card['image']) }}" alt="{{ $card['title'] }}"></span>
                <div class="bent_cnt">
                    <h5>{{ $card['title'] }}</h5>
                    <p>{{ $card['desc'] }}</p>
                </div>
            </div>
        </div>
        @endforeach

        <div class="clearfix"></div>

        @if($cta_1 || $cta_2)
            <div class="text-center cta_min ">
                @if($cta_1)
                <a rel="nofollow"
                    class="nectar-button medium regular accent-color regular-button nec-btn" target="_blank"
                    href="#" data-color-override="false"
                    data-hover-color-override="false" data-hover-text-color-override="#fff"><span>{{ $cta_1 }}</span>
                </a>
                @endif
                @if( $cta_2 )
                    <a rel="nofollow" href="#" class="nectar-button medium regular accent-color regular-button nec-btn"><span>{{ $cta_2 }}</span>
                    </a> 
                @endif
            </div>
        @endif
    </div>
</section>