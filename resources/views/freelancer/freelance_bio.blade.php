@extends('layouts.freelance_register')
@section('content')
<div class="container mt-5">
    <div class="row">
        <form action="{{route('store_bio')}}" method="post">
            @csrf
            <div class="col-md-10 offset-md-1">
                <h1>Great! Now write a bio to tell the world about yourself.</h1>
                <p class="mt-3 mb-5 text-muted font_15 font_weight_600">Help people get to know you at a glance. What work are you best at? Tell them clearly, using paragraphs or bullet points. You can always edit later - just make sure you proofread now!</p>
                <div class="mb-3">
                    <textarea class="form-control bio_sec" placeholder="Help people get to know you at a glance."  type="text" name = 'user_profile_bio' id="user_profile_bio"  rows="6"> {{ old('user_profile_bio',$profileBio->bio) }}</textarea>
                    <!-- Character count message -->
                    <div id="charCount" class="text-muted mt-2" style="font-size: 14px;"></div>
                    @if($errors->has('user_profile_bio'))
                        <span class="error" style="color: red">{{ $errors->first('user_profile_bio') }}</span>
                    @endif
                </div>
                <div class="d-flex mt-5 justify-content-between">
                    <a class="back_btn text-decoration-none" href="{{route('create_skills')}}">Back</a>
                    <input type="submit" class="up_green_btn text-decoration-none" value="Choose Your Area of Work">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
<script>
    // word count in freelancer bio
    $(document).ready(function () {
        let minChars = 50;

        // Function to update the character count message
        function updateCharCount() {
            let bioLength = $('#user_profile_bio').val().length;
            
            if (bioLength < minChars) {
                $('#charCount').text(`At least ${minChars - bioLength} characters`).css('color', 'red');
            } else {
                $('#charCount').text(''); // Clear the message once the requirement is met
            }
        }

        // Run the character count update on page load
        updateCharCount();

        // Update character count on input change
        $('#user_profile_bio').on('input', function () {
            updateCharCount();
        });
    });
</script>
@endsection