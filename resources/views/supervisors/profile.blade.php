@extends('supervisors.layout')
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
        .single-team-member img{
            height: 400px;
            width:100%;
        }
    </style>
@endpush
@section('section')

    <div class="row justify-content-md-center" style="min-height: 500px">
    <div class="col-lg-6 col-md-6">
        <div class="single-team-member width-auto">
            {{-- <img src="{{ asset('assets/images/team/team-3.jpg') }}" alt="Image"> --}}
            @if(auth('supervisor')->user()->image != null)
                <img src="{{ asset('assets/images/supervisors/'.auth('supervisor')->user()->id.'/'.auth('supervisor')->user()->image) }}" alt="Image">
            @else
                <img src="{{ asset('assets/images/supervisors/default.jpg') }}" alt="Image">
            @endif

            <div class="team-content">
                <div class="team-name" style="width:100%">
                    <h3>{{ auth('supervisor')->user()->name }}</h3>
                    <h3>{{ auth('admin')->user()->civil_number }}</h3>
                    <h6>{{ auth('supervisor')->user()->email }}</h4>
                    <h6>{{ auth('supervisor')->user()->phone }}</h4>
                    <h6>{{ auth('supervisor')->user()->address }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection






