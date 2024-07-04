@extends('layouts.app')
@section('content')
<section class="posting_step_3 posting_body_content min_60vh mt-4 position-relative">
    <div class="body_ellipse_img position-absolute bottom_img">
        <img src="{{asset('images/body_ellipse.png')}}">
    </div>
    <div class="container">
        <div class="row proposal-post mx-md-5 mx-3">
            <div class="col-lg-6 after-border">
                <div class="title-count mb-4 font_15 font_weight_500">
                    <span class="title-num pe-3">
                        <span class="active-num font_16 ">4</span>
                        <span class="font_13">/4</span>
                    </span>
                    <span class="font_weight_500 color_grey">Budget</span>
                </div>
                <div class="posting_step_heading mb-4">
                    <h4 class="font_weight_500">Tell us about your budget.</h4>
                </div>
                <p class="font_14 color_grey fw-normal">This will help us match you to talent within your range.</p>
            </div>
            <div class="col-lg-6">
                <form method="POST" id="project_budget" action="{{ route('project.budget') }}">
                    @csrf
                    <input type="hidden" name="project_id" value="{{Session::get('project_id')}}" id="project_id">
                    <div class="posting_four_content px-md-4">
                        <div class="project_budget_rate">
                            <div class="text-danger error" data-error="budget"></div>

                            <div class="signup_btn_box mt-4 d-md-flex justify-content-between">
                                <div class="btn_box p-3 @if($project->budget=='hourly') active @endif" data-text="hourly_rate">
                                    <div class="btn_box_inner d-flex justify-content-between">
                                        <div class="signup_btn mb-3">
                                            <img src="{{asset('images/frontend/signup_btn.png')}}" class="w-100">
                                        </div>
                                        <div class="signup_btn_input d-flex justify-content-center align-items-center">
                                            <label for="hourly_rate" class="position-relative">
                                                <input type="radio" name="budget" value="hourly" id="hourly_rate" @if($project->budget=='hourly') checked @endif>
                                                <span class="d-inline-block"><i class="mid_dot"></i></span>
                                            </label>

                                        </div>
                                    </div>
                                    <p class="text-start font_weight_500">Hourly rate</p>
                                </div>
                                <div class="btn_box p-3 @if($project->budget=='project') active @endif" data-text="project_budget">
                                    <div class="btn_box_inner d-flex justify-content-between">
                                        <div class="signup_btn mb-3">
                                            <img src="{{asset('images/frontend/signup_btn.png')}}" class="w-100">
                                        </div>
                                        <div class="signup_btn_input d-flex justify-content-center align-items-center">
                                            <label for="project_budget" class="position-relative">
                                                <input type="radio" name="budget" value="project" id="project_budget" @if($project->budget=='project') checked @endif>
                                                <span class="d-inline-block"><i class="mid_dot"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="text-start font_weight_500">Project budget</p>
                                </div>
                            </div>
                        </div>

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
                            <div class="text-danger error" data-error="hourly_from"></div>
                            <div class="text-danger error" data-error="hourly_to"></div>
                            <p class="mb-3 font_13 fw-normal color_grey">This is the average rate for similar projects.</p>
                            <p class="font_13 font_weight_500 color_black">Professionals tend to charge $12.00 - $30.00/hour (USD) for ux/ui design projects like yours. Experts may charge higher rates.</p>
                        </div>
                        <div class="project_max_budget">
                            <div class="me-4">
                                <label for="" class="form-label font_14 fw-normal color_grey position-relative">
                                    Maximum project budget (USD) <span class="asterisk">*</span>
                                    <input type="number" class="form-control text-end font_16 font_weight_500 color_black" id="project_budget" name="project_budget" value="{{ old('project_budget', @$project->project_budget) }}">
                                    <i class="fas fa-solid fa-dollar-sign position-absolute color_black font_16"></i>
                                </label>
                            </div>
                            <div class="text-danger error" data-error="project_budget"></div>

                            <p class="font_13 font_weight_500 color_black">You will have the option to create milestones which divide your project into manageable phases.</p>
                        </div>

                        <div class="back-fwd-btn px-0 d-flex justify-content-between">
                            <a href="{{route('project.scope.view')}}" class="btn">Back</a>
                            <button type="submit" class="btn btn-sm btn-success continue border-0 font_weight_500 px-3">Post for Job Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection