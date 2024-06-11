<div class="showDataExp_data d-flex mb-2">
    <div class="d-block w-100">
        <h4 class="ex_title" id="show_prev_title_{{$education->id}}">{{$education->school}}</h4>
        <h6 class="ex_company" id="show_prev_company_{{$education->id}}">{{$education->degree}}</h6>
        <h6 class="ex_year text-muted" id="show_prev_location_{{$education->id}}">{{$education->fieldOfStudy}}</h6>
    </div>
    <div class="ed_delete_btn">
        <a href="javascript:void(0)" class="showDataEdu" data-bs-toggle="modal" data-bs-target="#educationModal" data-id="{{$education->id}}"><i class="fas fa-pen"></i></a>
        <a class="delete-confirm" href="javascript:void(0)" action="{{route('deleteEducation')}}" data-id="{{$education->id}}"><i class="fas fa-trash"></i></a>
    </div>
</div> 