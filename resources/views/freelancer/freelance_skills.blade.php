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
                            @if(count($selectedSkills) > 0)
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
                            @endforelse
                        </select>
                        <span class="position-absolute top-100 end-0">Max 15 skills</span>
                        @if($errors->has('skills'))
                        <div class="error" style="color: red">{{ $errors->first('skills') }}</div>
                        @endif
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