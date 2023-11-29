@extends('supervisors.layout')
@push('css')
    <style>
        .find-courses-from-bg.find-courses-from-bg-three::before {
            background-color: #f3f3f5;
        }
        .find-courses-from-bg.find-courses-from-bg-three{
            background-image: unset;
            color:    color: var(--main-color) !important;
        }
        .find-courses-from-bg.find-courses-from-bg-three .form-control{
            color:    color: var(--main-color) !important;

        }
        .find-courses-from-bg.find-courses-from-bg-three .form-group i {
            color:    color: var(--main-color) !important;
        }
        ::placeholder {
            color: rgb(92, 92, 92) !important
        }
    </style>
@endpush
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
