@extends('layouts.app')
@section('content')


<section class="posting_step_2 posting_body_content min_60vh mt-4 position-relative">
    <div class="body_ellipse_img position-absolute bottom_img">
        <img src="{{ asset('images/body_ellipse.png') }}">
    </div>
    <div class="container">
        <div class="row proposal-post mx-md-5 mx-3">
            <div class="col-lg-6 after-border">
                <div class="title-count mb-4 font_15 font_weight_500">
                    <span class="title-num pe-3">
                        <span class="active-num font_16 ">2</span>
                        <span class="font_13">/4</span>
                    </span>
                    <span class="font_weight_500 color_grey">Skills</span>
                </div>
                <div class="posting_step_heading mb-4">
                    <h4 class="font_weight_500">What are the main skills required for your work?</h4>
                </div>
            </div>

            <div class="col-lg-6 create_post">
                <div class="posting_two_content px-md-4">
                    <form method="POST" id="project_skill" action="{{ route('project.skill') }}">
                        @csrf
                        <input type="hidden" name="project_id" value="{{ Session::get('project_id') }}" id="project_id">
                        <p class="font_15 font_weight_500">Search skills</p>
                        <div class="posting_seach_item position-relative">
                            <input class="form-control me-2 search typeahead" name="search" id="search" type="text">
                            <i class="fa fa-search position-absolute" aria-hidden="true"></i>
                            <div id="country_list"></div>
                            <span class="font_12 fw-normal p-3">For the best results, add 3-5 skills</span>
                        </div>
                        <div class="selected_skills d-flex flex-wrap">
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
                        <div class="text-danger error" data-error="skill_id"></div>

                        <div class="posting_two_accordion mt-3 mb-5">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item heading1">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button font_weight_500 font_16 color_black" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            Popular skills
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show " aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-0 pt-0 pb-3">
                                            <div class="posting_accordion_body_content">
                                                <div class="posting_accordion_inner_content">
                                                    <?php $newArrskill = 0; ?>
                                                    @foreach ($popularSkills as $skills)
                                                    @if (!in_array($skills->skills_sub, $single))
                                                    <span data-skill="1" class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub main_skills" id="skill_subcat_{{ $skills->id }}" data-cy="{{ $skills->skills_sub }}" data-id="{{ $skills->id }}">{{ $skills->skills_sub }}
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
                                @foreach ($skillsTitle as $row => $data)
                                @php
                                $array = explode(",",$data->skills_sub);
                                @endphp
                                <div class="accordion-item heading{{ $data->id }}">
                                    <h2 class="accordion-header" id="heading{{ $data->id }}">
                                        <button class="accordion-button font_weight_500 font_16 color_black" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $data->id }}" aria-expanded="false" aria-controls="collapse{{ $data->id }}">
                                            {{ $data->title }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $data->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $data->id }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-0 pt-0 pb-3">
                                            <div class="posting_accordion_body_content">
                                                <div class="posting_accordion_inner_content">

                                                    <?php
                                                    if (count($data->pivot->pivotParent->skills) > 0) {
                                                        $newArr = 0;
                                                        foreach ($data->pivot->pivotParent->skills as $key => $skill_sub) {
                                                            if ($skill_sub->title == $data->title) {
                                                                if (!in_array($skill_sub->skills_sub, $single)) {

                                                    ?>
                                                                    <span class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub main_skills"  data-skill="{{ $data->id }}" id="skill_subcat_{{ $skill_sub->id }}" data-cy="{{ $skill_sub->skills_sub }}" data-id="{{ $skill_sub->id }}">{{ $skill_sub->skills_sub }}
                                                                        <i class=" fas fa-solid fa-plus"></i>
                                                                    </span>
                                                                    <?php } else {
                                                                    $newArr += 1;
                                                                    if (count($array) == $newArr) { ?>
                                                                        <p class="ps-4 m-0">Looking for more skills? Try the search bar above.</p>
                                                    <?php  }
                                                                }
                                                            }
                                                        }
                                                    } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="back-fwd-btn px-0 d-flex justify-content-between">
                                <a href="{{ route('project.title.view') }}" class="btn">Back</a>
                                <button type="submit" class="btn btn-sm btn-success continue border-0" disabled>Next:
                                    Skills</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection