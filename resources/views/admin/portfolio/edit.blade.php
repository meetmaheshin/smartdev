@extends('admin.layouts.commonMaster')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Portfolio</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Portfolio</li>
                    </ol>
                </nav>
            </div>
           
        </div>
        <!--end breadcrumb-->
        
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Portfolio</h5>
                <hr/>
                <p>User: {{$portfolio->user->fullname}}</p>
                <form method="post"class="form-control" action="{{ route('admin.portfolio.update') }}">
                @csrf    
                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="portfolio_id" value="{{$portfolio ? $portfolio->id : ''}}" id="portfolio">

                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$portfolio->title}}">
                                        @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" placeholder="Enter description" name="description">{{$portfolio->description}}</textarea>
                                        @error('description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <input type="text" class="form-control" id="role" placeholder="Enter role" name="role" value="{{$portfolio->role}}">
                                        @error('role')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="d-grid">
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
