@extends('layouts.master')
@section('title')Colors @endsection
@section('content')

{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') UI Elements @endslot
            @slot('title') Colors @endslot
        @endcomponent
    @endsection

<div class="row">

    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="bg-light rounded-3 text-center overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="bg-soft-primary" style="height: 90px;"></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="bg-primary" style="height: 90px;"></div>
                        </div>
                    </div><!-- end row -->
                    <div class="py-3">
                        <h5 class="font-size-16 text-primary">Primary</h5>
                        <p class="mb-0 text-primary">Hex : #038edc</p>
                        <p class="mb-0 text-primary">RGB : rgb(3, 142, 220)</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded-3 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="bg-soft-success" style="height: 90px;"></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="bg-success" style="height: 90px;"></div>
                        </div>
                    </div><!-- end row -->
                    <div class="py-3">
                        <h5 class="font-size-16 text-success">Success</h5>
                        <p class="mb-0 text-success">Hex : #51d28c</p>
                        <p class="mb-0 text-success">RGB : rgb(81, 210, 75)</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded-3 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="bg-soft-purple" style="height: 90px;"></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="bg-purple" style="height: 90px;"></div>
                        </div>
                    </div><!-- end row -->
                    <div class="py-3">
                        <h5 class="font-size-16 text-purple">Purple</h5>
                        <p class="mb-0 text-purple">Hex : #564ab1</p>
                        <p class="mb-0 text-purple">RGB : rgb(86, 74, 177)</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded-3 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="bg-soft-warning" style="height: 90px;"></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="bg-warning" style="height: 90px;"></div>
                        </div>
                    </div><!-- end row -->
                    <div class="py-3">
                        <h5 class="font-size-16 text-warning">Warning</h5>
                        <p class="mb-0 text-warning">Hex : #f7cc53</p>
                        <p class="mb-0 text-warning">RGB : rgb(247, 204, 83)</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded-3 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="bg-soft-danger" style="height: 90px;"></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="bg-danger" style="height: 90px;"></div>
                        </div>
                    </div><!-- end row -->
                    <div class="py-3">
                        <h5 class="font-size-16 text-danger">Danger</h5>
                        <p class="mb-0 text-danger">Hex : #f34e4e</p>
                        <p class="mb-0 text-danger">RGB : rgb(243, 78, 78)</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded-3 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="bg-soft-info" style="height: 90px;"></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="bg-info" style="height: 90px;"></div>
                        </div>
                    </div><!-- end row -->
                    <div class="py-3">
                        <h5 class="font-size-16 text-info">Info</h5>
                        <p class="mb-0 text-info">Hex : #5fd0f3</p>
                        <p class="mb-0 text-info">RGB : rgb(39, 187, 232)</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded-3 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="bg-soft-secondary" style="height: 90px;"></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="bg-secondary" style="height: 90px;"></div>
                        </div>
                    </div><!-- end row -->
                    <div class="py-3">
                        <h5 class="font-size-16 text-secondary">Secondary</h5>
                        <p class="mb-0 text-secondary">Hex : #74788d</p>
                        <p class="mb-0 text-secondary">RGB : rgb(116, 120, 141)</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded-3 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="bg-soft-dark" style="height: 90px;"></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="bg-dark" style="height: 90px;"></div>
                        </div>
                    </div><!-- end row -->
                    <div class="py-3">
                        <h5 class="font-size-16 text-dark">Dark</h5>
                        <p class="mb-0 text-dark">Hex : #343a40</p>
                        <p class="mb-0 text-dark">RGB : rgb(52, 58, 64)</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="bglight text-center rounded-3 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="bg-soft-light" style="height: 90px;"></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="bg-light" style="height: 90px;"></div>
                        </div>
                    </div><!-- end row -->
                    <div class="py-3">
                        <h5 class="font-size-16 text-dark">Light</h5>
                        <p class="mb-0 text-dark">Hex : #f5f6f8</p>
                        <p class="mb-0 text-dark">RGB : rgb(116, 120, 141)</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
