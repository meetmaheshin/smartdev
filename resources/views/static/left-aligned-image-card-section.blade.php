<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="section-title text-center">
                <div class="sec_tit mb20">
                    <h2 class="section-title underline mb20">{{ $title}}</h2>
                </div>
                <p>
                    {{ $desc }}
                </p>
            </div>
        </div>
        
        <div class="row mt20 container-center">
            @if(!empty($cards))
                @foreach ($cards as $card)
                    <div class="col-md-6 equalize">
                        <div class="icon-text-1">
                            <div class="icon-text-icon"><img class="lazy"
                                src="{{ asset('images/' . $card['image']) }}">
                            </div>
                            <div class="icon_content">
                                <h3>{{ $card['title'] }}</h3>
                                <p class="c-grey">{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
           @endif
        </div>
    </div>
    </div>
</section>