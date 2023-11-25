@extends('layouts.main')
@section('content')
<section class="blog-post-area blog-post-left-sidebar ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @include('supervisors.menu')
            </div>
            <div class="col-lg-8">
                @yield('section')
            </div>
        </div>
    </div>
</section>
@endsection
