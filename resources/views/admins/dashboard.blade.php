@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>الإحصائيات</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">الإحصائيات</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">
    <div class="col-lg-12 col-md-6">
        <!-- Start Counter Area -->
    <section class="counter-area bg-color-f8fafb pb-70">
        <div class="container">
            <div class="counter-bg">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-graduated"></i>

                            <h2>
                                <span dir="ltr" id="counter">500</span>
                            </h2>
                            <h4>Students</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-teacher"></i>

                            <div class="count-title">
                                <h2>
                                    <span dir="ltr" id="counter">500</span>
                                </h2>
                                <h4>Teachers</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-book-1"></i>

                            <div class="count-title">
                                <h2>
                                    <span dir="ltr" id="counter">500</span>
                                </h2>
                                <h4>Subjects</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-graduation-cap"></i>

                            <div class="count-title">
                                <h2>
                                    <span dir="ltr" id="counter">500</span>
                                </h2>
                                <h4>Degrees</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape counter-shape-1">
                    <img src="{{ asset('assets/images/counter-shape-1.png') }}" alt="Image">
                </div>
                <div class="shape counter-shape-2">
                    <img src="{{ asset('assets/images/counter-shape-2.png') }}" alt="Image">
                </div>
            </div>
        </div>
    </section>

    </div>
</div>
@endsection
