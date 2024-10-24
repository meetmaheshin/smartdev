<section class="perfect-script common_spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="common_h3 text-center font-wei">{{ $title }}</h2>
                    <hr class="mb40">
                    <p class="text-center">{{ $desc }}</p>
                </div>
            </div>
        </div>
        <div class="row mt-20">
            @foreach ($cards as $card)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-auto">
                    <div class="perfect-script-items1">
                        <div class="icon">
                            <img class="lazy" src="images/{{ $card['image'] }}">
                        </div>
                        <div class="content">
                            <h4>{{ $card['title'] }}</h4>

                            <p>{{ $card['desc'] }}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>