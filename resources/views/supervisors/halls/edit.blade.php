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
        /* option[selected] {
            background: antiquewhite;
        } */
    </style>
@endpush
@push('title')
    <div class="page-title-content">
        <h2>تعديل قاعة</h2>
        <ul>
            <li>
                <a href="{{ route('supervisor.profile') }}">
                    لوحة التحكم
                </a>
            </li>
            <li class="active">تعديل قاعة</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">
    <div class="col-lg-12 col-md-6">
        <section class="user-area">
            <div class="container">
                <div class="user-form-content max-width-600">
                    <livewire:supervisor.edit-hall :hall_id="$hall_id"/>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
