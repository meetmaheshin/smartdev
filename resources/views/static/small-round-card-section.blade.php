<section class="travel-app" style="background: #f7faff;">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-title text-center">
               <h3>
                  <strong>
                     {{ $title ?? ""}}
                  </strong>
               </h3>
               <hr />
               <p>
                  {{ $desc ?? ""}}
               </p>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            @if(isset($card_title_1) && $card_title_1 != "")
               <div class="travel-app-items">
                  <div class="icons">
                     <img class="lazy" src="{{ asset('images/'. $card_image_1) }}" />
                  </div>
                  <p>
                     <strong>
                        {{ $card_title_1 }}
                     </strong>
                     {{ $card_desc_1 }}
                  </p>
               </div>
            @endif
            @if(isset($card_title_2) && $card_title_2 != "")
               <div class="travel-app-items">
                  <div class="icons">
                     <img class="lazy" src="{{ asset('images/'. $card_image_2) }}" />
                  </div>
                  <p>
                     <strong>
                        {{ $card_title_2 }}
                     </strong>
                     {{ $card_desc_2 }}
                  </p>
               </div>
            @endif
            @if(isset($card_title_3) && $card_title_3 != "")
               <div class="travel-app-items">
                  <div class="icons">
                     <img class="lazy" src="{{ asset('images/' . $card_image_3) }}" />
                  </div>
                  <p>
                     <strong>
                        {{ $card_title_3 }}
                     </strong>
                     {{ $card_desc_3 }}
                  </p>
               </div>
            @endif
            @if(isset($card_title_4) && $card_title_4 != "")
               <div class="travel-app-items">
                  <div class="icons">
                     <img class="lazy" src="{{ asset('images/'. $card_image_4) }}" />
                  </div>
                  <p>
                     <strong>
                        {{ $card_title_4 }}
                     </strong>
                     {{ $card_desc_4 }}
                  </p>
               </div>
            @endif
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            @if(isset($card_title_5) && $card_title_5 != "")
               <div class="travel-app-items">
                  <div class="icons">
                     <img class="lazy" src="{{ asset('images/'. $card_image_5) }}" />
                  </div>
                  <p>
                     <strong>
                        {{ $card_title_5 }}
                     </strong>
                     {{ $card_desc_5 }}
                  </p>
               </div>
            @endif
            @if(isset($card_title_6) && $card_title_6 != "")
               <div class="travel-app-items">
                  <div class="icons">
                     <img class="lazy" src="{{ asset('images/'. $card_image_6) }}" />
                  </div>
                  <p>
                     <strong>
                        {{ $card_title_6 }}
                     </strong>
                     {{ $card_desc_6 }}
                  </p>
               </div>
            @endif
            @if(isset($card_title_7) && $card_title_7 != "")
               <div class="travel-app-items">
                  <div class="icons">
                     <img class="lazy" src="{{ asset('images/'. $card_image_7) }}" />
                  </div>
                  <p>
                     <strong>
                        {{ $card_title_7 }}
                     </strong>
                     {{ $card_desc_7 }}
                  </p>
               </div>
            @endif
            @if(isset($card_title_8) && $card_title_8 != "")
               <div class="travel-app-items">
                  <div class="icons">
                     <img class="lazy" src="{{ asset('images/'. $card_image_8) }}" />
                  </div>
                  <p>
                     <strong>
                        {{ $card_title_8 }}
                     </strong>
                     {{ $card_desc_8 }}
                  </p>
               </div>
            @endif
         </div>
         <div class="col-lg-offset-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            @if(isset($card_title_9) && $card_title_9 != "")
               <div class="travel-app-items">
                  <div class="icons">
                     <img class="lazy" src="{{ asset('images/'. $card_image_9) }}" />
                  </div>
                  <p>
                     <strong>
                        {{ $card_title_9 }}
                     </strong>
                     {{ $card_desc_9 }}
                  </p>
               </div>
            @endif
         </div>
      </div>
   </div>
</section>