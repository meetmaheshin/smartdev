@extends('layouts.freelance_register')
@section('content')
<div class="container mt-5 create_profile_container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h1 class="font_weight_600">Got it. Now, add a title to tell the world what you do.</h1>
            <p class="mt-3 mb-5 color_black font_15 font_weight_600">It's the very first thing clients see, so make it count. Stand out by describing your expertise in your own words.</p>
            <form action="{{route('storeTitle')}}" method="POST">
                @csrf
                <div class="col-md-9 input_box">
                    <div class="input-group search_input">
                        <label class="color_black font_16 font_weight_600 mb-2">Your professional role</label>
                        <input class="form-control border rounded-0" type="text" id="title" name="title" value="{{ $profile ? $profile->title : old('title') }}" placeholder="Example: Full Stack Developer | Web & Mobile">
                    </div>
                    @error('title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <input type="submit" class="up_green_btn mt-5" value="Next, Add Your Experience">
            </form>
        </div>
    </div>
</div>

@endsection