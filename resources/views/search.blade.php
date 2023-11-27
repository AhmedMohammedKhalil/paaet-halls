@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>بحث</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">بحث</li>
        </ul>
    </div>
@endpush
@section('content')
    <!-- Start Find A Courses Area -->
    <section class="find-courses-area pt-100">
        <div class="container">
            @livewire('search',['halls'=>$halls])
        </div>
    </section>
    <!-- End Find A Courses Area -->

    <!-- Start Study Area -->
    <section class="studys-area study-area-style-two ptb-100" style="min-height: 500px">
        <div class="container">
            @livewire('searching')
        </div>
    </section>
    <!-- End Study Area -->
@endsection
