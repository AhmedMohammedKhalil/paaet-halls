@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>المبانى والقاعات الخاصة بالمشرف</h2>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    لوحة التحكم
                </a>
            </li>
            <li class="active">المبانى والقاعات الخاصة بالمشرف</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>المبانى الخاصة بالمشرف</h3>
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
                                <th scope="col">العنوان</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($supervisor->buildings as $b)
                            <tr>

                                <td class="product-thumbnail">
                                    <a href="javascript:void(0)">
                                            <img src="{{ asset('assets/images/buildings/'.$b->id.'/'.$b->image) }}" alt="Image">
                                    </a>
                                </td>
                                <td class="product-name">
                                    {{ $b->title }}
                                </td>
                                <td class="product-name">
                                    {!! nl2br($b->address) !!}
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

<div class="row justify-content-md-center pbt-100" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>القاعات الخاصة بالمشرف</h3>
        </div>

        <!-- Start Wishlist Area -->
    <section class="wishlist-area ">
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
                            @foreach($supervisor->halls as $h)
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
                                    <a title="عرض"  href="{{ route('admin.supervisor.showHall',['id'=>$h->id]) }}" class="show" style="color:blue;font-size:20px">
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
