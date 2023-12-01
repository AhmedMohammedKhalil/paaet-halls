@extends('layouts.main')
@push('css')
<style>
    .single-study{
        transition: all 1s;
        border-radius:20px;
        overflow: hidden;
    }
    .single-study img{
        height: 250px;
        width: 100%
    }
    .single-study:hover{
        box-shadow: gray 1px 1px 5px;
    }
</style>
@endpush
@push('title')
    <div class="page-title-content">
        <h2>جميع القاعات المتاحة لتغيير الحجز</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">جميع القاعات المتاحة لتغيير الحجز</li>
        </ul>
    </div>
@endpush
@section('content')


    <!-- Start Study Area -->
    <section class="studys-area study-area-style-two ptb-100" style="min-height: 500px">
        <div class="container">
            <div>
                @if(isset($halls) && count($halls) > 0)

                <div class="section-title">
                    <h2>جميع القاعات المتاحة لتغيير الحجز</h2>
                </div>

                <div class="row justify-content-center">
                    @foreach($halls as $hall)
                    <div class="col-lg-3 col-sm-6">
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

                                <a href="{{ route('search-showhall',['id'=>$hall->id,'booking_id'=>$booking_id,'start_at'=>$start_at,'end_at'=>$end_at]) }}" class="read-more">
                                        المزيد
                                        <span class="ri-arrow-left-line"></span>
                                    </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                @if(isset($halls) && count($halls) == 0)
                    <div class="section-title">
                        <h2>لا يوجد قاعات متاحة لتغييير الحجز</h2>
                        <p>قم بالبحث من جديد من هنا</p>
                        <a href="{{ route('search',['booking_id'=>$booking_id]) }}" class="default-btn d-block m-auto mt-5" style="width: fit-content">
                            بحث عن قاعة جديدة
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- End Study Area -->
@endsection
