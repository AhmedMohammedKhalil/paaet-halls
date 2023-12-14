@extends('layouts.main')
@push('css')
    <style>
        .single-study{
            height: 300px;
        }
    </style>
@endpush
@push('title')
    <div class="page-title-content">
        <h2>من نحن</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">من نحن</li>
        </ul>
    </div>
@endpush
@section('content')
<section class="about-area about-area-style-three bg-color-f8fafb ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-two mr-15">
                    <img src="{{ asset('assets/images/abouts/'.$about->image) }}" alt="Image">

                    <div class="about-shape">
                        <img src="{{ asset('assets/images/about-shape.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content ml-15">
                    <h2>من نحن</h2>

                    <p>{!! nl2br($about->content) !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Study Area -->
@if($aboutservices != null)
<section class="studys-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>خداماتنا</h2>
        </div>

        <div class="row justify-content-center">
            @foreach ($aboutservices as $a)
                <div class="col-lg-4 col-md-6">
                    <div class="single-study study-f3f3f4">
                        <i class="flaticon-finance"></i>
                        <h3>
                        <a href="javascript:void(0)">{{ $a->title }}</a>
                        </h3>
                        <p>{!! nl2br($a->content) !!}</p>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</section>
@endif
<!-- End Study Area -->
@endsection
