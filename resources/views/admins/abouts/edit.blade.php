@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>تعديل من نحن</h2>
        <ul>
            <li>
                <a href="{{ route('admin.profile') }}">
                    البروفايل
                </a>
            </li>
            <li class="active">تعديل من نحن</li>
        </ul>
    </div>
@endpush
@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">
    <div class="col-lg-12 col-md-6">
        <section class="user-area">
            <div class="container">
                <div class="user-form-content max-width-600">
                    <livewire:admin.about.edit :about_id="$about_id" />
                </div>
            </div>
        </section>
    </div>
</div>
@endsection