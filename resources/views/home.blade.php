@extends('layouts.main')
@push('css')
    <style>
        .flex .single-study {
            width: 301px;
            margin-left: 30px;
        }
        .single-study{
            transition: all 1s;
            border-radius:20px;
            overflow: hidden; 
        }
        .single-study img{
            height: 250px;
        }
        .single-study:hover{
            box-shadow: gray 1px 1px 5px;
        }
    </style>
@endpush
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
                    <span>موقعنا</span>
                    <h2>من نحن</h2>
                    <p>نحن مجموعه من الطلاب الخريجين قمنا بعمل موقع الكترونى لمشروع تخرجنا ليخدم جميع اعضاء هيئة التدريس  وتسهيل لهم حجز القاعات وتنظيم لهم عملية الحجز ومعرفة كافة التفاصيل عن القاعات قبل حجزها وايضا طريقة للتواصل مع المشرفين والقائمين والمسئولين عن القاعات<p>
                    <a href="{{ route('aboutus') }}" class="default-btn">
                            المزيد
                            <i class="ri-arrow-left-line"></i>
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

            @if(count($buildings) > 4)
            <div class="row justify-content-center">

            <div class="study-slider owl-carousel owl-theme">
                @foreach($buildings as $building)
                    <div class="single-study style-img">
                        <img src="{{ asset("assets/images/buildings/$building->id/$building->image") }}" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-finance"></i>
                            <h3>
                                <a href="{{ route('showbuilding',['id'=>$building->id]) }}">{{ $building->title }}</a>
                            </h3>
                            <p>
                                @if(strlen($building->details) > 100) 
                                    {!! substr(nl2br($building->details),100)."..." !!}
                                @else
                                    {!! nl2br($building->details) !!}
                                @endif
                            </p>

                            <a href="{{ route('showbuilding',['id'=>$building->id]) }}" class="read-more">
                                    المزيد
                                    <span class="ri-arrow-left-line"></span>
                                </a>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
            @else
            <div class="d-flex flex">
                @foreach($buildings as $building)
                    <div class="single-study style-img">
                        <img src="{{ asset("assets/images/buildings/$building->id/$building->image") }}" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-finance"></i>
                            <h3>
                                <a href="{{ route('showbuilding',['id'=>$building->id]) }}">{{ $building->title }}</a>
                            </h3>
                            <p>
                                @if(strlen($building->details) > 100) 
                                    {!! substr(nl2br($building->details),100)."..." !!}
                                @else
                                    {!! nl2br($building->details) !!}
                                @endif
                            </p>

                            <a href="{{ route('showbuilding',['id'=>$building->id]) }}" class="read-more">
                                    المزيد
                                    <span class="ri-arrow-left-line"></span>
                                </a>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
            
    </div>
</section>
<section class="study-area study-area-style-two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>القاعات</h2>
        </div>

        @if(count($halls) > 4)
            <div class="row justify-content-center">

            <div class="study-slider owl-carousel owl-theme">
                @foreach($halls as $hall)
                    <div class="single-study style-img">
                        <img src="{{ asset("assets/images/halls/$hall->id/cover/$hall->cover") }}" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-finance"></i>
                            <h3>
                                <a href="{{ route('showhall',['id'=>$hall->id]) }}">قاعة {{ $hall->number }}</a>
                            </h3>
                            <h6>
                                {{ $hall->building->title }}
                            </h6>
                            <p>
                                @if(strlen($hall->details) > 100) 
                                    {!! substr(nl2br($hall->details),100)."..." !!}
                                @else
                                    {!! nl2br($hall->details) !!}
                                @endif
                            </p>

                            <a href="{{ route('showhall',['id'=>$hall->id]) }}" class="read-more">
                                    المزيد
                                    <span class="ri-arrow-left-line"></span>
                                </a>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
            @else
            <div class="d-flex flex">
                @foreach($halls as $hall)
                    <div class="single-study style-img">
                        <img src="{{ asset("assets/images/halls/$hall->id/cover/$hall->cover") }}" alt="Image">

                        <div class="single-study-content">
                            <i class="flaticon-finance"></i>
                            <h3>
                                <a href="{{ route('showhall',['id'=>$hall->id]) }}"> قاعة {{ $hall->number }}</a>
                            </h3>
                            <h6>
                                {{ $hall->building->title }}
                            </h6>
                            <p>
                                @if(strlen($hall->details) > 100) 
                                    {!! substr(nl2br($hall->details),100)."..." !!}
                                @else
                                    {!! nl2br($hall->details) !!}
                                @endif
                            </p>

                            <a href="{{ route('showhall',['id'=>$hall->id]) }}" class="read-more">
                                    المزيد
                                    <span class="ri-arrow-left-line"></span>
                                </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
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
