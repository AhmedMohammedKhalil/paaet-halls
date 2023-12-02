@extends('supervisors.layout')
@push('title')
    <div class="page-title-content">
        <h2>جميع الإشعارات</h2>
        <ul>
            <li>
                <a href="{{ route('supervisor.profile') }}">
                    البروفايل
                </a>
            </li>
            <li class="active">جميع الإشعارات</li>
        </ul>
    </div>
@endpush

@section('section')
    @livewire('supervisor.notifications')
@endsection
