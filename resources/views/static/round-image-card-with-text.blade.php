<section class="integration">
    <div class="container container-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-title text-center">
                <h2 class="title-th sec_tit underline"> {{ $title }} </h2>
                <p>{{ $desc }}</p>
            </div>
        </div>
        @foreach ($cards as $card)
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 equalize">
                <div class="integration-items">
                    <div class="icons"> <img class="lazy" src="{{ asset('images/'. $card['image']) }}"></div>
                    <p>{{ $card['title'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>