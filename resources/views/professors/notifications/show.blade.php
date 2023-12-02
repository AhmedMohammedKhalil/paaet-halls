@extends('layouts.main')
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
@push('title')
    <div class="page-title-content">
        <h2>تفاصيل الإشعار</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">الرئيسية</a>
            </li>

            <li class="active">تفاصيل الإشعار</li>
        </ul>
    </div>
@endpush
@section('content')
<section class="product-details-area ptb-100" style="min-height: 700px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-image mr-15">
                    <img src="{{ asset("assets/images/halls/".$notification->hall_id."/cover/".$notification->hall->cover) }}" alt="Image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="product-details-desc ml-15">
                    <h3>قاعة رقم {{ $notification->hall->number }}</h3>
                    <p>المشرف {{ $notification->supervisor->name }}</p>
                    <p>{!! nl2br($notification->content) !!}</p>

                    @if($notification->type == 1)
                        <p>تم تصليح العطل بنجاح</p>
                    @else
                        <p style="margin: 10px">للاسف سياخذ التصليح عدة ايام فيتوجب عليك تغيير حجز القاعة </p>
                        <a href="{{ route('professor.changehall',['hall_id'=>$notification->hall_id,'booking_id' => $booking->id]) }}" class="default-btn mr-20">
                            تغيير حجز القاعة
                        </a>


                    @endif


                </div>
            </div>
        </div>
    </div>
</section>
@endsection
