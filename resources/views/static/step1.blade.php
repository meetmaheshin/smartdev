<section class="travel-app gray_bg">
   <div class="container">
      <div class="section-title text-center">
         <h3 class="common_h3">
            {{ $title }}
         </h3>
         <hr />
         <p class="text-center">
            {{ $desc }}
         </p>
         <br />
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="main-timeline7">
               <div class="col-md-2 col-sm-4 timeline7">
                  <span class="timeline7-icon">
                     <i class="fa fa">
                        <time>
                           01
                        </time>
                     </i>
                  </span>
                  <div class="border">
                  </div>
                  <div class="timeline7-content">
                     <h4>
                        {{ $card_title_1 }}
                     </h4>
                     <p>
                        {{ $card_desc_1 }}
                     </p>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 timeline7">
                  <div class="timeline7-content">
                     <h4>
                        {{ $card_title_2 }}
                     </h4>
                     <p>
                        {{ $card_desc_2 }}
                     </p>
                  </div>
                  <div class="border">
                  </div>
                  <span class="timeline7-icon">
                     <i class="fa fa">
                        <time>
                           02
                        </time>
                     </i>
                  </span>
               </div>
               <div class="col-md-2 col-sm-4 timeline7">
                  <span class="timeline7-icon">
                     <i class="fa fa">
                        <time>
                           03
                        </time>
                     </i>
                  </span>
                  <div class="border">
                  </div>
                  <div class="timeline7-content">
                     <h4>
                        {{ $card_title_3 }}
                     </h4>
                     <p>
                        {{ $card_desc_3 }}
                     </p>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 timeline7">
                  <div class="timeline7-content">
                     <h4>
                        {{ $card_title_4 }}
                     </h4>
                     <p>
                        {{ $card_desc_4 }}
                     </p>
                  </div>
                  <div class="border">
                  </div>
                  <span class="timeline7-icon">
                     <i class="fa fa">
                        <time>
                           04
                        </time>
                     </i>
                  </span>
               </div>
               <div class="col-md-2 col-sm-4 timeline7">
                  <span class="timeline7-icon">
                     <i class="fa fa">
                        <time>
                           05
                        </time>
                     </i>
                  </span>
                  <div class="border">
                  </div>
                  <div class="timeline7-content">
                     <h4>
                        {{ $card_title_5 }}
                     </h4>
                     <p>
                        {{ $card_desc_5 }}
                     </p>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 timeline7">
                  <div class="timeline7-content">
                     <h4>
                        {{ $card_title_6 }}
                     </h4>
                     <p>
                        {{ $card_desc_6 }}
                     </p>
                  </div>
                  <div class="border">
                  </div>
                  <span class="timeline7-icon">
                     <i class="fa fa">
                        <time>
                           06
                        </time>
                     </i>
                  </span>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix">
         <br />
         <br />
      </div>
      @if($cta_text)
         <div align="center" class="contentall" style="padding-top: 0;">
            <a class="nectar-button medium regular accent-color regular-button nec-btn" data-color-override="false"
               data-hover-color-override="false" data-hover-text-color-override="#fff" href="{{ $cta_link }}" rel="nofollow"
               style="border-radius: 30px !important;" target="_blank">
               <span>
                  {{ $cta_text }}
               </span>
            </a>
            {{-- <a href="#newsletter-form-sec" rel="nofollow"
               style="border-radius: 30px !important; text-transform:none !important;">
               Connect With Our Experts
            </a> --}}
         </div>
      @endif
   </div>
</section>