@extends('layouts.app')
@section('content')
<div class="container min_60vh mt-5">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h4 class="font_weight_600">Job Listings</h4>
            <button class="up_green_btn"><a href="{{route('project_started')}}" class="text-light text-decoration-none">Post a New Job</a></button>
        </div>
        <div class="col-12 mt-4">
            <div class="up-card">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="w-100 mb-30">
                            <form action="{{route('project.all_jobs',['statuses' => $job])}}" method="GET">
                                <div class="search_input position-relative">
                                    <input type="hidden" id="status" value="{{$job}}" name="statuses">
                                    <input placeholder="Search for job" type="search" id="gsearch" value="{{request()->get('gsearch') ?? ''}}" name="gsearch">
                                    <div class="search_button">
                                        <button type="submit" class="search_dashboard_page">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 jobs_listdown">
                        @include('client.job_list')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/client_dashboard.js')}}"></script>
@endsection