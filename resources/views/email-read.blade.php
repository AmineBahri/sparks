@extends('layouts.master')
@section('title')Read Email @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Email @endslot
            @slot('title') Read Email @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-12">
        <!-- Left sidebar -->
        <div class="email-leftbar card">
            <div class="card-body">
                <button type="button" class="btn btn-danger w-100 fw-semibold" data-bs-toggle="modal" data-bs-target="#composemodal">
                    Compose
                </button>
                <div class="mail-list mt-4">
                    <a href="#" class="active"><i class="bx bxs-inbox font-size-16 align-middle me-2"></i> Inbox <span class="ms-1 float-end">(18)</span></a>
                    <a href="#"><i class="bx bx-star font-size-16 align-middle me-2"></i>Starred</a>
                    <a href="#"><i class="bx bxs-bookmark font-size-16 align-middle me-2"></i>Important</a>
                    <a href="#"><i class="bx bx-file font-size-16 align-middle me-2"></i>Draft</a>
                    <a href="#"><i class="bx bx-mail-send font-size-16 align-middle me-2"></i>Sent Mail</a>
                    <a href="#"><i class="bx bx-trash font-size-16 align-middle me-2"></i>Trash</a>
                </div>

                <h6 class="mt-4">Labels</h6>

                <div class="mail-list mt-1">
                    <a href="#"><span class="mdi mdi-circle-outline text-info me-2"></span>Theme Support</a>
                    <a href="#"><span class="mdi mdi-circle-outline text-warning me-2"></span>Freelance</a>
                    <a href="#"><span class="mdi mdi-circle-outline text-primary me-2"></span>Social</a>
                    <a href="#"><span class="mdi mdi-circle-outline text-danger me-2"></span>Friends</a>
                    <a href="#"><span class="mdi mdi-circle-outline text-success me-2"></span>Family</a>
                </div>

                <h6 class="mt-4">Chat</h6>

                <div class="mt-3 mb-1">
                    <div class="mail-list">
                        <a href="javascript: void(0);" class="d-flex align-items-start">
                            <img class="flex-shrink-0 me-3 rounded-circle" src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="Generic placeholder image" height="36">
                            <div class="flex-grow-1 chat-user-box">
                                <p class="user-title m-0">Scott Median</p>
                                <p class="text-muted mb-0">Hello</p>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="d-flex align-items-start">
                            <img class="flex-shrink-0 me-3 rounded-circle" src="{{URL::asset('assets/images/users/avatar-3.jpg')}}" alt="Generic placeholder image" height="36">
                            <div class="flex-grow-1 chat-user-box">
                                <p class="user-title m-0">Julian Rosa</p>
                                <p class="text-muted mb-0">What about our next..</p>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="d-flex align-items-start">
                            <img class="flex-shrink-0 me-3 rounded-circle" src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="Generic placeholder image" height="36">
                            <div class="flex-grow-1 chat-user-box">
                                <p class="user-title m-0">David Medina</p>
                                <p class="text-muted mb-0">Yeah everything is fine</p>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="d-flex align-items-start">
                            <img class="flex-shrink-0 me-3 rounded-circle" src="{{URL::asset('assets/images/users/avatar-6.jpg')}}" alt="Generic placeholder image" height="36">
                            <div class="flex-grow-1 chat-user-box">
                                <p class="user-title m-0">Jay Baker</p>
                                <p class="text-muted mb-0">Wow that's great</p>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <!-- End Left sidebar -->
        <!-- Right Sidebar -->
        <div class="email-rightbar mb-3">

            <div class="card">
                <div class="btn-toolbar p-3" role="toolbar">
                    <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" class="btn btn-primary"><i class="fa fa-inbox"></i></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-exclamation-circle"></i></button>
                        <button type="button" class="btn btn-primary"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Team Manage</a>
                        </div>
                    </div>
                    <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Team Manage</a>
                        </div>
                    </div>

                    <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            More <i class="mdi mdi-dots-vertical ms-2"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Mark as Unread</a>
                            <a class="dropdown-item" href="#">Mark as Important</a>
                            <a class="dropdown-item" href="#">Add to Tasks</a>
                            <a class="dropdown-item" href="#">Add Star</a>
                            <a class="dropdown-item" href="#">Mute</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start mb-4">
                        <div class="flex-shrink-0 me-3">
                            <img class="rounded-circle avatar" src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="Generic placeholder image">
                        </div>

                        <div class="flex-grow-1">
                            <h5 class="font-size-15 my-1">Humberto D. Champion</h5>
                            <small class="text-muted">support@domain.com</small>
                        </div>
                    </div>

                    <h4 class="mt-0 mb-4 font-size-16">Your Storage is lonely. Add some files!</h4>

                    <p class="text-muted">Dear User,</p>
                    <p class="text-muted">Once your files are in Storage, they’ll be waiting for you anywhere you install the app—like your computer, phone, or tablet. Your files will also be securely backed up and easy to share, no matter what type of files they are.</p>
                    <p class="text-muted">An unrecognized device or browser recently signed into your Storage account. Help us keep your account secure by letting us know if this was you:</p>
                    <p class="text-muted mb-0">Sincerly,</p>
                    <p class="text-muted">Sparks</p>
                    <hr />

                    <div class="row">
                        <div class="col-xl-2 col-6">
                            <div class="card border shadow-none">
                                <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/small/img-3.jpg')}}" alt="Card image cap">
                                <div class="py-2 text-center">
                                    <a href="#!" class="fw-semibold font-size-13 text-reset">Download <i class="bx bxs-download align-middle"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-2 col-6">
                            <div class="card border shadow-none">
                                <img class="card-img-top img-fluid" src="{{URL::asset('assets/images/small/img-4.jpg')}}" alt="Card image cap">
                                <div class="py-2 text-center">
                                    <a href="#!" class="fw-semibold font-size-13 text-reset">Download <i class="bx bxs-download align-middle"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <a href="" class="btn btn-light mt-4"><i class="mdi mdi-reply"></i> Reply</a>
                </div><!-- end cradbody -->
            </div><!-- end card -->
        </div><!-- End email-rightbar -->
    </div><!-- end Col-9 -->
</div><!-- end row -->

<!-- Modal -->
<div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="To">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <div id="email-editor"></div>
                    </div>

                </form><!-- end form -->
            </div><!-- end modalbody -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send <i class="fab fa-telegram-plane ms-1"></i></button>
            </div><!-- end modalfooter -->
        </div>
    </div>
</div><!-- end modal -->

@endsection
@section('script')

<!--ckeditor js-->
<script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
<!-- email editor init -->
<script src="{{ URL::asset('assets/js/pages/email-editor.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
