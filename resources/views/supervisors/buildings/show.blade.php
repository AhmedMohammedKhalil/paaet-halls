@extends('supervisors.layout')
@push('title')
    <div class="page-title-content">
        <h2> القاعات الخاصة بالمبني</h2>
        <ul>
            <li>
                <a href="{{ route('supervisor.profile') }}">
                البروفايل
                </a>
            </li>
            <li class="active">    القاعات الخاصة بالمبني</li>
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
        .trash{
                padding-top: 25px;
                display: flex;
                justify-content: space-around;
                align-items: center;
                border: none !important;
        }
    </style>
@endpush

@section('section')

<div class="row justify-content-md-center pbt-100" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>القاعات الخاصة بالمبني</h3>
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
                            @foreach($building->halls as $h)
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
                                    <a title="عرض"  href="{{ route('supervisor.hall.show',['id'=>$h->id]) }}" class="show" style="color:blue;font-size:20px">
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
