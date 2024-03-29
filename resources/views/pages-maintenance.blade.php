@extends('layouts.master-without-nav')
@section('title')Maintenance @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Pages @endslot
            @slot('title') Maintenance @endslot
        @endcomponent
    @endsection
<div class="auth-bg-basic d-flex align-items-center min-vh-100">
    <div class="bg-overlay bg-light"></div>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 py-5 px-3">
            <div class="row justify-content-center my-auto">
                <div class="col-xl-12">
                    <div class="text-center">
                        <a href="index.html">
                            <span class="logo-lg">
                                <img src="{{URL::asset('assets/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Sparks</span>
                            </span>
                        </a>

                        <div class="row mt-5 pt-3 justify-content-center">
                            <div class="col-md-6">
                                <img src="{{URL::asset('assets/images/maintenance.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <h3 class="mt-5 pt-4">Site is Under Maintenance</h3>
                        <p>Please check back in sometime.</p>

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <i class="bx bx-broadcast mb-4 h2 text-primary"></i>
                                        <h5 class="font-size-15 text-uppercase">Why is the Site Down?</h5>
                                        <p class="text-muted mb-0">There are many variations of passages of
                                            Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <i class="bx bx-time-five mb-4 h2 text-primary"></i>
                                        <h5 class="font-size-15 text-uppercase">
                                            What is the Downtime?</h5>
                                        <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not
                                            simply random text. It has roots in a piece of classical.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <i class="bx bx-envelope mb-4 h2 text-primary"></i>
                                        <h5 class="font-size-15 text-uppercase">
                                            Do you need Support?</h5>
                                        <p class="text-muted mb-0">If you are going to use a passage of Lorem
                                            Ipsum, you need to be sure there isn't anything embar.. <a href="mailto:no-reply@domain.com" class="text-decoration-underline">no-reply@domain.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div>
    </div>
    <!-- end container fluid -->
</div>
<!-- end authentication section -->

@endsection
@section('script')

<!-- Countdown -->
<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
