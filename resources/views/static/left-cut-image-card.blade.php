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
        </div>
    </div>
</div>