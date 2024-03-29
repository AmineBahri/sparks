@extends('layouts.master-without-nav')
@section('title')Coming Soon @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Pages @endslot
            @slot('title') Coming Soon @endslot
        @endcomponent
    @endsection
<div class="auth-bg-basic d-flex align-items-center min-vh-100">
    <div class="bg-overlay bg-light"></div>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 py-5 px-3">
            <div class="row justify-content-center my-auto">
                <div class="col-xl-8">
                    <div class="text-center">
                        <a href="index">
                            <span class="logo-lg">
                                <img src="{{URL::asset('assets/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Sparks</span>
                            </span>
                        </a>

                        <div class="row mt-5 pt-3 justify-content-center">
                            <div class="col-md-7">
                                <img src="{{URL::asset('assets/images/maintenance.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <h3 class="mt-5">Let's get started with Sparks</h3>
                        <p class="text-muted pb-4">Please check back in sometime.</p>

                        <div id="countdown" class="countdownlist"></div>

                        <div class="input-group countdown-input-group mx-auto my-5">
                            <input type="email" class="form-control border-light shadow" placeholder="Enter your email address" aria-label="search result" aria-describedby="button-email">
                            <button class="btn btn-primary" type="button" id="button-email">Send <i class="bx bx-paper-plane ms-1"></i></button>
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

<script src="{{ URL::asset('assets/js/pages/coming-soon.init.js') }}"></script>

@endsection
