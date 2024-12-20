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
                        <div class="awesome-features-wrapper text-center mb-30">
                            <div class="awesome-features-icon-img"> 
                                <img class="lazy" src="{{ asset('images/'. $card['image']) }}"> 
                            </div>
                            <div class="awesome-features-text">
                                <p> <strong style="display:block; font-size: 18px; padding-bottom: 5px;">{{ $card['title'] }}</strong>
                                    {{ $card['desc'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>