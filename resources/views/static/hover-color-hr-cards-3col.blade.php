<section class="cost even-space overlay-bg" id="templates">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2 class="title"><strong class="title-th">{{ $title }}</strong> </h2>
                    <hr>
                </div>
                <p>{{ $desc }}</p>
            </div>
            <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
                <ul>
                    @foreach ($cards as $card)
                        <li>
                            @if(!empty($card['image']))
                                <div class="icons">
                                    <img class="" src="{{ asset('images/'. $card['image']) }}">
                                </div>
                            @endif
                            <h3 class="serv-tit">{{ $card['title'] }}</h3>
                            <hr>
                            <p>{{ $card['desc'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>