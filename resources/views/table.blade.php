@extends('layouts.main')
@push('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" /> --}}
<style>
    .fc-view-harness ,.fc-toolbar-title{
        direction: rtl
    }
    .fc-view-harness{
        height: 800px !important;
    }
    .fc-event-main {
        text-align: center
    }
</style>
@endpush
@push('title')
    <div class="page-title-content">
        <h2>الجدول</h2>
    </div>
@endpush
@section('content')
<section class="ptb-100" style="height: 1100px">
    <div class="container">
       <div id="calendar"></div>
    </div>
</section>

@endsection
@push('js')
    {{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script> --}}
    <script src="{{ asset('assets/js/index.global.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'ar',
            direction:'rtl',
            //timeZone: 'Asia/kuwait',
            initialView: 'timeGridWeek',
            slotMinTime:'08:00:00',
            firstDay: -1,
            allDaySlot: false,
            textColor:'red',
            buttonText:{
            today:    'اليوم',
            day:      'يوم',
            week:     'الاسبوع',
            month: 'شهر'
            },
            headerToolbar: {
            left: 'today prev,next',
            center: 'title',
            right: 'timeGridWeek,timeGridDay'
            },
            events:  @json($events)
        });

        calendar.render();
        });
    </script>

@endpush
