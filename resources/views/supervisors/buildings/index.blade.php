@extends('supervisors.layout')
@push('title')
    <div class="page-title-content">
        <h2>المباني</h2>
        <ul>
            <li>
                <a href="{{ route('supervisor.profile') }}">
                    البروفايل
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
            <h3>جميع المباني</h3>
            <a href="{{ route('supervisor.building.create') }}" class="default-btn">
                إضافة مبني جديد
            </a>
        </div>

        <!-- Start Wishlist Area -->
    <section class="wishlist-area ptb-100">
        <div class="container">
                <div class="cart-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">اسم المبني</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">الأعدادات</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($buildings as $building)
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('assets/images/buildings/'.$building->id.'/'.$building->image)}}" alt="Image">
                                    </a>

                                </td>
                                <td class="product-name">
                                    {{ $building->title }}
                                </td>

                                <td class="product-name">
                                    {!! nl2br($building->address) !!}
                                </td>
                                <td class="trash" >
                                        <a title="تعديل"  href="{{ route('supervisor.building.edit',['id'=>$building->id]) }}" class="edit" style="color:green;font-size:20px">
                                            <i class="ri-edit-2-line"></i>
                                        </a>
                                        <a title="عرض"  href="{{ route('supervisor.building.show',['id'=>$building->id]) }}" class="show" style="color:blue;font-size:20px">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        @if(count($building->halls) == 0)
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
