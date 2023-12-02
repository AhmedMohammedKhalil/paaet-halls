
@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>إضافة رد</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">إضافة رد</li>
        </ul>
    </div>
@endpush
@section('content')


<!-- Start User Area -->
<section class="user-area ptb-100">
    <div class="container">
        <div class="user-form-content max-width-600">
            @livewire('supervisor.add-reply',['id'=>$id])
        </div>
    </div>
    </section>
    <!-- End User Area -->
@endsection
