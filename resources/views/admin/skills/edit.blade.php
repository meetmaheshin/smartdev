@extends('admin.layouts.commonMaster')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Skills</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Skills</li>
                    </ol>
                </nav>
            </div>
           
        </div>
        <!--end breadcrumb-->
        
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Skills</h5>
                <hr/>
                <form method="post"class="form-control" action="{{ route('admin.skills.update') }}">
                @csrf    
                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="skills_id" value="{{$skills ? $skills->id : ''}}" id="skills_id">

                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    @if($skills->id == '')
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Catgeory</label>
                                        <select class="form-select" id="web3_category_id" name="web3_category_id">
                                            @foreach($category as $data)
                                            <option value="{{$data->id}}" >{{$data->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Speciality</label>
                                        <select class="form-select" id="web3_speciality_id" name="web3_speciality_id">
                                            @foreach($speciality as $data)
                                            <option value="{{$data->id}}" >{{$data->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @endif

                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Title</label>
                                        <input type="text" class="form-control popular_title" id="title" placeholder="Enter title" name="title" value="{{$skills->title}}">
                                        @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Skills</label>
                                        <input type="text" class="form-control" id="skills_sub" placeholder="Enter Skills" name="skills_sub" value="{{$skills->skills_sub}}">
                                        @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                           
                    </div><!--end row-->
                </form>
            </div>
            </div>
        </div>


    </div>
</div>
@endsection
