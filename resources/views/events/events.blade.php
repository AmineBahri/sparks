@extends('layouts.vertical-master-layout')
@section('title'){{__('t-calendar')}} @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
@endsection

@section('content')

{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') {{__('t-applications')}} @endslot
            @slot('title') {{__('t-calendar')}} @endslot
        @endcomponent
    @endsection

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-xl-3">
                <div class="card card-h-100">
                    <div class="card-body">
                        <button class="btn btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus"></i> {{__('t-create-new-event')}}</button>

                        <div id="external-events" class="d-none">
                            <br>
                            <p class="text-muted">Drag and drop your event or click in the calendar</p>
                            <div class="external-event fc-event bg-success" data-class="bg-success">
                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event Planning
                            </div>
                            <div class="external-event fc-event bg-info" data-class="bg-info">
                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                            </div>
                            <div class="external-event fc-event bg-warning" data-class="bg-warning">
                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating Reports
                            </div>
                            <div class="external-event fc-event bg-danger" data-class="bg-danger">
                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create New theme
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-xl-9">
                <div class="card card-h-100">
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

        <div style='clear:both'></div>

        <!-- Add New Event MODAL -->
        <div class="modal fade" id="event-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header py-3 px-4 border-bottom-0">
                        <h5 class="modal-title" id="modal-title">Event</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>

                    </div>
                    <div class="modal-body p-4">
                        <form class="needs-validation" method="POST" name="event-form" id="form-event" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">{{__('t-event-name')}}</label>
                                        <input class="form-control" placeholder="{{__('t-event-name')}}" type="text" name="name" id="event-title" required value="" />
                                        <div class="invalid-feedback">Please provide a valid event name</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">{{__('t-color')}}</label>
                                        <select class="form-select shadow-none" name="color" id="event-category" required>
                                            <option value="" selected> {{__('t-select')}}</option>
                                            <option value="bg-danger">Danger</option>
                                            <option value="bg-success">Success</option>
                                            <option value="bg-primary">Primary</option>
                                            <option value="bg-info">Info</option>
                                            <option value="bg-dark">Dark</option>
                                            <option value="bg-warning">Warning</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid event color</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">{{__('t-orders')}}</label>
                                        <select class="form-select shadow-none" name="order_id" id="order_id" required>
                                            <option value="" selected> {{__('t-select')}} </option>
                                            @foreach ($orders as $order)
                                                <option value="{{$order->id}}">{{$order->customer_name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">Please select a valid order</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <button type="button" class="btn btn-danger" id="btn-delete-event" data-key="t-delete">Delete</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal" data-key="t-close">Close</button>
                                    <button type="submit" class="btn btn-success" id="btn-save-event" data-key="t-save">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- end modal-content-->
            </div> <!-- end modal dialog-->
        </div>
        <!-- end modal-->
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script>            
    var events = {!! json_encode($events) !!};
</script> 
<!-- plugin js -->
<script src="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ URL::asset('js/pages/calendar-event.init.js') }}"></script>
<script src='{{asset('@fullcalendar/locales-all.js')}}'></script>
@endsection
