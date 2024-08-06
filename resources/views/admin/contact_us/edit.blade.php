@extends('admin.layouts.commonMaster')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">User</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Contact Us</li>
                    </ol>
                </nav>
            </div>
           
        </div>
        <!--end breadcrumb-->
        
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Contact Us</h5>
                <hr/>
                <form id="project_review" method="post" enctype="multipart/form-data" class="form-control" action="{{ route('admin.contactUs.update', ['id' => $user->id]) }}">
                    
                    @csrf    
                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    <div class="row">
                                        <!-- First Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="firstname" class="form-label">First Name <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="first_name" placeholder="Enter firstname" name="first_name" value="{{$user->first_name}}">
                                            @error('first_name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- Last Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="lastname" class="form-label">Last Name <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="last_name" placeholder="Enter lastname" name="last_name" value="{{$user->last_name}}">
                                            @error('last_name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Phone Number -->
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email <span style="color: red">*</span></label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email" value="{{$user->email}}">
                                            @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        {{-- @if($user->is_admin == 0) --}}
                                        <!-- Title -->
                                        <div class="col-md-6 mb-3">
                                            <label for="title" class="form-label">Description<span style="color: red">*</span></label></label>
                                            <input type="text" class="form-control" id="description" placeholder="Enter Title" name="description" value="{{$user->description}}">
                                            @error('description')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </form>
                
            </div>
            </div>
        </div>


    </div>
</div>
@endsection