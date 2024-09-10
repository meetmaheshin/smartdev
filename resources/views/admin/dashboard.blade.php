
@extends('admin.layouts.commonMaster')
<!--start page wrapper -->
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <a href="{{ route('admin.jobs') }}" class="text-decoration-none">
                    <div class="card radius-10 border-start border-0 border-3 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Projects</p>
                                <h4 class="my-1 text-info">{{$project}}</h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-wallet'></i>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            <div class="col">
                <a href="{{ route('admin.user') }}?filter=Client" class="text-decoration-none">
                    <div class="card radius-10 border-start border-0 border-3 border-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Client</p>
                                    <h4 class="my-1 text-danger">{{$client}}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.user') }}?filter=Freelancer" class="text-decoration-none">
                    <div class="card radius-10 border-start border-0 border-3 border-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Freelancer</p>
                                    <h4 class="my-1 text-success">{{$freelancer}}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
        </div><!--end row-->
    </div>

            
</div>
<!--end page wrapper -->
@endsection 
	