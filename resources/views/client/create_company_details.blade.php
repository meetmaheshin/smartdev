@extends('layouts.freelance_register')
@section('content')
<div class="container my-5">
    <div class="up-card mt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="w-100 m-0 font_weight_600">Company details</h5>
        </div>
        <div class="d-flex my-4 justify-content-center flex-column align-items-center">
            <label for="client-company-file-upload">
                @if ($clientInfo->clientDetails->profile_photo_path ?? '')
                <img class="m-0 mb-3 rounded-circle object-fit-cover" src="{{ asset($clientInfo->clientDetails->profile_photo_path) }}" id="client-company-preview-selected-image" width="145" height="145" />
                @else
                <img class="m-0 mb-3 rounded-circle object-fit-cover" src="{{ asset('images/user_default.jpeg') }}" id="client-company-preview-selected-image" width="145" height="145" />
                @endif
            </label>
            <span>Upload Company Logo</span>
        </div>

        <div class="text-danger error" data-error="client-company-file-upload"></div>
        <hr class="grey_hr_full_width">
        <div class="client_company_details_edit">
            <form id="companyDetails" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="companyName">Company Name <span class="asterisk">*</span></label>
                        <input class="form-control" id="companyName" name="companyName" type="text" placeholder="Company Name" value="{{ $clientInfo->clientDetails->company_name ?? '' }}" />
                        <div class="text-danger error" data-error="companyName"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="website">Website <span class="asterisk">*</span></label>
                        <input class="form-control" id="website" name="website" type="text" value="{{ $clientInfo->clientDetails->website ?? '' }}" />
                        <div class="text-danger error" data-error="website"></div>
                    </div>
                    <input type="file" id="client-company-file-upload" name="client-company-file-upload" accept="image/*" onchange="clientCompanyPreviewImage(event);" style="display:none;" disabled />
                    <div class="col-md-9 mb-3">
                        <label class="form-label" for="addYourIndustry">Add your industry <span class="asterisk">*</span></label>
                        <select class="form-select" id="addYourIndustry" name="addYourIndustry" aria-label="Add your industry">
                            <option value="">Select Industory</option>
                            @foreach ($industries as $industry)
                            <option value="{{ $industry->id }}" {{ ($clientInfo->clientDetails->industry_id ?? '') == $industry->id ? 'selected' : '' }}>
                                {{ $industry->name }}
                            </option>
                            @endforeach
                        </select>
                        <div class="text-danger error" data-error="addYourIndustry"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block">How many people are in your company? <span class="asterisk">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input" id="itsJustMe" type="radio" name="people" value="Its just me" {{ ($clientInfo->clientDetails->people ?? '') == 'Its just me' ? 'checked' : '' }} />
                            <label class="form-check-label" for="itsJustMe">It's just me</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="29Employees" type="radio" name="people" value="2-9 employees" {{ ($clientInfo->clientDetails->people ?? '') == '2-9 employees' ? 'checked' : '' }} />
                            <label class="form-check-label" for="29Employees">2-9 employees</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="1099Employees" type="radio" name="people" value="10-99 employees" {{ ($clientInfo->clientDetails->people ?? '') == '10-99 employees' ? 'checked' : '' }} />
                            <label class="form-check-label" for="1099Employees">10-99 employees</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="1001000Employees" type="radio" name="people" value="100-1000 employees" {{ ($clientInfo->clientDetails->people ?? '') == '100-1000 employees' ? 'checked' : '' }} />
                            <label class="form-check-label" for="1001000Employees">100-1000
                                employees</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="moreThan1000Employees" type="radio" name="people" value="More than 1000 employees" {{ ($clientInfo->clientDetails->people ?? '') == 'More than 1000 employees' ? 'checked' : '' }} />
                            <label class="form-check-label" for="moreThan1000Employees">More than 1000
                                employees</label>
                        </div>
                        <div class="text-danger error" data-error="people"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tagline">Tagline <span class="asterisk">*</span></label>
                        <input class="form-control" id="tagline" name="tagline" type="text" value="{{ $clientInfo->clientDetails->tagline ?? '' }}" placeholder="Tagline" data-sb-validations="" />
                        <div class="text-danger error" data-error="tagline"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="description">Description <span class="asterisk">*</span></label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Description" data-sb-validations="">{{ $clientInfo->clientDetails->description ?? '' }}</textarea>
                        <div class="text-danger error" data-error="description"></div>
                    </div>
                    <div class="mt-3">
                        <button class="up_green_btn me-4" type="submit">Next, Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')

<script>
    // client company profile pic edit
    const clientCompanyPreviewImage = (event) => {
        const companyImageFiles = event.target.files;
        const companyImageFilesLength = companyImageFiles.length;
        if (companyImageFilesLength > 0) {
            const companyImageSrc = URL.createObjectURL(companyImageFiles[0]);
            const clientCompanyImagePreviewElement = document.querySelector(
                "#client-company-preview-selected-image"
            );
            clientCompanyImagePreviewElement.src = companyImageSrc;
            clientCompanyImagePreviewElement.style.display = "block";
        }
    };

    $("#client-company-file-upload").prop("disabled", false);
    $("#client-company-preview-selected-image").toggleClass(
        "green_edit cursor-pointer"
    );

    // store client company details
    $("#companyDetails").on("submit", function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "/client/company-details",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                window.location.href = "{{ route('create_client.profile') }}"; 
            },
            error(error) {
                console.log(error);
                $(".error").text("");
                let errors = error.responseJSON.errors;
                for (let key in errors) {
                    let errorDiv = $(`.error[data-error="${key}"]`);
                    if (errorDiv.length) {
                        errorDiv.text(errors[key][0]);
                    } else {
                        errorDiv.text("");
                    }
                }
            },
        });
    });
</script>


@endsection