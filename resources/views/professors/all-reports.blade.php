@extends('professors.layout')
@push('title')
    <div class="page-title-content">
        <h2>جميع الريبورتات عن القاعات</h2>
        <ul>
            <li>
                <a href="{{ route('professor.profile') }}">
                    البروفايل
                </a>
            </li>
            <li class="active">جميع الريبورتات عن القاعات</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>جميع الريبورتات عن القاعات</h3>
        </div>
        <!-- Start Wishlist Area -->
        <section class="wishlist-area" style="padding-top: 20px">
            <div class="container">
                    <div class="cart-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">الصورة</th>
                                    <th scope="col">رقم القاعة</th>
                                    <th scope="col">محتوى البلاغ</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($reports as $r)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="javascript:void(0)">

                                                <img src="{{ asset('assets/images/halls/'.$r->hall->id.'/cover/'.$r->hall->cover) }}" alt="Image">

                                            </a>
                                        </td>
                                        <td class="product-name">
                                            قاعة رقم {{ $r->hall->number }}
                                        </td>
                                        <td class="product-name">
                                            {!! nl2br($r->content ) !!}
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
