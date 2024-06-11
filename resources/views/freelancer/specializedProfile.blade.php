<input type="hidden" id="speciality_id_profile" value="{{$speId}}"/>
@foreach($skillsTitle as $data)
<div class="development_select_items">
    <div class="position-relative my-3">
        <h4 class="font_13 color_black font_weight_500">{{$data->title}}</h4>
        <hr class="position-absolute">
    </div>
    <div class="development_select_item_group">
    <?php
        if(count($data->pivot->pivotParent->skills)>0){
            foreach($data->pivot->pivotParent->skills as $key => $skill_sub){
                if($skill_sub->title != $data->title){
                   
    ?>
                          
        <span id="main_skill_subcat_{{$skill_sub->id}}" class="font_12 color_black specialized_skills skill_subcat_{{$skill_sub->id}} @if(in_array($skill_sub->id , $skill_id_array)) checked_skillId @endif " >
            <span  data-id ="{{$skill_sub->id}}" data-skill="{{$data->id}}" id="skill_subcat_{{$skill_sub->id}}"  data-cy="{{$skill_sub->skills_sub}}">
                <i class="fa-solid fa-plus fas me-2"></i>
                <i class="fa-solid fa-check"></i>
            </span>
            {{$skill_sub->skills_sub}}
        </span>

    <?php }}}?>
        
    </div>
</div>
@endforeach   