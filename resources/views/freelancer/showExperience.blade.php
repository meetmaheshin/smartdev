<div class="showDataExp_data d-flex mb-2">
    <div class="d-block w-100">
        <h4 class="ex_title" id="show_prev_title_{{$experience->id}}">{{$experience->title}}</h4>
        <h6 class="ex_company" id="show_prev_company_{{$experience->id}}">{{$experience->company}}</h6>
        <h6 class="ex_year text-muted" id="show_prev_location_{{$experience->id}}">{{$experience->location}}</h6>
    </div>
    <div class="ed_delete_btn">
        <a href="javascript:void(0)" class="showDataExp" data-bs-toggle="modal" data-bs-target="#educationModal" data-id="{{$experience->id}}"><i class="fas fa-pen"></i></a>
        <a class="delete-confirm" href="javascript:void(0)" data-id="{{$experience->id}}" action="{{route('deleteExperience')}}"><i class="fas fa-trash"></i></a>
    </div>
</div> 