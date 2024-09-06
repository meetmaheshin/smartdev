@extends('admin.layouts.commonMaster')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Users</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">list</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Users</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <label for="roleFilter" class="me-2">Filter by Role:</label>
                    <select id="roleFilter" class="form-select" style="width: 150px;">
                        <option value="">All</option>
                        <option value="Freelancer">Freelancer</option>
                        <option value="Client">Client</option>
                    </select>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th> Sno.</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Projects</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $key=> $users)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$users->fullname}}</td>
                                <td>{{$users->is_admin == 1 ? 'Client' : 'Freelancer'}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->phone_no}}</td>
                                <td>
                                    @if($users->is_admin)
                                        <div class="d-flex order-actions">
                                            <a href="{{ route('admin.jobs', ['user_id' => $users->id]) }}" class="ms-3 view-jobs">
                                                {{-- <i class='bx bx-show'></i> --}}
                                                <button class="btn btn-secondary">view</button>
                                            </a>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('admin.user.edit',['id'=>$users->id])}}" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" data-id = '{{$users->id}}' data-url="{{route('admin.user.delete')}}" class="ms-3 delete_row"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      
                    </table>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
@endsection 

