@extends('layouts.freelance_register')
@section('content')
<div class="container mt-5">
    <div class="row">
        <form action="{{route('store_services')}}" method="post">
            @csrf
            <div class="col-md-10 offset-md-1">
                <h1>What are the main services you offer?</h1>
                <p class="mt-3 mb-5 text-muted font_14">Choose at least 1 service that best describes the type of work you do. This helps us match you with clients who need your unique expertise.</p>
                <div class="col-md-7 service_dropdown">
                    <div class="dropdown">
                        <button class="btn w-100 text-start dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select for a service
                        </button>
                        <ul class="dropdown-menu">
                            @if(count($services) > 0)
                            @foreach($services as $datas)
                            <li>
                                <span class="dropdown-item position-relative">{{$datas->title}}
                                    <div class="form-check drop_inner position-absolute">
                                        @foreach($datas->specialties as $speciality)
                                        <div class="whole_check">
                                            <label role="button" class="form-check-label d-flex align-items-center" for="speciality_id_{{$speciality->id}}">
                                                <input role="button" id="speciality_id_{{$speciality->id}}" name="services[]" class="form-check-input m-0 me-2 service_checkbox" type="checkbox" value="{{ $speciality->id }}" data-category-id="{{$datas->id}}" data-cy="{{$speciality->title}}" data-speciality-id="{{ $speciality->id }}" @if(in_array($speciality->id,$selectedServices->pluck('speciality_id')->toArray())) checked @endif
                                                >
                                                {{$speciality->title}}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="position-absolute end-10"><i class="fas fa-chevron-right"></i></div>
                                </span>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                        @if($errors->has('services'))
                        <div class="error" style="color: red">{{ $errors->first('services') }}</div>
                        @endif
                    </div>
                </div>
                <div class="selected_services my-3">
                    <p></p>
                    <div class="selected_services_show">
                        @if(count($selectedServices) > 0)
                        @foreach($selectedServices as $service)
                        <span class="service_badge remove_services" data-cy="{{$service->specialties[0]->title}}" data-speciality-id="{{$service->speciality_id}}" id="{{$service->speciality_id}}">{{$service->specialties[0]->title}}<i class="fas fa-times ms-2"></i></i></span>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="d-flex mt-5 justify-content-between">
                    <a class="back_btn text-decoration-none" href="{{route('create_bio')}}">Back</a>
                    {{-- <a href="{{route('create_rate')}}" class="up_green_btn text-decoration-none">Next, set your rate</a> --}}
                    <input type="submit" value="Next, set your rate" class="up_green_btn text-decoration-none">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/freelancer_dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('js/freelancer_services.js')}}"></script>
@endsection