<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-header text-center mb30">
                <div class="common_h3 section-title">
                    <h2 class="sec-tit">{{ $title }}</h2>
                    <hr>
                    <p>{{ $desc }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pro_line">
                    @foreach ($cards as $key => $card)
                        <div class="feature_pro">
                            <div class="feature_pro-content">
                                <div class="feature_pro-icon"></div> <span class="feature_pro-year">0{{ $key + 1 }}</span>
                                <div class="title">{{ $card['title'] }}</div>
                                <p class="description">{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>