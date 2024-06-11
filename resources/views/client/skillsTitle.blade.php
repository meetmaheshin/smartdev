 @foreach ($skillsTitle as $row => $data)
 @php
    $array = explode(",",$data->skills_sub);
@endphp
 <div class="accordion-item heading{{ $data->id }}">
     <h2 class="accordion-header" id="heading{{ $data->id }}">
         <button class="accordion-button font_weight_500 font_16 color_black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$data->id}}" aria-expanded="false" aria-controls="collapse{{$data->id}}">
             {{ $data->title }}
         </button>
     </h2>
     <div id="collapse{{$data->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$data->id}}" data-bs-parent="#accordionExample">
         <div class="accordion-body px-3 py-3">
             <div class="posting_accordion_body_content accordion_body_content">
                 <div class="posting_accordion_inner_content accordion_inner_content">
                     <?php
                        if (count($data->pivot->pivotParent->skills) > 0) {
                            $newArr = 0;
                            foreach ($data->pivot->pivotParent->skills as $key => $skill_sub) {
                                if ($skill_sub->title == $data->title) {
                                    if (!in_array($skill_sub->skills_sub, $single)) { ?>
                                     <span class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub" data-skill="{{ $data->id }}" id="skill_subcat_{{ $skill_sub->id }}" data-cy="{{ $skill_sub->skills_sub }}" data-id="{{ $skill_sub->id }}">{{ $skill_sub->skills_sub }}
                                         <i class=" fas fa-solid fa-plus"></i>
                                     </span>
                                     <?php } else {
                                        $newArr += 1;
                                        if (count($array) == $newArr) { ?>
                                            <p class="ps-4 m-0">Looking for more skills? Try the search bar above.</p>
                                        <?php  }
                                    }
                                }
                            }
                        } ?>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endforeach