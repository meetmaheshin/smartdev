<section class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <h2 class="sec_tit underline text-center" style="width: 100%">{{ $title }}</h2>
        </div>
        <div class="row first_fet">
            @foreach ($cards as $card)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="tw_feat">
                        <div class="tw_feat_cnt">
                            <h5>{{ $card['title'] }}</h5>
                            <p>{{ $card['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>