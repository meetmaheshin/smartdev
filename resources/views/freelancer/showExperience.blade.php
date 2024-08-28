<div class="showDataExp_data d-flex mb-2">
    <div class="mx-2">
        <svg xmlns="http://www.w3.org/2000/svg" style="color: #108a00" width="60" height="60" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
            <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z"/>
          </svg>
    </div>
    <div class="d-block w-100">
        <h4 class="ex_title fw-bold mt-2 md-3" id="show_prev_title_{{$experience->id}}">{{ strlen($experience->title) > 45 ? substr($experience->title, 0, 45) . '...' : $experience->title }}</h4>
        <h6 class="ex_company" id="show_prev_company_{{$experience->id}}">{{ strlen($experience->company) > 50 ? substr($experience->company, 0, 50) . '...' : $experience->company }}
            | {{date('F Y', strtotime($experience->start_date))}} - @if(!empty($end_date)) {{date('F Y', strtotime($experience->start_date))}} @else Present @endif</h6>
        <small class="ex_year text-muted" id="show_prev_location_{{$experience->id}}">{{$experience->location}} - {{ $experience->country->name }}</small>
        <p class="ex_description" id="show_prev_description_{{$experience->id}}">{{ strlen($experience->description) > 70 ? substr($experience->description, 0, 70) . '...' : $experience->description }}
        </p>
    </div>
    <div class="ed_delete_btn">
        <a href="javascript:void(0)" class="showDataExp" data-bs-toggle="modal" data-bs-target="#educationModal" data-id="{{$experience->id}}"><i class="fas fa-pen"></i></a>
        <a href="javascript::void(0)" class="delete-confirm" data-id="{{$experience->id}}" action="{{route('deleteExperience')}}"><i class="fas fa-trash"></i></a>

    </div>
</div>