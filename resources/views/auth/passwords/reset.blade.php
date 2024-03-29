@extends('layouts.master-without-nav')
@section('title')Forgot Password @endsection
@section('content')

<div class="auth-page d-flex align-items-center min-vh-100">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="d-flex flex-column h-100 py-5 px-4">
                    <div class="text-center text-muted mb-2">
                        <div class="pb-3">
                            <a href="index">
                                <span class="logo-lg">
                                    <img src="{{URL::asset('assets/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Sparks</span>
                                </span>
                            </a>
                            <p class="text-muted font-size-15 w-75 mx-auto mt-3 mb-0">User Experience & Interface Design Strategy Saas Solution</p>
                        </div>
                    </div>

                    <div class="my-auto">
                        <div class="p-3 text-center">
                            <img src="{{URL::asset('assets/images/auth-img.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="mt-4 mt-md-5 text-center">
                        <p class="mb-0">© <script>
                                document.write(new Date().getFullYear())

                            </script> Sparks. Crafted with <i class="mdi mdi-heart text-danger"></i> by Atsu IT</p>
                    </div>
                </div>

                <!-- end auth full page content -->
            </div>
            <!-- end col -->

            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg bg-light py-md-5 p-4 d-flex">
                    <div class="bg-overlay-gradient"></div>
                    <!-- end bubble effect -->
                    <div class="row justify-content-center g-0 align-items-center w-100">
                        <div class="col-xl-4 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="px-3 py-3">
                                        <div class="text-center">
                                            <h5 class="mb-0">Forgot Password</h5>
                                            <p class="text-muted mt-2">Forgot Your Password?</p>
                                        </div>
                                        <form class="mt-4 pt-2" method="POST" action="{{ route('password.update') }}">
                                            @csrf
        
                                            <input type="hidden" name="token" value="{{ $token }}">
        
                                            <div class="form-floating form-floating-custom mb-3">
                                                <input type="email" id="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                                <label for="email">{{ __('Email Address') }}</label>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <div class="form-floating-icon">
                                                    <i class="uil uil-padlock"></i>
                                                </div>
                                            </div>
        
                                            <div class="form-floating form-floating-custom mb-3">
                                                <input type="password" id="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                <label for="newpassword">{{ __('Password') }}</label>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <div class="form-floating-icon">
                                                    <i class="uil uil-padlock"></i>
                                                </div>
                                            </div>
        
                                            <div class="form-floating form-floating-custom mb-3">
                                                <input type="password" id="confirmpassword" placeholder="Password"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                <label for="input-confirmpassword">{{ __('Confirm Password') }}</label>
                                                <div class="form-floating-icon">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
        
                                            <div class="mt-4">
                                            <button type="submit" class="btn btn-primary w-100">{{ __('Reset Password') }} </button>
                                            </div>
        
                                            <div class="mt-4 text-center">
                                                <p class="text-muted mb-0">Remember It ? <a href="auth-signin-basic" class="fw-semibold text-decoration-underline"> Sign In </a> </p>
                                            </div>
        
                                        </form><!-- end form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>
<!-- end authentication section -->

@endsection
