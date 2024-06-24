@extends('SuperAdmin.layout.app')

@section('css')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">EC Meetings</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                <li class="breadcrumb-item active">Calendar</li>
                                <li class="breadcrumb-item active">EC Meetings</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card card-h-100">
                                <div class="card-body">
                                    <button class="btn btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus"></i> Create New Event</button>

                                    <div id="external-events">
                                        <br>
                                        <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                        <div class="external-event fc-event bg-success-subtle text-success" data-class="bg-success-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle me-2"></i>New Event Planning
                                        </div>
                                        <div class="external-event fc-event bg-info-subtle text-info" data-class="bg-info-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle me-2"></i>Meeting
                                        </div>
                                        <div class="external-event fc-event bg-warning-subtle text-warning" data-class="bg-warning-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle me-2"></i>Generating Reports
                                        </div>
                                        <div class="external-event fc-event bg-danger-subtle text-danger" data-class="bg-danger-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle me-2"></i>Create New theme
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Upcoming Events</h5>
                                <p class="text-muted">Don't miss scheduled events</p>
                                <div class="pe-2 me-n1 mb-3" data-simplebar style="height: 250px">
                                    <div id="upcoming-event-list"></div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-xl-9">
                            <div class="card card-h-100">
                                <div class="card-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div>
                    <!--end row-->

                    <div style='clear:both'></div>

                    <!-- Add New Event MODAL -->
                    <div class="modal fade" id="event-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 bg-info-subtle">
                                    <h5 class="modal-title" id="modal-title">Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                        <div class="text-end">
                                            <a href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn" data-id="edit-event" onclick="editEvent(this)" role="button">Edit</a>
                                        </div>
                                        <div class="event-details">
                                            <div class="d-flex mb-2">
                                                <div class="flex-grow-1 d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <i class="ri-calendar-event-line text-muted fs-16"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-time-line text-muted fs-16"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> - <span id="event-timepicker2-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-map-pin-line text-muted fs-16"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-discuss-line text-muted fs-16"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row event-form">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Type</label>
                                                    <select class="form-select d-none" name="category" id="event-category" required>
                                                        <option value="bg-danger-subtle">Danger</option>
                                                        <option value="bg-success-subtle">Success</option>
                                                        <option value="bg-primary-subtle">Primary</option>
                                                        <option value="bg-info-subtle">Info</option>
                                                        <option value="bg-dark-subtle">Dark</option>
                                                        <option value="bg-warning-subtle">Warning</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid event category</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Event Name</label>
                                                    <input class="form-control d-none" placeholder="Enter event name" type="text" name="title" id="event-title" required value="" />
                                                    <div class="invalid-feedback">Please provide a valid event name</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label>Event Date</label>
                                                    <div class="input-group d-none">
                                                        <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12" id="event-time">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker1" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select start time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">End Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker2" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select end time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="event-location">Location</label>
                                                    <div>
                                                        <input type="text" class="form-control d-none" name="event-location" id="event-location" placeholder="Event location">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <input type="hidden" id="eventid" name="eventid" value="" />
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control d-none" id="event-description" placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-soft-danger" id="btn-delete-event"><i class="ri-close-line align-bottom"></i> Delete</button>
                                            <button type="submit" class="btn btn-success" id="btn-save-event">Add Event</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
                    </div> <!-- end modal-->
                    <!-- end modal-->
                </div>
            </div> <!-- end row-->

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card card-h-100">
                                <div class="card-body">

                                    <div style="margin-top:40px; ">
                                        <h4 style="color: black; margin-bottom:10px;">Protocol Deviations</h4>
                                        <div>
                                        <label>Applications for Initial Review must be submitted = </label>
                                        <input type="text" id="safetyReport1" name="safetyReport" value="">
                                        </div>

                                        <div>
                                        <label>Applications for Amendment  Review must be submitted =  </label>
                                        <input type="text" id="safetyReport1" name="safetyReport" value="">
                                        </div>
                                        
                                    </div>

                                    <div style="margin-top:40px;">
                                        <h4 style="color: black; margin-bottom:10px;" >Safety Reports</h4>
                                        <div>
                                        <label>What type of Safety Reports are required to be submitted to EC?</label>
                                        <input type="checkbox" id="safetyReport1" name="safetyReport" value="safetyReport1">
                                        <label for="safetyReport1">Serious </label>
                                        <input type="checkbox" id="safetyReport2" name="safetyReport" value="safetyReport2">
                                        <label for="safetyReport2">Non-Serious</label>
                                        <input type="checkbox" id="safetyReport3" name="safetyReport" value="safetyReport3">
                                        <label for="safetyReport3">IP related</label>
                                        </div>
                                        
                                        <div>
                                        <label>Should submit the Local SAE (Safety Adverse Event) to EC?</label>
                                        <input type="checkbox" id="safetyReport1" name="safetyReport" value="safetyReport1">
                                        <label for="safetyReport1">Yes</label>
                                        <input type="checkbox" id="safetyReport2" name="safetyReport" value="safetyReport2">
                                        <label for="safetyReport2">No</label>
                                        </div>
                                        
                                        <div>
                                        <label>Timeline to submit the Local SAE (Safety Adverse Event) = </label>
                                        <input type="text" id="safetyReport1" name="safetyReport" value="">
                                        </div>

                                        <div>
                                        <label>Should submit the International/overseas SUSAR to EC?</label>
                                        <input type="checkbox" id="safetyReport1" name="safetyReport" value="safetyReport1">
                                        <label for="safetyReport1">Yes</label>
                                        <input type="checkbox" id="safetyReport2" name="safetyReport" value="safetyReport2">
                                        <label for="safetyReport2">No</label>
                                        </div>

                                        <div>
                                        <label>Timeline to submit the Local SAE (Safety Adverse Event) = </label>
                                        <input type="text" id="safetyReport1" name="safetyReport" value="">
                                        </div>

                                        <div>
                                        <label>Should submit the International/overseas DSUR EC?</label>
                                        <input type="checkbox" id="safetyReport1" name="safetyReport" value="safetyReport1">
                                        <label for="safetyReport1">Yes</label>
                                        <input type="checkbox" id="safetyReport2" name="safetyReport" value="safetyReport2">
                                        <label for="safetyReport2">No</label>
                                        </div>

                                        <div>
                                        <label>Timeline to submit the Local SAE (Safety Adverse Event) </label>
                                        <input type="text" id="safetyReport1" name="safetyReport" value="">
                                        </div>

                                        <div>
                                        <label>Should submit the 6 months linelisting to EC?</label>
                                        <input type="checkbox" id="safetyReport1" name="safetyReport" value="safetyReport1">
                                        <label for="safetyReport1">Yes</label>
                                        <input type="checkbox" id="safetyReport2" name="safetyReport" value="safetyReport2">
                                        <label for="safetyReport2">No</label>
                                        </div>

                                        <div>
                                        <label>Timeline to submit the Local SAE (Safety Adverse Event) = </label>
                                        <input type="text" id="safetyReport1" name="safetyReport" value="">
                                        </div>
                                    </div>    

                                    <div style="margin-top:40px; ">
                                        <h4 style="color: black; margin-bottom:10px;">Protocol Deviations</h4>
                                        <div>
                                        <label>Should PDs be required to be submitted to EC?</label>
                                        <input type="checkbox" id="safetyReport1" name="safetyReport" value="safetyReport1">
                                        <label for="safetyReport1">Yes </label>
                                        <input type="checkbox" id="safetyReport2" name="safetyReport" value="safetyReport2">
                                        <label for="safetyReport2">No</label>
                                        </div>

                                        <div>
                                        <label>What type of PDs should be required to be submitted to EC?</label>
                                        <input type="checkbox" id="PD" name="safetyReport" value="PD">
                                        <label for="safetyReport1">Serious  </label>
                                        <input type="checkbox" id="PD" name="safetyReport" value="PD">
                                        <label for="safetyReport2">Non-Serious</label>
                                        <input type="checkbox" id="PD" name="safetyReport" value="PD">
                                        <label for="safetyReport2">Any </label>
                                        </div>

                                        <div>
                                        <label>Timeline to submit the Local SAE (Safety Adverse Event) = </label>
                                        <input type="text" id="safetyReport1" name="safetyReport" value="">
                                        </div>
                                        
                                    </div> 

                                </div>
                            </div>
                        </div>

                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('script')
    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <!-- <script src="{{ asset('js/plugins.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- calendar min js -->
    <script src="{{ asset('libs/fullcalendar/index.global.min.js') }}"></script>

    <!-- Calendar init -->
    <script src="{{ asset('js/pages/calendar.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
