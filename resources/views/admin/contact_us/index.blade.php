@extends('admin.layouts.commonMaster')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Contact Us</div>
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
        <h6 class="mb-0 text-uppercase">Contact Us</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th> Sno.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Telegram_id</th>
                                <th>Description</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key=> $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->telegram_id}}</td>
                                <td>{{$user->description}}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('admin.contactUs.edit',['id'=>$user->id])}}" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" data-id = '{{$user->id}}' data-url="{{route('admin.contactUs.delete')}}" class="ms-3 delete_row"><i class='bx bxs-trash'></i></a>

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

