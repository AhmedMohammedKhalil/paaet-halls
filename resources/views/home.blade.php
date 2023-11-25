@extends('layouts.main')
@section('landing')
<section class="banner-area bg-3 jarallax pb-100" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span>مرحبا بك فى موقعنا</span>
                            <h1>احجز قاعتك الان مع اختيار افضل الخدمات </h1>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="video-button">
                            <a href="https://www.youtube.com/watch?v=rl93WvCJt-U" class="popup-youtube video-btn">
                                    <i class="flaticon-play-button"></i>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
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
                    <span>About our University</span>
                    <h2>Our education system inspires the next generation</h2>

                    <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>

                    <a href="{{ route('aboutus') }}" class="default-btn">
                            المزيد
                            <i class="ri-arrow-right-line"></i>
                        </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="study-area study-area-style-two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>المبانى</h2>
        </div>

        <div class="row justify-content-center">
            <div class="study-slider owl-carousel owl-theme">
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

                <div class="single-study style-img">
                    <img src="assets/images/study/study-5.jpg" alt="Image">

                    <div class="single-study-content">
                        <i class="flaticon-data-scientist"></i>
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
        </div>
    </div>
</section>
<section class="study-area study-area-style-two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>القاعات</h2>
        </div>

        <div class="row justify-content-center">
            <div class="study-slider owl-carousel owl-theme">
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

                <div class="single-study style-img">
                    <img src="assets/images/study/study-5.jpg" alt="Image">

                    <div class="single-study-content">
                        <i class="flaticon-data-scientist"></i>
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
        </div>
    </div>
</section>

<!-- Start Contact Area -->
<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <h2>تواصل معنا</h2>
        </div>

        <form id="contactForm">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <button type="submit" class="default-btn">
                            <span>ارسال</span>
                        </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Contact Area -->
@endsection
