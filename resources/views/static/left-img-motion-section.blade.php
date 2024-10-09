<section class="common_spacing">
    <div class="container">
        <div class="row">
            <div class="section-title text-center" style="width: 100%">
                <div class="sec_tit mb20">
                    <h3 class="section-title underline mb20">{{ $title }}</h3>
                </div>
                <p>{{ $desc }}</p>
            </div>
            <div class="testimonials-wrapper container-center mt50">
                @foreach ($cards as $card)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 equalize aos-init aos-animate"
                        data-aos="fade-right" data-aos-delay="600">
                        <div class="testimonials-item">
                            <div class="user">
                                <i class=" "><img class="lazy" src="images/{{ $card['image'] }}"> </i>
                            </div>
                            <div class="testimonials-content">
                                <h4 class="user-name">{{ $card['title'] }}</h4>
                                <div class="txt">
                                    <p>{{ $card['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>