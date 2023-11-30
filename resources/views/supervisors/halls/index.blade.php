@extends('supervisors.layout')
@push('title')
    <div class="page-title-content">
        <h2>القاعات الخاصة بالمشرف</h2>
        <ul>
            <li>
                <a href="{{ route('supervisor.profile') }}">
                    لوحة التحكم
                </a>
            </li>
            <li class="active">القاعات الخاصة بالمشرف</li>
        </ul>
    </div>
@endpush

@section('section')


<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>القاعات الخاصة بالمشرف</h3>
        </div>
        @if(count(auth('supervisor')->user()->buildings) > 0)
            <a href="{{ route('supervisor.hall.create') }}" class="default-btn d-block m-auto mt-5" style="width: fit-content">
                إضافة قاعة جديدة
            </a>
        @endif
        <!-- Start Wishlist Area -->
    <section class="wishlist-area ptb-100">
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
                            @foreach(auth('supervisor')->user()->halls as $h)
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
                                <td class="trash" style="display: flex;justify-content: space-evenly;">

                                        <a title="عرض"  href="{{ route('supervisor.hall.show',['id'=>$h->id]) }}" class="show" style="color:blue;font-size:20px">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    @if(count($h->professors) == 0)
                                        <a title="تعديل"  href="{{ route('supervisor.hall.edit',['id'=>$h->id]) }}" class="edit" style="color:green;font-size:20px">
                                            <i class="ri-edit-2-line"></i>
                                        </a>
                                        <form action="{{route('supervisor.hall.delete',['id'=>$h->id])}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="remove" style="background: unset" title="حذف" type="submit"><i class="ri-delete-bin-line"></i></button>
                                        </form>

                                    @endif
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
