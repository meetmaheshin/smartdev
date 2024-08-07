@extends('layouts.static')
@section('body')
    <style>
        body {
            background: linear-gradient(75deg,#124157 0,#2b81aa 80%);
        }
        .form-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            color: #00796B;
        }
        .form-container p {
            color: #00796B;
        }
        .btn-custom {
            background-color: #00796B;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #004D40;
            color: white;
        }
    </style>
<body>
    @endsection


    @section('content')
    <div class="container d-flex justify-content-center align-items-center py-5" id="contact-us-section">
        <div class="row">
            <div class="col-md-6 p-5">
                <div class="form-container">
                    <h1>Let's have a conversation today!</h1>
                    <p>Our experts are available to discuss your requirements and to become your tech partner</p>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form id="contactForm" action="{{ route('consultation.store') }}" method="post" onsubmit="return validateConsultationForm()">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name *">
                                <small class="error-message text-danger" id="firstNameError" style="display: none;">First Name is required.</small>
                                @error('first_name')
                                    <small class="error-message text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name *">
                                <small class="error-message text-danger" id="lastNameError" style="display: none;">Last Name is required.</small>
                                @error('last_name')
                                    <small class="error-message text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address *">
                            <small class="error-message text-danger" id="emailError" style="display: none;">Valid Email is required.</small>
                            @error('email')
                                <small class="error-message text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="description" name="description" placeholder="What can we description you with *">
                            <small class="error-message text-danger" id="descriptionError" style="display: none;">This field is required.</small>
                            @error('description')
                                <small class="error-message text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="confirmCheck" name="confirmCheck"> Terms and conditions
                            <small class="error-message text-danger" id="confirmCheckError" style="display: none;">The confirm check must be accepted.</small>
                            @error('confirmCheck')
                                <small class="error-message text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-custom btn-block">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="https://d3puhl2t51lebl.cloudfront.net/uploads/2022/12/contact.png" class="img-fluid" alt="Illustration">
            </div>
        </div>
    </div>
    


    <script>
        function validateConsultationForm() {
            let isValid = true;
    
            // Get form elements
            const firstName = document.getElementById('firstName');
            const lastName = document.getElementById('lastName');
            const email = document.getElementById('email');
            const description = document.getElementById('description');
            const confirmCheck = document.getElementById('confirmCheck');
    
            // Get error message elements
            const firstNameError = document.getElementById('firstNameError');
            const lastNameError = document.getElementById('lastNameError');
            const emailError = document.getElementById('emailError');
            const descriptionError = document.getElementById('descriptionError');
            const confirmCheckError = document.getElementById('confirmCheckError');
    
            // Reset error messages
            firstNameError.style.display = 'none';
            lastNameError.style.display = 'none';
            emailError.style.display = 'none';
            descriptionError.style.display = 'none';
            confirmCheckError.style.display = 'none';
    
            // Validate first name
            if (firstName.value.trim() === '') {
                firstNameError.style.display = 'block';
                isValid = false;
            }
    
            // Validate last name
            if (lastName.value.trim() === '') {
                lastNameError.style.display = 'block';
                isValid = false;
            }
    
            // Validate email
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email.value.trim())) {
                emailError.style.display = 'block';
                isValid = false;
            }   
    
            // Validate description field
            if (description.value.trim() === '') {
                descriptionError.style.display = 'block';
                isValid = false;
            }
    
            // Validate not a checkbox
            if (!confirmCheck.checked) {
                confirmCheckError.style.display = 'block';
                isValid = false;
            }
    
            return isValid;
        }


        // Event listeners to clear error messages on input
        document.getElementById('firstName').addEventListener('input', function() {
            document.getElementById('firstNameError').style.display = 'none';
        });

        document.getElementById('lastName').addEventListener('input', function() {
            document.getElementById('lastNameError').style.display = 'none';
        });

        document.getElementById('email').addEventListener('input', function() {
            document.getElementById('emailError').style.display = 'none';
        });

        document.getElementById('description').addEventListener('input', function() {
            document.getElementById('descriptionError').style.display = 'none';
        });

        document.getElementById('confirmCheck').addEventListener('change', function() {
            document.getElementById('confirmCheckError').style.display = 'none';
        });
    </script>
    



@endsection
