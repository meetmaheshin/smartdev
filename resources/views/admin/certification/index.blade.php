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
                        <li class="breadcrumb-item active" aria-current="page">list</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a class="btn btn-primary" href="{{route('admin.certification.add')}}"> 
                        <button type="button" class="btn btn-primary">Add</button> 
                    </a>

                    
                </div>
            </div>
        </div>
        
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Certification</h6>
        
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th> Sno.</th>
                                <th>Title</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($certification as $key=> $certifications)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$certifications->title}}</td>
                                
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('admin.certification.edit',['id'=>$certifications->id])}}" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" data-id = '{{$certifications->id}}' class="ms-3 delete_certifications"><i class='bx bxs-trash'></i></a>

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
            $('.delete_certifications').on('click',function(e){
                var id = $(this).data('id')
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to delete this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    showLoaderOnConfirm: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '/admin/certification/delete',
                                type: "POST",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    id: id,
                                },
                                dataType: "json",
                                success: function (response) {
                                    swal.fire("Saved!", "", "success");
                                    setTimeout(function () {
                                        location.reload();
                                    }, 500);

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
		  } );
	</script>
@endsection
