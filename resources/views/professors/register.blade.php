
@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>إنشاء حساب عضو هيئة التدريس</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">إنشاء حساب عضو هيئة التدريس</li>
        </ul>
    </div>
@endpush
@section('content')


<!-- Start User Area -->
<section class="user-area ptb-100">
    <div class="container">
        <div class="user-form-content max-width-600">
            @livewire('professor.register')
        </div>
    </div>
    </section>
    <!-- End User Area -->
@endsection
