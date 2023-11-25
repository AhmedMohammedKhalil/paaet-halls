@extends('layouts.app')
@push('css')
    <style>
        .header-right-content a{
            width: 100px;
            margin-left: 20px;
            height:auto;
            background:unset;
            color:white !important
        }
        .header-right-content a:hover{

            color: black !important
        }

        .brand ,.navbar-brand {
            padding: 10px
        }
        .navbar-brand img ,.brand img{
            height: 80px;
        }
        .copy-right-area{
            margin-top: unset
        }

        .video-btn:hover {
            background-color: rgba(139, 112, 77, 0.8);
        }
        .video-btn:hover::before, .video-btn:hover::after {
            background-color: rgba(139, 112, 77, 0.8);
        }
    </style>

    @endpush
@section('main')
@include('layouts.header')
@hasSection('landing')
    @yield('landing')
@else
    <div class="page-title-area bg-25" style="@if(isset($cover)) background-image:{{ $cover }} @endif">
        <div class="container">
            @stack('title')
            {{-- <div class="page-title-content">
                <h2>Log in</h2>
                <ul>
                    <li>
                        <a href="index.html">
                                Home
                        </a>
                    </li>
                    <li class="active">Log in</li>
                </ul>
            </div> --}}
        </div>
    </div>
@endif
@yield('content')
@endsection
