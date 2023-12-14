@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>أهدافنا</h2>
        <ul>
            <li>
                <a href="{{ route('admin.profile') }}">
                    البروفايل
                </a>
            </li>
            <li class="active">أهدافنا</li>
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
            <h3>أهدافنا</h3>
            <a href="{{ route('admin.about-service.create') }}" class="default-btn">
                إضافة هدف جديد
            </a>
        </div>

        <!-- Start Wishlist Area -->
    <section class="wishlist-area ptb-100">
        <div class="container">
                <div class="cart-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">العنوان</th>
                                <th scope="col">المحتوى</th>
                                <th scope="col">الأعدادات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aboutservices as $aboutservice)
                            <tr>
                                <td class="product-name" style="text-wrap:wrap">
                                    {{ $aboutservice->title }}
                                </td>
                                <td class="product-name" style="text-wrap:wrap">
                                    {!! nl2br($aboutservice->content) !!}
                                </td>
                                <td class="trash" >
                                        <a title="تعديل"  href="{{ route('admin.about-service.edit',['id'=>$aboutservice->id]) }}" class="edit" style="color:green;font-size:20px">
                                            <i class="ri-edit-2-line"></i>
                                        </a>
                                        <form action="{{route('admin.about-service.delete',['id'=>$aboutservice->id])}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="remove" style="background: unset" title="حذف" type="submit"><i class="ri-delete-bin-line"></i></button>
                                        </form>
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
