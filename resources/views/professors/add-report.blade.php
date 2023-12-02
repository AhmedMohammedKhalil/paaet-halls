
@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>إبلاغ عن عطل</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">إبلاغ عن عطل</li>
        </ul>
    </div>
@endpush
@section('content')


<!-- Start User Area -->
<section class="user-area ptb-100">
    <div class="container">
        <div class="user-form-content max-width-600">
            @livewire('professor.add-report',['hall'=>$hall,'booking'=>$booking])
        </div>
    </div>
    </section>
    <!-- End User Area -->
@endsection
