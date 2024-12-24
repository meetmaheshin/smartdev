<div class="pros-trading common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <div class="sec_tit underline text-center mb20" style="width: 100%">
                <h2>{{ $title }}</h2>
            </div>
            <p class="font_wei">{{ $desc }}</p>
        </div>
        <div class="mt20">
            <div class="row flip-box-row eto-exchange-flip">
                @foreach ($cards as $index => $card)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="flip-box">
                            <div class="flip-icon-outer"> <img src="{{ asset('images/'. $card['image']) }}" class="flip-icon">
                            </div>
                            <h5 class="flip-tit">{{ $card['title'] }}</h5>
                            <p class="flip-txt">{{ $card['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>