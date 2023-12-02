<div class="row justify-content-md-center" style="min-height: 500px">

    <div class="col-lg-12 col-md-6">
        <div class="m-auto width-fit-content text-center">
            <h3>جميع الإشعارات</h3>
        </div>
        <!-- Start Wishlist Area -->
        <section class="wishlist-area" style="padding-top: 20px">
            <div class="container">
                    <div class="cart-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">رقم القاعة</th>
                                    <th scope="col"> عضو الهيئة التدريسية</th>
                                    <th scope="col">محتوى الإشعار</th>
                                    <th scope="col">الإعدادات</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($notifications as $n)
                                    <tr>
                                        <td class="product-name">
                                            قاعة رقم {{ $n->hall->number }}
                                        </td>
                                        <td class="product-name">
                                            {{ $n->professor->name }}
                                        </td>
                                        <td class="product-name">
                                            {!! nl2br($n->content ) !!}
                                        </td>
                                        <td class="trash" style="display: flex;justify-content: space-evenly;">
                                            @if($n->mark_as_read == 0)
                                            <a href="{{ route('supervisor.addreply',['id'=>$n->id]) }}" class="default-btn">
                                                    اضافة رد
                                            </a>
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
