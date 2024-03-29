@extends('layouts.vertical-master-layout')
@section('title')Left Timeline @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Timeline @endslot
            @slot('title') Left Timeline @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="timeline-sec timeline-vertical">
                            <div class="wrapper">
                                <div class="timeline-main">
                                    <div class="timeline-row">

                                        <div class="timeline-box">
                                            <div class="timeline-date bg-primary border-primary">
                                                <div class="date text-center">
                                                    <h3 class="text-white mb-1 font-size-20">25</h3>
                                                    <p class="mb-0 d-none d-md-block text-white-50">June</p>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h3 class="font-size-18">Timeline Event One</h3>
                                                <p class="text-muted mb-0 mt-2 pt-1">Perspitis unde omnis it voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                    quae ab illo inventore veritatis et quasi architecto beatae explicabo.</p>
                                            </div>
                                        </div>

                                        <div class="timeline-box">
                                            <div class="timeline-date">
                                                <div class="date text-center">
                                                    <h3 class="mb-1 font-size-20">12</h3>
                                                    <p class="mb-0 d-none d-md-block text-muted">July</p>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h3 class="font-size-18">Timeline Event two</h3>
                                                <p class="text-muted mb-0 mt-2 pt-1">At vero eos dignissimos ducimus quos dolores chooses to enjoy pleasure that has no annoying.</p>

                                                <div class="d-flex flex-wrap align-items-start event-img mt-3 gap-2">
                                                    <img src="{{URL::asset('assets/images/small/img-2.jpg')}}" alt="" class="img-fluid rounded" width="60">
                                                    <img src="{{URL::asset('assets/images/small/img-5.jpg')}}" alt="" class="img-fluid rounded" width="60">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline-box">
                                            <div class="timeline-date">
                                                <div class="date text-center">
                                                    <h3 class="mb-1 font-size-20">17</h3>
                                                    <p class="mb-0 d-none d-md-block text-muted">July</p>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h3 class="font-size-18">Timeline Event Three</h3>
                                                <p class="text-muted mb-0 mt-2 pt-1">Vivamus ultrices massa turna interdum eu. Pellentesque habitant morbi tristique eget justo sit amet est varius mollis et quis nisi. Suspendisse potenti. senectus et netus et malesuada fames ac turpis egestas.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="horizontal-line"></div>
                                        <div class="verticle-line"></div>
                                        <div class="corner top"></div>
                                        <div class="corner bottom"></div>
                                    </div>
                                    <div class="timeline-row">
                                        <div class="timeline-box">
                                            <div class="timeline-date">
                                                <div class="date text-center">
                                                    <h3 class="mb-1 font-size-20">19</h3>
                                                    <p class="mb-0 d-none d-md-block text-muted">Aug</p>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h3 class="font-size-18">Timeline Event Four</h3>
                                                <p class="text-muted mb-0 mt-2 pt-1">Printing and typesetting industry. been the industry'scrambled type specimen book.</p>
                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mt-4">See
                                                    more detail
                                                </button>
                                            </div>
                                        </div>
                                        <div class="timeline-box">
                                            <div class="timeline-date">
                                                <div class="date text-center">
                                                    <h3 class="mb-1 font-size-20">23</h3>
                                                    <p class="mb-0 d-none d-md-block text-muted">Aug</p>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h3 class="font-size-18">Timeline Event Five</h3>
                                                <p class="text-muted mb-0 mt-2 pt-1">Excepturi, obcaecati, quisquam id
                                                    molestias eaque asperiores voluptatibus cupiditate error
                                                    assumenda delectus odit
                                                    similique earum voluptatem
                                                    Odit, itaque, deserunt corporis vero ipsum nisi repellat ... <a href="#">Read more</a></p>
                                            </div>
                                        </div>
                                        <div class="timeline-box">
                                            <div class="timeline-date">
                                                <div class="date text-center">
                                                    <h3 class="mb-1 font-size-20">30</h3>
                                                    <p class="mb-0 d-none d-md-block text-muted">Aug</p>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h3 class="font-size-18">Timeline Event Five</h3>
                                                <p class="text-muted mb-0 mt-2 pt-1">Suspendisse tempor porttitor elit non maximus. Sed suscipit, purus in convallis condimentum, risus ex pellentesque sapien, vel tempor arcu dolor ut est. Nam ac felis id mauris fermentum nisl pharetra auctor.</p>
                                            </div>
                                        </div>
                                        <div class="horizontal-line"></div>
                                        <div class="verticle-line"></div>
                                        <div class="corner top"></div>
                                        <div class="corner bottom"></div>
                                    </div>
                                    <div class="timeline-row">
                                        <div class="timeline-box">
                                            <div class="timeline-date">
                                                <div class="timeline-date bg-primary border-primary">
                                                    <div class="date text-center">
                                                        <h3 class="text-white mb-1 font-size-20">31</h3>
                                                        <p class="mb-0 d-none d-md-block text-white-50">Aug</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
