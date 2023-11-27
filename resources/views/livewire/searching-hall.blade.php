<div>
    @if($halls)

    <div class="section-title">
        <h2>جميع القاعات</h2>
    </div>

    <div class="row justify-content-center">
        @foreach($halls as $hall)
        <div class="col-lg-3 col-sm-6">
            <div class="single-study style-img">
                <img src="{{ asset("assets/images/halls/$hall->id/cover/$hall->cover") }}" alt="Image">

                <div class="single-study-content">
                    <i class="flaticon-finance"></i>
                    <h3>
                        <a href="{{ route('showhall',['id'=>$hall->id]) }}">قاعة {{ $hall->number }}</a>
                    </h3>
                    <h6>
                        {{ $hall->building->title }}
                    </h6>
                    <p>
                        @if(strlen($hall->details) > 100)
                            {!! substr(nl2br($hall->details),100)."..." !!}
                        @else
                            {!! nl2br($hall->details) !!}
                        @endif
                    </p>

                    <a href="{{ route('showhall',['id'=>$hall->id]) }}" class="read-more">
                            المزيد
                            <span class="ri-arrow-left-line"></span>
                        </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
