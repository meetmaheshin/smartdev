<div class="common_spacing gray_bg">
    <div class="container">
        <div class="row">
            <h2 class="sec_tit underline text-center" style="width: 100%">{{ $title }}</h2>
        </div>
        <div class="col-md-12 mt30">
            <div class="timeline-center">
                @foreach ($cards as $index => $card)
                    <div class="timeline-row row m-0">
                        <div class="tm-detail tm-det {{ (($index+1) % 2 != 0) ? 'tm-det-right' : 'tm-det-left' }}">
                            <h4 class="mb10 common_h4 tm-det-tit">{{ $card['title'] }}</h4>
                            <ul class="process-list">
                                <li>
                                    <p>{{ $card['desc'] }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tm-icon roadmap-icon-outer"> 
                            <img class="lazy" src="{{ asset('images/'. $card['image']) }}"> 
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    .timeline-center .timeline-row:nth-of-type(odd) .tm-detail {
        margin-left: 150px !important;
    }

    .timeline-center .timeline-row:nth-of-type(even) {
        margin-left: 50% !important;
    }
</style>