@extends('supervisors.layout')
@push('title')
    <div class="page-title-content">
        <h2>تفاصيل القاعة</h2>
        <ul>
            <li>
                <a href="{{ route('supervisor.profile') }}">البروفايل</a>
            </li>
            <li class="active">تفاصيل القاعة</li>
        </ul>
    </div>
@endpush
@section('content')
    @include('commons.hallDetails',['search'=> $search,'path'=>'supervisor'])
@endsection
