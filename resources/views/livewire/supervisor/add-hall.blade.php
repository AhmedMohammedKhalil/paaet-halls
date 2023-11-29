
<form class="find-courses-from-bg find-courses-from-bg-three mt-0" wire:submit.prevent='add'>
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
            <label for="capacity">السعة</label>
            <div class="form-group">
                <select class="form-control" wire:model.lazy='capacity'>
                        @foreach ($capacities as $c)
                            <option value="{{ $c }}" selected>{{ $c }}</option>
                        @endforeach
                    </select>
                <i class="ri-arrow-down-s-line"></i>
                @error('capacity') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>

        <div class="col-12">
            <label for="gender">النوع</label>
            <div class="form-group">
                <select class="form-control" wire:model.lazy='gender'>
                        <option value="بنين" selected>بنين</option>
                        <option value="بنات">بنات</option>
                    </select>
                <i class="ri-arrow-down-s-line"></i>
                @error('gender') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>
        <div class="col-12">
            <label for="building">المبني</label>
            <div class="form-group">
                <select class="form-control" wire:model.lazy='building_id'>
                        @foreach ($buildings as $b)
                            <option value="{{ $b->id }}" selected>{{ $b->title }}</option>
                        @endforeach
                </select>
                <i class="ri-arrow-down-s-line"></i>
                @error('building_id') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>
        <div class="col-12">
            <label for="services">الخدمات</label>
            <div class="form-group">
                <select class="form-control" multiple style="height: 100px" wire:model.lazy='services'>
                        @foreach ($servicesModel as $s)
                            <option value="{{ $s->id }}">{{ $s->name }}</option>
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
