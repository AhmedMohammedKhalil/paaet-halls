@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>بحث</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">بحث</li>
        </ul>
    </div>
@endpush
@section('content')
    <!-- Start Find A Courses Area -->
    <section class="find-courses-area pt-100">
        <div class="container">
            <form class="find-courses-from-bg find-courses-from-bg-three mt-0">
                <h2>بحث عن القاعة</h2>

                <ul>
                    <li>
                        <label class="single-check">
								ولاد
								<input type="radio" checked="checked" name="radio-2">
								<span class="checkmark"></span>
							</label>
                    </li>

                    <li>
                        <label class="single-check">
								بنات
								<input type="radio" name="radio-2">
								<span class="checkmark"></span>
							</label>
                    </li>
                </ul>

                <div class="row">


                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <select class="form-control">
									<option value="1">السعة</option>
									<option value="2">Web Design</option>
									<option value="3">Web Developement</option>
									<option value="4">Graphic Design</option>
									<option value="5">App Developement</option>
								</select>
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <select class="form-control">
									<option value="1">الخدمات</option>
									<option value="2">العربيّة</option>
									<option value="3">Deutsch</option>
									<option value="4">Português</option>
									<option value="5">简体中文</option>
								</select>
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="datetime-local" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="datetime-local" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="offset-3 col-lg-6 col-md-6">
                        <button type="submit" class="default-btn">
								Search
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
                <h2>Browse courses by study area</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-study style-img">
                        <img src="assets/images/study/study-1.jpg" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-finance"></i>
                            <h3>
                                <a href="study-online.html">Business and finance</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="study-online.html" class="read-more">
									Find out more
									<span class="ri-arrow-right-line"></span>
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
                                <a href="study-online.html">IT and data science</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="study-online.html" class="read-more">
									Find out more
									<span class="ri-arrow-right-line"></span>
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
                                <a href="study-online.html">Law and criminology</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="study-online.html" class="read-more">
									Find out more
									<span class="ri-arrow-right-line"></span>
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
                                <a href="study-online.html">Health and medicine</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="study-online.html" class="read-more">
									Find out more
									<span class="ri-arrow-right-line"></span>
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
                                <a href="study-online.html">Agricultural sciences</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="study-online.html" class="read-more">
									Find out more
									<span class="ri-arrow-right-line"></span>
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
                                <a href="study-online.html">Psychology</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="study-online.html" class="read-more">
									Find out more
									<span class="ri-arrow-right-line"></span>
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
                                <a href="study-online.html">Library studies</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="study-online.html" class="read-more">
									Find out more
									<span class="ri-arrow-right-line"></span>
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
                                <a href="study-online.html">Teaching & education</a>
                            </h3>
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                            <a href="study-online.html" class="read-more">
									Find out more
									<span class="ri-arrow-right-line"></span>
								</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="study-load">
                        <a href="#" class="default-btn">
								Load more
								<i class="ri-arrow-right-line"></i>
							</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Study Area -->
@endsection
