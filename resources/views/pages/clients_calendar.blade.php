@extends('pages.layouts.app')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.min.css') }}">
@endpush

@section('content')
    <div class="dashboard-details dashboard-header padding-spacing ">
        <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center client-wrap">
            <div class="title-wrap">
                <span>Clients</span>
                <h1>Calendar</h1>
            </div>
            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                <li><a href="javascript:void(0)">Add trip</a></li>
                <li><a href="javascript:void(0)">Add task</a></li>
            </ul>
        </div>

        <div id="calendar"></div>

    </div>
@endsection
@push('js')
    <script type="text/javascript" src="{{ asset('assets/js/main.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: '2022-07-21',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [{
                        title: 'All Day Event',
                        start: '2022-04-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2022-04-07',
                        end: '2022-04-10'
                    },
                    {
                        groupId: '999',
                        title: 'Repeating Event',
                        start: '2022-04-09T16:00:00'
                    },
                    {
                        groupId: '999',
                        title: 'Repeating Event',
                        start: '2022-04-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2022-04-11',
                        end: '2022-04-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2022-04-12T10:30:00',
                        end: '2022-04-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2022-04-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2022-04-12T14:30:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2022-04-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2022-04-28'
                    }
                ]
            });

            calendar.render();
        });
    </script>
@endpush
