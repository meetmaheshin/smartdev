@extends('layouts.freelance_register')
@section('content')


<div class="container my-5">
    <div class="up-card">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="w-100 m-0 font_weight_600">Profile</h5>
            {{-- <button class="change_c_details border-0 bg-transparent"><i class="fas fa-pen fade_edit_btn"></i></button> --}}
        </div>
        <div class="d-flex my-4 justify-content-center flex-column align-items-center">
            <label for="client-user-file-upload">
                <img class="m-0 mb-3 rounded-circle object-fit-cover" src="{{ $clientInfo->profile_photo_path ?  asset('/storage/thumbnail/client_profile/'.$clientInfo->profile_photo_path) : asset('images/user_default.jpeg') }}" id="client-user-preview-selected-image" width="145" height="145" />
            </label>
            <div>Upload Profile Photo</div>
            <div class="text-danger error" data-error="filename"></div>
        </div>

        <div id="progress-bar" class="hidden">
            <div id="progress"></div>
        </div>
    
        <hr class="grey_hr_full_width">
        <div class="client_user_details_edit">
            <form id="storeAccountInfo" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="firstName">First Name <span class="asterisk">*</span></label>
                        <input class="form-control" id="firstName" type="text" placeholder="First Name" name="firstName" value="{{ $clientInfo->firstname }}" />
                        <div class="text-danger error" data-error="firstName"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="lastName">Last Name <span class="asterisk">*</span></label>
                        <input class="form-control" id="lastName" type="text" placeholder="Last Name" name="lastName" value="{{ $clientInfo->lastname }}" />
                        <div class="text-danger error" data-error="lastName"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="email" class="form-select" aria-label="Country">Email</label>
                        <input class="form-control" id="email" type="text" placeholder="Last Name" name="email" value="{{ $clientInfo->email }}" readonly />
                        {{-- <div class="text-danger error" data-error="email"></div> --}}
                    </div>
                    <input type="file" id="client-user-file-upload" name="client-user-file-upload" accept="image/*" onchange="clientUserPreviewImage(event);" style="display:none;" disabled />
                    <div class="mt-3">
                        {{-- <span class="open_btn font-15 font_weight_600 bg-transparent border-0 p-2 details_cancel_btn">Back</span> --}}
                        <a class="back_btn text-decoration-none" href="{{route('create_client.company_details')}}">Back</a>
                        <button class="up_green_btn me-4 details_save_btn" type="submit">Next, Location</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>


$("#client-user-file-upload").prop("disabled", false);
    $("#client-user-preview-selected-image").toggleClass(
        "green_edit cursor-pointer"
    );


$("#storeAccountInfo").on("submit", function (e) {
    e.preventDefault();
    
    // Show the progress bar
    $("#progress-bar").removeClass("hidden");
    
    var formData = new FormData(this);
    var files = $("#client-user-file-upload")[0].files;
    
    // Check file selected or not
    if (files.length > 0) {
        formData.append("filename", files[0]);
    }
    
    var other_data = $("#storeAccountInfo").serializeArray();
    $.each(other_data, function (key, input) {
        formData.append(input.name, input.value);
    });

    $.ajax({
        type: "POST",
        url: "/client/store-account-info",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token here
        },
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            // Upload progress
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    percentComplete = parseInt(percentComplete * 100);
                    
                    // Update the progress bar
                    $("#progress").css("width", percentComplete + "%");
                    
                    if (percentComplete === 100) {
                        $("#upload-status").removeClass("hidden");
                    }
                }
            }, false);
            return xhr;
        },
        success: function (response) {
            window.location.href = "{{ route('create_client.location') }}";
    
        },
        error: function (error) {
            $(".error").html("");
            let errors = error.responseJSON.errors;
            for (let key in errors) {
                let errorDiv = $(`.error[data-error="${key}"]`);
                if (errorDiv.length) {
                    errorDiv.text(errors[key][0]);
                } else {
                    errorDiv.text("");
                }
            }
        }
    });
});

const clientUserPreviewImage = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files;
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length;
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0]);
        /**
         * Select the image preview element.
         */
        const clientUserImagePreviewElement = document.querySelector(
            "#client-user-preview-selected-image"
        );
        /**
         * Assign the path to the image preview element.
         */
        clientUserImagePreviewElement.src = imageSrc;
        /**
         * Show the element by changing the display value to "block".
         */
        clientUserImagePreviewElement.style.display = "block";
    }
};

</script>

@endsection