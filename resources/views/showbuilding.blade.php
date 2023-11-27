@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>تفاصيل المبنى</h2>
        <ul>
            @if($route == 'home')
            <li>
                <a href="{{ $url }}">الرئيسية </a>
            </li>
            @else
            <li>
                <a href="{{ route('allbuildings') }}">جميع المبانى</a>
            </li>
            @endif
            <li class="active">تفاصيل المبنى</li>
        </ul>
    </div>
@endpush

@section('content')

    <!-- Stat About Area -->
    <section class="about-area bg-color-f8fafb ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-two mr-15">
                        <img src="{{ asset("assets/images/buildings/$building->id/$building->image") }}" alt="Image">

                        <div class="about-shape">
                            <img src="{{ asset('assets/images/about-shape.png') }}" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content ml-15">
                        <h2>{{ $building->title }}</h2>
                        <p>{!! nl2br($building->details) !!}</p>
                        <p>{!! nl2br($building->address) !!}</p>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
    <!-- Start Study Area -->
    <section class="studys-area study-area-style-two ptb-100" style="min-height:500px">
        <div class="container">
            @if(count($building->halls) > 0)
            <div class="section-title">
                <h2>جميع القاعات</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($building->halls as $hall)
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
            @endif
        </div>
    </section>
    <!-- End Study Area -->
@endsection
