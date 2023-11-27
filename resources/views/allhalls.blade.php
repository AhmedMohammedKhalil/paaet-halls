@extends('layouts.main')
@push('css')
<style>
    .single-study{
        transition: all 1s;
        border-radius:20px;
        overflow: hidden;
    }
    .single-study img{
        height: 250px;
        width: 100%
    }
    .single-study:hover{
        box-shadow: gray 1px 1px 5px;
    }
</style>
@endpush
@push('title')
    <div class="page-title-content">
        <h2>جميع القاعات</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">جميع القاعات</li>
        </ul>
    </div>
@endpush
@section('content')
    <!-- Start Find A Courses Area -->
    <section class="find-courses-area pt-100">
        <div class="container">
            @livewire('search-hall',['halls'=>$halls])
        </div>
    </section>
    <!-- End Find A Courses Area -->

    <!-- Start Study Area -->
    <section class="studys-area study-area-style-two ptb-100" style="min-height: 500px">
        <div class="container">
            @livewire('searching-hall')
        </div>
    </section>
    <!-- End Study Area -->
@endsection
