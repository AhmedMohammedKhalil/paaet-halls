<form class="find-courses-from-bg find-courses-from-bg-three mt-0" wire:submit.prevent='edit'>
    <h3> تعديل الصورة</h3>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">


        <div class="col-12">
            <div class="form-group">
                <label for="image" >صورة القاعة</label>
                <input type="file" wire:model='image' id="image" class="form-control" placeholder="">
                @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn default-btn">تعديل</button>
        </div>
    </div>
</form>
