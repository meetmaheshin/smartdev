@extends('layouts.freelance_register')
@section('content')
<div class="container mt-5">
    <div class="row">
        <form action="{{route('storeSkills')}}" method="POST">
            @csrf
            <div class="col-md-10 offset-md-1">
                <h1>Nearly there! What work are you here to do?</h1>
                <p class="mt-3 mb-5 text-muted font_14">Your skills show clients what you can offer, and help us choose which jobs to recommend to you. Add or remove the ones we've suggested, or start typing to pick more. It's up to you.</p>
                <div>
                    <h6 class="font_weight_600">Your skills</h6>
                    <div class="skills_add position-relative">
                        <select class="skills_select" name="skills[]" style="width: 100%" multiple="multiple">
                            {{-- @if(count($selectedSkills) > 0)
                                @foreach($selectedSkills as $selected)
                                    <option value="{{$selected->skill_id}}">{{$selected->skill->skills_sub}}</option>
                                    @forelse($skill as $skills)
                                        <option value="{{$skills->id}}" {{($skills->id == $selected->skill_id) ? 'selected' : ''}}>{{$skills->skills_sub}}</option>
                                    @empty
                                        <option value="">No Data Found</option>
                                    @endforelse
                                @endforeach
                            @endif
                            @forelse($skill as $skills)
                                <option value="{{$skills->id}}">{{$skills->skills_sub}}</option>
                            @empty
                                <option value="">No Data Found</option>
                            @endforelse --}}
                            @foreach($selectedSkills as $selected)
                                <option value="{{ $selected->skill_id }}" selected>{{ $selected->skill->skills_sub }}</option>
                            @endforeach
                            @foreach($skill as $skills)
                                @if(!$selectedSkills->pluck('skill_id')->contains($skills->id))
                                    <option value="{{ $skills->id }}">{{ $skills->skills_sub }}</option>
                                @endif
                            @endforeach
                        </select>
                            {{-- <span class="position-absolute top-100 end-0">Max 15 skills</span> --}}
                            @if($errors->has('skills'))
                                <div class="error" style="color: red">{{ $errors->first('skills') }}</div>
                            @endif
                    </div>
                </div>
                <div class="mt-4">
                    <h6 class="font_weight_600">Suggested skills</h6>
                    <div class="posting_accordion_inner_content">
                        <?php $newArrskill = 0; ?>
                        @foreach ($suggestedSkills as $skills)
                            <span data-skill="1" class="posting_add_feature font_14 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub main_skills" id="skill_subcat_{{ $skills->id }}" data-cy="{{ $skills->skills_sub }}" data-id="{{ $skills->id }}">
                                {{ $skills->skills_sub }}
                                <i class="fas fa-solid fa-plus"></i>
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex mt-5 justify-content-between">
                    <a class="back_btn text-decoration-none" href="{{route('create_education')}}">Back</a>
                    <input type="submit" class="up_green_btn" value="Now Write Your Bio">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectElement = $('.skills_select');
        const suggestedSkillsContainer = document.querySelector('.posting_accordion_inner_content');

        // Add suggested skill to the select element
        suggestedSkillsContainer.addEventListener('click', function (e) {
            let skillElement;

            // Check if the clicked element is the icon or the skill span
            if (e.target.classList.contains('fa-plus')) {
                skillElement = e.target.closest('.main_skills');
            } else if (e.target.classList.contains('main_skills')) {
                skillElement = e.target;
            }

            if (skillElement) {
                const skillId = skillElement.getAttribute('data-id');
                const skillText = skillElement.getAttribute('data-cy');

                // Add the skill to the select element
                const option = new Option(skillText, skillId, true, true);
                selectElement.append(option).trigger('change');

                // Remove the skill span from suggested skills
                skillElement.remove();
            }
        });

        // Remove skill from the select element and add it back to suggested skills
        selectElement.on('select2:unselect', function (e) {
            const removedSkillId = e.params.data.id;
            const removedSkillText = e.params.data.text;

            // Re-add skill to the suggested skills container
            const skillSpan = document.createElement('span');
            skillSpan.setAttribute('data-skill', '1');
            skillSpan.setAttribute('class', 'posting_add_feature font_14 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub main_skills');
            skillSpan.setAttribute('id', `skill_subcat_${removedSkillId}`);
            skillSpan.setAttribute('data-cy', removedSkillText);
            skillSpan.setAttribute('data-id', removedSkillId);
            skillSpan.innerHTML = `${removedSkillText} <i class="fas fa-solid fa-plus"></i>`;

            suggestedSkillsContainer.appendChild(skillSpan);
        });

        // Initialize Select2 without tags creation and filtering selected items
        selectElement.select2({
            tags: false,  // Disable tag creation from search input
            width: '100%',
            placeholder: "Enter skills here",
            // Custom matcher to filter out selected items
            matcher: function(params, data) {
                // Check if the item is already selected
                if (selectElement.val() && selectElement.val().includes(data.id)) {
                    return null; // Exclude already selected items
                }

                // Default matcher for search term
                if ($.trim(params.term) === '' || data.text.toLowerCase().indexOf(params.term.toLowerCase()) > -1) {
                    return data;
                }

                return null;
            }
        });

        // Handle skill selection from search (removing from suggested if found)
        selectElement.on('select2:select', function (e) {
            const selectedSkillId = e.params.data.id;
            // Find the skill in the suggested section
            const suggestedSkillElement = document.querySelector(`#skill_subcat_${selectedSkillId}`);
            if (suggestedSkillElement) {
                // Remove the skill from the suggested section
                suggestedSkillElement.remove();
            }
        });
    });
</script>
@endsection