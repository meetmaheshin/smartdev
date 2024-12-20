<section class="common_spacing">
    <div class="container">
        <div class="row">
            <div class="section-title text-center underline" style="width: 100%">
                <div class="sec_tit">
                    <h3>{{ $title }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($cards as $index => $card)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 {{ ((count($cards) % 3 == 1) && (count($cards) == $index+1)) ? 'col-lg-offset-4' : '' }}">
                    <div class="feature-items">
                        <div class="feature_icon"> <img class="" src="{{ asset('images/'. $card['image']) }}"> </div>
                        <h4>{{ $card['title'] }}</h4>
                        <p>{{ $card['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>