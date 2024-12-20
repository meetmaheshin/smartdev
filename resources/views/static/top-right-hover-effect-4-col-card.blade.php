<div class="common_spacing gray_bg">
    <div class="container">
        <div class=" ">
            <h2 class="sec_tit underline text-center">{{ $title }}</h2>
            <p class="text-center" style="font-size: 16px;">{{ $desc }}</p>
        </div>
        <div class="row mt40">
            <div class="container container-center">
                @foreach ($cards as $index => $card)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalize">
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> 
                                <img class="lazy" src="{{ asset('images/'. $card['image']) }}"> 
                            </div>
                            <div class="awesome-features-text">
                                <h4 style="display:block; font-size: 20px; color: #000; padding-bottom: 0px; margin-bottom: 7px;">{{ $card['title'] }}</h4>
                                <p>{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
    </div>
</div>