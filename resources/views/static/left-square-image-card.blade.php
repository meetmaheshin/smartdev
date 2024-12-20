<section class="common_spacing">
    <div class="container">
        <div class="row mt20">
            <div class="section-title text-center" style="width: 100%">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20" style="width: 100%">{{ $title }}</h2>
                </div>
                <p class="text-center">{{ $desc }}</p>
            </div>
        </div>
        <div class="row mt20 container-center">
            @foreach ($cards as $index => $card)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize">
                    <div class="icon-text-1">
                        <div class="icon-text-icon"><img class="lazy"
                                src="{{ asset('images/'. $card['image']) }}"></div>
                        <div class="icon_content">
                            <h4>{{ $card['title'] }}</h4>
                            <p class="c-grey"> {{ $card['desc'] }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
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