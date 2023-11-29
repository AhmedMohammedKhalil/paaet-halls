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

        .product-details-image img{
            height: 350px;
        }
        .single-gallery{
            height: 238px;
        }

        .single-gallery img{
            width: 348px;
            height: 238px;
        }

        img.mfp-img {
            width: 730px;
            height: 500px;
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
                        @elseif(isset($path) && $path == 'supervisor')
                            <a href="{{ route('supervisor.hall.showTable',['id'=>$hall->id]) }}" class="default-btn mr-20">
                                    عرض الجدول
                            </a>
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
                <a href="{{ asset("assets/images/halls/$hall->id/video/$hall->video") }}" class="video-btn">
                    <i class="flaticon-play-button"></i>
                </a>
            </div>

            <div class="shape-1">
                <img src="{{ asset('assets/images/banner/banner-shape.png') }}" alt="Image">
            </div>
        </div>
    </div>
</section>

@push('js')
<script>
    $(document).ready(function() {

        $('.video-btn').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen srcdoc="<html style=\'overflow:hidden\'><video autoplay style=\'width:100%;height:auto;overflow:hidden\' controls><source src=\'{{  asset("assets/images/halls/$hall->id/video/$hall->video")   }}\' type=\'video/mp4\' />Your browser does not support this video format.</video></html>">'+
                    '</iframe>'+
                '</div>',

            }

        });

    });
</script>
@endpush

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

@push('css')
    <style>
        button.remove{
                        width: 40px;
                height: 40px;
                line-height: 40px;
                margin: 0 10px;
                color: var(--white-color);
                border: 1px solid var(--white-color);
                border-radius: 50%;
                display: inline-block;
                -webkit-transition: var(--transition);
                transition: var(--transition);
                font-size: 20px;
                background: transparent;
        }
        button.remove:hover {
            background-color: white !important;
            color: black !important;
        }
        .mfp-counter{
            direction: ltr
        }
    </style>
@endpush



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
                            <div class="single-gallery" >
                                <img src="{{ asset("assets/images/halls/$hall->id/images/$image->id/$image->image") }}" alt="Image">

                                <div class="gallery-item-content">
                                    <div class="gallery-link" style="display: flex">
                                        <a class="image" href="{{ asset("assets/images/halls/$hall->id/images/$image->id/$image->image") }}">
                                                <i class="ri-add-fill"></i>
                                        </a>
                                        @if(isset($path) && $path == 'supervisor')
                                            <a title="تعديل"  href="{{ route('supervisor.hall.editimage',['id'=>$image->id]) }}" class="edit" style="color:green;font-size:20px">
                                                <i class="ri-edit-2-line"></i>
                                            </a>
                                            <form action="{{route('supervisor.hall.deleteimage',['id'=>$image->id])}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="remove" title="حذف" type="submit"><i class="ri-delete-bin-line"></i></button>
                                            </form>
                                        @endif
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

