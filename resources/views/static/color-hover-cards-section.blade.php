<div class="pros-trading common_spacing">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="text-center sec_tit underline">{{ $title }}</h2>
        </div>
        <p class="text-center">{{ $desc }}</p>
        <div class="mt60">
            <div class="row flip-box-row sto-exchange-flip">
                <div class="container-center">
                    @foreach($cards as $key => $card)    
                        <div class="col-md-4 col-sm-6 col-xs-12 equalize">
                            <div class="flip-box">
                                <div class="flip-icon-outer"> <img src="images/{{ $card['image'] }}" class="flip-icon"> </div>
                                <h3 class="flip-tit"><strong>{{ $card['title'] }}</strong></h3>
                                <p class="flip-txt">{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>