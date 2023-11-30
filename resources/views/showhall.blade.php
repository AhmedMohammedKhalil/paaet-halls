@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>تفاصيل القاعة</h2>
        <ul>
            @if($route == 'home')
            <li>
                <a href="{{ $url }}">الرئيسية </a>
            </li>
            @elseif($route == 'showbuilding')
                <li>
                    <a href="{{ $url }}">تفاصيل المبنى</a>
                </li>
            @elseif($route == 'search')
                <li>
                    <a href="{{ $url }}">بحث</a>
                </li>
            @else
            <li>
                <a href="{{ route('allhalls') }}">جميع القاعات</a>
            </li>
            @endif
            <li class="active">تفاصيل القاعة</li>
        </ul>
    </div>
@endpush
@section('content')
    @include('commons.hallDetails',['search'=> $search])
@endsection
