@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>جميع القاعات</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">جميع القاعات</li>
        </ul>
    </div>
@endpush
@section('content')
    <!-- Start Find A Courses Area -->
    <section class="find-courses-area pt-100">
        <div class="container">
            <form class="find-courses-from-bg find-courses-from-bg-three mt-0">
                <h2>بحث عن القاعات</h2>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="بحث">
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6">
                        <button type="submit" class="default-btn">
								بحث
								<i class="ri-search-line"></i>
							</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Find A Courses Area -->

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
