
<form class="find-courses-from-bg find-courses-from-bg-three mt-0" wire:submit.prevent='edit'>
    <h3> اضافة قاعة</h3>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='number' id="number" class="form-control" placeholder="رقم القاعة">
                @error('number') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <select class="form-control" wire:model.lazy='capacity'>
                        <option value="1" disabled>السعة</option>
                        @foreach ($capacities as $c)
                            <option value="{{ $c }}"  @if($c == $capacity) selected @endif>{{ $c }}</option>
                        @endforeach
                    </select>
                <i class="ri-arrow-down-s-line"></i>
                @error('capacity') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <select class="form-control" wire:model.lazy='gender'>
                        <option value="1" disabled>النوع</option>
                        <option value="بنين" @if($gender == 'بنين') selected @endif>بنين</option>
                        <option value="بنات" @if($gender == 'بنات') selected @endif>بنات</option>
                    </select>
                <i class="ri-arrow-down-s-line"></i>
                @error('gender') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <select class="form-control" wire:model.lazy='building_id'>
                        <option value="1" disabled>المبنى</option>
                        @foreach ($buildings as $b)
                            <option value="{{ $b->id }}" @if($b->id == $building_id) selected @endif>{{ $b->title }}</option>
                        @endforeach
                </select>
                <i class="ri-arrow-down-s-line"></i>
                @error('building_id') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <select class="form-control" multiple style="height: 100px" wire:model.lazy='services'>
                        <option value="0" disabled>الخدمات</option>
                        @foreach ($servicesModel as $s)
                            <option value="{{ $s->id }}" @if(in_array($s->id, $serviesArr)) selected @endif>{{ $s->name }}</option>
                        @endforeach
                    </select>
                    @error('services') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="cover" >صورة القاعة</label>
                <input type="file" wire:model='cover' id="cover" class="form-control" placeholder="">
                @error('cover') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="video" >فيديو القاعة</label>
                <input type="file" wire:model='video' id="video" class="form-control" placeholder="">
                @error('video') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="images" >معرض الصور للقاعة</label>
                <input type="file" wire:model='images' id="images" class="form-control" placeholder="" multiple>
                @error('images.*') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>



         <div class="col-12">
            <div class="form-group">
                <textarea name="details" class="form-control" wire:model.lazy='details' id="details" rows="6"
                    placeholder="التفاصيل"></textarea>
                @error('details') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn default-btn">إضافة</button>
        </div>
    </div>
</form>
