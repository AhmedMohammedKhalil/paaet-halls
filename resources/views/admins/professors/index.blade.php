@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>اعضاء الهيئة التدريسية</h2>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    لوحة التحكم
                </a>
            </li>
            <li class="active">اعضاء الهيئة التدريسية</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>جميع اعضاء هيئة التدريس</h3>
        </div>

        <!-- Start Wishlist Area -->
    <section class="wishlist-area ">
        <div class="container">
                <div class="cart-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th scope="col">الصورة</th>
                                <th scope="col">الإسم</th>
                                <th scope="col">الإيميل</th>
                                <th scope="col">الموبايل</th>
                                <th scope="col">الإعدادات</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($professors as $prof)
                            <tr>

                                <td class="product-thumbnail">
                                    <a href="#">
                                            @if($prof->image != null)
                                                <img src="{{ asset('assets/images/professors/'.$prof->id.'/'.$prof->image) }}" alt="Image">
                                            @else
                                                <img src="{{ asset('assets/images/professors/default.jpg') }}" alt="Image">
                                            @endif
                                    </a>
                                </td>
                                <td class="product-name">
                                    {{ $prof->name }}
                                </td>
                                <td class="product-name">
                                    {{ $prof->email }}
                                </td>
                                <td class="product-name">
                                    {{ $prof->phone }}
                                </td>
                                <td class="trash" style="">
                                    <a title="عرض"  href="{{ route('admin.professor.show',['id'=>$prof->id]) }}" class="show" style="color:blue;font-size:20px">
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
