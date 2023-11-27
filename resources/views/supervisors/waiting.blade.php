
@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>الموافقة</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">انتظر الموافقة من المسؤول</li>
        </ul>
    </div>
@endpush
@section('content')


<!-- Start User Area -->
<section class="user-area ptb-100" style="height:500px;">
    <div class="container">
        <div class="user-form-content max-width-600 text-center ">
            برجاء انتظار الموافقة 
        </div>
    </div>
    </section>
    <!-- End User Area -->
@endsection