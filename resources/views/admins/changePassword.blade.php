@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>تعديل كلمة السر</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">تعديل كلمة السر</li>
        </ul>
    </div>
@endpush
@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">
    <div class="col-lg-12 col-md-6">
        <section class="user-area">
            <div class="container">
                <div class="user-form-content max-width-600">
                    <livewire:admin.change-password />
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
