@extends('layouts.freelance_register')
@section('content')
<div class="container my-5">
    <div class="row">
        <form action="{{route('storeExperience')}}" method="POST" id="experienceForm">
            @csrf
            <input type="hidden" id="hiddenId" value="" name="hiddenId" />
            <div class="col-md-10 offset-md-1">
                <h1>If you have relevant work experience, add it here.</h1>
                <p class="mt-3 mb-5 text-muted font_15 font_weight_600">Freelancers who add their experience are twice as likely to win work. But if you're just starting out, you can still create a great profile. Just head on to the next page.</p>
                <!-- mobile Button trigger modal -->
                <div class="d-block d-md-none experienceModal" data-bs-toggle="modal" data-bs-target="#educationModal" id="QuickInfo">
                    <a class="exp_m_btn text-decoration-none w-100"><i class="fas fa-plus"></i> Add Experince</a>
                </div>
                <!-- Button trigger modal -->
                <div class="d-none d-md-block experienceModal" data-bs-toggle="modal" data-bs-target="#educationModal">
                    <a href="javascript:void(0)" class="education_trigger text-decoration-none b-fe-horizontal-scroll-addnew">
                        <div class="fe-rza">
                            <div class="plus_btn up_bg font_14 up-btn-circle"><i class="fas fa-plus"></i></div>
                            Add Experience
                        </div>
                    </a>
                </div>
                <div id="show_exp" class="my-4 d-flex overflow-auto w-100">
                    @if(count($show_exp)>0)
                        @foreach($show_exp as $experiences)
                            <div class="showDataExp_data d-flex mb-2">
                                <div class="mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #108a00" width="60" height="60" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
                                        <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z"/>
                                      </svg>
                                </div>
                                <div class="d-block w-100">
                                    <h4 class="ex_title fw-bold mt-2 md-3" id="show_prev_title_{{$experiences->id}}">{{ strlen($experiences->title) > 45 ? substr($experiences->title, 0, 45) . '...' : $experiences->title }}</h4>
                                    <h6 class="ex_company" id="show_prev_company_{{$experiences->id}}">
                                        {{ strlen($experiences->company) > 40 ? substr($experiences->company, 0, 40) . '...' : $experiences->company }}
                                        | {{ date('F Y', strtotime($experiences->start_date)) }} - 
                                        @if($experiences->end_date != null)
                                            {{ date('F Y', strtotime($experiences->end_date)) }}
                                        @else
                                            Present
                                        @endif
                                    </h6>
                                    <small class="ex_year text-muted" id="show_prev_location_{{$experiences->id}}">{{$experiences->location}} - {{ $experiences->country->name }}</small>
                                    <p class="ex_description mt-2" id="show_prev_description_{{$experiences->id}}">{{ strlen($experiences->description) > 70 ? substr($experiences->description, 0, 70) . '...' : $experiences->description }}
                                    </p>
                                </div>
                                <div class="ed_delete_btn">
                                    <a href="javascript:void(0)" class="showDataExp" data-bs-toggle="modal" data-bs-target="#educationModal" data-id="{{$experiences->id}}"><i class="fas fa-pen"></i></a>
                                    <a href="javascript::void(0)" class="delete-confirm" data-id="{{$experiences->id}}" action="{{route('deleteExperience')}}"><i class="fas fa-trash"></i></a>

                                </div>
                            </div>            
                        @endforeach
                    @endif
                </div>
                <!-- experience Modal -->
                <div class="modal fade" id="educationModal" tabindex="-1" aria-labelledby="educationModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="educationModalLabel">Add Work Experience</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="my-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Title <span class="asterisk">*</span></label>
                                        <input class="form-control" id="title" name="title" type="text" value="" placeholder="Ex: Software Engineer" />
                                        <div class="text-danger error" data-error="title"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="company">Company <span class="asterisk">*</span></label>
                                        <input class="form-control" id="company" name="company" type="text" placeholder="Ex: Microsoft" />
                                        <div class="text-danger error" data-error="company"></div>
                                    </div>
                                    <div class="location_part row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="location">Location <span class="asterisk">*</span></label>
                                                <input class="form-control" id="location" name="location" type="text" value="{{ old('location') }}" placeholder="Ex: London" />
                                                <div class="text-danger error" data-error="location"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 country_input">
                                            <label class="form-label" for="Country">Country <span class="asterisk">*</span></label>
                                            <div class="dropdown">
                                                <select class="form-select" id="country" name="country_id" value="{{ old('country_id') }}">
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $data)
                                                    <option value="{{$data->id}}">
                                                        {{$data->name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-danger error" data-error="country_id"></div>

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="end_date_check" name="end_date_check">
                                            <label class="form-check-label" for="end_date_check">
                                                I am currently working in this role
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="date" class="col-form-label">Start Date <span class="asterisk">*</span></label>
                                                <div class="input-group date" id="start_datepicker">
                                                    <input type="text" name="start_date" class="form-control date" id="start_date" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-light d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="text-danger error" data-error="start_date"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 end_date_input">
                                            <div class="mb-3">
                                                <label for="date" class="col-form-label">End Date</label>
                                                <div class="input-group date" id="end_datepicker">
                                                    <input type="text" name="end_date" class="form-control date" id="end_date" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-light d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="text-danger error" data-error="end_date"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" type="text" placeholder="Description" style="height: 10rem;"></textarea>
                                        <div class="text-danger error" data-error="description"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button> -->
                                <div class="d-grid">
                                    <button class="up_green_btn btn-lg" id="submitButton" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(count($show_exp) <= 0) <div class="mt-4">
                    <div class="form-check nothing_add_btn">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Nothing to add? Check the box and keep going
                        </label>
                    </div>
            </div>
            @endif
            <div class="d-flex mt-5 justify-content-between">
                <a class="back_btn text-decoration-none" href="{{route('create_profile.title')}}">Back</a>
                <a href="{{route('create_education')}}" class="up_green_btn text-decoration-none" id="next_education_btn" style="pointer-events:none; background:#e4ebe4;color:#9aaa97;">Next, Add Your Education</a>
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