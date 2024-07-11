@extends('layouts.app')
@section('content')

<section class="posting_step_1 posting_body_content min_60vh mt-4 position-relative">
    <div class="body_ellipse_img position-absolute bottom_img">
        <img src="{{url('images/body_ellipse.png')}}">
    </div>
    <div class="container">
        <div class="row proposal-post mx-md-5">
            <div class="col-lg-6 after-border">
                <div class="title-count mb-4 font_15 font_weight_500">
                    <span class="title-num pe-3">
                        <span class="active-num font_16 ">1</span>
                        <span class="font_13">/4</span>
                    </span>
                    <span class="font_weight_500 color_grey">Title</span>
                </div>
                <div class="posting_step_heading mb-4">
                    <h4 class="font_weight_700">Let's start with a strong title.</h4>
                </div>
                <p class="font_16 color_grey fw-normal">This helps your job post stand out to the right candidates. It's the first thing they'll see, so make it count!</p>
            </div>
            <div class="col-lg-6 create_post">
                <div class="posting_one_content px-lg-4">
                    <form method="POST" id="project_title" action="{{ route('project.title') }}">
                        @csrf
                        <input type="hidden" name="project_id" value="{{Session::get('project_id')}}" id="project_id">
                        <div class="mb-3">
                            <p class="font_16 font_weight_600 mb-1">Write a title for your job post <span class="asterisk">*</span></p>
                            <div class="position-relative">
                                <input class="form-control me-2" type="text" name="title" value="{{ old('title', @$project->title) }}">
                                <div class="text-danger error" data-error="title"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="font_16 font_weight_600 mb-1">Description <span class="asterisk">*</span></p>
                            <div class="position-relative">
                                <textarea class="form-control me-2" name="description" value="{{ old('description', @$project->description) }}" rows="5">{{@$project->description}}</textarea>
                                <div class="text-danger error" data-error="description"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="font_15 font_weight_500 mb-0">Images(Maximum file size: 5 MB)</p>
                            <div id="file-type-info" class="text-muted mb-2">Supported file types: .png, .jpg, .jpeg</div>
                            <div class="position-relative">
                                <input type="file" class="form-control me-2" id="filename" name="filename[]" accept=".png, .jpg, .jpeg" multiple />
                                <span class="text-danger error" id="fileserror" data-error="filename"></span>
                            </div>
                        </div>
                        <div class="row ">
                            @if(count($projectDetail)>0)
                            @foreach($projectDetail as $files)
                            <div class="image-preview-container col-4 mb-4 position-relative pip_{{$files->id}}">
                                <img src="{{url($files->filename)}}" class="form-control img-fluid p-0 pip_{{$files->id}}" />
                                <a href="{{route('project.image.destroy')}}" class="remove" id="{{$files->id}}">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-12">
                                <p class="font_16 font_weight_500 color_black">Project Type<span class="asterisk">*</span></<p>

                                <div class="project_type_radio_content d-flex font_14 font_weight_600 color_grey">
                                    <label for="web3" class="cursor_pointer me-3 position-relative d-flex mb-3  align-items-center">
                                        <input type="radio" name="project_type" id="web3" value="1" @if($project->projectType != 0) checked @endif>
                                        <span class="d-inline-block me-1"><i class="mid_dot"></i></span>Web3
                                    </label>
                                   
                                </div>
                            </div>
                        </div> -->
                        <div class="row d-none web2_speciality">
                            <div class="col-sm-12">
                                <p class="font_16 font_weight_500 color_black ">Web3 Job Speciality <span class="asterisk">*</span></<p>
                                <div class="category_radio_content font font_14 font_weight_600 color_grey">
                                    @foreach($specialty as $key => $data)
                                    <label for="category_{{$data->id}}" class="position-relative d-flex mb-3  align-items-center">
                                        <input type="radio" name="specialty_id" id="category_{{$data->id}}" value="{{$data->id}}" @if($project->specialty_id==$data->id) checked @endif>
                                        <span class="d-inline-block"><i class="mid_dot"></i></span>{{$data->title}}
                                    </label>
                                    @endforeach

                                </div>
                                <div class="text-danger error" data-error="specialty_id"></div>
                                <div class="my-3 mt-4 px-0">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#all_category" class="color_green">See all categories</a>
                                </div>
                            </div>
                        </div>
                        <div class="row web3_speciality">
                            <div class="col-sm-12">
                                <p class="font_16 font_weight_600 color_black">Web3 Job Speciality <span class="asterisk">*</span></<p>
                                <div class="web3_category_radio_content font font_14 font_weight_600 color_grey">
                                    @foreach($web3specialty as $key => $data)
                                    <label for="category_{{$data->id}}" class="cursor_pointer position-relative d-flex mb-2  align-items-center">
                                        <input type="radio" name="specialty_id" id="category_{{$data->id}}" value="{{$data->id}}" @if($project->specialty_id==$data->id) checked @endif>
                                        <span class="d-inline-block"><i class="mid_dot"></i></span>{{$data->title}}
                                    </label>
                                    @endforeach

                                </div>
                                <div class="text-danger error" data-error="specialty_id"></div>
                                <div class="my-3 mt-4 px-0">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#web3_all_category" class="color_green">See all categories</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="back-fwd-btn px-0 d-flex justify-content-between align-items-center">
                                    <a href="{{route('project_started')}}" class="btn">Back</a>
                                    <button type="submit" class="btn btn-sm btn-success continue">Next: Skills</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal" id="all_category">
            <div class="modal-dialog modal-lg">
                <form action="" method="post">
                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h4 class="modal-title">Change Category</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select" id="modal_category_id" name="modal_category_id">
                                    @foreach($category as $categories)
                                    <option value="{{$categories->id}}">{{$categories->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Speciality</label>
                                <select class="form-select" id="modal_speciality_id" name="modal_speciality_id">

                                </select>
                            </div>
                        </div>
                        <div class="modal-footer border-0 back-fwd-btn">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success border-0 apply" data-bs-dismiss="modal">Apply</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal" id="web3_all_category">
            <div class="modal-dialog modal-lg">
                <form action="" method="post">
                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h4 class="modal-title">Change Category</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select" id="modal_web3_category_id" name="modal_web3_category_id">
                                    @foreach($web3_category as $categories)
                                    <option value="{{$categories->id}}">{{$categories->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Speciality</label>
                                <select class="form-select" id="modal_web3_speciality_id" name="modal_web3_speciality_id">

                                </select>
                            </div>
                        </div>
                        <div class="modal-footer border-0 back-fwd-btn">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success border-0 web3_apply" data-bs-dismiss="modal">Apply</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</section>
@endsection

@section('before_js')
<script>
    var project_specialty_id = '{{$project->specialty_id}}';
    var project_specialty_name = '{{@$project->specialities->title}}';
    var project_type = '{{@$project->projectType}}';

    // projectType();
    if (project_specialty_id != '') {
        if ($("input[name='specialty_id']").is(":checked")) {} else {
            var html = '<label for="category_' + project_specialty_id + '" class="position-relative d-flex mb-3 align-items-center"><input type="radio" name="specialty_id" id="category_' + project_specialty_id + '"  value="' + project_specialty_id + '" checked>\
                <span class="d-inline-block"><i class="mid_dot"></i></span>' + project_specialty_name + '</label>';
            if (project_type == 1) {
                $('.web3_category_radio_content').append(html)
            } else {
                $('.category_radio_content').append(html)
            }
        }
    }

    // $("[name=project_type]").click(function() {
    //     projectType();
    // });

    // function projectType() {
    //     var projectVal = $("input[type='radio']:checked").val();
    //     if (projectVal == 1) {
    //         $('.web3_speciality').removeClass("d-none");
    //         $('.web2_speciality').addClass("d-none");
    //     } else {
    //         $('.web3_speciality').addClass("d-none");
    //         $('.web2_speciality').removeClass("d-none");
    //     }
    // }
</script>
@endsection