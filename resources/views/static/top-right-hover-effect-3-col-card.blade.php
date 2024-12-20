<div class="common_spacing gray_bg">
    <div class="container">
        <div class=" ">
            <h3 class="sec_tit underline text-center">{{ $title }}</h3>
            <p class="text-center">{{ $desc }}</p>
        </div>
        <div class="row mt20">
            <div class="container container-center">
                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-left mb-30">
                            <div class="awesome-features-icon-img">
                                <img class="lazy" src="{{ asset('images/'. $card['image']) }}" alt>
                            </div>
                            <div class="awesome-features-text">
                                <h4>{{ $card['title'] }}</h4>
                                <p>{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>