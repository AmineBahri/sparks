@extends('layouts.master')
@section('title')Projects Grid @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Projects @endslot
            @slot('title') Projects Grid @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <a href="projects-create" class="btn btn-light">
                                <i class="uil uil-plus me-1"></i> Add New
                            </a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="d-flex flex-wrap align-items-start justify-content-md-end gap-2 mb-3">
                            <div class="search-box ">
                                <div class="position-relative">
                                    <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                    <i class="uil uil-search search-icon"></i>
                                </div>
                            </div><!-- end serch box -->

                            <div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-list" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="uil uil-list-ul"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="projects-grid" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="uil uil-apps"></i></a>
                                    </li>
                                </ul><!-- end ul -->
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-link text-dark dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="uil uil-ellipsis-h"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div><!-- end dropdown -->
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="mt-2">
                    <ul class="nav nav-tabs nav-tabs-custom mb-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#grid-all" role="tab">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#grid-active">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#grid-complete">Completed</a>
                        </li>
                    </ul><!-- end ul -->
                </div>

                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active" id="grid-all" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-1.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Dashboard UI</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Duis arcu suscipit eget</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 2 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                            <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Ecommerce App</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Nemo enim ipsam sit </p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 3 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                            <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    E
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Calendar App</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Itaque earum rerum ut</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-success font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 4 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                        <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-4.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Kanban Board</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Maecenas nec odio et ante</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 5 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Frank Snow">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                F
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-5.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Authentication</a></h5>
                                            <p class="text-muted mb-4 text-truncate">At vero eos et accusamus et</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 2 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                        <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-6.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Redesign - Landing Page</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Neque porro quisquam est</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-warning font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 3 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="me-4">Team :</div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Rosa Armstrong">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    R
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Frank Snow">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    F
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Brand Logo Design</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Sed ut perspiciatis unde iste</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>


                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-success font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 1 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Janna Johnson">
                                                            <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                            <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    E
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->



                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Chat App</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Quis autem vel eum iure</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 4 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                            <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                            <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->


                        </div><!-- end row -->

                        <div class="row g-0">
                            <div class="col-sm-6">
                                <div>
                                    <p class="mb-sm-0">Showing 1 to 8 of 24 entries</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-end">
                                    <ul class="pagination pagination-rounded mb-sm-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul><!-- end ul -->
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                    <!-- end tab pane -->

                    <div class="tab-pane" id="grid-active" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Brand Logo Design</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Sed ut perspiciatis unde iste</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 4 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="me-4">Team :</div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Janna Johnson">
                                                            <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                            <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    E
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Redesign - Landing Page</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Neque porro quisquam est</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-success font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 4 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ronald Hatfield">
                                                        <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Chat App</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Quis autem vel eum iure</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-warning font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 3 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="me-4">Team :</div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Rosa Armstrong">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    R
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Snow">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    F
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Authentication</a></h5>
                                            <p class="text-muted mb-4 text-truncate">At vero eos et accusamus et</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 2 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ronald Hatfield">
                                                        <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Calendar App</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Itaque earum rerum ut</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-success font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 1 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Janna Johnson">
                                                            <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Heather Ford">
                                                            <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Eliza Hardin">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    E
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Megan Seaton">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Ecommerce App</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Nemo enim ipsam sit </p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 74%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-success font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 1 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Janna Johnson">
                                                            <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Heather Ford">
                                                            <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Eliza Hardin">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    E
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Megan Seaton">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Kanban Board</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Maecenas nec odio et ante</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 5 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Snow">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                F
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Dashboard UI</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Duis arcu suscipit eget</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 5 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Snow">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                F
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row g-0">
                            <div class="col-sm-6">
                                <div>
                                    <p class="mb-sm-0">Showing 1 to 8 of 24 entries</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-end">
                                    <ul class="pagination pagination-rounded mb-sm-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul><!-- end ul -->
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                    <!-- end tab pane -->

                    <div class="tab-pane" id="grid-complete" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Calendar App</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Itaque earum rerum ut</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 5 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Snow">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                F
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Ecommerce App</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Nemo enim ipsam sit </p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 74%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 5 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Snow">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                F
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Kanban Board</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Maecenas nec odio et ante</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 3 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Megan Seaton">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ronald Hatfield">
                                                            <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Eliza Hardin">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    E
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Dashboard UI</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Duis arcu suscipit eget</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-warning font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 3 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="me-4">Team :</div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Rosa Armstrong">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    R
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Snow">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    F
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Chat App</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Quis autem vel eum iure</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 2 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Eliza Hardin">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ronald Hatfield">
                                                            <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Authentication</a></h5>
                                            <p class="text-muted mb-4 text-truncate">At vero eos et accusamus et</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-success font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 4 days left</span>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ronald Hatfield">
                                                        <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Brand Logo Design</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Sed ut perspiciatis unde iste</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-success font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 1 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Janna Johnson">
                                                            <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Heather Ford">
                                                            <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Eliza Hardin">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    E
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Megan Seaton">
                                                            <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body pb-3">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="flex-grow-1">
                                                <div class="avatar">
                                                    <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="projects-overview" class="text-dark">Redesign - Landing Page</a></h5>
                                            <p class="text-muted mb-4 text-truncate">Neque porro quisquam est</p>
                                        </div>

                                        <div class="progress mt-1" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-soft-warning font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 3 days left</span>
                                                <div class="avatar-group align-items-center">
                                                    <div class="me-4">Team :</div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Rosa Armstrong">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                    R
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Snow">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    F
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row g-0">
                            <div class="col-sm-6">
                                <div>
                                    <p class="mb-sm-0">Showing 1 to 8 of 24 entries</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-end">
                                    <ul class="pagination pagination-rounded mb-sm-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul><!-- end ul -->
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                    <!-- end tab pane -->
                </div>
                <!-- end tab content -->

            </div><!-- end card body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
