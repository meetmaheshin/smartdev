<div class="steps" style="background: #e6f4fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="sec_tit underline text-center">{{ $title }}</h3>
                <p class="text-center" style="font-size: 16px;">{{ $desc }}</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul>
                    @foreach ($cards as $card)
                        <li>
                            <div class="steps-item">
                                <span></span>
                                <div class="icons">
                                    <img class="lazy" src="{{ asset('images/'. $card['image']) }}">
                                </div>
                                <h4>{{ $card['title'] }}</h4>
                                <p>{{ $card['desc'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
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
</div>