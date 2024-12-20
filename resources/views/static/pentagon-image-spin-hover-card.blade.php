<section class="common_spacing">
    <div class="container">
        <div class="row">
            <div class="section-title text-center underline" style="width: 100%">
                <div class="sec_tit">
                    <h2>{{ $title }}</h2>
                </div>
            </div>
            <p class="para text-center" style="width: 100%">{{ $desc }}</p>
        </div>
        <div class="row">
            @foreach ($cards as $card)
                <div class="col-md-3 col-sm-6">
                    <div class="feature blue">
                        <div class="feature-icon">
                            <img class="lazy" src="{{ asset('images/'. $card['image']) }}" width="64px">
                        </div>
                        <div class="feature-content">
                            <h3>{{ $card['title'] }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>