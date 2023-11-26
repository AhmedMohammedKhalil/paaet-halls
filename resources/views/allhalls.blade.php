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

                            <a href="{{ route('showhall',['id'=>$hall->id]) }}" class="read-more">
                                    المزيد
                                    <span class="ri-arrow-left-line"></span>
                                </a>
                        </div>
                    </div>
                </div>
                @endforeach
                


            </div>
        </div>
    </section>
    <!-- End Study Area -->
@endsection
