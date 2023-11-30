<div>
    @if($buildings)
    <div class="section-title">
        <h2>جميع المباني</h2>
    </div>
    <div class="row justify-content-center">
        @foreach($buildings as $building)
        <div class="col-lg-4 col-sm-6">
            <div class="single-study style-img">
                <img src="{{ asset("assets/images/buildings/$building->id/$building->image") }}" alt="Image">

                <div class="single-study-content">
                    <i class="flaticon-finance"></i>
                    <h3>
                        <a href="{{ route('showbuilding',['id'=>$building->id]) }}">{{ $building->title }}</a>
                    </h3>
                    <p>
                        @if(strlen($building->details) > 100)
                            {!! substr(nl2br($building->details),100)."..." !!}
                        @else
                            {!! nl2br($building->details) !!}
                        @endif
                    </p>

                    <a href="{{ route('showbuilding',['id'=>$building->id]) }}" class="read-more">
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
