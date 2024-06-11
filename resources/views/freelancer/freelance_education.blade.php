@extends('layouts.freelance_register')
@section('content')
<div class="container my-5">
    <div class="row">
        <form action="{{route('storeEducation')}}" method="POST" id="educationForm">
            @csrf

            <div class="col-md-10 offset-md-1">
                <h1>Clients like to know what you know - add your education here.</h1>
                <p class="mt-3 mb-5 text-muted font_14">You don't have to have a degree. Adding any relevant education helps make your profile more visible.</p>
                <!-- mobile Button trigger modal -->
                <div class="d-block d-md-none">
                    <a class="exp_m_btn text-decoration-none w-100 educationModal" data-bs-toggle="modal" data-bs-target="#educationModal"><i class="fas fa-plus"></i> Add Education</a>
                </div>
                <!-- Button trigger modal -->
                <div class="d-none d-md-block educationModal" data-bs-toggle="modal" data-bs-target="#educationModal">
                    <a href="javascript:" class="education_trigger text-decoration-none b-fe-horizontal-scroll-addnew">
                        <div class="fe-rza">
                            <div class="plus_btn up_bg font_14 up-btn-circle"><i class="fas fa-plus"></i></div>
                            Add Education
                        </div>
                    </a>
                </div>
                <div id="show_exp" class="my-4 d-flex overflow-auto w-100">
                    @if(count($show_edu)>0)
                    @foreach($show_edu as $education)
                    <div class="showDataExp_data d-flex mb-2">
                        <div class="d-block w-100">
                            <h4 class="ex_title" id="show_prev_title_{{$education->id}}">{{$education->school}}</h4>
                            <h6 class="ex_company" id="show_prev_company_{{$education->id}}">{{$education->degree}}</h6>
                            <h6 class="ex_year text-muted" id="show_prev_location_{{$education->id}}">{{$education->fieldOfStudy}}</h6>
                        </div>
                        <div class="ed_delete_btn">
                            <a href="javascript:void(0)" class="showDataEdu" data-bs-toggle="modal" data-bs-target="#educationModal" data-id="{{$education->id}}"><i class="fas fa-pen"></i></a>
                            <a href="javascript::void(0)" class="delete-confirm" data-id="{{$education->id}}" action="{{route('deleteEducation')}}"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <!-- Education Modal -->
                <div class="modal fade" id="educationModal" tabindex="-1" aria-labelledby="educationModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="educationModalLabel">Add Education History</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="my-2">
                                    <input type="hidden" id="hiddenId" value="" name="hiddenId" />

                                    <div class="mb-3">
                                        <label class="form-label" for="school">School <span class="asterisk">*</span></label>
                                        <input class="form-control" id="school" name="school" type="text" placeholder="Ex: Boston University" />
                                        <div class="text-danger error" data-error="school"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="degree">Degree <span class="asterisk">*</span></label>
                                        <input class="form-control" id="degree" name="degree" type="text" placeholder="Ex: Bachelors" />
                                        <div class="text-danger error" data-error="degree"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="fieldOfStudy">Field of Study <span class="asterisk">*</span></label>
                                        <input class="form-control" id="fieldOfStudy" name="fieldOfStudy" type="text" placeholder="Ex: Business" />
                                        <div class="text-danger error" data-error="fieldOfStudy"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="date" class="col-form-label">Start Year <span class="asterisk">*</span></label>
                                                <div class="input-group date" id="start_year_datepicker">
                                                    <input type="text" name="start_year" class="form-control date" id="start_year" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-light d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="text-danger error" data-error="start_year"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 end_date_input">
                                            <div class="mb-3">
                                                <label for="date" class="col-form-label">End Year</label>
                                                <div class="input-group date" id="end_year_datepicker">
                                                    <input type="text" name="end_year" class="form-control date" id="end_year" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-light d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="text-danger error" data-error="end_year"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Describe your studies, awards, etc." style="height: 10rem;"></textarea>
                                        <div class="text-danger error" data-error="description"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="d-grid">
                                    <button class="up_green_btn btn-lg" id="submitButton" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if(count($show_edu) <= 0) <div class="mt-4">
                    <div class="form-check nothing_add_btn">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Nothing to add? Check the box and keep going
                        </label>
                    </div>
            </div>
            @endif
            <div class="d-flex mt-5 justify-content-between">
                <a class="back_btn text-decoration-none" href="{{route('create_experience')}}">Back</a>
                <a href="{{route('create_skills')}}" class="up_green_btn text-decoration-none" id="next_education_btn" style="pointer-events:none; background:#e4ebe4;color:#9aaa97;">Next, Add Your Skills</a>
            </div>
    </div>

</div>
</form>
</div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('js/expereince_education.js')}}"></script>
@endsection