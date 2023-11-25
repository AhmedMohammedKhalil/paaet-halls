@extends('layouts.main')
@push('title')
    <div class="page-title-content">
        <h2>من نحن</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">من نحن</li>
        </ul>
    </div>
@endpush
@section('content')
<section class="about-area about-area-style-three bg-color-f8fafb ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-two mr-15">
                    <img src="{{ asset('assets/images/about-img-3.jpg') }}" alt="Image">

                    <div class="about-shape">
                        <img src="{{ asset('assets/images/about-shape.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content ml-15">
                    <span>About our University</span>
                    <h2>Our education system inspires the next generation</h2>

                    <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>

                    <a href="{{ route('aboutus') }}" class="default-btn">
                            المزيد
                            <i class="ri-arrow-right-line"></i>
                        </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Study Area -->
<section class="studys-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>خداماتنا</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-study study-f3f3f4">
                    <i class="flaticon-finance"></i>
                    <h3>
                        <a href="#">Administrative studies</a>
                    </h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil odio dolorum voluptatibus inventore, non sint repellat mollitia omnis? Velit fugiat optio odio illum quas doloremque quis</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-study study-f3f3f4">
                    <i class="flaticon-finance"></i>
                    <h3>
                        <a href="#">Administrative studies</a>
                    </h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil odio dolorum voluptatibus inventore, non sint repellat mollitia omnis? Velit fugiat optio odio illum quas doloremque quis</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-study study-f3f3f4">
                    <i class="flaticon-finance"></i>
                    <h3>
                        <a href="#">Administrative studies</a>
                    </h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil odio dolorum voluptatibus inventore, non sint repellat mollitia omnis? Velit fugiat optio odio illum quas doloremque quis</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Study Area -->
@endsection
