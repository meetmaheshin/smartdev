<section class="travel-app">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h3> <strong>{{ $title }}</strong></h3>
                    <hr>
                    <p>{{ $desc }}</p>
                </div>
            </div>
            @foreach($cards as $key => $card)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 @if($key == 6) col-lg-offset-2 @endif">
                    <div class="travel-app-items">
                        <div class="icons"><img class="lazy" src="{{ asset('images/'. $card['image']) }}"></div>
                        <p>
                            <strong>{{ $card['title'] }}</strong>
                            {{ $card['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>