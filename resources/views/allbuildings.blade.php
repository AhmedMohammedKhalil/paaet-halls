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
        <h2>جميع المبانى</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">جميع المبانى</li>
        </ul>
    </div>
@endpush
@section('content')
    <!-- Start Find A Courses Area -->
    <section class="find-courses-area pt-100">
        <div class="container">
            <form class="find-courses-from-bg find-courses-from-bg-three mt-0">
                <h2>بحث عن المبانى</h2>

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
                <h2>جميع المبانى</h2>
            </div>

            <div class="row justify-content-center">
                @foreach($buildings as $building)
                <div class="col-lg-4 col-sm-6">
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
                </div>
                @endforeach
                


            </div>
        </div>
    </section>
    <!-- End Study Area -->
@endsection
