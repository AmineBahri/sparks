@extends('layouts.master-without-nav')
@section('title')Signout @endsection
@section('content')

<div class="auth-bg-basic d-flex align-items-center min-vh-100">
    <div class="bg-overlay bg-light"></div>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 py-5 px-3">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="text-center text-muted mb-2">
                        <div class="pb-3">
                            <a href="index">
                                <span class="logo-lg">
                                    <img src="{{URL::asset('assets/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Sparks</span>
                                </span>
                            </a>
                            <p class="text-muted font-size-15 w-75 mx-auto mt-3 mb-0">User Experience &amp; Interface Design Strategy Saas Solution</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-transparent shadow-none border-0">
                        <div class="card-body">
                            <div class="py-3 text-center">
                                <div class="avatar-lg mx-auto">
                                    <div class="avatar-title bg-soft-primary text-primary display-5 rounded-circle">
                                        <i class="uil uil-user-circle"></i>
                                    </div>
                                </div>

                                <div class="text-center mt-4 py-2">
                                    <h4>You are Logged Out</h4>
                                    <p>Thank you for using <span class="fw-semibold">Sparks</span></p>
                                    <div class="mt-4">
                                        <a href="auth-signin-basic" class="btn btn-primary w-100">Sign In</a>
                                    </div>
                                </div>

                                <div class="mt-4 text-center">
                                    <p class="text-muted mb-0">Don't have an account ? <a href="auth-signup-basic" class="fw-semibold text-decoration-underline"> Signup Now </a> </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div><!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="mt-4 mt-md-5 text-center">
                        <p class="mb-0">© <script>
                                document.write(new Date().getFullYear())

                            </script> Sparks. Crafted with <i class="mdi mdi-heart text-danger"></i> by Atsu IT</p>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </div>
    <!-- end container fluid -->
</div>
<!-- end authentication section -->

@endsection
