@extends('layouts.app')
@section('content')
<section class="client_job_post">
    <div class="container">
        <div class="client_job_post_wrapper border-grey-radius mt-5">
            <form id="project_review" method="post" enctype="multipart/form-data" class="form-control" action="{{ route('project.review', ['id' => $project->id]) }}">
                @csrf
                <div class="client_job_post_header d-flex justify-content-between align-items-center p-4">
                    <div class="client_job_post_title">
                        <h2>Review</h2>
                    </div>
                    <div class="post_job_btn">
                        <button type="submit" class="green_btn text-decoration-none d-block post">Save
                            Job Post</button>
                    </div>
                </div>

                <div class="client_job_post_content">
                    <div class="client_detail_block border-bottom pb-4">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="client_details px-4">
                                    <div class="d-flex">
                                        <div class="pe-2">
                                            <img src="{!! !empty(Auth::user()->profile_photo_path)
                                                    ? asset('/storage/images/client_profile/' . Auth::user()->profile_photo_path)
                                                    : asset('images/user_default.jpeg') !!}">
                                        </div>
                                        <div class="color_black">
                                            <h5 class="font_weight_500 mb-1 font_22 font_weight_600 text-capitalize">{{ Auth::user()->firstname }}
                                                {{ Auth::user()->lastname }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="client_job_post_title_block border-bottom">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="client_message_box p-4">
                                    <h4 class="font_16">Title <span class="asterisk">*</span></h4>
                                    <input type="text" name="title" class="d-block w-100 form-control  @error('title') is-invalid @enderror" value="{{ old('title', $project->title) }}" />
                                    <div class="text-danger error" data-error="title"></div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="client_job_post_describe_block color_black">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="p-4">
                                    <h4 class="font_16">Describe your job <span class="asterisk">*</span></h4>

                                    <div class="client_message_box">
                                        <textarea rows="6" name="description" placeholder="Already have a job description? Paste it here!" aria-label="Work Description" value="{{ $project->description }}" class="form-control d-block w-100 font_14">{{ $project->description }}</textarea>
                                        <div class="text-danger error" data-error="description"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 border-bottom">
                                <div class="p-4 pt-0">
                                    <div class="file_input_block">
                                        <div class="file_input w-50 p-1 mb-2">
                                            <div class="d-flex position-relative align-items-center justify-content-center color_green">
                                                <div class="up-icon p-1">
                                                    <i class="fas fa-paperclip"></i>
                                                </div>
                                                <span class="font_14">
                                                    Attach Image(Maximum file size: 5 MB)
                                                </span>
                                                
                                                <input class="position-absolute" accept=".png, .jpg, .jpeg" multiple="multiple" name="filename[]" id="attach_file" type="file" aria-labelledby="attach-file-input-label-1">
                                            </div>

                                        </div>
                                        <div id="file-type-info" class="text-muted mb-4">Supported file types: png, jpg, jpeg</div>
                                        @foreach ($errors->get('filename.*') as $error)
                                        @foreach ($error as $message) 
                                          <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @endforeach
                                        @endforeach
                                        <div class="text-danger error" data-error="filename"></div>
                                        <div class="posting_content_images d-flex flex-wrap mt-3">
                                            @foreach ($projectDetail as $files)
                                            <div class="posting_one_content up_image me-3 col-2 mb-4 position-relative pip_{{ $files->id }}">
                                                <img src="{{ url($files->filename) }}" class="form-control img-fluid p-0 pip_{{ $files->id }}" />
                                                <a href="{{ route('project.image.destroy') }}" class="remove" id="{{ $files->id }}">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div id="" class="posting_content_images_block position-relative d-flex flex-wrap">
                                            <div id="posting_content_images_block" class="d-flex flex-wrap"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client_job_post_category_block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="client_job_post_category_content p-4">
                                    <div class="client_job_post_category_wrapper mb-5">
                                        <h4 class="font_18 mb-2 font_weight_600">Category <span class="asterisk">*</span></h4>
                                        <div class="d-flex font_14">
                                            <p class="mb-0 review_category font_16">{{ $project->specialities->title }}
                                                <a href="" class="edit_draft_icon" data-bs-toggle="modal" data-bs-target="#editcategory">
                                                    <i class="fa-solid fa-pen fas"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
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
                                            <a href="javascript:void(0)" class="edit_draft_icon" id="edit_skill_review">
                                                <i class="fa-solid fa-pen fas"></i>
                                            </a>
                                            <div class="text-danger error" data-error="skill_id"></div>

                                            
                                        </div>
                                    </div>

                                    <div class="client_job_post_scope_wrapper mb-5">
                                        <h4 class="font_18 mb-2 font_weight_600">Scope <span class="asterisk">*</span></h4>
                                        <div class="d-flex font_14">
                                            <input type="hidden" name="duration" value="{{ $project->duration }}" id="hidden_duration" />
                                            <input type="hidden" name="level" value="{{ $project->level }}" id="hidden_level" />
                                            <p class="mb-0 review_scope font_16" name="project_term">{{ $project->type }},
                                                {{ $project->duration == 'more_than_6' ? 'More than 6' : ($project->duration == 'month_3_to_6' ? '3 to 6 months' : ($project->duration == 'less_1' ? 'Less than 1 month' : '1 to 3 months')) }},
                                                {{ $project->level }}
                                                <a href="" class="edit_draft_icon" data-bs-toggle="modal" data-bs-target="#editscope">
                                                    <i class="fa-solid fa-pen fas"></i>
                                                </a>
                                            </p>
                                            <div class="text-danger error" data-error="duration"></div>
                                            <div class="text-danger error" data-error="level"></div>

                                        
                                        </div>
                                    </div>
                                    <div class="client_job_post_budget_wrapper">
                                        <h4 class="font_18 mb-2 font_weight_600">Budget <span class="asterisk">*</span></h4>
                                        <div class="d-flex font_14">
                                            <p class="mb-0 d-inline-block review_budget font_16">
                                                {{ $project->budget == 'project' ? 'Fixed-price : $' . $project->project_budget : 'Hourly: $' . $project->hourly_from . '.00-$' . $project->hourly_to . '.00' }}
                                            </p>
                                            <p>
                                                <a href="" class="edit_draft_icon" data-bs-toggle="modal" data-bs-target="#editbudget">
                                                    <i class="fa-solid fa-pen fas"></i>
                                                </a>
                                                <div class="text-danger error" data-error="budget_check"></div>

                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Edit Category --}}
                        <div class="modal fade editdraft_popup edit_category_popup" id="editcategory" tabindex="-1" aria-labelledby="editcategoryLabel" aria-hidden="true">
                            <form action="" method="post">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content border-0">
                                        <div class="modal-header border-0 mb-4 p-4">
                                            <h5 class="modal-title font_22 color_black" id="editcategoryLabel">Edit
                                                category</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body mb-5 px-4">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="form-label">Category</label>
                                                    <select class="form-select" id="modal_category_id" name="modal_category_id">
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" {{ $project->categories->id == $category->id ? 'selected="selected"' : '' }}>
                                                            {{ $category->title }}
                                                        </option>
                                                        {{-- <option value="{{$categories->id}}">{{$categories->title}}
                                                        </option> --}}
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <input type="hidden" name="hidden_speciality_id" id="hidden_speciality_id" value="" />
                                                <input type="hidden" name="hidden_project_id" id="hidden_project_id" value="{{ $project->id }}" />
                                                <div class="mb-3">
                                                    <label class="form-label">Speciality</label>
                                                    <select class="form-select modal_speciality_id_review" id="modal_speciality_id" name="modal_speciality_id">

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-0 px-4">
                                            <button type="button" class="font_15 border-0 font_weight_500 me-4" data-bs-dismiss="modal">Cancel</button>
                                            <a href="javascript:void(0)" class="green_btn text-decoration-none font_15 apply_btn" data-id="{{ $project->id }}">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
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

                        {{-- Edit Scope --}}
                        <div class="modal fade editdraft_popup editscope_popup" id="editscope" tabindex="-1" aria-labelledby="editscopeLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <div class="modal-header border-0 mb-4 p-4">
                                        <h5 class="modal-title font_22 color_black" id="editscopeLabel">Edit scope
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body mb-5 px-4">
                                        <div class="row">
                                            <div class="text-danger error" data-error="duration"></div>

                                            <div class="col-sm-12 posting_three_content pe-0 ps-3">
                                                <div class="project_term">
                                                    <div class="project_term_radio custom_radio_btn">
                                                        <label for="project_term_1" class="position-relative d-flex mb-3 ">
                                                            <input type="radio" name="project_term" id="project_term_1" value="large" {{ $project->type == 'large' ? 'checked' : '' }}>
                                                            <span class="mid_dot_parent"></span>
                                                            <div class="label_content">
                                                                <p class="font_14 color_black font_weight_500">Large
                                                                </p>
                                                                <p class="m-0 font_11 color_black">Longer term or
                                                                    complex
                                                                    initiatives (ex. design and build a full website)
                                                                </p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="project_term_radio custom_radio_btn">
                                                        <label for="project_term_2" class="position-relative d-flex mb-3 ">
                                                            <input type="radio" name="project_term" id="project_term_2" value="medium" {{ $project->type == 'medium' ? 'checked' : '' }}>
                                                            <span class="mid_dot_parent"></span>
                                                            <div class="label_content">
                                                                <p class="font_14 color_black font_weight_500">Medium
                                                                </p>
                                                                <p class="m-0 font_11 color_black">Well-defined
                                                                    projects (ex. a
                                                                    landing page)</p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="project_term_radio custom_radio_btn">
                                                        <label for="project_term_3" class="position-relative d-flex mb-3 ">
                                                            <input type="radio" name="project_term" id="project_term_3" value="small" {{ $project->type == 'small' ? 'checked' : '' }}>
                                                            <span class="mid_dot_parent"></span>
                                                            <div class="label_content">
                                                                <p class="font_14 color_black font_weight_500">Small
                                                                </p>
                                                                <p class="m-0 font_11 color_black">Quick and
                                                                    straightforward
                                                                    tasks (ex. update text and images on a webpage)</p>
                                                            </div>
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="project_term_length font_13 fw-normal color_black"></div>
                                                <div class="project_level_experience mt-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0 px-4">
                                        <button type="button" class="font_15 border-0 font_weight_500 me-4" data-bs-dismiss="modal">Cancel</button>
                                        <a href="javascript:void(0)" class="green_btn text-decoration-none font_15 edit_scope" data-id="{{ $project->id }}">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Edit Budget --}}
                        <div class="modal fade editdraft_popup budget_edit_popup" id="editbudget" tabindex="-1" aria-labelledby="editbudgetLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <div class="modal-header border-0 mb-4 p-4">
                                        <h5 class="modal-title font_22 color_black" id="editbudgetLabel">Edit budget
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body mb-5 px-4">
                                        <div class="project_budget_rate">
                                            <div class="signup_btn_box mt-4 d-md-flex justify-content-between">
                                                <div class="btn_box p-3 {{ $project->budget == 'hourly' ? 'active' : '' }}" data-text="hourly_rate">
                                                    <div class="btn_box_inner d-flex justify-content-between">
                                                        <div class="signup_btn mb-3">
                                                            <img src="{{asset('images/frontend/signup_btn.png')}}" class="w-100">
                                                        </div>
                                                        <div class="signup_btn_input d-flex justify-content-center align-items-center">
                                                            <label for="hourly_rate" class="position-relative">
                                                                <input type="radio" name="budget_check" class="budget" id="hourly_rate" value="hourly" {{ $project->budget == 'hourly' ? 'checked' : '' }}>
                                                                <span class="d-inline-block"><i class="mid_dot"></i></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p class="text-start font_weight_500">Hourly rate</p>
                                                </div>
                                                <div class="btn_box p-3 {{ $project->budget == 'project' ? 'active' : '' }}" data-text="project_budget">
                                                    <div class="btn_box_inner d-flex justify-content-between">
                                                        <div class="signup_btn mb-3">
                                                            <img src="{{asset('images/frontend/signup_btn.png')}}" class="w-100">
                                                        </div>
                                                        <div class="signup_btn_input d-flex justify-content-center align-items-center">
                                                            <label for="project_budget" class="position-relative">
                                                                <input type="radio" name="budget_check" class="budget" id="project_budget" value="project" {{ $project->budget == 'project' ? 'checked' : '' }}>
                                                                <span class="d-inline-block"><i class="mid_dot"></i></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p class="text-start font_weight_500">Project budget</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project_hour_budget {{ $project->budget == 'project' ? 'noactive' : '' }}">
                                            <div class="d-flex">
                                                <div class="me-4 d-flex align-items-center">
                                                    <label for="" class="form-label font_14 fw-normal color_grey position-relative">
                                                        From
                                                        <input type="number" class="form-control text-end font_16 font_weight_500 color_black hourly_from" name="hourly_from" value="{{ $project->hourly_from }}" id="hourly_from" aria-describedby="">
                                                        <i class="fas fa-solid fa-dollar-sign position-absolute color_black font_16"></i>
                                                    </label>

                                                    <div id="emailHelp" class="form-text ms-2 mt-3">/hour</div>
                                                    <div class="text-danger error" data-error="hourly_from"></div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <label for="" class="form-label font_14 fw-normal color_grey position-relative">
                                                        To
                                                        <input type="number" class="form-control text-end font_16 font_weight_500 color_black hourly_to" name="hourly_to" value="{{ $project->hourly_to }}" id="hourly_to" aria-describedby="">
                                                        <i class="fas fa-solid fa-dollar-sign position-absolute color_black font_16"></i>
                                                    </label>
                                                    <div id="emailHelp" class="form-text ms-2 mt-3">/hour</div>
                                                </div>
                                            </div>
                                            <div class="text-danger error" data-error="hourly_to"></div>
                                        </div>
                                        <div class="project_max_budget {{ $project->budget == 'project' ? 'active' : '' }}">
                                            <div class="me-4">
                                                <label for="" class="form-label font_14 fw-normal color_grey position-relative">
                                                    Maximum project budget (USD)
                                                    <input type="text" class="form-control text-end font_16 font_weight_500 color_black" name="fixed" value="{{ $project->project_budget ?? '' }}" id="fixed_budget" aria-describedby="">
                                                    <i class="fas fa-solid fa-dollar-sign position-absolute color_black font_16"></i>
                                                </label>
                                                <div class="text-danger error" data-error="project_budget"></div>

                                            </div>
                                            <p class="font_13 font_weight_500 color_black">You will have the option to
                                                create
                                                milestones which divide your project into manageable phases.</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0 px-4">
                                        <button type="button" class="font_15 border-0 font_weight_500 me-4" data-bs-dismiss="modal">Cancel</button>
                                        <a href="javascript:void(0)" id="budget_val" class="green_btn text-decoration-none font_15 edit_budget">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="loader-section">
        <div class="loader-img">
            <img src="{{asset('images/Spinner-bg.gif')}}" class="">
        </div>
    </div>
</section>

@endsection

@section('before_js')
<script>
    var projectDuration = '<?php echo $project->duration; ?>';
    var projectLevel = '<?php echo $project->level; ?>';
    var catgeory_id = '<?php echo $catgeory_id; ?>'
    var project_specialty_id = '<?php echo $project->specialty_id; ?>'
    var imgUpload = document.getElementById('attach_file'),
        imgPreview = document.getElementById('posting_content_images_block'),
        totalFiles, previewTitle, previewTitleText, img;
    var selectedFiles = []; // Array to store selected files
    imgUpload.addEventListener('change', previewImgs, true);

    function previewImgs(event) {
        totalFiles = imgUpload.files.length;
        if (!!totalFiles) {
            imgPreview.classList.remove('img-thumbs-hidden');
        }
        // Clear selected files array
        selectedFiles = [];
        for (var i = 0; i < totalFiles; i++) {
            selectedFiles.push(event.target.files[i]); // Add file to selectedFiles array
            wrapper = document.createElement('div');
            wrapper.classList.add('col-2');
            wrapper.classList.add('wrapper-thumb-list');
            removeBtn = document.createElement("span");
            closeBtn = document.createElement("i");
            removeBtn.appendChild(closeBtn);
            removeBtn.classList.add('remove-btn');
            closeBtn.classList.add('fa');
            closeBtn.classList.add('fa-times');
            img = document.createElement('img');
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add('img-preview-thumb');
            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            imgPreview.appendChild(wrapper);

            $('.remove-btn').click(function() {
                $(this).parent('.wrapper-thumb-list').remove();
                 // Update file input: remove the corresponding file
                var index = Array.from(imgPreview.children).indexOf(wrapper);
                console.log(index);
                if (index !== -1) {
                    selectedFiles.files.splice(index, 1);
                }
            });

        }
    }
    $('#project_review').submit(function(e) {
        e.preventDefault(); // Prevent normal form submission
        const formData = new FormData($(this)[0]);
        formData.delete("filename[]");

        selectedFiles.forEach(function(file) {
            formData.append('filename[]', file);
        });
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('.loader-section').show();
            },
            success: function(response) {

                // Hide loader

                // Handle success response
                if (response.status == "true") {
                    setTimeout(function () {
                        location.href = response.url+'?statuses=all';
                        $('.loader-section').hide();

                    }, 1000);
                } else {
                    $("#fileserror").text(response.errors);
                    $('.loader-section').hide();
                }

                // Optionally, redirect or update UI
            },
            error: function(xhr, status, error) {

              
                // Handle error response
                if (error == 'Content Too Large') { // Check for Payload Too Large (HTTP 413)
                    let errorDiv = $(`.error[data-error="filename"]`);
                    if (errorDiv.length) {
                        errorDiv.text('File size exceeds the limit.');
                    }
                }

                var jsonResponse = JSON.parse(xhr.responseText);
                if (jsonResponse.errors) {
                    $(".error").text("");
                    if (error.status == 413) { // Check for Payload Too Large (HTTP 413)
                        let errorDiv = $(`.error[data-error="filename"]`);
                        if (errorDiv.length) {
                            errorDiv.text('File size exceeds the limit.');
                        }
                    }else{
                        // let errors = error.responseJSON.errors;
                        for (let key in jsonResponse.errors) {
                           
                            var errorMessages = jsonResponse.errors[key];
                            var errorDiv = $(`.error[data-error="${key}"]`);
                            if (errorDiv.length) {
                                errorDiv.text(errorMessages[0]); // Display only the first error message
                            }
                            if(errorMessages[0] == 'The filename.0 failed to upload.'){
                                let errorDiv = $(`.error[data-error="filename"]`);
                                if (errorDiv.length) {
                                    errorDiv.text('File size exceeds the limit.');
                                }
                            }


                            let errorfrom = $(`.form-control[data-name="${key}"]`);
                            if (errorfrom.length) {
                                errorfrom.addClass("is-invalid");
                            }
                        }
                    }
                }
                  // Hide loader
                  setTimeout(function () {
                        $('.loader-section').hide();
                }, 1000);                
            }
        });
    });

</script>
@endsection