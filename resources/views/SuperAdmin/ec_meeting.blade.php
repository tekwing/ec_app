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

    <style>
    .event-one-time {
      background-color: #36a2eb; /* Light blue */
      border-color: #36a2eb;
      color: white;
    }
    .event-meeting {
      background-color: #ffcd56; /* Yellow */
      border-color: #ffcd56;
      color: black;
    }
    .event-recurrence {
      background-color: #4bc0c0; /* Turquoise */
      border-color: #4bc0c0;
      color: white;
    }
  </style>
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
                                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#eventModal"><i class="mdi mdi-plus"></i> Create New Event</button>
                                    <div id="external-events">
                                        <br>
                                        
                                        <div class="external-event fc-event bg-success-subtle text-success" data-class="bg-success-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle me-2"></i>Event
                                        </div>
                                        <div class="external-event fc-event bg-info-subtle text-info" data-class="bg-info-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle me-2"></i>EC Meeting One Time
                                        </div>
                                        <div class="external-event fc-event bg-warning-subtle text-warning" data-class="bg-warning-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle me-2"></i>EC Meeting Recurrence
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
                        </div><!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('libs/fullcalendar/index.global.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('js/custom_calendar/calendar.js') }}"></script>

@endsection

@section('modal')
<!-- Event Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Create Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="eventForm">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="eventTitle" class="form-label">Event Title</label>
                        <input type="text" class="form-control" id="eventTitle" name="eventTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventType" class="form-label">Type</label>
                        <select class="form-select" name="type" id="Type" required>
                            <option value="" selected disabled>Select Event Type</option>
                            <option value="event">Event</option>
                            <option value="meeting">EC Meeting</option>
                        </select>
                    </div>
                    <div id="EventType" class="conditional-fields-one">
                        <label for="eventType" class="form-label">Event Type</label>
                        <select class="form-select" id="eventType" name="eventType" >
                            <option value="" selected disabled>Select Event Type</option>
                            <option value="meeting">One-Time</option>
                            <option value="recurrence">Recurrence</option>
                        </select>
                    </div>

                    <!-- One-Time Event Fields -->
                    <div id="oneTimeFields" class="conditional-fields">
                        <div class="mb-3">
                            <label for="eventDate" class="form-label">Event Date</label>
                            <input type="date" class="form-control" id="eventDate" name="eventDate">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="eventStartTime" class="form-label">Start Time</label>
                                    <input type="time" class="form-control" id="eventStartTime" name="eventStartTime">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="eventEndTime" class="form-label">End Time</label>
                                    <input type="time" class="form-control" id="eventEndTime" name="eventEndTime">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meeting Fields -->
                    <div id="meetingFields" class="conditional-fields">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                <label for="meetingStartDate" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="meetingStartDate" name="meetingStartDate">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="meetingStartTime" class="form-label">Start Time</label>
                                    <input type="time" class="form-control" id="meetingStartTime" name="meetingStartTime">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="meetingEndDate" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="meetingEndDate" name="meetingEndDate">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="meetingEndTime" class="form-label">End Time</label>
                                    <input type="time" class="form-control" id="meetingEndTime" name="meetingEndTime">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="meetingLocation" class="form-label">Location</label>
                            <input type="text" class="form-control" id="meetingLocation" name="meetingLocation">
                        </div>
                        <div class="mb-3">
                            <label for="meetingInvitee" class="form-label">Invitee</label>
                            <input type="text" class="form-control" id="meetingInvitee" name="meetingInvitee">
                        </div>
                        <div class="mb-3">
                            <label for="meetingDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="meetingDescription" name="meetingDescription"></textarea>
                        </div>
                    </div>

                    <!-- Recurrence Fields -->
                    <div id="recurrenceFields" class="conditional-fields">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="recurrenceStartDate" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="recurrenceStartDate" name="recurrenceStartDate">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="recurrenceStartTime" class="form-label">Start Time</label>
                                    <input type="time" class="form-control" id="recurrenceStartTime" name="recurrenceStartTime">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="recurrenceEndDate" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="recurrenceEndDate" name="recurrenceEndDate">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="recurrenceEndTime" class="form-label">End Time</label>
                                    <input type="time" class="form-control" id="recurrenceEndTime" name="recurrenceEndTime">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="recurrenceLocation" class="form-label">Location</label>
                            <input type="text" class="form-control" id="recurrenceLocation" name="recurrenceLocation">
                        </div>
                        <div class="mb-3">
                            <label for="recurrenceInvitee" class="form-label">Invitee</label>
                            <input type="text" class="form-control" id="recurrenceInvitee" name="recurrenceInvitee">
                        </div>
                        <div class="mb-3">
                            <label for="recurrenceDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="recurrenceDescription" name="recurrenceDescription"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="recurrenceType" class="form-label">Recurrence Type</label>
                            <select class="form-select" id="recurrenceType" name="recurrenceType">
                                <option value="" selected disabled>Select Recurrence Type</option>
                                <option value="weekly">Weekly</option>
                                <option value="daily">Daily</option>
                            </select>
                        </div>
                        <div id="weeklyFields" class="conditional-fields">
                            <div class="mb-3">
                                <label class="form-label">Days of the Week</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0" id="sunday">
                                    <label class="form-check-label" for="sunday">Sunday</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="monday">
                                    <label class="form-check-label" for="monday">Monday</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2" id="tuesday">
                                    <label class="form-check-label" for="tuesday">Tuesday</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="3" id="wednesday">
                                    <label class="form-check-label" for="wednesday">Wednesday</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="4" id="thursday">
                                    <label class="form-check-label" for="thursday">Thursday</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="5" id="friday">
                                    <label class="form-check-label" for="friday">Friday</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="6" id="saturday">
                                    <label class="form-check-label" for="saturday">Saturday</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="weekNumber" class="form-label">Week of the Month</label>
                                <select class="form-select" id="weekNumber" name="weekNumber">
                                    <option value="" selected disabled>Select Week Number</option>
                                    <option value="1">1st Week</option>
                                    <option value="2">2nd Week</option>
                                    <option value="3">3rd Week</option>
                                    <option value="4">4th Week</option>
                                    <option value="5">5th Week</option>
                                </select>
                            </div>
                        </div>
                        <div id="monthlyFields" class="conditional-fields">
                            <div class="mb-3">
                                <label for="monthDay" class="form-label">Day of the Month</label>
                                <input type="number" class="form-control" id="monthDay" name="monthDay" min="1" max="31">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Event</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="eventDetailsModal" tabindex="-1" role="dialog" aria-labelledby="eventDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <h6 id="eventDetailsTitle"></h6>
                <p id="eventDetailsTime"></p>
                <p id="eventDetailsDescription"></p>
                <p id="eventDetailsLocation"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary ">Save Changes</button> -->
            </div>

        </div>
    </div>
</div>
@endsection