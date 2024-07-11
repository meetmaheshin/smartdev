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
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th> Sno.</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Mobile No</th>
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
                                    <div class="d-flex order-actions">
                                        <a href="{{route('admin.user.edit',['id'=>$users->id])}}" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" data-id = '{{$users->id}}' class="ms-3 account_closed"><i class='bx bxs-trash'></i></a>

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
@section('js')
<script>
		$(document).ready(function() {
			$('#example').DataTable();
            $('.account_closed').on('click',function(e){
                var id = $(this).data('id')
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to close account this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Close it!',
                    showLoaderOnConfirm: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '/admin/user/delete',
                                type: "POST",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    id: id,
                                },
                                dataType: "json",
                                success: function (response) {
                                    swal.fire("Saved!", "", "Closed Account");
                                    location.reload();
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    swal.fire(
                                        "Error deleting!!",
                                        "Please try again",
                                        "error"
                                    );
                                },
                            });
                        } else if (result.isDenied) {
                            swal.fire("Changes are not saved", "", "info");
                        }
                    });
            });
		  });
	</script>
@endsection
