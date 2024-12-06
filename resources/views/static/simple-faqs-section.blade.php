<div class="product-section fag_sec common_spacing gray_bg">
    <div class="container">
        <div class="section-top ">
            <div class="section-header text-center">
                <h2 class="section-title mt20 underline common_h3 font_wei" style="color: black !important">FAQ</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="faq-content">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach ($faqs as $key => $faq)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h3 class="panel-title">
                                        <a class role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#faq{{ $key }}">
                                            <span>{{ $faq['ques'] }}</span>
                                        </a>
                                    </h3>
                                </div>
                                <div id="faq{{ $key }}" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">{{ $faq['ans'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>