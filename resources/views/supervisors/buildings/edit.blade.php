@extends('supervisors.layout')
@push('title')
    <div class="page-title-content">
        <h2>تعديل المبني </h2>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    لوحة التحكم
                </a>
            </li>
            <li class="active">تعديل المبني </li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">
    <div class="col-lg-12 col-md-6">
        <section class="user-area">
            <div class="container">
                <div class="user-form-content max-width-600">
                    <livewire:supervisor.edit-building :building="$building" />
                </div>
            </div>
        </section>
    </div>
</div>
@endsection