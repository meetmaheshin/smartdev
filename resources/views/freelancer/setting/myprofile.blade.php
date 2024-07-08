@extends('layouts.app')
@section('content')
<section class="profile_contact mt-5">
	<div class="container">
		<div class="row">
			@include("freelancer.setting.setting_sidebar")
            <div class="col-md-9 px-0 px-md-2">
				<h2 class="font_26 mb-4 d-none d-md-block font_weight_600">{{auth()->user()->FullName}}</h2>
				<span class="d-inline-block vertical-align-middle">{{auth()->user()->cities->name}}, {{auth()->user()->country->name}} -  {{$timezone}}</span>
            </div>
        </div>
        <div class="span-md-4"></div>
        <div class="span-12 span-md-8"></div>
	</div>
</section>
@endsection