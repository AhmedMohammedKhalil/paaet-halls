@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>الرسائل</h2>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    لوحة التحكم
                </a>
            </li>
            <li class="active">الرسائل</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>جميع الرسائل</h3>
        </div>

        <!-- Start Wishlist Area -->
    <section class="wishlist-area  ptb-100">
        <div class="container">
                <div class="cart-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">الأسم </th>
                                <th scope="col">الايميل</th>
                                <th scope="col">الرسالة</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($contacts as $c)
                            <tr>
                                <td class="product-name">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="product-name">
                                    {{ $c->name }}
                                </td>
                                 <td class="product-name">
                                    {{ $c->email }}
                                </td>
                                <td class="product-name" style="text-wrap: pretty;">
                                    {{ $c->message }}
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
