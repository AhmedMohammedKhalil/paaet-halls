@extends('admins.layout')
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
        .single-team-member .team-content{
            position: relative;
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
            @if(auth('admin')->user()->image != null)
                <img src="{{ asset('assets/images/admins/'.auth('admin')->user()->id.'/'.auth('admin')->user()->image) }}" alt="Image">
            @else
                <img src="{{ asset('assets/images/admins/default.jpg') }}" alt="Image">
            @endif

            <div class="team-content">
                <div class="team-name">
                    <h3>{{ auth('admin')->user()->name }}</h3>
                    <h3>{{ auth('admin')->user()->civil_number }}</h3>
                    <h4>{{ auth('admin')->user()->email }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
