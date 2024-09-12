@extends('layouts.freelance_register')
@section('content')
<div class="container mt-5">
    <div class="row">
        <form action="{{route('storeSkills')}}" method="POST">
            @csrf
            <div class="col-md-10 offset-md-1">
                <h1>Nearly there! What work are you here to do?</h1>
                <p class="mt-3 mb-5 text-muted font_15 font_weight_600">Your skills show clients what you can offer, and help us choose which jobs to recommend to you. Add or remove the ones we've suggested, or start typing to pick more. It's up to you.</p>
                <div>
                    <h6 class="font_weight_600">Your skills</h6>
                    <div class="skills_add position-relative">
                        <select class="skills_select" name="skills[]" style="width: 100%" multiple="multiple">
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
@endsection