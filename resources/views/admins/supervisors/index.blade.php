@extends('admins.layout')
@push('title')
    <div class="page-title-content">
        <h2>المشرفين</h2>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    لوحة التحكم
                </a>
            </li>
            <li class="active">المشرفين</li>
        </ul>
    </div>
@endpush

@section('section')
<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>جميع المشرفين</h3>
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
                                <th scope="col">الحالة</th>
                                <th scope="col">الإعدادات</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($supervisors as $s)
                            <tr>

                                <td class="product-thumbnail">
                                    <a href="#">
                                            @if($s->image != null)
                                                <img src="{{ asset('assets/images/supervisors/'.$s->id.'/'.$s->image) }}" alt="Image">
                                            @else
                                                <img src="{{ asset('assets/images/supervisors/default.jpg') }}" alt="Image">
                                            @endif
                                    </a>
                                </td>
                                <td class="product-name">
                                    {{ $s->name }}
                                </td>
                                <td class="product-name">
                                    {{ $s->email }}
                                </td>

                                <td class="product-name">
                                    @if($s->is_approved == Null)
                                        لم يتم الرد
                                    @else
                                        {{ $s->is_approved }}
                                    @endif
                                </td>
                                @if($s->is_approved == Null)
                                    <td class="trash" style="">
                                        <a title="موافقة"  href="{{ route('admin.supervisor.accept',['id'=>$s->id]) }}" class="edit" style="color:green;font-size:20px">
                                            <i class="ri-check-line"></i>
                                        </a>
                                        <a title="رفض"  href="{{ route('admin.supervisor.reject',['id'=>$s->id]) }}" class="remove" style="font-size:20px">
                                            <i class="ri-close-line"></i>
                                        </a>
                                    </td>
                                @elseif($s->is_approved == 'تمت الموافقة')
                                    <td class="trash" style="">
                                        <a title="عرض"  href="{{ route('admin.supervisor.show',['id'=>$s->id]) }}" class="show" style="color:blue;font-size:20px">
                                            <i class="ri-eye-line"></i>
                                        </a>
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
