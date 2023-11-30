<form class="find-courses-from-bg find-courses-from-bg-three mt-0" wire:submit.prevent='search'>
    <h2>بحث عن القاعة</h2>



    <div class="row">


        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <select class="form-control" wire:model.lazy='capacity'>
                        <option value="1" disabled selected>السعة</option>
                        @foreach ($capacities as $c)
                            <option value="{{ $c }}">{{ $c }}</option>
                        @endforeach
                    </select>
                <i class="ri-arrow-down-s-line"></i>
                @error('capacity') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <select class="form-control" wire:model.lazy='gender'>
                        <option value="1" disabled selected>النوع</option>
                        <option value="بنين">بنين</option>
                        <option value="بنات">بنات</option>
                    </select>
                <i class="ri-arrow-down-s-line"></i>
                @error('gender') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label for="start-at" style="color: white">بداية الحجز</label>
                <input type="datetime-local" title="" class="form-control" name="start-at" id="start-at" required wire:model.lazy='start_at'>
                @error('start_at') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label for="end-at" style="color: white">نهاية الحجز</label>
                <input type="datetime-local" title="" class="form-control" name="end-at" id="end-at" wire:model.lazy='end_at'>
                @error('end_at') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <p style="color: white">ملحوظة: لابد ان يكون بداية الحجز ونهاية الحجز فى نفس اليوم المحدد</p>
            </div>
        </div>
        <div class="offset-3 col-lg-6 col-md-6">
            <div class="form-group">
                <select class="form-control" multiple style="height: 100px" wire:model.lazy='services'>
                        <option value="0" disabled style="color: white">الخدمات</option>
                        @foreach ($servicesModel as $s)
                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                        @endforeach
                    </select>
                    @error('services') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>
        <div class="offset-3 col-lg-6 col-md-6">
            <button type="submit" class="default-btn">
                    بحث
                    <i class="ri-search-line"></i>
                </button>
        </div>
    </div>
</form>
