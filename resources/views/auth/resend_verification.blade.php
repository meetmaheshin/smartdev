@extends('layouts.user_verify')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-2">
                    <div class="card-header">{{ __('Resend Verification Email') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @elseif (session('info'))
                            <div class="alert alert-info" role="alert">
                                {{ session('info') }}
                            </div>
                        @endif

                        <div class="alert alert-danger" role="alert" id="errorAlert" style="display:none;">
                            <!-- Error messages will be shown here -->
                        </div>

                        <form method="POST" action="{{ route('verification.resend') }}" onsubmit="return validateForm()">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function validateForm() {
            let isValid = true;
            const email = document.getElementById('email');
            const errorAlert = document.getElementById('errorAlert');

            // Hide any existing error message
            errorAlert.style.display = 'none';
            errorAlert.innerHTML = ''; // Clear previous errors

            // Validate email
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email.value.trim())) {
                errorAlert.innerHTML = 'Please enter a valid email address.';
                errorAlert.style.display = 'block';
                isValid = false;
            } 
            return isValid;
        }
        
        // Automatically hide the alert after 5 seconds (5000 milliseconds)
        setTimeout(function() {
            document.querySelectorAll('.alert').forEach(function(alert) {
                alert.style.display = 'none';
            });
        }, 5000); // Adjust the time as needed
    </script>
@endsection