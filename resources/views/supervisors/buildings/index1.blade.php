@extends('supervisors.layout')
@push('title')
    <div class="page-title-content">
        <h2>المباني</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">المباني</li>
        </ul>
    </div>
@endpush
@push('css')
    <style>
        .single-team-member{
            box-shadow: gray 1px 1px 40px;
            border-radius: 20px;
            overflow: hidden;

        }
        .single-team-member .team-content{
            position: relative;
        }
        h4{
            font-weight: 600
        }
        .single-team-member img{
            height: 400px;
            width:100%;
        }
    </style>
@endpush
@section('section')

    <div class="row justify-content-md-center" style="min-height: 500px">
    <div class="col-lg-12 col-md-12">
        {{-- +++++ --}}
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
        {{-- ---+--+ --}}
    </div>
</div>

@endsection
{{-- 
<section>
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
</section> --}}





