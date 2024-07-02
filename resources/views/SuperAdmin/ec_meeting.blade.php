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
            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#eventModal">Standard Modal</button>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                editable: true,
                selectable: true,
                eventDidMount: function(info) {
                    if (info.event.extendedProps && info.event.extendedProps.eventType) {
                        var eventType = info.event.extendedProps.eventType;
                        if (eventType === 'one-time') {
                            info.el.classList.add('event-one-time');
                        } else if (eventType === 'meeting') {
                            info.el.classList.add('event-meeting');
                        } else if (eventType === 'recurrence') {
                            info.el.classList.add('event-recurrence');
                        }
                    }
                },
                events: [
                    {
                        title: 'Event 1',
                        start: '2024-07-01',
                        extendedProps: {
                            eventType: 'one-time'
                        }
                    },
                    {
                        title: 'Event 2',
                        start: '2024-07-05',
                        end: '2024-07-07',
                        extendedProps: {
                            eventType: 'meeting'
                        }
                    },
                    {
                        title: 'Event 3',
                        start: '2024-07-09T12:30:00',
                        allDay: false,
                        extendedProps: {
                            eventType: 'recurrence'
                        }
                    }
                ],
                dateClick: function(info) {
                    $('#eventDate').val(info.dateStr);
                    $('#meetingStartDate').val(info.dateStr);
                    $('#recurrenceStartDate').val(info.dateStr);
                    $('#eventModal').modal('show');
                }
            });
            calendar.render();

            $('#eventType').change(function() {
                var eventType = $(this).val();
                $('.conditional-fields').hide();
                if (eventType === 'one-time') {
                    $('#oneTimeFields').show();
                } else if (eventType === 'meeting') {
                    $('#meetingFields').show();
                } else if (eventType === 'recurrence') {
                    $('#recurrenceFields').show();
                }
            });

            $('#recurrenceType').change(function() {
                var recurrenceType = $(this).val();
                if (recurrenceType === 'weekly') {
                    $('#weeklyFields').show();
                } else {
                    $('#weeklyFields').hide();
                }
            });

            $('#eventForm').on('submit', function(e) {
                e.preventDefault();
                var title = $('#eventTitle').val();
                var eventType = $('#eventType').val();
                var start, end, location, invitee, description, recurrenceType, days, weekNumber;

                if (eventType === 'one-time') {
                    start = $('#eventDate').val() + 'T' + $('#eventStartTime').val();
                    end = $('#eventDate').val() + 'T' + $('#eventEndTime').val();
                    calendar.addEvent({
                        title: title,
                        start: start,
                        end: end,
                        extendedProps: {
                            eventType: 'one-time'
                        }
                    });
                } else if (eventType === 'meeting') {
                    start = $('#meetingStartDate').val() + 'T' + $('#meetingStartTime').val();
                    end = $('#meetingEndDate').val() + 'T' + $('#meetingEndTime').val();
                    location = $('#meetingLocation').val();
                    invitee = $('#meetingInvitee').val();
                    description = $('#meetingDescription').val();
                    calendar.addEvent({
                        title: title,
                        start: start,
                        end: end,
                        extendedProps: {
                            eventType: 'meeting',
                            location: location,
                            invitee: invitee,
                            description: description
                        }
                    });
                } else if (eventType === 'recurrence') {
                    start = $('#recurrenceStartDate').val() + 'T' + $('#recurrenceStartTime').val();
                    end = $('#recurrenceEndDate').val() + 'T' + $('#recurrenceEndTime').val();
                    recurrenceType = $('#recurrenceType').val();
                    weekNumber = $('#weekNumber').val();
                    days = [];
                    $('#weeklyFields input[type="checkbox"]:checked').each(function() {
                        days.push($(this).attr('id'));
                    });

                    var startDate = new Date($('#recurrenceStartDate').val());
                    var endDate = new Date($('#recurrenceEndDate').val());
                    var weekNumberInt = parseInt(weekNumber);
                    var currentDate = startDate;

                    while (currentDate <= endDate) {
                        var dayOfWeek = currentDate.getDay();
                        if (days.includes(dayOfWeek.toString())) {
                            var weekOfMonth = Math.ceil((currentDate.getDate() - currentDate.getDay()) / 7) + 1;
                            if (weekOfMonth === weekNumberInt) {
                                var recurrenceStart = new Date(currentDate);
                                var recurrenceEnd = new Date(currentDate);
                                recurrenceStart.setHours(start.split('T')[1].split(':')[0]);
                                recurrenceStart.setMinutes(start.split('T')[1].split(':')[1]);
                                recurrenceEnd.setHours(end.split('T')[1].split(':')[0]);
                                recurrenceEnd.setMinutes(end.split('T')[1].split(':')[1]);

                                calendar.addEvent({
                                    title: title,
                                    start: recurrenceStart.toISOString(),
                                    end: recurrenceEnd.toISOString(),
                                    extendedProps: {
                                        eventType: 'recurrence',
                                        recurrenceType: recurrenceType,
                                        weekNumber: weekNumber,
                                        days: days
                                    }
                                });
                            }
                        }
                        currentDate.setDate(currentDate.getDate() + 1);
                    }
                }

                $('#eventModal').modal('hide');
            });

            $('#btn-new-event').click(function() {
                $('#eventModal').modal('show');
            });
        });
    </script>
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
                        <label for="eventType" class="form-label">Event Type</label>
                        <select class="form-select" id="eventType" name="eventType" required>
                            <option value="" selected disabled>Select Event Type</option>
                            <option value="one-time">One-Time Event</option>
                            <option value="meeting">Meeting</option>
                            <option value="recurrence">Recurrence</option>
                        </select>
                    </div>

                    <!-- One-Time Event Fields -->
                    <div id="oneTimeFields" class="conditional-fields">
                        <div class="mb-3">
                            <label for="eventDate" class="form-label">Event Date</label>
                            <input type="date" class="form-control" id="eventDate" name="eventDate">
                        </div>
                        <div class="mb-3">
                            <label for="eventStartTime" class="form-label">Start Time</label>
                            <input type="time" class="form-control" id="eventStartTime" name="eventStartTime">
                        </div>
                        <div class="mb-3">
                            <label for="eventEndTime" class="form-label">End Time</label>
                            <input type="time" class="form-control" id="eventEndTime" name="eventEndTime">
                        </div>
                    </div>

                    <!-- Meeting Fields -->
                    <div id="meetingFields" class="conditional-fields">
                        <div class="mb-3">
                            <label for="meetingStartDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="meetingStartDate" name="meetingStartDate">
                        </div>
                        <div class="mb-3">
                            <label for="meetingStartTime" class="form-label">Start Time</label>
                            <input type="time" class="form-control" id="meetingStartTime" name="meetingStartTime">
                        </div>
                        <div class="mb-3">
                            <label for="meetingEndDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="meetingEndDate" name="meetingEndDate">
                        </div>
                        <div class="mb-3">
                            <label for="meetingEndTime" class="form-label">End Time</label>
                            <input type="time" class="form-control" id="meetingEndTime" name="meetingEndTime">
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
                        <div class="mb-3">
                            <label for="recurrenceStartDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="recurrenceStartDate" name="recurrenceStartDate">
                        </div>
                        <div class="mb-3">
                            <label for="recurrenceStartTime" class="form-label">Start Time</label>
                            <input type="time" class="form-control" id="recurrenceStartTime" name="recurrenceStartTime">
                        </div>
                        <div class="mb-3">
                            <label for="recurrenceEndDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="recurrenceEndDate" name="recurrenceEndDate">
                        </div>
                        <div class="mb-3">
                            <label for="recurrenceEndTime" class="form-label">End Time</label>
                            <input type="time" class="form-control" id="recurrenceEndTime" name="recurrenceEndTime">
                        </div>
                        <div class="mb-3">
                            <label for="recurrenceType" class="form-label">Recurrence Type</label>
                            <select class="form-select" id="recurrenceType" name="recurrenceType">
                                <option value="" selected disabled>Select Recurrence Type</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
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
@endsection