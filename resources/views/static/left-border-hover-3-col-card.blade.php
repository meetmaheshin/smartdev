<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <h3 class="sec_tit underline text-center" style="width: 100%">{{ $title }}</h3>
        </div>
        <p class="text-center" style="color: #000;">{{ $desc }}</p>
        <div class="row mt40">
            <div class="container container-center">
                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-4 col-sm-12 m-auto equalize">
                        <div class="featured-icon-box  text-left style3">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon flaticon-air-freight">
                                        <img class="img-fuild lazy" style="width: 65px !important; height:65px !important;"
                                            src="{{ asset('images/'. $card['image']) }}" alt>
                                    </i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h4> {{ $card['title'] }} </h4>
                                </div>
                                <div class="featured-desc"> {{ $card['desc'] }} </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>