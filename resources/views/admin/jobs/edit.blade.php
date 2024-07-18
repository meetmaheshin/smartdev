@extends('admin.layouts.commonMaster')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Job</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Job</li>
                    </ol>
                </nav>
            </div>
           
        </div>
        <!--end breadcrumb-->
        
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit JOB</h5>
                <hr/>
                <form id="project_review" method="post" enctype="multipart/form-data" class="form-control" action="{{ route('admin.jobs.review', ['id' => $project->id]) }}">
                @csrf    
                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter Job title" name="title" value="{{$project->title}}">
                                        @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="description"  name="description" rows="3">{{$project->description}}</textarea>
                                        @error('description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="attach_file" class="form-label">Images</label>
                                        <input name="filename[]" id="attach_file" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                    </div>
                                    <div class="posting_content_images d-flex flex-wrap mt-3">
                                        @if(count($project->images)>0)
                                            @foreach ($project->images as $files)
                                                <div class="posting_one_content up_image me-3 col-2 mb-4 position-relative pip_{{ $files->id }}">
                                                    <img src="{{ url($files->filename) }}" class="form-control img-fluid p-0 pip_{{ $files->id }}" />
                                                    <a href="{{ route('project.image.destroy') }}" class="remove" id="{{ $files->id }}">
                                                        <i class='bx bx-x-circle'></i>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Category</label>
                                            <select class="form-select" id="web3_category_id" name="web3_category_id" disabled>
                                            @foreach($web3_category as $data)
                                            <option value="{{$data->id}}" {{$project->category_id == $data->id  ? 'selected' : ''}} >{{$data->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Speciality</label>
                                            <select class="form-select" id="web3_speciality_id" name="web3_speciality_id" disabled>
                                        </select>
                                    </div>
                                    <!-- <label for="" class="form-label">Type</label> -->

                                    <div class="btn_box @if($project->budget=='project') active @endif" data-text="project_budget">
                                        <label for="project_budget" class="form-label">Project
                                            <input type="radio" name="budgets" value="project" id="project_budget" @if($project->budget=='project') checked @endif>
                                            <span class="d-inline-block"><i class="mid_dot"></i></span>
                                        </label>
                                    </div>
                                    <div class="mb-3 btn_box @if($project->budget=='hourly') active @endif" data-text="hourly_rate">
                                        <label for="hourly_rate" class="form-label">Hourly
                                            <input type="radio" name="budgets" value="hourly" id="hourly_rate" @if($project->budget=='hourly') checked @endif>
                                            <span class="d-inline-block"><i class="mid_dot"></i></span>
                                        </label>
                                    </div>
                                    @error('budget')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="project_hour_budget">
                                        <div class="d-flex">
                                            <div class="me-4 d-flex align-items-center">
                                                <label for="hourly_from" class="form-label font_14 fw-normal color_grey position-relative">
                                                    From <span class="asterisk">*</span>
                                                    <input type="number" name="hourly_from" class="form-control text-end font_16 font_weight_500 color_black" data-name="hourly_from" value="{{ old('hourly_from', @$project->hourly_from) }}" id="hourly_from">
                                                    <i class="fas fa-solid fa-dollar-sign position-absolute color_black font_16"></i>
                                                </label>
                                                <div id="emailHelp" class="form-text ms-2 mt-3">/hour</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <label for="hourly_to" class="form-label font_14 fw-normal color_grey position-relative">
                                                    To <span class="asterisk">*</span>
                                                    <input type="number" name="hourly_to" class="form-control text-end font_16 font_weight_500 color_black" data-name="hourly_to" value="{{ old('hourly_to', @$project->hourly_to) }}" id="hourly_to">
                                                    <i class="fas fa-solid fa-dollar-sign position-absolute color_black font_16"></i>
                                                </label>
                                                <div id="emailHelp" class="form-text ms-2 mt-3">/hour</div>

                                            </div>
                                        </div>
                                        @error('hourly_from')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @error('hourly_to')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="project_max_budget">
                                        <div class="me-4">
                                            <label for="" class="form-label font_14 fw-normal color_grey position-relative">
                                                Maximum project budget (USD) <span class="asterisk">*</span>
                                                <input type="number" class="form-control text-end font_16 font_weight_500 color_black" id="project_budget" name="project_budget" value="{{ old('project_budget', @$project->project_budget) }}">
                                                <i class="fas fa-solid fa-dollar-sign position-absolute color_black font_16"></i>
                                            </label>
                                        </div>
                                        @error('project_budget')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror  
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                           
                    </div><!--end row-->
                </form>
            </div>
            </div>
        </div>


    </div>
</div>
@endsection
@section('js')
<script>
    var project_specialty_id = '{{$project->specialty_id}}';
    var project_cat_id = '{{$project->category_id}}';

    if (project_specialty_id != '') {
        web3SpecialityDropdown(project_cat_id);
    }


    $("#web3_category_id").on("change", function (e) {
        e.preventDefault();
        const catId = $(this).val();
        web3SpecialityDropdown(catId);
    });
    if (jQuery('input[name="budgets"]').is(":checked")) {
        var budgetValue = $('input[name="budgets"]:checked').val();
        if (budgetValue == "project") {
            jQuery(".project_hour_budget").hide();
            jQuery(".project_max_budget").show();
            // $("#hourly_from").val("");
            // $("#hourly_to").val("");
        } else {
            jQuery(".project_hour_budget").show();
            jQuery(".project_max_budget").hide();
            // $("#project_budget").val("");
        }
    }
    jQuery(".btn_box").click(function () {
        var btn_text = jQuery(this).attr("data-text");
        jQuery(".btn_box").removeClass("active");
        jQuery(".btn_box").find("input").prop("checked", false);
        jQuery(this).addClass("active");
        jQuery(this).find("input").prop("checked", true);
        if (btn_text === "hourly_rate") {
            jQuery(".project_hour_budget").show();
            jQuery(".project_max_budget").hide();
        } else if (btn_text === "project_budget") {
            jQuery(".project_max_budget").show();
            jQuery(".project_hour_budget").hide();
        }
    });
    function web3SpecialityDropdown(catId) {
        $.ajax({
            url: "{{route('admin.jobs.getSpeciality')}}",
            type: "post",
            data: {
                _token: $("#_token").val(),
                catId: catId,
            },
            dataType: "json",
            success: function (response) {
                var specialties = response.data;
                $("#web3_speciality_id").empty();


                $.each(specialties, function (key, value) {
                    $("#web3_speciality_id").append(
                        $("<option>", {
                            value: value.id,
                            text: value.title,
                        })
                    );
                });
                $(
                    '#web3_speciality_id [value="' +
                        project_specialty_id +
                        '"]'
                ).attr("selected", "true");
            },
        });
    }
</script>
@endsection