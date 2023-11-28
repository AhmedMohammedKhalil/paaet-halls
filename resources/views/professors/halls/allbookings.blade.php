@extends('professors.layout')
@push('title')
    <div class="page-title-content">
        <h2>القاعات المحجوزة لعضو هيئة التدريس</h2>
        <ul>
            <li>
                <a href="{{ route('professor.profile') }}">
                    البروفايل
                </a>
            </li>
            <li class="active">القاعات المحجوزة لعضو هيئة التدريس</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>القاعات المحجوزة لعضو هيئة التدريس</h3>
        </div>
        <a href="{{ route('professor.showTable') }}" class="default-btn d-block m-auto mt-5" style="width: fit-content">
                عرض الجدول الخاص بالقاعات المحجوزة
        </a>
        <!-- Start Wishlist Area -->
        <section class="wishlist-area" style="padding-top: 20px">
            <div class="container">
                    <div class="cart-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th scope="col">الصورة</th>
                                    <th scope="col">رقم القاعة</th>
                                    <th scope="col">السعة</th>
                                    <th scope="col">النوع</th>
                                    <th scope="col">الإعدادات</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach(auth('professor')->user()->halls as $h)
                                <tr>

                                    <td class="product-thumbnail">
                                        <a href="javascript:void(0)">

                                            <img src="{{ asset('assets/images/halls/'.$h->id.'/cover/'.$h->cover) }}" alt="Image">

                                        </a>
                                    </td>
                                    <td class="product-name">
                                        قاعة رقم {{ $h->number }}
                                    </td>
                                    <td class="product-name">
                                        {{ $h->capacity }}
                                    </td>
                                    <td class="product-name">
                                        {{ $h->gender }}

                                    </td>
                                    <td class="trash" style="">
                                        <a title="عرض"  href="{{ route('professor.showHall',['id'=>$h->id]) }}" class="show" style="color:blue;font-size:20px">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>
        </section>
    <!-- End Wishlist Area -->
    </div>
</div>

@endsection
