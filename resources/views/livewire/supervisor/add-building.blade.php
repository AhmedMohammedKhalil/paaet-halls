
<form class="user-form" wire:submit.prevent='add'>
    <h3> اضافة مبني</h3>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='title' id="title" class="form-control" placeholder="الإسم">
                @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>


        <div class="col-12">
            <div class="form-group">
                <input type="file" wire:model='image' id="image" class="form-control" placeholder="">
                @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">

            <div class="form-group">
                <textarea name="address" class="form-control" wire:model.lazy='address' id="address" rows="6"
                    placeholder="العنوان"></textarea>
                @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
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
            <button type="submit" class="btn default-btn">حفظ التغييرات</button>
        </div>
    </div>
</form>