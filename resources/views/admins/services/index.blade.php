@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>الخدمات</h2>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    لوحة التحكم
                </a>
            </li>
            <li class="active">الخدمات</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>جميع الخدمات</h3>
            <a href="{{ route('admin.service.create') }}" class="default-btn">
                إضافة خدمة جديدة
            </a>
        </div>

        <!-- Start Wishlist Area -->
    <section class="wishlist-area  ptb-100">
        <div class="container">
                <div class="cart-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">اسم الخدمة</th>
                                <th scope="col">الإعدادات</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($services as $s)
                            <tr>
                                <td class="product-name">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="product-name">
                                    {{ $s->name }}
                                </td>
                                @if(count($s->halls) == 0)
                                    <td class="trash" style="display: flex;justify-content: space-evenly;">
                                        <a title="تعديل"  href="{{ route('admin.service.edit',['id'=>$s->id]) }}" class="edit" style="color:green;font-size:20px">
                                            <i class="ri-edit-2-line"></i>
                                        </a>
                                        <form action="{{route('admin.service.delete',['id'=>$s->id])}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="remove" style="background: unset" title="حذف" type="submit"><i class="ri-delete-bin-line"></i></button>
                                        </form>
                                    </td>
                                @endif

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
