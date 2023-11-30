@extends('professors.layout')
@push('title')
    <div class="page-title-content">
        <h2>البروفايل</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">البروفايل</li>
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
        .single-team-member img{
            height: 400px;
            width: 100%
        }
        .single-team-member .team-content{
            position: relative;
            width: 100%
        }
        .single-team-member .team-name{
            width: 100% !important

        }

        h4{
            font-weight: 600
        }
    </style>
@endpush
@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">
    <div class="col-lg-6 col-md-6">
        <div class="single-team-member">
            @if(auth('professor')->user()->image != null)
                <img src="{{ asset('assets/images/professors/'.auth('professor')->user()->id.'/'.auth('professor')->user()->image) }}" alt="Image">
            @else
                <img src="{{ asset('assets/images/professors/default.jpg') }}" alt="Image">
            @endif

            <div class="team-content">
                <div class="team-name">
                    <h3>{{ auth('professor')->user()->name }}</h3>
                    <h4>{{ auth('professor')->user()->email }}</h4>
                    <h4>{{ auth('professor')->user()->phone }}</h4>
                    <p>{!! nl2br(auth('professor')->user()->address) !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
