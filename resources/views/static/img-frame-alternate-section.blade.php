<section class="common_spacing gray_bg">
    <div class="container">
        <div class="section-title center text-center">
            <h3 class="sec_tit underline text-center">{{ $title }}</h3>
            <p>{{ $desc }}</p>
        </div>
        <div class="time-line">

            @foreach ($cards as $card)
                <div class="timeline">
                    <div class="timeline-content">
                        <span class="year"><img class="lazy" src="images/{{ $card['image'] }}"></span>
                        <div class="inner-content">
                            <h4 class="title">{{ $card['title'] }}</h4>
                            <p class="description">
                                {{ $card['desc'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center cta_min mt20">
            <a rel="nofollow" class="nectar-button medium regular accent-color regular-button nec-btn"
                target="_blank" href="{{ url("$cta1") }}"
                data-color-override="false" data-hover-color-override="false"
                data-hover-text-color-override="#fff"><span>CONNECT WITH OUR EXPERTS</span></a>
            {{-- <a rel="nofollow" href="{{ url("$cta2") }}"
                class="nectar-button medium regular accent-color regular-button nec-btn">
                <span>SCHEDULE A CONSULTATION</span></a> --}}
        </div>
    </div>
</section>