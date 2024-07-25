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
                <h5 class="card-title">Edit Job</h5>
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
                                    
                                    <div class="col-sm-12 border-bottom">
                                        <div class="p-4 pt-0">
                                            <div class="file_input_block">
                                                <div class="file_input w-50 p-1 mb-2">
                                                    <div class="d-flex position-relative align-items-center ">
                                                        <div class="up-icon p-1">
                                                            <i class="fas fa-paperclip"></i>
                                                        </div>
                                                        {{-- <span class="font_14">
                                                            Attach Image (Maximum file size: 5 MB)
                                                        </span> --}}
                                                        <input class="position-absolute" accept=".png, .jpg, .jpeg" multiple="multiple" name="filename[]" id="attach_file" type="file" aria-labelledby="attach-file-input-label-1">
                                                    </div>
                                                </div>
                                                {{-- <div id="file-type-info" class="text-muted mb-4">Supported file types: png, jpg, jpeg</div> --}}
                                                @foreach ($errors->get('filename.*') as $error)
                                                    @foreach ($error as $message) 
                                                        <span class="text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @endforeach
                                                @endforeach
                                                <div class="text-danger error" data-error="filename"></div>
                                                <div class="posting_content_images d-flex flex-wrap mt-3">
                                                    @if(count($project->images)>0)
                                                        @foreach ($project->images as $files)
                                                            <div class="posting_one_content up_image me-3 col-2 mb-4 position-relative pip_{{ $files->id }}">
                                                                <img src="{{ url($files->filename) }}" class="form-control img-fluid p-0 pip_{{ $files->id }}" />
                                                                <a href="{{ route('project.image.destroy') }}" class="remove" id="{{ $files->id }}">
                                                                    <i class="bx bx-x-circle" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div id="" class="posting_content_images_block position-relative d-flex flex-wrap">
                                                    <div id="posting_content_images_block" class="d-flex flex-wrap"></div>
                                                </div>
                                            </div>
                                        </div>
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

                                    <div class="project_term">
                                        <div class="project_term_radio custom_radio_btn">
                                            <label for="project_term_1" class="position-relative d-flex mb-3 align-items-baseline">
                                                <input type="radio" name="type" id="project_term_1" value="large" @if($project->type=='large') checked @endif>
                                                <span class="mid_dot_parent"></span>
                                                <div class="label_content">
                                                    <p class="font_16 color_black font_weight_600">Large</p>
                                                    <p class="m-0 font_12 color_black">Longer term or complex initiatives (ex. design and build a full website)</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="project_term_radio custom_radio_btn">
                                            <label for="project_term_2" class="position-relative d-flex mb-3 align-items-baseline">
                                                <input type="radio" name="type" id="project_term_2" value="medium" @if($project->type=='medium') checked @endif>
                                                <span class="mid_dot_parent"></span>
                                                <div class="label_content">
                                                    <p class="font_16 color_black font_weight_600">Medium</p>
                                                    <p class="m-0 font_12 color_black">Well-defined projects (ex. a landing page)</p>
                                                </div>
                                            </label>

                                        </div>
                                        <div class="project_term_radio custom_radio_btn">
                                            <label for="project_term_3" class="position-relative d-flex mb-3 align-items-baseline">
                                                <input type="radio" name="type" id="project_term_3" value="small" @if($project->type=='small') checked @endif>
                                                <span class="mid_dot_parent"></span>
                                                <div class="label_content">
                                                    <p class="font_16 color_black font_weight_500">Small</p>
                                                    <p class="m-0 color_black">Quick and straightforward tasks (ex. update text and images on a webpage)</p>
                                                </div>
                                            </label>

                                        </div>
                                    </div>
                                    <div class="project_term_length font_14 fw-normal color_black"></div>
                                    <div class="project_level_experience mt-4"></div>


                                    <div class="client_job_post_skill_wrapper mb-5">
                                        <h4 class="font_18 mb-2 font_weight_600">Skills <span class="asterisk">*</span></h4>
                                        <div class="add_skills d-flex align-items-center">
                                            @if (count($project->ProjectSkill) > 0)
                                            @foreach ($project->ProjectSkill as $dataskills)
                                            <!-- <input type="hidden" name="skill_id[]"
                                                            value="{{ $dataskills->id }}" /> -->
                                            <span class="font_14 d-inline-block">{{ isset($dataskills->skill->skills_sub) ? $dataskills->skill->skills_sub : null }}</span>
                                            @endforeach
                                            @endif
                                            {{-- <a href="javascript:void(0)" class="edit_draft_icon" id="edit_skill_review">
                                                <i class="fa-solid fa-pen fas"></i>
                                            </a> --}}
                                            <div class="text-danger error" data-error="skill_id"></div>

                                            
                                        </div>
                                    </div>
                                    {{-- Edit Skills --}}
                                    <div class="modal fade custom_popup" id="editpostSkills" tabindex="-1" aria-labelledby="editpostSkillsLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border-0">
                                                <div class="modal-header border-0 p-4">
                                                    <h5 class="modal-title font_22 color_black" id="">Edit skills</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body mb-5 p-0 edit_post_skills_body">
                                                    <div class="" id="project_skill">
                                                        <div class="modal_inner">
                                                            <div class="p-4">
                                                                <p class="font_16 color_black">Search skills or add your own</p>
                                                                <div class="seach_skills position-relative">
                                                                    <input class="form-control me-2 search typeahead" name="search" id="search" type="text">
                                                                    <i class="fa fa-search position-absolute" aria-hidden="true"></i>
                                                                    <div id="country_list"></div>
                                                                </div>
                                                            </div>
                                                            <div class="selected_skills d-flex flex-wrap px-4">

                                                                @if (count($all) > 0)
                                                                @foreach ($all as $projectSkills)
                                                                <div id="selected_skills_sub_{{ $projectSkills['skill_id'] }}">
                                                                    <input type="hidden" name="skill_id[]" id="{{ $projectSkills['skill_id'] }}" value="{{ $projectSkills['skill_id'] }}">
                                                                    <span data-skill="{{ $projectSkills['parent_id'] }}" class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub" data-cy="{{ $projectSkills['skill_name'] }}" data-id="{{ $projectSkills['skill_id'] }}">
                                                                        {{ $projectSkills['skill_name'] }}
                                                                        <i class=" fas fa-solid fa-times"></i>
                                                                    </span>
                                                                </div>
                                                                @endforeach
                                                                @endif
                                                            </div>

                                                            <div class="mt-4">
                                                                <div class="accordion" id="accordionExample">
                                                                    {{-- Popular skills --}}
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header" id="heading1">
                                                                            <button class="accordion-button font_weight_500 font_16 color_black" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                                                Popular skills
                                                                            </button>
                                                                        </h2>
                                                                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body px-3 py-3">
                                                                                <div class="posting_accordion_body_content accordion_body_content">
                                                                                    <div class="posting_accordion_inner_content accordion_inner_content">
                                                                                        <?php $newArrskill = 0; ?>
                                                                                        @foreach ($popularSkills as $skills)
                                                                                        @if (!in_array($skills->skills_sub, $single))
                                                                                        <span data-skill="1" class="posting_skill_feature font_12 font_weight_500 color_grey px-3 py-1 skill_sub" id="skill_subcat_{{ $skills->id }}" data-cy="{{ $skills->skills_sub }}" data-id="{{ $skills->id }}">{{ $skills->skills_sub }}
                                                                                            <i class=" fas fa-solid fa-plus"></i>
                                                                                        </span>
                                                                                        @else
                                                                                        <?php $newArrskill += 1;
                                                                                        if (count($popularSkills) == $newArrskill) { ?>
                                                                                            <p class="ps-4 m-0">Looking for more skills? Try the search bar above.</p>
                                                                                        <?php  } ?>

                                                                                        @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="accordionData"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-0 px-4">
                                                    <button type="button" class="font_15 border-0 font_weight_500 me-4" data-bs-dismiss="modal">Cancel</button>
                                                    <a href="javascript:void(0)" class="green_btn text-decoration-none font_15 font_weight_500" id="edit_skils">Save</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-2">
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
	var projectDuration = '<?php echo $project->duration; ?>';
	var projectLevel = '<?php echo $project->level; ?>';
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

    var project_term_length =
            '<p class="font_13 font_weight_500 color_black block_des">How long will your work take?</p>\
                                        <div class="custom_radio_btn project_term_radio">\
                                            <label for="term_length_1" class="position-relative d-flex mb-3 align-items-center">\
                                                <input type="radio" name="duration" id="term_length_1" value="more_than_6"  ' +
            (projectDuration == "more_than_6" ? "checked" : "") +
            '><span class="mid_dot_parent"></span><p class="label_text m-0">More than 6 months</p>\
                                            </label>\
                                        </div>\
                                        <div class="custom_radio_btn project_term_radio">\
                                            <label for="term_length_2" class="position-relative d-flex mb-3 align-items-center">\
                                                <input type="radio" name="duration" id="term_length_2" value="month_3_to_6" ' +
            (projectDuration == "month_3_to_6" ? "checked" : "") +
            '><span class="mid_dot_parent"></span><p class="label_text m-0">3 to 6 months</p>\
                                            </label>\
                                        </div>\
                                        <div class="custom_radio_btn project_term_radio">\
                                            <label for="term_length_3" class="position-relative d-flex mb-3 align-items-center">\
                                                <input type="radio" name="duration" id="term_length_3" value="month_1_to_3" ' +
            (projectDuration == "month_1_to_3" ? "checked" : "") +
            '><span class="mid_dot_parent"></span><p class="label_text m-0">1 to 3 months</p>\
                                            </label>\
                                        </div>';
        var project_user_experience =
            '<p class="font_13 font_weight_500 color_black m-0 block_des">What level of experience will it need?</p><span class="font_11 fw-normal color_grey mb-4 block_des">This won&apos;t restrict any proposals, but helps match expertise to your budget.</span>\
                                        <div class="project_term_radio custom_radio_btn">\
                                            <label for="project_level_1" class="position-relative d-flex mb-3">\
                                                <input type="radio" name="level" value="entry" id="project_level_1" ' +
            (projectLevel == "entry" ? "checked" : "") +
            '>\
                                                <span class="mid_dot_parent"></span>\
                                                <div class="label_content">\
                                                    <p class="font_14 color_black font_weight_500">Entry</p>\
                                                    <p class="m-0 font_11 color_black">Looking for someone relatively new to this field</p>\
                                                </div>\
                                            </label>\
                                        </div>\
                                        <div class="project_term_radio custom_radio_btn">\
                                            <label for="project_level_2" class="position-relative d-flex mb-3">\
                                                <input type="radio" name="level" value="expert" id="project_level_2" ' +
            (projectLevel == "expert" ? "checked" : "") +
            '>\
                                                <span class="mid_dot_parent"></span>\
                                                <div class="label_content">\
                                                    <p class="font_14 color_black font_weight_500">Expert</p>\
                                                    <p class="m-0 font_11 color_black">Looking for comprehensive and deep expertise in this field</p>\
                                                </div>\
                                            </label>\
                                        </div>\
                                        <div class="project_term_radio custom_radio_btn">\
                                            <label for="project_level_3" class="position-relative d-flex mb-3"> \
                                                <input type="radio" name="level" id="project_level_3"  value="level_small" ' +
            (projectLevel == "level_small" ? "checked" : "") +
            '><span class="mid_dot_parent"></span>\
                                                <div class="label_content">\
                                                    <p class="font_14 color_black font_weight_500">Small</p>\
                                                    <p class="m-0 font_11 color_black">Quick and straightforward tasks (ex. update text and images on a webpage)</p>\
                                                </div>\
                                            </label>\
                                        </div>';

        // jQuery(document).on("click", ".project_term_radio input", function () {
        jQuery(document).on("click", ".project_term_radio input", function () {
            let input_change = jQuery(this);
            let input_val = jQuery(this).val();
            let = input_name = jQuery(this).attr("name");
            input_change.hide();
            input_change
                .parents(".project_term_radio")
                .siblings(".project_term_radio")
                .hide();
            input_change.siblings("span").hide();
            input_change.parents(".project_term_radio").show();
            input_change.parents(".project_term_radio").addClass("d-flex");
            input_change
                .parents(".project_term_length")
                .find(".block_des")
                .hide();
            input_change
                .parents(".project_level_experience")
                .find(".block_des")
                .hide();
            input_change.parent().css("pointer-events", "none");
            if (
                input_change
                    .parents(".project_term_radio")
                    .find(".project_term_edit").length > 0
            ) {
                input_change
                    .parents(".project_term_radio")
                    .find(".project_term_edit")
                    .remove();
            } else {
                input_change
                    .parents(".project_term_radio")
                    .append(
                        '<div class="project_term_edit ms-auto pe-5"> <i class="bx bxs-pencil font_16"></i> </div>'
                    );
            }
            if (
                input_val == "small" ||
                input_val == "large" ||
                input_val == "medium"
            ) {
                jQuery(".project_term_length")
                    .empty()
                    .append(project_term_length);
                jQuery(".project_level_experience").empty();
                jQuery(".back-fwd-btn button").attr("disabled", "disabled");
            } else if (
                input_val == "more_than_6" ||
                input_val == "month_3_to_6" ||
                input_val == "month_1_to_3" ||
                input_val == "month_3_to_6" ||
                input_val == "month_1_to_3" ||
                input_val == "less_1"
            ) {
                jQuery(".project_level_experience")
                    .empty()
                    .append(project_user_experience);
                jQuery(".back-fwd-btn button").attr("disabled", "disabled");
            }
            if (input_val == "small") {
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(0)
                    .find("label")
                    .find(".label_text")
                    .text("3 to 6 months");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(0)
                    .find("label")
                    .find("input")
                    .attr("value", "month_3_to_6");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(1)
                    .find("label")
                    .find(".label_text")
                    .text("1 to 3 months");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(1)
                    .find("label")
                    .find("input")
                    .attr("value", "month_1_to_3");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(2)
                    .find("label")
                    .find(".label_text")
                    .text("Less than 1 month");
                if (projectDuration == "less_1") {
                    jQuery(".project_term_length .custom_radio_btn")
                        .eq(2)
                        .find("label")
                        .find("input")
                        .attr("value", "less_1")
                        .attr("checked", "checked");
                } else {
                    jQuery(".project_term_length .custom_radio_btn")
                        .eq(2)
                        .find("label")
                        .find("input")
                        .attr("value", "less_1");
                }
            }
            if (input_name == "duration") {
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(0)
                    .find("label")
                    .find(".label_text")
                    .addClass("font_14 color_black font_weight_500");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(1)
                    .find("label")
                    .find(".label_text")
                    .addClass("font_14 color_black font_weight_500");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(2)
                    .find("label")
                    .find(".label_text")
                    .addClass("font_14 color_black font_weight_500");
            }
            if (
                jQuery("input[name='type']").is(":checked") &&
                jQuery("input[name='duration']").is(":checked") &&
                jQuery("input[name='level']").is(":checked")
            ) {
                jQuery(".back-fwd-btn button").removeAttr("disabled");
            }
        });


        jQuery(document).on("click", ".project_term_edit", function () {
            let edit_button = jQuery(this);
            if (edit_button.parents().hasClass("project_term_length")) {
                jQuery(".project_term_length .custom_radio_btn")
                    .find("label")
                    .find(".label_text")
                    .removeClass("font_14 color_black font_weight_500");
            }
            edit_button.parents(".project_term_radio").removeClass("d-flex");
            edit_button.parent().siblings().show();
            edit_button.parent().show();
            edit_button.parent().find("label").find("input").show();
            edit_button.parent().find("label").find("span").show();
            edit_button.parent().find("label").css("pointer-events", "inherit");
            edit_button.remove();
        });

        $(document).ready(function(){
            $(".remove").click(function (e) {
                e.preventDefault();
                var id = $(this).attr("id");
                console.log(id);
                $.ajax({
                    url: "/admin/imageDestroy",
                    method: "post",
                    data: {	"_token": "{{ csrf_token() }}", id: id },
                    dataType: "json",
                    success(response) {
                        if (response.status == "true") {
                            console.log(response);
                            $(".posting_one_content .remove")
                                .parent(".pip_" + id)
                                .remove();
                        }
                    },
                    error(error) {
                        console.log(error);
                    },
                });

            });
        });



        $(document).ready(function() {
            var imgUpload = document.getElementById('attach_file');
            var imgPreview = document.getElementById('posting_content_images_block');
            var selectedFiles = []; // Array to store selected files

            imgUpload.addEventListener('change', previewImgs, true);

            function previewImgs(event) {
                var totalFiles = imgUpload.files.length;
                if (!!totalFiles) {
                    imgPreview.classList.remove('img-thumbs-hidden');
                }
                // Clear selected files array
                selectedFiles = Array.from(imgUpload.files);

                // Clear the preview
                imgPreview.innerHTML = '';

                for (var i = 0; i < totalFiles; i++) {
                    var wrapper = document.createElement('div');
                    wrapper.classList.add('col-2');
                    wrapper.classList.add('wrapper-thumb-list');

                    var removeBtn = document.createElement("span");
                    var closeBtn = document.createElement("i");
                    removeBtn.appendChild(closeBtn);
                    removeBtn.classList.add('remove-btn');
                    closeBtn.classList.add('fa');
                    closeBtn.classList.add('fa-times');

                    var img = document.createElement('img');
                    img.src = URL.createObjectURL(event.target.files[i]);
                    img.classList.add('img-preview-thumb');

                    wrapper.appendChild(img);
                    wrapper.appendChild(removeBtn);
                    imgPreview.appendChild(wrapper);

                    removeBtn.addEventListener('click', function() {
                        var wrapper = this.parentElement;
                        var index = Array.from(imgPreview.children).indexOf(wrapper);
                        if (index !== -1) {
                            selectedFiles.splice(index, 1);
                            updateFileList();
                            wrapper.remove();
                        }
                    });
                }
            }

            function updateFileList() {
                var dataTransfer = new DataTransfer();
                selectedFiles.forEach(file => {
                    dataTransfer.items.add(file);
                });
                imgUpload.files = dataTransfer.files;
            }
        });
        


        $(document).ready(function(){
            $("#edit_skill_review").on("click", function (e) {
                e.preventDefault();
                var specialityId = $(".modal_speciality_id_review").val();
                var projectId = $("#hidden_project_id").val();
                $("#hidden_speciality_id").val(specialityId);
                $("#editpostSkills").modal("show");
    
                // skill update ajax
                $.ajax({
                    url: "/client/reviewEditSkill",
                    type: "post",
                    data: {
                        _token: $("#_token").val(),
                        specialityId: specialityId,
                        projectId: projectId,
                    },
                    dataType: "json",
                    success: function (response) {
                        $("#accordionData").html(response.data);
                    },
                });
            });
        });





    
</script>
@endsection