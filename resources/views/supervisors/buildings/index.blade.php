@extends('supervisors.layout')
@push('title')
    <div class="page-title-content">
        <h2>المباني</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    الرئيسية
                </a>
            </li>
            <li class="active">المباني</li>
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
    </style>
@endpush


@section('section')

<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>جميع المباني</h3>
            <a href="{{ route('supervisor.building.create') }}" class="default-btn">
                إضافة مبني جديد
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
                                <th scope="col">اسم المبني</th>
                                <th scope="col">التفاصيل</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">الأعدادات</th>
                            
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($buildings as $building)
                            <tr>
                                <td class="product-name">
                                                @if ($building->image != null)
                                                    <img src="{{asset('assets/images/buildings/'.$building->id.'/'.$building->image)}}" alt="img" class="w-7 h-7 br-7 me-3">
                                                @else
                                                    <img src="{{asset('assets/images/buildings/building.JPG')}}" alt="img" class="w-7 h-7 br-7 me-3">                      
                                                @endif
                                </td>
                                <td class="product-name">
                                    {{ $building->title }}
                                </td>
                                <td class="product-name">
                                    {{ $building->details }}
                                </td>
                                <td class="product-name">
                                    {{ $building->address }}
                                </td>
                                @if(count($building->halls) == 0)
                                    <td class="trash" style="display: flex;justify-content: space-evenly;">
                                        <a title="تعديل"  href="{{ route('supervisor.building.edit',['id'=>$building->id]) }}" class="edit" style="color:green;font-size:20px">
                                            <i class="ri-edit-2-line"></i>
                                        </a>
                                        <form action="{{route('supervisor.building.delete',['id'=>$building->id])}}" method="post">
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

    </div>
</div>
@endsection
