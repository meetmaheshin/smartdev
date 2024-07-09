@extends('admin.layouts.commonMaster')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Skill</div>
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
                    <a class="btn btn-primary" href="{{route('admin.skills.add')}}"> 
                        <button type="button" class="btn btn-primary">Add</button> 
                    </a>

                    
                </div>
            </div>
        </div>
        
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Skill</h6>
        
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th> Sno.</th>
                                <th>Title</th>
                                <th>Skill</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $key=> $skill)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$skill->title}}</td>
                                <td>{{$skill->skills_sub}}</td>
                                
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('admin.skills.edit',['id'=>$skill->id])}}" class=""><i class='bx bxs-edit'></i></a>
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
		  } );
	</script>
@endsection
