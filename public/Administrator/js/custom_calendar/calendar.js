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
                if (eventType === 'event') {
                    info.el.classList.add('bg-success-subtle');
                } else if (eventType === 'meeting') {
                    info.el.classList.add('bg-info-subtle');
                } else if (eventType === 'recurrence') {
                    info.el.classList.add('bg-warning-subtle');
                }
            }
        },
      //   events: [
      //       {
      //           title: 'Event 1',
      //           start: '2024-07-01',
      //           extendedProps: {
      //               eventType: 'one-time'
      //           }
      //       },
      //       {
      //           title: 'Event 2',
      //           start: '2024-07-05',
      //           end: '2024-07-07',
      //           extendedProps: {
      //               eventType: 'meeting'
      //           }
      //       },
      //       {
      //           title: 'Event 3',
      //           start: '2024-07-09T12:30:00',
      //           end: '2024-07-10T12:30:00',
      //           allDay: false,
      //           extendedProps: {
      //               eventType: 'recurrence'
      //           }
      //       }
      //   ],
        dateClick: function(info) {
            $('#eventDate').val(info.dateStr);
            $('#meetingStartDate').val(info.dateStr);
            $('#recurrenceStartDate').val(info.dateStr);
            $('#eventModal').modal('show');
        },
        eventClick: function(info) {
            $('#eventDetailsTitle').text(info.event.title);
            $('#eventDetailsTime').text('Start: ' + info.event.start.toLocaleString() + (info.event.end ? ', End: ' + info.event.end.toLocaleString() : ''));
            $('#eventDetailsDescription').text(info.event.extendedProps.description || '');
            $('#eventDetailsLocation').text(info.event.extendedProps.location || '');
            $('#eventDetailsModal').modal('show');
        }
    });
    calendar.render();

    $('.conditional-fields-one').hide();
    $('.conditional-fields').hide();

    $('#Type').change(function() {
        var Type = $(this).val();
        $('.conditional-fields').hide();
        $('.conditional-fields-one').hide();
        if (Type === 'event') {
            $('#oneTimeFields').show();
        }else if(Type === 'meeting'){
            $('#EventType').show();
        }
    });

    $('#eventType').change(function() {
        var eventType = $(this).val();
        $('.conditional-fields').hide();
        if (eventType === 'meeting') {
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
        var Type = $('#Type').val();
        var eventType = $('#eventType').val();
        var start, end, location, invitee, description, recurrenceType, days, weekNumber;

        if (Type === 'event') {
            start = $('#eventDate').val() + 'T' + $('#eventStartTime').val();
            end = $('#eventDate').val() + 'T' + $('#eventEndTime').val();
            calendar.addEvent({
                title: title,
                start: start,
                end: end,
                extendedProps: {
                    eventType: 'event'
                }
            });
        } 
        if (eventType === 'meeting') {
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
            location = $('#recurrenceLocation').val();
            invitee = $('#recurrenceInvitee').val();
            description = $('#recurrenceDescription').val();
            recurrenceType = $('#recurrenceType').val();
            weekNumber = $('#weekNumber').val();
            days = [];
            $('#weeklyFields input[type="checkbox"]:checked').each(function() {
                days.push($(this).attr('id'));
            });

            var startDate = new Date($('#recurrenceStartDate').val());
            var endDate = new Date($('#recurrenceEndDate').val());
            var occurrences = [];

            if (recurrenceType === 'daily') {
                for (var d = new Date(startDate); d <= endDate; d.setDate(d.getDate() + 1)) {
                    var occurrence = {
                        title: title,
                        start: new Date(d.getFullYear(), d.getMonth(), d.getDate(), $('#recurrenceStartTime')[0].valueAsNumber / 3600000).toISOString(),
                        end: new Date(d.getFullYear(), d.getMonth(), d.getDate(), $('#recurrenceEndTime')[0].valueAsNumber / 3600000).toISOString(),
                        extendedProps: {
                            eventType: 'recurrence',
                            location: location,
                            invitee: invitee,
                            description: description,
                        }
                    };
                    occurrences.push(occurrence);
                }
            } else if (recurrenceType === 'weekly') {
                var weekNumberInt = parseInt(weekNumber);
                for (var d = new Date(startDate); d <= endDate; d.setDate(d.getDate() + 1)) {
                    var firstDayOfMonth = new Date(d.getFullYear(), d.getMonth(), 1);
                    var currentWeekNumber = Math.ceil(((d - firstDayOfMonth) / (1000 * 60 * 60 * 24) + firstDayOfMonth.getDay() + 1) / 7);
                    if (currentWeekNumber === weekNumberInt && days.includes(d.toLocaleString('en-us', { weekday: 'long' }).toLowerCase())) {
                        var occurrence = {
                            title: title,
                            start: new Date(d.getFullYear(), d.getMonth(), d.getDate(), $('#recurrenceStartTime')[0].valueAsNumber / 3600000).toISOString(),
                            end: new Date(d.getFullYear(), d.getMonth(), d.getDate(), $('#recurrenceEndTime')[0].valueAsNumber / 3600000).toISOString(),
                            extendedProps: {
                                eventType: 'recurrence',
                                location: location,
                                invitee: invitee,
                                description: description,
                            }
                        };
                        occurrences.push(occurrence);
                    }
                }
            }

            occurrences.forEach(function(occurrence) {
                calendar.addEvent(occurrence);
            });
        }

        $('#eventModal').modal('hide');
        $('#eventForm')[0].reset();
        $('.conditional-fields').hide();
    });
});