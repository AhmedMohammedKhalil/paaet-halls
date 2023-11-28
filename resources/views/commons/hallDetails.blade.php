@push('css')
    <style>
        .flex .single-study {
            width: 301px;
            margin-left: 30px;
            text-align: center;
            padding: 20px;
        }
        .single-study{
            transition: all 1s;
            border-radius:20px;
            overflow: hidden;
            text-align: center;
            padding: 20px;
        }
        .single-study img{
            height: 250px;
        }
        .single-study:hover{
            box-shadow: gray 1px 1px 5px;
            background-color: var(--main-color);
        }
        .single-study:hover.style-img{
            background-color: var(--main-color);
            border: none
        }
    </style>
@endpush
<section class="product-details-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-image mr-15">
                    <img src="{{ asset("assets/images/halls/$hall->id/cover/$hall->cover") }}" alt="Image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="product-details-desc ml-15">
                    <h3>قاعة رقم {{ $hall->number }}</h3>



                    <p>{!! nl2br($hall->details) !!}</p>

                    <ul class="sku">
                        <li>
                            السعة
                            <span>{{ $hall->capacity }}</span>
                        </li>
                        <li>
                            النوع
                            <span>{{ $hall->gender }}</span>
                        </li>
                    </ul>

                        @if(isset($path) && $path == 'admin')
                            <a href="{{ route('admin.supervisor.showHallTable',['id'=>$hall->id]) }}" class="default-btn mr-20">
                                    عرض الجدول
                            </a>
                        @elseif(isset($path) && $path == 'professor')

                        @else
                            <a href="{{ route('showhalltable',['id'=>$hall->id]) }}" class="default-btn mr-20">
                                    عرض الجدول
                            </a>
                        @endif
                        @if($search == 'search' && auth('professor')->check() )
                        <a href="#" class="default-btn">
                                حجز
                        </a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Banner Area -->
@if($hall->video != null)
<section class="banner-area bg-2 ptb-100 banner-area-style-two jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="video-banner">
            <img src="{{ asset('assets/images/banner/video-img.jpg') }}" alt="Image">

            <div class="video-button">
                <a href="https://www.youtube.com/watch?v=rl93WvCJt-U" class="popup-youtube video-btn">
                        <i class="flaticon-play-button"></i>
                    </a>
            </div>

            <div class="shape-1">
                <img src="{{ asset('assets/images/banner/banner-shape.png') }}" alt="Image">
            </div>
        </div>
    </div>
</section>
@endif
<!-- End Banner Area -->
 <!-- Start Study Area -->
<section class="study-area pt-100 pb-70 mt-100">
    <div class="container">
        <div class="section-title white-title">
            <h2>جيمع الخدمات</h2>
        </div>
        @if(count($hall->services) > 4)
            <div class="row justify-content-center">
                <div class="study-slider owl-carousel owl-theme">
                    @foreach($hall->services as $service)
                        <div class="single-study">
                            <i class="flaticon-finance"></i>
                            <h3>
                                <a href="javascript:void(0)">{{ $service->name }}</a>
                            </h3>
                        </div>
                    @endforeach
                </div>
            </div>
            @else
            <div class="d-flex flex">
                @foreach($hall->services as $service)
                    <div class="single-study style-img">
                        <i class="flaticon-finance"></i>
                        <h3>
                            <a href="javascript:void(0)">{{ $service->name }}</a>
                        </h3>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
<!-- End Study Area -->
<!-- Start Study Area -->
@if(count($hall->images) > 0)
<section class="studys-area study-area-style-two ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>جميع الصور</h2>
        </div>

        <!-- Start Gallery Area -->
    <div class="gallery-area gallery-popup ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($hall->images as $image)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <img src="{{ asset("assets/images/halls/$hall->id/images/$image->id/$image->image") }}" alt="Image">

                            <div class="gallery-item-content">
                                <div class="gallery-link">
                                    <a href="{{ asset("assets/images/halls/$hall->id/images/$image->id/$image->image") }}">
                                            <i class="ri-add-fill"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
    </div>
</section>
@endif
<!-- End Study Area -->
