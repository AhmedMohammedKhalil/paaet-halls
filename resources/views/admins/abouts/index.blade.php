@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>من نحن</h2>
        <ul>
            <li>
                <a href="{{ route('admin.profile') }}">
                    البروفايل
                </a>
            </li>
            <li class="active">من نحن</li>
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

        .trash{
                padding-top: 25px;
                display: flex;
                justify-content: space-around;
                align-items: center;
                border: none  !important;
        }
    </style>
@endpush


@section('section')

<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>من نحن</h3>
        </div>

        <!-- Start Wishlist Area -->
    <section class="wishlist-area ptb-100">
        <div class="container">
                <div class="cart-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th scope="col">الصورة</th>
                                <th scope="col">المحتوى</th>
                                <th scope="col">الأعدادات</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($abouts as $about)
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('assets/images/abouts/'.$about->image)}}" alt="Image">
                                    </a>
                                </td>
                                <td class="product-name" style="text-wrap:wrap">
                                    {!! nl2br($about->content) !!}
                                </td>
                                <td class="trash" >
                                    <a title="تعديل"  href="{{ route('admin.about.edit',['id'=>$about->id]) }}" class="edit" style="color:green;font-size:20px">
                                        <i class="ri-edit-2-line"></i>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </section>

    </div>
</div>
@endsection