<section class="flowchart common_spacing">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h2 class="small_h3 section-title underline title-th">{{ $title }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pro-timeline">
                    @foreach ($cards as $key => $card)
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="timeline-icon"> 0{{ $key + 1}} </div>
                                <h3 class="title">{{ $card['title'] }}</h3>
                                <p class="description"> {{ $card['desc'] }} </p>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="timeline">
                        <div class="timeline-content">
                            <div class="timeline-icon"> 01 </div>
                            <h3 class="title"></h3>
                            <p class="description"> Determining the party to whom money has to be sent. </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-content">
                            <div class="timeline-icon"> 02 </div>
                            <h3 class="title"></h3>
                            <p class="description"> The transaction is represented online as a block. </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-content">
                            <div class="timeline-icon"> 03 </div>
                            <h3 class="title"></h3>
                            <p class="description"> The block is broadcasted to every party present on the
                                network. </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-content">
                            <div class="timeline-icon"> 04 </div>
                            <h3 class="title"></h3>
                            <p class="description"> The network will approve the transaction soon. </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-content">
                            <div class="timeline-icon"> 05 </div>
                            <h3 class="title"></h3>
                            <p class="description"> The block will be added to the existing blockchain network
                                in a transparent and unalterable manner. </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-content">
                            <div class="timeline-icon"> 06 </div>
                            <h3 class="title"></h3>
                            <p class="description"> The transaction is completed. </p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>