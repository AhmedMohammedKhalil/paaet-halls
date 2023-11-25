@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>تفاصيل القاعة</h2>
        <ul>
            <li>
                <a href="{{ route('allhalls') }}">
                    جميع القاعات
                </a>
            </li>
            <li class="active">تفاصيل القاعة</li>
        </ul>
    </div>
@endpush
@section('content')
<section class="product-details-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-image mr-15">
                    <img src="{{ asset('assets/images/product/product-9.jpg') }}" alt="Image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="product-details-desc ml-15">
                    <h3>Natural</h3>



                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                        gubergren dolore</p>

                    <ul class="sku">
                        <li>
                            SKU
                            <span>:SKU</span>
                        </li>
                        <li>
                            Category
                            <span>:Book</span>
                        </li>
                        <li>
                            Tags
                            <span>:Natural Book</span>
                        </li>
                        <li>
                            Availability
                            <span>:In Stock</span>
                        </li>
                    </ul>

                    <button type="submit" class="default-btn mr-20">
                            عرض الجدول
                        </button>
                    <button type="submit" class="default-btn">
                            حجز
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Banner Area -->
<section class="banner-area bg-2 ptb-100 banner-area-style-two jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="video-banner">
            <img src="assets/images/banner/video-img.jpg" alt="Image">

            <div class="video-button">
                <a href="https://www.youtube.com/watch?v=rl93WvCJt-U" class="popup-youtube video-btn">
                        <i class="flaticon-play-button"></i>
                    </a>
            </div>

            <div class="shape-1">
                <img src="assets/images/banner/banner-shape.png" alt="Image">
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
 <!-- Start Study Area -->
<section class="study-area pt-100 pb-70 mt-100">
    <div class="container">
        <div class="section-title white-title">
            <h2>جيمع الخدمات</h2>
        </div>

        <div class="row justify-content-center">
            <div class="study-slider owl-carousel owl-theme">
                <div class="single-study">
                    <i class="flaticon-finance"></i>
                    <h3>
                        <a href="study-online.html">Business and finance</a>
                    </h3>
                </div>

                <div class="single-study">
                    <i class="flaticon-data-scientist"></i>
                    <h3>
                        <a href="study-online.html">IT and data science</a>
                    </h3>

                </div>

                <div class="single-study">
                    <i class="flaticon-compliant"></i>
                    <h3>
                        <a href="study-online.html">Law and criminology</a>
                    </h3>

                </div>

                <div class="single-study">
                    <i class="flaticon-health"></i>
                    <h3>
                        <a href="study-online.html">Health and medicine</a>
                    </h3>

                </div>

                <div class="single-study">
                    <i class="flaticon-data-scientist"></i>
                    <h3>
                        <a href="study-online.html">Business and finance</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Study Area -->
<!-- Start Study Area -->
<section class="studys-area study-area-style-two ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>جميع الصور</h2>
        </div>

        <!-- Start Gallery Area -->
    <div class="gallery-area gallery-popup ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <img src="assets/images/gallery/gallery-1.jpg" alt="Image">

                        <div class="gallery-item-content">
                            <div class="gallery-link">
                                <a href="assets/images/gallery/gallery-1.jpg">
										<i class="ri-add-fill"></i>
									</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <img src="assets/images/gallery/gallery-2.jpg" alt="Image">

                        <div class="gallery-item-content">
                            <div class="gallery-link">
                                <a href="assets/images/gallery/gallery-2.jpg">
										<i class="ri-add-fill"></i>
									</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <img src="assets/images/gallery/gallery-3.jpg" alt="Image">

                        <div class="gallery-item-content">
                            <div class="gallery-link">
                                <a href="assets/images/gallery/gallery-3.jpg">
										<i class="ri-add-fill"></i>
									</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <img src="assets/images/gallery/gallery-4.jpg" alt="Image">

                        <div class="gallery-item-content">
                            <div class="gallery-link">
                                <a href="assets/images/gallery/gallery-4.jpg">
										<i class="ri-add-fill"></i>
									</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
    </div>
</section>
<!-- End Study Area -->
@endsection
