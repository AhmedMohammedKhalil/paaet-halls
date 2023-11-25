@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>تفاصيل المبنى</h2>
        <ul>
            <li>
                <a href="{{ route('allbuildings') }}">
                    جميع المبانى
                </a>
            </li>
            <li class="active">تفاصيل المبنى</li>
        </ul>
    </div>
@endpush

@section('content')

    <!-- Stat About Area -->
    <section class="about-area bg-color-f8fafb ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-two mr-15">
                        <img src="{{ asset('assets/images/about-img-2.jpg') }}" alt="Image">

                        <div class="about-shape">
                            <img src="{{ asset('assets/images/about-shape.png') }}" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content ml-15">
                        <h2>اسم المبنى</h2>

                        <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
    <!-- Start Study Area -->
    <section class="studys-area study-area-style-two ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>جميع القاعات</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-study style-img">
                        <img src="assets/images/study/study-1.jpg" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-finance"></i>
                            <h3>
                                <a href="{{ route('showhall') }}">Business and finance</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="{{ route('showhall') }}" class="read-more">
									Find out more
									<span class="ri-arrow-left-line"></span>
								</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-study style-img">
                        <img src="assets/images/study/study-2.jpg" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-data-scientist"></i>
                            <h3>
                                <a href="{{ route('showhall') }}">IT and data science</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="{{ route('showhall') }}" class="read-more">
									Find out more
									<span class="ri-arrow-left-line"></span>
								</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-study style-img">
                        <img src="assets/images/study/study-3.jpg" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-compliant"></i>
                            <h3>
                                <a href="{{ route('showhall') }}">Law and criminology</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="{{ route('showhall') }}" class="read-more">
									Find out more
									<span class="ri-arrow-left-line"></span>
								</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-study style-img">
                        <img src="assets/images/study/study-4.jpg" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-health"></i>
                            <h3>
                                <a href="{{ route('showhall') }}">Health and medicine</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="{{ route('showhall') }}" class="read-more">
									Find out more
									<span class="ri-arrow-left-line"></span>
								</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-study style-img">
                        <img src="assets/images/study/study-5.jpg" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-sprout"></i>
                            <h3>
                                <a href="{{ route('showhall') }}">Agricultural sciences</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="{{ route('showhall') }}" class="read-more">
									Find out more
									<span class="ri-arrow-left-line"></span>
								</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-study style-img">
                        <img src="assets/images/study/study-6.jpg" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-mind"></i>
                            <h3>
                                <a href="{{ route('showhall') }}">Psychology</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="{{ route('showhall') }}" class="read-more">
									Find out more
									<span class="ri-arrow-left-line"></span>
								</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-study style-img">
                        <img src="assets/images/study/study-7.jpg" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-book"></i>
                            <h3>
                                <a href="{{ route('showhall') }}">Library studies</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="{{ route('showhall') }}" class="read-more">
									Find out more
									<span class="ri-arrow-left-line"></span>
								</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-study style-img">
                        <img src="assets/images/study/study-8.jpg" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-presentation"></i>
                            <h3>
                                <a href="{{ route('showhall') }}">Teaching & education</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="{{ route('showhall') }}" class="read-more">
									Find out more
									<span class="ri-arrow-left-line"></span>
								</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Study Area -->
@endsection
