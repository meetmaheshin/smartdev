<section class="complimentary-features" style="padding: 60px 0px; background:#f5f5f9;">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
            <div class="section-title">
               <h2 class="title">
                  <strong>
                     {{$title}}
                  </strong>
               </h2>
               <hr />
               <p>
                  {{ $desc }}
               </p>
            </div>
         </div>
         <div class="col-lg-12 text-center col-md-12 col-sm-12 col-xs-12">
            <ul>
               @foreach ($cards as $card)
                  <li>
                     <div class="icons">
                        <img class="lazy" src="{{ asset('images/'. $card['image']) }}" />
                     </div>
                     <div class="content">
                        <h3>
                           {{ $card['title'] }}
                        </h3>
                        <p>
                           {{ $card['desc'] }}
                        </p>
                     </div>
                  </li>
               @endforeach
               
            </ul>
         </div>
         <hr />
         <div class="clearfix">
         </div>
      </div>
   </div>
</section>