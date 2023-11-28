@extends('supervisors.layout')
@push('title')
    <div class="page-title-content">
        <h2>اضافة قاعة جديدة</h2>
        <ul>
            <li>
                <a href="{{ route('supervisor.profile') }}">
                    لوحة التحكم
                </a>
            </li>
            <li class="active">اضافة قاعة جديدة</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">
    <div class="col-lg-12 col-md-6">
        <section class="user-area">
            <div class="container">
                <div class="user-form-content max-width-600">
                    <livewire:supervisor.add-hall />
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
