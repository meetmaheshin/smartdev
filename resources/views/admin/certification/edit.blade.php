@extends('admin.layouts.commonMaster')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Certification</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Certification</li>
                    </ol>
                </nav>
            </div>
           
        </div>
        <!--end breadcrumb-->
        
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add Certification</h5>
                <hr/>
                <form method="post"class="form-control" action="{{ route('admin.certification.update') }}">
                @csrf    
                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="certification_id" value="{{$certification ? $certification->id : ''}}" id="certification">

                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$certification->title}}">
                                        @error('title')
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
