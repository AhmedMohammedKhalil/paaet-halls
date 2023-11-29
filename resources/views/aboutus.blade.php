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
                    <img src="{{ asset('assets/images/about-img-3.jpg') }}" alt="Image">

                    <div class="about-shape">
                        <img src="{{ asset('assets/images/about-shape.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content ml-15">
                    <span>موقعنا</span>
                    <h2>من نحن</h2>

                    <p>نحن مجموعه من الطلاب الخريجين قمنا بعمل موقع الكترونى لمشروع تخرجنا ليخدم الهيئة التدريسية  وتسهيل لهم حجز القاعات وتنظيم لهم عملية الحجز ومعرفة كافة التفاصيل عن القاعات قبل حجزها وايضا طريقة للتواصل مع المشرفين والقائمين والمسئولين عن القاعات<p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Study Area -->
<section class="studys-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>خداماتنا</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-study study-f3f3f4">
                    <i class="flaticon-finance"></i>
                    <h3>
                        <a href="javascript:void(0)">حجز القاعات</a>
                    </h3>
                    <p>نقدم خدمات حجز القاعات لمختلف الفعاليات بما في ذلك المؤتمرات والورش العلمية والفعاليات الثقافية</p></div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-study study-f3f3f4">
                    <i class="flaticon-finance"></i>
                    <h3>
                        <a href="javascript:void(0)">الدعم الكامل</a>
                    </h3>
                    <p>دعم كامل لتنظيم الفعاليات، بما في ذلك ترتيبات التجهيز والتنسيق مع الخدمات الإضافية</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-study study-f3f3f4">
                    <i class="flaticon-finance"></i>
                    <h3>
                        <a href="javascript:void(0)">خيارات مرنه للحجز</a>
                    </h3>
                    <p>خيارات مرنة للحجز، مع توفير فترات زمنية متنوعة لتناسب جداول الفعاليات المختلفة</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Study Area -->
@endsection
