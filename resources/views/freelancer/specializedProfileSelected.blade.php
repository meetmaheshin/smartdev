@if(count($skillIdselected)>0)
@foreach($skillIdselected as $key => $selectedSKills)
@if($selectedSKills[1]== $speId)
<span class="posting_remove_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub" data-speciality-id="{{$selectedSKills[1]}}" data-id="{{$key}}">{{$selectedSKills[0]}}
    <i class="fas fa-solid fa-times cursor_pointer"></i>
</span>
@endif
@endforeach
@endif