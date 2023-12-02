@extends('professors.layout')
@push('title')
    <div class="page-title-content">
        <h2>جميع الإشعارات</h2>
        <ul>
            <li>
                <a href="{{ route('professor.profile') }}">
                    البروفايل
                </a>
            </li>
            <li class="active">جميع الإشعارات</li>
        </ul>
    </div>
@endpush

@section('section')
    @livewire('professor.notifications')
@endsection
